English | [简体中文](Usage-CN.md)

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# Go SDK instructions

## Requirements
- It's necessary for you to make sure your system have installed a Go environment which is new than 1.12.x.

## Quick Examples
Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak).

## Demo
```go
import (
	"fmt"
	"strings"

	facebody "github.com/alibabacloud-go/facebody-20191230/client"
	rpc "github.com/alibabacloud-go/tea-rpc/client"
	util "github.com/alibabacloud-go/tea-utils/service"
	credential "github.com/aliyun/credentials-go/credentials"
)

func main() {
	config := new(rpc.Config)

	// init config with ak
	config.SetAccessKeyId("ACCESS_KEY_ID").
		SetAccessKeySecret("ACCESS_KEY_SECRET").
		SetRegionId("cn-hangzhou").
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com")

	// init config with credential
	credentialConfig := &credential.Config{
		AccessKeyId:     config.AccessKeyId,
		AccessKeySecret: config.AccessKeySecret,
		SecurityToken:   config.SecurityToken,
	}
	// If you have any questions, please refer to it https://github.com/aliyun/credentials-go/blob/master/README-CN.md
	cred, err := credential.NewCredential(credentialConfig)
	if err != nil {
		panic(err)
	}
	config.SetCredential(cred).
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com")

	// init client
	client, err := facebody.NewClient(config)
	if err != nil {
		panic(err)
	}

	// init runtimeObject
	runtimeObject := new(util.RuntimeOptions).SetAutoretry(false).
		SetMaxIdleConns(3)

	// init request
	request := new(facebody.DetectFaceRequest)

	// call api
	resp, err := client.DetectFace(request, runtimeObject)
	if err != nil {
		fmt.Println(err.Error())
	}
	fmt.Println(resp)

	// file upload
	uploadRequest := new(facebody.DetectFaceAdvanceRequest).SetImageURLObject(strings.NewReader("demo"))

	// call api
	uploadResp, err := client.DetectFaceAdvance(uploadRequest, runtimeObject)
	if err != nil {
		fmt.Println(err.Error())
	}
	fmt.Println(uploadResp)
}
```

## Parameter Specification
```go
type Config struct {
	AccessKeyId          *string                // AccessKey Id
	AccessKeySecret      *string                // AccessKey Secret
	Type                 *string                // credential type(Deprecated)，If you have any questions, please refer to it https://github.com/aliyun/credentials-go/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
	Credential           credential.Credential  // credential，If you have any questions, please refer to it https://github.com/aliyun/credentials-go/blob/master/README-CN.md
	SecurityToken        *string                // Security Token
	Network              *string                // network, such as inner
	Suffix               *string                // endpoint suffix
	Endpoint             *string                // endpoint, such as ecs-cn-hangzhou.aliyuncs.com
	Protocol             *string                // http or https
	RegionId             *string                // region, such as cn-hangzhou
	UserAgent            *string                // UserAgent
	ReadTimeout          *int                   // read timeout，unit：millisecond
	ConnectTimeout       *int                   // connect tiemout，unit：millisecond
	LocalAddr            *string                // the local network adapter ip
	HttpProxy            *string                // http proxy
	HttpsProxy           *string                // https proxy
	NoProxy              *string                // agent whitelist
	Socks5Proxy          *string                // socks5 proxy
	Socks5NetWork        *string                // socks5 agency agreement
	MaxIdleConns         *int                   // maximum number of connections
	EndpointType         *string                // ednpoint type：internal，accelerate or null
	OpenPlatformEndpoint *string                // endpoint used when the file is uploaded(Not at the moment)
}

type RuntimeOptions struct {
	Autoretry        *bool       // whether to enable retry
	IgnoreSSL        *bool       // whether SSL validation is ignored
	MaxAttempts      *int        // maximum number of retries， defaut: 3
	BackoffPolicy    *string     // retry the sleep strategy, default: no
	BackoffPeriod    *int        // retry the sleep time,default: 1
	ReadTimeout      *int        // read timeout，unit：millisecond
	ConnectTimeout   *int        // connect timeout，unit：millisecond
	LocalAddr        *string     // the local network adapter ip
	HttpProxy        *string     // http proxy
	HttpsProxy       *string     // https proxy
	NoProxy          *string     // agent whitelist
	MaxIdleConns     *int        // maximum number of connections
	Socks5Proxy      *string     // socks5 proxy
	Socks5NetWork    *string     // socks5 agency agreement
}
```

## SDK Migration
 If you wnat to migrate the [Old SDK](https://github.com/aliyun/alibaba-cloud-sdk-go) to the [New SDK](https://github.com/aliyun/alibabacloud-sdk), you can refer to the points:

- The new SDK does not turn on timeouts by default. The timeouts unit is milliseconds
- New SDK does not enable retry by default
- Concurrency is not supported in the new SDK
- `Request` only supports configuring business parameters
- `Response` contains only the `API` return parameter
- The same parameter in `RuntimeOptions` and `Config` , `RuntimeOptions` has a higher priority than `Config`

- `Config` removes configuration of `Debug`, `EnableAsync`, `HttpTransport`, `Transport`, `MaxTaskQueueSize`, `GoRoutinePoolSize`
- The `AutoRetry` of the original `Config`, configured instead by `AutoRetry` of `RuntimeOptions`
- The `MaxRetryTime` of the original `Config`, configured instead by `MaxRetryTime` of `RuntimeOptions`
- The `Timeout` of the original `Config`, configured instead by `ReadTimeout`
- The `Scheme` of the original `Config`, configured instead by `Protocol`

- `Client` removes configuration of `logger`, `signer`, `httpClient`, `asyncTaskQueue`, `Debug`, `isRunning`, `asyncChanLock`
- The `isInsecure` of the original `Client`, configured instead by `IgnoreSSL` of `RuntimeOptions`
- The `Domain` of the original `Client`, configured instead by `Endpoint`

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

	facebody "github.com/alibabacloud-go/Facebody-20191230/client"
	util "github.com/alibabacloud-go/tea-util/service"
)

func main() {
	// init config
	var config = new(facebody.Config).SetAccessKeyId("ACCESS_KEY_ID").
		SetAccessKeySecret("ACCESS_KEY_SECRET").
		SetRegionId("cn-hangzhou").
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com").
		SetType("access_key")

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
	AccessKeyId          *string // AccessKey Id
	AccessKeySecret      *string // AccessKey Secret
	Type                 *string // credential type，If you have any questions, please refer to it https://github.com/aliyun/credentials-go/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
	SecurityToken        *string // Security Token
	Endpoint             *string // endpoint
	Protocol             *string // http or https
	RegionId             *string // region
    UserAgent            *string // UserAgent
	ReadTimeout          *int    // read timeout
	ConnectTimeout       *int    // connect tiemout
	LocalAddr            *string // the local network adapter ip
	HttpProxy            *string // http proxy
	HttpsProxy           *string // https proxy
	NoProxy              *string // agent whitelist
	Socks5Proxy          *string // socks5 proxy
	Socks5NetWork        *string // socks5 agency agreement
	MaxIdleConns         *int    // maximum number of connections
	EndpointType         *string // ednpoint type：internal，accelerate or null
	OpenPlatformEndpoint *string // endpoint used when the file is uploaded(Not at the moment)
}

type RuntimeOptions struct {
	Autoretry        *bool       // whether to enable retry
	IgnoreSSL        *bool       // whether SSL validation is ignored
	MaxAttempts      *int        // maximum number of retries， defaut: 3
	BackoffPolicy    *string     // retry the sleep strategy, default: no
	BackoffPeriod    *int        // retry the sleep time,default: 1
	ReadTimeout      *int        // read timeout
	ConnectTimeout   *int        // connect timeout
	LocalAddr        *string     // the local network adapter ip
	HttpProxy        *string     // http proxy
	HttpsProxy       *string     // https proxy
	NoProxy          *string     // agent whitelist
	MaxIdleConns     *int        // maximum number of connections
	Socks5Proxy      *string     // socks5 proxy
	Socks5NetWork    *string     // socks5 agency agreement
}
```

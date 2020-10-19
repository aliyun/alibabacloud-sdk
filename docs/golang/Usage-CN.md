[English](Usage-EN.md) | 简体中文

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# Go SDK 使用说明

## 要求
- 您需要确保本地安装的 go 环境版本大于 1.12.0.

## 快速使用
在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。
SDK 使用 [credentials-go](https://github.com/aliyun/credentials-go/blob/master/README-CN.md) 来管理凭证。

## 使用示例
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

	// 使用 ak 初始化 config
	config.SetAccessKeyId("ACCESS_KEY_ID").
		SetAccessKeySecret("ACCESS_KEY_SECRET").
		SetRegionId("cn-hangzhou").
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com")

	// 使用 credential 初始化 config
	credentialConfig := &credential.Config{
		AccessKeyId:     config.AccessKeyId,
		AccessKeySecret: config.AccessKeySecret,
		SecurityToken:   config.SecurityToken,
	}
	// 关于 credenial 的创建可以参考 https://github.com/aliyun/credentials-go/blob/master/README-CN.md
	cred, err := credential.NewCredential(credentialConfig)
	if err != nil {
		panic(err)
	}
	config.SetCredential(cred).
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com")

	// 创建客户端
	client, err := facebody.NewClient(config)
	if err != nil {
		panic(err)
	}

	// 初始化 runtimeObject
	runtimeObject := new(util.RuntimeOptions).SetAutoretry(false).
		SetMaxIdleConns(3)

	// 初始化 request
	request := new(facebody.DetectFaceRequest)

	// 调用 api
	resp, err := client.DetectFace(request, runtimeObject)
	if err != nil {
		fmt.Println(err.Error())
	}
	fmt.Println(resp)

	// 使用文件上传
	uploadRequest := new(facebody.DetectFaceAdvanceRequest).SetImageURLObject(strings.NewReader("demo"))

	// 调用 api
	uploadResp, err := client.DetectFaceAdvance(uploadRequest, runtimeObject)
	if err != nil {
		fmt.Println(err.Error())
	}
	fmt.Println(uploadResp)
}
```

## 参数说明
```go
type Config struct {
	AccessKeyId          *string                // AccessKey Id
	AccessKeySecret      *string                // AccessKey Secret
	Type                 *string                // 凭证类型(弃用)，如有疑问请参考 https://github.com/aliyun/credentials-go/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
	SecurityToken        *string                // Security Token
	Endpoint             *string                // endpoint，例：ecs-cn-hangzhou.aliyuncs.com
	Protocol             *string                // 请求协议，例：HTTP
	Credential           credential.Credential  // 凭证，如有疑问请参考：https://github.com/aliyun/credentials-go/blob/master/README-CN.md
	RegionId             *string                // 区域，例：cn-hangzhou
	Network              *string                // 需访问服务器的网络类型。例：inner，vpc
	Suffix               *string                // endpoint 后缀
	UserAgent            *string                // UserAgent
	ReadTimeout          *int                   // 读超时，单位：毫秒
	ConnectTimeout       *int                   // 连接超时，单位：毫秒
	LocalAddr            *string                // 本地网卡 ip
	HttpProxy            *string                // http 的代理
	HttpsProxy           *string                // https 的代理
	NoProxy              *string                // 代理白名单，以 ；分割
	Socks5Proxy          *string                // socks5 代理
	Socks5NetWork        *string                // socks5 代理协议
	MaxIdleConns         *int                   // 最大连接数
	EndpointType         *string                // 域名类型：internal，accelerate 或不填
	OpenPlatformEndpoint *string                // 文件上传时授权使用的域名(目前暂不需要填写)
}

type RuntimeOptions struct {
	Autoretry        *bool       // 是否开启重试
	IgnoreSSL        *bool       // 是否忽略 SSL 校验
	MaxAttempts      *int        // 最大重试次数， 默认为 3
	BackoffPolicy    *string     // 重试休眠策略，默认为 no
	BackoffPeriod    *int        // 重试休眠时间， 默认为 1
	ReadTimeout      *int        // 读超时，单位：毫秒
	ConnectTimeout   *int        // 连接超时，单位：毫秒
	LocalAddr        *string     // 本地网卡 ip
	HttpProxy        *string     // http 的代理
	HttpsProxy       *string     // https 的代理
	NoProxy          *string     // 代理白名单
	MaxIdleConns     *int        // 最大连接数
	Socks5Proxy      *string     // socks5 代理
	Socks5NetWork    *string     // socks5 代理协议
}
```

## SDK 迁移
若想将 [老SDK](https://github.com/aliyun/alibaba-cloud-sdk-go) 迁移到 [新SDK](https://github.com/aliyun/alibabacloud-sdk), 可以参考一下几点：

- 新版本默认不开启超时，超时时间的单位为毫秒
- 新版本默认不开启重试
- 新版本暂不支持并发
- `Request` 仅支持配置业务参数
- `Response` 仅包含 `API` 返回参数
- `RuntimeOptions` 和 `Config` 中相同的参数， `RuntimeOptions` 的优先级高于 `Config`

- `Config` 删除了 `Debug`, `EnableAsync`, `HttpTransport`, `Transport`, `MaxTaskQueueSize`, `GoRoutinePoolSize` 的配置
- 原 `Config` 的 `AutoRetry`，改为通过 `RuntimeOptions` 的 `Autoretry` 来配置
- 原 `Config` 的 `MaxRetryTime`，改为通过 `RuntimeOptions` 的 `MaxAttempts` 来配置
- 原 `Config` 的 `Timeout`，改为 `ReadTimeout` 来配置
- 原 `Config` 的 `Scheme`，改为 `Protocol` 来配置

- `Client` 删除了 `logger`, `signer`, `httpClient`, `asyncTaskQueue`, `debug`, `isRunning`, `asyncChanLock` 的配置
- 原 `Client` 的 `isInsecure`，改为通过 `RuntimeOptions` 的 `IgnoreSSL` 来配置
- 原 `Client` 的 `Domain`，改为 `Endpoint` 来配置

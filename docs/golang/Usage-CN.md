[English](Usage-EN.md) | 简体中文

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# Go SDK 使用说明

## 要求
- 您需要确保本地安装的 go 环境版本大于 1.12.0.

## 安装
你可以使用 `go mod` 来管理你的依赖，
```go
  go mod tidy
```

## 快速使用
在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。
SDK 使用 [credentials-go](https://github.com/aliyun/credentials-go/blob/master/README-CN.md) 来管理凭证。

## 使用示例
```go
import (
	"fmt"
	"strings"

	facebody "github.com/aliyun/alibabacloud-sdk/facebody-20191230/golang/client"
	util "github.com/aliyun/tea-util/golang/service"
)

func main() {
	// 初始化 config
	var config = new(facebody.Config).SetAccessKeyId("ACCESS_KEY_ID").
		SetAccessKeySecret("ACCESS_KEY_SECRET").
		SetRegionId("cn-hangzhou").
		SetEndpoint("facebody.cn-hangzhou.aliyuncs.com").
		SetType("access_key")

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
	AccessKeyId          *string // AccessKey Id
	AccessKeySecret      *string // AccessKey Secret
	Type                 *string // 凭证类型，如有疑问请参考 https://github.com/aliyun/credentials-go/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
	SecurityToken        *string // Security Token
	Endpoint             *string // endpoint
	Protocol             *string // 请求协议
	RegionId             *string // 区域
    UserAgent            *string // UserAgent
	ReadTimeout          *int    // 读超时
	ConnectTimeout       *int    // 连接超时
	LocalAddr            *string // 本地网卡 ip
	HttpProxy            *string // http 的代理
	HttpsProxy           *string // https 的代理
	NoProxy              *string // 代理白名单
	Socks5Proxy          *string // socks5 代理
	Socks5NetWork        *string // socks5 代理协议
	MaxIdleConns         *int    // 最大连接数
	EndpointType         *string // 域名类型：internal，accelerate 或不填
	OpenPlatformEndpoint *string // 文件上传时授权使用的域名(目前暂不需要填写)
}

type RuntimeOptions struct {
	Autoretry        *bool       // 是否开启重试
	IgnoreSSL        *bool       // 是否忽略 SSL 校验
	MaxAttempts      *int        // 最大重试次数， 默认为 3
	BackoffPolicy    *string     // 重试休眠策略，默认为 no
	BackoffPeriod    *int        // 重试休眠时间， 默认为 1
	ReadTimeout      *int        // 读超时
	ConnectTimeout   *int        // 连接超时
	LocalAddr        *string     // 本地网卡 ip
	HttpProxy        *string     // http 的代理
	HttpsProxy       *string     // https 的代理
	NoProxy          *string     // 代理白名单
	MaxIdleConns     *int        // 最大连接数
	Socks5Proxy      *string     // socks5 代理
	Socks5NetWork    *string     // socks5 代理协议
}
```

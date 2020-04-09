[← 首页](../../README.md) | 快速使用[(English)](0-Examples-EN.md) 

***

## 要求
- 要使用 Alibaba Cloud SDK for .Net，您需要一个云账号以及一对`Access Key ID`和`Access Key Secret`。 请在阿里云控制台中的[AccessKey管理页面](https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak)上创建和查看您的Access Key，或者联系您的系统管理员。
- 要使用 Alibaba Cloud SDK for .Net 访问某个产品的API，您需要事先在[阿里云控制台](https://home.console.aliyun.com)中开通这个产品。
- Alibaba Cloud SDK for .Net 需要 net45 或者 netstandard2.0.

## 安装示例（产品ImageSearch）
Use .Net CLI ( Recommand )

    dotnet add package AlibabaCloud.SDK.ImageSearch

Use Package Manager

    Install-Package AlibabaCloud.SDK.ImageSearch

# 快速使用（产品ImageSearch）

以下这个代码示例向您展示了调用 Alibaba Cloud SDK for .Net 的4个主要步骤：
1. 创建`Client`实例并初始化。

2. 创建`RuntimeObject`实例并设置运行参数。

3. 创建API请求并设置参数。

4. 发起请求并处理应答或异常。
```csharp
using System.IO;
using AlibabaCloud.ImageSearch;
using AlibabaCloud.ImageSearch.Models;
using AlibabaCloud.TeaUtil.Models;

namespace Demo
{
    class TeaDemo
    {
        static void Main(string[] args)
        {
            // 1 Create and initialize a Client instance.
            Config config = new Config();
            config.AccessKeyId = "your accessKeyId";
            config.AccessKeySecret = "your accessKeySecret";
            config.Endpoint = "your endpoint";
            config.RegionId = "cn-shanghai";
            config.Type = "access_key";
            Client client = new Client(config);

            // 2 Create and set up parameters RuntimeObject instance.
            RuntimeOptions runtimeObject = new RuntimeOptions();
            // 3 Create an API request and set parameters.
            AddImageAdvanceRequest request = new AddImageAdvanceRequest();
            request.PicName = "picName";
            request.ProductId = "productId";
            request.InstanceName = "instanceName";
            FileStream fs = File.OpenRead("your fileName");
            request.PicContentObject = fs;
            // 4 Initiate the request and handle the response or exceptions.
            AddImageResponse response = client.AddImageAdvance(request, runtimeObject);
            
        }
    }
}
```
***
[← 首页](../../README.md) | 快速使用[(English)](0-Examples-EN.md) 

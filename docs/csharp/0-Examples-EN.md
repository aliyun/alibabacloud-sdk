[← Home](../../README.md) | Examples[(中文)](0-Examples-CN.md) 
***

## Requirements
-  To use Alibaba Cloud SDK for .Net, you must have an Alibaba Cloud account as well as an `AccessKey ID` and an `AccessKey Secret`. Create and view your AccessKey on the [RAM console](https://ram.console.aliyun.com "RAM console") or contact your system administrator.
-  To use the Alibaba Cloud SDK for .Net to access the APIs of a product, you must first activate the product on the [Alibaba Cloud console](https://home.console.aliyun.com) if required.
-  The Alibaba Cloud .Net SDK requires net45 or netstandard2.0.

## Installation Example For ImageSearch

Use .Net CLI ( Recommand )

    dotnet add package AlibabaCloud.SDK.ImageSearch

Use Package Manager

    Install-Package AlibabaCloud.SDK.ImageSearch

## Quick Examples For ImageSearch

The following code example shows the four main steps to use Alibaba Cloud SDK for .Net :

1. Create and initialize a `Client` instance.

2. Create and set up parameters `RuntimeObject` instance.

3. Create an API request and set parameters.

4. Initiate the request and handle the response or exceptions.

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
[← Home](../../README.md) | Examples[(中文)](0-Examples-CN.md) 
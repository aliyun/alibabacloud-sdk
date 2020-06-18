[← Examples](0-Examples-CN.md) | 客户端与凭证[(English)](1-Client-EN.md) | [首页 →](../../README-CN.md)
***
### 安装

Use .NET CLI ( Recommand )

    dotnet add package AlibabaCloud.SDK.Ocr20191230

Use Package Manager

    Install-Package AlibabaCloud.SDK.Ocr20191230

### 使用 AccessKey 调用
```csharp
using AlibabaCloud.SDK.Ocr20191230.Models;

namespace client_demo
{
    class Program
    {
        static void Main(string[] args)
        {
            AlibabaCloud.RPCClient.Models.Config config = new AlibabaCloud.RPCClient.Models.Config();
            // your accessKeyId
            config.AccessKeyId = "<AccessKeyId>";
            // your accessKeySecret
            config.AccessKeySecret = "#######";
            config.Endpoint = "ocr.cn-shanghai.aliyuncs.com";

            // create and initialize a DefaultAcsClient instance
            AlibabaCloud.SDK.Ocr20191230.Client client = new AlibabaCloud.SDK.Ocr20191230.Client(config);

            GetAsyncJobResultRequest resultRequest = new GetAsyncJobResultRequest();
            resultRequest.JobId = "test";

            GetAsyncJobResultResponse resultResponse = client.GetAsyncJobResult(resultRequest, new AlibabaCloud.TeaUtil.Models.RuntimeOptions());
        }
    }
}
```

### 使用默认凭证提供链

默认凭证提供程序链查找可用的凭证，寻找顺序如下：

1.环境凭证

在环境变量里寻找环境凭证，如果定义了 `ALIBABA_CLOUD_ACCESS_KEY_ID` 和 `ALIBABA_CLOUD_ACCESS_KEY_SECRET` 环境变量且不为空，程序将使用它们创建默认凭证。

2.配置文件

如果用户主目录存在默认文件 `~/.alibabacloud/credentials （Windows 为 C:\Users\USER_NAME\.alibabacloud\credentials）`，程序会自动创建指定类型和名称的凭证。默认文件可以不存在，但解析错误会抛出异常。配置名小写。不同的项目、工具之间可以共用这个配置文件，因为不在项目之内，也不会被意外提交到版本控制。
可以通过定义 `ALIBABA_CLOUD_CREDENTIALS_FILE` 环境变量修改默认文件的路径。不配置则使用默认配置 `default`，也可以设置环境变量 `ALIBABA_CLOUD_PROFILE` 使用配置。 

```ini
[default]                          # 默认配置
enable = true                      # 启用，没有该选项默认不启用
type = access_key                  # 认证方式为 access_key
access_key_id = foo                # Key
access_key_secret = bar            # Secret

[client1]                          # 命名为 `client1` 的配置
type = ecs_ram_role                # 认证方式为 ecs_ram_role
role_name = EcsRamRoleTest         # Role Name

[client2]                          # 命名为 `client2` 的配置
enable = false                     # 不启用
type = ram_role_arn                # 认证方式为 ram_role_arn
region_id = cn-test                # 获取session用的region
policy = test                      # 选填 指定权限
access_key_id = foo
access_key_secret = bar
role_arn = role_arn
role_session_name = session_name   # 选填

[client3]                          # 命名为 `client3` 的配置
type = rsa_key_pair                # 认证方式为 rsa_key_pair
public_key_id = publicKeyId        # Public Key ID
private_key_file = /your/pk.pem    # Private Key 文件
```
3.实例 RAM 角色

如果定义了环境变量 `ALIBABA_CLOUD_ECS_METADATA` 且不为空，程序会将该环境变量的值作为角色名称，请求 <http://100.100.100.200/latest/meta-data/ram/security-credentials/> 获取临时安全凭证。

```csharp
using AlibabaCloud.SDK.Ocr20191230.Models;

namespace client_demo
{
    class Program
    {
        static void Main(string[] args)
        {
            AlibabaCloud.RPCClient.Models.Config config = new AlibabaCloud.RPCClient.Models.Config();
            // enable the default credential chain
            config.Credential = new Aliyun.Credentials.Client(null);
            config.Endpoint = "ocr.cn-shanghai.aliyuncs.com";

            // create and initialize a DefaultAcsClient instance
            AlibabaCloud.SDK.Ocr20191230.Client client = new AlibabaCloud.SDK.Ocr20191230.Client(config);

            GetAsyncJobResultRequest resultRequest = new GetAsyncJobResultRequest();
            resultRequest.JobId = "test";

            GetAsyncJobResultResponse resultResponse = client.GetAsyncJobResult(resultRequest, new AlibabaCloud.TeaUtil.Models.RuntimeOptions());
        }
    }
}
```

***
[← Examples](0-Examples-CN.md) | 客户端与凭证[(English)](1-Client-EN.md) | [首页 →](../../README-CN.md)
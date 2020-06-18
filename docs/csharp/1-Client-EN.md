[← Examples](0-Examples-EN.md) | Client & Credentials[(中文)](1-Client-CN.md) | [Home →](../../README.md)
***
### Installation

Use .NET CLI ( Recommand )

    dotnet add package AlibabaCloud.SDK.Ocr20191230

Use Package Manager

    Install-Package AlibabaCloud.SDK.Ocr20191230

### Using AccessKey call

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

### Use the default credential provider chain

The default credential provider chain looks for available credentials, with following order:

1.Environment Credentials

Look for environment credentials in environment variable. If the `ALIBABA_CLOUD_ACCESS_KEY_ID` and `ALIBABA_CLOUD_ACCESS_KEY_SECRET` environment variables are defined and are not empty, the program will use them to create default credentials.

2.Credentials File

If there is `~/.alibabacloud/credentials default file (Windows shows C:\Users\USER_NAME\.alibabacloud\credentials)`, the program automatically creates credentials with the specified type and name. The default file is not necessarily exist, but a parse error will throw an exception. The name of configuration item is lowercase.This configuration file can be shared between different projects and between different tools. Because it is outside of the project and will not be accidentally committed to the version control. The path to the default file can be modified by defining the `ALIBABA_CLOUD_CREDENTIALS_FILE` environment variable. If not configured, use the default configuration `default`. You can also set the environment variables `ALIBABA_CLOUD_PROFILE` to use the configuration.

```ini
[default]                          # default setting
enable = true                      # Enable，Enabled by default if this option is not present
type = access_key                  # Certification type: access_key
access_key_id = foo                # Key
access_key_secret = bar            # Secret

[client1]                          # configuration that is named as `client1`
type = ecs_ram_role                # Certification type: ecs_ram_role
role_name = EcsRamRoleTest         # Role Name

[client2]                          # configuration that is named as `client2`
enable = false                     # Disable
type = ram_role_arn                # Certification type: ram_role_arn
region_id = cn-test                 
policy = test                      # optional Specify permissions
access_key_id = foo                
access_key_secret = bar            
role_arn = role_arn                
role_session_name = session_name   # optional

[client3]                          # configuration that is named as `client3`
type = rsa_key_pair                # Certification type: rsa_key_pair
public_key_id = publicKeyId        # Public Key ID
private_key_file = /your/pk.pem    # Private Key file
```
3.Instance RAM Role

If the environment variable `ALIBABA_CLOUD_ECS_METADATA` is defined and not empty, the program will take the value of the environment variable as the role name and request <http://100.100.100.200/latest/meta-data/ram/security-credentials/> to get the temporary Security credentials.

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
[← Examples](0-Examples-EN.md) | Client & Credentials[(中文)](1-Client-CN.md) | [Home →](../../README.md)
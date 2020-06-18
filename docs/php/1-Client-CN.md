[← Examples](0-Examples-CN.md) | 客户端与凭证[(English)](1-Client-EN.md) | [首页 →](../../README-CN.md)
***

### 使用 AccessKey 调用

```java

use AlibabaCloud\Tea\Rpc\Rpc\Config;

$config                  = new Config();
$config->accessKeyId     = "<Access-Key-Id>";
$config->accessKeySecret = "<Access-Key-Secret>";
$client                  = new ImageSearch($config);

```

### 使用默认凭证提供链

默认凭证提供程序链查找可用的凭证，寻找顺序如下：

1. 环境凭证

在环境变量里寻找环境凭证，如果定义了 `ALIBABA_CLOUD_ACCESS_KEY_ID` 和 `ALIBABA_CLOUD_ACCESS_KEY_SECRET` 环境变量且不为空，程序将使用它们创建默认凭证。

2. 配置文件

如果用户主目录存在默认文件 `~/.alibabacloud/credentials` （Windows 为 `C:\Users\USER_NAME\.alibabacloud\credentials`），程序会自动创建指定类型和名称的客户端。默认文件可以不存在，但解析错误会抛出异常。  客户端名称不分大小写，若客户端同名，后者会覆盖前者。也可以手动加载指定文件： `AlibabaCloud::load('/data/credentials', 'vfs://AlibabaCloud/credentials', ...);` 不同的项目、工具之间可以共用这个配置文件，因为超出项目之外，也不会被意外提交到版本控制。Windows 上可以使用环境变量引用到主目录 %UserProfile%。类 Unix 的系统可以使用环境变量 $HOME 或 ~ (tilde)。 可以通过定义 `ALIBABA_CLOUD_CREDENTIALS_FILE` 环境变量修改默认文件的路径。

```ini
[default]                          # 默认客户端
enable = true                      # 启用，没有该选项默认启用
type = access_key                  # 认证方式为 access_key
access_key_id = foo                # Key
access_key_secret = bar            # Secret
region_id = cn-hangzhou            # 非必填，区域
debug = true                       # 非必填，Debug模式会在CLI下输出详细信息
timeout = 0.2                      # 非必填，超时时间，>1为单位为秒, <1自动乘1000转为毫秒
connect_Timeout = 0.03             # 非必填，连接超时时间，同超时时间
cert_file = /path/server.pem       # 非必填，证书文件
cert_password = password           # 非必填，证书密码，没有密码可不填
proxy = tcp://localhost:8125       # 非必填，总代理
proxy_http = tcp://localhost:8125  # 非必填，HTTP代理
proxy_https = tcp://localhost:9124 # 非必填，HTTPS代理
proxy_no = .mit.edu,foo.com        # 非必填，代理忽略的域名

[client1]                          # 命名为 `client1` 的客户端
type = ecs_ram_role                # 认证方式为 ecs_ram_role
role_name = EcsRamRoleTest         # Role Name
#..................................# 其他配置忽略同上

[client2]                          # 命名为 `client2` 的客户端
enable = false                     # 不启用
type = ram_role_arn                # 认证方式为 ram_role_arn
access_key_id = foo
access_key_secret = bar
role_arn = role_arn
role_session_name = session_name
#..................................# 其他配置忽略同上

[client3]                          # 命名为 `client3` 的客户端
type = rsa_key_pair                # 认证方式为 rsa_key_pair
public_key_id = publicKeyId        # Public Key ID
private_key_file = /your/pk.pem    # Private Key 文件
#..................................# 其他配置忽略同上

```

3. 实例 RAM 角色

如果定义了环境变量 `ALIBABA_CLOUD_ECS_METADATA` 且不为空，程序会将该环境变量的值作为角色名称，请求 `http://100.100.100.200/latest/meta-data/ram/security-credentials/` 获取临时安全凭证，再创建一个默认客户端。

***
[← Examples](0-Examples-CN.md) | 客户端与凭证[(English)](1-Client-EN.md) | [首页 →](../../README-CN.md)

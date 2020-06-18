[← Examples](0-Examples-EN.md) | Client & Credentials[(中文)](1-Client-CN.md) | [Home →](../../README.md)
***

### Using AccessKey call

```java

use AlibabaCloud\Tea\Rpc\Rpc\Config;

$config                  = new Config();
$config->accessKeyId     = "<Access-Key-Id>";
$config->accessKeySecret = "<Access-Key-Secret>";
$client                  = new ImageSearch($config);

```

### Use the default credential provider chain

The default credential provider chain looks for available credentials, with following order:

1. Environment Credentials

Look for environment credentials in environment variable. If the `ALIBABA_CLOUD_ACCESS_KEY_ID` and `ALIBABA_CLOUD_ACCESS_KEY_SECRET` environment variables are defined and are not empty, the program will use them to create default credentials.

2. Credentials File

If there is `~/.alibabacloud/credentials` default file (Windows shows `C:\Users\USER_NAME\.alibabacloud\credentials`), the program will automatically create clients with the specified type and name. The default file may not exist, but a parse error throws an exception. The client name is case-insensitive, and if the clients have the same name, the latter will override the former. The specified files can also be loaded indefinitely: `AlibabaCloud::load('/data/credentials', 'vfs://AlibabaCloud/credentials', ...);` This configuration file can be shared between different projects and between different tools.  Because it is outside the project and will not be accidentally committed to the version control. Environment variables can be used on Windows to refer to the home directory %UserProfile%. Unix-like systems can use the environment variable $HOME or ~ (tilde). The path to the default file can be modified by defining the `ALIBABA_CLOUD_CREDENTIALS_FILE` environment variable.

```ini
[default]                          # Default client
enable = true                      # Enable，Enabled by default if this option not present
type = access_key                  # Certification type: access_key
access_key_id = foo                # Key
access_key_secret = bar            # Secret
region_id = cn-hangzhou            # Optional，Region
debug = true                       # Optional，Debug mode will output the details under CLI
timeout = 0.2                      # Optional，Time-out period. if >1, unit is seconds; if<1, unit will be converted to milliseconds by multiplying 1000 automatically
connect_Timeout = 0.03             # Optional，Connection timeout, same as timeout
cert_file = /path/server.pem       # Optional，Certification file
cert_password = password           # Optional，Certification password, can be empty if no password
proxy = tcp://localhost:8125       # Optional，General proxy
proxy_http = tcp://localhost:8125  # Optional，HTTP proxy
proxy_https = tcp://localhost:9124 # Optional，HTTPS proxy
proxy_no = .mit.edu,foo.com        # Optional，Ignored Domain Name by proxy

[client1]                          # Client that is named as `client1`
type = ecs_ram_role                # Certification type: ecs_ram_role
role_name = EcsRamRoleTest         # Role Name
#..................................# As above, other configurations ignored.

[client2]                          # Client that is named as `client2` 
enable = false                     # Disable
type = ram_role_arn                # Certification type: ram_role_arn
access_key_id = foo
access_key_secret = bar
role_arn = role_arn
role_session_name = session_name
#..................................# As above, other configurations ignored.

[client3]                          # Client that is named as `client3`
type = rsa_key_pair                # Certification type: rsa_key_pair
public_key_id = publicKeyId        # Public Key ID
private_key_file = /your/pk.pem    # Private Key file
#..................................# As above, other configurations ignored.
```

3. Instance RAM Role

If the environment variable `ALIBABA_CLOUD_ECS_METADATA` is defined and not empty, the program will take the value of the environment variable as the role name and request `http://100.100.100.200/latest/meta-data/ram/security-credentials/` to get the temporary Security credentials, then create a default client.

***
[← Examples](0-Examples-EN.md) | Client & Credentials[(中文)](1-Client-CN.md) | [Home →](../../README.md)

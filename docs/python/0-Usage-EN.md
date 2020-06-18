[← Home](../../README.md) | Usage[(中文)](0-Usage-CN.md) | [Client & Credentials →](1-Client-EN.md)

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# Python SDK instructions

## Requirements

- Python >= 3.x

## Installation

If you use `pip` to install your dependence

```sh
$ pip install alibabacloud-imagesearch20200212
```

## Quick Examples

Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak).

## Demo

```python
from alibabacloud_imagesearch20200212.client import Client
from alibabacloud_imagesearch20200212.models import SearchImageByPicAdvanceRequest
from alibabacloud_oss_util.models import RuntimeOptions
from alibabacloud_tea_rpc.models import Config

'''ImageSearch Example'''


f = open('pic.jpg', 'rb')
# init Request
request = SearchImageByPicAdvanceRequest(
    instance_name='name',
    pic_content_object=f
)

# init Config
config = Config(
    access_key_id='<your_accsee_key_id>',
    access_key_secret='<your_access_key_secret>',
    endpoint='<your_endpoint>',
    region_id='cn-shanghai',
    type='access_key'
)

# init RuntimeObject
runtime_option = RuntimeOptions()

# init Client
client = Client(config)

# call api
response = client.search_image_by_pic_advance(request, runtime_option)

print(response.to_map())
f.close()
```

## Parameter Specification

```python
'''Config'''
class Config(TeaModel):
    def __init__(self):
        self.access_key_id = access_key_id          # access key id
        self.access_key_secret = access_key_secret  # access key secret
        self.security_token = security_token        # Security Token
        self.protocol = protocol                    # http|https
        self.region_id = region_id                  # region id
        self.read_timeout = read_timeout            # read timeout
        self.connect_timeout = connect_timeout      # connect timeout
        self.http_proxy = http_proxy                # http proxy
        self.https_proxy = https_proxy              # https proxy
        self.endpoint = endpoint                    # endpoint
        self.no_proxy = no_proxy                    # agent whitelist
        self.max_idle_conns = max_idle_conns        # maximum number of connections
        self.user_agent = user_agent                # User-Agent
        self.socks_5proxy = socks_5proxy            # socks5 proxy
        self.socks_5net_work = socks_5net_work      # ocks5 agency agreement
        self.endpoint_type = endpoint_type          # ednpoint type：internal，accelerate or null
        self.open_platform_endpoint = open_platform_endpoint  # endpoint used when the file is uploaded(Not at the moment)
        self.type = type                            # credential type，If you have any questions, please refer to it https://github.com/aliyun/credentials-python/blob/master/README-CN.md


'''RuntimeOptions'''
class RuntimeOptions(TeaModel):
    def __init__(self):
        self.autoretry = autoretry                    # whether to enable retry
        self.ignore_ssl = ignore_ssl                  # whether SSL validation is ignored
        self.max_attempts = max_attempts              # maximum number of retries
        self.backoff_policy = backoff_policy          # retry the sleep strategy
        self.backoff_period = backoff_period          # retry the sleep time
        self.read_timeout = read_timeout              # read timeout
        self.connect_timeout = connect_timeout        # connect timeout
        self.local_addr = local_addr                  # the local network adapter ip
        self.http_proxy = http_proxy                  # http proxy
        self.https_proxy = https_proxy                # httpsproxy
        self.no_proxy = no_proxy                      # agent whitelist
        self.max_idle_conns = max_idle_conns          # maximum number of connections
        self.socks_5proxy = socks_5proxy              # socks5 proxy
        self.socks_5net_work = socks_5net_work        # socks5 proxy
```
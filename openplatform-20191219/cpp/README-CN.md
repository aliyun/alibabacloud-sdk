[English](/README.md) | 简体中文


# Alibabacloud OpenPlatform20191219 SDK for C++

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

Alibabacloud OpenPlatform20191219 SDK 是基于 [`Darabonba DSL`](https://github.com/aliyun/darabonba) 解决方案的，它是一种 OpenAPI 应用领域的特定语言。可以利用它为任意风格的接口生成多语言的 SDK、代码示例、测试用例、接口编排等。

## 必备的依赖库

- [Boost](https://www.boost.org/users/download/)
- [CPPRestSDK](https://github.com/microsoft/cpprestsdk/releases)
- [OpenSSL](https://www.openssl.org/source/)

在使用这个 SDK 访问 API 之前，请先安装必备的依赖库。

- 使用 Homebrew 安装

```bash
brew install boost cpprestsdk openssl
```

- 使用 yum 安装

```bash
yum install boost-devel openssl-devel

# 暂不支持通过 yum 安装 cpprestsdk
```

- 使用 apt-get 安装

```bash
# install boost
sudo add-apt-repository ppa:mhier/libboost-latest -y
sudo apt-get update
sudo apt-get install libboost-all-dev

sudo apt-get install libcpprest-dev libcurl4-openssl-dev libssl-dev
```

- 使用 vcpkg 安装

```bash
vcpkg install boost openssl-windows cpprestsdk
```

## 安装

### Linux

```bash
git clone https://github.com/alibabacloud-sdk-cpp/openplatform-20191219.git
cd openplatform-20191219
sh scripts/install.sh
```

### Windows

1. 使用 [git-bash](https://git-scm.com/downloads) 执行以下命令，从 Github 克隆源码

  ```bash
  git clone https://github.com/alibabacloud-sdk-cpp/openplatform-20191219.git
  ```
2. 使用 Visual Studio 进行编译:
  * 安装 [CMake](https://cmake.org/download/) 和 [Visual Studio](https://visualstudio.microsoft.com/zh-hans/)
  * 在项目根目录下创建 `cmake_build` 文件夹
  * 打开 [CMake](https://cmake.org/download/) 软件, 然后进行以下操作
    * 选择 `Browse Source` 为 `源代码目录(alibabacloud_open_platform_20191219)`
    * 选择 `Browse build` 为 `构建目录(cmake_build)`
    * 点击 `configure`
    * 点击 `generate`, 构建 VS 解决方案。

3. 编译安装 C++ SDK
  * 进入 cmake_build 目录，使用 Visual Studio 打开 darabonba_core.sln 解决方案
  * 选择构建 `Release` 输出
  * 并打开配置管理器勾选 `INSTALL`
  * 构建 -> 生成解决方案

## 问题

[提交 Issue](https://github.com/alibabacloud-sdk-cpp/openplatform-20191219/issues/new/choose)，不符合指南的问题可能会立即关闭。

## 相关

* [OpenAPI Explorer][open-api]
* [Latest Release][latest-release]
* [Alibabacloud Console System][console]
* [Alibaba Cloud Home Page][aliyun]

## 许可证

[Apache-2.0](/LICENSE.md)

Copyright (c) 2009-present, Alibaba Cloud All rights reserved.

[open-api]: https://api.aliyun.com
[latest-release]: https://github.com/alibabacloud-sdk-cpp/openplatform-20191219/releases
[console]: https://home.console.aliyun.com
[aliyun]: https://www.aliyun.com

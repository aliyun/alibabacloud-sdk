[English](Usage-EN.md) | 简体中文

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# TypeScript/Node.js SDK 使用说明

## 要求

- Node.js >= 8.x

## 安装

你可以使用 `npm` 来管理你的依赖，并通过下面命令安装依赖并写入 package.json

```sh
$ npm install @alicloud/facebody20191230 -S
```

## 快速使用

在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。
SDK 使用 [credentials-nodejs](https://github.com/aliyun/credentials-nodejs/blob/master/README-CN.md) 来管理凭证。

## 使用示例

```javascript
import Client from "@alicloud/facebody20191230";
import * as Util from "@alicloud/tea-util";
// 创建客户端
const client = new Client({
  endpoint: "your endpoint",
  accessKeyId: "your access key id",
  accessKeySecret: "your access key secret",
  type: "access_key",
  regionId: "cn-hangzhou"
});
// 初始化 runtimeObject
const runtimeObject = new Util.RuntimeOptions({});
// 初始化 request
const addFaceEntityRequest = new AddFaceEntityRequest({
  dbName: "dbName",
  entityId: "entityId",
  labels: "labels"
});
// 调用 api
const res = await client.addFaceEntity(addFaceEntityRequest, runtimeObject);
```

## 参数说明

```javascript
const Config = {
  AccessKeyId: "AccessKeyId", // AccessKey Id
  AccessKeySecret: "AccessKeySecret", // AccessKey Secret
  Type: "Type", // 凭证类型，如有疑问请参考 https://github.com/aliyun/credentials-nodejs/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
  SecurityToken: "SecurityToken", // Security Token
  Endpoint: "Endpoint", // endpoint
  Protocol: "Protocol", // 请求协议
  RegionId: "RegionId", // 区域
  UserAgent: "UserAgent", // UserAgent
  ReadTimeout: "ReadTimeout", // 读超时
  ConnectTimeout: "ConnectTimeout", // 连接超时
  LocalAddr: "LocalAddr", // 本地网卡 ip
  HttpProxy: "HttpProxy", // http 的代理
  HttpsProxy: "HttpsProxy", // https 的代理
  NoProxy: "NoProxy", // 代理白名单
  Socks5Proxy: "Socks5Proxy", // socks5 代理
  Socks5NetWork: "Socks5NetWork", // socks5 代理协议
  MaxIdleConns: "MaxIdleConns", // 最大连接数
  EndpointType: "EndpointType", // 域名类型：internal，accelerate 或不填
  OpenPlatformEndpoint: "OpenPlatformEndpoint" // 文件上传时授权使用的域名(目前暂不需要填写)
};

const RuntimeOptions = {
  Autoretry: "Autoretry", // 是否开启重试
  IgnoreSSL: "IgnoreSSL", // 是否忽略 SSL 校验
  MaxAttempts: "MaxAttempts", // 最大重试次数， 默认为 3
  BackoffPolicy: "BackoffPolicy", // 重试休眠策略，默认为 no
  BackoffPeriod: "BackoffPeriod", // 重试休眠时间， 默认为 1
  ReadTimeout: "ReadTimeout", // 读超时
  ConnectTimeout: "ConnectTimeout", // 连接超时
  LocalAddr: "LocalAddr", // 本地网卡 ip
  HttpProxy: "HttpProxy", // http 的代理
  HttpsProxy: "HttpsProxy", // https 的代理
  NoProxy: "NoProxy", // 代理白名单
  MaxIdleConns: "MaxIdleConns", // 最大连接数
  Socks5Proxy: "Socks5Proxy", // socks5 代理
  Socks5NetWork: "Socks5NetWork" // socks5 代理协议
};
```

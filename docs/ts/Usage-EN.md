English | [简体中文](Usage-CN.md)

![](https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg)

# TypeScript/Node.js SDK instructions

## Requirements

- Node.js >= 8.x

## Installation

If you use `npm` to manage your dependence, you can use the following command:

```sh
$ npm install @alicloud/facebody20191230 -S
```

## Quick Examples

Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak).

## Demo

```javascript
import Client from "@alicloud/facebody20191230";
import * as Util from "@alicloud/tea-util";
// init client
const client = new Client({
  endpoint: "your endpoint",
  accessKeyId: "your access key id",
  accessKeySecret: "your access key secret",
  type: "access_key",
  regionId: "cn-hangzhou"
});
// init runtimeObject
const runtimeObject = new Util.RuntimeOptions({});
// init request
const addFaceEntityRequest = new AddFaceEntityRequest({
  dbName: "dbName",
  entityId: "entityId",
  labels: "labels"
});
// call api
const res = await client.addFaceEntity(addFaceEntityRequest, runtimeObject);
```

## Parameter Specification

```javascript
const config = {
  AccessKeyId: "AccessKeyId", // AccessKey Id
  AccessKeySecret: "AccessKeySecret", // AccessKey Secret
  Type: "Type", // credential type，If you have any questions, please refer to it https://github.com/aliyun/credentials-nodejs/blob/master/README-CN.md#%E5%87%AD%E8%AF%81%E7%B1%BB%E5%9E%8B
  SecurityToken: "SecurityToken", // Security Token
  Endpoint: "Endpoint", // endpoint
  Protocol: "Protocol", // http or https
  RegionId: "RegionId", // region
  UserAgent: "UserAgent", // UserAgent
  ReadTimeout: "ReadTimeout", // read timeout
  ConnectTimeout: "ConnectTimeout", // connect tiemout
  LocalAddr: "LocalAddr", // the local network adapter ip
  HttpProxy: "HttpProxy", // http proxy
  HttpsProxy: "HttpsProxy", // https proxy
  NoProxy: "NoProxy", // agent whitelist
  Socks5Proxy: "Socks5Proxy", // socks5 proxy
  Socks5NetWork: "Socks5NetWork", // socks5 agency agreement
  MaxIdleConns: "MaxIdleConns", // maximum number of connections
  EndpointType: "EndpointType", // ednpoint type：internal，accelerate or null
  OpenPlatformEndpoint: "OpenPlatformEndpoint" // endpoint used when the file is uploaded(Not at the moment)
};

const RuntimeOptions = {
  Autoretry: "Autoretry", // whether to enable retry
  IgnoreSSL: "IgnoreSSL", // whether SSL validation is ignored
  MaxAttempts: "MaxAttempts", // maximum number of retries， defaut: 3
  BackoffPolicy: "BackoffPolicy", // retry the sleep strategy, default: no
  BackoffPeriod: "BackoffPeriod", // retry the sleep time,default: 1
  ReadTimeout: "ReadTimeout", // read timeout
  ConnectTimeout: "ConnectTimeout", // connect timeout
  LocalAddr: "LocalAddr", // the local network adapter ip
  HttpProxy: "HttpProxy", // http proxy
  HttpsProxy: "HttpsProxy", // https proxy
  NoProxy: "NoProxy", // agent whitelist
  MaxIdleConns: "MaxIdleConns", // maximum number of connections
  Socks5Proxy: "Socks5Proxy", // socks5 proxy
  Socks5NetWork: "Socks5NetWork" // socks5 agency agreement
};
```

// This file is auto-generated, don't edit it
import OSS, * as $OSS from '@alicloud/oss-client';
import OpenPlatform, * as $OpenPlatform from '@alicloud/openplatform';
import RPCUtil from '@alicloud/rpc-util';
import OSSUtil, * as $OSSUtil from '@alicloud/oss-util';
import Util, * as $Util from '@alicloud/tea-util';
import Credential, * as $Credential from '@alicloud/credentials';
import FileForm, * as $FileForm from '@alicloud/tea-fileform';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

export class Config extends $tea.Model {
  accessKeyId?: string;
  accessKeySecret?: string;
  type?: string;
  securityToken?: string;
  endpoint: string;
  protocol?: string;
  regionId: string;
  userAgent?: string;
  readTimeout?: number;
  connectTimeout?: number;
  httpProxy?: string;
  httpsProxy?: string;
  noProxy?: string;
  socks5Proxy?: string;
  socks5NetWork?: string;
  maxIdleConns?: number;
  endpointType?: string;
  openPlatformEndpoint?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'accessKeyId',
      accessKeySecret: 'accessKeySecret',
      type: 'type',
      securityToken: 'securityToken',
      endpoint: 'endpoint',
      protocol: 'protocol',
      regionId: 'regionId',
      userAgent: 'userAgent',
      readTimeout: 'readTimeout',
      connectTimeout: 'connectTimeout',
      httpProxy: 'httpProxy',
      httpsProxy: 'httpsProxy',
      noProxy: 'noProxy',
      socks5Proxy: 'socks5Proxy',
      socks5NetWork: 'socks5NetWork',
      maxIdleConns: 'maxIdleConns',
      endpointType: 'endpointType',
      openPlatformEndpoint: 'openPlatformEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      accessKeySecret: 'string',
      type: 'string',
      securityToken: 'string',
      endpoint: 'string',
      protocol: 'string',
      regionId: 'string',
      userAgent: 'string',
      readTimeout: 'number',
      connectTimeout: 'number',
      httpProxy: 'string',
      httpsProxy: 'string',
      noProxy: 'string',
      socks5Proxy: 'string',
      socks5NetWork: 'string',
      maxIdleConns: 'number',
      endpointType: 'string',
      openPlatformEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureAttributeRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureAttributeResponse extends $tea.Model {
  requestId: string;
  data: RecognizeFurnitureAttributeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeFurnitureAttributeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureAttributeAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuRequest extends $tea.Model {
  imageURL: string;
  XLength: number;
  YLength: number;
  ZLength: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      XLength: 'XLength',
      YLength: 'YLength',
      ZLength: 'ZLength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      XLength: 'number',
      YLength: 'number',
      ZLength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuResponse extends $tea.Model {
  requestId: string;
  data: RecognizeFurnitureSpuResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeFurnitureSpuResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  XLength: number;
  YLength: number;
  ZLength: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      XLength: 'XLength',
      YLength: 'YLength',
      ZLength: 'ZLength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      XLength: 'number',
      YLength: 'number',
      ZLength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityRequest extends $tea.Model {
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityResponse extends $tea.Model {
  requestId: string;
  data: ClassifyCommodityResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ClassifyCommodityResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureAttributeResponseData extends $tea.Model {
  predStyleId: string;
  predStyle: string;
  predProbability: number;
  static names(): { [key: string]: string } {
    return {
      predStyleId: 'PredStyleId',
      predStyle: 'PredStyle',
      predProbability: 'PredProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      predStyleId: 'string',
      predStyle: 'string',
      predProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuResponseData extends $tea.Model {
  predCateId: string;
  predCate: string;
  predProbability: number;
  static names(): { [key: string]: string } {
    return {
      predCateId: 'PredCateId',
      predCate: 'PredCate',
      predProbability: 'PredProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      predCateId: 'string',
      predCate: 'string',
      predProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityResponseDataCategories extends $tea.Model {
  score: number;
  categoryName: string;
  categoryId: string;
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      categoryName: 'CategoryName',
      categoryId: 'CategoryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      categoryName: 'string',
      categoryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityResponseData extends $tea.Model {
  categories: ClassifyCommodityResponseDataCategories[];
  static names(): { [key: string]: string } {
    return {
      categories: 'Categories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categories: { 'type': 'array', 'itemType': ClassifyCommodityResponseDataCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client {
  _endpoint: string;
  _regionId: string;
  _protocol: string;
  _userAgent: string;
  _endpointType: string;
  _readTimeout: number;
  _connectTimeout: number;
  _httpProxy: string;
  _httpsProxy: string;
  _socks5Proxy: string;
  _socks5NetWork: string;
  _noProxy: string;
  _maxIdleConns: number;
  _openPlatformEndpoint: string;
  _credential: Credential;

  constructor(config: Config) {
    if (Util.isUnset($tea.toMap(config))) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config' can not be unset",
      });
    }

    if (Util.empty(config.regionId)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.regionId' can not be empty",
      });
    }

    if (Util.empty(config.endpoint)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.endpoint' can not be empty",
      });
    }

    if (Util.empty(config.type)) {
      config.type = "access_key";
    }

    let credentialConfig = new $Credential.Config({
      accessKeyId: config.accessKeyId,
      type: config.type,
      accessKeySecret: config.accessKeySecret,
      securityToken: config.securityToken,
    });
    this._credential = new Credential(credentialConfig);
    this._endpoint = config.endpoint;
    this._protocol = config.protocol;
    this._regionId = config.regionId;
    this._userAgent = config.userAgent;
    this._readTimeout = config.readTimeout;
    this._connectTimeout = config.connectTimeout;
    this._httpProxy = config.httpProxy;
    this._httpsProxy = config.httpsProxy;
    this._noProxy = config.noProxy;
    this._socks5Proxy = config.socks5Proxy;
    this._socks5NetWork = config.socks5NetWork;
    this._maxIdleConns = config.maxIdleConns;
    this._endpointType = config.endpointType;
    this._openPlatformEndpoint = config.openPlatformEndpoint;
  }

  async _request(action: string, protocol: string, method: string, authType: string, query: {[key: string]: any}, body: {[key: string]: any}, runtime: $Util.RuntimeOptions): Promise<{[key: string]: any}> {
    let _runtime: { [key: string]: any } = {
      timeouted: "retry",
      readTimeout: Util.defaultNumber(runtime.readTimeout, this._readTimeout),
      connectTimeout: Util.defaultNumber(runtime.connectTimeout, this._connectTimeout),
      httpProxy: Util.defaultString(runtime.httpProxy, this._httpProxy),
      httpsProxy: Util.defaultString(runtime.httpsProxy, this._httpsProxy),
      noProxy: Util.defaultString(runtime.noProxy, this._noProxy),
      maxIdleConns: Util.defaultNumber(runtime.maxIdleConns, this._maxIdleConns),
      retry: {
        retryable: runtime.autoretry,
        maxAttempts: Util.defaultNumber(runtime.maxAttempts, 3),
      },
      backoff: {
        policy: Util.defaultString(runtime.backoffPolicy, "no"),
        period: Util.defaultNumber(runtime.backoffPeriod, 1),
      },
      ignoreSSL: runtime.ignoreSSL,
    }

    let _lastRequest = null;
    let _now = Date.now();
    let _retryTimes = 0;
    while ($tea.allowRetry(_runtime['retry'], _retryTimes, _now)) {
      if (_retryTimes > 0) {
        let _backoffTime = $tea.getBackoffTime(_runtime['backoff'], _retryTimes);
        if (_backoffTime > 0) {
          await $tea.sleep(_backoffTime);
        }
      }

      _retryTimes = _retryTimes + 1;
      try {
        let request_ = new $tea.Request();
        request_.protocol = Util.defaultString(this._protocol, protocol);
        request_.method = method;
        request_.pathname = "/";
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2019-12-30",
          SignatureNonce: Util.getNonce(),
          ...query,
        });
        if (!Util.isUnset(body)) {
          let tmp = Util.anyifyMapValue(RPCUtil.query(body));
          request_.body = new $tea.BytesReadable(Util.toFormString(tmp));
        }

        request_.headers = {
          host: RPCUtil.getHost("goodstech", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        if (!Util.equalString(authType, "Anonymous")) {
          let accessKeyId = await this.getAccessKeyId();
          let accessKeySecret = await this.getAccessKeySecret();
          request_.query["SignatureMethod"] = "HMAC-SHA1";
          request_.query["SignatureVersion"] = "1.0";
          request_.query["AccessKeyId"] = accessKeyId;
          request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        }

        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let res = Util.assertAsMap(obj);
        if (Util.is4xx(response_.statusCode) || Util.is5xx(response_.statusCode)) {
          throw $tea.newError({
            message: res["Message"],
            data: res,
            code: res["Code"],
          });
        }

        return res;
      } catch (ex) {
        if ($tea.isRetryable(ex)) {
          continue;
        }
        throw ex;
      }
    }

    throw $tea.newUnretryableError(_lastRequest);
  }

  async recognizeFurnitureAttribute(request: RecognizeFurnitureAttributeRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureAttributeResponse> {
    return $tea.cast<RecognizeFurnitureAttributeResponse>(await this._request("RecognizeFurnitureAttribute", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeFurnitureAttributeResponse({}));
  }

  async recognizeFurnitureAttributeAdvance(request: RecognizeFurnitureAttributeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureAttributeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "goodstech",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeFurnitureAttributereq = new RecognizeFurnitureAttributeRequest({ });
    RPCUtil.convert(request, recognizeFurnitureAttributereq);
    recognizeFurnitureAttributereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFurnitureAttributeResp = await this.recognizeFurnitureAttribute(recognizeFurnitureAttributereq, runtime);
    return recognizeFurnitureAttributeResp;
  }

  async recognizeFurnitureSpu(request: RecognizeFurnitureSpuRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureSpuResponse> {
    return $tea.cast<RecognizeFurnitureSpuResponse>(await this._request("RecognizeFurnitureSpu", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecognizeFurnitureSpuResponse({}));
  }

  async recognizeFurnitureSpuAdvance(request: RecognizeFurnitureSpuAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureSpuResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "goodstech",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let recognizeFurnitureSpureq = new RecognizeFurnitureSpuRequest({ });
    RPCUtil.convert(request, recognizeFurnitureSpureq);
    recognizeFurnitureSpureq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFurnitureSpuResp = await this.recognizeFurnitureSpu(recognizeFurnitureSpureq, runtime);
    return recognizeFurnitureSpuResp;
  }

  async classifyCommodity(request: ClassifyCommodityRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyCommodityResponse> {
    return $tea.cast<ClassifyCommodityResponse>(await this._request("ClassifyCommodity", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new ClassifyCommodityResponse({}));
  }

  async classifyCommodityAdvance(request: ClassifyCommodityAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyCommodityResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $OpenPlatform.Config({
      accessKeyId: accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: "openplatform.aliyuncs.com",
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let authClient = new OpenPlatform(authConfig);
    let authRequest = new $OpenPlatform.AuthorizeFileUploadRequest({
      product: "goodstech",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
    // Step 1: request OSS api to upload file
    let ossConfig = new $OSS.Config({
      accessKeyId: authResponse.accessKeyId,
      accessKeySecret: accessKeySecret,
      type: "access_key",
      endpoint: RPCUtil.getEndpoint(authResponse.endpoint, authResponse.useAccelerate, this._endpointType),
      protocol: this._protocol,
      regionId: this._regionId,
    });
    let ossClient = new OSS(ossConfig);
    let fileObj = new $FileForm.FileField({
      filename: authResponse.objectKey,
      content: request.imageURLObject,
      contentType: "",
    });
    let ossHeader = new $OSS.PostObjectRequestHeader({
      accessKeyId: authResponse.accessKeyId,
      policy: authResponse.encodedPolicy,
      signature: authResponse.signature,
      key: authResponse.objectKey,
      file: fileObj,
      successActionStatus: "201",
    });
    let uploadRequest = new $OSS.PostObjectRequest({
      bucketName: authResponse.bucket,
      header: ossHeader,
    });
    let ossRuntime = new $OSSUtil.RuntimeOptions({ });
    RPCUtil.convert(runtime, ossRuntime);
    await ossClient.postObject(uploadRequest, ossRuntime);
    // Step 2: request final api
    let classifyCommodityreq = new ClassifyCommodityRequest({ });
    RPCUtil.convert(request, classifyCommodityreq);
    classifyCommodityreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let classifyCommodityResp = await this.classifyCommodity(classifyCommodityreq, runtime);
    return classifyCommodityResp;
  }

  getUserAgent(): string {
    let userAgent = Util.getUserAgent(this._userAgent);
    return userAgent;
  }

  async getAccessKeyId(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let accessKeyId = await this._credential.getAccessKeyId();
    return accessKeyId;
  }

  async getAccessKeySecret(): Promise<string> {
    if (Util.isUnset(this._credential)) {
      return "";
    }

    let secret = await this._credential.getAccessKeySecret();
    return secret;
  }

}

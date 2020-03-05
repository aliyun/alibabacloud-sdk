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

export class SearchImageByNameRequest extends $tea.Model {
  categoryId?: number;
  instanceName: string;
  productId: string;
  picName: string;
  num?: number;
  start?: number;
  filter?: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      productId: 'ProductId',
      picName: 'PicName',
      num: 'Num',
      start: 'Start',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      instanceName: 'string',
      productId: 'string',
      picName: 'string',
      num: 'number',
      start: 'number',
      filter: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  msg: string;
  auctions: SearchImageByNameResponseAuctions[];
  head: SearchImageByNameResponseHead;
  picInfo: SearchImageByNameResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      msg: 'Msg',
      auctions: 'Auctions',
      head: 'Head',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      msg: 'string',
      auctions: { 'type': 'array', 'itemType': SearchImageByNameResponseAuctions },
      head: SearchImageByNameResponseHead,
      picInfo: SearchImageByNameResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicRequest extends $tea.Model {
  categoryId?: number;
  instanceName: string;
  picContent: string;
  crop?: boolean;
  region?: string;
  num?: number;
  start?: number;
  filter?: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      picContent: 'PicContent',
      crop: 'Crop',
      region: 'Region',
      num: 'Num',
      start: 'Start',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      instanceName: 'string',
      picContent: 'string',
      crop: 'boolean',
      region: 'string',
      num: 'number',
      start: 'number',
      filter: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  msg: string;
  auctions: SearchImageByPicResponseAuctions[];
  head: SearchImageByPicResponseHead;
  picInfo: SearchImageByPicResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      msg: 'Msg',
      auctions: 'Auctions',
      head: 'Head',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      msg: 'string',
      auctions: { 'type': 'array', 'itemType': SearchImageByPicResponseAuctions },
      head: SearchImageByPicResponseHead,
      picInfo: SearchImageByPicResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicAdvanceRequest extends $tea.Model {
  picContentObject: Readable;
  categoryId?: number;
  instanceName: string;
  crop?: boolean;
  region?: string;
  num?: number;
  start?: number;
  filter?: string;
  static names(): { [key: string]: string } {
    return {
      picContentObject: 'PicContentObject',
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      crop: 'Crop',
      region: 'Region',
      num: 'Num',
      start: 'Start',
      filter: 'Filter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      picContentObject: 'Readable',
      categoryId: 'number',
      instanceName: 'string',
      crop: 'boolean',
      region: 'string',
      num: 'number',
      start: 'number',
      filter: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageRequest extends $tea.Model {
  instanceName: string;
  productId: string;
  picName?: string;
  static names(): { [key: string]: string } {
    return {
      instanceName: 'InstanceName',
      productId: 'ProductId',
      picName: 'PicName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceName: 'string',
      productId: 'string',
      picName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  message: string;
  code: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      message: 'Message',
      code: 'Code',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      message: 'string',
      code: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageRequest extends $tea.Model {
  instanceName: string;
  categoryId?: number;
  productId: string;
  picName: string;
  picContent: string;
  crop?: boolean;
  region?: string;
  customContent?: string;
  intAttr?: number;
  strAttr?: string;
  static names(): { [key: string]: string } {
    return {
      instanceName: 'InstanceName',
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      picContent: 'PicContent',
      crop: 'Crop',
      region: 'Region',
      customContent: 'CustomContent',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceName: 'string',
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      picContent: 'string',
      crop: 'boolean',
      region: 'string',
      customContent: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  message: string;
  code: number;
  picInfo: AddImageResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      message: 'Message',
      code: 'Code',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      message: 'string',
      code: 'number',
      picInfo: AddImageResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageAdvanceRequest extends $tea.Model {
  picContentObject: Readable;
  instanceName: string;
  categoryId?: number;
  productId: string;
  picName: string;
  crop?: boolean;
  region?: string;
  customContent?: string;
  intAttr?: number;
  strAttr?: string;
  static names(): { [key: string]: string } {
    return {
      picContentObject: 'PicContentObject',
      instanceName: 'InstanceName',
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      crop: 'Crop',
      region: 'Region',
      customContent: 'CustomContent',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      picContentObject: 'Readable',
      instanceName: 'string',
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      crop: 'boolean',
      region: 'string',
      customContent: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponseAuctions extends $tea.Model {
  categoryId: number;
  productId: string;
  picName: string;
  customContent: string;
  sortExprValues: string;
  intAttr: number;
  strAttr: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      customContent: 'CustomContent',
      sortExprValues: 'SortExprValues',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      customContent: 'string',
      sortExprValues: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponseHead extends $tea.Model {
  docsReturn: number;
  docsFound: number;
  searchTime: number;
  static names(): { [key: string]: string } {
    return {
      docsReturn: 'DocsReturn',
      docsFound: 'DocsFound',
      searchTime: 'SearchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      docsReturn: 'number',
      docsFound: 'number',
      searchTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponsePicInfoAllCategories extends $tea.Model {
  id: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  allCategories: SearchImageByNameResponsePicInfoAllCategories[];
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
      allCategories: 'AllCategories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
      allCategories: { 'type': 'array', 'itemType': SearchImageByNameResponsePicInfoAllCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponseAuctions extends $tea.Model {
  categoryId: number;
  productId: string;
  picName: string;
  customContent: string;
  sortExprValues: string;
  intAttr: number;
  strAttr: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      customContent: 'CustomContent',
      sortExprValues: 'SortExprValues',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      customContent: 'string',
      sortExprValues: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponseHead extends $tea.Model {
  docsReturn: number;
  docsFound: number;
  searchTime: number;
  static names(): { [key: string]: string } {
    return {
      docsReturn: 'DocsReturn',
      docsFound: 'DocsFound',
      searchTime: 'SearchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      docsReturn: 'number',
      docsFound: 'number',
      searchTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponsePicInfoAllCategories extends $tea.Model {
  id: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  allCategories: SearchImageByPicResponsePicInfoAllCategories[];
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
      allCategories: 'AllCategories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
      allCategories: { 'type': 'array', 'itemType': SearchImageByPicResponsePicInfoAllCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
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

  async _request(action: string, protocol: string, method: string, request: {[key: string]: any}, runtime: $Util.RuntimeOptions): Promise<{[key: string]: any}> {
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
        let accessKeyId = await this.getAccessKeyId();
        let accessKeySecret = await this.getAccessKeySecret();
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2020-02-12",
          SignatureMethod: "HMAC-SHA1",
          SignatureVersion: "1.0",
          SignatureNonce: Util.getNonce(),
          AccessKeyId: accessKeyId,
          ...request,
        });
        request_.headers = {
          host: RPCUtil.getHost("ImageSearch", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let body = Util.assertAsMap(obj);
        if (Util.is4xx(response_.statusCode) || Util.is5xx(response_.statusCode)) {
          throw $tea.newError({
            message: body["Message"],
            data: body,
            code: body["Code"],
          });
        }

        return body;
      } catch (ex) {
        if ($tea.isRetryable(ex)) {
          continue;
        }
        throw ex;
      }
    }

    throw $tea.newUnretryableError(_lastRequest);
  }

  async searchImageByName(request: SearchImageByNameRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByNameResponse> {
    return $tea.cast<SearchImageByNameResponse>(await this._request("SearchImageByName", "HTTPS", "POST", $tea.toMap(request), runtime), new SearchImageByNameResponse({}));
  }

  async searchImageByPic(request: SearchImageByPicRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByPicResponse> {
    return $tea.cast<SearchImageByPicResponse>(await this._request("SearchImageByPic", "HTTPS", "POST", $tea.toMap(request), runtime), new SearchImageByPicResponse({}));
  }

  async searchImageByPicAdvance(request: SearchImageByPicAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByPicResponse> {
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
      product: "ImageSearch",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
      content: request.picContentObject,
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
    let searchImageByPicreq = new SearchImageByPicRequest({ });
    RPCUtil.convert(request, searchImageByPicreq);
    searchImageByPicreq.picContent = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let searchImageByPicResp = await this.searchImageByPic(searchImageByPicreq, runtime);
    return searchImageByPicResp;
  }

  async deleteImage(request: DeleteImageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageResponse> {
    return $tea.cast<DeleteImageResponse>(await this._request("DeleteImage", "HTTPS", "POST", $tea.toMap(request), runtime), new DeleteImageResponse({}));
  }

  async addImage(request: AddImageRequest, runtime: $Util.RuntimeOptions): Promise<AddImageResponse> {
    return $tea.cast<AddImageResponse>(await this._request("AddImage", "HTTPS", "POST", $tea.toMap(request), runtime), new AddImageResponse({}));
  }

  async addImageAdvance(request: AddImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AddImageResponse> {
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
      product: "ImageSearch",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUpload(authRequest, runtime);
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
      content: request.picContentObject,
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
    let addImagereq = new AddImageRequest({ });
    RPCUtil.convert(request, addImagereq);
    addImagereq.picContent = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let addImageResp = await this.addImage(addImagereq, runtime);
    return addImageResp;
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

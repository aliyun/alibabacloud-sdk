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

export class GetAsyncJobResultRequest extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAsyncJobResultResponse extends $tea.Model {
  requestId: string;
  data: GetAsyncJobResultResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: GetAsyncJobResultResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SuperResolveVideoRequest extends $tea.Model {
  videoUrl: string;
  bitRate?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      bitRate: 'BitRate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      bitRate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SuperResolveVideoResponse extends $tea.Model {
  requestId: string;
  data: SuperResolveVideoResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: SuperResolveVideoResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SuperResolveVideoAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  bitRate?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      bitRate: 'BitRate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      bitRate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoRequest extends $tea.Model {
  videoUrl: string;
  boxes?: EraseVideoLogoRequestBoxes[];
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      boxes: { 'type': 'array', 'itemType': EraseVideoLogoRequestBoxes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoResponse extends $tea.Model {
  requestId: string;
  data: EraseVideoLogoResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: EraseVideoLogoResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  boxes?: EraseVideoLogoAdvanceRequestBoxes[];
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      boxes: { 'type': 'array', 'itemType': EraseVideoLogoAdvanceRequestBoxes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoSubtitlesRequest extends $tea.Model {
  videoUrl: string;
  BX?: number;
  BY?: number;
  BW?: number;
  BH?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      BX: 'BX',
      BY: 'BY',
      BW: 'BW',
      BH: 'BH',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      BX: 'number',
      BY: 'number',
      BW: 'number',
      BH: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoSubtitlesResponse extends $tea.Model {
  requestId: string;
  data: EraseVideoSubtitlesResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: EraseVideoSubtitlesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoSubtitlesAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  BX?: number;
  BY?: number;
  BW?: number;
  BH?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      BX: 'BX',
      BY: 'BY',
      BW: 'BW',
      BH: 'BH',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      BX: 'number',
      BY: 'number',
      BW: 'number',
      BH: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractEcommerceVideoRequest extends $tea.Model {
  videoUrl: string;
  duration: number;
  width?: number;
  height?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      duration: 'Duration',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      duration: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractEcommerceVideoResponse extends $tea.Model {
  requestId: string;
  data: AbstractEcommerceVideoResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: AbstractEcommerceVideoResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractEcommerceVideoAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  duration: number;
  width?: number;
  height?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      duration: 'Duration',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      duration: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractFilmVideoRequest extends $tea.Model {
  videoUrl: string;
  length: number;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      length: 'Length',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      length: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractFilmVideoResponse extends $tea.Model {
  requestId: string;
  data: AbstractFilmVideoResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: AbstractFilmVideoResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractFilmVideoAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  length: number;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      length: 'Length',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      length: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AdjustVideoColorRequest extends $tea.Model {
  videoUrl: string;
  videoBitrate?: string;
  videoCodec?: string;
  videoFormat?: string;
  mode: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      videoBitrate: 'VideoBitrate',
      videoCodec: 'VideoCodec',
      videoFormat: 'VideoFormat',
      mode: 'Mode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      videoBitrate: 'string',
      videoCodec: 'string',
      videoFormat: 'string',
      mode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AdjustVideoColorResponse extends $tea.Model {
  requestId: string;
  data: AdjustVideoColorResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: AdjustVideoColorResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AdjustVideoColorAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  videoBitrate?: string;
  videoCodec?: string;
  videoFormat?: string;
  mode: string;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      videoBitrate: 'VideoBitrate',
      videoCodec: 'VideoCodec',
      videoFormat: 'VideoFormat',
      mode: 'Mode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      videoBitrate: 'string',
      videoCodec: 'string',
      videoFormat: 'string',
      mode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAsyncJobResultResponseData extends $tea.Model {
  jobId: string;
  status: string;
  result: string;
  errorCode: string;
  errorMessage: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      status: 'Status',
      result: 'Result',
      errorCode: 'ErrorCode',
      errorMessage: 'ErrorMessage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      status: 'string',
      result: 'string',
      errorCode: 'string',
      errorMessage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SuperResolveVideoResponseData extends $tea.Model {
  videoUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoRequestBoxes extends $tea.Model {
  h?: number;
  w?: number;
  x?: number;
  y?: number;
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoResponseData extends $tea.Model {
  videoUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoLogoAdvanceRequestBoxes extends $tea.Model {
  h?: number;
  w?: number;
  x?: number;
  y?: number;
  static names(): { [key: string]: string } {
    return {
      h: 'H',
      w: 'W',
      x: 'X',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      h: 'number',
      w: 'number',
      x: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EraseVideoSubtitlesResponseData extends $tea.Model {
  videoUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractEcommerceVideoResponseData extends $tea.Model {
  videoUrl: string;
  videoCoverUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      videoCoverUrl: 'VideoCoverUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      videoCoverUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AbstractFilmVideoResponseData extends $tea.Model {
  videoUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AdjustVideoColorResponseData extends $tea.Model {
  videoUrl: string;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
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
          Version: "2020-03-20",
          SignatureNonce: Util.getNonce(),
          ...query,
        });
        if (!Util.isUnset(body)) {
          let tmp = Util.anyifyMapValue(RPCUtil.query(body));
          request_.body = new $tea.BytesReadable(Util.toFormString(tmp));
        }

        request_.headers = {
          host: RPCUtil.getHost("videoenhan", this._regionId, this._endpoint),
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

  async getAsyncJobResult(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    return $tea.cast<GetAsyncJobResultResponse>(await this._request("GetAsyncJobResult", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
  }

  async superResolveVideo(request: SuperResolveVideoRequest, runtime: $Util.RuntimeOptions): Promise<SuperResolveVideoResponse> {
    return $tea.cast<SuperResolveVideoResponse>(await this._request("SuperResolveVideo", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new SuperResolveVideoResponse({}));
  }

  async superResolveVideoAdvance(request: SuperResolveVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SuperResolveVideoResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let superResolveVideoreq = new SuperResolveVideoRequest({ });
    RPCUtil.convert(request, superResolveVideoreq);
    superResolveVideoreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let superResolveVideoResp = await this.superResolveVideo(superResolveVideoreq, runtime);
    return superResolveVideoResp;
  }

  async eraseVideoLogo(request: EraseVideoLogoRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoLogoResponse> {
    return $tea.cast<EraseVideoLogoResponse>(await this._request("EraseVideoLogo", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new EraseVideoLogoResponse({}));
  }

  async eraseVideoLogoAdvance(request: EraseVideoLogoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoLogoResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let eraseVideoLogoreq = new EraseVideoLogoRequest({ });
    RPCUtil.convert(request, eraseVideoLogoreq);
    eraseVideoLogoreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let eraseVideoLogoResp = await this.eraseVideoLogo(eraseVideoLogoreq, runtime);
    return eraseVideoLogoResp;
  }

  async eraseVideoSubtitles(request: EraseVideoSubtitlesRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoSubtitlesResponse> {
    return $tea.cast<EraseVideoSubtitlesResponse>(await this._request("EraseVideoSubtitles", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new EraseVideoSubtitlesResponse({}));
  }

  async eraseVideoSubtitlesAdvance(request: EraseVideoSubtitlesAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoSubtitlesResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let eraseVideoSubtitlesreq = new EraseVideoSubtitlesRequest({ });
    RPCUtil.convert(request, eraseVideoSubtitlesreq);
    eraseVideoSubtitlesreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let eraseVideoSubtitlesResp = await this.eraseVideoSubtitles(eraseVideoSubtitlesreq, runtime);
    return eraseVideoSubtitlesResp;
  }

  async abstractEcommerceVideo(request: AbstractEcommerceVideoRequest, runtime: $Util.RuntimeOptions): Promise<AbstractEcommerceVideoResponse> {
    return $tea.cast<AbstractEcommerceVideoResponse>(await this._request("AbstractEcommerceVideo", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new AbstractEcommerceVideoResponse({}));
  }

  async abstractEcommerceVideoAdvance(request: AbstractEcommerceVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AbstractEcommerceVideoResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let abstractEcommerceVideoreq = new AbstractEcommerceVideoRequest({ });
    RPCUtil.convert(request, abstractEcommerceVideoreq);
    abstractEcommerceVideoreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let abstractEcommerceVideoResp = await this.abstractEcommerceVideo(abstractEcommerceVideoreq, runtime);
    return abstractEcommerceVideoResp;
  }

  async abstractFilmVideo(request: AbstractFilmVideoRequest, runtime: $Util.RuntimeOptions): Promise<AbstractFilmVideoResponse> {
    return $tea.cast<AbstractFilmVideoResponse>(await this._request("AbstractFilmVideo", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new AbstractFilmVideoResponse({}));
  }

  async abstractFilmVideoAdvance(request: AbstractFilmVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AbstractFilmVideoResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let abstractFilmVideoreq = new AbstractFilmVideoRequest({ });
    RPCUtil.convert(request, abstractFilmVideoreq);
    abstractFilmVideoreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let abstractFilmVideoResp = await this.abstractFilmVideo(abstractFilmVideoreq, runtime);
    return abstractFilmVideoResp;
  }

  async adjustVideoColor(request: AdjustVideoColorRequest, runtime: $Util.RuntimeOptions): Promise<AdjustVideoColorResponse> {
    return $tea.cast<AdjustVideoColorResponse>(await this._request("AdjustVideoColor", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new AdjustVideoColorResponse({}));
  }

  async adjustVideoColorAdvance(request: AdjustVideoColorAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AdjustVideoColorResponse> {
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
      product: "videoenhan",
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
      content: request.videoUrlObject,
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
    let adjustVideoColorreq = new AdjustVideoColorRequest({ });
    RPCUtil.convert(request, adjustVideoColorreq);
    adjustVideoColorreq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let adjustVideoColorResp = await this.adjustVideoColor(adjustVideoColorreq, runtime);
    return adjustVideoColorResp;
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

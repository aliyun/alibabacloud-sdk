// This file is auto-generated, don't edit it
import RPCUtil from '@alicloud/rpc-util';
import Util, * as $Util from '@alicloud/tea-util';
import Credential, * as $Credential from '@alicloud/credentials';
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
  readTimeout?: number;
  connectTimeout?: number;
  httpProxy?: string;
  httpsProxy?: string;
  socks5Proxy?: string;
  socks5NetWork?: string;
  noProxy?: string;
  userAgent?: string;
  maxIdleConns?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'accessKeyId',
      accessKeySecret: 'accessKeySecret',
      type: 'type',
      securityToken: 'securityToken',
      endpoint: 'endpoint',
      protocol: 'protocol',
      regionId: 'regionId',
      readTimeout: 'read timeout',
      connectTimeout: 'connect timeout',
      httpProxy: 'http proxy',
      httpsProxy: 'https proxy',
      socks5Proxy: 'socks5 proxy',
      socks5NetWork: 'socks5 NetWork',
      noProxy: 'no proxy',
      userAgent: 'userAgent',
      maxIdleConns: 'maxIdleConns',
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
      readTimeout: 'number',
      connectTimeout: 'number',
      httpProxy: 'string',
      httpsProxy: 'string',
      socks5Proxy: 'string',
      socks5NetWork: 'string',
      noProxy: 'string',
      userAgent: 'string',
      maxIdleConns: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextRequest extends $tea.Model {
  tasks: ScanTextRequestTasks[];
  labels: ScanTextRequestLabels[];
  static names(): { [key: string]: string } {
    return {
      tasks: 'Tasks',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tasks: { 'type': 'array', 'itemType': ScanTextRequestTasks },
      labels: { 'type': 'array', 'itemType': ScanTextRequestLabels },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponse extends $tea.Model {
  requestId: string;
  data: ScanTextResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ScanTextResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageRequest extends $tea.Model {
  task: ScanImageRequestTask[];
  scene: string[];
  static names(): { [key: string]: string } {
    return {
      task: 'Task',
      scene: 'Scene',
    };
  }

  static types(): { [key: string]: any } {
    return {
      task: { 'type': 'array', 'itemType': ScanImageRequestTask },
      scene: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponse extends $tea.Model {
  requestId: string;
  data: ScanImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ScanImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextRequestTasks extends $tea.Model {
  content: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextRequestLabels extends $tea.Model {
  label: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponseDataElementsResultsDetailsContexts extends $tea.Model {
  context: string;
  static names(): { [key: string]: string } {
    return {
      context: 'Context',
    };
  }

  static types(): { [key: string]: any } {
    return {
      context: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponseDataElementsResultsDetails extends $tea.Model {
  label: string;
  contexts: ScanTextResponseDataElementsResultsDetailsContexts[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      contexts: 'Contexts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      contexts: { 'type': 'array', 'itemType': ScanTextResponseDataElementsResultsDetailsContexts },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponseDataElementsResults extends $tea.Model {
  label: string;
  suggestion: string;
  rate: number;
  details: ScanTextResponseDataElementsResultsDetails[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      rate: 'Rate',
      details: 'Details',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      rate: 'number',
      details: { 'type': 'array', 'itemType': ScanTextResponseDataElementsResultsDetails },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponseDataElements extends $tea.Model {
  taskId: string;
  results: ScanTextResponseDataElementsResults[];
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      results: { 'type': 'array', 'itemType': ScanTextResponseDataElementsResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanTextResponseData extends $tea.Model {
  elements: ScanTextResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': ScanTextResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageRequestTask extends $tea.Model {
  dataId?: string;
  imageURL: string;
  imageTimeMillisecond?: number;
  interval?: number;
  maxFrames?: number;
  static names(): { [key: string]: string } {
    return {
      dataId: 'DataId',
      imageURL: 'ImageURL',
      imageTimeMillisecond: 'ImageTimeMillisecond',
      interval: 'Interval',
      maxFrames: 'MaxFrames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataId: 'string',
      imageURL: 'string',
      imageTimeMillisecond: 'number',
      interval: 'number',
      maxFrames: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsFrames extends $tea.Model {
  rate: number;
  URL: string;
  static names(): { [key: string]: string } {
    return {
      rate: 'Rate',
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rate: 'number',
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsHintWordsInfoList extends $tea.Model {
  context: string;
  static names(): { [key: string]: string } {
    return {
      context: 'Context',
    };
  }

  static types(): { [key: string]: any } {
    return {
      context: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsProgramCodeDataList extends $tea.Model {
  x: number;
  y: number;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsLogoDataList extends $tea.Model {
  type: string;
  name: string;
  x: number;
  y: number;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      name: 'Name',
      x: 'X',
      y: 'Y',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      name: 'string',
      x: 'number',
      y: 'number',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsSfaceDataListFaces extends $tea.Model {
  name: string;
  rate: number;
  id: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      rate: 'Rate',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      rate: 'number',
      id: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsSfaceDataList extends $tea.Model {
  x: number;
  y: number;
  width: number;
  height: number;
  faces: ScanImageResponseDataResultsSubResultsSfaceDataListFaces[];
  static names(): { [key: string]: string } {
    return {
      x: 'X',
      y: 'Y',
      width: 'Width',
      height: 'Height',
      faces: 'Faces',
    };
  }

  static types(): { [key: string]: any } {
    return {
      x: 'number',
      y: 'number',
      width: 'number',
      height: 'number',
      faces: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsSfaceDataListFaces },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResultsOCRDataList extends $tea.Model {
  OCRData: string;
  static names(): { [key: string]: string } {
    return {
      OCRData: 'OCRData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      OCRData: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResultsSubResults extends $tea.Model {
  label: string;
  suggestion: string;
  rate: number;
  scene: string;
  frames: ScanImageResponseDataResultsSubResultsFrames[];
  hintWordsInfoList: ScanImageResponseDataResultsSubResultsHintWordsInfoList[];
  programCodeDataList: ScanImageResponseDataResultsSubResultsProgramCodeDataList[];
  logoDataList: ScanImageResponseDataResultsSubResultsLogoDataList[];
  sfaceDataList: ScanImageResponseDataResultsSubResultsSfaceDataList[];
  OCRDataList: ScanImageResponseDataResultsSubResultsOCRDataList[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      rate: 'Rate',
      scene: 'Scene',
      frames: 'Frames',
      hintWordsInfoList: 'HintWordsInfoList',
      programCodeDataList: 'ProgramCodeDataList',
      logoDataList: 'LogoDataList',
      sfaceDataList: 'SfaceDataList',
      OCRDataList: 'OCRDataList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      rate: 'number',
      scene: 'string',
      frames: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsFrames },
      hintWordsInfoList: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsHintWordsInfoList },
      programCodeDataList: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsProgramCodeDataList },
      logoDataList: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsLogoDataList },
      sfaceDataList: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsSfaceDataList },
      OCRDataList: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResultsOCRDataList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseDataResults extends $tea.Model {
  dataId: string;
  taskId: string;
  imageURL: string;
  subResults: ScanImageResponseDataResultsSubResults[];
  static names(): { [key: string]: string } {
    return {
      dataId: 'DataId',
      taskId: 'TaskId',
      imageURL: 'ImageURL',
      subResults: 'SubResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataId: 'string',
      taskId: 'string',
      imageURL: 'string',
      subResults: { 'type': 'array', 'itemType': ScanImageResponseDataResultsSubResults },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ScanImageResponseData extends $tea.Model {
  results: ScanImageResponseDataResults[];
  static names(): { [key: string]: string } {
    return {
      results: 'Results',
    };
  }

  static types(): { [key: string]: any } {
    return {
      results: { 'type': 'array', 'itemType': ScanImageResponseDataResults },
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
  _readTimeout: number;
  _connectTimeout: number;
  _httpProxy: string;
  _httpsProxy: string;
  _noProxy: string;
  _socks5Proxy: string;
  _socks5NetWork: string;
  _maxIdleConns: number;
  _credential: Credential;

  constructor(config: Config) {
    if (Util.isUnset($tea.toMap(config))) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config' can not be unset",
      });
    }

    if (Util.empty(config.endpoint)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.endpoint' can not be empty",
      });
    }

    if (Util.empty(config.regionId)) {
      throw $tea.newError({
        name: "ParameterMissing",
        message: "'config.regionId' can not be empty",
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
        maxAttempts: Util.defaultNumber(runtime.maxAttempts, 2),
      },
      backoff: {
        policy: Util.defaultString(runtime.backoffPolicy, "no"),
        period: Util.defaultNumber(runtime.backoffPeriod, 0),
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
        let accessKeyId = await this.getAccessKeyId();
        let accessKeySecret = await this.getAccessKeySecret();
        request_.protocol = Util.defaultString(this._protocol, protocol);
        request_.method = method;
        request_.pathname = "/";
        request_.query = RPCUtil.query({
          Action: action,
          Format: "json",
          RegionId: this._regionId,
          Timestamp: RPCUtil.getTimestamp(),
          Version: "2019-12-30",
          SignatureMethod: "HMAC-SHA1",
          SignatureVersion: "1.0",
          SignatureNonce: Util.getNonce(),
          AccessKeyId: accessKeyId,
          ...request,
        });
        request_.headers = {
          host: RPCUtil.getHost("imageaudit", this._regionId, this._endpoint),
          'user-agent': this.getUserAgent(),
        };
        request_.query["Signature"] = RPCUtil.getSignature(request_, accessKeySecret);
        _lastRequest = request_;
        let response_ = await $tea.doAction(request_, _runtime);

        let obj = await Util.readAsJSON(response_.body);
        let body = Util.assertAsMap(obj);
        if (RPCUtil.hasError(body)) {
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

  async scanText(request: ScanTextRequest, runtime: $Util.RuntimeOptions): Promise<ScanTextResponse> {
    return $tea.cast<ScanTextResponse>(await this._request("ScanText", "HTTPS", "POST", $tea.toMap(request), runtime), new ScanTextResponse({}));
  }

  async scanImage(request: ScanImageRequest, runtime: $Util.RuntimeOptions): Promise<ScanImageResponse> {
    return $tea.cast<ScanImageResponse>(await this._request("ScanImage", "HTTPS", "POST", $tea.toMap(request), runtime), new ScanImageResponse({}));
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

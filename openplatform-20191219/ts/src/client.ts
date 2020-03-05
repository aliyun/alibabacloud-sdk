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
      type: 'credential type',
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

export class AuthorizeFileUploadRequest extends $tea.Model {
  product: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      product: 'Product',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      product: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AuthorizeFileUploadResponse extends $tea.Model {
  accessKeyId: string;
  bucket: string;
  encodedPolicy: string;
  endpoint: string;
  objectKey: string;
  requestId: string;
  signature: string;
  useAccelerate: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      bucket: 'Bucket',
      encodedPolicy: 'EncodedPolicy',
      endpoint: 'Endpoint',
      objectKey: 'ObjectKey',
      requestId: 'RequestId',
      signature: 'Signature',
      useAccelerate: 'UseAccelerate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      bucket: 'string',
      encodedPolicy: 'string',
      endpoint: 'string',
      objectKey: 'string',
      requestId: 'string',
      signature: 'string',
      useAccelerate: 'boolean',
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
          Version: "2019-12-19",
          SignatureMethod: "HMAC-SHA1",
          SignatureVersion: "1.0",
          SignatureNonce: Util.getNonce(),
          AccessKeyId: accessKeyId,
          ...request,
        });
        request_.headers = {
          host: RPCUtil.getHost("OpenPlatform", this._regionId, this._endpoint),
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

  async authorizeFileUpload(request: AuthorizeFileUploadRequest, runtime: $Util.RuntimeOptions): Promise<AuthorizeFileUploadResponse> {
    return $tea.cast<AuthorizeFileUploadResponse>(await this._request("AuthorizeFileUpload", "HTTPS", "GET", $tea.toMap(request), runtime), new AuthorizeFileUploadResponse({}));
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

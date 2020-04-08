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

export class ImageBlindCharacterWatermarkRequest extends $tea.Model {
  functionType: string;
  text?: string;
  watermarkImageURL?: string;
  outputFileType?: string;
  qualityFactor: number;
  originImageURL: string;
  static names(): { [key: string]: string } {
    return {
      functionType: 'FunctionType',
      text: 'Text',
      watermarkImageURL: 'WatermarkImageURL',
      outputFileType: 'OutputFileType',
      qualityFactor: 'QualityFactor',
      originImageURL: 'OriginImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      functionType: 'string',
      text: 'string',
      watermarkImageURL: 'string',
      outputFileType: 'string',
      qualityFactor: 'number',
      originImageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImageBlindCharacterWatermarkResponse extends $tea.Model {
  requestId: string;
  data: ImageBlindCharacterWatermarkResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ImageBlindCharacterWatermarkResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImageBlindCharacterWatermarkAdvanceRequest extends $tea.Model {
  originImageURLObject: Readable;
  functionType: string;
  text?: string;
  watermarkImageURL?: string;
  outputFileType?: string;
  qualityFactor: number;
  static names(): { [key: string]: string } {
    return {
      originImageURLObject: 'OriginImageURLObject',
      functionType: 'FunctionType',
      text: 'Text',
      watermarkImageURL: 'WatermarkImageURL',
      outputFileType: 'OutputFileType',
      qualityFactor: 'QualityFactor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      originImageURLObject: 'Readable',
      functionType: 'string',
      text: 'string',
      watermarkImageURL: 'string',
      outputFileType: 'string',
      qualityFactor: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveImageSubtitlesRequest extends $tea.Model {
  imageURL: string;
  BX?: number;
  BY?: number;
  BW?: number;
  BH?: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      BX: 'BX',
      BY: 'BY',
      BW: 'BW',
      BH: 'BH',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
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

export class RemoveImageSubtitlesResponse extends $tea.Model {
  requestId: string;
  data: RemoveImageSubtitlesResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RemoveImageSubtitlesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveImageSubtitlesAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  BX?: number;
  BY?: number;
  BW?: number;
  BH?: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      BX: 'BX',
      BY: 'BY',
      BW: 'BW',
      BH: 'BH',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
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

export class RemoveImageWatermarkRequest extends $tea.Model {
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

export class RemoveImageWatermarkResponse extends $tea.Model {
  requestId: string;
  data: RemoveImageWatermarkResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RemoveImageWatermarkResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveImageWatermarkAdvanceRequest extends $tea.Model {
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

export class ImageBlindPicWatermarkRequest extends $tea.Model {
  functionType: string;
  logoURL?: string;
  watermarkImageURL?: string;
  outputFileType?: string;
  qualityFactor: number;
  originImageURL: string;
  static names(): { [key: string]: string } {
    return {
      functionType: 'FunctionType',
      logoURL: 'LogoURL',
      watermarkImageURL: 'WatermarkImageURL',
      outputFileType: 'OutputFileType',
      qualityFactor: 'QualityFactor',
      originImageURL: 'OriginImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      functionType: 'string',
      logoURL: 'string',
      watermarkImageURL: 'string',
      outputFileType: 'string',
      qualityFactor: 'number',
      originImageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImageBlindPicWatermarkResponse extends $tea.Model {
  requestId: string;
  data: ImageBlindPicWatermarkResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ImageBlindPicWatermarkResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImageBlindPicWatermarkAdvanceRequest extends $tea.Model {
  originImageURLObject: Readable;
  functionType: string;
  logoURL?: string;
  watermarkImageURL?: string;
  outputFileType?: string;
  qualityFactor: number;
  static names(): { [key: string]: string } {
    return {
      originImageURLObject: 'OriginImageURLObject',
      functionType: 'FunctionType',
      logoURL: 'LogoURL',
      watermarkImageURL: 'WatermarkImageURL',
      outputFileType: 'OutputFileType',
      qualityFactor: 'QualityFactor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      originImageURLObject: 'Readable',
      functionType: 'string',
      logoURL: 'string',
      watermarkImageURL: 'string',
      outputFileType: 'string',
      qualityFactor: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IntelligentCompositionRequest extends $tea.Model {
  numBoxes?: number;
  imageURL: string;
  static names(): { [key: string]: string } {
    return {
      numBoxes: 'NumBoxes',
      imageURL: 'ImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      numBoxes: 'number',
      imageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IntelligentCompositionResponse extends $tea.Model {
  requestId: string;
  data: IntelligentCompositionResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: IntelligentCompositionResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IntelligentCompositionAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  numBoxes?: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      numBoxes: 'NumBoxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      numBoxes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeImageSizeRequest extends $tea.Model {
  width: number;
  height: number;
  url: string;
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeImageSizeResponse extends $tea.Model {
  requestId: string;
  data: ChangeImageSizeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ChangeImageSizeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeImageSizeAdvanceRequest extends $tea.Model {
  urlObject: Readable;
  width: number;
  height: number;
  static names(): { [key: string]: string } {
    return {
      urlObject: 'UrlObject',
      width: 'Width',
      height: 'Height',
    };
  }

  static types(): { [key: string]: any } {
    return {
      urlObject: 'Readable',
      width: 'number',
      height: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExtendImageStyleRequest extends $tea.Model {
  styleUrl: string;
  majorUrl: string;
  static names(): { [key: string]: string } {
    return {
      styleUrl: 'StyleUrl',
      majorUrl: 'MajorUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      styleUrl: 'string',
      majorUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExtendImageStyleResponse extends $tea.Model {
  requestId: string;
  data: ExtendImageStyleResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ExtendImageStyleResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MakeSuperResolutionImageRequest extends $tea.Model {
  url: string;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MakeSuperResolutionImageResponse extends $tea.Model {
  requestId: string;
  data: MakeSuperResolutionImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: MakeSuperResolutionImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MakeSuperResolutionImageAdvanceRequest extends $tea.Model {
  urlObject: Readable;
  static names(): { [key: string]: string } {
    return {
      urlObject: 'UrlObject',
    };
  }

  static types(): { [key: string]: any } {
    return {
      urlObject: 'Readable',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecolorImageRequest extends $tea.Model {
  url: string;
  mode?: string;
  refUrl?: string;
  colorCount?: number;
  colorTemplate?: RecolorImageRequestColorTemplate[];
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
      mode: 'Mode',
      refUrl: 'RefUrl',
      colorCount: 'ColorCount',
      colorTemplate: 'ColorTemplate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
      mode: 'string',
      refUrl: 'string',
      colorCount: 'number',
      colorTemplate: { 'type': 'array', 'itemType': RecolorImageRequestColorTemplate },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecolorImageResponse extends $tea.Model {
  requestId: string;
  data: RecolorImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecolorImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImageBlindCharacterWatermarkResponseData extends $tea.Model {
  watermarkImageURL: string;
  textImageURL: string;
  static names(): { [key: string]: string } {
    return {
      watermarkImageURL: 'WatermarkImageURL',
      textImageURL: 'TextImageURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      watermarkImageURL: 'string',
      textImageURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveImageSubtitlesResponseData extends $tea.Model {
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

export class RemoveImageWatermarkResponseData extends $tea.Model {
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

export class ImageBlindPicWatermarkResponseData extends $tea.Model {
  watermarkImageURL: string;
  logoURL: string;
  static names(): { [key: string]: string } {
    return {
      watermarkImageURL: 'WatermarkImageURL',
      logoURL: 'LogoURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      watermarkImageURL: 'string',
      logoURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IntelligentCompositionResponseDataElements extends $tea.Model {
  minX: number;
  minY: number;
  maxX: number;
  maxY: number;
  score: number;
  static names(): { [key: string]: string } {
    return {
      minX: 'MinX',
      minY: 'MinY',
      maxX: 'MaxX',
      maxY: 'MaxY',
      score: 'Score',
    };
  }

  static types(): { [key: string]: any } {
    return {
      minX: 'number',
      minY: 'number',
      maxX: 'number',
      maxY: 'number',
      score: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IntelligentCompositionResponseData extends $tea.Model {
  elements: IntelligentCompositionResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': IntelligentCompositionResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeImageSizeResponseDataRetainLocation extends $tea.Model {
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

export class ChangeImageSizeResponseData extends $tea.Model {
  url: string;
  retainLocation: ChangeImageSizeResponseDataRetainLocation;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
      retainLocation: 'RetainLocation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
      retainLocation: ChangeImageSizeResponseDataRetainLocation,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExtendImageStyleResponseData extends $tea.Model {
  url: string;
  majorUrl: string;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
      majorUrl: 'MajorUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
      majorUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MakeSuperResolutionImageResponseData extends $tea.Model {
  url: string;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecolorImageRequestColorTemplate extends $tea.Model {
  color?: string;
  static names(): { [key: string]: string } {
    return {
      color: 'Color',
    };
  }

  static types(): { [key: string]: any } {
    return {
      color: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecolorImageResponseData extends $tea.Model {
  imageList: string[];
  static names(): { [key: string]: string } {
    return {
      imageList: 'ImageList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageList: { 'type': 'array', 'itemType': 'string' },
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
          Version: "2019-09-30",
          SignatureNonce: Util.getNonce(),
          ...query,
        });
        if (!Util.isUnset(body)) {
          let tmp = Util.anyifyMapValue(RPCUtil.query(body));
          request_.body = new $tea.BytesReadable(Util.toFormString(tmp));
        }

        request_.headers = {
          host: RPCUtil.getHost("imageenhan", this._regionId, this._endpoint),
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

  async imageBlindCharacterWatermark(request: ImageBlindCharacterWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindCharacterWatermarkResponse> {
    return $tea.cast<ImageBlindCharacterWatermarkResponse>(await this._request("ImageBlindCharacterWatermark", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new ImageBlindCharacterWatermarkResponse({}));
  }

  async imageBlindCharacterWatermarkAdvance(request: ImageBlindCharacterWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindCharacterWatermarkResponse> {
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
      product: "imageenhan",
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
      content: request.originImageURLObject,
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
    let imageBlindCharacterWatermarkreq = new ImageBlindCharacterWatermarkRequest({ });
    RPCUtil.convert(request, imageBlindCharacterWatermarkreq);
    imageBlindCharacterWatermarkreq.originImageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let imageBlindCharacterWatermarkResp = await this.imageBlindCharacterWatermark(imageBlindCharacterWatermarkreq, runtime);
    return imageBlindCharacterWatermarkResp;
  }

  async removeImageSubtitles(request: RemoveImageSubtitlesRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageSubtitlesResponse> {
    return $tea.cast<RemoveImageSubtitlesResponse>(await this._request("RemoveImageSubtitles", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RemoveImageSubtitlesResponse({}));
  }

  async removeImageSubtitlesAdvance(request: RemoveImageSubtitlesAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageSubtitlesResponse> {
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
      product: "imageenhan",
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
    let removeImageSubtitlesreq = new RemoveImageSubtitlesRequest({ });
    RPCUtil.convert(request, removeImageSubtitlesreq);
    removeImageSubtitlesreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let removeImageSubtitlesResp = await this.removeImageSubtitles(removeImageSubtitlesreq, runtime);
    return removeImageSubtitlesResp;
  }

  async removeImageWatermark(request: RemoveImageWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageWatermarkResponse> {
    return $tea.cast<RemoveImageWatermarkResponse>(await this._request("RemoveImageWatermark", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RemoveImageWatermarkResponse({}));
  }

  async removeImageWatermarkAdvance(request: RemoveImageWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageWatermarkResponse> {
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
      product: "imageenhan",
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
    let removeImageWatermarkreq = new RemoveImageWatermarkRequest({ });
    RPCUtil.convert(request, removeImageWatermarkreq);
    removeImageWatermarkreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let removeImageWatermarkResp = await this.removeImageWatermark(removeImageWatermarkreq, runtime);
    return removeImageWatermarkResp;
  }

  async imageBlindPicWatermark(request: ImageBlindPicWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindPicWatermarkResponse> {
    return $tea.cast<ImageBlindPicWatermarkResponse>(await this._request("ImageBlindPicWatermark", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new ImageBlindPicWatermarkResponse({}));
  }

  async imageBlindPicWatermarkAdvance(request: ImageBlindPicWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindPicWatermarkResponse> {
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
      product: "imageenhan",
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
      content: request.originImageURLObject,
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
    let imageBlindPicWatermarkreq = new ImageBlindPicWatermarkRequest({ });
    RPCUtil.convert(request, imageBlindPicWatermarkreq);
    imageBlindPicWatermarkreq.originImageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let imageBlindPicWatermarkResp = await this.imageBlindPicWatermark(imageBlindPicWatermarkreq, runtime);
    return imageBlindPicWatermarkResp;
  }

  async intelligentComposition(request: IntelligentCompositionRequest, runtime: $Util.RuntimeOptions): Promise<IntelligentCompositionResponse> {
    return $tea.cast<IntelligentCompositionResponse>(await this._request("IntelligentComposition", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new IntelligentCompositionResponse({}));
  }

  async intelligentCompositionAdvance(request: IntelligentCompositionAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<IntelligentCompositionResponse> {
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
      product: "imageenhan",
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
    let intelligentCompositionreq = new IntelligentCompositionRequest({ });
    RPCUtil.convert(request, intelligentCompositionreq);
    intelligentCompositionreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let intelligentCompositionResp = await this.intelligentComposition(intelligentCompositionreq, runtime);
    return intelligentCompositionResp;
  }

  async changeImageSize(request: ChangeImageSizeRequest, runtime: $Util.RuntimeOptions): Promise<ChangeImageSizeResponse> {
    return $tea.cast<ChangeImageSizeResponse>(await this._request("ChangeImageSize", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new ChangeImageSizeResponse({}));
  }

  async changeImageSizeAdvance(request: ChangeImageSizeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ChangeImageSizeResponse> {
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
      product: "imageenhan",
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
      content: request.urlObject,
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
    let changeImageSizereq = new ChangeImageSizeRequest({ });
    RPCUtil.convert(request, changeImageSizereq);
    changeImageSizereq.url = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let changeImageSizeResp = await this.changeImageSize(changeImageSizereq, runtime);
    return changeImageSizeResp;
  }

  async extendImageStyle(request: ExtendImageStyleRequest, runtime: $Util.RuntimeOptions): Promise<ExtendImageStyleResponse> {
    return $tea.cast<ExtendImageStyleResponse>(await this._request("ExtendImageStyle", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new ExtendImageStyleResponse({}));
  }

  async makeSuperResolutionImage(request: MakeSuperResolutionImageRequest, runtime: $Util.RuntimeOptions): Promise<MakeSuperResolutionImageResponse> {
    return $tea.cast<MakeSuperResolutionImageResponse>(await this._request("MakeSuperResolutionImage", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new MakeSuperResolutionImageResponse({}));
  }

  async makeSuperResolutionImageAdvance(request: MakeSuperResolutionImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<MakeSuperResolutionImageResponse> {
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
      product: "imageenhan",
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
      content: request.urlObject,
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
    let makeSuperResolutionImagereq = new MakeSuperResolutionImageRequest({ });
    RPCUtil.convert(request, makeSuperResolutionImagereq);
    makeSuperResolutionImagereq.url = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let makeSuperResolutionImageResp = await this.makeSuperResolutionImage(makeSuperResolutionImagereq, runtime);
    return makeSuperResolutionImageResp;
  }

  async recolorImage(request: RecolorImageRequest, runtime: $Util.RuntimeOptions): Promise<RecolorImageResponse> {
    return $tea.cast<RecolorImageResponse>(await this._request("RecolorImage", "HTTPS", "POST", "AK", null, $tea.toMap(request), runtime), new RecolorImageResponse({}));
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

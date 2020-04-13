// This file is auto-generated, don't edit it
import OSS, * as $OSS from '@alicloud/oss-client';
import OpenPlatform, * as $OpenPlatform from '@alicloud/openplatform20191219';
import RPCUtil from '@alicloud/rpc-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import OSSUtil, * as $OSSUtil from '@alicloud/oss-util';
import Util, * as $Util from '@alicloud/tea-util';
import FileForm, * as $FileForm from '@alicloud/tea-fileform';
import EndpointUtil from '@alicloud/endpoint-util';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async imageBlindCharacterWatermark(request: ImageBlindCharacterWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindCharacterWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<ImageBlindCharacterWatermarkResponse>(await this.doRequest("ImageBlindCharacterWatermark", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new ImageBlindCharacterWatermarkResponse({}));
  }

  async imageBlindCharacterWatermarkAdvance(request: ImageBlindCharacterWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindCharacterWatermarkResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<RemoveImageSubtitlesResponse>(await this.doRequest("RemoveImageSubtitles", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new RemoveImageSubtitlesResponse({}));
  }

  async removeImageSubtitlesAdvance(request: RemoveImageSubtitlesAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageSubtitlesResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<RemoveImageWatermarkResponse>(await this.doRequest("RemoveImageWatermark", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new RemoveImageWatermarkResponse({}));
  }

  async removeImageWatermarkAdvance(request: RemoveImageWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RemoveImageWatermarkResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<ImageBlindPicWatermarkResponse>(await this.doRequest("ImageBlindPicWatermark", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new ImageBlindPicWatermarkResponse({}));
  }

  async imageBlindPicWatermarkAdvance(request: ImageBlindPicWatermarkAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ImageBlindPicWatermarkResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<IntelligentCompositionResponse>(await this.doRequest("IntelligentComposition", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new IntelligentCompositionResponse({}));
  }

  async intelligentCompositionAdvance(request: IntelligentCompositionAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<IntelligentCompositionResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<ChangeImageSizeResponse>(await this.doRequest("ChangeImageSize", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new ChangeImageSizeResponse({}));
  }

  async changeImageSizeAdvance(request: ChangeImageSizeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ChangeImageSizeResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<ExtendImageStyleResponse>(await this.doRequest("ExtendImageStyle", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new ExtendImageStyleResponse({}));
  }

  async makeSuperResolutionImage(request: MakeSuperResolutionImageRequest, runtime: $Util.RuntimeOptions): Promise<MakeSuperResolutionImageResponse> {
    Util.validateModel(request);
    return $tea.cast<MakeSuperResolutionImageResponse>(await this.doRequest("MakeSuperResolutionImage", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new MakeSuperResolutionImageResponse({}));
  }

  async makeSuperResolutionImageAdvance(request: MakeSuperResolutionImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<MakeSuperResolutionImageResponse> {
    // Step 0: init client
    let accessKeyId = await this._credential.getAccessKeyId();
    let accessKeySecret = await this._credential.getAccessKeySecret();
    let authConfig = new $RPC.Config({
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
    Util.validateModel(request);
    return $tea.cast<RecolorImageResponse>(await this.doRequest("RecolorImage", "HTTPS", "POST", "2019-09-30", "AK", null, $tea.toMap(request), runtime), new RecolorImageResponse({}));
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}

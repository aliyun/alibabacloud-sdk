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

export class ChangeVideoSizeRequest extends $tea.Model {
  videoUrl: string;
  width: number;
  height: number;
  cropType?: string;
  fillType?: string;
  tightness?: number;
  r?: number;
  g?: number;
  b?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrl: 'VideoUrl',
      width: 'Width',
      height: 'Height',
      cropType: 'CropType',
      fillType: 'FillType',
      tightness: 'Tightness',
      r: 'R',
      g: 'G',
      b: 'B',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrl: 'string',
      width: 'number',
      height: 'number',
      cropType: 'string',
      fillType: 'string',
      tightness: 'number',
      r: 'number',
      g: 'number',
      b: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeVideoSizeResponse extends $tea.Model {
  requestId: string;
  data: ChangeVideoSizeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ChangeVideoSizeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeVideoSizeAdvanceRequest extends $tea.Model {
  videoUrlObject: Readable;
  width: number;
  height: number;
  cropType?: string;
  fillType?: string;
  tightness?: number;
  r?: number;
  g?: number;
  b?: number;
  static names(): { [key: string]: string } {
    return {
      videoUrlObject: 'VideoUrlObject',
      width: 'Width',
      height: 'Height',
      cropType: 'CropType',
      fillType: 'FillType',
      tightness: 'Tightness',
      r: 'R',
      g: 'G',
      b: 'B',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoUrlObject: 'Readable',
      width: 'number',
      height: 'number',
      cropType: 'string',
      fillType: 'string',
      tightness: 'number',
      r: 'number',
      g: 'number',
      b: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateVideoRequest extends $tea.Model {
  fileList: GenerateVideoRequestFileList[];
  scene?: string;
  width?: number;
  height?: number;
  style?: string;
  duration?: number;
  durationAdaption?: boolean;
  transitionStyle?: string;
  smartEffect?: boolean;
  puzzleEffect?: boolean;
  mute?: boolean;
  static names(): { [key: string]: string } {
    return {
      fileList: 'FileList',
      scene: 'Scene',
      width: 'Width',
      height: 'Height',
      style: 'Style',
      duration: 'Duration',
      durationAdaption: 'DurationAdaption',
      transitionStyle: 'TransitionStyle',
      smartEffect: 'SmartEffect',
      puzzleEffect: 'PuzzleEffect',
      mute: 'Mute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileList: { 'type': 'array', 'itemType': GenerateVideoRequestFileList },
      scene: 'string',
      width: 'number',
      height: 'number',
      style: 'string',
      duration: 'number',
      durationAdaption: 'boolean',
      transitionStyle: 'string',
      smartEffect: 'boolean',
      puzzleEffect: 'boolean',
      mute: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateVideoResponse extends $tea.Model {
  requestId: string;
  data: GenerateVideoResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: GenerateVideoResponseData,
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

export class ChangeVideoSizeResponseData extends $tea.Model {
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

export class GenerateVideoRequestFileList extends $tea.Model {
  fileUrl: string;
  fileName: string;
  type: string;
  static names(): { [key: string]: string } {
    return {
      fileUrl: 'FileUrl',
      fileName: 'FileName',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileUrl: 'string',
      fileName: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GenerateVideoResponseData extends $tea.Model {
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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("videoenhan", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async changeVideoSize(request: ChangeVideoSizeRequest, runtime: $Util.RuntimeOptions): Promise<ChangeVideoSizeResponse> {
    Util.validateModel(request);
    return $tea.cast<ChangeVideoSizeResponse>(await this.doRequest("ChangeVideoSize", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new ChangeVideoSizeResponse({}));
  }

  async changeVideoSizeAdvance(request: ChangeVideoSizeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ChangeVideoSizeResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    let changeVideoSizereq = new ChangeVideoSizeRequest({ });
    RPCUtil.convert(request, changeVideoSizereq);
    changeVideoSizereq.videoUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let changeVideoSizeResp = await this.changeVideoSize(changeVideoSizereq, runtime);
    return changeVideoSizeResp;
  }

  async generateVideo(request: GenerateVideoRequest, runtime: $Util.RuntimeOptions): Promise<GenerateVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<GenerateVideoResponse>(await this.doRequest("GenerateVideo", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new GenerateVideoResponse({}));
  }

  async getAsyncJobResult(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAsyncJobResultResponse>(await this.doRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
  }

  async superResolveVideo(request: SuperResolveVideoRequest, runtime: $Util.RuntimeOptions): Promise<SuperResolveVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<SuperResolveVideoResponse>(await this.doRequest("SuperResolveVideo", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new SuperResolveVideoResponse({}));
  }

  async superResolveVideoAdvance(request: SuperResolveVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SuperResolveVideoResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<EraseVideoLogoResponse>(await this.doRequest("EraseVideoLogo", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new EraseVideoLogoResponse({}));
  }

  async eraseVideoLogoAdvance(request: EraseVideoLogoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoLogoResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<EraseVideoSubtitlesResponse>(await this.doRequest("EraseVideoSubtitles", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new EraseVideoSubtitlesResponse({}));
  }

  async eraseVideoSubtitlesAdvance(request: EraseVideoSubtitlesAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<EraseVideoSubtitlesResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<AbstractEcommerceVideoResponse>(await this.doRequest("AbstractEcommerceVideo", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new AbstractEcommerceVideoResponse({}));
  }

  async abstractEcommerceVideoAdvance(request: AbstractEcommerceVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AbstractEcommerceVideoResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<AbstractFilmVideoResponse>(await this.doRequest("AbstractFilmVideo", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new AbstractFilmVideoResponse({}));
  }

  async abstractFilmVideoAdvance(request: AbstractFilmVideoAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AbstractFilmVideoResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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
    Util.validateModel(request);
    return $tea.cast<AdjustVideoColorResponse>(await this.doRequest("AdjustVideoColor", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new AdjustVideoColorResponse({}));
  }

  async adjustVideoColorAdvance(request: AdjustVideoColorAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AdjustVideoColorResponse> {
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
      product: "videoenhan",
      regionId: this._regionId,
    });
    let authResponse = await authClient.authorizeFileUploadWithOptions(authRequest, runtime);
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

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

export class DetectTransparentImageRequest extends $tea.Model {
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

export class DetectTransparentImageResponse extends $tea.Model {
  requestId: string;
  data: DetectTransparentImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectTransparentImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectTransparentImageAdvanceRequest extends $tea.Model {
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

export class DetectObjectRequest extends $tea.Model {
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

export class DetectObjectResponse extends $tea.Model {
  requestId: string;
  data: DetectObjectResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectObjectResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectObjectAdvanceRequest extends $tea.Model {
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

export class DetectWhiteBaseImageRequest extends $tea.Model {
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

export class DetectWhiteBaseImageResponse extends $tea.Model {
  requestId: string;
  data: DetectWhiteBaseImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectWhiteBaseImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectWhiteBaseImageAdvanceRequest extends $tea.Model {
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

export class ClassifyVehicleInsuranceRequest extends $tea.Model {
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

export class ClassifyVehicleInsuranceResponse extends $tea.Model {
  requestId: string;
  data: ClassifyVehicleInsuranceResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ClassifyVehicleInsuranceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyVehicleInsuranceAdvanceRequest extends $tea.Model {
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

export class RecognizeVehicleDashboardRequest extends $tea.Model {
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

export class RecognizeVehicleDashboardResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVehicleDashboardResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVehicleDashboardResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDashboardAdvanceRequest extends $tea.Model {
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

export class RecognizeVehicleDamageRequest extends $tea.Model {
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

export class RecognizeVehicleDamageResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVehicleDamageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVehicleDamageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDamageAdvanceRequest extends $tea.Model {
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

export class RecognizeVehiclePartsRequest extends $tea.Model {
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

export class RecognizeVehiclePartsResponse extends $tea.Model {
  requestId: string;
  data: RecognizeVehiclePartsResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeVehiclePartsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehiclePartsAdvanceRequest extends $tea.Model {
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

export class DetectVehicleRequest extends $tea.Model {
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

export class DetectVehicleResponse extends $tea.Model {
  requestId: string;
  data: DetectVehicleResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectVehicleResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectVehicleAdvanceRequest extends $tea.Model {
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

export class DetectMainBodyRequest extends $tea.Model {
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

export class DetectMainBodyResponse extends $tea.Model {
  requestId: string;
  data: DetectMainBodyResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectMainBodyResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectMainBodyAdvanceRequest extends $tea.Model {
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

export class DetectTransparentImageResponseDataElements extends $tea.Model {
  transparentImage: number;
  static names(): { [key: string]: string } {
    return {
      transparentImage: 'TransparentImage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transparentImage: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectTransparentImageResponseData extends $tea.Model {
  elements: DetectTransparentImageResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': DetectTransparentImageResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectObjectResponseDataElements extends $tea.Model {
  score: number;
  type: string;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      type: 'Type',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      type: 'string',
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectObjectResponseData extends $tea.Model {
  width: number;
  height: number;
  elements: DetectObjectResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      elements: { 'type': 'array', 'itemType': DetectObjectResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectWhiteBaseImageResponseDataElements extends $tea.Model {
  whiteBase: number;
  static names(): { [key: string]: string } {
    return {
      whiteBase: 'WhiteBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      whiteBase: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectWhiteBaseImageResponseData extends $tea.Model {
  elements: DetectWhiteBaseImageResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': DetectWhiteBaseImageResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyVehicleInsuranceResponseDataLabels extends $tea.Model {
  score: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyVehicleInsuranceResponseData extends $tea.Model {
  threshold: number;
  labels: ClassifyVehicleInsuranceResponseDataLabels[];
  static names(): { [key: string]: string } {
    return {
      threshold: 'Threshold',
      labels: 'Labels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      threshold: 'number',
      labels: { 'type': 'array', 'itemType': ClassifyVehicleInsuranceResponseDataLabels },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDashboardResponseDataElements extends $tea.Model {
  score: number;
  className: string;
  label: string;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      className: 'ClassName',
      label: 'Label',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      className: 'string',
      label: 'string',
      boxes: { 'type': 'array', 'itemType': 'float' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDashboardResponseData extends $tea.Model {
  elements: RecognizeVehicleDashboardResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeVehicleDashboardResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDamageResponseDataElements extends $tea.Model {
  score: number;
  type: string;
  scores: number[];
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      type: 'Type',
      scores: 'Scores',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      type: 'string',
      scores: { 'type': 'array', 'itemType': 'float' },
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehicleDamageResponseData extends $tea.Model {
  elements: RecognizeVehicleDamageResponseDataElements[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeVehicleDamageResponseDataElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehiclePartsResponseDataElements extends $tea.Model {
  score: number;
  type: string;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      type: 'Type',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      type: 'string',
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeVehiclePartsResponseData extends $tea.Model {
  elements: RecognizeVehiclePartsResponseDataElements[];
  originShapes: number[];
  static names(): { [key: string]: string } {
    return {
      elements: 'Elements',
      originShapes: 'OriginShapes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      elements: { 'type': 'array', 'itemType': RecognizeVehiclePartsResponseDataElements },
      originShapes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectVehicleResponseDataDetectObjectInfoList extends $tea.Model {
  score: number;
  type: string;
  id: number;
  boxes: number[];
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      type: 'Type',
      id: 'Id',
      boxes: 'Boxes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      type: 'string',
      id: 'number',
      boxes: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectVehicleResponseData extends $tea.Model {
  width: number;
  height: number;
  detectObjectInfoList: DetectVehicleResponseDataDetectObjectInfoList[];
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      detectObjectInfoList: 'DetectObjectInfoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      detectObjectInfoList: { 'type': 'array', 'itemType': DetectVehicleResponseDataDetectObjectInfoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectMainBodyResponseDataLocation extends $tea.Model {
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

export class DetectMainBodyResponseData extends $tea.Model {
  location: DetectMainBodyResponseDataLocation;
  static names(): { [key: string]: string } {
    return {
      location: 'Location',
    };
  }

  static types(): { [key: string]: any } {
    return {
      location: DetectMainBodyResponseDataLocation,
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


  async detectTransparentImage(request: DetectTransparentImageRequest, runtime: $Util.RuntimeOptions): Promise<DetectTransparentImageResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectTransparentImageResponse>(await this.doRequest("DetectTransparentImage", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectTransparentImageResponse({}));
  }

  async detectTransparentImageAdvance(request: DetectTransparentImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectTransparentImageResponse> {
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
      product: "objectdet",
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
    let detectTransparentImagereq = new DetectTransparentImageRequest({ });
    RPCUtil.convert(request, detectTransparentImagereq);
    detectTransparentImagereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectTransparentImageResp = await this.detectTransparentImage(detectTransparentImagereq, runtime);
    return detectTransparentImageResp;
  }

  async detectObject(request: DetectObjectRequest, runtime: $Util.RuntimeOptions): Promise<DetectObjectResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectObjectResponse>(await this.doRequest("DetectObject", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectObjectResponse({}));
  }

  async detectObjectAdvance(request: DetectObjectAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectObjectResponse> {
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
      product: "objectdet",
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
    let detectObjectreq = new DetectObjectRequest({ });
    RPCUtil.convert(request, detectObjectreq);
    detectObjectreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectObjectResp = await this.detectObject(detectObjectreq, runtime);
    return detectObjectResp;
  }

  async detectWhiteBaseImage(request: DetectWhiteBaseImageRequest, runtime: $Util.RuntimeOptions): Promise<DetectWhiteBaseImageResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectWhiteBaseImageResponse>(await this.doRequest("DetectWhiteBaseImage", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectWhiteBaseImageResponse({}));
  }

  async detectWhiteBaseImageAdvance(request: DetectWhiteBaseImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectWhiteBaseImageResponse> {
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
      product: "objectdet",
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
    let detectWhiteBaseImagereq = new DetectWhiteBaseImageRequest({ });
    RPCUtil.convert(request, detectWhiteBaseImagereq);
    detectWhiteBaseImagereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectWhiteBaseImageResp = await this.detectWhiteBaseImage(detectWhiteBaseImagereq, runtime);
    return detectWhiteBaseImageResp;
  }

  async classifyVehicleInsurance(request: ClassifyVehicleInsuranceRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyVehicleInsuranceResponse> {
    Util.validateModel(request);
    return $tea.cast<ClassifyVehicleInsuranceResponse>(await this.doRequest("ClassifyVehicleInsurance", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new ClassifyVehicleInsuranceResponse({}));
  }

  async classifyVehicleInsuranceAdvance(request: ClassifyVehicleInsuranceAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyVehicleInsuranceResponse> {
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
      product: "objectdet",
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
    let classifyVehicleInsurancereq = new ClassifyVehicleInsuranceRequest({ });
    RPCUtil.convert(request, classifyVehicleInsurancereq);
    classifyVehicleInsurancereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let classifyVehicleInsuranceResp = await this.classifyVehicleInsurance(classifyVehicleInsurancereq, runtime);
    return classifyVehicleInsuranceResp;
  }

  async recognizeVehicleDashboard(request: RecognizeVehicleDashboardRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehicleDashboardResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeVehicleDashboardResponse>(await this.doRequest("RecognizeVehicleDashboard", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVehicleDashboardResponse({}));
  }

  async recognizeVehicleDashboardAdvance(request: RecognizeVehicleDashboardAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehicleDashboardResponse> {
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
      product: "objectdet",
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
    let recognizeVehicleDashboardreq = new RecognizeVehicleDashboardRequest({ });
    RPCUtil.convert(request, recognizeVehicleDashboardreq);
    recognizeVehicleDashboardreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVehicleDashboardResp = await this.recognizeVehicleDashboard(recognizeVehicleDashboardreq, runtime);
    return recognizeVehicleDashboardResp;
  }

  async recognizeVehicleDamage(request: RecognizeVehicleDamageRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehicleDamageResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeVehicleDamageResponse>(await this.doRequest("RecognizeVehicleDamage", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVehicleDamageResponse({}));
  }

  async recognizeVehicleDamageAdvance(request: RecognizeVehicleDamageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehicleDamageResponse> {
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
      product: "objectdet",
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
    let recognizeVehicleDamagereq = new RecognizeVehicleDamageRequest({ });
    RPCUtil.convert(request, recognizeVehicleDamagereq);
    recognizeVehicleDamagereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVehicleDamageResp = await this.recognizeVehicleDamage(recognizeVehicleDamagereq, runtime);
    return recognizeVehicleDamageResp;
  }

  async recognizeVehicleParts(request: RecognizeVehiclePartsRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehiclePartsResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeVehiclePartsResponse>(await this.doRequest("RecognizeVehicleParts", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeVehiclePartsResponse({}));
  }

  async recognizeVehiclePartsAdvance(request: RecognizeVehiclePartsAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeVehiclePartsResponse> {
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
      product: "objectdet",
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
    let recognizeVehiclePartsreq = new RecognizeVehiclePartsRequest({ });
    RPCUtil.convert(request, recognizeVehiclePartsreq);
    recognizeVehiclePartsreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeVehiclePartsResp = await this.recognizeVehicleParts(recognizeVehiclePartsreq, runtime);
    return recognizeVehiclePartsResp;
  }

  async detectVehicle(request: DetectVehicleRequest, runtime: $Util.RuntimeOptions): Promise<DetectVehicleResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectVehicleResponse>(await this.doRequest("DetectVehicle", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new DetectVehicleResponse({}));
  }

  async detectVehicleAdvance(request: DetectVehicleAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectVehicleResponse> {
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
      product: "objectdet",
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
    let detectVehiclereq = new DetectVehicleRequest({ });
    RPCUtil.convert(request, detectVehiclereq);
    detectVehiclereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectVehicleResp = await this.detectVehicle(detectVehiclereq, runtime);
    return detectVehicleResp;
  }

  async detectMainBody(request: DetectMainBodyRequest, runtime: $Util.RuntimeOptions): Promise<DetectMainBodyResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectMainBodyResponse>(await this.doRequest("DetectMainBody", "HTTPS", "GET", "2019-12-30", "AK", $tea.toMap(request), null, runtime), new DetectMainBodyResponse({}));
  }

  async detectMainBodyAdvance(request: DetectMainBodyAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectMainBodyResponse> {
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
      product: "objectdet",
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
    let detectMainBodyreq = new DetectMainBodyRequest({ });
    RPCUtil.convert(request, detectMainBodyreq);
    detectMainBodyreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectMainBodyResp = await this.detectMainBody(detectMainBodyreq, runtime);
    return detectMainBodyResp;
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

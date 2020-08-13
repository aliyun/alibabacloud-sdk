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

export class DetectKneeXRayRequest extends $tea.Model {
  url: string;
  dataFormat: string;
  static names(): { [key: string]: string } {
    return {
      url: 'Url',
      dataFormat: 'DataFormat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      url: 'string',
      dataFormat: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectKneeXRayResponse extends $tea.Model {
  requestId: string;
  data: DetectKneeXRayResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectKneeXRayResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectKneeXRayAdvanceRequest extends $tea.Model {
  urlObject: Readable;
  dataFormat: string;
  static names(): { [key: string]: string } {
    return {
      urlObject: 'UrlObject',
      dataFormat: 'DataFormat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      urlObject: 'Readable',
      dataFormat: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIRequest extends $tea.Model {
  URLList: DetectSpineMRIRequestURLList[];
  static names(): { [key: string]: string } {
    return {
      URLList: 'URLList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URLList: { 'type': 'array', 'itemType': DetectSpineMRIRequestURLList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIResponse extends $tea.Model {
  requestId: string;
  data: DetectSpineMRIResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectSpineMRIResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TranslateMedRequest extends $tea.Model {
  fromLanguage: string;
  toLanguage: string;
  text: string;
  static names(): { [key: string]: string } {
    return {
      fromLanguage: 'FromLanguage',
      toLanguage: 'ToLanguage',
      text: 'Text',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fromLanguage: 'string',
      toLanguage: 'string',
      text: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TranslateMedResponse extends $tea.Model {
  requestId: string;
  data: TranslateMedResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: TranslateMedResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleRequest extends $tea.Model {
  URLList: DetectLungNoduleRequestURLList[];
  static names(): { [key: string]: string } {
    return {
      URLList: 'URLList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URLList: { 'type': 'array', 'itemType': DetectLungNoduleRequestURLList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleResponse extends $tea.Model {
  requestId: string;
  data: DetectLungNoduleResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectLungNoduleResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectCovid19CadRequest extends $tea.Model {
  URLList: DetectCovid19CadRequestURLList[];
  static names(): { [key: string]: string } {
    return {
      URLList: 'URLList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URLList: { 'type': 'array', 'itemType': DetectCovid19CadRequestURLList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectCovid19CadResponse extends $tea.Model {
  requestId: string;
  data: DetectCovid19CadResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: DetectCovid19CadResponseData,
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

export class DetectKneeXRayResponseDataKLDetections extends $tea.Model {
  detections: number[];
  static names(): { [key: string]: string } {
    return {
      detections: 'Detections',
    };
  }

  static types(): { [key: string]: any } {
    return {
      detections: { 'type': 'array', 'itemType': 'number' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectKneeXRayResponseData extends $tea.Model {
  KLDetections: DetectKneeXRayResponseDataKLDetections[];
  static names(): { [key: string]: string } {
    return {
      KLDetections: 'KLDetections',
    };
  }

  static types(): { [key: string]: any } {
    return {
      KLDetections: { 'type': 'array', 'itemType': DetectKneeXRayResponseDataKLDetections },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIRequestURLList extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIResponseDataDiscs extends $tea.Model {
  disease: string;
  identification: string;
  location: number[];
  static names(): { [key: string]: string } {
    return {
      disease: 'Disease',
      identification: 'Identification',
      location: 'Location',
    };
  }

  static types(): { [key: string]: any } {
    return {
      disease: 'string',
      identification: 'string',
      location: { 'type': 'array', 'itemType': 'number' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIResponseDataVertebras extends $tea.Model {
  disease: string;
  identification: string;
  location: number[];
  static names(): { [key: string]: string } {
    return {
      disease: 'Disease',
      identification: 'Identification',
      location: 'Location',
    };
  }

  static types(): { [key: string]: any } {
    return {
      disease: 'string',
      identification: 'string',
      location: { 'type': 'array', 'itemType': 'number' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectSpineMRIResponseData extends $tea.Model {
  discs: DetectSpineMRIResponseDataDiscs[];
  vertebras: DetectSpineMRIResponseDataVertebras[];
  static names(): { [key: string]: string } {
    return {
      discs: 'Discs',
      vertebras: 'Vertebras',
    };
  }

  static types(): { [key: string]: any } {
    return {
      discs: { 'type': 'array', 'itemType': DetectSpineMRIResponseDataDiscs },
      vertebras: { 'type': 'array', 'itemType': DetectSpineMRIResponseDataVertebras },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TranslateMedResponseData extends $tea.Model {
  text: string;
  words: number;
  static names(): { [key: string]: string } {
    return {
      text: 'Text',
      words: 'Words',
    };
  }

  static types(): { [key: string]: any } {
    return {
      text: 'string',
      words: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleRequestURLList extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleResponseDataSeriesElements extends $tea.Model {
  category: string;
  confidence: number;
  diameter: number;
  lobe: string;
  lung: string;
  x: number;
  z: number;
  y: number;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      confidence: 'Confidence',
      diameter: 'Diameter',
      lobe: 'Lobe',
      lung: 'Lung',
      x: 'X',
      z: 'Z',
      y: 'Y',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      confidence: 'number',
      diameter: 'number',
      lobe: 'string',
      lung: 'string',
      x: 'number',
      z: 'number',
      y: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleResponseDataSeries extends $tea.Model {
  seriesInstanceUid: string;
  elements: DetectLungNoduleResponseDataSeriesElements[];
  static names(): { [key: string]: string } {
    return {
      seriesInstanceUid: 'SeriesInstanceUid',
      elements: 'Elements',
    };
  }

  static types(): { [key: string]: any } {
    return {
      seriesInstanceUid: 'string',
      elements: { 'type': 'array', 'itemType': DetectLungNoduleResponseDataSeriesElements },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectLungNoduleResponseData extends $tea.Model {
  series: DetectLungNoduleResponseDataSeries[];
  static names(): { [key: string]: string } {
    return {
      series: 'Series',
    };
  }

  static types(): { [key: string]: any } {
    return {
      series: { 'type': 'array', 'itemType': DetectLungNoduleResponseDataSeries },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectCovid19CadRequestURLList extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetectCovid19CadResponseData extends $tea.Model {
  newProbability: string;
  normalProbability: string;
  otherProbability: string;
  lesionRatio: string;
  mask: string;
  static names(): { [key: string]: string } {
    return {
      newProbability: 'NewProbability',
      normalProbability: 'NormalProbability',
      otherProbability: 'OtherProbability',
      lesionRatio: 'LesionRatio',
      mask: 'Mask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      newProbability: 'string',
      normalProbability: 'string',
      otherProbability: 'string',
      lesionRatio: 'string',
      mask: 'string',
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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("imageprocess", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async detectKneeXRay(request: DetectKneeXRayRequest, runtime: $Util.RuntimeOptions): Promise<DetectKneeXRayResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectKneeXRayResponse>(await this.doRequest("DetectKneeXRay", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectKneeXRayResponse({}));
  }

  async detectKneeXRayAdvance(request: DetectKneeXRayAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<DetectKneeXRayResponse> {
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
      product: "imageprocess",
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
    let detectKneeXRayreq = new DetectKneeXRayRequest({ });
    RPCUtil.convert(request, detectKneeXRayreq);
    detectKneeXRayreq.url = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let detectKneeXRayResp = await this.detectKneeXRay(detectKneeXRayreq, runtime);
    return detectKneeXRayResp;
  }

  async detectSpineMRI(request: DetectSpineMRIRequest, runtime: $Util.RuntimeOptions): Promise<DetectSpineMRIResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectSpineMRIResponse>(await this.doRequest("DetectSpineMRI", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectSpineMRIResponse({}));
  }

  async translateMed(request: TranslateMedRequest, runtime: $Util.RuntimeOptions): Promise<TranslateMedResponse> {
    Util.validateModel(request);
    return $tea.cast<TranslateMedResponse>(await this.doRequest("TranslateMed", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new TranslateMedResponse({}));
  }

  async detectLungNodule(request: DetectLungNoduleRequest, runtime: $Util.RuntimeOptions): Promise<DetectLungNoduleResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectLungNoduleResponse>(await this.doRequest("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectLungNoduleResponse({}));
  }

  async detectCovid19Cad(request: DetectCovid19CadRequest, runtime: $Util.RuntimeOptions): Promise<DetectCovid19CadResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectCovid19CadResponse>(await this.doRequest("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectCovid19CadResponse({}));
  }

  async getAsyncJobResult(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAsyncJobResultResponse>(await this.doRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
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

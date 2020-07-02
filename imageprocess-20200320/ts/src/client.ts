// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

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


  async detectLungNoduleWithOptions(request: DetectLungNoduleRequest, runtime: $Util.RuntimeOptions): Promise<DetectLungNoduleResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectLungNoduleResponse>(await this.doRequest("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectLungNoduleResponse({}));
  }

  async detectLungNodule(request: DetectLungNoduleRequest): Promise<DetectLungNoduleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detectLungNoduleWithOptions(request, runtime);
  }

  async detectCovid19CadWithOptions(request: DetectCovid19CadRequest, runtime: $Util.RuntimeOptions): Promise<DetectCovid19CadResponse> {
    Util.validateModel(request);
    return $tea.cast<DetectCovid19CadResponse>(await this.doRequest("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DetectCovid19CadResponse({}));
  }

  async detectCovid19Cad(request: DetectCovid19CadRequest): Promise<DetectCovid19CadResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detectCovid19CadWithOptions(request, runtime);
  }

  async getAsyncJobResultWithOptions(request: GetAsyncJobResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAsyncJobResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAsyncJobResultResponse>(await this.doRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new GetAsyncJobResultResponse({}));
  }

  async getAsyncJobResult(request: GetAsyncJobResultRequest): Promise<GetAsyncJobResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAsyncJobResultWithOptions(request, runtime);
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

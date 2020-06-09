// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class TestFlowStrategy01Request extends $tea.Model {
  names?: { [key: string]: any };
  static names(): { [key: string]: string } {
    return {
      names: 'Names',
    };
  }

  static types(): { [key: string]: any } {
    return {
      names: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TestFlowStrategy01Response extends $tea.Model {
  requestId: string;
  list: string[];
  names: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      list: 'List',
      names: 'Names',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      list: { 'type': 'array', 'itemType': 'string' },
      names: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TestHttpApiRequest extends $tea.Model {
  stringValue?: { [key: string]: any };
  defaultValue?: { [key: string]: any };
  otherParam?: { [key: string]: any };
  booleanParam?: boolean;
  static names(): { [key: string]: string } {
    return {
      stringValue: 'StringValue',
      defaultValue: 'DefaultValue',
      otherParam: 'OtherParam',
      booleanParam: 'BooleanParam',
    };
  }

  static types(): { [key: string]: any } {
    return {
      stringValue: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      defaultValue: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      otherParam: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      booleanParam: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TestHttpApiResponse extends $tea.Model {
  params: string;
  serviceRpcSign: string;
  static names(): { [key: string]: string } {
    return {
      params: 'Params',
      serviceRpcSign: 'ServiceRpcSign',
    };
  }

  static types(): { [key: string]: any } {
    return {
      params: 'string',
      serviceRpcSign: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchAuditTest01Request extends $tea.Model {
  name?: string;
  batchAuditTest01?: string;
  demo01?: string;
  test010101?: boolean;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      batchAuditTest01: 'BatchAuditTest01',
      demo01: 'Demo01',
      test010101: 'Test010101',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      batchAuditTest01: 'string',
      demo01: 'string',
      test010101: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchAuditTest01Response extends $tea.Model {
  requestId: string;
  name: string;
  demo01: BatchAuditTest01ResponseDemo01;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
      demo01: 'Demo01',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
      demo01: BatchAuditTest01ResponseDemo01,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtIpFlowControlRequest extends $tea.Model {
  name?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtIpFlowControlResponse extends $tea.Model {
  requestId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtDynamicAddressDubboRequest extends $tea.Model {
  intValue?: number;
  stringValue?: string;
  static names(): { [key: string]: string } {
    return {
      intValue: 'IntValue',
      stringValue: 'StringValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      intValue: 'number',
      stringValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtDynamicAddressDubboResponse extends $tea.Model {
  requestId: string;
  stringValue: string;
  intValue: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stringValue: 'StringValue',
      intValue: 'IntValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stringValue: 'string',
      intValue: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtDynamicAddressHsfRequest extends $tea.Model {
  static names(): { [key: string]: string } {
    return {
    };
  }

  static types(): { [key: string]: any } {
    return {
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtDynamicAddressHsfResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtFlowSpecialRequest extends $tea.Model {
  name?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtFlowSpecialResponse extends $tea.Model {
  requestId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FTApiAliasApiRequest extends $tea.Model {
  name?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FTApiAliasApiResponse extends $tea.Model {
  requestId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtEagleEyeRequest extends $tea.Model {
  name?: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtEagleEyeResponse extends $tea.Model {
  requestId: string;
  name: string;
  eagleEyeTraceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
      eagleEyeTraceId: 'eagleEyeTraceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
      eagleEyeTraceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtParamListRequest extends $tea.Model {
  name?: string;
  disk?: FtParamListRequestDisk[];
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      disk: 'Disk',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      disk: { 'type': 'array', 'itemType': FtParamListRequestDisk },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtParamListResponse extends $tea.Model {
  requestId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtGatedLaunchPolicy4Request extends $tea.Model {
  isGatedLaunch?: string;
  static names(): { [key: string]: string } {
    return {
      isGatedLaunch: 'IsGatedLaunch',
    };
  }

  static types(): { [key: string]: any } {
    return {
      isGatedLaunch: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtGatedLaunchPolicy4Response extends $tea.Model {
  requestId: string;
  isGatedLaunch: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isGatedLaunch: 'IsGatedLaunch',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isGatedLaunch: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchAuditTest01ResponseDemo01Demo011Demo011 extends $tea.Model {
  demo0111: string;
  static names(): { [key: string]: string } {
    return {
      demo0111: 'Demo0111',
    };
  }

  static types(): { [key: string]: any } {
    return {
      demo0111: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchAuditTest01ResponseDemo01Demo011 extends $tea.Model {
  demo011: BatchAuditTest01ResponseDemo01Demo011Demo011[];
  static names(): { [key: string]: string } {
    return {
      demo011: 'Demo011',
    };
  }

  static types(): { [key: string]: any } {
    return {
      demo011: { 'type': 'array', 'itemType': BatchAuditTest01ResponseDemo01Demo011Demo011 },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchAuditTest01ResponseDemo01 extends $tea.Model {
  demo011: BatchAuditTest01ResponseDemo01Demo011;
  static names(): { [key: string]: string } {
    return {
      demo011: 'Demo011',
    };
  }

  static types(): { [key: string]: any } {
    return {
      demo011: BatchAuditTest01ResponseDemo01Demo011,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FtParamListRequestDisk extends $tea.Model {
  size: string[];
  type: string[];
  static names(): { [key: string]: string } {
    return {
      size: 'Size',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      size: { 'type': 'array', 'itemType': 'string' },
      type: { 'type': 'array', 'itemType': 'string' },
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
    this._endpointMap = {
      'ap-northeast-2-pop': "ft.aliyuncs.com",
      'ap-south-1': "ft.aliyuncs.com",
      'ap-southeast-1': "ft.aliyuncs.com",
      'ap-southeast-2': "ft.aliyuncs.com",
      'ap-southeast-3': "ft.aliyuncs.com",
      'ap-southeast-5': "ft.aliyuncs.com",
      'cn-beijing': "ft.aliyuncs.com",
      'cn-beijing-finance-1': "ft.aliyuncs.com",
      'cn-beijing-finance-pop': "ft.aliyuncs.com",
      'cn-beijing-gov-1': "ft.aliyuncs.com",
      'cn-beijing-nu16-b01': "ft.aliyuncs.com",
      'cn-chengdu': "ft.aliyuncs.com",
      'cn-edge-1': "ft.aliyuncs.com",
      'cn-fujian': "ft.aliyuncs.com",
      'cn-haidian-cm12-c01': "ft.aliyuncs.com",
      'cn-hangzhou-bj-b01': "ft.aliyuncs.com",
      'cn-hangzhou-finance': "ft.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "ft.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "ft.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "ft.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "ft.aliyuncs.com",
      'cn-hangzhou-test-306': "ft.aliyuncs.com",
      'cn-hongkong-finance-pop': "ft.aliyuncs.com",
      'cn-huhehaote': "ft.aliyuncs.com",
      'cn-qingdao': "ft.aliyuncs.com",
      'cn-qingdao-nebula': "ft.aliyuncs.com",
      'cn-shanghai-et15-b01': "ft.aliyuncs.com",
      'cn-shanghai-et2-b01': "ft.aliyuncs.com",
      'cn-shanghai-finance-1': "ft.aliyuncs.com",
      'cn-shanghai-inner': "ft.aliyuncs.com",
      'cn-shanghai-internal-test-1': "ft.aliyuncs.com",
      'cn-shenzhen-finance-1': "ft.aliyuncs.com",
      'cn-shenzhen-inner': "ft.aliyuncs.com",
      'cn-shenzhen-st4-d01': "ft.aliyuncs.com",
      'cn-shenzhen-su18-b01': "ft.aliyuncs.com",
      'cn-wuhan': "ft.aliyuncs.com",
      'cn-yushanfang': "ft.aliyuncs.com",
      'cn-zhangbei-na61-b01': "ft.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "ft.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "ft.aliyuncs.com",
      'eu-central-1': "ft.aliyuncs.com",
      'eu-west-1': "ft.aliyuncs.com",
      'eu-west-1-oxs': "ft.aliyuncs.com",
      'me-east-1': "ft.aliyuncs.com",
      'rus-west-1-pop': "ft.aliyuncs.com",
      'us-west-1': "ft.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("ft", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async testFlowStrategy01WithOptions(request: TestFlowStrategy01Request, runtime: $Util.RuntimeOptions): Promise<TestFlowStrategy01Response> {
    Util.validateModel(request);
    return $tea.cast<TestFlowStrategy01Response>(await this.doRequest("TestFlowStrategy01", "HTTPS", "PUT", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new TestFlowStrategy01Response({}));
  }

  async testFlowStrategy01(request: TestFlowStrategy01Request): Promise<TestFlowStrategy01Response> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.testFlowStrategy01WithOptions(request, runtime);
  }

  async testHttpApiWithOptions(request: TestHttpApiRequest, runtime: $Util.RuntimeOptions): Promise<TestHttpApiResponse> {
    Util.validateModel(request);
    return $tea.cast<TestHttpApiResponse>(await this.doRequest("TestHttpApi", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new TestHttpApiResponse({}));
  }

  async testHttpApi(request: TestHttpApiRequest): Promise<TestHttpApiResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.testHttpApiWithOptions(request, runtime);
  }

  async batchAuditTest01WithOptions(request: BatchAuditTest01Request, runtime: $Util.RuntimeOptions): Promise<BatchAuditTest01Response> {
    Util.validateModel(request);
    return $tea.cast<BatchAuditTest01Response>(await this.doRequest("BatchAuditTest01", "HTTPS", "POST", "2018-07-13", "Anonymous", null, $tea.toMap(request), runtime), new BatchAuditTest01Response({}));
  }

  async batchAuditTest01(request: BatchAuditTest01Request): Promise<BatchAuditTest01Response> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchAuditTest01WithOptions(request, runtime);
  }

  async ftIpFlowControlWithOptions(request: FtIpFlowControlRequest, runtime: $Util.RuntimeOptions): Promise<FtIpFlowControlResponse> {
    Util.validateModel(request);
    return $tea.cast<FtIpFlowControlResponse>(await this.doRequest("FtIpFlowControl", "HTTPS", "POST", "2018-07-13", "Anonymous", null, $tea.toMap(request), runtime), new FtIpFlowControlResponse({}));
  }

  async ftIpFlowControl(request: FtIpFlowControlRequest): Promise<FtIpFlowControlResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftIpFlowControlWithOptions(request, runtime);
  }

  async ftDynamicAddressDubboWithOptions(request: FtDynamicAddressDubboRequest, runtime: $Util.RuntimeOptions): Promise<FtDynamicAddressDubboResponse> {
    Util.validateModel(request);
    return $tea.cast<FtDynamicAddressDubboResponse>(await this.doRequest("FtDynamicAddressDubbo", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtDynamicAddressDubboResponse({}));
  }

  async ftDynamicAddressDubbo(request: FtDynamicAddressDubboRequest): Promise<FtDynamicAddressDubboResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftDynamicAddressDubboWithOptions(request, runtime);
  }

  async ftDynamicAddressHsfWithOptions(request: FtDynamicAddressHsfRequest, runtime: $Util.RuntimeOptions): Promise<FtDynamicAddressHsfResponse> {
    Util.validateModel(request);
    return $tea.cast<FtDynamicAddressHsfResponse>(await this.doRequest("FtDynamicAddressHsf", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtDynamicAddressHsfResponse({}));
  }

  async ftDynamicAddressHsf(request: FtDynamicAddressHsfRequest): Promise<FtDynamicAddressHsfResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftDynamicAddressHsfWithOptions(request, runtime);
  }

  async ftFlowSpecialWithOptions(request: FtFlowSpecialRequest, runtime: $Util.RuntimeOptions): Promise<FtFlowSpecialResponse> {
    Util.validateModel(request);
    return $tea.cast<FtFlowSpecialResponse>(await this.doRequest("FtFlowSpecial", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtFlowSpecialResponse({}));
  }

  async ftFlowSpecial(request: FtFlowSpecialRequest): Promise<FtFlowSpecialResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftFlowSpecialWithOptions(request, runtime);
  }

  async FTApiAliasApiWithOptions(request: FTApiAliasApiRequest, runtime: $Util.RuntimeOptions): Promise<FTApiAliasApiResponse> {
    Util.validateModel(request);
    return $tea.cast<FTApiAliasApiResponse>(await this.doRequest("FTApiAliasApi", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FTApiAliasApiResponse({}));
  }

  async FTApiAliasApi(request: FTApiAliasApiRequest): Promise<FTApiAliasApiResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.FTApiAliasApiWithOptions(request, runtime);
  }

  async ftEagleEyeWithOptions(request: FtEagleEyeRequest, runtime: $Util.RuntimeOptions): Promise<FtEagleEyeResponse> {
    Util.validateModel(request);
    return $tea.cast<FtEagleEyeResponse>(await this.doRequest("FtEagleEye", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtEagleEyeResponse({}));
  }

  async ftEagleEye(request: FtEagleEyeRequest): Promise<FtEagleEyeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftEagleEyeWithOptions(request, runtime);
  }

  async ftParamListWithOptions(request: FtParamListRequest, runtime: $Util.RuntimeOptions): Promise<FtParamListResponse> {
    Util.validateModel(request);
    return $tea.cast<FtParamListResponse>(await this.doRequest("FtParamList", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtParamListResponse({}));
  }

  async ftParamList(request: FtParamListRequest): Promise<FtParamListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftParamListWithOptions(request, runtime);
  }

  async ftGatedLaunchPolicy4WithOptions(request: FtGatedLaunchPolicy4Request, runtime: $Util.RuntimeOptions): Promise<FtGatedLaunchPolicy4Response> {
    Util.validateModel(request);
    return $tea.cast<FtGatedLaunchPolicy4Response>(await this.doRequest("FtGatedLaunchPolicy4", "HTTPS", "POST", "2018-07-13", "AK", null, $tea.toMap(request), runtime), new FtGatedLaunchPolicy4Response({}));
  }

  async ftGatedLaunchPolicy4(request: FtGatedLaunchPolicy4Request): Promise<FtGatedLaunchPolicy4Response> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ftGatedLaunchPolicy4WithOptions(request, runtime);
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

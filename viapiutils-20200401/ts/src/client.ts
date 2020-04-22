// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class GetOssStsTokenRequest extends $tea.Model {
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

export class GetOssStsTokenResponse extends $tea.Model {
  requestId: string;
  data: GetOssStsTokenResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: GetOssStsTokenResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetOssStsTokenResponseData extends $tea.Model {
  accessKeyId: string;
  accessKeySecret: string;
  securityToken: string;
  script: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      accessKeySecret: 'AccessKeySecret',
      securityToken: 'SecurityToken',
      script: 'Script',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      accessKeySecret: 'string',
      securityToken: 'string',
      script: 'string',
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


  async getOssStsTokenEx(request: GetOssStsTokenRequest, runtime: $Util.RuntimeOptions): Promise<GetOssStsTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<GetOssStsTokenResponse>(await this.doRequest("GetOssStsToken", "HTTPS", "POST", "2020-04-01", "AK", null, $tea.toMap(request), runtime), new GetOssStsTokenResponse({}));
  }

  async getOssStsToken(request: GetOssStsTokenRequest): Promise<GetOssStsTokenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getOssStsTokenEx(request, runtime);
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

// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

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


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("openplatform", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async authorizeFileUploadWithOptions(request: AuthorizeFileUploadRequest, runtime: $Util.RuntimeOptions): Promise<AuthorizeFileUploadResponse> {
    Util.validateModel(request);
    return $tea.cast<AuthorizeFileUploadResponse>(await this.doRequest("AuthorizeFileUpload", "HTTPS", "GET", "2019-12-19", "AK", $tea.toMap(request), null, runtime), new AuthorizeFileUploadResponse({}));
  }

  async authorizeFileUpload(request: AuthorizeFileUploadRequest): Promise<AuthorizeFileUploadResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.authorizeFileUploadWithOptions(request, runtime);
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

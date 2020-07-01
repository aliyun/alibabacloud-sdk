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

export class SearchImageByNameRequest extends $tea.Model {
  categoryId?: number;
  instanceName: string;
  productId: string;
  picName: string;
  num?: number;
  start?: number;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      productId: 'ProductId',
      picName: 'PicName',
      num: 'Num',
      start: 'Start',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      instanceName: 'string',
      productId: 'string',
      picName: 'string',
      num: 'number',
      start: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  msg: string;
  auctions: SearchImageByNameResponseAuctions[];
  head: SearchImageByNameResponseHead;
  picInfo: SearchImageByNameResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      msg: 'Msg',
      auctions: 'Auctions',
      head: 'Head',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      msg: 'string',
      auctions: { 'type': 'array', 'itemType': SearchImageByNameResponseAuctions },
      head: SearchImageByNameResponseHead,
      picInfo: SearchImageByNameResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicRequest extends $tea.Model {
  categoryId?: number;
  instanceName: string;
  picContent: string;
  crop?: boolean;
  region?: string;
  num?: number;
  start?: number;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      picContent: 'PicContent',
      crop: 'Crop',
      region: 'Region',
      num: 'Num',
      start: 'Start',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      instanceName: 'string',
      picContent: 'string',
      crop: 'boolean',
      region: 'string',
      num: 'number',
      start: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  msg: string;
  auctions: SearchImageByPicResponseAuctions[];
  head: SearchImageByPicResponseHead;
  picInfo: SearchImageByPicResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      msg: 'Msg',
      auctions: 'Auctions',
      head: 'Head',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      msg: 'string',
      auctions: { 'type': 'array', 'itemType': SearchImageByPicResponseAuctions },
      head: SearchImageByPicResponseHead,
      picInfo: SearchImageByPicResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicAdvanceRequest extends $tea.Model {
  picContentObject: Readable;
  categoryId?: number;
  instanceName: string;
  crop?: boolean;
  region?: string;
  num?: number;
  start?: number;
  static names(): { [key: string]: string } {
    return {
      picContentObject: 'PicContentObject',
      categoryId: 'CategoryId',
      instanceName: 'InstanceName',
      crop: 'Crop',
      region: 'Region',
      num: 'Num',
      start: 'Start',
    };
  }

  static types(): { [key: string]: any } {
    return {
      picContentObject: 'Readable',
      categoryId: 'number',
      instanceName: 'string',
      crop: 'boolean',
      region: 'string',
      num: 'number',
      start: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageRequest extends $tea.Model {
  instanceName: string;
  productId: string;
  picName?: string;
  static names(): { [key: string]: string } {
    return {
      instanceName: 'InstanceName',
      productId: 'ProductId',
      picName: 'PicName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceName: 'string',
      productId: 'string',
      picName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  message: string;
  code: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      message: 'Message',
      code: 'Code',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      message: 'string',
      code: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageRequest extends $tea.Model {
  instanceName: string;
  categoryId?: number;
  productId: string;
  picName: string;
  picContent: string;
  crop?: boolean;
  region?: string;
  customContent?: string;
  intAttr?: number;
  strAttr?: string;
  static names(): { [key: string]: string } {
    return {
      instanceName: 'InstanceName',
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      picContent: 'PicContent',
      crop: 'Crop',
      region: 'Region',
      customContent: 'CustomContent',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceName: 'string',
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      picContent: 'string',
      crop: 'boolean',
      region: 'string',
      customContent: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  message: string;
  code: number;
  picInfo: AddImageResponsePicInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      message: 'Message',
      code: 'Code',
      picInfo: 'PicInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      message: 'string',
      code: 'number',
      picInfo: AddImageResponsePicInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageAdvanceRequest extends $tea.Model {
  picContentObject: Readable;
  instanceName: string;
  categoryId?: number;
  productId: string;
  picName: string;
  crop?: boolean;
  region?: string;
  customContent?: string;
  intAttr?: number;
  strAttr?: string;
  static names(): { [key: string]: string } {
    return {
      picContentObject: 'PicContentObject',
      instanceName: 'InstanceName',
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      crop: 'Crop',
      region: 'Region',
      customContent: 'CustomContent',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      picContentObject: 'Readable',
      instanceName: 'string',
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      crop: 'boolean',
      region: 'string',
      customContent: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponseAuctions extends $tea.Model {
  categoryId: number;
  productId: string;
  picName: string;
  customContent: string;
  sortExprValues: string;
  intAttr: number;
  strAttr: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      customContent: 'CustomContent',
      sortExprValues: 'SortExprValues',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      customContent: 'string',
      sortExprValues: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponseHead extends $tea.Model {
  docsReturn: number;
  docsFound: number;
  searchTime: number;
  static names(): { [key: string]: string } {
    return {
      docsReturn: 'DocsReturn',
      docsFound: 'DocsFound',
      searchTime: 'SearchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      docsReturn: 'number',
      docsFound: 'number',
      searchTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponsePicInfoAllCategories extends $tea.Model {
  id: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByNameResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  allCategories: SearchImageByNameResponsePicInfoAllCategories[];
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
      allCategories: 'AllCategories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
      allCategories: { 'type': 'array', 'itemType': SearchImageByNameResponsePicInfoAllCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponseAuctions extends $tea.Model {
  categoryId: number;
  productId: string;
  picName: string;
  customContent: string;
  sortExprValues: string;
  intAttr: number;
  strAttr: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      productId: 'ProductId',
      picName: 'PicName',
      customContent: 'CustomContent',
      sortExprValues: 'SortExprValues',
      intAttr: 'IntAttr',
      strAttr: 'StrAttr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      productId: 'string',
      picName: 'string',
      customContent: 'string',
      sortExprValues: 'string',
      intAttr: 'number',
      strAttr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponseHead extends $tea.Model {
  docsReturn: number;
  docsFound: number;
  searchTime: number;
  static names(): { [key: string]: string } {
    return {
      docsReturn: 'DocsReturn',
      docsFound: 'DocsFound',
      searchTime: 'SearchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      docsReturn: 'number',
      docsFound: 'number',
      searchTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponsePicInfoAllCategories extends $tea.Model {
  id: number;
  name: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageByPicResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  allCategories: SearchImageByPicResponsePicInfoAllCategories[];
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
      allCategories: 'AllCategories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
      allCategories: { 'type': 'array', 'itemType': SearchImageByPicResponsePicInfoAllCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponsePicInfo extends $tea.Model {
  categoryId: number;
  region: string;
  static names(): { [key: string]: string } {
    return {
      categoryId: 'CategoryId',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categoryId: 'number',
      region: 'string',
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
    this._endpoint = this.getEndpoint("imagesearch", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async searchImageByName(request: SearchImageByNameRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByNameResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchImageByNameResponse>(await this.doRequest("SearchImageByName", "HTTPS", "POST", "2020-02-12", "AK", null, $tea.toMap(request), runtime), new SearchImageByNameResponse({}));
  }

  async searchImageByPic(request: SearchImageByPicRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByPicResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchImageByPicResponse>(await this.doRequest("SearchImageByPic", "HTTPS", "POST", "2020-02-12", "AK", null, $tea.toMap(request), runtime), new SearchImageByPicResponse({}));
  }

  async searchImageByPicAdvance(request: SearchImageByPicAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageByPicResponse> {
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
      product: "ImageSearch",
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
      content: request.picContentObject,
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
    let searchImageByPicreq = new SearchImageByPicRequest({ });
    RPCUtil.convert(request, searchImageByPicreq);
    searchImageByPicreq.picContent = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let searchImageByPicResp = await this.searchImageByPic(searchImageByPicreq, runtime);
    return searchImageByPicResp;
  }

  async deleteImage(request: DeleteImageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteImageResponse>(await this.doRequest("DeleteImage", "HTTPS", "POST", "2020-02-12", "AK", null, $tea.toMap(request), runtime), new DeleteImageResponse({}));
  }

  async addImage(request: AddImageRequest, runtime: $Util.RuntimeOptions): Promise<AddImageResponse> {
    Util.validateModel(request);
    return $tea.cast<AddImageResponse>(await this.doRequest("AddImage", "HTTPS", "POST", "2020-02-12", "AK", null, $tea.toMap(request), runtime), new AddImageResponse({}));
  }

  async addImageAdvance(request: AddImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<AddImageResponse> {
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
      product: "ImageSearch",
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
      content: request.picContentObject,
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
    let addImagereq = new AddImageRequest({ });
    RPCUtil.convert(request, addImagereq);
    addImagereq.picContent = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let addImageResp = await this.addImage(addImagereq, runtime);
    return addImageResp;
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

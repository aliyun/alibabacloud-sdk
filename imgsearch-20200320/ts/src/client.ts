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

export class ListImageDbsRequest extends $tea.Model {
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

export class ListImageDbsResponse extends $tea.Model {
  requestId: string;
  data: ListImageDbsResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ListImageDbsResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListImagesRequest extends $tea.Model {
  dbName: string;
  token?: string;
  offset?: number;
  limit?: number;
  order?: string;
  entityIdPrefix?: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      token: 'Token',
      offset: 'Offset',
      limit: 'Limit',
      order: 'Order',
      entityIdPrefix: 'EntityIdPrefix',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      token: 'string',
      offset: 'number',
      limit: 'number',
      order: 'string',
      entityIdPrefix: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListImagesResponse extends $tea.Model {
  requestId: string;
  data: ListImagesResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ListImagesResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageRequest extends $tea.Model {
  dbName: string;
  imageUrl: string;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      imageUrl: 'ImageUrl',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      imageUrl: 'string',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageResponse extends $tea.Model {
  requestId: string;
  data: SearchImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: SearchImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageAdvanceRequest extends $tea.Model {
  imageUrlObject: Readable;
  dbName: string;
  limit: number;
  static names(): { [key: string]: string } {
    return {
      imageUrlObject: 'ImageUrlObject',
      dbName: 'DbName',
      limit: 'Limit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageUrlObject: 'Readable',
      dbName: 'string',
      limit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageRequest extends $tea.Model {
  dbName: string;
  imageUrl: string;
  extraData?: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      imageUrl: 'ImageUrl',
      extraData: 'ExtraData',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      imageUrl: 'string',
      extraData: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponse extends $tea.Model {
  requestId: string;
  data: AddImageResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: AddImageResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageAdvanceRequest extends $tea.Model {
  imageUrlObject: Readable;
  dbName: string;
  extraData?: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      imageUrlObject: 'ImageUrlObject',
      dbName: 'DbName',
      extraData: 'ExtraData',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageUrlObject: 'Readable',
      dbName: 'string',
      extraData: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageDbRequest extends $tea.Model {
  name: string;
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

export class DeleteImageDbResponse extends $tea.Model {
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

export class CreateImageDbRequest extends $tea.Model {
  name: string;
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

export class CreateImageDbResponse extends $tea.Model {
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

export class DeleteImageRequest extends $tea.Model {
  dbName: string;
  entityId: string;
  static names(): { [key: string]: string } {
    return {
      dbName: 'DbName',
      entityId: 'EntityId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbName: 'string',
      entityId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageResponse extends $tea.Model {
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

export class ListImageDbsResponseDataDbList extends $tea.Model {
  name: string;
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

export class ListImageDbsResponseData extends $tea.Model {
  dbList: ListImageDbsResponseDataDbList[];
  static names(): { [key: string]: string } {
    return {
      dbList: 'DbList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dbList: { 'type': 'array', 'itemType': ListImageDbsResponseDataDbList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListImagesResponseDataImageList extends $tea.Model {
  dataId: string;
  extraData: string;
  entityId: string;
  updatedAt: number;
  createdAt: number;
  static names(): { [key: string]: string } {
    return {
      dataId: 'DataId',
      extraData: 'ExtraData',
      entityId: 'EntityId',
      updatedAt: 'UpdatedAt',
      createdAt: 'CreatedAt',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataId: 'string',
      extraData: 'string',
      entityId: 'string',
      updatedAt: 'number',
      createdAt: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListImagesResponseData extends $tea.Model {
  token: string;
  totalCount: number;
  imageList: ListImagesResponseDataImageList[];
  static names(): { [key: string]: string } {
    return {
      token: 'Token',
      totalCount: 'TotalCount',
      imageList: 'ImageList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      token: 'string',
      totalCount: 'number',
      imageList: { 'type': 'array', 'itemType': ListImagesResponseDataImageList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageResponseDataMatchList extends $tea.Model {
  dataId: string;
  extraData: string;
  entityId: string;
  imageUrl: string;
  score: number;
  static names(): { [key: string]: string } {
    return {
      dataId: 'DataId',
      extraData: 'ExtraData',
      entityId: 'EntityId',
      imageUrl: 'ImageUrl',
      score: 'Score',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataId: 'string',
      extraData: 'string',
      entityId: 'string',
      imageUrl: 'string',
      score: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchImageResponseData extends $tea.Model {
  matchList: SearchImageResponseDataMatchList[];
  static names(): { [key: string]: string } {
    return {
      matchList: 'MatchList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      matchList: { 'type': 'array', 'itemType': SearchImageResponseDataMatchList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddImageResponseData extends $tea.Model {
  dataId: string;
  static names(): { [key: string]: string } {
    return {
      dataId: 'DataId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataId: 'string',
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
    this._endpoint = this.getEndpoint("imgsearch", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async listImageDbs(request: ListImageDbsRequest, runtime: $Util.RuntimeOptions): Promise<ListImageDbsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListImageDbsResponse>(await this.doRequest("ListImageDbs", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new ListImageDbsResponse({}));
  }

  async listImages(request: ListImagesRequest, runtime: $Util.RuntimeOptions): Promise<ListImagesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListImagesResponse>(await this.doRequest("ListImages", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new ListImagesResponse({}));
  }

  async searchImage(request: SearchImageRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchImageResponse>(await this.doRequest("SearchImage", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new SearchImageResponse({}));
  }

  async searchImageAdvance(request: SearchImageAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<SearchImageResponse> {
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
      product: "imgsearch",
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
      content: request.imageUrlObject,
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
    let searchImagereq = new SearchImageRequest({ });
    RPCUtil.convert(request, searchImagereq);
    searchImagereq.imageUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let searchImageResp = await this.searchImage(searchImagereq, runtime);
    return searchImageResp;
  }

  async addImage(request: AddImageRequest, runtime: $Util.RuntimeOptions): Promise<AddImageResponse> {
    Util.validateModel(request);
    return $tea.cast<AddImageResponse>(await this.doRequest("AddImage", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new AddImageResponse({}));
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
      product: "imgsearch",
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
      content: request.imageUrlObject,
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
    addImagereq.imageUrl = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let addImageResp = await this.addImage(addImagereq, runtime);
    return addImageResp;
  }

  async deleteImageDb(request: DeleteImageDbRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageDbResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteImageDbResponse>(await this.doRequest("DeleteImageDb", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DeleteImageDbResponse({}));
  }

  async createImageDb(request: CreateImageDbRequest, runtime: $Util.RuntimeOptions): Promise<CreateImageDbResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateImageDbResponse>(await this.doRequest("CreateImageDb", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new CreateImageDbResponse({}));
  }

  async deleteImage(request: DeleteImageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteImageResponse>(await this.doRequest("DeleteImage", "HTTPS", "POST", "2020-03-20", "AK", null, $tea.toMap(request), runtime), new DeleteImageResponse({}));
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

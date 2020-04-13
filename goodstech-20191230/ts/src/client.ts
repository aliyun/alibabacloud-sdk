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

export class RecognizeFurnitureAttributeRequest extends $tea.Model {
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

export class RecognizeFurnitureAttributeResponse extends $tea.Model {
  requestId: string;
  data: RecognizeFurnitureAttributeResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeFurnitureAttributeResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureAttributeAdvanceRequest extends $tea.Model {
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

export class RecognizeFurnitureSpuRequest extends $tea.Model {
  imageURL: string;
  XLength: number;
  YLength: number;
  ZLength: number;
  static names(): { [key: string]: string } {
    return {
      imageURL: 'ImageURL',
      XLength: 'XLength',
      YLength: 'YLength',
      ZLength: 'ZLength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURL: 'string',
      XLength: 'number',
      YLength: 'number',
      ZLength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuResponse extends $tea.Model {
  requestId: string;
  data: RecognizeFurnitureSpuResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: RecognizeFurnitureSpuResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuAdvanceRequest extends $tea.Model {
  imageURLObject: Readable;
  XLength: number;
  YLength: number;
  ZLength: number;
  static names(): { [key: string]: string } {
    return {
      imageURLObject: 'ImageURLObject',
      XLength: 'XLength',
      YLength: 'YLength',
      ZLength: 'ZLength',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageURLObject: 'Readable',
      XLength: 'number',
      YLength: 'number',
      ZLength: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityRequest extends $tea.Model {
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

export class ClassifyCommodityResponse extends $tea.Model {
  requestId: string;
  data: ClassifyCommodityResponseData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: ClassifyCommodityResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityAdvanceRequest extends $tea.Model {
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

export class RecognizeFurnitureAttributeResponseData extends $tea.Model {
  predStyleId: string;
  predStyle: string;
  predProbability: number;
  static names(): { [key: string]: string } {
    return {
      predStyleId: 'PredStyleId',
      predStyle: 'PredStyle',
      predProbability: 'PredProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      predStyleId: 'string',
      predStyle: 'string',
      predProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecognizeFurnitureSpuResponseData extends $tea.Model {
  predCateId: string;
  predCate: string;
  predProbability: number;
  static names(): { [key: string]: string } {
    return {
      predCateId: 'PredCateId',
      predCate: 'PredCate',
      predProbability: 'PredProbability',
    };
  }

  static types(): { [key: string]: any } {
    return {
      predCateId: 'string',
      predCate: 'string',
      predProbability: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityResponseDataCategories extends $tea.Model {
  score: number;
  categoryName: string;
  categoryId: string;
  static names(): { [key: string]: string } {
    return {
      score: 'Score',
      categoryName: 'CategoryName',
      categoryId: 'CategoryId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      score: 'number',
      categoryName: 'string',
      categoryId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClassifyCommodityResponseData extends $tea.Model {
  categories: ClassifyCommodityResponseDataCategories[];
  static names(): { [key: string]: string } {
    return {
      categories: 'Categories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      categories: { 'type': 'array', 'itemType': ClassifyCommodityResponseDataCategories },
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


  async recognizeFurnitureAttribute(request: RecognizeFurnitureAttributeRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeFurnitureAttributeResponse>(await this.doRequest("RecognizeFurnitureAttribute", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeFurnitureAttributeResponse({}));
  }

  async recognizeFurnitureAttributeAdvance(request: RecognizeFurnitureAttributeAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureAttributeResponse> {
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
      product: "goodstech",
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
    let recognizeFurnitureAttributereq = new RecognizeFurnitureAttributeRequest({ });
    RPCUtil.convert(request, recognizeFurnitureAttributereq);
    recognizeFurnitureAttributereq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFurnitureAttributeResp = await this.recognizeFurnitureAttribute(recognizeFurnitureAttributereq, runtime);
    return recognizeFurnitureAttributeResp;
  }

  async recognizeFurnitureSpu(request: RecognizeFurnitureSpuRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureSpuResponse> {
    Util.validateModel(request);
    return $tea.cast<RecognizeFurnitureSpuResponse>(await this.doRequest("RecognizeFurnitureSpu", "HTTPS", "POST", "2019-12-30", "AK", null, $tea.toMap(request), runtime), new RecognizeFurnitureSpuResponse({}));
  }

  async recognizeFurnitureSpuAdvance(request: RecognizeFurnitureSpuAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<RecognizeFurnitureSpuResponse> {
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
      product: "goodstech",
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
    let recognizeFurnitureSpureq = new RecognizeFurnitureSpuRequest({ });
    RPCUtil.convert(request, recognizeFurnitureSpureq);
    recognizeFurnitureSpureq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let recognizeFurnitureSpuResp = await this.recognizeFurnitureSpu(recognizeFurnitureSpureq, runtime);
    return recognizeFurnitureSpuResp;
  }

  async classifyCommodity(request: ClassifyCommodityRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyCommodityResponse> {
    Util.validateModel(request);
    return $tea.cast<ClassifyCommodityResponse>(await this.doRequest("ClassifyCommodity", "HTTPS", "GET", "2019-12-30", "AK", $tea.toMap(request), null, runtime), new ClassifyCommodityResponse({}));
  }

  async classifyCommodityAdvance(request: ClassifyCommodityAdvanceRequest, runtime: $Util.RuntimeOptions): Promise<ClassifyCommodityResponse> {
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
      product: "goodstech",
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
    let classifyCommodityreq = new ClassifyCommodityRequest({ });
    RPCUtil.convert(request, classifyCommodityreq);
    classifyCommodityreq.imageURL = `http://${authResponse.bucket}.${authResponse.endpoint}/${authResponse.objectKey}`;
    let classifyCommodityResp = await this.classifyCommodity(classifyCommodityreq, runtime);
    return classifyCommodityResp;
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

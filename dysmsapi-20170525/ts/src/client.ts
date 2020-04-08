// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';

export class QuerySmsTemplateRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateCode: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateCode: 'TemplateCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySmsTemplateResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  templateStatus: number;
  reason: string;
  templateCode: string;
  templateType: number;
  templateName: string;
  templateContent: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      templateStatus: 'TemplateStatus',
      reason: 'Reason',
      templateCode: 'TemplateCode',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateContent: 'TemplateContent',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      templateStatus: 'number',
      reason: 'string',
      templateCode: 'string',
      templateType: 'number',
      templateName: 'string',
      templateContent: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySmsSignRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  signName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      signName: 'SignName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      signName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySmsSignResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  signStatus: number;
  reason: string;
  signName: string;
  createDate: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      signStatus: 'SignStatus',
      reason: 'Reason',
      signName: 'SignName',
      createDate: 'CreateDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      signStatus: 'number',
      reason: 'string',
      signName: 'string',
      createDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySmsTemplateRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateType: number;
  templateName: string;
  templateCode: string;
  templateContent: string;
  remark: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateCode: 'TemplateCode',
      templateContent: 'TemplateContent',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateType: 'number',
      templateName: 'string',
      templateCode: 'string',
      templateContent: 'string',
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySmsTemplateResponse extends $tea.Model {
  requestId: string;
  templateCode: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateCode: 'TemplateCode',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateCode: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySmsSignRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  signName: string;
  signSource: number;
  signFileList: ModifySmsSignRequestSignFileList[];
  remark: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      signName: 'SignName',
      signSource: 'SignSource',
      signFileList: 'SignFileList',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      signName: 'string',
      signSource: 'number',
      signFileList: { 'type': 'array', 'itemType': ModifySmsSignRequestSignFileList },
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySmsSignResponse extends $tea.Model {
  requestId: string;
  signName: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      signName: 'SignName',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      signName: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSmsTemplateRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateCode: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateCode: 'TemplateCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSmsTemplateResponse extends $tea.Model {
  requestId: string;
  templateCode: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateCode: 'TemplateCode',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateCode: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSmsSignRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  signName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      signName: 'SignName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      signName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSmsSignResponse extends $tea.Model {
  requestId: string;
  signName: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      signName: 'SignName',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      signName: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddSmsTemplateRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateType: number;
  templateName: string;
  templateContent: string;
  remark: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateContent: 'TemplateContent',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateType: 'number',
      templateName: 'string',
      templateContent: 'string',
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddSmsTemplateResponse extends $tea.Model {
  requestId: string;
  templateCode: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateCode: 'TemplateCode',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateCode: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddSmsSignRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  signName: string;
  signSource: number;
  signFileList: AddSmsSignRequestSignFileList[];
  remark: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      signName: 'SignName',
      signSource: 'SignSource',
      signFileList: 'SignFileList',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      signName: 'string',
      signSource: 'number',
      signFileList: { 'type': 'array', 'itemType': AddSmsSignRequestSignFileList },
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddSmsSignResponse extends $tea.Model {
  requestId: string;
  signName: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      signName: 'SignName',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      signName: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendBatchSmsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumberJson: string;
  signNameJson: string;
  templateCode: string;
  templateParamJson?: string;
  smsUpExtendCodeJson?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumberJson: 'PhoneNumberJson',
      signNameJson: 'SignNameJson',
      templateCode: 'TemplateCode',
      templateParamJson: 'TemplateParamJson',
      smsUpExtendCodeJson: 'SmsUpExtendCodeJson',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumberJson: 'string',
      signNameJson: 'string',
      templateCode: 'string',
      templateParamJson: 'string',
      smsUpExtendCodeJson: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendBatchSmsResponse extends $tea.Model {
  requestId: string;
  bizId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bizId: 'BizId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bizId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendSmsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumbers: string;
  signName: string;
  templateCode: string;
  templateParam?: string;
  smsUpExtendCode?: string;
  outId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumbers: 'PhoneNumbers',
      signName: 'SignName',
      templateCode: 'TemplateCode',
      templateParam: 'TemplateParam',
      smsUpExtendCode: 'SmsUpExtendCode',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumbers: 'string',
      signName: 'string',
      templateCode: 'string',
      templateParam: 'string',
      smsUpExtendCode: 'string',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SendSmsResponse extends $tea.Model {
  requestId: string;
  bizId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      bizId: 'BizId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      bizId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySendDetailsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  bizId?: string;
  sendDate: string;
  pageSize: number;
  currentPage: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
      bizId: 'BizId',
      sendDate: 'SendDate',
      pageSize: 'PageSize',
      currentPage: 'CurrentPage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
      bizId: 'string',
      sendDate: 'string',
      pageSize: 'number',
      currentPage: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySendDetailsResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  totalCount: string;
  smsSendDetailDTOs: QuerySendDetailsResponseSmsSendDetailDTOs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      totalCount: 'TotalCount',
      smsSendDetailDTOs: 'SmsSendDetailDTOs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      totalCount: 'string',
      smsSendDetailDTOs: QuerySendDetailsResponseSmsSendDetailDTOs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySmsSignRequestSignFileList extends $tea.Model {
  fileSuffix: string;
  fileContents: string;
  static names(): { [key: string]: string } {
    return {
      fileSuffix: 'FileSuffix',
      fileContents: 'FileContents',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSuffix: 'string',
      fileContents: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddSmsSignRequestSignFileList extends $tea.Model {
  fileSuffix: string;
  fileContents: string;
  static names(): { [key: string]: string } {
    return {
      fileSuffix: 'FileSuffix',
      fileContents: 'FileContents',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSuffix: 'string',
      fileContents: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO extends $tea.Model {
  phoneNum: string;
  sendStatus: number;
  errCode: string;
  templateCode: string;
  content: string;
  sendDate: string;
  receiveDate: string;
  outId: string;
  static names(): { [key: string]: string } {
    return {
      phoneNum: 'PhoneNum',
      sendStatus: 'SendStatus',
      errCode: 'ErrCode',
      templateCode: 'TemplateCode',
      content: 'Content',
      sendDate: 'SendDate',
      receiveDate: 'ReceiveDate',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      phoneNum: 'string',
      sendStatus: 'number',
      errCode: 'string',
      templateCode: 'string',
      content: 'string',
      sendDate: 'string',
      receiveDate: 'string',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QuerySendDetailsResponseSmsSendDetailDTOs extends $tea.Model {
  smsSendDetailDTO: QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO[];
  static names(): { [key: string]: string } {
    return {
      smsSendDetailDTO: 'SmsSendDetailDTO',
    };
  }

  static types(): { [key: string]: any } {
    return {
      smsSendDetailDTO: { 'type': 'array', 'itemType': QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "central";
    this._endpointMap = {
      'ap-northeast-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-northeast-2-pop': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-south-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-southeast-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-southeast-2': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-southeast-3': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'ap-southeast-5': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'cn-beijing': "dysmsapi-proxy.cn-beijing.aliyuncs.com",
      'eu-central-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'eu-west-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'eu-west-1-oxs': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'me-east-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'rus-west-1-pop': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'us-east-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
      'us-west-1': "dysmsapi.ap-southeast-1.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async querySmsTemplate(request: QuerySmsTemplateRequest, runtime: $Util.RuntimeOptions): Promise<QuerySmsTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<QuerySmsTemplateResponse>(await this.doRequest("QuerySmsTemplate", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new QuerySmsTemplateResponse({}));
  }

  async querySmsSign(request: QuerySmsSignRequest, runtime: $Util.RuntimeOptions): Promise<QuerySmsSignResponse> {
    Util.validateModel(request);
    return $tea.cast<QuerySmsSignResponse>(await this.doRequest("QuerySmsSign", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new QuerySmsSignResponse({}));
  }

  async modifySmsTemplate(request: ModifySmsTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ModifySmsTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySmsTemplateResponse>(await this.doRequest("ModifySmsTemplate", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new ModifySmsTemplateResponse({}));
  }

  async modifySmsSign(request: ModifySmsSignRequest, runtime: $Util.RuntimeOptions): Promise<ModifySmsSignResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySmsSignResponse>(await this.doRequest("ModifySmsSign", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new ModifySmsSignResponse({}));
  }

  async deleteSmsTemplate(request: DeleteSmsTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSmsTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSmsTemplateResponse>(await this.doRequest("DeleteSmsTemplate", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DeleteSmsTemplateResponse({}));
  }

  async deleteSmsSign(request: DeleteSmsSignRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSmsSignResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSmsSignResponse>(await this.doRequest("DeleteSmsSign", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new DeleteSmsSignResponse({}));
  }

  async addSmsTemplate(request: AddSmsTemplateRequest, runtime: $Util.RuntimeOptions): Promise<AddSmsTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<AddSmsTemplateResponse>(await this.doRequest("AddSmsTemplate", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new AddSmsTemplateResponse({}));
  }

  async addSmsSign(request: AddSmsSignRequest, runtime: $Util.RuntimeOptions): Promise<AddSmsSignResponse> {
    Util.validateModel(request);
    return $tea.cast<AddSmsSignResponse>(await this.doRequest("AddSmsSign", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new AddSmsSignResponse({}));
  }

  async sendBatchSms(request: SendBatchSmsRequest, runtime: $Util.RuntimeOptions): Promise<SendBatchSmsResponse> {
    Util.validateModel(request);
    return $tea.cast<SendBatchSmsResponse>(await this.doRequest("SendBatchSms", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new SendBatchSmsResponse({}));
  }

  async sendSms(request: SendSmsRequest, runtime: $Util.RuntimeOptions): Promise<SendSmsResponse> {
    Util.validateModel(request);
    return $tea.cast<SendSmsResponse>(await this.doRequest("SendSms", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new SendSmsResponse({}));
  }

  async querySendDetails(request: QuerySendDetailsRequest, runtime: $Util.RuntimeOptions): Promise<QuerySendDetailsResponse> {
    Util.validateModel(request);
    return $tea.cast<QuerySendDetailsResponse>(await this.doRequest("QuerySendDetails", "HTTPS", "GET", "AK", $tea.toMap(request), null, runtime), new QuerySendDetailsResponse({}));
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}

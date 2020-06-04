// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class ListRobotTaskCallsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  pageNo?: number;
  pageSize?: number;
  taskId?: string;
  durationFrom?: string;
  durationTo?: string;
  dialogCountFrom?: string;
  dialogCountTo?: string;
  hangupDirection?: string;
  callResult?: string;
  called?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      taskId: 'TaskId',
      durationFrom: 'DurationFrom',
      durationTo: 'DurationTo',
      dialogCountFrom: 'DialogCountFrom',
      dialogCountTo: 'DialogCountTo',
      hangupDirection: 'HangupDirection',
      callResult: 'CallResult',
      called: 'Called',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      pageNo: 'number',
      pageSize: 'number',
      taskId: 'string',
      durationFrom: 'string',
      durationTo: 'string',
      dialogCountFrom: 'string',
      dialogCountTo: 'string',
      hangupDirection: 'string',
      callResult: 'string',
      called: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRobotTaskCallsResponse extends $tea.Model {
  requestId: string;
  data: string;
  pageSize: string;
  pageNo: string;
  totalCount: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
      totalCount: 'TotalCount',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      pageSize: 'string',
      pageNo: 'string',
      totalCount: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DoRtcNumberAuthRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DoRtcNumberAuthResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UndoRtcNumberAuthRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UndoRtcNumberAuthResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRtcNumberAuthStatusRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRtcNumberAuthStatusResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListOrderedNumbersRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  prodCode?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      prodCode: 'ProdCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      prodCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListOrderedNumbersResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  numbers: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      numbers: 'Numbers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      numbers: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartMicroOutboundRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  prodCode?: string;
  accountType?: string;
  accountId?: string;
  commandCode?: string;
  callingNumber?: string;
  calledNumber?: string;
  extInfo?: string;
  appName?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      prodCode: 'ProdCode',
      accountType: 'AccountType',
      accountId: 'AccountId',
      commandCode: 'CommandCode',
      callingNumber: 'CallingNumber',
      calledNumber: 'CalledNumber',
      extInfo: 'ExtInfo',
      appName: 'AppName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      prodCode: 'string',
      accountType: 'string',
      accountId: 'string',
      commandCode: 'string',
      callingNumber: 'string',
      calledNumber: 'string',
      extInfo: 'string',
      appName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartMicroOutboundResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  customerInfo: string;
  invokeCmdId: string;
  invokeCreateTime: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      customerInfo: 'CustomerInfo',
      invokeCmdId: 'InvokeCmdId',
      invokeCreateTime: 'InvokeCreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      customerInfo: 'string',
      invokeCmdId: 'string',
      invokeCreateTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListOutboundStrategiesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  prodCode?: string;
  buId?: number;
  keyword?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      prodCode: 'ProdCode',
      buId: 'BuId',
      keyword: 'Keyword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      prodCode: 'string',
      buId: 'number',
      keyword: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListOutboundStrategiesResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  outboundStrategies: ListOutboundStrategiesResponseOutboundStrategies[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      outboundStrategies: 'OutboundStrategies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      outboundStrategies: { 'type': 'array', 'itemType': ListOutboundStrategiesResponseOutboundStrategies },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordDataRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  prodCode?: string;
  accountType?: string;
  accountId?: string;
  acid?: string;
  secLevel?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      prodCode: 'ProdCode',
      accountType: 'AccountType',
      accountId: 'AccountId',
      acid: 'Acid',
      secLevel: 'SecLevel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      prodCode: 'string',
      accountType: 'string',
      accountId: 'string',
      acid: 'string',
      secLevel: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordDataResponse extends $tea.Model {
  requestId: string;
  code: string;
  message: string;
  ossLink: string;
  acid: string;
  agentId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      message: 'Message',
      ossLink: 'OssLink',
      acid: 'Acid',
      agentId: 'AgentId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      message: 'string',
      ossLink: 'string',
      acid: 'string',
      agentId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryVoipNumberBindInfosRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber?: string;
  voipId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
      voipId: 'VoipId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
      voipId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryVoipNumberBindInfosResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReportVoipProblemsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  channelId?: string;
  voipId: string;
  title: string;
  desc: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      channelId: 'ChannelId',
      voipId: 'VoipId',
      title: 'Title',
      desc: 'Desc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      channelId: 'string',
      voipId: 'string',
      title: 'string',
      desc: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReportVoipProblemsResponse extends $tea.Model {
  requestId: string;
  code: string;
  module: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      module: 'Module',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      module: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindNumberAndVoipIdRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  voipId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
      voipId: 'VoipId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
      voipId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindNumberAndVoipIdResponse extends $tea.Model {
  requestId: string;
  code: string;
  module: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      module: 'Module',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      module: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindNumberAndVoipIdRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  phoneNumber: string;
  voipId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      phoneNumber: 'PhoneNumber',
      voipId: 'VoipId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      phoneNumber: 'string',
      voipId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindNumberAndVoipIdResponse extends $tea.Model {
  requestId: string;
  code: string;
  module: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      module: 'Module',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      module: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UploadRobotTaskCalledFileRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  id: number;
  calledNumber: string;
  ttsParam?: string;
  ttsParamHead?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      id: 'Id',
      calledNumber: 'CalledNumber',
      ttsParam: 'TtsParam',
      ttsParamHead: 'TtsParamHead',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      id: 'number',
      calledNumber: 'string',
      ttsParam: 'string',
      ttsParamHead: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UploadRobotTaskCalledFileResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskCallDetailRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: number;
  callee: string;
  queryDate: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
      callee: 'Callee',
      queryDate: 'QueryDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
      callee: 'string',
      queryDate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskCallDetailResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotv2AllListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotv2AllListResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskDetailRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  id: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      id: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskDetailResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskCallListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  pageNo?: number;
  pageSize?: number;
  taskId: string;
  durationFrom?: string;
  durationTo?: string;
  dialogCountFrom?: string;
  dialogCountTo?: string;
  hangupDirection?: string;
  callResult?: string;
  called?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      taskId: 'TaskId',
      durationFrom: 'DurationFrom',
      durationTo: 'DurationTo',
      dialogCountFrom: 'DialogCountFrom',
      dialogCountTo: 'DialogCountTo',
      hangupDirection: 'HangupDirection',
      callResult: 'CallResult',
      called: 'Called',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      pageNo: 'number',
      pageSize: 'number',
      taskId: 'string',
      durationFrom: 'string',
      durationTo: 'string',
      dialogCountFrom: 'string',
      dialogCountTo: 'string',
      hangupDirection: 'string',
      callResult: 'string',
      called: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskCallListResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: number;
  scheduleTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
      scheduleTime: 'ScheduleTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
      scheduleTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskName?: string;
  status?: string;
  time?: string;
  pageSize?: number;
  pageNo?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskName: 'TaskName',
      status: 'Status',
      time: 'Time',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskName: 'string',
      status: 'string',
      time: 'string',
      pageSize: 'number',
      pageNo: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotTaskListResponse extends $tea.Model {
  requestId: string;
  data: string;
  pageSize: string;
  pageNo: string;
  totalCount: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
      totalCount: 'TotalCount',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      pageSize: 'string',
      pageNo: 'string',
      totalCount: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskName: string;
  dialogId: number;
  corpName?: string;
  caller: string;
  numberStatusIdent: boolean;
  retryType: number;
  recallStateCodes?: string;
  recallTimes?: number;
  recallInterval?: number;
  isSelfLine?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskName: 'TaskName',
      dialogId: 'DialogId',
      corpName: 'CorpName',
      caller: 'Caller',
      numberStatusIdent: 'NumberStatusIdent',
      retryType: 'RetryType',
      recallStateCodes: 'RecallStateCodes',
      recallTimes: 'RecallTimes',
      recallInterval: 'RecallInterval',
      isSelfLine: 'IsSelfLine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskName: 'string',
      dialogId: 'number',
      corpName: 'string',
      caller: 'string',
      numberStatusIdent: 'boolean',
      retryType: 'number',
      recallStateCodes: 'string',
      recallTimes: 'number',
      recallInterval: 'number',
      isSelfLine: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelOrderRobotTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelOrderRobotTaskResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SmartCallOperateRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  callId: string;
  command: string;
  param?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      callId: 'CallId',
      command: 'Command',
      param: 'Param',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      callId: 'string',
      command: 'string',
      param: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SmartCallOperateResponse extends $tea.Model {
  requestId: string;
  status: boolean;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      status: 'Status',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      status: 'boolean',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotInfoListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  auditStatus?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      auditStatus: 'AuditStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      auditStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryRobotInfoListResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchRobotSmartCallRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  calledShowNumber: string;
  corpName?: string;
  calledNumber: string;
  dialogId: string;
  earlyMediaAsr?: boolean;
  taskName: string;
  scheduleTime?: number;
  scheduleCall?: boolean;
  ttsParam?: string;
  ttsParamHead?: string;
  isSelfLine?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      calledShowNumber: 'CalledShowNumber',
      corpName: 'CorpName',
      calledNumber: 'CalledNumber',
      dialogId: 'DialogId',
      earlyMediaAsr: 'EarlyMediaAsr',
      taskName: 'TaskName',
      scheduleTime: 'ScheduleTime',
      scheduleCall: 'ScheduleCall',
      ttsParam: 'TtsParam',
      ttsParamHead: 'TtsParamHead',
      isSelfLine: 'IsSelfLine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      calledShowNumber: 'string',
      corpName: 'string',
      calledNumber: 'string',
      dialogId: 'string',
      earlyMediaAsr: 'boolean',
      taskName: 'string',
      scheduleTime: 'number',
      scheduleCall: 'boolean',
      ttsParam: 'string',
      ttsParamHead: 'string',
      isSelfLine: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchRobotSmartCallResponse extends $tea.Model {
  requestId: string;
  taskId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCallDetailByTaskIdRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  taskId: string;
  queryDate: number;
  callee: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      taskId: 'TaskId',
      queryDate: 'QueryDate',
      callee: 'Callee',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      taskId: 'string',
      queryDate: 'number',
      callee: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCallDetailByTaskIdResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRtcTokenRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  userId: string;
  deviceId: string;
  isCustomAccount?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      userId: 'UserId',
      deviceId: 'DeviceId',
      isCustomAccount: 'IsCustomAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      userId: 'string',
      deviceId: 'string',
      isCustomAccount: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRtcTokenResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddRtcAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  deviceId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddRtcAccountResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class VoipAddAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  deviceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class VoipAddAccountResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class VoipGetTokenRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  voipId: string;
  deviceId: string;
  isCustomAccount?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      voipId: 'VoipId',
      deviceId: 'DeviceId',
      isCustomAccount: 'IsCustomAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      voipId: 'string',
      deviceId: 'string',
      isCustomAccount: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class VoipGetTokenResponse extends $tea.Model {
  requestId: string;
  module: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      module: 'Module',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      module: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SmartCallRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  calledShowNumber: string;
  calledNumber: string;
  voiceCode: string;
  recordFlag?: boolean;
  volume?: number;
  speed?: number;
  asrModelId?: string;
  pauseTime?: number;
  muteTime?: number;
  actionCodeBreak?: boolean;
  outId?: string;
  dynamicId?: string;
  earlyMediaAsr?: boolean;
  voiceCodeParam?: string;
  sessionTimeout?: number;
  actionCodeTimeBreak?: number;
  ttsStyle?: string;
  ttsVolume?: number;
  ttsSpeed?: number;
  ttsConf?: boolean;
  asrBaseId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      calledShowNumber: 'CalledShowNumber',
      calledNumber: 'CalledNumber',
      voiceCode: 'VoiceCode',
      recordFlag: 'RecordFlag',
      volume: 'Volume',
      speed: 'Speed',
      asrModelId: 'AsrModelId',
      pauseTime: 'PauseTime',
      muteTime: 'MuteTime',
      actionCodeBreak: 'ActionCodeBreak',
      outId: 'OutId',
      dynamicId: 'DynamicId',
      earlyMediaAsr: 'EarlyMediaAsr',
      voiceCodeParam: 'VoiceCodeParam',
      sessionTimeout: 'SessionTimeout',
      actionCodeTimeBreak: 'ActionCodeTimeBreak',
      ttsStyle: 'TtsStyle',
      ttsVolume: 'TtsVolume',
      ttsSpeed: 'TtsSpeed',
      ttsConf: 'TtsConf',
      asrBaseId: 'AsrBaseId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      calledShowNumber: 'string',
      calledNumber: 'string',
      voiceCode: 'string',
      recordFlag: 'boolean',
      volume: 'number',
      speed: 'number',
      asrModelId: 'string',
      pauseTime: 'number',
      muteTime: 'number',
      actionCodeBreak: 'boolean',
      outId: 'string',
      dynamicId: 'string',
      earlyMediaAsr: 'boolean',
      voiceCodeParam: 'string',
      sessionTimeout: 'number',
      actionCodeTimeBreak: 'number',
      ttsStyle: 'string',
      ttsVolume: 'number',
      ttsSpeed: 'number',
      ttsConf: 'boolean',
      asrBaseId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SmartCallResponse extends $tea.Model {
  requestId: string;
  callId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      callId: 'CallId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      callId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCallDetailByCallIdRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  callId: string;
  prodId: number;
  queryDate: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      callId: 'CallId',
      prodId: 'ProdId',
      queryDate: 'QueryDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      callId: 'string',
      prodId: 'number',
      queryDate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryCallDetailByCallIdResponse extends $tea.Model {
  requestId: string;
  data: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelCallRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  callId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      callId: 'CallId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      callId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelCallResponse extends $tea.Model {
  requestId: string;
  status: boolean;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      status: 'Status',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      status: 'boolean',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClickToDialRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  callerShowNumber: string;
  callerNumber: string;
  calledShowNumber: string;
  calledNumber: string;
  recordFlag?: boolean;
  asrFlag?: boolean;
  sessionTimeout?: number;
  asrModelId?: string;
  outId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      callerShowNumber: 'CallerShowNumber',
      callerNumber: 'CallerNumber',
      calledShowNumber: 'CalledShowNumber',
      calledNumber: 'CalledNumber',
      recordFlag: 'RecordFlag',
      asrFlag: 'AsrFlag',
      sessionTimeout: 'SessionTimeout',
      asrModelId: 'AsrModelId',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      callerShowNumber: 'string',
      callerNumber: 'string',
      calledShowNumber: 'string',
      calledNumber: 'string',
      recordFlag: 'boolean',
      asrFlag: 'boolean',
      sessionTimeout: 'number',
      asrModelId: 'string',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClickToDialResponse extends $tea.Model {
  requestId: string;
  callId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      callId: 'CallId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      callId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IvrCallRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  calledShowNumber: string;
  calledNumber: string;
  startCode: string;
  startTtsParams?: string;
  menuKeyMap?: IvrCallRequestMenuKeyMap[];
  playTimes?: number;
  byeCode?: string;
  byeTtsParams?: string;
  timeout?: number;
  outId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      calledShowNumber: 'CalledShowNumber',
      calledNumber: 'CalledNumber',
      startCode: 'StartCode',
      startTtsParams: 'StartTtsParams',
      menuKeyMap: 'MenuKeyMap',
      playTimes: 'PlayTimes',
      byeCode: 'ByeCode',
      byeTtsParams: 'ByeTtsParams',
      timeout: 'Timeout',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      calledShowNumber: 'string',
      calledNumber: 'string',
      startCode: 'string',
      startTtsParams: 'string',
      menuKeyMap: { 'type': 'array', 'itemType': IvrCallRequestMenuKeyMap },
      playTimes: 'number',
      byeCode: 'string',
      byeTtsParams: 'string',
      timeout: 'number',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IvrCallResponse extends $tea.Model {
  requestId: string;
  callId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      callId: 'CallId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      callId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SingleCallByVoiceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  calledShowNumber: string;
  calledNumber: string;
  voiceCode: string;
  playTimes?: number;
  volume?: number;
  speed?: number;
  outId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      calledShowNumber: 'CalledShowNumber',
      calledNumber: 'CalledNumber',
      voiceCode: 'VoiceCode',
      playTimes: 'PlayTimes',
      volume: 'Volume',
      speed: 'Speed',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      calledShowNumber: 'string',
      calledNumber: 'string',
      voiceCode: 'string',
      playTimes: 'number',
      volume: 'number',
      speed: 'number',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SingleCallByVoiceResponse extends $tea.Model {
  requestId: string;
  callId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      callId: 'CallId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      callId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SingleCallByTtsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  calledShowNumber: string;
  calledNumber: string;
  ttsCode: string;
  ttsParam?: string;
  playTimes?: number;
  volume?: number;
  speed?: number;
  outId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      calledShowNumber: 'CalledShowNumber',
      calledNumber: 'CalledNumber',
      ttsCode: 'TtsCode',
      ttsParam: 'TtsParam',
      playTimes: 'PlayTimes',
      volume: 'Volume',
      speed: 'Speed',
      outId: 'OutId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      calledShowNumber: 'string',
      calledNumber: 'string',
      ttsCode: 'string',
      ttsParam: 'string',
      playTimes: 'number',
      volume: 'number',
      speed: 'number',
      outId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SingleCallByTtsResponse extends $tea.Model {
  requestId: string;
  callId: string;
  code: string;
  message: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      callId: 'CallId',
      code: 'Code',
      message: 'Message',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      callId: 'string',
      code: 'string',
      message: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListOutboundStrategiesResponseOutboundStrategies extends $tea.Model {
  id: number;
  gmtCreateStr: string;
  gmtModifiedStr: string;
  creatorId: number;
  creatorName: string;
  modifierId: number;
  modifierName: string;
  buId: number;
  departmentId: number;
  name: string;
  numType: number;
  outboundNum: string;
  robotType: number;
  robotId: string;
  robotName: string;
  resourceAllocation: number;
  sceneName: string;
  ruleCode: number;
  status: number;
  extAttr: string;
  process: number;
  successRate: number;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      gmtCreateStr: 'GmtCreateStr',
      gmtModifiedStr: 'GmtModifiedStr',
      creatorId: 'CreatorId',
      creatorName: 'CreatorName',
      modifierId: 'ModifierId',
      modifierName: 'ModifierName',
      buId: 'BuId',
      departmentId: 'DepartmentId',
      name: 'name',
      numType: 'NumType',
      outboundNum: 'OutboundNum',
      robotType: 'RobotType',
      robotId: 'RobotId',
      robotName: 'RobotName',
      resourceAllocation: 'ResourceAllocation',
      sceneName: 'SceneName',
      ruleCode: 'RuleCode',
      status: 'Status',
      extAttr: 'ExtAttr',
      process: 'Process',
      successRate: 'SuccessRate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      gmtCreateStr: 'string',
      gmtModifiedStr: 'string',
      creatorId: 'number',
      creatorName: 'string',
      modifierId: 'number',
      modifierName: 'string',
      buId: 'number',
      departmentId: 'number',
      name: 'string',
      numType: 'number',
      outboundNum: 'string',
      robotType: 'number',
      robotId: 'string',
      robotName: 'string',
      resourceAllocation: 'number',
      sceneName: 'string',
      ruleCode: 'number',
      status: 'number',
      extAttr: 'string',
      process: 'number',
      successRate: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class IvrCallRequestMenuKeyMap extends $tea.Model {
  key: string;
  code: string;
  ttsParams: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      code: 'Code',
      ttsParams: 'TtsParams',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      code: 'string',
      ttsParams: 'string',
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
    this.checkConfig(config);
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async listRobotTaskCallsWithOptions(request: ListRobotTaskCallsRequest, runtime: $Util.RuntimeOptions): Promise<ListRobotTaskCallsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListRobotTaskCallsResponse>(await this.doRequest("ListRobotTaskCalls", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new ListRobotTaskCallsResponse({}));
  }

  async listRobotTaskCalls(request: ListRobotTaskCallsRequest): Promise<ListRobotTaskCallsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listRobotTaskCallsWithOptions(request, runtime);
  }

  async doRtcNumberAuthWithOptions(request: DoRtcNumberAuthRequest, runtime: $Util.RuntimeOptions): Promise<DoRtcNumberAuthResponse> {
    Util.validateModel(request);
    return $tea.cast<DoRtcNumberAuthResponse>(await this.doRequest("DoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new DoRtcNumberAuthResponse({}));
  }

  async doRtcNumberAuth(request: DoRtcNumberAuthRequest): Promise<DoRtcNumberAuthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.doRtcNumberAuthWithOptions(request, runtime);
  }

  async undoRtcNumberAuthWithOptions(request: UndoRtcNumberAuthRequest, runtime: $Util.RuntimeOptions): Promise<UndoRtcNumberAuthResponse> {
    Util.validateModel(request);
    return $tea.cast<UndoRtcNumberAuthResponse>(await this.doRequest("UndoRtcNumberAuth", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new UndoRtcNumberAuthResponse({}));
  }

  async undoRtcNumberAuth(request: UndoRtcNumberAuthRequest): Promise<UndoRtcNumberAuthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.undoRtcNumberAuthWithOptions(request, runtime);
  }

  async queryRtcNumberAuthStatusWithOptions(request: QueryRtcNumberAuthStatusRequest, runtime: $Util.RuntimeOptions): Promise<QueryRtcNumberAuthStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRtcNumberAuthStatusResponse>(await this.doRequest("QueryRtcNumberAuthStatus", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRtcNumberAuthStatusResponse({}));
  }

  async queryRtcNumberAuthStatus(request: QueryRtcNumberAuthStatusRequest): Promise<QueryRtcNumberAuthStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRtcNumberAuthStatusWithOptions(request, runtime);
  }

  async listOrderedNumbersWithOptions(request: ListOrderedNumbersRequest, runtime: $Util.RuntimeOptions): Promise<ListOrderedNumbersResponse> {
    Util.validateModel(request);
    return $tea.cast<ListOrderedNumbersResponse>(await this.doRequest("ListOrderedNumbers", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new ListOrderedNumbersResponse({}));
  }

  async listOrderedNumbers(request: ListOrderedNumbersRequest): Promise<ListOrderedNumbersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listOrderedNumbersWithOptions(request, runtime);
  }

  async startMicroOutboundWithOptions(request: StartMicroOutboundRequest, runtime: $Util.RuntimeOptions): Promise<StartMicroOutboundResponse> {
    Util.validateModel(request);
    return $tea.cast<StartMicroOutboundResponse>(await this.doRequest("StartMicroOutbound", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new StartMicroOutboundResponse({}));
  }

  async startMicroOutbound(request: StartMicroOutboundRequest): Promise<StartMicroOutboundResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startMicroOutboundWithOptions(request, runtime);
  }

  async listOutboundStrategiesWithOptions(request: ListOutboundStrategiesRequest, runtime: $Util.RuntimeOptions): Promise<ListOutboundStrategiesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListOutboundStrategiesResponse>(await this.doRequest("ListOutboundStrategies", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new ListOutboundStrategiesResponse({}));
  }

  async listOutboundStrategies(request: ListOutboundStrategiesRequest): Promise<ListOutboundStrategiesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listOutboundStrategiesWithOptions(request, runtime);
  }

  async describeRecordDataWithOptions(request: DescribeRecordDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRecordDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRecordDataResponse>(await this.doRequest("DescribeRecordData", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new DescribeRecordDataResponse({}));
  }

  async describeRecordData(request: DescribeRecordDataRequest): Promise<DescribeRecordDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRecordDataWithOptions(request, runtime);
  }

  async queryVoipNumberBindInfosWithOptions(request: QueryVoipNumberBindInfosRequest, runtime: $Util.RuntimeOptions): Promise<QueryVoipNumberBindInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryVoipNumberBindInfosResponse>(await this.doRequest("QueryVoipNumberBindInfos", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryVoipNumberBindInfosResponse({}));
  }

  async queryVoipNumberBindInfos(request: QueryVoipNumberBindInfosRequest): Promise<QueryVoipNumberBindInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryVoipNumberBindInfosWithOptions(request, runtime);
  }

  async reportVoipProblemsWithOptions(request: ReportVoipProblemsRequest, runtime: $Util.RuntimeOptions): Promise<ReportVoipProblemsResponse> {
    Util.validateModel(request);
    return $tea.cast<ReportVoipProblemsResponse>(await this.doRequest("ReportVoipProblems", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new ReportVoipProblemsResponse({}));
  }

  async reportVoipProblems(request: ReportVoipProblemsRequest): Promise<ReportVoipProblemsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.reportVoipProblemsWithOptions(request, runtime);
  }

  async unbindNumberAndVoipIdWithOptions(request: UnbindNumberAndVoipIdRequest, runtime: $Util.RuntimeOptions): Promise<UnbindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindNumberAndVoipIdResponse>(await this.doRequest("UnbindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new UnbindNumberAndVoipIdResponse({}));
  }

  async unbindNumberAndVoipId(request: UnbindNumberAndVoipIdRequest): Promise<UnbindNumberAndVoipIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindNumberAndVoipIdWithOptions(request, runtime);
  }

  async bindNumberAndVoipIdWithOptions(request: BindNumberAndVoipIdRequest, runtime: $Util.RuntimeOptions): Promise<BindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    return $tea.cast<BindNumberAndVoipIdResponse>(await this.doRequest("BindNumberAndVoipId", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new BindNumberAndVoipIdResponse({}));
  }

  async bindNumberAndVoipId(request: BindNumberAndVoipIdRequest): Promise<BindNumberAndVoipIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindNumberAndVoipIdWithOptions(request, runtime);
  }

  async cancelRobotTaskWithOptions(request: CancelRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CancelRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelRobotTaskResponse>(await this.doRequest("CancelRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new CancelRobotTaskResponse({}));
  }

  async cancelRobotTask(request: CancelRobotTaskRequest): Promise<CancelRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelRobotTaskWithOptions(request, runtime);
  }

  async uploadRobotTaskCalledFileWithOptions(request: UploadRobotTaskCalledFileRequest, runtime: $Util.RuntimeOptions): Promise<UploadRobotTaskCalledFileResponse> {
    Util.validateModel(request);
    return $tea.cast<UploadRobotTaskCalledFileResponse>(await this.doRequest("UploadRobotTaskCalledFile", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new UploadRobotTaskCalledFileResponse({}));
  }

  async uploadRobotTaskCalledFile(request: UploadRobotTaskCalledFileRequest): Promise<UploadRobotTaskCalledFileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.uploadRobotTaskCalledFileWithOptions(request, runtime);
  }

  async deleteRobotTaskWithOptions(request: DeleteRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRobotTaskResponse>(await this.doRequest("DeleteRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new DeleteRobotTaskResponse({}));
  }

  async deleteRobotTask(request: DeleteRobotTaskRequest): Promise<DeleteRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRobotTaskWithOptions(request, runtime);
  }

  async stopRobotTaskWithOptions(request: StopRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<StopRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<StopRobotTaskResponse>(await this.doRequest("StopRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new StopRobotTaskResponse({}));
  }

  async stopRobotTask(request: StopRobotTaskRequest): Promise<StopRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopRobotTaskWithOptions(request, runtime);
  }

  async queryRobotTaskCallDetailWithOptions(request: QueryRobotTaskCallDetailRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskCallDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskCallDetailResponse>(await this.doRequest("QueryRobotTaskCallDetail", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotTaskCallDetailResponse({}));
  }

  async queryRobotTaskCallDetail(request: QueryRobotTaskCallDetailRequest): Promise<QueryRobotTaskCallDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskCallDetailWithOptions(request, runtime);
  }

  async queryRobotv2AllListWithOptions(request: QueryRobotv2AllListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotv2AllListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotv2AllListResponse>(await this.doRequest("QueryRobotv2AllList", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotv2AllListResponse({}));
  }

  async queryRobotv2AllList(request: QueryRobotv2AllListRequest): Promise<QueryRobotv2AllListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotv2AllListWithOptions(request, runtime);
  }

  async queryRobotTaskDetailWithOptions(request: QueryRobotTaskDetailRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskDetailResponse>(await this.doRequest("QueryRobotTaskDetail", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotTaskDetailResponse({}));
  }

  async queryRobotTaskDetail(request: QueryRobotTaskDetailRequest): Promise<QueryRobotTaskDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskDetailWithOptions(request, runtime);
  }

  async queryRobotTaskCallListWithOptions(request: QueryRobotTaskCallListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskCallListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskCallListResponse>(await this.doRequest("QueryRobotTaskCallList", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotTaskCallListResponse({}));
  }

  async queryRobotTaskCallList(request: QueryRobotTaskCallListRequest): Promise<QueryRobotTaskCallListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskCallListWithOptions(request, runtime);
  }

  async startRobotTaskWithOptions(request: StartRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<StartRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<StartRobotTaskResponse>(await this.doRequest("StartRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new StartRobotTaskResponse({}));
  }

  async startRobotTask(request: StartRobotTaskRequest): Promise<StartRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startRobotTaskWithOptions(request, runtime);
  }

  async queryRobotTaskListWithOptions(request: QueryRobotTaskListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskListResponse>(await this.doRequest("QueryRobotTaskList", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotTaskListResponse({}));
  }

  async queryRobotTaskList(request: QueryRobotTaskListRequest): Promise<QueryRobotTaskListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskListWithOptions(request, runtime);
  }

  async createRobotTaskWithOptions(request: CreateRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CreateRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRobotTaskResponse>(await this.doRequest("CreateRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new CreateRobotTaskResponse({}));
  }

  async createRobotTask(request: CreateRobotTaskRequest): Promise<CreateRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRobotTaskWithOptions(request, runtime);
  }

  async cancelOrderRobotTaskWithOptions(request: CancelOrderRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CancelOrderRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelOrderRobotTaskResponse>(await this.doRequest("CancelOrderRobotTask", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new CancelOrderRobotTaskResponse({}));
  }

  async cancelOrderRobotTask(request: CancelOrderRobotTaskRequest): Promise<CancelOrderRobotTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelOrderRobotTaskWithOptions(request, runtime);
  }

  async smartCallOperateWithOptions(request: SmartCallOperateRequest, runtime: $Util.RuntimeOptions): Promise<SmartCallOperateResponse> {
    Util.validateModel(request);
    return $tea.cast<SmartCallOperateResponse>(await this.doRequest("SmartCallOperate", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new SmartCallOperateResponse({}));
  }

  async smartCallOperate(request: SmartCallOperateRequest): Promise<SmartCallOperateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.smartCallOperateWithOptions(request, runtime);
  }

  async queryRobotInfoListWithOptions(request: QueryRobotInfoListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotInfoListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotInfoListResponse>(await this.doRequest("QueryRobotInfoList", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryRobotInfoListResponse({}));
  }

  async queryRobotInfoList(request: QueryRobotInfoListRequest): Promise<QueryRobotInfoListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotInfoListWithOptions(request, runtime);
  }

  async batchRobotSmartCallWithOptions(request: BatchRobotSmartCallRequest, runtime: $Util.RuntimeOptions): Promise<BatchRobotSmartCallResponse> {
    Util.validateModel(request);
    return $tea.cast<BatchRobotSmartCallResponse>(await this.doRequest("BatchRobotSmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new BatchRobotSmartCallResponse({}));
  }

  async batchRobotSmartCall(request: BatchRobotSmartCallRequest): Promise<BatchRobotSmartCallResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchRobotSmartCallWithOptions(request, runtime);
  }

  async queryCallDetailByTaskIdWithOptions(request: QueryCallDetailByTaskIdRequest, runtime: $Util.RuntimeOptions): Promise<QueryCallDetailByTaskIdResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCallDetailByTaskIdResponse>(await this.doRequest("QueryCallDetailByTaskId", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryCallDetailByTaskIdResponse({}));
  }

  async queryCallDetailByTaskId(request: QueryCallDetailByTaskIdRequest): Promise<QueryCallDetailByTaskIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCallDetailByTaskIdWithOptions(request, runtime);
  }

  async getRtcTokenWithOptions(request: GetRtcTokenRequest, runtime: $Util.RuntimeOptions): Promise<GetRtcTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<GetRtcTokenResponse>(await this.doRequest("GetRtcToken", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new GetRtcTokenResponse({}));
  }

  async getRtcToken(request: GetRtcTokenRequest): Promise<GetRtcTokenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getRtcTokenWithOptions(request, runtime);
  }

  async addRtcAccountWithOptions(request: AddRtcAccountRequest, runtime: $Util.RuntimeOptions): Promise<AddRtcAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<AddRtcAccountResponse>(await this.doRequest("AddRtcAccount", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new AddRtcAccountResponse({}));
  }

  async addRtcAccount(request: AddRtcAccountRequest): Promise<AddRtcAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addRtcAccountWithOptions(request, runtime);
  }

  async voipAddAccountWithOptions(request: VoipAddAccountRequest, runtime: $Util.RuntimeOptions): Promise<VoipAddAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<VoipAddAccountResponse>(await this.doRequest("VoipAddAccount", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new VoipAddAccountResponse({}));
  }

  async voipAddAccount(request: VoipAddAccountRequest): Promise<VoipAddAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.voipAddAccountWithOptions(request, runtime);
  }

  async voipGetTokenWithOptions(request: VoipGetTokenRequest, runtime: $Util.RuntimeOptions): Promise<VoipGetTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<VoipGetTokenResponse>(await this.doRequest("VoipGetToken", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new VoipGetTokenResponse({}));
  }

  async voipGetToken(request: VoipGetTokenRequest): Promise<VoipGetTokenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.voipGetTokenWithOptions(request, runtime);
  }

  async smartCallWithOptions(request: SmartCallRequest, runtime: $Util.RuntimeOptions): Promise<SmartCallResponse> {
    Util.validateModel(request);
    return $tea.cast<SmartCallResponse>(await this.doRequest("SmartCall", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new SmartCallResponse({}));
  }

  async smartCall(request: SmartCallRequest): Promise<SmartCallResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.smartCallWithOptions(request, runtime);
  }

  async queryCallDetailByCallIdWithOptions(request: QueryCallDetailByCallIdRequest, runtime: $Util.RuntimeOptions): Promise<QueryCallDetailByCallIdResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCallDetailByCallIdResponse>(await this.doRequest("QueryCallDetailByCallId", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new QueryCallDetailByCallIdResponse({}));
  }

  async queryCallDetailByCallId(request: QueryCallDetailByCallIdRequest): Promise<QueryCallDetailByCallIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCallDetailByCallIdWithOptions(request, runtime);
  }

  async cancelCallWithOptions(request: CancelCallRequest, runtime: $Util.RuntimeOptions): Promise<CancelCallResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelCallResponse>(await this.doRequest("CancelCall", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new CancelCallResponse({}));
  }

  async cancelCall(request: CancelCallRequest): Promise<CancelCallResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelCallWithOptions(request, runtime);
  }

  async clickToDialWithOptions(request: ClickToDialRequest, runtime: $Util.RuntimeOptions): Promise<ClickToDialResponse> {
    Util.validateModel(request);
    return $tea.cast<ClickToDialResponse>(await this.doRequest("ClickToDial", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new ClickToDialResponse({}));
  }

  async clickToDial(request: ClickToDialRequest): Promise<ClickToDialResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.clickToDialWithOptions(request, runtime);
  }

  async ivrCallWithOptions(request: IvrCallRequest, runtime: $Util.RuntimeOptions): Promise<IvrCallResponse> {
    Util.validateModel(request);
    return $tea.cast<IvrCallResponse>(await this.doRequest("IvrCall", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new IvrCallResponse({}));
  }

  async ivrCall(request: IvrCallRequest): Promise<IvrCallResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ivrCallWithOptions(request, runtime);
  }

  async singleCallByVoiceWithOptions(request: SingleCallByVoiceRequest, runtime: $Util.RuntimeOptions): Promise<SingleCallByVoiceResponse> {
    Util.validateModel(request);
    return $tea.cast<SingleCallByVoiceResponse>(await this.doRequest("SingleCallByVoice", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new SingleCallByVoiceResponse({}));
  }

  async singleCallByVoice(request: SingleCallByVoiceRequest): Promise<SingleCallByVoiceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.singleCallByVoiceWithOptions(request, runtime);
  }

  async singleCallByTtsWithOptions(request: SingleCallByTtsRequest, runtime: $Util.RuntimeOptions): Promise<SingleCallByTtsResponse> {
    Util.validateModel(request);
    return $tea.cast<SingleCallByTtsResponse>(await this.doRequest("SingleCallByTts", "HTTPS", "POST", "2017-05-25", "AK", null, $tea.toMap(request), runtime), new SingleCallByTtsResponse({}));
  }

  async singleCallByTts(request: SingleCallByTtsRequest): Promise<SingleCallByTtsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.singleCallByTtsWithOptions(request, runtime);
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

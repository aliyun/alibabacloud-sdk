// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import { Readable } from 'stream';
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
  id?: number;
  calledNumber?: string;
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
  taskId?: number;
  callee?: string;
  queryDate?: number;
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
  id?: number;
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
  taskId?: number;
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
  taskName?: string;
  dialogId?: number;
  corpName?: string;
  caller?: string;
  numberStatusIdent?: boolean;
  retryType?: number;
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


  async listRobotTaskCallsEx(request: ListRobotTaskCallsRequest, runtime: $Util.RuntimeOptions): Promise<ListRobotTaskCallsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListRobotTaskCallsResponse>(await this.doRequest("ListRobotTaskCalls", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new ListRobotTaskCallsResponse({}));
  }

  async listRobotTaskCalls(request: ListRobotTaskCallsRequest): Promise<ListRobotTaskCallsResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listRobotTaskCallsEx(request, runtime);
  }

  async doRtcNumberAuthEx(request: DoRtcNumberAuthRequest, runtime: $Util.RuntimeOptions): Promise<DoRtcNumberAuthResponse> {
    Util.validateModel(request);
    return $tea.cast<DoRtcNumberAuthResponse>(await this.doRequest("DoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new DoRtcNumberAuthResponse({}));
  }

  async doRtcNumberAuth(request: DoRtcNumberAuthRequest): Promise<DoRtcNumberAuthResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.doRtcNumberAuthEx(request, runtime);
  }

  async undoRtcNumberAuthEx(request: UndoRtcNumberAuthRequest, runtime: $Util.RuntimeOptions): Promise<UndoRtcNumberAuthResponse> {
    Util.validateModel(request);
    return $tea.cast<UndoRtcNumberAuthResponse>(await this.doRequest("UndoRtcNumberAuth", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new UndoRtcNumberAuthResponse({}));
  }

  async undoRtcNumberAuth(request: UndoRtcNumberAuthRequest): Promise<UndoRtcNumberAuthResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.undoRtcNumberAuthEx(request, runtime);
  }

  async queryRtcNumberAuthStatusEx(request: QueryRtcNumberAuthStatusRequest, runtime: $Util.RuntimeOptions): Promise<QueryRtcNumberAuthStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRtcNumberAuthStatusResponse>(await this.doRequest("QueryRtcNumberAuthStatus", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRtcNumberAuthStatusResponse({}));
  }

  async queryRtcNumberAuthStatus(request: QueryRtcNumberAuthStatusRequest): Promise<QueryRtcNumberAuthStatusResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRtcNumberAuthStatusEx(request, runtime);
  }

  async listOrderedNumbersEx(request: ListOrderedNumbersRequest, runtime: $Util.RuntimeOptions): Promise<ListOrderedNumbersResponse> {
    Util.validateModel(request);
    return $tea.cast<ListOrderedNumbersResponse>(await this.doRequest("ListOrderedNumbers", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new ListOrderedNumbersResponse({}));
  }

  async listOrderedNumbers(request: ListOrderedNumbersRequest): Promise<ListOrderedNumbersResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listOrderedNumbersEx(request, runtime);
  }

  async startMicroOutboundEx(request: StartMicroOutboundRequest, runtime: $Util.RuntimeOptions): Promise<StartMicroOutboundResponse> {
    Util.validateModel(request);
    return $tea.cast<StartMicroOutboundResponse>(await this.doRequest("StartMicroOutbound", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new StartMicroOutboundResponse({}));
  }

  async startMicroOutbound(request: StartMicroOutboundRequest): Promise<StartMicroOutboundResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startMicroOutboundEx(request, runtime);
  }

  async listOutboundStrategiesEx(request: ListOutboundStrategiesRequest, runtime: $Util.RuntimeOptions): Promise<ListOutboundStrategiesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListOutboundStrategiesResponse>(await this.doRequest("ListOutboundStrategies", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new ListOutboundStrategiesResponse({}));
  }

  async listOutboundStrategies(request: ListOutboundStrategiesRequest): Promise<ListOutboundStrategiesResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listOutboundStrategiesEx(request, runtime);
  }

  async describeRecordDataEx(request: DescribeRecordDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRecordDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRecordDataResponse>(await this.doRequest("DescribeRecordData", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new DescribeRecordDataResponse({}));
  }

  async describeRecordData(request: DescribeRecordDataRequest): Promise<DescribeRecordDataResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRecordDataEx(request, runtime);
  }

  async queryVoipNumberBindInfosEx(request: QueryVoipNumberBindInfosRequest, runtime: $Util.RuntimeOptions): Promise<QueryVoipNumberBindInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryVoipNumberBindInfosResponse>(await this.doRequest("QueryVoipNumberBindInfos", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryVoipNumberBindInfosResponse({}));
  }

  async queryVoipNumberBindInfos(request: QueryVoipNumberBindInfosRequest): Promise<QueryVoipNumberBindInfosResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryVoipNumberBindInfosEx(request, runtime);
  }

  async reportVoipProblemsEx(request: ReportVoipProblemsRequest, runtime: $Util.RuntimeOptions): Promise<ReportVoipProblemsResponse> {
    Util.validateModel(request);
    return $tea.cast<ReportVoipProblemsResponse>(await this.doRequest("ReportVoipProblems", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new ReportVoipProblemsResponse({}));
  }

  async reportVoipProblems(request: ReportVoipProblemsRequest): Promise<ReportVoipProblemsResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.reportVoipProblemsEx(request, runtime);
  }

  async unbindNumberAndVoipIdEx(request: UnbindNumberAndVoipIdRequest, runtime: $Util.RuntimeOptions): Promise<UnbindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindNumberAndVoipIdResponse>(await this.doRequest("UnbindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new UnbindNumberAndVoipIdResponse({}));
  }

  async unbindNumberAndVoipId(request: UnbindNumberAndVoipIdRequest): Promise<UnbindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindNumberAndVoipIdEx(request, runtime);
  }

  async bindNumberAndVoipIdEx(request: BindNumberAndVoipIdRequest, runtime: $Util.RuntimeOptions): Promise<BindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    return $tea.cast<BindNumberAndVoipIdResponse>(await this.doRequest("BindNumberAndVoipId", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new BindNumberAndVoipIdResponse({}));
  }

  async bindNumberAndVoipId(request: BindNumberAndVoipIdRequest): Promise<BindNumberAndVoipIdResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindNumberAndVoipIdEx(request, runtime);
  }

  async cancelRobotTaskEx(request: CancelRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CancelRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelRobotTaskResponse>(await this.doRequest("CancelRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new CancelRobotTaskResponse({}));
  }

  async cancelRobotTask(request: CancelRobotTaskRequest): Promise<CancelRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelRobotTaskEx(request, runtime);
  }

  async uploadRobotTaskCalledFileEx(request: UploadRobotTaskCalledFileRequest, runtime: $Util.RuntimeOptions): Promise<UploadRobotTaskCalledFileResponse> {
    Util.validateModel(request);
    return $tea.cast<UploadRobotTaskCalledFileResponse>(await this.doRequest("UploadRobotTaskCalledFile", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new UploadRobotTaskCalledFileResponse({}));
  }

  async uploadRobotTaskCalledFile(request: UploadRobotTaskCalledFileRequest): Promise<UploadRobotTaskCalledFileResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.uploadRobotTaskCalledFileEx(request, runtime);
  }

  async deleteRobotTaskEx(request: DeleteRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRobotTaskResponse>(await this.doRequest("DeleteRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new DeleteRobotTaskResponse({}));
  }

  async deleteRobotTask(request: DeleteRobotTaskRequest): Promise<DeleteRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRobotTaskEx(request, runtime);
  }

  async stopRobotTaskEx(request: StopRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<StopRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<StopRobotTaskResponse>(await this.doRequest("StopRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new StopRobotTaskResponse({}));
  }

  async stopRobotTask(request: StopRobotTaskRequest): Promise<StopRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopRobotTaskEx(request, runtime);
  }

  async queryRobotTaskCallDetailEx(request: QueryRobotTaskCallDetailRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskCallDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskCallDetailResponse>(await this.doRequest("QueryRobotTaskCallDetail", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotTaskCallDetailResponse({}));
  }

  async queryRobotTaskCallDetail(request: QueryRobotTaskCallDetailRequest): Promise<QueryRobotTaskCallDetailResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskCallDetailEx(request, runtime);
  }

  async queryRobotv2AllListEx(request: QueryRobotv2AllListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotv2AllListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotv2AllListResponse>(await this.doRequest("QueryRobotv2AllList", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotv2AllListResponse({}));
  }

  async queryRobotv2AllList(request: QueryRobotv2AllListRequest): Promise<QueryRobotv2AllListResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotv2AllListEx(request, runtime);
  }

  async queryRobotTaskDetailEx(request: QueryRobotTaskDetailRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskDetailResponse>(await this.doRequest("QueryRobotTaskDetail", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotTaskDetailResponse({}));
  }

  async queryRobotTaskDetail(request: QueryRobotTaskDetailRequest): Promise<QueryRobotTaskDetailResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskDetailEx(request, runtime);
  }

  async queryRobotTaskCallListEx(request: QueryRobotTaskCallListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskCallListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskCallListResponse>(await this.doRequest("QueryRobotTaskCallList", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotTaskCallListResponse({}));
  }

  async queryRobotTaskCallList(request: QueryRobotTaskCallListRequest): Promise<QueryRobotTaskCallListResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskCallListEx(request, runtime);
  }

  async startRobotTaskEx(request: StartRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<StartRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<StartRobotTaskResponse>(await this.doRequest("StartRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new StartRobotTaskResponse({}));
  }

  async startRobotTask(request: StartRobotTaskRequest): Promise<StartRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startRobotTaskEx(request, runtime);
  }

  async queryRobotTaskListEx(request: QueryRobotTaskListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotTaskListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotTaskListResponse>(await this.doRequest("QueryRobotTaskList", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotTaskListResponse({}));
  }

  async queryRobotTaskList(request: QueryRobotTaskListRequest): Promise<QueryRobotTaskListResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotTaskListEx(request, runtime);
  }

  async createRobotTaskEx(request: CreateRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CreateRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRobotTaskResponse>(await this.doRequest("CreateRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new CreateRobotTaskResponse({}));
  }

  async createRobotTask(request: CreateRobotTaskRequest): Promise<CreateRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRobotTaskEx(request, runtime);
  }

  async cancelOrderRobotTaskEx(request: CancelOrderRobotTaskRequest, runtime: $Util.RuntimeOptions): Promise<CancelOrderRobotTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelOrderRobotTaskResponse>(await this.doRequest("CancelOrderRobotTask", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new CancelOrderRobotTaskResponse({}));
  }

  async cancelOrderRobotTask(request: CancelOrderRobotTaskRequest): Promise<CancelOrderRobotTaskResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelOrderRobotTaskEx(request, runtime);
  }

  async smartCallOperateEx(request: SmartCallOperateRequest, runtime: $Util.RuntimeOptions): Promise<SmartCallOperateResponse> {
    Util.validateModel(request);
    return $tea.cast<SmartCallOperateResponse>(await this.doRequest("SmartCallOperate", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new SmartCallOperateResponse({}));
  }

  async smartCallOperate(request: SmartCallOperateRequest): Promise<SmartCallOperateResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.smartCallOperateEx(request, runtime);
  }

  async queryRobotInfoListEx(request: QueryRobotInfoListRequest, runtime: $Util.RuntimeOptions): Promise<QueryRobotInfoListResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryRobotInfoListResponse>(await this.doRequest("QueryRobotInfoList", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryRobotInfoListResponse({}));
  }

  async queryRobotInfoList(request: QueryRobotInfoListRequest): Promise<QueryRobotInfoListResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryRobotInfoListEx(request, runtime);
  }

  async batchRobotSmartCallEx(request: BatchRobotSmartCallRequest, runtime: $Util.RuntimeOptions): Promise<BatchRobotSmartCallResponse> {
    Util.validateModel(request);
    return $tea.cast<BatchRobotSmartCallResponse>(await this.doRequest("BatchRobotSmartCall", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new BatchRobotSmartCallResponse({}));
  }

  async batchRobotSmartCall(request: BatchRobotSmartCallRequest): Promise<BatchRobotSmartCallResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchRobotSmartCallEx(request, runtime);
  }

  async queryCallDetailByTaskIdEx(request: QueryCallDetailByTaskIdRequest, runtime: $Util.RuntimeOptions): Promise<QueryCallDetailByTaskIdResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCallDetailByTaskIdResponse>(await this.doRequest("QueryCallDetailByTaskId", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryCallDetailByTaskIdResponse({}));
  }

  async queryCallDetailByTaskId(request: QueryCallDetailByTaskIdRequest): Promise<QueryCallDetailByTaskIdResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCallDetailByTaskIdEx(request, runtime);
  }

  async getRtcTokenEx(request: GetRtcTokenRequest, runtime: $Util.RuntimeOptions): Promise<GetRtcTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<GetRtcTokenResponse>(await this.doRequest("GetRtcToken", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new GetRtcTokenResponse({}));
  }

  async getRtcToken(request: GetRtcTokenRequest): Promise<GetRtcTokenResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getRtcTokenEx(request, runtime);
  }

  async addRtcAccountEx(request: AddRtcAccountRequest, runtime: $Util.RuntimeOptions): Promise<AddRtcAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<AddRtcAccountResponse>(await this.doRequest("AddRtcAccount", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new AddRtcAccountResponse({}));
  }

  async addRtcAccount(request: AddRtcAccountRequest): Promise<AddRtcAccountResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addRtcAccountEx(request, runtime);
  }

  async voipAddAccountEx(request: VoipAddAccountRequest, runtime: $Util.RuntimeOptions): Promise<VoipAddAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<VoipAddAccountResponse>(await this.doRequest("VoipAddAccount", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new VoipAddAccountResponse({}));
  }

  async voipAddAccount(request: VoipAddAccountRequest): Promise<VoipAddAccountResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.voipAddAccountEx(request, runtime);
  }

  async voipGetTokenEx(request: VoipGetTokenRequest, runtime: $Util.RuntimeOptions): Promise<VoipGetTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<VoipGetTokenResponse>(await this.doRequest("VoipGetToken", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new VoipGetTokenResponse({}));
  }

  async voipGetToken(request: VoipGetTokenRequest): Promise<VoipGetTokenResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.voipGetTokenEx(request, runtime);
  }

  async smartCallEx(request: SmartCallRequest, runtime: $Util.RuntimeOptions): Promise<SmartCallResponse> {
    Util.validateModel(request);
    return $tea.cast<SmartCallResponse>(await this.doRequest("SmartCall", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new SmartCallResponse({}));
  }

  async smartCall(request: SmartCallRequest): Promise<SmartCallResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.smartCallEx(request, runtime);
  }

  async queryCallDetailByCallIdEx(request: QueryCallDetailByCallIdRequest, runtime: $Util.RuntimeOptions): Promise<QueryCallDetailByCallIdResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryCallDetailByCallIdResponse>(await this.doRequest("QueryCallDetailByCallId", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new QueryCallDetailByCallIdResponse({}));
  }

  async queryCallDetailByCallId(request: QueryCallDetailByCallIdRequest): Promise<QueryCallDetailByCallIdResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryCallDetailByCallIdEx(request, runtime);
  }

  async cancelCallEx(request: CancelCallRequest, runtime: $Util.RuntimeOptions): Promise<CancelCallResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelCallResponse>(await this.doRequest("CancelCall", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new CancelCallResponse({}));
  }

  async cancelCall(request: CancelCallRequest): Promise<CancelCallResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelCallEx(request, runtime);
  }

  async clickToDialEx(request: ClickToDialRequest, runtime: $Util.RuntimeOptions): Promise<ClickToDialResponse> {
    Util.validateModel(request);
    return $tea.cast<ClickToDialResponse>(await this.doRequest("ClickToDial", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new ClickToDialResponse({}));
  }

  async clickToDial(request: ClickToDialRequest): Promise<ClickToDialResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.clickToDialEx(request, runtime);
  }

  async ivrCallEx(request: IvrCallRequest, runtime: $Util.RuntimeOptions): Promise<IvrCallResponse> {
    Util.validateModel(request);
    return $tea.cast<IvrCallResponse>(await this.doRequest("IvrCall", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new IvrCallResponse({}));
  }

  async ivrCall(request: IvrCallRequest): Promise<IvrCallResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.ivrCallEx(request, runtime);
  }

  async singleCallByVoiceEx(request: SingleCallByVoiceRequest, runtime: $Util.RuntimeOptions): Promise<SingleCallByVoiceResponse> {
    Util.validateModel(request);
    return $tea.cast<SingleCallByVoiceResponse>(await this.doRequest("SingleCallByVoice", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new SingleCallByVoiceResponse({}));
  }

  async singleCallByVoice(request: SingleCallByVoiceRequest): Promise<SingleCallByVoiceResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.singleCallByVoiceEx(request, runtime);
  }

  async singleCallByTtsEx(request: SingleCallByTtsRequest, runtime: $Util.RuntimeOptions): Promise<SingleCallByTtsResponse> {
    Util.validateModel(request);
    return $tea.cast<SingleCallByTtsResponse>(await this.doRequest("SingleCallByTts", "HTTPS", "GET", "2017-05-25", "AK", $tea.toMap(request), null, runtime), new SingleCallByTtsResponse({}));
  }

  async singleCallByTts(request: SingleCallByTtsRequest): Promise<SingleCallByTtsResponse> {
    Util.validateModel(request);
    let runtime = new $Util.RuntimeOptions({ });
    return await this.singleCallByTtsEx(request, runtime);
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

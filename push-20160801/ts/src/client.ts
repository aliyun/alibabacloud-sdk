// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class QueryPushRecordsRequest extends $tea.Model {
  appKey: number;
  startTime: string;
  endTime: string;
  pushType?: string;
  target?: string;
  source?: string;
  keyword?: string;
  nextToken?: string;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pushType: 'PushType',
      target: 'Target',
      source: 'Source',
      keyword: 'Keyword',
      nextToken: 'NextToken',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      startTime: 'string',
      endTime: 'string',
      pushType: 'string',
      target: 'string',
      source: 'string',
      keyword: 'string',
      nextToken: 'string',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushRecordsResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  pageSize: number;
  pushInfos: QueryPushRecordsResponsePushInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      pageSize: 'PageSize',
      pushInfos: 'PushInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      pageSize: 'number',
      pushInfos: QueryPushRecordsResponsePushInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinuouslyPushRequest extends $tea.Model {
  appKey: number;
  messageId: string;
  target: string;
  targetValue: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      messageId: 'MessageId',
      target: 'Target',
      targetValue: 'TargetValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      messageId: 'string',
      target: 'string',
      targetValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ContinuouslyPushResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompleteContinuouslyPushRequest extends $tea.Model {
  appKey: number;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CompleteContinuouslyPushResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MassPushRequest extends $tea.Model {
  appKey: number;
  pushTask: MassPushRequestPushTask[];
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      pushTask: 'PushTask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      pushTask: { 'type': 'array', 'itemType': MassPushRequestPushTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MassPushResponse extends $tea.Model {
  requestId: string;
  messageIds: MassPushResponseMessageIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageIds: 'MessageIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageIds: MassPushResponseMessageIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAliasRequest extends $tea.Model {
  appKey: number;
  alias: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      alias: 'Alias',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      alias: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAliasResponse extends $tea.Model {
  requestId: string;
  deviceIds: QueryDevicesByAliasResponseDeviceIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deviceIds: 'DeviceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deviceIds: QueryDevicesByAliasResponseDeviceIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAccountRequest extends $tea.Model {
  appKey: number;
  account: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      account: 'Account',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      account: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAccountResponse extends $tea.Model {
  requestId: string;
  deviceIds: QueryDevicesByAccountResponseDeviceIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deviceIds: 'DeviceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deviceIds: QueryDevicesByAccountResponseDeviceIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindPhoneRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindPhoneResponse extends $tea.Model {
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

export class BindPhoneRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  phoneNumber: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
      phoneNumber: 'PhoneNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
      phoneNumber: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindPhoneResponse extends $tea.Model {
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

export class RemoveTagRequest extends $tea.Model {
  appKey: number;
  tagName: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      tagName: 'TagName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      tagName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagResponse extends $tea.Model {
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

export class CheckDevicesRequest extends $tea.Model {
  appKey: number;
  deviceIds: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceIds: 'DeviceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDevicesResponse extends $tea.Model {
  requestId: string;
  deviceCheckInfos: CheckDevicesResponseDeviceCheckInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deviceCheckInfos: 'DeviceCheckInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deviceCheckInfos: CheckDevicesResponseDeviceCheckInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDeviceRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDeviceResponse extends $tea.Model {
  requestId: string;
  available: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      available: 'Available',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      available: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindTagRequest extends $tea.Model {
  appKey: number;
  clientKey: string;
  keyType: string;
  tagName: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      clientKey: 'ClientKey',
      keyType: 'KeyType',
      tagName: 'TagName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      clientKey: 'string',
      keyType: 'string',
      tagName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindTagResponse extends $tea.Model {
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

export class UnbindAliasRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  aliasName?: string;
  unbindAll?: boolean;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
      aliasName: 'AliasName',
      unbindAll: 'UnbindAll',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
      aliasName: 'string',
      unbindAll: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindAliasResponse extends $tea.Model {
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

export class QueryUniqueDeviceStatRequest extends $tea.Model {
  appKey: number;
  startTime: string;
  endTime: string;
  granularity: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      startTime: 'StartTime',
      endTime: 'EndTime',
      granularity: 'Granularity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      startTime: 'string',
      endTime: 'string',
      granularity: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryUniqueDeviceStatResponse extends $tea.Model {
  requestId: string;
  appDeviceStats: QueryUniqueDeviceStatResponseAppDeviceStats;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appDeviceStats: 'AppDeviceStats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appDeviceStats: QueryUniqueDeviceStatResponseAppDeviceStats,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryTagsRequest extends $tea.Model {
  appKey: number;
  clientKey: string;
  keyType: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      clientKey: 'ClientKey',
      keyType: 'KeyType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      clientKey: 'string',
      keyType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryTagsResponse extends $tea.Model {
  requestId: string;
  tagInfos: QueryTagsResponseTagInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      tagInfos: 'TagInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      tagInfos: QueryTagsResponseTagInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByMsgRequest extends $tea.Model {
  appKey: number;
  messageId: number;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      messageId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByMsgResponse extends $tea.Model {
  requestId: string;
  pushStats: QueryPushStatByMsgResponsePushStats;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pushStats: 'PushStats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pushStats: QueryPushStatByMsgResponsePushStats,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByAppRequest extends $tea.Model {
  appKey: number;
  startTime: string;
  endTime: string;
  granularity: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      startTime: 'StartTime',
      endTime: 'EndTime',
      granularity: 'Granularity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      startTime: 'string',
      endTime: 'string',
      granularity: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByAppResponse extends $tea.Model {
  requestId: string;
  appPushStats: QueryPushStatByAppResponseAppPushStats;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appPushStats: 'AppPushStats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appPushStats: QueryPushStatByAppResponseAppPushStats,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceStatRequest extends $tea.Model {
  appKey: number;
  startTime: string;
  endTime: string;
  deviceType: string;
  queryType: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      startTime: 'StartTime',
      endTime: 'EndTime',
      deviceType: 'DeviceType',
      queryType: 'QueryType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      startTime: 'string',
      endTime: 'string',
      deviceType: 'string',
      queryType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceStatResponse extends $tea.Model {
  requestId: string;
  appDeviceStats: QueryDeviceStatResponseAppDeviceStats;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appDeviceStats: 'AppDeviceStats',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appDeviceStats: QueryDeviceStatResponseAppDeviceStats,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceInfoRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceInfoResponse extends $tea.Model {
  requestId: string;
  deviceInfo: QueryDeviceInfoResponseDeviceInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deviceInfo: 'DeviceInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deviceInfo: QueryDeviceInfoResponseDeviceInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAliasesRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAliasesResponse extends $tea.Model {
  requestId: string;
  aliasInfos: QueryAliasesResponseAliasInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      aliasInfos: 'AliasInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      aliasInfos: QueryAliasesResponseAliasInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushNoticeToiOSRequest extends $tea.Model {
  appKey: number;
  target: string;
  targetValue: string;
  apnsEnv: string;
  title?: string;
  body: string;
  jobKey?: string;
  extParameters?: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      target: 'Target',
      targetValue: 'TargetValue',
      apnsEnv: 'ApnsEnv',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
      extParameters: 'ExtParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      target: 'string',
      targetValue: 'string',
      apnsEnv: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
      extParameters: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushNoticeToiOSResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushNoticeToAndroidRequest extends $tea.Model {
  appKey: number;
  target: string;
  targetValue: string;
  title: string;
  body: string;
  jobKey?: string;
  extParameters?: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      target: 'Target',
      targetValue: 'TargetValue',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
      extParameters: 'ExtParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      target: 'string',
      targetValue: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
      extParameters: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushNoticeToAndroidResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushMessageToiOSRequest extends $tea.Model {
  appKey: number;
  target: string;
  targetValue: string;
  title: string;
  body: string;
  jobKey?: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      target: 'Target',
      targetValue: 'TargetValue',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      target: 'string',
      targetValue: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushMessageToiOSResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushMessageToAndroidRequest extends $tea.Model {
  appKey: number;
  target: string;
  targetValue: string;
  title: string;
  body: string;
  jobKey?: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      target: 'Target',
      targetValue: 'TargetValue',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      target: 'string',
      targetValue: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushMessageToAndroidResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushRequest extends $tea.Model {
  appKey: number;
  pushType: string;
  deviceType: string;
  target: string;
  targetValue: string;
  title?: string;
  body: string;
  jobKey?: string;
  sendSpeed?: number;
  storeOffline?: boolean;
  pushTime?: string;
  expireTime?: string;
  iOSApnsEnv?: string;
  iOSRemind?: boolean;
  iOSRemindBody?: string;
  iOSBadge?: number;
  iOSBadgeAutoIncrement?: boolean;
  iOSSilentNotification?: boolean;
  iOSMusic?: string;
  iOSSubtitle?: string;
  iOSNotificationCategory?: string;
  iOSMutableContent?: boolean;
  iOSExtParameters?: string;
  androidNotifyType?: string;
  androidOpenType?: string;
  androidActivity?: string;
  androidMusic?: string;
  androidOpenUrl?: string;
  androidXiaoMiActivity?: string;
  androidXiaoMiNotifyTitle?: string;
  androidXiaoMiNotifyBody?: string;
  androidPopupActivity?: string;
  androidPopupTitle?: string;
  androidPopupBody?: string;
  androidNotificationBarType?: number;
  androidNotificationBarPriority?: number;
  androidExtParameters?: string;
  androidRemind?: boolean;
  androidNotificationChannel?: string;
  androidNotificationXiaomiChannel?: string;
  smsTemplateName?: string;
  smsSignName?: string;
  smsParams?: string;
  smsDelaySecs?: number;
  smsSendPolicy?: number;
  androidNotificationVivoChannel?: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      pushType: 'PushType',
      deviceType: 'DeviceType',
      target: 'Target',
      targetValue: 'TargetValue',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
      sendSpeed: 'SendSpeed',
      storeOffline: 'StoreOffline',
      pushTime: 'PushTime',
      expireTime: 'ExpireTime',
      iOSApnsEnv: 'iOSApnsEnv',
      iOSRemind: 'iOSRemind',
      iOSRemindBody: 'iOSRemindBody',
      iOSBadge: 'iOSBadge',
      iOSBadgeAutoIncrement: 'iOSBadgeAutoIncrement',
      iOSSilentNotification: 'iOSSilentNotification',
      iOSMusic: 'iOSMusic',
      iOSSubtitle: 'iOSSubtitle',
      iOSNotificationCategory: 'iOSNotificationCategory',
      iOSMutableContent: 'iOSMutableContent',
      iOSExtParameters: 'iOSExtParameters',
      androidNotifyType: 'AndroidNotifyType',
      androidOpenType: 'AndroidOpenType',
      androidActivity: 'AndroidActivity',
      androidMusic: 'AndroidMusic',
      androidOpenUrl: 'AndroidOpenUrl',
      androidXiaoMiActivity: 'AndroidXiaoMiActivity',
      androidXiaoMiNotifyTitle: 'AndroidXiaoMiNotifyTitle',
      androidXiaoMiNotifyBody: 'AndroidXiaoMiNotifyBody',
      androidPopupActivity: 'AndroidPopupActivity',
      androidPopupTitle: 'AndroidPopupTitle',
      androidPopupBody: 'AndroidPopupBody',
      androidNotificationBarType: 'AndroidNotificationBarType',
      androidNotificationBarPriority: 'AndroidNotificationBarPriority',
      androidExtParameters: 'AndroidExtParameters',
      androidRemind: 'AndroidRemind',
      androidNotificationChannel: 'AndroidNotificationChannel',
      androidNotificationXiaomiChannel: 'AndroidNotificationXiaomiChannel',
      smsTemplateName: 'SmsTemplateName',
      smsSignName: 'SmsSignName',
      smsParams: 'SmsParams',
      smsDelaySecs: 'SmsDelaySecs',
      smsSendPolicy: 'SmsSendPolicy',
      androidNotificationVivoChannel: 'AndroidNotificationVivoChannel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      pushType: 'string',
      deviceType: 'string',
      target: 'string',
      targetValue: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
      sendSpeed: 'number',
      storeOffline: 'boolean',
      pushTime: 'string',
      expireTime: 'string',
      iOSApnsEnv: 'string',
      iOSRemind: 'boolean',
      iOSRemindBody: 'string',
      iOSBadge: 'number',
      iOSBadgeAutoIncrement: 'boolean',
      iOSSilentNotification: 'boolean',
      iOSMusic: 'string',
      iOSSubtitle: 'string',
      iOSNotificationCategory: 'string',
      iOSMutableContent: 'boolean',
      iOSExtParameters: 'string',
      androidNotifyType: 'string',
      androidOpenType: 'string',
      androidActivity: 'string',
      androidMusic: 'string',
      androidOpenUrl: 'string',
      androidXiaoMiActivity: 'string',
      androidXiaoMiNotifyTitle: 'string',
      androidXiaoMiNotifyBody: 'string',
      androidPopupActivity: 'string',
      androidPopupTitle: 'string',
      androidPopupBody: 'string',
      androidNotificationBarType: 'number',
      androidNotificationBarPriority: 'number',
      androidExtParameters: 'string',
      androidRemind: 'boolean',
      androidNotificationChannel: 'string',
      androidNotificationXiaomiChannel: 'string',
      smsTemplateName: 'string',
      smsSignName: 'string',
      smsParams: 'string',
      smsDelaySecs: 'number',
      smsSendPolicy: 'number',
      androidNotificationVivoChannel: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PushResponse extends $tea.Model {
  requestId: string;
  messageId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagsRequest extends $tea.Model {
  appKey: number;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagsResponse extends $tea.Model {
  requestId: string;
  tagInfos: ListTagsResponseTagInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      tagInfos: 'TagInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      tagInfos: ListTagsResponseTagInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSummaryAppsRequest extends $tea.Model {
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

export class ListSummaryAppsResponse extends $tea.Model {
  requestId: string;
  summaryAppInfos: ListSummaryAppsResponseSummaryAppInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      summaryAppInfos: 'SummaryAppInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      summaryAppInfos: ListSummaryAppsResponseSummaryAppInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindTagRequest extends $tea.Model {
  appKey: number;
  clientKey: string;
  keyType: string;
  tagName: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      clientKey: 'ClientKey',
      keyType: 'KeyType',
      tagName: 'TagName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      clientKey: 'string',
      keyType: 'string',
      tagName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindTagResponse extends $tea.Model {
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

export class BindAliasRequest extends $tea.Model {
  appKey: number;
  deviceId: string;
  aliasName: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      deviceId: 'DeviceId',
      aliasName: 'AliasName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      deviceId: 'string',
      aliasName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindAliasResponse extends $tea.Model {
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

export class CancelPushRequest extends $tea.Model {
  appKey: number;
  messageId: number;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      messageId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelPushResponse extends $tea.Model {
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

export class QueryPushRecordsResponsePushInfosPushInfo extends $tea.Model {
  appKey: number;
  messageId: string;
  pushType: string;
  deviceType: string;
  target: string;
  source: string;
  pushTime: string;
  title: string;
  body: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      appKey: 'AppKey',
      messageId: 'MessageId',
      pushType: 'PushType',
      deviceType: 'DeviceType',
      target: 'Target',
      source: 'Source',
      pushTime: 'PushTime',
      title: 'Title',
      body: 'Body',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appKey: 'number',
      messageId: 'string',
      pushType: 'string',
      deviceType: 'string',
      target: 'string',
      source: 'string',
      pushTime: 'string',
      title: 'string',
      body: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushRecordsResponsePushInfos extends $tea.Model {
  pushInfo: QueryPushRecordsResponsePushInfosPushInfo[];
  static names(): { [key: string]: string } {
    return {
      pushInfo: 'PushInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pushInfo: { 'type': 'array', 'itemType': QueryPushRecordsResponsePushInfosPushInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MassPushRequestPushTask extends $tea.Model {
  pushType: string;
  deviceType: string;
  target: string;
  targetValue: string;
  title?: string;
  body: string;
  jobKey?: string;
  sendSpeed?: number;
  storeOffline?: boolean;
  pushTime?: string;
  expireTime?: string;
  iOSApnsEnv?: string;
  iOSRemind?: boolean;
  iOSRemindBody?: string;
  iOSBadge?: number;
  iOSBadgeAutoIncrement?: boolean;
  iOSSilentNotification?: boolean;
  iOSMusic?: string;
  iOSSubtitle?: string;
  iOSNotificationCategory?: string;
  iOSMutableContent?: boolean;
  iOSExtParameters?: string;
  androidNotifyType?: string;
  androidOpenType?: string;
  androidActivity?: string;
  androidMusic?: string;
  androidOpenUrl?: string;
  androidXiaoMiActivity?: string;
  androidXiaoMiNotifyTitle?: string;
  androidXiaoMiNotifyBody?: string;
  androidPopupActivity?: string;
  androidPopupTitle?: string;
  androidPopupBody?: string;
  androidNotificationBarType?: number;
  androidNotificationBarPriority?: number;
  androidExtParameters?: string;
  androidRemind?: boolean;
  androidNotificationChannel?: string;
  androidNotificationXiaomiChannel?: string;
  androidNotificationVivoChannel?: string;
  static names(): { [key: string]: string } {
    return {
      pushType: 'PushType',
      deviceType: 'DeviceType',
      target: 'Target',
      targetValue: 'TargetValue',
      title: 'Title',
      body: 'Body',
      jobKey: 'JobKey',
      sendSpeed: 'SendSpeed',
      storeOffline: 'StoreOffline',
      pushTime: 'PushTime',
      expireTime: 'ExpireTime',
      iOSApnsEnv: 'iOSApnsEnv',
      iOSRemind: 'iOSRemind',
      iOSRemindBody: 'iOSRemindBody',
      iOSBadge: 'iOSBadge',
      iOSBadgeAutoIncrement: 'iOSBadgeAutoIncrement',
      iOSSilentNotification: 'iOSSilentNotification',
      iOSMusic: 'iOSMusic',
      iOSSubtitle: 'iOSSubtitle',
      iOSNotificationCategory: 'iOSNotificationCategory',
      iOSMutableContent: 'iOSMutableContent',
      iOSExtParameters: 'iOSExtParameters',
      androidNotifyType: 'AndroidNotifyType',
      androidOpenType: 'AndroidOpenType',
      androidActivity: 'AndroidActivity',
      androidMusic: 'AndroidMusic',
      androidOpenUrl: 'AndroidOpenUrl',
      androidXiaoMiActivity: 'AndroidXiaoMiActivity',
      androidXiaoMiNotifyTitle: 'AndroidXiaoMiNotifyTitle',
      androidXiaoMiNotifyBody: 'AndroidXiaoMiNotifyBody',
      androidPopupActivity: 'AndroidPopupActivity',
      androidPopupTitle: 'AndroidPopupTitle',
      androidPopupBody: 'AndroidPopupBody',
      androidNotificationBarType: 'AndroidNotificationBarType',
      androidNotificationBarPriority: 'AndroidNotificationBarPriority',
      androidExtParameters: 'AndroidExtParameters',
      androidRemind: 'AndroidRemind',
      androidNotificationChannel: 'AndroidNotificationChannel',
      androidNotificationXiaomiChannel: 'AndroidNotificationXiaomiChannel',
      androidNotificationVivoChannel: 'AndroidNotificationVivoChannel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pushType: 'string',
      deviceType: 'string',
      target: 'string',
      targetValue: 'string',
      title: 'string',
      body: 'string',
      jobKey: 'string',
      sendSpeed: 'number',
      storeOffline: 'boolean',
      pushTime: 'string',
      expireTime: 'string',
      iOSApnsEnv: 'string',
      iOSRemind: 'boolean',
      iOSRemindBody: 'string',
      iOSBadge: 'number',
      iOSBadgeAutoIncrement: 'boolean',
      iOSSilentNotification: 'boolean',
      iOSMusic: 'string',
      iOSSubtitle: 'string',
      iOSNotificationCategory: 'string',
      iOSMutableContent: 'boolean',
      iOSExtParameters: 'string',
      androidNotifyType: 'string',
      androidOpenType: 'string',
      androidActivity: 'string',
      androidMusic: 'string',
      androidOpenUrl: 'string',
      androidXiaoMiActivity: 'string',
      androidXiaoMiNotifyTitle: 'string',
      androidXiaoMiNotifyBody: 'string',
      androidPopupActivity: 'string',
      androidPopupTitle: 'string',
      androidPopupBody: 'string',
      androidNotificationBarType: 'number',
      androidNotificationBarPriority: 'number',
      androidExtParameters: 'string',
      androidRemind: 'boolean',
      androidNotificationChannel: 'string',
      androidNotificationXiaomiChannel: 'string',
      androidNotificationVivoChannel: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MassPushResponseMessageIds extends $tea.Model {
  messageId: string[];
  static names(): { [key: string]: string } {
    return {
      messageId: 'MessageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      messageId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAliasResponseDeviceIds extends $tea.Model {
  deviceId: string[];
  static names(): { [key: string]: string } {
    return {
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deviceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDevicesByAccountResponseDeviceIds extends $tea.Model {
  deviceId: string[];
  static names(): { [key: string]: string } {
    return {
      deviceId: 'DeviceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deviceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDevicesResponseDeviceCheckInfosDeviceCheckInfo extends $tea.Model {
  deviceId: string;
  available: boolean;
  static names(): { [key: string]: string } {
    return {
      deviceId: 'DeviceId',
      available: 'Available',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deviceId: 'string',
      available: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDevicesResponseDeviceCheckInfos extends $tea.Model {
  deviceCheckInfo: CheckDevicesResponseDeviceCheckInfosDeviceCheckInfo[];
  static names(): { [key: string]: string } {
    return {
      deviceCheckInfo: 'DeviceCheckInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deviceCheckInfo: { 'type': 'array', 'itemType': CheckDevicesResponseDeviceCheckInfosDeviceCheckInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryUniqueDeviceStatResponseAppDeviceStatsAppDeviceStat extends $tea.Model {
  time: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      time: 'Time',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      time: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryUniqueDeviceStatResponseAppDeviceStats extends $tea.Model {
  appDeviceStat: QueryUniqueDeviceStatResponseAppDeviceStatsAppDeviceStat[];
  static names(): { [key: string]: string } {
    return {
      appDeviceStat: 'AppDeviceStat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appDeviceStat: { 'type': 'array', 'itemType': QueryUniqueDeviceStatResponseAppDeviceStatsAppDeviceStat },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryTagsResponseTagInfosTagInfo extends $tea.Model {
  tagName: string;
  static names(): { [key: string]: string } {
    return {
      tagName: 'TagName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryTagsResponseTagInfos extends $tea.Model {
  tagInfo: QueryTagsResponseTagInfosTagInfo[];
  static names(): { [key: string]: string } {
    return {
      tagInfo: 'TagInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagInfo: { 'type': 'array', 'itemType': QueryTagsResponseTagInfosTagInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByMsgResponsePushStatsPushStat extends $tea.Model {
  messageId: string;
  acceptCount: number;
  sentCount: number;
  receivedCount: number;
  openedCount: number;
  deletedCount: number;
  smsSentCount: number;
  smsSkipCount: number;
  smsFailedCount: number;
  smsReceiveSuccessCount: number;
  smsReceiveFailedCount: number;
  static names(): { [key: string]: string } {
    return {
      messageId: 'MessageId',
      acceptCount: 'AcceptCount',
      sentCount: 'SentCount',
      receivedCount: 'ReceivedCount',
      openedCount: 'OpenedCount',
      deletedCount: 'DeletedCount',
      smsSentCount: 'SmsSentCount',
      smsSkipCount: 'SmsSkipCount',
      smsFailedCount: 'SmsFailedCount',
      smsReceiveSuccessCount: 'SmsReceiveSuccessCount',
      smsReceiveFailedCount: 'SmsReceiveFailedCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      messageId: 'string',
      acceptCount: 'number',
      sentCount: 'number',
      receivedCount: 'number',
      openedCount: 'number',
      deletedCount: 'number',
      smsSentCount: 'number',
      smsSkipCount: 'number',
      smsFailedCount: 'number',
      smsReceiveSuccessCount: 'number',
      smsReceiveFailedCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByMsgResponsePushStats extends $tea.Model {
  pushStat: QueryPushStatByMsgResponsePushStatsPushStat[];
  static names(): { [key: string]: string } {
    return {
      pushStat: 'PushStat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pushStat: { 'type': 'array', 'itemType': QueryPushStatByMsgResponsePushStatsPushStat },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByAppResponseAppPushStatsAppPushStat extends $tea.Model {
  time: string;
  acceptCount: number;
  sentCount: number;
  receivedCount: number;
  openedCount: number;
  deletedCount: number;
  smsSentCount: number;
  smsSkipCount: number;
  smsFailedCount: number;
  smsReceiveSuccessCount: number;
  smsReceiveFailedCount: number;
  static names(): { [key: string]: string } {
    return {
      time: 'Time',
      acceptCount: 'AcceptCount',
      sentCount: 'SentCount',
      receivedCount: 'ReceivedCount',
      openedCount: 'OpenedCount',
      deletedCount: 'DeletedCount',
      smsSentCount: 'SmsSentCount',
      smsSkipCount: 'SmsSkipCount',
      smsFailedCount: 'SmsFailedCount',
      smsReceiveSuccessCount: 'SmsReceiveSuccessCount',
      smsReceiveFailedCount: 'SmsReceiveFailedCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      time: 'string',
      acceptCount: 'number',
      sentCount: 'number',
      receivedCount: 'number',
      openedCount: 'number',
      deletedCount: 'number',
      smsSentCount: 'number',
      smsSkipCount: 'number',
      smsFailedCount: 'number',
      smsReceiveSuccessCount: 'number',
      smsReceiveFailedCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryPushStatByAppResponseAppPushStats extends $tea.Model {
  appPushStat: QueryPushStatByAppResponseAppPushStatsAppPushStat[];
  static names(): { [key: string]: string } {
    return {
      appPushStat: 'AppPushStat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appPushStat: { 'type': 'array', 'itemType': QueryPushStatByAppResponseAppPushStatsAppPushStat },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceStatResponseAppDeviceStatsAppDeviceStat extends $tea.Model {
  time: string;
  count: number;
  deviceType: string;
  static names(): { [key: string]: string } {
    return {
      time: 'Time',
      count: 'Count',
      deviceType: 'DeviceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      time: 'string',
      count: 'number',
      deviceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceStatResponseAppDeviceStats extends $tea.Model {
  appDeviceStat: QueryDeviceStatResponseAppDeviceStatsAppDeviceStat[];
  static names(): { [key: string]: string } {
    return {
      appDeviceStat: 'AppDeviceStat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appDeviceStat: { 'type': 'array', 'itemType': QueryDeviceStatResponseAppDeviceStatsAppDeviceStat },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDeviceInfoResponseDeviceInfo extends $tea.Model {
  deviceId: string;
  deviceType: string;
  account: string;
  deviceToken: string;
  tags: string;
  alias: string;
  lastOnlineTime: string;
  online: boolean;
  phoneNumber: string;
  pushEnabled: boolean;
  static names(): { [key: string]: string } {
    return {
      deviceId: 'DeviceId',
      deviceType: 'DeviceType',
      account: 'Account',
      deviceToken: 'DeviceToken',
      tags: 'Tags',
      alias: 'Alias',
      lastOnlineTime: 'LastOnlineTime',
      online: 'Online',
      phoneNumber: 'PhoneNumber',
      pushEnabled: 'PushEnabled',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deviceId: 'string',
      deviceType: 'string',
      account: 'string',
      deviceToken: 'string',
      tags: 'string',
      alias: 'string',
      lastOnlineTime: 'string',
      online: 'boolean',
      phoneNumber: 'string',
      pushEnabled: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAliasesResponseAliasInfosAliasInfo extends $tea.Model {
  aliasName: string;
  static names(): { [key: string]: string } {
    return {
      aliasName: 'AliasName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aliasName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryAliasesResponseAliasInfos extends $tea.Model {
  aliasInfo: QueryAliasesResponseAliasInfosAliasInfo[];
  static names(): { [key: string]: string } {
    return {
      aliasInfo: 'AliasInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aliasInfo: { 'type': 'array', 'itemType': QueryAliasesResponseAliasInfosAliasInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagsResponseTagInfosTagInfo extends $tea.Model {
  tagName: string;
  static names(): { [key: string]: string } {
    return {
      tagName: 'TagName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagsResponseTagInfos extends $tea.Model {
  tagInfo: ListTagsResponseTagInfosTagInfo[];
  static names(): { [key: string]: string } {
    return {
      tagInfo: 'TagInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagInfo: { 'type': 'array', 'itemType': ListTagsResponseTagInfosTagInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSummaryAppsResponseSummaryAppInfosSummaryAppInfo extends $tea.Model {
  appName: string;
  appKey: number;
  static names(): { [key: string]: string } {
    return {
      appName: 'AppName',
      appKey: 'AppKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appName: 'string',
      appKey: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSummaryAppsResponseSummaryAppInfos extends $tea.Model {
  summaryAppInfo: ListSummaryAppsResponseSummaryAppInfosSummaryAppInfo[];
  static names(): { [key: string]: string } {
    return {
      summaryAppInfo: 'SummaryAppInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      summaryAppInfo: { 'type': 'array', 'itemType': ListSummaryAppsResponseSummaryAppInfosSummaryAppInfo },
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
      'ap-northeast-1': "cloudpush.aliyuncs.com",
      'ap-northeast-2-pop': "cloudpush.aliyuncs.com",
      'ap-south-1': "cloudpush.aliyuncs.com",
      'ap-southeast-1': "cloudpush.aliyuncs.com",
      'ap-southeast-2': "cloudpush.aliyuncs.com",
      'ap-southeast-3': "cloudpush.aliyuncs.com",
      'ap-southeast-5': "cloudpush.aliyuncs.com",
      'cn-beijing': "cloudpush.aliyuncs.com",
      'cn-beijing-finance-1': "cloudpush.aliyuncs.com",
      'cn-beijing-finance-pop': "cloudpush.aliyuncs.com",
      'cn-beijing-gov-1': "cloudpush.aliyuncs.com",
      'cn-beijing-nu16-b01': "cloudpush.aliyuncs.com",
      'cn-chengdu': "cloudpush.aliyuncs.com",
      'cn-edge-1': "cloudpush.aliyuncs.com",
      'cn-fujian': "cloudpush.aliyuncs.com",
      'cn-haidian-cm12-c01': "cloudpush.aliyuncs.com",
      'cn-hangzhou': "cloudpush.aliyuncs.com",
      'cn-hangzhou-bj-b01': "cloudpush.aliyuncs.com",
      'cn-hangzhou-finance': "cloudpush.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "cloudpush.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "cloudpush.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "cloudpush.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "cloudpush.aliyuncs.com",
      'cn-hangzhou-test-306': "cloudpush.aliyuncs.com",
      'cn-hongkong': "cloudpush.aliyuncs.com",
      'cn-hongkong-finance-pop': "cloudpush.aliyuncs.com",
      'cn-huhehaote': "cloudpush.aliyuncs.com",
      'cn-north-2-gov-1': "cloudpush.aliyuncs.com",
      'cn-qingdao': "cloudpush.aliyuncs.com",
      'cn-qingdao-nebula': "cloudpush.aliyuncs.com",
      'cn-shanghai': "cloudpush.aliyuncs.com",
      'cn-shanghai-et15-b01': "cloudpush.aliyuncs.com",
      'cn-shanghai-et2-b01': "cloudpush.aliyuncs.com",
      'cn-shanghai-finance-1': "cloudpush.aliyuncs.com",
      'cn-shanghai-inner': "cloudpush.aliyuncs.com",
      'cn-shanghai-internal-test-1': "cloudpush.aliyuncs.com",
      'cn-shenzhen': "cloudpush.aliyuncs.com",
      'cn-shenzhen-finance-1': "cloudpush.aliyuncs.com",
      'cn-shenzhen-inner': "cloudpush.aliyuncs.com",
      'cn-shenzhen-st4-d01': "cloudpush.aliyuncs.com",
      'cn-shenzhen-su18-b01': "cloudpush.aliyuncs.com",
      'cn-wuhan': "cloudpush.aliyuncs.com",
      'cn-yushanfang': "cloudpush.aliyuncs.com",
      'cn-zhangbei-na61-b01': "cloudpush.aliyuncs.com",
      'cn-zhangjiakou': "cloudpush.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "cloudpush.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "cloudpush.aliyuncs.com",
      'eu-central-1': "cloudpush.aliyuncs.com",
      'eu-west-1': "cloudpush.aliyuncs.com",
      'eu-west-1-oxs': "cloudpush.aliyuncs.com",
      'me-east-1': "cloudpush.aliyuncs.com",
      'rus-west-1-pop': "cloudpush.aliyuncs.com",
      'us-east-1': "cloudpush.aliyuncs.com",
      'us-west-1': "cloudpush.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("push", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async queryPushRecordsWithOptions(request: QueryPushRecordsRequest, runtime: $Util.RuntimeOptions): Promise<QueryPushRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryPushRecordsResponse>(await this.doRequest("QueryPushRecords", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryPushRecordsResponse({}));
  }

  async queryPushRecords(request: QueryPushRecordsRequest): Promise<QueryPushRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryPushRecordsWithOptions(request, runtime);
  }

  async continuouslyPushWithOptions(request: ContinuouslyPushRequest, runtime: $Util.RuntimeOptions): Promise<ContinuouslyPushResponse> {
    Util.validateModel(request);
    return $tea.cast<ContinuouslyPushResponse>(await this.doRequest("ContinuouslyPush", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new ContinuouslyPushResponse({}));
  }

  async continuouslyPush(request: ContinuouslyPushRequest): Promise<ContinuouslyPushResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.continuouslyPushWithOptions(request, runtime);
  }

  async completeContinuouslyPushWithOptions(request: CompleteContinuouslyPushRequest, runtime: $Util.RuntimeOptions): Promise<CompleteContinuouslyPushResponse> {
    Util.validateModel(request);
    return $tea.cast<CompleteContinuouslyPushResponse>(await this.doRequest("CompleteContinuouslyPush", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new CompleteContinuouslyPushResponse({}));
  }

  async completeContinuouslyPush(request: CompleteContinuouslyPushRequest): Promise<CompleteContinuouslyPushResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.completeContinuouslyPushWithOptions(request, runtime);
  }

  async massPushWithOptions(request: MassPushRequest, runtime: $Util.RuntimeOptions): Promise<MassPushResponse> {
    Util.validateModel(request);
    return $tea.cast<MassPushResponse>(await this.doRequest("MassPush", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new MassPushResponse({}));
  }

  async massPush(request: MassPushRequest): Promise<MassPushResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.massPushWithOptions(request, runtime);
  }

  async queryDevicesByAliasWithOptions(request: QueryDevicesByAliasRequest, runtime: $Util.RuntimeOptions): Promise<QueryDevicesByAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryDevicesByAliasResponse>(await this.doRequest("QueryDevicesByAlias", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryDevicesByAliasResponse({}));
  }

  async queryDevicesByAlias(request: QueryDevicesByAliasRequest): Promise<QueryDevicesByAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryDevicesByAliasWithOptions(request, runtime);
  }

  async queryDevicesByAccountWithOptions(request: QueryDevicesByAccountRequest, runtime: $Util.RuntimeOptions): Promise<QueryDevicesByAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryDevicesByAccountResponse>(await this.doRequest("QueryDevicesByAccount", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryDevicesByAccountResponse({}));
  }

  async queryDevicesByAccount(request: QueryDevicesByAccountRequest): Promise<QueryDevicesByAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryDevicesByAccountWithOptions(request, runtime);
  }

  async unbindPhoneWithOptions(request: UnbindPhoneRequest, runtime: $Util.RuntimeOptions): Promise<UnbindPhoneResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindPhoneResponse>(await this.doRequest("UnbindPhone", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new UnbindPhoneResponse({}));
  }

  async unbindPhone(request: UnbindPhoneRequest): Promise<UnbindPhoneResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindPhoneWithOptions(request, runtime);
  }

  async bindPhoneWithOptions(request: BindPhoneRequest, runtime: $Util.RuntimeOptions): Promise<BindPhoneResponse> {
    Util.validateModel(request);
    return $tea.cast<BindPhoneResponse>(await this.doRequest("BindPhone", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new BindPhoneResponse({}));
  }

  async bindPhone(request: BindPhoneRequest): Promise<BindPhoneResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindPhoneWithOptions(request, runtime);
  }

  async removeTagWithOptions(request: RemoveTagRequest, runtime: $Util.RuntimeOptions): Promise<RemoveTagResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveTagResponse>(await this.doRequest("RemoveTag", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new RemoveTagResponse({}));
  }

  async removeTag(request: RemoveTagRequest): Promise<RemoveTagResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeTagWithOptions(request, runtime);
  }

  async checkDevicesWithOptions(request: CheckDevicesRequest, runtime: $Util.RuntimeOptions): Promise<CheckDevicesResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckDevicesResponse>(await this.doRequest("CheckDevices", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new CheckDevicesResponse({}));
  }

  async checkDevices(request: CheckDevicesRequest): Promise<CheckDevicesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkDevicesWithOptions(request, runtime);
  }

  async checkDeviceWithOptions(request: CheckDeviceRequest, runtime: $Util.RuntimeOptions): Promise<CheckDeviceResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckDeviceResponse>(await this.doRequest("CheckDevice", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new CheckDeviceResponse({}));
  }

  async checkDevice(request: CheckDeviceRequest): Promise<CheckDeviceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkDeviceWithOptions(request, runtime);
  }

  async unbindTagWithOptions(request: UnbindTagRequest, runtime: $Util.RuntimeOptions): Promise<UnbindTagResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindTagResponse>(await this.doRequest("UnbindTag", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new UnbindTagResponse({}));
  }

  async unbindTag(request: UnbindTagRequest): Promise<UnbindTagResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindTagWithOptions(request, runtime);
  }

  async unbindAliasWithOptions(request: UnbindAliasRequest, runtime: $Util.RuntimeOptions): Promise<UnbindAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindAliasResponse>(await this.doRequest("UnbindAlias", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new UnbindAliasResponse({}));
  }

  async unbindAlias(request: UnbindAliasRequest): Promise<UnbindAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindAliasWithOptions(request, runtime);
  }

  async queryUniqueDeviceStatWithOptions(request: QueryUniqueDeviceStatRequest, runtime: $Util.RuntimeOptions): Promise<QueryUniqueDeviceStatResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryUniqueDeviceStatResponse>(await this.doRequest("QueryUniqueDeviceStat", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryUniqueDeviceStatResponse({}));
  }

  async queryUniqueDeviceStat(request: QueryUniqueDeviceStatRequest): Promise<QueryUniqueDeviceStatResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryUniqueDeviceStatWithOptions(request, runtime);
  }

  async queryTagsWithOptions(request: QueryTagsRequest, runtime: $Util.RuntimeOptions): Promise<QueryTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryTagsResponse>(await this.doRequest("QueryTags", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryTagsResponse({}));
  }

  async queryTags(request: QueryTagsRequest): Promise<QueryTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryTagsWithOptions(request, runtime);
  }

  async queryPushStatByMsgWithOptions(request: QueryPushStatByMsgRequest, runtime: $Util.RuntimeOptions): Promise<QueryPushStatByMsgResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryPushStatByMsgResponse>(await this.doRequest("QueryPushStatByMsg", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryPushStatByMsgResponse({}));
  }

  async queryPushStatByMsg(request: QueryPushStatByMsgRequest): Promise<QueryPushStatByMsgResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryPushStatByMsgWithOptions(request, runtime);
  }

  async queryPushStatByAppWithOptions(request: QueryPushStatByAppRequest, runtime: $Util.RuntimeOptions): Promise<QueryPushStatByAppResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryPushStatByAppResponse>(await this.doRequest("QueryPushStatByApp", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryPushStatByAppResponse({}));
  }

  async queryPushStatByApp(request: QueryPushStatByAppRequest): Promise<QueryPushStatByAppResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryPushStatByAppWithOptions(request, runtime);
  }

  async queryDeviceStatWithOptions(request: QueryDeviceStatRequest, runtime: $Util.RuntimeOptions): Promise<QueryDeviceStatResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryDeviceStatResponse>(await this.doRequest("QueryDeviceStat", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryDeviceStatResponse({}));
  }

  async queryDeviceStat(request: QueryDeviceStatRequest): Promise<QueryDeviceStatResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryDeviceStatWithOptions(request, runtime);
  }

  async queryDeviceInfoWithOptions(request: QueryDeviceInfoRequest, runtime: $Util.RuntimeOptions): Promise<QueryDeviceInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryDeviceInfoResponse>(await this.doRequest("QueryDeviceInfo", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryDeviceInfoResponse({}));
  }

  async queryDeviceInfo(request: QueryDeviceInfoRequest): Promise<QueryDeviceInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryDeviceInfoWithOptions(request, runtime);
  }

  async queryAliasesWithOptions(request: QueryAliasesRequest, runtime: $Util.RuntimeOptions): Promise<QueryAliasesResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryAliasesResponse>(await this.doRequest("QueryAliases", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new QueryAliasesResponse({}));
  }

  async queryAliases(request: QueryAliasesRequest): Promise<QueryAliasesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryAliasesWithOptions(request, runtime);
  }

  async pushNoticeToiOSWithOptions(request: PushNoticeToiOSRequest, runtime: $Util.RuntimeOptions): Promise<PushNoticeToiOSResponse> {
    Util.validateModel(request);
    return $tea.cast<PushNoticeToiOSResponse>(await this.doRequest("PushNoticeToiOS", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new PushNoticeToiOSResponse({}));
  }

  async pushNoticeToiOS(request: PushNoticeToiOSRequest): Promise<PushNoticeToiOSResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pushNoticeToiOSWithOptions(request, runtime);
  }

  async pushNoticeToAndroidWithOptions(request: PushNoticeToAndroidRequest, runtime: $Util.RuntimeOptions): Promise<PushNoticeToAndroidResponse> {
    Util.validateModel(request);
    return $tea.cast<PushNoticeToAndroidResponse>(await this.doRequest("PushNoticeToAndroid", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new PushNoticeToAndroidResponse({}));
  }

  async pushNoticeToAndroid(request: PushNoticeToAndroidRequest): Promise<PushNoticeToAndroidResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pushNoticeToAndroidWithOptions(request, runtime);
  }

  async pushMessageToiOSWithOptions(request: PushMessageToiOSRequest, runtime: $Util.RuntimeOptions): Promise<PushMessageToiOSResponse> {
    Util.validateModel(request);
    return $tea.cast<PushMessageToiOSResponse>(await this.doRequest("PushMessageToiOS", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new PushMessageToiOSResponse({}));
  }

  async pushMessageToiOS(request: PushMessageToiOSRequest): Promise<PushMessageToiOSResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pushMessageToiOSWithOptions(request, runtime);
  }

  async pushMessageToAndroidWithOptions(request: PushMessageToAndroidRequest, runtime: $Util.RuntimeOptions): Promise<PushMessageToAndroidResponse> {
    Util.validateModel(request);
    return $tea.cast<PushMessageToAndroidResponse>(await this.doRequest("PushMessageToAndroid", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new PushMessageToAndroidResponse({}));
  }

  async pushMessageToAndroid(request: PushMessageToAndroidRequest): Promise<PushMessageToAndroidResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pushMessageToAndroidWithOptions(request, runtime);
  }

  async pushWithOptions(request: PushRequest, runtime: $Util.RuntimeOptions): Promise<PushResponse> {
    Util.validateModel(request);
    return $tea.cast<PushResponse>(await this.doRequest("Push", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new PushResponse({}));
  }

  async push(request: PushRequest): Promise<PushResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.pushWithOptions(request, runtime);
  }

  async listTagsWithOptions(request: ListTagsRequest, runtime: $Util.RuntimeOptions): Promise<ListTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagsResponse>(await this.doRequest("ListTags", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new ListTagsResponse({}));
  }

  async listTags(request: ListTagsRequest): Promise<ListTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagsWithOptions(request, runtime);
  }

  async listSummaryAppsWithOptions(request: ListSummaryAppsRequest, runtime: $Util.RuntimeOptions): Promise<ListSummaryAppsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListSummaryAppsResponse>(await this.doRequest("ListSummaryApps", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new ListSummaryAppsResponse({}));
  }

  async listSummaryApps(request: ListSummaryAppsRequest): Promise<ListSummaryAppsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listSummaryAppsWithOptions(request, runtime);
  }

  async bindTagWithOptions(request: BindTagRequest, runtime: $Util.RuntimeOptions): Promise<BindTagResponse> {
    Util.validateModel(request);
    return $tea.cast<BindTagResponse>(await this.doRequest("BindTag", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new BindTagResponse({}));
  }

  async bindTag(request: BindTagRequest): Promise<BindTagResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindTagWithOptions(request, runtime);
  }

  async bindAliasWithOptions(request: BindAliasRequest, runtime: $Util.RuntimeOptions): Promise<BindAliasResponse> {
    Util.validateModel(request);
    return $tea.cast<BindAliasResponse>(await this.doRequest("BindAlias", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new BindAliasResponse({}));
  }

  async bindAlias(request: BindAliasRequest): Promise<BindAliasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindAliasWithOptions(request, runtime);
  }

  async cancelPushWithOptions(request: CancelPushRequest, runtime: $Util.RuntimeOptions): Promise<CancelPushResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelPushResponse>(await this.doRequest("CancelPush", "HTTPS", "POST", "2016-08-01", "AK", null, $tea.toMap(request), runtime), new CancelPushResponse({}));
  }

  async cancelPush(request: CancelPushRequest): Promise<CancelPushResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelPushWithOptions(request, runtime);
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

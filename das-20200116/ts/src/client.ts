// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DescribeDiagnosticReportListRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  DBInstanceId?: string;
  pageNo?: string;
  pageSize?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      DBInstanceId: 'DBInstanceId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      DBInstanceId: 'string',
      pageNo: 'string',
      pageSize: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDiagnosticReportListResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDiagnosticReportRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  DBInstanceId?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDiagnosticReportResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AccessHDMInstanceRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  instanceArea?: string;
  instanceId?: string;
  ip?: string;
  port?: string;
  engine?: string;
  username?: string;
  password?: string;
  instanceAlias?: string;
  networkType?: string;
  vpcId?: string;
  region?: string;
  callerBid?: string;
  tenantId?: string;
  ownerIdSignature?: string;
  callerType?: string;
  callerUid?: string;
  target?: string;
  product?: string;
  external?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      instanceArea: 'InstanceArea',
      instanceId: 'InstanceId',
      ip: 'Ip',
      port: 'Port',
      engine: 'Engine',
      username: 'Username',
      password: 'Password',
      instanceAlias: 'InstanceAlias',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      region: 'Region',
      callerBid: 'CallerBid',
      tenantId: 'TenantId',
      ownerIdSignature: 'OwnerIdSignature',
      callerType: 'CallerType',
      callerUid: 'CallerUid',
      target: 'Target',
      product: 'Product',
      external: 'External',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      instanceArea: 'string',
      instanceId: 'string',
      ip: 'string',
      port: 'string',
      engine: 'string',
      username: 'string',
      password: 'string',
      instanceAlias: 'string',
      networkType: 'string',
      vpcId: 'string',
      region: 'string',
      callerBid: 'string',
      tenantId: 'string',
      ownerIdSignature: 'string',
      callerType: 'string',
      callerUid: 'string',
      target: 'string',
      product: 'string',
      external: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AccessHDMInstanceResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SyncHDMAliyunResourceRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  async?: string;
  waitForModifySecurityIps?: string;
  resourceTypes?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      async: 'Async',
      waitForModifySecurityIps: 'WaitForModifySecurityIps',
      resourceTypes: 'ResourceTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      async: 'string',
      waitForModifySecurityIps: 'string',
      resourceTypes: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SyncHDMAliyunResourceResponse extends $tea.Model {
  code: string;
  data: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      data: 'Data',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      data: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMLastAliyunResourceSyncResultRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMLastAliyunResourceSyncResultResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  data: GetHDMLastAliyunResourceSyncResultResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
      data: GetHDMLastAliyunResourceSyncResultResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEndpointSwitchTaskRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  taskId?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEndpointSwitchTaskResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  data: GetEndpointSwitchTaskResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
      data: GetEndpointSwitchTaskResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMAliyunResourceSyncResultRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  taskId?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMAliyunResourceSyncResultResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  data: GetHDMAliyunResourceSyncResultResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
      data: GetHDMAliyunResourceSyncResultResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddHDMInstanceRequest extends $tea.Model {
  uid?: string;
  accessKey?: string;
  signature?: string;
  timestamp?: string;
  context?: string;
  skipAuth?: string;
  userId?: string;
  instanceArea?: string;
  instanceId?: string;
  ip?: string;
  port?: string;
  engine?: string;
  username?: string;
  password?: string;
  instanceAlias?: string;
  networkType?: string;
  vpcId?: string;
  region?: string;
  flushAccount?: string;
  static names(): { [key: string]: string } {
    return {
      uid: 'Uid',
      accessKey: 'accessKey',
      signature: 'signature',
      timestamp: 'timestamp',
      context: '__context',
      skipAuth: 'skipAuth',
      userId: 'UserId',
      instanceArea: 'InstanceArea',
      instanceId: 'InstanceId',
      ip: 'Ip',
      port: 'Port',
      engine: 'Engine',
      username: 'Username',
      password: 'Password',
      instanceAlias: 'InstanceAlias',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      region: 'Region',
      flushAccount: 'FlushAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      uid: 'string',
      accessKey: 'string',
      signature: 'string',
      timestamp: 'string',
      context: 'string',
      skipAuth: 'string',
      userId: 'string',
      instanceArea: 'string',
      instanceId: 'string',
      ip: 'string',
      port: 'string',
      engine: 'string',
      username: 'string',
      password: 'string',
      instanceAlias: 'string',
      networkType: 'string',
      vpcId: 'string',
      region: 'string',
      flushAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddHDMInstanceResponse extends $tea.Model {
  code: string;
  message: string;
  requestId: string;
  success: string;
  synchro: string;
  data: AddHDMInstanceResponseData;
  static names(): { [key: string]: string } {
    return {
      code: 'Code',
      message: 'Message',
      requestId: 'RequestId',
      success: 'Success',
      synchro: 'Synchro',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      code: 'string',
      message: 'string',
      requestId: 'string',
      success: 'string',
      synchro: 'string',
      data: AddHDMInstanceResponseData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult extends $tea.Model {
  resourceType: string;
  syncCount: number;
  success: boolean;
  errMsg: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      syncCount: 'SyncCount',
      success: 'Success',
      errMsg: 'ErrMsg',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      syncCount: 'number',
      success: 'boolean',
      errMsg: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMLastAliyunResourceSyncResultResponseDataSubResults extends $tea.Model {
  resourceSyncSubResult: GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult[];
  static names(): { [key: string]: string } {
    return {
      resourceSyncSubResult: 'ResourceSyncSubResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceSyncSubResult: { 'type': 'array', 'itemType': GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMLastAliyunResourceSyncResultResponseData extends $tea.Model {
  syncStatus: string;
  errorMsg: string;
  results: string;
  subResults: GetHDMLastAliyunResourceSyncResultResponseDataSubResults;
  static names(): { [key: string]: string } {
    return {
      syncStatus: 'SyncStatus',
      errorMsg: 'ErrorMsg',
      results: 'Results',
      subResults: 'SubResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      syncStatus: 'string',
      errorMsg: 'string',
      results: 'string',
      subResults: GetHDMLastAliyunResourceSyncResultResponseDataSubResults,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEndpointSwitchTaskResponseData extends $tea.Model {
  accountId: string;
  dbLinkId: number;
  taskId: string;
  status: string;
  oriUuid: string;
  uuid: string;
  errMsg: string;
  static names(): { [key: string]: string } {
    return {
      accountId: 'AccountId',
      dbLinkId: 'DbLinkId',
      taskId: 'TaskId',
      status: 'Status',
      oriUuid: 'OriUuid',
      uuid: 'Uuid',
      errMsg: 'ErrMsg',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountId: 'string',
      dbLinkId: 'number',
      taskId: 'string',
      status: 'string',
      oriUuid: 'string',
      uuid: 'string',
      errMsg: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult extends $tea.Model {
  resourceType: string;
  syncCount: number;
  success: boolean;
  errMsg: string;
  static names(): { [key: string]: string } {
    return {
      resourceType: 'ResourceType',
      syncCount: 'SyncCount',
      success: 'Success',
      errMsg: 'ErrMsg',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceType: 'string',
      syncCount: 'number',
      success: 'boolean',
      errMsg: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMAliyunResourceSyncResultResponseDataSubResults extends $tea.Model {
  resourceSyncSubResult: GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult[];
  static names(): { [key: string]: string } {
    return {
      resourceSyncSubResult: 'ResourceSyncSubResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceSyncSubResult: { 'type': 'array', 'itemType': GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetHDMAliyunResourceSyncResultResponseData extends $tea.Model {
  syncStatus: string;
  errorMsg: string;
  results: string;
  subResults: GetHDMAliyunResourceSyncResultResponseDataSubResults;
  static names(): { [key: string]: string } {
    return {
      syncStatus: 'SyncStatus',
      errorMsg: 'ErrorMsg',
      results: 'Results',
      subResults: 'SubResults',
    };
  }

  static types(): { [key: string]: any } {
    return {
      syncStatus: 'string',
      errorMsg: 'string',
      results: 'string',
      subResults: GetHDMAliyunResourceSyncResultResponseDataSubResults,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddHDMInstanceResponseData extends $tea.Model {
  instanceId: string;
  vpcId: string;
  ip: string;
  port: number;
  uuid: string;
  role: string;
  code: number;
  error: string;
  tenantId: string;
  ownerId: string;
  token: string;
  callerUid: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      vpcId: 'VpcId',
      ip: 'Ip',
      port: 'Port',
      uuid: 'Uuid',
      role: 'Role',
      code: 'Code',
      error: 'Error',
      tenantId: 'TenantId',
      ownerId: 'OwnerId',
      token: 'Token',
      callerUid: 'CallerUid',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      vpcId: 'string',
      ip: 'string',
      port: 'number',
      uuid: 'string',
      role: 'string',
      code: 'number',
      error: 'string',
      tenantId: 'string',
      ownerId: 'string',
      token: 'string',
      callerUid: 'string',
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
    this._endpoint = this.getEndpoint("das", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async describeDiagnosticReportListWithOptions(request: DescribeDiagnosticReportListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDiagnosticReportListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDiagnosticReportListResponse>(await this.doRequest("DescribeDiagnosticReportList", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new DescribeDiagnosticReportListResponse({}));
  }

  async describeDiagnosticReportList(request: DescribeDiagnosticReportListRequest): Promise<DescribeDiagnosticReportListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDiagnosticReportListWithOptions(request, runtime);
  }

  async createDiagnosticReportWithOptions(request: CreateDiagnosticReportRequest, runtime: $Util.RuntimeOptions): Promise<CreateDiagnosticReportResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDiagnosticReportResponse>(await this.doRequest("CreateDiagnosticReport", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new CreateDiagnosticReportResponse({}));
  }

  async createDiagnosticReport(request: CreateDiagnosticReportRequest): Promise<CreateDiagnosticReportResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDiagnosticReportWithOptions(request, runtime);
  }

  async accessHDMInstanceWithOptions(request: AccessHDMInstanceRequest, runtime: $Util.RuntimeOptions): Promise<AccessHDMInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<AccessHDMInstanceResponse>(await this.doRequest("AccessHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new AccessHDMInstanceResponse({}));
  }

  async accessHDMInstance(request: AccessHDMInstanceRequest): Promise<AccessHDMInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.accessHDMInstanceWithOptions(request, runtime);
  }

  async syncHDMAliyunResourceWithOptions(request: SyncHDMAliyunResourceRequest, runtime: $Util.RuntimeOptions): Promise<SyncHDMAliyunResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<SyncHDMAliyunResourceResponse>(await this.doRequest("SyncHDMAliyunResource", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new SyncHDMAliyunResourceResponse({}));
  }

  async syncHDMAliyunResource(request: SyncHDMAliyunResourceRequest): Promise<SyncHDMAliyunResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.syncHDMAliyunResourceWithOptions(request, runtime);
  }

  async getHDMLastAliyunResourceSyncResultWithOptions(request: GetHDMLastAliyunResourceSyncResultRequest, runtime: $Util.RuntimeOptions): Promise<GetHDMLastAliyunResourceSyncResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetHDMLastAliyunResourceSyncResultResponse>(await this.doRequest("GetHDMLastAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new GetHDMLastAliyunResourceSyncResultResponse({}));
  }

  async getHDMLastAliyunResourceSyncResult(request: GetHDMLastAliyunResourceSyncResultRequest): Promise<GetHDMLastAliyunResourceSyncResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getHDMLastAliyunResourceSyncResultWithOptions(request, runtime);
  }

  async getEndpointSwitchTaskWithOptions(request: GetEndpointSwitchTaskRequest, runtime: $Util.RuntimeOptions): Promise<GetEndpointSwitchTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<GetEndpointSwitchTaskResponse>(await this.doRequest("GetEndpointSwitchTask", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new GetEndpointSwitchTaskResponse({}));
  }

  async getEndpointSwitchTask(request: GetEndpointSwitchTaskRequest): Promise<GetEndpointSwitchTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getEndpointSwitchTaskWithOptions(request, runtime);
  }

  async getHDMAliyunResourceSyncResultWithOptions(request: GetHDMAliyunResourceSyncResultRequest, runtime: $Util.RuntimeOptions): Promise<GetHDMAliyunResourceSyncResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetHDMAliyunResourceSyncResultResponse>(await this.doRequest("GetHDMAliyunResourceSyncResult", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new GetHDMAliyunResourceSyncResultResponse({}));
  }

  async getHDMAliyunResourceSyncResult(request: GetHDMAliyunResourceSyncResultRequest): Promise<GetHDMAliyunResourceSyncResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getHDMAliyunResourceSyncResultWithOptions(request, runtime);
  }

  async addHDMInstanceWithOptions(request: AddHDMInstanceRequest, runtime: $Util.RuntimeOptions): Promise<AddHDMInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<AddHDMInstanceResponse>(await this.doRequest("AddHDMInstance", "HTTPS", "POST", "2020-01-16", "AK", null, $tea.toMap(request), runtime), new AddHDMInstanceResponse({}));
  }

  async addHDMInstance(request: AddHDMInstanceRequest): Promise<AddHDMInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addHDMInstanceWithOptions(request, runtime);
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

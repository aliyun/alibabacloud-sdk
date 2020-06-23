// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class GetMultipleTraceRequest extends $tea.Model {
  regionId: string;
  traceIDs?: string[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      traceIDs: 'TraceIDs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      traceIDs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponse extends $tea.Model {
  requestId: string;
  multiCallChainInfos: GetMultipleTraceResponseMultiCallChainInfos[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      multiCallChainInfos: 'MultiCallChainInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      multiCallChainInfos: { 'type': 'array', 'itemType': GetMultipleTraceResponseMultiCallChainInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesByPageRequest extends $tea.Model {
  startTime: number;
  endTime: number;
  regionId: string;
  serviceName?: string;
  operationName?: string;
  minDuration?: number;
  serviceIp?: string;
  exclusionFilters?: SearchTracesByPageRequestExclusionFilters[];
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      startTime: 'StartTime',
      endTime: 'EndTime',
      regionId: 'RegionId',
      serviceName: 'ServiceName',
      operationName: 'OperationName',
      minDuration: 'MinDuration',
      serviceIp: 'ServiceIp',
      exclusionFilters: 'ExclusionFilters',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startTime: 'number',
      endTime: 'number',
      regionId: 'string',
      serviceName: 'string',
      operationName: 'string',
      minDuration: 'number',
      serviceIp: 'string',
      exclusionFilters: { 'type': 'array', 'itemType': SearchTracesByPageRequestExclusionFilters },
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesByPageResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchTracesByPageResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchTracesByPageResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackRequest extends $tea.Model {
  traceID: string;
  regionId: string;
  rpcID?: string;
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      regionId: 'RegionId',
      rpcID: 'RpcID',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      regionId: 'string',
      rpcID: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResponse extends $tea.Model {
  requestId: string;
  stackInfo: GetStackResponseStackInfo[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      stackInfo: 'StackInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      stackInfo: { 'type': 'array', 'itemType': GetStackResponseStackInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTraceLocationRequest extends $tea.Model {
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTraceLocationResponse extends $tea.Model {
  requestId: string;
  regionConfigs: DescribeTraceLocationResponseRegionConfigs[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionConfigs: 'RegionConfigs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionConfigs: { 'type': 'array', 'itemType': DescribeTraceLocationResponseRegionConfigs },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTraceAppRequest extends $tea.Model {
  appId: string;
  regionId: string;
  type: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      regionId: 'RegionId',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'string',
      regionId: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTraceAppResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTraceLicenseKeyRequest extends $tea.Model {
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTraceLicenseKeyResponse extends $tea.Model {
  requestId: string;
  licenseKey: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      licenseKey: 'LicenseKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      licenseKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckServiceLinkedRoleForDeletingRequest extends $tea.Model {
  roleArn: string;
  serviceName: string;
  SPIRegionId: string;
  deletionTaskId: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      roleArn: 'RoleArn',
      serviceName: 'ServiceName',
      SPIRegionId: 'SPIRegionId',
      deletionTaskId: 'DeletionTaskId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      roleArn: 'string',
      serviceName: 'string',
      SPIRegionId: 'string',
      deletionTaskId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckServiceLinkedRoleForDeletingResponse extends $tea.Model {
  requestId: string;
  deletable: boolean;
  roleUsages: CheckServiceLinkedRoleForDeletingResponseRoleUsages[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deletable: 'Deletable',
      roleUsages: 'RoleUsages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deletable: 'boolean',
      roleUsages: { 'type': 'array', 'itemType': CheckServiceLinkedRoleForDeletingResponseRoleUsages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDashboardsRequest extends $tea.Model {
  regionId: string;
  clusterId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clusterId: 'ClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDashboardsResponse extends $tea.Model {
  requestId: string;
  dashboardVos: ListDashboardsResponseDashboardVos[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dashboardVos: 'DashboardVos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dashboardVos: { 'type': 'array', 'itemType': ListDashboardsResponseDashboardVos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetConsistencySnapshotRequest extends $tea.Model {
  currentTimestamp?: number;
  regionId: string;
  proxyUserId?: string;
  pid: string;
  appType: string;
  static names(): { [key: string]: string } {
    return {
      currentTimestamp: 'CurrentTimestamp',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      pid: 'Pid',
      appType: 'AppType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currentTimestamp: 'number',
      regionId: 'string',
      proxyUserId: 'string',
      pid: 'string',
      appType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetConsistencySnapshotResponse extends $tea.Model {
  requestId: string;
  consistencyResultJsonStr: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      consistencyResultJsonStr: 'ConsistencyResultJsonStr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      consistencyResultJsonStr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDataConsistencyRequest extends $tea.Model {
  currentTimestamp?: number;
  regionId: string;
  proxyUserId?: string;
  pid: string;
  appType: string;
  static names(): { [key: string]: string } {
    return {
      currentTimestamp: 'CurrentTimestamp',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      pid: 'Pid',
      appType: 'AppType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currentTimestamp: 'number',
      regionId: 'string',
      proxyUserId: 'string',
      pid: 'string',
      appType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDataConsistencyResponse extends $tea.Model {
  requestId: string;
  isDataConsistency: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isDataConsistency: 'IsDataConsistency',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isDataConsistency: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGrafanaRequest extends $tea.Model {
  regionId: string;
  clusterId: string;
  integration: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clusterId: 'ClusterId',
      integration: 'Integration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clusterId: 'string',
      integration: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGrafanaResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddIntegrationRequest extends $tea.Model {
  regionId: string;
  clusterId: string;
  integration: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      clusterId: 'ClusterId',
      integration: 'Integration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      clusterId: 'string',
      integration: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddIntegrationResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceRequest extends $tea.Model {
  traceID: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceResponse extends $tea.Model {
  requestId: string;
  spans: GetTraceResponseSpans[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      spans: 'Spans',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      spans: { 'type': 'array', 'itemType': GetTraceResponseSpans },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListClusterFromGrafanaRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListClusterFromGrafanaResponse extends $tea.Model {
  requestId: string;
  promClusterList: ListClusterFromGrafanaResponsePromClusterList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      promClusterList: 'PromClusterList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      promClusterList: { 'type': 'array', 'itemType': ListClusterFromGrafanaResponsePromClusterList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesRequest extends $tea.Model {
  startTime: number;
  endTime: number;
  regionId: string;
  serviceName?: string;
  operationName?: string;
  minDuration?: number;
  tag?: SearchTracesRequestTag[];
  serviceIp?: string;
  exclusionFilters?: SearchTracesRequestExclusionFilters[];
  static names(): { [key: string]: string } {
    return {
      startTime: 'StartTime',
      endTime: 'EndTime',
      regionId: 'RegionId',
      serviceName: 'ServiceName',
      operationName: 'OperationName',
      minDuration: 'MinDuration',
      tag: 'Tag',
      serviceIp: 'ServiceIp',
      exclusionFilters: 'ExclusionFilters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startTime: 'number',
      endTime: 'number',
      regionId: 'string',
      serviceName: 'string',
      operationName: 'string',
      minDuration: 'number',
      tag: { 'type': 'array', 'itemType': SearchTracesRequestTag },
      serviceIp: 'string',
      exclusionFilters: { 'type': 'array', 'itemType': SearchTracesRequestExclusionFilters },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesResponse extends $tea.Model {
  requestId: string;
  traceInfos: SearchTracesResponseTraceInfos[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      traceInfos: 'TraceInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      traceInfos: { 'type': 'array', 'itemType': SearchTracesResponseTraceInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPrometheusApiTokenRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPrometheusApiTokenResponse extends $tea.Model {
  requestId: string;
  token: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      token: 'Token',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      token: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetRetcodeShareStatusRequest extends $tea.Model {
  pid: string;
  status: boolean;
  static names(): { [key: string]: string } {
    return {
      pid: 'Pid',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pid: 'string',
      status: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetRetcodeShareStatusResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRetcodeShareUrlRequest extends $tea.Model {
  pid: string;
  static names(): { [key: string]: string } {
    return {
      pid: 'Pid',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pid: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetRetcodeShareUrlResponse extends $tea.Model {
  requestId: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPromClustersRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPromClustersResponse extends $tea.Model {
  requestId: string;
  promClusterList: ListPromClustersResponsePromClusterList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      promClusterList: 'PromClusterList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      promClusterList: { 'type': 'array', 'itemType': ListPromClustersResponsePromClusterList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertRuleRequest extends $tea.Model {
  regionId: string;
  contactGroupIds?: string;
  isAutoStart?: boolean;
  templageAlertConfig: string;
  proxyUserId?: string;
  alertId: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      contactGroupIds: 'ContactGroupIds',
      isAutoStart: 'IsAutoStart',
      templageAlertConfig: 'TemplageAlertConfig',
      proxyUserId: 'ProxyUserId',
      alertId: 'AlertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      contactGroupIds: 'string',
      isAutoStart: 'boolean',
      templageAlertConfig: 'string',
      proxyUserId: 'string',
      alertId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertRuleResponse extends $tea.Model {
  requestId: string;
  data: string;
  alertId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
      alertId: 'AlertId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
      alertId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartAlertRequest extends $tea.Model {
  alertId: string;
  proxyUserId?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      alertId: 'AlertId',
      proxyUserId: 'ProxyUserId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertId: 'string',
      proxyUserId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartAlertResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopAlertRequest extends $tea.Model {
  alertId: string;
  proxyUserId?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      alertId: 'AlertId',
      proxyUserId: 'ProxyUserId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertId: 'string',
      proxyUserId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopAlertResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEventsRequest extends $tea.Model {
  proxyUserId?: string;
  alertId?: number;
  pid?: string;
  currentPage?: number;
  pageSize?: number;
  regionId: string;
  appType?: string;
  alertType?: number;
  isTrigger?: number;
  startTime?: number;
  endTime?: number;
  static names(): { [key: string]: string } {
    return {
      proxyUserId: 'ProxyUserId',
      alertId: 'AlertId',
      pid: 'Pid',
      currentPage: 'CurrentPage',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      appType: 'AppType',
      alertType: 'AlertType',
      isTrigger: 'IsTrigger',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      proxyUserId: 'string',
      alertId: 'number',
      pid: 'string',
      currentPage: 'number',
      pageSize: 'number',
      regionId: 'string',
      appType: 'string',
      alertType: 'number',
      isTrigger: 'number',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEventsResponse extends $tea.Model {
  requestId: string;
  isTrigger: number;
  pageBean: SearchEventsResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isTrigger: 'IsTrigger',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isTrigger: 'number',
      pageBean: SearchEventsResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertHistoriesRequest extends $tea.Model {
  proxyUserId?: string;
  alertId?: number;
  alertType?: number;
  currentPage?: number;
  pageSize?: number;
  regionId: string;
  startTime?: number;
  endTime?: number;
  static names(): { [key: string]: string } {
    return {
      proxyUserId: 'ProxyUserId',
      alertId: 'AlertId',
      alertType: 'AlertType',
      currentPage: 'CurrentPage',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      proxyUserId: 'string',
      alertId: 'number',
      alertType: 'number',
      currentPage: 'number',
      pageSize: 'number',
      regionId: 'string',
      startTime: 'number',
      endTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertHistoriesResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchAlertHistoriesResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchAlertHistoriesResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertContactRequest extends $tea.Model {
  contactName?: string;
  phoneNum?: string;
  email?: string;
  dingRobotWebhookUrl?: string;
  systemNoc?: boolean;
  regionId: string;
  proxyUserId?: string;
  contactId: number;
  static names(): { [key: string]: string } {
    return {
      contactName: 'ContactName',
      phoneNum: 'PhoneNum',
      email: 'Email',
      dingRobotWebhookUrl: 'DingRobotWebhookUrl',
      systemNoc: 'SystemNoc',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      contactId: 'ContactId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactName: 'string',
      phoneNum: 'string',
      email: 'string',
      dingRobotWebhookUrl: 'string',
      systemNoc: 'boolean',
      regionId: 'string',
      proxyUserId: 'string',
      contactId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertContactResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertContactGroupRequest extends $tea.Model {
  regionId: string;
  proxyUserId?: string;
  contactGroupId: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      contactGroupId: 'ContactGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      proxyUserId: 'string',
      contactGroupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertContactGroupResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertContactRequest extends $tea.Model {
  regionId: string;
  proxyUserId?: string;
  contactId: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      contactId: 'ContactId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      proxyUserId: 'string',
      contactId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertContactResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertContactGroupRequest extends $tea.Model {
  contactGroupName: string;
  contactIds?: string;
  regionId: string;
  proxyUserId?: string;
  contactGroupId: number;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
      contactIds: 'ContactIds',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      contactGroupId: 'ContactGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
      contactIds: 'string',
      regionId: 'string',
      proxyUserId: 'string',
      contactGroupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAlertContactGroupResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportCustomAlertRulesRequest extends $tea.Model {
  regionId: string;
  contactGroupIds?: string;
  isAutoStart?: boolean;
  templageAlertConfig?: string;
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      contactGroupIds: 'ContactGroupIds',
      isAutoStart: 'IsAutoStart',
      templageAlertConfig: 'TemplageAlertConfig',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      contactGroupIds: 'string',
      isAutoStart: 'boolean',
      templageAlertConfig: 'string',
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportCustomAlertRulesResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesRequest extends $tea.Model {
  proxyUserId?: string;
  title?: string;
  type?: string;
  currentPage?: number;
  pageSize?: number;
  regionId: string;
  pid?: string;
  appType?: string;
  static names(): { [key: string]: string } {
    return {
      proxyUserId: 'ProxyUserId',
      title: 'Title',
      type: 'Type',
      currentPage: 'CurrentPage',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      pid: 'Pid',
      appType: 'AppType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      proxyUserId: 'string',
      title: 'string',
      type: 'string',
      currentPage: 'number',
      pageSize: 'number',
      regionId: 'string',
      pid: 'string',
      appType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchAlertRulesResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchAlertRulesResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertRulesRequest extends $tea.Model {
  alertIds: string;
  proxyUserId?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      alertIds: 'AlertIds',
      proxyUserId: 'ProxyUserId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertIds: 'string',
      proxyUserId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAlertRulesResponse extends $tea.Model {
  requestId: string;
  isSuccess: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isSuccess: 'IsSuccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isSuccess: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRetcodeAppRequest extends $tea.Model {
  retcodeAppName: string;
  retcodeAppType: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      retcodeAppName: 'RetcodeAppName',
      retcodeAppType: 'RetcodeAppType',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      retcodeAppName: 'string',
      retcodeAppType: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRetcodeAppResponse extends $tea.Model {
  requestId: string;
  retcodeAppDataBean: CreateRetcodeAppResponseRetcodeAppDataBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      retcodeAppDataBean: 'RetcodeAppDataBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      retcodeAppDataBean: CreateRetcodeAppResponseRetcodeAppDataBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRetcodeAppRequest extends $tea.Model {
  appId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteRetcodeAppResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDatasetRequest extends $tea.Model {
  datasetId: number;
  intervalInSec: number;
  dateStr?: string;
  minTime: number;
  maxTime: number;
  isDrillDown?: boolean;
  orderByKey?: string;
  limit?: number;
  reduceTail?: boolean;
  hungryMode?: boolean;
  measures?: string[];
  dimensions?: QueryDatasetRequestDimensions[];
  requiredDims?: QueryDatasetRequestRequiredDims[];
  optionalDims?: QueryDatasetRequestOptionalDims[];
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      datasetId: 'DatasetId',
      intervalInSec: 'IntervalInSec',
      dateStr: 'DateStr',
      minTime: 'MinTime',
      maxTime: 'MaxTime',
      isDrillDown: 'IsDrillDown',
      orderByKey: 'OrderByKey',
      limit: 'Limit',
      reduceTail: 'ReduceTail',
      hungryMode: 'HungryMode',
      measures: 'Measures',
      dimensions: 'Dimensions',
      requiredDims: 'RequiredDims',
      optionalDims: 'OptionalDims',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      datasetId: 'number',
      intervalInSec: 'number',
      dateStr: 'string',
      minTime: 'number',
      maxTime: 'number',
      isDrillDown: 'boolean',
      orderByKey: 'string',
      limit: 'number',
      reduceTail: 'boolean',
      hungryMode: 'boolean',
      measures: { 'type': 'array', 'itemType': 'string' },
      dimensions: { 'type': 'array', 'itemType': QueryDatasetRequestDimensions },
      requiredDims: { 'type': 'array', 'itemType': QueryDatasetRequestRequiredDims },
      optionalDims: { 'type': 'array', 'itemType': QueryDatasetRequestOptionalDims },
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDatasetResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMetricRequest extends $tea.Model {
  intervalInSec?: number;
  startTime: number;
  endTime: number;
  orderBy?: string;
  limit?: number;
  filters?: QueryMetricRequestFilters[];
  dimensions?: string[];
  metric: string;
  measures: string[];
  order?: string;
  proxyUserId?: string;
  consistencyDataKey?: string;
  consistencyQueryStrategy?: string;
  static names(): { [key: string]: string } {
    return {
      intervalInSec: 'IntervalInSec',
      startTime: 'StartTime',
      endTime: 'EndTime',
      orderBy: 'OrderBy',
      limit: 'Limit',
      filters: 'Filters',
      dimensions: 'Dimensions',
      metric: 'Metric',
      measures: 'Measures',
      order: 'Order',
      proxyUserId: 'ProxyUserId',
      consistencyDataKey: 'ConsistencyDataKey',
      consistencyQueryStrategy: 'ConsistencyQueryStrategy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      intervalInSec: 'number',
      startTime: 'number',
      endTime: 'number',
      orderBy: 'string',
      limit: 'number',
      filters: { 'type': 'array', 'itemType': QueryMetricRequestFilters },
      dimensions: { 'type': 'array', 'itemType': 'string' },
      metric: 'string',
      measures: { 'type': 'array', 'itemType': 'string' },
      order: 'string',
      proxyUserId: 'string',
      consistencyDataKey: 'string',
      consistencyQueryStrategy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMetricResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAlertContactRequest extends $tea.Model {
  contactName?: string;
  phoneNum?: string;
  email?: string;
  dingRobotWebhookUrl?: string;
  systemNoc?: boolean;
  regionId: string;
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      contactName: 'ContactName',
      phoneNum: 'PhoneNum',
      email: 'Email',
      dingRobotWebhookUrl: 'DingRobotWebhookUrl',
      systemNoc: 'SystemNoc',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactName: 'string',
      phoneNum: 'string',
      email: 'string',
      dingRobotWebhookUrl: 'string',
      systemNoc: 'boolean',
      regionId: 'string',
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAlertContactResponse extends $tea.Model {
  requestId: string;
  contactId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      contactId: 'ContactId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      contactId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAlertContactGroupRequest extends $tea.Model {
  contactGroupName: string;
  contactIds?: string;
  regionId: string;
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
      contactIds: 'ContactIds',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
      contactIds: 'string',
      regionId: 'string',
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAlertContactGroupResponse extends $tea.Model {
  requestId: string;
  contactGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      contactGroupId: 'ContactGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      contactGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactRequest extends $tea.Model {
  contactName?: string;
  phone?: string;
  email?: string;
  currentPage: string;
  pageSize: string;
  regionId: string;
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      contactName: 'ContactName',
      phone: 'Phone',
      email: 'Email',
      currentPage: 'CurrentPage',
      pageSize: 'PageSize',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactName: 'string',
      phone: 'string',
      email: 'string',
      currentPage: 'string',
      pageSize: 'string',
      regionId: 'string',
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchAlertContactResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchAlertContactResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactGroupRequest extends $tea.Model {
  contactGroupName?: string;
  regionId: string;
  proxyUserId?: string;
  contactName?: string;
  contactId?: number;
  static names(): { [key: string]: string } {
    return {
      contactGroupName: 'ContactGroupName',
      regionId: 'RegionId',
      proxyUserId: 'ProxyUserId',
      contactName: 'ContactName',
      contactId: 'ContactId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupName: 'string',
      regionId: 'string',
      proxyUserId: 'string',
      contactName: 'string',
      contactId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactGroupResponse extends $tea.Model {
  requestId: string;
  contactGroups: SearchAlertContactGroupResponseContactGroups[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      contactGroups: 'ContactGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      contactGroups: { 'type': 'array', 'itemType': SearchAlertContactGroupResponseContactGroups },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportAppAlertRulesRequest extends $tea.Model {
  templateAlertId?: string;
  pids: string;
  regionId: string;
  contactGroupIds?: string;
  isAutoStart?: boolean;
  templageAlertConfig?: string;
  proxyUserId?: string;
  static names(): { [key: string]: string } {
    return {
      templateAlertId: 'TemplateAlertId',
      pids: 'Pids',
      regionId: 'RegionId',
      contactGroupIds: 'ContactGroupIds',
      isAutoStart: 'IsAutoStart',
      templageAlertConfig: 'TemplageAlertConfig',
      proxyUserId: 'ProxyUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateAlertId: 'string',
      pids: 'string',
      regionId: 'string',
      contactGroupIds: 'string',
      isAutoStart: 'boolean',
      templageAlertConfig: 'string',
      proxyUserId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportAppAlertRulesResponse extends $tea.Model {
  requestId: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchRetcodeAppByPageRequest extends $tea.Model {
  retcodeAppName?: string;
  pageNumber?: number;
  pageSize?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      retcodeAppName: 'RetcodeAppName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      retcodeAppName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchRetcodeAppByPageResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchRetcodeAppByPageResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchRetcodeAppByPageResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByNameRequest extends $tea.Model {
  traceAppName?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      traceAppName: 'TraceAppName',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceAppName: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByNameResponse extends $tea.Model {
  requestId: string;
  traceApps: SearchTraceAppByNameResponseTraceApps[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      traceApps: 'TraceApps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      traceApps: { 'type': 'array', 'itemType': SearchTraceAppByNameResponseTraceApps },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByPageRequest extends $tea.Model {
  traceAppName?: string;
  pageNumber?: number;
  pageSize?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      traceAppName: 'TraceAppName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceAppName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByPageResponse extends $tea.Model {
  requestId: string;
  pageBean: SearchTraceAppByPageResponsePageBean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageBean: 'PageBean',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageBean: SearchTraceAppByPageResponsePageBean,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRetcodeAppsRequest extends $tea.Model {
  securityToken?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      securityToken: 'SecurityToken',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityToken: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRetcodeAppsResponse extends $tea.Model {
  requestId: string;
  retcodeApps: ListRetcodeAppsResponseRetcodeApps[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      retcodeApps: 'RetcodeApps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      retcodeApps: { 'type': 'array', 'itemType': ListRetcodeAppsResponseRetcodeApps },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTraceAppsRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTraceAppsResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  code: number;
  message: string;
  traceApps: ListTraceAppsResponseTraceApps[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
      code: 'Code',
      message: 'Message',
      traceApps: 'TraceApps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
      code: 'number',
      message: 'string',
      traceApps: { 'type': 'array', 'itemType': ListTraceAppsResponseTraceApps },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList extends $tea.Model {
  timestamp: number;
  tagEntryList: GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList[];
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      tagEntryList: 'TagEntryList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'number',
      tagEntryList: { 'type': 'array', 'itemType': GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponseMultiCallChainInfosSpans extends $tea.Model {
  traceID: string;
  operationName: string;
  duration: number;
  serviceName: string;
  serviceIp: string;
  timestamp: number;
  rpcId: string;
  resultCode: string;
  haveStack: boolean;
  rpcType: number;
  tagEntryList: GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList[];
  logEventList: GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList[];
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      operationName: 'OperationName',
      duration: 'Duration',
      serviceName: 'ServiceName',
      serviceIp: 'ServiceIp',
      timestamp: 'Timestamp',
      rpcId: 'RpcId',
      resultCode: 'ResultCode',
      haveStack: 'HaveStack',
      rpcType: 'RpcType',
      tagEntryList: 'TagEntryList',
      logEventList: 'LogEventList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      operationName: 'string',
      duration: 'number',
      serviceName: 'string',
      serviceIp: 'string',
      timestamp: 'number',
      rpcId: 'string',
      resultCode: 'string',
      haveStack: 'boolean',
      rpcType: 'number',
      tagEntryList: { 'type': 'array', 'itemType': GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList },
      logEventList: { 'type': 'array', 'itemType': GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMultipleTraceResponseMultiCallChainInfos extends $tea.Model {
  traceID: string;
  spans: GetMultipleTraceResponseMultiCallChainInfosSpans[];
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      spans: 'Spans',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      spans: { 'type': 'array', 'itemType': GetMultipleTraceResponseMultiCallChainInfosSpans },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesByPageRequestExclusionFilters extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesByPageResponsePageBeanTraceInfos extends $tea.Model {
  traceID: string;
  operationName: string;
  serviceName: string;
  serviceIp: string;
  duration: number;
  timestamp: number;
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      operationName: 'OperationName',
      serviceName: 'ServiceName',
      serviceIp: 'ServiceIp',
      duration: 'Duration',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      operationName: 'string',
      serviceName: 'string',
      serviceIp: 'string',
      duration: 'number',
      timestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesByPageResponsePageBean extends $tea.Model {
  total: number;
  pageNumber: number;
  pageSize: number;
  traceInfos: SearchTracesByPageResponsePageBeanTraceInfos[];
  static names(): { [key: string]: string } {
    return {
      total: 'Total',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      traceInfos: 'TraceInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      total: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      traceInfos: { 'type': 'array', 'itemType': SearchTracesByPageResponsePageBeanTraceInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResponseStackInfoExtInfo extends $tea.Model {
  type: string;
  info: string;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      info: 'Info',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      info: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetStackResponseStackInfo extends $tea.Model {
  startTime: number;
  duration: number;
  rpcId: string;
  serviceName: string;
  api: string;
  exception: string;
  line: string;
  extInfo: GetStackResponseStackInfoExtInfo[];
  static names(): { [key: string]: string } {
    return {
      startTime: 'StartTime',
      duration: 'Duration',
      rpcId: 'RpcId',
      serviceName: 'ServiceName',
      api: 'Api',
      exception: 'Exception',
      line: 'Line',
      extInfo: 'ExtInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startTime: 'number',
      duration: 'number',
      rpcId: 'string',
      serviceName: 'string',
      api: 'string',
      exception: 'string',
      line: 'string',
      extInfo: { 'type': 'array', 'itemType': GetStackResponseStackInfoExtInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTraceLocationResponseRegionConfigs extends $tea.Model {
  regionNo: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      regionNo: 'RegionNo',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionNo: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckServiceLinkedRoleForDeletingResponseRoleUsages extends $tea.Model {
  region: string;
  resources: string[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
      resources: 'Resources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
      resources: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListDashboardsResponseDashboardVos extends $tea.Model {
  id: string;
  uid: string;
  title: string;
  time: string;
  url: string;
  type: string;
  exporter: string;
  isArmsExporter: boolean;
  tags: string[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      uid: 'Uid',
      title: 'Title',
      time: 'Time',
      url: 'Url',
      type: 'Type',
      exporter: 'Exporter',
      isArmsExporter: 'IsArmsExporter',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'string',
      uid: 'string',
      title: 'string',
      time: 'string',
      url: 'string',
      type: 'string',
      exporter: 'string',
      isArmsExporter: 'boolean',
      tags: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceResponseSpansTagEntryList extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceResponseSpansLogEventListTagEntryList extends $tea.Model {
  key: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceResponseSpansLogEventList extends $tea.Model {
  timestamp: number;
  tagEntryList: GetTraceResponseSpansLogEventListTagEntryList[];
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      tagEntryList: 'TagEntryList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'number',
      tagEntryList: { 'type': 'array', 'itemType': GetTraceResponseSpansLogEventListTagEntryList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTraceResponseSpans extends $tea.Model {
  traceID: string;
  operationName: string;
  duration: number;
  serviceName: string;
  serviceIp: string;
  timestamp: number;
  rpcId: string;
  resultCode: string;
  haveStack: boolean;
  rpcType: number;
  tagEntryList: GetTraceResponseSpansTagEntryList[];
  logEventList: GetTraceResponseSpansLogEventList[];
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      operationName: 'OperationName',
      duration: 'Duration',
      serviceName: 'ServiceName',
      serviceIp: 'ServiceIp',
      timestamp: 'Timestamp',
      rpcId: 'RpcId',
      resultCode: 'ResultCode',
      haveStack: 'HaveStack',
      rpcType: 'RpcType',
      tagEntryList: 'TagEntryList',
      logEventList: 'LogEventList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      operationName: 'string',
      duration: 'number',
      serviceName: 'string',
      serviceIp: 'string',
      timestamp: 'number',
      rpcId: 'string',
      resultCode: 'string',
      haveStack: 'boolean',
      rpcType: 'number',
      tagEntryList: { 'type': 'array', 'itemType': GetTraceResponseSpansTagEntryList },
      logEventList: { 'type': 'array', 'itemType': GetTraceResponseSpansLogEventList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListClusterFromGrafanaResponsePromClusterList extends $tea.Model {
  id: number;
  clusterId: string;
  clusterName: string;
  agentStatus: string;
  clusterType: string;
  controllerId: string;
  isControllerInstalled: boolean;
  userId: string;
  regionId: string;
  pluginsJsonArray: string;
  stateJson: string;
  nodeNum: number;
  createTime: number;
  updateTime: number;
  lastHeartBeatTime: number;
  installTime: number;
  extra: string;
  options: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      clusterId: 'ClusterId',
      clusterName: 'ClusterName',
      agentStatus: 'AgentStatus',
      clusterType: 'ClusterType',
      controllerId: 'ControllerId',
      isControllerInstalled: 'IsControllerInstalled',
      userId: 'UserId',
      regionId: 'RegionId',
      pluginsJsonArray: 'PluginsJsonArray',
      stateJson: 'StateJson',
      nodeNum: 'NodeNum',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      lastHeartBeatTime: 'LastHeartBeatTime',
      installTime: 'InstallTime',
      extra: 'Extra',
      options: 'Options',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      clusterId: 'string',
      clusterName: 'string',
      agentStatus: 'string',
      clusterType: 'string',
      controllerId: 'string',
      isControllerInstalled: 'boolean',
      userId: 'string',
      regionId: 'string',
      pluginsJsonArray: 'string',
      stateJson: 'string',
      nodeNum: 'number',
      createTime: 'number',
      updateTime: 'number',
      lastHeartBeatTime: 'number',
      installTime: 'number',
      extra: 'string',
      options: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesRequestExclusionFilters extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTracesResponseTraceInfos extends $tea.Model {
  traceID: string;
  operationName: string;
  serviceName: string;
  serviceIp: string;
  duration: number;
  timestamp: number;
  static names(): { [key: string]: string } {
    return {
      traceID: 'TraceID',
      operationName: 'OperationName',
      serviceName: 'ServiceName',
      serviceIp: 'ServiceIp',
      duration: 'Duration',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      traceID: 'string',
      operationName: 'string',
      serviceName: 'string',
      serviceIp: 'string',
      duration: 'number',
      timestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListPromClustersResponsePromClusterList extends $tea.Model {
  id: number;
  clusterId: string;
  clusterName: string;
  agentStatus: string;
  clusterType: string;
  controllerId: string;
  isControllerInstalled: boolean;
  userId: string;
  regionId: string;
  pluginsJsonArray: string;
  stateJson: string;
  nodeNum: number;
  createTime: number;
  updateTime: number;
  lastHeartBeatTime: number;
  installTime: number;
  extra: string;
  options: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      clusterId: 'ClusterId',
      clusterName: 'ClusterName',
      agentStatus: 'AgentStatus',
      clusterType: 'ClusterType',
      controllerId: 'ControllerId',
      isControllerInstalled: 'IsControllerInstalled',
      userId: 'UserId',
      regionId: 'RegionId',
      pluginsJsonArray: 'PluginsJsonArray',
      stateJson: 'StateJson',
      nodeNum: 'NodeNum',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      lastHeartBeatTime: 'LastHeartBeatTime',
      installTime: 'InstallTime',
      extra: 'Extra',
      options: 'Options',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      clusterId: 'string',
      clusterName: 'string',
      agentStatus: 'string',
      clusterType: 'string',
      controllerId: 'string',
      isControllerInstalled: 'boolean',
      userId: 'string',
      regionId: 'string',
      pluginsJsonArray: 'string',
      stateJson: 'string',
      nodeNum: 'number',
      createTime: 'number',
      updateTime: 'number',
      lastHeartBeatTime: 'number',
      installTime: 'number',
      extra: 'string',
      options: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEventsResponsePageBeanEvent extends $tea.Model {
  id: number;
  eventTime: number;
  alertType: number;
  eventLevel: number;
  message: string;
  alertId: number;
  alertName: string;
  alertRule: string;
  links: string[];
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      eventTime: 'EventTime',
      alertType: 'AlertType',
      eventLevel: 'EventLevel',
      message: 'Message',
      alertId: 'AlertId',
      alertName: 'AlertName',
      alertRule: 'AlertRule',
      links: 'Links',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      eventTime: 'number',
      alertType: 'number',
      eventLevel: 'number',
      message: 'string',
      alertId: 'number',
      alertName: 'string',
      alertRule: 'string',
      links: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEventsResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  event: SearchEventsResponsePageBeanEvent[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      event: 'Event',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      event: { 'type': 'array', 'itemType': SearchEventsResponsePageBeanEvent },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertHistoriesResponsePageBeanAlarmHistories extends $tea.Model {
  id: number;
  strategyId: string;
  userId: string;
  target: string;
  phones: string;
  emails: string;
  alarmTime: number;
  alarmType: number;
  alarmResponseCode: number;
  alarmContent: string;
  alarmSources: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      strategyId: 'StrategyId',
      userId: 'UserId',
      target: 'Target',
      phones: 'Phones',
      emails: 'Emails',
      alarmTime: 'AlarmTime',
      alarmType: 'AlarmType',
      alarmResponseCode: 'AlarmResponseCode',
      alarmContent: 'AlarmContent',
      alarmSources: 'AlarmSources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      strategyId: 'string',
      userId: 'string',
      target: 'string',
      phones: 'string',
      emails: 'string',
      alarmTime: 'number',
      alarmType: 'number',
      alarmResponseCode: 'number',
      alarmContent: 'string',
      alarmSources: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertHistoriesResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  alarmHistories: SearchAlertHistoriesResponsePageBeanAlarmHistories[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      alarmHistories: 'AlarmHistories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      alarmHistories: { 'type': 'array', 'itemType': SearchAlertHistoriesResponsePageBeanAlarmHistories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesAlarmContext extends $tea.Model {
  alarmContentTemplate: string;
  alarmContentSubTitle: string;
  static names(): { [key: string]: string } {
    return {
      alarmContentTemplate: 'AlarmContentTemplate',
      alarmContentSubTitle: 'AlarmContentSubTitle',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alarmContentTemplate: 'string',
      alarmContentSubTitle: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules extends $tea.Model {
  aggregates: string;
  alias: string;
  measure: string;
  NValue: number;
  operator: string;
  value: number;
  static names(): { [key: string]: string } {
    return {
      aggregates: 'Aggregates',
      alias: 'Alias',
      measure: 'Measure',
      NValue: 'NValue',
      operator: 'Operator',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      aggregates: 'string',
      alias: 'string',
      measure: 'string',
      NValue: 'number',
      operator: 'string',
      value: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesAlertRule extends $tea.Model {
  operator: string;
  rules: SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules[];
  static names(): { [key: string]: string } {
    return {
      operator: 'Operator',
      rules: 'Rules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      operator: 'string',
      rules: { 'type': 'array', 'itemType': SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions extends $tea.Model {
  key: string;
  type: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      type: 'Type',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      type: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesMetricParam extends $tea.Model {
  appGroupId: string;
  appId: string;
  pid: string;
  type: string;
  dimensions: SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions[];
  static names(): { [key: string]: string } {
    return {
      appGroupId: 'AppGroupId',
      appId: 'AppId',
      pid: 'Pid',
      type: 'Type',
      dimensions: 'Dimensions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appGroupId: 'string',
      appId: 'string',
      pid: 'string',
      type: 'string',
      dimensions: { 'type': 'array', 'itemType': SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRulesNotice extends $tea.Model {
  endTime: number;
  noticeEndTime: number;
  noticeStartTime: number;
  startTime: number;
  static names(): { [key: string]: string } {
    return {
      endTime: 'EndTime',
      noticeEndTime: 'NoticeEndTime',
      noticeStartTime: 'NoticeStartTime',
      startTime: 'StartTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      endTime: 'number',
      noticeEndTime: 'number',
      noticeStartTime: 'number',
      startTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBeanAlertRules extends $tea.Model {
  alertTitle: string;
  alertLevel: string;
  alertType: number;
  alertVersion: number;
  config: string;
  contactGroupIdList: string;
  createTime: number;
  id: number;
  regionId: string;
  status: string;
  taskId: number;
  taskStatus: string;
  updateTime: number;
  userId: string;
  alarmContext: SearchAlertRulesResponsePageBeanAlertRulesAlarmContext;
  alertRule: SearchAlertRulesResponsePageBeanAlertRulesAlertRule;
  metricParam: SearchAlertRulesResponsePageBeanAlertRulesMetricParam;
  notice: SearchAlertRulesResponsePageBeanAlertRulesNotice;
  alertWays: string[];
  static names(): { [key: string]: string } {
    return {
      alertTitle: 'AlertTitle',
      alertLevel: 'AlertLevel',
      alertType: 'AlertType',
      alertVersion: 'AlertVersion',
      config: 'Config',
      contactGroupIdList: 'ContactGroupIdList',
      createTime: 'CreateTime',
      id: 'Id',
      regionId: 'RegionId',
      status: 'Status',
      taskId: 'TaskId',
      taskStatus: 'TaskStatus',
      updateTime: 'UpdateTime',
      userId: 'UserId',
      alarmContext: 'AlarmContext',
      alertRule: 'AlertRule',
      metricParam: 'MetricParam',
      notice: 'Notice',
      alertWays: 'AlertWays',
    };
  }

  static types(): { [key: string]: any } {
    return {
      alertTitle: 'string',
      alertLevel: 'string',
      alertType: 'number',
      alertVersion: 'number',
      config: 'string',
      contactGroupIdList: 'string',
      createTime: 'number',
      id: 'number',
      regionId: 'string',
      status: 'string',
      taskId: 'number',
      taskStatus: 'string',
      updateTime: 'number',
      userId: 'string',
      alarmContext: SearchAlertRulesResponsePageBeanAlertRulesAlarmContext,
      alertRule: SearchAlertRulesResponsePageBeanAlertRulesAlertRule,
      metricParam: SearchAlertRulesResponsePageBeanAlertRulesMetricParam,
      notice: SearchAlertRulesResponsePageBeanAlertRulesNotice,
      alertWays: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertRulesResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  alertRules: SearchAlertRulesResponsePageBeanAlertRules[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      alertRules: 'AlertRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      alertRules: { 'type': 'array', 'itemType': SearchAlertRulesResponsePageBeanAlertRules },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateRetcodeAppResponseRetcodeAppDataBean extends $tea.Model {
  appId: number;
  pid: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDatasetRequestDimensions extends $tea.Model {
  key?: string;
  value?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDatasetRequestRequiredDims extends $tea.Model {
  key?: string;
  value?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryDatasetRequestOptionalDims extends $tea.Model {
  key?: string;
  value?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class QueryMetricRequestFilters extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactResponsePageBeanContacts extends $tea.Model {
  contactId: number;
  contactName: string;
  phone: string;
  email: string;
  userId: string;
  dingRobot: string;
  createTime: number;
  updateTime: number;
  systemNoc: boolean;
  static names(): { [key: string]: string } {
    return {
      contactId: 'ContactId',
      contactName: 'ContactName',
      phone: 'Phone',
      email: 'Email',
      userId: 'UserId',
      dingRobot: 'DingRobot',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      systemNoc: 'SystemNoc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactId: 'number',
      contactName: 'string',
      phone: 'string',
      email: 'string',
      userId: 'string',
      dingRobot: 'string',
      createTime: 'number',
      updateTime: 'number',
      systemNoc: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  contacts: SearchAlertContactResponsePageBeanContacts[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      contacts: 'Contacts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      contacts: { 'type': 'array', 'itemType': SearchAlertContactResponsePageBeanContacts },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchAlertContactGroupResponseContactGroups extends $tea.Model {
  contactGroupId: number;
  contactGroupName: string;
  userId: string;
  createTime: number;
  updateTime: number;
  static names(): { [key: string]: string } {
    return {
      contactGroupId: 'ContactGroupId',
      contactGroupName: 'ContactGroupName',
      userId: 'UserId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      contactGroupId: 'number',
      contactGroupName: 'string',
      userId: 'string',
      createTime: 'number',
      updateTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchRetcodeAppByPageResponsePageBeanRetcodeApps extends $tea.Model {
  appId: number;
  pid: string;
  appName: string;
  type: string;
  userId: string;
  regionId: string;
  createTime: number;
  updateTime: number;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
      appName: 'AppName',
      type: 'Type',
      userId: 'UserId',
      regionId: 'RegionId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
      appName: 'string',
      type: 'string',
      userId: 'string',
      regionId: 'string',
      createTime: 'number',
      updateTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchRetcodeAppByPageResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  retcodeApps: SearchRetcodeAppByPageResponsePageBeanRetcodeApps[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      retcodeApps: 'RetcodeApps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      retcodeApps: { 'type': 'array', 'itemType': SearchRetcodeAppByPageResponsePageBeanRetcodeApps },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByNameResponseTraceApps extends $tea.Model {
  appId: number;
  pid: string;
  appName: string;
  type: string;
  userId: string;
  regionId: string;
  createTime: number;
  updateTime: number;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
      appName: 'AppName',
      type: 'Type',
      userId: 'UserId',
      regionId: 'RegionId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
      appName: 'string',
      type: 'string',
      userId: 'string',
      regionId: 'string',
      createTime: 'number',
      updateTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByPageResponsePageBeanTraceApps extends $tea.Model {
  appId: number;
  pid: string;
  appName: string;
  type: string;
  userId: string;
  regionId: string;
  createTime: number;
  updateTime: number;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
      appName: 'AppName',
      type: 'Type',
      userId: 'UserId',
      regionId: 'RegionId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
      appName: 'string',
      type: 'string',
      userId: 'string',
      regionId: 'string',
      createTime: 'number',
      updateTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchTraceAppByPageResponsePageBean extends $tea.Model {
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  traceApps: SearchTraceAppByPageResponsePageBeanTraceApps[];
  static names(): { [key: string]: string } {
    return {
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      traceApps: 'TraceApps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      traceApps: { 'type': 'array', 'itemType': SearchTraceAppByPageResponsePageBeanTraceApps },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListRetcodeAppsResponseRetcodeApps extends $tea.Model {
  appId: number;
  pid: string;
  appName: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
      appName: 'AppName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
      appName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTraceAppsResponseTraceApps extends $tea.Model {
  appId: number;
  pid: string;
  appName: string;
  type: string;
  userId: string;
  createTime: number;
  updateTime: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      pid: 'Pid',
      appName: 'AppName',
      type: 'Type',
      userId: 'UserId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'number',
      pid: 'string',
      appName: 'string',
      type: 'string',
      userId: 'string',
      createTime: 'number',
      updateTime: 'number',
      regionId: 'string',
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
      'ap-northeast-1': "arms.ap-southeast-1.aliyuncs.com",
      'ap-south-1': "arms.ap-southeast-1.aliyuncs.com",
      'ap-southeast-2': "arms.ap-southeast-1.aliyuncs.com",
      'ap-southeast-3': "arms.ap-southeast-1.aliyuncs.com",
      'ap-southeast-5': "arms.ap-southeast-1.aliyuncs.com",
      'cn-chengdu': "arms.aliyuncs.com",
      'cn-huhehaote': "arms.aliyuncs.com",
      'eu-central-1': "arms.ap-southeast-1.aliyuncs.com",
      'eu-west-1': "arms.ap-southeast-1.aliyuncs.com",
      'me-east-1': "arms.ap-southeast-1.aliyuncs.com",
      'us-east-1': "arms.ap-southeast-1.aliyuncs.com",
      'cn-hangzhou-finance': "arms.aliyuncs.com",
      'cn-shenzhen-finance-1': "arms.aliyuncs.com",
      'cn-shanghai-finance-1': "arms.aliyuncs.com",
      'cn-north-2-gov-1': "arms.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("arms", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async getMultipleTraceWithOptions(request: GetMultipleTraceRequest, runtime: $Util.RuntimeOptions): Promise<GetMultipleTraceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMultipleTraceResponse>(await this.doRequest("GetMultipleTrace", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetMultipleTraceResponse({}));
  }

  async getMultipleTrace(request: GetMultipleTraceRequest): Promise<GetMultipleTraceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMultipleTraceWithOptions(request, runtime);
  }

  async searchTracesByPageWithOptions(request: SearchTracesByPageRequest, runtime: $Util.RuntimeOptions): Promise<SearchTracesByPageResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchTracesByPageResponse>(await this.doRequest("SearchTracesByPage", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchTracesByPageResponse({}));
  }

  async searchTracesByPage(request: SearchTracesByPageRequest): Promise<SearchTracesByPageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchTracesByPageWithOptions(request, runtime);
  }

  async getStackWithOptions(request: GetStackRequest, runtime: $Util.RuntimeOptions): Promise<GetStackResponse> {
    Util.validateModel(request);
    return $tea.cast<GetStackResponse>(await this.doRequest("GetStack", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetStackResponse({}));
  }

  async getStack(request: GetStackRequest): Promise<GetStackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getStackWithOptions(request, runtime);
  }

  async describeTraceLocationWithOptions(request: DescribeTraceLocationRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTraceLocationResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTraceLocationResponse>(await this.doRequest("DescribeTraceLocation", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeTraceLocationResponse({}));
  }

  async describeTraceLocation(request: DescribeTraceLocationRequest): Promise<DescribeTraceLocationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTraceLocationWithOptions(request, runtime);
  }

  async deleteTraceAppWithOptions(request: DeleteTraceAppRequest, runtime: $Util.RuntimeOptions): Promise<DeleteTraceAppResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteTraceAppResponse>(await this.doRequest("DeleteTraceApp", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteTraceAppResponse({}));
  }

  async deleteTraceApp(request: DeleteTraceAppRequest): Promise<DeleteTraceAppResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteTraceAppWithOptions(request, runtime);
  }

  async describeTraceLicenseKeyWithOptions(request: DescribeTraceLicenseKeyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTraceLicenseKeyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTraceLicenseKeyResponse>(await this.doRequest("DescribeTraceLicenseKey", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DescribeTraceLicenseKeyResponse({}));
  }

  async describeTraceLicenseKey(request: DescribeTraceLicenseKeyRequest): Promise<DescribeTraceLicenseKeyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTraceLicenseKeyWithOptions(request, runtime);
  }

  async checkServiceLinkedRoleForDeletingWithOptions(request: CheckServiceLinkedRoleForDeletingRequest, runtime: $Util.RuntimeOptions): Promise<CheckServiceLinkedRoleForDeletingResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckServiceLinkedRoleForDeletingResponse>(await this.doRequest("CheckServiceLinkedRoleForDeleting", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new CheckServiceLinkedRoleForDeletingResponse({}));
  }

  async checkServiceLinkedRoleForDeleting(request: CheckServiceLinkedRoleForDeletingRequest): Promise<CheckServiceLinkedRoleForDeletingResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkServiceLinkedRoleForDeletingWithOptions(request, runtime);
  }

  async listDashboardsWithOptions(request: ListDashboardsRequest, runtime: $Util.RuntimeOptions): Promise<ListDashboardsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListDashboardsResponse>(await this.doRequest("ListDashboards", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ListDashboardsResponse({}));
  }

  async listDashboards(request: ListDashboardsRequest): Promise<ListDashboardsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listDashboardsWithOptions(request, runtime);
  }

  async getConsistencySnapshotWithOptions(request: GetConsistencySnapshotRequest, runtime: $Util.RuntimeOptions): Promise<GetConsistencySnapshotResponse> {
    Util.validateModel(request);
    return $tea.cast<GetConsistencySnapshotResponse>(await this.doRequest("GetConsistencySnapshot", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetConsistencySnapshotResponse({}));
  }

  async getConsistencySnapshot(request: GetConsistencySnapshotRequest): Promise<GetConsistencySnapshotResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getConsistencySnapshotWithOptions(request, runtime);
  }

  async checkDataConsistencyWithOptions(request: CheckDataConsistencyRequest, runtime: $Util.RuntimeOptions): Promise<CheckDataConsistencyResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckDataConsistencyResponse>(await this.doRequest("CheckDataConsistency", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new CheckDataConsistencyResponse({}));
  }

  async checkDataConsistency(request: CheckDataConsistencyRequest): Promise<CheckDataConsistencyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkDataConsistencyWithOptions(request, runtime);
  }

  async addGrafanaWithOptions(request: AddGrafanaRequest, runtime: $Util.RuntimeOptions): Promise<AddGrafanaResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGrafanaResponse>(await this.doRequest("AddGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new AddGrafanaResponse({}));
  }

  async addGrafana(request: AddGrafanaRequest): Promise<AddGrafanaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGrafanaWithOptions(request, runtime);
  }

  async addIntegrationWithOptions(request: AddIntegrationRequest, runtime: $Util.RuntimeOptions): Promise<AddIntegrationResponse> {
    Util.validateModel(request);
    return $tea.cast<AddIntegrationResponse>(await this.doRequest("AddIntegration", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new AddIntegrationResponse({}));
  }

  async addIntegration(request: AddIntegrationRequest): Promise<AddIntegrationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addIntegrationWithOptions(request, runtime);
  }

  async getTraceWithOptions(request: GetTraceRequest, runtime: $Util.RuntimeOptions): Promise<GetTraceResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTraceResponse>(await this.doRequest("GetTrace", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetTraceResponse({}));
  }

  async getTrace(request: GetTraceRequest): Promise<GetTraceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTraceWithOptions(request, runtime);
  }

  async listClusterFromGrafanaWithOptions(request: ListClusterFromGrafanaRequest, runtime: $Util.RuntimeOptions): Promise<ListClusterFromGrafanaResponse> {
    Util.validateModel(request);
    return $tea.cast<ListClusterFromGrafanaResponse>(await this.doRequest("ListClusterFromGrafana", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ListClusterFromGrafanaResponse({}));
  }

  async listClusterFromGrafana(request: ListClusterFromGrafanaRequest): Promise<ListClusterFromGrafanaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listClusterFromGrafanaWithOptions(request, runtime);
  }

  async searchTracesWithOptions(request: SearchTracesRequest, runtime: $Util.RuntimeOptions): Promise<SearchTracesResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchTracesResponse>(await this.doRequest("SearchTraces", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchTracesResponse({}));
  }

  async searchTraces(request: SearchTracesRequest): Promise<SearchTracesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchTracesWithOptions(request, runtime);
  }

  async getPrometheusApiTokenWithOptions(request: GetPrometheusApiTokenRequest, runtime: $Util.RuntimeOptions): Promise<GetPrometheusApiTokenResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPrometheusApiTokenResponse>(await this.doRequest("GetPrometheusApiToken", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetPrometheusApiTokenResponse({}));
  }

  async getPrometheusApiToken(request: GetPrometheusApiTokenRequest): Promise<GetPrometheusApiTokenResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPrometheusApiTokenWithOptions(request, runtime);
  }

  async setRetcodeShareStatusWithOptions(request: SetRetcodeShareStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetRetcodeShareStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetRetcodeShareStatusResponse>(await this.doRequest("SetRetcodeShareStatus", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SetRetcodeShareStatusResponse({}));
  }

  async setRetcodeShareStatus(request: SetRetcodeShareStatusRequest): Promise<SetRetcodeShareStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setRetcodeShareStatusWithOptions(request, runtime);
  }

  async getRetcodeShareUrlWithOptions(request: GetRetcodeShareUrlRequest, runtime: $Util.RuntimeOptions): Promise<GetRetcodeShareUrlResponse> {
    Util.validateModel(request);
    return $tea.cast<GetRetcodeShareUrlResponse>(await this.doRequest("GetRetcodeShareUrl", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new GetRetcodeShareUrlResponse({}));
  }

  async getRetcodeShareUrl(request: GetRetcodeShareUrlRequest): Promise<GetRetcodeShareUrlResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getRetcodeShareUrlWithOptions(request, runtime);
  }

  async listPromClustersWithOptions(request: ListPromClustersRequest, runtime: $Util.RuntimeOptions): Promise<ListPromClustersResponse> {
    Util.validateModel(request);
    return $tea.cast<ListPromClustersResponse>(await this.doRequest("ListPromClusters", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ListPromClustersResponse({}));
  }

  async listPromClusters(request: ListPromClustersRequest): Promise<ListPromClustersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listPromClustersWithOptions(request, runtime);
  }

  async updateAlertRuleWithOptions(request: UpdateAlertRuleRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAlertRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAlertRuleResponse>(await this.doRequest("UpdateAlertRule", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new UpdateAlertRuleResponse({}));
  }

  async updateAlertRule(request: UpdateAlertRuleRequest): Promise<UpdateAlertRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAlertRuleWithOptions(request, runtime);
  }

  async startAlertWithOptions(request: StartAlertRequest, runtime: $Util.RuntimeOptions): Promise<StartAlertResponse> {
    Util.validateModel(request);
    return $tea.cast<StartAlertResponse>(await this.doRequest("StartAlert", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new StartAlertResponse({}));
  }

  async startAlert(request: StartAlertRequest): Promise<StartAlertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startAlertWithOptions(request, runtime);
  }

  async stopAlertWithOptions(request: StopAlertRequest, runtime: $Util.RuntimeOptions): Promise<StopAlertResponse> {
    Util.validateModel(request);
    return $tea.cast<StopAlertResponse>(await this.doRequest("StopAlert", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new StopAlertResponse({}));
  }

  async stopAlert(request: StopAlertRequest): Promise<StopAlertResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopAlertWithOptions(request, runtime);
  }

  async searchEventsWithOptions(request: SearchEventsRequest, runtime: $Util.RuntimeOptions): Promise<SearchEventsResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchEventsResponse>(await this.doRequest("SearchEvents", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchEventsResponse({}));
  }

  async searchEvents(request: SearchEventsRequest): Promise<SearchEventsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchEventsWithOptions(request, runtime);
  }

  async searchAlertHistoriesWithOptions(request: SearchAlertHistoriesRequest, runtime: $Util.RuntimeOptions): Promise<SearchAlertHistoriesResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchAlertHistoriesResponse>(await this.doRequest("SearchAlertHistories", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchAlertHistoriesResponse({}));
  }

  async searchAlertHistories(request: SearchAlertHistoriesRequest): Promise<SearchAlertHistoriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchAlertHistoriesWithOptions(request, runtime);
  }

  async updateAlertContactWithOptions(request: UpdateAlertContactRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAlertContactResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAlertContactResponse>(await this.doRequest("UpdateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new UpdateAlertContactResponse({}));
  }

  async updateAlertContact(request: UpdateAlertContactRequest): Promise<UpdateAlertContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAlertContactWithOptions(request, runtime);
  }

  async deleteAlertContactGroupWithOptions(request: DeleteAlertContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAlertContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAlertContactGroupResponse>(await this.doRequest("DeleteAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteAlertContactGroupResponse({}));
  }

  async deleteAlertContactGroup(request: DeleteAlertContactGroupRequest): Promise<DeleteAlertContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAlertContactGroupWithOptions(request, runtime);
  }

  async deleteAlertContactWithOptions(request: DeleteAlertContactRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAlertContactResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAlertContactResponse>(await this.doRequest("DeleteAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteAlertContactResponse({}));
  }

  async deleteAlertContact(request: DeleteAlertContactRequest): Promise<DeleteAlertContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAlertContactWithOptions(request, runtime);
  }

  async updateAlertContactGroupWithOptions(request: UpdateAlertContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAlertContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAlertContactGroupResponse>(await this.doRequest("UpdateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new UpdateAlertContactGroupResponse({}));
  }

  async updateAlertContactGroup(request: UpdateAlertContactGroupRequest): Promise<UpdateAlertContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAlertContactGroupWithOptions(request, runtime);
  }

  async importCustomAlertRulesWithOptions(request: ImportCustomAlertRulesRequest, runtime: $Util.RuntimeOptions): Promise<ImportCustomAlertRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<ImportCustomAlertRulesResponse>(await this.doRequest("ImportCustomAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ImportCustomAlertRulesResponse({}));
  }

  async importCustomAlertRules(request: ImportCustomAlertRulesRequest): Promise<ImportCustomAlertRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.importCustomAlertRulesWithOptions(request, runtime);
  }

  async searchAlertRulesWithOptions(request: SearchAlertRulesRequest, runtime: $Util.RuntimeOptions): Promise<SearchAlertRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchAlertRulesResponse>(await this.doRequest("SearchAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchAlertRulesResponse({}));
  }

  async searchAlertRules(request: SearchAlertRulesRequest): Promise<SearchAlertRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchAlertRulesWithOptions(request, runtime);
  }

  async deleteAlertRulesWithOptions(request: DeleteAlertRulesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAlertRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAlertRulesResponse>(await this.doRequest("DeleteAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteAlertRulesResponse({}));
  }

  async deleteAlertRules(request: DeleteAlertRulesRequest): Promise<DeleteAlertRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAlertRulesWithOptions(request, runtime);
  }

  async createRetcodeAppWithOptions(request: CreateRetcodeAppRequest, runtime: $Util.RuntimeOptions): Promise<CreateRetcodeAppResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateRetcodeAppResponse>(await this.doRequest("CreateRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new CreateRetcodeAppResponse({}));
  }

  async createRetcodeApp(request: CreateRetcodeAppRequest): Promise<CreateRetcodeAppResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createRetcodeAppWithOptions(request, runtime);
  }

  async deleteRetcodeAppWithOptions(request: DeleteRetcodeAppRequest, runtime: $Util.RuntimeOptions): Promise<DeleteRetcodeAppResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteRetcodeAppResponse>(await this.doRequest("DeleteRetcodeApp", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new DeleteRetcodeAppResponse({}));
  }

  async deleteRetcodeApp(request: DeleteRetcodeAppRequest): Promise<DeleteRetcodeAppResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteRetcodeAppWithOptions(request, runtime);
  }

  async queryDatasetWithOptions(request: QueryDatasetRequest, runtime: $Util.RuntimeOptions): Promise<QueryDatasetResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryDatasetResponse>(await this.doRequest("QueryDataset", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new QueryDatasetResponse({}));
  }

  async queryDataset(request: QueryDatasetRequest): Promise<QueryDatasetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryDatasetWithOptions(request, runtime);
  }

  async queryMetricWithOptions(request: QueryMetricRequest, runtime: $Util.RuntimeOptions): Promise<QueryMetricResponse> {
    Util.validateModel(request);
    return $tea.cast<QueryMetricResponse>(await this.doRequest("QueryMetric", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new QueryMetricResponse({}));
  }

  async queryMetric(request: QueryMetricRequest): Promise<QueryMetricResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.queryMetricWithOptions(request, runtime);
  }

  async createAlertContactWithOptions(request: CreateAlertContactRequest, runtime: $Util.RuntimeOptions): Promise<CreateAlertContactResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAlertContactResponse>(await this.doRequest("CreateAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new CreateAlertContactResponse({}));
  }

  async createAlertContact(request: CreateAlertContactRequest): Promise<CreateAlertContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAlertContactWithOptions(request, runtime);
  }

  async createAlertContactGroupWithOptions(request: CreateAlertContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateAlertContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAlertContactGroupResponse>(await this.doRequest("CreateAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new CreateAlertContactGroupResponse({}));
  }

  async createAlertContactGroup(request: CreateAlertContactGroupRequest): Promise<CreateAlertContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAlertContactGroupWithOptions(request, runtime);
  }

  async searchAlertContactWithOptions(request: SearchAlertContactRequest, runtime: $Util.RuntimeOptions): Promise<SearchAlertContactResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchAlertContactResponse>(await this.doRequest("SearchAlertContact", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchAlertContactResponse({}));
  }

  async searchAlertContact(request: SearchAlertContactRequest): Promise<SearchAlertContactResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchAlertContactWithOptions(request, runtime);
  }

  async searchAlertContactGroupWithOptions(request: SearchAlertContactGroupRequest, runtime: $Util.RuntimeOptions): Promise<SearchAlertContactGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchAlertContactGroupResponse>(await this.doRequest("SearchAlertContactGroup", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchAlertContactGroupResponse({}));
  }

  async searchAlertContactGroup(request: SearchAlertContactGroupRequest): Promise<SearchAlertContactGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchAlertContactGroupWithOptions(request, runtime);
  }

  async importAppAlertRulesWithOptions(request: ImportAppAlertRulesRequest, runtime: $Util.RuntimeOptions): Promise<ImportAppAlertRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<ImportAppAlertRulesResponse>(await this.doRequest("ImportAppAlertRules", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ImportAppAlertRulesResponse({}));
  }

  async importAppAlertRules(request: ImportAppAlertRulesRequest): Promise<ImportAppAlertRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.importAppAlertRulesWithOptions(request, runtime);
  }

  async searchRetcodeAppByPageWithOptions(request: SearchRetcodeAppByPageRequest, runtime: $Util.RuntimeOptions): Promise<SearchRetcodeAppByPageResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchRetcodeAppByPageResponse>(await this.doRequest("SearchRetcodeAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchRetcodeAppByPageResponse({}));
  }

  async searchRetcodeAppByPage(request: SearchRetcodeAppByPageRequest): Promise<SearchRetcodeAppByPageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchRetcodeAppByPageWithOptions(request, runtime);
  }

  async searchTraceAppByNameWithOptions(request: SearchTraceAppByNameRequest, runtime: $Util.RuntimeOptions): Promise<SearchTraceAppByNameResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchTraceAppByNameResponse>(await this.doRequest("SearchTraceAppByName", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchTraceAppByNameResponse({}));
  }

  async searchTraceAppByName(request: SearchTraceAppByNameRequest): Promise<SearchTraceAppByNameResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchTraceAppByNameWithOptions(request, runtime);
  }

  async searchTraceAppByPageWithOptions(request: SearchTraceAppByPageRequest, runtime: $Util.RuntimeOptions): Promise<SearchTraceAppByPageResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchTraceAppByPageResponse>(await this.doRequest("SearchTraceAppByPage", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new SearchTraceAppByPageResponse({}));
  }

  async searchTraceAppByPage(request: SearchTraceAppByPageRequest): Promise<SearchTraceAppByPageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchTraceAppByPageWithOptions(request, runtime);
  }

  async listRetcodeAppsWithOptions(request: ListRetcodeAppsRequest, runtime: $Util.RuntimeOptions): Promise<ListRetcodeAppsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListRetcodeAppsResponse>(await this.doRequest("ListRetcodeApps", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ListRetcodeAppsResponse({}));
  }

  async listRetcodeApps(request: ListRetcodeAppsRequest): Promise<ListRetcodeAppsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listRetcodeAppsWithOptions(request, runtime);
  }

  async listTraceAppsWithOptions(request: ListTraceAppsRequest, runtime: $Util.RuntimeOptions): Promise<ListTraceAppsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTraceAppsResponse>(await this.doRequest("ListTraceApps", "HTTPS", "POST", "2019-08-08", "AK", null, $tea.toMap(request), runtime), new ListTraceAppsResponse({}));
  }

  async listTraceApps(request: ListTraceAppsRequest): Promise<ListTraceAppsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTraceAppsWithOptions(request, runtime);
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

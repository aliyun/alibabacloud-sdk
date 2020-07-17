// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DescribeDBClusterAuditLogCollectorRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAuditLogCollectorResponse extends $tea.Model {
  collectorStatus: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      collectorStatus: 'CollectorStatus',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      collectorStatus: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterAuditLogCollectorRequest extends $tea.Model {
  DBClusterId: string;
  collectorStatus: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      collectorStatus: 'CollectorStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      collectorStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterAuditLogCollectorResponse extends $tea.Model {
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

export class DescribeDetachedBackupsRequest extends $tea.Model {
  DBClusterId: string;
  backupId?: string;
  backupStatus?: string;
  backupMode?: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      backupId: 'BackupId',
      backupStatus: 'BackupStatus',
      backupMode: 'BackupMode',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      backupId: 'string',
      backupStatus: 'string',
      backupMode: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDetachedBackupsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: string;
  pageNumber: string;
  pageRecordCount: string;
  items: DescribeDetachedBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'string',
      pageNumber: 'string',
      pageRecordCount: 'string',
      items: DescribeDetachedBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersWithBackupsRequest extends $tea.Model {
  regionId: string;
  DBClusterIds?: string;
  DBClusterDescription?: string;
  DBType?: string;
  isDeleted?: number;
  pageSize?: number;
  pageNumber?: number;
  DBVersion?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      DBClusterIds: 'DBClusterIds',
      DBClusterDescription: 'DBClusterDescription',
      DBType: 'DBType',
      isDeleted: 'IsDeleted',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      DBVersion: 'DBVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      DBClusterIds: 'string',
      DBClusterDescription: 'string',
      DBType: 'string',
      isDeleted: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      DBVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersWithBackupsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBClustersWithBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      totalRecordCount: 'TotalRecordCount',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      totalRecordCount: 'number',
      pageRecordCount: 'number',
      items: DescribeDBClustersWithBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupPolicyRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupPolicyResponse extends $tea.Model {
  requestId: string;
  enableBackupLog: number;
  logBackupRetentionPeriod: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      enableBackupLog: 'EnableBackupLog',
      logBackupRetentionPeriod: 'LogBackupRetentionPeriod',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      enableBackupLog: 'number',
      logBackupRetentionPeriod: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLogBackupPolicyRequest extends $tea.Model {
  DBClusterId: string;
  logBackupRetentionPeriod?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      logBackupRetentionPeriod: 'LogBackupRetentionPeriod',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      logBackupRetentionPeriod: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLogBackupPolicyResponse extends $tea.Model {
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

export class ModifyDBClusterMonitorRequest extends $tea.Model {
  DBClusterId: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterMonitorResponse extends $tea.Model {
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

export class DescribeDBClusterMonitorRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMonitorResponse extends $tea.Model {
  period: string;
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      period: 'Period',
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      period: 'string',
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAvailableResourcesRequest extends $tea.Model {
  payType: string;
  DBType?: string;
  DBVersion?: string;
  DBNodeClass?: string;
  regionId?: string;
  zoneId?: string;
  static names(): { [key: string]: string } {
    return {
      payType: 'PayType',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      DBNodeClass: 'DBNodeClass',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      payType: 'string',
      DBType: 'string',
      DBVersion: 'string',
      DBNodeClass: 'string',
      regionId: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAvailableResourcesResponse extends $tea.Model {
  requestId: string;
  availableZones: DescribeDBClusterAvailableResourcesResponseAvailableZones[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      availableZones: 'AvailableZones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      availableZones: { 'type': 'array', 'itemType': DescribeDBClusterAvailableResourcesResponseAvailableZones },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupLogsRequest extends $tea.Model {
  DBClusterId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupLogsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: string;
  pageNumber: string;
  pageRecordCount: string;
  items: DescribeBackupLogsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'string',
      pageNumber: 'string',
      pageRecordCount: 'string',
      items: DescribeBackupLogsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterSSLRequest extends $tea.Model {
  DBClusterId: string;
  SSLEnabled: string;
  DBEndpointId?: string;
  netType?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      SSLEnabled: 'SSLEnabled',
      DBEndpointId: 'DBEndpointId',
      netType: 'NetType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      SSLEnabled: 'string',
      DBEndpointId: 'string',
      netType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterSSLResponse extends $tea.Model {
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

export class DescribeDBClusterSSLRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterSSLResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBClusterSSLResponseItems[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: { 'type': 'array', 'itemType': DescribeDBClusterSSLResponseItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  sourceRDSDBInstanceId: string;
  migrationStatus: string;
  topologies: string;
  delayedSeconds: number;
  expiredTime: string;
  rdsReadWriteMode: string;
  DBClusterReadWriteMode: string;
  comment: string;
  DBClusterEndpointList: DescribeDBClusterMigrationResponseDBClusterEndpointList[];
  rdsEndpointList: DescribeDBClusterMigrationResponseRdsEndpointList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      sourceRDSDBInstanceId: 'SourceRDSDBInstanceId',
      migrationStatus: 'MigrationStatus',
      topologies: 'Topologies',
      delayedSeconds: 'DelayedSeconds',
      expiredTime: 'ExpiredTime',
      rdsReadWriteMode: 'RdsReadWriteMode',
      DBClusterReadWriteMode: 'DBClusterReadWriteMode',
      comment: 'Comment',
      DBClusterEndpointList: 'DBClusterEndpointList',
      rdsEndpointList: 'RdsEndpointList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      sourceRDSDBInstanceId: 'string',
      migrationStatus: 'string',
      topologies: 'string',
      delayedSeconds: 'number',
      expiredTime: 'string',
      rdsReadWriteMode: 'string',
      DBClusterReadWriteMode: 'string',
      comment: 'string',
      DBClusterEndpointList: { 'type': 'array', 'itemType': DescribeDBClusterMigrationResponseDBClusterEndpointList },
      rdsEndpointList: { 'type': 'array', 'itemType': DescribeDBClusterMigrationResponseRdsEndpointList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloseDBClusterMigrationRequest extends $tea.Model {
  DBClusterId: string;
  continueEnableBinlog?: boolean;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      continueEnableBinlog: 'ContinueEnableBinlog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      continueEnableBinlog: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloseDBClusterMigrationResponse extends $tea.Model {
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

export class ModifyDBClusterMigrationRequest extends $tea.Model {
  securityToken?: string;
  DBClusterId: string;
  sourceRDSDBInstanceId: string;
  newMasterInstanceId: string;
  swapConnectionString?: string;
  static names(): { [key: string]: string } {
    return {
      securityToken: 'SecurityToken',
      DBClusterId: 'DBClusterId',
      sourceRDSDBInstanceId: 'SourceRDSDBInstanceId',
      newMasterInstanceId: 'NewMasterInstanceId',
      swapConnectionString: 'SwapConnectionString',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityToken: 'string',
      DBClusterId: 'string',
      sourceRDSDBInstanceId: 'string',
      newMasterInstanceId: 'string',
      swapConnectionString: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterMigrationResponse extends $tea.Model {
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

export class ModifyAutoRenewAttributeRequest extends $tea.Model {
  DBClusterIds: string;
  regionId: string;
  renewalStatus?: string;
  duration?: string;
  periodUnit?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterIds: 'DBClusterIds',
      regionId: 'RegionId',
      renewalStatus: 'RenewalStatus',
      duration: 'Duration',
      periodUnit: 'PeriodUnit',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterIds: 'string',
      regionId: 'string',
      renewalStatus: 'string',
      duration: 'string',
      periodUnit: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAutoRenewAttributeResponse extends $tea.Model {
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

export class ModifyDBNodeClassRequest extends $tea.Model {
  DBClusterId: string;
  modifyType: string;
  DBNodeTargetClass: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      modifyType: 'ModifyType',
      DBNodeTargetClass: 'DBNodeTargetClass',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      modifyType: 'string',
      DBNodeTargetClass: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBNodeClassResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoRenewAttributeRequest extends $tea.Model {
  regionId: string;
  DBClusterIds?: string;
  pageSize?: number;
  pageNumber?: number;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      DBClusterIds: 'DBClusterIds',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      DBClusterIds: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoRenewAttributeResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeAutoRenewAttributeResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      totalRecordCount: 'TotalRecordCount',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      totalRecordCount: 'number',
      pageRecordCount: 'number',
      items: DescribeAutoRenewAttributeResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBNodesRequest extends $tea.Model {
  DBClusterId: string;
  DBNode: CreateDBNodesRequestDBNode[];
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBNode: 'DBNode',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBNode: { 'type': 'array', 'itemType': CreateDBNodesRequestDBNode },
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBNodesResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  orderId: string;
  DBNodeIds: CreateDBNodesResponseDBNodeIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      orderId: 'OrderId',
      DBNodeIds: 'DBNodeIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      orderId: 'string',
      DBNodeIds: CreateDBNodesResponseDBNodeIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBNodesRequest extends $tea.Model {
  DBClusterId: string;
  DBNodeId: string[];
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBNodeId: 'DBNodeId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBNodeId: { 'type': 'array', 'itemType': 'string' },
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBNodesResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceType: string;
  resourceId: string[];
  tagKey?: string[];
  all?: boolean;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tagKey: 'TagKey',
      all: 'All',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tagKey: { 'type': 'array', 'itemType': 'string' },
      all: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourcesResponse extends $tea.Model {
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

export class TagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceType: string;
  resourceId: string[];
  tag: TagResourcesRequestTag[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tag: { 'type': 'array', 'itemType': TagResourcesRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesResponse extends $tea.Model {
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

export class ListTagResourcesRequest extends $tea.Model {
  regionId: string;
  resourceType: string;
  resourceId?: string[];
  tag?: ListTagResourcesRequestTag[];
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tag: 'Tag',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      resourceType: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tag: { 'type': 'array', 'itemType': ListTagResourcesRequestTag },
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  tagResources: ListTagResourcesResponseTagResources;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      tagResources: 'TagResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      tagResources: ListTagResourcesResponseTagResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBEndpointAddressRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId: string;
  netType: string;
  connectionStringPrefix?: string;
  privateZoneAddressPrefix?: string;
  privateZoneName?: string;
  port?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
      netType: 'NetType',
      connectionStringPrefix: 'ConnectionStringPrefix',
      privateZoneAddressPrefix: 'PrivateZoneAddressPrefix',
      privateZoneName: 'PrivateZoneName',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
      netType: 'string',
      connectionStringPrefix: 'string',
      privateZoneAddressPrefix: 'string',
      privateZoneName: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBEndpointAddressResponse extends $tea.Model {
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

export class ModifyDBDescriptionRequest extends $tea.Model {
  DBClusterId: string;
  DBName: string;
  DBDescription: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBName: 'DBName',
      DBDescription: 'DBDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBName: 'string',
      DBDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBDescriptionResponse extends $tea.Model {
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

export class ModifyDBClusterParametersRequest extends $tea.Model {
  DBClusterId: string;
  parameters: string;
  effectiveTime?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      parameters: 'Parameters',
      effectiveTime: 'EffectiveTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      parameters: 'string',
      effectiveTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterParametersResponse extends $tea.Model {
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

export class ModifyDBClusterEndpointRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId: string;
  nodes?: string;
  readWriteMode?: string;
  autoAddNewNodes?: string;
  endpointConfig?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
      nodes: 'Nodes',
      readWriteMode: 'ReadWriteMode',
      autoAddNewNodes: 'AutoAddNewNodes',
      endpointConfig: 'EndpointConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
      nodes: 'string',
      readWriteMode: 'string',
      autoAddNewNodes: 'string',
      endpointConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterEndpointResponse extends $tea.Model {
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

export class ModifyAccountPasswordRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  newAccountPassword: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      newAccountPassword: 'NewAccountPassword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      newAccountPassword: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccountPasswordResponse extends $tea.Model {
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

export class DescribeDBClusterPerformanceRequest extends $tea.Model {
  DBClusterId: string;
  key: string;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      key: 'Key',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      key: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterPerformanceResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  startTime: string;
  endTime: string;
  performanceKeys: DescribeDBClusterPerformanceResponsePerformanceKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      startTime: 'StartTime',
      endTime: 'EndTime',
      performanceKeys: 'PerformanceKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      startTime: 'string',
      endTime: 'string',
      performanceKeys: DescribeDBClusterPerformanceResponsePerformanceKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterParametersRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterParametersResponse extends $tea.Model {
  requestId: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  runningParameters: DescribeDBClusterParametersResponseRunningParameters;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      runningParameters: 'RunningParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      runningParameters: DescribeDBClusterParametersResponseRunningParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterEndpointsRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterEndpointsResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBClusterEndpointsResponseItems[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: { 'type': 'array', 'itemType': DescribeDBClusterEndpointsResponseItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBEndpointAddressRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId: string;
  netType: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
      netType: 'NetType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
      netType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBEndpointAddressResponse extends $tea.Model {
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

export class DeleteDBClusterEndpointRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBClusterEndpointResponse extends $tea.Model {
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

export class CreateDBEndpointAddressRequest extends $tea.Model {
  DBClusterId: string;
  DBEndpointId: string;
  connectionStringPrefix?: string;
  netType: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBEndpointId: 'DBEndpointId',
      connectionStringPrefix: 'ConnectionStringPrefix',
      netType: 'NetType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBEndpointId: 'string',
      connectionStringPrefix: 'string',
      netType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBEndpointAddressResponse extends $tea.Model {
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

export class CreateDBClusterEndpointRequest extends $tea.Model {
  DBClusterId: string;
  endpointType: string;
  nodes?: string;
  readWriteMode?: string;
  autoAddNewNodes?: string;
  endpointConfig?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      endpointType: 'EndpointType',
      nodes: 'Nodes',
      readWriteMode: 'ReadWriteMode',
      autoAddNewNodes: 'AutoAddNewNodes',
      endpointConfig: 'EndpointConfig',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      endpointType: 'string',
      nodes: 'string',
      readWriteMode: 'string',
      autoAddNewNodes: 'string',
      endpointConfig: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBClusterEndpointResponse extends $tea.Model {
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

export class RestartDBNodeRequest extends $tea.Model {
  DBNodeId: string;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestartDBNodeResponse extends $tea.Model {
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

export class DescribeDBNodePerformanceRequest extends $tea.Model {
  DBNodeId: string;
  key: string;
  startTime: string;
  endTime: string;
  DBClusterId?: string;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
      key: 'Key',
      startTime: 'StartTime',
      endTime: 'EndTime',
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
      key: 'string',
      startTime: 'string',
      endTime: 'string',
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBNodePerformanceResponse extends $tea.Model {
  requestId: string;
  DBNodeId: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  startTime: string;
  endTime: string;
  performanceKeys: DescribeDBNodePerformanceResponsePerformanceKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBNodeId: 'DBNodeId',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      startTime: 'StartTime',
      endTime: 'EndTime',
      performanceKeys: 'PerformanceKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBNodeId: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      startTime: 'string',
      endTime: 'string',
      performanceKeys: DescribeDBNodePerformanceResponsePerformanceKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterAccessWhitelistRequest extends $tea.Model {
  DBClusterId: string;
  securityIps?: string;
  DBClusterIPArrayName?: string;
  DBClusterIPArrayAttribute?: string;
  whiteListType?: string;
  securityGroupIds?: string;
  modifyMode?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      securityIps: 'SecurityIps',
      DBClusterIPArrayName: 'DBClusterIPArrayName',
      DBClusterIPArrayAttribute: 'DBClusterIPArrayAttribute',
      whiteListType: 'WhiteListType',
      securityGroupIds: 'SecurityGroupIds',
      modifyMode: 'ModifyMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      securityIps: 'string',
      DBClusterIPArrayName: 'string',
      DBClusterIPArrayAttribute: 'string',
      whiteListType: 'string',
      securityGroupIds: 'string',
      modifyMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterAccessWhitelistResponse extends $tea.Model {
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

export class DescribeDBClusterAccessWhitelistRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAccessWhitelistResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBClusterAccessWhitelistResponseItems;
  DBClusterSecurityGroups: DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
      DBClusterSecurityGroups: 'DBClusterSecurityGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeDBClusterAccessWhitelistResponseItems,
      DBClusterSecurityGroups: DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterMaintainTimeRequest extends $tea.Model {
  DBClusterId: string;
  maintainTime: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      maintainTime: 'MaintainTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      maintainTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterMaintainTimeResponse extends $tea.Model {
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

export class RevokeAccountPrivilegeRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  DBName: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      DBName: 'DBName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      DBName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RevokeAccountPrivilegeResponse extends $tea.Model {
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

export class ResetAccountRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  accountPassword: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      accountPassword: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetAccountResponse extends $tea.Model {
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

export class GrantAccountPrivilegeRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  DBName: string;
  accountPrivilege: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      DBName: 'DBName',
      accountPrivilege: 'AccountPrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      DBName: 'string',
      accountPrivilege: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GrantAccountPrivilegeResponse extends $tea.Model {
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

export class DescribeDatabasesRequest extends $tea.Model {
  DBClusterId: string;
  DBName?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBName: 'DBName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponse extends $tea.Model {
  requestId: string;
  databases: DescribeDatabasesResponseDatabases;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      databases: 'Databases',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      databases: DescribeDatabasesResponseDatabases,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDatabaseRequest extends $tea.Model {
  DBClusterId: string;
  DBName: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBName: 'DBName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDatabaseResponse extends $tea.Model {
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

export class DeleteAccountRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccountResponse extends $tea.Model {
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

export class CreateDatabaseRequest extends $tea.Model {
  DBClusterId: string;
  DBName: string;
  characterSetName: string;
  DBDescription?: string;
  accountName?: string;
  accountPrivilege?: string;
  collate?: string;
  ctype?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBName: 'DBName',
      characterSetName: 'CharacterSetName',
      DBDescription: 'DBDescription',
      accountName: 'AccountName',
      accountPrivilege: 'AccountPrivilege',
      collate: 'Collate',
      ctype: 'Ctype',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBName: 'string',
      characterSetName: 'string',
      DBDescription: 'string',
      accountName: 'string',
      accountPrivilege: 'string',
      collate: 'string',
      ctype: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDatabaseResponse extends $tea.Model {
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

export class DeleteBackupRequest extends $tea.Model {
  DBClusterId: string;
  backupId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      backupId: 'BackupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      backupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBackupResponse extends $tea.Model {
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

export class DescribeSlowLogsRequest extends $tea.Model {
  regionId: string;
  DBClusterId: string;
  startTime: string;
  endTime: string;
  DBName?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      DBClusterId: 'DBClusterId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      DBName: 'DBName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      DBClusterId: 'string',
      startTime: 'string',
      endTime: 'string',
      DBName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  startTime: string;
  endTime: string;
  engine: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSlowLogsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      engine: 'Engine',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      startTime: 'string',
      endTime: 'string',
      engine: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSlowLogsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogRecordsRequest extends $tea.Model {
  regionId: string;
  DBClusterId: string;
  startTime: string;
  endTime: string;
  DBName?: string;
  pageSize?: number;
  pageNumber?: number;
  SQLHASH?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      DBClusterId: 'DBClusterId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      DBName: 'DBName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      SQLHASH: 'SQLHASH',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      DBClusterId: 'string',
      startTime: 'string',
      endTime: 'string',
      DBName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      SQLHASH: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogRecordsResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  engine: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSlowLogRecordsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      engine: 'Engine',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      engine: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSlowLogRecordsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FailoverDBClusterRequest extends $tea.Model {
  DBClusterId: string;
  targetDBNodeId?: string;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      targetDBNodeId: 'TargetDBNodeId',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      targetDBNodeId: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class FailoverDBClusterResponse extends $tea.Model {
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

export class ModifyDBClusterDescriptionRequest extends $tea.Model {
  DBClusterId: string;
  DBClusterDescription: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBClusterDescription: 'DBClusterDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBClusterDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBClusterDescriptionResponse extends $tea.Model {
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

export class ModifyAccountDescriptionRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  accountDescription: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      accountDescription: 'AccountDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      accountDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccountDescriptionResponse extends $tea.Model {
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

export class DescribeRegionsRequest extends $tea.Model {
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

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  regions: DescribeRegionsResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: DescribeRegionsResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsRequest extends $tea.Model {
  DBClusterId: string;
  accountName?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponse extends $tea.Model {
  requestId: string;
  accounts: DescribeAccountsResponseAccounts[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accounts: 'Accounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accounts: { 'type': 'array', 'itemType': DescribeAccountsResponseAccounts },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBClusterRequest extends $tea.Model {
  DBClusterId: string;
  backupRetentionPolicyOnClusterDeletion?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      backupRetentionPolicyOnClusterDeletion: 'BackupRetentionPolicyOnClusterDeletion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      backupRetentionPolicyOnClusterDeletion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBClusterResponse extends $tea.Model {
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

export class CreateDBClusterRequest extends $tea.Model {
  zoneId?: string;
  DBType: string;
  DBVersion: string;
  DBNodeClass: string;
  clusterNetworkType?: string;
  DBClusterDescription?: string;
  payType: string;
  autoRenew?: boolean;
  period?: string;
  usedTime?: string;
  VPCId?: string;
  vSwitchId?: string;
  creationOption?: string;
  sourceResourceId?: string;
  cloneDataPoint?: string;
  clientToken?: string;
  resourceGroupId?: string;
  securityIPList?: string;
  TDEStatus?: boolean;
  GDNId?: string;
  creationCategory?: string;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      DBNodeClass: 'DBNodeClass',
      clusterNetworkType: 'ClusterNetworkType',
      DBClusterDescription: 'DBClusterDescription',
      payType: 'PayType',
      autoRenew: 'AutoRenew',
      period: 'Period',
      usedTime: 'UsedTime',
      VPCId: 'VPCId',
      vSwitchId: 'VSwitchId',
      creationOption: 'CreationOption',
      sourceResourceId: 'SourceResourceId',
      cloneDataPoint: 'CloneDataPoint',
      clientToken: 'ClientToken',
      resourceGroupId: 'ResourceGroupId',
      securityIPList: 'SecurityIPList',
      TDEStatus: 'TDEStatus',
      GDNId: 'GDNId',
      creationCategory: 'CreationCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      DBType: 'string',
      DBVersion: 'string',
      DBNodeClass: 'string',
      clusterNetworkType: 'string',
      DBClusterDescription: 'string',
      payType: 'string',
      autoRenew: 'boolean',
      period: 'string',
      usedTime: 'string',
      VPCId: 'string',
      vSwitchId: 'string',
      creationOption: 'string',
      sourceResourceId: 'string',
      cloneDataPoint: 'string',
      clientToken: 'string',
      resourceGroupId: 'string',
      securityIPList: 'string',
      TDEStatus: 'boolean',
      GDNId: 'string',
      creationCategory: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBClusterResponse extends $tea.Model {
  requestId: string;
  DBClusterId: string;
  orderId: string;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBClusterId: 'DBClusterId',
      orderId: 'OrderId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBClusterId: 'string',
      orderId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBackupRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateBackupResponse extends $tea.Model {
  requestId: string;
  backupJobId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      backupJobId: 'BackupJobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      backupJobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccountRequest extends $tea.Model {
  DBClusterId: string;
  accountName: string;
  accountPassword: string;
  accountType?: string;
  accountDescription?: string;
  DBName?: string;
  accountPrivilege?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      accountType: 'AccountType',
      accountDescription: 'AccountDescription',
      DBName: 'DBName',
      accountPrivilege: 'AccountPrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      accountType: 'string',
      accountDescription: 'string',
      DBName: 'string',
      accountPrivilege: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccountResponse extends $tea.Model {
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

export class DescribeBackupsRequest extends $tea.Model {
  DBClusterId: string;
  backupId?: string;
  backupStatus?: string;
  backupMode?: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      backupId: 'BackupId',
      backupStatus: 'BackupStatus',
      backupMode: 'BackupMode',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      backupId: 'string',
      backupStatus: 'string',
      backupMode: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: string;
  pageNumber: string;
  pageRecordCount: string;
  items: DescribeBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'string',
      pageNumber: 'string',
      pageRecordCount: 'string',
      items: DescribeBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBackupPolicyRequest extends $tea.Model {
  DBClusterId: string;
  preferredBackupTime?: string;
  preferredBackupPeriod?: string;
  dataLevel1BackupRetentionPeriod?: string;
  dataLevel2BackupRetentionPeriod?: string;
  backupRetentionPolicyOnClusterDeletion?: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      preferredBackupTime: 'PreferredBackupTime',
      preferredBackupPeriod: 'PreferredBackupPeriod',
      dataLevel1BackupRetentionPeriod: 'DataLevel1BackupRetentionPeriod',
      dataLevel2BackupRetentionPeriod: 'DataLevel2BackupRetentionPeriod',
      backupRetentionPolicyOnClusterDeletion: 'BackupRetentionPolicyOnClusterDeletion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      preferredBackupTime: 'string',
      preferredBackupPeriod: 'string',
      dataLevel1BackupRetentionPeriod: 'string',
      dataLevel2BackupRetentionPeriod: 'string',
      backupRetentionPolicyOnClusterDeletion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBackupPolicyResponse extends $tea.Model {
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

export class DescribeBackupPolicyRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupPolicyResponse extends $tea.Model {
  requestId: string;
  backupRetentionPeriod: number;
  preferredNextBackupTime: string;
  preferredBackupTime: string;
  preferredBackupPeriod: string;
  dataLevel1BackupRetentionPeriod: string;
  dataLevel2BackupRetentionPeriod: string;
  backupRetentionPolicyOnClusterDeletion: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      backupRetentionPeriod: 'BackupRetentionPeriod',
      preferredNextBackupTime: 'PreferredNextBackupTime',
      preferredBackupTime: 'PreferredBackupTime',
      preferredBackupPeriod: 'PreferredBackupPeriod',
      dataLevel1BackupRetentionPeriod: 'DataLevel1BackupRetentionPeriod',
      dataLevel2BackupRetentionPeriod: 'DataLevel2BackupRetentionPeriod',
      backupRetentionPolicyOnClusterDeletion: 'BackupRetentionPolicyOnClusterDeletion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      backupRetentionPeriod: 'number',
      preferredNextBackupTime: 'string',
      preferredBackupTime: 'string',
      preferredBackupPeriod: 'string',
      dataLevel1BackupRetentionPeriod: 'string',
      dataLevel2BackupRetentionPeriod: 'string',
      backupRetentionPolicyOnClusterDeletion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersRequest extends $tea.Model {
  regionId: string;
  DBClusterIds?: string;
  DBClusterDescription?: string;
  DBClusterStatus?: string;
  DBType?: string;
  tag?: DescribeDBClustersRequestTag[];
  pageSize?: number;
  pageNumber?: number;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      DBClusterIds: 'DBClusterIds',
      DBClusterDescription: 'DBClusterDescription',
      DBClusterStatus: 'DBClusterStatus',
      DBType: 'DBType',
      tag: 'Tag',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      DBClusterIds: 'string',
      DBClusterDescription: 'string',
      DBClusterStatus: 'string',
      DBType: 'string',
      tag: { 'type': 'array', 'itemType': DescribeDBClustersRequestTag },
      pageSize: 'number',
      pageNumber: 'number',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBClustersResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      totalRecordCount: 'TotalRecordCount',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      totalRecordCount: 'number',
      pageRecordCount: 'number',
      items: DescribeDBClustersResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAttributeRequest extends $tea.Model {
  DBClusterId: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAttributeResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  DBClusterNetworkType: string;
  VPCId: string;
  vSwitchId: string;
  payType: string;
  DBClusterId: string;
  DBClusterStatus: string;
  DBClusterDescription: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  lockMode: string;
  deletionLock: number;
  creationTime: string;
  expireTime: string;
  expired: string;
  maintainTime: string;
  storageUsed: number;
  storageMax: number;
  zoneIds: string;
  SQLSize: number;
  isLatestVersion: boolean;
  resourceGroupId: string;
  dataLevel1BackupChainSize: number;
  tags: DescribeDBClusterAttributeResponseTags[];
  DBNodes: DescribeDBClusterAttributeResponseDBNodes[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      DBClusterNetworkType: 'DBClusterNetworkType',
      VPCId: 'VPCId',
      vSwitchId: 'VSwitchId',
      payType: 'PayType',
      DBClusterId: 'DBClusterId',
      DBClusterStatus: 'DBClusterStatus',
      DBClusterDescription: 'DBClusterDescription',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      lockMode: 'LockMode',
      deletionLock: 'DeletionLock',
      creationTime: 'CreationTime',
      expireTime: 'ExpireTime',
      expired: 'Expired',
      maintainTime: 'MaintainTime',
      storageUsed: 'StorageUsed',
      storageMax: 'StorageMax',
      zoneIds: 'ZoneIds',
      SQLSize: 'SQLSize',
      isLatestVersion: 'IsLatestVersion',
      resourceGroupId: 'ResourceGroupId',
      dataLevel1BackupChainSize: 'DataLevel1BackupChainSize',
      tags: 'Tags',
      DBNodes: 'DBNodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      DBClusterNetworkType: 'string',
      VPCId: 'string',
      vSwitchId: 'string',
      payType: 'string',
      DBClusterId: 'string',
      DBClusterStatus: 'string',
      DBClusterDescription: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      lockMode: 'string',
      deletionLock: 'number',
      creationTime: 'string',
      expireTime: 'string',
      expired: 'string',
      maintainTime: 'string',
      storageUsed: 'number',
      storageMax: 'number',
      zoneIds: 'string',
      SQLSize: 'number',
      isLatestVersion: 'boolean',
      resourceGroupId: 'string',
      dataLevel1BackupChainSize: 'number',
      tags: { 'type': 'array', 'itemType': DescribeDBClusterAttributeResponseTags },
      DBNodes: { 'type': 'array', 'itemType': DescribeDBClusterAttributeResponseDBNodes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDetachedBackupsResponseItemsBackup extends $tea.Model {
  backupId: string;
  DBClusterId: string;
  backupStatus: string;
  backupStartTime: string;
  backupEndTime: string;
  backupType: string;
  backupMode: string;
  backupMethod: string;
  storeStatus: string;
  backupSetSize: string;
  consistentTime: string;
  backupsLevel: string;
  isAvail: string;
  static names(): { [key: string]: string } {
    return {
      backupId: 'BackupId',
      DBClusterId: 'DBClusterId',
      backupStatus: 'BackupStatus',
      backupStartTime: 'BackupStartTime',
      backupEndTime: 'BackupEndTime',
      backupType: 'BackupType',
      backupMode: 'BackupMode',
      backupMethod: 'BackupMethod',
      storeStatus: 'StoreStatus',
      backupSetSize: 'BackupSetSize',
      consistentTime: 'ConsistentTime',
      backupsLevel: 'BackupsLevel',
      isAvail: 'IsAvail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupId: 'string',
      DBClusterId: 'string',
      backupStatus: 'string',
      backupStartTime: 'string',
      backupEndTime: 'string',
      backupType: 'string',
      backupMode: 'string',
      backupMethod: 'string',
      storeStatus: 'string',
      backupSetSize: 'string',
      consistentTime: 'string',
      backupsLevel: 'string',
      isAvail: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDetachedBackupsResponseItems extends $tea.Model {
  backup: DescribeDetachedBackupsResponseItemsBackup[];
  static names(): { [key: string]: string } {
    return {
      backup: 'Backup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backup: { 'type': 'array', 'itemType': DescribeDetachedBackupsResponseItemsBackup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersWithBackupsResponseItemsDBCluster extends $tea.Model {
  DBClusterId: string;
  DBClusterDescription: string;
  payType: string;
  DBClusterNetworkType: string;
  regionId: string;
  zoneId: string;
  expireTime: string;
  expired: string;
  DBClusterStatus: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  lockMode: string;
  deletionLock: number;
  createTime: string;
  vpcId: string;
  isDeleted: number;
  deletedTime: string;
  DBNodeClass: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBClusterDescription: 'DBClusterDescription',
      payType: 'PayType',
      DBClusterNetworkType: 'DBClusterNetworkType',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      expireTime: 'ExpireTime',
      expired: 'Expired',
      DBClusterStatus: 'DBClusterStatus',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      lockMode: 'LockMode',
      deletionLock: 'DeletionLock',
      createTime: 'CreateTime',
      vpcId: 'VpcId',
      isDeleted: 'IsDeleted',
      deletedTime: 'DeletedTime',
      DBNodeClass: 'DBNodeClass',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBClusterDescription: 'string',
      payType: 'string',
      DBClusterNetworkType: 'string',
      regionId: 'string',
      zoneId: 'string',
      expireTime: 'string',
      expired: 'string',
      DBClusterStatus: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      lockMode: 'string',
      deletionLock: 'number',
      createTime: 'string',
      vpcId: 'string',
      isDeleted: 'number',
      deletedTime: 'string',
      DBNodeClass: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersWithBackupsResponseItems extends $tea.Model {
  DBCluster: DescribeDBClustersWithBackupsResponseItemsDBCluster[];
  static names(): { [key: string]: string } {
    return {
      DBCluster: 'DBCluster',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBCluster: { 'type': 'array', 'itemType': DescribeDBClustersWithBackupsResponseItemsDBCluster },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources extends $tea.Model {
  DBNodeClass: string;
  category: string;
  static names(): { [key: string]: string } {
    return {
      DBNodeClass: 'DBNodeClass',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeClass: 'string',
      category: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines extends $tea.Model {
  engine: string;
  availableResources: DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources[];
  static names(): { [key: string]: string } {
    return {
      engine: 'Engine',
      availableResources: 'AvailableResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      engine: 'string',
      availableResources: { 'type': 'array', 'itemType': DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAvailableResourcesResponseAvailableZones extends $tea.Model {
  regionId: string;
  zoneId: string;
  supportedEngines: DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      supportedEngines: 'SupportedEngines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
      supportedEngines: { 'type': 'array', 'itemType': DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupLogsResponseItemsBackupLog extends $tea.Model {
  backupLogId: string;
  backupLogName: string;
  backupLogStartTime: string;
  backupLogEndTime: string;
  backupLogSize: string;
  downloadLink: string;
  intranetDownloadLink: string;
  linkExpiredTime: string;
  static names(): { [key: string]: string } {
    return {
      backupLogId: 'BackupLogId',
      backupLogName: 'BackupLogName',
      backupLogStartTime: 'BackupLogStartTime',
      backupLogEndTime: 'BackupLogEndTime',
      backupLogSize: 'BackupLogSize',
      downloadLink: 'DownloadLink',
      intranetDownloadLink: 'IntranetDownloadLink',
      linkExpiredTime: 'LinkExpiredTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupLogId: 'string',
      backupLogName: 'string',
      backupLogStartTime: 'string',
      backupLogEndTime: 'string',
      backupLogSize: 'string',
      downloadLink: 'string',
      intranetDownloadLink: 'string',
      linkExpiredTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupLogsResponseItems extends $tea.Model {
  backupLog: DescribeBackupLogsResponseItemsBackupLog[];
  static names(): { [key: string]: string } {
    return {
      backupLog: 'BackupLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupLog: { 'type': 'array', 'itemType': DescribeBackupLogsResponseItemsBackupLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterSSLResponseItems extends $tea.Model {
  DBEndpointId: string;
  SSLEnabled: string;
  SSLConnectionString: string;
  SSLExpireTime: string;
  static names(): { [key: string]: string } {
    return {
      DBEndpointId: 'DBEndpointId',
      SSLEnabled: 'SSLEnabled',
      SSLConnectionString: 'SSLConnectionString',
      SSLExpireTime: 'SSLExpireTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBEndpointId: 'string',
      SSLEnabled: 'string',
      SSLConnectionString: 'string',
      SSLExpireTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems extends $tea.Model {
  connectionString: string;
  IPAddress: string;
  netType: string;
  port: string;
  VPCId: string;
  vSwitchId: string;
  static names(): { [key: string]: string } {
    return {
      connectionString: 'ConnectionString',
      IPAddress: 'IPAddress',
      netType: 'NetType',
      port: 'Port',
      VPCId: 'VPCId',
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      connectionString: 'string',
      IPAddress: 'string',
      netType: 'string',
      port: 'string',
      VPCId: 'string',
      vSwitchId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationResponseDBClusterEndpointList extends $tea.Model {
  DBEndpointId: string;
  endpointType: string;
  addressItems: DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems[];
  static names(): { [key: string]: string } {
    return {
      DBEndpointId: 'DBEndpointId',
      endpointType: 'EndpointType',
      addressItems: 'AddressItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBEndpointId: 'string',
      endpointType: 'string',
      addressItems: { 'type': 'array', 'itemType': DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationResponseRdsEndpointListAddressItems extends $tea.Model {
  connectionString: string;
  IPAddress: string;
  netType: string;
  port: string;
  VPCId: string;
  vSwitchId: string;
  static names(): { [key: string]: string } {
    return {
      connectionString: 'ConnectionString',
      IPAddress: 'IPAddress',
      netType: 'NetType',
      port: 'Port',
      VPCId: 'VPCId',
      vSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      connectionString: 'string',
      IPAddress: 'string',
      netType: 'string',
      port: 'string',
      VPCId: 'string',
      vSwitchId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterMigrationResponseRdsEndpointList extends $tea.Model {
  DBEndpointId: string;
  endpointType: string;
  addressItems: DescribeDBClusterMigrationResponseRdsEndpointListAddressItems[];
  static names(): { [key: string]: string } {
    return {
      DBEndpointId: 'DBEndpointId',
      endpointType: 'EndpointType',
      addressItems: 'AddressItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBEndpointId: 'string',
      endpointType: 'string',
      addressItems: { 'type': 'array', 'itemType': DescribeDBClusterMigrationResponseRdsEndpointListAddressItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute extends $tea.Model {
  DBClusterId: string;
  regionId: string;
  autoRenewEnabled: boolean;
  duration: number;
  periodUnit: string;
  renewalStatus: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      regionId: 'RegionId',
      autoRenewEnabled: 'AutoRenewEnabled',
      duration: 'Duration',
      periodUnit: 'PeriodUnit',
      renewalStatus: 'RenewalStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      regionId: 'string',
      autoRenewEnabled: 'boolean',
      duration: 'number',
      periodUnit: 'string',
      renewalStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoRenewAttributeResponseItems extends $tea.Model {
  autoRenewAttribute: DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute[];
  static names(): { [key: string]: string } {
    return {
      autoRenewAttribute: 'AutoRenewAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoRenewAttribute: { 'type': 'array', 'itemType': DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBNodesRequestDBNode extends $tea.Model {
  targetClass: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      targetClass: 'TargetClass',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      targetClass: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBNodesResponseDBNodeIds extends $tea.Model {
  DBNodeId: string[];
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequestTag extends $tea.Model {
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

export class ListTagResourcesRequestTag extends $tea.Model {
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

export class ListTagResourcesResponseTagResourcesTagResource extends $tea.Model {
  tagKey: string;
  tagValue: string;
  resourceType: string;
  resourceId: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
      resourceType: 'string',
      resourceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponseTagResources extends $tea.Model {
  tagResource: ListTagResourcesResponseTagResourcesTagResource[];
  static names(): { [key: string]: string } {
    return {
      tagResource: 'TagResource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagResource: { 'type': 'array', 'itemType': ListTagResourcesResponseTagResourcesTagResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue extends $tea.Model {
  value: string;
  timestamp: number;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'string',
      timestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints extends $tea.Model {
  performanceItemValue: DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue[];
  static names(): { [key: string]: string } {
    return {
      performanceItemValue: 'PerformanceItemValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceItemValue: { 'type': 'array', 'itemType': DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem extends $tea.Model {
  DBNodeId: string;
  measurement: string;
  metricName: string;
  points: DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
      measurement: 'Measurement',
      metricName: 'MetricName',
      points: 'Points',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
      measurement: 'string',
      metricName: 'string',
      points: DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterPerformanceResponsePerformanceKeys extends $tea.Model {
  performanceItem: DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem[];
  static names(): { [key: string]: string } {
    return {
      performanceItem: 'PerformanceItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceItem: { 'type': 'array', 'itemType': DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterParametersResponseRunningParametersParameter extends $tea.Model {
  parameterName: string;
  dataType: string;
  defaultParameterValue: string;
  parameterValue: string;
  isModifiable: boolean;
  forceRestart: boolean;
  parameterStatus: string;
  checkingCode: string;
  parameterDescription: string;
  static names(): { [key: string]: string } {
    return {
      parameterName: 'ParameterName',
      dataType: 'DataType',
      defaultParameterValue: 'DefaultParameterValue',
      parameterValue: 'ParameterValue',
      isModifiable: 'IsModifiable',
      forceRestart: 'ForceRestart',
      parameterStatus: 'ParameterStatus',
      checkingCode: 'CheckingCode',
      parameterDescription: 'ParameterDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterName: 'string',
      dataType: 'string',
      defaultParameterValue: 'string',
      parameterValue: 'string',
      isModifiable: 'boolean',
      forceRestart: 'boolean',
      parameterStatus: 'string',
      checkingCode: 'string',
      parameterDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterParametersResponseRunningParameters extends $tea.Model {
  parameter: DescribeDBClusterParametersResponseRunningParametersParameter[];
  static names(): { [key: string]: string } {
    return {
      parameter: 'Parameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameter: { 'type': 'array', 'itemType': DescribeDBClusterParametersResponseRunningParametersParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterEndpointsResponseItemsAddressItems extends $tea.Model {
  connectionString: string;
  IPAddress: string;
  netType: string;
  port: string;
  VPCId: string;
  vSwitchId: string;
  vpcInstanceId: string;
  privateZoneConnectionString: string;
  static names(): { [key: string]: string } {
    return {
      connectionString: 'ConnectionString',
      IPAddress: 'IPAddress',
      netType: 'NetType',
      port: 'Port',
      VPCId: 'VPCId',
      vSwitchId: 'VSwitchId',
      vpcInstanceId: 'VpcInstanceId',
      privateZoneConnectionString: 'PrivateZoneConnectionString',
    };
  }

  static types(): { [key: string]: any } {
    return {
      connectionString: 'string',
      IPAddress: 'string',
      netType: 'string',
      port: 'string',
      VPCId: 'string',
      vSwitchId: 'string',
      vpcInstanceId: 'string',
      privateZoneConnectionString: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterEndpointsResponseItems extends $tea.Model {
  DBEndpointId: string;
  endpointType: string;
  nodes: string;
  readWriteMode: string;
  autoAddNewNodes: string;
  endpointConfig: string;
  nodeWithRoles: string;
  addressItems: DescribeDBClusterEndpointsResponseItemsAddressItems[];
  static names(): { [key: string]: string } {
    return {
      DBEndpointId: 'DBEndpointId',
      endpointType: 'EndpointType',
      nodes: 'Nodes',
      readWriteMode: 'ReadWriteMode',
      autoAddNewNodes: 'AutoAddNewNodes',
      endpointConfig: 'EndpointConfig',
      nodeWithRoles: 'NodeWithRoles',
      addressItems: 'AddressItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBEndpointId: 'string',
      endpointType: 'string',
      nodes: 'string',
      readWriteMode: 'string',
      autoAddNewNodes: 'string',
      endpointConfig: 'string',
      nodeWithRoles: 'string',
      addressItems: { 'type': 'array', 'itemType': DescribeDBClusterEndpointsResponseItemsAddressItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue extends $tea.Model {
  value: string;
  timestamp: number;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'string',
      timestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints extends $tea.Model {
  performanceItemValue: DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue[];
  static names(): { [key: string]: string } {
    return {
      performanceItemValue: 'PerformanceItemValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceItemValue: { 'type': 'array', 'itemType': DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem extends $tea.Model {
  metricName: string;
  measurement: string;
  points: DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints;
  static names(): { [key: string]: string } {
    return {
      metricName: 'MetricName',
      measurement: 'Measurement',
      points: 'Points',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metricName: 'string',
      measurement: 'string',
      points: DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBNodePerformanceResponsePerformanceKeys extends $tea.Model {
  performanceItem: DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem[];
  static names(): { [key: string]: string } {
    return {
      performanceItem: 'PerformanceItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceItem: { 'type': 'array', 'itemType': DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray extends $tea.Model {
  DBClusterIPArrayName: string;
  DBClusterIPArrayAttribute: string;
  securityIps: string;
  static names(): { [key: string]: string } {
    return {
      DBClusterIPArrayName: 'DBClusterIPArrayName',
      DBClusterIPArrayAttribute: 'DBClusterIPArrayAttribute',
      securityIps: 'SecurityIps',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterIPArrayName: 'string',
      DBClusterIPArrayAttribute: 'string',
      securityIps: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAccessWhitelistResponseItems extends $tea.Model {
  DBClusterIPArray: DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray[];
  static names(): { [key: string]: string } {
    return {
      DBClusterIPArray: 'DBClusterIPArray',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterIPArray: { 'type': 'array', 'itemType': DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup extends $tea.Model {
  securityGroupId: string;
  securityGroupName: string;
  static names(): { [key: string]: string } {
    return {
      securityGroupId: 'SecurityGroupId',
      securityGroupName: 'SecurityGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupId: 'string',
      securityGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups extends $tea.Model {
  DBClusterSecurityGroup: DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup[];
  static names(): { [key: string]: string } {
    return {
      DBClusterSecurityGroup: 'DBClusterSecurityGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterSecurityGroup: { 'type': 'array', 'itemType': DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabaseAccountsAccount extends $tea.Model {
  accountName: string;
  accountStatus: string;
  accountPrivilege: string;
  privilegeStatus: string;
  static names(): { [key: string]: string } {
    return {
      accountName: 'AccountName',
      accountStatus: 'AccountStatus',
      accountPrivilege: 'AccountPrivilege',
      privilegeStatus: 'PrivilegeStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountName: 'string',
      accountStatus: 'string',
      accountPrivilege: 'string',
      privilegeStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabaseAccounts extends $tea.Model {
  account: DescribeDatabasesResponseDatabasesDatabaseAccountsAccount[];
  static names(): { [key: string]: string } {
    return {
      account: 'Account',
    };
  }

  static types(): { [key: string]: any } {
    return {
      account: { 'type': 'array', 'itemType': DescribeDatabasesResponseDatabasesDatabaseAccountsAccount },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabase extends $tea.Model {
  DBName: string;
  DBStatus: string;
  DBDescription: string;
  characterSetName: string;
  engine: string;
  accounts: DescribeDatabasesResponseDatabasesDatabaseAccounts;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      DBStatus: 'DBStatus',
      DBDescription: 'DBDescription',
      characterSetName: 'CharacterSetName',
      engine: 'Engine',
      accounts: 'Accounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      DBStatus: 'string',
      DBDescription: 'string',
      characterSetName: 'string',
      engine: 'string',
      accounts: DescribeDatabasesResponseDatabasesDatabaseAccounts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabases extends $tea.Model {
  database: DescribeDatabasesResponseDatabasesDatabase[];
  static names(): { [key: string]: string } {
    return {
      database: 'Database',
    };
  }

  static types(): { [key: string]: any } {
    return {
      database: { 'type': 'array', 'itemType': DescribeDatabasesResponseDatabasesDatabase },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsResponseItemsSQLSlowLog extends $tea.Model {
  DBNodeId: string;
  parseMaxRowCount: number;
  totalLockTimes: number;
  DBName: string;
  maxExecutionTime: number;
  SQLHASH: string;
  SQLText: string;
  createTime: string;
  totalExecutionTimes: number;
  returnTotalRowCounts: number;
  totalExecutionCounts: number;
  maxLockTime: number;
  returnMaxRowCount: number;
  parseTotalRowCounts: number;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
      parseMaxRowCount: 'ParseMaxRowCount',
      totalLockTimes: 'TotalLockTimes',
      DBName: 'DBName',
      maxExecutionTime: 'MaxExecutionTime',
      SQLHASH: 'SQLHASH',
      SQLText: 'SQLText',
      createTime: 'CreateTime',
      totalExecutionTimes: 'TotalExecutionTimes',
      returnTotalRowCounts: 'ReturnTotalRowCounts',
      totalExecutionCounts: 'TotalExecutionCounts',
      maxLockTime: 'MaxLockTime',
      returnMaxRowCount: 'ReturnMaxRowCount',
      parseTotalRowCounts: 'ParseTotalRowCounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
      parseMaxRowCount: 'number',
      totalLockTimes: 'number',
      DBName: 'string',
      maxExecutionTime: 'number',
      SQLHASH: 'string',
      SQLText: 'string',
      createTime: 'string',
      totalExecutionTimes: 'number',
      returnTotalRowCounts: 'number',
      totalExecutionCounts: 'number',
      maxLockTime: 'number',
      returnMaxRowCount: 'number',
      parseTotalRowCounts: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsResponseItems extends $tea.Model {
  SQLSlowLog: DescribeSlowLogsResponseItemsSQLSlowLog[];
  static names(): { [key: string]: string } {
    return {
      SQLSlowLog: 'SQLSlowLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLSlowLog: { 'type': 'array', 'itemType': DescribeSlowLogsResponseItemsSQLSlowLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogRecordsResponseItemsSQLSlowRecord extends $tea.Model {
  hostAddress: string;
  DBName: string;
  SQLText: string;
  queryTimes: number;
  lockTimes: number;
  parseRowCounts: number;
  returnRowCounts: number;
  executionStartTime: string;
  DBNodeId: string;
  static names(): { [key: string]: string } {
    return {
      hostAddress: 'HostAddress',
      DBName: 'DBName',
      SQLText: 'SQLText',
      queryTimes: 'QueryTimes',
      lockTimes: 'LockTimes',
      parseRowCounts: 'ParseRowCounts',
      returnRowCounts: 'ReturnRowCounts',
      executionStartTime: 'ExecutionStartTime',
      DBNodeId: 'DBNodeId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostAddress: 'string',
      DBName: 'string',
      SQLText: 'string',
      queryTimes: 'number',
      lockTimes: 'number',
      parseRowCounts: 'number',
      returnRowCounts: 'number',
      executionStartTime: 'string',
      DBNodeId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogRecordsResponseItems extends $tea.Model {
  SQLSlowRecord: DescribeSlowLogRecordsResponseItemsSQLSlowRecord[];
  static names(): { [key: string]: string } {
    return {
      SQLSlowRecord: 'SQLSlowRecord',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLSlowRecord: { 'type': 'array', 'itemType': DescribeSlowLogRecordsResponseItemsSQLSlowRecord },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegionZonesZone extends $tea.Model {
  zoneId: string;
  vpcEnabled: boolean;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      vpcEnabled: 'VpcEnabled',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      vpcEnabled: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegionZones extends $tea.Model {
  zone: DescribeRegionsResponseRegionsRegionZonesZone[];
  static names(): { [key: string]: string } {
    return {
      zone: 'Zone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zone: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRegionZonesZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegion extends $tea.Model {
  regionId: string;
  zones: DescribeRegionsResponseRegionsRegionZones;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zones: 'Zones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zones: DescribeRegionsResponseRegionsRegionZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  region: DescribeRegionsResponseRegionsRegion[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRegion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccountsDatabasePrivileges extends $tea.Model {
  DBName: string;
  accountPrivilege: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      accountPrivilege: 'AccountPrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      accountPrivilege: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccounts extends $tea.Model {
  accountName: string;
  accountStatus: string;
  accountDescription: string;
  accountType: string;
  accountLockState: string;
  privilegeExceeded: string;
  accountPasswordValidTime: string;
  databasePrivileges: DescribeAccountsResponseAccountsDatabasePrivileges[];
  static names(): { [key: string]: string } {
    return {
      accountName: 'AccountName',
      accountStatus: 'AccountStatus',
      accountDescription: 'AccountDescription',
      accountType: 'AccountType',
      accountLockState: 'AccountLockState',
      privilegeExceeded: 'PrivilegeExceeded',
      accountPasswordValidTime: 'AccountPasswordValidTime',
      databasePrivileges: 'DatabasePrivileges',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountName: 'string',
      accountStatus: 'string',
      accountDescription: 'string',
      accountType: 'string',
      accountLockState: 'string',
      privilegeExceeded: 'string',
      accountPasswordValidTime: 'string',
      databasePrivileges: { 'type': 'array', 'itemType': DescribeAccountsResponseAccountsDatabasePrivileges },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupsResponseItemsBackup extends $tea.Model {
  backupId: string;
  DBClusterId: string;
  backupStatus: string;
  backupStartTime: string;
  backupEndTime: string;
  backupType: string;
  backupMode: string;
  backupMethod: string;
  storeStatus: string;
  backupSetSize: string;
  consistentTime: string;
  backupsLevel: string;
  isAvail: string;
  static names(): { [key: string]: string } {
    return {
      backupId: 'BackupId',
      DBClusterId: 'DBClusterId',
      backupStatus: 'BackupStatus',
      backupStartTime: 'BackupStartTime',
      backupEndTime: 'BackupEndTime',
      backupType: 'BackupType',
      backupMode: 'BackupMode',
      backupMethod: 'BackupMethod',
      storeStatus: 'StoreStatus',
      backupSetSize: 'BackupSetSize',
      consistentTime: 'ConsistentTime',
      backupsLevel: 'BackupsLevel',
      isAvail: 'IsAvail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupId: 'string',
      DBClusterId: 'string',
      backupStatus: 'string',
      backupStartTime: 'string',
      backupEndTime: 'string',
      backupType: 'string',
      backupMode: 'string',
      backupMethod: 'string',
      storeStatus: 'string',
      backupSetSize: 'string',
      consistentTime: 'string',
      backupsLevel: 'string',
      isAvail: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupsResponseItems extends $tea.Model {
  backup: DescribeBackupsResponseItemsBackup[];
  static names(): { [key: string]: string } {
    return {
      backup: 'Backup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backup: { 'type': 'array', 'itemType': DescribeBackupsResponseItemsBackup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersRequestTag extends $tea.Model {
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

export class DescribeDBClustersResponseItemsDBClusterDBNodesDBNode extends $tea.Model {
  DBNodeId: string;
  DBNodeClass: string;
  DBNodeRole: string;
  regionId: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
      DBNodeClass: 'DBNodeClass',
      DBNodeRole: 'DBNodeRole',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
      DBNodeClass: 'string',
      DBNodeRole: 'string',
      regionId: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersResponseItemsDBClusterDBNodes extends $tea.Model {
  DBNode: DescribeDBClustersResponseItemsDBClusterDBNodesDBNode[];
  static names(): { [key: string]: string } {
    return {
      DBNode: 'DBNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNode: { 'type': 'array', 'itemType': DescribeDBClustersResponseItemsDBClusterDBNodesDBNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersResponseItemsDBClusterTagsTag extends $tea.Model {
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

export class DescribeDBClustersResponseItemsDBClusterTags extends $tea.Model {
  tag: DescribeDBClustersResponseItemsDBClusterTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeDBClustersResponseItemsDBClusterTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersResponseItemsDBCluster extends $tea.Model {
  DBClusterId: string;
  DBClusterDescription: string;
  payType: string;
  DBClusterNetworkType: string;
  regionId: string;
  zoneId: string;
  expireTime: string;
  expired: string;
  DBClusterStatus: string;
  engine: string;
  DBType: string;
  DBVersion: string;
  lockMode: string;
  deletionLock: number;
  createTime: string;
  vpcId: string;
  DBNodeNumber: number;
  DBNodeClass: string;
  storageUsed: number;
  resourceGroupId: string;
  DBNodes: DescribeDBClustersResponseItemsDBClusterDBNodes;
  tags: DescribeDBClustersResponseItemsDBClusterTags;
  static names(): { [key: string]: string } {
    return {
      DBClusterId: 'DBClusterId',
      DBClusterDescription: 'DBClusterDescription',
      payType: 'PayType',
      DBClusterNetworkType: 'DBClusterNetworkType',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      expireTime: 'ExpireTime',
      expired: 'Expired',
      DBClusterStatus: 'DBClusterStatus',
      engine: 'Engine',
      DBType: 'DBType',
      DBVersion: 'DBVersion',
      lockMode: 'LockMode',
      deletionLock: 'DeletionLock',
      createTime: 'CreateTime',
      vpcId: 'VpcId',
      DBNodeNumber: 'DBNodeNumber',
      DBNodeClass: 'DBNodeClass',
      storageUsed: 'StorageUsed',
      resourceGroupId: 'ResourceGroupId',
      DBNodes: 'DBNodes',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBClusterId: 'string',
      DBClusterDescription: 'string',
      payType: 'string',
      DBClusterNetworkType: 'string',
      regionId: 'string',
      zoneId: 'string',
      expireTime: 'string',
      expired: 'string',
      DBClusterStatus: 'string',
      engine: 'string',
      DBType: 'string',
      DBVersion: 'string',
      lockMode: 'string',
      deletionLock: 'number',
      createTime: 'string',
      vpcId: 'string',
      DBNodeNumber: 'number',
      DBNodeClass: 'string',
      storageUsed: 'number',
      resourceGroupId: 'string',
      DBNodes: DescribeDBClustersResponseItemsDBClusterDBNodes,
      tags: DescribeDBClustersResponseItemsDBClusterTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClustersResponseItems extends $tea.Model {
  DBCluster: DescribeDBClustersResponseItemsDBCluster[];
  static names(): { [key: string]: string } {
    return {
      DBCluster: 'DBCluster',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBCluster: { 'type': 'array', 'itemType': DescribeDBClustersResponseItemsDBCluster },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBClusterAttributeResponseTags extends $tea.Model {
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

export class DescribeDBClusterAttributeResponseDBNodes extends $tea.Model {
  DBNodeId: string;
  zoneId: string;
  DBNodeStatus: string;
  creationTime: string;
  DBNodeClass: string;
  DBNodeRole: string;
  maxIOPS: number;
  maxConnections: number;
  failoverPriority: number;
  static names(): { [key: string]: string } {
    return {
      DBNodeId: 'DBNodeId',
      zoneId: 'ZoneId',
      DBNodeStatus: 'DBNodeStatus',
      creationTime: 'CreationTime',
      DBNodeClass: 'DBNodeClass',
      DBNodeRole: 'DBNodeRole',
      maxIOPS: 'MaxIOPS',
      maxConnections: 'MaxConnections',
      failoverPriority: 'FailoverPriority',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBNodeId: 'string',
      zoneId: 'string',
      DBNodeStatus: 'string',
      creationTime: 'string',
      DBNodeClass: 'string',
      DBNodeRole: 'string',
      maxIOPS: 'number',
      maxConnections: 'number',
      failoverPriority: 'number',
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
      'cn-qingdao': "polardb.aliyuncs.com",
      'cn-beijing': "polardb.aliyuncs.com",
      'cn-hangzhou': "polardb.aliyuncs.com",
      'cn-shanghai': "polardb.aliyuncs.com",
      'cn-shenzhen': "polardb.aliyuncs.com",
      'cn-hongkong': "polardb.aliyuncs.com",
      'ap-southeast-1': "polardb.aliyuncs.com",
      'us-west-1': "polardb.aliyuncs.com",
      'cn-hangzhou-finance': "polardb.aliyuncs.com",
      'cn-shanghai-finance-1': "polardb.aliyuncs.com",
      'us-east-1': "polardb.ap-northeast-1.aliyuncs.com",
      'cn-shenzhen-finance-1': "polardb.aliyuncs.com",
      'cn-north-2-gov-1': "polardb.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("polardb", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async describeDBClusterAuditLogCollectorWithOptions(request: DescribeDBClusterAuditLogCollectorRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterAuditLogCollectorResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterAuditLogCollectorResponse>(await this.doRequest("DescribeDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterAuditLogCollectorResponse({}));
  }

  async describeDBClusterAuditLogCollector(request: DescribeDBClusterAuditLogCollectorRequest): Promise<DescribeDBClusterAuditLogCollectorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterAuditLogCollectorWithOptions(request, runtime);
  }

  async modifyDBClusterAuditLogCollectorWithOptions(request: ModifyDBClusterAuditLogCollectorRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterAuditLogCollectorResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterAuditLogCollectorResponse>(await this.doRequest("ModifyDBClusterAuditLogCollector", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterAuditLogCollectorResponse({}));
  }

  async modifyDBClusterAuditLogCollector(request: ModifyDBClusterAuditLogCollectorRequest): Promise<ModifyDBClusterAuditLogCollectorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterAuditLogCollectorWithOptions(request, runtime);
  }

  async describeDetachedBackupsWithOptions(request: DescribeDetachedBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDetachedBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDetachedBackupsResponse>(await this.doRequest("DescribeDetachedBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDetachedBackupsResponse({}));
  }

  async describeDetachedBackups(request: DescribeDetachedBackupsRequest): Promise<DescribeDetachedBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDetachedBackupsWithOptions(request, runtime);
  }

  async describeDBClustersWithBackupsWithOptions(request: DescribeDBClustersWithBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClustersWithBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClustersWithBackupsResponse>(await this.doRequest("DescribeDBClustersWithBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClustersWithBackupsResponse({}));
  }

  async describeDBClustersWithBackups(request: DescribeDBClustersWithBackupsRequest): Promise<DescribeDBClustersWithBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClustersWithBackupsWithOptions(request, runtime);
  }

  async describeLogBackupPolicyWithOptions(request: DescribeLogBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLogBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLogBackupPolicyResponse>(await this.doRequest("DescribeLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeLogBackupPolicyResponse({}));
  }

  async describeLogBackupPolicy(request: DescribeLogBackupPolicyRequest): Promise<DescribeLogBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLogBackupPolicyWithOptions(request, runtime);
  }

  async modifyLogBackupPolicyWithOptions(request: ModifyLogBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyLogBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyLogBackupPolicyResponse>(await this.doRequest("ModifyLogBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyLogBackupPolicyResponse({}));
  }

  async modifyLogBackupPolicy(request: ModifyLogBackupPolicyRequest): Promise<ModifyLogBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyLogBackupPolicyWithOptions(request, runtime);
  }

  async modifyDBClusterMonitorWithOptions(request: ModifyDBClusterMonitorRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterMonitorResponse>(await this.doRequest("ModifyDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterMonitorResponse({}));
  }

  async modifyDBClusterMonitor(request: ModifyDBClusterMonitorRequest): Promise<ModifyDBClusterMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterMonitorWithOptions(request, runtime);
  }

  async describeDBClusterMonitorWithOptions(request: DescribeDBClusterMonitorRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterMonitorResponse>(await this.doRequest("DescribeDBClusterMonitor", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterMonitorResponse({}));
  }

  async describeDBClusterMonitor(request: DescribeDBClusterMonitorRequest): Promise<DescribeDBClusterMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterMonitorWithOptions(request, runtime);
  }

  async describeDBClusterAvailableResourcesWithOptions(request: DescribeDBClusterAvailableResourcesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterAvailableResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterAvailableResourcesResponse>(await this.doRequest("DescribeDBClusterAvailableResources", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterAvailableResourcesResponse({}));
  }

  async describeDBClusterAvailableResources(request: DescribeDBClusterAvailableResourcesRequest): Promise<DescribeDBClusterAvailableResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterAvailableResourcesWithOptions(request, runtime);
  }

  async describeBackupLogsWithOptions(request: DescribeBackupLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupLogsResponse>(await this.doRequest("DescribeBackupLogs", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeBackupLogsResponse({}));
  }

  async describeBackupLogs(request: DescribeBackupLogsRequest): Promise<DescribeBackupLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupLogsWithOptions(request, runtime);
  }

  async modifyDBClusterSSLWithOptions(request: ModifyDBClusterSSLRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterSSLResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterSSLResponse>(await this.doRequest("ModifyDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterSSLResponse({}));
  }

  async modifyDBClusterSSL(request: ModifyDBClusterSSLRequest): Promise<ModifyDBClusterSSLResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterSSLWithOptions(request, runtime);
  }

  async describeDBClusterSSLWithOptions(request: DescribeDBClusterSSLRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterSSLResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterSSLResponse>(await this.doRequest("DescribeDBClusterSSL", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterSSLResponse({}));
  }

  async describeDBClusterSSL(request: DescribeDBClusterSSLRequest): Promise<DescribeDBClusterSSLResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterSSLWithOptions(request, runtime);
  }

  async describeDBClusterMigrationWithOptions(request: DescribeDBClusterMigrationRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterMigrationResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterMigrationResponse>(await this.doRequest("DescribeDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterMigrationResponse({}));
  }

  async describeDBClusterMigration(request: DescribeDBClusterMigrationRequest): Promise<DescribeDBClusterMigrationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterMigrationWithOptions(request, runtime);
  }

  async closeDBClusterMigrationWithOptions(request: CloseDBClusterMigrationRequest, runtime: $Util.RuntimeOptions): Promise<CloseDBClusterMigrationResponse> {
    Util.validateModel(request);
    return $tea.cast<CloseDBClusterMigrationResponse>(await this.doRequest("CloseDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CloseDBClusterMigrationResponse({}));
  }

  async closeDBClusterMigration(request: CloseDBClusterMigrationRequest): Promise<CloseDBClusterMigrationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.closeDBClusterMigrationWithOptions(request, runtime);
  }

  async modifyDBClusterMigrationWithOptions(request: ModifyDBClusterMigrationRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterMigrationResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterMigrationResponse>(await this.doRequest("ModifyDBClusterMigration", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterMigrationResponse({}));
  }

  async modifyDBClusterMigration(request: ModifyDBClusterMigrationRequest): Promise<ModifyDBClusterMigrationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterMigrationWithOptions(request, runtime);
  }

  async modifyAutoRenewAttributeWithOptions(request: ModifyAutoRenewAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAutoRenewAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAutoRenewAttributeResponse>(await this.doRequest("ModifyAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyAutoRenewAttributeResponse({}));
  }

  async modifyAutoRenewAttribute(request: ModifyAutoRenewAttributeRequest): Promise<ModifyAutoRenewAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAutoRenewAttributeWithOptions(request, runtime);
  }

  async modifyDBNodeClassWithOptions(request: ModifyDBNodeClassRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBNodeClassResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBNodeClassResponse>(await this.doRequest("ModifyDBNodeClass", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBNodeClassResponse({}));
  }

  async modifyDBNodeClass(request: ModifyDBNodeClassRequest): Promise<ModifyDBNodeClassResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBNodeClassWithOptions(request, runtime);
  }

  async describeAutoRenewAttributeWithOptions(request: DescribeAutoRenewAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAutoRenewAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAutoRenewAttributeResponse>(await this.doRequest("DescribeAutoRenewAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeAutoRenewAttributeResponse({}));
  }

  async describeAutoRenewAttribute(request: DescribeAutoRenewAttributeRequest): Promise<DescribeAutoRenewAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAutoRenewAttributeWithOptions(request, runtime);
  }

  async createDBNodesWithOptions(request: CreateDBNodesRequest, runtime: $Util.RuntimeOptions): Promise<CreateDBNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDBNodesResponse>(await this.doRequest("CreateDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateDBNodesResponse({}));
  }

  async createDBNodes(request: CreateDBNodesRequest): Promise<CreateDBNodesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDBNodesWithOptions(request, runtime);
  }

  async deleteDBNodesWithOptions(request: DeleteDBNodesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDBNodesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDBNodesResponse>(await this.doRequest("DeleteDBNodes", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteDBNodesResponse({}));
  }

  async deleteDBNodes(request: DeleteDBNodesRequest): Promise<DeleteDBNodesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDBNodesWithOptions(request, runtime);
  }

  async untagResourcesWithOptions(request: UntagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UntagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UntagResourcesResponse>(await this.doRequest("UntagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new UntagResourcesResponse({}));
  }

  async untagResources(request: UntagResourcesRequest): Promise<UntagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.untagResourcesWithOptions(request, runtime);
  }

  async tagResourcesWithOptions(request: TagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<TagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourcesResponse>(await this.doRequest("TagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new TagResourcesResponse({}));
  }

  async tagResources(request: TagResourcesRequest): Promise<TagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourcesWithOptions(request, runtime);
  }

  async listTagResourcesWithOptions(request: ListTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagResourcesResponse>(await this.doRequest("ListTagResources", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ListTagResourcesResponse({}));
  }

  async listTagResources(request: ListTagResourcesRequest): Promise<ListTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagResourcesWithOptions(request, runtime);
  }

  async modifyDBEndpointAddressWithOptions(request: ModifyDBEndpointAddressRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBEndpointAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBEndpointAddressResponse>(await this.doRequest("ModifyDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBEndpointAddressResponse({}));
  }

  async modifyDBEndpointAddress(request: ModifyDBEndpointAddressRequest): Promise<ModifyDBEndpointAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBEndpointAddressWithOptions(request, runtime);
  }

  async modifyDBDescriptionWithOptions(request: ModifyDBDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBDescriptionResponse>(await this.doRequest("ModifyDBDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBDescriptionResponse({}));
  }

  async modifyDBDescription(request: ModifyDBDescriptionRequest): Promise<ModifyDBDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBDescriptionWithOptions(request, runtime);
  }

  async modifyDBClusterParametersWithOptions(request: ModifyDBClusterParametersRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterParametersResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterParametersResponse>(await this.doRequest("ModifyDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterParametersResponse({}));
  }

  async modifyDBClusterParameters(request: ModifyDBClusterParametersRequest): Promise<ModifyDBClusterParametersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterParametersWithOptions(request, runtime);
  }

  async modifyDBClusterEndpointWithOptions(request: ModifyDBClusterEndpointRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterEndpointResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterEndpointResponse>(await this.doRequest("ModifyDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterEndpointResponse({}));
  }

  async modifyDBClusterEndpoint(request: ModifyDBClusterEndpointRequest): Promise<ModifyDBClusterEndpointResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterEndpointWithOptions(request, runtime);
  }

  async modifyAccountPasswordWithOptions(request: ModifyAccountPasswordRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAccountPasswordResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAccountPasswordResponse>(await this.doRequest("ModifyAccountPassword", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyAccountPasswordResponse({}));
  }

  async modifyAccountPassword(request: ModifyAccountPasswordRequest): Promise<ModifyAccountPasswordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAccountPasswordWithOptions(request, runtime);
  }

  async describeDBClusterPerformanceWithOptions(request: DescribeDBClusterPerformanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterPerformanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterPerformanceResponse>(await this.doRequest("DescribeDBClusterPerformance", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterPerformanceResponse({}));
  }

  async describeDBClusterPerformance(request: DescribeDBClusterPerformanceRequest): Promise<DescribeDBClusterPerformanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterPerformanceWithOptions(request, runtime);
  }

  async describeDBClusterParametersWithOptions(request: DescribeDBClusterParametersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterParametersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterParametersResponse>(await this.doRequest("DescribeDBClusterParameters", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterParametersResponse({}));
  }

  async describeDBClusterParameters(request: DescribeDBClusterParametersRequest): Promise<DescribeDBClusterParametersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterParametersWithOptions(request, runtime);
  }

  async describeDBClusterEndpointsWithOptions(request: DescribeDBClusterEndpointsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterEndpointsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterEndpointsResponse>(await this.doRequest("DescribeDBClusterEndpoints", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterEndpointsResponse({}));
  }

  async describeDBClusterEndpoints(request: DescribeDBClusterEndpointsRequest): Promise<DescribeDBClusterEndpointsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterEndpointsWithOptions(request, runtime);
  }

  async deleteDBEndpointAddressWithOptions(request: DeleteDBEndpointAddressRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDBEndpointAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDBEndpointAddressResponse>(await this.doRequest("DeleteDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteDBEndpointAddressResponse({}));
  }

  async deleteDBEndpointAddress(request: DeleteDBEndpointAddressRequest): Promise<DeleteDBEndpointAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDBEndpointAddressWithOptions(request, runtime);
  }

  async deleteDBClusterEndpointWithOptions(request: DeleteDBClusterEndpointRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDBClusterEndpointResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDBClusterEndpointResponse>(await this.doRequest("DeleteDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteDBClusterEndpointResponse({}));
  }

  async deleteDBClusterEndpoint(request: DeleteDBClusterEndpointRequest): Promise<DeleteDBClusterEndpointResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDBClusterEndpointWithOptions(request, runtime);
  }

  async createDBEndpointAddressWithOptions(request: CreateDBEndpointAddressRequest, runtime: $Util.RuntimeOptions): Promise<CreateDBEndpointAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDBEndpointAddressResponse>(await this.doRequest("CreateDBEndpointAddress", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateDBEndpointAddressResponse({}));
  }

  async createDBEndpointAddress(request: CreateDBEndpointAddressRequest): Promise<CreateDBEndpointAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDBEndpointAddressWithOptions(request, runtime);
  }

  async createDBClusterEndpointWithOptions(request: CreateDBClusterEndpointRequest, runtime: $Util.RuntimeOptions): Promise<CreateDBClusterEndpointResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDBClusterEndpointResponse>(await this.doRequest("CreateDBClusterEndpoint", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateDBClusterEndpointResponse({}));
  }

  async createDBClusterEndpoint(request: CreateDBClusterEndpointRequest): Promise<CreateDBClusterEndpointResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDBClusterEndpointWithOptions(request, runtime);
  }

  async restartDBNodeWithOptions(request: RestartDBNodeRequest, runtime: $Util.RuntimeOptions): Promise<RestartDBNodeResponse> {
    Util.validateModel(request);
    return $tea.cast<RestartDBNodeResponse>(await this.doRequest("RestartDBNode", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new RestartDBNodeResponse({}));
  }

  async restartDBNode(request: RestartDBNodeRequest): Promise<RestartDBNodeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restartDBNodeWithOptions(request, runtime);
  }

  async describeDBNodePerformanceWithOptions(request: DescribeDBNodePerformanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBNodePerformanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBNodePerformanceResponse>(await this.doRequest("DescribeDBNodePerformance", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBNodePerformanceResponse({}));
  }

  async describeDBNodePerformance(request: DescribeDBNodePerformanceRequest): Promise<DescribeDBNodePerformanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBNodePerformanceWithOptions(request, runtime);
  }

  async modifyDBClusterAccessWhitelistWithOptions(request: ModifyDBClusterAccessWhitelistRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterAccessWhitelistResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterAccessWhitelistResponse>(await this.doRequest("ModifyDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterAccessWhitelistResponse({}));
  }

  async modifyDBClusterAccessWhitelist(request: ModifyDBClusterAccessWhitelistRequest): Promise<ModifyDBClusterAccessWhitelistResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterAccessWhitelistWithOptions(request, runtime);
  }

  async describeDBClusterAccessWhitelistWithOptions(request: DescribeDBClusterAccessWhitelistRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterAccessWhitelistResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterAccessWhitelistResponse>(await this.doRequest("DescribeDBClusterAccessWhitelist", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterAccessWhitelistResponse({}));
  }

  async describeDBClusterAccessWhitelist(request: DescribeDBClusterAccessWhitelistRequest): Promise<DescribeDBClusterAccessWhitelistResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterAccessWhitelistWithOptions(request, runtime);
  }

  async modifyDBClusterMaintainTimeWithOptions(request: ModifyDBClusterMaintainTimeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterMaintainTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterMaintainTimeResponse>(await this.doRequest("ModifyDBClusterMaintainTime", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterMaintainTimeResponse({}));
  }

  async modifyDBClusterMaintainTime(request: ModifyDBClusterMaintainTimeRequest): Promise<ModifyDBClusterMaintainTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterMaintainTimeWithOptions(request, runtime);
  }

  async revokeAccountPrivilegeWithOptions(request: RevokeAccountPrivilegeRequest, runtime: $Util.RuntimeOptions): Promise<RevokeAccountPrivilegeResponse> {
    Util.validateModel(request);
    return $tea.cast<RevokeAccountPrivilegeResponse>(await this.doRequest("RevokeAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new RevokeAccountPrivilegeResponse({}));
  }

  async revokeAccountPrivilege(request: RevokeAccountPrivilegeRequest): Promise<RevokeAccountPrivilegeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.revokeAccountPrivilegeWithOptions(request, runtime);
  }

  async resetAccountWithOptions(request: ResetAccountRequest, runtime: $Util.RuntimeOptions): Promise<ResetAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<ResetAccountResponse>(await this.doRequest("ResetAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ResetAccountResponse({}));
  }

  async resetAccount(request: ResetAccountRequest): Promise<ResetAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resetAccountWithOptions(request, runtime);
  }

  async grantAccountPrivilegeWithOptions(request: GrantAccountPrivilegeRequest, runtime: $Util.RuntimeOptions): Promise<GrantAccountPrivilegeResponse> {
    Util.validateModel(request);
    return $tea.cast<GrantAccountPrivilegeResponse>(await this.doRequest("GrantAccountPrivilege", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new GrantAccountPrivilegeResponse({}));
  }

  async grantAccountPrivilege(request: GrantAccountPrivilegeRequest): Promise<GrantAccountPrivilegeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.grantAccountPrivilegeWithOptions(request, runtime);
  }

  async describeDatabasesWithOptions(request: DescribeDatabasesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDatabasesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDatabasesResponse>(await this.doRequest("DescribeDatabases", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDatabasesResponse({}));
  }

  async describeDatabases(request: DescribeDatabasesRequest): Promise<DescribeDatabasesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDatabasesWithOptions(request, runtime);
  }

  async deleteDatabaseWithOptions(request: DeleteDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDatabaseResponse>(await this.doRequest("DeleteDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteDatabaseResponse({}));
  }

  async deleteDatabase(request: DeleteDatabaseRequest): Promise<DeleteDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDatabaseWithOptions(request, runtime);
  }

  async deleteAccountWithOptions(request: DeleteAccountRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAccountResponse>(await this.doRequest("DeleteAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteAccountResponse({}));
  }

  async deleteAccount(request: DeleteAccountRequest): Promise<DeleteAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAccountWithOptions(request, runtime);
  }

  async createDatabaseWithOptions(request: CreateDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<CreateDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDatabaseResponse>(await this.doRequest("CreateDatabase", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateDatabaseResponse({}));
  }

  async createDatabase(request: CreateDatabaseRequest): Promise<CreateDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDatabaseWithOptions(request, runtime);
  }

  async deleteBackupWithOptions(request: DeleteBackupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBackupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBackupResponse>(await this.doRequest("DeleteBackup", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteBackupResponse({}));
  }

  async deleteBackup(request: DeleteBackupRequest): Promise<DeleteBackupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBackupWithOptions(request, runtime);
  }

  async describeSlowLogsWithOptions(request: DescribeSlowLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSlowLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSlowLogsResponse>(await this.doRequest("DescribeSlowLogs", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeSlowLogsResponse({}));
  }

  async describeSlowLogs(request: DescribeSlowLogsRequest): Promise<DescribeSlowLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSlowLogsWithOptions(request, runtime);
  }

  async describeSlowLogRecordsWithOptions(request: DescribeSlowLogRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSlowLogRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSlowLogRecordsResponse>(await this.doRequest("DescribeSlowLogRecords", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeSlowLogRecordsResponse({}));
  }

  async describeSlowLogRecords(request: DescribeSlowLogRecordsRequest): Promise<DescribeSlowLogRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSlowLogRecordsWithOptions(request, runtime);
  }

  async failoverDBClusterWithOptions(request: FailoverDBClusterRequest, runtime: $Util.RuntimeOptions): Promise<FailoverDBClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<FailoverDBClusterResponse>(await this.doRequest("FailoverDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new FailoverDBClusterResponse({}));
  }

  async failoverDBCluster(request: FailoverDBClusterRequest): Promise<FailoverDBClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.failoverDBClusterWithOptions(request, runtime);
  }

  async modifyDBClusterDescriptionWithOptions(request: ModifyDBClusterDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBClusterDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBClusterDescriptionResponse>(await this.doRequest("ModifyDBClusterDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyDBClusterDescriptionResponse({}));
  }

  async modifyDBClusterDescription(request: ModifyDBClusterDescriptionRequest): Promise<ModifyDBClusterDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBClusterDescriptionWithOptions(request, runtime);
  }

  async modifyAccountDescriptionWithOptions(request: ModifyAccountDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAccountDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAccountDescriptionResponse>(await this.doRequest("ModifyAccountDescription", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyAccountDescriptionResponse({}));
  }

  async modifyAccountDescription(request: ModifyAccountDescriptionRequest): Promise<ModifyAccountDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAccountDescriptionWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeAccountsWithOptions(request: DescribeAccountsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAccountsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAccountsResponse>(await this.doRequest("DescribeAccounts", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeAccountsResponse({}));
  }

  async describeAccounts(request: DescribeAccountsRequest): Promise<DescribeAccountsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAccountsWithOptions(request, runtime);
  }

  async deleteDBClusterWithOptions(request: DeleteDBClusterRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDBClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDBClusterResponse>(await this.doRequest("DeleteDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DeleteDBClusterResponse({}));
  }

  async deleteDBCluster(request: DeleteDBClusterRequest): Promise<DeleteDBClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDBClusterWithOptions(request, runtime);
  }

  async createDBClusterWithOptions(request: CreateDBClusterRequest, runtime: $Util.RuntimeOptions): Promise<CreateDBClusterResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDBClusterResponse>(await this.doRequest("CreateDBCluster", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateDBClusterResponse({}));
  }

  async createDBCluster(request: CreateDBClusterRequest): Promise<CreateDBClusterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDBClusterWithOptions(request, runtime);
  }

  async createBackupWithOptions(request: CreateBackupRequest, runtime: $Util.RuntimeOptions): Promise<CreateBackupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateBackupResponse>(await this.doRequest("CreateBackup", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateBackupResponse({}));
  }

  async createBackup(request: CreateBackupRequest): Promise<CreateBackupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createBackupWithOptions(request, runtime);
  }

  async createAccountWithOptions(request: CreateAccountRequest, runtime: $Util.RuntimeOptions): Promise<CreateAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAccountResponse>(await this.doRequest("CreateAccount", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new CreateAccountResponse({}));
  }

  async createAccount(request: CreateAccountRequest): Promise<CreateAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAccountWithOptions(request, runtime);
  }

  async describeBackupsWithOptions(request: DescribeBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupsResponse>(await this.doRequest("DescribeBackups", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeBackupsResponse({}));
  }

  async describeBackups(request: DescribeBackupsRequest): Promise<DescribeBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupsWithOptions(request, runtime);
  }

  async modifyBackupPolicyWithOptions(request: ModifyBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBackupPolicyResponse>(await this.doRequest("ModifyBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new ModifyBackupPolicyResponse({}));
  }

  async modifyBackupPolicy(request: ModifyBackupPolicyRequest): Promise<ModifyBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBackupPolicyWithOptions(request, runtime);
  }

  async describeBackupPolicyWithOptions(request: DescribeBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupPolicyResponse>(await this.doRequest("DescribeBackupPolicy", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeBackupPolicyResponse({}));
  }

  async describeBackupPolicy(request: DescribeBackupPolicyRequest): Promise<DescribeBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupPolicyWithOptions(request, runtime);
  }

  async describeDBClustersWithOptions(request: DescribeDBClustersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClustersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClustersResponse>(await this.doRequest("DescribeDBClusters", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClustersResponse({}));
  }

  async describeDBClusters(request: DescribeDBClustersRequest): Promise<DescribeDBClustersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClustersWithOptions(request, runtime);
  }

  async describeDBClusterAttributeWithOptions(request: DescribeDBClusterAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBClusterAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBClusterAttributeResponse>(await this.doRequest("DescribeDBClusterAttribute", "HTTPS", "POST", "2017-08-01", "AK", null, $tea.toMap(request), runtime), new DescribeDBClusterAttributeResponse({}));
  }

  async describeDBClusterAttribute(request: DescribeDBClusterAttributeRequest): Promise<DescribeDBClusterAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBClusterAttributeWithOptions(request, runtime);
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

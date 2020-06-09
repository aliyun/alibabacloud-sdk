// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DescribeDedicatedHostImageCategoriesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  hostGroup: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      hostGroup: 'HostGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      hostGroup: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostImageCategoriesResponse extends $tea.Model {
  requestId: string;
  images: DescribeDedicatedHostImageCategoriesResponseImages;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      images: 'Images',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      images: DescribeDedicatedHostImageCategoriesResponseImages,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossBackupMetaListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  backupSetId: string;
  getDbName?: string;
  pattern?: string;
  pageSize?: string;
  pageIndex?: string;
  region?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      backupSetId: 'BackupSetId',
      getDbName: 'GetDbName',
      pattern: 'Pattern',
      pageSize: 'PageSize',
      pageIndex: 'PageIndex',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      backupSetId: 'string',
      getDbName: 'string',
      pattern: 'string',
      pageSize: 'string',
      pageIndex: 'string',
      region: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossBackupMetaListResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  pageNumber: number;
  pageRecordCount: number;
  totalRecordCount: number;
  totalPageCount: number;
  items: DescribeCrossBackupMetaListResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalRecordCount: 'TotalRecordCount',
      totalPageCount: 'TotalPageCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      pageNumber: 'number',
      pageRecordCount: 'number',
      totalRecordCount: 'number',
      totalPageCount: 'number',
      items: DescribeCrossBackupMetaListResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreDdrTableRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId?: string;
  clientToken?: string;
  restoreType: string;
  backupId?: string;
  restoreTime?: string;
  sourceRegion?: string;
  sourceDBInstanceName?: string;
  tableMeta?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      restoreType: 'RestoreType',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      sourceRegion: 'SourceRegion',
      sourceDBInstanceName: 'SourceDBInstanceName',
      tableMeta: 'TableMeta',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
      clientToken: 'string',
      restoreType: 'string',
      backupId: 'string',
      restoreTime: 'string',
      sourceRegion: 'string',
      sourceDBInstanceName: 'string',
      tableMeta: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreDdrTableResponse extends $tea.Model {
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

export class ModifyDBProxyEndpointAddressRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBProxyEndpointId: string;
  DBProxyNewConnectString?: string;
  DBProxyNewConnectStringPort?: string;
  DBProxyConnectStringNetType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBProxyEndpointId: 'DBProxyEndpointId',
      DBProxyNewConnectString: 'DBProxyNewConnectString',
      DBProxyNewConnectStringPort: 'DBProxyNewConnectStringPort',
      DBProxyConnectStringNetType: 'DBProxyConnectStringNetType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBProxyEndpointId: 'string',
      DBProxyNewConnectString: 'string',
      DBProxyNewConnectStringPort: 'string',
      DBProxyConnectStringNetType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBProxyEndpointAddressResponse extends $tea.Model {
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

export class TerminateMigrateTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  migrateTaskId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      migrateTaskId: 'MigrateTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      migrateTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TerminateMigrateTaskResponse extends $tea.Model {
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

export class DescribeLocalAvailableRecoveryTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  region?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      region: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLocalAvailableRecoveryTimeResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  recoveryBeginTime: string;
  recoveryEndTime: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      recoveryBeginTime: 'RecoveryBeginTime',
      recoveryEndTime: 'RecoveryEndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      recoveryBeginTime: 'string',
      recoveryEndTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesRequest extends $tea.Model {
  resourceOwnerId?: number;
  regionId: string;
  engine: string;
  zoneId?: string;
  engineVersion?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      engine: 'Engine',
      zoneId: 'ZoneId',
      engineVersion: 'EngineVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      regionId: 'string',
      engine: 'string',
      zoneId: 'string',
      engineVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponse extends $tea.Model {
  requestId: string;
  availableZones: DescribeAvailableZonesResponseAvailableZones[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      availableZones: 'AvailableZones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      availableZones: { 'type': 'array', 'itemType': DescribeAvailableZonesResponseAvailableZones },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableClassesRequest extends $tea.Model {
  resourceOwnerId?: number;
  regionId: string;
  zoneId: string;
  instanceChargeType: string;
  engine: string;
  engineVersion: string;
  DBInstanceId?: string;
  orderType?: string;
  DBInstanceStorageType: string;
  category: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      instanceChargeType: 'InstanceChargeType',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceId: 'DBInstanceId',
      orderType: 'OrderType',
      DBInstanceStorageType: 'DBInstanceStorageType',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      regionId: 'string',
      zoneId: 'string',
      instanceChargeType: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceId: 'string',
      orderType: 'string',
      DBInstanceStorageType: 'string',
      category: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableClassesResponse extends $tea.Model {
  requestId: string;
  DBInstanceClasses: DescribeAvailableClassesResponseDBInstanceClasses[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceClasses: 'DBInstanceClasses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceClasses: { 'type': 'array', 'itemType': DescribeAvailableClassesResponseDBInstanceClasses },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostId: string;
  accountName: string;
  accountPassword: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostId: 'DedicatedHostId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostAccountResponse extends $tea.Model {
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

export class DeleteDedicatedHostAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostId: string;
  accountName: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostId: 'DedicatedHostId',
      accountName: 'AccountName',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostId: 'string',
      accountName: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDedicatedHostAccountResponse extends $tea.Model {
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

export class ModifyDedicatedHostAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostId: string;
  accountName: string;
  accountPassword: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostId: 'DedicatedHostId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDedicatedHostAccountResponse extends $tea.Model {
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

export class CreateDedicatedHostUserRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostName: string;
  userName: string;
  userPassword: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostName: 'DedicatedHostName',
      userName: 'UserName',
      userPassword: 'UserPassword',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostName: 'string',
      userName: 'string',
      userPassword: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostUserResponse extends $tea.Model {
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

export class ModifyDedicatedHostUserRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostName: string;
  userName: string;
  oldPassword: string;
  newPassword: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostName: 'DedicatedHostName',
      userName: 'UserName',
      oldPassword: 'OldPassword',
      newPassword: 'NewPassword',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostName: 'string',
      userName: 'string',
      oldPassword: 'string',
      newPassword: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDedicatedHostUserResponse extends $tea.Model {
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

export class DropDedicatedHostUserRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostName: string;
  userName: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostName: 'DedicatedHostName',
      userName: 'UserName',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostName: 'string',
      userName: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DropDedicatedHostUserResponse extends $tea.Model {
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

export class UpgradeDBProxyInstanceKernelVersionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  upgradeTime?: string;
  switchTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      upgradeTime: 'UpgradeTime',
      switchTime: 'SwitchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      upgradeTime: 'string',
      switchTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeDBProxyInstanceKernelVersionResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  taskId: string;
  targetMinorVersion: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      taskId: 'TaskId',
      targetMinorVersion: 'TargetMinorVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      taskId: 'string',
      targetMinorVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StopDBInstanceResponse extends $tea.Model {
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

export class StartDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  DBInstanceId: string;
  targetDedicatedHostIdForMaster?: string;
  targetDedicatedHostIdForSlave?: string;
  targetDedicatedHostIdForLog?: string;
  effectiveTime?: string;
  specifiedTime?: string;
  targetDBInstanceClass?: string;
  engineVersion?: string;
  DBInstanceTransType?: number;
  storage?: number;
  VSwitchId?: string;
  zoneId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      DBInstanceId: 'DBInstanceId',
      targetDedicatedHostIdForMaster: 'TargetDedicatedHostIdForMaster',
      targetDedicatedHostIdForSlave: 'TargetDedicatedHostIdForSlave',
      targetDedicatedHostIdForLog: 'TargetDedicatedHostIdForLog',
      effectiveTime: 'EffectiveTime',
      specifiedTime: 'SpecifiedTime',
      targetDBInstanceClass: 'TargetDBInstanceClass',
      engineVersion: 'EngineVersion',
      DBInstanceTransType: 'DBInstanceTransType',
      storage: 'Storage',
      VSwitchId: 'VSwitchId',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      DBInstanceId: 'string',
      targetDedicatedHostIdForMaster: 'string',
      targetDedicatedHostIdForSlave: 'string',
      targetDedicatedHostIdForLog: 'string',
      effectiveTime: 'string',
      specifiedTime: 'string',
      targetDBInstanceClass: 'string',
      engineVersion: 'string',
      DBInstanceTransType: 'number',
      storage: 'number',
      VSwitchId: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class StartDBInstanceResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  migrationId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      migrationId: 'MigrationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
      migrationId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSignedEventActionsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  beginEventId?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      beginEventId: 'BeginEventId',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      beginEventId: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSignedEventActionsResponse extends $tea.Model {
  requestId: string;
  nextPageEventId: number;
  pageRecordCount: number;
  fromBegin: boolean;
  toEnd: boolean;
  eventItems: DescribeSignedEventActionsResponseEventItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextPageEventId: 'NextPageEventId',
      pageRecordCount: 'PageRecordCount',
      fromBegin: 'FromBegin',
      toEnd: 'ToEnd',
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextPageEventId: 'number',
      pageRecordCount: 'number',
      fromBegin: 'boolean',
      toEnd: 'boolean',
      eventItems: DescribeSignedEventActionsResponseEventItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SignEventActionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  eventId: number;
  eventSig: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      eventId: 'EventId',
      eventSig: 'EventSig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      eventId: 'number',
      eventSig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SignEventActionResponse extends $tea.Model {
  requestId: string;
  eventId: string;
  eventRcpt: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eventId: 'EventId',
      eventRcpt: 'EventRcpt',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eventId: 'string',
      eventRcpt: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNextEventForSignRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNextEventForSignResponse extends $tea.Model {
  requestId: string;
  eventItems: DescribeNextEventForSignResponseEventItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      eventItems: DescribeNextEventForSignResponseEventItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyActionEventVerifyPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  userPublicKey: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      userPublicKey: 'UserPublicKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      userPublicKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyActionEventVerifyPolicyResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  serverPublicKey: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      serverPublicKey: 'ServerPublicKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      serverPublicKey: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  engine?: string;
  zoneId?: string;
  expired?: string;
  DBInstanceId?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'ProxyId',
      engine: 'Engine',
      zoneId: 'ZoneId',
      expired: 'Expired',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      engine: 'string',
      zoneId: 'string',
      expired: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponse extends $tea.Model {
  requestId: string;
  regions: DescribeDBInstancesOverviewResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: DescribeDBInstancesOverviewResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTaskByIdRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  migrateTaskId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      migrateTaskId: 'MigrateTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      migrateTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTaskByIdResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  DBName: string;
  migrateTaskId: string;
  createTime: string;
  endTime: string;
  backupMode: string;
  status: string;
  isDBReplaced: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      DBName: 'DBName',
      migrateTaskId: 'MigrateTaskId',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      backupMode: 'BackupMode',
      status: 'Status',
      isDBReplaced: 'IsDBReplaced',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      DBName: 'string',
      migrateTaskId: 'string',
      createTime: 'string',
      endTime: 'string',
      backupMode: 'string',
      status: 'string',
      isDBReplaced: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBackupFileRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  DBInstanceId: string;
  backupId?: string;
  DBName?: string;
  backupTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      DBName: 'DBName',
      backupTime: 'BackupTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      DBInstanceId: 'string',
      backupId: 'string',
      DBName: 'string',
      backupTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBackupFileResponse extends $tea.Model {
  requestId: string;
  deletedBaksetIds: DeleteBackupFileResponseDeletedBaksetIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      deletedBaksetIds: 'DeletedBaksetIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      deletedBaksetIds: DeleteBackupFileResponseDeletedBaksetIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDetachedBackupsRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId?: string;
  backupId?: string;
  backupStatus?: string;
  backupMode?: string;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNumber?: number;
  region: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      backupStatus: 'BackupStatus',
      backupMode: 'BackupMode',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupId: 'string',
      backupStatus: 'string',
      backupMode: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      region: 'string',
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
  totalBackupSize: number;
  items: DescribeDetachedBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalBackupSize: 'TotalBackupSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'string',
      pageNumber: 'string',
      pageRecordCount: 'string',
      totalBackupSize: 'number',
      items: DescribeDetachedBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EvaluateDedicatedHostInstanceResourceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  dedicatedHostGroupId: string;
  diskType?: string;
  diskSize?: string;
  instanceClassNames: string;
  engine: string;
  engineVersion: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      diskType: 'DiskType',
      diskSize: 'DiskSize',
      instanceClassNames: 'InstanceClassNames',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      diskType: 'string',
      diskSize: 'string',
      instanceClassNames: 'string',
      engine: 'string',
      engineVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class EvaluateDedicatedHostInstanceResourceResponse extends $tea.Model {
  requestId: string;
  DBInstanceClass: string;
  available: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceClass: 'DBInstanceClass',
      available: 'Available',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceClass: 'string',
      available: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostClassesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  zoneId: string;
  storageType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      storageType: 'StorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      zoneId: 'string',
      storageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostClassesResponse extends $tea.Model {
  requestId: string;
  hostClasses: DescribeAvailableDedicatedHostClassesResponseHostClasses;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      hostClasses: 'HostClasses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      hostClasses: DescribeAvailableDedicatedHostClassesResponseHostClasses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostZonesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostZonesResponse extends $tea.Model {
  requestId: string;
  zones: DescribeAvailableDedicatedHostZonesResponseZones;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      zones: 'Zones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      zones: DescribeAvailableDedicatedHostZonesResponseZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseInstanceConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  currentConnectionString: string;
  instanceNetworkType: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      currentConnectionString: 'CurrentConnectionString',
      instanceNetworkType: 'InstanceNetworkType',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      currentConnectionString: 'string',
      instanceNetworkType: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseInstanceConnectionResponse extends $tea.Model {
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

export class UnlockAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnlockAccountResponse extends $tea.Model {
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

export class LockAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class LockAccountResponse extends $tea.Model {
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
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  resourceType: string;
  nextToken?: string;
  resourceId?: string[];
  tag?: ListTagResourcesRequestTag[];
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      nextToken: 'NextToken',
      resourceId: 'ResourceId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      resourceType: 'string',
      nextToken: 'string',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tag: { 'type': 'array', 'itemType': ListTagResourcesRequestTag },
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

export class TagResourcesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  resourceType: string;
  resourceId: string[];
  tag?: TagResourcesRequestTag[];
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      resourceId: 'ResourceId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
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

export class UntagResourcesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  resourceType: string;
  all?: boolean;
  resourceId: string[];
  tagKey?: string[];
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      resourceType: 'ResourceType',
      all: 'All',
      resourceId: 'ResourceId',
      tagKey: 'TagKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      resourceType: 'string',
      all: 'boolean',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tagKey: { 'type': 'array', 'itemType': 'string' },
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

export class DescribeDedicatedHostGroupsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  dedicatedHostGroupId?: string;
  imageCategory?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      imageCategory: 'ImageCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      imageCategory: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostGroupsResponse extends $tea.Model {
  requestId: string;
  dedicatedHostGroups: DescribeDedicatedHostGroupsResponseDedicatedHostGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dedicatedHostGroups: 'DedicatedHostGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dedicatedHostGroups: DescribeDedicatedHostGroupsResponseDedicatedHostGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  engine: string;
  cpuAllocationRatio?: number;
  memAllocationRatio?: number;
  diskAllocationRatio?: number;
  allocationPolicy?: string;
  VPCId: string;
  hostReplacePolicy?: string;
  clientToken: string;
  openPermission?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      engine: 'Engine',
      cpuAllocationRatio: 'CpuAllocationRatio',
      memAllocationRatio: 'MemAllocationRatio',
      diskAllocationRatio: 'DiskAllocationRatio',
      allocationPolicy: 'AllocationPolicy',
      VPCId: 'VPCId',
      hostReplacePolicy: 'HostReplacePolicy',
      clientToken: 'ClientToken',
      openPermission: 'OpenPermission',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      engine: 'string',
      cpuAllocationRatio: 'number',
      memAllocationRatio: 'number',
      diskAllocationRatio: 'number',
      allocationPolicy: 'string',
      VPCId: 'string',
      hostReplacePolicy: 'string',
      clientToken: 'string',
      openPermission: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostGroupResponse extends $tea.Model {
  requestId: string;
  dedicatedHostGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dedicatedHostGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDedicatedHostGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  dedicatedHostGroupId: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      dedicatedHostGroupId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDedicatedHostGroupResponse extends $tea.Model {
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

export class ModifyDedicatedHostGroupAttributeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  dedicatedHostGroupDesc?: string;
  cpuAllocationRatio?: number;
  memAllocationRatio?: number;
  diskAllocationRatio?: number;
  allocationPolicy?: string;
  hostReplacePolicy?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHostGroupDesc: 'DedicatedHostGroupDesc',
      cpuAllocationRatio: 'CpuAllocationRatio',
      memAllocationRatio: 'MemAllocationRatio',
      diskAllocationRatio: 'DiskAllocationRatio',
      allocationPolicy: 'AllocationPolicy',
      hostReplacePolicy: 'HostReplacePolicy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      dedicatedHostGroupDesc: 'string',
      cpuAllocationRatio: 'number',
      memAllocationRatio: 'number',
      diskAllocationRatio: 'number',
      allocationPolicy: 'string',
      hostReplacePolicy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDedicatedHostGroupAttributeResponse extends $tea.Model {
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

export class RestartDedicatedHostRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostId: string;
  failoverMode: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostId: 'DedicatedHostId',
      failoverMode: 'FailoverMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostId: 'string',
      failoverMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestartDedicatedHostResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  dedicatedHostId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      dedicatedHostId: 'DedicatedHostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
      dedicatedHostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReplaceDedicatedHostRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostId: string;
  failoverMode: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostId: 'DedicatedHostId',
      failoverMode: 'FailoverMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostId: 'string',
      failoverMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReplaceDedicatedHostResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  dedicatedHostId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      dedicatedHostId: 'DedicatedHostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
      dedicatedHostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  orderId?: number;
  hostType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      orderId: 'OrderId',
      hostType: 'HostType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      orderId: 'number',
      hostType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostsResponse extends $tea.Model {
  requestId: string;
  dedicatedHostGroupId: string;
  dedicatedHosts: DescribeDedicatedHostsResponseDedicatedHosts;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHosts: 'DedicatedHosts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dedicatedHostGroupId: 'string',
      dedicatedHosts: DescribeDedicatedHostsResponseDedicatedHosts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostAttributeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostId: string;
  dedicatedHostGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostId: 'DedicatedHostId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostId: 'string',
      dedicatedHostGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostAttributeResponse extends $tea.Model {
  requestId: string;
  dedicatedHostGroupId: string;
  dedicatedHostId: string;
  regionId: string;
  zoneId: string;
  VPCId: string;
  VSwitchId: string;
  IPAddress: string;
  hostName: string;
  hostStatus: string;
  hostClass: string;
  hostCPU: number;
  hostMem: number;
  hostStorage: number;
  CPUAllocationRatio: string;
  memAllocationRatio: string;
  diskAllocationRatio: string;
  instanceNumber: number;
  instanceNumberMaster: number;
  instanceNumberSlave: number;
  instanceNumberROMaster: number;
  instanceNumberROSlave: number;
  createdTime: string;
  expiredTime: string;
  autoRenew: string;
  allocationStatus: string;
  cpuUsed: string;
  memoryUsed: string;
  storageUsed: string;
  hostType: string;
  accountName: string;
  openPermission: string;
  imageCategory: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHostId: 'DedicatedHostId',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      IPAddress: 'IPAddress',
      hostName: 'HostName',
      hostStatus: 'HostStatus',
      hostClass: 'HostClass',
      hostCPU: 'HostCPU',
      hostMem: 'HostMem',
      hostStorage: 'HostStorage',
      CPUAllocationRatio: 'CPUAllocationRatio',
      memAllocationRatio: 'MemAllocationRatio',
      diskAllocationRatio: 'DiskAllocationRatio',
      instanceNumber: 'InstanceNumber',
      instanceNumberMaster: 'InstanceNumberMaster',
      instanceNumberSlave: 'InstanceNumberSlave',
      instanceNumberROMaster: 'InstanceNumberROMaster',
      instanceNumberROSlave: 'InstanceNumberROSlave',
      createdTime: 'CreatedTime',
      expiredTime: 'ExpiredTime',
      autoRenew: 'AutoRenew',
      allocationStatus: 'AllocationStatus',
      cpuUsed: 'CpuUsed',
      memoryUsed: 'MemoryUsed',
      storageUsed: 'StorageUsed',
      hostType: 'HostType',
      accountName: 'AccountName',
      openPermission: 'OpenPermission',
      imageCategory: 'ImageCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dedicatedHostGroupId: 'string',
      dedicatedHostId: 'string',
      regionId: 'string',
      zoneId: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      IPAddress: 'string',
      hostName: 'string',
      hostStatus: 'string',
      hostClass: 'string',
      hostCPU: 'number',
      hostMem: 'number',
      hostStorage: 'number',
      CPUAllocationRatio: 'string',
      memAllocationRatio: 'string',
      diskAllocationRatio: 'string',
      instanceNumber: 'number',
      instanceNumberMaster: 'number',
      instanceNumberSlave: 'number',
      instanceNumberROMaster: 'number',
      instanceNumberROSlave: 'number',
      createdTime: 'string',
      expiredTime: 'string',
      autoRenew: 'string',
      allocationStatus: 'string',
      cpuUsed: 'string',
      memoryUsed: 'string',
      storageUsed: 'string',
      hostType: 'string',
      accountName: 'string',
      openPermission: 'string',
      imageCategory: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClearDedicatedHostRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostId: string;
  failoverMode: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostId: 'DedicatedHostId',
      failoverMode: 'FailoverMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostId: 'string',
      failoverMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ClearDedicatedHostResponse extends $tea.Model {
  requestId: string;
  taskId: string;
  dedicatedHostId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      dedicatedHostId: 'DedicatedHostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'string',
      dedicatedHostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDedicatedHostAttributeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostId: string;
  hostName?: string;
  allocationStatus?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostId: 'DedicatedHostId',
      hostName: 'HostName',
      allocationStatus: 'AllocationStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostId: 'string',
      hostName: 'string',
      allocationStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDedicatedHostAttributeResponse extends $tea.Model {
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

export class MigrateDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  DBInstanceId: string;
  targetDedicatedHostIdForMaster?: string;
  targetDedicatedHostIdForSlave?: string;
  effectiveTime?: string;
  specifiedTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      DBInstanceId: 'DBInstanceId',
      targetDedicatedHostIdForMaster: 'TargetDedicatedHostIdForMaster',
      targetDedicatedHostIdForSlave: 'TargetDedicatedHostIdForSlave',
      effectiveTime: 'EffectiveTime',
      specifiedTime: 'SpecifiedTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      DBInstanceId: 'string',
      targetDedicatedHostIdForMaster: 'string',
      targetDedicatedHostIdForSlave: 'string',
      effectiveTime: 'string',
      specifiedTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MigrateDBInstanceResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  migrationId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      migrationId: 'MigrationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
      migrationId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  hostName?: string;
  zoneId: string;
  VSwitchId: string;
  hostClass: string;
  payType: string;
  period?: string;
  usedTime?: string;
  clientToken: string;
  autoRenew: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      hostName: 'HostName',
      zoneId: 'ZoneId',
      VSwitchId: 'VSwitchId',
      hostClass: 'HostClass',
      payType: 'PayType',
      period: 'Period',
      usedTime: 'UsedTime',
      clientToken: 'ClientToken',
      autoRenew: 'AutoRenew',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      hostName: 'string',
      zoneId: 'string',
      VSwitchId: 'string',
      hostClass: 'string',
      payType: 'string',
      period: 'string',
      usedTime: 'string',
      clientToken: 'string',
      autoRenew: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  dedicateHostList: CreateDedicatedHostResponseDedicateHostList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
      dedicateHostList: 'DedicateHostList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
      dedicateHostList: CreateDedicatedHostResponseDedicateHostList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RebuildDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  dedicatedHostGroupId: string;
  DBInstanceId: string;
  dedicatedHostId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      DBInstanceId: 'DBInstanceId',
      dedicatedHostId: 'DedicatedHostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      dedicatedHostGroupId: 'string',
      DBInstanceId: 'string',
      dedicatedHostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RebuildDBInstanceResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  migrationId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
      migrationId: 'MigrationId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
      migrationId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyEndpointRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBProxyEndpointId?: string;
  DBProxyConnectString?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBProxyEndpointId: 'DBProxyEndpointId',
      DBProxyConnectString: 'DBProxyConnectString',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBProxyEndpointId: 'string',
      DBProxyConnectString: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyEndpointResponse extends $tea.Model {
  requestId: string;
  DBProxyEndpointId: string;
  DBProxyConnectString: string;
  DBProxyConnectStringPort: string;
  DBProxyConnectStringNetType: string;
  DBProxyFeatures: string;
  readOnlyInstanceMaxDelayTime: string;
  readOnlyInstanceDistributionType: string;
  readOnlyInstanceWeight: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBProxyEndpointId: 'DBProxyEndpointId',
      DBProxyConnectString: 'DBProxyConnectString',
      DBProxyConnectStringPort: 'DBProxyConnectStringPort',
      DBProxyConnectStringNetType: 'DBProxyConnectStringNetType',
      DBProxyFeatures: 'DBProxyFeatures',
      readOnlyInstanceMaxDelayTime: 'ReadOnlyInstanceMaxDelayTime',
      readOnlyInstanceDistributionType: 'ReadOnlyInstanceDistributionType',
      readOnlyInstanceWeight: 'ReadOnlyInstanceWeight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBProxyEndpointId: 'string',
      DBProxyConnectString: 'string',
      DBProxyConnectStringPort: 'string',
      DBProxyConnectStringNetType: 'string',
      DBProxyFeatures: 'string',
      readOnlyInstanceMaxDelayTime: 'string',
      readOnlyInstanceDistributionType: 'string',
      readOnlyInstanceWeight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyPerformanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBProxyInstanceType?: string;
  startTime: string;
  endTime: string;
  regionId: string;
  metricsName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBProxyInstanceType: 'DBProxyInstanceType',
      startTime: 'StartTime',
      endTime: 'EndTime',
      regionId: 'RegionId',
      metricsName: 'MetricsName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBProxyInstanceType: 'string',
      startTime: 'string',
      endTime: 'string',
      regionId: 'string',
      metricsName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyPerformanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  performanceKeys: DescribeDBProxyPerformanceResponsePerformanceKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      performanceKeys: 'PerformanceKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      performanceKeys: DescribeDBProxyPerformanceResponsePerformanceKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyResponse extends $tea.Model {
  requestId: string;
  DBProxyServiceStatus: string;
  DBProxyInstanceType: string;
  DBProxyInstanceNum: number;
  DBProxyInstanceStatus: string;
  DBProxyInstanceCurrentMinorVersion: string;
  DBProxyInstanceLatestMinorVersion: string;
  DBProxyInstanceName: string;
  DBProxyConnectStringItems: DescribeDBProxyResponseDBProxyConnectStringItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBProxyServiceStatus: 'DBProxyServiceStatus',
      DBProxyInstanceType: 'DBProxyInstanceType',
      DBProxyInstanceNum: 'DBProxyInstanceNum',
      DBProxyInstanceStatus: 'DBProxyInstanceStatus',
      DBProxyInstanceCurrentMinorVersion: 'DBProxyInstanceCurrentMinorVersion',
      DBProxyInstanceLatestMinorVersion: 'DBProxyInstanceLatestMinorVersion',
      DBProxyInstanceName: 'DBProxyInstanceName',
      DBProxyConnectStringItems: 'DBProxyConnectStringItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBProxyServiceStatus: 'string',
      DBProxyInstanceType: 'string',
      DBProxyInstanceNum: 'number',
      DBProxyInstanceStatus: 'string',
      DBProxyInstanceCurrentMinorVersion: 'string',
      DBProxyInstanceLatestMinorVersion: 'string',
      DBProxyInstanceName: 'string',
      DBProxyConnectStringItems: DescribeDBProxyResponseDBProxyConnectStringItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBProxyEndpointRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBProxyEndpointId: string;
  configDBProxyFeatures?: string;
  regionId?: string;
  readOnlyInstanceMaxDelayTime?: string;
  readOnlyInstanceDistributionType?: string;
  readOnlyInstanceWeight?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBProxyEndpointId: 'DBProxyEndpointId',
      configDBProxyFeatures: 'ConfigDBProxyFeatures',
      regionId: 'RegionId',
      readOnlyInstanceMaxDelayTime: 'ReadOnlyInstanceMaxDelayTime',
      readOnlyInstanceDistributionType: 'ReadOnlyInstanceDistributionType',
      readOnlyInstanceWeight: 'ReadOnlyInstanceWeight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBProxyEndpointId: 'string',
      configDBProxyFeatures: 'string',
      regionId: 'string',
      readOnlyInstanceMaxDelayTime: 'string',
      readOnlyInstanceDistributionType: 'string',
      readOnlyInstanceWeight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBProxyEndpointResponse extends $tea.Model {
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

export class ModifyDBProxyInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBProxyInstanceType: string;
  DBProxyInstanceNum: string;
  effectiveTime?: string;
  effectiveSpecificTime?: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBProxyInstanceType: 'DBProxyInstanceType',
      DBProxyInstanceNum: 'DBProxyInstanceNum',
      effectiveTime: 'EffectiveTime',
      effectiveSpecificTime: 'EffectiveSpecificTime',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBProxyInstanceType: 'string',
      DBProxyInstanceNum: 'string',
      effectiveTime: 'string',
      effectiveSpecificTime: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBProxyInstanceResponse extends $tea.Model {
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

export class ModifyDBProxyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  configDBProxyService: string;
  DBProxyInstanceNum?: string;
  regionId?: string;
  instanceNetworkType?: string;
  VPCId?: string;
  VSwitchId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      configDBProxyService: 'ConfigDBProxyService',
      DBProxyInstanceNum: 'DBProxyInstanceNum',
      regionId: 'RegionId',
      instanceNetworkType: 'InstanceNetworkType',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      configDBProxyService: 'string',
      DBProxyInstanceNum: 'string',
      regionId: 'string',
      instanceNetworkType: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBProxyResponse extends $tea.Model {
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

export class ModifyHASwitchConfigRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  HAConfig?: string;
  manualHATime?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      HAConfig: 'HAConfig',
      manualHATime: 'ManualHATime',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      HAConfig: 'string',
      manualHATime: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHASwitchConfigResponse extends $tea.Model {
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

export class DescribeHASwitchConfigRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeHASwitchConfigResponse extends $tea.Model {
  requestId: string;
  HAConfig: string;
  manualHATime: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      HAConfig: 'HAConfig',
      manualHATime: 'ManualHATime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      HAConfig: 'string',
      manualHATime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyActionEventPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  enableEventLog: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      enableEventLog: 'EnableEventLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      enableEventLog: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyActionEventPolicyResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  enableEventLog: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      enableEventLog: 'EnableEventLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      enableEventLog: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActionEventPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeActionEventPolicyResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  enableEventLog: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      enableEventLog: 'EnableEventLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      enableEventLog: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
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

export class DescribeEventsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageSize: number;
  pageNumber: number;
  eventItems: DescribeEventsResponseEventItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      eventItems: DescribeEventsResponseEventItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  engine?: string;
  zoneId?: string;
  DBInstanceStatus?: string;
  expired?: string;
  searchKey?: string;
  DBInstanceId?: string;
  DBInstanceType?: string;
  regionId: string;
  pageSize?: number;
  pageNumber?: number;
  instanceNetworkType?: string;
  vpcId?: string;
  VSwitchId?: string;
  DBInstanceClass?: string;
  engineVersion?: string;
  nodeType?: string;
  payType?: string;
  connectionMode?: string;
  ownerAccount?: string;
  currentInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      engine: 'Engine',
      zoneId: 'ZoneId',
      DBInstanceStatus: 'DBInstanceStatus',
      expired: 'Expired',
      searchKey: 'SearchKey',
      DBInstanceId: 'DBInstanceId',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      instanceNetworkType: 'InstanceNetworkType',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      DBInstanceClass: 'DBInstanceClass',
      engineVersion: 'EngineVersion',
      nodeType: 'NodeType',
      payType: 'PayType',
      connectionMode: 'ConnectionMode',
      ownerAccount: 'OwnerAccount',
      currentInstanceId: 'CurrentInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      engine: 'string',
      zoneId: 'string',
      DBInstanceStatus: 'string',
      expired: 'string',
      searchKey: 'string',
      DBInstanceId: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      instanceNetworkType: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      DBInstanceClass: 'string',
      engineVersion: 'string',
      nodeType: 'string',
      payType: 'string',
      connectionMode: 'string',
      ownerAccount: 'string',
      currentInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBInstancesForCloneResponseItems;
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
      items: DescribeDBInstancesForCloneResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDTCSecurityIpHostsForSQLServerRequest extends $tea.Model {
  accessKeyId?: string;
  securityToken?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      securityToken: 'SecurityToken',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      securityToken: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDTCSecurityIpHostsForSQLServerResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  ipHostPairNum: string;
  items: DescribeDTCSecurityIpHostsForSQLServerResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      ipHostPairNum: 'IpHostPairNum',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      ipHostPairNum: 'string',
      items: DescribeDTCSecurityIpHostsForSQLServerResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDTCSecurityIpHostsForSQLServerRequest extends $tea.Model {
  accessKeyId?: string;
  securityToken?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  securityIpHosts: string;
  whiteListGroupName: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      securityToken: 'SecurityToken',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      securityIpHosts: 'SecurityIpHosts',
      whiteListGroupName: 'WhiteListGroupName',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      securityToken: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      securityIpHosts: 'string',
      whiteListGroupName: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDTCSecurityIpHostsForSQLServerResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  DTCSetResult: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      DTCSetResult: 'DTCSetResult',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      DTCSetResult: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIpHostnameRequest extends $tea.Model {
  accessKeyId?: string;
  securityToken?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      securityToken: 'SecurityToken',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      securityToken: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIpHostnameResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  ipHostnameInfos: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      ipHostnameInfos: 'IpHostnameInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      ipHostnameInfos: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceAutoUpgradeMinorVersionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  autoUpgradeMinorVersion: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      autoUpgradeMinorVersion: 'AutoUpgradeMinorVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      autoUpgradeMinorVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceAutoUpgradeMinorVersionResponse extends $tea.Model {
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

export class DescribeAvailableCrossRegionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableCrossRegionResponse extends $tea.Model {
  requestId: string;
  regions: DescribeAvailableCrossRegionResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regions: DescribeAvailableCrossRegionResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckCreateDdrDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceStorage: number;
  restoreType: string;
  backupSetId?: string;
  restoreTime?: string;
  sourceRegion?: string;
  sourceDBInstanceName?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      restoreType: 'RestoreType',
      backupSetId: 'BackupSetId',
      restoreTime: 'RestoreTime',
      sourceRegion: 'SourceRegion',
      sourceDBInstanceName: 'SourceDBInstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      restoreType: 'string',
      backupSetId: 'string',
      restoreTime: 'string',
      sourceRegion: 'string',
      sourceDBInstanceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckCreateDdrDBInstanceResponse extends $tea.Model {
  requestId: string;
  isValid: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isValid: 'IsValid',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isValid: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableRecoveryTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  crossBackupId: number;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      crossBackupId: 'CrossBackupId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      crossBackupId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableRecoveryTimeResponse extends $tea.Model {
  requestId: string;
  recoveryBeginTime: string;
  recoveryEndTime: string;
  DBInstanceId: string;
  regionId: string;
  crossBackupId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recoveryBeginTime: 'RecoveryBeginTime',
      recoveryEndTime: 'RecoveryEndTime',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      crossBackupId: 'CrossBackupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recoveryBeginTime: 'string',
      recoveryEndTime: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
      crossBackupId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionLogBackupFilesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  crossBackupRegion?: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      crossBackupRegion: 'CrossBackupRegion',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
      crossBackupRegion: 'string',
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

export class DescribeCrossRegionLogBackupFilesResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  totalRecordCount: number;
  pageRecordCount: number;
  pageNumber: number;
  items: DescribeCrossRegionLogBackupFilesResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      totalRecordCount: 'TotalRecordCount',
      pageRecordCount: 'PageRecordCount',
      pageNumber: 'PageNumber',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      totalRecordCount: 'number',
      pageRecordCount: 'number',
      pageNumber: 'number',
      items: DescribeCrossRegionLogBackupFilesResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceCrossBackupPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  crossBackupType?: string;
  logBackupEnabled?: string;
  backupEnabled?: string;
  crossBackupRegion?: string;
  retentType?: number;
  retention?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      crossBackupType: 'CrossBackupType',
      logBackupEnabled: 'LogBackupEnabled',
      backupEnabled: 'BackupEnabled',
      crossBackupRegion: 'CrossBackupRegion',
      retentType: 'RetentType',
      retention: 'Retention',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
      crossBackupType: 'string',
      logBackupEnabled: 'string',
      backupEnabled: 'string',
      crossBackupRegion: 'string',
      retentType: 'number',
      retention: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceCrossBackupPolicyResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  regionId: string;
  crossBackupRegion: string;
  crossBackupType: string;
  backupEnabled: string;
  logBackupEnabled: string;
  storageOwner: string;
  storageType: string;
  endpoint: string;
  retentType: number;
  retention: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      crossBackupRegion: 'CrossBackupRegion',
      crossBackupType: 'CrossBackupType',
      backupEnabled: 'BackupEnabled',
      logBackupEnabled: 'LogBackupEnabled',
      storageOwner: 'StorageOwner',
      storageType: 'StorageType',
      endpoint: 'Endpoint',
      retentType: 'RetentType',
      retention: 'Retention',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
      crossBackupRegion: 'string',
      crossBackupType: 'string',
      backupEnabled: 'string',
      logBackupEnabled: 'string',
      storageOwner: 'string',
      storageType: 'string',
      endpoint: 'string',
      retentType: 'number',
      retention: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDdrInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceStorage: number;
  systemDBCharset?: string;
  DBInstanceNetType: string;
  DBInstanceDescription?: string;
  securityIPList: string;
  clientToken?: string;
  payType: string;
  zoneId?: string;
  instanceNetworkType?: string;
  connectionMode?: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  ownerAccount?: string;
  usedTime?: string;
  period?: string;
  resourceGroupId?: string;
  restoreType: string;
  backupSetId?: string;
  restoreTime?: string;
  sourceRegion?: string;
  sourceDBInstanceName?: string;
  DBInstanceStorageType?: string;
  binlogName?: string;
  binlogPosition?: string;
  binlogRole?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      systemDBCharset: 'SystemDBCharset',
      DBInstanceNetType: 'DBInstanceNetType',
      DBInstanceDescription: 'DBInstanceDescription',
      securityIPList: 'SecurityIPList',
      clientToken: 'ClientToken',
      payType: 'PayType',
      zoneId: 'ZoneId',
      instanceNetworkType: 'InstanceNetworkType',
      connectionMode: 'ConnectionMode',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      ownerAccount: 'OwnerAccount',
      usedTime: 'UsedTime',
      period: 'Period',
      resourceGroupId: 'ResourceGroupId',
      restoreType: 'RestoreType',
      backupSetId: 'BackupSetId',
      restoreTime: 'RestoreTime',
      sourceRegion: 'SourceRegion',
      sourceDBInstanceName: 'SourceDBInstanceName',
      DBInstanceStorageType: 'DBInstanceStorageType',
      binlogName: 'BinlogName',
      binlogPosition: 'BinlogPosition',
      binlogRole: 'BinlogRole',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      systemDBCharset: 'string',
      DBInstanceNetType: 'string',
      DBInstanceDescription: 'string',
      securityIPList: 'string',
      clientToken: 'string',
      payType: 'string',
      zoneId: 'string',
      instanceNetworkType: 'string',
      connectionMode: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      ownerAccount: 'string',
      usedTime: 'string',
      period: 'string',
      resourceGroupId: 'string',
      restoreType: 'string',
      backupSetId: 'string',
      restoreTime: 'string',
      sourceRegion: 'string',
      sourceDBInstanceName: 'string',
      DBInstanceStorageType: 'string',
      binlogName: 'string',
      binlogPosition: 'string',
      binlogRole: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDdrInstanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: string;
  connectionString: string;
  port: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
      connectionString: 'ConnectionString',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'string',
      connectionString: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  DBInstanceId?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      DBInstanceId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupDBInstanceResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  totalRecords: number;
  pageSize: number;
  pageNumber: number;
  itemsNumbers: number;
  items: DescribeCrossRegionBackupDBInstanceResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      totalRecords: 'TotalRecords',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      itemsNumbers: 'ItemsNumbers',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      totalRecords: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      itemsNumbers: 'number',
      items: DescribeCrossRegionBackupDBInstanceResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceCrossBackupPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceCrossBackupPolicyResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  DBInstanceDescription: string;
  DBInstanceStatus: string;
  DBInstanceStatusDesc: string;
  engine: string;
  engineVersion: string;
  regionId: string;
  crossBackupRegion: string;
  crossBackupType: string;
  backupEnabledTime: string;
  backupEnabled: string;
  logBackupEnabled: string;
  logBackupEnabledTime: string;
  storageOwner: string;
  storageType: string;
  endpoint: string;
  retentType: number;
  retention: number;
  lockMode: string;
  relService: string;
  relServiceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      DBInstanceStatus: 'DBInstanceStatus',
      DBInstanceStatusDesc: 'DBInstanceStatusDesc',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      regionId: 'RegionId',
      crossBackupRegion: 'CrossBackupRegion',
      crossBackupType: 'CrossBackupType',
      backupEnabledTime: 'BackupEnabledTime',
      backupEnabled: 'BackupEnabled',
      logBackupEnabled: 'LogBackupEnabled',
      logBackupEnabledTime: 'LogBackupEnabledTime',
      storageOwner: 'StorageOwner',
      storageType: 'StorageType',
      endpoint: 'Endpoint',
      retentType: 'RetentType',
      retention: 'Retention',
      lockMode: 'LockMode',
      relService: 'RelService',
      relServiceId: 'RelServiceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      DBInstanceStatus: 'string',
      DBInstanceStatusDesc: 'string',
      engine: 'string',
      engineVersion: 'string',
      regionId: 'string',
      crossBackupRegion: 'string',
      crossBackupType: 'string',
      backupEnabledTime: 'string',
      backupEnabled: 'string',
      logBackupEnabled: 'string',
      logBackupEnabledTime: 'string',
      storageOwner: 'string',
      storageType: 'string',
      endpoint: 'string',
      retentType: 'number',
      retention: 'number',
      lockMode: 'string',
      relService: 'string',
      relServiceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  regionId: string;
  crossBackupRegion?: string;
  crossBackupId?: number;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      crossBackupRegion: 'CrossBackupRegion',
      crossBackupId: 'CrossBackupId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      regionId: 'string',
      crossBackupRegion: 'string',
      crossBackupId: 'number',
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

export class DescribeCrossRegionBackupsResponse extends $tea.Model {
  requestId: string;
  regionId: string;
  startTime: string;
  endTime: string;
  totalRecordCount: number;
  pageRecordCount: number;
  pageNumber: number;
  items: DescribeCrossRegionBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      regionId: 'RegionId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      totalRecordCount: 'TotalRecordCount',
      pageRecordCount: 'PageRecordCount',
      pageNumber: 'PageNumber',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      regionId: 'string',
      startTime: 'string',
      endTime: 'string',
      totalRecordCount: 'number',
      pageRecordCount: 'number',
      pageNumber: 'number',
      items: DescribeCrossRegionBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayRequest extends $tea.Model {
  securityToken?: string;
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  readInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      securityToken: 'SecurityToken',
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      readInstanceId: 'ReadInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityToken: 'string',
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      readInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  readDBInstanceId: string;
  delayTime: number;
  items: DescribeReadDBInstanceDelayResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      readDBInstanceId: 'ReadDBInstanceId',
      delayTime: 'DelayTime',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      readDBInstanceId: 'string',
      delayTime: 'number',
      items: DescribeReadDBInstanceDelayResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreTableRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  backupId?: string;
  restoreTime?: string;
  ownerAccount?: string;
  tableMeta: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      ownerAccount: 'OwnerAccount',
      tableMeta: 'TableMeta',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      backupId: 'string',
      restoreTime: 'string',
      ownerAccount: 'string',
      tableMeta: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestoreTableResponse extends $tea.Model {
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

export class CreateParameterGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  parameterGroupName: string;
  engine: string;
  engineVersion: string;
  parameters: string;
  parameterGroupDesc?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      parameterGroupName: 'ParameterGroupName',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      parameters: 'Parameters',
      parameterGroupDesc: 'ParameterGroupDesc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      parameterGroupName: 'string',
      engine: 'string',
      engineVersion: 'string',
      parameters: 'string',
      parameterGroupDesc: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateParameterGroupResponse extends $tea.Model {
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

export class DescribeParameterGroupsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupsResponse extends $tea.Model {
  requestId: string;
  signalForOptimizeParams: boolean;
  parameterGroups: DescribeParameterGroupsResponseParameterGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      signalForOptimizeParams: 'SignalForOptimizeParams',
      parameterGroups: 'ParameterGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      signalForOptimizeParams: 'boolean',
      parameterGroups: DescribeParameterGroupsResponseParameterGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloneParameterGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  targetRegionId: string;
  parameterGroupId: string;
  parameterGroupName: string;
  parameterGroupDesc?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      targetRegionId: 'TargetRegionId',
      parameterGroupId: 'ParameterGroupId',
      parameterGroupName: 'ParameterGroupName',
      parameterGroupDesc: 'ParameterGroupDesc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      targetRegionId: 'string',
      parameterGroupId: 'string',
      parameterGroupName: 'string',
      parameterGroupDesc: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloneParameterGroupResponse extends $tea.Model {
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

export class DescribeParameterGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  parameterGroupId: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      parameterGroupId: 'ParameterGroupId',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      parameterGroupId: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupResponse extends $tea.Model {
  requestId: string;
  paramGroup: DescribeParameterGroupResponseParamGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      paramGroup: 'ParamGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      paramGroup: DescribeParameterGroupResponseParamGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyParameterGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  parameterGroupId: string;
  parameterGroupName?: string;
  parameterGroupDesc?: string;
  parameters?: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      parameterGroupId: 'ParameterGroupId',
      parameterGroupName: 'ParameterGroupName',
      parameterGroupDesc: 'ParameterGroupDesc',
      parameters: 'Parameters',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      parameterGroupId: 'string',
      parameterGroupName: 'string',
      parameterGroupDesc: 'string',
      parameters: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyParameterGroupResponse extends $tea.Model {
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

export class DeleteParameterGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  parameterGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      parameterGroupId: 'ParameterGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      parameterGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteParameterGroupResponse extends $tea.Model {
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

export class ModifySQLCollectorRetentionRequest extends $tea.Model {
  securityToken?: string;
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  configValue: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      securityToken: 'SecurityToken',
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      configValue: 'ConfigValue',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityToken: 'string',
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      configValue: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySQLCollectorRetentionResponse extends $tea.Model {
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

export class DescribeSQLCollectorRetentionRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  accessKeyId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      accessKeyId: 'AccessKeyId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      accessKeyId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLCollectorRetentionResponse extends $tea.Model {
  requestId: string;
  configValue: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      configValue: 'ConfigValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      configValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckInstanceExistRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckInstanceExistResponse extends $tea.Model {
  requestId: string;
  isExistInstance: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      isExistInstance: 'IsExistInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      isExistInstance: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupFilesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupFilesResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  totalFileSize: number;
  items: DescribeLogBackupFilesResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalFileSize: 'TotalFileSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      totalFileSize: 'number',
      items: DescribeLogBackupFilesResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MigrateSecurityIPModeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MigrateSecurityIPModeResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  securityIPMode: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      securityIPMode: 'SecurityIPMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      securityIPMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SwitchDBInstanceVpcRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SwitchDBInstanceVpcResponse extends $tea.Model {
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

export class DescribeCollationTimeZonesRequest extends $tea.Model {
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

export class DescribeCollationTimeZonesResponse extends $tea.Model {
  requestId: string;
  collationTimeZones: DescribeCollationTimeZonesResponseCollationTimeZones;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      collationTimeZones: 'CollationTimeZones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      collationTimeZones: DescribeCollationTimeZonesResponseCollationTimeZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceKeywordsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  key?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      key: 'Key',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      key: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceKeywordsResponse extends $tea.Model {
  requestId: string;
  key: string;
  words: DescribeInstanceKeywordsResponseWords;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      key: 'Key',
      words: 'Words',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      key: 'string',
      words: DescribeInstanceKeywordsResponseWords,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCollationTimeZoneRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  collation?: string;
  timezone?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      collation: 'Collation',
      timezone: 'Timezone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      collation: 'string',
      timezone: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyCollationTimeZoneResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  taskId: string;
  timezone: string;
  collation: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      taskId: 'TaskId',
      timezone: 'Timezone',
      collation: 'Collation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      taskId: 'string',
      timezone: 'string',
      collation: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupDatabaseRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupDatabaseResponse extends $tea.Model {
  requestId: string;
  databaseNames: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      databaseNames: 'DatabaseNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      databaseNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyDatabaseBetweenInstancesRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  targetDBInstanceId: string;
  dbNames: string;
  backupId?: string;
  restoreTime?: string;
  syncUserPrivilege?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      targetDBInstanceId: 'TargetDBInstanceId',
      dbNames: 'DbNames',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      syncUserPrivilege: 'SyncUserPrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      targetDBInstanceId: 'string',
      dbNames: 'string',
      backupId: 'string',
      restoreTime: 'string',
      syncUserPrivilege: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyDatabaseBetweenInstancesResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecoveryDBInstanceRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceClass?: string;
  DBInstanceStorage?: number;
  payType?: string;
  instanceNetworkType?: string;
  DBInstanceId?: string;
  targetDBInstanceId?: string;
  dbNames: string;
  backupId?: string;
  restoreTime?: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  usedTime?: string;
  period?: string;
  DBInstanceStorageType?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      payType: 'PayType',
      instanceNetworkType: 'InstanceNetworkType',
      DBInstanceId: 'DBInstanceId',
      targetDBInstanceId: 'TargetDBInstanceId',
      dbNames: 'DbNames',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      usedTime: 'UsedTime',
      period: 'Period',
      DBInstanceStorageType: 'DBInstanceStorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      payType: 'string',
      instanceNetworkType: 'string',
      DBInstanceId: 'string',
      targetDBInstanceId: 'string',
      dbNames: 'string',
      backupId: 'string',
      restoreTime: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      usedTime: 'string',
      period: 'string',
      DBInstanceStorageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RecoveryDBInstanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceRequest extends $tea.Model {
  resourceOwnerId?: number;
  regionId?: string;
  zoneId?: string;
  instanceChargeType: string;
  engine?: string;
  engineVersion?: string;
  DBInstanceClass?: string;
  orderType?: string;
  DBInstanceStorageType?: string;
  category?: string;
  dispenseMode?: number;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      instanceChargeType: 'InstanceChargeType',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      orderType: 'OrderType',
      DBInstanceStorageType: 'DBInstanceStorageType',
      category: 'Category',
      dispenseMode: 'DispenseMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      regionId: 'string',
      zoneId: 'string',
      instanceChargeType: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      orderType: 'string',
      DBInstanceStorageType: 'string',
      category: 'string',
      dispenseMode: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponse extends $tea.Model {
  requestId: string;
  availableZones: DescribeAvailableResourceResponseAvailableZones;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      availableZones: 'AvailableZones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      availableZones: DescribeAvailableResourceResponseAvailableZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DestroyDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DestroyDBInstanceResponse extends $tea.Model {
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

export class ModifyReadonlyInstanceDelayReplicationTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  readSQLReplicationTime: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      readSQLReplicationTime: 'ReadSQLReplicationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      readSQLReplicationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyReadonlyInstanceDelayReplicationTimeResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  readSQLReplicationTime: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      readSQLReplicationTime: 'ReadSQLReplicationTime',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      readSQLReplicationTime: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceProxyConfigurationRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceProxyConfigurationResponse extends $tea.Model {
  requestId: string;
  transparentSwitchConfiguration: string;
  persistentConnectionsConfiguration: string;
  attacksProtectionConfiguration: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transparentSwitchConfiguration: 'TransparentSwitchConfiguration',
      persistentConnectionsConfiguration: 'PersistentConnectionsConfiguration',
      attacksProtectionConfiguration: 'AttacksProtectionConfiguration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transparentSwitchConfiguration: 'string',
      persistentConnectionsConfiguration: 'string',
      attacksProtectionConfiguration: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateOnlineDatabaseTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  DBName: string;
  migrateTaskId: string;
  checkDBMode: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      migrateTaskId: 'MigrateTaskId',
      checkDBMode: 'CheckDBMode',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      DBName: 'string',
      migrateTaskId: 'string',
      checkDBMode: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateOnlineDatabaseTaskResponse extends $tea.Model {
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

export class UpgradeDBInstanceKernelVersionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  upgradeTime?: string;
  switchTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      upgradeTime: 'UpgradeTime',
      switchTime: 'SwitchTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      upgradeTime: 'string',
      switchTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeDBInstanceKernelVersionResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  taskId: string;
  targetMinorVersion: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      taskId: 'TaskId',
      targetMinorVersion: 'TargetMinorVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      taskId: 'string',
      targetMinorVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceProxyConfigurationRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  proxyConfigurationKey: string;
  proxyConfigurationValue: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      proxyConfigurationKey: 'ProxyConfigurationKey',
      proxyConfigurationValue: 'ProxyConfigurationValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      proxyConfigurationKey: 'string',
      proxyConfigurationValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceProxyConfigurationResponse extends $tea.Model {
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

export class DescribeSecurityGroupConfigurationRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecurityGroupConfigurationResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  items: DescribeSecurityGroupConfigurationResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      items: DescribeSecurityGroupConfigurationResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySecurityGroupConfigurationRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  securityGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      securityGroupId: 'SecurityGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      securityGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySecurityGroupConfigurationResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  items: ModifySecurityGroupConfigurationResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      items: ModifySecurityGroupConfigurationResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsForSQLServerRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  migrateTaskId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      migrateTaskId: 'MigrateTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      migrateTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsForSQLServerResponse extends $tea.Model {
  requestId: string;
  DBInstanceName: string;
  migrateIaskId: string;
  items: DescribeOssDownloadsForSQLServerResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceName: 'DBInstanceName',
      migrateIaskId: 'MigrateIaskId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceName: 'string',
      migrateIaskId: 'string',
      items: DescribeOssDownloadsForSQLServerResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksForSQLServerRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
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

export class DescribeMigrateTasksForSQLServerResponse extends $tea.Model {
  requestId: string;
  DBInstanceID: string;
  DBInstanceName: string;
  startTime: string;
  endTime: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeMigrateTasksForSQLServerResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceID: 'DBInstanceID',
      DBInstanceName: 'DBInstanceName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceID: 'string',
      DBInstanceName: 'string',
      startTime: 'string',
      endTime: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeMigrateTasksForSQLServerResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMigrateTaskForSQLServerRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName: string;
  taskType: string;
  isOnlineDB: string;
  OSSUrls: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      taskType: 'TaskType',
      isOnlineDB: 'IsOnlineDB',
      OSSUrls: 'OSSUrls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      taskType: 'string',
      isOnlineDB: 'string',
      OSSUrls: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMigrateTaskForSQLServerResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  DBInstanceName: string;
  taskId: string;
  DBName: string;
  migrateIaskId: string;
  taskType: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceName: 'DBInstanceName',
      taskId: 'TaskId',
      DBName: 'DBName',
      migrateIaskId: 'MigrateIaskId',
      taskType: 'TaskType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      DBInstanceName: 'string',
      taskId: 'string',
      DBName: 'string',
      migrateIaskId: 'string',
      taskType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMigrateTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName: string;
  backupMode: string;
  isOnlineDB: string;
  checkDBMode?: string;
  ossObjectPositions?: string;
  OSSUrls?: string;
  migrateTaskId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      backupMode: 'BackupMode',
      isOnlineDB: 'IsOnlineDB',
      checkDBMode: 'CheckDBMode',
      ossObjectPositions: 'OssObjectPositions',
      OSSUrls: 'OSSUrls',
      migrateTaskId: 'MigrateTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      backupMode: 'string',
      isOnlineDB: 'string',
      checkDBMode: 'string',
      ossObjectPositions: 'string',
      OSSUrls: 'string',
      migrateTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMigrateTaskResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  taskId: string;
  DBName: string;
  migrateTaskId: string;
  backupMode: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      taskId: 'TaskId',
      DBName: 'DBName',
      migrateTaskId: 'MigrateTaskId',
      backupMode: 'BackupMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      taskId: 'string',
      DBName: 'string',
      migrateTaskId: 'string',
      backupMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  migrateTaskId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      migrateTaskId: 'MigrateTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      migrateTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  migrateTaskId: string;
  items: DescribeOssDownloadsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      migrateTaskId: 'MigrateTaskId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      migrateTaskId: 'string',
      items: DescribeOssDownloadsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
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

export class DescribeMigrateTasksResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeMigrateTasksResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeMigrateTasksResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyDatabaseRequest extends $tea.Model {
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

export class CopyDatabaseResponse extends $tea.Model {
  DBName: string;
  DBStatus: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      DBStatus: 'DBStatus',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      DBStatus: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetAccountRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  accountPassword: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      ownerAccount: 'string',
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

export class DescribeDBInstancesAsCsvRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  DBInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesAsCsvResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBInstancesAsCsvResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeDBInstancesAsCsvResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceNetworkExpireTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  connectionString: string;
  classicExpiredDays: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      connectionString: 'ConnectionString',
      classicExpiredDays: 'ClassicExpiredDays',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      connectionString: 'string',
      classicExpiredDays: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceNetworkExpireTimeResponse extends $tea.Model {
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

export class ModifyResourceGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  ownerAccount?: string;
  DBInstanceId: string;
  resourceGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyResourceGroupResponse extends $tea.Model {
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

export class DescribeRenewalPriceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  ownerAccount?: string;
  DBInstanceId?: string;
  regionId?: string;
  payType?: string;
  DBInstanceClass?: string;
  usedTime: number;
  timeType: string;
  quantity?: number;
  orderType?: string;
  businessInfo?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      payType: 'PayType',
      DBInstanceClass: 'DBInstanceClass',
      usedTime: 'UsedTime',
      timeType: 'TimeType',
      quantity: 'Quantity',
      orderType: 'OrderType',
      businessInfo: 'BusinessInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      regionId: 'string',
      payType: 'string',
      DBInstanceClass: 'string',
      usedTime: 'number',
      timeType: 'string',
      quantity: 'number',
      orderType: 'string',
      businessInfo: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponse extends $tea.Model {
  requestId: string;
  rules: DescribeRenewalPriceResponseRules;
  priceInfo: DescribeRenewalPriceResponsePriceInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      rules: 'Rules',
      priceInfo: 'PriceInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      rules: DescribeRenewalPriceResponseRules,
      priceInfo: DescribeRenewalPriceResponsePriceInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  ownerAccount?: string;
  commodityCode?: string;
  regionId?: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceStorage: number;
  payType?: string;
  zoneId?: string;
  usedTime?: number;
  timeType?: string;
  quantity: number;
  instanceUsedType?: number;
  orderType?: string;
  DBInstanceStorageType?: string;
  DBInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      ownerAccount: 'OwnerAccount',
      commodityCode: 'CommodityCode',
      regionId: 'RegionId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      payType: 'PayType',
      zoneId: 'ZoneId',
      usedTime: 'UsedTime',
      timeType: 'TimeType',
      quantity: 'Quantity',
      instanceUsedType: 'InstanceUsedType',
      orderType: 'OrderType',
      DBInstanceStorageType: 'DBInstanceStorageType',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      ownerAccount: 'string',
      commodityCode: 'string',
      regionId: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      payType: 'string',
      zoneId: 'string',
      usedTime: 'number',
      timeType: 'string',
      quantity: 'number',
      instanceUsedType: 'number',
      orderType: 'string',
      DBInstanceStorageType: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponse extends $tea.Model {
  requestId: string;
  rules: DescribePriceResponseRules;
  priceInfo: DescribePriceResponsePriceInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      rules: 'Rules',
      priceInfo: 'PriceInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      rules: DescribePriceResponseRules,
      priceInfo: DescribePriceResponsePriceInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  period: number;
  autoPay?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      period: 'Period',
      autoPay: 'AutoPay',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      period: 'number',
      autoPay: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RenewInstanceResponse extends $tea.Model {
  requestId: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckRecoveryConditionsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupId?: string;
  backupFile?: string;
  restoreTime?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      backupFile: 'BackupFile',
      restoreTime: 'RestoreTime',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupId: 'string',
      backupFile: 'string',
      restoreTime: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckRecoveryConditionsResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  recoveryStatus: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      recoveryStatus: 'RecoveryStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      recoveryStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceAutoRenewalAttributeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId: string;
  clientToken?: string;
  ownerAccount?: string;
  DBInstanceId: string;
  duration?: string;
  autoRenew?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      clientToken: 'ClientToken',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      duration: 'Duration',
      autoRenew: 'AutoRenew',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      clientToken: 'string',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      duration: 'string',
      autoRenew: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyInstanceAutoRenewalAttributeResponse extends $tea.Model {
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

export class DescribeInstanceAutoRenewalAttributeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  regionId: string;
  DBInstanceId?: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewalAttributeResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeInstanceAutoRenewalAttributeResponseItems;
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
      items: DescribeInstanceAutoRenewalAttributeResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseReadWriteSplittingConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseReadWriteSplittingConnectionResponse extends $tea.Model {
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

export class ModifyReadWriteSplittingConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  connectionStringPrefix?: string;
  port?: string;
  maxDelayTime?: string;
  distributionType?: string;
  weight?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      connectionStringPrefix: 'ConnectionStringPrefix',
      port: 'Port',
      maxDelayTime: 'MaxDelayTime',
      distributionType: 'DistributionType',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      connectionStringPrefix: 'string',
      port: 'string',
      maxDelayTime: 'string',
      distributionType: 'string',
      weight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyReadWriteSplittingConnectionResponse extends $tea.Model {
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

export class CalculateDBInstanceWeightRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CalculateDBInstanceWeightResponse extends $tea.Model {
  requestId: string;
  items: CalculateDBInstanceWeightResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: CalculateDBInstanceWeightResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateReadWriteSplittingConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  ownerAccount?: string;
  DBInstanceId: string;
  connectionStringPrefix?: string;
  port?: string;
  maxDelayTime?: string;
  netType?: string;
  distributionType?: string;
  weight?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      connectionStringPrefix: 'ConnectionStringPrefix',
      port: 'Port',
      maxDelayTime: 'MaxDelayTime',
      netType: 'NetType',
      distributionType: 'DistributionType',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      connectionStringPrefix: 'string',
      port: 'string',
      maxDelayTime: 'string',
      netType: 'string',
      distributionType: 'string',
      weight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateReadWriteSplittingConnectionResponse extends $tea.Model {
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

export class ModifyDBInstancePayTypeRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  usedTime?: number;
  payType: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      usedTime: 'UsedTime',
      payType: 'PayType',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      usedTime: 'number',
      payType: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstancePayTypeResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCharacterSetNameRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  engine: string;
  regionId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      engine: 'Engine',
      regionId: 'RegionId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      engine: 'string',
      regionId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCharacterSetNameResponse extends $tea.Model {
  requestId: string;
  engine: string;
  characterSetNameItems: DescribeCharacterSetNameResponseCharacterSetNameItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      engine: 'Engine',
      characterSetNameItems: 'CharacterSetNameItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      engine: 'string',
      characterSetNameItems: DescribeCharacterSetNameResponseCharacterSetNameItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBackupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupId: 'string',
      ownerAccount: 'string',
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

export class DescribeDiagnosticReportListRequest extends $tea.Model {
  accessKeyId?: string;
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDiagnosticReportListResponse extends $tea.Model {
  requestId: string;
  reportList: DescribeDiagnosticReportListResponseReportList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      reportList: 'ReportList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      reportList: { 'type': 'array', 'itemType': DescribeDiagnosticReportListResponseReportList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDiagnosticReportRequest extends $tea.Model {
  accessKeyId?: string;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
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
  requestId: string;
  reportId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      reportId: 'ReportId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      reportId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloneDBInstanceRequest extends $tea.Model {
  resourceOwnerId?: number;
  regionId?: string;
  zoneId?: string;
  DBInstanceClass?: string;
  DBInstanceStorage?: number;
  dbNames?: string;
  payType: string;
  instanceNetworkType?: string;
  DBInstanceId: string;
  backupId?: string;
  restoreTime?: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  usedTime?: number;
  period?: string;
  category?: string;
  DBInstanceStorageType?: string;
  restoreTable?: string;
  tableMeta?: string;
  dedicatedHostGroupId?: string;
  backupType?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      dbNames: 'DbNames',
      payType: 'PayType',
      instanceNetworkType: 'InstanceNetworkType',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      usedTime: 'UsedTime',
      period: 'Period',
      category: 'Category',
      DBInstanceStorageType: 'DBInstanceStorageType',
      restoreTable: 'RestoreTable',
      tableMeta: 'TableMeta',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      backupType: 'BackupType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      regionId: 'string',
      zoneId: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      dbNames: 'string',
      payType: 'string',
      instanceNetworkType: 'string',
      DBInstanceId: 'string',
      backupId: 'string',
      restoreTime: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      usedTime: 'number',
      period: 'string',
      category: 'string',
      DBInstanceStorageType: 'string',
      restoreTable: 'string',
      tableMeta: 'string',
      dedicatedHostGroupId: 'string',
      backupType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CloneDBInstanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: string;
  connectionString: string;
  port: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
      connectionString: 'ConnectionString',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'string',
      connectionString: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  regionId: string;
  DBInstanceId?: string;
  tags?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      tags: 'Tags',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      tags: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponse extends $tea.Model {
  requestId: string;
  items: DescribeTagsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeTagsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  regionId: string;
  DBInstanceId?: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageRecordCount: number;
  totalRecordCount: number;
  items: DescribeDBInstanceByTagsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalRecordCount: 'TotalRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageRecordCount: 'number',
      totalRecordCount: 'number',
      items: DescribeDBInstanceByTagsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RevokeOperatorPermissionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RevokeOperatorPermissionResponse extends $tea.Model {
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

export class ModifyDBInstanceTDERequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  TDEStatus: string;
  DBName?: string;
  ownerAccount?: string;
  encryptionKey?: string;
  roleArn?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      TDEStatus: 'TDEStatus',
      DBName: 'DBName',
      ownerAccount: 'OwnerAccount',
      encryptionKey: 'EncryptionKey',
      roleArn: 'RoleArn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      TDEStatus: 'string',
      DBName: 'string',
      ownerAccount: 'string',
      encryptionKey: 'string',
      roleArn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceTDEResponse extends $tea.Model {
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

export class ModifyDBInstanceSSLRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  connectionString: string;
  ownerAccount?: string;
  SSLEnabled?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      connectionString: 'ConnectionString',
      ownerAccount: 'OwnerAccount',
      SSLEnabled: 'SSLEnabled',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      connectionString: 'string',
      ownerAccount: 'string',
      SSLEnabled: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceSSLResponse extends $tea.Model {
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

export class GrantOperatorPermissionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  expiredTime: string;
  privileges: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      expiredTime: 'ExpiredTime',
      privileges: 'Privileges',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      expiredTime: 'string',
      privileges: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GrantOperatorPermissionResponse extends $tea.Model {
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

export class DescribeDBInstanceTDERequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceTDEResponse extends $tea.Model {
  requestId: string;
  TDEStatus: string;
  databases: DescribeDBInstanceTDEResponseDatabases;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      TDEStatus: 'TDEStatus',
      databases: 'Databases',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      TDEStatus: 'string',
      databases: DescribeDBInstanceTDEResponseDatabases,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceSSLRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceSSLResponse extends $tea.Model {
  requestId: string;
  connectionString: string;
  SSLExpireTime: string;
  requireUpdate: string;
  requireUpdateReason: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      connectionString: 'ConnectionString',
      SSLExpireTime: 'SSLExpireTime',
      requireUpdate: 'RequireUpdate',
      requireUpdateReason: 'RequireUpdateReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      connectionString: 'string',
      SSLExpireTime: 'string',
      requireUpdate: 'string',
      requireUpdateReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogFilesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  fileName?: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      fileName: 'FileName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      fileName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogFilesResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSQLLogFilesResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSQLLogFilesResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceMonitorRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  period: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      period: 'Period',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      period: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceMonitorResponse extends $tea.Model {
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

export class SwitchDBInstanceHARequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  nodeId: string;
  force?: string;
  ownerAccount?: string;
  effectiveTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      nodeId: 'NodeId',
      force: 'Force',
      ownerAccount: 'OwnerAccount',
      effectiveTime: 'EffectiveTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      nodeId: 'string',
      force: 'string',
      ownerAccount: 'string',
      effectiveTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SwitchDBInstanceHAResponse extends $tea.Model {
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

export class DescribeDBInstanceMonitorRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceMonitorResponse extends $tea.Model {
  requestId: string;
  period: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      period: 'Period',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      period: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLCollectorPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLCollectorPolicyResponse extends $tea.Model {
  requestId: string;
  SQLCollectorStatus: string;
  storagePeriod: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      SQLCollectorStatus: 'SQLCollectorStatus',
      storagePeriod: 'StoragePeriod',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      SQLCollectorStatus: 'string',
      storagePeriod: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySQLCollectorPolicyRequest extends $tea.Model {
  ownerId?: number;
  accessKeyId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  SQLCollectorStatus: string;
  ownerAccount?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      accessKeyId: 'AccessKeyId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      SQLCollectorStatus: 'SQLCollectorStatus',
      ownerAccount: 'OwnerAccount',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      accessKeyId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      SQLCollectorStatus: 'string',
      ownerAccount: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySQLCollectorPolicyResponse extends $tea.Model {
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

export class ModifyDBInstanceHAConfigRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  syncMode: string;
  HAMode: string;
  dbInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      syncMode: 'SyncMode',
      HAMode: 'HAMode',
      dbInstanceId: 'DbInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      syncMode: 'string',
      HAMode: 'string',
      dbInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceHAConfigResponse extends $tea.Model {
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

export class DescribeDBInstanceHAConfigRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceHAConfigResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  syncMode: string;
  HAMode: string;
  hostInstanceInfos: DescribeDBInstanceHAConfigResponseHostInstanceInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      syncMode: 'SyncMode',
      HAMode: 'HAMode',
      hostInstanceInfos: 'HostInstanceInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      syncMode: 'string',
      HAMode: 'string',
      hostInstanceInfos: DescribeDBInstanceHAConfigResponseHostInstanceInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSQLReportsResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSQLReportsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIPArrayListRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  whitelistNetworkType?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
      whitelistNetworkType: 'WhitelistNetworkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
      whitelistNetworkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIPArrayListResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBInstanceIPArrayListResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeDBInstanceIPArrayListResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSQLLogReportListResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSQLLogReportListResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetAccountForPGRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  accountPassword: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetAccountForPGResponse extends $tea.Model {
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

export class UpgradeDBInstanceEngineVersionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  engineVersion: string;
  ownerAccount?: string;
  effectiveTime?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      engineVersion: 'EngineVersion',
      ownerAccount: 'OwnerAccount',
      effectiveTime: 'EffectiveTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      engineVersion: 'string',
      ownerAccount: 'string',
      effectiveTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeDBInstanceEngineVersionResponse extends $tea.Model {
  requestId: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RevokeAccountPrivilegeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  DBName: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      DBName: 'DBName',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      DBName: 'string',
      ownerAccount: 'string',
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

export class RestartDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RestartDBInstanceResponse extends $tea.Model {
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

export class ResetAccountPasswordRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  accountPassword: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetAccountPasswordResponse extends $tea.Model {
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

export class RemoveTagsFromResourceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  regionId: string;
  DBInstanceId: string;
  tags?: string;
  tag: RemoveTagsFromResourceRequestTag[];
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      tags: 'Tags',
      tag: 'Tag',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      tags: 'string',
      tag: { 'type': 'array', 'itemType': RemoveTagsFromResourceRequestTag },
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsFromResourceResponse extends $tea.Model {
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

export class PurgeDBInstanceLogRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PurgeDBInstanceLogResponse extends $tea.Model {
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

export class ModifySecurityIpsRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  securityIps: string;
  DBInstanceIPArrayName?: string;
  DBInstanceIPArrayAttribute?: string;
  securityIPType?: string;
  whitelistNetworkType?: string;
  modifyMode?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      securityIps: 'SecurityIps',
      DBInstanceIPArrayName: 'DBInstanceIPArrayName',
      DBInstanceIPArrayAttribute: 'DBInstanceIPArrayAttribute',
      securityIPType: 'SecurityIPType',
      whitelistNetworkType: 'WhitelistNetworkType',
      modifyMode: 'ModifyMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      securityIps: 'string',
      DBInstanceIPArrayName: 'string',
      DBInstanceIPArrayAttribute: 'string',
      securityIPType: 'string',
      whitelistNetworkType: 'string',
      modifyMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySecurityIpsResponse extends $tea.Model {
  requestId: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyParameterRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  parameters?: string;
  forcerestart?: boolean;
  ownerAccount?: string;
  parameterGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      parameters: 'Parameters',
      forcerestart: 'Forcerestart',
      ownerAccount: 'OwnerAccount',
      parameterGroupId: 'ParameterGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      parameters: 'string',
      forcerestart: 'boolean',
      ownerAccount: 'string',
      parameterGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyParameterResponse extends $tea.Model {
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

export class ModifyDBInstanceSpecRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBInstanceClass?: string;
  DBInstanceStorage?: number;
  payType: string;
  ownerAccount?: string;
  effectiveTime?: string;
  engineVersion?: string;
  DBInstanceStorageType?: string;
  direction?: string;
  sourceBiz?: string;
  dedicatedHostGroupId?: string;
  zoneId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      payType: 'PayType',
      ownerAccount: 'OwnerAccount',
      effectiveTime: 'EffectiveTime',
      engineVersion: 'EngineVersion',
      DBInstanceStorageType: 'DBInstanceStorageType',
      direction: 'Direction',
      sourceBiz: 'SourceBiz',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      payType: 'string',
      ownerAccount: 'string',
      effectiveTime: 'string',
      engineVersion: 'string',
      DBInstanceStorageType: 'string',
      direction: 'string',
      sourceBiz: 'string',
      dedicatedHostGroupId: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceSpecResponse extends $tea.Model {
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

export class ModifyDBInstanceMaintainTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  maintainTime: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      maintainTime: 'MaintainTime',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      maintainTime: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceMaintainTimeResponse extends $tea.Model {
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

export class ModifyDBInstanceDescriptionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBInstanceDescription: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceDescriptionResponse extends $tea.Model {
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
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName: string;
  DBDescription: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      DBDescription: 'DBDescription',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      DBDescription: 'string',
      ownerAccount: 'string',
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

export class ModifyBackupPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupPolicyMode?: string;
  preferredBackupTime?: string;
  preferredBackupPeriod?: string;
  backupRetentionPeriod?: string;
  backupLog?: string;
  logBackupRetentionPeriod?: string;
  ownerAccount?: string;
  enableBackupLog?: string;
  localLogRetentionHours?: string;
  localLogRetentionSpace?: string;
  highSpaceUsageProtection?: string;
  logBackupFrequency?: string;
  compressType?: string;
  archiveBackupRetentionPeriod?: string;
  archiveBackupKeepPolicy?: string;
  archiveBackupKeepCount?: string;
  releasedKeepPolicy?: string;
  logBackupLocalRetentionNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupPolicyMode: 'BackupPolicyMode',
      preferredBackupTime: 'PreferredBackupTime',
      preferredBackupPeriod: 'PreferredBackupPeriod',
      backupRetentionPeriod: 'BackupRetentionPeriod',
      backupLog: 'BackupLog',
      logBackupRetentionPeriod: 'LogBackupRetentionPeriod',
      ownerAccount: 'OwnerAccount',
      enableBackupLog: 'EnableBackupLog',
      localLogRetentionHours: 'LocalLogRetentionHours',
      localLogRetentionSpace: 'LocalLogRetentionSpace',
      highSpaceUsageProtection: 'HighSpaceUsageProtection',
      logBackupFrequency: 'LogBackupFrequency',
      compressType: 'CompressType',
      archiveBackupRetentionPeriod: 'ArchiveBackupRetentionPeriod',
      archiveBackupKeepPolicy: 'ArchiveBackupKeepPolicy',
      archiveBackupKeepCount: 'ArchiveBackupKeepCount',
      releasedKeepPolicy: 'ReleasedKeepPolicy',
      logBackupLocalRetentionNumber: 'LogBackupLocalRetentionNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupPolicyMode: 'string',
      preferredBackupTime: 'string',
      preferredBackupPeriod: 'string',
      backupRetentionPeriod: 'string',
      backupLog: 'string',
      logBackupRetentionPeriod: 'string',
      ownerAccount: 'string',
      enableBackupLog: 'string',
      localLogRetentionHours: 'string',
      localLogRetentionSpace: 'string',
      highSpaceUsageProtection: 'string',
      logBackupFrequency: 'string',
      compressType: 'string',
      archiveBackupRetentionPeriod: 'string',
      archiveBackupKeepPolicy: 'string',
      archiveBackupKeepCount: 'string',
      releasedKeepPolicy: 'string',
      logBackupLocalRetentionNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyBackupPolicyResponse extends $tea.Model {
  requestId: string;
  DBInstanceID: string;
  enableBackupLog: string;
  localLogRetentionHours: number;
  localLogRetentionSpace: string;
  highSpaceUsageProtection: string;
  compressType: string;
  logBackupLocalRetentionNumber: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceID: 'DBInstanceID',
      enableBackupLog: 'EnableBackupLog',
      localLogRetentionHours: 'LocalLogRetentionHours',
      localLogRetentionSpace: 'LocalLogRetentionSpace',
      highSpaceUsageProtection: 'HighSpaceUsageProtection',
      compressType: 'CompressType',
      logBackupLocalRetentionNumber: 'LogBackupLocalRetentionNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceID: 'string',
      enableBackupLog: 'string',
      localLogRetentionHours: 'number',
      localLogRetentionSpace: 'string',
      highSpaceUsageProtection: 'string',
      compressType: 'string',
      logBackupLocalRetentionNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccountDescriptionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  accountDescription: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountDescription: 'AccountDescription',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      accountDescription: 'string',
      ownerAccount: 'string',
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

export class MigrateToOtherZoneRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  VPCId?: string;
  zoneId: string;
  ownerAccount?: string;
  effectiveTime?: string;
  VSwitchId?: string;
  category?: string;
  zoneIdSlave1?: string;
  zoneIdSlave2?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      VPCId: 'VPCId',
      zoneId: 'ZoneId',
      ownerAccount: 'OwnerAccount',
      effectiveTime: 'EffectiveTime',
      VSwitchId: 'VSwitchId',
      category: 'Category',
      zoneIdSlave1: 'ZoneIdSlave1',
      zoneIdSlave2: 'ZoneIdSlave2',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      VPCId: 'string',
      zoneId: 'string',
      ownerAccount: 'string',
      effectiveTime: 'string',
      VSwitchId: 'string',
      category: 'string',
      zoneIdSlave1: 'string',
      zoneIdSlave2: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MigrateToOtherZoneResponse extends $tea.Model {
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

export class ImportDatabaseBetweenInstancesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  sourceDBInstanceId: string;
  DBInfo: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      sourceDBInstanceId: 'SourceDBInstanceId',
      DBInfo: 'DBInfo',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      sourceDBInstanceId: 'string',
      DBInfo: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ImportDatabaseBetweenInstancesResponse extends $tea.Model {
  requestId: string;
  importId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      importId: 'ImportId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      importId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GrantAccountPrivilegeRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  DBName: string;
  accountPrivilege: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      DBName: 'DBName',
      accountPrivilege: 'AccountPrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
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

export class DescribeTasksRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNumber?: number;
  status?: string;
  taskAction?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      status: 'Status',
      taskAction: 'TaskAction',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      status: 'string',
      taskAction: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTasksResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeTasksResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeTasksResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSQLLogReportsResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSQLLogReportsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogRecordsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  SQLId?: number;
  queryKeywords?: string;
  startTime: string;
  database?: string;
  user?: string;
  form?: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      SQLId: 'SQLId',
      queryKeywords: 'QueryKeywords',
      startTime: 'StartTime',
      database: 'Database',
      user: 'User',
      form: 'Form',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      SQLId: 'number',
      queryKeywords: 'string',
      startTime: 'string',
      database: 'string',
      user: 'string',
      form: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogRecordsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSQLLogRecordsResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeSQLLogRecordsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  DBName?: string;
  sortKey?: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      DBName: 'DBName',
      sortKey: 'SortKey',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      DBName: 'string',
      sortKey: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  engine: string;
  startTime: string;
  endTime: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSlowLogsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      engine: 'Engine',
      startTime: 'StartTime',
      endTime: 'EndTime',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      engine: 'string',
      startTime: 'string',
      endTime: 'string',
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
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  SQLHASH?: string;
  startTime: string;
  endTime: string;
  DBName?: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      SQLHASH: 'SQLHASH',
      startTime: 'StartTime',
      endTime: 'EndTime',
      DBName: 'DBName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      SQLHASH: 'string',
      startTime: 'string',
      endTime: 'string',
      DBName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogRecordsResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  engine: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeSlowLogRecordsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
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
      DBInstanceId: 'string',
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

export class DescribeResourceUsageRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeResourceUsageResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  engine: string;
  diskUsed: number;
  dataSize: number;
  logSize: number;
  backupSize: number;
  backupOssDataSize: number;
  backupOssLogSize: number;
  SQLSize: number;
  coldBackupSize: number;
  backupDataSize: number;
  backupLogSize: number;
  paidBackupSize: number;
  archiveBackupSize: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      engine: 'Engine',
      diskUsed: 'DiskUsed',
      dataSize: 'DataSize',
      logSize: 'LogSize',
      backupSize: 'BackupSize',
      backupOssDataSize: 'BackupOssDataSize',
      backupOssLogSize: 'BackupOssLogSize',
      SQLSize: 'SQLSize',
      coldBackupSize: 'ColdBackupSize',
      backupDataSize: 'BackupDataSize',
      backupLogSize: 'BackupLogSize',
      paidBackupSize: 'PaidBackupSize',
      archiveBackupSize: 'ArchiveBackupSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      engine: 'string',
      diskUsed: 'number',
      dataSize: 'number',
      logSize: 'number',
      backupSize: 'number',
      backupOssDataSize: 'number',
      backupOssLogSize: 'number',
      SQLSize: 'number',
      coldBackupSize: 'number',
      backupDataSize: 'number',
      backupLogSize: 'number',
      paidBackupSize: 'number',
      archiveBackupSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  resourceOwnerId?: number;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
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

export class DescribeParameterTemplatesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  engine: string;
  engineVersion: string;
  ownerAccount?: string;
  category?: string;
  regionId?: string;
  DBInstanceId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      ownerAccount: 'OwnerAccount',
      category: 'Category',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      engine: 'string',
      engineVersion: 'string',
      ownerAccount: 'string',
      category: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterTemplatesResponse extends $tea.Model {
  requestId: string;
  engine: string;
  engineVersion: string;
  parameterCount: string;
  parameters: DescribeParameterTemplatesResponseParameters;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      parameterCount: 'ParameterCount',
      parameters: 'Parameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      engine: 'string',
      engineVersion: 'string',
      parameterCount: 'string',
      parameters: DescribeParameterTemplatesResponseParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersResponse extends $tea.Model {
  requestId: string;
  engine: string;
  engineVersion: string;
  configParameters: DescribeParametersResponseConfigParameters;
  runningParameters: DescribeParametersResponseRunningParameters;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      configParameters: 'ConfigParameters',
      runningParameters: 'RunningParameters',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      engine: 'string',
      engineVersion: 'string',
      configParameters: DescribeParametersResponseConfigParameters,
      runningParameters: DescribeParametersResponseRunningParameters,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeModifyParameterLogRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeModifyParameterLogResponse extends $tea.Model {
  requestId: string;
  engine: string;
  DBInstanceId: string;
  engineVersion: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeModifyParameterLogResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      engine: 'Engine',
      DBInstanceId: 'DBInstanceId',
      engineVersion: 'EngineVersion',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      engine: 'string',
      DBInstanceId: 'string',
      engineVersion: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeModifyParameterLogResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeErrorLogsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeErrorLogsResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescribeErrorLogsResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescribeErrorLogsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancePerformanceRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  key: string;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      key: 'Key',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      key: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancePerformanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  engine: string;
  startTime: string;
  endTime: string;
  performanceKeys: DescribeDBInstancePerformanceResponsePerformanceKeys;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      engine: 'Engine',
      startTime: 'StartTime',
      endTime: 'EndTime',
      performanceKeys: 'PerformanceKeys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      engine: 'string',
      startTime: 'string',
      endTime: 'string',
      performanceKeys: DescribeDBInstancePerformanceResponsePerformanceKeys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName?: string;
  DBStatus?: string;
  ownerAccount?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      DBStatus: 'DBStatus',
      ownerAccount: 'OwnerAccount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      DBStatus: 'string',
      ownerAccount: 'string',
      pageSize: 'number',
      pageNumber: 'number',
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

export class DescribeBinlogFilesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBinlogFilesResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  totalFileSize: number;
  items: DescribeBinlogFilesResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalFileSize: 'TotalFileSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      totalFileSize: 'number',
      items: DescribeBinlogFilesResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupTasksRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  flag?: string;
  ownerAccount?: string;
  DBInstanceId: string;
  backupJobId?: number;
  backupMode?: string;
  backupJobStatus?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      flag: 'Flag',
      ownerAccount: 'OwnerAccount',
      DBInstanceId: 'DBInstanceId',
      backupJobId: 'BackupJobId',
      backupMode: 'BackupMode',
      backupJobStatus: 'BackupJobStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      flag: 'string',
      ownerAccount: 'string',
      DBInstanceId: 'string',
      backupJobId: 'number',
      backupMode: 'string',
      backupJobStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupTasksResponse extends $tea.Model {
  requestId: string;
  items: DescribeBackupTasksResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeBackupTasksResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupsRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupId?: string;
  backupStatus?: string;
  backupMode?: string;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
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
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
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
  totalBackupSize: number;
  totalEcsSnapshotSize: number;
  items: DescribeBackupsResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalRecordCount: 'TotalRecordCount',
      pageNumber: 'PageNumber',
      pageRecordCount: 'PageRecordCount',
      totalBackupSize: 'TotalBackupSize',
      totalEcsSnapshotSize: 'TotalEcsSnapshotSize',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalRecordCount: 'string',
      pageNumber: 'string',
      pageRecordCount: 'string',
      totalBackupSize: 'number',
      totalEcsSnapshotSize: 'number',
      items: DescribeBackupsResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupPolicyRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupPolicyMode?: string;
  ownerAccount?: string;
  compressType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupPolicyMode: 'BackupPolicyMode',
      ownerAccount: 'OwnerAccount',
      compressType: 'CompressType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupPolicyMode: 'string',
      ownerAccount: 'string',
      compressType: 'string',
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
  backupLog: string;
  logBackupRetentionPeriod: number;
  enableBackupLog: string;
  localLogRetentionHours: number;
  localLogRetentionSpace: string;
  duplication: string;
  duplicationContent: string;
  highSpaceUsageProtection: string;
  logBackupFrequency: string;
  compressType: string;
  archiveBackupRetentionPeriod: string;
  archiveBackupKeepPolicy: string;
  archiveBackupKeepCount: string;
  releasedKeepPolicy: string;
  logBackupLocalRetentionNumber: number;
  duplicationLocation: DescribeBackupPolicyResponseDuplicationLocation;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      backupRetentionPeriod: 'BackupRetentionPeriod',
      preferredNextBackupTime: 'PreferredNextBackupTime',
      preferredBackupTime: 'PreferredBackupTime',
      preferredBackupPeriod: 'PreferredBackupPeriod',
      backupLog: 'BackupLog',
      logBackupRetentionPeriod: 'LogBackupRetentionPeriod',
      enableBackupLog: 'EnableBackupLog',
      localLogRetentionHours: 'LocalLogRetentionHours',
      localLogRetentionSpace: 'LocalLogRetentionSpace',
      duplication: 'Duplication',
      duplicationContent: 'DuplicationContent',
      highSpaceUsageProtection: 'HighSpaceUsageProtection',
      logBackupFrequency: 'LogBackupFrequency',
      compressType: 'CompressType',
      archiveBackupRetentionPeriod: 'ArchiveBackupRetentionPeriod',
      archiveBackupKeepPolicy: 'ArchiveBackupKeepPolicy',
      archiveBackupKeepCount: 'ArchiveBackupKeepCount',
      releasedKeepPolicy: 'ReleasedKeepPolicy',
      logBackupLocalRetentionNumber: 'LogBackupLocalRetentionNumber',
      duplicationLocation: 'DuplicationLocation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      backupRetentionPeriod: 'number',
      preferredNextBackupTime: 'string',
      preferredBackupTime: 'string',
      preferredBackupPeriod: 'string',
      backupLog: 'string',
      logBackupRetentionPeriod: 'number',
      enableBackupLog: 'string',
      localLogRetentionHours: 'number',
      localLogRetentionSpace: 'string',
      duplication: 'string',
      duplicationContent: 'string',
      highSpaceUsageProtection: 'string',
      logBackupFrequency: 'string',
      compressType: 'string',
      archiveBackupRetentionPeriod: 'string',
      archiveBackupKeepPolicy: 'string',
      archiveBackupKeepCount: 'string',
      releasedKeepPolicy: 'string',
      logBackupLocalRetentionNumber: 'number',
      duplicationLocation: DescribeBackupPolicyResponseDuplicationLocation,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsRequest extends $tea.Model {
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponse extends $tea.Model {
  requestId: string;
  systemAdminAccountStatus: string;
  systemAdminAccountFirstActivationTime: string;
  accounts: DescribeAccountsResponseAccounts;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      systemAdminAccountStatus: 'SystemAdminAccountStatus',
      systemAdminAccountFirstActivationTime: 'SystemAdminAccountFirstActivationTime',
      accounts: 'Accounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      systemAdminAccountStatus: 'string',
      systemAdminAccountFirstActivationTime: 'string',
      accounts: DescribeAccountsResponseAccounts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescibeImportsFromDatabaseRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  engine: string;
  importId?: number;
  startTime: string;
  endTime: string;
  pageSize?: number;
  pageNumber?: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      engine: 'Engine',
      importId: 'ImportId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      engine: 'string',
      importId: 'number',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescibeImportsFromDatabaseResponse extends $tea.Model {
  requestId: string;
  totalRecordCount: number;
  pageNumber: number;
  pageRecordCount: number;
  items: DescibeImportsFromDatabaseResponseItems;
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
      totalRecordCount: 'number',
      pageNumber: 'number',
      pageRecordCount: 'number',
      items: DescibeImportsFromDatabaseResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDBInstanceResponse extends $tea.Model {
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

export class DeleteDatabaseRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
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
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      ownerAccount: 'string',
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

export class CreateTempDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  backupId?: number;
  restoreTime?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      backupId: 'BackupId',
      restoreTime: 'RestoreTime',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      backupId: 'number',
      restoreTime: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateTempDBInstanceResponse extends $tea.Model {
  requestId: string;
  tempDBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      tempDBInstanceId: 'TempDBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      tempDBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDatabaseRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName: string;
  characterSetName: string;
  DBDescription?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      characterSetName: 'CharacterSetName',
      DBDescription: 'DBDescription',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      characterSetName: 'string',
      DBDescription: 'string',
      ownerAccount: 'string',
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

export class CreateBackupRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  DBName?: string;
  backupStrategy?: string;
  backupMethod?: string;
  backupType?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      backupStrategy: 'BackupStrategy',
      backupMethod: 'BackupMethod',
      backupType: 'BackupType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      DBName: 'string',
      backupStrategy: 'string',
      backupMethod: 'string',
      backupType: 'string',
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
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  accountName: string;
  accountPassword: string;
  accountDescription?: string;
  accountType?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountPassword: 'AccountPassword',
      accountDescription: 'AccountDescription',
      accountType: 'AccountType',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      accountName: 'string',
      accountPassword: 'string',
      accountDescription: 'string',
      accountType: 'string',
      ownerAccount: 'string',
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

export class CheckDBNameAvailableRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  DBName: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      DBName: 'DBName',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      DBName: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckDBNameAvailableResponse extends $tea.Model {
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

export class CheckAccountNameAvailableRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  accountName: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      accountName: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CheckAccountNameAvailableResponse extends $tea.Model {
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

export class CancelImportRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  importId: number;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      importId: 'ImportId',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      importId: 'number',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelImportResponse extends $tea.Model {
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

export class AddTagsToResourceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  regionId: string;
  DBInstanceId: string;
  tags?: string;
  tag: AddTagsToResourceRequestTag[];
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      regionId: 'RegionId',
      DBInstanceId: 'DBInstanceId',
      tags: 'Tags',
      tag: 'Tag',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      regionId: 'string',
      DBInstanceId: 'string',
      tags: 'string',
      tag: { 'type': 'array', 'itemType': AddTagsToResourceRequestTag },
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsToResourceResponse extends $tea.Model {
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

export class SwitchDBInstanceNetTypeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  connectionStringPrefix: string;
  port?: string;
  connectionStringType?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      connectionStringPrefix: 'ConnectionStringPrefix',
      port: 'Port',
      connectionStringType: 'ConnectionStringType',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      connectionStringPrefix: 'string',
      port: 'string',
      connectionStringType: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SwitchDBInstanceNetTypeResponse extends $tea.Model {
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

export class ReleaseInstancePublicConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  currentConnectionString: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      currentConnectionString: 'CurrentConnectionString',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      currentConnectionString: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ReleaseInstancePublicConnectionResponse extends $tea.Model {
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

export class ModifyDBInstanceNetworkTypeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  retainClassic?: string;
  classicExpiredDays?: string;
  instanceNetworkType: string;
  readWriteSplittingClassicExpiredDays?: number;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  readWriteSplittingPrivateIpAddress?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      retainClassic: 'RetainClassic',
      classicExpiredDays: 'ClassicExpiredDays',
      instanceNetworkType: 'InstanceNetworkType',
      readWriteSplittingClassicExpiredDays: 'ReadWriteSplittingClassicExpiredDays',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      readWriteSplittingPrivateIpAddress: 'ReadWriteSplittingPrivateIpAddress',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      retainClassic: 'string',
      classicExpiredDays: 'string',
      instanceNetworkType: 'string',
      readWriteSplittingClassicExpiredDays: 'number',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      readWriteSplittingPrivateIpAddress: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceNetworkTypeResponse extends $tea.Model {
  requestId: string;
  taskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceConnectionStringRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  currentConnectionString: string;
  connectionStringPrefix: string;
  port: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      currentConnectionString: 'CurrentConnectionString',
      connectionStringPrefix: 'ConnectionStringPrefix',
      port: 'Port',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      currentConnectionString: 'string',
      connectionStringPrefix: 'string',
      port: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceConnectionStringResponse extends $tea.Model {
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

export class ModifyDBInstanceConnectionModeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  connectionMode: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      connectionMode: 'ConnectionMode',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      connectionMode: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyDBInstanceConnectionModeResponse extends $tea.Model {
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

export class DescribeDBInstanceNetInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  DBInstanceId: string;
  flag?: string;
  DBInstanceNetRWSplitType?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      DBInstanceId: 'DBInstanceId',
      flag: 'Flag',
      DBInstanceNetRWSplitType: 'DBInstanceNetRWSplitType',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      DBInstanceId: 'string',
      flag: 'string',
      DBInstanceNetRWSplitType: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponse extends $tea.Model {
  requestId: string;
  instanceNetworkType: string;
  securityIPMode: string;
  DBInstanceNetInfos: DescribeDBInstanceNetInfoResponseDBInstanceNetInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      instanceNetworkType: 'InstanceNetworkType',
      securityIPMode: 'SecurityIPMode',
      DBInstanceNetInfos: 'DBInstanceNetInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      instanceNetworkType: 'string',
      securityIPMode: 'string',
      DBInstanceNetInfos: DescribeDBInstanceNetInfoResponseDBInstanceNetInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateReadOnlyDBInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  regionId: string;
  zoneId: string;
  DBInstanceId: string;
  DBInstanceClass: string;
  DBInstanceStorage: number;
  engineVersion: string;
  payType: string;
  DBInstanceDescription?: string;
  instanceNetworkType?: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  ownerAccount?: string;
  resourceGroupId?: string;
  category?: string;
  DBInstanceStorageType?: string;
  dedicatedHostGroupId?: string;
  targetDedicatedHostIdForMaster?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      engineVersion: 'EngineVersion',
      payType: 'PayType',
      DBInstanceDescription: 'DBInstanceDescription',
      instanceNetworkType: 'InstanceNetworkType',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      ownerAccount: 'OwnerAccount',
      resourceGroupId: 'ResourceGroupId',
      category: 'Category',
      DBInstanceStorageType: 'DBInstanceStorageType',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      targetDedicatedHostIdForMaster: 'TargetDedicatedHostIdForMaster',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      regionId: 'string',
      zoneId: 'string',
      DBInstanceId: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      engineVersion: 'string',
      payType: 'string',
      DBInstanceDescription: 'string',
      instanceNetworkType: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      ownerAccount: 'string',
      resourceGroupId: 'string',
      category: 'string',
      DBInstanceStorageType: 'string',
      dedicatedHostGroupId: 'string',
      targetDedicatedHostIdForMaster: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateReadOnlyDBInstanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: string;
  connectionString: string;
  port: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
      connectionString: 'ConnectionString',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'string',
      connectionString: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBInstanceRequest extends $tea.Model {
  resourceOwnerId?: number;
  regionId: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceStorage: number;
  systemDBCharset?: string;
  DBInstanceNetType: string;
  DBInstanceDescription?: string;
  securityIPList: string;
  clientToken?: string;
  payType: string;
  zoneId?: string;
  instanceNetworkType?: string;
  connectionMode?: string;
  VPCId?: string;
  VSwitchId?: string;
  privateIpAddress?: string;
  usedTime?: string;
  period?: string;
  resourceGroupId?: string;
  DBInstanceStorageType?: string;
  businessInfo?: string;
  encryptionKey?: string;
  roleARN?: string;
  autoRenew?: string;
  category?: string;
  dedicatedHostGroupId?: string;
  targetDedicatedHostIdForMaster?: string;
  targetDedicatedHostIdForSlave?: string;
  targetDedicatedHostIdForLog?: string;
  DBParamGroupId?: string;
  DBTimeZone?: string;
  DBIsIgnoreCase?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceStorage: 'DBInstanceStorage',
      systemDBCharset: 'SystemDBCharset',
      DBInstanceNetType: 'DBInstanceNetType',
      DBInstanceDescription: 'DBInstanceDescription',
      securityIPList: 'SecurityIPList',
      clientToken: 'ClientToken',
      payType: 'PayType',
      zoneId: 'ZoneId',
      instanceNetworkType: 'InstanceNetworkType',
      connectionMode: 'ConnectionMode',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      privateIpAddress: 'PrivateIpAddress',
      usedTime: 'UsedTime',
      period: 'Period',
      resourceGroupId: 'ResourceGroupId',
      DBInstanceStorageType: 'DBInstanceStorageType',
      businessInfo: 'BusinessInfo',
      encryptionKey: 'EncryptionKey',
      roleARN: 'RoleARN',
      autoRenew: 'AutoRenew',
      category: 'Category',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      targetDedicatedHostIdForMaster: 'TargetDedicatedHostIdForMaster',
      targetDedicatedHostIdForSlave: 'TargetDedicatedHostIdForSlave',
      targetDedicatedHostIdForLog: 'TargetDedicatedHostIdForLog',
      DBParamGroupId: 'DBParamGroupId',
      DBTimeZone: 'DBTimeZone',
      DBIsIgnoreCase: 'DBIsIgnoreCase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      regionId: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceStorage: 'number',
      systemDBCharset: 'string',
      DBInstanceNetType: 'string',
      DBInstanceDescription: 'string',
      securityIPList: 'string',
      clientToken: 'string',
      payType: 'string',
      zoneId: 'string',
      instanceNetworkType: 'string',
      connectionMode: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      privateIpAddress: 'string',
      usedTime: 'string',
      period: 'string',
      resourceGroupId: 'string',
      DBInstanceStorageType: 'string',
      businessInfo: 'string',
      encryptionKey: 'string',
      roleARN: 'string',
      autoRenew: 'string',
      category: 'string',
      dedicatedHostGroupId: 'string',
      targetDedicatedHostIdForMaster: 'string',
      targetDedicatedHostIdForSlave: 'string',
      targetDedicatedHostIdForLog: 'string',
      DBParamGroupId: 'string',
      DBTimeZone: 'string',
      DBIsIgnoreCase: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDBInstanceResponse extends $tea.Model {
  requestId: string;
  DBInstanceId: string;
  orderId: string;
  connectionString: string;
  port: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DBInstanceId: 'DBInstanceId',
      orderId: 'OrderId',
      connectionString: 'ConnectionString',
      port: 'Port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DBInstanceId: 'string',
      orderId: 'string',
      connectionString: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateInstancePublicConnectionRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  DBInstanceId: string;
  connectionStringPrefix: string;
  port: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      connectionStringPrefix: 'ConnectionStringPrefix',
      port: 'Port',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      connectionStringPrefix: 'string',
      port: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AllocateInstancePublicConnectionResponse extends $tea.Model {
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

export class DescribeDBInstancesByPerformanceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  DBInstanceId?: string;
  pageSize?: number;
  pageNumber?: number;
  sortMethod?: string;
  sortKey?: string;
  tags?: string;
  tag: DescribeDBInstancesByPerformanceRequestTag[];
  ownerAccount?: string;
  regionId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      DBInstanceId: 'DBInstanceId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      sortMethod: 'SortMethod',
      sortKey: 'SortKey',
      tags: 'Tags',
      tag: 'Tag',
      ownerAccount: 'OwnerAccount',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      DBInstanceId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      sortMethod: 'string',
      sortKey: 'string',
      tags: 'string',
      tag: { 'type': 'array', 'itemType': DescribeDBInstancesByPerformanceRequestTag },
      ownerAccount: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByPerformanceResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBInstancesByPerformanceResponseItems;
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
      items: DescribeDBInstancesByPerformanceResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByExpireTimeRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  regionId?: string;
  proxyId?: string;
  expirePeriod?: number;
  expired?: boolean;
  pageSize?: number;
  pageNumber?: number;
  tags?: string;
  ownerAccount?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      regionId: 'RegionId',
      proxyId: 'proxyId',
      expirePeriod: 'ExpirePeriod',
      expired: 'Expired',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      tags: 'Tags',
      ownerAccount: 'OwnerAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      regionId: 'string',
      proxyId: 'string',
      expirePeriod: 'number',
      expired: 'boolean',
      pageSize: 'number',
      pageNumber: 'number',
      tags: 'string',
      ownerAccount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByExpireTimeResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBInstancesByExpireTimeResponseItems;
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
      items: DescribeDBInstancesByExpireTimeResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  clientToken?: string;
  proxyId?: string;
  engine?: string;
  zoneId?: string;
  resourceGroupId?: string;
  DBInstanceStatus?: string;
  expired?: string;
  searchKey?: string;
  DBInstanceId?: string;
  DBInstanceType?: string;
  regionId: string;
  pageSize?: number;
  pageNumber?: number;
  instanceNetworkType?: string;
  vpcId?: string;
  VSwitchId?: string;
  DBInstanceClass?: string;
  engineVersion?: string;
  payType?: string;
  connectionMode?: string;
  tags?: string;
  ownerAccount?: string;
  dedicatedHostGroupId?: string;
  dedicatedHostId?: string;
  instanceLevel?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      clientToken: 'ClientToken',
      proxyId: 'proxyId',
      engine: 'Engine',
      zoneId: 'ZoneId',
      resourceGroupId: 'ResourceGroupId',
      DBInstanceStatus: 'DBInstanceStatus',
      expired: 'Expired',
      searchKey: 'SearchKey',
      DBInstanceId: 'DBInstanceId',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      instanceNetworkType: 'InstanceNetworkType',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      DBInstanceClass: 'DBInstanceClass',
      engineVersion: 'EngineVersion',
      payType: 'PayType',
      connectionMode: 'ConnectionMode',
      tags: 'Tags',
      ownerAccount: 'OwnerAccount',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHostId: 'DedicatedHostId',
      instanceLevel: 'InstanceLevel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      clientToken: 'string',
      proxyId: 'string',
      engine: 'string',
      zoneId: 'string',
      resourceGroupId: 'string',
      DBInstanceStatus: 'string',
      expired: 'string',
      searchKey: 'string',
      DBInstanceId: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      instanceNetworkType: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      DBInstanceClass: 'string',
      engineVersion: 'string',
      payType: 'string',
      connectionMode: 'string',
      tags: 'string',
      ownerAccount: 'string',
      dedicatedHostGroupId: 'string',
      dedicatedHostId: 'string',
      instanceLevel: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  totalRecordCount: number;
  pageRecordCount: number;
  items: DescribeDBInstancesResponseItems;
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
      items: DescribeDBInstancesResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeRequest extends $tea.Model {
  resourceOwnerId?: number;
  DBInstanceId: string;
  expired?: string;
  static names(): { [key: string]: string } {
    return {
      resourceOwnerId: 'ResourceOwnerId',
      DBInstanceId: 'DBInstanceId',
      expired: 'Expired',
    };
  }

  static types(): { [key: string]: any } {
    return {
      resourceOwnerId: 'number',
      DBInstanceId: 'string',
      expired: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponse extends $tea.Model {
  requestId: string;
  items: DescribeDBInstanceAttributeResponseItems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      items: DescribeDBInstanceAttributeResponseItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostImageCategoriesResponseImagesImages extends $tea.Model {
  imageName: string;
  imageCode: string;
  static names(): { [key: string]: string } {
    return {
      imageName: 'ImageName',
      imageCode: 'ImageCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageName: 'string',
      imageCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostImageCategoriesResponseImages extends $tea.Model {
  images: DescribeDedicatedHostImageCategoriesResponseImagesImages[];
  static names(): { [key: string]: string } {
    return {
      images: 'Images',
    };
  }

  static types(): { [key: string]: any } {
    return {
      images: { 'type': 'array', 'itemType': DescribeDedicatedHostImageCategoriesResponseImagesImages },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossBackupMetaListResponseItemsMeta extends $tea.Model {
  database: string;
  tables: string;
  size: string;
  static names(): { [key: string]: string } {
    return {
      database: 'Database',
      tables: 'Tables',
      size: 'Size',
    };
  }

  static types(): { [key: string]: any } {
    return {
      database: 'string',
      tables: 'string',
      size: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossBackupMetaListResponseItems extends $tea.Model {
  meta: DescribeCrossBackupMetaListResponseItemsMeta[];
  static names(): { [key: string]: string } {
    return {
      meta: 'Meta',
    };
  }

  static types(): { [key: string]: any } {
    return {
      meta: { 'type': 'array', 'itemType': DescribeCrossBackupMetaListResponseItemsMeta },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes extends $tea.Model {
  storageType: string;
  static names(): { [key: string]: string } {
    return {
      storageType: 'StorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      storageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys extends $tea.Model {
  category: string;
  supportedStorageTypes: DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes[];
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      supportedStorageTypes: 'SupportedStorageTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      supportedStorageTypes: { 'type': 'array', 'itemType': DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions extends $tea.Model {
  version: string;
  supportedCategorys: DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys[];
  static names(): { [key: string]: string } {
    return {
      version: 'Version',
      supportedCategorys: 'SupportedCategorys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      version: 'string',
      supportedCategorys: { 'type': 'array', 'itemType': DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponseAvailableZonesSupportedEngines extends $tea.Model {
  engine: string;
  supportedEngineVersions: DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions[];
  static names(): { [key: string]: string } {
    return {
      engine: 'Engine',
      supportedEngineVersions: 'SupportedEngineVersions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      engine: 'string',
      supportedEngineVersions: { 'type': 'array', 'itemType': DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableZonesResponseAvailableZones extends $tea.Model {
  regionId: string;
  zoneId: string;
  networkTypes: string;
  supportedEngines: DescribeAvailableZonesResponseAvailableZonesSupportedEngines[];
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      networkTypes: 'NetworkTypes',
      supportedEngines: 'SupportedEngines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
      networkTypes: 'string',
      supportedEngines: { 'type': 'array', 'itemType': DescribeAvailableZonesResponseAvailableZonesSupportedEngines },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange extends $tea.Model {
  maxValue: number;
  minValue: number;
  step: number;
  static names(): { [key: string]: string } {
    return {
      maxValue: 'MaxValue',
      minValue: 'MinValue',
      step: 'Step',
    };
  }

  static types(): { [key: string]: any } {
    return {
      maxValue: 'number',
      minValue: 'number',
      step: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableClassesResponseDBInstanceClasses extends $tea.Model {
  DBInstanceClass: string;
  storageRange: string;
  DBInstanceStorageRange: DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange;
  static names(): { [key: string]: string } {
    return {
      DBInstanceClass: 'DBInstanceClass',
      storageRange: 'StorageRange',
      DBInstanceStorageRange: 'DBInstanceStorageRange',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceClass: 'string',
      storageRange: 'string',
      DBInstanceStorageRange: DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSignedEventActionsResponseEventItemsEventItems extends $tea.Model {
  eventId: number;
  eventContent: string;
  eventSig: string;
  eventRcpt: string;
  static names(): { [key: string]: string } {
    return {
      eventId: 'EventId',
      eventContent: 'EventContent',
      eventSig: 'EventSig',
      eventRcpt: 'EventRcpt',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventId: 'number',
      eventContent: 'string',
      eventSig: 'string',
      eventRcpt: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSignedEventActionsResponseEventItems extends $tea.Model {
  eventItems: DescribeSignedEventActionsResponseEventItemsEventItems[];
  static names(): { [key: string]: string } {
    return {
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventItems: { 'type': 'array', 'itemType': DescribeSignedEventActionsResponseEventItemsEventItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNextEventForSignResponseEventItemsEventItems extends $tea.Model {
  eventId: number;
  eventContent: string;
  static names(): { [key: string]: string } {
    return {
      eventId: 'EventId',
      eventContent: 'EventContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventId: 'number',
      eventContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeNextEventForSignResponseEventItems extends $tea.Model {
  eventItems: DescribeNextEventForSignResponseEventItemsEventItems[];
  static names(): { [key: string]: string } {
    return {
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventItems: { 'type': 'array', 'itemType': DescribeNextEventForSignResponseEventItemsEventItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel extends $tea.Model {
  DBInstanceId: string;
  region: string;
  zoneId: string;
  engine: string;
  payType: string;
  createdTime: string;
  expireTime: string;
  lockMode: string;
  DBInstanceStatus: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      region: 'Region',
      zoneId: 'ZoneId',
      engine: 'Engine',
      payType: 'PayType',
      createdTime: 'CreatedTime',
      expireTime: 'ExpireTime',
      lockMode: 'LockMode',
      DBInstanceStatus: 'DBInstanceStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      region: 'string',
      zoneId: 'string',
      engine: 'string',
      payType: 'string',
      createdTime: 'string',
      expireTime: 'string',
      lockMode: 'string',
      DBInstanceStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels extends $tea.Model {
  instanceModel: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel[];
  static names(): { [key: string]: string } {
    return {
      instanceModel: 'InstanceModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceModel: { 'type': 'array', 'itemType': DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel extends $tea.Model {
  instanceDateType: string;
  count: number;
  instanceModels: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels;
  static names(): { [key: string]: string } {
    return {
      instanceDateType: 'InstanceDateType',
      count: 'Count',
      instanceModels: 'InstanceModels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceDateType: 'string',
      count: 'number',
      instanceModels: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels extends $tea.Model {
  typeModel: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel[];
  static names(): { [key: string]: string } {
    return {
      typeModel: 'TypeModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      typeModel: { 'type': 'array', 'itemType': DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegionsRegionModel extends $tea.Model {
  region: string;
  engineCount: string;
  totalCount: number;
  typeModels: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels;
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
      engineCount: 'EngineCount',
      totalCount: 'TotalCount',
      typeModels: 'TypeModels',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: 'string',
      engineCount: 'string',
      totalCount: 'number',
      typeModels: DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesOverviewResponseRegions extends $tea.Model {
  regionModel: DescribeDBInstancesOverviewResponseRegionsRegionModel[];
  static names(): { [key: string]: string } {
    return {
      regionModel: 'RegionModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionModel: { 'type': 'array', 'itemType': DescribeDBInstancesOverviewResponseRegionsRegionModel },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteBackupFileResponseDeletedBaksetIds extends $tea.Model {
  deletedBaksetIds: number[];
  static names(): { [key: string]: string } {
    return {
      deletedBaksetIds: 'DeletedBaksetIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      deletedBaksetIds: { 'type': 'array', 'itemType': 'integer' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDetachedBackupsResponseItemsBackup extends $tea.Model {
  backupId: string;
  DBInstanceId: string;
  backupStatus: string;
  backupStartTime: string;
  backupEndTime: string;
  backupType: string;
  backupMode: string;
  backupMethod: string;
  backupDownloadURL: string;
  backupIntranetDownloadURL: string;
  backupLocation: string;
  backupExtractionStatus: string;
  backupScale: string;
  backupDBNames: string;
  totalBackupSize: number;
  backupSize: number;
  hostInstanceID: string;
  storeStatus: string;
  metaStatus: string;
  slaveStatus: string;
  consistentTime: number;
  static names(): { [key: string]: string } {
    return {
      backupId: 'BackupId',
      DBInstanceId: 'DBInstanceId',
      backupStatus: 'BackupStatus',
      backupStartTime: 'BackupStartTime',
      backupEndTime: 'BackupEndTime',
      backupType: 'BackupType',
      backupMode: 'BackupMode',
      backupMethod: 'BackupMethod',
      backupDownloadURL: 'BackupDownloadURL',
      backupIntranetDownloadURL: 'BackupIntranetDownloadURL',
      backupLocation: 'BackupLocation',
      backupExtractionStatus: 'BackupExtractionStatus',
      backupScale: 'BackupScale',
      backupDBNames: 'BackupDBNames',
      totalBackupSize: 'TotalBackupSize',
      backupSize: 'BackupSize',
      hostInstanceID: 'HostInstanceID',
      storeStatus: 'StoreStatus',
      metaStatus: 'MetaStatus',
      slaveStatus: 'SlaveStatus',
      consistentTime: 'ConsistentTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupId: 'string',
      DBInstanceId: 'string',
      backupStatus: 'string',
      backupStartTime: 'string',
      backupEndTime: 'string',
      backupType: 'string',
      backupMode: 'string',
      backupMethod: 'string',
      backupDownloadURL: 'string',
      backupIntranetDownloadURL: 'string',
      backupLocation: 'string',
      backupExtractionStatus: 'string',
      backupScale: 'string',
      backupDBNames: 'string',
      totalBackupSize: 'number',
      backupSize: 'number',
      hostInstanceID: 'string',
      storeStatus: 'string',
      metaStatus: 'string',
      slaveStatus: 'string',
      consistentTime: 'number',
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

export class DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses extends $tea.Model {
  hostClassName: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      hostClassName: 'HostClassName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostClassName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostClassesResponseHostClasses extends $tea.Model {
  hostClasses: DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses[];
  static names(): { [key: string]: string } {
    return {
      hostClasses: 'HostClasses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostClasses: { 'type': 'array', 'itemType': DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones extends $tea.Model {
  zoneId: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableDedicatedHostZonesResponseZones extends $tea.Model {
  dedicatedHostZones: DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones[];
  static names(): { [key: string]: string } {
    return {
      dedicatedHostZones: 'DedicatedHostZones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicatedHostZones: { 'type': 'array', 'itemType': DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesRequestTag extends $tea.Model {
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

export class TagResourcesRequestTag extends $tea.Model {
  key: string;
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

export class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList extends $tea.Model {
  zoneIDList: string[];
  static names(): { [key: string]: string } {
    return {
      zoneIDList: 'ZoneIDList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneIDList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups extends $tea.Model {
  dedicatedHostGroupId: string;
  dedicatedHostGroupDesc: string;
  cpuAllocationRatio: number;
  memAllocationRatio: number;
  diskAllocationRatio: number;
  allocationPolicy: string;
  hostReplacePolicy: string;
  createTime: string;
  VPCId: string;
  hostNumber: number;
  instanceNumber: number;
  engine: string;
  text: string;
  dedicatedHostCountGroupByHostType: { [key: string]: any };
  bastionInstanceId: string;
  openPermission: string;
  zoneIDList: DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList;
  static names(): { [key: string]: string } {
    return {
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHostGroupDesc: 'DedicatedHostGroupDesc',
      cpuAllocationRatio: 'CpuAllocationRatio',
      memAllocationRatio: 'MemAllocationRatio',
      diskAllocationRatio: 'DiskAllocationRatio',
      allocationPolicy: 'AllocationPolicy',
      hostReplacePolicy: 'HostReplacePolicy',
      createTime: 'CreateTime',
      VPCId: 'VPCId',
      hostNumber: 'HostNumber',
      instanceNumber: 'InstanceNumber',
      engine: 'Engine',
      text: 'Text',
      dedicatedHostCountGroupByHostType: 'DedicatedHostCountGroupByHostType',
      bastionInstanceId: 'BastionInstanceId',
      openPermission: 'OpenPermission',
      zoneIDList: 'ZoneIDList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicatedHostGroupId: 'string',
      dedicatedHostGroupDesc: 'string',
      cpuAllocationRatio: 'number',
      memAllocationRatio: 'number',
      diskAllocationRatio: 'number',
      allocationPolicy: 'string',
      hostReplacePolicy: 'string',
      createTime: 'string',
      VPCId: 'string',
      hostNumber: 'number',
      instanceNumber: 'number',
      engine: 'string',
      text: 'string',
      dedicatedHostCountGroupByHostType: { 'type': 'map', 'keyType': 'string', 'valueType': 'any' },
      bastionInstanceId: 'string',
      openPermission: 'string',
      zoneIDList: DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostGroupsResponseDedicatedHostGroups extends $tea.Model {
  dedicatedHostGroups: DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups[];
  static names(): { [key: string]: string } {
    return {
      dedicatedHostGroups: 'DedicatedHostGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicatedHostGroups: { 'type': 'array', 'itemType': DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts extends $tea.Model {
  hostName: string;
  hostStatus: string;
  instanceNumber: string;
  CPUAllocationRatio: string;
  memAllocationRatio: string;
  diskAllocationRatio: string;
  VPCId: string;
  VSwitchId: string;
  zoneId: string;
  IPAddress: string;
  hostClass: string;
  createdTime: string;
  dedicatedHostId: string;
  allocationStatus: string;
  endTime: string;
  hostType: string;
  bastionInstanceId: string;
  openPermission: string;
  accountName: string;
  hostCPU: string;
  hostMem: string;
  hostStorage: string;
  cpuUsed: string;
  memoryUsed: string;
  storageUsed: string;
  imageCategory: string;
  static names(): { [key: string]: string } {
    return {
      hostName: 'HostName',
      hostStatus: 'HostStatus',
      instanceNumber: 'InstanceNumber',
      CPUAllocationRatio: 'CPUAllocationRatio',
      memAllocationRatio: 'MemAllocationRatio',
      diskAllocationRatio: 'DiskAllocationRatio',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      zoneId: 'ZoneId',
      IPAddress: 'IPAddress',
      hostClass: 'HostClass',
      createdTime: 'CreatedTime',
      dedicatedHostId: 'DedicatedHostId',
      allocationStatus: 'AllocationStatus',
      endTime: 'EndTime',
      hostType: 'HostType',
      bastionInstanceId: 'BastionInstanceId',
      openPermission: 'OpenPermission',
      accountName: 'AccountName',
      hostCPU: 'HostCPU',
      hostMem: 'HostMem',
      hostStorage: 'HostStorage',
      cpuUsed: 'CpuUsed',
      memoryUsed: 'MemoryUsed',
      storageUsed: 'StorageUsed',
      imageCategory: 'ImageCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostName: 'string',
      hostStatus: 'string',
      instanceNumber: 'string',
      CPUAllocationRatio: 'string',
      memAllocationRatio: 'string',
      diskAllocationRatio: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      zoneId: 'string',
      IPAddress: 'string',
      hostClass: 'string',
      createdTime: 'string',
      dedicatedHostId: 'string',
      allocationStatus: 'string',
      endTime: 'string',
      hostType: 'string',
      bastionInstanceId: 'string',
      openPermission: 'string',
      accountName: 'string',
      hostCPU: 'string',
      hostMem: 'string',
      hostStorage: 'string',
      cpuUsed: 'string',
      memoryUsed: 'string',
      storageUsed: 'string',
      imageCategory: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDedicatedHostsResponseDedicatedHosts extends $tea.Model {
  dedicatedHosts: DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts[];
  static names(): { [key: string]: string } {
    return {
      dedicatedHosts: 'DedicatedHosts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicatedHosts: { 'type': 'array', 'itemType': DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostResponseDedicateHostListDedicateHostList extends $tea.Model {
  dedicatedHostId: string;
  static names(): { [key: string]: string } {
    return {
      dedicatedHostId: 'DedicatedHostId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicatedHostId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateDedicatedHostResponseDedicateHostList extends $tea.Model {
  dedicateHostList: CreateDedicatedHostResponseDedicateHostListDedicateHostList[];
  static names(): { [key: string]: string } {
    return {
      dedicateHostList: 'DedicateHostList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dedicateHostList: { 'type': 'array', 'itemType': CreateDedicatedHostResponseDedicateHostListDedicateHostList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey extends $tea.Model {
  key: string;
  valueFormat: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      valueFormat: 'ValueFormat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      valueFormat: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyPerformanceResponsePerformanceKeys extends $tea.Model {
  performanceKey: DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey[];
  static names(): { [key: string]: string } {
    return {
      performanceKey: 'PerformanceKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceKey: { 'type': 'array', 'itemType': DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems extends $tea.Model {
  DBProxyEndpointId: string;
  DBProxyConnectString: string;
  DBProxyConnectStringPort: string;
  DBProxyConnectStringNetType: string;
  DBProxyVpcInstanceId: string;
  DBProxyEndpointName: string;
  DBProxyConnectStringNetWorkType: string;
  static names(): { [key: string]: string } {
    return {
      DBProxyEndpointId: 'DBProxyEndpointId',
      DBProxyConnectString: 'DBProxyConnectString',
      DBProxyConnectStringPort: 'DBProxyConnectStringPort',
      DBProxyConnectStringNetType: 'DBProxyConnectStringNetType',
      DBProxyVpcInstanceId: 'DBProxyVpcInstanceId',
      DBProxyEndpointName: 'DBProxyEndpointName',
      DBProxyConnectStringNetWorkType: 'DBProxyConnectStringNetWorkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBProxyEndpointId: 'string',
      DBProxyConnectString: 'string',
      DBProxyConnectStringPort: 'string',
      DBProxyConnectStringNetType: 'string',
      DBProxyVpcInstanceId: 'string',
      DBProxyEndpointName: 'string',
      DBProxyConnectStringNetWorkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBProxyResponseDBProxyConnectStringItems extends $tea.Model {
  DBProxyConnectStringItems: DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems[];
  static names(): { [key: string]: string } {
    return {
      DBProxyConnectStringItems: 'DBProxyConnectStringItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBProxyConnectStringItems: { 'type': 'array', 'itemType': DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventsResponseEventItemsEventItems extends $tea.Model {
  eventId: number;
  eventType: string;
  eventName: string;
  eventTime: string;
  resourceType: string;
  resourceName: string;
  regionId: string;
  eventUserType: string;
  eventReason: string;
  eventPayload: string;
  eventRecordTime: string;
  static names(): { [key: string]: string } {
    return {
      eventId: 'EventId',
      eventType: 'EventType',
      eventName: 'EventName',
      eventTime: 'EventTime',
      resourceType: 'ResourceType',
      resourceName: 'ResourceName',
      regionId: 'RegionId',
      eventUserType: 'EventUserType',
      eventReason: 'EventReason',
      eventPayload: 'EventPayload',
      eventRecordTime: 'EventRecordTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventId: 'number',
      eventType: 'string',
      eventName: 'string',
      eventTime: 'string',
      resourceType: 'string',
      resourceName: 'string',
      regionId: 'string',
      eventUserType: 'string',
      eventReason: 'string',
      eventPayload: 'string',
      eventRecordTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeEventsResponseEventItems extends $tea.Model {
  eventItems: DescribeEventsResponseEventItemsEventItems[];
  static names(): { [key: string]: string } {
    return {
      eventItems: 'EventItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      eventItems: { 'type': 'array', 'itemType': DescribeEventsResponseEventItemsEventItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId extends $tea.Model {
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds extends $tea.Model {
  readOnlyDBInstanceId: DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId[];
  static names(): { [key: string]: string } {
    return {
      readOnlyDBInstanceId: 'ReadOnlyDBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyDBInstanceId: { 'type': 'array', 'itemType': DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneResponseItemsDBInstance extends $tea.Model {
  insId: number;
  DBInstanceId: string;
  DBInstanceDescription: string;
  payType: string;
  DBInstanceType: string;
  regionId: string;
  expireTime: string;
  destroyTime: string;
  DBInstanceStatus: string;
  engine: string;
  DBInstanceNetType: string;
  connectionMode: string;
  lockMode: string;
  category: string;
  DBInstanceStorageType: string;
  DBInstanceClass: string;
  instanceNetworkType: string;
  vpcCloudInstanceId: string;
  lockReason: string;
  zoneId: string;
  mutriORsignle: boolean;
  createTime: string;
  engineVersion: string;
  guardDBInstanceId: string;
  tempDBInstanceId: string;
  masterInstanceId: string;
  vpcId: string;
  VSwitchId: string;
  replicateId: string;
  resourceGroupId: string;
  readOnlyDBInstanceIds: DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds;
  static names(): { [key: string]: string } {
    return {
      insId: 'InsId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      payType: 'PayType',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      expireTime: 'ExpireTime',
      destroyTime: 'DestroyTime',
      DBInstanceStatus: 'DBInstanceStatus',
      engine: 'Engine',
      DBInstanceNetType: 'DBInstanceNetType',
      connectionMode: 'ConnectionMode',
      lockMode: 'LockMode',
      category: 'Category',
      DBInstanceStorageType: 'DBInstanceStorageType',
      DBInstanceClass: 'DBInstanceClass',
      instanceNetworkType: 'InstanceNetworkType',
      vpcCloudInstanceId: 'VpcCloudInstanceId',
      lockReason: 'LockReason',
      zoneId: 'ZoneId',
      mutriORsignle: 'MutriORsignle',
      createTime: 'CreateTime',
      engineVersion: 'EngineVersion',
      guardDBInstanceId: 'GuardDBInstanceId',
      tempDBInstanceId: 'TempDBInstanceId',
      masterInstanceId: 'MasterInstanceId',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      replicateId: 'ReplicateId',
      resourceGroupId: 'ResourceGroupId',
      readOnlyDBInstanceIds: 'ReadOnlyDBInstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      insId: 'number',
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      payType: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      expireTime: 'string',
      destroyTime: 'string',
      DBInstanceStatus: 'string',
      engine: 'string',
      DBInstanceNetType: 'string',
      connectionMode: 'string',
      lockMode: 'string',
      category: 'string',
      DBInstanceStorageType: 'string',
      DBInstanceClass: 'string',
      instanceNetworkType: 'string',
      vpcCloudInstanceId: 'string',
      lockReason: 'string',
      zoneId: 'string',
      mutriORsignle: 'boolean',
      createTime: 'string',
      engineVersion: 'string',
      guardDBInstanceId: 'string',
      tempDBInstanceId: 'string',
      masterInstanceId: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      replicateId: 'string',
      resourceGroupId: 'string',
      readOnlyDBInstanceIds: DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesForCloneResponseItems extends $tea.Model {
  DBInstance: DescribeDBInstancesForCloneResponseItemsDBInstance[];
  static names(): { [key: string]: string } {
    return {
      DBInstance: 'DBInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstance: { 'type': 'array', 'itemType': DescribeDBInstancesForCloneResponseItemsDBInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups extends $tea.Model {
  securityIpHosts: string;
  whitelistGroupName: string;
  static names(): { [key: string]: string } {
    return {
      securityIpHosts: 'SecurityIpHosts',
      whitelistGroupName: 'WhitelistGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityIpHosts: 'string',
      whitelistGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDTCSecurityIpHostsForSQLServerResponseItems extends $tea.Model {
  whiteListGroups: DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups[];
  static names(): { [key: string]: string } {
    return {
      whiteListGroups: 'WhiteListGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      whiteListGroups: { 'type': 'array', 'itemType': DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableCrossRegionResponseRegions extends $tea.Model {
  region: string[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionLogBackupFilesResponseItemsItem extends $tea.Model {
  crossLogBackupId: number;
  crossBackupRegion: string;
  crossLogBackupSize: number;
  logBeginTime: string;
  logEndTime: string;
  crossDownloadLink: string;
  crossIntranetDownloadLink: string;
  linkExpiredTime: string;
  logFileName: string;
  instanceId: number;
  static names(): { [key: string]: string } {
    return {
      crossLogBackupId: 'CrossLogBackupId',
      crossBackupRegion: 'CrossBackupRegion',
      crossLogBackupSize: 'CrossLogBackupSize',
      logBeginTime: 'LogBeginTime',
      logEndTime: 'LogEndTime',
      crossDownloadLink: 'CrossDownloadLink',
      crossIntranetDownloadLink: 'CrossIntranetDownloadLink',
      linkExpiredTime: 'LinkExpiredTime',
      logFileName: 'LogFileName',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      crossLogBackupId: 'number',
      crossBackupRegion: 'string',
      crossLogBackupSize: 'number',
      logBeginTime: 'string',
      logEndTime: 'string',
      crossDownloadLink: 'string',
      crossIntranetDownloadLink: 'string',
      linkExpiredTime: 'string',
      logFileName: 'string',
      instanceId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionLogBackupFilesResponseItems extends $tea.Model {
  item: DescribeCrossRegionLogBackupFilesResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeCrossRegionLogBackupFilesResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupDBInstanceResponseItemsItem extends $tea.Model {
  DBInstanceId: string;
  DBInstanceDescription: string;
  DBInstanceStatus: string;
  DBInstanceStatusDesc: string;
  engine: string;
  engineVersion: string;
  crossBackupRegion: string;
  crossBackupType: string;
  backupEnabled: string;
  logBackupEnabled: string;
  logBackupEnabledTime: string;
  backupEnabledTime: string;
  retentType: number;
  retention: number;
  lockMode: string;
  relService: string;
  relServiceId: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      DBInstanceStatus: 'DBInstanceStatus',
      DBInstanceStatusDesc: 'DBInstanceStatusDesc',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      crossBackupRegion: 'CrossBackupRegion',
      crossBackupType: 'CrossBackupType',
      backupEnabled: 'BackupEnabled',
      logBackupEnabled: 'LogBackupEnabled',
      logBackupEnabledTime: 'LogBackupEnabledTime',
      backupEnabledTime: 'BackupEnabledTime',
      retentType: 'RetentType',
      retention: 'Retention',
      lockMode: 'LockMode',
      relService: 'RelService',
      relServiceId: 'RelServiceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      DBInstanceStatus: 'string',
      DBInstanceStatusDesc: 'string',
      engine: 'string',
      engineVersion: 'string',
      crossBackupRegion: 'string',
      crossBackupType: 'string',
      backupEnabled: 'string',
      logBackupEnabled: 'string',
      logBackupEnabledTime: 'string',
      backupEnabledTime: 'string',
      retentType: 'number',
      retention: 'number',
      lockMode: 'string',
      relService: 'string',
      relServiceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupDBInstanceResponseItems extends $tea.Model {
  item: DescribeCrossRegionBackupDBInstanceResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeCrossRegionBackupDBInstanceResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupsResponseItemsItemRestoreRegions extends $tea.Model {
  restoreRegion: string[];
  static names(): { [key: string]: string } {
    return {
      restoreRegion: 'RestoreRegion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      restoreRegion: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupsResponseItemsItem extends $tea.Model {
  crossBackupId: number;
  crossBackupRegion: string;
  backupSetStatus: number;
  backupStartTime: string;
  backupEndTime: string;
  backupType: string;
  backupMethod: string;
  crossBackupSetSize: number;
  crossBackupSetFile: string;
  crossBackupDownloadLink: string;
  engine: string;
  engineVersion: string;
  crossBackupSetLocation: string;
  backupSetScale: number;
  instanceId: number;
  DBInstanceStorageType: string;
  category: string;
  consistentTime: string;
  hasBackupTableMeta: string;
  restoreRegions: DescribeCrossRegionBackupsResponseItemsItemRestoreRegions;
  static names(): { [key: string]: string } {
    return {
      crossBackupId: 'CrossBackupId',
      crossBackupRegion: 'CrossBackupRegion',
      backupSetStatus: 'BackupSetStatus',
      backupStartTime: 'BackupStartTime',
      backupEndTime: 'BackupEndTime',
      backupType: 'BackupType',
      backupMethod: 'BackupMethod',
      crossBackupSetSize: 'CrossBackupSetSize',
      crossBackupSetFile: 'CrossBackupSetFile',
      crossBackupDownloadLink: 'CrossBackupDownloadLink',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      crossBackupSetLocation: 'CrossBackupSetLocation',
      backupSetScale: 'BackupSetScale',
      instanceId: 'InstanceId',
      DBInstanceStorageType: 'DBInstanceStorageType',
      category: 'Category',
      consistentTime: 'ConsistentTime',
      hasBackupTableMeta: 'HasBackupTableMeta',
      restoreRegions: 'RestoreRegions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      crossBackupId: 'number',
      crossBackupRegion: 'string',
      backupSetStatus: 'number',
      backupStartTime: 'string',
      backupEndTime: 'string',
      backupType: 'string',
      backupMethod: 'string',
      crossBackupSetSize: 'number',
      crossBackupSetFile: 'string',
      crossBackupDownloadLink: 'string',
      engine: 'string',
      engineVersion: 'string',
      crossBackupSetLocation: 'string',
      backupSetScale: 'number',
      instanceId: 'number',
      DBInstanceStorageType: 'string',
      category: 'string',
      consistentTime: 'string',
      hasBackupTableMeta: 'string',
      restoreRegions: DescribeCrossRegionBackupsResponseItemsItemRestoreRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCrossRegionBackupsResponseItems extends $tea.Model {
  item: DescribeCrossRegionBackupsResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeCrossRegionBackupsResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay extends $tea.Model {
  replayLatency: string;
  flushLag: string;
  flushLatency: string;
  sendLatency: string;
  writeLag: string;
  replayLag: string;
  writeLatency: string;
  readDBInstanceName: string;
  static names(): { [key: string]: string } {
    return {
      replayLatency: 'ReplayLatency',
      flushLag: 'FlushLag',
      flushLatency: 'FlushLatency',
      sendLatency: 'SendLatency',
      writeLag: 'WriteLag',
      replayLag: 'ReplayLag',
      writeLatency: 'WriteLatency',
      readDBInstanceName: 'ReadDBInstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      replayLatency: 'string',
      flushLag: 'string',
      flushLatency: 'string',
      sendLatency: 'string',
      writeLag: 'string',
      replayLag: 'string',
      writeLatency: 'string',
      readDBInstanceName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay extends $tea.Model {
  readonlyInstanceDelay: DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay[];
  static names(): { [key: string]: string } {
    return {
      readonlyInstanceDelay: 'ReadonlyInstanceDelay',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readonlyInstanceDelay: { 'type': 'array', 'itemType': DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames extends $tea.Model {
  readDBInstanceName: string[];
  static names(): { [key: string]: string } {
    return {
      readDBInstanceName: 'ReadDBInstanceName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readDBInstanceName: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes extends $tea.Model {
  readDelayTime: string[];
  static names(): { [key: string]: string } {
    return {
      readDelayTime: 'ReadDelayTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readDelayTime: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItemsItems extends $tea.Model {
  DBInstanceId: string;
  readonlyInstanceDelay: DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay;
  readDBInstanceNames: DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames;
  readDelayTimes: DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      readonlyInstanceDelay: 'ReadonlyInstanceDelay',
      readDBInstanceNames: 'ReadDBInstanceNames',
      readDelayTimes: 'ReadDelayTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      readonlyInstanceDelay: DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay,
      readDBInstanceNames: DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames,
      readDelayTimes: DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeReadDBInstanceDelayResponseItems extends $tea.Model {
  items: DescribeReadDBInstanceDelayResponseItemsItems[];
  static names(): { [key: string]: string } {
    return {
      items: 'Items',
    };
  }

  static types(): { [key: string]: any } {
    return {
      items: { 'type': 'array', 'itemType': DescribeReadDBInstanceDelayResponseItemsItems },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupsResponseParameterGroupsParameterGroup extends $tea.Model {
  parameterGroupType: number;
  parameterGroupName: string;
  paramCounts: number;
  parameterGroupDesc: string;
  forceRestart: number;
  engine: string;
  engineVersion: string;
  createTime: string;
  updateTime: string;
  parameterGroupId: string;
  static names(): { [key: string]: string } {
    return {
      parameterGroupType: 'ParameterGroupType',
      parameterGroupName: 'ParameterGroupName',
      paramCounts: 'ParamCounts',
      parameterGroupDesc: 'ParameterGroupDesc',
      forceRestart: 'ForceRestart',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      parameterGroupId: 'ParameterGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterGroupType: 'number',
      parameterGroupName: 'string',
      paramCounts: 'number',
      parameterGroupDesc: 'string',
      forceRestart: 'number',
      engine: 'string',
      engineVersion: 'string',
      createTime: 'string',
      updateTime: 'string',
      parameterGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupsResponseParameterGroups extends $tea.Model {
  parameterGroup: DescribeParameterGroupsResponseParameterGroupsParameterGroup[];
  static names(): { [key: string]: string } {
    return {
      parameterGroup: 'ParameterGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterGroup: { 'type': 'array', 'itemType': DescribeParameterGroupsResponseParameterGroupsParameterGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail extends $tea.Model {
  paramName: string;
  paramValue: string;
  static names(): { [key: string]: string } {
    return {
      paramName: 'ParamName',
      paramValue: 'ParamValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      paramName: 'string',
      paramValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupResponseParamGroupParameterGroupParamDetail extends $tea.Model {
  parameterDetail: DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail[];
  static names(): { [key: string]: string } {
    return {
      parameterDetail: 'ParameterDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterDetail: { 'type': 'array', 'itemType': DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupResponseParamGroupParameterGroup extends $tea.Model {
  parameterGroupType: number;
  parameterGroupName: string;
  paramCounts: number;
  parameterGroupDesc: string;
  forceRestart: number;
  engine: string;
  engineVersion: string;
  parameterGroupId: string;
  createTime: string;
  updateTime: string;
  paramDetail: DescribeParameterGroupResponseParamGroupParameterGroupParamDetail;
  static names(): { [key: string]: string } {
    return {
      parameterGroupType: 'ParameterGroupType',
      parameterGroupName: 'ParameterGroupName',
      paramCounts: 'ParamCounts',
      parameterGroupDesc: 'ParameterGroupDesc',
      forceRestart: 'ForceRestart',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      parameterGroupId: 'ParameterGroupId',
      createTime: 'CreateTime',
      updateTime: 'UpdateTime',
      paramDetail: 'ParamDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterGroupType: 'number',
      parameterGroupName: 'string',
      paramCounts: 'number',
      parameterGroupDesc: 'string',
      forceRestart: 'number',
      engine: 'string',
      engineVersion: 'string',
      parameterGroupId: 'string',
      createTime: 'string',
      updateTime: 'string',
      paramDetail: DescribeParameterGroupResponseParamGroupParameterGroupParamDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterGroupResponseParamGroup extends $tea.Model {
  parameterGroup: DescribeParameterGroupResponseParamGroupParameterGroup[];
  static names(): { [key: string]: string } {
    return {
      parameterGroup: 'ParameterGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterGroup: { 'type': 'array', 'itemType': DescribeParameterGroupResponseParamGroupParameterGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupFilesResponseItemsBinLogFile extends $tea.Model {
  fileSize: number;
  logBeginTime: string;
  logEndTime: string;
  downloadLink: string;
  intranetDownloadLink: string;
  linkExpiredTime: string;
  static names(): { [key: string]: string } {
    return {
      fileSize: 'FileSize',
      logBeginTime: 'LogBeginTime',
      logEndTime: 'LogEndTime',
      downloadLink: 'DownloadLink',
      intranetDownloadLink: 'IntranetDownloadLink',
      linkExpiredTime: 'LinkExpiredTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSize: 'number',
      logBeginTime: 'string',
      logEndTime: 'string',
      downloadLink: 'string',
      intranetDownloadLink: 'string',
      linkExpiredTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogBackupFilesResponseItems extends $tea.Model {
  binLogFile: DescribeLogBackupFilesResponseItemsBinLogFile[];
  static names(): { [key: string]: string } {
    return {
      binLogFile: 'BinLogFile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      binLogFile: { 'type': 'array', 'itemType': DescribeLogBackupFilesResponseItemsBinLogFile },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone extends $tea.Model {
  timeZone: string;
  standardTimeOffset: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      timeZone: 'TimeZone',
      standardTimeOffset: 'StandardTimeOffset',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeZone: 'string',
      standardTimeOffset: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCollationTimeZonesResponseCollationTimeZones extends $tea.Model {
  collationTimeZone: DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone[];
  static names(): { [key: string]: string } {
    return {
      collationTimeZone: 'CollationTimeZone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      collationTimeZone: { 'type': 'array', 'itemType': DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceKeywordsResponseWords extends $tea.Model {
  word: string[];
  static names(): { [key: string]: string } {
    return {
      word: 'word',
    };
  }

  static types(): { [key: string]: any } {
    return {
      word: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange extends $tea.Model {
  max: number;
  min: number;
  step: number;
  static names(): { [key: string]: string } {
    return {
      max: 'Max',
      min: 'Min',
      step: 'Step',
    };
  }

  static types(): { [key: string]: any } {
    return {
      max: 'number',
      min: 'number',
      step: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource extends $tea.Model {
  DBInstanceClass: string;
  storageRange: string;
  DBInstanceStorageRange: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange;
  static names(): { [key: string]: string } {
    return {
      DBInstanceClass: 'DBInstanceClass',
      storageRange: 'StorageRange',
      DBInstanceStorageRange: 'DBInstanceStorageRange',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceClass: 'string',
      storageRange: 'string',
      DBInstanceStorageRange: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources extends $tea.Model {
  availableResource: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource[];
  static names(): { [key: string]: string } {
    return {
      availableResource: 'AvailableResource',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableResource: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType extends $tea.Model {
  storageType: string;
  availableResources: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources;
  static names(): { [key: string]: string } {
    return {
      storageType: 'StorageType',
      availableResources: 'AvailableResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      storageType: 'string',
      availableResources: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes extends $tea.Model {
  supportedStorageType: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType[];
  static names(): { [key: string]: string } {
    return {
      supportedStorageType: 'SupportedStorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedStorageType: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory extends $tea.Model {
  category: string;
  supportedStorageTypes: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes;
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      supportedStorageTypes: 'SupportedStorageTypes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: 'string',
      supportedStorageTypes: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys extends $tea.Model {
  supportedCategory: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory[];
  static names(): { [key: string]: string } {
    return {
      supportedCategory: 'SupportedCategory',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedCategory: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion extends $tea.Model {
  version: string;
  supportedCategorys: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys;
  static names(): { [key: string]: string } {
    return {
      version: 'Version',
      supportedCategorys: 'SupportedCategorys',
    };
  }

  static types(): { [key: string]: any } {
    return {
      version: 'string',
      supportedCategorys: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions extends $tea.Model {
  supportedEngineVersion: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion[];
  static names(): { [key: string]: string } {
    return {
      supportedEngineVersion: 'SupportedEngineVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedEngineVersion: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine extends $tea.Model {
  engine: string;
  supportedEngineVersions: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions;
  static names(): { [key: string]: string } {
    return {
      engine: 'Engine',
      supportedEngineVersions: 'SupportedEngineVersions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      engine: 'string',
      supportedEngineVersions: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines extends $tea.Model {
  supportedEngine: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine[];
  static names(): { [key: string]: string } {
    return {
      supportedEngine: 'SupportedEngine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedEngine: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZonesAvailableZone extends $tea.Model {
  regionId: string;
  zoneId: string;
  status: string;
  networkTypes: string;
  supportedEngines: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      status: 'Status',
      networkTypes: 'NetworkTypes',
      supportedEngines: 'SupportedEngines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
      status: 'string',
      networkTypes: 'string',
      supportedEngines: DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAvailableResourceResponseAvailableZones extends $tea.Model {
  availableZone: DescribeAvailableResourceResponseAvailableZonesAvailableZone[];
  static names(): { [key: string]: string } {
    return {
      availableZone: 'AvailableZone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableZone: { 'type': 'array', 'itemType': DescribeAvailableResourceResponseAvailableZonesAvailableZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation extends $tea.Model {
  regionId: string;
  securityGroupId: string;
  networkType: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      securityGroupId: 'SecurityGroupId',
      networkType: 'NetworkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      securityGroupId: 'string',
      networkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSecurityGroupConfigurationResponseItems extends $tea.Model {
  ecsSecurityGroupRelation: DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation[];
  static names(): { [key: string]: string } {
    return {
      ecsSecurityGroupRelation: 'EcsSecurityGroupRelation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ecsSecurityGroupRelation: { 'type': 'array', 'itemType': DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation extends $tea.Model {
  regionId: string;
  securityGroupId: string;
  networkType: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      securityGroupId: 'SecurityGroupId',
      networkType: 'NetworkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      securityGroupId: 'string',
      networkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifySecurityGroupConfigurationResponseItems extends $tea.Model {
  ecsSecurityGroupRelation: ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation[];
  static names(): { [key: string]: string } {
    return {
      ecsSecurityGroupRelation: 'EcsSecurityGroupRelation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ecsSecurityGroupRelation: { 'type': 'array', 'itemType': ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsForSQLServerResponseItemsOssDownload extends $tea.Model {
  fileName: string;
  createTime: string;
  bakType: string;
  fileSize: string;
  status: string;
  isAvail: string;
  desc: string;
  static names(): { [key: string]: string } {
    return {
      fileName: 'FileName',
      createTime: 'CreateTime',
      bakType: 'BakType',
      fileSize: 'FileSize',
      status: 'Status',
      isAvail: 'IsAvail',
      desc: 'Desc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileName: 'string',
      createTime: 'string',
      bakType: 'string',
      fileSize: 'string',
      status: 'string',
      isAvail: 'string',
      desc: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsForSQLServerResponseItems extends $tea.Model {
  ossDownload: DescribeOssDownloadsForSQLServerResponseItemsOssDownload[];
  static names(): { [key: string]: string } {
    return {
      ossDownload: 'OssDownload',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ossDownload: { 'type': 'array', 'itemType': DescribeOssDownloadsForSQLServerResponseItemsOssDownload },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksForSQLServerResponseItemsMigrateTask extends $tea.Model {
  DBName: string;
  migrateIaskId: string;
  createTime: string;
  endTime: string;
  taskType: string;
  status: string;
  isDBReplaced: string;
  desc: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      migrateIaskId: 'MigrateIaskId',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      taskType: 'TaskType',
      status: 'Status',
      isDBReplaced: 'IsDBReplaced',
      desc: 'Desc',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      migrateIaskId: 'string',
      createTime: 'string',
      endTime: 'string',
      taskType: 'string',
      status: 'string',
      isDBReplaced: 'string',
      desc: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksForSQLServerResponseItems extends $tea.Model {
  migrateTask: DescribeMigrateTasksForSQLServerResponseItemsMigrateTask[];
  static names(): { [key: string]: string } {
    return {
      migrateTask: 'MigrateTask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      migrateTask: { 'type': 'array', 'itemType': DescribeMigrateTasksForSQLServerResponseItemsMigrateTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsResponseItemsOssDownload extends $tea.Model {
  fileName: string;
  createTime: string;
  endTime: string;
  backupMode: string;
  fileSize: string;
  status: string;
  isAvailable: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      fileName: 'FileName',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      backupMode: 'BackupMode',
      fileSize: 'FileSize',
      status: 'Status',
      isAvailable: 'IsAvailable',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileName: 'string',
      createTime: 'string',
      endTime: 'string',
      backupMode: 'string',
      fileSize: 'string',
      status: 'string',
      isAvailable: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeOssDownloadsResponseItems extends $tea.Model {
  ossDownload: DescribeOssDownloadsResponseItemsOssDownload[];
  static names(): { [key: string]: string } {
    return {
      ossDownload: 'OssDownload',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ossDownload: { 'type': 'array', 'itemType': DescribeOssDownloadsResponseItemsOssDownload },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksResponseItemsMigrateTask extends $tea.Model {
  DBName: string;
  migrateTaskId: string;
  createTime: string;
  endTime: string;
  backupMode: string;
  status: string;
  isDBReplaced: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      migrateTaskId: 'MigrateTaskId',
      createTime: 'CreateTime',
      endTime: 'EndTime',
      backupMode: 'BackupMode',
      status: 'Status',
      isDBReplaced: 'IsDBReplaced',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      migrateTaskId: 'string',
      createTime: 'string',
      endTime: 'string',
      backupMode: 'string',
      status: 'string',
      isDBReplaced: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMigrateTasksResponseItems extends $tea.Model {
  migrateTask: DescribeMigrateTasksResponseItemsMigrateTask[];
  static names(): { [key: string]: string } {
    return {
      migrateTask: 'MigrateTask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      migrateTask: { 'type': 'array', 'itemType': DescribeMigrateTasksResponseItemsMigrateTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesAsCsvResponseItemsDBInstanceAttribute extends $tea.Model {
  DBInstanceId: string;
  payType: string;
  DBInstanceClassType: string;
  DBInstanceType: string;
  regionId: string;
  connectionString: string;
  port: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceMemory: number;
  DBInstanceStorage: number;
  DBInstanceNetType: string;
  DBInstanceStatus: string;
  DBInstanceDescription: string;
  lockMode: string;
  lockReason: string;
  readDelayTime: string;
  DBMaxQuantity: number;
  accountMaxQuantity: number;
  creationTime: string;
  expireTime: string;
  maintainTime: string;
  availabilityValue: string;
  maxIOPS: number;
  maxConnections: number;
  masterInstanceId: string;
  DBInstanceCPU: string;
  incrementSourceDBInstanceId: string;
  guardDBInstanceId: string;
  tempDBInstanceId: string;
  securityIPList: string;
  zoneId: string;
  instanceNetworkType: string;
  category: string;
  accountType: string;
  supportUpgradeAccountType: string;
  vpcId: string;
  VSwitchId: string;
  connectionMode: string;
  tags: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      payType: 'PayType',
      DBInstanceClassType: 'DBInstanceClassType',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      connectionString: 'ConnectionString',
      port: 'Port',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceMemory: 'DBInstanceMemory',
      DBInstanceStorage: 'DBInstanceStorage',
      DBInstanceNetType: 'DBInstanceNetType',
      DBInstanceStatus: 'DBInstanceStatus',
      DBInstanceDescription: 'DBInstanceDescription',
      lockMode: 'LockMode',
      lockReason: 'LockReason',
      readDelayTime: 'ReadDelayTime',
      DBMaxQuantity: 'DBMaxQuantity',
      accountMaxQuantity: 'AccountMaxQuantity',
      creationTime: 'CreationTime',
      expireTime: 'ExpireTime',
      maintainTime: 'MaintainTime',
      availabilityValue: 'AvailabilityValue',
      maxIOPS: 'MaxIOPS',
      maxConnections: 'MaxConnections',
      masterInstanceId: 'MasterInstanceId',
      DBInstanceCPU: 'DBInstanceCPU',
      incrementSourceDBInstanceId: 'IncrementSourceDBInstanceId',
      guardDBInstanceId: 'GuardDBInstanceId',
      tempDBInstanceId: 'TempDBInstanceId',
      securityIPList: 'SecurityIPList',
      zoneId: 'ZoneId',
      instanceNetworkType: 'InstanceNetworkType',
      category: 'Category',
      accountType: 'AccountType',
      supportUpgradeAccountType: 'SupportUpgradeAccountType',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      connectionMode: 'ConnectionMode',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      payType: 'string',
      DBInstanceClassType: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      connectionString: 'string',
      port: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceMemory: 'number',
      DBInstanceStorage: 'number',
      DBInstanceNetType: 'string',
      DBInstanceStatus: 'string',
      DBInstanceDescription: 'string',
      lockMode: 'string',
      lockReason: 'string',
      readDelayTime: 'string',
      DBMaxQuantity: 'number',
      accountMaxQuantity: 'number',
      creationTime: 'string',
      expireTime: 'string',
      maintainTime: 'string',
      availabilityValue: 'string',
      maxIOPS: 'number',
      maxConnections: 'number',
      masterInstanceId: 'string',
      DBInstanceCPU: 'string',
      incrementSourceDBInstanceId: 'string',
      guardDBInstanceId: 'string',
      tempDBInstanceId: 'string',
      securityIPList: 'string',
      zoneId: 'string',
      instanceNetworkType: 'string',
      category: 'string',
      accountType: 'string',
      supportUpgradeAccountType: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      connectionMode: 'string',
      tags: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesAsCsvResponseItems extends $tea.Model {
  DBInstanceAttribute: DescribeDBInstancesAsCsvResponseItemsDBInstanceAttribute[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceAttribute: 'DBInstanceAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceAttribute: { 'type': 'array', 'itemType': DescribeDBInstancesAsCsvResponseItemsDBInstanceAttribute },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponseRulesRule extends $tea.Model {
  ruleId: number;
  name: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'number',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponseRules extends $tea.Model {
  rule: DescribeRenewalPriceResponseRulesRule[];
  static names(): { [key: string]: string } {
    return {
      rule: 'Rule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rule: { 'type': 'array', 'itemType': DescribeRenewalPriceResponseRulesRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponsePriceInfoCouponsCoupon extends $tea.Model {
  couponNo: string;
  name: string;
  description: string;
  isSelected: string;
  static names(): { [key: string]: string } {
    return {
      couponNo: 'CouponNo',
      name: 'Name',
      description: 'Description',
      isSelected: 'IsSelected',
    };
  }

  static types(): { [key: string]: any } {
    return {
      couponNo: 'string',
      name: 'string',
      description: 'string',
      isSelected: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponsePriceInfoCoupons extends $tea.Model {
  coupon: DescribeRenewalPriceResponsePriceInfoCouponsCoupon[];
  static names(): { [key: string]: string } {
    return {
      coupon: 'Coupon',
    };
  }

  static types(): { [key: string]: any } {
    return {
      coupon: { 'type': 'array', 'itemType': DescribeRenewalPriceResponsePriceInfoCouponsCoupon },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponsePriceInfoActivityInfo extends $tea.Model {
  checkErrMsg: string;
  errorCode: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      checkErrMsg: 'CheckErrMsg',
      errorCode: 'ErrorCode',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      checkErrMsg: 'string',
      errorCode: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponsePriceInfoRuleIds extends $tea.Model {
  ruleId: string[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRenewalPriceResponsePriceInfo extends $tea.Model {
  currency: string;
  originalPrice: number;
  tradePrice: number;
  discountPrice: number;
  coupons: DescribeRenewalPriceResponsePriceInfoCoupons;
  activityInfo: DescribeRenewalPriceResponsePriceInfoActivityInfo;
  ruleIds: DescribeRenewalPriceResponsePriceInfoRuleIds;
  static names(): { [key: string]: string } {
    return {
      currency: 'Currency',
      originalPrice: 'OriginalPrice',
      tradePrice: 'TradePrice',
      discountPrice: 'DiscountPrice',
      coupons: 'Coupons',
      activityInfo: 'ActivityInfo',
      ruleIds: 'RuleIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currency: 'string',
      originalPrice: 'number',
      tradePrice: 'number',
      discountPrice: 'number',
      coupons: DescribeRenewalPriceResponsePriceInfoCoupons,
      activityInfo: DescribeRenewalPriceResponsePriceInfoActivityInfo,
      ruleIds: DescribeRenewalPriceResponsePriceInfoRuleIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponseRulesRule extends $tea.Model {
  ruleId: number;
  name: string;
  description: string;
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
      name: 'Name',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: 'number',
      name: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponseRules extends $tea.Model {
  rule: DescribePriceResponseRulesRule[];
  static names(): { [key: string]: string } {
    return {
      rule: 'Rule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      rule: { 'type': 'array', 'itemType': DescribePriceResponseRulesRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponsePriceInfoCouponsCoupon extends $tea.Model {
  couponNo: string;
  name: string;
  description: string;
  isSelected: string;
  static names(): { [key: string]: string } {
    return {
      couponNo: 'CouponNo',
      name: 'Name',
      description: 'Description',
      isSelected: 'IsSelected',
    };
  }

  static types(): { [key: string]: any } {
    return {
      couponNo: 'string',
      name: 'string',
      description: 'string',
      isSelected: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponsePriceInfoCoupons extends $tea.Model {
  coupon: DescribePriceResponsePriceInfoCouponsCoupon[];
  static names(): { [key: string]: string } {
    return {
      coupon: 'Coupon',
    };
  }

  static types(): { [key: string]: any } {
    return {
      coupon: { 'type': 'array', 'itemType': DescribePriceResponsePriceInfoCouponsCoupon },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponsePriceInfoActivityInfo extends $tea.Model {
  checkErrMsg: string;
  errorCode: string;
  success: string;
  static names(): { [key: string]: string } {
    return {
      checkErrMsg: 'CheckErrMsg',
      errorCode: 'ErrorCode',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      checkErrMsg: 'string',
      errorCode: 'string',
      success: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponsePriceInfoRuleIds extends $tea.Model {
  ruleId: string[];
  static names(): { [key: string]: string } {
    return {
      ruleId: 'RuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ruleId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePriceResponsePriceInfo extends $tea.Model {
  currency: string;
  originalPrice: number;
  tradePrice: number;
  discountPrice: number;
  coupons: DescribePriceResponsePriceInfoCoupons;
  activityInfo: DescribePriceResponsePriceInfoActivityInfo;
  ruleIds: DescribePriceResponsePriceInfoRuleIds;
  static names(): { [key: string]: string } {
    return {
      currency: 'Currency',
      originalPrice: 'OriginalPrice',
      tradePrice: 'TradePrice',
      discountPrice: 'DiscountPrice',
      coupons: 'Coupons',
      activityInfo: 'ActivityInfo',
      ruleIds: 'RuleIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      currency: 'string',
      originalPrice: 'number',
      tradePrice: 'number',
      discountPrice: 'number',
      coupons: DescribePriceResponsePriceInfoCoupons,
      activityInfo: DescribePriceResponsePriceInfoActivityInfo,
      ruleIds: DescribePriceResponsePriceInfoRuleIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewalAttributeResponseItemsItem extends $tea.Model {
  DBInstanceId: string;
  regionId: string;
  duration: number;
  status: string;
  autoRenew: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      regionId: 'RegionId',
      duration: 'Duration',
      status: 'Status',
      autoRenew: 'AutoRenew',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      regionId: 'string',
      duration: 'number',
      status: 'string',
      autoRenew: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceAutoRenewalAttributeResponseItems extends $tea.Model {
  item: DescribeInstanceAutoRenewalAttributeResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeInstanceAutoRenewalAttributeResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CalculateDBInstanceWeightResponseItemsDBInstanceWeight extends $tea.Model {
  DBInstanceId: string;
  DBInstanceType: string;
  readonlyInstanceSQLDelayedTime: string;
  availability: string;
  weight: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      DBInstanceType: 'DBInstanceType',
      readonlyInstanceSQLDelayedTime: 'ReadonlyInstanceSQLDelayedTime',
      availability: 'Availability',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      DBInstanceType: 'string',
      readonlyInstanceSQLDelayedTime: 'string',
      availability: 'string',
      weight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CalculateDBInstanceWeightResponseItems extends $tea.Model {
  DBInstanceWeight: CalculateDBInstanceWeightResponseItemsDBInstanceWeight[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceWeight: 'DBInstanceWeight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceWeight: { 'type': 'array', 'itemType': CalculateDBInstanceWeightResponseItemsDBInstanceWeight },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCharacterSetNameResponseCharacterSetNameItems extends $tea.Model {
  characterSetName: string[];
  static names(): { [key: string]: string } {
    return {
      characterSetName: 'CharacterSetName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      characterSetName: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDiagnosticReportListResponseReportList extends $tea.Model {
  diagnosticTime: string;
  score: number;
  startTime: string;
  endTime: string;
  downloadURL: string;
  static names(): { [key: string]: string } {
    return {
      diagnosticTime: 'DiagnosticTime',
      score: 'Score',
      startTime: 'StartTime',
      endTime: 'EndTime',
      downloadURL: 'DownloadURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      diagnosticTime: 'string',
      score: 'number',
      startTime: 'string',
      endTime: 'string',
      downloadURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseItemsTagInfosDBInstanceIds extends $tea.Model {
  DBInstanceIds: string[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceIds: 'DBInstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseItemsTagInfos extends $tea.Model {
  tagKey: string;
  tagValue: string;
  DBInstanceIds: DescribeTagsResponseItemsTagInfosDBInstanceIds;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
      DBInstanceIds: 'DBInstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
      DBInstanceIds: DescribeTagsResponseItemsTagInfosDBInstanceIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseItems extends $tea.Model {
  tagInfos: DescribeTagsResponseItemsTagInfos[];
  static names(): { [key: string]: string } {
    return {
      tagInfos: 'TagInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagInfos: { 'type': 'array', 'itemType': DescribeTagsResponseItemsTagInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag extends $tea.Model {
  tagKey: string;
  tagValue: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags extends $tea.Model {
  tag: DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsResponseItemsDBInstanceTag extends $tea.Model {
  DBInstanceId: string;
  tags: DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      tags: DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceByTagsResponseItems extends $tea.Model {
  DBInstanceTag: DescribeDBInstanceByTagsResponseItemsDBInstanceTag[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceTag: 'DBInstanceTag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceTag: { 'type': 'array', 'itemType': DescribeDBInstanceByTagsResponseItemsDBInstanceTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceTDEResponseDatabasesDatabase extends $tea.Model {
  DBName: string;
  TDEStatus: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      TDEStatus: 'TDEStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      TDEStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceTDEResponseDatabases extends $tea.Model {
  database: DescribeDBInstanceTDEResponseDatabasesDatabase[];
  static names(): { [key: string]: string } {
    return {
      database: 'Database',
    };
  }

  static types(): { [key: string]: any } {
    return {
      database: { 'type': 'array', 'itemType': DescribeDBInstanceTDEResponseDatabasesDatabase },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogFilesResponseItemsLogFile extends $tea.Model {
  fileID: string;
  logStatus: string;
  logDownloadURL: string;
  logSize: string;
  logStartTime: string;
  logEndTime: string;
  static names(): { [key: string]: string } {
    return {
      fileID: 'FileID',
      logStatus: 'LogStatus',
      logDownloadURL: 'LogDownloadURL',
      logSize: 'LogSize',
      logStartTime: 'LogStartTime',
      logEndTime: 'LogEndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileID: 'string',
      logStatus: 'string',
      logDownloadURL: 'string',
      logSize: 'string',
      logStartTime: 'string',
      logEndTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogFilesResponseItems extends $tea.Model {
  logFile: DescribeSQLLogFilesResponseItemsLogFile[];
  static names(): { [key: string]: string } {
    return {
      logFile: 'LogFile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logFile: { 'type': 'array', 'itemType': DescribeSQLLogFilesResponseItemsLogFile },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo extends $tea.Model {
  nodeId: string;
  regionId: string;
  logSyncTime: string;
  dataSyncTime: string;
  nodeType: string;
  zoneId: string;
  syncStatus: string;
  static names(): { [key: string]: string } {
    return {
      nodeId: 'NodeId',
      regionId: 'RegionId',
      logSyncTime: 'LogSyncTime',
      dataSyncTime: 'DataSyncTime',
      nodeType: 'NodeType',
      zoneId: 'ZoneId',
      syncStatus: 'SyncStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeId: 'string',
      regionId: 'string',
      logSyncTime: 'string',
      dataSyncTime: 'string',
      nodeType: 'string',
      zoneId: 'string',
      syncStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceHAConfigResponseHostInstanceInfos extends $tea.Model {
  nodeInfo: DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo[];
  static names(): { [key: string]: string } {
    return {
      nodeInfo: 'NodeInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      nodeInfo: { 'type': 'array', 'itemType': DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem extends $tea.Model {
  SQLText: string;
  avgLatency: number;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      avgLatency: 'AvgLatency',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      avgLatency: 'number',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItemsItemLatencyTopNItems extends $tea.Model {
  latencyTopNItem: DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem[];
  static names(): { [key: string]: string } {
    return {
      latencyTopNItem: 'LatencyTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      latencyTopNItem: { 'type': 'array', 'itemType': DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem extends $tea.Model {
  SQLText: string;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItemsItemQPSTopNItems extends $tea.Model {
  QPSTopNItem: DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem[];
  static names(): { [key: string]: string } {
    return {
      QPSTopNItem: 'QPSTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      QPSTopNItem: { 'type': 'array', 'itemType': DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItemsItem extends $tea.Model {
  reportTime: string;
  latencyTopNItems: DescribeSQLReportsResponseItemsItemLatencyTopNItems;
  QPSTopNItems: DescribeSQLReportsResponseItemsItemQPSTopNItems;
  static names(): { [key: string]: string } {
    return {
      reportTime: 'ReportTime',
      latencyTopNItems: 'LatencyTopNItems',
      QPSTopNItems: 'QPSTopNItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      reportTime: 'string',
      latencyTopNItems: DescribeSQLReportsResponseItemsItemLatencyTopNItems,
      QPSTopNItems: DescribeSQLReportsResponseItemsItemQPSTopNItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLReportsResponseItems extends $tea.Model {
  item: DescribeSQLReportsResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeSQLReportsResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIPArrayListResponseItemsDBInstanceIPArray extends $tea.Model {
  DBInstanceIPArrayName: string;
  DBInstanceIPArrayAttribute: string;
  securityIPType: string;
  securityIPList: string;
  whitelistNetworkType: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceIPArrayName: 'DBInstanceIPArrayName',
      DBInstanceIPArrayAttribute: 'DBInstanceIPArrayAttribute',
      securityIPType: 'SecurityIPType',
      securityIPList: 'SecurityIPList',
      whitelistNetworkType: 'WhitelistNetworkType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceIPArrayName: 'string',
      DBInstanceIPArrayAttribute: 'string',
      securityIPType: 'string',
      securityIPList: 'string',
      whitelistNetworkType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceIPArrayListResponseItems extends $tea.Model {
  DBInstanceIPArray: DescribeDBInstanceIPArrayListResponseItemsDBInstanceIPArray[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceIPArray: 'DBInstanceIPArray',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceIPArray: { 'type': 'array', 'itemType': DescribeDBInstanceIPArrayListResponseItemsDBInstanceIPArray },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem extends $tea.Model {
  SQLText: string;
  avgLatency: number;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      avgLatency: 'AvgLatency',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      avgLatency: 'number',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItemsItemLatencyTopNItems extends $tea.Model {
  latencyTopNItem: DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem[];
  static names(): { [key: string]: string } {
    return {
      latencyTopNItem: 'LatencyTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      latencyTopNItem: { 'type': 'array', 'itemType': DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem extends $tea.Model {
  SQLText: string;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItemsItemQPSTopNItems extends $tea.Model {
  QPSTopNItem: DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem[];
  static names(): { [key: string]: string } {
    return {
      QPSTopNItem: 'QPSTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      QPSTopNItem: { 'type': 'array', 'itemType': DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItemsItem extends $tea.Model {
  reportTime: string;
  latencyTopNItems: DescribeSQLLogReportListResponseItemsItemLatencyTopNItems;
  QPSTopNItems: DescribeSQLLogReportListResponseItemsItemQPSTopNItems;
  static names(): { [key: string]: string } {
    return {
      reportTime: 'ReportTime',
      latencyTopNItems: 'LatencyTopNItems',
      QPSTopNItems: 'QPSTopNItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      reportTime: 'string',
      latencyTopNItems: DescribeSQLLogReportListResponseItemsItemLatencyTopNItems,
      QPSTopNItems: DescribeSQLLogReportListResponseItemsItemQPSTopNItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportListResponseItems extends $tea.Model {
  item: DescribeSQLLogReportListResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeSQLLogReportListResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsFromResourceRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class DescribeTasksResponseItemsTaskProgressInfo extends $tea.Model {
  DBName: string;
  beginTime: string;
  progressInfo: string;
  finishTime: string;
  taskAction: string;
  taskId: string;
  progress: string;
  expectedFinishTime: string;
  status: string;
  taskErrorCode: string;
  taskErrorMessage: string;
  stepsInfo: string;
  remain: number;
  stepProgressInfo: string;
  currentStepName: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      beginTime: 'BeginTime',
      progressInfo: 'ProgressInfo',
      finishTime: 'FinishTime',
      taskAction: 'TaskAction',
      taskId: 'TaskId',
      progress: 'Progress',
      expectedFinishTime: 'ExpectedFinishTime',
      status: 'Status',
      taskErrorCode: 'TaskErrorCode',
      taskErrorMessage: 'TaskErrorMessage',
      stepsInfo: 'StepsInfo',
      remain: 'Remain',
      stepProgressInfo: 'StepProgressInfo',
      currentStepName: 'CurrentStepName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      beginTime: 'string',
      progressInfo: 'string',
      finishTime: 'string',
      taskAction: 'string',
      taskId: 'string',
      progress: 'string',
      expectedFinishTime: 'string',
      status: 'string',
      taskErrorCode: 'string',
      taskErrorMessage: 'string',
      stepsInfo: 'string',
      remain: 'number',
      stepProgressInfo: 'string',
      currentStepName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTasksResponseItems extends $tea.Model {
  taskProgressInfo: DescribeTasksResponseItemsTaskProgressInfo[];
  static names(): { [key: string]: string } {
    return {
      taskProgressInfo: 'TaskProgressInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskProgressInfo: { 'type': 'array', 'itemType': DescribeTasksResponseItemsTaskProgressInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem extends $tea.Model {
  SQLText: string;
  avgLatency: number;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      avgLatency: 'AvgLatency',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      avgLatency: 'number',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItemsItemLatencyTopNItems extends $tea.Model {
  latencyTopNItem: DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem[];
  static names(): { [key: string]: string } {
    return {
      latencyTopNItem: 'LatencyTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      latencyTopNItem: { 'type': 'array', 'itemType': DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem extends $tea.Model {
  SQLText: string;
  SQLExecuteTimes: number;
  static names(): { [key: string]: string } {
    return {
      SQLText: 'SQLText',
      SQLExecuteTimes: 'SQLExecuteTimes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLText: 'string',
      SQLExecuteTimes: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItemsItemQPSTopNItems extends $tea.Model {
  QPSTopNItem: DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem[];
  static names(): { [key: string]: string } {
    return {
      QPSTopNItem: 'QPSTopNItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      QPSTopNItem: { 'type': 'array', 'itemType': DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItemsItem extends $tea.Model {
  reportTime: string;
  latencyTopNItems: DescribeSQLLogReportsResponseItemsItemLatencyTopNItems;
  QPSTopNItems: DescribeSQLLogReportsResponseItemsItemQPSTopNItems;
  static names(): { [key: string]: string } {
    return {
      reportTime: 'ReportTime',
      latencyTopNItems: 'LatencyTopNItems',
      QPSTopNItems: 'QPSTopNItems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      reportTime: 'string',
      latencyTopNItems: DescribeSQLLogReportsResponseItemsItemLatencyTopNItems,
      QPSTopNItems: DescribeSQLLogReportsResponseItemsItemQPSTopNItems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogReportsResponseItems extends $tea.Model {
  item: DescribeSQLLogReportsResponseItemsItem[];
  static names(): { [key: string]: string } {
    return {
      item: 'Item',
    };
  }

  static types(): { [key: string]: any } {
    return {
      item: { 'type': 'array', 'itemType': DescribeSQLLogReportsResponseItemsItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogRecordsResponseItemsSQLRecord extends $tea.Model {
  DBName: string;
  accountName: string;
  hostAddress: string;
  SQLText: string;
  totalExecutionTimes: number;
  returnRowCounts: number;
  executeTime: string;
  threadID: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      accountName: 'AccountName',
      hostAddress: 'HostAddress',
      SQLText: 'SQLText',
      totalExecutionTimes: 'TotalExecutionTimes',
      returnRowCounts: 'ReturnRowCounts',
      executeTime: 'ExecuteTime',
      threadID: 'ThreadID',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      accountName: 'string',
      hostAddress: 'string',
      SQLText: 'string',
      totalExecutionTimes: 'number',
      returnRowCounts: 'number',
      executeTime: 'string',
      threadID: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSQLLogRecordsResponseItems extends $tea.Model {
  SQLRecord: DescribeSQLLogRecordsResponseItemsSQLRecord[];
  static names(): { [key: string]: string } {
    return {
      SQLRecord: 'SQLRecord',
    };
  }

  static types(): { [key: string]: any } {
    return {
      SQLRecord: { 'type': 'array', 'itemType': DescribeSQLLogRecordsResponseItemsSQLRecord },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSlowLogsResponseItemsSQLSlowLog extends $tea.Model {
  slowLogId: number;
  SQLHASH: string;
  SQLIdStr: string;
  DBName: string;
  SQLText: string;
  mySQLTotalExecutionCounts: number;
  mySQLTotalExecutionTimes: number;
  totalLockTimes: number;
  maxLockTime: number;
  parseTotalRowCounts: number;
  parseMaxRowCount: number;
  returnTotalRowCounts: number;
  returnMaxRowCount: number;
  createTime: string;
  SQLServerTotalExecutionCounts: number;
  SQLServerTotalExecutionTimes: number;
  totalLogicalReadCounts: number;
  totalPhysicalReadCounts: number;
  reportTime: string;
  maxExecutionTime: number;
  avgExecutionTime: number;
  static names(): { [key: string]: string } {
    return {
      slowLogId: 'SlowLogId',
      SQLHASH: 'SQLHASH',
      SQLIdStr: 'SQLIdStr',
      DBName: 'DBName',
      SQLText: 'SQLText',
      mySQLTotalExecutionCounts: 'MySQLTotalExecutionCounts',
      mySQLTotalExecutionTimes: 'MySQLTotalExecutionTimes',
      totalLockTimes: 'TotalLockTimes',
      maxLockTime: 'MaxLockTime',
      parseTotalRowCounts: 'ParseTotalRowCounts',
      parseMaxRowCount: 'ParseMaxRowCount',
      returnTotalRowCounts: 'ReturnTotalRowCounts',
      returnMaxRowCount: 'ReturnMaxRowCount',
      createTime: 'CreateTime',
      SQLServerTotalExecutionCounts: 'SQLServerTotalExecutionCounts',
      SQLServerTotalExecutionTimes: 'SQLServerTotalExecutionTimes',
      totalLogicalReadCounts: 'TotalLogicalReadCounts',
      totalPhysicalReadCounts: 'TotalPhysicalReadCounts',
      reportTime: 'ReportTime',
      maxExecutionTime: 'MaxExecutionTime',
      avgExecutionTime: 'AvgExecutionTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      slowLogId: 'number',
      SQLHASH: 'string',
      SQLIdStr: 'string',
      DBName: 'string',
      SQLText: 'string',
      mySQLTotalExecutionCounts: 'number',
      mySQLTotalExecutionTimes: 'number',
      totalLockTimes: 'number',
      maxLockTime: 'number',
      parseTotalRowCounts: 'number',
      parseMaxRowCount: 'number',
      returnTotalRowCounts: 'number',
      returnMaxRowCount: 'number',
      createTime: 'string',
      SQLServerTotalExecutionCounts: 'number',
      SQLServerTotalExecutionTimes: 'number',
      totalLogicalReadCounts: 'number',
      totalPhysicalReadCounts: 'number',
      reportTime: 'string',
      maxExecutionTime: 'number',
      avgExecutionTime: 'number',
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
  queryTimeMS: number;
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
      queryTimeMS: 'QueryTimeMS',
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
      queryTimeMS: 'number',
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

export class DescribeRegionsResponseRegionsRDSRegion extends $tea.Model {
  regionId: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  RDSRegion: DescribeRegionsResponseRegionsRDSRegion[];
  static names(): { [key: string]: string } {
    return {
      RDSRegion: 'RDSRegion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      RDSRegion: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRDSRegion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterTemplatesResponseParametersTemplateRecord extends $tea.Model {
  parameterName: string;
  parameterValue: string;
  forceModify: string;
  forceRestart: string;
  checkingCode: string;
  parameterDescription: string;
  static names(): { [key: string]: string } {
    return {
      parameterName: 'ParameterName',
      parameterValue: 'ParameterValue',
      forceModify: 'ForceModify',
      forceRestart: 'ForceRestart',
      checkingCode: 'CheckingCode',
      parameterDescription: 'ParameterDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterName: 'string',
      parameterValue: 'string',
      forceModify: 'string',
      forceRestart: 'string',
      checkingCode: 'string',
      parameterDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParameterTemplatesResponseParameters extends $tea.Model {
  templateRecord: DescribeParameterTemplatesResponseParametersTemplateRecord[];
  static names(): { [key: string]: string } {
    return {
      templateRecord: 'TemplateRecord',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateRecord: { 'type': 'array', 'itemType': DescribeParameterTemplatesResponseParametersTemplateRecord },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersResponseConfigParametersDBInstanceParameter extends $tea.Model {
  parameterName: string;
  parameterValue: string;
  parameterDescription: string;
  static names(): { [key: string]: string } {
    return {
      parameterName: 'ParameterName',
      parameterValue: 'ParameterValue',
      parameterDescription: 'ParameterDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterName: 'string',
      parameterValue: 'string',
      parameterDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersResponseConfigParameters extends $tea.Model {
  DBInstanceParameter: DescribeParametersResponseConfigParametersDBInstanceParameter[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceParameter: 'DBInstanceParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceParameter: { 'type': 'array', 'itemType': DescribeParametersResponseConfigParametersDBInstanceParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersResponseRunningParametersDBInstanceParameter extends $tea.Model {
  parameterName: string;
  parameterValue: string;
  parameterDescription: string;
  static names(): { [key: string]: string } {
    return {
      parameterName: 'ParameterName',
      parameterValue: 'ParameterValue',
      parameterDescription: 'ParameterDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterName: 'string',
      parameterValue: 'string',
      parameterDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeParametersResponseRunningParameters extends $tea.Model {
  DBInstanceParameter: DescribeParametersResponseRunningParametersDBInstanceParameter[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceParameter: 'DBInstanceParameter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceParameter: { 'type': 'array', 'itemType': DescribeParametersResponseRunningParametersDBInstanceParameter },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeModifyParameterLogResponseItemsParameterChangeLog extends $tea.Model {
  modifyTime: string;
  oldParameterValue: string;
  newParameterValue: string;
  parameterName: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      modifyTime: 'ModifyTime',
      oldParameterValue: 'OldParameterValue',
      newParameterValue: 'NewParameterValue',
      parameterName: 'ParameterName',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      modifyTime: 'string',
      oldParameterValue: 'string',
      newParameterValue: 'string',
      parameterName: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeModifyParameterLogResponseItems extends $tea.Model {
  parameterChangeLog: DescribeModifyParameterLogResponseItemsParameterChangeLog[];
  static names(): { [key: string]: string } {
    return {
      parameterChangeLog: 'ParameterChangeLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      parameterChangeLog: { 'type': 'array', 'itemType': DescribeModifyParameterLogResponseItemsParameterChangeLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeErrorLogsResponseItemsErrorLog extends $tea.Model {
  errorInfo: string;
  createTime: string;
  static names(): { [key: string]: string } {
    return {
      errorInfo: 'ErrorInfo',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      errorInfo: 'string',
      createTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeErrorLogsResponseItems extends $tea.Model {
  errorLog: DescribeErrorLogsResponseItemsErrorLog[];
  static names(): { [key: string]: string } {
    return {
      errorLog: 'ErrorLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      errorLog: { 'type': 'array', 'itemType': DescribeErrorLogsResponseItemsErrorLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey extends $tea.Model {
  key: string;
  unit: string;
  valueFormat: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      unit: 'Unit',
      valueFormat: 'ValueFormat',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      unit: 'string',
      valueFormat: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancePerformanceResponsePerformanceKeys extends $tea.Model {
  performanceKey: DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey[];
  static names(): { [key: string]: string } {
    return {
      performanceKey: 'PerformanceKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      performanceKey: { 'type': 'array', 'itemType': DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo extends $tea.Model {
  account: string;
  accountPrivilege: string;
  accountPrivilegeDetail: string;
  static names(): { [key: string]: string } {
    return {
      account: 'Account',
      accountPrivilege: 'AccountPrivilege',
      accountPrivilegeDetail: 'AccountPrivilegeDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      account: 'string',
      accountPrivilege: 'string',
      accountPrivilegeDetail: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabaseAccounts extends $tea.Model {
  accountPrivilegeInfo: DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo[];
  static names(): { [key: string]: string } {
    return {
      accountPrivilegeInfo: 'AccountPrivilegeInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accountPrivilegeInfo: { 'type': 'array', 'itemType': DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDatabasesResponseDatabasesDatabase extends $tea.Model {
  DBName: string;
  DBInstanceId: string;
  engine: string;
  DBStatus: string;
  characterSetName: string;
  DBDescription: string;
  accounts: DescribeDatabasesResponseDatabasesDatabaseAccounts;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      DBInstanceId: 'DBInstanceId',
      engine: 'Engine',
      DBStatus: 'DBStatus',
      characterSetName: 'CharacterSetName',
      DBDescription: 'DBDescription',
      accounts: 'Accounts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      DBInstanceId: 'string',
      engine: 'string',
      DBStatus: 'string',
      characterSetName: 'string',
      DBDescription: 'string',
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

export class DescribeBinlogFilesResponseItemsBinLogFile extends $tea.Model {
  fileSize: number;
  logBeginTime: string;
  logEndTime: string;
  downloadLink: string;
  intranetDownloadLink: string;
  linkExpiredTime: string;
  checksum: string;
  hostInstanceID: string;
  logFileName: string;
  static names(): { [key: string]: string } {
    return {
      fileSize: 'FileSize',
      logBeginTime: 'LogBeginTime',
      logEndTime: 'LogEndTime',
      downloadLink: 'DownloadLink',
      intranetDownloadLink: 'IntranetDownloadLink',
      linkExpiredTime: 'LinkExpiredTime',
      checksum: 'Checksum',
      hostInstanceID: 'HostInstanceID',
      logFileName: 'LogFileName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSize: 'number',
      logBeginTime: 'string',
      logEndTime: 'string',
      downloadLink: 'string',
      intranetDownloadLink: 'string',
      linkExpiredTime: 'string',
      checksum: 'string',
      hostInstanceID: 'string',
      logFileName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBinlogFilesResponseItems extends $tea.Model {
  binLogFile: DescribeBinlogFilesResponseItemsBinLogFile[];
  static names(): { [key: string]: string } {
    return {
      binLogFile: 'BinLogFile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      binLogFile: { 'type': 'array', 'itemType': DescribeBinlogFilesResponseItemsBinLogFile },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupTasksResponseItemsBackupJob extends $tea.Model {
  backupProgressStatus: string;
  backupStatus: string;
  jobMode: string;
  process: string;
  taskAction: string;
  backupJobId: string;
  backupId: string;
  static names(): { [key: string]: string } {
    return {
      backupProgressStatus: 'BackupProgressStatus',
      backupStatus: 'BackupStatus',
      jobMode: 'JobMode',
      process: 'Process',
      taskAction: 'TaskAction',
      backupJobId: 'BackupJobId',
      backupId: 'BackupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupProgressStatus: 'string',
      backupStatus: 'string',
      jobMode: 'string',
      process: 'string',
      taskAction: 'string',
      backupJobId: 'string',
      backupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupTasksResponseItems extends $tea.Model {
  backupJob: DescribeBackupTasksResponseItemsBackupJob[];
  static names(): { [key: string]: string } {
    return {
      backupJob: 'BackupJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupJob: { 'type': 'array', 'itemType': DescribeBackupTasksResponseItemsBackupJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupsResponseItemsBackup extends $tea.Model {
  backupId: string;
  DBInstanceId: string;
  backupStatus: string;
  backupStartTime: string;
  backupEndTime: string;
  backupType: string;
  backupMode: string;
  backupMethod: string;
  backupDownloadURL: string;
  backupIntranetDownloadURL: string;
  backupLocation: string;
  backupExtractionStatus: string;
  backupScale: string;
  backupDBNames: string;
  totalBackupSize: number;
  backupSize: number;
  hostInstanceID: string;
  storeStatus: string;
  metaStatus: string;
  slaveStatus: string;
  consistentTime: number;
  backupInitiator: string;
  copyOnlyBackup: string;
  storageClass: string;
  static names(): { [key: string]: string } {
    return {
      backupId: 'BackupId',
      DBInstanceId: 'DBInstanceId',
      backupStatus: 'BackupStatus',
      backupStartTime: 'BackupStartTime',
      backupEndTime: 'BackupEndTime',
      backupType: 'BackupType',
      backupMode: 'BackupMode',
      backupMethod: 'BackupMethod',
      backupDownloadURL: 'BackupDownloadURL',
      backupIntranetDownloadURL: 'BackupIntranetDownloadURL',
      backupLocation: 'BackupLocation',
      backupExtractionStatus: 'BackupExtractionStatus',
      backupScale: 'BackupScale',
      backupDBNames: 'BackupDBNames',
      totalBackupSize: 'TotalBackupSize',
      backupSize: 'BackupSize',
      hostInstanceID: 'HostInstanceID',
      storeStatus: 'StoreStatus',
      metaStatus: 'MetaStatus',
      slaveStatus: 'SlaveStatus',
      consistentTime: 'ConsistentTime',
      backupInitiator: 'BackupInitiator',
      copyOnlyBackup: 'CopyOnlyBackup',
      storageClass: 'StorageClass',
    };
  }

  static types(): { [key: string]: any } {
    return {
      backupId: 'string',
      DBInstanceId: 'string',
      backupStatus: 'string',
      backupStartTime: 'string',
      backupEndTime: 'string',
      backupType: 'string',
      backupMode: 'string',
      backupMethod: 'string',
      backupDownloadURL: 'string',
      backupIntranetDownloadURL: 'string',
      backupLocation: 'string',
      backupExtractionStatus: 'string',
      backupScale: 'string',
      backupDBNames: 'string',
      totalBackupSize: 'number',
      backupSize: 'number',
      hostInstanceID: 'string',
      storeStatus: 'string',
      metaStatus: 'string',
      slaveStatus: 'string',
      consistentTime: 'number',
      backupInitiator: 'string',
      copyOnlyBackup: 'string',
      storageClass: 'string',
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

export class DescribeBackupPolicyResponseDuplicationLocationLocation extends $tea.Model {
  endpoint: string;
  bucket: string;
  static names(): { [key: string]: string } {
    return {
      endpoint: 'Endpoint',
      bucket: 'Bucket',
    };
  }

  static types(): { [key: string]: any } {
    return {
      endpoint: 'string',
      bucket: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBackupPolicyResponseDuplicationLocation extends $tea.Model {
  sotrage: string;
  location: DescribeBackupPolicyResponseDuplicationLocationLocation;
  static names(): { [key: string]: string } {
    return {
      sotrage: 'Sotrage',
      location: 'Location',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sotrage: 'string',
      location: DescribeBackupPolicyResponseDuplicationLocationLocation,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege extends $tea.Model {
  DBName: string;
  accountPrivilege: string;
  accountPrivilegeDetail: string;
  static names(): { [key: string]: string } {
    return {
      DBName: 'DBName',
      accountPrivilege: 'AccountPrivilege',
      accountPrivilegeDetail: 'AccountPrivilegeDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBName: 'string',
      accountPrivilege: 'string',
      accountPrivilegeDetail: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges extends $tea.Model {
  databasePrivilege: DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege[];
  static names(): { [key: string]: string } {
    return {
      databasePrivilege: 'DatabasePrivilege',
    };
  }

  static types(): { [key: string]: any } {
    return {
      databasePrivilege: { 'type': 'array', 'itemType': DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccountsDBInstanceAccount extends $tea.Model {
  DBInstanceId: string;
  accountName: string;
  accountStatus: string;
  accountType: string;
  accountDescription: string;
  privExceeded: string;
  databasePrivileges: DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      accountName: 'AccountName',
      accountStatus: 'AccountStatus',
      accountType: 'AccountType',
      accountDescription: 'AccountDescription',
      privExceeded: 'PrivExceeded',
      databasePrivileges: 'DatabasePrivileges',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      accountName: 'string',
      accountStatus: 'string',
      accountType: 'string',
      accountDescription: 'string',
      privExceeded: 'string',
      databasePrivileges: DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccountsResponseAccounts extends $tea.Model {
  DBInstanceAccount: DescribeAccountsResponseAccountsDBInstanceAccount[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceAccount: 'DBInstanceAccount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceAccount: { 'type': 'array', 'itemType': DescribeAccountsResponseAccountsDBInstanceAccount },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescibeImportsFromDatabaseResponseItemsImportResultFromDB extends $tea.Model {
  importId: number;
  importDataType: string;
  importDataStatus: string;
  importDataStatusDescription: string;
  incrementalImportingTime: string;
  static names(): { [key: string]: string } {
    return {
      importId: 'ImportId',
      importDataType: 'ImportDataType',
      importDataStatus: 'ImportDataStatus',
      importDataStatusDescription: 'ImportDataStatusDescription',
      incrementalImportingTime: 'IncrementalImportingTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      importId: 'number',
      importDataType: 'string',
      importDataStatus: 'string',
      importDataStatusDescription: 'string',
      incrementalImportingTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescibeImportsFromDatabaseResponseItems extends $tea.Model {
  importResultFromDB: DescibeImportsFromDatabaseResponseItemsImportResultFromDB[];
  static names(): { [key: string]: string } {
    return {
      importResultFromDB: 'ImportResultFromDB',
    };
  }

  static types(): { [key: string]: any } {
    return {
      importResultFromDB: { 'type': 'array', 'itemType': DescibeImportsFromDatabaseResponseItemsImportResultFromDB },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsToResourceRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup extends $tea.Model {
  securityIPGroupName: string;
  securityIPs: string;
  static names(): { [key: string]: string } {
    return {
      securityIPGroupName: 'SecurityIPGroupName',
      securityIPs: 'SecurityIPs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityIPGroupName: 'string',
      securityIPs: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups extends $tea.Model {
  securityIPGroup: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup[];
  static names(): { [key: string]: string } {
    return {
      securityIPGroup: 'securityIPGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityIPGroup: { 'type': 'array', 'itemType': DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight extends $tea.Model {
  DBInstanceId: string;
  DBInstanceType: string;
  availability: string;
  weight: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      DBInstanceType: 'DBInstanceType',
      availability: 'Availability',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      DBInstanceType: 'string',
      availability: 'string',
      weight: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights extends $tea.Model {
  DBInstanceWeight: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceWeight: 'DBInstanceWeight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceWeight: { 'type': 'array', 'itemType': DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo extends $tea.Model {
  upgradeable: string;
  expiredTime: string;
  connectionString: string;
  IPAddress: string;
  IPType: string;
  port: string;
  VPCId: string;
  VSwitchId: string;
  connectionStringType: string;
  maxDelayTime: string;
  distributionType: string;
  securityIPGroups: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups;
  DBInstanceWeights: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights;
  static names(): { [key: string]: string } {
    return {
      upgradeable: 'Upgradeable',
      expiredTime: 'ExpiredTime',
      connectionString: 'ConnectionString',
      IPAddress: 'IPAddress',
      IPType: 'IPType',
      port: 'Port',
      VPCId: 'VPCId',
      VSwitchId: 'VSwitchId',
      connectionStringType: 'ConnectionStringType',
      maxDelayTime: 'MaxDelayTime',
      distributionType: 'DistributionType',
      securityIPGroups: 'SecurityIPGroups',
      DBInstanceWeights: 'DBInstanceWeights',
    };
  }

  static types(): { [key: string]: any } {
    return {
      upgradeable: 'string',
      expiredTime: 'string',
      connectionString: 'string',
      IPAddress: 'string',
      IPType: 'string',
      port: 'string',
      VPCId: 'string',
      VSwitchId: 'string',
      connectionStringType: 'string',
      maxDelayTime: 'string',
      distributionType: 'string',
      securityIPGroups: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups,
      DBInstanceWeights: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceNetInfoResponseDBInstanceNetInfos extends $tea.Model {
  DBInstanceNetInfo: DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceNetInfo: 'DBInstanceNetInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceNetInfo: { 'type': 'array', 'itemType': DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByPerformanceRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'key',
      value: 'value',
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

export class DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance extends $tea.Model {
  CPUUsage: string;
  IOPSUsage: string;
  diskUsage: string;
  sessionUsage: string;
  DBInstanceId: string;
  DBInstanceDescription: string;
  static names(): { [key: string]: string } {
    return {
      CPUUsage: 'CPUUsage',
      IOPSUsage: 'IOPSUsage',
      diskUsage: 'DiskUsage',
      sessionUsage: 'SessionUsage',
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
    };
  }

  static types(): { [key: string]: any } {
    return {
      CPUUsage: 'string',
      IOPSUsage: 'string',
      diskUsage: 'string',
      sessionUsage: 'string',
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByPerformanceResponseItems extends $tea.Model {
  DBInstancePerformance: DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance[];
  static names(): { [key: string]: string } {
    return {
      DBInstancePerformance: 'DBInstancePerformance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstancePerformance: { 'type': 'array', 'itemType': DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime extends $tea.Model {
  DBInstanceId: string;
  DBInstanceDescription: string;
  expireTime: string;
  DBInstanceStatus: string;
  lockMode: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      expireTime: 'ExpireTime',
      DBInstanceStatus: 'DBInstanceStatus',
      lockMode: 'LockMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      expireTime: 'string',
      DBInstanceStatus: 'string',
      lockMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesByExpireTimeResponseItems extends $tea.Model {
  DBInstanceExpireTime: DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceExpireTime: 'DBInstanceExpireTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceExpireTime: { 'type': 'array', 'itemType': DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId extends $tea.Model {
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIds extends $tea.Model {
  readOnlyDBInstanceId: DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId[];
  static names(): { [key: string]: string } {
    return {
      readOnlyDBInstanceId: 'ReadOnlyDBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyDBInstanceId: { 'type': 'array', 'itemType': DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesResponseItemsDBInstance extends $tea.Model {
  insId: number;
  DBInstanceId: string;
  DBInstanceDescription: string;
  payType: string;
  DBInstanceType: string;
  regionId: string;
  expireTime: string;
  destroyTime: string;
  DBInstanceStatus: string;
  engine: string;
  DBInstanceNetType: string;
  connectionMode: string;
  lockMode: string;
  category: string;
  DBInstanceStorageType: string;
  DBInstanceClass: string;
  instanceNetworkType: string;
  vpcCloudInstanceId: string;
  lockReason: string;
  zoneId: string;
  mutriORsignle: boolean;
  createTime: string;
  engineVersion: string;
  guardDBInstanceId: string;
  tempDBInstanceId: string;
  masterInstanceId: string;
  vpcId: string;
  VSwitchId: string;
  replicateId: string;
  resourceGroupId: string;
  autoUpgradeMinorVersion: string;
  dedicatedHostGroupId: string;
  dedicatedHostIdForMaster: string;
  dedicatedHostIdForSlave: string;
  dedicatedHostIdForLog: string;
  dedicatedHostNameForMaster: string;
  dedicatedHostNameForSlave: string;
  dedicatedHostNameForLog: string;
  dedicatedHostZoneIdForMaster: string;
  dedicatedHostZoneIdForSlave: string;
  dedicatedHostZoneIdForLog: string;
  readOnlyDBInstanceIds: DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIds;
  static names(): { [key: string]: string } {
    return {
      insId: 'InsId',
      DBInstanceId: 'DBInstanceId',
      DBInstanceDescription: 'DBInstanceDescription',
      payType: 'PayType',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      expireTime: 'ExpireTime',
      destroyTime: 'DestroyTime',
      DBInstanceStatus: 'DBInstanceStatus',
      engine: 'Engine',
      DBInstanceNetType: 'DBInstanceNetType',
      connectionMode: 'ConnectionMode',
      lockMode: 'LockMode',
      category: 'Category',
      DBInstanceStorageType: 'DBInstanceStorageType',
      DBInstanceClass: 'DBInstanceClass',
      instanceNetworkType: 'InstanceNetworkType',
      vpcCloudInstanceId: 'VpcCloudInstanceId',
      lockReason: 'LockReason',
      zoneId: 'ZoneId',
      mutriORsignle: 'MutriORsignle',
      createTime: 'CreateTime',
      engineVersion: 'EngineVersion',
      guardDBInstanceId: 'GuardDBInstanceId',
      tempDBInstanceId: 'TempDBInstanceId',
      masterInstanceId: 'MasterInstanceId',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      replicateId: 'ReplicateId',
      resourceGroupId: 'ResourceGroupId',
      autoUpgradeMinorVersion: 'AutoUpgradeMinorVersion',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      dedicatedHostIdForMaster: 'DedicatedHostIdForMaster',
      dedicatedHostIdForSlave: 'DedicatedHostIdForSlave',
      dedicatedHostIdForLog: 'DedicatedHostIdForLog',
      dedicatedHostNameForMaster: 'DedicatedHostNameForMaster',
      dedicatedHostNameForSlave: 'DedicatedHostNameForSlave',
      dedicatedHostNameForLog: 'DedicatedHostNameForLog',
      dedicatedHostZoneIdForMaster: 'DedicatedHostZoneIdForMaster',
      dedicatedHostZoneIdForSlave: 'DedicatedHostZoneIdForSlave',
      dedicatedHostZoneIdForLog: 'DedicatedHostZoneIdForLog',
      readOnlyDBInstanceIds: 'ReadOnlyDBInstanceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      insId: 'number',
      DBInstanceId: 'string',
      DBInstanceDescription: 'string',
      payType: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      expireTime: 'string',
      destroyTime: 'string',
      DBInstanceStatus: 'string',
      engine: 'string',
      DBInstanceNetType: 'string',
      connectionMode: 'string',
      lockMode: 'string',
      category: 'string',
      DBInstanceStorageType: 'string',
      DBInstanceClass: 'string',
      instanceNetworkType: 'string',
      vpcCloudInstanceId: 'string',
      lockReason: 'string',
      zoneId: 'string',
      mutriORsignle: 'boolean',
      createTime: 'string',
      engineVersion: 'string',
      guardDBInstanceId: 'string',
      tempDBInstanceId: 'string',
      masterInstanceId: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      replicateId: 'string',
      resourceGroupId: 'string',
      autoUpgradeMinorVersion: 'string',
      dedicatedHostGroupId: 'string',
      dedicatedHostIdForMaster: 'string',
      dedicatedHostIdForSlave: 'string',
      dedicatedHostIdForLog: 'string',
      dedicatedHostNameForMaster: 'string',
      dedicatedHostNameForSlave: 'string',
      dedicatedHostNameForLog: 'string',
      dedicatedHostZoneIdForMaster: 'string',
      dedicatedHostZoneIdForSlave: 'string',
      dedicatedHostZoneIdForLog: 'string',
      readOnlyDBInstanceIds: DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstancesResponseItems extends $tea.Model {
  DBInstance: DescribeDBInstancesResponseItemsDBInstance[];
  static names(): { [key: string]: string } {
    return {
      DBInstance: 'DBInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstance: { 'type': 'array', 'itemType': DescribeDBInstancesResponseItemsDBInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone extends $tea.Model {
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones extends $tea.Model {
  slaveZone: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone[];
  static names(): { [key: string]: string } {
    return {
      slaveZone: 'SlaveZone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      slaveZone: { 'type': 'array', 'itemType': DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId extends $tea.Model {
  DBInstanceId: string;
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds extends $tea.Model {
  readOnlyDBInstanceId: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId[];
  static names(): { [key: string]: string } {
    return {
      readOnlyDBInstanceId: 'ReadOnlyDBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      readOnlyDBInstanceId: { 'type': 'array', 'itemType': DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId extends $tea.Model {
  DBInstanceId: string[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra extends $tea.Model {
  replicaGroupID: string;
  replicaGroupStatus: string;
  activeReplicaDBInstanceID: string;
  DBInstanceId: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId;
  static names(): { [key: string]: string } {
    return {
      replicaGroupID: 'ReplicaGroupID',
      replicaGroupStatus: 'ReplicaGroupStatus',
      activeReplicaDBInstanceID: 'ActiveReplicaDBInstanceID',
      DBInstanceId: 'DBInstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      replicaGroupID: 'string',
      replicaGroupStatus: 'string',
      activeReplicaDBInstanceID: 'string',
      DBInstanceId: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute extends $tea.Model {
  IPType: string;
  DBInstanceDiskUsed: string;
  guardDBInstanceName: string;
  canTempUpgrade: boolean;
  tempUpgradeTimeStart: string;
  tempUpgradeTimeEnd: string;
  tempUpgradeRecoveryTime: string;
  tempUpgradeRecoveryClass: string;
  tempUpgradeRecoveryCpu: number;
  tempUpgradeRecoveryMemory: number;
  tempUpgradeRecoveryMaxIOPS: string;
  tempUpgradeRecoveryMaxConnections: string;
  insId: number;
  DBInstanceId: string;
  payType: string;
  DBInstanceClassType: string;
  DBInstanceType: string;
  regionId: string;
  connectionString: string;
  port: string;
  engine: string;
  engineVersion: string;
  DBInstanceClass: string;
  DBInstanceMemory: number;
  DBInstanceStorage: number;
  vpcCloudInstanceId: string;
  DBInstanceNetType: string;
  DBInstanceStatus: string;
  DBInstanceDescription: string;
  lockMode: string;
  lockReason: string;
  readDelayTime: string;
  DBMaxQuantity: number;
  accountMaxQuantity: number;
  creationTime: string;
  expireTime: string;
  maintainTime: string;
  availabilityValue: string;
  maxIOPS: number;
  maxConnections: number;
  masterInstanceId: string;
  DBInstanceCPU: string;
  incrementSourceDBInstanceId: string;
  guardDBInstanceId: string;
  replicateId: string;
  tempDBInstanceId: string;
  securityIPList: string;
  zoneId: string;
  instanceNetworkType: string;
  DBInstanceStorageType: string;
  advancedFeatures: string;
  category: string;
  accountType: string;
  supportUpgradeAccountType: string;
  supportCreateSuperAccount: string;
  vpcId: string;
  VSwitchId: string;
  connectionMode: string;
  currentKernelVersion: string;
  latestKernelVersion: string;
  resourceGroupId: string;
  readonlyInstanceSQLDelayedTime: string;
  securityIPMode: string;
  timeZone: string;
  collation: string;
  dispenseMode: string;
  masterZone: string;
  autoUpgradeMinorVersion: string;
  proxyType: number;
  consoleVersion: string;
  multipleTempUpgrade: boolean;
  originConfiguration: string;
  dedicatedHostGroupId: string;
  superPermissionMode: string;
  slaveZones: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones;
  readOnlyDBInstanceIds: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds;
  extra: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra;
  static names(): { [key: string]: string } {
    return {
      IPType: 'IPType',
      DBInstanceDiskUsed: 'DBInstanceDiskUsed',
      guardDBInstanceName: 'GuardDBInstanceName',
      canTempUpgrade: 'CanTempUpgrade',
      tempUpgradeTimeStart: 'TempUpgradeTimeStart',
      tempUpgradeTimeEnd: 'TempUpgradeTimeEnd',
      tempUpgradeRecoveryTime: 'TempUpgradeRecoveryTime',
      tempUpgradeRecoveryClass: 'TempUpgradeRecoveryClass',
      tempUpgradeRecoveryCpu: 'TempUpgradeRecoveryCpu',
      tempUpgradeRecoveryMemory: 'TempUpgradeRecoveryMemory',
      tempUpgradeRecoveryMaxIOPS: 'TempUpgradeRecoveryMaxIOPS',
      tempUpgradeRecoveryMaxConnections: 'TempUpgradeRecoveryMaxConnections',
      insId: 'InsId',
      DBInstanceId: 'DBInstanceId',
      payType: 'PayType',
      DBInstanceClassType: 'DBInstanceClassType',
      DBInstanceType: 'DBInstanceType',
      regionId: 'RegionId',
      connectionString: 'ConnectionString',
      port: 'Port',
      engine: 'Engine',
      engineVersion: 'EngineVersion',
      DBInstanceClass: 'DBInstanceClass',
      DBInstanceMemory: 'DBInstanceMemory',
      DBInstanceStorage: 'DBInstanceStorage',
      vpcCloudInstanceId: 'VpcCloudInstanceId',
      DBInstanceNetType: 'DBInstanceNetType',
      DBInstanceStatus: 'DBInstanceStatus',
      DBInstanceDescription: 'DBInstanceDescription',
      lockMode: 'LockMode',
      lockReason: 'LockReason',
      readDelayTime: 'ReadDelayTime',
      DBMaxQuantity: 'DBMaxQuantity',
      accountMaxQuantity: 'AccountMaxQuantity',
      creationTime: 'CreationTime',
      expireTime: 'ExpireTime',
      maintainTime: 'MaintainTime',
      availabilityValue: 'AvailabilityValue',
      maxIOPS: 'MaxIOPS',
      maxConnections: 'MaxConnections',
      masterInstanceId: 'MasterInstanceId',
      DBInstanceCPU: 'DBInstanceCPU',
      incrementSourceDBInstanceId: 'IncrementSourceDBInstanceId',
      guardDBInstanceId: 'GuardDBInstanceId',
      replicateId: 'ReplicateId',
      tempDBInstanceId: 'TempDBInstanceId',
      securityIPList: 'SecurityIPList',
      zoneId: 'ZoneId',
      instanceNetworkType: 'InstanceNetworkType',
      DBInstanceStorageType: 'DBInstanceStorageType',
      advancedFeatures: 'AdvancedFeatures',
      category: 'Category',
      accountType: 'AccountType',
      supportUpgradeAccountType: 'SupportUpgradeAccountType',
      supportCreateSuperAccount: 'SupportCreateSuperAccount',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      connectionMode: 'ConnectionMode',
      currentKernelVersion: 'CurrentKernelVersion',
      latestKernelVersion: 'LatestKernelVersion',
      resourceGroupId: 'ResourceGroupId',
      readonlyInstanceSQLDelayedTime: 'ReadonlyInstanceSQLDelayedTime',
      securityIPMode: 'SecurityIPMode',
      timeZone: 'TimeZone',
      collation: 'Collation',
      dispenseMode: 'DispenseMode',
      masterZone: 'MasterZone',
      autoUpgradeMinorVersion: 'AutoUpgradeMinorVersion',
      proxyType: 'ProxyType',
      consoleVersion: 'ConsoleVersion',
      multipleTempUpgrade: 'MultipleTempUpgrade',
      originConfiguration: 'OriginConfiguration',
      dedicatedHostGroupId: 'DedicatedHostGroupId',
      superPermissionMode: 'SuperPermissionMode',
      slaveZones: 'SlaveZones',
      readOnlyDBInstanceIds: 'ReadOnlyDBInstanceIds',
      extra: 'Extra',
    };
  }

  static types(): { [key: string]: any } {
    return {
      IPType: 'string',
      DBInstanceDiskUsed: 'string',
      guardDBInstanceName: 'string',
      canTempUpgrade: 'boolean',
      tempUpgradeTimeStart: 'string',
      tempUpgradeTimeEnd: 'string',
      tempUpgradeRecoveryTime: 'string',
      tempUpgradeRecoveryClass: 'string',
      tempUpgradeRecoveryCpu: 'number',
      tempUpgradeRecoveryMemory: 'number',
      tempUpgradeRecoveryMaxIOPS: 'string',
      tempUpgradeRecoveryMaxConnections: 'string',
      insId: 'number',
      DBInstanceId: 'string',
      payType: 'string',
      DBInstanceClassType: 'string',
      DBInstanceType: 'string',
      regionId: 'string',
      connectionString: 'string',
      port: 'string',
      engine: 'string',
      engineVersion: 'string',
      DBInstanceClass: 'string',
      DBInstanceMemory: 'number',
      DBInstanceStorage: 'number',
      vpcCloudInstanceId: 'string',
      DBInstanceNetType: 'string',
      DBInstanceStatus: 'string',
      DBInstanceDescription: 'string',
      lockMode: 'string',
      lockReason: 'string',
      readDelayTime: 'string',
      DBMaxQuantity: 'number',
      accountMaxQuantity: 'number',
      creationTime: 'string',
      expireTime: 'string',
      maintainTime: 'string',
      availabilityValue: 'string',
      maxIOPS: 'number',
      maxConnections: 'number',
      masterInstanceId: 'string',
      DBInstanceCPU: 'string',
      incrementSourceDBInstanceId: 'string',
      guardDBInstanceId: 'string',
      replicateId: 'string',
      tempDBInstanceId: 'string',
      securityIPList: 'string',
      zoneId: 'string',
      instanceNetworkType: 'string',
      DBInstanceStorageType: 'string',
      advancedFeatures: 'string',
      category: 'string',
      accountType: 'string',
      supportUpgradeAccountType: 'string',
      supportCreateSuperAccount: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      connectionMode: 'string',
      currentKernelVersion: 'string',
      latestKernelVersion: 'string',
      resourceGroupId: 'string',
      readonlyInstanceSQLDelayedTime: 'string',
      securityIPMode: 'string',
      timeZone: 'string',
      collation: 'string',
      dispenseMode: 'string',
      masterZone: 'string',
      autoUpgradeMinorVersion: 'string',
      proxyType: 'number',
      consoleVersion: 'string',
      multipleTempUpgrade: 'boolean',
      originConfiguration: 'string',
      dedicatedHostGroupId: 'string',
      superPermissionMode: 'string',
      slaveZones: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones,
      readOnlyDBInstanceIds: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds,
      extra: DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDBInstanceAttributeResponseItems extends $tea.Model {
  DBInstanceAttribute: DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute[];
  static names(): { [key: string]: string } {
    return {
      DBInstanceAttribute: 'DBInstanceAttribute',
    };
  }

  static types(): { [key: string]: any } {
    return {
      DBInstanceAttribute: { 'type': 'array', 'itemType': DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute },
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
      'cn-qingdao': "rds.aliyuncs.com",
      'cn-beijing': "rds.aliyuncs.com",
      'cn-hangzhou': "rds.aliyuncs.com",
      'cn-shanghai': "rds.aliyuncs.com",
      'cn-shenzhen': "rds.aliyuncs.com",
      'cn-hongkong': "rds.aliyuncs.com",
      'ap-southeast-1': "rds.aliyuncs.com",
      'us-west-1': "rds.aliyuncs.com",
      'us-east-1': "rds.aliyuncs.com",
      'cn-shanghai-finance-1': "rds.aliyuncs.com",
      'cn-shenzhen-finance-1': "rds.aliyuncs.com",
      'cn-north-2-gov-1': "rds.aliyuncs.com",
      'ap-northeast-2-pop': "rds.ap-northeast-1.aliyuncs.com",
      'cn-beijing-finance-1': "rds.aliyuncs.com",
      'cn-beijing-finance-pop': "rds.aliyuncs.com",
      'cn-beijing-gov-1': "rds.aliyuncs.com",
      'cn-beijing-nu16-b01': "rds.aliyuncs.com",
      'cn-edge-1': "rds.aliyuncs.com",
      'cn-fujian': "rds.aliyuncs.com",
      'cn-haidian-cm12-c01': "rds.aliyuncs.com",
      'cn-hangzhou-bj-b01': "rds.aliyuncs.com",
      'cn-hangzhou-finance': "rds.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "rds.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "rds.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "rds.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "rds.aliyuncs.com",
      'cn-hangzhou-test-306': "rds.aliyuncs.com",
      'cn-hongkong-finance-pop': "rds.aliyuncs.com",
      'cn-qingdao-nebula': "rds.aliyuncs.com",
      'cn-shanghai-et15-b01': "rds.aliyuncs.com",
      'cn-shanghai-et2-b01': "rds.aliyuncs.com",
      'cn-shanghai-inner': "rds.aliyuncs.com",
      'cn-shanghai-internal-test-1': "rds.aliyuncs.com",
      'cn-shenzhen-inner': "rds.aliyuncs.com",
      'cn-shenzhen-st4-d01': "rds.aliyuncs.com",
      'cn-shenzhen-su18-b01': "rds.aliyuncs.com",
      'cn-wuhan': "rds.aliyuncs.com",
      'cn-yushanfang': "rds.aliyuncs.com",
      'cn-zhangbei-na61-b01': "rds.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "rds.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "rds.aliyuncs.com",
      'eu-west-1-oxs': "rds.ap-northeast-1.aliyuncs.com",
      'rus-west-1-pop': "rds.ap-northeast-1.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("rds", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async describeDedicatedHostImageCategoriesWithOptions(request: DescribeDedicatedHostImageCategoriesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDedicatedHostImageCategoriesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDedicatedHostImageCategoriesResponse>(await this.doRequest("DescribeDedicatedHostImageCategories", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDedicatedHostImageCategoriesResponse({}));
  }

  async describeDedicatedHostImageCategories(request: DescribeDedicatedHostImageCategoriesRequest): Promise<DescribeDedicatedHostImageCategoriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDedicatedHostImageCategoriesWithOptions(request, runtime);
  }

  async describeCrossBackupMetaListWithOptions(request: DescribeCrossBackupMetaListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCrossBackupMetaListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCrossBackupMetaListResponse>(await this.doRequest("DescribeCrossBackupMetaList", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCrossBackupMetaListResponse({}));
  }

  async describeCrossBackupMetaList(request: DescribeCrossBackupMetaListRequest): Promise<DescribeCrossBackupMetaListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCrossBackupMetaListWithOptions(request, runtime);
  }

  async restoreDdrTableWithOptions(request: RestoreDdrTableRequest, runtime: $Util.RuntimeOptions): Promise<RestoreDdrTableResponse> {
    Util.validateModel(request);
    return $tea.cast<RestoreDdrTableResponse>(await this.doRequest("RestoreDdrTable", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RestoreDdrTableResponse({}));
  }

  async restoreDdrTable(request: RestoreDdrTableRequest): Promise<RestoreDdrTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restoreDdrTableWithOptions(request, runtime);
  }

  async modifyDBProxyEndpointAddressWithOptions(request: ModifyDBProxyEndpointAddressRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBProxyEndpointAddressResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBProxyEndpointAddressResponse>(await this.doRequest("ModifyDBProxyEndpointAddress", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBProxyEndpointAddressResponse({}));
  }

  async modifyDBProxyEndpointAddress(request: ModifyDBProxyEndpointAddressRequest): Promise<ModifyDBProxyEndpointAddressResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBProxyEndpointAddressWithOptions(request, runtime);
  }

  async terminateMigrateTaskWithOptions(request: TerminateMigrateTaskRequest, runtime: $Util.RuntimeOptions): Promise<TerminateMigrateTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<TerminateMigrateTaskResponse>(await this.doRequest("TerminateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new TerminateMigrateTaskResponse({}));
  }

  async terminateMigrateTask(request: TerminateMigrateTaskRequest): Promise<TerminateMigrateTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.terminateMigrateTaskWithOptions(request, runtime);
  }

  async describeLocalAvailableRecoveryTimeWithOptions(request: DescribeLocalAvailableRecoveryTimeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLocalAvailableRecoveryTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLocalAvailableRecoveryTimeResponse>(await this.doRequest("DescribeLocalAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeLocalAvailableRecoveryTimeResponse({}));
  }

  async describeLocalAvailableRecoveryTime(request: DescribeLocalAvailableRecoveryTimeRequest): Promise<DescribeLocalAvailableRecoveryTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLocalAvailableRecoveryTimeWithOptions(request, runtime);
  }

  async describeAvailableZonesWithOptions(request: DescribeAvailableZonesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableZonesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableZonesResponse>(await this.doRequest("DescribeAvailableZones", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableZonesResponse({}));
  }

  async describeAvailableZones(request: DescribeAvailableZonesRequest): Promise<DescribeAvailableZonesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableZonesWithOptions(request, runtime);
  }

  async describeAvailableClassesWithOptions(request: DescribeAvailableClassesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableClassesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableClassesResponse>(await this.doRequest("DescribeAvailableClasses", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableClassesResponse({}));
  }

  async describeAvailableClasses(request: DescribeAvailableClassesRequest): Promise<DescribeAvailableClassesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableClassesWithOptions(request, runtime);
  }

  async createDedicatedHostAccountWithOptions(request: CreateDedicatedHostAccountRequest, runtime: $Util.RuntimeOptions): Promise<CreateDedicatedHostAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDedicatedHostAccountResponse>(await this.doRequest("CreateDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDedicatedHostAccountResponse({}));
  }

  async createDedicatedHostAccount(request: CreateDedicatedHostAccountRequest): Promise<CreateDedicatedHostAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDedicatedHostAccountWithOptions(request, runtime);
  }

  async deleteDedicatedHostAccountWithOptions(request: DeleteDedicatedHostAccountRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDedicatedHostAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDedicatedHostAccountResponse>(await this.doRequest("DeleteDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteDedicatedHostAccountResponse({}));
  }

  async deleteDedicatedHostAccount(request: DeleteDedicatedHostAccountRequest): Promise<DeleteDedicatedHostAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDedicatedHostAccountWithOptions(request, runtime);
  }

  async modifyDedicatedHostAccountWithOptions(request: ModifyDedicatedHostAccountRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDedicatedHostAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDedicatedHostAccountResponse>(await this.doRequest("ModifyDedicatedHostAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDedicatedHostAccountResponse({}));
  }

  async modifyDedicatedHostAccount(request: ModifyDedicatedHostAccountRequest): Promise<ModifyDedicatedHostAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDedicatedHostAccountWithOptions(request, runtime);
  }

  async createDedicatedHostUserWithOptions(request: CreateDedicatedHostUserRequest, runtime: $Util.RuntimeOptions): Promise<CreateDedicatedHostUserResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDedicatedHostUserResponse>(await this.doRequest("CreateDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDedicatedHostUserResponse({}));
  }

  async createDedicatedHostUser(request: CreateDedicatedHostUserRequest): Promise<CreateDedicatedHostUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDedicatedHostUserWithOptions(request, runtime);
  }

  async modifyDedicatedHostUserWithOptions(request: ModifyDedicatedHostUserRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDedicatedHostUserResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDedicatedHostUserResponse>(await this.doRequest("ModifyDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDedicatedHostUserResponse({}));
  }

  async modifyDedicatedHostUser(request: ModifyDedicatedHostUserRequest): Promise<ModifyDedicatedHostUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDedicatedHostUserWithOptions(request, runtime);
  }

  async dropDedicatedHostUserWithOptions(request: DropDedicatedHostUserRequest, runtime: $Util.RuntimeOptions): Promise<DropDedicatedHostUserResponse> {
    Util.validateModel(request);
    return $tea.cast<DropDedicatedHostUserResponse>(await this.doRequest("DropDedicatedHostUser", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DropDedicatedHostUserResponse({}));
  }

  async dropDedicatedHostUser(request: DropDedicatedHostUserRequest): Promise<DropDedicatedHostUserResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.dropDedicatedHostUserWithOptions(request, runtime);
  }

  async upgradeDBProxyInstanceKernelVersionWithOptions(request: UpgradeDBProxyInstanceKernelVersionRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeDBProxyInstanceKernelVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeDBProxyInstanceKernelVersionResponse>(await this.doRequest("UpgradeDBProxyInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new UpgradeDBProxyInstanceKernelVersionResponse({}));
  }

  async upgradeDBProxyInstanceKernelVersion(request: UpgradeDBProxyInstanceKernelVersionRequest): Promise<UpgradeDBProxyInstanceKernelVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeDBProxyInstanceKernelVersionWithOptions(request, runtime);
  }

  async stopDBInstanceWithOptions(request: StopDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<StopDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<StopDBInstanceResponse>(await this.doRequest("StopDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new StopDBInstanceResponse({}));
  }

  async stopDBInstance(request: StopDBInstanceRequest): Promise<StopDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.stopDBInstanceWithOptions(request, runtime);
  }

  async startDBInstanceWithOptions(request: StartDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<StartDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<StartDBInstanceResponse>(await this.doRequest("StartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new StartDBInstanceResponse({}));
  }

  async startDBInstance(request: StartDBInstanceRequest): Promise<StartDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.startDBInstanceWithOptions(request, runtime);
  }

  async describeSignedEventActionsWithOptions(request: DescribeSignedEventActionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSignedEventActionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSignedEventActionsResponse>(await this.doRequest("DescribeSignedEventActions", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSignedEventActionsResponse({}));
  }

  async describeSignedEventActions(request: DescribeSignedEventActionsRequest): Promise<DescribeSignedEventActionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSignedEventActionsWithOptions(request, runtime);
  }

  async signEventActionWithOptions(request: SignEventActionRequest, runtime: $Util.RuntimeOptions): Promise<SignEventActionResponse> {
    Util.validateModel(request);
    return $tea.cast<SignEventActionResponse>(await this.doRequest("SignEventAction", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new SignEventActionResponse({}));
  }

  async signEventAction(request: SignEventActionRequest): Promise<SignEventActionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.signEventActionWithOptions(request, runtime);
  }

  async describeNextEventForSignWithOptions(request: DescribeNextEventForSignRequest, runtime: $Util.RuntimeOptions): Promise<DescribeNextEventForSignResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeNextEventForSignResponse>(await this.doRequest("DescribeNextEventForSign", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeNextEventForSignResponse({}));
  }

  async describeNextEventForSign(request: DescribeNextEventForSignRequest): Promise<DescribeNextEventForSignResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeNextEventForSignWithOptions(request, runtime);
  }

  async modifyActionEventVerifyPolicyWithOptions(request: ModifyActionEventVerifyPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyActionEventVerifyPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyActionEventVerifyPolicyResponse>(await this.doRequest("ModifyActionEventVerifyPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyActionEventVerifyPolicyResponse({}));
  }

  async modifyActionEventVerifyPolicy(request: ModifyActionEventVerifyPolicyRequest): Promise<ModifyActionEventVerifyPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyActionEventVerifyPolicyWithOptions(request, runtime);
  }

  async describeDBInstancesOverviewWithOptions(request: DescribeDBInstancesOverviewRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesOverviewResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesOverviewResponse>(await this.doRequest("DescribeDBInstancesOverview", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesOverviewResponse({}));
  }

  async describeDBInstancesOverview(request: DescribeDBInstancesOverviewRequest): Promise<DescribeDBInstancesOverviewResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesOverviewWithOptions(request, runtime);
  }

  async describeMigrateTaskByIdWithOptions(request: DescribeMigrateTaskByIdRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMigrateTaskByIdResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMigrateTaskByIdResponse>(await this.doRequest("DescribeMigrateTaskById", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeMigrateTaskByIdResponse({}));
  }

  async describeMigrateTaskById(request: DescribeMigrateTaskByIdRequest): Promise<DescribeMigrateTaskByIdResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMigrateTaskByIdWithOptions(request, runtime);
  }

  async deleteBackupFileWithOptions(request: DeleteBackupFileRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBackupFileResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBackupFileResponse>(await this.doRequest("DeleteBackupFile", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteBackupFileResponse({}));
  }

  async deleteBackupFile(request: DeleteBackupFileRequest): Promise<DeleteBackupFileResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBackupFileWithOptions(request, runtime);
  }

  async describeDetachedBackupsWithOptions(request: DescribeDetachedBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDetachedBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDetachedBackupsResponse>(await this.doRequest("DescribeDetachedBackups", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDetachedBackupsResponse({}));
  }

  async describeDetachedBackups(request: DescribeDetachedBackupsRequest): Promise<DescribeDetachedBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDetachedBackupsWithOptions(request, runtime);
  }

  async evaluateDedicatedHostInstanceResourceWithOptions(request: EvaluateDedicatedHostInstanceResourceRequest, runtime: $Util.RuntimeOptions): Promise<EvaluateDedicatedHostInstanceResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<EvaluateDedicatedHostInstanceResourceResponse>(await this.doRequest("EvaluateDedicatedHostInstanceResource", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new EvaluateDedicatedHostInstanceResourceResponse({}));
  }

  async evaluateDedicatedHostInstanceResource(request: EvaluateDedicatedHostInstanceResourceRequest): Promise<EvaluateDedicatedHostInstanceResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.evaluateDedicatedHostInstanceResourceWithOptions(request, runtime);
  }

  async describeAvailableDedicatedHostClassesWithOptions(request: DescribeAvailableDedicatedHostClassesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableDedicatedHostClassesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableDedicatedHostClassesResponse>(await this.doRequest("DescribeAvailableDedicatedHostClasses", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableDedicatedHostClassesResponse({}));
  }

  async describeAvailableDedicatedHostClasses(request: DescribeAvailableDedicatedHostClassesRequest): Promise<DescribeAvailableDedicatedHostClassesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableDedicatedHostClassesWithOptions(request, runtime);
  }

  async describeAvailableDedicatedHostZonesWithOptions(request: DescribeAvailableDedicatedHostZonesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableDedicatedHostZonesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableDedicatedHostZonesResponse>(await this.doRequest("DescribeAvailableDedicatedHostZones", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableDedicatedHostZonesResponse({}));
  }

  async describeAvailableDedicatedHostZones(request: DescribeAvailableDedicatedHostZonesRequest): Promise<DescribeAvailableDedicatedHostZonesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableDedicatedHostZonesWithOptions(request, runtime);
  }

  async releaseInstanceConnectionWithOptions(request: ReleaseInstanceConnectionRequest, runtime: $Util.RuntimeOptions): Promise<ReleaseInstanceConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<ReleaseInstanceConnectionResponse>(await this.doRequest("ReleaseInstanceConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ReleaseInstanceConnectionResponse({}));
  }

  async releaseInstanceConnection(request: ReleaseInstanceConnectionRequest): Promise<ReleaseInstanceConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.releaseInstanceConnectionWithOptions(request, runtime);
  }

  async unlockAccountWithOptions(request: UnlockAccountRequest, runtime: $Util.RuntimeOptions): Promise<UnlockAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<UnlockAccountResponse>(await this.doRequest("UnlockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new UnlockAccountResponse({}));
  }

  async unlockAccount(request: UnlockAccountRequest): Promise<UnlockAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unlockAccountWithOptions(request, runtime);
  }

  async lockAccountWithOptions(request: LockAccountRequest, runtime: $Util.RuntimeOptions): Promise<LockAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<LockAccountResponse>(await this.doRequest("LockAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new LockAccountResponse({}));
  }

  async lockAccount(request: LockAccountRequest): Promise<LockAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.lockAccountWithOptions(request, runtime);
  }

  async listTagResourcesWithOptions(request: ListTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagResourcesResponse>(await this.doRequest("ListTagResources", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ListTagResourcesResponse({}));
  }

  async listTagResources(request: ListTagResourcesRequest): Promise<ListTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagResourcesWithOptions(request, runtime);
  }

  async tagResourcesWithOptions(request: TagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<TagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourcesResponse>(await this.doRequest("TagResources", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new TagResourcesResponse({}));
  }

  async tagResources(request: TagResourcesRequest): Promise<TagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourcesWithOptions(request, runtime);
  }

  async untagResourcesWithOptions(request: UntagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UntagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UntagResourcesResponse>(await this.doRequest("UntagResources", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new UntagResourcesResponse({}));
  }

  async untagResources(request: UntagResourcesRequest): Promise<UntagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.untagResourcesWithOptions(request, runtime);
  }

  async describeDedicatedHostGroupsWithOptions(request: DescribeDedicatedHostGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDedicatedHostGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDedicatedHostGroupsResponse>(await this.doRequest("DescribeDedicatedHostGroups", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDedicatedHostGroupsResponse({}));
  }

  async describeDedicatedHostGroups(request: DescribeDedicatedHostGroupsRequest): Promise<DescribeDedicatedHostGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDedicatedHostGroupsWithOptions(request, runtime);
  }

  async createDedicatedHostGroupWithOptions(request: CreateDedicatedHostGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateDedicatedHostGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDedicatedHostGroupResponse>(await this.doRequest("CreateDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDedicatedHostGroupResponse({}));
  }

  async createDedicatedHostGroup(request: CreateDedicatedHostGroupRequest): Promise<CreateDedicatedHostGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDedicatedHostGroupWithOptions(request, runtime);
  }

  async deleteDedicatedHostGroupWithOptions(request: DeleteDedicatedHostGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDedicatedHostGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDedicatedHostGroupResponse>(await this.doRequest("DeleteDedicatedHostGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteDedicatedHostGroupResponse({}));
  }

  async deleteDedicatedHostGroup(request: DeleteDedicatedHostGroupRequest): Promise<DeleteDedicatedHostGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDedicatedHostGroupWithOptions(request, runtime);
  }

  async modifyDedicatedHostGroupAttributeWithOptions(request: ModifyDedicatedHostGroupAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDedicatedHostGroupAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDedicatedHostGroupAttributeResponse>(await this.doRequest("ModifyDedicatedHostGroupAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDedicatedHostGroupAttributeResponse({}));
  }

  async modifyDedicatedHostGroupAttribute(request: ModifyDedicatedHostGroupAttributeRequest): Promise<ModifyDedicatedHostGroupAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDedicatedHostGroupAttributeWithOptions(request, runtime);
  }

  async restartDedicatedHostWithOptions(request: RestartDedicatedHostRequest, runtime: $Util.RuntimeOptions): Promise<RestartDedicatedHostResponse> {
    Util.validateModel(request);
    return $tea.cast<RestartDedicatedHostResponse>(await this.doRequest("RestartDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RestartDedicatedHostResponse({}));
  }

  async restartDedicatedHost(request: RestartDedicatedHostRequest): Promise<RestartDedicatedHostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restartDedicatedHostWithOptions(request, runtime);
  }

  async replaceDedicatedHostWithOptions(request: ReplaceDedicatedHostRequest, runtime: $Util.RuntimeOptions): Promise<ReplaceDedicatedHostResponse> {
    Util.validateModel(request);
    return $tea.cast<ReplaceDedicatedHostResponse>(await this.doRequest("ReplaceDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ReplaceDedicatedHostResponse({}));
  }

  async replaceDedicatedHost(request: ReplaceDedicatedHostRequest): Promise<ReplaceDedicatedHostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.replaceDedicatedHostWithOptions(request, runtime);
  }

  async describeDedicatedHostsWithOptions(request: DescribeDedicatedHostsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDedicatedHostsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDedicatedHostsResponse>(await this.doRequest("DescribeDedicatedHosts", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDedicatedHostsResponse({}));
  }

  async describeDedicatedHosts(request: DescribeDedicatedHostsRequest): Promise<DescribeDedicatedHostsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDedicatedHostsWithOptions(request, runtime);
  }

  async describeDedicatedHostAttributeWithOptions(request: DescribeDedicatedHostAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDedicatedHostAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDedicatedHostAttributeResponse>(await this.doRequest("DescribeDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDedicatedHostAttributeResponse({}));
  }

  async describeDedicatedHostAttribute(request: DescribeDedicatedHostAttributeRequest): Promise<DescribeDedicatedHostAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDedicatedHostAttributeWithOptions(request, runtime);
  }

  async clearDedicatedHostWithOptions(request: ClearDedicatedHostRequest, runtime: $Util.RuntimeOptions): Promise<ClearDedicatedHostResponse> {
    Util.validateModel(request);
    return $tea.cast<ClearDedicatedHostResponse>(await this.doRequest("ClearDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ClearDedicatedHostResponse({}));
  }

  async clearDedicatedHost(request: ClearDedicatedHostRequest): Promise<ClearDedicatedHostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.clearDedicatedHostWithOptions(request, runtime);
  }

  async modifyDedicatedHostAttributeWithOptions(request: ModifyDedicatedHostAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDedicatedHostAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDedicatedHostAttributeResponse>(await this.doRequest("ModifyDedicatedHostAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDedicatedHostAttributeResponse({}));
  }

  async modifyDedicatedHostAttribute(request: ModifyDedicatedHostAttributeRequest): Promise<ModifyDedicatedHostAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDedicatedHostAttributeWithOptions(request, runtime);
  }

  async migrateDBInstanceWithOptions(request: MigrateDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<MigrateDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<MigrateDBInstanceResponse>(await this.doRequest("MigrateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new MigrateDBInstanceResponse({}));
  }

  async migrateDBInstance(request: MigrateDBInstanceRequest): Promise<MigrateDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.migrateDBInstanceWithOptions(request, runtime);
  }

  async createDedicatedHostWithOptions(request: CreateDedicatedHostRequest, runtime: $Util.RuntimeOptions): Promise<CreateDedicatedHostResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDedicatedHostResponse>(await this.doRequest("CreateDedicatedHost", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDedicatedHostResponse({}));
  }

  async createDedicatedHost(request: CreateDedicatedHostRequest): Promise<CreateDedicatedHostResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDedicatedHostWithOptions(request, runtime);
  }

  async rebuildDBInstanceWithOptions(request: RebuildDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RebuildDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RebuildDBInstanceResponse>(await this.doRequest("RebuildDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RebuildDBInstanceResponse({}));
  }

  async rebuildDBInstance(request: RebuildDBInstanceRequest): Promise<RebuildDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.rebuildDBInstanceWithOptions(request, runtime);
  }

  async describeDBProxyEndpointWithOptions(request: DescribeDBProxyEndpointRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBProxyEndpointResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBProxyEndpointResponse>(await this.doRequest("DescribeDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBProxyEndpointResponse({}));
  }

  async describeDBProxyEndpoint(request: DescribeDBProxyEndpointRequest): Promise<DescribeDBProxyEndpointResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBProxyEndpointWithOptions(request, runtime);
  }

  async describeDBProxyPerformanceWithOptions(request: DescribeDBProxyPerformanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBProxyPerformanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBProxyPerformanceResponse>(await this.doRequest("DescribeDBProxyPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBProxyPerformanceResponse({}));
  }

  async describeDBProxyPerformance(request: DescribeDBProxyPerformanceRequest): Promise<DescribeDBProxyPerformanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBProxyPerformanceWithOptions(request, runtime);
  }

  async describeDBProxyWithOptions(request: DescribeDBProxyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBProxyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBProxyResponse>(await this.doRequest("DescribeDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBProxyResponse({}));
  }

  async describeDBProxy(request: DescribeDBProxyRequest): Promise<DescribeDBProxyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBProxyWithOptions(request, runtime);
  }

  async modifyDBProxyEndpointWithOptions(request: ModifyDBProxyEndpointRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBProxyEndpointResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBProxyEndpointResponse>(await this.doRequest("ModifyDBProxyEndpoint", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBProxyEndpointResponse({}));
  }

  async modifyDBProxyEndpoint(request: ModifyDBProxyEndpointRequest): Promise<ModifyDBProxyEndpointResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBProxyEndpointWithOptions(request, runtime);
  }

  async modifyDBProxyInstanceWithOptions(request: ModifyDBProxyInstanceRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBProxyInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBProxyInstanceResponse>(await this.doRequest("ModifyDBProxyInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBProxyInstanceResponse({}));
  }

  async modifyDBProxyInstance(request: ModifyDBProxyInstanceRequest): Promise<ModifyDBProxyInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBProxyInstanceWithOptions(request, runtime);
  }

  async modifyDBProxyWithOptions(request: ModifyDBProxyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBProxyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBProxyResponse>(await this.doRequest("ModifyDBProxy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBProxyResponse({}));
  }

  async modifyDBProxy(request: ModifyDBProxyRequest): Promise<ModifyDBProxyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBProxyWithOptions(request, runtime);
  }

  async modifyHASwitchConfigWithOptions(request: ModifyHASwitchConfigRequest, runtime: $Util.RuntimeOptions): Promise<ModifyHASwitchConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyHASwitchConfigResponse>(await this.doRequest("ModifyHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyHASwitchConfigResponse({}));
  }

  async modifyHASwitchConfig(request: ModifyHASwitchConfigRequest): Promise<ModifyHASwitchConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyHASwitchConfigWithOptions(request, runtime);
  }

  async describeHASwitchConfigWithOptions(request: DescribeHASwitchConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeHASwitchConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeHASwitchConfigResponse>(await this.doRequest("DescribeHASwitchConfig", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeHASwitchConfigResponse({}));
  }

  async describeHASwitchConfig(request: DescribeHASwitchConfigRequest): Promise<DescribeHASwitchConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeHASwitchConfigWithOptions(request, runtime);
  }

  async modifyActionEventPolicyWithOptions(request: ModifyActionEventPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyActionEventPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyActionEventPolicyResponse>(await this.doRequest("ModifyActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyActionEventPolicyResponse({}));
  }

  async modifyActionEventPolicy(request: ModifyActionEventPolicyRequest): Promise<ModifyActionEventPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyActionEventPolicyWithOptions(request, runtime);
  }

  async describeActionEventPolicyWithOptions(request: DescribeActionEventPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeActionEventPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeActionEventPolicyResponse>(await this.doRequest("DescribeActionEventPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeActionEventPolicyResponse({}));
  }

  async describeActionEventPolicy(request: DescribeActionEventPolicyRequest): Promise<DescribeActionEventPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeActionEventPolicyWithOptions(request, runtime);
  }

  async describeEventsWithOptions(request: DescribeEventsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeEventsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeEventsResponse>(await this.doRequest("DescribeEvents", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeEventsResponse({}));
  }

  async describeEvents(request: DescribeEventsRequest): Promise<DescribeEventsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeEventsWithOptions(request, runtime);
  }

  async describeDBInstancesForCloneWithOptions(request: DescribeDBInstancesForCloneRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesForCloneResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesForCloneResponse>(await this.doRequest("DescribeDBInstancesForClone", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesForCloneResponse({}));
  }

  async describeDBInstancesForClone(request: DescribeDBInstancesForCloneRequest): Promise<DescribeDBInstancesForCloneResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesForCloneWithOptions(request, runtime);
  }

  /**
   * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async describeDTCSecurityIpHostsForSQLServerWithOptions(request: DescribeDTCSecurityIpHostsForSQLServerRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDTCSecurityIpHostsForSQLServerResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDTCSecurityIpHostsForSQLServerResponse>(await this.doRequest("DescribeDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDTCSecurityIpHostsForSQLServerResponse({}));
  }

  /**
   * DescribeDTCSecurityIpHostsForSQLServer 调用DescribeDTCSecurityIpHostsForSQLServer接口查询RDS实例的分布式事务白名单信息。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeDTCSecurityIpHostsForSQLServer
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 关于分布式事务白名单请参见[设置分布式事务白名单](~~124321~~)。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async describeDTCSecurityIpHostsForSQLServer(request: DescribeDTCSecurityIpHostsForSQLServerRequest): Promise<DescribeDTCSecurityIpHostsForSQLServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDTCSecurityIpHostsForSQLServerWithOptions(request, runtime);
  }

  /**
   * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &SecurityIpHosts=192.168.1.100,k3ecstest
    * &WhiteListGroupName=test1
    * &<公共请求参数>
    * ```
    * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async modifyDTCSecurityIpHostsForSQLServerWithOptions(request: ModifyDTCSecurityIpHostsForSQLServerRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDTCSecurityIpHostsForSQLServerResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDTCSecurityIpHostsForSQLServerResponse>(await this.doRequest("ModifyDTCSecurityIpHostsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDTCSecurityIpHostsForSQLServerResponse({}));
  }

  /**
   * ModifyDTCSecurityIpHostsForSQLServer 调用ModifyDTCSecurityIpHostsForSQLServer接口设置分布式事务白名单。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=ModifyDTCSecurityIpHostsForSQLServer
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &SecurityIpHosts=192.168.1.100,k3ecstest
    * &WhiteListGroupName=test1
    * &<公共请求参数>
    * ```
    * description:   * 分布式事务白名单可以让ECS实例和RDS实例之间支持分布式事务。详情请参见[设置分布式事务白名单](~~124321~~)。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async modifyDTCSecurityIpHostsForSQLServer(request: ModifyDTCSecurityIpHostsForSQLServerRequest): Promise<ModifyDTCSecurityIpHostsForSQLServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDTCSecurityIpHostsForSQLServerWithOptions(request, runtime);
  }

  /**
   * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
    * &DBInstanceId=rm-uf6wjk5xxxxxxx	
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async describeDBInstanceIpHostnameWithOptions(request: DescribeDBInstanceIpHostnameRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceIpHostnameResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceIpHostnameResponse>(await this.doRequest("DescribeDBInstanceIpHostname", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceIpHostnameResponse({}));
  }

  /**
   * DescribeDBInstanceIpHostname 调用DescribeDBInstanceIpHostname接口查询RDS实例的底层ECS实例的hostname。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeDBInstanceIpHostname
    * &DBInstanceId=rm-uf6wjk5xxxxxxx	
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * RDS实例是基于ECS实例搭建的，本接口用于[设置分布式事务白名单](~~124321~~)时查询RDS实例的底层ECS实例的hostname。
    * 仅适用于如下版本实例：
    * * SQL Server 2012/2016企业版高可用版
    * * SQL Server 2012/2016标准版
  
   */
  async describeDBInstanceIpHostname(request: DescribeDBInstanceIpHostnameRequest): Promise<DescribeDBInstanceIpHostnameResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceIpHostnameWithOptions(request, runtime);
  }

  async modifyDBInstanceAutoUpgradeMinorVersionWithOptions(request: ModifyDBInstanceAutoUpgradeMinorVersionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceAutoUpgradeMinorVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceAutoUpgradeMinorVersionResponse>(await this.doRequest("ModifyDBInstanceAutoUpgradeMinorVersion", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceAutoUpgradeMinorVersionResponse({}));
  }

  async modifyDBInstanceAutoUpgradeMinorVersion(request: ModifyDBInstanceAutoUpgradeMinorVersionRequest): Promise<ModifyDBInstanceAutoUpgradeMinorVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceAutoUpgradeMinorVersionWithOptions(request, runtime);
  }

  /**
   * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description: 
   */
  async describeAvailableCrossRegionWithOptions(request: DescribeAvailableCrossRegionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableCrossRegionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableCrossRegionResponse>(await this.doRequest("DescribeAvailableCrossRegion", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableCrossRegionResponse({}));
  }

  /**
   * DescribeAvailableCrossRegion 调用DescribeAvailableCrossRegion接口查询所选地域当前可以进行跨地域备份的目的地域。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableCrossRegion
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description: 
   */
  async describeAvailableCrossRegion(request: DescribeAvailableCrossRegionRequest): Promise<DescribeAvailableCrossRegionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableCrossRegionWithOptions(request, runtime);
  }

  async checkCreateDdrDBInstanceWithOptions(request: CheckCreateDdrDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CheckCreateDdrDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckCreateDdrDBInstanceResponse>(await this.doRequest("CheckCreateDdrDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CheckCreateDdrDBInstanceResponse({}));
  }

  async checkCreateDdrDBInstance(request: CheckCreateDdrDBInstanceRequest): Promise<CheckCreateDdrDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkCreateDdrDBInstanceWithOptions(request, runtime);
  }

  /**
   * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
    * &CrossBackupId=14377
    * &<公共请求参数>
    * ```
    * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeAvailableRecoveryTimeWithOptions(request: DescribeAvailableRecoveryTimeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableRecoveryTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableRecoveryTimeResponse>(await this.doRequest("DescribeAvailableRecoveryTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableRecoveryTimeResponse({}));
  }

  /**
   * DescribeAvailableRecoveryTime 调用DescribeAvailableRecoveryTime接口查询某跨地域备份文件可恢复哪个时间段的数据。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeAvailableRecoveryTime
    * &CrossBackupId=14377
    * &<公共请求参数>
    * ```
    * description:   * 查看普通备份文件可恢复哪个时间段的数据请参见[DescribeBackups](~~26273~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeAvailableRecoveryTime(request: DescribeAvailableRecoveryTimeRequest): Promise<DescribeAvailableRecoveryTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableRecoveryTimeWithOptions(request, runtime);
  }

  /**
   * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &StartTime=2019-05-30T12:10Z
    * &EndTime=2019-06-15T12:10Z
    * &<公共请求参数>
    * ```
    * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeCrossRegionLogBackupFilesWithOptions(request: DescribeCrossRegionLogBackupFilesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCrossRegionLogBackupFilesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCrossRegionLogBackupFilesResponse>(await this.doRequest("DescribeCrossRegionLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCrossRegionLogBackupFilesResponse({}));
  }

  /**
   * DescribeCrossRegionLogBackupFiles 调用DescribeCrossRegionLogBackupFiles接口查看跨地域日志备份文件列表。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionLogBackupFiles
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &StartTime=2019-05-30T12:10Z
    * &EndTime=2019-06-15T12:10Z
    * &<公共请求参数>
    * ```
    * description:   * 查看数据备份文件请参见[DescribeCrossRegionBackups](~~121733~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeCrossRegionLogBackupFiles(request: DescribeCrossRegionLogBackupFilesRequest): Promise<DescribeCrossRegionLogBackupFilesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCrossRegionLogBackupFilesWithOptions(request, runtime);
  }

  /**
   * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async modifyInstanceCrossBackupPolicyWithOptions(request: ModifyInstanceCrossBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyInstanceCrossBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyInstanceCrossBackupPolicyResponse>(await this.doRequest("ModifyInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyInstanceCrossBackupPolicyResponse({}));
  }

  /**
   * ModifyInstanceCrossBackupPolicy 调用ModifyInstanceCrossBackupPolicy接口修改RDS跨地域备份设置。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=ModifyInstanceCrossBackupPolicy
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async modifyInstanceCrossBackupPolicy(request: ModifyInstanceCrossBackupPolicyRequest): Promise<ModifyInstanceCrossBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyInstanceCrossBackupPolicyWithOptions(request, runtime);
  }

  /**
   * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
    * &RegionId=cn-hangzhou
    * &Engine=MySQL
    * &EngineVersion=5.6
    * &DBInstanceClass=rds.mysql.s1.small
    * &DBInstanceStorage=20
    * &DBInstanceNetType=Intranet
    * &PayType=Prepaid
    * &RestoreType=0
    * &SecurityIPList=127.0.0.1
    * &BackupSetId=14358
    * &<公共请求参数>
    * ```
    * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async createDdrInstanceWithOptions(request: CreateDdrInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateDdrInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDdrInstanceResponse>(await this.doRequest("CreateDdrInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDdrInstanceResponse({}));
  }

  /**
   * CreateDdrInstance 调用CreateDdrInstance接口跨地域恢复数据到新实例。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action==CreateDdrInstance
    * &RegionId=cn-hangzhou
    * &Engine=MySQL
    * &EngineVersion=5.6
    * &DBInstanceClass=rds.mysql.s1.small
    * &DBInstanceStorage=20
    * &DBInstanceNetType=Intranet
    * &PayType=Prepaid
    * &RestoreType=0
    * &SecurityIPList=127.0.0.1
    * &BackupSetId=14358
    * &<公共请求参数>
    * ```
    * description:   * 恢复前可以调用[CheckCreateDdrDBInstance](~~121721~~)接口预检查某RDS实例是否可以用跨地域备份集进行跨地域恢复。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async createDdrInstance(request: CreateDdrInstanceRequest): Promise<CreateDdrInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDdrInstanceWithOptions(request, runtime);
  }

  async describeCrossRegionBackupDBInstanceWithOptions(request: DescribeCrossRegionBackupDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCrossRegionBackupDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCrossRegionBackupDBInstanceResponse>(await this.doRequest("DescribeCrossRegionBackupDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCrossRegionBackupDBInstanceResponse({}));
  }

  async describeCrossRegionBackupDBInstance(request: DescribeCrossRegionBackupDBInstanceRequest): Promise<DescribeCrossRegionBackupDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCrossRegionBackupDBInstanceWithOptions(request, runtime);
  }

  /**
   * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &<公共请求参数>
    * ```
    * description:   * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeInstanceCrossBackupPolicyWithOptions(request: DescribeInstanceCrossBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeInstanceCrossBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeInstanceCrossBackupPolicyResponse>(await this.doRequest("DescribeInstanceCrossBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeInstanceCrossBackupPolicyResponse({}));
  }

  /**
   * DescribeInstanceCrossBackupPolicy 调用DescribeInstanceCrossBackupPolicy接口查询跨地域备份设置。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeInstanceCrossBackupPolicy
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &<公共请求参数>
    * ```
    * description:   * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeInstanceCrossBackupPolicy(request: DescribeInstanceCrossBackupPolicyRequest): Promise<DescribeInstanceCrossBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeInstanceCrossBackupPolicyWithOptions(request, runtime);
  }

  /**
   * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &CrossBackupId=14562
    * &<公共请求参数>
    * ```
    * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeCrossRegionBackupsWithOptions(request: DescribeCrossRegionBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCrossRegionBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCrossRegionBackupsResponse>(await this.doRequest("DescribeCrossRegionBackups", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCrossRegionBackupsResponse({}));
  }

  /**
   * DescribeCrossRegionBackups 调用DescribeCrossRegionBackups接口查看某RDS实例跨地域数据备份文件列表。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeCrossRegionBackups
    * &DBInstanceId=rm-uf6wjk5xxxxxxxxxx
    * &CrossBackupId=14562
    * &<公共请求参数>
    * ```
    * description:   * 查看日志备份文件请参见[DescribeCrossRegionLogBackupFiles](~~121734~~)。
    * 仅适用于如下实例：
    * * MySQL 5.7高可用本地SSD盘版
    * * MySQL 5.6
  
   */
  async describeCrossRegionBackups(request: DescribeCrossRegionBackupsRequest): Promise<DescribeCrossRegionBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCrossRegionBackupsWithOptions(request, runtime);
  }

  async describeReadDBInstanceDelayWithOptions(request: DescribeReadDBInstanceDelayRequest, runtime: $Util.RuntimeOptions): Promise<DescribeReadDBInstanceDelayResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeReadDBInstanceDelayResponse>(await this.doRequest("DescribeReadDBInstanceDelay", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeReadDBInstanceDelayResponse({}));
  }

  async describeReadDBInstanceDelay(request: DescribeReadDBInstanceDelayRequest): Promise<DescribeReadDBInstanceDelayResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeReadDBInstanceDelayWithOptions(request, runtime);
  }

  async restoreTableWithOptions(request: RestoreTableRequest, runtime: $Util.RuntimeOptions): Promise<RestoreTableResponse> {
    Util.validateModel(request);
    return $tea.cast<RestoreTableResponse>(await this.doRequest("RestoreTable", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RestoreTableResponse({}));
  }

  async restoreTable(request: RestoreTableRequest): Promise<RestoreTableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restoreTableWithOptions(request, runtime);
  }

  async createParameterGroupWithOptions(request: CreateParameterGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateParameterGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateParameterGroupResponse>(await this.doRequest("CreateParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateParameterGroupResponse({}));
  }

  async createParameterGroup(request: CreateParameterGroupRequest): Promise<CreateParameterGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createParameterGroupWithOptions(request, runtime);
  }

  async describeParameterGroupsWithOptions(request: DescribeParameterGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeParameterGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeParameterGroupsResponse>(await this.doRequest("DescribeParameterGroups", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeParameterGroupsResponse({}));
  }

  async describeParameterGroups(request: DescribeParameterGroupsRequest): Promise<DescribeParameterGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeParameterGroupsWithOptions(request, runtime);
  }

  async cloneParameterGroupWithOptions(request: CloneParameterGroupRequest, runtime: $Util.RuntimeOptions): Promise<CloneParameterGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CloneParameterGroupResponse>(await this.doRequest("CloneParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CloneParameterGroupResponse({}));
  }

  async cloneParameterGroup(request: CloneParameterGroupRequest): Promise<CloneParameterGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cloneParameterGroupWithOptions(request, runtime);
  }

  async describeParameterGroupWithOptions(request: DescribeParameterGroupRequest, runtime: $Util.RuntimeOptions): Promise<DescribeParameterGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeParameterGroupResponse>(await this.doRequest("DescribeParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeParameterGroupResponse({}));
  }

  async describeParameterGroup(request: DescribeParameterGroupRequest): Promise<DescribeParameterGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeParameterGroupWithOptions(request, runtime);
  }

  async modifyParameterGroupWithOptions(request: ModifyParameterGroupRequest, runtime: $Util.RuntimeOptions): Promise<ModifyParameterGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyParameterGroupResponse>(await this.doRequest("ModifyParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyParameterGroupResponse({}));
  }

  async modifyParameterGroup(request: ModifyParameterGroupRequest): Promise<ModifyParameterGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyParameterGroupWithOptions(request, runtime);
  }

  async deleteParameterGroupWithOptions(request: DeleteParameterGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteParameterGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteParameterGroupResponse>(await this.doRequest("DeleteParameterGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteParameterGroupResponse({}));
  }

  async deleteParameterGroup(request: DeleteParameterGroupRequest): Promise<DeleteParameterGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteParameterGroupWithOptions(request, runtime);
  }

  async modifySQLCollectorRetentionWithOptions(request: ModifySQLCollectorRetentionRequest, runtime: $Util.RuntimeOptions): Promise<ModifySQLCollectorRetentionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySQLCollectorRetentionResponse>(await this.doRequest("ModifySQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifySQLCollectorRetentionResponse({}));
  }

  async modifySQLCollectorRetention(request: ModifySQLCollectorRetentionRequest): Promise<ModifySQLCollectorRetentionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySQLCollectorRetentionWithOptions(request, runtime);
  }

  async describeSQLCollectorRetentionWithOptions(request: DescribeSQLCollectorRetentionRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLCollectorRetentionResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLCollectorRetentionResponse>(await this.doRequest("DescribeSQLCollectorRetention", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLCollectorRetentionResponse({}));
  }

  async describeSQLCollectorRetention(request: DescribeSQLCollectorRetentionRequest): Promise<DescribeSQLCollectorRetentionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLCollectorRetentionWithOptions(request, runtime);
  }

  async checkInstanceExistWithOptions(request: CheckInstanceExistRequest, runtime: $Util.RuntimeOptions): Promise<CheckInstanceExistResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckInstanceExistResponse>(await this.doRequest("CheckInstanceExist", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CheckInstanceExistResponse({}));
  }

  async checkInstanceExist(request: CheckInstanceExistRequest): Promise<CheckInstanceExistResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkInstanceExistWithOptions(request, runtime);
  }

  async describeLogBackupFilesWithOptions(request: DescribeLogBackupFilesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLogBackupFilesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLogBackupFilesResponse>(await this.doRequest("DescribeLogBackupFiles", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeLogBackupFilesResponse({}));
  }

  async describeLogBackupFiles(request: DescribeLogBackupFilesRequest): Promise<DescribeLogBackupFilesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLogBackupFilesWithOptions(request, runtime);
  }

  /**
   * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
    * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &<Common request parameters>
    * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
    * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
    * > 
    * * Safe mode cannot be switched to normal mode.
    * * This operation is not applicable to SQL Server and MariaDB instances. 
  
   */
  async migrateSecurityIPModeWithOptions(request: MigrateSecurityIPModeRequest, runtime: $Util.RuntimeOptions): Promise<MigrateSecurityIPModeResponse> {
    Util.validateModel(request);
    return $tea.cast<MigrateSecurityIPModeResponse>(await this.doRequest("MigrateSecurityIPMode", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new MigrateSecurityIPModeResponse({}));
  }

  /**
   * MigrateSecurityIPMode You can call this operation to switch a whitelist from normal mode to safe mode.
    * request demo:   * http(s)://rds.aliyuncs.com/? Action=MigrateSecurityIPMode
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &<Common request parameters>
    * description:   * * In normal mode, IP addresses in the whitelist apply to both classic networks and VPCs. In case of security risks, we recommend that you switch to safe mode.
    * * In safe mode, IP addresses in the whitelist are divided into VPC IP addresses and the IP addresses of classic networks and public networks.
    * > 
    * * Safe mode cannot be switched to normal mode.
    * * This operation is not applicable to SQL Server and MariaDB instances. 
  
   */
  async migrateSecurityIPMode(request: MigrateSecurityIPModeRequest): Promise<MigrateSecurityIPModeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.migrateSecurityIPModeWithOptions(request, runtime);
  }

  async switchDBInstanceVpcWithOptions(request: SwitchDBInstanceVpcRequest, runtime: $Util.RuntimeOptions): Promise<SwitchDBInstanceVpcResponse> {
    Util.validateModel(request);
    return $tea.cast<SwitchDBInstanceVpcResponse>(await this.doRequest("SwitchDBInstanceVpc", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new SwitchDBInstanceVpcResponse({}));
  }

  async switchDBInstanceVpc(request: SwitchDBInstanceVpcRequest): Promise<SwitchDBInstanceVpcResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.switchDBInstanceVpcWithOptions(request, runtime);
  }

  async describeCollationTimeZonesWithOptions(request: DescribeCollationTimeZonesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCollationTimeZonesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCollationTimeZonesResponse>(await this.doRequest("DescribeCollationTimeZones", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCollationTimeZonesResponse({}));
  }

  async describeCollationTimeZones(request: DescribeCollationTimeZonesRequest): Promise<DescribeCollationTimeZonesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCollationTimeZonesWithOptions(request, runtime);
  }

  async describeInstanceKeywordsWithOptions(request: DescribeInstanceKeywordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeInstanceKeywordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeInstanceKeywordsResponse>(await this.doRequest("DescribeInstanceKeywords", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeInstanceKeywordsResponse({}));
  }

  async describeInstanceKeywords(request: DescribeInstanceKeywordsRequest): Promise<DescribeInstanceKeywordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeInstanceKeywordsWithOptions(request, runtime);
  }

  async modifyCollationTimeZoneWithOptions(request: ModifyCollationTimeZoneRequest, runtime: $Util.RuntimeOptions): Promise<ModifyCollationTimeZoneResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyCollationTimeZoneResponse>(await this.doRequest("ModifyCollationTimeZone", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyCollationTimeZoneResponse({}));
  }

  async modifyCollationTimeZone(request: ModifyCollationTimeZoneRequest): Promise<ModifyCollationTimeZoneResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyCollationTimeZoneWithOptions(request, runtime);
  }

  async describeBackupDatabaseWithOptions(request: DescribeBackupDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupDatabaseResponse>(await this.doRequest("DescribeBackupDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeBackupDatabaseResponse({}));
  }

  async describeBackupDatabase(request: DescribeBackupDatabaseRequest): Promise<DescribeBackupDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupDatabaseWithOptions(request, runtime);
  }

  async copyDatabaseBetweenInstancesWithOptions(request: CopyDatabaseBetweenInstancesRequest, runtime: $Util.RuntimeOptions): Promise<CopyDatabaseBetweenInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<CopyDatabaseBetweenInstancesResponse>(await this.doRequest("CopyDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CopyDatabaseBetweenInstancesResponse({}));
  }

  async copyDatabaseBetweenInstances(request: CopyDatabaseBetweenInstancesRequest): Promise<CopyDatabaseBetweenInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.copyDatabaseBetweenInstancesWithOptions(request, runtime);
  }

  async recoveryDBInstanceWithOptions(request: RecoveryDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RecoveryDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RecoveryDBInstanceResponse>(await this.doRequest("RecoveryDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RecoveryDBInstanceResponse({}));
  }

  async recoveryDBInstance(request: RecoveryDBInstanceRequest): Promise<RecoveryDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.recoveryDBInstanceWithOptions(request, runtime);
  }

  async describeAvailableResourceWithOptions(request: DescribeAvailableResourceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAvailableResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAvailableResourceResponse>(await this.doRequest("DescribeAvailableResource", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAvailableResourceResponse({}));
  }

  async describeAvailableResource(request: DescribeAvailableResourceRequest): Promise<DescribeAvailableResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAvailableResourceWithOptions(request, runtime);
  }

  async destroyDBInstanceWithOptions(request: DestroyDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DestroyDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DestroyDBInstanceResponse>(await this.doRequest("DestroyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DestroyDBInstanceResponse({}));
  }

  async destroyDBInstance(request: DestroyDBInstanceRequest): Promise<DestroyDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.destroyDBInstanceWithOptions(request, runtime);
  }

  async modifyReadonlyInstanceDelayReplicationTimeWithOptions(request: ModifyReadonlyInstanceDelayReplicationTimeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyReadonlyInstanceDelayReplicationTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyReadonlyInstanceDelayReplicationTimeResponse>(await this.doRequest("ModifyReadonlyInstanceDelayReplicationTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyReadonlyInstanceDelayReplicationTimeResponse({}));
  }

  async modifyReadonlyInstanceDelayReplicationTime(request: ModifyReadonlyInstanceDelayReplicationTimeRequest): Promise<ModifyReadonlyInstanceDelayReplicationTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyReadonlyInstanceDelayReplicationTimeWithOptions(request, runtime);
  }

  async describeDBInstanceProxyConfigurationWithOptions(request: DescribeDBInstanceProxyConfigurationRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceProxyConfigurationResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceProxyConfigurationResponse>(await this.doRequest("DescribeDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceProxyConfigurationResponse({}));
  }

  async describeDBInstanceProxyConfiguration(request: DescribeDBInstanceProxyConfigurationRequest): Promise<DescribeDBInstanceProxyConfigurationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceProxyConfigurationWithOptions(request, runtime);
  }

  async createOnlineDatabaseTaskWithOptions(request: CreateOnlineDatabaseTaskRequest, runtime: $Util.RuntimeOptions): Promise<CreateOnlineDatabaseTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateOnlineDatabaseTaskResponse>(await this.doRequest("CreateOnlineDatabaseTask", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateOnlineDatabaseTaskResponse({}));
  }

  async createOnlineDatabaseTask(request: CreateOnlineDatabaseTaskRequest): Promise<CreateOnlineDatabaseTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createOnlineDatabaseTaskWithOptions(request, runtime);
  }

  async upgradeDBInstanceKernelVersionWithOptions(request: UpgradeDBInstanceKernelVersionRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeDBInstanceKernelVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeDBInstanceKernelVersionResponse>(await this.doRequest("UpgradeDBInstanceKernelVersion", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new UpgradeDBInstanceKernelVersionResponse({}));
  }

  async upgradeDBInstanceKernelVersion(request: UpgradeDBInstanceKernelVersionRequest): Promise<UpgradeDBInstanceKernelVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeDBInstanceKernelVersionWithOptions(request, runtime);
  }

  async modifyDBInstanceProxyConfigurationWithOptions(request: ModifyDBInstanceProxyConfigurationRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceProxyConfigurationResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceProxyConfigurationResponse>(await this.doRequest("ModifyDBInstanceProxyConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceProxyConfigurationResponse({}));
  }

  async modifyDBInstanceProxyConfiguration(request: ModifyDBInstanceProxyConfigurationRequest): Promise<ModifyDBInstanceProxyConfigurationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceProxyConfigurationWithOptions(request, runtime);
  }

  async describeSecurityGroupConfigurationWithOptions(request: DescribeSecurityGroupConfigurationRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSecurityGroupConfigurationResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSecurityGroupConfigurationResponse>(await this.doRequest("DescribeSecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSecurityGroupConfigurationResponse({}));
  }

  async describeSecurityGroupConfiguration(request: DescribeSecurityGroupConfigurationRequest): Promise<DescribeSecurityGroupConfigurationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSecurityGroupConfigurationWithOptions(request, runtime);
  }

  async modifySecurityGroupConfigurationWithOptions(request: ModifySecurityGroupConfigurationRequest, runtime: $Util.RuntimeOptions): Promise<ModifySecurityGroupConfigurationResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySecurityGroupConfigurationResponse>(await this.doRequest("ModifySecurityGroupConfiguration", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifySecurityGroupConfigurationResponse({}));
  }

  async modifySecurityGroupConfiguration(request: ModifySecurityGroupConfigurationRequest): Promise<ModifySecurityGroupConfigurationResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySecurityGroupConfigurationWithOptions(request, runtime);
  }

  async describeOssDownloadsForSQLServerWithOptions(request: DescribeOssDownloadsForSQLServerRequest, runtime: $Util.RuntimeOptions): Promise<DescribeOssDownloadsForSQLServerResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeOssDownloadsForSQLServerResponse>(await this.doRequest("DescribeOssDownloadsForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeOssDownloadsForSQLServerResponse({}));
  }

  async describeOssDownloadsForSQLServer(request: DescribeOssDownloadsForSQLServerRequest): Promise<DescribeOssDownloadsForSQLServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeOssDownloadsForSQLServerWithOptions(request, runtime);
  }

  async describeMigrateTasksForSQLServerWithOptions(request: DescribeMigrateTasksForSQLServerRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMigrateTasksForSQLServerResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMigrateTasksForSQLServerResponse>(await this.doRequest("DescribeMigrateTasksForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeMigrateTasksForSQLServerResponse({}));
  }

  async describeMigrateTasksForSQLServer(request: DescribeMigrateTasksForSQLServerRequest): Promise<DescribeMigrateTasksForSQLServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMigrateTasksForSQLServerWithOptions(request, runtime);
  }

  async createMigrateTaskForSQLServerWithOptions(request: CreateMigrateTaskForSQLServerRequest, runtime: $Util.RuntimeOptions): Promise<CreateMigrateTaskForSQLServerResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMigrateTaskForSQLServerResponse>(await this.doRequest("CreateMigrateTaskForSQLServer", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateMigrateTaskForSQLServerResponse({}));
  }

  async createMigrateTaskForSQLServer(request: CreateMigrateTaskForSQLServerRequest): Promise<CreateMigrateTaskForSQLServerResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMigrateTaskForSQLServerWithOptions(request, runtime);
  }

  async createMigrateTaskWithOptions(request: CreateMigrateTaskRequest, runtime: $Util.RuntimeOptions): Promise<CreateMigrateTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMigrateTaskResponse>(await this.doRequest("CreateMigrateTask", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateMigrateTaskResponse({}));
  }

  async createMigrateTask(request: CreateMigrateTaskRequest): Promise<CreateMigrateTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMigrateTaskWithOptions(request, runtime);
  }

  async describeOssDownloadsWithOptions(request: DescribeOssDownloadsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeOssDownloadsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeOssDownloadsResponse>(await this.doRequest("DescribeOssDownloads", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeOssDownloadsResponse({}));
  }

  async describeOssDownloads(request: DescribeOssDownloadsRequest): Promise<DescribeOssDownloadsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeOssDownloadsWithOptions(request, runtime);
  }

  async describeMigrateTasksWithOptions(request: DescribeMigrateTasksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMigrateTasksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMigrateTasksResponse>(await this.doRequest("DescribeMigrateTasks", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeMigrateTasksResponse({}));
  }

  async describeMigrateTasks(request: DescribeMigrateTasksRequest): Promise<DescribeMigrateTasksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMigrateTasksWithOptions(request, runtime);
  }

  async copyDatabaseWithOptions(request: CopyDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<CopyDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<CopyDatabaseResponse>(await this.doRequest("CopyDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CopyDatabaseResponse({}));
  }

  async copyDatabase(request: CopyDatabaseRequest): Promise<CopyDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.copyDatabaseWithOptions(request, runtime);
  }

  async resetAccountWithOptions(request: ResetAccountRequest, runtime: $Util.RuntimeOptions): Promise<ResetAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<ResetAccountResponse>(await this.doRequest("ResetAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ResetAccountResponse({}));
  }

  async resetAccount(request: ResetAccountRequest): Promise<ResetAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resetAccountWithOptions(request, runtime);
  }

  async describeDBInstancesAsCsvWithOptions(request: DescribeDBInstancesAsCsvRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesAsCsvResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesAsCsvResponse>(await this.doRequest("DescribeDBInstancesAsCsv", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesAsCsvResponse({}));
  }

  async describeDBInstancesAsCsv(request: DescribeDBInstancesAsCsvRequest): Promise<DescribeDBInstancesAsCsvResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesAsCsvWithOptions(request, runtime);
  }

  async modifyDBInstanceNetworkExpireTimeWithOptions(request: ModifyDBInstanceNetworkExpireTimeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceNetworkExpireTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceNetworkExpireTimeResponse>(await this.doRequest("ModifyDBInstanceNetworkExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceNetworkExpireTimeResponse({}));
  }

  async modifyDBInstanceNetworkExpireTime(request: ModifyDBInstanceNetworkExpireTimeRequest): Promise<ModifyDBInstanceNetworkExpireTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceNetworkExpireTimeWithOptions(request, runtime);
  }

  async modifyResourceGroupWithOptions(request: ModifyResourceGroupRequest, runtime: $Util.RuntimeOptions): Promise<ModifyResourceGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyResourceGroupResponse>(await this.doRequest("ModifyResourceGroup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyResourceGroupResponse({}));
  }

  async modifyResourceGroup(request: ModifyResourceGroupRequest): Promise<ModifyResourceGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyResourceGroupWithOptions(request, runtime);
  }

  async describeRenewalPriceWithOptions(request: DescribeRenewalPriceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRenewalPriceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRenewalPriceResponse>(await this.doRequest("DescribeRenewalPrice", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeRenewalPriceResponse({}));
  }

  async describeRenewalPrice(request: DescribeRenewalPriceRequest): Promise<DescribeRenewalPriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRenewalPriceWithOptions(request, runtime);
  }

  async describePriceWithOptions(request: DescribePriceRequest, runtime: $Util.RuntimeOptions): Promise<DescribePriceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePriceResponse>(await this.doRequest("DescribePrice", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribePriceResponse({}));
  }

  async describePrice(request: DescribePriceRequest): Promise<DescribePriceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePriceWithOptions(request, runtime);
  }

  async renewInstanceWithOptions(request: RenewInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RenewInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RenewInstanceResponse>(await this.doRequest("RenewInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RenewInstanceResponse({}));
  }

  async renewInstance(request: RenewInstanceRequest): Promise<RenewInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.renewInstanceWithOptions(request, runtime);
  }

  async checkRecoveryConditionsWithOptions(request: CheckRecoveryConditionsRequest, runtime: $Util.RuntimeOptions): Promise<CheckRecoveryConditionsResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckRecoveryConditionsResponse>(await this.doRequest("CheckRecoveryConditions", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CheckRecoveryConditionsResponse({}));
  }

  async checkRecoveryConditions(request: CheckRecoveryConditionsRequest): Promise<CheckRecoveryConditionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkRecoveryConditionsWithOptions(request, runtime);
  }

  async modifyInstanceAutoRenewalAttributeWithOptions(request: ModifyInstanceAutoRenewalAttributeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyInstanceAutoRenewalAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyInstanceAutoRenewalAttributeResponse>(await this.doRequest("ModifyInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyInstanceAutoRenewalAttributeResponse({}));
  }

  async modifyInstanceAutoRenewalAttribute(request: ModifyInstanceAutoRenewalAttributeRequest): Promise<ModifyInstanceAutoRenewalAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyInstanceAutoRenewalAttributeWithOptions(request, runtime);
  }

  async describeInstanceAutoRenewalAttributeWithOptions(request: DescribeInstanceAutoRenewalAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeInstanceAutoRenewalAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeInstanceAutoRenewalAttributeResponse>(await this.doRequest("DescribeInstanceAutoRenewalAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeInstanceAutoRenewalAttributeResponse({}));
  }

  async describeInstanceAutoRenewalAttribute(request: DescribeInstanceAutoRenewalAttributeRequest): Promise<DescribeInstanceAutoRenewalAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeInstanceAutoRenewalAttributeWithOptions(request, runtime);
  }

  async releaseReadWriteSplittingConnectionWithOptions(request: ReleaseReadWriteSplittingConnectionRequest, runtime: $Util.RuntimeOptions): Promise<ReleaseReadWriteSplittingConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<ReleaseReadWriteSplittingConnectionResponse>(await this.doRequest("ReleaseReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ReleaseReadWriteSplittingConnectionResponse({}));
  }

  async releaseReadWriteSplittingConnection(request: ReleaseReadWriteSplittingConnectionRequest): Promise<ReleaseReadWriteSplittingConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.releaseReadWriteSplittingConnectionWithOptions(request, runtime);
  }

  async modifyReadWriteSplittingConnectionWithOptions(request: ModifyReadWriteSplittingConnectionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyReadWriteSplittingConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyReadWriteSplittingConnectionResponse>(await this.doRequest("ModifyReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyReadWriteSplittingConnectionResponse({}));
  }

  async modifyReadWriteSplittingConnection(request: ModifyReadWriteSplittingConnectionRequest): Promise<ModifyReadWriteSplittingConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyReadWriteSplittingConnectionWithOptions(request, runtime);
  }

  async calculateDBInstanceWeightWithOptions(request: CalculateDBInstanceWeightRequest, runtime: $Util.RuntimeOptions): Promise<CalculateDBInstanceWeightResponse> {
    Util.validateModel(request);
    return $tea.cast<CalculateDBInstanceWeightResponse>(await this.doRequest("CalculateDBInstanceWeight", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CalculateDBInstanceWeightResponse({}));
  }

  async calculateDBInstanceWeight(request: CalculateDBInstanceWeightRequest): Promise<CalculateDBInstanceWeightResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.calculateDBInstanceWeightWithOptions(request, runtime);
  }

  async allocateReadWriteSplittingConnectionWithOptions(request: AllocateReadWriteSplittingConnectionRequest, runtime: $Util.RuntimeOptions): Promise<AllocateReadWriteSplittingConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateReadWriteSplittingConnectionResponse>(await this.doRequest("AllocateReadWriteSplittingConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new AllocateReadWriteSplittingConnectionResponse({}));
  }

  async allocateReadWriteSplittingConnection(request: AllocateReadWriteSplittingConnectionRequest): Promise<AllocateReadWriteSplittingConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateReadWriteSplittingConnectionWithOptions(request, runtime);
  }

  async modifyDBInstancePayTypeWithOptions(request: ModifyDBInstancePayTypeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstancePayTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstancePayTypeResponse>(await this.doRequest("ModifyDBInstancePayType", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstancePayTypeResponse({}));
  }

  async modifyDBInstancePayType(request: ModifyDBInstancePayTypeRequest): Promise<ModifyDBInstancePayTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstancePayTypeWithOptions(request, runtime);
  }

  async describeCharacterSetNameWithOptions(request: DescribeCharacterSetNameRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCharacterSetNameResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCharacterSetNameResponse>(await this.doRequest("DescribeCharacterSetName", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeCharacterSetNameResponse({}));
  }

  async describeCharacterSetName(request: DescribeCharacterSetNameRequest): Promise<DescribeCharacterSetNameResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCharacterSetNameWithOptions(request, runtime);
  }

  async deleteBackupWithOptions(request: DeleteBackupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteBackupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteBackupResponse>(await this.doRequest("DeleteBackup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteBackupResponse({}));
  }

  async deleteBackup(request: DeleteBackupRequest): Promise<DeleteBackupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteBackupWithOptions(request, runtime);
  }

  async describeDiagnosticReportListWithOptions(request: DescribeDiagnosticReportListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDiagnosticReportListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDiagnosticReportListResponse>(await this.doRequest("DescribeDiagnosticReportList", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDiagnosticReportListResponse({}));
  }

  async describeDiagnosticReportList(request: DescribeDiagnosticReportListRequest): Promise<DescribeDiagnosticReportListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDiagnosticReportListWithOptions(request, runtime);
  }

  async createDiagnosticReportWithOptions(request: CreateDiagnosticReportRequest, runtime: $Util.RuntimeOptions): Promise<CreateDiagnosticReportResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDiagnosticReportResponse>(await this.doRequest("CreateDiagnosticReport", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDiagnosticReportResponse({}));
  }

  async createDiagnosticReport(request: CreateDiagnosticReportRequest): Promise<CreateDiagnosticReportResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDiagnosticReportWithOptions(request, runtime);
  }

  async cloneDBInstanceWithOptions(request: CloneDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CloneDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CloneDBInstanceResponse>(await this.doRequest("CloneDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CloneDBInstanceResponse({}));
  }

  async cloneDBInstance(request: CloneDBInstanceRequest): Promise<CloneDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cloneDBInstanceWithOptions(request, runtime);
  }

  /**
   * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeTags
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 调用本接口时限制条件如下：
    * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
    * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
  
   */
  async describeTagsWithOptions(request: DescribeTagsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTagsResponse>(await this.doRequest("DescribeTags", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeTagsResponse({}));
  }

  /**
   * DescribeTags 调用DescribeTags接口查询RDS实例的标签。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=DescribeTags
    * &RegionId=cn-hangzhou
    * &<公共请求参数>
    * ```
    * description:   * 调用本接口时限制条件如下：
    * * 如果传入指定实例ID，则查询该实例下所有标签，其他过滤条件失效；
    * * 若查询标签时仅传入标签键（TagKey），未传入标签值（TagValue），则返回所有符合标签键条件的结果。若同时传入标签键和标签值，则返回两个条件都符合的结果。
  
   */
  async describeTags(request: DescribeTagsRequest): Promise<DescribeTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTagsWithOptions(request, runtime);
  }

  async describeDBInstanceByTagsWithOptions(request: DescribeDBInstanceByTagsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceByTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceByTagsResponse>(await this.doRequest("DescribeDBInstanceByTags", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceByTagsResponse({}));
  }

  async describeDBInstanceByTags(request: DescribeDBInstanceByTagsRequest): Promise<DescribeDBInstanceByTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceByTagsWithOptions(request, runtime);
  }

  async revokeOperatorPermissionWithOptions(request: RevokeOperatorPermissionRequest, runtime: $Util.RuntimeOptions): Promise<RevokeOperatorPermissionResponse> {
    Util.validateModel(request);
    return $tea.cast<RevokeOperatorPermissionResponse>(await this.doRequest("RevokeOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RevokeOperatorPermissionResponse({}));
  }

  async revokeOperatorPermission(request: RevokeOperatorPermissionRequest): Promise<RevokeOperatorPermissionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.revokeOperatorPermissionWithOptions(request, runtime);
  }

  async modifyDBInstanceTDEWithOptions(request: ModifyDBInstanceTDERequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceTDEResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceTDEResponse>(await this.doRequest("ModifyDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceTDEResponse({}));
  }

  async modifyDBInstanceTDE(request: ModifyDBInstanceTDERequest): Promise<ModifyDBInstanceTDEResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceTDEWithOptions(request, runtime);
  }

  async modifyDBInstanceSSLWithOptions(request: ModifyDBInstanceSSLRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceSSLResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceSSLResponse>(await this.doRequest("ModifyDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceSSLResponse({}));
  }

  async modifyDBInstanceSSL(request: ModifyDBInstanceSSLRequest): Promise<ModifyDBInstanceSSLResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceSSLWithOptions(request, runtime);
  }

  async grantOperatorPermissionWithOptions(request: GrantOperatorPermissionRequest, runtime: $Util.RuntimeOptions): Promise<GrantOperatorPermissionResponse> {
    Util.validateModel(request);
    return $tea.cast<GrantOperatorPermissionResponse>(await this.doRequest("GrantOperatorPermission", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new GrantOperatorPermissionResponse({}));
  }

  async grantOperatorPermission(request: GrantOperatorPermissionRequest): Promise<GrantOperatorPermissionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.grantOperatorPermissionWithOptions(request, runtime);
  }

  async describeDBInstanceTDEWithOptions(request: DescribeDBInstanceTDERequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceTDEResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceTDEResponse>(await this.doRequest("DescribeDBInstanceTDE", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceTDEResponse({}));
  }

  async describeDBInstanceTDE(request: DescribeDBInstanceTDERequest): Promise<DescribeDBInstanceTDEResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceTDEWithOptions(request, runtime);
  }

  async describeDBInstanceSSLWithOptions(request: DescribeDBInstanceSSLRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceSSLResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceSSLResponse>(await this.doRequest("DescribeDBInstanceSSL", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceSSLResponse({}));
  }

  async describeDBInstanceSSL(request: DescribeDBInstanceSSLRequest): Promise<DescribeDBInstanceSSLResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceSSLWithOptions(request, runtime);
  }

  async describeSQLLogFilesWithOptions(request: DescribeSQLLogFilesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLLogFilesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLLogFilesResponse>(await this.doRequest("DescribeSQLLogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLLogFilesResponse({}));
  }

  async describeSQLLogFiles(request: DescribeSQLLogFilesRequest): Promise<DescribeSQLLogFilesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLLogFilesWithOptions(request, runtime);
  }

  async modifyDBInstanceMonitorWithOptions(request: ModifyDBInstanceMonitorRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceMonitorResponse>(await this.doRequest("ModifyDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceMonitorResponse({}));
  }

  async modifyDBInstanceMonitor(request: ModifyDBInstanceMonitorRequest): Promise<ModifyDBInstanceMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceMonitorWithOptions(request, runtime);
  }

  async switchDBInstanceHAWithOptions(request: SwitchDBInstanceHARequest, runtime: $Util.RuntimeOptions): Promise<SwitchDBInstanceHAResponse> {
    Util.validateModel(request);
    return $tea.cast<SwitchDBInstanceHAResponse>(await this.doRequest("SwitchDBInstanceHA", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new SwitchDBInstanceHAResponse({}));
  }

  async switchDBInstanceHA(request: SwitchDBInstanceHARequest): Promise<SwitchDBInstanceHAResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.switchDBInstanceHAWithOptions(request, runtime);
  }

  async describeDBInstanceMonitorWithOptions(request: DescribeDBInstanceMonitorRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceMonitorResponse>(await this.doRequest("DescribeDBInstanceMonitor", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceMonitorResponse({}));
  }

  async describeDBInstanceMonitor(request: DescribeDBInstanceMonitorRequest): Promise<DescribeDBInstanceMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceMonitorWithOptions(request, runtime);
  }

  async describeSQLCollectorPolicyWithOptions(request: DescribeSQLCollectorPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLCollectorPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLCollectorPolicyResponse>(await this.doRequest("DescribeSQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLCollectorPolicyResponse({}));
  }

  async describeSQLCollectorPolicy(request: DescribeSQLCollectorPolicyRequest): Promise<DescribeSQLCollectorPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLCollectorPolicyWithOptions(request, runtime);
  }

  async modifySQLCollectorPolicyWithOptions(request: ModifySQLCollectorPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifySQLCollectorPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySQLCollectorPolicyResponse>(await this.doRequest("ModifySQLCollectorPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifySQLCollectorPolicyResponse({}));
  }

  async modifySQLCollectorPolicy(request: ModifySQLCollectorPolicyRequest): Promise<ModifySQLCollectorPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySQLCollectorPolicyWithOptions(request, runtime);
  }

  async modifyDBInstanceHAConfigWithOptions(request: ModifyDBInstanceHAConfigRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceHAConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceHAConfigResponse>(await this.doRequest("ModifyDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceHAConfigResponse({}));
  }

  async modifyDBInstanceHAConfig(request: ModifyDBInstanceHAConfigRequest): Promise<ModifyDBInstanceHAConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceHAConfigWithOptions(request, runtime);
  }

  async describeDBInstanceHAConfigWithOptions(request: DescribeDBInstanceHAConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceHAConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceHAConfigResponse>(await this.doRequest("DescribeDBInstanceHAConfig", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceHAConfigResponse({}));
  }

  async describeDBInstanceHAConfig(request: DescribeDBInstanceHAConfigRequest): Promise<DescribeDBInstanceHAConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceHAConfigWithOptions(request, runtime);
  }

  async describeSQLReportsWithOptions(request: DescribeSQLReportsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLReportsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLReportsResponse>(await this.doRequest("DescribeSQLReports", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLReportsResponse({}));
  }

  async describeSQLReports(request: DescribeSQLReportsRequest): Promise<DescribeSQLReportsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLReportsWithOptions(request, runtime);
  }

  async describeDBInstanceIPArrayListWithOptions(request: DescribeDBInstanceIPArrayListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceIPArrayListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceIPArrayListResponse>(await this.doRequest("DescribeDBInstanceIPArrayList", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceIPArrayListResponse({}));
  }

  async describeDBInstanceIPArrayList(request: DescribeDBInstanceIPArrayListRequest): Promise<DescribeDBInstanceIPArrayListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceIPArrayListWithOptions(request, runtime);
  }

  async describeSQLLogReportListWithOptions(request: DescribeSQLLogReportListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLLogReportListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLLogReportListResponse>(await this.doRequest("DescribeSQLLogReportList", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLLogReportListResponse({}));
  }

  async describeSQLLogReportList(request: DescribeSQLLogReportListRequest): Promise<DescribeSQLLogReportListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLLogReportListWithOptions(request, runtime);
  }

  async resetAccountForPGWithOptions(request: ResetAccountForPGRequest, runtime: $Util.RuntimeOptions): Promise<ResetAccountForPGResponse> {
    Util.validateModel(request);
    return $tea.cast<ResetAccountForPGResponse>(await this.doRequest("ResetAccountForPG", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ResetAccountForPGResponse({}));
  }

  async resetAccountForPG(request: ResetAccountForPGRequest): Promise<ResetAccountForPGResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resetAccountForPGWithOptions(request, runtime);
  }

  async upgradeDBInstanceEngineVersionWithOptions(request: UpgradeDBInstanceEngineVersionRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeDBInstanceEngineVersionResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeDBInstanceEngineVersionResponse>(await this.doRequest("UpgradeDBInstanceEngineVersion", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new UpgradeDBInstanceEngineVersionResponse({}));
  }

  async upgradeDBInstanceEngineVersion(request: UpgradeDBInstanceEngineVersionRequest): Promise<UpgradeDBInstanceEngineVersionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeDBInstanceEngineVersionWithOptions(request, runtime);
  }

  async revokeAccountPrivilegeWithOptions(request: RevokeAccountPrivilegeRequest, runtime: $Util.RuntimeOptions): Promise<RevokeAccountPrivilegeResponse> {
    Util.validateModel(request);
    return $tea.cast<RevokeAccountPrivilegeResponse>(await this.doRequest("RevokeAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RevokeAccountPrivilegeResponse({}));
  }

  async revokeAccountPrivilege(request: RevokeAccountPrivilegeRequest): Promise<RevokeAccountPrivilegeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.revokeAccountPrivilegeWithOptions(request, runtime);
  }

  async restartDBInstanceWithOptions(request: RestartDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<RestartDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<RestartDBInstanceResponse>(await this.doRequest("RestartDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RestartDBInstanceResponse({}));
  }

  async restartDBInstance(request: RestartDBInstanceRequest): Promise<RestartDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.restartDBInstanceWithOptions(request, runtime);
  }

  async resetAccountPasswordWithOptions(request: ResetAccountPasswordRequest, runtime: $Util.RuntimeOptions): Promise<ResetAccountPasswordResponse> {
    Util.validateModel(request);
    return $tea.cast<ResetAccountPasswordResponse>(await this.doRequest("ResetAccountPassword", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ResetAccountPasswordResponse({}));
  }

  async resetAccountPassword(request: ResetAccountPasswordRequest): Promise<ResetAccountPasswordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resetAccountPasswordWithOptions(request, runtime);
  }

  /**
   * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &Tag.1.key=test
    * &<公共请求参数>
    * ```
    * description:   * 限制条件如下：
    * * 单次最多支持解绑10个标签；
    * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
    * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
    * * 必须传入至少一组标签或者单独的一个标签键。
  
   */
  async removeTagsFromResourceWithOptions(request: RemoveTagsFromResourceRequest, runtime: $Util.RuntimeOptions): Promise<RemoveTagsFromResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveTagsFromResourceResponse>(await this.doRequest("RemoveTagsFromResource", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new RemoveTagsFromResourceResponse({}));
  }

  /**
   * RemoveTagsFromResource 调用RemoveTagsFromResource接口解绑标签。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=RemoveTagsFromResource
    * &DBInstanceId=rm-uf6wjk5xxxxxxx
    * &RegionId=cn-hangzhou
    * &Tag.1.key=test
    * &<公共请求参数>
    * ```
    * description:   * 限制条件如下：
    * * 单次最多支持解绑10个标签；
    * * 若一个标签所绑定的实例全都解绑，则该标签自动删除；
    * * 若解绑标签时仅传入标签键（TagKey），未传入标签值（TagValue），则解绑所有符合标签键条件的标签。
    * * 必须传入至少一组标签或者单独的一个标签键。
  
   */
  async removeTagsFromResource(request: RemoveTagsFromResourceRequest): Promise<RemoveTagsFromResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeTagsFromResourceWithOptions(request, runtime);
  }

  async purgeDBInstanceLogWithOptions(request: PurgeDBInstanceLogRequest, runtime: $Util.RuntimeOptions): Promise<PurgeDBInstanceLogResponse> {
    Util.validateModel(request);
    return $tea.cast<PurgeDBInstanceLogResponse>(await this.doRequest("PurgeDBInstanceLog", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new PurgeDBInstanceLogResponse({}));
  }

  async purgeDBInstanceLog(request: PurgeDBInstanceLogRequest): Promise<PurgeDBInstanceLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.purgeDBInstanceLogWithOptions(request, runtime);
  }

  async modifySecurityIpsWithOptions(request: ModifySecurityIpsRequest, runtime: $Util.RuntimeOptions): Promise<ModifySecurityIpsResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifySecurityIpsResponse>(await this.doRequest("ModifySecurityIps", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifySecurityIpsResponse({}));
  }

  async modifySecurityIps(request: ModifySecurityIpsRequest): Promise<ModifySecurityIpsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifySecurityIpsWithOptions(request, runtime);
  }

  async modifyParameterWithOptions(request: ModifyParameterRequest, runtime: $Util.RuntimeOptions): Promise<ModifyParameterResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyParameterResponse>(await this.doRequest("ModifyParameter", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyParameterResponse({}));
  }

  async modifyParameter(request: ModifyParameterRequest): Promise<ModifyParameterResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyParameterWithOptions(request, runtime);
  }

  async modifyDBInstanceSpecWithOptions(request: ModifyDBInstanceSpecRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceSpecResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceSpecResponse>(await this.doRequest("ModifyDBInstanceSpec", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceSpecResponse({}));
  }

  async modifyDBInstanceSpec(request: ModifyDBInstanceSpecRequest): Promise<ModifyDBInstanceSpecResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceSpecWithOptions(request, runtime);
  }

  async modifyDBInstanceMaintainTimeWithOptions(request: ModifyDBInstanceMaintainTimeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceMaintainTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceMaintainTimeResponse>(await this.doRequest("ModifyDBInstanceMaintainTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceMaintainTimeResponse({}));
  }

  async modifyDBInstanceMaintainTime(request: ModifyDBInstanceMaintainTimeRequest): Promise<ModifyDBInstanceMaintainTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceMaintainTimeWithOptions(request, runtime);
  }

  async modifyDBInstanceDescriptionWithOptions(request: ModifyDBInstanceDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceDescriptionResponse>(await this.doRequest("ModifyDBInstanceDescription", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceDescriptionResponse({}));
  }

  async modifyDBInstanceDescription(request: ModifyDBInstanceDescriptionRequest): Promise<ModifyDBInstanceDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceDescriptionWithOptions(request, runtime);
  }

  async modifyDBDescriptionWithOptions(request: ModifyDBDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBDescriptionResponse>(await this.doRequest("ModifyDBDescription", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBDescriptionResponse({}));
  }

  async modifyDBDescription(request: ModifyDBDescriptionRequest): Promise<ModifyDBDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBDescriptionWithOptions(request, runtime);
  }

  async modifyBackupPolicyWithOptions(request: ModifyBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyBackupPolicyResponse>(await this.doRequest("ModifyBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyBackupPolicyResponse({}));
  }

  async modifyBackupPolicy(request: ModifyBackupPolicyRequest): Promise<ModifyBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyBackupPolicyWithOptions(request, runtime);
  }

  async modifyAccountDescriptionWithOptions(request: ModifyAccountDescriptionRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAccountDescriptionResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAccountDescriptionResponse>(await this.doRequest("ModifyAccountDescription", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyAccountDescriptionResponse({}));
  }

  async modifyAccountDescription(request: ModifyAccountDescriptionRequest): Promise<ModifyAccountDescriptionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAccountDescriptionWithOptions(request, runtime);
  }

  async migrateToOtherZoneWithOptions(request: MigrateToOtherZoneRequest, runtime: $Util.RuntimeOptions): Promise<MigrateToOtherZoneResponse> {
    Util.validateModel(request);
    return $tea.cast<MigrateToOtherZoneResponse>(await this.doRequest("MigrateToOtherZone", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new MigrateToOtherZoneResponse({}));
  }

  async migrateToOtherZone(request: MigrateToOtherZoneRequest): Promise<MigrateToOtherZoneResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.migrateToOtherZoneWithOptions(request, runtime);
  }

  async importDatabaseBetweenInstancesWithOptions(request: ImportDatabaseBetweenInstancesRequest, runtime: $Util.RuntimeOptions): Promise<ImportDatabaseBetweenInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<ImportDatabaseBetweenInstancesResponse>(await this.doRequest("ImportDatabaseBetweenInstances", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ImportDatabaseBetweenInstancesResponse({}));
  }

  async importDatabaseBetweenInstances(request: ImportDatabaseBetweenInstancesRequest): Promise<ImportDatabaseBetweenInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.importDatabaseBetweenInstancesWithOptions(request, runtime);
  }

  async grantAccountPrivilegeWithOptions(request: GrantAccountPrivilegeRequest, runtime: $Util.RuntimeOptions): Promise<GrantAccountPrivilegeResponse> {
    Util.validateModel(request);
    return $tea.cast<GrantAccountPrivilegeResponse>(await this.doRequest("GrantAccountPrivilege", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new GrantAccountPrivilegeResponse({}));
  }

  async grantAccountPrivilege(request: GrantAccountPrivilegeRequest): Promise<GrantAccountPrivilegeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.grantAccountPrivilegeWithOptions(request, runtime);
  }

  async describeTasksWithOptions(request: DescribeTasksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTasksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTasksResponse>(await this.doRequest("DescribeTasks", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeTasksResponse({}));
  }

  async describeTasks(request: DescribeTasksRequest): Promise<DescribeTasksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTasksWithOptions(request, runtime);
  }

  async describeSQLLogReportsWithOptions(request: DescribeSQLLogReportsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLLogReportsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLLogReportsResponse>(await this.doRequest("DescribeSQLLogReports", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLLogReportsResponse({}));
  }

  async describeSQLLogReports(request: DescribeSQLLogReportsRequest): Promise<DescribeSQLLogReportsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLLogReportsWithOptions(request, runtime);
  }

  async describeSQLLogRecordsWithOptions(request: DescribeSQLLogRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSQLLogRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSQLLogRecordsResponse>(await this.doRequest("DescribeSQLLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSQLLogRecordsResponse({}));
  }

  async describeSQLLogRecords(request: DescribeSQLLogRecordsRequest): Promise<DescribeSQLLogRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSQLLogRecordsWithOptions(request, runtime);
  }

  async describeSlowLogsWithOptions(request: DescribeSlowLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSlowLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSlowLogsResponse>(await this.doRequest("DescribeSlowLogs", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSlowLogsResponse({}));
  }

  async describeSlowLogs(request: DescribeSlowLogsRequest): Promise<DescribeSlowLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSlowLogsWithOptions(request, runtime);
  }

  async describeSlowLogRecordsWithOptions(request: DescribeSlowLogRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSlowLogRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSlowLogRecordsResponse>(await this.doRequest("DescribeSlowLogRecords", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeSlowLogRecordsResponse({}));
  }

  async describeSlowLogRecords(request: DescribeSlowLogRecordsRequest): Promise<DescribeSlowLogRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSlowLogRecordsWithOptions(request, runtime);
  }

  async describeResourceUsageWithOptions(request: DescribeResourceUsageRequest, runtime: $Util.RuntimeOptions): Promise<DescribeResourceUsageResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeResourceUsageResponse>(await this.doRequest("DescribeResourceUsage", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeResourceUsageResponse({}));
  }

  async describeResourceUsage(request: DescribeResourceUsageRequest): Promise<DescribeResourceUsageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeResourceUsageWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeParameterTemplatesWithOptions(request: DescribeParameterTemplatesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeParameterTemplatesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeParameterTemplatesResponse>(await this.doRequest("DescribeParameterTemplates", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeParameterTemplatesResponse({}));
  }

  async describeParameterTemplates(request: DescribeParameterTemplatesRequest): Promise<DescribeParameterTemplatesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeParameterTemplatesWithOptions(request, runtime);
  }

  async describeParametersWithOptions(request: DescribeParametersRequest, runtime: $Util.RuntimeOptions): Promise<DescribeParametersResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeParametersResponse>(await this.doRequest("DescribeParameters", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeParametersResponse({}));
  }

  async describeParameters(request: DescribeParametersRequest): Promise<DescribeParametersResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeParametersWithOptions(request, runtime);
  }

  async describeModifyParameterLogWithOptions(request: DescribeModifyParameterLogRequest, runtime: $Util.RuntimeOptions): Promise<DescribeModifyParameterLogResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeModifyParameterLogResponse>(await this.doRequest("DescribeModifyParameterLog", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeModifyParameterLogResponse({}));
  }

  async describeModifyParameterLog(request: DescribeModifyParameterLogRequest): Promise<DescribeModifyParameterLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeModifyParameterLogWithOptions(request, runtime);
  }

  async describeErrorLogsWithOptions(request: DescribeErrorLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeErrorLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeErrorLogsResponse>(await this.doRequest("DescribeErrorLogs", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeErrorLogsResponse({}));
  }

  async describeErrorLogs(request: DescribeErrorLogsRequest): Promise<DescribeErrorLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeErrorLogsWithOptions(request, runtime);
  }

  async describeDBInstancePerformanceWithOptions(request: DescribeDBInstancePerformanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancePerformanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancePerformanceResponse>(await this.doRequest("DescribeDBInstancePerformance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancePerformanceResponse({}));
  }

  async describeDBInstancePerformance(request: DescribeDBInstancePerformanceRequest): Promise<DescribeDBInstancePerformanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancePerformanceWithOptions(request, runtime);
  }

  async describeDatabasesWithOptions(request: DescribeDatabasesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDatabasesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDatabasesResponse>(await this.doRequest("DescribeDatabases", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDatabasesResponse({}));
  }

  async describeDatabases(request: DescribeDatabasesRequest): Promise<DescribeDatabasesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDatabasesWithOptions(request, runtime);
  }

  async describeBinlogFilesWithOptions(request: DescribeBinlogFilesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBinlogFilesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBinlogFilesResponse>(await this.doRequest("DescribeBinlogFiles", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeBinlogFilesResponse({}));
  }

  async describeBinlogFiles(request: DescribeBinlogFilesRequest): Promise<DescribeBinlogFilesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBinlogFilesWithOptions(request, runtime);
  }

  async describeBackupTasksWithOptions(request: DescribeBackupTasksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupTasksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupTasksResponse>(await this.doRequest("DescribeBackupTasks", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeBackupTasksResponse({}));
  }

  async describeBackupTasks(request: DescribeBackupTasksRequest): Promise<DescribeBackupTasksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupTasksWithOptions(request, runtime);
  }

  async describeBackupsWithOptions(request: DescribeBackupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupsResponse>(await this.doRequest("DescribeBackups", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeBackupsResponse({}));
  }

  async describeBackups(request: DescribeBackupsRequest): Promise<DescribeBackupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupsWithOptions(request, runtime);
  }

  async describeBackupPolicyWithOptions(request: DescribeBackupPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBackupPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBackupPolicyResponse>(await this.doRequest("DescribeBackupPolicy", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeBackupPolicyResponse({}));
  }

  async describeBackupPolicy(request: DescribeBackupPolicyRequest): Promise<DescribeBackupPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBackupPolicyWithOptions(request, runtime);
  }

  async describeAccountsWithOptions(request: DescribeAccountsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAccountsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAccountsResponse>(await this.doRequest("DescribeAccounts", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeAccountsResponse({}));
  }

  async describeAccounts(request: DescribeAccountsRequest): Promise<DescribeAccountsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAccountsWithOptions(request, runtime);
  }

  async descibeImportsFromDatabaseWithOptions(request: DescibeImportsFromDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<DescibeImportsFromDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<DescibeImportsFromDatabaseResponse>(await this.doRequest("DescibeImportsFromDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescibeImportsFromDatabaseResponse({}));
  }

  async descibeImportsFromDatabase(request: DescibeImportsFromDatabaseRequest): Promise<DescibeImportsFromDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.descibeImportsFromDatabaseWithOptions(request, runtime);
  }

  async deleteDBInstanceWithOptions(request: DeleteDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDBInstanceResponse>(await this.doRequest("DeleteDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteDBInstanceResponse({}));
  }

  async deleteDBInstance(request: DeleteDBInstanceRequest): Promise<DeleteDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDBInstanceWithOptions(request, runtime);
  }

  async deleteDatabaseWithOptions(request: DeleteDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDatabaseResponse>(await this.doRequest("DeleteDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteDatabaseResponse({}));
  }

  async deleteDatabase(request: DeleteDatabaseRequest): Promise<DeleteDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDatabaseWithOptions(request, runtime);
  }

  async deleteAccountWithOptions(request: DeleteAccountRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAccountResponse>(await this.doRequest("DeleteAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DeleteAccountResponse({}));
  }

  async deleteAccount(request: DeleteAccountRequest): Promise<DeleteAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAccountWithOptions(request, runtime);
  }

  async createTempDBInstanceWithOptions(request: CreateTempDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateTempDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateTempDBInstanceResponse>(await this.doRequest("CreateTempDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateTempDBInstanceResponse({}));
  }

  async createTempDBInstance(request: CreateTempDBInstanceRequest): Promise<CreateTempDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createTempDBInstanceWithOptions(request, runtime);
  }

  async createDatabaseWithOptions(request: CreateDatabaseRequest, runtime: $Util.RuntimeOptions): Promise<CreateDatabaseResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDatabaseResponse>(await this.doRequest("CreateDatabase", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDatabaseResponse({}));
  }

  async createDatabase(request: CreateDatabaseRequest): Promise<CreateDatabaseResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDatabaseWithOptions(request, runtime);
  }

  async createBackupWithOptions(request: CreateBackupRequest, runtime: $Util.RuntimeOptions): Promise<CreateBackupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateBackupResponse>(await this.doRequest("CreateBackup", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateBackupResponse({}));
  }

  async createBackup(request: CreateBackupRequest): Promise<CreateBackupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createBackupWithOptions(request, runtime);
  }

  async createAccountWithOptions(request: CreateAccountRequest, runtime: $Util.RuntimeOptions): Promise<CreateAccountResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAccountResponse>(await this.doRequest("CreateAccount", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateAccountResponse({}));
  }

  async createAccount(request: CreateAccountRequest): Promise<CreateAccountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAccountWithOptions(request, runtime);
  }

  async checkDBNameAvailableWithOptions(request: CheckDBNameAvailableRequest, runtime: $Util.RuntimeOptions): Promise<CheckDBNameAvailableResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckDBNameAvailableResponse>(await this.doRequest("CheckDBNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CheckDBNameAvailableResponse({}));
  }

  async checkDBNameAvailable(request: CheckDBNameAvailableRequest): Promise<CheckDBNameAvailableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkDBNameAvailableWithOptions(request, runtime);
  }

  async checkAccountNameAvailableWithOptions(request: CheckAccountNameAvailableRequest, runtime: $Util.RuntimeOptions): Promise<CheckAccountNameAvailableResponse> {
    Util.validateModel(request);
    return $tea.cast<CheckAccountNameAvailableResponse>(await this.doRequest("CheckAccountNameAvailable", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CheckAccountNameAvailableResponse({}));
  }

  async checkAccountNameAvailable(request: CheckAccountNameAvailableRequest): Promise<CheckAccountNameAvailableResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.checkAccountNameAvailableWithOptions(request, runtime);
  }

  async cancelImportWithOptions(request: CancelImportRequest, runtime: $Util.RuntimeOptions): Promise<CancelImportResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelImportResponse>(await this.doRequest("CancelImport", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CancelImportResponse({}));
  }

  async cancelImport(request: CancelImportRequest): Promise<CancelImportResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelImportWithOptions(request, runtime);
  }

  async addTagsToResourceWithOptions(request: AddTagsToResourceRequest, runtime: $Util.RuntimeOptions): Promise<AddTagsToResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<AddTagsToResourceResponse>(await this.doRequest("AddTagsToResource", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new AddTagsToResourceResponse({}));
  }

  async addTagsToResource(request: AddTagsToResourceRequest): Promise<AddTagsToResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addTagsToResourceWithOptions(request, runtime);
  }

  async switchDBInstanceNetTypeWithOptions(request: SwitchDBInstanceNetTypeRequest, runtime: $Util.RuntimeOptions): Promise<SwitchDBInstanceNetTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<SwitchDBInstanceNetTypeResponse>(await this.doRequest("SwitchDBInstanceNetType", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new SwitchDBInstanceNetTypeResponse({}));
  }

  async switchDBInstanceNetType(request: SwitchDBInstanceNetTypeRequest): Promise<SwitchDBInstanceNetTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.switchDBInstanceNetTypeWithOptions(request, runtime);
  }

  async releaseInstancePublicConnectionWithOptions(request: ReleaseInstancePublicConnectionRequest, runtime: $Util.RuntimeOptions): Promise<ReleaseInstancePublicConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<ReleaseInstancePublicConnectionResponse>(await this.doRequest("ReleaseInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ReleaseInstancePublicConnectionResponse({}));
  }

  async releaseInstancePublicConnection(request: ReleaseInstancePublicConnectionRequest): Promise<ReleaseInstancePublicConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.releaseInstancePublicConnectionWithOptions(request, runtime);
  }

  async modifyDBInstanceNetworkTypeWithOptions(request: ModifyDBInstanceNetworkTypeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceNetworkTypeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceNetworkTypeResponse>(await this.doRequest("ModifyDBInstanceNetworkType", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceNetworkTypeResponse({}));
  }

  async modifyDBInstanceNetworkType(request: ModifyDBInstanceNetworkTypeRequest): Promise<ModifyDBInstanceNetworkTypeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceNetworkTypeWithOptions(request, runtime);
  }

  async modifyDBInstanceConnectionStringWithOptions(request: ModifyDBInstanceConnectionStringRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceConnectionStringResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceConnectionStringResponse>(await this.doRequest("ModifyDBInstanceConnectionString", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceConnectionStringResponse({}));
  }

  async modifyDBInstanceConnectionString(request: ModifyDBInstanceConnectionStringRequest): Promise<ModifyDBInstanceConnectionStringResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceConnectionStringWithOptions(request, runtime);
  }

  async modifyDBInstanceConnectionModeWithOptions(request: ModifyDBInstanceConnectionModeRequest, runtime: $Util.RuntimeOptions): Promise<ModifyDBInstanceConnectionModeResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyDBInstanceConnectionModeResponse>(await this.doRequest("ModifyDBInstanceConnectionMode", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new ModifyDBInstanceConnectionModeResponse({}));
  }

  async modifyDBInstanceConnectionMode(request: ModifyDBInstanceConnectionModeRequest): Promise<ModifyDBInstanceConnectionModeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyDBInstanceConnectionModeWithOptions(request, runtime);
  }

  async describeDBInstanceNetInfoWithOptions(request: DescribeDBInstanceNetInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceNetInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceNetInfoResponse>(await this.doRequest("DescribeDBInstanceNetInfo", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceNetInfoResponse({}));
  }

  async describeDBInstanceNetInfo(request: DescribeDBInstanceNetInfoRequest): Promise<DescribeDBInstanceNetInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceNetInfoWithOptions(request, runtime);
  }

  async createReadOnlyDBInstanceWithOptions(request: CreateReadOnlyDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateReadOnlyDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateReadOnlyDBInstanceResponse>(await this.doRequest("CreateReadOnlyDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateReadOnlyDBInstanceResponse({}));
  }

  async createReadOnlyDBInstance(request: CreateReadOnlyDBInstanceRequest): Promise<CreateReadOnlyDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createReadOnlyDBInstanceWithOptions(request, runtime);
  }

  /**
   * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
    * &RegionId=cn-hangzhou
    * &Engine=MySQL
    * &EngineVersion=5.6
    * &DBInstanceClass=rds.mysql.s1.small
    * &DBInstanceStorage=20
    * &DBInstanceNetType=Internet
    * &PayType=Postpaid
    * &SecurityIPList=10.23.12.27/24
    * &<公共请求参数>
    * ```
    * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
    * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
  
   */
  async createDBInstanceWithOptions(request: CreateDBInstanceRequest, runtime: $Util.RuntimeOptions): Promise<CreateDBInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateDBInstanceResponse>(await this.doRequest("CreateDBInstance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new CreateDBInstanceResponse({}));
  }

  /**
   * CreateDBInstance 调用CreateDBInstance接口创建一个RDS实例。
    * request demo:   * ```
    * http(s)://rds.aliyuncs.com/?Action=CreateDBInstance
    * &RegionId=cn-hangzhou
    * &Engine=MySQL
    * &EngineVersion=5.6
    * &DBInstanceClass=rds.mysql.s1.small
    * &DBInstanceStorage=20
    * &DBInstanceNetType=Internet
    * &PayType=Postpaid
    * &SecurityIPList=10.23.12.27/24
    * &<公共请求参数>
    * ```
    * description:   * **请确保在使用该接口前，已充分了解RDS产品的收费方式和<xref href="https://www.alibabacloud.com/product/apsaradb-for-rds#pricing" format="html" scope="external" props="intl">价格</xref><xref href="https://www.aliyun.com/price/product#/rds/detail" format="html" scope="external" props="china">价格</xref>。**
    * 关于RDS实例的规格，请参见[实例规格表](~~26312~~)。
  
   */
  async createDBInstance(request: CreateDBInstanceRequest): Promise<CreateDBInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createDBInstanceWithOptions(request, runtime);
  }

  async allocateInstancePublicConnectionWithOptions(request: AllocateInstancePublicConnectionRequest, runtime: $Util.RuntimeOptions): Promise<AllocateInstancePublicConnectionResponse> {
    Util.validateModel(request);
    return $tea.cast<AllocateInstancePublicConnectionResponse>(await this.doRequest("AllocateInstancePublicConnection", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new AllocateInstancePublicConnectionResponse({}));
  }

  async allocateInstancePublicConnection(request: AllocateInstancePublicConnectionRequest): Promise<AllocateInstancePublicConnectionResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.allocateInstancePublicConnectionWithOptions(request, runtime);
  }

  async describeDBInstancesByPerformanceWithOptions(request: DescribeDBInstancesByPerformanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesByPerformanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesByPerformanceResponse>(await this.doRequest("DescribeDBInstancesByPerformance", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesByPerformanceResponse({}));
  }

  async describeDBInstancesByPerformance(request: DescribeDBInstancesByPerformanceRequest): Promise<DescribeDBInstancesByPerformanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesByPerformanceWithOptions(request, runtime);
  }

  async describeDBInstancesByExpireTimeWithOptions(request: DescribeDBInstancesByExpireTimeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesByExpireTimeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesByExpireTimeResponse>(await this.doRequest("DescribeDBInstancesByExpireTime", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesByExpireTimeResponse({}));
  }

  async describeDBInstancesByExpireTime(request: DescribeDBInstancesByExpireTimeRequest): Promise<DescribeDBInstancesByExpireTimeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesByExpireTimeWithOptions(request, runtime);
  }

  async describeDBInstancesWithOptions(request: DescribeDBInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstancesResponse>(await this.doRequest("DescribeDBInstances", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstancesResponse({}));
  }

  async describeDBInstances(request: DescribeDBInstancesRequest): Promise<DescribeDBInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstancesWithOptions(request, runtime);
  }

  async describeDBInstanceAttributeWithOptions(request: DescribeDBInstanceAttributeRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDBInstanceAttributeResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDBInstanceAttributeResponse>(await this.doRequest("DescribeDBInstanceAttribute", "HTTPS", "POST", "2014-08-15", "AK", null, $tea.toMap(request), runtime), new DescribeDBInstanceAttributeResponse({}));
  }

  async describeDBInstanceAttribute(request: DescribeDBInstanceAttributeRequest): Promise<DescribeDBInstanceAttributeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDBInstanceAttributeWithOptions(request, runtime);
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

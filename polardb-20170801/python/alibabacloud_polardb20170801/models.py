# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeDBClusterAuditLogCollectorRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterAuditLogCollectorResponse(TeaModel):
    def __init__(self, collector_status=None, request_id=None):
        self.collector_status = collector_status
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.collector_status, 'collector_status')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['CollectorStatus'] = self.collector_status
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.collector_status = map.get('CollectorStatus')
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterAuditLogCollectorRequest(TeaModel):
    def __init__(self, dbcluster_id=None, collector_status=None):
        self.dbcluster_id = dbcluster_id
        self.collector_status = collector_status

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.collector_status, 'collector_status')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['CollectorStatus'] = self.collector_status
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.collector_status = map.get('CollectorStatus')
        return self


class ModifyDBClusterAuditLogCollectorResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDetachedBackupsRequest(TeaModel):
    def __init__(self, dbcluster_id=None, backup_id=None, backup_status=None, backup_mode=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.dbcluster_id = dbcluster_id
        self.backup_id = backup_id
        self.backup_status = backup_status
        self.backup_mode = backup_mode
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['BackupId'] = self.backup_id
        result['BackupStatus'] = self.backup_status
        result['BackupMode'] = self.backup_mode
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_id = map.get('BackupId')
        self.backup_status = map.get('BackupStatus')
        self.backup_mode = map.get('BackupMode')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeDetachedBackupsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeDetachedBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDetachedBackupsResponseItemsBackup(TeaModel):
    def __init__(self, backup_id=None, dbcluster_id=None, backup_status=None, backup_start_time=None, backup_end_time=None, backup_type=None, backup_mode=None, backup_method=None, store_status=None, backup_set_size=None, consistent_time=None, backups_level=None, is_avail=None):
        self.backup_id = backup_id
        self.dbcluster_id = dbcluster_id
        self.backup_status = backup_status
        self.backup_start_time = backup_start_time
        self.backup_end_time = backup_end_time
        self.backup_type = backup_type
        self.backup_mode = backup_mode
        self.backup_method = backup_method
        self.store_status = store_status
        self.backup_set_size = backup_set_size
        self.consistent_time = consistent_time
        self.backups_level = backups_level
        self.is_avail = is_avail

    def validate(self):
        self.validate_required(self.backup_id, 'backup_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.backup_status, 'backup_status')
        self.validate_required(self.backup_start_time, 'backup_start_time')
        self.validate_required(self.backup_end_time, 'backup_end_time')
        self.validate_required(self.backup_type, 'backup_type')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.backup_method, 'backup_method')
        self.validate_required(self.store_status, 'store_status')
        self.validate_required(self.backup_set_size, 'backup_set_size')
        self.validate_required(self.consistent_time, 'consistent_time')
        self.validate_required(self.backups_level, 'backups_level')
        self.validate_required(self.is_avail, 'is_avail')

    def to_map(self):
        result = {}
        result['BackupId'] = self.backup_id
        result['DBClusterId'] = self.dbcluster_id
        result['BackupStatus'] = self.backup_status
        result['BackupStartTime'] = self.backup_start_time
        result['BackupEndTime'] = self.backup_end_time
        result['BackupType'] = self.backup_type
        result['BackupMode'] = self.backup_mode
        result['BackupMethod'] = self.backup_method
        result['StoreStatus'] = self.store_status
        result['BackupSetSize'] = self.backup_set_size
        result['ConsistentTime'] = self.consistent_time
        result['BackupsLevel'] = self.backups_level
        result['IsAvail'] = self.is_avail
        return result

    def from_map(self, map={}):
        self.backup_id = map.get('BackupId')
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_status = map.get('BackupStatus')
        self.backup_start_time = map.get('BackupStartTime')
        self.backup_end_time = map.get('BackupEndTime')
        self.backup_type = map.get('BackupType')
        self.backup_mode = map.get('BackupMode')
        self.backup_method = map.get('BackupMethod')
        self.store_status = map.get('StoreStatus')
        self.backup_set_size = map.get('BackupSetSize')
        self.consistent_time = map.get('ConsistentTime')
        self.backups_level = map.get('BackupsLevel')
        self.is_avail = map.get('IsAvail')
        return self


class DescribeDetachedBackupsResponseItems(TeaModel):
    def __init__(self, backup=None):
        self.backup = []

    def validate(self):
        self.validate_required(self.backup, 'backup')
        if self.backup:
            for k in self.backup:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Backup'] = []
        if self.backup is not None:
            for k in self.backup:
                result['Backup'].append(k.to_map() if k else None)
        else:
            result['Backup'] = None
        return result

    def from_map(self, map={}):
        self.backup = []
        if map.get('Backup') is not None:
            for k in map.get('Backup'):
                temp_model = DescribeDetachedBackupsResponseItemsBackup()
                temp_model = temp_model.from_map(k)
                self.backup.append(temp_model)
        else:
            self.backup = None
        return self
class DescribeDBClustersWithBackupsRequest(TeaModel):
    def __init__(self, region_id=None, dbcluster_ids=None, dbcluster_description=None, dbtype=None, is_deleted=None, page_size=None, page_number=None, dbversion=None):
        self.region_id = region_id
        self.dbcluster_ids = dbcluster_ids
        self.dbcluster_description = dbcluster_description
        self.dbtype = dbtype
        self.is_deleted = is_deleted
        self.page_size = page_size
        self.page_number = page_number
        self.dbversion = dbversion

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DBClusterIds'] = self.dbcluster_ids
        result['DBClusterDescription'] = self.dbcluster_description
        result['DBType'] = self.dbtype
        result['IsDeleted'] = self.is_deleted
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['DBVersion'] = self.dbversion
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.dbcluster_ids = map.get('DBClusterIds')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.dbtype = map.get('DBType')
        self.is_deleted = map.get('IsDeleted')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.dbversion = map.get('DBVersion')
        return self


class DescribeDBClustersWithBackupsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, total_record_count=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.page_number = page_number
        self.total_record_count = total_record_count
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['TotalRecordCount'] = self.total_record_count
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeDBClustersWithBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBClustersWithBackupsResponseItemsDBCluster(TeaModel):
    def __init__(self, dbcluster_id=None, dbcluster_description=None, pay_type=None, dbcluster_network_type=None, region_id=None, zone_id=None, expire_time=None, expired=None, dbcluster_status=None, engine=None, dbtype=None, dbversion=None, lock_mode=None, deletion_lock=None, create_time=None, vpc_id=None, is_deleted=None, deleted_time=None, dbnode_class=None):
        self.dbcluster_id = dbcluster_id
        self.dbcluster_description = dbcluster_description
        self.pay_type = pay_type
        self.dbcluster_network_type = dbcluster_network_type
        self.region_id = region_id
        self.zone_id = zone_id
        self.expire_time = expire_time
        self.expired = expired
        self.dbcluster_status = dbcluster_status
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.lock_mode = lock_mode
        self.deletion_lock = deletion_lock
        self.create_time = create_time
        self.vpc_id = vpc_id
        self.is_deleted = is_deleted
        self.deleted_time = deleted_time
        self.dbnode_class = dbnode_class

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbcluster_description, 'dbcluster_description')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbcluster_network_type, 'dbcluster_network_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.expired, 'expired')
        self.validate_required(self.dbcluster_status, 'dbcluster_status')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.deletion_lock, 'deletion_lock')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.is_deleted, 'is_deleted')
        self.validate_required(self.deleted_time, 'deleted_time')
        self.validate_required(self.dbnode_class, 'dbnode_class')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBClusterDescription'] = self.dbcluster_description
        result['PayType'] = self.pay_type
        result['DBClusterNetworkType'] = self.dbcluster_network_type
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['ExpireTime'] = self.expire_time
        result['Expired'] = self.expired
        result['DBClusterStatus'] = self.dbcluster_status
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['LockMode'] = self.lock_mode
        result['DeletionLock'] = self.deletion_lock
        result['CreateTime'] = self.create_time
        result['VpcId'] = self.vpc_id
        result['IsDeleted'] = self.is_deleted
        result['DeletedTime'] = self.deleted_time
        result['DBNodeClass'] = self.dbnode_class
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.pay_type = map.get('PayType')
        self.dbcluster_network_type = map.get('DBClusterNetworkType')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.expire_time = map.get('ExpireTime')
        self.expired = map.get('Expired')
        self.dbcluster_status = map.get('DBClusterStatus')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.lock_mode = map.get('LockMode')
        self.deletion_lock = map.get('DeletionLock')
        self.create_time = map.get('CreateTime')
        self.vpc_id = map.get('VpcId')
        self.is_deleted = map.get('IsDeleted')
        self.deleted_time = map.get('DeletedTime')
        self.dbnode_class = map.get('DBNodeClass')
        return self


class DescribeDBClustersWithBackupsResponseItems(TeaModel):
    def __init__(self, dbcluster=None):
        self.dbcluster = []

    def validate(self):
        self.validate_required(self.dbcluster, 'dbcluster')
        if self.dbcluster:
            for k in self.dbcluster:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBCluster'] = []
        if self.dbcluster is not None:
            for k in self.dbcluster:
                result['DBCluster'].append(k.to_map() if k else None)
        else:
            result['DBCluster'] = None
        return result

    def from_map(self, map={}):
        self.dbcluster = []
        if map.get('DBCluster') is not None:
            for k in map.get('DBCluster'):
                temp_model = DescribeDBClustersWithBackupsResponseItemsDBCluster()
                temp_model = temp_model.from_map(k)
                self.dbcluster.append(temp_model)
        else:
            self.dbcluster = None
        return self
class DescribeLogBackupPolicyRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeLogBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, enable_backup_log=None, log_backup_retention_period=None):
        self.request_id = request_id
        self.enable_backup_log = enable_backup_log
        self.log_backup_retention_period = log_backup_retention_period

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.enable_backup_log, 'enable_backup_log')
        self.validate_required(self.log_backup_retention_period, 'log_backup_retention_period')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['EnableBackupLog'] = self.enable_backup_log
        result['LogBackupRetentionPeriod'] = self.log_backup_retention_period
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.enable_backup_log = map.get('EnableBackupLog')
        self.log_backup_retention_period = map.get('LogBackupRetentionPeriod')
        return self


class ModifyLogBackupPolicyRequest(TeaModel):
    def __init__(self, dbcluster_id=None, log_backup_retention_period=None):
        self.dbcluster_id = dbcluster_id
        self.log_backup_retention_period = log_backup_retention_period

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['LogBackupRetentionPeriod'] = self.log_backup_retention_period
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.log_backup_retention_period = map.get('LogBackupRetentionPeriod')
        return self


class ModifyLogBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterMonitorRequest(TeaModel):
    def __init__(self, dbcluster_id=None, period=None):
        self.dbcluster_id = dbcluster_id
        self.period = period

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.period = map.get('Period')
        return self


class ModifyDBClusterMonitorResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDBClusterMonitorRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterMonitorResponse(TeaModel):
    def __init__(self, period=None, request_id=None):
        self.period = period
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.period, 'period')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Period'] = self.period
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.period = map.get('Period')
        self.request_id = map.get('RequestId')
        return self


class DescribeDBClusterAvailableResourcesRequest(TeaModel):
    def __init__(self, pay_type=None, dbtype=None, dbversion=None, dbnode_class=None, region_id=None, zone_id=None):
        self.pay_type = pay_type
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.dbnode_class = dbnode_class
        self.region_id = region_id
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.pay_type, 'pay_type')

    def to_map(self):
        result = {}
        result['PayType'] = self.pay_type
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['DBNodeClass'] = self.dbnode_class
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.pay_type = map.get('PayType')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.dbnode_class = map.get('DBNodeClass')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        return self


class DescribeDBClusterAvailableResourcesResponse(TeaModel):
    def __init__(self, request_id=None, available_zones=None):
        self.request_id = request_id
        self.available_zones = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.available_zones, 'available_zones')
        if self.available_zones:
            for k in self.available_zones:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AvailableZones'] = []
        if self.available_zones is not None:
            for k in self.available_zones:
                result['AvailableZones'].append(k.to_map() if k else None)
        else:
            result['AvailableZones'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.available_zones = []
        if map.get('AvailableZones') is not None:
            for k in map.get('AvailableZones'):
                temp_model = DescribeDBClusterAvailableResourcesResponseAvailableZones()
                temp_model = temp_model.from_map(k)
                self.available_zones.append(temp_model)
        else:
            self.available_zones = None
        return self


class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources(TeaModel):
    def __init__(self, dbnode_class=None, category=None):
        self.dbnode_class = dbnode_class
        self.category = category

    def validate(self):
        self.validate_required(self.dbnode_class, 'dbnode_class')
        self.validate_required(self.category, 'category')

    def to_map(self):
        result = {}
        result['DBNodeClass'] = self.dbnode_class
        result['Category'] = self.category
        return result

    def from_map(self, map={}):
        self.dbnode_class = map.get('DBNodeClass')
        self.category = map.get('Category')
        return self


class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines(TeaModel):
    def __init__(self, engine=None, available_resources=None):
        self.engine = engine
        self.available_resources = []

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.available_resources, 'available_resources')
        if self.available_resources:
            for k in self.available_resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Engine'] = self.engine
        result['AvailableResources'] = []
        if self.available_resources is not None:
            for k in self.available_resources:
                result['AvailableResources'].append(k.to_map() if k else None)
        else:
            result['AvailableResources'] = None
        return result

    def from_map(self, map={}):
        self.engine = map.get('Engine')
        self.available_resources = []
        if map.get('AvailableResources') is not None:
            for k in map.get('AvailableResources'):
                temp_model = DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources()
                temp_model = temp_model.from_map(k)
                self.available_resources.append(temp_model)
        else:
            self.available_resources = None
        return self


class DescribeDBClusterAvailableResourcesResponseAvailableZones(TeaModel):
    def __init__(self, region_id=None, zone_id=None, supported_engines=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.supported_engines = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.supported_engines, 'supported_engines')
        if self.supported_engines:
            for k in self.supported_engines:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['SupportedEngines'] = []
        if self.supported_engines is not None:
            for k in self.supported_engines:
                result['SupportedEngines'].append(k.to_map() if k else None)
        else:
            result['SupportedEngines'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.supported_engines = []
        if map.get('SupportedEngines') is not None:
            for k in map.get('SupportedEngines'):
                temp_model = DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines()
                temp_model = temp_model.from_map(k)
                self.supported_engines.append(temp_model)
        else:
            self.supported_engines = None
        return self
class DescribeBackupLogsRequest(TeaModel):
    def __init__(self, dbcluster_id=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.dbcluster_id = dbcluster_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeBackupLogsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeBackupLogsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeBackupLogsResponseItemsBackupLog(TeaModel):
    def __init__(self, backup_log_id=None, backup_log_name=None, backup_log_start_time=None, backup_log_end_time=None, backup_log_size=None, download_link=None, intranet_download_link=None, link_expired_time=None):
        self.backup_log_id = backup_log_id
        self.backup_log_name = backup_log_name
        self.backup_log_start_time = backup_log_start_time
        self.backup_log_end_time = backup_log_end_time
        self.backup_log_size = backup_log_size
        self.download_link = download_link
        self.intranet_download_link = intranet_download_link
        self.link_expired_time = link_expired_time

    def validate(self):
        self.validate_required(self.backup_log_id, 'backup_log_id')
        self.validate_required(self.backup_log_name, 'backup_log_name')
        self.validate_required(self.backup_log_start_time, 'backup_log_start_time')
        self.validate_required(self.backup_log_end_time, 'backup_log_end_time')
        self.validate_required(self.backup_log_size, 'backup_log_size')
        self.validate_required(self.download_link, 'download_link')
        self.validate_required(self.intranet_download_link, 'intranet_download_link')
        self.validate_required(self.link_expired_time, 'link_expired_time')

    def to_map(self):
        result = {}
        result['BackupLogId'] = self.backup_log_id
        result['BackupLogName'] = self.backup_log_name
        result['BackupLogStartTime'] = self.backup_log_start_time
        result['BackupLogEndTime'] = self.backup_log_end_time
        result['BackupLogSize'] = self.backup_log_size
        result['DownloadLink'] = self.download_link
        result['IntranetDownloadLink'] = self.intranet_download_link
        result['LinkExpiredTime'] = self.link_expired_time
        return result

    def from_map(self, map={}):
        self.backup_log_id = map.get('BackupLogId')
        self.backup_log_name = map.get('BackupLogName')
        self.backup_log_start_time = map.get('BackupLogStartTime')
        self.backup_log_end_time = map.get('BackupLogEndTime')
        self.backup_log_size = map.get('BackupLogSize')
        self.download_link = map.get('DownloadLink')
        self.intranet_download_link = map.get('IntranetDownloadLink')
        self.link_expired_time = map.get('LinkExpiredTime')
        return self


class DescribeBackupLogsResponseItems(TeaModel):
    def __init__(self, backup_log=None):
        self.backup_log = []

    def validate(self):
        self.validate_required(self.backup_log, 'backup_log')
        if self.backup_log:
            for k in self.backup_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BackupLog'] = []
        if self.backup_log is not None:
            for k in self.backup_log:
                result['BackupLog'].append(k.to_map() if k else None)
        else:
            result['BackupLog'] = None
        return result

    def from_map(self, map={}):
        self.backup_log = []
        if map.get('BackupLog') is not None:
            for k in map.get('BackupLog'):
                temp_model = DescribeBackupLogsResponseItemsBackupLog()
                temp_model = temp_model.from_map(k)
                self.backup_log.append(temp_model)
        else:
            self.backup_log = None
        return self
class ModifyDBClusterSSLRequest(TeaModel):
    def __init__(self, dbcluster_id=None, sslenabled=None, dbendpoint_id=None, net_type=None):
        self.dbcluster_id = dbcluster_id
        self.sslenabled = sslenabled
        self.dbendpoint_id = dbendpoint_id
        self.net_type = net_type

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.sslenabled, 'sslenabled')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['SSLEnabled'] = self.sslenabled
        result['DBEndpointId'] = self.dbendpoint_id
        result['NetType'] = self.net_type
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.sslenabled = map.get('SSLEnabled')
        self.dbendpoint_id = map.get('DBEndpointId')
        self.net_type = map.get('NetType')
        return self


class ModifyDBClusterSSLResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDBClusterSSLRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterSSLResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = DescribeDBClusterSSLResponseItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self


class DescribeDBClusterSSLResponseItems(TeaModel):
    def __init__(self, dbendpoint_id=None, sslenabled=None, sslconnection_string=None, sslexpire_time=None):
        self.dbendpoint_id = dbendpoint_id
        self.sslenabled = sslenabled
        self.sslconnection_string = sslconnection_string
        self.sslexpire_time = sslexpire_time

    def validate(self):
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.sslenabled, 'sslenabled')
        self.validate_required(self.sslconnection_string, 'sslconnection_string')
        self.validate_required(self.sslexpire_time, 'sslexpire_time')

    def to_map(self):
        result = {}
        result['DBEndpointId'] = self.dbendpoint_id
        result['SSLEnabled'] = self.sslenabled
        result['SSLConnectionString'] = self.sslconnection_string
        result['SSLExpireTime'] = self.sslexpire_time
        return result

    def from_map(self, map={}):
        self.dbendpoint_id = map.get('DBEndpointId')
        self.sslenabled = map.get('SSLEnabled')
        self.sslconnection_string = map.get('SSLConnectionString')
        self.sslexpire_time = map.get('SSLExpireTime')
        return self
class DescribeDBClusterMigrationRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterMigrationResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, source_rdsdbinstance_id=None, migration_status=None, topologies=None, delayed_seconds=None, expired_time=None, rds_read_write_mode=None, dbcluster_read_write_mode=None, comment=None, dbcluster_endpoint_list=None, rds_endpoint_list=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.source_rdsdbinstance_id = source_rdsdbinstance_id
        self.migration_status = migration_status
        self.topologies = topologies
        self.delayed_seconds = delayed_seconds
        self.expired_time = expired_time
        self.rds_read_write_mode = rds_read_write_mode
        self.dbcluster_read_write_mode = dbcluster_read_write_mode
        self.comment = comment
        self.dbcluster_endpoint_list = []
        self.rds_endpoint_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.source_rdsdbinstance_id, 'source_rdsdbinstance_id')
        self.validate_required(self.migration_status, 'migration_status')
        self.validate_required(self.topologies, 'topologies')
        self.validate_required(self.delayed_seconds, 'delayed_seconds')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.rds_read_write_mode, 'rds_read_write_mode')
        self.validate_required(self.dbcluster_read_write_mode, 'dbcluster_read_write_mode')
        self.validate_required(self.comment, 'comment')
        self.validate_required(self.dbcluster_endpoint_list, 'dbcluster_endpoint_list')
        if self.dbcluster_endpoint_list:
            for k in self.dbcluster_endpoint_list:
                if k :
                    k.validate()
        self.validate_required(self.rds_endpoint_list, 'rds_endpoint_list')
        if self.rds_endpoint_list:
            for k in self.rds_endpoint_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['SourceRDSDBInstanceId'] = self.source_rdsdbinstance_id
        result['MigrationStatus'] = self.migration_status
        result['Topologies'] = self.topologies
        result['DelayedSeconds'] = self.delayed_seconds
        result['ExpiredTime'] = self.expired_time
        result['RdsReadWriteMode'] = self.rds_read_write_mode
        result['DBClusterReadWriteMode'] = self.dbcluster_read_write_mode
        result['Comment'] = self.comment
        result['DBClusterEndpointList'] = []
        if self.dbcluster_endpoint_list is not None:
            for k in self.dbcluster_endpoint_list:
                result['DBClusterEndpointList'].append(k.to_map() if k else None)
        else:
            result['DBClusterEndpointList'] = None
        result['RdsEndpointList'] = []
        if self.rds_endpoint_list is not None:
            for k in self.rds_endpoint_list:
                result['RdsEndpointList'].append(k.to_map() if k else None)
        else:
            result['RdsEndpointList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.source_rdsdbinstance_id = map.get('SourceRDSDBInstanceId')
        self.migration_status = map.get('MigrationStatus')
        self.topologies = map.get('Topologies')
        self.delayed_seconds = map.get('DelayedSeconds')
        self.expired_time = map.get('ExpiredTime')
        self.rds_read_write_mode = map.get('RdsReadWriteMode')
        self.dbcluster_read_write_mode = map.get('DBClusterReadWriteMode')
        self.comment = map.get('Comment')
        self.dbcluster_endpoint_list = []
        if map.get('DBClusterEndpointList') is not None:
            for k in map.get('DBClusterEndpointList'):
                temp_model = DescribeDBClusterMigrationResponseDBClusterEndpointList()
                temp_model = temp_model.from_map(k)
                self.dbcluster_endpoint_list.append(temp_model)
        else:
            self.dbcluster_endpoint_list = None
        self.rds_endpoint_list = []
        if map.get('RdsEndpointList') is not None:
            for k in map.get('RdsEndpointList'):
                temp_model = DescribeDBClusterMigrationResponseRdsEndpointList()
                temp_model = temp_model.from_map(k)
                self.rds_endpoint_list.append(temp_model)
        else:
            self.rds_endpoint_list = None
        return self


class DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems(TeaModel):
    def __init__(self, connection_string=None, ipaddress=None, net_type=None, port=None, vpcid=None, v_switch_id=None):
        self.connection_string = connection_string
        self.ipaddress = ipaddress
        self.net_type = net_type
        self.port = port
        self.vpcid = vpcid
        self.v_switch_id = v_switch_id

    def validate(self):
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.net_type, 'net_type')
        self.validate_required(self.port, 'port')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.v_switch_id, 'v_switch_id')

    def to_map(self):
        result = {}
        result['ConnectionString'] = self.connection_string
        result['IPAddress'] = self.ipaddress
        result['NetType'] = self.net_type
        result['Port'] = self.port
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.v_switch_id
        return result

    def from_map(self, map={}):
        self.connection_string = map.get('ConnectionString')
        self.ipaddress = map.get('IPAddress')
        self.net_type = map.get('NetType')
        self.port = map.get('Port')
        self.vpcid = map.get('VPCId')
        self.v_switch_id = map.get('VSwitchId')
        return self


class DescribeDBClusterMigrationResponseDBClusterEndpointList(TeaModel):
    def __init__(self, dbendpoint_id=None, endpoint_type=None, address_items=None):
        self.dbendpoint_id = dbendpoint_id
        self.endpoint_type = endpoint_type
        self.address_items = []

    def validate(self):
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.endpoint_type, 'endpoint_type')
        self.validate_required(self.address_items, 'address_items')
        if self.address_items:
            for k in self.address_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBEndpointId'] = self.dbendpoint_id
        result['EndpointType'] = self.endpoint_type
        result['AddressItems'] = []
        if self.address_items is not None:
            for k in self.address_items:
                result['AddressItems'].append(k.to_map() if k else None)
        else:
            result['AddressItems'] = None
        return result

    def from_map(self, map={}):
        self.dbendpoint_id = map.get('DBEndpointId')
        self.endpoint_type = map.get('EndpointType')
        self.address_items = []
        if map.get('AddressItems') is not None:
            for k in map.get('AddressItems'):
                temp_model = DescribeDBClusterMigrationResponseDBClusterEndpointListAddressItems()
                temp_model = temp_model.from_map(k)
                self.address_items.append(temp_model)
        else:
            self.address_items = None
        return self


class DescribeDBClusterMigrationResponseRdsEndpointListAddressItems(TeaModel):
    def __init__(self, connection_string=None, ipaddress=None, net_type=None, port=None, vpcid=None, v_switch_id=None):
        self.connection_string = connection_string
        self.ipaddress = ipaddress
        self.net_type = net_type
        self.port = port
        self.vpcid = vpcid
        self.v_switch_id = v_switch_id

    def validate(self):
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.net_type, 'net_type')
        self.validate_required(self.port, 'port')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.v_switch_id, 'v_switch_id')

    def to_map(self):
        result = {}
        result['ConnectionString'] = self.connection_string
        result['IPAddress'] = self.ipaddress
        result['NetType'] = self.net_type
        result['Port'] = self.port
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.v_switch_id
        return result

    def from_map(self, map={}):
        self.connection_string = map.get('ConnectionString')
        self.ipaddress = map.get('IPAddress')
        self.net_type = map.get('NetType')
        self.port = map.get('Port')
        self.vpcid = map.get('VPCId')
        self.v_switch_id = map.get('VSwitchId')
        return self


class DescribeDBClusterMigrationResponseRdsEndpointList(TeaModel):
    def __init__(self, dbendpoint_id=None, endpoint_type=None, address_items=None):
        self.dbendpoint_id = dbendpoint_id
        self.endpoint_type = endpoint_type
        self.address_items = []

    def validate(self):
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.endpoint_type, 'endpoint_type')
        self.validate_required(self.address_items, 'address_items')
        if self.address_items:
            for k in self.address_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBEndpointId'] = self.dbendpoint_id
        result['EndpointType'] = self.endpoint_type
        result['AddressItems'] = []
        if self.address_items is not None:
            for k in self.address_items:
                result['AddressItems'].append(k.to_map() if k else None)
        else:
            result['AddressItems'] = None
        return result

    def from_map(self, map={}):
        self.dbendpoint_id = map.get('DBEndpointId')
        self.endpoint_type = map.get('EndpointType')
        self.address_items = []
        if map.get('AddressItems') is not None:
            for k in map.get('AddressItems'):
                temp_model = DescribeDBClusterMigrationResponseRdsEndpointListAddressItems()
                temp_model = temp_model.from_map(k)
                self.address_items.append(temp_model)
        else:
            self.address_items = None
        return self
class CloseDBClusterMigrationRequest(TeaModel):
    def __init__(self, dbcluster_id=None, continue_enable_binlog=None):
        self.dbcluster_id = dbcluster_id
        self.continue_enable_binlog = continue_enable_binlog

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['ContinueEnableBinlog'] = self.continue_enable_binlog
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.continue_enable_binlog = map.get('ContinueEnableBinlog')
        return self


class CloseDBClusterMigrationResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterMigrationRequest(TeaModel):
    def __init__(self, security_token=None, dbcluster_id=None, source_rdsdbinstance_id=None, new_master_instance_id=None, swap_connection_string=None):
        self.security_token = security_token
        self.dbcluster_id = dbcluster_id
        self.source_rdsdbinstance_id = source_rdsdbinstance_id
        self.new_master_instance_id = new_master_instance_id
        self.swap_connection_string = swap_connection_string

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.source_rdsdbinstance_id, 'source_rdsdbinstance_id')
        self.validate_required(self.new_master_instance_id, 'new_master_instance_id')

    def to_map(self):
        result = {}
        result['SecurityToken'] = self.security_token
        result['DBClusterId'] = self.dbcluster_id
        result['SourceRDSDBInstanceId'] = self.source_rdsdbinstance_id
        result['NewMasterInstanceId'] = self.new_master_instance_id
        result['SwapConnectionString'] = self.swap_connection_string
        return result

    def from_map(self, map={}):
        self.security_token = map.get('SecurityToken')
        self.dbcluster_id = map.get('DBClusterId')
        self.source_rdsdbinstance_id = map.get('SourceRDSDBInstanceId')
        self.new_master_instance_id = map.get('NewMasterInstanceId')
        self.swap_connection_string = map.get('SwapConnectionString')
        return self


class ModifyDBClusterMigrationResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyAutoRenewAttributeRequest(TeaModel):
    def __init__(self, dbcluster_ids=None, region_id=None, renewal_status=None, duration=None, period_unit=None, resource_group_id=None):
        self.dbcluster_ids = dbcluster_ids
        self.region_id = region_id
        self.renewal_status = renewal_status
        self.duration = duration
        self.period_unit = period_unit
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbcluster_ids, 'dbcluster_ids')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['DBClusterIds'] = self.dbcluster_ids
        result['RegionId'] = self.region_id
        result['RenewalStatus'] = self.renewal_status
        result['Duration'] = self.duration
        result['PeriodUnit'] = self.period_unit
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.dbcluster_ids = map.get('DBClusterIds')
        self.region_id = map.get('RegionId')
        self.renewal_status = map.get('RenewalStatus')
        self.duration = map.get('Duration')
        self.period_unit = map.get('PeriodUnit')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class ModifyAutoRenewAttributeResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBNodeClassRequest(TeaModel):
    def __init__(self, dbcluster_id=None, modify_type=None, dbnode_target_class=None, client_token=None):
        self.dbcluster_id = dbcluster_id
        self.modify_type = modify_type
        self.dbnode_target_class = dbnode_target_class
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.modify_type, 'modify_type')
        self.validate_required(self.dbnode_target_class, 'dbnode_target_class')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['ModifyType'] = self.modify_type
        result['DBNodeTargetClass'] = self.dbnode_target_class
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.modify_type = map.get('ModifyType')
        self.dbnode_target_class = map.get('DBNodeTargetClass')
        self.client_token = map.get('ClientToken')
        return self


class ModifyDBNodeClassResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, order_id=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.order_id = order_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.order_id, 'order_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['OrderId'] = self.order_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.order_id = map.get('OrderId')
        return self


class DescribeAutoRenewAttributeRequest(TeaModel):
    def __init__(self, region_id=None, dbcluster_ids=None, page_size=None, page_number=None, resource_group_id=None):
        self.region_id = region_id
        self.dbcluster_ids = dbcluster_ids
        self.page_size = page_size
        self.page_number = page_number
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DBClusterIds'] = self.dbcluster_ids
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.dbcluster_ids = map.get('DBClusterIds')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class DescribeAutoRenewAttributeResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, total_record_count=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.page_number = page_number
        self.total_record_count = total_record_count
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['TotalRecordCount'] = self.total_record_count
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeAutoRenewAttributeResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute(TeaModel):
    def __init__(self, dbcluster_id=None, region_id=None, auto_renew_enabled=None, duration=None, period_unit=None, renewal_status=None):
        self.dbcluster_id = dbcluster_id
        self.region_id = region_id
        self.auto_renew_enabled = auto_renew_enabled
        self.duration = duration
        self.period_unit = period_unit
        self.renewal_status = renewal_status

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.auto_renew_enabled, 'auto_renew_enabled')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.period_unit, 'period_unit')
        self.validate_required(self.renewal_status, 'renewal_status')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['RegionId'] = self.region_id
        result['AutoRenewEnabled'] = self.auto_renew_enabled
        result['Duration'] = self.duration
        result['PeriodUnit'] = self.period_unit
        result['RenewalStatus'] = self.renewal_status
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.region_id = map.get('RegionId')
        self.auto_renew_enabled = map.get('AutoRenewEnabled')
        self.duration = map.get('Duration')
        self.period_unit = map.get('PeriodUnit')
        self.renewal_status = map.get('RenewalStatus')
        return self


class DescribeAutoRenewAttributeResponseItems(TeaModel):
    def __init__(self, auto_renew_attribute=None):
        self.auto_renew_attribute = []

    def validate(self):
        self.validate_required(self.auto_renew_attribute, 'auto_renew_attribute')
        if self.auto_renew_attribute:
            for k in self.auto_renew_attribute:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AutoRenewAttribute'] = []
        if self.auto_renew_attribute is not None:
            for k in self.auto_renew_attribute:
                result['AutoRenewAttribute'].append(k.to_map() if k else None)
        else:
            result['AutoRenewAttribute'] = None
        return result

    def from_map(self, map={}):
        self.auto_renew_attribute = []
        if map.get('AutoRenewAttribute') is not None:
            for k in map.get('AutoRenewAttribute'):
                temp_model = DescribeAutoRenewAttributeResponseItemsAutoRenewAttribute()
                temp_model = temp_model.from_map(k)
                self.auto_renew_attribute.append(temp_model)
        else:
            self.auto_renew_attribute = None
        return self
class CreateDBNodesRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbnode=None, client_token=None):
        self.dbcluster_id = dbcluster_id
        self.dbnode = []
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbnode, 'dbnode')
        if self.dbnode:
            for k in self.dbnode:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBNode'] = []
        if self.dbnode is not None:
            for k in self.dbnode:
                result['DBNode'].append(k.to_map() if k else None)
        else:
            result['DBNode'] = None
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbnode = []
        if map.get('DBNode') is not None:
            for k in map.get('DBNode'):
                temp_model = CreateDBNodesRequestDBNode()
                temp_model = temp_model.from_map(k)
                self.dbnode.append(temp_model)
        else:
            self.dbnode = None
        self.client_token = map.get('ClientToken')
        return self


class CreateDBNodesRequestDBNode(TeaModel):
    def __init__(self, target_class=None, zone_id=None):
        self.target_class = target_class
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.target_class, 'target_class')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['TargetClass'] = self.target_class
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.target_class = map.get('TargetClass')
        self.zone_id = map.get('ZoneId')
        return self
class CreateDBNodesResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, order_id=None, dbnode_ids=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.order_id = order_id
        self.dbnode_ids = dbnode_ids

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.dbnode_ids, 'dbnode_ids')
        if self.dbnode_ids:
            self.dbnode_ids.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['OrderId'] = self.order_id
        if self.dbnode_ids is not None:
            result['DBNodeIds'] = self.dbnode_ids.to_map()
        else:
            result['DBNodeIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.order_id = map.get('OrderId')
        if map.get('DBNodeIds') is not None:
            temp_model = CreateDBNodesResponseDBNodeIds()
            self.dbnode_ids = temp_model.from_map(map['DBNodeIds'])
        else:
            self.dbnode_ids = None
        return self


class CreateDBNodesResponseDBNodeIds(TeaModel):
    def __init__(self, dbnode_id=None):
        self.dbnode_id = []

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')

    def to_map(self):
        result = {}
        result['DBNodeId'] = []
        if self.dbnode_id is not None:
            for k in self.dbnode_id:
                result['DBNodeId'].append(k)
        else:
            result['DBNodeId'] = None
        return result

    def from_map(self, map={}):
        self.dbnode_id = []
        if map.get('DBNodeId') is not None:
            for k in map.get('DBNodeId'):
                self.dbnode_id.append(k)
        else:
            self.dbnode_id = None
        return self
class DeleteDBNodesRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbnode_id=None, client_token=None):
        self.dbcluster_id = dbcluster_id
        self.dbnode_id = []
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbnode_id, 'dbnode_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBNodeId'] = []
        if self.dbnode_id is not None:
            for k in self.dbnode_id:
                result['DBNodeId'].append(k)
        else:
            result['DBNodeId'] = None
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbnode_id = []
        if map.get('DBNodeId') is not None:
            for k in map.get('DBNodeId'):
                self.dbnode_id.append(k)
        else:
            self.dbnode_id = None
        self.client_token = map.get('ClientToken')
        return self


class DeleteDBNodesResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, order_id=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.order_id = order_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.order_id, 'order_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['OrderId'] = self.order_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.order_id = map.get('OrderId')
        return self


class UntagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_type=None, resource_id=None, tag_key=None, all=None):
        self.region_id = region_id
        self.resource_type = resource_type
        self.resource_id = []
        self.tag_key = []
        self.all = all

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['TagKey'] = []
        if self.tag_key is not None:
            for k in self.tag_key:
                result['TagKey'].append(k)
        else:
            result['TagKey'] = None
        result['All'] = self.all
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.tag_key = []
        if map.get('TagKey') is not None:
            for k in map.get('TagKey'):
                self.tag_key.append(k)
        else:
            self.tag_key = None
        self.all = map.get('All')
        return self


class UntagResourcesResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class TagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_type=None, resource_id=None, tag=None):
        self.region_id = region_id
        self.resource_type = resource_type
        self.resource_id = []
        self.tag = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = TagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class TagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class TagResourcesResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListTagResourcesRequest(TeaModel):
    def __init__(self, region_id=None, resource_type=None, resource_id=None, tag=None, next_token=None):
        self.region_id = region_id
        self.resource_type = resource_type
        self.resource_id = []
        self.tag = []
        self.next_token = next_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListTagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.next_token = map.get('NextToken')
        return self


class ListTagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class ListTagResourcesResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, tag_resources=None):
        self.request_id = request_id
        self.next_token = next_token
        self.tag_resources = tag_resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.tag_resources, 'tag_resources')
        if self.tag_resources:
            self.tag_resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        if self.tag_resources is not None:
            result['TagResources'] = self.tag_resources.to_map()
        else:
            result['TagResources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        if map.get('TagResources') is not None:
            temp_model = ListTagResourcesResponseTagResources()
            self.tag_resources = temp_model.from_map(map['TagResources'])
        else:
            self.tag_resources = None
        return self


class ListTagResourcesResponseTagResourcesTagResource(TeaModel):
    def __init__(self, tag_key=None, tag_value=None, resource_type=None, resource_id=None):
        self.tag_key = tag_key
        self.tag_value = tag_value
        self.resource_type = resource_type
        self.resource_id = resource_id

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        result['ResourceType'] = self.resource_type
        result['ResourceId'] = self.resource_id
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        self.resource_type = map.get('ResourceType')
        self.resource_id = map.get('ResourceId')
        return self


class ListTagResourcesResponseTagResources(TeaModel):
    def __init__(self, tag_resource=None):
        self.tag_resource = []

    def validate(self):
        self.validate_required(self.tag_resource, 'tag_resource')
        if self.tag_resource:
            for k in self.tag_resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TagResource'] = []
        if self.tag_resource is not None:
            for k in self.tag_resource:
                result['TagResource'].append(k.to_map() if k else None)
        else:
            result['TagResource'] = None
        return result

    def from_map(self, map={}):
        self.tag_resource = []
        if map.get('TagResource') is not None:
            for k in map.get('TagResource'):
                temp_model = ListTagResourcesResponseTagResourcesTagResource()
                temp_model = temp_model.from_map(k)
                self.tag_resource.append(temp_model)
        else:
            self.tag_resource = None
        return self
class ModifyDBEndpointAddressRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None, net_type=None, connection_string_prefix=None, private_zone_address_prefix=None, private_zone_name=None, port=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id
        self.net_type = net_type
        self.connection_string_prefix = connection_string_prefix
        self.private_zone_address_prefix = private_zone_address_prefix
        self.private_zone_name = private_zone_name
        self.port = port

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.net_type, 'net_type')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        result['NetType'] = self.net_type
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['PrivateZoneAddressPrefix'] = self.private_zone_address_prefix
        result['PrivateZoneName'] = self.private_zone_name
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        self.net_type = map.get('NetType')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.private_zone_address_prefix = map.get('PrivateZoneAddressPrefix')
        self.private_zone_name = map.get('PrivateZoneName')
        self.port = map.get('Port')
        return self


class ModifyDBEndpointAddressResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBDescriptionRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbname=None, dbdescription=None):
        self.dbcluster_id = dbcluster_id
        self.dbname = dbname
        self.dbdescription = dbdescription

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.dbdescription, 'dbdescription')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBName'] = self.dbname
        result['DBDescription'] = self.dbdescription
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbname = map.get('DBName')
        self.dbdescription = map.get('DBDescription')
        return self


class ModifyDBDescriptionResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterParametersRequest(TeaModel):
    def __init__(self, dbcluster_id=None, parameters=None, effective_time=None):
        self.dbcluster_id = dbcluster_id
        self.parameters = parameters
        self.effective_time = effective_time

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.parameters, 'parameters')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['Parameters'] = self.parameters
        result['EffectiveTime'] = self.effective_time
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.parameters = map.get('Parameters')
        self.effective_time = map.get('EffectiveTime')
        return self


class ModifyDBClusterParametersResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterEndpointRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None, nodes=None, read_write_mode=None, auto_add_new_nodes=None, endpoint_config=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id
        self.nodes = nodes
        self.read_write_mode = read_write_mode
        self.auto_add_new_nodes = auto_add_new_nodes
        self.endpoint_config = endpoint_config

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        result['Nodes'] = self.nodes
        result['ReadWriteMode'] = self.read_write_mode
        result['AutoAddNewNodes'] = self.auto_add_new_nodes
        result['EndpointConfig'] = self.endpoint_config
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        self.nodes = map.get('Nodes')
        self.read_write_mode = map.get('ReadWriteMode')
        self.auto_add_new_nodes = map.get('AutoAddNewNodes')
        self.endpoint_config = map.get('EndpointConfig')
        return self


class ModifyDBClusterEndpointResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyAccountPasswordRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, new_account_password=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.new_account_password = new_account_password

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.new_account_password, 'new_account_password')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['NewAccountPassword'] = self.new_account_password
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.new_account_password = map.get('NewAccountPassword')
        return self


class ModifyAccountPasswordResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDBClusterPerformanceRequest(TeaModel):
    def __init__(self, dbcluster_id=None, key=None, start_time=None, end_time=None):
        self.dbcluster_id = dbcluster_id
        self.key = key
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.key, 'key')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['Key'] = self.key
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.key = map.get('Key')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeDBClusterPerformanceResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, engine=None, dbtype=None, dbversion=None, start_time=None, end_time=None, performance_keys=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.start_time = start_time
        self.end_time = end_time
        self.performance_keys = performance_keys

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.performance_keys, 'performance_keys')
        if self.performance_keys:
            self.performance_keys.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        if self.performance_keys is not None:
            result['PerformanceKeys'] = self.performance_keys.to_map()
        else:
            result['PerformanceKeys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        if map.get('PerformanceKeys') is not None:
            temp_model = DescribeDBClusterPerformanceResponsePerformanceKeys()
            self.performance_keys = temp_model.from_map(map['PerformanceKeys'])
        else:
            self.performance_keys = None
        return self


class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue(TeaModel):
    def __init__(self, value=None, timestamp=None):
        self.value = value
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.timestamp = map.get('Timestamp')
        return self


class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints(TeaModel):
    def __init__(self, performance_item_value=None):
        self.performance_item_value = []

    def validate(self):
        self.validate_required(self.performance_item_value, 'performance_item_value')
        if self.performance_item_value:
            for k in self.performance_item_value:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceItemValue'] = []
        if self.performance_item_value is not None:
            for k in self.performance_item_value:
                result['PerformanceItemValue'].append(k.to_map() if k else None)
        else:
            result['PerformanceItemValue'] = None
        return result

    def from_map(self, map={}):
        self.performance_item_value = []
        if map.get('PerformanceItemValue') is not None:
            for k in map.get('PerformanceItemValue'):
                temp_model = DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue()
                temp_model = temp_model.from_map(k)
                self.performance_item_value.append(temp_model)
        else:
            self.performance_item_value = None
        return self


class DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem(TeaModel):
    def __init__(self, dbnode_id=None, measurement=None, metric_name=None, points=None):
        self.dbnode_id = dbnode_id
        self.measurement = measurement
        self.metric_name = metric_name
        self.points = points

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.measurement, 'measurement')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.points, 'points')
        if self.points:
            self.points.validate()

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        result['Measurement'] = self.measurement
        result['MetricName'] = self.metric_name
        if self.points is not None:
            result['Points'] = self.points.to_map()
        else:
            result['Points'] = None
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        self.measurement = map.get('Measurement')
        self.metric_name = map.get('MetricName')
        if map.get('Points') is not None:
            temp_model = DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItemPoints()
            self.points = temp_model.from_map(map['Points'])
        else:
            self.points = None
        return self


class DescribeDBClusterPerformanceResponsePerformanceKeys(TeaModel):
    def __init__(self, performance_item=None):
        self.performance_item = []

    def validate(self):
        self.validate_required(self.performance_item, 'performance_item')
        if self.performance_item:
            for k in self.performance_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceItem'] = []
        if self.performance_item is not None:
            for k in self.performance_item:
                result['PerformanceItem'].append(k.to_map() if k else None)
        else:
            result['PerformanceItem'] = None
        return result

    def from_map(self, map={}):
        self.performance_item = []
        if map.get('PerformanceItem') is not None:
            for k in map.get('PerformanceItem'):
                temp_model = DescribeDBClusterPerformanceResponsePerformanceKeysPerformanceItem()
                temp_model = temp_model.from_map(k)
                self.performance_item.append(temp_model)
        else:
            self.performance_item = None
        return self
class DescribeDBClusterParametersRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterParametersResponse(TeaModel):
    def __init__(self, request_id=None, engine=None, dbtype=None, dbversion=None, running_parameters=None):
        self.request_id = request_id
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.running_parameters = running_parameters

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.running_parameters, 'running_parameters')
        if self.running_parameters:
            self.running_parameters.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        if self.running_parameters is not None:
            result['RunningParameters'] = self.running_parameters.to_map()
        else:
            result['RunningParameters'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        if map.get('RunningParameters') is not None:
            temp_model = DescribeDBClusterParametersResponseRunningParameters()
            self.running_parameters = temp_model.from_map(map['RunningParameters'])
        else:
            self.running_parameters = None
        return self


class DescribeDBClusterParametersResponseRunningParametersParameter(TeaModel):
    def __init__(self, parameter_name=None, data_type=None, default_parameter_value=None, parameter_value=None, is_modifiable=None, force_restart=None, parameter_status=None, checking_code=None, parameter_description=None):
        self.parameter_name = parameter_name
        self.data_type = data_type
        self.default_parameter_value = default_parameter_value
        self.parameter_value = parameter_value
        self.is_modifiable = is_modifiable
        self.force_restart = force_restart
        self.parameter_status = parameter_status
        self.checking_code = checking_code
        self.parameter_description = parameter_description

    def validate(self):
        self.validate_required(self.parameter_name, 'parameter_name')
        self.validate_required(self.data_type, 'data_type')
        self.validate_required(self.default_parameter_value, 'default_parameter_value')
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.is_modifiable, 'is_modifiable')
        self.validate_required(self.force_restart, 'force_restart')
        self.validate_required(self.parameter_status, 'parameter_status')
        self.validate_required(self.checking_code, 'checking_code')
        self.validate_required(self.parameter_description, 'parameter_description')

    def to_map(self):
        result = {}
        result['ParameterName'] = self.parameter_name
        result['DataType'] = self.data_type
        result['DefaultParameterValue'] = self.default_parameter_value
        result['ParameterValue'] = self.parameter_value
        result['IsModifiable'] = self.is_modifiable
        result['ForceRestart'] = self.force_restart
        result['ParameterStatus'] = self.parameter_status
        result['CheckingCode'] = self.checking_code
        result['ParameterDescription'] = self.parameter_description
        return result

    def from_map(self, map={}):
        self.parameter_name = map.get('ParameterName')
        self.data_type = map.get('DataType')
        self.default_parameter_value = map.get('DefaultParameterValue')
        self.parameter_value = map.get('ParameterValue')
        self.is_modifiable = map.get('IsModifiable')
        self.force_restart = map.get('ForceRestart')
        self.parameter_status = map.get('ParameterStatus')
        self.checking_code = map.get('CheckingCode')
        self.parameter_description = map.get('ParameterDescription')
        return self


class DescribeDBClusterParametersResponseRunningParameters(TeaModel):
    def __init__(self, parameter=None):
        self.parameter = []

    def validate(self):
        self.validate_required(self.parameter, 'parameter')
        if self.parameter:
            for k in self.parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Parameter'] = []
        if self.parameter is not None:
            for k in self.parameter:
                result['Parameter'].append(k.to_map() if k else None)
        else:
            result['Parameter'] = None
        return result

    def from_map(self, map={}):
        self.parameter = []
        if map.get('Parameter') is not None:
            for k in map.get('Parameter'):
                temp_model = DescribeDBClusterParametersResponseRunningParametersParameter()
                temp_model = temp_model.from_map(k)
                self.parameter.append(temp_model)
        else:
            self.parameter = None
        return self
class DescribeDBClusterEndpointsRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        return self


class DescribeDBClusterEndpointsResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = DescribeDBClusterEndpointsResponseItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self


class DescribeDBClusterEndpointsResponseItemsAddressItems(TeaModel):
    def __init__(self, connection_string=None, ipaddress=None, net_type=None, port=None, vpcid=None, v_switch_id=None, vpc_instance_id=None, private_zone_connection_string=None):
        self.connection_string = connection_string
        self.ipaddress = ipaddress
        self.net_type = net_type
        self.port = port
        self.vpcid = vpcid
        self.v_switch_id = v_switch_id
        self.vpc_instance_id = vpc_instance_id
        self.private_zone_connection_string = private_zone_connection_string

    def validate(self):
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.net_type, 'net_type')
        self.validate_required(self.port, 'port')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.vpc_instance_id, 'vpc_instance_id')
        self.validate_required(self.private_zone_connection_string, 'private_zone_connection_string')

    def to_map(self):
        result = {}
        result['ConnectionString'] = self.connection_string
        result['IPAddress'] = self.ipaddress
        result['NetType'] = self.net_type
        result['Port'] = self.port
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.v_switch_id
        result['VpcInstanceId'] = self.vpc_instance_id
        result['PrivateZoneConnectionString'] = self.private_zone_connection_string
        return result

    def from_map(self, map={}):
        self.connection_string = map.get('ConnectionString')
        self.ipaddress = map.get('IPAddress')
        self.net_type = map.get('NetType')
        self.port = map.get('Port')
        self.vpcid = map.get('VPCId')
        self.v_switch_id = map.get('VSwitchId')
        self.vpc_instance_id = map.get('VpcInstanceId')
        self.private_zone_connection_string = map.get('PrivateZoneConnectionString')
        return self


class DescribeDBClusterEndpointsResponseItems(TeaModel):
    def __init__(self, dbendpoint_id=None, endpoint_type=None, nodes=None, read_write_mode=None, auto_add_new_nodes=None, endpoint_config=None, node_with_roles=None, address_items=None):
        self.dbendpoint_id = dbendpoint_id
        self.endpoint_type = endpoint_type
        self.nodes = nodes
        self.read_write_mode = read_write_mode
        self.auto_add_new_nodes = auto_add_new_nodes
        self.endpoint_config = endpoint_config
        self.node_with_roles = node_with_roles
        self.address_items = []

    def validate(self):
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.endpoint_type, 'endpoint_type')
        self.validate_required(self.nodes, 'nodes')
        self.validate_required(self.read_write_mode, 'read_write_mode')
        self.validate_required(self.auto_add_new_nodes, 'auto_add_new_nodes')
        self.validate_required(self.endpoint_config, 'endpoint_config')
        self.validate_required(self.node_with_roles, 'node_with_roles')
        self.validate_required(self.address_items, 'address_items')
        if self.address_items:
            for k in self.address_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBEndpointId'] = self.dbendpoint_id
        result['EndpointType'] = self.endpoint_type
        result['Nodes'] = self.nodes
        result['ReadWriteMode'] = self.read_write_mode
        result['AutoAddNewNodes'] = self.auto_add_new_nodes
        result['EndpointConfig'] = self.endpoint_config
        result['NodeWithRoles'] = self.node_with_roles
        result['AddressItems'] = []
        if self.address_items is not None:
            for k in self.address_items:
                result['AddressItems'].append(k.to_map() if k else None)
        else:
            result['AddressItems'] = None
        return result

    def from_map(self, map={}):
        self.dbendpoint_id = map.get('DBEndpointId')
        self.endpoint_type = map.get('EndpointType')
        self.nodes = map.get('Nodes')
        self.read_write_mode = map.get('ReadWriteMode')
        self.auto_add_new_nodes = map.get('AutoAddNewNodes')
        self.endpoint_config = map.get('EndpointConfig')
        self.node_with_roles = map.get('NodeWithRoles')
        self.address_items = []
        if map.get('AddressItems') is not None:
            for k in map.get('AddressItems'):
                temp_model = DescribeDBClusterEndpointsResponseItemsAddressItems()
                temp_model = temp_model.from_map(k)
                self.address_items.append(temp_model)
        else:
            self.address_items = None
        return self
class DeleteDBEndpointAddressRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None, net_type=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id
        self.net_type = net_type

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.net_type, 'net_type')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        result['NetType'] = self.net_type
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        self.net_type = map.get('NetType')
        return self


class DeleteDBEndpointAddressResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteDBClusterEndpointRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        return self


class DeleteDBClusterEndpointResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateDBEndpointAddressRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbendpoint_id=None, connection_string_prefix=None, net_type=None):
        self.dbcluster_id = dbcluster_id
        self.dbendpoint_id = dbendpoint_id
        self.connection_string_prefix = connection_string_prefix
        self.net_type = net_type

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbendpoint_id, 'dbendpoint_id')
        self.validate_required(self.net_type, 'net_type')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBEndpointId'] = self.dbendpoint_id
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['NetType'] = self.net_type
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbendpoint_id = map.get('DBEndpointId')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.net_type = map.get('NetType')
        return self


class CreateDBEndpointAddressResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateDBClusterEndpointRequest(TeaModel):
    def __init__(self, dbcluster_id=None, endpoint_type=None, nodes=None, read_write_mode=None, auto_add_new_nodes=None, endpoint_config=None, client_token=None):
        self.dbcluster_id = dbcluster_id
        self.endpoint_type = endpoint_type
        self.nodes = nodes
        self.read_write_mode = read_write_mode
        self.auto_add_new_nodes = auto_add_new_nodes
        self.endpoint_config = endpoint_config
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.endpoint_type, 'endpoint_type')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['EndpointType'] = self.endpoint_type
        result['Nodes'] = self.nodes
        result['ReadWriteMode'] = self.read_write_mode
        result['AutoAddNewNodes'] = self.auto_add_new_nodes
        result['EndpointConfig'] = self.endpoint_config
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.endpoint_type = map.get('EndpointType')
        self.nodes = map.get('Nodes')
        self.read_write_mode = map.get('ReadWriteMode')
        self.auto_add_new_nodes = map.get('AutoAddNewNodes')
        self.endpoint_config = map.get('EndpointConfig')
        self.client_token = map.get('ClientToken')
        return self


class CreateDBClusterEndpointResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class RestartDBNodeRequest(TeaModel):
    def __init__(self, dbnode_id=None):
        self.dbnode_id = dbnode_id

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        return self


class RestartDBNodeResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDBNodePerformanceRequest(TeaModel):
    def __init__(self, dbnode_id=None, key=None, start_time=None, end_time=None, dbcluster_id=None):
        self.dbnode_id = dbnode_id
        self.key = key
        self.start_time = start_time
        self.end_time = end_time
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.key, 'key')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        result['Key'] = self.key
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        self.key = map.get('Key')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBNodePerformanceResponse(TeaModel):
    def __init__(self, request_id=None, dbnode_id=None, engine=None, dbtype=None, dbversion=None, start_time=None, end_time=None, performance_keys=None):
        self.request_id = request_id
        self.dbnode_id = dbnode_id
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.start_time = start_time
        self.end_time = end_time
        self.performance_keys = performance_keys

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.performance_keys, 'performance_keys')
        if self.performance_keys:
            self.performance_keys.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBNodeId'] = self.dbnode_id
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        if self.performance_keys is not None:
            result['PerformanceKeys'] = self.performance_keys.to_map()
        else:
            result['PerformanceKeys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbnode_id = map.get('DBNodeId')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        if map.get('PerformanceKeys') is not None:
            temp_model = DescribeDBNodePerformanceResponsePerformanceKeys()
            self.performance_keys = temp_model.from_map(map['PerformanceKeys'])
        else:
            self.performance_keys = None
        return self


class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue(TeaModel):
    def __init__(self, value=None, timestamp=None):
        self.value = value
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.timestamp = map.get('Timestamp')
        return self


class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints(TeaModel):
    def __init__(self, performance_item_value=None):
        self.performance_item_value = []

    def validate(self):
        self.validate_required(self.performance_item_value, 'performance_item_value')
        if self.performance_item_value:
            for k in self.performance_item_value:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceItemValue'] = []
        if self.performance_item_value is not None:
            for k in self.performance_item_value:
                result['PerformanceItemValue'].append(k.to_map() if k else None)
        else:
            result['PerformanceItemValue'] = None
        return result

    def from_map(self, map={}):
        self.performance_item_value = []
        if map.get('PerformanceItemValue') is not None:
            for k in map.get('PerformanceItemValue'):
                temp_model = DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPointsPerformanceItemValue()
                temp_model = temp_model.from_map(k)
                self.performance_item_value.append(temp_model)
        else:
            self.performance_item_value = None
        return self


class DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem(TeaModel):
    def __init__(self, metric_name=None, measurement=None, points=None):
        self.metric_name = metric_name
        self.measurement = measurement
        self.points = points

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.measurement, 'measurement')
        self.validate_required(self.points, 'points')
        if self.points:
            self.points.validate()

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['Measurement'] = self.measurement
        if self.points is not None:
            result['Points'] = self.points.to_map()
        else:
            result['Points'] = None
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.measurement = map.get('Measurement')
        if map.get('Points') is not None:
            temp_model = DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItemPoints()
            self.points = temp_model.from_map(map['Points'])
        else:
            self.points = None
        return self


class DescribeDBNodePerformanceResponsePerformanceKeys(TeaModel):
    def __init__(self, performance_item=None):
        self.performance_item = []

    def validate(self):
        self.validate_required(self.performance_item, 'performance_item')
        if self.performance_item:
            for k in self.performance_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceItem'] = []
        if self.performance_item is not None:
            for k in self.performance_item:
                result['PerformanceItem'].append(k.to_map() if k else None)
        else:
            result['PerformanceItem'] = None
        return result

    def from_map(self, map={}):
        self.performance_item = []
        if map.get('PerformanceItem') is not None:
            for k in map.get('PerformanceItem'):
                temp_model = DescribeDBNodePerformanceResponsePerformanceKeysPerformanceItem()
                temp_model = temp_model.from_map(k)
                self.performance_item.append(temp_model)
        else:
            self.performance_item = None
        return self
class ModifyDBClusterAccessWhitelistRequest(TeaModel):
    def __init__(self, dbcluster_id=None, security_ips=None, dbcluster_iparray_name=None, dbcluster_iparray_attribute=None, white_list_type=None, security_group_ids=None, modify_mode=None):
        self.dbcluster_id = dbcluster_id
        self.security_ips = security_ips
        self.dbcluster_iparray_name = dbcluster_iparray_name
        self.dbcluster_iparray_attribute = dbcluster_iparray_attribute
        self.white_list_type = white_list_type
        self.security_group_ids = security_group_ids
        self.modify_mode = modify_mode

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['SecurityIps'] = self.security_ips
        result['DBClusterIPArrayName'] = self.dbcluster_iparray_name
        result['DBClusterIPArrayAttribute'] = self.dbcluster_iparray_attribute
        result['WhiteListType'] = self.white_list_type
        result['SecurityGroupIds'] = self.security_group_ids
        result['ModifyMode'] = self.modify_mode
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.security_ips = map.get('SecurityIps')
        self.dbcluster_iparray_name = map.get('DBClusterIPArrayName')
        self.dbcluster_iparray_attribute = map.get('DBClusterIPArrayAttribute')
        self.white_list_type = map.get('WhiteListType')
        self.security_group_ids = map.get('SecurityGroupIds')
        self.modify_mode = map.get('ModifyMode')
        return self


class ModifyDBClusterAccessWhitelistResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDBClusterAccessWhitelistRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterAccessWhitelistResponse(TeaModel):
    def __init__(self, request_id=None, items=None, dbcluster_security_groups=None):
        self.request_id = request_id
        self.items = items
        self.dbcluster_security_groups = dbcluster_security_groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()
        self.validate_required(self.dbcluster_security_groups, 'dbcluster_security_groups')
        if self.dbcluster_security_groups:
            self.dbcluster_security_groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        if self.dbcluster_security_groups is not None:
            result['DBClusterSecurityGroups'] = self.dbcluster_security_groups.to_map()
        else:
            result['DBClusterSecurityGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeDBClusterAccessWhitelistResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        if map.get('DBClusterSecurityGroups') is not None:
            temp_model = DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups()
            self.dbcluster_security_groups = temp_model.from_map(map['DBClusterSecurityGroups'])
        else:
            self.dbcluster_security_groups = None
        return self


class DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray(TeaModel):
    def __init__(self, dbcluster_iparray_name=None, dbcluster_iparray_attribute=None, security_ips=None):
        self.dbcluster_iparray_name = dbcluster_iparray_name
        self.dbcluster_iparray_attribute = dbcluster_iparray_attribute
        self.security_ips = security_ips

    def validate(self):
        self.validate_required(self.dbcluster_iparray_name, 'dbcluster_iparray_name')
        self.validate_required(self.dbcluster_iparray_attribute, 'dbcluster_iparray_attribute')
        self.validate_required(self.security_ips, 'security_ips')

    def to_map(self):
        result = {}
        result['DBClusterIPArrayName'] = self.dbcluster_iparray_name
        result['DBClusterIPArrayAttribute'] = self.dbcluster_iparray_attribute
        result['SecurityIps'] = self.security_ips
        return result

    def from_map(self, map={}):
        self.dbcluster_iparray_name = map.get('DBClusterIPArrayName')
        self.dbcluster_iparray_attribute = map.get('DBClusterIPArrayAttribute')
        self.security_ips = map.get('SecurityIps')
        return self


class DescribeDBClusterAccessWhitelistResponseItems(TeaModel):
    def __init__(self, dbcluster_iparray=None):
        self.dbcluster_iparray = []

    def validate(self):
        self.validate_required(self.dbcluster_iparray, 'dbcluster_iparray')
        if self.dbcluster_iparray:
            for k in self.dbcluster_iparray:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBClusterIPArray'] = []
        if self.dbcluster_iparray is not None:
            for k in self.dbcluster_iparray:
                result['DBClusterIPArray'].append(k.to_map() if k else None)
        else:
            result['DBClusterIPArray'] = None
        return result

    def from_map(self, map={}):
        self.dbcluster_iparray = []
        if map.get('DBClusterIPArray') is not None:
            for k in map.get('DBClusterIPArray'):
                temp_model = DescribeDBClusterAccessWhitelistResponseItemsDBClusterIPArray()
                temp_model = temp_model.from_map(k)
                self.dbcluster_iparray.append(temp_model)
        else:
            self.dbcluster_iparray = None
        return self


class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup(TeaModel):
    def __init__(self, security_group_id=None, security_group_name=None):
        self.security_group_id = security_group_id
        self.security_group_name = security_group_name

    def validate(self):
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.security_group_name, 'security_group_name')

    def to_map(self):
        result = {}
        result['SecurityGroupId'] = self.security_group_id
        result['SecurityGroupName'] = self.security_group_name
        return result

    def from_map(self, map={}):
        self.security_group_id = map.get('SecurityGroupId')
        self.security_group_name = map.get('SecurityGroupName')
        return self


class DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroups(TeaModel):
    def __init__(self, dbcluster_security_group=None):
        self.dbcluster_security_group = []

    def validate(self):
        self.validate_required(self.dbcluster_security_group, 'dbcluster_security_group')
        if self.dbcluster_security_group:
            for k in self.dbcluster_security_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBClusterSecurityGroup'] = []
        if self.dbcluster_security_group is not None:
            for k in self.dbcluster_security_group:
                result['DBClusterSecurityGroup'].append(k.to_map() if k else None)
        else:
            result['DBClusterSecurityGroup'] = None
        return result

    def from_map(self, map={}):
        self.dbcluster_security_group = []
        if map.get('DBClusterSecurityGroup') is not None:
            for k in map.get('DBClusterSecurityGroup'):
                temp_model = DescribeDBClusterAccessWhitelistResponseDBClusterSecurityGroupsDBClusterSecurityGroup()
                temp_model = temp_model.from_map(k)
                self.dbcluster_security_group.append(temp_model)
        else:
            self.dbcluster_security_group = None
        return self
class ModifyDBClusterMaintainTimeRequest(TeaModel):
    def __init__(self, dbcluster_id=None, maintain_time=None):
        self.dbcluster_id = dbcluster_id
        self.maintain_time = maintain_time

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.maintain_time, 'maintain_time')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['MaintainTime'] = self.maintain_time
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.maintain_time = map.get('MaintainTime')
        return self


class ModifyDBClusterMaintainTimeResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class RevokeAccountPrivilegeRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, dbname=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.dbname = dbname

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.dbname, 'dbname')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['DBName'] = self.dbname
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.dbname = map.get('DBName')
        return self


class RevokeAccountPrivilegeResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ResetAccountRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, account_password=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.account_password = account_password

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        return self


class ResetAccountResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class GrantAccountPrivilegeRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, dbname=None, account_privilege=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.dbname = dbname
        self.account_privilege = account_privilege

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.account_privilege, 'account_privilege')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['DBName'] = self.dbname
        result['AccountPrivilege'] = self.account_privilege
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.dbname = map.get('DBName')
        self.account_privilege = map.get('AccountPrivilege')
        return self


class GrantAccountPrivilegeResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeDatabasesRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbname=None):
        self.dbcluster_id = dbcluster_id
        self.dbname = dbname

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBName'] = self.dbname
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbname = map.get('DBName')
        return self


class DescribeDatabasesResponse(TeaModel):
    def __init__(self, request_id=None, databases=None):
        self.request_id = request_id
        self.databases = databases

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.databases, 'databases')
        if self.databases:
            self.databases.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.databases is not None:
            result['Databases'] = self.databases.to_map()
        else:
            result['Databases'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Databases') is not None:
            temp_model = DescribeDatabasesResponseDatabases()
            self.databases = temp_model.from_map(map['Databases'])
        else:
            self.databases = None
        return self


class DescribeDatabasesResponseDatabasesDatabaseAccountsAccount(TeaModel):
    def __init__(self, account_name=None, account_status=None, account_privilege=None, privilege_status=None):
        self.account_name = account_name
        self.account_status = account_status
        self.account_privilege = account_privilege
        self.privilege_status = privilege_status

    def validate(self):
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_status, 'account_status')
        self.validate_required(self.account_privilege, 'account_privilege')
        self.validate_required(self.privilege_status, 'privilege_status')

    def to_map(self):
        result = {}
        result['AccountName'] = self.account_name
        result['AccountStatus'] = self.account_status
        result['AccountPrivilege'] = self.account_privilege
        result['PrivilegeStatus'] = self.privilege_status
        return result

    def from_map(self, map={}):
        self.account_name = map.get('AccountName')
        self.account_status = map.get('AccountStatus')
        self.account_privilege = map.get('AccountPrivilege')
        self.privilege_status = map.get('PrivilegeStatus')
        return self


class DescribeDatabasesResponseDatabasesDatabaseAccounts(TeaModel):
    def __init__(self, account=None):
        self.account = []

    def validate(self):
        self.validate_required(self.account, 'account')
        if self.account:
            for k in self.account:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Account'] = []
        if self.account is not None:
            for k in self.account:
                result['Account'].append(k.to_map() if k else None)
        else:
            result['Account'] = None
        return result

    def from_map(self, map={}):
        self.account = []
        if map.get('Account') is not None:
            for k in map.get('Account'):
                temp_model = DescribeDatabasesResponseDatabasesDatabaseAccountsAccount()
                temp_model = temp_model.from_map(k)
                self.account.append(temp_model)
        else:
            self.account = None
        return self


class DescribeDatabasesResponseDatabasesDatabase(TeaModel):
    def __init__(self, dbname=None, dbstatus=None, dbdescription=None, character_set_name=None, engine=None, accounts=None):
        self.dbname = dbname
        self.dbstatus = dbstatus
        self.dbdescription = dbdescription
        self.character_set_name = character_set_name
        self.engine = engine
        self.accounts = accounts

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.dbstatus, 'dbstatus')
        self.validate_required(self.dbdescription, 'dbdescription')
        self.validate_required(self.character_set_name, 'character_set_name')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.accounts, 'accounts')
        if self.accounts:
            self.accounts.validate()

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['DBStatus'] = self.dbstatus
        result['DBDescription'] = self.dbdescription
        result['CharacterSetName'] = self.character_set_name
        result['Engine'] = self.engine
        if self.accounts is not None:
            result['Accounts'] = self.accounts.to_map()
        else:
            result['Accounts'] = None
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.dbstatus = map.get('DBStatus')
        self.dbdescription = map.get('DBDescription')
        self.character_set_name = map.get('CharacterSetName')
        self.engine = map.get('Engine')
        if map.get('Accounts') is not None:
            temp_model = DescribeDatabasesResponseDatabasesDatabaseAccounts()
            self.accounts = temp_model.from_map(map['Accounts'])
        else:
            self.accounts = None
        return self


class DescribeDatabasesResponseDatabases(TeaModel):
    def __init__(self, database=None):
        self.database = []

    def validate(self):
        self.validate_required(self.database, 'database')
        if self.database:
            for k in self.database:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Database'] = []
        if self.database is not None:
            for k in self.database:
                result['Database'].append(k.to_map() if k else None)
        else:
            result['Database'] = None
        return result

    def from_map(self, map={}):
        self.database = []
        if map.get('Database') is not None:
            for k in map.get('Database'):
                temp_model = DescribeDatabasesResponseDatabasesDatabase()
                temp_model = temp_model.from_map(k)
                self.database.append(temp_model)
        else:
            self.database = None
        return self
class DeleteDatabaseRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbname=None):
        self.dbcluster_id = dbcluster_id
        self.dbname = dbname

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbname, 'dbname')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBName'] = self.dbname
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbname = map.get('DBName')
        return self


class DeleteDatabaseResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteAccountRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        return self


class DeleteAccountResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateDatabaseRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbname=None, character_set_name=None, dbdescription=None, account_name=None, account_privilege=None, collate=None, ctype=None):
        self.dbcluster_id = dbcluster_id
        self.dbname = dbname
        self.character_set_name = character_set_name
        self.dbdescription = dbdescription
        self.account_name = account_name
        self.account_privilege = account_privilege
        self.collate = collate
        self.ctype = ctype

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.character_set_name, 'character_set_name')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBName'] = self.dbname
        result['CharacterSetName'] = self.character_set_name
        result['DBDescription'] = self.dbdescription
        result['AccountName'] = self.account_name
        result['AccountPrivilege'] = self.account_privilege
        result['Collate'] = self.collate
        result['Ctype'] = self.ctype
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbname = map.get('DBName')
        self.character_set_name = map.get('CharacterSetName')
        self.dbdescription = map.get('DBDescription')
        self.account_name = map.get('AccountName')
        self.account_privilege = map.get('AccountPrivilege')
        self.collate = map.get('Collate')
        self.ctype = map.get('Ctype')
        return self


class CreateDatabaseResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteBackupRequest(TeaModel):
    def __init__(self, dbcluster_id=None, backup_id=None):
        self.dbcluster_id = dbcluster_id
        self.backup_id = backup_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.backup_id, 'backup_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['BackupId'] = self.backup_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_id = map.get('BackupId')
        return self


class DeleteBackupResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeSlowLogsRequest(TeaModel):
    def __init__(self, region_id=None, dbcluster_id=None, start_time=None, end_time=None, dbname=None, page_size=None, page_number=None):
        self.region_id = region_id
        self.dbcluster_id = dbcluster_id
        self.start_time = start_time
        self.end_time = end_time
        self.dbname = dbname
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DBClusterId'] = self.dbcluster_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DBName'] = self.dbname
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.dbcluster_id = map.get('DBClusterId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dbname = map.get('DBName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeSlowLogsResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, start_time=None, end_time=None, engine=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.start_time = start_time
        self.end_time = end_time
        self.engine = engine
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Engine'] = self.engine
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.engine = map.get('Engine')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeSlowLogsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSlowLogsResponseItemsSQLSlowLog(TeaModel):
    def __init__(self, dbnode_id=None, parse_max_row_count=None, total_lock_times=None, dbname=None, max_execution_time=None, _sqlhash=None, sqltext=None, create_time=None, total_execution_times=None, return_total_row_counts=None, total_execution_counts=None, max_lock_time=None, return_max_row_count=None, parse_total_row_counts=None):
        self.dbnode_id = dbnode_id
        self.parse_max_row_count = parse_max_row_count
        self.total_lock_times = total_lock_times
        self.dbname = dbname
        self.max_execution_time = max_execution_time
        self._sqlhash = _sqlhash
        self.sqltext = sqltext
        self.create_time = create_time
        self.total_execution_times = total_execution_times
        self.return_total_row_counts = return_total_row_counts
        self.total_execution_counts = total_execution_counts
        self.max_lock_time = max_lock_time
        self.return_max_row_count = return_max_row_count
        self.parse_total_row_counts = parse_total_row_counts

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.parse_max_row_count, 'parse_max_row_count')
        self.validate_required(self.total_lock_times, 'total_lock_times')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.max_execution_time, 'max_execution_time')
        self.validate_required(self._sqlhash, '_sqlhash')
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.total_execution_times, 'total_execution_times')
        self.validate_required(self.return_total_row_counts, 'return_total_row_counts')
        self.validate_required(self.total_execution_counts, 'total_execution_counts')
        self.validate_required(self.max_lock_time, 'max_lock_time')
        self.validate_required(self.return_max_row_count, 'return_max_row_count')
        self.validate_required(self.parse_total_row_counts, 'parse_total_row_counts')

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        result['ParseMaxRowCount'] = self.parse_max_row_count
        result['TotalLockTimes'] = self.total_lock_times
        result['DBName'] = self.dbname
        result['MaxExecutionTime'] = self.max_execution_time
        result['SQLHASH'] = self._sqlhash
        result['SQLText'] = self.sqltext
        result['CreateTime'] = self.create_time
        result['TotalExecutionTimes'] = self.total_execution_times
        result['ReturnTotalRowCounts'] = self.return_total_row_counts
        result['TotalExecutionCounts'] = self.total_execution_counts
        result['MaxLockTime'] = self.max_lock_time
        result['ReturnMaxRowCount'] = self.return_max_row_count
        result['ParseTotalRowCounts'] = self.parse_total_row_counts
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        self.parse_max_row_count = map.get('ParseMaxRowCount')
        self.total_lock_times = map.get('TotalLockTimes')
        self.dbname = map.get('DBName')
        self.max_execution_time = map.get('MaxExecutionTime')
        self._sqlhash = map.get('SQLHASH')
        self.sqltext = map.get('SQLText')
        self.create_time = map.get('CreateTime')
        self.total_execution_times = map.get('TotalExecutionTimes')
        self.return_total_row_counts = map.get('ReturnTotalRowCounts')
        self.total_execution_counts = map.get('TotalExecutionCounts')
        self.max_lock_time = map.get('MaxLockTime')
        self.return_max_row_count = map.get('ReturnMaxRowCount')
        self.parse_total_row_counts = map.get('ParseTotalRowCounts')
        return self


class DescribeSlowLogsResponseItems(TeaModel):
    def __init__(self, sqlslow_log=None):
        self.sqlslow_log = []

    def validate(self):
        self.validate_required(self.sqlslow_log, 'sqlslow_log')
        if self.sqlslow_log:
            for k in self.sqlslow_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SQLSlowLog'] = []
        if self.sqlslow_log is not None:
            for k in self.sqlslow_log:
                result['SQLSlowLog'].append(k.to_map() if k else None)
        else:
            result['SQLSlowLog'] = None
        return result

    def from_map(self, map={}):
        self.sqlslow_log = []
        if map.get('SQLSlowLog') is not None:
            for k in map.get('SQLSlowLog'):
                temp_model = DescribeSlowLogsResponseItemsSQLSlowLog()
                temp_model = temp_model.from_map(k)
                self.sqlslow_log.append(temp_model)
        else:
            self.sqlslow_log = None
        return self
class DescribeSlowLogRecordsRequest(TeaModel):
    def __init__(self, region_id=None, dbcluster_id=None, start_time=None, end_time=None, dbname=None, page_size=None, page_number=None, _sqlhash=None):
        self.region_id = region_id
        self.dbcluster_id = dbcluster_id
        self.start_time = start_time
        self.end_time = end_time
        self.dbname = dbname
        self.page_size = page_size
        self.page_number = page_number
        self._sqlhash = _sqlhash

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DBClusterId'] = self.dbcluster_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DBName'] = self.dbname
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['SQLHASH'] = self._sqlhash
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.dbcluster_id = map.get('DBClusterId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dbname = map.get('DBName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self._sqlhash = map.get('SQLHASH')
        return self


class DescribeSlowLogRecordsResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, engine=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.engine = engine
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['Engine'] = self.engine
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.engine = map.get('Engine')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeSlowLogRecordsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSlowLogRecordsResponseItemsSQLSlowRecord(TeaModel):
    def __init__(self, host_address=None, dbname=None, sqltext=None, query_times=None, lock_times=None, parse_row_counts=None, return_row_counts=None, execution_start_time=None, dbnode_id=None):
        self.host_address = host_address
        self.dbname = dbname
        self.sqltext = sqltext
        self.query_times = query_times
        self.lock_times = lock_times
        self.parse_row_counts = parse_row_counts
        self.return_row_counts = return_row_counts
        self.execution_start_time = execution_start_time
        self.dbnode_id = dbnode_id

    def validate(self):
        self.validate_required(self.host_address, 'host_address')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.query_times, 'query_times')
        self.validate_required(self.lock_times, 'lock_times')
        self.validate_required(self.parse_row_counts, 'parse_row_counts')
        self.validate_required(self.return_row_counts, 'return_row_counts')
        self.validate_required(self.execution_start_time, 'execution_start_time')
        self.validate_required(self.dbnode_id, 'dbnode_id')

    def to_map(self):
        result = {}
        result['HostAddress'] = self.host_address
        result['DBName'] = self.dbname
        result['SQLText'] = self.sqltext
        result['QueryTimes'] = self.query_times
        result['LockTimes'] = self.lock_times
        result['ParseRowCounts'] = self.parse_row_counts
        result['ReturnRowCounts'] = self.return_row_counts
        result['ExecutionStartTime'] = self.execution_start_time
        result['DBNodeId'] = self.dbnode_id
        return result

    def from_map(self, map={}):
        self.host_address = map.get('HostAddress')
        self.dbname = map.get('DBName')
        self.sqltext = map.get('SQLText')
        self.query_times = map.get('QueryTimes')
        self.lock_times = map.get('LockTimes')
        self.parse_row_counts = map.get('ParseRowCounts')
        self.return_row_counts = map.get('ReturnRowCounts')
        self.execution_start_time = map.get('ExecutionStartTime')
        self.dbnode_id = map.get('DBNodeId')
        return self


class DescribeSlowLogRecordsResponseItems(TeaModel):
    def __init__(self, sqlslow_record=None):
        self.sqlslow_record = []

    def validate(self):
        self.validate_required(self.sqlslow_record, 'sqlslow_record')
        if self.sqlslow_record:
            for k in self.sqlslow_record:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SQLSlowRecord'] = []
        if self.sqlslow_record is not None:
            for k in self.sqlslow_record:
                result['SQLSlowRecord'].append(k.to_map() if k else None)
        else:
            result['SQLSlowRecord'] = None
        return result

    def from_map(self, map={}):
        self.sqlslow_record = []
        if map.get('SQLSlowRecord') is not None:
            for k in map.get('SQLSlowRecord'):
                temp_model = DescribeSlowLogRecordsResponseItemsSQLSlowRecord()
                temp_model = temp_model.from_map(k)
                self.sqlslow_record.append(temp_model)
        else:
            self.sqlslow_record = None
        return self
class FailoverDBClusterRequest(TeaModel):
    def __init__(self, dbcluster_id=None, target_dbnode_id=None, client_token=None):
        self.dbcluster_id = dbcluster_id
        self.target_dbnode_id = target_dbnode_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['TargetDBNodeId'] = self.target_dbnode_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.target_dbnode_id = map.get('TargetDBNodeId')
        self.client_token = map.get('ClientToken')
        return self


class FailoverDBClusterResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyDBClusterDescriptionRequest(TeaModel):
    def __init__(self, dbcluster_id=None, dbcluster_description=None):
        self.dbcluster_id = dbcluster_id
        self.dbcluster_description = dbcluster_description

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbcluster_description, 'dbcluster_description')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBClusterDescription'] = self.dbcluster_description
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbcluster_description = map.get('DBClusterDescription')
        return self


class ModifyDBClusterDescriptionResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ModifyAccountDescriptionRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, account_description=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.account_description = account_description

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_description, 'account_description')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['AccountDescription'] = self.account_description
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.account_description = map.get('AccountDescription')
        return self


class ModifyAccountDescriptionResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeRegionsRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, request_id=None, regions=None):
        self.request_id = request_id
        self.regions = regions

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.regions, 'regions')
        if self.regions:
            self.regions.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.regions is not None:
            result['Regions'] = self.regions.to_map()
        else:
            result['Regions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Regions') is not None:
            temp_model = DescribeRegionsResponseRegions()
            self.regions = temp_model.from_map(map['Regions'])
        else:
            self.regions = None
        return self


class DescribeRegionsResponseRegionsRegionZonesZone(TeaModel):
    def __init__(self, zone_id=None, vpc_enabled=None):
        self.zone_id = zone_id
        self.vpc_enabled = vpc_enabled

    def validate(self):
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.vpc_enabled, 'vpc_enabled')

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        result['VpcEnabled'] = self.vpc_enabled
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        self.vpc_enabled = map.get('VpcEnabled')
        return self


class DescribeRegionsResponseRegionsRegionZones(TeaModel):
    def __init__(self, zone=None):
        self.zone = []

    def validate(self):
        self.validate_required(self.zone, 'zone')
        if self.zone:
            for k in self.zone:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Zone'] = []
        if self.zone is not None:
            for k in self.zone:
                result['Zone'].append(k.to_map() if k else None)
        else:
            result['Zone'] = None
        return result

    def from_map(self, map={}):
        self.zone = []
        if map.get('Zone') is not None:
            for k in map.get('Zone'):
                temp_model = DescribeRegionsResponseRegionsRegionZonesZone()
                temp_model = temp_model.from_map(k)
                self.zone.append(temp_model)
        else:
            self.zone = None
        return self


class DescribeRegionsResponseRegionsRegion(TeaModel):
    def __init__(self, region_id=None, zones=None):
        self.region_id = region_id
        self.zones = zones

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zones, 'zones')
        if self.zones:
            self.zones.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        if self.zones is not None:
            result['Zones'] = self.zones.to_map()
        else:
            result['Zones'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        if map.get('Zones') is not None:
            temp_model = DescribeRegionsResponseRegionsRegionZones()
            self.zones = temp_model.from_map(map['Zones'])
        else:
            self.zones = None
        return self


class DescribeRegionsResponseRegions(TeaModel):
    def __init__(self, region=None):
        self.region = []

    def validate(self):
        self.validate_required(self.region, 'region')
        if self.region:
            for k in self.region:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Region'] = []
        if self.region is not None:
            for k in self.region:
                result['Region'].append(k.to_map() if k else None)
        else:
            result['Region'] = None
        return result

    def from_map(self, map={}):
        self.region = []
        if map.get('Region') is not None:
            for k in map.get('Region'):
                temp_model = DescribeRegionsResponseRegionsRegion()
                temp_model = temp_model.from_map(k)
                self.region.append(temp_model)
        else:
            self.region = None
        return self
class DescribeAccountsRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        return self


class DescribeAccountsResponse(TeaModel):
    def __init__(self, request_id=None, accounts=None):
        self.request_id = request_id
        self.accounts = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.accounts, 'accounts')
        if self.accounts:
            for k in self.accounts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Accounts'] = []
        if self.accounts is not None:
            for k in self.accounts:
                result['Accounts'].append(k.to_map() if k else None)
        else:
            result['Accounts'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.accounts = []
        if map.get('Accounts') is not None:
            for k in map.get('Accounts'):
                temp_model = DescribeAccountsResponseAccounts()
                temp_model = temp_model.from_map(k)
                self.accounts.append(temp_model)
        else:
            self.accounts = None
        return self


class DescribeAccountsResponseAccountsDatabasePrivileges(TeaModel):
    def __init__(self, dbname=None, account_privilege=None):
        self.dbname = dbname
        self.account_privilege = account_privilege

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.account_privilege, 'account_privilege')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['AccountPrivilege'] = self.account_privilege
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.account_privilege = map.get('AccountPrivilege')
        return self


class DescribeAccountsResponseAccounts(TeaModel):
    def __init__(self, account_name=None, account_status=None, account_description=None, account_type=None, account_lock_state=None, privilege_exceeded=None, account_password_valid_time=None, database_privileges=None):
        self.account_name = account_name
        self.account_status = account_status
        self.account_description = account_description
        self.account_type = account_type
        self.account_lock_state = account_lock_state
        self.privilege_exceeded = privilege_exceeded
        self.account_password_valid_time = account_password_valid_time
        self.database_privileges = []

    def validate(self):
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_status, 'account_status')
        self.validate_required(self.account_description, 'account_description')
        self.validate_required(self.account_type, 'account_type')
        self.validate_required(self.account_lock_state, 'account_lock_state')
        self.validate_required(self.privilege_exceeded, 'privilege_exceeded')
        self.validate_required(self.account_password_valid_time, 'account_password_valid_time')
        self.validate_required(self.database_privileges, 'database_privileges')
        if self.database_privileges:
            for k in self.database_privileges:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccountName'] = self.account_name
        result['AccountStatus'] = self.account_status
        result['AccountDescription'] = self.account_description
        result['AccountType'] = self.account_type
        result['AccountLockState'] = self.account_lock_state
        result['PrivilegeExceeded'] = self.privilege_exceeded
        result['AccountPasswordValidTime'] = self.account_password_valid_time
        result['DatabasePrivileges'] = []
        if self.database_privileges is not None:
            for k in self.database_privileges:
                result['DatabasePrivileges'].append(k.to_map() if k else None)
        else:
            result['DatabasePrivileges'] = None
        return result

    def from_map(self, map={}):
        self.account_name = map.get('AccountName')
        self.account_status = map.get('AccountStatus')
        self.account_description = map.get('AccountDescription')
        self.account_type = map.get('AccountType')
        self.account_lock_state = map.get('AccountLockState')
        self.privilege_exceeded = map.get('PrivilegeExceeded')
        self.account_password_valid_time = map.get('AccountPasswordValidTime')
        self.database_privileges = []
        if map.get('DatabasePrivileges') is not None:
            for k in map.get('DatabasePrivileges'):
                temp_model = DescribeAccountsResponseAccountsDatabasePrivileges()
                temp_model = temp_model.from_map(k)
                self.database_privileges.append(temp_model)
        else:
            self.database_privileges = None
        return self
class DeleteDBClusterRequest(TeaModel):
    def __init__(self, dbcluster_id=None, backup_retention_policy_on_cluster_deletion=None):
        self.dbcluster_id = dbcluster_id
        self.backup_retention_policy_on_cluster_deletion = backup_retention_policy_on_cluster_deletion

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['BackupRetentionPolicyOnClusterDeletion'] = self.backup_retention_policy_on_cluster_deletion
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_retention_policy_on_cluster_deletion = map.get('BackupRetentionPolicyOnClusterDeletion')
        return self


class DeleteDBClusterResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class CreateDBClusterRequest(TeaModel):
    def __init__(self, zone_id=None, dbtype=None, dbversion=None, dbnode_class=None, cluster_network_type=None, dbcluster_description=None, pay_type=None, auto_renew=None, period=None, used_time=None, vpcid=None, v_switch_id=None, creation_option=None, source_resource_id=None, clone_data_point=None, client_token=None, resource_group_id=None, security_iplist=None, tdestatus=None, gdnid=None, creation_category=None):
        self.zone_id = zone_id
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.dbnode_class = dbnode_class
        self.cluster_network_type = cluster_network_type
        self.dbcluster_description = dbcluster_description
        self.pay_type = pay_type
        self.auto_renew = auto_renew
        self.period = period
        self.used_time = used_time
        self.vpcid = vpcid
        self.v_switch_id = v_switch_id
        self.creation_option = creation_option
        self.source_resource_id = source_resource_id
        self.clone_data_point = clone_data_point
        self.client_token = client_token
        self.resource_group_id = resource_group_id
        self.security_iplist = security_iplist
        self.tdestatus = tdestatus
        self.gdnid = gdnid
        self.creation_category = creation_category

    def validate(self):
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.dbnode_class, 'dbnode_class')
        self.validate_required(self.pay_type, 'pay_type')

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['DBNodeClass'] = self.dbnode_class
        result['ClusterNetworkType'] = self.cluster_network_type
        result['DBClusterDescription'] = self.dbcluster_description
        result['PayType'] = self.pay_type
        result['AutoRenew'] = self.auto_renew
        result['Period'] = self.period
        result['UsedTime'] = self.used_time
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.v_switch_id
        result['CreationOption'] = self.creation_option
        result['SourceResourceId'] = self.source_resource_id
        result['CloneDataPoint'] = self.clone_data_point
        result['ClientToken'] = self.client_token
        result['ResourceGroupId'] = self.resource_group_id
        result['SecurityIPList'] = self.security_iplist
        result['TDEStatus'] = self.tdestatus
        result['GDNId'] = self.gdnid
        result['CreationCategory'] = self.creation_category
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.dbnode_class = map.get('DBNodeClass')
        self.cluster_network_type = map.get('ClusterNetworkType')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.pay_type = map.get('PayType')
        self.auto_renew = map.get('AutoRenew')
        self.period = map.get('Period')
        self.used_time = map.get('UsedTime')
        self.vpcid = map.get('VPCId')
        self.v_switch_id = map.get('VSwitchId')
        self.creation_option = map.get('CreationOption')
        self.source_resource_id = map.get('SourceResourceId')
        self.clone_data_point = map.get('CloneDataPoint')
        self.client_token = map.get('ClientToken')
        self.resource_group_id = map.get('ResourceGroupId')
        self.security_iplist = map.get('SecurityIPList')
        self.tdestatus = map.get('TDEStatus')
        self.gdnid = map.get('GDNId')
        self.creation_category = map.get('CreationCategory')
        return self


class CreateDBClusterResponse(TeaModel):
    def __init__(self, request_id=None, dbcluster_id=None, order_id=None, resource_group_id=None):
        self.request_id = request_id
        self.dbcluster_id = dbcluster_id
        self.order_id = order_id
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.resource_group_id, 'resource_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBClusterId'] = self.dbcluster_id
        result['OrderId'] = self.order_id
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbcluster_id = map.get('DBClusterId')
        self.order_id = map.get('OrderId')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class CreateBackupRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class CreateBackupResponse(TeaModel):
    def __init__(self, request_id=None, backup_job_id=None):
        self.request_id = request_id
        self.backup_job_id = backup_job_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.backup_job_id, 'backup_job_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['BackupJobId'] = self.backup_job_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.backup_job_id = map.get('BackupJobId')
        return self


class CreateAccountRequest(TeaModel):
    def __init__(self, dbcluster_id=None, account_name=None, account_password=None, account_type=None, account_description=None, dbname=None, account_privilege=None):
        self.dbcluster_id = dbcluster_id
        self.account_name = account_name
        self.account_password = account_password
        self.account_type = account_type
        self.account_description = account_description
        self.dbname = dbname
        self.account_privilege = account_privilege

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['AccountType'] = self.account_type
        result['AccountDescription'] = self.account_description
        result['DBName'] = self.dbname
        result['AccountPrivilege'] = self.account_privilege
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.account_type = map.get('AccountType')
        self.account_description = map.get('AccountDescription')
        self.dbname = map.get('DBName')
        self.account_privilege = map.get('AccountPrivilege')
        return self


class CreateAccountResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeBackupsRequest(TeaModel):
    def __init__(self, dbcluster_id=None, backup_id=None, backup_status=None, backup_mode=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.dbcluster_id = dbcluster_id
        self.backup_id = backup_id
        self.backup_status = backup_status
        self.backup_mode = backup_mode
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['BackupId'] = self.backup_id
        result['BackupStatus'] = self.backup_status
        result['BackupMode'] = self.backup_mode
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_id = map.get('BackupId')
        self.backup_status = map.get('BackupStatus')
        self.backup_mode = map.get('BackupMode')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeBackupsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeBackupsResponseItemsBackup(TeaModel):
    def __init__(self, backup_id=None, dbcluster_id=None, backup_status=None, backup_start_time=None, backup_end_time=None, backup_type=None, backup_mode=None, backup_method=None, store_status=None, backup_set_size=None, consistent_time=None, backups_level=None, is_avail=None):
        self.backup_id = backup_id
        self.dbcluster_id = dbcluster_id
        self.backup_status = backup_status
        self.backup_start_time = backup_start_time
        self.backup_end_time = backup_end_time
        self.backup_type = backup_type
        self.backup_mode = backup_mode
        self.backup_method = backup_method
        self.store_status = store_status
        self.backup_set_size = backup_set_size
        self.consistent_time = consistent_time
        self.backups_level = backups_level
        self.is_avail = is_avail

    def validate(self):
        self.validate_required(self.backup_id, 'backup_id')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.backup_status, 'backup_status')
        self.validate_required(self.backup_start_time, 'backup_start_time')
        self.validate_required(self.backup_end_time, 'backup_end_time')
        self.validate_required(self.backup_type, 'backup_type')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.backup_method, 'backup_method')
        self.validate_required(self.store_status, 'store_status')
        self.validate_required(self.backup_set_size, 'backup_set_size')
        self.validate_required(self.consistent_time, 'consistent_time')
        self.validate_required(self.backups_level, 'backups_level')
        self.validate_required(self.is_avail, 'is_avail')

    def to_map(self):
        result = {}
        result['BackupId'] = self.backup_id
        result['DBClusterId'] = self.dbcluster_id
        result['BackupStatus'] = self.backup_status
        result['BackupStartTime'] = self.backup_start_time
        result['BackupEndTime'] = self.backup_end_time
        result['BackupType'] = self.backup_type
        result['BackupMode'] = self.backup_mode
        result['BackupMethod'] = self.backup_method
        result['StoreStatus'] = self.store_status
        result['BackupSetSize'] = self.backup_set_size
        result['ConsistentTime'] = self.consistent_time
        result['BackupsLevel'] = self.backups_level
        result['IsAvail'] = self.is_avail
        return result

    def from_map(self, map={}):
        self.backup_id = map.get('BackupId')
        self.dbcluster_id = map.get('DBClusterId')
        self.backup_status = map.get('BackupStatus')
        self.backup_start_time = map.get('BackupStartTime')
        self.backup_end_time = map.get('BackupEndTime')
        self.backup_type = map.get('BackupType')
        self.backup_mode = map.get('BackupMode')
        self.backup_method = map.get('BackupMethod')
        self.store_status = map.get('StoreStatus')
        self.backup_set_size = map.get('BackupSetSize')
        self.consistent_time = map.get('ConsistentTime')
        self.backups_level = map.get('BackupsLevel')
        self.is_avail = map.get('IsAvail')
        return self


class DescribeBackupsResponseItems(TeaModel):
    def __init__(self, backup=None):
        self.backup = []

    def validate(self):
        self.validate_required(self.backup, 'backup')
        if self.backup:
            for k in self.backup:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Backup'] = []
        if self.backup is not None:
            for k in self.backup:
                result['Backup'].append(k.to_map() if k else None)
        else:
            result['Backup'] = None
        return result

    def from_map(self, map={}):
        self.backup = []
        if map.get('Backup') is not None:
            for k in map.get('Backup'):
                temp_model = DescribeBackupsResponseItemsBackup()
                temp_model = temp_model.from_map(k)
                self.backup.append(temp_model)
        else:
            self.backup = None
        return self
class ModifyBackupPolicyRequest(TeaModel):
    def __init__(self, dbcluster_id=None, preferred_backup_time=None, preferred_backup_period=None, data_level_1backup_retention_period=None, data_level_2backup_retention_period=None, backup_retention_policy_on_cluster_deletion=None):
        self.dbcluster_id = dbcluster_id
        self.preferred_backup_time = preferred_backup_time
        self.preferred_backup_period = preferred_backup_period
        self.data_level_1backup_retention_period = data_level_1backup_retention_period
        self.data_level_2backup_retention_period = data_level_2backup_retention_period
        self.backup_retention_policy_on_cluster_deletion = backup_retention_policy_on_cluster_deletion

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['PreferredBackupTime'] = self.preferred_backup_time
        result['PreferredBackupPeriod'] = self.preferred_backup_period
        result['DataLevel1BackupRetentionPeriod'] = self.data_level_1backup_retention_period
        result['DataLevel2BackupRetentionPeriod'] = self.data_level_2backup_retention_period
        result['BackupRetentionPolicyOnClusterDeletion'] = self.backup_retention_policy_on_cluster_deletion
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.preferred_backup_time = map.get('PreferredBackupTime')
        self.preferred_backup_period = map.get('PreferredBackupPeriod')
        self.data_level_1backup_retention_period = map.get('DataLevel1BackupRetentionPeriod')
        self.data_level_2backup_retention_period = map.get('DataLevel2BackupRetentionPeriod')
        self.backup_retention_policy_on_cluster_deletion = map.get('BackupRetentionPolicyOnClusterDeletion')
        return self


class ModifyBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DescribeBackupPolicyRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, backup_retention_period=None, preferred_next_backup_time=None, preferred_backup_time=None, preferred_backup_period=None, data_level_1backup_retention_period=None, data_level_2backup_retention_period=None, backup_retention_policy_on_cluster_deletion=None):
        self.request_id = request_id
        self.backup_retention_period = backup_retention_period
        self.preferred_next_backup_time = preferred_next_backup_time
        self.preferred_backup_time = preferred_backup_time
        self.preferred_backup_period = preferred_backup_period
        self.data_level_1backup_retention_period = data_level_1backup_retention_period
        self.data_level_2backup_retention_period = data_level_2backup_retention_period
        self.backup_retention_policy_on_cluster_deletion = backup_retention_policy_on_cluster_deletion

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.backup_retention_period, 'backup_retention_period')
        self.validate_required(self.preferred_next_backup_time, 'preferred_next_backup_time')
        self.validate_required(self.preferred_backup_time, 'preferred_backup_time')
        self.validate_required(self.preferred_backup_period, 'preferred_backup_period')
        self.validate_required(self.data_level_1backup_retention_period, 'data_level_1backup_retention_period')
        self.validate_required(self.data_level_2backup_retention_period, 'data_level_2backup_retention_period')
        self.validate_required(self.backup_retention_policy_on_cluster_deletion, 'backup_retention_policy_on_cluster_deletion')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['BackupRetentionPeriod'] = self.backup_retention_period
        result['PreferredNextBackupTime'] = self.preferred_next_backup_time
        result['PreferredBackupTime'] = self.preferred_backup_time
        result['PreferredBackupPeriod'] = self.preferred_backup_period
        result['DataLevel1BackupRetentionPeriod'] = self.data_level_1backup_retention_period
        result['DataLevel2BackupRetentionPeriod'] = self.data_level_2backup_retention_period
        result['BackupRetentionPolicyOnClusterDeletion'] = self.backup_retention_policy_on_cluster_deletion
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.backup_retention_period = map.get('BackupRetentionPeriod')
        self.preferred_next_backup_time = map.get('PreferredNextBackupTime')
        self.preferred_backup_time = map.get('PreferredBackupTime')
        self.preferred_backup_period = map.get('PreferredBackupPeriod')
        self.data_level_1backup_retention_period = map.get('DataLevel1BackupRetentionPeriod')
        self.data_level_2backup_retention_period = map.get('DataLevel2BackupRetentionPeriod')
        self.backup_retention_policy_on_cluster_deletion = map.get('BackupRetentionPolicyOnClusterDeletion')
        return self


class DescribeDBClustersRequest(TeaModel):
    def __init__(self, region_id=None, dbcluster_ids=None, dbcluster_description=None, dbcluster_status=None, dbtype=None, tag=None, page_size=None, page_number=None, resource_group_id=None):
        self.region_id = region_id
        self.dbcluster_ids = dbcluster_ids
        self.dbcluster_description = dbcluster_description
        self.dbcluster_status = dbcluster_status
        self.dbtype = dbtype
        self.tag = []
        self.page_size = page_size
        self.page_number = page_number
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['DBClusterIds'] = self.dbcluster_ids
        result['DBClusterDescription'] = self.dbcluster_description
        result['DBClusterStatus'] = self.dbcluster_status
        result['DBType'] = self.dbtype
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.dbcluster_ids = map.get('DBClusterIds')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.dbcluster_status = map.get('DBClusterStatus')
        self.dbtype = map.get('DBType')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeDBClustersRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class DescribeDBClustersRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self
class DescribeDBClustersResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, total_record_count=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.page_number = page_number
        self.total_record_count = total_record_count
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['TotalRecordCount'] = self.total_record_count
        result['PageRecordCount'] = self.page_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeDBClustersResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBClustersResponseItemsDBClusterDBNodesDBNode(TeaModel):
    def __init__(self, dbnode_id=None, dbnode_class=None, dbnode_role=None, region_id=None, zone_id=None):
        self.dbnode_id = dbnode_id
        self.dbnode_class = dbnode_class
        self.dbnode_role = dbnode_role
        self.region_id = region_id
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.dbnode_class, 'dbnode_class')
        self.validate_required(self.dbnode_role, 'dbnode_role')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        result['DBNodeClass'] = self.dbnode_class
        result['DBNodeRole'] = self.dbnode_role
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        self.dbnode_class = map.get('DBNodeClass')
        self.dbnode_role = map.get('DBNodeRole')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        return self


class DescribeDBClustersResponseItemsDBClusterDBNodes(TeaModel):
    def __init__(self, dbnode=None):
        self.dbnode = []

    def validate(self):
        self.validate_required(self.dbnode, 'dbnode')
        if self.dbnode:
            for k in self.dbnode:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBNode'] = []
        if self.dbnode is not None:
            for k in self.dbnode:
                result['DBNode'].append(k.to_map() if k else None)
        else:
            result['DBNode'] = None
        return result

    def from_map(self, map={}):
        self.dbnode = []
        if map.get('DBNode') is not None:
            for k in map.get('DBNode'):
                temp_model = DescribeDBClustersResponseItemsDBClusterDBNodesDBNode()
                temp_model = temp_model.from_map(k)
                self.dbnode.append(temp_model)
        else:
            self.dbnode = None
        return self


class DescribeDBClustersResponseItemsDBClusterTagsTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self


class DescribeDBClustersResponseItemsDBClusterTags(TeaModel):
    def __init__(self, tag=None):
        self.tag = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeDBClustersResponseItemsDBClusterTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeDBClustersResponseItemsDBCluster(TeaModel):
    def __init__(self, dbcluster_id=None, dbcluster_description=None, pay_type=None, dbcluster_network_type=None, region_id=None, zone_id=None, expire_time=None, expired=None, dbcluster_status=None, engine=None, dbtype=None, dbversion=None, lock_mode=None, deletion_lock=None, create_time=None, vpc_id=None, dbnode_number=None, dbnode_class=None, storage_used=None, resource_group_id=None, dbnodes=None, tags=None):
        self.dbcluster_id = dbcluster_id
        self.dbcluster_description = dbcluster_description
        self.pay_type = pay_type
        self.dbcluster_network_type = dbcluster_network_type
        self.region_id = region_id
        self.zone_id = zone_id
        self.expire_time = expire_time
        self.expired = expired
        self.dbcluster_status = dbcluster_status
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.lock_mode = lock_mode
        self.deletion_lock = deletion_lock
        self.create_time = create_time
        self.vpc_id = vpc_id
        self.dbnode_number = dbnode_number
        self.dbnode_class = dbnode_class
        self.storage_used = storage_used
        self.resource_group_id = resource_group_id
        self.dbnodes = dbnodes
        self.tags = tags

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbcluster_description, 'dbcluster_description')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbcluster_network_type, 'dbcluster_network_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.expired, 'expired')
        self.validate_required(self.dbcluster_status, 'dbcluster_status')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.deletion_lock, 'deletion_lock')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.dbnode_number, 'dbnode_number')
        self.validate_required(self.dbnode_class, 'dbnode_class')
        self.validate_required(self.storage_used, 'storage_used')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.dbnodes, 'dbnodes')
        if self.dbnodes:
            self.dbnodes.validate()
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        result['DBClusterDescription'] = self.dbcluster_description
        result['PayType'] = self.pay_type
        result['DBClusterNetworkType'] = self.dbcluster_network_type
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['ExpireTime'] = self.expire_time
        result['Expired'] = self.expired
        result['DBClusterStatus'] = self.dbcluster_status
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['LockMode'] = self.lock_mode
        result['DeletionLock'] = self.deletion_lock
        result['CreateTime'] = self.create_time
        result['VpcId'] = self.vpc_id
        result['DBNodeNumber'] = self.dbnode_number
        result['DBNodeClass'] = self.dbnode_class
        result['StorageUsed'] = self.storage_used
        result['ResourceGroupId'] = self.resource_group_id
        if self.dbnodes is not None:
            result['DBNodes'] = self.dbnodes.to_map()
        else:
            result['DBNodes'] = None
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.pay_type = map.get('PayType')
        self.dbcluster_network_type = map.get('DBClusterNetworkType')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.expire_time = map.get('ExpireTime')
        self.expired = map.get('Expired')
        self.dbcluster_status = map.get('DBClusterStatus')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.lock_mode = map.get('LockMode')
        self.deletion_lock = map.get('DeletionLock')
        self.create_time = map.get('CreateTime')
        self.vpc_id = map.get('VpcId')
        self.dbnode_number = map.get('DBNodeNumber')
        self.dbnode_class = map.get('DBNodeClass')
        self.storage_used = map.get('StorageUsed')
        self.resource_group_id = map.get('ResourceGroupId')
        if map.get('DBNodes') is not None:
            temp_model = DescribeDBClustersResponseItemsDBClusterDBNodes()
            self.dbnodes = temp_model.from_map(map['DBNodes'])
        else:
            self.dbnodes = None
        if map.get('Tags') is not None:
            temp_model = DescribeDBClustersResponseItemsDBClusterTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class DescribeDBClustersResponseItems(TeaModel):
    def __init__(self, dbcluster=None):
        self.dbcluster = []

    def validate(self):
        self.validate_required(self.dbcluster, 'dbcluster')
        if self.dbcluster:
            for k in self.dbcluster:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBCluster'] = []
        if self.dbcluster is not None:
            for k in self.dbcluster:
                result['DBCluster'].append(k.to_map() if k else None)
        else:
            result['DBCluster'] = None
        return result

    def from_map(self, map={}):
        self.dbcluster = []
        if map.get('DBCluster') is not None:
            for k in map.get('DBCluster'):
                temp_model = DescribeDBClustersResponseItemsDBCluster()
                temp_model = temp_model.from_map(k)
                self.dbcluster.append(temp_model)
        else:
            self.dbcluster = None
        return self
class DescribeDBClusterAttributeRequest(TeaModel):
    def __init__(self, dbcluster_id=None):
        self.dbcluster_id = dbcluster_id

    def validate(self):
        self.validate_required(self.dbcluster_id, 'dbcluster_id')

    def to_map(self):
        result = {}
        result['DBClusterId'] = self.dbcluster_id
        return result

    def from_map(self, map={}):
        self.dbcluster_id = map.get('DBClusterId')
        return self


class DescribeDBClusterAttributeResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, dbcluster_network_type=None, vpcid=None, v_switch_id=None, pay_type=None, dbcluster_id=None, dbcluster_status=None, dbcluster_description=None, engine=None, dbtype=None, dbversion=None, lock_mode=None, deletion_lock=None, creation_time=None, expire_time=None, expired=None, maintain_time=None, storage_used=None, storage_max=None, zone_ids=None, sqlsize=None, is_latest_version=None, resource_group_id=None, data_level_1backup_chain_size=None, tags=None, dbnodes=None):
        self.request_id = request_id
        self.region_id = region_id
        self.dbcluster_network_type = dbcluster_network_type
        self.vpcid = vpcid
        self.v_switch_id = v_switch_id
        self.pay_type = pay_type
        self.dbcluster_id = dbcluster_id
        self.dbcluster_status = dbcluster_status
        self.dbcluster_description = dbcluster_description
        self.engine = engine
        self.dbtype = dbtype
        self.dbversion = dbversion
        self.lock_mode = lock_mode
        self.deletion_lock = deletion_lock
        self.creation_time = creation_time
        self.expire_time = expire_time
        self.expired = expired
        self.maintain_time = maintain_time
        self.storage_used = storage_used
        self.storage_max = storage_max
        self.zone_ids = zone_ids
        self.sqlsize = sqlsize
        self.is_latest_version = is_latest_version
        self.resource_group_id = resource_group_id
        self.data_level_1backup_chain_size = data_level_1backup_chain_size
        self.tags = []
        self.dbnodes = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbcluster_network_type, 'dbcluster_network_type')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbcluster_id, 'dbcluster_id')
        self.validate_required(self.dbcluster_status, 'dbcluster_status')
        self.validate_required(self.dbcluster_description, 'dbcluster_description')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbtype, 'dbtype')
        self.validate_required(self.dbversion, 'dbversion')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.deletion_lock, 'deletion_lock')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.expired, 'expired')
        self.validate_required(self.maintain_time, 'maintain_time')
        self.validate_required(self.storage_used, 'storage_used')
        self.validate_required(self.storage_max, 'storage_max')
        self.validate_required(self.zone_ids, 'zone_ids')
        self.validate_required(self.sqlsize, 'sqlsize')
        self.validate_required(self.is_latest_version, 'is_latest_version')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.data_level_1backup_chain_size, 'data_level_1backup_chain_size')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()
        self.validate_required(self.dbnodes, 'dbnodes')
        if self.dbnodes:
            for k in self.dbnodes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['DBClusterNetworkType'] = self.dbcluster_network_type
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.v_switch_id
        result['PayType'] = self.pay_type
        result['DBClusterId'] = self.dbcluster_id
        result['DBClusterStatus'] = self.dbcluster_status
        result['DBClusterDescription'] = self.dbcluster_description
        result['Engine'] = self.engine
        result['DBType'] = self.dbtype
        result['DBVersion'] = self.dbversion
        result['LockMode'] = self.lock_mode
        result['DeletionLock'] = self.deletion_lock
        result['CreationTime'] = self.creation_time
        result['ExpireTime'] = self.expire_time
        result['Expired'] = self.expired
        result['MaintainTime'] = self.maintain_time
        result['StorageUsed'] = self.storage_used
        result['StorageMax'] = self.storage_max
        result['ZoneIds'] = self.zone_ids
        result['SQLSize'] = self.sqlsize
        result['IsLatestVersion'] = self.is_latest_version
        result['ResourceGroupId'] = self.resource_group_id
        result['DataLevel1BackupChainSize'] = self.data_level_1backup_chain_size
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        result['DBNodes'] = []
        if self.dbnodes is not None:
            for k in self.dbnodes:
                result['DBNodes'].append(k.to_map() if k else None)
        else:
            result['DBNodes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.dbcluster_network_type = map.get('DBClusterNetworkType')
        self.vpcid = map.get('VPCId')
        self.v_switch_id = map.get('VSwitchId')
        self.pay_type = map.get('PayType')
        self.dbcluster_id = map.get('DBClusterId')
        self.dbcluster_status = map.get('DBClusterStatus')
        self.dbcluster_description = map.get('DBClusterDescription')
        self.engine = map.get('Engine')
        self.dbtype = map.get('DBType')
        self.dbversion = map.get('DBVersion')
        self.lock_mode = map.get('LockMode')
        self.deletion_lock = map.get('DeletionLock')
        self.creation_time = map.get('CreationTime')
        self.expire_time = map.get('ExpireTime')
        self.expired = map.get('Expired')
        self.maintain_time = map.get('MaintainTime')
        self.storage_used = map.get('StorageUsed')
        self.storage_max = map.get('StorageMax')
        self.zone_ids = map.get('ZoneIds')
        self.sqlsize = map.get('SQLSize')
        self.is_latest_version = map.get('IsLatestVersion')
        self.resource_group_id = map.get('ResourceGroupId')
        self.data_level_1backup_chain_size = map.get('DataLevel1BackupChainSize')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = DescribeDBClusterAttributeResponseTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        self.dbnodes = []
        if map.get('DBNodes') is not None:
            for k in map.get('DBNodes'):
                temp_model = DescribeDBClusterAttributeResponseDBNodes()
                temp_model = temp_model.from_map(k)
                self.dbnodes.append(temp_model)
        else:
            self.dbnodes = None
        return self


class DescribeDBClusterAttributeResponseTags(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self


class DescribeDBClusterAttributeResponseDBNodes(TeaModel):
    def __init__(self, dbnode_id=None, zone_id=None, dbnode_status=None, creation_time=None, dbnode_class=None, dbnode_role=None, max_iops=None, max_connections=None, failover_priority=None):
        self.dbnode_id = dbnode_id
        self.zone_id = zone_id
        self.dbnode_status = dbnode_status
        self.creation_time = creation_time
        self.dbnode_class = dbnode_class
        self.dbnode_role = dbnode_role
        self.max_iops = max_iops
        self.max_connections = max_connections
        self.failover_priority = failover_priority

    def validate(self):
        self.validate_required(self.dbnode_id, 'dbnode_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.dbnode_status, 'dbnode_status')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.dbnode_class, 'dbnode_class')
        self.validate_required(self.dbnode_role, 'dbnode_role')
        self.validate_required(self.max_iops, 'max_iops')
        self.validate_required(self.max_connections, 'max_connections')
        self.validate_required(self.failover_priority, 'failover_priority')

    def to_map(self):
        result = {}
        result['DBNodeId'] = self.dbnode_id
        result['ZoneId'] = self.zone_id
        result['DBNodeStatus'] = self.dbnode_status
        result['CreationTime'] = self.creation_time
        result['DBNodeClass'] = self.dbnode_class
        result['DBNodeRole'] = self.dbnode_role
        result['MaxIOPS'] = self.max_iops
        result['MaxConnections'] = self.max_connections
        result['FailoverPriority'] = self.failover_priority
        return result

    def from_map(self, map={}):
        self.dbnode_id = map.get('DBNodeId')
        self.zone_id = map.get('ZoneId')
        self.dbnode_status = map.get('DBNodeStatus')
        self.creation_time = map.get('CreationTime')
        self.dbnode_class = map.get('DBNodeClass')
        self.dbnode_role = map.get('DBNodeRole')
        self.max_iops = map.get('MaxIOPS')
        self.max_connections = map.get('MaxConnections')
        self.failover_priority = map.get('FailoverPriority')
        return self

# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeDedicatedHostImageCategoriesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, host_group=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.host_group = host_group

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.host_group, 'host_group')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['HostGroup'] = self.host_group
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.host_group = map.get('HostGroup')
        return self


class DescribeDedicatedHostImageCategoriesResponse(TeaModel):
    def __init__(self, request_id=None, images=None):
        self.request_id = request_id
        self.images = images

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.images, 'images')
        if self.images:
            self.images.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.images is not None:
            result['Images'] = self.images.to_map()
        else:
            result['Images'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Images') is not None:
            temp_model = DescribeDedicatedHostImageCategoriesResponseImages()
            self.images = temp_model.from_map(map['Images'])
        else:
            self.images = None
        return self


class DescribeDedicatedHostImageCategoriesResponseImagesImages(TeaModel):
    def __init__(self, image_name=None, image_code=None):
        self.image_name = image_name
        self.image_code = image_code

    def validate(self):
        self.validate_required(self.image_name, 'image_name')
        self.validate_required(self.image_code, 'image_code')

    def to_map(self):
        result = {}
        result['ImageName'] = self.image_name
        result['ImageCode'] = self.image_code
        return result

    def from_map(self, map={}):
        self.image_name = map.get('ImageName')
        self.image_code = map.get('ImageCode')
        return self


class DescribeDedicatedHostImageCategoriesResponseImages(TeaModel):
    def __init__(self, images=None):
        self.images = []

    def validate(self):
        self.validate_required(self.images, 'images')
        if self.images:
            for k in self.images:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Images'] = []
        if self.images is not None:
            for k in self.images:
                result['Images'].append(k.to_map() if k else None)
        else:
            result['Images'] = None
        return result

    def from_map(self, map={}):
        self.images = []
        if map.get('Images') is not None:
            for k in map.get('Images'):
                temp_model = DescribeDedicatedHostImageCategoriesResponseImagesImages()
                temp_model = temp_model.from_map(k)
                self.images.append(temp_model)
        else:
            self.images = None
        return self


class DescribeCrossBackupMetaListRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, backup_set_id=None, get_db_name=None, pattern=None, page_size=None, page_index=None, region=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.backup_set_id = backup_set_id
        self.get_db_name = get_db_name
        self.pattern = pattern
        self.page_size = page_size
        self.page_index = page_index
        self.region = region

    def validate(self):
        self.validate_required(self.backup_set_id, 'backup_set_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['BackupSetId'] = self.backup_set_id
        result['GetDbName'] = self.get_db_name
        result['Pattern'] = self.pattern
        result['PageSize'] = self.page_size
        result['PageIndex'] = self.page_index
        result['Region'] = self.region
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.backup_set_id = map.get('BackupSetId')
        self.get_db_name = map.get('GetDbName')
        self.pattern = map.get('Pattern')
        self.page_size = map.get('PageSize')
        self.page_index = map.get('PageIndex')
        self.region = map.get('Region')
        return self


class DescribeCrossBackupMetaListResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, page_number=None, page_record_count=None, total_record_count=None, total_page_count=None, items=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_record_count = total_record_count
        self.total_page_count = total_page_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.total_page_count, 'total_page_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalRecordCount'] = self.total_record_count
        result['TotalPageCount'] = self.total_page_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        self.total_record_count = map.get('TotalRecordCount')
        self.total_page_count = map.get('TotalPageCount')
        if map.get('Items') is not None:
            temp_model = DescribeCrossBackupMetaListResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeCrossBackupMetaListResponseItemsMeta(TeaModel):
    def __init__(self, database=None, tables=None, size=None):
        self.database = database
        self.tables = tables
        self.size = size

    def validate(self):
        self.validate_required(self.database, 'database')
        self.validate_required(self.tables, 'tables')
        self.validate_required(self.size, 'size')

    def to_map(self):
        result = {}
        result['Database'] = self.database
        result['Tables'] = self.tables
        result['Size'] = self.size
        return result

    def from_map(self, map={}):
        self.database = map.get('Database')
        self.tables = map.get('Tables')
        self.size = map.get('Size')
        return self


class DescribeCrossBackupMetaListResponseItems(TeaModel):
    def __init__(self, meta=None):
        self.meta = []

    def validate(self):
        self.validate_required(self.meta, 'meta')
        if self.meta:
            for k in self.meta:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Meta'] = []
        if self.meta is not None:
            for k in self.meta:
                result['Meta'].append(k.to_map() if k else None)
        else:
            result['Meta'] = None
        return result

    def from_map(self, map={}):
        self.meta = []
        if map.get('Meta') is not None:
            for k in map.get('Meta'):
                temp_model = DescribeCrossBackupMetaListResponseItemsMeta()
                temp_model = temp_model.from_map(k)
                self.meta.append(temp_model)
        else:
            self.meta = None
        return self


class RestoreDdrTableRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None, client_token=None, restore_type=None, backup_id=None, restore_time=None, source_region=None, source_dbinstance_name=None, table_meta=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.client_token = client_token
        self.restore_type = restore_type
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.source_region = source_region
        self.source_dbinstance_name = source_dbinstance_name
        self.table_meta = table_meta

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.restore_type, 'restore_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        result['RestoreType'] = self.restore_type
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['SourceRegion'] = self.source_region
        result['SourceDBInstanceName'] = self.source_dbinstance_name
        result['TableMeta'] = self.table_meta
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        self.restore_type = map.get('RestoreType')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.source_region = map.get('SourceRegion')
        self.source_dbinstance_name = map.get('SourceDBInstanceName')
        self.table_meta = map.get('TableMeta')
        return self


class RestoreDdrTableResponse(TeaModel):
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


class ModifyDBProxyEndpointAddressRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbproxy_endpoint_id=None, dbproxy_new_connect_string=None, dbproxy_new_connect_string_port=None, dbproxy_connect_string_net_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbproxy_endpoint_id = dbproxy_endpoint_id
        self.dbproxy_new_connect_string = dbproxy_new_connect_string
        self.dbproxy_new_connect_string_port = dbproxy_new_connect_string_port
        self.dbproxy_connect_string_net_type = dbproxy_connect_string_net_type

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbproxy_endpoint_id, 'dbproxy_endpoint_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBProxyEndpointId'] = self.dbproxy_endpoint_id
        result['DBProxyNewConnectString'] = self.dbproxy_new_connect_string
        result['DBProxyNewConnectStringPort'] = self.dbproxy_new_connect_string_port
        result['DBProxyConnectStringNetType'] = self.dbproxy_connect_string_net_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbproxy_endpoint_id = map.get('DBProxyEndpointId')
        self.dbproxy_new_connect_string = map.get('DBProxyNewConnectString')
        self.dbproxy_new_connect_string_port = map.get('DBProxyNewConnectStringPort')
        self.dbproxy_connect_string_net_type = map.get('DBProxyConnectStringNetType')
        return self


class ModifyDBProxyEndpointAddressResponse(TeaModel):
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


class TerminateMigrateTaskRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, migrate_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.migrate_task_id = migrate_task_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['MigrateTaskId'] = self.migrate_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.migrate_task_id = map.get('MigrateTaskId')
        return self


class TerminateMigrateTaskResponse(TeaModel):
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


class DescribeLocalAvailableRecoveryTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region = region

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Region'] = self.region
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region = map.get('Region')
        return self


class DescribeLocalAvailableRecoveryTimeResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, recovery_begin_time=None, recovery_end_time=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.recovery_begin_time = recovery_begin_time
        self.recovery_end_time = recovery_end_time

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.recovery_begin_time, 'recovery_begin_time')
        self.validate_required(self.recovery_end_time, 'recovery_end_time')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RecoveryBeginTime'] = self.recovery_begin_time
        result['RecoveryEndTime'] = self.recovery_end_time
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.recovery_begin_time = map.get('RecoveryBeginTime')
        self.recovery_end_time = map.get('RecoveryEndTime')
        return self


class DescribeAvailableZonesRequest(TeaModel):
    def __init__(self, resource_owner_id=None, region_id=None, engine=None, zone_id=None, engine_version=None):
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.engine = engine
        self.zone_id = zone_id
        self.engine_version = engine_version

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.engine, 'engine')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['ZoneId'] = self.zone_id
        result['EngineVersion'] = self.engine_version
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.zone_id = map.get('ZoneId')
        self.engine_version = map.get('EngineVersion')
        return self


class DescribeAvailableZonesResponse(TeaModel):
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
                temp_model = DescribeAvailableZonesResponseAvailableZones()
                temp_model = temp_model.from_map(k)
                self.available_zones.append(temp_model)
        else:
            self.available_zones = None
        return self


class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes(TeaModel):
    def __init__(self, storage_type=None):
        self.storage_type = storage_type

    def validate(self):
        self.validate_required(self.storage_type, 'storage_type')

    def to_map(self):
        result = {}
        result['StorageType'] = self.storage_type
        return result

    def from_map(self, map={}):
        self.storage_type = map.get('StorageType')
        return self


class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys(TeaModel):
    def __init__(self, category=None, supported_storage_types=None):
        self.category = category
        self.supported_storage_types = []

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.supported_storage_types, 'supported_storage_types')
        if self.supported_storage_types:
            for k in self.supported_storage_types:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['SupportedStorageTypes'] = []
        if self.supported_storage_types is not None:
            for k in self.supported_storage_types:
                result['SupportedStorageTypes'].append(k.to_map() if k else None)
        else:
            result['SupportedStorageTypes'] = None
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.supported_storage_types = []
        if map.get('SupportedStorageTypes') is not None:
            for k in map.get('SupportedStorageTypes'):
                temp_model = DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorysSupportedStorageTypes()
                temp_model = temp_model.from_map(k)
                self.supported_storage_types.append(temp_model)
        else:
            self.supported_storage_types = None
        return self


class DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions(TeaModel):
    def __init__(self, version=None, supported_categorys=None):
        self.version = version
        self.supported_categorys = []

    def validate(self):
        self.validate_required(self.version, 'version')
        self.validate_required(self.supported_categorys, 'supported_categorys')
        if self.supported_categorys:
            for k in self.supported_categorys:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Version'] = self.version
        result['SupportedCategorys'] = []
        if self.supported_categorys is not None:
            for k in self.supported_categorys:
                result['SupportedCategorys'].append(k.to_map() if k else None)
        else:
            result['SupportedCategorys'] = None
        return result

    def from_map(self, map={}):
        self.version = map.get('Version')
        self.supported_categorys = []
        if map.get('SupportedCategorys') is not None:
            for k in map.get('SupportedCategorys'):
                temp_model = DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersionsSupportedCategorys()
                temp_model = temp_model.from_map(k)
                self.supported_categorys.append(temp_model)
        else:
            self.supported_categorys = None
        return self


class DescribeAvailableZonesResponseAvailableZonesSupportedEngines(TeaModel):
    def __init__(self, engine=None, supported_engine_versions=None):
        self.engine = engine
        self.supported_engine_versions = []

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.supported_engine_versions, 'supported_engine_versions')
        if self.supported_engine_versions:
            for k in self.supported_engine_versions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Engine'] = self.engine
        result['SupportedEngineVersions'] = []
        if self.supported_engine_versions is not None:
            for k in self.supported_engine_versions:
                result['SupportedEngineVersions'].append(k.to_map() if k else None)
        else:
            result['SupportedEngineVersions'] = None
        return result

    def from_map(self, map={}):
        self.engine = map.get('Engine')
        self.supported_engine_versions = []
        if map.get('SupportedEngineVersions') is not None:
            for k in map.get('SupportedEngineVersions'):
                temp_model = DescribeAvailableZonesResponseAvailableZonesSupportedEnginesSupportedEngineVersions()
                temp_model = temp_model.from_map(k)
                self.supported_engine_versions.append(temp_model)
        else:
            self.supported_engine_versions = None
        return self


class DescribeAvailableZonesResponseAvailableZones(TeaModel):
    def __init__(self, region_id=None, zone_id=None, network_types=None, supported_engines=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.network_types = network_types
        self.supported_engines = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.network_types, 'network_types')
        self.validate_required(self.supported_engines, 'supported_engines')
        if self.supported_engines:
            for k in self.supported_engines:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['NetworkTypes'] = self.network_types
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
        self.network_types = map.get('NetworkTypes')
        self.supported_engines = []
        if map.get('SupportedEngines') is not None:
            for k in map.get('SupportedEngines'):
                temp_model = DescribeAvailableZonesResponseAvailableZonesSupportedEngines()
                temp_model = temp_model.from_map(k)
                self.supported_engines.append(temp_model)
        else:
            self.supported_engines = None
        return self


class DescribeAvailableClassesRequest(TeaModel):
    def __init__(self, resource_owner_id=None, region_id=None, zone_id=None, instance_charge_type=None, engine=None, engine_version=None, dbinstance_id=None, order_type=None, dbinstance_storage_type=None, category=None):
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.zone_id = zone_id
        self.instance_charge_type = instance_charge_type
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_id = dbinstance_id
        self.order_type = order_type
        self.dbinstance_storage_type = dbinstance_storage_type
        self.category = category

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.instance_charge_type, 'instance_charge_type')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_storage_type, 'dbinstance_storage_type')
        self.validate_required(self.category, 'category')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['InstanceChargeType'] = self.instance_charge_type
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderType'] = self.order_type
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['Category'] = self.category
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.instance_charge_type = map.get('InstanceChargeType')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_type = map.get('OrderType')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.category = map.get('Category')
        return self


class DescribeAvailableClassesResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_classes=None):
        self.request_id = request_id
        self.dbinstance_classes = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_classes, 'dbinstance_classes')
        if self.dbinstance_classes:
            for k in self.dbinstance_classes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceClasses'] = []
        if self.dbinstance_classes is not None:
            for k in self.dbinstance_classes:
                result['DBInstanceClasses'].append(k.to_map() if k else None)
        else:
            result['DBInstanceClasses'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_classes = []
        if map.get('DBInstanceClasses') is not None:
            for k in map.get('DBInstanceClasses'):
                temp_model = DescribeAvailableClassesResponseDBInstanceClasses()
                temp_model = temp_model.from_map(k)
                self.dbinstance_classes.append(temp_model)
        else:
            self.dbinstance_classes = None
        return self


class DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange(TeaModel):
    def __init__(self, max_value=None, min_value=None, step=None):
        self.max_value = max_value
        self.min_value = min_value
        self.step = step

    def validate(self):
        self.validate_required(self.max_value, 'max_value')
        self.validate_required(self.min_value, 'min_value')
        self.validate_required(self.step, 'step')

    def to_map(self):
        result = {}
        result['MaxValue'] = self.max_value
        result['MinValue'] = self.min_value
        result['Step'] = self.step
        return result

    def from_map(self, map={}):
        self.max_value = map.get('MaxValue')
        self.min_value = map.get('MinValue')
        self.step = map.get('Step')
        return self


class DescribeAvailableClassesResponseDBInstanceClasses(TeaModel):
    def __init__(self, dbinstance_class=None, storage_range=None, dbinstance_storage_range=None):
        self.dbinstance_class = dbinstance_class
        self.storage_range = storage_range
        self.dbinstance_storage_range = dbinstance_storage_range

    def validate(self):
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.storage_range, 'storage_range')
        self.validate_required(self.dbinstance_storage_range, 'dbinstance_storage_range')
        if self.dbinstance_storage_range:
            self.dbinstance_storage_range.validate()

    def to_map(self):
        result = {}
        result['DBInstanceClass'] = self.dbinstance_class
        result['StorageRange'] = self.storage_range
        if self.dbinstance_storage_range is not None:
            result['DBInstanceStorageRange'] = self.dbinstance_storage_range.to_map()
        else:
            result['DBInstanceStorageRange'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_class = map.get('DBInstanceClass')
        self.storage_range = map.get('StorageRange')
        if map.get('DBInstanceStorageRange') is not None:
            temp_model = DescribeAvailableClassesResponseDBInstanceClassesDBInstanceStorageRange()
            self.dbinstance_storage_range = temp_model.from_map(map['DBInstanceStorageRange'])
        else:
            self.dbinstance_storage_range = None
        return self


class CreateDedicatedHostAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_id=None, account_name=None, account_password=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_id = dedicated_host_id
        self.account_name = account_name
        self.account_password = account_password
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.region_id = map.get('RegionId')
        return self


class CreateDedicatedHostAccountResponse(TeaModel):
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


class DeleteDedicatedHostAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_id=None, account_name=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_id = dedicated_host_id
        self.account_name = account_name
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['AccountName'] = self.account_name
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.account_name = map.get('AccountName')
        self.region_id = map.get('RegionId')
        return self


class DeleteDedicatedHostAccountResponse(TeaModel):
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


class ModifyDedicatedHostAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_id=None, account_name=None, account_password=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_id = dedicated_host_id
        self.account_name = account_name
        self.account_password = account_password
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.region_id = map.get('RegionId')
        return self


class ModifyDedicatedHostAccountResponse(TeaModel):
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


class CreateDedicatedHostUserRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_name=None, user_name=None, user_password=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_name = dedicated_host_name
        self.user_name = user_name
        self.user_password = user_password
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_name, 'dedicated_host_name')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.user_password, 'user_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostName'] = self.dedicated_host_name
        result['UserName'] = self.user_name
        result['UserPassword'] = self.user_password
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_name = map.get('DedicatedHostName')
        self.user_name = map.get('UserName')
        self.user_password = map.get('UserPassword')
        self.region_id = map.get('RegionId')
        return self


class CreateDedicatedHostUserResponse(TeaModel):
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


class ModifyDedicatedHostUserRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_name=None, user_name=None, old_password=None, new_password=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_name = dedicated_host_name
        self.user_name = user_name
        self.old_password = old_password
        self.new_password = new_password
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_name, 'dedicated_host_name')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.old_password, 'old_password')
        self.validate_required(self.new_password, 'new_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostName'] = self.dedicated_host_name
        result['UserName'] = self.user_name
        result['OldPassword'] = self.old_password
        result['NewPassword'] = self.new_password
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_name = map.get('DedicatedHostName')
        self.user_name = map.get('UserName')
        self.old_password = map.get('OldPassword')
        self.new_password = map.get('NewPassword')
        self.region_id = map.get('RegionId')
        return self


class ModifyDedicatedHostUserResponse(TeaModel):
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


class DropDedicatedHostUserRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_name=None, user_name=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_name = dedicated_host_name
        self.user_name = user_name
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_name, 'dedicated_host_name')
        self.validate_required(self.user_name, 'user_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostName'] = self.dedicated_host_name
        result['UserName'] = self.user_name
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_name = map.get('DedicatedHostName')
        self.user_name = map.get('UserName')
        self.region_id = map.get('RegionId')
        return self


class DropDedicatedHostUserResponse(TeaModel):
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


class UpgradeDBProxyInstanceKernelVersionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, upgrade_time=None, switch_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.upgrade_time = upgrade_time
        self.switch_time = switch_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['UpgradeTime'] = self.upgrade_time
        result['SwitchTime'] = self.switch_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.upgrade_time = map.get('UpgradeTime')
        self.switch_time = map.get('SwitchTime')
        return self


class UpgradeDBProxyInstanceKernelVersionResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, task_id=None, target_minor_version=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.task_id = task_id
        self.target_minor_version = target_minor_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.target_minor_version, 'target_minor_version')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        result['TaskId'] = self.task_id
        result['TargetMinorVersion'] = self.target_minor_version
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.task_id = map.get('TaskId')
        self.target_minor_version = map.get('TargetMinorVersion')
        return self


class StopDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class StopDBInstanceResponse(TeaModel):
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


class StartDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, dbinstance_id=None, target_dedicated_host_id_for_master=None, target_dedicated_host_id_for_slave=None, target_dedicated_host_id_for_log=None, effective_time=None, specified_time=None, target_dbinstance_class=None, engine_version=None, dbinstance_trans_type=None, storage=None, vswitch_id=None, zone_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dbinstance_id = dbinstance_id
        self.target_dedicated_host_id_for_master = target_dedicated_host_id_for_master
        self.target_dedicated_host_id_for_slave = target_dedicated_host_id_for_slave
        self.target_dedicated_host_id_for_log = target_dedicated_host_id_for_log
        self.effective_time = effective_time
        self.specified_time = specified_time
        self.target_dbinstance_class = target_dbinstance_class
        self.engine_version = engine_version
        self.dbinstance_trans_type = dbinstance_trans_type
        self.storage = storage
        self.vswitch_id = vswitch_id
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TargetDedicatedHostIdForMaster'] = self.target_dedicated_host_id_for_master
        result['TargetDedicatedHostIdForSlave'] = self.target_dedicated_host_id_for_slave
        result['TargetDedicatedHostIdForLog'] = self.target_dedicated_host_id_for_log
        result['EffectiveTime'] = self.effective_time
        result['SpecifiedTime'] = self.specified_time
        result['TargetDBInstanceClass'] = self.target_dbinstance_class
        result['EngineVersion'] = self.engine_version
        result['DBInstanceTransType'] = self.dbinstance_trans_type
        result['Storage'] = self.storage
        result['VSwitchId'] = self.vswitch_id
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.target_dedicated_host_id_for_master = map.get('TargetDedicatedHostIdForMaster')
        self.target_dedicated_host_id_for_slave = map.get('TargetDedicatedHostIdForSlave')
        self.target_dedicated_host_id_for_log = map.get('TargetDedicatedHostIdForLog')
        self.effective_time = map.get('EffectiveTime')
        self.specified_time = map.get('SpecifiedTime')
        self.target_dbinstance_class = map.get('TargetDBInstanceClass')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_trans_type = map.get('DBInstanceTransType')
        self.storage = map.get('Storage')
        self.vswitch_id = map.get('VSwitchId')
        self.zone_id = map.get('ZoneId')
        return self


class StartDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, migration_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.migration_id = migration_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.migration_id, 'migration_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['MigrationId'] = self.migration_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.migration_id = map.get('MigrationId')
        return self


class DescribeSignedEventActionsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, begin_event_id=None, page_size=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.begin_event_id = begin_event_id
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['BeginEventId'] = self.begin_event_id
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.begin_event_id = map.get('BeginEventId')
        self.page_size = map.get('PageSize')
        return self


class DescribeSignedEventActionsResponse(TeaModel):
    def __init__(self, request_id=None, next_page_event_id=None, page_record_count=None, from_begin=None, to_end=None, event_items=None):
        self.request_id = request_id
        self.next_page_event_id = next_page_event_id
        self.page_record_count = page_record_count
        self.from_begin = from_begin
        self.to_end = to_end
        self.event_items = event_items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_page_event_id, 'next_page_event_id')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.from_begin, 'from_begin')
        self.validate_required(self.to_end, 'to_end')
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            self.event_items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextPageEventId'] = self.next_page_event_id
        result['PageRecordCount'] = self.page_record_count
        result['FromBegin'] = self.from_begin
        result['ToEnd'] = self.to_end
        if self.event_items is not None:
            result['EventItems'] = self.event_items.to_map()
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_page_event_id = map.get('NextPageEventId')
        self.page_record_count = map.get('PageRecordCount')
        self.from_begin = map.get('FromBegin')
        self.to_end = map.get('ToEnd')
        if map.get('EventItems') is not None:
            temp_model = DescribeSignedEventActionsResponseEventItems()
            self.event_items = temp_model.from_map(map['EventItems'])
        else:
            self.event_items = None
        return self


class DescribeSignedEventActionsResponseEventItemsEventItems(TeaModel):
    def __init__(self, event_id=None, event_content=None, event_sig=None, event_rcpt=None):
        self.event_id = event_id
        self.event_content = event_content
        self.event_sig = event_sig
        self.event_rcpt = event_rcpt

    def validate(self):
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_content, 'event_content')
        self.validate_required(self.event_sig, 'event_sig')
        self.validate_required(self.event_rcpt, 'event_rcpt')

    def to_map(self):
        result = {}
        result['EventId'] = self.event_id
        result['EventContent'] = self.event_content
        result['EventSig'] = self.event_sig
        result['EventRcpt'] = self.event_rcpt
        return result

    def from_map(self, map={}):
        self.event_id = map.get('EventId')
        self.event_content = map.get('EventContent')
        self.event_sig = map.get('EventSig')
        self.event_rcpt = map.get('EventRcpt')
        return self


class DescribeSignedEventActionsResponseEventItems(TeaModel):
    def __init__(self, event_items=None):
        self.event_items = []

    def validate(self):
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            for k in self.event_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventItems'] = []
        if self.event_items is not None:
            for k in self.event_items:
                result['EventItems'].append(k.to_map() if k else None)
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.event_items = []
        if map.get('EventItems') is not None:
            for k in map.get('EventItems'):
                temp_model = DescribeSignedEventActionsResponseEventItemsEventItems()
                temp_model = temp_model.from_map(k)
                self.event_items.append(temp_model)
        else:
            self.event_items = None
        return self


class SignEventActionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, event_id=None, event_sig=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.event_id = event_id
        self.event_sig = event_sig

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_sig, 'event_sig')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['EventId'] = self.event_id
        result['EventSig'] = self.event_sig
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.event_id = map.get('EventId')
        self.event_sig = map.get('EventSig')
        return self


class SignEventActionResponse(TeaModel):
    def __init__(self, request_id=None, event_id=None, event_rcpt=None):
        self.request_id = request_id
        self.event_id = event_id
        self.event_rcpt = event_rcpt

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_rcpt, 'event_rcpt')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['EventId'] = self.event_id
        result['EventRcpt'] = self.event_rcpt
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.event_id = map.get('EventId')
        self.event_rcpt = map.get('EventRcpt')
        return self


class DescribeNextEventForSignRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        return self


class DescribeNextEventForSignResponse(TeaModel):
    def __init__(self, request_id=None, event_items=None):
        self.request_id = request_id
        self.event_items = event_items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            self.event_items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.event_items is not None:
            result['EventItems'] = self.event_items.to_map()
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('EventItems') is not None:
            temp_model = DescribeNextEventForSignResponseEventItems()
            self.event_items = temp_model.from_map(map['EventItems'])
        else:
            self.event_items = None
        return self


class DescribeNextEventForSignResponseEventItemsEventItems(TeaModel):
    def __init__(self, event_id=None, event_content=None):
        self.event_id = event_id
        self.event_content = event_content

    def validate(self):
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_content, 'event_content')

    def to_map(self):
        result = {}
        result['EventId'] = self.event_id
        result['EventContent'] = self.event_content
        return result

    def from_map(self, map={}):
        self.event_id = map.get('EventId')
        self.event_content = map.get('EventContent')
        return self


class DescribeNextEventForSignResponseEventItems(TeaModel):
    def __init__(self, event_items=None):
        self.event_items = []

    def validate(self):
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            for k in self.event_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventItems'] = []
        if self.event_items is not None:
            for k in self.event_items:
                result['EventItems'].append(k.to_map() if k else None)
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.event_items = []
        if map.get('EventItems') is not None:
            for k in map.get('EventItems'):
                temp_model = DescribeNextEventForSignResponseEventItemsEventItems()
                temp_model = temp_model.from_map(k)
                self.event_items.append(temp_model)
        else:
            self.event_items = None
        return self


class ModifyActionEventVerifyPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, user_public_key=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.user_public_key = user_public_key

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.user_public_key, 'user_public_key')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['UserPublicKey'] = self.user_public_key
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.user_public_key = map.get('UserPublicKey')
        return self


class ModifyActionEventVerifyPolicyResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, server_public_key=None):
        self.request_id = request_id
        self.region_id = region_id
        self.server_public_key = server_public_key

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.server_public_key, 'server_public_key')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['ServerPublicKey'] = self.server_public_key
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.server_public_key = map.get('ServerPublicKey')
        return self


class DescribeDBInstancesOverviewRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, engine=None, zone_id=None, expired=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.engine = engine
        self.zone_id = zone_id
        self.expired = expired
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['ProxyId'] = self.proxy_id
        result['Engine'] = self.engine
        result['ZoneId'] = self.zone_id
        result['Expired'] = self.expired
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('ProxyId')
        self.engine = map.get('Engine')
        self.zone_id = map.get('ZoneId')
        self.expired = map.get('Expired')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeDBInstancesOverviewResponse(TeaModel):
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
            temp_model = DescribeDBInstancesOverviewResponseRegions()
            self.regions = temp_model.from_map(map['Regions'])
        else:
            self.regions = None
        return self


class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel(TeaModel):
    def __init__(self, dbinstance_id=None, region=None, zone_id=None, engine=None, pay_type=None, created_time=None, expire_time=None, lock_mode=None, dbinstance_status=None):
        self.dbinstance_id = dbinstance_id
        self.region = region
        self.zone_id = zone_id
        self.engine = engine
        self.pay_type = pay_type
        self.created_time = created_time
        self.expire_time = expire_time
        self.lock_mode = lock_mode
        self.dbinstance_status = dbinstance_status

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.created_time, 'created_time')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['Region'] = self.region
        result['ZoneId'] = self.zone_id
        result['Engine'] = self.engine
        result['PayType'] = self.pay_type
        result['CreatedTime'] = self.created_time
        result['ExpireTime'] = self.expire_time
        result['LockMode'] = self.lock_mode
        result['DBInstanceStatus'] = self.dbinstance_status
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.region = map.get('Region')
        self.zone_id = map.get('ZoneId')
        self.engine = map.get('Engine')
        self.pay_type = map.get('PayType')
        self.created_time = map.get('CreatedTime')
        self.expire_time = map.get('ExpireTime')
        self.lock_mode = map.get('LockMode')
        self.dbinstance_status = map.get('DBInstanceStatus')
        return self


class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels(TeaModel):
    def __init__(self, instance_model=None):
        self.instance_model = []

    def validate(self):
        self.validate_required(self.instance_model, 'instance_model')
        if self.instance_model:
            for k in self.instance_model:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['InstanceModel'] = []
        if self.instance_model is not None:
            for k in self.instance_model:
                result['InstanceModel'].append(k.to_map() if k else None)
        else:
            result['InstanceModel'] = None
        return result

    def from_map(self, map={}):
        self.instance_model = []
        if map.get('InstanceModel') is not None:
            for k in map.get('InstanceModel'):
                temp_model = DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModelsInstanceModel()
                temp_model = temp_model.from_map(k)
                self.instance_model.append(temp_model)
        else:
            self.instance_model = None
        return self


class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel(TeaModel):
    def __init__(self, instance_date_type=None, count=None, instance_models=None):
        self.instance_date_type = instance_date_type
        self.count = count
        self.instance_models = instance_models

    def validate(self):
        self.validate_required(self.instance_date_type, 'instance_date_type')
        self.validate_required(self.count, 'count')
        self.validate_required(self.instance_models, 'instance_models')
        if self.instance_models:
            self.instance_models.validate()

    def to_map(self):
        result = {}
        result['InstanceDateType'] = self.instance_date_type
        result['Count'] = self.count
        if self.instance_models is not None:
            result['InstanceModels'] = self.instance_models.to_map()
        else:
            result['InstanceModels'] = None
        return result

    def from_map(self, map={}):
        self.instance_date_type = map.get('InstanceDateType')
        self.count = map.get('Count')
        if map.get('InstanceModels') is not None:
            temp_model = DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModelInstanceModels()
            self.instance_models = temp_model.from_map(map['InstanceModels'])
        else:
            self.instance_models = None
        return self


class DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels(TeaModel):
    def __init__(self, type_model=None):
        self.type_model = []

    def validate(self):
        self.validate_required(self.type_model, 'type_model')
        if self.type_model:
            for k in self.type_model:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TypeModel'] = []
        if self.type_model is not None:
            for k in self.type_model:
                result['TypeModel'].append(k.to_map() if k else None)
        else:
            result['TypeModel'] = None
        return result

    def from_map(self, map={}):
        self.type_model = []
        if map.get('TypeModel') is not None:
            for k in map.get('TypeModel'):
                temp_model = DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModelsTypeModel()
                temp_model = temp_model.from_map(k)
                self.type_model.append(temp_model)
        else:
            self.type_model = None
        return self


class DescribeDBInstancesOverviewResponseRegionsRegionModel(TeaModel):
    def __init__(self, region=None, engine_count=None, total_count=None, type_models=None):
        self.region = region
        self.engine_count = engine_count
        self.total_count = total_count
        self.type_models = type_models

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.engine_count, 'engine_count')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.type_models, 'type_models')
        if self.type_models:
            self.type_models.validate()

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['EngineCount'] = self.engine_count
        result['TotalCount'] = self.total_count
        if self.type_models is not None:
            result['TypeModels'] = self.type_models.to_map()
        else:
            result['TypeModels'] = None
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.engine_count = map.get('EngineCount')
        self.total_count = map.get('TotalCount')
        if map.get('TypeModels') is not None:
            temp_model = DescribeDBInstancesOverviewResponseRegionsRegionModelTypeModels()
            self.type_models = temp_model.from_map(map['TypeModels'])
        else:
            self.type_models = None
        return self


class DescribeDBInstancesOverviewResponseRegions(TeaModel):
    def __init__(self, region_model=None):
        self.region_model = []

    def validate(self):
        self.validate_required(self.region_model, 'region_model')
        if self.region_model:
            for k in self.region_model:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionModel'] = []
        if self.region_model is not None:
            for k in self.region_model:
                result['RegionModel'].append(k.to_map() if k else None)
        else:
            result['RegionModel'] = None
        return result

    def from_map(self, map={}):
        self.region_model = []
        if map.get('RegionModel') is not None:
            for k in map.get('RegionModel'):
                temp_model = DescribeDBInstancesOverviewResponseRegionsRegionModel()
                temp_model = temp_model.from_map(k)
                self.region_model.append(temp_model)
        else:
            self.region_model = None
        return self


class DescribeMigrateTaskByIdRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, migrate_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.migrate_task_id = migrate_task_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['MigrateTaskId'] = self.migrate_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.migrate_task_id = map.get('MigrateTaskId')
        return self


class DescribeMigrateTaskByIdResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, dbname=None, migrate_task_id=None, create_time=None, end_time=None, backup_mode=None, status=None, is_dbreplaced=None, description=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.dbname = dbname
        self.migrate_task_id = migrate_task_id
        self.create_time = create_time
        self.end_time = end_time
        self.backup_mode = backup_mode
        self.status = status
        self.is_dbreplaced = is_dbreplaced
        self.description = description

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.status, 'status')
        self.validate_required(self.is_dbreplaced, 'is_dbreplaced')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        result['DBName'] = self.dbname
        result['MigrateTaskId'] = self.migrate_task_id
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['BackupMode'] = self.backup_mode
        result['Status'] = self.status
        result['IsDBReplaced'] = self.is_dbreplaced
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.dbname = map.get('DBName')
        self.migrate_task_id = map.get('MigrateTaskId')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.backup_mode = map.get('BackupMode')
        self.status = map.get('Status')
        self.is_dbreplaced = map.get('IsDBReplaced')
        self.description = map.get('Description')
        return self


class DeleteBackupFileRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dbinstance_id=None, backup_id=None, dbname=None, backup_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.dbname = dbname
        self.backup_time = backup_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['DBName'] = self.dbname
        result['BackupTime'] = self.backup_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.dbname = map.get('DBName')
        self.backup_time = map.get('BackupTime')
        return self


class DeleteBackupFileResponse(TeaModel):
    def __init__(self, request_id=None, deleted_bakset_ids=None):
        self.request_id = request_id
        self.deleted_bakset_ids = deleted_bakset_ids

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.deleted_bakset_ids, 'deleted_bakset_ids')
        if self.deleted_bakset_ids:
            self.deleted_bakset_ids.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.deleted_bakset_ids is not None:
            result['DeletedBaksetIds'] = self.deleted_bakset_ids.to_map()
        else:
            result['DeletedBaksetIds'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DeletedBaksetIds') is not None:
            temp_model = DeleteBackupFileResponseDeletedBaksetIds()
            self.deleted_bakset_ids = temp_model.from_map(map['DeletedBaksetIds'])
        else:
            self.deleted_bakset_ids = None
        return self


class DeleteBackupFileResponseDeletedBaksetIds(TeaModel):
    def __init__(self, deleted_bakset_ids=None):
        self.deleted_bakset_ids = []

    def validate(self):
        self.validate_required(self.deleted_bakset_ids, 'deleted_bakset_ids')

    def to_map(self):
        result = {}
        result['DeletedBaksetIds'] = []
        if self.deleted_bakset_ids is not None:
            for k in self.deleted_bakset_ids:
                result['DeletedBaksetIds'].append(k)
        else:
            result['DeletedBaksetIds'] = None
        return result

    def from_map(self, map={}):
        self.deleted_bakset_ids = []
        if map.get('DeletedBaksetIds') is not None:
            for k in map.get('DeletedBaksetIds'):
                self.deleted_bakset_ids.append(k)
        else:
            self.deleted_bakset_ids = None
        return self


class DescribeDetachedBackupsRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, backup_id=None, backup_status=None, backup_mode=None, start_time=None, end_time=None, page_size=None, page_number=None, region=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.backup_status = backup_status
        self.backup_mode = backup_mode
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.region = region

    def validate(self):
        self.validate_required(self.region, 'region')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['BackupStatus'] = self.backup_status
        result['BackupMode'] = self.backup_mode
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['Region'] = self.region
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.backup_status = map.get('BackupStatus')
        self.backup_mode = map.get('BackupMode')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.region = map.get('Region')
        return self


class DescribeDetachedBackupsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, total_backup_size=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_backup_size = total_backup_size
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_backup_size, 'total_backup_size')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalBackupSize'] = self.total_backup_size
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
        self.total_backup_size = map.get('TotalBackupSize')
        if map.get('Items') is not None:
            temp_model = DescribeDetachedBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDetachedBackupsResponseItemsBackup(TeaModel):
    def __init__(self, backup_id=None, dbinstance_id=None, backup_status=None, backup_start_time=None, backup_end_time=None, backup_type=None, backup_mode=None, backup_method=None, backup_download_url=None, backup_intranet_download_url=None, backup_location=None, backup_extraction_status=None, backup_scale=None, backup_dbnames=None, total_backup_size=None, backup_size=None, host_instance_id=None, store_status=None, meta_status=None, slave_status=None, consistent_time=None):
        self.backup_id = backup_id
        self.dbinstance_id = dbinstance_id
        self.backup_status = backup_status
        self.backup_start_time = backup_start_time
        self.backup_end_time = backup_end_time
        self.backup_type = backup_type
        self.backup_mode = backup_mode
        self.backup_method = backup_method
        self.backup_download_url = backup_download_url
        self.backup_intranet_download_url = backup_intranet_download_url
        self.backup_location = backup_location
        self.backup_extraction_status = backup_extraction_status
        self.backup_scale = backup_scale
        self.backup_dbnames = backup_dbnames
        self.total_backup_size = total_backup_size
        self.backup_size = backup_size
        self.host_instance_id = host_instance_id
        self.store_status = store_status
        self.meta_status = meta_status
        self.slave_status = slave_status
        self.consistent_time = consistent_time

    def validate(self):
        self.validate_required(self.backup_id, 'backup_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.backup_status, 'backup_status')
        self.validate_required(self.backup_start_time, 'backup_start_time')
        self.validate_required(self.backup_end_time, 'backup_end_time')
        self.validate_required(self.backup_type, 'backup_type')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.backup_method, 'backup_method')
        self.validate_required(self.backup_download_url, 'backup_download_url')
        self.validate_required(self.backup_intranet_download_url, 'backup_intranet_download_url')
        self.validate_required(self.backup_location, 'backup_location')
        self.validate_required(self.backup_extraction_status, 'backup_extraction_status')
        self.validate_required(self.backup_scale, 'backup_scale')
        self.validate_required(self.backup_dbnames, 'backup_dbnames')
        self.validate_required(self.total_backup_size, 'total_backup_size')
        self.validate_required(self.backup_size, 'backup_size')
        self.validate_required(self.host_instance_id, 'host_instance_id')
        self.validate_required(self.store_status, 'store_status')
        self.validate_required(self.meta_status, 'meta_status')
        self.validate_required(self.slave_status, 'slave_status')
        self.validate_required(self.consistent_time, 'consistent_time')

    def to_map(self):
        result = {}
        result['BackupId'] = self.backup_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupStatus'] = self.backup_status
        result['BackupStartTime'] = self.backup_start_time
        result['BackupEndTime'] = self.backup_end_time
        result['BackupType'] = self.backup_type
        result['BackupMode'] = self.backup_mode
        result['BackupMethod'] = self.backup_method
        result['BackupDownloadURL'] = self.backup_download_url
        result['BackupIntranetDownloadURL'] = self.backup_intranet_download_url
        result['BackupLocation'] = self.backup_location
        result['BackupExtractionStatus'] = self.backup_extraction_status
        result['BackupScale'] = self.backup_scale
        result['BackupDBNames'] = self.backup_dbnames
        result['TotalBackupSize'] = self.total_backup_size
        result['BackupSize'] = self.backup_size
        result['HostInstanceID'] = self.host_instance_id
        result['StoreStatus'] = self.store_status
        result['MetaStatus'] = self.meta_status
        result['SlaveStatus'] = self.slave_status
        result['ConsistentTime'] = self.consistent_time
        return result

    def from_map(self, map={}):
        self.backup_id = map.get('BackupId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_status = map.get('BackupStatus')
        self.backup_start_time = map.get('BackupStartTime')
        self.backup_end_time = map.get('BackupEndTime')
        self.backup_type = map.get('BackupType')
        self.backup_mode = map.get('BackupMode')
        self.backup_method = map.get('BackupMethod')
        self.backup_download_url = map.get('BackupDownloadURL')
        self.backup_intranet_download_url = map.get('BackupIntranetDownloadURL')
        self.backup_location = map.get('BackupLocation')
        self.backup_extraction_status = map.get('BackupExtractionStatus')
        self.backup_scale = map.get('BackupScale')
        self.backup_dbnames = map.get('BackupDBNames')
        self.total_backup_size = map.get('TotalBackupSize')
        self.backup_size = map.get('BackupSize')
        self.host_instance_id = map.get('HostInstanceID')
        self.store_status = map.get('StoreStatus')
        self.meta_status = map.get('MetaStatus')
        self.slave_status = map.get('SlaveStatus')
        self.consistent_time = map.get('ConsistentTime')
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


class EvaluateDedicatedHostInstanceResourceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, disk_type=None, disk_size=None, instance_class_names=None, engine=None, engine_version=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.disk_type = disk_type
        self.disk_size = disk_size
        self.instance_class_names = instance_class_names
        self.engine = engine
        self.engine_version = engine_version

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.instance_class_names, 'instance_class_names')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DiskType'] = self.disk_type
        result['DiskSize'] = self.disk_size
        result['InstanceClassNames'] = self.instance_class_names
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.disk_type = map.get('DiskType')
        self.disk_size = map.get('DiskSize')
        self.instance_class_names = map.get('InstanceClassNames')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        return self


class EvaluateDedicatedHostInstanceResourceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_class=None, available=None):
        self.request_id = request_id
        self.dbinstance_class = dbinstance_class
        self.available = available

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.available, 'available')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['Available'] = self.available
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.available = map.get('Available')
        return self


class DescribeAvailableDedicatedHostClassesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, zone_id=None, storage_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.zone_id = zone_id
        self.storage_type = storage_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['StorageType'] = self.storage_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.storage_type = map.get('StorageType')
        return self


class DescribeAvailableDedicatedHostClassesResponse(TeaModel):
    def __init__(self, request_id=None, host_classes=None):
        self.request_id = request_id
        self.host_classes = host_classes

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.host_classes, 'host_classes')
        if self.host_classes:
            self.host_classes.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.host_classes is not None:
            result['HostClasses'] = self.host_classes.to_map()
        else:
            result['HostClasses'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('HostClasses') is not None:
            temp_model = DescribeAvailableDedicatedHostClassesResponseHostClasses()
            self.host_classes = temp_model.from_map(map['HostClasses'])
        else:
            self.host_classes = None
        return self


class DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses(TeaModel):
    def __init__(self, host_class_name=None, description=None):
        self.host_class_name = host_class_name
        self.description = description

    def validate(self):
        self.validate_required(self.host_class_name, 'host_class_name')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['HostClassName'] = self.host_class_name
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.host_class_name = map.get('HostClassName')
        self.description = map.get('Description')
        return self


class DescribeAvailableDedicatedHostClassesResponseHostClasses(TeaModel):
    def __init__(self, host_classes=None):
        self.host_classes = []

    def validate(self):
        self.validate_required(self.host_classes, 'host_classes')
        if self.host_classes:
            for k in self.host_classes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['HostClasses'] = []
        if self.host_classes is not None:
            for k in self.host_classes:
                result['HostClasses'].append(k.to_map() if k else None)
        else:
            result['HostClasses'] = None
        return result

    def from_map(self, map={}):
        self.host_classes = []
        if map.get('HostClasses') is not None:
            for k in map.get('HostClasses'):
                temp_model = DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses()
                temp_model = temp_model.from_map(k)
                self.host_classes.append(temp_model)
        else:
            self.host_classes = None
        return self


class DescribeAvailableDedicatedHostZonesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        return self


class DescribeAvailableDedicatedHostZonesResponse(TeaModel):
    def __init__(self, request_id=None, zones=None):
        self.request_id = request_id
        self.zones = zones

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.zones, 'zones')
        if self.zones:
            self.zones.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.zones is not None:
            result['Zones'] = self.zones.to_map()
        else:
            result['Zones'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Zones') is not None:
            temp_model = DescribeAvailableDedicatedHostZonesResponseZones()
            self.zones = temp_model.from_map(map['Zones'])
        else:
            self.zones = None
        return self


class DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones(TeaModel):
    def __init__(self, zone_id=None, description=None):
        self.zone_id = zone_id
        self.description = description

    def validate(self):
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        self.description = map.get('Description')
        return self


class DescribeAvailableDedicatedHostZonesResponseZones(TeaModel):
    def __init__(self, dedicated_host_zones=None):
        self.dedicated_host_zones = []

    def validate(self):
        self.validate_required(self.dedicated_host_zones, 'dedicated_host_zones')
        if self.dedicated_host_zones:
            for k in self.dedicated_host_zones:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DedicatedHostZones'] = []
        if self.dedicated_host_zones is not None:
            for k in self.dedicated_host_zones:
                result['DedicatedHostZones'].append(k.to_map() if k else None)
        else:
            result['DedicatedHostZones'] = None
        return result

    def from_map(self, map={}):
        self.dedicated_host_zones = []
        if map.get('DedicatedHostZones') is not None:
            for k in map.get('DedicatedHostZones'):
                temp_model = DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones()
                temp_model = temp_model.from_map(k)
                self.dedicated_host_zones.append(temp_model)
        else:
            self.dedicated_host_zones = None
        return self


class ReleaseInstanceConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, current_connection_string=None, instance_network_type=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.current_connection_string = current_connection_string
        self.instance_network_type = instance_network_type
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.current_connection_string, 'current_connection_string')
        self.validate_required(self.instance_network_type, 'instance_network_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['CurrentConnectionString'] = self.current_connection_string
        result['InstanceNetworkType'] = self.instance_network_type
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.current_connection_string = map.get('CurrentConnectionString')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.owner_account = map.get('OwnerAccount')
        return self


class ReleaseInstanceConnectionResponse(TeaModel):
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


class UnlockAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        return self


class UnlockAccountResponse(TeaModel):
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


class LockAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        return self


class LockAccountResponse(TeaModel):
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
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, resource_type=None, next_token=None, resource_id=None, tag=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.resource_type = resource_type
        self.next_token = next_token
        self.resource_id = []
        self.tag = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['NextToken'] = self.next_token
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
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.next_token = map.get('NextToken')
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
        return self


class ListTagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

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


class TagResourcesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, resource_type=None, resource_id=None, tag=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.resource_type = resource_type
        self.resource_id = []
        self.tag = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
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
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
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


class UntagResourcesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, resource_type=None, all=None, resource_id=None, tag_key=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.resource_type = resource_type
        self.all = all
        self.resource_id = []
        self.tag_key = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ResourceType'] = self.resource_type
        result['All'] = self.all
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
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.resource_type = map.get('ResourceType')
        self.all = map.get('All')
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


class DescribeDedicatedHostGroupsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, image_category=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.image_category = image_category

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['ImageCategory'] = self.image_category
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.image_category = map.get('ImageCategory')
        return self


class DescribeDedicatedHostGroupsResponse(TeaModel):
    def __init__(self, request_id=None, dedicated_host_groups=None):
        self.request_id = request_id
        self.dedicated_host_groups = dedicated_host_groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dedicated_host_groups, 'dedicated_host_groups')
        if self.dedicated_host_groups:
            self.dedicated_host_groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.dedicated_host_groups is not None:
            result['DedicatedHostGroups'] = self.dedicated_host_groups.to_map()
        else:
            result['DedicatedHostGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('DedicatedHostGroups') is not None:
            temp_model = DescribeDedicatedHostGroupsResponseDedicatedHostGroups()
            self.dedicated_host_groups = temp_model.from_map(map['DedicatedHostGroups'])
        else:
            self.dedicated_host_groups = None
        return self


class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList(TeaModel):
    def __init__(self, zone_idlist=None):
        self.zone_idlist = []

    def validate(self):
        self.validate_required(self.zone_idlist, 'zone_idlist')

    def to_map(self):
        result = {}
        result['ZoneIDList'] = []
        if self.zone_idlist is not None:
            for k in self.zone_idlist:
                result['ZoneIDList'].append(k)
        else:
            result['ZoneIDList'] = None
        return result

    def from_map(self, map={}):
        self.zone_idlist = []
        if map.get('ZoneIDList') is not None:
            for k in map.get('ZoneIDList'):
                self.zone_idlist.append(k)
        else:
            self.zone_idlist = None
        return self


class DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups(TeaModel):
    def __init__(self, dedicated_host_group_id=None, dedicated_host_group_desc=None, cpu_allocation_ratio=None, mem_allocation_ratio=None, disk_allocation_ratio=None, allocation_policy=None, host_replace_policy=None, create_time=None, vpcid=None, host_number=None, instance_number=None, engine=None, text=None, dedicated_host_count_group_by_host_type=None, bastion_instance_id=None, open_permission=None, zone_idlist=None):
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_host_group_desc = dedicated_host_group_desc
        self.cpu_allocation_ratio = cpu_allocation_ratio
        self.mem_allocation_ratio = mem_allocation_ratio
        self.disk_allocation_ratio = disk_allocation_ratio
        self.allocation_policy = allocation_policy
        self.host_replace_policy = host_replace_policy
        self.create_time = create_time
        self.vpcid = vpcid
        self.host_number = host_number
        self.instance_number = instance_number
        self.engine = engine
        self.text = text
        self.dedicated_host_count_group_by_host_type = {}
        self.bastion_instance_id = bastion_instance_id
        self.open_permission = open_permission
        self.zone_idlist = zone_idlist

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dedicated_host_group_desc, 'dedicated_host_group_desc')
        self.validate_required(self.cpu_allocation_ratio, 'cpu_allocation_ratio')
        self.validate_required(self.mem_allocation_ratio, 'mem_allocation_ratio')
        self.validate_required(self.disk_allocation_ratio, 'disk_allocation_ratio')
        self.validate_required(self.allocation_policy, 'allocation_policy')
        self.validate_required(self.host_replace_policy, 'host_replace_policy')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.host_number, 'host_number')
        self.validate_required(self.instance_number, 'instance_number')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.text, 'text')
        self.validate_required(self.dedicated_host_count_group_by_host_type, 'dedicated_host_count_group_by_host_type')
        self.validate_required(self.bastion_instance_id, 'bastion_instance_id')
        self.validate_required(self.open_permission, 'open_permission')
        self.validate_required(self.zone_idlist, 'zone_idlist')
        if self.zone_idlist:
            self.zone_idlist.validate()

    def to_map(self):
        result = {}
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DedicatedHostGroupDesc'] = self.dedicated_host_group_desc
        result['CpuAllocationRatio'] = self.cpu_allocation_ratio
        result['MemAllocationRatio'] = self.mem_allocation_ratio
        result['DiskAllocationRatio'] = self.disk_allocation_ratio
        result['AllocationPolicy'] = self.allocation_policy
        result['HostReplacePolicy'] = self.host_replace_policy
        result['CreateTime'] = self.create_time
        result['VPCId'] = self.vpcid
        result['HostNumber'] = self.host_number
        result['InstanceNumber'] = self.instance_number
        result['Engine'] = self.engine
        result['Text'] = self.text
        result['DedicatedHostCountGroupByHostType'] = self.dedicated_host_count_group_by_host_type
        result['BastionInstanceId'] = self.bastion_instance_id
        result['OpenPermission'] = self.open_permission
        if self.zone_idlist is not None:
            result['ZoneIDList'] = self.zone_idlist.to_map()
        else:
            result['ZoneIDList'] = None
        return result

    def from_map(self, map={}):
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dedicated_host_group_desc = map.get('DedicatedHostGroupDesc')
        self.cpu_allocation_ratio = map.get('CpuAllocationRatio')
        self.mem_allocation_ratio = map.get('MemAllocationRatio')
        self.disk_allocation_ratio = map.get('DiskAllocationRatio')
        self.allocation_policy = map.get('AllocationPolicy')
        self.host_replace_policy = map.get('HostReplacePolicy')
        self.create_time = map.get('CreateTime')
        self.vpcid = map.get('VPCId')
        self.host_number = map.get('HostNumber')
        self.instance_number = map.get('InstanceNumber')
        self.engine = map.get('Engine')
        self.text = map.get('Text')
        self.dedicated_host_count_group_by_host_type = map.get('DedicatedHostCountGroupByHostType')
        self.bastion_instance_id = map.get('BastionInstanceId')
        self.open_permission = map.get('OpenPermission')
        if map.get('ZoneIDList') is not None:
            temp_model = DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroupsZoneIDList()
            self.zone_idlist = temp_model.from_map(map['ZoneIDList'])
        else:
            self.zone_idlist = None
        return self


class DescribeDedicatedHostGroupsResponseDedicatedHostGroups(TeaModel):
    def __init__(self, dedicated_host_groups=None):
        self.dedicated_host_groups = []

    def validate(self):
        self.validate_required(self.dedicated_host_groups, 'dedicated_host_groups')
        if self.dedicated_host_groups:
            for k in self.dedicated_host_groups:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DedicatedHostGroups'] = []
        if self.dedicated_host_groups is not None:
            for k in self.dedicated_host_groups:
                result['DedicatedHostGroups'].append(k.to_map() if k else None)
        else:
            result['DedicatedHostGroups'] = None
        return result

    def from_map(self, map={}):
        self.dedicated_host_groups = []
        if map.get('DedicatedHostGroups') is not None:
            for k in map.get('DedicatedHostGroups'):
                temp_model = DescribeDedicatedHostGroupsResponseDedicatedHostGroupsDedicatedHostGroups()
                temp_model = temp_model.from_map(k)
                self.dedicated_host_groups.append(temp_model)
        else:
            self.dedicated_host_groups = None
        return self


class CreateDedicatedHostGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, engine=None, cpu_allocation_ratio=None, mem_allocation_ratio=None, disk_allocation_ratio=None, allocation_policy=None, vpcid=None, host_replace_policy=None, client_token=None, open_permission=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.engine = engine
        self.cpu_allocation_ratio = cpu_allocation_ratio
        self.mem_allocation_ratio = mem_allocation_ratio
        self.disk_allocation_ratio = disk_allocation_ratio
        self.allocation_policy = allocation_policy
        self.vpcid = vpcid
        self.host_replace_policy = host_replace_policy
        self.client_token = client_token
        self.open_permission = open_permission

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.client_token, 'client_token')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['CpuAllocationRatio'] = self.cpu_allocation_ratio
        result['MemAllocationRatio'] = self.mem_allocation_ratio
        result['DiskAllocationRatio'] = self.disk_allocation_ratio
        result['AllocationPolicy'] = self.allocation_policy
        result['VPCId'] = self.vpcid
        result['HostReplacePolicy'] = self.host_replace_policy
        result['ClientToken'] = self.client_token
        result['OpenPermission'] = self.open_permission
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.cpu_allocation_ratio = map.get('CpuAllocationRatio')
        self.mem_allocation_ratio = map.get('MemAllocationRatio')
        self.disk_allocation_ratio = map.get('DiskAllocationRatio')
        self.allocation_policy = map.get('AllocationPolicy')
        self.vpcid = map.get('VPCId')
        self.host_replace_policy = map.get('HostReplacePolicy')
        self.client_token = map.get('ClientToken')
        self.open_permission = map.get('OpenPermission')
        return self


class CreateDedicatedHostGroupResponse(TeaModel):
    def __init__(self, request_id=None, dedicated_host_group_id=None):
        self.request_id = request_id
        self.dedicated_host_group_id = dedicated_host_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        return self


class DeleteDedicatedHostGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dedicated_host_group_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.region_id = map.get('RegionId')
        return self


class DeleteDedicatedHostGroupResponse(TeaModel):
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


class ModifyDedicatedHostGroupAttributeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, dedicated_host_group_desc=None, cpu_allocation_ratio=None, mem_allocation_ratio=None, disk_allocation_ratio=None, allocation_policy=None, host_replace_policy=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_host_group_desc = dedicated_host_group_desc
        self.cpu_allocation_ratio = cpu_allocation_ratio
        self.mem_allocation_ratio = mem_allocation_ratio
        self.disk_allocation_ratio = disk_allocation_ratio
        self.allocation_policy = allocation_policy
        self.host_replace_policy = host_replace_policy

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DedicatedHostGroupDesc'] = self.dedicated_host_group_desc
        result['CpuAllocationRatio'] = self.cpu_allocation_ratio
        result['MemAllocationRatio'] = self.mem_allocation_ratio
        result['DiskAllocationRatio'] = self.disk_allocation_ratio
        result['AllocationPolicy'] = self.allocation_policy
        result['HostReplacePolicy'] = self.host_replace_policy
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dedicated_host_group_desc = map.get('DedicatedHostGroupDesc')
        self.cpu_allocation_ratio = map.get('CpuAllocationRatio')
        self.mem_allocation_ratio = map.get('MemAllocationRatio')
        self.disk_allocation_ratio = map.get('DiskAllocationRatio')
        self.allocation_policy = map.get('AllocationPolicy')
        self.host_replace_policy = map.get('HostReplacePolicy')
        return self


class ModifyDedicatedHostGroupAttributeResponse(TeaModel):
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


class RestartDedicatedHostRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_id=None, failover_mode=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_id = dedicated_host_id
        self.failover_mode = failover_mode

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.failover_mode, 'failover_mode')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['FailoverMode'] = self.failover_mode
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.failover_mode = map.get('FailoverMode')
        return self


class RestartDedicatedHostResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, dedicated_host_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.dedicated_host_id = dedicated_host_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['DedicatedHostId'] = self.dedicated_host_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        return self


class ReplaceDedicatedHostRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_id=None, failover_mode=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_id = dedicated_host_id
        self.failover_mode = failover_mode

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.failover_mode, 'failover_mode')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['FailoverMode'] = self.failover_mode
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.failover_mode = map.get('FailoverMode')
        return self


class ReplaceDedicatedHostResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, dedicated_host_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.dedicated_host_id = dedicated_host_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['DedicatedHostId'] = self.dedicated_host_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        return self


class DescribeDedicatedHostsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, order_id=None, host_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.order_id = order_id
        self.host_type = host_type

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['OrderId'] = self.order_id
        result['HostType'] = self.host_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.order_id = map.get('OrderId')
        self.host_type = map.get('HostType')
        return self


class DescribeDedicatedHostsResponse(TeaModel):
    def __init__(self, request_id=None, dedicated_host_group_id=None, dedicated_hosts=None):
        self.request_id = request_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_hosts = dedicated_hosts

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dedicated_hosts, 'dedicated_hosts')
        if self.dedicated_hosts:
            self.dedicated_hosts.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        if self.dedicated_hosts is not None:
            result['DedicatedHosts'] = self.dedicated_hosts.to_map()
        else:
            result['DedicatedHosts'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        if map.get('DedicatedHosts') is not None:
            temp_model = DescribeDedicatedHostsResponseDedicatedHosts()
            self.dedicated_hosts = temp_model.from_map(map['DedicatedHosts'])
        else:
            self.dedicated_hosts = None
        return self


class DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts(TeaModel):
    def __init__(self, host_name=None, host_status=None, instance_number=None, cpuallocation_ratio=None, mem_allocation_ratio=None, disk_allocation_ratio=None, vpcid=None, vswitch_id=None, zone_id=None, ipaddress=None, host_class=None, created_time=None, dedicated_host_id=None, allocation_status=None, end_time=None, host_type=None, bastion_instance_id=None, open_permission=None, account_name=None, host_cpu=None, host_mem=None, host_storage=None, cpu_used=None, memory_used=None, storage_used=None, image_category=None):
        self.host_name = host_name
        self.host_status = host_status
        self.instance_number = instance_number
        self.cpuallocation_ratio = cpuallocation_ratio
        self.mem_allocation_ratio = mem_allocation_ratio
        self.disk_allocation_ratio = disk_allocation_ratio
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.zone_id = zone_id
        self.ipaddress = ipaddress
        self.host_class = host_class
        self.created_time = created_time
        self.dedicated_host_id = dedicated_host_id
        self.allocation_status = allocation_status
        self.end_time = end_time
        self.host_type = host_type
        self.bastion_instance_id = bastion_instance_id
        self.open_permission = open_permission
        self.account_name = account_name
        self.host_cpu = host_cpu
        self.host_mem = host_mem
        self.host_storage = host_storage
        self.cpu_used = cpu_used
        self.memory_used = memory_used
        self.storage_used = storage_used
        self.image_category = image_category

    def validate(self):
        self.validate_required(self.host_name, 'host_name')
        self.validate_required(self.host_status, 'host_status')
        self.validate_required(self.instance_number, 'instance_number')
        self.validate_required(self.cpuallocation_ratio, 'cpuallocation_ratio')
        self.validate_required(self.mem_allocation_ratio, 'mem_allocation_ratio')
        self.validate_required(self.disk_allocation_ratio, 'disk_allocation_ratio')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.host_class, 'host_class')
        self.validate_required(self.created_time, 'created_time')
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.allocation_status, 'allocation_status')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.host_type, 'host_type')
        self.validate_required(self.bastion_instance_id, 'bastion_instance_id')
        self.validate_required(self.open_permission, 'open_permission')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.host_cpu, 'host_cpu')
        self.validate_required(self.host_mem, 'host_mem')
        self.validate_required(self.host_storage, 'host_storage')
        self.validate_required(self.cpu_used, 'cpu_used')
        self.validate_required(self.memory_used, 'memory_used')
        self.validate_required(self.storage_used, 'storage_used')
        self.validate_required(self.image_category, 'image_category')

    def to_map(self):
        result = {}
        result['HostName'] = self.host_name
        result['HostStatus'] = self.host_status
        result['InstanceNumber'] = self.instance_number
        result['CPUAllocationRatio'] = self.cpuallocation_ratio
        result['MemAllocationRatio'] = self.mem_allocation_ratio
        result['DiskAllocationRatio'] = self.disk_allocation_ratio
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['ZoneId'] = self.zone_id
        result['IPAddress'] = self.ipaddress
        result['HostClass'] = self.host_class
        result['CreatedTime'] = self.created_time
        result['DedicatedHostId'] = self.dedicated_host_id
        result['AllocationStatus'] = self.allocation_status
        result['EndTime'] = self.end_time
        result['HostType'] = self.host_type
        result['BastionInstanceId'] = self.bastion_instance_id
        result['OpenPermission'] = self.open_permission
        result['AccountName'] = self.account_name
        result['HostCPU'] = self.host_cpu
        result['HostMem'] = self.host_mem
        result['HostStorage'] = self.host_storage
        result['CpuUsed'] = self.cpu_used
        result['MemoryUsed'] = self.memory_used
        result['StorageUsed'] = self.storage_used
        result['ImageCategory'] = self.image_category
        return result

    def from_map(self, map={}):
        self.host_name = map.get('HostName')
        self.host_status = map.get('HostStatus')
        self.instance_number = map.get('InstanceNumber')
        self.cpuallocation_ratio = map.get('CPUAllocationRatio')
        self.mem_allocation_ratio = map.get('MemAllocationRatio')
        self.disk_allocation_ratio = map.get('DiskAllocationRatio')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.zone_id = map.get('ZoneId')
        self.ipaddress = map.get('IPAddress')
        self.host_class = map.get('HostClass')
        self.created_time = map.get('CreatedTime')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.allocation_status = map.get('AllocationStatus')
        self.end_time = map.get('EndTime')
        self.host_type = map.get('HostType')
        self.bastion_instance_id = map.get('BastionInstanceId')
        self.open_permission = map.get('OpenPermission')
        self.account_name = map.get('AccountName')
        self.host_cpu = map.get('HostCPU')
        self.host_mem = map.get('HostMem')
        self.host_storage = map.get('HostStorage')
        self.cpu_used = map.get('CpuUsed')
        self.memory_used = map.get('MemoryUsed')
        self.storage_used = map.get('StorageUsed')
        self.image_category = map.get('ImageCategory')
        return self


class DescribeDedicatedHostsResponseDedicatedHosts(TeaModel):
    def __init__(self, dedicated_hosts=None):
        self.dedicated_hosts = []

    def validate(self):
        self.validate_required(self.dedicated_hosts, 'dedicated_hosts')
        if self.dedicated_hosts:
            for k in self.dedicated_hosts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DedicatedHosts'] = []
        if self.dedicated_hosts is not None:
            for k in self.dedicated_hosts:
                result['DedicatedHosts'].append(k.to_map() if k else None)
        else:
            result['DedicatedHosts'] = None
        return result

    def from_map(self, map={}):
        self.dedicated_hosts = []
        if map.get('DedicatedHosts') is not None:
            for k in map.get('DedicatedHosts'):
                temp_model = DescribeDedicatedHostsResponseDedicatedHostsDedicatedHosts()
                temp_model = temp_model.from_map(k)
                self.dedicated_hosts.append(temp_model)
        else:
            self.dedicated_hosts = None
        return self


class DescribeDedicatedHostAttributeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_id=None, dedicated_host_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_id = dedicated_host_id
        self.dedicated_host_group_id = dedicated_host_group_id

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        return self


class DescribeDedicatedHostAttributeResponse(TeaModel):
    def __init__(self, request_id=None, dedicated_host_group_id=None, dedicated_host_id=None, region_id=None, zone_id=None, vpcid=None, vswitch_id=None, ipaddress=None, host_name=None, host_status=None, host_class=None, host_cpu=None, host_mem=None, host_storage=None, cpuallocation_ratio=None, mem_allocation_ratio=None, disk_allocation_ratio=None, instance_number=None, instance_number_master=None, instance_number_slave=None, instance_number_romaster=None, instance_number_roslave=None, created_time=None, expired_time=None, auto_renew=None, allocation_status=None, cpu_used=None, memory_used=None, storage_used=None, host_type=None, account_name=None, open_permission=None, image_category=None):
        self.request_id = request_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_host_id = dedicated_host_id
        self.region_id = region_id
        self.zone_id = zone_id
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.ipaddress = ipaddress
        self.host_name = host_name
        self.host_status = host_status
        self.host_class = host_class
        self.host_cpu = host_cpu
        self.host_mem = host_mem
        self.host_storage = host_storage
        self.cpuallocation_ratio = cpuallocation_ratio
        self.mem_allocation_ratio = mem_allocation_ratio
        self.disk_allocation_ratio = disk_allocation_ratio
        self.instance_number = instance_number
        self.instance_number_master = instance_number_master
        self.instance_number_slave = instance_number_slave
        self.instance_number_romaster = instance_number_romaster
        self.instance_number_roslave = instance_number_roslave
        self.created_time = created_time
        self.expired_time = expired_time
        self.auto_renew = auto_renew
        self.allocation_status = allocation_status
        self.cpu_used = cpu_used
        self.memory_used = memory_used
        self.storage_used = storage_used
        self.host_type = host_type
        self.account_name = account_name
        self.open_permission = open_permission
        self.image_category = image_category

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.host_name, 'host_name')
        self.validate_required(self.host_status, 'host_status')
        self.validate_required(self.host_class, 'host_class')
        self.validate_required(self.host_cpu, 'host_cpu')
        self.validate_required(self.host_mem, 'host_mem')
        self.validate_required(self.host_storage, 'host_storage')
        self.validate_required(self.cpuallocation_ratio, 'cpuallocation_ratio')
        self.validate_required(self.mem_allocation_ratio, 'mem_allocation_ratio')
        self.validate_required(self.disk_allocation_ratio, 'disk_allocation_ratio')
        self.validate_required(self.instance_number, 'instance_number')
        self.validate_required(self.instance_number_master, 'instance_number_master')
        self.validate_required(self.instance_number_slave, 'instance_number_slave')
        self.validate_required(self.instance_number_romaster, 'instance_number_romaster')
        self.validate_required(self.instance_number_roslave, 'instance_number_roslave')
        self.validate_required(self.created_time, 'created_time')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.auto_renew, 'auto_renew')
        self.validate_required(self.allocation_status, 'allocation_status')
        self.validate_required(self.cpu_used, 'cpu_used')
        self.validate_required(self.memory_used, 'memory_used')
        self.validate_required(self.storage_used, 'storage_used')
        self.validate_required(self.host_type, 'host_type')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.open_permission, 'open_permission')
        self.validate_required(self.image_category, 'image_category')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['IPAddress'] = self.ipaddress
        result['HostName'] = self.host_name
        result['HostStatus'] = self.host_status
        result['HostClass'] = self.host_class
        result['HostCPU'] = self.host_cpu
        result['HostMem'] = self.host_mem
        result['HostStorage'] = self.host_storage
        result['CPUAllocationRatio'] = self.cpuallocation_ratio
        result['MemAllocationRatio'] = self.mem_allocation_ratio
        result['DiskAllocationRatio'] = self.disk_allocation_ratio
        result['InstanceNumber'] = self.instance_number
        result['InstanceNumberMaster'] = self.instance_number_master
        result['InstanceNumberSlave'] = self.instance_number_slave
        result['InstanceNumberROMaster'] = self.instance_number_romaster
        result['InstanceNumberROSlave'] = self.instance_number_roslave
        result['CreatedTime'] = self.created_time
        result['ExpiredTime'] = self.expired_time
        result['AutoRenew'] = self.auto_renew
        result['AllocationStatus'] = self.allocation_status
        result['CpuUsed'] = self.cpu_used
        result['MemoryUsed'] = self.memory_used
        result['StorageUsed'] = self.storage_used
        result['HostType'] = self.host_type
        result['AccountName'] = self.account_name
        result['OpenPermission'] = self.open_permission
        result['ImageCategory'] = self.image_category
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.ipaddress = map.get('IPAddress')
        self.host_name = map.get('HostName')
        self.host_status = map.get('HostStatus')
        self.host_class = map.get('HostClass')
        self.host_cpu = map.get('HostCPU')
        self.host_mem = map.get('HostMem')
        self.host_storage = map.get('HostStorage')
        self.cpuallocation_ratio = map.get('CPUAllocationRatio')
        self.mem_allocation_ratio = map.get('MemAllocationRatio')
        self.disk_allocation_ratio = map.get('DiskAllocationRatio')
        self.instance_number = map.get('InstanceNumber')
        self.instance_number_master = map.get('InstanceNumberMaster')
        self.instance_number_slave = map.get('InstanceNumberSlave')
        self.instance_number_romaster = map.get('InstanceNumberROMaster')
        self.instance_number_roslave = map.get('InstanceNumberROSlave')
        self.created_time = map.get('CreatedTime')
        self.expired_time = map.get('ExpiredTime')
        self.auto_renew = map.get('AutoRenew')
        self.allocation_status = map.get('AllocationStatus')
        self.cpu_used = map.get('CpuUsed')
        self.memory_used = map.get('MemoryUsed')
        self.storage_used = map.get('StorageUsed')
        self.host_type = map.get('HostType')
        self.account_name = map.get('AccountName')
        self.open_permission = map.get('OpenPermission')
        self.image_category = map.get('ImageCategory')
        return self


class ClearDedicatedHostRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_id=None, failover_mode=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_id = dedicated_host_id
        self.failover_mode = failover_mode

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')
        self.validate_required(self.failover_mode, 'failover_mode')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['FailoverMode'] = self.failover_mode
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.failover_mode = map.get('FailoverMode')
        return self


class ClearDedicatedHostResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, dedicated_host_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.dedicated_host_id = dedicated_host_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['DedicatedHostId'] = self.dedicated_host_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        return self


class ModifyDedicatedHostAttributeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_id=None, host_name=None, allocation_status=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_id = dedicated_host_id
        self.host_name = host_name
        self.allocation_status = allocation_status

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['HostName'] = self.host_name
        result['AllocationStatus'] = self.allocation_status
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.host_name = map.get('HostName')
        self.allocation_status = map.get('AllocationStatus')
        return self


class ModifyDedicatedHostAttributeResponse(TeaModel):
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


class MigrateDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, dbinstance_id=None, target_dedicated_host_id_for_master=None, target_dedicated_host_id_for_slave=None, effective_time=None, specified_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dbinstance_id = dbinstance_id
        self.target_dedicated_host_id_for_master = target_dedicated_host_id_for_master
        self.target_dedicated_host_id_for_slave = target_dedicated_host_id_for_slave
        self.effective_time = effective_time
        self.specified_time = specified_time

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TargetDedicatedHostIdForMaster'] = self.target_dedicated_host_id_for_master
        result['TargetDedicatedHostIdForSlave'] = self.target_dedicated_host_id_for_slave
        result['EffectiveTime'] = self.effective_time
        result['SpecifiedTime'] = self.specified_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.target_dedicated_host_id_for_master = map.get('TargetDedicatedHostIdForMaster')
        self.target_dedicated_host_id_for_slave = map.get('TargetDedicatedHostIdForSlave')
        self.effective_time = map.get('EffectiveTime')
        self.specified_time = map.get('SpecifiedTime')
        return self


class MigrateDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, migration_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.migration_id = migration_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.migration_id, 'migration_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['MigrationId'] = self.migration_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.migration_id = map.get('MigrationId')
        return self


class CreateDedicatedHostRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, host_name=None, zone_id=None, vswitch_id=None, host_class=None, pay_type=None, period=None, used_time=None, client_token=None, auto_renew=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.host_name = host_name
        self.zone_id = zone_id
        self.vswitch_id = vswitch_id
        self.host_class = host_class
        self.pay_type = pay_type
        self.period = period
        self.used_time = used_time
        self.client_token = client_token
        self.auto_renew = auto_renew

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.host_class, 'host_class')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.client_token, 'client_token')
        self.validate_required(self.auto_renew, 'auto_renew')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['HostName'] = self.host_name
        result['ZoneId'] = self.zone_id
        result['VSwitchId'] = self.vswitch_id
        result['HostClass'] = self.host_class
        result['PayType'] = self.pay_type
        result['Period'] = self.period
        result['UsedTime'] = self.used_time
        result['ClientToken'] = self.client_token
        result['AutoRenew'] = self.auto_renew
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.host_name = map.get('HostName')
        self.zone_id = map.get('ZoneId')
        self.vswitch_id = map.get('VSwitchId')
        self.host_class = map.get('HostClass')
        self.pay_type = map.get('PayType')
        self.period = map.get('Period')
        self.used_time = map.get('UsedTime')
        self.client_token = map.get('ClientToken')
        self.auto_renew = map.get('AutoRenew')
        return self


class CreateDedicatedHostResponse(TeaModel):
    def __init__(self, request_id=None, order_id=None, dedicate_host_list=None):
        self.request_id = request_id
        self.order_id = order_id
        self.dedicate_host_list = dedicate_host_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.dedicate_host_list, 'dedicate_host_list')
        if self.dedicate_host_list:
            self.dedicate_host_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OrderId'] = self.order_id
        if self.dedicate_host_list is not None:
            result['DedicateHostList'] = self.dedicate_host_list.to_map()
        else:
            result['DedicateHostList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.order_id = map.get('OrderId')
        if map.get('DedicateHostList') is not None:
            temp_model = CreateDedicatedHostResponseDedicateHostList()
            self.dedicate_host_list = temp_model.from_map(map['DedicateHostList'])
        else:
            self.dedicate_host_list = None
        return self


class CreateDedicatedHostResponseDedicateHostListDedicateHostList(TeaModel):
    def __init__(self, dedicated_host_id=None):
        self.dedicated_host_id = dedicated_host_id

    def validate(self):
        self.validate_required(self.dedicated_host_id, 'dedicated_host_id')

    def to_map(self):
        result = {}
        result['DedicatedHostId'] = self.dedicated_host_id
        return result

    def from_map(self, map={}):
        self.dedicated_host_id = map.get('DedicatedHostId')
        return self


class CreateDedicatedHostResponseDedicateHostList(TeaModel):
    def __init__(self, dedicate_host_list=None):
        self.dedicate_host_list = []

    def validate(self):
        self.validate_required(self.dedicate_host_list, 'dedicate_host_list')
        if self.dedicate_host_list:
            for k in self.dedicate_host_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DedicateHostList'] = []
        if self.dedicate_host_list is not None:
            for k in self.dedicate_host_list:
                result['DedicateHostList'].append(k.to_map() if k else None)
        else:
            result['DedicateHostList'] = None
        return result

    def from_map(self, map={}):
        self.dedicate_host_list = []
        if map.get('DedicateHostList') is not None:
            for k in map.get('DedicateHostList'):
                temp_model = CreateDedicatedHostResponseDedicateHostListDedicateHostList()
                temp_model = temp_model.from_map(k)
                self.dedicate_host_list.append(temp_model)
        else:
            self.dedicate_host_list = None
        return self


class RebuildDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dedicated_host_group_id=None, dbinstance_id=None, dedicated_host_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dbinstance_id = dbinstance_id
        self.dedicated_host_id = dedicated_host_id

    def validate(self):
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DedicatedHostId'] = self.dedicated_host_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        return self


class RebuildDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, migration_id=None):
        self.request_id = request_id
        self.task_id = task_id
        self.migration_id = migration_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.migration_id, 'migration_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['MigrationId'] = self.migration_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.migration_id = map.get('MigrationId')
        return self


class DescribeDBProxyEndpointRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbproxy_endpoint_id=None, dbproxy_connect_string=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbproxy_endpoint_id = dbproxy_endpoint_id
        self.dbproxy_connect_string = dbproxy_connect_string
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBProxyEndpointId'] = self.dbproxy_endpoint_id
        result['DBProxyConnectString'] = self.dbproxy_connect_string
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbproxy_endpoint_id = map.get('DBProxyEndpointId')
        self.dbproxy_connect_string = map.get('DBProxyConnectString')
        self.region_id = map.get('RegionId')
        return self


class DescribeDBProxyEndpointResponse(TeaModel):
    def __init__(self, request_id=None, dbproxy_endpoint_id=None, dbproxy_connect_string=None, dbproxy_connect_string_port=None, dbproxy_connect_string_net_type=None, dbproxy_features=None, read_only_instance_max_delay_time=None, read_only_instance_distribution_type=None, read_only_instance_weight=None):
        self.request_id = request_id
        self.dbproxy_endpoint_id = dbproxy_endpoint_id
        self.dbproxy_connect_string = dbproxy_connect_string
        self.dbproxy_connect_string_port = dbproxy_connect_string_port
        self.dbproxy_connect_string_net_type = dbproxy_connect_string_net_type
        self.dbproxy_features = dbproxy_features
        self.read_only_instance_max_delay_time = read_only_instance_max_delay_time
        self.read_only_instance_distribution_type = read_only_instance_distribution_type
        self.read_only_instance_weight = read_only_instance_weight

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbproxy_endpoint_id, 'dbproxy_endpoint_id')
        self.validate_required(self.dbproxy_connect_string, 'dbproxy_connect_string')
        self.validate_required(self.dbproxy_connect_string_port, 'dbproxy_connect_string_port')
        self.validate_required(self.dbproxy_connect_string_net_type, 'dbproxy_connect_string_net_type')
        self.validate_required(self.dbproxy_features, 'dbproxy_features')
        self.validate_required(self.read_only_instance_max_delay_time, 'read_only_instance_max_delay_time')
        self.validate_required(self.read_only_instance_distribution_type, 'read_only_instance_distribution_type')
        self.validate_required(self.read_only_instance_weight, 'read_only_instance_weight')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBProxyEndpointId'] = self.dbproxy_endpoint_id
        result['DBProxyConnectString'] = self.dbproxy_connect_string
        result['DBProxyConnectStringPort'] = self.dbproxy_connect_string_port
        result['DBProxyConnectStringNetType'] = self.dbproxy_connect_string_net_type
        result['DBProxyFeatures'] = self.dbproxy_features
        result['ReadOnlyInstanceMaxDelayTime'] = self.read_only_instance_max_delay_time
        result['ReadOnlyInstanceDistributionType'] = self.read_only_instance_distribution_type
        result['ReadOnlyInstanceWeight'] = self.read_only_instance_weight
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbproxy_endpoint_id = map.get('DBProxyEndpointId')
        self.dbproxy_connect_string = map.get('DBProxyConnectString')
        self.dbproxy_connect_string_port = map.get('DBProxyConnectStringPort')
        self.dbproxy_connect_string_net_type = map.get('DBProxyConnectStringNetType')
        self.dbproxy_features = map.get('DBProxyFeatures')
        self.read_only_instance_max_delay_time = map.get('ReadOnlyInstanceMaxDelayTime')
        self.read_only_instance_distribution_type = map.get('ReadOnlyInstanceDistributionType')
        self.read_only_instance_weight = map.get('ReadOnlyInstanceWeight')
        return self


class DescribeDBProxyPerformanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbproxy_instance_type=None, start_time=None, end_time=None, region_id=None, metrics_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbproxy_instance_type = dbproxy_instance_type
        self.start_time = start_time
        self.end_time = end_time
        self.region_id = region_id
        self.metrics_name = metrics_name

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.metrics_name, 'metrics_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBProxyInstanceType'] = self.dbproxy_instance_type
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['RegionId'] = self.region_id
        result['MetricsName'] = self.metrics_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbproxy_instance_type = map.get('DBProxyInstanceType')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region_id = map.get('RegionId')
        self.metrics_name = map.get('MetricsName')
        return self


class DescribeDBProxyPerformanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, start_time=None, end_time=None, performance_keys=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.performance_keys = performance_keys

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.performance_keys, 'performance_keys')
        if self.performance_keys:
            self.performance_keys.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        if self.performance_keys is not None:
            result['PerformanceKeys'] = self.performance_keys.to_map()
        else:
            result['PerformanceKeys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        if map.get('PerformanceKeys') is not None:
            temp_model = DescribeDBProxyPerformanceResponsePerformanceKeys()
            self.performance_keys = temp_model.from_map(map['PerformanceKeys'])
        else:
            self.performance_keys = None
        return self


class DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey(TeaModel):
    def __init__(self, key=None, value_format=None):
        self.key = key
        self.value_format = value_format

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value_format, 'value_format')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['ValueFormat'] = self.value_format
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value_format = map.get('ValueFormat')
        return self


class DescribeDBProxyPerformanceResponsePerformanceKeys(TeaModel):
    def __init__(self, performance_key=None):
        self.performance_key = []

    def validate(self):
        self.validate_required(self.performance_key, 'performance_key')
        if self.performance_key:
            for k in self.performance_key:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceKey'] = []
        if self.performance_key is not None:
            for k in self.performance_key:
                result['PerformanceKey'].append(k.to_map() if k else None)
        else:
            result['PerformanceKey'] = None
        return result

    def from_map(self, map={}):
        self.performance_key = []
        if map.get('PerformanceKey') is not None:
            for k in map.get('PerformanceKey'):
                temp_model = DescribeDBProxyPerformanceResponsePerformanceKeysPerformanceKey()
                temp_model = temp_model.from_map(k)
                self.performance_key.append(temp_model)
        else:
            self.performance_key = None
        return self


class DescribeDBProxyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeDBProxyResponse(TeaModel):
    def __init__(self, request_id=None, dbproxy_service_status=None, dbproxy_instance_type=None, dbproxy_instance_num=None, dbproxy_instance_status=None, dbproxy_instance_current_minor_version=None, dbproxy_instance_latest_minor_version=None, dbproxy_instance_name=None, dbproxy_connect_string_items=None):
        self.request_id = request_id
        self.dbproxy_service_status = dbproxy_service_status
        self.dbproxy_instance_type = dbproxy_instance_type
        self.dbproxy_instance_num = dbproxy_instance_num
        self.dbproxy_instance_status = dbproxy_instance_status
        self.dbproxy_instance_current_minor_version = dbproxy_instance_current_minor_version
        self.dbproxy_instance_latest_minor_version = dbproxy_instance_latest_minor_version
        self.dbproxy_instance_name = dbproxy_instance_name
        self.dbproxy_connect_string_items = dbproxy_connect_string_items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbproxy_service_status, 'dbproxy_service_status')
        self.validate_required(self.dbproxy_instance_type, 'dbproxy_instance_type')
        self.validate_required(self.dbproxy_instance_num, 'dbproxy_instance_num')
        self.validate_required(self.dbproxy_instance_status, 'dbproxy_instance_status')
        self.validate_required(self.dbproxy_instance_current_minor_version, 'dbproxy_instance_current_minor_version')
        self.validate_required(self.dbproxy_instance_latest_minor_version, 'dbproxy_instance_latest_minor_version')
        self.validate_required(self.dbproxy_instance_name, 'dbproxy_instance_name')
        self.validate_required(self.dbproxy_connect_string_items, 'dbproxy_connect_string_items')
        if self.dbproxy_connect_string_items:
            self.dbproxy_connect_string_items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBProxyServiceStatus'] = self.dbproxy_service_status
        result['DBProxyInstanceType'] = self.dbproxy_instance_type
        result['DBProxyInstanceNum'] = self.dbproxy_instance_num
        result['DBProxyInstanceStatus'] = self.dbproxy_instance_status
        result['DBProxyInstanceCurrentMinorVersion'] = self.dbproxy_instance_current_minor_version
        result['DBProxyInstanceLatestMinorVersion'] = self.dbproxy_instance_latest_minor_version
        result['DBProxyInstanceName'] = self.dbproxy_instance_name
        if self.dbproxy_connect_string_items is not None:
            result['DBProxyConnectStringItems'] = self.dbproxy_connect_string_items.to_map()
        else:
            result['DBProxyConnectStringItems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbproxy_service_status = map.get('DBProxyServiceStatus')
        self.dbproxy_instance_type = map.get('DBProxyInstanceType')
        self.dbproxy_instance_num = map.get('DBProxyInstanceNum')
        self.dbproxy_instance_status = map.get('DBProxyInstanceStatus')
        self.dbproxy_instance_current_minor_version = map.get('DBProxyInstanceCurrentMinorVersion')
        self.dbproxy_instance_latest_minor_version = map.get('DBProxyInstanceLatestMinorVersion')
        self.dbproxy_instance_name = map.get('DBProxyInstanceName')
        if map.get('DBProxyConnectStringItems') is not None:
            temp_model = DescribeDBProxyResponseDBProxyConnectStringItems()
            self.dbproxy_connect_string_items = temp_model.from_map(map['DBProxyConnectStringItems'])
        else:
            self.dbproxy_connect_string_items = None
        return self


class DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems(TeaModel):
    def __init__(self, dbproxy_endpoint_id=None, dbproxy_connect_string=None, dbproxy_connect_string_port=None, dbproxy_connect_string_net_type=None, dbproxy_vpc_instance_id=None, dbproxy_endpoint_name=None, dbproxy_connect_string_net_work_type=None):
        self.dbproxy_endpoint_id = dbproxy_endpoint_id
        self.dbproxy_connect_string = dbproxy_connect_string
        self.dbproxy_connect_string_port = dbproxy_connect_string_port
        self.dbproxy_connect_string_net_type = dbproxy_connect_string_net_type
        self.dbproxy_vpc_instance_id = dbproxy_vpc_instance_id
        self.dbproxy_endpoint_name = dbproxy_endpoint_name
        self.dbproxy_connect_string_net_work_type = dbproxy_connect_string_net_work_type

    def validate(self):
        self.validate_required(self.dbproxy_endpoint_id, 'dbproxy_endpoint_id')
        self.validate_required(self.dbproxy_connect_string, 'dbproxy_connect_string')
        self.validate_required(self.dbproxy_connect_string_port, 'dbproxy_connect_string_port')
        self.validate_required(self.dbproxy_connect_string_net_type, 'dbproxy_connect_string_net_type')
        self.validate_required(self.dbproxy_vpc_instance_id, 'dbproxy_vpc_instance_id')
        self.validate_required(self.dbproxy_endpoint_name, 'dbproxy_endpoint_name')
        self.validate_required(self.dbproxy_connect_string_net_work_type, 'dbproxy_connect_string_net_work_type')

    def to_map(self):
        result = {}
        result['DBProxyEndpointId'] = self.dbproxy_endpoint_id
        result['DBProxyConnectString'] = self.dbproxy_connect_string
        result['DBProxyConnectStringPort'] = self.dbproxy_connect_string_port
        result['DBProxyConnectStringNetType'] = self.dbproxy_connect_string_net_type
        result['DBProxyVpcInstanceId'] = self.dbproxy_vpc_instance_id
        result['DBProxyEndpointName'] = self.dbproxy_endpoint_name
        result['DBProxyConnectStringNetWorkType'] = self.dbproxy_connect_string_net_work_type
        return result

    def from_map(self, map={}):
        self.dbproxy_endpoint_id = map.get('DBProxyEndpointId')
        self.dbproxy_connect_string = map.get('DBProxyConnectString')
        self.dbproxy_connect_string_port = map.get('DBProxyConnectStringPort')
        self.dbproxy_connect_string_net_type = map.get('DBProxyConnectStringNetType')
        self.dbproxy_vpc_instance_id = map.get('DBProxyVpcInstanceId')
        self.dbproxy_endpoint_name = map.get('DBProxyEndpointName')
        self.dbproxy_connect_string_net_work_type = map.get('DBProxyConnectStringNetWorkType')
        return self


class DescribeDBProxyResponseDBProxyConnectStringItems(TeaModel):
    def __init__(self, dbproxy_connect_string_items=None):
        self.dbproxy_connect_string_items = []

    def validate(self):
        self.validate_required(self.dbproxy_connect_string_items, 'dbproxy_connect_string_items')
        if self.dbproxy_connect_string_items:
            for k in self.dbproxy_connect_string_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBProxyConnectStringItems'] = []
        if self.dbproxy_connect_string_items is not None:
            for k in self.dbproxy_connect_string_items:
                result['DBProxyConnectStringItems'].append(k.to_map() if k else None)
        else:
            result['DBProxyConnectStringItems'] = None
        return result

    def from_map(self, map={}):
        self.dbproxy_connect_string_items = []
        if map.get('DBProxyConnectStringItems') is not None:
            for k in map.get('DBProxyConnectStringItems'):
                temp_model = DescribeDBProxyResponseDBProxyConnectStringItemsDBProxyConnectStringItems()
                temp_model = temp_model.from_map(k)
                self.dbproxy_connect_string_items.append(temp_model)
        else:
            self.dbproxy_connect_string_items = None
        return self


class ModifyDBProxyEndpointRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbproxy_endpoint_id=None, config_dbproxy_features=None, region_id=None, read_only_instance_max_delay_time=None, read_only_instance_distribution_type=None, read_only_instance_weight=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbproxy_endpoint_id = dbproxy_endpoint_id
        self.config_dbproxy_features = config_dbproxy_features
        self.region_id = region_id
        self.read_only_instance_max_delay_time = read_only_instance_max_delay_time
        self.read_only_instance_distribution_type = read_only_instance_distribution_type
        self.read_only_instance_weight = read_only_instance_weight

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbproxy_endpoint_id, 'dbproxy_endpoint_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBProxyEndpointId'] = self.dbproxy_endpoint_id
        result['ConfigDBProxyFeatures'] = self.config_dbproxy_features
        result['RegionId'] = self.region_id
        result['ReadOnlyInstanceMaxDelayTime'] = self.read_only_instance_max_delay_time
        result['ReadOnlyInstanceDistributionType'] = self.read_only_instance_distribution_type
        result['ReadOnlyInstanceWeight'] = self.read_only_instance_weight
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbproxy_endpoint_id = map.get('DBProxyEndpointId')
        self.config_dbproxy_features = map.get('ConfigDBProxyFeatures')
        self.region_id = map.get('RegionId')
        self.read_only_instance_max_delay_time = map.get('ReadOnlyInstanceMaxDelayTime')
        self.read_only_instance_distribution_type = map.get('ReadOnlyInstanceDistributionType')
        self.read_only_instance_weight = map.get('ReadOnlyInstanceWeight')
        return self


class ModifyDBProxyEndpointResponse(TeaModel):
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


class ModifyDBProxyInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbproxy_instance_type=None, dbproxy_instance_num=None, effective_time=None, effective_specific_time=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbproxy_instance_type = dbproxy_instance_type
        self.dbproxy_instance_num = dbproxy_instance_num
        self.effective_time = effective_time
        self.effective_specific_time = effective_specific_time
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbproxy_instance_type, 'dbproxy_instance_type')
        self.validate_required(self.dbproxy_instance_num, 'dbproxy_instance_num')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBProxyInstanceType'] = self.dbproxy_instance_type
        result['DBProxyInstanceNum'] = self.dbproxy_instance_num
        result['EffectiveTime'] = self.effective_time
        result['EffectiveSpecificTime'] = self.effective_specific_time
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbproxy_instance_type = map.get('DBProxyInstanceType')
        self.dbproxy_instance_num = map.get('DBProxyInstanceNum')
        self.effective_time = map.get('EffectiveTime')
        self.effective_specific_time = map.get('EffectiveSpecificTime')
        self.region_id = map.get('RegionId')
        return self


class ModifyDBProxyInstanceResponse(TeaModel):
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


class ModifyDBProxyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, config_dbproxy_service=None, dbproxy_instance_num=None, region_id=None, instance_network_type=None, vpcid=None, vswitch_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.config_dbproxy_service = config_dbproxy_service
        self.dbproxy_instance_num = dbproxy_instance_num
        self.region_id = region_id
        self.instance_network_type = instance_network_type
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.config_dbproxy_service, 'config_dbproxy_service')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ConfigDBProxyService'] = self.config_dbproxy_service
        result['DBProxyInstanceNum'] = self.dbproxy_instance_num
        result['RegionId'] = self.region_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.config_dbproxy_service = map.get('ConfigDBProxyService')
        self.dbproxy_instance_num = map.get('DBProxyInstanceNum')
        self.region_id = map.get('RegionId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        return self


class ModifyDBProxyResponse(TeaModel):
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


class ModifyHASwitchConfigRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, haconfig=None, manual_hatime=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.haconfig = haconfig
        self.manual_hatime = manual_hatime
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['HAConfig'] = self.haconfig
        result['ManualHATime'] = self.manual_hatime
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.haconfig = map.get('HAConfig')
        self.manual_hatime = map.get('ManualHATime')
        self.region_id = map.get('RegionId')
        return self


class ModifyHASwitchConfigResponse(TeaModel):
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


class DescribeHASwitchConfigRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeHASwitchConfigResponse(TeaModel):
    def __init__(self, request_id=None, haconfig=None, manual_hatime=None):
        self.request_id = request_id
        self.haconfig = haconfig
        self.manual_hatime = manual_hatime

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.haconfig, 'haconfig')
        self.validate_required(self.manual_hatime, 'manual_hatime')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['HAConfig'] = self.haconfig
        result['ManualHATime'] = self.manual_hatime
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.haconfig = map.get('HAConfig')
        self.manual_hatime = map.get('ManualHATime')
        return self


class ModifyActionEventPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, enable_event_log=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.enable_event_log = enable_event_log

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.enable_event_log, 'enable_event_log')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['EnableEventLog'] = self.enable_event_log
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.enable_event_log = map.get('EnableEventLog')
        return self


class ModifyActionEventPolicyResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, enable_event_log=None):
        self.request_id = request_id
        self.region_id = region_id
        self.enable_event_log = enable_event_log

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.enable_event_log, 'enable_event_log')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['EnableEventLog'] = self.enable_event_log
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.enable_event_log = map.get('EnableEventLog')
        return self


class DescribeActionEventPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        return self


class DescribeActionEventPolicyResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, enable_event_log=None):
        self.request_id = request_id
        self.region_id = region_id
        self.enable_event_log = enable_event_log

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.enable_event_log, 'enable_event_log')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['EnableEventLog'] = self.enable_event_log
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.enable_event_log = map.get('EnableEventLog')
        return self


class DescribeEventsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeEventsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_size=None, page_number=None, event_items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_size = page_size
        self.page_number = page_number
        self.event_items = event_items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            self.event_items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.event_items is not None:
            result['EventItems'] = self.event_items.to_map()
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('EventItems') is not None:
            temp_model = DescribeEventsResponseEventItems()
            self.event_items = temp_model.from_map(map['EventItems'])
        else:
            self.event_items = None
        return self


class DescribeEventsResponseEventItemsEventItems(TeaModel):
    def __init__(self, event_id=None, event_type=None, event_name=None, event_time=None, resource_type=None, resource_name=None, region_id=None, event_user_type=None, event_reason=None, event_payload=None, event_record_time=None):
        self.event_id = event_id
        self.event_type = event_type
        self.event_name = event_name
        self.event_time = event_time
        self.resource_type = resource_type
        self.resource_name = resource_name
        self.region_id = region_id
        self.event_user_type = event_user_type
        self.event_reason = event_reason
        self.event_payload = event_payload
        self.event_record_time = event_record_time

    def validate(self):
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_type, 'event_type')
        self.validate_required(self.event_name, 'event_name')
        self.validate_required(self.event_time, 'event_time')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_name, 'resource_name')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.event_user_type, 'event_user_type')
        self.validate_required(self.event_reason, 'event_reason')
        self.validate_required(self.event_payload, 'event_payload')
        self.validate_required(self.event_record_time, 'event_record_time')

    def to_map(self):
        result = {}
        result['EventId'] = self.event_id
        result['EventType'] = self.event_type
        result['EventName'] = self.event_name
        result['EventTime'] = self.event_time
        result['ResourceType'] = self.resource_type
        result['ResourceName'] = self.resource_name
        result['RegionId'] = self.region_id
        result['EventUserType'] = self.event_user_type
        result['EventReason'] = self.event_reason
        result['EventPayload'] = self.event_payload
        result['EventRecordTime'] = self.event_record_time
        return result

    def from_map(self, map={}):
        self.event_id = map.get('EventId')
        self.event_type = map.get('EventType')
        self.event_name = map.get('EventName')
        self.event_time = map.get('EventTime')
        self.resource_type = map.get('ResourceType')
        self.resource_name = map.get('ResourceName')
        self.region_id = map.get('RegionId')
        self.event_user_type = map.get('EventUserType')
        self.event_reason = map.get('EventReason')
        self.event_payload = map.get('EventPayload')
        self.event_record_time = map.get('EventRecordTime')
        return self


class DescribeEventsResponseEventItems(TeaModel):
    def __init__(self, event_items=None):
        self.event_items = []

    def validate(self):
        self.validate_required(self.event_items, 'event_items')
        if self.event_items:
            for k in self.event_items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventItems'] = []
        if self.event_items is not None:
            for k in self.event_items:
                result['EventItems'].append(k.to_map() if k else None)
        else:
            result['EventItems'] = None
        return result

    def from_map(self, map={}):
        self.event_items = []
        if map.get('EventItems') is not None:
            for k in map.get('EventItems'):
                temp_model = DescribeEventsResponseEventItemsEventItems()
                temp_model = temp_model.from_map(k)
                self.event_items.append(temp_model)
        else:
            self.event_items = None
        return self


class DescribeDBInstancesForCloneRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, engine=None, zone_id=None, dbinstance_status=None, expired=None, search_key=None, dbinstance_id=None, dbinstance_type=None, region_id=None, page_size=None, page_number=None, instance_network_type=None, vpc_id=None, vswitch_id=None, dbinstance_class=None, engine_version=None, node_type=None, pay_type=None, connection_mode=None, owner_account=None, current_instance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.engine = engine
        self.zone_id = zone_id
        self.dbinstance_status = dbinstance_status
        self.expired = expired
        self.search_key = search_key
        self.dbinstance_id = dbinstance_id
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.page_size = page_size
        self.page_number = page_number
        self.instance_network_type = instance_network_type
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.dbinstance_class = dbinstance_class
        self.engine_version = engine_version
        self.node_type = node_type
        self.pay_type = pay_type
        self.connection_mode = connection_mode
        self.owner_account = owner_account
        self.current_instance_id = current_instance_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['Engine'] = self.engine
        result['ZoneId'] = self.zone_id
        result['DBInstanceStatus'] = self.dbinstance_status
        result['Expired'] = self.expired
        result['SearchKey'] = self.search_key
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['InstanceNetworkType'] = self.instance_network_type
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['EngineVersion'] = self.engine_version
        result['NodeType'] = self.node_type
        result['PayType'] = self.pay_type
        result['ConnectionMode'] = self.connection_mode
        result['OwnerAccount'] = self.owner_account
        result['CurrentInstanceId'] = self.current_instance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.engine = map.get('Engine')
        self.zone_id = map.get('ZoneId')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.expired = map.get('Expired')
        self.search_key = map.get('SearchKey')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.engine_version = map.get('EngineVersion')
        self.node_type = map.get('NodeType')
        self.pay_type = map.get('PayType')
        self.connection_mode = map.get('ConnectionMode')
        self.owner_account = map.get('OwnerAccount')
        self.current_instance_id = map.get('CurrentInstanceId')
        return self


class DescribeDBInstancesForCloneResponse(TeaModel):
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
            temp_model = DescribeDBInstancesForCloneResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId(TeaModel):
    def __init__(self, dbinstance_id=None):
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds(TeaModel):
    def __init__(self, read_only_dbinstance_id=None):
        self.read_only_dbinstance_id = []

    def validate(self):
        self.validate_required(self.read_only_dbinstance_id, 'read_only_dbinstance_id')
        if self.read_only_dbinstance_id:
            for k in self.read_only_dbinstance_id:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyDBInstanceId'] = []
        if self.read_only_dbinstance_id is not None:
            for k in self.read_only_dbinstance_id:
                result['ReadOnlyDBInstanceId'].append(k.to_map() if k else None)
        else:
            result['ReadOnlyDBInstanceId'] = None
        return result

    def from_map(self, map={}):
        self.read_only_dbinstance_id = []
        if map.get('ReadOnlyDBInstanceId') is not None:
            for k in map.get('ReadOnlyDBInstanceId'):
                temp_model = DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId()
                temp_model = temp_model.from_map(k)
                self.read_only_dbinstance_id.append(temp_model)
        else:
            self.read_only_dbinstance_id = None
        return self


class DescribeDBInstancesForCloneResponseItemsDBInstance(TeaModel):
    def __init__(self, ins_id=None, dbinstance_id=None, dbinstance_description=None, pay_type=None, dbinstance_type=None, region_id=None, expire_time=None, destroy_time=None, dbinstance_status=None, engine=None, dbinstance_net_type=None, connection_mode=None, lock_mode=None, category=None, dbinstance_storage_type=None, dbinstance_class=None, instance_network_type=None, vpc_cloud_instance_id=None, lock_reason=None, zone_id=None, mutri_orsignle=None, create_time=None, engine_version=None, guard_dbinstance_id=None, temp_dbinstance_id=None, master_instance_id=None, vpc_id=None, vswitch_id=None, replicate_id=None, resource_group_id=None, read_only_dbinstance_ids=None):
        self.ins_id = ins_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.pay_type = pay_type
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.expire_time = expire_time
        self.destroy_time = destroy_time
        self.dbinstance_status = dbinstance_status
        self.engine = engine
        self.dbinstance_net_type = dbinstance_net_type
        self.connection_mode = connection_mode
        self.lock_mode = lock_mode
        self.category = category
        self.dbinstance_storage_type = dbinstance_storage_type
        self.dbinstance_class = dbinstance_class
        self.instance_network_type = instance_network_type
        self.vpc_cloud_instance_id = vpc_cloud_instance_id
        self.lock_reason = lock_reason
        self.zone_id = zone_id
        self.mutri_orsignle = mutri_orsignle
        self.create_time = create_time
        self.engine_version = engine_version
        self.guard_dbinstance_id = guard_dbinstance_id
        self.temp_dbinstance_id = temp_dbinstance_id
        self.master_instance_id = master_instance_id
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.replicate_id = replicate_id
        self.resource_group_id = resource_group_id
        self.read_only_dbinstance_ids = read_only_dbinstance_ids

    def validate(self):
        self.validate_required(self.ins_id, 'ins_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.destroy_time, 'destroy_time')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.connection_mode, 'connection_mode')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.category, 'category')
        self.validate_required(self.dbinstance_storage_type, 'dbinstance_storage_type')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.instance_network_type, 'instance_network_type')
        self.validate_required(self.vpc_cloud_instance_id, 'vpc_cloud_instance_id')
        self.validate_required(self.lock_reason, 'lock_reason')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.mutri_orsignle, 'mutri_orsignle')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.guard_dbinstance_id, 'guard_dbinstance_id')
        self.validate_required(self.temp_dbinstance_id, 'temp_dbinstance_id')
        self.validate_required(self.master_instance_id, 'master_instance_id')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.replicate_id, 'replicate_id')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.read_only_dbinstance_ids, 'read_only_dbinstance_ids')
        if self.read_only_dbinstance_ids:
            self.read_only_dbinstance_ids.validate()

    def to_map(self):
        result = {}
        result['InsId'] = self.ins_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['PayType'] = self.pay_type
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['ExpireTime'] = self.expire_time
        result['DestroyTime'] = self.destroy_time
        result['DBInstanceStatus'] = self.dbinstance_status
        result['Engine'] = self.engine
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['ConnectionMode'] = self.connection_mode
        result['LockMode'] = self.lock_mode
        result['Category'] = self.category
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['DBInstanceClass'] = self.dbinstance_class
        result['InstanceNetworkType'] = self.instance_network_type
        result['VpcCloudInstanceId'] = self.vpc_cloud_instance_id
        result['LockReason'] = self.lock_reason
        result['ZoneId'] = self.zone_id
        result['MutriORsignle'] = self.mutri_orsignle
        result['CreateTime'] = self.create_time
        result['EngineVersion'] = self.engine_version
        result['GuardDBInstanceId'] = self.guard_dbinstance_id
        result['TempDBInstanceId'] = self.temp_dbinstance_id
        result['MasterInstanceId'] = self.master_instance_id
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['ReplicateId'] = self.replicate_id
        result['ResourceGroupId'] = self.resource_group_id
        if self.read_only_dbinstance_ids is not None:
            result['ReadOnlyDBInstanceIds'] = self.read_only_dbinstance_ids.to_map()
        else:
            result['ReadOnlyDBInstanceIds'] = None
        return result

    def from_map(self, map={}):
        self.ins_id = map.get('InsId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.pay_type = map.get('PayType')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.expire_time = map.get('ExpireTime')
        self.destroy_time = map.get('DestroyTime')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.engine = map.get('Engine')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.connection_mode = map.get('ConnectionMode')
        self.lock_mode = map.get('LockMode')
        self.category = map.get('Category')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpc_cloud_instance_id = map.get('VpcCloudInstanceId')
        self.lock_reason = map.get('LockReason')
        self.zone_id = map.get('ZoneId')
        self.mutri_orsignle = map.get('MutriORsignle')
        self.create_time = map.get('CreateTime')
        self.engine_version = map.get('EngineVersion')
        self.guard_dbinstance_id = map.get('GuardDBInstanceId')
        self.temp_dbinstance_id = map.get('TempDBInstanceId')
        self.master_instance_id = map.get('MasterInstanceId')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.replicate_id = map.get('ReplicateId')
        self.resource_group_id = map.get('ResourceGroupId')
        if map.get('ReadOnlyDBInstanceIds') is not None:
            temp_model = DescribeDBInstancesForCloneResponseItemsDBInstanceReadOnlyDBInstanceIds()
            self.read_only_dbinstance_ids = temp_model.from_map(map['ReadOnlyDBInstanceIds'])
        else:
            self.read_only_dbinstance_ids = None
        return self


class DescribeDBInstancesForCloneResponseItems(TeaModel):
    def __init__(self, dbinstance=None):
        self.dbinstance = []

    def validate(self):
        self.validate_required(self.dbinstance, 'dbinstance')
        if self.dbinstance:
            for k in self.dbinstance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstance'] = []
        if self.dbinstance is not None:
            for k in self.dbinstance:
                result['DBInstance'].append(k.to_map() if k else None)
        else:
            result['DBInstance'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance = []
        if map.get('DBInstance') is not None:
            for k in map.get('DBInstance'):
                temp_model = DescribeDBInstancesForCloneResponseItemsDBInstance()
                temp_model = temp_model.from_map(k)
                self.dbinstance.append(temp_model)
        else:
            self.dbinstance = None
        return self


class DescribeDTCSecurityIpHostsForSQLServerRequest(TeaModel):
    def __init__(self, access_key_id=None, security_token=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.security_token = security_token
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['SecurityToken'] = self.security_token
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.security_token = map.get('SecurityToken')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeDTCSecurityIpHostsForSQLServerResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, ip_host_pair_num=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.ip_host_pair_num = ip_host_pair_num
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.ip_host_pair_num, 'ip_host_pair_num')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['IpHostPairNum'] = self.ip_host_pair_num
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.ip_host_pair_num = map.get('IpHostPairNum')
        if map.get('Items') is not None:
            temp_model = DescribeDTCSecurityIpHostsForSQLServerResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups(TeaModel):
    def __init__(self, security_ip_hosts=None, whitelist_group_name=None):
        self.security_ip_hosts = security_ip_hosts
        self.whitelist_group_name = whitelist_group_name

    def validate(self):
        self.validate_required(self.security_ip_hosts, 'security_ip_hosts')
        self.validate_required(self.whitelist_group_name, 'whitelist_group_name')

    def to_map(self):
        result = {}
        result['SecurityIpHosts'] = self.security_ip_hosts
        result['WhitelistGroupName'] = self.whitelist_group_name
        return result

    def from_map(self, map={}):
        self.security_ip_hosts = map.get('SecurityIpHosts')
        self.whitelist_group_name = map.get('WhitelistGroupName')
        return self


class DescribeDTCSecurityIpHostsForSQLServerResponseItems(TeaModel):
    def __init__(self, white_list_groups=None):
        self.white_list_groups = []

    def validate(self):
        self.validate_required(self.white_list_groups, 'white_list_groups')
        if self.white_list_groups:
            for k in self.white_list_groups:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['WhiteListGroups'] = []
        if self.white_list_groups is not None:
            for k in self.white_list_groups:
                result['WhiteListGroups'].append(k.to_map() if k else None)
        else:
            result['WhiteListGroups'] = None
        return result

    def from_map(self, map={}):
        self.white_list_groups = []
        if map.get('WhiteListGroups') is not None:
            for k in map.get('WhiteListGroups'):
                temp_model = DescribeDTCSecurityIpHostsForSQLServerResponseItemsWhiteListGroups()
                temp_model = temp_model.from_map(k)
                self.white_list_groups.append(temp_model)
        else:
            self.white_list_groups = None
        return self


class ModifyDTCSecurityIpHostsForSQLServerRequest(TeaModel):
    def __init__(self, access_key_id=None, security_token=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, security_ip_hosts=None, white_list_group_name=None, region_id=None):
        self.access_key_id = access_key_id
        self.security_token = security_token
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.security_ip_hosts = security_ip_hosts
        self.white_list_group_name = white_list_group_name
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.security_ip_hosts, 'security_ip_hosts')
        self.validate_required(self.white_list_group_name, 'white_list_group_name')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['SecurityToken'] = self.security_token
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['SecurityIpHosts'] = self.security_ip_hosts
        result['WhiteListGroupName'] = self.white_list_group_name
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.security_token = map.get('SecurityToken')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.security_ip_hosts = map.get('SecurityIpHosts')
        self.white_list_group_name = map.get('WhiteListGroupName')
        self.region_id = map.get('RegionId')
        return self


class ModifyDTCSecurityIpHostsForSQLServerResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, dtcset_result=None, task_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.dtcset_result = dtcset_result
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dtcset_result, 'dtcset_result')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DTCSetResult'] = self.dtcset_result
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dtcset_result = map.get('DTCSetResult')
        self.task_id = map.get('TaskId')
        return self


class DescribeDBInstanceIpHostnameRequest(TeaModel):
    def __init__(self, access_key_id=None, security_token=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.security_token = security_token
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['SecurityToken'] = self.security_token
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.security_token = map.get('SecurityToken')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeDBInstanceIpHostnameResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, ip_hostname_infos=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.ip_hostname_infos = ip_hostname_infos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.ip_hostname_infos, 'ip_hostname_infos')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['IpHostnameInfos'] = self.ip_hostname_infos
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.ip_hostname_infos = map.get('IpHostnameInfos')
        return self


class ModifyDBInstanceAutoUpgradeMinorVersionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, auto_upgrade_minor_version=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.auto_upgrade_minor_version = auto_upgrade_minor_version

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.auto_upgrade_minor_version, 'auto_upgrade_minor_version')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['AutoUpgradeMinorVersion'] = self.auto_upgrade_minor_version
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.auto_upgrade_minor_version = map.get('AutoUpgradeMinorVersion')
        return self


class ModifyDBInstanceAutoUpgradeMinorVersionResponse(TeaModel):
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


class DescribeAvailableCrossRegionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        return self


class DescribeAvailableCrossRegionResponse(TeaModel):
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
            temp_model = DescribeAvailableCrossRegionResponseRegions()
            self.regions = temp_model.from_map(map['Regions'])
        else:
            self.regions = None
        return self


class DescribeAvailableCrossRegionResponseRegions(TeaModel):
    def __init__(self, region=None):
        self.region = []

    def validate(self):
        self.validate_required(self.region, 'region')

    def to_map(self):
        result = {}
        result['Region'] = []
        if self.region is not None:
            for k in self.region:
                result['Region'].append(k)
        else:
            result['Region'] = None
        return result

    def from_map(self, map={}):
        self.region = []
        if map.get('Region') is not None:
            for k in map.get('Region'):
                self.region.append(k)
        else:
            self.region = None
        return self


class CheckCreateDdrDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_storage=None, restore_type=None, backup_set_id=None, restore_time=None, source_region=None, source_dbinstance_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.restore_type = restore_type
        self.backup_set_id = backup_set_id
        self.restore_time = restore_time
        self.source_region = source_region
        self.source_dbinstance_name = source_dbinstance_name

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.restore_type, 'restore_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['RestoreType'] = self.restore_type
        result['BackupSetId'] = self.backup_set_id
        result['RestoreTime'] = self.restore_time
        result['SourceRegion'] = self.source_region
        result['SourceDBInstanceName'] = self.source_dbinstance_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.restore_type = map.get('RestoreType')
        self.backup_set_id = map.get('BackupSetId')
        self.restore_time = map.get('RestoreTime')
        self.source_region = map.get('SourceRegion')
        self.source_dbinstance_name = map.get('SourceDBInstanceName')
        return self


class CheckCreateDdrDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, is_valid=None):
        self.request_id = request_id
        self.is_valid = is_valid

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_valid, 'is_valid')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsValid'] = self.is_valid
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_valid = map.get('IsValid')
        return self


class DescribeAvailableRecoveryTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, cross_backup_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.cross_backup_id = cross_backup_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.cross_backup_id, 'cross_backup_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['CrossBackupId'] = self.cross_backup_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.cross_backup_id = map.get('CrossBackupId')
        self.region_id = map.get('RegionId')
        return self


class DescribeAvailableRecoveryTimeResponse(TeaModel):
    def __init__(self, request_id=None, recovery_begin_time=None, recovery_end_time=None, dbinstance_id=None, region_id=None, cross_backup_id=None):
        self.request_id = request_id
        self.recovery_begin_time = recovery_begin_time
        self.recovery_end_time = recovery_end_time
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.cross_backup_id = cross_backup_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.recovery_begin_time, 'recovery_begin_time')
        self.validate_required(self.recovery_end_time, 'recovery_end_time')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cross_backup_id, 'cross_backup_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecoveryBeginTime'] = self.recovery_begin_time
        result['RecoveryEndTime'] = self.recovery_end_time
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['CrossBackupId'] = self.cross_backup_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.recovery_begin_time = map.get('RecoveryBeginTime')
        self.recovery_end_time = map.get('RecoveryEndTime')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.cross_backup_id = map.get('CrossBackupId')
        return self


class DescribeCrossRegionLogBackupFilesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None, cross_backup_region=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.cross_backup_region = cross_backup_region
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeCrossRegionLogBackupFilesResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, dbinstance_id=None, start_time=None, end_time=None, total_record_count=None, page_record_count=None, page_number=None, items=None):
        self.request_id = request_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.total_record_count = total_record_count
        self.page_record_count = page_record_count
        self.page_number = page_number
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['TotalRecordCount'] = self.total_record_count
        result['PageRecordCount'] = self.page_record_count
        result['PageNumber'] = self.page_number
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_record_count = map.get('PageRecordCount')
        self.page_number = map.get('PageNumber')
        if map.get('Items') is not None:
            temp_model = DescribeCrossRegionLogBackupFilesResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeCrossRegionLogBackupFilesResponseItemsItem(TeaModel):
    def __init__(self, cross_log_backup_id=None, cross_backup_region=None, cross_log_backup_size=None, log_begin_time=None, log_end_time=None, cross_download_link=None, cross_intranet_download_link=None, link_expired_time=None, log_file_name=None, instance_id=None):
        self.cross_log_backup_id = cross_log_backup_id
        self.cross_backup_region = cross_backup_region
        self.cross_log_backup_size = cross_log_backup_size
        self.log_begin_time = log_begin_time
        self.log_end_time = log_end_time
        self.cross_download_link = cross_download_link
        self.cross_intranet_download_link = cross_intranet_download_link
        self.link_expired_time = link_expired_time
        self.log_file_name = log_file_name
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.cross_log_backup_id, 'cross_log_backup_id')
        self.validate_required(self.cross_backup_region, 'cross_backup_region')
        self.validate_required(self.cross_log_backup_size, 'cross_log_backup_size')
        self.validate_required(self.log_begin_time, 'log_begin_time')
        self.validate_required(self.log_end_time, 'log_end_time')
        self.validate_required(self.cross_download_link, 'cross_download_link')
        self.validate_required(self.cross_intranet_download_link, 'cross_intranet_download_link')
        self.validate_required(self.link_expired_time, 'link_expired_time')
        self.validate_required(self.log_file_name, 'log_file_name')
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['CrossLogBackupId'] = self.cross_log_backup_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['CrossLogBackupSize'] = self.cross_log_backup_size
        result['LogBeginTime'] = self.log_begin_time
        result['LogEndTime'] = self.log_end_time
        result['CrossDownloadLink'] = self.cross_download_link
        result['CrossIntranetDownloadLink'] = self.cross_intranet_download_link
        result['LinkExpiredTime'] = self.link_expired_time
        result['LogFileName'] = self.log_file_name
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.cross_log_backup_id = map.get('CrossLogBackupId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.cross_log_backup_size = map.get('CrossLogBackupSize')
        self.log_begin_time = map.get('LogBeginTime')
        self.log_end_time = map.get('LogEndTime')
        self.cross_download_link = map.get('CrossDownloadLink')
        self.cross_intranet_download_link = map.get('CrossIntranetDownloadLink')
        self.link_expired_time = map.get('LinkExpiredTime')
        self.log_file_name = map.get('LogFileName')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeCrossRegionLogBackupFilesResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeCrossRegionLogBackupFilesResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class ModifyInstanceCrossBackupPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None, cross_backup_type=None, log_backup_enabled=None, backup_enabled=None, cross_backup_region=None, retent_type=None, retention=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.cross_backup_type = cross_backup_type
        self.log_backup_enabled = log_backup_enabled
        self.backup_enabled = backup_enabled
        self.cross_backup_region = cross_backup_region
        self.retent_type = retent_type
        self.retention = retention

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['CrossBackupType'] = self.cross_backup_type
        result['LogBackupEnabled'] = self.log_backup_enabled
        result['BackupEnabled'] = self.backup_enabled
        result['CrossBackupRegion'] = self.cross_backup_region
        result['RetentType'] = self.retent_type
        result['Retention'] = self.retention
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.cross_backup_type = map.get('CrossBackupType')
        self.log_backup_enabled = map.get('LogBackupEnabled')
        self.backup_enabled = map.get('BackupEnabled')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.retent_type = map.get('RetentType')
        self.retention = map.get('Retention')
        return self


class ModifyInstanceCrossBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, region_id=None, cross_backup_region=None, cross_backup_type=None, backup_enabled=None, log_backup_enabled=None, storage_owner=None, storage_type=None, endpoint=None, retent_type=None, retention=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.cross_backup_region = cross_backup_region
        self.cross_backup_type = cross_backup_type
        self.backup_enabled = backup_enabled
        self.log_backup_enabled = log_backup_enabled
        self.storage_owner = storage_owner
        self.storage_type = storage_type
        self.endpoint = endpoint
        self.retent_type = retent_type
        self.retention = retention

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cross_backup_region, 'cross_backup_region')
        self.validate_required(self.cross_backup_type, 'cross_backup_type')
        self.validate_required(self.backup_enabled, 'backup_enabled')
        self.validate_required(self.log_backup_enabled, 'log_backup_enabled')
        self.validate_required(self.storage_owner, 'storage_owner')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.endpoint, 'endpoint')
        self.validate_required(self.retent_type, 'retent_type')
        self.validate_required(self.retention, 'retention')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['CrossBackupType'] = self.cross_backup_type
        result['BackupEnabled'] = self.backup_enabled
        result['LogBackupEnabled'] = self.log_backup_enabled
        result['StorageOwner'] = self.storage_owner
        result['StorageType'] = self.storage_type
        result['Endpoint'] = self.endpoint
        result['RetentType'] = self.retent_type
        result['Retention'] = self.retention
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.cross_backup_type = map.get('CrossBackupType')
        self.backup_enabled = map.get('BackupEnabled')
        self.log_backup_enabled = map.get('LogBackupEnabled')
        self.storage_owner = map.get('StorageOwner')
        self.storage_type = map.get('StorageType')
        self.endpoint = map.get('Endpoint')
        self.retent_type = map.get('RetentType')
        self.retention = map.get('Retention')
        return self


class CreateDdrInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_storage=None, system_dbcharset=None, dbinstance_net_type=None, dbinstance_description=None, security_iplist=None, client_token=None, pay_type=None, zone_id=None, instance_network_type=None, connection_mode=None, vpcid=None, vswitch_id=None, private_ip_address=None, owner_account=None, used_time=None, period=None, resource_group_id=None, restore_type=None, backup_set_id=None, restore_time=None, source_region=None, source_dbinstance_name=None, dbinstance_storage_type=None, binlog_name=None, binlog_position=None, binlog_role=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.system_dbcharset = system_dbcharset
        self.dbinstance_net_type = dbinstance_net_type
        self.dbinstance_description = dbinstance_description
        self.security_iplist = security_iplist
        self.client_token = client_token
        self.pay_type = pay_type
        self.zone_id = zone_id
        self.instance_network_type = instance_network_type
        self.connection_mode = connection_mode
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.owner_account = owner_account
        self.used_time = used_time
        self.period = period
        self.resource_group_id = resource_group_id
        self.restore_type = restore_type
        self.backup_set_id = backup_set_id
        self.restore_time = restore_time
        self.source_region = source_region
        self.source_dbinstance_name = source_dbinstance_name
        self.dbinstance_storage_type = dbinstance_storage_type
        self.binlog_name = binlog_name
        self.binlog_position = binlog_position
        self.binlog_role = binlog_role

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.security_iplist, 'security_iplist')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.restore_type, 'restore_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['SystemDBCharset'] = self.system_dbcharset
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['DBInstanceDescription'] = self.dbinstance_description
        result['SecurityIPList'] = self.security_iplist
        result['ClientToken'] = self.client_token
        result['PayType'] = self.pay_type
        result['ZoneId'] = self.zone_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['ConnectionMode'] = self.connection_mode
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['OwnerAccount'] = self.owner_account
        result['UsedTime'] = self.used_time
        result['Period'] = self.period
        result['ResourceGroupId'] = self.resource_group_id
        result['RestoreType'] = self.restore_type
        result['BackupSetId'] = self.backup_set_id
        result['RestoreTime'] = self.restore_time
        result['SourceRegion'] = self.source_region
        result['SourceDBInstanceName'] = self.source_dbinstance_name
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['BinlogName'] = self.binlog_name
        result['BinlogPosition'] = self.binlog_position
        result['BinlogRole'] = self.binlog_role
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.system_dbcharset = map.get('SystemDBCharset')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.security_iplist = map.get('SecurityIPList')
        self.client_token = map.get('ClientToken')
        self.pay_type = map.get('PayType')
        self.zone_id = map.get('ZoneId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.connection_mode = map.get('ConnectionMode')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.owner_account = map.get('OwnerAccount')
        self.used_time = map.get('UsedTime')
        self.period = map.get('Period')
        self.resource_group_id = map.get('ResourceGroupId')
        self.restore_type = map.get('RestoreType')
        self.backup_set_id = map.get('BackupSetId')
        self.restore_time = map.get('RestoreTime')
        self.source_region = map.get('SourceRegion')
        self.source_dbinstance_name = map.get('SourceDBInstanceName')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.binlog_name = map.get('BinlogName')
        self.binlog_position = map.get('BinlogPosition')
        self.binlog_role = map.get('BinlogRole')
        return self


class CreateDdrInstanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None, connection_string=None, port=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id
        self.connection_string = connection_string
        self.port = port

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        return self


class DescribeCrossRegionBackupDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dbinstance_id=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeCrossRegionBackupDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, total_records=None, page_size=None, page_number=None, items_numbers=None, items=None):
        self.request_id = request_id
        self.region_id = region_id
        self.total_records = total_records
        self.page_size = page_size
        self.page_number = page_number
        self.items_numbers = items_numbers
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.total_records, 'total_records')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.items_numbers, 'items_numbers')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['TotalRecords'] = self.total_records
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['ItemsNumbers'] = self.items_numbers
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.total_records = map.get('TotalRecords')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.items_numbers = map.get('ItemsNumbers')
        if map.get('Items') is not None:
            temp_model = DescribeCrossRegionBackupDBInstanceResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeCrossRegionBackupDBInstanceResponseItemsItem(TeaModel):
    def __init__(self, dbinstance_id=None, dbinstance_description=None, dbinstance_status=None, dbinstance_status_desc=None, engine=None, engine_version=None, cross_backup_region=None, cross_backup_type=None, backup_enabled=None, log_backup_enabled=None, log_backup_enabled_time=None, backup_enabled_time=None, retent_type=None, retention=None, lock_mode=None, rel_service=None, rel_service_id=None):
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.dbinstance_status = dbinstance_status
        self.dbinstance_status_desc = dbinstance_status_desc
        self.engine = engine
        self.engine_version = engine_version
        self.cross_backup_region = cross_backup_region
        self.cross_backup_type = cross_backup_type
        self.backup_enabled = backup_enabled
        self.log_backup_enabled = log_backup_enabled
        self.log_backup_enabled_time = log_backup_enabled_time
        self.backup_enabled_time = backup_enabled_time
        self.retent_type = retent_type
        self.retention = retention
        self.lock_mode = lock_mode
        self.rel_service = rel_service
        self.rel_service_id = rel_service_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.dbinstance_status_desc, 'dbinstance_status_desc')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.cross_backup_region, 'cross_backup_region')
        self.validate_required(self.cross_backup_type, 'cross_backup_type')
        self.validate_required(self.backup_enabled, 'backup_enabled')
        self.validate_required(self.log_backup_enabled, 'log_backup_enabled')
        self.validate_required(self.log_backup_enabled_time, 'log_backup_enabled_time')
        self.validate_required(self.backup_enabled_time, 'backup_enabled_time')
        self.validate_required(self.retent_type, 'retent_type')
        self.validate_required(self.retention, 'retention')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.rel_service, 'rel_service')
        self.validate_required(self.rel_service_id, 'rel_service_id')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['DBInstanceStatus'] = self.dbinstance_status
        result['DBInstanceStatusDesc'] = self.dbinstance_status_desc
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['CrossBackupRegion'] = self.cross_backup_region
        result['CrossBackupType'] = self.cross_backup_type
        result['BackupEnabled'] = self.backup_enabled
        result['LogBackupEnabled'] = self.log_backup_enabled
        result['LogBackupEnabledTime'] = self.log_backup_enabled_time
        result['BackupEnabledTime'] = self.backup_enabled_time
        result['RetentType'] = self.retent_type
        result['Retention'] = self.retention
        result['LockMode'] = self.lock_mode
        result['RelService'] = self.rel_service
        result['RelServiceId'] = self.rel_service_id
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.dbinstance_status_desc = map.get('DBInstanceStatusDesc')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.cross_backup_type = map.get('CrossBackupType')
        self.backup_enabled = map.get('BackupEnabled')
        self.log_backup_enabled = map.get('LogBackupEnabled')
        self.log_backup_enabled_time = map.get('LogBackupEnabledTime')
        self.backup_enabled_time = map.get('BackupEnabledTime')
        self.retent_type = map.get('RetentType')
        self.retention = map.get('Retention')
        self.lock_mode = map.get('LockMode')
        self.rel_service = map.get('RelService')
        self.rel_service_id = map.get('RelServiceId')
        return self


class DescribeCrossRegionBackupDBInstanceResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeCrossRegionBackupDBInstanceResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class DescribeInstanceCrossBackupPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        return self


class DescribeInstanceCrossBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, dbinstance_description=None, dbinstance_status=None, dbinstance_status_desc=None, engine=None, engine_version=None, region_id=None, cross_backup_region=None, cross_backup_type=None, backup_enabled_time=None, backup_enabled=None, log_backup_enabled=None, log_backup_enabled_time=None, storage_owner=None, storage_type=None, endpoint=None, retent_type=None, retention=None, lock_mode=None, rel_service=None, rel_service_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.dbinstance_status = dbinstance_status
        self.dbinstance_status_desc = dbinstance_status_desc
        self.engine = engine
        self.engine_version = engine_version
        self.region_id = region_id
        self.cross_backup_region = cross_backup_region
        self.cross_backup_type = cross_backup_type
        self.backup_enabled_time = backup_enabled_time
        self.backup_enabled = backup_enabled
        self.log_backup_enabled = log_backup_enabled
        self.log_backup_enabled_time = log_backup_enabled_time
        self.storage_owner = storage_owner
        self.storage_type = storage_type
        self.endpoint = endpoint
        self.retent_type = retent_type
        self.retention = retention
        self.lock_mode = lock_mode
        self.rel_service = rel_service
        self.rel_service_id = rel_service_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.dbinstance_status_desc, 'dbinstance_status_desc')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cross_backup_region, 'cross_backup_region')
        self.validate_required(self.cross_backup_type, 'cross_backup_type')
        self.validate_required(self.backup_enabled_time, 'backup_enabled_time')
        self.validate_required(self.backup_enabled, 'backup_enabled')
        self.validate_required(self.log_backup_enabled, 'log_backup_enabled')
        self.validate_required(self.log_backup_enabled_time, 'log_backup_enabled_time')
        self.validate_required(self.storage_owner, 'storage_owner')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.endpoint, 'endpoint')
        self.validate_required(self.retent_type, 'retent_type')
        self.validate_required(self.retention, 'retention')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.rel_service, 'rel_service')
        self.validate_required(self.rel_service_id, 'rel_service_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['DBInstanceStatus'] = self.dbinstance_status
        result['DBInstanceStatusDesc'] = self.dbinstance_status_desc
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['RegionId'] = self.region_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['CrossBackupType'] = self.cross_backup_type
        result['BackupEnabledTime'] = self.backup_enabled_time
        result['BackupEnabled'] = self.backup_enabled
        result['LogBackupEnabled'] = self.log_backup_enabled
        result['LogBackupEnabledTime'] = self.log_backup_enabled_time
        result['StorageOwner'] = self.storage_owner
        result['StorageType'] = self.storage_type
        result['Endpoint'] = self.endpoint
        result['RetentType'] = self.retent_type
        result['Retention'] = self.retention
        result['LockMode'] = self.lock_mode
        result['RelService'] = self.rel_service
        result['RelServiceId'] = self.rel_service_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.dbinstance_status_desc = map.get('DBInstanceStatusDesc')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.region_id = map.get('RegionId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.cross_backup_type = map.get('CrossBackupType')
        self.backup_enabled_time = map.get('BackupEnabledTime')
        self.backup_enabled = map.get('BackupEnabled')
        self.log_backup_enabled = map.get('LogBackupEnabled')
        self.log_backup_enabled_time = map.get('LogBackupEnabledTime')
        self.storage_owner = map.get('StorageOwner')
        self.storage_type = map.get('StorageType')
        self.endpoint = map.get('Endpoint')
        self.retent_type = map.get('RetentType')
        self.retention = map.get('Retention')
        self.lock_mode = map.get('LockMode')
        self.rel_service = map.get('RelService')
        self.rel_service_id = map.get('RelServiceId')
        return self


class DescribeCrossRegionBackupsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, region_id=None, cross_backup_region=None, cross_backup_id=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.cross_backup_region = cross_backup_region
        self.cross_backup_id = cross_backup_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['CrossBackupId'] = self.cross_backup_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.cross_backup_id = map.get('CrossBackupId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeCrossRegionBackupsResponse(TeaModel):
    def __init__(self, request_id=None, region_id=None, start_time=None, end_time=None, total_record_count=None, page_record_count=None, page_number=None, items=None):
        self.request_id = request_id
        self.region_id = region_id
        self.start_time = start_time
        self.end_time = end_time
        self.total_record_count = total_record_count
        self.page_record_count = page_record_count
        self.page_number = page_number
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionId'] = self.region_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['TotalRecordCount'] = self.total_record_count
        result['PageRecordCount'] = self.page_record_count
        result['PageNumber'] = self.page_number
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_id = map.get('RegionId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_record_count = map.get('PageRecordCount')
        self.page_number = map.get('PageNumber')
        if map.get('Items') is not None:
            temp_model = DescribeCrossRegionBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeCrossRegionBackupsResponseItemsItemRestoreRegions(TeaModel):
    def __init__(self, restore_region=None):
        self.restore_region = []

    def validate(self):
        self.validate_required(self.restore_region, 'restore_region')

    def to_map(self):
        result = {}
        result['RestoreRegion'] = []
        if self.restore_region is not None:
            for k in self.restore_region:
                result['RestoreRegion'].append(k)
        else:
            result['RestoreRegion'] = None
        return result

    def from_map(self, map={}):
        self.restore_region = []
        if map.get('RestoreRegion') is not None:
            for k in map.get('RestoreRegion'):
                self.restore_region.append(k)
        else:
            self.restore_region = None
        return self


class DescribeCrossRegionBackupsResponseItemsItem(TeaModel):
    def __init__(self, cross_backup_id=None, cross_backup_region=None, backup_set_status=None, backup_start_time=None, backup_end_time=None, backup_type=None, backup_method=None, cross_backup_set_size=None, cross_backup_set_file=None, cross_backup_download_link=None, engine=None, engine_version=None, cross_backup_set_location=None, backup_set_scale=None, instance_id=None, dbinstance_storage_type=None, category=None, consistent_time=None, has_backup_table_meta=None, restore_regions=None):
        self.cross_backup_id = cross_backup_id
        self.cross_backup_region = cross_backup_region
        self.backup_set_status = backup_set_status
        self.backup_start_time = backup_start_time
        self.backup_end_time = backup_end_time
        self.backup_type = backup_type
        self.backup_method = backup_method
        self.cross_backup_set_size = cross_backup_set_size
        self.cross_backup_set_file = cross_backup_set_file
        self.cross_backup_download_link = cross_backup_download_link
        self.engine = engine
        self.engine_version = engine_version
        self.cross_backup_set_location = cross_backup_set_location
        self.backup_set_scale = backup_set_scale
        self.instance_id = instance_id
        self.dbinstance_storage_type = dbinstance_storage_type
        self.category = category
        self.consistent_time = consistent_time
        self.has_backup_table_meta = has_backup_table_meta
        self.restore_regions = restore_regions

    def validate(self):
        self.validate_required(self.cross_backup_id, 'cross_backup_id')
        self.validate_required(self.cross_backup_region, 'cross_backup_region')
        self.validate_required(self.backup_set_status, 'backup_set_status')
        self.validate_required(self.backup_start_time, 'backup_start_time')
        self.validate_required(self.backup_end_time, 'backup_end_time')
        self.validate_required(self.backup_type, 'backup_type')
        self.validate_required(self.backup_method, 'backup_method')
        self.validate_required(self.cross_backup_set_size, 'cross_backup_set_size')
        self.validate_required(self.cross_backup_set_file, 'cross_backup_set_file')
        self.validate_required(self.cross_backup_download_link, 'cross_backup_download_link')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.cross_backup_set_location, 'cross_backup_set_location')
        self.validate_required(self.backup_set_scale, 'backup_set_scale')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.dbinstance_storage_type, 'dbinstance_storage_type')
        self.validate_required(self.category, 'category')
        self.validate_required(self.consistent_time, 'consistent_time')
        self.validate_required(self.has_backup_table_meta, 'has_backup_table_meta')
        self.validate_required(self.restore_regions, 'restore_regions')
        if self.restore_regions:
            self.restore_regions.validate()

    def to_map(self):
        result = {}
        result['CrossBackupId'] = self.cross_backup_id
        result['CrossBackupRegion'] = self.cross_backup_region
        result['BackupSetStatus'] = self.backup_set_status
        result['BackupStartTime'] = self.backup_start_time
        result['BackupEndTime'] = self.backup_end_time
        result['BackupType'] = self.backup_type
        result['BackupMethod'] = self.backup_method
        result['CrossBackupSetSize'] = self.cross_backup_set_size
        result['CrossBackupSetFile'] = self.cross_backup_set_file
        result['CrossBackupDownloadLink'] = self.cross_backup_download_link
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['CrossBackupSetLocation'] = self.cross_backup_set_location
        result['BackupSetScale'] = self.backup_set_scale
        result['InstanceId'] = self.instance_id
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['Category'] = self.category
        result['ConsistentTime'] = self.consistent_time
        result['HasBackupTableMeta'] = self.has_backup_table_meta
        if self.restore_regions is not None:
            result['RestoreRegions'] = self.restore_regions.to_map()
        else:
            result['RestoreRegions'] = None
        return result

    def from_map(self, map={}):
        self.cross_backup_id = map.get('CrossBackupId')
        self.cross_backup_region = map.get('CrossBackupRegion')
        self.backup_set_status = map.get('BackupSetStatus')
        self.backup_start_time = map.get('BackupStartTime')
        self.backup_end_time = map.get('BackupEndTime')
        self.backup_type = map.get('BackupType')
        self.backup_method = map.get('BackupMethod')
        self.cross_backup_set_size = map.get('CrossBackupSetSize')
        self.cross_backup_set_file = map.get('CrossBackupSetFile')
        self.cross_backup_download_link = map.get('CrossBackupDownloadLink')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.cross_backup_set_location = map.get('CrossBackupSetLocation')
        self.backup_set_scale = map.get('BackupSetScale')
        self.instance_id = map.get('InstanceId')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.category = map.get('Category')
        self.consistent_time = map.get('ConsistentTime')
        self.has_backup_table_meta = map.get('HasBackupTableMeta')
        if map.get('RestoreRegions') is not None:
            temp_model = DescribeCrossRegionBackupsResponseItemsItemRestoreRegions()
            self.restore_regions = temp_model.from_map(map['RestoreRegions'])
        else:
            self.restore_regions = None
        return self


class DescribeCrossRegionBackupsResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeCrossRegionBackupsResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class DescribeReadDBInstanceDelayRequest(TeaModel):
    def __init__(self, security_token=None, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, read_instance_id=None):
        self.security_token = security_token
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.read_instance_id = read_instance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.read_instance_id, 'read_instance_id')

    def to_map(self):
        result = {}
        result['SecurityToken'] = self.security_token
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ReadInstanceId'] = self.read_instance_id
        return result

    def from_map(self, map={}):
        self.security_token = map.get('SecurityToken')
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.read_instance_id = map.get('ReadInstanceId')
        return self


class DescribeReadDBInstanceDelayResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, read_dbinstance_id=None, delay_time=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.read_dbinstance_id = read_dbinstance_id
        self.delay_time = delay_time
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.read_dbinstance_id, 'read_dbinstance_id')
        self.validate_required(self.delay_time, 'delay_time')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ReadDBInstanceId'] = self.read_dbinstance_id
        result['DelayTime'] = self.delay_time
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.read_dbinstance_id = map.get('ReadDBInstanceId')
        self.delay_time = map.get('DelayTime')
        if map.get('Items') is not None:
            temp_model = DescribeReadDBInstanceDelayResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay(TeaModel):
    def __init__(self, replay_latency=None, flush_lag=None, flush_latency=None, send_latency=None, write_lag=None, replay_lag=None, write_latency=None, read_dbinstance_name=None):
        self.replay_latency = replay_latency
        self.flush_lag = flush_lag
        self.flush_latency = flush_latency
        self.send_latency = send_latency
        self.write_lag = write_lag
        self.replay_lag = replay_lag
        self.write_latency = write_latency
        self.read_dbinstance_name = read_dbinstance_name

    def validate(self):
        self.validate_required(self.replay_latency, 'replay_latency')
        self.validate_required(self.flush_lag, 'flush_lag')
        self.validate_required(self.flush_latency, 'flush_latency')
        self.validate_required(self.send_latency, 'send_latency')
        self.validate_required(self.write_lag, 'write_lag')
        self.validate_required(self.replay_lag, 'replay_lag')
        self.validate_required(self.write_latency, 'write_latency')
        self.validate_required(self.read_dbinstance_name, 'read_dbinstance_name')

    def to_map(self):
        result = {}
        result['ReplayLatency'] = self.replay_latency
        result['FlushLag'] = self.flush_lag
        result['FlushLatency'] = self.flush_latency
        result['SendLatency'] = self.send_latency
        result['WriteLag'] = self.write_lag
        result['ReplayLag'] = self.replay_lag
        result['WriteLatency'] = self.write_latency
        result['ReadDBInstanceName'] = self.read_dbinstance_name
        return result

    def from_map(self, map={}):
        self.replay_latency = map.get('ReplayLatency')
        self.flush_lag = map.get('FlushLag')
        self.flush_latency = map.get('FlushLatency')
        self.send_latency = map.get('SendLatency')
        self.write_lag = map.get('WriteLag')
        self.replay_lag = map.get('ReplayLag')
        self.write_latency = map.get('WriteLatency')
        self.read_dbinstance_name = map.get('ReadDBInstanceName')
        return self


class DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay(TeaModel):
    def __init__(self, readonly_instance_delay=None):
        self.readonly_instance_delay = []

    def validate(self):
        self.validate_required(self.readonly_instance_delay, 'readonly_instance_delay')
        if self.readonly_instance_delay:
            for k in self.readonly_instance_delay:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ReadonlyInstanceDelay'] = []
        if self.readonly_instance_delay is not None:
            for k in self.readonly_instance_delay:
                result['ReadonlyInstanceDelay'].append(k.to_map() if k else None)
        else:
            result['ReadonlyInstanceDelay'] = None
        return result

    def from_map(self, map={}):
        self.readonly_instance_delay = []
        if map.get('ReadonlyInstanceDelay') is not None:
            for k in map.get('ReadonlyInstanceDelay'):
                temp_model = DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelayReadonlyInstanceDelay()
                temp_model = temp_model.from_map(k)
                self.readonly_instance_delay.append(temp_model)
        else:
            self.readonly_instance_delay = None
        return self


class DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames(TeaModel):
    def __init__(self, read_dbinstance_name=None):
        self.read_dbinstance_name = []

    def validate(self):
        self.validate_required(self.read_dbinstance_name, 'read_dbinstance_name')

    def to_map(self):
        result = {}
        result['ReadDBInstanceName'] = []
        if self.read_dbinstance_name is not None:
            for k in self.read_dbinstance_name:
                result['ReadDBInstanceName'].append(k)
        else:
            result['ReadDBInstanceName'] = None
        return result

    def from_map(self, map={}):
        self.read_dbinstance_name = []
        if map.get('ReadDBInstanceName') is not None:
            for k in map.get('ReadDBInstanceName'):
                self.read_dbinstance_name.append(k)
        else:
            self.read_dbinstance_name = None
        return self


class DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes(TeaModel):
    def __init__(self, read_delay_time=None):
        self.read_delay_time = []

    def validate(self):
        self.validate_required(self.read_delay_time, 'read_delay_time')

    def to_map(self):
        result = {}
        result['ReadDelayTime'] = []
        if self.read_delay_time is not None:
            for k in self.read_delay_time:
                result['ReadDelayTime'].append(k)
        else:
            result['ReadDelayTime'] = None
        return result

    def from_map(self, map={}):
        self.read_delay_time = []
        if map.get('ReadDelayTime') is not None:
            for k in map.get('ReadDelayTime'):
                self.read_delay_time.append(k)
        else:
            self.read_delay_time = None
        return self


class DescribeReadDBInstanceDelayResponseItemsItems(TeaModel):
    def __init__(self, dbinstance_id=None, readonly_instance_delay=None, read_dbinstance_names=None, read_delay_times=None):
        self.dbinstance_id = dbinstance_id
        self.readonly_instance_delay = readonly_instance_delay
        self.read_dbinstance_names = read_dbinstance_names
        self.read_delay_times = read_delay_times

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.readonly_instance_delay, 'readonly_instance_delay')
        if self.readonly_instance_delay:
            self.readonly_instance_delay.validate()
        self.validate_required(self.read_dbinstance_names, 'read_dbinstance_names')
        if self.read_dbinstance_names:
            self.read_dbinstance_names.validate()
        self.validate_required(self.read_delay_times, 'read_delay_times')
        if self.read_delay_times:
            self.read_delay_times.validate()

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        if self.readonly_instance_delay is not None:
            result['ReadonlyInstanceDelay'] = self.readonly_instance_delay.to_map()
        else:
            result['ReadonlyInstanceDelay'] = None
        if self.read_dbinstance_names is not None:
            result['ReadDBInstanceNames'] = self.read_dbinstance_names.to_map()
        else:
            result['ReadDBInstanceNames'] = None
        if self.read_delay_times is not None:
            result['ReadDelayTimes'] = self.read_delay_times.to_map()
        else:
            result['ReadDelayTimes'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        if map.get('ReadonlyInstanceDelay') is not None:
            temp_model = DescribeReadDBInstanceDelayResponseItemsItemsReadonlyInstanceDelay()
            self.readonly_instance_delay = temp_model.from_map(map['ReadonlyInstanceDelay'])
        else:
            self.readonly_instance_delay = None
        if map.get('ReadDBInstanceNames') is not None:
            temp_model = DescribeReadDBInstanceDelayResponseItemsItemsReadDBInstanceNames()
            self.read_dbinstance_names = temp_model.from_map(map['ReadDBInstanceNames'])
        else:
            self.read_dbinstance_names = None
        if map.get('ReadDelayTimes') is not None:
            temp_model = DescribeReadDBInstanceDelayResponseItemsItemsReadDelayTimes()
            self.read_delay_times = temp_model.from_map(map['ReadDelayTimes'])
        else:
            self.read_delay_times = None
        return self


class DescribeReadDBInstanceDelayResponseItems(TeaModel):
    def __init__(self, items=None):
        self.items = []

    def validate(self):
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = DescribeReadDBInstanceDelayResponseItemsItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self


class RestoreTableRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, backup_id=None, restore_time=None, owner_account=None, table_meta=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.owner_account = owner_account
        self.table_meta = table_meta

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.table_meta, 'table_meta')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['OwnerAccount'] = self.owner_account
        result['TableMeta'] = self.table_meta
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.owner_account = map.get('OwnerAccount')
        self.table_meta = map.get('TableMeta')
        return self


class RestoreTableResponse(TeaModel):
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


class CreateParameterGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, parameter_group_name=None, engine=None, engine_version=None, parameters=None, parameter_group_desc=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.parameter_group_name = parameter_group_name
        self.engine = engine
        self.engine_version = engine_version
        self.parameters = parameters
        self.parameter_group_desc = parameter_group_desc

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.parameter_group_name, 'parameter_group_name')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.parameters, 'parameters')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ParameterGroupName'] = self.parameter_group_name
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['Parameters'] = self.parameters
        result['ParameterGroupDesc'] = self.parameter_group_desc
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.parameter_group_name = map.get('ParameterGroupName')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.parameters = map.get('Parameters')
        self.parameter_group_desc = map.get('ParameterGroupDesc')
        return self


class CreateParameterGroupResponse(TeaModel):
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


class DescribeParameterGroupsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        return self


class DescribeParameterGroupsResponse(TeaModel):
    def __init__(self, request_id=None, signal_for_optimize_params=None, parameter_groups=None):
        self.request_id = request_id
        self.signal_for_optimize_params = signal_for_optimize_params
        self.parameter_groups = parameter_groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.signal_for_optimize_params, 'signal_for_optimize_params')
        self.validate_required(self.parameter_groups, 'parameter_groups')
        if self.parameter_groups:
            self.parameter_groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SignalForOptimizeParams'] = self.signal_for_optimize_params
        if self.parameter_groups is not None:
            result['ParameterGroups'] = self.parameter_groups.to_map()
        else:
            result['ParameterGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.signal_for_optimize_params = map.get('SignalForOptimizeParams')
        if map.get('ParameterGroups') is not None:
            temp_model = DescribeParameterGroupsResponseParameterGroups()
            self.parameter_groups = temp_model.from_map(map['ParameterGroups'])
        else:
            self.parameter_groups = None
        return self


class DescribeParameterGroupsResponseParameterGroupsParameterGroup(TeaModel):
    def __init__(self, parameter_group_type=None, parameter_group_name=None, param_counts=None, parameter_group_desc=None, force_restart=None, engine=None, engine_version=None, create_time=None, update_time=None, parameter_group_id=None):
        self.parameter_group_type = parameter_group_type
        self.parameter_group_name = parameter_group_name
        self.param_counts = param_counts
        self.parameter_group_desc = parameter_group_desc
        self.force_restart = force_restart
        self.engine = engine
        self.engine_version = engine_version
        self.create_time = create_time
        self.update_time = update_time
        self.parameter_group_id = parameter_group_id

    def validate(self):
        self.validate_required(self.parameter_group_type, 'parameter_group_type')
        self.validate_required(self.parameter_group_name, 'parameter_group_name')
        self.validate_required(self.param_counts, 'param_counts')
        self.validate_required(self.parameter_group_desc, 'parameter_group_desc')
        self.validate_required(self.force_restart, 'force_restart')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.parameter_group_id, 'parameter_group_id')

    def to_map(self):
        result = {}
        result['ParameterGroupType'] = self.parameter_group_type
        result['ParameterGroupName'] = self.parameter_group_name
        result['ParamCounts'] = self.param_counts
        result['ParameterGroupDesc'] = self.parameter_group_desc
        result['ForceRestart'] = self.force_restart
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['ParameterGroupId'] = self.parameter_group_id
        return result

    def from_map(self, map={}):
        self.parameter_group_type = map.get('ParameterGroupType')
        self.parameter_group_name = map.get('ParameterGroupName')
        self.param_counts = map.get('ParamCounts')
        self.parameter_group_desc = map.get('ParameterGroupDesc')
        self.force_restart = map.get('ForceRestart')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.parameter_group_id = map.get('ParameterGroupId')
        return self


class DescribeParameterGroupsResponseParameterGroups(TeaModel):
    def __init__(self, parameter_group=None):
        self.parameter_group = []

    def validate(self):
        self.validate_required(self.parameter_group, 'parameter_group')
        if self.parameter_group:
            for k in self.parameter_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ParameterGroup'] = []
        if self.parameter_group is not None:
            for k in self.parameter_group:
                result['ParameterGroup'].append(k.to_map() if k else None)
        else:
            result['ParameterGroup'] = None
        return result

    def from_map(self, map={}):
        self.parameter_group = []
        if map.get('ParameterGroup') is not None:
            for k in map.get('ParameterGroup'):
                temp_model = DescribeParameterGroupsResponseParameterGroupsParameterGroup()
                temp_model = temp_model.from_map(k)
                self.parameter_group.append(temp_model)
        else:
            self.parameter_group = None
        return self


class CloneParameterGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, target_region_id=None, parameter_group_id=None, parameter_group_name=None, parameter_group_desc=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.target_region_id = target_region_id
        self.parameter_group_id = parameter_group_id
        self.parameter_group_name = parameter_group_name
        self.parameter_group_desc = parameter_group_desc

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.target_region_id, 'target_region_id')
        self.validate_required(self.parameter_group_id, 'parameter_group_id')
        self.validate_required(self.parameter_group_name, 'parameter_group_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['TargetRegionId'] = self.target_region_id
        result['ParameterGroupId'] = self.parameter_group_id
        result['ParameterGroupName'] = self.parameter_group_name
        result['ParameterGroupDesc'] = self.parameter_group_desc
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.target_region_id = map.get('TargetRegionId')
        self.parameter_group_id = map.get('ParameterGroupId')
        self.parameter_group_name = map.get('ParameterGroupName')
        self.parameter_group_desc = map.get('ParameterGroupDesc')
        return self


class CloneParameterGroupResponse(TeaModel):
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


class DescribeParameterGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, parameter_group_id=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.parameter_group_id = parameter_group_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.parameter_group_id, 'parameter_group_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ParameterGroupId'] = self.parameter_group_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.parameter_group_id = map.get('ParameterGroupId')
        self.region_id = map.get('RegionId')
        return self


class DescribeParameterGroupResponse(TeaModel):
    def __init__(self, request_id=None, param_group=None):
        self.request_id = request_id
        self.param_group = param_group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.param_group, 'param_group')
        if self.param_group:
            self.param_group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.param_group is not None:
            result['ParamGroup'] = self.param_group.to_map()
        else:
            result['ParamGroup'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('ParamGroup') is not None:
            temp_model = DescribeParameterGroupResponseParamGroup()
            self.param_group = temp_model.from_map(map['ParamGroup'])
        else:
            self.param_group = None
        return self


class DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail(TeaModel):
    def __init__(self, param_name=None, param_value=None):
        self.param_name = param_name
        self.param_value = param_value

    def validate(self):
        self.validate_required(self.param_name, 'param_name')
        self.validate_required(self.param_value, 'param_value')

    def to_map(self):
        result = {}
        result['ParamName'] = self.param_name
        result['ParamValue'] = self.param_value
        return result

    def from_map(self, map={}):
        self.param_name = map.get('ParamName')
        self.param_value = map.get('ParamValue')
        return self


class DescribeParameterGroupResponseParamGroupParameterGroupParamDetail(TeaModel):
    def __init__(self, parameter_detail=None):
        self.parameter_detail = []

    def validate(self):
        self.validate_required(self.parameter_detail, 'parameter_detail')
        if self.parameter_detail:
            for k in self.parameter_detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ParameterDetail'] = []
        if self.parameter_detail is not None:
            for k in self.parameter_detail:
                result['ParameterDetail'].append(k.to_map() if k else None)
        else:
            result['ParameterDetail'] = None
        return result

    def from_map(self, map={}):
        self.parameter_detail = []
        if map.get('ParameterDetail') is not None:
            for k in map.get('ParameterDetail'):
                temp_model = DescribeParameterGroupResponseParamGroupParameterGroupParamDetailParameterDetail()
                temp_model = temp_model.from_map(k)
                self.parameter_detail.append(temp_model)
        else:
            self.parameter_detail = None
        return self


class DescribeParameterGroupResponseParamGroupParameterGroup(TeaModel):
    def __init__(self, parameter_group_type=None, parameter_group_name=None, param_counts=None, parameter_group_desc=None, force_restart=None, engine=None, engine_version=None, parameter_group_id=None, create_time=None, update_time=None, param_detail=None):
        self.parameter_group_type = parameter_group_type
        self.parameter_group_name = parameter_group_name
        self.param_counts = param_counts
        self.parameter_group_desc = parameter_group_desc
        self.force_restart = force_restart
        self.engine = engine
        self.engine_version = engine_version
        self.parameter_group_id = parameter_group_id
        self.create_time = create_time
        self.update_time = update_time
        self.param_detail = param_detail

    def validate(self):
        self.validate_required(self.parameter_group_type, 'parameter_group_type')
        self.validate_required(self.parameter_group_name, 'parameter_group_name')
        self.validate_required(self.param_counts, 'param_counts')
        self.validate_required(self.parameter_group_desc, 'parameter_group_desc')
        self.validate_required(self.force_restart, 'force_restart')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.parameter_group_id, 'parameter_group_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.param_detail, 'param_detail')
        if self.param_detail:
            self.param_detail.validate()

    def to_map(self):
        result = {}
        result['ParameterGroupType'] = self.parameter_group_type
        result['ParameterGroupName'] = self.parameter_group_name
        result['ParamCounts'] = self.param_counts
        result['ParameterGroupDesc'] = self.parameter_group_desc
        result['ForceRestart'] = self.force_restart
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['ParameterGroupId'] = self.parameter_group_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        if self.param_detail is not None:
            result['ParamDetail'] = self.param_detail.to_map()
        else:
            result['ParamDetail'] = None
        return result

    def from_map(self, map={}):
        self.parameter_group_type = map.get('ParameterGroupType')
        self.parameter_group_name = map.get('ParameterGroupName')
        self.param_counts = map.get('ParamCounts')
        self.parameter_group_desc = map.get('ParameterGroupDesc')
        self.force_restart = map.get('ForceRestart')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.parameter_group_id = map.get('ParameterGroupId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        if map.get('ParamDetail') is not None:
            temp_model = DescribeParameterGroupResponseParamGroupParameterGroupParamDetail()
            self.param_detail = temp_model.from_map(map['ParamDetail'])
        else:
            self.param_detail = None
        return self


class DescribeParameterGroupResponseParamGroup(TeaModel):
    def __init__(self, parameter_group=None):
        self.parameter_group = []

    def validate(self):
        self.validate_required(self.parameter_group, 'parameter_group')
        if self.parameter_group:
            for k in self.parameter_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ParameterGroup'] = []
        if self.parameter_group is not None:
            for k in self.parameter_group:
                result['ParameterGroup'].append(k.to_map() if k else None)
        else:
            result['ParameterGroup'] = None
        return result

    def from_map(self, map={}):
        self.parameter_group = []
        if map.get('ParameterGroup') is not None:
            for k in map.get('ParameterGroup'):
                temp_model = DescribeParameterGroupResponseParamGroupParameterGroup()
                temp_model = temp_model.from_map(k)
                self.parameter_group.append(temp_model)
        else:
            self.parameter_group = None
        return self


class ModifyParameterGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, parameter_group_id=None, parameter_group_name=None, parameter_group_desc=None, parameters=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.parameter_group_id = parameter_group_id
        self.parameter_group_name = parameter_group_name
        self.parameter_group_desc = parameter_group_desc
        self.parameters = parameters
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.parameter_group_id, 'parameter_group_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ParameterGroupId'] = self.parameter_group_id
        result['ParameterGroupName'] = self.parameter_group_name
        result['ParameterGroupDesc'] = self.parameter_group_desc
        result['Parameters'] = self.parameters
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.parameter_group_id = map.get('ParameterGroupId')
        self.parameter_group_name = map.get('ParameterGroupName')
        self.parameter_group_desc = map.get('ParameterGroupDesc')
        self.parameters = map.get('Parameters')
        self.region_id = map.get('RegionId')
        return self


class ModifyParameterGroupResponse(TeaModel):
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


class DeleteParameterGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, parameter_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.parameter_group_id = parameter_group_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.parameter_group_id, 'parameter_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ParameterGroupId'] = self.parameter_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.parameter_group_id = map.get('ParameterGroupId')
        return self


class DeleteParameterGroupResponse(TeaModel):
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


class ModifySQLCollectorRetentionRequest(TeaModel):
    def __init__(self, security_token=None, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, config_value=None, resource_group_id=None):
        self.security_token = security_token
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.config_value = config_value
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.config_value, 'config_value')

    def to_map(self):
        result = {}
        result['SecurityToken'] = self.security_token
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ConfigValue'] = self.config_value
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.security_token = map.get('SecurityToken')
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.config_value = map.get('ConfigValue')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class ModifySQLCollectorRetentionResponse(TeaModel):
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


class DescribeSQLCollectorRetentionRequest(TeaModel):
    def __init__(self, owner_id=None, security_token=None, access_key_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, resource_group_id=None):
        self.owner_id = owner_id
        self.security_token = security_token
        self.access_key_id = access_key_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['SecurityToken'] = self.security_token
        result['AccessKeyId'] = self.access_key_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.security_token = map.get('SecurityToken')
        self.access_key_id = map.get('AccessKeyId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class DescribeSQLCollectorRetentionResponse(TeaModel):
    def __init__(self, request_id=None, config_value=None):
        self.request_id = request_id
        self.config_value = config_value

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.config_value, 'config_value')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ConfigValue'] = self.config_value
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.config_value = map.get('ConfigValue')
        return self


class CheckInstanceExistRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class CheckInstanceExistResponse(TeaModel):
    def __init__(self, request_id=None, is_exist_instance=None):
        self.request_id = request_id
        self.is_exist_instance = is_exist_instance

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_exist_instance, 'is_exist_instance')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsExistInstance'] = self.is_exist_instance
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_exist_instance = map.get('IsExistInstance')
        return self


class DescribeLogBackupFilesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeLogBackupFilesResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, total_file_size=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_file_size = total_file_size
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_file_size, 'total_file_size')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalFileSize'] = self.total_file_size
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
        self.total_file_size = map.get('TotalFileSize')
        if map.get('Items') is not None:
            temp_model = DescribeLogBackupFilesResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeLogBackupFilesResponseItemsBinLogFile(TeaModel):
    def __init__(self, file_size=None, log_begin_time=None, log_end_time=None, download_link=None, intranet_download_link=None, link_expired_time=None):
        self.file_size = file_size
        self.log_begin_time = log_begin_time
        self.log_end_time = log_end_time
        self.download_link = download_link
        self.intranet_download_link = intranet_download_link
        self.link_expired_time = link_expired_time

    def validate(self):
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.log_begin_time, 'log_begin_time')
        self.validate_required(self.log_end_time, 'log_end_time')
        self.validate_required(self.download_link, 'download_link')
        self.validate_required(self.intranet_download_link, 'intranet_download_link')
        self.validate_required(self.link_expired_time, 'link_expired_time')

    def to_map(self):
        result = {}
        result['FileSize'] = self.file_size
        result['LogBeginTime'] = self.log_begin_time
        result['LogEndTime'] = self.log_end_time
        result['DownloadLink'] = self.download_link
        result['IntranetDownloadLink'] = self.intranet_download_link
        result['LinkExpiredTime'] = self.link_expired_time
        return result

    def from_map(self, map={}):
        self.file_size = map.get('FileSize')
        self.log_begin_time = map.get('LogBeginTime')
        self.log_end_time = map.get('LogEndTime')
        self.download_link = map.get('DownloadLink')
        self.intranet_download_link = map.get('IntranetDownloadLink')
        self.link_expired_time = map.get('LinkExpiredTime')
        return self


class DescribeLogBackupFilesResponseItems(TeaModel):
    def __init__(self, bin_log_file=None):
        self.bin_log_file = []

    def validate(self):
        self.validate_required(self.bin_log_file, 'bin_log_file')
        if self.bin_log_file:
            for k in self.bin_log_file:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BinLogFile'] = []
        if self.bin_log_file is not None:
            for k in self.bin_log_file:
                result['BinLogFile'].append(k.to_map() if k else None)
        else:
            result['BinLogFile'] = None
        return result

    def from_map(self, map={}):
        self.bin_log_file = []
        if map.get('BinLogFile') is not None:
            for k in map.get('BinLogFile'):
                temp_model = DescribeLogBackupFilesResponseItemsBinLogFile()
                temp_model = temp_model.from_map(k)
                self.bin_log_file.append(temp_model)
        else:
            self.bin_log_file = None
        return self


class MigrateSecurityIPModeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class MigrateSecurityIPModeResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, security_ipmode=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.security_ipmode = security_ipmode

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.security_ipmode, 'security_ipmode')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SecurityIPMode'] = self.security_ipmode
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.security_ipmode = map.get('SecurityIPMode')
        return self


class SwitchDBInstanceVpcRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, vpcid=None, vswitch_id=None, private_ip_address=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        return self


class SwitchDBInstanceVpcResponse(TeaModel):
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


class DescribeCollationTimeZonesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        return self


class DescribeCollationTimeZonesResponse(TeaModel):
    def __init__(self, request_id=None, collation_time_zones=None):
        self.request_id = request_id
        self.collation_time_zones = collation_time_zones

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.collation_time_zones, 'collation_time_zones')
        if self.collation_time_zones:
            self.collation_time_zones.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.collation_time_zones is not None:
            result['CollationTimeZones'] = self.collation_time_zones.to_map()
        else:
            result['CollationTimeZones'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('CollationTimeZones') is not None:
            temp_model = DescribeCollationTimeZonesResponseCollationTimeZones()
            self.collation_time_zones = temp_model.from_map(map['CollationTimeZones'])
        else:
            self.collation_time_zones = None
        return self


class DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone(TeaModel):
    def __init__(self, time_zone=None, standard_time_offset=None, description=None):
        self.time_zone = time_zone
        self.standard_time_offset = standard_time_offset
        self.description = description

    def validate(self):
        self.validate_required(self.time_zone, 'time_zone')
        self.validate_required(self.standard_time_offset, 'standard_time_offset')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['TimeZone'] = self.time_zone
        result['StandardTimeOffset'] = self.standard_time_offset
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.time_zone = map.get('TimeZone')
        self.standard_time_offset = map.get('StandardTimeOffset')
        self.description = map.get('Description')
        return self


class DescribeCollationTimeZonesResponseCollationTimeZones(TeaModel):
    def __init__(self, collation_time_zone=None):
        self.collation_time_zone = []

    def validate(self):
        self.validate_required(self.collation_time_zone, 'collation_time_zone')
        if self.collation_time_zone:
            for k in self.collation_time_zone:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CollationTimeZone'] = []
        if self.collation_time_zone is not None:
            for k in self.collation_time_zone:
                result['CollationTimeZone'].append(k.to_map() if k else None)
        else:
            result['CollationTimeZone'] = None
        return result

    def from_map(self, map={}):
        self.collation_time_zone = []
        if map.get('CollationTimeZone') is not None:
            for k in map.get('CollationTimeZone'):
                temp_model = DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone()
                temp_model = temp_model.from_map(k)
                self.collation_time_zone.append(temp_model)
        else:
            self.collation_time_zone = None
        return self


class DescribeInstanceKeywordsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, key=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.key = key
        self.owner_account = owner_account

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Key'] = self.key
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.key = map.get('Key')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeInstanceKeywordsResponse(TeaModel):
    def __init__(self, request_id=None, key=None, words=None):
        self.request_id = request_id
        self.key = key
        self.words = words

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key, 'key')
        self.validate_required(self.words, 'words')
        if self.words:
            self.words.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Key'] = self.key
        if self.words is not None:
            result['Words'] = self.words.to_map()
        else:
            result['Words'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.key = map.get('Key')
        if map.get('Words') is not None:
            temp_model = DescribeInstanceKeywordsResponseWords()
            self.words = temp_model.from_map(map['Words'])
        else:
            self.words = None
        return self


class DescribeInstanceKeywordsResponseWords(TeaModel):
    def __init__(self, word=None):
        self.word = []

    def validate(self):
        self.validate_required(self.word, 'word')

    def to_map(self):
        result = {}
        result['word'] = []
        if self.word is not None:
            for k in self.word:
                result['word'].append(k)
        else:
            result['word'] = None
        return result

    def from_map(self, map={}):
        self.word = []
        if map.get('word') is not None:
            for k in map.get('word'):
                self.word.append(k)
        else:
            self.word = None
        return self


class ModifyCollationTimeZoneRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, collation=None, timezone=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.collation = collation
        self.timezone = timezone

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Collation'] = self.collation
        result['Timezone'] = self.timezone
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.collation = map.get('Collation')
        self.timezone = map.get('Timezone')
        return self


class ModifyCollationTimeZoneResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, task_id=None, timezone=None, collation=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.task_id = task_id
        self.timezone = timezone
        self.collation = collation

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.timezone, 'timezone')
        self.validate_required(self.collation, 'collation')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TaskId'] = self.task_id
        result['Timezone'] = self.timezone
        result['Collation'] = self.collation
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.task_id = map.get('TaskId')
        self.timezone = map.get('Timezone')
        self.collation = map.get('Collation')
        return self


class DescribeBackupDatabaseRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        return self


class DescribeBackupDatabaseResponse(TeaModel):
    def __init__(self, request_id=None, database_names=None):
        self.request_id = request_id
        self.database_names = database_names

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.database_names, 'database_names')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DatabaseNames'] = self.database_names
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.database_names = map.get('DatabaseNames')
        return self


class CopyDatabaseBetweenInstancesRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, target_dbinstance_id=None, db_names=None, backup_id=None, restore_time=None, sync_user_privilege=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.target_dbinstance_id = target_dbinstance_id
        self.db_names = db_names
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.sync_user_privilege = sync_user_privilege

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.target_dbinstance_id, 'target_dbinstance_id')
        self.validate_required(self.db_names, 'db_names')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TargetDBInstanceId'] = self.target_dbinstance_id
        result['DbNames'] = self.db_names
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['SyncUserPrivilege'] = self.sync_user_privilege
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.target_dbinstance_id = map.get('TargetDBInstanceId')
        self.db_names = map.get('DbNames')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.sync_user_privilege = map.get('SyncUserPrivilege')
        return self


class CopyDatabaseBetweenInstancesResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class RecoveryDBInstanceRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_class=None, dbinstance_storage=None, pay_type=None, instance_network_type=None, dbinstance_id=None, target_dbinstance_id=None, db_names=None, backup_id=None, restore_time=None, vpcid=None, vswitch_id=None, private_ip_address=None, used_time=None, period=None, dbinstance_storage_type=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.pay_type = pay_type
        self.instance_network_type = instance_network_type
        self.dbinstance_id = dbinstance_id
        self.target_dbinstance_id = target_dbinstance_id
        self.db_names = db_names
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.used_time = used_time
        self.period = period
        self.dbinstance_storage_type = dbinstance_storage_type

    def validate(self):
        self.validate_required(self.db_names, 'db_names')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['PayType'] = self.pay_type
        result['InstanceNetworkType'] = self.instance_network_type
        result['DBInstanceId'] = self.dbinstance_id
        result['TargetDBInstanceId'] = self.target_dbinstance_id
        result['DbNames'] = self.db_names
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['UsedTime'] = self.used_time
        result['Period'] = self.period
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.pay_type = map.get('PayType')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.dbinstance_id = map.get('DBInstanceId')
        self.target_dbinstance_id = map.get('TargetDBInstanceId')
        self.db_names = map.get('DbNames')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.used_time = map.get('UsedTime')
        self.period = map.get('Period')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        return self


class RecoveryDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        return self


class DescribeAvailableResourceRequest(TeaModel):
    def __init__(self, resource_owner_id=None, region_id=None, zone_id=None, instance_charge_type=None, engine=None, engine_version=None, dbinstance_class=None, order_type=None, dbinstance_storage_type=None, category=None, dispense_mode=None):
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.zone_id = zone_id
        self.instance_charge_type = instance_charge_type
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.order_type = order_type
        self.dbinstance_storage_type = dbinstance_storage_type
        self.category = category
        self.dispense_mode = dispense_mode

    def validate(self):
        self.validate_required(self.instance_charge_type, 'instance_charge_type')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['InstanceChargeType'] = self.instance_charge_type
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['OrderType'] = self.order_type
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['Category'] = self.category
        result['DispenseMode'] = self.dispense_mode
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.instance_charge_type = map.get('InstanceChargeType')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.order_type = map.get('OrderType')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.category = map.get('Category')
        self.dispense_mode = map.get('DispenseMode')
        return self


class DescribeAvailableResourceResponse(TeaModel):
    def __init__(self, request_id=None, available_zones=None):
        self.request_id = request_id
        self.available_zones = available_zones

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.available_zones, 'available_zones')
        if self.available_zones:
            self.available_zones.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.available_zones is not None:
            result['AvailableZones'] = self.available_zones.to_map()
        else:
            result['AvailableZones'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AvailableZones') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZones()
            self.available_zones = temp_model.from_map(map['AvailableZones'])
        else:
            self.available_zones = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange(TeaModel):
    def __init__(self, max=None, min=None, step=None):
        self.max = max
        self.min = min
        self.step = step

    def validate(self):
        self.validate_required(self.max, 'max')
        self.validate_required(self.min, 'min')
        self.validate_required(self.step, 'step')

    def to_map(self):
        result = {}
        result['Max'] = self.max
        result['Min'] = self.min
        result['Step'] = self.step
        return result

    def from_map(self, map={}):
        self.max = map.get('Max')
        self.min = map.get('Min')
        self.step = map.get('Step')
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource(TeaModel):
    def __init__(self, dbinstance_class=None, storage_range=None, dbinstance_storage_range=None):
        self.dbinstance_class = dbinstance_class
        self.storage_range = storage_range
        self.dbinstance_storage_range = dbinstance_storage_range

    def validate(self):
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.storage_range, 'storage_range')
        self.validate_required(self.dbinstance_storage_range, 'dbinstance_storage_range')
        if self.dbinstance_storage_range:
            self.dbinstance_storage_range.validate()

    def to_map(self):
        result = {}
        result['DBInstanceClass'] = self.dbinstance_class
        result['StorageRange'] = self.storage_range
        if self.dbinstance_storage_range is not None:
            result['DBInstanceStorageRange'] = self.dbinstance_storage_range.to_map()
        else:
            result['DBInstanceStorageRange'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_class = map.get('DBInstanceClass')
        self.storage_range = map.get('StorageRange')
        if map.get('DBInstanceStorageRange') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResourceDBInstanceStorageRange()
            self.dbinstance_storage_range = temp_model.from_map(map['DBInstanceStorageRange'])
        else:
            self.dbinstance_storage_range = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources(TeaModel):
    def __init__(self, available_resource=None):
        self.available_resource = []

    def validate(self):
        self.validate_required(self.available_resource, 'available_resource')
        if self.available_resource:
            for k in self.available_resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AvailableResource'] = []
        if self.available_resource is not None:
            for k in self.available_resource:
                result['AvailableResource'].append(k.to_map() if k else None)
        else:
            result['AvailableResource'] = None
        return result

    def from_map(self, map={}):
        self.available_resource = []
        if map.get('AvailableResource') is not None:
            for k in map.get('AvailableResource'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResourcesAvailableResource()
                temp_model = temp_model.from_map(k)
                self.available_resource.append(temp_model)
        else:
            self.available_resource = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType(TeaModel):
    def __init__(self, storage_type=None, available_resources=None):
        self.storage_type = storage_type
        self.available_resources = available_resources

    def validate(self):
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.available_resources, 'available_resources')
        if self.available_resources:
            self.available_resources.validate()

    def to_map(self):
        result = {}
        result['StorageType'] = self.storage_type
        if self.available_resources is not None:
            result['AvailableResources'] = self.available_resources.to_map()
        else:
            result['AvailableResources'] = None
        return result

    def from_map(self, map={}):
        self.storage_type = map.get('StorageType')
        if map.get('AvailableResources') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageTypeAvailableResources()
            self.available_resources = temp_model.from_map(map['AvailableResources'])
        else:
            self.available_resources = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes(TeaModel):
    def __init__(self, supported_storage_type=None):
        self.supported_storage_type = []

    def validate(self):
        self.validate_required(self.supported_storage_type, 'supported_storage_type')
        if self.supported_storage_type:
            for k in self.supported_storage_type:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SupportedStorageType'] = []
        if self.supported_storage_type is not None:
            for k in self.supported_storage_type:
                result['SupportedStorageType'].append(k.to_map() if k else None)
        else:
            result['SupportedStorageType'] = None
        return result

    def from_map(self, map={}):
        self.supported_storage_type = []
        if map.get('SupportedStorageType') is not None:
            for k in map.get('SupportedStorageType'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypesSupportedStorageType()
                temp_model = temp_model.from_map(k)
                self.supported_storage_type.append(temp_model)
        else:
            self.supported_storage_type = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory(TeaModel):
    def __init__(self, category=None, supported_storage_types=None):
        self.category = category
        self.supported_storage_types = supported_storage_types

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.supported_storage_types, 'supported_storage_types')
        if self.supported_storage_types:
            self.supported_storage_types.validate()

    def to_map(self):
        result = {}
        result['Category'] = self.category
        if self.supported_storage_types is not None:
            result['SupportedStorageTypes'] = self.supported_storage_types.to_map()
        else:
            result['SupportedStorageTypes'] = None
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        if map.get('SupportedStorageTypes') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategorySupportedStorageTypes()
            self.supported_storage_types = temp_model.from_map(map['SupportedStorageTypes'])
        else:
            self.supported_storage_types = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys(TeaModel):
    def __init__(self, supported_category=None):
        self.supported_category = []

    def validate(self):
        self.validate_required(self.supported_category, 'supported_category')
        if self.supported_category:
            for k in self.supported_category:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SupportedCategory'] = []
        if self.supported_category is not None:
            for k in self.supported_category:
                result['SupportedCategory'].append(k.to_map() if k else None)
        else:
            result['SupportedCategory'] = None
        return result

    def from_map(self, map={}):
        self.supported_category = []
        if map.get('SupportedCategory') is not None:
            for k in map.get('SupportedCategory'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorysSupportedCategory()
                temp_model = temp_model.from_map(k)
                self.supported_category.append(temp_model)
        else:
            self.supported_category = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion(TeaModel):
    def __init__(self, version=None, supported_categorys=None):
        self.version = version
        self.supported_categorys = supported_categorys

    def validate(self):
        self.validate_required(self.version, 'version')
        self.validate_required(self.supported_categorys, 'supported_categorys')
        if self.supported_categorys:
            self.supported_categorys.validate()

    def to_map(self):
        result = {}
        result['Version'] = self.version
        if self.supported_categorys is not None:
            result['SupportedCategorys'] = self.supported_categorys.to_map()
        else:
            result['SupportedCategorys'] = None
        return result

    def from_map(self, map={}):
        self.version = map.get('Version')
        if map.get('SupportedCategorys') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersionSupportedCategorys()
            self.supported_categorys = temp_model.from_map(map['SupportedCategorys'])
        else:
            self.supported_categorys = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions(TeaModel):
    def __init__(self, supported_engine_version=None):
        self.supported_engine_version = []

    def validate(self):
        self.validate_required(self.supported_engine_version, 'supported_engine_version')
        if self.supported_engine_version:
            for k in self.supported_engine_version:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SupportedEngineVersion'] = []
        if self.supported_engine_version is not None:
            for k in self.supported_engine_version:
                result['SupportedEngineVersion'].append(k.to_map() if k else None)
        else:
            result['SupportedEngineVersion'] = None
        return result

    def from_map(self, map={}):
        self.supported_engine_version = []
        if map.get('SupportedEngineVersion') is not None:
            for k in map.get('SupportedEngineVersion'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersionsSupportedEngineVersion()
                temp_model = temp_model.from_map(k)
                self.supported_engine_version.append(temp_model)
        else:
            self.supported_engine_version = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine(TeaModel):
    def __init__(self, engine=None, supported_engine_versions=None):
        self.engine = engine
        self.supported_engine_versions = supported_engine_versions

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.supported_engine_versions, 'supported_engine_versions')
        if self.supported_engine_versions:
            self.supported_engine_versions.validate()

    def to_map(self):
        result = {}
        result['Engine'] = self.engine
        if self.supported_engine_versions is not None:
            result['SupportedEngineVersions'] = self.supported_engine_versions.to_map()
        else:
            result['SupportedEngineVersions'] = None
        return result

    def from_map(self, map={}):
        self.engine = map.get('Engine')
        if map.get('SupportedEngineVersions') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngineSupportedEngineVersions()
            self.supported_engine_versions = temp_model.from_map(map['SupportedEngineVersions'])
        else:
            self.supported_engine_versions = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines(TeaModel):
    def __init__(self, supported_engine=None):
        self.supported_engine = []

    def validate(self):
        self.validate_required(self.supported_engine, 'supported_engine')
        if self.supported_engine:
            for k in self.supported_engine:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SupportedEngine'] = []
        if self.supported_engine is not None:
            for k in self.supported_engine:
                result['SupportedEngine'].append(k.to_map() if k else None)
        else:
            result['SupportedEngine'] = None
        return result

    def from_map(self, map={}):
        self.supported_engine = []
        if map.get('SupportedEngine') is not None:
            for k in map.get('SupportedEngine'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEnginesSupportedEngine()
                temp_model = temp_model.from_map(k)
                self.supported_engine.append(temp_model)
        else:
            self.supported_engine = None
        return self


class DescribeAvailableResourceResponseAvailableZonesAvailableZone(TeaModel):
    def __init__(self, region_id=None, zone_id=None, status=None, network_types=None, supported_engines=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.status = status
        self.network_types = network_types
        self.supported_engines = supported_engines

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.network_types, 'network_types')
        self.validate_required(self.supported_engines, 'supported_engines')
        if self.supported_engines:
            self.supported_engines.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['Status'] = self.status
        result['NetworkTypes'] = self.network_types
        if self.supported_engines is not None:
            result['SupportedEngines'] = self.supported_engines.to_map()
        else:
            result['SupportedEngines'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.status = map.get('Status')
        self.network_types = map.get('NetworkTypes')
        if map.get('SupportedEngines') is not None:
            temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZoneSupportedEngines()
            self.supported_engines = temp_model.from_map(map['SupportedEngines'])
        else:
            self.supported_engines = None
        return self


class DescribeAvailableResourceResponseAvailableZones(TeaModel):
    def __init__(self, available_zone=None):
        self.available_zone = []

    def validate(self):
        self.validate_required(self.available_zone, 'available_zone')
        if self.available_zone:
            for k in self.available_zone:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AvailableZone'] = []
        if self.available_zone is not None:
            for k in self.available_zone:
                result['AvailableZone'].append(k.to_map() if k else None)
        else:
            result['AvailableZone'] = None
        return result

    def from_map(self, map={}):
        self.available_zone = []
        if map.get('AvailableZone') is not None:
            for k in map.get('AvailableZone'):
                temp_model = DescribeAvailableResourceResponseAvailableZonesAvailableZone()
                temp_model = temp_model.from_map(k)
                self.available_zone.append(temp_model)
        else:
            self.available_zone = None
        return self


class DestroyDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DestroyDBInstanceResponse(TeaModel):
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


class ModifyReadonlyInstanceDelayReplicationTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, read_sqlreplication_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.read_sqlreplication_time = read_sqlreplication_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.read_sqlreplication_time, 'read_sqlreplication_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ReadSQLReplicationTime'] = self.read_sqlreplication_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.read_sqlreplication_time = map.get('ReadSQLReplicationTime')
        return self


class ModifyReadonlyInstanceDelayReplicationTimeResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, read_sqlreplication_time=None, task_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.read_sqlreplication_time = read_sqlreplication_time
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.read_sqlreplication_time, 'read_sqlreplication_time')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ReadSQLReplicationTime'] = self.read_sqlreplication_time
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.read_sqlreplication_time = map.get('ReadSQLReplicationTime')
        self.task_id = map.get('TaskId')
        return self


class DescribeDBInstanceProxyConfigurationRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDBInstanceProxyConfigurationResponse(TeaModel):
    def __init__(self, request_id=None, transparent_switch_configuration=None, persistent_connections_configuration=None, attacks_protection_configuration=None):
        self.request_id = request_id
        self.transparent_switch_configuration = transparent_switch_configuration
        self.persistent_connections_configuration = persistent_connections_configuration
        self.attacks_protection_configuration = attacks_protection_configuration

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.transparent_switch_configuration, 'transparent_switch_configuration')
        self.validate_required(self.persistent_connections_configuration, 'persistent_connections_configuration')
        self.validate_required(self.attacks_protection_configuration, 'attacks_protection_configuration')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TransparentSwitchConfiguration'] = self.transparent_switch_configuration
        result['PersistentConnectionsConfiguration'] = self.persistent_connections_configuration
        result['AttacksProtectionConfiguration'] = self.attacks_protection_configuration
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.transparent_switch_configuration = map.get('TransparentSwitchConfiguration')
        self.persistent_connections_configuration = map.get('PersistentConnectionsConfiguration')
        self.attacks_protection_configuration = map.get('AttacksProtectionConfiguration')
        return self


class CreateOnlineDatabaseTaskRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, dbname=None, migrate_task_id=None, check_dbmode=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.migrate_task_id = migrate_task_id
        self.check_dbmode = check_dbmode
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')
        self.validate_required(self.check_dbmode, 'check_dbmode')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['MigrateTaskId'] = self.migrate_task_id
        result['CheckDBMode'] = self.check_dbmode
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.migrate_task_id = map.get('MigrateTaskId')
        self.check_dbmode = map.get('CheckDBMode')
        self.owner_account = map.get('OwnerAccount')
        return self


class CreateOnlineDatabaseTaskResponse(TeaModel):
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


class UpgradeDBInstanceKernelVersionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, upgrade_time=None, switch_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.upgrade_time = upgrade_time
        self.switch_time = switch_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['UpgradeTime'] = self.upgrade_time
        result['SwitchTime'] = self.switch_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.upgrade_time = map.get('UpgradeTime')
        self.switch_time = map.get('SwitchTime')
        return self


class UpgradeDBInstanceKernelVersionResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, task_id=None, target_minor_version=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.task_id = task_id
        self.target_minor_version = target_minor_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.target_minor_version, 'target_minor_version')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        result['TaskId'] = self.task_id
        result['TargetMinorVersion'] = self.target_minor_version
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.task_id = map.get('TaskId')
        self.target_minor_version = map.get('TargetMinorVersion')
        return self


class ModifyDBInstanceProxyConfigurationRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, proxy_configuration_key=None, proxy_configuration_value=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.proxy_configuration_key = proxy_configuration_key
        self.proxy_configuration_value = proxy_configuration_value

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.proxy_configuration_key, 'proxy_configuration_key')
        self.validate_required(self.proxy_configuration_value, 'proxy_configuration_value')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ProxyConfigurationKey'] = self.proxy_configuration_key
        result['ProxyConfigurationValue'] = self.proxy_configuration_value
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.proxy_configuration_key = map.get('ProxyConfigurationKey')
        self.proxy_configuration_value = map.get('ProxyConfigurationValue')
        return self


class ModifyDBInstanceProxyConfigurationResponse(TeaModel):
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


class DescribeSecurityGroupConfigurationRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeSecurityGroupConfigurationResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, items=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        if map.get('Items') is not None:
            temp_model = DescribeSecurityGroupConfigurationResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation(TeaModel):
    def __init__(self, region_id=None, security_group_id=None, network_type=None):
        self.region_id = region_id
        self.security_group_id = security_group_id
        self.network_type = network_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.network_type, 'network_type')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['SecurityGroupId'] = self.security_group_id
        result['NetworkType'] = self.network_type
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.security_group_id = map.get('SecurityGroupId')
        self.network_type = map.get('NetworkType')
        return self


class DescribeSecurityGroupConfigurationResponseItems(TeaModel):
    def __init__(self, ecs_security_group_relation=None):
        self.ecs_security_group_relation = []

    def validate(self):
        self.validate_required(self.ecs_security_group_relation, 'ecs_security_group_relation')
        if self.ecs_security_group_relation:
            for k in self.ecs_security_group_relation:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EcsSecurityGroupRelation'] = []
        if self.ecs_security_group_relation is not None:
            for k in self.ecs_security_group_relation:
                result['EcsSecurityGroupRelation'].append(k.to_map() if k else None)
        else:
            result['EcsSecurityGroupRelation'] = None
        return result

    def from_map(self, map={}):
        self.ecs_security_group_relation = []
        if map.get('EcsSecurityGroupRelation') is not None:
            for k in map.get('EcsSecurityGroupRelation'):
                temp_model = DescribeSecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation()
                temp_model = temp_model.from_map(k)
                self.ecs_security_group_relation.append(temp_model)
        else:
            self.ecs_security_group_relation = None
        return self


class ModifySecurityGroupConfigurationRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, security_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.security_group_id = security_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.security_group_id, 'security_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SecurityGroupId'] = self.security_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.security_group_id = map.get('SecurityGroupId')
        return self


class ModifySecurityGroupConfigurationResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, items=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        if map.get('Items') is not None:
            temp_model = ModifySecurityGroupConfigurationResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation(TeaModel):
    def __init__(self, region_id=None, security_group_id=None, network_type=None):
        self.region_id = region_id
        self.security_group_id = security_group_id
        self.network_type = network_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.network_type, 'network_type')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['SecurityGroupId'] = self.security_group_id
        result['NetworkType'] = self.network_type
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.security_group_id = map.get('SecurityGroupId')
        self.network_type = map.get('NetworkType')
        return self


class ModifySecurityGroupConfigurationResponseItems(TeaModel):
    def __init__(self, ecs_security_group_relation=None):
        self.ecs_security_group_relation = []

    def validate(self):
        self.validate_required(self.ecs_security_group_relation, 'ecs_security_group_relation')
        if self.ecs_security_group_relation:
            for k in self.ecs_security_group_relation:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EcsSecurityGroupRelation'] = []
        if self.ecs_security_group_relation is not None:
            for k in self.ecs_security_group_relation:
                result['EcsSecurityGroupRelation'].append(k.to_map() if k else None)
        else:
            result['EcsSecurityGroupRelation'] = None
        return result

    def from_map(self, map={}):
        self.ecs_security_group_relation = []
        if map.get('EcsSecurityGroupRelation') is not None:
            for k in map.get('EcsSecurityGroupRelation'):
                temp_model = ModifySecurityGroupConfigurationResponseItemsEcsSecurityGroupRelation()
                temp_model = temp_model.from_map(k)
                self.ecs_security_group_relation.append(temp_model)
        else:
            self.ecs_security_group_relation = None
        return self


class DescribeOssDownloadsForSQLServerRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, migrate_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.migrate_task_id = migrate_task_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['MigrateTaskId'] = self.migrate_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.migrate_task_id = map.get('MigrateTaskId')
        return self


class DescribeOssDownloadsForSQLServerResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_name=None, migrate_iask_id=None, items=None):
        self.request_id = request_id
        self.dbinstance_name = dbinstance_name
        self.migrate_iask_id = migrate_iask_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.migrate_iask_id, 'migrate_iask_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceName'] = self.dbinstance_name
        result['MigrateIaskId'] = self.migrate_iask_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.migrate_iask_id = map.get('MigrateIaskId')
        if map.get('Items') is not None:
            temp_model = DescribeOssDownloadsForSQLServerResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeOssDownloadsForSQLServerResponseItemsOssDownload(TeaModel):
    def __init__(self, file_name=None, create_time=None, bak_type=None, file_size=None, status=None, is_avail=None, desc=None):
        self.file_name = file_name
        self.create_time = create_time
        self.bak_type = bak_type
        self.file_size = file_size
        self.status = status
        self.is_avail = is_avail
        self.desc = desc

    def validate(self):
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.bak_type, 'bak_type')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.is_avail, 'is_avail')
        self.validate_required(self.desc, 'desc')

    def to_map(self):
        result = {}
        result['FileName'] = self.file_name
        result['CreateTime'] = self.create_time
        result['BakType'] = self.bak_type
        result['FileSize'] = self.file_size
        result['Status'] = self.status
        result['IsAvail'] = self.is_avail
        result['Desc'] = self.desc
        return result

    def from_map(self, map={}):
        self.file_name = map.get('FileName')
        self.create_time = map.get('CreateTime')
        self.bak_type = map.get('BakType')
        self.file_size = map.get('FileSize')
        self.status = map.get('Status')
        self.is_avail = map.get('IsAvail')
        self.desc = map.get('Desc')
        return self


class DescribeOssDownloadsForSQLServerResponseItems(TeaModel):
    def __init__(self, oss_download=None):
        self.oss_download = []

    def validate(self):
        self.validate_required(self.oss_download, 'oss_download')
        if self.oss_download:
            for k in self.oss_download:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['OssDownload'] = []
        if self.oss_download is not None:
            for k in self.oss_download:
                result['OssDownload'].append(k.to_map() if k else None)
        else:
            result['OssDownload'] = None
        return result

    def from_map(self, map={}):
        self.oss_download = []
        if map.get('OssDownload') is not None:
            for k in map.get('OssDownload'):
                temp_model = DescribeOssDownloadsForSQLServerResponseItemsOssDownload()
                temp_model = temp_model.from_map(k)
                self.oss_download.append(temp_model)
        else:
            self.oss_download = None
        return self


class DescribeMigrateTasksForSQLServerRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeMigrateTasksForSQLServerResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, dbinstance_name=None, start_time=None, end_time=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_name = dbinstance_name
        self.start_time = start_time
        self.end_time = end_time
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceID'] = self.dbinstance_id
        result['DBInstanceName'] = self.dbinstance_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
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
        self.dbinstance_id = map.get('DBInstanceID')
        self.dbinstance_name = map.get('DBInstanceName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeMigrateTasksForSQLServerResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeMigrateTasksForSQLServerResponseItemsMigrateTask(TeaModel):
    def __init__(self, dbname=None, migrate_iask_id=None, create_time=None, end_time=None, task_type=None, status=None, is_dbreplaced=None, desc=None):
        self.dbname = dbname
        self.migrate_iask_id = migrate_iask_id
        self.create_time = create_time
        self.end_time = end_time
        self.task_type = task_type
        self.status = status
        self.is_dbreplaced = is_dbreplaced
        self.desc = desc

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_iask_id, 'migrate_iask_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.status, 'status')
        self.validate_required(self.is_dbreplaced, 'is_dbreplaced')
        self.validate_required(self.desc, 'desc')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['MigrateIaskId'] = self.migrate_iask_id
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['TaskType'] = self.task_type
        result['Status'] = self.status
        result['IsDBReplaced'] = self.is_dbreplaced
        result['Desc'] = self.desc
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.migrate_iask_id = map.get('MigrateIaskId')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.task_type = map.get('TaskType')
        self.status = map.get('Status')
        self.is_dbreplaced = map.get('IsDBReplaced')
        self.desc = map.get('Desc')
        return self


class DescribeMigrateTasksForSQLServerResponseItems(TeaModel):
    def __init__(self, migrate_task=None):
        self.migrate_task = []

    def validate(self):
        self.validate_required(self.migrate_task, 'migrate_task')
        if self.migrate_task:
            for k in self.migrate_task:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MigrateTask'] = []
        if self.migrate_task is not None:
            for k in self.migrate_task:
                result['MigrateTask'].append(k.to_map() if k else None)
        else:
            result['MigrateTask'] = None
        return result

    def from_map(self, map={}):
        self.migrate_task = []
        if map.get('MigrateTask') is not None:
            for k in map.get('MigrateTask'):
                temp_model = DescribeMigrateTasksForSQLServerResponseItemsMigrateTask()
                temp_model = temp_model.from_map(k)
                self.migrate_task.append(temp_model)
        else:
            self.migrate_task = None
        return self


class CreateMigrateTaskForSQLServerRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbname=None, task_type=None, is_online_db=None, ossurls=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.task_type = task_type
        self.is_online_db = is_online_db
        self.ossurls = ossurls

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.is_online_db, 'is_online_db')
        self.validate_required(self.ossurls, 'ossurls')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['TaskType'] = self.task_type
        result['IsOnlineDB'] = self.is_online_db
        result['OSSUrls'] = self.ossurls
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.task_type = map.get('TaskType')
        self.is_online_db = map.get('IsOnlineDB')
        self.ossurls = map.get('OSSUrls')
        return self


class CreateMigrateTaskForSQLServerResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, dbinstance_name=None, task_id=None, dbname=None, migrate_iask_id=None, task_type=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_name = dbinstance_name
        self.task_id = task_id
        self.dbname = dbname
        self.migrate_iask_id = migrate_iask_id
        self.task_type = task_type

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_name, 'dbinstance_name')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_iask_id, 'migrate_iask_id')
        self.validate_required(self.task_type, 'task_type')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceName'] = self.dbinstance_name
        result['TaskId'] = self.task_id
        result['DBName'] = self.dbname
        result['MigrateIaskId'] = self.migrate_iask_id
        result['TaskType'] = self.task_type
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_name = map.get('DBInstanceName')
        self.task_id = map.get('TaskId')
        self.dbname = map.get('DBName')
        self.migrate_iask_id = map.get('MigrateIaskId')
        self.task_type = map.get('TaskType')
        return self


class CreateMigrateTaskRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbname=None, backup_mode=None, is_online_db=None, check_dbmode=None, oss_object_positions=None, ossurls=None, migrate_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.backup_mode = backup_mode
        self.is_online_db = is_online_db
        self.check_dbmode = check_dbmode
        self.oss_object_positions = oss_object_positions
        self.ossurls = ossurls
        self.migrate_task_id = migrate_task_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.is_online_db, 'is_online_db')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['BackupMode'] = self.backup_mode
        result['IsOnlineDB'] = self.is_online_db
        result['CheckDBMode'] = self.check_dbmode
        result['OssObjectPositions'] = self.oss_object_positions
        result['OSSUrls'] = self.ossurls
        result['MigrateTaskId'] = self.migrate_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.backup_mode = map.get('BackupMode')
        self.is_online_db = map.get('IsOnlineDB')
        self.check_dbmode = map.get('CheckDBMode')
        self.oss_object_positions = map.get('OssObjectPositions')
        self.ossurls = map.get('OSSUrls')
        self.migrate_task_id = map.get('MigrateTaskId')
        return self


class CreateMigrateTaskResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, task_id=None, dbname=None, migrate_task_id=None, backup_mode=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.task_id = task_id
        self.dbname = dbname
        self.migrate_task_id = migrate_task_id
        self.backup_mode = backup_mode

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')
        self.validate_required(self.backup_mode, 'backup_mode')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TaskId'] = self.task_id
        result['DBName'] = self.dbname
        result['MigrateTaskId'] = self.migrate_task_id
        result['BackupMode'] = self.backup_mode
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.task_id = map.get('TaskId')
        self.dbname = map.get('DBName')
        self.migrate_task_id = map.get('MigrateTaskId')
        self.backup_mode = map.get('BackupMode')
        return self


class DescribeOssDownloadsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, migrate_task_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.migrate_task_id = migrate_task_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['MigrateTaskId'] = self.migrate_task_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.migrate_task_id = map.get('MigrateTaskId')
        return self


class DescribeOssDownloadsResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, migrate_task_id=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.migrate_task_id = migrate_task_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['MigrateTaskId'] = self.migrate_task_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.migrate_task_id = map.get('MigrateTaskId')
        if map.get('Items') is not None:
            temp_model = DescribeOssDownloadsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeOssDownloadsResponseItemsOssDownload(TeaModel):
    def __init__(self, file_name=None, create_time=None, end_time=None, backup_mode=None, file_size=None, status=None, is_available=None, description=None):
        self.file_name = file_name
        self.create_time = create_time
        self.end_time = end_time
        self.backup_mode = backup_mode
        self.file_size = file_size
        self.status = status
        self.is_available = is_available
        self.description = description

    def validate(self):
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.is_available, 'is_available')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['FileName'] = self.file_name
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['BackupMode'] = self.backup_mode
        result['FileSize'] = self.file_size
        result['Status'] = self.status
        result['IsAvailable'] = self.is_available
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.file_name = map.get('FileName')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.backup_mode = map.get('BackupMode')
        self.file_size = map.get('FileSize')
        self.status = map.get('Status')
        self.is_available = map.get('IsAvailable')
        self.description = map.get('Description')
        return self


class DescribeOssDownloadsResponseItems(TeaModel):
    def __init__(self, oss_download=None):
        self.oss_download = []

    def validate(self):
        self.validate_required(self.oss_download, 'oss_download')
        if self.oss_download:
            for k in self.oss_download:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['OssDownload'] = []
        if self.oss_download is not None:
            for k in self.oss_download:
                result['OssDownload'].append(k.to_map() if k else None)
        else:
            result['OssDownload'] = None
        return result

    def from_map(self, map={}):
        self.oss_download = []
        if map.get('OssDownload') is not None:
            for k in map.get('OssDownload'):
                temp_model = DescribeOssDownloadsResponseItemsOssDownload()
                temp_model = temp_model.from_map(k)
                self.oss_download.append(temp_model)
        else:
            self.oss_download = None
        return self


class DescribeMigrateTasksRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeMigrateTasksResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
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
        self.dbinstance_id = map.get('DBInstanceId')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeMigrateTasksResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeMigrateTasksResponseItemsMigrateTask(TeaModel):
    def __init__(self, dbname=None, migrate_task_id=None, create_time=None, end_time=None, backup_mode=None, status=None, is_dbreplaced=None, description=None):
        self.dbname = dbname
        self.migrate_task_id = migrate_task_id
        self.create_time = create_time
        self.end_time = end_time
        self.backup_mode = backup_mode
        self.status = status
        self.is_dbreplaced = is_dbreplaced
        self.description = description

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.migrate_task_id, 'migrate_task_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.status, 'status')
        self.validate_required(self.is_dbreplaced, 'is_dbreplaced')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['MigrateTaskId'] = self.migrate_task_id
        result['CreateTime'] = self.create_time
        result['EndTime'] = self.end_time
        result['BackupMode'] = self.backup_mode
        result['Status'] = self.status
        result['IsDBReplaced'] = self.is_dbreplaced
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.migrate_task_id = map.get('MigrateTaskId')
        self.create_time = map.get('CreateTime')
        self.end_time = map.get('EndTime')
        self.backup_mode = map.get('BackupMode')
        self.status = map.get('Status')
        self.is_dbreplaced = map.get('IsDBReplaced')
        self.description = map.get('Description')
        return self


class DescribeMigrateTasksResponseItems(TeaModel):
    def __init__(self, migrate_task=None):
        self.migrate_task = []

    def validate(self):
        self.validate_required(self.migrate_task, 'migrate_task')
        if self.migrate_task:
            for k in self.migrate_task:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MigrateTask'] = []
        if self.migrate_task is not None:
            for k in self.migrate_task:
                result['MigrateTask'].append(k.to_map() if k else None)
        else:
            result['MigrateTask'] = None
        return result

    def from_map(self, map={}):
        self.migrate_task = []
        if map.get('MigrateTask') is not None:
            for k in map.get('MigrateTask'):
                temp_model = DescribeMigrateTasksResponseItemsMigrateTask()
                temp_model = temp_model.from_map(k)
                self.migrate_task.append(temp_model)
        else:
            self.migrate_task = None
        return self


class CopyDatabaseRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        return self


class CopyDatabaseResponse(TeaModel):
    def __init__(self, dbname=None, dbstatus=None, task_id=None):
        self.dbname = dbname
        self.dbstatus = dbstatus
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.dbstatus, 'dbstatus')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['DBStatus'] = self.dbstatus
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.dbstatus = map.get('DBStatus')
        self.task_id = map.get('TaskId')
        return self


class ResetAccountRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, account_password=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_password = account_password
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.owner_account = map.get('OwnerAccount')
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


class DescribeDBInstancesAsCsvRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDBInstancesAsCsvResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeDBInstancesAsCsvResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstancesAsCsvResponseItemsDBInstanceAttribute(TeaModel):
    def __init__(self, dbinstance_id=None, pay_type=None, dbinstance_class_type=None, dbinstance_type=None, region_id=None, connection_string=None, port=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_memory=None, dbinstance_storage=None, dbinstance_net_type=None, dbinstance_status=None, dbinstance_description=None, lock_mode=None, lock_reason=None, read_delay_time=None, dbmax_quantity=None, account_max_quantity=None, creation_time=None, expire_time=None, maintain_time=None, availability_value=None, max_iops=None, max_connections=None, master_instance_id=None, dbinstance_cpu=None, increment_source_dbinstance_id=None, guard_dbinstance_id=None, temp_dbinstance_id=None, security_iplist=None, zone_id=None, instance_network_type=None, category=None, account_type=None, support_upgrade_account_type=None, vpc_id=None, vswitch_id=None, connection_mode=None, tags=None):
        self.dbinstance_id = dbinstance_id
        self.pay_type = pay_type
        self.dbinstance_class_type = dbinstance_class_type
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.connection_string = connection_string
        self.port = port
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_memory = dbinstance_memory
        self.dbinstance_storage = dbinstance_storage
        self.dbinstance_net_type = dbinstance_net_type
        self.dbinstance_status = dbinstance_status
        self.dbinstance_description = dbinstance_description
        self.lock_mode = lock_mode
        self.lock_reason = lock_reason
        self.read_delay_time = read_delay_time
        self.dbmax_quantity = dbmax_quantity
        self.account_max_quantity = account_max_quantity
        self.creation_time = creation_time
        self.expire_time = expire_time
        self.maintain_time = maintain_time
        self.availability_value = availability_value
        self.max_iops = max_iops
        self.max_connections = max_connections
        self.master_instance_id = master_instance_id
        self.dbinstance_cpu = dbinstance_cpu
        self.increment_source_dbinstance_id = increment_source_dbinstance_id
        self.guard_dbinstance_id = guard_dbinstance_id
        self.temp_dbinstance_id = temp_dbinstance_id
        self.security_iplist = security_iplist
        self.zone_id = zone_id
        self.instance_network_type = instance_network_type
        self.category = category
        self.account_type = account_type
        self.support_upgrade_account_type = support_upgrade_account_type
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.connection_mode = connection_mode
        self.tags = tags

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbinstance_class_type, 'dbinstance_class_type')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_memory, 'dbinstance_memory')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.lock_reason, 'lock_reason')
        self.validate_required(self.read_delay_time, 'read_delay_time')
        self.validate_required(self.dbmax_quantity, 'dbmax_quantity')
        self.validate_required(self.account_max_quantity, 'account_max_quantity')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.maintain_time, 'maintain_time')
        self.validate_required(self.availability_value, 'availability_value')
        self.validate_required(self.max_iops, 'max_iops')
        self.validate_required(self.max_connections, 'max_connections')
        self.validate_required(self.master_instance_id, 'master_instance_id')
        self.validate_required(self.dbinstance_cpu, 'dbinstance_cpu')
        self.validate_required(self.increment_source_dbinstance_id, 'increment_source_dbinstance_id')
        self.validate_required(self.guard_dbinstance_id, 'guard_dbinstance_id')
        self.validate_required(self.temp_dbinstance_id, 'temp_dbinstance_id')
        self.validate_required(self.security_iplist, 'security_iplist')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.instance_network_type, 'instance_network_type')
        self.validate_required(self.category, 'category')
        self.validate_required(self.account_type, 'account_type')
        self.validate_required(self.support_upgrade_account_type, 'support_upgrade_account_type')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.connection_mode, 'connection_mode')
        self.validate_required(self.tags, 'tags')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['PayType'] = self.pay_type
        result['DBInstanceClassType'] = self.dbinstance_class_type
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceMemory'] = self.dbinstance_memory
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['DBInstanceStatus'] = self.dbinstance_status
        result['DBInstanceDescription'] = self.dbinstance_description
        result['LockMode'] = self.lock_mode
        result['LockReason'] = self.lock_reason
        result['ReadDelayTime'] = self.read_delay_time
        result['DBMaxQuantity'] = self.dbmax_quantity
        result['AccountMaxQuantity'] = self.account_max_quantity
        result['CreationTime'] = self.creation_time
        result['ExpireTime'] = self.expire_time
        result['MaintainTime'] = self.maintain_time
        result['AvailabilityValue'] = self.availability_value
        result['MaxIOPS'] = self.max_iops
        result['MaxConnections'] = self.max_connections
        result['MasterInstanceId'] = self.master_instance_id
        result['DBInstanceCPU'] = self.dbinstance_cpu
        result['IncrementSourceDBInstanceId'] = self.increment_source_dbinstance_id
        result['GuardDBInstanceId'] = self.guard_dbinstance_id
        result['TempDBInstanceId'] = self.temp_dbinstance_id
        result['SecurityIPList'] = self.security_iplist
        result['ZoneId'] = self.zone_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['Category'] = self.category
        result['AccountType'] = self.account_type
        result['SupportUpgradeAccountType'] = self.support_upgrade_account_type
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['ConnectionMode'] = self.connection_mode
        result['Tags'] = self.tags
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.pay_type = map.get('PayType')
        self.dbinstance_class_type = map.get('DBInstanceClassType')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_memory = map.get('DBInstanceMemory')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.lock_mode = map.get('LockMode')
        self.lock_reason = map.get('LockReason')
        self.read_delay_time = map.get('ReadDelayTime')
        self.dbmax_quantity = map.get('DBMaxQuantity')
        self.account_max_quantity = map.get('AccountMaxQuantity')
        self.creation_time = map.get('CreationTime')
        self.expire_time = map.get('ExpireTime')
        self.maintain_time = map.get('MaintainTime')
        self.availability_value = map.get('AvailabilityValue')
        self.max_iops = map.get('MaxIOPS')
        self.max_connections = map.get('MaxConnections')
        self.master_instance_id = map.get('MasterInstanceId')
        self.dbinstance_cpu = map.get('DBInstanceCPU')
        self.increment_source_dbinstance_id = map.get('IncrementSourceDBInstanceId')
        self.guard_dbinstance_id = map.get('GuardDBInstanceId')
        self.temp_dbinstance_id = map.get('TempDBInstanceId')
        self.security_iplist = map.get('SecurityIPList')
        self.zone_id = map.get('ZoneId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.category = map.get('Category')
        self.account_type = map.get('AccountType')
        self.support_upgrade_account_type = map.get('SupportUpgradeAccountType')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.connection_mode = map.get('ConnectionMode')
        self.tags = map.get('Tags')
        return self


class DescribeDBInstancesAsCsvResponseItems(TeaModel):
    def __init__(self, dbinstance_attribute=None):
        self.dbinstance_attribute = []

    def validate(self):
        self.validate_required(self.dbinstance_attribute, 'dbinstance_attribute')
        if self.dbinstance_attribute:
            for k in self.dbinstance_attribute:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceAttribute'] = []
        if self.dbinstance_attribute is not None:
            for k in self.dbinstance_attribute:
                result['DBInstanceAttribute'].append(k.to_map() if k else None)
        else:
            result['DBInstanceAttribute'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_attribute = []
        if map.get('DBInstanceAttribute') is not None:
            for k in map.get('DBInstanceAttribute'):
                temp_model = DescribeDBInstancesAsCsvResponseItemsDBInstanceAttribute()
                temp_model = temp_model.from_map(k)
                self.dbinstance_attribute.append(temp_model)
        else:
            self.dbinstance_attribute = None
        return self


class ModifyDBInstanceNetworkExpireTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, connection_string=None, classic_expired_days=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.connection_string = connection_string
        self.classic_expired_days = classic_expired_days
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.classic_expired_days, 'classic_expired_days')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionString'] = self.connection_string
        result['ClassicExpiredDays'] = self.classic_expired_days
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string = map.get('ConnectionString')
        self.classic_expired_days = map.get('ClassicExpiredDays')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceNetworkExpireTimeResponse(TeaModel):
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


class ModifyResourceGroupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, owner_account=None, dbinstance_id=None, resource_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.resource_group_id, 'resource_group_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class ModifyResourceGroupResponse(TeaModel):
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


class DescribeRenewalPriceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, owner_account=None, dbinstance_id=None, region_id=None, pay_type=None, dbinstance_class=None, used_time=None, time_type=None, quantity=None, order_type=None, business_info=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.pay_type = pay_type
        self.dbinstance_class = dbinstance_class
        self.used_time = used_time
        self.time_type = time_type
        self.quantity = quantity
        self.order_type = order_type
        self.business_info = business_info

    def validate(self):
        self.validate_required(self.used_time, 'used_time')
        self.validate_required(self.time_type, 'time_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['PayType'] = self.pay_type
        result['DBInstanceClass'] = self.dbinstance_class
        result['UsedTime'] = self.used_time
        result['TimeType'] = self.time_type
        result['Quantity'] = self.quantity
        result['OrderType'] = self.order_type
        result['BusinessInfo'] = self.business_info
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.pay_type = map.get('PayType')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.used_time = map.get('UsedTime')
        self.time_type = map.get('TimeType')
        self.quantity = map.get('Quantity')
        self.order_type = map.get('OrderType')
        self.business_info = map.get('BusinessInfo')
        return self


class DescribeRenewalPriceResponse(TeaModel):
    def __init__(self, request_id=None, rules=None, price_info=None):
        self.request_id = request_id
        self.rules = rules
        self.price_info = price_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.rules, 'rules')
        if self.rules:
            self.rules.validate()
        self.validate_required(self.price_info, 'price_info')
        if self.price_info:
            self.price_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.rules is not None:
            result['Rules'] = self.rules.to_map()
        else:
            result['Rules'] = None
        if self.price_info is not None:
            result['PriceInfo'] = self.price_info.to_map()
        else:
            result['PriceInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Rules') is not None:
            temp_model = DescribeRenewalPriceResponseRules()
            self.rules = temp_model.from_map(map['Rules'])
        else:
            self.rules = None
        if map.get('PriceInfo') is not None:
            temp_model = DescribeRenewalPriceResponsePriceInfo()
            self.price_info = temp_model.from_map(map['PriceInfo'])
        else:
            self.price_info = None
        return self


class DescribeRenewalPriceResponseRulesRule(TeaModel):
    def __init__(self, rule_id=None, name=None, description=None):
        self.rule_id = rule_id
        self.name = name
        self.description = description

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Name'] = self.name
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.name = map.get('Name')
        self.description = map.get('Description')
        return self


class DescribeRenewalPriceResponseRules(TeaModel):
    def __init__(self, rule=None):
        self.rule = []

    def validate(self):
        self.validate_required(self.rule, 'rule')
        if self.rule:
            for k in self.rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Rule'] = []
        if self.rule is not None:
            for k in self.rule:
                result['Rule'].append(k.to_map() if k else None)
        else:
            result['Rule'] = None
        return result

    def from_map(self, map={}):
        self.rule = []
        if map.get('Rule') is not None:
            for k in map.get('Rule'):
                temp_model = DescribeRenewalPriceResponseRulesRule()
                temp_model = temp_model.from_map(k)
                self.rule.append(temp_model)
        else:
            self.rule = None
        return self


class DescribeRenewalPriceResponsePriceInfoCouponsCoupon(TeaModel):
    def __init__(self, coupon_no=None, name=None, description=None, is_selected=None):
        self.coupon_no = coupon_no
        self.name = name
        self.description = description
        self.is_selected = is_selected

    def validate(self):
        self.validate_required(self.coupon_no, 'coupon_no')
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.is_selected, 'is_selected')

    def to_map(self):
        result = {}
        result['CouponNo'] = self.coupon_no
        result['Name'] = self.name
        result['Description'] = self.description
        result['IsSelected'] = self.is_selected
        return result

    def from_map(self, map={}):
        self.coupon_no = map.get('CouponNo')
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.is_selected = map.get('IsSelected')
        return self


class DescribeRenewalPriceResponsePriceInfoCoupons(TeaModel):
    def __init__(self, coupon=None):
        self.coupon = []

    def validate(self):
        self.validate_required(self.coupon, 'coupon')
        if self.coupon:
            for k in self.coupon:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Coupon'] = []
        if self.coupon is not None:
            for k in self.coupon:
                result['Coupon'].append(k.to_map() if k else None)
        else:
            result['Coupon'] = None
        return result

    def from_map(self, map={}):
        self.coupon = []
        if map.get('Coupon') is not None:
            for k in map.get('Coupon'):
                temp_model = DescribeRenewalPriceResponsePriceInfoCouponsCoupon()
                temp_model = temp_model.from_map(k)
                self.coupon.append(temp_model)
        else:
            self.coupon = None
        return self


class DescribeRenewalPriceResponsePriceInfoActivityInfo(TeaModel):
    def __init__(self, check_err_msg=None, error_code=None, success=None):
        self.check_err_msg = check_err_msg
        self.error_code = error_code
        self.success = success

    def validate(self):
        self.validate_required(self.check_err_msg, 'check_err_msg')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['CheckErrMsg'] = self.check_err_msg
        result['ErrorCode'] = self.error_code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.check_err_msg = map.get('CheckErrMsg')
        self.error_code = map.get('ErrorCode')
        self.success = map.get('Success')
        return self


class DescribeRenewalPriceResponsePriceInfoRuleIds(TeaModel):
    def __init__(self, rule_id=None):
        self.rule_id = []

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')

    def to_map(self):
        result = {}
        result['RuleId'] = []
        if self.rule_id is not None:
            for k in self.rule_id:
                result['RuleId'].append(k)
        else:
            result['RuleId'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = []
        if map.get('RuleId') is not None:
            for k in map.get('RuleId'):
                self.rule_id.append(k)
        else:
            self.rule_id = None
        return self


class DescribeRenewalPriceResponsePriceInfo(TeaModel):
    def __init__(self, currency=None, original_price=None, trade_price=None, discount_price=None, coupons=None, activity_info=None, rule_ids=None):
        self.currency = currency
        self.original_price = original_price
        self.trade_price = trade_price
        self.discount_price = discount_price
        self.coupons = coupons
        self.activity_info = activity_info
        self.rule_ids = rule_ids

    def validate(self):
        self.validate_required(self.currency, 'currency')
        self.validate_required(self.original_price, 'original_price')
        self.validate_required(self.trade_price, 'trade_price')
        self.validate_required(self.discount_price, 'discount_price')
        self.validate_required(self.coupons, 'coupons')
        if self.coupons:
            self.coupons.validate()
        self.validate_required(self.activity_info, 'activity_info')
        if self.activity_info:
            self.activity_info.validate()
        self.validate_required(self.rule_ids, 'rule_ids')
        if self.rule_ids:
            self.rule_ids.validate()

    def to_map(self):
        result = {}
        result['Currency'] = self.currency
        result['OriginalPrice'] = self.original_price
        result['TradePrice'] = self.trade_price
        result['DiscountPrice'] = self.discount_price
        if self.coupons is not None:
            result['Coupons'] = self.coupons.to_map()
        else:
            result['Coupons'] = None
        if self.activity_info is not None:
            result['ActivityInfo'] = self.activity_info.to_map()
        else:
            result['ActivityInfo'] = None
        if self.rule_ids is not None:
            result['RuleIds'] = self.rule_ids.to_map()
        else:
            result['RuleIds'] = None
        return result

    def from_map(self, map={}):
        self.currency = map.get('Currency')
        self.original_price = map.get('OriginalPrice')
        self.trade_price = map.get('TradePrice')
        self.discount_price = map.get('DiscountPrice')
        if map.get('Coupons') is not None:
            temp_model = DescribeRenewalPriceResponsePriceInfoCoupons()
            self.coupons = temp_model.from_map(map['Coupons'])
        else:
            self.coupons = None
        if map.get('ActivityInfo') is not None:
            temp_model = DescribeRenewalPriceResponsePriceInfoActivityInfo()
            self.activity_info = temp_model.from_map(map['ActivityInfo'])
        else:
            self.activity_info = None
        if map.get('RuleIds') is not None:
            temp_model = DescribeRenewalPriceResponsePriceInfoRuleIds()
            self.rule_ids = temp_model.from_map(map['RuleIds'])
        else:
            self.rule_ids = None
        return self


class DescribePriceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, owner_account=None, commodity_code=None, region_id=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_storage=None, pay_type=None, zone_id=None, used_time=None, time_type=None, quantity=None, instance_used_type=None, order_type=None, dbinstance_storage_type=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.owner_account = owner_account
        self.commodity_code = commodity_code
        self.region_id = region_id
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.pay_type = pay_type
        self.zone_id = zone_id
        self.used_time = used_time
        self.time_type = time_type
        self.quantity = quantity
        self.instance_used_type = instance_used_type
        self.order_type = order_type
        self.dbinstance_storage_type = dbinstance_storage_type
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.quantity, 'quantity')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['OwnerAccount'] = self.owner_account
        result['CommodityCode'] = self.commodity_code
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['PayType'] = self.pay_type
        result['ZoneId'] = self.zone_id
        result['UsedTime'] = self.used_time
        result['TimeType'] = self.time_type
        result['Quantity'] = self.quantity
        result['InstanceUsedType'] = self.instance_used_type
        result['OrderType'] = self.order_type
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.owner_account = map.get('OwnerAccount')
        self.commodity_code = map.get('CommodityCode')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.pay_type = map.get('PayType')
        self.zone_id = map.get('ZoneId')
        self.used_time = map.get('UsedTime')
        self.time_type = map.get('TimeType')
        self.quantity = map.get('Quantity')
        self.instance_used_type = map.get('InstanceUsedType')
        self.order_type = map.get('OrderType')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribePriceResponse(TeaModel):
    def __init__(self, request_id=None, rules=None, price_info=None):
        self.request_id = request_id
        self.rules = rules
        self.price_info = price_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.rules, 'rules')
        if self.rules:
            self.rules.validate()
        self.validate_required(self.price_info, 'price_info')
        if self.price_info:
            self.price_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.rules is not None:
            result['Rules'] = self.rules.to_map()
        else:
            result['Rules'] = None
        if self.price_info is not None:
            result['PriceInfo'] = self.price_info.to_map()
        else:
            result['PriceInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Rules') is not None:
            temp_model = DescribePriceResponseRules()
            self.rules = temp_model.from_map(map['Rules'])
        else:
            self.rules = None
        if map.get('PriceInfo') is not None:
            temp_model = DescribePriceResponsePriceInfo()
            self.price_info = temp_model.from_map(map['PriceInfo'])
        else:
            self.price_info = None
        return self


class DescribePriceResponseRulesRule(TeaModel):
    def __init__(self, rule_id=None, name=None, description=None):
        self.rule_id = rule_id
        self.name = name
        self.description = description

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Name'] = self.name
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.name = map.get('Name')
        self.description = map.get('Description')
        return self


class DescribePriceResponseRules(TeaModel):
    def __init__(self, rule=None):
        self.rule = []

    def validate(self):
        self.validate_required(self.rule, 'rule')
        if self.rule:
            for k in self.rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Rule'] = []
        if self.rule is not None:
            for k in self.rule:
                result['Rule'].append(k.to_map() if k else None)
        else:
            result['Rule'] = None
        return result

    def from_map(self, map={}):
        self.rule = []
        if map.get('Rule') is not None:
            for k in map.get('Rule'):
                temp_model = DescribePriceResponseRulesRule()
                temp_model = temp_model.from_map(k)
                self.rule.append(temp_model)
        else:
            self.rule = None
        return self


class DescribePriceResponsePriceInfoCouponsCoupon(TeaModel):
    def __init__(self, coupon_no=None, name=None, description=None, is_selected=None):
        self.coupon_no = coupon_no
        self.name = name
        self.description = description
        self.is_selected = is_selected

    def validate(self):
        self.validate_required(self.coupon_no, 'coupon_no')
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.is_selected, 'is_selected')

    def to_map(self):
        result = {}
        result['CouponNo'] = self.coupon_no
        result['Name'] = self.name
        result['Description'] = self.description
        result['IsSelected'] = self.is_selected
        return result

    def from_map(self, map={}):
        self.coupon_no = map.get('CouponNo')
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.is_selected = map.get('IsSelected')
        return self


class DescribePriceResponsePriceInfoCoupons(TeaModel):
    def __init__(self, coupon=None):
        self.coupon = []

    def validate(self):
        self.validate_required(self.coupon, 'coupon')
        if self.coupon:
            for k in self.coupon:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Coupon'] = []
        if self.coupon is not None:
            for k in self.coupon:
                result['Coupon'].append(k.to_map() if k else None)
        else:
            result['Coupon'] = None
        return result

    def from_map(self, map={}):
        self.coupon = []
        if map.get('Coupon') is not None:
            for k in map.get('Coupon'):
                temp_model = DescribePriceResponsePriceInfoCouponsCoupon()
                temp_model = temp_model.from_map(k)
                self.coupon.append(temp_model)
        else:
            self.coupon = None
        return self


class DescribePriceResponsePriceInfoActivityInfo(TeaModel):
    def __init__(self, check_err_msg=None, error_code=None, success=None):
        self.check_err_msg = check_err_msg
        self.error_code = error_code
        self.success = success

    def validate(self):
        self.validate_required(self.check_err_msg, 'check_err_msg')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['CheckErrMsg'] = self.check_err_msg
        result['ErrorCode'] = self.error_code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.check_err_msg = map.get('CheckErrMsg')
        self.error_code = map.get('ErrorCode')
        self.success = map.get('Success')
        return self


class DescribePriceResponsePriceInfoRuleIds(TeaModel):
    def __init__(self, rule_id=None):
        self.rule_id = []

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')

    def to_map(self):
        result = {}
        result['RuleId'] = []
        if self.rule_id is not None:
            for k in self.rule_id:
                result['RuleId'].append(k)
        else:
            result['RuleId'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = []
        if map.get('RuleId') is not None:
            for k in map.get('RuleId'):
                self.rule_id.append(k)
        else:
            self.rule_id = None
        return self


class DescribePriceResponsePriceInfo(TeaModel):
    def __init__(self, currency=None, original_price=None, trade_price=None, discount_price=None, coupons=None, activity_info=None, rule_ids=None):
        self.currency = currency
        self.original_price = original_price
        self.trade_price = trade_price
        self.discount_price = discount_price
        self.coupons = coupons
        self.activity_info = activity_info
        self.rule_ids = rule_ids

    def validate(self):
        self.validate_required(self.currency, 'currency')
        self.validate_required(self.original_price, 'original_price')
        self.validate_required(self.trade_price, 'trade_price')
        self.validate_required(self.discount_price, 'discount_price')
        self.validate_required(self.coupons, 'coupons')
        if self.coupons:
            self.coupons.validate()
        self.validate_required(self.activity_info, 'activity_info')
        if self.activity_info:
            self.activity_info.validate()
        self.validate_required(self.rule_ids, 'rule_ids')
        if self.rule_ids:
            self.rule_ids.validate()

    def to_map(self):
        result = {}
        result['Currency'] = self.currency
        result['OriginalPrice'] = self.original_price
        result['TradePrice'] = self.trade_price
        result['DiscountPrice'] = self.discount_price
        if self.coupons is not None:
            result['Coupons'] = self.coupons.to_map()
        else:
            result['Coupons'] = None
        if self.activity_info is not None:
            result['ActivityInfo'] = self.activity_info.to_map()
        else:
            result['ActivityInfo'] = None
        if self.rule_ids is not None:
            result['RuleIds'] = self.rule_ids.to_map()
        else:
            result['RuleIds'] = None
        return result

    def from_map(self, map={}):
        self.currency = map.get('Currency')
        self.original_price = map.get('OriginalPrice')
        self.trade_price = map.get('TradePrice')
        self.discount_price = map.get('DiscountPrice')
        if map.get('Coupons') is not None:
            temp_model = DescribePriceResponsePriceInfoCoupons()
            self.coupons = temp_model.from_map(map['Coupons'])
        else:
            self.coupons = None
        if map.get('ActivityInfo') is not None:
            temp_model = DescribePriceResponsePriceInfoActivityInfo()
            self.activity_info = temp_model.from_map(map['ActivityInfo'])
        else:
            self.activity_info = None
        if map.get('RuleIds') is not None:
            temp_model = DescribePriceResponsePriceInfoRuleIds()
            self.rule_ids = temp_model.from_map(map['RuleIds'])
        else:
            self.rule_ids = None
        return self


class RenewInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, period=None, auto_pay=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.period = period
        self.auto_pay = auto_pay

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['Period'] = self.period
        result['AutoPay'] = self.auto_pay
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.period = map.get('Period')
        self.auto_pay = map.get('AutoPay')
        return self


class RenewInstanceResponse(TeaModel):
    def __init__(self, request_id=None, order_id=None):
        self.request_id = request_id
        self.order_id = order_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.order_id, 'order_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OrderId'] = self.order_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.order_id = map.get('OrderId')
        return self


class CheckRecoveryConditionsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_id=None, backup_file=None, restore_time=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.backup_file = backup_file
        self.restore_time = restore_time
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['BackupFile'] = self.backup_file
        result['RestoreTime'] = self.restore_time
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.backup_file = map.get('BackupFile')
        self.restore_time = map.get('RestoreTime')
        self.owner_account = map.get('OwnerAccount')
        return self


class CheckRecoveryConditionsResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, recovery_status=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.recovery_status = recovery_status

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.recovery_status, 'recovery_status')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RecoveryStatus'] = self.recovery_status
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.recovery_status = map.get('RecoveryStatus')
        return self


class ModifyInstanceAutoRenewalAttributeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, client_token=None, owner_account=None, dbinstance_id=None, duration=None, auto_renew=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.client_token = client_token
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.duration = duration
        self.auto_renew = auto_renew

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ClientToken'] = self.client_token
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['Duration'] = self.duration
        result['AutoRenew'] = self.auto_renew
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.client_token = map.get('ClientToken')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.duration = map.get('Duration')
        self.auto_renew = map.get('AutoRenew')
        return self


class ModifyInstanceAutoRenewalAttributeResponse(TeaModel):
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


class DescribeInstanceAutoRenewalAttributeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, region_id=None, dbinstance_id=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeInstanceAutoRenewalAttributeResponse(TeaModel):
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
            temp_model = DescribeInstanceAutoRenewalAttributeResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeInstanceAutoRenewalAttributeResponseItemsItem(TeaModel):
    def __init__(self, dbinstance_id=None, region_id=None, duration=None, status=None, auto_renew=None):
        self.dbinstance_id = dbinstance_id
        self.region_id = region_id
        self.duration = duration
        self.status = status
        self.auto_renew = auto_renew

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.status, 'status')
        self.validate_required(self.auto_renew, 'auto_renew')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['RegionId'] = self.region_id
        result['Duration'] = self.duration
        result['Status'] = self.status
        result['AutoRenew'] = self.auto_renew
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.region_id = map.get('RegionId')
        self.duration = map.get('Duration')
        self.status = map.get('Status')
        self.auto_renew = map.get('AutoRenew')
        return self


class DescribeInstanceAutoRenewalAttributeResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeInstanceAutoRenewalAttributeResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class ReleaseReadWriteSplittingConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class ReleaseReadWriteSplittingConnectionResponse(TeaModel):
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


class ModifyReadWriteSplittingConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, connection_string_prefix=None, port=None, max_delay_time=None, distribution_type=None, weight=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.connection_string_prefix = connection_string_prefix
        self.port = port
        self.max_delay_time = max_delay_time
        self.distribution_type = distribution_type
        self.weight = weight

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['Port'] = self.port
        result['MaxDelayTime'] = self.max_delay_time
        result['DistributionType'] = self.distribution_type
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.port = map.get('Port')
        self.max_delay_time = map.get('MaxDelayTime')
        self.distribution_type = map.get('DistributionType')
        self.weight = map.get('Weight')
        return self


class ModifyReadWriteSplittingConnectionResponse(TeaModel):
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


class CalculateDBInstanceWeightRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class CalculateDBInstanceWeightResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = CalculateDBInstanceWeightResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class CalculateDBInstanceWeightResponseItemsDBInstanceWeight(TeaModel):
    def __init__(self, dbinstance_id=None, dbinstance_type=None, readonly_instance_sqldelayed_time=None, availability=None, weight=None):
        self.dbinstance_id = dbinstance_id
        self.dbinstance_type = dbinstance_type
        self.readonly_instance_sqldelayed_time = readonly_instance_sqldelayed_time
        self.availability = availability
        self.weight = weight

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.readonly_instance_sqldelayed_time, 'readonly_instance_sqldelayed_time')
        self.validate_required(self.availability, 'availability')
        self.validate_required(self.weight, 'weight')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceType'] = self.dbinstance_type
        result['ReadonlyInstanceSQLDelayedTime'] = self.readonly_instance_sqldelayed_time
        result['Availability'] = self.availability
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_type = map.get('DBInstanceType')
        self.readonly_instance_sqldelayed_time = map.get('ReadonlyInstanceSQLDelayedTime')
        self.availability = map.get('Availability')
        self.weight = map.get('Weight')
        return self


class CalculateDBInstanceWeightResponseItems(TeaModel):
    def __init__(self, dbinstance_weight=None):
        self.dbinstance_weight = []

    def validate(self):
        self.validate_required(self.dbinstance_weight, 'dbinstance_weight')
        if self.dbinstance_weight:
            for k in self.dbinstance_weight:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceWeight'] = []
        if self.dbinstance_weight is not None:
            for k in self.dbinstance_weight:
                result['DBInstanceWeight'].append(k.to_map() if k else None)
        else:
            result['DBInstanceWeight'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_weight = []
        if map.get('DBInstanceWeight') is not None:
            for k in map.get('DBInstanceWeight'):
                temp_model = CalculateDBInstanceWeightResponseItemsDBInstanceWeight()
                temp_model = temp_model.from_map(k)
                self.dbinstance_weight.append(temp_model)
        else:
            self.dbinstance_weight = None
        return self


class AllocateReadWriteSplittingConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, owner_account=None, dbinstance_id=None, connection_string_prefix=None, port=None, max_delay_time=None, net_type=None, distribution_type=None, weight=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.connection_string_prefix = connection_string_prefix
        self.port = port
        self.max_delay_time = max_delay_time
        self.net_type = net_type
        self.distribution_type = distribution_type
        self.weight = weight

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['Port'] = self.port
        result['MaxDelayTime'] = self.max_delay_time
        result['NetType'] = self.net_type
        result['DistributionType'] = self.distribution_type
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.port = map.get('Port')
        self.max_delay_time = map.get('MaxDelayTime')
        self.net_type = map.get('NetType')
        self.distribution_type = map.get('DistributionType')
        self.weight = map.get('Weight')
        return self


class AllocateReadWriteSplittingConnectionResponse(TeaModel):
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


class ModifyDBInstancePayTypeRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, used_time=None, pay_type=None, period=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.used_time = used_time
        self.pay_type = pay_type
        self.period = period

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['UsedTime'] = self.used_time
        result['PayType'] = self.pay_type
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.used_time = map.get('UsedTime')
        self.pay_type = map.get('PayType')
        self.period = map.get('Period')
        return self


class ModifyDBInstancePayTypeResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        return self


class DescribeCharacterSetNameRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, engine=None, region_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.engine = engine
        self.region_id = region_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['Engine'] = self.engine
        result['RegionId'] = self.region_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.engine = map.get('Engine')
        self.region_id = map.get('RegionId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeCharacterSetNameResponse(TeaModel):
    def __init__(self, request_id=None, engine=None, character_set_name_items=None):
        self.request_id = request_id
        self.engine = engine
        self.character_set_name_items = character_set_name_items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.character_set_name_items, 'character_set_name_items')
        if self.character_set_name_items:
            self.character_set_name_items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Engine'] = self.engine
        if self.character_set_name_items is not None:
            result['CharacterSetNameItems'] = self.character_set_name_items.to_map()
        else:
            result['CharacterSetNameItems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.engine = map.get('Engine')
        if map.get('CharacterSetNameItems') is not None:
            temp_model = DescribeCharacterSetNameResponseCharacterSetNameItems()
            self.character_set_name_items = temp_model.from_map(map['CharacterSetNameItems'])
        else:
            self.character_set_name_items = None
        return self


class DescribeCharacterSetNameResponseCharacterSetNameItems(TeaModel):
    def __init__(self, character_set_name=None):
        self.character_set_name = []

    def validate(self):
        self.validate_required(self.character_set_name, 'character_set_name')

    def to_map(self):
        result = {}
        result['CharacterSetName'] = []
        if self.character_set_name is not None:
            for k in self.character_set_name:
                result['CharacterSetName'].append(k)
        else:
            result['CharacterSetName'] = None
        return result

    def from_map(self, map={}):
        self.character_set_name = []
        if map.get('CharacterSetName') is not None:
            for k in map.get('CharacterSetName'):
                self.character_set_name.append(k)
        else:
            self.character_set_name = None
        return self


class DeleteBackupRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.backup_id, 'backup_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.owner_account = map.get('OwnerAccount')
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


class DescribeDiagnosticReportListRequest(TeaModel):
    def __init__(self, access_key_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDiagnosticReportListResponse(TeaModel):
    def __init__(self, request_id=None, report_list=None):
        self.request_id = request_id
        self.report_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.report_list, 'report_list')
        if self.report_list:
            for k in self.report_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ReportList'] = []
        if self.report_list is not None:
            for k in self.report_list:
                result['ReportList'].append(k.to_map() if k else None)
        else:
            result['ReportList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.report_list = []
        if map.get('ReportList') is not None:
            for k in map.get('ReportList'):
                temp_model = DescribeDiagnosticReportListResponseReportList()
                temp_model = temp_model.from_map(k)
                self.report_list.append(temp_model)
        else:
            self.report_list = None
        return self


class DescribeDiagnosticReportListResponseReportList(TeaModel):
    def __init__(self, diagnostic_time=None, score=None, start_time=None, end_time=None, download_url=None):
        self.diagnostic_time = diagnostic_time
        self.score = score
        self.start_time = start_time
        self.end_time = end_time
        self.download_url = download_url

    def validate(self):
        self.validate_required(self.diagnostic_time, 'diagnostic_time')
        self.validate_required(self.score, 'score')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.download_url, 'download_url')

    def to_map(self):
        result = {}
        result['DiagnosticTime'] = self.diagnostic_time
        result['Score'] = self.score
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DownloadURL'] = self.download_url
        return result

    def from_map(self, map={}):
        self.diagnostic_time = map.get('DiagnosticTime')
        self.score = map.get('Score')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.download_url = map.get('DownloadURL')
        return self


class CreateDiagnosticReportRequest(TeaModel):
    def __init__(self, access_key_id=None, dbinstance_id=None, start_time=None, end_time=None):
        self.access_key_id = access_key_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateDiagnosticReportResponse(TeaModel):
    def __init__(self, request_id=None, report_id=None):
        self.request_id = request_id
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.report_id = map.get('ReportId')
        return self


class CloneDBInstanceRequest(TeaModel):
    def __init__(self, resource_owner_id=None, region_id=None, zone_id=None, dbinstance_class=None, dbinstance_storage=None, db_names=None, pay_type=None, instance_network_type=None, dbinstance_id=None, backup_id=None, restore_time=None, vpcid=None, vswitch_id=None, private_ip_address=None, used_time=None, period=None, category=None, dbinstance_storage_type=None, restore_table=None, table_meta=None, dedicated_host_group_id=None, backup_type=None):
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.zone_id = zone_id
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.db_names = db_names
        self.pay_type = pay_type
        self.instance_network_type = instance_network_type
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.used_time = used_time
        self.period = period
        self.category = category
        self.dbinstance_storage_type = dbinstance_storage_type
        self.restore_table = restore_table
        self.table_meta = table_meta
        self.dedicated_host_group_id = dedicated_host_group_id
        self.backup_type = backup_type

    def validate(self):
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['DbNames'] = self.db_names
        result['PayType'] = self.pay_type
        result['InstanceNetworkType'] = self.instance_network_type
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['UsedTime'] = self.used_time
        result['Period'] = self.period
        result['Category'] = self.category
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['RestoreTable'] = self.restore_table
        result['TableMeta'] = self.table_meta
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['BackupType'] = self.backup_type
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.db_names = map.get('DbNames')
        self.pay_type = map.get('PayType')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.used_time = map.get('UsedTime')
        self.period = map.get('Period')
        self.category = map.get('Category')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.restore_table = map.get('RestoreTable')
        self.table_meta = map.get('TableMeta')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.backup_type = map.get('BackupType')
        return self


class CloneDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None, connection_string=None, port=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id
        self.connection_string = connection_string
        self.port = port

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        return self


class DescribeTagsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, region_id=None, dbinstance_id=None, tags=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.tags = tags
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Tags'] = self.tags
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.tags = map.get('Tags')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeTagsResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeTagsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeTagsResponseItemsTagInfosDBInstanceIds(TeaModel):
    def __init__(self, dbinstance_ids=None):
        self.dbinstance_ids = []

    def validate(self):
        self.validate_required(self.dbinstance_ids, 'dbinstance_ids')

    def to_map(self):
        result = {}
        result['DBInstanceIds'] = []
        if self.dbinstance_ids is not None:
            for k in self.dbinstance_ids:
                result['DBInstanceIds'].append(k)
        else:
            result['DBInstanceIds'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_ids = []
        if map.get('DBInstanceIds') is not None:
            for k in map.get('DBInstanceIds'):
                self.dbinstance_ids.append(k)
        else:
            self.dbinstance_ids = None
        return self


class DescribeTagsResponseItemsTagInfos(TeaModel):
    def __init__(self, tag_key=None, tag_value=None, dbinstance_ids=None):
        self.tag_key = tag_key
        self.tag_value = tag_value
        self.dbinstance_ids = dbinstance_ids

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')
        self.validate_required(self.dbinstance_ids, 'dbinstance_ids')
        if self.dbinstance_ids:
            self.dbinstance_ids.validate()

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        if self.dbinstance_ids is not None:
            result['DBInstanceIds'] = self.dbinstance_ids.to_map()
        else:
            result['DBInstanceIds'] = None
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        if map.get('DBInstanceIds') is not None:
            temp_model = DescribeTagsResponseItemsTagInfosDBInstanceIds()
            self.dbinstance_ids = temp_model.from_map(map['DBInstanceIds'])
        else:
            self.dbinstance_ids = None
        return self


class DescribeTagsResponseItems(TeaModel):
    def __init__(self, tag_infos=None):
        self.tag_infos = []

    def validate(self):
        self.validate_required(self.tag_infos, 'tag_infos')
        if self.tag_infos:
            for k in self.tag_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TagInfos'] = []
        if self.tag_infos is not None:
            for k in self.tag_infos:
                result['TagInfos'].append(k.to_map() if k else None)
        else:
            result['TagInfos'] = None
        return result

    def from_map(self, map={}):
        self.tag_infos = []
        if map.get('TagInfos') is not None:
            for k in map.get('TagInfos'):
                temp_model = DescribeTagsResponseItemsTagInfos()
                temp_model = temp_model.from_map(k)
                self.tag_infos.append(temp_model)
        else:
            self.tag_infos = None
        return self


class DescribeDBInstanceByTagsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, region_id=None, dbinstance_id=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceByTagsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_record_count=None, total_record_count=None, items=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_record_count = total_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalRecordCount'] = self.total_record_count
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        self.total_record_count = map.get('TotalRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeDBInstanceByTagsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag(TeaModel):
    def __init__(self, tag_key=None, tag_value=None):
        self.tag_key = tag_key
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        return self


class DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags(TeaModel):
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
                temp_model = DescribeDBInstanceByTagsResponseItemsDBInstanceTagTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeDBInstanceByTagsResponseItemsDBInstanceTag(TeaModel):
    def __init__(self, dbinstance_id=None, tags=None):
        self.dbinstance_id = dbinstance_id
        self.tags = tags

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        if map.get('Tags') is not None:
            temp_model = DescribeDBInstanceByTagsResponseItemsDBInstanceTagTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class DescribeDBInstanceByTagsResponseItems(TeaModel):
    def __init__(self, dbinstance_tag=None):
        self.dbinstance_tag = []

    def validate(self):
        self.validate_required(self.dbinstance_tag, 'dbinstance_tag')
        if self.dbinstance_tag:
            for k in self.dbinstance_tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceTag'] = []
        if self.dbinstance_tag is not None:
            for k in self.dbinstance_tag:
                result['DBInstanceTag'].append(k.to_map() if k else None)
        else:
            result['DBInstanceTag'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_tag = []
        if map.get('DBInstanceTag') is not None:
            for k in map.get('DBInstanceTag'):
                temp_model = DescribeDBInstanceByTagsResponseItemsDBInstanceTag()
                temp_model = temp_model.from_map(k)
                self.dbinstance_tag.append(temp_model)
        else:
            self.dbinstance_tag = None
        return self


class RevokeOperatorPermissionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class RevokeOperatorPermissionResponse(TeaModel):
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


class ModifyDBInstanceTDERequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, tdestatus=None, dbname=None, owner_account=None, encryption_key=None, role_arn=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.tdestatus = tdestatus
        self.dbname = dbname
        self.owner_account = owner_account
        self.encryption_key = encryption_key
        self.role_arn = role_arn

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.tdestatus, 'tdestatus')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['TDEStatus'] = self.tdestatus
        result['DBName'] = self.dbname
        result['OwnerAccount'] = self.owner_account
        result['EncryptionKey'] = self.encryption_key
        result['RoleArn'] = self.role_arn
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.tdestatus = map.get('TDEStatus')
        self.dbname = map.get('DBName')
        self.owner_account = map.get('OwnerAccount')
        self.encryption_key = map.get('EncryptionKey')
        self.role_arn = map.get('RoleArn')
        return self


class ModifyDBInstanceTDEResponse(TeaModel):
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


class ModifyDBInstanceSSLRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, connection_string=None, owner_account=None, sslenabled=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.connection_string = connection_string
        self.owner_account = owner_account
        self.sslenabled = sslenabled

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.connection_string, 'connection_string')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionString'] = self.connection_string
        result['OwnerAccount'] = self.owner_account
        result['SSLEnabled'] = self.sslenabled
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string = map.get('ConnectionString')
        self.owner_account = map.get('OwnerAccount')
        self.sslenabled = map.get('SSLEnabled')
        return self


class ModifyDBInstanceSSLResponse(TeaModel):
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


class GrantOperatorPermissionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, expired_time=None, privileges=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.expired_time = expired_time
        self.privileges = privileges
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.privileges, 'privileges')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ExpiredTime'] = self.expired_time
        result['Privileges'] = self.privileges
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.expired_time = map.get('ExpiredTime')
        self.privileges = map.get('Privileges')
        self.owner_account = map.get('OwnerAccount')
        return self


class GrantOperatorPermissionResponse(TeaModel):
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


class DescribeDBInstanceTDERequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceTDEResponse(TeaModel):
    def __init__(self, request_id=None, tdestatus=None, databases=None):
        self.request_id = request_id
        self.tdestatus = tdestatus
        self.databases = databases

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.tdestatus, 'tdestatus')
        self.validate_required(self.databases, 'databases')
        if self.databases:
            self.databases.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TDEStatus'] = self.tdestatus
        if self.databases is not None:
            result['Databases'] = self.databases.to_map()
        else:
            result['Databases'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.tdestatus = map.get('TDEStatus')
        if map.get('Databases') is not None:
            temp_model = DescribeDBInstanceTDEResponseDatabases()
            self.databases = temp_model.from_map(map['Databases'])
        else:
            self.databases = None
        return self


class DescribeDBInstanceTDEResponseDatabasesDatabase(TeaModel):
    def __init__(self, dbname=None, tdestatus=None):
        self.dbname = dbname
        self.tdestatus = tdestatus

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.tdestatus, 'tdestatus')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['TDEStatus'] = self.tdestatus
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.tdestatus = map.get('TDEStatus')
        return self


class DescribeDBInstanceTDEResponseDatabases(TeaModel):
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
                temp_model = DescribeDBInstanceTDEResponseDatabasesDatabase()
                temp_model = temp_model.from_map(k)
                self.database.append(temp_model)
        else:
            self.database = None
        return self


class DescribeDBInstanceSSLRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceSSLResponse(TeaModel):
    def __init__(self, request_id=None, connection_string=None, sslexpire_time=None, require_update=None, require_update_reason=None):
        self.request_id = request_id
        self.connection_string = connection_string
        self.sslexpire_time = sslexpire_time
        self.require_update = require_update
        self.require_update_reason = require_update_reason

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.sslexpire_time, 'sslexpire_time')
        self.validate_required(self.require_update, 'require_update')
        self.validate_required(self.require_update_reason, 'require_update_reason')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ConnectionString'] = self.connection_string
        result['SSLExpireTime'] = self.sslexpire_time
        result['RequireUpdate'] = self.require_update
        result['RequireUpdateReason'] = self.require_update_reason
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.connection_string = map.get('ConnectionString')
        self.sslexpire_time = map.get('SSLExpireTime')
        self.require_update = map.get('RequireUpdate')
        self.require_update_reason = map.get('RequireUpdateReason')
        return self


class DescribeSQLLogFilesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, file_name=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.file_name = file_name
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['FileName'] = self.file_name
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.file_name = map.get('FileName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSQLLogFilesResponse(TeaModel):
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
            temp_model = DescribeSQLLogFilesResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSQLLogFilesResponseItemsLogFile(TeaModel):
    def __init__(self, file_id=None, log_status=None, log_download_url=None, log_size=None, log_start_time=None, log_end_time=None):
        self.file_id = file_id
        self.log_status = log_status
        self.log_download_url = log_download_url
        self.log_size = log_size
        self.log_start_time = log_start_time
        self.log_end_time = log_end_time

    def validate(self):
        self.validate_required(self.file_id, 'file_id')
        self.validate_required(self.log_status, 'log_status')
        self.validate_required(self.log_download_url, 'log_download_url')
        self.validate_required(self.log_size, 'log_size')
        self.validate_required(self.log_start_time, 'log_start_time')
        self.validate_required(self.log_end_time, 'log_end_time')

    def to_map(self):
        result = {}
        result['FileID'] = self.file_id
        result['LogStatus'] = self.log_status
        result['LogDownloadURL'] = self.log_download_url
        result['LogSize'] = self.log_size
        result['LogStartTime'] = self.log_start_time
        result['LogEndTime'] = self.log_end_time
        return result

    def from_map(self, map={}):
        self.file_id = map.get('FileID')
        self.log_status = map.get('LogStatus')
        self.log_download_url = map.get('LogDownloadURL')
        self.log_size = map.get('LogSize')
        self.log_start_time = map.get('LogStartTime')
        self.log_end_time = map.get('LogEndTime')
        return self


class DescribeSQLLogFilesResponseItems(TeaModel):
    def __init__(self, log_file=None):
        self.log_file = []

    def validate(self):
        self.validate_required(self.log_file, 'log_file')
        if self.log_file:
            for k in self.log_file:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LogFile'] = []
        if self.log_file is not None:
            for k in self.log_file:
                result['LogFile'].append(k.to_map() if k else None)
        else:
            result['LogFile'] = None
        return result

    def from_map(self, map={}):
        self.log_file = []
        if map.get('LogFile') is not None:
            for k in map.get('LogFile'):
                temp_model = DescribeSQLLogFilesResponseItemsLogFile()
                temp_model = temp_model.from_map(k)
                self.log_file.append(temp_model)
        else:
            self.log_file = None
        return self


class ModifyDBInstanceMonitorRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, period=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.period = period
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['Period'] = self.period
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.period = map.get('Period')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceMonitorResponse(TeaModel):
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


class SwitchDBInstanceHARequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, node_id=None, force=None, owner_account=None, effective_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.node_id = node_id
        self.force = force
        self.owner_account = owner_account
        self.effective_time = effective_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.node_id, 'node_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['NodeId'] = self.node_id
        result['Force'] = self.force
        result['OwnerAccount'] = self.owner_account
        result['EffectiveTime'] = self.effective_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.node_id = map.get('NodeId')
        self.force = map.get('Force')
        self.owner_account = map.get('OwnerAccount')
        self.effective_time = map.get('EffectiveTime')
        return self


class SwitchDBInstanceHAResponse(TeaModel):
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


class DescribeDBInstanceMonitorRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceMonitorResponse(TeaModel):
    def __init__(self, request_id=None, period=None):
        self.request_id = request_id
        self.period = period

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.period = map.get('Period')
        return self


class DescribeSQLCollectorPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None, resource_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class DescribeSQLCollectorPolicyResponse(TeaModel):
    def __init__(self, request_id=None, sqlcollector_status=None, storage_period=None):
        self.request_id = request_id
        self.sqlcollector_status = sqlcollector_status
        self.storage_period = storage_period

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.sqlcollector_status, 'sqlcollector_status')
        self.validate_required(self.storage_period, 'storage_period')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SQLCollectorStatus'] = self.sqlcollector_status
        result['StoragePeriod'] = self.storage_period
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.sqlcollector_status = map.get('SQLCollectorStatus')
        self.storage_period = map.get('StoragePeriod')
        return self


class ModifySQLCollectorPolicyRequest(TeaModel):
    def __init__(self, owner_id=None, access_key_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, sqlcollector_status=None, owner_account=None, resource_group_id=None):
        self.owner_id = owner_id
        self.access_key_id = access_key_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.sqlcollector_status = sqlcollector_status
        self.owner_account = owner_account
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.sqlcollector_status, 'sqlcollector_status')

    def to_map(self):
        result = {}
        result['OwnerId'] = self.owner_id
        result['AccessKeyId'] = self.access_key_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SQLCollectorStatus'] = self.sqlcollector_status
        result['OwnerAccount'] = self.owner_account
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.owner_id = map.get('OwnerId')
        self.access_key_id = map.get('AccessKeyId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.sqlcollector_status = map.get('SQLCollectorStatus')
        self.owner_account = map.get('OwnerAccount')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class ModifySQLCollectorPolicyResponse(TeaModel):
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


class ModifyDBInstanceHAConfigRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, sync_mode=None, hamode=None, db_instance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.sync_mode = sync_mode
        self.hamode = hamode
        self.db_instance_id = db_instance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.sync_mode, 'sync_mode')
        self.validate_required(self.hamode, 'hamode')
        self.validate_required(self.db_instance_id, 'db_instance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SyncMode'] = self.sync_mode
        result['HAMode'] = self.hamode
        result['DbInstanceId'] = self.db_instance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.sync_mode = map.get('SyncMode')
        self.hamode = map.get('HAMode')
        self.db_instance_id = map.get('DbInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceHAConfigResponse(TeaModel):
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


class DescribeDBInstanceHAConfigRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceHAConfigResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, sync_mode=None, hamode=None, host_instance_infos=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.sync_mode = sync_mode
        self.hamode = hamode
        self.host_instance_infos = host_instance_infos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.sync_mode, 'sync_mode')
        self.validate_required(self.hamode, 'hamode')
        self.validate_required(self.host_instance_infos, 'host_instance_infos')
        if self.host_instance_infos:
            self.host_instance_infos.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SyncMode'] = self.sync_mode
        result['HAMode'] = self.hamode
        if self.host_instance_infos is not None:
            result['HostInstanceInfos'] = self.host_instance_infos.to_map()
        else:
            result['HostInstanceInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.sync_mode = map.get('SyncMode')
        self.hamode = map.get('HAMode')
        if map.get('HostInstanceInfos') is not None:
            temp_model = DescribeDBInstanceHAConfigResponseHostInstanceInfos()
            self.host_instance_infos = temp_model.from_map(map['HostInstanceInfos'])
        else:
            self.host_instance_infos = None
        return self


class DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo(TeaModel):
    def __init__(self, node_id=None, region_id=None, log_sync_time=None, data_sync_time=None, node_type=None, zone_id=None, sync_status=None):
        self.node_id = node_id
        self.region_id = region_id
        self.log_sync_time = log_sync_time
        self.data_sync_time = data_sync_time
        self.node_type = node_type
        self.zone_id = zone_id
        self.sync_status = sync_status

    def validate(self):
        self.validate_required(self.node_id, 'node_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.log_sync_time, 'log_sync_time')
        self.validate_required(self.data_sync_time, 'data_sync_time')
        self.validate_required(self.node_type, 'node_type')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.sync_status, 'sync_status')

    def to_map(self):
        result = {}
        result['NodeId'] = self.node_id
        result['RegionId'] = self.region_id
        result['LogSyncTime'] = self.log_sync_time
        result['DataSyncTime'] = self.data_sync_time
        result['NodeType'] = self.node_type
        result['ZoneId'] = self.zone_id
        result['SyncStatus'] = self.sync_status
        return result

    def from_map(self, map={}):
        self.node_id = map.get('NodeId')
        self.region_id = map.get('RegionId')
        self.log_sync_time = map.get('LogSyncTime')
        self.data_sync_time = map.get('DataSyncTime')
        self.node_type = map.get('NodeType')
        self.zone_id = map.get('ZoneId')
        self.sync_status = map.get('SyncStatus')
        return self


class DescribeDBInstanceHAConfigResponseHostInstanceInfos(TeaModel):
    def __init__(self, node_info=None):
        self.node_info = []

    def validate(self):
        self.validate_required(self.node_info, 'node_info')
        if self.node_info:
            for k in self.node_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NodeInfo'] = []
        if self.node_info is not None:
            for k in self.node_info:
                result['NodeInfo'].append(k.to_map() if k else None)
        else:
            result['NodeInfo'] = None
        return result

    def from_map(self, map={}):
        self.node_info = []
        if map.get('NodeInfo') is not None:
            for k in map.get('NodeInfo'):
                temp_model = DescribeDBInstanceHAConfigResponseHostInstanceInfosNodeInfo()
                temp_model = temp_model.from_map(k)
                self.node_info.append(temp_model)
        else:
            self.node_info = None
        return self


class DescribeSQLReportsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSQLReportsResponse(TeaModel):
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
            temp_model = DescribeSQLReportsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem(TeaModel):
    def __init__(self, sqltext=None, avg_latency=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.avg_latency = avg_latency
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.avg_latency, 'avg_latency')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['AvgLatency'] = self.avg_latency
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.avg_latency = map.get('AvgLatency')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLReportsResponseItemsItemLatencyTopNItems(TeaModel):
    def __init__(self, latency_top_nitem=None):
        self.latency_top_nitem = []

    def validate(self):
        self.validate_required(self.latency_top_nitem, 'latency_top_nitem')
        if self.latency_top_nitem:
            for k in self.latency_top_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LatencyTopNItem'] = []
        if self.latency_top_nitem is not None:
            for k in self.latency_top_nitem:
                result['LatencyTopNItem'].append(k.to_map() if k else None)
        else:
            result['LatencyTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.latency_top_nitem = []
        if map.get('LatencyTopNItem') is not None:
            for k in map.get('LatencyTopNItem'):
                temp_model = DescribeSQLReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem()
                temp_model = temp_model.from_map(k)
                self.latency_top_nitem.append(temp_model)
        else:
            self.latency_top_nitem = None
        return self


class DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem(TeaModel):
    def __init__(self, sqltext=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLReportsResponseItemsItemQPSTopNItems(TeaModel):
    def __init__(self, qpstop_nitem=None):
        self.qpstop_nitem = []

    def validate(self):
        self.validate_required(self.qpstop_nitem, 'qpstop_nitem')
        if self.qpstop_nitem:
            for k in self.qpstop_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['QPSTopNItem'] = []
        if self.qpstop_nitem is not None:
            for k in self.qpstop_nitem:
                result['QPSTopNItem'].append(k.to_map() if k else None)
        else:
            result['QPSTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.qpstop_nitem = []
        if map.get('QPSTopNItem') is not None:
            for k in map.get('QPSTopNItem'):
                temp_model = DescribeSQLReportsResponseItemsItemQPSTopNItemsQPSTopNItem()
                temp_model = temp_model.from_map(k)
                self.qpstop_nitem.append(temp_model)
        else:
            self.qpstop_nitem = None
        return self


class DescribeSQLReportsResponseItemsItem(TeaModel):
    def __init__(self, report_time=None, latency_top_nitems=None, qpstop_nitems=None):
        self.report_time = report_time
        self.latency_top_nitems = latency_top_nitems
        self.qpstop_nitems = qpstop_nitems

    def validate(self):
        self.validate_required(self.report_time, 'report_time')
        self.validate_required(self.latency_top_nitems, 'latency_top_nitems')
        if self.latency_top_nitems:
            self.latency_top_nitems.validate()
        self.validate_required(self.qpstop_nitems, 'qpstop_nitems')
        if self.qpstop_nitems:
            self.qpstop_nitems.validate()

    def to_map(self):
        result = {}
        result['ReportTime'] = self.report_time
        if self.latency_top_nitems is not None:
            result['LatencyTopNItems'] = self.latency_top_nitems.to_map()
        else:
            result['LatencyTopNItems'] = None
        if self.qpstop_nitems is not None:
            result['QPSTopNItems'] = self.qpstop_nitems.to_map()
        else:
            result['QPSTopNItems'] = None
        return result

    def from_map(self, map={}):
        self.report_time = map.get('ReportTime')
        if map.get('LatencyTopNItems') is not None:
            temp_model = DescribeSQLReportsResponseItemsItemLatencyTopNItems()
            self.latency_top_nitems = temp_model.from_map(map['LatencyTopNItems'])
        else:
            self.latency_top_nitems = None
        if map.get('QPSTopNItems') is not None:
            temp_model = DescribeSQLReportsResponseItemsItemQPSTopNItems()
            self.qpstop_nitems = temp_model.from_map(map['QPSTopNItems'])
        else:
            self.qpstop_nitems = None
        return self


class DescribeSQLReportsResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeSQLReportsResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class DescribeDBInstanceIPArrayListRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, owner_account=None, whitelist_network_type=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account
        self.whitelist_network_type = whitelist_network_type

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        result['WhitelistNetworkType'] = self.whitelist_network_type
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        self.whitelist_network_type = map.get('WhitelistNetworkType')
        return self


class DescribeDBInstanceIPArrayListResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeDBInstanceIPArrayListResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstanceIPArrayListResponseItemsDBInstanceIPArray(TeaModel):
    def __init__(self, dbinstance_iparray_name=None, dbinstance_iparray_attribute=None, security_iptype=None, security_iplist=None, whitelist_network_type=None):
        self.dbinstance_iparray_name = dbinstance_iparray_name
        self.dbinstance_iparray_attribute = dbinstance_iparray_attribute
        self.security_iptype = security_iptype
        self.security_iplist = security_iplist
        self.whitelist_network_type = whitelist_network_type

    def validate(self):
        self.validate_required(self.dbinstance_iparray_name, 'dbinstance_iparray_name')
        self.validate_required(self.dbinstance_iparray_attribute, 'dbinstance_iparray_attribute')
        self.validate_required(self.security_iptype, 'security_iptype')
        self.validate_required(self.security_iplist, 'security_iplist')
        self.validate_required(self.whitelist_network_type, 'whitelist_network_type')

    def to_map(self):
        result = {}
        result['DBInstanceIPArrayName'] = self.dbinstance_iparray_name
        result['DBInstanceIPArrayAttribute'] = self.dbinstance_iparray_attribute
        result['SecurityIPType'] = self.security_iptype
        result['SecurityIPList'] = self.security_iplist
        result['WhitelistNetworkType'] = self.whitelist_network_type
        return result

    def from_map(self, map={}):
        self.dbinstance_iparray_name = map.get('DBInstanceIPArrayName')
        self.dbinstance_iparray_attribute = map.get('DBInstanceIPArrayAttribute')
        self.security_iptype = map.get('SecurityIPType')
        self.security_iplist = map.get('SecurityIPList')
        self.whitelist_network_type = map.get('WhitelistNetworkType')
        return self


class DescribeDBInstanceIPArrayListResponseItems(TeaModel):
    def __init__(self, dbinstance_iparray=None):
        self.dbinstance_iparray = []

    def validate(self):
        self.validate_required(self.dbinstance_iparray, 'dbinstance_iparray')
        if self.dbinstance_iparray:
            for k in self.dbinstance_iparray:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceIPArray'] = []
        if self.dbinstance_iparray is not None:
            for k in self.dbinstance_iparray:
                result['DBInstanceIPArray'].append(k.to_map() if k else None)
        else:
            result['DBInstanceIPArray'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_iparray = []
        if map.get('DBInstanceIPArray') is not None:
            for k in map.get('DBInstanceIPArray'):
                temp_model = DescribeDBInstanceIPArrayListResponseItemsDBInstanceIPArray()
                temp_model = temp_model.from_map(k)
                self.dbinstance_iparray.append(temp_model)
        else:
            self.dbinstance_iparray = None
        return self


class DescribeSQLLogReportListRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSQLLogReportListResponse(TeaModel):
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
            temp_model = DescribeSQLLogReportListResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem(TeaModel):
    def __init__(self, sqltext=None, avg_latency=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.avg_latency = avg_latency
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.avg_latency, 'avg_latency')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['AvgLatency'] = self.avg_latency
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.avg_latency = map.get('AvgLatency')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLLogReportListResponseItemsItemLatencyTopNItems(TeaModel):
    def __init__(self, latency_top_nitem=None):
        self.latency_top_nitem = []

    def validate(self):
        self.validate_required(self.latency_top_nitem, 'latency_top_nitem')
        if self.latency_top_nitem:
            for k in self.latency_top_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LatencyTopNItem'] = []
        if self.latency_top_nitem is not None:
            for k in self.latency_top_nitem:
                result['LatencyTopNItem'].append(k.to_map() if k else None)
        else:
            result['LatencyTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.latency_top_nitem = []
        if map.get('LatencyTopNItem') is not None:
            for k in map.get('LatencyTopNItem'):
                temp_model = DescribeSQLLogReportListResponseItemsItemLatencyTopNItemsLatencyTopNItem()
                temp_model = temp_model.from_map(k)
                self.latency_top_nitem.append(temp_model)
        else:
            self.latency_top_nitem = None
        return self


class DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem(TeaModel):
    def __init__(self, sqltext=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLLogReportListResponseItemsItemQPSTopNItems(TeaModel):
    def __init__(self, qpstop_nitem=None):
        self.qpstop_nitem = []

    def validate(self):
        self.validate_required(self.qpstop_nitem, 'qpstop_nitem')
        if self.qpstop_nitem:
            for k in self.qpstop_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['QPSTopNItem'] = []
        if self.qpstop_nitem is not None:
            for k in self.qpstop_nitem:
                result['QPSTopNItem'].append(k.to_map() if k else None)
        else:
            result['QPSTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.qpstop_nitem = []
        if map.get('QPSTopNItem') is not None:
            for k in map.get('QPSTopNItem'):
                temp_model = DescribeSQLLogReportListResponseItemsItemQPSTopNItemsQPSTopNItem()
                temp_model = temp_model.from_map(k)
                self.qpstop_nitem.append(temp_model)
        else:
            self.qpstop_nitem = None
        return self


class DescribeSQLLogReportListResponseItemsItem(TeaModel):
    def __init__(self, report_time=None, latency_top_nitems=None, qpstop_nitems=None):
        self.report_time = report_time
        self.latency_top_nitems = latency_top_nitems
        self.qpstop_nitems = qpstop_nitems

    def validate(self):
        self.validate_required(self.report_time, 'report_time')
        self.validate_required(self.latency_top_nitems, 'latency_top_nitems')
        if self.latency_top_nitems:
            self.latency_top_nitems.validate()
        self.validate_required(self.qpstop_nitems, 'qpstop_nitems')
        if self.qpstop_nitems:
            self.qpstop_nitems.validate()

    def to_map(self):
        result = {}
        result['ReportTime'] = self.report_time
        if self.latency_top_nitems is not None:
            result['LatencyTopNItems'] = self.latency_top_nitems.to_map()
        else:
            result['LatencyTopNItems'] = None
        if self.qpstop_nitems is not None:
            result['QPSTopNItems'] = self.qpstop_nitems.to_map()
        else:
            result['QPSTopNItems'] = None
        return result

    def from_map(self, map={}):
        self.report_time = map.get('ReportTime')
        if map.get('LatencyTopNItems') is not None:
            temp_model = DescribeSQLLogReportListResponseItemsItemLatencyTopNItems()
            self.latency_top_nitems = temp_model.from_map(map['LatencyTopNItems'])
        else:
            self.latency_top_nitems = None
        if map.get('QPSTopNItems') is not None:
            temp_model = DescribeSQLLogReportListResponseItemsItemQPSTopNItems()
            self.qpstop_nitems = temp_model.from_map(map['QPSTopNItems'])
        else:
            self.qpstop_nitems = None
        return self


class DescribeSQLLogReportListResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeSQLLogReportListResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class ResetAccountForPGRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, account_password=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_password = account_password
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.owner_account = map.get('OwnerAccount')
        return self


class ResetAccountForPGResponse(TeaModel):
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


class UpgradeDBInstanceEngineVersionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, engine_version=None, owner_account=None, effective_time=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.engine_version = engine_version
        self.owner_account = owner_account
        self.effective_time = effective_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine_version, 'engine_version')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['EngineVersion'] = self.engine_version
        result['OwnerAccount'] = self.owner_account
        result['EffectiveTime'] = self.effective_time
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine_version = map.get('EngineVersion')
        self.owner_account = map.get('OwnerAccount')
        self.effective_time = map.get('EffectiveTime')
        return self


class UpgradeDBInstanceEngineVersionResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None):
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class RevokeAccountPrivilegeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, dbname=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.dbname = dbname
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.dbname, 'dbname')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['DBName'] = self.dbname
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.dbname = map.get('DBName')
        self.owner_account = map.get('OwnerAccount')
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


class RestartDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class RestartDBInstanceResponse(TeaModel):
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


class ResetAccountPasswordRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, account_password=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_password = account_password
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.owner_account = map.get('OwnerAccount')
        return self


class ResetAccountPasswordResponse(TeaModel):
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


class RemoveTagsFromResourceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, region_id=None, dbinstance_id=None, tags=None, tag=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.tags = tags
        self.tag = []
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Tags'] = self.tags
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.tags = map.get('Tags')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = RemoveTagsFromResourceRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.owner_account = map.get('OwnerAccount')
        return self


class RemoveTagsFromResourceRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class RemoveTagsFromResourceResponse(TeaModel):
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


class PurgeDBInstanceLogRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class PurgeDBInstanceLogResponse(TeaModel):
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


class ModifySecurityIpsRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, security_ips=None, dbinstance_iparray_name=None, dbinstance_iparray_attribute=None, security_iptype=None, whitelist_network_type=None, modify_mode=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.security_ips = security_ips
        self.dbinstance_iparray_name = dbinstance_iparray_name
        self.dbinstance_iparray_attribute = dbinstance_iparray_attribute
        self.security_iptype = security_iptype
        self.whitelist_network_type = whitelist_network_type
        self.modify_mode = modify_mode

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.security_ips, 'security_ips')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SecurityIps'] = self.security_ips
        result['DBInstanceIPArrayName'] = self.dbinstance_iparray_name
        result['DBInstanceIPArrayAttribute'] = self.dbinstance_iparray_attribute
        result['SecurityIPType'] = self.security_iptype
        result['WhitelistNetworkType'] = self.whitelist_network_type
        result['ModifyMode'] = self.modify_mode
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.security_ips = map.get('SecurityIps')
        self.dbinstance_iparray_name = map.get('DBInstanceIPArrayName')
        self.dbinstance_iparray_attribute = map.get('DBInstanceIPArrayAttribute')
        self.security_iptype = map.get('SecurityIPType')
        self.whitelist_network_type = map.get('WhitelistNetworkType')
        self.modify_mode = map.get('ModifyMode')
        return self


class ModifySecurityIpsResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None):
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class ModifyParameterRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, parameters=None, forcerestart=None, owner_account=None, parameter_group_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.parameters = parameters
        self.forcerestart = forcerestart
        self.owner_account = owner_account
        self.parameter_group_id = parameter_group_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['Parameters'] = self.parameters
        result['Forcerestart'] = self.forcerestart
        result['OwnerAccount'] = self.owner_account
        result['ParameterGroupId'] = self.parameter_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.parameters = map.get('Parameters')
        self.forcerestart = map.get('Forcerestart')
        self.owner_account = map.get('OwnerAccount')
        self.parameter_group_id = map.get('ParameterGroupId')
        return self


class ModifyParameterResponse(TeaModel):
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


class ModifyDBInstanceSpecRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbinstance_class=None, dbinstance_storage=None, pay_type=None, owner_account=None, effective_time=None, engine_version=None, dbinstance_storage_type=None, direction=None, source_biz=None, dedicated_host_group_id=None, zone_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.pay_type = pay_type
        self.owner_account = owner_account
        self.effective_time = effective_time
        self.engine_version = engine_version
        self.dbinstance_storage_type = dbinstance_storage_type
        self.direction = direction
        self.source_biz = source_biz
        self.dedicated_host_group_id = dedicated_host_group_id
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.pay_type, 'pay_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['PayType'] = self.pay_type
        result['OwnerAccount'] = self.owner_account
        result['EffectiveTime'] = self.effective_time
        result['EngineVersion'] = self.engine_version
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['Direction'] = self.direction
        result['SourceBiz'] = self.source_biz
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.pay_type = map.get('PayType')
        self.owner_account = map.get('OwnerAccount')
        self.effective_time = map.get('EffectiveTime')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.direction = map.get('Direction')
        self.source_biz = map.get('SourceBiz')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.zone_id = map.get('ZoneId')
        return self


class ModifyDBInstanceSpecResponse(TeaModel):
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


class ModifyDBInstanceMaintainTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, maintain_time=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.maintain_time = maintain_time
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.maintain_time, 'maintain_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['MaintainTime'] = self.maintain_time
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.maintain_time = map.get('MaintainTime')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceMaintainTimeResponse(TeaModel):
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


class ModifyDBInstanceDescriptionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbinstance_description=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceDescriptionResponse(TeaModel):
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
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbname=None, dbdescription=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.dbdescription = dbdescription
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.dbdescription, 'dbdescription')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['DBDescription'] = self.dbdescription
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.dbdescription = map.get('DBDescription')
        self.owner_account = map.get('OwnerAccount')
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


class ModifyBackupPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_policy_mode=None, preferred_backup_time=None, preferred_backup_period=None, backup_retention_period=None, backup_log=None, log_backup_retention_period=None, owner_account=None, enable_backup_log=None, local_log_retention_hours=None, local_log_retention_space=None, high_space_usage_protection=None, log_backup_frequency=None, compress_type=None, archive_backup_retention_period=None, archive_backup_keep_policy=None, archive_backup_keep_count=None, released_keep_policy=None, log_backup_local_retention_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_policy_mode = backup_policy_mode
        self.preferred_backup_time = preferred_backup_time
        self.preferred_backup_period = preferred_backup_period
        self.backup_retention_period = backup_retention_period
        self.backup_log = backup_log
        self.log_backup_retention_period = log_backup_retention_period
        self.owner_account = owner_account
        self.enable_backup_log = enable_backup_log
        self.local_log_retention_hours = local_log_retention_hours
        self.local_log_retention_space = local_log_retention_space
        self.high_space_usage_protection = high_space_usage_protection
        self.log_backup_frequency = log_backup_frequency
        self.compress_type = compress_type
        self.archive_backup_retention_period = archive_backup_retention_period
        self.archive_backup_keep_policy = archive_backup_keep_policy
        self.archive_backup_keep_count = archive_backup_keep_count
        self.released_keep_policy = released_keep_policy
        self.log_backup_local_retention_number = log_backup_local_retention_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupPolicyMode'] = self.backup_policy_mode
        result['PreferredBackupTime'] = self.preferred_backup_time
        result['PreferredBackupPeriod'] = self.preferred_backup_period
        result['BackupRetentionPeriod'] = self.backup_retention_period
        result['BackupLog'] = self.backup_log
        result['LogBackupRetentionPeriod'] = self.log_backup_retention_period
        result['OwnerAccount'] = self.owner_account
        result['EnableBackupLog'] = self.enable_backup_log
        result['LocalLogRetentionHours'] = self.local_log_retention_hours
        result['LocalLogRetentionSpace'] = self.local_log_retention_space
        result['HighSpaceUsageProtection'] = self.high_space_usage_protection
        result['LogBackupFrequency'] = self.log_backup_frequency
        result['CompressType'] = self.compress_type
        result['ArchiveBackupRetentionPeriod'] = self.archive_backup_retention_period
        result['ArchiveBackupKeepPolicy'] = self.archive_backup_keep_policy
        result['ArchiveBackupKeepCount'] = self.archive_backup_keep_count
        result['ReleasedKeepPolicy'] = self.released_keep_policy
        result['LogBackupLocalRetentionNumber'] = self.log_backup_local_retention_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_policy_mode = map.get('BackupPolicyMode')
        self.preferred_backup_time = map.get('PreferredBackupTime')
        self.preferred_backup_period = map.get('PreferredBackupPeriod')
        self.backup_retention_period = map.get('BackupRetentionPeriod')
        self.backup_log = map.get('BackupLog')
        self.log_backup_retention_period = map.get('LogBackupRetentionPeriod')
        self.owner_account = map.get('OwnerAccount')
        self.enable_backup_log = map.get('EnableBackupLog')
        self.local_log_retention_hours = map.get('LocalLogRetentionHours')
        self.local_log_retention_space = map.get('LocalLogRetentionSpace')
        self.high_space_usage_protection = map.get('HighSpaceUsageProtection')
        self.log_backup_frequency = map.get('LogBackupFrequency')
        self.compress_type = map.get('CompressType')
        self.archive_backup_retention_period = map.get('ArchiveBackupRetentionPeriod')
        self.archive_backup_keep_policy = map.get('ArchiveBackupKeepPolicy')
        self.archive_backup_keep_count = map.get('ArchiveBackupKeepCount')
        self.released_keep_policy = map.get('ReleasedKeepPolicy')
        self.log_backup_local_retention_number = map.get('LogBackupLocalRetentionNumber')
        return self


class ModifyBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, enable_backup_log=None, local_log_retention_hours=None, local_log_retention_space=None, high_space_usage_protection=None, compress_type=None, log_backup_local_retention_number=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.enable_backup_log = enable_backup_log
        self.local_log_retention_hours = local_log_retention_hours
        self.local_log_retention_space = local_log_retention_space
        self.high_space_usage_protection = high_space_usage_protection
        self.compress_type = compress_type
        self.log_backup_local_retention_number = log_backup_local_retention_number

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.enable_backup_log, 'enable_backup_log')
        self.validate_required(self.local_log_retention_hours, 'local_log_retention_hours')
        self.validate_required(self.local_log_retention_space, 'local_log_retention_space')
        self.validate_required(self.high_space_usage_protection, 'high_space_usage_protection')
        self.validate_required(self.compress_type, 'compress_type')
        self.validate_required(self.log_backup_local_retention_number, 'log_backup_local_retention_number')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceID'] = self.dbinstance_id
        result['EnableBackupLog'] = self.enable_backup_log
        result['LocalLogRetentionHours'] = self.local_log_retention_hours
        result['LocalLogRetentionSpace'] = self.local_log_retention_space
        result['HighSpaceUsageProtection'] = self.high_space_usage_protection
        result['CompressType'] = self.compress_type
        result['LogBackupLocalRetentionNumber'] = self.log_backup_local_retention_number
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceID')
        self.enable_backup_log = map.get('EnableBackupLog')
        self.local_log_retention_hours = map.get('LocalLogRetentionHours')
        self.local_log_retention_space = map.get('LocalLogRetentionSpace')
        self.high_space_usage_protection = map.get('HighSpaceUsageProtection')
        self.compress_type = map.get('CompressType')
        self.log_backup_local_retention_number = map.get('LogBackupLocalRetentionNumber')
        return self


class ModifyAccountDescriptionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, account_description=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_description = account_description
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_description, 'account_description')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountDescription'] = self.account_description
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_description = map.get('AccountDescription')
        self.owner_account = map.get('OwnerAccount')
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


class MigrateToOtherZoneRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, vpcid=None, zone_id=None, owner_account=None, effective_time=None, vswitch_id=None, category=None, zone_id_slave_1=None, zone_id_slave_2=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.vpcid = vpcid
        self.zone_id = zone_id
        self.owner_account = owner_account
        self.effective_time = effective_time
        self.vswitch_id = vswitch_id
        self.category = category
        self.zone_id_slave_1 = zone_id_slave_1
        self.zone_id_slave_2 = zone_id_slave_2

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['VPCId'] = self.vpcid
        result['ZoneId'] = self.zone_id
        result['OwnerAccount'] = self.owner_account
        result['EffectiveTime'] = self.effective_time
        result['VSwitchId'] = self.vswitch_id
        result['Category'] = self.category
        result['ZoneIdSlave1'] = self.zone_id_slave_1
        result['ZoneIdSlave2'] = self.zone_id_slave_2
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.vpcid = map.get('VPCId')
        self.zone_id = map.get('ZoneId')
        self.owner_account = map.get('OwnerAccount')
        self.effective_time = map.get('EffectiveTime')
        self.vswitch_id = map.get('VSwitchId')
        self.category = map.get('Category')
        self.zone_id_slave_1 = map.get('ZoneIdSlave1')
        self.zone_id_slave_2 = map.get('ZoneIdSlave2')
        return self


class MigrateToOtherZoneResponse(TeaModel):
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


class ImportDatabaseBetweenInstancesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, source_dbinstance_id=None, dbinfo=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.source_dbinstance_id = source_dbinstance_id
        self.dbinfo = dbinfo
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.source_dbinstance_id, 'source_dbinstance_id')
        self.validate_required(self.dbinfo, 'dbinfo')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SourceDBInstanceId'] = self.source_dbinstance_id
        result['DBInfo'] = self.dbinfo
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.source_dbinstance_id = map.get('SourceDBInstanceId')
        self.dbinfo = map.get('DBInfo')
        self.owner_account = map.get('OwnerAccount')
        return self


class ImportDatabaseBetweenInstancesResponse(TeaModel):
    def __init__(self, request_id=None, import_id=None):
        self.request_id = request_id
        self.import_id = import_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.import_id, 'import_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ImportId'] = self.import_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.import_id = map.get('ImportId')
        return self


class GrantAccountPrivilegeRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, account_name=None, dbname=None, account_privilege=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.dbname = dbname
        self.account_privilege = account_privilege

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.account_privilege, 'account_privilege')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['DBName'] = self.dbname
        result['AccountPrivilege'] = self.account_privilege
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
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


class DescribeTasksRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, status=None, task_action=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.status = status
        self.task_action = task_action
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['Status'] = self.status
        result['TaskAction'] = self.task_action
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.status = map.get('Status')
        self.task_action = map.get('TaskAction')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeTasksResponse(TeaModel):
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
            temp_model = DescribeTasksResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeTasksResponseItemsTaskProgressInfo(TeaModel):
    def __init__(self, dbname=None, begin_time=None, progress_info=None, finish_time=None, task_action=None, task_id=None, progress=None, expected_finish_time=None, status=None, task_error_code=None, task_error_message=None, steps_info=None, remain=None, step_progress_info=None, current_step_name=None):
        self.dbname = dbname
        self.begin_time = begin_time
        self.progress_info = progress_info
        self.finish_time = finish_time
        self.task_action = task_action
        self.task_id = task_id
        self.progress = progress
        self.expected_finish_time = expected_finish_time
        self.status = status
        self.task_error_code = task_error_code
        self.task_error_message = task_error_message
        self.steps_info = steps_info
        self.remain = remain
        self.step_progress_info = step_progress_info
        self.current_step_name = current_step_name

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.progress_info, 'progress_info')
        self.validate_required(self.finish_time, 'finish_time')
        self.validate_required(self.task_action, 'task_action')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.progress, 'progress')
        self.validate_required(self.expected_finish_time, 'expected_finish_time')
        self.validate_required(self.status, 'status')
        self.validate_required(self.task_error_code, 'task_error_code')
        self.validate_required(self.task_error_message, 'task_error_message')
        self.validate_required(self.steps_info, 'steps_info')
        self.validate_required(self.remain, 'remain')
        self.validate_required(self.step_progress_info, 'step_progress_info')
        self.validate_required(self.current_step_name, 'current_step_name')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['BeginTime'] = self.begin_time
        result['ProgressInfo'] = self.progress_info
        result['FinishTime'] = self.finish_time
        result['TaskAction'] = self.task_action
        result['TaskId'] = self.task_id
        result['Progress'] = self.progress
        result['ExpectedFinishTime'] = self.expected_finish_time
        result['Status'] = self.status
        result['TaskErrorCode'] = self.task_error_code
        result['TaskErrorMessage'] = self.task_error_message
        result['StepsInfo'] = self.steps_info
        result['Remain'] = self.remain
        result['StepProgressInfo'] = self.step_progress_info
        result['CurrentStepName'] = self.current_step_name
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.begin_time = map.get('BeginTime')
        self.progress_info = map.get('ProgressInfo')
        self.finish_time = map.get('FinishTime')
        self.task_action = map.get('TaskAction')
        self.task_id = map.get('TaskId')
        self.progress = map.get('Progress')
        self.expected_finish_time = map.get('ExpectedFinishTime')
        self.status = map.get('Status')
        self.task_error_code = map.get('TaskErrorCode')
        self.task_error_message = map.get('TaskErrorMessage')
        self.steps_info = map.get('StepsInfo')
        self.remain = map.get('Remain')
        self.step_progress_info = map.get('StepProgressInfo')
        self.current_step_name = map.get('CurrentStepName')
        return self


class DescribeTasksResponseItems(TeaModel):
    def __init__(self, task_progress_info=None):
        self.task_progress_info = []

    def validate(self):
        self.validate_required(self.task_progress_info, 'task_progress_info')
        if self.task_progress_info:
            for k in self.task_progress_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TaskProgressInfo'] = []
        if self.task_progress_info is not None:
            for k in self.task_progress_info:
                result['TaskProgressInfo'].append(k.to_map() if k else None)
        else:
            result['TaskProgressInfo'] = None
        return result

    def from_map(self, map={}):
        self.task_progress_info = []
        if map.get('TaskProgressInfo') is not None:
            for k in map.get('TaskProgressInfo'):
                temp_model = DescribeTasksResponseItemsTaskProgressInfo()
                temp_model = temp_model.from_map(k)
                self.task_progress_info.append(temp_model)
        else:
            self.task_progress_info = None
        return self


class DescribeSQLLogReportsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSQLLogReportsResponse(TeaModel):
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
            temp_model = DescribeSQLLogReportsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem(TeaModel):
    def __init__(self, sqltext=None, avg_latency=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.avg_latency = avg_latency
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.avg_latency, 'avg_latency')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['AvgLatency'] = self.avg_latency
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.avg_latency = map.get('AvgLatency')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLLogReportsResponseItemsItemLatencyTopNItems(TeaModel):
    def __init__(self, latency_top_nitem=None):
        self.latency_top_nitem = []

    def validate(self):
        self.validate_required(self.latency_top_nitem, 'latency_top_nitem')
        if self.latency_top_nitem:
            for k in self.latency_top_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['LatencyTopNItem'] = []
        if self.latency_top_nitem is not None:
            for k in self.latency_top_nitem:
                result['LatencyTopNItem'].append(k.to_map() if k else None)
        else:
            result['LatencyTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.latency_top_nitem = []
        if map.get('LatencyTopNItem') is not None:
            for k in map.get('LatencyTopNItem'):
                temp_model = DescribeSQLLogReportsResponseItemsItemLatencyTopNItemsLatencyTopNItem()
                temp_model = temp_model.from_map(k)
                self.latency_top_nitem.append(temp_model)
        else:
            self.latency_top_nitem = None
        return self


class DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem(TeaModel):
    def __init__(self, sqltext=None, sqlexecute_times=None):
        self.sqltext = sqltext
        self.sqlexecute_times = sqlexecute_times

    def validate(self):
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.sqlexecute_times, 'sqlexecute_times')

    def to_map(self):
        result = {}
        result['SQLText'] = self.sqltext
        result['SQLExecuteTimes'] = self.sqlexecute_times
        return result

    def from_map(self, map={}):
        self.sqltext = map.get('SQLText')
        self.sqlexecute_times = map.get('SQLExecuteTimes')
        return self


class DescribeSQLLogReportsResponseItemsItemQPSTopNItems(TeaModel):
    def __init__(self, qpstop_nitem=None):
        self.qpstop_nitem = []

    def validate(self):
        self.validate_required(self.qpstop_nitem, 'qpstop_nitem')
        if self.qpstop_nitem:
            for k in self.qpstop_nitem:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['QPSTopNItem'] = []
        if self.qpstop_nitem is not None:
            for k in self.qpstop_nitem:
                result['QPSTopNItem'].append(k.to_map() if k else None)
        else:
            result['QPSTopNItem'] = None
        return result

    def from_map(self, map={}):
        self.qpstop_nitem = []
        if map.get('QPSTopNItem') is not None:
            for k in map.get('QPSTopNItem'):
                temp_model = DescribeSQLLogReportsResponseItemsItemQPSTopNItemsQPSTopNItem()
                temp_model = temp_model.from_map(k)
                self.qpstop_nitem.append(temp_model)
        else:
            self.qpstop_nitem = None
        return self


class DescribeSQLLogReportsResponseItemsItem(TeaModel):
    def __init__(self, report_time=None, latency_top_nitems=None, qpstop_nitems=None):
        self.report_time = report_time
        self.latency_top_nitems = latency_top_nitems
        self.qpstop_nitems = qpstop_nitems

    def validate(self):
        self.validate_required(self.report_time, 'report_time')
        self.validate_required(self.latency_top_nitems, 'latency_top_nitems')
        if self.latency_top_nitems:
            self.latency_top_nitems.validate()
        self.validate_required(self.qpstop_nitems, 'qpstop_nitems')
        if self.qpstop_nitems:
            self.qpstop_nitems.validate()

    def to_map(self):
        result = {}
        result['ReportTime'] = self.report_time
        if self.latency_top_nitems is not None:
            result['LatencyTopNItems'] = self.latency_top_nitems.to_map()
        else:
            result['LatencyTopNItems'] = None
        if self.qpstop_nitems is not None:
            result['QPSTopNItems'] = self.qpstop_nitems.to_map()
        else:
            result['QPSTopNItems'] = None
        return result

    def from_map(self, map={}):
        self.report_time = map.get('ReportTime')
        if map.get('LatencyTopNItems') is not None:
            temp_model = DescribeSQLLogReportsResponseItemsItemLatencyTopNItems()
            self.latency_top_nitems = temp_model.from_map(map['LatencyTopNItems'])
        else:
            self.latency_top_nitems = None
        if map.get('QPSTopNItems') is not None:
            temp_model = DescribeSQLLogReportsResponseItemsItemQPSTopNItems()
            self.qpstop_nitems = temp_model.from_map(map['QPSTopNItems'])
        else:
            self.qpstop_nitems = None
        return self


class DescribeSQLLogReportsResponseItems(TeaModel):
    def __init__(self, item=None):
        self.item = []

    def validate(self):
        self.validate_required(self.item, 'item')
        if self.item:
            for k in self.item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Item'] = []
        if self.item is not None:
            for k in self.item:
                result['Item'].append(k.to_map() if k else None)
        else:
            result['Item'] = None
        return result

    def from_map(self, map={}):
        self.item = []
        if map.get('Item') is not None:
            for k in map.get('Item'):
                temp_model = DescribeSQLLogReportsResponseItemsItem()
                temp_model = temp_model.from_map(k)
                self.item.append(temp_model)
        else:
            self.item = None
        return self


class DescribeSQLLogRecordsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, sqlid=None, query_keywords=None, start_time=None, database=None, user=None, form=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.sqlid = sqlid
        self.query_keywords = query_keywords
        self.start_time = start_time
        self.database = database
        self.user = user
        self.form = form
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['SQLId'] = self.sqlid
        result['QueryKeywords'] = self.query_keywords
        result['StartTime'] = self.start_time
        result['Database'] = self.database
        result['User'] = self.user
        result['Form'] = self.form
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.sqlid = map.get('SQLId')
        self.query_keywords = map.get('QueryKeywords')
        self.start_time = map.get('StartTime')
        self.database = map.get('Database')
        self.user = map.get('User')
        self.form = map.get('Form')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSQLLogRecordsResponse(TeaModel):
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
            temp_model = DescribeSQLLogRecordsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeSQLLogRecordsResponseItemsSQLRecord(TeaModel):
    def __init__(self, dbname=None, account_name=None, host_address=None, sqltext=None, total_execution_times=None, return_row_counts=None, execute_time=None, thread_id=None):
        self.dbname = dbname
        self.account_name = account_name
        self.host_address = host_address
        self.sqltext = sqltext
        self.total_execution_times = total_execution_times
        self.return_row_counts = return_row_counts
        self.execute_time = execute_time
        self.thread_id = thread_id

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.host_address, 'host_address')
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.total_execution_times, 'total_execution_times')
        self.validate_required(self.return_row_counts, 'return_row_counts')
        self.validate_required(self.execute_time, 'execute_time')
        self.validate_required(self.thread_id, 'thread_id')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['AccountName'] = self.account_name
        result['HostAddress'] = self.host_address
        result['SQLText'] = self.sqltext
        result['TotalExecutionTimes'] = self.total_execution_times
        result['ReturnRowCounts'] = self.return_row_counts
        result['ExecuteTime'] = self.execute_time
        result['ThreadID'] = self.thread_id
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.account_name = map.get('AccountName')
        self.host_address = map.get('HostAddress')
        self.sqltext = map.get('SQLText')
        self.total_execution_times = map.get('TotalExecutionTimes')
        self.return_row_counts = map.get('ReturnRowCounts')
        self.execute_time = map.get('ExecuteTime')
        self.thread_id = map.get('ThreadID')
        return self


class DescribeSQLLogRecordsResponseItems(TeaModel):
    def __init__(self, sqlrecord=None):
        self.sqlrecord = []

    def validate(self):
        self.validate_required(self.sqlrecord, 'sqlrecord')
        if self.sqlrecord:
            for k in self.sqlrecord:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SQLRecord'] = []
        if self.sqlrecord is not None:
            for k in self.sqlrecord:
                result['SQLRecord'].append(k.to_map() if k else None)
        else:
            result['SQLRecord'] = None
        return result

    def from_map(self, map={}):
        self.sqlrecord = []
        if map.get('SQLRecord') is not None:
            for k in map.get('SQLRecord'):
                temp_model = DescribeSQLLogRecordsResponseItemsSQLRecord()
                temp_model = temp_model.from_map(k)
                self.sqlrecord.append(temp_model)
        else:
            self.sqlrecord = None
        return self


class DescribeSlowLogsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, dbname=None, sort_key=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.dbname = dbname
        self.sort_key = sort_key
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DBName'] = self.dbname
        result['SortKey'] = self.sort_key
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dbname = map.get('DBName')
        self.sort_key = map.get('SortKey')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSlowLogsResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, engine=None, start_time=None, end_time=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.start_time = start_time
        self.end_time = end_time
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Engine'] = self.engine
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
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
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine = map.get('Engine')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
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
    def __init__(self, slow_log_id=None, _sqlhash=None, sqlid_str=None, dbname=None, sqltext=None, my_sqltotal_execution_counts=None, my_sqltotal_execution_times=None, total_lock_times=None, max_lock_time=None, parse_total_row_counts=None, parse_max_row_count=None, return_total_row_counts=None, return_max_row_count=None, create_time=None, sqlserver_total_execution_counts=None, sqlserver_total_execution_times=None, total_logical_read_counts=None, total_physical_read_counts=None, report_time=None, max_execution_time=None, avg_execution_time=None):
        self.slow_log_id = slow_log_id
        self._sqlhash = _sqlhash
        self.sqlid_str = sqlid_str
        self.dbname = dbname
        self.sqltext = sqltext
        self.my_sqltotal_execution_counts = my_sqltotal_execution_counts
        self.my_sqltotal_execution_times = my_sqltotal_execution_times
        self.total_lock_times = total_lock_times
        self.max_lock_time = max_lock_time
        self.parse_total_row_counts = parse_total_row_counts
        self.parse_max_row_count = parse_max_row_count
        self.return_total_row_counts = return_total_row_counts
        self.return_max_row_count = return_max_row_count
        self.create_time = create_time
        self.sqlserver_total_execution_counts = sqlserver_total_execution_counts
        self.sqlserver_total_execution_times = sqlserver_total_execution_times
        self.total_logical_read_counts = total_logical_read_counts
        self.total_physical_read_counts = total_physical_read_counts
        self.report_time = report_time
        self.max_execution_time = max_execution_time
        self.avg_execution_time = avg_execution_time

    def validate(self):
        self.validate_required(self.slow_log_id, 'slow_log_id')
        self.validate_required(self._sqlhash, '_sqlhash')
        self.validate_required(self.sqlid_str, 'sqlid_str')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.my_sqltotal_execution_counts, 'my_sqltotal_execution_counts')
        self.validate_required(self.my_sqltotal_execution_times, 'my_sqltotal_execution_times')
        self.validate_required(self.total_lock_times, 'total_lock_times')
        self.validate_required(self.max_lock_time, 'max_lock_time')
        self.validate_required(self.parse_total_row_counts, 'parse_total_row_counts')
        self.validate_required(self.parse_max_row_count, 'parse_max_row_count')
        self.validate_required(self.return_total_row_counts, 'return_total_row_counts')
        self.validate_required(self.return_max_row_count, 'return_max_row_count')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.sqlserver_total_execution_counts, 'sqlserver_total_execution_counts')
        self.validate_required(self.sqlserver_total_execution_times, 'sqlserver_total_execution_times')
        self.validate_required(self.total_logical_read_counts, 'total_logical_read_counts')
        self.validate_required(self.total_physical_read_counts, 'total_physical_read_counts')
        self.validate_required(self.report_time, 'report_time')
        self.validate_required(self.max_execution_time, 'max_execution_time')
        self.validate_required(self.avg_execution_time, 'avg_execution_time')

    def to_map(self):
        result = {}
        result['SlowLogId'] = self.slow_log_id
        result['SQLHASH'] = self._sqlhash
        result['SQLIdStr'] = self.sqlid_str
        result['DBName'] = self.dbname
        result['SQLText'] = self.sqltext
        result['MySQLTotalExecutionCounts'] = self.my_sqltotal_execution_counts
        result['MySQLTotalExecutionTimes'] = self.my_sqltotal_execution_times
        result['TotalLockTimes'] = self.total_lock_times
        result['MaxLockTime'] = self.max_lock_time
        result['ParseTotalRowCounts'] = self.parse_total_row_counts
        result['ParseMaxRowCount'] = self.parse_max_row_count
        result['ReturnTotalRowCounts'] = self.return_total_row_counts
        result['ReturnMaxRowCount'] = self.return_max_row_count
        result['CreateTime'] = self.create_time
        result['SQLServerTotalExecutionCounts'] = self.sqlserver_total_execution_counts
        result['SQLServerTotalExecutionTimes'] = self.sqlserver_total_execution_times
        result['TotalLogicalReadCounts'] = self.total_logical_read_counts
        result['TotalPhysicalReadCounts'] = self.total_physical_read_counts
        result['ReportTime'] = self.report_time
        result['MaxExecutionTime'] = self.max_execution_time
        result['AvgExecutionTime'] = self.avg_execution_time
        return result

    def from_map(self, map={}):
        self.slow_log_id = map.get('SlowLogId')
        self._sqlhash = map.get('SQLHASH')
        self.sqlid_str = map.get('SQLIdStr')
        self.dbname = map.get('DBName')
        self.sqltext = map.get('SQLText')
        self.my_sqltotal_execution_counts = map.get('MySQLTotalExecutionCounts')
        self.my_sqltotal_execution_times = map.get('MySQLTotalExecutionTimes')
        self.total_lock_times = map.get('TotalLockTimes')
        self.max_lock_time = map.get('MaxLockTime')
        self.parse_total_row_counts = map.get('ParseTotalRowCounts')
        self.parse_max_row_count = map.get('ParseMaxRowCount')
        self.return_total_row_counts = map.get('ReturnTotalRowCounts')
        self.return_max_row_count = map.get('ReturnMaxRowCount')
        self.create_time = map.get('CreateTime')
        self.sqlserver_total_execution_counts = map.get('SQLServerTotalExecutionCounts')
        self.sqlserver_total_execution_times = map.get('SQLServerTotalExecutionTimes')
        self.total_logical_read_counts = map.get('TotalLogicalReadCounts')
        self.total_physical_read_counts = map.get('TotalPhysicalReadCounts')
        self.report_time = map.get('ReportTime')
        self.max_execution_time = map.get('MaxExecutionTime')
        self.avg_execution_time = map.get('AvgExecutionTime')
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
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, _sqlhash=None, start_time=None, end_time=None, dbname=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self._sqlhash = _sqlhash
        self.start_time = start_time
        self.end_time = end_time
        self.dbname = dbname
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['SQLHASH'] = self._sqlhash
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['DBName'] = self.dbname
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self._sqlhash = map.get('SQLHASH')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dbname = map.get('DBName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeSlowLogRecordsResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, engine=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
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
        result['DBInstanceId'] = self.dbinstance_id
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
        self.dbinstance_id = map.get('DBInstanceId')
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
    def __init__(self, host_address=None, dbname=None, sqltext=None, query_times=None, lock_times=None, parse_row_counts=None, return_row_counts=None, execution_start_time=None, query_time_ms=None):
        self.host_address = host_address
        self.dbname = dbname
        self.sqltext = sqltext
        self.query_times = query_times
        self.lock_times = lock_times
        self.parse_row_counts = parse_row_counts
        self.return_row_counts = return_row_counts
        self.execution_start_time = execution_start_time
        self.query_time_ms = query_time_ms

    def validate(self):
        self.validate_required(self.host_address, 'host_address')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.sqltext, 'sqltext')
        self.validate_required(self.query_times, 'query_times')
        self.validate_required(self.lock_times, 'lock_times')
        self.validate_required(self.parse_row_counts, 'parse_row_counts')
        self.validate_required(self.return_row_counts, 'return_row_counts')
        self.validate_required(self.execution_start_time, 'execution_start_time')
        self.validate_required(self.query_time_ms, 'query_time_ms')

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
        result['QueryTimeMS'] = self.query_time_ms
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
        self.query_time_ms = map.get('QueryTimeMS')
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


class DescribeResourceUsageRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeResourceUsageResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, engine=None, disk_used=None, data_size=None, log_size=None, backup_size=None, backup_oss_data_size=None, backup_oss_log_size=None, sqlsize=None, cold_backup_size=None, backup_data_size=None, backup_log_size=None, paid_backup_size=None, archive_backup_size=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.disk_used = disk_used
        self.data_size = data_size
        self.log_size = log_size
        self.backup_size = backup_size
        self.backup_oss_data_size = backup_oss_data_size
        self.backup_oss_log_size = backup_oss_log_size
        self.sqlsize = sqlsize
        self.cold_backup_size = cold_backup_size
        self.backup_data_size = backup_data_size
        self.backup_log_size = backup_log_size
        self.paid_backup_size = paid_backup_size
        self.archive_backup_size = archive_backup_size

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.disk_used, 'disk_used')
        self.validate_required(self.data_size, 'data_size')
        self.validate_required(self.log_size, 'log_size')
        self.validate_required(self.backup_size, 'backup_size')
        self.validate_required(self.backup_oss_data_size, 'backup_oss_data_size')
        self.validate_required(self.backup_oss_log_size, 'backup_oss_log_size')
        self.validate_required(self.sqlsize, 'sqlsize')
        self.validate_required(self.cold_backup_size, 'cold_backup_size')
        self.validate_required(self.backup_data_size, 'backup_data_size')
        self.validate_required(self.backup_log_size, 'backup_log_size')
        self.validate_required(self.paid_backup_size, 'paid_backup_size')
        self.validate_required(self.archive_backup_size, 'archive_backup_size')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Engine'] = self.engine
        result['DiskUsed'] = self.disk_used
        result['DataSize'] = self.data_size
        result['LogSize'] = self.log_size
        result['BackupSize'] = self.backup_size
        result['BackupOssDataSize'] = self.backup_oss_data_size
        result['BackupOssLogSize'] = self.backup_oss_log_size
        result['SQLSize'] = self.sqlsize
        result['ColdBackupSize'] = self.cold_backup_size
        result['BackupDataSize'] = self.backup_data_size
        result['BackupLogSize'] = self.backup_log_size
        result['PaidBackupSize'] = self.paid_backup_size
        result['ArchiveBackupSize'] = self.archive_backup_size
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine = map.get('Engine')
        self.disk_used = map.get('DiskUsed')
        self.data_size = map.get('DataSize')
        self.log_size = map.get('LogSize')
        self.backup_size = map.get('BackupSize')
        self.backup_oss_data_size = map.get('BackupOssDataSize')
        self.backup_oss_log_size = map.get('BackupOssLogSize')
        self.sqlsize = map.get('SQLSize')
        self.cold_backup_size = map.get('ColdBackupSize')
        self.backup_data_size = map.get('BackupDataSize')
        self.backup_log_size = map.get('BackupLogSize')
        self.paid_backup_size = map.get('PaidBackupSize')
        self.archive_backup_size = map.get('ArchiveBackupSize')
        return self


class DescribeRegionsRequest(TeaModel):
    def __init__(self, resource_owner_id=None):
        self.resource_owner_id = resource_owner_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
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


class DescribeRegionsResponseRegionsRDSRegion(TeaModel):
    def __init__(self, region_id=None, zone_id=None):
        self.region_id = region_id
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        return self


class DescribeRegionsResponseRegions(TeaModel):
    def __init__(self, rdsregion=None):
        self.rdsregion = []

    def validate(self):
        self.validate_required(self.rdsregion, 'rdsregion')
        if self.rdsregion:
            for k in self.rdsregion:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RDSRegion'] = []
        if self.rdsregion is not None:
            for k in self.rdsregion:
                result['RDSRegion'].append(k.to_map() if k else None)
        else:
            result['RDSRegion'] = None
        return result

    def from_map(self, map={}):
        self.rdsregion = []
        if map.get('RDSRegion') is not None:
            for k in map.get('RDSRegion'):
                temp_model = DescribeRegionsResponseRegionsRDSRegion()
                temp_model = temp_model.from_map(k)
                self.rdsregion.append(temp_model)
        else:
            self.rdsregion = None
        return self


class DescribeParameterTemplatesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, engine=None, engine_version=None, owner_account=None, category=None, region_id=None, dbinstance_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.engine = engine
        self.engine_version = engine_version
        self.owner_account = owner_account
        self.category = category
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['OwnerAccount'] = self.owner_account
        result['Category'] = self.category
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.owner_account = map.get('OwnerAccount')
        self.category = map.get('Category')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeParameterTemplatesResponse(TeaModel):
    def __init__(self, request_id=None, engine=None, engine_version=None, parameter_count=None, parameters=None):
        self.request_id = request_id
        self.engine = engine
        self.engine_version = engine_version
        self.parameter_count = parameter_count
        self.parameters = parameters

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.parameter_count, 'parameter_count')
        self.validate_required(self.parameters, 'parameters')
        if self.parameters:
            self.parameters.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['ParameterCount'] = self.parameter_count
        if self.parameters is not None:
            result['Parameters'] = self.parameters.to_map()
        else:
            result['Parameters'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.parameter_count = map.get('ParameterCount')
        if map.get('Parameters') is not None:
            temp_model = DescribeParameterTemplatesResponseParameters()
            self.parameters = temp_model.from_map(map['Parameters'])
        else:
            self.parameters = None
        return self


class DescribeParameterTemplatesResponseParametersTemplateRecord(TeaModel):
    def __init__(self, parameter_name=None, parameter_value=None, force_modify=None, force_restart=None, checking_code=None, parameter_description=None):
        self.parameter_name = parameter_name
        self.parameter_value = parameter_value
        self.force_modify = force_modify
        self.force_restart = force_restart
        self.checking_code = checking_code
        self.parameter_description = parameter_description

    def validate(self):
        self.validate_required(self.parameter_name, 'parameter_name')
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.force_modify, 'force_modify')
        self.validate_required(self.force_restart, 'force_restart')
        self.validate_required(self.checking_code, 'checking_code')
        self.validate_required(self.parameter_description, 'parameter_description')

    def to_map(self):
        result = {}
        result['ParameterName'] = self.parameter_name
        result['ParameterValue'] = self.parameter_value
        result['ForceModify'] = self.force_modify
        result['ForceRestart'] = self.force_restart
        result['CheckingCode'] = self.checking_code
        result['ParameterDescription'] = self.parameter_description
        return result

    def from_map(self, map={}):
        self.parameter_name = map.get('ParameterName')
        self.parameter_value = map.get('ParameterValue')
        self.force_modify = map.get('ForceModify')
        self.force_restart = map.get('ForceRestart')
        self.checking_code = map.get('CheckingCode')
        self.parameter_description = map.get('ParameterDescription')
        return self


class DescribeParameterTemplatesResponseParameters(TeaModel):
    def __init__(self, template_record=None):
        self.template_record = []

    def validate(self):
        self.validate_required(self.template_record, 'template_record')
        if self.template_record:
            for k in self.template_record:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateRecord'] = []
        if self.template_record is not None:
            for k in self.template_record:
                result['TemplateRecord'].append(k.to_map() if k else None)
        else:
            result['TemplateRecord'] = None
        return result

    def from_map(self, map={}):
        self.template_record = []
        if map.get('TemplateRecord') is not None:
            for k in map.get('TemplateRecord'):
                temp_model = DescribeParameterTemplatesResponseParametersTemplateRecord()
                temp_model = temp_model.from_map(k)
                self.template_record.append(temp_model)
        else:
            self.template_record = None
        return self


class DescribeParametersRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeParametersResponse(TeaModel):
    def __init__(self, request_id=None, engine=None, engine_version=None, config_parameters=None, running_parameters=None):
        self.request_id = request_id
        self.engine = engine
        self.engine_version = engine_version
        self.config_parameters = config_parameters
        self.running_parameters = running_parameters

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.config_parameters, 'config_parameters')
        if self.config_parameters:
            self.config_parameters.validate()
        self.validate_required(self.running_parameters, 'running_parameters')
        if self.running_parameters:
            self.running_parameters.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        if self.config_parameters is not None:
            result['ConfigParameters'] = self.config_parameters.to_map()
        else:
            result['ConfigParameters'] = None
        if self.running_parameters is not None:
            result['RunningParameters'] = self.running_parameters.to_map()
        else:
            result['RunningParameters'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        if map.get('ConfigParameters') is not None:
            temp_model = DescribeParametersResponseConfigParameters()
            self.config_parameters = temp_model.from_map(map['ConfigParameters'])
        else:
            self.config_parameters = None
        if map.get('RunningParameters') is not None:
            temp_model = DescribeParametersResponseRunningParameters()
            self.running_parameters = temp_model.from_map(map['RunningParameters'])
        else:
            self.running_parameters = None
        return self


class DescribeParametersResponseConfigParametersDBInstanceParameter(TeaModel):
    def __init__(self, parameter_name=None, parameter_value=None, parameter_description=None):
        self.parameter_name = parameter_name
        self.parameter_value = parameter_value
        self.parameter_description = parameter_description

    def validate(self):
        self.validate_required(self.parameter_name, 'parameter_name')
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_description, 'parameter_description')

    def to_map(self):
        result = {}
        result['ParameterName'] = self.parameter_name
        result['ParameterValue'] = self.parameter_value
        result['ParameterDescription'] = self.parameter_description
        return result

    def from_map(self, map={}):
        self.parameter_name = map.get('ParameterName')
        self.parameter_value = map.get('ParameterValue')
        self.parameter_description = map.get('ParameterDescription')
        return self


class DescribeParametersResponseConfigParameters(TeaModel):
    def __init__(self, dbinstance_parameter=None):
        self.dbinstance_parameter = []

    def validate(self):
        self.validate_required(self.dbinstance_parameter, 'dbinstance_parameter')
        if self.dbinstance_parameter:
            for k in self.dbinstance_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceParameter'] = []
        if self.dbinstance_parameter is not None:
            for k in self.dbinstance_parameter:
                result['DBInstanceParameter'].append(k.to_map() if k else None)
        else:
            result['DBInstanceParameter'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_parameter = []
        if map.get('DBInstanceParameter') is not None:
            for k in map.get('DBInstanceParameter'):
                temp_model = DescribeParametersResponseConfigParametersDBInstanceParameter()
                temp_model = temp_model.from_map(k)
                self.dbinstance_parameter.append(temp_model)
        else:
            self.dbinstance_parameter = None
        return self


class DescribeParametersResponseRunningParametersDBInstanceParameter(TeaModel):
    def __init__(self, parameter_name=None, parameter_value=None, parameter_description=None):
        self.parameter_name = parameter_name
        self.parameter_value = parameter_value
        self.parameter_description = parameter_description

    def validate(self):
        self.validate_required(self.parameter_name, 'parameter_name')
        self.validate_required(self.parameter_value, 'parameter_value')
        self.validate_required(self.parameter_description, 'parameter_description')

    def to_map(self):
        result = {}
        result['ParameterName'] = self.parameter_name
        result['ParameterValue'] = self.parameter_value
        result['ParameterDescription'] = self.parameter_description
        return result

    def from_map(self, map={}):
        self.parameter_name = map.get('ParameterName')
        self.parameter_value = map.get('ParameterValue')
        self.parameter_description = map.get('ParameterDescription')
        return self


class DescribeParametersResponseRunningParameters(TeaModel):
    def __init__(self, dbinstance_parameter=None):
        self.dbinstance_parameter = []

    def validate(self):
        self.validate_required(self.dbinstance_parameter, 'dbinstance_parameter')
        if self.dbinstance_parameter:
            for k in self.dbinstance_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceParameter'] = []
        if self.dbinstance_parameter is not None:
            for k in self.dbinstance_parameter:
                result['DBInstanceParameter'].append(k.to_map() if k else None)
        else:
            result['DBInstanceParameter'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_parameter = []
        if map.get('DBInstanceParameter') is not None:
            for k in map.get('DBInstanceParameter'):
                temp_model = DescribeParametersResponseRunningParametersDBInstanceParameter()
                temp_model = temp_model.from_map(k)
                self.dbinstance_parameter.append(temp_model)
        else:
            self.dbinstance_parameter = None
        return self


class DescribeModifyParameterLogRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeModifyParameterLogResponse(TeaModel):
    def __init__(self, request_id=None, engine=None, dbinstance_id=None, engine_version=None, total_record_count=None, page_number=None, page_record_count=None, items=None):
        self.request_id = request_id
        self.engine = engine
        self.dbinstance_id = dbinstance_id
        self.engine_version = engine_version
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Engine'] = self.engine
        result['DBInstanceId'] = self.dbinstance_id
        result['EngineVersion'] = self.engine_version
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
        self.engine = map.get('Engine')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine_version = map.get('EngineVersion')
        self.total_record_count = map.get('TotalRecordCount')
        self.page_number = map.get('PageNumber')
        self.page_record_count = map.get('PageRecordCount')
        if map.get('Items') is not None:
            temp_model = DescribeModifyParameterLogResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeModifyParameterLogResponseItemsParameterChangeLog(TeaModel):
    def __init__(self, modify_time=None, old_parameter_value=None, new_parameter_value=None, parameter_name=None, status=None):
        self.modify_time = modify_time
        self.old_parameter_value = old_parameter_value
        self.new_parameter_value = new_parameter_value
        self.parameter_name = parameter_name
        self.status = status

    def validate(self):
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.old_parameter_value, 'old_parameter_value')
        self.validate_required(self.new_parameter_value, 'new_parameter_value')
        self.validate_required(self.parameter_name, 'parameter_name')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['ModifyTime'] = self.modify_time
        result['OldParameterValue'] = self.old_parameter_value
        result['NewParameterValue'] = self.new_parameter_value
        result['ParameterName'] = self.parameter_name
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.modify_time = map.get('ModifyTime')
        self.old_parameter_value = map.get('OldParameterValue')
        self.new_parameter_value = map.get('NewParameterValue')
        self.parameter_name = map.get('ParameterName')
        self.status = map.get('Status')
        return self


class DescribeModifyParameterLogResponseItems(TeaModel):
    def __init__(self, parameter_change_log=None):
        self.parameter_change_log = []

    def validate(self):
        self.validate_required(self.parameter_change_log, 'parameter_change_log')
        if self.parameter_change_log:
            for k in self.parameter_change_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ParameterChangeLog'] = []
        if self.parameter_change_log is not None:
            for k in self.parameter_change_log:
                result['ParameterChangeLog'].append(k.to_map() if k else None)
        else:
            result['ParameterChangeLog'] = None
        return result

    def from_map(self, map={}):
        self.parameter_change_log = []
        if map.get('ParameterChangeLog') is not None:
            for k in map.get('ParameterChangeLog'):
                temp_model = DescribeModifyParameterLogResponseItemsParameterChangeLog()
                temp_model = temp_model.from_map(k)
                self.parameter_change_log.append(temp_model)
        else:
            self.parameter_change_log = None
        return self


class DescribeErrorLogsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeErrorLogsResponse(TeaModel):
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
            temp_model = DescribeErrorLogsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeErrorLogsResponseItemsErrorLog(TeaModel):
    def __init__(self, error_info=None, create_time=None):
        self.error_info = error_info
        self.create_time = create_time

    def validate(self):
        self.validate_required(self.error_info, 'error_info')
        self.validate_required(self.create_time, 'create_time')

    def to_map(self):
        result = {}
        result['ErrorInfo'] = self.error_info
        result['CreateTime'] = self.create_time
        return result

    def from_map(self, map={}):
        self.error_info = map.get('ErrorInfo')
        self.create_time = map.get('CreateTime')
        return self


class DescribeErrorLogsResponseItems(TeaModel):
    def __init__(self, error_log=None):
        self.error_log = []

    def validate(self):
        self.validate_required(self.error_log, 'error_log')
        if self.error_log:
            for k in self.error_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ErrorLog'] = []
        if self.error_log is not None:
            for k in self.error_log:
                result['ErrorLog'].append(k.to_map() if k else None)
        else:
            result['ErrorLog'] = None
        return result

    def from_map(self, map={}):
        self.error_log = []
        if map.get('ErrorLog') is not None:
            for k in map.get('ErrorLog'):
                temp_model = DescribeErrorLogsResponseItemsErrorLog()
                temp_model = temp_model.from_map(k)
                self.error_log.append(temp_model)
        else:
            self.error_log = None
        return self


class DescribeDBInstancePerformanceRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, key=None, start_time=None, end_time=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.key = key
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.key, 'key')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Key'] = self.key
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.key = map.get('Key')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeDBInstancePerformanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, engine=None, start_time=None, end_time=None, performance_keys=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.start_time = start_time
        self.end_time = end_time
        self.performance_keys = performance_keys

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.performance_keys, 'performance_keys')
        if self.performance_keys:
            self.performance_keys.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Engine'] = self.engine
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        if self.performance_keys is not None:
            result['PerformanceKeys'] = self.performance_keys.to_map()
        else:
            result['PerformanceKeys'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine = map.get('Engine')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        if map.get('PerformanceKeys') is not None:
            temp_model = DescribeDBInstancePerformanceResponsePerformanceKeys()
            self.performance_keys = temp_model.from_map(map['PerformanceKeys'])
        else:
            self.performance_keys = None
        return self


class DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey(TeaModel):
    def __init__(self, key=None, unit=None, value_format=None):
        self.key = key
        self.unit = unit
        self.value_format = value_format

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.unit, 'unit')
        self.validate_required(self.value_format, 'value_format')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Unit'] = self.unit
        result['ValueFormat'] = self.value_format
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.unit = map.get('Unit')
        self.value_format = map.get('ValueFormat')
        return self


class DescribeDBInstancePerformanceResponsePerformanceKeys(TeaModel):
    def __init__(self, performance_key=None):
        self.performance_key = []

    def validate(self):
        self.validate_required(self.performance_key, 'performance_key')
        if self.performance_key:
            for k in self.performance_key:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PerformanceKey'] = []
        if self.performance_key is not None:
            for k in self.performance_key:
                result['PerformanceKey'].append(k.to_map() if k else None)
        else:
            result['PerformanceKey'] = None
        return result

    def from_map(self, map={}):
        self.performance_key = []
        if map.get('PerformanceKey') is not None:
            for k in map.get('PerformanceKey'):
                temp_model = DescribeDBInstancePerformanceResponsePerformanceKeysPerformanceKey()
                temp_model = temp_model.from_map(k)
                self.performance_key.append(temp_model)
        else:
            self.performance_key = None
        return self


class DescribeDatabasesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbname=None, dbstatus=None, owner_account=None, page_size=None, page_number=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.dbstatus = dbstatus
        self.owner_account = owner_account
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['DBStatus'] = self.dbstatus
        result['OwnerAccount'] = self.owner_account
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.dbstatus = map.get('DBStatus')
        self.owner_account = map.get('OwnerAccount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
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


class DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo(TeaModel):
    def __init__(self, account=None, account_privilege=None, account_privilege_detail=None):
        self.account = account
        self.account_privilege = account_privilege
        self.account_privilege_detail = account_privilege_detail

    def validate(self):
        self.validate_required(self.account, 'account')
        self.validate_required(self.account_privilege, 'account_privilege')
        self.validate_required(self.account_privilege_detail, 'account_privilege_detail')

    def to_map(self):
        result = {}
        result['Account'] = self.account
        result['AccountPrivilege'] = self.account_privilege
        result['AccountPrivilegeDetail'] = self.account_privilege_detail
        return result

    def from_map(self, map={}):
        self.account = map.get('Account')
        self.account_privilege = map.get('AccountPrivilege')
        self.account_privilege_detail = map.get('AccountPrivilegeDetail')
        return self


class DescribeDatabasesResponseDatabasesDatabaseAccounts(TeaModel):
    def __init__(self, account_privilege_info=None):
        self.account_privilege_info = []

    def validate(self):
        self.validate_required(self.account_privilege_info, 'account_privilege_info')
        if self.account_privilege_info:
            for k in self.account_privilege_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccountPrivilegeInfo'] = []
        if self.account_privilege_info is not None:
            for k in self.account_privilege_info:
                result['AccountPrivilegeInfo'].append(k.to_map() if k else None)
        else:
            result['AccountPrivilegeInfo'] = None
        return result

    def from_map(self, map={}):
        self.account_privilege_info = []
        if map.get('AccountPrivilegeInfo') is not None:
            for k in map.get('AccountPrivilegeInfo'):
                temp_model = DescribeDatabasesResponseDatabasesDatabaseAccountsAccountPrivilegeInfo()
                temp_model = temp_model.from_map(k)
                self.account_privilege_info.append(temp_model)
        else:
            self.account_privilege_info = None
        return self


class DescribeDatabasesResponseDatabasesDatabase(TeaModel):
    def __init__(self, dbname=None, dbinstance_id=None, engine=None, dbstatus=None, character_set_name=None, dbdescription=None, accounts=None):
        self.dbname = dbname
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.dbstatus = dbstatus
        self.character_set_name = character_set_name
        self.dbdescription = dbdescription
        self.accounts = accounts

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbstatus, 'dbstatus')
        self.validate_required(self.character_set_name, 'character_set_name')
        self.validate_required(self.dbdescription, 'dbdescription')
        self.validate_required(self.accounts, 'accounts')
        if self.accounts:
            self.accounts.validate()

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['DBInstanceId'] = self.dbinstance_id
        result['Engine'] = self.engine
        result['DBStatus'] = self.dbstatus
        result['CharacterSetName'] = self.character_set_name
        result['DBDescription'] = self.dbdescription
        if self.accounts is not None:
            result['Accounts'] = self.accounts.to_map()
        else:
            result['Accounts'] = None
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine = map.get('Engine')
        self.dbstatus = map.get('DBStatus')
        self.character_set_name = map.get('CharacterSetName')
        self.dbdescription = map.get('DBDescription')
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


class DescribeBinlogFilesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeBinlogFilesResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, total_file_size=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_file_size = total_file_size
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_file_size, 'total_file_size')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalFileSize'] = self.total_file_size
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
        self.total_file_size = map.get('TotalFileSize')
        if map.get('Items') is not None:
            temp_model = DescribeBinlogFilesResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeBinlogFilesResponseItemsBinLogFile(TeaModel):
    def __init__(self, file_size=None, log_begin_time=None, log_end_time=None, download_link=None, intranet_download_link=None, link_expired_time=None, checksum=None, host_instance_id=None, log_file_name=None):
        self.file_size = file_size
        self.log_begin_time = log_begin_time
        self.log_end_time = log_end_time
        self.download_link = download_link
        self.intranet_download_link = intranet_download_link
        self.link_expired_time = link_expired_time
        self.checksum = checksum
        self.host_instance_id = host_instance_id
        self.log_file_name = log_file_name

    def validate(self):
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.log_begin_time, 'log_begin_time')
        self.validate_required(self.log_end_time, 'log_end_time')
        self.validate_required(self.download_link, 'download_link')
        self.validate_required(self.intranet_download_link, 'intranet_download_link')
        self.validate_required(self.link_expired_time, 'link_expired_time')
        self.validate_required(self.checksum, 'checksum')
        self.validate_required(self.host_instance_id, 'host_instance_id')
        self.validate_required(self.log_file_name, 'log_file_name')

    def to_map(self):
        result = {}
        result['FileSize'] = self.file_size
        result['LogBeginTime'] = self.log_begin_time
        result['LogEndTime'] = self.log_end_time
        result['DownloadLink'] = self.download_link
        result['IntranetDownloadLink'] = self.intranet_download_link
        result['LinkExpiredTime'] = self.link_expired_time
        result['Checksum'] = self.checksum
        result['HostInstanceID'] = self.host_instance_id
        result['LogFileName'] = self.log_file_name
        return result

    def from_map(self, map={}):
        self.file_size = map.get('FileSize')
        self.log_begin_time = map.get('LogBeginTime')
        self.log_end_time = map.get('LogEndTime')
        self.download_link = map.get('DownloadLink')
        self.intranet_download_link = map.get('IntranetDownloadLink')
        self.link_expired_time = map.get('LinkExpiredTime')
        self.checksum = map.get('Checksum')
        self.host_instance_id = map.get('HostInstanceID')
        self.log_file_name = map.get('LogFileName')
        return self


class DescribeBinlogFilesResponseItems(TeaModel):
    def __init__(self, bin_log_file=None):
        self.bin_log_file = []

    def validate(self):
        self.validate_required(self.bin_log_file, 'bin_log_file')
        if self.bin_log_file:
            for k in self.bin_log_file:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BinLogFile'] = []
        if self.bin_log_file is not None:
            for k in self.bin_log_file:
                result['BinLogFile'].append(k.to_map() if k else None)
        else:
            result['BinLogFile'] = None
        return result

    def from_map(self, map={}):
        self.bin_log_file = []
        if map.get('BinLogFile') is not None:
            for k in map.get('BinLogFile'):
                temp_model = DescribeBinlogFilesResponseItemsBinLogFile()
                temp_model = temp_model.from_map(k)
                self.bin_log_file.append(temp_model)
        else:
            self.bin_log_file = None
        return self


class DescribeBackupTasksRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, flag=None, owner_account=None, dbinstance_id=None, backup_job_id=None, backup_mode=None, backup_job_status=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.flag = flag
        self.owner_account = owner_account
        self.dbinstance_id = dbinstance_id
        self.backup_job_id = backup_job_id
        self.backup_mode = backup_mode
        self.backup_job_status = backup_job_status

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['Flag'] = self.flag
        result['OwnerAccount'] = self.owner_account
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupJobId'] = self.backup_job_id
        result['BackupMode'] = self.backup_mode
        result['BackupJobStatus'] = self.backup_job_status
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.flag = map.get('Flag')
        self.owner_account = map.get('OwnerAccount')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_job_id = map.get('BackupJobId')
        self.backup_mode = map.get('BackupMode')
        self.backup_job_status = map.get('BackupJobStatus')
        return self


class DescribeBackupTasksResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeBackupTasksResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeBackupTasksResponseItemsBackupJob(TeaModel):
    def __init__(self, backup_progress_status=None, backup_status=None, job_mode=None, process=None, task_action=None, backup_job_id=None, backup_id=None):
        self.backup_progress_status = backup_progress_status
        self.backup_status = backup_status
        self.job_mode = job_mode
        self.process = process
        self.task_action = task_action
        self.backup_job_id = backup_job_id
        self.backup_id = backup_id

    def validate(self):
        self.validate_required(self.backup_progress_status, 'backup_progress_status')
        self.validate_required(self.backup_status, 'backup_status')
        self.validate_required(self.job_mode, 'job_mode')
        self.validate_required(self.process, 'process')
        self.validate_required(self.task_action, 'task_action')
        self.validate_required(self.backup_job_id, 'backup_job_id')
        self.validate_required(self.backup_id, 'backup_id')

    def to_map(self):
        result = {}
        result['BackupProgressStatus'] = self.backup_progress_status
        result['BackupStatus'] = self.backup_status
        result['JobMode'] = self.job_mode
        result['Process'] = self.process
        result['TaskAction'] = self.task_action
        result['BackupJobId'] = self.backup_job_id
        result['BackupId'] = self.backup_id
        return result

    def from_map(self, map={}):
        self.backup_progress_status = map.get('BackupProgressStatus')
        self.backup_status = map.get('BackupStatus')
        self.job_mode = map.get('JobMode')
        self.process = map.get('Process')
        self.task_action = map.get('TaskAction')
        self.backup_job_id = map.get('BackupJobId')
        self.backup_id = map.get('BackupId')
        return self


class DescribeBackupTasksResponseItems(TeaModel):
    def __init__(self, backup_job=None):
        self.backup_job = []

    def validate(self):
        self.validate_required(self.backup_job, 'backup_job')
        if self.backup_job:
            for k in self.backup_job:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BackupJob'] = []
        if self.backup_job is not None:
            for k in self.backup_job:
                result['BackupJob'].append(k.to_map() if k else None)
        else:
            result['BackupJob'] = None
        return result

    def from_map(self, map={}):
        self.backup_job = []
        if map.get('BackupJob') is not None:
            for k in map.get('BackupJob'):
                temp_model = DescribeBackupTasksResponseItemsBackupJob()
                temp_model = temp_model.from_map(k)
                self.backup_job.append(temp_model)
        else:
            self.backup_job = None
        return self


class DescribeBackupsRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, backup_id=None, backup_status=None, backup_mode=None, start_time=None, end_time=None, page_size=None, page_number=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.backup_status = backup_status
        self.backup_mode = backup_mode
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['BackupStatus'] = self.backup_status
        result['BackupMode'] = self.backup_mode
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.backup_status = map.get('BackupStatus')
        self.backup_mode = map.get('BackupMode')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeBackupsResponse(TeaModel):
    def __init__(self, request_id=None, total_record_count=None, page_number=None, page_record_count=None, total_backup_size=None, total_ecs_snapshot_size=None, items=None):
        self.request_id = request_id
        self.total_record_count = total_record_count
        self.page_number = page_number
        self.page_record_count = page_record_count
        self.total_backup_size = total_backup_size
        self.total_ecs_snapshot_size = total_ecs_snapshot_size
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_record_count, 'total_record_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_record_count, 'page_record_count')
        self.validate_required(self.total_backup_size, 'total_backup_size')
        self.validate_required(self.total_ecs_snapshot_size, 'total_ecs_snapshot_size')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalRecordCount'] = self.total_record_count
        result['PageNumber'] = self.page_number
        result['PageRecordCount'] = self.page_record_count
        result['TotalBackupSize'] = self.total_backup_size
        result['TotalEcsSnapshotSize'] = self.total_ecs_snapshot_size
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
        self.total_backup_size = map.get('TotalBackupSize')
        self.total_ecs_snapshot_size = map.get('TotalEcsSnapshotSize')
        if map.get('Items') is not None:
            temp_model = DescribeBackupsResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeBackupsResponseItemsBackup(TeaModel):
    def __init__(self, backup_id=None, dbinstance_id=None, backup_status=None, backup_start_time=None, backup_end_time=None, backup_type=None, backup_mode=None, backup_method=None, backup_download_url=None, backup_intranet_download_url=None, backup_location=None, backup_extraction_status=None, backup_scale=None, backup_dbnames=None, total_backup_size=None, backup_size=None, host_instance_id=None, store_status=None, meta_status=None, slave_status=None, consistent_time=None, backup_initiator=None, copy_only_backup=None, storage_class=None):
        self.backup_id = backup_id
        self.dbinstance_id = dbinstance_id
        self.backup_status = backup_status
        self.backup_start_time = backup_start_time
        self.backup_end_time = backup_end_time
        self.backup_type = backup_type
        self.backup_mode = backup_mode
        self.backup_method = backup_method
        self.backup_download_url = backup_download_url
        self.backup_intranet_download_url = backup_intranet_download_url
        self.backup_location = backup_location
        self.backup_extraction_status = backup_extraction_status
        self.backup_scale = backup_scale
        self.backup_dbnames = backup_dbnames
        self.total_backup_size = total_backup_size
        self.backup_size = backup_size
        self.host_instance_id = host_instance_id
        self.store_status = store_status
        self.meta_status = meta_status
        self.slave_status = slave_status
        self.consistent_time = consistent_time
        self.backup_initiator = backup_initiator
        self.copy_only_backup = copy_only_backup
        self.storage_class = storage_class

    def validate(self):
        self.validate_required(self.backup_id, 'backup_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.backup_status, 'backup_status')
        self.validate_required(self.backup_start_time, 'backup_start_time')
        self.validate_required(self.backup_end_time, 'backup_end_time')
        self.validate_required(self.backup_type, 'backup_type')
        self.validate_required(self.backup_mode, 'backup_mode')
        self.validate_required(self.backup_method, 'backup_method')
        self.validate_required(self.backup_download_url, 'backup_download_url')
        self.validate_required(self.backup_intranet_download_url, 'backup_intranet_download_url')
        self.validate_required(self.backup_location, 'backup_location')
        self.validate_required(self.backup_extraction_status, 'backup_extraction_status')
        self.validate_required(self.backup_scale, 'backup_scale')
        self.validate_required(self.backup_dbnames, 'backup_dbnames')
        self.validate_required(self.total_backup_size, 'total_backup_size')
        self.validate_required(self.backup_size, 'backup_size')
        self.validate_required(self.host_instance_id, 'host_instance_id')
        self.validate_required(self.store_status, 'store_status')
        self.validate_required(self.meta_status, 'meta_status')
        self.validate_required(self.slave_status, 'slave_status')
        self.validate_required(self.consistent_time, 'consistent_time')
        self.validate_required(self.backup_initiator, 'backup_initiator')
        self.validate_required(self.copy_only_backup, 'copy_only_backup')
        self.validate_required(self.storage_class, 'storage_class')

    def to_map(self):
        result = {}
        result['BackupId'] = self.backup_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupStatus'] = self.backup_status
        result['BackupStartTime'] = self.backup_start_time
        result['BackupEndTime'] = self.backup_end_time
        result['BackupType'] = self.backup_type
        result['BackupMode'] = self.backup_mode
        result['BackupMethod'] = self.backup_method
        result['BackupDownloadURL'] = self.backup_download_url
        result['BackupIntranetDownloadURL'] = self.backup_intranet_download_url
        result['BackupLocation'] = self.backup_location
        result['BackupExtractionStatus'] = self.backup_extraction_status
        result['BackupScale'] = self.backup_scale
        result['BackupDBNames'] = self.backup_dbnames
        result['TotalBackupSize'] = self.total_backup_size
        result['BackupSize'] = self.backup_size
        result['HostInstanceID'] = self.host_instance_id
        result['StoreStatus'] = self.store_status
        result['MetaStatus'] = self.meta_status
        result['SlaveStatus'] = self.slave_status
        result['ConsistentTime'] = self.consistent_time
        result['BackupInitiator'] = self.backup_initiator
        result['CopyOnlyBackup'] = self.copy_only_backup
        result['StorageClass'] = self.storage_class
        return result

    def from_map(self, map={}):
        self.backup_id = map.get('BackupId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_status = map.get('BackupStatus')
        self.backup_start_time = map.get('BackupStartTime')
        self.backup_end_time = map.get('BackupEndTime')
        self.backup_type = map.get('BackupType')
        self.backup_mode = map.get('BackupMode')
        self.backup_method = map.get('BackupMethod')
        self.backup_download_url = map.get('BackupDownloadURL')
        self.backup_intranet_download_url = map.get('BackupIntranetDownloadURL')
        self.backup_location = map.get('BackupLocation')
        self.backup_extraction_status = map.get('BackupExtractionStatus')
        self.backup_scale = map.get('BackupScale')
        self.backup_dbnames = map.get('BackupDBNames')
        self.total_backup_size = map.get('TotalBackupSize')
        self.backup_size = map.get('BackupSize')
        self.host_instance_id = map.get('HostInstanceID')
        self.store_status = map.get('StoreStatus')
        self.meta_status = map.get('MetaStatus')
        self.slave_status = map.get('SlaveStatus')
        self.consistent_time = map.get('ConsistentTime')
        self.backup_initiator = map.get('BackupInitiator')
        self.copy_only_backup = map.get('CopyOnlyBackup')
        self.storage_class = map.get('StorageClass')
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


class DescribeBackupPolicyRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_policy_mode=None, owner_account=None, compress_type=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_policy_mode = backup_policy_mode
        self.owner_account = owner_account
        self.compress_type = compress_type

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupPolicyMode'] = self.backup_policy_mode
        result['OwnerAccount'] = self.owner_account
        result['CompressType'] = self.compress_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_policy_mode = map.get('BackupPolicyMode')
        self.owner_account = map.get('OwnerAccount')
        self.compress_type = map.get('CompressType')
        return self


class DescribeBackupPolicyResponse(TeaModel):
    def __init__(self, request_id=None, backup_retention_period=None, preferred_next_backup_time=None, preferred_backup_time=None, preferred_backup_period=None, backup_log=None, log_backup_retention_period=None, enable_backup_log=None, local_log_retention_hours=None, local_log_retention_space=None, duplication=None, duplication_content=None, high_space_usage_protection=None, log_backup_frequency=None, compress_type=None, archive_backup_retention_period=None, archive_backup_keep_policy=None, archive_backup_keep_count=None, released_keep_policy=None, log_backup_local_retention_number=None, duplication_location=None):
        self.request_id = request_id
        self.backup_retention_period = backup_retention_period
        self.preferred_next_backup_time = preferred_next_backup_time
        self.preferred_backup_time = preferred_backup_time
        self.preferred_backup_period = preferred_backup_period
        self.backup_log = backup_log
        self.log_backup_retention_period = log_backup_retention_period
        self.enable_backup_log = enable_backup_log
        self.local_log_retention_hours = local_log_retention_hours
        self.local_log_retention_space = local_log_retention_space
        self.duplication = duplication
        self.duplication_content = duplication_content
        self.high_space_usage_protection = high_space_usage_protection
        self.log_backup_frequency = log_backup_frequency
        self.compress_type = compress_type
        self.archive_backup_retention_period = archive_backup_retention_period
        self.archive_backup_keep_policy = archive_backup_keep_policy
        self.archive_backup_keep_count = archive_backup_keep_count
        self.released_keep_policy = released_keep_policy
        self.log_backup_local_retention_number = log_backup_local_retention_number
        self.duplication_location = duplication_location

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.backup_retention_period, 'backup_retention_period')
        self.validate_required(self.preferred_next_backup_time, 'preferred_next_backup_time')
        self.validate_required(self.preferred_backup_time, 'preferred_backup_time')
        self.validate_required(self.preferred_backup_period, 'preferred_backup_period')
        self.validate_required(self.backup_log, 'backup_log')
        self.validate_required(self.log_backup_retention_period, 'log_backup_retention_period')
        self.validate_required(self.enable_backup_log, 'enable_backup_log')
        self.validate_required(self.local_log_retention_hours, 'local_log_retention_hours')
        self.validate_required(self.local_log_retention_space, 'local_log_retention_space')
        self.validate_required(self.duplication, 'duplication')
        self.validate_required(self.duplication_content, 'duplication_content')
        self.validate_required(self.high_space_usage_protection, 'high_space_usage_protection')
        self.validate_required(self.log_backup_frequency, 'log_backup_frequency')
        self.validate_required(self.compress_type, 'compress_type')
        self.validate_required(self.archive_backup_retention_period, 'archive_backup_retention_period')
        self.validate_required(self.archive_backup_keep_policy, 'archive_backup_keep_policy')
        self.validate_required(self.archive_backup_keep_count, 'archive_backup_keep_count')
        self.validate_required(self.released_keep_policy, 'released_keep_policy')
        self.validate_required(self.log_backup_local_retention_number, 'log_backup_local_retention_number')
        self.validate_required(self.duplication_location, 'duplication_location')
        if self.duplication_location:
            self.duplication_location.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['BackupRetentionPeriod'] = self.backup_retention_period
        result['PreferredNextBackupTime'] = self.preferred_next_backup_time
        result['PreferredBackupTime'] = self.preferred_backup_time
        result['PreferredBackupPeriod'] = self.preferred_backup_period
        result['BackupLog'] = self.backup_log
        result['LogBackupRetentionPeriod'] = self.log_backup_retention_period
        result['EnableBackupLog'] = self.enable_backup_log
        result['LocalLogRetentionHours'] = self.local_log_retention_hours
        result['LocalLogRetentionSpace'] = self.local_log_retention_space
        result['Duplication'] = self.duplication
        result['DuplicationContent'] = self.duplication_content
        result['HighSpaceUsageProtection'] = self.high_space_usage_protection
        result['LogBackupFrequency'] = self.log_backup_frequency
        result['CompressType'] = self.compress_type
        result['ArchiveBackupRetentionPeriod'] = self.archive_backup_retention_period
        result['ArchiveBackupKeepPolicy'] = self.archive_backup_keep_policy
        result['ArchiveBackupKeepCount'] = self.archive_backup_keep_count
        result['ReleasedKeepPolicy'] = self.released_keep_policy
        result['LogBackupLocalRetentionNumber'] = self.log_backup_local_retention_number
        if self.duplication_location is not None:
            result['DuplicationLocation'] = self.duplication_location.to_map()
        else:
            result['DuplicationLocation'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.backup_retention_period = map.get('BackupRetentionPeriod')
        self.preferred_next_backup_time = map.get('PreferredNextBackupTime')
        self.preferred_backup_time = map.get('PreferredBackupTime')
        self.preferred_backup_period = map.get('PreferredBackupPeriod')
        self.backup_log = map.get('BackupLog')
        self.log_backup_retention_period = map.get('LogBackupRetentionPeriod')
        self.enable_backup_log = map.get('EnableBackupLog')
        self.local_log_retention_hours = map.get('LocalLogRetentionHours')
        self.local_log_retention_space = map.get('LocalLogRetentionSpace')
        self.duplication = map.get('Duplication')
        self.duplication_content = map.get('DuplicationContent')
        self.high_space_usage_protection = map.get('HighSpaceUsageProtection')
        self.log_backup_frequency = map.get('LogBackupFrequency')
        self.compress_type = map.get('CompressType')
        self.archive_backup_retention_period = map.get('ArchiveBackupRetentionPeriod')
        self.archive_backup_keep_policy = map.get('ArchiveBackupKeepPolicy')
        self.archive_backup_keep_count = map.get('ArchiveBackupKeepCount')
        self.released_keep_policy = map.get('ReleasedKeepPolicy')
        self.log_backup_local_retention_number = map.get('LogBackupLocalRetentionNumber')
        if map.get('DuplicationLocation') is not None:
            temp_model = DescribeBackupPolicyResponseDuplicationLocation()
            self.duplication_location = temp_model.from_map(map['DuplicationLocation'])
        else:
            self.duplication_location = None
        return self


class DescribeBackupPolicyResponseDuplicationLocationLocation(TeaModel):
    def __init__(self, endpoint=None, bucket=None):
        self.endpoint = endpoint
        self.bucket = bucket

    def validate(self):
        self.validate_required(self.endpoint, 'endpoint')
        self.validate_required(self.bucket, 'bucket')

    def to_map(self):
        result = {}
        result['Endpoint'] = self.endpoint
        result['Bucket'] = self.bucket
        return result

    def from_map(self, map={}):
        self.endpoint = map.get('Endpoint')
        self.bucket = map.get('Bucket')
        return self


class DescribeBackupPolicyResponseDuplicationLocation(TeaModel):
    def __init__(self, sotrage=None, location=None):
        self.sotrage = sotrage
        self.location = location

    def validate(self):
        self.validate_required(self.sotrage, 'sotrage')
        self.validate_required(self.location, 'location')
        if self.location:
            self.location.validate()

    def to_map(self):
        result = {}
        result['Sotrage'] = self.sotrage
        if self.location is not None:
            result['Location'] = self.location.to_map()
        else:
            result['Location'] = None
        return result

    def from_map(self, map={}):
        self.sotrage = map.get('Sotrage')
        if map.get('Location') is not None:
            temp_model = DescribeBackupPolicyResponseDuplicationLocationLocation()
            self.location = temp_model.from_map(map['Location'])
        else:
            self.location = None
        return self


class DescribeAccountsRequest(TeaModel):
    def __init__(self, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, page_size=None, page_number=None):
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeAccountsResponse(TeaModel):
    def __init__(self, request_id=None, system_admin_account_status=None, system_admin_account_first_activation_time=None, accounts=None):
        self.request_id = request_id
        self.system_admin_account_status = system_admin_account_status
        self.system_admin_account_first_activation_time = system_admin_account_first_activation_time
        self.accounts = accounts

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.system_admin_account_status, 'system_admin_account_status')
        self.validate_required(self.system_admin_account_first_activation_time, 'system_admin_account_first_activation_time')
        self.validate_required(self.accounts, 'accounts')
        if self.accounts:
            self.accounts.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SystemAdminAccountStatus'] = self.system_admin_account_status
        result['SystemAdminAccountFirstActivationTime'] = self.system_admin_account_first_activation_time
        if self.accounts is not None:
            result['Accounts'] = self.accounts.to_map()
        else:
            result['Accounts'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.system_admin_account_status = map.get('SystemAdminAccountStatus')
        self.system_admin_account_first_activation_time = map.get('SystemAdminAccountFirstActivationTime')
        if map.get('Accounts') is not None:
            temp_model = DescribeAccountsResponseAccounts()
            self.accounts = temp_model.from_map(map['Accounts'])
        else:
            self.accounts = None
        return self


class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege(TeaModel):
    def __init__(self, dbname=None, account_privilege=None, account_privilege_detail=None):
        self.dbname = dbname
        self.account_privilege = account_privilege
        self.account_privilege_detail = account_privilege_detail

    def validate(self):
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.account_privilege, 'account_privilege')
        self.validate_required(self.account_privilege_detail, 'account_privilege_detail')

    def to_map(self):
        result = {}
        result['DBName'] = self.dbname
        result['AccountPrivilege'] = self.account_privilege
        result['AccountPrivilegeDetail'] = self.account_privilege_detail
        return result

    def from_map(self, map={}):
        self.dbname = map.get('DBName')
        self.account_privilege = map.get('AccountPrivilege')
        self.account_privilege_detail = map.get('AccountPrivilegeDetail')
        return self


class DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges(TeaModel):
    def __init__(self, database_privilege=None):
        self.database_privilege = []

    def validate(self):
        self.validate_required(self.database_privilege, 'database_privilege')
        if self.database_privilege:
            for k in self.database_privilege:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DatabasePrivilege'] = []
        if self.database_privilege is not None:
            for k in self.database_privilege:
                result['DatabasePrivilege'].append(k.to_map() if k else None)
        else:
            result['DatabasePrivilege'] = None
        return result

    def from_map(self, map={}):
        self.database_privilege = []
        if map.get('DatabasePrivilege') is not None:
            for k in map.get('DatabasePrivilege'):
                temp_model = DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivilegesDatabasePrivilege()
                temp_model = temp_model.from_map(k)
                self.database_privilege.append(temp_model)
        else:
            self.database_privilege = None
        return self


class DescribeAccountsResponseAccountsDBInstanceAccount(TeaModel):
    def __init__(self, dbinstance_id=None, account_name=None, account_status=None, account_type=None, account_description=None, priv_exceeded=None, database_privileges=None):
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_status = account_status
        self.account_type = account_type
        self.account_description = account_description
        self.priv_exceeded = priv_exceeded
        self.database_privileges = database_privileges

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_status, 'account_status')
        self.validate_required(self.account_type, 'account_type')
        self.validate_required(self.account_description, 'account_description')
        self.validate_required(self.priv_exceeded, 'priv_exceeded')
        self.validate_required(self.database_privileges, 'database_privileges')
        if self.database_privileges:
            self.database_privileges.validate()

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountStatus'] = self.account_status
        result['AccountType'] = self.account_type
        result['AccountDescription'] = self.account_description
        result['PrivExceeded'] = self.priv_exceeded
        if self.database_privileges is not None:
            result['DatabasePrivileges'] = self.database_privileges.to_map()
        else:
            result['DatabasePrivileges'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_status = map.get('AccountStatus')
        self.account_type = map.get('AccountType')
        self.account_description = map.get('AccountDescription')
        self.priv_exceeded = map.get('PrivExceeded')
        if map.get('DatabasePrivileges') is not None:
            temp_model = DescribeAccountsResponseAccountsDBInstanceAccountDatabasePrivileges()
            self.database_privileges = temp_model.from_map(map['DatabasePrivileges'])
        else:
            self.database_privileges = None
        return self


class DescribeAccountsResponseAccounts(TeaModel):
    def __init__(self, dbinstance_account=None):
        self.dbinstance_account = []

    def validate(self):
        self.validate_required(self.dbinstance_account, 'dbinstance_account')
        if self.dbinstance_account:
            for k in self.dbinstance_account:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceAccount'] = []
        if self.dbinstance_account is not None:
            for k in self.dbinstance_account:
                result['DBInstanceAccount'].append(k.to_map() if k else None)
        else:
            result['DBInstanceAccount'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_account = []
        if map.get('DBInstanceAccount') is not None:
            for k in map.get('DBInstanceAccount'):
                temp_model = DescribeAccountsResponseAccountsDBInstanceAccount()
                temp_model = temp_model.from_map(k)
                self.dbinstance_account.append(temp_model)
        else:
            self.dbinstance_account = None
        return self


class DescibeImportsFromDatabaseRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, engine=None, import_id=None, start_time=None, end_time=None, page_size=None, page_number=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.engine = engine
        self.import_id = import_id
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page_number = page_number
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['Engine'] = self.engine
        result['ImportId'] = self.import_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.engine = map.get('Engine')
        self.import_id = map.get('ImportId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescibeImportsFromDatabaseResponse(TeaModel):
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
            temp_model = DescibeImportsFromDatabaseResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescibeImportsFromDatabaseResponseItemsImportResultFromDB(TeaModel):
    def __init__(self, import_id=None, import_data_type=None, import_data_status=None, import_data_status_description=None, incremental_importing_time=None):
        self.import_id = import_id
        self.import_data_type = import_data_type
        self.import_data_status = import_data_status
        self.import_data_status_description = import_data_status_description
        self.incremental_importing_time = incremental_importing_time

    def validate(self):
        self.validate_required(self.import_id, 'import_id')
        self.validate_required(self.import_data_type, 'import_data_type')
        self.validate_required(self.import_data_status, 'import_data_status')
        self.validate_required(self.import_data_status_description, 'import_data_status_description')
        self.validate_required(self.incremental_importing_time, 'incremental_importing_time')

    def to_map(self):
        result = {}
        result['ImportId'] = self.import_id
        result['ImportDataType'] = self.import_data_type
        result['ImportDataStatus'] = self.import_data_status
        result['ImportDataStatusDescription'] = self.import_data_status_description
        result['IncrementalImportingTime'] = self.incremental_importing_time
        return result

    def from_map(self, map={}):
        self.import_id = map.get('ImportId')
        self.import_data_type = map.get('ImportDataType')
        self.import_data_status = map.get('ImportDataStatus')
        self.import_data_status_description = map.get('ImportDataStatusDescription')
        self.incremental_importing_time = map.get('IncrementalImportingTime')
        return self


class DescibeImportsFromDatabaseResponseItems(TeaModel):
    def __init__(self, import_result_from_db=None):
        self.import_result_from_db = []

    def validate(self):
        self.validate_required(self.import_result_from_db, 'import_result_from_db')
        if self.import_result_from_db:
            for k in self.import_result_from_db:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ImportResultFromDB'] = []
        if self.import_result_from_db is not None:
            for k in self.import_result_from_db:
                result['ImportResultFromDB'].append(k.to_map() if k else None)
        else:
            result['ImportResultFromDB'] = None
        return result

    def from_map(self, map={}):
        self.import_result_from_db = []
        if map.get('ImportResultFromDB') is not None:
            for k in map.get('ImportResultFromDB'):
                temp_model = DescibeImportsFromDatabaseResponseItemsImportResultFromDB()
                temp_model = temp_model.from_map(k)
                self.import_result_from_db.append(temp_model)
        else:
            self.import_result_from_db = None
        return self


class DeleteDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.owner_account = map.get('OwnerAccount')
        return self


class DeleteDBInstanceResponse(TeaModel):
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


class DeleteDatabaseRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, dbname=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
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
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.owner_account = map.get('OwnerAccount')
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


class CreateTempDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, backup_id=None, restore_time=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.backup_id = backup_id
        self.restore_time = restore_time
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['BackupId'] = self.backup_id
        result['RestoreTime'] = self.restore_time
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.backup_id = map.get('BackupId')
        self.restore_time = map.get('RestoreTime')
        self.owner_account = map.get('OwnerAccount')
        return self


class CreateTempDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, temp_dbinstance_id=None):
        self.request_id = request_id
        self.temp_dbinstance_id = temp_dbinstance_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.temp_dbinstance_id, 'temp_dbinstance_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TempDBInstanceId'] = self.temp_dbinstance_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.temp_dbinstance_id = map.get('TempDBInstanceId')
        return self


class CreateDatabaseRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, dbname=None, character_set_name=None, dbdescription=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.character_set_name = character_set_name
        self.dbdescription = dbdescription
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')
        self.validate_required(self.character_set_name, 'character_set_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['CharacterSetName'] = self.character_set_name
        result['DBDescription'] = self.dbdescription
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.character_set_name = map.get('CharacterSetName')
        self.dbdescription = map.get('DBDescription')
        self.owner_account = map.get('OwnerAccount')
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


class CreateBackupRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, dbname=None, backup_strategy=None, backup_method=None, backup_type=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.backup_strategy = backup_strategy
        self.backup_method = backup_method
        self.backup_type = backup_type

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['BackupStrategy'] = self.backup_strategy
        result['BackupMethod'] = self.backup_method
        result['BackupType'] = self.backup_type
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.backup_strategy = map.get('BackupStrategy')
        self.backup_method = map.get('BackupMethod')
        self.backup_type = map.get('BackupType')
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
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, account_name=None, account_password=None, account_description=None, account_type=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.account_password = account_password
        self.account_description = account_description
        self.account_type = account_type
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')
        self.validate_required(self.account_password, 'account_password')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['AccountPassword'] = self.account_password
        result['AccountDescription'] = self.account_description
        result['AccountType'] = self.account_type
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.account_password = map.get('AccountPassword')
        self.account_description = map.get('AccountDescription')
        self.account_type = map.get('AccountType')
        self.owner_account = map.get('OwnerAccount')
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


class CheckDBNameAvailableRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, dbname=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.dbname = dbname
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbname, 'dbname')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['DBName'] = self.dbname
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbname = map.get('DBName')
        self.owner_account = map.get('OwnerAccount')
        return self


class CheckDBNameAvailableResponse(TeaModel):
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


class CheckAccountNameAvailableRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, account_name=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.account_name = account_name
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.account_name, 'account_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['AccountName'] = self.account_name
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.account_name = map.get('AccountName')
        self.owner_account = map.get('OwnerAccount')
        return self


class CheckAccountNameAvailableResponse(TeaModel):
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


class CancelImportRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, import_id=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.import_id = import_id
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.import_id, 'import_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ImportId'] = self.import_id
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.import_id = map.get('ImportId')
        self.owner_account = map.get('OwnerAccount')
        return self


class CancelImportResponse(TeaModel):
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


class AddTagsToResourceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, region_id=None, dbinstance_id=None, tags=None, tag=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.region_id = region_id
        self.dbinstance_id = dbinstance_id
        self.tags = tags
        self.tag = []
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['RegionId'] = self.region_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Tags'] = self.tags
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.region_id = map.get('RegionId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.tags = map.get('Tags')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = AddTagsToResourceRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.owner_account = map.get('OwnerAccount')
        return self


class AddTagsToResourceRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class AddTagsToResourceResponse(TeaModel):
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


class SwitchDBInstanceNetTypeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, connection_string_prefix=None, port=None, connection_string_type=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.connection_string_prefix = connection_string_prefix
        self.port = port
        self.connection_string_type = connection_string_type
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.connection_string_prefix, 'connection_string_prefix')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['Port'] = self.port
        result['ConnectionStringType'] = self.connection_string_type
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.port = map.get('Port')
        self.connection_string_type = map.get('ConnectionStringType')
        self.owner_account = map.get('OwnerAccount')
        return self


class SwitchDBInstanceNetTypeResponse(TeaModel):
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


class ReleaseInstancePublicConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, current_connection_string=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.current_connection_string = current_connection_string
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.current_connection_string, 'current_connection_string')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['CurrentConnectionString'] = self.current_connection_string
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.current_connection_string = map.get('CurrentConnectionString')
        self.owner_account = map.get('OwnerAccount')
        return self


class ReleaseInstancePublicConnectionResponse(TeaModel):
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


class ModifyDBInstanceNetworkTypeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, retain_classic=None, classic_expired_days=None, instance_network_type=None, read_write_splitting_classic_expired_days=None, vpcid=None, vswitch_id=None, private_ip_address=None, read_write_splitting_private_ip_address=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.retain_classic = retain_classic
        self.classic_expired_days = classic_expired_days
        self.instance_network_type = instance_network_type
        self.read_write_splitting_classic_expired_days = read_write_splitting_classic_expired_days
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.read_write_splitting_private_ip_address = read_write_splitting_private_ip_address
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.instance_network_type, 'instance_network_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['RetainClassic'] = self.retain_classic
        result['ClassicExpiredDays'] = self.classic_expired_days
        result['InstanceNetworkType'] = self.instance_network_type
        result['ReadWriteSplittingClassicExpiredDays'] = self.read_write_splitting_classic_expired_days
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['ReadWriteSplittingPrivateIpAddress'] = self.read_write_splitting_private_ip_address
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.retain_classic = map.get('RetainClassic')
        self.classic_expired_days = map.get('ClassicExpiredDays')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.read_write_splitting_classic_expired_days = map.get('ReadWriteSplittingClassicExpiredDays')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.read_write_splitting_private_ip_address = map.get('ReadWriteSplittingPrivateIpAddress')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceNetworkTypeResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None):
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class ModifyDBInstanceConnectionStringRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, current_connection_string=None, connection_string_prefix=None, port=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.current_connection_string = current_connection_string
        self.connection_string_prefix = connection_string_prefix
        self.port = port
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.current_connection_string, 'current_connection_string')
        self.validate_required(self.connection_string_prefix, 'connection_string_prefix')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['CurrentConnectionString'] = self.current_connection_string
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['Port'] = self.port
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.current_connection_string = map.get('CurrentConnectionString')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.port = map.get('Port')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceConnectionStringResponse(TeaModel):
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


class ModifyDBInstanceConnectionModeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, connection_mode=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.connection_mode = connection_mode
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.connection_mode, 'connection_mode')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionMode'] = self.connection_mode
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_mode = map.get('ConnectionMode')
        self.owner_account = map.get('OwnerAccount')
        return self


class ModifyDBInstanceConnectionModeResponse(TeaModel):
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


class DescribeDBInstanceNetInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, dbinstance_id=None, flag=None, dbinstance_net_rwsplit_type=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.dbinstance_id = dbinstance_id
        self.flag = flag
        self.dbinstance_net_rwsplit_type = dbinstance_net_rwsplit_type
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['DBInstanceId'] = self.dbinstance_id
        result['Flag'] = self.flag
        result['DBInstanceNetRWSplitType'] = self.dbinstance_net_rwsplit_type
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.dbinstance_id = map.get('DBInstanceId')
        self.flag = map.get('Flag')
        self.dbinstance_net_rwsplit_type = map.get('DBInstanceNetRWSplitType')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstanceNetInfoResponse(TeaModel):
    def __init__(self, request_id=None, instance_network_type=None, security_ipmode=None, dbinstance_net_infos=None):
        self.request_id = request_id
        self.instance_network_type = instance_network_type
        self.security_ipmode = security_ipmode
        self.dbinstance_net_infos = dbinstance_net_infos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.instance_network_type, 'instance_network_type')
        self.validate_required(self.security_ipmode, 'security_ipmode')
        self.validate_required(self.dbinstance_net_infos, 'dbinstance_net_infos')
        if self.dbinstance_net_infos:
            self.dbinstance_net_infos.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['SecurityIPMode'] = self.security_ipmode
        if self.dbinstance_net_infos is not None:
            result['DBInstanceNetInfos'] = self.dbinstance_net_infos.to_map()
        else:
            result['DBInstanceNetInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.security_ipmode = map.get('SecurityIPMode')
        if map.get('DBInstanceNetInfos') is not None:
            temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfos()
            self.dbinstance_net_infos = temp_model.from_map(map['DBInstanceNetInfos'])
        else:
            self.dbinstance_net_infos = None
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup(TeaModel):
    def __init__(self, security_ipgroup_name=None, security_ips=None):
        self.security_ipgroup_name = security_ipgroup_name
        self.security_ips = security_ips

    def validate(self):
        self.validate_required(self.security_ipgroup_name, 'security_ipgroup_name')
        self.validate_required(self.security_ips, 'security_ips')

    def to_map(self):
        result = {}
        result['SecurityIPGroupName'] = self.security_ipgroup_name
        result['SecurityIPs'] = self.security_ips
        return result

    def from_map(self, map={}):
        self.security_ipgroup_name = map.get('SecurityIPGroupName')
        self.security_ips = map.get('SecurityIPs')
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups(TeaModel):
    def __init__(self, security_ipgroup=None):
        self.security_ipgroup = []

    def validate(self):
        self.validate_required(self.security_ipgroup, 'security_ipgroup')
        if self.security_ipgroup:
            for k in self.security_ipgroup:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['securityIPGroup'] = []
        if self.security_ipgroup is not None:
            for k in self.security_ipgroup:
                result['securityIPGroup'].append(k.to_map() if k else None)
        else:
            result['securityIPGroup'] = None
        return result

    def from_map(self, map={}):
        self.security_ipgroup = []
        if map.get('securityIPGroup') is not None:
            for k in map.get('securityIPGroup'):
                temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroupsSecurityIPGroup()
                temp_model = temp_model.from_map(k)
                self.security_ipgroup.append(temp_model)
        else:
            self.security_ipgroup = None
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight(TeaModel):
    def __init__(self, dbinstance_id=None, dbinstance_type=None, availability=None, weight=None):
        self.dbinstance_id = dbinstance_id
        self.dbinstance_type = dbinstance_type
        self.availability = availability
        self.weight = weight

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.availability, 'availability')
        self.validate_required(self.weight, 'weight')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceType'] = self.dbinstance_type
        result['Availability'] = self.availability
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_type = map.get('DBInstanceType')
        self.availability = map.get('Availability')
        self.weight = map.get('Weight')
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights(TeaModel):
    def __init__(self, dbinstance_weight=None):
        self.dbinstance_weight = []

    def validate(self):
        self.validate_required(self.dbinstance_weight, 'dbinstance_weight')
        if self.dbinstance_weight:
            for k in self.dbinstance_weight:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceWeight'] = []
        if self.dbinstance_weight is not None:
            for k in self.dbinstance_weight:
                result['DBInstanceWeight'].append(k.to_map() if k else None)
        else:
            result['DBInstanceWeight'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_weight = []
        if map.get('DBInstanceWeight') is not None:
            for k in map.get('DBInstanceWeight'):
                temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeightsDBInstanceWeight()
                temp_model = temp_model.from_map(k)
                self.dbinstance_weight.append(temp_model)
        else:
            self.dbinstance_weight = None
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo(TeaModel):
    def __init__(self, upgradeable=None, expired_time=None, connection_string=None, ipaddress=None, iptype=None, port=None, vpcid=None, vswitch_id=None, connection_string_type=None, max_delay_time=None, distribution_type=None, security_ipgroups=None, dbinstance_weights=None):
        self.upgradeable = upgradeable
        self.expired_time = expired_time
        self.connection_string = connection_string
        self.ipaddress = ipaddress
        self.iptype = iptype
        self.port = port
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.connection_string_type = connection_string_type
        self.max_delay_time = max_delay_time
        self.distribution_type = distribution_type
        self.security_ipgroups = security_ipgroups
        self.dbinstance_weights = dbinstance_weights

    def validate(self):
        self.validate_required(self.upgradeable, 'upgradeable')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.ipaddress, 'ipaddress')
        self.validate_required(self.iptype, 'iptype')
        self.validate_required(self.port, 'port')
        self.validate_required(self.vpcid, 'vpcid')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.connection_string_type, 'connection_string_type')
        self.validate_required(self.max_delay_time, 'max_delay_time')
        self.validate_required(self.distribution_type, 'distribution_type')
        self.validate_required(self.security_ipgroups, 'security_ipgroups')
        if self.security_ipgroups:
            self.security_ipgroups.validate()
        self.validate_required(self.dbinstance_weights, 'dbinstance_weights')
        if self.dbinstance_weights:
            self.dbinstance_weights.validate()

    def to_map(self):
        result = {}
        result['Upgradeable'] = self.upgradeable
        result['ExpiredTime'] = self.expired_time
        result['ConnectionString'] = self.connection_string
        result['IPAddress'] = self.ipaddress
        result['IPType'] = self.iptype
        result['Port'] = self.port
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['ConnectionStringType'] = self.connection_string_type
        result['MaxDelayTime'] = self.max_delay_time
        result['DistributionType'] = self.distribution_type
        if self.security_ipgroups is not None:
            result['SecurityIPGroups'] = self.security_ipgroups.to_map()
        else:
            result['SecurityIPGroups'] = None
        if self.dbinstance_weights is not None:
            result['DBInstanceWeights'] = self.dbinstance_weights.to_map()
        else:
            result['DBInstanceWeights'] = None
        return result

    def from_map(self, map={}):
        self.upgradeable = map.get('Upgradeable')
        self.expired_time = map.get('ExpiredTime')
        self.connection_string = map.get('ConnectionString')
        self.ipaddress = map.get('IPAddress')
        self.iptype = map.get('IPType')
        self.port = map.get('Port')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.connection_string_type = map.get('ConnectionStringType')
        self.max_delay_time = map.get('MaxDelayTime')
        self.distribution_type = map.get('DistributionType')
        if map.get('SecurityIPGroups') is not None:
            temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoSecurityIPGroups()
            self.security_ipgroups = temp_model.from_map(map['SecurityIPGroups'])
        else:
            self.security_ipgroups = None
        if map.get('DBInstanceWeights') is not None:
            temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfoDBInstanceWeights()
            self.dbinstance_weights = temp_model.from_map(map['DBInstanceWeights'])
        else:
            self.dbinstance_weights = None
        return self


class DescribeDBInstanceNetInfoResponseDBInstanceNetInfos(TeaModel):
    def __init__(self, dbinstance_net_info=None):
        self.dbinstance_net_info = []

    def validate(self):
        self.validate_required(self.dbinstance_net_info, 'dbinstance_net_info')
        if self.dbinstance_net_info:
            for k in self.dbinstance_net_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceNetInfo'] = []
        if self.dbinstance_net_info is not None:
            for k in self.dbinstance_net_info:
                result['DBInstanceNetInfo'].append(k.to_map() if k else None)
        else:
            result['DBInstanceNetInfo'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_net_info = []
        if map.get('DBInstanceNetInfo') is not None:
            for k in map.get('DBInstanceNetInfo'):
                temp_model = DescribeDBInstanceNetInfoResponseDBInstanceNetInfosDBInstanceNetInfo()
                temp_model = temp_model.from_map(k)
                self.dbinstance_net_info.append(temp_model)
        else:
            self.dbinstance_net_info = None
        return self


class CreateReadOnlyDBInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, region_id=None, zone_id=None, dbinstance_id=None, dbinstance_class=None, dbinstance_storage=None, engine_version=None, pay_type=None, dbinstance_description=None, instance_network_type=None, vpcid=None, vswitch_id=None, private_ip_address=None, owner_account=None, resource_group_id=None, category=None, dbinstance_storage_type=None, dedicated_host_group_id=None, target_dedicated_host_id_for_master=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.region_id = region_id
        self.zone_id = zone_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.engine_version = engine_version
        self.pay_type = pay_type
        self.dbinstance_description = dbinstance_description
        self.instance_network_type = instance_network_type
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.owner_account = owner_account
        self.resource_group_id = resource_group_id
        self.category = category
        self.dbinstance_storage_type = dbinstance_storage_type
        self.dedicated_host_group_id = dedicated_host_group_id
        self.target_dedicated_host_id_for_master = target_dedicated_host_id_for_master

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.pay_type, 'pay_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['EngineVersion'] = self.engine_version
        result['PayType'] = self.pay_type
        result['DBInstanceDescription'] = self.dbinstance_description
        result['InstanceNetworkType'] = self.instance_network_type
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['OwnerAccount'] = self.owner_account
        result['ResourceGroupId'] = self.resource_group_id
        result['Category'] = self.category
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['TargetDedicatedHostIdForMaster'] = self.target_dedicated_host_id_for_master
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.engine_version = map.get('EngineVersion')
        self.pay_type = map.get('PayType')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.owner_account = map.get('OwnerAccount')
        self.resource_group_id = map.get('ResourceGroupId')
        self.category = map.get('Category')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.target_dedicated_host_id_for_master = map.get('TargetDedicatedHostIdForMaster')
        return self


class CreateReadOnlyDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None, connection_string=None, port=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id
        self.connection_string = connection_string
        self.port = port

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        return self


class CreateDBInstanceRequest(TeaModel):
    def __init__(self, resource_owner_id=None, region_id=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_storage=None, system_dbcharset=None, dbinstance_net_type=None, dbinstance_description=None, security_iplist=None, client_token=None, pay_type=None, zone_id=None, instance_network_type=None, connection_mode=None, vpcid=None, vswitch_id=None, private_ip_address=None, used_time=None, period=None, resource_group_id=None, dbinstance_storage_type=None, business_info=None, encryption_key=None, role_arn=None, auto_renew=None, category=None, dedicated_host_group_id=None, target_dedicated_host_id_for_master=None, target_dedicated_host_id_for_slave=None, target_dedicated_host_id_for_log=None, dbparam_group_id=None, dbtime_zone=None, dbis_ignore_case=None):
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_storage = dbinstance_storage
        self.system_dbcharset = system_dbcharset
        self.dbinstance_net_type = dbinstance_net_type
        self.dbinstance_description = dbinstance_description
        self.security_iplist = security_iplist
        self.client_token = client_token
        self.pay_type = pay_type
        self.zone_id = zone_id
        self.instance_network_type = instance_network_type
        self.connection_mode = connection_mode
        self.vpcid = vpcid
        self.vswitch_id = vswitch_id
        self.private_ip_address = private_ip_address
        self.used_time = used_time
        self.period = period
        self.resource_group_id = resource_group_id
        self.dbinstance_storage_type = dbinstance_storage_type
        self.business_info = business_info
        self.encryption_key = encryption_key
        self.role_arn = role_arn
        self.auto_renew = auto_renew
        self.category = category
        self.dedicated_host_group_id = dedicated_host_group_id
        self.target_dedicated_host_id_for_master = target_dedicated_host_id_for_master
        self.target_dedicated_host_id_for_slave = target_dedicated_host_id_for_slave
        self.target_dedicated_host_id_for_log = target_dedicated_host_id_for_log
        self.dbparam_group_id = dbparam_group_id
        self.dbtime_zone = dbtime_zone
        self.dbis_ignore_case = dbis_ignore_case

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.security_iplist, 'security_iplist')
        self.validate_required(self.pay_type, 'pay_type')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['SystemDBCharset'] = self.system_dbcharset
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['DBInstanceDescription'] = self.dbinstance_description
        result['SecurityIPList'] = self.security_iplist
        result['ClientToken'] = self.client_token
        result['PayType'] = self.pay_type
        result['ZoneId'] = self.zone_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['ConnectionMode'] = self.connection_mode
        result['VPCId'] = self.vpcid
        result['VSwitchId'] = self.vswitch_id
        result['PrivateIpAddress'] = self.private_ip_address
        result['UsedTime'] = self.used_time
        result['Period'] = self.period
        result['ResourceGroupId'] = self.resource_group_id
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['BusinessInfo'] = self.business_info
        result['EncryptionKey'] = self.encryption_key
        result['RoleARN'] = self.role_arn
        result['AutoRenew'] = self.auto_renew
        result['Category'] = self.category
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['TargetDedicatedHostIdForMaster'] = self.target_dedicated_host_id_for_master
        result['TargetDedicatedHostIdForSlave'] = self.target_dedicated_host_id_for_slave
        result['TargetDedicatedHostIdForLog'] = self.target_dedicated_host_id_for_log
        result['DBParamGroupId'] = self.dbparam_group_id
        result['DBTimeZone'] = self.dbtime_zone
        result['DBIsIgnoreCase'] = self.dbis_ignore_case
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.system_dbcharset = map.get('SystemDBCharset')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.security_iplist = map.get('SecurityIPList')
        self.client_token = map.get('ClientToken')
        self.pay_type = map.get('PayType')
        self.zone_id = map.get('ZoneId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.connection_mode = map.get('ConnectionMode')
        self.vpcid = map.get('VPCId')
        self.vswitch_id = map.get('VSwitchId')
        self.private_ip_address = map.get('PrivateIpAddress')
        self.used_time = map.get('UsedTime')
        self.period = map.get('Period')
        self.resource_group_id = map.get('ResourceGroupId')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.business_info = map.get('BusinessInfo')
        self.encryption_key = map.get('EncryptionKey')
        self.role_arn = map.get('RoleARN')
        self.auto_renew = map.get('AutoRenew')
        self.category = map.get('Category')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.target_dedicated_host_id_for_master = map.get('TargetDedicatedHostIdForMaster')
        self.target_dedicated_host_id_for_slave = map.get('TargetDedicatedHostIdForSlave')
        self.target_dedicated_host_id_for_log = map.get('TargetDedicatedHostIdForLog')
        self.dbparam_group_id = map.get('DBParamGroupId')
        self.dbtime_zone = map.get('DBTimeZone')
        self.dbis_ignore_case = map.get('DBIsIgnoreCase')
        return self


class CreateDBInstanceResponse(TeaModel):
    def __init__(self, request_id=None, dbinstance_id=None, order_id=None, connection_string=None, port=None):
        self.request_id = request_id
        self.dbinstance_id = dbinstance_id
        self.order_id = order_id
        self.connection_string = connection_string
        self.port = port

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.order_id, 'order_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DBInstanceId'] = self.dbinstance_id
        result['OrderId'] = self.order_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.order_id = map.get('OrderId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        return self


class AllocateInstancePublicConnectionRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, dbinstance_id=None, connection_string_prefix=None, port=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.connection_string_prefix = connection_string_prefix
        self.port = port
        self.owner_account = owner_account

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.connection_string_prefix, 'connection_string_prefix')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['ConnectionStringPrefix'] = self.connection_string_prefix
        result['Port'] = self.port
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.connection_string_prefix = map.get('ConnectionStringPrefix')
        self.port = map.get('Port')
        self.owner_account = map.get('OwnerAccount')
        return self


class AllocateInstancePublicConnectionResponse(TeaModel):
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


class DescribeDBInstancesByPerformanceRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, dbinstance_id=None, page_size=None, page_number=None, sort_method=None, sort_key=None, tags=None, tag=None, owner_account=None, region_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.dbinstance_id = dbinstance_id
        self.page_size = page_size
        self.page_number = page_number
        self.sort_method = sort_method
        self.sort_key = sort_key
        self.tags = tags
        self.tag = []
        self.owner_account = owner_account
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['SortMethod'] = self.sort_method
        result['SortKey'] = self.sort_key
        result['Tags'] = self.tags
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['OwnerAccount'] = self.owner_account
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.sort_method = map.get('SortMethod')
        self.sort_key = map.get('SortKey')
        self.tags = map.get('Tags')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeDBInstancesByPerformanceRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.owner_account = map.get('OwnerAccount')
        self.region_id = map.get('RegionId')
        return self


class DescribeDBInstancesByPerformanceRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['key'] = self.key
        result['value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('key')
        self.value = map.get('value')
        return self


class DescribeDBInstancesByPerformanceResponse(TeaModel):
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
            temp_model = DescribeDBInstancesByPerformanceResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance(TeaModel):
    def __init__(self, cpuusage=None, iopsusage=None, disk_usage=None, session_usage=None, dbinstance_id=None, dbinstance_description=None):
        self.cpuusage = cpuusage
        self.iopsusage = iopsusage
        self.disk_usage = disk_usage
        self.session_usage = session_usage
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description

    def validate(self):
        self.validate_required(self.cpuusage, 'cpuusage')
        self.validate_required(self.iopsusage, 'iopsusage')
        self.validate_required(self.disk_usage, 'disk_usage')
        self.validate_required(self.session_usage, 'session_usage')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')

    def to_map(self):
        result = {}
        result['CPUUsage'] = self.cpuusage
        result['IOPSUsage'] = self.iopsusage
        result['DiskUsage'] = self.disk_usage
        result['SessionUsage'] = self.session_usage
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        return result

    def from_map(self, map={}):
        self.cpuusage = map.get('CPUUsage')
        self.iopsusage = map.get('IOPSUsage')
        self.disk_usage = map.get('DiskUsage')
        self.session_usage = map.get('SessionUsage')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        return self


class DescribeDBInstancesByPerformanceResponseItems(TeaModel):
    def __init__(self, dbinstance_performance=None):
        self.dbinstance_performance = []

    def validate(self):
        self.validate_required(self.dbinstance_performance, 'dbinstance_performance')
        if self.dbinstance_performance:
            for k in self.dbinstance_performance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstancePerformance'] = []
        if self.dbinstance_performance is not None:
            for k in self.dbinstance_performance:
                result['DBInstancePerformance'].append(k.to_map() if k else None)
        else:
            result['DBInstancePerformance'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_performance = []
        if map.get('DBInstancePerformance') is not None:
            for k in map.get('DBInstancePerformance'):
                temp_model = DescribeDBInstancesByPerformanceResponseItemsDBInstancePerformance()
                temp_model = temp_model.from_map(k)
                self.dbinstance_performance.append(temp_model)
        else:
            self.dbinstance_performance = None
        return self


class DescribeDBInstancesByExpireTimeRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, region_id=None, proxy_id=None, expire_period=None, expired=None, page_size=None, page_number=None, tags=None, owner_account=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.region_id = region_id
        self.proxy_id = proxy_id
        self.expire_period = expire_period
        self.expired = expired
        self.page_size = page_size
        self.page_number = page_number
        self.tags = tags
        self.owner_account = owner_account

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['RegionId'] = self.region_id
        result['proxyId'] = self.proxy_id
        result['ExpirePeriod'] = self.expire_period
        result['Expired'] = self.expired
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['Tags'] = self.tags
        result['OwnerAccount'] = self.owner_account
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.region_id = map.get('RegionId')
        self.proxy_id = map.get('proxyId')
        self.expire_period = map.get('ExpirePeriod')
        self.expired = map.get('Expired')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.tags = map.get('Tags')
        self.owner_account = map.get('OwnerAccount')
        return self


class DescribeDBInstancesByExpireTimeResponse(TeaModel):
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
            temp_model = DescribeDBInstancesByExpireTimeResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime(TeaModel):
    def __init__(self, dbinstance_id=None, dbinstance_description=None, expire_time=None, dbinstance_status=None, lock_mode=None):
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.expire_time = expire_time
        self.dbinstance_status = dbinstance_status
        self.lock_mode = lock_mode

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.lock_mode, 'lock_mode')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['ExpireTime'] = self.expire_time
        result['DBInstanceStatus'] = self.dbinstance_status
        result['LockMode'] = self.lock_mode
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.expire_time = map.get('ExpireTime')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.lock_mode = map.get('LockMode')
        return self


class DescribeDBInstancesByExpireTimeResponseItems(TeaModel):
    def __init__(self, dbinstance_expire_time=None):
        self.dbinstance_expire_time = []

    def validate(self):
        self.validate_required(self.dbinstance_expire_time, 'dbinstance_expire_time')
        if self.dbinstance_expire_time:
            for k in self.dbinstance_expire_time:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceExpireTime'] = []
        if self.dbinstance_expire_time is not None:
            for k in self.dbinstance_expire_time:
                result['DBInstanceExpireTime'].append(k.to_map() if k else None)
        else:
            result['DBInstanceExpireTime'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_expire_time = []
        if map.get('DBInstanceExpireTime') is not None:
            for k in map.get('DBInstanceExpireTime'):
                temp_model = DescribeDBInstancesByExpireTimeResponseItemsDBInstanceExpireTime()
                temp_model = temp_model.from_map(k)
                self.dbinstance_expire_time.append(temp_model)
        else:
            self.dbinstance_expire_time = None
        return self


class DescribeDBInstancesRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, client_token=None, proxy_id=None, engine=None, zone_id=None, resource_group_id=None, dbinstance_status=None, expired=None, search_key=None, dbinstance_id=None, dbinstance_type=None, region_id=None, page_size=None, page_number=None, instance_network_type=None, vpc_id=None, vswitch_id=None, dbinstance_class=None, engine_version=None, pay_type=None, connection_mode=None, tags=None, owner_account=None, dedicated_host_group_id=None, dedicated_host_id=None, instance_level=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.client_token = client_token
        self.proxy_id = proxy_id
        self.engine = engine
        self.zone_id = zone_id
        self.resource_group_id = resource_group_id
        self.dbinstance_status = dbinstance_status
        self.expired = expired
        self.search_key = search_key
        self.dbinstance_id = dbinstance_id
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.page_size = page_size
        self.page_number = page_number
        self.instance_network_type = instance_network_type
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.dbinstance_class = dbinstance_class
        self.engine_version = engine_version
        self.pay_type = pay_type
        self.connection_mode = connection_mode
        self.tags = tags
        self.owner_account = owner_account
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_host_id = dedicated_host_id
        self.instance_level = instance_level

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['ClientToken'] = self.client_token
        result['proxyId'] = self.proxy_id
        result['Engine'] = self.engine
        result['ZoneId'] = self.zone_id
        result['ResourceGroupId'] = self.resource_group_id
        result['DBInstanceStatus'] = self.dbinstance_status
        result['Expired'] = self.expired
        result['SearchKey'] = self.search_key
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['InstanceNetworkType'] = self.instance_network_type
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['DBInstanceClass'] = self.dbinstance_class
        result['EngineVersion'] = self.engine_version
        result['PayType'] = self.pay_type
        result['ConnectionMode'] = self.connection_mode
        result['Tags'] = self.tags
        result['OwnerAccount'] = self.owner_account
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DedicatedHostId'] = self.dedicated_host_id
        result['InstanceLevel'] = self.instance_level
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.client_token = map.get('ClientToken')
        self.proxy_id = map.get('proxyId')
        self.engine = map.get('Engine')
        self.zone_id = map.get('ZoneId')
        self.resource_group_id = map.get('ResourceGroupId')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.expired = map.get('Expired')
        self.search_key = map.get('SearchKey')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.engine_version = map.get('EngineVersion')
        self.pay_type = map.get('PayType')
        self.connection_mode = map.get('ConnectionMode')
        self.tags = map.get('Tags')
        self.owner_account = map.get('OwnerAccount')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dedicated_host_id = map.get('DedicatedHostId')
        self.instance_level = map.get('InstanceLevel')
        return self


class DescribeDBInstancesResponse(TeaModel):
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
            temp_model = DescribeDBInstancesResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId(TeaModel):
    def __init__(self, dbinstance_id=None):
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIds(TeaModel):
    def __init__(self, read_only_dbinstance_id=None):
        self.read_only_dbinstance_id = []

    def validate(self):
        self.validate_required(self.read_only_dbinstance_id, 'read_only_dbinstance_id')
        if self.read_only_dbinstance_id:
            for k in self.read_only_dbinstance_id:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyDBInstanceId'] = []
        if self.read_only_dbinstance_id is not None:
            for k in self.read_only_dbinstance_id:
                result['ReadOnlyDBInstanceId'].append(k.to_map() if k else None)
        else:
            result['ReadOnlyDBInstanceId'] = None
        return result

    def from_map(self, map={}):
        self.read_only_dbinstance_id = []
        if map.get('ReadOnlyDBInstanceId') is not None:
            for k in map.get('ReadOnlyDBInstanceId'):
                temp_model = DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIdsReadOnlyDBInstanceId()
                temp_model = temp_model.from_map(k)
                self.read_only_dbinstance_id.append(temp_model)
        else:
            self.read_only_dbinstance_id = None
        return self


class DescribeDBInstancesResponseItemsDBInstance(TeaModel):
    def __init__(self, ins_id=None, dbinstance_id=None, dbinstance_description=None, pay_type=None, dbinstance_type=None, region_id=None, expire_time=None, destroy_time=None, dbinstance_status=None, engine=None, dbinstance_net_type=None, connection_mode=None, lock_mode=None, category=None, dbinstance_storage_type=None, dbinstance_class=None, instance_network_type=None, vpc_cloud_instance_id=None, lock_reason=None, zone_id=None, mutri_orsignle=None, create_time=None, engine_version=None, guard_dbinstance_id=None, temp_dbinstance_id=None, master_instance_id=None, vpc_id=None, vswitch_id=None, replicate_id=None, resource_group_id=None, auto_upgrade_minor_version=None, dedicated_host_group_id=None, dedicated_host_id_for_master=None, dedicated_host_id_for_slave=None, dedicated_host_id_for_log=None, dedicated_host_name_for_master=None, dedicated_host_name_for_slave=None, dedicated_host_name_for_log=None, dedicated_host_zone_id_for_master=None, dedicated_host_zone_id_for_slave=None, dedicated_host_zone_id_for_log=None, read_only_dbinstance_ids=None):
        self.ins_id = ins_id
        self.dbinstance_id = dbinstance_id
        self.dbinstance_description = dbinstance_description
        self.pay_type = pay_type
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.expire_time = expire_time
        self.destroy_time = destroy_time
        self.dbinstance_status = dbinstance_status
        self.engine = engine
        self.dbinstance_net_type = dbinstance_net_type
        self.connection_mode = connection_mode
        self.lock_mode = lock_mode
        self.category = category
        self.dbinstance_storage_type = dbinstance_storage_type
        self.dbinstance_class = dbinstance_class
        self.instance_network_type = instance_network_type
        self.vpc_cloud_instance_id = vpc_cloud_instance_id
        self.lock_reason = lock_reason
        self.zone_id = zone_id
        self.mutri_orsignle = mutri_orsignle
        self.create_time = create_time
        self.engine_version = engine_version
        self.guard_dbinstance_id = guard_dbinstance_id
        self.temp_dbinstance_id = temp_dbinstance_id
        self.master_instance_id = master_instance_id
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.replicate_id = replicate_id
        self.resource_group_id = resource_group_id
        self.auto_upgrade_minor_version = auto_upgrade_minor_version
        self.dedicated_host_group_id = dedicated_host_group_id
        self.dedicated_host_id_for_master = dedicated_host_id_for_master
        self.dedicated_host_id_for_slave = dedicated_host_id_for_slave
        self.dedicated_host_id_for_log = dedicated_host_id_for_log
        self.dedicated_host_name_for_master = dedicated_host_name_for_master
        self.dedicated_host_name_for_slave = dedicated_host_name_for_slave
        self.dedicated_host_name_for_log = dedicated_host_name_for_log
        self.dedicated_host_zone_id_for_master = dedicated_host_zone_id_for_master
        self.dedicated_host_zone_id_for_slave = dedicated_host_zone_id_for_slave
        self.dedicated_host_zone_id_for_log = dedicated_host_zone_id_for_log
        self.read_only_dbinstance_ids = read_only_dbinstance_ids

    def validate(self):
        self.validate_required(self.ins_id, 'ins_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.destroy_time, 'destroy_time')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.connection_mode, 'connection_mode')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.category, 'category')
        self.validate_required(self.dbinstance_storage_type, 'dbinstance_storage_type')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.instance_network_type, 'instance_network_type')
        self.validate_required(self.vpc_cloud_instance_id, 'vpc_cloud_instance_id')
        self.validate_required(self.lock_reason, 'lock_reason')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.mutri_orsignle, 'mutri_orsignle')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.guard_dbinstance_id, 'guard_dbinstance_id')
        self.validate_required(self.temp_dbinstance_id, 'temp_dbinstance_id')
        self.validate_required(self.master_instance_id, 'master_instance_id')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.replicate_id, 'replicate_id')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.auto_upgrade_minor_version, 'auto_upgrade_minor_version')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.dedicated_host_id_for_master, 'dedicated_host_id_for_master')
        self.validate_required(self.dedicated_host_id_for_slave, 'dedicated_host_id_for_slave')
        self.validate_required(self.dedicated_host_id_for_log, 'dedicated_host_id_for_log')
        self.validate_required(self.dedicated_host_name_for_master, 'dedicated_host_name_for_master')
        self.validate_required(self.dedicated_host_name_for_slave, 'dedicated_host_name_for_slave')
        self.validate_required(self.dedicated_host_name_for_log, 'dedicated_host_name_for_log')
        self.validate_required(self.dedicated_host_zone_id_for_master, 'dedicated_host_zone_id_for_master')
        self.validate_required(self.dedicated_host_zone_id_for_slave, 'dedicated_host_zone_id_for_slave')
        self.validate_required(self.dedicated_host_zone_id_for_log, 'dedicated_host_zone_id_for_log')
        self.validate_required(self.read_only_dbinstance_ids, 'read_only_dbinstance_ids')
        if self.read_only_dbinstance_ids:
            self.read_only_dbinstance_ids.validate()

    def to_map(self):
        result = {}
        result['InsId'] = self.ins_id
        result['DBInstanceId'] = self.dbinstance_id
        result['DBInstanceDescription'] = self.dbinstance_description
        result['PayType'] = self.pay_type
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['ExpireTime'] = self.expire_time
        result['DestroyTime'] = self.destroy_time
        result['DBInstanceStatus'] = self.dbinstance_status
        result['Engine'] = self.engine
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['ConnectionMode'] = self.connection_mode
        result['LockMode'] = self.lock_mode
        result['Category'] = self.category
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['DBInstanceClass'] = self.dbinstance_class
        result['InstanceNetworkType'] = self.instance_network_type
        result['VpcCloudInstanceId'] = self.vpc_cloud_instance_id
        result['LockReason'] = self.lock_reason
        result['ZoneId'] = self.zone_id
        result['MutriORsignle'] = self.mutri_orsignle
        result['CreateTime'] = self.create_time
        result['EngineVersion'] = self.engine_version
        result['GuardDBInstanceId'] = self.guard_dbinstance_id
        result['TempDBInstanceId'] = self.temp_dbinstance_id
        result['MasterInstanceId'] = self.master_instance_id
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['ReplicateId'] = self.replicate_id
        result['ResourceGroupId'] = self.resource_group_id
        result['AutoUpgradeMinorVersion'] = self.auto_upgrade_minor_version
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['DedicatedHostIdForMaster'] = self.dedicated_host_id_for_master
        result['DedicatedHostIdForSlave'] = self.dedicated_host_id_for_slave
        result['DedicatedHostIdForLog'] = self.dedicated_host_id_for_log
        result['DedicatedHostNameForMaster'] = self.dedicated_host_name_for_master
        result['DedicatedHostNameForSlave'] = self.dedicated_host_name_for_slave
        result['DedicatedHostNameForLog'] = self.dedicated_host_name_for_log
        result['DedicatedHostZoneIdForMaster'] = self.dedicated_host_zone_id_for_master
        result['DedicatedHostZoneIdForSlave'] = self.dedicated_host_zone_id_for_slave
        result['DedicatedHostZoneIdForLog'] = self.dedicated_host_zone_id_for_log
        if self.read_only_dbinstance_ids is not None:
            result['ReadOnlyDBInstanceIds'] = self.read_only_dbinstance_ids.to_map()
        else:
            result['ReadOnlyDBInstanceIds'] = None
        return result

    def from_map(self, map={}):
        self.ins_id = map.get('InsId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.pay_type = map.get('PayType')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.expire_time = map.get('ExpireTime')
        self.destroy_time = map.get('DestroyTime')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.engine = map.get('Engine')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.connection_mode = map.get('ConnectionMode')
        self.lock_mode = map.get('LockMode')
        self.category = map.get('Category')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.vpc_cloud_instance_id = map.get('VpcCloudInstanceId')
        self.lock_reason = map.get('LockReason')
        self.zone_id = map.get('ZoneId')
        self.mutri_orsignle = map.get('MutriORsignle')
        self.create_time = map.get('CreateTime')
        self.engine_version = map.get('EngineVersion')
        self.guard_dbinstance_id = map.get('GuardDBInstanceId')
        self.temp_dbinstance_id = map.get('TempDBInstanceId')
        self.master_instance_id = map.get('MasterInstanceId')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.replicate_id = map.get('ReplicateId')
        self.resource_group_id = map.get('ResourceGroupId')
        self.auto_upgrade_minor_version = map.get('AutoUpgradeMinorVersion')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.dedicated_host_id_for_master = map.get('DedicatedHostIdForMaster')
        self.dedicated_host_id_for_slave = map.get('DedicatedHostIdForSlave')
        self.dedicated_host_id_for_log = map.get('DedicatedHostIdForLog')
        self.dedicated_host_name_for_master = map.get('DedicatedHostNameForMaster')
        self.dedicated_host_name_for_slave = map.get('DedicatedHostNameForSlave')
        self.dedicated_host_name_for_log = map.get('DedicatedHostNameForLog')
        self.dedicated_host_zone_id_for_master = map.get('DedicatedHostZoneIdForMaster')
        self.dedicated_host_zone_id_for_slave = map.get('DedicatedHostZoneIdForSlave')
        self.dedicated_host_zone_id_for_log = map.get('DedicatedHostZoneIdForLog')
        if map.get('ReadOnlyDBInstanceIds') is not None:
            temp_model = DescribeDBInstancesResponseItemsDBInstanceReadOnlyDBInstanceIds()
            self.read_only_dbinstance_ids = temp_model.from_map(map['ReadOnlyDBInstanceIds'])
        else:
            self.read_only_dbinstance_ids = None
        return self


class DescribeDBInstancesResponseItems(TeaModel):
    def __init__(self, dbinstance=None):
        self.dbinstance = []

    def validate(self):
        self.validate_required(self.dbinstance, 'dbinstance')
        if self.dbinstance:
            for k in self.dbinstance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstance'] = []
        if self.dbinstance is not None:
            for k in self.dbinstance:
                result['DBInstance'].append(k.to_map() if k else None)
        else:
            result['DBInstance'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance = []
        if map.get('DBInstance') is not None:
            for k in map.get('DBInstance'):
                temp_model = DescribeDBInstancesResponseItemsDBInstance()
                temp_model = temp_model.from_map(k)
                self.dbinstance.append(temp_model)
        else:
            self.dbinstance = None
        return self


class DescribeDBInstanceAttributeRequest(TeaModel):
    def __init__(self, resource_owner_id=None, dbinstance_id=None, expired=None):
        self.resource_owner_id = resource_owner_id
        self.dbinstance_id = dbinstance_id
        self.expired = expired

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['ResourceOwnerId'] = self.resource_owner_id
        result['DBInstanceId'] = self.dbinstance_id
        result['Expired'] = self.expired
        return result

    def from_map(self, map={}):
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.expired = map.get('Expired')
        return self


class DescribeDBInstanceAttributeResponse(TeaModel):
    def __init__(self, request_id=None, items=None):
        self.request_id = request_id
        self.items = items

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.items, 'items')
        if self.items:
            self.items.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.items is not None:
            result['Items'] = self.items.to_map()
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Items') is not None:
            temp_model = DescribeDBInstanceAttributeResponseItems()
            self.items = temp_model.from_map(map['Items'])
        else:
            self.items = None
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone(TeaModel):
    def __init__(self, zone_id=None):
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones(TeaModel):
    def __init__(self, slave_zone=None):
        self.slave_zone = []

    def validate(self):
        self.validate_required(self.slave_zone, 'slave_zone')
        if self.slave_zone:
            for k in self.slave_zone:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SlaveZone'] = []
        if self.slave_zone is not None:
            for k in self.slave_zone:
                result['SlaveZone'].append(k.to_map() if k else None)
        else:
            result['SlaveZone'] = None
        return result

    def from_map(self, map={}):
        self.slave_zone = []
        if map.get('SlaveZone') is not None:
            for k in map.get('SlaveZone'):
                temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZonesSlaveZone()
                temp_model = temp_model.from_map(k)
                self.slave_zone.append(temp_model)
        else:
            self.slave_zone = None
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId(TeaModel):
    def __init__(self, dbinstance_id=None):
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = self.dbinstance_id
        return result

    def from_map(self, map={}):
        self.dbinstance_id = map.get('DBInstanceId')
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds(TeaModel):
    def __init__(self, read_only_dbinstance_id=None):
        self.read_only_dbinstance_id = []

    def validate(self):
        self.validate_required(self.read_only_dbinstance_id, 'read_only_dbinstance_id')
        if self.read_only_dbinstance_id:
            for k in self.read_only_dbinstance_id:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyDBInstanceId'] = []
        if self.read_only_dbinstance_id is not None:
            for k in self.read_only_dbinstance_id:
                result['ReadOnlyDBInstanceId'].append(k.to_map() if k else None)
        else:
            result['ReadOnlyDBInstanceId'] = None
        return result

    def from_map(self, map={}):
        self.read_only_dbinstance_id = []
        if map.get('ReadOnlyDBInstanceId') is not None:
            for k in map.get('ReadOnlyDBInstanceId'):
                temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIdsReadOnlyDBInstanceId()
                temp_model = temp_model.from_map(k)
                self.read_only_dbinstance_id.append(temp_model)
        else:
            self.read_only_dbinstance_id = None
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId(TeaModel):
    def __init__(self, dbinstance_id=None):
        self.dbinstance_id = []

    def validate(self):
        self.validate_required(self.dbinstance_id, 'dbinstance_id')

    def to_map(self):
        result = {}
        result['DBInstanceId'] = []
        if self.dbinstance_id is not None:
            for k in self.dbinstance_id:
                result['DBInstanceId'].append(k)
        else:
            result['DBInstanceId'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_id = []
        if map.get('DBInstanceId') is not None:
            for k in map.get('DBInstanceId'):
                self.dbinstance_id.append(k)
        else:
            self.dbinstance_id = None
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra(TeaModel):
    def __init__(self, replica_group_id=None, replica_group_status=None, active_replica_dbinstance_id=None, dbinstance_id=None):
        self.replica_group_id = replica_group_id
        self.replica_group_status = replica_group_status
        self.active_replica_dbinstance_id = active_replica_dbinstance_id
        self.dbinstance_id = dbinstance_id

    def validate(self):
        self.validate_required(self.replica_group_id, 'replica_group_id')
        self.validate_required(self.replica_group_status, 'replica_group_status')
        self.validate_required(self.active_replica_dbinstance_id, 'active_replica_dbinstance_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        if self.dbinstance_id:
            self.dbinstance_id.validate()

    def to_map(self):
        result = {}
        result['ReplicaGroupID'] = self.replica_group_id
        result['ReplicaGroupStatus'] = self.replica_group_status
        result['ActiveReplicaDBInstanceID'] = self.active_replica_dbinstance_id
        if self.dbinstance_id is not None:
            result['DBInstanceId'] = self.dbinstance_id.to_map()
        else:
            result['DBInstanceId'] = None
        return result

    def from_map(self, map={}):
        self.replica_group_id = map.get('ReplicaGroupID')
        self.replica_group_status = map.get('ReplicaGroupStatus')
        self.active_replica_dbinstance_id = map.get('ActiveReplicaDBInstanceID')
        if map.get('DBInstanceId') is not None:
            temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtraDBInstanceId()
            self.dbinstance_id = temp_model.from_map(map['DBInstanceId'])
        else:
            self.dbinstance_id = None
        return self


class DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute(TeaModel):
    def __init__(self, iptype=None, dbinstance_disk_used=None, guard_dbinstance_name=None, can_temp_upgrade=None, temp_upgrade_time_start=None, temp_upgrade_time_end=None, temp_upgrade_recovery_time=None, temp_upgrade_recovery_class=None, temp_upgrade_recovery_cpu=None, temp_upgrade_recovery_memory=None, temp_upgrade_recovery_max_iops=None, temp_upgrade_recovery_max_connections=None, ins_id=None, dbinstance_id=None, pay_type=None, dbinstance_class_type=None, dbinstance_type=None, region_id=None, connection_string=None, port=None, engine=None, engine_version=None, dbinstance_class=None, dbinstance_memory=None, dbinstance_storage=None, vpc_cloud_instance_id=None, dbinstance_net_type=None, dbinstance_status=None, dbinstance_description=None, lock_mode=None, lock_reason=None, read_delay_time=None, dbmax_quantity=None, account_max_quantity=None, creation_time=None, expire_time=None, maintain_time=None, availability_value=None, max_iops=None, max_connections=None, master_instance_id=None, dbinstance_cpu=None, increment_source_dbinstance_id=None, guard_dbinstance_id=None, replicate_id=None, temp_dbinstance_id=None, security_iplist=None, zone_id=None, instance_network_type=None, dbinstance_storage_type=None, advanced_features=None, category=None, account_type=None, support_upgrade_account_type=None, support_create_super_account=None, vpc_id=None, vswitch_id=None, connection_mode=None, current_kernel_version=None, latest_kernel_version=None, resource_group_id=None, readonly_instance_sqldelayed_time=None, security_ipmode=None, time_zone=None, collation=None, dispense_mode=None, master_zone=None, auto_upgrade_minor_version=None, proxy_type=None, console_version=None, multiple_temp_upgrade=None, origin_configuration=None, dedicated_host_group_id=None, super_permission_mode=None, slave_zones=None, read_only_dbinstance_ids=None, extra=None):
        self.iptype = iptype
        self.dbinstance_disk_used = dbinstance_disk_used
        self.guard_dbinstance_name = guard_dbinstance_name
        self.can_temp_upgrade = can_temp_upgrade
        self.temp_upgrade_time_start = temp_upgrade_time_start
        self.temp_upgrade_time_end = temp_upgrade_time_end
        self.temp_upgrade_recovery_time = temp_upgrade_recovery_time
        self.temp_upgrade_recovery_class = temp_upgrade_recovery_class
        self.temp_upgrade_recovery_cpu = temp_upgrade_recovery_cpu
        self.temp_upgrade_recovery_memory = temp_upgrade_recovery_memory
        self.temp_upgrade_recovery_max_iops = temp_upgrade_recovery_max_iops
        self.temp_upgrade_recovery_max_connections = temp_upgrade_recovery_max_connections
        self.ins_id = ins_id
        self.dbinstance_id = dbinstance_id
        self.pay_type = pay_type
        self.dbinstance_class_type = dbinstance_class_type
        self.dbinstance_type = dbinstance_type
        self.region_id = region_id
        self.connection_string = connection_string
        self.port = port
        self.engine = engine
        self.engine_version = engine_version
        self.dbinstance_class = dbinstance_class
        self.dbinstance_memory = dbinstance_memory
        self.dbinstance_storage = dbinstance_storage
        self.vpc_cloud_instance_id = vpc_cloud_instance_id
        self.dbinstance_net_type = dbinstance_net_type
        self.dbinstance_status = dbinstance_status
        self.dbinstance_description = dbinstance_description
        self.lock_mode = lock_mode
        self.lock_reason = lock_reason
        self.read_delay_time = read_delay_time
        self.dbmax_quantity = dbmax_quantity
        self.account_max_quantity = account_max_quantity
        self.creation_time = creation_time
        self.expire_time = expire_time
        self.maintain_time = maintain_time
        self.availability_value = availability_value
        self.max_iops = max_iops
        self.max_connections = max_connections
        self.master_instance_id = master_instance_id
        self.dbinstance_cpu = dbinstance_cpu
        self.increment_source_dbinstance_id = increment_source_dbinstance_id
        self.guard_dbinstance_id = guard_dbinstance_id
        self.replicate_id = replicate_id
        self.temp_dbinstance_id = temp_dbinstance_id
        self.security_iplist = security_iplist
        self.zone_id = zone_id
        self.instance_network_type = instance_network_type
        self.dbinstance_storage_type = dbinstance_storage_type
        self.advanced_features = advanced_features
        self.category = category
        self.account_type = account_type
        self.support_upgrade_account_type = support_upgrade_account_type
        self.support_create_super_account = support_create_super_account
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.connection_mode = connection_mode
        self.current_kernel_version = current_kernel_version
        self.latest_kernel_version = latest_kernel_version
        self.resource_group_id = resource_group_id
        self.readonly_instance_sqldelayed_time = readonly_instance_sqldelayed_time
        self.security_ipmode = security_ipmode
        self.time_zone = time_zone
        self.collation = collation
        self.dispense_mode = dispense_mode
        self.master_zone = master_zone
        self.auto_upgrade_minor_version = auto_upgrade_minor_version
        self.proxy_type = proxy_type
        self.console_version = console_version
        self.multiple_temp_upgrade = multiple_temp_upgrade
        self.origin_configuration = origin_configuration
        self.dedicated_host_group_id = dedicated_host_group_id
        self.super_permission_mode = super_permission_mode
        self.slave_zones = slave_zones
        self.read_only_dbinstance_ids = read_only_dbinstance_ids
        self.extra = extra

    def validate(self):
        self.validate_required(self.iptype, 'iptype')
        self.validate_required(self.dbinstance_disk_used, 'dbinstance_disk_used')
        self.validate_required(self.guard_dbinstance_name, 'guard_dbinstance_name')
        self.validate_required(self.can_temp_upgrade, 'can_temp_upgrade')
        self.validate_required(self.temp_upgrade_time_start, 'temp_upgrade_time_start')
        self.validate_required(self.temp_upgrade_time_end, 'temp_upgrade_time_end')
        self.validate_required(self.temp_upgrade_recovery_time, 'temp_upgrade_recovery_time')
        self.validate_required(self.temp_upgrade_recovery_class, 'temp_upgrade_recovery_class')
        self.validate_required(self.temp_upgrade_recovery_cpu, 'temp_upgrade_recovery_cpu')
        self.validate_required(self.temp_upgrade_recovery_memory, 'temp_upgrade_recovery_memory')
        self.validate_required(self.temp_upgrade_recovery_max_iops, 'temp_upgrade_recovery_max_iops')
        self.validate_required(self.temp_upgrade_recovery_max_connections, 'temp_upgrade_recovery_max_connections')
        self.validate_required(self.ins_id, 'ins_id')
        self.validate_required(self.dbinstance_id, 'dbinstance_id')
        self.validate_required(self.pay_type, 'pay_type')
        self.validate_required(self.dbinstance_class_type, 'dbinstance_class_type')
        self.validate_required(self.dbinstance_type, 'dbinstance_type')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.connection_string, 'connection_string')
        self.validate_required(self.port, 'port')
        self.validate_required(self.engine, 'engine')
        self.validate_required(self.engine_version, 'engine_version')
        self.validate_required(self.dbinstance_class, 'dbinstance_class')
        self.validate_required(self.dbinstance_memory, 'dbinstance_memory')
        self.validate_required(self.dbinstance_storage, 'dbinstance_storage')
        self.validate_required(self.vpc_cloud_instance_id, 'vpc_cloud_instance_id')
        self.validate_required(self.dbinstance_net_type, 'dbinstance_net_type')
        self.validate_required(self.dbinstance_status, 'dbinstance_status')
        self.validate_required(self.dbinstance_description, 'dbinstance_description')
        self.validate_required(self.lock_mode, 'lock_mode')
        self.validate_required(self.lock_reason, 'lock_reason')
        self.validate_required(self.read_delay_time, 'read_delay_time')
        self.validate_required(self.dbmax_quantity, 'dbmax_quantity')
        self.validate_required(self.account_max_quantity, 'account_max_quantity')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.maintain_time, 'maintain_time')
        self.validate_required(self.availability_value, 'availability_value')
        self.validate_required(self.max_iops, 'max_iops')
        self.validate_required(self.max_connections, 'max_connections')
        self.validate_required(self.master_instance_id, 'master_instance_id')
        self.validate_required(self.dbinstance_cpu, 'dbinstance_cpu')
        self.validate_required(self.increment_source_dbinstance_id, 'increment_source_dbinstance_id')
        self.validate_required(self.guard_dbinstance_id, 'guard_dbinstance_id')
        self.validate_required(self.replicate_id, 'replicate_id')
        self.validate_required(self.temp_dbinstance_id, 'temp_dbinstance_id')
        self.validate_required(self.security_iplist, 'security_iplist')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.instance_network_type, 'instance_network_type')
        self.validate_required(self.dbinstance_storage_type, 'dbinstance_storage_type')
        self.validate_required(self.advanced_features, 'advanced_features')
        self.validate_required(self.category, 'category')
        self.validate_required(self.account_type, 'account_type')
        self.validate_required(self.support_upgrade_account_type, 'support_upgrade_account_type')
        self.validate_required(self.support_create_super_account, 'support_create_super_account')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vswitch_id, 'vswitch_id')
        self.validate_required(self.connection_mode, 'connection_mode')
        self.validate_required(self.current_kernel_version, 'current_kernel_version')
        self.validate_required(self.latest_kernel_version, 'latest_kernel_version')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.readonly_instance_sqldelayed_time, 'readonly_instance_sqldelayed_time')
        self.validate_required(self.security_ipmode, 'security_ipmode')
        self.validate_required(self.time_zone, 'time_zone')
        self.validate_required(self.collation, 'collation')
        self.validate_required(self.dispense_mode, 'dispense_mode')
        self.validate_required(self.master_zone, 'master_zone')
        self.validate_required(self.auto_upgrade_minor_version, 'auto_upgrade_minor_version')
        self.validate_required(self.proxy_type, 'proxy_type')
        self.validate_required(self.console_version, 'console_version')
        self.validate_required(self.multiple_temp_upgrade, 'multiple_temp_upgrade')
        self.validate_required(self.origin_configuration, 'origin_configuration')
        self.validate_required(self.dedicated_host_group_id, 'dedicated_host_group_id')
        self.validate_required(self.super_permission_mode, 'super_permission_mode')
        self.validate_required(self.slave_zones, 'slave_zones')
        if self.slave_zones:
            self.slave_zones.validate()
        self.validate_required(self.read_only_dbinstance_ids, 'read_only_dbinstance_ids')
        if self.read_only_dbinstance_ids:
            self.read_only_dbinstance_ids.validate()
        self.validate_required(self.extra, 'extra')
        if self.extra:
            self.extra.validate()

    def to_map(self):
        result = {}
        result['IPType'] = self.iptype
        result['DBInstanceDiskUsed'] = self.dbinstance_disk_used
        result['GuardDBInstanceName'] = self.guard_dbinstance_name
        result['CanTempUpgrade'] = self.can_temp_upgrade
        result['TempUpgradeTimeStart'] = self.temp_upgrade_time_start
        result['TempUpgradeTimeEnd'] = self.temp_upgrade_time_end
        result['TempUpgradeRecoveryTime'] = self.temp_upgrade_recovery_time
        result['TempUpgradeRecoveryClass'] = self.temp_upgrade_recovery_class
        result['TempUpgradeRecoveryCpu'] = self.temp_upgrade_recovery_cpu
        result['TempUpgradeRecoveryMemory'] = self.temp_upgrade_recovery_memory
        result['TempUpgradeRecoveryMaxIOPS'] = self.temp_upgrade_recovery_max_iops
        result['TempUpgradeRecoveryMaxConnections'] = self.temp_upgrade_recovery_max_connections
        result['InsId'] = self.ins_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PayType'] = self.pay_type
        result['DBInstanceClassType'] = self.dbinstance_class_type
        result['DBInstanceType'] = self.dbinstance_type
        result['RegionId'] = self.region_id
        result['ConnectionString'] = self.connection_string
        result['Port'] = self.port
        result['Engine'] = self.engine
        result['EngineVersion'] = self.engine_version
        result['DBInstanceClass'] = self.dbinstance_class
        result['DBInstanceMemory'] = self.dbinstance_memory
        result['DBInstanceStorage'] = self.dbinstance_storage
        result['VpcCloudInstanceId'] = self.vpc_cloud_instance_id
        result['DBInstanceNetType'] = self.dbinstance_net_type
        result['DBInstanceStatus'] = self.dbinstance_status
        result['DBInstanceDescription'] = self.dbinstance_description
        result['LockMode'] = self.lock_mode
        result['LockReason'] = self.lock_reason
        result['ReadDelayTime'] = self.read_delay_time
        result['DBMaxQuantity'] = self.dbmax_quantity
        result['AccountMaxQuantity'] = self.account_max_quantity
        result['CreationTime'] = self.creation_time
        result['ExpireTime'] = self.expire_time
        result['MaintainTime'] = self.maintain_time
        result['AvailabilityValue'] = self.availability_value
        result['MaxIOPS'] = self.max_iops
        result['MaxConnections'] = self.max_connections
        result['MasterInstanceId'] = self.master_instance_id
        result['DBInstanceCPU'] = self.dbinstance_cpu
        result['IncrementSourceDBInstanceId'] = self.increment_source_dbinstance_id
        result['GuardDBInstanceId'] = self.guard_dbinstance_id
        result['ReplicateId'] = self.replicate_id
        result['TempDBInstanceId'] = self.temp_dbinstance_id
        result['SecurityIPList'] = self.security_iplist
        result['ZoneId'] = self.zone_id
        result['InstanceNetworkType'] = self.instance_network_type
        result['DBInstanceStorageType'] = self.dbinstance_storage_type
        result['AdvancedFeatures'] = self.advanced_features
        result['Category'] = self.category
        result['AccountType'] = self.account_type
        result['SupportUpgradeAccountType'] = self.support_upgrade_account_type
        result['SupportCreateSuperAccount'] = self.support_create_super_account
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['ConnectionMode'] = self.connection_mode
        result['CurrentKernelVersion'] = self.current_kernel_version
        result['LatestKernelVersion'] = self.latest_kernel_version
        result['ResourceGroupId'] = self.resource_group_id
        result['ReadonlyInstanceSQLDelayedTime'] = self.readonly_instance_sqldelayed_time
        result['SecurityIPMode'] = self.security_ipmode
        result['TimeZone'] = self.time_zone
        result['Collation'] = self.collation
        result['DispenseMode'] = self.dispense_mode
        result['MasterZone'] = self.master_zone
        result['AutoUpgradeMinorVersion'] = self.auto_upgrade_minor_version
        result['ProxyType'] = self.proxy_type
        result['ConsoleVersion'] = self.console_version
        result['MultipleTempUpgrade'] = self.multiple_temp_upgrade
        result['OriginConfiguration'] = self.origin_configuration
        result['DedicatedHostGroupId'] = self.dedicated_host_group_id
        result['SuperPermissionMode'] = self.super_permission_mode
        if self.slave_zones is not None:
            result['SlaveZones'] = self.slave_zones.to_map()
        else:
            result['SlaveZones'] = None
        if self.read_only_dbinstance_ids is not None:
            result['ReadOnlyDBInstanceIds'] = self.read_only_dbinstance_ids.to_map()
        else:
            result['ReadOnlyDBInstanceIds'] = None
        if self.extra is not None:
            result['Extra'] = self.extra.to_map()
        else:
            result['Extra'] = None
        return result

    def from_map(self, map={}):
        self.iptype = map.get('IPType')
        self.dbinstance_disk_used = map.get('DBInstanceDiskUsed')
        self.guard_dbinstance_name = map.get('GuardDBInstanceName')
        self.can_temp_upgrade = map.get('CanTempUpgrade')
        self.temp_upgrade_time_start = map.get('TempUpgradeTimeStart')
        self.temp_upgrade_time_end = map.get('TempUpgradeTimeEnd')
        self.temp_upgrade_recovery_time = map.get('TempUpgradeRecoveryTime')
        self.temp_upgrade_recovery_class = map.get('TempUpgradeRecoveryClass')
        self.temp_upgrade_recovery_cpu = map.get('TempUpgradeRecoveryCpu')
        self.temp_upgrade_recovery_memory = map.get('TempUpgradeRecoveryMemory')
        self.temp_upgrade_recovery_max_iops = map.get('TempUpgradeRecoveryMaxIOPS')
        self.temp_upgrade_recovery_max_connections = map.get('TempUpgradeRecoveryMaxConnections')
        self.ins_id = map.get('InsId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.pay_type = map.get('PayType')
        self.dbinstance_class_type = map.get('DBInstanceClassType')
        self.dbinstance_type = map.get('DBInstanceType')
        self.region_id = map.get('RegionId')
        self.connection_string = map.get('ConnectionString')
        self.port = map.get('Port')
        self.engine = map.get('Engine')
        self.engine_version = map.get('EngineVersion')
        self.dbinstance_class = map.get('DBInstanceClass')
        self.dbinstance_memory = map.get('DBInstanceMemory')
        self.dbinstance_storage = map.get('DBInstanceStorage')
        self.vpc_cloud_instance_id = map.get('VpcCloudInstanceId')
        self.dbinstance_net_type = map.get('DBInstanceNetType')
        self.dbinstance_status = map.get('DBInstanceStatus')
        self.dbinstance_description = map.get('DBInstanceDescription')
        self.lock_mode = map.get('LockMode')
        self.lock_reason = map.get('LockReason')
        self.read_delay_time = map.get('ReadDelayTime')
        self.dbmax_quantity = map.get('DBMaxQuantity')
        self.account_max_quantity = map.get('AccountMaxQuantity')
        self.creation_time = map.get('CreationTime')
        self.expire_time = map.get('ExpireTime')
        self.maintain_time = map.get('MaintainTime')
        self.availability_value = map.get('AvailabilityValue')
        self.max_iops = map.get('MaxIOPS')
        self.max_connections = map.get('MaxConnections')
        self.master_instance_id = map.get('MasterInstanceId')
        self.dbinstance_cpu = map.get('DBInstanceCPU')
        self.increment_source_dbinstance_id = map.get('IncrementSourceDBInstanceId')
        self.guard_dbinstance_id = map.get('GuardDBInstanceId')
        self.replicate_id = map.get('ReplicateId')
        self.temp_dbinstance_id = map.get('TempDBInstanceId')
        self.security_iplist = map.get('SecurityIPList')
        self.zone_id = map.get('ZoneId')
        self.instance_network_type = map.get('InstanceNetworkType')
        self.dbinstance_storage_type = map.get('DBInstanceStorageType')
        self.advanced_features = map.get('AdvancedFeatures')
        self.category = map.get('Category')
        self.account_type = map.get('AccountType')
        self.support_upgrade_account_type = map.get('SupportUpgradeAccountType')
        self.support_create_super_account = map.get('SupportCreateSuperAccount')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.connection_mode = map.get('ConnectionMode')
        self.current_kernel_version = map.get('CurrentKernelVersion')
        self.latest_kernel_version = map.get('LatestKernelVersion')
        self.resource_group_id = map.get('ResourceGroupId')
        self.readonly_instance_sqldelayed_time = map.get('ReadonlyInstanceSQLDelayedTime')
        self.security_ipmode = map.get('SecurityIPMode')
        self.time_zone = map.get('TimeZone')
        self.collation = map.get('Collation')
        self.dispense_mode = map.get('DispenseMode')
        self.master_zone = map.get('MasterZone')
        self.auto_upgrade_minor_version = map.get('AutoUpgradeMinorVersion')
        self.proxy_type = map.get('ProxyType')
        self.console_version = map.get('ConsoleVersion')
        self.multiple_temp_upgrade = map.get('MultipleTempUpgrade')
        self.origin_configuration = map.get('OriginConfiguration')
        self.dedicated_host_group_id = map.get('DedicatedHostGroupId')
        self.super_permission_mode = map.get('SuperPermissionMode')
        if map.get('SlaveZones') is not None:
            temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeSlaveZones()
            self.slave_zones = temp_model.from_map(map['SlaveZones'])
        else:
            self.slave_zones = None
        if map.get('ReadOnlyDBInstanceIds') is not None:
            temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeReadOnlyDBInstanceIds()
            self.read_only_dbinstance_ids = temp_model.from_map(map['ReadOnlyDBInstanceIds'])
        else:
            self.read_only_dbinstance_ids = None
        if map.get('Extra') is not None:
            temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttributeExtra()
            self.extra = temp_model.from_map(map['Extra'])
        else:
            self.extra = None
        return self


class DescribeDBInstanceAttributeResponseItems(TeaModel):
    def __init__(self, dbinstance_attribute=None):
        self.dbinstance_attribute = []

    def validate(self):
        self.validate_required(self.dbinstance_attribute, 'dbinstance_attribute')
        if self.dbinstance_attribute:
            for k in self.dbinstance_attribute:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DBInstanceAttribute'] = []
        if self.dbinstance_attribute is not None:
            for k in self.dbinstance_attribute:
                result['DBInstanceAttribute'].append(k.to_map() if k else None)
        else:
            result['DBInstanceAttribute'] = None
        return result

    def from_map(self, map={}):
        self.dbinstance_attribute = []
        if map.get('DBInstanceAttribute') is not None:
            for k in map.get('DBInstanceAttribute'):
                temp_model = DescribeDBInstanceAttributeResponseItemsDBInstanceAttribute()
                temp_model = temp_model.from_map(k)
                self.dbinstance_attribute.append(temp_model)
        else:
            self.dbinstance_attribute = None
        return self

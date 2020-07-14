# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeRegionsRequest(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, request_id=None, regions=None):
        self.request_id = request_id
        self.regions = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.regions, 'regions')
        if self.regions:
            for k in self.regions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Regions'] = []
        if self.regions is not None:
            for k in self.regions:
                result['Regions'].append(k.to_map() if k else None)
        else:
            result['Regions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.regions = []
        if map.get('Regions') is not None:
            for k in map.get('Regions'):
                temp_model = DescribeRegionsResponseRegions()
                temp_model = temp_model.from_map(k)
                self.regions.append(temp_model)
        else:
            self.regions = None
        return self


class DescribeRegionsResponseRegions(TeaModel):
    def __init__(self, region_id=None, region_endpoint=None, zones=None):
        self.region_id = region_id
        self.region_endpoint = region_endpoint
        self.zones = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.region_endpoint, 'region_endpoint')
        self.validate_required(self.zones, 'zones')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['RegionEndpoint'] = self.region_endpoint
        result['Zones'] = []
        if self.zones is not None:
            for k in self.zones:
                result['Zones'].append(k)
        else:
            result['Zones'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.region_endpoint = map.get('RegionEndpoint')
        self.zones = []
        if map.get('Zones') is not None:
            for k in map.get('Zones'):
                self.zones.append(k)
        else:
            self.zones = None
        return self


class DescribeImageCachesRequest(TeaModel):
    def __init__(self, region_id=None, image_cache_id=None, image_cache_name=None, snapshot_id=None, image=None):
        self.region_id = region_id
        self.image_cache_id = image_cache_id
        self.image_cache_name = image_cache_name
        self.snapshot_id = snapshot_id
        self.image = image

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ImageCacheId'] = self.image_cache_id
        result['ImageCacheName'] = self.image_cache_name
        result['SnapshotId'] = self.snapshot_id
        result['Image'] = self.image
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.image_cache_id = map.get('ImageCacheId')
        self.image_cache_name = map.get('ImageCacheName')
        self.snapshot_id = map.get('SnapshotId')
        self.image = map.get('Image')
        return self


class DescribeImageCachesResponse(TeaModel):
    def __init__(self, request_id=None, image_caches=None):
        self.request_id = request_id
        self.image_caches = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.image_caches, 'image_caches')
        if self.image_caches:
            for k in self.image_caches:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ImageCaches'] = []
        if self.image_caches is not None:
            for k in self.image_caches:
                result['ImageCaches'].append(k.to_map() if k else None)
        else:
            result['ImageCaches'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.image_caches = []
        if map.get('ImageCaches') is not None:
            for k in map.get('ImageCaches'):
                temp_model = DescribeImageCachesResponseImageCaches()
                temp_model = temp_model.from_map(k)
                self.image_caches.append(temp_model)
        else:
            self.image_caches = None
        return self


class DescribeImageCachesResponseImageCachesEvents(TeaModel):
    def __init__(self, count=None, type=None, name=None, message=None, first_timestamp=None, last_timestamp=None):
        self.count = count
        self.type = type
        self.name = name
        self.message = message
        self.first_timestamp = first_timestamp
        self.last_timestamp = last_timestamp

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.message, 'message')
        self.validate_required(self.first_timestamp, 'first_timestamp')
        self.validate_required(self.last_timestamp, 'last_timestamp')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Type'] = self.type
        result['Name'] = self.name
        result['Message'] = self.message
        result['FirstTimestamp'] = self.first_timestamp
        result['LastTimestamp'] = self.last_timestamp
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.message = map.get('Message')
        self.first_timestamp = map.get('FirstTimestamp')
        self.last_timestamp = map.get('LastTimestamp')
        return self


class DescribeImageCachesResponseImageCaches(TeaModel):
    def __init__(self, container_group_id=None, image_cache_id=None, image_cache_name=None, snapshot_id=None, progress=None, status=None, expire_date_time=None, creation_time=None, region_id=None, events=None, images=None):
        self.container_group_id = container_group_id
        self.image_cache_id = image_cache_id
        self.image_cache_name = image_cache_name
        self.snapshot_id = snapshot_id
        self.progress = progress
        self.status = status
        self.expire_date_time = expire_date_time
        self.creation_time = creation_time
        self.region_id = region_id
        self.events = []
        self.images = []

    def validate(self):
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.image_cache_id, 'image_cache_id')
        self.validate_required(self.image_cache_name, 'image_cache_name')
        self.validate_required(self.snapshot_id, 'snapshot_id')
        self.validate_required(self.progress, 'progress')
        self.validate_required(self.status, 'status')
        self.validate_required(self.expire_date_time, 'expire_date_time')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.events, 'events')
        if self.events:
            for k in self.events:
                if k :
                    k.validate()
        self.validate_required(self.images, 'images')

    def to_map(self):
        result = {}
        result['ContainerGroupId'] = self.container_group_id
        result['ImageCacheId'] = self.image_cache_id
        result['ImageCacheName'] = self.image_cache_name
        result['SnapshotId'] = self.snapshot_id
        result['Progress'] = self.progress
        result['Status'] = self.status
        result['ExpireDateTime'] = self.expire_date_time
        result['CreationTime'] = self.creation_time
        result['RegionId'] = self.region_id
        result['Events'] = []
        if self.events is not None:
            for k in self.events:
                result['Events'].append(k.to_map() if k else None)
        else:
            result['Events'] = None
        result['Images'] = []
        if self.images is not None:
            for k in self.images:
                result['Images'].append(k)
        else:
            result['Images'] = None
        return result

    def from_map(self, map={}):
        self.container_group_id = map.get('ContainerGroupId')
        self.image_cache_id = map.get('ImageCacheId')
        self.image_cache_name = map.get('ImageCacheName')
        self.snapshot_id = map.get('SnapshotId')
        self.progress = map.get('Progress')
        self.status = map.get('Status')
        self.expire_date_time = map.get('ExpireDateTime')
        self.creation_time = map.get('CreationTime')
        self.region_id = map.get('RegionId')
        self.events = []
        if map.get('Events') is not None:
            for k in map.get('Events'):
                temp_model = DescribeImageCachesResponseImageCachesEvents()
                temp_model = temp_model.from_map(k)
                self.events.append(temp_model)
        else:
            self.events = None
        self.images = []
        if map.get('Images') is not None:
            for k in map.get('Images'):
                self.images.append(k)
        else:
            self.images = None
        return self


class DeleteImageCacheRequest(TeaModel):
    def __init__(self, region_id=None, image_cache_id=None, client_token=None):
        self.region_id = region_id
        self.image_cache_id = image_cache_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.image_cache_id, 'image_cache_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ImageCacheId'] = self.image_cache_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.image_cache_id = map.get('ImageCacheId')
        self.client_token = map.get('ClientToken')
        return self


class DeleteImageCacheResponse(TeaModel):
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


class CreateImageCacheRequest(TeaModel):
    def __init__(self, region_id=None, zone_id=None, security_group_id=None, v_switch_id=None, image_cache_name=None, image_registry_credential=None, eip_instance_id=None, resource_group_id=None, client_token=None, image=None, image_cache_size=None, retention_days=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.security_group_id = security_group_id
        self.v_switch_id = v_switch_id
        self.image_cache_name = image_cache_name
        self.image_registry_credential = []
        self.eip_instance_id = eip_instance_id
        self.resource_group_id = resource_group_id
        self.client_token = client_token
        self.image = []
        self.image_cache_size = image_cache_size
        self.retention_days = retention_days

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.image_cache_name, 'image_cache_name')
        if self.image_registry_credential:
            for k in self.image_registry_credential:
                if k :
                    k.validate()
        self.validate_required(self.image, 'image')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['SecurityGroupId'] = self.security_group_id
        result['VSwitchId'] = self.v_switch_id
        result['ImageCacheName'] = self.image_cache_name
        result['ImageRegistryCredential'] = []
        if self.image_registry_credential is not None:
            for k in self.image_registry_credential:
                result['ImageRegistryCredential'].append(k.to_map() if k else None)
        else:
            result['ImageRegistryCredential'] = None
        result['EipInstanceId'] = self.eip_instance_id
        result['ResourceGroupId'] = self.resource_group_id
        result['ClientToken'] = self.client_token
        result['Image'] = []
        if self.image is not None:
            for k in self.image:
                result['Image'].append(k)
        else:
            result['Image'] = None
        result['ImageCacheSize'] = self.image_cache_size
        result['RetentionDays'] = self.retention_days
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.security_group_id = map.get('SecurityGroupId')
        self.v_switch_id = map.get('VSwitchId')
        self.image_cache_name = map.get('ImageCacheName')
        self.image_registry_credential = []
        if map.get('ImageRegistryCredential') is not None:
            for k in map.get('ImageRegistryCredential'):
                temp_model = CreateImageCacheRequestImageRegistryCredential()
                temp_model = temp_model.from_map(k)
                self.image_registry_credential.append(temp_model)
        else:
            self.image_registry_credential = None
        self.eip_instance_id = map.get('EipInstanceId')
        self.resource_group_id = map.get('ResourceGroupId')
        self.client_token = map.get('ClientToken')
        self.image = []
        if map.get('Image') is not None:
            for k in map.get('Image'):
                self.image.append(k)
        else:
            self.image = None
        self.image_cache_size = map.get('ImageCacheSize')
        self.retention_days = map.get('RetentionDays')
        return self


class CreateImageCacheRequestImageRegistryCredential(TeaModel):
    def __init__(self, server=None, user_name=None, password=None):
        self.server = server
        self.user_name = user_name
        self.password = password

    def validate(self):
        self.validate_required(self.server, 'server')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.password, 'password')

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['UserName'] = self.user_name
        result['Password'] = self.password
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.user_name = map.get('UserName')
        self.password = map.get('Password')
        return self


class CreateImageCacheResponse(TeaModel):
    def __init__(self, request_id=None, image_cache_id=None, container_group_id=None):
        self.request_id = request_id
        self.image_cache_id = image_cache_id
        self.container_group_id = container_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.image_cache_id, 'image_cache_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ImageCacheId'] = self.image_cache_id
        result['ContainerGroupId'] = self.container_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.image_cache_id = map.get('ImageCacheId')
        self.container_group_id = map.get('ContainerGroupId')
        return self


class DescribeMultiContainerGroupMetricRequest(TeaModel):
    def __init__(self, region_id=None, container_group_ids=None, resource_group_id=None, metric_type=None):
        self.region_id = region_id
        self.container_group_ids = container_group_ids
        self.resource_group_id = resource_group_id
        self.metric_type = metric_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_ids, 'container_group_ids')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupIds'] = self.container_group_ids
        result['ResourceGroupId'] = self.resource_group_id
        result['MetricType'] = self.metric_type
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_ids = map.get('ContainerGroupIds')
        self.resource_group_id = map.get('ResourceGroupId')
        self.metric_type = map.get('MetricType')
        return self


class DescribeMultiContainerGroupMetricResponse(TeaModel):
    def __init__(self, request_id=None, monitor_datas=None):
        self.request_id = request_id
        self.monitor_datas = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.monitor_datas, 'monitor_datas')
        if self.monitor_datas:
            for k in self.monitor_datas:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MonitorDatas'] = []
        if self.monitor_datas is not None:
            for k in self.monitor_datas:
                result['MonitorDatas'].append(k.to_map() if k else None)
        else:
            result['MonitorDatas'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.monitor_datas = []
        if map.get('MonitorDatas') is not None:
            for k in map.get('MonitorDatas'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatas()
                temp_model = temp_model.from_map(k)
                self.monitor_datas.append(temp_model)
        else:
            self.monitor_datas = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU(TeaModel):
    def __init__(self, limit=None, load=None, usage_core_nano_seconds=None, usage_nano_cores=None):
        self.limit = limit
        self.load = load
        self.usage_core_nano_seconds = usage_core_nano_seconds
        self.usage_nano_cores = usage_nano_cores

    def validate(self):
        self.validate_required(self.limit, 'limit')
        self.validate_required(self.load, 'load')
        self.validate_required(self.usage_core_nano_seconds, 'usage_core_nano_seconds')
        self.validate_required(self.usage_nano_cores, 'usage_nano_cores')

    def to_map(self):
        result = {}
        result['Limit'] = self.limit
        result['Load'] = self.load
        result['UsageCoreNanoSeconds'] = self.usage_core_nano_seconds
        result['UsageNanoCores'] = self.usage_nano_cores
        return result

    def from_map(self, map={}):
        self.limit = map.get('Limit')
        self.load = map.get('Load')
        self.usage_core_nano_seconds = map.get('UsageCoreNanoSeconds')
        self.usage_nano_cores = map.get('UsageNanoCores')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory(TeaModel):
    def __init__(self, available_bytes=None, usage_bytes=None, cache=None, working_set=None, rss=None):
        self.available_bytes = available_bytes
        self.usage_bytes = usage_bytes
        self.cache = cache
        self.working_set = working_set
        self.rss = rss

    def validate(self):
        self.validate_required(self.available_bytes, 'available_bytes')
        self.validate_required(self.usage_bytes, 'usage_bytes')
        self.validate_required(self.cache, 'cache')
        self.validate_required(self.working_set, 'working_set')
        self.validate_required(self.rss, 'rss')

    def to_map(self):
        result = {}
        result['AvailableBytes'] = self.available_bytes
        result['UsageBytes'] = self.usage_bytes
        result['Cache'] = self.cache
        result['WorkingSet'] = self.working_set
        result['Rss'] = self.rss
        return result

    def from_map(self, map={}):
        self.available_bytes = map.get('AvailableBytes')
        self.usage_bytes = map.get('UsageBytes')
        self.cache = map.get('Cache')
        self.working_set = map.get('WorkingSet')
        self.rss = map.get('Rss')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers(TeaModel):
    def __init__(self, name=None, _cpu=None, memory=None):
        self.name = name
        self._cpu = _cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self._cpu, '_cpu')
        if self._cpu:
            self._cpu.validate()
        self.validate_required(self.memory, 'memory')
        if self.memory:
            self.memory.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        if self._cpu is not None:
            result['CPU'] = self._cpu.to_map()
        else:
            result['CPU'] = None
        if self.memory is not None:
            result['Memory'] = self.memory.to_map()
        else:
            result['Memory'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        if map.get('CPU') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU()
            self._cpu = temp_model.from_map(map['CPU'])
        else:
            self._cpu = None
        if map.get('Memory') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory()
            self.memory = temp_model.from_map(map['Memory'])
        else:
            self.memory = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU(TeaModel):
    def __init__(self, limit=None, load=None, usage_core_nano_seconds=None, usage_nano_cores=None):
        self.limit = limit
        self.load = load
        self.usage_core_nano_seconds = usage_core_nano_seconds
        self.usage_nano_cores = usage_nano_cores

    def validate(self):
        self.validate_required(self.limit, 'limit')
        self.validate_required(self.load, 'load')
        self.validate_required(self.usage_core_nano_seconds, 'usage_core_nano_seconds')
        self.validate_required(self.usage_nano_cores, 'usage_nano_cores')

    def to_map(self):
        result = {}
        result['Limit'] = self.limit
        result['Load'] = self.load
        result['UsageCoreNanoSeconds'] = self.usage_core_nano_seconds
        result['UsageNanoCores'] = self.usage_nano_cores
        return result

    def from_map(self, map={}):
        self.limit = map.get('Limit')
        self.load = map.get('Load')
        self.usage_core_nano_seconds = map.get('UsageCoreNanoSeconds')
        self.usage_nano_cores = map.get('UsageNanoCores')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory(TeaModel):
    def __init__(self, available_bytes=None, usage_bytes=None, cache=None, working_set=None, rss=None):
        self.available_bytes = available_bytes
        self.usage_bytes = usage_bytes
        self.cache = cache
        self.working_set = working_set
        self.rss = rss

    def validate(self):
        self.validate_required(self.available_bytes, 'available_bytes')
        self.validate_required(self.usage_bytes, 'usage_bytes')
        self.validate_required(self.cache, 'cache')
        self.validate_required(self.working_set, 'working_set')
        self.validate_required(self.rss, 'rss')

    def to_map(self):
        result = {}
        result['AvailableBytes'] = self.available_bytes
        result['UsageBytes'] = self.usage_bytes
        result['Cache'] = self.cache
        result['WorkingSet'] = self.working_set
        result['Rss'] = self.rss
        return result

    def from_map(self, map={}):
        self.available_bytes = map.get('AvailableBytes')
        self.usage_bytes = map.get('UsageBytes')
        self.cache = map.get('Cache')
        self.working_set = map.get('WorkingSet')
        self.rss = map.get('Rss')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces(TeaModel):
    def __init__(self, tx_bytes=None, rx_bytes=None, tx_errors=None, rx_errors=None, name=None):
        self.tx_bytes = tx_bytes
        self.rx_bytes = rx_bytes
        self.tx_errors = tx_errors
        self.rx_errors = rx_errors
        self.name = name

    def validate(self):
        self.validate_required(self.tx_bytes, 'tx_bytes')
        self.validate_required(self.rx_bytes, 'rx_bytes')
        self.validate_required(self.tx_errors, 'tx_errors')
        self.validate_required(self.rx_errors, 'rx_errors')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['TxBytes'] = self.tx_bytes
        result['RxBytes'] = self.rx_bytes
        result['TxErrors'] = self.tx_errors
        result['RxErrors'] = self.rx_errors
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.tx_bytes = map.get('TxBytes')
        self.rx_bytes = map.get('RxBytes')
        self.tx_errors = map.get('TxErrors')
        self.rx_errors = map.get('RxErrors')
        self.name = map.get('Name')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork(TeaModel):
    def __init__(self, interfaces=None):
        self.interfaces = []

    def validate(self):
        self.validate_required(self.interfaces, 'interfaces')
        if self.interfaces:
            for k in self.interfaces:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Interfaces'] = []
        if self.interfaces is not None:
            for k in self.interfaces:
                result['Interfaces'].append(k.to_map() if k else None)
        else:
            result['Interfaces'] = None
        return result

    def from_map(self, map={}):
        self.interfaces = []
        if map.get('Interfaces') is not None:
            for k in map.get('Interfaces'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces()
                temp_model = temp_model.from_map(k)
                self.interfaces.append(temp_model)
        else:
            self.interfaces = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasRecords(TeaModel):
    def __init__(self, timestamp=None, containers=None, _cpu=None, memory=None, network=None):
        self.timestamp = timestamp
        self.containers = []
        self._cpu = _cpu
        self.memory = memory
        self.network = network

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.containers, 'containers')
        if self.containers:
            for k in self.containers:
                if k :
                    k.validate()
        self.validate_required(self._cpu, '_cpu')
        if self._cpu:
            self._cpu.validate()
        self.validate_required(self.memory, 'memory')
        if self.memory:
            self.memory.validate()
        self.validate_required(self.network, 'network')
        if self.network:
            self.network.validate()

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['Containers'] = []
        if self.containers is not None:
            for k in self.containers:
                result['Containers'].append(k.to_map() if k else None)
        else:
            result['Containers'] = None
        if self._cpu is not None:
            result['CPU'] = self._cpu.to_map()
        else:
            result['CPU'] = None
        if self.memory is not None:
            result['Memory'] = self.memory.to_map()
        else:
            result['Memory'] = None
        if self.network is not None:
            result['Network'] = self.network.to_map()
        else:
            result['Network'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.containers = []
        if map.get('Containers') is not None:
            for k in map.get('Containers'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers()
                temp_model = temp_model.from_map(k)
                self.containers.append(temp_model)
        else:
            self.containers = None
        if map.get('CPU') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU()
            self._cpu = temp_model.from_map(map['CPU'])
        else:
            self._cpu = None
        if map.get('Memory') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory()
            self.memory = temp_model.from_map(map['Memory'])
        else:
            self.memory = None
        if map.get('Network') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork()
            self.network = temp_model.from_map(map['Network'])
        else:
            self.network = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats(TeaModel):
    def __init__(self, device=None, type=None, limit=None, usage=None, base_usage=None, available=None, has_inodes=None, inodes=None, inodes_free=None, reads_completed=None, reads_merged=None, sectors_read=None, read_time=None, writes_completed=None, writes_merged=None, sectors_written=None, write_time=None, io_in_progress=None, io_time=None, weighted_io_time=None):
        self.device = device
        self.type = type
        self.limit = limit
        self.usage = usage
        self.base_usage = base_usage
        self.available = available
        self.has_inodes = has_inodes
        self.inodes = inodes
        self.inodes_free = inodes_free
        self.reads_completed = reads_completed
        self.reads_merged = reads_merged
        self.sectors_read = sectors_read
        self.read_time = read_time
        self.writes_completed = writes_completed
        self.writes_merged = writes_merged
        self.sectors_written = sectors_written
        self.write_time = write_time
        self.io_in_progress = io_in_progress
        self.io_time = io_time
        self.weighted_io_time = weighted_io_time

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.type, 'type')
        self.validate_required(self.limit, 'limit')
        self.validate_required(self.usage, 'usage')
        self.validate_required(self.base_usage, 'base_usage')
        self.validate_required(self.available, 'available')
        self.validate_required(self.has_inodes, 'has_inodes')
        self.validate_required(self.inodes, 'inodes')
        self.validate_required(self.inodes_free, 'inodes_free')
        self.validate_required(self.reads_completed, 'reads_completed')
        self.validate_required(self.reads_merged, 'reads_merged')
        self.validate_required(self.sectors_read, 'sectors_read')
        self.validate_required(self.read_time, 'read_time')
        self.validate_required(self.writes_completed, 'writes_completed')
        self.validate_required(self.writes_merged, 'writes_merged')
        self.validate_required(self.sectors_written, 'sectors_written')
        self.validate_required(self.write_time, 'write_time')
        self.validate_required(self.io_in_progress, 'io_in_progress')
        self.validate_required(self.io_time, 'io_time')
        self.validate_required(self.weighted_io_time, 'weighted_io_time')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Type'] = self.type
        result['Limit'] = self.limit
        result['Usage'] = self.usage
        result['BaseUsage'] = self.base_usage
        result['Available'] = self.available
        result['HasInodes'] = self.has_inodes
        result['Inodes'] = self.inodes
        result['InodesFree'] = self.inodes_free
        result['ReadsCompleted'] = self.reads_completed
        result['ReadsMerged'] = self.reads_merged
        result['SectorsRead'] = self.sectors_read
        result['ReadTime'] = self.read_time
        result['WritesCompleted'] = self.writes_completed
        result['WritesMerged'] = self.writes_merged
        result['SectorsWritten'] = self.sectors_written
        result['WriteTime'] = self.write_time
        result['IoInProgress'] = self.io_in_progress
        result['IoTime'] = self.io_time
        result['WeightedIoTime'] = self.weighted_io_time
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.type = map.get('Type')
        self.limit = map.get('Limit')
        self.usage = map.get('Usage')
        self.base_usage = map.get('BaseUsage')
        self.available = map.get('Available')
        self.has_inodes = map.get('HasInodes')
        self.inodes = map.get('Inodes')
        self.inodes_free = map.get('InodesFree')
        self.reads_completed = map.get('ReadsCompleted')
        self.reads_merged = map.get('ReadsMerged')
        self.sectors_read = map.get('SectorsRead')
        self.read_time = map.get('ReadTime')
        self.writes_completed = map.get('WritesCompleted')
        self.writes_merged = map.get('WritesMerged')
        self.sectors_written = map.get('SectorsWritten')
        self.write_time = map.get('WriteTime')
        self.io_in_progress = map.get('IoInProgress')
        self.io_time = map.get('IoTime')
        self.weighted_io_time = map.get('WeightedIoTime')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats(TeaModel):
    def __init__(self, id=None, make=None, model=None, memory_total=None, memory_used=None, duty_cycle=None):
        self.id = id
        self.make = make
        self.model = model
        self.memory_total = memory_total
        self.memory_used = memory_used
        self.duty_cycle = duty_cycle

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.make, 'make')
        self.validate_required(self.model, 'model')
        self.validate_required(self.memory_total, 'memory_total')
        self.validate_required(self.memory_used, 'memory_used')
        self.validate_required(self.duty_cycle, 'duty_cycle')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Make'] = self.make
        result['Model'] = self.model
        result['MemoryTotal'] = self.memory_total
        result['MemoryUsed'] = self.memory_used
        result['DutyCycle'] = self.duty_cycle
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.make = map.get('Make')
        self.model = map.get('Model')
        self.memory_total = map.get('MemoryTotal')
        self.memory_used = map.get('MemoryUsed')
        self.duty_cycle = map.get('DutyCycle')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage(TeaModel):
    def __init__(self, total=None, user=None, system=None, per_cpu_usages=None):
        self.total = total
        self.user = user
        self.system = system
        self.per_cpu_usages = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.user, 'user')
        self.validate_required(self.system, 'system')
        self.validate_required(self.per_cpu_usages, 'per_cpu_usages')

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['User'] = self.user
        result['System'] = self.system
        result['PerCpuUsages'] = []
        if self.per_cpu_usages is not None:
            for k in self.per_cpu_usages:
                result['PerCpuUsages'].append(k)
        else:
            result['PerCpuUsages'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.user = map.get('User')
        self.system = map.get('System')
        self.per_cpu_usages = []
        if map.get('PerCpuUsages') is not None:
            for k in map.get('PerCpuUsages'):
                self.per_cpu_usages.append(k)
        else:
            self.per_cpu_usages = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS(TeaModel):
    def __init__(self, periods=None, throttled_periods=None, throttled_time=None):
        self.periods = periods
        self.throttled_periods = throttled_periods
        self.throttled_time = throttled_time

    def validate(self):
        self.validate_required(self.periods, 'periods')
        self.validate_required(self.throttled_periods, 'throttled_periods')
        self.validate_required(self.throttled_time, 'throttled_time')

    def to_map(self):
        result = {}
        result['Periods'] = self.periods
        result['ThrottledPeriods'] = self.throttled_periods
        result['ThrottledTime'] = self.throttled_time
        return result

    def from_map(self, map={}):
        self.periods = map.get('Periods')
        self.throttled_periods = map.get('ThrottledPeriods')
        self.throttled_time = map.get('ThrottledTime')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats(TeaModel):
    def __init__(self, load_average=None, cpu_usage=None, cpu_cfs=None):
        self.load_average = load_average
        self.cpu_usage = cpu_usage
        self.cpu_cfs = cpu_cfs

    def validate(self):
        self.validate_required(self.load_average, 'load_average')
        self.validate_required(self.cpu_usage, 'cpu_usage')
        if self.cpu_usage:
            self.cpu_usage.validate()
        self.validate_required(self.cpu_cfs, 'cpu_cfs')
        if self.cpu_cfs:
            self.cpu_cfs.validate()

    def to_map(self):
        result = {}
        result['LoadAverage'] = self.load_average
        if self.cpu_usage is not None:
            result['CpuUsage'] = self.cpu_usage.to_map()
        else:
            result['CpuUsage'] = None
        if self.cpu_cfs is not None:
            result['CpuCFS'] = self.cpu_cfs.to_map()
        else:
            result['CpuCFS'] = None
        return result

    def from_map(self, map={}):
        self.load_average = map.get('LoadAverage')
        if map.get('CpuUsage') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage()
            self.cpu_usage = temp_model.from_map(map['CpuUsage'])
        else:
            self.cpu_usage = None
        if map.get('CpuCFS') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS()
            self.cpu_cfs = temp_model.from_map(map['CpuCFS'])
        else:
            self.cpu_cfs = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime(TeaModel):
    def __init__(self, device=None, major=None, minor=None, stats=None):
        self.device = device
        self.major = major
        self.minor = minor
        self.stats = stats

    def validate(self):
        self.validate_required(self.device, 'device')
        self.validate_required(self.major, 'major')
        self.validate_required(self.minor, 'minor')
        self.validate_required(self.stats, 'stats')

    def to_map(self):
        result = {}
        result['Device'] = self.device
        result['Major'] = self.major
        result['Minor'] = self.minor
        result['Stats'] = self.stats
        return result

    def from_map(self, map={}):
        self.device = map.get('Device')
        self.major = map.get('Major')
        self.minor = map.get('Minor')
        self.stats = map.get('Stats')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats(TeaModel):
    def __init__(self, io_service_bytes=None, io_serviced=None, io_queued=None, sectors=None, io_service_time=None, io_wait_time=None, io_merged=None, io_time=None):
        self.io_service_bytes = []
        self.io_serviced = []
        self.io_queued = []
        self.sectors = []
        self.io_service_time = []
        self.io_wait_time = []
        self.io_merged = []
        self.io_time = []

    def validate(self):
        self.validate_required(self.io_service_bytes, 'io_service_bytes')
        if self.io_service_bytes:
            for k in self.io_service_bytes:
                if k :
                    k.validate()
        self.validate_required(self.io_serviced, 'io_serviced')
        if self.io_serviced:
            for k in self.io_serviced:
                if k :
                    k.validate()
        self.validate_required(self.io_queued, 'io_queued')
        if self.io_queued:
            for k in self.io_queued:
                if k :
                    k.validate()
        self.validate_required(self.sectors, 'sectors')
        if self.sectors:
            for k in self.sectors:
                if k :
                    k.validate()
        self.validate_required(self.io_service_time, 'io_service_time')
        if self.io_service_time:
            for k in self.io_service_time:
                if k :
                    k.validate()
        self.validate_required(self.io_wait_time, 'io_wait_time')
        if self.io_wait_time:
            for k in self.io_wait_time:
                if k :
                    k.validate()
        self.validate_required(self.io_merged, 'io_merged')
        if self.io_merged:
            for k in self.io_merged:
                if k :
                    k.validate()
        self.validate_required(self.io_time, 'io_time')
        if self.io_time:
            for k in self.io_time:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['IoServiceBytes'] = []
        if self.io_service_bytes is not None:
            for k in self.io_service_bytes:
                result['IoServiceBytes'].append(k.to_map() if k else None)
        else:
            result['IoServiceBytes'] = None
        result['IoServiced'] = []
        if self.io_serviced is not None:
            for k in self.io_serviced:
                result['IoServiced'].append(k.to_map() if k else None)
        else:
            result['IoServiced'] = None
        result['IoQueued'] = []
        if self.io_queued is not None:
            for k in self.io_queued:
                result['IoQueued'].append(k.to_map() if k else None)
        else:
            result['IoQueued'] = None
        result['Sectors'] = []
        if self.sectors is not None:
            for k in self.sectors:
                result['Sectors'].append(k.to_map() if k else None)
        else:
            result['Sectors'] = None
        result['IoServiceTime'] = []
        if self.io_service_time is not None:
            for k in self.io_service_time:
                result['IoServiceTime'].append(k.to_map() if k else None)
        else:
            result['IoServiceTime'] = None
        result['IoWaitTime'] = []
        if self.io_wait_time is not None:
            for k in self.io_wait_time:
                result['IoWaitTime'].append(k.to_map() if k else None)
        else:
            result['IoWaitTime'] = None
        result['IoMerged'] = []
        if self.io_merged is not None:
            for k in self.io_merged:
                result['IoMerged'].append(k.to_map() if k else None)
        else:
            result['IoMerged'] = None
        result['IoTime'] = []
        if self.io_time is not None:
            for k in self.io_time:
                result['IoTime'].append(k.to_map() if k else None)
        else:
            result['IoTime'] = None
        return result

    def from_map(self, map={}):
        self.io_service_bytes = []
        if map.get('IoServiceBytes') is not None:
            for k in map.get('IoServiceBytes'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes()
                temp_model = temp_model.from_map(k)
                self.io_service_bytes.append(temp_model)
        else:
            self.io_service_bytes = None
        self.io_serviced = []
        if map.get('IoServiced') is not None:
            for k in map.get('IoServiced'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced()
                temp_model = temp_model.from_map(k)
                self.io_serviced.append(temp_model)
        else:
            self.io_serviced = None
        self.io_queued = []
        if map.get('IoQueued') is not None:
            for k in map.get('IoQueued'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued()
                temp_model = temp_model.from_map(k)
                self.io_queued.append(temp_model)
        else:
            self.io_queued = None
        self.sectors = []
        if map.get('Sectors') is not None:
            for k in map.get('Sectors'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors()
                temp_model = temp_model.from_map(k)
                self.sectors.append(temp_model)
        else:
            self.sectors = None
        self.io_service_time = []
        if map.get('IoServiceTime') is not None:
            for k in map.get('IoServiceTime'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime()
                temp_model = temp_model.from_map(k)
                self.io_service_time.append(temp_model)
        else:
            self.io_service_time = None
        self.io_wait_time = []
        if map.get('IoWaitTime') is not None:
            for k in map.get('IoWaitTime'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime()
                temp_model = temp_model.from_map(k)
                self.io_wait_time.append(temp_model)
        else:
            self.io_wait_time = None
        self.io_merged = []
        if map.get('IoMerged') is not None:
            for k in map.get('IoMerged'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged()
                temp_model = temp_model.from_map(k)
                self.io_merged.append(temp_model)
        else:
            self.io_merged = None
        self.io_time = []
        if map.get('IoTime') is not None:
            for k in map.get('IoTime'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime()
                temp_model = temp_model.from_map(k)
                self.io_time.append(temp_model)
        else:
            self.io_time = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData(TeaModel):
    def __init__(self, pg_fault=None, pgmaj_fault=None):
        self.pg_fault = pg_fault
        self.pgmaj_fault = pgmaj_fault

    def validate(self):
        self.validate_required(self.pg_fault, 'pg_fault')
        self.validate_required(self.pgmaj_fault, 'pgmaj_fault')

    def to_map(self):
        result = {}
        result['PgFault'] = self.pg_fault
        result['PgmajFault'] = self.pgmaj_fault
        return result

    def from_map(self, map={}):
        self.pg_fault = map.get('PgFault')
        self.pgmaj_fault = map.get('PgmajFault')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData(TeaModel):
    def __init__(self, pg_fault=None, pgmaj_fault=None):
        self.pg_fault = pg_fault
        self.pgmaj_fault = pgmaj_fault

    def validate(self):
        self.validate_required(self.pg_fault, 'pg_fault')
        self.validate_required(self.pgmaj_fault, 'pgmaj_fault')

    def to_map(self):
        result = {}
        result['PgFault'] = self.pg_fault
        result['PgmajFault'] = self.pgmaj_fault
        return result

    def from_map(self, map={}):
        self.pg_fault = map.get('PgFault')
        self.pgmaj_fault = map.get('PgmajFault')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats(TeaModel):
    def __init__(self, usage=None, max_usage=None, cache=None, rss=None, swap=None, working_set=None, fail_cnt=None, container_data=None, hierarchical_data=None):
        self.usage = usage
        self.max_usage = max_usage
        self.cache = cache
        self.rss = rss
        self.swap = swap
        self.working_set = working_set
        self.fail_cnt = fail_cnt
        self.container_data = container_data
        self.hierarchical_data = hierarchical_data

    def validate(self):
        self.validate_required(self.usage, 'usage')
        self.validate_required(self.max_usage, 'max_usage')
        self.validate_required(self.cache, 'cache')
        self.validate_required(self.rss, 'rss')
        self.validate_required(self.swap, 'swap')
        self.validate_required(self.working_set, 'working_set')
        self.validate_required(self.fail_cnt, 'fail_cnt')
        self.validate_required(self.container_data, 'container_data')
        if self.container_data:
            self.container_data.validate()
        self.validate_required(self.hierarchical_data, 'hierarchical_data')
        if self.hierarchical_data:
            self.hierarchical_data.validate()

    def to_map(self):
        result = {}
        result['Usage'] = self.usage
        result['MaxUsage'] = self.max_usage
        result['Cache'] = self.cache
        result['Rss'] = self.rss
        result['Swap'] = self.swap
        result['WorkingSet'] = self.working_set
        result['FailCnt'] = self.fail_cnt
        if self.container_data is not None:
            result['ContainerData'] = self.container_data.to_map()
        else:
            result['ContainerData'] = None
        if self.hierarchical_data is not None:
            result['HierarchicalData'] = self.hierarchical_data.to_map()
        else:
            result['HierarchicalData'] = None
        return result

    def from_map(self, map={}):
        self.usage = map.get('Usage')
        self.max_usage = map.get('MaxUsage')
        self.cache = map.get('Cache')
        self.rss = map.get('Rss')
        self.swap = map.get('Swap')
        self.working_set = map.get('WorkingSet')
        self.fail_cnt = map.get('FailCnt')
        if map.get('ContainerData') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData()
            self.container_data = temp_model.from_map(map['ContainerData'])
        else:
            self.container_data = None
        if map.get('HierarchicalData') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData()
            self.hierarchical_data = temp_model.from_map(map['HierarchicalData'])
        else:
            self.hierarchical_data = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats(TeaModel):
    def __init__(self, name=None, rx_bytes=None, rx_packets=None, rx_errors=None, rx_dropped=None, tx_bytes=None, tx_packets=None, tx_dropped=None, tx_errors=None):
        self.name = name
        self.rx_bytes = rx_bytes
        self.rx_packets = rx_packets
        self.rx_errors = rx_errors
        self.rx_dropped = rx_dropped
        self.tx_bytes = tx_bytes
        self.tx_packets = tx_packets
        self.tx_dropped = tx_dropped
        self.tx_errors = tx_errors

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.rx_bytes, 'rx_bytes')
        self.validate_required(self.rx_packets, 'rx_packets')
        self.validate_required(self.rx_errors, 'rx_errors')
        self.validate_required(self.rx_dropped, 'rx_dropped')
        self.validate_required(self.tx_bytes, 'tx_bytes')
        self.validate_required(self.tx_packets, 'tx_packets')
        self.validate_required(self.tx_dropped, 'tx_dropped')
        self.validate_required(self.tx_errors, 'tx_errors')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['RxBytes'] = self.rx_bytes
        result['RxPackets'] = self.rx_packets
        result['RxErrors'] = self.rx_errors
        result['RxDropped'] = self.rx_dropped
        result['TxBytes'] = self.tx_bytes
        result['TxPackets'] = self.tx_packets
        result['TxDropped'] = self.tx_dropped
        result['TxErrors'] = self.tx_errors
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.rx_bytes = map.get('RxBytes')
        self.rx_packets = map.get('RxPackets')
        self.rx_errors = map.get('RxErrors')
        self.rx_dropped = map.get('RxDropped')
        self.tx_bytes = map.get('TxBytes')
        self.tx_packets = map.get('TxPackets')
        self.tx_dropped = map.get('TxDropped')
        self.tx_errors = map.get('TxErrors')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp(TeaModel):
    def __init__(self, established=None, syn_sent=None, syn_recv=None, fin_wait_1=None, fin_wait_2=None, time_wait=None, close=None, close_wait=None, last_ack=None, listen=None, closing=None):
        self.established = established
        self.syn_sent = syn_sent
        self.syn_recv = syn_recv
        self.fin_wait_1 = fin_wait_1
        self.fin_wait_2 = fin_wait_2
        self.time_wait = time_wait
        self.close = close
        self.close_wait = close_wait
        self.last_ack = last_ack
        self.listen = listen
        self.closing = closing

    def validate(self):
        self.validate_required(self.established, 'established')
        self.validate_required(self.syn_sent, 'syn_sent')
        self.validate_required(self.syn_recv, 'syn_recv')
        self.validate_required(self.fin_wait_1, 'fin_wait_1')
        self.validate_required(self.fin_wait_2, 'fin_wait_2')
        self.validate_required(self.time_wait, 'time_wait')
        self.validate_required(self.close, 'close')
        self.validate_required(self.close_wait, 'close_wait')
        self.validate_required(self.last_ack, 'last_ack')
        self.validate_required(self.listen, 'listen')
        self.validate_required(self.closing, 'closing')

    def to_map(self):
        result = {}
        result['Established'] = self.established
        result['SynSent'] = self.syn_sent
        result['SynRecv'] = self.syn_recv
        result['FinWait1'] = self.fin_wait_1
        result['FinWait2'] = self.fin_wait_2
        result['TimeWait'] = self.time_wait
        result['Close'] = self.close
        result['CloseWait'] = self.close_wait
        result['LastAck'] = self.last_ack
        result['Listen'] = self.listen
        result['Closing'] = self.closing
        return result

    def from_map(self, map={}):
        self.established = map.get('Established')
        self.syn_sent = map.get('SynSent')
        self.syn_recv = map.get('SynRecv')
        self.fin_wait_1 = map.get('FinWait1')
        self.fin_wait_2 = map.get('FinWait2')
        self.time_wait = map.get('TimeWait')
        self.close = map.get('Close')
        self.close_wait = map.get('CloseWait')
        self.last_ack = map.get('LastAck')
        self.listen = map.get('Listen')
        self.closing = map.get('Closing')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6(TeaModel):
    def __init__(self, established=None, syn_sent=None, syn_recv=None, fin_wait_1=None, fin_wait_2=None, time_wait=None, close=None, close_wait=None, last_ack=None, listen=None, closing=None):
        self.established = established
        self.syn_sent = syn_sent
        self.syn_recv = syn_recv
        self.fin_wait_1 = fin_wait_1
        self.fin_wait_2 = fin_wait_2
        self.time_wait = time_wait
        self.close = close
        self.close_wait = close_wait
        self.last_ack = last_ack
        self.listen = listen
        self.closing = closing

    def validate(self):
        self.validate_required(self.established, 'established')
        self.validate_required(self.syn_sent, 'syn_sent')
        self.validate_required(self.syn_recv, 'syn_recv')
        self.validate_required(self.fin_wait_1, 'fin_wait_1')
        self.validate_required(self.fin_wait_2, 'fin_wait_2')
        self.validate_required(self.time_wait, 'time_wait')
        self.validate_required(self.close, 'close')
        self.validate_required(self.close_wait, 'close_wait')
        self.validate_required(self.last_ack, 'last_ack')
        self.validate_required(self.listen, 'listen')
        self.validate_required(self.closing, 'closing')

    def to_map(self):
        result = {}
        result['Established'] = self.established
        result['SynSent'] = self.syn_sent
        result['SynRecv'] = self.syn_recv
        result['FinWait1'] = self.fin_wait_1
        result['FinWait2'] = self.fin_wait_2
        result['TimeWait'] = self.time_wait
        result['Close'] = self.close
        result['CloseWait'] = self.close_wait
        result['LastAck'] = self.last_ack
        result['Listen'] = self.listen
        result['Closing'] = self.closing
        return result

    def from_map(self, map={}):
        self.established = map.get('Established')
        self.syn_sent = map.get('SynSent')
        self.syn_recv = map.get('SynRecv')
        self.fin_wait_1 = map.get('FinWait1')
        self.fin_wait_2 = map.get('FinWait2')
        self.time_wait = map.get('TimeWait')
        self.close = map.get('Close')
        self.close_wait = map.get('CloseWait')
        self.last_ack = map.get('LastAck')
        self.listen = map.get('Listen')
        self.closing = map.get('Closing')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp(TeaModel):
    def __init__(self, listen=None, dropped=None, rx_queued=None, tx_queued=None):
        self.listen = listen
        self.dropped = dropped
        self.rx_queued = rx_queued
        self.tx_queued = tx_queued

    def validate(self):
        self.validate_required(self.listen, 'listen')
        self.validate_required(self.dropped, 'dropped')
        self.validate_required(self.rx_queued, 'rx_queued')
        self.validate_required(self.tx_queued, 'tx_queued')

    def to_map(self):
        result = {}
        result['Listen'] = self.listen
        result['Dropped'] = self.dropped
        result['RxQueued'] = self.rx_queued
        result['TxQueued'] = self.tx_queued
        return result

    def from_map(self, map={}):
        self.listen = map.get('Listen')
        self.dropped = map.get('Dropped')
        self.rx_queued = map.get('RxQueued')
        self.tx_queued = map.get('TxQueued')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6(TeaModel):
    def __init__(self, listen=None, dropped=None, rx_queued=None, tx_queued=None):
        self.listen = listen
        self.dropped = dropped
        self.rx_queued = rx_queued
        self.tx_queued = tx_queued

    def validate(self):
        self.validate_required(self.listen, 'listen')
        self.validate_required(self.dropped, 'dropped')
        self.validate_required(self.rx_queued, 'rx_queued')
        self.validate_required(self.tx_queued, 'tx_queued')

    def to_map(self):
        result = {}
        result['Listen'] = self.listen
        result['Dropped'] = self.dropped
        result['RxQueued'] = self.rx_queued
        result['TxQueued'] = self.tx_queued
        return result

    def from_map(self, map={}):
        self.listen = map.get('Listen')
        self.dropped = map.get('Dropped')
        self.rx_queued = map.get('RxQueued')
        self.tx_queued = map.get('TxQueued')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats(TeaModel):
    def __init__(self, name=None, rx_bytes=None, rx_packets=None, rx_errors=None, rx_dropped=None, tx_bytes=None, tx_packets=None, tx_dropped=None, tx_errors=None, interface_stats=None, tcp=None, tcp_6=None, udp=None, udp_6=None):
        self.name = name
        self.rx_bytes = rx_bytes
        self.rx_packets = rx_packets
        self.rx_errors = rx_errors
        self.rx_dropped = rx_dropped
        self.tx_bytes = tx_bytes
        self.tx_packets = tx_packets
        self.tx_dropped = tx_dropped
        self.tx_errors = tx_errors
        self.interface_stats = []
        self.tcp = tcp
        self.tcp_6 = tcp_6
        self.udp = udp
        self.udp_6 = udp_6

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.rx_bytes, 'rx_bytes')
        self.validate_required(self.rx_packets, 'rx_packets')
        self.validate_required(self.rx_errors, 'rx_errors')
        self.validate_required(self.rx_dropped, 'rx_dropped')
        self.validate_required(self.tx_bytes, 'tx_bytes')
        self.validate_required(self.tx_packets, 'tx_packets')
        self.validate_required(self.tx_dropped, 'tx_dropped')
        self.validate_required(self.tx_errors, 'tx_errors')
        self.validate_required(self.interface_stats, 'interface_stats')
        if self.interface_stats:
            for k in self.interface_stats:
                if k :
                    k.validate()
        self.validate_required(self.tcp, 'tcp')
        if self.tcp:
            self.tcp.validate()
        self.validate_required(self.tcp_6, 'tcp_6')
        if self.tcp_6:
            self.tcp_6.validate()
        self.validate_required(self.udp, 'udp')
        if self.udp:
            self.udp.validate()
        self.validate_required(self.udp_6, 'udp_6')
        if self.udp_6:
            self.udp_6.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['RxBytes'] = self.rx_bytes
        result['RxPackets'] = self.rx_packets
        result['RxErrors'] = self.rx_errors
        result['RxDropped'] = self.rx_dropped
        result['TxBytes'] = self.tx_bytes
        result['TxPackets'] = self.tx_packets
        result['TxDropped'] = self.tx_dropped
        result['TxErrors'] = self.tx_errors
        result['InterfaceStats'] = []
        if self.interface_stats is not None:
            for k in self.interface_stats:
                result['InterfaceStats'].append(k.to_map() if k else None)
        else:
            result['InterfaceStats'] = None
        if self.tcp is not None:
            result['Tcp'] = self.tcp.to_map()
        else:
            result['Tcp'] = None
        if self.tcp_6 is not None:
            result['Tcp6'] = self.tcp_6.to_map()
        else:
            result['Tcp6'] = None
        if self.udp is not None:
            result['Udp'] = self.udp.to_map()
        else:
            result['Udp'] = None
        if self.udp_6 is not None:
            result['Udp6'] = self.udp_6.to_map()
        else:
            result['Udp6'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.rx_bytes = map.get('RxBytes')
        self.rx_packets = map.get('RxPackets')
        self.rx_errors = map.get('RxErrors')
        self.rx_dropped = map.get('RxDropped')
        self.tx_bytes = map.get('TxBytes')
        self.tx_packets = map.get('TxPackets')
        self.tx_dropped = map.get('TxDropped')
        self.tx_errors = map.get('TxErrors')
        self.interface_stats = []
        if map.get('InterfaceStats') is not None:
            for k in map.get('InterfaceStats'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats()
                temp_model = temp_model.from_map(k)
                self.interface_stats.append(temp_model)
        else:
            self.interface_stats = None
        if map.get('Tcp') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp()
            self.tcp = temp_model.from_map(map['Tcp'])
        else:
            self.tcp = None
        if map.get('Tcp6') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6()
            self.tcp_6 = temp_model.from_map(map['Tcp6'])
        else:
            self.tcp_6 = None
        if map.get('Udp') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp()
            self.udp = temp_model.from_map(map['Udp'])
        else:
            self.udp = None
        if map.get('Udp6') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6()
            self.udp_6 = temp_model.from_map(map['Udp6'])
        else:
            self.udp_6 = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats(TeaModel):
    def __init__(self, nr_sleeping=None, nr_running=None, nr_stopped=None, nr_uninterruptible=None, nr_io_wait=None):
        self.nr_sleeping = nr_sleeping
        self.nr_running = nr_running
        self.nr_stopped = nr_stopped
        self.nr_uninterruptible = nr_uninterruptible
        self.nr_io_wait = nr_io_wait

    def validate(self):
        self.validate_required(self.nr_sleeping, 'nr_sleeping')
        self.validate_required(self.nr_running, 'nr_running')
        self.validate_required(self.nr_stopped, 'nr_stopped')
        self.validate_required(self.nr_uninterruptible, 'nr_uninterruptible')
        self.validate_required(self.nr_io_wait, 'nr_io_wait')

    def to_map(self):
        result = {}
        result['NrSleeping'] = self.nr_sleeping
        result['NrRunning'] = self.nr_running
        result['NrStopped'] = self.nr_stopped
        result['NrUninterruptible'] = self.nr_uninterruptible
        result['NrIoWait'] = self.nr_io_wait
        return result

    def from_map(self, map={}):
        self.nr_sleeping = map.get('NrSleeping')
        self.nr_running = map.get('NrRunning')
        self.nr_stopped = map.get('NrStopped')
        self.nr_uninterruptible = map.get('NrUninterruptible')
        self.nr_io_wait = map.get('NrIoWait')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats(TeaModel):
    def __init__(self, timestamp=None, fs_stats=None, accelerator_stats=None, cpu_stats=None, disk_io_stats=None, memory_stats=None, network_stats=None, task_stats=None):
        self.timestamp = timestamp
        self.fs_stats = []
        self.accelerator_stats = []
        self.cpu_stats = cpu_stats
        self.disk_io_stats = disk_io_stats
        self.memory_stats = memory_stats
        self.network_stats = network_stats
        self.task_stats = task_stats

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.fs_stats, 'fs_stats')
        if self.fs_stats:
            for k in self.fs_stats:
                if k :
                    k.validate()
        self.validate_required(self.accelerator_stats, 'accelerator_stats')
        if self.accelerator_stats:
            for k in self.accelerator_stats:
                if k :
                    k.validate()
        self.validate_required(self.cpu_stats, 'cpu_stats')
        if self.cpu_stats:
            self.cpu_stats.validate()
        self.validate_required(self.disk_io_stats, 'disk_io_stats')
        if self.disk_io_stats:
            self.disk_io_stats.validate()
        self.validate_required(self.memory_stats, 'memory_stats')
        if self.memory_stats:
            self.memory_stats.validate()
        self.validate_required(self.network_stats, 'network_stats')
        if self.network_stats:
            self.network_stats.validate()
        self.validate_required(self.task_stats, 'task_stats')
        if self.task_stats:
            self.task_stats.validate()

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['FsStats'] = []
        if self.fs_stats is not None:
            for k in self.fs_stats:
                result['FsStats'].append(k.to_map() if k else None)
        else:
            result['FsStats'] = None
        result['AcceleratorStats'] = []
        if self.accelerator_stats is not None:
            for k in self.accelerator_stats:
                result['AcceleratorStats'].append(k.to_map() if k else None)
        else:
            result['AcceleratorStats'] = None
        if self.cpu_stats is not None:
            result['CpuStats'] = self.cpu_stats.to_map()
        else:
            result['CpuStats'] = None
        if self.disk_io_stats is not None:
            result['DiskIoStats'] = self.disk_io_stats.to_map()
        else:
            result['DiskIoStats'] = None
        if self.memory_stats is not None:
            result['MemoryStats'] = self.memory_stats.to_map()
        else:
            result['MemoryStats'] = None
        if self.network_stats is not None:
            result['NetworkStats'] = self.network_stats.to_map()
        else:
            result['NetworkStats'] = None
        if self.task_stats is not None:
            result['TaskStats'] = self.task_stats.to_map()
        else:
            result['TaskStats'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.fs_stats = []
        if map.get('FsStats') is not None:
            for k in map.get('FsStats'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats()
                temp_model = temp_model.from_map(k)
                self.fs_stats.append(temp_model)
        else:
            self.fs_stats = None
        self.accelerator_stats = []
        if map.get('AcceleratorStats') is not None:
            for k in map.get('AcceleratorStats'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats()
                temp_model = temp_model.from_map(k)
                self.accelerator_stats.append(temp_model)
        else:
            self.accelerator_stats = None
        if map.get('CpuStats') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats()
            self.cpu_stats = temp_model.from_map(map['CpuStats'])
        else:
            self.cpu_stats = None
        if map.get('DiskIoStats') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats()
            self.disk_io_stats = temp_model.from_map(map['DiskIoStats'])
        else:
            self.disk_io_stats = None
        if map.get('MemoryStats') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats()
            self.memory_stats = temp_model.from_map(map['MemoryStats'])
        else:
            self.memory_stats = None
        if map.get('NetworkStats') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats()
            self.network_stats = temp_model.from_map(map['NetworkStats'])
        else:
            self.network_stats = None
        if map.get('TaskStats') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats()
            self.task_stats = temp_model.from_map(map['TaskStats'])
        else:
            self.task_stats = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu(TeaModel):
    def __init__(self, limit=None, max_limit=None, mask=None, quota=None, period=None):
        self.limit = limit
        self.max_limit = max_limit
        self.mask = mask
        self.quota = quota
        self.period = period

    def validate(self):
        self.validate_required(self.limit, 'limit')
        self.validate_required(self.max_limit, 'max_limit')
        self.validate_required(self.mask, 'mask')
        self.validate_required(self.quota, 'quota')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['Limit'] = self.limit
        result['MaxLimit'] = self.max_limit
        result['Mask'] = self.mask
        result['Quota'] = self.quota
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.limit = map.get('Limit')
        self.max_limit = map.get('MaxLimit')
        self.mask = map.get('Mask')
        self.quota = map.get('Quota')
        self.period = map.get('Period')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory(TeaModel):
    def __init__(self, limit=None, reservation=None, swap_limit=None):
        self.limit = limit
        self.reservation = reservation
        self.swap_limit = swap_limit

    def validate(self):
        self.validate_required(self.limit, 'limit')
        self.validate_required(self.reservation, 'reservation')
        self.validate_required(self.swap_limit, 'swap_limit')

    def to_map(self):
        result = {}
        result['Limit'] = self.limit
        result['Reservation'] = self.reservation
        result['SwapLimit'] = self.swap_limit
        return result

    def from_map(self, map={}):
        self.limit = map.get('Limit')
        self.reservation = map.get('Reservation')
        self.swap_limit = map.get('SwapLimit')
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec(TeaModel):
    def __init__(self, creation_time=None, has_cpu=None, has_memory=None, has_network=None, has_filesystem=None, has_disk_io=None, has_custom_metrics=None, image=None, labels=None, envs=None, container_cpu=None, container_memory=None):
        self.creation_time = creation_time
        self.has_cpu = has_cpu
        self.has_memory = has_memory
        self.has_network = has_network
        self.has_filesystem = has_filesystem
        self.has_disk_io = has_disk_io
        self.has_custom_metrics = has_custom_metrics
        self.image = image
        self.labels = labels
        self.envs = envs
        self.container_cpu = container_cpu
        self.container_memory = container_memory

    def validate(self):
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.has_cpu, 'has_cpu')
        self.validate_required(self.has_memory, 'has_memory')
        self.validate_required(self.has_network, 'has_network')
        self.validate_required(self.has_filesystem, 'has_filesystem')
        self.validate_required(self.has_disk_io, 'has_disk_io')
        self.validate_required(self.has_custom_metrics, 'has_custom_metrics')
        self.validate_required(self.image, 'image')
        self.validate_required(self.labels, 'labels')
        self.validate_required(self.envs, 'envs')
        self.validate_required(self.container_cpu, 'container_cpu')
        if self.container_cpu:
            self.container_cpu.validate()
        self.validate_required(self.container_memory, 'container_memory')
        if self.container_memory:
            self.container_memory.validate()

    def to_map(self):
        result = {}
        result['CreationTime'] = self.creation_time
        result['HasCpu'] = self.has_cpu
        result['HasMemory'] = self.has_memory
        result['HasNetwork'] = self.has_network
        result['HasFilesystem'] = self.has_filesystem
        result['HasDiskIo'] = self.has_disk_io
        result['HasCustomMetrics'] = self.has_custom_metrics
        result['Image'] = self.image
        result['Labels'] = self.labels
        result['Envs'] = self.envs
        if self.container_cpu is not None:
            result['ContainerCpu'] = self.container_cpu.to_map()
        else:
            result['ContainerCpu'] = None
        if self.container_memory is not None:
            result['ContainerMemory'] = self.container_memory.to_map()
        else:
            result['ContainerMemory'] = None
        return result

    def from_map(self, map={}):
        self.creation_time = map.get('CreationTime')
        self.has_cpu = map.get('HasCpu')
        self.has_memory = map.get('HasMemory')
        self.has_network = map.get('HasNetwork')
        self.has_filesystem = map.get('HasFilesystem')
        self.has_disk_io = map.get('HasDiskIo')
        self.has_custom_metrics = map.get('HasCustomMetrics')
        self.image = map.get('Image')
        self.labels = map.get('Labels')
        self.envs = map.get('Envs')
        if map.get('ContainerCpu') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu()
            self.container_cpu = temp_model.from_map(map['ContainerCpu'])
        else:
            self.container_cpu = None
        if map.get('ContainerMemory') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory()
            self.container_memory = temp_model.from_map(map['ContainerMemory'])
        else:
            self.container_memory = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos(TeaModel):
    def __init__(self, id=None, name=None, namespace=None, labels=None, container_stats=None, container_spec=None, aliases=None):
        self.id = id
        self.name = name
        self.namespace = namespace
        self.labels = labels
        self.container_stats = []
        self.container_spec = container_spec
        self.aliases = []

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.labels, 'labels')
        self.validate_required(self.container_stats, 'container_stats')
        if self.container_stats:
            for k in self.container_stats:
                if k :
                    k.validate()
        self.validate_required(self.container_spec, 'container_spec')
        if self.container_spec:
            self.container_spec.validate()
        self.validate_required(self.aliases, 'aliases')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Namespace'] = self.namespace
        result['Labels'] = self.labels
        result['ContainerStats'] = []
        if self.container_stats is not None:
            for k in self.container_stats:
                result['ContainerStats'].append(k.to_map() if k else None)
        else:
            result['ContainerStats'] = None
        if self.container_spec is not None:
            result['ContainerSpec'] = self.container_spec.to_map()
        else:
            result['ContainerSpec'] = None
        result['Aliases'] = []
        if self.aliases is not None:
            for k in self.aliases:
                result['Aliases'].append(k)
        else:
            result['Aliases'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.namespace = map.get('Namespace')
        self.labels = map.get('Labels')
        self.container_stats = []
        if map.get('ContainerStats') is not None:
            for k in map.get('ContainerStats'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats()
                temp_model = temp_model.from_map(k)
                self.container_stats.append(temp_model)
        else:
            self.container_stats = None
        if map.get('ContainerSpec') is not None:
            temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec()
            self.container_spec = temp_model.from_map(map['ContainerSpec'])
        else:
            self.container_spec = None
        self.aliases = []
        if map.get('Aliases') is not None:
            for k in map.get('Aliases'):
                self.aliases.append(k)
        else:
            self.aliases = None
        return self


class DescribeMultiContainerGroupMetricResponseMonitorDatas(TeaModel):
    def __init__(self, container_group_id=None, records=None, container_infos=None):
        self.container_group_id = container_group_id
        self.records = []
        self.container_infos = []

    def validate(self):
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()
        self.validate_required(self.container_infos, 'container_infos')
        if self.container_infos:
            for k in self.container_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContainerGroupId'] = self.container_group_id
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        result['ContainerInfos'] = []
        if self.container_infos is not None:
            for k in self.container_infos:
                result['ContainerInfos'].append(k.to_map() if k else None)
        else:
            result['ContainerInfos'] = None
        return result

    def from_map(self, map={}):
        self.container_group_id = map.get('ContainerGroupId')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        self.container_infos = []
        if map.get('ContainerInfos') is not None:
            for k in map.get('ContainerInfos'):
                temp_model = DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos()
                temp_model = temp_model.from_map(k)
                self.container_infos.append(temp_model)
        else:
            self.container_infos = None
        return self


class DescribeContainerGroupMetricRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, start_time=None, end_time=None, period=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.start_time = start_time
        self.end_time = end_time
        self.period = period

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.period = map.get('Period')
        return self


class DescribeContainerGroupMetricResponse(TeaModel):
    def __init__(self, request_id=None, container_group_id=None, records=None):
        self.request_id = request_id
        self.container_group_id = container_group_id
        self.records = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContainerGroupId'] = self.container_group_id
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.container_group_id = map.get('ContainerGroupId')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = DescribeContainerGroupMetricResponseRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class DescribeContainerGroupMetricResponseRecordsContainersCPU(TeaModel):
    def __init__(self, usage_nano_cores=None, usage_core_nano_seconds=None, load=None, limit=None):
        self.usage_nano_cores = usage_nano_cores
        self.usage_core_nano_seconds = usage_core_nano_seconds
        self.load = load
        self.limit = limit

    def validate(self):
        self.validate_required(self.usage_nano_cores, 'usage_nano_cores')
        self.validate_required(self.usage_core_nano_seconds, 'usage_core_nano_seconds')
        self.validate_required(self.load, 'load')
        self.validate_required(self.limit, 'limit')

    def to_map(self):
        result = {}
        result['UsageNanoCores'] = self.usage_nano_cores
        result['UsageCoreNanoSeconds'] = self.usage_core_nano_seconds
        result['Load'] = self.load
        result['Limit'] = self.limit
        return result

    def from_map(self, map={}):
        self.usage_nano_cores = map.get('UsageNanoCores')
        self.usage_core_nano_seconds = map.get('UsageCoreNanoSeconds')
        self.load = map.get('Load')
        self.limit = map.get('Limit')
        return self


class DescribeContainerGroupMetricResponseRecordsContainersMemory(TeaModel):
    def __init__(self, available_bytes=None, usage_bytes=None, cache=None, working_set=None, rss=None):
        self.available_bytes = available_bytes
        self.usage_bytes = usage_bytes
        self.cache = cache
        self.working_set = working_set
        self.rss = rss

    def validate(self):
        self.validate_required(self.available_bytes, 'available_bytes')
        self.validate_required(self.usage_bytes, 'usage_bytes')
        self.validate_required(self.cache, 'cache')
        self.validate_required(self.working_set, 'working_set')
        self.validate_required(self.rss, 'rss')

    def to_map(self):
        result = {}
        result['AvailableBytes'] = self.available_bytes
        result['UsageBytes'] = self.usage_bytes
        result['Cache'] = self.cache
        result['WorkingSet'] = self.working_set
        result['Rss'] = self.rss
        return result

    def from_map(self, map={}):
        self.available_bytes = map.get('AvailableBytes')
        self.usage_bytes = map.get('UsageBytes')
        self.cache = map.get('Cache')
        self.working_set = map.get('WorkingSet')
        self.rss = map.get('Rss')
        return self


class DescribeContainerGroupMetricResponseRecordsContainers(TeaModel):
    def __init__(self, name=None, _cpu=None, memory=None):
        self.name = name
        self._cpu = _cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self._cpu, '_cpu')
        if self._cpu:
            self._cpu.validate()
        self.validate_required(self.memory, 'memory')
        if self.memory:
            self.memory.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        if self._cpu is not None:
            result['CPU'] = self._cpu.to_map()
        else:
            result['CPU'] = None
        if self.memory is not None:
            result['Memory'] = self.memory.to_map()
        else:
            result['Memory'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        if map.get('CPU') is not None:
            temp_model = DescribeContainerGroupMetricResponseRecordsContainersCPU()
            self._cpu = temp_model.from_map(map['CPU'])
        else:
            self._cpu = None
        if map.get('Memory') is not None:
            temp_model = DescribeContainerGroupMetricResponseRecordsContainersMemory()
            self.memory = temp_model.from_map(map['Memory'])
        else:
            self.memory = None
        return self


class DescribeContainerGroupMetricResponseRecordsCPU(TeaModel):
    def __init__(self, usage_nano_cores=None, usage_core_nano_seconds=None, load=None, limit=None):
        self.usage_nano_cores = usage_nano_cores
        self.usage_core_nano_seconds = usage_core_nano_seconds
        self.load = load
        self.limit = limit

    def validate(self):
        self.validate_required(self.usage_nano_cores, 'usage_nano_cores')
        self.validate_required(self.usage_core_nano_seconds, 'usage_core_nano_seconds')
        self.validate_required(self.load, 'load')
        self.validate_required(self.limit, 'limit')

    def to_map(self):
        result = {}
        result['UsageNanoCores'] = self.usage_nano_cores
        result['UsageCoreNanoSeconds'] = self.usage_core_nano_seconds
        result['Load'] = self.load
        result['Limit'] = self.limit
        return result

    def from_map(self, map={}):
        self.usage_nano_cores = map.get('UsageNanoCores')
        self.usage_core_nano_seconds = map.get('UsageCoreNanoSeconds')
        self.load = map.get('Load')
        self.limit = map.get('Limit')
        return self


class DescribeContainerGroupMetricResponseRecordsMemory(TeaModel):
    def __init__(self, available_bytes=None, usage_bytes=None, cache=None, working_set=None, rss=None):
        self.available_bytes = available_bytes
        self.usage_bytes = usage_bytes
        self.cache = cache
        self.working_set = working_set
        self.rss = rss

    def validate(self):
        self.validate_required(self.available_bytes, 'available_bytes')
        self.validate_required(self.usage_bytes, 'usage_bytes')
        self.validate_required(self.cache, 'cache')
        self.validate_required(self.working_set, 'working_set')
        self.validate_required(self.rss, 'rss')

    def to_map(self):
        result = {}
        result['AvailableBytes'] = self.available_bytes
        result['UsageBytes'] = self.usage_bytes
        result['Cache'] = self.cache
        result['WorkingSet'] = self.working_set
        result['Rss'] = self.rss
        return result

    def from_map(self, map={}):
        self.available_bytes = map.get('AvailableBytes')
        self.usage_bytes = map.get('UsageBytes')
        self.cache = map.get('Cache')
        self.working_set = map.get('WorkingSet')
        self.rss = map.get('Rss')
        return self


class DescribeContainerGroupMetricResponseRecordsNetworkInterfaces(TeaModel):
    def __init__(self, tx_bytes=None, rx_bytes=None, tx_errors=None, rx_errors=None, name=None):
        self.tx_bytes = tx_bytes
        self.rx_bytes = rx_bytes
        self.tx_errors = tx_errors
        self.rx_errors = rx_errors
        self.name = name

    def validate(self):
        self.validate_required(self.tx_bytes, 'tx_bytes')
        self.validate_required(self.rx_bytes, 'rx_bytes')
        self.validate_required(self.tx_errors, 'tx_errors')
        self.validate_required(self.rx_errors, 'rx_errors')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['TxBytes'] = self.tx_bytes
        result['RxBytes'] = self.rx_bytes
        result['TxErrors'] = self.tx_errors
        result['RxErrors'] = self.rx_errors
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.tx_bytes = map.get('TxBytes')
        self.rx_bytes = map.get('RxBytes')
        self.tx_errors = map.get('TxErrors')
        self.rx_errors = map.get('RxErrors')
        self.name = map.get('Name')
        return self


class DescribeContainerGroupMetricResponseRecordsNetwork(TeaModel):
    def __init__(self, interfaces=None):
        self.interfaces = []

    def validate(self):
        self.validate_required(self.interfaces, 'interfaces')
        if self.interfaces:
            for k in self.interfaces:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Interfaces'] = []
        if self.interfaces is not None:
            for k in self.interfaces:
                result['Interfaces'].append(k.to_map() if k else None)
        else:
            result['Interfaces'] = None
        return result

    def from_map(self, map={}):
        self.interfaces = []
        if map.get('Interfaces') is not None:
            for k in map.get('Interfaces'):
                temp_model = DescribeContainerGroupMetricResponseRecordsNetworkInterfaces()
                temp_model = temp_model.from_map(k)
                self.interfaces.append(temp_model)
        else:
            self.interfaces = None
        return self


class DescribeContainerGroupMetricResponseRecords(TeaModel):
    def __init__(self, timestamp=None, containers=None, _cpu=None, memory=None, network=None):
        self.timestamp = timestamp
        self.containers = []
        self._cpu = _cpu
        self.memory = memory
        self.network = network

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.containers, 'containers')
        if self.containers:
            for k in self.containers:
                if k :
                    k.validate()
        self.validate_required(self._cpu, '_cpu')
        if self._cpu:
            self._cpu.validate()
        self.validate_required(self.memory, 'memory')
        if self.memory:
            self.memory.validate()
        self.validate_required(self.network, 'network')
        if self.network:
            self.network.validate()

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['Containers'] = []
        if self.containers is not None:
            for k in self.containers:
                result['Containers'].append(k.to_map() if k else None)
        else:
            result['Containers'] = None
        if self._cpu is not None:
            result['CPU'] = self._cpu.to_map()
        else:
            result['CPU'] = None
        if self.memory is not None:
            result['Memory'] = self.memory.to_map()
        else:
            result['Memory'] = None
        if self.network is not None:
            result['Network'] = self.network.to_map()
        else:
            result['Network'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.containers = []
        if map.get('Containers') is not None:
            for k in map.get('Containers'):
                temp_model = DescribeContainerGroupMetricResponseRecordsContainers()
                temp_model = temp_model.from_map(k)
                self.containers.append(temp_model)
        else:
            self.containers = None
        if map.get('CPU') is not None:
            temp_model = DescribeContainerGroupMetricResponseRecordsCPU()
            self._cpu = temp_model.from_map(map['CPU'])
        else:
            self._cpu = None
        if map.get('Memory') is not None:
            temp_model = DescribeContainerGroupMetricResponseRecordsMemory()
            self.memory = temp_model.from_map(map['Memory'])
        else:
            self.memory = None
        if map.get('Network') is not None:
            temp_model = DescribeContainerGroupMetricResponseRecordsNetwork()
            self.network = temp_model.from_map(map['Network'])
        else:
            self.network = None
        return self


class UpdateContainerGroupByTemplateRequest(TeaModel):
    def __init__(self, region_id=None, template=None, client_token=None):
        self.region_id = region_id
        self.template = template
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.template, 'template')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['Template'] = self.template
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.template = map.get('Template')
        self.client_token = map.get('ClientToken')
        return self


class UpdateContainerGroupByTemplateResponse(TeaModel):
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


class CreateContainerGroupFromTemplateRequest(TeaModel):
    def __init__(self, region_id=None, template=None, client_token=None):
        self.region_id = region_id
        self.template = template
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.template, 'template')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['Template'] = self.template
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.template = map.get('Template')
        self.client_token = map.get('ClientToken')
        return self


class CreateContainerGroupFromTemplateResponse(TeaModel):
    def __init__(self, request_id=None, container_group_id=None):
        self.request_id = request_id
        self.container_group_id = container_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContainerGroupId'] = self.container_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.container_group_id = map.get('ContainerGroupId')
        return self


class ExportContainerGroupTemplateRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None):
        self.region_id = region_id
        self.container_group_id = container_group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        return self


class ExportContainerGroupTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template=None):
        self.request_id = request_id
        self.template = template

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template, 'template')
        if self.template:
            self.template.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.template is not None:
            result['Template'] = self.template.to_map()
        else:
            result['Template'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Template') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplate()
            self.template = temp_model.from_map(map['Template'])
        else:
            self.template = None
        return self


class ExportContainerGroupTemplateResponseTemplateTags(TeaModel):
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


class ExportContainerGroupTemplateResponseTemplateResources(TeaModel):
    def __init__(self, cpu=None, memory=None):
        self.cpu = cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.memory, 'memory')

    def to_map(self):
        result = {}
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        return result

    def from_map(self, map={}):
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems(TeaModel):
    def __init__(self, mode=None, path=None, content=None):
        self.mode = mode
        self.path = path
        self.content = content

    def validate(self):
        self.validate_required(self.mode, 'mode')
        self.validate_required(self.path, 'path')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['Mode'] = self.mode
        result['Path'] = self.path
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.mode = map.get('Mode')
        self.path = map.get('Path')
        self.content = map.get('Content')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile(TeaModel):
    def __init__(self, default_mode=None, items=None):
        self.default_mode = default_mode
        self.items = []

    def validate(self):
        self.validate_required(self.default_mode, 'default_mode')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DefaultMode'] = self.default_mode
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.default_mode = map.get('DefaultMode')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir(TeaModel):
    def __init__(self, size_limit=None):
        self.size_limit = size_limit

    def validate(self):
        self.validate_required(self.size_limit, 'size_limit')

    def to_map(self):
        result = {}
        result['SizeLimit'] = self.size_limit
        return result

    def from_map(self, map={}):
        self.size_limit = map.get('SizeLimit')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs(TeaModel):
    def __init__(self, server=None, path=None, read_only=None):
        self.server = server
        self.path = path
        self.read_only = read_only

    def validate(self):
        self.validate_required(self.server, 'server')
        self.validate_required(self.path, 'path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['Path'] = self.path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.path = map.get('Path')
        self.read_only = map.get('ReadOnly')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecVolumes(TeaModel):
    def __init__(self, name=None, config_file=None, empty_dir=None, nfs=None):
        self.name = name
        self.config_file = config_file
        self.empty_dir = empty_dir
        self.nfs = nfs

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.config_file, 'config_file')
        if self.config_file:
            self.config_file.validate()
        self.validate_required(self.empty_dir, 'empty_dir')
        if self.empty_dir:
            self.empty_dir.validate()
        self.validate_required(self.nfs, 'nfs')
        if self.nfs:
            self.nfs.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        if self.config_file is not None:
            result['ConfigFile'] = self.config_file.to_map()
        else:
            result['ConfigFile'] = None
        if self.empty_dir is not None:
            result['EmptyDir'] = self.empty_dir.to_map()
        else:
            result['EmptyDir'] = None
        if self.nfs is not None:
            result['Nfs'] = self.nfs.to_map()
        else:
            result['Nfs'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        if map.get('ConfigFile') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile()
            self.config_file = temp_model.from_map(map['ConfigFile'])
        else:
            self.config_file = None
        if map.get('EmptyDir') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir()
            self.empty_dir = temp_model.from_map(map['EmptyDir'])
        else:
            self.empty_dir = None
        if map.get('Nfs') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs()
            self.nfs = temp_model.from_map(map['Nfs'])
        else:
            self.nfs = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        self.validate_required(self.field_path, 'field_path')

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom(TeaModel):
    def __init__(self, field_ref=None):
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        if map.get('FieldRef') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv(TeaModel):
    def __init__(self, name=None, value=None, value_from=None):
        self.name = name
        self.value = value
        self.value_from = value_from

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')
        self.validate_required(self.value_from, 'value_from')
        if self.value_from:
            self.value_from.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        if self.value_from is not None:
            result['ValueFrom'] = self.value_from.to_map()
        else:
            result['ValueFrom'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        if map.get('ValueFrom') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom()
            self.value_from = temp_model.from_map(map['ValueFrom'])
        else:
            self.value_from = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts(TeaModel):
    def __init__(self, name=None, protocol=None, container_port=None):
        self.name = name
        self.protocol = protocol
        self.container_port = container_port

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.protocol, 'protocol')
        self.validate_required(self.container_port, 'container_port')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Protocol'] = self.protocol
        result['ContainerPort'] = self.container_port
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.protocol = map.get('Protocol')
        self.container_port = map.get('ContainerPort')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts(TeaModel):
    def __init__(self, name=None, sub_path=None, mount_path=None, read_only=None):
        self.name = name
        self.sub_path = sub_path
        self.mount_path = mount_path
        self.read_only = read_only

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.sub_path, 'sub_path')
        self.validate_required(self.mount_path, 'mount_path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['SubPath'] = self.sub_path
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.sub_path = map.get('SubPath')
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext(TeaModel):
    def __init__(self, sysctls=None):
        self.sysctls = []

    def validate(self):
        self.validate_required(self.sysctls, 'sysctls')
        if self.sysctls:
            for k in self.sysctls:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sysctls'] = []
        if self.sysctls is not None:
            for k in self.sysctls:
                result['Sysctls'].append(k.to_map() if k else None)
        else:
            result['Sysctls'] = None
        return result

    def from_map(self, map={}):
        self.sysctls = []
        if map.get('Sysctls') is not None:
            for k in map.get('Sysctls'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls()
                temp_model = temp_model.from_map(k)
                self.sysctls.append(temp_model)
        else:
            self.sysctls = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources(TeaModel):
    def __init__(self, cpu=None, memory=None):
        self.cpu = cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.memory, 'memory')

    def to_map(self):
        result = {}
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        return result

    def from_map(self, map={}):
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecInitContainers(TeaModel):
    def __init__(self, name=None, image=None, image_pull_policy=None, stdin=None, stdin_once=None, tty=None, working_dir=None, env=None, ports=None, volume_mounts=None, security_context=None, resources=None, command=None, args=None):
        self.name = name
        self.image = image
        self.image_pull_policy = image_pull_policy
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.working_dir = working_dir
        self.env = []
        self.ports = []
        self.volume_mounts = []
        self.security_context = security_context
        self.resources = resources
        self.command = []
        self.args = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.image, 'image')
        self.validate_required(self.image_pull_policy, 'image_pull_policy')
        self.validate_required(self.stdin, 'stdin')
        self.validate_required(self.stdin_once, 'stdin_once')
        self.validate_required(self.tty, 'tty')
        self.validate_required(self.working_dir, 'working_dir')
        self.validate_required(self.env, 'env')
        if self.env:
            for k in self.env:
                if k :
                    k.validate()
        self.validate_required(self.ports, 'ports')
        if self.ports:
            for k in self.ports:
                if k :
                    k.validate()
        self.validate_required(self.volume_mounts, 'volume_mounts')
        if self.volume_mounts:
            for k in self.volume_mounts:
                if k :
                    k.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()
        self.validate_required(self.command, 'command')
        self.validate_required(self.args, 'args')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['WorkingDir'] = self.working_dir
        result['Env'] = []
        if self.env is not None:
            for k in self.env:
                result['Env'].append(k.to_map() if k else None)
        else:
            result['Env'] = None
        result['Ports'] = []
        if self.ports is not None:
            for k in self.ports:
                result['Ports'].append(k.to_map() if k else None)
        else:
            result['Ports'] = None
        result['VolumeMounts'] = []
        if self.volume_mounts is not None:
            for k in self.volume_mounts:
                result['VolumeMounts'].append(k.to_map() if k else None)
        else:
            result['VolumeMounts'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Args'] = []
        if self.args is not None:
            for k in self.args:
                result['Args'].append(k)
        else:
            result['Args'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.working_dir = map.get('WorkingDir')
        self.env = []
        if map.get('Env') is not None:
            for k in map.get('Env'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv()
                temp_model = temp_model.from_map(k)
                self.env.append(temp_model)
        else:
            self.env = None
        self.ports = []
        if map.get('Ports') is not None:
            for k in map.get('Ports'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts()
                temp_model = temp_model.from_map(k)
                self.ports.append(temp_model)
        else:
            self.ports = None
        self.volume_mounts = []
        if map.get('VolumeMounts') is not None:
            for k in map.get('VolumeMounts'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts()
                temp_model = temp_model.from_map(k)
                self.volume_mounts.append(temp_model)
        else:
            self.volume_mounts = None
        if map.get('SecurityContext') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        if map.get('Resources') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.args = []
        if map.get('Args') is not None:
            for k in map.get('Args'):
                self.args.append(k)
        else:
            self.args = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        self.validate_required(self.field_path, 'field_path')

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom(TeaModel):
    def __init__(self, field_ref=None):
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        if map.get('FieldRef') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersEnv(TeaModel):
    def __init__(self, name=None, value=None, value_from=None):
        self.name = name
        self.value = value
        self.value_from = value_from

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')
        self.validate_required(self.value_from, 'value_from')
        if self.value_from:
            self.value_from.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        if self.value_from is not None:
            result['ValueFrom'] = self.value_from.to_map()
        else:
            result['ValueFrom'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        if map.get('ValueFrom') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom()
            self.value_from = temp_model.from_map(map['ValueFrom'])
        else:
            self.value_from = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersPorts(TeaModel):
    def __init__(self, name=None, protocol=None, container_port=None):
        self.name = name
        self.protocol = protocol
        self.container_port = container_port

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.protocol, 'protocol')
        self.validate_required(self.container_port, 'container_port')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Protocol'] = self.protocol
        result['ContainerPort'] = self.container_port
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.protocol = map.get('Protocol')
        self.container_port = map.get('ContainerPort')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts(TeaModel):
    def __init__(self, name=None, sub_path=None, mount_path=None, read_only=None):
        self.name = name
        self.sub_path = sub_path
        self.mount_path = mount_path
        self.read_only = read_only

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.sub_path, 'sub_path')
        self.validate_required(self.mount_path, 'mount_path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['SubPath'] = self.sub_path
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.sub_path = map.get('SubPath')
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext(TeaModel):
    def __init__(self, sysctls=None):
        self.sysctls = []

    def validate(self):
        self.validate_required(self.sysctls, 'sysctls')
        if self.sysctls:
            for k in self.sysctls:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sysctls'] = []
        if self.sysctls is not None:
            for k in self.sysctls:
                result['Sysctls'].append(k.to_map() if k else None)
        else:
            result['Sysctls'] = None
        return result

    def from_map(self, map={}):
        self.sysctls = []
        if map.get('Sysctls') is not None:
            for k in map.get('Sysctls'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls()
                temp_model = temp_model.from_map(k)
                self.sysctls.append(temp_model)
        else:
            self.sysctls = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersResources(TeaModel):
    def __init__(self, cpu=None, memory=None):
        self.cpu = cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.memory, 'memory')

    def to_map(self):
        result = {}
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        return result

    def from_map(self, map={}):
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet(TeaModel):
    def __init__(self, scheme=None, path=None, port=None):
        self.scheme = scheme
        self.path = path
        self.port = port

    def validate(self):
        self.validate_required(self.scheme, 'scheme')
        self.validate_required(self.path, 'path')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Scheme'] = self.scheme
        result['Path'] = self.path
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.scheme = map.get('Scheme')
        self.path = map.get('Path')
        self.port = map.get('Port')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe(TeaModel):
    def __init__(self, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None, exec=None, tcp_socket=None, http_get=None):
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds
        self.exec = exec
        self.tcp_socket = tcp_socket
        self.http_get = http_get

    def validate(self):
        self.validate_required(self.initial_delay_seconds, 'initial_delay_seconds')
        self.validate_required(self.period_seconds, 'period_seconds')
        self.validate_required(self.success_threshold, 'success_threshold')
        self.validate_required(self.failure_threshold, 'failure_threshold')
        self.validate_required(self.timeout_seconds, 'timeout_seconds')
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()

    def to_map(self):
        result = {}
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        return result

    def from_map(self, map={}):
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        if map.get('Exec') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('TcpSocket') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        if map.get('HttpGet') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet(TeaModel):
    def __init__(self, scheme=None, path=None, port=None):
        self.scheme = scheme
        self.path = path
        self.port = port

    def validate(self):
        self.validate_required(self.scheme, 'scheme')
        self.validate_required(self.path, 'path')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Scheme'] = self.scheme
        result['Path'] = self.path
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.scheme = map.get('Scheme')
        self.path = map.get('Path')
        self.port = map.get('Port')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe(TeaModel):
    def __init__(self, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None, exec=None, tcp_socket=None, http_get=None):
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds
        self.exec = exec
        self.tcp_socket = tcp_socket
        self.http_get = http_get

    def validate(self):
        self.validate_required(self.initial_delay_seconds, 'initial_delay_seconds')
        self.validate_required(self.period_seconds, 'period_seconds')
        self.validate_required(self.success_threshold, 'success_threshold')
        self.validate_required(self.failure_threshold, 'failure_threshold')
        self.validate_required(self.timeout_seconds, 'timeout_seconds')
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()

    def to_map(self):
        result = {}
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        return result

    def from_map(self, map={}):
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        if map.get('Exec') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('TcpSocket') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        if map.get('HttpGet') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecContainers(TeaModel):
    def __init__(self, name=None, image=None, image_pull_policy=None, stdin=None, stdin_once=None, tty=None, working_dir=None, env=None, ports=None, volume_mounts=None, security_context=None, resources=None, readiness_probe=None, liveness_probe=None, command=None, args=None):
        self.name = name
        self.image = image
        self.image_pull_policy = image_pull_policy
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.working_dir = working_dir
        self.env = []
        self.ports = []
        self.volume_mounts = []
        self.security_context = security_context
        self.resources = resources
        self.readiness_probe = readiness_probe
        self.liveness_probe = liveness_probe
        self.command = []
        self.args = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.image, 'image')
        self.validate_required(self.image_pull_policy, 'image_pull_policy')
        self.validate_required(self.stdin, 'stdin')
        self.validate_required(self.stdin_once, 'stdin_once')
        self.validate_required(self.tty, 'tty')
        self.validate_required(self.working_dir, 'working_dir')
        self.validate_required(self.env, 'env')
        if self.env:
            for k in self.env:
                if k :
                    k.validate()
        self.validate_required(self.ports, 'ports')
        if self.ports:
            for k in self.ports:
                if k :
                    k.validate()
        self.validate_required(self.volume_mounts, 'volume_mounts')
        if self.volume_mounts:
            for k in self.volume_mounts:
                if k :
                    k.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()
        self.validate_required(self.readiness_probe, 'readiness_probe')
        if self.readiness_probe:
            self.readiness_probe.validate()
        self.validate_required(self.liveness_probe, 'liveness_probe')
        if self.liveness_probe:
            self.liveness_probe.validate()
        self.validate_required(self.command, 'command')
        self.validate_required(self.args, 'args')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['WorkingDir'] = self.working_dir
        result['Env'] = []
        if self.env is not None:
            for k in self.env:
                result['Env'].append(k.to_map() if k else None)
        else:
            result['Env'] = None
        result['Ports'] = []
        if self.ports is not None:
            for k in self.ports:
                result['Ports'].append(k.to_map() if k else None)
        else:
            result['Ports'] = None
        result['VolumeMounts'] = []
        if self.volume_mounts is not None:
            for k in self.volume_mounts:
                result['VolumeMounts'].append(k.to_map() if k else None)
        else:
            result['VolumeMounts'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        if self.readiness_probe is not None:
            result['ReadinessProbe'] = self.readiness_probe.to_map()
        else:
            result['ReadinessProbe'] = None
        if self.liveness_probe is not None:
            result['LivenessProbe'] = self.liveness_probe.to_map()
        else:
            result['LivenessProbe'] = None
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Args'] = []
        if self.args is not None:
            for k in self.args:
                result['Args'].append(k)
        else:
            result['Args'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.working_dir = map.get('WorkingDir')
        self.env = []
        if map.get('Env') is not None:
            for k in map.get('Env'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersEnv()
                temp_model = temp_model.from_map(k)
                self.env.append(temp_model)
        else:
            self.env = None
        self.ports = []
        if map.get('Ports') is not None:
            for k in map.get('Ports'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersPorts()
                temp_model = temp_model.from_map(k)
                self.ports.append(temp_model)
        else:
            self.ports = None
        self.volume_mounts = []
        if map.get('VolumeMounts') is not None:
            for k in map.get('VolumeMounts'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts()
                temp_model = temp_model.from_map(k)
                self.volume_mounts.append(temp_model)
        else:
            self.volume_mounts = None
        if map.get('SecurityContext') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        if map.get('Resources') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        if map.get('ReadinessProbe') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe()
            self.readiness_probe = temp_model.from_map(map['ReadinessProbe'])
        else:
            self.readiness_probe = None
        if map.get('LivenessProbe') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe()
            self.liveness_probe = temp_model.from_map(map['LivenessProbe'])
        else:
            self.liveness_probe = None
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.args = []
        if map.get('Args') is not None:
            for k in map.get('Args'):
                self.args.append(k)
        else:
            self.args = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecDnsConfig(TeaModel):
    def __init__(self, options=None, name_servers=None, searches=None):
        self.options = []
        self.name_servers = []
        self.searches = []

    def validate(self):
        self.validate_required(self.options, 'options')
        if self.options:
            for k in self.options:
                if k :
                    k.validate()
        self.validate_required(self.name_servers, 'name_servers')
        self.validate_required(self.searches, 'searches')

    def to_map(self):
        result = {}
        result['Options'] = []
        if self.options is not None:
            for k in self.options:
                result['Options'].append(k.to_map() if k else None)
        else:
            result['Options'] = None
        result['NameServers'] = []
        if self.name_servers is not None:
            for k in self.name_servers:
                result['NameServers'].append(k)
        else:
            result['NameServers'] = None
        result['Searches'] = []
        if self.searches is not None:
            for k in self.searches:
                result['Searches'].append(k)
        else:
            result['Searches'] = None
        return result

    def from_map(self, map={}):
        self.options = []
        if map.get('Options') is not None:
            for k in map.get('Options'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions()
                temp_model = temp_model.from_map(k)
                self.options.append(temp_model)
        else:
            self.options = None
        self.name_servers = []
        if map.get('NameServers') is not None:
            for k in map.get('NameServers'):
                self.name_servers.append(k)
        else:
            self.name_servers = None
        self.searches = []
        if map.get('Searches') is not None:
            for k in map.get('Searches'):
                self.searches.append(k)
        else:
            self.searches = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class ExportContainerGroupTemplateResponseTemplateSpecSecurityContext(TeaModel):
    def __init__(self, sysctls=None):
        self.sysctls = []

    def validate(self):
        self.validate_required(self.sysctls, 'sysctls')
        if self.sysctls:
            for k in self.sysctls:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sysctls'] = []
        if self.sysctls is not None:
            for k in self.sysctls:
                result['Sysctls'].append(k.to_map() if k else None)
        else:
            result['Sysctls'] = None
        return result

    def from_map(self, map={}):
        self.sysctls = []
        if map.get('Sysctls') is not None:
            for k in map.get('Sysctls'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls()
                temp_model = temp_model.from_map(k)
                self.sysctls.append(temp_model)
        else:
            self.sysctls = None
        return self


class ExportContainerGroupTemplateResponseTemplateSpec(TeaModel):
    def __init__(self, restart_policy=None, dns_policy=None, volumes=None, init_containers=None, containers=None, dns_config=None, security_context=None):
        self.restart_policy = restart_policy
        self.dns_policy = dns_policy
        self.volumes = []
        self.init_containers = []
        self.containers = []
        self.dns_config = dns_config
        self.security_context = security_context

    def validate(self):
        self.validate_required(self.restart_policy, 'restart_policy')
        self.validate_required(self.dns_policy, 'dns_policy')
        self.validate_required(self.volumes, 'volumes')
        if self.volumes:
            for k in self.volumes:
                if k :
                    k.validate()
        self.validate_required(self.init_containers, 'init_containers')
        if self.init_containers:
            for k in self.init_containers:
                if k :
                    k.validate()
        self.validate_required(self.containers, 'containers')
        if self.containers:
            for k in self.containers:
                if k :
                    k.validate()
        self.validate_required(self.dns_config, 'dns_config')
        if self.dns_config:
            self.dns_config.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()

    def to_map(self):
        result = {}
        result['RestartPolicy'] = self.restart_policy
        result['DnsPolicy'] = self.dns_policy
        result['Volumes'] = []
        if self.volumes is not None:
            for k in self.volumes:
                result['Volumes'].append(k.to_map() if k else None)
        else:
            result['Volumes'] = None
        result['InitContainers'] = []
        if self.init_containers is not None:
            for k in self.init_containers:
                result['InitContainers'].append(k.to_map() if k else None)
        else:
            result['InitContainers'] = None
        result['Containers'] = []
        if self.containers is not None:
            for k in self.containers:
                result['Containers'].append(k.to_map() if k else None)
        else:
            result['Containers'] = None
        if self.dns_config is not None:
            result['DnsConfig'] = self.dns_config.to_map()
        else:
            result['DnsConfig'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        return result

    def from_map(self, map={}):
        self.restart_policy = map.get('RestartPolicy')
        self.dns_policy = map.get('DnsPolicy')
        self.volumes = []
        if map.get('Volumes') is not None:
            for k in map.get('Volumes'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecVolumes()
                temp_model = temp_model.from_map(k)
                self.volumes.append(temp_model)
        else:
            self.volumes = None
        self.init_containers = []
        if map.get('InitContainers') is not None:
            for k in map.get('InitContainers'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecInitContainers()
                temp_model = temp_model.from_map(k)
                self.init_containers.append(temp_model)
        else:
            self.init_containers = None
        self.containers = []
        if map.get('Containers') is not None:
            for k in map.get('Containers'):
                temp_model = ExportContainerGroupTemplateResponseTemplateSpecContainers()
                temp_model = temp_model.from_map(k)
                self.containers.append(temp_model)
        else:
            self.containers = None
        if map.get('DnsConfig') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecDnsConfig()
            self.dns_config = temp_model.from_map(map['DnsConfig'])
        else:
            self.dns_config = None
        if map.get('SecurityContext') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpecSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        return self


class ExportContainerGroupTemplateResponseTemplate(TeaModel):
    def __init__(self, region_id=None, zone_id=None, security_group_id=None, v_switch_id=None, resource_group_id=None, eip_instance_id=None, container_group_name=None, instance_type=None, tags=None, resources=None, spec=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.security_group_id = security_group_id
        self.v_switch_id = v_switch_id
        self.resource_group_id = resource_group_id
        self.eip_instance_id = eip_instance_id
        self.container_group_name = container_group_name
        self.instance_type = instance_type
        self.tags = []
        self.resources = resources
        self.spec = spec

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.eip_instance_id, 'eip_instance_id')
        self.validate_required(self.container_group_name, 'container_group_name')
        self.validate_required(self.instance_type, 'instance_type')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()
        self.validate_required(self.spec, 'spec')
        if self.spec:
            self.spec.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['SecurityGroupId'] = self.security_group_id
        result['VSwitchId'] = self.v_switch_id
        result['ResourceGroupId'] = self.resource_group_id
        result['EipInstanceId'] = self.eip_instance_id
        result['ContainerGroupName'] = self.container_group_name
        result['InstanceType'] = self.instance_type
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        if self.spec is not None:
            result['Spec'] = self.spec.to_map()
        else:
            result['Spec'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.security_group_id = map.get('SecurityGroupId')
        self.v_switch_id = map.get('VSwitchId')
        self.resource_group_id = map.get('ResourceGroupId')
        self.eip_instance_id = map.get('EipInstanceId')
        self.container_group_name = map.get('ContainerGroupName')
        self.instance_type = map.get('InstanceType')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = ExportContainerGroupTemplateResponseTemplateTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        if map.get('Resources') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        if map.get('Spec') is not None:
            temp_model = ExportContainerGroupTemplateResponseTemplateSpec()
            self.spec = temp_model.from_map(map['Spec'])
        else:
            self.spec = None
        return self


class RestartContainerGroupRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, client_token=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.client_token = map.get('ClientToken')
        return self


class RestartContainerGroupResponse(TeaModel):
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


class UpdateContainerGroupRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, restart_policy=None, tag=None, volume=None, dns_config=None, container=None, init_container=None, image_registry_credential=None, client_token=None, cpu=None, memory=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.restart_policy = restart_policy
        self.tag = []
        self.volume = []
        self.dns_config = dns_config
        self.container = []
        self.init_container = []
        self.image_registry_credential = []
        self.client_token = client_token
        self.cpu = cpu
        self.memory = memory

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        if self.volume:
            for k in self.volume:
                if k :
                    k.validate()
        self.validate_required(self.dns_config, 'dns_config')
        if self.dns_config:
            self.dns_config.validate()
        if self.container:
            for k in self.container:
                if k :
                    k.validate()
        if self.init_container:
            for k in self.init_container:
                if k :
                    k.validate()
        if self.image_registry_credential:
            for k in self.image_registry_credential:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['RestartPolicy'] = self.restart_policy
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['Volume'] = []
        if self.volume is not None:
            for k in self.volume:
                result['Volume'].append(k.to_map() if k else None)
        else:
            result['Volume'] = None
        if self.dns_config is not None:
            result['DnsConfig'] = self.dns_config.to_map()
        else:
            result['DnsConfig'] = None
        result['Container'] = []
        if self.container is not None:
            for k in self.container:
                result['Container'].append(k.to_map() if k else None)
        else:
            result['Container'] = None
        result['InitContainer'] = []
        if self.init_container is not None:
            for k in self.init_container:
                result['InitContainer'].append(k.to_map() if k else None)
        else:
            result['InitContainer'] = None
        result['ImageRegistryCredential'] = []
        if self.image_registry_credential is not None:
            for k in self.image_registry_credential:
                result['ImageRegistryCredential'].append(k.to_map() if k else None)
        else:
            result['ImageRegistryCredential'] = None
        result['ClientToken'] = self.client_token
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.restart_policy = map.get('RestartPolicy')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = UpdateContainerGroupRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.volume = []
        if map.get('Volume') is not None:
            for k in map.get('Volume'):
                temp_model = UpdateContainerGroupRequestVolume()
                temp_model = temp_model.from_map(k)
                self.volume.append(temp_model)
        else:
            self.volume = None
        if map.get('DnsConfig') is not None:
            temp_model = UpdateContainerGroupRequestDnsConfig()
            self.dns_config = temp_model.from_map(map['DnsConfig'])
        else:
            self.dns_config = None
        self.container = []
        if map.get('Container') is not None:
            for k in map.get('Container'):
                temp_model = UpdateContainerGroupRequestContainer()
                temp_model = temp_model.from_map(k)
                self.container.append(temp_model)
        else:
            self.container = None
        self.init_container = []
        if map.get('InitContainer') is not None:
            for k in map.get('InitContainer'):
                temp_model = UpdateContainerGroupRequestInitContainer()
                temp_model = temp_model.from_map(k)
                self.init_container.append(temp_model)
        else:
            self.init_container = None
        self.image_registry_credential = []
        if map.get('ImageRegistryCredential') is not None:
            for k in map.get('ImageRegistryCredential'):
                temp_model = UpdateContainerGroupRequestImageRegistryCredential()
                temp_model = temp_model.from_map(k)
                self.image_registry_credential.append(temp_model)
        else:
            self.image_registry_credential = None
        self.client_token = map.get('ClientToken')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        return self


class UpdateContainerGroupRequestTag(TeaModel):
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


class UpdateContainerGroupRequestVolumeNFSVolume(TeaModel):
    def __init__(self, server=None, path=None, read_only=None):
        self.server = server
        self.path = path
        self.read_only = read_only

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['Path'] = self.path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.path = map.get('Path')
        self.read_only = map.get('ReadOnly')
        return self


class UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath(TeaModel):
    def __init__(self, content=None, path=None):
        self.content = content
        self.path = path

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Path'] = self.path
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.path = map.get('Path')
        return self


class UpdateContainerGroupRequestVolumeConfigFileVolume(TeaModel):
    def __init__(self, config_file_to_path=None):
        self.config_file_to_path = []

    def validate(self):
        self.validate_required(self.config_file_to_path, 'config_file_to_path')
        if self.config_file_to_path:
            for k in self.config_file_to_path:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ConfigFileToPath'] = []
        if self.config_file_to_path is not None:
            for k in self.config_file_to_path:
                result['ConfigFileToPath'].append(k.to_map() if k else None)
        else:
            result['ConfigFileToPath'] = None
        return result

    def from_map(self, map={}):
        self.config_file_to_path = []
        if map.get('ConfigFileToPath') is not None:
            for k in map.get('ConfigFileToPath'):
                temp_model = UpdateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath()
                temp_model = temp_model.from_map(k)
                self.config_file_to_path.append(temp_model)
        else:
            self.config_file_to_path = None
        return self


class UpdateContainerGroupRequestVolumeEmptyDirVolume(TeaModel):
    def __init__(self, medium=None):
        self.medium = medium

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Medium'] = self.medium
        return result

    def from_map(self, map={}):
        self.medium = map.get('Medium')
        return self


class UpdateContainerGroupRequestVolume(TeaModel):
    def __init__(self, name=None, type=None, nfsvolume=None, config_file_volume=None, empty_dir_volume=None):
        self.name = name
        self.type = type
        self.nfsvolume = nfsvolume
        self.config_file_volume = config_file_volume
        self.empty_dir_volume = empty_dir_volume

    def validate(self):
        self.validate_required(self.nfsvolume, 'nfsvolume')
        if self.nfsvolume:
            self.nfsvolume.validate()
        self.validate_required(self.config_file_volume, 'config_file_volume')
        if self.config_file_volume:
            self.config_file_volume.validate()
        self.validate_required(self.empty_dir_volume, 'empty_dir_volume')
        if self.empty_dir_volume:
            self.empty_dir_volume.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Type'] = self.type
        if self.nfsvolume is not None:
            result['NFSVolume'] = self.nfsvolume.to_map()
        else:
            result['NFSVolume'] = None
        if self.config_file_volume is not None:
            result['ConfigFileVolume'] = self.config_file_volume.to_map()
        else:
            result['ConfigFileVolume'] = None
        if self.empty_dir_volume is not None:
            result['EmptyDirVolume'] = self.empty_dir_volume.to_map()
        else:
            result['EmptyDirVolume'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.type = map.get('Type')
        if map.get('NFSVolume') is not None:
            temp_model = UpdateContainerGroupRequestVolumeNFSVolume()
            self.nfsvolume = temp_model.from_map(map['NFSVolume'])
        else:
            self.nfsvolume = None
        if map.get('ConfigFileVolume') is not None:
            temp_model = UpdateContainerGroupRequestVolumeConfigFileVolume()
            self.config_file_volume = temp_model.from_map(map['ConfigFileVolume'])
        else:
            self.config_file_volume = None
        if map.get('EmptyDirVolume') is not None:
            temp_model = UpdateContainerGroupRequestVolumeEmptyDirVolume()
            self.empty_dir_volume = temp_model.from_map(map['EmptyDirVolume'])
        else:
            self.empty_dir_volume = None
        return self


class UpdateContainerGroupRequestDnsConfigOption(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class UpdateContainerGroupRequestDnsConfig(TeaModel):
    def __init__(self, name_server=None, search=None, option=None):
        self.name_server = []
        self.search = []
        self.option = []

    def validate(self):
        if self.option:
            for k in self.option:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NameServer'] = []
        if self.name_server is not None:
            for k in self.name_server:
                result['NameServer'].append(k)
        else:
            result['NameServer'] = None
        result['Search'] = []
        if self.search is not None:
            for k in self.search:
                result['Search'].append(k)
        else:
            result['Search'] = None
        result['Option'] = []
        if self.option is not None:
            for k in self.option:
                result['Option'].append(k.to_map() if k else None)
        else:
            result['Option'] = None
        return result

    def from_map(self, map={}):
        self.name_server = []
        if map.get('NameServer') is not None:
            for k in map.get('NameServer'):
                self.name_server.append(k)
        else:
            self.name_server = None
        self.search = []
        if map.get('Search') is not None:
            for k in map.get('Search'):
                self.search.append(k)
        else:
            self.search = None
        self.option = []
        if map.get('Option') is not None:
            for k in map.get('Option'):
                temp_model = UpdateContainerGroupRequestDnsConfigOption()
                temp_model = temp_model.from_map(k)
                self.option.append(temp_model)
        else:
            self.option = None
        return self


class UpdateContainerGroupRequestContainerEnvironmentVar(TeaModel):
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


class UpdateContainerGroupRequestContainerPort(TeaModel):
    def __init__(self, protocol=None, port=None):
        self.protocol = protocol
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Protocol'] = self.protocol
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.protocol = map.get('Protocol')
        self.port = map.get('Port')
        return self


class UpdateContainerGroupRequestContainerVolumeMount(TeaModel):
    def __init__(self, name=None, mount_path=None, sub_path=None, read_only=None):
        self.name = name
        self.mount_path = mount_path
        self.sub_path = sub_path
        self.read_only = read_only

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['MountPath'] = self.mount_path
        result['SubPath'] = self.sub_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.mount_path = map.get('MountPath')
        self.sub_path = map.get('SubPath')
        self.read_only = map.get('ReadOnly')
        return self


class UpdateContainerGroupRequestContainerReadinessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class UpdateContainerGroupRequestContainerReadinessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class UpdateContainerGroupRequestContainerReadinessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class UpdateContainerGroupRequestContainerReadinessProbe(TeaModel):
    def __init__(self, tcp_socket=None, exec=None, http_get=None, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None):
        self.tcp_socket = tcp_socket
        self.exec = exec
        self.http_get = http_get
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds

    def validate(self):
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()

    def to_map(self):
        result = {}
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        return result

    def from_map(self, map={}):
        if map.get('TcpSocket') is not None:
            temp_model = UpdateContainerGroupRequestContainerReadinessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        if map.get('Exec') is not None:
            temp_model = UpdateContainerGroupRequestContainerReadinessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('HttpGet') is not None:
            temp_model = UpdateContainerGroupRequestContainerReadinessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        return self


class UpdateContainerGroupRequestContainerLivenessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class UpdateContainerGroupRequestContainerLivenessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class UpdateContainerGroupRequestContainerLivenessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class UpdateContainerGroupRequestContainerLivenessProbe(TeaModel):
    def __init__(self, tcp_socket=None, exec=None, http_get=None, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None):
        self.tcp_socket = tcp_socket
        self.exec = exec
        self.http_get = http_get
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds

    def validate(self):
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()
        self.validate_required(self.failure_threshold, 'failure_threshold')

    def to_map(self):
        result = {}
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        return result

    def from_map(self, map={}):
        if map.get('TcpSocket') is not None:
            temp_model = UpdateContainerGroupRequestContainerLivenessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        if map.get('Exec') is not None:
            temp_model = UpdateContainerGroupRequestContainerLivenessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('HttpGet') is not None:
            temp_model = UpdateContainerGroupRequestContainerLivenessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        return self


class UpdateContainerGroupRequestContainerSecurityContextCapability(TeaModel):
    def __init__(self, add=None):
        self.add = []

    def validate(self):
        self.validate_required(self.add, 'add')

    def to_map(self):
        result = {}
        result['Add'] = []
        if self.add is not None:
            for k in self.add:
                result['Add'].append(k)
        else:
            result['Add'] = None
        return result

    def from_map(self, map={}):
        self.add = []
        if map.get('Add') is not None:
            for k in map.get('Add'):
                self.add.append(k)
        else:
            self.add = None
        return self


class UpdateContainerGroupRequestContainerSecurityContext(TeaModel):
    def __init__(self, read_only_root_filesystem=None, run_as_user=None, capability=None):
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user
        self.capability = capability

    def validate(self):
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        return result

    def from_map(self, map={}):
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        if map.get('Capability') is not None:
            temp_model = UpdateContainerGroupRequestContainerSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        return self


class UpdateContainerGroupRequestContainer(TeaModel):
    def __init__(self, name=None, image=None, cpu=None, memory=None, working_dir=None, image_pull_policy=None, stdin=None, stdin_once=None, tty=None, command=None, arg=None, environment_var=None, port=None, volume_mount=None, readiness_probe=None, liveness_probe=None, security_context=None, gpu=None):
        self.name = name
        self.image = image
        self.cpu = cpu
        self.memory = memory
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.command = []
        self.arg = []
        self.environment_var = []
        self.port = []
        self.volume_mount = []
        self.readiness_probe = readiness_probe
        self.liveness_probe = liveness_probe
        self.security_context = security_context
        self.gpu = gpu

    def validate(self):
        self.validate_required(self.command, 'command')
        self.validate_required(self.arg, 'arg')
        self.validate_required(self.environment_var, 'environment_var')
        if self.environment_var:
            for k in self.environment_var:
                if k :
                    k.validate()
        self.validate_required(self.port, 'port')
        if self.port:
            for k in self.port:
                if k :
                    k.validate()
        self.validate_required(self.volume_mount, 'volume_mount')
        if self.volume_mount:
            for k in self.volume_mount:
                if k :
                    k.validate()
        self.validate_required(self.readiness_probe, 'readiness_probe')
        if self.readiness_probe:
            self.readiness_probe.validate()
        self.validate_required(self.liveness_probe, 'liveness_probe')
        if self.liveness_probe:
            self.liveness_probe.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Arg'] = []
        if self.arg is not None:
            for k in self.arg:
                result['Arg'].append(k)
        else:
            result['Arg'] = None
        result['EnvironmentVar'] = []
        if self.environment_var is not None:
            for k in self.environment_var:
                result['EnvironmentVar'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVar'] = None
        result['Port'] = []
        if self.port is not None:
            for k in self.port:
                result['Port'].append(k.to_map() if k else None)
        else:
            result['Port'] = None
        result['VolumeMount'] = []
        if self.volume_mount is not None:
            for k in self.volume_mount:
                result['VolumeMount'].append(k.to_map() if k else None)
        else:
            result['VolumeMount'] = None
        if self.readiness_probe is not None:
            result['ReadinessProbe'] = self.readiness_probe.to_map()
        else:
            result['ReadinessProbe'] = None
        if self.liveness_probe is not None:
            result['LivenessProbe'] = self.liveness_probe.to_map()
        else:
            result['LivenessProbe'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Gpu'] = self.gpu
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.arg = []
        if map.get('Arg') is not None:
            for k in map.get('Arg'):
                self.arg.append(k)
        else:
            self.arg = None
        self.environment_var = []
        if map.get('EnvironmentVar') is not None:
            for k in map.get('EnvironmentVar'):
                temp_model = UpdateContainerGroupRequestContainerEnvironmentVar()
                temp_model = temp_model.from_map(k)
                self.environment_var.append(temp_model)
        else:
            self.environment_var = None
        self.port = []
        if map.get('Port') is not None:
            for k in map.get('Port'):
                temp_model = UpdateContainerGroupRequestContainerPort()
                temp_model = temp_model.from_map(k)
                self.port.append(temp_model)
        else:
            self.port = None
        self.volume_mount = []
        if map.get('VolumeMount') is not None:
            for k in map.get('VolumeMount'):
                temp_model = UpdateContainerGroupRequestContainerVolumeMount()
                temp_model = temp_model.from_map(k)
                self.volume_mount.append(temp_model)
        else:
            self.volume_mount = None
        if map.get('ReadinessProbe') is not None:
            temp_model = UpdateContainerGroupRequestContainerReadinessProbe()
            self.readiness_probe = temp_model.from_map(map['ReadinessProbe'])
        else:
            self.readiness_probe = None
        if map.get('LivenessProbe') is not None:
            temp_model = UpdateContainerGroupRequestContainerLivenessProbe()
            self.liveness_probe = temp_model.from_map(map['LivenessProbe'])
        else:
            self.liveness_probe = None
        if map.get('SecurityContext') is not None:
            temp_model = UpdateContainerGroupRequestContainerSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.gpu = map.get('Gpu')
        return self


class UpdateContainerGroupRequestInitContainerEnvironmentVar(TeaModel):
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


class UpdateContainerGroupRequestInitContainerPort(TeaModel):
    def __init__(self, port=None, protocol=None):
        self.port = port
        self.protocol = protocol

    def validate(self):
        self.validate_required(self.protocol, 'protocol')

    def to_map(self):
        result = {}
        result['Port'] = self.port
        result['Protocol'] = self.protocol
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        self.protocol = map.get('Protocol')
        return self


class UpdateContainerGroupRequestInitContainerVolumeMount(TeaModel):
    def __init__(self, name=None, mount_path=None, sub_path=None, read_only=None):
        self.name = name
        self.mount_path = mount_path
        self.sub_path = sub_path
        self.read_only = read_only

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['MountPath'] = self.mount_path
        result['SubPath'] = self.sub_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.mount_path = map.get('MountPath')
        self.sub_path = map.get('SubPath')
        self.read_only = map.get('ReadOnly')
        return self


class UpdateContainerGroupRequestInitContainerSecurityContextCapability(TeaModel):
    def __init__(self, add=None):
        self.add = []

    def validate(self):
        self.validate_required(self.add, 'add')

    def to_map(self):
        result = {}
        result['Add'] = []
        if self.add is not None:
            for k in self.add:
                result['Add'].append(k)
        else:
            result['Add'] = None
        return result

    def from_map(self, map={}):
        self.add = []
        if map.get('Add') is not None:
            for k in map.get('Add'):
                self.add.append(k)
        else:
            self.add = None
        return self


class UpdateContainerGroupRequestInitContainerSecurityContext(TeaModel):
    def __init__(self, read_only_root_filesystem=None, run_as_user=None, capability=None):
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user
        self.capability = capability

    def validate(self):
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        return result

    def from_map(self, map={}):
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        if map.get('Capability') is not None:
            temp_model = UpdateContainerGroupRequestInitContainerSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        return self


class UpdateContainerGroupRequestInitContainer(TeaModel):
    def __init__(self, name=None, image=None, cpu=None, memory=None, working_dir=None, image_pull_policy=None, stdin=None, stdin_once=None, tty=None, command=None, arg=None, environment_var=None, port=None, volume_mount=None, security_context=None, gpu=None):
        self.name = name
        self.image = image
        self.cpu = cpu
        self.memory = memory
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.command = []
        self.arg = []
        self.environment_var = []
        self.port = []
        self.volume_mount = []
        self.security_context = security_context
        self.gpu = gpu

    def validate(self):
        self.validate_required(self.command, 'command')
        self.validate_required(self.arg, 'arg')
        self.validate_required(self.environment_var, 'environment_var')
        if self.environment_var:
            for k in self.environment_var:
                if k :
                    k.validate()
        self.validate_required(self.port, 'port')
        if self.port:
            for k in self.port:
                if k :
                    k.validate()
        self.validate_required(self.volume_mount, 'volume_mount')
        if self.volume_mount:
            for k in self.volume_mount:
                if k :
                    k.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Arg'] = []
        if self.arg is not None:
            for k in self.arg:
                result['Arg'].append(k)
        else:
            result['Arg'] = None
        result['EnvironmentVar'] = []
        if self.environment_var is not None:
            for k in self.environment_var:
                result['EnvironmentVar'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVar'] = None
        result['Port'] = []
        if self.port is not None:
            for k in self.port:
                result['Port'].append(k.to_map() if k else None)
        else:
            result['Port'] = None
        result['VolumeMount'] = []
        if self.volume_mount is not None:
            for k in self.volume_mount:
                result['VolumeMount'].append(k.to_map() if k else None)
        else:
            result['VolumeMount'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Gpu'] = self.gpu
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.arg = []
        if map.get('Arg') is not None:
            for k in map.get('Arg'):
                self.arg.append(k)
        else:
            self.arg = None
        self.environment_var = []
        if map.get('EnvironmentVar') is not None:
            for k in map.get('EnvironmentVar'):
                temp_model = UpdateContainerGroupRequestInitContainerEnvironmentVar()
                temp_model = temp_model.from_map(k)
                self.environment_var.append(temp_model)
        else:
            self.environment_var = None
        self.port = []
        if map.get('Port') is not None:
            for k in map.get('Port'):
                temp_model = UpdateContainerGroupRequestInitContainerPort()
                temp_model = temp_model.from_map(k)
                self.port.append(temp_model)
        else:
            self.port = None
        self.volume_mount = []
        if map.get('VolumeMount') is not None:
            for k in map.get('VolumeMount'):
                temp_model = UpdateContainerGroupRequestInitContainerVolumeMount()
                temp_model = temp_model.from_map(k)
                self.volume_mount.append(temp_model)
        else:
            self.volume_mount = None
        if map.get('SecurityContext') is not None:
            temp_model = UpdateContainerGroupRequestInitContainerSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.gpu = map.get('Gpu')
        return self


class UpdateContainerGroupRequestImageRegistryCredential(TeaModel):
    def __init__(self, server=None, user_name=None, password=None):
        self.server = server
        self.user_name = user_name
        self.password = password

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['UserName'] = self.user_name
        result['Password'] = self.password
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.user_name = map.get('UserName')
        self.password = map.get('Password')
        return self


class UpdateContainerGroupResponse(TeaModel):
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


class DescribeContainerGroupPriceRequest(TeaModel):
    def __init__(self, region_id=None, cpu=None, memory=None, instance_type=None, spot_strategy=None, zone_id=None, spot_price_limit=None):
        self.region_id = region_id
        self.cpu = cpu
        self.memory = memory
        self.instance_type = instance_type
        self.spot_strategy = spot_strategy
        self.zone_id = zone_id
        self.spot_price_limit = spot_price_limit

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['InstanceType'] = self.instance_type
        result['SpotStrategy'] = self.spot_strategy
        result['ZoneId'] = self.zone_id
        result['SpotPriceLimit'] = self.spot_price_limit
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.instance_type = map.get('InstanceType')
        self.spot_strategy = map.get('SpotStrategy')
        self.zone_id = map.get('ZoneId')
        self.spot_price_limit = map.get('SpotPriceLimit')
        return self


class DescribeContainerGroupPriceResponse(TeaModel):
    def __init__(self, request_id=None, price_info=None):
        self.request_id = request_id
        self.price_info = price_info

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.price_info, 'price_info')
        if self.price_info:
            self.price_info.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.price_info is not None:
            result['PriceInfo'] = self.price_info.to_map()
        else:
            result['PriceInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PriceInfo') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfo()
            self.price_info = temp_model.from_map(map['PriceInfo'])
        else:
            self.price_info = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoRulesRule(TeaModel):
    def __init__(self, rule_id=None, description=None):
        self.rule_id = rule_id
        self.description = description

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.description = map.get('Description')
        return self


class DescribeContainerGroupPriceResponsePriceInfoRules(TeaModel):
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
                temp_model = DescribeContainerGroupPriceResponsePriceInfoRulesRule()
                temp_model = temp_model.from_map(k)
                self.rule.append(temp_model)
        else:
            self.rule = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice(TeaModel):
    def __init__(self, zone_id=None, instance_type=None, spot_price=None, origin_price=None):
        self.zone_id = zone_id
        self.instance_type = instance_type
        self.spot_price = spot_price
        self.origin_price = origin_price

    def validate(self):
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.instance_type, 'instance_type')
        self.validate_required(self.spot_price, 'spot_price')
        self.validate_required(self.origin_price, 'origin_price')

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        result['InstanceType'] = self.instance_type
        result['SpotPrice'] = self.spot_price
        result['OriginPrice'] = self.origin_price
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        self.instance_type = map.get('InstanceType')
        self.spot_price = map.get('SpotPrice')
        self.origin_price = map.get('OriginPrice')
        return self


class DescribeContainerGroupPriceResponsePriceInfoSpotPrices(TeaModel):
    def __init__(self, spot_price=None):
        self.spot_price = []

    def validate(self):
        self.validate_required(self.spot_price, 'spot_price')
        if self.spot_price:
            for k in self.spot_price:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SpotPrice'] = []
        if self.spot_price is not None:
            for k in self.spot_price:
                result['SpotPrice'].append(k.to_map() if k else None)
        else:
            result['SpotPrice'] = None
        return result

    def from_map(self, map={}):
        self.spot_price = []
        if map.get('SpotPrice') is not None:
            for k in map.get('SpotPrice'):
                temp_model = DescribeContainerGroupPriceResponsePriceInfoSpotPricesSpotPrice()
                temp_model = temp_model.from_map(k)
                self.spot_price.append(temp_model)
        else:
            self.spot_price = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule(TeaModel):
    def __init__(self, rule_id=None, description=None):
        self.rule_id = rule_id
        self.description = description

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.description = map.get('Description')
        return self


class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules(TeaModel):
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
                temp_model = DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRulesRule()
                temp_model = temp_model.from_map(k)
                self.rule.append(temp_model)
        else:
            self.rule = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo(TeaModel):
    def __init__(self, resource=None, original_price=None, discount_price=None, trade_price=None, rules=None):
        self.resource = resource
        self.original_price = original_price
        self.discount_price = discount_price
        self.trade_price = trade_price
        self.rules = rules

    def validate(self):
        self.validate_required(self.resource, 'resource')
        self.validate_required(self.original_price, 'original_price')
        self.validate_required(self.discount_price, 'discount_price')
        self.validate_required(self.trade_price, 'trade_price')
        self.validate_required(self.rules, 'rules')
        if self.rules:
            self.rules.validate()

    def to_map(self):
        result = {}
        result['Resource'] = self.resource
        result['OriginalPrice'] = self.original_price
        result['DiscountPrice'] = self.discount_price
        result['TradePrice'] = self.trade_price
        if self.rules is not None:
            result['Rules'] = self.rules.to_map()
        else:
            result['Rules'] = None
        return result

    def from_map(self, map={}):
        self.resource = map.get('Resource')
        self.original_price = map.get('OriginalPrice')
        self.discount_price = map.get('DiscountPrice')
        self.trade_price = map.get('TradePrice')
        if map.get('Rules') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfoRules()
            self.rules = temp_model.from_map(map['Rules'])
        else:
            self.rules = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos(TeaModel):
    def __init__(self, detail_info=None):
        self.detail_info = []

    def validate(self):
        self.validate_required(self.detail_info, 'detail_info')
        if self.detail_info:
            for k in self.detail_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DetailInfo'] = []
        if self.detail_info is not None:
            for k in self.detail_info:
                result['DetailInfo'].append(k.to_map() if k else None)
        else:
            result['DetailInfo'] = None
        return result

    def from_map(self, map={}):
        self.detail_info = []
        if map.get('DetailInfo') is not None:
            for k in map.get('DetailInfo'):
                temp_model = DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfosDetailInfo()
                temp_model = temp_model.from_map(k)
                self.detail_info.append(temp_model)
        else:
            self.detail_info = None
        return self


class DescribeContainerGroupPriceResponsePriceInfoPrice(TeaModel):
    def __init__(self, original_price=None, discount_price=None, trade_price=None, currency=None, detail_infos=None):
        self.original_price = original_price
        self.discount_price = discount_price
        self.trade_price = trade_price
        self.currency = currency
        self.detail_infos = detail_infos

    def validate(self):
        self.validate_required(self.original_price, 'original_price')
        self.validate_required(self.discount_price, 'discount_price')
        self.validate_required(self.trade_price, 'trade_price')
        self.validate_required(self.currency, 'currency')
        self.validate_required(self.detail_infos, 'detail_infos')
        if self.detail_infos:
            self.detail_infos.validate()

    def to_map(self):
        result = {}
        result['OriginalPrice'] = self.original_price
        result['DiscountPrice'] = self.discount_price
        result['TradePrice'] = self.trade_price
        result['Currency'] = self.currency
        if self.detail_infos is not None:
            result['DetailInfos'] = self.detail_infos.to_map()
        else:
            result['DetailInfos'] = None
        return result

    def from_map(self, map={}):
        self.original_price = map.get('OriginalPrice')
        self.discount_price = map.get('DiscountPrice')
        self.trade_price = map.get('TradePrice')
        self.currency = map.get('Currency')
        if map.get('DetailInfos') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfoPriceDetailInfos()
            self.detail_infos = temp_model.from_map(map['DetailInfos'])
        else:
            self.detail_infos = None
        return self


class DescribeContainerGroupPriceResponsePriceInfo(TeaModel):
    def __init__(self, rules=None, spot_prices=None, price=None):
        self.rules = rules
        self.spot_prices = spot_prices
        self.price = price

    def validate(self):
        self.validate_required(self.rules, 'rules')
        if self.rules:
            self.rules.validate()
        self.validate_required(self.spot_prices, 'spot_prices')
        if self.spot_prices:
            self.spot_prices.validate()
        self.validate_required(self.price, 'price')
        if self.price:
            self.price.validate()

    def to_map(self):
        result = {}
        if self.rules is not None:
            result['Rules'] = self.rules.to_map()
        else:
            result['Rules'] = None
        if self.spot_prices is not None:
            result['SpotPrices'] = self.spot_prices.to_map()
        else:
            result['SpotPrices'] = None
        if self.price is not None:
            result['Price'] = self.price.to_map()
        else:
            result['Price'] = None
        return result

    def from_map(self, map={}):
        if map.get('Rules') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfoRules()
            self.rules = temp_model.from_map(map['Rules'])
        else:
            self.rules = None
        if map.get('SpotPrices') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfoSpotPrices()
            self.spot_prices = temp_model.from_map(map['SpotPrices'])
        else:
            self.spot_prices = None
        if map.get('Price') is not None:
            temp_model = DescribeContainerGroupPriceResponsePriceInfoPrice()
            self.price = temp_model.from_map(map['Price'])
        else:
            self.price = None
        return self


class ExecContainerCommandRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, container_name=None, command=None, _tty=None, stdin=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.container_name = container_name
        self.command = command
        self._tty = _tty
        self.stdin = stdin

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.container_name, 'container_name')
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['ContainerName'] = self.container_name
        result['Command'] = self.command
        result['TTY'] = self._tty
        result['Stdin'] = self.stdin
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.container_name = map.get('ContainerName')
        self.command = map.get('Command')
        self._tty = map.get('TTY')
        self.stdin = map.get('Stdin')
        return self


class ExecContainerCommandResponse(TeaModel):
    def __init__(self, request_id=None, web_socket_uri=None):
        self.request_id = request_id
        self.web_socket_uri = web_socket_uri

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.web_socket_uri, 'web_socket_uri')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['WebSocketUri'] = self.web_socket_uri
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.web_socket_uri = map.get('WebSocketUri')
        return self


class DescribeContainerLogRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, container_name=None, start_time=None, tail=None, last_time=None, since_seconds=None, limit_bytes=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.container_name = container_name
        self.start_time = start_time
        self.tail = tail
        self.last_time = last_time
        self.since_seconds = since_seconds
        self.limit_bytes = limit_bytes

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.container_name, 'container_name')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['ContainerName'] = self.container_name
        result['StartTime'] = self.start_time
        result['Tail'] = self.tail
        result['LastTime'] = self.last_time
        result['SinceSeconds'] = self.since_seconds
        result['LimitBytes'] = self.limit_bytes
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.container_name = map.get('ContainerName')
        self.start_time = map.get('StartTime')
        self.tail = map.get('Tail')
        self.last_time = map.get('LastTime')
        self.since_seconds = map.get('SinceSeconds')
        self.limit_bytes = map.get('LimitBytes')
        return self


class DescribeContainerLogResponse(TeaModel):
    def __init__(self, request_id=None, container_name=None, content=None):
        self.request_id = request_id
        self.container_name = container_name
        self.content = content

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.container_name, 'container_name')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContainerName'] = self.container_name
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.container_name = map.get('ContainerName')
        self.content = map.get('Content')
        return self


class CreateContainerGroupRequest(TeaModel):
    def __init__(self, region_id=None, zone_id=None, security_group_id=None, v_switch_id=None, container_group_name=None, restart_policy=None, tag=None, image_registry_credential=None, container=None, volume=None, eip_instance_id=None, init_container=None, dns_config=None, cpu=None, memory=None, resource_group_id=None, dns_policy=None, client_token=None, host_aliase=None, arn=None, instance_type=None, security_context=None, sls_enable=None, image_snapshot_id=None, ram_role_name=None, ntp_server=None, termination_grace_period_seconds=None, auto_match_image_cache=None, ipv_6address_count=None, active_deadline_seconds=None, spot_strategy=None, spot_price_limit=None, schedule_strategy=None, tenant_vswitch_id=None, tenant_security_group_id=None, core_pattern=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.security_group_id = security_group_id
        self.v_switch_id = v_switch_id
        self.container_group_name = container_group_name
        self.restart_policy = restart_policy
        self.tag = []
        self.image_registry_credential = []
        self.container = []
        self.volume = []
        self.eip_instance_id = eip_instance_id
        self.init_container = []
        self.dns_config = dns_config
        self.cpu = cpu
        self.memory = memory
        self.resource_group_id = resource_group_id
        self.dns_policy = dns_policy
        self.client_token = client_token
        self.host_aliase = []
        self.arn = []
        self.instance_type = instance_type
        self.security_context = security_context
        self.sls_enable = sls_enable
        self.image_snapshot_id = image_snapshot_id
        self.ram_role_name = ram_role_name
        self.ntp_server = []
        self.termination_grace_period_seconds = termination_grace_period_seconds
        self.auto_match_image_cache = auto_match_image_cache
        self.ipv_6address_count = ipv_6address_count
        self.active_deadline_seconds = active_deadline_seconds
        self.spot_strategy = spot_strategy
        self.spot_price_limit = spot_price_limit
        self.schedule_strategy = schedule_strategy
        self.tenant_vswitch_id = tenant_vswitch_id
        self.tenant_security_group_id = tenant_security_group_id
        self.core_pattern = core_pattern

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.container_group_name, 'container_group_name')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        if self.image_registry_credential:
            for k in self.image_registry_credential:
                if k :
                    k.validate()
        self.validate_required(self.container, 'container')
        if self.container:
            for k in self.container:
                if k :
                    k.validate()
        if self.volume:
            for k in self.volume:
                if k :
                    k.validate()
        if self.init_container:
            for k in self.init_container:
                if k :
                    k.validate()
        self.validate_required(self.dns_config, 'dns_config')
        if self.dns_config:
            self.dns_config.validate()
        if self.host_aliase:
            for k in self.host_aliase:
                if k :
                    k.validate()
        if self.arn:
            for k in self.arn:
                if k :
                    k.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['SecurityGroupId'] = self.security_group_id
        result['VSwitchId'] = self.v_switch_id
        result['ContainerGroupName'] = self.container_group_name
        result['RestartPolicy'] = self.restart_policy
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['ImageRegistryCredential'] = []
        if self.image_registry_credential is not None:
            for k in self.image_registry_credential:
                result['ImageRegistryCredential'].append(k.to_map() if k else None)
        else:
            result['ImageRegistryCredential'] = None
        result['Container'] = []
        if self.container is not None:
            for k in self.container:
                result['Container'].append(k.to_map() if k else None)
        else:
            result['Container'] = None
        result['Volume'] = []
        if self.volume is not None:
            for k in self.volume:
                result['Volume'].append(k.to_map() if k else None)
        else:
            result['Volume'] = None
        result['EipInstanceId'] = self.eip_instance_id
        result['InitContainer'] = []
        if self.init_container is not None:
            for k in self.init_container:
                result['InitContainer'].append(k.to_map() if k else None)
        else:
            result['InitContainer'] = None
        if self.dns_config is not None:
            result['DnsConfig'] = self.dns_config.to_map()
        else:
            result['DnsConfig'] = None
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['ResourceGroupId'] = self.resource_group_id
        result['DnsPolicy'] = self.dns_policy
        result['ClientToken'] = self.client_token
        result['HostAliase'] = []
        if self.host_aliase is not None:
            for k in self.host_aliase:
                result['HostAliase'].append(k.to_map() if k else None)
        else:
            result['HostAliase'] = None
        result['Arn'] = []
        if self.arn is not None:
            for k in self.arn:
                result['Arn'].append(k.to_map() if k else None)
        else:
            result['Arn'] = None
        result['InstanceType'] = self.instance_type
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['SlsEnable'] = self.sls_enable
        result['ImageSnapshotId'] = self.image_snapshot_id
        result['RamRoleName'] = self.ram_role_name
        result['NtpServer'] = []
        if self.ntp_server is not None:
            for k in self.ntp_server:
                result['NtpServer'].append(k)
        else:
            result['NtpServer'] = None
        result['TerminationGracePeriodSeconds'] = self.termination_grace_period_seconds
        result['AutoMatchImageCache'] = self.auto_match_image_cache
        result['Ipv6AddressCount'] = self.ipv_6address_count
        result['ActiveDeadlineSeconds'] = self.active_deadline_seconds
        result['SpotStrategy'] = self.spot_strategy
        result['SpotPriceLimit'] = self.spot_price_limit
        result['ScheduleStrategy'] = self.schedule_strategy
        result['TenantVSwitchId'] = self.tenant_vswitch_id
        result['TenantSecurityGroupId'] = self.tenant_security_group_id
        result['CorePattern'] = self.core_pattern
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.security_group_id = map.get('SecurityGroupId')
        self.v_switch_id = map.get('VSwitchId')
        self.container_group_name = map.get('ContainerGroupName')
        self.restart_policy = map.get('RestartPolicy')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = CreateContainerGroupRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.image_registry_credential = []
        if map.get('ImageRegistryCredential') is not None:
            for k in map.get('ImageRegistryCredential'):
                temp_model = CreateContainerGroupRequestImageRegistryCredential()
                temp_model = temp_model.from_map(k)
                self.image_registry_credential.append(temp_model)
        else:
            self.image_registry_credential = None
        self.container = []
        if map.get('Container') is not None:
            for k in map.get('Container'):
                temp_model = CreateContainerGroupRequestContainer()
                temp_model = temp_model.from_map(k)
                self.container.append(temp_model)
        else:
            self.container = None
        self.volume = []
        if map.get('Volume') is not None:
            for k in map.get('Volume'):
                temp_model = CreateContainerGroupRequestVolume()
                temp_model = temp_model.from_map(k)
                self.volume.append(temp_model)
        else:
            self.volume = None
        self.eip_instance_id = map.get('EipInstanceId')
        self.init_container = []
        if map.get('InitContainer') is not None:
            for k in map.get('InitContainer'):
                temp_model = CreateContainerGroupRequestInitContainer()
                temp_model = temp_model.from_map(k)
                self.init_container.append(temp_model)
        else:
            self.init_container = None
        if map.get('DnsConfig') is not None:
            temp_model = CreateContainerGroupRequestDnsConfig()
            self.dns_config = temp_model.from_map(map['DnsConfig'])
        else:
            self.dns_config = None
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.resource_group_id = map.get('ResourceGroupId')
        self.dns_policy = map.get('DnsPolicy')
        self.client_token = map.get('ClientToken')
        self.host_aliase = []
        if map.get('HostAliase') is not None:
            for k in map.get('HostAliase'):
                temp_model = CreateContainerGroupRequestHostAliase()
                temp_model = temp_model.from_map(k)
                self.host_aliase.append(temp_model)
        else:
            self.host_aliase = None
        self.arn = []
        if map.get('Arn') is not None:
            for k in map.get('Arn'):
                temp_model = CreateContainerGroupRequestArn()
                temp_model = temp_model.from_map(k)
                self.arn.append(temp_model)
        else:
            self.arn = None
        self.instance_type = map.get('InstanceType')
        if map.get('SecurityContext') is not None:
            temp_model = CreateContainerGroupRequestSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.sls_enable = map.get('SlsEnable')
        self.image_snapshot_id = map.get('ImageSnapshotId')
        self.ram_role_name = map.get('RamRoleName')
        self.ntp_server = []
        if map.get('NtpServer') is not None:
            for k in map.get('NtpServer'):
                self.ntp_server.append(k)
        else:
            self.ntp_server = None
        self.termination_grace_period_seconds = map.get('TerminationGracePeriodSeconds')
        self.auto_match_image_cache = map.get('AutoMatchImageCache')
        self.ipv_6address_count = map.get('Ipv6AddressCount')
        self.active_deadline_seconds = map.get('ActiveDeadlineSeconds')
        self.spot_strategy = map.get('SpotStrategy')
        self.spot_price_limit = map.get('SpotPriceLimit')
        self.schedule_strategy = map.get('ScheduleStrategy')
        self.tenant_vswitch_id = map.get('TenantVSwitchId')
        self.tenant_security_group_id = map.get('TenantSecurityGroupId')
        self.core_pattern = map.get('CorePattern')
        return self


class CreateContainerGroupRequestTag(TeaModel):
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


class CreateContainerGroupRequestImageRegistryCredential(TeaModel):
    def __init__(self, server=None, user_name=None, password=None):
        self.server = server
        self.user_name = user_name
        self.password = password

    def validate(self):
        self.validate_required(self.server, 'server')
        self.validate_required(self.user_name, 'user_name')
        self.validate_required(self.password, 'password')

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['UserName'] = self.user_name
        result['Password'] = self.password
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.user_name = map.get('UserName')
        self.password = map.get('Password')
        return self


class CreateContainerGroupRequestContainerVolumeMount(TeaModel):
    def __init__(self, mount_path=None, read_only=None, name=None, sub_path=None):
        self.mount_path = mount_path
        self.read_only = read_only
        self.name = name
        self.sub_path = sub_path

    def validate(self):
        self.validate_required(self.mount_path, 'mount_path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        result['Name'] = self.name
        result['SubPath'] = self.sub_path
        return result

    def from_map(self, map={}):
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        self.name = map.get('Name')
        self.sub_path = map.get('SubPath')
        return self


class CreateContainerGroupRequestContainerPort(TeaModel):
    def __init__(self, protocol=None, port=None):
        self.protocol = protocol
        self.port = port

    def validate(self):
        self.validate_required(self.protocol, 'protocol')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Protocol'] = self.protocol
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.protocol = map.get('Protocol')
        self.port = map.get('Port')
        return self


class CreateContainerGroupRequestContainerEnvironmentVarFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class CreateContainerGroupRequestContainerEnvironmentVar(TeaModel):
    def __init__(self, key=None, value=None, field_ref=None):
        self.key = key
        self.value = value
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        if map.get('FieldRef') is not None:
            temp_model = CreateContainerGroupRequestContainerEnvironmentVarFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class CreateContainerGroupRequestContainerReadinessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class CreateContainerGroupRequestContainerReadinessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class CreateContainerGroupRequestContainerReadinessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class CreateContainerGroupRequestContainerReadinessProbe(TeaModel):
    def __init__(self, http_get=None, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None, exec=None, tcp_socket=None):
        self.http_get = http_get
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds
        self.exec = exec
        self.tcp_socket = tcp_socket

    def validate(self):
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()

    def to_map(self):
        result = {}
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        return result

    def from_map(self, map={}):
        if map.get('HttpGet') is not None:
            temp_model = CreateContainerGroupRequestContainerReadinessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        if map.get('Exec') is not None:
            temp_model = CreateContainerGroupRequestContainerReadinessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('TcpSocket') is not None:
            temp_model = CreateContainerGroupRequestContainerReadinessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        return self


class CreateContainerGroupRequestContainerLivenessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class CreateContainerGroupRequestContainerLivenessProbeExec(TeaModel):
    def __init__(self, command=None):
        self.command = []

    def validate(self):
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        return result

    def from_map(self, map={}):
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        return self


class CreateContainerGroupRequestContainerLivenessProbeTcpSocket(TeaModel):
    def __init__(self, port=None):
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        return self


class CreateContainerGroupRequestContainerLivenessProbe(TeaModel):
    def __init__(self, http_get=None, initial_delay_seconds=None, period_seconds=None, success_threshold=None, failure_threshold=None, timeout_seconds=None, exec=None, tcp_socket=None):
        self.http_get = http_get
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.timeout_seconds = timeout_seconds
        self.exec = exec
        self.tcp_socket = tcp_socket

    def validate(self):
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()
        self.validate_required(self.exec, 'exec')
        if self.exec:
            self.exec.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()

    def to_map(self):
        result = {}
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        result['TimeoutSeconds'] = self.timeout_seconds
        if self.exec is not None:
            result['Exec'] = self.exec.to_map()
        else:
            result['Exec'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        return result

    def from_map(self, map={}):
        if map.get('HttpGet') is not None:
            temp_model = CreateContainerGroupRequestContainerLivenessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        self.timeout_seconds = map.get('TimeoutSeconds')
        if map.get('Exec') is not None:
            temp_model = CreateContainerGroupRequestContainerLivenessProbeExec()
            self.exec = temp_model.from_map(map['Exec'])
        else:
            self.exec = None
        if map.get('TcpSocket') is not None:
            temp_model = CreateContainerGroupRequestContainerLivenessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        return self


class CreateContainerGroupRequestContainerSecurityContextCapability(TeaModel):
    def __init__(self, add=None):
        self.add = []

    def validate(self):
        self.validate_required(self.add, 'add')

    def to_map(self):
        result = {}
        result['Add'] = []
        if self.add is not None:
            for k in self.add:
                result['Add'].append(k)
        else:
            result['Add'] = None
        return result

    def from_map(self, map={}):
        self.add = []
        if map.get('Add') is not None:
            for k in map.get('Add'):
                self.add.append(k)
        else:
            self.add = None
        return self


class CreateContainerGroupRequestContainerSecurityContext(TeaModel):
    def __init__(self, capability=None, read_only_root_filesystem=None, run_as_user=None):
        self.capability = capability
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user

    def validate(self):
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        return result

    def from_map(self, map={}):
        if map.get('Capability') is not None:
            temp_model = CreateContainerGroupRequestContainerSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        return self


class CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class CreateContainerGroupRequestContainer(TeaModel):
    def __init__(self, image=None, name=None, cpu=None, memory=None, working_dir=None, image_pull_policy=None, command=None, arg=None, volume_mount=None, port=None, environment_var=None, readiness_probe=None, liveness_probe=None, security_context=None, stdin=None, stdin_once=None, tty=None, gpu=None, lifecycle_post_start_handler_http_get_host=None, lifecycle_post_start_handler_http_get_port=None, lifecycle_post_start_handler_http_get_path=None, lifecycle_post_start_handler_http_get_scheme=None, lifecycle_post_start_handler_http_get_http_header=None, lifecycle_post_start_handler_exec=None, lifecycle_post_start_handler_tcp_socket_host=None, lifecycle_post_start_handler_tcp_socket_port=None, lifecycle_pre_stop_handler_http_get_host=None, lifecycle_pre_stop_handler_http_get_port=None, lifecycle_pre_stop_handler_http_get_path=None, lifecycle_pre_stop_handler_http_get_scheme=None, lifecycle_pre_stop_handler_http_get_http_header=None, lifecycle_pre_stop_handler_exec=None, lifecycle_pre_stop_handler_tcp_socket_host=None, lifecycle_pre_stop_handler_tcp_socket_port=None, termination_message_path=None, termination_message_policy=None):
        self.image = image
        self.name = name
        self.cpu = cpu
        self.memory = memory
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.command = []
        self.arg = []
        self.volume_mount = []
        self.port = []
        self.environment_var = []
        self.readiness_probe = readiness_probe
        self.liveness_probe = liveness_probe
        self.security_context = security_context
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.gpu = gpu
        self.lifecycle_post_start_handler_http_get_host = lifecycle_post_start_handler_http_get_host
        self.lifecycle_post_start_handler_http_get_port = lifecycle_post_start_handler_http_get_port
        self.lifecycle_post_start_handler_http_get_path = lifecycle_post_start_handler_http_get_path
        self.lifecycle_post_start_handler_http_get_scheme = lifecycle_post_start_handler_http_get_scheme
        self.lifecycle_post_start_handler_http_get_http_header = []
        self.lifecycle_post_start_handler_exec = []
        self.lifecycle_post_start_handler_tcp_socket_host = lifecycle_post_start_handler_tcp_socket_host
        self.lifecycle_post_start_handler_tcp_socket_port = lifecycle_post_start_handler_tcp_socket_port
        self.lifecycle_pre_stop_handler_http_get_host = lifecycle_pre_stop_handler_http_get_host
        self.lifecycle_pre_stop_handler_http_get_port = lifecycle_pre_stop_handler_http_get_port
        self.lifecycle_pre_stop_handler_http_get_path = lifecycle_pre_stop_handler_http_get_path
        self.lifecycle_pre_stop_handler_http_get_scheme = lifecycle_pre_stop_handler_http_get_scheme
        self.lifecycle_pre_stop_handler_http_get_http_header = []
        self.lifecycle_pre_stop_handler_exec = []
        self.lifecycle_pre_stop_handler_tcp_socket_host = lifecycle_pre_stop_handler_tcp_socket_host
        self.lifecycle_pre_stop_handler_tcp_socket_port = lifecycle_pre_stop_handler_tcp_socket_port
        self.termination_message_path = termination_message_path
        self.termination_message_policy = termination_message_policy

    def validate(self):
        self.validate_required(self.image, 'image')
        self.validate_required(self.name, 'name')
        if self.volume_mount:
            for k in self.volume_mount:
                if k :
                    k.validate()
        if self.port:
            for k in self.port:
                if k :
                    k.validate()
        if self.environment_var:
            for k in self.environment_var:
                if k :
                    k.validate()
        self.validate_required(self.readiness_probe, 'readiness_probe')
        if self.readiness_probe:
            self.readiness_probe.validate()
        self.validate_required(self.liveness_probe, 'liveness_probe')
        if self.liveness_probe:
            self.liveness_probe.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()
        if self.lifecycle_post_start_handler_http_get_http_header:
            for k in self.lifecycle_post_start_handler_http_get_http_header:
                if k :
                    k.validate()
        if self.lifecycle_pre_stop_handler_http_get_http_header:
            for k in self.lifecycle_pre_stop_handler_http_get_http_header:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Image'] = self.image
        result['Name'] = self.name
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Arg'] = []
        if self.arg is not None:
            for k in self.arg:
                result['Arg'].append(k)
        else:
            result['Arg'] = None
        result['VolumeMount'] = []
        if self.volume_mount is not None:
            for k in self.volume_mount:
                result['VolumeMount'].append(k.to_map() if k else None)
        else:
            result['VolumeMount'] = None
        result['Port'] = []
        if self.port is not None:
            for k in self.port:
                result['Port'].append(k.to_map() if k else None)
        else:
            result['Port'] = None
        result['EnvironmentVar'] = []
        if self.environment_var is not None:
            for k in self.environment_var:
                result['EnvironmentVar'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVar'] = None
        if self.readiness_probe is not None:
            result['ReadinessProbe'] = self.readiness_probe.to_map()
        else:
            result['ReadinessProbe'] = None
        if self.liveness_probe is not None:
            result['LivenessProbe'] = self.liveness_probe.to_map()
        else:
            result['LivenessProbe'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['Gpu'] = self.gpu
        result['LifecyclePostStartHandlerHttpGetHost'] = self.lifecycle_post_start_handler_http_get_host
        result['LifecyclePostStartHandlerHttpGetPort'] = self.lifecycle_post_start_handler_http_get_port
        result['LifecyclePostStartHandlerHttpGetPath'] = self.lifecycle_post_start_handler_http_get_path
        result['LifecyclePostStartHandlerHttpGetScheme'] = self.lifecycle_post_start_handler_http_get_scheme
        result['LifecyclePostStartHandlerHttpGetHttpHeader'] = []
        if self.lifecycle_post_start_handler_http_get_http_header is not None:
            for k in self.lifecycle_post_start_handler_http_get_http_header:
                result['LifecyclePostStartHandlerHttpGetHttpHeader'].append(k.to_map() if k else None)
        else:
            result['LifecyclePostStartHandlerHttpGetHttpHeader'] = None
        result['LifecyclePostStartHandlerExec'] = []
        if self.lifecycle_post_start_handler_exec is not None:
            for k in self.lifecycle_post_start_handler_exec:
                result['LifecyclePostStartHandlerExec'].append(k)
        else:
            result['LifecyclePostStartHandlerExec'] = None
        result['LifecyclePostStartHandlerTcpSocketHost'] = self.lifecycle_post_start_handler_tcp_socket_host
        result['LifecyclePostStartHandlerTcpSocketPort'] = self.lifecycle_post_start_handler_tcp_socket_port
        result['LifecyclePreStopHandlerHttpGetHost'] = self.lifecycle_pre_stop_handler_http_get_host
        result['LifecyclePreStopHandlerHttpGetPort'] = self.lifecycle_pre_stop_handler_http_get_port
        result['LifecyclePreStopHandlerHttpGetPath'] = self.lifecycle_pre_stop_handler_http_get_path
        result['LifecyclePreStopHandlerHttpGetScheme'] = self.lifecycle_pre_stop_handler_http_get_scheme
        result['LifecyclePreStopHandlerHttpGetHttpHeader'] = []
        if self.lifecycle_pre_stop_handler_http_get_http_header is not None:
            for k in self.lifecycle_pre_stop_handler_http_get_http_header:
                result['LifecyclePreStopHandlerHttpGetHttpHeader'].append(k.to_map() if k else None)
        else:
            result['LifecyclePreStopHandlerHttpGetHttpHeader'] = None
        result['LifecyclePreStopHandlerExec'] = []
        if self.lifecycle_pre_stop_handler_exec is not None:
            for k in self.lifecycle_pre_stop_handler_exec:
                result['LifecyclePreStopHandlerExec'].append(k)
        else:
            result['LifecyclePreStopHandlerExec'] = None
        result['LifecyclePreStopHandlerTcpSocketHost'] = self.lifecycle_pre_stop_handler_tcp_socket_host
        result['LifecyclePreStopHandlerTcpSocketPort'] = self.lifecycle_pre_stop_handler_tcp_socket_port
        result['TerminationMessagePath'] = self.termination_message_path
        result['TerminationMessagePolicy'] = self.termination_message_policy
        return result

    def from_map(self, map={}):
        self.image = map.get('Image')
        self.name = map.get('Name')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.arg = []
        if map.get('Arg') is not None:
            for k in map.get('Arg'):
                self.arg.append(k)
        else:
            self.arg = None
        self.volume_mount = []
        if map.get('VolumeMount') is not None:
            for k in map.get('VolumeMount'):
                temp_model = CreateContainerGroupRequestContainerVolumeMount()
                temp_model = temp_model.from_map(k)
                self.volume_mount.append(temp_model)
        else:
            self.volume_mount = None
        self.port = []
        if map.get('Port') is not None:
            for k in map.get('Port'):
                temp_model = CreateContainerGroupRequestContainerPort()
                temp_model = temp_model.from_map(k)
                self.port.append(temp_model)
        else:
            self.port = None
        self.environment_var = []
        if map.get('EnvironmentVar') is not None:
            for k in map.get('EnvironmentVar'):
                temp_model = CreateContainerGroupRequestContainerEnvironmentVar()
                temp_model = temp_model.from_map(k)
                self.environment_var.append(temp_model)
        else:
            self.environment_var = None
        if map.get('ReadinessProbe') is not None:
            temp_model = CreateContainerGroupRequestContainerReadinessProbe()
            self.readiness_probe = temp_model.from_map(map['ReadinessProbe'])
        else:
            self.readiness_probe = None
        if map.get('LivenessProbe') is not None:
            temp_model = CreateContainerGroupRequestContainerLivenessProbe()
            self.liveness_probe = temp_model.from_map(map['LivenessProbe'])
        else:
            self.liveness_probe = None
        if map.get('SecurityContext') is not None:
            temp_model = CreateContainerGroupRequestContainerSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.gpu = map.get('Gpu')
        self.lifecycle_post_start_handler_http_get_host = map.get('LifecyclePostStartHandlerHttpGetHost')
        self.lifecycle_post_start_handler_http_get_port = map.get('LifecyclePostStartHandlerHttpGetPort')
        self.lifecycle_post_start_handler_http_get_path = map.get('LifecyclePostStartHandlerHttpGetPath')
        self.lifecycle_post_start_handler_http_get_scheme = map.get('LifecyclePostStartHandlerHttpGetScheme')
        self.lifecycle_post_start_handler_http_get_http_header = []
        if map.get('LifecyclePostStartHandlerHttpGetHttpHeader') is not None:
            for k in map.get('LifecyclePostStartHandlerHttpGetHttpHeader'):
                temp_model = CreateContainerGroupRequestContainerLifecyclePostStartHandlerHttpGetHttpHeader()
                temp_model = temp_model.from_map(k)
                self.lifecycle_post_start_handler_http_get_http_header.append(temp_model)
        else:
            self.lifecycle_post_start_handler_http_get_http_header = None
        self.lifecycle_post_start_handler_exec = []
        if map.get('LifecyclePostStartHandlerExec') is not None:
            for k in map.get('LifecyclePostStartHandlerExec'):
                self.lifecycle_post_start_handler_exec.append(k)
        else:
            self.lifecycle_post_start_handler_exec = None
        self.lifecycle_post_start_handler_tcp_socket_host = map.get('LifecyclePostStartHandlerTcpSocketHost')
        self.lifecycle_post_start_handler_tcp_socket_port = map.get('LifecyclePostStartHandlerTcpSocketPort')
        self.lifecycle_pre_stop_handler_http_get_host = map.get('LifecyclePreStopHandlerHttpGetHost')
        self.lifecycle_pre_stop_handler_http_get_port = map.get('LifecyclePreStopHandlerHttpGetPort')
        self.lifecycle_pre_stop_handler_http_get_path = map.get('LifecyclePreStopHandlerHttpGetPath')
        self.lifecycle_pre_stop_handler_http_get_scheme = map.get('LifecyclePreStopHandlerHttpGetScheme')
        self.lifecycle_pre_stop_handler_http_get_http_header = []
        if map.get('LifecyclePreStopHandlerHttpGetHttpHeader') is not None:
            for k in map.get('LifecyclePreStopHandlerHttpGetHttpHeader'):
                temp_model = CreateContainerGroupRequestContainerLifecyclePreStopHandlerHttpGetHttpHeader()
                temp_model = temp_model.from_map(k)
                self.lifecycle_pre_stop_handler_http_get_http_header.append(temp_model)
        else:
            self.lifecycle_pre_stop_handler_http_get_http_header = None
        self.lifecycle_pre_stop_handler_exec = []
        if map.get('LifecyclePreStopHandlerExec') is not None:
            for k in map.get('LifecyclePreStopHandlerExec'):
                self.lifecycle_pre_stop_handler_exec.append(k)
        else:
            self.lifecycle_pre_stop_handler_exec = None
        self.lifecycle_pre_stop_handler_tcp_socket_host = map.get('LifecyclePreStopHandlerTcpSocketHost')
        self.lifecycle_pre_stop_handler_tcp_socket_port = map.get('LifecyclePreStopHandlerTcpSocketPort')
        self.termination_message_path = map.get('TerminationMessagePath')
        self.termination_message_policy = map.get('TerminationMessagePolicy')
        return self


class CreateContainerGroupRequestVolumeNFSVolume(TeaModel):
    def __init__(self, server=None, path=None, read_only=None):
        self.server = server
        self.path = path
        self.read_only = read_only

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Server'] = self.server
        result['Path'] = self.path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.server = map.get('Server')
        self.path = map.get('Path')
        self.read_only = map.get('ReadOnly')
        return self


class CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath(TeaModel):
    def __init__(self, content=None, path=None, mode=None):
        self.content = content
        self.path = path
        self.mode = mode

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Path'] = self.path
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.path = map.get('Path')
        self.mode = map.get('Mode')
        return self


class CreateContainerGroupRequestVolumeConfigFileVolume(TeaModel):
    def __init__(self, config_file_to_path=None, default_mode=None):
        self.config_file_to_path = []
        self.default_mode = default_mode

    def validate(self):
        self.validate_required(self.config_file_to_path, 'config_file_to_path')
        if self.config_file_to_path:
            for k in self.config_file_to_path:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ConfigFileToPath'] = []
        if self.config_file_to_path is not None:
            for k in self.config_file_to_path:
                result['ConfigFileToPath'].append(k.to_map() if k else None)
        else:
            result['ConfigFileToPath'] = None
        result['DefaultMode'] = self.default_mode
        return result

    def from_map(self, map={}):
        self.config_file_to_path = []
        if map.get('ConfigFileToPath') is not None:
            for k in map.get('ConfigFileToPath'):
                temp_model = CreateContainerGroupRequestVolumeConfigFileVolumeConfigFileToPath()
                temp_model = temp_model.from_map(k)
                self.config_file_to_path.append(temp_model)
        else:
            self.config_file_to_path = None
        self.default_mode = map.get('DefaultMode')
        return self


class CreateContainerGroupRequestVolumeEmptyDirVolume(TeaModel):
    def __init__(self, medium=None):
        self.medium = medium

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Medium'] = self.medium
        return result

    def from_map(self, map={}):
        self.medium = map.get('Medium')
        return self


class CreateContainerGroupRequestVolumeDiskVolume(TeaModel):
    def __init__(self, disk_id=None, fs_type=None, disk_size=None):
        self.disk_id = disk_id
        self.fs_type = fs_type
        self.disk_size = disk_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DiskId'] = self.disk_id
        result['FsType'] = self.fs_type
        result['DiskSize'] = self.disk_size
        return result

    def from_map(self, map={}):
        self.disk_id = map.get('DiskId')
        self.fs_type = map.get('FsType')
        self.disk_size = map.get('DiskSize')
        return self


class CreateContainerGroupRequestVolumeFlexVolume(TeaModel):
    def __init__(self, driver=None, fs_type=None, options=None):
        self.driver = driver
        self.fs_type = fs_type
        self.options = options

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Driver'] = self.driver
        result['FsType'] = self.fs_type
        result['Options'] = self.options
        return result

    def from_map(self, map={}):
        self.driver = map.get('Driver')
        self.fs_type = map.get('FsType')
        self.options = map.get('Options')
        return self


class CreateContainerGroupRequestVolumeHostPathVolume(TeaModel):
    def __init__(self, type=None, path=None):
        self.type = type
        self.path = path

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Path'] = self.path
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.path = map.get('Path')
        return self


class CreateContainerGroupRequestVolume(TeaModel):
    def __init__(self, name=None, nfsvolume=None, config_file_volume=None, type=None, empty_dir_volume=None, disk_volume=None, flex_volume=None, host_path_volume=None):
        self.name = name
        self.nfsvolume = nfsvolume
        self.config_file_volume = config_file_volume
        self.type = type
        self.empty_dir_volume = empty_dir_volume
        self.disk_volume = disk_volume
        self.flex_volume = flex_volume
        self.host_path_volume = host_path_volume

    def validate(self):
        self.validate_required(self.nfsvolume, 'nfsvolume')
        if self.nfsvolume:
            self.nfsvolume.validate()
        self.validate_required(self.config_file_volume, 'config_file_volume')
        if self.config_file_volume:
            self.config_file_volume.validate()
        self.validate_required(self.empty_dir_volume, 'empty_dir_volume')
        if self.empty_dir_volume:
            self.empty_dir_volume.validate()
        self.validate_required(self.disk_volume, 'disk_volume')
        if self.disk_volume:
            self.disk_volume.validate()
        self.validate_required(self.flex_volume, 'flex_volume')
        if self.flex_volume:
            self.flex_volume.validate()
        self.validate_required(self.host_path_volume, 'host_path_volume')
        if self.host_path_volume:
            self.host_path_volume.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        if self.nfsvolume is not None:
            result['NFSVolume'] = self.nfsvolume.to_map()
        else:
            result['NFSVolume'] = None
        if self.config_file_volume is not None:
            result['ConfigFileVolume'] = self.config_file_volume.to_map()
        else:
            result['ConfigFileVolume'] = None
        result['Type'] = self.type
        if self.empty_dir_volume is not None:
            result['EmptyDirVolume'] = self.empty_dir_volume.to_map()
        else:
            result['EmptyDirVolume'] = None
        if self.disk_volume is not None:
            result['DiskVolume'] = self.disk_volume.to_map()
        else:
            result['DiskVolume'] = None
        if self.flex_volume is not None:
            result['FlexVolume'] = self.flex_volume.to_map()
        else:
            result['FlexVolume'] = None
        if self.host_path_volume is not None:
            result['HostPathVolume'] = self.host_path_volume.to_map()
        else:
            result['HostPathVolume'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        if map.get('NFSVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeNFSVolume()
            self.nfsvolume = temp_model.from_map(map['NFSVolume'])
        else:
            self.nfsvolume = None
        if map.get('ConfigFileVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeConfigFileVolume()
            self.config_file_volume = temp_model.from_map(map['ConfigFileVolume'])
        else:
            self.config_file_volume = None
        self.type = map.get('Type')
        if map.get('EmptyDirVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeEmptyDirVolume()
            self.empty_dir_volume = temp_model.from_map(map['EmptyDirVolume'])
        else:
            self.empty_dir_volume = None
        if map.get('DiskVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeDiskVolume()
            self.disk_volume = temp_model.from_map(map['DiskVolume'])
        else:
            self.disk_volume = None
        if map.get('FlexVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeFlexVolume()
            self.flex_volume = temp_model.from_map(map['FlexVolume'])
        else:
            self.flex_volume = None
        if map.get('HostPathVolume') is not None:
            temp_model = CreateContainerGroupRequestVolumeHostPathVolume()
            self.host_path_volume = temp_model.from_map(map['HostPathVolume'])
        else:
            self.host_path_volume = None
        return self


class CreateContainerGroupRequestInitContainerVolumeMount(TeaModel):
    def __init__(self, mount_path=None, read_only=None, name=None, sub_path=None):
        self.mount_path = mount_path
        self.read_only = read_only
        self.name = name
        self.sub_path = sub_path

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        result['Name'] = self.name
        result['SubPath'] = self.sub_path
        return result

    def from_map(self, map={}):
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        self.name = map.get('Name')
        self.sub_path = map.get('SubPath')
        return self


class CreateContainerGroupRequestInitContainerPort(TeaModel):
    def __init__(self, protocol=None, port=None):
        self.protocol = protocol
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Protocol'] = self.protocol
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.protocol = map.get('Protocol')
        self.port = map.get('Port')
        return self


class CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class CreateContainerGroupRequestInitContainerEnvironmentVar(TeaModel):
    def __init__(self, key=None, value=None, field_ref=None):
        self.key = key
        self.value = value
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        if map.get('FieldRef') is not None:
            temp_model = CreateContainerGroupRequestInitContainerEnvironmentVarFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class CreateContainerGroupRequestInitContainerSecurityContextCapability(TeaModel):
    def __init__(self, add=None):
        self.add = []

    def validate(self):
        self.validate_required(self.add, 'add')

    def to_map(self):
        result = {}
        result['Add'] = []
        if self.add is not None:
            for k in self.add:
                result['Add'].append(k)
        else:
            result['Add'] = None
        return result

    def from_map(self, map={}):
        self.add = []
        if map.get('Add') is not None:
            for k in map.get('Add'):
                self.add.append(k)
        else:
            self.add = None
        return self


class CreateContainerGroupRequestInitContainerSecurityContext(TeaModel):
    def __init__(self, capability=None, read_only_root_filesystem=None, run_as_user=None):
        self.capability = capability
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user

    def validate(self):
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        return result

    def from_map(self, map={}):
        if map.get('Capability') is not None:
            temp_model = CreateContainerGroupRequestInitContainerSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        return self


class CreateContainerGroupRequestInitContainer(TeaModel):
    def __init__(self, name=None, image=None, cpu=None, memory=None, working_dir=None, image_pull_policy=None, command=None, arg=None, volume_mount=None, port=None, environment_var=None, security_context=None, gpu=None, termination_message_path=None, termination_message_policy=None):
        self.name = name
        self.image = image
        self.cpu = cpu
        self.memory = memory
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.command = []
        self.arg = []
        self.volume_mount = []
        self.port = []
        self.environment_var = []
        self.security_context = security_context
        self.gpu = gpu
        self.termination_message_path = termination_message_path
        self.termination_message_policy = termination_message_policy

    def validate(self):
        self.validate_required(self.command, 'command')
        self.validate_required(self.arg, 'arg')
        self.validate_required(self.volume_mount, 'volume_mount')
        if self.volume_mount:
            for k in self.volume_mount:
                if k :
                    k.validate()
        self.validate_required(self.port, 'port')
        if self.port:
            for k in self.port:
                if k :
                    k.validate()
        self.validate_required(self.environment_var, 'environment_var')
        if self.environment_var:
            for k in self.environment_var:
                if k :
                    k.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Arg'] = []
        if self.arg is not None:
            for k in self.arg:
                result['Arg'].append(k)
        else:
            result['Arg'] = None
        result['VolumeMount'] = []
        if self.volume_mount is not None:
            for k in self.volume_mount:
                result['VolumeMount'].append(k.to_map() if k else None)
        else:
            result['VolumeMount'] = None
        result['Port'] = []
        if self.port is not None:
            for k in self.port:
                result['Port'].append(k.to_map() if k else None)
        else:
            result['Port'] = None
        result['EnvironmentVar'] = []
        if self.environment_var is not None:
            for k in self.environment_var:
                result['EnvironmentVar'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVar'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Gpu'] = self.gpu
        result['TerminationMessagePath'] = self.termination_message_path
        result['TerminationMessagePolicy'] = self.termination_message_policy
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.arg = []
        if map.get('Arg') is not None:
            for k in map.get('Arg'):
                self.arg.append(k)
        else:
            self.arg = None
        self.volume_mount = []
        if map.get('VolumeMount') is not None:
            for k in map.get('VolumeMount'):
                temp_model = CreateContainerGroupRequestInitContainerVolumeMount()
                temp_model = temp_model.from_map(k)
                self.volume_mount.append(temp_model)
        else:
            self.volume_mount = None
        self.port = []
        if map.get('Port') is not None:
            for k in map.get('Port'):
                temp_model = CreateContainerGroupRequestInitContainerPort()
                temp_model = temp_model.from_map(k)
                self.port.append(temp_model)
        else:
            self.port = None
        self.environment_var = []
        if map.get('EnvironmentVar') is not None:
            for k in map.get('EnvironmentVar'):
                temp_model = CreateContainerGroupRequestInitContainerEnvironmentVar()
                temp_model = temp_model.from_map(k)
                self.environment_var.append(temp_model)
        else:
            self.environment_var = None
        if map.get('SecurityContext') is not None:
            temp_model = CreateContainerGroupRequestInitContainerSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.gpu = map.get('Gpu')
        self.termination_message_path = map.get('TerminationMessagePath')
        self.termination_message_policy = map.get('TerminationMessagePolicy')
        return self


class CreateContainerGroupRequestDnsConfigOption(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class CreateContainerGroupRequestDnsConfig(TeaModel):
    def __init__(self, name_server=None, search=None, option=None):
        self.name_server = []
        self.search = []
        self.option = []

    def validate(self):
        if self.option:
            for k in self.option:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NameServer'] = []
        if self.name_server is not None:
            for k in self.name_server:
                result['NameServer'].append(k)
        else:
            result['NameServer'] = None
        result['Search'] = []
        if self.search is not None:
            for k in self.search:
                result['Search'].append(k)
        else:
            result['Search'] = None
        result['Option'] = []
        if self.option is not None:
            for k in self.option:
                result['Option'].append(k.to_map() if k else None)
        else:
            result['Option'] = None
        return result

    def from_map(self, map={}):
        self.name_server = []
        if map.get('NameServer') is not None:
            for k in map.get('NameServer'):
                self.name_server.append(k)
        else:
            self.name_server = None
        self.search = []
        if map.get('Search') is not None:
            for k in map.get('Search'):
                self.search.append(k)
        else:
            self.search = None
        self.option = []
        if map.get('Option') is not None:
            for k in map.get('Option'):
                temp_model = CreateContainerGroupRequestDnsConfigOption()
                temp_model = temp_model.from_map(k)
                self.option.append(temp_model)
        else:
            self.option = None
        return self


class CreateContainerGroupRequestHostAliase(TeaModel):
    def __init__(self, ip=None, hostname=None):
        self.ip = ip
        self.hostname = []

    def validate(self):
        self.validate_required(self.hostname, 'hostname')

    def to_map(self):
        result = {}
        result['Ip'] = self.ip
        result['Hostname'] = []
        if self.hostname is not None:
            for k in self.hostname:
                result['Hostname'].append(k)
        else:
            result['Hostname'] = None
        return result

    def from_map(self, map={}):
        self.ip = map.get('Ip')
        self.hostname = []
        if map.get('Hostname') is not None:
            for k in map.get('Hostname'):
                self.hostname.append(k)
        else:
            self.hostname = None
        return self


class CreateContainerGroupRequestArn(TeaModel):
    def __init__(self, role_arn=None, role_type=None, assume_role_for=None):
        self.role_arn = role_arn
        self.role_type = role_type
        self.assume_role_for = assume_role_for

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RoleArn'] = self.role_arn
        result['RoleType'] = self.role_type
        result['AssumeRoleFor'] = self.assume_role_for
        return result

    def from_map(self, map={}):
        self.role_arn = map.get('RoleArn')
        self.role_type = map.get('RoleType')
        self.assume_role_for = map.get('AssumeRoleFor')
        return self


class CreateContainerGroupRequestSecurityContextSysctl(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class CreateContainerGroupRequestSecurityContext(TeaModel):
    def __init__(self, sysctl=None):
        self.sysctl = []

    def validate(self):
        if self.sysctl:
            for k in self.sysctl:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sysctl'] = []
        if self.sysctl is not None:
            for k in self.sysctl:
                result['Sysctl'].append(k.to_map() if k else None)
        else:
            result['Sysctl'] = None
        return result

    def from_map(self, map={}):
        self.sysctl = []
        if map.get('Sysctl') is not None:
            for k in map.get('Sysctl'):
                temp_model = CreateContainerGroupRequestSecurityContextSysctl()
                temp_model = temp_model.from_map(k)
                self.sysctl.append(temp_model)
        else:
            self.sysctl = None
        return self


class CreateContainerGroupResponse(TeaModel):
    def __init__(self, request_id=None, container_group_id=None):
        self.request_id = request_id
        self.container_group_id = container_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContainerGroupId'] = self.container_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.container_group_id = map.get('ContainerGroupId')
        return self


class DescribeContainerGroupsRequest(TeaModel):
    def __init__(self, region_id=None, zone_id=None, v_switch_id=None, next_token=None, limit=None, tag=None, container_group_ids=None, container_group_name=None, status=None, resource_group_id=None, with_event=None):
        self.region_id = region_id
        self.zone_id = zone_id
        self.v_switch_id = v_switch_id
        self.next_token = next_token
        self.limit = limit
        self.tag = []
        self.container_group_ids = container_group_ids
        self.container_group_name = container_group_name
        self.status = status
        self.resource_group_id = resource_group_id
        self.with_event = with_event

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['VSwitchId'] = self.v_switch_id
        result['NextToken'] = self.next_token
        result['Limit'] = self.limit
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['ContainerGroupIds'] = self.container_group_ids
        result['ContainerGroupName'] = self.container_group_name
        result['Status'] = self.status
        result['ResourceGroupId'] = self.resource_group_id
        result['WithEvent'] = self.with_event
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.v_switch_id = map.get('VSwitchId')
        self.next_token = map.get('NextToken')
        self.limit = map.get('Limit')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeContainerGroupsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.container_group_ids = map.get('ContainerGroupIds')
        self.container_group_name = map.get('ContainerGroupName')
        self.status = map.get('Status')
        self.resource_group_id = map.get('ResourceGroupId')
        self.with_event = map.get('WithEvent')
        return self


class DescribeContainerGroupsRequestTag(TeaModel):
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


class DescribeContainerGroupsResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, total_count=None, container_groups=None):
        self.request_id = request_id
        self.next_token = next_token
        self.total_count = total_count
        self.container_groups = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.container_groups, 'container_groups')
        if self.container_groups:
            for k in self.container_groups:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['TotalCount'] = self.total_count
        result['ContainerGroups'] = []
        if self.container_groups is not None:
            for k in self.container_groups:
                result['ContainerGroups'].append(k.to_map() if k else None)
        else:
            result['ContainerGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.total_count = map.get('TotalCount')
        self.container_groups = []
        if map.get('ContainerGroups') is not None:
            for k in map.get('ContainerGroups'):
                temp_model = DescribeContainerGroupsResponseContainerGroups()
                temp_model = temp_model.from_map(k)
                self.container_groups.append(temp_model)
        else:
            self.container_groups = None
        return self


class DescribeContainerGroupsResponseContainerGroupsTags(TeaModel):
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


class DescribeContainerGroupsResponseContainerGroupsEvents(TeaModel):
    def __init__(self, count=None, type=None, name=None, message=None, first_timestamp=None, last_timestamp=None, reason=None):
        self.count = count
        self.type = type
        self.name = name
        self.message = message
        self.first_timestamp = first_timestamp
        self.last_timestamp = last_timestamp
        self.reason = reason

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.message, 'message')
        self.validate_required(self.first_timestamp, 'first_timestamp')
        self.validate_required(self.last_timestamp, 'last_timestamp')
        self.validate_required(self.reason, 'reason')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['Type'] = self.type
        result['Name'] = self.name
        result['Message'] = self.message
        result['FirstTimestamp'] = self.first_timestamp
        result['LastTimestamp'] = self.last_timestamp
        result['Reason'] = self.reason
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.message = map.get('Message')
        self.first_timestamp = map.get('FirstTimestamp')
        self.last_timestamp = map.get('LastTimestamp')
        self.reason = map.get('Reason')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts(TeaModel):
    def __init__(self, name=None, mount_path=None, read_only=None):
        self.name = name
        self.mount_path = mount_path
        self.read_only = read_only

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.mount_path, 'mount_path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersPorts(TeaModel):
    def __init__(self, port=None, protocol=None):
        self.port = port
        self.protocol = protocol

    def validate(self):
        self.validate_required(self.port, 'port')
        self.validate_required(self.protocol, 'protocol')

    def to_map(self):
        result = {}
        result['Port'] = self.port
        result['Protocol'] = self.protocol
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        self.protocol = map.get('Protocol')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        self.validate_required(self.field_path, 'field_path')

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom(TeaModel):
    def __init__(self, field_ref=None):
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        if map.get('FieldRef') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars(TeaModel):
    def __init__(self, key=None, value=None, value_from=None):
        self.key = key
        self.value = value
        self.value_from = value_from

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')
        self.validate_required(self.value_from, 'value_from')
        if self.value_from:
            self.value_from.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        if self.value_from is not None:
            result['ValueFrom'] = self.value_from.to_map()
        else:
            result['ValueFrom'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        if map.get('ValueFrom') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom()
            self.value_from = temp_model.from_map(map['ValueFrom'])
        else:
            self.value_from = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersPreviousState(TeaModel):
    def __init__(self, state=None, detail_status=None, exit_code=None, start_time=None, finish_time=None, reason=None, message=None, signal=None):
        self.state = state
        self.detail_status = detail_status
        self.exit_code = exit_code
        self.start_time = start_time
        self.finish_time = finish_time
        self.reason = reason
        self.message = message
        self.signal = signal

    def validate(self):
        self.validate_required(self.state, 'state')
        self.validate_required(self.detail_status, 'detail_status')
        self.validate_required(self.exit_code, 'exit_code')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.finish_time, 'finish_time')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.message, 'message')
        self.validate_required(self.signal, 'signal')

    def to_map(self):
        result = {}
        result['State'] = self.state
        result['DetailStatus'] = self.detail_status
        result['ExitCode'] = self.exit_code
        result['StartTime'] = self.start_time
        result['FinishTime'] = self.finish_time
        result['Reason'] = self.reason
        result['Message'] = self.message
        result['Signal'] = self.signal
        return result

    def from_map(self, map={}):
        self.state = map.get('State')
        self.detail_status = map.get('DetailStatus')
        self.exit_code = map.get('ExitCode')
        self.start_time = map.get('StartTime')
        self.finish_time = map.get('FinishTime')
        self.reason = map.get('Reason')
        self.message = map.get('Message')
        self.signal = map.get('Signal')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersCurrentState(TeaModel):
    def __init__(self, state=None, detail_status=None, exit_code=None, start_time=None, finish_time=None, reason=None, message=None, signal=None):
        self.state = state
        self.detail_status = detail_status
        self.exit_code = exit_code
        self.start_time = start_time
        self.finish_time = finish_time
        self.reason = reason
        self.message = message
        self.signal = signal

    def validate(self):
        self.validate_required(self.state, 'state')
        self.validate_required(self.detail_status, 'detail_status')
        self.validate_required(self.exit_code, 'exit_code')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.finish_time, 'finish_time')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.message, 'message')
        self.validate_required(self.signal, 'signal')

    def to_map(self):
        result = {}
        result['State'] = self.state
        result['DetailStatus'] = self.detail_status
        result['ExitCode'] = self.exit_code
        result['StartTime'] = self.start_time
        result['FinishTime'] = self.finish_time
        result['Reason'] = self.reason
        result['Message'] = self.message
        result['Signal'] = self.signal
        return result

    def from_map(self, map={}):
        self.state = map.get('State')
        self.detail_status = map.get('DetailStatus')
        self.exit_code = map.get('ExitCode')
        self.start_time = map.get('StartTime')
        self.finish_time = map.get('FinishTime')
        self.reason = map.get('Reason')
        self.message = map.get('Message')
        self.signal = map.get('Signal')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        self.validate_required(self.path, 'path')
        self.validate_required(self.port, 'port')
        self.validate_required(self.scheme, 'scheme')

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket(TeaModel):
    def __init__(self, host=None, port=None):
        self.host = host
        self.port = port

    def validate(self):
        self.validate_required(self.host, 'host')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Host'] = self.host
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.host = map.get('Host')
        self.port = map.get('Port')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe(TeaModel):
    def __init__(self, initial_delay_seconds=None, period_seconds=None, timeout_seconds=None, success_threshold=None, failure_threshold=None, http_get=None, tcp_socket=None, execs=None):
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.timeout_seconds = timeout_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.http_get = http_get
        self.tcp_socket = tcp_socket
        self.execs = []

    def validate(self):
        self.validate_required(self.initial_delay_seconds, 'initial_delay_seconds')
        self.validate_required(self.period_seconds, 'period_seconds')
        self.validate_required(self.timeout_seconds, 'timeout_seconds')
        self.validate_required(self.success_threshold, 'success_threshold')
        self.validate_required(self.failure_threshold, 'failure_threshold')
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.execs, 'execs')

    def to_map(self):
        result = {}
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['TimeoutSeconds'] = self.timeout_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        result['Execs'] = []
        if self.execs is not None:
            for k in self.execs:
                result['Execs'].append(k)
        else:
            result['Execs'] = None
        return result

    def from_map(self, map={}):
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.timeout_seconds = map.get('TimeoutSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        if map.get('HttpGet') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        if map.get('TcpSocket') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        self.execs = []
        if map.get('Execs') is not None:
            for k in map.get('Execs'):
                self.execs.append(k)
        else:
            self.execs = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet(TeaModel):
    def __init__(self, path=None, port=None, scheme=None):
        self.path = path
        self.port = port
        self.scheme = scheme

    def validate(self):
        self.validate_required(self.path, 'path')
        self.validate_required(self.port, 'port')
        self.validate_required(self.scheme, 'scheme')

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['Port'] = self.port
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.port = map.get('Port')
        self.scheme = map.get('Scheme')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket(TeaModel):
    def __init__(self, host=None, port=None):
        self.host = host
        self.port = port

    def validate(self):
        self.validate_required(self.host, 'host')
        self.validate_required(self.port, 'port')

    def to_map(self):
        result = {}
        result['Host'] = self.host
        result['Port'] = self.port
        return result

    def from_map(self, map={}):
        self.host = map.get('Host')
        self.port = map.get('Port')
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe(TeaModel):
    def __init__(self, initial_delay_seconds=None, period_seconds=None, timeout_seconds=None, success_threshold=None, failure_threshold=None, http_get=None, tcp_socket=None, execs=None):
        self.initial_delay_seconds = initial_delay_seconds
        self.period_seconds = period_seconds
        self.timeout_seconds = timeout_seconds
        self.success_threshold = success_threshold
        self.failure_threshold = failure_threshold
        self.http_get = http_get
        self.tcp_socket = tcp_socket
        self.execs = []

    def validate(self):
        self.validate_required(self.initial_delay_seconds, 'initial_delay_seconds')
        self.validate_required(self.period_seconds, 'period_seconds')
        self.validate_required(self.timeout_seconds, 'timeout_seconds')
        self.validate_required(self.success_threshold, 'success_threshold')
        self.validate_required(self.failure_threshold, 'failure_threshold')
        self.validate_required(self.http_get, 'http_get')
        if self.http_get:
            self.http_get.validate()
        self.validate_required(self.tcp_socket, 'tcp_socket')
        if self.tcp_socket:
            self.tcp_socket.validate()
        self.validate_required(self.execs, 'execs')

    def to_map(self):
        result = {}
        result['InitialDelaySeconds'] = self.initial_delay_seconds
        result['PeriodSeconds'] = self.period_seconds
        result['TimeoutSeconds'] = self.timeout_seconds
        result['SuccessThreshold'] = self.success_threshold
        result['FailureThreshold'] = self.failure_threshold
        if self.http_get is not None:
            result['HttpGet'] = self.http_get.to_map()
        else:
            result['HttpGet'] = None
        if self.tcp_socket is not None:
            result['TcpSocket'] = self.tcp_socket.to_map()
        else:
            result['TcpSocket'] = None
        result['Execs'] = []
        if self.execs is not None:
            for k in self.execs:
                result['Execs'].append(k)
        else:
            result['Execs'] = None
        return result

    def from_map(self, map={}):
        self.initial_delay_seconds = map.get('InitialDelaySeconds')
        self.period_seconds = map.get('PeriodSeconds')
        self.timeout_seconds = map.get('TimeoutSeconds')
        self.success_threshold = map.get('SuccessThreshold')
        self.failure_threshold = map.get('FailureThreshold')
        if map.get('HttpGet') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet()
            self.http_get = temp_model.from_map(map['HttpGet'])
        else:
            self.http_get = None
        if map.get('TcpSocket') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket()
            self.tcp_socket = temp_model.from_map(map['TcpSocket'])
        else:
            self.tcp_socket = None
        self.execs = []
        if map.get('Execs') is not None:
            for k in map.get('Execs'):
                self.execs.append(k)
        else:
            self.execs = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability(TeaModel):
    def __init__(self, adds=None):
        self.adds = []

    def validate(self):
        self.validate_required(self.adds, 'adds')

    def to_map(self):
        result = {}
        result['Adds'] = []
        if self.adds is not None:
            for k in self.adds:
                result['Adds'].append(k)
        else:
            result['Adds'] = None
        return result

    def from_map(self, map={}):
        self.adds = []
        if map.get('Adds') is not None:
            for k in map.get('Adds'):
                self.adds.append(k)
        else:
            self.adds = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext(TeaModel):
    def __init__(self, read_only_root_filesystem=None, run_as_user=None, capability=None):
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user
        self.capability = capability

    def validate(self):
        self.validate_required(self.read_only_root_filesystem, 'read_only_root_filesystem')
        self.validate_required(self.run_as_user, 'run_as_user')
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        return result

    def from_map(self, map={}):
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        if map.get('Capability') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        return self


class DescribeContainerGroupsResponseContainerGroupsContainers(TeaModel):
    def __init__(self, name=None, image=None, memory=None, cpu=None, restart_count=None, working_dir=None, image_pull_policy=None, ready=None, gpu=None, stdin=None, stdin_once=None, tty=None, volume_mounts=None, ports=None, environment_vars=None, previous_state=None, current_state=None, readiness_probe=None, liveness_probe=None, security_context=None, commands=None, args=None):
        self.name = name
        self.image = image
        self.memory = memory
        self.cpu = cpu
        self.restart_count = restart_count
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.ready = ready
        self.gpu = gpu
        self.stdin = stdin
        self.stdin_once = stdin_once
        self.tty = tty
        self.volume_mounts = []
        self.ports = []
        self.environment_vars = []
        self.previous_state = previous_state
        self.current_state = current_state
        self.readiness_probe = readiness_probe
        self.liveness_probe = liveness_probe
        self.security_context = security_context
        self.commands = []
        self.args = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.image, 'image')
        self.validate_required(self.memory, 'memory')
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.restart_count, 'restart_count')
        self.validate_required(self.working_dir, 'working_dir')
        self.validate_required(self.image_pull_policy, 'image_pull_policy')
        self.validate_required(self.ready, 'ready')
        self.validate_required(self.gpu, 'gpu')
        self.validate_required(self.stdin, 'stdin')
        self.validate_required(self.stdin_once, 'stdin_once')
        self.validate_required(self.tty, 'tty')
        self.validate_required(self.volume_mounts, 'volume_mounts')
        if self.volume_mounts:
            for k in self.volume_mounts:
                if k :
                    k.validate()
        self.validate_required(self.ports, 'ports')
        if self.ports:
            for k in self.ports:
                if k :
                    k.validate()
        self.validate_required(self.environment_vars, 'environment_vars')
        if self.environment_vars:
            for k in self.environment_vars:
                if k :
                    k.validate()
        self.validate_required(self.previous_state, 'previous_state')
        if self.previous_state:
            self.previous_state.validate()
        self.validate_required(self.current_state, 'current_state')
        if self.current_state:
            self.current_state.validate()
        self.validate_required(self.readiness_probe, 'readiness_probe')
        if self.readiness_probe:
            self.readiness_probe.validate()
        self.validate_required(self.liveness_probe, 'liveness_probe')
        if self.liveness_probe:
            self.liveness_probe.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()
        self.validate_required(self.commands, 'commands')
        self.validate_required(self.args, 'args')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['Memory'] = self.memory
        result['Cpu'] = self.cpu
        result['RestartCount'] = self.restart_count
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Ready'] = self.ready
        result['Gpu'] = self.gpu
        result['Stdin'] = self.stdin
        result['StdinOnce'] = self.stdin_once
        result['Tty'] = self.tty
        result['VolumeMounts'] = []
        if self.volume_mounts is not None:
            for k in self.volume_mounts:
                result['VolumeMounts'].append(k.to_map() if k else None)
        else:
            result['VolumeMounts'] = None
        result['Ports'] = []
        if self.ports is not None:
            for k in self.ports:
                result['Ports'].append(k.to_map() if k else None)
        else:
            result['Ports'] = None
        result['EnvironmentVars'] = []
        if self.environment_vars is not None:
            for k in self.environment_vars:
                result['EnvironmentVars'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVars'] = None
        if self.previous_state is not None:
            result['PreviousState'] = self.previous_state.to_map()
        else:
            result['PreviousState'] = None
        if self.current_state is not None:
            result['CurrentState'] = self.current_state.to_map()
        else:
            result['CurrentState'] = None
        if self.readiness_probe is not None:
            result['ReadinessProbe'] = self.readiness_probe.to_map()
        else:
            result['ReadinessProbe'] = None
        if self.liveness_probe is not None:
            result['LivenessProbe'] = self.liveness_probe.to_map()
        else:
            result['LivenessProbe'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Commands'] = []
        if self.commands is not None:
            for k in self.commands:
                result['Commands'].append(k)
        else:
            result['Commands'] = None
        result['Args'] = []
        if self.args is not None:
            for k in self.args:
                result['Args'].append(k)
        else:
            result['Args'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.memory = map.get('Memory')
        self.cpu = map.get('Cpu')
        self.restart_count = map.get('RestartCount')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.ready = map.get('Ready')
        self.gpu = map.get('Gpu')
        self.stdin = map.get('Stdin')
        self.stdin_once = map.get('StdinOnce')
        self.tty = map.get('Tty')
        self.volume_mounts = []
        if map.get('VolumeMounts') is not None:
            for k in map.get('VolumeMounts'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts()
                temp_model = temp_model.from_map(k)
                self.volume_mounts.append(temp_model)
        else:
            self.volume_mounts = None
        self.ports = []
        if map.get('Ports') is not None:
            for k in map.get('Ports'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsContainersPorts()
                temp_model = temp_model.from_map(k)
                self.ports.append(temp_model)
        else:
            self.ports = None
        self.environment_vars = []
        if map.get('EnvironmentVars') is not None:
            for k in map.get('EnvironmentVars'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars()
                temp_model = temp_model.from_map(k)
                self.environment_vars.append(temp_model)
        else:
            self.environment_vars = None
        if map.get('PreviousState') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersPreviousState()
            self.previous_state = temp_model.from_map(map['PreviousState'])
        else:
            self.previous_state = None
        if map.get('CurrentState') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersCurrentState()
            self.current_state = temp_model.from_map(map['CurrentState'])
        else:
            self.current_state = None
        if map.get('ReadinessProbe') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe()
            self.readiness_probe = temp_model.from_map(map['ReadinessProbe'])
        else:
            self.readiness_probe = None
        if map.get('LivenessProbe') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe()
            self.liveness_probe = temp_model.from_map(map['LivenessProbe'])
        else:
            self.liveness_probe = None
        if map.get('SecurityContext') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.commands = []
        if map.get('Commands') is not None:
            for k in map.get('Commands'):
                self.commands.append(k)
        else:
            self.commands = None
        self.args = []
        if map.get('Args') is not None:
            for k in map.get('Args'):
                self.args.append(k)
        else:
            self.args = None
        return self


class DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths(TeaModel):
    def __init__(self, content=None, path=None):
        self.content = content
        self.path = path

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.path, 'path')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Path'] = self.path
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.path = map.get('Path')
        return self


class DescribeContainerGroupsResponseContainerGroupsVolumes(TeaModel):
    def __init__(self, type=None, name=None, nfsvolume_path=None, nfsvolume_server=None, nfsvolume_read_only=None, disk_volume_disk_id=None, disk_volume_fs_type=None, flex_volume_driver=None, flex_volume_fs_type=None, flex_volume_options=None, config_file_volume_config_file_to_paths=None):
        self.type = type
        self.name = name
        self.nfsvolume_path = nfsvolume_path
        self.nfsvolume_server = nfsvolume_server
        self.nfsvolume_read_only = nfsvolume_read_only
        self.disk_volume_disk_id = disk_volume_disk_id
        self.disk_volume_fs_type = disk_volume_fs_type
        self.flex_volume_driver = flex_volume_driver
        self.flex_volume_fs_type = flex_volume_fs_type
        self.flex_volume_options = flex_volume_options
        self.config_file_volume_config_file_to_paths = []

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.nfsvolume_path, 'nfsvolume_path')
        self.validate_required(self.nfsvolume_server, 'nfsvolume_server')
        self.validate_required(self.nfsvolume_read_only, 'nfsvolume_read_only')
        self.validate_required(self.disk_volume_disk_id, 'disk_volume_disk_id')
        self.validate_required(self.disk_volume_fs_type, 'disk_volume_fs_type')
        self.validate_required(self.flex_volume_driver, 'flex_volume_driver')
        self.validate_required(self.flex_volume_fs_type, 'flex_volume_fs_type')
        self.validate_required(self.flex_volume_options, 'flex_volume_options')
        self.validate_required(self.config_file_volume_config_file_to_paths, 'config_file_volume_config_file_to_paths')
        if self.config_file_volume_config_file_to_paths:
            for k in self.config_file_volume_config_file_to_paths:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Name'] = self.name
        result['NFSVolumePath'] = self.nfsvolume_path
        result['NFSVolumeServer'] = self.nfsvolume_server
        result['NFSVolumeReadOnly'] = self.nfsvolume_read_only
        result['DiskVolumeDiskId'] = self.disk_volume_disk_id
        result['DiskVolumeFsType'] = self.disk_volume_fs_type
        result['FlexVolumeDriver'] = self.flex_volume_driver
        result['FlexVolumeFsType'] = self.flex_volume_fs_type
        result['FlexVolumeOptions'] = self.flex_volume_options
        result['ConfigFileVolumeConfigFileToPaths'] = []
        if self.config_file_volume_config_file_to_paths is not None:
            for k in self.config_file_volume_config_file_to_paths:
                result['ConfigFileVolumeConfigFileToPaths'].append(k.to_map() if k else None)
        else:
            result['ConfigFileVolumeConfigFileToPaths'] = None
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.nfsvolume_path = map.get('NFSVolumePath')
        self.nfsvolume_server = map.get('NFSVolumeServer')
        self.nfsvolume_read_only = map.get('NFSVolumeReadOnly')
        self.disk_volume_disk_id = map.get('DiskVolumeDiskId')
        self.disk_volume_fs_type = map.get('DiskVolumeFsType')
        self.flex_volume_driver = map.get('FlexVolumeDriver')
        self.flex_volume_fs_type = map.get('FlexVolumeFsType')
        self.flex_volume_options = map.get('FlexVolumeOptions')
        self.config_file_volume_config_file_to_paths = []
        if map.get('ConfigFileVolumeConfigFileToPaths') is not None:
            for k in map.get('ConfigFileVolumeConfigFileToPaths'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths()
                temp_model = temp_model.from_map(k)
                self.config_file_volume_config_file_to_paths.append(temp_model)
        else:
            self.config_file_volume_config_file_to_paths = None
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts(TeaModel):
    def __init__(self, name=None, mount_path=None, read_only=None):
        self.name = name
        self.mount_path = mount_path
        self.read_only = read_only

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.mount_path, 'mount_path')
        self.validate_required(self.read_only, 'read_only')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['MountPath'] = self.mount_path
        result['ReadOnly'] = self.read_only
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.mount_path = map.get('MountPath')
        self.read_only = map.get('ReadOnly')
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersPorts(TeaModel):
    def __init__(self, port=None, protocol=None):
        self.port = port
        self.protocol = protocol

    def validate(self):
        self.validate_required(self.port, 'port')
        self.validate_required(self.protocol, 'protocol')

    def to_map(self):
        result = {}
        result['Port'] = self.port
        result['Protocol'] = self.protocol
        return result

    def from_map(self, map={}):
        self.port = map.get('Port')
        self.protocol = map.get('Protocol')
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef(TeaModel):
    def __init__(self, field_path=None):
        self.field_path = field_path

    def validate(self):
        self.validate_required(self.field_path, 'field_path')

    def to_map(self):
        result = {}
        result['FieldPath'] = self.field_path
        return result

    def from_map(self, map={}):
        self.field_path = map.get('FieldPath')
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom(TeaModel):
    def __init__(self, field_ref=None):
        self.field_ref = field_ref

    def validate(self):
        self.validate_required(self.field_ref, 'field_ref')
        if self.field_ref:
            self.field_ref.validate()

    def to_map(self):
        result = {}
        if self.field_ref is not None:
            result['FieldRef'] = self.field_ref.to_map()
        else:
            result['FieldRef'] = None
        return result

    def from_map(self, map={}):
        if map.get('FieldRef') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef()
            self.field_ref = temp_model.from_map(map['FieldRef'])
        else:
            self.field_ref = None
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars(TeaModel):
    def __init__(self, key=None, value=None, value_from=None):
        self.key = key
        self.value = value
        self.value_from = value_from

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')
        self.validate_required(self.value_from, 'value_from')
        if self.value_from:
            self.value_from.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        if self.value_from is not None:
            result['ValueFrom'] = self.value_from.to_map()
        else:
            result['ValueFrom'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        if map.get('ValueFrom') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom()
            self.value_from = temp_model.from_map(map['ValueFrom'])
        else:
            self.value_from = None
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState(TeaModel):
    def __init__(self, state=None, detail_status=None, exit_code=None, start_time=None, finish_time=None, reason=None, message=None, signal=None):
        self.state = state
        self.detail_status = detail_status
        self.exit_code = exit_code
        self.start_time = start_time
        self.finish_time = finish_time
        self.reason = reason
        self.message = message
        self.signal = signal

    def validate(self):
        self.validate_required(self.state, 'state')
        self.validate_required(self.detail_status, 'detail_status')
        self.validate_required(self.exit_code, 'exit_code')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.finish_time, 'finish_time')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.message, 'message')
        self.validate_required(self.signal, 'signal')

    def to_map(self):
        result = {}
        result['State'] = self.state
        result['DetailStatus'] = self.detail_status
        result['ExitCode'] = self.exit_code
        result['StartTime'] = self.start_time
        result['FinishTime'] = self.finish_time
        result['Reason'] = self.reason
        result['Message'] = self.message
        result['Signal'] = self.signal
        return result

    def from_map(self, map={}):
        self.state = map.get('State')
        self.detail_status = map.get('DetailStatus')
        self.exit_code = map.get('ExitCode')
        self.start_time = map.get('StartTime')
        self.finish_time = map.get('FinishTime')
        self.reason = map.get('Reason')
        self.message = map.get('Message')
        self.signal = map.get('Signal')
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState(TeaModel):
    def __init__(self, state=None, detail_status=None, exit_code=None, start_time=None, finish_time=None, reason=None, message=None, signal=None):
        self.state = state
        self.detail_status = detail_status
        self.exit_code = exit_code
        self.start_time = start_time
        self.finish_time = finish_time
        self.reason = reason
        self.message = message
        self.signal = signal

    def validate(self):
        self.validate_required(self.state, 'state')
        self.validate_required(self.detail_status, 'detail_status')
        self.validate_required(self.exit_code, 'exit_code')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.finish_time, 'finish_time')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.message, 'message')
        self.validate_required(self.signal, 'signal')

    def to_map(self):
        result = {}
        result['State'] = self.state
        result['DetailStatus'] = self.detail_status
        result['ExitCode'] = self.exit_code
        result['StartTime'] = self.start_time
        result['FinishTime'] = self.finish_time
        result['Reason'] = self.reason
        result['Message'] = self.message
        result['Signal'] = self.signal
        return result

    def from_map(self, map={}):
        self.state = map.get('State')
        self.detail_status = map.get('DetailStatus')
        self.exit_code = map.get('ExitCode')
        self.start_time = map.get('StartTime')
        self.finish_time = map.get('FinishTime')
        self.reason = map.get('Reason')
        self.message = map.get('Message')
        self.signal = map.get('Signal')
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability(TeaModel):
    def __init__(self, adds=None):
        self.adds = []

    def validate(self):
        self.validate_required(self.adds, 'adds')

    def to_map(self):
        result = {}
        result['Adds'] = []
        if self.adds is not None:
            for k in self.adds:
                result['Adds'].append(k)
        else:
            result['Adds'] = None
        return result

    def from_map(self, map={}):
        self.adds = []
        if map.get('Adds') is not None:
            for k in map.get('Adds'):
                self.adds.append(k)
        else:
            self.adds = None
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext(TeaModel):
    def __init__(self, read_only_root_filesystem=None, run_as_user=None, capability=None):
        self.read_only_root_filesystem = read_only_root_filesystem
        self.run_as_user = run_as_user
        self.capability = capability

    def validate(self):
        self.validate_required(self.read_only_root_filesystem, 'read_only_root_filesystem')
        self.validate_required(self.run_as_user, 'run_as_user')
        self.validate_required(self.capability, 'capability')
        if self.capability:
            self.capability.validate()

    def to_map(self):
        result = {}
        result['ReadOnlyRootFilesystem'] = self.read_only_root_filesystem
        result['RunAsUser'] = self.run_as_user
        if self.capability is not None:
            result['Capability'] = self.capability.to_map()
        else:
            result['Capability'] = None
        return result

    def from_map(self, map={}):
        self.read_only_root_filesystem = map.get('ReadOnlyRootFilesystem')
        self.run_as_user = map.get('RunAsUser')
        if map.get('Capability') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability()
            self.capability = temp_model.from_map(map['Capability'])
        else:
            self.capability = None
        return self


class DescribeContainerGroupsResponseContainerGroupsInitContainers(TeaModel):
    def __init__(self, name=None, image=None, cpu=None, memory=None, restart_count=None, working_dir=None, image_pull_policy=None, ready=None, gpu=None, volume_mounts=None, ports=None, environment_vars=None, previous_state=None, current_state=None, security_context=None, command=None, args=None):
        self.name = name
        self.image = image
        self.cpu = cpu
        self.memory = memory
        self.restart_count = restart_count
        self.working_dir = working_dir
        self.image_pull_policy = image_pull_policy
        self.ready = ready
        self.gpu = gpu
        self.volume_mounts = []
        self.ports = []
        self.environment_vars = []
        self.previous_state = previous_state
        self.current_state = current_state
        self.security_context = security_context
        self.command = []
        self.args = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.image, 'image')
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.memory, 'memory')
        self.validate_required(self.restart_count, 'restart_count')
        self.validate_required(self.working_dir, 'working_dir')
        self.validate_required(self.image_pull_policy, 'image_pull_policy')
        self.validate_required(self.ready, 'ready')
        self.validate_required(self.gpu, 'gpu')
        self.validate_required(self.volume_mounts, 'volume_mounts')
        if self.volume_mounts:
            for k in self.volume_mounts:
                if k :
                    k.validate()
        self.validate_required(self.ports, 'ports')
        if self.ports:
            for k in self.ports:
                if k :
                    k.validate()
        self.validate_required(self.environment_vars, 'environment_vars')
        if self.environment_vars:
            for k in self.environment_vars:
                if k :
                    k.validate()
        self.validate_required(self.previous_state, 'previous_state')
        if self.previous_state:
            self.previous_state.validate()
        self.validate_required(self.current_state, 'current_state')
        if self.current_state:
            self.current_state.validate()
        self.validate_required(self.security_context, 'security_context')
        if self.security_context:
            self.security_context.validate()
        self.validate_required(self.command, 'command')
        self.validate_required(self.args, 'args')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Image'] = self.image
        result['Cpu'] = self.cpu
        result['Memory'] = self.memory
        result['RestartCount'] = self.restart_count
        result['WorkingDir'] = self.working_dir
        result['ImagePullPolicy'] = self.image_pull_policy
        result['Ready'] = self.ready
        result['Gpu'] = self.gpu
        result['VolumeMounts'] = []
        if self.volume_mounts is not None:
            for k in self.volume_mounts:
                result['VolumeMounts'].append(k.to_map() if k else None)
        else:
            result['VolumeMounts'] = None
        result['Ports'] = []
        if self.ports is not None:
            for k in self.ports:
                result['Ports'].append(k.to_map() if k else None)
        else:
            result['Ports'] = None
        result['EnvironmentVars'] = []
        if self.environment_vars is not None:
            for k in self.environment_vars:
                result['EnvironmentVars'].append(k.to_map() if k else None)
        else:
            result['EnvironmentVars'] = None
        if self.previous_state is not None:
            result['PreviousState'] = self.previous_state.to_map()
        else:
            result['PreviousState'] = None
        if self.current_state is not None:
            result['CurrentState'] = self.current_state.to_map()
        else:
            result['CurrentState'] = None
        if self.security_context is not None:
            result['SecurityContext'] = self.security_context.to_map()
        else:
            result['SecurityContext'] = None
        result['Command'] = []
        if self.command is not None:
            for k in self.command:
                result['Command'].append(k)
        else:
            result['Command'] = None
        result['Args'] = []
        if self.args is not None:
            for k in self.args:
                result['Args'].append(k)
        else:
            result['Args'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.image = map.get('Image')
        self.cpu = map.get('Cpu')
        self.memory = map.get('Memory')
        self.restart_count = map.get('RestartCount')
        self.working_dir = map.get('WorkingDir')
        self.image_pull_policy = map.get('ImagePullPolicy')
        self.ready = map.get('Ready')
        self.gpu = map.get('Gpu')
        self.volume_mounts = []
        if map.get('VolumeMounts') is not None:
            for k in map.get('VolumeMounts'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts()
                temp_model = temp_model.from_map(k)
                self.volume_mounts.append(temp_model)
        else:
            self.volume_mounts = None
        self.ports = []
        if map.get('Ports') is not None:
            for k in map.get('Ports'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersPorts()
                temp_model = temp_model.from_map(k)
                self.ports.append(temp_model)
        else:
            self.ports = None
        self.environment_vars = []
        if map.get('EnvironmentVars') is not None:
            for k in map.get('EnvironmentVars'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars()
                temp_model = temp_model.from_map(k)
                self.environment_vars.append(temp_model)
        else:
            self.environment_vars = None
        if map.get('PreviousState') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState()
            self.previous_state = temp_model.from_map(map['PreviousState'])
        else:
            self.previous_state = None
        if map.get('CurrentState') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState()
            self.current_state = temp_model.from_map(map['CurrentState'])
        else:
            self.current_state = None
        if map.get('SecurityContext') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext()
            self.security_context = temp_model.from_map(map['SecurityContext'])
        else:
            self.security_context = None
        self.command = []
        if map.get('Command') is not None:
            for k in map.get('Command'):
                self.command.append(k)
        else:
            self.command = None
        self.args = []
        if map.get('Args') is not None:
            for k in map.get('Args'):
                self.args.append(k)
        else:
            self.args = None
        return self


class DescribeContainerGroupsResponseContainerGroupsHostAliases(TeaModel):
    def __init__(self, ip=None, hostnames=None):
        self.ip = ip
        self.hostnames = []

    def validate(self):
        self.validate_required(self.ip, 'ip')
        self.validate_required(self.hostnames, 'hostnames')

    def to_map(self):
        result = {}
        result['Ip'] = self.ip
        result['Hostnames'] = []
        if self.hostnames is not None:
            for k in self.hostnames:
                result['Hostnames'].append(k)
        else:
            result['Hostnames'] = None
        return result

    def from_map(self, map={}):
        self.ip = map.get('Ip')
        self.hostnames = []
        if map.get('Hostnames') is not None:
            for k in map.get('Hostnames'):
                self.hostnames.append(k)
        else:
            self.hostnames = None
        return self


class DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class DescribeContainerGroupsResponseContainerGroupsDnsConfig(TeaModel):
    def __init__(self, options=None, name_servers=None, searches=None):
        self.options = []
        self.name_servers = []
        self.searches = []

    def validate(self):
        self.validate_required(self.options, 'options')
        if self.options:
            for k in self.options:
                if k :
                    k.validate()
        self.validate_required(self.name_servers, 'name_servers')
        self.validate_required(self.searches, 'searches')

    def to_map(self):
        result = {}
        result['Options'] = []
        if self.options is not None:
            for k in self.options:
                result['Options'].append(k.to_map() if k else None)
        else:
            result['Options'] = None
        result['NameServers'] = []
        if self.name_servers is not None:
            for k in self.name_servers:
                result['NameServers'].append(k)
        else:
            result['NameServers'] = None
        result['Searches'] = []
        if self.searches is not None:
            for k in self.searches:
                result['Searches'].append(k)
        else:
            result['Searches'] = None
        return result

    def from_map(self, map={}):
        self.options = []
        if map.get('Options') is not None:
            for k in map.get('Options'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions()
                temp_model = temp_model.from_map(k)
                self.options.append(temp_model)
        else:
            self.options = None
        self.name_servers = []
        if map.get('NameServers') is not None:
            for k in map.get('NameServers'):
                self.name_servers.append(k)
        else:
            self.name_servers = None
        self.searches = []
        if map.get('Searches') is not None:
            for k in map.get('Searches'):
                self.searches.append(k)
        else:
            self.searches = None
        return self


class DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls(TeaModel):
    def __init__(self, name=None, value=None):
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class DescribeContainerGroupsResponseContainerGroupsEciSecurityContext(TeaModel):
    def __init__(self, sysctls=None):
        self.sysctls = []

    def validate(self):
        self.validate_required(self.sysctls, 'sysctls')
        if self.sysctls:
            for k in self.sysctls:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sysctls'] = []
        if self.sysctls is not None:
            for k in self.sysctls:
                result['Sysctls'].append(k.to_map() if k else None)
        else:
            result['Sysctls'] = None
        return result

    def from_map(self, map={}):
        self.sysctls = []
        if map.get('Sysctls') is not None:
            for k in map.get('Sysctls'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls()
                temp_model = temp_model.from_map(k)
                self.sysctls.append(temp_model)
        else:
            self.sysctls = None
        return self


class DescribeContainerGroupsResponseContainerGroups(TeaModel):
    def __init__(self, container_group_id=None, container_group_name=None, region_id=None, zone_id=None, memory=None, cpu=None, v_switch_id=None, security_group_id=None, restart_policy=None, intranet_ip=None, status=None, internet_ip=None, creation_time=None, succeeded_time=None, eni_instance_id=None, instance_type=None, expired_time=None, failed_time=None, ram_role_name=None, ipv_6address=None, vpc_id=None, discount=None, resource_group_id=None, tenant_eni_instance_id=None, tenant_vswitch_id=None, tenant_security_group_id=None, spot_strategy=None, tags=None, events=None, containers=None, volumes=None, init_containers=None, host_aliases=None, dns_config=None, eci_security_context=None):
        self.container_group_id = container_group_id
        self.container_group_name = container_group_name
        self.region_id = region_id
        self.zone_id = zone_id
        self.memory = memory
        self.cpu = cpu
        self.v_switch_id = v_switch_id
        self.security_group_id = security_group_id
        self.restart_policy = restart_policy
        self.intranet_ip = intranet_ip
        self.status = status
        self.internet_ip = internet_ip
        self.creation_time = creation_time
        self.succeeded_time = succeeded_time
        self.eni_instance_id = eni_instance_id
        self.instance_type = instance_type
        self.expired_time = expired_time
        self.failed_time = failed_time
        self.ram_role_name = ram_role_name
        self.ipv_6address = ipv_6address
        self.vpc_id = vpc_id
        self.discount = discount
        self.resource_group_id = resource_group_id
        self.tenant_eni_instance_id = tenant_eni_instance_id
        self.tenant_vswitch_id = tenant_vswitch_id
        self.tenant_security_group_id = tenant_security_group_id
        self.spot_strategy = spot_strategy
        self.tags = []
        self.events = []
        self.containers = []
        self.volumes = []
        self.init_containers = []
        self.host_aliases = []
        self.dns_config = dns_config
        self.eci_security_context = eci_security_context

    def validate(self):
        self.validate_required(self.container_group_id, 'container_group_id')
        self.validate_required(self.container_group_name, 'container_group_name')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.memory, 'memory')
        self.validate_required(self.cpu, 'cpu')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.restart_policy, 'restart_policy')
        self.validate_required(self.intranet_ip, 'intranet_ip')
        self.validate_required(self.status, 'status')
        self.validate_required(self.internet_ip, 'internet_ip')
        self.validate_required(self.creation_time, 'creation_time')
        self.validate_required(self.succeeded_time, 'succeeded_time')
        self.validate_required(self.eni_instance_id, 'eni_instance_id')
        self.validate_required(self.instance_type, 'instance_type')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.failed_time, 'failed_time')
        self.validate_required(self.ram_role_name, 'ram_role_name')
        self.validate_required(self.ipv_6address, 'ipv_6address')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.discount, 'discount')
        self.validate_required(self.resource_group_id, 'resource_group_id')
        self.validate_required(self.tenant_eni_instance_id, 'tenant_eni_instance_id')
        self.validate_required(self.tenant_vswitch_id, 'tenant_vswitch_id')
        self.validate_required(self.tenant_security_group_id, 'tenant_security_group_id')
        self.validate_required(self.spot_strategy, 'spot_strategy')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()
        self.validate_required(self.events, 'events')
        if self.events:
            for k in self.events:
                if k :
                    k.validate()
        self.validate_required(self.containers, 'containers')
        if self.containers:
            for k in self.containers:
                if k :
                    k.validate()
        self.validate_required(self.volumes, 'volumes')
        if self.volumes:
            for k in self.volumes:
                if k :
                    k.validate()
        self.validate_required(self.init_containers, 'init_containers')
        if self.init_containers:
            for k in self.init_containers:
                if k :
                    k.validate()
        self.validate_required(self.host_aliases, 'host_aliases')
        if self.host_aliases:
            for k in self.host_aliases:
                if k :
                    k.validate()
        self.validate_required(self.dns_config, 'dns_config')
        if self.dns_config:
            self.dns_config.validate()
        self.validate_required(self.eci_security_context, 'eci_security_context')
        if self.eci_security_context:
            self.eci_security_context.validate()

    def to_map(self):
        result = {}
        result['ContainerGroupId'] = self.container_group_id
        result['ContainerGroupName'] = self.container_group_name
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['Memory'] = self.memory
        result['Cpu'] = self.cpu
        result['VSwitchId'] = self.v_switch_id
        result['SecurityGroupId'] = self.security_group_id
        result['RestartPolicy'] = self.restart_policy
        result['IntranetIp'] = self.intranet_ip
        result['Status'] = self.status
        result['InternetIp'] = self.internet_ip
        result['CreationTime'] = self.creation_time
        result['SucceededTime'] = self.succeeded_time
        result['EniInstanceId'] = self.eni_instance_id
        result['InstanceType'] = self.instance_type
        result['ExpiredTime'] = self.expired_time
        result['FailedTime'] = self.failed_time
        result['RamRoleName'] = self.ram_role_name
        result['Ipv6Address'] = self.ipv_6address
        result['VpcId'] = self.vpc_id
        result['Discount'] = self.discount
        result['ResourceGroupId'] = self.resource_group_id
        result['TenantEniInstanceId'] = self.tenant_eni_instance_id
        result['TenantVSwitchId'] = self.tenant_vswitch_id
        result['TenantSecurityGroupId'] = self.tenant_security_group_id
        result['SpotStrategy'] = self.spot_strategy
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        result['Events'] = []
        if self.events is not None:
            for k in self.events:
                result['Events'].append(k.to_map() if k else None)
        else:
            result['Events'] = None
        result['Containers'] = []
        if self.containers is not None:
            for k in self.containers:
                result['Containers'].append(k.to_map() if k else None)
        else:
            result['Containers'] = None
        result['Volumes'] = []
        if self.volumes is not None:
            for k in self.volumes:
                result['Volumes'].append(k.to_map() if k else None)
        else:
            result['Volumes'] = None
        result['InitContainers'] = []
        if self.init_containers is not None:
            for k in self.init_containers:
                result['InitContainers'].append(k.to_map() if k else None)
        else:
            result['InitContainers'] = None
        result['HostAliases'] = []
        if self.host_aliases is not None:
            for k in self.host_aliases:
                result['HostAliases'].append(k.to_map() if k else None)
        else:
            result['HostAliases'] = None
        if self.dns_config is not None:
            result['DnsConfig'] = self.dns_config.to_map()
        else:
            result['DnsConfig'] = None
        if self.eci_security_context is not None:
            result['EciSecurityContext'] = self.eci_security_context.to_map()
        else:
            result['EciSecurityContext'] = None
        return result

    def from_map(self, map={}):
        self.container_group_id = map.get('ContainerGroupId')
        self.container_group_name = map.get('ContainerGroupName')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.memory = map.get('Memory')
        self.cpu = map.get('Cpu')
        self.v_switch_id = map.get('VSwitchId')
        self.security_group_id = map.get('SecurityGroupId')
        self.restart_policy = map.get('RestartPolicy')
        self.intranet_ip = map.get('IntranetIp')
        self.status = map.get('Status')
        self.internet_ip = map.get('InternetIp')
        self.creation_time = map.get('CreationTime')
        self.succeeded_time = map.get('SucceededTime')
        self.eni_instance_id = map.get('EniInstanceId')
        self.instance_type = map.get('InstanceType')
        self.expired_time = map.get('ExpiredTime')
        self.failed_time = map.get('FailedTime')
        self.ram_role_name = map.get('RamRoleName')
        self.ipv_6address = map.get('Ipv6Address')
        self.vpc_id = map.get('VpcId')
        self.discount = map.get('Discount')
        self.resource_group_id = map.get('ResourceGroupId')
        self.tenant_eni_instance_id = map.get('TenantEniInstanceId')
        self.tenant_vswitch_id = map.get('TenantVSwitchId')
        self.tenant_security_group_id = map.get('TenantSecurityGroupId')
        self.spot_strategy = map.get('SpotStrategy')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        self.events = []
        if map.get('Events') is not None:
            for k in map.get('Events'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsEvents()
                temp_model = temp_model.from_map(k)
                self.events.append(temp_model)
        else:
            self.events = None
        self.containers = []
        if map.get('Containers') is not None:
            for k in map.get('Containers'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsContainers()
                temp_model = temp_model.from_map(k)
                self.containers.append(temp_model)
        else:
            self.containers = None
        self.volumes = []
        if map.get('Volumes') is not None:
            for k in map.get('Volumes'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsVolumes()
                temp_model = temp_model.from_map(k)
                self.volumes.append(temp_model)
        else:
            self.volumes = None
        self.init_containers = []
        if map.get('InitContainers') is not None:
            for k in map.get('InitContainers'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsInitContainers()
                temp_model = temp_model.from_map(k)
                self.init_containers.append(temp_model)
        else:
            self.init_containers = None
        self.host_aliases = []
        if map.get('HostAliases') is not None:
            for k in map.get('HostAliases'):
                temp_model = DescribeContainerGroupsResponseContainerGroupsHostAliases()
                temp_model = temp_model.from_map(k)
                self.host_aliases.append(temp_model)
        else:
            self.host_aliases = None
        if map.get('DnsConfig') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsDnsConfig()
            self.dns_config = temp_model.from_map(map['DnsConfig'])
        else:
            self.dns_config = None
        if map.get('EciSecurityContext') is not None:
            temp_model = DescribeContainerGroupsResponseContainerGroupsEciSecurityContext()
            self.eci_security_context = temp_model.from_map(map['EciSecurityContext'])
        else:
            self.eci_security_context = None
        return self


class DeleteContainerGroupRequest(TeaModel):
    def __init__(self, region_id=None, container_group_id=None, client_token=None):
        self.region_id = region_id
        self.container_group_id = container_group_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.container_group_id, 'container_group_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContainerGroupId'] = self.container_group_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.container_group_id = map.get('ContainerGroupId')
        self.client_token = map.get('ClientToken')
        return self


class DeleteContainerGroupResponse(TeaModel):
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

# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GetMultipleTraceRequest(TeaModel):
    def __init__(self, region_id=None, trace_ids=None):
        self.region_id = region_id
        self.trace_ids = []

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['TraceIDs'] = []
        if self.trace_ids is not None:
            for k in self.trace_ids:
                result['TraceIDs'].append(k)
        else:
            result['TraceIDs'] = None
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.trace_ids = []
        if map.get('TraceIDs') is not None:
            for k in map.get('TraceIDs'):
                self.trace_ids.append(k)
        else:
            self.trace_ids = None
        return self


class GetMultipleTraceResponse(TeaModel):
    def __init__(self, request_id=None, multi_call_chain_infos=None):
        self.request_id = request_id
        self.multi_call_chain_infos = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.multi_call_chain_infos, 'multi_call_chain_infos')
        if self.multi_call_chain_infos:
            for k in self.multi_call_chain_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MultiCallChainInfos'] = []
        if self.multi_call_chain_infos is not None:
            for k in self.multi_call_chain_infos:
                result['MultiCallChainInfos'].append(k.to_map() if k else None)
        else:
            result['MultiCallChainInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.multi_call_chain_infos = []
        if map.get('MultiCallChainInfos') is not None:
            for k in map.get('MultiCallChainInfos'):
                temp_model = GetMultipleTraceResponseMultiCallChainInfos()
                temp_model = temp_model.from_map(k)
                self.multi_call_chain_infos.append(temp_model)
        else:
            self.multi_call_chain_infos = None
        return self


class GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList(TeaModel):
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


class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList(TeaModel):
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


class GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList(TeaModel):
    def __init__(self, timestamp=None, tag_entry_list=None):
        self.timestamp = timestamp
        self.tag_entry_list = []

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.tag_entry_list, 'tag_entry_list')
        if self.tag_entry_list:
            for k in self.tag_entry_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['TagEntryList'] = []
        if self.tag_entry_list is not None:
            for k in self.tag_entry_list:
                result['TagEntryList'].append(k.to_map() if k else None)
        else:
            result['TagEntryList'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.tag_entry_list = []
        if map.get('TagEntryList') is not None:
            for k in map.get('TagEntryList'):
                temp_model = GetMultipleTraceResponseMultiCallChainInfosSpansLogEventListTagEntryList()
                temp_model = temp_model.from_map(k)
                self.tag_entry_list.append(temp_model)
        else:
            self.tag_entry_list = None
        return self


class GetMultipleTraceResponseMultiCallChainInfosSpans(TeaModel):
    def __init__(self, trace_id=None, operation_name=None, duration=None, service_name=None, service_ip=None, timestamp=None, rpc_id=None, result_code=None, have_stack=None, rpc_type=None, tag_entry_list=None, log_event_list=None):
        self.trace_id = trace_id
        self.operation_name = operation_name
        self.duration = duration
        self.service_name = service_name
        self.service_ip = service_ip
        self.timestamp = timestamp
        self.rpc_id = rpc_id
        self.result_code = result_code
        self.have_stack = have_stack
        self.rpc_type = rpc_type
        self.tag_entry_list = []
        self.log_event_list = []

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.operation_name, 'operation_name')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.service_ip, 'service_ip')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.rpc_id, 'rpc_id')
        self.validate_required(self.result_code, 'result_code')
        self.validate_required(self.have_stack, 'have_stack')
        self.validate_required(self.rpc_type, 'rpc_type')
        self.validate_required(self.tag_entry_list, 'tag_entry_list')
        if self.tag_entry_list:
            for k in self.tag_entry_list:
                if k :
                    k.validate()
        self.validate_required(self.log_event_list, 'log_event_list')
        if self.log_event_list:
            for k in self.log_event_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['OperationName'] = self.operation_name
        result['Duration'] = self.duration
        result['ServiceName'] = self.service_name
        result['ServiceIp'] = self.service_ip
        result['Timestamp'] = self.timestamp
        result['RpcId'] = self.rpc_id
        result['ResultCode'] = self.result_code
        result['HaveStack'] = self.have_stack
        result['RpcType'] = self.rpc_type
        result['TagEntryList'] = []
        if self.tag_entry_list is not None:
            for k in self.tag_entry_list:
                result['TagEntryList'].append(k.to_map() if k else None)
        else:
            result['TagEntryList'] = None
        result['LogEventList'] = []
        if self.log_event_list is not None:
            for k in self.log_event_list:
                result['LogEventList'].append(k.to_map() if k else None)
        else:
            result['LogEventList'] = None
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.operation_name = map.get('OperationName')
        self.duration = map.get('Duration')
        self.service_name = map.get('ServiceName')
        self.service_ip = map.get('ServiceIp')
        self.timestamp = map.get('Timestamp')
        self.rpc_id = map.get('RpcId')
        self.result_code = map.get('ResultCode')
        self.have_stack = map.get('HaveStack')
        self.rpc_type = map.get('RpcType')
        self.tag_entry_list = []
        if map.get('TagEntryList') is not None:
            for k in map.get('TagEntryList'):
                temp_model = GetMultipleTraceResponseMultiCallChainInfosSpansTagEntryList()
                temp_model = temp_model.from_map(k)
                self.tag_entry_list.append(temp_model)
        else:
            self.tag_entry_list = None
        self.log_event_list = []
        if map.get('LogEventList') is not None:
            for k in map.get('LogEventList'):
                temp_model = GetMultipleTraceResponseMultiCallChainInfosSpansLogEventList()
                temp_model = temp_model.from_map(k)
                self.log_event_list.append(temp_model)
        else:
            self.log_event_list = None
        return self


class GetMultipleTraceResponseMultiCallChainInfos(TeaModel):
    def __init__(self, trace_id=None, spans=None):
        self.trace_id = trace_id
        self.spans = []

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.spans, 'spans')
        if self.spans:
            for k in self.spans:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['Spans'] = []
        if self.spans is not None:
            for k in self.spans:
                result['Spans'].append(k.to_map() if k else None)
        else:
            result['Spans'] = None
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.spans = []
        if map.get('Spans') is not None:
            for k in map.get('Spans'):
                temp_model = GetMultipleTraceResponseMultiCallChainInfosSpans()
                temp_model = temp_model.from_map(k)
                self.spans.append(temp_model)
        else:
            self.spans = None
        return self


class SearchTracesByPageRequest(TeaModel):
    def __init__(self, start_time=None, end_time=None, region_id=None, service_name=None, operation_name=None, min_duration=None, service_ip=None, exclusion_filters=None, page_number=None, page_size=None):
        self.start_time = start_time
        self.end_time = end_time
        self.region_id = region_id
        self.service_name = service_name
        self.operation_name = operation_name
        self.min_duration = min_duration
        self.service_ip = service_ip
        self.exclusion_filters = []
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.region_id, 'region_id')
        if self.exclusion_filters:
            for k in self.exclusion_filters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['RegionId'] = self.region_id
        result['ServiceName'] = self.service_name
        result['OperationName'] = self.operation_name
        result['MinDuration'] = self.min_duration
        result['ServiceIp'] = self.service_ip
        result['ExclusionFilters'] = []
        if self.exclusion_filters is not None:
            for k in self.exclusion_filters:
                result['ExclusionFilters'].append(k.to_map() if k else None)
        else:
            result['ExclusionFilters'] = None
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region_id = map.get('RegionId')
        self.service_name = map.get('ServiceName')
        self.operation_name = map.get('OperationName')
        self.min_duration = map.get('MinDuration')
        self.service_ip = map.get('ServiceIp')
        self.exclusion_filters = []
        if map.get('ExclusionFilters') is not None:
            for k in map.get('ExclusionFilters'):
                temp_model = SearchTracesByPageRequestExclusionFilters()
                temp_model = temp_model.from_map(k)
                self.exclusion_filters.append(temp_model)
        else:
            self.exclusion_filters = None
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class SearchTracesByPageRequestExclusionFilters(TeaModel):
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


class SearchTracesByPageResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchTracesByPageResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchTracesByPageResponsePageBeanTraceInfos(TeaModel):
    def __init__(self, trace_id=None, operation_name=None, service_name=None, service_ip=None, duration=None, timestamp=None):
        self.trace_id = trace_id
        self.operation_name = operation_name
        self.service_name = service_name
        self.service_ip = service_ip
        self.duration = duration
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.operation_name, 'operation_name')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.service_ip, 'service_ip')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['OperationName'] = self.operation_name
        result['ServiceName'] = self.service_name
        result['ServiceIp'] = self.service_ip
        result['Duration'] = self.duration
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.operation_name = map.get('OperationName')
        self.service_name = map.get('ServiceName')
        self.service_ip = map.get('ServiceIp')
        self.duration = map.get('Duration')
        self.timestamp = map.get('Timestamp')
        return self


class SearchTracesByPageResponsePageBean(TeaModel):
    def __init__(self, total=None, page_number=None, page_size=None, trace_infos=None):
        self.total = total
        self.page_number = page_number
        self.page_size = page_size
        self.trace_infos = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.trace_infos, 'trace_infos')
        if self.trace_infos:
            for k in self.trace_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TraceInfos'] = []
        if self.trace_infos is not None:
            for k in self.trace_infos:
                result['TraceInfos'].append(k.to_map() if k else None)
        else:
            result['TraceInfos'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.trace_infos = []
        if map.get('TraceInfos') is not None:
            for k in map.get('TraceInfos'):
                temp_model = SearchTracesByPageResponsePageBeanTraceInfos()
                temp_model = temp_model.from_map(k)
                self.trace_infos.append(temp_model)
        else:
            self.trace_infos = None
        return self


class GetStackRequest(TeaModel):
    def __init__(self, trace_id=None, region_id=None, rpc_id=None):
        self.trace_id = trace_id
        self.region_id = region_id
        self.rpc_id = rpc_id

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['RegionId'] = self.region_id
        result['RpcID'] = self.rpc_id
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.region_id = map.get('RegionId')
        self.rpc_id = map.get('RpcID')
        return self


class GetStackResponse(TeaModel):
    def __init__(self, request_id=None, stack_info=None):
        self.request_id = request_id
        self.stack_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.stack_info, 'stack_info')
        if self.stack_info:
            for k in self.stack_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StackInfo'] = []
        if self.stack_info is not None:
            for k in self.stack_info:
                result['StackInfo'].append(k.to_map() if k else None)
        else:
            result['StackInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.stack_info = []
        if map.get('StackInfo') is not None:
            for k in map.get('StackInfo'):
                temp_model = GetStackResponseStackInfo()
                temp_model = temp_model.from_map(k)
                self.stack_info.append(temp_model)
        else:
            self.stack_info = None
        return self


class GetStackResponseStackInfoExtInfo(TeaModel):
    def __init__(self, type=None, info=None):
        self.type = type
        self.info = info

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.info, 'info')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Info'] = self.info
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.info = map.get('Info')
        return self


class GetStackResponseStackInfo(TeaModel):
    def __init__(self, start_time=None, duration=None, rpc_id=None, service_name=None, api=None, exception=None, line=None, ext_info=None):
        self.start_time = start_time
        self.duration = duration
        self.rpc_id = rpc_id
        self.service_name = service_name
        self.api = api
        self.exception = exception
        self.line = line
        self.ext_info = []

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.rpc_id, 'rpc_id')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.api, 'api')
        self.validate_required(self.exception, 'exception')
        self.validate_required(self.line, 'line')
        self.validate_required(self.ext_info, 'ext_info')
        if self.ext_info:
            for k in self.ext_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StartTime'] = self.start_time
        result['Duration'] = self.duration
        result['RpcId'] = self.rpc_id
        result['ServiceName'] = self.service_name
        result['Api'] = self.api
        result['Exception'] = self.exception
        result['Line'] = self.line
        result['ExtInfo'] = []
        if self.ext_info is not None:
            for k in self.ext_info:
                result['ExtInfo'].append(k.to_map() if k else None)
        else:
            result['ExtInfo'] = None
        return result

    def from_map(self, map={}):
        self.start_time = map.get('StartTime')
        self.duration = map.get('Duration')
        self.rpc_id = map.get('RpcId')
        self.service_name = map.get('ServiceName')
        self.api = map.get('Api')
        self.exception = map.get('Exception')
        self.line = map.get('Line')
        self.ext_info = []
        if map.get('ExtInfo') is not None:
            for k in map.get('ExtInfo'):
                temp_model = GetStackResponseStackInfoExtInfo()
                temp_model = temp_model.from_map(k)
                self.ext_info.append(temp_model)
        else:
            self.ext_info = None
        return self


class DescribeTraceLocationRequest(TeaModel):
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


class DescribeTraceLocationResponse(TeaModel):
    def __init__(self, request_id=None, region_configs=None):
        self.request_id = request_id
        self.region_configs = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.region_configs, 'region_configs')
        if self.region_configs:
            for k in self.region_configs:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RegionConfigs'] = []
        if self.region_configs is not None:
            for k in self.region_configs:
                result['RegionConfigs'].append(k.to_map() if k else None)
        else:
            result['RegionConfigs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.region_configs = []
        if map.get('RegionConfigs') is not None:
            for k in map.get('RegionConfigs'):
                temp_model = DescribeTraceLocationResponseRegionConfigs()
                temp_model = temp_model.from_map(k)
                self.region_configs.append(temp_model)
        else:
            self.region_configs = None
        return self


class DescribeTraceLocationResponseRegionConfigs(TeaModel):
    def __init__(self, region_no=None, url=None):
        self.region_no = region_no
        self.url = url

    def validate(self):
        self.validate_required(self.region_no, 'region_no')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['RegionNo'] = self.region_no
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.region_no = map.get('RegionNo')
        self.url = map.get('Url')
        return self


class DeleteTraceAppRequest(TeaModel):
    def __init__(self, app_id=None, region_id=None, type=None):
        self.app_id = app_id
        self.region_id = region_id
        self.type = type

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['RegionId'] = self.region_id
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.region_id = map.get('RegionId')
        self.type = map.get('Type')
        return self


class DeleteTraceAppResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class DescribeTraceLicenseKeyRequest(TeaModel):
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


class DescribeTraceLicenseKeyResponse(TeaModel):
    def __init__(self, request_id=None, license_key=None):
        self.request_id = request_id
        self.license_key = license_key

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.license_key, 'license_key')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['LicenseKey'] = self.license_key
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.license_key = map.get('LicenseKey')
        return self


class CheckServiceLinkedRoleForDeletingRequest(TeaModel):
    def __init__(self, role_arn=None, service_name=None, spiregion_id=None, deletion_task_id=None, region_id=None):
        self.role_arn = role_arn
        self.service_name = service_name
        self.spiregion_id = spiregion_id
        self.deletion_task_id = deletion_task_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.role_arn, 'role_arn')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.spiregion_id, 'spiregion_id')
        self.validate_required(self.deletion_task_id, 'deletion_task_id')

    def to_map(self):
        result = {}
        result['RoleArn'] = self.role_arn
        result['ServiceName'] = self.service_name
        result['SPIRegionId'] = self.spiregion_id
        result['DeletionTaskId'] = self.deletion_task_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.role_arn = map.get('RoleArn')
        self.service_name = map.get('ServiceName')
        self.spiregion_id = map.get('SPIRegionId')
        self.deletion_task_id = map.get('DeletionTaskId')
        self.region_id = map.get('RegionId')
        return self


class CheckServiceLinkedRoleForDeletingResponse(TeaModel):
    def __init__(self, request_id=None, deletable=None, role_usages=None):
        self.request_id = request_id
        self.deletable = deletable
        self.role_usages = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.deletable, 'deletable')
        self.validate_required(self.role_usages, 'role_usages')
        if self.role_usages:
            for k in self.role_usages:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Deletable'] = self.deletable
        result['RoleUsages'] = []
        if self.role_usages is not None:
            for k in self.role_usages:
                result['RoleUsages'].append(k.to_map() if k else None)
        else:
            result['RoleUsages'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.deletable = map.get('Deletable')
        self.role_usages = []
        if map.get('RoleUsages') is not None:
            for k in map.get('RoleUsages'):
                temp_model = CheckServiceLinkedRoleForDeletingResponseRoleUsages()
                temp_model = temp_model.from_map(k)
                self.role_usages.append(temp_model)
        else:
            self.role_usages = None
        return self


class CheckServiceLinkedRoleForDeletingResponseRoleUsages(TeaModel):
    def __init__(self, region=None, resources=None):
        self.region = region
        self.resources = []

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.resources, 'resources')

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['Resources'] = []
        if self.resources is not None:
            for k in self.resources:
                result['Resources'].append(k)
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.resources = []
        if map.get('Resources') is not None:
            for k in map.get('Resources'):
                self.resources.append(k)
        else:
            self.resources = None
        return self


class ListDashboardsRequest(TeaModel):
    def __init__(self, region_id=None, cluster_id=None):
        self.region_id = region_id
        self.cluster_id = cluster_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cluster_id, 'cluster_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ClusterId'] = self.cluster_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.cluster_id = map.get('ClusterId')
        return self


class ListDashboardsResponse(TeaModel):
    def __init__(self, request_id=None, dashboard_vos=None):
        self.request_id = request_id
        self.dashboard_vos = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.dashboard_vos, 'dashboard_vos')
        if self.dashboard_vos:
            for k in self.dashboard_vos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DashboardVos'] = []
        if self.dashboard_vos is not None:
            for k in self.dashboard_vos:
                result['DashboardVos'].append(k.to_map() if k else None)
        else:
            result['DashboardVos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.dashboard_vos = []
        if map.get('DashboardVos') is not None:
            for k in map.get('DashboardVos'):
                temp_model = ListDashboardsResponseDashboardVos()
                temp_model = temp_model.from_map(k)
                self.dashboard_vos.append(temp_model)
        else:
            self.dashboard_vos = None
        return self


class ListDashboardsResponseDashboardVos(TeaModel):
    def __init__(self, id=None, uid=None, title=None, time=None, url=None, type=None, exporter=None, is_arms_exporter=None, tags=None):
        self.id = id
        self.uid = uid
        self.title = title
        self.time = time
        self.url = url
        self.type = type
        self.exporter = exporter
        self.is_arms_exporter = is_arms_exporter
        self.tags = []

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.uid, 'uid')
        self.validate_required(self.title, 'title')
        self.validate_required(self.time, 'time')
        self.validate_required(self.url, 'url')
        self.validate_required(self.type, 'type')
        self.validate_required(self.exporter, 'exporter')
        self.validate_required(self.is_arms_exporter, 'is_arms_exporter')
        self.validate_required(self.tags, 'tags')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Uid'] = self.uid
        result['Title'] = self.title
        result['Time'] = self.time
        result['Url'] = self.url
        result['Type'] = self.type
        result['Exporter'] = self.exporter
        result['IsArmsExporter'] = self.is_arms_exporter
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.uid = map.get('Uid')
        self.title = map.get('Title')
        self.time = map.get('Time')
        self.url = map.get('Url')
        self.type = map.get('Type')
        self.exporter = map.get('Exporter')
        self.is_arms_exporter = map.get('IsArmsExporter')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                self.tags.append(k)
        else:
            self.tags = None
        return self


class GetConsistencySnapshotRequest(TeaModel):
    def __init__(self, current_timestamp=None, region_id=None, proxy_user_id=None, pid=None, app_type=None):
        self.current_timestamp = current_timestamp
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.pid = pid
        self.app_type = app_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_type, 'app_type')

    def to_map(self):
        result = {}
        result['CurrentTimestamp'] = self.current_timestamp
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['Pid'] = self.pid
        result['AppType'] = self.app_type
        return result

    def from_map(self, map={}):
        self.current_timestamp = map.get('CurrentTimestamp')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.pid = map.get('Pid')
        self.app_type = map.get('AppType')
        return self


class GetConsistencySnapshotResponse(TeaModel):
    def __init__(self, request_id=None, consistency_result_json_str=None):
        self.request_id = request_id
        self.consistency_result_json_str = consistency_result_json_str

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.consistency_result_json_str, 'consistency_result_json_str')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ConsistencyResultJsonStr'] = self.consistency_result_json_str
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.consistency_result_json_str = map.get('ConsistencyResultJsonStr')
        return self


class CheckDataConsistencyRequest(TeaModel):
    def __init__(self, current_timestamp=None, region_id=None, proxy_user_id=None, pid=None, app_type=None):
        self.current_timestamp = current_timestamp
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.pid = pid
        self.app_type = app_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_type, 'app_type')

    def to_map(self):
        result = {}
        result['CurrentTimestamp'] = self.current_timestamp
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['Pid'] = self.pid
        result['AppType'] = self.app_type
        return result

    def from_map(self, map={}):
        self.current_timestamp = map.get('CurrentTimestamp')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.pid = map.get('Pid')
        self.app_type = map.get('AppType')
        return self


class CheckDataConsistencyResponse(TeaModel):
    def __init__(self, request_id=None, is_data_consistency=None):
        self.request_id = request_id
        self.is_data_consistency = is_data_consistency

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_data_consistency, 'is_data_consistency')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsDataConsistency'] = self.is_data_consistency
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_data_consistency = map.get('IsDataConsistency')
        return self


class AddGrafanaRequest(TeaModel):
    def __init__(self, region_id=None, cluster_id=None, integration=None):
        self.region_id = region_id
        self.cluster_id = cluster_id
        self.integration = integration

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.integration, 'integration')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ClusterId'] = self.cluster_id
        result['Integration'] = self.integration
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.cluster_id = map.get('ClusterId')
        self.integration = map.get('Integration')
        return self


class AddGrafanaResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class AddIntegrationRequest(TeaModel):
    def __init__(self, region_id=None, cluster_id=None, integration=None):
        self.region_id = region_id
        self.cluster_id = cluster_id
        self.integration = integration

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.integration, 'integration')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ClusterId'] = self.cluster_id
        result['Integration'] = self.integration
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.cluster_id = map.get('ClusterId')
        self.integration = map.get('Integration')
        return self


class AddIntegrationResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class GetTraceRequest(TeaModel):
    def __init__(self, trace_id=None, region_id=None):
        self.trace_id = trace_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.region_id = map.get('RegionId')
        return self


class GetTraceResponse(TeaModel):
    def __init__(self, request_id=None, spans=None):
        self.request_id = request_id
        self.spans = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.spans, 'spans')
        if self.spans:
            for k in self.spans:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Spans'] = []
        if self.spans is not None:
            for k in self.spans:
                result['Spans'].append(k.to_map() if k else None)
        else:
            result['Spans'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.spans = []
        if map.get('Spans') is not None:
            for k in map.get('Spans'):
                temp_model = GetTraceResponseSpans()
                temp_model = temp_model.from_map(k)
                self.spans.append(temp_model)
        else:
            self.spans = None
        return self


class GetTraceResponseSpansTagEntryList(TeaModel):
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


class GetTraceResponseSpansLogEventListTagEntryList(TeaModel):
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


class GetTraceResponseSpansLogEventList(TeaModel):
    def __init__(self, timestamp=None, tag_entry_list=None):
        self.timestamp = timestamp
        self.tag_entry_list = []

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.tag_entry_list, 'tag_entry_list')
        if self.tag_entry_list:
            for k in self.tag_entry_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['TagEntryList'] = []
        if self.tag_entry_list is not None:
            for k in self.tag_entry_list:
                result['TagEntryList'].append(k.to_map() if k else None)
        else:
            result['TagEntryList'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.tag_entry_list = []
        if map.get('TagEntryList') is not None:
            for k in map.get('TagEntryList'):
                temp_model = GetTraceResponseSpansLogEventListTagEntryList()
                temp_model = temp_model.from_map(k)
                self.tag_entry_list.append(temp_model)
        else:
            self.tag_entry_list = None
        return self


class GetTraceResponseSpans(TeaModel):
    def __init__(self, trace_id=None, operation_name=None, duration=None, service_name=None, service_ip=None, timestamp=None, rpc_id=None, result_code=None, have_stack=None, rpc_type=None, tag_entry_list=None, log_event_list=None):
        self.trace_id = trace_id
        self.operation_name = operation_name
        self.duration = duration
        self.service_name = service_name
        self.service_ip = service_ip
        self.timestamp = timestamp
        self.rpc_id = rpc_id
        self.result_code = result_code
        self.have_stack = have_stack
        self.rpc_type = rpc_type
        self.tag_entry_list = []
        self.log_event_list = []

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.operation_name, 'operation_name')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.service_ip, 'service_ip')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.rpc_id, 'rpc_id')
        self.validate_required(self.result_code, 'result_code')
        self.validate_required(self.have_stack, 'have_stack')
        self.validate_required(self.rpc_type, 'rpc_type')
        self.validate_required(self.tag_entry_list, 'tag_entry_list')
        if self.tag_entry_list:
            for k in self.tag_entry_list:
                if k :
                    k.validate()
        self.validate_required(self.log_event_list, 'log_event_list')
        if self.log_event_list:
            for k in self.log_event_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['OperationName'] = self.operation_name
        result['Duration'] = self.duration
        result['ServiceName'] = self.service_name
        result['ServiceIp'] = self.service_ip
        result['Timestamp'] = self.timestamp
        result['RpcId'] = self.rpc_id
        result['ResultCode'] = self.result_code
        result['HaveStack'] = self.have_stack
        result['RpcType'] = self.rpc_type
        result['TagEntryList'] = []
        if self.tag_entry_list is not None:
            for k in self.tag_entry_list:
                result['TagEntryList'].append(k.to_map() if k else None)
        else:
            result['TagEntryList'] = None
        result['LogEventList'] = []
        if self.log_event_list is not None:
            for k in self.log_event_list:
                result['LogEventList'].append(k.to_map() if k else None)
        else:
            result['LogEventList'] = None
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.operation_name = map.get('OperationName')
        self.duration = map.get('Duration')
        self.service_name = map.get('ServiceName')
        self.service_ip = map.get('ServiceIp')
        self.timestamp = map.get('Timestamp')
        self.rpc_id = map.get('RpcId')
        self.result_code = map.get('ResultCode')
        self.have_stack = map.get('HaveStack')
        self.rpc_type = map.get('RpcType')
        self.tag_entry_list = []
        if map.get('TagEntryList') is not None:
            for k in map.get('TagEntryList'):
                temp_model = GetTraceResponseSpansTagEntryList()
                temp_model = temp_model.from_map(k)
                self.tag_entry_list.append(temp_model)
        else:
            self.tag_entry_list = None
        self.log_event_list = []
        if map.get('LogEventList') is not None:
            for k in map.get('LogEventList'):
                temp_model = GetTraceResponseSpansLogEventList()
                temp_model = temp_model.from_map(k)
                self.log_event_list.append(temp_model)
        else:
            self.log_event_list = None
        return self


class ListClusterFromGrafanaRequest(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class ListClusterFromGrafanaResponse(TeaModel):
    def __init__(self, request_id=None, prom_cluster_list=None):
        self.request_id = request_id
        self.prom_cluster_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.prom_cluster_list, 'prom_cluster_list')
        if self.prom_cluster_list:
            for k in self.prom_cluster_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PromClusterList'] = []
        if self.prom_cluster_list is not None:
            for k in self.prom_cluster_list:
                result['PromClusterList'].append(k.to_map() if k else None)
        else:
            result['PromClusterList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.prom_cluster_list = []
        if map.get('PromClusterList') is not None:
            for k in map.get('PromClusterList'):
                temp_model = ListClusterFromGrafanaResponsePromClusterList()
                temp_model = temp_model.from_map(k)
                self.prom_cluster_list.append(temp_model)
        else:
            self.prom_cluster_list = None
        return self


class ListClusterFromGrafanaResponsePromClusterList(TeaModel):
    def __init__(self, id=None, cluster_id=None, cluster_name=None, agent_status=None, cluster_type=None, controller_id=None, is_controller_installed=None, user_id=None, region_id=None, plugins_json_array=None, state_json=None, node_num=None, create_time=None, update_time=None, last_heart_beat_time=None, install_time=None, extra=None, options=None):
        self.id = id
        self.cluster_id = cluster_id
        self.cluster_name = cluster_name
        self.agent_status = agent_status
        self.cluster_type = cluster_type
        self.controller_id = controller_id
        self.is_controller_installed = is_controller_installed
        self.user_id = user_id
        self.region_id = region_id
        self.plugins_json_array = plugins_json_array
        self.state_json = state_json
        self.node_num = node_num
        self.create_time = create_time
        self.update_time = update_time
        self.last_heart_beat_time = last_heart_beat_time
        self.install_time = install_time
        self.extra = extra
        self.options = options

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.cluster_name, 'cluster_name')
        self.validate_required(self.agent_status, 'agent_status')
        self.validate_required(self.cluster_type, 'cluster_type')
        self.validate_required(self.controller_id, 'controller_id')
        self.validate_required(self.is_controller_installed, 'is_controller_installed')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.plugins_json_array, 'plugins_json_array')
        self.validate_required(self.state_json, 'state_json')
        self.validate_required(self.node_num, 'node_num')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.last_heart_beat_time, 'last_heart_beat_time')
        self.validate_required(self.install_time, 'install_time')
        self.validate_required(self.extra, 'extra')
        self.validate_required(self.options, 'options')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['ClusterId'] = self.cluster_id
        result['ClusterName'] = self.cluster_name
        result['AgentStatus'] = self.agent_status
        result['ClusterType'] = self.cluster_type
        result['ControllerId'] = self.controller_id
        result['IsControllerInstalled'] = self.is_controller_installed
        result['UserId'] = self.user_id
        result['RegionId'] = self.region_id
        result['PluginsJsonArray'] = self.plugins_json_array
        result['StateJson'] = self.state_json
        result['NodeNum'] = self.node_num
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['LastHeartBeatTime'] = self.last_heart_beat_time
        result['InstallTime'] = self.install_time
        result['Extra'] = self.extra
        result['Options'] = self.options
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.cluster_id = map.get('ClusterId')
        self.cluster_name = map.get('ClusterName')
        self.agent_status = map.get('AgentStatus')
        self.cluster_type = map.get('ClusterType')
        self.controller_id = map.get('ControllerId')
        self.is_controller_installed = map.get('IsControllerInstalled')
        self.user_id = map.get('UserId')
        self.region_id = map.get('RegionId')
        self.plugins_json_array = map.get('PluginsJsonArray')
        self.state_json = map.get('StateJson')
        self.node_num = map.get('NodeNum')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.last_heart_beat_time = map.get('LastHeartBeatTime')
        self.install_time = map.get('InstallTime')
        self.extra = map.get('Extra')
        self.options = map.get('Options')
        return self


class SearchTracesRequest(TeaModel):
    def __init__(self, start_time=None, end_time=None, region_id=None, service_name=None, operation_name=None, min_duration=None, tag=None, service_ip=None, exclusion_filters=None):
        self.start_time = start_time
        self.end_time = end_time
        self.region_id = region_id
        self.service_name = service_name
        self.operation_name = operation_name
        self.min_duration = min_duration
        self.tag = []
        self.service_ip = service_ip
        self.exclusion_filters = []

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.region_id, 'region_id')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        if self.exclusion_filters:
            for k in self.exclusion_filters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['RegionId'] = self.region_id
        result['ServiceName'] = self.service_name
        result['OperationName'] = self.operation_name
        result['MinDuration'] = self.min_duration
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['ServiceIp'] = self.service_ip
        result['ExclusionFilters'] = []
        if self.exclusion_filters is not None:
            for k in self.exclusion_filters:
                result['ExclusionFilters'].append(k.to_map() if k else None)
        else:
            result['ExclusionFilters'] = None
        return result

    def from_map(self, map={}):
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.region_id = map.get('RegionId')
        self.service_name = map.get('ServiceName')
        self.operation_name = map.get('OperationName')
        self.min_duration = map.get('MinDuration')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = SearchTracesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.service_ip = map.get('ServiceIp')
        self.exclusion_filters = []
        if map.get('ExclusionFilters') is not None:
            for k in map.get('ExclusionFilters'):
                temp_model = SearchTracesRequestExclusionFilters()
                temp_model = temp_model.from_map(k)
                self.exclusion_filters.append(temp_model)
        else:
            self.exclusion_filters = None
        return self


class SearchTracesRequestTag(TeaModel):
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


class SearchTracesRequestExclusionFilters(TeaModel):
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


class SearchTracesResponse(TeaModel):
    def __init__(self, request_id=None, trace_infos=None):
        self.request_id = request_id
        self.trace_infos = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.trace_infos, 'trace_infos')
        if self.trace_infos:
            for k in self.trace_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TraceInfos'] = []
        if self.trace_infos is not None:
            for k in self.trace_infos:
                result['TraceInfos'].append(k.to_map() if k else None)
        else:
            result['TraceInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.trace_infos = []
        if map.get('TraceInfos') is not None:
            for k in map.get('TraceInfos'):
                temp_model = SearchTracesResponseTraceInfos()
                temp_model = temp_model.from_map(k)
                self.trace_infos.append(temp_model)
        else:
            self.trace_infos = None
        return self


class SearchTracesResponseTraceInfos(TeaModel):
    def __init__(self, trace_id=None, operation_name=None, service_name=None, service_ip=None, duration=None, timestamp=None):
        self.trace_id = trace_id
        self.operation_name = operation_name
        self.service_name = service_name
        self.service_ip = service_ip
        self.duration = duration
        self.timestamp = timestamp

    def validate(self):
        self.validate_required(self.trace_id, 'trace_id')
        self.validate_required(self.operation_name, 'operation_name')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.service_ip, 'service_ip')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.timestamp, 'timestamp')

    def to_map(self):
        result = {}
        result['TraceID'] = self.trace_id
        result['OperationName'] = self.operation_name
        result['ServiceName'] = self.service_name
        result['ServiceIp'] = self.service_ip
        result['Duration'] = self.duration
        result['Timestamp'] = self.timestamp
        return result

    def from_map(self, map={}):
        self.trace_id = map.get('TraceID')
        self.operation_name = map.get('OperationName')
        self.service_name = map.get('ServiceName')
        self.service_ip = map.get('ServiceIp')
        self.duration = map.get('Duration')
        self.timestamp = map.get('Timestamp')
        return self


class GetPrometheusApiTokenRequest(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class GetPrometheusApiTokenResponse(TeaModel):
    def __init__(self, request_id=None, token=None):
        self.request_id = request_id
        self.token = token

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.token, 'token')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Token'] = self.token
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.token = map.get('Token')
        return self


class SetRetcodeShareStatusRequest(TeaModel):
    def __init__(self, pid=None, status=None):
        self.pid = pid
        self.status = status

    def validate(self):
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['Pid'] = self.pid
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.pid = map.get('Pid')
        self.status = map.get('Status')
        return self


class SetRetcodeShareStatusResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class GetRetcodeShareUrlRequest(TeaModel):
    def __init__(self, pid=None):
        self.pid = pid

    def validate(self):
        self.validate_required(self.pid, 'pid')

    def to_map(self):
        result = {}
        result['Pid'] = self.pid
        return result

    def from_map(self, map={}):
        self.pid = map.get('Pid')
        return self


class GetRetcodeShareUrlResponse(TeaModel):
    def __init__(self, request_id=None, url=None):
        self.request_id = request_id
        self.url = url

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.url = map.get('Url')
        return self


class ListPromClustersRequest(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class ListPromClustersResponse(TeaModel):
    def __init__(self, request_id=None, prom_cluster_list=None):
        self.request_id = request_id
        self.prom_cluster_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.prom_cluster_list, 'prom_cluster_list')
        if self.prom_cluster_list:
            for k in self.prom_cluster_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PromClusterList'] = []
        if self.prom_cluster_list is not None:
            for k in self.prom_cluster_list:
                result['PromClusterList'].append(k.to_map() if k else None)
        else:
            result['PromClusterList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.prom_cluster_list = []
        if map.get('PromClusterList') is not None:
            for k in map.get('PromClusterList'):
                temp_model = ListPromClustersResponsePromClusterList()
                temp_model = temp_model.from_map(k)
                self.prom_cluster_list.append(temp_model)
        else:
            self.prom_cluster_list = None
        return self


class ListPromClustersResponsePromClusterList(TeaModel):
    def __init__(self, id=None, cluster_id=None, cluster_name=None, agent_status=None, cluster_type=None, controller_id=None, is_controller_installed=None, user_id=None, region_id=None, plugins_json_array=None, state_json=None, node_num=None, create_time=None, update_time=None, last_heart_beat_time=None, install_time=None, extra=None, options=None):
        self.id = id
        self.cluster_id = cluster_id
        self.cluster_name = cluster_name
        self.agent_status = agent_status
        self.cluster_type = cluster_type
        self.controller_id = controller_id
        self.is_controller_installed = is_controller_installed
        self.user_id = user_id
        self.region_id = region_id
        self.plugins_json_array = plugins_json_array
        self.state_json = state_json
        self.node_num = node_num
        self.create_time = create_time
        self.update_time = update_time
        self.last_heart_beat_time = last_heart_beat_time
        self.install_time = install_time
        self.extra = extra
        self.options = options

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.cluster_id, 'cluster_id')
        self.validate_required(self.cluster_name, 'cluster_name')
        self.validate_required(self.agent_status, 'agent_status')
        self.validate_required(self.cluster_type, 'cluster_type')
        self.validate_required(self.controller_id, 'controller_id')
        self.validate_required(self.is_controller_installed, 'is_controller_installed')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.plugins_json_array, 'plugins_json_array')
        self.validate_required(self.state_json, 'state_json')
        self.validate_required(self.node_num, 'node_num')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.last_heart_beat_time, 'last_heart_beat_time')
        self.validate_required(self.install_time, 'install_time')
        self.validate_required(self.extra, 'extra')
        self.validate_required(self.options, 'options')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['ClusterId'] = self.cluster_id
        result['ClusterName'] = self.cluster_name
        result['AgentStatus'] = self.agent_status
        result['ClusterType'] = self.cluster_type
        result['ControllerId'] = self.controller_id
        result['IsControllerInstalled'] = self.is_controller_installed
        result['UserId'] = self.user_id
        result['RegionId'] = self.region_id
        result['PluginsJsonArray'] = self.plugins_json_array
        result['StateJson'] = self.state_json
        result['NodeNum'] = self.node_num
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['LastHeartBeatTime'] = self.last_heart_beat_time
        result['InstallTime'] = self.install_time
        result['Extra'] = self.extra
        result['Options'] = self.options
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.cluster_id = map.get('ClusterId')
        self.cluster_name = map.get('ClusterName')
        self.agent_status = map.get('AgentStatus')
        self.cluster_type = map.get('ClusterType')
        self.controller_id = map.get('ControllerId')
        self.is_controller_installed = map.get('IsControllerInstalled')
        self.user_id = map.get('UserId')
        self.region_id = map.get('RegionId')
        self.plugins_json_array = map.get('PluginsJsonArray')
        self.state_json = map.get('StateJson')
        self.node_num = map.get('NodeNum')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.last_heart_beat_time = map.get('LastHeartBeatTime')
        self.install_time = map.get('InstallTime')
        self.extra = map.get('Extra')
        self.options = map.get('Options')
        return self


class UpdateAlertRuleRequest(TeaModel):
    def __init__(self, region_id=None, contact_group_ids=None, is_auto_start=None, templage_alert_config=None, proxy_user_id=None, alert_id=None):
        self.region_id = region_id
        self.contact_group_ids = contact_group_ids
        self.is_auto_start = is_auto_start
        self.templage_alert_config = templage_alert_config
        self.proxy_user_id = proxy_user_id
        self.alert_id = alert_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.templage_alert_config, 'templage_alert_config')
        self.validate_required(self.alert_id, 'alert_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContactGroupIds'] = self.contact_group_ids
        result['IsAutoStart'] = self.is_auto_start
        result['TemplageAlertConfig'] = self.templage_alert_config
        result['ProxyUserId'] = self.proxy_user_id
        result['AlertId'] = self.alert_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.contact_group_ids = map.get('ContactGroupIds')
        self.is_auto_start = map.get('IsAutoStart')
        self.templage_alert_config = map.get('TemplageAlertConfig')
        self.proxy_user_id = map.get('ProxyUserId')
        self.alert_id = map.get('AlertId')
        return self


class UpdateAlertRuleResponse(TeaModel):
    def __init__(self, request_id=None, data=None, alert_id=None):
        self.request_id = request_id
        self.data = data
        self.alert_id = alert_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.alert_id, 'alert_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['AlertId'] = self.alert_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.alert_id = map.get('AlertId')
        return self


class StartAlertRequest(TeaModel):
    def __init__(self, alert_id=None, proxy_user_id=None, region_id=None):
        self.alert_id = alert_id
        self.proxy_user_id = proxy_user_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.alert_id, 'alert_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AlertId'] = self.alert_id
        result['ProxyUserId'] = self.proxy_user_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.alert_id = map.get('AlertId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.region_id = map.get('RegionId')
        return self


class StartAlertResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class StopAlertRequest(TeaModel):
    def __init__(self, alert_id=None, proxy_user_id=None, region_id=None):
        self.alert_id = alert_id
        self.proxy_user_id = proxy_user_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.alert_id, 'alert_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AlertId'] = self.alert_id
        result['ProxyUserId'] = self.proxy_user_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.alert_id = map.get('AlertId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.region_id = map.get('RegionId')
        return self


class StopAlertResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class SearchEventsRequest(TeaModel):
    def __init__(self, proxy_user_id=None, alert_id=None, pid=None, current_page=None, page_size=None, region_id=None, app_type=None, alert_type=None, is_trigger=None, start_time=None, end_time=None):
        self.proxy_user_id = proxy_user_id
        self.alert_id = alert_id
        self.pid = pid
        self.current_page = current_page
        self.page_size = page_size
        self.region_id = region_id
        self.app_type = app_type
        self.alert_type = alert_type
        self.is_trigger = is_trigger
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ProxyUserId'] = self.proxy_user_id
        result['AlertId'] = self.alert_id
        result['Pid'] = self.pid
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        result['AppType'] = self.app_type
        result['AlertType'] = self.alert_type
        result['IsTrigger'] = self.is_trigger
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.proxy_user_id = map.get('ProxyUserId')
        self.alert_id = map.get('AlertId')
        self.pid = map.get('Pid')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        self.app_type = map.get('AppType')
        self.alert_type = map.get('AlertType')
        self.is_trigger = map.get('IsTrigger')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class SearchEventsResponse(TeaModel):
    def __init__(self, request_id=None, is_trigger=None, page_bean=None):
        self.request_id = request_id
        self.is_trigger = is_trigger
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_trigger, 'is_trigger')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsTrigger'] = self.is_trigger
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_trigger = map.get('IsTrigger')
        if map.get('PageBean') is not None:
            temp_model = SearchEventsResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchEventsResponsePageBeanEvent(TeaModel):
    def __init__(self, id=None, event_time=None, alert_type=None, event_level=None, message=None, alert_id=None, alert_name=None, alert_rule=None, links=None):
        self.id = id
        self.event_time = event_time
        self.alert_type = alert_type
        self.event_level = event_level
        self.message = message
        self.alert_id = alert_id
        self.alert_name = alert_name
        self.alert_rule = alert_rule
        self.links = []

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.event_time, 'event_time')
        self.validate_required(self.alert_type, 'alert_type')
        self.validate_required(self.event_level, 'event_level')
        self.validate_required(self.message, 'message')
        self.validate_required(self.alert_id, 'alert_id')
        self.validate_required(self.alert_name, 'alert_name')
        self.validate_required(self.alert_rule, 'alert_rule')
        self.validate_required(self.links, 'links')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['EventTime'] = self.event_time
        result['AlertType'] = self.alert_type
        result['EventLevel'] = self.event_level
        result['Message'] = self.message
        result['AlertId'] = self.alert_id
        result['AlertName'] = self.alert_name
        result['AlertRule'] = self.alert_rule
        result['Links'] = []
        if self.links is not None:
            for k in self.links:
                result['Links'].append(k)
        else:
            result['Links'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.event_time = map.get('EventTime')
        self.alert_type = map.get('AlertType')
        self.event_level = map.get('EventLevel')
        self.message = map.get('Message')
        self.alert_id = map.get('AlertId')
        self.alert_name = map.get('AlertName')
        self.alert_rule = map.get('AlertRule')
        self.links = []
        if map.get('Links') is not None:
            for k in map.get('Links'):
                self.links.append(k)
        else:
            self.links = None
        return self


class SearchEventsResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, event=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.event = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.event, 'event')
        if self.event:
            for k in self.event:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Event'] = []
        if self.event is not None:
            for k in self.event:
                result['Event'].append(k.to_map() if k else None)
        else:
            result['Event'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.event = []
        if map.get('Event') is not None:
            for k in map.get('Event'):
                temp_model = SearchEventsResponsePageBeanEvent()
                temp_model = temp_model.from_map(k)
                self.event.append(temp_model)
        else:
            self.event = None
        return self


class SearchAlertHistoriesRequest(TeaModel):
    def __init__(self, proxy_user_id=None, alert_id=None, alert_type=None, current_page=None, page_size=None, region_id=None, start_time=None, end_time=None):
        self.proxy_user_id = proxy_user_id
        self.alert_id = alert_id
        self.alert_type = alert_type
        self.current_page = current_page
        self.page_size = page_size
        self.region_id = region_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ProxyUserId'] = self.proxy_user_id
        result['AlertId'] = self.alert_id
        result['AlertType'] = self.alert_type
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.proxy_user_id = map.get('ProxyUserId')
        self.alert_id = map.get('AlertId')
        self.alert_type = map.get('AlertType')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class SearchAlertHistoriesResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchAlertHistoriesResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchAlertHistoriesResponsePageBeanAlarmHistories(TeaModel):
    def __init__(self, id=None, strategy_id=None, user_id=None, target=None, phones=None, emails=None, alarm_time=None, alarm_type=None, alarm_response_code=None, alarm_content=None, alarm_sources=None):
        self.id = id
        self.strategy_id = strategy_id
        self.user_id = user_id
        self.target = target
        self.phones = phones
        self.emails = emails
        self.alarm_time = alarm_time
        self.alarm_type = alarm_type
        self.alarm_response_code = alarm_response_code
        self.alarm_content = alarm_content
        self.alarm_sources = alarm_sources

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.strategy_id, 'strategy_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.target, 'target')
        self.validate_required(self.phones, 'phones')
        self.validate_required(self.emails, 'emails')
        self.validate_required(self.alarm_time, 'alarm_time')
        self.validate_required(self.alarm_type, 'alarm_type')
        self.validate_required(self.alarm_response_code, 'alarm_response_code')
        self.validate_required(self.alarm_content, 'alarm_content')
        self.validate_required(self.alarm_sources, 'alarm_sources')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['StrategyId'] = self.strategy_id
        result['UserId'] = self.user_id
        result['Target'] = self.target
        result['Phones'] = self.phones
        result['Emails'] = self.emails
        result['AlarmTime'] = self.alarm_time
        result['AlarmType'] = self.alarm_type
        result['AlarmResponseCode'] = self.alarm_response_code
        result['AlarmContent'] = self.alarm_content
        result['AlarmSources'] = self.alarm_sources
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.strategy_id = map.get('StrategyId')
        self.user_id = map.get('UserId')
        self.target = map.get('Target')
        self.phones = map.get('Phones')
        self.emails = map.get('Emails')
        self.alarm_time = map.get('AlarmTime')
        self.alarm_type = map.get('AlarmType')
        self.alarm_response_code = map.get('AlarmResponseCode')
        self.alarm_content = map.get('AlarmContent')
        self.alarm_sources = map.get('AlarmSources')
        return self


class SearchAlertHistoriesResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, alarm_histories=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.alarm_histories = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.alarm_histories, 'alarm_histories')
        if self.alarm_histories:
            for k in self.alarm_histories:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['AlarmHistories'] = []
        if self.alarm_histories is not None:
            for k in self.alarm_histories:
                result['AlarmHistories'].append(k.to_map() if k else None)
        else:
            result['AlarmHistories'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.alarm_histories = []
        if map.get('AlarmHistories') is not None:
            for k in map.get('AlarmHistories'):
                temp_model = SearchAlertHistoriesResponsePageBeanAlarmHistories()
                temp_model = temp_model.from_map(k)
                self.alarm_histories.append(temp_model)
        else:
            self.alarm_histories = None
        return self


class UpdateAlertContactRequest(TeaModel):
    def __init__(self, contact_name=None, phone_num=None, email=None, ding_robot_webhook_url=None, system_noc=None, region_id=None, proxy_user_id=None, contact_id=None):
        self.contact_name = contact_name
        self.phone_num = phone_num
        self.email = email
        self.ding_robot_webhook_url = ding_robot_webhook_url
        self.system_noc = system_noc
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.contact_id = contact_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.contact_id, 'contact_id')

    def to_map(self):
        result = {}
        result['ContactName'] = self.contact_name
        result['PhoneNum'] = self.phone_num
        result['Email'] = self.email
        result['DingRobotWebhookUrl'] = self.ding_robot_webhook_url
        result['SystemNoc'] = self.system_noc
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['ContactId'] = self.contact_id
        return result

    def from_map(self, map={}):
        self.contact_name = map.get('ContactName')
        self.phone_num = map.get('PhoneNum')
        self.email = map.get('Email')
        self.ding_robot_webhook_url = map.get('DingRobotWebhookUrl')
        self.system_noc = map.get('SystemNoc')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.contact_id = map.get('ContactId')
        return self


class UpdateAlertContactResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class DeleteAlertContactGroupRequest(TeaModel):
    def __init__(self, region_id=None, proxy_user_id=None, contact_group_id=None):
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.contact_group_id = contact_group_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.contact_group_id, 'contact_group_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['ContactGroupId'] = self.contact_group_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.contact_group_id = map.get('ContactGroupId')
        return self


class DeleteAlertContactGroupResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class DeleteAlertContactRequest(TeaModel):
    def __init__(self, region_id=None, proxy_user_id=None, contact_id=None):
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.contact_id = contact_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.contact_id, 'contact_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['ContactId'] = self.contact_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.contact_id = map.get('ContactId')
        return self


class DeleteAlertContactResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class UpdateAlertContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None, contact_ids=None, region_id=None, proxy_user_id=None, contact_group_id=None):
        self.contact_group_name = contact_group_name
        self.contact_ids = contact_ids
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.contact_group_id = contact_group_id

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.contact_group_id, 'contact_group_id')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        result['ContactIds'] = self.contact_ids
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['ContactGroupId'] = self.contact_group_id
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        self.contact_ids = map.get('ContactIds')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.contact_group_id = map.get('ContactGroupId')
        return self


class UpdateAlertContactGroupResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class ImportCustomAlertRulesRequest(TeaModel):
    def __init__(self, region_id=None, contact_group_ids=None, is_auto_start=None, templage_alert_config=None, proxy_user_id=None):
        self.region_id = region_id
        self.contact_group_ids = contact_group_ids
        self.is_auto_start = is_auto_start
        self.templage_alert_config = templage_alert_config
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['ContactGroupIds'] = self.contact_group_ids
        result['IsAutoStart'] = self.is_auto_start
        result['TemplageAlertConfig'] = self.templage_alert_config
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.contact_group_ids = map.get('ContactGroupIds')
        self.is_auto_start = map.get('IsAutoStart')
        self.templage_alert_config = map.get('TemplageAlertConfig')
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class ImportCustomAlertRulesResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class SearchAlertRulesRequest(TeaModel):
    def __init__(self, proxy_user_id=None, title=None, type=None, current_page=None, page_size=None, region_id=None, pid=None, app_type=None):
        self.proxy_user_id = proxy_user_id
        self.title = title
        self.type = type
        self.current_page = current_page
        self.page_size = page_size
        self.region_id = region_id
        self.pid = pid
        self.app_type = app_type

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ProxyUserId'] = self.proxy_user_id
        result['Title'] = self.title
        result['Type'] = self.type
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        result['Pid'] = self.pid
        result['AppType'] = self.app_type
        return result

    def from_map(self, map={}):
        self.proxy_user_id = map.get('ProxyUserId')
        self.title = map.get('Title')
        self.type = map.get('Type')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        self.pid = map.get('Pid')
        self.app_type = map.get('AppType')
        return self


class SearchAlertRulesResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchAlertRulesResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchAlertRulesResponsePageBeanAlertRulesAlarmContext(TeaModel):
    def __init__(self, alarm_content_template=None, alarm_content_sub_title=None):
        self.alarm_content_template = alarm_content_template
        self.alarm_content_sub_title = alarm_content_sub_title

    def validate(self):
        self.validate_required(self.alarm_content_template, 'alarm_content_template')
        self.validate_required(self.alarm_content_sub_title, 'alarm_content_sub_title')

    def to_map(self):
        result = {}
        result['AlarmContentTemplate'] = self.alarm_content_template
        result['AlarmContentSubTitle'] = self.alarm_content_sub_title
        return result

    def from_map(self, map={}):
        self.alarm_content_template = map.get('AlarmContentTemplate')
        self.alarm_content_sub_title = map.get('AlarmContentSubTitle')
        return self


class SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules(TeaModel):
    def __init__(self, aggregates=None, alias=None, measure=None, nvalue=None, operator=None, value=None):
        self.aggregates = aggregates
        self.alias = alias
        self.measure = measure
        self.nvalue = nvalue
        self.operator = operator
        self.value = value

    def validate(self):
        self.validate_required(self.aggregates, 'aggregates')
        self.validate_required(self.alias, 'alias')
        self.validate_required(self.measure, 'measure')
        self.validate_required(self.nvalue, 'nvalue')
        self.validate_required(self.operator, 'operator')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Aggregates'] = self.aggregates
        result['Alias'] = self.alias
        result['Measure'] = self.measure
        result['NValue'] = self.nvalue
        result['Operator'] = self.operator
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.aggregates = map.get('Aggregates')
        self.alias = map.get('Alias')
        self.measure = map.get('Measure')
        self.nvalue = map.get('NValue')
        self.operator = map.get('Operator')
        self.value = map.get('Value')
        return self


class SearchAlertRulesResponsePageBeanAlertRulesAlertRule(TeaModel):
    def __init__(self, operator=None, rules=None):
        self.operator = operator
        self.rules = []

    def validate(self):
        self.validate_required(self.operator, 'operator')
        self.validate_required(self.rules, 'rules')
        if self.rules:
            for k in self.rules:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Operator'] = self.operator
        result['Rules'] = []
        if self.rules is not None:
            for k in self.rules:
                result['Rules'].append(k.to_map() if k else None)
        else:
            result['Rules'] = None
        return result

    def from_map(self, map={}):
        self.operator = map.get('Operator')
        self.rules = []
        if map.get('Rules') is not None:
            for k in map.get('Rules'):
                temp_model = SearchAlertRulesResponsePageBeanAlertRulesAlertRuleRules()
                temp_model = temp_model.from_map(k)
                self.rules.append(temp_model)
        else:
            self.rules = None
        return self


class SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions(TeaModel):
    def __init__(self, key=None, type=None, value=None):
        self.key = key
        self.type = type
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Type'] = self.type
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.type = map.get('Type')
        self.value = map.get('Value')
        return self


class SearchAlertRulesResponsePageBeanAlertRulesMetricParam(TeaModel):
    def __init__(self, app_group_id=None, app_id=None, pid=None, type=None, dimensions=None):
        self.app_group_id = app_group_id
        self.app_id = app_id
        self.pid = pid
        self.type = type
        self.dimensions = []

    def validate(self):
        self.validate_required(self.app_group_id, 'app_group_id')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.type, 'type')
        self.validate_required(self.dimensions, 'dimensions')
        if self.dimensions:
            for k in self.dimensions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AppGroupId'] = self.app_group_id
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['Type'] = self.type
        result['Dimensions'] = []
        if self.dimensions is not None:
            for k in self.dimensions:
                result['Dimensions'].append(k.to_map() if k else None)
        else:
            result['Dimensions'] = None
        return result

    def from_map(self, map={}):
        self.app_group_id = map.get('AppGroupId')
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.type = map.get('Type')
        self.dimensions = []
        if map.get('Dimensions') is not None:
            for k in map.get('Dimensions'):
                temp_model = SearchAlertRulesResponsePageBeanAlertRulesMetricParamDimensions()
                temp_model = temp_model.from_map(k)
                self.dimensions.append(temp_model)
        else:
            self.dimensions = None
        return self


class SearchAlertRulesResponsePageBeanAlertRulesNotice(TeaModel):
    def __init__(self, end_time=None, notice_end_time=None, notice_start_time=None, start_time=None):
        self.end_time = end_time
        self.notice_end_time = notice_end_time
        self.notice_start_time = notice_start_time
        self.start_time = start_time

    def validate(self):
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.notice_end_time, 'notice_end_time')
        self.validate_required(self.notice_start_time, 'notice_start_time')
        self.validate_required(self.start_time, 'start_time')

    def to_map(self):
        result = {}
        result['EndTime'] = self.end_time
        result['NoticeEndTime'] = self.notice_end_time
        result['NoticeStartTime'] = self.notice_start_time
        result['StartTime'] = self.start_time
        return result

    def from_map(self, map={}):
        self.end_time = map.get('EndTime')
        self.notice_end_time = map.get('NoticeEndTime')
        self.notice_start_time = map.get('NoticeStartTime')
        self.start_time = map.get('StartTime')
        return self


class SearchAlertRulesResponsePageBeanAlertRules(TeaModel):
    def __init__(self, alert_title=None, alert_level=None, alert_type=None, alert_version=None, config=None, contact_group_id_list=None, create_time=None, id=None, region_id=None, status=None, task_id=None, task_status=None, update_time=None, user_id=None, alarm_context=None, alert_rule=None, metric_param=None, notice=None, alert_ways=None):
        self.alert_title = alert_title
        self.alert_level = alert_level
        self.alert_type = alert_type
        self.alert_version = alert_version
        self.config = config
        self.contact_group_id_list = contact_group_id_list
        self.create_time = create_time
        self.id = id
        self.region_id = region_id
        self.status = status
        self.task_id = task_id
        self.task_status = task_status
        self.update_time = update_time
        self.user_id = user_id
        self.alarm_context = alarm_context
        self.alert_rule = alert_rule
        self.metric_param = metric_param
        self.notice = notice
        self.alert_ways = []

    def validate(self):
        self.validate_required(self.alert_title, 'alert_title')
        self.validate_required(self.alert_level, 'alert_level')
        self.validate_required(self.alert_type, 'alert_type')
        self.validate_required(self.alert_version, 'alert_version')
        self.validate_required(self.config, 'config')
        self.validate_required(self.contact_group_id_list, 'contact_group_id_list')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.id, 'id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.task_status, 'task_status')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.alarm_context, 'alarm_context')
        if self.alarm_context:
            self.alarm_context.validate()
        self.validate_required(self.alert_rule, 'alert_rule')
        if self.alert_rule:
            self.alert_rule.validate()
        self.validate_required(self.metric_param, 'metric_param')
        if self.metric_param:
            self.metric_param.validate()
        self.validate_required(self.notice, 'notice')
        if self.notice:
            self.notice.validate()
        self.validate_required(self.alert_ways, 'alert_ways')

    def to_map(self):
        result = {}
        result['AlertTitle'] = self.alert_title
        result['AlertLevel'] = self.alert_level
        result['AlertType'] = self.alert_type
        result['AlertVersion'] = self.alert_version
        result['Config'] = self.config
        result['ContactGroupIdList'] = self.contact_group_id_list
        result['CreateTime'] = self.create_time
        result['Id'] = self.id
        result['RegionId'] = self.region_id
        result['Status'] = self.status
        result['TaskId'] = self.task_id
        result['TaskStatus'] = self.task_status
        result['UpdateTime'] = self.update_time
        result['UserId'] = self.user_id
        if self.alarm_context is not None:
            result['AlarmContext'] = self.alarm_context.to_map()
        else:
            result['AlarmContext'] = None
        if self.alert_rule is not None:
            result['AlertRule'] = self.alert_rule.to_map()
        else:
            result['AlertRule'] = None
        if self.metric_param is not None:
            result['MetricParam'] = self.metric_param.to_map()
        else:
            result['MetricParam'] = None
        if self.notice is not None:
            result['Notice'] = self.notice.to_map()
        else:
            result['Notice'] = None
        result['AlertWays'] = []
        if self.alert_ways is not None:
            for k in self.alert_ways:
                result['AlertWays'].append(k)
        else:
            result['AlertWays'] = None
        return result

    def from_map(self, map={}):
        self.alert_title = map.get('AlertTitle')
        self.alert_level = map.get('AlertLevel')
        self.alert_type = map.get('AlertType')
        self.alert_version = map.get('AlertVersion')
        self.config = map.get('Config')
        self.contact_group_id_list = map.get('ContactGroupIdList')
        self.create_time = map.get('CreateTime')
        self.id = map.get('Id')
        self.region_id = map.get('RegionId')
        self.status = map.get('Status')
        self.task_id = map.get('TaskId')
        self.task_status = map.get('TaskStatus')
        self.update_time = map.get('UpdateTime')
        self.user_id = map.get('UserId')
        if map.get('AlarmContext') is not None:
            temp_model = SearchAlertRulesResponsePageBeanAlertRulesAlarmContext()
            self.alarm_context = temp_model.from_map(map['AlarmContext'])
        else:
            self.alarm_context = None
        if map.get('AlertRule') is not None:
            temp_model = SearchAlertRulesResponsePageBeanAlertRulesAlertRule()
            self.alert_rule = temp_model.from_map(map['AlertRule'])
        else:
            self.alert_rule = None
        if map.get('MetricParam') is not None:
            temp_model = SearchAlertRulesResponsePageBeanAlertRulesMetricParam()
            self.metric_param = temp_model.from_map(map['MetricParam'])
        else:
            self.metric_param = None
        if map.get('Notice') is not None:
            temp_model = SearchAlertRulesResponsePageBeanAlertRulesNotice()
            self.notice = temp_model.from_map(map['Notice'])
        else:
            self.notice = None
        self.alert_ways = []
        if map.get('AlertWays') is not None:
            for k in map.get('AlertWays'):
                self.alert_ways.append(k)
        else:
            self.alert_ways = None
        return self


class SearchAlertRulesResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, alert_rules=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.alert_rules = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.alert_rules, 'alert_rules')
        if self.alert_rules:
            for k in self.alert_rules:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['AlertRules'] = []
        if self.alert_rules is not None:
            for k in self.alert_rules:
                result['AlertRules'].append(k.to_map() if k else None)
        else:
            result['AlertRules'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.alert_rules = []
        if map.get('AlertRules') is not None:
            for k in map.get('AlertRules'):
                temp_model = SearchAlertRulesResponsePageBeanAlertRules()
                temp_model = temp_model.from_map(k)
                self.alert_rules.append(temp_model)
        else:
            self.alert_rules = None
        return self


class DeleteAlertRulesRequest(TeaModel):
    def __init__(self, alert_ids=None, proxy_user_id=None, region_id=None):
        self.alert_ids = alert_ids
        self.proxy_user_id = proxy_user_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.alert_ids, 'alert_ids')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AlertIds'] = self.alert_ids
        result['ProxyUserId'] = self.proxy_user_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.alert_ids = map.get('AlertIds')
        self.proxy_user_id = map.get('ProxyUserId')
        self.region_id = map.get('RegionId')
        return self


class DeleteAlertRulesResponse(TeaModel):
    def __init__(self, request_id=None, is_success=None):
        self.request_id = request_id
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.is_success = map.get('IsSuccess')
        return self


class CreateRetcodeAppRequest(TeaModel):
    def __init__(self, retcode_app_name=None, retcode_app_type=None, region_id=None):
        self.retcode_app_name = retcode_app_name
        self.retcode_app_type = retcode_app_type
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.retcode_app_name, 'retcode_app_name')
        self.validate_required(self.retcode_app_type, 'retcode_app_type')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RetcodeAppName'] = self.retcode_app_name
        result['RetcodeAppType'] = self.retcode_app_type
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.retcode_app_name = map.get('RetcodeAppName')
        self.retcode_app_type = map.get('RetcodeAppType')
        self.region_id = map.get('RegionId')
        return self


class CreateRetcodeAppResponse(TeaModel):
    def __init__(self, request_id=None, retcode_app_data_bean=None):
        self.request_id = request_id
        self.retcode_app_data_bean = retcode_app_data_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.retcode_app_data_bean, 'retcode_app_data_bean')
        if self.retcode_app_data_bean:
            self.retcode_app_data_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.retcode_app_data_bean is not None:
            result['RetcodeAppDataBean'] = self.retcode_app_data_bean.to_map()
        else:
            result['RetcodeAppDataBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('RetcodeAppDataBean') is not None:
            temp_model = CreateRetcodeAppResponseRetcodeAppDataBean()
            self.retcode_app_data_bean = temp_model.from_map(map['RetcodeAppDataBean'])
        else:
            self.retcode_app_data_bean = None
        return self


class CreateRetcodeAppResponseRetcodeAppDataBean(TeaModel):
    def __init__(self, app_id=None, pid=None):
        self.app_id = app_id
        self.pid = pid

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        return self


class DeleteRetcodeAppRequest(TeaModel):
    def __init__(self, app_id=None, region_id=None):
        self.app_id = app_id
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.region_id = map.get('RegionId')
        return self


class DeleteRetcodeAppResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class QueryDatasetRequest(TeaModel):
    def __init__(self, dataset_id=None, interval_in_sec=None, date_str=None, min_time=None, max_time=None, is_drill_down=None, order_by_key=None, limit=None, reduce_tail=None, hungry_mode=None, measures=None, dimensions=None, required_dims=None, optional_dims=None, proxy_user_id=None):
        self.dataset_id = dataset_id
        self.interval_in_sec = interval_in_sec
        self.date_str = date_str
        self.min_time = min_time
        self.max_time = max_time
        self.is_drill_down = is_drill_down
        self.order_by_key = order_by_key
        self.limit = limit
        self.reduce_tail = reduce_tail
        self.hungry_mode = hungry_mode
        self.measures = []
        self.dimensions = []
        self.required_dims = []
        self.optional_dims = []
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.dataset_id, 'dataset_id')
        self.validate_required(self.interval_in_sec, 'interval_in_sec')
        self.validate_required(self.min_time, 'min_time')
        self.validate_required(self.max_time, 'max_time')
        if self.dimensions:
            for k in self.dimensions:
                if k :
                    k.validate()
        if self.required_dims:
            for k in self.required_dims:
                if k :
                    k.validate()
        if self.optional_dims:
            for k in self.optional_dims:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DatasetId'] = self.dataset_id
        result['IntervalInSec'] = self.interval_in_sec
        result['DateStr'] = self.date_str
        result['MinTime'] = self.min_time
        result['MaxTime'] = self.max_time
        result['IsDrillDown'] = self.is_drill_down
        result['OrderByKey'] = self.order_by_key
        result['Limit'] = self.limit
        result['ReduceTail'] = self.reduce_tail
        result['HungryMode'] = self.hungry_mode
        result['Measures'] = []
        if self.measures is not None:
            for k in self.measures:
                result['Measures'].append(k)
        else:
            result['Measures'] = None
        result['Dimensions'] = []
        if self.dimensions is not None:
            for k in self.dimensions:
                result['Dimensions'].append(k.to_map() if k else None)
        else:
            result['Dimensions'] = None
        result['RequiredDims'] = []
        if self.required_dims is not None:
            for k in self.required_dims:
                result['RequiredDims'].append(k.to_map() if k else None)
        else:
            result['RequiredDims'] = None
        result['OptionalDims'] = []
        if self.optional_dims is not None:
            for k in self.optional_dims:
                result['OptionalDims'].append(k.to_map() if k else None)
        else:
            result['OptionalDims'] = None
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.dataset_id = map.get('DatasetId')
        self.interval_in_sec = map.get('IntervalInSec')
        self.date_str = map.get('DateStr')
        self.min_time = map.get('MinTime')
        self.max_time = map.get('MaxTime')
        self.is_drill_down = map.get('IsDrillDown')
        self.order_by_key = map.get('OrderByKey')
        self.limit = map.get('Limit')
        self.reduce_tail = map.get('ReduceTail')
        self.hungry_mode = map.get('HungryMode')
        self.measures = []
        if map.get('Measures') is not None:
            for k in map.get('Measures'):
                self.measures.append(k)
        else:
            self.measures = None
        self.dimensions = []
        if map.get('Dimensions') is not None:
            for k in map.get('Dimensions'):
                temp_model = QueryDatasetRequestDimensions()
                temp_model = temp_model.from_map(k)
                self.dimensions.append(temp_model)
        else:
            self.dimensions = None
        self.required_dims = []
        if map.get('RequiredDims') is not None:
            for k in map.get('RequiredDims'):
                temp_model = QueryDatasetRequestRequiredDims()
                temp_model = temp_model.from_map(k)
                self.required_dims.append(temp_model)
        else:
            self.required_dims = None
        self.optional_dims = []
        if map.get('OptionalDims') is not None:
            for k in map.get('OptionalDims'):
                temp_model = QueryDatasetRequestOptionalDims()
                temp_model = temp_model.from_map(k)
                self.optional_dims.append(temp_model)
        else:
            self.optional_dims = None
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class QueryDatasetRequestDimensions(TeaModel):
    def __init__(self, key=None, value=None, type=None):
        self.key = key
        self.value = value
        self.type = type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        self.type = map.get('Type')
        return self


class QueryDatasetRequestRequiredDims(TeaModel):
    def __init__(self, key=None, value=None, type=None):
        self.key = key
        self.value = value
        self.type = type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        self.type = map.get('Type')
        return self


class QueryDatasetRequestOptionalDims(TeaModel):
    def __init__(self, key=None, value=None, type=None):
        self.key = key
        self.value = value
        self.type = type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        self.type = map.get('Type')
        return self


class QueryDatasetResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class QueryMetricRequest(TeaModel):
    def __init__(self, interval_in_sec=None, start_time=None, end_time=None, order_by=None, limit=None, filters=None, dimensions=None, metric=None, measures=None, order=None, proxy_user_id=None, consistency_data_key=None, consistency_query_strategy=None):
        self.interval_in_sec = interval_in_sec
        self.start_time = start_time
        self.end_time = end_time
        self.order_by = order_by
        self.limit = limit
        self.filters = []
        self.dimensions = []
        self.metric = metric
        self.measures = []
        self.order = order
        self.proxy_user_id = proxy_user_id
        self.consistency_data_key = consistency_data_key
        self.consistency_query_strategy = consistency_query_strategy

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        if self.filters:
            for k in self.filters:
                if k :
                    k.validate()
        self.validate_required(self.metric, 'metric')
        self.validate_required(self.measures, 'measures')

    def to_map(self):
        result = {}
        result['IntervalInSec'] = self.interval_in_sec
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['OrderBy'] = self.order_by
        result['Limit'] = self.limit
        result['Filters'] = []
        if self.filters is not None:
            for k in self.filters:
                result['Filters'].append(k.to_map() if k else None)
        else:
            result['Filters'] = None
        result['Dimensions'] = []
        if self.dimensions is not None:
            for k in self.dimensions:
                result['Dimensions'].append(k)
        else:
            result['Dimensions'] = None
        result['Metric'] = self.metric
        result['Measures'] = []
        if self.measures is not None:
            for k in self.measures:
                result['Measures'].append(k)
        else:
            result['Measures'] = None
        result['Order'] = self.order
        result['ProxyUserId'] = self.proxy_user_id
        result['ConsistencyDataKey'] = self.consistency_data_key
        result['ConsistencyQueryStrategy'] = self.consistency_query_strategy
        return result

    def from_map(self, map={}):
        self.interval_in_sec = map.get('IntervalInSec')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.order_by = map.get('OrderBy')
        self.limit = map.get('Limit')
        self.filters = []
        if map.get('Filters') is not None:
            for k in map.get('Filters'):
                temp_model = QueryMetricRequestFilters()
                temp_model = temp_model.from_map(k)
                self.filters.append(temp_model)
        else:
            self.filters = None
        self.dimensions = []
        if map.get('Dimensions') is not None:
            for k in map.get('Dimensions'):
                self.dimensions.append(k)
        else:
            self.dimensions = None
        self.metric = map.get('Metric')
        self.measures = []
        if map.get('Measures') is not None:
            for k in map.get('Measures'):
                self.measures.append(k)
        else:
            self.measures = None
        self.order = map.get('Order')
        self.proxy_user_id = map.get('ProxyUserId')
        self.consistency_data_key = map.get('ConsistencyDataKey')
        self.consistency_query_strategy = map.get('ConsistencyQueryStrategy')
        return self


class QueryMetricRequestFilters(TeaModel):
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


class QueryMetricResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class CreateAlertContactRequest(TeaModel):
    def __init__(self, contact_name=None, phone_num=None, email=None, ding_robot_webhook_url=None, system_noc=None, region_id=None, proxy_user_id=None):
        self.contact_name = contact_name
        self.phone_num = phone_num
        self.email = email
        self.ding_robot_webhook_url = ding_robot_webhook_url
        self.system_noc = system_noc
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ContactName'] = self.contact_name
        result['PhoneNum'] = self.phone_num
        result['Email'] = self.email
        result['DingRobotWebhookUrl'] = self.ding_robot_webhook_url
        result['SystemNoc'] = self.system_noc
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.contact_name = map.get('ContactName')
        self.phone_num = map.get('PhoneNum')
        self.email = map.get('Email')
        self.ding_robot_webhook_url = map.get('DingRobotWebhookUrl')
        self.system_noc = map.get('SystemNoc')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class CreateAlertContactResponse(TeaModel):
    def __init__(self, request_id=None, contact_id=None):
        self.request_id = request_id
        self.contact_id = contact_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contact_id, 'contact_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContactId'] = self.contact_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.contact_id = map.get('ContactId')
        return self


class CreateAlertContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None, contact_ids=None, region_id=None, proxy_user_id=None):
        self.contact_group_name = contact_group_name
        self.contact_ids = contact_ids
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        result['ContactIds'] = self.contact_ids
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        self.contact_ids = map.get('ContactIds')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class CreateAlertContactGroupResponse(TeaModel):
    def __init__(self, request_id=None, contact_group_id=None):
        self.request_id = request_id
        self.contact_group_id = contact_group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contact_group_id, 'contact_group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContactGroupId'] = self.contact_group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.contact_group_id = map.get('ContactGroupId')
        return self


class SearchAlertContactRequest(TeaModel):
    def __init__(self, contact_name=None, phone=None, email=None, current_page=None, page_size=None, region_id=None, proxy_user_id=None):
        self.contact_name = contact_name
        self.phone = phone
        self.email = email
        self.current_page = current_page
        self.page_size = page_size
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.current_page, 'current_page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ContactName'] = self.contact_name
        result['Phone'] = self.phone
        result['Email'] = self.email
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.contact_name = map.get('ContactName')
        self.phone = map.get('Phone')
        self.email = map.get('Email')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class SearchAlertContactResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchAlertContactResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchAlertContactResponsePageBeanContacts(TeaModel):
    def __init__(self, contact_id=None, contact_name=None, phone=None, email=None, user_id=None, ding_robot=None, create_time=None, update_time=None, system_noc=None):
        self.contact_id = contact_id
        self.contact_name = contact_name
        self.phone = phone
        self.email = email
        self.user_id = user_id
        self.ding_robot = ding_robot
        self.create_time = create_time
        self.update_time = update_time
        self.system_noc = system_noc

    def validate(self):
        self.validate_required(self.contact_id, 'contact_id')
        self.validate_required(self.contact_name, 'contact_name')
        self.validate_required(self.phone, 'phone')
        self.validate_required(self.email, 'email')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.ding_robot, 'ding_robot')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.system_noc, 'system_noc')

    def to_map(self):
        result = {}
        result['ContactId'] = self.contact_id
        result['ContactName'] = self.contact_name
        result['Phone'] = self.phone
        result['Email'] = self.email
        result['UserId'] = self.user_id
        result['DingRobot'] = self.ding_robot
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['SystemNoc'] = self.system_noc
        return result

    def from_map(self, map={}):
        self.contact_id = map.get('ContactId')
        self.contact_name = map.get('ContactName')
        self.phone = map.get('Phone')
        self.email = map.get('Email')
        self.user_id = map.get('UserId')
        self.ding_robot = map.get('DingRobot')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.system_noc = map.get('SystemNoc')
        return self


class SearchAlertContactResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, contacts=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.contacts = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.contacts, 'contacts')
        if self.contacts:
            for k in self.contacts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Contacts'] = []
        if self.contacts is not None:
            for k in self.contacts:
                result['Contacts'].append(k.to_map() if k else None)
        else:
            result['Contacts'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.contacts = []
        if map.get('Contacts') is not None:
            for k in map.get('Contacts'):
                temp_model = SearchAlertContactResponsePageBeanContacts()
                temp_model = temp_model.from_map(k)
                self.contacts.append(temp_model)
        else:
            self.contacts = None
        return self


class SearchAlertContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None, region_id=None, proxy_user_id=None, contact_name=None, contact_id=None):
        self.contact_group_name = contact_group_name
        self.region_id = region_id
        self.proxy_user_id = proxy_user_id
        self.contact_name = contact_name
        self.contact_id = contact_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        result['RegionId'] = self.region_id
        result['ProxyUserId'] = self.proxy_user_id
        result['ContactName'] = self.contact_name
        result['ContactId'] = self.contact_id
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        self.region_id = map.get('RegionId')
        self.proxy_user_id = map.get('ProxyUserId')
        self.contact_name = map.get('ContactName')
        self.contact_id = map.get('ContactId')
        return self


class SearchAlertContactGroupResponse(TeaModel):
    def __init__(self, request_id=None, contact_groups=None):
        self.request_id = request_id
        self.contact_groups = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            for k in self.contact_groups:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ContactGroups'] = []
        if self.contact_groups is not None:
            for k in self.contact_groups:
                result['ContactGroups'].append(k.to_map() if k else None)
        else:
            result['ContactGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.contact_groups = []
        if map.get('ContactGroups') is not None:
            for k in map.get('ContactGroups'):
                temp_model = SearchAlertContactGroupResponseContactGroups()
                temp_model = temp_model.from_map(k)
                self.contact_groups.append(temp_model)
        else:
            self.contact_groups = None
        return self


class SearchAlertContactGroupResponseContactGroups(TeaModel):
    def __init__(self, contact_group_id=None, contact_group_name=None, user_id=None, create_time=None, update_time=None):
        self.contact_group_id = contact_group_id
        self.contact_group_name = contact_group_name
        self.user_id = user_id
        self.create_time = create_time
        self.update_time = update_time

    def validate(self):
        self.validate_required(self.contact_group_id, 'contact_group_id')
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')

    def to_map(self):
        result = {}
        result['ContactGroupId'] = self.contact_group_id
        result['ContactGroupName'] = self.contact_group_name
        result['UserId'] = self.user_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        return result

    def from_map(self, map={}):
        self.contact_group_id = map.get('ContactGroupId')
        self.contact_group_name = map.get('ContactGroupName')
        self.user_id = map.get('UserId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        return self


class ImportAppAlertRulesRequest(TeaModel):
    def __init__(self, template_alert_id=None, pids=None, region_id=None, contact_group_ids=None, is_auto_start=None, templage_alert_config=None, proxy_user_id=None):
        self.template_alert_id = template_alert_id
        self.pids = pids
        self.region_id = region_id
        self.contact_group_ids = contact_group_ids
        self.is_auto_start = is_auto_start
        self.templage_alert_config = templage_alert_config
        self.proxy_user_id = proxy_user_id

    def validate(self):
        self.validate_required(self.pids, 'pids')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['TemplateAlertId'] = self.template_alert_id
        result['Pids'] = self.pids
        result['RegionId'] = self.region_id
        result['ContactGroupIds'] = self.contact_group_ids
        result['IsAutoStart'] = self.is_auto_start
        result['TemplageAlertConfig'] = self.templage_alert_config
        result['ProxyUserId'] = self.proxy_user_id
        return result

    def from_map(self, map={}):
        self.template_alert_id = map.get('TemplateAlertId')
        self.pids = map.get('Pids')
        self.region_id = map.get('RegionId')
        self.contact_group_ids = map.get('ContactGroupIds')
        self.is_auto_start = map.get('IsAutoStart')
        self.templage_alert_config = map.get('TemplageAlertConfig')
        self.proxy_user_id = map.get('ProxyUserId')
        return self


class ImportAppAlertRulesResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class SearchRetcodeAppByPageRequest(TeaModel):
    def __init__(self, retcode_app_name=None, page_number=None, page_size=None, region_id=None):
        self.retcode_app_name = retcode_app_name
        self.page_number = page_number
        self.page_size = page_size
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RetcodeAppName'] = self.retcode_app_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.retcode_app_name = map.get('RetcodeAppName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        return self


class SearchRetcodeAppByPageResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchRetcodeAppByPageResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchRetcodeAppByPageResponsePageBeanRetcodeApps(TeaModel):
    def __init__(self, app_id=None, pid=None, app_name=None, type=None, user_id=None, region_id=None, create_time=None, update_time=None):
        self.app_id = app_id
        self.pid = pid
        self.app_name = app_name
        self.type = type
        self.user_id = user_id
        self.region_id = region_id
        self.create_time = create_time
        self.update_time = update_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['UserId'] = self.user_id
        result['RegionId'] = self.region_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.user_id = map.get('UserId')
        self.region_id = map.get('RegionId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        return self


class SearchRetcodeAppByPageResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, retcode_apps=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.retcode_apps = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.retcode_apps, 'retcode_apps')
        if self.retcode_apps:
            for k in self.retcode_apps:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RetcodeApps'] = []
        if self.retcode_apps is not None:
            for k in self.retcode_apps:
                result['RetcodeApps'].append(k.to_map() if k else None)
        else:
            result['RetcodeApps'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.retcode_apps = []
        if map.get('RetcodeApps') is not None:
            for k in map.get('RetcodeApps'):
                temp_model = SearchRetcodeAppByPageResponsePageBeanRetcodeApps()
                temp_model = temp_model.from_map(k)
                self.retcode_apps.append(temp_model)
        else:
            self.retcode_apps = None
        return self


class SearchTraceAppByNameRequest(TeaModel):
    def __init__(self, trace_app_name=None, region_id=None):
        self.trace_app_name = trace_app_name
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['TraceAppName'] = self.trace_app_name
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.trace_app_name = map.get('TraceAppName')
        self.region_id = map.get('RegionId')
        return self


class SearchTraceAppByNameResponse(TeaModel):
    def __init__(self, request_id=None, trace_apps=None):
        self.request_id = request_id
        self.trace_apps = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.trace_apps, 'trace_apps')
        if self.trace_apps:
            for k in self.trace_apps:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TraceApps'] = []
        if self.trace_apps is not None:
            for k in self.trace_apps:
                result['TraceApps'].append(k.to_map() if k else None)
        else:
            result['TraceApps'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.trace_apps = []
        if map.get('TraceApps') is not None:
            for k in map.get('TraceApps'):
                temp_model = SearchTraceAppByNameResponseTraceApps()
                temp_model = temp_model.from_map(k)
                self.trace_apps.append(temp_model)
        else:
            self.trace_apps = None
        return self


class SearchTraceAppByNameResponseTraceApps(TeaModel):
    def __init__(self, app_id=None, pid=None, app_name=None, type=None, user_id=None, region_id=None, create_time=None, update_time=None):
        self.app_id = app_id
        self.pid = pid
        self.app_name = app_name
        self.type = type
        self.user_id = user_id
        self.region_id = region_id
        self.create_time = create_time
        self.update_time = update_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['UserId'] = self.user_id
        result['RegionId'] = self.region_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.user_id = map.get('UserId')
        self.region_id = map.get('RegionId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        return self


class SearchTraceAppByPageRequest(TeaModel):
    def __init__(self, trace_app_name=None, page_number=None, page_size=None, region_id=None):
        self.trace_app_name = trace_app_name
        self.page_number = page_number
        self.page_size = page_size
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['TraceAppName'] = self.trace_app_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.trace_app_name = map.get('TraceAppName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.region_id = map.get('RegionId')
        return self


class SearchTraceAppByPageResponse(TeaModel):
    def __init__(self, request_id=None, page_bean=None):
        self.request_id = request_id
        self.page_bean = page_bean

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_bean, 'page_bean')
        if self.page_bean:
            self.page_bean.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.page_bean is not None:
            result['PageBean'] = self.page_bean.to_map()
        else:
            result['PageBean'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('PageBean') is not None:
            temp_model = SearchTraceAppByPageResponsePageBean()
            self.page_bean = temp_model.from_map(map['PageBean'])
        else:
            self.page_bean = None
        return self


class SearchTraceAppByPageResponsePageBeanTraceApps(TeaModel):
    def __init__(self, app_id=None, pid=None, app_name=None, type=None, user_id=None, region_id=None, create_time=None, update_time=None):
        self.app_id = app_id
        self.pid = pid
        self.app_name = app_name
        self.type = type
        self.user_id = user_id
        self.region_id = region_id
        self.create_time = create_time
        self.update_time = update_time

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['UserId'] = self.user_id
        result['RegionId'] = self.region_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.user_id = map.get('UserId')
        self.region_id = map.get('RegionId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        return self


class SearchTraceAppByPageResponsePageBean(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, trace_apps=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.trace_apps = []

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.trace_apps, 'trace_apps')
        if self.trace_apps:
            for k in self.trace_apps:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TraceApps'] = []
        if self.trace_apps is not None:
            for k in self.trace_apps:
                result['TraceApps'].append(k.to_map() if k else None)
        else:
            result['TraceApps'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.trace_apps = []
        if map.get('TraceApps') is not None:
            for k in map.get('TraceApps'):
                temp_model = SearchTraceAppByPageResponsePageBeanTraceApps()
                temp_model = temp_model.from_map(k)
                self.trace_apps.append(temp_model)
        else:
            self.trace_apps = None
        return self


class ListRetcodeAppsRequest(TeaModel):
    def __init__(self, security_token=None, region_id=None):
        self.security_token = security_token
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['SecurityToken'] = self.security_token
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.security_token = map.get('SecurityToken')
        self.region_id = map.get('RegionId')
        return self


class ListRetcodeAppsResponse(TeaModel):
    def __init__(self, request_id=None, retcode_apps=None):
        self.request_id = request_id
        self.retcode_apps = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.retcode_apps, 'retcode_apps')
        if self.retcode_apps:
            for k in self.retcode_apps:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RetcodeApps'] = []
        if self.retcode_apps is not None:
            for k in self.retcode_apps:
                result['RetcodeApps'].append(k.to_map() if k else None)
        else:
            result['RetcodeApps'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.retcode_apps = []
        if map.get('RetcodeApps') is not None:
            for k in map.get('RetcodeApps'):
                temp_model = ListRetcodeAppsResponseRetcodeApps()
                temp_model = temp_model.from_map(k)
                self.retcode_apps.append(temp_model)
        else:
            self.retcode_apps = None
        return self


class ListRetcodeAppsResponseRetcodeApps(TeaModel):
    def __init__(self, app_id=None, pid=None, app_name=None):
        self.app_id = app_id
        self.pid = pid
        self.app_name = app_name

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_name, 'app_name')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['AppName'] = self.app_name
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.app_name = map.get('AppName')
        return self


class ListTraceAppsRequest(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class ListTraceAppsResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, trace_apps=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.trace_apps = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.trace_apps, 'trace_apps')
        if self.trace_apps:
            for k in self.trace_apps:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['TraceApps'] = []
        if self.trace_apps is not None:
            for k in self.trace_apps:
                result['TraceApps'].append(k.to_map() if k else None)
        else:
            result['TraceApps'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.trace_apps = []
        if map.get('TraceApps') is not None:
            for k in map.get('TraceApps'):
                temp_model = ListTraceAppsResponseTraceApps()
                temp_model = temp_model.from_map(k)
                self.trace_apps.append(temp_model)
        else:
            self.trace_apps = None
        return self


class ListTraceAppsResponseTraceApps(TeaModel):
    def __init__(self, app_id=None, pid=None, app_name=None, type=None, user_id=None, create_time=None, update_time=None, region_id=None):
        self.app_id = app_id
        self.pid = pid
        self.app_name = app_name
        self.type = type
        self.user_id = user_id
        self.create_time = create_time
        self.update_time = update_time
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.pid, 'pid')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['Pid'] = self.pid
        result['AppName'] = self.app_name
        result['Type'] = self.type
        result['UserId'] = self.user_id
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.pid = map.get('Pid')
        self.app_name = map.get('AppName')
        self.type = map.get('Type')
        self.user_id = map.get('UserId')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.region_id = map.get('RegionId')
        return self

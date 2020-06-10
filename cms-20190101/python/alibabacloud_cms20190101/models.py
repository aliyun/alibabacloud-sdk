# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeExporterOutputListRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeExporterOutputListResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, total=None, page_number=None, success=None, datapoints=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.total = total
        self.page_number = page_number
        self.success = success
        self.datapoints = datapoints

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.success, 'success')
        self.validate_required(self.datapoints, 'datapoints')
        if self.datapoints:
            self.datapoints.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        result['PageNumber'] = self.page_number
        result['Success'] = self.success
        if self.datapoints is not None:
            result['Datapoints'] = self.datapoints.to_map()
        else:
            result['Datapoints'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        self.page_number = map.get('PageNumber')
        self.success = map.get('Success')
        if map.get('Datapoints') is not None:
            temp_model = DescribeExporterOutputListResponseDatapoints()
            self.datapoints = temp_model.from_map(map['Datapoints'])
        else:
            self.datapoints = None
        return self


class DescribeExporterOutputListResponseDatapointsDatapointConfigJson(TeaModel):
    def __init__(self, logstore=None, project=None, endpoint=None, as_=None, ak=None):
        self.logstore = logstore
        self.project = project
        self.endpoint = endpoint
        self.as_ = as_
        self.ak = ak

    def validate(self):
        self.validate_required(self.logstore, 'logstore')
        self.validate_required(self.project, 'project')
        self.validate_required(self.endpoint, 'endpoint')
        self.validate_required(self.as_, 'as_')
        self.validate_required(self.ak, 'ak')

    def to_map(self):
        result = {}
        result['logstore'] = self.logstore
        result['project'] = self.project
        result['endpoint'] = self.endpoint
        result['as'] = self.as_
        result['ak'] = self.ak
        return result

    def from_map(self, map={}):
        self.logstore = map.get('logstore')
        self.project = map.get('project')
        self.endpoint = map.get('endpoint')
        self.as_ = map.get('as')
        self.ak = map.get('ak')
        return self


class DescribeExporterOutputListResponseDatapointsDatapoint(TeaModel):
    def __init__(self, dest_name=None, dest_type=None, create_time=None, config_json=None):
        self.dest_name = dest_name
        self.dest_type = dest_type
        self.create_time = create_time
        self.config_json = config_json

    def validate(self):
        self.validate_required(self.dest_name, 'dest_name')
        self.validate_required(self.dest_type, 'dest_type')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.config_json, 'config_json')
        if self.config_json:
            self.config_json.validate()

    def to_map(self):
        result = {}
        result['DestName'] = self.dest_name
        result['DestType'] = self.dest_type
        result['CreateTime'] = self.create_time
        if self.config_json is not None:
            result['ConfigJson'] = self.config_json.to_map()
        else:
            result['ConfigJson'] = None
        return result

    def from_map(self, map={}):
        self.dest_name = map.get('DestName')
        self.dest_type = map.get('DestType')
        self.create_time = map.get('CreateTime')
        if map.get('ConfigJson') is not None:
            temp_model = DescribeExporterOutputListResponseDatapointsDatapointConfigJson()
            self.config_json = temp_model.from_map(map['ConfigJson'])
        else:
            self.config_json = None
        return self


class DescribeExporterOutputListResponseDatapoints(TeaModel):
    def __init__(self, datapoint=None):
        self.datapoint = []

    def validate(self):
        self.validate_required(self.datapoint, 'datapoint')
        if self.datapoint:
            for k in self.datapoint:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Datapoint'] = []
        if self.datapoint is not None:
            for k in self.datapoint:
                result['Datapoint'].append(k.to_map() if k else None)
        else:
            result['Datapoint'] = None
        return result

    def from_map(self, map={}):
        self.datapoint = []
        if map.get('Datapoint') is not None:
            for k in map.get('Datapoint'):
                temp_model = DescribeExporterOutputListResponseDatapointsDatapoint()
                temp_model = temp_model.from_map(k)
                self.datapoint.append(temp_model)
        else:
            self.datapoint = None
        return self


class DeleteExporterOutputRequest(TeaModel):
    def __init__(self, dest_name=None):
        self.dest_name = dest_name

    def validate(self):
        self.validate_required(self.dest_name, 'dest_name')

    def to_map(self):
        result = {}
        result['DestName'] = self.dest_name
        return result

    def from_map(self, map={}):
        self.dest_name = map.get('DestName')
        return self


class DeleteExporterOutputResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class PutExporterOutputRequest(TeaModel):
    def __init__(self, dest_name=None, config_json=None, desc=None, dest_type=None):
        self.dest_name = dest_name
        self.config_json = config_json
        self.desc = desc
        self.dest_type = dest_type

    def validate(self):
        self.validate_required(self.dest_name, 'dest_name')
        self.validate_required(self.config_json, 'config_json')

    def to_map(self):
        result = {}
        result['DestName'] = self.dest_name
        result['ConfigJson'] = self.config_json
        result['Desc'] = self.desc
        result['DestType'] = self.dest_type
        return result

    def from_map(self, map={}):
        self.dest_name = map.get('DestName')
        self.config_json = map.get('ConfigJson')
        self.desc = map.get('Desc')
        self.dest_type = map.get('DestType')
        return self


class PutExporterOutputResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class DescribeFolderListRequest(TeaModel):
    def __init__(self, app_name=None):
        self.app_name = app_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AppName'] = self.app_name
        return result

    def from_map(self, map={}):
        self.app_name = map.get('AppName')
        return self


class DescribeFolderListResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, page_number=None, page_size=None, total=None, resource=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.resource = resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resource, 'resource')
        if self.resource:
            self.resource.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        if self.resource is not None:
            result['Resource'] = self.resource.to_map()
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        if map.get('Resource') is not None:
            temp_model = DescribeFolderListResponseResource()
            self.resource = temp_model.from_map(map['Resource'])
        else:
            self.resource = None
        return self


class DescribeFolderListResponseResource(TeaModel):
    def __init__(self, name=None, service_id=None):
        self.name = name
        self.service_id = service_id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.service_id, 'service_id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['ServiceId'] = self.service_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.service_id = map.get('ServiceId')
        return self


class DeleteExporterRuleRequest(TeaModel):
    def __init__(self, rule_name=None):
        self.rule_name = rule_name

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        return self


class DeleteExporterRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class DescribeExporterRuleListRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeExporterRuleListResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, total=None, page_number=None, success=None, datapoints=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.total = total
        self.page_number = page_number
        self.success = success
        self.datapoints = datapoints

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.success, 'success')
        self.validate_required(self.datapoints, 'datapoints')
        if self.datapoints:
            self.datapoints.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        result['PageNumber'] = self.page_number
        result['Success'] = self.success
        if self.datapoints is not None:
            result['Datapoints'] = self.datapoints.to_map()
        else:
            result['Datapoints'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        self.page_number = map.get('PageNumber')
        self.success = map.get('Success')
        if map.get('Datapoints') is not None:
            temp_model = DescribeExporterRuleListResponseDatapoints()
            self.datapoints = temp_model.from_map(map['Datapoints'])
        else:
            self.datapoints = None
        return self


class DescribeExporterRuleListResponseDatapointsDatapointDstName(TeaModel):
    def __init__(self, dst_name=None):
        self.dst_name = []

    def validate(self):
        self.validate_required(self.dst_name, 'dst_name')

    def to_map(self):
        result = {}
        result['DstName'] = []
        if self.dst_name is not None:
            for k in self.dst_name:
                result['DstName'].append(k)
        else:
            result['DstName'] = None
        return result

    def from_map(self, map={}):
        self.dst_name = []
        if map.get('DstName') is not None:
            for k in map.get('DstName'):
                self.dst_name.append(k)
        else:
            self.dst_name = None
        return self


class DescribeExporterRuleListResponseDatapointsDatapoint(TeaModel):
    def __init__(self, rule_name=None, namespace=None, metric_name=None, enabled=None, target_windows=None, describe=None, dimension=None, create_time=None, dst_name=None):
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.enabled = enabled
        self.target_windows = target_windows
        self.describe = describe
        self.dimension = dimension
        self.create_time = create_time
        self.dst_name = dst_name

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.enabled, 'enabled')
        self.validate_required(self.target_windows, 'target_windows')
        self.validate_required(self.describe, 'describe')
        self.validate_required(self.dimension, 'dimension')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.dst_name, 'dst_name')
        if self.dst_name:
            self.dst_name.validate()

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Enabled'] = self.enabled
        result['TargetWindows'] = self.target_windows
        result['Describe'] = self.describe
        result['Dimension'] = self.dimension
        result['CreateTime'] = self.create_time
        if self.dst_name is not None:
            result['DstName'] = self.dst_name.to_map()
        else:
            result['DstName'] = None
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.enabled = map.get('Enabled')
        self.target_windows = map.get('TargetWindows')
        self.describe = map.get('Describe')
        self.dimension = map.get('Dimension')
        self.create_time = map.get('CreateTime')
        if map.get('DstName') is not None:
            temp_model = DescribeExporterRuleListResponseDatapointsDatapointDstName()
            self.dst_name = temp_model.from_map(map['DstName'])
        else:
            self.dst_name = None
        return self


class DescribeExporterRuleListResponseDatapoints(TeaModel):
    def __init__(self, datapoint=None):
        self.datapoint = []

    def validate(self):
        self.validate_required(self.datapoint, 'datapoint')
        if self.datapoint:
            for k in self.datapoint:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Datapoint'] = []
        if self.datapoint is not None:
            for k in self.datapoint:
                result['Datapoint'].append(k.to_map() if k else None)
        else:
            result['Datapoint'] = None
        return result

    def from_map(self, map={}):
        self.datapoint = []
        if map.get('Datapoint') is not None:
            for k in map.get('Datapoint'):
                temp_model = DescribeExporterRuleListResponseDatapointsDatapoint()
                temp_model = temp_model.from_map(k)
                self.datapoint.append(temp_model)
        else:
            self.datapoint = None
        return self


class PutExporterRuleRequest(TeaModel):
    def __init__(self, rule_name=None, dst_names=None, namespace=None, metric_name=None, target_windows=None, describe=None):
        self.rule_name = rule_name
        self.dst_names = []
        self.namespace = namespace
        self.metric_name = metric_name
        self.target_windows = target_windows
        self.describe = describe

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['DstNames'] = []
        if self.dst_names is not None:
            for k in self.dst_names:
                result['DstNames'].append(k)
        else:
            result['DstNames'] = None
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['TargetWindows'] = self.target_windows
        result['Describe'] = self.describe
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.dst_names = []
        if map.get('DstNames') is not None:
            for k in map.get('DstNames'):
                self.dst_names.append(k)
        else:
            self.dst_names = None
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.target_windows = map.get('TargetWindows')
        self.describe = map.get('Describe')
        return self


class PutExporterRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class DescribeDynamicTagRuleListRequest(TeaModel):
    def __init__(self, tag_key=None, page_number=None, page_size=None):
        self.tag_key = tag_key
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeDynamicTagRuleListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, total=None, page_number=None, page_size=None, tag_group_list=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.total = total
        self.page_number = page_number
        self.page_size = page_size
        self.tag_group_list = tag_group_list

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.tag_group_list, 'tag_group_list')
        if self.tag_group_list:
            self.tag_group_list.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.tag_group_list is not None:
            result['TagGroupList'] = self.tag_group_list.to_map()
        else:
            result['TagGroupList'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('TagGroupList') is not None:
            temp_model = DescribeDynamicTagRuleListResponseTagGroupList()
            self.tag_group_list = temp_model.from_map(map['TagGroupList'])
        else:
            self.tag_group_list = None
        return self


class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress(TeaModel):
    def __init__(self, tag_value_match_function=None, tag_value=None):
        self.tag_value_match_function = tag_value_match_function
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.tag_value_match_function, 'tag_value_match_function')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['TagValueMatchFunction'] = self.tag_value_match_function
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.tag_value_match_function = map.get('TagValueMatchFunction')
        self.tag_value = map.get('TagValue')
        return self


class DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress(TeaModel):
    def __init__(self, match_express=None):
        self.match_express = []

    def validate(self):
        self.validate_required(self.match_express, 'match_express')
        if self.match_express:
            for k in self.match_express:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MatchExpress'] = []
        if self.match_express is not None:
            for k in self.match_express:
                result['MatchExpress'].append(k.to_map() if k else None)
        else:
            result['MatchExpress'] = None
        return result

    def from_map(self, map={}):
        self.match_express = []
        if map.get('MatchExpress') is not None:
            for k in map.get('MatchExpress'):
                temp_model = DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpressMatchExpress()
                temp_model = temp_model.from_map(k)
                self.match_express.append(temp_model)
        else:
            self.match_express = None
        return self


class DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList(TeaModel):
    def __init__(self, template_id_list=None):
        self.template_id_list = []

    def validate(self):
        self.validate_required(self.template_id_list, 'template_id_list')

    def to_map(self):
        result = {}
        result['TemplateIdList'] = []
        if self.template_id_list is not None:
            for k in self.template_id_list:
                result['TemplateIdList'].append(k)
        else:
            result['TemplateIdList'] = None
        return result

    def from_map(self, map={}):
        self.template_id_list = []
        if map.get('TemplateIdList') is not None:
            for k in map.get('TemplateIdList'):
                self.template_id_list.append(k)
        else:
            self.template_id_list = None
        return self


class DescribeDynamicTagRuleListResponseTagGroupListTagGroup(TeaModel):
    def __init__(self, dynamic_tag_rule_id=None, tag_key=None, region_id=None, match_express_filter_relation=None, status=None, match_express=None, template_id_list=None):
        self.dynamic_tag_rule_id = dynamic_tag_rule_id
        self.tag_key = tag_key
        self.region_id = region_id
        self.match_express_filter_relation = match_express_filter_relation
        self.status = status
        self.match_express = match_express
        self.template_id_list = template_id_list

    def validate(self):
        self.validate_required(self.dynamic_tag_rule_id, 'dynamic_tag_rule_id')
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.match_express_filter_relation, 'match_express_filter_relation')
        self.validate_required(self.status, 'status')
        self.validate_required(self.match_express, 'match_express')
        if self.match_express:
            self.match_express.validate()
        self.validate_required(self.template_id_list, 'template_id_list')
        if self.template_id_list:
            self.template_id_list.validate()

    def to_map(self):
        result = {}
        result['DynamicTagRuleId'] = self.dynamic_tag_rule_id
        result['TagKey'] = self.tag_key
        result['RegionId'] = self.region_id
        result['MatchExpressFilterRelation'] = self.match_express_filter_relation
        result['Status'] = self.status
        if self.match_express is not None:
            result['MatchExpress'] = self.match_express.to_map()
        else:
            result['MatchExpress'] = None
        if self.template_id_list is not None:
            result['TemplateIdList'] = self.template_id_list.to_map()
        else:
            result['TemplateIdList'] = None
        return result

    def from_map(self, map={}):
        self.dynamic_tag_rule_id = map.get('DynamicTagRuleId')
        self.tag_key = map.get('TagKey')
        self.region_id = map.get('RegionId')
        self.match_express_filter_relation = map.get('MatchExpressFilterRelation')
        self.status = map.get('Status')
        if map.get('MatchExpress') is not None:
            temp_model = DescribeDynamicTagRuleListResponseTagGroupListTagGroupMatchExpress()
            self.match_express = temp_model.from_map(map['MatchExpress'])
        else:
            self.match_express = None
        if map.get('TemplateIdList') is not None:
            temp_model = DescribeDynamicTagRuleListResponseTagGroupListTagGroupTemplateIdList()
            self.template_id_list = temp_model.from_map(map['TemplateIdList'])
        else:
            self.template_id_list = None
        return self


class DescribeDynamicTagRuleListResponseTagGroupList(TeaModel):
    def __init__(self, tag_group=None):
        self.tag_group = []

    def validate(self):
        self.validate_required(self.tag_group, 'tag_group')
        if self.tag_group:
            for k in self.tag_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TagGroup'] = []
        if self.tag_group is not None:
            for k in self.tag_group:
                result['TagGroup'].append(k.to_map() if k else None)
        else:
            result['TagGroup'] = None
        return result

    def from_map(self, map={}):
        self.tag_group = []
        if map.get('TagGroup') is not None:
            for k in map.get('TagGroup'):
                temp_model = DescribeDynamicTagRuleListResponseTagGroupListTagGroup()
                temp_model = temp_model.from_map(k)
                self.tag_group.append(temp_model)
        else:
            self.tag_group = None
        return self


class DescribeProductResourceTagKeyListRequest(TeaModel):
    def __init__(self, next_token=None):
        self.next_token = next_token

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.next_token = map.get('NextToken')
        return self


class DescribeProductResourceTagKeyListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, next_token=None, tag_keys=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.next_token = next_token
        self.tag_keys = tag_keys

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.tag_keys, 'tag_keys')
        if self.tag_keys:
            self.tag_keys.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        if self.tag_keys is not None:
            result['TagKeys'] = self.tag_keys.to_map()
        else:
            result['TagKeys'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        if map.get('TagKeys') is not None:
            temp_model = DescribeProductResourceTagKeyListResponseTagKeys()
            self.tag_keys = temp_model.from_map(map['TagKeys'])
        else:
            self.tag_keys = None
        return self


class DescribeProductResourceTagKeyListResponseTagKeys(TeaModel):
    def __init__(self, tag_key=None):
        self.tag_key = []

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')

    def to_map(self):
        result = {}
        result['TagKey'] = []
        if self.tag_key is not None:
            for k in self.tag_key:
                result['TagKey'].append(k)
        else:
            result['TagKey'] = None
        return result

    def from_map(self, map={}):
        self.tag_key = []
        if map.get('TagKey') is not None:
            for k in map.get('TagKey'):
                self.tag_key.append(k)
        else:
            self.tag_key = None
        return self


class CreateDynamicTagGroupRequest(TeaModel):
    def __init__(self, tag_key=None, enable_subscribe_event=None, enable_install_agent=None, region_id=None, match_express_filter_relation=None, match_express=None, contact_group_list=None, template_id_list=None):
        self.tag_key = tag_key
        self.enable_subscribe_event = enable_subscribe_event
        self.enable_install_agent = enable_install_agent
        self.region_id = region_id
        self.match_express_filter_relation = match_express_filter_relation
        self.match_express = []
        self.contact_group_list = []
        self.template_id_list = []

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.region_id, 'region_id')
        if self.match_express:
            for k in self.match_express:
                if k :
                    k.validate()
        self.validate_required(self.contact_group_list, 'contact_group_list')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['EnableSubscribeEvent'] = self.enable_subscribe_event
        result['EnableInstallAgent'] = self.enable_install_agent
        result['RegionId'] = self.region_id
        result['MatchExpressFilterRelation'] = self.match_express_filter_relation
        result['MatchExpress'] = []
        if self.match_express is not None:
            for k in self.match_express:
                result['MatchExpress'].append(k.to_map() if k else None)
        else:
            result['MatchExpress'] = None
        result['ContactGroupList'] = []
        if self.contact_group_list is not None:
            for k in self.contact_group_list:
                result['ContactGroupList'].append(k)
        else:
            result['ContactGroupList'] = None
        result['TemplateIdList'] = []
        if self.template_id_list is not None:
            for k in self.template_id_list:
                result['TemplateIdList'].append(k)
        else:
            result['TemplateIdList'] = None
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.enable_subscribe_event = map.get('EnableSubscribeEvent')
        self.enable_install_agent = map.get('EnableInstallAgent')
        self.region_id = map.get('RegionId')
        self.match_express_filter_relation = map.get('MatchExpressFilterRelation')
        self.match_express = []
        if map.get('MatchExpress') is not None:
            for k in map.get('MatchExpress'):
                temp_model = CreateDynamicTagGroupRequestMatchExpress()
                temp_model = temp_model.from_map(k)
                self.match_express.append(temp_model)
        else:
            self.match_express = None
        self.contact_group_list = []
        if map.get('ContactGroupList') is not None:
            for k in map.get('ContactGroupList'):
                self.contact_group_list.append(k)
        else:
            self.contact_group_list = None
        self.template_id_list = []
        if map.get('TemplateIdList') is not None:
            for k in map.get('TemplateIdList'):
                self.template_id_list.append(k)
        else:
            self.template_id_list = None
        return self


class CreateDynamicTagGroupRequestMatchExpress(TeaModel):
    def __init__(self, tag_value_match_function=None, tag_value=None):
        self.tag_value_match_function = tag_value_match_function
        self.tag_value = tag_value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TagValueMatchFunction'] = self.tag_value_match_function
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.tag_value_match_function = map.get('TagValueMatchFunction')
        self.tag_value = map.get('TagValue')
        return self


class CreateDynamicTagGroupResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DeleteDynamicTagGroupRequest(TeaModel):
    def __init__(self, dynamic_tag_rule_id=None):
        self.dynamic_tag_rule_id = dynamic_tag_rule_id

    def validate(self):
        self.validate_required(self.dynamic_tag_rule_id, 'dynamic_tag_rule_id')

    def to_map(self):
        result = {}
        result['DynamicTagRuleId'] = self.dynamic_tag_rule_id
        return result

    def from_map(self, map={}):
        self.dynamic_tag_rule_id = map.get('DynamicTagRuleId')
        return self


class DeleteDynamicTagGroupResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class ModifyGroupMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, id=None, group_id=None, match_express_filter_relation=None, alert_config=None):
        self.id = id
        self.group_id = group_id
        self.match_express_filter_relation = match_express_filter_relation
        self.alert_config = []

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            for k in self.alert_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['GroupId'] = self.group_id
        result['MatchExpressFilterRelation'] = self.match_express_filter_relation
        result['AlertConfig'] = []
        if self.alert_config is not None:
            for k in self.alert_config:
                result['AlertConfig'].append(k.to_map() if k else None)
        else:
            result['AlertConfig'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.group_id = map.get('GroupId')
        self.match_express_filter_relation = map.get('MatchExpressFilterRelation')
        self.alert_config = []
        if map.get('AlertConfig') is not None:
            for k in map.get('AlertConfig'):
                temp_model = ModifyGroupMonitoringAgentProcessRequestAlertConfig()
                temp_model = temp_model.from_map(k)
                self.alert_config.append(temp_model)
        else:
            self.alert_config = None
        return self


class ModifyGroupMonitoringAgentProcessRequestAlertConfig(TeaModel):
    def __init__(self, effective_interval=None, no_effective_interval=None, silence_time=None, webhook=None, escalations_level=None, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.webhook = webhook
        self.escalations_level = escalations_level
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.effective_interval, 'effective_interval')
        self.validate_required(self.no_effective_interval, 'no_effective_interval')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations_level, 'escalations_level')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Webhook'] = self.webhook
        result['EscalationsLevel'] = self.escalations_level
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.webhook = map.get('Webhook')
        self.escalations_level = map.get('EscalationsLevel')
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class ModifyGroupMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DeleteGroupMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, group_id=None, id=None):
        self.group_id = group_id
        self.id = id

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.id = map.get('Id')
        return self


class DeleteGroupMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class CreateGroupMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, group_id=None, process_name=None, match_express_filter_relation=None, match_express=None, alert_config=None):
        self.group_id = group_id
        self.process_name = process_name
        self.match_express_filter_relation = match_express_filter_relation
        self.match_express = []
        self.alert_config = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        if self.match_express:
            for k in self.match_express:
                if k :
                    k.validate()
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            for k in self.alert_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['ProcessName'] = self.process_name
        result['MatchExpressFilterRelation'] = self.match_express_filter_relation
        result['MatchExpress'] = []
        if self.match_express is not None:
            for k in self.match_express:
                result['MatchExpress'].append(k.to_map() if k else None)
        else:
            result['MatchExpress'] = None
        result['AlertConfig'] = []
        if self.alert_config is not None:
            for k in self.alert_config:
                result['AlertConfig'].append(k.to_map() if k else None)
        else:
            result['AlertConfig'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.process_name = map.get('ProcessName')
        self.match_express_filter_relation = map.get('MatchExpressFilterRelation')
        self.match_express = []
        if map.get('MatchExpress') is not None:
            for k in map.get('MatchExpress'):
                temp_model = CreateGroupMonitoringAgentProcessRequestMatchExpress()
                temp_model = temp_model.from_map(k)
                self.match_express.append(temp_model)
        else:
            self.match_express = None
        self.alert_config = []
        if map.get('AlertConfig') is not None:
            for k in map.get('AlertConfig'):
                temp_model = CreateGroupMonitoringAgentProcessRequestAlertConfig()
                temp_model = temp_model.from_map(k)
                self.alert_config.append(temp_model)
        else:
            self.alert_config = None
        return self


class CreateGroupMonitoringAgentProcessRequestMatchExpress(TeaModel):
    def __init__(self, name=None, function=None, value=None):
        self.name = name
        self.function = function
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Function'] = self.function
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.function = map.get('Function')
        self.value = map.get('Value')
        return self


class CreateGroupMonitoringAgentProcessRequestAlertConfig(TeaModel):
    def __init__(self, effective_interval=None, no_effective_interval=None, silence_time=None, webhook=None, escalations_level=None, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.webhook = webhook
        self.escalations_level = escalations_level
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.effective_interval, 'effective_interval')
        self.validate_required(self.no_effective_interval, 'no_effective_interval')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations_level, 'escalations_level')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Webhook'] = self.webhook
        result['EscalationsLevel'] = self.escalations_level
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.webhook = map.get('Webhook')
        self.escalations_level = map.get('EscalationsLevel')
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateGroupMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeTagKeyListRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeTagKeyListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, tag_keys=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.tag_keys = tag_keys

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.tag_keys, 'tag_keys')
        if self.tag_keys:
            self.tag_keys.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.tag_keys is not None:
            result['TagKeys'] = self.tag_keys.to_map()
        else:
            result['TagKeys'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('TagKeys') is not None:
            temp_model = DescribeTagKeyListResponseTagKeys()
            self.tag_keys = temp_model.from_map(map['TagKeys'])
        else:
            self.tag_keys = None
        return self


class DescribeTagKeyListResponseTagKeys(TeaModel):
    def __init__(self, tag_key=None):
        self.tag_key = []

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')

    def to_map(self):
        result = {}
        result['TagKey'] = []
        if self.tag_key is not None:
            for k in self.tag_key:
                result['TagKey'].append(k)
        else:
            result['TagKey'] = None
        return result

    def from_map(self, map={}):
        self.tag_key = []
        if map.get('TagKey') is not None:
            for k in map.get('TagKey'):
                self.tag_key.append(k)
        else:
            self.tag_key = None
        return self


class DescribeTagValueListRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, tag_key=None):
        self.page_number = page_number
        self.page_size = page_size
        self.tag_key = tag_key

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TagKey'] = self.tag_key
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.tag_key = map.get('TagKey')
        return self


class DescribeTagValueListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, tag_values=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.tag_values = tag_values

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.tag_values, 'tag_values')
        if self.tag_values:
            self.tag_values.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.tag_values is not None:
            result['TagValues'] = self.tag_values.to_map()
        else:
            result['TagValues'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('TagValues') is not None:
            temp_model = DescribeTagValueListResponseTagValues()
            self.tag_values = temp_model.from_map(map['TagValues'])
        else:
            self.tag_values = None
        return self


class DescribeTagValueListResponseTagValues(TeaModel):
    def __init__(self, tag_value=None):
        self.tag_value = []

    def validate(self):
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['TagValue'] = []
        if self.tag_value is not None:
            for k in self.tag_value:
                result['TagValue'].append(k)
        else:
            result['TagValue'] = None
        return result

    def from_map(self, map={}):
        self.tag_value = []
        if map.get('TagValue') is not None:
            for k in map.get('TagValue'):
                self.tag_value.append(k)
        else:
            self.tag_value = None
        return self


class RemoveTagsRequest(TeaModel):
    def __init__(self, tag=None, group_ids=None):
        self.tag = []
        self.group_ids = []

    def validate(self):
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        self.validate_required(self.group_ids, 'group_ids')

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['GroupIds'] = []
        if self.group_ids is not None:
            for k in self.group_ids:
                result['GroupIds'].append(k)
        else:
            result['GroupIds'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = RemoveTagsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.group_ids = []
        if map.get('GroupIds') is not None:
            for k in map.get('GroupIds'):
                self.group_ids.append(k)
        else:
            self.group_ids = None
        return self


class RemoveTagsRequestTag(TeaModel):
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


class RemoveTagsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, tag=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.tag = tag

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            self.tag.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.tag is not None:
            result['Tag'] = self.tag.to_map()
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Tag') is not None:
            temp_model = RemoveTagsResponseTag()
            self.tag = temp_model.from_map(map['Tag'])
        else:
            self.tag = None
        return self


class RemoveTagsResponseTag(TeaModel):
    def __init__(self, tags=None):
        self.tags = []

    def validate(self):
        self.validate_required(self.tags, 'tags')

    def to_map(self):
        result = {}
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                self.tags.append(k)
        else:
            self.tags = None
        return self


class AddTagsRequest(TeaModel):
    def __init__(self, tag=None, group_ids=None):
        self.tag = []
        self.group_ids = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        self.validate_required(self.group_ids, 'group_ids')

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['GroupIds'] = []
        if self.group_ids is not None:
            for k in self.group_ids:
                result['GroupIds'].append(k)
        else:
            result['GroupIds'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = AddTagsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.group_ids = []
        if map.get('GroupIds') is not None:
            for k in map.get('GroupIds'):
                self.group_ids.append(k)
        else:
            self.group_ids = None
        return self


class AddTagsRequestTag(TeaModel):
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


class AddTagsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeGroupMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, group_id=None, process_name=None, page_number=None, page_size=None):
        self.group_id = group_id
        self.process_name = process_name
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['ProcessName'] = self.process_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.process_name = map.get('ProcessName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeGroupMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, total=None, page_size=None, page_number=None, processes=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.total = total
        self.page_size = page_size
        self.page_number = page_number
        self.processes = processes

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.processes, 'processes')
        if self.processes:
            self.processes.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.processes is not None:
            result['Processes'] = self.processes.to_map()
        else:
            result['Processes'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Processes') is not None:
            temp_model = DescribeGroupMonitoringAgentProcessResponseProcesses()
            self.processes = temp_model.from_map(map['Processes'])
        else:
            self.processes = None
        return self


class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress(TeaModel):
    def __init__(self, name=None, function=None, value=None):
        self.name = name
        self.function = function
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.function, 'function')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Function'] = self.function
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.function = map.get('Function')
        self.value = map.get('Value')
        return self


class DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress(TeaModel):
    def __init__(self, match_express=None):
        self.match_express = []

    def validate(self):
        self.validate_required(self.match_express, 'match_express')
        if self.match_express:
            for k in self.match_express:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MatchExpress'] = []
        if self.match_express is not None:
            for k in self.match_express:
                result['MatchExpress'].append(k.to_map() if k else None)
        else:
            result['MatchExpress'] = None
        return result

    def from_map(self, map={}):
        self.match_express = []
        if map.get('MatchExpress') is not None:
            for k in map.get('MatchExpress'):
                temp_model = DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpressMatchExpress()
                temp_model = temp_model.from_map(k)
                self.match_express.append(temp_model)
        else:
            self.match_express = None
        return self


class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig(TeaModel):
    def __init__(self, effective_interval=None, no_effective_interval=None, silence_time=None, webhook=None, escalations_level=None, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.webhook = webhook
        self.escalations_level = escalations_level
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.effective_interval, 'effective_interval')
        self.validate_required(self.no_effective_interval, 'no_effective_interval')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations_level, 'escalations_level')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Webhook'] = self.webhook
        result['EscalationsLevel'] = self.escalations_level
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.webhook = map.get('Webhook')
        self.escalations_level = map.get('EscalationsLevel')
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig(TeaModel):
    def __init__(self, alert_config=None):
        self.alert_config = []

    def validate(self):
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            for k in self.alert_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AlertConfig'] = []
        if self.alert_config is not None:
            for k in self.alert_config:
                result['AlertConfig'].append(k.to_map() if k else None)
        else:
            result['AlertConfig'] = None
        return result

    def from_map(self, map={}):
        self.alert_config = []
        if map.get('AlertConfig') is not None:
            for k in map.get('AlertConfig'):
                temp_model = DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfigAlertConfig()
                temp_model = temp_model.from_map(k)
                self.alert_config.append(temp_model)
        else:
            self.alert_config = None
        return self


class DescribeGroupMonitoringAgentProcessResponseProcessesProcess(TeaModel):
    def __init__(self, id=None, group_id=None, process_name=None, match_express_filter_relation=None, match_express=None, alert_config=None):
        self.id = id
        self.group_id = group_id
        self.process_name = process_name
        self.match_express_filter_relation = match_express_filter_relation
        self.match_express = match_express
        self.alert_config = alert_config

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.process_name, 'process_name')
        self.validate_required(self.match_express_filter_relation, 'match_express_filter_relation')
        self.validate_required(self.match_express, 'match_express')
        if self.match_express:
            self.match_express.validate()
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            self.alert_config.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['GroupId'] = self.group_id
        result['ProcessName'] = self.process_name
        result['MatchExpressFilterRelation'] = self.match_express_filter_relation
        if self.match_express is not None:
            result['MatchExpress'] = self.match_express.to_map()
        else:
            result['MatchExpress'] = None
        if self.alert_config is not None:
            result['AlertConfig'] = self.alert_config.to_map()
        else:
            result['AlertConfig'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.group_id = map.get('GroupId')
        self.process_name = map.get('ProcessName')
        self.match_express_filter_relation = map.get('MatchExpressFilterRelation')
        if map.get('MatchExpress') is not None:
            temp_model = DescribeGroupMonitoringAgentProcessResponseProcessesProcessMatchExpress()
            self.match_express = temp_model.from_map(map['MatchExpress'])
        else:
            self.match_express = None
        if map.get('AlertConfig') is not None:
            temp_model = DescribeGroupMonitoringAgentProcessResponseProcessesProcessAlertConfig()
            self.alert_config = temp_model.from_map(map['AlertConfig'])
        else:
            self.alert_config = None
        return self


class DescribeGroupMonitoringAgentProcessResponseProcesses(TeaModel):
    def __init__(self, process=None):
        self.process = []

    def validate(self):
        self.validate_required(self.process, 'process')
        if self.process:
            for k in self.process:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Process'] = []
        if self.process is not None:
            for k in self.process:
                result['Process'].append(k.to_map() if k else None)
        else:
            result['Process'] = None
        return result

    def from_map(self, map={}):
        self.process = []
        if map.get('Process') is not None:
            for k in map.get('Process'):
                temp_model = DescribeGroupMonitoringAgentProcessResponseProcessesProcess()
                temp_model = temp_model.from_map(k)
                self.process.append(temp_model)
        else:
            self.process = None
        return self


class PutResourceMetricRulesRequest(TeaModel):
    def __init__(self, rules=None):
        self.rules = []

    def validate(self):
        self.validate_required(self.rules, 'rules')
        if self.rules:
            for k in self.rules:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Rules'] = []
        if self.rules is not None:
            for k in self.rules:
                result['Rules'].append(k.to_map() if k else None)
        else:
            result['Rules'] = None
        return result

    def from_map(self, map={}):
        self.rules = []
        if map.get('Rules') is not None:
            for k in map.get('Rules'):
                temp_model = PutResourceMetricRulesRequestRules()
                temp_model = temp_model.from_map(k)
                self.rules.append(temp_model)
        else:
            self.rules = None
        return self


class PutResourceMetricRulesRequestRulesEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRulesRequestRulesEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRulesRequestRulesEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRulesRequestRulesEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = PutResourceMetricRulesRequestRulesEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = PutResourceMetricRulesRequestRulesEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = PutResourceMetricRulesRequestRulesEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class PutResourceMetricRulesRequestRules(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, namespace=None, metric_name=None, resources=None, contact_groups=None, webhook=None, effective_interval=None, no_effective_interval=None, silence_time=None, period=None, interval=None, email_subject=None, escalations=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.resources = resources
        self.contact_groups = contact_groups
        self.webhook = webhook
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.period = period
        self.interval = interval
        self.email_subject = email_subject
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.resources, 'resources')
        self.validate_required(self.contact_groups, 'contact_groups')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Resources'] = self.resources
        result['ContactGroups'] = self.contact_groups
        result['Webhook'] = self.webhook
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Period'] = self.period
        result['Interval'] = self.interval
        result['EmailSubject'] = self.email_subject
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.resources = map.get('Resources')
        self.contact_groups = map.get('ContactGroups')
        self.webhook = map.get('Webhook')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.period = map.get('Period')
        self.interval = map.get('Interval')
        self.email_subject = map.get('EmailSubject')
        if map.get('Escalations') is not None:
            temp_model = PutResourceMetricRulesRequestRulesEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class PutResourceMetricRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, failed_list_result=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.failed_list_result = failed_list_result

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.failed_list_result, 'failed_list_result')
        if self.failed_list_result:
            self.failed_list_result.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.failed_list_result is not None:
            result['FailedListResult'] = self.failed_list_result.to_map()
        else:
            result['FailedListResult'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('FailedListResult') is not None:
            temp_model = PutResourceMetricRulesResponseFailedListResult()
            self.failed_list_result = temp_model.from_map(map['FailedListResult'])
        else:
            self.failed_list_result = None
        return self


class PutResourceMetricRulesResponseFailedListResultTargetResult(TeaModel):
    def __init__(self, code=None, message=None, success=None):
        self.code = code
        self.message = message
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        return self


class PutResourceMetricRulesResponseFailedListResultTarget(TeaModel):
    def __init__(self, rule_id=None, result=None):
        self.rule_id = rule_id
        self.result = result

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.result, 'result')
        if self.result:
            self.result.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        if self.result is not None:
            result['Result'] = self.result.to_map()
        else:
            result['Result'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        if map.get('Result') is not None:
            temp_model = PutResourceMetricRulesResponseFailedListResultTargetResult()
            self.result = temp_model.from_map(map['Result'])
        else:
            self.result = None
        return self


class PutResourceMetricRulesResponseFailedListResult(TeaModel):
    def __init__(self, target=None):
        self.target = []

    def validate(self):
        self.validate_required(self.target, 'target')
        if self.target:
            for k in self.target:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Target'] = []
        if self.target is not None:
            for k in self.target:
                result['Target'].append(k.to_map() if k else None)
        else:
            result['Target'] = None
        return result

    def from_map(self, map={}):
        self.target = []
        if map.get('Target') is not None:
            for k in map.get('Target'):
                temp_model = PutResourceMetricRulesResponseFailedListResultTarget()
                temp_model = temp_model.from_map(k)
                self.target.append(temp_model)
        else:
            self.target = None
        return self


class CreateMetricRuleResourcesRequest(TeaModel):
    def __init__(self, rule_id=None, overwrite=None, resources=None):
        self.rule_id = rule_id
        self.overwrite = overwrite
        self.resources = resources

    def validate(self):
        self.validate_required(self.resources, 'resources')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Overwrite'] = self.overwrite
        result['Resources'] = self.resources
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.overwrite = map.get('Overwrite')
        self.resources = map.get('Resources')
        return self


class CreateMetricRuleResourcesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DeleteMetricRuleResourcesRequest(TeaModel):
    def __init__(self, rule_id=None, resources=None):
        self.rule_id = rule_id
        self.resources = resources

    def validate(self):
        self.validate_required(self.resources, 'resources')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Resources'] = self.resources
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.resources = map.get('Resources')
        return self


class DeleteMetricRuleResourcesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DeleteMetricRuleTargetsRequest(TeaModel):
    def __init__(self, rule_id=None, target_ids=None):
        self.rule_id = rule_id
        self.target_ids = []

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['TargetIds'] = []
        if self.target_ids is not None:
            for k in self.target_ids:
                result['TargetIds'].append(k)
        else:
            result['TargetIds'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.target_ids = []
        if map.get('TargetIds') is not None:
            for k in map.get('TargetIds'):
                self.target_ids.append(k)
        else:
            self.target_ids = None
        return self


class DeleteMetricRuleTargetsResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, fail_ids=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.fail_ids = fail_ids

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.fail_ids, 'fail_ids')
        if self.fail_ids:
            self.fail_ids.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.fail_ids is not None:
            result['FailIds'] = self.fail_ids.to_map()
        else:
            result['FailIds'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('FailIds') is not None:
            temp_model = DeleteMetricRuleTargetsResponseFailIds()
            self.fail_ids = temp_model.from_map(map['FailIds'])
        else:
            self.fail_ids = None
        return self


class DeleteMetricRuleTargetsResponseFailIdsTargetIds(TeaModel):
    def __init__(self, target_id=None):
        self.target_id = []

    def validate(self):
        self.validate_required(self.target_id, 'target_id')

    def to_map(self):
        result = {}
        result['TargetId'] = []
        if self.target_id is not None:
            for k in self.target_id:
                result['TargetId'].append(k)
        else:
            result['TargetId'] = None
        return result

    def from_map(self, map={}):
        self.target_id = []
        if map.get('TargetId') is not None:
            for k in map.get('TargetId'):
                self.target_id.append(k)
        else:
            self.target_id = None
        return self


class DeleteMetricRuleTargetsResponseFailIds(TeaModel):
    def __init__(self, target_ids=None):
        self.target_ids = target_ids

    def validate(self):
        self.validate_required(self.target_ids, 'target_ids')
        if self.target_ids:
            self.target_ids.validate()

    def to_map(self):
        result = {}
        if self.target_ids is not None:
            result['TargetIds'] = self.target_ids.to_map()
        else:
            result['TargetIds'] = None
        return result

    def from_map(self, map={}):
        if map.get('TargetIds') is not None:
            temp_model = DeleteMetricRuleTargetsResponseFailIdsTargetIds()
            self.target_ids = temp_model.from_map(map['TargetIds'])
        else:
            self.target_ids = None
        return self


class PutMetricRuleTargetsRequest(TeaModel):
    def __init__(self, rule_id=None, targets=None):
        self.rule_id = rule_id
        self.targets = []

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.targets, 'targets')
        if self.targets:
            for k in self.targets:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Targets'] = []
        if self.targets is not None:
            for k in self.targets:
                result['Targets'].append(k.to_map() if k else None)
        else:
            result['Targets'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.targets = []
        if map.get('Targets') is not None:
            for k in map.get('Targets'):
                temp_model = PutMetricRuleTargetsRequestTargets()
                temp_model = temp_model.from_map(k)
                self.targets.append(temp_model)
        else:
            self.targets = None
        return self


class PutMetricRuleTargetsRequestTargets(TeaModel):
    def __init__(self, id=None, arn=None, level=None):
        self.id = id
        self.arn = arn
        self.level = level

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.arn, 'arn')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Arn'] = self.arn
        result['Level'] = self.level
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.arn = map.get('Arn')
        self.level = map.get('Level')
        return self


class PutMetricRuleTargetsResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, fail_data=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.fail_data = fail_data

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.fail_data, 'fail_data')
        if self.fail_data:
            self.fail_data.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.fail_data is not None:
            result['FailData'] = self.fail_data.to_map()
        else:
            result['FailData'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('FailData') is not None:
            temp_model = PutMetricRuleTargetsResponseFailData()
            self.fail_data = temp_model.from_map(map['FailData'])
        else:
            self.fail_data = None
        return self


class PutMetricRuleTargetsResponseFailDataTargetsTarget(TeaModel):
    def __init__(self, id=None, arn=None, level=None):
        self.id = id
        self.arn = arn
        self.level = level

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.level, 'level')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Arn'] = self.arn
        result['Level'] = self.level
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.arn = map.get('Arn')
        self.level = map.get('Level')
        return self


class PutMetricRuleTargetsResponseFailDataTargets(TeaModel):
    def __init__(self, target=None):
        self.target = []

    def validate(self):
        self.validate_required(self.target, 'target')
        if self.target:
            for k in self.target:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Target'] = []
        if self.target is not None:
            for k in self.target:
                result['Target'].append(k.to_map() if k else None)
        else:
            result['Target'] = None
        return result

    def from_map(self, map={}):
        self.target = []
        if map.get('Target') is not None:
            for k in map.get('Target'):
                temp_model = PutMetricRuleTargetsResponseFailDataTargetsTarget()
                temp_model = temp_model.from_map(k)
                self.target.append(temp_model)
        else:
            self.target = None
        return self


class PutMetricRuleTargetsResponseFailData(TeaModel):
    def __init__(self, targets=None):
        self.targets = targets

    def validate(self):
        self.validate_required(self.targets, 'targets')
        if self.targets:
            self.targets.validate()

    def to_map(self):
        result = {}
        if self.targets is not None:
            result['Targets'] = self.targets.to_map()
        else:
            result['Targets'] = None
        return result

    def from_map(self, map={}):
        if map.get('Targets') is not None:
            temp_model = PutMetricRuleTargetsResponseFailDataTargets()
            self.targets = temp_model.from_map(map['Targets'])
        else:
            self.targets = None
        return self


class DescribeMetricRuleTargetsRequest(TeaModel):
    def __init__(self, rule_id=None):
        self.rule_id = rule_id

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        return self


class DescribeMetricRuleTargetsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, targets=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.targets = targets

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.targets, 'targets')
        if self.targets:
            self.targets.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.targets is not None:
            result['Targets'] = self.targets.to_map()
        else:
            result['Targets'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Targets') is not None:
            temp_model = DescribeMetricRuleTargetsResponseTargets()
            self.targets = temp_model.from_map(map['Targets'])
        else:
            self.targets = None
        return self


class DescribeMetricRuleTargetsResponseTargetsTarget(TeaModel):
    def __init__(self, id=None, arn=None, level=None):
        self.id = id
        self.arn = arn
        self.level = level

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.level, 'level')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Arn'] = self.arn
        result['Level'] = self.level
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.arn = map.get('Arn')
        self.level = map.get('Level')
        return self


class DescribeMetricRuleTargetsResponseTargets(TeaModel):
    def __init__(self, target=None):
        self.target = []

    def validate(self):
        self.validate_required(self.target, 'target')
        if self.target:
            for k in self.target:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Target'] = []
        if self.target is not None:
            for k in self.target:
                result['Target'].append(k.to_map() if k else None)
        else:
            result['Target'] = None
        return result

    def from_map(self, map={}):
        self.target = []
        if map.get('Target') is not None:
            for k in map.get('Target'):
                temp_model = DescribeMetricRuleTargetsResponseTargetsTarget()
                temp_model = temp_model.from_map(k)
                self.target.append(temp_model)
        else:
            self.target = None
        return self


class ModifyMonitorGroupInstancesRequest(TeaModel):
    def __init__(self, group_id=None, instances=None):
        self.group_id = group_id
        self.instances = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.instances, 'instances')
        if self.instances:
            for k in self.instances:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Instances'] = []
        if self.instances is not None:
            for k in self.instances:
                result['Instances'].append(k.to_map() if k else None)
        else:
            result['Instances'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.instances = []
        if map.get('Instances') is not None:
            for k in map.get('Instances'):
                temp_model = ModifyMonitorGroupInstancesRequestInstances()
                temp_model = temp_model.from_map(k)
                self.instances.append(temp_model)
        else:
            self.instances = None
        return self


class ModifyMonitorGroupInstancesRequestInstances(TeaModel):
    def __init__(self, category=None, instance_id=None, region_id=None, instance_name=None):
        self.category = category
        self.instance_id = instance_id
        self.region_id = region_id
        self.instance_name = instance_name

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.instance_name, 'instance_name')

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['InstanceId'] = self.instance_id
        result['RegionId'] = self.region_id
        result['InstanceName'] = self.instance_name
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.instance_id = map.get('InstanceId')
        self.region_id = map.get('RegionId')
        self.instance_name = map.get('InstanceName')
        return self


class ModifyMonitorGroupInstancesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeMonitoringAgentStatusesRequest(TeaModel):
    def __init__(self, instance_ids=None):
        self.instance_ids = instance_ids

    def validate(self):
        self.validate_required(self.instance_ids, 'instance_ids')

    def to_map(self):
        result = {}
        result['InstanceIds'] = self.instance_ids
        return result

    def from_map(self, map={}):
        self.instance_ids = map.get('InstanceIds')
        return self


class DescribeMonitoringAgentStatusesResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, node_status_list=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.node_status_list = node_status_list

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.node_status_list, 'node_status_list')
        if self.node_status_list:
            self.node_status_list.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.node_status_list is not None:
            result['NodeStatusList'] = self.node_status_list.to_map()
        else:
            result['NodeStatusList'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('NodeStatusList') is not None:
            temp_model = DescribeMonitoringAgentStatusesResponseNodeStatusList()
            self.node_status_list = temp_model.from_map(map['NodeStatusList'])
        else:
            self.node_status_list = None
        return self


class DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus(TeaModel):
    def __init__(self, instance_id=None, auto_install=None, status=None):
        self.instance_id = instance_id
        self.auto_install = auto_install
        self.status = status

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.auto_install, 'auto_install')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['AutoInstall'] = self.auto_install
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.auto_install = map.get('AutoInstall')
        self.status = map.get('Status')
        return self


class DescribeMonitoringAgentStatusesResponseNodeStatusList(TeaModel):
    def __init__(self, node_status=None):
        self.node_status = []

    def validate(self):
        self.validate_required(self.node_status, 'node_status')
        if self.node_status:
            for k in self.node_status:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NodeStatus'] = []
        if self.node_status is not None:
            for k in self.node_status:
                result['NodeStatus'].append(k.to_map() if k else None)
        else:
            result['NodeStatus'] = None
        return result

    def from_map(self, map={}):
        self.node_status = []
        if map.get('NodeStatus') is not None:
            for k in map.get('NodeStatus'):
                temp_model = DescribeMonitoringAgentStatusesResponseNodeStatusListNodeStatus()
                temp_model = temp_model.from_map(k)
                self.node_status.append(temp_model)
        else:
            self.node_status = None
        return self


class CreateMonitorAgentProcessRequest(TeaModel):
    def __init__(self, process_name=None, instance_id=None, process_user=None):
        self.process_name = process_name
        self.instance_id = instance_id
        self.process_user = process_user

    def validate(self):
        self.validate_required(self.process_name, 'process_name')
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['ProcessName'] = self.process_name
        result['InstanceId'] = self.instance_id
        result['ProcessUser'] = self.process_user
        return result

    def from_map(self, map={}):
        self.process_name = map.get('ProcessName')
        self.instance_id = map.get('InstanceId')
        self.process_user = map.get('ProcessUser')
        return self


class CreateMonitorAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.id = id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.id = map.get('Id')
        return self


class DescribeAlertHistoryListRequest(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, namespace=None, metric_name=None, group_id=None, status=None, state=None, ascending=None, start_time=None, end_time=None, page_size=None, page=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.group_id = group_id
        self.status = status
        self.state = state
        self.ascending = ascending
        self.start_time = start_time
        self.end_time = end_time
        self.page_size = page_size
        self.page = page

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['GroupId'] = self.group_id
        result['Status'] = self.status
        result['State'] = self.state
        result['Ascending'] = self.ascending
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.group_id = map.get('GroupId')
        self.status = map.get('Status')
        self.state = map.get('State')
        self.ascending = map.get('Ascending')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        return self


class DescribeAlertHistoryListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, total=None, request_id=None, alarm_history_list=None):
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.request_id = request_id
        self.alarm_history_list = alarm_history_list

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.alarm_history_list, 'alarm_history_list')
        if self.alarm_history_list:
            self.alarm_history_list.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        result['RequestId'] = self.request_id
        if self.alarm_history_list is not None:
            result['AlarmHistoryList'] = self.alarm_history_list.to_map()
        else:
            result['AlarmHistoryList'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        self.request_id = map.get('RequestId')
        if map.get('AlarmHistoryList') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryList()
            self.alarm_history_list = temp_model.from_map(map['AlarmHistoryList'])
        else:
            self.alarm_history_list = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                self.contact_group.append(k)
        else:
            self.contact_group = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts(TeaModel):
    def __init__(self, contact=None):
        self.contact = []

    def validate(self):
        self.validate_required(self.contact, 'contact')

    def to_map(self):
        result = {}
        result['Contact'] = []
        if self.contact is not None:
            for k in self.contact:
                result['Contact'].append(k)
        else:
            result['Contact'] = None
        return result

    def from_map(self, map={}):
        self.contact = []
        if map.get('Contact') is not None:
            for k in map.get('Contact'):
                self.contact.append(k)
        else:
            self.contact = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs(TeaModel):
    def __init__(self, contact_aliim=None):
        self.contact_aliim = []

    def validate(self):
        self.validate_required(self.contact_aliim, 'contact_aliim')

    def to_map(self):
        result = {}
        result['ContactALIIM'] = []
        if self.contact_aliim is not None:
            for k in self.contact_aliim:
                result['ContactALIIM'].append(k)
        else:
            result['ContactALIIM'] = None
        return result

    def from_map(self, map={}):
        self.contact_aliim = []
        if map.get('ContactALIIM') is not None:
            for k in map.get('ContactALIIM'):
                self.contact_aliim.append(k)
        else:
            self.contact_aliim = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses(TeaModel):
    def __init__(self, contact_sms=None):
        self.contact_sms = []

    def validate(self):
        self.validate_required(self.contact_sms, 'contact_sms')

    def to_map(self):
        result = {}
        result['ContactSms'] = []
        if self.contact_sms is not None:
            for k in self.contact_sms:
                result['ContactSms'].append(k)
        else:
            result['ContactSms'] = None
        return result

    def from_map(self, map={}):
        self.contact_sms = []
        if map.get('ContactSms') is not None:
            for k in map.get('ContactSms'):
                self.contact_sms.append(k)
        else:
            self.contact_sms = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails(TeaModel):
    def __init__(self, contact_mail=None):
        self.contact_mail = []

    def validate(self):
        self.validate_required(self.contact_mail, 'contact_mail')

    def to_map(self):
        result = {}
        result['ContactMail'] = []
        if self.contact_mail is not None:
            for k in self.contact_mail:
                result['ContactMail'].append(k)
        else:
            result['ContactMail'] = None
        return result

    def from_map(self, map={}):
        self.contact_mail = []
        if map.get('ContactMail') is not None:
            for k in map.get('ContactMail'):
                self.contact_mail.append(k)
        else:
            self.contact_mail = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory(TeaModel):
    def __init__(self, rule_id=None, group_id=None, namespace=None, metric_name=None, dimensions=None, expression=None, evaluation_count=None, value=None, alert_time=None, last_time=None, level=None, pre_level=None, rule_name=None, state=None, status=None, webhooks=None, instance_name=None, contact_groups=None, contacts=None, contact_aliims=None, contact_smses=None, contact_mails=None):
        self.rule_id = rule_id
        self.group_id = group_id
        self.namespace = namespace
        self.metric_name = metric_name
        self.dimensions = dimensions
        self.expression = expression
        self.evaluation_count = evaluation_count
        self.value = value
        self.alert_time = alert_time
        self.last_time = last_time
        self.level = level
        self.pre_level = pre_level
        self.rule_name = rule_name
        self.state = state
        self.status = status
        self.webhooks = webhooks
        self.instance_name = instance_name
        self.contact_groups = contact_groups
        self.contacts = contacts
        self.contact_aliims = contact_aliims
        self.contact_smses = contact_smses
        self.contact_mails = contact_mails

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.dimensions, 'dimensions')
        self.validate_required(self.expression, 'expression')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.value, 'value')
        self.validate_required(self.alert_time, 'alert_time')
        self.validate_required(self.last_time, 'last_time')
        self.validate_required(self.level, 'level')
        self.validate_required(self.pre_level, 'pre_level')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.state, 'state')
        self.validate_required(self.status, 'status')
        self.validate_required(self.webhooks, 'webhooks')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            self.contact_groups.validate()
        self.validate_required(self.contacts, 'contacts')
        if self.contacts:
            self.contacts.validate()
        self.validate_required(self.contact_aliims, 'contact_aliims')
        if self.contact_aliims:
            self.contact_aliims.validate()
        self.validate_required(self.contact_smses, 'contact_smses')
        if self.contact_smses:
            self.contact_smses.validate()
        self.validate_required(self.contact_mails, 'contact_mails')
        if self.contact_mails:
            self.contact_mails.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['GroupId'] = self.group_id
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Dimensions'] = self.dimensions
        result['Expression'] = self.expression
        result['EvaluationCount'] = self.evaluation_count
        result['Value'] = self.value
        result['AlertTime'] = self.alert_time
        result['LastTime'] = self.last_time
        result['Level'] = self.level
        result['PreLevel'] = self.pre_level
        result['RuleName'] = self.rule_name
        result['State'] = self.state
        result['Status'] = self.status
        result['Webhooks'] = self.webhooks
        result['InstanceName'] = self.instance_name
        if self.contact_groups is not None:
            result['ContactGroups'] = self.contact_groups.to_map()
        else:
            result['ContactGroups'] = None
        if self.contacts is not None:
            result['Contacts'] = self.contacts.to_map()
        else:
            result['Contacts'] = None
        if self.contact_aliims is not None:
            result['ContactALIIMs'] = self.contact_aliims.to_map()
        else:
            result['ContactALIIMs'] = None
        if self.contact_smses is not None:
            result['ContactSmses'] = self.contact_smses.to_map()
        else:
            result['ContactSmses'] = None
        if self.contact_mails is not None:
            result['ContactMails'] = self.contact_mails.to_map()
        else:
            result['ContactMails'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.group_id = map.get('GroupId')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.dimensions = map.get('Dimensions')
        self.expression = map.get('Expression')
        self.evaluation_count = map.get('EvaluationCount')
        self.value = map.get('Value')
        self.alert_time = map.get('AlertTime')
        self.last_time = map.get('LastTime')
        self.level = map.get('Level')
        self.pre_level = map.get('PreLevel')
        self.rule_name = map.get('RuleName')
        self.state = map.get('State')
        self.status = map.get('Status')
        self.webhooks = map.get('Webhooks')
        self.instance_name = map.get('InstanceName')
        if map.get('ContactGroups') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactGroups()
            self.contact_groups = temp_model.from_map(map['ContactGroups'])
        else:
            self.contact_groups = None
        if map.get('Contacts') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContacts()
            self.contacts = temp_model.from_map(map['Contacts'])
        else:
            self.contacts = None
        if map.get('ContactALIIMs') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactALIIMs()
            self.contact_aliims = temp_model.from_map(map['ContactALIIMs'])
        else:
            self.contact_aliims = None
        if map.get('ContactSmses') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactSmses()
            self.contact_smses = temp_model.from_map(map['ContactSmses'])
        else:
            self.contact_smses = None
        if map.get('ContactMails') is not None:
            temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistoryContactMails()
            self.contact_mails = temp_model.from_map(map['ContactMails'])
        else:
            self.contact_mails = None
        return self


class DescribeAlertHistoryListResponseAlarmHistoryList(TeaModel):
    def __init__(self, alarm_history=None):
        self.alarm_history = []

    def validate(self):
        self.validate_required(self.alarm_history, 'alarm_history')
        if self.alarm_history:
            for k in self.alarm_history:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AlarmHistory'] = []
        if self.alarm_history is not None:
            for k in self.alarm_history:
                result['AlarmHistory'].append(k.to_map() if k else None)
        else:
            result['AlarmHistory'] = None
        return result

    def from_map(self, map={}):
        self.alarm_history = []
        if map.get('AlarmHistory') is not None:
            for k in map.get('AlarmHistory'):
                temp_model = DescribeAlertHistoryListResponseAlarmHistoryListAlarmHistory()
                temp_model = temp_model.from_map(k)
                self.alarm_history.append(temp_model)
        else:
            self.alarm_history = None
        return self


class DescribeAlertingMetricRuleResourcesRequest(TeaModel):
    def __init__(self, rule_id=None, group_id=None, page=None, page_size=None):
        self.rule_id = rule_id
        self.group_id = group_id
        self.page = page
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['GroupId'] = self.group_id
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.group_id = map.get('GroupId')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        return self


class DescribeAlertingMetricRuleResourcesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, total=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        if map.get('Resources') is not None:
            temp_model = DescribeAlertingMetricRuleResourcesResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeAlertingMetricRuleResourcesResponseResourcesResource(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, group_id=None, resource=None, enable=None, last_alert_time=None, last_modify_time=None, start_time=None, metric_values=None, retry_times=None, threshold=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.group_id = group_id
        self.resource = resource
        self.enable = enable
        self.last_alert_time = last_alert_time
        self.last_modify_time = last_modify_time
        self.start_time = start_time
        self.metric_values = metric_values
        self.retry_times = retry_times
        self.threshold = threshold

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.resource, 'resource')
        self.validate_required(self.enable, 'enable')
        self.validate_required(self.last_alert_time, 'last_alert_time')
        self.validate_required(self.last_modify_time, 'last_modify_time')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.metric_values, 'metric_values')
        self.validate_required(self.retry_times, 'retry_times')
        self.validate_required(self.threshold, 'threshold')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['GroupId'] = self.group_id
        result['Resource'] = self.resource
        result['Enable'] = self.enable
        result['LastAlertTime'] = self.last_alert_time
        result['LastModifyTime'] = self.last_modify_time
        result['StartTime'] = self.start_time
        result['MetricValues'] = self.metric_values
        result['RetryTimes'] = self.retry_times
        result['Threshold'] = self.threshold
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.group_id = map.get('GroupId')
        self.resource = map.get('Resource')
        self.enable = map.get('Enable')
        self.last_alert_time = map.get('LastAlertTime')
        self.last_modify_time = map.get('LastModifyTime')
        self.start_time = map.get('StartTime')
        self.metric_values = map.get('MetricValues')
        self.retry_times = map.get('RetryTimes')
        self.threshold = map.get('Threshold')
        return self


class DescribeAlertingMetricRuleResourcesResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeAlertingMetricRuleResourcesResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DisableActiveMetricRuleRequest(TeaModel):
    def __init__(self, product=None):
        self.product = product

    def validate(self):
        self.validate_required(self.product, 'product')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        return self


class DisableActiveMetricRuleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeActiveMetricRuleListRequest(TeaModel):
    def __init__(self, product=None):
        self.product = product

    def validate(self):
        self.validate_required(self.product, 'product')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        return self


class DescribeActiveMetricRuleListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, datapoints=None, alert_list=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.datapoints = datapoints
        self.alert_list = alert_list

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.datapoints, 'datapoints')
        if self.datapoints:
            self.datapoints.validate()
        self.validate_required(self.alert_list, 'alert_list')
        if self.alert_list:
            self.alert_list.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.datapoints is not None:
            result['Datapoints'] = self.datapoints.to_map()
        else:
            result['Datapoints'] = None
        if self.alert_list is not None:
            result['AlertList'] = self.alert_list.to_map()
        else:
            result['AlertList'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Datapoints') is not None:
            temp_model = DescribeActiveMetricRuleListResponseDatapoints()
            self.datapoints = temp_model.from_map(map['Datapoints'])
        else:
            self.datapoints = None
        if map.get('AlertList') is not None:
            temp_model = DescribeActiveMetricRuleListResponseAlertList()
            self.alert_list = temp_model.from_map(map['AlertList'])
        else:
            self.alert_list = None
        return self


class DescribeActiveMetricRuleListResponseDatapointsAlarm(TeaModel):
    def __init__(self, rule_id=None, namespace=None, metric_name=None, period=None, statistics=None, comparison_operator=None, threshold=None, evaluation_count=None, start_time=None, end_time=None, silence_time=None, enable=None, state=None, contact_groups=None, webhook=None, rule_name=None):
        self.rule_id = rule_id
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.evaluation_count = evaluation_count
        self.start_time = start_time
        self.end_time = end_time
        self.silence_time = silence_time
        self.enable = enable
        self.state = state
        self.contact_groups = contact_groups
        self.webhook = webhook
        self.rule_name = rule_name

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.period, 'period')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.enable, 'enable')
        self.validate_required(self.state, 'state')
        self.validate_required(self.contact_groups, 'contact_groups')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.rule_name, 'rule_name')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['EvaluationCount'] = self.evaluation_count
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['SilenceTime'] = self.silence_time
        result['Enable'] = self.enable
        result['State'] = self.state
        result['ContactGroups'] = self.contact_groups
        result['Webhook'] = self.webhook
        result['RuleName'] = self.rule_name
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.evaluation_count = map.get('EvaluationCount')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.silence_time = map.get('SilenceTime')
        self.enable = map.get('Enable')
        self.state = map.get('State')
        self.contact_groups = map.get('ContactGroups')
        self.webhook = map.get('Webhook')
        self.rule_name = map.get('RuleName')
        return self


class DescribeActiveMetricRuleListResponseDatapoints(TeaModel):
    def __init__(self, alarm=None):
        self.alarm = []

    def validate(self):
        self.validate_required(self.alarm, 'alarm')
        if self.alarm:
            for k in self.alarm:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Alarm'] = []
        if self.alarm is not None:
            for k in self.alarm:
                result['Alarm'].append(k.to_map() if k else None)
        else:
            result['Alarm'] = None
        return result

    def from_map(self, map={}):
        self.alarm = []
        if map.get('Alarm') is not None:
            for k in map.get('Alarm'):
                temp_model = DescribeActiveMetricRuleListResponseDatapointsAlarm()
                temp_model = temp_model.from_map(k)
                self.alarm.append(temp_model)
        else:
            self.alarm = None
        return self


class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeActiveMetricRuleListResponseAlertListAlertEscalations(TeaModel):
    def __init__(self, info=None, warn=None, critical=None):
        self.info = info
        self.warn = warn
        self.critical = critical

    def validate(self):
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()

    def to_map(self):
        result = {}
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        return result

    def from_map(self, map={}):
        if map.get('Info') is not None:
            temp_model = DescribeActiveMetricRuleListResponseAlertListAlertEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        if map.get('Warn') is not None:
            temp_model = DescribeActiveMetricRuleListResponseAlertListAlertEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Critical') is not None:
            temp_model = DescribeActiveMetricRuleListResponseAlertListAlertEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        return self


class DescribeActiveMetricRuleListResponseAlertListAlert(TeaModel):
    def __init__(self, rule_id=None, namespace=None, metric_name=None, period=None, effective_interval=None, no_effective_interval=None, silence_time=None, enable_state=None, alert_state=None, contact_groups=None, webhook=None, mail_subject=None, rule_name=None, resources=None, dimensions=None, escalations=None):
        self.rule_id = rule_id
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.enable_state = enable_state
        self.alert_state = alert_state
        self.contact_groups = contact_groups
        self.webhook = webhook
        self.mail_subject = mail_subject
        self.rule_name = rule_name
        self.resources = resources
        self.dimensions = dimensions
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.period, 'period')
        self.validate_required(self.effective_interval, 'effective_interval')
        self.validate_required(self.no_effective_interval, 'no_effective_interval')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.enable_state, 'enable_state')
        self.validate_required(self.alert_state, 'alert_state')
        self.validate_required(self.contact_groups, 'contact_groups')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.mail_subject, 'mail_subject')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.resources, 'resources')
        self.validate_required(self.dimensions, 'dimensions')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['EnableState'] = self.enable_state
        result['AlertState'] = self.alert_state
        result['ContactGroups'] = self.contact_groups
        result['Webhook'] = self.webhook
        result['MailSubject'] = self.mail_subject
        result['RuleName'] = self.rule_name
        result['Resources'] = self.resources
        result['Dimensions'] = self.dimensions
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.enable_state = map.get('EnableState')
        self.alert_state = map.get('AlertState')
        self.contact_groups = map.get('ContactGroups')
        self.webhook = map.get('Webhook')
        self.mail_subject = map.get('MailSubject')
        self.rule_name = map.get('RuleName')
        self.resources = map.get('Resources')
        self.dimensions = map.get('Dimensions')
        if map.get('Escalations') is not None:
            temp_model = DescribeActiveMetricRuleListResponseAlertListAlertEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class DescribeActiveMetricRuleListResponseAlertList(TeaModel):
    def __init__(self, alert=None):
        self.alert = []

    def validate(self):
        self.validate_required(self.alert, 'alert')
        if self.alert:
            for k in self.alert:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Alert'] = []
        if self.alert is not None:
            for k in self.alert:
                result['Alert'].append(k.to_map() if k else None)
        else:
            result['Alert'] = None
        return result

    def from_map(self, map={}):
        self.alert = []
        if map.get('Alert') is not None:
            for k in map.get('Alert'):
                temp_model = DescribeActiveMetricRuleListResponseAlertListAlert()
                temp_model = temp_model.from_map(k)
                self.alert.append(temp_model)
        else:
            self.alert = None
        return self


class DescribeProductsOfActiveMetricRuleRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeProductsOfActiveMetricRuleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, datapoints=None, all_product_init_metric_rule_list=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.datapoints = datapoints
        self.all_product_init_metric_rule_list = all_product_init_metric_rule_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.datapoints, 'datapoints')
        self.validate_required(self.all_product_init_metric_rule_list, 'all_product_init_metric_rule_list')
        if self.all_product_init_metric_rule_list:
            self.all_product_init_metric_rule_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Datapoints'] = self.datapoints
        if self.all_product_init_metric_rule_list is not None:
            result['AllProductInitMetricRuleList'] = self.all_product_init_metric_rule_list.to_map()
        else:
            result['AllProductInitMetricRuleList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.datapoints = map.get('Datapoints')
        if map.get('AllProductInitMetricRuleList') is not None:
            temp_model = DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList()
            self.all_product_init_metric_rule_list = temp_model.from_map(map['AllProductInitMetricRuleList'])
        else:
            self.all_product_init_metric_rule_list = None
        return self


class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig(TeaModel):
    def __init__(self, namespace=None, metric_name=None, statistics=None, evaluation_count=None, threshold=None, period=None):
        self.namespace = namespace
        self.metric_name = metric_name
        self.statistics = statistics
        self.evaluation_count = evaluation_count
        self.threshold = threshold
        self.period = period

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Statistics'] = self.statistics
        result['EvaluationCount'] = self.evaluation_count
        result['Threshold'] = self.threshold
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.statistics = map.get('Statistics')
        self.evaluation_count = map.get('EvaluationCount')
        self.threshold = map.get('Threshold')
        self.period = map.get('Period')
        return self


class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList(TeaModel):
    def __init__(self, alert_init_config=None):
        self.alert_init_config = []

    def validate(self):
        self.validate_required(self.alert_init_config, 'alert_init_config')
        if self.alert_init_config:
            for k in self.alert_init_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AlertInitConfig'] = []
        if self.alert_init_config is not None:
            for k in self.alert_init_config:
                result['AlertInitConfig'].append(k.to_map() if k else None)
        else:
            result['AlertInitConfig'] = None
        return result

    def from_map(self, map={}):
        self.alert_init_config = []
        if map.get('AlertInitConfig') is not None:
            for k in map.get('AlertInitConfig'):
                temp_model = DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigListAlertInitConfig()
                temp_model = temp_model.from_map(k)
                self.alert_init_config.append(temp_model)
        else:
            self.alert_init_config = None
        return self


class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule(TeaModel):
    def __init__(self, product=None, alert_init_config_list=None):
        self.product = product
        self.alert_init_config_list = alert_init_config_list

    def validate(self):
        self.validate_required(self.product, 'product')
        self.validate_required(self.alert_init_config_list, 'alert_init_config_list')
        if self.alert_init_config_list:
            self.alert_init_config_list.validate()

    def to_map(self):
        result = {}
        result['Product'] = self.product
        if self.alert_init_config_list is not None:
            result['AlertInitConfigList'] = self.alert_init_config_list.to_map()
        else:
            result['AlertInitConfigList'] = None
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        if map.get('AlertInitConfigList') is not None:
            temp_model = DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRuleAlertInitConfigList()
            self.alert_init_config_list = temp_model.from_map(map['AlertInitConfigList'])
        else:
            self.alert_init_config_list = None
        return self


class DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleList(TeaModel):
    def __init__(self, all_product_init_metric_rule=None):
        self.all_product_init_metric_rule = []

    def validate(self):
        self.validate_required(self.all_product_init_metric_rule, 'all_product_init_metric_rule')
        if self.all_product_init_metric_rule:
            for k in self.all_product_init_metric_rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AllProductInitMetricRule'] = []
        if self.all_product_init_metric_rule is not None:
            for k in self.all_product_init_metric_rule:
                result['AllProductInitMetricRule'].append(k.to_map() if k else None)
        else:
            result['AllProductInitMetricRule'] = None
        return result

    def from_map(self, map={}):
        self.all_product_init_metric_rule = []
        if map.get('AllProductInitMetricRule') is not None:
            for k in map.get('AllProductInitMetricRule'):
                temp_model = DescribeProductsOfActiveMetricRuleResponseAllProductInitMetricRuleListAllProductInitMetricRule()
                temp_model = temp_model.from_map(k)
                self.all_product_init_metric_rule.append(temp_model)
        else:
            self.all_product_init_metric_rule = None
        return self


class EnableActiveMetricRuleRequest(TeaModel):
    def __init__(self, product=None):
        self.product = product

    def validate(self):
        self.validate_required(self.product, 'product')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        return self


class EnableActiveMetricRuleResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeMonitorGroupInstanceAttributeRequest(TeaModel):
    def __init__(self, group_id=None, page_number=None, page_size=None, total=None, category=None, keyword=None, instance_ids=None):
        self.group_id = group_id
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.category = category
        self.keyword = keyword
        self.instance_ids = instance_ids

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        result['Category'] = self.category
        result['Keyword'] = self.keyword
        result['InstanceIds'] = self.instance_ids
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        self.category = map.get('Category')
        self.keyword = map.get('Keyword')
        self.instance_ids = map.get('InstanceIds')
        return self


class DescribeMonitorGroupInstanceAttributeResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, page_number=None, page_size=None, total=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        if map.get('Resources') is not None:
            temp_model = DescribeMonitorGroupInstanceAttributeResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag(TeaModel):
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


class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags(TeaModel):
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
                temp_model = DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion(TeaModel):
    def __init__(self, region_id=None, availability_zone=None):
        self.region_id = region_id
        self.availability_zone = availability_zone

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.availability_zone, 'availability_zone')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['AvailabilityZone'] = self.availability_zone
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.availability_zone = map.get('AvailabilityZone')
        return self


class DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc(TeaModel):
    def __init__(self, vpc_instance_id=None, vswitch_instance_id=None):
        self.vpc_instance_id = vpc_instance_id
        self.vswitch_instance_id = vswitch_instance_id

    def validate(self):
        self.validate_required(self.vpc_instance_id, 'vpc_instance_id')
        self.validate_required(self.vswitch_instance_id, 'vswitch_instance_id')

    def to_map(self):
        result = {}
        result['VpcInstanceId'] = self.vpc_instance_id
        result['VswitchInstanceId'] = self.vswitch_instance_id
        return result

    def from_map(self, map={}):
        self.vpc_instance_id = map.get('VpcInstanceId')
        self.vswitch_instance_id = map.get('VswitchInstanceId')
        return self


class DescribeMonitorGroupInstanceAttributeResponseResourcesResource(TeaModel):
    def __init__(self, instance_name=None, instance_id=None, desc=None, network_type=None, category=None, dimension=None, tags=None, region=None, vpc=None):
        self.instance_name = instance_name
        self.instance_id = instance_id
        self.desc = desc
        self.network_type = network_type
        self.category = category
        self.dimension = dimension
        self.tags = tags
        self.region = region
        self.vpc = vpc

    def validate(self):
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.desc, 'desc')
        self.validate_required(self.network_type, 'network_type')
        self.validate_required(self.category, 'category')
        self.validate_required(self.dimension, 'dimension')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()
        self.validate_required(self.region, 'region')
        if self.region:
            self.region.validate()
        self.validate_required(self.vpc, 'vpc')
        if self.vpc:
            self.vpc.validate()

    def to_map(self):
        result = {}
        result['InstanceName'] = self.instance_name
        result['InstanceId'] = self.instance_id
        result['Desc'] = self.desc
        result['NetworkType'] = self.network_type
        result['Category'] = self.category
        result['Dimension'] = self.dimension
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        if self.region is not None:
            result['Region'] = self.region.to_map()
        else:
            result['Region'] = None
        if self.vpc is not None:
            result['Vpc'] = self.vpc.to_map()
        else:
            result['Vpc'] = None
        return result

    def from_map(self, map={}):
        self.instance_name = map.get('InstanceName')
        self.instance_id = map.get('InstanceId')
        self.desc = map.get('Desc')
        self.network_type = map.get('NetworkType')
        self.category = map.get('Category')
        self.dimension = map.get('Dimension')
        if map.get('Tags') is not None:
            temp_model = DescribeMonitorGroupInstanceAttributeResponseResourcesResourceTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        if map.get('Region') is not None:
            temp_model = DescribeMonitorGroupInstanceAttributeResponseResourcesResourceRegion()
            self.region = temp_model.from_map(map['Region'])
        else:
            self.region = None
        if map.get('Vpc') is not None:
            temp_model = DescribeMonitorGroupInstanceAttributeResponseResourcesResourceVpc()
            self.vpc = temp_model.from_map(map['Vpc'])
        else:
            self.vpc = None
        return self


class DescribeMonitorGroupInstanceAttributeResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeMonitorGroupInstanceAttributeResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DescribeMonitorGroupNotifyPolicyListRequest(TeaModel):
    def __init__(self, policy_type=None, page_number=None, page_size=None, group_id=None):
        self.policy_type = policy_type
        self.page_number = page_number
        self.page_size = page_size
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.policy_type, 'policy_type')

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitorGroupNotifyPolicyListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, total=None, notify_policy_list=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.total = total
        self.notify_policy_list = notify_policy_list

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.notify_policy_list, 'notify_policy_list')
        if self.notify_policy_list:
            self.notify_policy_list.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.notify_policy_list is not None:
            result['NotifyPolicyList'] = self.notify_policy_list.to_map()
        else:
            result['NotifyPolicyList'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('NotifyPolicyList') is not None:
            temp_model = DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList()
            self.notify_policy_list = temp_model.from_map(map['NotifyPolicyList'])
        else:
            self.notify_policy_list = None
        return self


class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy(TeaModel):
    def __init__(self, type=None, id=None, start_time=None, end_time=None, group_id=None):
        self.type = type
        self.id = id
        self.start_time = start_time
        self.end_time = end_time
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.id, 'id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Id'] = self.id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.id = map.get('Id')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyList(TeaModel):
    def __init__(self, notify_policy=None):
        self.notify_policy = []

    def validate(self):
        self.validate_required(self.notify_policy, 'notify_policy')
        if self.notify_policy:
            for k in self.notify_policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NotifyPolicy'] = []
        if self.notify_policy is not None:
            for k in self.notify_policy:
                result['NotifyPolicy'].append(k.to_map() if k else None)
        else:
            result['NotifyPolicy'] = None
        return result

    def from_map(self, map={}):
        self.notify_policy = []
        if map.get('NotifyPolicy') is not None:
            for k in map.get('NotifyPolicy'):
                temp_model = DescribeMonitorGroupNotifyPolicyListResponseNotifyPolicyListNotifyPolicy()
                temp_model = temp_model.from_map(k)
                self.notify_policy.append(temp_model)
        else:
            self.notify_policy = None
        return self


class DeleteMonitorGroupRequest(TeaModel):
    def __init__(self, group_id=None):
        self.group_id = group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        return self


class DeleteMonitorGroupResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, group=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.group = group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.group, 'group')
        if self.group:
            self.group.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.group is not None:
            result['Group'] = self.group.to_map()
        else:
            result['Group'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Group') is not None:
            temp_model = DeleteMonitorGroupResponseGroup()
            self.group = temp_model.from_map(map['Group'])
        else:
            self.group = None
        return self


class DeleteMonitorGroupResponseGroupContactGroupsContactGroup(TeaModel):
    def __init__(self, name=None):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        return self


class DeleteMonitorGroupResponseGroupContactGroups(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')
        if self.contact_group:
            for k in self.contact_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k.to_map() if k else None)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                temp_model = DeleteMonitorGroupResponseGroupContactGroupsContactGroup()
                temp_model = temp_model.from_map(k)
                self.contact_group.append(temp_model)
        else:
            self.contact_group = None
        return self


class DeleteMonitorGroupResponseGroup(TeaModel):
    def __init__(self, group_name=None, contact_groups=None):
        self.group_name = group_name
        self.contact_groups = contact_groups

    def validate(self):
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            self.contact_groups.validate()

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        if self.contact_groups is not None:
            result['ContactGroups'] = self.contact_groups.to_map()
        else:
            result['ContactGroups'] = None
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        if map.get('ContactGroups') is not None:
            temp_model = DeleteMonitorGroupResponseGroupContactGroups()
            self.contact_groups = temp_model.from_map(map['ContactGroups'])
        else:
            self.contact_groups = None
        return self


class CreateMonitorGroupRequest(TeaModel):
    def __init__(self, group_name=None, contact_groups=None):
        self.group_name = group_name
        self.contact_groups = contact_groups

    def validate(self):
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['GroupName'] = self.group_name
        result['ContactGroups'] = self.contact_groups
        return result

    def from_map(self, map={}):
        self.group_name = map.get('GroupName')
        self.contact_groups = map.get('ContactGroups')
        return self


class CreateMonitorGroupResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, group_id=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitorGroupsRequest(TeaModel):
    def __init__(self, select_contact_groups=None, page_number=None, page_size=None, keyword=None, instance_id=None, group_name=None, include_template_history=None, tag=None, type=None, dynamic_tag_rule_id=None, group_id=None, service_id=None):
        self.select_contact_groups = select_contact_groups
        self.page_number = page_number
        self.page_size = page_size
        self.keyword = keyword
        self.instance_id = instance_id
        self.group_name = group_name
        self.include_template_history = include_template_history
        self.tag = []
        self.type = type
        self.dynamic_tag_rule_id = dynamic_tag_rule_id
        self.group_id = group_id
        self.service_id = service_id

    def validate(self):
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SelectContactGroups'] = self.select_contact_groups
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Keyword'] = self.keyword
        result['InstanceId'] = self.instance_id
        result['GroupName'] = self.group_name
        result['IncludeTemplateHistory'] = self.include_template_history
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['Type'] = self.type
        result['DynamicTagRuleId'] = self.dynamic_tag_rule_id
        result['GroupId'] = self.group_id
        result['ServiceId'] = self.service_id
        return result

    def from_map(self, map={}):
        self.select_contact_groups = map.get('SelectContactGroups')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.keyword = map.get('Keyword')
        self.instance_id = map.get('InstanceId')
        self.group_name = map.get('GroupName')
        self.include_template_history = map.get('IncludeTemplateHistory')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeMonitorGroupsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.type = map.get('Type')
        self.dynamic_tag_rule_id = map.get('DynamicTagRuleId')
        self.group_id = map.get('GroupId')
        self.service_id = map.get('ServiceId')
        return self


class DescribeMonitorGroupsRequestTag(TeaModel):
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


class DescribeMonitorGroupsResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, page_number=None, page_size=None, total=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        if map.get('Resources') is not None:
            temp_model = DescribeMonitorGroupsResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup(TeaModel):
    def __init__(self, name=None):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        return self


class DescribeMonitorGroupsResponseResourcesResourceContactGroups(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')
        if self.contact_group:
            for k in self.contact_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k.to_map() if k else None)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                temp_model = DescribeMonitorGroupsResponseResourcesResourceContactGroupsContactGroup()
                temp_model = temp_model.from_map(k)
                self.contact_group.append(temp_model)
        else:
            self.contact_group = None
        return self


class DescribeMonitorGroupsResponseResourcesResourceTagsTag(TeaModel):
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


class DescribeMonitorGroupsResponseResourcesResourceTags(TeaModel):
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
                temp_model = DescribeMonitorGroupsResponseResourcesResourceTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeMonitorGroupsResponseResourcesResourceTemplateIds(TeaModel):
    def __init__(self, template_id=None):
        self.template_id = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['TemplateId'] = []
        if self.template_id is not None:
            for k in self.template_id:
                result['TemplateId'].append(k)
        else:
            result['TemplateId'] = None
        return result

    def from_map(self, map={}):
        self.template_id = []
        if map.get('TemplateId') is not None:
            for k in map.get('TemplateId'):
                self.template_id.append(k)
        else:
            self.template_id = None
        return self


class DescribeMonitorGroupsResponseResourcesResource(TeaModel):
    def __init__(self, group_id=None, group_name=None, service_id=None, type=None, gmt_modified=None, gmt_create=None, bind_url=None, dynamic_tag_rule_id=None, group_founder_tag_key=None, group_founder_tag_value=None, contact_groups=None, tags=None, template_ids=None):
        self.group_id = group_id
        self.group_name = group_name
        self.service_id = service_id
        self.type = type
        self.gmt_modified = gmt_modified
        self.gmt_create = gmt_create
        self.bind_url = bind_url
        self.dynamic_tag_rule_id = dynamic_tag_rule_id
        self.group_founder_tag_key = group_founder_tag_key
        self.group_founder_tag_value = group_founder_tag_value
        self.contact_groups = contact_groups
        self.tags = tags
        self.template_ids = template_ids

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.service_id, 'service_id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.gmt_create, 'gmt_create')
        self.validate_required(self.bind_url, 'bind_url')
        self.validate_required(self.dynamic_tag_rule_id, 'dynamic_tag_rule_id')
        self.validate_required(self.group_founder_tag_key, 'group_founder_tag_key')
        self.validate_required(self.group_founder_tag_value, 'group_founder_tag_value')
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            self.contact_groups.validate()
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()
        self.validate_required(self.template_ids, 'template_ids')
        if self.template_ids:
            self.template_ids.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['ServiceId'] = self.service_id
        result['Type'] = self.type
        result['GmtModified'] = self.gmt_modified
        result['GmtCreate'] = self.gmt_create
        result['BindUrl'] = self.bind_url
        result['DynamicTagRuleId'] = self.dynamic_tag_rule_id
        result['GroupFounderTagKey'] = self.group_founder_tag_key
        result['GroupFounderTagValue'] = self.group_founder_tag_value
        if self.contact_groups is not None:
            result['ContactGroups'] = self.contact_groups.to_map()
        else:
            result['ContactGroups'] = None
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        if self.template_ids is not None:
            result['TemplateIds'] = self.template_ids.to_map()
        else:
            result['TemplateIds'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.service_id = map.get('ServiceId')
        self.type = map.get('Type')
        self.gmt_modified = map.get('GmtModified')
        self.gmt_create = map.get('GmtCreate')
        self.bind_url = map.get('BindUrl')
        self.dynamic_tag_rule_id = map.get('DynamicTagRuleId')
        self.group_founder_tag_key = map.get('GroupFounderTagKey')
        self.group_founder_tag_value = map.get('GroupFounderTagValue')
        if map.get('ContactGroups') is not None:
            temp_model = DescribeMonitorGroupsResponseResourcesResourceContactGroups()
            self.contact_groups = temp_model.from_map(map['ContactGroups'])
        else:
            self.contact_groups = None
        if map.get('Tags') is not None:
            temp_model = DescribeMonitorGroupsResponseResourcesResourceTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        if map.get('TemplateIds') is not None:
            temp_model = DescribeMonitorGroupsResponseResourcesResourceTemplateIds()
            self.template_ids = temp_model.from_map(map['TemplateIds'])
        else:
            self.template_ids = None
        return self


class DescribeMonitorGroupsResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeMonitorGroupsResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DeleteMonitorGroupNotifyPolicyRequest(TeaModel):
    def __init__(self, policy_type=None, group_id=None):
        self.policy_type = policy_type
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.policy_type, 'policy_type')

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.group_id = map.get('GroupId')
        return self


class DeleteMonitorGroupNotifyPolicyResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, result=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.result = result

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.result, 'result')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Result'] = self.result
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.result = map.get('Result')
        return self


class DescribeMonitorGroupDynamicRulesRequest(TeaModel):
    def __init__(self, group_id=None):
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitorGroupDynamicRulesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, page_number=None, page_size=None, total=None, resource=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.resource = resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resource, 'resource')
        if self.resource:
            self.resource.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        if self.resource is not None:
            result['Resource'] = self.resource.to_map()
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        if map.get('Resource') is not None:
            temp_model = DescribeMonitorGroupDynamicRulesResponseResource()
            self.resource = temp_model.from_map(map['Resource'])
        else:
            self.resource = None
        return self


class DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter(TeaModel):
    def __init__(self, function=None, name=None, value=None):
        self.function = function
        self.name = name
        self.value = value

    def validate(self):
        self.validate_required(self.function, 'function')
        self.validate_required(self.name, 'name')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Function'] = self.function
        result['Name'] = self.name
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.function = map.get('Function')
        self.name = map.get('Name')
        self.value = map.get('Value')
        return self


class DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters(TeaModel):
    def __init__(self, filter=None):
        self.filter = []

    def validate(self):
        self.validate_required(self.filter, 'filter')
        if self.filter:
            for k in self.filter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Filter'] = []
        if self.filter is not None:
            for k in self.filter:
                result['Filter'].append(k.to_map() if k else None)
        else:
            result['Filter'] = None
        return result

    def from_map(self, map={}):
        self.filter = []
        if map.get('Filter') is not None:
            for k in map.get('Filter'):
                temp_model = DescribeMonitorGroupDynamicRulesResponseResourceResourceFiltersFilter()
                temp_model = temp_model.from_map(k)
                self.filter.append(temp_model)
        else:
            self.filter = None
        return self


class DescribeMonitorGroupDynamicRulesResponseResourceResource(TeaModel):
    def __init__(self, group_id=None, category=None, filter_relation=None, filters=None):
        self.group_id = group_id
        self.category = category
        self.filter_relation = filter_relation
        self.filters = filters

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.category, 'category')
        self.validate_required(self.filter_relation, 'filter_relation')
        self.validate_required(self.filters, 'filters')
        if self.filters:
            self.filters.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Category'] = self.category
        result['FilterRelation'] = self.filter_relation
        if self.filters is not None:
            result['Filters'] = self.filters.to_map()
        else:
            result['Filters'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.category = map.get('Category')
        self.filter_relation = map.get('FilterRelation')
        if map.get('Filters') is not None:
            temp_model = DescribeMonitorGroupDynamicRulesResponseResourceResourceFilters()
            self.filters = temp_model.from_map(map['Filters'])
        else:
            self.filters = None
        return self


class DescribeMonitorGroupDynamicRulesResponseResource(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeMonitorGroupDynamicRulesResponseResourceResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class CreateMonitorGroupInstancesRequest(TeaModel):
    def __init__(self, group_id=None, instances=None):
        self.group_id = group_id
        self.instances = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.instances, 'instances')
        if self.instances:
            for k in self.instances:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Instances'] = []
        if self.instances is not None:
            for k in self.instances:
                result['Instances'].append(k.to_map() if k else None)
        else:
            result['Instances'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.instances = []
        if map.get('Instances') is not None:
            for k in map.get('Instances'):
                temp_model = CreateMonitorGroupInstancesRequestInstances()
                temp_model = temp_model.from_map(k)
                self.instances.append(temp_model)
        else:
            self.instances = None
        return self


class CreateMonitorGroupInstancesRequestInstances(TeaModel):
    def __init__(self, category=None, instance_id=None, region_id=None, instance_name=None):
        self.category = category
        self.instance_id = instance_id
        self.region_id = region_id
        self.instance_name = instance_name

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.instance_name, 'instance_name')

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['InstanceId'] = self.instance_id
        result['RegionId'] = self.region_id
        result['InstanceName'] = self.instance_name
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.instance_id = map.get('InstanceId')
        self.region_id = map.get('RegionId')
        self.instance_name = map.get('InstanceName')
        return self


class CreateMonitorGroupInstancesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class CreateMonitorGroupNotifyPolicyRequest(TeaModel):
    def __init__(self, policy_type=None, group_id=None, start_time=None, end_time=None):
        self.policy_type = policy_type
        self.group_id = group_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.policy_type, 'policy_type')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['PolicyType'] = self.policy_type
        result['GroupId'] = self.group_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.policy_type = map.get('PolicyType')
        self.group_id = map.get('GroupId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateMonitorGroupNotifyPolicyResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, result=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.result = result

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.result, 'result')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Result'] = self.result
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.result = map.get('Result')
        return self


class DeleteMonitorGroupInstancesRequest(TeaModel):
    def __init__(self, group_id=None, instance_id_list=None, category=None):
        self.group_id = group_id
        self.instance_id_list = instance_id_list
        self.category = category

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.instance_id_list, 'instance_id_list')
        self.validate_required(self.category, 'category')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['InstanceIdList'] = self.instance_id_list
        result['Category'] = self.category
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.instance_id_list = map.get('InstanceIdList')
        self.category = map.get('Category')
        return self


class DeleteMonitorGroupInstancesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DeleteMonitorGroupDynamicRuleRequest(TeaModel):
    def __init__(self, group_id=None, category=None):
        self.group_id = group_id
        self.category = category

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.category, 'category')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Category'] = self.category
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.category = map.get('Category')
        return self


class DeleteMonitorGroupDynamicRuleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class PutMonitorGroupDynamicRuleRequest(TeaModel):
    def __init__(self, group_id=None, group_rules=None):
        self.group_id = group_id
        self.group_rules = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_rules, 'group_rules')
        if self.group_rules:
            for k in self.group_rules:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupRules'] = []
        if self.group_rules is not None:
            for k in self.group_rules:
                result['GroupRules'].append(k.to_map() if k else None)
        else:
            result['GroupRules'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_rules = []
        if map.get('GroupRules') is not None:
            for k in map.get('GroupRules'):
                temp_model = PutMonitorGroupDynamicRuleRequestGroupRules()
                temp_model = temp_model.from_map(k)
                self.group_rules.append(temp_model)
        else:
            self.group_rules = None
        return self


class PutMonitorGroupDynamicRuleRequestGroupRulesFilters(TeaModel):
    def __init__(self, name=None, function=None, value=None):
        self.name = name
        self.function = function
        self.value = value

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.function, 'function')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Function'] = self.function
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.function = map.get('Function')
        self.value = map.get('Value')
        return self


class PutMonitorGroupDynamicRuleRequestGroupRules(TeaModel):
    def __init__(self, category=None, filter_relation=None, filters=None):
        self.category = category
        self.filter_relation = filter_relation
        self.filters = []

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.filter_relation, 'filter_relation')
        self.validate_required(self.filters, 'filters')
        if self.filters:
            for k in self.filters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['FilterRelation'] = self.filter_relation
        result['Filters'] = []
        if self.filters is not None:
            for k in self.filters:
                result['Filters'].append(k.to_map() if k else None)
        else:
            result['Filters'] = None
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.filter_relation = map.get('FilterRelation')
        self.filters = []
        if map.get('Filters') is not None:
            for k in map.get('Filters'):
                temp_model = PutMonitorGroupDynamicRuleRequestGroupRulesFilters()
                temp_model = temp_model.from_map(k)
                self.filters.append(temp_model)
        else:
            self.filters = None
        return self


class PutMonitorGroupDynamicRuleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeMonitorGroupInstancesRequest(TeaModel):
    def __init__(self, page_size=None, page_number=None, group_id=None, category=None, keyword=None, instance_ids=None):
        self.page_size = page_size
        self.page_number = page_number
        self.group_id = group_id
        self.category = category
        self.keyword = keyword
        self.instance_ids = instance_ids

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['GroupId'] = self.group_id
        result['Category'] = self.category
        result['Keyword'] = self.keyword
        result['InstanceIds'] = self.instance_ids
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.group_id = map.get('GroupId')
        self.category = map.get('Category')
        self.keyword = map.get('Keyword')
        self.instance_ids = map.get('InstanceIds')
        return self


class DescribeMonitorGroupInstancesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, page_number=None, page_size=None, total=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.page_number = page_number
        self.page_size = page_size
        self.total = total
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total, 'total')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Total'] = self.total
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total = map.get('Total')
        if map.get('Resources') is not None:
            temp_model = DescribeMonitorGroupInstancesResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeMonitorGroupInstancesResponseResourcesResource(TeaModel):
    def __init__(self, id=None, region_id=None, instance_id=None, category=None, instance_name=None):
        self.id = id
        self.region_id = region_id
        self.instance_id = instance_id
        self.category = category
        self.instance_name = instance_name

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.category, 'category')
        self.validate_required(self.instance_name, 'instance_name')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['RegionId'] = self.region_id
        result['InstanceId'] = self.instance_id
        result['Category'] = self.category
        result['InstanceName'] = self.instance_name
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region_id = map.get('RegionId')
        self.instance_id = map.get('InstanceId')
        self.category = map.get('Category')
        self.instance_name = map.get('InstanceName')
        return self


class DescribeMonitorGroupInstancesResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeMonitorGroupInstancesResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DescribeMonitorGroupCategoriesRequest(TeaModel):
    def __init__(self, group_id=None):
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitorGroupCategoriesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, monitor_group_categories=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.monitor_group_categories = monitor_group_categories

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.monitor_group_categories, 'monitor_group_categories')
        if self.monitor_group_categories:
            self.monitor_group_categories.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.monitor_group_categories is not None:
            result['MonitorGroupCategories'] = self.monitor_group_categories.to_map()
        else:
            result['MonitorGroupCategories'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('MonitorGroupCategories') is not None:
            temp_model = DescribeMonitorGroupCategoriesResponseMonitorGroupCategories()
            self.monitor_group_categories = temp_model.from_map(map['MonitorGroupCategories'])
        else:
            self.monitor_group_categories = None
        return self


class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem(TeaModel):
    def __init__(self, category=None, count=None):
        self.category = category
        self.count = count

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.count = map.get('Count')
        return self


class DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory(TeaModel):
    def __init__(self, category_item=None):
        self.category_item = []

    def validate(self):
        self.validate_required(self.category_item, 'category_item')
        if self.category_item:
            for k in self.category_item:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CategoryItem'] = []
        if self.category_item is not None:
            for k in self.category_item:
                result['CategoryItem'].append(k.to_map() if k else None)
        else:
            result['CategoryItem'] = None
        return result

    def from_map(self, map={}):
        self.category_item = []
        if map.get('CategoryItem') is not None:
            for k in map.get('CategoryItem'):
                temp_model = DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategoryCategoryItem()
                temp_model = temp_model.from_map(k)
                self.category_item.append(temp_model)
        else:
            self.category_item = None
        return self


class DescribeMonitorGroupCategoriesResponseMonitorGroupCategories(TeaModel):
    def __init__(self, group_id=None, monitor_group_category=None):
        self.group_id = group_id
        self.monitor_group_category = monitor_group_category

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.monitor_group_category, 'monitor_group_category')
        if self.monitor_group_category:
            self.monitor_group_category.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        if self.monitor_group_category is not None:
            result['MonitorGroupCategory'] = self.monitor_group_category.to_map()
        else:
            result['MonitorGroupCategory'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        if map.get('MonitorGroupCategory') is not None:
            temp_model = DescribeMonitorGroupCategoriesResponseMonitorGroupCategoriesMonitorGroupCategory()
            self.monitor_group_category = temp_model.from_map(map['MonitorGroupCategory'])
        else:
            self.monitor_group_category = None
        return self


class ModifyMonitorGroupRequest(TeaModel):
    def __init__(self, group_id=None, group_name=None, contact_groups=None):
        self.group_id = group_id
        self.group_name = group_name
        self.contact_groups = contact_groups

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['ContactGroups'] = self.contact_groups
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.contact_groups = map.get('ContactGroups')
        return self


class ModifyMonitorGroupResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeMetricRuleListRequest(TeaModel):
    def __init__(self, metric_name=None, enable_state=None, namespace=None, page=None, page_size=None, alert_state=None, dimensions=None, rule_name=None, group_id=None, rule_ids=None):
        self.metric_name = metric_name
        self.enable_state = enable_state
        self.namespace = namespace
        self.page = page
        self.page_size = page_size
        self.alert_state = alert_state
        self.dimensions = dimensions
        self.rule_name = rule_name
        self.group_id = group_id
        self.rule_ids = rule_ids

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['EnableState'] = self.enable_state
        result['Namespace'] = self.namespace
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        result['AlertState'] = self.alert_state
        result['Dimensions'] = self.dimensions
        result['RuleName'] = self.rule_name
        result['GroupId'] = self.group_id
        result['RuleIds'] = self.rule_ids
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.enable_state = map.get('EnableState')
        self.namespace = map.get('Namespace')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        self.alert_state = map.get('AlertState')
        self.dimensions = map.get('Dimensions')
        self.rule_name = map.get('RuleName')
        self.group_id = map.get('GroupId')
        self.rule_ids = map.get('RuleIds')
        return self


class DescribeMetricRuleListResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, total=None, alarms=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.alarms = alarms

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.alarms, 'alarms')
        if self.alarms:
            self.alarms.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        if self.alarms is not None:
            result['Alarms'] = self.alarms.to_map()
        else:
            result['Alarms'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        if map.get('Alarms') is not None:
            temp_model = DescribeMetricRuleListResponseAlarms()
            self.alarms = temp_model.from_map(map['Alarms'])
        else:
            self.alarms = None
        return self


class DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical(TeaModel):
    def __init__(self, comparison_operator=None, statistics=None, threshold=None, times=None):
        self.comparison_operator = comparison_operator
        self.statistics = statistics
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['ComparisonOperator'] = self.comparison_operator
        result['Statistics'] = self.statistics
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.comparison_operator = map.get('ComparisonOperator')
        self.statistics = map.get('Statistics')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleListResponseAlarmsAlarmEscalations(TeaModel):
    def __init__(self, info=None, warn=None, critical=None):
        self.info = info
        self.warn = warn
        self.critical = critical

    def validate(self):
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()

    def to_map(self):
        result = {}
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        return result

    def from_map(self, map={}):
        if map.get('Info') is not None:
            temp_model = DescribeMetricRuleListResponseAlarmsAlarmEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        if map.get('Warn') is not None:
            temp_model = DescribeMetricRuleListResponseAlarmsAlarmEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Critical') is not None:
            temp_model = DescribeMetricRuleListResponseAlarmsAlarmEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        return self


class DescribeMetricRuleListResponseAlarmsAlarm(TeaModel):
    def __init__(self, rule_id=None, namespace=None, metric_name=None, period=None, effective_interval=None, no_effective_interval=None, silence_time=None, enable_state=None, alert_state=None, contact_groups=None, webhook=None, mail_subject=None, rule_name=None, resources=None, group_id=None, group_name=None, dimensions=None, source_type=None, escalations=None):
        self.rule_id = rule_id
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.enable_state = enable_state
        self.alert_state = alert_state
        self.contact_groups = contact_groups
        self.webhook = webhook
        self.mail_subject = mail_subject
        self.rule_name = rule_name
        self.resources = resources
        self.group_id = group_id
        self.group_name = group_name
        self.dimensions = dimensions
        self.source_type = source_type
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.period, 'period')
        self.validate_required(self.effective_interval, 'effective_interval')
        self.validate_required(self.no_effective_interval, 'no_effective_interval')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.enable_state, 'enable_state')
        self.validate_required(self.alert_state, 'alert_state')
        self.validate_required(self.contact_groups, 'contact_groups')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.mail_subject, 'mail_subject')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.resources, 'resources')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.dimensions, 'dimensions')
        self.validate_required(self.source_type, 'source_type')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['EnableState'] = self.enable_state
        result['AlertState'] = self.alert_state
        result['ContactGroups'] = self.contact_groups
        result['Webhook'] = self.webhook
        result['MailSubject'] = self.mail_subject
        result['RuleName'] = self.rule_name
        result['Resources'] = self.resources
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['Dimensions'] = self.dimensions
        result['SourceType'] = self.source_type
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.enable_state = map.get('EnableState')
        self.alert_state = map.get('AlertState')
        self.contact_groups = map.get('ContactGroups')
        self.webhook = map.get('Webhook')
        self.mail_subject = map.get('MailSubject')
        self.rule_name = map.get('RuleName')
        self.resources = map.get('Resources')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.dimensions = map.get('Dimensions')
        self.source_type = map.get('SourceType')
        if map.get('Escalations') is not None:
            temp_model = DescribeMetricRuleListResponseAlarmsAlarmEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class DescribeMetricRuleListResponseAlarms(TeaModel):
    def __init__(self, alarm=None):
        self.alarm = []

    def validate(self):
        self.validate_required(self.alarm, 'alarm')
        if self.alarm:
            for k in self.alarm:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Alarm'] = []
        if self.alarm is not None:
            for k in self.alarm:
                result['Alarm'].append(k.to_map() if k else None)
        else:
            result['Alarm'] = None
        return result

    def from_map(self, map={}):
        self.alarm = []
        if map.get('Alarm') is not None:
            for k in map.get('Alarm'):
                temp_model = DescribeMetricRuleListResponseAlarmsAlarm()
                temp_model = temp_model.from_map(k)
                self.alarm.append(temp_model)
        else:
            self.alarm = None
        return self


class PutResourceMetricRuleRequest(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, namespace=None, metric_name=None, resources=None, contact_groups=None, webhook=None, effective_interval=None, no_effective_interval=None, silence_time=None, period=None, interval=None, email_subject=None, escalations=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.resources = resources
        self.contact_groups = contact_groups
        self.webhook = webhook
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.period = period
        self.interval = interval
        self.email_subject = email_subject
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.resources, 'resources')
        self.validate_required(self.contact_groups, 'contact_groups')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Resources'] = self.resources
        result['ContactGroups'] = self.contact_groups
        result['Webhook'] = self.webhook
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Period'] = self.period
        result['Interval'] = self.interval
        result['EmailSubject'] = self.email_subject
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.resources = map.get('Resources')
        self.contact_groups = map.get('ContactGroups')
        self.webhook = map.get('Webhook')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.period = map.get('Period')
        self.interval = map.get('Interval')
        self.email_subject = map.get('EmailSubject')
        if map.get('Escalations') is not None:
            temp_model = PutResourceMetricRuleRequestEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class PutResourceMetricRuleRequestEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRuleRequestEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRuleRequestEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutResourceMetricRuleRequestEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = PutResourceMetricRuleRequestEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = PutResourceMetricRuleRequestEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = PutResourceMetricRuleRequestEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class PutResourceMetricRuleResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class PutGroupMetricRuleRequest(TeaModel):
    def __init__(self, group_id=None, rule_id=None, category=None, rule_name=None, namespace=None, metric_name=None, dimensions=None, effective_interval=None, no_effective_interval=None, silence_time=None, period=None, interval=None, webhook=None, email_subject=None, escalations=None):
        self.group_id = group_id
        self.rule_id = rule_id
        self.category = category
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.dimensions = dimensions
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.period = period
        self.interval = interval
        self.webhook = webhook
        self.email_subject = email_subject
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.category, 'category')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['RuleId'] = self.rule_id
        result['Category'] = self.category
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Dimensions'] = self.dimensions
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Period'] = self.period
        result['Interval'] = self.interval
        result['Webhook'] = self.webhook
        result['EmailSubject'] = self.email_subject
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.rule_id = map.get('RuleId')
        self.category = map.get('Category')
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.dimensions = map.get('Dimensions')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.period = map.get('Period')
        self.interval = map.get('Interval')
        self.webhook = map.get('Webhook')
        self.email_subject = map.get('EmailSubject')
        if map.get('Escalations') is not None:
            temp_model = PutGroupMetricRuleRequestEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class PutGroupMetricRuleRequestEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutGroupMetricRuleRequestEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutGroupMetricRuleRequestEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class PutGroupMetricRuleRequestEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = PutGroupMetricRuleRequestEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = PutGroupMetricRuleRequestEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = PutGroupMetricRuleRequestEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class PutGroupMetricRuleResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class EnableMetricRulesRequest(TeaModel):
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


class EnableMetricRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeMetricRuleCountRequest(TeaModel):
    def __init__(self, namespace=None, metric_name=None):
        self.namespace = namespace
        self.metric_name = metric_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        return self


class DescribeMetricRuleCountResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, metric_rule_count=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.metric_rule_count = metric_rule_count

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.metric_rule_count, 'metric_rule_count')
        if self.metric_rule_count:
            self.metric_rule_count.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.metric_rule_count is not None:
            result['MetricRuleCount'] = self.metric_rule_count.to_map()
        else:
            result['MetricRuleCount'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('MetricRuleCount') is not None:
            temp_model = DescribeMetricRuleCountResponseMetricRuleCount()
            self.metric_rule_count = temp_model.from_map(map['MetricRuleCount'])
        else:
            self.metric_rule_count = None
        return self


class DescribeMetricRuleCountResponseMetricRuleCount(TeaModel):
    def __init__(self, alarm=None, disable=None, nodata=None, ok=None, total=None):
        self.alarm = alarm
        self.disable = disable
        self.nodata = nodata
        self.ok = ok
        self.total = total

    def validate(self):
        self.validate_required(self.alarm, 'alarm')
        self.validate_required(self.disable, 'disable')
        self.validate_required(self.nodata, 'nodata')
        self.validate_required(self.ok, 'ok')
        self.validate_required(self.total, 'total')

    def to_map(self):
        result = {}
        result['Alarm'] = self.alarm
        result['Disable'] = self.disable
        result['Nodata'] = self.nodata
        result['Ok'] = self.ok
        result['Total'] = self.total
        return result

    def from_map(self, map={}):
        self.alarm = map.get('Alarm')
        self.disable = map.get('Disable')
        self.nodata = map.get('Nodata')
        self.ok = map.get('Ok')
        self.total = map.get('Total')
        return self


class CreateGroupMetricRulesRequest(TeaModel):
    def __init__(self, group_id=None, group_metric_rules=None):
        self.group_id = group_id
        self.group_metric_rules = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        if self.group_metric_rules:
            for k in self.group_metric_rules:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupMetricRules'] = []
        if self.group_metric_rules is not None:
            for k in self.group_metric_rules:
                result['GroupMetricRules'].append(k.to_map() if k else None)
        else:
            result['GroupMetricRules'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_metric_rules = []
        if map.get('GroupMetricRules') is not None:
            for k in map.get('GroupMetricRules'):
                temp_model = CreateGroupMetricRulesRequestGroupMetricRules()
                temp_model = temp_model.from_map(k)
                self.group_metric_rules.append(temp_model)
        else:
            self.group_metric_rules = None
        return self


class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateGroupMetricRulesRequestGroupMetricRulesEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = CreateGroupMetricRulesRequestGroupMetricRulesEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = CreateGroupMetricRulesRequestGroupMetricRulesEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = CreateGroupMetricRulesRequestGroupMetricRulesEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class CreateGroupMetricRulesRequestGroupMetricRules(TeaModel):
    def __init__(self, category=None, rule_name=None, rule_id=None, namespace=None, metric_name=None, dimensions=None, effective_interval=None, no_effective_interval=None, silence_time=None, period=None, interval=None, webhook=None, email_subject=None, escalations=None):
        self.category = category
        self.rule_name = rule_name
        self.rule_id = rule_id
        self.namespace = namespace
        self.metric_name = metric_name
        self.dimensions = dimensions
        self.effective_interval = effective_interval
        self.no_effective_interval = no_effective_interval
        self.silence_time = silence_time
        self.period = period
        self.interval = interval
        self.webhook = webhook
        self.email_subject = email_subject
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['RuleName'] = self.rule_name
        result['RuleId'] = self.rule_id
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Dimensions'] = self.dimensions
        result['EffectiveInterval'] = self.effective_interval
        result['NoEffectiveInterval'] = self.no_effective_interval
        result['SilenceTime'] = self.silence_time
        result['Period'] = self.period
        result['Interval'] = self.interval
        result['Webhook'] = self.webhook
        result['EmailSubject'] = self.email_subject
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.rule_name = map.get('RuleName')
        self.rule_id = map.get('RuleId')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.dimensions = map.get('Dimensions')
        self.effective_interval = map.get('EffectiveInterval')
        self.no_effective_interval = map.get('NoEffectiveInterval')
        self.silence_time = map.get('SilenceTime')
        self.period = map.get('Period')
        self.interval = map.get('Interval')
        self.webhook = map.get('Webhook')
        self.email_subject = map.get('EmailSubject')
        if map.get('Escalations') is not None:
            temp_model = CreateGroupMetricRulesRequestGroupMetricRulesEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class CreateGroupMetricRulesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Resources') is not None:
            temp_model = CreateGroupMetricRulesResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class CreateGroupMetricRulesResponseResourcesAlertResult(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, message=None, code=None, success=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.message = message
        self.code = code
        self.success = success

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        return self


class CreateGroupMetricRulesResponseResources(TeaModel):
    def __init__(self, alert_result=None):
        self.alert_result = []

    def validate(self):
        self.validate_required(self.alert_result, 'alert_result')
        if self.alert_result:
            for k in self.alert_result:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AlertResult'] = []
        if self.alert_result is not None:
            for k in self.alert_result:
                result['AlertResult'].append(k.to_map() if k else None)
        else:
            result['AlertResult'] = None
        return result

    def from_map(self, map={}):
        self.alert_result = []
        if map.get('AlertResult') is not None:
            for k in map.get('AlertResult'):
                temp_model = CreateGroupMetricRulesResponseResourcesAlertResult()
                temp_model = temp_model.from_map(k)
                self.alert_result.append(temp_model)
        else:
            self.alert_result = None
        return self


class DisableMetricRulesRequest(TeaModel):
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


class DisableMetricRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DeleteMetricRulesRequest(TeaModel):
    def __init__(self, id=None):
        self.id = []

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = []
        if self.id is not None:
            for k in self.id:
                result['Id'].append(k)
        else:
            result['Id'] = None
        return result

    def from_map(self, map={}):
        self.id = []
        if map.get('Id') is not None:
            for k in map.get('Id'):
                self.id.append(k)
        else:
            self.id = None
        return self


class DeleteMetricRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class ModifyMetricRuleTemplateRequest(TeaModel):
    def __init__(self, template_id=None, name=None, description=None, rest_version=None, alert_templates=None):
        self.template_id = template_id
        self.name = name
        self.description = description
        self.rest_version = rest_version
        self.alert_templates = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.rest_version, 'rest_version')
        if self.alert_templates:
            for k in self.alert_templates:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['Description'] = self.description
        result['RestVersion'] = self.rest_version
        result['AlertTemplates'] = []
        if self.alert_templates is not None:
            for k in self.alert_templates:
                result['AlertTemplates'].append(k.to_map() if k else None)
        else:
            result['AlertTemplates'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.rest_version = map.get('RestVersion')
        self.alert_templates = []
        if map.get('AlertTemplates') is not None:
            for k in map.get('AlertTemplates'):
                temp_model = ModifyMetricRuleTemplateRequestAlertTemplates()
                temp_model = temp_model.from_map(k)
                self.alert_templates.append(temp_model)
        else:
            self.alert_templates = None
        return self


class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class ModifyMetricRuleTemplateRequestAlertTemplatesEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = ModifyMetricRuleTemplateRequestAlertTemplatesEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class ModifyMetricRuleTemplateRequestAlertTemplates(TeaModel):
    def __init__(self, metric_name=None, rule_name=None, category=None, namespace=None, period=None, selector=None, webhook=None, escalations=None):
        self.metric_name = metric_name
        self.rule_name = rule_name
        self.category = category
        self.namespace = namespace
        self.period = period
        self.selector = selector
        self.webhook = webhook
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.category, 'category')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.period, 'period')
        self.validate_required(self.selector, 'selector')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['RuleName'] = self.rule_name
        result['Category'] = self.category
        result['Namespace'] = self.namespace
        result['Period'] = self.period
        result['Selector'] = self.selector
        result['Webhook'] = self.webhook
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.rule_name = map.get('RuleName')
        self.category = map.get('Category')
        self.namespace = map.get('Namespace')
        self.period = map.get('Period')
        self.selector = map.get('Selector')
        self.webhook = map.get('Webhook')
        if map.get('Escalations') is not None:
            temp_model = ModifyMetricRuleTemplateRequestAlertTemplatesEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class ModifyMetricRuleTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class ApplyMetricRuleTemplateRequest(TeaModel):
    def __init__(self, silence_time=None, group_id=None, template_ids=None, enable_start_time=None, enable_end_time=None, notify_level=None, apply_mode=None, webhook=None):
        self.silence_time = silence_time
        self.group_id = group_id
        self.template_ids = template_ids
        self.enable_start_time = enable_start_time
        self.enable_end_time = enable_end_time
        self.notify_level = notify_level
        self.apply_mode = apply_mode
        self.webhook = webhook

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.template_ids, 'template_ids')

    def to_map(self):
        result = {}
        result['SilenceTime'] = self.silence_time
        result['GroupId'] = self.group_id
        result['TemplateIds'] = self.template_ids
        result['EnableStartTime'] = self.enable_start_time
        result['EnableEndTime'] = self.enable_end_time
        result['NotifyLevel'] = self.notify_level
        result['ApplyMode'] = self.apply_mode
        result['Webhook'] = self.webhook
        return result

    def from_map(self, map={}):
        self.silence_time = map.get('SilenceTime')
        self.group_id = map.get('GroupId')
        self.template_ids = map.get('TemplateIds')
        self.enable_start_time = map.get('EnableStartTime')
        self.enable_end_time = map.get('EnableEndTime')
        self.notify_level = map.get('NotifyLevel')
        self.apply_mode = map.get('ApplyMode')
        self.webhook = map.get('Webhook')
        return self


class ApplyMetricRuleTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, resource=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.resource = resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.resource, 'resource')
        if self.resource:
            self.resource.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.resource is not None:
            result['Resource'] = self.resource.to_map()
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Resource') is not None:
            temp_model = ApplyMetricRuleTemplateResponseResource()
            self.resource = temp_model.from_map(map['Resource'])
        else:
            self.resource = None
        return self


class ApplyMetricRuleTemplateResponseResourceAlertResults(TeaModel):
    def __init__(self, group_id=None, rule_id=None, message=None, rule_name=None, code=None, success=None):
        self.group_id = group_id
        self.rule_id = rule_id
        self.message = message
        self.rule_name = rule_name
        self.code = code
        self.success = success

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['RuleId'] = self.rule_id
        result['Message'] = self.message
        result['RuleName'] = self.rule_name
        result['Code'] = self.code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.rule_id = map.get('RuleId')
        self.message = map.get('Message')
        self.rule_name = map.get('RuleName')
        self.code = map.get('Code')
        self.success = map.get('Success')
        return self


class ApplyMetricRuleTemplateResponseResource(TeaModel):
    def __init__(self, group_id=None, alert_results=None):
        self.group_id = group_id
        self.alert_results = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.alert_results, 'alert_results')
        if self.alert_results:
            for k in self.alert_results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['AlertResults'] = []
        if self.alert_results is not None:
            for k in self.alert_results:
                result['AlertResults'].append(k.to_map() if k else None)
        else:
            result['AlertResults'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.alert_results = []
        if map.get('AlertResults') is not None:
            for k in map.get('AlertResults'):
                temp_model = ApplyMetricRuleTemplateResponseResourceAlertResults()
                temp_model = temp_model.from_map(k)
                self.alert_results.append(temp_model)
        else:
            self.alert_results = None
        return self


class DescribeMetricRuleTemplateAttributeRequest(TeaModel):
    def __init__(self, name=None, template_id=None):
        self.name = name
        self.template_id = template_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        return self


class DescribeMetricRuleTemplateAttributeResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, resource=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.resource = resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.resource, 'resource')
        if self.resource:
            self.resource.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.resource is not None:
            result['Resource'] = self.resource.to_map()
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Resource') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResource()
            self.resource = temp_model.from_map(map['Resource'])
        else:
            self.resource = None
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations(TeaModel):
    def __init__(self, info=None, warn=None, critical=None):
        self.info = info
        self.warn = warn
        self.critical = critical

    def validate(self):
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()

    def to_map(self):
        result = {}
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        return result

    def from_map(self, map={}):
        if map.get('Info') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        if map.get('Warn') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Critical') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate(TeaModel):
    def __init__(self, rule_name=None, category=None, namespace=None, metric_name=None, selector=None, webhook=None, escalations=None):
        self.rule_name = rule_name
        self.category = category
        self.namespace = namespace
        self.metric_name = metric_name
        self.selector = selector
        self.webhook = webhook
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.category, 'category')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.selector, 'selector')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['Category'] = self.category
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Selector'] = self.selector
        result['Webhook'] = self.webhook
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.category = map.get('Category')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.selector = map.get('Selector')
        self.webhook = map.get('Webhook')
        if map.get('Escalations') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplateEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates(TeaModel):
    def __init__(self, alert_template=None):
        self.alert_template = []

    def validate(self):
        self.validate_required(self.alert_template, 'alert_template')
        if self.alert_template:
            for k in self.alert_template:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AlertTemplate'] = []
        if self.alert_template is not None:
            for k in self.alert_template:
                result['AlertTemplate'].append(k.to_map() if k else None)
        else:
            result['AlertTemplate'] = None
        return result

    def from_map(self, map={}):
        self.alert_template = []
        if map.get('AlertTemplate') is not None:
            for k in map.get('AlertTemplate'):
                temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplatesAlertTemplate()
                temp_model = temp_model.from_map(k)
                self.alert_template.append(temp_model)
        else:
            self.alert_template = None
        return self


class DescribeMetricRuleTemplateAttributeResponseResource(TeaModel):
    def __init__(self, name=None, template_id=None, rest_version=None, description=None, alert_templates=None):
        self.name = name
        self.template_id = template_id
        self.rest_version = rest_version
        self.description = description
        self.alert_templates = alert_templates

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.rest_version, 'rest_version')
        self.validate_required(self.description, 'description')
        self.validate_required(self.alert_templates, 'alert_templates')
        if self.alert_templates:
            self.alert_templates.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        result['RestVersion'] = self.rest_version
        result['Description'] = self.description
        if self.alert_templates is not None:
            result['AlertTemplates'] = self.alert_templates.to_map()
        else:
            result['AlertTemplates'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        self.rest_version = map.get('RestVersion')
        self.description = map.get('Description')
        if map.get('AlertTemplates') is not None:
            temp_model = DescribeMetricRuleTemplateAttributeResponseResourceAlertTemplates()
            self.alert_templates = temp_model.from_map(map['AlertTemplates'])
        else:
            self.alert_templates = None
        return self


class CreateMetricRuleTemplateRequest(TeaModel):
    def __init__(self, name=None, description=None, alert_templates=None):
        self.name = name
        self.description = description
        self.alert_templates = []

    def validate(self):
        self.validate_required(self.name, 'name')
        if self.alert_templates:
            for k in self.alert_templates:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Description'] = self.description
        result['AlertTemplates'] = []
        if self.alert_templates is not None:
            for k in self.alert_templates:
                result['AlertTemplates'].append(k.to_map() if k else None)
        else:
            result['AlertTemplates'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.alert_templates = []
        if map.get('AlertTemplates') is not None:
            for k in map.get('AlertTemplates'):
                temp_model = CreateMetricRuleTemplateRequestAlertTemplates()
                temp_model = temp_model.from_map(k)
                self.alert_templates.append(temp_model)
        else:
            self.alert_templates = None
        return self


class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo(TeaModel):
    def __init__(self, statistics=None, comparison_operator=None, threshold=None, times=None):
        self.statistics = statistics
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.times = times

    def validate(self):
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['Statistics'] = self.statistics
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.statistics = map.get('Statistics')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.times = map.get('Times')
        return self


class CreateMetricRuleTemplateRequestAlertTemplatesEscalations(TeaModel):
    def __init__(self, critical=None, warn=None, info=None):
        self.critical = critical
        self.warn = warn
        self.info = info

    def validate(self):
        self.validate_required(self.critical, 'critical')
        if self.critical:
            self.critical.validate()
        self.validate_required(self.warn, 'warn')
        if self.warn:
            self.warn.validate()
        self.validate_required(self.info, 'info')
        if self.info:
            self.info.validate()

    def to_map(self):
        result = {}
        if self.critical is not None:
            result['Critical'] = self.critical.to_map()
        else:
            result['Critical'] = None
        if self.warn is not None:
            result['Warn'] = self.warn.to_map()
        else:
            result['Warn'] = None
        if self.info is not None:
            result['Info'] = self.info.to_map()
        else:
            result['Info'] = None
        return result

    def from_map(self, map={}):
        if map.get('Critical') is not None:
            temp_model = CreateMetricRuleTemplateRequestAlertTemplatesEscalationsCritical()
            self.critical = temp_model.from_map(map['Critical'])
        else:
            self.critical = None
        if map.get('Warn') is not None:
            temp_model = CreateMetricRuleTemplateRequestAlertTemplatesEscalationsWarn()
            self.warn = temp_model.from_map(map['Warn'])
        else:
            self.warn = None
        if map.get('Info') is not None:
            temp_model = CreateMetricRuleTemplateRequestAlertTemplatesEscalationsInfo()
            self.info = temp_model.from_map(map['Info'])
        else:
            self.info = None
        return self


class CreateMetricRuleTemplateRequestAlertTemplates(TeaModel):
    def __init__(self, metric_name=None, rule_name=None, category=None, namespace=None, period=None, selector=None, webhook=None, escalations=None):
        self.metric_name = metric_name
        self.rule_name = rule_name
        self.category = category
        self.namespace = namespace
        self.period = period
        self.selector = selector
        self.webhook = webhook
        self.escalations = escalations

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.category, 'category')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.period, 'period')
        self.validate_required(self.selector, 'selector')
        self.validate_required(self.webhook, 'webhook')
        self.validate_required(self.escalations, 'escalations')
        if self.escalations:
            self.escalations.validate()

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['RuleName'] = self.rule_name
        result['Category'] = self.category
        result['Namespace'] = self.namespace
        result['Period'] = self.period
        result['Selector'] = self.selector
        result['Webhook'] = self.webhook
        if self.escalations is not None:
            result['Escalations'] = self.escalations.to_map()
        else:
            result['Escalations'] = None
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.rule_name = map.get('RuleName')
        self.category = map.get('Category')
        self.namespace = map.get('Namespace')
        self.period = map.get('Period')
        self.selector = map.get('Selector')
        self.webhook = map.get('Webhook')
        if map.get('Escalations') is not None:
            temp_model = CreateMetricRuleTemplateRequestAlertTemplatesEscalations()
            self.escalations = temp_model.from_map(map['Escalations'])
        else:
            self.escalations = None
        return self


class CreateMetricRuleTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, id=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.id = id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.id = map.get('Id')
        return self


class DeleteMetricRuleTemplateRequest(TeaModel):
    def __init__(self, template_id=None):
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        return self


class DeleteMetricRuleTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, resource=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.resource = resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.resource, 'resource')
        if self.resource:
            self.resource.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.resource is not None:
            result['Resource'] = self.resource.to_map()
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Resource') is not None:
            temp_model = DeleteMetricRuleTemplateResponseResource()
            self.resource = temp_model.from_map(map['Resource'])
        else:
            self.resource = None
        return self


class DeleteMetricRuleTemplateResponseResource(TeaModel):
    def __init__(self, template_id=None):
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        return self


class DescribeMetricRuleTemplateListRequest(TeaModel):
    def __init__(self, name=None, keyword=None, template_id=None, page_number=None, page_size=None, history=None):
        self.name = name
        self.keyword = keyword
        self.template_id = template_id
        self.page_number = page_number
        self.page_size = page_size
        self.history = history

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Keyword'] = self.keyword
        result['TemplateId'] = self.template_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['History'] = self.history
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.keyword = map.get('Keyword')
        self.template_id = map.get('TemplateId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.history = map.get('History')
        return self


class DescribeMetricRuleTemplateListResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, total=None, templates=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.templates = templates

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.templates, 'templates')
        if self.templates:
            self.templates.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        if self.templates is not None:
            result['Templates'] = self.templates.to_map()
        else:
            result['Templates'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        if map.get('Templates') is not None:
            temp_model = DescribeMetricRuleTemplateListResponseTemplates()
            self.templates = temp_model.from_map(map['Templates'])
        else:
            self.templates = None
        return self


class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory(TeaModel):
    def __init__(self, group_id=None, group_name=None, apply_time=None):
        self.group_id = group_id
        self.group_name = group_name
        self.apply_time = apply_time

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.apply_time, 'apply_time')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['ApplyTime'] = self.apply_time
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.apply_time = map.get('ApplyTime')
        return self


class DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories(TeaModel):
    def __init__(self, apply_history=None):
        self.apply_history = []

    def validate(self):
        self.validate_required(self.apply_history, 'apply_history')
        if self.apply_history:
            for k in self.apply_history:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ApplyHistory'] = []
        if self.apply_history is not None:
            for k in self.apply_history:
                result['ApplyHistory'].append(k.to_map() if k else None)
        else:
            result['ApplyHistory'] = None
        return result

    def from_map(self, map={}):
        self.apply_history = []
        if map.get('ApplyHistory') is not None:
            for k in map.get('ApplyHistory'):
                temp_model = DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistoriesApplyHistory()
                temp_model = temp_model.from_map(k)
                self.apply_history.append(temp_model)
        else:
            self.apply_history = None
        return self


class DescribeMetricRuleTemplateListResponseTemplatesTemplate(TeaModel):
    def __init__(self, name=None, description=None, rest_version=None, template_id=None, gmt_create=None, gmt_modified=None, apply_histories=None):
        self.name = name
        self.description = description
        self.rest_version = rest_version
        self.template_id = template_id
        self.gmt_create = gmt_create
        self.gmt_modified = gmt_modified
        self.apply_histories = apply_histories

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.rest_version, 'rest_version')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.gmt_create, 'gmt_create')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.apply_histories, 'apply_histories')
        if self.apply_histories:
            self.apply_histories.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Description'] = self.description
        result['RestVersion'] = self.rest_version
        result['TemplateId'] = self.template_id
        result['GmtCreate'] = self.gmt_create
        result['GmtModified'] = self.gmt_modified
        if self.apply_histories is not None:
            result['ApplyHistories'] = self.apply_histories.to_map()
        else:
            result['ApplyHistories'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.rest_version = map.get('RestVersion')
        self.template_id = map.get('TemplateId')
        self.gmt_create = map.get('GmtCreate')
        self.gmt_modified = map.get('GmtModified')
        if map.get('ApplyHistories') is not None:
            temp_model = DescribeMetricRuleTemplateListResponseTemplatesTemplateApplyHistories()
            self.apply_histories = temp_model.from_map(map['ApplyHistories'])
        else:
            self.apply_histories = None
        return self


class DescribeMetricRuleTemplateListResponseTemplates(TeaModel):
    def __init__(self, template=None):
        self.template = []

    def validate(self):
        self.validate_required(self.template, 'template')
        if self.template:
            for k in self.template:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Template'] = []
        if self.template is not None:
            for k in self.template:
                result['Template'].append(k.to_map() if k else None)
        else:
            result['Template'] = None
        return result

    def from_map(self, map={}):
        self.template = []
        if map.get('Template') is not None:
            for k in map.get('Template'):
                temp_model = DescribeMetricRuleTemplateListResponseTemplatesTemplate()
                temp_model = temp_model.from_map(k)
                self.template.append(temp_model)
        else:
            self.template = None
        return self


class PutCustomEventRequest(TeaModel):
    def __init__(self, event_info=None):
        self.event_info = []

    def validate(self):
        if self.event_info:
            for k in self.event_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventInfo'] = []
        if self.event_info is not None:
            for k in self.event_info:
                result['EventInfo'].append(k.to_map() if k else None)
        else:
            result['EventInfo'] = None
        return result

    def from_map(self, map={}):
        self.event_info = []
        if map.get('EventInfo') is not None:
            for k in map.get('EventInfo'):
                temp_model = PutCustomEventRequestEventInfo()
                temp_model = temp_model.from_map(k)
                self.event_info.append(temp_model)
        else:
            self.event_info = None
        return self


class PutCustomEventRequestEventInfo(TeaModel):
    def __init__(self, event_name=None, content=None, time=None, group_id=None):
        self.event_name = event_name
        self.content = content
        self.time = time
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.event_name, 'event_name')
        self.validate_required(self.content, 'content')
        self.validate_required(self.time, 'time')
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['EventName'] = self.event_name
        result['Content'] = self.content
        result['Time'] = self.time
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.event_name = map.get('EventName')
        self.content = map.get('Content')
        self.time = map.get('Time')
        self.group_id = map.get('GroupId')
        return self


class PutCustomEventResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None):
        self.request_id = request_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeCustomEventCountRequest(TeaModel):
    def __init__(self, name=None, level=None, event_id=None, group_id=None, search_keywords=None, start_time=None, end_time=None):
        self.name = name
        self.level = level
        self.event_id = event_id
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Level'] = self.level
        result['EventId'] = self.event_id
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.event_id = map.get('EventId')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeCustomEventCountResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, custom_event_counts=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.custom_event_counts = custom_event_counts

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.custom_event_counts, 'custom_event_counts')
        if self.custom_event_counts:
            self.custom_event_counts.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.custom_event_counts is not None:
            result['CustomEventCounts'] = self.custom_event_counts.to_map()
        else:
            result['CustomEventCounts'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('CustomEventCounts') is not None:
            temp_model = DescribeCustomEventCountResponseCustomEventCounts()
            self.custom_event_counts = temp_model.from_map(map['CustomEventCounts'])
        else:
            self.custom_event_counts = None
        return self


class DescribeCustomEventCountResponseCustomEventCountsCustomEventCount(TeaModel):
    def __init__(self, name=None, num=None, time=None):
        self.name = name
        self.num = num
        self.time = time

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.num, 'num')
        self.validate_required(self.time, 'time')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Num'] = self.num
        result['Time'] = self.time
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.num = map.get('Num')
        self.time = map.get('Time')
        return self


class DescribeCustomEventCountResponseCustomEventCounts(TeaModel):
    def __init__(self, custom_event_count=None):
        self.custom_event_count = []

    def validate(self):
        self.validate_required(self.custom_event_count, 'custom_event_count')
        if self.custom_event_count:
            for k in self.custom_event_count:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CustomEventCount'] = []
        if self.custom_event_count is not None:
            for k in self.custom_event_count:
                result['CustomEventCount'].append(k.to_map() if k else None)
        else:
            result['CustomEventCount'] = None
        return result

    def from_map(self, map={}):
        self.custom_event_count = []
        if map.get('CustomEventCount') is not None:
            for k in map.get('CustomEventCount'):
                temp_model = DescribeCustomEventCountResponseCustomEventCountsCustomEventCount()
                temp_model = temp_model.from_map(k)
                self.custom_event_count.append(temp_model)
        else:
            self.custom_event_count = None
        return self


class DescribeCustomEventAttributeRequest(TeaModel):
    def __init__(self, name=None, level=None, event_id=None, group_id=None, search_keywords=None, start_time=None, end_time=None, page_number=None, page_size=None):
        self.name = name
        self.level = level
        self.event_id = event_id
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Level'] = self.level
        result['EventId'] = self.event_id
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.event_id = map.get('EventId')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeCustomEventAttributeResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, custom_events=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.custom_events = custom_events

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.custom_events, 'custom_events')
        if self.custom_events:
            self.custom_events.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.custom_events is not None:
            result['CustomEvents'] = self.custom_events.to_map()
        else:
            result['CustomEvents'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('CustomEvents') is not None:
            temp_model = DescribeCustomEventAttributeResponseCustomEvents()
            self.custom_events = temp_model.from_map(map['CustomEvents'])
        else:
            self.custom_events = None
        return self


class DescribeCustomEventAttributeResponseCustomEventsCustomEvent(TeaModel):
    def __init__(self, id=None, content=None, group_id=None, name=None, time=None):
        self.id = id
        self.content = content
        self.group_id = group_id
        self.name = name
        self.time = time

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.content, 'content')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.time, 'time')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Content'] = self.content
        result['GroupId'] = self.group_id
        result['Name'] = self.name
        result['Time'] = self.time
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.content = map.get('Content')
        self.group_id = map.get('GroupId')
        self.name = map.get('Name')
        self.time = map.get('Time')
        return self


class DescribeCustomEventAttributeResponseCustomEvents(TeaModel):
    def __init__(self, custom_event=None):
        self.custom_event = []

    def validate(self):
        self.validate_required(self.custom_event, 'custom_event')
        if self.custom_event:
            for k in self.custom_event:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CustomEvent'] = []
        if self.custom_event is not None:
            for k in self.custom_event:
                result['CustomEvent'].append(k.to_map() if k else None)
        else:
            result['CustomEvent'] = None
        return result

    def from_map(self, map={}):
        self.custom_event = []
        if map.get('CustomEvent') is not None:
            for k in map.get('CustomEvent'):
                temp_model = DescribeCustomEventAttributeResponseCustomEventsCustomEvent()
                temp_model = temp_model.from_map(k)
                self.custom_event.append(temp_model)
        else:
            self.custom_event = None
        return self


class DescribeCustomEventHistogramRequest(TeaModel):
    def __init__(self, name=None, level=None, event_id=None, group_id=None, search_keywords=None, start_time=None, end_time=None):
        self.name = name
        self.level = level
        self.event_id = event_id
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Level'] = self.level
        result['EventId'] = self.event_id
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.event_id = map.get('EventId')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeCustomEventHistogramResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, event_histograms=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.event_histograms = event_histograms

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.event_histograms, 'event_histograms')
        if self.event_histograms:
            self.event_histograms.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.event_histograms is not None:
            result['EventHistograms'] = self.event_histograms.to_map()
        else:
            result['EventHistograms'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('EventHistograms') is not None:
            temp_model = DescribeCustomEventHistogramResponseEventHistograms()
            self.event_histograms = temp_model.from_map(map['EventHistograms'])
        else:
            self.event_histograms = None
        return self


class DescribeCustomEventHistogramResponseEventHistogramsEventHistogram(TeaModel):
    def __init__(self, count=None, start_time=None, end_time=None):
        self.count = count
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeCustomEventHistogramResponseEventHistograms(TeaModel):
    def __init__(self, event_histogram=None):
        self.event_histogram = []

    def validate(self):
        self.validate_required(self.event_histogram, 'event_histogram')
        if self.event_histogram:
            for k in self.event_histogram:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventHistogram'] = []
        if self.event_histogram is not None:
            for k in self.event_histogram:
                result['EventHistogram'].append(k.to_map() if k else None)
        else:
            result['EventHistogram'] = None
        return result

    def from_map(self, map={}):
        self.event_histogram = []
        if map.get('EventHistogram') is not None:
            for k in map.get('EventHistogram'):
                temp_model = DescribeCustomEventHistogramResponseEventHistogramsEventHistogram()
                temp_model = temp_model.from_map(k)
                self.event_histogram.append(temp_model)
        else:
            self.event_histogram = None
        return self


class DeleteCustomMetricRequest(TeaModel):
    def __init__(self, group_id=None, metric_name=None, md_5=None, _uuid=None):
        self.group_id = group_id
        self.metric_name = metric_name
        self.md_5 = md_5
        self._uuid = _uuid

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['MetricName'] = self.metric_name
        result['Md5'] = self.md_5
        result['UUID'] = self._uuid
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.metric_name = map.get('MetricName')
        self.md_5 = map.get('Md5')
        self._uuid = map.get('UUID')
        return self


class DeleteCustomMetricResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None):
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeCustomMetricListRequest(TeaModel):
    def __init__(self, group_id=None, metric_name=None, dimension=None, md_5=None, page_number=None, page_size=None):
        self.group_id = group_id
        self.metric_name = metric_name
        self.dimension = dimension
        self.md_5 = md_5
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['MetricName'] = self.metric_name
        result['Dimension'] = self.dimension
        result['Md5'] = self.md_5
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.metric_name = map.get('MetricName')
        self.dimension = map.get('Dimension')
        self.md_5 = map.get('Md5')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeCustomMetricListResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, result=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.result = result

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.result, 'result')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Result'] = self.result
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.result = map.get('Result')
        return self


class PutCustomMetricRequest(TeaModel):
    def __init__(self, metric_list=None):
        self.metric_list = []

    def validate(self):
        self.validate_required(self.metric_list, 'metric_list')
        if self.metric_list:
            for k in self.metric_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MetricList'] = []
        if self.metric_list is not None:
            for k in self.metric_list:
                result['MetricList'].append(k.to_map() if k else None)
        else:
            result['MetricList'] = None
        return result

    def from_map(self, map={}):
        self.metric_list = []
        if map.get('MetricList') is not None:
            for k in map.get('MetricList'):
                temp_model = PutCustomMetricRequestMetricList()
                temp_model = temp_model.from_map(k)
                self.metric_list.append(temp_model)
        else:
            self.metric_list = None
        return self


class PutCustomMetricRequestMetricList(TeaModel):
    def __init__(self, group_id=None, metric_name=None, dimensions=None, time=None, type=None, period=None):
        self.group_id = group_id
        self.metric_name = metric_name
        self.dimensions = dimensions
        self.time = time
        self.type = type
        self.period = period

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['MetricName'] = self.metric_name
        result['Dimensions'] = self.dimensions
        result['Time'] = self.time
        result['Type'] = self.type
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.metric_name = map.get('MetricName')
        self.dimensions = map.get('Dimensions')
        self.time = map.get('Time')
        self.type = map.get('Type')
        self.period = map.get('Period')
        return self


class PutCustomMetricResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None):
        self.request_id = request_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DescribeEventRuleAttributeRequest(TeaModel):
    def __init__(self, rule_name=None):
        self.rule_name = rule_name

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        return self


class DescribeEventRuleAttributeResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, result=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.result = result

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.result, 'result')
        if self.result:
            self.result.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.result is not None:
            result['Result'] = self.result.to_map()
        else:
            result['Result'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Result') is not None:
            temp_model = DescribeEventRuleAttributeResponseResult()
            self.result = temp_model.from_map(map['Result'])
        else:
            self.result = None
        return self


class DescribeEventRuleAttributeResponseResultEventPatternNameList(TeaModel):
    def __init__(self, name_list=None):
        self.name_list = []

    def validate(self):
        self.validate_required(self.name_list, 'name_list')

    def to_map(self):
        result = {}
        result['NameList'] = []
        if self.name_list is not None:
            for k in self.name_list:
                result['NameList'].append(k)
        else:
            result['NameList'] = None
        return result

    def from_map(self, map={}):
        self.name_list = []
        if map.get('NameList') is not None:
            for k in map.get('NameList'):
                self.name_list.append(k)
        else:
            self.name_list = None
        return self


class DescribeEventRuleAttributeResponseResultEventPatternStatusList(TeaModel):
    def __init__(self, status_list=None):
        self.status_list = []

    def validate(self):
        self.validate_required(self.status_list, 'status_list')

    def to_map(self):
        result = {}
        result['StatusList'] = []
        if self.status_list is not None:
            for k in self.status_list:
                result['StatusList'].append(k)
        else:
            result['StatusList'] = None
        return result

    def from_map(self, map={}):
        self.status_list = []
        if map.get('StatusList') is not None:
            for k in map.get('StatusList'):
                self.status_list.append(k)
        else:
            self.status_list = None
        return self


class DescribeEventRuleAttributeResponseResultEventPatternLevelList(TeaModel):
    def __init__(self, level_list=None):
        self.level_list = []

    def validate(self):
        self.validate_required(self.level_list, 'level_list')

    def to_map(self):
        result = {}
        result['LevelList'] = []
        if self.level_list is not None:
            for k in self.level_list:
                result['LevelList'].append(k)
        else:
            result['LevelList'] = None
        return result

    def from_map(self, map={}):
        self.level_list = []
        if map.get('LevelList') is not None:
            for k in map.get('LevelList'):
                self.level_list.append(k)
        else:
            self.level_list = None
        return self


class DescribeEventRuleAttributeResponseResultEventPattern(TeaModel):
    def __init__(self, product=None, name_list=None, status_list=None, level_list=None):
        self.product = product
        self.name_list = name_list
        self.status_list = status_list
        self.level_list = level_list

    def validate(self):
        self.validate_required(self.product, 'product')
        self.validate_required(self.name_list, 'name_list')
        if self.name_list:
            self.name_list.validate()
        self.validate_required(self.status_list, 'status_list')
        if self.status_list:
            self.status_list.validate()
        self.validate_required(self.level_list, 'level_list')
        if self.level_list:
            self.level_list.validate()

    def to_map(self):
        result = {}
        result['Product'] = self.product
        if self.name_list is not None:
            result['NameList'] = self.name_list.to_map()
        else:
            result['NameList'] = None
        if self.status_list is not None:
            result['StatusList'] = self.status_list.to_map()
        else:
            result['StatusList'] = None
        if self.level_list is not None:
            result['LevelList'] = self.level_list.to_map()
        else:
            result['LevelList'] = None
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        if map.get('NameList') is not None:
            temp_model = DescribeEventRuleAttributeResponseResultEventPatternNameList()
            self.name_list = temp_model.from_map(map['NameList'])
        else:
            self.name_list = None
        if map.get('StatusList') is not None:
            temp_model = DescribeEventRuleAttributeResponseResultEventPatternStatusList()
            self.status_list = temp_model.from_map(map['StatusList'])
        else:
            self.status_list = None
        if map.get('LevelList') is not None:
            temp_model = DescribeEventRuleAttributeResponseResultEventPatternLevelList()
            self.level_list = temp_model.from_map(map['LevelList'])
        else:
            self.level_list = None
        return self


class DescribeEventRuleAttributeResponseResult(TeaModel):
    def __init__(self, description=None, name=None, event_type=None, group_id=None, state=None, event_pattern=None):
        self.description = description
        self.name = name
        self.event_type = event_type
        self.group_id = group_id
        self.state = state
        self.event_pattern = event_pattern

    def validate(self):
        self.validate_required(self.description, 'description')
        self.validate_required(self.name, 'name')
        self.validate_required(self.event_type, 'event_type')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.state, 'state')
        self.validate_required(self.event_pattern, 'event_pattern')
        if self.event_pattern:
            self.event_pattern.validate()

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['Name'] = self.name
        result['EventType'] = self.event_type
        result['GroupId'] = self.group_id
        result['State'] = self.state
        if self.event_pattern is not None:
            result['EventPattern'] = self.event_pattern.to_map()
        else:
            result['EventPattern'] = None
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.name = map.get('Name')
        self.event_type = map.get('EventType')
        self.group_id = map.get('GroupId')
        self.state = map.get('State')
        if map.get('EventPattern') is not None:
            temp_model = DescribeEventRuleAttributeResponseResultEventPattern()
            self.event_pattern = temp_model.from_map(map['EventPattern'])
        else:
            self.event_pattern = None
        return self


class DeleteContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None):
        self.contact_group_name = contact_group_name

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        return self


class DeleteContactGroupResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeContactListRequest(TeaModel):
    def __init__(self, page_size=None, page_number=None, contact_name=None, chanel_type=None, chanel_value=None):
        self.page_size = page_size
        self.page_number = page_number
        self.contact_name = contact_name
        self.chanel_type = chanel_type
        self.chanel_value = chanel_value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['ContactName'] = self.contact_name
        result['ChanelType'] = self.chanel_type
        result['ChanelValue'] = self.chanel_value
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.contact_name = map.get('ContactName')
        self.chanel_type = map.get('ChanelType')
        self.chanel_value = map.get('ChanelValue')
        return self


class DescribeContactListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, total=None, request_id=None, contacts=None):
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.request_id = request_id
        self.contacts = contacts

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contacts, 'contacts')
        if self.contacts:
            self.contacts.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        result['RequestId'] = self.request_id
        if self.contacts is not None:
            result['Contacts'] = self.contacts.to_map()
        else:
            result['Contacts'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        self.request_id = map.get('RequestId')
        if map.get('Contacts') is not None:
            temp_model = DescribeContactListResponseContacts()
            self.contacts = temp_model.from_map(map['Contacts'])
        else:
            self.contacts = None
        return self


class DescribeContactListResponseContactsContactChannels(TeaModel):
    def __init__(self, _sms=None, mail=None, ali_im=None, ding_web_hook=None):
        self._sms = _sms
        self.mail = mail
        self.ali_im = ali_im
        self.ding_web_hook = ding_web_hook

    def validate(self):
        self.validate_required(self._sms, '_sms')
        self.validate_required(self.mail, 'mail')
        self.validate_required(self.ali_im, 'ali_im')
        self.validate_required(self.ding_web_hook, 'ding_web_hook')

    def to_map(self):
        result = {}
        result['SMS'] = self._sms
        result['Mail'] = self.mail
        result['AliIM'] = self.ali_im
        result['DingWebHook'] = self.ding_web_hook
        return result

    def from_map(self, map={}):
        self._sms = map.get('SMS')
        self.mail = map.get('Mail')
        self.ali_im = map.get('AliIM')
        self.ding_web_hook = map.get('DingWebHook')
        return self


class DescribeContactListResponseContactsContactChannelsState(TeaModel):
    def __init__(self, _sms=None, mail=None, ali_im=None, ding_web_hook=None):
        self._sms = _sms
        self.mail = mail
        self.ali_im = ali_im
        self.ding_web_hook = ding_web_hook

    def validate(self):
        self.validate_required(self._sms, '_sms')
        self.validate_required(self.mail, 'mail')
        self.validate_required(self.ali_im, 'ali_im')
        self.validate_required(self.ding_web_hook, 'ding_web_hook')

    def to_map(self):
        result = {}
        result['SMS'] = self._sms
        result['Mail'] = self.mail
        result['AliIM'] = self.ali_im
        result['DingWebHook'] = self.ding_web_hook
        return result

    def from_map(self, map={}):
        self._sms = map.get('SMS')
        self.mail = map.get('Mail')
        self.ali_im = map.get('AliIM')
        self.ding_web_hook = map.get('DingWebHook')
        return self


class DescribeContactListResponseContactsContactContactGroups(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                self.contact_group.append(k)
        else:
            self.contact_group = None
        return self


class DescribeContactListResponseContactsContact(TeaModel):
    def __init__(self, name=None, desc=None, create_time=None, update_time=None, channels=None, channels_state=None, contact_groups=None):
        self.name = name
        self.desc = desc
        self.create_time = create_time
        self.update_time = update_time
        self.channels = channels
        self.channels_state = channels_state
        self.contact_groups = contact_groups

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.desc, 'desc')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.channels, 'channels')
        if self.channels:
            self.channels.validate()
        self.validate_required(self.channels_state, 'channels_state')
        if self.channels_state:
            self.channels_state.validate()
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            self.contact_groups.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Desc'] = self.desc
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        if self.channels is not None:
            result['Channels'] = self.channels.to_map()
        else:
            result['Channels'] = None
        if self.channels_state is not None:
            result['ChannelsState'] = self.channels_state.to_map()
        else:
            result['ChannelsState'] = None
        if self.contact_groups is not None:
            result['ContactGroups'] = self.contact_groups.to_map()
        else:
            result['ContactGroups'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.desc = map.get('Desc')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        if map.get('Channels') is not None:
            temp_model = DescribeContactListResponseContactsContactChannels()
            self.channels = temp_model.from_map(map['Channels'])
        else:
            self.channels = None
        if map.get('ChannelsState') is not None:
            temp_model = DescribeContactListResponseContactsContactChannelsState()
            self.channels_state = temp_model.from_map(map['ChannelsState'])
        else:
            self.channels_state = None
        if map.get('ContactGroups') is not None:
            temp_model = DescribeContactListResponseContactsContactContactGroups()
            self.contact_groups = temp_model.from_map(map['ContactGroups'])
        else:
            self.contact_groups = None
        return self


class DescribeContactListResponseContacts(TeaModel):
    def __init__(self, contact=None):
        self.contact = []

    def validate(self):
        self.validate_required(self.contact, 'contact')
        if self.contact:
            for k in self.contact:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Contact'] = []
        if self.contact is not None:
            for k in self.contact:
                result['Contact'].append(k.to_map() if k else None)
        else:
            result['Contact'] = None
        return result

    def from_map(self, map={}):
        self.contact = []
        if map.get('Contact') is not None:
            for k in map.get('Contact'):
                temp_model = DescribeContactListResponseContactsContact()
                temp_model = temp_model.from_map(k)
                self.contact.append(temp_model)
        else:
            self.contact = None
        return self


class DescribeContactListByContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None):
        self.contact_group_name = contact_group_name

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        return self


class DescribeContactListByContactGroupResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, contacts=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.contacts = contacts

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contacts, 'contacts')
        if self.contacts:
            self.contacts.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.contacts is not None:
            result['Contacts'] = self.contacts.to_map()
        else:
            result['Contacts'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Contacts') is not None:
            temp_model = DescribeContactListByContactGroupResponseContacts()
            self.contacts = temp_model.from_map(map['Contacts'])
        else:
            self.contacts = None
        return self


class DescribeContactListByContactGroupResponseContactsContactChannels(TeaModel):
    def __init__(self, _sms=None, mail=None, ali_im=None, ding_web_hook=None):
        self._sms = _sms
        self.mail = mail
        self.ali_im = ali_im
        self.ding_web_hook = ding_web_hook

    def validate(self):
        self.validate_required(self._sms, '_sms')
        self.validate_required(self.mail, 'mail')
        self.validate_required(self.ali_im, 'ali_im')
        self.validate_required(self.ding_web_hook, 'ding_web_hook')

    def to_map(self):
        result = {}
        result['SMS'] = self._sms
        result['Mail'] = self.mail
        result['AliIM'] = self.ali_im
        result['DingWebHook'] = self.ding_web_hook
        return result

    def from_map(self, map={}):
        self._sms = map.get('SMS')
        self.mail = map.get('Mail')
        self.ali_im = map.get('AliIM')
        self.ding_web_hook = map.get('DingWebHook')
        return self


class DescribeContactListByContactGroupResponseContactsContact(TeaModel):
    def __init__(self, name=None, desc=None, create_time=None, update_time=None, channels=None):
        self.name = name
        self.desc = desc
        self.create_time = create_time
        self.update_time = update_time
        self.channels = channels

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.desc, 'desc')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.channels, 'channels')
        if self.channels:
            self.channels.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Desc'] = self.desc
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        if self.channels is not None:
            result['Channels'] = self.channels.to_map()
        else:
            result['Channels'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.desc = map.get('Desc')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        if map.get('Channels') is not None:
            temp_model = DescribeContactListByContactGroupResponseContactsContactChannels()
            self.channels = temp_model.from_map(map['Channels'])
        else:
            self.channels = None
        return self


class DescribeContactListByContactGroupResponseContacts(TeaModel):
    def __init__(self, contact=None):
        self.contact = []

    def validate(self):
        self.validate_required(self.contact, 'contact')
        if self.contact:
            for k in self.contact:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Contact'] = []
        if self.contact is not None:
            for k in self.contact:
                result['Contact'].append(k.to_map() if k else None)
        else:
            result['Contact'] = None
        return result

    def from_map(self, map={}):
        self.contact = []
        if map.get('Contact') is not None:
            for k in map.get('Contact'):
                temp_model = DescribeContactListByContactGroupResponseContactsContact()
                temp_model = temp_model.from_map(k)
                self.contact.append(temp_model)
        else:
            self.contact = None
        return self


class DeleteContactRequest(TeaModel):
    def __init__(self, contact_name=None):
        self.contact_name = contact_name

    def validate(self):
        self.validate_required(self.contact_name, 'contact_name')

    def to_map(self):
        result = {}
        result['ContactName'] = self.contact_name
        return result

    def from_map(self, map={}):
        self.contact_name = map.get('ContactName')
        return self


class DeleteContactResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class PutContactGroupRequest(TeaModel):
    def __init__(self, contact_group_name=None, describe=None, contact_names=None):
        self.contact_group_name = contact_group_name
        self.describe = describe
        self.contact_names = []

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.contact_names, 'contact_names')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        result['Describe'] = self.describe
        result['ContactNames'] = []
        if self.contact_names is not None:
            for k in self.contact_names:
                result['ContactNames'].append(k)
        else:
            result['ContactNames'] = None
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        self.describe = map.get('Describe')
        self.contact_names = []
        if map.get('ContactNames') is not None:
            for k in map.get('ContactNames'):
                self.contact_names.append(k)
        else:
            self.contact_names = None
        return self


class PutContactGroupResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class PutContactRequest(TeaModel):
    def __init__(self, contact_name=None, describe=None, channels=None):
        self.contact_name = contact_name
        self.describe = describe
        self.channels = channels

    def validate(self):
        self.validate_required(self.contact_name, 'contact_name')
        self.validate_required(self.describe, 'describe')
        self.validate_required(self.channels, 'channels')
        if self.channels:
            self.channels.validate()

    def to_map(self):
        result = {}
        result['ContactName'] = self.contact_name
        result['Describe'] = self.describe
        if self.channels is not None:
            result['Channels'] = self.channels.to_map()
        else:
            result['Channels'] = None
        return result

    def from_map(self, map={}):
        self.contact_name = map.get('ContactName')
        self.describe = map.get('Describe')
        if map.get('Channels') is not None:
            temp_model = PutContactRequestChannels()
            self.channels = temp_model.from_map(map['Channels'])
        else:
            self.channels = None
        return self


class PutContactRequestChannels(TeaModel):
    def __init__(self, _sms=None, mail=None, ali_im=None, ding_web_hook=None):
        self._sms = _sms
        self.mail = mail
        self.ali_im = ali_im
        self.ding_web_hook = ding_web_hook

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SMS'] = self._sms
        result['Mail'] = self.mail
        result['AliIM'] = self.ali_im
        result['DingWebHook'] = self.ding_web_hook
        return result

    def from_map(self, map={}):
        self._sms = map.get('SMS')
        self.mail = map.get('Mail')
        self.ali_im = map.get('AliIM')
        self.ding_web_hook = map.get('DingWebHook')
        return self


class PutContactResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeContactGroupListRequest(TeaModel):
    def __init__(self, page_size=None, page_number=None):
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeContactGroupListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, total=None, request_id=None, contact_group_list=None, contact_groups=None):
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.request_id = request_id
        self.contact_group_list = contact_group_list
        self.contact_groups = contact_groups

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contact_group_list, 'contact_group_list')
        if self.contact_group_list:
            self.contact_group_list.validate()
        self.validate_required(self.contact_groups, 'contact_groups')
        if self.contact_groups:
            self.contact_groups.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        result['RequestId'] = self.request_id
        if self.contact_group_list is not None:
            result['ContactGroupList'] = self.contact_group_list.to_map()
        else:
            result['ContactGroupList'] = None
        if self.contact_groups is not None:
            result['ContactGroups'] = self.contact_groups.to_map()
        else:
            result['ContactGroups'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        self.request_id = map.get('RequestId')
        if map.get('ContactGroupList') is not None:
            temp_model = DescribeContactGroupListResponseContactGroupList()
            self.contact_group_list = temp_model.from_map(map['ContactGroupList'])
        else:
            self.contact_group_list = None
        if map.get('ContactGroups') is not None:
            temp_model = DescribeContactGroupListResponseContactGroups()
            self.contact_groups = temp_model.from_map(map['ContactGroups'])
        else:
            self.contact_groups = None
        return self


class DescribeContactGroupListResponseContactGroupListContactGroupContacts(TeaModel):
    def __init__(self, contact=None):
        self.contact = []

    def validate(self):
        self.validate_required(self.contact, 'contact')

    def to_map(self):
        result = {}
        result['Contact'] = []
        if self.contact is not None:
            for k in self.contact:
                result['Contact'].append(k)
        else:
            result['Contact'] = None
        return result

    def from_map(self, map={}):
        self.contact = []
        if map.get('Contact') is not None:
            for k in map.get('Contact'):
                self.contact.append(k)
        else:
            self.contact = None
        return self


class DescribeContactGroupListResponseContactGroupListContactGroup(TeaModel):
    def __init__(self, name=None, describe=None, create_time=None, update_time=None, enabled_weekly_report=None, enable_subscribed=None, contacts=None):
        self.name = name
        self.describe = describe
        self.create_time = create_time
        self.update_time = update_time
        self.enabled_weekly_report = enabled_weekly_report
        self.enable_subscribed = enable_subscribed
        self.contacts = contacts

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.describe, 'describe')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.enabled_weekly_report, 'enabled_weekly_report')
        self.validate_required(self.enable_subscribed, 'enable_subscribed')
        self.validate_required(self.contacts, 'contacts')
        if self.contacts:
            self.contacts.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Describe'] = self.describe
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['EnabledWeeklyReport'] = self.enabled_weekly_report
        result['EnableSubscribed'] = self.enable_subscribed
        if self.contacts is not None:
            result['Contacts'] = self.contacts.to_map()
        else:
            result['Contacts'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.describe = map.get('Describe')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.enabled_weekly_report = map.get('EnabledWeeklyReport')
        self.enable_subscribed = map.get('EnableSubscribed')
        if map.get('Contacts') is not None:
            temp_model = DescribeContactGroupListResponseContactGroupListContactGroupContacts()
            self.contacts = temp_model.from_map(map['Contacts'])
        else:
            self.contacts = None
        return self


class DescribeContactGroupListResponseContactGroupList(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')
        if self.contact_group:
            for k in self.contact_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k.to_map() if k else None)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                temp_model = DescribeContactGroupListResponseContactGroupListContactGroup()
                temp_model = temp_model.from_map(k)
                self.contact_group.append(temp_model)
        else:
            self.contact_group = None
        return self


class DescribeContactGroupListResponseContactGroups(TeaModel):
    def __init__(self, contact_group=None):
        self.contact_group = []

    def validate(self):
        self.validate_required(self.contact_group, 'contact_group')

    def to_map(self):
        result = {}
        result['ContactGroup'] = []
        if self.contact_group is not None:
            for k in self.contact_group:
                result['ContactGroup'].append(k)
        else:
            result['ContactGroup'] = None
        return result

    def from_map(self, map={}):
        self.contact_group = []
        if map.get('ContactGroup') is not None:
            for k in map.get('ContactGroup'):
                self.contact_group.append(k)
        else:
            self.contact_group = None
        return self


class PutEventRuleTargetsRequest(TeaModel):
    def __init__(self, rule_name=None, fc_parameters=None, contact_parameters=None, mns_parameters=None, webhook_parameters=None, sls_parameters=None):
        self.rule_name = rule_name
        self.fc_parameters = []
        self.contact_parameters = []
        self.mns_parameters = []
        self.webhook_parameters = []
        self.sls_parameters = []

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')
        if self.fc_parameters:
            for k in self.fc_parameters:
                if k :
                    k.validate()
        if self.contact_parameters:
            for k in self.contact_parameters:
                if k :
                    k.validate()
        if self.mns_parameters:
            for k in self.mns_parameters:
                if k :
                    k.validate()
        if self.webhook_parameters:
            for k in self.webhook_parameters:
                if k :
                    k.validate()
        if self.sls_parameters:
            for k in self.sls_parameters:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['FcParameters'] = []
        if self.fc_parameters is not None:
            for k in self.fc_parameters:
                result['FcParameters'].append(k.to_map() if k else None)
        else:
            result['FcParameters'] = None
        result['ContactParameters'] = []
        if self.contact_parameters is not None:
            for k in self.contact_parameters:
                result['ContactParameters'].append(k.to_map() if k else None)
        else:
            result['ContactParameters'] = None
        result['MnsParameters'] = []
        if self.mns_parameters is not None:
            for k in self.mns_parameters:
                result['MnsParameters'].append(k.to_map() if k else None)
        else:
            result['MnsParameters'] = None
        result['WebhookParameters'] = []
        if self.webhook_parameters is not None:
            for k in self.webhook_parameters:
                result['WebhookParameters'].append(k.to_map() if k else None)
        else:
            result['WebhookParameters'] = None
        result['SlsParameters'] = []
        if self.sls_parameters is not None:
            for k in self.sls_parameters:
                result['SlsParameters'].append(k.to_map() if k else None)
        else:
            result['SlsParameters'] = None
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.fc_parameters = []
        if map.get('FcParameters') is not None:
            for k in map.get('FcParameters'):
                temp_model = PutEventRuleTargetsRequestFcParameters()
                temp_model = temp_model.from_map(k)
                self.fc_parameters.append(temp_model)
        else:
            self.fc_parameters = None
        self.contact_parameters = []
        if map.get('ContactParameters') is not None:
            for k in map.get('ContactParameters'):
                temp_model = PutEventRuleTargetsRequestContactParameters()
                temp_model = temp_model.from_map(k)
                self.contact_parameters.append(temp_model)
        else:
            self.contact_parameters = None
        self.mns_parameters = []
        if map.get('MnsParameters') is not None:
            for k in map.get('MnsParameters'):
                temp_model = PutEventRuleTargetsRequestMnsParameters()
                temp_model = temp_model.from_map(k)
                self.mns_parameters.append(temp_model)
        else:
            self.mns_parameters = None
        self.webhook_parameters = []
        if map.get('WebhookParameters') is not None:
            for k in map.get('WebhookParameters'):
                temp_model = PutEventRuleTargetsRequestWebhookParameters()
                temp_model = temp_model.from_map(k)
                self.webhook_parameters.append(temp_model)
        else:
            self.webhook_parameters = None
        self.sls_parameters = []
        if map.get('SlsParameters') is not None:
            for k in map.get('SlsParameters'):
                temp_model = PutEventRuleTargetsRequestSlsParameters()
                temp_model = temp_model.from_map(k)
                self.sls_parameters.append(temp_model)
        else:
            self.sls_parameters = None
        return self


class PutEventRuleTargetsRequestFcParameters(TeaModel):
    def __init__(self, id=None, region=None, service_name=None, function_name=None):
        self.id = id
        self.region = region
        self.service_name = service_name
        self.function_name = function_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['ServiceName'] = self.service_name
        result['FunctionName'] = self.function_name
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.service_name = map.get('ServiceName')
        self.function_name = map.get('FunctionName')
        return self


class PutEventRuleTargetsRequestContactParameters(TeaModel):
    def __init__(self, id=None, contact_group_name=None, level=None):
        self.id = id
        self.contact_group_name = contact_group_name
        self.level = level

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['ContactGroupName'] = self.contact_group_name
        result['Level'] = self.level
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.contact_group_name = map.get('ContactGroupName')
        self.level = map.get('Level')
        return self


class PutEventRuleTargetsRequestMnsParameters(TeaModel):
    def __init__(self, id=None, region=None, queue=None):
        self.id = id
        self.region = region
        self.queue = queue

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['Queue'] = self.queue
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.queue = map.get('Queue')
        return self


class PutEventRuleTargetsRequestWebhookParameters(TeaModel):
    def __init__(self, id=None, protocol=None, url=None, method=None):
        self.id = id
        self.protocol = protocol
        self.url = url
        self.method = method

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Protocol'] = self.protocol
        result['Url'] = self.url
        result['Method'] = self.method
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.protocol = map.get('Protocol')
        self.url = map.get('Url')
        self.method = map.get('Method')
        return self


class PutEventRuleTargetsRequestSlsParameters(TeaModel):
    def __init__(self, id=None, region=None, project=None, log_store=None):
        self.id = id
        self.region = region
        self.project = project
        self.log_store = log_store

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['Project'] = self.project
        result['LogStore'] = self.log_store
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.project = map.get('Project')
        self.log_store = map.get('LogStore')
        return self


class PutEventRuleTargetsResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, failed_parameter_count=None, failed_contact_parameters=None, failed_mns_parameters=None, failed_fc_parameters=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.failed_parameter_count = failed_parameter_count
        self.failed_contact_parameters = failed_contact_parameters
        self.failed_mns_parameters = failed_mns_parameters
        self.failed_fc_parameters = failed_fc_parameters

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.failed_parameter_count, 'failed_parameter_count')
        self.validate_required(self.failed_contact_parameters, 'failed_contact_parameters')
        if self.failed_contact_parameters:
            self.failed_contact_parameters.validate()
        self.validate_required(self.failed_mns_parameters, 'failed_mns_parameters')
        if self.failed_mns_parameters:
            self.failed_mns_parameters.validate()
        self.validate_required(self.failed_fc_parameters, 'failed_fc_parameters')
        if self.failed_fc_parameters:
            self.failed_fc_parameters.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['FailedParameterCount'] = self.failed_parameter_count
        if self.failed_contact_parameters is not None:
            result['FailedContactParameters'] = self.failed_contact_parameters.to_map()
        else:
            result['FailedContactParameters'] = None
        if self.failed_mns_parameters is not None:
            result['FailedMnsParameters'] = self.failed_mns_parameters.to_map()
        else:
            result['FailedMnsParameters'] = None
        if self.failed_fc_parameters is not None:
            result['FailedFcParameters'] = self.failed_fc_parameters.to_map()
        else:
            result['FailedFcParameters'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.failed_parameter_count = map.get('FailedParameterCount')
        if map.get('FailedContactParameters') is not None:
            temp_model = PutEventRuleTargetsResponseFailedContactParameters()
            self.failed_contact_parameters = temp_model.from_map(map['FailedContactParameters'])
        else:
            self.failed_contact_parameters = None
        if map.get('FailedMnsParameters') is not None:
            temp_model = PutEventRuleTargetsResponseFailedMnsParameters()
            self.failed_mns_parameters = temp_model.from_map(map['FailedMnsParameters'])
        else:
            self.failed_mns_parameters = None
        if map.get('FailedFcParameters') is not None:
            temp_model = PutEventRuleTargetsResponseFailedFcParameters()
            self.failed_fc_parameters = temp_model.from_map(map['FailedFcParameters'])
        else:
            self.failed_fc_parameters = None
        return self


class PutEventRuleTargetsResponseFailedContactParametersContactParameter(TeaModel):
    def __init__(self, id=None, contact_group_name=None, level=None):
        self.id = id
        self.contact_group_name = contact_group_name
        self.level = level

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.level, 'level')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['ContactGroupName'] = self.contact_group_name
        result['Level'] = self.level
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.contact_group_name = map.get('ContactGroupName')
        self.level = map.get('Level')
        return self


class PutEventRuleTargetsResponseFailedContactParameters(TeaModel):
    def __init__(self, contact_parameter=None):
        self.contact_parameter = []

    def validate(self):
        self.validate_required(self.contact_parameter, 'contact_parameter')
        if self.contact_parameter:
            for k in self.contact_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContactParameter'] = []
        if self.contact_parameter is not None:
            for k in self.contact_parameter:
                result['ContactParameter'].append(k.to_map() if k else None)
        else:
            result['ContactParameter'] = None
        return result

    def from_map(self, map={}):
        self.contact_parameter = []
        if map.get('ContactParameter') is not None:
            for k in map.get('ContactParameter'):
                temp_model = PutEventRuleTargetsResponseFailedContactParametersContactParameter()
                temp_model = temp_model.from_map(k)
                self.contact_parameter.append(temp_model)
        else:
            self.contact_parameter = None
        return self


class PutEventRuleTargetsResponseFailedMnsParametersMnsParameter(TeaModel):
    def __init__(self, id=None, region=None, queue=None):
        self.id = id
        self.region = region
        self.queue = queue

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.queue, 'queue')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['Queue'] = self.queue
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.queue = map.get('Queue')
        return self


class PutEventRuleTargetsResponseFailedMnsParameters(TeaModel):
    def __init__(self, mns_parameter=None):
        self.mns_parameter = []

    def validate(self):
        self.validate_required(self.mns_parameter, 'mns_parameter')
        if self.mns_parameter:
            for k in self.mns_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MnsParameter'] = []
        if self.mns_parameter is not None:
            for k in self.mns_parameter:
                result['MnsParameter'].append(k.to_map() if k else None)
        else:
            result['MnsParameter'] = None
        return result

    def from_map(self, map={}):
        self.mns_parameter = []
        if map.get('MnsParameter') is not None:
            for k in map.get('MnsParameter'):
                temp_model = PutEventRuleTargetsResponseFailedMnsParametersMnsParameter()
                temp_model = temp_model.from_map(k)
                self.mns_parameter.append(temp_model)
        else:
            self.mns_parameter = None
        return self


class PutEventRuleTargetsResponseFailedFcParametersFcParameter(TeaModel):
    def __init__(self, id=None, region=None, service_name=None, function_name=None):
        self.id = id
        self.region = region
        self.service_name = service_name
        self.function_name = function_name

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.function_name, 'function_name')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['ServiceName'] = self.service_name
        result['FunctionName'] = self.function_name
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.service_name = map.get('ServiceName')
        self.function_name = map.get('FunctionName')
        return self


class PutEventRuleTargetsResponseFailedFcParameters(TeaModel):
    def __init__(self, fc_parameter=None):
        self.fc_parameter = []

    def validate(self):
        self.validate_required(self.fc_parameter, 'fc_parameter')
        if self.fc_parameter:
            for k in self.fc_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FcParameter'] = []
        if self.fc_parameter is not None:
            for k in self.fc_parameter:
                result['FcParameter'].append(k.to_map() if k else None)
        else:
            result['FcParameter'] = None
        return result

    def from_map(self, map={}):
        self.fc_parameter = []
        if map.get('FcParameter') is not None:
            for k in map.get('FcParameter'):
                temp_model = PutEventRuleTargetsResponseFailedFcParametersFcParameter()
                temp_model = temp_model.from_map(k)
                self.fc_parameter.append(temp_model)
        else:
            self.fc_parameter = None
        return self


class DeleteEventRuleTargetsRequest(TeaModel):
    def __init__(self, rule_name=None, ids=None):
        self.rule_name = rule_name
        self.ids = []

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.ids, 'ids')

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['Ids'] = []
        if self.ids is not None:
            for k in self.ids:
                result['Ids'].append(k)
        else:
            result['Ids'] = None
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.ids = []
        if map.get('Ids') is not None:
            for k in map.get('Ids'):
                self.ids.append(k)
        else:
            self.ids = None
        return self


class DeleteEventRuleTargetsResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DisableEventRulesRequest(TeaModel):
    def __init__(self, rule_names=None):
        self.rule_names = []

    def validate(self):
        self.validate_required(self.rule_names, 'rule_names')

    def to_map(self):
        result = {}
        result['RuleNames'] = []
        if self.rule_names is not None:
            for k in self.rule_names:
                result['RuleNames'].append(k)
        else:
            result['RuleNames'] = None
        return result

    def from_map(self, map={}):
        self.rule_names = []
        if map.get('RuleNames') is not None:
            for k in map.get('RuleNames'):
                self.rule_names.append(k)
        else:
            self.rule_names = None
        return self


class DisableEventRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DescribeEventRuleTargetListRequest(TeaModel):
    def __init__(self, rule_name=None):
        self.rule_name = rule_name

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        return self


class DescribeEventRuleTargetListResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, contact_parameters=None, fc_parameters=None, mns_parameters=None, webhook_parameters=None, sls_parameters=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.contact_parameters = contact_parameters
        self.fc_parameters = fc_parameters
        self.mns_parameters = mns_parameters
        self.webhook_parameters = webhook_parameters
        self.sls_parameters = sls_parameters

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.contact_parameters, 'contact_parameters')
        if self.contact_parameters:
            self.contact_parameters.validate()
        self.validate_required(self.fc_parameters, 'fc_parameters')
        if self.fc_parameters:
            self.fc_parameters.validate()
        self.validate_required(self.mns_parameters, 'mns_parameters')
        if self.mns_parameters:
            self.mns_parameters.validate()
        self.validate_required(self.webhook_parameters, 'webhook_parameters')
        if self.webhook_parameters:
            self.webhook_parameters.validate()
        self.validate_required(self.sls_parameters, 'sls_parameters')
        if self.sls_parameters:
            self.sls_parameters.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.contact_parameters is not None:
            result['ContactParameters'] = self.contact_parameters.to_map()
        else:
            result['ContactParameters'] = None
        if self.fc_parameters is not None:
            result['FcParameters'] = self.fc_parameters.to_map()
        else:
            result['FcParameters'] = None
        if self.mns_parameters is not None:
            result['MnsParameters'] = self.mns_parameters.to_map()
        else:
            result['MnsParameters'] = None
        if self.webhook_parameters is not None:
            result['WebhookParameters'] = self.webhook_parameters.to_map()
        else:
            result['WebhookParameters'] = None
        if self.sls_parameters is not None:
            result['SlsParameters'] = self.sls_parameters.to_map()
        else:
            result['SlsParameters'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('ContactParameters') is not None:
            temp_model = DescribeEventRuleTargetListResponseContactParameters()
            self.contact_parameters = temp_model.from_map(map['ContactParameters'])
        else:
            self.contact_parameters = None
        if map.get('FcParameters') is not None:
            temp_model = DescribeEventRuleTargetListResponseFcParameters()
            self.fc_parameters = temp_model.from_map(map['FcParameters'])
        else:
            self.fc_parameters = None
        if map.get('MnsParameters') is not None:
            temp_model = DescribeEventRuleTargetListResponseMnsParameters()
            self.mns_parameters = temp_model.from_map(map['MnsParameters'])
        else:
            self.mns_parameters = None
        if map.get('WebhookParameters') is not None:
            temp_model = DescribeEventRuleTargetListResponseWebhookParameters()
            self.webhook_parameters = temp_model.from_map(map['WebhookParameters'])
        else:
            self.webhook_parameters = None
        if map.get('SlsParameters') is not None:
            temp_model = DescribeEventRuleTargetListResponseSlsParameters()
            self.sls_parameters = temp_model.from_map(map['SlsParameters'])
        else:
            self.sls_parameters = None
        return self


class DescribeEventRuleTargetListResponseContactParametersContactParameter(TeaModel):
    def __init__(self, contact_group_name=None, level=None, id=None):
        self.contact_group_name = contact_group_name
        self.level = level
        self.id = id

    def validate(self):
        self.validate_required(self.contact_group_name, 'contact_group_name')
        self.validate_required(self.level, 'level')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['ContactGroupName'] = self.contact_group_name
        result['Level'] = self.level
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.contact_group_name = map.get('ContactGroupName')
        self.level = map.get('Level')
        self.id = map.get('Id')
        return self


class DescribeEventRuleTargetListResponseContactParameters(TeaModel):
    def __init__(self, contact_parameter=None):
        self.contact_parameter = []

    def validate(self):
        self.validate_required(self.contact_parameter, 'contact_parameter')
        if self.contact_parameter:
            for k in self.contact_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ContactParameter'] = []
        if self.contact_parameter is not None:
            for k in self.contact_parameter:
                result['ContactParameter'].append(k.to_map() if k else None)
        else:
            result['ContactParameter'] = None
        return result

    def from_map(self, map={}):
        self.contact_parameter = []
        if map.get('ContactParameter') is not None:
            for k in map.get('ContactParameter'):
                temp_model = DescribeEventRuleTargetListResponseContactParametersContactParameter()
                temp_model = temp_model.from_map(k)
                self.contact_parameter.append(temp_model)
        else:
            self.contact_parameter = None
        return self


class DescribeEventRuleTargetListResponseFcParametersFCParameter(TeaModel):
    def __init__(self, region=None, service_name=None, function_name=None, id=None, arn=None):
        self.region = region
        self.service_name = service_name
        self.function_name = function_name
        self.id = id
        self.arn = arn

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.service_name, 'service_name')
        self.validate_required(self.function_name, 'function_name')
        self.validate_required(self.id, 'id')
        self.validate_required(self.arn, 'arn')

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['ServiceName'] = self.service_name
        result['FunctionName'] = self.function_name
        result['Id'] = self.id
        result['Arn'] = self.arn
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.service_name = map.get('ServiceName')
        self.function_name = map.get('FunctionName')
        self.id = map.get('Id')
        self.arn = map.get('Arn')
        return self


class DescribeEventRuleTargetListResponseFcParameters(TeaModel):
    def __init__(self, fcparameter=None):
        self.fcparameter = []

    def validate(self):
        self.validate_required(self.fcparameter, 'fcparameter')
        if self.fcparameter:
            for k in self.fcparameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FCParameter'] = []
        if self.fcparameter is not None:
            for k in self.fcparameter:
                result['FCParameter'].append(k.to_map() if k else None)
        else:
            result['FCParameter'] = None
        return result

    def from_map(self, map={}):
        self.fcparameter = []
        if map.get('FCParameter') is not None:
            for k in map.get('FCParameter'):
                temp_model = DescribeEventRuleTargetListResponseFcParametersFCParameter()
                temp_model = temp_model.from_map(k)
                self.fcparameter.append(temp_model)
        else:
            self.fcparameter = None
        return self


class DescribeEventRuleTargetListResponseMnsParametersMnsParameter(TeaModel):
    def __init__(self, region=None, queue=None, id=None, arn=None):
        self.region = region
        self.queue = queue
        self.id = id
        self.arn = arn

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.queue, 'queue')
        self.validate_required(self.id, 'id')
        self.validate_required(self.arn, 'arn')

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['Queue'] = self.queue
        result['Id'] = self.id
        result['Arn'] = self.arn
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.queue = map.get('Queue')
        self.id = map.get('Id')
        self.arn = map.get('Arn')
        return self


class DescribeEventRuleTargetListResponseMnsParameters(TeaModel):
    def __init__(self, mns_parameter=None):
        self.mns_parameter = []

    def validate(self):
        self.validate_required(self.mns_parameter, 'mns_parameter')
        if self.mns_parameter:
            for k in self.mns_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MnsParameter'] = []
        if self.mns_parameter is not None:
            for k in self.mns_parameter:
                result['MnsParameter'].append(k.to_map() if k else None)
        else:
            result['MnsParameter'] = None
        return result

    def from_map(self, map={}):
        self.mns_parameter = []
        if map.get('MnsParameter') is not None:
            for k in map.get('MnsParameter'):
                temp_model = DescribeEventRuleTargetListResponseMnsParametersMnsParameter()
                temp_model = temp_model.from_map(k)
                self.mns_parameter.append(temp_model)
        else:
            self.mns_parameter = None
        return self


class DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter(TeaModel):
    def __init__(self, id=None, protocol=None, method=None, url=None):
        self.id = id
        self.protocol = protocol
        self.method = method
        self.url = url

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.protocol, 'protocol')
        self.validate_required(self.method, 'method')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Protocol'] = self.protocol
        result['Method'] = self.method
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.protocol = map.get('Protocol')
        self.method = map.get('Method')
        self.url = map.get('Url')
        return self


class DescribeEventRuleTargetListResponseWebhookParameters(TeaModel):
    def __init__(self, webhook_parameter=None):
        self.webhook_parameter = []

    def validate(self):
        self.validate_required(self.webhook_parameter, 'webhook_parameter')
        if self.webhook_parameter:
            for k in self.webhook_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['WebhookParameter'] = []
        if self.webhook_parameter is not None:
            for k in self.webhook_parameter:
                result['WebhookParameter'].append(k.to_map() if k else None)
        else:
            result['WebhookParameter'] = None
        return result

    def from_map(self, map={}):
        self.webhook_parameter = []
        if map.get('WebhookParameter') is not None:
            for k in map.get('WebhookParameter'):
                temp_model = DescribeEventRuleTargetListResponseWebhookParametersWebhookParameter()
                temp_model = temp_model.from_map(k)
                self.webhook_parameter.append(temp_model)
        else:
            self.webhook_parameter = None
        return self


class DescribeEventRuleTargetListResponseSlsParametersSlsParameter(TeaModel):
    def __init__(self, id=None, region=None, project=None, log_store=None, arn=None):
        self.id = id
        self.region = region
        self.project = project
        self.log_store = log_store
        self.arn = arn

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.region, 'region')
        self.validate_required(self.project, 'project')
        self.validate_required(self.log_store, 'log_store')
        self.validate_required(self.arn, 'arn')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Region'] = self.region
        result['Project'] = self.project
        result['LogStore'] = self.log_store
        result['Arn'] = self.arn
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.region = map.get('Region')
        self.project = map.get('Project')
        self.log_store = map.get('LogStore')
        self.arn = map.get('Arn')
        return self


class DescribeEventRuleTargetListResponseSlsParameters(TeaModel):
    def __init__(self, sls_parameter=None):
        self.sls_parameter = []

    def validate(self):
        self.validate_required(self.sls_parameter, 'sls_parameter')
        if self.sls_parameter:
            for k in self.sls_parameter:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SlsParameter'] = []
        if self.sls_parameter is not None:
            for k in self.sls_parameter:
                result['SlsParameter'].append(k.to_map() if k else None)
        else:
            result['SlsParameter'] = None
        return result

    def from_map(self, map={}):
        self.sls_parameter = []
        if map.get('SlsParameter') is not None:
            for k in map.get('SlsParameter'):
                temp_model = DescribeEventRuleTargetListResponseSlsParametersSlsParameter()
                temp_model = temp_model.from_map(k)
                self.sls_parameter.append(temp_model)
        else:
            self.sls_parameter = None
        return self


class DeleteEventRulesRequest(TeaModel):
    def __init__(self, rule_names=None):
        self.rule_names = []

    def validate(self):
        self.validate_required(self.rule_names, 'rule_names')

    def to_map(self):
        result = {}
        result['RuleNames'] = []
        if self.rule_names is not None:
            for k in self.rule_names:
                result['RuleNames'].append(k)
        else:
            result['RuleNames'] = None
        return result

    def from_map(self, map={}):
        self.rule_names = []
        if map.get('RuleNames') is not None:
            for k in map.get('RuleNames'):
                self.rule_names.append(k)
        else:
            self.rule_names = None
        return self


class DeleteEventRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class EnableEventRulesRequest(TeaModel):
    def __init__(self, rule_names=None):
        self.rule_names = []

    def validate(self):
        self.validate_required(self.rule_names, 'rule_names')

    def to_map(self):
        result = {}
        result['RuleNames'] = []
        if self.rule_names is not None:
            for k in self.rule_names:
                result['RuleNames'].append(k)
        else:
            result['RuleNames'] = None
        return result

    def from_map(self, map={}):
        self.rule_names = []
        if map.get('RuleNames') is not None:
            for k in map.get('RuleNames'):
                self.rule_names.append(k)
        else:
            self.rule_names = None
        return self


class EnableEventRulesResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class PutEventRuleRequest(TeaModel):
    def __init__(self, rule_name=None, group_id=None, event_type=None, description=None, state=None, event_pattern=None):
        self.rule_name = rule_name
        self.group_id = group_id
        self.event_type = event_type
        self.description = description
        self.state = state
        self.event_pattern = []

    def validate(self):
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.event_pattern, 'event_pattern')
        if self.event_pattern:
            for k in self.event_pattern:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RuleName'] = self.rule_name
        result['GroupId'] = self.group_id
        result['EventType'] = self.event_type
        result['Description'] = self.description
        result['State'] = self.state
        result['EventPattern'] = []
        if self.event_pattern is not None:
            for k in self.event_pattern:
                result['EventPattern'].append(k.to_map() if k else None)
        else:
            result['EventPattern'] = None
        return result

    def from_map(self, map={}):
        self.rule_name = map.get('RuleName')
        self.group_id = map.get('GroupId')
        self.event_type = map.get('EventType')
        self.description = map.get('Description')
        self.state = map.get('State')
        self.event_pattern = []
        if map.get('EventPattern') is not None:
            for k in map.get('EventPattern'):
                temp_model = PutEventRuleRequestEventPattern()
                temp_model = temp_model.from_map(k)
                self.event_pattern.append(temp_model)
        else:
            self.event_pattern = None
        return self


class PutEventRuleRequestEventPattern(TeaModel):
    def __init__(self, product=None, name_list=None, status_list=None, level_list=None, event_type_list=None):
        self.product = product
        self.name_list = []
        self.status_list = []
        self.level_list = []
        self.event_type_list = []

    def validate(self):
        self.validate_required(self.name_list, 'name_list')
        self.validate_required(self.status_list, 'status_list')
        self.validate_required(self.level_list, 'level_list')
        self.validate_required(self.event_type_list, 'event_type_list')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['NameList'] = []
        if self.name_list is not None:
            for k in self.name_list:
                result['NameList'].append(k)
        else:
            result['NameList'] = None
        result['StatusList'] = []
        if self.status_list is not None:
            for k in self.status_list:
                result['StatusList'].append(k)
        else:
            result['StatusList'] = None
        result['LevelList'] = []
        if self.level_list is not None:
            for k in self.level_list:
                result['LevelList'].append(k)
        else:
            result['LevelList'] = None
        result['EventTypeList'] = []
        if self.event_type_list is not None:
            for k in self.event_type_list:
                result['EventTypeList'].append(k)
        else:
            result['EventTypeList'] = None
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.name_list = []
        if map.get('NameList') is not None:
            for k in map.get('NameList'):
                self.name_list.append(k)
        else:
            self.name_list = None
        self.status_list = []
        if map.get('StatusList') is not None:
            for k in map.get('StatusList'):
                self.status_list.append(k)
        else:
            self.status_list = None
        self.level_list = []
        if map.get('LevelList') is not None:
            for k in map.get('LevelList'):
                self.level_list.append(k)
        else:
            self.level_list = None
        self.event_type_list = []
        if map.get('EventTypeList') is not None:
            for k in map.get('EventTypeList'):
                self.event_type_list.append(k)
        else:
            self.event_type_list = None
        return self


class PutEventRuleResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, data=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class DescribeEventRuleListRequest(TeaModel):
    def __init__(self, name_prefix=None, page_number=None, page_size=None, group_id=None):
        self.name_prefix = name_prefix
        self.page_number = page_number
        self.page_size = page_size
        self.group_id = group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['NamePrefix'] = self.name_prefix
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.name_prefix = map.get('NamePrefix')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.group_id = map.get('GroupId')
        return self


class DescribeEventRuleListResponse(TeaModel):
    def __init__(self, success=None, code=None, message=None, request_id=None, total=None, event_rules=None):
        self.success = success
        self.code = code
        self.message = message
        self.request_id = request_id
        self.total = total
        self.event_rules = event_rules

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.event_rules, 'event_rules')
        if self.event_rules:
            self.event_rules.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.event_rules is not None:
            result['EventRules'] = self.event_rules.to_map()
        else:
            result['EventRules'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('EventRules') is not None:
            temp_model = DescribeEventRuleListResponseEventRules()
            self.event_rules = temp_model.from_map(map['EventRules'])
        else:
            self.event_rules = None
        return self


class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList(TeaModel):
    def __init__(self, name_list=None):
        self.name_list = []

    def validate(self):
        self.validate_required(self.name_list, 'name_list')

    def to_map(self):
        result = {}
        result['NameList'] = []
        if self.name_list is not None:
            for k in self.name_list:
                result['NameList'].append(k)
        else:
            result['NameList'] = None
        return result

    def from_map(self, map={}):
        self.name_list = []
        if map.get('NameList') is not None:
            for k in map.get('NameList'):
                self.name_list.append(k)
        else:
            self.name_list = None
        return self


class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList(TeaModel):
    def __init__(self, level_list=None):
        self.level_list = []

    def validate(self):
        self.validate_required(self.level_list, 'level_list')

    def to_map(self):
        result = {}
        result['LevelList'] = []
        if self.level_list is not None:
            for k in self.level_list:
                result['LevelList'].append(k)
        else:
            result['LevelList'] = None
        return result

    def from_map(self, map={}):
        self.level_list = []
        if map.get('LevelList') is not None:
            for k in map.get('LevelList'):
                self.level_list.append(k)
        else:
            self.level_list = None
        return self


class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList(TeaModel):
    def __init__(self, event_type_list=None):
        self.event_type_list = []

    def validate(self):
        self.validate_required(self.event_type_list, 'event_type_list')

    def to_map(self):
        result = {}
        result['EventTypeList'] = []
        if self.event_type_list is not None:
            for k in self.event_type_list:
                result['EventTypeList'].append(k)
        else:
            result['EventTypeList'] = None
        return result

    def from_map(self, map={}):
        self.event_type_list = []
        if map.get('EventTypeList') is not None:
            for k in map.get('EventTypeList'):
                self.event_type_list.append(k)
        else:
            self.event_type_list = None
        return self


class DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern(TeaModel):
    def __init__(self, product=None, name_list=None, level_list=None, event_type_list=None):
        self.product = product
        self.name_list = name_list
        self.level_list = level_list
        self.event_type_list = event_type_list

    def validate(self):
        self.validate_required(self.product, 'product')
        self.validate_required(self.name_list, 'name_list')
        if self.name_list:
            self.name_list.validate()
        self.validate_required(self.level_list, 'level_list')
        if self.level_list:
            self.level_list.validate()
        self.validate_required(self.event_type_list, 'event_type_list')
        if self.event_type_list:
            self.event_type_list.validate()

    def to_map(self):
        result = {}
        result['Product'] = self.product
        if self.name_list is not None:
            result['NameList'] = self.name_list.to_map()
        else:
            result['NameList'] = None
        if self.level_list is not None:
            result['LevelList'] = self.level_list.to_map()
        else:
            result['LevelList'] = None
        if self.event_type_list is not None:
            result['EventTypeList'] = self.event_type_list.to_map()
        else:
            result['EventTypeList'] = None
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        if map.get('NameList') is not None:
            temp_model = DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternNameList()
            self.name_list = temp_model.from_map(map['NameList'])
        else:
            self.name_list = None
        if map.get('LevelList') is not None:
            temp_model = DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternLevelList()
            self.level_list = temp_model.from_map(map['LevelList'])
        else:
            self.level_list = None
        if map.get('EventTypeList') is not None:
            temp_model = DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPatternEventTypeList()
            self.event_type_list = temp_model.from_map(map['EventTypeList'])
        else:
            self.event_type_list = None
        return self


class DescribeEventRuleListResponseEventRulesEventRuleEventPattern(TeaModel):
    def __init__(self, event_pattern=None):
        self.event_pattern = []

    def validate(self):
        self.validate_required(self.event_pattern, 'event_pattern')
        if self.event_pattern:
            for k in self.event_pattern:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventPattern'] = []
        if self.event_pattern is not None:
            for k in self.event_pattern:
                result['EventPattern'].append(k.to_map() if k else None)
        else:
            result['EventPattern'] = None
        return result

    def from_map(self, map={}):
        self.event_pattern = []
        if map.get('EventPattern') is not None:
            for k in map.get('EventPattern'):
                temp_model = DescribeEventRuleListResponseEventRulesEventRuleEventPatternEventPattern()
                temp_model = temp_model.from_map(k)
                self.event_pattern.append(temp_model)
        else:
            self.event_pattern = None
        return self


class DescribeEventRuleListResponseEventRulesEventRule(TeaModel):
    def __init__(self, name=None, group_id=None, event_type=None, state=None, description=None, event_pattern=None):
        self.name = name
        self.group_id = group_id
        self.event_type = event_type
        self.state = state
        self.description = description
        self.event_pattern = event_pattern

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.event_type, 'event_type')
        self.validate_required(self.state, 'state')
        self.validate_required(self.description, 'description')
        self.validate_required(self.event_pattern, 'event_pattern')
        if self.event_pattern:
            self.event_pattern.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['GroupId'] = self.group_id
        result['EventType'] = self.event_type
        result['State'] = self.state
        result['Description'] = self.description
        if self.event_pattern is not None:
            result['EventPattern'] = self.event_pattern.to_map()
        else:
            result['EventPattern'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.group_id = map.get('GroupId')
        self.event_type = map.get('EventType')
        self.state = map.get('State')
        self.description = map.get('Description')
        if map.get('EventPattern') is not None:
            temp_model = DescribeEventRuleListResponseEventRulesEventRuleEventPattern()
            self.event_pattern = temp_model.from_map(map['EventPattern'])
        else:
            self.event_pattern = None
        return self


class DescribeEventRuleListResponseEventRules(TeaModel):
    def __init__(self, event_rule=None):
        self.event_rule = []

    def validate(self):
        self.validate_required(self.event_rule, 'event_rule')
        if self.event_rule:
            for k in self.event_rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['EventRule'] = []
        if self.event_rule is not None:
            for k in self.event_rule:
                result['EventRule'].append(k.to_map() if k else None)
        else:
            result['EventRule'] = None
        return result

    def from_map(self, map={}):
        self.event_rule = []
        if map.get('EventRule') is not None:
            for k in map.get('EventRule'):
                temp_model = DescribeEventRuleListResponseEventRulesEventRule()
                temp_model = temp_model.from_map(k)
                self.event_rule.append(temp_model)
        else:
            self.event_rule = None
        return self


class DescribeSystemEventAttributeRequest(TeaModel):
    def __init__(self, product=None, event_type=None, name=None, level=None, status=None, group_id=None, search_keywords=None, start_time=None, end_time=None, page_number=None, page_size=None):
        self.product = product
        self.event_type = event_type
        self.name = name
        self.level = level
        self.status = status
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['EventType'] = self.event_type
        result['Name'] = self.name
        result['Level'] = self.level
        result['Status'] = self.status
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.event_type = map.get('EventType')
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeSystemEventAttributeResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, system_events=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.system_events = system_events

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.system_events, 'system_events')
        if self.system_events:
            self.system_events.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.system_events is not None:
            result['SystemEvents'] = self.system_events.to_map()
        else:
            result['SystemEvents'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('SystemEvents') is not None:
            temp_model = DescribeSystemEventAttributeResponseSystemEvents()
            self.system_events = temp_model.from_map(map['SystemEvents'])
        else:
            self.system_events = None
        return self


class DescribeSystemEventAttributeResponseSystemEventsSystemEvent(TeaModel):
    def __init__(self, content=None, product=None, name=None, group_id=None, num=None, level=None, status=None, resource_id=None, region_id=None, instance_name=None, time=None):
        self.content = content
        self.product = product
        self.name = name
        self.group_id = group_id
        self.num = num
        self.level = level
        self.status = status
        self.resource_id = resource_id
        self.region_id = region_id
        self.instance_name = instance_name
        self.time = time

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.product, 'product')
        self.validate_required(self.name, 'name')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.num, 'num')
        self.validate_required(self.level, 'level')
        self.validate_required(self.status, 'status')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.time, 'time')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Product'] = self.product
        result['Name'] = self.name
        result['GroupId'] = self.group_id
        result['Num'] = self.num
        result['Level'] = self.level
        result['Status'] = self.status
        result['ResourceId'] = self.resource_id
        result['RegionId'] = self.region_id
        result['InstanceName'] = self.instance_name
        result['Time'] = self.time
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.product = map.get('Product')
        self.name = map.get('Name')
        self.group_id = map.get('GroupId')
        self.num = map.get('Num')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.resource_id = map.get('ResourceId')
        self.region_id = map.get('RegionId')
        self.instance_name = map.get('InstanceName')
        self.time = map.get('Time')
        return self


class DescribeSystemEventAttributeResponseSystemEvents(TeaModel):
    def __init__(self, system_event=None):
        self.system_event = []

    def validate(self):
        self.validate_required(self.system_event, 'system_event')
        if self.system_event:
            for k in self.system_event:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SystemEvent'] = []
        if self.system_event is not None:
            for k in self.system_event:
                result['SystemEvent'].append(k.to_map() if k else None)
        else:
            result['SystemEvent'] = None
        return result

    def from_map(self, map={}):
        self.system_event = []
        if map.get('SystemEvent') is not None:
            for k in map.get('SystemEvent'):
                temp_model = DescribeSystemEventAttributeResponseSystemEventsSystemEvent()
                temp_model = temp_model.from_map(k)
                self.system_event.append(temp_model)
        else:
            self.system_event = None
        return self


class DescribeSystemEventHistogramRequest(TeaModel):
    def __init__(self, product=None, event_type=None, name=None, level=None, status=None, group_id=None, search_keywords=None, start_time=None, end_time=None, page_number=None, page_size=None):
        self.product = product
        self.event_type = event_type
        self.name = name
        self.level = level
        self.status = status
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['EventType'] = self.event_type
        result['Name'] = self.name
        result['Level'] = self.level
        result['Status'] = self.status
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.event_type = map.get('EventType')
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeSystemEventHistogramResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, system_event_histograms=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.system_event_histograms = system_event_histograms

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.system_event_histograms, 'system_event_histograms')
        if self.system_event_histograms:
            self.system_event_histograms.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.system_event_histograms is not None:
            result['SystemEventHistograms'] = self.system_event_histograms.to_map()
        else:
            result['SystemEventHistograms'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('SystemEventHistograms') is not None:
            temp_model = DescribeSystemEventHistogramResponseSystemEventHistograms()
            self.system_event_histograms = temp_model.from_map(map['SystemEventHistograms'])
        else:
            self.system_event_histograms = None
        return self


class DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram(TeaModel):
    def __init__(self, count=None, start_time=None, end_time=None):
        self.count = count
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.count, 'count')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['Count'] = self.count
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.count = map.get('Count')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeSystemEventHistogramResponseSystemEventHistograms(TeaModel):
    def __init__(self, system_event_histogram=None):
        self.system_event_histogram = []

    def validate(self):
        self.validate_required(self.system_event_histogram, 'system_event_histogram')
        if self.system_event_histogram:
            for k in self.system_event_histogram:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SystemEventHistogram'] = []
        if self.system_event_histogram is not None:
            for k in self.system_event_histogram:
                result['SystemEventHistogram'].append(k.to_map() if k else None)
        else:
            result['SystemEventHistogram'] = None
        return result

    def from_map(self, map={}):
        self.system_event_histogram = []
        if map.get('SystemEventHistogram') is not None:
            for k in map.get('SystemEventHistogram'):
                temp_model = DescribeSystemEventHistogramResponseSystemEventHistogramsSystemEventHistogram()
                temp_model = temp_model.from_map(k)
                self.system_event_histogram.append(temp_model)
        else:
            self.system_event_histogram = None
        return self


class DescribeSystemEventCountRequest(TeaModel):
    def __init__(self, product=None, event_type=None, name=None, level=None, status=None, group_id=None, search_keywords=None, start_time=None, end_time=None):
        self.product = product
        self.event_type = event_type
        self.name = name
        self.level = level
        self.status = status
        self.group_id = group_id
        self.search_keywords = search_keywords
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['EventType'] = self.event_type
        result['Name'] = self.name
        result['Level'] = self.level
        result['Status'] = self.status
        result['GroupId'] = self.group_id
        result['SearchKeywords'] = self.search_keywords
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.event_type = map.get('EventType')
        self.name = map.get('Name')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.group_id = map.get('GroupId')
        self.search_keywords = map.get('SearchKeywords')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeSystemEventCountResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, system_event_counts=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.system_event_counts = system_event_counts

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.system_event_counts, 'system_event_counts')
        if self.system_event_counts:
            self.system_event_counts.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        if self.system_event_counts is not None:
            result['SystemEventCounts'] = self.system_event_counts.to_map()
        else:
            result['SystemEventCounts'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        if map.get('SystemEventCounts') is not None:
            temp_model = DescribeSystemEventCountResponseSystemEventCounts()
            self.system_event_counts = temp_model.from_map(map['SystemEventCounts'])
        else:
            self.system_event_counts = None
        return self


class DescribeSystemEventCountResponseSystemEventCountsSystemEventCount(TeaModel):
    def __init__(self, content=None, product=None, name=None, group_id=None, num=None, level=None, status=None, resource_id=None, region_id=None, instance_name=None, time=None):
        self.content = content
        self.product = product
        self.name = name
        self.group_id = group_id
        self.num = num
        self.level = level
        self.status = status
        self.resource_id = resource_id
        self.region_id = region_id
        self.instance_name = instance_name
        self.time = time

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.product, 'product')
        self.validate_required(self.name, 'name')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.num, 'num')
        self.validate_required(self.level, 'level')
        self.validate_required(self.status, 'status')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.time, 'time')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Product'] = self.product
        result['Name'] = self.name
        result['GroupId'] = self.group_id
        result['Num'] = self.num
        result['Level'] = self.level
        result['Status'] = self.status
        result['ResourceId'] = self.resource_id
        result['RegionId'] = self.region_id
        result['InstanceName'] = self.instance_name
        result['Time'] = self.time
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.product = map.get('Product')
        self.name = map.get('Name')
        self.group_id = map.get('GroupId')
        self.num = map.get('Num')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.resource_id = map.get('ResourceId')
        self.region_id = map.get('RegionId')
        self.instance_name = map.get('InstanceName')
        self.time = map.get('Time')
        return self


class DescribeSystemEventCountResponseSystemEventCounts(TeaModel):
    def __init__(self, system_event_count=None):
        self.system_event_count = []

    def validate(self):
        self.validate_required(self.system_event_count, 'system_event_count')
        if self.system_event_count:
            for k in self.system_event_count:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SystemEventCount'] = []
        if self.system_event_count is not None:
            for k in self.system_event_count:
                result['SystemEventCount'].append(k.to_map() if k else None)
        else:
            result['SystemEventCount'] = None
        return result

    def from_map(self, map={}):
        self.system_event_count = []
        if map.get('SystemEventCount') is not None:
            for k in map.get('SystemEventCount'):
                temp_model = DescribeSystemEventCountResponseSystemEventCountsSystemEventCount()
                temp_model = temp_model.from_map(k)
                self.system_event_count.append(temp_model)
        else:
            self.system_event_count = None
        return self


class DescribeSystemEventMetaListRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeSystemEventMetaListResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, data=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Data') is not None:
            temp_model = DescribeSystemEventMetaListResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DescribeSystemEventMetaListResponseDataResource(TeaModel):
    def __init__(self, product=None, name=None, name_desc=None, level=None, status=None, status_desc=None, event_type=None):
        self.product = product
        self.name = name
        self.name_desc = name_desc
        self.level = level
        self.status = status
        self.status_desc = status_desc
        self.event_type = event_type

    def validate(self):
        self.validate_required(self.product, 'product')
        self.validate_required(self.name, 'name')
        self.validate_required(self.name_desc, 'name_desc')
        self.validate_required(self.level, 'level')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_desc, 'status_desc')
        self.validate_required(self.event_type, 'event_type')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['Name'] = self.name
        result['NameDesc'] = self.name_desc
        result['Level'] = self.level
        result['Status'] = self.status
        result['StatusDesc'] = self.status_desc
        result['EventType'] = self.event_type
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.name = map.get('Name')
        self.name_desc = map.get('NameDesc')
        self.level = map.get('Level')
        self.status = map.get('Status')
        self.status_desc = map.get('StatusDesc')
        self.event_type = map.get('EventType')
        return self


class DescribeSystemEventMetaListResponseData(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeSystemEventMetaListResponseDataResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DescribeMonitoringAgentProcessesRequest(TeaModel):
    def __init__(self, instance_id=None):
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        return self


class DescribeMonitoringAgentProcessesResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, node_processes=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.node_processes = node_processes

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.node_processes, 'node_processes')
        if self.node_processes:
            self.node_processes.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.node_processes is not None:
            result['NodeProcesses'] = self.node_processes.to_map()
        else:
            result['NodeProcesses'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('NodeProcesses') is not None:
            temp_model = DescribeMonitoringAgentProcessesResponseNodeProcesses()
            self.node_processes = temp_model.from_map(map['NodeProcesses'])
        else:
            self.node_processes = None
        return self


class DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess(TeaModel):
    def __init__(self, process_id=None, instance_id=None, process_name=None, process_user=None, command=None, group_id=None):
        self.process_id = process_id
        self.instance_id = instance_id
        self.process_name = process_name
        self.process_user = process_user
        self.command = command
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.process_id, 'process_id')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.process_name, 'process_name')
        self.validate_required(self.process_user, 'process_user')
        self.validate_required(self.command, 'command')
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['ProcessId'] = self.process_id
        result['InstanceId'] = self.instance_id
        result['ProcessName'] = self.process_name
        result['ProcessUser'] = self.process_user
        result['Command'] = self.command
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.process_id = map.get('ProcessId')
        self.instance_id = map.get('InstanceId')
        self.process_name = map.get('ProcessName')
        self.process_user = map.get('ProcessUser')
        self.command = map.get('Command')
        self.group_id = map.get('GroupId')
        return self


class DescribeMonitoringAgentProcessesResponseNodeProcesses(TeaModel):
    def __init__(self, node_process=None):
        self.node_process = []

    def validate(self):
        self.validate_required(self.node_process, 'node_process')
        if self.node_process:
            for k in self.node_process:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NodeProcess'] = []
        if self.node_process is not None:
            for k in self.node_process:
                result['NodeProcess'].append(k.to_map() if k else None)
        else:
            result['NodeProcess'] = None
        return result

    def from_map(self, map={}):
        self.node_process = []
        if map.get('NodeProcess') is not None:
            for k in map.get('NodeProcess'):
                temp_model = DescribeMonitoringAgentProcessesResponseNodeProcessesNodeProcess()
                temp_model = temp_model.from_map(k)
                self.node_process.append(temp_model)
        else:
            self.node_process = None
        return self


class UninstallMonitoringAgentRequest(TeaModel):
    def __init__(self, instance_id=None):
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        return self


class UninstallMonitoringAgentResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeMonitoringAgentAccessKeyRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeMonitoringAgentAccessKeyResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, access_key=None, secret_key=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.access_key = access_key
        self.secret_key = secret_key

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_key, 'access_key')
        self.validate_required(self.secret_key, 'secret_key')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['AccessKey'] = self.access_key
        result['SecretKey'] = self.secret_key
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.access_key = map.get('AccessKey')
        self.secret_key = map.get('SecretKey')
        return self


class InstallMonitoringAgentRequest(TeaModel):
    def __init__(self, force=None, instance_ids=None):
        self.force = force
        self.instance_ids = []

    def validate(self):
        self.validate_required(self.instance_ids, 'instance_ids')

    def to_map(self):
        result = {}
        result['Force'] = self.force
        result['InstanceIds'] = []
        if self.instance_ids is not None:
            for k in self.instance_ids:
                result['InstanceIds'].append(k)
        else:
            result['InstanceIds'] = None
        return result

    def from_map(self, map={}):
        self.force = map.get('Force')
        self.instance_ids = []
        if map.get('InstanceIds') is not None:
            for k in map.get('InstanceIds'):
                self.instance_ids.append(k)
        else:
            self.instance_ids = None
        return self


class InstallMonitoringAgentResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class SendDryRunSystemEventRequest(TeaModel):
    def __init__(self, product=None, event_name=None, group_id=None, event_content=None):
        self.product = product
        self.event_name = event_name
        self.group_id = group_id
        self.event_content = event_content

    def validate(self):
        self.validate_required(self.product, 'product')
        self.validate_required(self.event_name, 'event_name')

    def to_map(self):
        result = {}
        result['Product'] = self.product
        result['EventName'] = self.event_name
        result['GroupId'] = self.group_id
        result['EventContent'] = self.event_content
        return result

    def from_map(self, map={}):
        self.product = map.get('Product')
        self.event_name = map.get('EventName')
        self.group_id = map.get('GroupId')
        self.event_content = map.get('EventContent')
        return self


class SendDryRunSystemEventResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class CreateMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, process_name=None, instance_id=None, process_user=None):
        self.process_name = process_name
        self.instance_id = instance_id
        self.process_user = process_user

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['ProcessName'] = self.process_name
        result['InstanceId'] = self.instance_id
        result['ProcessUser'] = self.process_user
        return result

    def from_map(self, map={}):
        self.process_name = map.get('ProcessName')
        self.instance_id = map.get('InstanceId')
        self.process_user = map.get('ProcessUser')
        return self


class CreateMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.id = id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.id = map.get('Id')
        return self


class DescribeMonitoringAgentConfigRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeMonitoringAgentConfigResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, auto_install=None, enable_install_agent_new_ecs=None, enable_active_alert=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.auto_install = auto_install
        self.enable_install_agent_new_ecs = enable_install_agent_new_ecs
        self.enable_active_alert = enable_active_alert

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.auto_install, 'auto_install')
        self.validate_required(self.enable_install_agent_new_ecs, 'enable_install_agent_new_ecs')
        self.validate_required(self.enable_active_alert, 'enable_active_alert')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['AutoInstall'] = self.auto_install
        result['EnableInstallAgentNewECS'] = self.enable_install_agent_new_ecs
        result['EnableActiveAlert'] = self.enable_active_alert
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.auto_install = map.get('AutoInstall')
        self.enable_install_agent_new_ecs = map.get('EnableInstallAgentNewECS')
        self.enable_active_alert = map.get('EnableActiveAlert')
        return self


class DeleteMonitoringAgentProcessRequest(TeaModel):
    def __init__(self, instance_id=None, process_name=None, process_id=None):
        self.instance_id = instance_id
        self.process_name = process_name
        self.process_id = process_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['ProcessName'] = self.process_name
        result['ProcessId'] = self.process_id
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.process_name = map.get('ProcessName')
        self.process_id = map.get('ProcessId')
        return self


class DeleteMonitoringAgentProcessResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeMonitoringAgentHostsRequest(TeaModel):
    def __init__(self, key_word=None, host_name=None, instance_ids=None, serial_numbers=None, page_number=None, page_size=None, instance_region_id=None):
        self.key_word = key_word
        self.host_name = host_name
        self.instance_ids = instance_ids
        self.serial_numbers = serial_numbers
        self.page_number = page_number
        self.page_size = page_size
        self.instance_region_id = instance_region_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['KeyWord'] = self.key_word
        result['HostName'] = self.host_name
        result['InstanceIds'] = self.instance_ids
        result['SerialNumbers'] = self.serial_numbers
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['InstanceRegionId'] = self.instance_region_id
        return result

    def from_map(self, map={}):
        self.key_word = map.get('KeyWord')
        self.host_name = map.get('HostName')
        self.instance_ids = map.get('InstanceIds')
        self.serial_numbers = map.get('SerialNumbers')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.instance_region_id = map.get('InstanceRegionId')
        return self


class DescribeMonitoringAgentHostsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, page_total=None, total=None, hosts=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.page_total = page_total
        self.total = total
        self.hosts = hosts

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_total, 'page_total')
        self.validate_required(self.total, 'total')
        self.validate_required(self.hosts, 'hosts')
        if self.hosts:
            self.hosts.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['PageTotal'] = self.page_total
        result['Total'] = self.total
        if self.hosts is not None:
            result['Hosts'] = self.hosts.to_map()
        else:
            result['Hosts'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.page_total = map.get('PageTotal')
        self.total = map.get('Total')
        if map.get('Hosts') is not None:
            temp_model = DescribeMonitoringAgentHostsResponseHosts()
            self.hosts = temp_model.from_map(map['Hosts'])
        else:
            self.hosts = None
        return self


class DescribeMonitoringAgentHostsResponseHostsHost(TeaModel):
    def __init__(self, instance_id=None, serial_number=None, host_name=None, ali_uid=None, operating_system=None, ip_group=None, region=None, agent_version=None, eip_address=None, eip_id=None, is_aliyun_host=None, nat_ip=None, network_type=None, instance_type_family=None):
        self.instance_id = instance_id
        self.serial_number = serial_number
        self.host_name = host_name
        self.ali_uid = ali_uid
        self.operating_system = operating_system
        self.ip_group = ip_group
        self.region = region
        self.agent_version = agent_version
        self.eip_address = eip_address
        self.eip_id = eip_id
        self.is_aliyun_host = is_aliyun_host
        self.nat_ip = nat_ip
        self.network_type = network_type
        self.instance_type_family = instance_type_family

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.serial_number, 'serial_number')
        self.validate_required(self.host_name, 'host_name')
        self.validate_required(self.ali_uid, 'ali_uid')
        self.validate_required(self.operating_system, 'operating_system')
        self.validate_required(self.ip_group, 'ip_group')
        self.validate_required(self.region, 'region')
        self.validate_required(self.agent_version, 'agent_version')
        self.validate_required(self.eip_address, 'eip_address')
        self.validate_required(self.eip_id, 'eip_id')
        self.validate_required(self.is_aliyun_host, 'is_aliyun_host')
        self.validate_required(self.nat_ip, 'nat_ip')
        self.validate_required(self.network_type, 'network_type')
        self.validate_required(self.instance_type_family, 'instance_type_family')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['SerialNumber'] = self.serial_number
        result['HostName'] = self.host_name
        result['AliUid'] = self.ali_uid
        result['OperatingSystem'] = self.operating_system
        result['IpGroup'] = self.ip_group
        result['Region'] = self.region
        result['AgentVersion'] = self.agent_version
        result['EipAddress'] = self.eip_address
        result['EipId'] = self.eip_id
        result['isAliyunHost'] = self.is_aliyun_host
        result['NatIp'] = self.nat_ip
        result['NetworkType'] = self.network_type
        result['InstanceTypeFamily'] = self.instance_type_family
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.serial_number = map.get('SerialNumber')
        self.host_name = map.get('HostName')
        self.ali_uid = map.get('AliUid')
        self.operating_system = map.get('OperatingSystem')
        self.ip_group = map.get('IpGroup')
        self.region = map.get('Region')
        self.agent_version = map.get('AgentVersion')
        self.eip_address = map.get('EipAddress')
        self.eip_id = map.get('EipId')
        self.is_aliyun_host = map.get('isAliyunHost')
        self.nat_ip = map.get('NatIp')
        self.network_type = map.get('NetworkType')
        self.instance_type_family = map.get('InstanceTypeFamily')
        return self


class DescribeMonitoringAgentHostsResponseHosts(TeaModel):
    def __init__(self, host=None):
        self.host = []

    def validate(self):
        self.validate_required(self.host, 'host')
        if self.host:
            for k in self.host:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Host'] = []
        if self.host is not None:
            for k in self.host:
                result['Host'].append(k.to_map() if k else None)
        else:
            result['Host'] = None
        return result

    def from_map(self, map={}):
        self.host = []
        if map.get('Host') is not None:
            for k in map.get('Host'):
                temp_model = DescribeMonitoringAgentHostsResponseHostsHost()
                temp_model = temp_model.from_map(k)
                self.host.append(temp_model)
        else:
            self.host = None
        return self


class DescribeSiteMonitorDataRequest(TeaModel):
    def __init__(self, task_id=None, type=None, metric_name=None, start_time=None, end_time=None, period=None, next_token=None, length=None):
        self.task_id = task_id
        self.type = type
        self.metric_name = metric_name
        self.start_time = start_time
        self.end_time = end_time
        self.period = period
        self.next_token = next_token
        self.length = length

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['Type'] = self.type
        result['MetricName'] = self.metric_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Period'] = self.period
        result['NextToken'] = self.next_token
        result['Length'] = self.length
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.type = map.get('Type')
        self.metric_name = map.get('MetricName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.period = map.get('Period')
        self.next_token = map.get('NextToken')
        self.length = map.get('Length')
        return self


class DescribeSiteMonitorDataResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, next_token=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.next_token = next_token
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.data = map.get('Data')
        return self


class ModifySiteMonitorRequest(TeaModel):
    def __init__(self, address=None, task_id=None, task_name=None, interval=None, isp_cities=None, options_json=None, alert_ids=None):
        self.address = address
        self.task_id = task_id
        self.task_name = task_name
        self.interval = interval
        self.isp_cities = isp_cities
        self.options_json = options_json
        self.alert_ids = alert_ids

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['Address'] = self.address
        result['TaskId'] = self.task_id
        result['TaskName'] = self.task_name
        result['Interval'] = self.interval
        result['IspCities'] = self.isp_cities
        result['OptionsJson'] = self.options_json
        result['AlertIds'] = self.alert_ids
        return result

    def from_map(self, map={}):
        self.address = map.get('Address')
        self.task_id = map.get('TaskId')
        self.task_name = map.get('TaskName')
        self.interval = map.get('Interval')
        self.isp_cities = map.get('IspCities')
        self.options_json = map.get('OptionsJson')
        self.alert_ids = map.get('AlertIds')
        return self


class ModifySiteMonitorResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ModifySiteMonitorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ModifySiteMonitorResponseData(TeaModel):
    def __init__(self, count=None):
        self.count = count

    def validate(self):
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['count'] = self.count
        return result

    def from_map(self, map={}):
        self.count = map.get('count')
        return self


class DescribeSiteMonitorISPCityListRequest(TeaModel):
    def __init__(self, isp=None, city=None):
        self.isp = isp
        self.city = city

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Isp'] = self.isp
        result['City'] = self.city
        return result

    def from_map(self, map={}):
        self.isp = map.get('Isp')
        self.city = map.get('City')
        return self


class DescribeSiteMonitorISPCityListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, isp_city_list=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.isp_city_list = isp_city_list

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.isp_city_list, 'isp_city_list')
        if self.isp_city_list:
            self.isp_city_list.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.isp_city_list is not None:
            result['IspCityList'] = self.isp_city_list.to_map()
        else:
            result['IspCityList'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('IspCityList') is not None:
            temp_model = DescribeSiteMonitorISPCityListResponseIspCityList()
            self.isp_city_list = temp_model.from_map(map['IspCityList'])
        else:
            self.isp_city_list = None
        return self


class DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName(TeaModel):
    def __init__(self, en=None, zh_cn=None):
        self.en = en
        self.zh_cn = zh_cn

    def validate(self):
        self.validate_required(self.en, 'en')
        self.validate_required(self.zh_cn, 'zh_cn')

    def to_map(self):
        result = {}
        result['en'] = self.en
        result['zh_CN'] = self.zh_cn
        return result

    def from_map(self, map={}):
        self.en = map.get('en')
        self.zh_cn = map.get('zh_CN')
        return self


class DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName(TeaModel):
    def __init__(self, en=None, zh_cn=None):
        self.en = en
        self.zh_cn = zh_cn

    def validate(self):
        self.validate_required(self.en, 'en')
        self.validate_required(self.zh_cn, 'zh_cn')

    def to_map(self):
        result = {}
        result['en'] = self.en
        result['zh_CN'] = self.zh_cn
        return result

    def from_map(self, map={}):
        self.en = map.get('en')
        self.zh_cn = map.get('zh_CN')
        return self


class DescribeSiteMonitorISPCityListResponseIspCityListIspCity(TeaModel):
    def __init__(self, isp=None, city=None, region=None, country=None, isp_name=None, city_name=None):
        self.isp = isp
        self.city = city
        self.region = region
        self.country = country
        self.isp_name = isp_name
        self.city_name = city_name

    def validate(self):
        self.validate_required(self.isp, 'isp')
        self.validate_required(self.city, 'city')
        self.validate_required(self.region, 'region')
        self.validate_required(self.country, 'country')
        self.validate_required(self.isp_name, 'isp_name')
        if self.isp_name:
            self.isp_name.validate()
        self.validate_required(self.city_name, 'city_name')
        if self.city_name:
            self.city_name.validate()

    def to_map(self):
        result = {}
        result['Isp'] = self.isp
        result['City'] = self.city
        result['Region'] = self.region
        result['Country'] = self.country
        if self.isp_name is not None:
            result['IspName'] = self.isp_name.to_map()
        else:
            result['IspName'] = None
        if self.city_name is not None:
            result['CityName'] = self.city_name.to_map()
        else:
            result['CityName'] = None
        return result

    def from_map(self, map={}):
        self.isp = map.get('Isp')
        self.city = map.get('City')
        self.region = map.get('Region')
        self.country = map.get('Country')
        if map.get('IspName') is not None:
            temp_model = DescribeSiteMonitorISPCityListResponseIspCityListIspCityIspName()
            self.isp_name = temp_model.from_map(map['IspName'])
        else:
            self.isp_name = None
        if map.get('CityName') is not None:
            temp_model = DescribeSiteMonitorISPCityListResponseIspCityListIspCityCityName()
            self.city_name = temp_model.from_map(map['CityName'])
        else:
            self.city_name = None
        return self


class DescribeSiteMonitorISPCityListResponseIspCityList(TeaModel):
    def __init__(self, isp_city=None):
        self.isp_city = []

    def validate(self):
        self.validate_required(self.isp_city, 'isp_city')
        if self.isp_city:
            for k in self.isp_city:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['IspCity'] = []
        if self.isp_city is not None:
            for k in self.isp_city:
                result['IspCity'].append(k.to_map() if k else None)
        else:
            result['IspCity'] = None
        return result

    def from_map(self, map={}):
        self.isp_city = []
        if map.get('IspCity') is not None:
            for k in map.get('IspCity'):
                temp_model = DescribeSiteMonitorISPCityListResponseIspCityListIspCity()
                temp_model = temp_model.from_map(k)
                self.isp_city.append(temp_model)
        else:
            self.isp_city = None
        return self


class DescribeSiteMonitorQuotaRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeSiteMonitorQuotaResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = DescribeSiteMonitorQuotaResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DescribeSiteMonitorQuotaResponseData(TeaModel):
    def __init__(self, site_monitor_idc_quota=None, site_monitor_operator_quota_quota=None, site_monitor_task_quota=None, site_monitor_quota_task_used=None, site_monitor_version=None):
        self.site_monitor_idc_quota = site_monitor_idc_quota
        self.site_monitor_operator_quota_quota = site_monitor_operator_quota_quota
        self.site_monitor_task_quota = site_monitor_task_quota
        self.site_monitor_quota_task_used = site_monitor_quota_task_used
        self.site_monitor_version = site_monitor_version

    def validate(self):
        self.validate_required(self.site_monitor_idc_quota, 'site_monitor_idc_quota')
        self.validate_required(self.site_monitor_operator_quota_quota, 'site_monitor_operator_quota_quota')
        self.validate_required(self.site_monitor_task_quota, 'site_monitor_task_quota')
        self.validate_required(self.site_monitor_quota_task_used, 'site_monitor_quota_task_used')
        self.validate_required(self.site_monitor_version, 'site_monitor_version')

    def to_map(self):
        result = {}
        result['SiteMonitorIdcQuota'] = self.site_monitor_idc_quota
        result['SiteMonitorOperatorQuotaQuota'] = self.site_monitor_operator_quota_quota
        result['SiteMonitorTaskQuota'] = self.site_monitor_task_quota
        result['SiteMonitorQuotaTaskUsed'] = self.site_monitor_quota_task_used
        result['SiteMonitorVersion'] = self.site_monitor_version
        return result

    def from_map(self, map={}):
        self.site_monitor_idc_quota = map.get('SiteMonitorIdcQuota')
        self.site_monitor_operator_quota_quota = map.get('SiteMonitorOperatorQuotaQuota')
        self.site_monitor_task_quota = map.get('SiteMonitorTaskQuota')
        self.site_monitor_quota_task_used = map.get('SiteMonitorQuotaTaskUsed')
        self.site_monitor_version = map.get('SiteMonitorVersion')
        return self


class DescribeSiteMonitorStatisticsRequest(TeaModel):
    def __init__(self, task_id=None, time_range=None, start_time=None, metric_name=None):
        self.task_id = task_id
        self.time_range = time_range
        self.start_time = start_time
        self.metric_name = metric_name

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['TimeRange'] = self.time_range
        result['StartTime'] = self.start_time
        result['MetricName'] = self.metric_name
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.time_range = map.get('TimeRange')
        self.start_time = map.get('StartTime')
        self.metric_name = map.get('MetricName')
        return self


class DescribeSiteMonitorStatisticsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class EnableSiteMonitorsRequest(TeaModel):
    def __init__(self, task_ids=None):
        self.task_ids = task_ids

    def validate(self):
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['TaskIds'] = self.task_ids
        return result

    def from_map(self, map={}):
        self.task_ids = map.get('TaskIds')
        return self


class EnableSiteMonitorsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = EnableSiteMonitorsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class EnableSiteMonitorsResponseData(TeaModel):
    def __init__(self, count=None):
        self.count = count

    def validate(self):
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['count'] = self.count
        return result

    def from_map(self, map={}):
        self.count = map.get('count')
        return self


class DescribeSiteMonitorAttributeRequest(TeaModel):
    def __init__(self, task_id=None, include_alert=None):
        self.task_id = task_id
        self.include_alert = include_alert

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['IncludeAlert'] = self.include_alert
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.include_alert = map.get('IncludeAlert')
        return self


class DescribeSiteMonitorAttributeResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, metric_rules=None, site_monitors=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.metric_rules = metric_rules
        self.site_monitors = site_monitors

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.metric_rules, 'metric_rules')
        if self.metric_rules:
            self.metric_rules.validate()
        self.validate_required(self.site_monitors, 'site_monitors')
        if self.site_monitors:
            self.site_monitors.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.metric_rules is not None:
            result['MetricRules'] = self.metric_rules.to_map()
        else:
            result['MetricRules'] = None
        if self.site_monitors is not None:
            result['SiteMonitors'] = self.site_monitors.to_map()
        else:
            result['SiteMonitors'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('MetricRules') is not None:
            temp_model = DescribeSiteMonitorAttributeResponseMetricRules()
            self.metric_rules = temp_model.from_map(map['MetricRules'])
        else:
            self.metric_rules = None
        if map.get('SiteMonitors') is not None:
            temp_model = DescribeSiteMonitorAttributeResponseSiteMonitors()
            self.site_monitors = temp_model.from_map(map['SiteMonitors'])
        else:
            self.site_monitors = None
        return self


class DescribeSiteMonitorAttributeResponseMetricRulesMetricRule(TeaModel):
    def __init__(self, rule_id=None, rule_name=None, namespace=None, metric_name=None, ok_actions=None, alarm_actions=None, statistics=None, action_enable=None, period=None, comparison_operator=None, threshold=None, evaluation_count=None, level=None, expression=None, state_value=None, dimensions=None):
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.namespace = namespace
        self.metric_name = metric_name
        self.ok_actions = ok_actions
        self.alarm_actions = alarm_actions
        self.statistics = statistics
        self.action_enable = action_enable
        self.period = period
        self.comparison_operator = comparison_operator
        self.threshold = threshold
        self.evaluation_count = evaluation_count
        self.level = level
        self.expression = expression
        self.state_value = state_value
        self.dimensions = dimensions

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.ok_actions, 'ok_actions')
        self.validate_required(self.alarm_actions, 'alarm_actions')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.action_enable, 'action_enable')
        self.validate_required(self.period, 'period')
        self.validate_required(self.comparison_operator, 'comparison_operator')
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.level, 'level')
        self.validate_required(self.expression, 'expression')
        self.validate_required(self.state_value, 'state_value')
        self.validate_required(self.dimensions, 'dimensions')

    def to_map(self):
        result = {}
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['OkActions'] = self.ok_actions
        result['AlarmActions'] = self.alarm_actions
        result['Statistics'] = self.statistics
        result['ActionEnable'] = self.action_enable
        result['Period'] = self.period
        result['ComparisonOperator'] = self.comparison_operator
        result['Threshold'] = self.threshold
        result['EvaluationCount'] = self.evaluation_count
        result['Level'] = self.level
        result['Expression'] = self.expression
        result['StateValue'] = self.state_value
        result['Dimensions'] = self.dimensions
        return result

    def from_map(self, map={}):
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.ok_actions = map.get('OkActions')
        self.alarm_actions = map.get('AlarmActions')
        self.statistics = map.get('Statistics')
        self.action_enable = map.get('ActionEnable')
        self.period = map.get('Period')
        self.comparison_operator = map.get('ComparisonOperator')
        self.threshold = map.get('Threshold')
        self.evaluation_count = map.get('EvaluationCount')
        self.level = map.get('Level')
        self.expression = map.get('Expression')
        self.state_value = map.get('StateValue')
        self.dimensions = map.get('Dimensions')
        return self


class DescribeSiteMonitorAttributeResponseMetricRules(TeaModel):
    def __init__(self, metric_rule=None):
        self.metric_rule = []

    def validate(self):
        self.validate_required(self.metric_rule, 'metric_rule')
        if self.metric_rule:
            for k in self.metric_rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MetricRule'] = []
        if self.metric_rule is not None:
            for k in self.metric_rule:
                result['MetricRule'].append(k.to_map() if k else None)
        else:
            result['MetricRule'] = None
        return result

    def from_map(self, map={}):
        self.metric_rule = []
        if map.get('MetricRule') is not None:
            for k in map.get('MetricRule'):
                temp_model = DescribeSiteMonitorAttributeResponseMetricRulesMetricRule()
                temp_model = temp_model.from_map(k)
                self.metric_rule.append(temp_model)
        else:
            self.metric_rule = None
        return self


class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity(TeaModel):
    def __init__(self, city_name=None, isp_name=None, city=None, isp=None):
        self.city_name = city_name
        self.isp_name = isp_name
        self.city = city
        self.isp = isp

    def validate(self):
        self.validate_required(self.city_name, 'city_name')
        self.validate_required(self.isp_name, 'isp_name')
        self.validate_required(self.city, 'city')
        self.validate_required(self.isp, 'isp')

    def to_map(self):
        result = {}
        result['CityName'] = self.city_name
        result['IspName'] = self.isp_name
        result['City'] = self.city
        result['Isp'] = self.isp
        return result

    def from_map(self, map={}):
        self.city_name = map.get('CityName')
        self.isp_name = map.get('IspName')
        self.city = map.get('City')
        self.isp = map.get('Isp')
        return self


class DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities(TeaModel):
    def __init__(self, isp_city=None):
        self.isp_city = []

    def validate(self):
        self.validate_required(self.isp_city, 'isp_city')
        if self.isp_city:
            for k in self.isp_city:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['IspCity'] = []
        if self.isp_city is not None:
            for k in self.isp_city:
                result['IspCity'].append(k.to_map() if k else None)
        else:
            result['IspCity'] = None
        return result

    def from_map(self, map={}):
        self.isp_city = []
        if map.get('IspCity') is not None:
            for k in map.get('IspCity'):
                temp_model = DescribeSiteMonitorAttributeResponseSiteMonitorsIspCitiesIspCity()
                temp_model = temp_model.from_map(k)
                self.isp_city.append(temp_model)
        else:
            self.isp_city = None
        return self


class DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson(TeaModel):
    def __init__(self, dns_type=None, dns_server=None, expect_value=None, http_method=None, response_content=None, match_rule=None, request_content=None, cookie=None, header=None, username=None, password=None, time_out=None, ping_num=None, failure_rate=None, request_format=None, response_format=None, port=None, authentication=None, traceroute=None):
        self.dns_type = dns_type
        self.dns_server = dns_server
        self.expect_value = expect_value
        self.http_method = http_method
        self.response_content = response_content
        self.match_rule = match_rule
        self.request_content = request_content
        self.cookie = cookie
        self.header = header
        self.username = username
        self.password = password
        self.time_out = time_out
        self.ping_num = ping_num
        self.failure_rate = failure_rate
        self.request_format = request_format
        self.response_format = response_format
        self.port = port
        self.authentication = authentication
        self.traceroute = traceroute

    def validate(self):
        self.validate_required(self.dns_type, 'dns_type')
        self.validate_required(self.dns_server, 'dns_server')
        self.validate_required(self.expect_value, 'expect_value')
        self.validate_required(self.http_method, 'http_method')
        self.validate_required(self.response_content, 'response_content')
        self.validate_required(self.match_rule, 'match_rule')
        self.validate_required(self.request_content, 'request_content')
        self.validate_required(self.cookie, 'cookie')
        self.validate_required(self.header, 'header')
        self.validate_required(self.username, 'username')
        self.validate_required(self.password, 'password')
        self.validate_required(self.time_out, 'time_out')
        self.validate_required(self.ping_num, 'ping_num')
        self.validate_required(self.failure_rate, 'failure_rate')
        self.validate_required(self.request_format, 'request_format')
        self.validate_required(self.response_format, 'response_format')
        self.validate_required(self.port, 'port')
        self.validate_required(self.authentication, 'authentication')
        self.validate_required(self.traceroute, 'traceroute')

    def to_map(self):
        result = {}
        result['dns_type'] = self.dns_type
        result['dns_server'] = self.dns_server
        result['expect_value'] = self.expect_value
        result['http_method'] = self.http_method
        result['response_content'] = self.response_content
        result['match_rule'] = self.match_rule
        result['request_content'] = self.request_content
        result['cookie'] = self.cookie
        result['header'] = self.header
        result['username'] = self.username
        result['password'] = self.password
        result['time_out'] = self.time_out
        result['ping_num'] = self.ping_num
        result['failure_rate'] = self.failure_rate
        result['request_format'] = self.request_format
        result['response_format'] = self.response_format
        result['port'] = self.port
        result['authentication'] = self.authentication
        result['traceroute'] = self.traceroute
        return result

    def from_map(self, map={}):
        self.dns_type = map.get('dns_type')
        self.dns_server = map.get('dns_server')
        self.expect_value = map.get('expect_value')
        self.http_method = map.get('http_method')
        self.response_content = map.get('response_content')
        self.match_rule = map.get('match_rule')
        self.request_content = map.get('request_content')
        self.cookie = map.get('cookie')
        self.header = map.get('header')
        self.username = map.get('username')
        self.password = map.get('password')
        self.time_out = map.get('time_out')
        self.ping_num = map.get('ping_num')
        self.failure_rate = map.get('failure_rate')
        self.request_format = map.get('request_format')
        self.response_format = map.get('response_format')
        self.port = map.get('port')
        self.authentication = map.get('authentication')
        self.traceroute = map.get('traceroute')
        return self


class DescribeSiteMonitorAttributeResponseSiteMonitors(TeaModel):
    def __init__(self, task_type=None, address=None, task_state=None, task_name=None, interval=None, task_id=None, isp_cities=None, option_json=None):
        self.task_type = task_type
        self.address = address
        self.task_state = task_state
        self.task_name = task_name
        self.interval = interval
        self.task_id = task_id
        self.isp_cities = isp_cities
        self.option_json = option_json

    def validate(self):
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.address, 'address')
        self.validate_required(self.task_state, 'task_state')
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.interval, 'interval')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.isp_cities, 'isp_cities')
        if self.isp_cities:
            self.isp_cities.validate()
        self.validate_required(self.option_json, 'option_json')
        if self.option_json:
            self.option_json.validate()

    def to_map(self):
        result = {}
        result['TaskType'] = self.task_type
        result['Address'] = self.address
        result['TaskState'] = self.task_state
        result['TaskName'] = self.task_name
        result['Interval'] = self.interval
        result['TaskId'] = self.task_id
        if self.isp_cities is not None:
            result['IspCities'] = self.isp_cities.to_map()
        else:
            result['IspCities'] = None
        if self.option_json is not None:
            result['OptionJson'] = self.option_json.to_map()
        else:
            result['OptionJson'] = None
        return result

    def from_map(self, map={}):
        self.task_type = map.get('TaskType')
        self.address = map.get('Address')
        self.task_state = map.get('TaskState')
        self.task_name = map.get('TaskName')
        self.interval = map.get('Interval')
        self.task_id = map.get('TaskId')
        if map.get('IspCities') is not None:
            temp_model = DescribeSiteMonitorAttributeResponseSiteMonitorsIspCities()
            self.isp_cities = temp_model.from_map(map['IspCities'])
        else:
            self.isp_cities = None
        if map.get('OptionJson') is not None:
            temp_model = DescribeSiteMonitorAttributeResponseSiteMonitorsOptionJson()
            self.option_json = temp_model.from_map(map['OptionJson'])
        else:
            self.option_json = None
        return self


class DescribeSiteMonitorListRequest(TeaModel):
    def __init__(self, task_id=None, task_type=None, keyword=None, page=None, page_size=None):
        self.task_id = task_id
        self.task_type = task_type
        self.keyword = keyword
        self.page = page
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['TaskType'] = self.task_type
        result['Keyword'] = self.keyword
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.task_type = map.get('TaskType')
        self.keyword = map.get('Keyword')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        return self


class DescribeSiteMonitorListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, page_number=None, page_size=None, total_count=None, site_monitors=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.site_monitors = site_monitors

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.site_monitors, 'site_monitors')
        if self.site_monitors:
            self.site_monitors.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        if self.site_monitors is not None:
            result['SiteMonitors'] = self.site_monitors.to_map()
        else:
            result['SiteMonitors'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        if map.get('SiteMonitors') is not None:
            temp_model = DescribeSiteMonitorListResponseSiteMonitors()
            self.site_monitors = temp_model.from_map(map['SiteMonitors'])
        else:
            self.site_monitors = None
        return self


class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson(TeaModel):
    def __init__(self, dns_type=None, dns_server=None, expect_value=None, http_method=None, response_content=None, match_rule=None, request_content=None, cookie=None, header=None, username=None, password=None, time_out=None, ping_num=None, failure_rate=None, request_format=None, response_format=None, port=None, authentication=None, traceroute=None):
        self.dns_type = dns_type
        self.dns_server = dns_server
        self.expect_value = expect_value
        self.http_method = http_method
        self.response_content = response_content
        self.match_rule = match_rule
        self.request_content = request_content
        self.cookie = cookie
        self.header = header
        self.username = username
        self.password = password
        self.time_out = time_out
        self.ping_num = ping_num
        self.failure_rate = failure_rate
        self.request_format = request_format
        self.response_format = response_format
        self.port = port
        self.authentication = authentication
        self.traceroute = traceroute

    def validate(self):
        self.validate_required(self.dns_type, 'dns_type')
        self.validate_required(self.dns_server, 'dns_server')
        self.validate_required(self.expect_value, 'expect_value')
        self.validate_required(self.http_method, 'http_method')
        self.validate_required(self.response_content, 'response_content')
        self.validate_required(self.match_rule, 'match_rule')
        self.validate_required(self.request_content, 'request_content')
        self.validate_required(self.cookie, 'cookie')
        self.validate_required(self.header, 'header')
        self.validate_required(self.username, 'username')
        self.validate_required(self.password, 'password')
        self.validate_required(self.time_out, 'time_out')
        self.validate_required(self.ping_num, 'ping_num')
        self.validate_required(self.failure_rate, 'failure_rate')
        self.validate_required(self.request_format, 'request_format')
        self.validate_required(self.response_format, 'response_format')
        self.validate_required(self.port, 'port')
        self.validate_required(self.authentication, 'authentication')
        self.validate_required(self.traceroute, 'traceroute')

    def to_map(self):
        result = {}
        result['dns_type'] = self.dns_type
        result['dns_server'] = self.dns_server
        result['expect_value'] = self.expect_value
        result['http_method'] = self.http_method
        result['response_content'] = self.response_content
        result['match_rule'] = self.match_rule
        result['request_content'] = self.request_content
        result['cookie'] = self.cookie
        result['header'] = self.header
        result['username'] = self.username
        result['password'] = self.password
        result['time_out'] = self.time_out
        result['ping_num'] = self.ping_num
        result['failure_rate'] = self.failure_rate
        result['request_format'] = self.request_format
        result['response_format'] = self.response_format
        result['port'] = self.port
        result['authentication'] = self.authentication
        result['traceroute'] = self.traceroute
        return result

    def from_map(self, map={}):
        self.dns_type = map.get('dns_type')
        self.dns_server = map.get('dns_server')
        self.expect_value = map.get('expect_value')
        self.http_method = map.get('http_method')
        self.response_content = map.get('response_content')
        self.match_rule = map.get('match_rule')
        self.request_content = map.get('request_content')
        self.cookie = map.get('cookie')
        self.header = map.get('header')
        self.username = map.get('username')
        self.password = map.get('password')
        self.time_out = map.get('time_out')
        self.ping_num = map.get('ping_num')
        self.failure_rate = map.get('failure_rate')
        self.request_format = map.get('request_format')
        self.response_format = map.get('response_format')
        self.port = map.get('port')
        self.authentication = map.get('authentication')
        self.traceroute = map.get('traceroute')
        return self


class DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor(TeaModel):
    def __init__(self, task_id=None, task_type=None, address=None, task_state=None, create_time=None, task_name=None, interval=None, update_time=None, options_json=None):
        self.task_id = task_id
        self.task_type = task_type
        self.address = address
        self.task_state = task_state
        self.create_time = create_time
        self.task_name = task_name
        self.interval = interval
        self.update_time = update_time
        self.options_json = options_json

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.address, 'address')
        self.validate_required(self.task_state, 'task_state')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.interval, 'interval')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.options_json, 'options_json')
        if self.options_json:
            self.options_json.validate()

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['TaskType'] = self.task_type
        result['Address'] = self.address
        result['TaskState'] = self.task_state
        result['CreateTime'] = self.create_time
        result['TaskName'] = self.task_name
        result['Interval'] = self.interval
        result['UpdateTime'] = self.update_time
        if self.options_json is not None:
            result['OptionsJson'] = self.options_json.to_map()
        else:
            result['OptionsJson'] = None
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.task_type = map.get('TaskType')
        self.address = map.get('Address')
        self.task_state = map.get('TaskState')
        self.create_time = map.get('CreateTime')
        self.task_name = map.get('TaskName')
        self.interval = map.get('Interval')
        self.update_time = map.get('UpdateTime')
        if map.get('OptionsJson') is not None:
            temp_model = DescribeSiteMonitorListResponseSiteMonitorsSiteMonitorOptionsJson()
            self.options_json = temp_model.from_map(map['OptionsJson'])
        else:
            self.options_json = None
        return self


class DescribeSiteMonitorListResponseSiteMonitors(TeaModel):
    def __init__(self, site_monitor=None):
        self.site_monitor = []

    def validate(self):
        self.validate_required(self.site_monitor, 'site_monitor')
        if self.site_monitor:
            for k in self.site_monitor:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SiteMonitor'] = []
        if self.site_monitor is not None:
            for k in self.site_monitor:
                result['SiteMonitor'].append(k.to_map() if k else None)
        else:
            result['SiteMonitor'] = None
        return result

    def from_map(self, map={}):
        self.site_monitor = []
        if map.get('SiteMonitor') is not None:
            for k in map.get('SiteMonitor'):
                temp_model = DescribeSiteMonitorListResponseSiteMonitorsSiteMonitor()
                temp_model = temp_model.from_map(k)
                self.site_monitor.append(temp_model)
        else:
            self.site_monitor = None
        return self


class DeleteSiteMonitorsRequest(TeaModel):
    def __init__(self, task_ids=None, is_delete_alarms=None):
        self.task_ids = task_ids
        self.is_delete_alarms = is_delete_alarms

    def validate(self):
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['TaskIds'] = self.task_ids
        result['IsDeleteAlarms'] = self.is_delete_alarms
        return result

    def from_map(self, map={}):
        self.task_ids = map.get('TaskIds')
        self.is_delete_alarms = map.get('IsDeleteAlarms')
        return self


class DeleteSiteMonitorsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = DeleteSiteMonitorsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DeleteSiteMonitorsResponseData(TeaModel):
    def __init__(self, count=None):
        self.count = count

    def validate(self):
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['count'] = self.count
        return result

    def from_map(self, map={}):
        self.count = map.get('count')
        return self


class DisableSiteMonitorsRequest(TeaModel):
    def __init__(self, task_ids=None):
        self.task_ids = task_ids

    def validate(self):
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['TaskIds'] = self.task_ids
        return result

    def from_map(self, map={}):
        self.task_ids = map.get('TaskIds')
        return self


class DisableSiteMonitorsResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = DisableSiteMonitorsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DisableSiteMonitorsResponseData(TeaModel):
    def __init__(self, count=None):
        self.count = count

    def validate(self):
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['count'] = self.count
        return result

    def from_map(self, map={}):
        self.count = map.get('count')
        return self


class CreateSiteMonitorRequest(TeaModel):
    def __init__(self, address=None, task_type=None, task_name=None, interval=None, isp_cities=None, options_json=None, alert_ids=None):
        self.address = address
        self.task_type = task_type
        self.task_name = task_name
        self.interval = interval
        self.isp_cities = isp_cities
        self.options_json = options_json
        self.alert_ids = alert_ids

    def validate(self):
        self.validate_required(self.address, 'address')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.task_name, 'task_name')

    def to_map(self):
        result = {}
        result['Address'] = self.address
        result['TaskType'] = self.task_type
        result['TaskName'] = self.task_name
        result['Interval'] = self.interval
        result['IspCities'] = self.isp_cities
        result['OptionsJson'] = self.options_json
        result['AlertIds'] = self.alert_ids
        return result

    def from_map(self, map={}):
        self.address = map.get('Address')
        self.task_type = map.get('TaskType')
        self.task_name = map.get('TaskName')
        self.interval = map.get('Interval')
        self.isp_cities = map.get('IspCities')
        self.options_json = map.get('OptionsJson')
        self.alert_ids = map.get('AlertIds')
        return self


class CreateSiteMonitorResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, alert_rule=None, data=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.alert_rule = alert_rule
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.alert_rule, 'alert_rule')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['AlertRule'] = self.alert_rule
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.alert_rule = map.get('AlertRule')
        if map.get('Data') is not None:
            temp_model = CreateSiteMonitorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateSiteMonitorResponseDataAttachAlertResultContact(TeaModel):
    def __init__(self, message=None, request_id=None, code=None, success=None, rule_id=None):
        self.message = message
        self.request_id = request_id
        self.code = code
        self.success = success
        self.rule_id = rule_id

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.rule_id, 'rule_id')

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Success'] = self.success
        result['RuleId'] = self.rule_id
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.rule_id = map.get('RuleId')
        return self


class CreateSiteMonitorResponseDataAttachAlertResult(TeaModel):
    def __init__(self, contact=None):
        self.contact = []

    def validate(self):
        self.validate_required(self.contact, 'contact')
        if self.contact:
            for k in self.contact:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Contact'] = []
        if self.contact is not None:
            for k in self.contact:
                result['Contact'].append(k.to_map() if k else None)
        else:
            result['Contact'] = None
        return result

    def from_map(self, map={}):
        self.contact = []
        if map.get('Contact') is not None:
            for k in map.get('Contact'):
                temp_model = CreateSiteMonitorResponseDataAttachAlertResultContact()
                temp_model = temp_model.from_map(k)
                self.contact.append(temp_model)
        else:
            self.contact = None
        return self


class CreateSiteMonitorResponseData(TeaModel):
    def __init__(self, attach_alert_result=None):
        self.attach_alert_result = attach_alert_result

    def validate(self):
        self.validate_required(self.attach_alert_result, 'attach_alert_result')
        if self.attach_alert_result:
            self.attach_alert_result.validate()

    def to_map(self):
        result = {}
        if self.attach_alert_result is not None:
            result['AttachAlertResult'] = self.attach_alert_result.to_map()
        else:
            result['AttachAlertResult'] = None
        return result

    def from_map(self, map={}):
        if map.get('AttachAlertResult') is not None:
            temp_model = CreateSiteMonitorResponseDataAttachAlertResult()
            self.attach_alert_result = temp_model.from_map(map['AttachAlertResult'])
        else:
            self.attach_alert_result = None
        return self


class DescribeProjectMetaRequest(TeaModel):
    def __init__(self, labels=None, page_number=None, page_size=None):
        self.labels = labels
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Labels'] = self.labels
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.labels = map.get('Labels')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeProjectMetaResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, total=None, page_number=None, page_size=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.total = total
        self.page_number = page_number
        self.page_size = page_size
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['Total'] = self.total
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total = map.get('Total')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('Resources') is not None:
            temp_model = DescribeProjectMetaResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeProjectMetaResponseResourcesResource(TeaModel):
    def __init__(self, namespace=None, description=None, labels=None):
        self.namespace = namespace
        self.description = description
        self.labels = labels

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.description, 'description')
        self.validate_required(self.labels, 'labels')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['Description'] = self.description
        result['Labels'] = self.labels
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.description = map.get('Description')
        self.labels = map.get('Labels')
        return self


class DescribeProjectMetaResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeProjectMetaResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DescribeMetricListRequest(TeaModel):
    def __init__(self, namespace=None, metric_name=None, period=None, start_time=None, end_time=None, dimensions=None, next_token=None, length=None, express=None):
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.start_time = start_time
        self.end_time = end_time
        self.dimensions = dimensions
        self.next_token = next_token
        self.length = length
        self.express = express

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Dimensions'] = self.dimensions
        result['NextToken'] = self.next_token
        result['Length'] = self.length
        result['Express'] = self.express
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dimensions = map.get('Dimensions')
        self.next_token = map.get('NextToken')
        self.length = map.get('Length')
        self.express = map.get('Express')
        return self


class DescribeMetricListResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, next_token=None, datapoints=None, period=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.next_token = next_token
        self.datapoints = datapoints
        self.period = period
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.datapoints, 'datapoints')
        self.validate_required(self.period, 'period')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['Datapoints'] = self.datapoints
        result['Period'] = self.period
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.datapoints = map.get('Datapoints')
        self.period = map.get('Period')
        self.success = map.get('Success')
        return self


class DescribeMetricMetaListRequest(TeaModel):
    def __init__(self, namespace=None, labels=None, metric_name=None, page_number=None, page_size=None):
        self.namespace = namespace
        self.labels = labels
        self.metric_name = metric_name
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['Labels'] = self.labels
        result['MetricName'] = self.metric_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.labels = map.get('Labels')
        self.metric_name = map.get('MetricName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeMetricMetaListResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, total_count=None, resources=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.total_count = total_count
        self.resources = resources

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.resources, 'resources')
        if self.resources:
            self.resources.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['TotalCount'] = self.total_count
        if self.resources is not None:
            result['Resources'] = self.resources.to_map()
        else:
            result['Resources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total_count = map.get('TotalCount')
        if map.get('Resources') is not None:
            temp_model = DescribeMetricMetaListResponseResources()
            self.resources = temp_model.from_map(map['Resources'])
        else:
            self.resources = None
        return self


class DescribeMetricMetaListResponseResourcesResource(TeaModel):
    def __init__(self, namespace=None, metric_name=None, statistics=None, unit=None, description=None, dimensions=None, periods=None, labels=None):
        self.namespace = namespace
        self.metric_name = metric_name
        self.statistics = statistics
        self.unit = unit
        self.description = description
        self.dimensions = dimensions
        self.periods = periods
        self.labels = labels

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.statistics, 'statistics')
        self.validate_required(self.unit, 'unit')
        self.validate_required(self.description, 'description')
        self.validate_required(self.dimensions, 'dimensions')
        self.validate_required(self.periods, 'periods')
        self.validate_required(self.labels, 'labels')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Statistics'] = self.statistics
        result['Unit'] = self.unit
        result['Description'] = self.description
        result['Dimensions'] = self.dimensions
        result['Periods'] = self.periods
        result['Labels'] = self.labels
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.statistics = map.get('Statistics')
        self.unit = map.get('Unit')
        self.description = map.get('Description')
        self.dimensions = map.get('Dimensions')
        self.periods = map.get('Periods')
        self.labels = map.get('Labels')
        return self


class DescribeMetricMetaListResponseResources(TeaModel):
    def __init__(self, resource=None):
        self.resource = []

    def validate(self):
        self.validate_required(self.resource, 'resource')
        if self.resource:
            for k in self.resource:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Resource'] = []
        if self.resource is not None:
            for k in self.resource:
                result['Resource'].append(k.to_map() if k else None)
        else:
            result['Resource'] = None
        return result

    def from_map(self, map={}):
        self.resource = []
        if map.get('Resource') is not None:
            for k in map.get('Resource'):
                temp_model = DescribeMetricMetaListResponseResourcesResource()
                temp_model = temp_model.from_map(k)
                self.resource.append(temp_model)
        else:
            self.resource = None
        return self


class DescribeMetricTopRequest(TeaModel):
    def __init__(self, period=None, namespace=None, metric_name=None, start_time=None, end_time=None, dimensions=None, orderby=None, order_desc=None, length=None, express=None):
        self.period = period
        self.namespace = namespace
        self.metric_name = metric_name
        self.start_time = start_time
        self.end_time = end_time
        self.dimensions = dimensions
        self.orderby = orderby
        self.order_desc = order_desc
        self.length = length
        self.express = express

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.orderby, 'orderby')

    def to_map(self):
        result = {}
        result['Period'] = self.period
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Dimensions'] = self.dimensions
        result['Orderby'] = self.orderby
        result['OrderDesc'] = self.order_desc
        result['Length'] = self.length
        result['Express'] = self.express
        return result

    def from_map(self, map={}):
        self.period = map.get('Period')
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dimensions = map.get('Dimensions')
        self.orderby = map.get('Orderby')
        self.order_desc = map.get('OrderDesc')
        self.length = map.get('Length')
        self.express = map.get('Express')
        return self


class DescribeMetricTopResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, datapoints=None, period=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.datapoints = datapoints
        self.period = period

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.datapoints, 'datapoints')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Datapoints'] = self.datapoints
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.datapoints = map.get('Datapoints')
        self.period = map.get('Period')
        return self


class DescribeMetricDataRequest(TeaModel):
    def __init__(self, namespace=None, metric_name=None, period=None, start_time=None, end_time=None, dimensions=None, express=None, length=None):
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.start_time = start_time
        self.end_time = end_time
        self.dimensions = dimensions
        self.express = express
        self.length = length

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Dimensions'] = self.dimensions
        result['Express'] = self.express
        result['Length'] = self.length
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dimensions = map.get('Dimensions')
        self.express = map.get('Express')
        self.length = map.get('Length')
        return self


class DescribeMetricDataResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, datapoints=None, period=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.datapoints = datapoints
        self.period = period

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.datapoints, 'datapoints')
        self.validate_required(self.period, 'period')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Datapoints'] = self.datapoints
        result['Period'] = self.period
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.datapoints = map.get('Datapoints')
        self.period = map.get('Period')
        return self


class DescribeMetricLastRequest(TeaModel):
    def __init__(self, namespace=None, metric_name=None, period=None, start_time=None, end_time=None, dimensions=None, next_token=None, length=None, express=None):
        self.namespace = namespace
        self.metric_name = metric_name
        self.period = period
        self.start_time = start_time
        self.end_time = end_time
        self.dimensions = dimensions
        self.next_token = next_token
        self.length = length
        self.express = express

    def validate(self):
        self.validate_required(self.namespace, 'namespace')
        self.validate_required(self.metric_name, 'metric_name')

    def to_map(self):
        result = {}
        result['Namespace'] = self.namespace
        result['MetricName'] = self.metric_name
        result['Period'] = self.period
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['Dimensions'] = self.dimensions
        result['NextToken'] = self.next_token
        result['Length'] = self.length
        result['Express'] = self.express
        return result

    def from_map(self, map={}):
        self.namespace = map.get('Namespace')
        self.metric_name = map.get('MetricName')
        self.period = map.get('Period')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.dimensions = map.get('Dimensions')
        self.next_token = map.get('NextToken')
        self.length = map.get('Length')
        self.express = map.get('Express')
        return self


class DescribeMetricLastResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, next_token=None, datapoints=None, period=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.next_token = next_token
        self.datapoints = datapoints
        self.period = period
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.datapoints, 'datapoints')
        self.validate_required(self.period, 'period')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['Datapoints'] = self.datapoints
        result['Period'] = self.period
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.datapoints = map.get('Datapoints')
        self.period = map.get('Period')
        self.success = map.get('Success')
        return self


class EnableHostAvailabilityRequest(TeaModel):
    def __init__(self, id=None):
        self.id = []

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = []
        if self.id is not None:
            for k in self.id:
                result['Id'].append(k)
        else:
            result['Id'] = None
        return result

    def from_map(self, map={}):
        self.id = []
        if map.get('Id') is not None:
            for k in map.get('Id'):
                self.id.append(k)
        else:
            self.id = None
        return self


class EnableHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class ModifyHostAvailabilityRequest(TeaModel):
    def __init__(self, group_id=None, id=None, task_name=None, task_scope=None, task_option=None, alert_config=None, alert_config_escalation_list=None, instance_list=None):
        self.group_id = group_id
        self.id = id
        self.task_name = task_name
        self.task_scope = task_scope
        self.task_option = task_option
        self.alert_config = alert_config
        self.alert_config_escalation_list = []
        self.instance_list = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.id, 'id')
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.task_option, 'task_option')
        if self.task_option:
            self.task_option.validate()
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            self.alert_config.validate()
        self.validate_required(self.alert_config_escalation_list, 'alert_config_escalation_list')
        if self.alert_config_escalation_list:
            for k in self.alert_config_escalation_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['Id'] = self.id
        result['TaskName'] = self.task_name
        result['TaskScope'] = self.task_scope
        if self.task_option is not None:
            result['TaskOption'] = self.task_option.to_map()
        else:
            result['TaskOption'] = None
        if self.alert_config is not None:
            result['AlertConfig'] = self.alert_config.to_map()
        else:
            result['AlertConfig'] = None
        result['AlertConfigEscalationList'] = []
        if self.alert_config_escalation_list is not None:
            for k in self.alert_config_escalation_list:
                result['AlertConfigEscalationList'].append(k.to_map() if k else None)
        else:
            result['AlertConfigEscalationList'] = None
        result['InstanceList'] = []
        if self.instance_list is not None:
            for k in self.instance_list:
                result['InstanceList'].append(k)
        else:
            result['InstanceList'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.id = map.get('Id')
        self.task_name = map.get('TaskName')
        self.task_scope = map.get('TaskScope')
        if map.get('TaskOption') is not None:
            temp_model = ModifyHostAvailabilityRequestTaskOption()
            self.task_option = temp_model.from_map(map['TaskOption'])
        else:
            self.task_option = None
        if map.get('AlertConfig') is not None:
            temp_model = ModifyHostAvailabilityRequestAlertConfig()
            self.alert_config = temp_model.from_map(map['AlertConfig'])
        else:
            self.alert_config = None
        self.alert_config_escalation_list = []
        if map.get('AlertConfigEscalationList') is not None:
            for k in map.get('AlertConfigEscalationList'):
                temp_model = ModifyHostAvailabilityRequestAlertConfigEscalationList()
                temp_model = temp_model.from_map(k)
                self.alert_config_escalation_list.append(temp_model)
        else:
            self.alert_config_escalation_list = None
        self.instance_list = []
        if map.get('InstanceList') is not None:
            for k in map.get('InstanceList'):
                self.instance_list.append(k)
        else:
            self.instance_list = None
        return self


class ModifyHostAvailabilityRequestTaskOption(TeaModel):
    def __init__(self, http_uri=None, telnet_or_ping_host=None, http_response_charset=None, http_response_match_content=None, http_method=None, http_negative=None):
        self.http_uri = http_uri
        self.telnet_or_ping_host = telnet_or_ping_host
        self.http_response_charset = http_response_charset
        self.http_response_match_content = http_response_match_content
        self.http_method = http_method
        self.http_negative = http_negative

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['HttpURI'] = self.http_uri
        result['TelnetOrPingHost'] = self.telnet_or_ping_host
        result['HttpResponseCharset'] = self.http_response_charset
        result['HttpResponseMatchContent'] = self.http_response_match_content
        result['HttpMethod'] = self.http_method
        result['HttpNegative'] = self.http_negative
        return result

    def from_map(self, map={}):
        self.http_uri = map.get('HttpURI')
        self.telnet_or_ping_host = map.get('TelnetOrPingHost')
        self.http_response_charset = map.get('HttpResponseCharset')
        self.http_response_match_content = map.get('HttpResponseMatchContent')
        self.http_method = map.get('HttpMethod')
        self.http_negative = map.get('HttpNegative')
        return self


class ModifyHostAvailabilityRequestAlertConfig(TeaModel):
    def __init__(self, notify_type=None, start_time=None, end_time=None, silence_time=None, web_hook=None):
        self.notify_type = notify_type
        self.start_time = start_time
        self.end_time = end_time
        self.silence_time = silence_time
        self.web_hook = web_hook

    def validate(self):
        self.validate_required(self.notify_type, 'notify_type')

    def to_map(self):
        result = {}
        result['NotifyType'] = self.notify_type
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['SilenceTime'] = self.silence_time
        result['WebHook'] = self.web_hook
        return result

    def from_map(self, map={}):
        self.notify_type = map.get('NotifyType')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.silence_time = map.get('SilenceTime')
        self.web_hook = map.get('WebHook')
        return self


class ModifyHostAvailabilityRequestAlertConfigEscalationList(TeaModel):
    def __init__(self, metric_name=None, aggregate=None, times=None, operator=None, value=None):
        self.metric_name = metric_name
        self.aggregate = aggregate
        self.times = times
        self.operator = operator
        self.value = value

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.aggregate, 'aggregate')
        self.validate_required(self.times, 'times')
        self.validate_required(self.operator, 'operator')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['Aggregate'] = self.aggregate
        result['Times'] = self.times
        result['Operator'] = self.operator
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.aggregate = map.get('Aggregate')
        self.times = map.get('Times')
        self.operator = map.get('Operator')
        self.value = map.get('Value')
        return self


class ModifyHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DisableHostAvailabilityRequest(TeaModel):
    def __init__(self, id=None):
        self.id = []

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = []
        if self.id is not None:
            for k in self.id:
                result['Id'].append(k)
        else:
            result['Id'] = None
        return result

    def from_map(self, map={}):
        self.id = []
        if map.get('Id') is not None:
            for k in map.get('Id'):
                self.id.append(k)
        else:
            self.id = None
        return self


class DisableHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeUnhealthyHostAvailabilityRequest(TeaModel):
    def __init__(self, id=None):
        self.id = []

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = []
        if self.id is not None:
            for k in self.id:
                result['Id'].append(k)
        else:
            result['Id'] = None
        return result

    def from_map(self, map={}):
        self.id = []
        if map.get('Id') is not None:
            for k in map.get('Id'):
                self.id.append(k)
        else:
            self.id = None
        return self


class DescribeUnhealthyHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, unhealthy_list=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.unhealthy_list = unhealthy_list

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.unhealthy_list, 'unhealthy_list')
        if self.unhealthy_list:
            self.unhealthy_list.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        if self.unhealthy_list is not None:
            result['UnhealthyList'] = self.unhealthy_list.to_map()
        else:
            result['UnhealthyList'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        if map.get('UnhealthyList') is not None:
            temp_model = DescribeUnhealthyHostAvailabilityResponseUnhealthyList()
            self.unhealthy_list = temp_model.from_map(map['UnhealthyList'])
        else:
            self.unhealthy_list = None
        return self


class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList(TeaModel):
    def __init__(self, string=None):
        self.string = []

    def validate(self):
        self.validate_required(self.string, 'string')

    def to_map(self):
        result = {}
        result['String'] = []
        if self.string is not None:
            for k in self.string:
                result['String'].append(k)
        else:
            result['String'] = None
        return result

    def from_map(self, map={}):
        self.string = []
        if map.get('String') is not None:
            for k in map.get('String'):
                self.string.append(k)
        else:
            self.string = None
        return self


class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance(TeaModel):
    def __init__(self, id=None, instance_list=None):
        self.id = id
        self.instance_list = instance_list

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.instance_list, 'instance_list')
        if self.instance_list:
            self.instance_list.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        if self.instance_list is not None:
            result['InstanceList'] = self.instance_list.to_map()
        else:
            result['InstanceList'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        if map.get('InstanceList') is not None:
            temp_model = DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList()
            self.instance_list = temp_model.from_map(map['InstanceList'])
        else:
            self.instance_list = None
        return self


class DescribeUnhealthyHostAvailabilityResponseUnhealthyList(TeaModel):
    def __init__(self, node_task_instance=None):
        self.node_task_instance = []

    def validate(self):
        self.validate_required(self.node_task_instance, 'node_task_instance')
        if self.node_task_instance:
            for k in self.node_task_instance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NodeTaskInstance'] = []
        if self.node_task_instance is not None:
            for k in self.node_task_instance:
                result['NodeTaskInstance'].append(k.to_map() if k else None)
        else:
            result['NodeTaskInstance'] = None
        return result

    def from_map(self, map={}):
        self.node_task_instance = []
        if map.get('NodeTaskInstance') is not None:
            for k in map.get('NodeTaskInstance'):
                temp_model = DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance()
                temp_model = temp_model.from_map(k)
                self.node_task_instance.append(temp_model)
        else:
            self.node_task_instance = None
        return self


class CreateHostAvailabilityRequest(TeaModel):
    def __init__(self, group_id=None, task_name=None, task_scope=None, task_type=None, task_option=None, alert_config=None, alert_config_escalation_list=None, instance_list=None):
        self.group_id = group_id
        self.task_name = task_name
        self.task_scope = task_scope
        self.task_type = task_type
        self.task_option = task_option
        self.alert_config = alert_config
        self.alert_config_escalation_list = []
        self.instance_list = []

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.task_option, 'task_option')
        if self.task_option:
            self.task_option.validate()
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            self.alert_config.validate()
        self.validate_required(self.alert_config_escalation_list, 'alert_config_escalation_list')
        if self.alert_config_escalation_list:
            for k in self.alert_config_escalation_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['TaskName'] = self.task_name
        result['TaskScope'] = self.task_scope
        result['TaskType'] = self.task_type
        if self.task_option is not None:
            result['TaskOption'] = self.task_option.to_map()
        else:
            result['TaskOption'] = None
        if self.alert_config is not None:
            result['AlertConfig'] = self.alert_config.to_map()
        else:
            result['AlertConfig'] = None
        result['AlertConfigEscalationList'] = []
        if self.alert_config_escalation_list is not None:
            for k in self.alert_config_escalation_list:
                result['AlertConfigEscalationList'].append(k.to_map() if k else None)
        else:
            result['AlertConfigEscalationList'] = None
        result['InstanceList'] = []
        if self.instance_list is not None:
            for k in self.instance_list:
                result['InstanceList'].append(k)
        else:
            result['InstanceList'] = None
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.task_name = map.get('TaskName')
        self.task_scope = map.get('TaskScope')
        self.task_type = map.get('TaskType')
        if map.get('TaskOption') is not None:
            temp_model = CreateHostAvailabilityRequestTaskOption()
            self.task_option = temp_model.from_map(map['TaskOption'])
        else:
            self.task_option = None
        if map.get('AlertConfig') is not None:
            temp_model = CreateHostAvailabilityRequestAlertConfig()
            self.alert_config = temp_model.from_map(map['AlertConfig'])
        else:
            self.alert_config = None
        self.alert_config_escalation_list = []
        if map.get('AlertConfigEscalationList') is not None:
            for k in map.get('AlertConfigEscalationList'):
                temp_model = CreateHostAvailabilityRequestAlertConfigEscalationList()
                temp_model = temp_model.from_map(k)
                self.alert_config_escalation_list.append(temp_model)
        else:
            self.alert_config_escalation_list = None
        self.instance_list = []
        if map.get('InstanceList') is not None:
            for k in map.get('InstanceList'):
                self.instance_list.append(k)
        else:
            self.instance_list = None
        return self


class CreateHostAvailabilityRequestTaskOption(TeaModel):
    def __init__(self, http_uri=None, telnet_or_ping_host=None, http_response_charset=None, http_response_match_content=None, http_method=None, http_negative=None):
        self.http_uri = http_uri
        self.telnet_or_ping_host = telnet_or_ping_host
        self.http_response_charset = http_response_charset
        self.http_response_match_content = http_response_match_content
        self.http_method = http_method
        self.http_negative = http_negative

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['HttpURI'] = self.http_uri
        result['TelnetOrPingHost'] = self.telnet_or_ping_host
        result['HttpResponseCharset'] = self.http_response_charset
        result['HttpResponseMatchContent'] = self.http_response_match_content
        result['HttpMethod'] = self.http_method
        result['HttpNegative'] = self.http_negative
        return result

    def from_map(self, map={}):
        self.http_uri = map.get('HttpURI')
        self.telnet_or_ping_host = map.get('TelnetOrPingHost')
        self.http_response_charset = map.get('HttpResponseCharset')
        self.http_response_match_content = map.get('HttpResponseMatchContent')
        self.http_method = map.get('HttpMethod')
        self.http_negative = map.get('HttpNegative')
        return self


class CreateHostAvailabilityRequestAlertConfig(TeaModel):
    def __init__(self, notify_type=None, start_time=None, end_time=None, silence_time=None, web_hook=None):
        self.notify_type = notify_type
        self.start_time = start_time
        self.end_time = end_time
        self.silence_time = silence_time
        self.web_hook = web_hook

    def validate(self):
        self.validate_required(self.notify_type, 'notify_type')

    def to_map(self):
        result = {}
        result['NotifyType'] = self.notify_type
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['SilenceTime'] = self.silence_time
        result['WebHook'] = self.web_hook
        return result

    def from_map(self, map={}):
        self.notify_type = map.get('NotifyType')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.silence_time = map.get('SilenceTime')
        self.web_hook = map.get('WebHook')
        return self


class CreateHostAvailabilityRequestAlertConfigEscalationList(TeaModel):
    def __init__(self, metric_name=None, aggregate=None, times=None, operator=None, value=None):
        self.metric_name = metric_name
        self.aggregate = aggregate
        self.times = times
        self.operator = operator
        self.value = value

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.aggregate, 'aggregate')
        self.validate_required(self.times, 'times')
        self.validate_required(self.operator, 'operator')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['Aggregate'] = self.aggregate
        result['Times'] = self.times
        result['Operator'] = self.operator
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.aggregate = map.get('Aggregate')
        self.times = map.get('Times')
        self.operator = map.get('Operator')
        self.value = map.get('Value')
        return self


class CreateHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, task_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class DescribeHostAvailabilityListRequest(TeaModel):
    def __init__(self, id=None, task_name=None, page_number=None, page_size=None, group_id=None):
        self.id = id
        self.task_name = task_name
        self.page_number = page_number
        self.page_size = page_size
        self.group_id = group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['TaskName'] = self.task_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.task_name = map.get('TaskName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.group_id = map.get('GroupId')
        return self


class DescribeHostAvailabilityListResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, total=None, task_list=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.total = total
        self.task_list = task_list

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total, 'total')
        self.validate_required(self.task_list, 'task_list')
        if self.task_list:
            self.task_list.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Total'] = self.total
        if self.task_list is not None:
            result['TaskList'] = self.task_list.to_map()
        else:
            result['TaskList'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.total = map.get('Total')
        if map.get('TaskList') is not None:
            temp_model = DescribeHostAvailabilityListResponseTaskList()
            self.task_list = temp_model.from_map(map['TaskList'])
        else:
            self.task_list = None
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption(TeaModel):
    def __init__(self, http_uri=None, telnet_or_ping_host=None, http_response_charset=None, http_keyword=None, http_method=None, http_negative=None):
        self.http_uri = http_uri
        self.telnet_or_ping_host = telnet_or_ping_host
        self.http_response_charset = http_response_charset
        self.http_keyword = http_keyword
        self.http_method = http_method
        self.http_negative = http_negative

    def validate(self):
        self.validate_required(self.http_uri, 'http_uri')
        self.validate_required(self.telnet_or_ping_host, 'telnet_or_ping_host')
        self.validate_required(self.http_response_charset, 'http_response_charset')
        self.validate_required(self.http_keyword, 'http_keyword')
        self.validate_required(self.http_method, 'http_method')
        self.validate_required(self.http_negative, 'http_negative')

    def to_map(self):
        result = {}
        result['HttpURI'] = self.http_uri
        result['TelnetOrPingHost'] = self.telnet_or_ping_host
        result['HttpResponseCharset'] = self.http_response_charset
        result['HttpKeyword'] = self.http_keyword
        result['HttpMethod'] = self.http_method
        result['HttpNegative'] = self.http_negative
        return result

    def from_map(self, map={}):
        self.http_uri = map.get('HttpURI')
        self.telnet_or_ping_host = map.get('TelnetOrPingHost')
        self.http_response_charset = map.get('HttpResponseCharset')
        self.http_keyword = map.get('HttpKeyword')
        self.http_method = map.get('HttpMethod')
        self.http_negative = map.get('HttpNegative')
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList(TeaModel):
    def __init__(self, metric_name=None, aggregate=None, operator=None, value=None, times=None):
        self.metric_name = metric_name
        self.aggregate = aggregate
        self.operator = operator
        self.value = value
        self.times = times

    def validate(self):
        self.validate_required(self.metric_name, 'metric_name')
        self.validate_required(self.aggregate, 'aggregate')
        self.validate_required(self.operator, 'operator')
        self.validate_required(self.value, 'value')
        self.validate_required(self.times, 'times')

    def to_map(self):
        result = {}
        result['MetricName'] = self.metric_name
        result['Aggregate'] = self.aggregate
        result['Operator'] = self.operator
        result['Value'] = self.value
        result['Times'] = self.times
        return result

    def from_map(self, map={}):
        self.metric_name = map.get('MetricName')
        self.aggregate = map.get('Aggregate')
        self.operator = map.get('Operator')
        self.value = map.get('Value')
        self.times = map.get('Times')
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList(TeaModel):
    def __init__(self, escalation_list=None):
        self.escalation_list = []

    def validate(self):
        self.validate_required(self.escalation_list, 'escalation_list')
        if self.escalation_list:
            for k in self.escalation_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['escalationList'] = []
        if self.escalation_list is not None:
            for k in self.escalation_list:
                result['escalationList'].append(k.to_map() if k else None)
        else:
            result['escalationList'] = None
        return result

    def from_map(self, map={}):
        self.escalation_list = []
        if map.get('escalationList') is not None:
            for k in map.get('escalationList'):
                temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationListEscalationList()
                temp_model = temp_model.from_map(k)
                self.escalation_list.append(temp_model)
        else:
            self.escalation_list = None
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig(TeaModel):
    def __init__(self, notify_type=None, start_time=None, end_time=None, silence_time=None, web_hook=None, escalation_list=None):
        self.notify_type = notify_type
        self.start_time = start_time
        self.end_time = end_time
        self.silence_time = silence_time
        self.web_hook = web_hook
        self.escalation_list = escalation_list

    def validate(self):
        self.validate_required(self.notify_type, 'notify_type')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.silence_time, 'silence_time')
        self.validate_required(self.web_hook, 'web_hook')
        self.validate_required(self.escalation_list, 'escalation_list')
        if self.escalation_list:
            self.escalation_list.validate()

    def to_map(self):
        result = {}
        result['NotifyType'] = self.notify_type
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['SilenceTime'] = self.silence_time
        result['WebHook'] = self.web_hook
        if self.escalation_list is not None:
            result['EscalationList'] = self.escalation_list.to_map()
        else:
            result['EscalationList'] = None
        return result

    def from_map(self, map={}):
        self.notify_type = map.get('NotifyType')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.silence_time = map.get('SilenceTime')
        self.web_hook = map.get('WebHook')
        if map.get('EscalationList') is not None:
            temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfigEscalationList()
            self.escalation_list = temp_model.from_map(map['EscalationList'])
        else:
            self.escalation_list = None
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances(TeaModel):
    def __init__(self, instance=None):
        self.instance = []

    def validate(self):
        self.validate_required(self.instance, 'instance')

    def to_map(self):
        result = {}
        result['Instance'] = []
        if self.instance is not None:
            for k in self.instance:
                result['Instance'].append(k)
        else:
            result['Instance'] = None
        return result

    def from_map(self, map={}):
        self.instance = []
        if map.get('Instance') is not None:
            for k in map.get('Instance'):
                self.instance.append(k)
        else:
            self.instance = None
        return self


class DescribeHostAvailabilityListResponseTaskListNodeTaskConfig(TeaModel):
    def __init__(self, id=None, task_name=None, task_type=None, task_scope=None, disabled=None, group_id=None, group_name=None, task_option=None, alert_config=None, instances=None):
        self.id = id
        self.task_name = task_name
        self.task_type = task_type
        self.task_scope = task_scope
        self.disabled = disabled
        self.group_id = group_id
        self.group_name = group_name
        self.task_option = task_option
        self.alert_config = alert_config
        self.instances = instances

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.task_type, 'task_type')
        self.validate_required(self.task_scope, 'task_scope')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.task_option, 'task_option')
        if self.task_option:
            self.task_option.validate()
        self.validate_required(self.alert_config, 'alert_config')
        if self.alert_config:
            self.alert_config.validate()
        self.validate_required(self.instances, 'instances')
        if self.instances:
            self.instances.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['TaskName'] = self.task_name
        result['TaskType'] = self.task_type
        result['TaskScope'] = self.task_scope
        result['Disabled'] = self.disabled
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        if self.task_option is not None:
            result['TaskOption'] = self.task_option.to_map()
        else:
            result['TaskOption'] = None
        if self.alert_config is not None:
            result['AlertConfig'] = self.alert_config.to_map()
        else:
            result['AlertConfig'] = None
        if self.instances is not None:
            result['Instances'] = self.instances.to_map()
        else:
            result['Instances'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.task_name = map.get('TaskName')
        self.task_type = map.get('TaskType')
        self.task_scope = map.get('TaskScope')
        self.disabled = map.get('Disabled')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        if map.get('TaskOption') is not None:
            temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfigTaskOption()
            self.task_option = temp_model.from_map(map['TaskOption'])
        else:
            self.task_option = None
        if map.get('AlertConfig') is not None:
            temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfigAlertConfig()
            self.alert_config = temp_model.from_map(map['AlertConfig'])
        else:
            self.alert_config = None
        if map.get('Instances') is not None:
            temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfigInstances()
            self.instances = temp_model.from_map(map['Instances'])
        else:
            self.instances = None
        return self


class DescribeHostAvailabilityListResponseTaskList(TeaModel):
    def __init__(self, node_task_config=None):
        self.node_task_config = []

    def validate(self):
        self.validate_required(self.node_task_config, 'node_task_config')
        if self.node_task_config:
            for k in self.node_task_config:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['NodeTaskConfig'] = []
        if self.node_task_config is not None:
            for k in self.node_task_config:
                result['NodeTaskConfig'].append(k.to_map() if k else None)
        else:
            result['NodeTaskConfig'] = None
        return result

    def from_map(self, map={}):
        self.node_task_config = []
        if map.get('NodeTaskConfig') is not None:
            for k in map.get('NodeTaskConfig'):
                temp_model = DescribeHostAvailabilityListResponseTaskListNodeTaskConfig()
                temp_model = temp_model.from_map(k)
                self.node_task_config.append(temp_model)
        else:
            self.node_task_config = None
        return self


class DeleteHostAvailabilityRequest(TeaModel):
    def __init__(self, id=None):
        self.id = []

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = []
        if self.id is not None:
            for k in self.id:
                result['Id'].append(k)
        else:
            result['Id'] = None
        return result

    def from_map(self, map={}):
        self.id = []
        if map.get('Id') is not None:
            for k in map.get('Id'):
                self.id.append(k)
        else:
            self.id = None
        return self


class DeleteHostAvailabilityResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self


class DescribeMonitoringConfigRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeMonitoringConfigResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None, auto_install=None, enable_install_agent_new_ecs=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id
        self.auto_install = auto_install
        self.enable_install_agent_new_ecs = enable_install_agent_new_ecs

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.auto_install, 'auto_install')
        self.validate_required(self.enable_install_agent_new_ecs, 'enable_install_agent_new_ecs')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['AutoInstall'] = self.auto_install
        result['EnableInstallAgentNewECS'] = self.enable_install_agent_new_ecs
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.auto_install = map.get('AutoInstall')
        self.enable_install_agent_new_ecs = map.get('EnableInstallAgentNewECS')
        return self


class PutMonitoringConfigRequest(TeaModel):
    def __init__(self, auto_install=None, enable_install_agent_new_ecs=None):
        self.auto_install = auto_install
        self.enable_install_agent_new_ecs = enable_install_agent_new_ecs

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AutoInstall'] = self.auto_install
        result['EnableInstallAgentNewECS'] = self.enable_install_agent_new_ecs
        return result

    def from_map(self, map={}):
        self.auto_install = map.get('AutoInstall')
        self.enable_install_agent_new_ecs = map.get('EnableInstallAgentNewECS')
        return self


class PutMonitoringConfigResponse(TeaModel):
    def __init__(self, code=None, message=None, success=None, request_id=None):
        self.code = code
        self.message = message
        self.success = success
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        return self

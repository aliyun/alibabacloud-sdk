# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeConfigRequest(TeaModel):
    def __init__(self, route_request_body=None):
        self.route_request_body = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RouteRequestBody'] = self.route_request_body
        return result

    def from_map(self, map={}):
        self.route_request_body = map.get('RouteRequestBody')
        return self


class DescribeConfigResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, route_response_body=None, success=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.route_response_body = route_response_body
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.route_response_body, 'route_response_body')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['RouteResponseBody'] = self.route_response_body
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.route_response_body = map.get('RouteResponseBody')
        self.success = map.get('Success')
        return self


class SubmitTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class SubmitTestingResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, http_status_code=None, submit_result=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.submit_result = submit_result

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.submit_result, 'submit_result')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['SubmitResult'] = self.submit_result
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.submit_result = map.get('SubmitResult')
        return self


class SubmitProgressRequest(TeaModel):
    def __init__(self, scene_id=None, task_id=None):
        self.scene_id = scene_id
        self.task_id = task_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.task_id = map.get('TaskId')
        return self


class SubmitProgressResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, http_status_code=None, submit_result=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.submit_result = submit_result

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.submit_result, 'submit_result')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['SubmitResult'] = self.submit_result
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.submit_result = map.get('SubmitResult')
        return self


class ListSlaWarningsRequest(TeaModel):
    def __init__(self, plan_id=None, page_number=None, page_size=None):
        self.plan_id = plan_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListSlaWarningsResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, warnings=None, page_number=None, page_size=None, total_count=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.warnings = warnings
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.warnings, 'warnings')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['Warnings'] = self.warnings
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.warnings = map.get('Warnings')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        return self


class ListSlaSnapshotSummaryRequest(TeaModel):
    def __init__(self, plan_id=None):
        self.plan_id = plan_id

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        return self


class ListSlaSnapshotSummaryResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, sla_summary_vo=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.sla_summary_vo = sla_summary_vo

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.sla_summary_vo, 'sla_summary_vo')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['SlaSummaryVO'] = self.sla_summary_vo
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.sla_summary_vo = map.get('SlaSummaryVO')
        return self


class ExecuteSceneFunctionRequest(TeaModel):
    def __init__(self, expression=None):
        self.expression = expression

    def validate(self):
        self.validate_required(self.expression, 'expression')

    def to_map(self):
        result = {}
        result['Expression'] = self.expression
        return result

    def from_map(self, map={}):
        self.expression = map.get('Expression')
        return self


class ExecuteSceneFunctionResponse(TeaModel):
    def __init__(self, message=None, code=None, success=None, request_id=None, http_status_code=None, result=None):
        self.message = message
        self.code = code
        self.success = success
        self.request_id = request_id
        self.http_status_code = http_status_code
        self.result = result

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.result, 'result')

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['HttpStatusCode'] = self.http_status_code
        result['Result'] = self.result
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.http_status_code = map.get('HttpStatusCode')
        self.result = map.get('Result')
        return self


class DescribeIntranetResourceRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeIntranetResourceResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, intranet_resource=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.intranet_resource = intranet_resource

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.intranet_resource, 'intranet_resource')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['IntranetResource'] = self.intranet_resource
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.intranet_resource = map.get('IntranetResource')
        return self


class UploadFileFromOSSRequest(TeaModel):
    def __init__(self, oss_url=None):
        self.oss_url = oss_url

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['OssUrl'] = self.oss_url
        return result

    def from_map(self, map={}):
        self.oss_url = map.get('OssUrl')
        return self


class UploadFileFromOSSResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, pts_data_file=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.pts_data_file = pts_data_file

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.pts_data_file, 'pts_data_file')
        if self.pts_data_file:
            self.pts_data_file.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        if self.pts_data_file is not None:
            result['PtsDataFile'] = self.pts_data_file.to_map()
        else:
            result['PtsDataFile'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        if map.get('PtsDataFile') is not None:
            temp_model = UploadFileFromOSSResponsePtsDataFile()
            self.pts_data_file = temp_model.from_map(map['PtsDataFile'])
        else:
            self.pts_data_file = None
        return self


class UploadFileFromOSSResponsePtsDataFile(TeaModel):
    def __init__(self, file_key=None, file_name=None, oss_url=None, line_count=None, skip_first_line=None, delimiter=None, length=None, columns=None, use_once=None, gmt_create_ts=None):
        self.file_key = file_key
        self.file_name = file_name
        self.oss_url = {}
        self.line_count = line_count
        self.skip_first_line = skip_first_line
        self.delimiter = delimiter
        self.length = length
        self.columns = columns
        self.use_once = use_once
        self.gmt_create_ts = gmt_create_ts

    def validate(self):
        self.validate_required(self.file_key, 'file_key')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.oss_url, 'oss_url')
        self.validate_required(self.line_count, 'line_count')
        self.validate_required(self.skip_first_line, 'skip_first_line')
        self.validate_required(self.delimiter, 'delimiter')
        self.validate_required(self.length, 'length')
        self.validate_required(self.columns, 'columns')
        self.validate_required(self.use_once, 'use_once')
        self.validate_required(self.gmt_create_ts, 'gmt_create_ts')

    def to_map(self):
        result = {}
        result['FileKey'] = self.file_key
        result['FileName'] = self.file_name
        result['OssUrl'] = self.oss_url
        result['LineCount'] = self.line_count
        result['SkipFirstLine'] = self.skip_first_line
        result['Delimiter'] = self.delimiter
        result['Length'] = self.length
        result['Columns'] = self.columns
        result['UseOnce'] = self.use_once
        result['GmtCreateTS'] = self.gmt_create_ts
        return result

    def from_map(self, map={}):
        self.file_key = map.get('FileKey')
        self.file_name = map.get('FileName')
        self.oss_url = map.get('OssUrl')
        self.line_count = map.get('LineCount')
        self.skip_first_line = map.get('SkipFirstLine')
        self.delimiter = map.get('Delimiter')
        self.length = map.get('Length')
        self.columns = map.get('Columns')
        self.use_once = map.get('UseOnce')
        self.gmt_create_ts = map.get('GmtCreateTS')
        return self
class ListSlaSnapshotRealRequest(TeaModel):
    def __init__(self, plan_id=None):
        self.plan_id = plan_id

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        return self


class ListSlaSnapshotRealResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, sla_summary_vo=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.sla_summary_vo = sla_summary_vo

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.sla_summary_vo, 'sla_summary_vo')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['SlaSummaryVO'] = self.sla_summary_vo
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.sla_summary_vo = map.get('SlaSummaryVO')
        return self


class StopSceneTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StopSceneTestingResponse(TeaModel):
    def __init__(self, message=None, code=None, success=None, request_id=None, http_status_code=None, is_success=None):
        self.message = message
        self.code = code
        self.success = success
        self.request_id = request_id
        self.http_status_code = http_status_code
        self.is_success = is_success

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.is_success, 'is_success')

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['HttpStatusCode'] = self.http_status_code
        result['IsSuccess'] = self.is_success
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.http_status_code = map.get('HttpStatusCode')
        self.is_success = map.get('IsSuccess')
        return self


class DescribeSlaTemplateRequest(TeaModel):
    def __init__(self, type=None, page_size=None, page_number=None):
        self.type = type
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeSlaTemplateResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, page_number=None, page_size=None, total_count=None, templates=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.templates = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.templates, 'templates')
        if self.templates:
            for k in self.templates:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['Templates'] = []
        if self.templates is not None:
            for k in self.templates:
                result['Templates'].append(k.to_map() if k else None)
        else:
            result['Templates'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.templates = []
        if map.get('Templates') is not None:
            for k in map.get('Templates'):
                temp_model = DescribeSlaTemplateResponseTemplates()
                temp_model = temp_model.from_map(k)
                self.templates.append(temp_model)
        else:
            self.templates = None
        return self


class DescribeSlaTemplateResponseTemplates(TeaModel):
    def __init__(self, id=None, type=None, name=None, description=None, uid=None, modified_time=None, classification=None, business_group=None, business_child_group=None, rules=None, deleted=None):
        self.id = id
        self.type = type
        self.name = name
        self.description = description
        self.uid = uid
        self.modified_time = modified_time
        self.classification = classification
        self.business_group = business_group
        self.business_child_group = business_child_group
        self.rules = rules
        self.deleted = deleted

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.uid, 'uid')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.classification, 'classification')
        self.validate_required(self.business_group, 'business_group')
        self.validate_required(self.business_child_group, 'business_child_group')
        self.validate_required(self.rules, 'rules')
        self.validate_required(self.deleted, 'deleted')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Type'] = self.type
        result['Name'] = self.name
        result['Description'] = self.description
        result['Uid'] = self.uid
        result['ModifiedTime'] = self.modified_time
        result['Classification'] = self.classification
        result['BusinessGroup'] = self.business_group
        result['BusinessChildGroup'] = self.business_child_group
        result['Rules'] = self.rules
        result['Deleted'] = self.deleted
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.description = map.get('Description')
        self.uid = map.get('Uid')
        self.modified_time = map.get('ModifiedTime')
        self.classification = map.get('Classification')
        self.business_group = map.get('BusinessGroup')
        self.business_child_group = map.get('BusinessChildGroup')
        self.rules = map.get('Rules')
        self.deleted = map.get('Deleted')
        return self
class StartSceneTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StartSceneTestingResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, http_status_code=None, plan_id=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.plan_id = plan_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['PlanId'] = self.plan_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.plan_id = map.get('PlanId')
        return self


class SaveSceneRequest(TeaModel):
    def __init__(self, scene=None):
        self.scene = scene

    def validate(self):
        self.validate_required(self.scene, 'scene')

    def to_map(self):
        result = {}
        result['Scene'] = self.scene
        return result

    def from_map(self, map={}):
        self.scene = map.get('Scene')
        return self


class SaveSceneResponse(TeaModel):
    def __init__(self, request_id=None, scene_id=None, message=None, code=None, success=None, http_status_code=None, code_key=None):
        self.request_id = request_id
        self.scene_id = scene_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.code_key = code_key

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.code_key, 'code_key')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SceneId'] = self.scene_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['CodeKey'] = self.code_key
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.scene_id = map.get('SceneId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.code_key = map.get('CodeKey')
        return self


class CreateSceneRequest(TeaModel):
    def __init__(self, scene=None):
        self.scene = scene

    def validate(self):
        self.validate_required(self.scene, 'scene')

    def to_map(self):
        result = {}
        result['Scene'] = self.scene
        return result

    def from_map(self, map={}):
        self.scene = map.get('Scene')
        return self


class CreateSceneResponse(TeaModel):
    def __init__(self, request_id=None, scene_id=None, message=None, code=None, success=None, http_status_code=None, code_key=None):
        self.request_id = request_id
        self.scene_id = scene_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.code_key = code_key

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.code_key, 'code_key')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SceneId'] = self.scene_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['CodeKey'] = self.code_key
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.scene_id = map.get('SceneId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.code_key = map.get('CodeKey')
        return self


class ChangePressureRequest(TeaModel):
    def __init__(self, route_request_body=None):
        self.route_request_body = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RouteRequestBody'] = self.route_request_body
        return result

    def from_map(self, map={}):
        self.route_request_body = map.get('RouteRequestBody')
        return self


class ChangePressureResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, route_response_body=None, success=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.route_response_body = route_response_body
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.route_response_body, 'route_response_body')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['RouteResponseBody'] = self.route_response_body
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.route_response_body = map.get('RouteResponseBody')
        self.success = map.get('Success')
        return self


class ListEnginesRequest(TeaModel):
    def __init__(self, route_request_body=None):
        self.route_request_body = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RouteRequestBody'] = self.route_request_body
        return result

    def from_map(self, map={}):
        self.route_request_body = map.get('RouteRequestBody')
        return self


class ListEnginesResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, route_response_body=None, success=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.route_response_body = route_response_body
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.route_response_body, 'route_response_body')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['RouteResponseBody'] = self.route_response_body
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.route_response_body = map.get('RouteResponseBody')
        self.success = map.get('Success')
        return self


class DescribeRealTimeLogRequest(TeaModel):
    def __init__(self, route_request_body=None):
        self.route_request_body = {}

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['RouteRequestBody'] = self.route_request_body
        return result

    def from_map(self, map={}):
        self.route_request_body = map.get('RouteRequestBody')
        return self


class DescribeRealTimeLogResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, route_response_body=None, success=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.route_response_body = route_response_body
        self.success = success

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.route_response_body, 'route_response_body')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['RouteResponseBody'] = self.route_response_body
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.route_response_body = map.get('RouteResponseBody')
        self.success = map.get('Success')
        return self


class DescribeStructureMonitorAuthRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeStructureMonitorAuthResponse(TeaModel):
    def __init__(self, request_id=None, structure_new=None, code=None, message=None, success=None, http_status_code=None):
        self.request_id = request_id
        self.structure_new = structure_new
        self.code = code
        self.message = message
        self.success = success
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.structure_new, 'structure_new')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StructureNew'] = self.structure_new
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.structure_new = map.get('StructureNew')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class DescribeJMeterSampleSummaryRequest(TeaModel):
    def __init__(self, report_id=None, sampler_id=None):
        self.report_id = report_id
        self.sampler_id = sampler_id

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.sampler_id, 'sampler_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['SamplerId'] = self.sampler_id
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.sampler_id = map.get('SamplerId')
        return self


class DescribeJMeterSampleSummaryResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, concurrency_rt_stat=None, concurrency_tps_stat=None, rt_distribution=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.concurrency_rt_stat = {}
        self.concurrency_tps_stat = {}
        self.rt_distribution = {}

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.concurrency_rt_stat, 'concurrency_rt_stat')
        self.validate_required(self.concurrency_tps_stat, 'concurrency_tps_stat')
        self.validate_required(self.rt_distribution, 'rt_distribution')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['ConcurrencyRtStat'] = self.concurrency_rt_stat
        result['ConcurrencyTpsStat'] = self.concurrency_tps_stat
        result['RtDistribution'] = self.rt_distribution
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.concurrency_rt_stat = map.get('ConcurrencyRtStat')
        self.concurrency_tps_stat = map.get('ConcurrencyTpsStat')
        self.rt_distribution = map.get('RtDistribution')
        return self


class CloneJMeterSceneRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class CloneJMeterSceneResponse(TeaModel):
    def __init__(self, request_id=None, scene_id=None, code=None, message=None, success=None, http_status_code=None):
        self.request_id = request_id
        self.scene_id = scene_id
        self.code = code
        self.message = message
        self.success = success
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SceneId'] = self.scene_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.scene_id = map.get('SceneId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class AdjustJMeterSpeedRequest(TeaModel):
    def __init__(self, scene_id=None, load_mode=None, speed=None):
        self.scene_id = scene_id
        self.load_mode = load_mode
        self.speed = speed

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['LoadMode'] = self.load_mode
        result['Speed'] = self.speed
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.load_mode = map.get('LoadMode')
        self.speed = map.get('Speed')
        return self


class AdjustJMeterSpeedResponse(TeaModel):
    def __init__(self, request_id=None, success=None, code=None, message=None, http_status_code=None):
        self.request_id = request_id
        self.success = success
        self.code = code
        self.message = message
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class DescribeJMeterSamplingLogsRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, begin_time=None, end_time=None, report_id=None, task_id=None, sampler_id=None, success=None, thread=None, keyword=None, rt_range=None):
        self.page_number = page_number
        self.page_size = page_size
        self.begin_time = begin_time
        self.end_time = end_time
        self.report_id = report_id
        self.task_id = task_id
        self.sampler_id = sampler_id
        self.success = success
        self.thread = thread
        self.keyword = keyword
        self.rt_range = rt_range

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['SamplerId'] = self.sampler_id
        result['Success'] = self.success
        result['Thread'] = self.thread
        result['Keyword'] = self.keyword
        result['RtRange'] = self.rt_range
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.sampler_id = map.get('SamplerId')
        self.success = map.get('Success')
        self.thread = map.get('Thread')
        self.keyword = map.get('Keyword')
        self.rt_range = map.get('RtRange')
        return self


class DescribeJMeterSamplingLogsResponse(TeaModel):
    def __init__(self, request_id=None, code=None, http_status_code=None, message=None, success=None, page_number=None, page_size=None, total_count=None, sample_results=None):
        self.request_id = request_id
        self.code = code
        self.http_status_code = http_status_code
        self.message = message
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.sample_results = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.sample_results, 'sample_results')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['HttpStatusCode'] = self.http_status_code
        result['Message'] = self.message
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['SampleResults'] = []
        if self.sample_results is not None:
            for k in self.sample_results:
                result['SampleResults'].append(k)
        else:
            result['SampleResults'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.http_status_code = map.get('HttpStatusCode')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.sample_results = []
        if map.get('SampleResults') is not None:
            for k in map.get('SampleResults'):
                self.sample_results.append(k)
        else:
            self.sample_results = None
        return self


class DescribeAgentNetTrafficRequest(TeaModel):
    def __init__(self, report_id=None, task_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.task_id = task_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeAgentNetTrafficResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, net_traffic_info=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.net_traffic_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.net_traffic_info, 'net_traffic_info')
        if self.net_traffic_info:
            for k in self.net_traffic_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['NetTrafficInfo'] = []
        if self.net_traffic_info is not None:
            for k in self.net_traffic_info:
                result['NetTrafficInfo'].append(k.to_map() if k else None)
        else:
            result['NetTrafficInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.net_traffic_info = []
        if map.get('NetTrafficInfo') is not None:
            for k in map.get('NetTrafficInfo'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.net_traffic_info.append(temp_model)
        else:
            self.net_traffic_info = None
        return self


class DescribeAgentCpuInfoRequest(TeaModel):
    def __init__(self, report_id=None, task_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.task_id = task_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeAgentCpuInfoResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, http_status_code=None, cpu_info=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.http_status_code = http_status_code
        self.cpu_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.cpu_info, 'cpu_info')
        if self.cpu_info:
            for k in self.cpu_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['CpuInfo'] = []
        if self.cpu_info is not None:
            for k in self.cpu_info:
                result['CpuInfo'].append(k.to_map() if k else None)
        else:
            result['CpuInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.cpu_info = []
        if map.get('CpuInfo') is not None:
            for k in map.get('CpuInfo'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.cpu_info.append(temp_model)
        else:
            self.cpu_info = None
        return self


class DescribeAgentGCInfoRequest(TeaModel):
    def __init__(self, report_id=None, task_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.task_id = task_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeAgentGCInfoResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, http_status_code=None, gc_info=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.http_status_code = http_status_code
        self.gc_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.gc_info, 'gc_info')
        if self.gc_info:
            for k in self.gc_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['GcInfo'] = []
        if self.gc_info is not None:
            for k in self.gc_info:
                result['GcInfo'].append(k.to_map() if k else None)
        else:
            result['GcInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.gc_info = []
        if map.get('GcInfo') is not None:
            for k in map.get('GcInfo'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.gc_info.append(temp_model)
        else:
            self.gc_info = None
        return self


class DescribeAgentMemoryInfoRequest(TeaModel):
    def __init__(self, report_id=None, task_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.task_id = task_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeAgentMemoryInfoResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, memory_info=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.memory_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.memory_info, 'memory_info')
        if self.memory_info:
            for k in self.memory_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['MemoryInfo'] = []
        if self.memory_info is not None:
            for k in self.memory_info:
                result['MemoryInfo'].append(k.to_map() if k else None)
        else:
            result['MemoryInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.memory_info = []
        if map.get('MemoryInfo') is not None:
            for k in map.get('MemoryInfo'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.memory_info.append(temp_model)
        else:
            self.memory_info = None
        return self


class DescribeAgentLoadInfoRequest(TeaModel):
    def __init__(self, report_id=None, task_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.task_id = task_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['TaskId'] = self.task_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.task_id = map.get('TaskId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeAgentLoadInfoResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, load_info=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.load_info = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.load_info, 'load_info')
        if self.load_info:
            for k in self.load_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['LoadInfo'] = []
        if self.load_info is not None:
            for k in self.load_info:
                result['LoadInfo'].append(k.to_map() if k else None)
        else:
            result['LoadInfo'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.load_info = []
        if map.get('LoadInfo') is not None:
            for k in map.get('LoadInfo'):
                temp_model = map()
                temp_model = temp_model.from_map(k)
                self.load_info.append(temp_model)
        else:
            self.load_info = None
        return self


class DescribeJMeterPlanRequest(TeaModel):
    def __init__(self, report_id=None):
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        return self


class DescribeJMeterPlanResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, report=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.report = report

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.report, 'report')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['Report'] = self.report
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.report = map.get('Report')
        return self


class DescribeJMeterSceneRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class DescribeJMeterSceneResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, scene=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.scene = scene

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.scene, 'scene')
        if self.scene:
            self.scene.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        if self.scene is not None:
            result['Scene'] = self.scene.to_map()
        else:
            result['Scene'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        if map.get('Scene') is not None:
            temp_model = DescribeJMeterSceneResponseScene()
            self.scene = temp_model.from_map(map['Scene'])
        else:
            self.scene = None
        return self


class DescribeJMeterSceneResponseSceneCondition(TeaModel):
    def __init__(self, region=None, isp=None, amount=None):
        self.region = region
        self.isp = isp
        self.amount = amount

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.isp, 'isp')
        self.validate_required(self.amount, 'amount')

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['Isp'] = self.isp
        result['Amount'] = self.amount
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.isp = map.get('Isp')
        self.amount = map.get('Amount')
        return self


class DescribeJMeterSceneResponseScenePlan(TeaModel):
    def __init__(self, modified_time=None, last_active=None, vum=None, has_report=None, vum_weight=None, begin_time=None):
        self.modified_time = modified_time
        self.last_active = last_active
        self.vum = vum
        self.has_report = has_report
        self.vum_weight = vum_weight
        self.begin_time = begin_time

    def validate(self):
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.last_active, 'last_active')
        self.validate_required(self.vum, 'vum')
        self.validate_required(self.has_report, 'has_report')
        self.validate_required(self.vum_weight, 'vum_weight')
        self.validate_required(self.begin_time, 'begin_time')

    def to_map(self):
        result = {}
        result['ModifiedTime'] = self.modified_time
        result['LastActive'] = self.last_active
        result['Vum'] = self.vum
        result['HasReport'] = self.has_report
        result['VumWeight'] = self.vum_weight
        result['BeginTime'] = self.begin_time
        return result

    def from_map(self, map={}):
        self.modified_time = map.get('ModifiedTime')
        self.last_active = map.get('LastActive')
        self.vum = map.get('Vum')
        self.has_report = map.get('HasReport')
        self.vum_weight = map.get('VumWeight')
        self.begin_time = map.get('BeginTime')
        return self


class DescribeJMeterSceneResponseScene(TeaModel):
    def __init__(self, name=None, pool=None, jmeter_version=None, concurrency=None, ramp_up=None, hold_for=None, use_iterations=None, iterations=None, max_concurrency_per_agent=None, specify_agent_count=None, agent_count=None, split_csv=None, test_file=None, file_list=None, region_id=None, vpc_id=None, security_group_id=None, v_switch_id=None, scene_id=None, condition_satisfied_exactly=None, sync_timer_type=None, steps=None, constant_throughput_timer_type=None, environment_id=None, is_cronable=None, condition=None, plan=None):
        self.name = name
        self.pool = pool
        self.jmeter_version = jmeter_version
        self.concurrency = concurrency
        self.ramp_up = ramp_up
        self.hold_for = hold_for
        self.use_iterations = use_iterations
        self.iterations = iterations
        self.max_concurrency_per_agent = max_concurrency_per_agent
        self.specify_agent_count = specify_agent_count
        self.agent_count = agent_count
        self.split_csv = split_csv
        self.test_file = test_file
        self.file_list = file_list
        self.region_id = region_id
        self.vpc_id = vpc_id
        self.security_group_id = security_group_id
        self.v_switch_id = v_switch_id
        self.scene_id = scene_id
        self.condition_satisfied_exactly = condition_satisfied_exactly
        self.sync_timer_type = sync_timer_type
        self.steps = steps
        self.constant_throughput_timer_type = constant_throughput_timer_type
        self.environment_id = environment_id
        self.is_cronable = is_cronable
        self.condition = []
        self.plan = plan

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.pool, 'pool')
        self.validate_required(self.jmeter_version, 'jmeter_version')
        self.validate_required(self.concurrency, 'concurrency')
        self.validate_required(self.ramp_up, 'ramp_up')
        self.validate_required(self.hold_for, 'hold_for')
        self.validate_required(self.use_iterations, 'use_iterations')
        self.validate_required(self.iterations, 'iterations')
        self.validate_required(self.max_concurrency_per_agent, 'max_concurrency_per_agent')
        self.validate_required(self.specify_agent_count, 'specify_agent_count')
        self.validate_required(self.agent_count, 'agent_count')
        self.validate_required(self.split_csv, 'split_csv')
        self.validate_required(self.test_file, 'test_file')
        self.validate_required(self.file_list, 'file_list')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.condition_satisfied_exactly, 'condition_satisfied_exactly')
        self.validate_required(self.sync_timer_type, 'sync_timer_type')
        self.validate_required(self.steps, 'steps')
        self.validate_required(self.constant_throughput_timer_type, 'constant_throughput_timer_type')
        self.validate_required(self.environment_id, 'environment_id')
        self.validate_required(self.is_cronable, 'is_cronable')
        self.validate_required(self.condition, 'condition')
        if self.condition:
            for k in self.condition:
                if k :
                    k.validate()
        self.validate_required(self.plan, 'plan')
        if self.plan:
            self.plan.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Pool'] = self.pool
        result['JMeterVersion'] = self.jmeter_version
        result['Concurrency'] = self.concurrency
        result['RampUp'] = self.ramp_up
        result['HoldFor'] = self.hold_for
        result['UseIterations'] = self.use_iterations
        result['Iterations'] = self.iterations
        result['MaxConcurrencyPerAgent'] = self.max_concurrency_per_agent
        result['SpecifyAgentCount'] = self.specify_agent_count
        result['AgentCount'] = self.agent_count
        result['SplitCsv'] = self.split_csv
        result['TestFile'] = self.test_file
        result['FileList'] = self.file_list
        result['RegionId'] = self.region_id
        result['VpcId'] = self.vpc_id
        result['SecurityGroupId'] = self.security_group_id
        result['VSwitchId'] = self.v_switch_id
        result['SceneId'] = self.scene_id
        result['ConditionSatisfiedExactly'] = self.condition_satisfied_exactly
        result['SyncTimerType'] = self.sync_timer_type
        result['Steps'] = self.steps
        result['ConstantThroughputTimerType'] = self.constant_throughput_timer_type
        result['EnvironmentId'] = self.environment_id
        result['IsCronable'] = self.is_cronable
        result['Condition'] = []
        if self.condition is not None:
            for k in self.condition:
                result['Condition'].append(k.to_map() if k else None)
        else:
            result['Condition'] = None
        if self.plan is not None:
            result['Plan'] = self.plan.to_map()
        else:
            result['Plan'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.pool = map.get('Pool')
        self.jmeter_version = map.get('JMeterVersion')
        self.concurrency = map.get('Concurrency')
        self.ramp_up = map.get('RampUp')
        self.hold_for = map.get('HoldFor')
        self.use_iterations = map.get('UseIterations')
        self.iterations = map.get('Iterations')
        self.max_concurrency_per_agent = map.get('MaxConcurrencyPerAgent')
        self.specify_agent_count = map.get('SpecifyAgentCount')
        self.agent_count = map.get('AgentCount')
        self.split_csv = map.get('SplitCsv')
        self.test_file = map.get('TestFile')
        self.file_list = map.get('FileList')
        self.region_id = map.get('RegionId')
        self.vpc_id = map.get('VpcId')
        self.security_group_id = map.get('SecurityGroupId')
        self.v_switch_id = map.get('VSwitchId')
        self.scene_id = map.get('SceneId')
        self.condition_satisfied_exactly = map.get('ConditionSatisfiedExactly')
        self.sync_timer_type = map.get('SyncTimerType')
        self.steps = map.get('Steps')
        self.constant_throughput_timer_type = map.get('ConstantThroughputTimerType')
        self.environment_id = map.get('EnvironmentId')
        self.is_cronable = map.get('IsCronable')
        self.condition = []
        if map.get('Condition') is not None:
            for k in map.get('Condition'):
                temp_model = DescribeJMeterSceneResponseSceneCondition()
                temp_model = temp_model.from_map(k)
                self.condition.append(temp_model)
        else:
            self.condition = None
        if map.get('Plan') is not None:
            temp_model = DescribeJMeterSceneResponseScenePlan()
            self.plan = temp_model.from_map(map['Plan'])
        else:
            self.plan = None
        return self
class DescribeJMeterSceneRunningStatusRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class DescribeJMeterSceneRunningStatusResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, scene=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.scene = scene

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.scene, 'scene')
        if self.scene:
            self.scene.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        if self.scene is not None:
            result['Scene'] = self.scene.to_map()
        else:
            result['Scene'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        if map.get('Scene') is not None:
            temp_model = DescribeJMeterSceneRunningStatusResponseScene()
            self.scene = temp_model.from_map(map['Scene'])
        else:
            self.scene = None
        return self


class DescribeJMeterSceneRunningStatusResponseScene(TeaModel):
    def __init__(self, name=None, pool=None, jmeter_version=None, concurrency=None, ramp_up=None, hold_for=None, use_iterations=None, iterations=None, max_concurrency_per_agent=None, specify_agent_count=None, agent_count=None, split_csv=None, test_file=None, plan=None, steps=None):
        self.name = name
        self.pool = pool
        self.jmeter_version = jmeter_version
        self.concurrency = concurrency
        self.ramp_up = ramp_up
        self.hold_for = hold_for
        self.use_iterations = use_iterations
        self.iterations = iterations
        self.max_concurrency_per_agent = max_concurrency_per_agent
        self.specify_agent_count = specify_agent_count
        self.agent_count = agent_count
        self.split_csv = split_csv
        self.test_file = test_file
        self.plan = plan
        self.steps = steps

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.pool, 'pool')
        self.validate_required(self.jmeter_version, 'jmeter_version')
        self.validate_required(self.concurrency, 'concurrency')
        self.validate_required(self.ramp_up, 'ramp_up')
        self.validate_required(self.hold_for, 'hold_for')
        self.validate_required(self.use_iterations, 'use_iterations')
        self.validate_required(self.iterations, 'iterations')
        self.validate_required(self.max_concurrency_per_agent, 'max_concurrency_per_agent')
        self.validate_required(self.specify_agent_count, 'specify_agent_count')
        self.validate_required(self.agent_count, 'agent_count')
        self.validate_required(self.split_csv, 'split_csv')
        self.validate_required(self.test_file, 'test_file')
        self.validate_required(self.plan, 'plan')
        self.validate_required(self.steps, 'steps')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Pool'] = self.pool
        result['JmeterVersion'] = self.jmeter_version
        result['Concurrency'] = self.concurrency
        result['RampUp'] = self.ramp_up
        result['HoldFor'] = self.hold_for
        result['UseIterations'] = self.use_iterations
        result['Iterations'] = self.iterations
        result['MaxConcurrencyPerAgent'] = self.max_concurrency_per_agent
        result['SpecifyAgentCount'] = self.specify_agent_count
        result['AgentCount'] = self.agent_count
        result['SplitCsv'] = self.split_csv
        result['TestFile'] = self.test_file
        result['Plan'] = self.plan
        result['Steps'] = self.steps
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.pool = map.get('Pool')
        self.jmeter_version = map.get('JmeterVersion')
        self.concurrency = map.get('Concurrency')
        self.ramp_up = map.get('RampUp')
        self.hold_for = map.get('HoldFor')
        self.use_iterations = map.get('UseIterations')
        self.iterations = map.get('Iterations')
        self.max_concurrency_per_agent = map.get('MaxConcurrencyPerAgent')
        self.specify_agent_count = map.get('SpecifyAgentCount')
        self.agent_count = map.get('AgentCount')
        self.split_csv = map.get('SplitCsv')
        self.test_file = map.get('TestFile')
        self.plan = map.get('Plan')
        self.steps = map.get('Steps')
        return self
class DescribeJMeterTaskListRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, report_id=None):
        self.page_number = page_number
        self.page_size = page_size
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.report_id = map.get('ReportId')
        return self


class DescribeJMeterTaskListResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, page_number=None, page_size=None, total_count=None, task_list=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.task_list = task_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.task_list, 'task_list')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['TaskList'] = self.task_list
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.task_list = map.get('TaskList')
        return self


class DescribeJMeterLogsRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, report_id=None, begin_time=None, end_time=None, task_id=None, thread=None, level=None, logger_name=None, keyword=None):
        self.page_number = page_number
        self.page_size = page_size
        self.report_id = report_id
        self.begin_time = begin_time
        self.end_time = end_time
        self.task_id = task_id
        self.thread = thread
        self.level = level
        self.logger_name = logger_name
        self.keyword = keyword

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['ReportId'] = self.report_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['TaskId'] = self.task_id
        result['Thread'] = self.thread
        result['Level'] = self.level
        result['LoggerName'] = self.logger_name
        result['Keyword'] = self.keyword
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.report_id = map.get('ReportId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.task_id = map.get('TaskId')
        self.thread = map.get('Thread')
        self.level = map.get('Level')
        self.logger_name = map.get('LoggerName')
        self.keyword = map.get('Keyword')
        return self


class DescribeJMeterLogsResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, page_number=None, page_size=None, total_count=None, logs=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.logs = logs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.logs, 'logs')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['Logs'] = self.logs
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.logs = map.get('Logs')
        return self


class StopJMeterTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StopJMeterTestingResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class DescribeSampleMetricRequest(TeaModel):
    def __init__(self, report_id=None, sampler_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.sampler_id = sampler_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['SamplerId'] = self.sampler_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.sampler_id = map.get('SamplerId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeSampleMetricResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, http_status_code=None, sample_metric_list=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.http_status_code = http_status_code
        self.sample_metric_list = sample_metric_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.sample_metric_list, 'sample_metric_list')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['SampleMetricList'] = self.sample_metric_list
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.sample_metric_list = map.get('SampleMetricList')
        return self


class DescribeJMeterChainDetailRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, report_id=None, begin_time=None, end_time=None, task_id=None, thread=None, kw=None, sampler_id=None, success=None):
        self.page_number = page_number
        self.page_size = page_size
        self.report_id = report_id
        self.begin_time = begin_time
        self.end_time = end_time
        self.task_id = task_id
        self.thread = thread
        self.kw = kw
        self.sampler_id = sampler_id
        self.success = success

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['ReportId'] = self.report_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['TaskId'] = self.task_id
        result['Thread'] = self.thread
        result['Kw'] = self.kw
        result['SamplerId'] = self.sampler_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.report_id = map.get('ReportId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.task_id = map.get('TaskId')
        self.thread = map.get('Thread')
        self.kw = map.get('Kw')
        self.sampler_id = map.get('SamplerId')
        self.success = map.get('Success')
        return self


class DescribeJMeterChainDetailResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, page_number=None, page_size=None, total_count=None, sample_results=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.sample_results = sample_results

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.sample_results, 'sample_results')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['SampleResults'] = self.sample_results
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.sample_results = map.get('SampleResults')
        return self


class StartJMeterTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StartJMeterTestingResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None, plan_id=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code
        self.plan_id = plan_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        result['PlanId'] = self.plan_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        self.plan_id = map.get('PlanId')
        return self


class RemoveInstanceFromGroupRequest(TeaModel):
    def __init__(self, group_id=None, instance_id_and_ports=None, ver=None):
        self.group_id = group_id
        self.instance_id_and_ports = {}
        self.ver = ver

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.instance_id_and_ports, 'instance_id_and_ports')
        self.validate_required(self.ver, 'ver')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['InstanceIdAndPorts'] = self.instance_id_and_ports
        result['Ver'] = self.ver
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.instance_id_and_ports = map.get('InstanceIdAndPorts')
        self.ver = map.get('Ver')
        return self


class RemoveInstanceFromGroupResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        return self


class ReplaceOssFileRequest(TeaModel):
    def __init__(self, scene_id=None, original_oss_file_url=None, new_oss_file_url=None, job_id=None):
        self.scene_id = scene_id
        self.original_oss_file_url = original_oss_file_url
        self.new_oss_file_url = new_oss_file_url
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.original_oss_file_url, 'original_oss_file_url')
        self.validate_required(self.new_oss_file_url, 'new_oss_file_url')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['OriginalOssFileUrl'] = self.original_oss_file_url
        result['NewOssFileUrl'] = self.new_oss_file_url
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.original_oss_file_url = map.get('OriginalOssFileUrl')
        self.new_oss_file_url = map.get('NewOssFileUrl')
        self.job_id = map.get('JobId')
        return self


class ReplaceOssFileResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, finished=None, job_id=None, timeout=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.finished = finished
        self.job_id = job_id
        self.timeout = timeout

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.finished, 'finished')
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.timeout, 'timeout')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['Finished'] = self.finished
        result['JobId'] = self.job_id
        result['Timeout'] = self.timeout
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.finished = map.get('Finished')
        self.job_id = map.get('JobId')
        self.timeout = map.get('Timeout')
        return self


class StartTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StartTestingResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, scene_id=None, report_id=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.scene_id = scene_id
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['SceneId'] = self.scene_id
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.scene_id = map.get('SceneId')
        self.report_id = map.get('ReportId')
        return self


class StopTestingRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class StopTestingResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        return self


class ListReportsRequest(TeaModel):
    def __init__(self, keyword=None, page_size=None, scene_type=None, begin_time=None, end_time=None, page_number=None, scene_id=None):
        self.keyword = keyword
        self.page_size = page_size
        self.scene_type = scene_type
        self.begin_time = begin_time
        self.end_time = end_time
        self.page_number = page_number
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')

    def to_map(self):
        result = {}
        result['Keyword'] = self.keyword
        result['PageSize'] = self.page_size
        result['SceneType'] = self.scene_type
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['PageNumber'] = self.page_number
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.keyword = map.get('Keyword')
        self.page_size = map.get('PageSize')
        self.scene_type = map.get('SceneType')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.page_number = map.get('PageNumber')
        self.scene_id = map.get('SceneId')
        return self


class ListReportsResponse(TeaModel):
    def __init__(self, page_number=None, code=None, request_id=None, success=None, page_size=None, total_count=None, message=None, http_status_code=None, reports=None):
        self.page_number = page_number
        self.code = code
        self.request_id = request_id
        self.success = success
        self.page_size = page_size
        self.total_count = total_count
        self.message = message
        self.http_status_code = http_status_code
        self.reports = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.code, 'code')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.reports, 'reports')
        if self.reports:
            for k in self.reports:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['Code'] = self.code
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Reports'] = []
        if self.reports is not None:
            for k in self.reports:
                result['Reports'].append(k.to_map() if k else None)
        else:
            result['Reports'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.code = map.get('Code')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.reports = []
        if map.get('Reports') is not None:
            for k in map.get('Reports'):
                temp_model = ListReportsResponseReports()
                temp_model = temp_model.from_map(k)
                self.reports.append(temp_model)
        else:
            self.reports = None
        return self


class ListReportsResponseReports(TeaModel):
    def __init__(self, report_id=None, scene_id=None, scene_name=None, scene_type=None, max_concurrency=None, vum=None, duration=None, begin_time=None, scene_deleted=None, use_custom_pool=None):
        self.report_id = report_id
        self.scene_id = scene_id
        self.scene_name = scene_name
        self.scene_type = scene_type
        self.max_concurrency = max_concurrency
        self.vum = vum
        self.duration = duration
        self.begin_time = begin_time
        self.scene_deleted = scene_deleted
        self.use_custom_pool = use_custom_pool

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.scene_name, 'scene_name')
        self.validate_required(self.scene_type, 'scene_type')
        self.validate_required(self.max_concurrency, 'max_concurrency')
        self.validate_required(self.vum, 'vum')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.scene_deleted, 'scene_deleted')
        self.validate_required(self.use_custom_pool, 'use_custom_pool')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['SceneId'] = self.scene_id
        result['SceneName'] = self.scene_name
        result['SceneType'] = self.scene_type
        result['MaxConcurrency'] = self.max_concurrency
        result['Vum'] = self.vum
        result['Duration'] = self.duration
        result['BeginTime'] = self.begin_time
        result['SceneDeleted'] = self.scene_deleted
        result['UseCustomPool'] = self.use_custom_pool
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.scene_id = map.get('SceneId')
        self.scene_name = map.get('SceneName')
        self.scene_type = map.get('SceneType')
        self.max_concurrency = map.get('MaxConcurrency')
        self.vum = map.get('Vum')
        self.duration = map.get('Duration')
        self.begin_time = map.get('BeginTime')
        self.scene_deleted = map.get('SceneDeleted')
        self.use_custom_pool = map.get('UseCustomPool')
        return self
class DescribeReportChainDetailRequest(TeaModel):
    def __init__(self, report_id=None, chain_id=None, begin_time=None, end_time=None):
        self.report_id = report_id
        self.chain_id = chain_id
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['ChainId'] = self.chain_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.chain_id = map.get('ChainId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeReportChainDetailResponse(TeaModel):
    def __init__(self, message=None, http_status_code=None, success=None, request_id=None, code=None, chain_details=None):
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.request_id = request_id
        self.code = code
        self.chain_details = []

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.chain_details, 'chain_details')
        if self.chain_details:
            for k in self.chain_details:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['ChainDetails'] = []
        if self.chain_details is not None:
            for k in self.chain_details:
                result['ChainDetails'].append(k.to_map() if k else None)
        else:
            result['ChainDetails'] = None
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.chain_details = []
        if map.get('ChainDetails') is not None:
            for k in map.get('ChainDetails'):
                temp_model = DescribeReportChainDetailResponseChainDetails()
                temp_model = temp_model.from_map(k)
                self.chain_details.append(temp_model)
        else:
            self.chain_details = None
        return self


class DescribeReportChainDetailResponseChainDetails(TeaModel):
    def __init__(self, total_fail=None, qps_fail=None, total_3xx=None, real_concurrency=None, time_point=None, max_rt=None, min_rt=None, total_request=None, qps_2xx=None, total_4xx=None, total_5xx=None, qps_4xx=None, real_qps=None, config_qps=None, average_rt=None, bps_request=None, chain_id=None, bps_response=None, total_2xx=None, qps_5xx=None, qps_3xx=None, qps_hit=None, qps_miss=None, total_hit=None, total_miss=None):
        self.total_fail = total_fail
        self.qps_fail = qps_fail
        self.total_3xx = total_3xx
        self.real_concurrency = real_concurrency
        self.time_point = time_point
        self.max_rt = max_rt
        self.min_rt = min_rt
        self.total_request = total_request
        self.qps_2xx = qps_2xx
        self.total_4xx = total_4xx
        self.total_5xx = total_5xx
        self.qps_4xx = qps_4xx
        self.real_qps = real_qps
        self.config_qps = config_qps
        self.average_rt = average_rt
        self.bps_request = bps_request
        self.chain_id = chain_id
        self.bps_response = bps_response
        self.total_2xx = total_2xx
        self.qps_5xx = qps_5xx
        self.qps_3xx = qps_3xx
        self.qps_hit = qps_hit
        self.qps_miss = qps_miss
        self.total_hit = total_hit
        self.total_miss = total_miss

    def validate(self):
        self.validate_required(self.total_fail, 'total_fail')
        self.validate_required(self.qps_fail, 'qps_fail')
        self.validate_required(self.total_3xx, 'total_3xx')
        self.validate_required(self.real_concurrency, 'real_concurrency')
        self.validate_required(self.time_point, 'time_point')
        self.validate_required(self.max_rt, 'max_rt')
        self.validate_required(self.min_rt, 'min_rt')
        self.validate_required(self.total_request, 'total_request')
        self.validate_required(self.qps_2xx, 'qps_2xx')
        self.validate_required(self.total_4xx, 'total_4xx')
        self.validate_required(self.total_5xx, 'total_5xx')
        self.validate_required(self.qps_4xx, 'qps_4xx')
        self.validate_required(self.real_qps, 'real_qps')
        self.validate_required(self.config_qps, 'config_qps')
        self.validate_required(self.average_rt, 'average_rt')
        self.validate_required(self.bps_request, 'bps_request')
        self.validate_required(self.chain_id, 'chain_id')
        self.validate_required(self.bps_response, 'bps_response')
        self.validate_required(self.total_2xx, 'total_2xx')
        self.validate_required(self.qps_5xx, 'qps_5xx')
        self.validate_required(self.qps_3xx, 'qps_3xx')
        self.validate_required(self.qps_hit, 'qps_hit')
        self.validate_required(self.qps_miss, 'qps_miss')
        self.validate_required(self.total_hit, 'total_hit')
        self.validate_required(self.total_miss, 'total_miss')

    def to_map(self):
        result = {}
        result['TotalFail'] = self.total_fail
        result['QpsFail'] = self.qps_fail
        result['Total3XX'] = self.total_3xx
        result['RealConcurrency'] = self.real_concurrency
        result['TimePoint'] = self.time_point
        result['MaxRt'] = self.max_rt
        result['MinRt'] = self.min_rt
        result['TotalRequest'] = self.total_request
        result['Qps2XX'] = self.qps_2xx
        result['Total4XX'] = self.total_4xx
        result['Total5XX'] = self.total_5xx
        result['Qps4XX'] = self.qps_4xx
        result['RealQps'] = self.real_qps
        result['ConfigQps'] = self.config_qps
        result['AverageRt'] = self.average_rt
        result['BpsRequest'] = self.bps_request
        result['ChainId'] = self.chain_id
        result['BpsResponse'] = self.bps_response
        result['Total2XX'] = self.total_2xx
        result['Qps5XX'] = self.qps_5xx
        result['Qps3XX'] = self.qps_3xx
        result['QpsHit'] = self.qps_hit
        result['QpsMiss'] = self.qps_miss
        result['TotalHit'] = self.total_hit
        result['TotalMiss'] = self.total_miss
        return result

    def from_map(self, map={}):
        self.total_fail = map.get('TotalFail')
        self.qps_fail = map.get('QpsFail')
        self.total_3xx = map.get('Total3XX')
        self.real_concurrency = map.get('RealConcurrency')
        self.time_point = map.get('TimePoint')
        self.max_rt = map.get('MaxRt')
        self.min_rt = map.get('MinRt')
        self.total_request = map.get('TotalRequest')
        self.qps_2xx = map.get('Qps2XX')
        self.total_4xx = map.get('Total4XX')
        self.total_5xx = map.get('Total5XX')
        self.qps_4xx = map.get('Qps4XX')
        self.real_qps = map.get('RealQps')
        self.config_qps = map.get('ConfigQps')
        self.average_rt = map.get('AverageRt')
        self.bps_request = map.get('BpsRequest')
        self.chain_id = map.get('ChainId')
        self.bps_response = map.get('BpsResponse')
        self.total_2xx = map.get('Total2XX')
        self.qps_5xx = map.get('Qps5XX')
        self.qps_3xx = map.get('Qps3XX')
        self.qps_hit = map.get('QpsHit')
        self.qps_miss = map.get('QpsMiss')
        self.total_hit = map.get('TotalHit')
        self.total_miss = map.get('TotalMiss')
        return self
class DescribeReportChainSummaryRequest(TeaModel):
    def __init__(self, report_id=None):
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        return self


class DescribeReportChainSummaryResponse(TeaModel):
    def __init__(self, message=None, http_status_code=None, request_id=None, code=None, success=None, chain_summary=None):
        self.message = message
        self.http_status_code = http_status_code
        self.request_id = request_id
        self.code = code
        self.success = success
        self.chain_summary = []

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.chain_summary, 'chain_summary')
        if self.chain_summary:
            for k in self.chain_summary:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Success'] = self.success
        result['ChainSummary'] = []
        if self.chain_summary is not None:
            for k in self.chain_summary:
                result['ChainSummary'].append(k.to_map() if k else None)
        else:
            result['ChainSummary'] = None
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.chain_summary = []
        if map.get('ChainSummary') is not None:
            for k in map.get('ChainSummary'):
                temp_model = DescribeReportChainSummaryResponseChainSummary()
                temp_model = temp_model.from_map(k)
                self.chain_summary.append(temp_model)
        else:
            self.chain_summary = None
        return self


class DescribeReportChainSummaryResponseChainSummary(TeaModel):
    def __init__(self, chain_id=None, average_tps=None, succeed_request_rate=None, has_check_point=None, chain_name=None, total_request=None, count_5xx=None, relation_name=None, count_4xx=None, count_timeout=None, seg_75rt=None, failed_business_count=None, failed_request_count=None, seg_90rt=None, max_rt=None, min_rt=None, count_3xx=None, average_rt=None, relation_id=None, succeed_business_rate=None, seg_50rt=None, seg_99rt=None, average_concurrency=None, exceptions=None):
        self.chain_id = chain_id
        self.average_tps = average_tps
        self.succeed_request_rate = succeed_request_rate
        self.has_check_point = has_check_point
        self.chain_name = chain_name
        self.total_request = total_request
        self.count_5xx = count_5xx
        self.relation_name = relation_name
        self.count_4xx = count_4xx
        self.count_timeout = count_timeout
        self.seg_75rt = seg_75rt
        self.failed_business_count = failed_business_count
        self.failed_request_count = failed_request_count
        self.seg_90rt = seg_90rt
        self.max_rt = max_rt
        self.min_rt = min_rt
        self.count_3xx = count_3xx
        self.average_rt = average_rt
        self.relation_id = relation_id
        self.succeed_business_rate = succeed_business_rate
        self.seg_50rt = seg_50rt
        self.seg_99rt = seg_99rt
        self.average_concurrency = average_concurrency
        self.exceptions = exceptions

    def validate(self):
        self.validate_required(self.chain_id, 'chain_id')
        self.validate_required(self.average_tps, 'average_tps')
        self.validate_required(self.succeed_request_rate, 'succeed_request_rate')
        self.validate_required(self.has_check_point, 'has_check_point')
        self.validate_required(self.chain_name, 'chain_name')
        self.validate_required(self.total_request, 'total_request')
        self.validate_required(self.count_5xx, 'count_5xx')
        self.validate_required(self.relation_name, 'relation_name')
        self.validate_required(self.count_4xx, 'count_4xx')
        self.validate_required(self.count_timeout, 'count_timeout')
        self.validate_required(self.seg_75rt, 'seg_75rt')
        self.validate_required(self.failed_business_count, 'failed_business_count')
        self.validate_required(self.failed_request_count, 'failed_request_count')
        self.validate_required(self.seg_90rt, 'seg_90rt')
        self.validate_required(self.max_rt, 'max_rt')
        self.validate_required(self.min_rt, 'min_rt')
        self.validate_required(self.count_3xx, 'count_3xx')
        self.validate_required(self.average_rt, 'average_rt')
        self.validate_required(self.relation_id, 'relation_id')
        self.validate_required(self.succeed_business_rate, 'succeed_business_rate')
        self.validate_required(self.seg_50rt, 'seg_50rt')
        self.validate_required(self.seg_99rt, 'seg_99rt')
        self.validate_required(self.average_concurrency, 'average_concurrency')
        self.validate_required(self.exceptions, 'exceptions')

    def to_map(self):
        result = {}
        result['ChainId'] = self.chain_id
        result['AverageTps'] = self.average_tps
        result['SucceedRequestRate'] = self.succeed_request_rate
        result['HasCheckPoint'] = self.has_check_point
        result['ChainName'] = self.chain_name
        result['TotalRequest'] = self.total_request
        result['Count5XX'] = self.count_5xx
        result['RelationName'] = self.relation_name
        result['Count4XX'] = self.count_4xx
        result['CountTimeout'] = self.count_timeout
        result['Seg75Rt'] = self.seg_75rt
        result['FailedBusinessCount'] = self.failed_business_count
        result['FailedRequestCount'] = self.failed_request_count
        result['Seg90Rt'] = self.seg_90rt
        result['MaxRt'] = self.max_rt
        result['MinRt'] = self.min_rt
        result['Count3XX'] = self.count_3xx
        result['AverageRt'] = self.average_rt
        result['RelationId'] = self.relation_id
        result['SucceedBusinessRate'] = self.succeed_business_rate
        result['Seg50Rt'] = self.seg_50rt
        result['Seg99Rt'] = self.seg_99rt
        result['AverageConcurrency'] = self.average_concurrency
        result['Exceptions'] = self.exceptions
        return result

    def from_map(self, map={}):
        self.chain_id = map.get('ChainId')
        self.average_tps = map.get('AverageTps')
        self.succeed_request_rate = map.get('SucceedRequestRate')
        self.has_check_point = map.get('HasCheckPoint')
        self.chain_name = map.get('ChainName')
        self.total_request = map.get('TotalRequest')
        self.count_5xx = map.get('Count5XX')
        self.relation_name = map.get('RelationName')
        self.count_4xx = map.get('Count4XX')
        self.count_timeout = map.get('CountTimeout')
        self.seg_75rt = map.get('Seg75Rt')
        self.failed_business_count = map.get('FailedBusinessCount')
        self.failed_request_count = map.get('FailedRequestCount')
        self.seg_90rt = map.get('Seg90Rt')
        self.max_rt = map.get('MaxRt')
        self.min_rt = map.get('MinRt')
        self.count_3xx = map.get('Count3XX')
        self.average_rt = map.get('AverageRt')
        self.relation_id = map.get('RelationId')
        self.succeed_business_rate = map.get('SucceedBusinessRate')
        self.seg_50rt = map.get('Seg50Rt')
        self.seg_99rt = map.get('Seg99Rt')
        self.average_concurrency = map.get('AverageConcurrency')
        self.exceptions = map.get('Exceptions')
        return self
class RemoveScenesRequest(TeaModel):
    def __init__(self, scene_ids=None):
        self.scene_ids = {}

    def validate(self):
        self.validate_required(self.scene_ids, 'scene_ids')

    def to_map(self):
        result = {}
        result['SceneIds'] = self.scene_ids
        return result

    def from_map(self, map={}):
        self.scene_ids = map.get('SceneIds')
        return self


class RemoveScenesResponse(TeaModel):
    def __init__(self, request_id=None, message=None, code=None, success=None, http_status_code=None):
        self.request_id = request_id
        self.message = message
        self.code = code
        self.success = success
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class DescribeReportRequest(TeaModel):
    def __init__(self, report_id=None):
        self.report_id = report_id

    def validate(self):
        self.validate_required(self.report_id, 'report_id')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        return self


class DescribeReportResponse(TeaModel):
    def __init__(self, average_concurrency=None, avg_bw=None, success_rate_req=None, end_time_ts=None, start_time_ts=None, total_agents=None, request_count=None, rps_limit=None, alive_agents=None, max_tps=None, concurrency_limit=None, max_concurrency=None, scene_deleted=None, duration=None, max_bw=None, vum=None, fail_count_biz=None, fail_count_req=None, success_rate_biz=None, request_id=None, code=None, message=None, http_status_code=None, success=None, report_view=None, charge_type=None, agents_locations=None, relations=None, scene_snapshot=None):
        self.average_concurrency = average_concurrency
        self.avg_bw = avg_bw
        self.success_rate_req = success_rate_req
        self.end_time_ts = end_time_ts
        self.start_time_ts = start_time_ts
        self.total_agents = total_agents
        self.request_count = request_count
        self.rps_limit = rps_limit
        self.alive_agents = alive_agents
        self.max_tps = max_tps
        self.concurrency_limit = concurrency_limit
        self.max_concurrency = max_concurrency
        self.scene_deleted = scene_deleted
        self.duration = duration
        self.max_bw = max_bw
        self.vum = vum
        self.fail_count_biz = fail_count_biz
        self.fail_count_req = fail_count_req
        self.success_rate_biz = success_rate_biz
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.report_view = report_view
        self.charge_type = charge_type
        self.agents_locations = agents_locations
        self.relations = []
        self.scene_snapshot = scene_snapshot

    def validate(self):
        self.validate_required(self.average_concurrency, 'average_concurrency')
        self.validate_required(self.avg_bw, 'avg_bw')
        self.validate_required(self.success_rate_req, 'success_rate_req')
        self.validate_required(self.end_time_ts, 'end_time_ts')
        self.validate_required(self.start_time_ts, 'start_time_ts')
        self.validate_required(self.total_agents, 'total_agents')
        self.validate_required(self.request_count, 'request_count')
        self.validate_required(self.rps_limit, 'rps_limit')
        self.validate_required(self.alive_agents, 'alive_agents')
        self.validate_required(self.max_tps, 'max_tps')
        self.validate_required(self.concurrency_limit, 'concurrency_limit')
        self.validate_required(self.max_concurrency, 'max_concurrency')
        self.validate_required(self.scene_deleted, 'scene_deleted')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.max_bw, 'max_bw')
        self.validate_required(self.vum, 'vum')
        self.validate_required(self.fail_count_biz, 'fail_count_biz')
        self.validate_required(self.fail_count_req, 'fail_count_req')
        self.validate_required(self.success_rate_biz, 'success_rate_biz')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.report_view, 'report_view')
        self.validate_required(self.charge_type, 'charge_type')
        self.validate_required(self.agents_locations, 'agents_locations')
        self.validate_required(self.relations, 'relations')
        if self.relations:
            for k in self.relations:
                if k :
                    k.validate()
        self.validate_required(self.scene_snapshot, 'scene_snapshot')
        if self.scene_snapshot:
            self.scene_snapshot.validate()

    def to_map(self):
        result = {}
        result['AverageConcurrency'] = self.average_concurrency
        result['AvgBw'] = self.avg_bw
        result['SuccessRateReq'] = self.success_rate_req
        result['EndTimeTS'] = self.end_time_ts
        result['StartTimeTS'] = self.start_time_ts
        result['TotalAgents'] = self.total_agents
        result['RequestCount'] = self.request_count
        result['RpsLimit'] = self.rps_limit
        result['AliveAgents'] = self.alive_agents
        result['MaxTps'] = self.max_tps
        result['ConcurrencyLimit'] = self.concurrency_limit
        result['MaxConcurrency'] = self.max_concurrency
        result['SceneDeleted'] = self.scene_deleted
        result['Duration'] = self.duration
        result['MaxBw'] = self.max_bw
        result['Vum'] = self.vum
        result['FailCountBiz'] = self.fail_count_biz
        result['FailCountReq'] = self.fail_count_req
        result['SuccessRateBiz'] = self.success_rate_biz
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['ReportView'] = self.report_view
        result['ChargeType'] = self.charge_type
        result['AgentsLocations'] = self.agents_locations
        result['Relations'] = []
        if self.relations is not None:
            for k in self.relations:
                result['Relations'].append(k.to_map() if k else None)
        else:
            result['Relations'] = None
        if self.scene_snapshot is not None:
            result['SceneSnapshot'] = self.scene_snapshot.to_map()
        else:
            result['SceneSnapshot'] = None
        return result

    def from_map(self, map={}):
        self.average_concurrency = map.get('AverageConcurrency')
        self.avg_bw = map.get('AvgBw')
        self.success_rate_req = map.get('SuccessRateReq')
        self.end_time_ts = map.get('EndTimeTS')
        self.start_time_ts = map.get('StartTimeTS')
        self.total_agents = map.get('TotalAgents')
        self.request_count = map.get('RequestCount')
        self.rps_limit = map.get('RpsLimit')
        self.alive_agents = map.get('AliveAgents')
        self.max_tps = map.get('MaxTps')
        self.concurrency_limit = map.get('ConcurrencyLimit')
        self.max_concurrency = map.get('MaxConcurrency')
        self.scene_deleted = map.get('SceneDeleted')
        self.duration = map.get('Duration')
        self.max_bw = map.get('MaxBw')
        self.vum = map.get('Vum')
        self.fail_count_biz = map.get('FailCountBiz')
        self.fail_count_req = map.get('FailCountReq')
        self.success_rate_biz = map.get('SuccessRateBiz')
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.report_view = map.get('ReportView')
        self.charge_type = map.get('ChargeType')
        self.agents_locations = map.get('AgentsLocations')
        self.relations = []
        if map.get('Relations') is not None:
            for k in map.get('Relations'):
                temp_model = DescribeReportResponseRelations()
                temp_model = temp_model.from_map(k)
                self.relations.append(temp_model)
        else:
            self.relations = None
        if map.get('SceneSnapshot') is not None:
            temp_model = DescribeReportResponseSceneSnapshot()
            self.scene_snapshot = temp_model.from_map(map['SceneSnapshot'])
        else:
            self.scene_snapshot = None
        return self


class DescribeReportResponseRelationsNodes(TeaModel):
    def __init__(self, type=None, id=None, name=None, config=None):
        self.type = type
        self.id = id
        self.name = name
        self.config = {}

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.config, 'config')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Id'] = self.id
        result['Name'] = self.name
        result['Config'] = self.config
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.config = map.get('Config')
        return self


class DescribeReportResponseRelations(TeaModel):
    def __init__(self, name=None, id=None, disabled=None, headers=None, relation_test_config=None, nodes=None):
        self.name = name
        self.id = id
        self.disabled = disabled
        self.headers = {}
        self.relation_test_config = {}
        self.nodes = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.id, 'id')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.relation_test_config, 'relation_test_config')
        self.validate_required(self.nodes, 'nodes')
        if self.nodes:
            for k in self.nodes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Id'] = self.id
        result['Disabled'] = self.disabled
        result['Headers'] = self.headers
        result['RelationTestConfig'] = self.relation_test_config
        result['Nodes'] = []
        if self.nodes is not None:
            for k in self.nodes:
                result['Nodes'].append(k.to_map() if k else None)
        else:
            result['Nodes'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.id = map.get('Id')
        self.disabled = map.get('Disabled')
        self.headers = map.get('Headers')
        self.relation_test_config = map.get('RelationTestConfig')
        self.nodes = []
        if map.get('Nodes') is not None:
            for k in map.get('Nodes'):
                temp_model = DescribeReportResponseRelationsNodes()
                temp_model = temp_model.from_map(k)
                self.nodes.append(temp_model)
        else:
            self.nodes = None
        return self


class DescribeReportResponseSceneSnapshot(TeaModel):
    def __init__(self, type=None, scene_name=None, test_config=None, status=None, exec_status=None):
        self.type = type
        self.scene_name = scene_name
        self.test_config = test_config
        self.status = status
        self.exec_status = exec_status

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.scene_name, 'scene_name')
        self.validate_required(self.test_config, 'test_config')
        self.validate_required(self.status, 'status')
        self.validate_required(self.exec_status, 'exec_status')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['SceneName'] = self.scene_name
        result['TestConfig'] = self.test_config
        result['Status'] = self.status
        result['ExecStatus'] = self.exec_status
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.scene_name = map.get('SceneName')
        self.test_config = map.get('TestConfig')
        self.status = map.get('Status')
        self.exec_status = map.get('ExecStatus')
        return self
class ListScenesRequest(TeaModel):
    def __init__(self, keywords=None, page_number=None, page_size=None):
        self.keywords = keywords
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['Keywords'] = self.keywords
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.keywords = map.get('Keywords')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListScenesResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, success=None, page_number=None, page_size=None, total_count=None, scenes=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.success = success
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.scenes = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.scenes, 'scenes')
        if self.scenes:
            for k in self.scenes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Success'] = self.success
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['Scenes'] = []
        if self.scenes is not None:
            for k in self.scenes:
                result['Scenes'].append(k.to_map() if k else None)
        else:
            result['Scenes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.success = map.get('Success')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.scenes = []
        if map.get('Scenes') is not None:
            for k in map.get('Scenes'):
                temp_model = ListScenesResponseScenes()
                temp_model = temp_model.from_map(k)
                self.scenes.append(temp_model)
        else:
            self.scenes = None
        return self


class ListScenesResponseScenes(TeaModel):
    def __init__(self, scene_id=None, scene_name=None, duration=None, modified_time=None, scene_type=None, cronable=None, exec_status=None, status=None, allspark_id=None, agent_pool=None):
        self.scene_id = scene_id
        self.scene_name = scene_name
        self.duration = duration
        self.modified_time = modified_time
        self.scene_type = scene_type
        self.cronable = cronable
        self.exec_status = exec_status
        self.status = status
        self.allspark_id = allspark_id
        self.agent_pool = agent_pool

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.scene_name, 'scene_name')
        self.validate_required(self.duration, 'duration')
        self.validate_required(self.modified_time, 'modified_time')
        self.validate_required(self.scene_type, 'scene_type')
        self.validate_required(self.cronable, 'cronable')
        self.validate_required(self.exec_status, 'exec_status')
        self.validate_required(self.status, 'status')
        self.validate_required(self.allspark_id, 'allspark_id')
        self.validate_required(self.agent_pool, 'agent_pool')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['SceneName'] = self.scene_name
        result['Duration'] = self.duration
        result['ModifiedTime'] = self.modified_time
        result['SceneType'] = self.scene_type
        result['Cronable'] = self.cronable
        result['ExecStatus'] = self.exec_status
        result['Status'] = self.status
        result['AllsparkId'] = self.allspark_id
        result['AgentPool'] = self.agent_pool
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.scene_name = map.get('SceneName')
        self.duration = map.get('Duration')
        self.modified_time = map.get('ModifiedTime')
        self.scene_type = map.get('SceneType')
        self.cronable = map.get('Cronable')
        self.exec_status = map.get('ExecStatus')
        self.status = map.get('Status')
        self.allspark_id = map.get('AllsparkId')
        self.agent_pool = map.get('AgentPool')
        return self
class DescribeSceneRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class DescribeSceneResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, http_status_code=None, success=None, scene=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.scene = scene

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.scene, 'scene')
        if self.scene:
            self.scene.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        if self.scene is not None:
            result['Scene'] = self.scene.to_map()
        else:
            result['Scene'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        if map.get('Scene') is not None:
            temp_model = DescribeSceneResponseScene()
            self.scene = temp_model.from_map(map['Scene'])
        else:
            self.scene = None
        return self


class DescribeSceneResponseSceneRelationsNodes(TeaModel):
    def __init__(self, node_id=None, name=None, node_type=None, config=None, params=None):
        self.node_id = node_id
        self.name = name
        self.node_type = node_type
        self.config = config
        self.params = params

    def validate(self):
        self.validate_required(self.node_id, 'node_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.node_type, 'node_type')
        self.validate_required(self.config, 'config')
        self.validate_required(self.params, 'params')

    def to_map(self):
        result = {}
        result['NodeId'] = self.node_id
        result['Name'] = self.name
        result['NodeType'] = self.node_type
        result['Config'] = self.config
        result['Params'] = self.params
        return result

    def from_map(self, map={}):
        self.node_id = map.get('NodeId')
        self.name = map.get('Name')
        self.node_type = map.get('NodeType')
        self.config = map.get('Config')
        self.params = map.get('Params')
        return self


class DescribeSceneResponseSceneRelationsRelationTestConfig(TeaModel):
    def __init__(self, begin_step=None, increment=None, end_step=None):
        self.begin_step = begin_step
        self.increment = increment
        self.end_step = end_step

    def validate(self):
        self.validate_required(self.begin_step, 'begin_step')
        self.validate_required(self.increment, 'increment')
        self.validate_required(self.end_step, 'end_step')

    def to_map(self):
        result = {}
        result['BeginStep'] = self.begin_step
        result['Increment'] = self.increment
        result['EndStep'] = self.end_step
        return result

    def from_map(self, map={}):
        self.begin_step = map.get('BeginStep')
        self.increment = map.get('Increment')
        self.end_step = map.get('EndStep')
        return self


class DescribeSceneResponseSceneRelations(TeaModel):
    def __init__(self, id=None, name=None, disabled=None, headers=None, nodes=None, relation_test_config=None):
        self.id = id
        self.name = name
        self.disabled = disabled
        self.headers = {}
        self.nodes = []
        self.relation_test_config = relation_test_config

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.nodes, 'nodes')
        if self.nodes:
            for k in self.nodes:
                if k :
                    k.validate()
        self.validate_required(self.relation_test_config, 'relation_test_config')
        if self.relation_test_config:
            self.relation_test_config.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Disabled'] = self.disabled
        result['Headers'] = self.headers
        result['Nodes'] = []
        if self.nodes is not None:
            for k in self.nodes:
                result['Nodes'].append(k.to_map() if k else None)
        else:
            result['Nodes'] = None
        if self.relation_test_config is not None:
            result['RelationTestConfig'] = self.relation_test_config.to_map()
        else:
            result['RelationTestConfig'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.disabled = map.get('Disabled')
        self.headers = map.get('Headers')
        self.nodes = []
        if map.get('Nodes') is not None:
            for k in map.get('Nodes'):
                temp_model = DescribeSceneResponseSceneRelationsNodes()
                temp_model = temp_model.from_map(k)
                self.nodes.append(temp_model)
        else:
            self.nodes = None
        if map.get('RelationTestConfig') is not None:
            temp_model = DescribeSceneResponseSceneRelationsRelationTestConfig()
            self.relation_test_config = temp_model.from_map(map['RelationTestConfig'])
        else:
            self.relation_test_config = None
        return self


class DescribeSceneResponseSceneVips(TeaModel):
    def __init__(self, domain=None, enabled=None, ips=None):
        self.domain = domain
        self.enabled = enabled
        self.ips = []

    def validate(self):
        self.validate_required(self.domain, 'domain')
        self.validate_required(self.enabled, 'enabled')
        self.validate_required(self.ips, 'ips')

    def to_map(self):
        result = {}
        result['Domain'] = self.domain
        result['Enabled'] = self.enabled
        result['Ips'] = []
        if self.ips is not None:
            for k in self.ips:
                result['Ips'].append(k)
        else:
            result['Ips'] = None
        return result

    def from_map(self, map={}):
        self.domain = map.get('Domain')
        self.enabled = map.get('Enabled')
        self.ips = []
        if map.get('Ips') is not None:
            for k in map.get('Ips'):
                self.ips.append(k)
        else:
            self.ips = None
        return self


class DescribeSceneResponseSceneFilesExportedParams(TeaModel):
    def __init__(self, name=None, column=None):
        self.name = name
        self.column = column

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.column, 'column')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Column'] = self.column
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.column = map.get('Column')
        return self


class DescribeSceneResponseSceneFiles(TeaModel):
    def __init__(self, file_key=None, file_name=None, skip_first_line=None, preview_data=None, remote_url=None, oss_url=None, columns=None, processed_line_count=None, biz_type=None, exports=None, create_time=None, use_once=None, delimiter=None, length=None, line_count=None, exported_params=None):
        self.file_key = file_key
        self.file_name = file_name
        self.skip_first_line = skip_first_line
        self.preview_data = preview_data
        self.remote_url = remote_url
        self.oss_url = oss_url
        self.columns = columns
        self.processed_line_count = processed_line_count
        self.biz_type = biz_type
        self.exports = exports
        self.create_time = create_time
        self.use_once = use_once
        self.delimiter = delimiter
        self.length = length
        self.line_count = line_count
        self.exported_params = []

    def validate(self):
        self.validate_required(self.file_key, 'file_key')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.skip_first_line, 'skip_first_line')
        self.validate_required(self.preview_data, 'preview_data')
        self.validate_required(self.remote_url, 'remote_url')
        self.validate_required(self.oss_url, 'oss_url')
        self.validate_required(self.columns, 'columns')
        self.validate_required(self.processed_line_count, 'processed_line_count')
        self.validate_required(self.biz_type, 'biz_type')
        self.validate_required(self.exports, 'exports')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.use_once, 'use_once')
        self.validate_required(self.delimiter, 'delimiter')
        self.validate_required(self.length, 'length')
        self.validate_required(self.line_count, 'line_count')
        self.validate_required(self.exported_params, 'exported_params')
        if self.exported_params:
            for k in self.exported_params:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileKey'] = self.file_key
        result['FileName'] = self.file_name
        result['SkipFirstLine'] = self.skip_first_line
        result['PreviewData'] = self.preview_data
        result['RemoteUrl'] = self.remote_url
        result['OssUrl'] = self.oss_url
        result['Columns'] = self.columns
        result['ProcessedLineCount'] = self.processed_line_count
        result['BizType'] = self.biz_type
        result['Exports'] = self.exports
        result['CreateTime'] = self.create_time
        result['UseOnce'] = self.use_once
        result['Delimiter'] = self.delimiter
        result['Length'] = self.length
        result['LineCount'] = self.line_count
        result['ExportedParams'] = []
        if self.exported_params is not None:
            for k in self.exported_params:
                result['ExportedParams'].append(k.to_map() if k else None)
        else:
            result['ExportedParams'] = None
        return result

    def from_map(self, map={}):
        self.file_key = map.get('FileKey')
        self.file_name = map.get('FileName')
        self.skip_first_line = map.get('SkipFirstLine')
        self.preview_data = map.get('PreviewData')
        self.remote_url = map.get('RemoteUrl')
        self.oss_url = map.get('OssUrl')
        self.columns = map.get('Columns')
        self.processed_line_count = map.get('ProcessedLineCount')
        self.biz_type = map.get('BizType')
        self.exports = map.get('Exports')
        self.create_time = map.get('CreateTime')
        self.use_once = map.get('UseOnce')
        self.delimiter = map.get('Delimiter')
        self.length = map.get('Length')
        self.line_count = map.get('LineCount')
        self.exported_params = []
        if map.get('ExportedParams') is not None:
            for k in map.get('ExportedParams'):
                temp_model = DescribeSceneResponseSceneFilesExportedParams()
                temp_model = temp_model.from_map(k)
                self.exported_params.append(temp_model)
        else:
            self.exported_params = None
        return self


class DescribeSceneResponseSceneStatus(TeaModel):
    def __init__(self, operations=None, tips=None, debugging=None, testing=None, is_cronable=None, is_reusable=None, cron_editable=None):
        self.operations = {}
        self.tips = tips
        self.debugging = debugging
        self.testing = testing
        self.is_cronable = is_cronable
        self.is_reusable = is_reusable
        self.cron_editable = cron_editable

    def validate(self):
        self.validate_required(self.operations, 'operations')
        self.validate_required(self.tips, 'tips')
        self.validate_required(self.debugging, 'debugging')
        self.validate_required(self.testing, 'testing')
        self.validate_required(self.is_cronable, 'is_cronable')
        self.validate_required(self.is_reusable, 'is_reusable')
        self.validate_required(self.cron_editable, 'cron_editable')

    def to_map(self):
        result = {}
        result['Operations'] = self.operations
        result['Tips'] = self.tips
        result['Debugging'] = self.debugging
        result['Testing'] = self.testing
        result['IsCronable'] = self.is_cronable
        result['IsReusable'] = self.is_reusable
        result['CronEditable'] = self.cron_editable
        return result

    def from_map(self, map={}):
        self.operations = map.get('Operations')
        self.tips = map.get('Tips')
        self.debugging = map.get('Debugging')
        self.testing = map.get('Testing')
        self.is_cronable = map.get('IsCronable')
        self.is_reusable = map.get('IsReusable')
        self.cron_editable = map.get('CronEditable')
        return self


class DescribeSceneResponseSceneTestConfigConditions(TeaModel):
    def __init__(self, region=None, isp=None, amount=None):
        self.region = region
        self.isp = isp
        self.amount = amount

    def validate(self):
        self.validate_required(self.region, 'region')
        self.validate_required(self.isp, 'isp')
        self.validate_required(self.amount, 'amount')

    def to_map(self):
        result = {}
        result['Region'] = self.region
        result['Isp'] = self.isp
        result['Amount'] = self.amount
        return result

    def from_map(self, map={}):
        self.region = map.get('Region')
        self.isp = map.get('Isp')
        self.amount = map.get('Amount')
        return self


class DescribeSceneResponseSceneTestConfigVpcConfig(TeaModel):
    def __init__(self, region_id=None, v_switch_id=None, security_group_id=None, vpc_id=None):
        self.region_id = region_id
        self.v_switch_id = v_switch_id
        self.security_group_id = security_group_id
        self.vpc_id = vpc_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.v_switch_id, 'v_switch_id')
        self.validate_required(self.security_group_id, 'security_group_id')
        self.validate_required(self.vpc_id, 'vpc_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['VSwitchId'] = self.v_switch_id
        result['SecurityGroupId'] = self.security_group_id
        result['VpcId'] = self.vpc_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.v_switch_id = map.get('VSwitchId')
        self.security_group_id = map.get('SecurityGroupId')
        self.vpc_id = map.get('VpcId')
        return self


class DescribeSceneResponseSceneTestConfig(TeaModel):
    def __init__(self, mode=None, max_duration=None, auto_step=None, increment=None, keep_time=None, agent_pool=None, concurrency_limit=None, custom_traffic=None, custom_config=None, intelligent_test=None, agent_count=None, tps_limit=None, condition_satisfied_exactly=None, conditions=None, vpc_config=None):
        self.mode = mode
        self.max_duration = max_duration
        self.auto_step = auto_step
        self.increment = increment
        self.keep_time = keep_time
        self.agent_pool = agent_pool
        self.concurrency_limit = concurrency_limit
        self.custom_traffic = custom_traffic
        self.custom_config = custom_config
        self.intelligent_test = intelligent_test
        self.agent_count = agent_count
        self.tps_limit = tps_limit
        self.condition_satisfied_exactly = condition_satisfied_exactly
        self.conditions = []
        self.vpc_config = vpc_config

    def validate(self):
        self.validate_required(self.mode, 'mode')
        self.validate_required(self.max_duration, 'max_duration')
        self.validate_required(self.auto_step, 'auto_step')
        self.validate_required(self.increment, 'increment')
        self.validate_required(self.keep_time, 'keep_time')
        self.validate_required(self.agent_pool, 'agent_pool')
        self.validate_required(self.concurrency_limit, 'concurrency_limit')
        self.validate_required(self.custom_traffic, 'custom_traffic')
        self.validate_required(self.custom_config, 'custom_config')
        self.validate_required(self.intelligent_test, 'intelligent_test')
        self.validate_required(self.agent_count, 'agent_count')
        self.validate_required(self.tps_limit, 'tps_limit')
        self.validate_required(self.condition_satisfied_exactly, 'condition_satisfied_exactly')
        self.validate_required(self.conditions, 'conditions')
        if self.conditions:
            for k in self.conditions:
                if k :
                    k.validate()
        self.validate_required(self.vpc_config, 'vpc_config')
        if self.vpc_config:
            self.vpc_config.validate()

    def to_map(self):
        result = {}
        result['Mode'] = self.mode
        result['MaxDuration'] = self.max_duration
        result['AutoStep'] = self.auto_step
        result['Increment'] = self.increment
        result['KeepTime'] = self.keep_time
        result['AgentPool'] = self.agent_pool
        result['ConcurrencyLimit'] = self.concurrency_limit
        result['CustomTraffic'] = self.custom_traffic
        result['CustomConfig'] = self.custom_config
        result['IntelligentTest'] = self.intelligent_test
        result['AgentCount'] = self.agent_count
        result['TpsLimit'] = self.tps_limit
        result['ConditionSatisfiedExactly'] = self.condition_satisfied_exactly
        result['Conditions'] = []
        if self.conditions is not None:
            for k in self.conditions:
                result['Conditions'].append(k.to_map() if k else None)
        else:
            result['Conditions'] = None
        if self.vpc_config is not None:
            result['VpcConfig'] = self.vpc_config.to_map()
        else:
            result['VpcConfig'] = None
        return result

    def from_map(self, map={}):
        self.mode = map.get('Mode')
        self.max_duration = map.get('MaxDuration')
        self.auto_step = map.get('AutoStep')
        self.increment = map.get('Increment')
        self.keep_time = map.get('KeepTime')
        self.agent_pool = map.get('AgentPool')
        self.concurrency_limit = map.get('ConcurrencyLimit')
        self.custom_traffic = map.get('CustomTraffic')
        self.custom_config = map.get('CustomConfig')
        self.intelligent_test = map.get('IntelligentTest')
        self.agent_count = map.get('AgentCount')
        self.tps_limit = map.get('TpsLimit')
        self.condition_satisfied_exactly = map.get('ConditionSatisfiedExactly')
        self.conditions = []
        if map.get('Conditions') is not None:
            for k in map.get('Conditions'):
                temp_model = DescribeSceneResponseSceneTestConfigConditions()
                temp_model = temp_model.from_map(k)
                self.conditions.append(temp_model)
        else:
            self.conditions = None
        if map.get('VpcConfig') is not None:
            temp_model = DescribeSceneResponseSceneTestConfigVpcConfig()
            self.vpc_config = temp_model.from_map(map['VpcConfig'])
        else:
            self.vpc_config = None
        return self


class DescribeSceneResponseScene(TeaModel):
    def __init__(self, id=None, name=None, type=None, variables=None, headers=None, creator=None, modifier=None, create_time=None, modify_time=None, sla=None, relations=None, vips=None, files=None, status=None, test_config=None):
        self.id = id
        self.name = name
        self.type = type
        self.variables = {}
        self.headers = {}
        self.creator = creator
        self.modifier = modifier
        self.create_time = create_time
        self.modify_time = modify_time
        self.sla = sla
        self.relations = []
        self.vips = []
        self.files = []
        self.status = status
        self.test_config = test_config

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.variables, 'variables')
        self.validate_required(self.headers, 'headers')
        self.validate_required(self.creator, 'creator')
        self.validate_required(self.modifier, 'modifier')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.modify_time, 'modify_time')
        self.validate_required(self.sla, 'sla')
        self.validate_required(self.relations, 'relations')
        if self.relations:
            for k in self.relations:
                if k :
                    k.validate()
        self.validate_required(self.vips, 'vips')
        if self.vips:
            for k in self.vips:
                if k :
                    k.validate()
        self.validate_required(self.files, 'files')
        if self.files:
            for k in self.files:
                if k :
                    k.validate()
        self.validate_required(self.status, 'status')
        if self.status:
            self.status.validate()
        self.validate_required(self.test_config, 'test_config')
        if self.test_config:
            self.test_config.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Type'] = self.type
        result['Variables'] = self.variables
        result['Headers'] = self.headers
        result['Creator'] = self.creator
        result['Modifier'] = self.modifier
        result['CreateTime'] = self.create_time
        result['ModifyTime'] = self.modify_time
        result['Sla'] = self.sla
        result['Relations'] = []
        if self.relations is not None:
            for k in self.relations:
                result['Relations'].append(k.to_map() if k else None)
        else:
            result['Relations'] = None
        result['Vips'] = []
        if self.vips is not None:
            for k in self.vips:
                result['Vips'].append(k.to_map() if k else None)
        else:
            result['Vips'] = None
        result['Files'] = []
        if self.files is not None:
            for k in self.files:
                result['Files'].append(k.to_map() if k else None)
        else:
            result['Files'] = None
        if self.status is not None:
            result['Status'] = self.status.to_map()
        else:
            result['Status'] = None
        if self.test_config is not None:
            result['TestConfig'] = self.test_config.to_map()
        else:
            result['TestConfig'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.type = map.get('Type')
        self.variables = map.get('Variables')
        self.headers = map.get('Headers')
        self.creator = map.get('Creator')
        self.modifier = map.get('Modifier')
        self.create_time = map.get('CreateTime')
        self.modify_time = map.get('ModifyTime')
        self.sla = map.get('Sla')
        self.relations = []
        if map.get('Relations') is not None:
            for k in map.get('Relations'):
                temp_model = DescribeSceneResponseSceneRelations()
                temp_model = temp_model.from_map(k)
                self.relations.append(temp_model)
        else:
            self.relations = None
        self.vips = []
        if map.get('Vips') is not None:
            for k in map.get('Vips'):
                temp_model = DescribeSceneResponseSceneVips()
                temp_model = temp_model.from_map(k)
                self.vips.append(temp_model)
        else:
            self.vips = None
        self.files = []
        if map.get('Files') is not None:
            for k in map.get('Files'):
                temp_model = DescribeSceneResponseSceneFiles()
                temp_model = temp_model.from_map(k)
                self.files.append(temp_model)
        else:
            self.files = None
        if map.get('Status') is not None:
            temp_model = DescribeSceneResponseSceneStatus()
            self.status = temp_model.from_map(map['Status'])
        else:
            self.status = None
        if map.get('TestConfig') is not None:
            temp_model = DescribeSceneResponseSceneTestConfig()
            self.test_config = temp_model.from_map(map['TestConfig'])
        else:
            self.test_config = None
        return self
class DescribeSceneRunningStatusRequest(TeaModel):
    def __init__(self, scene_id=None):
        self.scene_id = scene_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        return self


class DescribeSceneRunningStatusResponse(TeaModel):
    def __init__(self, tips=None, total_request_count=None, vum=None, request_bps=None, response_bps=None, failed_request_count=None, failed_business_count=None, concurrency=None, concurrency_limit=None, tps=None, tps_limit=None, alive_agents=None, total_agents=None, seg_90rt=None, average_rt=None, report_id=None, begin_time=None, current_time=None, code=None, message=None, http_status_code=None, success=None, use_custom_pool=None, request_id=None, status=None, has_report=None, has_error=None, agent_location=None, chain_monitor_data_list=None):
        self.tips = tips
        self.total_request_count = total_request_count
        self.vum = vum
        self.request_bps = request_bps
        self.response_bps = response_bps
        self.failed_request_count = failed_request_count
        self.failed_business_count = failed_business_count
        self.concurrency = concurrency
        self.concurrency_limit = concurrency_limit
        self.tps = tps
        self.tps_limit = tps_limit
        self.alive_agents = alive_agents
        self.total_agents = total_agents
        self.seg_90rt = seg_90rt
        self.average_rt = average_rt
        self.report_id = report_id
        self.begin_time = begin_time
        self.current_time = current_time
        self.code = code
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.use_custom_pool = use_custom_pool
        self.request_id = request_id
        self.status = status
        self.has_report = has_report
        self.has_error = has_error
        self.agent_location = agent_location
        self.chain_monitor_data_list = []

    def validate(self):
        self.validate_required(self.tips, 'tips')
        self.validate_required(self.total_request_count, 'total_request_count')
        self.validate_required(self.vum, 'vum')
        self.validate_required(self.request_bps, 'request_bps')
        self.validate_required(self.response_bps, 'response_bps')
        self.validate_required(self.failed_request_count, 'failed_request_count')
        self.validate_required(self.failed_business_count, 'failed_business_count')
        self.validate_required(self.concurrency, 'concurrency')
        self.validate_required(self.concurrency_limit, 'concurrency_limit')
        self.validate_required(self.tps, 'tps')
        self.validate_required(self.tps_limit, 'tps_limit')
        self.validate_required(self.alive_agents, 'alive_agents')
        self.validate_required(self.total_agents, 'total_agents')
        self.validate_required(self.seg_90rt, 'seg_90rt')
        self.validate_required(self.average_rt, 'average_rt')
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.current_time, 'current_time')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.use_custom_pool, 'use_custom_pool')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.has_report, 'has_report')
        self.validate_required(self.has_error, 'has_error')
        self.validate_required(self.agent_location, 'agent_location')
        self.validate_required(self.chain_monitor_data_list, 'chain_monitor_data_list')
        if self.chain_monitor_data_list:
            for k in self.chain_monitor_data_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tips'] = self.tips
        result['TotalRequestCount'] = self.total_request_count
        result['Vum'] = self.vum
        result['RequestBps'] = self.request_bps
        result['ResponseBps'] = self.response_bps
        result['FailedRequestCount'] = self.failed_request_count
        result['FailedBusinessCount'] = self.failed_business_count
        result['Concurrency'] = self.concurrency
        result['ConcurrencyLimit'] = self.concurrency_limit
        result['Tps'] = self.tps
        result['TpsLimit'] = self.tps_limit
        result['AliveAgents'] = self.alive_agents
        result['TotalAgents'] = self.total_agents
        result['Seg90Rt'] = self.seg_90rt
        result['AverageRt'] = self.average_rt
        result['ReportId'] = self.report_id
        result['BeginTime'] = self.begin_time
        result['CurrentTime'] = self.current_time
        result['Code'] = self.code
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['UseCustomPool'] = self.use_custom_pool
        result['RequestId'] = self.request_id
        result['Status'] = self.status
        result['HasReport'] = self.has_report
        result['HasError'] = self.has_error
        result['AgentLocation'] = self.agent_location
        result['ChainMonitorDataList'] = []
        if self.chain_monitor_data_list is not None:
            for k in self.chain_monitor_data_list:
                result['ChainMonitorDataList'].append(k.to_map() if k else None)
        else:
            result['ChainMonitorDataList'] = None
        return result

    def from_map(self, map={}):
        self.tips = map.get('Tips')
        self.total_request_count = map.get('TotalRequestCount')
        self.vum = map.get('Vum')
        self.request_bps = map.get('RequestBps')
        self.response_bps = map.get('ResponseBps')
        self.failed_request_count = map.get('FailedRequestCount')
        self.failed_business_count = map.get('FailedBusinessCount')
        self.concurrency = map.get('Concurrency')
        self.concurrency_limit = map.get('ConcurrencyLimit')
        self.tps = map.get('Tps')
        self.tps_limit = map.get('TpsLimit')
        self.alive_agents = map.get('AliveAgents')
        self.total_agents = map.get('TotalAgents')
        self.seg_90rt = map.get('Seg90Rt')
        self.average_rt = map.get('AverageRt')
        self.report_id = map.get('ReportId')
        self.begin_time = map.get('BeginTime')
        self.current_time = map.get('CurrentTime')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.use_custom_pool = map.get('UseCustomPool')
        self.request_id = map.get('RequestId')
        self.status = map.get('Status')
        self.has_report = map.get('HasReport')
        self.has_error = map.get('HasError')
        self.agent_location = map.get('AgentLocation')
        self.chain_monitor_data_list = []
        if map.get('ChainMonitorDataList') is not None:
            for k in map.get('ChainMonitorDataList'):
                temp_model = DescribeSceneRunningStatusResponseChainMonitorDataList()
                temp_model = temp_model.from_map(k)
                self.chain_monitor_data_list.append(temp_model)
        else:
            self.chain_monitor_data_list = None
        return self


class DescribeSceneRunningStatusResponseChainMonitorDataListQpsSummary(TeaModel):
    def __init__(self, status_code=None, qps=None, total_count=None):
        self.status_code = status_code
        self.qps = qps
        self.total_count = total_count

    def validate(self):
        self.validate_required(self.status_code, 'status_code')
        self.validate_required(self.qps, 'qps')
        self.validate_required(self.total_count, 'total_count')

    def to_map(self):
        result = {}
        result['StatusCode'] = self.status_code
        result['Qps'] = self.qps
        result['TotalCount'] = self.total_count
        return result

    def from_map(self, map={}):
        self.status_code = map.get('StatusCode')
        self.qps = map.get('Qps')
        self.total_count = map.get('TotalCount')
        return self


class DescribeSceneRunningStatusResponseChainMonitorDataListCheckPointResult(TeaModel):
    def __init__(self, succeed_business_count=None, failed_business_count=None, succeed_business_qps=None, failed_business_qps=None):
        self.succeed_business_count = succeed_business_count
        self.failed_business_count = failed_business_count
        self.succeed_business_qps = succeed_business_qps
        self.failed_business_qps = failed_business_qps

    def validate(self):
        self.validate_required(self.succeed_business_count, 'succeed_business_count')
        self.validate_required(self.failed_business_count, 'failed_business_count')
        self.validate_required(self.succeed_business_qps, 'succeed_business_qps')
        self.validate_required(self.failed_business_qps, 'failed_business_qps')

    def to_map(self):
        result = {}
        result['SucceedBusinessCount'] = self.succeed_business_count
        result['FailedBusinessCount'] = self.failed_business_count
        result['SucceedBusinessQps'] = self.succeed_business_qps
        result['FailedBusinessQps'] = self.failed_business_qps
        return result

    def from_map(self, map={}):
        self.succeed_business_count = map.get('SucceedBusinessCount')
        self.failed_business_count = map.get('FailedBusinessCount')
        self.succeed_business_qps = map.get('SucceedBusinessQps')
        self.failed_business_qps = map.get('FailedBusinessQps')
        return self


class DescribeSceneRunningStatusResponseChainMonitorDataList(TeaModel):
    def __init__(self, chain_id=None, time_point=None, config_qps=None, real_qps=None, concurrency=None, qps_2xx=None, failed_qps=None, average_rt=None, max_rt=None, min_rt=None, count_2xx=None, failed_count=None, queue_size=None, queue_capacity=None, qps_summary=None, check_point_result=None):
        self.chain_id = chain_id
        self.time_point = time_point
        self.config_qps = config_qps
        self.real_qps = real_qps
        self.concurrency = concurrency
        self.qps_2xx = qps_2xx
        self.failed_qps = failed_qps
        self.average_rt = average_rt
        self.max_rt = max_rt
        self.min_rt = min_rt
        self.count_2xx = count_2xx
        self.failed_count = failed_count
        self.queue_size = queue_size
        self.queue_capacity = queue_capacity
        self.qps_summary = []
        self.check_point_result = check_point_result

    def validate(self):
        self.validate_required(self.chain_id, 'chain_id')
        self.validate_required(self.time_point, 'time_point')
        self.validate_required(self.config_qps, 'config_qps')
        self.validate_required(self.real_qps, 'real_qps')
        self.validate_required(self.concurrency, 'concurrency')
        self.validate_required(self.qps_2xx, 'qps_2xx')
        self.validate_required(self.failed_qps, 'failed_qps')
        self.validate_required(self.average_rt, 'average_rt')
        self.validate_required(self.max_rt, 'max_rt')
        self.validate_required(self.min_rt, 'min_rt')
        self.validate_required(self.count_2xx, 'count_2xx')
        self.validate_required(self.failed_count, 'failed_count')
        self.validate_required(self.queue_size, 'queue_size')
        self.validate_required(self.queue_capacity, 'queue_capacity')
        self.validate_required(self.qps_summary, 'qps_summary')
        if self.qps_summary:
            for k in self.qps_summary:
                if k :
                    k.validate()
        self.validate_required(self.check_point_result, 'check_point_result')
        if self.check_point_result:
            self.check_point_result.validate()

    def to_map(self):
        result = {}
        result['ChainId'] = self.chain_id
        result['TimePoint'] = self.time_point
        result['ConfigQps'] = self.config_qps
        result['RealQps'] = self.real_qps
        result['Concurrency'] = self.concurrency
        result['Qps2XX'] = self.qps_2xx
        result['FailedQps'] = self.failed_qps
        result['AverageRt'] = self.average_rt
        result['MaxRt'] = self.max_rt
        result['MinRt'] = self.min_rt
        result['Count2XX'] = self.count_2xx
        result['FailedCount'] = self.failed_count
        result['QueueSize'] = self.queue_size
        result['QueueCapacity'] = self.queue_capacity
        result['QpsSummary'] = []
        if self.qps_summary is not None:
            for k in self.qps_summary:
                result['QpsSummary'].append(k.to_map() if k else None)
        else:
            result['QpsSummary'] = None
        if self.check_point_result is not None:
            result['CheckPointResult'] = self.check_point_result.to_map()
        else:
            result['CheckPointResult'] = None
        return result

    def from_map(self, map={}):
        self.chain_id = map.get('ChainId')
        self.time_point = map.get('TimePoint')
        self.config_qps = map.get('ConfigQps')
        self.real_qps = map.get('RealQps')
        self.concurrency = map.get('Concurrency')
        self.qps_2xx = map.get('Qps2XX')
        self.failed_qps = map.get('FailedQps')
        self.average_rt = map.get('AverageRt')
        self.max_rt = map.get('MaxRt')
        self.min_rt = map.get('MinRt')
        self.count_2xx = map.get('Count2XX')
        self.failed_count = map.get('FailedCount')
        self.queue_size = map.get('QueueSize')
        self.queue_capacity = map.get('QueueCapacity')
        self.qps_summary = []
        if map.get('QpsSummary') is not None:
            for k in map.get('QpsSummary'):
                temp_model = DescribeSceneRunningStatusResponseChainMonitorDataListQpsSummary()
                temp_model = temp_model.from_map(k)
                self.qps_summary.append(temp_model)
        else:
            self.qps_summary = None
        if map.get('CheckPointResult') is not None:
            temp_model = DescribeSceneRunningStatusResponseChainMonitorDataListCheckPointResult()
            self.check_point_result = temp_model.from_map(map['CheckPointResult'])
        else:
            self.check_point_result = None
        return self
class AdjustSceneSpeedRequest(TeaModel):
    def __init__(self, scene_id=None, speed_data=None, content=None):
        self.scene_id = scene_id
        self.speed_data = speed_data
        self.content = content

    def validate(self):
        self.validate_required(self.scene_id, 'scene_id')
        self.validate_required(self.speed_data, 'speed_data')

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['SpeedData'] = self.speed_data
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.speed_data = map.get('SpeedData')
        self.content = map.get('Content')
        return self


class AdjustSceneSpeedResponse(TeaModel):
    def __init__(self, message=None, code=None, success=None, request_id=None, http_status_code=None):
        self.message = message
        self.code = code
        self.success = success
        self.request_id = request_id
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class AdjustRelationSpeedRequest(TeaModel):
    def __init__(self, scene_id=None, speed=None, relation_index=None):
        self.scene_id = scene_id
        self.speed = speed
        self.relation_index = relation_index

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['SceneId'] = self.scene_id
        result['Speed'] = self.speed
        result['RelationIndex'] = self.relation_index
        return result

    def from_map(self, map={}):
        self.scene_id = map.get('SceneId')
        self.speed = map.get('Speed')
        self.relation_index = map.get('RelationIndex')
        return self


class AdjustRelationSpeedResponse(TeaModel):
    def __init__(self, message=None, code=None, success=None, request_id=None, http_status_code=None):
        self.message = message
        self.code = code
        self.success = success
        self.request_id = request_id
        self.http_status_code = http_status_code

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.http_status_code, 'http_status_code')

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['Code'] = self.code
        result['Success'] = self.success
        result['RequestId'] = self.request_id
        result['HttpStatusCode'] = self.http_status_code
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.code = map.get('Code')
        self.success = map.get('Success')
        self.request_id = map.get('RequestId')
        self.http_status_code = map.get('HttpStatusCode')
        return self


class DescribeSamplingLogRequest(TeaModel):
    def __init__(self, report_id=None, chain_id=None, page_number=None, page_size=None, error_code=None, http_response_status=None, rt_range=None):
        self.report_id = report_id
        self.chain_id = chain_id
        self.page_number = page_number
        self.page_size = page_size
        self.error_code = error_code
        self.http_response_status = http_response_status
        self.rt_range = rt_range

    def validate(self):
        self.validate_required(self.report_id, 'report_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['ReportId'] = self.report_id
        result['ChainId'] = self.chain_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['ErrorCode'] = self.error_code
        result['HttpResponseStatus'] = self.http_response_status
        result['RtRange'] = self.rt_range
        return result

    def from_map(self, map={}):
        self.report_id = map.get('ReportId')
        self.chain_id = map.get('ChainId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.error_code = map.get('ErrorCode')
        self.http_response_status = map.get('HttpResponseStatus')
        self.rt_range = map.get('RtRange')
        return self


class DescribeSamplingLogResponse(TeaModel):
    def __init__(self, message=None, http_status_code=None, success=None, code=None, request_id=None, page_number=None, page_size=None, total_count=None, sampling_logs=None):
        self.message = message
        self.http_status_code = http_status_code
        self.success = success
        self.code = code
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.sampling_logs = []

    def validate(self):
        self.validate_required(self.message, 'message')
        self.validate_required(self.http_status_code, 'http_status_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.sampling_logs, 'sampling_logs')
        if self.sampling_logs:
            for k in self.sampling_logs:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Message'] = self.message
        result['HttpStatusCode'] = self.http_status_code
        result['Success'] = self.success
        result['Code'] = self.code
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['SamplingLogs'] = []
        if self.sampling_logs is not None:
            for k in self.sampling_logs:
                result['SamplingLogs'].append(k.to_map() if k else None)
        else:
            result['SamplingLogs'] = None
        return result

    def from_map(self, map={}):
        self.message = map.get('Message')
        self.http_status_code = map.get('HttpStatusCode')
        self.success = map.get('Success')
        self.code = map.get('Code')
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.sampling_logs = []
        if map.get('SamplingLogs') is not None:
            for k in map.get('SamplingLogs'):
                temp_model = DescribeSamplingLogResponseSamplingLogs()
                temp_model = temp_model.from_map(k)
                self.sampling_logs.append(temp_model)
        else:
            self.sampling_logs = None
        return self


class DescribeSamplingLogResponseSamplingLogs(TeaModel):
    def __init__(self, chain_id=None, timestamp=None, http_request_method=None, http_request_body=None, http_request_headers=None, http_request_url=None, http_start_time=None, http_response_body=None, http_response_fail_msg=None, http_response_headers=None, import_content=None, export_config=None, export_content=None, check_result=None, http_timing=None, rt=None, http_response_status=None, trans_id=None, group_tag=None):
        self.chain_id = chain_id
        self.timestamp = timestamp
        self.http_request_method = http_request_method
        self.http_request_body = http_request_body
        self.http_request_headers = http_request_headers
        self.http_request_url = http_request_url
        self.http_start_time = http_start_time
        self.http_response_body = http_response_body
        self.http_response_fail_msg = http_response_fail_msg
        self.http_response_headers = http_response_headers
        self.import_content = import_content
        self.export_config = export_config
        self.export_content = export_content
        self.check_result = check_result
        self.http_timing = http_timing
        self.rt = rt
        self.http_response_status = http_response_status
        self.trans_id = trans_id
        self.group_tag = group_tag

    def validate(self):
        self.validate_required(self.chain_id, 'chain_id')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.http_request_method, 'http_request_method')
        self.validate_required(self.http_request_body, 'http_request_body')
        self.validate_required(self.http_request_headers, 'http_request_headers')
        self.validate_required(self.http_request_url, 'http_request_url')
        self.validate_required(self.http_start_time, 'http_start_time')
        self.validate_required(self.http_response_body, 'http_response_body')
        self.validate_required(self.http_response_fail_msg, 'http_response_fail_msg')
        self.validate_required(self.http_response_headers, 'http_response_headers')
        self.validate_required(self.import_content, 'import_content')
        self.validate_required(self.export_config, 'export_config')
        self.validate_required(self.export_content, 'export_content')
        self.validate_required(self.check_result, 'check_result')
        self.validate_required(self.http_timing, 'http_timing')
        self.validate_required(self.rt, 'rt')
        self.validate_required(self.http_response_status, 'http_response_status')
        self.validate_required(self.trans_id, 'trans_id')
        self.validate_required(self.group_tag, 'group_tag')

    def to_map(self):
        result = {}
        result['ChainId'] = self.chain_id
        result['Timestamp'] = self.timestamp
        result['HttpRequestMethod'] = self.http_request_method
        result['HttpRequestBody'] = self.http_request_body
        result['HttpRequestHeaders'] = self.http_request_headers
        result['HttpRequestUrl'] = self.http_request_url
        result['HttpStartTime'] = self.http_start_time
        result['HttpResponseBody'] = self.http_response_body
        result['HttpResponseFailMsg'] = self.http_response_fail_msg
        result['HttpResponseHeaders'] = self.http_response_headers
        result['ImportContent'] = self.import_content
        result['ExportConfig'] = self.export_config
        result['ExportContent'] = self.export_content
        result['CheckResult'] = self.check_result
        result['HttpTiming'] = self.http_timing
        result['Rt'] = self.rt
        result['HttpResponseStatus'] = self.http_response_status
        result['TransId'] = self.trans_id
        result['GroupTag'] = self.group_tag
        return result

    def from_map(self, map={}):
        self.chain_id = map.get('ChainId')
        self.timestamp = map.get('Timestamp')
        self.http_request_method = map.get('HttpRequestMethod')
        self.http_request_body = map.get('HttpRequestBody')
        self.http_request_headers = map.get('HttpRequestHeaders')
        self.http_request_url = map.get('HttpRequestUrl')
        self.http_start_time = map.get('HttpStartTime')
        self.http_response_body = map.get('HttpResponseBody')
        self.http_response_fail_msg = map.get('HttpResponseFailMsg')
        self.http_response_headers = map.get('HttpResponseHeaders')
        self.import_content = map.get('ImportContent')
        self.export_config = map.get('ExportConfig')
        self.export_content = map.get('ExportContent')
        self.check_result = map.get('CheckResult')
        self.http_timing = map.get('HttpTiming')
        self.rt = map.get('Rt')
        self.http_response_status = map.get('HttpResponseStatus')
        self.trans_id = map.get('TransId')
        self.group_tag = map.get('GroupTag')
        return self

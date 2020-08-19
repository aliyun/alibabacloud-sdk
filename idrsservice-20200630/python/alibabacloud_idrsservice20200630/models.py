# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListTasksRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None, task_group_id=None):
        self.page_index = page_index
        self.page_size = page_size
        self.task_group_id = task_group_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['TaskGroupId'] = self.task_group_id
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.task_group_id = map.get('TaskGroupId')
        return self


class ListTasksResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListTasksResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListTasksResponseDataItems(TeaModel):
    def __init__(self, created_at=None, id=None, status=None, video_meta_url=None, video_url=None):
        self.created_at = created_at
        self.id = id
        self.status = status
        self.video_meta_url = video_meta_url
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.video_meta_url, 'video_meta_url')
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Status'] = self.status
        result['VideoMetaUrl'] = self.video_meta_url
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.status = map.get('Status')
        self.video_meta_url = map.get('VideoMetaUrl')
        self.video_url = map.get('VideoUrl')
        return self


class ListTasksResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListTasksResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class DeleteAppRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class DeleteAppResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class ListAppsRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None):
        self.page_index = page_index
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        return self


class ListAppsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListAppsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListAppsResponseDataItems(TeaModel):
    def __init__(self, created_at=None, department_id=None, department_name=None, disabled=None, id=None, name=None,
                 package_name=None):
        self.created_at = created_at
        self.department_id = department_id
        self.department_name = department_name
        self.disabled = disabled
        self.id = id
        self.name = name
        self.package_name = package_name

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.department_id, 'department_id')
        self.validate_required(self.department_name, 'department_name')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.package_name, 'package_name')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['DepartmentId'] = self.department_id
        result['DepartmentName'] = self.department_name
        result['Disabled'] = self.disabled
        result['Id'] = self.id
        result['Name'] = self.name
        result['PackageName'] = self.package_name
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.department_id = map.get('DepartmentId')
        self.department_name = map.get('DepartmentName')
        self.disabled = map.get('Disabled')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.package_name = map.get('PackageName')
        return self


class ListAppsResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListAppsResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class UpdateAppRequest(TeaModel):
    def __init__(self, id=None, name=None, disabled=None, package_name=None, department_id=None):
        self.id = id
        self.name = name
        self.disabled = disabled
        self.package_name = package_name
        self.department_id = department_id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Disabled'] = self.disabled
        result['PackageName'] = self.package_name
        result['DepartmentId'] = self.department_id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.disabled = map.get('Disabled')
        self.package_name = map.get('PackageName')
        self.department_id = map.get('DepartmentId')
        return self


class UpdateAppResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class ListTaskGroupsRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None, status=None):
        self.page_index = page_index
        self.page_size = page_size
        self.status = status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.status = map.get('Status')
        return self


class ListTaskGroupsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListTaskGroupsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListTaskGroupsResponseDataItems(TeaModel):
    def __init__(self, completed_tasks=None, created_at=None, id=None, name=None, rule_id=None, rule_name=None,
                 status=None, total_tasks=None, task_ids=None):
        self.completed_tasks = completed_tasks
        self.created_at = created_at
        self.id = id
        self.name = name
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.status = status
        self.total_tasks = total_tasks
        self.task_ids = task_ids

    def validate(self):
        self.validate_required(self.completed_tasks, 'completed_tasks')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.total_tasks, 'total_tasks')
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['CompletedTasks'] = self.completed_tasks
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Status'] = self.status
        result['TotalTasks'] = self.total_tasks
        result['TaskIds'] = []
        if self.task_ids is not None:
            for k in self.task_ids:
                result['TaskIds'].append(k)
        else:
            result['TaskIds'] = None
        return result

    def from_map(self, map={}):
        self.completed_tasks = map.get('CompletedTasks')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.status = map.get('Status')
        self.total_tasks = map.get('TotalTasks')
        self.task_ids = []
        if map.get('TaskIds') is not None:
            for k in map.get('TaskIds'):
                self.task_ids.append(k)
        else:
            self.task_ids = None
        return self


class ListTaskGroupsResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListTaskGroupsResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class ListRulesRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None):
        self.page_index = page_index
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        return self


class ListRulesResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListRulesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListRulesResponseDataItems(TeaModel):
    def __init__(self, content=None, created_at=None, id=None, name=None):
        self.content = content
        self.created_at = created_at
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self


class ListRulesResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListRulesResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class ListDetectionsRequest(TeaModel):
    def __init__(self, create_date_from=None, create_date_to=None, department_id=None, page_index=None,
                 page_size=None, recording_type=None, rule_id=None):
        self.create_date_from = create_date_from
        self.create_date_to = create_date_to
        self.department_id = department_id
        self.page_index = page_index
        self.page_size = page_size
        self.recording_type = recording_type
        self.rule_id = rule_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CreateDateFrom'] = self.create_date_from
        result['CreateDateTo'] = self.create_date_to
        result['DepartmentId'] = self.department_id
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['RecordingType'] = self.recording_type
        result['RuleId'] = self.rule_id
        return result

    def from_map(self, map={}):
        self.create_date_from = map.get('CreateDateFrom')
        self.create_date_to = map.get('CreateDateTo')
        self.department_id = map.get('DepartmentId')
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.recording_type = map.get('RecordingType')
        self.rule_id = map.get('RuleId')
        return self


class ListDetectionsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, errors=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.errors = errors
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.errors, 'errors')
        if self.errors:
            for k in self.errors:
                if k:
                    k.validate()
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Errors'] = []
        if self.errors is not None:
            for k in self.errors:
                result['Errors'].append(k.to_map() if k else None)
        else:
            result['Errors'] = None
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.errors = []
        if map.get('Errors') is not None:
            for k in map.get('Errors'):
                temp_model = ListDetectionsResponseErrors()
                temp_model = temp_model.from_map(k)
                self.errors.append(temp_model)
        else:
            self.errors = None
        if map.get('Data') is not None:
            temp_model = ListDetectionsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListDetectionsResponseErrors(TeaModel):
    def __init__(self, field=None, message=None):
        self.field = field
        self.message = message

    def validate(self):
        self.validate_required(self.field, 'field')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['Field'] = self.field
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.field = map.get('Field')
        self.message = map.get('Message')
        return self


class ListDetectionsResponseDataItemsTasks(TeaModel):
    def __init__(self, created_at=None, id=None, status=None, video_meta_url=None, video_url=None):
        self.created_at = created_at
        self.id = id
        self.status = status
        self.video_meta_url = video_meta_url
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.video_meta_url, 'video_meta_url')
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Status'] = self.status
        result['VideoMetaUrl'] = self.video_meta_url
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.status = map.get('Status')
        self.video_meta_url = map.get('VideoMetaUrl')
        self.video_url = map.get('VideoUrl')
        return self


class ListDetectionsResponseDataItems(TeaModel):
    def __init__(self, created_at=None, department_id=None, department_name=None, id=None, recording_type=None,
                 rule_id=None, rule_name=None, status=None, tasks=None):
        self.created_at = created_at
        self.department_id = department_id
        self.department_name = department_name
        self.id = id
        self.recording_type = recording_type
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.status = status
        self.tasks = tasks

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.department_id, 'department_id')
        self.validate_required(self.department_name, 'department_name')
        self.validate_required(self.id, 'id')
        self.validate_required(self.recording_type, 'recording_type')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.tasks, 'tasks')
        if self.tasks:
            for k in self.tasks:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['DepartmentId'] = self.department_id
        result['DepartmentName'] = self.department_name
        result['Id'] = self.id
        result['RecordingType'] = self.recording_type
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Status'] = self.status
        result['Tasks'] = []
        if self.tasks is not None:
            for k in self.tasks:
                result['Tasks'].append(k.to_map() if k else None)
        else:
            result['Tasks'] = None
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.department_id = map.get('DepartmentId')
        self.department_name = map.get('DepartmentName')
        self.id = map.get('Id')
        self.recording_type = map.get('RecordingType')
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.status = map.get('Status')
        self.tasks = []
        if map.get('Tasks') is not None:
            for k in map.get('Tasks'):
                temp_model = ListDetectionsResponseDataItemsTasks()
                temp_model = temp_model.from_map(k)
                self.tasks.append(temp_model)
        else:
            self.tasks = None
        return self


class ListDetectionsResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListDetectionsResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class CreateTaskGroupRequest(TeaModel):
    def __init__(self, day=None, app_id=None, expire_at=None, group_name=None, rule_id=None, runnable_time_from=None,
                 runnable_time_to=None, trigger_period=None, video_url=None, client_token=None):
        self.day = day
        self.app_id = app_id
        self.expire_at = expire_at
        self.group_name = group_name
        self.rule_id = rule_id
        self.runnable_time_from = runnable_time_from
        self.runnable_time_to = runnable_time_to
        self.trigger_period = trigger_period
        self.video_url = video_url
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['Day'] = []
        if self.day is not None:
            for k in self.day:
                result['Day'].append(k)
        else:
            result['Day'] = None
        result['AppId'] = self.app_id
        result['ExpireAt'] = self.expire_at
        result['GroupName'] = self.group_name
        result['RuleId'] = self.rule_id
        result['RunnableTimeFrom'] = self.runnable_time_from
        result['RunnableTimeTo'] = self.runnable_time_to
        result['TriggerPeriod'] = self.trigger_period
        result['VideoUrl'] = []
        if self.video_url is not None:
            for k in self.video_url:
                result['VideoUrl'].append(k)
        else:
            result['VideoUrl'] = None
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.day = []
        if map.get('Day') is not None:
            for k in map.get('Day'):
                self.day.append(k)
        else:
            self.day = None
        self.app_id = map.get('AppId')
        self.expire_at = map.get('ExpireAt')
        self.group_name = map.get('GroupName')
        self.rule_id = map.get('RuleId')
        self.runnable_time_from = map.get('RunnableTimeFrom')
        self.runnable_time_to = map.get('RunnableTimeTo')
        self.trigger_period = map.get('TriggerPeriod')
        self.video_url = []
        if map.get('VideoUrl') is not None:
            for k in map.get('VideoUrl'):
                self.video_url.append(k)
        else:
            self.video_url = None
        self.client_token = map.get('ClientToken')
        return self


class CreateTaskGroupResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateTaskGroupResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateTaskGroupResponseData(TeaModel):
    def __init__(self, completed_tasks=None, created_at=None, id=None, name=None, rule_id=None, rule_name=None,
                 status=None, total_tasks=None, task_ids=None):
        self.completed_tasks = completed_tasks
        self.created_at = created_at
        self.id = id
        self.name = name
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.status = status
        self.total_tasks = total_tasks
        self.task_ids = task_ids

    def validate(self):
        self.validate_required(self.completed_tasks, 'completed_tasks')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.total_tasks, 'total_tasks')
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['CompletedTasks'] = self.completed_tasks
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Status'] = self.status
        result['TotalTasks'] = self.total_tasks
        result['TaskIds'] = []
        if self.task_ids is not None:
            for k in self.task_ids:
                result['TaskIds'].append(k)
        else:
            result['TaskIds'] = None
        return result

    def from_map(self, map={}):
        self.completed_tasks = map.get('CompletedTasks')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.status = map.get('Status')
        self.total_tasks = map.get('TotalTasks')
        self.task_ids = []
        if map.get('TaskIds') is not None:
            for k in map.get('TaskIds'):
                self.task_ids.append(k)
        else:
            self.task_ids = None
        return self
class GetTaskGroupRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class GetTaskGroupResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetTaskGroupResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetTaskGroupResponseData(TeaModel):
    def __init__(self, completed_tasks=None, created_at=None, id=None, name=None, rule_id=None, rule_name=None,
                 status=None, total_tasks=None, task_ids=None):
        self.completed_tasks = completed_tasks
        self.created_at = created_at
        self.id = id
        self.name = name
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.status = status
        self.total_tasks = total_tasks
        self.task_ids = task_ids

    def validate(self):
        self.validate_required(self.completed_tasks, 'completed_tasks')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.total_tasks, 'total_tasks')
        self.validate_required(self.task_ids, 'task_ids')

    def to_map(self):
        result = {}
        result['CompletedTasks'] = self.completed_tasks
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Status'] = self.status
        result['TotalTasks'] = self.total_tasks
        result['TaskIds'] = []
        if self.task_ids is not None:
            for k in self.task_ids:
                result['TaskIds'].append(k)
        else:
            result['TaskIds'] = None
        return result

    def from_map(self, map={}):
        self.completed_tasks = map.get('CompletedTasks')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.status = map.get('Status')
        self.total_tasks = map.get('TotalTasks')
        self.task_ids = []
        if map.get('TaskIds') is not None:
            for k in map.get('TaskIds'):
                self.task_ids.append(k)
        else:
            self.task_ids = None
        return self
class GetRuleRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class GetRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetRuleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetRuleResponseData(TeaModel):
    def __init__(self, content=None, created_at=None, id=None, name=None):
        self.content = content
        self.created_at = created_at
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class GetDetectionRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class GetDetectionResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetDetectionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetDetectionResponseDataTasks(TeaModel):
    def __init__(self, created_at=None, id=None, status=None, video_meta_url=None, video_url=None):
        self.created_at = created_at
        self.id = id
        self.status = status
        self.video_meta_url = video_meta_url
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.video_meta_url, 'video_meta_url')
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Status'] = self.status
        result['VideoMetaUrl'] = self.video_meta_url
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.status = map.get('Status')
        self.video_meta_url = map.get('VideoMetaUrl')
        self.video_url = map.get('VideoUrl')
        return self


class GetDetectionResponseData(TeaModel):
    def __init__(self, created_at=None, department_id=None, department_name=None, id=None, recording_type=None,
                 rule_id=None, rule_name=None, status=None, tasks=None):
        self.created_at = created_at
        self.department_id = department_id
        self.department_name = department_name
        self.id = id
        self.recording_type = recording_type
        self.rule_id = rule_id
        self.rule_name = rule_name
        self.status = status
        self.tasks = tasks

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.department_id, 'department_id')
        self.validate_required(self.department_name, 'department_name')
        self.validate_required(self.id, 'id')
        self.validate_required(self.recording_type, 'recording_type')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.rule_name, 'rule_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.tasks, 'tasks')
        if self.tasks:
            for k in self.tasks:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['DepartmentId'] = self.department_id
        result['DepartmentName'] = self.department_name
        result['Id'] = self.id
        result['RecordingType'] = self.recording_type
        result['RuleId'] = self.rule_id
        result['RuleName'] = self.rule_name
        result['Status'] = self.status
        result['Tasks'] = []
        if self.tasks is not None:
            for k in self.tasks:
                result['Tasks'].append(k.to_map() if k else None)
        else:
            result['Tasks'] = None
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.department_id = map.get('DepartmentId')
        self.department_name = map.get('DepartmentName')
        self.id = map.get('Id')
        self.recording_type = map.get('RecordingType')
        self.rule_id = map.get('RuleId')
        self.rule_name = map.get('RuleName')
        self.status = map.get('Status')
        self.tasks = []
        if map.get('Tasks') is not None:
            for k in map.get('Tasks'):
                temp_model = GetDetectionResponseDataTasks()
                temp_model = temp_model.from_map(k)
                self.tasks.append(temp_model)
        else:
            self.tasks = None
        return self
class ListTaskItemsRequest(TeaModel):
    def __init__(self, task_id=None):
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        return self


class ListTaskItemsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k.to_map() if k else None)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                temp_model = ListTaskItemsResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class ListTaskItemsResponseData(TeaModel):
    def __init__(self, created_at=None, message=None, name=None, output=None, segment_seq=None, status=None):
        self.created_at = created_at
        self.message = message
        self.name = name
        self.output = output
        self.segment_seq = segment_seq
        self.status = status

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.message, 'message')
        self.validate_required(self.name, 'name')
        self.validate_required(self.output, 'output')
        self.validate_required(self.segment_seq, 'segment_seq')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Message'] = self.message
        result['Name'] = self.name
        result['Output'] = self.output
        result['SegmentSeq'] = self.segment_seq
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.message = map.get('Message')
        self.name = map.get('Name')
        self.output = map.get('Output')
        self.segment_seq = map.get('SegmentSeq')
        self.status = map.get('Status')
        return self
class GetUserRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class GetUserResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetUserResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetUserResponseDataDepartments(TeaModel):
    def __init__(self, description=None, gmt_create=None, gmt_modified=None, id=None, name=None):
        self.description = description
        self.gmt_create = gmt_create
        self.gmt_modified = gmt_modified
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.description, 'description')
        self.validate_required(self.gmt_create, 'gmt_create')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['GmtCreate'] = self.gmt_create
        result['GmtModified'] = self.gmt_modified
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.gmt_create = map.get('GmtCreate')
        self.gmt_modified = map.get('GmtModified')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self


class GetUserResponseData(TeaModel):
    def __init__(self, created_at=None, email=None, id=None, name=None, phone_number=None, role=None, source=None,
                 updated_at=None, username=None, departments=None):
        self.created_at = created_at
        self.email = email
        self.id = id
        self.name = name
        self.phone_number = phone_number
        self.role = role
        self.source = source
        self.updated_at = updated_at
        self.username = username
        self.departments = departments

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.email, 'email')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.phone_number, 'phone_number')
        self.validate_required(self.role, 'role')
        self.validate_required(self.source, 'source')
        self.validate_required(self.updated_at, 'updated_at')
        self.validate_required(self.username, 'username')
        self.validate_required(self.departments, 'departments')
        if self.departments:
            for k in self.departments:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Email'] = self.email
        result['Id'] = self.id
        result['Name'] = self.name
        result['PhoneNumber'] = self.phone_number
        result['Role'] = self.role
        result['Source'] = self.source
        result['UpdatedAt'] = self.updated_at
        result['Username'] = self.username
        result['Departments'] = []
        if self.departments is not None:
            for k in self.departments:
                result['Departments'].append(k.to_map() if k else None)
        else:
            result['Departments'] = None
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.email = map.get('Email')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.phone_number = map.get('PhoneNumber')
        self.role = map.get('Role')
        self.source = map.get('Source')
        self.updated_at = map.get('UpdatedAt')
        self.username = map.get('Username')
        self.departments = []
        if map.get('Departments') is not None:
            for k in map.get('Departments'):
                temp_model = GetUserResponseDataDepartments()
                temp_model = temp_model.from_map(k)
                self.departments.append(temp_model)
        else:
            self.departments = None
        return self
class CreateRuleRequest(TeaModel):
    def __init__(self, name=None, content=None, client_token=None):
        self.name = name
        self.content = content
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Content'] = self.content
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.content = map.get('Content')
        self.client_token = map.get('ClientToken')
        return self


class CreateRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateRuleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateRuleResponseData(TeaModel):
    def __init__(self, content=None, id=None, name=None):
        self.content = content
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class CreateUserDepartmentsRequest(TeaModel):
    def __init__(self, user_id=None, department_id=None):
        self.user_id = user_id
        self.department_id = department_id

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.department_id, 'department_id')

    def to_map(self):
        result = {}
        result['UserId'] = []
        if self.user_id is not None:
            for k in self.user_id:
                result['UserId'].append(k)
        else:
            result['UserId'] = None
        result['DepartmentId'] = []
        if self.department_id is not None:
            for k in self.department_id:
                result['DepartmentId'].append(k)
        else:
            result['DepartmentId'] = None
        return result

    def from_map(self, map={}):
        self.user_id = []
        if map.get('UserId') is not None:
            for k in map.get('UserId'):
                self.user_id.append(k)
        else:
            self.user_id = None
        self.department_id = []
        if map.get('DepartmentId') is not None:
            for k in map.get('DepartmentId'):
                self.department_id.append(k)
        else:
            self.department_id = None
        return self


class CreateUserDepartmentsResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class ListRolesRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ListRolesResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                self.data.append(k)
        else:
            self.data = None
        return self


class UpdateUserRequest(TeaModel):
    def __init__(self, email=None, name=None, phone_number=None, role=None, id=None):
        self.email = email
        self.name = name
        self.phone_number = phone_number
        self.role = role
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Email'] = self.email
        result['Name'] = self.name
        result['PhoneNumber'] = self.phone_number
        result['Role'] = self.role
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.email = map.get('Email')
        self.name = map.get('Name')
        self.phone_number = map.get('PhoneNumber')
        self.role = map.get('Role')
        self.id = map.get('Id')
        return self


class UpdateUserResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DeleteUserRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class DeleteUserResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None, errors=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id
        self.errors = errors

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.errors, 'errors')
        if self.errors:
            for k in self.errors:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Errors'] = []
        if self.errors is not None:
            for k in self.errors:
                result['Errors'].append(k.to_map() if k else None)
        else:
            result['Errors'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.errors = []
        if map.get('Errors') is not None:
            for k in map.get('Errors'):
                temp_model = DeleteUserResponseErrors()
                temp_model = temp_model.from_map(k)
                self.errors.append(temp_model)
        else:
            self.errors = None
        return self


class DeleteUserResponseErrors(TeaModel):
    def __init__(self, field=None, message=None):
        self.field = field
        self.message = message

    def validate(self):
        self.validate_required(self.field, 'field')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['Field'] = self.field
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.field = map.get('Field')
        self.message = map.get('Message')
        return self
class CreateDepartmentRequest(TeaModel):
    def __init__(self, description=None, label=None, name=None, client_token=None):
        self.description = description
        self.label = label
        self.name = name
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['Label'] = self.label
        result['Name'] = self.name
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.label = map.get('Label')
        self.name = map.get('Name')
        self.client_token = map.get('ClientToken')
        return self


class CreateDepartmentResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateDepartmentResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateDepartmentResponseData(TeaModel):
    def __init__(self, created_at=None, description=None, id=None, name=None):
        self.created_at = created_at
        self.description = description
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.description, 'description')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Description'] = self.description
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.description = map.get('Description')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class UpdateDepartmentRequest(TeaModel):
    def __init__(self, description=None, label=None, name=None, id=None):
        self.description = description
        self.label = label
        self.name = name
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['Label'] = self.label
        result['Name'] = self.name
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.label = map.get('Label')
        self.name = map.get('Name')
        self.id = map.get('Id')
        return self


class UpdateDepartmentResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class JoinLiveRequest(TeaModel):
    def __init__(self, user_id=None, channel=None):
        self.user_id = user_id
        self.channel = channel

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.channel, 'channel')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['Channel'] = self.channel
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.channel = map.get('Channel')
        return self


class JoinLiveResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = JoinLiveResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class JoinLiveResponseDataTokenDataTurn(TeaModel):
    def __init__(self, password=None, username=None):
        self.password = password
        self.username = username

    def validate(self):
        self.validate_required(self.password, 'password')
        self.validate_required(self.username, 'username')

    def to_map(self):
        result = {}
        result['Password'] = self.password
        result['Username'] = self.username
        return result

    def from_map(self, map={}):
        self.password = map.get('Password')
        self.username = map.get('Username')
        return self


class JoinLiveResponseDataTokenData(TeaModel):
    def __init__(self, app_id=None, live_id=None, nonce=None, timestamp=None, token=None, user_id=None, turn=None,
                 gslb=None):
        self.app_id = app_id
        self.live_id = live_id
        self.nonce = nonce
        self.timestamp = timestamp
        self.token = token
        self.user_id = user_id
        self.turn = turn
        self.gslb = gslb

    def validate(self):
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.live_id, 'live_id')
        self.validate_required(self.nonce, 'nonce')
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.token, 'token')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.turn, 'turn')
        if self.turn:
            self.turn.validate()
        self.validate_required(self.gslb, 'gslb')

    def to_map(self):
        result = {}
        result['AppId'] = self.app_id
        result['LiveId'] = self.live_id
        result['Nonce'] = self.nonce
        result['Timestamp'] = self.timestamp
        result['Token'] = self.token
        result['UserId'] = self.user_id
        if self.turn is not None:
            result['Turn'] = self.turn.to_map()
        else:
            result['Turn'] = None
        result['Gslb'] = []
        if self.gslb is not None:
            for k in self.gslb:
                result['Gslb'].append(k)
        else:
            result['Gslb'] = None
        return result

    def from_map(self, map={}):
        self.app_id = map.get('AppId')
        self.live_id = map.get('LiveId')
        self.nonce = map.get('Nonce')
        self.timestamp = map.get('Timestamp')
        self.token = map.get('Token')
        self.user_id = map.get('UserId')
        if map.get('Turn') is not None:
            temp_model = JoinLiveResponseDataTokenDataTurn()
            self.turn = temp_model.from_map(map['Turn'])
        else:
            self.turn = None
        self.gslb = []
        if map.get('Gslb') is not None:
            for k in map.get('Gslb'):
                self.gslb.append(k)
        else:
            self.gslb = None
        return self


class JoinLiveResponseData(TeaModel):
    def __init__(self, code=None, token_data=None):
        self.code = code
        self.token_data = token_data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.token_data, 'token_data')
        if self.token_data:
            self.token_data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        if self.token_data is not None:
            result['TokenData'] = self.token_data.to_map()
        else:
            result['TokenData'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        if map.get('TokenData') is not None:
            temp_model = JoinLiveResponseDataTokenData()
            self.token_data = temp_model.from_map(map['TokenData'])
        else:
            self.token_data = None
        return self
class UpdateLiveRequest(TeaModel):
    def __init__(self, live_id=None, status=None, user_id=None):
        self.live_id = live_id
        self.status = status
        self.user_id = user_id

    def validate(self):
        self.validate_required(self.live_id, 'live_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.user_id, 'user_id')

    def to_map(self):
        result = {}
        result['LiveId'] = self.live_id
        result['Status'] = self.status
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.live_id = map.get('LiveId')
        self.status = map.get('Status')
        self.user_id = map.get('UserId')
        return self


class UpdateLiveResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = UpdateLiveResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class UpdateLiveResponseData(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self
class CreateLiveRequest(TeaModel):
    def __init__(self, name=None, app_id=None, user_id=None, client_token=None):
        self.name = name
        self.app_id = app_id
        self.user_id = user_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.user_id, 'user_id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['AppId'] = self.app_id
        result['UserId'] = self.user_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.app_id = map.get('AppId')
        self.user_id = map.get('UserId')
        self.client_token = map.get('ClientToken')
        return self


class CreateLiveResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateLiveResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateLiveResponseData(TeaModel):
    def __init__(self, channel=None, id=None, name=None):
        self.channel = channel
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.channel, 'channel')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Channel'] = self.channel
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.channel = map.get('Channel')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class ListDepartmentsRequest(TeaModel):
    def __init__(self, name=None, page_index=None, page_size=None, user_id=None):
        self.name = name
        self.page_index = page_index
        self.page_size = page_size
        self.user_id = user_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.user_id = map.get('UserId')
        return self


class ListDepartmentsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListDepartmentsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListDepartmentsResponseDataItemsAdministrators(TeaModel):
    def __init__(self, id=None, name=None):
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self


class ListDepartmentsResponseDataItems(TeaModel):
    def __init__(self, created_at=None, description=None, id=None, name=None, updated_at=None, administrators=None):
        self.created_at = created_at
        self.description = description
        self.id = id
        self.name = name
        self.updated_at = updated_at
        self.administrators = administrators

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.description, 'description')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.updated_at, 'updated_at')
        self.validate_required(self.administrators, 'administrators')
        if self.administrators:
            for k in self.administrators:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Description'] = self.description
        result['Id'] = self.id
        result['Name'] = self.name
        result['UpdatedAt'] = self.updated_at
        result['Administrators'] = []
        if self.administrators is not None:
            for k in self.administrators:
                result['Administrators'].append(k.to_map() if k else None)
        else:
            result['Administrators'] = None
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.description = map.get('Description')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.updated_at = map.get('UpdatedAt')
        self.administrators = []
        if map.get('Administrators') is not None:
            for k in map.get('Administrators'):
                temp_model = ListDepartmentsResponseDataItemsAdministrators()
                temp_model = temp_model.from_map(k)
                self.administrators.append(temp_model)
        else:
            self.administrators = None
        return self


class ListDepartmentsResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListDepartmentsResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class UpdateServiceConfigurationRequest(TeaModel):
    def __init__(self, task_item_queue_size=None, client_queue_size=None, live_record_every_one=None,
                 live_record_all=None, live_record_layout=None, live_record_task_profile=None):
        self.task_item_queue_size = task_item_queue_size
        self.client_queue_size = client_queue_size
        self.live_record_every_one = live_record_every_one
        self.live_record_all = live_record_all
        self.live_record_layout = live_record_layout
        self.live_record_task_profile = live_record_task_profile

    def validate(self):
        self.validate_required(self.task_item_queue_size, 'task_item_queue_size')
        self.validate_required(self.client_queue_size, 'client_queue_size')
        self.validate_required(self.live_record_every_one, 'live_record_every_one')
        self.validate_required(self.live_record_all, 'live_record_all')
        self.validate_required(self.live_record_layout, 'live_record_layout')
        self.validate_required(self.live_record_task_profile, 'live_record_task_profile')

    def to_map(self):
        result = {}
        result['TaskItemQueueSize'] = self.task_item_queue_size
        result['ClientQueueSize'] = self.client_queue_size
        result['LiveRecordEveryOne'] = self.live_record_every_one
        result['LiveRecordAll'] = self.live_record_all
        result['LiveRecordLayout'] = self.live_record_layout
        result['LiveRecordTaskProfile'] = self.live_record_task_profile
        return result

    def from_map(self, map={}):
        self.task_item_queue_size = map.get('TaskItemQueueSize')
        self.client_queue_size = map.get('ClientQueueSize')
        self.live_record_every_one = map.get('LiveRecordEveryOne')
        self.live_record_all = map.get('LiveRecordAll')
        self.live_record_layout = map.get('LiveRecordLayout')
        self.live_record_task_profile = map.get('LiveRecordTaskProfile')
        return self


class UpdateServiceConfigurationResponse(TeaModel):
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


class CreateAppRequest(TeaModel):
    def __init__(self, name=None, package_name=None, department_id=None, client_token=None):
        self.name = name
        self.package_name = package_name
        self.department_id = department_id
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['PackageName'] = self.package_name
        result['DepartmentId'] = self.department_id
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.package_name = map.get('PackageName')
        self.department_id = map.get('DepartmentId')
        self.client_token = map.get('ClientToken')
        return self


class CreateAppResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateAppResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateAppResponseData(TeaModel):
    def __init__(self, created_at=None, creator_name=None, disabled=None, id=None, name=None):
        self.created_at = created_at
        self.creator_name = creator_name
        self.disabled = disabled
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.creator_name, 'creator_name')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['CreatorName'] = self.creator_name
        result['Disabled'] = self.disabled
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.creator_name = map.get('CreatorName')
        self.disabled = map.get('Disabled')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class CreateLiveDetectionRequest(TeaModel):
    def __init__(self, live_id=None, user_id=None, rule_id=None, meta_url=None, client_token=None):
        self.live_id = live_id
        self.user_id = user_id
        self.rule_id = rule_id
        self.meta_url = meta_url
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.live_id, 'live_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.rule_id, 'rule_id')
        self.validate_required(self.meta_url, 'meta_url')

    def to_map(self):
        result = {}
        result['LiveId'] = self.live_id
        result['UserId'] = self.user_id
        result['RuleId'] = self.rule_id
        result['MetaUrl'] = self.meta_url
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.live_id = map.get('LiveId')
        self.user_id = map.get('UserId')
        self.rule_id = map.get('RuleId')
        self.meta_url = map.get('MetaUrl')
        self.client_token = map.get('ClientToken')
        return self


class CreateLiveDetectionResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = CreateLiveDetectionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CreateLiveDetectionResponseData(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self
class DeleteDepartmentRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class DeleteDepartmentResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class ListFilesRequest(TeaModel):
    def __init__(self, prefix=None, limit=None):
        self.prefix = prefix
        self.limit = limit

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Prefix'] = self.prefix
        result['Limit'] = self.limit
        return result

    def from_map(self, map={}):
        self.prefix = map.get('Prefix')
        self.limit = map.get('Limit')
        return self


class ListFilesResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                self.data.append(k)
        else:
            self.data = None
        return self


class GetDepartmentRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class GetDepartmentResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetDepartmentResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetDepartmentResponseData(TeaModel):
    def __init__(self, created_at=None, description=None, id=None, name=None, updated_at=None):
        self.created_at = created_at
        self.description = description
        self.id = id
        self.name = name
        self.updated_at = updated_at

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.description, 'description')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.updated_at, 'updated_at')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Description'] = self.description
        result['Id'] = self.id
        result['Name'] = self.name
        result['UpdatedAt'] = self.updated_at
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.description = map.get('Description')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.updated_at = map.get('UpdatedAt')
        return self
class DeleteUserDepartmentsRequest(TeaModel):
    def __init__(self, user_id=None, department_id=None):
        self.user_id = user_id
        self.department_id = department_id

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.department_id, 'department_id')

    def to_map(self):
        result = {}
        result['UserId'] = []
        if self.user_id is not None:
            for k in self.user_id:
                result['UserId'].append(k)
        else:
            result['UserId'] = None
        result['DepartmentId'] = []
        if self.department_id is not None:
            for k in self.department_id:
                result['DepartmentId'].append(k)
        else:
            result['DepartmentId'] = None
        return result

    def from_map(self, map={}):
        self.user_id = []
        if map.get('UserId') is not None:
            for k in map.get('UserId'):
                self.user_id.append(k)
        else:
            self.user_id = None
        self.department_id = []
        if map.get('DepartmentId') is not None:
            for k in map.get('DepartmentId'):
                self.department_id.append(k)
        else:
            self.department_id = None
        return self


class DeleteUserDepartmentsResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class GetPreSignedUrlRequest(TeaModel):
    def __init__(self, prefix=None):
        self.prefix = prefix

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Prefix'] = self.prefix
        return result

    def from_map(self, map={}):
        self.prefix = map.get('Prefix')
        return self


class GetPreSignedUrlResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class DeleteRuleRequest(TeaModel):
    def __init__(self, id=None):
        self.id = id

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        return self


class DeleteRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = DeleteRuleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DeleteRuleResponseData(TeaModel):
    def __init__(self, content=None, created_at=None, id=None, name=None):
        self.content = content
        self.created_at = created_at
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class UpdateRuleRequest(TeaModel):
    def __init__(self, id=None, name=None, content=None):
        self.id = id
        self.name = name
        self.content = content

    def validate(self):
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.content = map.get('Content')
        return self


class UpdateRuleResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = UpdateRuleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class UpdateRuleResponseData(TeaModel):
    def __init__(self, content=None, created_at=None, id=None, name=None):
        self.content = content
        self.created_at = created_at
        self.id = id
        self.name = name

    def validate(self):
        self.validate_required(self.content, 'content')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        return self
class ListStatisticsTaskRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None):
        self.page_index = page_index
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        return self


class ListStatisticsTaskResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListStatisticsTaskResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListStatisticsTaskResponseDataItems(TeaModel):
    def __init__(self, created_at=None, file_url=None, name=None, status=None):
        self.created_at = created_at
        self.file_url = file_url
        self.name = name
        self.status = status

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.name, 'name')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['FileUrl'] = self.file_url
        result['Name'] = self.name
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.file_url = map.get('FileUrl')
        self.name = map.get('Name')
        self.status = map.get('Status')
        return self


class ListStatisticsTaskResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListStatisticsTaskResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class ListLivesRequest(TeaModel):
    def __init__(self, page_index=None, page_size=None):
        self.page_index = page_index
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        return self


class ListLivesResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListLivesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListLivesResponseDataItems(TeaModel):
    def __init__(self, channel=None, created_at=None, id=None, name=None, public_id=None, status=None, user_id=None):
        self.channel = channel
        self.created_at = created_at
        self.id = id
        self.name = name
        self.public_id = public_id
        self.status = status
        self.user_id = user_id

    def validate(self):
        self.validate_required(self.channel, 'channel')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.public_id, 'public_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.user_id, 'user_id')

    def to_map(self):
        result = {}
        result['Channel'] = self.channel
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Name'] = self.name
        result['PublicId'] = self.public_id
        result['Status'] = self.status
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.channel = map.get('Channel')
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.public_id = map.get('PublicId')
        self.status = map.get('Status')
        self.user_id = map.get('UserId')
        return self


class ListLivesResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListLivesResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class ExitLiveRequest(TeaModel):
    def __init__(self, channel=None, user_id=None):
        self.channel = channel
        self.user_id = user_id

    def validate(self):
        self.validate_required(self.channel, 'channel')
        self.validate_required(self.user_id, 'user_id')

    def to_map(self):
        result = {}
        result['Channel'] = self.channel
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.channel = map.get('Channel')
        self.user_id = map.get('UserId')
        return self


class ExitLiveResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ExitLiveResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ExitLiveResponseData(TeaModel):
    def __init__(self, code=None):
        self.code = code

    def validate(self):
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        return self
class GetTaskRequest(TeaModel):
    def __init__(self, task_id=None):
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        return self


class GetTaskResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetTaskResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetTaskResponseData(TeaModel):
    def __init__(self, created_at=None, id=None, status=None, video_url=None):
        self.created_at = created_at
        self.id = id
        self.status = status
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.id, 'id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Id'] = self.id
        result['Status'] = self.status
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.id = map.get('Id')
        self.status = map.get('Status')
        self.video_url = map.get('VideoUrl')
        return self
class GetStatisticsRequest(TeaModel):
    def __init__(self, department_id=None, date_from=None, date_to=None):
        self.department_id = department_id
        self.date_from = date_from
        self.date_to = date_to

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DepartmentId'] = []
        if self.department_id is not None:
            for k in self.department_id:
                result['DepartmentId'].append(k)
        else:
            result['DepartmentId'] = None
        result['DateFrom'] = self.date_from
        result['DateTo'] = self.date_to
        return result

    def from_map(self, map={}):
        self.department_id = []
        if map.get('DepartmentId') is not None:
            for k in map.get('DepartmentId'):
                self.department_id.append(k)
        else:
            self.department_id = None
        self.date_from = map.get('DateFrom')
        self.date_to = map.get('DateTo')
        return self


class GetStatisticsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetStatisticsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetStatisticsResponseDataItemsDetail(TeaModel):
    def __init__(self, client_count=None, cloud_count=None, department_id=None, department_name=None, month=None):
        self.client_count = client_count
        self.cloud_count = cloud_count
        self.department_id = department_id
        self.department_name = department_name
        self.month = month

    def validate(self):
        self.validate_required(self.client_count, 'client_count')
        self.validate_required(self.cloud_count, 'cloud_count')
        self.validate_required(self.department_id, 'department_id')
        self.validate_required(self.department_name, 'department_name')
        self.validate_required(self.month, 'month')

    def to_map(self):
        result = {}
        result['ClientCount'] = self.client_count
        result['CloudCount'] = self.cloud_count
        result['DepartmentId'] = self.department_id
        result['DepartmentName'] = self.department_name
        result['Month'] = self.month
        return result

    def from_map(self, map={}):
        self.client_count = map.get('ClientCount')
        self.cloud_count = map.get('CloudCount')
        self.department_id = map.get('DepartmentId')
        self.department_name = map.get('DepartmentName')
        self.month = map.get('Month')
        return self


class GetStatisticsResponseDataItems(TeaModel):
    def __init__(self, client_count=None, cloud_count=None, department_name=None, month=None, detail=None):
        self.client_count = client_count
        self.cloud_count = cloud_count
        self.department_name = department_name
        self.month = month
        self.detail = detail

    def validate(self):
        self.validate_required(self.client_count, 'client_count')
        self.validate_required(self.cloud_count, 'cloud_count')
        self.validate_required(self.department_name, 'department_name')
        self.validate_required(self.month, 'month')
        self.validate_required(self.detail, 'detail')
        if self.detail:
            for k in self.detail:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['ClientCount'] = self.client_count
        result['CloudCount'] = self.cloud_count
        result['DepartmentName'] = self.department_name
        result['Month'] = self.month
        result['Detail'] = []
        if self.detail is not None:
            for k in self.detail:
                result['Detail'].append(k.to_map() if k else None)
        else:
            result['Detail'] = None
        return result

    def from_map(self, map={}):
        self.client_count = map.get('ClientCount')
        self.cloud_count = map.get('CloudCount')
        self.department_name = map.get('DepartmentName')
        self.month = map.get('Month')
        self.detail = []
        if map.get('Detail') is not None:
            for k in map.get('Detail'):
                temp_model = GetStatisticsResponseDataItemsDetail()
                temp_model = temp_model.from_map(k)
                self.detail.append(temp_model)
        else:
            self.detail = None
        return self


class GetStatisticsResponseData(TeaModel):
    def __init__(self, items=None):
        self.items = items

    def validate(self):
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
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
                temp_model = GetStatisticsResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class GetServiceConfigurationRequest(TeaModel):
    def __init__(self, user_id=None):
        self.user_id = user_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        return self


class GetServiceConfigurationResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetServiceConfigurationResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetServiceConfigurationResponseData(TeaModel):
    def __init__(self, client_queue_size=None, live_record_all=None, live_record_every_one=None,
                 live_record_layout=None, live_record_task_profile=None, task_item_queue_size=None):
        self.client_queue_size = client_queue_size
        self.live_record_all = live_record_all
        self.live_record_every_one = live_record_every_one
        self.live_record_layout = live_record_layout
        self.live_record_task_profile = live_record_task_profile
        self.task_item_queue_size = task_item_queue_size

    def validate(self):
        self.validate_required(self.client_queue_size, 'client_queue_size')
        self.validate_required(self.live_record_all, 'live_record_all')
        self.validate_required(self.live_record_every_one, 'live_record_every_one')
        self.validate_required(self.live_record_layout, 'live_record_layout')
        self.validate_required(self.live_record_task_profile, 'live_record_task_profile')
        self.validate_required(self.task_item_queue_size, 'task_item_queue_size')

    def to_map(self):
        result = {}
        result['ClientQueueSize'] = self.client_queue_size
        result['LiveRecordAll'] = self.live_record_all
        result['LiveRecordEveryOne'] = self.live_record_every_one
        result['LiveRecordLayout'] = self.live_record_layout
        result['LiveRecordTaskProfile'] = self.live_record_task_profile
        result['TaskItemQueueSize'] = self.task_item_queue_size
        return result

    def from_map(self, map={}):
        self.client_queue_size = map.get('ClientQueueSize')
        self.live_record_all = map.get('LiveRecordAll')
        self.live_record_every_one = map.get('LiveRecordEveryOne')
        self.live_record_layout = map.get('LiveRecordLayout')
        self.live_record_task_profile = map.get('LiveRecordTaskProfile')
        self.task_item_queue_size = map.get('TaskItemQueueSize')
        return self
class GetAppRequest(TeaModel):
    def __init__(self, id=None, package_name=None, device_id=None):
        self.id = id
        self.package_name = package_name
        self.device_id = device_id

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.package_name, 'package_name')
        self.validate_required(self.device_id, 'device_id')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['PackageName'] = self.package_name
        result['DeviceId'] = self.device_id
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.package_name = map.get('PackageName')
        self.device_id = map.get('DeviceId')
        return self


class GetAppResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetAppResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetAppResponseData(TeaModel):
    def __init__(self, created_at=None, disabled=None, name=None):
        self.created_at = created_at
        self.disabled = disabled
        self.name = name

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.disabled, 'disabled')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Disabled'] = self.disabled
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.disabled = map.get('Disabled')
        self.name = map.get('Name')
        return self
class CreateStatisticsRecordRequest(TeaModel):
    def __init__(self, device_id=None, app_id=None, device_type=None, begin_at=None, end_at=None, client_token=None):
        self.device_id = device_id
        self.app_id = app_id
        self.device_type = device_type
        self.begin_at = begin_at
        self.end_at = end_at
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.device_id, 'device_id')
        self.validate_required(self.app_id, 'app_id')
        self.validate_required(self.device_type, 'device_type')
        self.validate_required(self.begin_at, 'begin_at')
        self.validate_required(self.end_at, 'end_at')

    def to_map(self):
        result = {}
        result['DeviceId'] = self.device_id
        result['AppId'] = self.app_id
        result['DeviceType'] = self.device_type
        result['BeginAt'] = self.begin_at
        result['EndAt'] = self.end_at
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.device_id = map.get('DeviceId')
        self.app_id = map.get('AppId')
        self.device_type = map.get('DeviceType')
        self.begin_at = map.get('BeginAt')
        self.end_at = map.get('EndAt')
        self.client_token = map.get('ClientToken')
        return self


class CreateStatisticsRecordResponse(TeaModel):
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


class ListUsersRequest(TeaModel):
    def __init__(self, department_id=None, page_index=None, page_size=None, username=None):
        self.department_id = department_id
        self.page_index = page_index
        self.page_size = page_size
        self.username = username

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DepartmentId'] = self.department_id
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['Username'] = self.username
        return result

    def from_map(self, map={}):
        self.department_id = map.get('DepartmentId')
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.username = map.get('Username')
        return self


class ListUsersResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = ListUsersResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListUsersResponseDataItemsDepartments(TeaModel):
    def __init__(self, created_at=None, description=None, id=None, name=None, updated_at=None):
        self.created_at = created_at
        self.description = description
        self.id = id
        self.name = name
        self.updated_at = updated_at

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.description, 'description')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.updated_at, 'updated_at')

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Description'] = self.description
        result['Id'] = self.id
        result['Name'] = self.name
        result['UpdatedAt'] = self.updated_at
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.description = map.get('Description')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.updated_at = map.get('UpdatedAt')
        return self


class ListUsersResponseDataItems(TeaModel):
    def __init__(self, created_at=None, email=None, id=None, name=None, phone_number=None, ram_username=None,
                 role=None, source=None, updated_at=None, username=None, departments=None):
        self.created_at = created_at
        self.email = email
        self.id = id
        self.name = name
        self.phone_number = phone_number
        self.ram_username = ram_username
        self.role = role
        self.source = source
        self.updated_at = updated_at
        self.username = username
        self.departments = departments

    def validate(self):
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.email, 'email')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.phone_number, 'phone_number')
        self.validate_required(self.ram_username, 'ram_username')
        self.validate_required(self.role, 'role')
        self.validate_required(self.source, 'source')
        self.validate_required(self.updated_at, 'updated_at')
        self.validate_required(self.username, 'username')
        self.validate_required(self.departments, 'departments')
        if self.departments:
            for k in self.departments:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['CreatedAt'] = self.created_at
        result['Email'] = self.email
        result['Id'] = self.id
        result['Name'] = self.name
        result['PhoneNumber'] = self.phone_number
        result['RamUsername'] = self.ram_username
        result['Role'] = self.role
        result['Source'] = self.source
        result['UpdatedAt'] = self.updated_at
        result['Username'] = self.username
        result['Departments'] = []
        if self.departments is not None:
            for k in self.departments:
                result['Departments'].append(k.to_map() if k else None)
        else:
            result['Departments'] = None
        return result

    def from_map(self, map={}):
        self.created_at = map.get('CreatedAt')
        self.email = map.get('Email')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.phone_number = map.get('PhoneNumber')
        self.ram_username = map.get('RamUsername')
        self.role = map.get('Role')
        self.source = map.get('Source')
        self.updated_at = map.get('UpdatedAt')
        self.username = map.get('Username')
        self.departments = []
        if map.get('Departments') is not None:
            for k in map.get('Departments'):
                temp_model = ListUsersResponseDataItemsDepartments()
                temp_model = temp_model.from_map(k)
                self.departments.append(temp_model)
        else:
            self.departments = None
        return self


class ListUsersResponseData(TeaModel):
    def __init__(self, total_elements=None, total_pages=None, items=None):
        self.total_elements = total_elements
        self.total_pages = total_pages
        self.items = items

    def validate(self):
        self.validate_required(self.total_elements, 'total_elements')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.items, 'items')
        if self.items:
            for k in self.items:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['TotalElements'] = self.total_elements
        result['TotalPages'] = self.total_pages
        result['Items'] = []
        if self.items is not None:
            for k in self.items:
                result['Items'].append(k.to_map() if k else None)
        else:
            result['Items'] = None
        return result

    def from_map(self, map={}):
        self.total_elements = map.get('TotalElements')
        self.total_pages = map.get('TotalPages')
        self.items = []
        if map.get('Items') is not None:
            for k in map.get('Items'):
                temp_model = ListUsersResponseDataItems()
                temp_model = temp_model.from_map(k)
                self.items.append(temp_model)
        else:
            self.items = None
        return self
class CreateStatisticsTaskRequest(TeaModel):
    def __init__(self, date_from=None, date_to=None, department_id=None, client_token=None):
        self.date_from = date_from
        self.date_to = date_to
        self.department_id = department_id
        self.client_token = client_token

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DateFrom'] = self.date_from
        result['DateTo'] = self.date_to
        result['DepartmentId'] = []
        if self.department_id is not None:
            for k in self.department_id:
                result['DepartmentId'].append(k)
        else:
            result['DepartmentId'] = None
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.date_from = map.get('DateFrom')
        self.date_to = map.get('DateTo')
        self.department_id = []
        if map.get('DepartmentId') is not None:
            for k in map.get('DepartmentId'):
                self.department_id.append(k)
        else:
            self.department_id = None
        self.client_token = map.get('ClientToken')
        return self


class CreateStatisticsTaskResponse(TeaModel):
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

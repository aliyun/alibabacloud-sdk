# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class CreateDevicePurifyJobByPlanIdRequest(TeaModel):
    def __init__(self, plan_id=None, utc=None):
        self.plan_id = plan_id
        self.utc = utc

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.utc, 'utc')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Utc'] = self.utc
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.utc = map.get('Utc')
        return self


class CreateDevicePurifyJobByPlanIdResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class RemoveDevicePurifyPlanRequest(TeaModel):
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


class RemoveDevicePurifyPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class UpdateDevicePurifyPlanRequest(TeaModel):
    def __init__(self, plan_id=None, start_time=None, end_time=None):
        self.plan_id = plan_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class UpdateDevicePurifyPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class CreateDevicePurifyPlanRequest(TeaModel):
    def __init__(self, iot_id=None, start_time=None, end_time=None):
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateDevicePurifyPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryDevicePurifyPlanByPlanIdRequest(TeaModel):
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


class QueryDevicePurifyPlanByPlanIdResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDevicePurifyPlanByPlanIdResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDevicePurifyPlanByPlanIdResponseData(TeaModel):
    def __init__(self, plan_id=None, tenant_id=None, user_id=None, product_key=None, device_name=None, iot_id=None, start_time=None, end_time=None):
        self.plan_id = plan_id
        self.tenant_id = tenant_id
        self.user_id = user_id
        self.product_key = product_key
        self.device_name = device_name
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.tenant_id, 'tenant_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.product_key, 'product_key')
        self.validate_required(self.device_name, 'device_name')
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['TenantId'] = self.tenant_id
        result['UserId'] = self.user_id
        result['ProductKey'] = self.product_key
        result['DeviceName'] = self.device_name
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.tenant_id = map.get('TenantId')
        self.user_id = map.get('UserId')
        self.product_key = map.get('ProductKey')
        self.device_name = map.get('DeviceName')
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateDevicePurifyJobRequest(TeaModel):
    def __init__(self, iot_id=None, start_time=None, end_time=None):
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateDevicePurifyJobResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class GetDevicePurifyJobByJobIdRequest(TeaModel):
    def __init__(self, job_id=None):
        self.job_id = job_id

    def validate(self):
        self.validate_required(self.job_id, 'job_id')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        return self


class GetDevicePurifyJobByJobIdResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = GetDevicePurifyJobByJobIdResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetDevicePurifyJobByJobIdResponseData(TeaModel):
    def __init__(self, job_id=None, tenant_id=None, user_id=None, product_key=None, device_name=None, iot_id=None, start_time=None, end_time=None, plan_id=None, purify_record_name_url=None, purify_record_index_url=None, status=None):
        self.job_id = job_id
        self.tenant_id = tenant_id
        self.user_id = user_id
        self.product_key = product_key
        self.device_name = device_name
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time
        self.plan_id = plan_id
        self.purify_record_name_url = purify_record_name_url
        self.purify_record_index_url = purify_record_index_url
        self.status = status

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.tenant_id, 'tenant_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.product_key, 'product_key')
        self.validate_required(self.device_name, 'device_name')
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.purify_record_name_url, 'purify_record_name_url')
        self.validate_required(self.purify_record_index_url, 'purify_record_index_url')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['TenantId'] = self.tenant_id
        result['UserId'] = self.user_id
        result['ProductKey'] = self.product_key
        result['DeviceName'] = self.device_name
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['PlanId'] = self.plan_id
        result['PurifyRecordNameUrl'] = self.purify_record_name_url
        result['PurifyRecordIndexUrl'] = self.purify_record_index_url
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.tenant_id = map.get('TenantId')
        self.user_id = map.get('UserId')
        self.product_key = map.get('ProductKey')
        self.device_name = map.get('DeviceName')
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.plan_id = map.get('PlanId')
        self.purify_record_name_url = map.get('PurifyRecordNameUrl')
        self.purify_record_index_url = map.get('PurifyRecordIndexUrl')
        self.status = map.get('Status')
        return self


class QueryDevicePurifyJobsRequest(TeaModel):
    def __init__(self, iot_id=None, page_size=None, current_page=None):
        self.iot_id = iot_id
        self.page_size = page_size
        self.current_page = current_page

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.current_page, 'current_page')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PageSize'] = self.page_size
        result['CurrentPage'] = self.current_page
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.page_size = map.get('PageSize')
        self.current_page = map.get('CurrentPage')
        return self


class QueryDevicePurifyJobsResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDevicePurifyJobsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDevicePurifyJobsResponseDataList(TeaModel):
    def __init__(self, plan_id=None, tenant_id=None, user_id=None, product_key=None, device_name=None, iot_id=None, start_time=None, end_time=None, job_id=None, purify_record_name_url=None, purify_record_index_url=None, status=None):
        self.plan_id = plan_id
        self.tenant_id = tenant_id
        self.user_id = user_id
        self.product_key = product_key
        self.device_name = device_name
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time
        self.job_id = job_id
        self.purify_record_name_url = purify_record_name_url
        self.purify_record_index_url = purify_record_index_url
        self.status = status

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.tenant_id, 'tenant_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.product_key, 'product_key')
        self.validate_required(self.device_name, 'device_name')
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.purify_record_name_url, 'purify_record_name_url')
        self.validate_required(self.purify_record_index_url, 'purify_record_index_url')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['TenantId'] = self.tenant_id
        result['UserId'] = self.user_id
        result['ProductKey'] = self.product_key
        result['DeviceName'] = self.device_name
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['JobId'] = self.job_id
        result['PurifyRecordNameUrl'] = self.purify_record_name_url
        result['PurifyRecordIndexUrl'] = self.purify_record_index_url
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.tenant_id = map.get('TenantId')
        self.user_id = map.get('UserId')
        self.product_key = map.get('ProductKey')
        self.device_name = map.get('DeviceName')
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.job_id = map.get('JobId')
        self.purify_record_name_url = map.get('PurifyRecordNameUrl')
        self.purify_record_index_url = map.get('PurifyRecordIndexUrl')
        self.status = map.get('Status')
        return self


class QueryDevicePurifyJobsResponseData(TeaModel):
    def __init__(self, total=None, page_count=None, current_page=None, page_size=None, list_=None):
        self.total = total
        self.page_count = page_count
        self.current_page = current_page
        self.page_size = page_size
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.current_page, 'current_page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageCount'] = self.page_count
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_count = map.get('PageCount')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryDevicePurifyJobsResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryDevicePurifyPlansRequest(TeaModel):
    def __init__(self, iot_id=None, page_size=None, current_page=None):
        self.iot_id = iot_id
        self.page_size = page_size
        self.current_page = current_page

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.current_page, 'current_page')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PageSize'] = self.page_size
        result['CurrentPage'] = self.current_page
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.page_size = map.get('PageSize')
        self.current_page = map.get('CurrentPage')
        return self


class QueryDevicePurifyPlansResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDevicePurifyPlansResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDevicePurifyPlansResponseDataList(TeaModel):
    def __init__(self, plan_id=None, tenant_id=None, user_id=None, product_key=None, device_name=None, iot_id=None, start_time=None, end_time=None):
        self.plan_id = plan_id
        self.tenant_id = tenant_id
        self.user_id = user_id
        self.product_key = product_key
        self.device_name = device_name
        self.iot_id = iot_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.tenant_id, 'tenant_id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.product_key, 'product_key')
        self.validate_required(self.device_name, 'device_name')
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['TenantId'] = self.tenant_id
        result['UserId'] = self.user_id
        result['ProductKey'] = self.product_key
        result['DeviceName'] = self.device_name
        result['IotId'] = self.iot_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.tenant_id = map.get('TenantId')
        self.user_id = map.get('UserId')
        self.product_key = map.get('ProductKey')
        self.device_name = map.get('DeviceName')
        self.iot_id = map.get('IotId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class QueryDevicePurifyPlansResponseData(TeaModel):
    def __init__(self, total=None, page_count=None, current_page=None, page_size=None, list_=None):
        self.total = total
        self.page_count = page_count
        self.current_page = current_page
        self.page_size = page_size
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.current_page, 'current_page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageCount'] = self.page_count
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_count = map.get('PageCount')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryDevicePurifyPlansResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class StopTriggeredRecordRequest(TeaModel):
    def __init__(self, iot_id=None, record_id=None):
        self.iot_id = iot_id
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.record_id = map.get('RecordId')
        return self


class StopTriggeredRecordResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryRecordByRecordIdRequest(TeaModel):
    def __init__(self, iot_id=None, record_id=None):
        self.iot_id = iot_id
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.record_id = map.get('RecordId')
        return self


class QueryRecordByRecordIdResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k.to_map() if k else None)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                temp_model = QueryRecordByRecordIdResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class QueryRecordByRecordIdResponseData(TeaModel):
    def __init__(self, file_name=None, vod_url=None, begin_time=None, end_time=None):
        self.file_name = file_name
        self.vod_url = vod_url
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.vod_url, 'vod_url')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['FileName'] = self.file_name
        result['VodUrl'] = self.vod_url
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.file_name = map.get('FileName')
        self.vod_url = map.get('VodUrl')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class QueryDeviceVodUrlRequest(TeaModel):
    def __init__(self, iot_id=None, file_name=None, should_encrypt=None, encrypt_type=None, scheme=None, seek_time=None):
        self.iot_id = iot_id
        self.file_name = file_name
        self.should_encrypt = should_encrypt
        self.encrypt_type = encrypt_type
        self.scheme = scheme
        self.seek_time = seek_time

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.file_name, 'file_name')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['FileName'] = self.file_name
        result['ShouldEncrypt'] = self.should_encrypt
        result['EncryptType'] = self.encrypt_type
        result['Scheme'] = self.scheme
        result['SeekTime'] = self.seek_time
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.file_name = map.get('FileName')
        self.should_encrypt = map.get('ShouldEncrypt')
        self.encrypt_type = map.get('EncryptType')
        self.scheme = map.get('Scheme')
        self.seek_time = map.get('SeekTime')
        return self


class QueryDeviceVodUrlResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, decrypt_key=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.decrypt_key = decrypt_key
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.decrypt_key, 'decrypt_key')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['DecryptKey'] = self.decrypt_key
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.decrypt_key = map.get('DecryptKey')
        if map.get('Data') is not None:
            temp_model = QueryDeviceVodUrlResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDeviceVodUrlResponseData(TeaModel):
    def __init__(self, vod_url=None):
        self.vod_url = vod_url

    def validate(self):
        self.validate_required(self.vod_url, 'vod_url')

    def to_map(self):
        result = {}
        result['VodUrl'] = self.vod_url
        return result

    def from_map(self, map={}):
        self.vod_url = map.get('VodUrl')
        return self


class QueryTimeTemplateDetailRequest(TeaModel):
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


class QueryTimeTemplateDetailResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryTimeTemplateDetailResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryTimeTemplateDetailResponseDataTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryTimeTemplateDetailResponseData(TeaModel):
    def __init__(self, default_=None, name=None, template_id=None, all_day=None, time_section_list=None):
        self.default_ = default_
        self.name = name
        self.template_id = template_id
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Default'] = self.default_
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.default_ = map.get('Default')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryTimeTemplateDetailResponseDataTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class UpdateTimeTemplateRequest(TeaModel):
    def __init__(self, template_id=None, name=None, all_day=None, time_sections=None):
        self.template_id = template_id
        self.name = name
        self.all_day = all_day
        self.time_sections = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.all_day, 'all_day')
        if self.time_sections:
            for k in self.time_sections:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['AllDay'] = self.all_day
        result['TimeSections'] = []
        if self.time_sections is not None:
            for k in self.time_sections:
                result['TimeSections'].append(k.to_map() if k else None)
        else:
            result['TimeSections'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.all_day = map.get('AllDay')
        self.time_sections = []
        if map.get('TimeSections') is not None:
            for k in map.get('TimeSections'):
                temp_model = UpdateTimeTemplateRequestTimeSections()
                temp_model = temp_model.from_map(k)
                self.time_sections.append(temp_model)
        else:
            self.time_sections = None
        return self


class UpdateTimeTemplateRequestTimeSections(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class UpdateTimeTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class CreateTimeTemplateRequest(TeaModel):
    def __init__(self, name=None, all_day=None, time_sections=None):
        self.name = name
        self.all_day = all_day
        self.time_sections = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.all_day, 'all_day')
        if self.time_sections:
            for k in self.time_sections:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['AllDay'] = self.all_day
        result['TimeSections'] = []
        if self.time_sections is not None:
            for k in self.time_sections:
                result['TimeSections'].append(k.to_map() if k else None)
        else:
            result['TimeSections'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.all_day = map.get('AllDay')
        self.time_sections = []
        if map.get('TimeSections') is not None:
            for k in map.get('TimeSections'):
                temp_model = CreateTimeTemplateRequestTimeSections()
                temp_model = temp_model.from_map(k)
                self.time_sections.append(temp_model)
        else:
            self.time_sections = None
        return self


class CreateTimeTemplateRequestTimeSections(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class CreateTimeTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class StopLiveStreamingRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class StopLiveStreamingResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class SetDevicePictureLifeCycleRequest(TeaModel):
    def __init__(self, iot_id=None, day=None):
        self.iot_id = iot_id
        self.day = day

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.day, 'day')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['Day'] = self.day
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.day = map.get('Day')
        return self


class SetDevicePictureLifeCycleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryDeviceRecordLifeCycleRequest(TeaModel):
    def __init__(self, device_list=None):
        self.device_list = []

    def validate(self):
        self.validate_required(self.device_list, 'device_list')

    def to_map(self):
        result = {}
        result['DeviceList'] = []
        if self.device_list is not None:
            for k in self.device_list:
                result['DeviceList'].append(k)
        else:
            result['DeviceList'] = None
        return result

    def from_map(self, map={}):
        self.device_list = []
        if map.get('DeviceList') is not None:
            for k in map.get('DeviceList'):
                self.device_list.append(k)
        else:
            self.device_list = None
        return self


class QueryDeviceRecordLifeCycleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k.to_map() if k else None)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                temp_model = QueryDeviceRecordLifeCycleResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class QueryDeviceRecordLifeCycleResponseData(TeaModel):
    def __init__(self, iot_id=None, day=None):
        self.iot_id = iot_id
        self.day = day

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.day, 'day')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['Day'] = self.day
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.day = map.get('Day')
        return self


class SetDeviceRecordLifeCycleRequest(TeaModel):
    def __init__(self, iot_id=None, day=None):
        self.iot_id = iot_id
        self.day = day

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.day, 'day')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['Day'] = self.day
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.day = map.get('Day')
        return self


class SetDeviceRecordLifeCycleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryLiveStreamingRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None, should_encrypt=None, encrypt_type=None, scheme=None):
        self.iot_id = iot_id
        self.stream_type = stream_type
        self.should_encrypt = should_encrypt
        self.encrypt_type = encrypt_type
        self.scheme = scheme

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        result['ShouldEncrypt'] = self.should_encrypt
        result['EncryptType'] = self.encrypt_type
        result['Scheme'] = self.scheme
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        self.should_encrypt = map.get('ShouldEncrypt')
        self.encrypt_type = map.get('EncryptType')
        self.scheme = map.get('Scheme')
        return self


class QueryLiveStreamingResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryLiveStreamingResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryLiveStreamingResponseData(TeaModel):
    def __init__(self, path=None, decrypt_key=None):
        self.path = path
        self.decrypt_key = decrypt_key

    def validate(self):
        self.validate_required(self.path, 'path')
        self.validate_required(self.decrypt_key, 'decrypt_key')

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['DecryptKey'] = self.decrypt_key
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.decrypt_key = map.get('DecryptKey')
        return self


class QueryDevicePictureLifeCycleRequest(TeaModel):
    def __init__(self, iot_id=None):
        self.iot_id = iot_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        return self


class QueryDevicePictureLifeCycleResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDevicePictureLifeCycleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDevicePictureLifeCycleResponseData(TeaModel):
    def __init__(self, iot_id=None, day=None):
        self.iot_id = iot_id
        self.day = day

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.day, 'day')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['Day'] = self.day
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.day = map.get('Day')
        return self


class QueryTimeTemplateRequest(TeaModel):
    def __init__(self, page_size=None, current_page=None):
        self.page_size = page_size
        self.current_page = current_page

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['CurrentPage'] = self.current_page
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.current_page = map.get('CurrentPage')
        return self


class QueryTimeTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryTimeTemplateResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryTimeTemplateResponseDataListTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryTimeTemplateResponseDataList(TeaModel):
    def __init__(self, default_=None, name=None, template_id=None, all_day=None, time_section_list=None):
        self.default_ = default_
        self.name = name
        self.template_id = template_id
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Default'] = self.default_
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.default_ = map.get('Default')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryTimeTemplateResponseDataListTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class QueryTimeTemplateResponseData(TeaModel):
    def __init__(self, total=None, page_count=None, page=None, page_size=None, list_=None):
        self.total = total
        self.page_count = page_count
        self.page = page
        self.page_size = page_size
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageCount'] = self.page_count
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_count = map.get('PageCount')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryTimeTemplateResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class DeleteTimeTemplateRequest(TeaModel):
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


class DeleteTimeTemplateResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class CreateRecordPlanRequest(TeaModel):
    def __init__(self, name=None, template_id=None):
        self.name = name
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        return self


class CreateRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class UpdateRecordPlanRequest(TeaModel):
    def __init__(self, plan_id=None, name=None, template_id=None):
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        return self


class UpdateRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryRecordPlansRequest(TeaModel):
    def __init__(self, current_page=None, page_size=None):
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryRecordPlansResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryRecordPlansResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryRecordPlansResponseDataList(TeaModel):
    def __init__(self, plan_id=None, name=None, template_id=None):
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        return self


class QueryRecordPlansResponseData(TeaModel):
    def __init__(self, total=None, page_size=None, page=None, page_count=None, list_=None):
        self.total = total
        self.page_size = page_size
        self.page = page
        self.page_count = page_count
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        result['PageCount'] = self.page_count
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        self.page_count = map.get('PageCount')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryRecordPlansResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryRecordPlanDetailRequest(TeaModel):
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


class QueryRecordPlanDetailResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryRecordPlanDetailResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryRecordPlanDetailResponseDataTemplateInfoTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryRecordPlanDetailResponseDataTemplateInfo(TeaModel):
    def __init__(self, template_id=None, name=None, default_=None, all_day=None, time_section_list=None):
        self.template_id = template_id
        self.name = name
        self.default_ = default_
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['Default'] = self.default_
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.default_ = map.get('Default')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryRecordPlanDetailResponseDataTemplateInfoTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class QueryRecordPlanDetailResponseData(TeaModel):
    def __init__(self, plan_id=None, name=None, template_id=None, template_info=None):
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        if map.get('TemplateInfo') is not None:
            temp_model = QueryRecordPlanDetailResponseDataTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class DeleteRecordPlanRequest(TeaModel):
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


class DeleteRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class AddRecordPlanDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, plan_id=None, stream_type=None):
        self.iot_id = iot_id
        self.plan_id = plan_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.stream_type, 'stream_type')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PlanId'] = self.plan_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.plan_id = map.get('PlanId')
        self.stream_type = map.get('StreamType')
        return self


class AddRecordPlanDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class DeleteRecordPlanDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.stream_type, 'stream_type')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class DeleteRecordPlanDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryRecordPlanDeviceByPlanRequest(TeaModel):
    def __init__(self, plan_id=None, current_page=None, page_size=None):
        self.plan_id = plan_id
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryRecordPlanDeviceByPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryRecordPlanDeviceByPlanResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryRecordPlanDeviceByPlanResponseDataList(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.stream_type, 'stream_type')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class QueryRecordPlanDeviceByPlanResponseData(TeaModel):
    def __init__(self, total=None, page_count=None, page=None, page_size=None, list_=None):
        self.total = total
        self.page_count = page_count
        self.page = page
        self.page_size = page_size
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageCount'] = self.page_count
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_count = map.get('PageCount')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryRecordPlanDeviceByPlanResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryEventRecordPlansRequest(TeaModel):
    def __init__(self, current_page=None, page_size=None):
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryEventRecordPlansResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryEventRecordPlansResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryEventRecordPlansResponseDataList(TeaModel):
    def __init__(self, event_type=None, plan_id=None, name=None, template_id=None, pre_record_duration=None, record_duration=None):
        self.event_type = event_type
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration

    def validate(self):
        self.validate_required(self.event_type, 'event_type')
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.pre_record_duration, 'pre_record_duration')
        self.validate_required(self.record_duration, 'record_duration')

    def to_map(self):
        result = {}
        result['EventType'] = self.event_type
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        return result

    def from_map(self, map={}):
        self.event_type = map.get('EventType')
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        return self


class QueryEventRecordPlansResponseData(TeaModel):
    def __init__(self, total=None, page_size=None, page=None, page_count=None, list_=None):
        self.total = total
        self.page_size = page_size
        self.page = page
        self.page_count = page_count
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        result['PageCount'] = self.page_count
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        self.page_count = map.get('PageCount')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryEventRecordPlansResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class DeleteEventRecordPlanRequest(TeaModel):
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


class DeleteEventRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryEventRecordPlanDetailRequest(TeaModel):
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


class QueryEventRecordPlanDetailResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryEventRecordPlanDetailResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryEventRecordPlanDetailResponseDataTemplateInfoTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryEventRecordPlanDetailResponseDataTemplateInfo(TeaModel):
    def __init__(self, template_id=None, name=None, default_=None, all_day=None, time_section_list=None):
        self.template_id = template_id
        self.name = name
        self.default_ = default_
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['Default'] = self.default_
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.default_ = map.get('Default')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryEventRecordPlanDetailResponseDataTemplateInfoTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class QueryEventRecordPlanDetailResponseData(TeaModel):
    def __init__(self, pre_record_duration=None, record_duration=None, plan_id=None, name=None, template_id=None, template_info=None):
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.pre_record_duration, 'pre_record_duration')
        self.validate_required(self.record_duration, 'record_duration')
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        if map.get('TemplateInfo') is not None:
            temp_model = QueryEventRecordPlanDetailResponseDataTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class AddEventRecordPlanDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, plan_id=None, stream_type=None):
        self.iot_id = iot_id
        self.plan_id = plan_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PlanId'] = self.plan_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.plan_id = map.get('PlanId')
        self.stream_type = map.get('StreamType')
        return self


class AddEventRecordPlanDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class DeleteEventRecordPlanDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class DeleteEventRecordPlanDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryEventRecordPlanDeviceByDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class QueryEventRecordPlanDeviceByDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryEventRecordPlanDeviceByDeviceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryEventRecordPlanDeviceByDeviceResponseDataTemplateInfoTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryEventRecordPlanDeviceByDeviceResponseDataTemplateInfo(TeaModel):
    def __init__(self, template_id=None, name=None, default_=None, all_day=None, time_section_list=None):
        self.template_id = template_id
        self.name = name
        self.default_ = default_
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['Default'] = self.default_
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.default_ = map.get('Default')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryEventRecordPlanDeviceByDeviceResponseDataTemplateInfoTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class QueryEventRecordPlanDeviceByDeviceResponseData(TeaModel):
    def __init__(self, plan_id=None, name=None, template_id=None, pre_record_duration=None, record_duration=None, template_info=None):
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.pre_record_duration, 'pre_record_duration')
        self.validate_required(self.record_duration, 'record_duration')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        if map.get('TemplateInfo') is not None:
            temp_model = QueryEventRecordPlanDeviceByDeviceResponseDataTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class TriggerRecordRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None, pre_record_duration=None, record_duration=None):
        self.iot_id = iot_id
        self.stream_type = stream_type
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.record_duration, 'record_duration')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        return self


class TriggerRecordResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryDeviceEventRequest(TeaModel):
    def __init__(self, iot_id=None, event_type=None, begin_time=None, end_time=None, current_page=None, page_size=None):
        self.iot_id = iot_id
        self.event_type = event_type
        self.begin_time = begin_time
        self.end_time = end_time
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['EventType'] = self.event_type
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.event_type = map.get('EventType')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryDeviceEventResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDeviceEventResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDeviceEventResponseDataList(TeaModel):
    def __init__(self, event_id=None, event_time=None, event_type=None, event_desc=None, event_pic_id=None, event_data=None):
        self.event_id = event_id
        self.event_time = event_time
        self.event_type = event_type
        self.event_desc = event_desc
        self.event_pic_id = event_pic_id
        self.event_data = event_data

    def validate(self):
        self.validate_required(self.event_id, 'event_id')
        self.validate_required(self.event_time, 'event_time')
        self.validate_required(self.event_type, 'event_type')
        self.validate_required(self.event_desc, 'event_desc')
        self.validate_required(self.event_pic_id, 'event_pic_id')
        self.validate_required(self.event_data, 'event_data')

    def to_map(self):
        result = {}
        result['EventId'] = self.event_id
        result['EventTime'] = self.event_time
        result['EventType'] = self.event_type
        result['EventDesc'] = self.event_desc
        result['EventPicId'] = self.event_pic_id
        result['EventData'] = self.event_data
        return result

    def from_map(self, map={}):
        self.event_id = map.get('EventId')
        self.event_time = map.get('EventTime')
        self.event_type = map.get('EventType')
        self.event_desc = map.get('EventDesc')
        self.event_pic_id = map.get('EventPicId')
        self.event_data = map.get('EventData')
        return self


class QueryDeviceEventResponseData(TeaModel):
    def __init__(self, total=None, page_size=None, page=None, page_count=None, list_=None):
        self.total = total
        self.page_size = page_size
        self.page = page
        self.page_count = page_count
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        result['PageCount'] = self.page_count
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        self.page_count = map.get('PageCount')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryDeviceEventResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryDeviceEventPictureRequest(TeaModel):
    def __init__(self, iot_id=None, event_id=None):
        self.iot_id = iot_id
        self.event_id = event_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.event_id, 'event_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['EventId'] = self.event_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.event_id = map.get('EventId')
        return self


class QueryDeviceEventPictureResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryDevicePictureFileRequest(TeaModel):
    def __init__(self, iot_id=None, capture_id=None, picture_type=None):
        self.iot_id = iot_id
        self.capture_id = capture_id
        self.picture_type = picture_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.capture_id, 'capture_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['CaptureId'] = self.capture_id
        result['PictureType'] = self.picture_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.capture_id = map.get('CaptureId')
        self.picture_type = map.get('PictureType')
        return self


class QueryDevicePictureFileResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryDevicePictureFileResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDevicePictureFileResponseData(TeaModel):
    def __init__(self, iot_id=None, pic_create_time=None, pic_id=None, pic_url=None, thumb_url=None):
        self.iot_id = iot_id
        self.pic_create_time = pic_create_time
        self.pic_id = pic_id
        self.pic_url = pic_url
        self.thumb_url = thumb_url

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.pic_create_time, 'pic_create_time')
        self.validate_required(self.pic_id, 'pic_id')
        self.validate_required(self.pic_url, 'pic_url')
        self.validate_required(self.thumb_url, 'thumb_url')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PicCreateTime'] = self.pic_create_time
        result['PicId'] = self.pic_id
        result['PicUrl'] = self.pic_url
        result['ThumbUrl'] = self.thumb_url
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.pic_create_time = map.get('PicCreateTime')
        self.pic_id = map.get('PicId')
        self.pic_url = map.get('PicUrl')
        self.thumb_url = map.get('ThumbUrl')
        return self


class QueryMonthRecordRequest(TeaModel):
    def __init__(self, iot_id=None, month=None):
        self.iot_id = iot_id
        self.month = month

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.month, 'month')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['Month'] = self.month
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.month = map.get('Month')
        return self


class QueryMonthRecordResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryRecordPlanDeviceByDeviceRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.stream_type, 'stream_type')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class QueryRecordPlanDeviceByDeviceResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryRecordPlanDeviceByDeviceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryRecordPlanDeviceByDeviceResponseDataTemplateInfoTimeSectionList(TeaModel):
    def __init__(self, day_of_week=None, begin=None, end=None):
        self.day_of_week = day_of_week
        self.begin = begin
        self.end = end

    def validate(self):
        self.validate_required(self.day_of_week, 'day_of_week')
        self.validate_required(self.begin, 'begin')
        self.validate_required(self.end, 'end')

    def to_map(self):
        result = {}
        result['DayOfWeek'] = self.day_of_week
        result['Begin'] = self.begin
        result['End'] = self.end
        return result

    def from_map(self, map={}):
        self.day_of_week = map.get('DayOfWeek')
        self.begin = map.get('Begin')
        self.end = map.get('End')
        return self


class QueryRecordPlanDeviceByDeviceResponseDataTemplateInfo(TeaModel):
    def __init__(self, template_id=None, name=None, default_=None, all_day=None, time_section_list=None):
        self.template_id = template_id
        self.name = name
        self.default_ = default_
        self.all_day = all_day
        self.time_section_list = []

    def validate(self):
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.default_, 'default_')
        self.validate_required(self.all_day, 'all_day')
        self.validate_required(self.time_section_list, 'time_section_list')
        if self.time_section_list:
            for k in self.time_section_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TemplateId'] = self.template_id
        result['Name'] = self.name
        result['Default'] = self.default_
        result['AllDay'] = self.all_day
        result['TimeSectionList'] = []
        if self.time_section_list is not None:
            for k in self.time_section_list:
                result['TimeSectionList'].append(k.to_map() if k else None)
        else:
            result['TimeSectionList'] = None
        return result

    def from_map(self, map={}):
        self.template_id = map.get('TemplateId')
        self.name = map.get('Name')
        self.default_ = map.get('Default')
        self.all_day = map.get('AllDay')
        self.time_section_list = []
        if map.get('TimeSectionList') is not None:
            for k in map.get('TimeSectionList'):
                temp_model = QueryRecordPlanDeviceByDeviceResponseDataTemplateInfoTimeSectionList()
                temp_model = temp_model.from_map(k)
                self.time_section_list.append(temp_model)
        else:
            self.time_section_list = None
        return self


class QueryRecordPlanDeviceByDeviceResponseData(TeaModel):
    def __init__(self, plan_id=None, name=None, template_id=None, template_info=None):
        self.plan_id = plan_id
        self.name = name
        self.template_id = template_id
        self.template_info = template_info

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.template_id, 'template_id')
        self.validate_required(self.template_info, 'template_info')
        if self.template_info:
            self.template_info.validate()

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['TemplateId'] = self.template_id
        if self.template_info is not None:
            result['TemplateInfo'] = self.template_info.to_map()
        else:
            result['TemplateInfo'] = None
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.template_id = map.get('TemplateId')
        if map.get('TemplateInfo') is not None:
            temp_model = QueryRecordPlanDeviceByDeviceResponseDataTemplateInfo()
            self.template_info = temp_model.from_map(map['TemplateInfo'])
        else:
            self.template_info = None
        return self


class UpdateEventRecordPlanRequest(TeaModel):
    def __init__(self, plan_id=None, name=None, event_types=None, pre_record_duration=None, record_duration=None, template_id=None):
        self.plan_id = plan_id
        self.name = name
        self.event_types = event_types
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.record_duration, 'record_duration')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['Name'] = self.name
        result['EventTypes'] = self.event_types
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.name = map.get('Name')
        self.event_types = map.get('EventTypes')
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        self.template_id = map.get('TemplateId')
        return self


class UpdateEventRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        return self


class QueryEventRecordPlanDeviceByPlanRequest(TeaModel):
    def __init__(self, plan_id=None, current_page=None, page_size=None):
        self.plan_id = plan_id
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.plan_id, 'plan_id')

    def to_map(self):
        result = {}
        result['PlanId'] = self.plan_id
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.plan_id = map.get('PlanId')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryEventRecordPlanDeviceByPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryEventRecordPlanDeviceByPlanResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryEventRecordPlanDeviceByPlanResponseDataList(TeaModel):
    def __init__(self, iot_id=None, stream_type=None):
        self.iot_id = iot_id
        self.stream_type = stream_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.stream_type, 'stream_type')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        return self


class QueryEventRecordPlanDeviceByPlanResponseData(TeaModel):
    def __init__(self, total=None, page_count=None, page=None, page_size=None, list_=None):
        self.total = total
        self.page_count = page_count
        self.page = page
        self.page_size = page_size
        self.list_ = []

    def validate(self):
        self.validate_required(self.total, 'total')
        self.validate_required(self.page_count, 'page_count')
        self.validate_required(self.page, 'page')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Total'] = self.total
        result['PageCount'] = self.page_count
        result['Page'] = self.page
        result['PageSize'] = self.page_size
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.total = map.get('Total')
        self.page_count = map.get('PageCount')
        self.page = map.get('Page')
        self.page_size = map.get('PageSize')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryEventRecordPlanDeviceByPlanResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class TriggerCapturePictureRequest(TeaModel):
    def __init__(self, iot_id=None):
        self.iot_id = iot_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        return self


class TriggerCapturePictureResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryDeviceEventRecordRequest(TeaModel):
    def __init__(self, iot_id=None, event_id=None):
        self.iot_id = iot_id
        self.event_id = event_id

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.event_id, 'event_id')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['EventId'] = self.event_id
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.event_id = map.get('EventId')
        return self


class QueryDeviceEventRecordResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k.to_map() if k else None)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                temp_model = QueryDeviceEventRecordResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class QueryDeviceEventRecordResponseData(TeaModel):
    def __init__(self, file_name=None, vod_url=None, begin_time=None, end_time=None):
        self.file_name = file_name
        self.vod_url = vod_url
        self.begin_time = begin_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.vod_url, 'vod_url')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['FileName'] = self.file_name
        result['VodUrl'] = self.vod_url
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.file_name = map.get('FileName')
        self.vod_url = map.get('VodUrl')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        return self


class QueryPictureFilesRequest(TeaModel):
    def __init__(self, iot_id=None, begin_time=None, end_time=None, current_page=None, page_size=None, picture_type=None, picture_source=None):
        self.iot_id = iot_id
        self.begin_time = begin_time
        self.end_time = end_time
        self.current_page = current_page
        self.page_size = page_size
        self.picture_type = picture_type
        self.picture_source = picture_source

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        result['PictureType'] = self.picture_type
        result['PictureSource'] = self.picture_source
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        self.picture_type = map.get('PictureType')
        self.picture_source = map.get('PictureSource')
        return self


class QueryPictureFilesResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryPictureFilesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryPictureFilesResponseDataList(TeaModel):
    def __init__(self, iot_id=None, pic_create_time=None, pic_id=None, pic_url=None, thumb_url=None):
        self.iot_id = iot_id
        self.pic_create_time = pic_create_time
        self.pic_id = pic_id
        self.pic_url = pic_url
        self.thumb_url = thumb_url

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.pic_create_time, 'pic_create_time')
        self.validate_required(self.pic_id, 'pic_id')
        self.validate_required(self.pic_url, 'pic_url')
        self.validate_required(self.thumb_url, 'thumb_url')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['PicCreateTime'] = self.pic_create_time
        result['PicId'] = self.pic_id
        result['PicUrl'] = self.pic_url
        result['ThumbUrl'] = self.thumb_url
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.pic_create_time = map.get('PicCreateTime')
        self.pic_id = map.get('PicId')
        self.pic_url = map.get('PicUrl')
        self.thumb_url = map.get('ThumbUrl')
        return self


class QueryPictureFilesResponseData(TeaModel):
    def __init__(self, page_size=None, page=None, list_=None):
        self.page_size = page_size
        self.page = page
        self.list_ = []

    def validate(self):
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page, 'page')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryPictureFilesResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryRecordRequest(TeaModel):
    def __init__(self, iot_id=None, stream_type=None, begin_time=None, end_time=None, record_type=None, current_page=None, page_size=None):
        self.iot_id = iot_id
        self.stream_type = stream_type
        self.begin_time = begin_time
        self.end_time = end_time
        self.record_type = record_type
        self.current_page = current_page
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['StreamType'] = self.stream_type
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['RecordType'] = self.record_type
        result['CurrentPage'] = self.current_page
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.stream_type = map.get('StreamType')
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.record_type = map.get('RecordType')
        self.current_page = map.get('CurrentPage')
        self.page_size = map.get('PageSize')
        return self


class QueryRecordResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = QueryRecordResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryRecordResponseDataList(TeaModel):
    def __init__(self, begin_time=None, end_time=None, record_type=None, stream_type=None, file_name=None, file_size=None, video_frame_number=None):
        self.begin_time = begin_time
        self.end_time = end_time
        self.record_type = record_type
        self.stream_type = stream_type
        self.file_name = file_name
        self.file_size = file_size
        self.video_frame_number = video_frame_number

    def validate(self):
        self.validate_required(self.begin_time, 'begin_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.record_type, 'record_type')
        self.validate_required(self.stream_type, 'stream_type')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.file_size, 'file_size')
        self.validate_required(self.video_frame_number, 'video_frame_number')

    def to_map(self):
        result = {}
        result['BeginTime'] = self.begin_time
        result['EndTime'] = self.end_time
        result['RecordType'] = self.record_type
        result['StreamType'] = self.stream_type
        result['FileName'] = self.file_name
        result['FileSize'] = self.file_size
        result['VideoFrameNumber'] = self.video_frame_number
        return result

    def from_map(self, map={}):
        self.begin_time = map.get('BeginTime')
        self.end_time = map.get('EndTime')
        self.record_type = map.get('RecordType')
        self.stream_type = map.get('StreamType')
        self.file_name = map.get('FileName')
        self.file_size = map.get('FileSize')
        self.video_frame_number = map.get('VideoFrameNumber')
        return self


class QueryRecordResponseData(TeaModel):
    def __init__(self, page_size=None, page=None, list_=None):
        self.page_size = page_size
        self.page = page
        self.list_ = []

    def validate(self):
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page, 'page')
        self.validate_required(self.list_, 'list_')
        if self.list_:
            for k in self.list_:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['Page'] = self.page
        result['List'] = []
        if self.list_ is not None:
            for k in self.list_:
                result['List'].append(k.to_map() if k else None)
        else:
            result['List'] = None
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page = map.get('Page')
        self.list_ = []
        if map.get('List') is not None:
            for k in map.get('List'):
                temp_model = QueryRecordResponseDataList()
                temp_model = temp_model.from_map(k)
                self.list_.append(temp_model)
        else:
            self.list_ = None
        return self


class QueryRecordUrlRequest(TeaModel):
    def __init__(self, iot_id=None, file_name=None):
        self.iot_id = iot_id
        self.file_name = file_name

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.file_name, 'file_name')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['FileName'] = self.file_name
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.file_name = map.get('FileName')
        return self


class QueryRecordUrlResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self


class QueryDeviceFileVodRequest(TeaModel):
    def __init__(self, iot_id=None, file_name=None, should_encrypt=None, encrypt_type=None):
        self.iot_id = iot_id
        self.file_name = file_name
        self.should_encrypt = should_encrypt
        self.encrypt_type = encrypt_type

    def validate(self):
        self.validate_required(self.iot_id, 'iot_id')
        self.validate_required(self.file_name, 'file_name')

    def to_map(self):
        result = {}
        result['IotId'] = self.iot_id
        result['FileName'] = self.file_name
        result['ShouldEncrypt'] = self.should_encrypt
        result['EncryptType'] = self.encrypt_type
        return result

    def from_map(self, map={}):
        self.iot_id = map.get('IotId')
        self.file_name = map.get('FileName')
        self.should_encrypt = map.get('ShouldEncrypt')
        self.encrypt_type = map.get('EncryptType')
        return self


class QueryDeviceFileVodResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, decrypt_key=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.decrypt_key = decrypt_key
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.decrypt_key, 'decrypt_key')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['DecryptKey'] = self.decrypt_key
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.decrypt_key = map.get('DecryptKey')
        if map.get('Data') is not None:
            temp_model = QueryDeviceFileVodResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class QueryDeviceFileVodResponseData(TeaModel):
    def __init__(self, vod_url=None):
        self.vod_url = vod_url

    def validate(self):
        self.validate_required(self.vod_url, 'vod_url')

    def to_map(self):
        result = {}
        result['VodUrl'] = self.vod_url
        return result

    def from_map(self, map={}):
        self.vod_url = map.get('VodUrl')
        return self


class CreateEventRecordPlanRequest(TeaModel):
    def __init__(self, name=None, event_types=None, pre_record_duration=None, record_duration=None, template_id=None):
        self.name = name
        self.event_types = event_types
        self.pre_record_duration = pre_record_duration
        self.record_duration = record_duration
        self.template_id = template_id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.record_duration, 'record_duration')
        self.validate_required(self.template_id, 'template_id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['EventTypes'] = self.event_types
        result['PreRecordDuration'] = self.pre_record_duration
        result['RecordDuration'] = self.record_duration
        result['TemplateId'] = self.template_id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.event_types = map.get('EventTypes')
        self.pre_record_duration = map.get('PreRecordDuration')
        self.record_duration = map.get('RecordDuration')
        self.template_id = map.get('TemplateId')
        return self


class CreateEventRecordPlanResponse(TeaModel):
    def __init__(self, request_id=None, success=None, error_message=None, code=None, data=None):
        self.request_id = request_id
        self.success = success
        self.error_message = error_message
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['ErrorMessage'] = self.error_message
        result['Code'] = self.code
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.error_message = map.get('ErrorMessage')
        self.code = map.get('Code')
        self.data = map.get('Data')
        return self

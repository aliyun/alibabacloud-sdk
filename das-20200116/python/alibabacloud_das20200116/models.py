# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DescribeDiagnosticReportListRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, dbinstance_id=None, page_no=None, page_size=None, start_time=None, end_time=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.dbinstance_id = dbinstance_id
        self.page_no = page_no
        self.page_size = page_size
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['DBInstanceId'] = self.dbinstance_id
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class DescribeDiagnosticReportListResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None, success=None, synchro=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        return self


class CreateDiagnosticReportRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, dbinstance_id=None, start_time=None, end_time=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.dbinstance_id = dbinstance_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['DBInstanceId'] = self.dbinstance_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.dbinstance_id = map.get('DBInstanceId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class CreateDiagnosticReportResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None, success=None, synchro=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        return self


class AccessHDMInstanceRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, instance_area=None, instance_id=None, ip=None, port=None, engine=None, username=None, password=None, instance_alias=None, network_type=None, vpc_id=None, region=None, caller_bid=None, tenant_id=None, owner_id_signature=None, caller_type=None, caller_uid=None, target=None, product=None, external=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.instance_area = instance_area
        self.instance_id = instance_id
        self.ip = ip
        self.port = port
        self.engine = engine
        self.username = username
        self.password = password
        self.instance_alias = instance_alias
        self.network_type = network_type
        self.vpc_id = vpc_id
        self.region = region
        self.caller_bid = caller_bid
        self.tenant_id = tenant_id
        self.owner_id_signature = owner_id_signature
        self.caller_type = caller_type
        self.caller_uid = caller_uid
        self.target = target
        self.product = product
        self.external = external

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['InstanceArea'] = self.instance_area
        result['InstanceId'] = self.instance_id
        result['Ip'] = self.ip
        result['Port'] = self.port
        result['Engine'] = self.engine
        result['Username'] = self.username
        result['Password'] = self.password
        result['InstanceAlias'] = self.instance_alias
        result['NetworkType'] = self.network_type
        result['VpcId'] = self.vpc_id
        result['Region'] = self.region
        result['CallerBid'] = self.caller_bid
        result['TenantId'] = self.tenant_id
        result['OwnerIdSignature'] = self.owner_id_signature
        result['CallerType'] = self.caller_type
        result['CallerUid'] = self.caller_uid
        result['Target'] = self.target
        result['Product'] = self.product
        result['External'] = self.external
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.instance_area = map.get('InstanceArea')
        self.instance_id = map.get('InstanceId')
        self.ip = map.get('Ip')
        self.port = map.get('Port')
        self.engine = map.get('Engine')
        self.username = map.get('Username')
        self.password = map.get('Password')
        self.instance_alias = map.get('InstanceAlias')
        self.network_type = map.get('NetworkType')
        self.vpc_id = map.get('VpcId')
        self.region = map.get('Region')
        self.caller_bid = map.get('CallerBid')
        self.tenant_id = map.get('TenantId')
        self.owner_id_signature = map.get('OwnerIdSignature')
        self.caller_type = map.get('CallerType')
        self.caller_uid = map.get('CallerUid')
        self.target = map.get('Target')
        self.product = map.get('Product')
        self.external = map.get('External')
        return self


class AccessHDMInstanceResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None, success=None, synchro=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        return self


class SyncHDMAliyunResourceRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, async=None, wait_for_modify_security_ips=None, resource_types=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.async = async
        self.wait_for_modify_security_ips = wait_for_modify_security_ips
        self.resource_types = resource_types

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['Async'] = self.async
        result['WaitForModifySecurityIps'] = self.wait_for_modify_security_ips
        result['ResourceTypes'] = self.resource_types
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.async = map.get('Async')
        self.wait_for_modify_security_ips = map.get('WaitForModifySecurityIps')
        self.resource_types = map.get('ResourceTypes')
        return self


class SyncHDMAliyunResourceResponse(TeaModel):
    def __init__(self, code=None, data=None, message=None, request_id=None, success=None, synchro=None):
        self.code = code
        self.data = data
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        return self


class GetHDMLastAliyunResourceSyncResultRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        return self


class GetHDMLastAliyunResourceSyncResultResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, synchro=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        if map.get('Data') is not None:
            temp_model = GetHDMLastAliyunResourceSyncResultResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult(TeaModel):
    def __init__(self, resource_type=None, sync_count=None, success=None, err_msg=None):
        self.resource_type = resource_type
        self.sync_count = sync_count
        self.success = success
        self.err_msg = err_msg

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.sync_count, 'sync_count')
        self.validate_required(self.success, 'success')
        self.validate_required(self.err_msg, 'err_msg')

    def to_map(self):
        result = {}
        result['ResourceType'] = self.resource_type
        result['SyncCount'] = self.sync_count
        result['Success'] = self.success
        result['ErrMsg'] = self.err_msg
        return result

    def from_map(self, map={}):
        self.resource_type = map.get('ResourceType')
        self.sync_count = map.get('SyncCount')
        self.success = map.get('Success')
        self.err_msg = map.get('ErrMsg')
        return self


class GetHDMLastAliyunResourceSyncResultResponseDataSubResults(TeaModel):
    def __init__(self, resource_sync_sub_result=None):
        self.resource_sync_sub_result = []

    def validate(self):
        self.validate_required(self.resource_sync_sub_result, 'resource_sync_sub_result')
        if self.resource_sync_sub_result:
            for k in self.resource_sync_sub_result:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ResourceSyncSubResult'] = []
        if self.resource_sync_sub_result is not None:
            for k in self.resource_sync_sub_result:
                result['ResourceSyncSubResult'].append(k.to_map() if k else None)
        else:
            result['ResourceSyncSubResult'] = None
        return result

    def from_map(self, map={}):
        self.resource_sync_sub_result = []
        if map.get('ResourceSyncSubResult') is not None:
            for k in map.get('ResourceSyncSubResult'):
                temp_model = GetHDMLastAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult()
                temp_model = temp_model.from_map(k)
                self.resource_sync_sub_result.append(temp_model)
        else:
            self.resource_sync_sub_result = None
        return self


class GetHDMLastAliyunResourceSyncResultResponseData(TeaModel):
    def __init__(self, sync_status=None, error_msg=None, results=None, sub_results=None):
        self.sync_status = sync_status
        self.error_msg = error_msg
        self.results = results
        self.sub_results = sub_results

    def validate(self):
        self.validate_required(self.sync_status, 'sync_status')
        self.validate_required(self.error_msg, 'error_msg')
        self.validate_required(self.results, 'results')
        self.validate_required(self.sub_results, 'sub_results')
        if self.sub_results:
            self.sub_results.validate()

    def to_map(self):
        result = {}
        result['SyncStatus'] = self.sync_status
        result['ErrorMsg'] = self.error_msg
        result['Results'] = self.results
        if self.sub_results is not None:
            result['SubResults'] = self.sub_results.to_map()
        else:
            result['SubResults'] = None
        return result

    def from_map(self, map={}):
        self.sync_status = map.get('SyncStatus')
        self.error_msg = map.get('ErrorMsg')
        self.results = map.get('Results')
        if map.get('SubResults') is not None:
            temp_model = GetHDMLastAliyunResourceSyncResultResponseDataSubResults()
            self.sub_results = temp_model.from_map(map['SubResults'])
        else:
            self.sub_results = None
        return self


class GetEndpointSwitchTaskRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, task_id=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.task_id = task_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.task_id = map.get('TaskId')
        return self


class GetEndpointSwitchTaskResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, synchro=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        if map.get('Data') is not None:
            temp_model = GetEndpointSwitchTaskResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetEndpointSwitchTaskResponseData(TeaModel):
    def __init__(self, account_id=None, db_link_id=None, task_id=None, status=None, ori_uuid=None, uuid=None, err_msg=None):
        self.account_id = account_id
        self.db_link_id = db_link_id
        self.task_id = task_id
        self.status = status
        self.ori_uuid = ori_uuid
        self.uuid = uuid
        self.err_msg = err_msg

    def validate(self):
        self.validate_required(self.account_id, 'account_id')
        self.validate_required(self.db_link_id, 'db_link_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.ori_uuid, 'ori_uuid')
        self.validate_required(self.uuid, 'uuid')
        self.validate_required(self.err_msg, 'err_msg')

    def to_map(self):
        result = {}
        result['AccountId'] = self.account_id
        result['DbLinkId'] = self.db_link_id
        result['TaskId'] = self.task_id
        result['Status'] = self.status
        result['OriUuid'] = self.ori_uuid
        result['Uuid'] = self.uuid
        result['ErrMsg'] = self.err_msg
        return result

    def from_map(self, map={}):
        self.account_id = map.get('AccountId')
        self.db_link_id = map.get('DbLinkId')
        self.task_id = map.get('TaskId')
        self.status = map.get('Status')
        self.ori_uuid = map.get('OriUuid')
        self.uuid = map.get('Uuid')
        self.err_msg = map.get('ErrMsg')
        return self


class GetHDMAliyunResourceSyncResultRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, task_id=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.task_id = task_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.task_id = map.get('TaskId')
        return self


class GetHDMAliyunResourceSyncResultResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, synchro=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        if map.get('Data') is not None:
            temp_model = GetHDMAliyunResourceSyncResultResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult(TeaModel):
    def __init__(self, resource_type=None, sync_count=None, success=None, err_msg=None):
        self.resource_type = resource_type
        self.sync_count = sync_count
        self.success = success
        self.err_msg = err_msg

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.sync_count, 'sync_count')
        self.validate_required(self.success, 'success')
        self.validate_required(self.err_msg, 'err_msg')

    def to_map(self):
        result = {}
        result['ResourceType'] = self.resource_type
        result['SyncCount'] = self.sync_count
        result['Success'] = self.success
        result['ErrMsg'] = self.err_msg
        return result

    def from_map(self, map={}):
        self.resource_type = map.get('ResourceType')
        self.sync_count = map.get('SyncCount')
        self.success = map.get('Success')
        self.err_msg = map.get('ErrMsg')
        return self


class GetHDMAliyunResourceSyncResultResponseDataSubResults(TeaModel):
    def __init__(self, resource_sync_sub_result=None):
        self.resource_sync_sub_result = []

    def validate(self):
        self.validate_required(self.resource_sync_sub_result, 'resource_sync_sub_result')
        if self.resource_sync_sub_result:
            for k in self.resource_sync_sub_result:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ResourceSyncSubResult'] = []
        if self.resource_sync_sub_result is not None:
            for k in self.resource_sync_sub_result:
                result['ResourceSyncSubResult'].append(k.to_map() if k else None)
        else:
            result['ResourceSyncSubResult'] = None
        return result

    def from_map(self, map={}):
        self.resource_sync_sub_result = []
        if map.get('ResourceSyncSubResult') is not None:
            for k in map.get('ResourceSyncSubResult'):
                temp_model = GetHDMAliyunResourceSyncResultResponseDataSubResultsResourceSyncSubResult()
                temp_model = temp_model.from_map(k)
                self.resource_sync_sub_result.append(temp_model)
        else:
            self.resource_sync_sub_result = None
        return self


class GetHDMAliyunResourceSyncResultResponseData(TeaModel):
    def __init__(self, sync_status=None, error_msg=None, results=None, sub_results=None):
        self.sync_status = sync_status
        self.error_msg = error_msg
        self.results = results
        self.sub_results = sub_results

    def validate(self):
        self.validate_required(self.sync_status, 'sync_status')
        self.validate_required(self.error_msg, 'error_msg')
        self.validate_required(self.results, 'results')
        self.validate_required(self.sub_results, 'sub_results')
        if self.sub_results:
            self.sub_results.validate()

    def to_map(self):
        result = {}
        result['SyncStatus'] = self.sync_status
        result['ErrorMsg'] = self.error_msg
        result['Results'] = self.results
        if self.sub_results is not None:
            result['SubResults'] = self.sub_results.to_map()
        else:
            result['SubResults'] = None
        return result

    def from_map(self, map={}):
        self.sync_status = map.get('SyncStatus')
        self.error_msg = map.get('ErrorMsg')
        self.results = map.get('Results')
        if map.get('SubResults') is not None:
            temp_model = GetHDMAliyunResourceSyncResultResponseDataSubResults()
            self.sub_results = temp_model.from_map(map['SubResults'])
        else:
            self.sub_results = None
        return self


class AddHDMInstanceRequest(TeaModel):
    def __init__(self, uid=None, access_key=None, signature=None, timestamp=None, context=None, skip_auth=None, user_id=None, instance_area=None, instance_id=None, ip=None, port=None, engine=None, username=None, password=None, instance_alias=None, network_type=None, vpc_id=None, region=None, flush_account=None):
        self.uid = uid
        self.access_key = access_key
        self.signature = signature
        self.timestamp = timestamp
        self.context = context
        self.skip_auth = skip_auth
        self.user_id = user_id
        self.instance_area = instance_area
        self.instance_id = instance_id
        self.ip = ip
        self.port = port
        self.engine = engine
        self.username = username
        self.password = password
        self.instance_alias = instance_alias
        self.network_type = network_type
        self.vpc_id = vpc_id
        self.region = region
        self.flush_account = flush_account

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Uid'] = self.uid
        result['accessKey'] = self.access_key
        result['signature'] = self.signature
        result['timestamp'] = self.timestamp
        result['__context'] = self.context
        result['skipAuth'] = self.skip_auth
        result['UserId'] = self.user_id
        result['InstanceArea'] = self.instance_area
        result['InstanceId'] = self.instance_id
        result['Ip'] = self.ip
        result['Port'] = self.port
        result['Engine'] = self.engine
        result['Username'] = self.username
        result['Password'] = self.password
        result['InstanceAlias'] = self.instance_alias
        result['NetworkType'] = self.network_type
        result['VpcId'] = self.vpc_id
        result['Region'] = self.region
        result['FlushAccount'] = self.flush_account
        return result

    def from_map(self, map={}):
        self.uid = map.get('Uid')
        self.access_key = map.get('accessKey')
        self.signature = map.get('signature')
        self.timestamp = map.get('timestamp')
        self.context = map.get('__context')
        self.skip_auth = map.get('skipAuth')
        self.user_id = map.get('UserId')
        self.instance_area = map.get('InstanceArea')
        self.instance_id = map.get('InstanceId')
        self.ip = map.get('Ip')
        self.port = map.get('Port')
        self.engine = map.get('Engine')
        self.username = map.get('Username')
        self.password = map.get('Password')
        self.instance_alias = map.get('InstanceAlias')
        self.network_type = map.get('NetworkType')
        self.vpc_id = map.get('VpcId')
        self.region = map.get('Region')
        self.flush_account = map.get('FlushAccount')
        return self


class AddHDMInstanceResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, success=None, synchro=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.success = success
        self.synchro = synchro
        self.data = data

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')
        self.validate_required(self.synchro, 'synchro')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        result['Synchro'] = self.synchro
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        self.synchro = map.get('Synchro')
        if map.get('Data') is not None:
            temp_model = AddHDMInstanceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AddHDMInstanceResponseData(TeaModel):
    def __init__(self, instance_id=None, vpc_id=None, ip=None, port=None, uuid=None, role=None, code=None, error=None, tenant_id=None, owner_id=None, token=None, caller_uid=None):
        self.instance_id = instance_id
        self.vpc_id = vpc_id
        self.ip = ip
        self.port = port
        self.uuid = uuid
        self.role = role
        self.code = code
        self.error = error
        self.tenant_id = tenant_id
        self.owner_id = owner_id
        self.token = token
        self.caller_uid = caller_uid

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.ip, 'ip')
        self.validate_required(self.port, 'port')
        self.validate_required(self.uuid, 'uuid')
        self.validate_required(self.role, 'role')
        self.validate_required(self.code, 'code')
        self.validate_required(self.error, 'error')
        self.validate_required(self.tenant_id, 'tenant_id')
        self.validate_required(self.owner_id, 'owner_id')
        self.validate_required(self.token, 'token')
        self.validate_required(self.caller_uid, 'caller_uid')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['VpcId'] = self.vpc_id
        result['Ip'] = self.ip
        result['Port'] = self.port
        result['Uuid'] = self.uuid
        result['Role'] = self.role
        result['Code'] = self.code
        result['Error'] = self.error
        result['TenantId'] = self.tenant_id
        result['OwnerId'] = self.owner_id
        result['Token'] = self.token
        result['CallerUid'] = self.caller_uid
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.vpc_id = map.get('VpcId')
        self.ip = map.get('Ip')
        self.port = map.get('Port')
        self.uuid = map.get('Uuid')
        self.role = map.get('Role')
        self.code = map.get('Code')
        self.error = map.get('Error')
        self.tenant_id = map.get('TenantId')
        self.owner_id = map.get('OwnerId')
        self.token = map.get('Token')
        self.caller_uid = map.get('CallerUid')
        return self

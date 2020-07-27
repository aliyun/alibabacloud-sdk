# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListRobotTaskCallsRequest(TeaModel):
    def __init__(self, page_no=None, page_size=None, task_id=None, duration_from=None, duration_to=None, dialog_count_from=None, dialog_count_to=None, hangup_direction=None, call_result=None, called=None):
        self.page_no = page_no
        self.page_size = page_size
        self.task_id = task_id
        self.duration_from = duration_from
        self.duration_to = duration_to
        self.dialog_count_from = dialog_count_from
        self.dialog_count_to = dialog_count_to
        self.hangup_direction = hangup_direction
        self.call_result = call_result
        self.called = called

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['TaskId'] = self.task_id
        result['DurationFrom'] = self.duration_from
        result['DurationTo'] = self.duration_to
        result['DialogCountFrom'] = self.dialog_count_from
        result['DialogCountTo'] = self.dialog_count_to
        result['HangupDirection'] = self.hangup_direction
        result['CallResult'] = self.call_result
        result['Called'] = self.called
        return result

    def from_map(self, map={}):
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.task_id = map.get('TaskId')
        self.duration_from = map.get('DurationFrom')
        self.duration_to = map.get('DurationTo')
        self.dialog_count_from = map.get('DialogCountFrom')
        self.dialog_count_to = map.get('DialogCountTo')
        self.hangup_direction = map.get('HangupDirection')
        self.call_result = map.get('CallResult')
        self.called = map.get('Called')
        return self


class ListRobotTaskCallsResponse(TeaModel):
    def __init__(self, request_id=None, data=None, page_size=None, page_no=None, total_count=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.page_size = page_size
        self.page_no = page_no
        self.total_count = total_count
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        result['TotalCount'] = self.total_count
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        self.total_count = map.get('TotalCount')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DoRtcNumberAuthRequest(TeaModel):
    def __init__(self, phone_number=None):
        self.phone_number = phone_number

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        return self


class DoRtcNumberAuthResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class UndoRtcNumberAuthRequest(TeaModel):
    def __init__(self, phone_number=None):
        self.phone_number = phone_number

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        return self


class UndoRtcNumberAuthResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRtcNumberAuthStatusRequest(TeaModel):
    def __init__(self, phone_number=None):
        self.phone_number = phone_number

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        return self


class QueryRtcNumberAuthStatusResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class ListOrderedNumbersRequest(TeaModel):
    def __init__(self, prod_code=None):
        self.prod_code = prod_code

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ProdCode'] = self.prod_code
        return result

    def from_map(self, map={}):
        self.prod_code = map.get('ProdCode')
        return self


class ListOrderedNumbersResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, numbers=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.numbers = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.numbers, 'numbers')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['Numbers'] = []
        if self.numbers is not None:
            for k in self.numbers:
                result['Numbers'].append(k)
        else:
            result['Numbers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.numbers = []
        if map.get('Numbers') is not None:
            for k in map.get('Numbers'):
                self.numbers.append(k)
        else:
            self.numbers = None
        return self


class StartMicroOutboundRequest(TeaModel):
    def __init__(self, prod_code=None, account_type=None, account_id=None, command_code=None, calling_number=None, called_number=None, ext_info=None, app_name=None):
        self.prod_code = prod_code
        self.account_type = account_type
        self.account_id = account_id
        self.command_code = command_code
        self.calling_number = calling_number
        self.called_number = called_number
        self.ext_info = ext_info
        self.app_name = app_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ProdCode'] = self.prod_code
        result['AccountType'] = self.account_type
        result['AccountId'] = self.account_id
        result['CommandCode'] = self.command_code
        result['CallingNumber'] = self.calling_number
        result['CalledNumber'] = self.called_number
        result['ExtInfo'] = self.ext_info
        result['AppName'] = self.app_name
        return result

    def from_map(self, map={}):
        self.prod_code = map.get('ProdCode')
        self.account_type = map.get('AccountType')
        self.account_id = map.get('AccountId')
        self.command_code = map.get('CommandCode')
        self.calling_number = map.get('CallingNumber')
        self.called_number = map.get('CalledNumber')
        self.ext_info = map.get('ExtInfo')
        self.app_name = map.get('AppName')
        return self


class StartMicroOutboundResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, customer_info=None, invoke_cmd_id=None, invoke_create_time=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.customer_info = customer_info
        self.invoke_cmd_id = invoke_cmd_id
        self.invoke_create_time = invoke_create_time

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.customer_info, 'customer_info')
        self.validate_required(self.invoke_cmd_id, 'invoke_cmd_id')
        self.validate_required(self.invoke_create_time, 'invoke_create_time')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['CustomerInfo'] = self.customer_info
        result['InvokeCmdId'] = self.invoke_cmd_id
        result['InvokeCreateTime'] = self.invoke_create_time
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.customer_info = map.get('CustomerInfo')
        self.invoke_cmd_id = map.get('InvokeCmdId')
        self.invoke_create_time = map.get('InvokeCreateTime')
        return self


class ListOutboundStrategiesRequest(TeaModel):
    def __init__(self, prod_code=None, bu_id=None, keyword=None):
        self.prod_code = prod_code
        self.bu_id = bu_id
        self.keyword = keyword

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ProdCode'] = self.prod_code
        result['BuId'] = self.bu_id
        result['Keyword'] = self.keyword
        return result

    def from_map(self, map={}):
        self.prod_code = map.get('ProdCode')
        self.bu_id = map.get('BuId')
        self.keyword = map.get('Keyword')
        return self


class ListOutboundStrategiesResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, outbound_strategies=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.outbound_strategies = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.outbound_strategies, 'outbound_strategies')
        if self.outbound_strategies:
            for k in self.outbound_strategies:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['OutboundStrategies'] = []
        if self.outbound_strategies is not None:
            for k in self.outbound_strategies:
                result['OutboundStrategies'].append(k.to_map() if k else None)
        else:
            result['OutboundStrategies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.outbound_strategies = []
        if map.get('OutboundStrategies') is not None:
            for k in map.get('OutboundStrategies'):
                temp_model = ListOutboundStrategiesResponseOutboundStrategies()
                temp_model = temp_model.from_map(k)
                self.outbound_strategies.append(temp_model)
        else:
            self.outbound_strategies = None
        return self


class ListOutboundStrategiesResponseOutboundStrategies(TeaModel):
    def __init__(self, id=None, gmt_create_str=None, gmt_modified_str=None, creator_id=None, creator_name=None, modifier_id=None, modifier_name=None, bu_id=None, department_id=None, name=None, num_type=None, outbound_num=None, robot_type=None, robot_id=None, robot_name=None, resource_allocation=None, scene_name=None, rule_code=None, status=None, ext_attr=None, process=None, success_rate=None):
        self.id = id
        self.gmt_create_str = gmt_create_str
        self.gmt_modified_str = gmt_modified_str
        self.creator_id = creator_id
        self.creator_name = creator_name
        self.modifier_id = modifier_id
        self.modifier_name = modifier_name
        self.bu_id = bu_id
        self.department_id = department_id
        self.name = name
        self.num_type = num_type
        self.outbound_num = outbound_num
        self.robot_type = robot_type
        self.robot_id = robot_id
        self.robot_name = robot_name
        self.resource_allocation = resource_allocation
        self.scene_name = scene_name
        self.rule_code = rule_code
        self.status = status
        self.ext_attr = ext_attr
        self.process = process
        self.success_rate = success_rate

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.gmt_create_str, 'gmt_create_str')
        self.validate_required(self.gmt_modified_str, 'gmt_modified_str')
        self.validate_required(self.creator_id, 'creator_id')
        self.validate_required(self.creator_name, 'creator_name')
        self.validate_required(self.modifier_id, 'modifier_id')
        self.validate_required(self.modifier_name, 'modifier_name')
        self.validate_required(self.bu_id, 'bu_id')
        self.validate_required(self.department_id, 'department_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.num_type, 'num_type')
        self.validate_required(self.outbound_num, 'outbound_num')
        self.validate_required(self.robot_type, 'robot_type')
        self.validate_required(self.robot_id, 'robot_id')
        self.validate_required(self.robot_name, 'robot_name')
        self.validate_required(self.resource_allocation, 'resource_allocation')
        self.validate_required(self.scene_name, 'scene_name')
        self.validate_required(self.rule_code, 'rule_code')
        self.validate_required(self.status, 'status')
        self.validate_required(self.ext_attr, 'ext_attr')
        self.validate_required(self.process, 'process')
        self.validate_required(self.success_rate, 'success_rate')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['GmtCreateStr'] = self.gmt_create_str
        result['GmtModifiedStr'] = self.gmt_modified_str
        result['CreatorId'] = self.creator_id
        result['CreatorName'] = self.creator_name
        result['ModifierId'] = self.modifier_id
        result['ModifierName'] = self.modifier_name
        result['BuId'] = self.bu_id
        result['DepartmentId'] = self.department_id
        result['name'] = self.name
        result['NumType'] = self.num_type
        result['OutboundNum'] = self.outbound_num
        result['RobotType'] = self.robot_type
        result['RobotId'] = self.robot_id
        result['RobotName'] = self.robot_name
        result['ResourceAllocation'] = self.resource_allocation
        result['SceneName'] = self.scene_name
        result['RuleCode'] = self.rule_code
        result['Status'] = self.status
        result['ExtAttr'] = self.ext_attr
        result['Process'] = self.process
        result['SuccessRate'] = self.success_rate
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.gmt_create_str = map.get('GmtCreateStr')
        self.gmt_modified_str = map.get('GmtModifiedStr')
        self.creator_id = map.get('CreatorId')
        self.creator_name = map.get('CreatorName')
        self.modifier_id = map.get('ModifierId')
        self.modifier_name = map.get('ModifierName')
        self.bu_id = map.get('BuId')
        self.department_id = map.get('DepartmentId')
        self.name = map.get('name')
        self.num_type = map.get('NumType')
        self.outbound_num = map.get('OutboundNum')
        self.robot_type = map.get('RobotType')
        self.robot_id = map.get('RobotId')
        self.robot_name = map.get('RobotName')
        self.resource_allocation = map.get('ResourceAllocation')
        self.scene_name = map.get('SceneName')
        self.rule_code = map.get('RuleCode')
        self.status = map.get('Status')
        self.ext_attr = map.get('ExtAttr')
        self.process = map.get('Process')
        self.success_rate = map.get('SuccessRate')
        return self
class DescribeRecordDataRequest(TeaModel):
    def __init__(self, prod_code=None, account_type=None, account_id=None, acid=None, sec_level=None):
        self.prod_code = prod_code
        self.account_type = account_type
        self.account_id = account_id
        self.acid = acid
        self.sec_level = sec_level

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['ProdCode'] = self.prod_code
        result['AccountType'] = self.account_type
        result['AccountId'] = self.account_id
        result['Acid'] = self.acid
        result['SecLevel'] = self.sec_level
        return result

    def from_map(self, map={}):
        self.prod_code = map.get('ProdCode')
        self.account_type = map.get('AccountType')
        self.account_id = map.get('AccountId')
        self.acid = map.get('Acid')
        self.sec_level = map.get('SecLevel')
        return self


class DescribeRecordDataResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, oss_link=None, acid=None, agent_id=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.oss_link = oss_link
        self.acid = acid
        self.agent_id = agent_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.oss_link, 'oss_link')
        self.validate_required(self.acid, 'acid')
        self.validate_required(self.agent_id, 'agent_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['OssLink'] = self.oss_link
        result['Acid'] = self.acid
        result['AgentId'] = self.agent_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.oss_link = map.get('OssLink')
        self.acid = map.get('Acid')
        self.agent_id = map.get('AgentId')
        return self


class QueryVoipNumberBindInfosRequest(TeaModel):
    def __init__(self, phone_number=None, voip_id=None):
        self.phone_number = phone_number
        self.voip_id = voip_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        result['VoipId'] = self.voip_id
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        self.voip_id = map.get('VoipId')
        return self


class QueryVoipNumberBindInfosResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class ReportVoipProblemsRequest(TeaModel):
    def __init__(self, channel_id=None, voip_id=None, title=None, desc=None):
        self.channel_id = channel_id
        self.voip_id = voip_id
        self.title = title
        self.desc = desc

    def validate(self):
        self.validate_required(self.voip_id, 'voip_id')
        self.validate_required(self.title, 'title')
        self.validate_required(self.desc, 'desc')

    def to_map(self):
        result = {}
        result['ChannelId'] = self.channel_id
        result['VoipId'] = self.voip_id
        result['Title'] = self.title
        result['Desc'] = self.desc
        return result

    def from_map(self, map={}):
        self.channel_id = map.get('ChannelId')
        self.voip_id = map.get('VoipId')
        self.title = map.get('Title')
        self.desc = map.get('Desc')
        return self


class ReportVoipProblemsResponse(TeaModel):
    def __init__(self, request_id=None, code=None, module=None, message=None):
        self.request_id = request_id
        self.code = code
        self.module = module
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.module, 'module')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Module'] = self.module
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.module = map.get('Module')
        self.message = map.get('Message')
        return self


class UnbindNumberAndVoipIdRequest(TeaModel):
    def __init__(self, phone_number=None, voip_id=None):
        self.phone_number = phone_number
        self.voip_id = voip_id

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')
        self.validate_required(self.voip_id, 'voip_id')

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        result['VoipId'] = self.voip_id
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        self.voip_id = map.get('VoipId')
        return self


class UnbindNumberAndVoipIdResponse(TeaModel):
    def __init__(self, request_id=None, code=None, module=None, message=None):
        self.request_id = request_id
        self.code = code
        self.module = module
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.module, 'module')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Module'] = self.module
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.module = map.get('Module')
        self.message = map.get('Message')
        return self


class BindNumberAndVoipIdRequest(TeaModel):
    def __init__(self, phone_number=None, voip_id=None):
        self.phone_number = phone_number
        self.voip_id = voip_id

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')
        self.validate_required(self.voip_id, 'voip_id')

    def to_map(self):
        result = {}
        result['PhoneNumber'] = self.phone_number
        result['VoipId'] = self.voip_id
        return result

    def from_map(self, map={}):
        self.phone_number = map.get('PhoneNumber')
        self.voip_id = map.get('VoipId')
        return self


class BindNumberAndVoipIdResponse(TeaModel):
    def __init__(self, request_id=None, code=None, module=None, message=None):
        self.request_id = request_id
        self.code = code
        self.module = module
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.module, 'module')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Module'] = self.module
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.module = map.get('Module')
        self.message = map.get('Message')
        return self


class CancelRobotTaskRequest(TeaModel):
    def __init__(self, task_id=None):
        self.task_id = task_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        return self


class CancelRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class UploadRobotTaskCalledFileRequest(TeaModel):
    def __init__(self, id=None, called_number=None, tts_param=None, tts_param_head=None):
        self.id = id
        self.called_number = called_number
        self.tts_param = tts_param
        self.tts_param_head = tts_param_head

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.called_number, 'called_number')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['CalledNumber'] = self.called_number
        result['TtsParam'] = self.tts_param
        result['TtsParamHead'] = self.tts_param_head
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.called_number = map.get('CalledNumber')
        self.tts_param = map.get('TtsParam')
        self.tts_param_head = map.get('TtsParamHead')
        return self


class UploadRobotTaskCalledFileResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DeleteRobotTaskRequest(TeaModel):
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


class DeleteRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class StopRobotTaskRequest(TeaModel):
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


class StopRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotTaskCallDetailRequest(TeaModel):
    def __init__(self, task_id=None, callee=None, query_date=None):
        self.task_id = task_id
        self.callee = callee
        self.query_date = query_date

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.callee, 'callee')
        self.validate_required(self.query_date, 'query_date')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['Callee'] = self.callee
        result['QueryDate'] = self.query_date
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.callee = map.get('Callee')
        self.query_date = map.get('QueryDate')
        return self


class QueryRobotTaskCallDetailResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotv2AllListRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class QueryRobotv2AllListResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotTaskDetailRequest(TeaModel):
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


class QueryRobotTaskDetailResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotTaskCallListRequest(TeaModel):
    def __init__(self, page_no=None, page_size=None, task_id=None, duration_from=None, duration_to=None, dialog_count_from=None, dialog_count_to=None, hangup_direction=None, call_result=None, called=None):
        self.page_no = page_no
        self.page_size = page_size
        self.task_id = task_id
        self.duration_from = duration_from
        self.duration_to = duration_to
        self.dialog_count_from = dialog_count_from
        self.dialog_count_to = dialog_count_to
        self.hangup_direction = hangup_direction
        self.call_result = call_result
        self.called = called

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['TaskId'] = self.task_id
        result['DurationFrom'] = self.duration_from
        result['DurationTo'] = self.duration_to
        result['DialogCountFrom'] = self.dialog_count_from
        result['DialogCountTo'] = self.dialog_count_to
        result['HangupDirection'] = self.hangup_direction
        result['CallResult'] = self.call_result
        result['Called'] = self.called
        return result

    def from_map(self, map={}):
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.task_id = map.get('TaskId')
        self.duration_from = map.get('DurationFrom')
        self.duration_to = map.get('DurationTo')
        self.dialog_count_from = map.get('DialogCountFrom')
        self.dialog_count_to = map.get('DialogCountTo')
        self.hangup_direction = map.get('HangupDirection')
        self.call_result = map.get('CallResult')
        self.called = map.get('Called')
        return self


class QueryRobotTaskCallListResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class StartRobotTaskRequest(TeaModel):
    def __init__(self, task_id=None, schedule_time=None):
        self.task_id = task_id
        self.schedule_time = schedule_time

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['ScheduleTime'] = self.schedule_time
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.schedule_time = map.get('ScheduleTime')
        return self


class StartRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotTaskListRequest(TeaModel):
    def __init__(self, task_name=None, status=None, time=None, page_size=None, page_no=None):
        self.task_name = task_name
        self.status = status
        self.time = time
        self.page_size = page_size
        self.page_no = page_no

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['TaskName'] = self.task_name
        result['Status'] = self.status
        result['Time'] = self.time
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        return result

    def from_map(self, map={}):
        self.task_name = map.get('TaskName')
        self.status = map.get('Status')
        self.time = map.get('Time')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        return self


class QueryRobotTaskListResponse(TeaModel):
    def __init__(self, request_id=None, data=None, page_size=None, page_no=None, total_count=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.page_size = page_size
        self.page_no = page_no
        self.total_count = total_count
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['PageSize'] = self.page_size
        result['PageNo'] = self.page_no
        result['TotalCount'] = self.total_count
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.page_size = map.get('PageSize')
        self.page_no = map.get('PageNo')
        self.total_count = map.get('TotalCount')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class CreateRobotTaskRequest(TeaModel):
    def __init__(self, task_name=None, dialog_id=None, corp_name=None, caller=None, number_status_ident=None, retry_type=None, recall_state_codes=None, recall_times=None, recall_interval=None, is_self_line=None):
        self.task_name = task_name
        self.dialog_id = dialog_id
        self.corp_name = corp_name
        self.caller = caller
        self.number_status_ident = number_status_ident
        self.retry_type = retry_type
        self.recall_state_codes = recall_state_codes
        self.recall_times = recall_times
        self.recall_interval = recall_interval
        self.is_self_line = is_self_line

    def validate(self):
        self.validate_required(self.task_name, 'task_name')
        self.validate_required(self.dialog_id, 'dialog_id')
        self.validate_required(self.caller, 'caller')
        self.validate_required(self.number_status_ident, 'number_status_ident')
        self.validate_required(self.retry_type, 'retry_type')

    def to_map(self):
        result = {}
        result['TaskName'] = self.task_name
        result['DialogId'] = self.dialog_id
        result['CorpName'] = self.corp_name
        result['Caller'] = self.caller
        result['NumberStatusIdent'] = self.number_status_ident
        result['RetryType'] = self.retry_type
        result['RecallStateCodes'] = self.recall_state_codes
        result['RecallTimes'] = self.recall_times
        result['RecallInterval'] = self.recall_interval
        result['IsSelfLine'] = self.is_self_line
        return result

    def from_map(self, map={}):
        self.task_name = map.get('TaskName')
        self.dialog_id = map.get('DialogId')
        self.corp_name = map.get('CorpName')
        self.caller = map.get('Caller')
        self.number_status_ident = map.get('NumberStatusIdent')
        self.retry_type = map.get('RetryType')
        self.recall_state_codes = map.get('RecallStateCodes')
        self.recall_times = map.get('RecallTimes')
        self.recall_interval = map.get('RecallInterval')
        self.is_self_line = map.get('IsSelfLine')
        return self


class CreateRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class CancelOrderRobotTaskRequest(TeaModel):
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


class CancelOrderRobotTaskResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SmartCallOperateRequest(TeaModel):
    def __init__(self, call_id=None, command=None, param=None):
        self.call_id = call_id
        self.command = command
        self.param = param

    def validate(self):
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.command, 'command')

    def to_map(self):
        result = {}
        result['CallId'] = self.call_id
        result['Command'] = self.command
        result['Param'] = self.param
        return result

    def from_map(self, map={}):
        self.call_id = map.get('CallId')
        self.command = map.get('Command')
        self.param = map.get('Param')
        return self


class SmartCallOperateResponse(TeaModel):
    def __init__(self, request_id=None, status=None, code=None, message=None):
        self.request_id = request_id
        self.status = status
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryRobotInfoListRequest(TeaModel):
    def __init__(self, audit_status=None):
        self.audit_status = audit_status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AuditStatus'] = self.audit_status
        return result

    def from_map(self, map={}):
        self.audit_status = map.get('AuditStatus')
        return self


class QueryRobotInfoListResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class BatchRobotSmartCallRequest(TeaModel):
    def __init__(self, called_show_number=None, corp_name=None, called_number=None, dialog_id=None, early_media_asr=None, task_name=None, schedule_time=None, schedule_call=None, tts_param=None, tts_param_head=None, is_self_line=None):
        self.called_show_number = called_show_number
        self.corp_name = corp_name
        self.called_number = called_number
        self.dialog_id = dialog_id
        self.early_media_asr = early_media_asr
        self.task_name = task_name
        self.schedule_time = schedule_time
        self.schedule_call = schedule_call
        self.tts_param = tts_param
        self.tts_param_head = tts_param_head
        self.is_self_line = is_self_line

    def validate(self):
        self.validate_required(self.called_show_number, 'called_show_number')
        self.validate_required(self.called_number, 'called_number')
        self.validate_required(self.dialog_id, 'dialog_id')
        self.validate_required(self.task_name, 'task_name')

    def to_map(self):
        result = {}
        result['CalledShowNumber'] = self.called_show_number
        result['CorpName'] = self.corp_name
        result['CalledNumber'] = self.called_number
        result['DialogId'] = self.dialog_id
        result['EarlyMediaAsr'] = self.early_media_asr
        result['TaskName'] = self.task_name
        result['ScheduleTime'] = self.schedule_time
        result['ScheduleCall'] = self.schedule_call
        result['TtsParam'] = self.tts_param
        result['TtsParamHead'] = self.tts_param_head
        result['IsSelfLine'] = self.is_self_line
        return result

    def from_map(self, map={}):
        self.called_show_number = map.get('CalledShowNumber')
        self.corp_name = map.get('CorpName')
        self.called_number = map.get('CalledNumber')
        self.dialog_id = map.get('DialogId')
        self.early_media_asr = map.get('EarlyMediaAsr')
        self.task_name = map.get('TaskName')
        self.schedule_time = map.get('ScheduleTime')
        self.schedule_call = map.get('ScheduleCall')
        self.tts_param = map.get('TtsParam')
        self.tts_param_head = map.get('TtsParamHead')
        self.is_self_line = map.get('IsSelfLine')
        return self


class BatchRobotSmartCallResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None, code=None, message=None):
        self.request_id = request_id
        self.task_id = task_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryCallDetailByTaskIdRequest(TeaModel):
    def __init__(self, task_id=None, query_date=None, callee=None):
        self.task_id = task_id
        self.query_date = query_date
        self.callee = callee

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.query_date, 'query_date')
        self.validate_required(self.callee, 'callee')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['QueryDate'] = self.query_date
        result['Callee'] = self.callee
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.query_date = map.get('QueryDate')
        self.callee = map.get('Callee')
        return self


class QueryCallDetailByTaskIdResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class GetRtcTokenRequest(TeaModel):
    def __init__(self, user_id=None, device_id=None, is_custom_account=None):
        self.user_id = user_id
        self.device_id = device_id
        self.is_custom_account = is_custom_account

    def validate(self):
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.device_id, 'device_id')

    def to_map(self):
        result = {}
        result['UserId'] = self.user_id
        result['DeviceId'] = self.device_id
        result['IsCustomAccount'] = self.is_custom_account
        return result

    def from_map(self, map={}):
        self.user_id = map.get('UserId')
        self.device_id = map.get('DeviceId')
        self.is_custom_account = map.get('IsCustomAccount')
        return self


class GetRtcTokenResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class AddRtcAccountRequest(TeaModel):
    def __init__(self, device_id=None):
        self.device_id = device_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['DeviceId'] = self.device_id
        return result

    def from_map(self, map={}):
        self.device_id = map.get('DeviceId')
        return self


class AddRtcAccountResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class VoipAddAccountRequest(TeaModel):
    def __init__(self, device_id=None):
        self.device_id = device_id

    def validate(self):
        self.validate_required(self.device_id, 'device_id')

    def to_map(self):
        result = {}
        result['DeviceId'] = self.device_id
        return result

    def from_map(self, map={}):
        self.device_id = map.get('DeviceId')
        return self


class VoipAddAccountResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class VoipGetTokenRequest(TeaModel):
    def __init__(self, voip_id=None, device_id=None, is_custom_account=None):
        self.voip_id = voip_id
        self.device_id = device_id
        self.is_custom_account = is_custom_account

    def validate(self):
        self.validate_required(self.voip_id, 'voip_id')
        self.validate_required(self.device_id, 'device_id')

    def to_map(self):
        result = {}
        result['VoipId'] = self.voip_id
        result['DeviceId'] = self.device_id
        result['IsCustomAccount'] = self.is_custom_account
        return result

    def from_map(self, map={}):
        self.voip_id = map.get('VoipId')
        self.device_id = map.get('DeviceId')
        self.is_custom_account = map.get('IsCustomAccount')
        return self


class VoipGetTokenResponse(TeaModel):
    def __init__(self, request_id=None, module=None, code=None, message=None):
        self.request_id = request_id
        self.module = module
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.module, 'module')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Module'] = self.module
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.module = map.get('Module')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SmartCallRequest(TeaModel):
    def __init__(self, called_show_number=None, called_number=None, voice_code=None, record_flag=None, volume=None, speed=None, asr_model_id=None, pause_time=None, mute_time=None, action_code_break=None, out_id=None, dynamic_id=None, early_media_asr=None, voice_code_param=None, session_timeout=None, action_code_time_break=None, tts_style=None, tts_volume=None, tts_speed=None, tts_conf=None, asr_base_id=None):
        self.called_show_number = called_show_number
        self.called_number = called_number
        self.voice_code = voice_code
        self.record_flag = record_flag
        self.volume = volume
        self.speed = speed
        self.asr_model_id = asr_model_id
        self.pause_time = pause_time
        self.mute_time = mute_time
        self.action_code_break = action_code_break
        self.out_id = out_id
        self.dynamic_id = dynamic_id
        self.early_media_asr = early_media_asr
        self.voice_code_param = voice_code_param
        self.session_timeout = session_timeout
        self.action_code_time_break = action_code_time_break
        self.tts_style = tts_style
        self.tts_volume = tts_volume
        self.tts_speed = tts_speed
        self.tts_conf = tts_conf
        self.asr_base_id = asr_base_id

    def validate(self):
        self.validate_required(self.called_show_number, 'called_show_number')
        self.validate_required(self.called_number, 'called_number')
        self.validate_required(self.voice_code, 'voice_code')

    def to_map(self):
        result = {}
        result['CalledShowNumber'] = self.called_show_number
        result['CalledNumber'] = self.called_number
        result['VoiceCode'] = self.voice_code
        result['RecordFlag'] = self.record_flag
        result['Volume'] = self.volume
        result['Speed'] = self.speed
        result['AsrModelId'] = self.asr_model_id
        result['PauseTime'] = self.pause_time
        result['MuteTime'] = self.mute_time
        result['ActionCodeBreak'] = self.action_code_break
        result['OutId'] = self.out_id
        result['DynamicId'] = self.dynamic_id
        result['EarlyMediaAsr'] = self.early_media_asr
        result['VoiceCodeParam'] = self.voice_code_param
        result['SessionTimeout'] = self.session_timeout
        result['ActionCodeTimeBreak'] = self.action_code_time_break
        result['TtsStyle'] = self.tts_style
        result['TtsVolume'] = self.tts_volume
        result['TtsSpeed'] = self.tts_speed
        result['TtsConf'] = self.tts_conf
        result['AsrBaseId'] = self.asr_base_id
        return result

    def from_map(self, map={}):
        self.called_show_number = map.get('CalledShowNumber')
        self.called_number = map.get('CalledNumber')
        self.voice_code = map.get('VoiceCode')
        self.record_flag = map.get('RecordFlag')
        self.volume = map.get('Volume')
        self.speed = map.get('Speed')
        self.asr_model_id = map.get('AsrModelId')
        self.pause_time = map.get('PauseTime')
        self.mute_time = map.get('MuteTime')
        self.action_code_break = map.get('ActionCodeBreak')
        self.out_id = map.get('OutId')
        self.dynamic_id = map.get('DynamicId')
        self.early_media_asr = map.get('EarlyMediaAsr')
        self.voice_code_param = map.get('VoiceCodeParam')
        self.session_timeout = map.get('SessionTimeout')
        self.action_code_time_break = map.get('ActionCodeTimeBreak')
        self.tts_style = map.get('TtsStyle')
        self.tts_volume = map.get('TtsVolume')
        self.tts_speed = map.get('TtsSpeed')
        self.tts_conf = map.get('TtsConf')
        self.asr_base_id = map.get('AsrBaseId')
        return self


class SmartCallResponse(TeaModel):
    def __init__(self, request_id=None, call_id=None, code=None, message=None):
        self.request_id = request_id
        self.call_id = call_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['CallId'] = self.call_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.call_id = map.get('CallId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QueryCallDetailByCallIdRequest(TeaModel):
    def __init__(self, call_id=None, prod_id=None, query_date=None):
        self.call_id = call_id
        self.prod_id = prod_id
        self.query_date = query_date

    def validate(self):
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.prod_id, 'prod_id')
        self.validate_required(self.query_date, 'query_date')

    def to_map(self):
        result = {}
        result['CallId'] = self.call_id
        result['ProdId'] = self.prod_id
        result['QueryDate'] = self.query_date
        return result

    def from_map(self, map={}):
        self.call_id = map.get('CallId')
        self.prod_id = map.get('ProdId')
        self.query_date = map.get('QueryDate')
        return self


class QueryCallDetailByCallIdResponse(TeaModel):
    def __init__(self, request_id=None, data=None, code=None, message=None):
        self.request_id = request_id
        self.data = data
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Data'] = self.data
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class CancelCallRequest(TeaModel):
    def __init__(self, call_id=None):
        self.call_id = call_id

    def validate(self):
        self.validate_required(self.call_id, 'call_id')

    def to_map(self):
        result = {}
        result['CallId'] = self.call_id
        return result

    def from_map(self, map={}):
        self.call_id = map.get('CallId')
        return self


class CancelCallResponse(TeaModel):
    def __init__(self, request_id=None, status=None, code=None, message=None):
        self.request_id = request_id
        self.status = status
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Status'] = self.status
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.status = map.get('Status')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class ClickToDialRequest(TeaModel):
    def __init__(self, caller_show_number=None, caller_number=None, called_show_number=None, called_number=None, record_flag=None, asr_flag=None, session_timeout=None, asr_model_id=None, out_id=None):
        self.caller_show_number = caller_show_number
        self.caller_number = caller_number
        self.called_show_number = called_show_number
        self.called_number = called_number
        self.record_flag = record_flag
        self.asr_flag = asr_flag
        self.session_timeout = session_timeout
        self.asr_model_id = asr_model_id
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.caller_show_number, 'caller_show_number')
        self.validate_required(self.caller_number, 'caller_number')
        self.validate_required(self.called_show_number, 'called_show_number')
        self.validate_required(self.called_number, 'called_number')

    def to_map(self):
        result = {}
        result['CallerShowNumber'] = self.caller_show_number
        result['CallerNumber'] = self.caller_number
        result['CalledShowNumber'] = self.called_show_number
        result['CalledNumber'] = self.called_number
        result['RecordFlag'] = self.record_flag
        result['AsrFlag'] = self.asr_flag
        result['SessionTimeout'] = self.session_timeout
        result['AsrModelId'] = self.asr_model_id
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.caller_show_number = map.get('CallerShowNumber')
        self.caller_number = map.get('CallerNumber')
        self.called_show_number = map.get('CalledShowNumber')
        self.called_number = map.get('CalledNumber')
        self.record_flag = map.get('RecordFlag')
        self.asr_flag = map.get('AsrFlag')
        self.session_timeout = map.get('SessionTimeout')
        self.asr_model_id = map.get('AsrModelId')
        self.out_id = map.get('OutId')
        return self


class ClickToDialResponse(TeaModel):
    def __init__(self, request_id=None, call_id=None, code=None, message=None):
        self.request_id = request_id
        self.call_id = call_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['CallId'] = self.call_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.call_id = map.get('CallId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class IvrCallRequest(TeaModel):
    def __init__(self, called_show_number=None, called_number=None, start_code=None, start_tts_params=None, menu_key_map=None, play_times=None, bye_code=None, bye_tts_params=None, timeout=None, out_id=None):
        self.called_show_number = called_show_number
        self.called_number = called_number
        self.start_code = start_code
        self.start_tts_params = start_tts_params
        self.menu_key_map = []
        self.play_times = play_times
        self.bye_code = bye_code
        self.bye_tts_params = bye_tts_params
        self.timeout = timeout
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.called_show_number, 'called_show_number')
        self.validate_required(self.called_number, 'called_number')
        self.validate_required(self.start_code, 'start_code')
        if self.menu_key_map:
            for k in self.menu_key_map:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['CalledShowNumber'] = self.called_show_number
        result['CalledNumber'] = self.called_number
        result['StartCode'] = self.start_code
        result['StartTtsParams'] = self.start_tts_params
        result['MenuKeyMap'] = []
        if self.menu_key_map is not None:
            for k in self.menu_key_map:
                result['MenuKeyMap'].append(k.to_map() if k else None)
        else:
            result['MenuKeyMap'] = None
        result['PlayTimes'] = self.play_times
        result['ByeCode'] = self.bye_code
        result['ByeTtsParams'] = self.bye_tts_params
        result['Timeout'] = self.timeout
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.called_show_number = map.get('CalledShowNumber')
        self.called_number = map.get('CalledNumber')
        self.start_code = map.get('StartCode')
        self.start_tts_params = map.get('StartTtsParams')
        self.menu_key_map = []
        if map.get('MenuKeyMap') is not None:
            for k in map.get('MenuKeyMap'):
                temp_model = IvrCallRequestMenuKeyMap()
                temp_model = temp_model.from_map(k)
                self.menu_key_map.append(temp_model)
        else:
            self.menu_key_map = None
        self.play_times = map.get('PlayTimes')
        self.bye_code = map.get('ByeCode')
        self.bye_tts_params = map.get('ByeTtsParams')
        self.timeout = map.get('Timeout')
        self.out_id = map.get('OutId')
        return self


class IvrCallRequestMenuKeyMap(TeaModel):
    def __init__(self, key=None, code=None, tts_params=None):
        self.key = key
        self.code = code
        self.tts_params = tts_params

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.code, 'code')
        self.validate_required(self.tts_params, 'tts_params')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Code'] = self.code
        result['TtsParams'] = self.tts_params
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.code = map.get('Code')
        self.tts_params = map.get('TtsParams')
        return self
class IvrCallResponse(TeaModel):
    def __init__(self, request_id=None, call_id=None, code=None, message=None):
        self.request_id = request_id
        self.call_id = call_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['CallId'] = self.call_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.call_id = map.get('CallId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SingleCallByVoiceRequest(TeaModel):
    def __init__(self, called_show_number=None, called_number=None, voice_code=None, play_times=None, volume=None, speed=None, out_id=None):
        self.called_show_number = called_show_number
        self.called_number = called_number
        self.voice_code = voice_code
        self.play_times = play_times
        self.volume = volume
        self.speed = speed
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.called_number, 'called_number')
        self.validate_required(self.voice_code, 'voice_code')

    def to_map(self):
        result = {}
        result['CalledShowNumber'] = self.called_show_number
        result['CalledNumber'] = self.called_number
        result['VoiceCode'] = self.voice_code
        result['PlayTimes'] = self.play_times
        result['Volume'] = self.volume
        result['Speed'] = self.speed
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.called_show_number = map.get('CalledShowNumber')
        self.called_number = map.get('CalledNumber')
        self.voice_code = map.get('VoiceCode')
        self.play_times = map.get('PlayTimes')
        self.volume = map.get('Volume')
        self.speed = map.get('Speed')
        self.out_id = map.get('OutId')
        return self


class SingleCallByVoiceResponse(TeaModel):
    def __init__(self, request_id=None, call_id=None, code=None, message=None):
        self.request_id = request_id
        self.call_id = call_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['CallId'] = self.call_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.call_id = map.get('CallId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SingleCallByTtsRequest(TeaModel):
    def __init__(self, called_show_number=None, called_number=None, tts_code=None, tts_param=None, play_times=None, volume=None, speed=None, out_id=None):
        self.called_show_number = called_show_number
        self.called_number = called_number
        self.tts_code = tts_code
        self.tts_param = tts_param
        self.play_times = play_times
        self.volume = volume
        self.speed = speed
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.called_number, 'called_number')
        self.validate_required(self.tts_code, 'tts_code')

    def to_map(self):
        result = {}
        result['CalledShowNumber'] = self.called_show_number
        result['CalledNumber'] = self.called_number
        result['TtsCode'] = self.tts_code
        result['TtsParam'] = self.tts_param
        result['PlayTimes'] = self.play_times
        result['Volume'] = self.volume
        result['Speed'] = self.speed
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.called_show_number = map.get('CalledShowNumber')
        self.called_number = map.get('CalledNumber')
        self.tts_code = map.get('TtsCode')
        self.tts_param = map.get('TtsParam')
        self.play_times = map.get('PlayTimes')
        self.volume = map.get('Volume')
        self.speed = map.get('Speed')
        self.out_id = map.get('OutId')
        return self


class SingleCallByTtsResponse(TeaModel):
    def __init__(self, request_id=None, call_id=None, code=None, message=None):
        self.request_id = request_id
        self.call_id = call_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.call_id, 'call_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['CallId'] = self.call_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.call_id = map.get('CallId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self

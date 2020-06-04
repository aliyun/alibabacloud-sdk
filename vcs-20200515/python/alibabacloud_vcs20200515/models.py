# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GetFaceOptionsRequest(TeaModel):
    def __init__(self, corp_id=None):
        self.corp_id = corp_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        return self


class GetFaceOptionsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = []

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
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
                temp_model = GetFaceOptionsResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class GetFaceOptionsResponseDataOptionList(TeaModel):
    def __init__(self, key=None, name=None):
        self.key = key
        self.name = name

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.name = map.get('Name')
        return self


class GetFaceOptionsResponseData(TeaModel):
    def __init__(self, key=None, name=None, option_list=None):
        self.key = key
        self.name = name
        self.option_list = []

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.name, 'name')
        self.validate_required(self.option_list, 'option_list')
        if self.option_list:
            for k in self.option_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Name'] = self.name
        result['OptionList'] = []
        if self.option_list is not None:
            for k in self.option_list:
                result['OptionList'].append(k.to_map() if k else None)
        else:
            result['OptionList'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.name = map.get('Name')
        self.option_list = []
        if map.get('OptionList') is not None:
            for k in map.get('OptionList'):
                temp_model = GetFaceOptionsResponseDataOptionList()
                temp_model = temp_model.from_map(k)
                self.option_list.append(temp_model)
        else:
            self.option_list = None
        return self


class GetBodyOptionsRequest(TeaModel):
    def __init__(self, corp_id=None):
        self.corp_id = corp_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        return self


class GetBodyOptionsResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, data=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.data = []

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
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
                temp_model = GetBodyOptionsResponseData()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self


class GetBodyOptionsResponseDataOptionList(TeaModel):
    def __init__(self, key=None, name=None):
        self.key = key
        self.name = name

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.name = map.get('Name')
        return self


class GetBodyOptionsResponseData(TeaModel):
    def __init__(self, key=None, name=None, option_list=None):
        self.key = key
        self.name = name
        self.option_list = []

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.name, 'name')
        self.validate_required(self.option_list, 'option_list')
        if self.option_list:
            for k in self.option_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Name'] = self.name
        result['OptionList'] = []
        if self.option_list is not None:
            for k in self.option_list:
                result['OptionList'].append(k.to_map() if k else None)
        else:
            result['OptionList'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.name = map.get('Name')
        self.option_list = []
        if map.get('OptionList') is not None:
            for k in map.get('OptionList'):
                temp_model = GetBodyOptionsResponseDataOptionList()
                temp_model = temp_model.from_map(k)
                self.option_list.append(temp_model)
        else:
            self.option_list = None
        return self


class StopMonitorRequest(TeaModel):
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


class StopMonitorResponse(TeaModel):
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


class SearchBodyRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None, start_time_stamp=None, end_time_stamp=None, page_no=None, page_size=None, option_list=None):
        self.corp_id = corp_id
        self.gb_id = gb_id
        self.start_time_stamp = start_time_stamp
        self.end_time_stamp = end_time_stamp
        self.page_no = page_no
        self.page_size = page_size
        self.option_list = {}

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')
        self.validate_required(self.start_time_stamp, 'start_time_stamp')
        self.validate_required(self.end_time_stamp, 'end_time_stamp')
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        result['StartTimeStamp'] = self.start_time_stamp
        result['EndTimeStamp'] = self.end_time_stamp
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['OptionList'] = self.option_list
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        self.start_time_stamp = map.get('StartTimeStamp')
        self.end_time_stamp = map.get('EndTimeStamp')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.option_list = map.get('OptionList')
        return self


class SearchBodyResponse(TeaModel):
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
            temp_model = SearchBodyResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SearchBodyResponseDataRecords(TeaModel):
    def __init__(self, gb_id=None, image_url=None, left_top_x=None, left_top_y=None, right_bottom_x=None, right_bottom_y=None, score=None, target_image_url=None):
        self.gb_id = gb_id
        self.image_url = image_url
        self.left_top_x = left_top_x
        self.left_top_y = left_top_y
        self.right_bottom_x = right_bottom_x
        self.right_bottom_y = right_bottom_y
        self.score = score
        self.target_image_url = target_image_url

    def validate(self):
        self.validate_required(self.gb_id, 'gb_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.left_top_x, 'left_top_x')
        self.validate_required(self.left_top_y, 'left_top_y')
        self.validate_required(self.right_bottom_x, 'right_bottom_x')
        self.validate_required(self.right_bottom_y, 'right_bottom_y')
        self.validate_required(self.score, 'score')
        self.validate_required(self.target_image_url, 'target_image_url')

    def to_map(self):
        result = {}
        result['GbId'] = self.gb_id
        result['ImageUrl'] = self.image_url
        result['LeftTopX'] = self.left_top_x
        result['LeftTopY'] = self.left_top_y
        result['RightBottomX'] = self.right_bottom_x
        result['RightBottomY'] = self.right_bottom_y
        result['Score'] = self.score
        result['TargetImageUrl'] = self.target_image_url
        return result

    def from_map(self, map={}):
        self.gb_id = map.get('GbId')
        self.image_url = map.get('ImageUrl')
        self.left_top_x = map.get('LeftTopX')
        self.left_top_y = map.get('LeftTopY')
        self.right_bottom_x = map.get('RightBottomX')
        self.right_bottom_y = map.get('RightBottomY')
        self.score = map.get('Score')
        self.target_image_url = map.get('TargetImageUrl')
        return self


class SearchBodyResponseData(TeaModel):
    def __init__(self, page_no=None, page_size=None, total_count=None, total_page=None, records=None):
        self.page_no = page_no
        self.page_size = page_size
        self.total_count = total_count
        self.total_page = total_page
        self.records = []

    def validate(self):
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.total_page, 'total_page')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['TotalPage'] = self.total_page
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.total_page = map.get('TotalPage')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = SearchBodyResponseDataRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class AddMonitorRequest(TeaModel):
    def __init__(self, corp_id=None, monitor_type=None, description=None, batch_indicator=None):
        self.corp_id = corp_id
        self.monitor_type = monitor_type
        self.description = description
        self.batch_indicator = batch_indicator

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['MonitorType'] = self.monitor_type
        result['Description'] = self.description
        result['BatchIndicator'] = self.batch_indicator
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.monitor_type = map.get('MonitorType')
        self.description = map.get('Description')
        self.batch_indicator = map.get('BatchIndicator')
        return self


class AddMonitorResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, data=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        if map.get('Data') is not None:
            temp_model = AddMonitorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AddMonitorResponseData(TeaModel):
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


class GetMonitorResultRequest(TeaModel):
    def __init__(self, corp_id=None, task_id=None, min_record_id=None, start_time=None, end_time=None):
        self.corp_id = corp_id
        self.task_id = task_id
        self.min_record_id = min_record_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['TaskId'] = self.task_id
        result['MinRecordId'] = self.min_record_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.task_id = map.get('TaskId')
        self.min_record_id = map.get('MinRecordId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class GetMonitorResultResponse(TeaModel):
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
            temp_model = GetMonitorResultResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetMonitorResultResponseDataRecords(TeaModel):
    def __init__(self, right_bottom_y=None, right_bottom_x=None, left_up_y=None, left_up_x=None, gb_id=None, score=None, pic_url=None, shot_time=None, monitor_pic_url=None):
        self.right_bottom_y = right_bottom_y
        self.right_bottom_x = right_bottom_x
        self.left_up_y = left_up_y
        self.left_up_x = left_up_x
        self.gb_id = gb_id
        self.score = score
        self.pic_url = pic_url
        self.shot_time = shot_time
        self.monitor_pic_url = monitor_pic_url

    def validate(self):
        self.validate_required(self.right_bottom_y, 'right_bottom_y')
        self.validate_required(self.right_bottom_x, 'right_bottom_x')
        self.validate_required(self.left_up_y, 'left_up_y')
        self.validate_required(self.left_up_x, 'left_up_x')
        self.validate_required(self.gb_id, 'gb_id')
        self.validate_required(self.score, 'score')
        self.validate_required(self.pic_url, 'pic_url')
        self.validate_required(self.shot_time, 'shot_time')
        self.validate_required(self.monitor_pic_url, 'monitor_pic_url')

    def to_map(self):
        result = {}
        result['RightBottomY'] = self.right_bottom_y
        result['RightBottomX'] = self.right_bottom_x
        result['LeftUpY'] = self.left_up_y
        result['LeftUpX'] = self.left_up_x
        result['GbId'] = self.gb_id
        result['Score'] = self.score
        result['PicUrl'] = self.pic_url
        result['ShotTime'] = self.shot_time
        result['MonitorPicUrl'] = self.monitor_pic_url
        return result

    def from_map(self, map={}):
        self.right_bottom_y = map.get('RightBottomY')
        self.right_bottom_x = map.get('RightBottomX')
        self.left_up_y = map.get('LeftUpY')
        self.left_up_x = map.get('LeftUpX')
        self.gb_id = map.get('GbId')
        self.score = map.get('Score')
        self.pic_url = map.get('PicUrl')
        self.shot_time = map.get('ShotTime')
        self.monitor_pic_url = map.get('MonitorPicUrl')
        return self


class GetMonitorResultResponseData(TeaModel):
    def __init__(self, max_id=None, records=None):
        self.max_id = max_id
        self.records = []

    def validate(self):
        self.validate_required(self.max_id, 'max_id')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MaxId'] = self.max_id
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.max_id = map.get('MaxId')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = GetMonitorResultResponseDataRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class UpdateMonitorRequest(TeaModel):
    def __init__(self, corp_id=None, task_id=None, rule_name=None, device_operate_type=None, device_list=None, pic_operate_type=None, pic_list=None, attribute_operate_type=None, attribute_name=None, attribute_value_list=None, description=None, rule_expression=None):
        self.corp_id = corp_id
        self.task_id = task_id
        self.rule_name = rule_name
        self.device_operate_type = device_operate_type
        self.device_list = device_list
        self.pic_operate_type = pic_operate_type
        self.pic_list = pic_list
        self.attribute_operate_type = attribute_operate_type
        self.attribute_name = attribute_name
        self.attribute_value_list = attribute_value_list
        self.description = description
        self.rule_expression = rule_expression

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['TaskId'] = self.task_id
        result['RuleName'] = self.rule_name
        result['DeviceOperateType'] = self.device_operate_type
        result['DeviceList'] = self.device_list
        result['PicOperateType'] = self.pic_operate_type
        result['PicList'] = self.pic_list
        result['AttributeOperateType'] = self.attribute_operate_type
        result['AttributeName'] = self.attribute_name
        result['AttributeValueList'] = self.attribute_value_list
        result['Description'] = self.description
        result['RuleExpression'] = self.rule_expression
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.task_id = map.get('TaskId')
        self.rule_name = map.get('RuleName')
        self.device_operate_type = map.get('DeviceOperateType')
        self.device_list = map.get('DeviceList')
        self.pic_operate_type = map.get('PicOperateType')
        self.pic_list = map.get('PicList')
        self.attribute_operate_type = map.get('AttributeOperateType')
        self.attribute_name = map.get('AttributeName')
        self.attribute_value_list = map.get('AttributeValueList')
        self.description = map.get('Description')
        self.rule_expression = map.get('RuleExpression')
        return self


class UpdateMonitorResponse(TeaModel):
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


class GetDeviceVideoUrlRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None, start_time=None, end_time=None):
        self.corp_id = corp_id
        self.gb_id = gb_id
        self.start_time = start_time
        self.end_time = end_time

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        return self


class GetDeviceVideoUrlResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, url=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.url = url

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.url = map.get('Url')
        return self


class GetInventoryRequest(TeaModel):
    def __init__(self, commodity_code=None):
        self.commodity_code = commodity_code

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CommodityCode'] = self.commodity_code
        return result

    def from_map(self, map={}):
        self.commodity_code = map.get('CommodityCode')
        return self


class GetInventoryResponse(TeaModel):
    def __init__(self, success=None, data=None):
        self.success = success
        self.data = data

    def validate(self):
        self.validate_required(self.success, 'success')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['Success'] = self.success
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.success = map.get('Success')
        if map.get('Data') is not None:
            temp_model = GetInventoryResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetInventoryResponseDataResultObject(TeaModel):
    def __init__(self, buyer_id=None, commodity_code=None, current_inventory=None, valid_end_time=None, valid_start_time=None, instance_id=None, inventory_id=None):
        self.buyer_id = buyer_id
        self.commodity_code = commodity_code
        self.current_inventory = current_inventory
        self.valid_end_time = valid_end_time
        self.valid_start_time = valid_start_time
        self.instance_id = instance_id
        self.inventory_id = inventory_id

    def validate(self):
        self.validate_required(self.buyer_id, 'buyer_id')
        self.validate_required(self.commodity_code, 'commodity_code')
        self.validate_required(self.current_inventory, 'current_inventory')
        self.validate_required(self.valid_end_time, 'valid_end_time')
        self.validate_required(self.valid_start_time, 'valid_start_time')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.inventory_id, 'inventory_id')

    def to_map(self):
        result = {}
        result['BuyerId'] = self.buyer_id
        result['CommodityCode'] = self.commodity_code
        result['CurrentInventory'] = self.current_inventory
        result['ValidEndTime'] = self.valid_end_time
        result['ValidStartTime'] = self.valid_start_time
        result['InstanceId'] = self.instance_id
        result['InventoryId'] = self.inventory_id
        return result

    def from_map(self, map={}):
        self.buyer_id = map.get('BuyerId')
        self.commodity_code = map.get('CommodityCode')
        self.current_inventory = map.get('CurrentInventory')
        self.valid_end_time = map.get('ValidEndTime')
        self.valid_start_time = map.get('ValidStartTime')
        self.instance_id = map.get('InstanceId')
        self.inventory_id = map.get('InventoryId')
        return self


class GetInventoryResponseData(TeaModel):
    def __init__(self, result_object=None):
        self.result_object = []

    def validate(self):
        self.validate_required(self.result_object, 'result_object')
        if self.result_object:
            for k in self.result_object:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ResultObject'] = []
        if self.result_object is not None:
            for k in self.result_object:
                result['ResultObject'].append(k.to_map() if k else None)
        else:
            result['ResultObject'] = None
        return result

    def from_map(self, map={}):
        self.result_object = []
        if map.get('ResultObject') is not None:
            for k in map.get('ResultObject'):
                temp_model = GetInventoryResponseDataResultObject()
                temp_model = temp_model.from_map(k)
                self.result_object.append(temp_model)
        else:
            self.result_object = None
        return self


class RecognizeImageRequest(TeaModel):
    def __init__(self, corp_id=None, pic_content=None, pic_format=None):
        self.corp_id = corp_id
        self.pic_content = pic_content
        self.pic_format = pic_format

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')
        self.validate_required(self.pic_content, 'pic_content')
        self.validate_required(self.pic_format, 'pic_format')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['PicContent'] = self.pic_content
        result['PicFormat'] = self.pic_format
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.pic_content = map.get('PicContent')
        self.pic_format = map.get('PicFormat')
        return self


class RecognizeImageResponse(TeaModel):
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
            temp_model = RecognizeImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeImageResponseDataBodyList(TeaModel):
    def __init__(self, feature=None, file_name=None, image_base_six_four=None, left_top_x=None, left_top_y=None, local_feature=None, respirator_color=None, right_bottom_x=None, right_bottom_y=None):
        self.feature = feature
        self.file_name = file_name
        self.image_base_six_four = image_base_six_four
        self.left_top_x = left_top_x
        self.left_top_y = left_top_y
        self.local_feature = local_feature
        self.respirator_color = respirator_color
        self.right_bottom_x = right_bottom_x
        self.right_bottom_y = right_bottom_y

    def validate(self):
        self.validate_required(self.feature, 'feature')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.image_base_six_four, 'image_base_six_four')
        self.validate_required(self.left_top_x, 'left_top_x')
        self.validate_required(self.left_top_y, 'left_top_y')
        self.validate_required(self.local_feature, 'local_feature')
        self.validate_required(self.respirator_color, 'respirator_color')
        self.validate_required(self.right_bottom_x, 'right_bottom_x')
        self.validate_required(self.right_bottom_y, 'right_bottom_y')

    def to_map(self):
        result = {}
        result['Feature'] = self.feature
        result['FileName'] = self.file_name
        result['ImageBaseSixFour'] = self.image_base_six_four
        result['LeftTopX'] = self.left_top_x
        result['LeftTopY'] = self.left_top_y
        result['LocalFeature'] = self.local_feature
        result['RespiratorColor'] = self.respirator_color
        result['RightBottomX'] = self.right_bottom_x
        result['RightBottomY'] = self.right_bottom_y
        return result

    def from_map(self, map={}):
        self.feature = map.get('Feature')
        self.file_name = map.get('FileName')
        self.image_base_six_four = map.get('ImageBaseSixFour')
        self.left_top_x = map.get('LeftTopX')
        self.left_top_y = map.get('LeftTopY')
        self.local_feature = map.get('LocalFeature')
        self.respirator_color = map.get('RespiratorColor')
        self.right_bottom_x = map.get('RightBottomX')
        self.right_bottom_y = map.get('RightBottomY')
        return self


class RecognizeImageResponseDataFaceList(TeaModel):
    def __init__(self, feature=None, file_name=None, image_base_six_four=None, left_top_x=None, left_top_y=None, local_feature=None, respirator_color=None, right_bottom_x=None, right_bottom_y=None):
        self.feature = feature
        self.file_name = file_name
        self.image_base_six_four = image_base_six_four
        self.left_top_x = left_top_x
        self.left_top_y = left_top_y
        self.local_feature = local_feature
        self.respirator_color = respirator_color
        self.right_bottom_x = right_bottom_x
        self.right_bottom_y = right_bottom_y

    def validate(self):
        self.validate_required(self.feature, 'feature')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.image_base_six_four, 'image_base_six_four')
        self.validate_required(self.left_top_x, 'left_top_x')
        self.validate_required(self.left_top_y, 'left_top_y')
        self.validate_required(self.local_feature, 'local_feature')
        self.validate_required(self.respirator_color, 'respirator_color')
        self.validate_required(self.right_bottom_x, 'right_bottom_x')
        self.validate_required(self.right_bottom_y, 'right_bottom_y')

    def to_map(self):
        result = {}
        result['Feature'] = self.feature
        result['FileName'] = self.file_name
        result['ImageBaseSixFour'] = self.image_base_six_four
        result['LeftTopX'] = self.left_top_x
        result['LeftTopY'] = self.left_top_y
        result['LocalFeature'] = self.local_feature
        result['RespiratorColor'] = self.respirator_color
        result['RightBottomX'] = self.right_bottom_x
        result['RightBottomY'] = self.right_bottom_y
        return result

    def from_map(self, map={}):
        self.feature = map.get('Feature')
        self.file_name = map.get('FileName')
        self.image_base_six_four = map.get('ImageBaseSixFour')
        self.left_top_x = map.get('LeftTopX')
        self.left_top_y = map.get('LeftTopY')
        self.local_feature = map.get('LocalFeature')
        self.respirator_color = map.get('RespiratorColor')
        self.right_bottom_x = map.get('RightBottomX')
        self.right_bottom_y = map.get('RightBottomY')
        return self


class RecognizeImageResponseData(TeaModel):
    def __init__(self, body_list=None, face_list=None):
        self.body_list = []
        self.face_list = []

    def validate(self):
        self.validate_required(self.body_list, 'body_list')
        if self.body_list:
            for k in self.body_list:
                if k :
                    k.validate()
        self.validate_required(self.face_list, 'face_list')
        if self.face_list:
            for k in self.face_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BodyList'] = []
        if self.body_list is not None:
            for k in self.body_list:
                result['BodyList'].append(k.to_map() if k else None)
        else:
            result['BodyList'] = None
        result['FaceList'] = []
        if self.face_list is not None:
            for k in self.face_list:
                result['FaceList'].append(k.to_map() if k else None)
        else:
            result['FaceList'] = None
        return result

    def from_map(self, map={}):
        self.body_list = []
        if map.get('BodyList') is not None:
            for k in map.get('BodyList'):
                temp_model = RecognizeImageResponseDataBodyList()
                temp_model = temp_model.from_map(k)
                self.body_list.append(temp_model)
        else:
            self.body_list = None
        self.face_list = []
        if map.get('FaceList') is not None:
            for k in map.get('FaceList'):
                temp_model = RecognizeImageResponseDataFaceList()
                temp_model = temp_model.from_map(k)
                self.face_list.append(temp_model)
        else:
            self.face_list = None
        return self


class ListCorpsRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListCorpsResponse(TeaModel):
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
            temp_model = ListCorpsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListCorpsResponseDataRecords(TeaModel):
    def __init__(self, corp_id=None, corp_name=None, description=None, create_date=None, parent_corp_id=None, app_name=None, device_count=None):
        self.corp_id = corp_id
        self.corp_name = corp_name
        self.description = description
        self.create_date = create_date
        self.parent_corp_id = parent_corp_id
        self.app_name = app_name
        self.device_count = device_count

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')
        self.validate_required(self.corp_name, 'corp_name')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_date, 'create_date')
        self.validate_required(self.parent_corp_id, 'parent_corp_id')
        self.validate_required(self.app_name, 'app_name')
        self.validate_required(self.device_count, 'device_count')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['CorpName'] = self.corp_name
        result['Description'] = self.description
        result['CreateDate'] = self.create_date
        result['ParentCorpId'] = self.parent_corp_id
        result['AppName'] = self.app_name
        result['DeviceCount'] = self.device_count
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.corp_name = map.get('CorpName')
        self.description = map.get('Description')
        self.create_date = map.get('CreateDate')
        self.parent_corp_id = map.get('ParentCorpId')
        self.app_name = map.get('AppName')
        self.device_count = map.get('DeviceCount')
        return self


class ListCorpsResponseData(TeaModel):
    def __init__(self, page_number=None, page_size=None, total_count=None, total_page=None, records=None):
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.total_page = total_page
        self.records = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.total_page, 'total_page')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['TotalPage'] = self.total_page
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.total_page = map.get('TotalPage')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = ListCorpsResponseDataRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class UpdateCorpRequest(TeaModel):
    def __init__(self, corp_id=None, corp_name=None, app_name=None, parent_corp_id=None, description=None):
        self.corp_id = corp_id
        self.corp_name = corp_name
        self.app_name = app_name
        self.parent_corp_id = parent_corp_id
        self.description = description

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['CorpName'] = self.corp_name
        result['AppName'] = self.app_name
        result['ParentCorpId'] = self.parent_corp_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.corp_name = map.get('CorpName')
        self.app_name = map.get('AppName')
        self.parent_corp_id = map.get('ParentCorpId')
        self.description = map.get('Description')
        return self


class UpdateCorpResponse(TeaModel):
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
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class UpdateDeviceRequest(TeaModel):
    def __init__(self, gb_id=None, device_name=None, device_type=None, device_address=None, device_site=None, device_direction=None, device_resolution=None, bit_rate=None, corp_id=None, vendor=None):
        self.gb_id = gb_id
        self.device_name = device_name
        self.device_type = device_type
        self.device_address = device_address
        self.device_site = device_site
        self.device_direction = device_direction
        self.device_resolution = device_resolution
        self.bit_rate = bit_rate
        self.corp_id = corp_id
        self.vendor = vendor

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GbId'] = self.gb_id
        result['DeviceName'] = self.device_name
        result['DeviceType'] = self.device_type
        result['DeviceAddress'] = self.device_address
        result['DeviceSite'] = self.device_site
        result['DeviceDirection'] = self.device_direction
        result['DeviceResolution'] = self.device_resolution
        result['BitRate'] = self.bit_rate
        result['CorpId'] = self.corp_id
        result['Vendor'] = self.vendor
        return result

    def from_map(self, map={}):
        self.gb_id = map.get('GbId')
        self.device_name = map.get('DeviceName')
        self.device_type = map.get('DeviceType')
        self.device_address = map.get('DeviceAddress')
        self.device_site = map.get('DeviceSite')
        self.device_direction = map.get('DeviceDirection')
        self.device_resolution = map.get('DeviceResolution')
        self.bit_rate = map.get('BitRate')
        self.corp_id = map.get('CorpId')
        self.vendor = map.get('Vendor')
        return self


class UpdateDeviceResponse(TeaModel):
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
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class ListDevicesRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None, device_name=None, page_number=None, page_size=None):
        self.corp_id = corp_id
        self.gb_id = gb_id
        self.device_name = device_name
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        result['DeviceName'] = self.device_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        self.device_name = map.get('DeviceName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListDevicesResponse(TeaModel):
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
            temp_model = ListDevicesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListDevicesResponseDataRecords(TeaModel):
    def __init__(self, access_protocol_type=None, bit_rate=None, cover_image_url=None, gb_id=None, device_address=None, device_direction=None, device_site=None, latitude=None, longitude=None, device_name=None, resolution=None, sip_gbid=None, sip_password=None, sip_server_ip=None, sip_server_port=None, status=None, device_type=None, vendor=None, create_time=None):
        self.access_protocol_type = access_protocol_type
        self.bit_rate = bit_rate
        self.cover_image_url = cover_image_url
        self.gb_id = gb_id
        self.device_address = device_address
        self.device_direction = device_direction
        self.device_site = device_site
        self.latitude = latitude
        self.longitude = longitude
        self.device_name = device_name
        self.resolution = resolution
        self.sip_gbid = sip_gbid
        self.sip_password = sip_password
        self.sip_server_ip = sip_server_ip
        self.sip_server_port = sip_server_port
        self.status = status
        self.device_type = device_type
        self.vendor = vendor
        self.create_time = create_time

    def validate(self):
        self.validate_required(self.access_protocol_type, 'access_protocol_type')
        self.validate_required(self.bit_rate, 'bit_rate')
        self.validate_required(self.cover_image_url, 'cover_image_url')
        self.validate_required(self.gb_id, 'gb_id')
        self.validate_required(self.device_address, 'device_address')
        self.validate_required(self.device_direction, 'device_direction')
        self.validate_required(self.device_site, 'device_site')
        self.validate_required(self.latitude, 'latitude')
        self.validate_required(self.longitude, 'longitude')
        self.validate_required(self.device_name, 'device_name')
        self.validate_required(self.resolution, 'resolution')
        self.validate_required(self.sip_gbid, 'sip_gbid')
        self.validate_required(self.sip_password, 'sip_password')
        self.validate_required(self.sip_server_ip, 'sip_server_ip')
        self.validate_required(self.sip_server_port, 'sip_server_port')
        self.validate_required(self.status, 'status')
        self.validate_required(self.device_type, 'device_type')
        self.validate_required(self.vendor, 'vendor')
        self.validate_required(self.create_time, 'create_time')

    def to_map(self):
        result = {}
        result['AccessProtocolType'] = self.access_protocol_type
        result['BitRate'] = self.bit_rate
        result['CoverImageUrl'] = self.cover_image_url
        result['GbId'] = self.gb_id
        result['DeviceAddress'] = self.device_address
        result['DeviceDirection'] = self.device_direction
        result['DeviceSite'] = self.device_site
        result['Latitude'] = self.latitude
        result['Longitude'] = self.longitude
        result['DeviceName'] = self.device_name
        result['Resolution'] = self.resolution
        result['SipGBId'] = self.sip_gbid
        result['SipPassword'] = self.sip_password
        result['SipServerIp'] = self.sip_server_ip
        result['SipServerPort'] = self.sip_server_port
        result['Status'] = self.status
        result['DeviceType'] = self.device_type
        result['Vendor'] = self.vendor
        result['CreateTime'] = self.create_time
        return result

    def from_map(self, map={}):
        self.access_protocol_type = map.get('AccessProtocolType')
        self.bit_rate = map.get('BitRate')
        self.cover_image_url = map.get('CoverImageUrl')
        self.gb_id = map.get('GbId')
        self.device_address = map.get('DeviceAddress')
        self.device_direction = map.get('DeviceDirection')
        self.device_site = map.get('DeviceSite')
        self.latitude = map.get('Latitude')
        self.longitude = map.get('Longitude')
        self.device_name = map.get('DeviceName')
        self.resolution = map.get('Resolution')
        self.sip_gbid = map.get('SipGBId')
        self.sip_password = map.get('SipPassword')
        self.sip_server_ip = map.get('SipServerIp')
        self.sip_server_port = map.get('SipServerPort')
        self.status = map.get('Status')
        self.device_type = map.get('DeviceType')
        self.vendor = map.get('Vendor')
        self.create_time = map.get('CreateTime')
        return self


class ListDevicesResponseData(TeaModel):
    def __init__(self, page_number=None, page_size=None, total_count=None, total_page=None, records=None):
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.total_page = total_page
        self.records = []

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.total_page, 'total_page')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['TotalPage'] = self.total_page
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.total_page = map.get('TotalPage')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = ListDevicesResponseDataRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class GetDeviceLiveUrlRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None):
        self.corp_id = corp_id
        self.gb_id = gb_id

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        return self


class GetDeviceLiveUrlResponse(TeaModel):
    def __init__(self, code=None, url=None, message=None, request_id=None):
        self.code = code
        self.url = url
        self.message = message
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.url, 'url')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Url'] = self.url
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.url = map.get('Url')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        return self


class SearchFaceRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None, start_time_stamp=None, end_time_stamp=None, page_no=None, page_size=None, option_list=None):
        self.corp_id = corp_id
        self.gb_id = gb_id
        self.start_time_stamp = start_time_stamp
        self.end_time_stamp = end_time_stamp
        self.page_no = page_no
        self.page_size = page_size
        self.option_list = {}

    def validate(self):
        self.validate_required(self.corp_id, 'corp_id')
        self.validate_required(self.start_time_stamp, 'start_time_stamp')
        self.validate_required(self.end_time_stamp, 'end_time_stamp')
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        result['StartTimeStamp'] = self.start_time_stamp
        result['EndTimeStamp'] = self.end_time_stamp
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['OptionList'] = self.option_list
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        self.start_time_stamp = map.get('StartTimeStamp')
        self.end_time_stamp = map.get('EndTimeStamp')
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.option_list = map.get('OptionList')
        return self


class SearchFaceResponse(TeaModel):
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
            temp_model = SearchFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SearchFaceResponseDataRecords(TeaModel):
    def __init__(self, gb_id=None, image_url=None, left_top_x=None, left_top_y=None, right_bottom_x=None, right_bottom_y=None, score=None, target_image_url=None):
        self.gb_id = gb_id
        self.image_url = image_url
        self.left_top_x = left_top_x
        self.left_top_y = left_top_y
        self.right_bottom_x = right_bottom_x
        self.right_bottom_y = right_bottom_y
        self.score = score
        self.target_image_url = target_image_url

    def validate(self):
        self.validate_required(self.gb_id, 'gb_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.left_top_x, 'left_top_x')
        self.validate_required(self.left_top_y, 'left_top_y')
        self.validate_required(self.right_bottom_x, 'right_bottom_x')
        self.validate_required(self.right_bottom_y, 'right_bottom_y')
        self.validate_required(self.score, 'score')
        self.validate_required(self.target_image_url, 'target_image_url')

    def to_map(self):
        result = {}
        result['GbId'] = self.gb_id
        result['ImageUrl'] = self.image_url
        result['LeftTopX'] = self.left_top_x
        result['LeftTopY'] = self.left_top_y
        result['RightBottomX'] = self.right_bottom_x
        result['RightBottomY'] = self.right_bottom_y
        result['Score'] = self.score
        result['TargetImageUrl'] = self.target_image_url
        return result

    def from_map(self, map={}):
        self.gb_id = map.get('GbId')
        self.image_url = map.get('ImageUrl')
        self.left_top_x = map.get('LeftTopX')
        self.left_top_y = map.get('LeftTopY')
        self.right_bottom_x = map.get('RightBottomX')
        self.right_bottom_y = map.get('RightBottomY')
        self.score = map.get('Score')
        self.target_image_url = map.get('TargetImageUrl')
        return self


class SearchFaceResponseData(TeaModel):
    def __init__(self, page_no=None, page_size=None, total_count=None, total_page=None, records=None):
        self.page_no = page_no
        self.page_size = page_size
        self.total_count = total_count
        self.total_page = total_page
        self.records = []

    def validate(self):
        self.validate_required(self.page_no, 'page_no')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.total_page, 'total_page')
        self.validate_required(self.records, 'records')
        if self.records:
            for k in self.records:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageNo'] = self.page_no
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        result['TotalPage'] = self.total_page
        result['Records'] = []
        if self.records is not None:
            for k in self.records:
                result['Records'].append(k.to_map() if k else None)
        else:
            result['Records'] = None
        return result

    def from_map(self, map={}):
        self.page_no = map.get('PageNo')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        self.total_page = map.get('TotalPage')
        self.records = []
        if map.get('Records') is not None:
            for k in map.get('Records'):
                temp_model = SearchFaceResponseDataRecords()
                temp_model = temp_model.from_map(k)
                self.records.append(temp_model)
        else:
            self.records = None
        return self


class AddDeviceRequest(TeaModel):
    def __init__(self, gb_id=None, device_name=None, device_type=None, device_address=None, device_site=None, device_direction=None, device_resolution=None, bit_rate=None, corp_id=None, vendor=None):
        self.gb_id = gb_id
        self.device_name = device_name
        self.device_type = device_type
        self.device_address = device_address
        self.device_site = device_site
        self.device_direction = device_direction
        self.device_resolution = device_resolution
        self.bit_rate = bit_rate
        self.corp_id = corp_id
        self.vendor = vendor

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['GbId'] = self.gb_id
        result['DeviceName'] = self.device_name
        result['DeviceType'] = self.device_type
        result['DeviceAddress'] = self.device_address
        result['DeviceSite'] = self.device_site
        result['DeviceDirection'] = self.device_direction
        result['DeviceResolution'] = self.device_resolution
        result['BitRate'] = self.bit_rate
        result['CorpId'] = self.corp_id
        result['Vendor'] = self.vendor
        return result

    def from_map(self, map={}):
        self.gb_id = map.get('GbId')
        self.device_name = map.get('DeviceName')
        self.device_type = map.get('DeviceType')
        self.device_address = map.get('DeviceAddress')
        self.device_site = map.get('DeviceSite')
        self.device_direction = map.get('DeviceDirection')
        self.device_resolution = map.get('DeviceResolution')
        self.bit_rate = map.get('BitRate')
        self.corp_id = map.get('CorpId')
        self.vendor = map.get('Vendor')
        return self


class AddDeviceResponse(TeaModel):
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
        result['Data'] = self.data
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.data = map.get('Data')
        return self


class CreateCorpRequest(TeaModel):
    def __init__(self, corp_name=None, app_name=None, parent_corp_id=None, description=None):
        self.corp_name = corp_name
        self.app_name = app_name
        self.parent_corp_id = parent_corp_id
        self.description = description

    def validate(self):
        self.validate_required(self.corp_name, 'corp_name')
        self.validate_required(self.app_name, 'app_name')

    def to_map(self):
        result = {}
        result['CorpName'] = self.corp_name
        result['AppName'] = self.app_name
        result['ParentCorpId'] = self.parent_corp_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.corp_name = map.get('CorpName')
        self.app_name = map.get('AppName')
        self.parent_corp_id = map.get('ParentCorpId')
        self.description = map.get('Description')
        return self


class CreateCorpResponse(TeaModel):
    def __init__(self, code=None, message=None, request_id=None, corp_id=None):
        self.code = code
        self.message = message
        self.request_id = request_id
        self.corp_id = corp_id

    def validate(self):
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.corp_id, 'corp_id')

    def to_map(self):
        result = {}
        result['Code'] = self.code
        result['Message'] = self.message
        result['RequestId'] = self.request_id
        result['CorpId'] = self.corp_id
        return result

    def from_map(self, map={}):
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.request_id = map.get('RequestId')
        self.corp_id = map.get('CorpId')
        return self


class DeleteDeviceRequest(TeaModel):
    def __init__(self, corp_id=None, gb_id=None):
        self.corp_id = corp_id
        self.gb_id = gb_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CorpId'] = self.corp_id
        result['GbId'] = self.gb_id
        return result

    def from_map(self, map={}):
        self.corp_id = map.get('CorpId')
        self.gb_id = map.get('GbId')
        return self


class DeleteDeviceResponse(TeaModel):
    def __init__(self, request_id=None, code=None, data=None, message=None):
        self.request_id = request_id
        self.code = code
        self.data = data
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Data'] = self.data
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.data = map.get('Data')
        self.message = map.get('Message')
        return self

# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class QuerySmsTemplateRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_code=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_code = template_code

    def validate(self):
        self.validate_required(self.template_code, 'template_code')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateCode'] = self.template_code
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_code = map.get('TemplateCode')
        return self


class QuerySmsTemplateResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, template_status=None, reason=None, template_code=None, template_type=None, template_name=None, template_content=None, create_date=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.template_status = template_status
        self.reason = reason
        self.template_code = template_code
        self.template_type = template_type
        self.template_name = template_name
        self.template_content = template_content
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.template_status, 'template_status')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_content, 'template_content')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['TemplateStatus'] = self.template_status
        result['Reason'] = self.reason
        result['TemplateCode'] = self.template_code
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateContent'] = self.template_content
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.template_status = map.get('TemplateStatus')
        self.reason = map.get('Reason')
        self.template_code = map.get('TemplateCode')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_content = map.get('TemplateContent')
        self.create_date = map.get('CreateDate')
        return self


class QuerySmsSignRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, sign_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.sign_name = sign_name

    def validate(self):
        self.validate_required(self.sign_name, 'sign_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SignName'] = self.sign_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.sign_name = map.get('SignName')
        return self


class QuerySmsSignResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, sign_status=None, reason=None, sign_name=None, create_date=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.sign_status = sign_status
        self.reason = reason
        self.sign_name = sign_name
        self.create_date = create_date

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.sign_status, 'sign_status')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.create_date, 'create_date')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['SignStatus'] = self.sign_status
        result['Reason'] = self.reason
        result['SignName'] = self.sign_name
        result['CreateDate'] = self.create_date
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.sign_status = map.get('SignStatus')
        self.reason = map.get('Reason')
        self.sign_name = map.get('SignName')
        self.create_date = map.get('CreateDate')
        return self


class ModifySmsTemplateRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_type=None, template_name=None, template_code=None, template_content=None, remark=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_type = template_type
        self.template_name = template_name
        self.template_code = template_code
        self.template_content = template_content
        self.remark = remark

    def validate(self):
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.template_content, 'template_content')
        self.validate_required(self.remark, 'remark')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateCode'] = self.template_code
        result['TemplateContent'] = self.template_content
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_code = map.get('TemplateCode')
        self.template_content = map.get('TemplateContent')
        self.remark = map.get('Remark')
        return self


class ModifySmsTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_code=None, code=None, message=None):
        self.request_id = request_id
        self.template_code = template_code
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateCode'] = self.template_code
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_code = map.get('TemplateCode')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class ModifySmsSignRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, sign_name=None, sign_source=None, sign_file_list=None, remark=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.sign_name = sign_name
        self.sign_source = sign_source
        self.sign_file_list = []
        self.remark = remark

    def validate(self):
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.sign_source, 'sign_source')
        self.validate_required(self.sign_file_list, 'sign_file_list')
        if self.sign_file_list:
            for k in self.sign_file_list:
                if k :
                    k.validate()
        self.validate_required(self.remark, 'remark')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SignName'] = self.sign_name
        result['SignSource'] = self.sign_source
        result['SignFileList'] = []
        if self.sign_file_list is not None:
            for k in self.sign_file_list:
                result['SignFileList'].append(k.to_map() if k else None)
        else:
            result['SignFileList'] = None
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.sign_name = map.get('SignName')
        self.sign_source = map.get('SignSource')
        self.sign_file_list = []
        if map.get('SignFileList') is not None:
            for k in map.get('SignFileList'):
                temp_model = ModifySmsSignRequestSignFileList()
                temp_model = temp_model.from_map(k)
                self.sign_file_list.append(temp_model)
        else:
            self.sign_file_list = None
        self.remark = map.get('Remark')
        return self


class ModifySmsSignRequestSignFileList(TeaModel):
    def __init__(self, file_suffix=None, file_contents=None):
        self.file_suffix = file_suffix
        self.file_contents = file_contents

    def validate(self):
        self.validate_required(self.file_suffix, 'file_suffix')
        self.validate_required(self.file_contents, 'file_contents')

    def to_map(self):
        result = {}
        result['FileSuffix'] = self.file_suffix
        result['FileContents'] = self.file_contents
        return result

    def from_map(self, map={}):
        self.file_suffix = map.get('FileSuffix')
        self.file_contents = map.get('FileContents')
        return self


class ModifySmsSignResponse(TeaModel):
    def __init__(self, request_id=None, sign_name=None, code=None, message=None):
        self.request_id = request_id
        self.sign_name = sign_name
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SignName'] = self.sign_name
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.sign_name = map.get('SignName')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DeleteSmsTemplateRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_code=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_code = template_code

    def validate(self):
        self.validate_required(self.template_code, 'template_code')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateCode'] = self.template_code
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_code = map.get('TemplateCode')
        return self


class DeleteSmsTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_code=None, code=None, message=None):
        self.request_id = request_id
        self.template_code = template_code
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateCode'] = self.template_code
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_code = map.get('TemplateCode')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class DeleteSmsSignRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, sign_name=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.sign_name = sign_name

    def validate(self):
        self.validate_required(self.sign_name, 'sign_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SignName'] = self.sign_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.sign_name = map.get('SignName')
        return self


class DeleteSmsSignResponse(TeaModel):
    def __init__(self, request_id=None, sign_name=None, code=None, message=None):
        self.request_id = request_id
        self.sign_name = sign_name
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SignName'] = self.sign_name
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.sign_name = map.get('SignName')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class AddSmsTemplateRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, template_type=None, template_name=None, template_content=None, remark=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.template_type = template_type
        self.template_name = template_name
        self.template_content = template_content
        self.remark = remark

    def validate(self):
        self.validate_required(self.template_type, 'template_type')
        self.validate_required(self.template_name, 'template_name')
        self.validate_required(self.template_content, 'template_content')
        self.validate_required(self.remark, 'remark')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['TemplateType'] = self.template_type
        result['TemplateName'] = self.template_name
        result['TemplateContent'] = self.template_content
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.template_type = map.get('TemplateType')
        self.template_name = map.get('TemplateName')
        self.template_content = map.get('TemplateContent')
        self.remark = map.get('Remark')
        return self


class AddSmsTemplateResponse(TeaModel):
    def __init__(self, request_id=None, template_code=None, code=None, message=None):
        self.request_id = request_id
        self.template_code = template_code
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TemplateCode'] = self.template_code
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.template_code = map.get('TemplateCode')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class AddSmsSignRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, sign_name=None, sign_source=None, sign_file_list=None, remark=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.sign_name = sign_name
        self.sign_source = sign_source
        self.sign_file_list = []
        self.remark = remark

    def validate(self):
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.sign_source, 'sign_source')
        self.validate_required(self.sign_file_list, 'sign_file_list')
        if self.sign_file_list:
            for k in self.sign_file_list:
                if k :
                    k.validate()
        self.validate_required(self.remark, 'remark')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['SignName'] = self.sign_name
        result['SignSource'] = self.sign_source
        result['SignFileList'] = []
        if self.sign_file_list is not None:
            for k in self.sign_file_list:
                result['SignFileList'].append(k.to_map() if k else None)
        else:
            result['SignFileList'] = None
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.sign_name = map.get('SignName')
        self.sign_source = map.get('SignSource')
        self.sign_file_list = []
        if map.get('SignFileList') is not None:
            for k in map.get('SignFileList'):
                temp_model = AddSmsSignRequestSignFileList()
                temp_model = temp_model.from_map(k)
                self.sign_file_list.append(temp_model)
        else:
            self.sign_file_list = None
        self.remark = map.get('Remark')
        return self


class AddSmsSignRequestSignFileList(TeaModel):
    def __init__(self, file_suffix=None, file_contents=None):
        self.file_suffix = file_suffix
        self.file_contents = file_contents

    def validate(self):
        self.validate_required(self.file_suffix, 'file_suffix')
        self.validate_required(self.file_contents, 'file_contents')

    def to_map(self):
        result = {}
        result['FileSuffix'] = self.file_suffix
        result['FileContents'] = self.file_contents
        return result

    def from_map(self, map={}):
        self.file_suffix = map.get('FileSuffix')
        self.file_contents = map.get('FileContents')
        return self


class AddSmsSignResponse(TeaModel):
    def __init__(self, request_id=None, sign_name=None, code=None, message=None):
        self.request_id = request_id
        self.sign_name = sign_name
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SignName'] = self.sign_name
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.sign_name = map.get('SignName')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SendBatchSmsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, phone_number_json=None, sign_name_json=None, template_code=None, template_param_json=None, sms_up_extend_code_json=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.phone_number_json = phone_number_json
        self.sign_name_json = sign_name_json
        self.template_code = template_code
        self.template_param_json = template_param_json
        self.sms_up_extend_code_json = sms_up_extend_code_json

    def validate(self):
        self.validate_required(self.phone_number_json, 'phone_number_json')
        self.validate_required(self.sign_name_json, 'sign_name_json')
        self.validate_required(self.template_code, 'template_code')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['PhoneNumberJson'] = self.phone_number_json
        result['SignNameJson'] = self.sign_name_json
        result['TemplateCode'] = self.template_code
        result['TemplateParamJson'] = self.template_param_json
        result['SmsUpExtendCodeJson'] = self.sms_up_extend_code_json
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.phone_number_json = map.get('PhoneNumberJson')
        self.sign_name_json = map.get('SignNameJson')
        self.template_code = map.get('TemplateCode')
        self.template_param_json = map.get('TemplateParamJson')
        self.sms_up_extend_code_json = map.get('SmsUpExtendCodeJson')
        return self


class SendBatchSmsResponse(TeaModel):
    def __init__(self, request_id=None, biz_id=None, code=None, message=None):
        self.request_id = request_id
        self.biz_id = biz_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.biz_id, 'biz_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['BizId'] = self.biz_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.biz_id = map.get('BizId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class SendSmsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, phone_numbers=None, sign_name=None, template_code=None, template_param=None, sms_up_extend_code=None, out_id=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.phone_numbers = phone_numbers
        self.sign_name = sign_name
        self.template_code = template_code
        self.template_param = template_param
        self.sms_up_extend_code = sms_up_extend_code
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.phone_numbers, 'phone_numbers')
        self.validate_required(self.sign_name, 'sign_name')
        self.validate_required(self.template_code, 'template_code')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['PhoneNumbers'] = self.phone_numbers
        result['SignName'] = self.sign_name
        result['TemplateCode'] = self.template_code
        result['TemplateParam'] = self.template_param
        result['SmsUpExtendCode'] = self.sms_up_extend_code
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.phone_numbers = map.get('PhoneNumbers')
        self.sign_name = map.get('SignName')
        self.template_code = map.get('TemplateCode')
        self.template_param = map.get('TemplateParam')
        self.sms_up_extend_code = map.get('SmsUpExtendCode')
        self.out_id = map.get('OutId')
        return self


class SendSmsResponse(TeaModel):
    def __init__(self, request_id=None, biz_id=None, code=None, message=None):
        self.request_id = request_id
        self.biz_id = biz_id
        self.code = code
        self.message = message

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.biz_id, 'biz_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['BizId'] = self.biz_id
        result['Code'] = self.code
        result['Message'] = self.message
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.biz_id = map.get('BizId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        return self


class QuerySendDetailsRequest(TeaModel):
    def __init__(self, access_key_id=None, owner_id=None, resource_owner_account=None, resource_owner_id=None, phone_number=None, biz_id=None, send_date=None, page_size=None, current_page=None):
        self.access_key_id = access_key_id
        self.owner_id = owner_id
        self.resource_owner_account = resource_owner_account
        self.resource_owner_id = resource_owner_id
        self.phone_number = phone_number
        self.biz_id = biz_id
        self.send_date = send_date
        self.page_size = page_size
        self.current_page = current_page

    def validate(self):
        self.validate_required(self.phone_number, 'phone_number')
        self.validate_required(self.send_date, 'send_date')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.current_page, 'current_page')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['OwnerId'] = self.owner_id
        result['ResourceOwnerAccount'] = self.resource_owner_account
        result['ResourceOwnerId'] = self.resource_owner_id
        result['PhoneNumber'] = self.phone_number
        result['BizId'] = self.biz_id
        result['SendDate'] = self.send_date
        result['PageSize'] = self.page_size
        result['CurrentPage'] = self.current_page
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.owner_id = map.get('OwnerId')
        self.resource_owner_account = map.get('ResourceOwnerAccount')
        self.resource_owner_id = map.get('ResourceOwnerId')
        self.phone_number = map.get('PhoneNumber')
        self.biz_id = map.get('BizId')
        self.send_date = map.get('SendDate')
        self.page_size = map.get('PageSize')
        self.current_page = map.get('CurrentPage')
        return self


class QuerySendDetailsResponse(TeaModel):
    def __init__(self, request_id=None, code=None, message=None, total_count=None, sms_send_detail_dtos=None):
        self.request_id = request_id
        self.code = code
        self.message = message
        self.total_count = total_count
        self.sms_send_detail_dtos = sms_send_detail_dtos

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.message, 'message')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.sms_send_detail_dtos, 'sms_send_detail_dtos')
        if self.sms_send_detail_dtos:
            self.sms_send_detail_dtos.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['Message'] = self.message
        result['TotalCount'] = self.total_count
        if self.sms_send_detail_dtos is not None:
            result['SmsSendDetailDTOs'] = self.sms_send_detail_dtos.to_map()
        else:
            result['SmsSendDetailDTOs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.message = map.get('Message')
        self.total_count = map.get('TotalCount')
        if map.get('SmsSendDetailDTOs') is not None:
            temp_model = QuerySendDetailsResponseSmsSendDetailDTOs()
            self.sms_send_detail_dtos = temp_model.from_map(map['SmsSendDetailDTOs'])
        else:
            self.sms_send_detail_dtos = None
        return self


class QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO(TeaModel):
    def __init__(self, phone_num=None, send_status=None, err_code=None, template_code=None, content=None, send_date=None, receive_date=None, out_id=None):
        self.phone_num = phone_num
        self.send_status = send_status
        self.err_code = err_code
        self.template_code = template_code
        self.content = content
        self.send_date = send_date
        self.receive_date = receive_date
        self.out_id = out_id

    def validate(self):
        self.validate_required(self.phone_num, 'phone_num')
        self.validate_required(self.send_status, 'send_status')
        self.validate_required(self.err_code, 'err_code')
        self.validate_required(self.template_code, 'template_code')
        self.validate_required(self.content, 'content')
        self.validate_required(self.send_date, 'send_date')
        self.validate_required(self.receive_date, 'receive_date')
        self.validate_required(self.out_id, 'out_id')

    def to_map(self):
        result = {}
        result['PhoneNum'] = self.phone_num
        result['SendStatus'] = self.send_status
        result['ErrCode'] = self.err_code
        result['TemplateCode'] = self.template_code
        result['Content'] = self.content
        result['SendDate'] = self.send_date
        result['ReceiveDate'] = self.receive_date
        result['OutId'] = self.out_id
        return result

    def from_map(self, map={}):
        self.phone_num = map.get('PhoneNum')
        self.send_status = map.get('SendStatus')
        self.err_code = map.get('ErrCode')
        self.template_code = map.get('TemplateCode')
        self.content = map.get('Content')
        self.send_date = map.get('SendDate')
        self.receive_date = map.get('ReceiveDate')
        self.out_id = map.get('OutId')
        return self


class QuerySendDetailsResponseSmsSendDetailDTOs(TeaModel):
    def __init__(self, sms_send_detail_dto=None):
        self.sms_send_detail_dto = []

    def validate(self):
        self.validate_required(self.sms_send_detail_dto, 'sms_send_detail_dto')
        if self.sms_send_detail_dto:
            for k in self.sms_send_detail_dto:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SmsSendDetailDTO'] = []
        if self.sms_send_detail_dto is not None:
            for k in self.sms_send_detail_dto:
                result['SmsSendDetailDTO'].append(k.to_map() if k else None)
        else:
            result['SmsSendDetailDTO'] = None
        return result

    def from_map(self, map={}):
        self.sms_send_detail_dto = []
        if map.get('SmsSendDetailDTO') is not None:
            for k in map.get('SmsSendDetailDTO'):
                temp_model = QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO()
                temp_model = temp_model.from_map(k)
                self.sms_send_detail_dto.append(temp_model)
        else:
            self.sms_send_detail_dto = None
        return self

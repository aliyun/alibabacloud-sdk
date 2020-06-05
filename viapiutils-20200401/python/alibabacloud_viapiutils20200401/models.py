# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GetOssStsTokenRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class GetOssStsTokenResponse(TeaModel):
    def __init__(self, request_id=None, data=None):
        self.request_id = request_id
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Data') is not None:
            temp_model = GetOssStsTokenResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetOssStsTokenResponseData(TeaModel):
    def __init__(self, access_key_id=None, access_key_secret=None, security_token=None, script=None):
        self.access_key_id = access_key_id
        self.access_key_secret = access_key_secret
        self.security_token = security_token
        self.script = script

    def validate(self):
        self.validate_required(self.access_key_id, 'access_key_id')
        self.validate_required(self.access_key_secret, 'access_key_secret')
        self.validate_required(self.security_token, 'security_token')
        self.validate_required(self.script, 'script')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['AccessKeySecret'] = self.access_key_secret
        result['SecurityToken'] = self.security_token
        result['Script'] = self.script
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.access_key_secret = map.get('AccessKeySecret')
        self.security_token = map.get('SecurityToken')
        self.script = map.get('Script')
        return self

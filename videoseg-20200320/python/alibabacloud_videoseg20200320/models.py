# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class SegmentVideoBodyRequest(TeaModel):
    def __init__(self, video_url=None):
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        return self


class SegmentVideoBodyResponse(TeaModel):
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
            temp_model = SegmentVideoBodyResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SegmentVideoBodyResponseData(TeaModel):
    def __init__(self, video_url=None):
        self.video_url = video_url

    def validate(self):
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        return self


class SegmentVideoBodyAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None):
        self.video_url_object = video_url_object

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        return self


class GetAsyncJobResultRequest(TeaModel):
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


class GetAsyncJobResultResponse(TeaModel):
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
            temp_model = GetAsyncJobResultResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetAsyncJobResultResponseData(TeaModel):
    def __init__(self, job_id=None, status=None, result=None, error_code=None, error_message=None):
        self.job_id = job_id
        self.status = status
        self.result = result
        self.error_code = error_code
        self.error_message = error_message

    def validate(self):
        self.validate_required(self.job_id, 'job_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.result, 'result')
        self.validate_required(self.error_code, 'error_code')
        self.validate_required(self.error_message, 'error_message')

    def to_map(self):
        result = {}
        result['JobId'] = self.job_id
        result['Status'] = self.status
        result['Result'] = self.result
        result['ErrorCode'] = self.error_code
        result['ErrorMessage'] = self.error_message
        return result

    def from_map(self, map={}):
        self.job_id = map.get('JobId')
        self.status = map.get('Status')
        self.result = map.get('Result')
        self.error_code = map.get('ErrorCode')
        self.error_message = map.get('ErrorMessage')
        return self

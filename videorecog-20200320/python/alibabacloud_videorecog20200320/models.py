# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DetectVideoShotRequest(TeaModel):
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


class DetectVideoShotResponse(TeaModel):
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
            temp_model = DetectVideoShotResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectVideoShotResponseData(TeaModel):
    def __init__(self, shot_frame_ids=None):
        self.shot_frame_ids = []

    def validate(self):
        self.validate_required(self.shot_frame_ids, 'shot_frame_ids')

    def to_map(self):
        result = {}
        result['ShotFrameIds'] = []
        if self.shot_frame_ids is not None:
            for k in self.shot_frame_ids:
                result['ShotFrameIds'].append(k)
        else:
            result['ShotFrameIds'] = None
        return result

    def from_map(self, map={}):
        self.shot_frame_ids = []
        if map.get('ShotFrameIds') is not None:
            for k in map.get('ShotFrameIds'):
                self.shot_frame_ids.append(k)
        else:
            self.shot_frame_ids = None
        return self


class DetectVideoShotAdvanceRequest(TeaModel):
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


class GenerateVideoCoverRequest(TeaModel):
    def __init__(self, video_url=None, is_gif=None):
        self.video_url = video_url
        self.is_gif = is_gif

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.is_gif, 'is_gif')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['IsGif'] = self.is_gif
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.is_gif = map.get('IsGif')
        return self


class GenerateVideoCoverResponse(TeaModel):
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
            temp_model = GenerateVideoCoverResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GenerateVideoCoverResponseDataOutputs(TeaModel):
    def __init__(self, image_url=None, confidence=None):
        self.image_url = image_url
        self.confidence = confidence

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.confidence, 'confidence')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['Confidence'] = self.confidence
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.confidence = map.get('Confidence')
        return self


class GenerateVideoCoverResponseData(TeaModel):
    def __init__(self, outputs=None):
        self.outputs = []

    def validate(self):
        self.validate_required(self.outputs, 'outputs')
        if self.outputs:
            for k in self.outputs:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Outputs'] = []
        if self.outputs is not None:
            for k in self.outputs:
                result['Outputs'].append(k.to_map() if k else None)
        else:
            result['Outputs'] = None
        return result

    def from_map(self, map={}):
        self.outputs = []
        if map.get('Outputs') is not None:
            for k in map.get('Outputs'):
                temp_model = GenerateVideoCoverResponseDataOutputs()
                temp_model = temp_model.from_map(k)
                self.outputs.append(temp_model)
        else:
            self.outputs = None
        return self


class GenerateVideoCoverAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, is_gif=None):
        self.video_url_object = video_url_object
        self.is_gif = is_gif

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')
        self.validate_required(self.is_gif, 'is_gif')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['IsGif'] = self.is_gif
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.is_gif = map.get('IsGif')
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

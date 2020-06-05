# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GenerateVideoRequest(TeaModel):
    def __init__(self, file_list=None, scene=None, width=None, height=None, style=None, duration=None, duration_adaption=None, transition_style=None, smart_effect=None, puzzle_effect=None, mute=None):
        self.file_list = []
        self.scene = scene
        self.width = width
        self.height = height
        self.style = style
        self.duration = duration
        self.duration_adaption = duration_adaption
        self.transition_style = transition_style
        self.smart_effect = smart_effect
        self.puzzle_effect = puzzle_effect
        self.mute = mute

    def validate(self):
        self.validate_required(self.file_list, 'file_list')
        if self.file_list:
            for k in self.file_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileList'] = []
        if self.file_list is not None:
            for k in self.file_list:
                result['FileList'].append(k.to_map() if k else None)
        else:
            result['FileList'] = None
        result['Scene'] = self.scene
        result['Width'] = self.width
        result['Height'] = self.height
        result['Style'] = self.style
        result['Duration'] = self.duration
        result['DurationAdaption'] = self.duration_adaption
        result['TransitionStyle'] = self.transition_style
        result['SmartEffect'] = self.smart_effect
        result['PuzzleEffect'] = self.puzzle_effect
        result['Mute'] = self.mute
        return result

    def from_map(self, map={}):
        self.file_list = []
        if map.get('FileList') is not None:
            for k in map.get('FileList'):
                temp_model = GenerateVideoRequestFileList()
                temp_model = temp_model.from_map(k)
                self.file_list.append(temp_model)
        else:
            self.file_list = None
        self.scene = map.get('Scene')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.style = map.get('Style')
        self.duration = map.get('Duration')
        self.duration_adaption = map.get('DurationAdaption')
        self.transition_style = map.get('TransitionStyle')
        self.smart_effect = map.get('SmartEffect')
        self.puzzle_effect = map.get('PuzzleEffect')
        self.mute = map.get('Mute')
        return self


class GenerateVideoRequestFileList(TeaModel):
    def __init__(self, file_url=None, file_name=None, type=None):
        self.file_url = file_url
        self.file_name = file_name
        self.type = type

    def validate(self):
        self.validate_required(self.file_url, 'file_url')
        self.validate_required(self.file_name, 'file_name')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['FileUrl'] = self.file_url
        result['FileName'] = self.file_name
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.file_url = map.get('FileUrl')
        self.file_name = map.get('FileName')
        self.type = map.get('Type')
        return self


class GenerateVideoResponse(TeaModel):
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
            temp_model = GenerateVideoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GenerateVideoResponseData(TeaModel):
    def __init__(self, video_url=None, video_cover_url=None):
        self.video_url = video_url
        self.video_cover_url = video_cover_url

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.video_cover_url, 'video_cover_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['VideoCoverUrl'] = self.video_cover_url
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.video_cover_url = map.get('VideoCoverUrl')
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


class SuperResolveVideoRequest(TeaModel):
    def __init__(self, video_url=None, bit_rate=None):
        self.video_url = video_url
        self.bit_rate = bit_rate

    def validate(self):
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['BitRate'] = self.bit_rate
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.bit_rate = map.get('BitRate')
        return self


class SuperResolveVideoResponse(TeaModel):
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
            temp_model = SuperResolveVideoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SuperResolveVideoResponseData(TeaModel):
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


class SuperResolveVideoAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, bit_rate=None):
        self.video_url_object = video_url_object
        self.bit_rate = bit_rate

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['BitRate'] = self.bit_rate
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.bit_rate = map.get('BitRate')
        return self


class EraseVideoLogoRequest(TeaModel):
    def __init__(self, video_url=None, boxes=None):
        self.video_url = video_url
        self.boxes = []

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        if self.boxes:
            for k in self.boxes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['Boxes'] = []
        if self.boxes is not None:
            for k in self.boxes:
                result['Boxes'].append(k.to_map() if k else None)
        else:
            result['Boxes'] = None
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                temp_model = EraseVideoLogoRequestBoxes()
                temp_model = temp_model.from_map(k)
                self.boxes.append(temp_model)
        else:
            self.boxes = None
        return self


class EraseVideoLogoRequestBoxes(TeaModel):
    def __init__(self, h=None, w=None, x=None, y=None):
        self.h = h
        self.w = w
        self.x = x
        self.y = y

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['H'] = self.h
        result['W'] = self.w
        result['X'] = self.x
        result['Y'] = self.y
        return result

    def from_map(self, map={}):
        self.h = map.get('H')
        self.w = map.get('W')
        self.x = map.get('X')
        self.y = map.get('Y')
        return self


class EraseVideoLogoResponse(TeaModel):
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
            temp_model = EraseVideoLogoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class EraseVideoLogoResponseData(TeaModel):
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


class EraseVideoLogoAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, boxes=None):
        self.video_url_object = video_url_object
        self.boxes = []

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')
        if self.boxes:
            for k in self.boxes:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['Boxes'] = []
        if self.boxes is not None:
            for k in self.boxes:
                result['Boxes'].append(k.to_map() if k else None)
        else:
            result['Boxes'] = None
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                temp_model = EraseVideoLogoAdvanceRequestBoxes()
                temp_model = temp_model.from_map(k)
                self.boxes.append(temp_model)
        else:
            self.boxes = None
        return self


class EraseVideoLogoAdvanceRequestBoxes(TeaModel):
    def __init__(self, h=None, w=None, x=None, y=None):
        self.h = h
        self.w = w
        self.x = x
        self.y = y

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['H'] = self.h
        result['W'] = self.w
        result['X'] = self.x
        result['Y'] = self.y
        return result

    def from_map(self, map={}):
        self.h = map.get('H')
        self.w = map.get('W')
        self.x = map.get('X')
        self.y = map.get('Y')
        return self


class EraseVideoSubtitlesRequest(TeaModel):
    def __init__(self, video_url=None, _bx=None, _by=None, _bw=None, _bh=None):
        self.video_url = video_url
        self._bx = _bx
        self._by = _by
        self._bw = _bw
        self._bh = _bh

    def validate(self):
        self.validate_required(self.video_url, 'video_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['BX'] = self._bx
        result['BY'] = self._by
        result['BW'] = self._bw
        result['BH'] = self._bh
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self._bx = map.get('BX')
        self._by = map.get('BY')
        self._bw = map.get('BW')
        self._bh = map.get('BH')
        return self


class EraseVideoSubtitlesResponse(TeaModel):
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
            temp_model = EraseVideoSubtitlesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class EraseVideoSubtitlesResponseData(TeaModel):
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


class EraseVideoSubtitlesAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, _bx=None, _by=None, _bw=None, _bh=None):
        self.video_url_object = video_url_object
        self._bx = _bx
        self._by = _by
        self._bw = _bw
        self._bh = _bh

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['BX'] = self._bx
        result['BY'] = self._by
        result['BW'] = self._bw
        result['BH'] = self._bh
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self._bx = map.get('BX')
        self._by = map.get('BY')
        self._bw = map.get('BW')
        self._bh = map.get('BH')
        return self


class AbstractEcommerceVideoRequest(TeaModel):
    def __init__(self, video_url=None, duration=None, width=None, height=None):
        self.video_url = video_url
        self.duration = duration
        self.width = width
        self.height = height

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.duration, 'duration')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['Duration'] = self.duration
        result['Width'] = self.width
        result['Height'] = self.height
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.duration = map.get('Duration')
        self.width = map.get('Width')
        self.height = map.get('Height')
        return self


class AbstractEcommerceVideoResponse(TeaModel):
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
            temp_model = AbstractEcommerceVideoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AbstractEcommerceVideoResponseData(TeaModel):
    def __init__(self, video_url=None, video_cover_url=None):
        self.video_url = video_url
        self.video_cover_url = video_cover_url

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.video_cover_url, 'video_cover_url')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['VideoCoverUrl'] = self.video_cover_url
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.video_cover_url = map.get('VideoCoverUrl')
        return self


class AbstractEcommerceVideoAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, duration=None, width=None, height=None):
        self.video_url_object = video_url_object
        self.duration = duration
        self.width = width
        self.height = height

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')
        self.validate_required(self.duration, 'duration')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['Duration'] = self.duration
        result['Width'] = self.width
        result['Height'] = self.height
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.duration = map.get('Duration')
        self.width = map.get('Width')
        self.height = map.get('Height')
        return self


class AbstractFilmVideoRequest(TeaModel):
    def __init__(self, video_url=None, length=None):
        self.video_url = video_url
        self.length = length

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.length, 'length')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['Length'] = self.length
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.length = map.get('Length')
        return self


class AbstractFilmVideoResponse(TeaModel):
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
            temp_model = AbstractFilmVideoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AbstractFilmVideoResponseData(TeaModel):
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


class AbstractFilmVideoAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, length=None):
        self.video_url_object = video_url_object
        self.length = length

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')
        self.validate_required(self.length, 'length')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['Length'] = self.length
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.length = map.get('Length')
        return self


class AdjustVideoColorRequest(TeaModel):
    def __init__(self, video_url=None, video_bitrate=None, video_codec=None, video_format=None, mode=None):
        self.video_url = video_url
        self.video_bitrate = video_bitrate
        self.video_codec = video_codec
        self.video_format = video_format
        self.mode = mode

    def validate(self):
        self.validate_required(self.video_url, 'video_url')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['VideoUrl'] = self.video_url
        result['VideoBitrate'] = self.video_bitrate
        result['VideoCodec'] = self.video_codec
        result['VideoFormat'] = self.video_format
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.video_url = map.get('VideoUrl')
        self.video_bitrate = map.get('VideoBitrate')
        self.video_codec = map.get('VideoCodec')
        self.video_format = map.get('VideoFormat')
        self.mode = map.get('Mode')
        return self


class AdjustVideoColorResponse(TeaModel):
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
            temp_model = AdjustVideoColorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AdjustVideoColorResponseData(TeaModel):
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


class AdjustVideoColorAdvanceRequest(TeaModel):
    def __init__(self, video_url_object=None, video_bitrate=None, video_codec=None, video_format=None, mode=None):
        self.video_url_object = video_url_object
        self.video_bitrate = video_bitrate
        self.video_codec = video_codec
        self.video_format = video_format
        self.mode = mode

    def validate(self):
        self.validate_required(self.video_url_object, 'video_url_object')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['VideoUrlObject'] = self.video_url_object
        result['VideoBitrate'] = self.video_bitrate
        result['VideoCodec'] = self.video_codec
        result['VideoFormat'] = self.video_format
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.video_url_object = map.get('VideoUrlObject')
        self.video_bitrate = map.get('VideoBitrate')
        self.video_codec = map.get('VideoCodec')
        self.video_format = map.get('VideoFormat')
        self.mode = map.get('Mode')
        return self

# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


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


class ImitatePhotoStyleRequest(TeaModel):
    def __init__(self, style_url=None, image_url=None):
        self.style_url = style_url
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.style_url, 'style_url')
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['StyleUrl'] = self.style_url
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.style_url = map.get('StyleUrl')
        self.image_url = map.get('ImageURL')
        return self


class ImitatePhotoStyleResponse(TeaModel):
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
            temp_model = ImitatePhotoStyleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ImitatePhotoStyleResponseData(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class ImitatePhotoStyleAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, style_url=None):
        self.image_urlobject = image_urlobject
        self.style_url = style_url

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.style_url, 'style_url')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['StyleUrl'] = self.style_url
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.style_url = map.get('StyleUrl')
        return self


class EnhanceImageColorRequest(TeaModel):
    def __init__(self, image_url=None, output_format=None, mode=None):
        self.image_url = image_url
        self.output_format = output_format
        self.mode = mode

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.output_format, 'output_format')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['OutputFormat'] = self.output_format
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.output_format = map.get('OutputFormat')
        self.mode = map.get('Mode')
        return self


class EnhanceImageColorResponse(TeaModel):
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
            temp_model = EnhanceImageColorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class EnhanceImageColorResponseData(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class EnhanceImageColorAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, output_format=None, mode=None):
        self.image_urlobject = image_urlobject
        self.output_format = output_format
        self.mode = mode

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.output_format, 'output_format')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['OutputFormat'] = self.output_format
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.output_format = map.get('OutputFormat')
        self.mode = map.get('Mode')
        return self


class RecolorHDImageRequest(TeaModel):
    def __init__(self, url=None, mode=None, ref_url=None, color_count=None, color_template=None, degree=None):
        self.url = url
        self.mode = mode
        self.ref_url = ref_url
        self.color_count = color_count
        self.color_template = []
        self.degree = degree

    def validate(self):
        self.validate_required(self.url, 'url')
        if self.color_template:
            for k in self.color_template:
                if k :
                    k.validate()
        self.validate_required(self.degree, 'degree')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        result['Mode'] = self.mode
        result['RefUrl'] = self.ref_url
        result['ColorCount'] = self.color_count
        result['ColorTemplate'] = []
        if self.color_template is not None:
            for k in self.color_template:
                result['ColorTemplate'].append(k.to_map() if k else None)
        else:
            result['ColorTemplate'] = None
        result['Degree'] = self.degree
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        self.mode = map.get('Mode')
        self.ref_url = map.get('RefUrl')
        self.color_count = map.get('ColorCount')
        self.color_template = []
        if map.get('ColorTemplate') is not None:
            for k in map.get('ColorTemplate'):
                temp_model = RecolorHDImageRequestColorTemplate()
                temp_model = temp_model.from_map(k)
                self.color_template.append(temp_model)
        else:
            self.color_template = None
        self.degree = map.get('Degree')
        return self


class RecolorHDImageRequestColorTemplate(TeaModel):
    def __init__(self, color=None):
        self.color = color

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Color'] = self.color
        return result

    def from_map(self, map={}):
        self.color = map.get('Color')
        return self


class RecolorHDImageResponse(TeaModel):
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
            temp_model = RecolorHDImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecolorHDImageResponseData(TeaModel):
    def __init__(self, image_list=None):
        self.image_list = []

    def validate(self):
        self.validate_required(self.image_list, 'image_list')

    def to_map(self):
        result = {}
        result['ImageList'] = []
        if self.image_list is not None:
            for k in self.image_list:
                result['ImageList'].append(k)
        else:
            result['ImageList'] = None
        return result

    def from_map(self, map={}):
        self.image_list = []
        if map.get('ImageList') is not None:
            for k in map.get('ImageList'):
                self.image_list.append(k)
        else:
            self.image_list = None
        return self


class RecolorHDImageAdvanceRequest(TeaModel):
    def __init__(self, url_object=None, mode=None, ref_url=None, color_count=None, color_template=None, degree=None):
        self.url_object = url_object
        self.mode = mode
        self.ref_url = ref_url
        self.color_count = color_count
        self.color_template = []
        self.degree = degree

    def validate(self):
        self.validate_required(self.url_object, 'url_object')
        if self.color_template:
            for k in self.color_template:
                if k :
                    k.validate()
        self.validate_required(self.degree, 'degree')

    def to_map(self):
        result = {}
        result['UrlObject'] = self.url_object
        result['Mode'] = self.mode
        result['RefUrl'] = self.ref_url
        result['ColorCount'] = self.color_count
        result['ColorTemplate'] = []
        if self.color_template is not None:
            for k in self.color_template:
                result['ColorTemplate'].append(k.to_map() if k else None)
        else:
            result['ColorTemplate'] = None
        result['Degree'] = self.degree
        return result

    def from_map(self, map={}):
        self.url_object = map.get('UrlObject')
        self.mode = map.get('Mode')
        self.ref_url = map.get('RefUrl')
        self.color_count = map.get('ColorCount')
        self.color_template = []
        if map.get('ColorTemplate') is not None:
            for k in map.get('ColorTemplate'):
                temp_model = RecolorHDImageAdvanceRequestColorTemplate()
                temp_model = temp_model.from_map(k)
                self.color_template.append(temp_model)
        else:
            self.color_template = None
        self.degree = map.get('Degree')
        return self


class RecolorHDImageAdvanceRequestColorTemplate(TeaModel):
    def __init__(self, color=None):
        self.color = color

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Color'] = self.color
        return result

    def from_map(self, map={}):
        self.color = map.get('Color')
        return self


class AssessCompositionRequest(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class AssessCompositionResponse(TeaModel):
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
            temp_model = AssessCompositionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AssessCompositionResponseData(TeaModel):
    def __init__(self, score=None):
        self.score = score

    def validate(self):
        self.validate_required(self.score, 'score')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        return result

    def from_map(self, map={}):
        self.score = map.get('Score')
        return self


class AssessCompositionAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None):
        self.image_urlobject = image_urlobject

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        return self


class AssessSharpnessRequest(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class AssessSharpnessResponse(TeaModel):
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
            temp_model = AssessSharpnessResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AssessSharpnessResponseData(TeaModel):
    def __init__(self, sharpness=None):
        self.sharpness = sharpness

    def validate(self):
        self.validate_required(self.sharpness, 'sharpness')

    def to_map(self):
        result = {}
        result['Sharpness'] = self.sharpness
        return result

    def from_map(self, map={}):
        self.sharpness = map.get('Sharpness')
        return self


class AssessSharpnessAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None):
        self.image_urlobject = image_urlobject

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        return self


class AssessExposureRequest(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class AssessExposureResponse(TeaModel):
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
            temp_model = AssessExposureResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AssessExposureResponseData(TeaModel):
    def __init__(self, exposure=None):
        self.exposure = exposure

    def validate(self):
        self.validate_required(self.exposure, 'exposure')

    def to_map(self):
        result = {}
        result['Exposure'] = self.exposure
        return result

    def from_map(self, map={}):
        self.exposure = map.get('Exposure')
        return self


class AssessExposureAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None):
        self.image_urlobject = image_urlobject

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        return self


class ImageBlindCharacterWatermarkRequest(TeaModel):
    def __init__(self, function_type=None, text=None, watermark_image_url=None, output_file_type=None, quality_factor=None, origin_image_url=None):
        self.function_type = function_type
        self.text = text
        self.watermark_image_url = watermark_image_url
        self.output_file_type = output_file_type
        self.quality_factor = quality_factor
        self.origin_image_url = origin_image_url

    def validate(self):
        self.validate_required(self.function_type, 'function_type')
        self.validate_required(self.quality_factor, 'quality_factor')
        self.validate_required(self.origin_image_url, 'origin_image_url')

    def to_map(self):
        result = {}
        result['FunctionType'] = self.function_type
        result['Text'] = self.text
        result['WatermarkImageURL'] = self.watermark_image_url
        result['OutputFileType'] = self.output_file_type
        result['QualityFactor'] = self.quality_factor
        result['OriginImageURL'] = self.origin_image_url
        return result

    def from_map(self, map={}):
        self.function_type = map.get('FunctionType')
        self.text = map.get('Text')
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.output_file_type = map.get('OutputFileType')
        self.quality_factor = map.get('QualityFactor')
        self.origin_image_url = map.get('OriginImageURL')
        return self


class ImageBlindCharacterWatermarkResponse(TeaModel):
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
            temp_model = ImageBlindCharacterWatermarkResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ImageBlindCharacterWatermarkResponseData(TeaModel):
    def __init__(self, watermark_image_url=None, text_image_url=None):
        self.watermark_image_url = watermark_image_url
        self.text_image_url = text_image_url

    def validate(self):
        self.validate_required(self.watermark_image_url, 'watermark_image_url')
        self.validate_required(self.text_image_url, 'text_image_url')

    def to_map(self):
        result = {}
        result['WatermarkImageURL'] = self.watermark_image_url
        result['TextImageURL'] = self.text_image_url
        return result

    def from_map(self, map={}):
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.text_image_url = map.get('TextImageURL')
        return self


class ImageBlindCharacterWatermarkAdvanceRequest(TeaModel):
    def __init__(self, origin_image_urlobject=None, function_type=None, text=None, watermark_image_url=None, output_file_type=None, quality_factor=None):
        self.origin_image_urlobject = origin_image_urlobject
        self.function_type = function_type
        self.text = text
        self.watermark_image_url = watermark_image_url
        self.output_file_type = output_file_type
        self.quality_factor = quality_factor

    def validate(self):
        self.validate_required(self.origin_image_urlobject, 'origin_image_urlobject')
        self.validate_required(self.function_type, 'function_type')
        self.validate_required(self.quality_factor, 'quality_factor')

    def to_map(self):
        result = {}
        result['OriginImageURLObject'] = self.origin_image_urlobject
        result['FunctionType'] = self.function_type
        result['Text'] = self.text
        result['WatermarkImageURL'] = self.watermark_image_url
        result['OutputFileType'] = self.output_file_type
        result['QualityFactor'] = self.quality_factor
        return result

    def from_map(self, map={}):
        self.origin_image_urlobject = map.get('OriginImageURLObject')
        self.function_type = map.get('FunctionType')
        self.text = map.get('Text')
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.output_file_type = map.get('OutputFileType')
        self.quality_factor = map.get('QualityFactor')
        return self


class RemoveImageSubtitlesRequest(TeaModel):
    def __init__(self, image_url=None, _bx=None, _by=None, _bw=None, _bh=None):
        self.image_url = image_url
        self._bx = _bx
        self._by = _by
        self._bw = _bw
        self._bh = _bh

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['BX'] = self._bx
        result['BY'] = self._by
        result['BW'] = self._bw
        result['BH'] = self._bh
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self._bx = map.get('BX')
        self._by = map.get('BY')
        self._bw = map.get('BW')
        self._bh = map.get('BH')
        return self


class RemoveImageSubtitlesResponse(TeaModel):
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
            temp_model = RemoveImageSubtitlesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RemoveImageSubtitlesResponseData(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class RemoveImageSubtitlesAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, _bx=None, _by=None, _bw=None, _bh=None):
        self.image_urlobject = image_urlobject
        self._bx = _bx
        self._by = _by
        self._bw = _bw
        self._bh = _bh

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['BX'] = self._bx
        result['BY'] = self._by
        result['BW'] = self._bw
        result['BH'] = self._bh
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self._bx = map.get('BX')
        self._by = map.get('BY')
        self._bw = map.get('BW')
        self._bh = map.get('BH')
        return self


class RemoveImageWatermarkRequest(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class RemoveImageWatermarkResponse(TeaModel):
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
            temp_model = RemoveImageWatermarkResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RemoveImageWatermarkResponseData(TeaModel):
    def __init__(self, image_url=None):
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        return self


class RemoveImageWatermarkAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None):
        self.image_urlobject = image_urlobject

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        return self


class ImageBlindPicWatermarkRequest(TeaModel):
    def __init__(self, function_type=None, logo_url=None, watermark_image_url=None, output_file_type=None, quality_factor=None, origin_image_url=None):
        self.function_type = function_type
        self.logo_url = logo_url
        self.watermark_image_url = watermark_image_url
        self.output_file_type = output_file_type
        self.quality_factor = quality_factor
        self.origin_image_url = origin_image_url

    def validate(self):
        self.validate_required(self.function_type, 'function_type')
        self.validate_required(self.quality_factor, 'quality_factor')
        self.validate_required(self.origin_image_url, 'origin_image_url')

    def to_map(self):
        result = {}
        result['FunctionType'] = self.function_type
        result['LogoURL'] = self.logo_url
        result['WatermarkImageURL'] = self.watermark_image_url
        result['OutputFileType'] = self.output_file_type
        result['QualityFactor'] = self.quality_factor
        result['OriginImageURL'] = self.origin_image_url
        return result

    def from_map(self, map={}):
        self.function_type = map.get('FunctionType')
        self.logo_url = map.get('LogoURL')
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.output_file_type = map.get('OutputFileType')
        self.quality_factor = map.get('QualityFactor')
        self.origin_image_url = map.get('OriginImageURL')
        return self


class ImageBlindPicWatermarkResponse(TeaModel):
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
            temp_model = ImageBlindPicWatermarkResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ImageBlindPicWatermarkResponseData(TeaModel):
    def __init__(self, watermark_image_url=None, logo_url=None):
        self.watermark_image_url = watermark_image_url
        self.logo_url = logo_url

    def validate(self):
        self.validate_required(self.watermark_image_url, 'watermark_image_url')
        self.validate_required(self.logo_url, 'logo_url')

    def to_map(self):
        result = {}
        result['WatermarkImageURL'] = self.watermark_image_url
        result['LogoURL'] = self.logo_url
        return result

    def from_map(self, map={}):
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.logo_url = map.get('LogoURL')
        return self


class ImageBlindPicWatermarkAdvanceRequest(TeaModel):
    def __init__(self, origin_image_urlobject=None, function_type=None, logo_url=None, watermark_image_url=None, output_file_type=None, quality_factor=None):
        self.origin_image_urlobject = origin_image_urlobject
        self.function_type = function_type
        self.logo_url = logo_url
        self.watermark_image_url = watermark_image_url
        self.output_file_type = output_file_type
        self.quality_factor = quality_factor

    def validate(self):
        self.validate_required(self.origin_image_urlobject, 'origin_image_urlobject')
        self.validate_required(self.function_type, 'function_type')
        self.validate_required(self.quality_factor, 'quality_factor')

    def to_map(self):
        result = {}
        result['OriginImageURLObject'] = self.origin_image_urlobject
        result['FunctionType'] = self.function_type
        result['LogoURL'] = self.logo_url
        result['WatermarkImageURL'] = self.watermark_image_url
        result['OutputFileType'] = self.output_file_type
        result['QualityFactor'] = self.quality_factor
        return result

    def from_map(self, map={}):
        self.origin_image_urlobject = map.get('OriginImageURLObject')
        self.function_type = map.get('FunctionType')
        self.logo_url = map.get('LogoURL')
        self.watermark_image_url = map.get('WatermarkImageURL')
        self.output_file_type = map.get('OutputFileType')
        self.quality_factor = map.get('QualityFactor')
        return self


class IntelligentCompositionRequest(TeaModel):
    def __init__(self, num_boxes=None, image_url=None):
        self.num_boxes = num_boxes
        self.image_url = image_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['NumBoxes'] = self.num_boxes
        result['ImageURL'] = self.image_url
        return result

    def from_map(self, map={}):
        self.num_boxes = map.get('NumBoxes')
        self.image_url = map.get('ImageURL')
        return self


class IntelligentCompositionResponse(TeaModel):
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
            temp_model = IntelligentCompositionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class IntelligentCompositionResponseDataElements(TeaModel):
    def __init__(self, min_x=None, min_y=None, max_x=None, max_y=None, score=None):
        self.min_x = min_x
        self.min_y = min_y
        self.max_x = max_x
        self.max_y = max_y
        self.score = score

    def validate(self):
        self.validate_required(self.min_x, 'min_x')
        self.validate_required(self.min_y, 'min_y')
        self.validate_required(self.max_x, 'max_x')
        self.validate_required(self.max_y, 'max_y')
        self.validate_required(self.score, 'score')

    def to_map(self):
        result = {}
        result['MinX'] = self.min_x
        result['MinY'] = self.min_y
        result['MaxX'] = self.max_x
        result['MaxY'] = self.max_y
        result['Score'] = self.score
        return result

    def from_map(self, map={}):
        self.min_x = map.get('MinX')
        self.min_y = map.get('MinY')
        self.max_x = map.get('MaxX')
        self.max_y = map.get('MaxY')
        self.score = map.get('Score')
        return self


class IntelligentCompositionResponseData(TeaModel):
    def __init__(self, elements=None):
        self.elements = []

    def validate(self):
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        return result

    def from_map(self, map={}):
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = IntelligentCompositionResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class IntelligentCompositionAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, num_boxes=None):
        self.image_urlobject = image_urlobject
        self.num_boxes = num_boxes

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['NumBoxes'] = self.num_boxes
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.num_boxes = map.get('NumBoxes')
        return self


class ChangeImageSizeRequest(TeaModel):
    def __init__(self, width=None, height=None, url=None):
        self.width = width
        self.height = height
        self.url = url

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.url = map.get('Url')
        return self


class ChangeImageSizeResponse(TeaModel):
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
            temp_model = ChangeImageSizeResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ChangeImageSizeResponseDataRetainLocation(TeaModel):
    def __init__(self, x=None, y=None, width=None, height=None):
        self.x = x
        self.y = y
        self.width = width
        self.height = height

    def validate(self):
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')

    def to_map(self):
        result = {}
        result['X'] = self.x
        result['Y'] = self.y
        result['Width'] = self.width
        result['Height'] = self.height
        return result

    def from_map(self, map={}):
        self.x = map.get('X')
        self.y = map.get('Y')
        self.width = map.get('Width')
        self.height = map.get('Height')
        return self


class ChangeImageSizeResponseData(TeaModel):
    def __init__(self, url=None, retain_location=None):
        self.url = url
        self.retain_location = retain_location

    def validate(self):
        self.validate_required(self.url, 'url')
        self.validate_required(self.retain_location, 'retain_location')
        if self.retain_location:
            self.retain_location.validate()

    def to_map(self):
        result = {}
        result['Url'] = self.url
        if self.retain_location is not None:
            result['RetainLocation'] = self.retain_location.to_map()
        else:
            result['RetainLocation'] = None
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        if map.get('RetainLocation') is not None:
            temp_model = ChangeImageSizeResponseDataRetainLocation()
            self.retain_location = temp_model.from_map(map['RetainLocation'])
        else:
            self.retain_location = None
        return self


class ChangeImageSizeAdvanceRequest(TeaModel):
    def __init__(self, url_object=None, width=None, height=None):
        self.url_object = url_object
        self.width = width
        self.height = height

    def validate(self):
        self.validate_required(self.url_object, 'url_object')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')

    def to_map(self):
        result = {}
        result['UrlObject'] = self.url_object
        result['Width'] = self.width
        result['Height'] = self.height
        return result

    def from_map(self, map={}):
        self.url_object = map.get('UrlObject')
        self.width = map.get('Width')
        self.height = map.get('Height')
        return self


class ExtendImageStyleRequest(TeaModel):
    def __init__(self, style_url=None, major_url=None):
        self.style_url = style_url
        self.major_url = major_url

    def validate(self):
        self.validate_required(self.style_url, 'style_url')
        self.validate_required(self.major_url, 'major_url')

    def to_map(self):
        result = {}
        result['StyleUrl'] = self.style_url
        result['MajorUrl'] = self.major_url
        return result

    def from_map(self, map={}):
        self.style_url = map.get('StyleUrl')
        self.major_url = map.get('MajorUrl')
        return self


class ExtendImageStyleResponse(TeaModel):
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
            temp_model = ExtendImageStyleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ExtendImageStyleResponseData(TeaModel):
    def __init__(self, url=None, major_url=None):
        self.url = url
        self.major_url = major_url

    def validate(self):
        self.validate_required(self.url, 'url')
        self.validate_required(self.major_url, 'major_url')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        result['MajorUrl'] = self.major_url
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        self.major_url = map.get('MajorUrl')
        return self


class MakeSuperResolutionImageRequest(TeaModel):
    def __init__(self, url=None):
        self.url = url

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        return self


class MakeSuperResolutionImageResponse(TeaModel):
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
            temp_model = MakeSuperResolutionImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class MakeSuperResolutionImageResponseData(TeaModel):
    def __init__(self, url=None):
        self.url = url

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        return self


class MakeSuperResolutionImageAdvanceRequest(TeaModel):
    def __init__(self, url_object=None):
        self.url_object = url_object

    def validate(self):
        self.validate_required(self.url_object, 'url_object')

    def to_map(self):
        result = {}
        result['UrlObject'] = self.url_object
        return result

    def from_map(self, map={}):
        self.url_object = map.get('UrlObject')
        return self


class RecolorImageRequest(TeaModel):
    def __init__(self, url=None, mode=None, ref_url=None, color_count=None, color_template=None):
        self.url = url
        self.mode = mode
        self.ref_url = ref_url
        self.color_count = color_count
        self.color_template = []

    def validate(self):
        self.validate_required(self.url, 'url')
        if self.color_template:
            for k in self.color_template:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Url'] = self.url
        result['Mode'] = self.mode
        result['RefUrl'] = self.ref_url
        result['ColorCount'] = self.color_count
        result['ColorTemplate'] = []
        if self.color_template is not None:
            for k in self.color_template:
                result['ColorTemplate'].append(k.to_map() if k else None)
        else:
            result['ColorTemplate'] = None
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        self.mode = map.get('Mode')
        self.ref_url = map.get('RefUrl')
        self.color_count = map.get('ColorCount')
        self.color_template = []
        if map.get('ColorTemplate') is not None:
            for k in map.get('ColorTemplate'):
                temp_model = RecolorImageRequestColorTemplate()
                temp_model = temp_model.from_map(k)
                self.color_template.append(temp_model)
        else:
            self.color_template = None
        return self


class RecolorImageRequestColorTemplate(TeaModel):
    def __init__(self, color=None):
        self.color = color

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Color'] = self.color
        return result

    def from_map(self, map={}):
        self.color = map.get('Color')
        return self


class RecolorImageResponse(TeaModel):
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
            temp_model = RecolorImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecolorImageResponseData(TeaModel):
    def __init__(self, image_list=None):
        self.image_list = []

    def validate(self):
        self.validate_required(self.image_list, 'image_list')

    def to_map(self):
        result = {}
        result['ImageList'] = []
        if self.image_list is not None:
            for k in self.image_list:
                result['ImageList'].append(k)
        else:
            result['ImageList'] = None
        return result

    def from_map(self, map={}):
        self.image_list = []
        if map.get('ImageList') is not None:
            for k in map.get('ImageList'):
                self.image_list.append(k)
        else:
            self.image_list = None
        return self

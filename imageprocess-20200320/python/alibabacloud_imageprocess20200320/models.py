# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DetectLungNoduleRequest(TeaModel):
    def __init__(self, urllist=None):
        self.urllist = []

    def validate(self):
        self.validate_required(self.urllist, 'urllist')
        if self.urllist:
            for k in self.urllist:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['URLList'] = []
        if self.urllist is not None:
            for k in self.urllist:
                result['URLList'].append(k.to_map() if k else None)
        else:
            result['URLList'] = None
        return result

    def from_map(self, map={}):
        self.urllist = []
        if map.get('URLList') is not None:
            for k in map.get('URLList'):
                temp_model = DetectLungNoduleRequestURLList()
                temp_model = temp_model.from_map(k)
                self.urllist.append(temp_model)
        else:
            self.urllist = None
        return self


class DetectLungNoduleRequestURLList(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class DetectLungNoduleResponse(TeaModel):
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
            temp_model = DetectLungNoduleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectLungNoduleResponseDataSeriesElements(TeaModel):
    def __init__(self, category=None, confidence=None, diameter=None, lobe=None, lung=None, x=None, z=None, y=None):
        self.category = category
        self.confidence = confidence
        self.diameter = diameter
        self.lobe = lobe
        self.lung = lung
        self.x = x
        self.z = z
        self.y = y

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.confidence, 'confidence')
        self.validate_required(self.diameter, 'diameter')
        self.validate_required(self.lobe, 'lobe')
        self.validate_required(self.lung, 'lung')
        self.validate_required(self.x, 'x')
        self.validate_required(self.z, 'z')
        self.validate_required(self.y, 'y')

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['Confidence'] = self.confidence
        result['Diameter'] = self.diameter
        result['Lobe'] = self.lobe
        result['Lung'] = self.lung
        result['X'] = self.x
        result['Z'] = self.z
        result['Y'] = self.y
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.confidence = map.get('Confidence')
        self.diameter = map.get('Diameter')
        self.lobe = map.get('Lobe')
        self.lung = map.get('Lung')
        self.x = map.get('X')
        self.z = map.get('Z')
        self.y = map.get('Y')
        return self


class DetectLungNoduleResponseDataSeries(TeaModel):
    def __init__(self, series_instance_uid=None, elements=None):
        self.series_instance_uid = series_instance_uid
        self.elements = []

    def validate(self):
        self.validate_required(self.series_instance_uid, 'series_instance_uid')
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SeriesInstanceUid'] = self.series_instance_uid
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        return result

    def from_map(self, map={}):
        self.series_instance_uid = map.get('SeriesInstanceUid')
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = DetectLungNoduleResponseDataSeriesElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectLungNoduleResponseData(TeaModel):
    def __init__(self, series=None):
        self.series = []

    def validate(self):
        self.validate_required(self.series, 'series')
        if self.series:
            for k in self.series:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Series'] = []
        if self.series is not None:
            for k in self.series:
                result['Series'].append(k.to_map() if k else None)
        else:
            result['Series'] = None
        return result

    def from_map(self, map={}):
        self.series = []
        if map.get('Series') is not None:
            for k in map.get('Series'):
                temp_model = DetectLungNoduleResponseDataSeries()
                temp_model = temp_model.from_map(k)
                self.series.append(temp_model)
        else:
            self.series = None
        return self


class DetectCovid19CadRequest(TeaModel):
    def __init__(self, urllist=None):
        self.urllist = []

    def validate(self):
        self.validate_required(self.urllist, 'urllist')
        if self.urllist:
            for k in self.urllist:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['URLList'] = []
        if self.urllist is not None:
            for k in self.urllist:
                result['URLList'].append(k.to_map() if k else None)
        else:
            result['URLList'] = None
        return result

    def from_map(self, map={}):
        self.urllist = []
        if map.get('URLList') is not None:
            for k in map.get('URLList'):
                temp_model = DetectCovid19CadRequestURLList()
                temp_model = temp_model.from_map(k)
                self.urllist.append(temp_model)
        else:
            self.urllist = None
        return self


class DetectCovid19CadRequestURLList(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class DetectCovid19CadResponse(TeaModel):
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
            temp_model = DetectCovid19CadResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectCovid19CadResponseData(TeaModel):
    def __init__(self, new_probability=None, normal_probability=None, other_probability=None, lesion_ratio=None, mask=None):
        self.new_probability = new_probability
        self.normal_probability = normal_probability
        self.other_probability = other_probability
        self.lesion_ratio = lesion_ratio
        self.mask = mask

    def validate(self):
        self.validate_required(self.new_probability, 'new_probability')
        self.validate_required(self.normal_probability, 'normal_probability')
        self.validate_required(self.other_probability, 'other_probability')
        self.validate_required(self.lesion_ratio, 'lesion_ratio')
        self.validate_required(self.mask, 'mask')

    def to_map(self):
        result = {}
        result['NewProbability'] = self.new_probability
        result['NormalProbability'] = self.normal_probability
        result['OtherProbability'] = self.other_probability
        result['LesionRatio'] = self.lesion_ratio
        result['Mask'] = self.mask
        return result

    def from_map(self, map={}):
        self.new_probability = map.get('NewProbability')
        self.normal_probability = map.get('NormalProbability')
        self.other_probability = map.get('OtherProbability')
        self.lesion_ratio = map.get('LesionRatio')
        self.mask = map.get('Mask')
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

# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DetectKneeXRayRequest(TeaModel):
    def __init__(self, url=None, data_format=None):
        self.url = url
        self.data_format = data_format

    def validate(self):
        self.validate_required(self.url, 'url')
        self.validate_required(self.data_format, 'data_format')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        result['DataFormat'] = self.data_format
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        self.data_format = map.get('DataFormat')
        return self


class DetectKneeXRayResponse(TeaModel):
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
            temp_model = DetectKneeXRayResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectKneeXRayResponseDataKLDetections(TeaModel):
    def __init__(self, detections=None):
        self.detections = detections

    def validate(self):
        self.validate_required(self.detections, 'detections')

    def to_map(self):
        result = {}
        result['Detections'] = []
        if self.detections is not None:
            for k in self.detections:
                result['Detections'].append(k)
        else:
            result['Detections'] = None
        return result

    def from_map(self, map={}):
        self.detections = []
        if map.get('Detections') is not None:
            for k in map.get('Detections'):
                self.detections.append(k)
        else:
            self.detections = None
        return self


class DetectKneeXRayResponseData(TeaModel):
    def __init__(self, kldetections=None):
        self.kldetections = kldetections

    def validate(self):
        self.validate_required(self.kldetections, 'kldetections')
        if self.kldetections:
            for k in self.kldetections:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['KLDetections'] = []
        if self.kldetections is not None:
            for k in self.kldetections:
                result['KLDetections'].append(k.to_map() if k else None)
        else:
            result['KLDetections'] = None
        return result

    def from_map(self, map={}):
        self.kldetections = []
        if map.get('KLDetections') is not None:
            for k in map.get('KLDetections'):
                temp_model = DetectKneeXRayResponseDataKLDetections()
                temp_model = temp_model.from_map(k)
                self.kldetections.append(temp_model)
        else:
            self.kldetections = None
        return self
class DetectKneeXRayAdvanceRequest(TeaModel):
    def __init__(self, url_object=None, data_format=None):
        self.url_object = url_object
        self.data_format = data_format

    def validate(self):
        self.validate_required(self.url_object, 'url_object')
        self.validate_required(self.data_format, 'data_format')

    def to_map(self):
        result = {}
        result['UrlObject'] = self.url_object
        result['DataFormat'] = self.data_format
        return result

    def from_map(self, map={}):
        self.url_object = map.get('UrlObject')
        self.data_format = map.get('DataFormat')
        return self


class DetectSpineMRIRequest(TeaModel):
    def __init__(self, urllist=None):
        self.urllist = urllist

    def validate(self):
        self.validate_required(self.urllist, 'urllist')
        if self.urllist:
            for k in self.urllist:
                if k:
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
                temp_model = DetectSpineMRIRequestURLList()
                temp_model = temp_model.from_map(k)
                self.urllist.append(temp_model)
        else:
            self.urllist = None
        return self


class DetectSpineMRIRequestURLList(TeaModel):
    def __init__(self, url=None):
        self.url = url

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['URL'] = self.url
        return result

    def from_map(self, map={}):
        self.url = map.get('URL')
        return self
class DetectSpineMRIResponse(TeaModel):
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
            temp_model = DetectSpineMRIResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectSpineMRIResponseDataDiscs(TeaModel):
    def __init__(self, disease=None, identification=None, location=None):
        self.disease = disease
        self.identification = identification
        self.location = location

    def validate(self):
        self.validate_required(self.disease, 'disease')
        self.validate_required(self.identification, 'identification')
        self.validate_required(self.location, 'location')

    def to_map(self):
        result = {}
        result['Disease'] = self.disease
        result['Identification'] = self.identification
        result['Location'] = []
        if self.location is not None:
            for k in self.location:
                result['Location'].append(k)
        else:
            result['Location'] = None
        return result

    def from_map(self, map={}):
        self.disease = map.get('Disease')
        self.identification = map.get('Identification')
        self.location = []
        if map.get('Location') is not None:
            for k in map.get('Location'):
                self.location.append(k)
        else:
            self.location = None
        return self


class DetectSpineMRIResponseDataVertebras(TeaModel):
    def __init__(self, disease=None, identification=None, location=None):
        self.disease = disease
        self.identification = identification
        self.location = location

    def validate(self):
        self.validate_required(self.disease, 'disease')
        self.validate_required(self.identification, 'identification')
        self.validate_required(self.location, 'location')

    def to_map(self):
        result = {}
        result['Disease'] = self.disease
        result['Identification'] = self.identification
        result['Location'] = []
        if self.location is not None:
            for k in self.location:
                result['Location'].append(k)
        else:
            result['Location'] = None
        return result

    def from_map(self, map={}):
        self.disease = map.get('Disease')
        self.identification = map.get('Identification')
        self.location = []
        if map.get('Location') is not None:
            for k in map.get('Location'):
                self.location.append(k)
        else:
            self.location = None
        return self


class DetectSpineMRIResponseData(TeaModel):
    def __init__(self, discs=None, vertebras=None):
        self.discs = discs
        self.vertebras = vertebras

    def validate(self):
        self.validate_required(self.discs, 'discs')
        if self.discs:
            for k in self.discs:
                if k:
                    k.validate()
        self.validate_required(self.vertebras, 'vertebras')
        if self.vertebras:
            for k in self.vertebras:
                if k:
                    k.validate()

    def to_map(self):
        result = {}
        result['Discs'] = []
        if self.discs is not None:
            for k in self.discs:
                result['Discs'].append(k.to_map() if k else None)
        else:
            result['Discs'] = None
        result['Vertebras'] = []
        if self.vertebras is not None:
            for k in self.vertebras:
                result['Vertebras'].append(k.to_map() if k else None)
        else:
            result['Vertebras'] = None
        return result

    def from_map(self, map={}):
        self.discs = []
        if map.get('Discs') is not None:
            for k in map.get('Discs'):
                temp_model = DetectSpineMRIResponseDataDiscs()
                temp_model = temp_model.from_map(k)
                self.discs.append(temp_model)
        else:
            self.discs = None
        self.vertebras = []
        if map.get('Vertebras') is not None:
            for k in map.get('Vertebras'):
                temp_model = DetectSpineMRIResponseDataVertebras()
                temp_model = temp_model.from_map(k)
                self.vertebras.append(temp_model)
        else:
            self.vertebras = None
        return self
class TranslateMedRequest(TeaModel):
    def __init__(self, from_language=None, to_language=None, text=None):
        self.from_language = from_language
        self.to_language = to_language
        self.text = text

    def validate(self):
        self.validate_required(self.from_language, 'from_language')
        self.validate_required(self.to_language, 'to_language')
        self.validate_required(self.text, 'text')

    def to_map(self):
        result = {}
        result['FromLanguage'] = self.from_language
        result['ToLanguage'] = self.to_language
        result['Text'] = self.text
        return result

    def from_map(self, map={}):
        self.from_language = map.get('FromLanguage')
        self.to_language = map.get('ToLanguage')
        self.text = map.get('Text')
        return self


class TranslateMedResponse(TeaModel):
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
            temp_model = TranslateMedResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class TranslateMedResponseData(TeaModel):
    def __init__(self, text=None, words=None):
        self.text = text
        self.words = words

    def validate(self):
        self.validate_required(self.text, 'text')
        self.validate_required(self.words, 'words')

    def to_map(self):
        result = {}
        result['Text'] = self.text
        result['Words'] = self.words
        return result

    def from_map(self, map={}):
        self.text = map.get('Text')
        self.words = map.get('Words')
        return self
class DetectLungNoduleRequest(TeaModel):
    def __init__(self, urllist=None):
        self.urllist = urllist

    def validate(self):
        self.validate_required(self.urllist, 'urllist')
        if self.urllist:
            for k in self.urllist:
                if k:
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
    def __init__(self, url=None):
        self.url = url

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['URL'] = self.url
        return result

    def from_map(self, map={}):
        self.url = map.get('URL')
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
        self.elements = elements

    def validate(self):
        self.validate_required(self.series_instance_uid, 'series_instance_uid')
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k:
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
        self.series = series

    def validate(self):
        self.validate_required(self.series, 'series')
        if self.series:
            for k in self.series:
                if k:
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
        self.urllist = urllist

    def validate(self):
        self.validate_required(self.urllist, 'urllist')
        if self.urllist:
            for k in self.urllist:
                if k:
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
    def __init__(self, url=None):
        self.url = url

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['URL'] = self.url
        return result

    def from_map(self, map={}):
        self.url = map.get('URL')
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
    def __init__(self, new_probability=None, normal_probability=None, other_probability=None, lesion_ratio=None,
                 mask=None):
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

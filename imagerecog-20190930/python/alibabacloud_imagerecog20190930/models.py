# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DetectFruitsRequest(TeaModel):
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


class DetectFruitsResponse(TeaModel):
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
            temp_model = DetectFruitsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectFruitsResponseDataElements(TeaModel):
    def __init__(self, name=None, score=None, box=None):
        self.name = name
        self.score = score
        self.box = []

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.score, 'score')
        self.validate_required(self.box, 'box')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Score'] = self.score
        result['Box'] = []
        if self.box is not None:
            for k in self.box:
                result['Box'].append(k)
        else:
            result['Box'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.score = map.get('Score')
        self.box = []
        if map.get('Box') is not None:
            for k in map.get('Box'):
                self.box.append(k)
        else:
            self.box = None
        return self


class DetectFruitsResponseData(TeaModel):
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
                temp_model = DetectFruitsResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectFruitsAdvanceRequest(TeaModel):
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


class ClassifyingRubbishRequest(TeaModel):
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


class ClassifyingRubbishResponse(TeaModel):
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
            temp_model = ClassifyingRubbishResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ClassifyingRubbishResponseDataElements(TeaModel):
    def __init__(self, category=None, category_score=None, rubbish=None, rubbish_score=None):
        self.category = category
        self.category_score = category_score
        self.rubbish = rubbish
        self.rubbish_score = rubbish_score

    def validate(self):
        self.validate_required(self.category, 'category')
        self.validate_required(self.category_score, 'category_score')
        self.validate_required(self.rubbish, 'rubbish')
        self.validate_required(self.rubbish_score, 'rubbish_score')

    def to_map(self):
        result = {}
        result['Category'] = self.category
        result['CategoryScore'] = self.category_score
        result['Rubbish'] = self.rubbish
        result['RubbishScore'] = self.rubbish_score
        return result

    def from_map(self, map={}):
        self.category = map.get('Category')
        self.category_score = map.get('CategoryScore')
        self.rubbish = map.get('Rubbish')
        self.rubbish_score = map.get('RubbishScore')
        return self


class ClassifyingRubbishResponseData(TeaModel):
    def __init__(self, sensitive=None, elements=None):
        self.sensitive = sensitive
        self.elements = []

    def validate(self):
        self.validate_required(self.sensitive, 'sensitive')
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Sensitive'] = self.sensitive
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        return result

    def from_map(self, map={}):
        self.sensitive = map.get('Sensitive')
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = ClassifyingRubbishResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class ClassifyingRubbishAdvanceRequest(TeaModel):
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


class RecognizeVehicleTypeRequest(TeaModel):
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


class RecognizeVehicleTypeResponse(TeaModel):
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
            temp_model = RecognizeVehicleTypeResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeVehicleTypeResponseDataElements(TeaModel):
    def __init__(self, name=None, score=None):
        self.name = name
        self.score = score

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.score, 'score')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Score'] = self.score
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.score = map.get('Score')
        return self


class RecognizeVehicleTypeResponseData(TeaModel):
    def __init__(self, threshold=None, elements=None):
        self.threshold = threshold
        self.elements = []

    def validate(self):
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Threshold'] = self.threshold
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        return result

    def from_map(self, map={}):
        self.threshold = map.get('Threshold')
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = RecognizeVehicleTypeResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class RecognizeVehicleTypeAdvanceRequest(TeaModel):
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


class RecognizeLogoRequest(TeaModel):
    def __init__(self, tasks=None):
        self.tasks = []

    def validate(self):
        self.validate_required(self.tasks, 'tasks')
        if self.tasks:
            for k in self.tasks:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tasks'] = []
        if self.tasks is not None:
            for k in self.tasks:
                result['Tasks'].append(k.to_map() if k else None)
        else:
            result['Tasks'] = None
        return result

    def from_map(self, map={}):
        self.tasks = []
        if map.get('Tasks') is not None:
            for k in map.get('Tasks'):
                temp_model = RecognizeLogoRequestTasks()
                temp_model = temp_model.from_map(k)
                self.tasks.append(temp_model)
        else:
            self.tasks = None
        return self


class RecognizeLogoRequestTasks(TeaModel):
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


class RecognizeLogoResponse(TeaModel):
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
            temp_model = RecognizeLogoResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeLogoResponseDataElementsResultsLogosData(TeaModel):
    def __init__(self, name=None, type=None, x=None, y=None, h=None, w=None):
        self.name = name
        self.type = type
        self.x = x
        self.y = y
        self.h = h
        self.w = w

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.h, 'h')
        self.validate_required(self.w, 'w')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Type'] = self.type
        result['X'] = self.x
        result['Y'] = self.y
        result['H'] = self.h
        result['W'] = self.w
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.type = map.get('Type')
        self.x = map.get('X')
        self.y = map.get('Y')
        self.h = map.get('H')
        self.w = map.get('W')
        return self


class RecognizeLogoResponseDataElementsResults(TeaModel):
    def __init__(self, label=None, suggestion=None, rate=None, logos_data=None):
        self.label = label
        self.suggestion = suggestion
        self.rate = rate
        self.logos_data = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.logos_data, 'logos_data')
        if self.logos_data:
            for k in self.logos_data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Rate'] = self.rate
        result['LogosData'] = []
        if self.logos_data is not None:
            for k in self.logos_data:
                result['LogosData'].append(k.to_map() if k else None)
        else:
            result['LogosData'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.rate = map.get('Rate')
        self.logos_data = []
        if map.get('LogosData') is not None:
            for k in map.get('LogosData'):
                temp_model = RecognizeLogoResponseDataElementsResultsLogosData()
                temp_model = temp_model.from_map(k)
                self.logos_data.append(temp_model)
        else:
            self.logos_data = None
        return self


class RecognizeLogoResponseDataElements(TeaModel):
    def __init__(self, task_id=None, image_url=None, results=None):
        self.task_id = task_id
        self.image_url = image_url
        self.results = []

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.results, 'results')
        if self.results:
            for k in self.results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['ImageURL'] = self.image_url
        result['Results'] = []
        if self.results is not None:
            for k in self.results:
                result['Results'].append(k.to_map() if k else None)
        else:
            result['Results'] = None
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.image_url = map.get('ImageURL')
        self.results = []
        if map.get('Results') is not None:
            for k in map.get('Results'):
                temp_model = RecognizeLogoResponseDataElementsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class RecognizeLogoResponseData(TeaModel):
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
                temp_model = RecognizeLogoResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class TaggingImageRequest(TeaModel):
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


class TaggingImageResponse(TeaModel):
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
            temp_model = TaggingImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class TaggingImageResponseDataTags(TeaModel):
    def __init__(self, confidence=None, value=None):
        self.confidence = confidence
        self.value = value

    def validate(self):
        self.validate_required(self.confidence, 'confidence')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Confidence'] = self.confidence
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.confidence = map.get('Confidence')
        self.value = map.get('Value')
        return self


class TaggingImageResponseData(TeaModel):
    def __init__(self, tags=None):
        self.tags = []

    def validate(self):
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = TaggingImageResponseDataTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class TaggingImageAdvanceRequest(TeaModel):
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


class RecognizeSceneRequest(TeaModel):
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


class RecognizeSceneResponse(TeaModel):
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
            temp_model = RecognizeSceneResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeSceneResponseDataTags(TeaModel):
    def __init__(self, confidence=None, value=None):
        self.confidence = confidence
        self.value = value

    def validate(self):
        self.validate_required(self.confidence, 'confidence')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Confidence'] = self.confidence
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.confidence = map.get('Confidence')
        self.value = map.get('Value')
        return self


class RecognizeSceneResponseData(TeaModel):
    def __init__(self, tags=None):
        self.tags = []

    def validate(self):
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = RecognizeSceneResponseDataTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class RecognizeSceneAdvanceRequest(TeaModel):
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


class RecognizeImageColorRequest(TeaModel):
    def __init__(self, url=None, color_count=None):
        self.url = url
        self.color_count = color_count

    def validate(self):
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Url'] = self.url
        result['ColorCount'] = self.color_count
        return result

    def from_map(self, map={}):
        self.url = map.get('Url')
        self.color_count = map.get('ColorCount')
        return self


class RecognizeImageColorResponse(TeaModel):
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
            temp_model = RecognizeImageColorResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeImageColorResponseDataColorTemplateList(TeaModel):
    def __init__(self, color=None, label=None, percentage=None):
        self.color = color
        self.label = label
        self.percentage = percentage

    def validate(self):
        self.validate_required(self.color, 'color')
        self.validate_required(self.label, 'label')
        self.validate_required(self.percentage, 'percentage')

    def to_map(self):
        result = {}
        result['Color'] = self.color
        result['Label'] = self.label
        result['Percentage'] = self.percentage
        return result

    def from_map(self, map={}):
        self.color = map.get('Color')
        self.label = map.get('Label')
        self.percentage = map.get('Percentage')
        return self


class RecognizeImageColorResponseData(TeaModel):
    def __init__(self, color_template_list=None):
        self.color_template_list = []

    def validate(self):
        self.validate_required(self.color_template_list, 'color_template_list')
        if self.color_template_list:
            for k in self.color_template_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ColorTemplateList'] = []
        if self.color_template_list is not None:
            for k in self.color_template_list:
                result['ColorTemplateList'].append(k.to_map() if k else None)
        else:
            result['ColorTemplateList'] = None
        return result

    def from_map(self, map={}):
        self.color_template_list = []
        if map.get('ColorTemplateList') is not None:
            for k in map.get('ColorTemplateList'):
                temp_model = RecognizeImageColorResponseDataColorTemplateList()
                temp_model = temp_model.from_map(k)
                self.color_template_list.append(temp_model)
        else:
            self.color_template_list = None
        return self


class RecognizeImageColorAdvanceRequest(TeaModel):
    def __init__(self, url_object=None, color_count=None):
        self.url_object = url_object
        self.color_count = color_count

    def validate(self):
        self.validate_required(self.url_object, 'url_object')

    def to_map(self):
        result = {}
        result['UrlObject'] = self.url_object
        result['ColorCount'] = self.color_count
        return result

    def from_map(self, map={}):
        self.url_object = map.get('UrlObject')
        self.color_count = map.get('ColorCount')
        return self


class DetectImageElementsRequest(TeaModel):
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


class DetectImageElementsResponse(TeaModel):
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
            temp_model = DetectImageElementsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectImageElementsResponseDataElements(TeaModel):
    def __init__(self, type=None, x=None, y=None, width=None, height=None, score=None):
        self.type = type
        self.x = x
        self.y = y
        self.width = width
        self.height = height
        self.score = score

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.score, 'score')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['X'] = self.x
        result['Y'] = self.y
        result['Width'] = self.width
        result['Height'] = self.height
        result['Score'] = self.score
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.x = map.get('X')
        self.y = map.get('Y')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.score = map.get('Score')
        return self


class DetectImageElementsResponseData(TeaModel):
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
                temp_model = DetectImageElementsResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectImageElementsAdvanceRequest(TeaModel):
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


class RecognizeImageStyleRequest(TeaModel):
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


class RecognizeImageStyleResponse(TeaModel):
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
            temp_model = RecognizeImageStyleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeImageStyleResponseData(TeaModel):
    def __init__(self, styles=None):
        self.styles = []

    def validate(self):
        self.validate_required(self.styles, 'styles')

    def to_map(self):
        result = {}
        result['Styles'] = []
        if self.styles is not None:
            for k in self.styles:
                result['Styles'].append(k)
        else:
            result['Styles'] = None
        return result

    def from_map(self, map={}):
        self.styles = []
        if map.get('Styles') is not None:
            for k in map.get('Styles'):
                self.styles.append(k)
        else:
            self.styles = None
        return self


class RecognizeImageStyleAdvanceRequest(TeaModel):
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

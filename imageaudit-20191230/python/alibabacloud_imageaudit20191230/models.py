# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ScanTextRequest(TeaModel):
    def __init__(self, tasks=None, labels=None):
        self.tasks = []
        self.labels = []

    def validate(self):
        self.validate_required(self.tasks, 'tasks')
        if self.tasks:
            for k in self.tasks:
                if k :
                    k.validate()
        self.validate_required(self.labels, 'labels')
        if self.labels:
            for k in self.labels:
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
        result['Labels'] = []
        if self.labels is not None:
            for k in self.labels:
                result['Labels'].append(k.to_map() if k else None)
        else:
            result['Labels'] = None
        return result

    def from_map(self, map={}):
        self.tasks = []
        if map.get('Tasks') is not None:
            for k in map.get('Tasks'):
                temp_model = ScanTextRequestTasks()
                temp_model = temp_model.from_map(k)
                self.tasks.append(temp_model)
        else:
            self.tasks = None
        self.labels = []
        if map.get('Labels') is not None:
            for k in map.get('Labels'):
                temp_model = ScanTextRequestLabels()
                temp_model = temp_model.from_map(k)
                self.labels.append(temp_model)
        else:
            self.labels = None
        return self


class ScanTextRequestTasks(TeaModel):
    def __init__(self, content=None):
        self.content = content

    def validate(self):
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.content = map.get('Content')
        return self


class ScanTextRequestLabels(TeaModel):
    def __init__(self, label=None):
        self.label = label

    def validate(self):
        self.validate_required(self.label, 'label')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        return self


class ScanTextResponse(TeaModel):
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
            temp_model = ScanTextResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ScanTextResponseDataElementsResultsDetailsContexts(TeaModel):
    def __init__(self, context=None):
        self.context = context

    def validate(self):
        self.validate_required(self.context, 'context')

    def to_map(self):
        result = {}
        result['Context'] = self.context
        return result

    def from_map(self, map={}):
        self.context = map.get('Context')
        return self


class ScanTextResponseDataElementsResultsDetails(TeaModel):
    def __init__(self, label=None, contexts=None):
        self.label = label
        self.contexts = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.contexts, 'contexts')
        if self.contexts:
            for k in self.contexts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Contexts'] = []
        if self.contexts is not None:
            for k in self.contexts:
                result['Contexts'].append(k.to_map() if k else None)
        else:
            result['Contexts'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.contexts = []
        if map.get('Contexts') is not None:
            for k in map.get('Contexts'):
                temp_model = ScanTextResponseDataElementsResultsDetailsContexts()
                temp_model = temp_model.from_map(k)
                self.contexts.append(temp_model)
        else:
            self.contexts = None
        return self


class ScanTextResponseDataElementsResults(TeaModel):
    def __init__(self, label=None, suggestion=None, rate=None, details=None):
        self.label = label
        self.suggestion = suggestion
        self.rate = rate
        self.details = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.details, 'details')
        if self.details:
            for k in self.details:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Rate'] = self.rate
        result['Details'] = []
        if self.details is not None:
            for k in self.details:
                result['Details'].append(k.to_map() if k else None)
        else:
            result['Details'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.rate = map.get('Rate')
        self.details = []
        if map.get('Details') is not None:
            for k in map.get('Details'):
                temp_model = ScanTextResponseDataElementsResultsDetails()
                temp_model = temp_model.from_map(k)
                self.details.append(temp_model)
        else:
            self.details = None
        return self


class ScanTextResponseDataElements(TeaModel):
    def __init__(self, task_id=None, results=None):
        self.task_id = task_id
        self.results = []

    def validate(self):
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.results, 'results')
        if self.results:
            for k in self.results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['Results'] = []
        if self.results is not None:
            for k in self.results:
                result['Results'].append(k.to_map() if k else None)
        else:
            result['Results'] = None
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.results = []
        if map.get('Results') is not None:
            for k in map.get('Results'):
                temp_model = ScanTextResponseDataElementsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class ScanTextResponseData(TeaModel):
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
                temp_model = ScanTextResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class ScanImageRequest(TeaModel):
    def __init__(self, task=None, scene=None):
        self.task = []
        self.scene = []

    def validate(self):
        self.validate_required(self.task, 'task')
        if self.task:
            for k in self.task:
                if k :
                    k.validate()
        self.validate_required(self.scene, 'scene')

    def to_map(self):
        result = {}
        result['Task'] = []
        if self.task is not None:
            for k in self.task:
                result['Task'].append(k.to_map() if k else None)
        else:
            result['Task'] = None
        result['Scene'] = []
        if self.scene is not None:
            for k in self.scene:
                result['Scene'].append(k)
        else:
            result['Scene'] = None
        return result

    def from_map(self, map={}):
        self.task = []
        if map.get('Task') is not None:
            for k in map.get('Task'):
                temp_model = ScanImageRequestTask()
                temp_model = temp_model.from_map(k)
                self.task.append(temp_model)
        else:
            self.task = None
        self.scene = []
        if map.get('Scene') is not None:
            for k in map.get('Scene'):
                self.scene.append(k)
        else:
            self.scene = None
        return self


class ScanImageRequestTask(TeaModel):
    def __init__(self, data_id=None, image_url=None, image_time_millisecond=None, interval=None, max_frames=None):
        self.data_id = data_id
        self.image_url = image_url
        self.image_time_millisecond = image_time_millisecond
        self.interval = interval
        self.max_frames = max_frames

    def validate(self):
        self.validate_required(self.image_url, 'image_url')

    def to_map(self):
        result = {}
        result['DataId'] = self.data_id
        result['ImageURL'] = self.image_url
        result['ImageTimeMillisecond'] = self.image_time_millisecond
        result['Interval'] = self.interval
        result['MaxFrames'] = self.max_frames
        return result

    def from_map(self, map={}):
        self.data_id = map.get('DataId')
        self.image_url = map.get('ImageURL')
        self.image_time_millisecond = map.get('ImageTimeMillisecond')
        self.interval = map.get('Interval')
        self.max_frames = map.get('MaxFrames')
        return self


class ScanImageResponse(TeaModel):
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
            temp_model = ScanImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ScanImageResponseDataResultsSubResultsFrames(TeaModel):
    def __init__(self, rate=None, _url=None):
        self.rate = rate
        self._url = _url

    def validate(self):
        self.validate_required(self.rate, 'rate')
        self.validate_required(self._url, '_url')

    def to_map(self):
        result = {}
        result['Rate'] = self.rate
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self.rate = map.get('Rate')
        self._url = map.get('URL')
        return self


class ScanImageResponseDataResultsSubResultsHintWordsInfoList(TeaModel):
    def __init__(self, context=None):
        self.context = context

    def validate(self):
        self.validate_required(self.context, 'context')

    def to_map(self):
        result = {}
        result['Context'] = self.context
        return result

    def from_map(self, map={}):
        self.context = map.get('Context')
        return self


class ScanImageResponseDataResultsSubResultsProgramCodeDataList(TeaModel):
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


class ScanImageResponseDataResultsSubResultsLogoDataList(TeaModel):
    def __init__(self, type=None, name=None, x=None, y=None, width=None, height=None):
        self.type = type
        self.name = name
        self.x = x
        self.y = y
        self.width = width
        self.height = height

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.name, 'name')
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        result['Name'] = self.name
        result['X'] = self.x
        result['Y'] = self.y
        result['Width'] = self.width
        result['Height'] = self.height
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        self.name = map.get('Name')
        self.x = map.get('X')
        self.y = map.get('Y')
        self.width = map.get('Width')
        self.height = map.get('Height')
        return self


class ScanImageResponseDataResultsSubResultsSfaceDataListFaces(TeaModel):
    def __init__(self, name=None, rate=None, id=None):
        self.name = name
        self.rate = rate
        self.id = id

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['Rate'] = self.rate
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.rate = map.get('Rate')
        self.id = map.get('Id')
        return self


class ScanImageResponseDataResultsSubResultsSfaceDataList(TeaModel):
    def __init__(self, x=None, y=None, width=None, height=None, faces=None):
        self.x = x
        self.y = y
        self.width = width
        self.height = height
        self.faces = []

    def validate(self):
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.faces, 'faces')
        if self.faces:
            for k in self.faces:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['X'] = self.x
        result['Y'] = self.y
        result['Width'] = self.width
        result['Height'] = self.height
        result['Faces'] = []
        if self.faces is not None:
            for k in self.faces:
                result['Faces'].append(k.to_map() if k else None)
        else:
            result['Faces'] = None
        return result

    def from_map(self, map={}):
        self.x = map.get('X')
        self.y = map.get('Y')
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.faces = []
        if map.get('Faces') is not None:
            for k in map.get('Faces'):
                temp_model = ScanImageResponseDataResultsSubResultsSfaceDataListFaces()
                temp_model = temp_model.from_map(k)
                self.faces.append(temp_model)
        else:
            self.faces = None
        return self


class ScanImageResponseDataResultsSubResults(TeaModel):
    def __init__(self, label=None, suggestion=None, rate=None, scene=None, frames=None, hint_words_info_list=None, program_code_data_list=None, logo_data_list=None, sface_data_list=None, ocrdata_list=None):
        self.label = label
        self.suggestion = suggestion
        self.rate = rate
        self.scene = scene
        self.frames = []
        self.hint_words_info_list = []
        self.program_code_data_list = []
        self.logo_data_list = []
        self.sface_data_list = []
        self.ocrdata_list = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.scene, 'scene')
        self.validate_required(self.frames, 'frames')
        if self.frames:
            for k in self.frames:
                if k :
                    k.validate()
        self.validate_required(self.hint_words_info_list, 'hint_words_info_list')
        if self.hint_words_info_list:
            for k in self.hint_words_info_list:
                if k :
                    k.validate()
        self.validate_required(self.program_code_data_list, 'program_code_data_list')
        if self.program_code_data_list:
            for k in self.program_code_data_list:
                if k :
                    k.validate()
        self.validate_required(self.logo_data_list, 'logo_data_list')
        if self.logo_data_list:
            for k in self.logo_data_list:
                if k :
                    k.validate()
        self.validate_required(self.sface_data_list, 'sface_data_list')
        if self.sface_data_list:
            for k in self.sface_data_list:
                if k :
                    k.validate()
        self.validate_required(self.ocrdata_list, 'ocrdata_list')

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Rate'] = self.rate
        result['Scene'] = self.scene
        result['Frames'] = []
        if self.frames is not None:
            for k in self.frames:
                result['Frames'].append(k.to_map() if k else None)
        else:
            result['Frames'] = None
        result['HintWordsInfoList'] = []
        if self.hint_words_info_list is not None:
            for k in self.hint_words_info_list:
                result['HintWordsInfoList'].append(k.to_map() if k else None)
        else:
            result['HintWordsInfoList'] = None
        result['ProgramCodeDataList'] = []
        if self.program_code_data_list is not None:
            for k in self.program_code_data_list:
                result['ProgramCodeDataList'].append(k.to_map() if k else None)
        else:
            result['ProgramCodeDataList'] = None
        result['LogoDataList'] = []
        if self.logo_data_list is not None:
            for k in self.logo_data_list:
                result['LogoDataList'].append(k.to_map() if k else None)
        else:
            result['LogoDataList'] = None
        result['SfaceDataList'] = []
        if self.sface_data_list is not None:
            for k in self.sface_data_list:
                result['SfaceDataList'].append(k.to_map() if k else None)
        else:
            result['SfaceDataList'] = None
        result['OCRDataList'] = []
        if self.ocrdata_list is not None:
            for k in self.ocrdata_list:
                result['OCRDataList'].append(k)
        else:
            result['OCRDataList'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.rate = map.get('Rate')
        self.scene = map.get('Scene')
        self.frames = []
        if map.get('Frames') is not None:
            for k in map.get('Frames'):
                temp_model = ScanImageResponseDataResultsSubResultsFrames()
                temp_model = temp_model.from_map(k)
                self.frames.append(temp_model)
        else:
            self.frames = None
        self.hint_words_info_list = []
        if map.get('HintWordsInfoList') is not None:
            for k in map.get('HintWordsInfoList'):
                temp_model = ScanImageResponseDataResultsSubResultsHintWordsInfoList()
                temp_model = temp_model.from_map(k)
                self.hint_words_info_list.append(temp_model)
        else:
            self.hint_words_info_list = None
        self.program_code_data_list = []
        if map.get('ProgramCodeDataList') is not None:
            for k in map.get('ProgramCodeDataList'):
                temp_model = ScanImageResponseDataResultsSubResultsProgramCodeDataList()
                temp_model = temp_model.from_map(k)
                self.program_code_data_list.append(temp_model)
        else:
            self.program_code_data_list = None
        self.logo_data_list = []
        if map.get('LogoDataList') is not None:
            for k in map.get('LogoDataList'):
                temp_model = ScanImageResponseDataResultsSubResultsLogoDataList()
                temp_model = temp_model.from_map(k)
                self.logo_data_list.append(temp_model)
        else:
            self.logo_data_list = None
        self.sface_data_list = []
        if map.get('SfaceDataList') is not None:
            for k in map.get('SfaceDataList'):
                temp_model = ScanImageResponseDataResultsSubResultsSfaceDataList()
                temp_model = temp_model.from_map(k)
                self.sface_data_list.append(temp_model)
        else:
            self.sface_data_list = None
        self.ocrdata_list = []
        if map.get('OCRDataList') is not None:
            for k in map.get('OCRDataList'):
                self.ocrdata_list.append(k)
        else:
            self.ocrdata_list = None
        return self


class ScanImageResponseDataResults(TeaModel):
    def __init__(self, data_id=None, task_id=None, image_url=None, sub_results=None):
        self.data_id = data_id
        self.task_id = task_id
        self.image_url = image_url
        self.sub_results = []

    def validate(self):
        self.validate_required(self.data_id, 'data_id')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.sub_results, 'sub_results')
        if self.sub_results:
            for k in self.sub_results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DataId'] = self.data_id
        result['TaskId'] = self.task_id
        result['ImageURL'] = self.image_url
        result['SubResults'] = []
        if self.sub_results is not None:
            for k in self.sub_results:
                result['SubResults'].append(k.to_map() if k else None)
        else:
            result['SubResults'] = None
        return result

    def from_map(self, map={}):
        self.data_id = map.get('DataId')
        self.task_id = map.get('TaskId')
        self.image_url = map.get('ImageURL')
        self.sub_results = []
        if map.get('SubResults') is not None:
            for k in map.get('SubResults'):
                temp_model = ScanImageResponseDataResultsSubResults()
                temp_model = temp_model.from_map(k)
                self.sub_results.append(temp_model)
        else:
            self.sub_results = None
        return self


class ScanImageResponseData(TeaModel):
    def __init__(self, results=None):
        self.results = []

    def validate(self):
        self.validate_required(self.results, 'results')
        if self.results:
            for k in self.results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Results'] = []
        if self.results is not None:
            for k in self.results:
                result['Results'].append(k.to_map() if k else None)
        else:
            result['Results'] = None
        return result

    def from_map(self, map={}):
        self.results = []
        if map.get('Results') is not None:
            for k in map.get('Results'):
                temp_model = ScanImageResponseDataResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self

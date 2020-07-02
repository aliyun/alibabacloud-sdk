# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class VerifyFaceMaskRequest(TeaModel):
    def __init__(self, image_url=None, ref_url=None):
        self.image_url = image_url
        self.ref_url = ref_url

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.ref_url, 'ref_url')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['RefUrl'] = self.ref_url
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.ref_url = map.get('RefUrl')
        return self


class VerifyFaceMaskResponse(TeaModel):
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
            temp_model = VerifyFaceMaskResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class VerifyFaceMaskResponseData(TeaModel):
    def __init__(self, confidence=None, mask=None, mask_ref=None, rectangle=None, rectangle_ref=None, thresholds=None):
        self.confidence = confidence
        self.mask = mask
        self.mask_ref = mask_ref
        self.rectangle = []
        self.rectangle_ref = []
        self.thresholds = []

    def validate(self):
        self.validate_required(self.confidence, 'confidence')
        self.validate_required(self.mask, 'mask')
        self.validate_required(self.mask_ref, 'mask_ref')
        self.validate_required(self.rectangle, 'rectangle')
        self.validate_required(self.rectangle_ref, 'rectangle_ref')
        self.validate_required(self.thresholds, 'thresholds')

    def to_map(self):
        result = {}
        result['Confidence'] = self.confidence
        result['Mask'] = self.mask
        result['MaskRef'] = self.mask_ref
        result['Rectangle'] = []
        if self.rectangle is not None:
            for k in self.rectangle:
                result['Rectangle'].append(k)
        else:
            result['Rectangle'] = None
        result['RectangleRef'] = []
        if self.rectangle_ref is not None:
            for k in self.rectangle_ref:
                result['RectangleRef'].append(k)
        else:
            result['RectangleRef'] = None
        result['Thresholds'] = []
        if self.thresholds is not None:
            for k in self.thresholds:
                result['Thresholds'].append(k)
        else:
            result['Thresholds'] = None
        return result

    def from_map(self, map={}):
        self.confidence = map.get('Confidence')
        self.mask = map.get('Mask')
        self.mask_ref = map.get('MaskRef')
        self.rectangle = []
        if map.get('Rectangle') is not None:
            for k in map.get('Rectangle'):
                self.rectangle.append(k)
        else:
            self.rectangle = None
        self.rectangle_ref = []
        if map.get('RectangleRef') is not None:
            for k in map.get('RectangleRef'):
                self.rectangle_ref.append(k)
        else:
            self.rectangle_ref = None
        self.thresholds = []
        if map.get('Thresholds') is not None:
            for k in map.get('Thresholds'):
                self.thresholds.append(k)
        else:
            self.thresholds = None
        return self


class VerifyFaceMaskAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, ref_url=None):
        self.image_urlobject = image_urlobject
        self.ref_url = ref_url

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.ref_url, 'ref_url')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['RefUrl'] = self.ref_url
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.ref_url = map.get('RefUrl')
        return self


class RecognizeActionRequest(TeaModel):
    def __init__(self, urllist=None, type=None, video_url=None):
        self.urllist = []
        self.type = type
        self.video_url = video_url

    def validate(self):
        if self.urllist:
            for k in self.urllist:
                if k :
                    k.validate()
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['URLList'] = []
        if self.urllist is not None:
            for k in self.urllist:
                result['URLList'].append(k.to_map() if k else None)
        else:
            result['URLList'] = None
        result['Type'] = self.type
        result['VideoUrl'] = self.video_url
        return result

    def from_map(self, map={}):
        self.urllist = []
        if map.get('URLList') is not None:
            for k in map.get('URLList'):
                temp_model = RecognizeActionRequestURLList()
                temp_model = temp_model.from_map(k)
                self.urllist.append(temp_model)
        else:
            self.urllist = None
        self.type = map.get('Type')
        self.video_url = map.get('VideoUrl')
        return self


class RecognizeActionRequestURLList(TeaModel):
    def __init__(self, _url=None):
        self._url = _url

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['URL'] = self._url
        return result

    def from_map(self, map={}):
        self._url = map.get('URL')
        return self


class RecognizeActionResponse(TeaModel):
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
            temp_model = RecognizeActionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeActionResponseDataElementsBoxes(TeaModel):
    def __init__(self, box=None):
        self.box = []

    def validate(self):
        self.validate_required(self.box, 'box')

    def to_map(self):
        result = {}
        result['Box'] = []
        if self.box is not None:
            for k in self.box:
                result['Box'].append(k)
        else:
            result['Box'] = None
        return result

    def from_map(self, map={}):
        self.box = []
        if map.get('Box') is not None:
            for k in map.get('Box'):
                self.box.append(k)
        else:
            self.box = None
        return self


class RecognizeActionResponseDataElements(TeaModel):
    def __init__(self, timestamp=None, boxes=None, scores=None, labels=None):
        self.timestamp = timestamp
        self.boxes = []
        self.scores = []
        self.labels = []

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.boxes, 'boxes')
        if self.boxes:
            for k in self.boxes:
                if k :
                    k.validate()
        self.validate_required(self.scores, 'scores')
        self.validate_required(self.labels, 'labels')

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['Boxes'] = []
        if self.boxes is not None:
            for k in self.boxes:
                result['Boxes'].append(k.to_map() if k else None)
        else:
            result['Boxes'] = None
        result['Scores'] = []
        if self.scores is not None:
            for k in self.scores:
                result['Scores'].append(k)
        else:
            result['Scores'] = None
        result['Labels'] = []
        if self.labels is not None:
            for k in self.labels:
                result['Labels'].append(k)
        else:
            result['Labels'] = None
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                temp_model = RecognizeActionResponseDataElementsBoxes()
                temp_model = temp_model.from_map(k)
                self.boxes.append(temp_model)
        else:
            self.boxes = None
        self.scores = []
        if map.get('Scores') is not None:
            for k in map.get('Scores'):
                self.scores.append(k)
        else:
            self.scores = None
        self.labels = []
        if map.get('Labels') is not None:
            for k in map.get('Labels'):
                self.labels.append(k)
        else:
            self.labels = None
        return self


class RecognizeActionResponseData(TeaModel):
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
                temp_model = RecognizeActionResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectVideoLivingFaceRequest(TeaModel):
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


class DetectVideoLivingFaceResponse(TeaModel):
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
            temp_model = DetectVideoLivingFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectVideoLivingFaceResponseDataElements(TeaModel):
    def __init__(self, live_confidence=None, face_confidence=None, rect=None):
        self.live_confidence = live_confidence
        self.face_confidence = face_confidence
        self.rect = []

    def validate(self):
        self.validate_required(self.live_confidence, 'live_confidence')
        self.validate_required(self.face_confidence, 'face_confidence')
        self.validate_required(self.rect, 'rect')

    def to_map(self):
        result = {}
        result['LiveConfidence'] = self.live_confidence
        result['FaceConfidence'] = self.face_confidence
        result['Rect'] = []
        if self.rect is not None:
            for k in self.rect:
                result['Rect'].append(k)
        else:
            result['Rect'] = None
        return result

    def from_map(self, map={}):
        self.live_confidence = map.get('LiveConfidence')
        self.face_confidence = map.get('FaceConfidence')
        self.rect = []
        if map.get('Rect') is not None:
            for k in map.get('Rect'):
                self.rect.append(k)
        else:
            self.rect = None
        return self


class DetectVideoLivingFaceResponseData(TeaModel):
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
                temp_model = DetectVideoLivingFaceResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectVideoLivingFaceAdvanceRequest(TeaModel):
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


class SwapFacialFeaturesRequest(TeaModel):
    def __init__(self, source_image_url=None, edit_part=None, target_image_url=None):
        self.source_image_url = source_image_url
        self.edit_part = edit_part
        self.target_image_url = target_image_url

    def validate(self):
        self.validate_required(self.source_image_url, 'source_image_url')
        self.validate_required(self.edit_part, 'edit_part')
        self.validate_required(self.target_image_url, 'target_image_url')

    def to_map(self):
        result = {}
        result['SourceImageURL'] = self.source_image_url
        result['EditPart'] = self.edit_part
        result['TargetImageURL'] = self.target_image_url
        return result

    def from_map(self, map={}):
        self.source_image_url = map.get('SourceImageURL')
        self.edit_part = map.get('EditPart')
        self.target_image_url = map.get('TargetImageURL')
        return self


class SwapFacialFeaturesResponse(TeaModel):
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
            temp_model = SwapFacialFeaturesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SwapFacialFeaturesResponseData(TeaModel):
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


class SwapFacialFeaturesAdvanceRequest(TeaModel):
    def __init__(self, source_image_urlobject=None, edit_part=None, target_image_url=None):
        self.source_image_urlobject = source_image_urlobject
        self.edit_part = edit_part
        self.target_image_url = target_image_url

    def validate(self):
        self.validate_required(self.source_image_urlobject, 'source_image_urlobject')
        self.validate_required(self.edit_part, 'edit_part')
        self.validate_required(self.target_image_url, 'target_image_url')

    def to_map(self):
        result = {}
        result['SourceImageURLObject'] = self.source_image_urlobject
        result['EditPart'] = self.edit_part
        result['TargetImageURL'] = self.target_image_url
        return result

    def from_map(self, map={}):
        self.source_image_urlobject = map.get('SourceImageURLObject')
        self.edit_part = map.get('EditPart')
        self.target_image_url = map.get('TargetImageURL')
        return self


class AddFaceEntityRequest(TeaModel):
    def __init__(self, db_name=None, entity_id=None, labels=None):
        self.db_name = db_name
        self.entity_id = entity_id
        self.labels = labels

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        result['Labels'] = self.labels
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        self.labels = map.get('Labels')
        return self


class AddFaceEntityResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteFaceEntityRequest(TeaModel):
    def __init__(self, db_name=None, entity_id=None):
        self.db_name = db_name
        self.entity_id = entity_id

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        return self


class DeleteFaceEntityResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class ListFaceEntitiesRequest(TeaModel):
    def __init__(self, db_name=None, offset=None, limit=None, token=None, labels=None, entity_id_prefix=None, order=None):
        self.db_name = db_name
        self.offset = offset
        self.limit = limit
        self.token = token
        self.labels = labels
        self.entity_id_prefix = entity_id_prefix
        self.order = order

    def validate(self):
        self.validate_required(self.db_name, 'db_name')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['Offset'] = self.offset
        result['Limit'] = self.limit
        result['Token'] = self.token
        result['Labels'] = self.labels
        result['EntityIdPrefix'] = self.entity_id_prefix
        result['Order'] = self.order
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.offset = map.get('Offset')
        self.limit = map.get('Limit')
        self.token = map.get('Token')
        self.labels = map.get('Labels')
        self.entity_id_prefix = map.get('EntityIdPrefix')
        self.order = map.get('Order')
        return self


class ListFaceEntitiesResponse(TeaModel):
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
            temp_model = ListFaceEntitiesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListFaceEntitiesResponseDataEntities(TeaModel):
    def __init__(self, db_name=None, entity_id=None, face_count=None, labels=None, created_at=None, updated_at=None):
        self.db_name = db_name
        self.entity_id = entity_id
        self.face_count = face_count
        self.labels = labels
        self.created_at = created_at
        self.updated_at = updated_at

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')
        self.validate_required(self.face_count, 'face_count')
        self.validate_required(self.labels, 'labels')
        self.validate_required(self.created_at, 'created_at')
        self.validate_required(self.updated_at, 'updated_at')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        result['FaceCount'] = self.face_count
        result['Labels'] = self.labels
        result['CreatedAt'] = self.created_at
        result['UpdatedAt'] = self.updated_at
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        self.face_count = map.get('FaceCount')
        self.labels = map.get('Labels')
        self.created_at = map.get('CreatedAt')
        self.updated_at = map.get('UpdatedAt')
        return self


class ListFaceEntitiesResponseData(TeaModel):
    def __init__(self, token=None, total_count=None, entities=None):
        self.token = token
        self.total_count = total_count
        self.entities = []

    def validate(self):
        self.validate_required(self.token, 'token')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.entities, 'entities')
        if self.entities:
            for k in self.entities:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Token'] = self.token
        result['TotalCount'] = self.total_count
        result['Entities'] = []
        if self.entities is not None:
            for k in self.entities:
                result['Entities'].append(k.to_map() if k else None)
        else:
            result['Entities'] = None
        return result

    def from_map(self, map={}):
        self.token = map.get('Token')
        self.total_count = map.get('TotalCount')
        self.entities = []
        if map.get('Entities') is not None:
            for k in map.get('Entities'):
                temp_model = ListFaceEntitiesResponseDataEntities()
                temp_model = temp_model.from_map(k)
                self.entities.append(temp_model)
        else:
            self.entities = None
        return self


class GetFaceEntityRequest(TeaModel):
    def __init__(self, db_name=None, entity_id=None):
        self.db_name = db_name
        self.entity_id = entity_id

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        return self


class GetFaceEntityResponse(TeaModel):
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
            temp_model = GetFaceEntityResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetFaceEntityResponseDataFaces(TeaModel):
    def __init__(self, face_id=None):
        self.face_id = face_id

    def validate(self):
        self.validate_required(self.face_id, 'face_id')

    def to_map(self):
        result = {}
        result['FaceId'] = self.face_id
        return result

    def from_map(self, map={}):
        self.face_id = map.get('FaceId')
        return self


class GetFaceEntityResponseData(TeaModel):
    def __init__(self, db_name=None, entity_id=None, labels=None, faces=None):
        self.db_name = db_name
        self.entity_id = entity_id
        self.labels = labels
        self.faces = []

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')
        self.validate_required(self.labels, 'labels')
        self.validate_required(self.faces, 'faces')
        if self.faces:
            for k in self.faces:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        result['Labels'] = self.labels
        result['Faces'] = []
        if self.faces is not None:
            for k in self.faces:
                result['Faces'].append(k.to_map() if k else None)
        else:
            result['Faces'] = None
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        self.labels = map.get('Labels')
        self.faces = []
        if map.get('Faces') is not None:
            for k in map.get('Faces'):
                temp_model = GetFaceEntityResponseDataFaces()
                temp_model = temp_model.from_map(k)
                self.faces.append(temp_model)
        else:
            self.faces = None
        return self


class UpdateFaceEntityRequest(TeaModel):
    def __init__(self, db_name=None, entity_id=None, labels=None):
        self.db_name = db_name
        self.entity_id = entity_id
        self.labels = labels

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        result['Labels'] = self.labels
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        self.labels = map.get('Labels')
        return self


class UpdateFaceEntityResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class FaceMakeupRequest(TeaModel):
    def __init__(self, image_url=None, makeup_type=None, resource_type=None, strength=None):
        self.image_url = image_url
        self.makeup_type = makeup_type
        self.resource_type = resource_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.makeup_type, 'makeup_type')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['MakeupType'] = self.makeup_type
        result['ResourceType'] = self.resource_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.makeup_type = map.get('MakeupType')
        self.resource_type = map.get('ResourceType')
        self.strength = map.get('Strength')
        return self


class FaceMakeupResponse(TeaModel):
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
            temp_model = FaceMakeupResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class FaceMakeupResponseData(TeaModel):
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


class FaceMakeupAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, makeup_type=None, resource_type=None, strength=None):
        self.image_urlobject = image_urlobject
        self.makeup_type = makeup_type
        self.resource_type = resource_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.makeup_type, 'makeup_type')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['MakeupType'] = self.makeup_type
        result['ResourceType'] = self.resource_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.makeup_type = map.get('MakeupType')
        self.resource_type = map.get('ResourceType')
        self.strength = map.get('Strength')
        return self


class HandPostureRequest(TeaModel):
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


class HandPostureResponse(TeaModel):
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
            temp_model = HandPostureResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class HandPostureResponseDataOutputsResultsBoxPositions(TeaModel):
    def __init__(self, points=None):
        self.points = []

    def validate(self):
        self.validate_required(self.points, 'points')

    def to_map(self):
        result = {}
        result['Points'] = []
        if self.points is not None:
            for k in self.points:
                result['Points'].append(k)
        else:
            result['Points'] = None
        return result

    def from_map(self, map={}):
        self.points = []
        if map.get('Points') is not None:
            for k in map.get('Points'):
                self.points.append(k)
        else:
            self.points = None
        return self


class HandPostureResponseDataOutputsResultsBox(TeaModel):
    def __init__(self, confident=None, positions=None):
        self.confident = confident
        self.positions = []

    def validate(self):
        self.validate_required(self.confident, 'confident')
        self.validate_required(self.positions, 'positions')
        if self.positions:
            for k in self.positions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Confident'] = self.confident
        result['Positions'] = []
        if self.positions is not None:
            for k in self.positions:
                result['Positions'].append(k.to_map() if k else None)
        else:
            result['Positions'] = None
        return result

    def from_map(self, map={}):
        self.confident = map.get('Confident')
        self.positions = []
        if map.get('Positions') is not None:
            for k in map.get('Positions'):
                temp_model = HandPostureResponseDataOutputsResultsBoxPositions()
                temp_model = temp_model.from_map(k)
                self.positions.append(temp_model)
        else:
            self.positions = None
        return self


class HandPostureResponseDataOutputsResultsHandsKeyPointsPositions(TeaModel):
    def __init__(self, points=None):
        self.points = []

    def validate(self):
        self.validate_required(self.points, 'points')

    def to_map(self):
        result = {}
        result['Points'] = []
        if self.points is not None:
            for k in self.points:
                result['Points'].append(k)
        else:
            result['Points'] = None
        return result

    def from_map(self, map={}):
        self.points = []
        if map.get('Points') is not None:
            for k in map.get('Points'):
                self.points.append(k)
        else:
            self.points = None
        return self


class HandPostureResponseDataOutputsResultsHandsKeyPoints(TeaModel):
    def __init__(self, label=None, positions=None):
        self.label = label
        self.positions = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.positions, 'positions')
        if self.positions:
            for k in self.positions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Positions'] = []
        if self.positions is not None:
            for k in self.positions:
                result['Positions'].append(k.to_map() if k else None)
        else:
            result['Positions'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.positions = []
        if map.get('Positions') is not None:
            for k in map.get('Positions'):
                temp_model = HandPostureResponseDataOutputsResultsHandsKeyPointsPositions()
                temp_model = temp_model.from_map(k)
                self.positions.append(temp_model)
        else:
            self.positions = None
        return self


class HandPostureResponseDataOutputsResultsHands(TeaModel):
    def __init__(self, confident=None, key_points=None):
        self.confident = confident
        self.key_points = []

    def validate(self):
        self.validate_required(self.confident, 'confident')
        self.validate_required(self.key_points, 'key_points')
        if self.key_points:
            for k in self.key_points:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Confident'] = self.confident
        result['KeyPoints'] = []
        if self.key_points is not None:
            for k in self.key_points:
                result['KeyPoints'].append(k.to_map() if k else None)
        else:
            result['KeyPoints'] = None
        return result

    def from_map(self, map={}):
        self.confident = map.get('Confident')
        self.key_points = []
        if map.get('KeyPoints') is not None:
            for k in map.get('KeyPoints'):
                temp_model = HandPostureResponseDataOutputsResultsHandsKeyPoints()
                temp_model = temp_model.from_map(k)
                self.key_points.append(temp_model)
        else:
            self.key_points = None
        return self


class HandPostureResponseDataOutputsResults(TeaModel):
    def __init__(self, box=None, hands=None):
        self.box = box
        self.hands = hands

    def validate(self):
        self.validate_required(self.box, 'box')
        if self.box:
            self.box.validate()
        self.validate_required(self.hands, 'hands')
        if self.hands:
            self.hands.validate()

    def to_map(self):
        result = {}
        if self.box is not None:
            result['Box'] = self.box.to_map()
        else:
            result['Box'] = None
        if self.hands is not None:
            result['Hands'] = self.hands.to_map()
        else:
            result['Hands'] = None
        return result

    def from_map(self, map={}):
        if map.get('Box') is not None:
            temp_model = HandPostureResponseDataOutputsResultsBox()
            self.box = temp_model.from_map(map['Box'])
        else:
            self.box = None
        if map.get('Hands') is not None:
            temp_model = HandPostureResponseDataOutputsResultsHands()
            self.hands = temp_model.from_map(map['Hands'])
        else:
            self.hands = None
        return self


class HandPostureResponseDataOutputs(TeaModel):
    def __init__(self, hand_count=None, results=None):
        self.hand_count = hand_count
        self.results = []

    def validate(self):
        self.validate_required(self.hand_count, 'hand_count')
        self.validate_required(self.results, 'results')
        if self.results:
            for k in self.results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['HandCount'] = self.hand_count
        result['Results'] = []
        if self.results is not None:
            for k in self.results:
                result['Results'].append(k.to_map() if k else None)
        else:
            result['Results'] = None
        return result

    def from_map(self, map={}):
        self.hand_count = map.get('HandCount')
        self.results = []
        if map.get('Results') is not None:
            for k in map.get('Results'):
                temp_model = HandPostureResponseDataOutputsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class HandPostureResponseDataMetaObject(TeaModel):
    def __init__(self, height=None, width=None):
        self.height = height
        self.width = width

    def validate(self):
        self.validate_required(self.height, 'height')
        self.validate_required(self.width, 'width')

    def to_map(self):
        result = {}
        result['Height'] = self.height
        result['Width'] = self.width
        return result

    def from_map(self, map={}):
        self.height = map.get('Height')
        self.width = map.get('Width')
        return self


class HandPostureResponseData(TeaModel):
    def __init__(self, outputs=None, meta_object=None):
        self.outputs = []
        self.meta_object = meta_object

    def validate(self):
        self.validate_required(self.outputs, 'outputs')
        if self.outputs:
            for k in self.outputs:
                if k :
                    k.validate()
        self.validate_required(self.meta_object, 'meta_object')
        if self.meta_object:
            self.meta_object.validate()

    def to_map(self):
        result = {}
        result['Outputs'] = []
        if self.outputs is not None:
            for k in self.outputs:
                result['Outputs'].append(k.to_map() if k else None)
        else:
            result['Outputs'] = None
        if self.meta_object is not None:
            result['MetaObject'] = self.meta_object.to_map()
        else:
            result['MetaObject'] = None
        return result

    def from_map(self, map={}):
        self.outputs = []
        if map.get('Outputs') is not None:
            for k in map.get('Outputs'):
                temp_model = HandPostureResponseDataOutputs()
                temp_model = temp_model.from_map(k)
                self.outputs.append(temp_model)
        else:
            self.outputs = None
        if map.get('MetaObject') is not None:
            temp_model = HandPostureResponseDataMetaObject()
            self.meta_object = temp_model.from_map(map['MetaObject'])
        else:
            self.meta_object = None
        return self


class HandPostureAdvanceRequest(TeaModel):
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


class BodyPostureRequest(TeaModel):
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


class BodyPostureResponse(TeaModel):
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
            temp_model = BodyPostureResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class BodyPostureResponseDataOutputsResultsBodiesPositions(TeaModel):
    def __init__(self, points=None):
        self.points = []

    def validate(self):
        self.validate_required(self.points, 'points')

    def to_map(self):
        result = {}
        result['Points'] = []
        if self.points is not None:
            for k in self.points:
                result['Points'].append(k)
        else:
            result['Points'] = None
        return result

    def from_map(self, map={}):
        self.points = []
        if map.get('Points') is not None:
            for k in map.get('Points'):
                self.points.append(k)
        else:
            self.points = None
        return self


class BodyPostureResponseDataOutputsResultsBodies(TeaModel):
    def __init__(self, confident=None, label=None, positions=None):
        self.confident = confident
        self.label = label
        self.positions = []

    def validate(self):
        self.validate_required(self.confident, 'confident')
        self.validate_required(self.label, 'label')
        self.validate_required(self.positions, 'positions')
        if self.positions:
            for k in self.positions:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Confident'] = self.confident
        result['Label'] = self.label
        result['Positions'] = []
        if self.positions is not None:
            for k in self.positions:
                result['Positions'].append(k.to_map() if k else None)
        else:
            result['Positions'] = None
        return result

    def from_map(self, map={}):
        self.confident = map.get('Confident')
        self.label = map.get('Label')
        self.positions = []
        if map.get('Positions') is not None:
            for k in map.get('Positions'):
                temp_model = BodyPostureResponseDataOutputsResultsBodiesPositions()
                temp_model = temp_model.from_map(k)
                self.positions.append(temp_model)
        else:
            self.positions = None
        return self


class BodyPostureResponseDataOutputsResults(TeaModel):
    def __init__(self, bodies=None):
        self.bodies = []

    def validate(self):
        self.validate_required(self.bodies, 'bodies')
        if self.bodies:
            for k in self.bodies:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Bodies'] = []
        if self.bodies is not None:
            for k in self.bodies:
                result['Bodies'].append(k.to_map() if k else None)
        else:
            result['Bodies'] = None
        return result

    def from_map(self, map={}):
        self.bodies = []
        if map.get('Bodies') is not None:
            for k in map.get('Bodies'):
                temp_model = BodyPostureResponseDataOutputsResultsBodies()
                temp_model = temp_model.from_map(k)
                self.bodies.append(temp_model)
        else:
            self.bodies = None
        return self


class BodyPostureResponseDataOutputs(TeaModel):
    def __init__(self, human_count=None, results=None):
        self.human_count = human_count
        self.results = []

    def validate(self):
        self.validate_required(self.human_count, 'human_count')
        self.validate_required(self.results, 'results')
        if self.results:
            for k in self.results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['HumanCount'] = self.human_count
        result['Results'] = []
        if self.results is not None:
            for k in self.results:
                result['Results'].append(k.to_map() if k else None)
        else:
            result['Results'] = None
        return result

    def from_map(self, map={}):
        self.human_count = map.get('HumanCount')
        self.results = []
        if map.get('Results') is not None:
            for k in map.get('Results'):
                temp_model = BodyPostureResponseDataOutputsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class BodyPostureResponseDataMetaObject(TeaModel):
    def __init__(self, height=None, width=None):
        self.height = height
        self.width = width

    def validate(self):
        self.validate_required(self.height, 'height')
        self.validate_required(self.width, 'width')

    def to_map(self):
        result = {}
        result['Height'] = self.height
        result['Width'] = self.width
        return result

    def from_map(self, map={}):
        self.height = map.get('Height')
        self.width = map.get('Width')
        return self


class BodyPostureResponseData(TeaModel):
    def __init__(self, outputs=None, meta_object=None):
        self.outputs = []
        self.meta_object = meta_object

    def validate(self):
        self.validate_required(self.outputs, 'outputs')
        if self.outputs:
            for k in self.outputs:
                if k :
                    k.validate()
        self.validate_required(self.meta_object, 'meta_object')
        if self.meta_object:
            self.meta_object.validate()

    def to_map(self):
        result = {}
        result['Outputs'] = []
        if self.outputs is not None:
            for k in self.outputs:
                result['Outputs'].append(k.to_map() if k else None)
        else:
            result['Outputs'] = None
        if self.meta_object is not None:
            result['MetaObject'] = self.meta_object.to_map()
        else:
            result['MetaObject'] = None
        return result

    def from_map(self, map={}):
        self.outputs = []
        if map.get('Outputs') is not None:
            for k in map.get('Outputs'):
                temp_model = BodyPostureResponseDataOutputs()
                temp_model = temp_model.from_map(k)
                self.outputs.append(temp_model)
        else:
            self.outputs = None
        if map.get('MetaObject') is not None:
            temp_model = BodyPostureResponseDataMetaObject()
            self.meta_object = temp_model.from_map(map['MetaObject'])
        else:
            self.meta_object = None
        return self


class BodyPostureAdvanceRequest(TeaModel):
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


class DetectPedestrianRequest(TeaModel):
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


class DetectPedestrianResponse(TeaModel):
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
            temp_model = DetectPedestrianResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectPedestrianResponseDataElements(TeaModel):
    def __init__(self, score=None, type=None, boxes=None):
        self.score = score
        self.type = type
        self.boxes = []

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.type, 'type')
        self.validate_required(self.boxes, 'boxes')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['Type'] = self.type
        result['Boxes'] = []
        if self.boxes is not None:
            for k in self.boxes:
                result['Boxes'].append(k)
        else:
            result['Boxes'] = None
        return result

    def from_map(self, map={}):
        self.score = map.get('Score')
        self.type = map.get('Type')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                self.boxes.append(k)
        else:
            self.boxes = None
        return self


class DetectPedestrianResponseData(TeaModel):
    def __init__(self, width=None, height=None, elements=None):
        self.width = width
        self.height = height
        self.elements = []

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = DetectPedestrianResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectPedestrianAdvanceRequest(TeaModel):
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


class FaceBeautyRequest(TeaModel):
    def __init__(self, image_url=None, sharp=None, smooth=None, white=None):
        self.image_url = image_url
        self.sharp = sharp
        self.smooth = smooth
        self.white = white

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.sharp, 'sharp')
        self.validate_required(self.smooth, 'smooth')
        self.validate_required(self.white, 'white')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['Sharp'] = self.sharp
        result['Smooth'] = self.smooth
        result['White'] = self.white
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.sharp = map.get('Sharp')
        self.smooth = map.get('Smooth')
        self.white = map.get('White')
        return self


class FaceBeautyResponse(TeaModel):
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
            temp_model = FaceBeautyResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class FaceBeautyResponseData(TeaModel):
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


class FaceBeautyAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, sharp=None, smooth=None, white=None):
        self.image_urlobject = image_urlobject
        self.sharp = sharp
        self.smooth = smooth
        self.white = white

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.sharp, 'sharp')
        self.validate_required(self.smooth, 'smooth')
        self.validate_required(self.white, 'white')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['Sharp'] = self.sharp
        result['Smooth'] = self.smooth
        result['White'] = self.white
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.sharp = map.get('Sharp')
        self.smooth = map.get('Smooth')
        self.white = map.get('White')
        return self


class FaceFilterRequest(TeaModel):
    def __init__(self, image_url=None, resource_type=None, strength=None):
        self.image_url = image_url
        self.resource_type = resource_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['ResourceType'] = self.resource_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.resource_type = map.get('ResourceType')
        self.strength = map.get('Strength')
        return self


class FaceFilterResponse(TeaModel):
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
            temp_model = FaceFilterResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class FaceFilterResponseData(TeaModel):
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


class FaceFilterAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, resource_type=None, strength=None):
        self.image_urlobject = image_urlobject
        self.resource_type = resource_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['ResourceType'] = self.resource_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.resource_type = map.get('ResourceType')
        self.strength = map.get('Strength')
        return self


class EnhanceFaceRequest(TeaModel):
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


class EnhanceFaceResponse(TeaModel):
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
            temp_model = EnhanceFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class EnhanceFaceResponseData(TeaModel):
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


class EnhanceFaceAdvanceRequest(TeaModel):
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


class FaceTidyupRequest(TeaModel):
    def __init__(self, image_url=None, shape_type=None, strength=None):
        self.image_url = image_url
        self.shape_type = shape_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.shape_type, 'shape_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['ShapeType'] = self.shape_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.shape_type = map.get('ShapeType')
        self.strength = map.get('Strength')
        return self


class FaceTidyupResponse(TeaModel):
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
            temp_model = FaceTidyupResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class FaceTidyupResponseData(TeaModel):
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


class FaceTidyupAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, shape_type=None, strength=None):
        self.image_urlobject = image_urlobject
        self.shape_type = shape_type
        self.strength = strength

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.shape_type, 'shape_type')
        self.validate_required(self.strength, 'strength')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['ShapeType'] = self.shape_type
        result['Strength'] = self.strength
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.shape_type = map.get('ShapeType')
        self.strength = map.get('Strength')
        return self


class SearchFaceRequest(TeaModel):
    def __init__(self, db_name=None, image_url=None, limit=None):
        self.db_name = db_name
        self.image_url = image_url
        self.limit = limit

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.limit, 'limit')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['ImageUrl'] = self.image_url
        result['Limit'] = self.limit
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.image_url = map.get('ImageUrl')
        self.limit = map.get('Limit')
        return self


class SearchFaceResponse(TeaModel):
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
            temp_model = SearchFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SearchFaceResponseDataMatchListFaceItems(TeaModel):
    def __init__(self, face_id=None, score=None, extra_data=None, entity_id=None):
        self.face_id = face_id
        self.score = score
        self.extra_data = extra_data
        self.entity_id = entity_id

    def validate(self):
        self.validate_required(self.face_id, 'face_id')
        self.validate_required(self.score, 'score')
        self.validate_required(self.extra_data, 'extra_data')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['FaceId'] = self.face_id
        result['Score'] = self.score
        result['ExtraData'] = self.extra_data
        result['EntityId'] = self.entity_id
        return result

    def from_map(self, map={}):
        self.face_id = map.get('FaceId')
        self.score = map.get('Score')
        self.extra_data = map.get('ExtraData')
        self.entity_id = map.get('EntityId')
        return self


class SearchFaceResponseDataMatchListLocation(TeaModel):
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


class SearchFaceResponseDataMatchList(TeaModel):
    def __init__(self, face_items=None, location=None):
        self.face_items = []
        self.location = location

    def validate(self):
        self.validate_required(self.face_items, 'face_items')
        if self.face_items:
            for k in self.face_items:
                if k :
                    k.validate()
        self.validate_required(self.location, 'location')
        if self.location:
            self.location.validate()

    def to_map(self):
        result = {}
        result['FaceItems'] = []
        if self.face_items is not None:
            for k in self.face_items:
                result['FaceItems'].append(k.to_map() if k else None)
        else:
            result['FaceItems'] = None
        if self.location is not None:
            result['Location'] = self.location.to_map()
        else:
            result['Location'] = None
        return result

    def from_map(self, map={}):
        self.face_items = []
        if map.get('FaceItems') is not None:
            for k in map.get('FaceItems'):
                temp_model = SearchFaceResponseDataMatchListFaceItems()
                temp_model = temp_model.from_map(k)
                self.face_items.append(temp_model)
        else:
            self.face_items = None
        if map.get('Location') is not None:
            temp_model = SearchFaceResponseDataMatchListLocation()
            self.location = temp_model.from_map(map['Location'])
        else:
            self.location = None
        return self


class SearchFaceResponseData(TeaModel):
    def __init__(self, match_list=None):
        self.match_list = []

    def validate(self):
        self.validate_required(self.match_list, 'match_list')
        if self.match_list:
            for k in self.match_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MatchList'] = []
        if self.match_list is not None:
            for k in self.match_list:
                result['MatchList'].append(k.to_map() if k else None)
        else:
            result['MatchList'] = None
        return result

    def from_map(self, map={}):
        self.match_list = []
        if map.get('MatchList') is not None:
            for k in map.get('MatchList'):
                temp_model = SearchFaceResponseDataMatchList()
                temp_model = temp_model.from_map(k)
                self.match_list.append(temp_model)
        else:
            self.match_list = None
        return self


class SearchFaceAdvanceRequest(TeaModel):
    def __init__(self, image_url_object=None, db_name=None, limit=None):
        self.image_url_object = image_url_object
        self.db_name = db_name
        self.limit = limit

    def validate(self):
        self.validate_required(self.image_url_object, 'image_url_object')
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.limit, 'limit')

    def to_map(self):
        result = {}
        result['ImageUrlObject'] = self.image_url_object
        result['DbName'] = self.db_name
        result['Limit'] = self.limit
        return result

    def from_map(self, map={}):
        self.image_url_object = map.get('ImageUrlObject')
        self.db_name = map.get('DbName')
        self.limit = map.get('Limit')
        return self


class ListFaceDbsRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ListFaceDbsResponse(TeaModel):
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
            temp_model = ListFaceDbsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListFaceDbsResponseDataDbList(TeaModel):
    def __init__(self, name=None):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        return self


class ListFaceDbsResponseData(TeaModel):
    def __init__(self, db_list=None):
        self.db_list = []

    def validate(self):
        self.validate_required(self.db_list, 'db_list')
        if self.db_list:
            for k in self.db_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DbList'] = []
        if self.db_list is not None:
            for k in self.db_list:
                result['DbList'].append(k.to_map() if k else None)
        else:
            result['DbList'] = None
        return result

    def from_map(self, map={}):
        self.db_list = []
        if map.get('DbList') is not None:
            for k in map.get('DbList'):
                temp_model = ListFaceDbsResponseDataDbList()
                temp_model = temp_model.from_map(k)
                self.db_list.append(temp_model)
        else:
            self.db_list = None
        return self


class CreateFaceDbRequest(TeaModel):
    def __init__(self, name=None):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        return self


class CreateFaceDbResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteFaceRequest(TeaModel):
    def __init__(self, db_name=None, face_id=None):
        self.db_name = db_name
        self.face_id = face_id

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.face_id, 'face_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['FaceId'] = self.face_id
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.face_id = map.get('FaceId')
        return self


class DeleteFaceResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class DeleteFaceDbRequest(TeaModel):
    def __init__(self, name=None):
        self.name = name

    def validate(self):
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        return self


class DeleteFaceDbResponse(TeaModel):
    def __init__(self, request_id=None):
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        return self


class AddFaceRequest(TeaModel):
    def __init__(self, db_name=None, image_url=None, entity_id=None, extra_data=None):
        self.db_name = db_name
        self.image_url = image_url
        self.entity_id = entity_id
        self.extra_data = extra_data

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['ImageUrl'] = self.image_url
        result['EntityId'] = self.entity_id
        result['ExtraData'] = self.extra_data
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.image_url = map.get('ImageUrl')
        self.entity_id = map.get('EntityId')
        self.extra_data = map.get('ExtraData')
        return self


class AddFaceResponse(TeaModel):
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
            temp_model = AddFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AddFaceResponseData(TeaModel):
    def __init__(self, face_id=None):
        self.face_id = face_id

    def validate(self):
        self.validate_required(self.face_id, 'face_id')

    def to_map(self):
        result = {}
        result['FaceId'] = self.face_id
        return result

    def from_map(self, map={}):
        self.face_id = map.get('FaceId')
        return self


class AddFaceAdvanceRequest(TeaModel):
    def __init__(self, image_url_object=None, db_name=None, entity_id=None, extra_data=None):
        self.image_url_object = image_url_object
        self.db_name = db_name
        self.entity_id = entity_id
        self.extra_data = extra_data

    def validate(self):
        self.validate_required(self.image_url_object, 'image_url_object')
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['ImageUrlObject'] = self.image_url_object
        result['DbName'] = self.db_name
        result['EntityId'] = self.entity_id
        result['ExtraData'] = self.extra_data
        return result

    def from_map(self, map={}):
        self.image_url_object = map.get('ImageUrlObject')
        self.db_name = map.get('DbName')
        self.entity_id = map.get('EntityId')
        self.extra_data = map.get('ExtraData')
        return self


class RecognizeExpressionRequest(TeaModel):
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


class RecognizeExpressionResponse(TeaModel):
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
            temp_model = RecognizeExpressionResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeExpressionResponseDataElementsFaceRectangle(TeaModel):
    def __init__(self, height=None, left=None, top=None, width=None):
        self.height = height
        self.left = left
        self.top = top
        self.width = width

    def validate(self):
        self.validate_required(self.height, 'height')
        self.validate_required(self.left, 'left')
        self.validate_required(self.top, 'top')
        self.validate_required(self.width, 'width')

    def to_map(self):
        result = {}
        result['Height'] = self.height
        result['Left'] = self.left
        result['Top'] = self.top
        result['Width'] = self.width
        return result

    def from_map(self, map={}):
        self.height = map.get('Height')
        self.left = map.get('Left')
        self.top = map.get('Top')
        self.width = map.get('Width')
        return self


class RecognizeExpressionResponseDataElements(TeaModel):
    def __init__(self, expression=None, face_probability=None, face_rectangle=None):
        self.expression = expression
        self.face_probability = face_probability
        self.face_rectangle = face_rectangle

    def validate(self):
        self.validate_required(self.expression, 'expression')
        self.validate_required(self.face_probability, 'face_probability')
        self.validate_required(self.face_rectangle, 'face_rectangle')
        if self.face_rectangle:
            self.face_rectangle.validate()

    def to_map(self):
        result = {}
        result['Expression'] = self.expression
        result['FaceProbability'] = self.face_probability
        if self.face_rectangle is not None:
            result['FaceRectangle'] = self.face_rectangle.to_map()
        else:
            result['FaceRectangle'] = None
        return result

    def from_map(self, map={}):
        self.expression = map.get('Expression')
        self.face_probability = map.get('FaceProbability')
        if map.get('FaceRectangle') is not None:
            temp_model = RecognizeExpressionResponseDataElementsFaceRectangle()
            self.face_rectangle = temp_model.from_map(map['FaceRectangle'])
        else:
            self.face_rectangle = None
        return self


class RecognizeExpressionResponseData(TeaModel):
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
                temp_model = RecognizeExpressionResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class RecognizeExpressionAdvanceRequest(TeaModel):
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


class RecognizePublicFaceRequest(TeaModel):
    def __init__(self, task=None):
        self.task = []

    def validate(self):
        self.validate_required(self.task, 'task')
        if self.task:
            for k in self.task:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Task'] = []
        if self.task is not None:
            for k in self.task:
                result['Task'].append(k.to_map() if k else None)
        else:
            result['Task'] = None
        return result

    def from_map(self, map={}):
        self.task = []
        if map.get('Task') is not None:
            for k in map.get('Task'):
                temp_model = RecognizePublicFaceRequestTask()
                temp_model = temp_model.from_map(k)
                self.task.append(temp_model)
        else:
            self.task = None
        return self


class RecognizePublicFaceRequestTask(TeaModel):
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


class RecognizePublicFaceResponse(TeaModel):
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
            temp_model = RecognizePublicFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizePublicFaceResponseDataElementsResultsSubResultsFaces(TeaModel):
    def __init__(self, id=None, name=None, rate=None):
        self.id = id
        self.name = name
        self.rate = rate

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.rate, 'rate')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['Rate'] = self.rate
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.rate = map.get('Rate')
        return self


class RecognizePublicFaceResponseDataElementsResultsSubResults(TeaModel):
    def __init__(self, h=None, w=None, x=None, y=None, faces=None):
        self.h = h
        self.w = w
        self.x = x
        self.y = y
        self.faces = []

    def validate(self):
        self.validate_required(self.h, 'h')
        self.validate_required(self.w, 'w')
        self.validate_required(self.x, 'x')
        self.validate_required(self.y, 'y')
        self.validate_required(self.faces, 'faces')
        if self.faces:
            for k in self.faces:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['H'] = self.h
        result['W'] = self.w
        result['X'] = self.x
        result['Y'] = self.y
        result['Faces'] = []
        if self.faces is not None:
            for k in self.faces:
                result['Faces'].append(k.to_map() if k else None)
        else:
            result['Faces'] = None
        return result

    def from_map(self, map={}):
        self.h = map.get('H')
        self.w = map.get('W')
        self.x = map.get('X')
        self.y = map.get('Y')
        self.faces = []
        if map.get('Faces') is not None:
            for k in map.get('Faces'):
                temp_model = RecognizePublicFaceResponseDataElementsResultsSubResultsFaces()
                temp_model = temp_model.from_map(k)
                self.faces.append(temp_model)
        else:
            self.faces = None
        return self


class RecognizePublicFaceResponseDataElementsResults(TeaModel):
    def __init__(self, label=None, suggestion=None, rate=None, sub_results=None):
        self.label = label
        self.suggestion = suggestion
        self.rate = rate
        self.sub_results = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.sub_results, 'sub_results')
        if self.sub_results:
            for k in self.sub_results:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Rate'] = self.rate
        result['SubResults'] = []
        if self.sub_results is not None:
            for k in self.sub_results:
                result['SubResults'].append(k.to_map() if k else None)
        else:
            result['SubResults'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.rate = map.get('Rate')
        self.sub_results = []
        if map.get('SubResults') is not None:
            for k in map.get('SubResults'):
                temp_model = RecognizePublicFaceResponseDataElementsResultsSubResults()
                temp_model = temp_model.from_map(k)
                self.sub_results.append(temp_model)
        else:
            self.sub_results = None
        return self


class RecognizePublicFaceResponseDataElements(TeaModel):
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
                temp_model = RecognizePublicFaceResponseDataElementsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class RecognizePublicFaceResponseData(TeaModel):
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
                temp_model = RecognizePublicFaceResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectLivingFaceRequest(TeaModel):
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
                temp_model = DetectLivingFaceRequestTasks()
                temp_model = temp_model.from_map(k)
                self.tasks.append(temp_model)
        else:
            self.tasks = None
        return self


class DetectLivingFaceRequestTasks(TeaModel):
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


class DetectLivingFaceResponse(TeaModel):
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
            temp_model = DetectLivingFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectLivingFaceResponseDataElementsResultsFrames(TeaModel):
    def __init__(self, rate=None, url=None):
        self.rate = rate
        self.url = url

    def validate(self):
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.url, 'url')

    def to_map(self):
        result = {}
        result['Rate'] = self.rate
        result['Url'] = self.url
        return result

    def from_map(self, map={}):
        self.rate = map.get('Rate')
        self.url = map.get('Url')
        return self


class DetectLivingFaceResponseDataElementsResults(TeaModel):
    def __init__(self, label=None, suggestion=None, rate=None, frames=None):
        self.label = label
        self.suggestion = suggestion
        self.rate = rate
        self.frames = []

    def validate(self):
        self.validate_required(self.label, 'label')
        self.validate_required(self.suggestion, 'suggestion')
        self.validate_required(self.rate, 'rate')
        self.validate_required(self.frames, 'frames')
        if self.frames:
            for k in self.frames:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Label'] = self.label
        result['Suggestion'] = self.suggestion
        result['Rate'] = self.rate
        result['Frames'] = []
        if self.frames is not None:
            for k in self.frames:
                result['Frames'].append(k.to_map() if k else None)
        else:
            result['Frames'] = None
        return result

    def from_map(self, map={}):
        self.label = map.get('Label')
        self.suggestion = map.get('Suggestion')
        self.rate = map.get('Rate')
        self.frames = []
        if map.get('Frames') is not None:
            for k in map.get('Frames'):
                temp_model = DetectLivingFaceResponseDataElementsResultsFrames()
                temp_model = temp_model.from_map(k)
                self.frames.append(temp_model)
        else:
            self.frames = None
        return self


class DetectLivingFaceResponseDataElements(TeaModel):
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
                temp_model = DetectLivingFaceResponseDataElementsResults()
                temp_model = temp_model.from_map(k)
                self.results.append(temp_model)
        else:
            self.results = None
        return self


class DetectLivingFaceResponseData(TeaModel):
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
                temp_model = DetectLivingFaceResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectBodyCountRequest(TeaModel):
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


class DetectBodyCountResponse(TeaModel):
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
            temp_model = DetectBodyCountResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectBodyCountResponseData(TeaModel):
    def __init__(self, person_number=None):
        self.person_number = person_number

    def validate(self):
        self.validate_required(self.person_number, 'person_number')

    def to_map(self):
        result = {}
        result['PersonNumber'] = self.person_number
        return result

    def from_map(self, map={}):
        self.person_number = map.get('PersonNumber')
        return self


class DetectBodyCountAdvanceRequest(TeaModel):
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


class DetectMaskRequest(TeaModel):
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


class DetectMaskResponse(TeaModel):
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
            temp_model = DetectMaskResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectMaskResponseData(TeaModel):
    def __init__(self, mask=None, face_probability=None):
        self.mask = mask
        self.face_probability = face_probability

    def validate(self):
        self.validate_required(self.mask, 'mask')
        self.validate_required(self.face_probability, 'face_probability')

    def to_map(self):
        result = {}
        result['Mask'] = self.mask
        result['FaceProbability'] = self.face_probability
        return result

    def from_map(self, map={}):
        self.mask = map.get('Mask')
        self.face_probability = map.get('FaceProbability')
        return self


class DetectMaskAdvanceRequest(TeaModel):
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


class RecognizeFaceRequest(TeaModel):
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


class RecognizeFaceResponse(TeaModel):
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
            temp_model = RecognizeFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeFaceResponseData(TeaModel):
    def __init__(self, face_count=None, landmark_count=None, dense_feature_length=None, face_rectangles=None, face_probability_list=None, pose_list=None, landmarks=None, pupils=None, gender_list=None, age_list=None, expressions=None, glasses=None, dense_features=None):
        self.face_count = face_count
        self.landmark_count = landmark_count
        self.dense_feature_length = dense_feature_length
        self.face_rectangles = []
        self.face_probability_list = []
        self.pose_list = []
        self.landmarks = []
        self.pupils = []
        self.gender_list = []
        self.age_list = []
        self.expressions = []
        self.glasses = []
        self.dense_features = []

    def validate(self):
        self.validate_required(self.face_count, 'face_count')
        self.validate_required(self.landmark_count, 'landmark_count')
        self.validate_required(self.dense_feature_length, 'dense_feature_length')
        self.validate_required(self.face_rectangles, 'face_rectangles')
        self.validate_required(self.face_probability_list, 'face_probability_list')
        self.validate_required(self.pose_list, 'pose_list')
        self.validate_required(self.landmarks, 'landmarks')
        self.validate_required(self.pupils, 'pupils')
        self.validate_required(self.gender_list, 'gender_list')
        self.validate_required(self.age_list, 'age_list')
        self.validate_required(self.expressions, 'expressions')
        self.validate_required(self.glasses, 'glasses')
        self.validate_required(self.dense_features, 'dense_features')

    def to_map(self):
        result = {}
        result['FaceCount'] = self.face_count
        result['LandmarkCount'] = self.landmark_count
        result['DenseFeatureLength'] = self.dense_feature_length
        result['FaceRectangles'] = []
        if self.face_rectangles is not None:
            for k in self.face_rectangles:
                result['FaceRectangles'].append(k)
        else:
            result['FaceRectangles'] = None
        result['FaceProbabilityList'] = []
        if self.face_probability_list is not None:
            for k in self.face_probability_list:
                result['FaceProbabilityList'].append(k)
        else:
            result['FaceProbabilityList'] = None
        result['PoseList'] = []
        if self.pose_list is not None:
            for k in self.pose_list:
                result['PoseList'].append(k)
        else:
            result['PoseList'] = None
        result['Landmarks'] = []
        if self.landmarks is not None:
            for k in self.landmarks:
                result['Landmarks'].append(k)
        else:
            result['Landmarks'] = None
        result['Pupils'] = []
        if self.pupils is not None:
            for k in self.pupils:
                result['Pupils'].append(k)
        else:
            result['Pupils'] = None
        result['GenderList'] = []
        if self.gender_list is not None:
            for k in self.gender_list:
                result['GenderList'].append(k)
        else:
            result['GenderList'] = None
        result['AgeList'] = []
        if self.age_list is not None:
            for k in self.age_list:
                result['AgeList'].append(k)
        else:
            result['AgeList'] = None
        result['Expressions'] = []
        if self.expressions is not None:
            for k in self.expressions:
                result['Expressions'].append(k)
        else:
            result['Expressions'] = None
        result['Glasses'] = []
        if self.glasses is not None:
            for k in self.glasses:
                result['Glasses'].append(k)
        else:
            result['Glasses'] = None
        result['DenseFeatures'] = []
        if self.dense_features is not None:
            for k in self.dense_features:
                result['DenseFeatures'].append(k)
        else:
            result['DenseFeatures'] = None
        return result

    def from_map(self, map={}):
        self.face_count = map.get('FaceCount')
        self.landmark_count = map.get('LandmarkCount')
        self.dense_feature_length = map.get('DenseFeatureLength')
        self.face_rectangles = []
        if map.get('FaceRectangles') is not None:
            for k in map.get('FaceRectangles'):
                self.face_rectangles.append(k)
        else:
            self.face_rectangles = None
        self.face_probability_list = []
        if map.get('FaceProbabilityList') is not None:
            for k in map.get('FaceProbabilityList'):
                self.face_probability_list.append(k)
        else:
            self.face_probability_list = None
        self.pose_list = []
        if map.get('PoseList') is not None:
            for k in map.get('PoseList'):
                self.pose_list.append(k)
        else:
            self.pose_list = None
        self.landmarks = []
        if map.get('Landmarks') is not None:
            for k in map.get('Landmarks'):
                self.landmarks.append(k)
        else:
            self.landmarks = None
        self.pupils = []
        if map.get('Pupils') is not None:
            for k in map.get('Pupils'):
                self.pupils.append(k)
        else:
            self.pupils = None
        self.gender_list = []
        if map.get('GenderList') is not None:
            for k in map.get('GenderList'):
                self.gender_list.append(k)
        else:
            self.gender_list = None
        self.age_list = []
        if map.get('AgeList') is not None:
            for k in map.get('AgeList'):
                self.age_list.append(k)
        else:
            self.age_list = None
        self.expressions = []
        if map.get('Expressions') is not None:
            for k in map.get('Expressions'):
                self.expressions.append(k)
        else:
            self.expressions = None
        self.glasses = []
        if map.get('Glasses') is not None:
            for k in map.get('Glasses'):
                self.glasses.append(k)
        else:
            self.glasses = None
        self.dense_features = []
        if map.get('DenseFeatures') is not None:
            for k in map.get('DenseFeatures'):
                self.dense_features.append(k)
        else:
            self.dense_features = None
        return self


class RecognizeFaceAdvanceRequest(TeaModel):
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


class CompareFaceRequest(TeaModel):
    def __init__(self, image_urla=None, image_urlb=None):
        self.image_urla = image_urla
        self.image_urlb = image_urlb

    def validate(self):
        self.validate_required(self.image_urla, 'image_urla')
        self.validate_required(self.image_urlb, 'image_urlb')

    def to_map(self):
        result = {}
        result['ImageURLA'] = self.image_urla
        result['ImageURLB'] = self.image_urlb
        return result

    def from_map(self, map={}):
        self.image_urla = map.get('ImageURLA')
        self.image_urlb = map.get('ImageURLB')
        return self


class CompareFaceResponse(TeaModel):
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
            temp_model = CompareFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class CompareFaceResponseData(TeaModel):
    def __init__(self, confidence=None, thresholds=None, rect_alist=None, rect_blist=None):
        self.confidence = confidence
        self.thresholds = []
        self.rect_alist = []
        self.rect_blist = []

    def validate(self):
        self.validate_required(self.confidence, 'confidence')
        self.validate_required(self.thresholds, 'thresholds')
        self.validate_required(self.rect_alist, 'rect_alist')
        self.validate_required(self.rect_blist, 'rect_blist')

    def to_map(self):
        result = {}
        result['Confidence'] = self.confidence
        result['Thresholds'] = []
        if self.thresholds is not None:
            for k in self.thresholds:
                result['Thresholds'].append(k)
        else:
            result['Thresholds'] = None
        result['RectAList'] = []
        if self.rect_alist is not None:
            for k in self.rect_alist:
                result['RectAList'].append(k)
        else:
            result['RectAList'] = None
        result['RectBList'] = []
        if self.rect_blist is not None:
            for k in self.rect_blist:
                result['RectBList'].append(k)
        else:
            result['RectBList'] = None
        return result

    def from_map(self, map={}):
        self.confidence = map.get('Confidence')
        self.thresholds = []
        if map.get('Thresholds') is not None:
            for k in map.get('Thresholds'):
                self.thresholds.append(k)
        else:
            self.thresholds = None
        self.rect_alist = []
        if map.get('RectAList') is not None:
            for k in map.get('RectAList'):
                self.rect_alist.append(k)
        else:
            self.rect_alist = None
        self.rect_blist = []
        if map.get('RectBList') is not None:
            for k in map.get('RectBList'):
                self.rect_blist.append(k)
        else:
            self.rect_blist = None
        return self


class DetectFaceRequest(TeaModel):
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


class DetectFaceResponse(TeaModel):
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
            temp_model = DetectFaceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectFaceResponseData(TeaModel):
    def __init__(self, face_count=None, landmark_count=None, face_rectangles=None, face_probability_list=None, pose_list=None, landmarks=None, pupils=None):
        self.face_count = face_count
        self.landmark_count = landmark_count
        self.face_rectangles = []
        self.face_probability_list = []
        self.pose_list = []
        self.landmarks = []
        self.pupils = []

    def validate(self):
        self.validate_required(self.face_count, 'face_count')
        self.validate_required(self.landmark_count, 'landmark_count')
        self.validate_required(self.face_rectangles, 'face_rectangles')
        self.validate_required(self.face_probability_list, 'face_probability_list')
        self.validate_required(self.pose_list, 'pose_list')
        self.validate_required(self.landmarks, 'landmarks')
        self.validate_required(self.pupils, 'pupils')

    def to_map(self):
        result = {}
        result['FaceCount'] = self.face_count
        result['LandmarkCount'] = self.landmark_count
        result['FaceRectangles'] = []
        if self.face_rectangles is not None:
            for k in self.face_rectangles:
                result['FaceRectangles'].append(k)
        else:
            result['FaceRectangles'] = None
        result['FaceProbabilityList'] = []
        if self.face_probability_list is not None:
            for k in self.face_probability_list:
                result['FaceProbabilityList'].append(k)
        else:
            result['FaceProbabilityList'] = None
        result['PoseList'] = []
        if self.pose_list is not None:
            for k in self.pose_list:
                result['PoseList'].append(k)
        else:
            result['PoseList'] = None
        result['Landmarks'] = []
        if self.landmarks is not None:
            for k in self.landmarks:
                result['Landmarks'].append(k)
        else:
            result['Landmarks'] = None
        result['Pupils'] = []
        if self.pupils is not None:
            for k in self.pupils:
                result['Pupils'].append(k)
        else:
            result['Pupils'] = None
        return result

    def from_map(self, map={}):
        self.face_count = map.get('FaceCount')
        self.landmark_count = map.get('LandmarkCount')
        self.face_rectangles = []
        if map.get('FaceRectangles') is not None:
            for k in map.get('FaceRectangles'):
                self.face_rectangles.append(k)
        else:
            self.face_rectangles = None
        self.face_probability_list = []
        if map.get('FaceProbabilityList') is not None:
            for k in map.get('FaceProbabilityList'):
                self.face_probability_list.append(k)
        else:
            self.face_probability_list = None
        self.pose_list = []
        if map.get('PoseList') is not None:
            for k in map.get('PoseList'):
                self.pose_list.append(k)
        else:
            self.pose_list = None
        self.landmarks = []
        if map.get('Landmarks') is not None:
            for k in map.get('Landmarks'):
                self.landmarks.append(k)
        else:
            self.landmarks = None
        self.pupils = []
        if map.get('Pupils') is not None:
            for k in map.get('Pupils'):
                self.pupils.append(k)
        else:
            self.pupils = None
        return self


class DetectFaceAdvanceRequest(TeaModel):
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

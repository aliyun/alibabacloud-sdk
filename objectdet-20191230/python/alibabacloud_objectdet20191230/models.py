# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GenerateVehicleRepairPlanRequest(TeaModel):
    def __init__(self, damage_image_list=None):
        self.damage_image_list = []

    def validate(self):
        self.validate_required(self.damage_image_list, 'damage_image_list')
        if self.damage_image_list:
            for k in self.damage_image_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DamageImageList'] = []
        if self.damage_image_list is not None:
            for k in self.damage_image_list:
                result['DamageImageList'].append(k.to_map() if k else None)
        else:
            result['DamageImageList'] = None
        return result

    def from_map(self, map={}):
        self.damage_image_list = []
        if map.get('DamageImageList') is not None:
            for k in map.get('DamageImageList'):
                temp_model = GenerateVehicleRepairPlanRequestDamageImageList()
                temp_model = temp_model.from_map(k)
                self.damage_image_list.append(temp_model)
        else:
            self.damage_image_list = None
        return self


class GenerateVehicleRepairPlanRequestDamageImageList(TeaModel):
    def __init__(self, image_url=None, create_time_stamp=None):
        self.image_url = image_url
        self.create_time_stamp = create_time_stamp

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.create_time_stamp, 'create_time_stamp')

    def to_map(self):
        result = {}
        result['ImageUrl'] = self.image_url
        result['CreateTimeStamp'] = self.create_time_stamp
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageUrl')
        self.create_time_stamp = map.get('CreateTimeStamp')
        return self


class GenerateVehicleRepairPlanResponse(TeaModel):
    def __init__(self, request_id=None, http_code=None, code=None, error_message=None, success=None, data=None):
        self.request_id = request_id
        self.http_code = http_code
        self.code = code
        self.error_message = error_message
        self.success = success
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.http_code, 'http_code')
        self.validate_required(self.code, 'code')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['HttpCode'] = self.http_code
        result['Code'] = self.code
        result['ErrorMessage'] = self.error_message
        result['Success'] = self.success
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.http_code = map.get('HttpCode')
        self.code = map.get('Code')
        self.error_message = map.get('ErrorMessage')
        self.success = map.get('Success')
        if map.get('Data') is not None:
            temp_model = GenerateVehicleRepairPlanResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GenerateVehicleRepairPlanResponseData(TeaModel):
    def __init__(self, task_id=None):
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        return self


class GetVehicleRepairPlanRequest(TeaModel):
    def __init__(self, task_id=None, car_number_image=None, vin_code_image=None):
        self.task_id = task_id
        self.car_number_image = car_number_image
        self.vin_code_image = vin_code_image

    def validate(self):
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['TaskId'] = self.task_id
        result['CarNumberImage'] = self.car_number_image
        result['VinCodeImage'] = self.vin_code_image
        return result

    def from_map(self, map={}):
        self.task_id = map.get('TaskId')
        self.car_number_image = map.get('CarNumberImage')
        self.vin_code_image = map.get('VinCodeImage')
        return self


class GetVehicleRepairPlanResponse(TeaModel):
    def __init__(self, request_id=None, code=None, error_message=None, success=None, http_code=None, data=None):
        self.request_id = request_id
        self.code = code
        self.error_message = error_message
        self.success = success
        self.http_code = http_code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.error_message, 'error_message')
        self.validate_required(self.success, 'success')
        self.validate_required(self.http_code, 'http_code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['ErrorMessage'] = self.error_message
        result['Success'] = self.success
        result['HttpCode'] = self.http_code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.error_message = map.get('ErrorMessage')
        self.success = map.get('Success')
        self.http_code = map.get('HttpCode')
        if map.get('Data') is not None:
            temp_model = GetVehicleRepairPlanResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetVehicleRepairPlanResponseDataRepairParts(TeaModel):
    def __init__(self, garage_type=None, oe_match=None, out_standard_parts_id=None, out_standard_parts_name=None, part_name_match=None, parts_std_code=None, parts_std_name=None, relation_type=None, repair_fee=None, repair_type=None, repair_type_name=None):
        self.garage_type = garage_type
        self.oe_match = oe_match
        self.out_standard_parts_id = out_standard_parts_id
        self.out_standard_parts_name = out_standard_parts_name
        self.part_name_match = part_name_match
        self.parts_std_code = parts_std_code
        self.parts_std_name = parts_std_name
        self.relation_type = relation_type
        self.repair_fee = repair_fee
        self.repair_type = repair_type
        self.repair_type_name = repair_type_name

    def validate(self):
        self.validate_required(self.garage_type, 'garage_type')
        self.validate_required(self.oe_match, 'oe_match')
        self.validate_required(self.out_standard_parts_id, 'out_standard_parts_id')
        self.validate_required(self.out_standard_parts_name, 'out_standard_parts_name')
        self.validate_required(self.part_name_match, 'part_name_match')
        self.validate_required(self.parts_std_code, 'parts_std_code')
        self.validate_required(self.parts_std_name, 'parts_std_name')
        self.validate_required(self.relation_type, 'relation_type')
        self.validate_required(self.repair_fee, 'repair_fee')
        self.validate_required(self.repair_type, 'repair_type')
        self.validate_required(self.repair_type_name, 'repair_type_name')

    def to_map(self):
        result = {}
        result['GarageType'] = self.garage_type
        result['OeMatch'] = self.oe_match
        result['OutStandardPartsId'] = self.out_standard_parts_id
        result['OutStandardPartsName'] = self.out_standard_parts_name
        result['PartNameMatch'] = self.part_name_match
        result['PartsStdCode'] = self.parts_std_code
        result['PartsStdName'] = self.parts_std_name
        result['RelationType'] = self.relation_type
        result['RepairFee'] = self.repair_fee
        result['RepairType'] = self.repair_type
        result['RepairTypeName'] = self.repair_type_name
        return result

    def from_map(self, map={}):
        self.garage_type = map.get('GarageType')
        self.oe_match = map.get('OeMatch')
        self.out_standard_parts_id = map.get('OutStandardPartsId')
        self.out_standard_parts_name = map.get('OutStandardPartsName')
        self.part_name_match = map.get('PartNameMatch')
        self.parts_std_code = map.get('PartsStdCode')
        self.parts_std_name = map.get('PartsStdName')
        self.relation_type = map.get('RelationType')
        self.repair_fee = map.get('RepairFee')
        self.repair_type = map.get('RepairType')
        self.repair_type_name = map.get('RepairTypeName')
        return self


class GetVehicleRepairPlanResponseData(TeaModel):
    def __init__(self, frame_no=None, repair_parts=None):
        self.frame_no = frame_no
        self.repair_parts = []

    def validate(self):
        self.validate_required(self.frame_no, 'frame_no')
        self.validate_required(self.repair_parts, 'repair_parts')
        if self.repair_parts:
            for k in self.repair_parts:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FrameNo'] = self.frame_no
        result['RepairParts'] = []
        if self.repair_parts is not None:
            for k in self.repair_parts:
                result['RepairParts'].append(k.to_map() if k else None)
        else:
            result['RepairParts'] = None
        return result

    def from_map(self, map={}):
        self.frame_no = map.get('FrameNo')
        self.repair_parts = []
        if map.get('RepairParts') is not None:
            for k in map.get('RepairParts'):
                temp_model = GetVehicleRepairPlanResponseDataRepairParts()
                temp_model = temp_model.from_map(k)
                self.repair_parts.append(temp_model)
        else:
            self.repair_parts = None
        return self


class DetectTransparentImageRequest(TeaModel):
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


class DetectTransparentImageResponse(TeaModel):
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
            temp_model = DetectTransparentImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectTransparentImageResponseDataElements(TeaModel):
    def __init__(self, transparent_image=None):
        self.transparent_image = transparent_image

    def validate(self):
        self.validate_required(self.transparent_image, 'transparent_image')

    def to_map(self):
        result = {}
        result['TransparentImage'] = self.transparent_image
        return result

    def from_map(self, map={}):
        self.transparent_image = map.get('TransparentImage')
        return self


class DetectTransparentImageResponseData(TeaModel):
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
                temp_model = DetectTransparentImageResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectTransparentImageAdvanceRequest(TeaModel):
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


class DetectObjectRequest(TeaModel):
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


class DetectObjectResponse(TeaModel):
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
            temp_model = DetectObjectResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectObjectResponseDataElements(TeaModel):
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


class DetectObjectResponseData(TeaModel):
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
                temp_model = DetectObjectResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectObjectAdvanceRequest(TeaModel):
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


class DetectWhiteBaseImageRequest(TeaModel):
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


class DetectWhiteBaseImageResponse(TeaModel):
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
            temp_model = DetectWhiteBaseImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectWhiteBaseImageResponseDataElements(TeaModel):
    def __init__(self, white_base=None):
        self.white_base = white_base

    def validate(self):
        self.validate_required(self.white_base, 'white_base')

    def to_map(self):
        result = {}
        result['WhiteBase'] = self.white_base
        return result

    def from_map(self, map={}):
        self.white_base = map.get('WhiteBase')
        return self


class DetectWhiteBaseImageResponseData(TeaModel):
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
                temp_model = DetectWhiteBaseImageResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class DetectWhiteBaseImageAdvanceRequest(TeaModel):
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


class ClassifyVehicleInsuranceRequest(TeaModel):
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


class ClassifyVehicleInsuranceResponse(TeaModel):
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
            temp_model = ClassifyVehicleInsuranceResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ClassifyVehicleInsuranceResponseDataLabels(TeaModel):
    def __init__(self, score=None, name=None):
        self.score = score
        self.name = name

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.score = map.get('Score')
        self.name = map.get('Name')
        return self


class ClassifyVehicleInsuranceResponseData(TeaModel):
    def __init__(self, threshold=None, labels=None):
        self.threshold = threshold
        self.labels = []

    def validate(self):
        self.validate_required(self.threshold, 'threshold')
        self.validate_required(self.labels, 'labels')
        if self.labels:
            for k in self.labels:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Threshold'] = self.threshold
        result['Labels'] = []
        if self.labels is not None:
            for k in self.labels:
                result['Labels'].append(k.to_map() if k else None)
        else:
            result['Labels'] = None
        return result

    def from_map(self, map={}):
        self.threshold = map.get('Threshold')
        self.labels = []
        if map.get('Labels') is not None:
            for k in map.get('Labels'):
                temp_model = ClassifyVehicleInsuranceResponseDataLabels()
                temp_model = temp_model.from_map(k)
                self.labels.append(temp_model)
        else:
            self.labels = None
        return self


class ClassifyVehicleInsuranceAdvanceRequest(TeaModel):
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


class RecognizeVehicleDashboardRequest(TeaModel):
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


class RecognizeVehicleDashboardResponse(TeaModel):
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
            temp_model = RecognizeVehicleDashboardResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeVehicleDashboardResponseDataElements(TeaModel):
    def __init__(self, score=None, class_name=None, label=None, boxes=None):
        self.score = score
        self.class_name = class_name
        self.label = label
        self.boxes = []

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.class_name, 'class_name')
        self.validate_required(self.label, 'label')
        self.validate_required(self.boxes, 'boxes')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['ClassName'] = self.class_name
        result['Label'] = self.label
        result['Boxes'] = []
        if self.boxes is not None:
            for k in self.boxes:
                result['Boxes'].append(k)
        else:
            result['Boxes'] = None
        return result

    def from_map(self, map={}):
        self.score = map.get('Score')
        self.class_name = map.get('ClassName')
        self.label = map.get('Label')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                self.boxes.append(k)
        else:
            self.boxes = None
        return self


class RecognizeVehicleDashboardResponseData(TeaModel):
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
                temp_model = RecognizeVehicleDashboardResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class RecognizeVehicleDashboardAdvanceRequest(TeaModel):
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


class RecognizeVehicleDamageRequest(TeaModel):
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


class RecognizeVehicleDamageResponse(TeaModel):
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
            temp_model = RecognizeVehicleDamageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeVehicleDamageResponseDataElements(TeaModel):
    def __init__(self, score=None, type=None, scores=None, boxes=None):
        self.score = score
        self.type = type
        self.scores = []
        self.boxes = []

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.type, 'type')
        self.validate_required(self.scores, 'scores')
        self.validate_required(self.boxes, 'boxes')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['Type'] = self.type
        result['Scores'] = []
        if self.scores is not None:
            for k in self.scores:
                result['Scores'].append(k)
        else:
            result['Scores'] = None
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
        self.scores = []
        if map.get('Scores') is not None:
            for k in map.get('Scores'):
                self.scores.append(k)
        else:
            self.scores = None
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                self.boxes.append(k)
        else:
            self.boxes = None
        return self


class RecognizeVehicleDamageResponseData(TeaModel):
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
                temp_model = RecognizeVehicleDamageResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        return self


class RecognizeVehicleDamageAdvanceRequest(TeaModel):
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


class RecognizeVehiclePartsRequest(TeaModel):
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


class RecognizeVehiclePartsResponse(TeaModel):
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
            temp_model = RecognizeVehiclePartsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeVehiclePartsResponseDataElements(TeaModel):
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


class RecognizeVehiclePartsResponseData(TeaModel):
    def __init__(self, elements=None, origin_shapes=None):
        self.elements = []
        self.origin_shapes = []

    def validate(self):
        self.validate_required(self.elements, 'elements')
        if self.elements:
            for k in self.elements:
                if k :
                    k.validate()
        self.validate_required(self.origin_shapes, 'origin_shapes')

    def to_map(self):
        result = {}
        result['Elements'] = []
        if self.elements is not None:
            for k in self.elements:
                result['Elements'].append(k.to_map() if k else None)
        else:
            result['Elements'] = None
        result['OriginShapes'] = []
        if self.origin_shapes is not None:
            for k in self.origin_shapes:
                result['OriginShapes'].append(k)
        else:
            result['OriginShapes'] = None
        return result

    def from_map(self, map={}):
        self.elements = []
        if map.get('Elements') is not None:
            for k in map.get('Elements'):
                temp_model = RecognizeVehiclePartsResponseDataElements()
                temp_model = temp_model.from_map(k)
                self.elements.append(temp_model)
        else:
            self.elements = None
        self.origin_shapes = []
        if map.get('OriginShapes') is not None:
            for k in map.get('OriginShapes'):
                self.origin_shapes.append(k)
        else:
            self.origin_shapes = None
        return self


class RecognizeVehiclePartsAdvanceRequest(TeaModel):
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


class DetectVehicleRequest(TeaModel):
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


class DetectVehicleResponse(TeaModel):
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
            temp_model = DetectVehicleResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectVehicleResponseDataDetectObjectInfoList(TeaModel):
    def __init__(self, score=None, type=None, id=None, boxes=None):
        self.score = score
        self.type = type
        self.id = id
        self.boxes = []

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.type, 'type')
        self.validate_required(self.id, 'id')
        self.validate_required(self.boxes, 'boxes')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['Type'] = self.type
        result['Id'] = self.id
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
        self.id = map.get('Id')
        self.boxes = []
        if map.get('Boxes') is not None:
            for k in map.get('Boxes'):
                self.boxes.append(k)
        else:
            self.boxes = None
        return self


class DetectVehicleResponseData(TeaModel):
    def __init__(self, width=None, height=None, detect_object_info_list=None):
        self.width = width
        self.height = height
        self.detect_object_info_list = []

    def validate(self):
        self.validate_required(self.width, 'width')
        self.validate_required(self.height, 'height')
        self.validate_required(self.detect_object_info_list, 'detect_object_info_list')
        if self.detect_object_info_list:
            for k in self.detect_object_info_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Width'] = self.width
        result['Height'] = self.height
        result['DetectObjectInfoList'] = []
        if self.detect_object_info_list is not None:
            for k in self.detect_object_info_list:
                result['DetectObjectInfoList'].append(k.to_map() if k else None)
        else:
            result['DetectObjectInfoList'] = None
        return result

    def from_map(self, map={}):
        self.width = map.get('Width')
        self.height = map.get('Height')
        self.detect_object_info_list = []
        if map.get('DetectObjectInfoList') is not None:
            for k in map.get('DetectObjectInfoList'):
                temp_model = DetectVehicleResponseDataDetectObjectInfoList()
                temp_model = temp_model.from_map(k)
                self.detect_object_info_list.append(temp_model)
        else:
            self.detect_object_info_list = None
        return self


class DetectVehicleAdvanceRequest(TeaModel):
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


class DetectMainBodyRequest(TeaModel):
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


class DetectMainBodyResponse(TeaModel):
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
            temp_model = DetectMainBodyResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class DetectMainBodyResponseDataLocation(TeaModel):
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


class DetectMainBodyResponseData(TeaModel):
    def __init__(self, location=None):
        self.location = location

    def validate(self):
        self.validate_required(self.location, 'location')
        if self.location:
            self.location.validate()

    def to_map(self):
        result = {}
        if self.location is not None:
            result['Location'] = self.location.to_map()
        else:
            result['Location'] = None
        return result

    def from_map(self, map={}):
        if map.get('Location') is not None:
            temp_model = DetectMainBodyResponseDataLocation()
            self.location = temp_model.from_map(map['Location'])
        else:
            self.location = None
        return self


class DetectMainBodyAdvanceRequest(TeaModel):
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

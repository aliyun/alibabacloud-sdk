# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class RecognizeFurnitureAttributeRequest(TeaModel):
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


class RecognizeFurnitureAttributeResponse(TeaModel):
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
            temp_model = RecognizeFurnitureAttributeResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeFurnitureAttributeResponseData(TeaModel):
    def __init__(self, pred_style_id=None, pred_style=None, pred_probability=None):
        self.pred_style_id = pred_style_id
        self.pred_style = pred_style
        self.pred_probability = pred_probability

    def validate(self):
        self.validate_required(self.pred_style_id, 'pred_style_id')
        self.validate_required(self.pred_style, 'pred_style')
        self.validate_required(self.pred_probability, 'pred_probability')

    def to_map(self):
        result = {}
        result['PredStyleId'] = self.pred_style_id
        result['PredStyle'] = self.pred_style
        result['PredProbability'] = self.pred_probability
        return result

    def from_map(self, map={}):
        self.pred_style_id = map.get('PredStyleId')
        self.pred_style = map.get('PredStyle')
        self.pred_probability = map.get('PredProbability')
        return self


class RecognizeFurnitureAttributeAdvanceRequest(TeaModel):
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


class RecognizeFurnitureSpuRequest(TeaModel):
    def __init__(self, image_url=None, xlength=None, ylength=None, zlength=None):
        self.image_url = image_url
        self.xlength = xlength
        self.ylength = ylength
        self.zlength = zlength

    def validate(self):
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.xlength, 'xlength')
        self.validate_required(self.ylength, 'ylength')
        self.validate_required(self.zlength, 'zlength')

    def to_map(self):
        result = {}
        result['ImageURL'] = self.image_url
        result['XLength'] = self.xlength
        result['YLength'] = self.ylength
        result['ZLength'] = self.zlength
        return result

    def from_map(self, map={}):
        self.image_url = map.get('ImageURL')
        self.xlength = map.get('XLength')
        self.ylength = map.get('YLength')
        self.zlength = map.get('ZLength')
        return self


class RecognizeFurnitureSpuResponse(TeaModel):
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
            temp_model = RecognizeFurnitureSpuResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class RecognizeFurnitureSpuResponseData(TeaModel):
    def __init__(self, pred_cate_id=None, pred_cate=None, pred_probability=None):
        self.pred_cate_id = pred_cate_id
        self.pred_cate = pred_cate
        self.pred_probability = pred_probability

    def validate(self):
        self.validate_required(self.pred_cate_id, 'pred_cate_id')
        self.validate_required(self.pred_cate, 'pred_cate')
        self.validate_required(self.pred_probability, 'pred_probability')

    def to_map(self):
        result = {}
        result['PredCateId'] = self.pred_cate_id
        result['PredCate'] = self.pred_cate
        result['PredProbability'] = self.pred_probability
        return result

    def from_map(self, map={}):
        self.pred_cate_id = map.get('PredCateId')
        self.pred_cate = map.get('PredCate')
        self.pred_probability = map.get('PredProbability')
        return self


class RecognizeFurnitureSpuAdvanceRequest(TeaModel):
    def __init__(self, image_urlobject=None, xlength=None, ylength=None, zlength=None):
        self.image_urlobject = image_urlobject
        self.xlength = xlength
        self.ylength = ylength
        self.zlength = zlength

    def validate(self):
        self.validate_required(self.image_urlobject, 'image_urlobject')
        self.validate_required(self.xlength, 'xlength')
        self.validate_required(self.ylength, 'ylength')
        self.validate_required(self.zlength, 'zlength')

    def to_map(self):
        result = {}
        result['ImageURLObject'] = self.image_urlobject
        result['XLength'] = self.xlength
        result['YLength'] = self.ylength
        result['ZLength'] = self.zlength
        return result

    def from_map(self, map={}):
        self.image_urlobject = map.get('ImageURLObject')
        self.xlength = map.get('XLength')
        self.ylength = map.get('YLength')
        self.zlength = map.get('ZLength')
        return self


class ClassifyCommodityRequest(TeaModel):
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


class ClassifyCommodityResponse(TeaModel):
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
            temp_model = ClassifyCommodityResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ClassifyCommodityResponseDataCategories(TeaModel):
    def __init__(self, score=None, category_name=None, category_id=None):
        self.score = score
        self.category_name = category_name
        self.category_id = category_id

    def validate(self):
        self.validate_required(self.score, 'score')
        self.validate_required(self.category_name, 'category_name')
        self.validate_required(self.category_id, 'category_id')

    def to_map(self):
        result = {}
        result['Score'] = self.score
        result['CategoryName'] = self.category_name
        result['CategoryId'] = self.category_id
        return result

    def from_map(self, map={}):
        self.score = map.get('Score')
        self.category_name = map.get('CategoryName')
        self.category_id = map.get('CategoryId')
        return self


class ClassifyCommodityResponseData(TeaModel):
    def __init__(self, categories=None):
        self.categories = []

    def validate(self):
        self.validate_required(self.categories, 'categories')
        if self.categories:
            for k in self.categories:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Categories'] = []
        if self.categories is not None:
            for k in self.categories:
                result['Categories'].append(k.to_map() if k else None)
        else:
            result['Categories'] = None
        return result

    def from_map(self, map={}):
        self.categories = []
        if map.get('Categories') is not None:
            for k in map.get('Categories'):
                temp_model = ClassifyCommodityResponseDataCategories()
                temp_model = temp_model.from_map(k)
                self.categories.append(temp_model)
        else:
            self.categories = None
        return self


class ClassifyCommodityAdvanceRequest(TeaModel):
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

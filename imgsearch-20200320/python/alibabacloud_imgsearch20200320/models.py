# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListImageDbsRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class ListImageDbsResponse(TeaModel):
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
            temp_model = ListImageDbsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListImageDbsResponseDataDbList(TeaModel):
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


class ListImageDbsResponseData(TeaModel):
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
                temp_model = ListImageDbsResponseDataDbList()
                temp_model = temp_model.from_map(k)
                self.db_list.append(temp_model)
        else:
            self.db_list = None
        return self
class ListImagesRequest(TeaModel):
    def __init__(self, db_name=None, token=None, offset=None, limit=None, order=None, entity_id_prefix=None):
        self.db_name = db_name
        self.token = token
        self.offset = offset
        self.limit = limit
        self.order = order
        self.entity_id_prefix = entity_id_prefix

    def validate(self):
        self.validate_required(self.db_name, 'db_name')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['Token'] = self.token
        result['Offset'] = self.offset
        result['Limit'] = self.limit
        result['Order'] = self.order
        result['EntityIdPrefix'] = self.entity_id_prefix
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.token = map.get('Token')
        self.offset = map.get('Offset')
        self.limit = map.get('Limit')
        self.order = map.get('Order')
        self.entity_id_prefix = map.get('EntityIdPrefix')
        return self


class ListImagesResponse(TeaModel):
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
            temp_model = ListImagesResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListImagesResponseDataImageList(TeaModel):
    def __init__(self, data_id=None, extra_data=None, entity_id=None, updated_at=None, created_at=None):
        self.data_id = data_id
        self.extra_data = extra_data
        self.entity_id = entity_id
        self.updated_at = updated_at
        self.created_at = created_at

    def validate(self):
        self.validate_required(self.data_id, 'data_id')
        self.validate_required(self.extra_data, 'extra_data')
        self.validate_required(self.entity_id, 'entity_id')
        self.validate_required(self.updated_at, 'updated_at')
        self.validate_required(self.created_at, 'created_at')

    def to_map(self):
        result = {}
        result['DataId'] = self.data_id
        result['ExtraData'] = self.extra_data
        result['EntityId'] = self.entity_id
        result['UpdatedAt'] = self.updated_at
        result['CreatedAt'] = self.created_at
        return result

    def from_map(self, map={}):
        self.data_id = map.get('DataId')
        self.extra_data = map.get('ExtraData')
        self.entity_id = map.get('EntityId')
        self.updated_at = map.get('UpdatedAt')
        self.created_at = map.get('CreatedAt')
        return self


class ListImagesResponseData(TeaModel):
    def __init__(self, token=None, total_count=None, image_list=None):
        self.token = token
        self.total_count = total_count
        self.image_list = []

    def validate(self):
        self.validate_required(self.token, 'token')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.image_list, 'image_list')
        if self.image_list:
            for k in self.image_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Token'] = self.token
        result['TotalCount'] = self.total_count
        result['ImageList'] = []
        if self.image_list is not None:
            for k in self.image_list:
                result['ImageList'].append(k.to_map() if k else None)
        else:
            result['ImageList'] = None
        return result

    def from_map(self, map={}):
        self.token = map.get('Token')
        self.total_count = map.get('TotalCount')
        self.image_list = []
        if map.get('ImageList') is not None:
            for k in map.get('ImageList'):
                temp_model = ListImagesResponseDataImageList()
                temp_model = temp_model.from_map(k)
                self.image_list.append(temp_model)
        else:
            self.image_list = None
        return self
class SearchImageRequest(TeaModel):
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


class SearchImageResponse(TeaModel):
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
            temp_model = SearchImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class SearchImageResponseDataMatchList(TeaModel):
    def __init__(self, data_id=None, extra_data=None, entity_id=None, image_url=None, score=None):
        self.data_id = data_id
        self.extra_data = extra_data
        self.entity_id = entity_id
        self.image_url = image_url
        self.score = score

    def validate(self):
        self.validate_required(self.data_id, 'data_id')
        self.validate_required(self.extra_data, 'extra_data')
        self.validate_required(self.entity_id, 'entity_id')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.score, 'score')

    def to_map(self):
        result = {}
        result['DataId'] = self.data_id
        result['ExtraData'] = self.extra_data
        result['EntityId'] = self.entity_id
        result['ImageUrl'] = self.image_url
        result['Score'] = self.score
        return result

    def from_map(self, map={}):
        self.data_id = map.get('DataId')
        self.extra_data = map.get('ExtraData')
        self.entity_id = map.get('EntityId')
        self.image_url = map.get('ImageUrl')
        self.score = map.get('Score')
        return self


class SearchImageResponseData(TeaModel):
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
                temp_model = SearchImageResponseDataMatchList()
                temp_model = temp_model.from_map(k)
                self.match_list.append(temp_model)
        else:
            self.match_list = None
        return self
class SearchImageAdvanceRequest(TeaModel):
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


class AddImageRequest(TeaModel):
    def __init__(self, db_name=None, image_url=None, extra_data=None, entity_id=None):
        self.db_name = db_name
        self.image_url = image_url
        self.extra_data = extra_data
        self.entity_id = entity_id

    def validate(self):
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.image_url, 'image_url')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['DbName'] = self.db_name
        result['ImageUrl'] = self.image_url
        result['ExtraData'] = self.extra_data
        result['EntityId'] = self.entity_id
        return result

    def from_map(self, map={}):
        self.db_name = map.get('DbName')
        self.image_url = map.get('ImageUrl')
        self.extra_data = map.get('ExtraData')
        self.entity_id = map.get('EntityId')
        return self


class AddImageResponse(TeaModel):
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
            temp_model = AddImageResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class AddImageResponseData(TeaModel):
    def __init__(self, data_id=None):
        self.data_id = data_id

    def validate(self):
        self.validate_required(self.data_id, 'data_id')

    def to_map(self):
        result = {}
        result['DataId'] = self.data_id
        return result

    def from_map(self, map={}):
        self.data_id = map.get('DataId')
        return self
class AddImageAdvanceRequest(TeaModel):
    def __init__(self, image_url_object=None, db_name=None, extra_data=None, entity_id=None):
        self.image_url_object = image_url_object
        self.db_name = db_name
        self.extra_data = extra_data
        self.entity_id = entity_id

    def validate(self):
        self.validate_required(self.image_url_object, 'image_url_object')
        self.validate_required(self.db_name, 'db_name')
        self.validate_required(self.entity_id, 'entity_id')

    def to_map(self):
        result = {}
        result['ImageUrlObject'] = self.image_url_object
        result['DbName'] = self.db_name
        result['ExtraData'] = self.extra_data
        result['EntityId'] = self.entity_id
        return result

    def from_map(self, map={}):
        self.image_url_object = map.get('ImageUrlObject')
        self.db_name = map.get('DbName')
        self.extra_data = map.get('ExtraData')
        self.entity_id = map.get('EntityId')
        return self


class DeleteImageDbRequest(TeaModel):
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


class DeleteImageDbResponse(TeaModel):
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


class CreateImageDbRequest(TeaModel):
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


class CreateImageDbResponse(TeaModel):
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


class DeleteImageRequest(TeaModel):
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


class DeleteImageResponse(TeaModel):
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

# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class GetDatasetRequest(TeaModel):
    def __init__(self, dataset_id=None):
        self.dataset_id = dataset_id

    def validate(self):
        self.validate_required(self.dataset_id, 'dataset_id')

    def to_map(self):
        result = {}
        result['DatasetId'] = self.dataset_id
        return result

    def from_map(self, map={}):
        self.dataset_id = map.get('DatasetId')
        return self


class GetDatasetResponse(TeaModel):
    def __init__(self, request_id=None, err_msg=None, err_code=None, success=None, code=None, data=None):
        self.request_id = request_id
        self.err_msg = err_msg
        self.err_code = err_code
        self.success = success
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.err_msg, 'err_msg')
        self.validate_required(self.err_code, 'err_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ErrMsg'] = self.err_msg
        result['ErrCode'] = self.err_code
        result['Success'] = self.success
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.err_msg = map.get('ErrMsg')
        self.err_code = map.get('ErrCode')
        self.success = map.get('Success')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = GetDatasetResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class GetDatasetResponseData(TeaModel):
    def __init__(self, id=None, user_id=None, owner_id=None, name=None, storage_type=None, register_type=None, storage_path=None, data_type=None, source_path=None, status=None, gmt_create=None, utc_create=None, gmt_modified=None, utc_modified=None, uid=None, task_id=None, tmp_download_url=None, tags=None):
        self.id = id
        self.user_id = user_id
        self.owner_id = owner_id
        self.name = name
        self.storage_type = storage_type
        self.register_type = register_type
        self.storage_path = storage_path
        self.data_type = data_type
        self.source_path = source_path
        self.status = status
        self.gmt_create = gmt_create
        self.utc_create = utc_create
        self.gmt_modified = gmt_modified
        self.utc_modified = utc_modified
        self.uid = uid
        self.task_id = task_id
        self.tmp_download_url = tmp_download_url
        self.tags = []

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.owner_id, 'owner_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.register_type, 'register_type')
        self.validate_required(self.storage_path, 'storage_path')
        self.validate_required(self.data_type, 'data_type')
        self.validate_required(self.source_path, 'source_path')
        self.validate_required(self.status, 'status')
        self.validate_required(self.gmt_create, 'gmt_create')
        self.validate_required(self.utc_create, 'utc_create')
        self.validate_required(self.gmt_modified, 'gmt_modified')
        self.validate_required(self.utc_modified, 'utc_modified')
        self.validate_required(self.uid, 'uid')
        self.validate_required(self.task_id, 'task_id')
        self.validate_required(self.tmp_download_url, 'tmp_download_url')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['UserId'] = self.user_id
        result['OwnerId'] = self.owner_id
        result['Name'] = self.name
        result['StorageType'] = self.storage_type
        result['RegisterType'] = self.register_type
        result['StoragePath'] = self.storage_path
        result['DataType'] = self.data_type
        result['SourcePath'] = self.source_path
        result['Status'] = self.status
        result['GmtCreate'] = self.gmt_create
        result['UtcCreate'] = self.utc_create
        result['GmtModified'] = self.gmt_modified
        result['UtcModified'] = self.utc_modified
        result['Uid'] = self.uid
        result['TaskId'] = self.task_id
        result['TmpDownloadUrl'] = self.tmp_download_url
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.user_id = map.get('UserId')
        self.owner_id = map.get('OwnerId')
        self.name = map.get('Name')
        self.storage_type = map.get('StorageType')
        self.register_type = map.get('RegisterType')
        self.storage_path = map.get('StoragePath')
        self.data_type = map.get('DataType')
        self.source_path = map.get('SourcePath')
        self.status = map.get('Status')
        self.gmt_create = map.get('GmtCreate')
        self.utc_create = map.get('UtcCreate')
        self.gmt_modified = map.get('GmtModified')
        self.utc_modified = map.get('UtcModified')
        self.uid = map.get('Uid')
        self.task_id = map.get('TaskId')
        self.tmp_download_url = map.get('TmpDownloadUrl')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = map[string,any]()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class ListDatasetsRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None, name_like=None):
        self.page_number = page_number
        self.page_size = page_size
        self.name_like = name_like

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['NameLike'] = self.name_like
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.name_like = map.get('NameLike')
        return self


class ListDatasetsResponse(TeaModel):
    def __init__(self, request_id=None, err_msg=None, err_code=None, success=None, code=None, data=None):
        self.request_id = request_id
        self.err_msg = err_msg
        self.err_code = err_code
        self.success = success
        self.code = code
        self.data = data

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.err_msg, 'err_msg')
        self.validate_required(self.err_code, 'err_code')
        self.validate_required(self.success, 'success')
        self.validate_required(self.code, 'code')
        self.validate_required(self.data, 'data')
        if self.data:
            self.data.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['ErrMsg'] = self.err_msg
        result['ErrCode'] = self.err_code
        result['Success'] = self.success
        result['Code'] = self.code
        if self.data is not None:
            result['Data'] = self.data.to_map()
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.err_msg = map.get('ErrMsg')
        self.err_code = map.get('ErrCode')
        self.success = map.get('Success')
        self.code = map.get('Code')
        if map.get('Data') is not None:
            temp_model = ListDatasetsResponseData()
            self.data = temp_model.from_map(map['Data'])
        else:
            self.data = None
        return self


class ListDatasetsResponseData(TeaModel):
    def __init__(self, page_index=None, page_size=None, total_num=None, total_pages=None, data=None):
        self.page_index = page_index
        self.page_size = page_size
        self.total_num = total_num
        self.total_pages = total_pages
        self.data = []

    def validate(self):
        self.validate_required(self.page_index, 'page_index')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_num, 'total_num')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.data, 'data')
        if self.data:
            for k in self.data:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['PageIndex'] = self.page_index
        result['PageSize'] = self.page_size
        result['TotalNum'] = self.total_num
        result['TotalPages'] = self.total_pages
        result['Data'] = []
        if self.data is not None:
            for k in self.data:
                result['Data'].append(k.to_map() if k else None)
        else:
            result['Data'] = None
        return result

    def from_map(self, map={}):
        self.page_index = map.get('PageIndex')
        self.page_size = map.get('PageSize')
        self.total_num = map.get('TotalNum')
        self.total_pages = map.get('TotalPages')
        self.data = []
        if map.get('Data') is not None:
            for k in map.get('Data'):
                temp_model = map[string,any]()
                temp_model = temp_model.from_map(k)
                self.data.append(temp_model)
        else:
            self.data = None
        return self

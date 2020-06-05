# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListSecretsRequest(TeaModel):
    def __init__(self, fetch_tags=None, page_number=None, page_size=None):
        self.fetch_tags = fetch_tags
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['FetchTags'] = self.fetch_tags
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.fetch_tags = map.get('FetchTags')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListSecretsResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_count=None, secret_list=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_count = total_count
        self.secret_list = secret_list

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.secret_list, 'secret_list')
        if self.secret_list:
            self.secret_list.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalCount'] = self.total_count
        if self.secret_list is not None:
            result['SecretList'] = self.secret_list.to_map()
        else:
            result['SecretList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_count = map.get('TotalCount')
        if map.get('SecretList') is not None:
            temp_model = ListSecretsResponseSecretList()
            self.secret_list = temp_model.from_map(map['SecretList'])
        else:
            self.secret_list = None
        return self


class ListSecretsResponseSecretListSecretTagsTag(TeaModel):
    def __init__(self, tag_key=None, tag_value=None):
        self.tag_key = tag_key
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        return self


class ListSecretsResponseSecretListSecretTags(TeaModel):
    def __init__(self, tag=None):
        self.tag = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListSecretsResponseSecretListSecretTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class ListSecretsResponseSecretListSecret(TeaModel):
    def __init__(self, secret_name=None, create_time=None, update_time=None, planned_delete_time=None, tags=None):
        self.secret_name = secret_name
        self.create_time = create_time
        self.update_time = update_time
        self.planned_delete_time = planned_delete_time
        self.tags = tags

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.planned_delete_time, 'planned_delete_time')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['PlannedDeleteTime'] = self.planned_delete_time
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.planned_delete_time = map.get('PlannedDeleteTime')
        if map.get('Tags') is not None:
            temp_model = ListSecretsResponseSecretListSecretTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class ListSecretsResponseSecretList(TeaModel):
    def __init__(self, secret=None):
        self.secret = []

    def validate(self):
        self.validate_required(self.secret, 'secret')
        if self.secret:
            for k in self.secret:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Secret'] = []
        if self.secret is not None:
            for k in self.secret:
                result['Secret'].append(k.to_map() if k else None)
        else:
            result['Secret'] = None
        return result

    def from_map(self, map={}):
        self.secret = []
        if map.get('Secret') is not None:
            for k in map.get('Secret'):
                temp_model = ListSecretsResponseSecretListSecret()
                temp_model = temp_model.from_map(k)
                self.secret.append(temp_model)
        else:
            self.secret = None
        return self


class ListSecretVersionIdsRequest(TeaModel):
    def __init__(self, secret_name=None, include_deprecated=None, page_number=None, page_size=None):
        self.secret_name = secret_name
        self.include_deprecated = include_deprecated
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['IncludeDeprecated'] = self.include_deprecated
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.include_deprecated = map.get('IncludeDeprecated')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListSecretVersionIdsResponse(TeaModel):
    def __init__(self, page_number=None, page_size=None, request_id=None, secret_name=None, total_count=None, version_ids=None):
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.secret_name = secret_name
        self.total_count = total_count
        self.version_ids = version_ids

    def validate(self):
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.version_ids, 'version_ids')
        if self.version_ids:
            self.version_ids.validate()

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        result['TotalCount'] = self.total_count
        if self.version_ids is not None:
            result['VersionIds'] = self.version_ids.to_map()
        else:
            result['VersionIds'] = None
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        self.total_count = map.get('TotalCount')
        if map.get('VersionIds') is not None:
            temp_model = ListSecretVersionIdsResponseVersionIds()
            self.version_ids = temp_model.from_map(map['VersionIds'])
        else:
            self.version_ids = None
        return self


class ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages(TeaModel):
    def __init__(self, version_stage=None):
        self.version_stage = []

    def validate(self):
        self.validate_required(self.version_stage, 'version_stage')

    def to_map(self):
        result = {}
        result['VersionStage'] = []
        if self.version_stage is not None:
            for k in self.version_stage:
                result['VersionStage'].append(k)
        else:
            result['VersionStage'] = None
        return result

    def from_map(self, map={}):
        self.version_stage = []
        if map.get('VersionStage') is not None:
            for k in map.get('VersionStage'):
                self.version_stage.append(k)
        else:
            self.version_stage = None
        return self


class ListSecretVersionIdsResponseVersionIdsVersionId(TeaModel):
    def __init__(self, create_time=None, version_id=None, version_stages=None):
        self.create_time = create_time
        self.version_id = version_id
        self.version_stages = version_stages

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.version_stages, 'version_stages')
        if self.version_stages:
            self.version_stages.validate()

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['VersionId'] = self.version_id
        if self.version_stages is not None:
            result['VersionStages'] = self.version_stages.to_map()
        else:
            result['VersionStages'] = None
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.version_id = map.get('VersionId')
        if map.get('VersionStages') is not None:
            temp_model = ListSecretVersionIdsResponseVersionIdsVersionIdVersionStages()
            self.version_stages = temp_model.from_map(map['VersionStages'])
        else:
            self.version_stages = None
        return self


class ListSecretVersionIdsResponseVersionIds(TeaModel):
    def __init__(self, version_id=None):
        self.version_id = []

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        if self.version_id:
            for k in self.version_id:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['VersionId'] = []
        if self.version_id is not None:
            for k in self.version_id:
                result['VersionId'].append(k.to_map() if k else None)
        else:
            result['VersionId'] = None
        return result

    def from_map(self, map={}):
        self.version_id = []
        if map.get('VersionId') is not None:
            for k in map.get('VersionId'):
                temp_model = ListSecretVersionIdsResponseVersionIdsVersionId()
                temp_model = temp_model.from_map(k)
                self.version_id.append(temp_model)
        else:
            self.version_id = None
        return self


class DescribeSecretRequest(TeaModel):
    def __init__(self, secret_name=None, fetch_tags=None):
        self.secret_name = secret_name
        self.fetch_tags = fetch_tags

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['FetchTags'] = self.fetch_tags
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.fetch_tags = map.get('FetchTags')
        return self


class DescribeSecretResponse(TeaModel):
    def __init__(self, request_id=None, arn=None, secret_name=None, encryption_key_id=None, description=None, create_time=None, update_time=None, planned_delete_time=None, tags=None):
        self.request_id = request_id
        self.arn = arn
        self.secret_name = secret_name
        self.encryption_key_id = encryption_key_id
        self.description = description
        self.create_time = create_time
        self.update_time = update_time
        self.planned_delete_time = planned_delete_time
        self.tags = tags

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.encryption_key_id, 'encryption_key_id')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.planned_delete_time, 'planned_delete_time')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Arn'] = self.arn
        result['SecretName'] = self.secret_name
        result['EncryptionKeyId'] = self.encryption_key_id
        result['Description'] = self.description
        result['CreateTime'] = self.create_time
        result['UpdateTime'] = self.update_time
        result['PlannedDeleteTime'] = self.planned_delete_time
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.arn = map.get('Arn')
        self.secret_name = map.get('SecretName')
        self.encryption_key_id = map.get('EncryptionKeyId')
        self.description = map.get('Description')
        self.create_time = map.get('CreateTime')
        self.update_time = map.get('UpdateTime')
        self.planned_delete_time = map.get('PlannedDeleteTime')
        if map.get('Tags') is not None:
            temp_model = DescribeSecretResponseTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class DescribeSecretResponseTagsTag(TeaModel):
    def __init__(self, tag_key=None, tag_value=None):
        self.tag_key = tag_key
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        return self


class DescribeSecretResponseTags(TeaModel):
    def __init__(self, tag=None):
        self.tag = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeSecretResponseTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class UpdateSecretRequest(TeaModel):
    def __init__(self, secret_name=None, description=None):
        self.secret_name = secret_name
        self.description = description

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.description = map.get('Description')
        return self


class UpdateSecretResponse(TeaModel):
    def __init__(self, request_id=None, secret_name=None):
        self.request_id = request_id
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        return self


class GetSecretValueRequest(TeaModel):
    def __init__(self, secret_name=None, version_stage=None, version_id=None):
        self.secret_name = secret_name
        self.version_stage = version_stage
        self.version_id = version_id

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['VersionStage'] = self.version_stage
        result['VersionId'] = self.version_id
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.version_stage = map.get('VersionStage')
        self.version_id = map.get('VersionId')
        return self


class GetSecretValueResponse(TeaModel):
    def __init__(self, request_id=None, secret_name=None, version_id=None, create_time=None, secret_data=None, secret_data_type=None, version_stages=None):
        self.request_id = request_id
        self.secret_name = secret_name
        self.version_id = version_id
        self.create_time = create_time
        self.secret_data = secret_data
        self.secret_data_type = secret_data_type
        self.version_stages = version_stages

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.secret_data, 'secret_data')
        self.validate_required(self.secret_data_type, 'secret_data_type')
        self.validate_required(self.version_stages, 'version_stages')
        if self.version_stages:
            self.version_stages.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        result['VersionId'] = self.version_id
        result['CreateTime'] = self.create_time
        result['SecretData'] = self.secret_data
        result['SecretDataType'] = self.secret_data_type
        if self.version_stages is not None:
            result['VersionStages'] = self.version_stages.to_map()
        else:
            result['VersionStages'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        self.version_id = map.get('VersionId')
        self.create_time = map.get('CreateTime')
        self.secret_data = map.get('SecretData')
        self.secret_data_type = map.get('SecretDataType')
        if map.get('VersionStages') is not None:
            temp_model = GetSecretValueResponseVersionStages()
            self.version_stages = temp_model.from_map(map['VersionStages'])
        else:
            self.version_stages = None
        return self


class GetSecretValueResponseVersionStages(TeaModel):
    def __init__(self, version_stage=None):
        self.version_stage = []

    def validate(self):
        self.validate_required(self.version_stage, 'version_stage')

    def to_map(self):
        result = {}
        result['VersionStage'] = []
        if self.version_stage is not None:
            for k in self.version_stage:
                result['VersionStage'].append(k)
        else:
            result['VersionStage'] = None
        return result

    def from_map(self, map={}):
        self.version_stage = []
        if map.get('VersionStage') is not None:
            for k in map.get('VersionStage'):
                self.version_stage.append(k)
        else:
            self.version_stage = None
        return self


class GetRandomPasswordRequest(TeaModel):
    def __init__(self, password_length=None, exclude_characters=None, exclude_lowercase=None, exclude_uppercase=None, exclude_numbers=None, exclude_punctuation=None, require_each_included_type=None):
        self.password_length = password_length
        self.exclude_characters = exclude_characters
        self.exclude_lowercase = exclude_lowercase
        self.exclude_uppercase = exclude_uppercase
        self.exclude_numbers = exclude_numbers
        self.exclude_punctuation = exclude_punctuation
        self.require_each_included_type = require_each_included_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PasswordLength'] = self.password_length
        result['ExcludeCharacters'] = self.exclude_characters
        result['ExcludeLowercase'] = self.exclude_lowercase
        result['ExcludeUppercase'] = self.exclude_uppercase
        result['ExcludeNumbers'] = self.exclude_numbers
        result['ExcludePunctuation'] = self.exclude_punctuation
        result['RequireEachIncludedType'] = self.require_each_included_type
        return result

    def from_map(self, map={}):
        self.password_length = map.get('PasswordLength')
        self.exclude_characters = map.get('ExcludeCharacters')
        self.exclude_lowercase = map.get('ExcludeLowercase')
        self.exclude_uppercase = map.get('ExcludeUppercase')
        self.exclude_numbers = map.get('ExcludeNumbers')
        self.exclude_punctuation = map.get('ExcludePunctuation')
        self.require_each_included_type = map.get('RequireEachIncludedType')
        return self


class GetRandomPasswordResponse(TeaModel):
    def __init__(self, request_id=None, random_password=None):
        self.request_id = request_id
        self.random_password = random_password

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.random_password, 'random_password')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RandomPassword'] = self.random_password
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.random_password = map.get('RandomPassword')
        return self


class RestoreSecretRequest(TeaModel):
    def __init__(self, secret_name=None):
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        return self


class RestoreSecretResponse(TeaModel):
    def __init__(self, request_id=None, secret_name=None):
        self.request_id = request_id
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        return self


class CreateSecretRequest(TeaModel):
    def __init__(self, secret_name=None, version_id=None, encryption_key_id=None, secret_data=None, secret_data_type=None, description=None, tags=None):
        self.secret_name = secret_name
        self.version_id = version_id
        self.encryption_key_id = encryption_key_id
        self.secret_data = secret_data
        self.secret_data_type = secret_data_type
        self.description = description
        self.tags = tags

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.secret_data, 'secret_data')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['VersionId'] = self.version_id
        result['EncryptionKeyId'] = self.encryption_key_id
        result['SecretData'] = self.secret_data
        result['SecretDataType'] = self.secret_data_type
        result['Description'] = self.description
        result['Tags'] = self.tags
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.version_id = map.get('VersionId')
        self.encryption_key_id = map.get('EncryptionKeyId')
        self.secret_data = map.get('SecretData')
        self.secret_data_type = map.get('SecretDataType')
        self.description = map.get('Description')
        self.tags = map.get('Tags')
        return self


class CreateSecretResponse(TeaModel):
    def __init__(self, request_id=None, arn=None, version_id=None, secret_name=None):
        self.request_id = request_id
        self.arn = arn
        self.version_id = version_id
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Arn'] = self.arn
        result['VersionId'] = self.version_id
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.arn = map.get('Arn')
        self.version_id = map.get('VersionId')
        self.secret_name = map.get('SecretName')
        return self


class PutSecretValueRequest(TeaModel):
    def __init__(self, version_id=None, secret_name=None, secret_data=None, secret_data_type=None, version_stages=None):
        self.version_id = version_id
        self.secret_name = secret_name
        self.secret_data = secret_data
        self.secret_data_type = secret_data_type
        self.version_stages = version_stages

    def validate(self):
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.secret_data, 'secret_data')

    def to_map(self):
        result = {}
        result['VersionId'] = self.version_id
        result['SecretName'] = self.secret_name
        result['SecretData'] = self.secret_data
        result['SecretDataType'] = self.secret_data_type
        result['VersionStages'] = self.version_stages
        return result

    def from_map(self, map={}):
        self.version_id = map.get('VersionId')
        self.secret_name = map.get('SecretName')
        self.secret_data = map.get('SecretData')
        self.secret_data_type = map.get('SecretDataType')
        self.version_stages = map.get('VersionStages')
        return self


class PutSecretValueResponse(TeaModel):
    def __init__(self, request_id=None, secret_name=None, version_id=None, version_stages=None):
        self.request_id = request_id
        self.secret_name = secret_name
        self.version_id = version_id
        self.version_stages = version_stages

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.version_id, 'version_id')
        self.validate_required(self.version_stages, 'version_stages')
        if self.version_stages:
            self.version_stages.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        result['VersionId'] = self.version_id
        if self.version_stages is not None:
            result['VersionStages'] = self.version_stages.to_map()
        else:
            result['VersionStages'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        self.version_id = map.get('VersionId')
        if map.get('VersionStages') is not None:
            temp_model = PutSecretValueResponseVersionStages()
            self.version_stages = temp_model.from_map(map['VersionStages'])
        else:
            self.version_stages = None
        return self


class PutSecretValueResponseVersionStages(TeaModel):
    def __init__(self, version_stage=None):
        self.version_stage = []

    def validate(self):
        self.validate_required(self.version_stage, 'version_stage')

    def to_map(self):
        result = {}
        result['VersionStage'] = []
        if self.version_stage is not None:
            for k in self.version_stage:
                result['VersionStage'].append(k)
        else:
            result['VersionStage'] = None
        return result

    def from_map(self, map={}):
        self.version_stage = []
        if map.get('VersionStage') is not None:
            for k in map.get('VersionStage'):
                self.version_stage.append(k)
        else:
            self.version_stage = None
        return self


class DeleteSecretRequest(TeaModel):
    def __init__(self, secret_name=None, force_delete_without_recovery=None, recovery_window_in_days=None):
        self.secret_name = secret_name
        self.force_delete_without_recovery = force_delete_without_recovery
        self.recovery_window_in_days = recovery_window_in_days

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['ForceDeleteWithoutRecovery'] = self.force_delete_without_recovery
        result['RecoveryWindowInDays'] = self.recovery_window_in_days
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.force_delete_without_recovery = map.get('ForceDeleteWithoutRecovery')
        self.recovery_window_in_days = map.get('RecoveryWindowInDays')
        return self


class DeleteSecretResponse(TeaModel):
    def __init__(self, request_id=None, secret_name=None, planned_delete_time=None):
        self.request_id = request_id
        self.secret_name = secret_name
        self.planned_delete_time = planned_delete_time

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.planned_delete_time, 'planned_delete_time')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SecretName'] = self.secret_name
        result['PlannedDeleteTime'] = self.planned_delete_time
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.secret_name = map.get('SecretName')
        self.planned_delete_time = map.get('PlannedDeleteTime')
        return self


class UpdateSecretVersionStageRequest(TeaModel):
    def __init__(self, secret_name=None, version_stage=None, remove_from_version=None, move_to_version=None):
        self.secret_name = secret_name
        self.version_stage = version_stage
        self.remove_from_version = remove_from_version
        self.move_to_version = move_to_version

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.version_stage, 'version_stage')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['VersionStage'] = self.version_stage
        result['RemoveFromVersion'] = self.remove_from_version
        result['MoveToVersion'] = self.move_to_version
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.version_stage = map.get('VersionStage')
        self.remove_from_version = map.get('RemoveFromVersion')
        self.move_to_version = map.get('MoveToVersion')
        return self


class UpdateSecretVersionStageResponse(TeaModel):
    def __init__(self, secret_name=None, request_id=None):
        self.secret_name = secret_name
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.secret_name, 'secret_name')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['SecretName'] = self.secret_name
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.secret_name = map.get('SecretName')
        self.request_id = map.get('RequestId')
        return self


class AsymmetricDecryptRequest(TeaModel):
    def __init__(self, ciphertext_blob=None, key_id=None, key_version_id=None, algorithm=None):
        self.ciphertext_blob = ciphertext_blob
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.algorithm = algorithm

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.algorithm, 'algorithm')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['Algorithm'] = self.algorithm
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.algorithm = map.get('Algorithm')
        return self


class AsymmetricDecryptResponse(TeaModel):
    def __init__(self, plaintext=None, key_id=None, request_id=None, key_version_id=None):
        self.plaintext = plaintext
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['Plaintext'] = self.plaintext
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.plaintext = map.get('Plaintext')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class AsymmetricVerifyRequest(TeaModel):
    def __init__(self, key_id=None, key_version_id=None, algorithm=None, digest=None, value=None):
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.algorithm = algorithm
        self.digest = digest
        self.value = value

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.algorithm, 'algorithm')
        self.validate_required(self.digest, 'digest')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['Algorithm'] = self.algorithm
        result['Digest'] = self.digest
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.algorithm = map.get('Algorithm')
        self.digest = map.get('Digest')
        self.value = map.get('Value')
        return self


class AsymmetricVerifyResponse(TeaModel):
    def __init__(self, value=None, key_id=None, request_id=None, key_version_id=None):
        self.value = value
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class AsymmetricSignRequest(TeaModel):
    def __init__(self, key_id=None, key_version_id=None, algorithm=None, digest=None):
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.algorithm = algorithm
        self.digest = digest

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.algorithm, 'algorithm')
        self.validate_required(self.digest, 'digest')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['Algorithm'] = self.algorithm
        result['Digest'] = self.digest
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.algorithm = map.get('Algorithm')
        self.digest = map.get('Digest')
        return self


class AsymmetricSignResponse(TeaModel):
    def __init__(self, value=None, key_id=None, request_id=None, key_version_id=None):
        self.value = value
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class AsymmetricEncryptRequest(TeaModel):
    def __init__(self, plaintext=None, key_id=None, key_version_id=None, algorithm=None):
        self.plaintext = plaintext
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.algorithm = algorithm

    def validate(self):
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.algorithm, 'algorithm')

    def to_map(self):
        result = {}
        result['Plaintext'] = self.plaintext
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['Algorithm'] = self.algorithm
        return result

    def from_map(self, map={}):
        self.plaintext = map.get('Plaintext')
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.algorithm = map.get('Algorithm')
        return self


class AsymmetricEncryptResponse(TeaModel):
    def __init__(self, ciphertext_blob=None, key_id=None, request_id=None, key_version_id=None):
        self.ciphertext_blob = ciphertext_blob
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class GetPublicKeyRequest(TeaModel):
    def __init__(self, key_id=None, key_version_id=None):
        self.key_id = key_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class GetPublicKeyResponse(TeaModel):
    def __init__(self, public_key=None, key_id=None, request_id=None, key_version_id=None):
        self.public_key = public_key
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.public_key, 'public_key')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['PublicKey'] = self.public_key
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.public_key = map.get('PublicKey')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class GenerateDataKeyWithoutPlaintextRequest(TeaModel):
    def __init__(self, key_id=None, key_spec=None, number_of_bytes=None, encryption_context=None):
        self.key_id = key_id
        self.key_spec = key_spec
        self.number_of_bytes = number_of_bytes
        self.encryption_context = {}

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeySpec'] = self.key_spec
        result['NumberOfBytes'] = self.number_of_bytes
        result['EncryptionContext'] = self.encryption_context
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_spec = map.get('KeySpec')
        self.number_of_bytes = map.get('NumberOfBytes')
        self.encryption_context = map.get('EncryptionContext')
        return self


class GenerateDataKeyWithoutPlaintextResponse(TeaModel):
    def __init__(self, ciphertext_blob=None, key_id=None, request_id=None, key_version_id=None):
        self.ciphertext_blob = ciphertext_blob
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class UpdateKeyDescriptionRequest(TeaModel):
    def __init__(self, key_id=None, description=None):
        self.key_id = key_id
        self.description = description

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.description, 'description')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.description = map.get('Description')
        return self


class UpdateKeyDescriptionResponse(TeaModel):
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


class DescribeKeyVersionRequest(TeaModel):
    def __init__(self, key_id=None, key_version_id=None):
        self.key_id = key_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class DescribeKeyVersionResponse(TeaModel):
    def __init__(self, request_id=None, key_version=None):
        self.request_id = request_id
        self.key_version = key_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version, 'key_version')
        if self.key_version:
            self.key_version.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.key_version is not None:
            result['KeyVersion'] = self.key_version.to_map()
        else:
            result['KeyVersion'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('KeyVersion') is not None:
            temp_model = DescribeKeyVersionResponseKeyVersion()
            self.key_version = temp_model.from_map(map['KeyVersion'])
        else:
            self.key_version = None
        return self


class DescribeKeyVersionResponseKeyVersion(TeaModel):
    def __init__(self, key_id=None, key_version_id=None, creation_date=None):
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.creation_date = creation_date

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.creation_date, 'creation_date')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['CreationDate'] = self.creation_date
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.creation_date = map.get('CreationDate')
        return self


class UpdateRotationPolicyRequest(TeaModel):
    def __init__(self, key_id=None, enable_automatic_rotation=None, rotation_interval=None):
        self.key_id = key_id
        self.enable_automatic_rotation = enable_automatic_rotation
        self.rotation_interval = rotation_interval

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.enable_automatic_rotation, 'enable_automatic_rotation')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['EnableAutomaticRotation'] = self.enable_automatic_rotation
        result['RotationInterval'] = self.rotation_interval
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.enable_automatic_rotation = map.get('EnableAutomaticRotation')
        self.rotation_interval = map.get('RotationInterval')
        return self


class UpdateRotationPolicyResponse(TeaModel):
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


class ListKeyVersionsRequest(TeaModel):
    def __init__(self, key_id=None, page_number=None, page_size=None):
        self.key_id = key_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListKeyVersionsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, key_versions=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.key_versions = key_versions

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.key_versions, 'key_versions')
        if self.key_versions:
            self.key_versions.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.key_versions is not None:
            result['KeyVersions'] = self.key_versions.to_map()
        else:
            result['KeyVersions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('KeyVersions') is not None:
            temp_model = ListKeyVersionsResponseKeyVersions()
            self.key_versions = temp_model.from_map(map['KeyVersions'])
        else:
            self.key_versions = None
        return self


class ListKeyVersionsResponseKeyVersionsKeyVersion(TeaModel):
    def __init__(self, key_id=None, key_version_id=None, creation_date=None):
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.creation_date = creation_date

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.creation_date, 'creation_date')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['CreationDate'] = self.creation_date
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.creation_date = map.get('CreationDate')
        return self


class ListKeyVersionsResponseKeyVersions(TeaModel):
    def __init__(self, key_version=None):
        self.key_version = []

    def validate(self):
        self.validate_required(self.key_version, 'key_version')
        if self.key_version:
            for k in self.key_version:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['KeyVersion'] = []
        if self.key_version is not None:
            for k in self.key_version:
                result['KeyVersion'].append(k.to_map() if k else None)
        else:
            result['KeyVersion'] = None
        return result

    def from_map(self, map={}):
        self.key_version = []
        if map.get('KeyVersion') is not None:
            for k in map.get('KeyVersion'):
                temp_model = ListKeyVersionsResponseKeyVersionsKeyVersion()
                temp_model = temp_model.from_map(k)
                self.key_version.append(temp_model)
        else:
            self.key_version = None
        return self


class CreateKeyVersionRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class CreateKeyVersionResponse(TeaModel):
    def __init__(self, request_id=None, key_version=None):
        self.request_id = request_id
        self.key_version = key_version

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version, 'key_version')
        if self.key_version:
            self.key_version.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.key_version is not None:
            result['KeyVersion'] = self.key_version.to_map()
        else:
            result['KeyVersion'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('KeyVersion') is not None:
            temp_model = CreateKeyVersionResponseKeyVersion()
            self.key_version = temp_model.from_map(map['KeyVersion'])
        else:
            self.key_version = None
        return self


class CreateKeyVersionResponseKeyVersion(TeaModel):
    def __init__(self, key_id=None, key_version_id=None, creation_date=None):
        self.key_id = key_id
        self.key_version_id = key_version_id
        self.creation_date = creation_date

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_version_id, 'key_version_id')
        self.validate_required(self.creation_date, 'creation_date')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeyVersionId'] = self.key_version_id
        result['CreationDate'] = self.creation_date
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_version_id = map.get('KeyVersionId')
        self.creation_date = map.get('CreationDate')
        return self


class DescribeServiceRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeServiceResponse(TeaModel):
    def __init__(self, request_id=None, protection_levels=None, key_specs=None):
        self.request_id = request_id
        self.protection_levels = protection_levels
        self.key_specs = key_specs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.protection_levels, 'protection_levels')
        if self.protection_levels:
            self.protection_levels.validate()
        self.validate_required(self.key_specs, 'key_specs')
        if self.key_specs:
            self.key_specs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.protection_levels is not None:
            result['ProtectionLevels'] = self.protection_levels.to_map()
        else:
            result['ProtectionLevels'] = None
        if self.key_specs is not None:
            result['KeySpecs'] = self.key_specs.to_map()
        else:
            result['KeySpecs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('ProtectionLevels') is not None:
            temp_model = DescribeServiceResponseProtectionLevels()
            self.protection_levels = temp_model.from_map(map['ProtectionLevels'])
        else:
            self.protection_levels = None
        if map.get('KeySpecs') is not None:
            temp_model = DescribeServiceResponseKeySpecs()
            self.key_specs = temp_model.from_map(map['KeySpecs'])
        else:
            self.key_specs = None
        return self


class DescribeServiceResponseProtectionLevelsProtectionLevel(TeaModel):
    def __init__(self, type=None):
        self.type = type

    def validate(self):
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.type = map.get('Type')
        return self


class DescribeServiceResponseProtectionLevels(TeaModel):
    def __init__(self, protection_level=None):
        self.protection_level = []

    def validate(self):
        self.validate_required(self.protection_level, 'protection_level')
        if self.protection_level:
            for k in self.protection_level:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['ProtectionLevel'] = []
        if self.protection_level is not None:
            for k in self.protection_level:
                result['ProtectionLevel'].append(k.to_map() if k else None)
        else:
            result['ProtectionLevel'] = None
        return result

    def from_map(self, map={}):
        self.protection_level = []
        if map.get('ProtectionLevel') is not None:
            for k in map.get('ProtectionLevel'):
                temp_model = DescribeServiceResponseProtectionLevelsProtectionLevel()
                temp_model = temp_model.from_map(k)
                self.protection_level.append(temp_model)
        else:
            self.protection_level = None
        return self


class DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels(TeaModel):
    def __init__(self, supported_protection_level=None):
        self.supported_protection_level = []

    def validate(self):
        self.validate_required(self.supported_protection_level, 'supported_protection_level')

    def to_map(self):
        result = {}
        result['SupportedProtectionLevel'] = []
        if self.supported_protection_level is not None:
            for k in self.supported_protection_level:
                result['SupportedProtectionLevel'].append(k)
        else:
            result['SupportedProtectionLevel'] = None
        return result

    def from_map(self, map={}):
        self.supported_protection_level = []
        if map.get('SupportedProtectionLevel') is not None:
            for k in map.get('SupportedProtectionLevel'):
                self.supported_protection_level.append(k)
        else:
            self.supported_protection_level = None
        return self


class DescribeServiceResponseKeySpecsKeySpecUsages(TeaModel):
    def __init__(self, usage=None):
        self.usage = []

    def validate(self):
        self.validate_required(self.usage, 'usage')

    def to_map(self):
        result = {}
        result['Usage'] = []
        if self.usage is not None:
            for k in self.usage:
                result['Usage'].append(k)
        else:
            result['Usage'] = None
        return result

    def from_map(self, map={}):
        self.usage = []
        if map.get('Usage') is not None:
            for k in map.get('Usage'):
                self.usage.append(k)
        else:
            self.usage = None
        return self


class DescribeServiceResponseKeySpecsKeySpec(TeaModel):
    def __init__(self, name=None, supported_protection_levels=None, usages=None):
        self.name = name
        self.supported_protection_levels = supported_protection_levels
        self.usages = usages

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.supported_protection_levels, 'supported_protection_levels')
        if self.supported_protection_levels:
            self.supported_protection_levels.validate()
        self.validate_required(self.usages, 'usages')
        if self.usages:
            self.usages.validate()

    def to_map(self):
        result = {}
        result['Name'] = self.name
        if self.supported_protection_levels is not None:
            result['SupportedProtectionLevels'] = self.supported_protection_levels.to_map()
        else:
            result['SupportedProtectionLevels'] = None
        if self.usages is not None:
            result['Usages'] = self.usages.to_map()
        else:
            result['Usages'] = None
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        if map.get('SupportedProtectionLevels') is not None:
            temp_model = DescribeServiceResponseKeySpecsKeySpecSupportedProtectionLevels()
            self.supported_protection_levels = temp_model.from_map(map['SupportedProtectionLevels'])
        else:
            self.supported_protection_levels = None
        if map.get('Usages') is not None:
            temp_model = DescribeServiceResponseKeySpecsKeySpecUsages()
            self.usages = temp_model.from_map(map['Usages'])
        else:
            self.usages = None
        return self


class DescribeServiceResponseKeySpecs(TeaModel):
    def __init__(self, key_spec=None):
        self.key_spec = []

    def validate(self):
        self.validate_required(self.key_spec, 'key_spec')
        if self.key_spec:
            for k in self.key_spec:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['KeySpec'] = []
        if self.key_spec is not None:
            for k in self.key_spec:
                result['KeySpec'].append(k.to_map() if k else None)
        else:
            result['KeySpec'] = None
        return result

    def from_map(self, map={}):
        self.key_spec = []
        if map.get('KeySpec') is not None:
            for k in map.get('KeySpec'):
                temp_model = DescribeServiceResponseKeySpecsKeySpec()
                temp_model = temp_model.from_map(k)
                self.key_spec.append(temp_model)
        else:
            self.key_spec = None
        return self


class UpdateAliasRequest(TeaModel):
    def __init__(self, key_id=None, alias_name=None):
        self.key_id = key_id
        self.alias_name = alias_name

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.alias_name, 'alias_name')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['AliasName'] = self.alias_name
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.alias_name = map.get('AliasName')
        return self


class UpdateAliasResponse(TeaModel):
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


class UntagResourceRequest(TeaModel):
    def __init__(self, key_id=None, tag_keys=None, secret_name=None):
        self.key_id = key_id
        self.tag_keys = tag_keys
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.tag_keys, 'tag_keys')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['TagKeys'] = self.tag_keys
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.tag_keys = map.get('TagKeys')
        self.secret_name = map.get('SecretName')
        return self


class UntagResourceResponse(TeaModel):
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


class TagResourceRequest(TeaModel):
    def __init__(self, key_id=None, tags=None, secret_name=None):
        self.key_id = key_id
        self.tags = tags
        self.secret_name = secret_name

    def validate(self):
        self.validate_required(self.tags, 'tags')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['Tags'] = self.tags
        result['SecretName'] = self.secret_name
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.tags = map.get('Tags')
        self.secret_name = map.get('SecretName')
        return self


class TagResourceResponse(TeaModel):
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


class ScheduleKeyDeletionRequest(TeaModel):
    def __init__(self, key_id=None, pending_window_in_days=None):
        self.key_id = key_id
        self.pending_window_in_days = pending_window_in_days

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['PendingWindowInDays'] = self.pending_window_in_days
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.pending_window_in_days = map.get('PendingWindowInDays')
        return self


class ScheduleKeyDeletionResponse(TeaModel):
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


class ListResourceTagsRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class ListResourceTagsResponse(TeaModel):
    def __init__(self, request_id=None, tags=None):
        self.request_id = request_id
        self.tags = tags

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Tags') is not None:
            temp_model = ListResourceTagsResponseTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class ListResourceTagsResponseTagsTag(TeaModel):
    def __init__(self, key_id=None, tag_key=None, tag_value=None):
        self.key_id = key_id
        self.tag_key = tag_key
        self.tag_value = tag_value

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        return self


class ListResourceTagsResponseTags(TeaModel):
    def __init__(self, tag=None):
        self.tag = []

    def validate(self):
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListResourceTagsResponseTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class ListKeysRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListKeysResponse(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, request_id=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        return self


class ListAliasesByKeyIdRequest(TeaModel):
    def __init__(self, key_id=None, page_number=None, page_size=None):
        self.key_id = key_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListAliasesByKeyIdResponse(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, request_id=None, aliases=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.aliases = aliases

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.aliases, 'aliases')
        if self.aliases:
            self.aliases.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        if self.aliases is not None:
            result['Aliases'] = self.aliases.to_map()
        else:
            result['Aliases'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        if map.get('Aliases') is not None:
            temp_model = ListAliasesByKeyIdResponseAliases()
            self.aliases = temp_model.from_map(map['Aliases'])
        else:
            self.aliases = None
        return self


class ListAliasesByKeyIdResponseAliasesAlias(TeaModel):
    def __init__(self, key_id=None, alias_name=None, alias_arn=None):
        self.key_id = key_id
        self.alias_name = alias_name
        self.alias_arn = alias_arn

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.alias_name, 'alias_name')
        self.validate_required(self.alias_arn, 'alias_arn')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['AliasName'] = self.alias_name
        result['AliasArn'] = self.alias_arn
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.alias_name = map.get('AliasName')
        self.alias_arn = map.get('AliasArn')
        return self


class ListAliasesByKeyIdResponseAliases(TeaModel):
    def __init__(self, alias=None):
        self.alias = []

    def validate(self):
        self.validate_required(self.alias, 'alias')
        if self.alias:
            for k in self.alias:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Alias'] = []
        if self.alias is not None:
            for k in self.alias:
                result['Alias'].append(k.to_map() if k else None)
        else:
            result['Alias'] = None
        return result

    def from_map(self, map={}):
        self.alias = []
        if map.get('Alias') is not None:
            for k in map.get('Alias'):
                temp_model = ListAliasesByKeyIdResponseAliasesAlias()
                temp_model = temp_model.from_map(k)
                self.alias.append(temp_model)
        else:
            self.alias = None
        return self


class ListAliasesRequest(TeaModel):
    def __init__(self, page_number=None, page_size=None):
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class ListAliasesResponse(TeaModel):
    def __init__(self, total_count=None, page_number=None, page_size=None, request_id=None, aliases=None):
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.request_id = request_id
        self.aliases = aliases

    def validate(self):
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.aliases, 'aliases')
        if self.aliases:
            self.aliases.validate()

    def to_map(self):
        result = {}
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['RequestId'] = self.request_id
        if self.aliases is not None:
            result['Aliases'] = self.aliases.to_map()
        else:
            result['Aliases'] = None
        return result

    def from_map(self, map={}):
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.request_id = map.get('RequestId')
        if map.get('Aliases') is not None:
            temp_model = ListAliasesResponseAliases()
            self.aliases = temp_model.from_map(map['Aliases'])
        else:
            self.aliases = None
        return self


class ListAliasesResponseAliasesAlias(TeaModel):
    def __init__(self, key_id=None, alias_name=None, alias_arn=None):
        self.key_id = key_id
        self.alias_name = alias_name
        self.alias_arn = alias_arn

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.alias_name, 'alias_name')
        self.validate_required(self.alias_arn, 'alias_arn')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['AliasName'] = self.alias_name
        result['AliasArn'] = self.alias_arn
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.alias_name = map.get('AliasName')
        self.alias_arn = map.get('AliasArn')
        return self


class ListAliasesResponseAliases(TeaModel):
    def __init__(self, alias=None):
        self.alias = []

    def validate(self):
        self.validate_required(self.alias, 'alias')
        if self.alias:
            for k in self.alias:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Alias'] = []
        if self.alias is not None:
            for k in self.alias:
                result['Alias'].append(k.to_map() if k else None)
        else:
            result['Alias'] = None
        return result

    def from_map(self, map={}):
        self.alias = []
        if map.get('Alias') is not None:
            for k in map.get('Alias'):
                temp_model = ListAliasesResponseAliasesAlias()
                temp_model = temp_model.from_map(k)
                self.alias.append(temp_model)
        else:
            self.alias = None
        return self


class ImportKeyMaterialRequest(TeaModel):
    def __init__(self, key_id=None, encrypted_key_material=None, import_token=None, key_material_expire_unix=None):
        self.key_id = key_id
        self.encrypted_key_material = encrypted_key_material
        self.import_token = import_token
        self.key_material_expire_unix = key_material_expire_unix

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.encrypted_key_material, 'encrypted_key_material')
        self.validate_required(self.import_token, 'import_token')
        self.validate_required(self.key_material_expire_unix, 'key_material_expire_unix')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['EncryptedKeyMaterial'] = self.encrypted_key_material
        result['ImportToken'] = self.import_token
        result['KeyMaterialExpireUnix'] = self.key_material_expire_unix
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.encrypted_key_material = map.get('EncryptedKeyMaterial')
        self.import_token = map.get('ImportToken')
        self.key_material_expire_unix = map.get('KeyMaterialExpireUnix')
        return self


class ImportKeyMaterialResponse(TeaModel):
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


class GetParametersForImportRequest(TeaModel):
    def __init__(self, key_id=None, wrapping_algorithm=None, wrapping_key_spec=None):
        self.key_id = key_id
        self.wrapping_algorithm = wrapping_algorithm
        self.wrapping_key_spec = wrapping_key_spec

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.wrapping_algorithm, 'wrapping_algorithm')
        self.validate_required(self.wrapping_key_spec, 'wrapping_key_spec')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['WrappingAlgorithm'] = self.wrapping_algorithm
        result['WrappingKeySpec'] = self.wrapping_key_spec
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.wrapping_algorithm = map.get('WrappingAlgorithm')
        self.wrapping_key_spec = map.get('WrappingKeySpec')
        return self


class GetParametersForImportResponse(TeaModel):
    def __init__(self, key_id=None, request_id=None, import_token=None, public_key=None, token_expire_time=None):
        self.key_id = key_id
        self.request_id = request_id
        self.import_token = import_token
        self.public_key = public_key
        self.token_expire_time = token_expire_time

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.import_token, 'import_token')
        self.validate_required(self.public_key, 'public_key')
        self.validate_required(self.token_expire_time, 'token_expire_time')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['ImportToken'] = self.import_token
        result['PublicKey'] = self.public_key
        result['TokenExpireTime'] = self.token_expire_time
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.import_token = map.get('ImportToken')
        self.public_key = map.get('PublicKey')
        self.token_expire_time = map.get('TokenExpireTime')
        return self


class GenerateDataKeyRequest(TeaModel):
    def __init__(self, key_id=None, key_spec=None, number_of_bytes=None, encryption_context=None):
        self.key_id = key_id
        self.key_spec = key_spec
        self.number_of_bytes = number_of_bytes
        self.encryption_context = {}

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['KeySpec'] = self.key_spec
        result['NumberOfBytes'] = self.number_of_bytes
        result['EncryptionContext'] = self.encryption_context
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.key_spec = map.get('KeySpec')
        self.number_of_bytes = map.get('NumberOfBytes')
        self.encryption_context = map.get('EncryptionContext')
        return self


class GenerateDataKeyResponse(TeaModel):
    def __init__(self, ciphertext_blob=None, key_id=None, plaintext=None, request_id=None, key_version_id=None):
        self.ciphertext_blob = ciphertext_blob
        self.key_id = key_id
        self.plaintext = plaintext
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['KeyId'] = self.key_id
        result['Plaintext'] = self.plaintext
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.key_id = map.get('KeyId')
        self.plaintext = map.get('Plaintext')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class EncryptRequest(TeaModel):
    def __init__(self, key_id=None, plaintext=None, encryption_context=None):
        self.key_id = key_id
        self.plaintext = plaintext
        self.encryption_context = {}

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.plaintext, 'plaintext')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['Plaintext'] = self.plaintext
        result['EncryptionContext'] = self.encryption_context
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.plaintext = map.get('Plaintext')
        self.encryption_context = map.get('EncryptionContext')
        return self


class EncryptResponse(TeaModel):
    def __init__(self, ciphertext_blob=None, key_id=None, request_id=None, key_version_id=None):
        self.ciphertext_blob = ciphertext_blob
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class EnableKeyRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class EnableKeyResponse(TeaModel):
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


class DisableKeyRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class DisableKeyResponse(TeaModel):
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


class DescribeRegionsRequest(TeaModel):
    def __init__(self):
        pass

    def validate(self):
        pass

    def to_map(self):
        result = {}
        return result

    def from_map(self, map={}):
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, request_id=None, regions=None):
        self.request_id = request_id
        self.regions = regions

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.regions, 'regions')
        if self.regions:
            self.regions.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.regions is not None:
            result['Regions'] = self.regions.to_map()
        else:
            result['Regions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Regions') is not None:
            temp_model = DescribeRegionsResponseRegions()
            self.regions = temp_model.from_map(map['Regions'])
        else:
            self.regions = None
        return self


class DescribeRegionsResponseRegionsRegion(TeaModel):
    def __init__(self, region_id=None):
        self.region_id = region_id

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        return self


class DescribeRegionsResponseRegions(TeaModel):
    def __init__(self, region=None):
        self.region = []

    def validate(self):
        self.validate_required(self.region, 'region')
        if self.region:
            for k in self.region:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Region'] = []
        if self.region is not None:
            for k in self.region:
                result['Region'].append(k.to_map() if k else None)
        else:
            result['Region'] = None
        return result

    def from_map(self, map={}):
        self.region = []
        if map.get('Region') is not None:
            for k in map.get('Region'):
                temp_model = DescribeRegionsResponseRegionsRegion()
                temp_model = temp_model.from_map(k)
                self.region.append(temp_model)
        else:
            self.region = None
        return self


class DescribeKeyRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class DescribeKeyResponse(TeaModel):
    def __init__(self, request_id=None, key_metadata=None):
        self.request_id = request_id
        self.key_metadata = key_metadata

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_metadata, 'key_metadata')
        if self.key_metadata:
            self.key_metadata.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.key_metadata is not None:
            result['KeyMetadata'] = self.key_metadata.to_map()
        else:
            result['KeyMetadata'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('KeyMetadata') is not None:
            temp_model = DescribeKeyResponseKeyMetadata()
            self.key_metadata = temp_model.from_map(map['KeyMetadata'])
        else:
            self.key_metadata = None
        return self


class DescribeKeyResponseKeyMetadata(TeaModel):
    def __init__(self, creation_date=None, description=None, key_id=None, key_state=None, key_usage=None, delete_date=None, creator=None, arn=None, origin=None, material_expire_time=None, protection_level=None, primary_key_version=None, last_rotation_date=None, automatic_rotation=None, rotation_interval=None, next_rotation_date=None, key_spec=None):
        self.creation_date = creation_date
        self.description = description
        self.key_id = key_id
        self.key_state = key_state
        self.key_usage = key_usage
        self.delete_date = delete_date
        self.creator = creator
        self.arn = arn
        self.origin = origin
        self.material_expire_time = material_expire_time
        self.protection_level = protection_level
        self.primary_key_version = primary_key_version
        self.last_rotation_date = last_rotation_date
        self.automatic_rotation = automatic_rotation
        self.rotation_interval = rotation_interval
        self.next_rotation_date = next_rotation_date
        self.key_spec = key_spec

    def validate(self):
        self.validate_required(self.creation_date, 'creation_date')
        self.validate_required(self.description, 'description')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_state, 'key_state')
        self.validate_required(self.key_usage, 'key_usage')
        self.validate_required(self.delete_date, 'delete_date')
        self.validate_required(self.creator, 'creator')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.origin, 'origin')
        self.validate_required(self.material_expire_time, 'material_expire_time')
        self.validate_required(self.protection_level, 'protection_level')
        self.validate_required(self.primary_key_version, 'primary_key_version')
        self.validate_required(self.last_rotation_date, 'last_rotation_date')
        self.validate_required(self.automatic_rotation, 'automatic_rotation')
        self.validate_required(self.rotation_interval, 'rotation_interval')
        self.validate_required(self.next_rotation_date, 'next_rotation_date')
        self.validate_required(self.key_spec, 'key_spec')

    def to_map(self):
        result = {}
        result['CreationDate'] = self.creation_date
        result['Description'] = self.description
        result['KeyId'] = self.key_id
        result['KeyState'] = self.key_state
        result['KeyUsage'] = self.key_usage
        result['DeleteDate'] = self.delete_date
        result['Creator'] = self.creator
        result['Arn'] = self.arn
        result['Origin'] = self.origin
        result['MaterialExpireTime'] = self.material_expire_time
        result['ProtectionLevel'] = self.protection_level
        result['PrimaryKeyVersion'] = self.primary_key_version
        result['LastRotationDate'] = self.last_rotation_date
        result['AutomaticRotation'] = self.automatic_rotation
        result['RotationInterval'] = self.rotation_interval
        result['NextRotationDate'] = self.next_rotation_date
        result['KeySpec'] = self.key_spec
        return result

    def from_map(self, map={}):
        self.creation_date = map.get('CreationDate')
        self.description = map.get('Description')
        self.key_id = map.get('KeyId')
        self.key_state = map.get('KeyState')
        self.key_usage = map.get('KeyUsage')
        self.delete_date = map.get('DeleteDate')
        self.creator = map.get('Creator')
        self.arn = map.get('Arn')
        self.origin = map.get('Origin')
        self.material_expire_time = map.get('MaterialExpireTime')
        self.protection_level = map.get('ProtectionLevel')
        self.primary_key_version = map.get('PrimaryKeyVersion')
        self.last_rotation_date = map.get('LastRotationDate')
        self.automatic_rotation = map.get('AutomaticRotation')
        self.rotation_interval = map.get('RotationInterval')
        self.next_rotation_date = map.get('NextRotationDate')
        self.key_spec = map.get('KeySpec')
        return self


class DeleteKeyMaterialRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class DeleteKeyMaterialResponse(TeaModel):
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


class DeleteAliasRequest(TeaModel):
    def __init__(self, alias_name=None):
        self.alias_name = alias_name

    def validate(self):
        self.validate_required(self.alias_name, 'alias_name')

    def to_map(self):
        result = {}
        result['AliasName'] = self.alias_name
        return result

    def from_map(self, map={}):
        self.alias_name = map.get('AliasName')
        return self


class DeleteAliasResponse(TeaModel):
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


class DecryptRequest(TeaModel):
    def __init__(self, ciphertext_blob=None, encryption_context=None):
        self.ciphertext_blob = ciphertext_blob
        self.encryption_context = {}

    def validate(self):
        self.validate_required(self.ciphertext_blob, 'ciphertext_blob')

    def to_map(self):
        result = {}
        result['CiphertextBlob'] = self.ciphertext_blob
        result['EncryptionContext'] = self.encryption_context
        return result

    def from_map(self, map={}):
        self.ciphertext_blob = map.get('CiphertextBlob')
        self.encryption_context = map.get('EncryptionContext')
        return self


class DecryptResponse(TeaModel):
    def __init__(self, plaintext=None, key_id=None, request_id=None, key_version_id=None):
        self.plaintext = plaintext
        self.key_id = key_id
        self.request_id = request_id
        self.key_version_id = key_version_id

    def validate(self):
        self.validate_required(self.plaintext, 'plaintext')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_version_id, 'key_version_id')

    def to_map(self):
        result = {}
        result['Plaintext'] = self.plaintext
        result['KeyId'] = self.key_id
        result['RequestId'] = self.request_id
        result['KeyVersionId'] = self.key_version_id
        return result

    def from_map(self, map={}):
        self.plaintext = map.get('Plaintext')
        self.key_id = map.get('KeyId')
        self.request_id = map.get('RequestId')
        self.key_version_id = map.get('KeyVersionId')
        return self


class CreateKeyRequest(TeaModel):
    def __init__(self, description=None, key_usage=None, origin=None, protection_level=None, enable_automatic_rotation=None, rotation_interval=None, key_spec=None):
        self.description = description
        self.key_usage = key_usage
        self.origin = origin
        self.protection_level = protection_level
        self.enable_automatic_rotation = enable_automatic_rotation
        self.rotation_interval = rotation_interval
        self.key_spec = key_spec

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Description'] = self.description
        result['KeyUsage'] = self.key_usage
        result['Origin'] = self.origin
        result['ProtectionLevel'] = self.protection_level
        result['EnableAutomaticRotation'] = self.enable_automatic_rotation
        result['RotationInterval'] = self.rotation_interval
        result['KeySpec'] = self.key_spec
        return result

    def from_map(self, map={}):
        self.description = map.get('Description')
        self.key_usage = map.get('KeyUsage')
        self.origin = map.get('Origin')
        self.protection_level = map.get('ProtectionLevel')
        self.enable_automatic_rotation = map.get('EnableAutomaticRotation')
        self.rotation_interval = map.get('RotationInterval')
        self.key_spec = map.get('KeySpec')
        return self


class CreateKeyResponse(TeaModel):
    def __init__(self, request_id=None, key_metadata=None):
        self.request_id = request_id
        self.key_metadata = key_metadata

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.key_metadata, 'key_metadata')
        if self.key_metadata:
            self.key_metadata.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.key_metadata is not None:
            result['KeyMetadata'] = self.key_metadata.to_map()
        else:
            result['KeyMetadata'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('KeyMetadata') is not None:
            temp_model = CreateKeyResponseKeyMetadata()
            self.key_metadata = temp_model.from_map(map['KeyMetadata'])
        else:
            self.key_metadata = None
        return self


class CreateKeyResponseKeyMetadata(TeaModel):
    def __init__(self, creation_date=None, description=None, key_id=None, key_state=None, key_usage=None, delete_date=None, creator=None, arn=None, origin=None, material_expire_time=None, protection_level=None, primary_key_version=None, last_rotation_date=None, automatic_rotation=None, rotation_interval=None, next_rotation_date=None, key_spec=None):
        self.creation_date = creation_date
        self.description = description
        self.key_id = key_id
        self.key_state = key_state
        self.key_usage = key_usage
        self.delete_date = delete_date
        self.creator = creator
        self.arn = arn
        self.origin = origin
        self.material_expire_time = material_expire_time
        self.protection_level = protection_level
        self.primary_key_version = primary_key_version
        self.last_rotation_date = last_rotation_date
        self.automatic_rotation = automatic_rotation
        self.rotation_interval = rotation_interval
        self.next_rotation_date = next_rotation_date
        self.key_spec = key_spec

    def validate(self):
        self.validate_required(self.creation_date, 'creation_date')
        self.validate_required(self.description, 'description')
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.key_state, 'key_state')
        self.validate_required(self.key_usage, 'key_usage')
        self.validate_required(self.delete_date, 'delete_date')
        self.validate_required(self.creator, 'creator')
        self.validate_required(self.arn, 'arn')
        self.validate_required(self.origin, 'origin')
        self.validate_required(self.material_expire_time, 'material_expire_time')
        self.validate_required(self.protection_level, 'protection_level')
        self.validate_required(self.primary_key_version, 'primary_key_version')
        self.validate_required(self.last_rotation_date, 'last_rotation_date')
        self.validate_required(self.automatic_rotation, 'automatic_rotation')
        self.validate_required(self.rotation_interval, 'rotation_interval')
        self.validate_required(self.next_rotation_date, 'next_rotation_date')
        self.validate_required(self.key_spec, 'key_spec')

    def to_map(self):
        result = {}
        result['CreationDate'] = self.creation_date
        result['Description'] = self.description
        result['KeyId'] = self.key_id
        result['KeyState'] = self.key_state
        result['KeyUsage'] = self.key_usage
        result['DeleteDate'] = self.delete_date
        result['Creator'] = self.creator
        result['Arn'] = self.arn
        result['Origin'] = self.origin
        result['MaterialExpireTime'] = self.material_expire_time
        result['ProtectionLevel'] = self.protection_level
        result['PrimaryKeyVersion'] = self.primary_key_version
        result['LastRotationDate'] = self.last_rotation_date
        result['AutomaticRotation'] = self.automatic_rotation
        result['RotationInterval'] = self.rotation_interval
        result['NextRotationDate'] = self.next_rotation_date
        result['KeySpec'] = self.key_spec
        return result

    def from_map(self, map={}):
        self.creation_date = map.get('CreationDate')
        self.description = map.get('Description')
        self.key_id = map.get('KeyId')
        self.key_state = map.get('KeyState')
        self.key_usage = map.get('KeyUsage')
        self.delete_date = map.get('DeleteDate')
        self.creator = map.get('Creator')
        self.arn = map.get('Arn')
        self.origin = map.get('Origin')
        self.material_expire_time = map.get('MaterialExpireTime')
        self.protection_level = map.get('ProtectionLevel')
        self.primary_key_version = map.get('PrimaryKeyVersion')
        self.last_rotation_date = map.get('LastRotationDate')
        self.automatic_rotation = map.get('AutomaticRotation')
        self.rotation_interval = map.get('RotationInterval')
        self.next_rotation_date = map.get('NextRotationDate')
        self.key_spec = map.get('KeySpec')
        return self


class CreateAliasRequest(TeaModel):
    def __init__(self, key_id=None, alias_name=None):
        self.key_id = key_id
        self.alias_name = alias_name

    def validate(self):
        self.validate_required(self.key_id, 'key_id')
        self.validate_required(self.alias_name, 'alias_name')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        result['AliasName'] = self.alias_name
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        self.alias_name = map.get('AliasName')
        return self


class CreateAliasResponse(TeaModel):
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


class CancelKeyDeletionRequest(TeaModel):
    def __init__(self, key_id=None):
        self.key_id = key_id

    def validate(self):
        self.validate_required(self.key_id, 'key_id')

    def to_map(self):
        result = {}
        result['KeyId'] = self.key_id
        return result

    def from_map(self, map={}):
        self.key_id = map.get('KeyId')
        return self


class CancelKeyDeletionResponse(TeaModel):
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

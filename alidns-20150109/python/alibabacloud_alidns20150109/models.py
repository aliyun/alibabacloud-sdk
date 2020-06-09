# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class ListTagResourcesRequest(TeaModel):
    def __init__(self, lang=None, resource_type=None, tag=None, resource_id=None, next_token=None):
        self.lang = lang
        self.resource_type = resource_type
        self.tag = []
        self.resource_id = []
        self.next_token = next_token

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['ResourceType'] = self.resource_type
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['NextToken'] = self.next_token
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.resource_type = map.get('ResourceType')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = ListTagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.next_token = map.get('NextToken')
        return self


class ListTagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self


class ListTagResourcesResponse(TeaModel):
    def __init__(self, request_id=None, next_token=None, tag_resources=None):
        self.request_id = request_id
        self.next_token = next_token
        self.tag_resources = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.next_token, 'next_token')
        self.validate_required(self.tag_resources, 'tag_resources')
        if self.tag_resources:
            for k in self.tag_resources:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['NextToken'] = self.next_token
        result['TagResources'] = []
        if self.tag_resources is not None:
            for k in self.tag_resources:
                result['TagResources'].append(k.to_map() if k else None)
        else:
            result['TagResources'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.next_token = map.get('NextToken')
        self.tag_resources = []
        if map.get('TagResources') is not None:
            for k in map.get('TagResources'):
                temp_model = ListTagResourcesResponseTagResources()
                temp_model = temp_model.from_map(k)
                self.tag_resources.append(temp_model)
        else:
            self.tag_resources = None
        return self


class ListTagResourcesResponseTagResources(TeaModel):
    def __init__(self, tag_key=None, tag_value=None, resource_id=None, resource_type=None):
        self.tag_key = tag_key
        self.tag_value = tag_value
        self.resource_id = resource_id
        self.resource_type = resource_type

    def validate(self):
        self.validate_required(self.tag_key, 'tag_key')
        self.validate_required(self.tag_value, 'tag_value')
        self.validate_required(self.resource_id, 'resource_id')
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['TagKey'] = self.tag_key
        result['TagValue'] = self.tag_value
        result['ResourceId'] = self.resource_id
        result['ResourceType'] = self.resource_type
        return result

    def from_map(self, map={}):
        self.tag_key = map.get('TagKey')
        self.tag_value = map.get('TagValue')
        self.resource_id = map.get('ResourceId')
        self.resource_type = map.get('ResourceType')
        return self


class TagResourcesRequest(TeaModel):
    def __init__(self, lang=None, resource_type=None, tag=None, resource_id=None):
        self.lang = lang
        self.resource_type = resource_type
        self.tag = []
        self.resource_id = []

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()
        self.validate_required(self.resource_id, 'resource_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['ResourceType'] = self.resource_type
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.resource_type = map.get('ResourceType')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = TagResourcesRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        return self


class TagResourcesRequestTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self


class TagResourcesResponse(TeaModel):
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


class UntagResourcesRequest(TeaModel):
    def __init__(self, lang=None, resource_type=None, all=None, resource_id=None, tag_key=None):
        self.lang = lang
        self.resource_type = resource_type
        self.all = all
        self.resource_id = []
        self.tag_key = []

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')
        self.validate_required(self.resource_id, 'resource_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['ResourceType'] = self.resource_type
        result['All'] = self.all
        result['ResourceId'] = []
        if self.resource_id is not None:
            for k in self.resource_id:
                result['ResourceId'].append(k)
        else:
            result['ResourceId'] = None
        result['TagKey'] = []
        if self.tag_key is not None:
            for k in self.tag_key:
                result['TagKey'].append(k)
        else:
            result['TagKey'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.resource_type = map.get('ResourceType')
        self.all = map.get('All')
        self.resource_id = []
        if map.get('ResourceId') is not None:
            for k in map.get('ResourceId'):
                self.resource_id.append(k)
        else:
            self.resource_id = None
        self.tag_key = []
        if map.get('TagKey') is not None:
            for k in map.get('TagKey'):
                self.tag_key.append(k)
        else:
            self.tag_key = None
        return self


class UntagResourcesResponse(TeaModel):
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


class DescribeTagsRequest(TeaModel):
    def __init__(self, lang=None, resource_type=None, page_number=None, page_size=None):
        self.lang = lang
        self.resource_type = resource_type
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.resource_type, 'resource_type')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['ResourceType'] = self.resource_type
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.resource_type = map.get('ResourceType')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeTagsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, tags=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.tags = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            for k in self.tags:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Tags'] = []
        if self.tags is not None:
            for k in self.tags:
                result['Tags'].append(k.to_map() if k else None)
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.tags = []
        if map.get('Tags') is not None:
            for k in map.get('Tags'):
                temp_model = DescribeTagsResponseTags()
                temp_model = temp_model.from_map(k)
                self.tags.append(temp_model)
        else:
            self.tags = None
        return self


class DescribeTagsResponseTags(TeaModel):
    def __init__(self, key=None):
        self.key = key

    def validate(self):
        self.validate_required(self.key, 'key')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        return self


class CopyGtmConfigRequest(TeaModel):
    def __init__(self, lang=None, source_id=None, target_id=None, copy_type=None):
        self.lang = lang
        self.source_id = source_id
        self.target_id = target_id
        self.copy_type = copy_type

    def validate(self):
        self.validate_required(self.source_id, 'source_id')
        self.validate_required(self.target_id, 'target_id')
        self.validate_required(self.copy_type, 'copy_type')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['SourceId'] = self.source_id
        result['TargetId'] = self.target_id
        result['CopyType'] = self.copy_type
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.source_id = map.get('SourceId')
        self.target_id = map.get('TargetId')
        self.copy_type = map.get('CopyType')
        return self


class CopyGtmConfigResponse(TeaModel):
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


class DescribeDomainDnssecInfoRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None):
        self.lang = lang
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        return self


class DescribeDomainDnssecInfoResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, status=None, ds_record=None, digest=None, digest_type=None, algorithm=None, public_key=None, key_tag=None, flags=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self.status = status
        self.ds_record = ds_record
        self.digest = digest
        self.digest_type = digest_type
        self.algorithm = algorithm
        self.public_key = public_key
        self.key_tag = key_tag
        self.flags = flags

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.ds_record, 'ds_record')
        self.validate_required(self.digest, 'digest')
        self.validate_required(self.digest_type, 'digest_type')
        self.validate_required(self.algorithm, 'algorithm')
        self.validate_required(self.public_key, 'public_key')
        self.validate_required(self.key_tag, 'key_tag')
        self.validate_required(self.flags, 'flags')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['Status'] = self.status
        result['DsRecord'] = self.ds_record
        result['Digest'] = self.digest
        result['DigestType'] = self.digest_type
        result['Algorithm'] = self.algorithm
        result['PublicKey'] = self.public_key
        result['KeyTag'] = self.key_tag
        result['Flags'] = self.flags
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self.status = map.get('Status')
        self.ds_record = map.get('DsRecord')
        self.digest = map.get('Digest')
        self.digest_type = map.get('DigestType')
        self.algorithm = map.get('Algorithm')
        self.public_key = map.get('PublicKey')
        self.key_tag = map.get('KeyTag')
        self.flags = map.get('Flags')
        return self


class SetDomainDnssecStatusRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, status=None):
        self.lang = lang
        self.domain_name = domain_name
        self.status = status

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.status = map.get('Status')
        return self


class SetDomainDnssecStatusResponse(TeaModel):
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


class TransferDomainRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_names=None, remark=None, target_user_id=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_names = domain_names
        self.remark = remark
        self.target_user_id = target_user_id

    def validate(self):
        self.validate_required(self.domain_names, 'domain_names')
        self.validate_required(self.target_user_id, 'target_user_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainNames'] = self.domain_names
        result['Remark'] = self.remark
        result['TargetUserId'] = self.target_user_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_names = map.get('DomainNames')
        self.remark = map.get('Remark')
        self.target_user_id = map.get('TargetUserId')
        return self


class TransferDomainResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None):
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class DescribeTransferDomainsRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, transfer_type=None, domain_name=None, from_user_id=None, target_user_id=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.transfer_type = transfer_type
        self.domain_name = domain_name
        self.from_user_id = from_user_id
        self.target_user_id = target_user_id

    def validate(self):
        self.validate_required(self.transfer_type, 'transfer_type')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TransferType'] = self.transfer_type
        result['DomainName'] = self.domain_name
        result['FromUserId'] = self.from_user_id
        result['TargetUserId'] = self.target_user_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.transfer_type = map.get('TransferType')
        self.domain_name = map.get('DomainName')
        self.from_user_id = map.get('FromUserId')
        self.target_user_id = map.get('TargetUserId')
        return self


class DescribeTransferDomainsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domain_transfers=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domain_transfers = domain_transfers

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domain_transfers, 'domain_transfers')
        if self.domain_transfers:
            self.domain_transfers.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domain_transfers is not None:
            result['DomainTransfers'] = self.domain_transfers.to_map()
        else:
            result['DomainTransfers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DomainTransfers') is not None:
            temp_model = DescribeTransferDomainsResponseDomainTransfers()
            self.domain_transfers = temp_model.from_map(map['DomainTransfers'])
        else:
            self.domain_transfers = None
        return self


class DescribeTransferDomainsResponseDomainTransfersDomainTransfer(TeaModel):
    def __init__(self, domain_name=None, create_time=None, create_timestamp=None, from_user_id=None, target_user_id=None, id=None):
        self.domain_name = domain_name
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.from_user_id = from_user_id
        self.target_user_id = target_user_id
        self.id = id

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.from_user_id, 'from_user_id')
        self.validate_required(self.target_user_id, 'target_user_id')
        self.validate_required(self.id, 'id')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['FromUserId'] = self.from_user_id
        result['TargetUserId'] = self.target_user_id
        result['Id'] = self.id
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.from_user_id = map.get('FromUserId')
        self.target_user_id = map.get('TargetUserId')
        self.id = map.get('Id')
        return self


class DescribeTransferDomainsResponseDomainTransfers(TeaModel):
    def __init__(self, domain_transfer=None):
        self.domain_transfer = []

    def validate(self):
        self.validate_required(self.domain_transfer, 'domain_transfer')
        if self.domain_transfer:
            for k in self.domain_transfer:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DomainTransfer'] = []
        if self.domain_transfer is not None:
            for k in self.domain_transfer:
                result['DomainTransfer'].append(k.to_map() if k else None)
        else:
            result['DomainTransfer'] = None
        return result

    def from_map(self, map={}):
        self.domain_transfer = []
        if map.get('DomainTransfer') is not None:
            for k in map.get('DomainTransfer'):
                temp_model = DescribeTransferDomainsResponseDomainTransfersDomainTransfer()
                temp_model = temp_model.from_map(k)
                self.domain_transfer.append(temp_model)
        else:
            self.domain_transfer = None
        return self


class AddDomainBackupRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None, period_type=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name
        self.period_type = period_type

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.period_type, 'period_type')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['PeriodType'] = self.period_type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.period_type = map.get('PeriodType')
        return self


class AddDomainBackupResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, period_type=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self.period_type = period_type

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.period_type, 'period_type')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['PeriodType'] = self.period_type
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self.period_type = map.get('PeriodType')
        return self


class RetrieveDomainRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None):
        self.lang = lang
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        return self


class RetrieveDomainResponse(TeaModel):
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


class DescribeGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        return self


class DescribeGtmRecoveryPlanResponse(TeaModel):
    def __init__(self, request_id=None, recovery_plan_id=None, name=None, remark=None, fault_addr_pool_num=None, status=None, last_execute_time=None, last_execute_timestamp=None, last_rollback_time=None, last_rollback_timestamp=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, fault_addr_pools=None):
        self.request_id = request_id
        self.recovery_plan_id = recovery_plan_id
        self.name = name
        self.remark = remark
        self.fault_addr_pool_num = fault_addr_pool_num
        self.status = status
        self.last_execute_time = last_execute_time
        self.last_execute_timestamp = last_execute_timestamp
        self.last_rollback_time = last_rollback_time
        self.last_rollback_timestamp = last_rollback_timestamp
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.fault_addr_pools = fault_addr_pools

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.remark, 'remark')
        self.validate_required(self.fault_addr_pool_num, 'fault_addr_pool_num')
        self.validate_required(self.status, 'status')
        self.validate_required(self.last_execute_time, 'last_execute_time')
        self.validate_required(self.last_execute_timestamp, 'last_execute_timestamp')
        self.validate_required(self.last_rollback_time, 'last_rollback_time')
        self.validate_required(self.last_rollback_timestamp, 'last_rollback_timestamp')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.fault_addr_pools, 'fault_addr_pools')
        if self.fault_addr_pools:
            self.fault_addr_pools.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecoveryPlanId'] = self.recovery_plan_id
        result['Name'] = self.name
        result['Remark'] = self.remark
        result['FaultAddrPoolNum'] = self.fault_addr_pool_num
        result['Status'] = self.status
        result['LastExecuteTime'] = self.last_execute_time
        result['LastExecuteTimestamp'] = self.last_execute_timestamp
        result['LastRollbackTime'] = self.last_rollback_time
        result['LastRollbackTimestamp'] = self.last_rollback_timestamp
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        if self.fault_addr_pools is not None:
            result['FaultAddrPools'] = self.fault_addr_pools.to_map()
        else:
            result['FaultAddrPools'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        self.name = map.get('Name')
        self.remark = map.get('Remark')
        self.fault_addr_pool_num = map.get('FaultAddrPoolNum')
        self.status = map.get('Status')
        self.last_execute_time = map.get('LastExecuteTime')
        self.last_execute_timestamp = map.get('LastExecuteTimestamp')
        self.last_rollback_time = map.get('LastRollbackTime')
        self.last_rollback_timestamp = map.get('LastRollbackTimestamp')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        if map.get('FaultAddrPools') is not None:
            temp_model = DescribeGtmRecoveryPlanResponseFaultAddrPools()
            self.fault_addr_pools = temp_model.from_map(map['FaultAddrPools'])
        else:
            self.fault_addr_pools = None
        return self


class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr(TeaModel):
    def __init__(self, id=None, mode=None, value=None):
        self.id = id
        self.mode = mode
        self.value = value

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.mode, 'mode')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Mode'] = self.mode
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.mode = map.get('Mode')
        self.value = map.get('Value')
        return self


class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs(TeaModel):
    def __init__(self, addr=None):
        self.addr = []

    def validate(self):
        self.validate_required(self.addr, 'addr')
        if self.addr:
            for k in self.addr:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Addr'] = []
        if self.addr is not None:
            for k in self.addr:
                result['Addr'].append(k.to_map() if k else None)
        else:
            result['Addr'] = None
        return result

    def from_map(self, map={}):
        self.addr = []
        if map.get('Addr') is not None:
            for k in map.get('Addr'):
                temp_model = DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr()
                temp_model = temp_model.from_map(k)
                self.addr.append(temp_model)
        else:
            self.addr = None
        return self


class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool(TeaModel):
    def __init__(self, addr_pool_id=None, addr_pool_name=None, instance_id=None, addrs=None):
        self.addr_pool_id = addr_pool_id
        self.addr_pool_name = addr_pool_name
        self.instance_id = instance_id
        self.addrs = addrs

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.addr_pool_name, 'addr_pool_name')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.addrs, 'addrs')
        if self.addrs:
            self.addrs.validate()

    def to_map(self):
        result = {}
        result['AddrPoolId'] = self.addr_pool_id
        result['AddrPoolName'] = self.addr_pool_name
        result['InstanceId'] = self.instance_id
        if self.addrs is not None:
            result['Addrs'] = self.addrs.to_map()
        else:
            result['Addrs'] = None
        return result

    def from_map(self, map={}):
        self.addr_pool_id = map.get('AddrPoolId')
        self.addr_pool_name = map.get('AddrPoolName')
        self.instance_id = map.get('InstanceId')
        if map.get('Addrs') is not None:
            temp_model = DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs()
            self.addrs = temp_model.from_map(map['Addrs'])
        else:
            self.addrs = None
        return self


class DescribeGtmRecoveryPlanResponseFaultAddrPools(TeaModel):
    def __init__(self, fault_addr_pool=None):
        self.fault_addr_pool = []

    def validate(self):
        self.validate_required(self.fault_addr_pool, 'fault_addr_pool')
        if self.fault_addr_pool:
            for k in self.fault_addr_pool:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FaultAddrPool'] = []
        if self.fault_addr_pool is not None:
            for k in self.fault_addr_pool:
                result['FaultAddrPool'].append(k.to_map() if k else None)
        else:
            result['FaultAddrPool'] = None
        return result

    def from_map(self, map={}):
        self.fault_addr_pool = []
        if map.get('FaultAddrPool') is not None:
            for k in map.get('FaultAddrPool'):
                temp_model = DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool()
                temp_model = temp_model.from_map(k)
                self.fault_addr_pool.append(temp_model)
        else:
            self.fault_addr_pool = None
        return self


class AddGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, name=None, remark=None, fault_addr_pool=None):
        self.lang = lang
        self.name = name
        self.remark = remark
        self.fault_addr_pool = fault_addr_pool

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.fault_addr_pool, 'fault_addr_pool')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['Name'] = self.name
        result['Remark'] = self.remark
        result['FaultAddrPool'] = self.fault_addr_pool
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.name = map.get('Name')
        self.remark = map.get('Remark')
        self.fault_addr_pool = map.get('FaultAddrPool')
        return self


class AddGtmRecoveryPlanResponse(TeaModel):
    def __init__(self, request_id=None, recovery_plan_id=None):
        self.request_id = request_id
        self.recovery_plan_id = recovery_plan_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecoveryPlanId'] = self.recovery_plan_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        return self


class UpdateGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None, name=None, remark=None, fault_addr_pool=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id
        self.name = name
        self.remark = remark
        self.fault_addr_pool = fault_addr_pool

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        result['Name'] = self.name
        result['Remark'] = self.remark
        result['FaultAddrPool'] = self.fault_addr_pool
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        self.name = map.get('Name')
        self.remark = map.get('Remark')
        self.fault_addr_pool = map.get('FaultAddrPool')
        return self


class UpdateGtmRecoveryPlanResponse(TeaModel):
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


class DeleteGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        return self


class DeleteGtmRecoveryPlanResponse(TeaModel):
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


class DescribeGtmRecoveryPlansRequest(TeaModel):
    def __init__(self, lang=None, keyword=None, page_number=None, page_size=None):
        self.lang = lang
        self.keyword = keyword
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['Keyword'] = self.keyword
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.keyword = map.get('Keyword')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeGtmRecoveryPlansResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_number=None, page_size=None, recovery_plans=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_number = page_number
        self.page_size = page_size
        self.recovery_plans = recovery_plans

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.recovery_plans, 'recovery_plans')
        if self.recovery_plans:
            self.recovery_plans.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.recovery_plans is not None:
            result['RecoveryPlans'] = self.recovery_plans.to_map()
        else:
            result['RecoveryPlans'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('RecoveryPlans') is not None:
            temp_model = DescribeGtmRecoveryPlansResponseRecoveryPlans()
            self.recovery_plans = temp_model.from_map(map['RecoveryPlans'])
        else:
            self.recovery_plans = None
        return self


class DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan(TeaModel):
    def __init__(self, recovery_plan_id=None, name=None, remark=None, fault_addr_pool_num=None, last_execute_time=None, last_execute_timestamp=None, last_rollback_time=None, last_rollback_timestamp=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, status=None):
        self.recovery_plan_id = recovery_plan_id
        self.name = name
        self.remark = remark
        self.fault_addr_pool_num = fault_addr_pool_num
        self.last_execute_time = last_execute_time
        self.last_execute_timestamp = last_execute_timestamp
        self.last_rollback_time = last_rollback_time
        self.last_rollback_timestamp = last_rollback_timestamp
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.status = status

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.remark, 'remark')
        self.validate_required(self.fault_addr_pool_num, 'fault_addr_pool_num')
        self.validate_required(self.last_execute_time, 'last_execute_time')
        self.validate_required(self.last_execute_timestamp, 'last_execute_timestamp')
        self.validate_required(self.last_rollback_time, 'last_rollback_time')
        self.validate_required(self.last_rollback_timestamp, 'last_rollback_timestamp')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['RecoveryPlanId'] = self.recovery_plan_id
        result['Name'] = self.name
        result['Remark'] = self.remark
        result['FaultAddrPoolNum'] = self.fault_addr_pool_num
        result['LastExecuteTime'] = self.last_execute_time
        result['LastExecuteTimestamp'] = self.last_execute_timestamp
        result['LastRollbackTime'] = self.last_rollback_time
        result['LastRollbackTimestamp'] = self.last_rollback_timestamp
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.recovery_plan_id = map.get('RecoveryPlanId')
        self.name = map.get('Name')
        self.remark = map.get('Remark')
        self.fault_addr_pool_num = map.get('FaultAddrPoolNum')
        self.last_execute_time = map.get('LastExecuteTime')
        self.last_execute_timestamp = map.get('LastExecuteTimestamp')
        self.last_rollback_time = map.get('LastRollbackTime')
        self.last_rollback_timestamp = map.get('LastRollbackTimestamp')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        self.status = map.get('Status')
        return self


class DescribeGtmRecoveryPlansResponseRecoveryPlans(TeaModel):
    def __init__(self, recovery_plan=None):
        self.recovery_plan = []

    def validate(self):
        self.validate_required(self.recovery_plan, 'recovery_plan')
        if self.recovery_plan:
            for k in self.recovery_plan:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RecoveryPlan'] = []
        if self.recovery_plan is not None:
            for k in self.recovery_plan:
                result['RecoveryPlan'].append(k.to_map() if k else None)
        else:
            result['RecoveryPlan'] = None
        return result

    def from_map(self, map={}):
        self.recovery_plan = []
        if map.get('RecoveryPlan') is not None:
            for k in map.get('RecoveryPlan'):
                temp_model = DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan()
                temp_model = temp_model.from_map(k)
                self.recovery_plan.append(temp_model)
        else:
            self.recovery_plan = None
        return self


class DescribeGtmRecoveryPlanAvailableConfigRequest(TeaModel):
    def __init__(self, lang=None):
        self.lang = lang

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        return self


class DescribeGtmRecoveryPlanAvailableConfigResponse(TeaModel):
    def __init__(self, request_id=None, instances=None):
        self.request_id = request_id
        self.instances = instances

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.instances, 'instances')
        if self.instances:
            self.instances.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.instances is not None:
            result['Instances'] = self.instances.to_map()
        else:
            result['Instances'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Instances') is not None:
            temp_model = DescribeGtmRecoveryPlanAvailableConfigResponseInstances()
            self.instances = temp_model.from_map(map['Instances'])
        else:
            self.instances = None
        return self


class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool(TeaModel):
    def __init__(self, addr_pool_id=None, name=None):
        self.addr_pool_id = addr_pool_id
        self.name = name

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.name, 'name')

    def to_map(self):
        result = {}
        result['AddrPoolId'] = self.addr_pool_id
        result['Name'] = self.name
        return result

    def from_map(self, map={}):
        self.addr_pool_id = map.get('AddrPoolId')
        self.name = map.get('Name')
        return self


class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools(TeaModel):
    def __init__(self, addr_pool=None):
        self.addr_pool = []

    def validate(self):
        self.validate_required(self.addr_pool, 'addr_pool')
        if self.addr_pool:
            for k in self.addr_pool:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AddrPool'] = []
        if self.addr_pool is not None:
            for k in self.addr_pool:
                result['AddrPool'].append(k.to_map() if k else None)
        else:
            result['AddrPool'] = None
        return result

    def from_map(self, map={}):
        self.addr_pool = []
        if map.get('AddrPool') is not None:
            for k in map.get('AddrPool'):
                temp_model = DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool()
                temp_model = temp_model.from_map(k)
                self.addr_pool.append(temp_model)
        else:
            self.addr_pool = None
        return self


class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance(TeaModel):
    def __init__(self, instance_id=None, instance_name=None, addr_pools=None):
        self.instance_id = instance_id
        self.instance_name = instance_name
        self.addr_pools = addr_pools

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.addr_pools, 'addr_pools')
        if self.addr_pools:
            self.addr_pools.validate()

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['InstanceName'] = self.instance_name
        if self.addr_pools is not None:
            result['AddrPools'] = self.addr_pools.to_map()
        else:
            result['AddrPools'] = None
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.instance_name = map.get('InstanceName')
        if map.get('AddrPools') is not None:
            temp_model = DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools()
            self.addr_pools = temp_model.from_map(map['AddrPools'])
        else:
            self.addr_pools = None
        return self


class DescribeGtmRecoveryPlanAvailableConfigResponseInstances(TeaModel):
    def __init__(self, instance=None):
        self.instance = []

    def validate(self):
        self.validate_required(self.instance, 'instance')
        if self.instance:
            for k in self.instance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Instance'] = []
        if self.instance is not None:
            for k in self.instance:
                result['Instance'].append(k.to_map() if k else None)
        else:
            result['Instance'] = None
        return result

    def from_map(self, map={}):
        self.instance = []
        if map.get('Instance') is not None:
            for k in map.get('Instance'):
                temp_model = DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance()
                temp_model = temp_model.from_map(k)
                self.instance.append(temp_model)
        else:
            self.instance = None
        return self


class ExecuteGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        return self


class ExecuteGtmRecoveryPlanResponse(TeaModel):
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


class RollbackGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        return self


class RollbackGtmRecoveryPlanResponse(TeaModel):
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


class PreviewGtmRecoveryPlanRequest(TeaModel):
    def __init__(self, lang=None, recovery_plan_id=None, page_number=None, page_size=None):
        self.lang = lang
        self.recovery_plan_id = recovery_plan_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.recovery_plan_id, 'recovery_plan_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['RecoveryPlanId'] = self.recovery_plan_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.recovery_plan_id = map.get('RecoveryPlanId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class PreviewGtmRecoveryPlanResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_size=None, page_number=None, previews=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_size = page_size
        self.page_number = page_number
        self.previews = previews

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.previews, 'previews')
        if self.previews:
            self.previews.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.previews is not None:
            result['Previews'] = self.previews.to_map()
        else:
            result['Previews'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Previews') is not None:
            temp_model = PreviewGtmRecoveryPlanResponsePreviews()
            self.previews = temp_model.from_map(map['Previews'])
        else:
            self.previews = None
        return self


class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo(TeaModel):
    def __init__(self, strategy_name=None, content=None):
        self.strategy_name = strategy_name
        self.content = content

    def validate(self):
        self.validate_required(self.strategy_name, 'strategy_name')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['StrategyName'] = self.strategy_name
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.strategy_name = map.get('StrategyName')
        self.content = map.get('Content')
        return self


class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos(TeaModel):
    def __init__(self, switch_info=None):
        self.switch_info = []

    def validate(self):
        self.validate_required(self.switch_info, 'switch_info')
        if self.switch_info:
            for k in self.switch_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SwitchInfo'] = []
        if self.switch_info is not None:
            for k in self.switch_info:
                result['SwitchInfo'].append(k.to_map() if k else None)
        else:
            result['SwitchInfo'] = None
        return result

    def from_map(self, map={}):
        self.switch_info = []
        if map.get('SwitchInfo') is not None:
            for k in map.get('SwitchInfo'):
                temp_model = PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo()
                temp_model = temp_model.from_map(k)
                self.switch_info.append(temp_model)
        else:
            self.switch_info = None
        return self


class PreviewGtmRecoveryPlanResponsePreviewsPreview(TeaModel):
    def __init__(self, instance_id=None, name=None, user_domain_name=None, switch_infos=None):
        self.instance_id = instance_id
        self.name = name
        self.user_domain_name = user_domain_name
        self.switch_infos = switch_infos

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.user_domain_name, 'user_domain_name')
        self.validate_required(self.switch_infos, 'switch_infos')
        if self.switch_infos:
            self.switch_infos.validate()

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['Name'] = self.name
        result['UserDomainName'] = self.user_domain_name
        if self.switch_infos is not None:
            result['SwitchInfos'] = self.switch_infos.to_map()
        else:
            result['SwitchInfos'] = None
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.name = map.get('Name')
        self.user_domain_name = map.get('UserDomainName')
        if map.get('SwitchInfos') is not None:
            temp_model = PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos()
            self.switch_infos = temp_model.from_map(map['SwitchInfos'])
        else:
            self.switch_infos = None
        return self


class PreviewGtmRecoveryPlanResponsePreviews(TeaModel):
    def __init__(self, preview=None):
        self.preview = []

    def validate(self):
        self.validate_required(self.preview, 'preview')
        if self.preview:
            for k in self.preview:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Preview'] = []
        if self.preview is not None:
            for k in self.preview:
                result['Preview'].append(k.to_map() if k else None)
        else:
            result['Preview'] = None
        return result

    def from_map(self, map={}):
        self.preview = []
        if map.get('Preview') is not None:
            for k in map.get('Preview'):
                temp_model = PreviewGtmRecoveryPlanResponsePreviewsPreview()
                temp_model = temp_model.from_map(k)
                self.preview.append(temp_model)
        else:
            self.preview = None
        return self


class GetTxtRecordForVerifyRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, type=None):
        self.lang = lang
        self.domain_name = domain_name
        self.type = type

    def validate(self):
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.type = map.get('Type')
        return self


class GetTxtRecordForVerifyResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, _rr=None, value=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self._rr = _rr
        self.value = value

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['RR'] = self._rr
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self._rr = map.get('RR')
        self.value = map.get('Value')
        return self


class DescribeDomainStatisticsRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, start_date=None, end_date=None):
        self.lang = lang
        self.domain_name = domain_name
        self.start_date = start_date
        self.end_date = end_date

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.start_date, 'start_date')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['StartDate'] = self.start_date
        result['EndDate'] = self.end_date
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('EndDate')
        return self


class DescribeDomainStatisticsResponse(TeaModel):
    def __init__(self, request_id=None, statistics=None):
        self.request_id = request_id
        self.statistics = statistics

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.statistics, 'statistics')
        if self.statistics:
            self.statistics.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.statistics is not None:
            result['Statistics'] = self.statistics.to_map()
        else:
            result['Statistics'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Statistics') is not None:
            temp_model = DescribeDomainStatisticsResponseStatistics()
            self.statistics = temp_model.from_map(map['Statistics'])
        else:
            self.statistics = None
        return self


class DescribeDomainStatisticsResponseStatisticsStatistic(TeaModel):
    def __init__(self, timestamp=None, count=None):
        self.timestamp = timestamp
        self.count = count

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.count = map.get('Count')
        return self


class DescribeDomainStatisticsResponseStatistics(TeaModel):
    def __init__(self, statistic=None):
        self.statistic = []

    def validate(self):
        self.validate_required(self.statistic, 'statistic')
        if self.statistic:
            for k in self.statistic:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Statistic'] = []
        if self.statistic is not None:
            for k in self.statistic:
                result['Statistic'].append(k.to_map() if k else None)
        else:
            result['Statistic'] = None
        return result

    def from_map(self, map={}):
        self.statistic = []
        if map.get('Statistic') is not None:
            for k in map.get('Statistic'):
                temp_model = DescribeDomainStatisticsResponseStatisticsStatistic()
                temp_model = temp_model.from_map(k)
                self.statistic.append(temp_model)
        else:
            self.statistic = None
        return self


class DescribeRecordStatisticsRequest(TeaModel):
    def __init__(self, lang=None, start_date=None, end_date=None, domain_name=None, rr=None):
        self.lang = lang
        self.start_date = start_date
        self.end_date = end_date
        self.domain_name = domain_name
        self.rr = rr

    def validate(self):
        self.validate_required(self.start_date, 'start_date')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.rr, 'rr')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['StartDate'] = self.start_date
        result['EndDate'] = self.end_date
        result['DomainName'] = self.domain_name
        result['Rr'] = self.rr
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('EndDate')
        self.domain_name = map.get('DomainName')
        self.rr = map.get('Rr')
        return self


class DescribeRecordStatisticsResponse(TeaModel):
    def __init__(self, request_id=None, statistics=None):
        self.request_id = request_id
        self.statistics = statistics

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.statistics, 'statistics')
        if self.statistics:
            self.statistics.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.statistics is not None:
            result['Statistics'] = self.statistics.to_map()
        else:
            result['Statistics'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Statistics') is not None:
            temp_model = DescribeRecordStatisticsResponseStatistics()
            self.statistics = temp_model.from_map(map['Statistics'])
        else:
            self.statistics = None
        return self


class DescribeRecordStatisticsResponseStatisticsStatistic(TeaModel):
    def __init__(self, timestamp=None, count=None):
        self.timestamp = timestamp
        self.count = count

    def validate(self):
        self.validate_required(self.timestamp, 'timestamp')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['Timestamp'] = self.timestamp
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.timestamp = map.get('Timestamp')
        self.count = map.get('Count')
        return self


class DescribeRecordStatisticsResponseStatistics(TeaModel):
    def __init__(self, statistic=None):
        self.statistic = []

    def validate(self):
        self.validate_required(self.statistic, 'statistic')
        if self.statistic:
            for k in self.statistic:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Statistic'] = []
        if self.statistic is not None:
            for k in self.statistic:
                result['Statistic'].append(k.to_map() if k else None)
        else:
            result['Statistic'] = None
        return result

    def from_map(self, map={}):
        self.statistic = []
        if map.get('Statistic') is not None:
            for k in map.get('Statistic'):
                temp_model = DescribeRecordStatisticsResponseStatisticsStatistic()
                temp_model = temp_model.from_map(k)
                self.statistic.append(temp_model)
        else:
            self.statistic = None
        return self


class DescribeGtmInstanceSystemCnameRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None):
        self.lang = lang
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeGtmInstanceSystemCnameResponse(TeaModel):
    def __init__(self, request_id=None, system_cname=None):
        self.request_id = request_id
        self.system_cname = system_cname

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.system_cname, 'system_cname')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SystemCname'] = self.system_cname
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.system_cname = map.get('SystemCname')
        return self


class DescribeInstanceDomainsRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, instance_id=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeInstanceDomainsResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, page_number=None, page_size=None, total_pages=None, instance_domains=None):
        self.request_id = request_id
        self.total_items = total_items
        self.page_number = page_number
        self.page_size = page_size
        self.total_pages = total_pages
        self.instance_domains = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.instance_domains, 'instance_domains')
        if self.instance_domains:
            for k in self.instance_domains:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalPages'] = self.total_pages
        result['InstanceDomains'] = []
        if self.instance_domains is not None:
            for k in self.instance_domains:
                result['InstanceDomains'].append(k.to_map() if k else None)
        else:
            result['InstanceDomains'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_pages = map.get('TotalPages')
        self.instance_domains = []
        if map.get('InstanceDomains') is not None:
            for k in map.get('InstanceDomains'):
                temp_model = DescribeInstanceDomainsResponseInstanceDomains()
                temp_model = temp_model.from_map(k)
                self.instance_domains.append(temp_model)
        else:
            self.instance_domains = None
        return self


class DescribeInstanceDomainsResponseInstanceDomains(TeaModel):
    def __init__(self, domain_name=None, create_time=None, create_timestamp=None):
        self.domain_name = domain_name
        self.create_time = create_time
        self.create_timestamp = create_timestamp

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        return self


class BindInstanceDomainsRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, domain_names=None):
        self.lang = lang
        self.instance_id = instance_id
        self.domain_names = domain_names

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.domain_names, 'domain_names')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['DomainNames'] = self.domain_names
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.domain_names = map.get('DomainNames')
        return self


class BindInstanceDomainsResponse(TeaModel):
    def __init__(self, request_id=None, success_count=None, failed_count=None):
        self.request_id = request_id
        self.success_count = success_count
        self.failed_count = failed_count

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success_count, 'success_count')
        self.validate_required(self.failed_count, 'failed_count')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SuccessCount'] = self.success_count
        result['FailedCount'] = self.failed_count
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success_count = map.get('SuccessCount')
        self.failed_count = map.get('FailedCount')
        return self


class UnbindInstanceDomainsRequest(TeaModel):
    def __init__(self, lang=None, domain_names=None, instance_id=None):
        self.lang = lang
        self.domain_names = domain_names
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.domain_names, 'domain_names')
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainNames'] = self.domain_names
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_names = map.get('DomainNames')
        self.instance_id = map.get('InstanceId')
        return self


class UnbindInstanceDomainsResponse(TeaModel):
    def __init__(self, request_id=None, success_count=None, failed_count=None):
        self.request_id = request_id
        self.success_count = success_count
        self.failed_count = failed_count

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success_count, 'success_count')
        self.validate_required(self.failed_count, 'failed_count')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SuccessCount'] = self.success_count
        result['FailedCount'] = self.failed_count
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success_count = map.get('SuccessCount')
        self.failed_count = map.get('FailedCount')
        return self


class UpdateCustomLineRequest(TeaModel):
    def __init__(self, lang=None, line_name=None, ip_segment=None, line_id=None):
        self.lang = lang
        self.line_name = line_name
        self.ip_segment = []
        self.line_id = line_id

    def validate(self):
        if self.ip_segment:
            for k in self.ip_segment:
                if k :
                    k.validate()
        self.validate_required(self.line_id, 'line_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['LineName'] = self.line_name
        result['IpSegment'] = []
        if self.ip_segment is not None:
            for k in self.ip_segment:
                result['IpSegment'].append(k.to_map() if k else None)
        else:
            result['IpSegment'] = None
        result['LineId'] = self.line_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.line_name = map.get('LineName')
        self.ip_segment = []
        if map.get('IpSegment') is not None:
            for k in map.get('IpSegment'):
                temp_model = UpdateCustomLineRequestIpSegment()
                temp_model = temp_model.from_map(k)
                self.ip_segment.append(temp_model)
        else:
            self.ip_segment = None
        self.line_id = map.get('LineId')
        return self


class UpdateCustomLineRequestIpSegment(TeaModel):
    def __init__(self, start_ip=None, end_ip=None):
        self.start_ip = start_ip
        self.end_ip = end_ip

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['StartIp'] = self.start_ip
        result['EndIp'] = self.end_ip
        return result

    def from_map(self, map={}):
        self.start_ip = map.get('StartIp')
        self.end_ip = map.get('EndIp')
        return self


class UpdateCustomLineResponse(TeaModel):
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


class AddCustomLineRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, line_name=None, ip_segment=None):
        self.lang = lang
        self.domain_name = domain_name
        self.line_name = line_name
        self.ip_segment = []

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.ip_segment, 'ip_segment')
        if self.ip_segment:
            for k in self.ip_segment:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['LineName'] = self.line_name
        result['IpSegment'] = []
        if self.ip_segment is not None:
            for k in self.ip_segment:
                result['IpSegment'].append(k.to_map() if k else None)
        else:
            result['IpSegment'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.line_name = map.get('LineName')
        self.ip_segment = []
        if map.get('IpSegment') is not None:
            for k in map.get('IpSegment'):
                temp_model = AddCustomLineRequestIpSegment()
                temp_model = temp_model.from_map(k)
                self.ip_segment.append(temp_model)
        else:
            self.ip_segment = None
        return self


class AddCustomLineRequestIpSegment(TeaModel):
    def __init__(self, start_ip=None, end_ip=None):
        self.start_ip = start_ip
        self.end_ip = end_ip

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['StartIp'] = self.start_ip
        result['EndIp'] = self.end_ip
        return result

    def from_map(self, map={}):
        self.start_ip = map.get('StartIp')
        self.end_ip = map.get('EndIp')
        return self


class AddCustomLineResponse(TeaModel):
    def __init__(self, request_id=None, line_id=None, line_code=None):
        self.request_id = request_id
        self.line_id = line_id
        self.line_code = line_code

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.line_id, 'line_id')
        self.validate_required(self.line_code, 'line_code')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['LineId'] = self.line_id
        result['LineCode'] = self.line_code
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.line_id = map.get('LineId')
        self.line_code = map.get('LineCode')
        return self


class DeleteCustomLinesRequest(TeaModel):
    def __init__(self, lang=None, line_ids=None):
        self.lang = lang
        self.line_ids = line_ids

    def validate(self):
        self.validate_required(self.line_ids, 'line_ids')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['LineIds'] = self.line_ids
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.line_ids = map.get('LineIds')
        return self


class DeleteCustomLinesResponse(TeaModel):
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


class DescribeCustomLineRequest(TeaModel):
    def __init__(self, line_id=None, lang=None):
        self.line_id = line_id
        self.lang = lang

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['LineId'] = self.line_id
        result['Lang'] = self.lang
        return result

    def from_map(self, map={}):
        self.line_id = map.get('LineId')
        self.lang = map.get('Lang')
        return self


class DescribeCustomLineResponse(TeaModel):
    def __init__(self, request_id=None, id=None, name=None, domain_name=None, create_time=None, create_timestamp=None, ip_segments=None, code=None, ip_segment_list=None):
        self.request_id = request_id
        self.id = id
        self.name = name
        self.domain_name = domain_name
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.ip_segments = ip_segments
        self.code = code
        self.ip_segment_list = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.ip_segments, 'ip_segments')
        self.validate_required(self.code, 'code')
        self.validate_required(self.ip_segment_list, 'ip_segment_list')
        if self.ip_segment_list:
            for k in self.ip_segment_list:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Id'] = self.id
        result['Name'] = self.name
        result['DomainName'] = self.domain_name
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['IpSegments'] = self.ip_segments
        result['Code'] = self.code
        result['IpSegmentList'] = []
        if self.ip_segment_list is not None:
            for k in self.ip_segment_list:
                result['IpSegmentList'].append(k.to_map() if k else None)
        else:
            result['IpSegmentList'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.domain_name = map.get('DomainName')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.ip_segments = map.get('IpSegments')
        self.code = map.get('Code')
        self.ip_segment_list = []
        if map.get('IpSegmentList') is not None:
            for k in map.get('IpSegmentList'):
                temp_model = DescribeCustomLineResponseIpSegmentList()
                temp_model = temp_model.from_map(k)
                self.ip_segment_list.append(temp_model)
        else:
            self.ip_segment_list = None
        return self


class DescribeCustomLineResponseIpSegmentList(TeaModel):
    def __init__(self, name=None, start_ip=None, end_ip=None):
        self.name = name
        self.start_ip = start_ip
        self.end_ip = end_ip

    def validate(self):
        self.validate_required(self.name, 'name')
        self.validate_required(self.start_ip, 'start_ip')
        self.validate_required(self.end_ip, 'end_ip')

    def to_map(self):
        result = {}
        result['Name'] = self.name
        result['StartIp'] = self.start_ip
        result['EndIp'] = self.end_ip
        return result

    def from_map(self, map={}):
        self.name = map.get('Name')
        self.start_ip = map.get('StartIp')
        self.end_ip = map.get('EndIp')
        return self


class DescribeCustomLinesRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, domain_name=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.domain_name = map.get('DomainName')
        return self


class DescribeCustomLinesResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, page_number=None, page_size=None, total_pages=None, custom_lines=None):
        self.request_id = request_id
        self.total_items = total_items
        self.page_number = page_number
        self.page_size = page_size
        self.total_pages = total_pages
        self.custom_lines = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.custom_lines, 'custom_lines')
        if self.custom_lines:
            for k in self.custom_lines:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalPages'] = self.total_pages
        result['CustomLines'] = []
        if self.custom_lines is not None:
            for k in self.custom_lines:
                result['CustomLines'].append(k.to_map() if k else None)
        else:
            result['CustomLines'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_pages = map.get('TotalPages')
        self.custom_lines = []
        if map.get('CustomLines') is not None:
            for k in map.get('CustomLines'):
                temp_model = DescribeCustomLinesResponseCustomLines()
                temp_model = temp_model.from_map(k)
                self.custom_lines.append(temp_model)
        else:
            self.custom_lines = None
        return self


class DescribeCustomLinesResponseCustomLines(TeaModel):
    def __init__(self, id=None, name=None, create_time=None, create_timestamp=None, ip_segments=None, code=None):
        self.id = id
        self.name = name
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.ip_segments = ip_segments
        self.code = code

    def validate(self):
        self.validate_required(self.id, 'id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.ip_segments, 'ip_segments')
        self.validate_required(self.code, 'code')

    def to_map(self):
        result = {}
        result['Id'] = self.id
        result['Name'] = self.name
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['IpSegments'] = self.ip_segments
        result['Code'] = self.code
        return result

    def from_map(self, map={}):
        self.id = map.get('Id')
        self.name = map.get('Name')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.ip_segments = map.get('IpSegments')
        self.code = map.get('Code')
        return self


class DescribeDomainStatisticsSummaryRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, start_date=None, end_date=None, search_mode=None, keyword=None, threshold=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.start_date = start_date
        self.end_date = end_date
        self.search_mode = search_mode
        self.keyword = keyword
        self.threshold = threshold

    def validate(self):
        self.validate_required(self.start_date, 'start_date')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['StartDate'] = self.start_date
        result['EndDate'] = self.end_date
        result['SearchMode'] = self.search_mode
        result['Keyword'] = self.keyword
        result['Threshold'] = self.threshold
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('EndDate')
        self.search_mode = map.get('SearchMode')
        self.keyword = map.get('Keyword')
        self.threshold = map.get('Threshold')
        return self


class DescribeDomainStatisticsSummaryResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_size=None, page_number=None, statistics=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_size = page_size
        self.page_number = page_number
        self.statistics = statistics

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.statistics, 'statistics')
        if self.statistics:
            self.statistics.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.statistics is not None:
            result['Statistics'] = self.statistics.to_map()
        else:
            result['Statistics'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Statistics') is not None:
            temp_model = DescribeDomainStatisticsSummaryResponseStatistics()
            self.statistics = temp_model.from_map(map['Statistics'])
        else:
            self.statistics = None
        return self


class DescribeDomainStatisticsSummaryResponseStatisticsStatistic(TeaModel):
    def __init__(self, domain_name=None, count=None):
        self.domain_name = domain_name
        self.count = count

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.count = map.get('Count')
        return self


class DescribeDomainStatisticsSummaryResponseStatistics(TeaModel):
    def __init__(self, statistic=None):
        self.statistic = []

    def validate(self):
        self.validate_required(self.statistic, 'statistic')
        if self.statistic:
            for k in self.statistic:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Statistic'] = []
        if self.statistic is not None:
            for k in self.statistic:
                result['Statistic'].append(k.to_map() if k else None)
        else:
            result['Statistic'] = None
        return result

    def from_map(self, map={}):
        self.statistic = []
        if map.get('Statistic') is not None:
            for k in map.get('Statistic'):
                temp_model = DescribeDomainStatisticsSummaryResponseStatisticsStatistic()
                temp_model = temp_model.from_map(k)
                self.statistic.append(temp_model)
        else:
            self.statistic = None
        return self


class DescribeRecordStatisticsSummaryRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, start_date=None, end_date=None, domain_name=None, search_mode=None, keyword=None, threshold=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.start_date = start_date
        self.end_date = end_date
        self.domain_name = domain_name
        self.search_mode = search_mode
        self.keyword = keyword
        self.threshold = threshold

    def validate(self):
        self.validate_required(self.start_date, 'start_date')
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['StartDate'] = self.start_date
        result['EndDate'] = self.end_date
        result['DomainName'] = self.domain_name
        result['SearchMode'] = self.search_mode
        result['Keyword'] = self.keyword
        result['Threshold'] = self.threshold
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('EndDate')
        self.domain_name = map.get('DomainName')
        self.search_mode = map.get('SearchMode')
        self.keyword = map.get('Keyword')
        self.threshold = map.get('Threshold')
        return self


class DescribeRecordStatisticsSummaryResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_size=None, page_number=None, statistics=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_size = page_size
        self.page_number = page_number
        self.statistics = statistics

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.statistics, 'statistics')
        if self.statistics:
            self.statistics.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.statistics is not None:
            result['Statistics'] = self.statistics.to_map()
        else:
            result['Statistics'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Statistics') is not None:
            temp_model = DescribeRecordStatisticsSummaryResponseStatistics()
            self.statistics = temp_model.from_map(map['Statistics'])
        else:
            self.statistics = None
        return self


class DescribeRecordStatisticsSummaryResponseStatisticsStatistic(TeaModel):
    def __init__(self, sub_domain=None, count=None):
        self.sub_domain = sub_domain
        self.count = count

    def validate(self):
        self.validate_required(self.sub_domain, 'sub_domain')
        self.validate_required(self.count, 'count')

    def to_map(self):
        result = {}
        result['SubDomain'] = self.sub_domain
        result['Count'] = self.count
        return result

    def from_map(self, map={}):
        self.sub_domain = map.get('SubDomain')
        self.count = map.get('Count')
        return self


class DescribeRecordStatisticsSummaryResponseStatistics(TeaModel):
    def __init__(self, statistic=None):
        self.statistic = []

    def validate(self):
        self.validate_required(self.statistic, 'statistic')
        if self.statistic:
            for k in self.statistic:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Statistic'] = []
        if self.statistic is not None:
            for k in self.statistic:
                result['Statistic'].append(k.to_map() if k else None)
        else:
            result['Statistic'] = None
        return result

    def from_map(self, map={}):
        self.statistic = []
        if map.get('Statistic') is not None:
            for k in map.get('Statistic'):
                temp_model = DescribeRecordStatisticsSummaryResponseStatisticsStatistic()
                temp_model = temp_model.from_map(k)
                self.statistic.append(temp_model)
        else:
            self.statistic = None
        return self


class OperateBatchDomainRequest(TeaModel):
    def __init__(self, lang=None, type=None, domain_record_info=None):
        self.lang = lang
        self.type = type
        self.domain_record_info = []

    def validate(self):
        self.validate_required(self.type, 'type')
        self.validate_required(self.domain_record_info, 'domain_record_info')
        if self.domain_record_info:
            for k in self.domain_record_info:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['Type'] = self.type
        result['DomainRecordInfo'] = []
        if self.domain_record_info is not None:
            for k in self.domain_record_info:
                result['DomainRecordInfo'].append(k.to_map() if k else None)
        else:
            result['DomainRecordInfo'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.type = map.get('Type')
        self.domain_record_info = []
        if map.get('DomainRecordInfo') is not None:
            for k in map.get('DomainRecordInfo'):
                temp_model = OperateBatchDomainRequestDomainRecordInfo()
                temp_model = temp_model.from_map(k)
                self.domain_record_info.append(temp_model)
        else:
            self.domain_record_info = None
        return self


class OperateBatchDomainRequestDomainRecordInfo(TeaModel):
    def __init__(self, domain=None, type=None, rr=None, value=None, ttl=None, priority=None, line=None, new_rr=None, new_type=None, new_value=None):
        self.domain = domain
        self.type = type
        self.rr = rr
        self.value = value
        self.ttl = ttl
        self.priority = priority
        self.line = line
        self.new_rr = new_rr
        self.new_type = new_type
        self.new_value = new_value

    def validate(self):
        self.validate_required(self.domain, 'domain')

    def to_map(self):
        result = {}
        result['Domain'] = self.domain
        result['Type'] = self.type
        result['Rr'] = self.rr
        result['Value'] = self.value
        result['Ttl'] = self.ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        result['NewRr'] = self.new_rr
        result['NewType'] = self.new_type
        result['NewValue'] = self.new_value
        return result

    def from_map(self, map={}):
        self.domain = map.get('Domain')
        self.type = map.get('Type')
        self.rr = map.get('Rr')
        self.value = map.get('Value')
        self.ttl = map.get('Ttl')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        self.new_rr = map.get('NewRr')
        self.new_type = map.get('NewType')
        self.new_value = map.get('NewValue')
        return self


class OperateBatchDomainResponse(TeaModel):
    def __init__(self, request_id=None, task_id=None):
        self.request_id = request_id
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.task_id = map.get('TaskId')
        return self


class DescribeBatchResultDetailRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, task_id=None, batch_type=None, status=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.task_id = task_id
        self.batch_type = batch_type
        self.status = status

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TaskId'] = self.task_id
        result['BatchType'] = self.batch_type
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.task_id = map.get('TaskId')
        self.batch_type = map.get('BatchType')
        self.status = map.get('Status')
        return self


class DescribeBatchResultDetailResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, batch_result_details=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.batch_result_details = batch_result_details

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.batch_result_details, 'batch_result_details')
        if self.batch_result_details:
            self.batch_result_details.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.batch_result_details is not None:
            result['BatchResultDetails'] = self.batch_result_details.to_map()
        else:
            result['BatchResultDetails'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('BatchResultDetails') is not None:
            temp_model = DescribeBatchResultDetailResponseBatchResultDetails()
            self.batch_result_details = temp_model.from_map(map['BatchResultDetails'])
        else:
            self.batch_result_details = None
        return self


class DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail(TeaModel):
    def __init__(self, domain=None, type=None, rr=None, value=None, status=None, reason=None, new_rr=None, new_value=None, batch_type=None, operate_date_str=None, line=None, priority=None, ttl=None, record_id=None, remark=None, rr_status=None):
        self.domain = domain
        self.type = type
        self.rr = rr
        self.value = value
        self.status = status
        self.reason = reason
        self.new_rr = new_rr
        self.new_value = new_value
        self.batch_type = batch_type
        self.operate_date_str = operate_date_str
        self.line = line
        self.priority = priority
        self.ttl = ttl
        self.record_id = record_id
        self.remark = remark
        self.rr_status = rr_status

    def validate(self):
        self.validate_required(self.domain, 'domain')
        self.validate_required(self.type, 'type')
        self.validate_required(self.rr, 'rr')
        self.validate_required(self.value, 'value')
        self.validate_required(self.status, 'status')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.new_rr, 'new_rr')
        self.validate_required(self.new_value, 'new_value')
        self.validate_required(self.batch_type, 'batch_type')
        self.validate_required(self.operate_date_str, 'operate_date_str')
        self.validate_required(self.line, 'line')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.ttl, 'ttl')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self.remark, 'remark')
        self.validate_required(self.rr_status, 'rr_status')

    def to_map(self):
        result = {}
        result['Domain'] = self.domain
        result['Type'] = self.type
        result['Rr'] = self.rr
        result['Value'] = self.value
        result['Status'] = self.status
        result['Reason'] = self.reason
        result['NewRr'] = self.new_rr
        result['NewValue'] = self.new_value
        result['BatchType'] = self.batch_type
        result['OperateDateStr'] = self.operate_date_str
        result['Line'] = self.line
        result['Priority'] = self.priority
        result['Ttl'] = self.ttl
        result['RecordId'] = self.record_id
        result['Remark'] = self.remark
        result['RrStatus'] = self.rr_status
        return result

    def from_map(self, map={}):
        self.domain = map.get('Domain')
        self.type = map.get('Type')
        self.rr = map.get('Rr')
        self.value = map.get('Value')
        self.status = map.get('Status')
        self.reason = map.get('Reason')
        self.new_rr = map.get('NewRr')
        self.new_value = map.get('NewValue')
        self.batch_type = map.get('BatchType')
        self.operate_date_str = map.get('OperateDateStr')
        self.line = map.get('Line')
        self.priority = map.get('Priority')
        self.ttl = map.get('Ttl')
        self.record_id = map.get('RecordId')
        self.remark = map.get('Remark')
        self.rr_status = map.get('RrStatus')
        return self


class DescribeBatchResultDetailResponseBatchResultDetails(TeaModel):
    def __init__(self, batch_result_detail=None):
        self.batch_result_detail = []

    def validate(self):
        self.validate_required(self.batch_result_detail, 'batch_result_detail')
        if self.batch_result_detail:
            for k in self.batch_result_detail:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['BatchResultDetail'] = []
        if self.batch_result_detail is not None:
            for k in self.batch_result_detail:
                result['BatchResultDetail'].append(k.to_map() if k else None)
        else:
            result['BatchResultDetail'] = None
        return result

    def from_map(self, map={}):
        self.batch_result_detail = []
        if map.get('BatchResultDetail') is not None:
            for k in map.get('BatchResultDetail'):
                temp_model = DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail()
                temp_model = temp_model.from_map(k)
                self.batch_result_detail.append(temp_model)
        else:
            self.batch_result_detail = None
        return self


class DescribeBatchResultCountRequest(TeaModel):
    def __init__(self, lang=None, task_id=None, batch_type=None):
        self.lang = lang
        self.task_id = task_id
        self.batch_type = batch_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['TaskId'] = self.task_id
        result['BatchType'] = self.batch_type
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.task_id = map.get('TaskId')
        self.batch_type = map.get('BatchType')
        return self


class DescribeBatchResultCountResponse(TeaModel):
    def __init__(self, request_id=None, status=None, total_count=None, success_count=None, failed_count=None, reason=None, batch_type=None, task_id=None):
        self.request_id = request_id
        self.status = status
        self.total_count = total_count
        self.success_count = success_count
        self.failed_count = failed_count
        self.reason = reason
        self.batch_type = batch_type
        self.task_id = task_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.success_count, 'success_count')
        self.validate_required(self.failed_count, 'failed_count')
        self.validate_required(self.reason, 'reason')
        self.validate_required(self.batch_type, 'batch_type')
        self.validate_required(self.task_id, 'task_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Status'] = self.status
        result['TotalCount'] = self.total_count
        result['SuccessCount'] = self.success_count
        result['FailedCount'] = self.failed_count
        result['Reason'] = self.reason
        result['BatchType'] = self.batch_type
        result['TaskId'] = self.task_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.status = map.get('Status')
        self.total_count = map.get('TotalCount')
        self.success_count = map.get('SuccessCount')
        self.failed_count = map.get('FailedCount')
        self.reason = map.get('Reason')
        self.batch_type = map.get('BatchType')
        self.task_id = map.get('TaskId')
        return self


class SetGtmAccessModeRequest(TeaModel):
    def __init__(self, lang=None, strategy_id=None, access_mode=None):
        self.lang = lang
        self.strategy_id = strategy_id
        self.access_mode = access_mode

    def validate(self):
        self.validate_required(self.strategy_id, 'strategy_id')
        self.validate_required(self.access_mode, 'access_mode')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['StrategyId'] = self.strategy_id
        result['AccessMode'] = self.access_mode
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.strategy_id = map.get('StrategyId')
        self.access_mode = map.get('AccessMode')
        return self


class SetGtmAccessModeResponse(TeaModel):
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


class SetGtmMonitorStatusRequest(TeaModel):
    def __init__(self, lang=None, monitor_config_id=None, status=None):
        self.lang = lang
        self.monitor_config_id = monitor_config_id
        self.status = status

    def validate(self):
        self.validate_required(self.monitor_config_id, 'monitor_config_id')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['MonitorConfigId'] = self.monitor_config_id
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.monitor_config_id = map.get('MonitorConfigId')
        self.status = map.get('Status')
        return self


class SetGtmMonitorStatusResponse(TeaModel):
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


class UpdateGtmInstanceGlobalConfigRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, instance_name=None, ttl=None, user_domain_name=None, lba_strategy=None, alert_group=None, cname_mode=None, cname_custom_domain_name=None):
        self.lang = lang
        self.instance_id = instance_id
        self.instance_name = instance_name
        self.ttl = ttl
        self.user_domain_name = user_domain_name
        self.lba_strategy = lba_strategy
        self.alert_group = alert_group
        self.cname_mode = cname_mode
        self.cname_custom_domain_name = cname_custom_domain_name

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['InstanceName'] = self.instance_name
        result['Ttl'] = self.ttl
        result['UserDomainName'] = self.user_domain_name
        result['LbaStrategy'] = self.lba_strategy
        result['AlertGroup'] = self.alert_group
        result['CnameMode'] = self.cname_mode
        result['CnameCustomDomainName'] = self.cname_custom_domain_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.instance_name = map.get('InstanceName')
        self.ttl = map.get('Ttl')
        self.user_domain_name = map.get('UserDomainName')
        self.lba_strategy = map.get('LbaStrategy')
        self.alert_group = map.get('AlertGroup')
        self.cname_mode = map.get('CnameMode')
        self.cname_custom_domain_name = map.get('CnameCustomDomainName')
        return self


class UpdateGtmInstanceGlobalConfigResponse(TeaModel):
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


class DescribeGtmLogsRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, keyword=None, page_number=None, page_size=None, start_timestamp=None, end_timestamp=None):
        self.lang = lang
        self.instance_id = instance_id
        self.keyword = keyword
        self.page_number = page_number
        self.page_size = page_size
        self.start_timestamp = start_timestamp
        self.end_timestamp = end_timestamp

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['Keyword'] = self.keyword
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['StartTimestamp'] = self.start_timestamp
        result['EndTimestamp'] = self.end_timestamp
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.keyword = map.get('Keyword')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.start_timestamp = map.get('StartTimestamp')
        self.end_timestamp = map.get('EndTimestamp')
        return self


class DescribeGtmLogsResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_size=None, page_number=None, logs=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_size = page_size
        self.page_number = page_number
        self.logs = logs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.logs, 'logs')
        if self.logs:
            self.logs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.logs is not None:
            result['Logs'] = self.logs.to_map()
        else:
            result['Logs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Logs') is not None:
            temp_model = DescribeGtmLogsResponseLogs()
            self.logs = temp_model.from_map(map['Logs'])
        else:
            self.logs = None
        return self


class DescribeGtmLogsResponseLogsLog(TeaModel):
    def __init__(self, oper_time=None, oper_action=None, entity_type=None, entity_id=None, entity_name=None, oper_ip=None, oper_timestamp=None, id=None, content=None):
        self.oper_time = oper_time
        self.oper_action = oper_action
        self.entity_type = entity_type
        self.entity_id = entity_id
        self.entity_name = entity_name
        self.oper_ip = oper_ip
        self.oper_timestamp = oper_timestamp
        self.id = id
        self.content = content

    def validate(self):
        self.validate_required(self.oper_time, 'oper_time')
        self.validate_required(self.oper_action, 'oper_action')
        self.validate_required(self.entity_type, 'entity_type')
        self.validate_required(self.entity_id, 'entity_id')
        self.validate_required(self.entity_name, 'entity_name')
        self.validate_required(self.oper_ip, 'oper_ip')
        self.validate_required(self.oper_timestamp, 'oper_timestamp')
        self.validate_required(self.id, 'id')
        self.validate_required(self.content, 'content')

    def to_map(self):
        result = {}
        result['OperTime'] = self.oper_time
        result['OperAction'] = self.oper_action
        result['EntityType'] = self.entity_type
        result['EntityId'] = self.entity_id
        result['EntityName'] = self.entity_name
        result['OperIp'] = self.oper_ip
        result['OperTimestamp'] = self.oper_timestamp
        result['Id'] = self.id
        result['Content'] = self.content
        return result

    def from_map(self, map={}):
        self.oper_time = map.get('OperTime')
        self.oper_action = map.get('OperAction')
        self.entity_type = map.get('EntityType')
        self.entity_id = map.get('EntityId')
        self.entity_name = map.get('EntityName')
        self.oper_ip = map.get('OperIp')
        self.oper_timestamp = map.get('OperTimestamp')
        self.id = map.get('Id')
        self.content = map.get('Content')
        return self


class DescribeGtmLogsResponseLogs(TeaModel):
    def __init__(self, log=None):
        self.log = []

    def validate(self):
        self.validate_required(self.log, 'log')
        if self.log:
            for k in self.log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Log'] = []
        if self.log is not None:
            for k in self.log:
                result['Log'].append(k.to_map() if k else None)
        else:
            result['Log'] = None
        return result

    def from_map(self, map={}):
        self.log = []
        if map.get('Log') is not None:
            for k in map.get('Log'):
                temp_model = DescribeGtmLogsResponseLogsLog()
                temp_model = temp_model.from_map(k)
                self.log.append(temp_model)
        else:
            self.log = None
        return self


class DeleteGtmAccessStrategyRequest(TeaModel):
    def __init__(self, lang=None, strategy_id=None):
        self.lang = lang
        self.strategy_id = strategy_id

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['StrategyId'] = self.strategy_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.strategy_id = map.get('StrategyId')
        return self


class DeleteGtmAccessStrategyResponse(TeaModel):
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


class AddGtmMonitorRequest(TeaModel):
    def __init__(self, lang=None, addr_pool_id=None, protocol_type=None, interval=None, evaluation_count=None, timeout=None, monitor_extend_info=None, isp_city_node=None):
        self.lang = lang
        self.addr_pool_id = addr_pool_id
        self.protocol_type = protocol_type
        self.interval = interval
        self.evaluation_count = evaluation_count
        self.timeout = timeout
        self.monitor_extend_info = monitor_extend_info
        self.isp_city_node = []

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.protocol_type, 'protocol_type')
        self.validate_required(self.interval, 'interval')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.timeout, 'timeout')
        self.validate_required(self.monitor_extend_info, 'monitor_extend_info')
        self.validate_required(self.isp_city_node, 'isp_city_node')
        if self.isp_city_node:
            for k in self.isp_city_node:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['AddrPoolId'] = self.addr_pool_id
        result['ProtocolType'] = self.protocol_type
        result['Interval'] = self.interval
        result['EvaluationCount'] = self.evaluation_count
        result['Timeout'] = self.timeout
        result['MonitorExtendInfo'] = self.monitor_extend_info
        result['IspCityNode'] = []
        if self.isp_city_node is not None:
            for k in self.isp_city_node:
                result['IspCityNode'].append(k.to_map() if k else None)
        else:
            result['IspCityNode'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.addr_pool_id = map.get('AddrPoolId')
        self.protocol_type = map.get('ProtocolType')
        self.interval = map.get('Interval')
        self.evaluation_count = map.get('EvaluationCount')
        self.timeout = map.get('Timeout')
        self.monitor_extend_info = map.get('MonitorExtendInfo')
        self.isp_city_node = []
        if map.get('IspCityNode') is not None:
            for k in map.get('IspCityNode'):
                temp_model = AddGtmMonitorRequestIspCityNode()
                temp_model = temp_model.from_map(k)
                self.isp_city_node.append(temp_model)
        else:
            self.isp_city_node = None
        return self


class AddGtmMonitorRequestIspCityNode(TeaModel):
    def __init__(self, city_code=None, isp_code=None):
        self.city_code = city_code
        self.isp_code = isp_code

    def validate(self):
        self.validate_required(self.city_code, 'city_code')
        self.validate_required(self.isp_code, 'isp_code')

    def to_map(self):
        result = {}
        result['CityCode'] = self.city_code
        result['IspCode'] = self.isp_code
        return result

    def from_map(self, map={}):
        self.city_code = map.get('CityCode')
        self.isp_code = map.get('IspCode')
        return self


class AddGtmMonitorResponse(TeaModel):
    def __init__(self, request_id=None, monitor_config_id=None):
        self.request_id = request_id
        self.monitor_config_id = monitor_config_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.monitor_config_id, 'monitor_config_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MonitorConfigId'] = self.monitor_config_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.monitor_config_id = map.get('MonitorConfigId')
        return self


class AddGtmAddressPoolRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, name=None, type=None, min_available_addr_num=None, addr=None, monitor_status=None, protocol_type=None, interval=None, evaluation_count=None, timeout=None, monitor_extend_info=None, isp_city_node=None):
        self.lang = lang
        self.instance_id = instance_id
        self.name = name
        self.type = type
        self.min_available_addr_num = min_available_addr_num
        self.addr = []
        self.monitor_status = monitor_status
        self.protocol_type = protocol_type
        self.interval = interval
        self.evaluation_count = evaluation_count
        self.timeout = timeout
        self.monitor_extend_info = monitor_extend_info
        self.isp_city_node = []

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.name, 'name')
        self.validate_required(self.type, 'type')
        self.validate_required(self.min_available_addr_num, 'min_available_addr_num')
        self.validate_required(self.addr, 'addr')
        if self.addr:
            for k in self.addr:
                if k :
                    k.validate()
        if self.isp_city_node:
            for k in self.isp_city_node:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['Name'] = self.name
        result['Type'] = self.type
        result['MinAvailableAddrNum'] = self.min_available_addr_num
        result['Addr'] = []
        if self.addr is not None:
            for k in self.addr:
                result['Addr'].append(k.to_map() if k else None)
        else:
            result['Addr'] = None
        result['MonitorStatus'] = self.monitor_status
        result['ProtocolType'] = self.protocol_type
        result['Interval'] = self.interval
        result['EvaluationCount'] = self.evaluation_count
        result['Timeout'] = self.timeout
        result['MonitorExtendInfo'] = self.monitor_extend_info
        result['IspCityNode'] = []
        if self.isp_city_node is not None:
            for k in self.isp_city_node:
                result['IspCityNode'].append(k.to_map() if k else None)
        else:
            result['IspCityNode'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.name = map.get('Name')
        self.type = map.get('Type')
        self.min_available_addr_num = map.get('MinAvailableAddrNum')
        self.addr = []
        if map.get('Addr') is not None:
            for k in map.get('Addr'):
                temp_model = AddGtmAddressPoolRequestAddr()
                temp_model = temp_model.from_map(k)
                self.addr.append(temp_model)
        else:
            self.addr = None
        self.monitor_status = map.get('MonitorStatus')
        self.protocol_type = map.get('ProtocolType')
        self.interval = map.get('Interval')
        self.evaluation_count = map.get('EvaluationCount')
        self.timeout = map.get('Timeout')
        self.monitor_extend_info = map.get('MonitorExtendInfo')
        self.isp_city_node = []
        if map.get('IspCityNode') is not None:
            for k in map.get('IspCityNode'):
                temp_model = AddGtmAddressPoolRequestIspCityNode()
                temp_model = temp_model.from_map(k)
                self.isp_city_node.append(temp_model)
        else:
            self.isp_city_node = None
        return self


class AddGtmAddressPoolRequestAddr(TeaModel):
    def __init__(self, value=None, lba_weight=None, mode=None):
        self.value = value
        self.lba_weight = lba_weight
        self.mode = mode

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.lba_weight, 'lba_weight')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['LbaWeight'] = self.lba_weight
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.lba_weight = map.get('LbaWeight')
        self.mode = map.get('Mode')
        return self


class AddGtmAddressPoolRequestIspCityNode(TeaModel):
    def __init__(self, city_code=None, isp_code=None):
        self.city_code = city_code
        self.isp_code = isp_code

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['CityCode'] = self.city_code
        result['IspCode'] = self.isp_code
        return result

    def from_map(self, map={}):
        self.city_code = map.get('CityCode')
        self.isp_code = map.get('IspCode')
        return self


class AddGtmAddressPoolResponse(TeaModel):
    def __init__(self, request_id=None, addr_pool_id=None, monitor_config_id=None):
        self.request_id = request_id
        self.addr_pool_id = addr_pool_id
        self.monitor_config_id = monitor_config_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.monitor_config_id, 'monitor_config_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AddrPoolId'] = self.addr_pool_id
        result['MonitorConfigId'] = self.monitor_config_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.addr_pool_id = map.get('AddrPoolId')
        self.monitor_config_id = map.get('MonitorConfigId')
        return self


class AddGtmAccessStrategyRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, strategy_name=None, default_addr_pool_id=None, failover_addr_pool_id=None, access_lines=None):
        self.lang = lang
        self.instance_id = instance_id
        self.strategy_name = strategy_name
        self.default_addr_pool_id = default_addr_pool_id
        self.failover_addr_pool_id = failover_addr_pool_id
        self.access_lines = access_lines

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.strategy_name, 'strategy_name')
        self.validate_required(self.default_addr_pool_id, 'default_addr_pool_id')
        self.validate_required(self.failover_addr_pool_id, 'failover_addr_pool_id')
        self.validate_required(self.access_lines, 'access_lines')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['StrategyName'] = self.strategy_name
        result['DefaultAddrPoolId'] = self.default_addr_pool_id
        result['FailoverAddrPoolId'] = self.failover_addr_pool_id
        result['AccessLines'] = self.access_lines
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.strategy_name = map.get('StrategyName')
        self.default_addr_pool_id = map.get('DefaultAddrPoolId')
        self.failover_addr_pool_id = map.get('FailoverAddrPoolId')
        self.access_lines = map.get('AccessLines')
        return self


class AddGtmAccessStrategyResponse(TeaModel):
    def __init__(self, request_id=None, strategy_id=None):
        self.request_id = request_id
        self.strategy_id = strategy_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.strategy_id, 'strategy_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StrategyId'] = self.strategy_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.strategy_id = map.get('StrategyId')
        return self


class DescribeGtmInstancesRequest(TeaModel):
    def __init__(self, lang=None, page_number=None, page_size=None, keyword=None, resource_group_id=None, need_detail_attributes=None):
        self.lang = lang
        self.page_number = page_number
        self.page_size = page_size
        self.keyword = keyword
        self.resource_group_id = resource_group_id
        self.need_detail_attributes = need_detail_attributes

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Keyword'] = self.keyword
        result['ResourceGroupId'] = self.resource_group_id
        result['NeedDetailAttributes'] = self.need_detail_attributes
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.keyword = map.get('Keyword')
        self.resource_group_id = map.get('ResourceGroupId')
        self.need_detail_attributes = map.get('NeedDetailAttributes')
        return self


class DescribeGtmInstancesResponse(TeaModel):
    def __init__(self, request_id=None, page_number=None, page_size=None, total_items=None, total_pages=None, gtm_instances=None):
        self.request_id = request_id
        self.page_number = page_number
        self.page_size = page_size
        self.total_items = total_items
        self.total_pages = total_pages
        self.gtm_instances = gtm_instances

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.gtm_instances, 'gtm_instances')
        if self.gtm_instances:
            self.gtm_instances.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        if self.gtm_instances is not None:
            result['GtmInstances'] = self.gtm_instances.to_map()
        else:
            result['GtmInstances'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        if map.get('GtmInstances') is not None:
            temp_model = DescribeGtmInstancesResponseGtmInstances()
            self.gtm_instances = temp_model.from_map(map['GtmInstances'])
        else:
            self.gtm_instances = None
        return self


class DescribeGtmInstancesResponseGtmInstancesGtmInstance(TeaModel):
    def __init__(self, instance_id=None, instance_name=None, cname=None, user_domain_name=None, version_code=None, ttl=None, lba_strategy=None, create_time=None, create_timestamp=None, expire_time=None, expire_timestamp=None, alert_group=None, cname_mode=None, access_strategy_num=None, address_pool_num=None):
        self.instance_id = instance_id
        self.instance_name = instance_name
        self.cname = cname
        self.user_domain_name = user_domain_name
        self.version_code = version_code
        self.ttl = ttl
        self.lba_strategy = lba_strategy
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.expire_time = expire_time
        self.expire_timestamp = expire_timestamp
        self.alert_group = alert_group
        self.cname_mode = cname_mode
        self.access_strategy_num = access_strategy_num
        self.address_pool_num = address_pool_num

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.cname, 'cname')
        self.validate_required(self.user_domain_name, 'user_domain_name')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.ttl, 'ttl')
        self.validate_required(self.lba_strategy, 'lba_strategy')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.expire_timestamp, 'expire_timestamp')
        self.validate_required(self.alert_group, 'alert_group')
        self.validate_required(self.cname_mode, 'cname_mode')
        self.validate_required(self.access_strategy_num, 'access_strategy_num')
        self.validate_required(self.address_pool_num, 'address_pool_num')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['InstanceName'] = self.instance_name
        result['Cname'] = self.cname
        result['UserDomainName'] = self.user_domain_name
        result['VersionCode'] = self.version_code
        result['Ttl'] = self.ttl
        result['LbaStrategy'] = self.lba_strategy
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['ExpireTime'] = self.expire_time
        result['ExpireTimestamp'] = self.expire_timestamp
        result['AlertGroup'] = self.alert_group
        result['CnameMode'] = self.cname_mode
        result['AccessStrategyNum'] = self.access_strategy_num
        result['AddressPoolNum'] = self.address_pool_num
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.instance_name = map.get('InstanceName')
        self.cname = map.get('Cname')
        self.user_domain_name = map.get('UserDomainName')
        self.version_code = map.get('VersionCode')
        self.ttl = map.get('Ttl')
        self.lba_strategy = map.get('LbaStrategy')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.expire_time = map.get('ExpireTime')
        self.expire_timestamp = map.get('ExpireTimestamp')
        self.alert_group = map.get('AlertGroup')
        self.cname_mode = map.get('CnameMode')
        self.access_strategy_num = map.get('AccessStrategyNum')
        self.address_pool_num = map.get('AddressPoolNum')
        return self


class DescribeGtmInstancesResponseGtmInstances(TeaModel):
    def __init__(self, gtm_instance=None):
        self.gtm_instance = []

    def validate(self):
        self.validate_required(self.gtm_instance, 'gtm_instance')
        if self.gtm_instance:
            for k in self.gtm_instance:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['GtmInstance'] = []
        if self.gtm_instance is not None:
            for k in self.gtm_instance:
                result['GtmInstance'].append(k.to_map() if k else None)
        else:
            result['GtmInstance'] = None
        return result

    def from_map(self, map={}):
        self.gtm_instance = []
        if map.get('GtmInstance') is not None:
            for k in map.get('GtmInstance'):
                temp_model = DescribeGtmInstancesResponseGtmInstancesGtmInstance()
                temp_model = temp_model.from_map(k)
                self.gtm_instance.append(temp_model)
        else:
            self.gtm_instance = None
        return self


class DeleteGtmAddressPoolRequest(TeaModel):
    def __init__(self, lang=None, addr_pool_id=None):
        self.lang = lang
        self.addr_pool_id = addr_pool_id

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['AddrPoolId'] = self.addr_pool_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.addr_pool_id = map.get('AddrPoolId')
        return self


class DeleteGtmAddressPoolResponse(TeaModel):
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


class DescribeGtmAccessStrategiesRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, page_number=None, page_size=None):
        self.lang = lang
        self.instance_id = instance_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeGtmAccessStrategiesResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_number=None, page_size=None, strategies=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_number = page_number
        self.page_size = page_size
        self.strategies = strategies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.strategies, 'strategies')
        if self.strategies:
            self.strategies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.strategies is not None:
            result['Strategies'] = self.strategies.to_map()
        else:
            result['Strategies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('Strategies') is not None:
            temp_model = DescribeGtmAccessStrategiesResponseStrategies()
            self.strategies = temp_model.from_map(map['Strategies'])
        else:
            self.strategies = None
        return self


class DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine(TeaModel):
    def __init__(self, line_code=None, line_name=None, group_code=None, group_name=None):
        self.line_code = line_code
        self.line_name = line_name
        self.group_code = group_code
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.line_code, 'line_code')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.group_code, 'group_code')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['LineCode'] = self.line_code
        result['LineName'] = self.line_name
        result['GroupCode'] = self.group_code
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.line_code = map.get('LineCode')
        self.line_name = map.get('LineName')
        self.group_code = map.get('GroupCode')
        self.group_name = map.get('GroupName')
        return self


class DescribeGtmAccessStrategiesResponseStrategiesStrategyLines(TeaModel):
    def __init__(self, line=None):
        self.line = []

    def validate(self):
        self.validate_required(self.line, 'line')
        if self.line:
            for k in self.line:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Line'] = []
        if self.line is not None:
            for k in self.line:
                result['Line'].append(k.to_map() if k else None)
        else:
            result['Line'] = None
        return result

    def from_map(self, map={}):
        self.line = []
        if map.get('Line') is not None:
            for k in map.get('Line'):
                temp_model = DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine()
                temp_model = temp_model.from_map(k)
                self.line.append(temp_model)
        else:
            self.line = None
        return self


class DescribeGtmAccessStrategiesResponseStrategiesStrategy(TeaModel):
    def __init__(self, strategy_id=None, strategy_name=None, create_time=None, create_timestamp=None, default_addr_pool_id=None, default_addr_pool_name=None, failover_addr_pool_id=None, failover_addr_pool_name=None, access_mode=None, access_status=None, strategy_mode=None, instance_id=None, default_addr_pool_status=None, failover_addr_pool_status=None, default_addr_pool_monitor_status=None, failover_addr_pool_monitor_status=None, lines=None):
        self.strategy_id = strategy_id
        self.strategy_name = strategy_name
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.default_addr_pool_id = default_addr_pool_id
        self.default_addr_pool_name = default_addr_pool_name
        self.failover_addr_pool_id = failover_addr_pool_id
        self.failover_addr_pool_name = failover_addr_pool_name
        self.access_mode = access_mode
        self.access_status = access_status
        self.strategy_mode = strategy_mode
        self.instance_id = instance_id
        self.default_addr_pool_status = default_addr_pool_status
        self.failover_addr_pool_status = failover_addr_pool_status
        self.default_addr_pool_monitor_status = default_addr_pool_monitor_status
        self.failover_addr_pool_monitor_status = failover_addr_pool_monitor_status
        self.lines = lines

    def validate(self):
        self.validate_required(self.strategy_id, 'strategy_id')
        self.validate_required(self.strategy_name, 'strategy_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.default_addr_pool_id, 'default_addr_pool_id')
        self.validate_required(self.default_addr_pool_name, 'default_addr_pool_name')
        self.validate_required(self.failover_addr_pool_id, 'failover_addr_pool_id')
        self.validate_required(self.failover_addr_pool_name, 'failover_addr_pool_name')
        self.validate_required(self.access_mode, 'access_mode')
        self.validate_required(self.access_status, 'access_status')
        self.validate_required(self.strategy_mode, 'strategy_mode')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.default_addr_pool_status, 'default_addr_pool_status')
        self.validate_required(self.failover_addr_pool_status, 'failover_addr_pool_status')
        self.validate_required(self.default_addr_pool_monitor_status, 'default_addr_pool_monitor_status')
        self.validate_required(self.failover_addr_pool_monitor_status, 'failover_addr_pool_monitor_status')
        self.validate_required(self.lines, 'lines')
        if self.lines:
            self.lines.validate()

    def to_map(self):
        result = {}
        result['StrategyId'] = self.strategy_id
        result['StrategyName'] = self.strategy_name
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['DefaultAddrPoolId'] = self.default_addr_pool_id
        result['DefaultAddrPoolName'] = self.default_addr_pool_name
        result['FailoverAddrPoolId'] = self.failover_addr_pool_id
        result['FailoverAddrPoolName'] = self.failover_addr_pool_name
        result['AccessMode'] = self.access_mode
        result['AccessStatus'] = self.access_status
        result['StrategyMode'] = self.strategy_mode
        result['InstanceId'] = self.instance_id
        result['DefaultAddrPoolStatus'] = self.default_addr_pool_status
        result['FailoverAddrPoolStatus'] = self.failover_addr_pool_status
        result['DefaultAddrPoolMonitorStatus'] = self.default_addr_pool_monitor_status
        result['FailoverAddrPoolMonitorStatus'] = self.failover_addr_pool_monitor_status
        if self.lines is not None:
            result['Lines'] = self.lines.to_map()
        else:
            result['Lines'] = None
        return result

    def from_map(self, map={}):
        self.strategy_id = map.get('StrategyId')
        self.strategy_name = map.get('StrategyName')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.default_addr_pool_id = map.get('DefaultAddrPoolId')
        self.default_addr_pool_name = map.get('DefaultAddrPoolName')
        self.failover_addr_pool_id = map.get('FailoverAddrPoolId')
        self.failover_addr_pool_name = map.get('FailoverAddrPoolName')
        self.access_mode = map.get('AccessMode')
        self.access_status = map.get('AccessStatus')
        self.strategy_mode = map.get('StrategyMode')
        self.instance_id = map.get('InstanceId')
        self.default_addr_pool_status = map.get('DefaultAddrPoolStatus')
        self.failover_addr_pool_status = map.get('FailoverAddrPoolStatus')
        self.default_addr_pool_monitor_status = map.get('DefaultAddrPoolMonitorStatus')
        self.failover_addr_pool_monitor_status = map.get('FailoverAddrPoolMonitorStatus')
        if map.get('Lines') is not None:
            temp_model = DescribeGtmAccessStrategiesResponseStrategiesStrategyLines()
            self.lines = temp_model.from_map(map['Lines'])
        else:
            self.lines = None
        return self


class DescribeGtmAccessStrategiesResponseStrategies(TeaModel):
    def __init__(self, strategy=None):
        self.strategy = []

    def validate(self):
        self.validate_required(self.strategy, 'strategy')
        if self.strategy:
            for k in self.strategy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Strategy'] = []
        if self.strategy is not None:
            for k in self.strategy:
                result['Strategy'].append(k.to_map() if k else None)
        else:
            result['Strategy'] = None
        return result

    def from_map(self, map={}):
        self.strategy = []
        if map.get('Strategy') is not None:
            for k in map.get('Strategy'):
                temp_model = DescribeGtmAccessStrategiesResponseStrategiesStrategy()
                temp_model = temp_model.from_map(k)
                self.strategy.append(temp_model)
        else:
            self.strategy = None
        return self


class DescribeGtmAccessStrategyRequest(TeaModel):
    def __init__(self, lang=None, strategy_id=None):
        self.lang = lang
        self.strategy_id = strategy_id

    def validate(self):
        self.validate_required(self.strategy_id, 'strategy_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['StrategyId'] = self.strategy_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.strategy_id = map.get('StrategyId')
        return self


class DescribeGtmAccessStrategyResponse(TeaModel):
    def __init__(self, request_id=None, strategy_id=None, strategy_name=None, defult_addr_pool_id=None, default_addr_pool_name=None, failover_addr_pool_id=None, failover_addr_pool_name=None, strategy_mode=None, access_mode=None, access_status=None, instance_id=None, default_addr_pool_status=None, failover_addr_pool_status=None, default_addr_pool_monitor_status=None, failover_addr_pool_monitor_status=None, lines=None):
        self.request_id = request_id
        self.strategy_id = strategy_id
        self.strategy_name = strategy_name
        self.defult_addr_pool_id = defult_addr_pool_id
        self.default_addr_pool_name = default_addr_pool_name
        self.failover_addr_pool_id = failover_addr_pool_id
        self.failover_addr_pool_name = failover_addr_pool_name
        self.strategy_mode = strategy_mode
        self.access_mode = access_mode
        self.access_status = access_status
        self.instance_id = instance_id
        self.default_addr_pool_status = default_addr_pool_status
        self.failover_addr_pool_status = failover_addr_pool_status
        self.default_addr_pool_monitor_status = default_addr_pool_monitor_status
        self.failover_addr_pool_monitor_status = failover_addr_pool_monitor_status
        self.lines = lines

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.strategy_id, 'strategy_id')
        self.validate_required(self.strategy_name, 'strategy_name')
        self.validate_required(self.defult_addr_pool_id, 'defult_addr_pool_id')
        self.validate_required(self.default_addr_pool_name, 'default_addr_pool_name')
        self.validate_required(self.failover_addr_pool_id, 'failover_addr_pool_id')
        self.validate_required(self.failover_addr_pool_name, 'failover_addr_pool_name')
        self.validate_required(self.strategy_mode, 'strategy_mode')
        self.validate_required(self.access_mode, 'access_mode')
        self.validate_required(self.access_status, 'access_status')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.default_addr_pool_status, 'default_addr_pool_status')
        self.validate_required(self.failover_addr_pool_status, 'failover_addr_pool_status')
        self.validate_required(self.default_addr_pool_monitor_status, 'default_addr_pool_monitor_status')
        self.validate_required(self.failover_addr_pool_monitor_status, 'failover_addr_pool_monitor_status')
        self.validate_required(self.lines, 'lines')
        if self.lines:
            self.lines.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['StrategyId'] = self.strategy_id
        result['StrategyName'] = self.strategy_name
        result['DefultAddrPoolId'] = self.defult_addr_pool_id
        result['DefaultAddrPoolName'] = self.default_addr_pool_name
        result['FailoverAddrPoolId'] = self.failover_addr_pool_id
        result['FailoverAddrPoolName'] = self.failover_addr_pool_name
        result['StrategyMode'] = self.strategy_mode
        result['AccessMode'] = self.access_mode
        result['AccessStatus'] = self.access_status
        result['InstanceId'] = self.instance_id
        result['DefaultAddrPoolStatus'] = self.default_addr_pool_status
        result['FailoverAddrPoolStatus'] = self.failover_addr_pool_status
        result['DefaultAddrPoolMonitorStatus'] = self.default_addr_pool_monitor_status
        result['FailoverAddrPoolMonitorStatus'] = self.failover_addr_pool_monitor_status
        if self.lines is not None:
            result['Lines'] = self.lines.to_map()
        else:
            result['Lines'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.strategy_id = map.get('StrategyId')
        self.strategy_name = map.get('StrategyName')
        self.defult_addr_pool_id = map.get('DefultAddrPoolId')
        self.default_addr_pool_name = map.get('DefaultAddrPoolName')
        self.failover_addr_pool_id = map.get('FailoverAddrPoolId')
        self.failover_addr_pool_name = map.get('FailoverAddrPoolName')
        self.strategy_mode = map.get('StrategyMode')
        self.access_mode = map.get('AccessMode')
        self.access_status = map.get('AccessStatus')
        self.instance_id = map.get('InstanceId')
        self.default_addr_pool_status = map.get('DefaultAddrPoolStatus')
        self.failover_addr_pool_status = map.get('FailoverAddrPoolStatus')
        self.default_addr_pool_monitor_status = map.get('DefaultAddrPoolMonitorStatus')
        self.failover_addr_pool_monitor_status = map.get('FailoverAddrPoolMonitorStatus')
        if map.get('Lines') is not None:
            temp_model = DescribeGtmAccessStrategyResponseLines()
            self.lines = temp_model.from_map(map['Lines'])
        else:
            self.lines = None
        return self


class DescribeGtmAccessStrategyResponseLinesLine(TeaModel):
    def __init__(self, line_code=None, line_name=None, group_code=None, group_name=None):
        self.line_code = line_code
        self.line_name = line_name
        self.group_code = group_code
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.line_code, 'line_code')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.group_code, 'group_code')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['LineCode'] = self.line_code
        result['LineName'] = self.line_name
        result['GroupCode'] = self.group_code
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.line_code = map.get('LineCode')
        self.line_name = map.get('LineName')
        self.group_code = map.get('GroupCode')
        self.group_name = map.get('GroupName')
        return self


class DescribeGtmAccessStrategyResponseLines(TeaModel):
    def __init__(self, line=None):
        self.line = []

    def validate(self):
        self.validate_required(self.line, 'line')
        if self.line:
            for k in self.line:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Line'] = []
        if self.line is not None:
            for k in self.line:
                result['Line'].append(k.to_map() if k else None)
        else:
            result['Line'] = None
        return result

    def from_map(self, map={}):
        self.line = []
        if map.get('Line') is not None:
            for k in map.get('Line'):
                temp_model = DescribeGtmAccessStrategyResponseLinesLine()
                temp_model = temp_model.from_map(k)
                self.line.append(temp_model)
        else:
            self.line = None
        return self


class DescribeGtmAccessStrategyAvailableConfigRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None):
        self.lang = lang
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeGtmAccessStrategyAvailableConfigResponse(TeaModel):
    def __init__(self, request_id=None, addr_pools=None, lines=None):
        self.request_id = request_id
        self.addr_pools = addr_pools
        self.lines = lines

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.addr_pools, 'addr_pools')
        if self.addr_pools:
            self.addr_pools.validate()
        self.validate_required(self.lines, 'lines')
        if self.lines:
            self.lines.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.addr_pools is not None:
            result['AddrPools'] = self.addr_pools.to_map()
        else:
            result['AddrPools'] = None
        if self.lines is not None:
            result['Lines'] = self.lines.to_map()
        else:
            result['Lines'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('AddrPools') is not None:
            temp_model = DescribeGtmAccessStrategyAvailableConfigResponseAddrPools()
            self.addr_pools = temp_model.from_map(map['AddrPools'])
        else:
            self.addr_pools = None
        if map.get('Lines') is not None:
            temp_model = DescribeGtmAccessStrategyAvailableConfigResponseLines()
            self.lines = temp_model.from_map(map['Lines'])
        else:
            self.lines = None
        return self


class DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool(TeaModel):
    def __init__(self, addr_pool_id=None, addr_pool_name=None):
        self.addr_pool_id = addr_pool_id
        self.addr_pool_name = addr_pool_name

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.addr_pool_name, 'addr_pool_name')

    def to_map(self):
        result = {}
        result['AddrPoolId'] = self.addr_pool_id
        result['AddrPoolName'] = self.addr_pool_name
        return result

    def from_map(self, map={}):
        self.addr_pool_id = map.get('AddrPoolId')
        self.addr_pool_name = map.get('AddrPoolName')
        return self


class DescribeGtmAccessStrategyAvailableConfigResponseAddrPools(TeaModel):
    def __init__(self, addr_pool=None):
        self.addr_pool = []

    def validate(self):
        self.validate_required(self.addr_pool, 'addr_pool')
        if self.addr_pool:
            for k in self.addr_pool:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AddrPool'] = []
        if self.addr_pool is not None:
            for k in self.addr_pool:
                result['AddrPool'].append(k.to_map() if k else None)
        else:
            result['AddrPool'] = None
        return result

    def from_map(self, map={}):
        self.addr_pool = []
        if map.get('AddrPool') is not None:
            for k in map.get('AddrPool'):
                temp_model = DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool()
                temp_model = temp_model.from_map(k)
                self.addr_pool.append(temp_model)
        else:
            self.addr_pool = None
        return self


class DescribeGtmAccessStrategyAvailableConfigResponseLinesLine(TeaModel):
    def __init__(self, line_code=None, line_name=None, group_code=None, group_name=None, status=None, father_code=None):
        self.line_code = line_code
        self.line_name = line_name
        self.group_code = group_code
        self.group_name = group_name
        self.status = status
        self.father_code = father_code

    def validate(self):
        self.validate_required(self.line_code, 'line_code')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.group_code, 'group_code')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.father_code, 'father_code')

    def to_map(self):
        result = {}
        result['LineCode'] = self.line_code
        result['LineName'] = self.line_name
        result['GroupCode'] = self.group_code
        result['GroupName'] = self.group_name
        result['Status'] = self.status
        result['FatherCode'] = self.father_code
        return result

    def from_map(self, map={}):
        self.line_code = map.get('LineCode')
        self.line_name = map.get('LineName')
        self.group_code = map.get('GroupCode')
        self.group_name = map.get('GroupName')
        self.status = map.get('Status')
        self.father_code = map.get('FatherCode')
        return self


class DescribeGtmAccessStrategyAvailableConfigResponseLines(TeaModel):
    def __init__(self, line=None):
        self.line = []

    def validate(self):
        self.validate_required(self.line, 'line')
        if self.line:
            for k in self.line:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Line'] = []
        if self.line is not None:
            for k in self.line:
                result['Line'].append(k.to_map() if k else None)
        else:
            result['Line'] = None
        return result

    def from_map(self, map={}):
        self.line = []
        if map.get('Line') is not None:
            for k in map.get('Line'):
                temp_model = DescribeGtmAccessStrategyAvailableConfigResponseLinesLine()
                temp_model = temp_model.from_map(k)
                self.line.append(temp_model)
        else:
            self.line = None
        return self


class DescribeGtmAvailableAlertGroupRequest(TeaModel):
    def __init__(self, lang=None):
        self.lang = lang

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        return self


class DescribeGtmAvailableAlertGroupResponse(TeaModel):
    def __init__(self, request_id=None, available_alert_group=None):
        self.request_id = request_id
        self.available_alert_group = available_alert_group

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.available_alert_group, 'available_alert_group')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AvailableAlertGroup'] = self.available_alert_group
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.available_alert_group = map.get('AvailableAlertGroup')
        return self


class DescribeGtmInstanceRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, need_detail_attributes=None):
        self.lang = lang
        self.instance_id = instance_id
        self.need_detail_attributes = need_detail_attributes

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['NeedDetailAttributes'] = self.need_detail_attributes
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.need_detail_attributes = map.get('NeedDetailAttributes')
        return self


class DescribeGtmInstanceResponse(TeaModel):
    def __init__(self, request_id=None, instance_id=None, instance_name=None, version_code=None, expire_time=None, expire_timestamp=None, cname=None, user_domain_name=None, ttl=None, lba_strategy=None, create_time=None, create_timestamp=None, alert_group=None, cname_mode=None, access_strategy_num=None, address_pool_num=None):
        self.request_id = request_id
        self.instance_id = instance_id
        self.instance_name = instance_name
        self.version_code = version_code
        self.expire_time = expire_time
        self.expire_timestamp = expire_timestamp
        self.cname = cname
        self.user_domain_name = user_domain_name
        self.ttl = ttl
        self.lba_strategy = lba_strategy
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.alert_group = alert_group
        self.cname_mode = cname_mode
        self.access_strategy_num = access_strategy_num
        self.address_pool_num = address_pool_num

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.instance_name, 'instance_name')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.expire_time, 'expire_time')
        self.validate_required(self.expire_timestamp, 'expire_timestamp')
        self.validate_required(self.cname, 'cname')
        self.validate_required(self.user_domain_name, 'user_domain_name')
        self.validate_required(self.ttl, 'ttl')
        self.validate_required(self.lba_strategy, 'lba_strategy')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.alert_group, 'alert_group')
        self.validate_required(self.cname_mode, 'cname_mode')
        self.validate_required(self.access_strategy_num, 'access_strategy_num')
        self.validate_required(self.address_pool_num, 'address_pool_num')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['InstanceId'] = self.instance_id
        result['InstanceName'] = self.instance_name
        result['VersionCode'] = self.version_code
        result['ExpireTime'] = self.expire_time
        result['ExpireTimestamp'] = self.expire_timestamp
        result['Cname'] = self.cname
        result['UserDomainName'] = self.user_domain_name
        result['Ttl'] = self.ttl
        result['LbaStrategy'] = self.lba_strategy
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['AlertGroup'] = self.alert_group
        result['CnameMode'] = self.cname_mode
        result['AccessStrategyNum'] = self.access_strategy_num
        result['AddressPoolNum'] = self.address_pool_num
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.instance_id = map.get('InstanceId')
        self.instance_name = map.get('InstanceName')
        self.version_code = map.get('VersionCode')
        self.expire_time = map.get('ExpireTime')
        self.expire_timestamp = map.get('ExpireTimestamp')
        self.cname = map.get('Cname')
        self.user_domain_name = map.get('UserDomainName')
        self.ttl = map.get('Ttl')
        self.lba_strategy = map.get('LbaStrategy')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.alert_group = map.get('AlertGroup')
        self.cname_mode = map.get('CnameMode')
        self.access_strategy_num = map.get('AccessStrategyNum')
        self.address_pool_num = map.get('AddressPoolNum')
        return self


class DescribeGtmInstanceAddressPoolRequest(TeaModel):
    def __init__(self, lang=None, addr_pool_id=None):
        self.lang = lang
        self.addr_pool_id = addr_pool_id

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['AddrPoolId'] = self.addr_pool_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.addr_pool_id = map.get('AddrPoolId')
        return self


class DescribeGtmInstanceAddressPoolResponse(TeaModel):
    def __init__(self, request_id=None, addr_pool_id=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, addr_count=None, min_available_addr_num=None, monitor_config_id=None, monitor_status=None, name=None, status=None, type=None, addrs=None):
        self.request_id = request_id
        self.addr_pool_id = addr_pool_id
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.addr_count = addr_count
        self.min_available_addr_num = min_available_addr_num
        self.monitor_config_id = monitor_config_id
        self.monitor_status = monitor_status
        self.name = name
        self.status = status
        self.type = type
        self.addrs = addrs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.addr_count, 'addr_count')
        self.validate_required(self.min_available_addr_num, 'min_available_addr_num')
        self.validate_required(self.monitor_config_id, 'monitor_config_id')
        self.validate_required(self.monitor_status, 'monitor_status')
        self.validate_required(self.name, 'name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.type, 'type')
        self.validate_required(self.addrs, 'addrs')
        if self.addrs:
            self.addrs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AddrPoolId'] = self.addr_pool_id
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        result['AddrCount'] = self.addr_count
        result['MinAvailableAddrNum'] = self.min_available_addr_num
        result['MonitorConfigId'] = self.monitor_config_id
        result['MonitorStatus'] = self.monitor_status
        result['Name'] = self.name
        result['Status'] = self.status
        result['Type'] = self.type
        if self.addrs is not None:
            result['Addrs'] = self.addrs.to_map()
        else:
            result['Addrs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.addr_pool_id = map.get('AddrPoolId')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        self.addr_count = map.get('AddrCount')
        self.min_available_addr_num = map.get('MinAvailableAddrNum')
        self.monitor_config_id = map.get('MonitorConfigId')
        self.monitor_status = map.get('MonitorStatus')
        self.name = map.get('Name')
        self.status = map.get('Status')
        self.type = map.get('Type')
        if map.get('Addrs') is not None:
            temp_model = DescribeGtmInstanceAddressPoolResponseAddrs()
            self.addrs = temp_model.from_map(map['Addrs'])
        else:
            self.addrs = None
        return self


class DescribeGtmInstanceAddressPoolResponseAddrsAddr(TeaModel):
    def __init__(self, addr_id=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, value=None, lba_weight=None, mode=None, alert_status=None):
        self.addr_id = addr_id
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.value = value
        self.lba_weight = lba_weight
        self.mode = mode
        self.alert_status = alert_status

    def validate(self):
        self.validate_required(self.addr_id, 'addr_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.value, 'value')
        self.validate_required(self.lba_weight, 'lba_weight')
        self.validate_required(self.mode, 'mode')
        self.validate_required(self.alert_status, 'alert_status')

    def to_map(self):
        result = {}
        result['AddrId'] = self.addr_id
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        result['Value'] = self.value
        result['LbaWeight'] = self.lba_weight
        result['Mode'] = self.mode
        result['AlertStatus'] = self.alert_status
        return result

    def from_map(self, map={}):
        self.addr_id = map.get('AddrId')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        self.value = map.get('Value')
        self.lba_weight = map.get('LbaWeight')
        self.mode = map.get('Mode')
        self.alert_status = map.get('AlertStatus')
        return self


class DescribeGtmInstanceAddressPoolResponseAddrs(TeaModel):
    def __init__(self, addr=None):
        self.addr = []

    def validate(self):
        self.validate_required(self.addr, 'addr')
        if self.addr:
            for k in self.addr:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Addr'] = []
        if self.addr is not None:
            for k in self.addr:
                result['Addr'].append(k.to_map() if k else None)
        else:
            result['Addr'] = None
        return result

    def from_map(self, map={}):
        self.addr = []
        if map.get('Addr') is not None:
            for k in map.get('Addr'):
                temp_model = DescribeGtmInstanceAddressPoolResponseAddrsAddr()
                temp_model = temp_model.from_map(k)
                self.addr.append(temp_model)
        else:
            self.addr = None
        return self


class DescribeGtmInstanceAddressPoolsRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None, page_number=None, page_size=None):
        self.lang = lang
        self.instance_id = instance_id
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeGtmInstanceAddressPoolsResponse(TeaModel):
    def __init__(self, request_id=None, total_items=None, total_pages=None, page_number=None, page_size=None, addr_pools=None):
        self.request_id = request_id
        self.total_items = total_items
        self.total_pages = total_pages
        self.page_number = page_number
        self.page_size = page_size
        self.addr_pools = addr_pools

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_items, 'total_items')
        self.validate_required(self.total_pages, 'total_pages')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.addr_pools, 'addr_pools')
        if self.addr_pools:
            self.addr_pools.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalItems'] = self.total_items
        result['TotalPages'] = self.total_pages
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.addr_pools is not None:
            result['AddrPools'] = self.addr_pools.to_map()
        else:
            result['AddrPools'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_items = map.get('TotalItems')
        self.total_pages = map.get('TotalPages')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('AddrPools') is not None:
            temp_model = DescribeGtmInstanceAddressPoolsResponseAddrPools()
            self.addr_pools = temp_model.from_map(map['AddrPools'])
        else:
            self.addr_pools = None
        return self


class DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool(TeaModel):
    def __init__(self, addr_pool_id=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, addr_count=None, min_available_addr_num=None, monitor_config_id=None, monitor_status=None, name=None, status=None, type=None):
        self.addr_pool_id = addr_pool_id
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.addr_count = addr_count
        self.min_available_addr_num = min_available_addr_num
        self.monitor_config_id = monitor_config_id
        self.monitor_status = monitor_status
        self.name = name
        self.status = status
        self.type = type

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.addr_count, 'addr_count')
        self.validate_required(self.min_available_addr_num, 'min_available_addr_num')
        self.validate_required(self.monitor_config_id, 'monitor_config_id')
        self.validate_required(self.monitor_status, 'monitor_status')
        self.validate_required(self.name, 'name')
        self.validate_required(self.status, 'status')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['AddrPoolId'] = self.addr_pool_id
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        result['AddrCount'] = self.addr_count
        result['MinAvailableAddrNum'] = self.min_available_addr_num
        result['MonitorConfigId'] = self.monitor_config_id
        result['MonitorStatus'] = self.monitor_status
        result['Name'] = self.name
        result['Status'] = self.status
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.addr_pool_id = map.get('AddrPoolId')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        self.addr_count = map.get('AddrCount')
        self.min_available_addr_num = map.get('MinAvailableAddrNum')
        self.monitor_config_id = map.get('MonitorConfigId')
        self.monitor_status = map.get('MonitorStatus')
        self.name = map.get('Name')
        self.status = map.get('Status')
        self.type = map.get('Type')
        return self


class DescribeGtmInstanceAddressPoolsResponseAddrPools(TeaModel):
    def __init__(self, addr_pool=None):
        self.addr_pool = []

    def validate(self):
        self.validate_required(self.addr_pool, 'addr_pool')
        if self.addr_pool:
            for k in self.addr_pool:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AddrPool'] = []
        if self.addr_pool is not None:
            for k in self.addr_pool:
                result['AddrPool'].append(k.to_map() if k else None)
        else:
            result['AddrPool'] = None
        return result

    def from_map(self, map={}):
        self.addr_pool = []
        if map.get('AddrPool') is not None:
            for k in map.get('AddrPool'):
                temp_model = DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool()
                temp_model = temp_model.from_map(k)
                self.addr_pool.append(temp_model)
        else:
            self.addr_pool = None
        return self


class DescribeGtmInstanceStatusRequest(TeaModel):
    def __init__(self, lang=None, instance_id=None):
        self.lang = lang
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeGtmInstanceStatusResponse(TeaModel):
    def __init__(self, request_id=None, addr_not_available_num=None, addr_pool_not_available_num=None, switch_to_failover_strategy_num=None, strategy_not_available_num=None, status=None, status_reason=None):
        self.request_id = request_id
        self.addr_not_available_num = addr_not_available_num
        self.addr_pool_not_available_num = addr_pool_not_available_num
        self.switch_to_failover_strategy_num = switch_to_failover_strategy_num
        self.strategy_not_available_num = strategy_not_available_num
        self.status = status
        self.status_reason = status_reason

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.addr_not_available_num, 'addr_not_available_num')
        self.validate_required(self.addr_pool_not_available_num, 'addr_pool_not_available_num')
        self.validate_required(self.switch_to_failover_strategy_num, 'switch_to_failover_strategy_num')
        self.validate_required(self.strategy_not_available_num, 'strategy_not_available_num')
        self.validate_required(self.status, 'status')
        self.validate_required(self.status_reason, 'status_reason')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AddrNotAvailableNum'] = self.addr_not_available_num
        result['AddrPoolNotAvailableNum'] = self.addr_pool_not_available_num
        result['SwitchToFailoverStrategyNum'] = self.switch_to_failover_strategy_num
        result['StrategyNotAvailableNum'] = self.strategy_not_available_num
        result['Status'] = self.status
        result['StatusReason'] = self.status_reason
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.addr_not_available_num = map.get('AddrNotAvailableNum')
        self.addr_pool_not_available_num = map.get('AddrPoolNotAvailableNum')
        self.switch_to_failover_strategy_num = map.get('SwitchToFailoverStrategyNum')
        self.strategy_not_available_num = map.get('StrategyNotAvailableNum')
        self.status = map.get('Status')
        self.status_reason = map.get('StatusReason')
        return self


class DescribeGtmMonitorAvailableConfigRequest(TeaModel):
    def __init__(self, lang=None):
        self.lang = lang

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        return self


class DescribeGtmMonitorAvailableConfigResponse(TeaModel):
    def __init__(self, request_id=None, isp_city_nodes=None):
        self.request_id = request_id
        self.isp_city_nodes = isp_city_nodes

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.isp_city_nodes, 'isp_city_nodes')
        if self.isp_city_nodes:
            self.isp_city_nodes.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.isp_city_nodes is not None:
            result['IspCityNodes'] = self.isp_city_nodes.to_map()
        else:
            result['IspCityNodes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('IspCityNodes') is not None:
            temp_model = DescribeGtmMonitorAvailableConfigResponseIspCityNodes()
            self.isp_city_nodes = temp_model.from_map(map['IspCityNodes'])
        else:
            self.isp_city_nodes = None
        return self


class DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode(TeaModel):
    def __init__(self, isp_name=None, isp_code=None, city_name=None, city_code=None, default_selected=None, mainland=None, group_type=None, group_name=None):
        self.isp_name = isp_name
        self.isp_code = isp_code
        self.city_name = city_name
        self.city_code = city_code
        self.default_selected = default_selected
        self.mainland = mainland
        self.group_type = group_type
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.isp_name, 'isp_name')
        self.validate_required(self.isp_code, 'isp_code')
        self.validate_required(self.city_name, 'city_name')
        self.validate_required(self.city_code, 'city_code')
        self.validate_required(self.default_selected, 'default_selected')
        self.validate_required(self.mainland, 'mainland')
        self.validate_required(self.group_type, 'group_type')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['IspName'] = self.isp_name
        result['IspCode'] = self.isp_code
        result['CityName'] = self.city_name
        result['CityCode'] = self.city_code
        result['DefaultSelected'] = self.default_selected
        result['Mainland'] = self.mainland
        result['GroupType'] = self.group_type
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.isp_name = map.get('IspName')
        self.isp_code = map.get('IspCode')
        self.city_name = map.get('CityName')
        self.city_code = map.get('CityCode')
        self.default_selected = map.get('DefaultSelected')
        self.mainland = map.get('Mainland')
        self.group_type = map.get('GroupType')
        self.group_name = map.get('GroupName')
        return self


class DescribeGtmMonitorAvailableConfigResponseIspCityNodes(TeaModel):
    def __init__(self, isp_city_node=None):
        self.isp_city_node = []

    def validate(self):
        self.validate_required(self.isp_city_node, 'isp_city_node')
        if self.isp_city_node:
            for k in self.isp_city_node:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['IspCityNode'] = []
        if self.isp_city_node is not None:
            for k in self.isp_city_node:
                result['IspCityNode'].append(k.to_map() if k else None)
        else:
            result['IspCityNode'] = None
        return result

    def from_map(self, map={}):
        self.isp_city_node = []
        if map.get('IspCityNode') is not None:
            for k in map.get('IspCityNode'):
                temp_model = DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode()
                temp_model = temp_model.from_map(k)
                self.isp_city_node.append(temp_model)
        else:
            self.isp_city_node = None
        return self


class DescribeGtmMonitorConfigRequest(TeaModel):
    def __init__(self, lang=None, monitor_config_id=None):
        self.lang = lang
        self.monitor_config_id = monitor_config_id

    def validate(self):
        self.validate_required(self.monitor_config_id, 'monitor_config_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['MonitorConfigId'] = self.monitor_config_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.monitor_config_id = map.get('MonitorConfigId')
        return self


class DescribeGtmMonitorConfigResponse(TeaModel):
    def __init__(self, request_id=None, monitor_config_id=None, create_time=None, create_timestamp=None, update_time=None, update_timestamp=None, protocol_type=None, interval=None, evaluation_count=None, timeout=None, monitor_extend_info=None, isp_city_nodes=None):
        self.request_id = request_id
        self.monitor_config_id = monitor_config_id
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.update_time = update_time
        self.update_timestamp = update_timestamp
        self.protocol_type = protocol_type
        self.interval = interval
        self.evaluation_count = evaluation_count
        self.timeout = timeout
        self.monitor_extend_info = monitor_extend_info
        self.isp_city_nodes = isp_city_nodes

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.monitor_config_id, 'monitor_config_id')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.update_time, 'update_time')
        self.validate_required(self.update_timestamp, 'update_timestamp')
        self.validate_required(self.protocol_type, 'protocol_type')
        self.validate_required(self.interval, 'interval')
        self.validate_required(self.evaluation_count, 'evaluation_count')
        self.validate_required(self.timeout, 'timeout')
        self.validate_required(self.monitor_extend_info, 'monitor_extend_info')
        self.validate_required(self.isp_city_nodes, 'isp_city_nodes')
        if self.isp_city_nodes:
            self.isp_city_nodes.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MonitorConfigId'] = self.monitor_config_id
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        result['UpdateTime'] = self.update_time
        result['UpdateTimestamp'] = self.update_timestamp
        result['ProtocolType'] = self.protocol_type
        result['Interval'] = self.interval
        result['EvaluationCount'] = self.evaluation_count
        result['Timeout'] = self.timeout
        result['MonitorExtendInfo'] = self.monitor_extend_info
        if self.isp_city_nodes is not None:
            result['IspCityNodes'] = self.isp_city_nodes.to_map()
        else:
            result['IspCityNodes'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.monitor_config_id = map.get('MonitorConfigId')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        self.update_time = map.get('UpdateTime')
        self.update_timestamp = map.get('UpdateTimestamp')
        self.protocol_type = map.get('ProtocolType')
        self.interval = map.get('Interval')
        self.evaluation_count = map.get('EvaluationCount')
        self.timeout = map.get('Timeout')
        self.monitor_extend_info = map.get('MonitorExtendInfo')
        if map.get('IspCityNodes') is not None:
            temp_model = DescribeGtmMonitorConfigResponseIspCityNodes()
            self.isp_city_nodes = temp_model.from_map(map['IspCityNodes'])
        else:
            self.isp_city_nodes = None
        return self


class DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode(TeaModel):
    def __init__(self, country_name=None, country_code=None, city_name=None, city_code=None, isp_code=None, isp_name=None):
        self.country_name = country_name
        self.country_code = country_code
        self.city_name = city_name
        self.city_code = city_code
        self.isp_code = isp_code
        self.isp_name = isp_name

    def validate(self):
        self.validate_required(self.country_name, 'country_name')
        self.validate_required(self.country_code, 'country_code')
        self.validate_required(self.city_name, 'city_name')
        self.validate_required(self.city_code, 'city_code')
        self.validate_required(self.isp_code, 'isp_code')
        self.validate_required(self.isp_name, 'isp_name')

    def to_map(self):
        result = {}
        result['CountryName'] = self.country_name
        result['CountryCode'] = self.country_code
        result['CityName'] = self.city_name
        result['CityCode'] = self.city_code
        result['IspCode'] = self.isp_code
        result['IspName'] = self.isp_name
        return result

    def from_map(self, map={}):
        self.country_name = map.get('CountryName')
        self.country_code = map.get('CountryCode')
        self.city_name = map.get('CityName')
        self.city_code = map.get('CityCode')
        self.isp_code = map.get('IspCode')
        self.isp_name = map.get('IspName')
        return self


class DescribeGtmMonitorConfigResponseIspCityNodes(TeaModel):
    def __init__(self, isp_city_node=None):
        self.isp_city_node = []

    def validate(self):
        self.validate_required(self.isp_city_node, 'isp_city_node')
        if self.isp_city_node:
            for k in self.isp_city_node:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['IspCityNode'] = []
        if self.isp_city_node is not None:
            for k in self.isp_city_node:
                result['IspCityNode'].append(k.to_map() if k else None)
        else:
            result['IspCityNode'] = None
        return result

    def from_map(self, map={}):
        self.isp_city_node = []
        if map.get('IspCityNode') is not None:
            for k in map.get('IspCityNode'):
                temp_model = DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode()
                temp_model = temp_model.from_map(k)
                self.isp_city_node.append(temp_model)
        else:
            self.isp_city_node = None
        return self


class UpdateGtmAccessStrategyRequest(TeaModel):
    def __init__(self, lang=None, strategy_id=None, strategy_name=None, default_addr_pool_id=None, failover_addr_pool_id=None, access_lines=None):
        self.lang = lang
        self.strategy_id = strategy_id
        self.strategy_name = strategy_name
        self.default_addr_pool_id = default_addr_pool_id
        self.failover_addr_pool_id = failover_addr_pool_id
        self.access_lines = access_lines

    def validate(self):
        self.validate_required(self.strategy_id, 'strategy_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['StrategyId'] = self.strategy_id
        result['StrategyName'] = self.strategy_name
        result['DefaultAddrPoolId'] = self.default_addr_pool_id
        result['FailoverAddrPoolId'] = self.failover_addr_pool_id
        result['AccessLines'] = self.access_lines
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.strategy_id = map.get('StrategyId')
        self.strategy_name = map.get('StrategyName')
        self.default_addr_pool_id = map.get('DefaultAddrPoolId')
        self.failover_addr_pool_id = map.get('FailoverAddrPoolId')
        self.access_lines = map.get('AccessLines')
        return self


class UpdateGtmAccessStrategyResponse(TeaModel):
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


class UpdateGtmAddressPoolRequest(TeaModel):
    def __init__(self, lang=None, addr_pool_id=None, name=None, type=None, min_available_addr_num=None, addr=None):
        self.lang = lang
        self.addr_pool_id = addr_pool_id
        self.name = name
        self.type = type
        self.min_available_addr_num = min_available_addr_num
        self.addr = []

    def validate(self):
        self.validate_required(self.addr_pool_id, 'addr_pool_id')
        self.validate_required(self.type, 'type')
        self.validate_required(self.addr, 'addr')
        if self.addr:
            for k in self.addr:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['AddrPoolId'] = self.addr_pool_id
        result['Name'] = self.name
        result['Type'] = self.type
        result['MinAvailableAddrNum'] = self.min_available_addr_num
        result['Addr'] = []
        if self.addr is not None:
            for k in self.addr:
                result['Addr'].append(k.to_map() if k else None)
        else:
            result['Addr'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.addr_pool_id = map.get('AddrPoolId')
        self.name = map.get('Name')
        self.type = map.get('Type')
        self.min_available_addr_num = map.get('MinAvailableAddrNum')
        self.addr = []
        if map.get('Addr') is not None:
            for k in map.get('Addr'):
                temp_model = UpdateGtmAddressPoolRequestAddr()
                temp_model = temp_model.from_map(k)
                self.addr.append(temp_model)
        else:
            self.addr = None
        return self


class UpdateGtmAddressPoolRequestAddr(TeaModel):
    def __init__(self, value=None, lba_weight=None, mode=None):
        self.value = value
        self.lba_weight = lba_weight
        self.mode = mode

    def validate(self):
        self.validate_required(self.value, 'value')
        self.validate_required(self.lba_weight, 'lba_weight')
        self.validate_required(self.mode, 'mode')

    def to_map(self):
        result = {}
        result['Value'] = self.value
        result['LbaWeight'] = self.lba_weight
        result['Mode'] = self.mode
        return result

    def from_map(self, map={}):
        self.value = map.get('Value')
        self.lba_weight = map.get('LbaWeight')
        self.mode = map.get('Mode')
        return self


class UpdateGtmAddressPoolResponse(TeaModel):
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


class UpdateGtmMonitorRequest(TeaModel):
    def __init__(self, lang=None, monitor_config_id=None, protocol_type=None, interval=None, evaluation_count=None, timeout=None, monitor_extend_info=None, isp_city_node=None):
        self.lang = lang
        self.monitor_config_id = monitor_config_id
        self.protocol_type = protocol_type
        self.interval = interval
        self.evaluation_count = evaluation_count
        self.timeout = timeout
        self.monitor_extend_info = monitor_extend_info
        self.isp_city_node = []

    def validate(self):
        self.validate_required(self.monitor_config_id, 'monitor_config_id')
        self.validate_required(self.protocol_type, 'protocol_type')
        self.validate_required(self.monitor_extend_info, 'monitor_extend_info')
        self.validate_required(self.isp_city_node, 'isp_city_node')
        if self.isp_city_node:
            for k in self.isp_city_node:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['MonitorConfigId'] = self.monitor_config_id
        result['ProtocolType'] = self.protocol_type
        result['Interval'] = self.interval
        result['EvaluationCount'] = self.evaluation_count
        result['Timeout'] = self.timeout
        result['MonitorExtendInfo'] = self.monitor_extend_info
        result['IspCityNode'] = []
        if self.isp_city_node is not None:
            for k in self.isp_city_node:
                result['IspCityNode'].append(k.to_map() if k else None)
        else:
            result['IspCityNode'] = None
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.monitor_config_id = map.get('MonitorConfigId')
        self.protocol_type = map.get('ProtocolType')
        self.interval = map.get('Interval')
        self.evaluation_count = map.get('EvaluationCount')
        self.timeout = map.get('Timeout')
        self.monitor_extend_info = map.get('MonitorExtendInfo')
        self.isp_city_node = []
        if map.get('IspCityNode') is not None:
            for k in map.get('IspCityNode'):
                temp_model = UpdateGtmMonitorRequestIspCityNode()
                temp_model = temp_model.from_map(k)
                self.isp_city_node.append(temp_model)
        else:
            self.isp_city_node = None
        return self


class UpdateGtmMonitorRequestIspCityNode(TeaModel):
    def __init__(self, city_code=None, isp_code=None):
        self.city_code = city_code
        self.isp_code = isp_code

    def validate(self):
        self.validate_required(self.city_code, 'city_code')
        self.validate_required(self.isp_code, 'isp_code')

    def to_map(self):
        result = {}
        result['CityCode'] = self.city_code
        result['IspCode'] = self.isp_code
        return result

    def from_map(self, map={}):
        self.city_code = map.get('CityCode')
        self.isp_code = map.get('IspCode')
        return self


class UpdateGtmMonitorResponse(TeaModel):
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


class UpdateDomainRemarkRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None, remark=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name
        self.remark = remark

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.remark = map.get('Remark')
        return self


class UpdateDomainRemarkResponse(TeaModel):
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


class UpdateDomainRecordRemarkRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None, remark=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id
        self.remark = remark

    def validate(self):
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        self.remark = map.get('Remark')
        return self


class UpdateDomainRecordRemarkResponse(TeaModel):
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


class DescribeSupportLinesRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        return self


class DescribeSupportLinesResponse(TeaModel):
    def __init__(self, request_id=None, record_lines=None):
        self.request_id = request_id
        self.record_lines = record_lines

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_lines, 'record_lines')
        if self.record_lines:
            self.record_lines.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.record_lines is not None:
            result['RecordLines'] = self.record_lines.to_map()
        else:
            result['RecordLines'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('RecordLines') is not None:
            temp_model = DescribeSupportLinesResponseRecordLines()
            self.record_lines = temp_model.from_map(map['RecordLines'])
        else:
            self.record_lines = None
        return self


class DescribeSupportLinesResponseRecordLinesRecordLine(TeaModel):
    def __init__(self, line_code=None, father_code=None, line_name=None, line_display_name=None):
        self.line_code = line_code
        self.father_code = father_code
        self.line_name = line_name
        self.line_display_name = line_display_name

    def validate(self):
        self.validate_required(self.line_code, 'line_code')
        self.validate_required(self.father_code, 'father_code')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.line_display_name, 'line_display_name')

    def to_map(self):
        result = {}
        result['LineCode'] = self.line_code
        result['FatherCode'] = self.father_code
        result['LineName'] = self.line_name
        result['LineDisplayName'] = self.line_display_name
        return result

    def from_map(self, map={}):
        self.line_code = map.get('LineCode')
        self.father_code = map.get('FatherCode')
        self.line_name = map.get('LineName')
        self.line_display_name = map.get('LineDisplayName')
        return self


class DescribeSupportLinesResponseRecordLines(TeaModel):
    def __init__(self, record_line=None):
        self.record_line = []

    def validate(self):
        self.validate_required(self.record_line, 'record_line')
        if self.record_line:
            for k in self.record_line:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RecordLine'] = []
        if self.record_line is not None:
            for k in self.record_line:
                result['RecordLine'].append(k.to_map() if k else None)
        else:
            result['RecordLine'] = None
        return result

    def from_map(self, map={}):
        self.record_line = []
        if map.get('RecordLine') is not None:
            for k in map.get('RecordLine'):
                temp_model = DescribeSupportLinesResponseRecordLinesRecordLine()
                temp_model = temp_model.from_map(k)
                self.record_line.append(temp_model)
        else:
            self.record_line = None
        return self


class DescribeDomainNsRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        return self


class DescribeDomainNsResponse(TeaModel):
    def __init__(self, request_id=None, all_ali_dns=None, include_ali_dns=None, dns_servers=None, expect_dns_servers=None):
        self.request_id = request_id
        self.all_ali_dns = all_ali_dns
        self.include_ali_dns = include_ali_dns
        self.dns_servers = dns_servers
        self.expect_dns_servers = expect_dns_servers

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.all_ali_dns, 'all_ali_dns')
        self.validate_required(self.include_ali_dns, 'include_ali_dns')
        self.validate_required(self.dns_servers, 'dns_servers')
        if self.dns_servers:
            self.dns_servers.validate()
        self.validate_required(self.expect_dns_servers, 'expect_dns_servers')
        if self.expect_dns_servers:
            self.expect_dns_servers.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AllAliDns'] = self.all_ali_dns
        result['IncludeAliDns'] = self.include_ali_dns
        if self.dns_servers is not None:
            result['DnsServers'] = self.dns_servers.to_map()
        else:
            result['DnsServers'] = None
        if self.expect_dns_servers is not None:
            result['ExpectDnsServers'] = self.expect_dns_servers.to_map()
        else:
            result['ExpectDnsServers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.all_ali_dns = map.get('AllAliDns')
        self.include_ali_dns = map.get('IncludeAliDns')
        if map.get('DnsServers') is not None:
            temp_model = DescribeDomainNsResponseDnsServers()
            self.dns_servers = temp_model.from_map(map['DnsServers'])
        else:
            self.dns_servers = None
        if map.get('ExpectDnsServers') is not None:
            temp_model = DescribeDomainNsResponseExpectDnsServers()
            self.expect_dns_servers = temp_model.from_map(map['ExpectDnsServers'])
        else:
            self.expect_dns_servers = None
        return self


class DescribeDomainNsResponseDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class DescribeDomainNsResponseExpectDnsServers(TeaModel):
    def __init__(self, expect_dns_server=None):
        self.expect_dns_server = []

    def validate(self):
        self.validate_required(self.expect_dns_server, 'expect_dns_server')

    def to_map(self):
        result = {}
        result['ExpectDnsServer'] = []
        if self.expect_dns_server is not None:
            for k in self.expect_dns_server:
                result['ExpectDnsServer'].append(k)
        else:
            result['ExpectDnsServer'] = None
        return result

    def from_map(self, map={}):
        self.expect_dns_server = []
        if map.get('ExpectDnsServer') is not None:
            for k in map.get('ExpectDnsServer'):
                self.expect_dns_server.append(k)
        else:
            self.expect_dns_server = None
        return self


class DescribeDnsProductInstanceRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, instance_id=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.instance_id = instance_id

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['InstanceId'] = self.instance_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.instance_id = map.get('InstanceId')
        return self


class DescribeDnsProductInstanceResponse(TeaModel):
    def __init__(self, request_id=None, instance_id=None, version_code=None, version_name=None, start_time=None, start_timestamp=None, end_time=None, end_timestamp=None, domain=None, bind_count=None, bind_used_count=None, ttlmin_value=None, sub_domain_level=None, dns_slbcount=None, urlforward_count=None, ddos_defend_flow=None, ddos_defend_query=None, oversea_ddos_defend_flow=None, search_engine_lines=None, isplines=None, ispregion_lines=None, oversea_line=None, monitor_node_count=None, monitor_frequency=None, monitor_task_count=None, region_lines=None, gslb=None, in_clean=None, in_black_hole=None, bind_domain_count=None, bind_domain_used_count=None, dns_security=None, dns_servers=None):
        self.request_id = request_id
        self.instance_id = instance_id
        self.version_code = version_code
        self.version_name = version_name
        self.start_time = start_time
        self.start_timestamp = start_timestamp
        self.end_time = end_time
        self.end_timestamp = end_timestamp
        self.domain = domain
        self.bind_count = bind_count
        self.bind_used_count = bind_used_count
        self.ttlmin_value = ttlmin_value
        self.sub_domain_level = sub_domain_level
        self.dns_slbcount = dns_slbcount
        self.urlforward_count = urlforward_count
        self.ddos_defend_flow = ddos_defend_flow
        self.ddos_defend_query = ddos_defend_query
        self.oversea_ddos_defend_flow = oversea_ddos_defend_flow
        self.search_engine_lines = search_engine_lines
        self.isplines = isplines
        self.ispregion_lines = ispregion_lines
        self.oversea_line = oversea_line
        self.monitor_node_count = monitor_node_count
        self.monitor_frequency = monitor_frequency
        self.monitor_task_count = monitor_task_count
        self.region_lines = region_lines
        self.gslb = gslb
        self.in_clean = in_clean
        self.in_black_hole = in_black_hole
        self.bind_domain_count = bind_domain_count
        self.bind_domain_used_count = bind_domain_used_count
        self.dns_security = dns_security
        self.dns_servers = dns_servers

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.version_name, 'version_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.start_timestamp, 'start_timestamp')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.end_timestamp, 'end_timestamp')
        self.validate_required(self.domain, 'domain')
        self.validate_required(self.bind_count, 'bind_count')
        self.validate_required(self.bind_used_count, 'bind_used_count')
        self.validate_required(self.ttlmin_value, 'ttlmin_value')
        self.validate_required(self.sub_domain_level, 'sub_domain_level')
        self.validate_required(self.dns_slbcount, 'dns_slbcount')
        self.validate_required(self.urlforward_count, 'urlforward_count')
        self.validate_required(self.ddos_defend_flow, 'ddos_defend_flow')
        self.validate_required(self.ddos_defend_query, 'ddos_defend_query')
        self.validate_required(self.oversea_ddos_defend_flow, 'oversea_ddos_defend_flow')
        self.validate_required(self.search_engine_lines, 'search_engine_lines')
        self.validate_required(self.isplines, 'isplines')
        self.validate_required(self.ispregion_lines, 'ispregion_lines')
        self.validate_required(self.oversea_line, 'oversea_line')
        self.validate_required(self.monitor_node_count, 'monitor_node_count')
        self.validate_required(self.monitor_frequency, 'monitor_frequency')
        self.validate_required(self.monitor_task_count, 'monitor_task_count')
        self.validate_required(self.region_lines, 'region_lines')
        self.validate_required(self.gslb, 'gslb')
        self.validate_required(self.in_clean, 'in_clean')
        self.validate_required(self.in_black_hole, 'in_black_hole')
        self.validate_required(self.bind_domain_count, 'bind_domain_count')
        self.validate_required(self.bind_domain_used_count, 'bind_domain_used_count')
        self.validate_required(self.dns_security, 'dns_security')
        self.validate_required(self.dns_servers, 'dns_servers')
        if self.dns_servers:
            self.dns_servers.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['InstanceId'] = self.instance_id
        result['VersionCode'] = self.version_code
        result['VersionName'] = self.version_name
        result['StartTime'] = self.start_time
        result['StartTimestamp'] = self.start_timestamp
        result['EndTime'] = self.end_time
        result['EndTimestamp'] = self.end_timestamp
        result['Domain'] = self.domain
        result['BindCount'] = self.bind_count
        result['BindUsedCount'] = self.bind_used_count
        result['TTLMinValue'] = self.ttlmin_value
        result['SubDomainLevel'] = self.sub_domain_level
        result['DnsSLBCount'] = self.dns_slbcount
        result['URLForwardCount'] = self.urlforward_count
        result['DDosDefendFlow'] = self.ddos_defend_flow
        result['DDosDefendQuery'] = self.ddos_defend_query
        result['OverseaDDosDefendFlow'] = self.oversea_ddos_defend_flow
        result['SearchEngineLines'] = self.search_engine_lines
        result['ISPLines'] = self.isplines
        result['ISPRegionLines'] = self.ispregion_lines
        result['OverseaLine'] = self.oversea_line
        result['MonitorNodeCount'] = self.monitor_node_count
        result['MonitorFrequency'] = self.monitor_frequency
        result['MonitorTaskCount'] = self.monitor_task_count
        result['RegionLines'] = self.region_lines
        result['Gslb'] = self.gslb
        result['InClean'] = self.in_clean
        result['InBlackHole'] = self.in_black_hole
        result['BindDomainCount'] = self.bind_domain_count
        result['BindDomainUsedCount'] = self.bind_domain_used_count
        result['DnsSecurity'] = self.dns_security
        if self.dns_servers is not None:
            result['DnsServers'] = self.dns_servers.to_map()
        else:
            result['DnsServers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.instance_id = map.get('InstanceId')
        self.version_code = map.get('VersionCode')
        self.version_name = map.get('VersionName')
        self.start_time = map.get('StartTime')
        self.start_timestamp = map.get('StartTimestamp')
        self.end_time = map.get('EndTime')
        self.end_timestamp = map.get('EndTimestamp')
        self.domain = map.get('Domain')
        self.bind_count = map.get('BindCount')
        self.bind_used_count = map.get('BindUsedCount')
        self.ttlmin_value = map.get('TTLMinValue')
        self.sub_domain_level = map.get('SubDomainLevel')
        self.dns_slbcount = map.get('DnsSLBCount')
        self.urlforward_count = map.get('URLForwardCount')
        self.ddos_defend_flow = map.get('DDosDefendFlow')
        self.ddos_defend_query = map.get('DDosDefendQuery')
        self.oversea_ddos_defend_flow = map.get('OverseaDDosDefendFlow')
        self.search_engine_lines = map.get('SearchEngineLines')
        self.isplines = map.get('ISPLines')
        self.ispregion_lines = map.get('ISPRegionLines')
        self.oversea_line = map.get('OverseaLine')
        self.monitor_node_count = map.get('MonitorNodeCount')
        self.monitor_frequency = map.get('MonitorFrequency')
        self.monitor_task_count = map.get('MonitorTaskCount')
        self.region_lines = map.get('RegionLines')
        self.gslb = map.get('Gslb')
        self.in_clean = map.get('InClean')
        self.in_black_hole = map.get('InBlackHole')
        self.bind_domain_count = map.get('BindDomainCount')
        self.bind_domain_used_count = map.get('BindDomainUsedCount')
        self.dns_security = map.get('DnsSecurity')
        if map.get('DnsServers') is not None:
            temp_model = DescribeDnsProductInstanceResponseDnsServers()
            self.dns_servers = temp_model.from_map(map['DnsServers'])
        else:
            self.dns_servers = None
        return self


class DescribeDnsProductInstanceResponseDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class UpdateDomainRecordRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None, _rr=None, type=None, value=None, _ttl=None, priority=None, line=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id
        self._rr = _rr
        self.type = type
        self.value = value
        self._ttl = _ttl
        self.priority = priority
        self.line = line

    def validate(self):
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        result['RR'] = self._rr
        result['Type'] = self.type
        result['Value'] = self.value
        result['TTL'] = self._ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        self.value = map.get('Value')
        self._ttl = map.get('TTL')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        return self


class UpdateDomainRecordResponse(TeaModel):
    def __init__(self, request_id=None, record_id=None):
        self.request_id = request_id
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_id = map.get('RecordId')
        return self


class UpdateDomainGroupRequest(TeaModel):
    def __init__(self, lang=None, group_id=None, group_name=None):
        self.lang = lang
        self.group_id = group_id
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        return self


class UpdateDomainGroupResponse(TeaModel):
    def __init__(self, request_id=None, group_id=None, group_name=None):
        self.request_id = request_id
        self.group_id = group_id
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        return self


class UpdateDNSSLBWeightRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None, weight=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id
        self.weight = weight

    def validate(self):
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self.weight, 'weight')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        self.weight = map.get('Weight')
        return self


class UpdateDNSSLBWeightResponse(TeaModel):
    def __init__(self, request_id=None, record_id=None, weight=None):
        self.request_id = request_id
        self.record_id = record_id
        self.weight = weight

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self.weight, 'weight')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordId'] = self.record_id
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_id = map.get('RecordId')
        self.weight = map.get('Weight')
        return self


class SetDomainRecordStatusRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None, status=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id
        self.status = status

    def validate(self):
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        self.status = map.get('Status')
        return self


class SetDomainRecordStatusResponse(TeaModel):
    def __init__(self, request_id=None, record_id=None, status=None):
        self.request_id = request_id
        self.record_id = record_id
        self.status = status

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordId'] = self.record_id
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_id = map.get('RecordId')
        self.status = map.get('Status')
        return self


class SetDNSSLBStatusRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, sub_domain=None, open=None, domain_name=None, type=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.sub_domain = sub_domain
        self.open = open
        self.domain_name = domain_name
        self.type = type

    def validate(self):
        self.validate_required(self.sub_domain, 'sub_domain')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['SubDomain'] = self.sub_domain
        result['Open'] = self.open
        result['DomainName'] = self.domain_name
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.sub_domain = map.get('SubDomain')
        self.open = map.get('Open')
        self.domain_name = map.get('DomainName')
        self.type = map.get('Type')
        return self


class SetDNSSLBStatusResponse(TeaModel):
    def __init__(self, request_id=None, record_count=None, open=None):
        self.request_id = request_id
        self.record_count = record_count
        self.open = open

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_count, 'record_count')
        self.validate_required(self.open, 'open')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordCount'] = self.record_count
        result['Open'] = self.open
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_count = map.get('RecordCount')
        self.open = map.get('Open')
        return self


class ModifyHichinaDomainDNSRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        return self


class ModifyHichinaDomainDNSResponse(TeaModel):
    def __init__(self, request_id=None, original_dns_servers=None, new_dns_servers=None):
        self.request_id = request_id
        self.original_dns_servers = original_dns_servers
        self.new_dns_servers = new_dns_servers

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.original_dns_servers, 'original_dns_servers')
        if self.original_dns_servers:
            self.original_dns_servers.validate()
        self.validate_required(self.new_dns_servers, 'new_dns_servers')
        if self.new_dns_servers:
            self.new_dns_servers.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.original_dns_servers is not None:
            result['OriginalDnsServers'] = self.original_dns_servers.to_map()
        else:
            result['OriginalDnsServers'] = None
        if self.new_dns_servers is not None:
            result['NewDnsServers'] = self.new_dns_servers.to_map()
        else:
            result['NewDnsServers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('OriginalDnsServers') is not None:
            temp_model = ModifyHichinaDomainDNSResponseOriginalDnsServers()
            self.original_dns_servers = temp_model.from_map(map['OriginalDnsServers'])
        else:
            self.original_dns_servers = None
        if map.get('NewDnsServers') is not None:
            temp_model = ModifyHichinaDomainDNSResponseNewDnsServers()
            self.new_dns_servers = temp_model.from_map(map['NewDnsServers'])
        else:
            self.new_dns_servers = None
        return self


class ModifyHichinaDomainDNSResponseOriginalDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class ModifyHichinaDomainDNSResponseNewDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class GetMainDomainNameRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, input_string=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.input_string = input_string

    def validate(self):
        self.validate_required(self.input_string, 'input_string')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['InputString'] = self.input_string
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.input_string = map.get('InputString')
        return self


class GetMainDomainNameResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None, _rr=None, domain_level=None):
        self.request_id = request_id
        self.domain_name = domain_name
        self._rr = _rr
        self.domain_level = domain_level

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.domain_level, 'domain_level')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        result['RR'] = self._rr
        result['DomainLevel'] = self.domain_level
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        self._rr = map.get('RR')
        self.domain_level = map.get('DomainLevel')
        return self


class DescribeSubDomainRecordsRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, sub_domain=None, page_number=None, page_size=None, type=None, line=None, domain_name=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.sub_domain = sub_domain
        self.page_number = page_number
        self.page_size = page_size
        self.type = type
        self.line = line
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.sub_domain, 'sub_domain')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['SubDomain'] = self.sub_domain
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['Type'] = self.type
        result['Line'] = self.line
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.sub_domain = map.get('SubDomain')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.type = map.get('Type')
        self.line = map.get('Line')
        self.domain_name = map.get('DomainName')
        return self


class DescribeSubDomainRecordsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domain_records=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domain_records = domain_records

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domain_records, 'domain_records')
        if self.domain_records:
            self.domain_records.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domain_records is not None:
            result['DomainRecords'] = self.domain_records.to_map()
        else:
            result['DomainRecords'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DomainRecords') is not None:
            temp_model = DescribeSubDomainRecordsResponseDomainRecords()
            self.domain_records = temp_model.from_map(map['DomainRecords'])
        else:
            self.domain_records = None
        return self


class DescribeSubDomainRecordsResponseDomainRecordsRecord(TeaModel):
    def __init__(self, domain_name=None, record_id=None, _rr=None, type=None, value=None, _ttl=None, priority=None, line=None, status=None, locked=None, weight=None):
        self.domain_name = domain_name
        self.record_id = record_id
        self._rr = _rr
        self.type = type
        self.value = value
        self._ttl = _ttl
        self.priority = priority
        self.line = line
        self.status = status
        self.locked = locked
        self.weight = weight

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')
        self.validate_required(self._ttl, '_ttl')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.line, 'line')
        self.validate_required(self.status, 'status')
        self.validate_required(self.locked, 'locked')
        self.validate_required(self.weight, 'weight')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['RecordId'] = self.record_id
        result['RR'] = self._rr
        result['Type'] = self.type
        result['Value'] = self.value
        result['TTL'] = self._ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        result['Status'] = self.status
        result['Locked'] = self.locked
        result['Weight'] = self.weight
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.record_id = map.get('RecordId')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        self.value = map.get('Value')
        self._ttl = map.get('TTL')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        self.status = map.get('Status')
        self.locked = map.get('Locked')
        self.weight = map.get('Weight')
        return self


class DescribeSubDomainRecordsResponseDomainRecords(TeaModel):
    def __init__(self, record=None):
        self.record = []

    def validate(self):
        self.validate_required(self.record, 'record')
        if self.record:
            for k in self.record:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Record'] = []
        if self.record is not None:
            for k in self.record:
                result['Record'].append(k.to_map() if k else None)
        else:
            result['Record'] = None
        return result

    def from_map(self, map={}):
        self.record = []
        if map.get('Record') is not None:
            for k in map.get('Record'):
                temp_model = DescribeSubDomainRecordsResponseDomainRecordsRecord()
                temp_model = temp_model.from_map(k)
                self.record.append(temp_model)
        else:
            self.record = None
        return self


class DescribeRecordLogsRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None, page_number=None, page_size=None, key_word=None, start_date=None, end_date=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name
        self.page_number = page_number
        self.page_size = page_size
        self.key_word = key_word
        self.start_date = start_date
        self.end_date = end_date

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['KeyWord'] = self.key_word
        result['StartDate'] = self.start_date
        result['endDate'] = self.end_date
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.key_word = map.get('KeyWord')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('endDate')
        return self


class DescribeRecordLogsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, record_logs=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.record_logs = record_logs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.record_logs, 'record_logs')
        if self.record_logs:
            self.record_logs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.record_logs is not None:
            result['RecordLogs'] = self.record_logs.to_map()
        else:
            result['RecordLogs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('RecordLogs') is not None:
            temp_model = DescribeRecordLogsResponseRecordLogs()
            self.record_logs = temp_model.from_map(map['RecordLogs'])
        else:
            self.record_logs = None
        return self


class DescribeRecordLogsResponseRecordLogsRecordLog(TeaModel):
    def __init__(self, action_time=None, action_timestamp=None, action=None, message=None, client_ip=None):
        self.action_time = action_time
        self.action_timestamp = action_timestamp
        self.action = action
        self.message = message
        self.client_ip = client_ip

    def validate(self):
        self.validate_required(self.action_time, 'action_time')
        self.validate_required(self.action_timestamp, 'action_timestamp')
        self.validate_required(self.action, 'action')
        self.validate_required(self.message, 'message')
        self.validate_required(self.client_ip, 'client_ip')

    def to_map(self):
        result = {}
        result['ActionTime'] = self.action_time
        result['ActionTimestamp'] = self.action_timestamp
        result['Action'] = self.action
        result['Message'] = self.message
        result['ClientIp'] = self.client_ip
        return result

    def from_map(self, map={}):
        self.action_time = map.get('ActionTime')
        self.action_timestamp = map.get('ActionTimestamp')
        self.action = map.get('Action')
        self.message = map.get('Message')
        self.client_ip = map.get('ClientIp')
        return self


class DescribeRecordLogsResponseRecordLogs(TeaModel):
    def __init__(self, record_log=None):
        self.record_log = []

    def validate(self):
        self.validate_required(self.record_log, 'record_log')
        if self.record_log:
            for k in self.record_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RecordLog'] = []
        if self.record_log is not None:
            for k in self.record_log:
                result['RecordLog'].append(k.to_map() if k else None)
        else:
            result['RecordLog'] = None
        return result

    def from_map(self, map={}):
        self.record_log = []
        if map.get('RecordLog') is not None:
            for k in map.get('RecordLog'):
                temp_model = DescribeRecordLogsResponseRecordLogsRecordLog()
                temp_model = temp_model.from_map(k)
                self.record_log.append(temp_model)
        else:
            self.record_log = None
        return self


class DescribeDomainsRequest(TeaModel):
    def __init__(self, lang=None, key_word=None, group_id=None, page_number=None, page_size=None, search_mode=None, resource_group_id=None, starmark=None):
        self.lang = lang
        self.key_word = key_word
        self.group_id = group_id
        self.page_number = page_number
        self.page_size = page_size
        self.search_mode = search_mode
        self.resource_group_id = resource_group_id
        self.starmark = starmark

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['KeyWord'] = self.key_word
        result['GroupId'] = self.group_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['SearchMode'] = self.search_mode
        result['ResourceGroupId'] = self.resource_group_id
        result['Starmark'] = self.starmark
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.key_word = map.get('KeyWord')
        self.group_id = map.get('GroupId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.search_mode = map.get('SearchMode')
        self.resource_group_id = map.get('ResourceGroupId')
        self.starmark = map.get('Starmark')
        return self


class DescribeDomainsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domains=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domains = domains

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domains, 'domains')
        if self.domains:
            self.domains.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domains is not None:
            result['Domains'] = self.domains.to_map()
        else:
            result['Domains'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('Domains') is not None:
            temp_model = DescribeDomainsResponseDomains()
            self.domains = temp_model.from_map(map['Domains'])
        else:
            self.domains = None
        return self


class DescribeDomainsResponseDomainsDomainTagsTag(TeaModel):
    def __init__(self, key=None, value=None):
        self.key = key
        self.value = value

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        return self


class DescribeDomainsResponseDomainsDomainTags(TeaModel):
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
                temp_model = DescribeDomainsResponseDomainsDomainTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeDomainsResponseDomainsDomainDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class DescribeDomainsResponseDomainsDomain(TeaModel):
    def __init__(self, domain_id=None, domain_name=None, puny_code=None, ali_domain=None, record_count=None, registrant_email=None, remark=None, group_id=None, group_name=None, instance_id=None, version_code=None, version_name=None, instance_end_time=None, instance_expired=None, starmark=None, create_time=None, create_timestamp=None, tags=None, dns_servers=None):
        self.domain_id = domain_id
        self.domain_name = domain_name
        self.puny_code = puny_code
        self.ali_domain = ali_domain
        self.record_count = record_count
        self.registrant_email = registrant_email
        self.remark = remark
        self.group_id = group_id
        self.group_name = group_name
        self.instance_id = instance_id
        self.version_code = version_code
        self.version_name = version_name
        self.instance_end_time = instance_end_time
        self.instance_expired = instance_expired
        self.starmark = starmark
        self.create_time = create_time
        self.create_timestamp = create_timestamp
        self.tags = tags
        self.dns_servers = dns_servers

    def validate(self):
        self.validate_required(self.domain_id, 'domain_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.puny_code, 'puny_code')
        self.validate_required(self.ali_domain, 'ali_domain')
        self.validate_required(self.record_count, 'record_count')
        self.validate_required(self.registrant_email, 'registrant_email')
        self.validate_required(self.remark, 'remark')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.version_name, 'version_name')
        self.validate_required(self.instance_end_time, 'instance_end_time')
        self.validate_required(self.instance_expired, 'instance_expired')
        self.validate_required(self.starmark, 'starmark')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.create_timestamp, 'create_timestamp')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()
        self.validate_required(self.dns_servers, 'dns_servers')
        if self.dns_servers:
            self.dns_servers.validate()

    def to_map(self):
        result = {}
        result['DomainId'] = self.domain_id
        result['DomainName'] = self.domain_name
        result['PunyCode'] = self.puny_code
        result['AliDomain'] = self.ali_domain
        result['RecordCount'] = self.record_count
        result['RegistrantEmail'] = self.registrant_email
        result['Remark'] = self.remark
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['InstanceId'] = self.instance_id
        result['VersionCode'] = self.version_code
        result['VersionName'] = self.version_name
        result['InstanceEndTime'] = self.instance_end_time
        result['InstanceExpired'] = self.instance_expired
        result['Starmark'] = self.starmark
        result['CreateTime'] = self.create_time
        result['CreateTimestamp'] = self.create_timestamp
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        if self.dns_servers is not None:
            result['DnsServers'] = self.dns_servers.to_map()
        else:
            result['DnsServers'] = None
        return result

    def from_map(self, map={}):
        self.domain_id = map.get('DomainId')
        self.domain_name = map.get('DomainName')
        self.puny_code = map.get('PunyCode')
        self.ali_domain = map.get('AliDomain')
        self.record_count = map.get('RecordCount')
        self.registrant_email = map.get('RegistrantEmail')
        self.remark = map.get('Remark')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.instance_id = map.get('InstanceId')
        self.version_code = map.get('VersionCode')
        self.version_name = map.get('VersionName')
        self.instance_end_time = map.get('InstanceEndTime')
        self.instance_expired = map.get('InstanceExpired')
        self.starmark = map.get('Starmark')
        self.create_time = map.get('CreateTime')
        self.create_timestamp = map.get('CreateTimestamp')
        if map.get('Tags') is not None:
            temp_model = DescribeDomainsResponseDomainsDomainTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        if map.get('DnsServers') is not None:
            temp_model = DescribeDomainsResponseDomainsDomainDnsServers()
            self.dns_servers = temp_model.from_map(map['DnsServers'])
        else:
            self.dns_servers = None
        return self


class DescribeDomainsResponseDomains(TeaModel):
    def __init__(self, domain=None):
        self.domain = []

    def validate(self):
        self.validate_required(self.domain, 'domain')
        if self.domain:
            for k in self.domain:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Domain'] = []
        if self.domain is not None:
            for k in self.domain:
                result['Domain'].append(k.to_map() if k else None)
        else:
            result['Domain'] = None
        return result

    def from_map(self, map={}):
        self.domain = []
        if map.get('Domain') is not None:
            for k in map.get('Domain'):
                temp_model = DescribeDomainsResponseDomainsDomain()
                temp_model = temp_model.from_map(k)
                self.domain.append(temp_model)
        else:
            self.domain = None
        return self


class DescribeDomainRecordsRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, page_number=None, page_size=None, key_word=None, rrkey_word=None, type_key_word=None, value_key_word=None, order_by=None, direction=None, search_mode=None, group_id=None, type=None, line=None, status=None):
        self.lang = lang
        self.domain_name = domain_name
        self.page_number = page_number
        self.page_size = page_size
        self.key_word = key_word
        self.rrkey_word = rrkey_word
        self.type_key_word = type_key_word
        self.value_key_word = value_key_word
        self.order_by = order_by
        self.direction = direction
        self.search_mode = search_mode
        self.group_id = group_id
        self.type = type
        self.line = line
        self.status = status

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['KeyWord'] = self.key_word
        result['RRKeyWord'] = self.rrkey_word
        result['TypeKeyWord'] = self.type_key_word
        result['ValueKeyWord'] = self.value_key_word
        result['OrderBy'] = self.order_by
        result['Direction'] = self.direction
        result['SearchMode'] = self.search_mode
        result['GroupId'] = self.group_id
        result['Type'] = self.type
        result['Line'] = self.line
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.key_word = map.get('KeyWord')
        self.rrkey_word = map.get('RRKeyWord')
        self.type_key_word = map.get('TypeKeyWord')
        self.value_key_word = map.get('ValueKeyWord')
        self.order_by = map.get('OrderBy')
        self.direction = map.get('Direction')
        self.search_mode = map.get('SearchMode')
        self.group_id = map.get('GroupId')
        self.type = map.get('Type')
        self.line = map.get('Line')
        self.status = map.get('Status')
        return self


class DescribeDomainRecordsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domain_records=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domain_records = domain_records

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domain_records, 'domain_records')
        if self.domain_records:
            self.domain_records.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domain_records is not None:
            result['DomainRecords'] = self.domain_records.to_map()
        else:
            result['DomainRecords'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DomainRecords') is not None:
            temp_model = DescribeDomainRecordsResponseDomainRecords()
            self.domain_records = temp_model.from_map(map['DomainRecords'])
        else:
            self.domain_records = None
        return self


class DescribeDomainRecordsResponseDomainRecordsRecord(TeaModel):
    def __init__(self, domain_name=None, record_id=None, _rr=None, type=None, value=None, _ttl=None, priority=None, line=None, status=None, locked=None, weight=None, remark=None):
        self.domain_name = domain_name
        self.record_id = record_id
        self._rr = _rr
        self.type = type
        self.value = value
        self._ttl = _ttl
        self.priority = priority
        self.line = line
        self.status = status
        self.locked = locked
        self.weight = weight
        self.remark = remark

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')
        self.validate_required(self._ttl, '_ttl')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.line, 'line')
        self.validate_required(self.status, 'status')
        self.validate_required(self.locked, 'locked')
        self.validate_required(self.weight, 'weight')
        self.validate_required(self.remark, 'remark')

    def to_map(self):
        result = {}
        result['DomainName'] = self.domain_name
        result['RecordId'] = self.record_id
        result['RR'] = self._rr
        result['Type'] = self.type
        result['Value'] = self.value
        result['TTL'] = self._ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        result['Status'] = self.status
        result['Locked'] = self.locked
        result['Weight'] = self.weight
        result['Remark'] = self.remark
        return result

    def from_map(self, map={}):
        self.domain_name = map.get('DomainName')
        self.record_id = map.get('RecordId')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        self.value = map.get('Value')
        self._ttl = map.get('TTL')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        self.status = map.get('Status')
        self.locked = map.get('Locked')
        self.weight = map.get('Weight')
        self.remark = map.get('Remark')
        return self


class DescribeDomainRecordsResponseDomainRecords(TeaModel):
    def __init__(self, record=None):
        self.record = []

    def validate(self):
        self.validate_required(self.record, 'record')
        if self.record:
            for k in self.record:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Record'] = []
        if self.record is not None:
            for k in self.record:
                result['Record'].append(k.to_map() if k else None)
        else:
            result['Record'] = None
        return result

    def from_map(self, map={}):
        self.record = []
        if map.get('Record') is not None:
            for k in map.get('Record'):
                temp_model = DescribeDomainRecordsResponseDomainRecordsRecord()
                temp_model = temp_model.from_map(k)
                self.record.append(temp_model)
        else:
            self.record = None
        return self


class DescribeDomainRecordInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        return self


class DescribeDomainRecordInfoResponse(TeaModel):
    def __init__(self, request_id=None, domain_id=None, domain_name=None, puny_code=None, group_id=None, group_name=None, record_id=None, _rr=None, type=None, value=None, _ttl=None, priority=None, line=None, status=None, locked=None):
        self.request_id = request_id
        self.domain_id = domain_id
        self.domain_name = domain_name
        self.puny_code = puny_code
        self.group_id = group_id
        self.group_name = group_name
        self.record_id = record_id
        self._rr = _rr
        self.type = type
        self.value = value
        self._ttl = _ttl
        self.priority = priority
        self.line = line
        self.status = status
        self.locked = locked

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_id, 'domain_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.puny_code, 'puny_code')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.record_id, 'record_id')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')
        self.validate_required(self._ttl, '_ttl')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.line, 'line')
        self.validate_required(self.status, 'status')
        self.validate_required(self.locked, 'locked')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainId'] = self.domain_id
        result['DomainName'] = self.domain_name
        result['PunyCode'] = self.puny_code
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['RecordId'] = self.record_id
        result['RR'] = self._rr
        result['Type'] = self.type
        result['Value'] = self.value
        result['TTL'] = self._ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        result['Status'] = self.status
        result['Locked'] = self.locked
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_id = map.get('DomainId')
        self.domain_name = map.get('DomainName')
        self.puny_code = map.get('PunyCode')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.record_id = map.get('RecordId')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        self.value = map.get('Value')
        self._ttl = map.get('TTL')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        self.status = map.get('Status')
        self.locked = map.get('Locked')
        return self


class DescribeDomainLogsRequest(TeaModel):
    def __init__(self, lang=None, key_word=None, group_id=None, page_number=None, page_size=None, start_date=None, end_date=None, type=None):
        self.lang = lang
        self.key_word = key_word
        self.group_id = group_id
        self.page_number = page_number
        self.page_size = page_size
        self.start_date = start_date
        self.end_date = end_date
        self.type = type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['KeyWord'] = self.key_word
        result['GroupId'] = self.group_id
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['StartDate'] = self.start_date
        result['endDate'] = self.end_date
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.key_word = map.get('KeyWord')
        self.group_id = map.get('GroupId')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.start_date = map.get('StartDate')
        self.end_date = map.get('endDate')
        self.type = map.get('Type')
        return self


class DescribeDomainLogsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domain_logs=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domain_logs = domain_logs

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domain_logs, 'domain_logs')
        if self.domain_logs:
            self.domain_logs.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domain_logs is not None:
            result['DomainLogs'] = self.domain_logs.to_map()
        else:
            result['DomainLogs'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DomainLogs') is not None:
            temp_model = DescribeDomainLogsResponseDomainLogs()
            self.domain_logs = temp_model.from_map(map['DomainLogs'])
        else:
            self.domain_logs = None
        return self


class DescribeDomainLogsResponseDomainLogsDomainLog(TeaModel):
    def __init__(self, action_time=None, action_timestamp=None, domain_name=None, action=None, message=None, client_ip=None, zone_id=None):
        self.action_time = action_time
        self.action_timestamp = action_timestamp
        self.domain_name = domain_name
        self.action = action
        self.message = message
        self.client_ip = client_ip
        self.zone_id = zone_id

    def validate(self):
        self.validate_required(self.action_time, 'action_time')
        self.validate_required(self.action_timestamp, 'action_timestamp')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.action, 'action')
        self.validate_required(self.message, 'message')
        self.validate_required(self.client_ip, 'client_ip')
        self.validate_required(self.zone_id, 'zone_id')

    def to_map(self):
        result = {}
        result['ActionTime'] = self.action_time
        result['ActionTimestamp'] = self.action_timestamp
        result['DomainName'] = self.domain_name
        result['Action'] = self.action
        result['Message'] = self.message
        result['ClientIp'] = self.client_ip
        result['ZoneId'] = self.zone_id
        return result

    def from_map(self, map={}):
        self.action_time = map.get('ActionTime')
        self.action_timestamp = map.get('ActionTimestamp')
        self.domain_name = map.get('DomainName')
        self.action = map.get('Action')
        self.message = map.get('Message')
        self.client_ip = map.get('ClientIp')
        self.zone_id = map.get('ZoneId')
        return self


class DescribeDomainLogsResponseDomainLogs(TeaModel):
    def __init__(self, domain_log=None):
        self.domain_log = []

    def validate(self):
        self.validate_required(self.domain_log, 'domain_log')
        if self.domain_log:
            for k in self.domain_log:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DomainLog'] = []
        if self.domain_log is not None:
            for k in self.domain_log:
                result['DomainLog'].append(k.to_map() if k else None)
        else:
            result['DomainLog'] = None
        return result

    def from_map(self, map={}):
        self.domain_log = []
        if map.get('DomainLog') is not None:
            for k in map.get('DomainLog'):
                temp_model = DescribeDomainLogsResponseDomainLogsDomainLog()
                temp_model = temp_model.from_map(k)
                self.domain_log.append(temp_model)
        else:
            self.domain_log = None
        return self


class DescribeDomainInfoRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None, need_detail_attributes=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name
        self.need_detail_attributes = need_detail_attributes

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['NeedDetailAttributes'] = self.need_detail_attributes
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.need_detail_attributes = map.get('NeedDetailAttributes')
        return self


class DescribeDomainInfoResponse(TeaModel):
    def __init__(self, request_id=None, domain_id=None, domain_name=None, puny_code=None, ali_domain=None, remark=None, group_id=None, group_name=None, instance_id=None, version_code=None, version_name=None, min_ttl=None, record_line_tree_json=None, line_type=None, region_lines=None, in_black_hole=None, in_clean=None, slave_dns=None, record_lines=None, dns_servers=None, available_ttls=None):
        self.request_id = request_id
        self.domain_id = domain_id
        self.domain_name = domain_name
        self.puny_code = puny_code
        self.ali_domain = ali_domain
        self.remark = remark
        self.group_id = group_id
        self.group_name = group_name
        self.instance_id = instance_id
        self.version_code = version_code
        self.version_name = version_name
        self.min_ttl = min_ttl
        self.record_line_tree_json = record_line_tree_json
        self.line_type = line_type
        self.region_lines = region_lines
        self.in_black_hole = in_black_hole
        self.in_clean = in_clean
        self.slave_dns = slave_dns
        self.record_lines = record_lines
        self.dns_servers = dns_servers
        self.available_ttls = available_ttls

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_id, 'domain_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.puny_code, 'puny_code')
        self.validate_required(self.ali_domain, 'ali_domain')
        self.validate_required(self.remark, 'remark')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.version_name, 'version_name')
        self.validate_required(self.min_ttl, 'min_ttl')
        self.validate_required(self.record_line_tree_json, 'record_line_tree_json')
        self.validate_required(self.line_type, 'line_type')
        self.validate_required(self.region_lines, 'region_lines')
        self.validate_required(self.in_black_hole, 'in_black_hole')
        self.validate_required(self.in_clean, 'in_clean')
        self.validate_required(self.slave_dns, 'slave_dns')
        self.validate_required(self.record_lines, 'record_lines')
        if self.record_lines:
            self.record_lines.validate()
        self.validate_required(self.dns_servers, 'dns_servers')
        if self.dns_servers:
            self.dns_servers.validate()
        self.validate_required(self.available_ttls, 'available_ttls')
        if self.available_ttls:
            self.available_ttls.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainId'] = self.domain_id
        result['DomainName'] = self.domain_name
        result['PunyCode'] = self.puny_code
        result['AliDomain'] = self.ali_domain
        result['Remark'] = self.remark
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['InstanceId'] = self.instance_id
        result['VersionCode'] = self.version_code
        result['VersionName'] = self.version_name
        result['MinTtl'] = self.min_ttl
        result['RecordLineTreeJson'] = self.record_line_tree_json
        result['LineType'] = self.line_type
        result['RegionLines'] = self.region_lines
        result['InBlackHole'] = self.in_black_hole
        result['InClean'] = self.in_clean
        result['SlaveDns'] = self.slave_dns
        if self.record_lines is not None:
            result['RecordLines'] = self.record_lines.to_map()
        else:
            result['RecordLines'] = None
        if self.dns_servers is not None:
            result['DnsServers'] = self.dns_servers.to_map()
        else:
            result['DnsServers'] = None
        if self.available_ttls is not None:
            result['AvailableTtls'] = self.available_ttls.to_map()
        else:
            result['AvailableTtls'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_id = map.get('DomainId')
        self.domain_name = map.get('DomainName')
        self.puny_code = map.get('PunyCode')
        self.ali_domain = map.get('AliDomain')
        self.remark = map.get('Remark')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.instance_id = map.get('InstanceId')
        self.version_code = map.get('VersionCode')
        self.version_name = map.get('VersionName')
        self.min_ttl = map.get('MinTtl')
        self.record_line_tree_json = map.get('RecordLineTreeJson')
        self.line_type = map.get('LineType')
        self.region_lines = map.get('RegionLines')
        self.in_black_hole = map.get('InBlackHole')
        self.in_clean = map.get('InClean')
        self.slave_dns = map.get('SlaveDns')
        if map.get('RecordLines') is not None:
            temp_model = DescribeDomainInfoResponseRecordLines()
            self.record_lines = temp_model.from_map(map['RecordLines'])
        else:
            self.record_lines = None
        if map.get('DnsServers') is not None:
            temp_model = DescribeDomainInfoResponseDnsServers()
            self.dns_servers = temp_model.from_map(map['DnsServers'])
        else:
            self.dns_servers = None
        if map.get('AvailableTtls') is not None:
            temp_model = DescribeDomainInfoResponseAvailableTtls()
            self.available_ttls = temp_model.from_map(map['AvailableTtls'])
        else:
            self.available_ttls = None
        return self


class DescribeDomainInfoResponseRecordLinesRecordLine(TeaModel):
    def __init__(self, line_code=None, father_code=None, line_name=None, line_display_name=None):
        self.line_code = line_code
        self.father_code = father_code
        self.line_name = line_name
        self.line_display_name = line_display_name

    def validate(self):
        self.validate_required(self.line_code, 'line_code')
        self.validate_required(self.father_code, 'father_code')
        self.validate_required(self.line_name, 'line_name')
        self.validate_required(self.line_display_name, 'line_display_name')

    def to_map(self):
        result = {}
        result['LineCode'] = self.line_code
        result['FatherCode'] = self.father_code
        result['LineName'] = self.line_name
        result['LineDisplayName'] = self.line_display_name
        return result

    def from_map(self, map={}):
        self.line_code = map.get('LineCode')
        self.father_code = map.get('FatherCode')
        self.line_name = map.get('LineName')
        self.line_display_name = map.get('LineDisplayName')
        return self


class DescribeDomainInfoResponseRecordLines(TeaModel):
    def __init__(self, record_line=None):
        self.record_line = []

    def validate(self):
        self.validate_required(self.record_line, 'record_line')
        if self.record_line:
            for k in self.record_line:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RecordLine'] = []
        if self.record_line is not None:
            for k in self.record_line:
                result['RecordLine'].append(k.to_map() if k else None)
        else:
            result['RecordLine'] = None
        return result

    def from_map(self, map={}):
        self.record_line = []
        if map.get('RecordLine') is not None:
            for k in map.get('RecordLine'):
                temp_model = DescribeDomainInfoResponseRecordLinesRecordLine()
                temp_model = temp_model.from_map(k)
                self.record_line.append(temp_model)
        else:
            self.record_line = None
        return self


class DescribeDomainInfoResponseDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self


class DescribeDomainInfoResponseAvailableTtls(TeaModel):
    def __init__(self, available_ttl=None):
        self.available_ttl = []

    def validate(self):
        self.validate_required(self.available_ttl, 'available_ttl')

    def to_map(self):
        result = {}
        result['AvailableTtl'] = []
        if self.available_ttl is not None:
            for k in self.available_ttl:
                result['AvailableTtl'].append(k)
        else:
            result['AvailableTtl'] = None
        return result

    def from_map(self, map={}):
        self.available_ttl = []
        if map.get('AvailableTtl') is not None:
            for k in map.get('AvailableTtl'):
                self.available_ttl.append(k)
        else:
            self.available_ttl = None
        return self


class DescribeDomainGroupsRequest(TeaModel):
    def __init__(self, lang=None, key_word=None, page_number=None, page_size=None):
        self.lang = lang
        self.key_word = key_word
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['KeyWord'] = self.key_word
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.key_word = map.get('KeyWord')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeDomainGroupsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, domain_groups=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.domain_groups = domain_groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.domain_groups, 'domain_groups')
        if self.domain_groups:
            self.domain_groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.domain_groups is not None:
            result['DomainGroups'] = self.domain_groups.to_map()
        else:
            result['DomainGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DomainGroups') is not None:
            temp_model = DescribeDomainGroupsResponseDomainGroups()
            self.domain_groups = temp_model.from_map(map['DomainGroups'])
        else:
            self.domain_groups = None
        return self


class DescribeDomainGroupsResponseDomainGroupsDomainGroup(TeaModel):
    def __init__(self, group_id=None, group_name=None, domain_count=None):
        self.group_id = group_id
        self.group_name = group_name
        self.domain_count = domain_count

    def validate(self):
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.domain_count, 'domain_count')

    def to_map(self):
        result = {}
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        result['DomainCount'] = self.domain_count
        return result

    def from_map(self, map={}):
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        self.domain_count = map.get('DomainCount')
        return self


class DescribeDomainGroupsResponseDomainGroups(TeaModel):
    def __init__(self, domain_group=None):
        self.domain_group = []

    def validate(self):
        self.validate_required(self.domain_group, 'domain_group')
        if self.domain_group:
            for k in self.domain_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DomainGroup'] = []
        if self.domain_group is not None:
            for k in self.domain_group:
                result['DomainGroup'].append(k.to_map() if k else None)
        else:
            result['DomainGroup'] = None
        return result

    def from_map(self, map={}):
        self.domain_group = []
        if map.get('DomainGroup') is not None:
            for k in map.get('DomainGroup'):
                temp_model = DescribeDomainGroupsResponseDomainGroupsDomainGroup()
                temp_model = temp_model.from_map(k)
                self.domain_group.append(temp_model)
        else:
            self.domain_group = None
        return self


class DescribeDNSSLBSubDomainsRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None, page_number=None, page_size=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name
        self.page_number = page_number
        self.page_size = page_size

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        return self


class DescribeDNSSLBSubDomainsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, slb_sub_domains=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.slb_sub_domains = slb_sub_domains

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.slb_sub_domains, 'slb_sub_domains')
        if self.slb_sub_domains:
            self.slb_sub_domains.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.slb_sub_domains is not None:
            result['SlbSubDomains'] = self.slb_sub_domains.to_map()
        else:
            result['SlbSubDomains'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('SlbSubDomains') is not None:
            temp_model = DescribeDNSSLBSubDomainsResponseSlbSubDomains()
            self.slb_sub_domains = temp_model.from_map(map['SlbSubDomains'])
        else:
            self.slb_sub_domains = None
        return self


class DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain(TeaModel):
    def __init__(self, sub_domain=None, record_count=None, open=None, type=None):
        self.sub_domain = sub_domain
        self.record_count = record_count
        self.open = open
        self.type = type

    def validate(self):
        self.validate_required(self.sub_domain, 'sub_domain')
        self.validate_required(self.record_count, 'record_count')
        self.validate_required(self.open, 'open')
        self.validate_required(self.type, 'type')

    def to_map(self):
        result = {}
        result['SubDomain'] = self.sub_domain
        result['RecordCount'] = self.record_count
        result['Open'] = self.open
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.sub_domain = map.get('SubDomain')
        self.record_count = map.get('RecordCount')
        self.open = map.get('Open')
        self.type = map.get('Type')
        return self


class DescribeDNSSLBSubDomainsResponseSlbSubDomains(TeaModel):
    def __init__(self, slb_sub_domain=None):
        self.slb_sub_domain = []

    def validate(self):
        self.validate_required(self.slb_sub_domain, 'slb_sub_domain')
        if self.slb_sub_domain:
            for k in self.slb_sub_domain:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['SlbSubDomain'] = []
        if self.slb_sub_domain is not None:
            for k in self.slb_sub_domain:
                result['SlbSubDomain'].append(k.to_map() if k else None)
        else:
            result['SlbSubDomain'] = None
        return result

    def from_map(self, map={}):
        self.slb_sub_domain = []
        if map.get('SlbSubDomain') is not None:
            for k in map.get('SlbSubDomain'):
                temp_model = DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain()
                temp_model = temp_model.from_map(k)
                self.slb_sub_domain.append(temp_model)
        else:
            self.slb_sub_domain = None
        return self


class DescribeDnsProductInstancesRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, page_number=None, page_size=None, version_code=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.page_number = page_number
        self.page_size = page_size
        self.version_code = version_code

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        result['VersionCode'] = self.version_code
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        self.version_code = map.get('VersionCode')
        return self


class DescribeDnsProductInstancesResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_number=None, page_size=None, dns_products=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_number = page_number
        self.page_size = page_size
        self.dns_products = dns_products

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.dns_products, 'dns_products')
        if self.dns_products:
            self.dns_products.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageNumber'] = self.page_number
        result['PageSize'] = self.page_size
        if self.dns_products is not None:
            result['DnsProducts'] = self.dns_products.to_map()
        else:
            result['DnsProducts'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_number = map.get('PageNumber')
        self.page_size = map.get('PageSize')
        if map.get('DnsProducts') is not None:
            temp_model = DescribeDnsProductInstancesResponseDnsProducts()
            self.dns_products = temp_model.from_map(map['DnsProducts'])
        else:
            self.dns_products = None
        return self


class DescribeDnsProductInstancesResponseDnsProductsDnsProduct(TeaModel):
    def __init__(self, instance_id=None, version_code=None, version_name=None, start_time=None, end_time=None, start_timestamp=None, end_timestamp=None, domain=None, bind_count=None, bind_used_count=None, ttlmin_value=None, sub_domain_level=None, dns_slbcount=None, urlforward_count=None, ddos_defend_flow=None, ddos_defend_query=None, oversea_ddos_defend_flow=None, search_engine_lines=None, isplines=None, ispregion_lines=None, oversea_line=None, monitor_node_count=None, monitor_frequency=None, monitor_task_count=None, region_lines=None, gslb=None, in_clean=None, in_black_hole=None, bind_domain_count=None, bind_domain_used_count=None, dns_security=None):
        self.instance_id = instance_id
        self.version_code = version_code
        self.version_name = version_name
        self.start_time = start_time
        self.end_time = end_time
        self.start_timestamp = start_timestamp
        self.end_timestamp = end_timestamp
        self.domain = domain
        self.bind_count = bind_count
        self.bind_used_count = bind_used_count
        self.ttlmin_value = ttlmin_value
        self.sub_domain_level = sub_domain_level
        self.dns_slbcount = dns_slbcount
        self.urlforward_count = urlforward_count
        self.ddos_defend_flow = ddos_defend_flow
        self.ddos_defend_query = ddos_defend_query
        self.oversea_ddos_defend_flow = oversea_ddos_defend_flow
        self.search_engine_lines = search_engine_lines
        self.isplines = isplines
        self.ispregion_lines = ispregion_lines
        self.oversea_line = oversea_line
        self.monitor_node_count = monitor_node_count
        self.monitor_frequency = monitor_frequency
        self.monitor_task_count = monitor_task_count
        self.region_lines = region_lines
        self.gslb = gslb
        self.in_clean = in_clean
        self.in_black_hole = in_black_hole
        self.bind_domain_count = bind_domain_count
        self.bind_domain_used_count = bind_domain_used_count
        self.dns_security = dns_security

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')
        self.validate_required(self.version_code, 'version_code')
        self.validate_required(self.version_name, 'version_name')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.end_time, 'end_time')
        self.validate_required(self.start_timestamp, 'start_timestamp')
        self.validate_required(self.end_timestamp, 'end_timestamp')
        self.validate_required(self.domain, 'domain')
        self.validate_required(self.bind_count, 'bind_count')
        self.validate_required(self.bind_used_count, 'bind_used_count')
        self.validate_required(self.ttlmin_value, 'ttlmin_value')
        self.validate_required(self.sub_domain_level, 'sub_domain_level')
        self.validate_required(self.dns_slbcount, 'dns_slbcount')
        self.validate_required(self.urlforward_count, 'urlforward_count')
        self.validate_required(self.ddos_defend_flow, 'ddos_defend_flow')
        self.validate_required(self.ddos_defend_query, 'ddos_defend_query')
        self.validate_required(self.oversea_ddos_defend_flow, 'oversea_ddos_defend_flow')
        self.validate_required(self.search_engine_lines, 'search_engine_lines')
        self.validate_required(self.isplines, 'isplines')
        self.validate_required(self.ispregion_lines, 'ispregion_lines')
        self.validate_required(self.oversea_line, 'oversea_line')
        self.validate_required(self.monitor_node_count, 'monitor_node_count')
        self.validate_required(self.monitor_frequency, 'monitor_frequency')
        self.validate_required(self.monitor_task_count, 'monitor_task_count')
        self.validate_required(self.region_lines, 'region_lines')
        self.validate_required(self.gslb, 'gslb')
        self.validate_required(self.in_clean, 'in_clean')
        self.validate_required(self.in_black_hole, 'in_black_hole')
        self.validate_required(self.bind_domain_count, 'bind_domain_count')
        self.validate_required(self.bind_domain_used_count, 'bind_domain_used_count')
        self.validate_required(self.dns_security, 'dns_security')

    def to_map(self):
        result = {}
        result['InstanceId'] = self.instance_id
        result['VersionCode'] = self.version_code
        result['VersionName'] = self.version_name
        result['StartTime'] = self.start_time
        result['EndTime'] = self.end_time
        result['StartTimestamp'] = self.start_timestamp
        result['EndTimestamp'] = self.end_timestamp
        result['Domain'] = self.domain
        result['BindCount'] = self.bind_count
        result['BindUsedCount'] = self.bind_used_count
        result['TTLMinValue'] = self.ttlmin_value
        result['SubDomainLevel'] = self.sub_domain_level
        result['DnsSLBCount'] = self.dns_slbcount
        result['URLForwardCount'] = self.urlforward_count
        result['DDosDefendFlow'] = self.ddos_defend_flow
        result['DDosDefendQuery'] = self.ddos_defend_query
        result['OverseaDDosDefendFlow'] = self.oversea_ddos_defend_flow
        result['SearchEngineLines'] = self.search_engine_lines
        result['ISPLines'] = self.isplines
        result['ISPRegionLines'] = self.ispregion_lines
        result['OverseaLine'] = self.oversea_line
        result['MonitorNodeCount'] = self.monitor_node_count
        result['MonitorFrequency'] = self.monitor_frequency
        result['MonitorTaskCount'] = self.monitor_task_count
        result['RegionLines'] = self.region_lines
        result['Gslb'] = self.gslb
        result['InClean'] = self.in_clean
        result['InBlackHole'] = self.in_black_hole
        result['BindDomainCount'] = self.bind_domain_count
        result['BindDomainUsedCount'] = self.bind_domain_used_count
        result['DnsSecurity'] = self.dns_security
        return result

    def from_map(self, map={}):
        self.instance_id = map.get('InstanceId')
        self.version_code = map.get('VersionCode')
        self.version_name = map.get('VersionName')
        self.start_time = map.get('StartTime')
        self.end_time = map.get('EndTime')
        self.start_timestamp = map.get('StartTimestamp')
        self.end_timestamp = map.get('EndTimestamp')
        self.domain = map.get('Domain')
        self.bind_count = map.get('BindCount')
        self.bind_used_count = map.get('BindUsedCount')
        self.ttlmin_value = map.get('TTLMinValue')
        self.sub_domain_level = map.get('SubDomainLevel')
        self.dns_slbcount = map.get('DnsSLBCount')
        self.urlforward_count = map.get('URLForwardCount')
        self.ddos_defend_flow = map.get('DDosDefendFlow')
        self.ddos_defend_query = map.get('DDosDefendQuery')
        self.oversea_ddos_defend_flow = map.get('OverseaDDosDefendFlow')
        self.search_engine_lines = map.get('SearchEngineLines')
        self.isplines = map.get('ISPLines')
        self.ispregion_lines = map.get('ISPRegionLines')
        self.oversea_line = map.get('OverseaLine')
        self.monitor_node_count = map.get('MonitorNodeCount')
        self.monitor_frequency = map.get('MonitorFrequency')
        self.monitor_task_count = map.get('MonitorTaskCount')
        self.region_lines = map.get('RegionLines')
        self.gslb = map.get('Gslb')
        self.in_clean = map.get('InClean')
        self.in_black_hole = map.get('InBlackHole')
        self.bind_domain_count = map.get('BindDomainCount')
        self.bind_domain_used_count = map.get('BindDomainUsedCount')
        self.dns_security = map.get('DnsSecurity')
        return self


class DescribeDnsProductInstancesResponseDnsProducts(TeaModel):
    def __init__(self, dns_product=None):
        self.dns_product = []

    def validate(self):
        self.validate_required(self.dns_product, 'dns_product')
        if self.dns_product:
            for k in self.dns_product:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['DnsProduct'] = []
        if self.dns_product is not None:
            for k in self.dns_product:
                result['DnsProduct'].append(k.to_map() if k else None)
        else:
            result['DnsProduct'] = None
        return result

    def from_map(self, map={}):
        self.dns_product = []
        if map.get('DnsProduct') is not None:
            for k in map.get('DnsProduct'):
                temp_model = DescribeDnsProductInstancesResponseDnsProductsDnsProduct()
                temp_model = temp_model.from_map(k)
                self.dns_product.append(temp_model)
        else:
            self.dns_product = None
        return self


class DeleteSubDomainRecordsRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None, _rr=None, type=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name
        self._rr = _rr
        self.type = type

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self._rr, '_rr')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        result['RR'] = self._rr
        result['Type'] = self.type
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        return self


class DeleteSubDomainRecordsResponse(TeaModel):
    def __init__(self, request_id=None, _rr=None, total_count=None):
        self.request_id = request_id
        self._rr = _rr
        self.total_count = total_count

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.total_count, 'total_count')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RR'] = self._rr
        result['TotalCount'] = self.total_count
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self._rr = map.get('RR')
        self.total_count = map.get('TotalCount')
        return self


class DeleteDomainRecordRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, record_id=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.record_id = map.get('RecordId')
        return self


class DeleteDomainRecordResponse(TeaModel):
    def __init__(self, request_id=None, record_id=None):
        self.request_id = request_id
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_id = map.get('RecordId')
        return self


class DeleteDomainGroupRequest(TeaModel):
    def __init__(self, lang=None, group_id=None):
        self.lang = lang
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.group_id, 'group_id')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.group_id = map.get('GroupId')
        return self


class DeleteDomainGroupResponse(TeaModel):
    def __init__(self, request_id=None, group_name=None):
        self.request_id = request_id
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.group_name = map.get('GroupName')
        return self


class DeleteDomainRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        return self


class DeleteDomainResponse(TeaModel):
    def __init__(self, request_id=None, domain_name=None):
        self.request_id = request_id
        self.domain_name = domain_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainName'] = self.domain_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_name = map.get('DomainName')
        return self


class ChangeDomainOfDnsProductRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, instance_id=None, new_domain=None, force=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.instance_id = instance_id
        self.new_domain = new_domain
        self.force = force

    def validate(self):
        self.validate_required(self.instance_id, 'instance_id')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['InstanceId'] = self.instance_id
        result['NewDomain'] = self.new_domain
        result['Force'] = self.force
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.instance_id = map.get('InstanceId')
        self.new_domain = map.get('NewDomain')
        self.force = map.get('Force')
        return self


class ChangeDomainOfDnsProductResponse(TeaModel):
    def __init__(self, request_id=None, original_domain=None):
        self.request_id = request_id
        self.original_domain = original_domain

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.original_domain, 'original_domain')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['OriginalDomain'] = self.original_domain
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.original_domain = map.get('OriginalDomain')
        return self


class ChangeDomainGroupRequest(TeaModel):
    def __init__(self, lang=None, domain_name=None, group_id=None):
        self.lang = lang
        self.domain_name = domain_name
        self.group_id = group_id

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['GroupId'] = self.group_id
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.group_id = map.get('GroupId')
        return self


class ChangeDomainGroupResponse(TeaModel):
    def __init__(self, request_id=None, group_id=None, group_name=None):
        self.request_id = request_id
        self.group_id = group_id
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        return self


class AddDomainRecordRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, user_client_ip=None, domain_name=None, _rr=None, type=None, value=None, _ttl=None, priority=None, line=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.user_client_ip = user_client_ip
        self.domain_name = domain_name
        self._rr = _rr
        self.type = type
        self.value = value
        self._ttl = _ttl
        self.priority = priority
        self.line = line

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self._rr, '_rr')
        self.validate_required(self.type, 'type')
        self.validate_required(self.value, 'value')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['UserClientIp'] = self.user_client_ip
        result['DomainName'] = self.domain_name
        result['RR'] = self._rr
        result['Type'] = self.type
        result['Value'] = self.value
        result['TTL'] = self._ttl
        result['Priority'] = self.priority
        result['Line'] = self.line
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.user_client_ip = map.get('UserClientIp')
        self.domain_name = map.get('DomainName')
        self._rr = map.get('RR')
        self.type = map.get('Type')
        self.value = map.get('Value')
        self._ttl = map.get('TTL')
        self.priority = map.get('Priority')
        self.line = map.get('Line')
        return self


class AddDomainRecordResponse(TeaModel):
    def __init__(self, request_id=None, record_id=None):
        self.request_id = request_id
        self.record_id = record_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.record_id, 'record_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['RecordId'] = self.record_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.record_id = map.get('RecordId')
        return self


class AddDomainGroupRequest(TeaModel):
    def __init__(self, lang=None, group_name=None):
        self.lang = lang
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['Lang'] = self.lang
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.lang = map.get('Lang')
        self.group_name = map.get('GroupName')
        return self


class AddDomainGroupResponse(TeaModel):
    def __init__(self, request_id=None, group_id=None, group_name=None):
        self.request_id = request_id
        self.group_id = group_id
        self.group_name = group_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        return self


class AddDomainRequest(TeaModel):
    def __init__(self, access_key_id=None, lang=None, domain_name=None, group_id=None, resource_group_id=None):
        self.access_key_id = access_key_id
        self.lang = lang
        self.domain_name = domain_name
        self.group_id = group_id
        self.resource_group_id = resource_group_id

    def validate(self):
        self.validate_required(self.domain_name, 'domain_name')

    def to_map(self):
        result = {}
        result['AccessKeyId'] = self.access_key_id
        result['Lang'] = self.lang
        result['DomainName'] = self.domain_name
        result['GroupId'] = self.group_id
        result['ResourceGroupId'] = self.resource_group_id
        return result

    def from_map(self, map={}):
        self.access_key_id = map.get('AccessKeyId')
        self.lang = map.get('Lang')
        self.domain_name = map.get('DomainName')
        self.group_id = map.get('GroupId')
        self.resource_group_id = map.get('ResourceGroupId')
        return self


class AddDomainResponse(TeaModel):
    def __init__(self, request_id=None, domain_id=None, domain_name=None, puny_code=None, group_id=None, group_name=None, dns_servers=None):
        self.request_id = request_id
        self.domain_id = domain_id
        self.domain_name = domain_name
        self.puny_code = puny_code
        self.group_id = group_id
        self.group_name = group_name
        self.dns_servers = dns_servers

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.domain_id, 'domain_id')
        self.validate_required(self.domain_name, 'domain_name')
        self.validate_required(self.puny_code, 'puny_code')
        self.validate_required(self.group_id, 'group_id')
        self.validate_required(self.group_name, 'group_name')
        self.validate_required(self.dns_servers, 'dns_servers')
        if self.dns_servers:
            self.dns_servers.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['DomainId'] = self.domain_id
        result['DomainName'] = self.domain_name
        result['PunyCode'] = self.puny_code
        result['GroupId'] = self.group_id
        result['GroupName'] = self.group_name
        if self.dns_servers is not None:
            result['DnsServers'] = self.dns_servers.to_map()
        else:
            result['DnsServers'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.domain_id = map.get('DomainId')
        self.domain_name = map.get('DomainName')
        self.puny_code = map.get('PunyCode')
        self.group_id = map.get('GroupId')
        self.group_name = map.get('GroupName')
        if map.get('DnsServers') is not None:
            temp_model = AddDomainResponseDnsServers()
            self.dns_servers = temp_model.from_map(map['DnsServers'])
        else:
            self.dns_servers = None
        return self


class AddDomainResponseDnsServers(TeaModel):
    def __init__(self, dns_server=None):
        self.dns_server = []

    def validate(self):
        self.validate_required(self.dns_server, 'dns_server')

    def to_map(self):
        result = {}
        result['DnsServer'] = []
        if self.dns_server is not None:
            for k in self.dns_server:
                result['DnsServer'].append(k)
        else:
            result['DnsServer'] = None
        return result

    def from_map(self, map={}):
        self.dns_server = []
        if map.get('DnsServer') is not None:
            for k in map.get('DnsServer'):
                self.dns_server.append(k)
        else:
            self.dns_server = None
        return self

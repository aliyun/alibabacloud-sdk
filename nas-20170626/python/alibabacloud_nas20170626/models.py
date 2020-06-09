# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class DeleteLifecyclePolicyRequest(TeaModel):
    def __init__(self, file_system_id=None, lifecycle_policy_name=None):
        self.file_system_id = file_system_id
        self.lifecycle_policy_name = lifecycle_policy_name

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.lifecycle_policy_name, 'lifecycle_policy_name')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['LifecyclePolicyName'] = self.lifecycle_policy_name
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.lifecycle_policy_name = map.get('LifecyclePolicyName')
        return self


class DeleteLifecyclePolicyResponse(TeaModel):
    def __init__(self, request_id=None, success=None):
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class UpgradeFileSystemRequest(TeaModel):
    def __init__(self, file_system_id=None, capacity=None, dry_run=None, client_token=None):
        self.file_system_id = file_system_id
        self.capacity = capacity
        self.dry_run = dry_run
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.capacity, 'capacity')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Capacity'] = self.capacity
        result['DryRun'] = self.dry_run
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.capacity = map.get('Capacity')
        self.dry_run = map.get('DryRun')
        self.client_token = map.get('ClientToken')
        return self


class UpgradeFileSystemResponse(TeaModel):
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


class ModifyLifecyclePolicyRequest(TeaModel):
    def __init__(self, file_system_id=None, lifecycle_policy_name=None, path=None, lifecycle_rule_name=None, storage_type=None):
        self.file_system_id = file_system_id
        self.lifecycle_policy_name = lifecycle_policy_name
        self.path = path
        self.lifecycle_rule_name = lifecycle_rule_name
        self.storage_type = storage_type

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.lifecycle_policy_name, 'lifecycle_policy_name')
        self.validate_required(self.path, 'path')
        self.validate_required(self.lifecycle_rule_name, 'lifecycle_rule_name')
        self.validate_required(self.storage_type, 'storage_type')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['LifecyclePolicyName'] = self.lifecycle_policy_name
        result['Path'] = self.path
        result['LifecycleRuleName'] = self.lifecycle_rule_name
        result['StorageType'] = self.storage_type
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.lifecycle_policy_name = map.get('LifecyclePolicyName')
        self.path = map.get('Path')
        self.lifecycle_rule_name = map.get('LifecycleRuleName')
        self.storage_type = map.get('StorageType')
        return self


class ModifyLifecyclePolicyResponse(TeaModel):
    def __init__(self, request_id=None, success=None):
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class CreateLifecyclePolicyRequest(TeaModel):
    def __init__(self, file_system_id=None, lifecycle_policy_name=None, path=None, lifecycle_rule_name=None, storage_type=None):
        self.file_system_id = file_system_id
        self.lifecycle_policy_name = lifecycle_policy_name
        self.path = path
        self.lifecycle_rule_name = lifecycle_rule_name
        self.storage_type = storage_type

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.lifecycle_policy_name, 'lifecycle_policy_name')
        self.validate_required(self.path, 'path')
        self.validate_required(self.lifecycle_rule_name, 'lifecycle_rule_name')
        self.validate_required(self.storage_type, 'storage_type')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['LifecyclePolicyName'] = self.lifecycle_policy_name
        result['Path'] = self.path
        result['LifecycleRuleName'] = self.lifecycle_rule_name
        result['StorageType'] = self.storage_type
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.lifecycle_policy_name = map.get('LifecyclePolicyName')
        self.path = map.get('Path')
        self.lifecycle_rule_name = map.get('LifecycleRuleName')
        self.storage_type = map.get('StorageType')
        return self


class CreateLifecyclePolicyResponse(TeaModel):
    def __init__(self, request_id=None, success=None):
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class DescribeLifecyclePoliciesRequest(TeaModel):
    def __init__(self, file_system_id=None, page_size=None, page_number=None):
        self.file_system_id = file_system_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeLifecyclePoliciesResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, lifecycle_policies=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.lifecycle_policies = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.lifecycle_policies, 'lifecycle_policies')
        if self.lifecycle_policies:
            for k in self.lifecycle_policies:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['LifecyclePolicies'] = []
        if self.lifecycle_policies is not None:
            for k in self.lifecycle_policies:
                result['LifecyclePolicies'].append(k.to_map() if k else None)
        else:
            result['LifecyclePolicies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.lifecycle_policies = []
        if map.get('LifecyclePolicies') is not None:
            for k in map.get('LifecyclePolicies'):
                temp_model = DescribeLifecyclePoliciesResponseLifecyclePolicies()
                temp_model = temp_model.from_map(k)
                self.lifecycle_policies.append(temp_model)
        else:
            self.lifecycle_policies = None
        return self


class DescribeLifecyclePoliciesResponseLifecyclePolicies(TeaModel):
    def __init__(self, file_system_id=None, lifecycle_policy_name=None, path=None, lifecycle_rule_name=None, storage_type=None, create_time=None):
        self.file_system_id = file_system_id
        self.lifecycle_policy_name = lifecycle_policy_name
        self.path = path
        self.lifecycle_rule_name = lifecycle_rule_name
        self.storage_type = storage_type
        self.create_time = create_time

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.lifecycle_policy_name, 'lifecycle_policy_name')
        self.validate_required(self.path, 'path')
        self.validate_required(self.lifecycle_rule_name, 'lifecycle_rule_name')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.create_time, 'create_time')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['LifecyclePolicyName'] = self.lifecycle_policy_name
        result['Path'] = self.path
        result['LifecycleRuleName'] = self.lifecycle_rule_name
        result['StorageType'] = self.storage_type
        result['CreateTime'] = self.create_time
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.lifecycle_policy_name = map.get('LifecyclePolicyName')
        self.path = map.get('Path')
        self.lifecycle_rule_name = map.get('LifecycleRuleName')
        self.storage_type = map.get('StorageType')
        self.create_time = map.get('CreateTime')
        return self


class DescribeDirQuotasRequest(TeaModel):
    def __init__(self, file_system_id=None, path=None, page_size=None, page_number=None):
        self.file_system_id = file_system_id
        self.path = path
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Path'] = self.path
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.path = map.get('Path')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeDirQuotasResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, dir_quota_infos=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.dir_quota_infos = []

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.dir_quota_infos, 'dir_quota_infos')
        if self.dir_quota_infos:
            for k in self.dir_quota_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['DirQuotaInfos'] = []
        if self.dir_quota_infos is not None:
            for k in self.dir_quota_infos:
                result['DirQuotaInfos'].append(k.to_map() if k else None)
        else:
            result['DirQuotaInfos'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.dir_quota_infos = []
        if map.get('DirQuotaInfos') is not None:
            for k in map.get('DirQuotaInfos'):
                temp_model = DescribeDirQuotasResponseDirQuotaInfos()
                temp_model = temp_model.from_map(k)
                self.dir_quota_infos.append(temp_model)
        else:
            self.dir_quota_infos = None
        return self


class DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos(TeaModel):
    def __init__(self, user_type=None, user_id=None, quota_type=None, size_limit=None, size_real=None, file_count_limit=None, file_count_real=None):
        self.user_type = user_type
        self.user_id = user_id
        self.quota_type = quota_type
        self.size_limit = size_limit
        self.size_real = size_real
        self.file_count_limit = file_count_limit
        self.file_count_real = file_count_real

    def validate(self):
        self.validate_required(self.user_type, 'user_type')
        self.validate_required(self.user_id, 'user_id')
        self.validate_required(self.quota_type, 'quota_type')
        self.validate_required(self.size_limit, 'size_limit')
        self.validate_required(self.size_real, 'size_real')
        self.validate_required(self.file_count_limit, 'file_count_limit')
        self.validate_required(self.file_count_real, 'file_count_real')

    def to_map(self):
        result = {}
        result['UserType'] = self.user_type
        result['UserId'] = self.user_id
        result['QuotaType'] = self.quota_type
        result['SizeLimit'] = self.size_limit
        result['SizeReal'] = self.size_real
        result['FileCountLimit'] = self.file_count_limit
        result['FileCountReal'] = self.file_count_real
        return result

    def from_map(self, map={}):
        self.user_type = map.get('UserType')
        self.user_id = map.get('UserId')
        self.quota_type = map.get('QuotaType')
        self.size_limit = map.get('SizeLimit')
        self.size_real = map.get('SizeReal')
        self.file_count_limit = map.get('FileCountLimit')
        self.file_count_real = map.get('FileCountReal')
        return self


class DescribeDirQuotasResponseDirQuotaInfos(TeaModel):
    def __init__(self, path=None, dir_inode=None, status=None, user_quota_infos=None):
        self.path = path
        self.dir_inode = dir_inode
        self.status = status
        self.user_quota_infos = []

    def validate(self):
        self.validate_required(self.path, 'path')
        self.validate_required(self.dir_inode, 'dir_inode')
        self.validate_required(self.status, 'status')
        self.validate_required(self.user_quota_infos, 'user_quota_infos')
        if self.user_quota_infos:
            for k in self.user_quota_infos:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Path'] = self.path
        result['DirInode'] = self.dir_inode
        result['Status'] = self.status
        result['UserQuotaInfos'] = []
        if self.user_quota_infos is not None:
            for k in self.user_quota_infos:
                result['UserQuotaInfos'].append(k.to_map() if k else None)
        else:
            result['UserQuotaInfos'] = None
        return result

    def from_map(self, map={}):
        self.path = map.get('Path')
        self.dir_inode = map.get('DirInode')
        self.status = map.get('Status')
        self.user_quota_infos = []
        if map.get('UserQuotaInfos') is not None:
            for k in map.get('UserQuotaInfos'):
                temp_model = DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos()
                temp_model = temp_model.from_map(k)
                self.user_quota_infos.append(temp_model)
        else:
            self.user_quota_infos = None
        return self


class SetDirQuotaRequest(TeaModel):
    def __init__(self, file_system_id=None, path=None, quota_type=None, user_type=None, user_id=None, size_limit=None, file_count_limit=None):
        self.file_system_id = file_system_id
        self.path = path
        self.quota_type = quota_type
        self.user_type = user_type
        self.user_id = user_id
        self.size_limit = size_limit
        self.file_count_limit = file_count_limit

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.path, 'path')
        self.validate_required(self.quota_type, 'quota_type')
        self.validate_required(self.user_type, 'user_type')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Path'] = self.path
        result['QuotaType'] = self.quota_type
        result['UserType'] = self.user_type
        result['UserId'] = self.user_id
        result['SizeLimit'] = self.size_limit
        result['FileCountLimit'] = self.file_count_limit
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.path = map.get('Path')
        self.quota_type = map.get('QuotaType')
        self.user_type = map.get('UserType')
        self.user_id = map.get('UserId')
        self.size_limit = map.get('SizeLimit')
        self.file_count_limit = map.get('FileCountLimit')
        return self


class SetDirQuotaResponse(TeaModel):
    def __init__(self, request_id=None, success=None):
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class CancelDirQuotaRequest(TeaModel):
    def __init__(self, file_system_id=None, path=None, user_type=None, user_id=None):
        self.file_system_id = file_system_id
        self.path = path
        self.user_type = user_type
        self.user_id = user_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.path, 'path')
        self.validate_required(self.user_type, 'user_type')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Path'] = self.path
        result['UserType'] = self.user_type
        result['UserId'] = self.user_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.path = map.get('Path')
        self.user_type = map.get('UserType')
        self.user_id = map.get('UserId')
        return self


class CancelDirQuotaResponse(TeaModel):
    def __init__(self, request_id=None, success=None):
        self.request_id = request_id
        self.success = success

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.success, 'success')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Success'] = self.success
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.success = map.get('Success')
        return self


class DescribeStoragePackagesRequest(TeaModel):
    def __init__(self, region_id=None, page_size=None, use_utcdate_time=None, page_number=None):
        self.region_id = region_id
        self.page_size = page_size
        self.use_utcdate_time = use_utcdate_time
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['PageSize'] = self.page_size
        result['UseUTCDateTime'] = self.use_utcdate_time
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.page_size = map.get('PageSize')
        self.use_utcdate_time = map.get('UseUTCDateTime')
        self.page_number = map.get('PageNumber')
        return self


class DescribeStoragePackagesResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, packages=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.packages = packages

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.packages, 'packages')
        if self.packages:
            self.packages.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.packages is not None:
            result['Packages'] = self.packages.to_map()
        else:
            result['Packages'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Packages') is not None:
            temp_model = DescribeStoragePackagesResponsePackages()
            self.packages = temp_model.from_map(map['Packages'])
        else:
            self.packages = None
        return self


class DescribeStoragePackagesResponsePackagesPackage(TeaModel):
    def __init__(self, start_time=None, storage_type=None, status=None, file_system_id=None, package_id=None, expired_time=None, size=None):
        self.start_time = start_time
        self.storage_type = storage_type
        self.status = status
        self.file_system_id = file_system_id
        self.package_id = package_id
        self.expired_time = expired_time
        self.size = size

    def validate(self):
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.status, 'status')
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.package_id, 'package_id')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.size, 'size')

    def to_map(self):
        result = {}
        result['StartTime'] = self.start_time
        result['StorageType'] = self.storage_type
        result['Status'] = self.status
        result['FileSystemId'] = self.file_system_id
        result['PackageId'] = self.package_id
        result['ExpiredTime'] = self.expired_time
        result['Size'] = self.size
        return result

    def from_map(self, map={}):
        self.start_time = map.get('StartTime')
        self.storage_type = map.get('StorageType')
        self.status = map.get('Status')
        self.file_system_id = map.get('FileSystemId')
        self.package_id = map.get('PackageId')
        self.expired_time = map.get('ExpiredTime')
        self.size = map.get('Size')
        return self


class DescribeStoragePackagesResponsePackages(TeaModel):
    def __init__(self, package=None):
        self.package = []

    def validate(self):
        self.validate_required(self.package, 'package')
        if self.package:
            for k in self.package:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Package'] = []
        if self.package is not None:
            for k in self.package:
                result['Package'].append(k.to_map() if k else None)
        else:
            result['Package'] = None
        return result

    def from_map(self, map={}):
        self.package = []
        if map.get('Package') is not None:
            for k in map.get('Package'):
                temp_model = DescribeStoragePackagesResponsePackagesPackage()
                temp_model = temp_model.from_map(k)
                self.package.append(temp_model)
        else:
            self.package = None
        return self


class DescribeFileSystemStatisticsRequest(TeaModel):
    def __init__(self, page_size=None, page_number=None):
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeFileSystemStatisticsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, file_system_statistics=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.file_system_statistics = file_system_statistics

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.file_system_statistics, 'file_system_statistics')
        if self.file_system_statistics:
            self.file_system_statistics.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.file_system_statistics is not None:
            result['FileSystemStatistics'] = self.file_system_statistics.to_map()
        else:
            result['FileSystemStatistics'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('FileSystemStatistics') is not None:
            temp_model = DescribeFileSystemStatisticsResponseFileSystemStatistics()
            self.file_system_statistics = temp_model.from_map(map['FileSystemStatistics'])
        else:
            self.file_system_statistics = None
        return self


class DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic(TeaModel):
    def __init__(self, file_system_type=None, total_count=None, metered_size=None, expired_count=None, expiring_count=None):
        self.file_system_type = file_system_type
        self.total_count = total_count
        self.metered_size = metered_size
        self.expired_count = expired_count
        self.expiring_count = expiring_count

    def validate(self):
        self.validate_required(self.file_system_type, 'file_system_type')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.metered_size, 'metered_size')
        self.validate_required(self.expired_count, 'expired_count')
        self.validate_required(self.expiring_count, 'expiring_count')

    def to_map(self):
        result = {}
        result['FileSystemType'] = self.file_system_type
        result['TotalCount'] = self.total_count
        result['MeteredSize'] = self.metered_size
        result['ExpiredCount'] = self.expired_count
        result['ExpiringCount'] = self.expiring_count
        return result

    def from_map(self, map={}):
        self.file_system_type = map.get('FileSystemType')
        self.total_count = map.get('TotalCount')
        self.metered_size = map.get('MeteredSize')
        self.expired_count = map.get('ExpiredCount')
        self.expiring_count = map.get('ExpiringCount')
        return self


class DescribeFileSystemStatisticsResponseFileSystemStatistics(TeaModel):
    def __init__(self, file_system_statistic=None):
        self.file_system_statistic = []

    def validate(self):
        self.validate_required(self.file_system_statistic, 'file_system_statistic')
        if self.file_system_statistic:
            for k in self.file_system_statistic:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileSystemStatistic'] = []
        if self.file_system_statistic is not None:
            for k in self.file_system_statistic:
                result['FileSystemStatistic'].append(k.to_map() if k else None)
        else:
            result['FileSystemStatistic'] = None
        return result

    def from_map(self, map={}):
        self.file_system_statistic = []
        if map.get('FileSystemStatistic') is not None:
            for k in map.get('FileSystemStatistic'):
                temp_model = DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic()
                temp_model = temp_model.from_map(k)
                self.file_system_statistic.append(temp_model)
        else:
            self.file_system_statistic = None
        return self


class DescribeLogAnalysisRequest(TeaModel):
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


class DescribeLogAnalysisResponse(TeaModel):
    def __init__(self, request_id=None, code=None, total_count=None, page_size=None, page_number=None, analyses=None):
        self.request_id = request_id
        self.code = code
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.analyses = analyses

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.code, 'code')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.analyses, 'analyses')
        if self.analyses:
            self.analyses.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Code'] = self.code
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.analyses is not None:
            result['Analyses'] = self.analyses.to_map()
        else:
            result['Analyses'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.code = map.get('Code')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Analyses') is not None:
            temp_model = DescribeLogAnalysisResponseAnalyses()
            self.analyses = temp_model.from_map(map['Analyses'])
        else:
            self.analyses = None
        return self


class DescribeLogAnalysisResponseAnalysesAnalysisMetaValue(TeaModel):
    def __init__(self, logstore=None, region=None, project=None, role_arn=None):
        self.logstore = logstore
        self.region = region
        self.project = project
        self.role_arn = role_arn

    def validate(self):
        self.validate_required(self.logstore, 'logstore')
        self.validate_required(self.region, 'region')
        self.validate_required(self.project, 'project')
        self.validate_required(self.role_arn, 'role_arn')

    def to_map(self):
        result = {}
        result['Logstore'] = self.logstore
        result['Region'] = self.region
        result['Project'] = self.project
        result['RoleArn'] = self.role_arn
        return result

    def from_map(self, map={}):
        self.logstore = map.get('Logstore')
        self.region = map.get('Region')
        self.project = map.get('Project')
        self.role_arn = map.get('RoleArn')
        return self


class DescribeLogAnalysisResponseAnalysesAnalysis(TeaModel):
    def __init__(self, meta_key=None, meta_value=None):
        self.meta_key = meta_key
        self.meta_value = meta_value

    def validate(self):
        self.validate_required(self.meta_key, 'meta_key')
        self.validate_required(self.meta_value, 'meta_value')
        if self.meta_value:
            self.meta_value.validate()

    def to_map(self):
        result = {}
        result['MetaKey'] = self.meta_key
        if self.meta_value is not None:
            result['MetaValue'] = self.meta_value.to_map()
        else:
            result['MetaValue'] = None
        return result

    def from_map(self, map={}):
        self.meta_key = map.get('MetaKey')
        if map.get('MetaValue') is not None:
            temp_model = DescribeLogAnalysisResponseAnalysesAnalysisMetaValue()
            self.meta_value = temp_model.from_map(map['MetaValue'])
        else:
            self.meta_value = None
        return self


class DescribeLogAnalysisResponseAnalyses(TeaModel):
    def __init__(self, analysis=None):
        self.analysis = []

    def validate(self):
        self.validate_required(self.analysis, 'analysis')
        if self.analysis:
            for k in self.analysis:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Analysis'] = []
        if self.analysis is not None:
            for k in self.analysis:
                result['Analysis'].append(k.to_map() if k else None)
        else:
            result['Analysis'] = None
        return result

    def from_map(self, map={}):
        self.analysis = []
        if map.get('Analysis') is not None:
            for k in map.get('Analysis'):
                temp_model = DescribeLogAnalysisResponseAnalysesAnalysis()
                temp_model = temp_model.from_map(k)
                self.analysis.append(temp_model)
        else:
            self.analysis = None
        return self


class DescribeMountedClientsRequest(TeaModel):
    def __init__(self, region_id=None, page_size=None, file_system_id=None, client_ip=None, mount_target_domain=None, page_number=None):
        self.region_id = region_id
        self.page_size = page_size
        self.file_system_id = file_system_id
        self.client_ip = client_ip
        self.mount_target_domain = mount_target_domain
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.mount_target_domain, 'mount_target_domain')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['PageSize'] = self.page_size
        result['FileSystemId'] = self.file_system_id
        result['ClientIP'] = self.client_ip
        result['MountTargetDomain'] = self.mount_target_domain
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.page_size = map.get('PageSize')
        self.file_system_id = map.get('FileSystemId')
        self.client_ip = map.get('ClientIP')
        self.mount_target_domain = map.get('MountTargetDomain')
        self.page_number = map.get('PageNumber')
        return self


class DescribeMountedClientsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, clients=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.clients = clients

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.clients, 'clients')
        if self.clients:
            self.clients.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.clients is not None:
            result['Clients'] = self.clients.to_map()
        else:
            result['Clients'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Clients') is not None:
            temp_model = DescribeMountedClientsResponseClients()
            self.clients = temp_model.from_map(map['Clients'])
        else:
            self.clients = None
        return self


class DescribeMountedClientsResponseClientsClient(TeaModel):
    def __init__(self, client_ip=None):
        self.client_ip = client_ip

    def validate(self):
        self.validate_required(self.client_ip, 'client_ip')

    def to_map(self):
        result = {}
        result['ClientIP'] = self.client_ip
        return result

    def from_map(self, map={}):
        self.client_ip = map.get('ClientIP')
        return self


class DescribeMountedClientsResponseClients(TeaModel):
    def __init__(self, client=None):
        self.client = []

    def validate(self):
        self.validate_required(self.client, 'client')
        if self.client:
            for k in self.client:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Client'] = []
        if self.client is not None:
            for k in self.client:
                result['Client'].append(k.to_map() if k else None)
        else:
            result['Client'] = None
        return result

    def from_map(self, map={}):
        self.client = []
        if map.get('Client') is not None:
            for k in map.get('Client'):
                temp_model = DescribeMountedClientsResponseClientsClient()
                temp_model = temp_model.from_map(k)
                self.client.append(temp_model)
        else:
            self.client = None
        return self


class DescribeAutoSnapshotTasksRequest(TeaModel):
    def __init__(self, file_system_ids=None, auto_snapshot_policy_ids=None, file_system_type=None, page_size=None, page_number=None):
        self.file_system_ids = file_system_ids
        self.auto_snapshot_policy_ids = auto_snapshot_policy_ids
        self.file_system_type = file_system_type
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.file_system_type, 'file_system_type')

    def to_map(self):
        result = {}
        result['FileSystemIds'] = self.file_system_ids
        result['AutoSnapshotPolicyIds'] = self.auto_snapshot_policy_ids
        result['FileSystemType'] = self.file_system_type
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_ids = map.get('FileSystemIds')
        self.auto_snapshot_policy_ids = map.get('AutoSnapshotPolicyIds')
        self.file_system_type = map.get('FileSystemType')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeAutoSnapshotTasksResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, auto_snapshot_tasks=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.auto_snapshot_tasks = auto_snapshot_tasks

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.auto_snapshot_tasks, 'auto_snapshot_tasks')
        if self.auto_snapshot_tasks:
            self.auto_snapshot_tasks.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.auto_snapshot_tasks is not None:
            result['AutoSnapshotTasks'] = self.auto_snapshot_tasks.to_map()
        else:
            result['AutoSnapshotTasks'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('AutoSnapshotTasks') is not None:
            temp_model = DescribeAutoSnapshotTasksResponseAutoSnapshotTasks()
            self.auto_snapshot_tasks = temp_model.from_map(map['AutoSnapshotTasks'])
        else:
            self.auto_snapshot_tasks = None
        return self


class DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask(TeaModel):
    def __init__(self, source_file_system_id=None, auto_snapshot_policy_id=None):
        self.source_file_system_id = source_file_system_id
        self.auto_snapshot_policy_id = auto_snapshot_policy_id

    def validate(self):
        self.validate_required(self.source_file_system_id, 'source_file_system_id')
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')

    def to_map(self):
        result = {}
        result['SourceFileSystemId'] = self.source_file_system_id
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        return result

    def from_map(self, map={}):
        self.source_file_system_id = map.get('SourceFileSystemId')
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        return self


class DescribeAutoSnapshotTasksResponseAutoSnapshotTasks(TeaModel):
    def __init__(self, auto_snapshot_task=None):
        self.auto_snapshot_task = []

    def validate(self):
        self.validate_required(self.auto_snapshot_task, 'auto_snapshot_task')
        if self.auto_snapshot_task:
            for k in self.auto_snapshot_task:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AutoSnapshotTask'] = []
        if self.auto_snapshot_task is not None:
            for k in self.auto_snapshot_task:
                result['AutoSnapshotTask'].append(k.to_map() if k else None)
        else:
            result['AutoSnapshotTask'] = None
        return result

    def from_map(self, map={}):
        self.auto_snapshot_task = []
        if map.get('AutoSnapshotTask') is not None:
            for k in map.get('AutoSnapshotTask'):
                temp_model = DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask()
                temp_model = temp_model.from_map(k)
                self.auto_snapshot_task.append(temp_model)
        else:
            self.auto_snapshot_task = None
        return self


class RemoveClientFromBlackListRequest(TeaModel):
    def __init__(self, region_id=None, file_system_id=None, client_ip=None, client_token=None):
        self.region_id = region_id
        self.file_system_id = file_system_id
        self.client_ip = client_ip
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.client_ip, 'client_ip')
        self.validate_required(self.client_token, 'client_token')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['FileSystemId'] = self.file_system_id
        result['ClientIP'] = self.client_ip
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.file_system_id = map.get('FileSystemId')
        self.client_ip = map.get('ClientIP')
        self.client_token = map.get('ClientToken')
        return self


class RemoveClientFromBlackListResponse(TeaModel):
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


class DescribeBlackListClientsRequest(TeaModel):
    def __init__(self, region_id=None, file_system_id=None, client_ip=None):
        self.region_id = region_id
        self.file_system_id = file_system_id
        self.client_ip = client_ip

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['FileSystemId'] = self.file_system_id
        result['ClientIP'] = self.client_ip
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.file_system_id = map.get('FileSystemId')
        self.client_ip = map.get('ClientIP')
        return self


class DescribeBlackListClientsResponse(TeaModel):
    def __init__(self, request_id=None, clients=None):
        self.request_id = request_id
        self.clients = clients

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.clients, 'clients')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['Clients'] = self.clients
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.clients = map.get('Clients')
        return self


class AddClientToBlackListRequest(TeaModel):
    def __init__(self, region_id=None, file_system_id=None, client_ip=None, client_token=None):
        self.region_id = region_id
        self.file_system_id = file_system_id
        self.client_ip = client_ip
        self.client_token = client_token

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.client_ip, 'client_ip')
        self.validate_required(self.client_token, 'client_token')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['FileSystemId'] = self.file_system_id
        result['ClientIP'] = self.client_ip
        result['ClientToken'] = self.client_token
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.file_system_id = map.get('FileSystemId')
        self.client_ip = map.get('ClientIP')
        self.client_token = map.get('ClientToken')
        return self


class AddClientToBlackListResponse(TeaModel):
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


class DescribeLDAPConfigRequest(TeaModel):
    def __init__(self, file_system_id=None):
        self.file_system_id = file_system_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        return self


class DescribeLDAPConfigResponse(TeaModel):
    def __init__(self, request_id=None, ldap=None):
        self.request_id = request_id
        self.ldap = ldap

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.ldap, 'ldap')
        if self.ldap:
            self.ldap.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.ldap is not None:
            result['Ldap'] = self.ldap.to_map()
        else:
            result['Ldap'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Ldap') is not None:
            temp_model = DescribeLDAPConfigResponseLdap()
            self.ldap = temp_model.from_map(map['Ldap'])
        else:
            self.ldap = None
        return self


class DescribeLDAPConfigResponseLdap(TeaModel):
    def __init__(self, bind_dn=None, _uri=None, search_base=None):
        self.bind_dn = bind_dn
        self._uri = _uri
        self.search_base = search_base

    def validate(self):
        self.validate_required(self.bind_dn, 'bind_dn')
        self.validate_required(self._uri, '_uri')
        self.validate_required(self.search_base, 'search_base')

    def to_map(self):
        result = {}
        result['BindDN'] = self.bind_dn
        result['URI'] = self._uri
        result['SearchBase'] = self.search_base
        return result

    def from_map(self, map={}):
        self.bind_dn = map.get('BindDN')
        self._uri = map.get('URI')
        self.search_base = map.get('SearchBase')
        return self


class ModifyLDAPConfigRequest(TeaModel):
    def __init__(self, file_system_id=None, _uri=None, bind_dn=None, search_base=None):
        self.file_system_id = file_system_id
        self._uri = _uri
        self.bind_dn = bind_dn
        self.search_base = search_base

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self._uri, '_uri')
        self.validate_required(self.search_base, 'search_base')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['URI'] = self._uri
        result['BindDN'] = self.bind_dn
        result['SearchBase'] = self.search_base
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self._uri = map.get('URI')
        self.bind_dn = map.get('BindDN')
        self.search_base = map.get('SearchBase')
        return self


class ModifyLDAPConfigResponse(TeaModel):
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


class CreateLDAPConfigRequest(TeaModel):
    def __init__(self, file_system_id=None, _uri=None, bind_dn=None, search_base=None):
        self.file_system_id = file_system_id
        self._uri = _uri
        self.bind_dn = bind_dn
        self.search_base = search_base

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self._uri, '_uri')
        self.validate_required(self.search_base, 'search_base')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['URI'] = self._uri
        result['BindDN'] = self.bind_dn
        result['SearchBase'] = self.search_base
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self._uri = map.get('URI')
        self.bind_dn = map.get('BindDN')
        self.search_base = map.get('SearchBase')
        return self


class CreateLDAPConfigResponse(TeaModel):
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


class DeleteLDAPConfigRequest(TeaModel):
    def __init__(self, file_system_id=None):
        self.file_system_id = file_system_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        return self


class DeleteLDAPConfigResponse(TeaModel):
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
    def __init__(self, file_system_id=None, page_size=None, page_number=None, tag=None):
        self.file_system_id = file_system_id
        self.page_size = page_size
        self.page_number = page_number
        self.tag = []

    def validate(self):
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = DescribeTagsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class DescribeTagsRequestTag(TeaModel):
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


class DescribeTagsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, tags=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.tags = tags

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.tags, 'tags')
        if self.tags:
            self.tags.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.tags is not None:
            result['Tags'] = self.tags.to_map()
        else:
            result['Tags'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Tags') is not None:
            temp_model = DescribeTagsResponseTags()
            self.tags = temp_model.from_map(map['Tags'])
        else:
            self.tags = None
        return self


class DescribeTagsResponseTagsTagFileSystemIds(TeaModel):
    def __init__(self, file_system_id=None):
        self.file_system_id = []

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = []
        if self.file_system_id is not None:
            for k in self.file_system_id:
                result['FileSystemId'].append(k)
        else:
            result['FileSystemId'] = None
        return result

    def from_map(self, map={}):
        self.file_system_id = []
        if map.get('FileSystemId') is not None:
            for k in map.get('FileSystemId'):
                self.file_system_id.append(k)
        else:
            self.file_system_id = None
        return self


class DescribeTagsResponseTagsTag(TeaModel):
    def __init__(self, key=None, value=None, file_system_ids=None):
        self.key = key
        self.value = value
        self.file_system_ids = file_system_ids

    def validate(self):
        self.validate_required(self.key, 'key')
        self.validate_required(self.value, 'value')
        self.validate_required(self.file_system_ids, 'file_system_ids')
        if self.file_system_ids:
            self.file_system_ids.validate()

    def to_map(self):
        result = {}
        result['Key'] = self.key
        result['Value'] = self.value
        if self.file_system_ids is not None:
            result['FileSystemIds'] = self.file_system_ids.to_map()
        else:
            result['FileSystemIds'] = None
        return result

    def from_map(self, map={}):
        self.key = map.get('Key')
        self.value = map.get('Value')
        if map.get('FileSystemIds') is not None:
            temp_model = DescribeTagsResponseTagsTagFileSystemIds()
            self.file_system_ids = temp_model.from_map(map['FileSystemIds'])
        else:
            self.file_system_ids = None
        return self


class DescribeTagsResponseTags(TeaModel):
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
                temp_model = DescribeTagsResponseTagsTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class RemoveTagsRequest(TeaModel):
    def __init__(self, file_system_id=None, tag=None):
        self.file_system_id = file_system_id
        self.tag = []

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = RemoveTagsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class RemoveTagsRequestTag(TeaModel):
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


class RemoveTagsResponse(TeaModel):
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


class AddTagsRequest(TeaModel):
    def __init__(self, file_system_id=None, tag=None):
        self.file_system_id = file_system_id
        self.tag = []

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.tag, 'tag')
        if self.tag:
            for k in self.tag:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Tag'] = []
        if self.tag is not None:
            for k in self.tag:
                result['Tag'].append(k.to_map() if k else None)
        else:
            result['Tag'] = None
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.tag = []
        if map.get('Tag') is not None:
            for k in map.get('Tag'):
                temp_model = AddTagsRequestTag()
                temp_model = temp_model.from_map(k)
                self.tag.append(temp_model)
        else:
            self.tag = None
        return self


class AddTagsRequestTag(TeaModel):
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


class AddTagsResponse(TeaModel):
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


class ResetFileSystemRequest(TeaModel):
    def __init__(self, file_system_id=None, snapshot_id=None):
        self.file_system_id = file_system_id
        self.snapshot_id = snapshot_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.snapshot_id, 'snapshot_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['SnapshotId'] = self.snapshot_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.snapshot_id = map.get('SnapshotId')
        return self


class ResetFileSystemResponse(TeaModel):
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


class CreateAutoSnapshotPolicyRequest(TeaModel):
    def __init__(self, repeat_weekdays=None, time_points=None, retention_days=None, auto_snapshot_policy_name=None, file_system_type=None):
        self.repeat_weekdays = repeat_weekdays
        self.time_points = time_points
        self.retention_days = retention_days
        self.auto_snapshot_policy_name = auto_snapshot_policy_name
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.repeat_weekdays, 'repeat_weekdays')
        self.validate_required(self.time_points, 'time_points')
        self.validate_required(self.file_system_type, 'file_system_type')

    def to_map(self):
        result = {}
        result['RepeatWeekdays'] = self.repeat_weekdays
        result['TimePoints'] = self.time_points
        result['RetentionDays'] = self.retention_days
        result['AutoSnapshotPolicyName'] = self.auto_snapshot_policy_name
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.repeat_weekdays = map.get('RepeatWeekdays')
        self.time_points = map.get('TimePoints')
        self.retention_days = map.get('RetentionDays')
        self.auto_snapshot_policy_name = map.get('AutoSnapshotPolicyName')
        self.file_system_type = map.get('FileSystemType')
        return self


class CreateAutoSnapshotPolicyResponse(TeaModel):
    def __init__(self, request_id=None, auto_snapshot_policy_id=None):
        self.request_id = request_id
        self.auto_snapshot_policy_id = auto_snapshot_policy_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        return self


class DescribeAutoSnapshotPoliciesRequest(TeaModel):
    def __init__(self, auto_snapshot_policy_id=None, page_size=None, page_number=None, file_system_type=None):
        self.auto_snapshot_policy_id = auto_snapshot_policy_id
        self.page_size = page_size
        self.page_number = page_number
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.file_system_type, 'file_system_type')

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.file_system_type = map.get('FileSystemType')
        return self


class DescribeAutoSnapshotPoliciesResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, auto_snapshot_policies=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.auto_snapshot_policies = auto_snapshot_policies

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.auto_snapshot_policies, 'auto_snapshot_policies')
        if self.auto_snapshot_policies:
            self.auto_snapshot_policies.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.auto_snapshot_policies is not None:
            result['AutoSnapshotPolicies'] = self.auto_snapshot_policies.to_map()
        else:
            result['AutoSnapshotPolicies'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('AutoSnapshotPolicies') is not None:
            temp_model = DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies()
            self.auto_snapshot_policies = temp_model.from_map(map['AutoSnapshotPolicies'])
        else:
            self.auto_snapshot_policies = None
        return self


class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy(TeaModel):
    def __init__(self, auto_snapshot_policy_id=None, auto_snapshot_policy_name=None, create_time=None, file_system_nums=None, region_id=None, repeat_weekdays=None, retention_days=None, status=None, time_points=None):
        self.auto_snapshot_policy_id = auto_snapshot_policy_id
        self.auto_snapshot_policy_name = auto_snapshot_policy_name
        self.create_time = create_time
        self.file_system_nums = file_system_nums
        self.region_id = region_id
        self.repeat_weekdays = repeat_weekdays
        self.retention_days = retention_days
        self.status = status
        self.time_points = time_points

    def validate(self):
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')
        self.validate_required(self.auto_snapshot_policy_name, 'auto_snapshot_policy_name')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.file_system_nums, 'file_system_nums')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.repeat_weekdays, 'repeat_weekdays')
        self.validate_required(self.retention_days, 'retention_days')
        self.validate_required(self.status, 'status')
        self.validate_required(self.time_points, 'time_points')

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        result['AutoSnapshotPolicyName'] = self.auto_snapshot_policy_name
        result['CreateTime'] = self.create_time
        result['FileSystemNums'] = self.file_system_nums
        result['RegionId'] = self.region_id
        result['RepeatWeekdays'] = self.repeat_weekdays
        result['RetentionDays'] = self.retention_days
        result['Status'] = self.status
        result['TimePoints'] = self.time_points
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        self.auto_snapshot_policy_name = map.get('AutoSnapshotPolicyName')
        self.create_time = map.get('CreateTime')
        self.file_system_nums = map.get('FileSystemNums')
        self.region_id = map.get('RegionId')
        self.repeat_weekdays = map.get('RepeatWeekdays')
        self.retention_days = map.get('RetentionDays')
        self.status = map.get('Status')
        self.time_points = map.get('TimePoints')
        return self


class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies(TeaModel):
    def __init__(self, auto_snapshot_policy=None):
        self.auto_snapshot_policy = []

    def validate(self):
        self.validate_required(self.auto_snapshot_policy, 'auto_snapshot_policy')
        if self.auto_snapshot_policy:
            for k in self.auto_snapshot_policy:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicy'] = []
        if self.auto_snapshot_policy is not None:
            for k in self.auto_snapshot_policy:
                result['AutoSnapshotPolicy'].append(k.to_map() if k else None)
        else:
            result['AutoSnapshotPolicy'] = None
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy = []
        if map.get('AutoSnapshotPolicy') is not None:
            for k in map.get('AutoSnapshotPolicy'):
                temp_model = DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy()
                temp_model = temp_model.from_map(k)
                self.auto_snapshot_policy.append(temp_model)
        else:
            self.auto_snapshot_policy = None
        return self


class CancelAutoSnapshotPolicyRequest(TeaModel):
    def __init__(self, file_system_ids=None):
        self.file_system_ids = file_system_ids

    def validate(self):
        self.validate_required(self.file_system_ids, 'file_system_ids')

    def to_map(self):
        result = {}
        result['FileSystemIds'] = self.file_system_ids
        return result

    def from_map(self, map={}):
        self.file_system_ids = map.get('FileSystemIds')
        return self


class CancelAutoSnapshotPolicyResponse(TeaModel):
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


class ApplyAutoSnapshotPolicyRequest(TeaModel):
    def __init__(self, auto_snapshot_policy_id=None, file_system_ids=None):
        self.auto_snapshot_policy_id = auto_snapshot_policy_id
        self.file_system_ids = file_system_ids

    def validate(self):
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')
        self.validate_required(self.file_system_ids, 'file_system_ids')

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        result['FileSystemIds'] = self.file_system_ids
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        self.file_system_ids = map.get('FileSystemIds')
        return self


class ApplyAutoSnapshotPolicyResponse(TeaModel):
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


class ModifyAutoSnapshotPolicyRequest(TeaModel):
    def __init__(self, auto_snapshot_policy_id=None, auto_snapshot_policy_name=None, repeat_weekdays=None, retention_days=None, time_points=None):
        self.auto_snapshot_policy_id = auto_snapshot_policy_id
        self.auto_snapshot_policy_name = auto_snapshot_policy_name
        self.repeat_weekdays = repeat_weekdays
        self.retention_days = retention_days
        self.time_points = time_points

    def validate(self):
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        result['AutoSnapshotPolicyName'] = self.auto_snapshot_policy_name
        result['RepeatWeekdays'] = self.repeat_weekdays
        result['RetentionDays'] = self.retention_days
        result['TimePoints'] = self.time_points
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        self.auto_snapshot_policy_name = map.get('AutoSnapshotPolicyName')
        self.repeat_weekdays = map.get('RepeatWeekdays')
        self.retention_days = map.get('RetentionDays')
        self.time_points = map.get('TimePoints')
        return self


class ModifyAutoSnapshotPolicyResponse(TeaModel):
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


class DeleteAutoSnapshotPolicyRequest(TeaModel):
    def __init__(self, auto_snapshot_policy_id=None):
        self.auto_snapshot_policy_id = auto_snapshot_policy_id

    def validate(self):
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')

    def to_map(self):
        result = {}
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        return result

    def from_map(self, map={}):
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        return self


class DeleteAutoSnapshotPolicyResponse(TeaModel):
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


class DeleteSnapshotRequest(TeaModel):
    def __init__(self, snapshot_id=None):
        self.snapshot_id = snapshot_id

    def validate(self):
        self.validate_required(self.snapshot_id, 'snapshot_id')

    def to_map(self):
        result = {}
        result['SnapshotId'] = self.snapshot_id
        return result

    def from_map(self, map={}):
        self.snapshot_id = map.get('SnapshotId')
        return self


class DeleteSnapshotResponse(TeaModel):
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


class CreateSnapshotRequest(TeaModel):
    def __init__(self, file_system_id=None, snapshot_name=None, description=None, retention_days=None):
        self.file_system_id = file_system_id
        self.snapshot_name = snapshot_name
        self.description = description
        self.retention_days = retention_days

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['SnapshotName'] = self.snapshot_name
        result['Description'] = self.description
        result['RetentionDays'] = self.retention_days
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.snapshot_name = map.get('SnapshotName')
        self.description = map.get('Description')
        self.retention_days = map.get('RetentionDays')
        return self


class CreateSnapshotResponse(TeaModel):
    def __init__(self, request_id=None, snapshot_id=None):
        self.request_id = request_id
        self.snapshot_id = snapshot_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.snapshot_id, 'snapshot_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['SnapshotId'] = self.snapshot_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.snapshot_id = map.get('SnapshotId')
        return self


class DescribeSnapshotsRequest(TeaModel):
    def __init__(self, file_system_type=None, file_system_id=None, snapshot_ids=None, snapshot_name=None, snapshot_type=None, status=None, page_size=None, page_number=None):
        self.file_system_type = file_system_type
        self.file_system_id = file_system_id
        self.snapshot_ids = snapshot_ids
        self.snapshot_name = snapshot_name
        self.snapshot_type = snapshot_type
        self.status = status
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.file_system_type, 'file_system_type')

    def to_map(self):
        result = {}
        result['FileSystemType'] = self.file_system_type
        result['FileSystemId'] = self.file_system_id
        result['SnapshotIds'] = self.snapshot_ids
        result['SnapshotName'] = self.snapshot_name
        result['SnapshotType'] = self.snapshot_type
        result['Status'] = self.status
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_type = map.get('FileSystemType')
        self.file_system_id = map.get('FileSystemId')
        self.snapshot_ids = map.get('SnapshotIds')
        self.snapshot_name = map.get('SnapshotName')
        self.snapshot_type = map.get('SnapshotType')
        self.status = map.get('Status')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeSnapshotsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, snapshots=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.snapshots = snapshots

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.snapshots, 'snapshots')
        if self.snapshots:
            self.snapshots.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.snapshots is not None:
            result['Snapshots'] = self.snapshots.to_map()
        else:
            result['Snapshots'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Snapshots') is not None:
            temp_model = DescribeSnapshotsResponseSnapshots()
            self.snapshots = temp_model.from_map(map['Snapshots'])
        else:
            self.snapshots = None
        return self


class DescribeSnapshotsResponseSnapshotsSnapshot(TeaModel):
    def __init__(self, create_time=None, description=None, progress=None, remain_time=None, retention_days=None, snapshot_id=None, snapshot_name=None, source_file_system_id=None, source_file_system_size=None, status=None, encrypt_type=None, source_file_system_version=None):
        self.create_time = create_time
        self.description = description
        self.progress = progress
        self.remain_time = remain_time
        self.retention_days = retention_days
        self.snapshot_id = snapshot_id
        self.snapshot_name = snapshot_name
        self.source_file_system_id = source_file_system_id
        self.source_file_system_size = source_file_system_size
        self.status = status
        self.encrypt_type = encrypt_type
        self.source_file_system_version = source_file_system_version

    def validate(self):
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.description, 'description')
        self.validate_required(self.progress, 'progress')
        self.validate_required(self.remain_time, 'remain_time')
        self.validate_required(self.retention_days, 'retention_days')
        self.validate_required(self.snapshot_id, 'snapshot_id')
        self.validate_required(self.snapshot_name, 'snapshot_name')
        self.validate_required(self.source_file_system_id, 'source_file_system_id')
        self.validate_required(self.source_file_system_size, 'source_file_system_size')
        self.validate_required(self.status, 'status')
        self.validate_required(self.encrypt_type, 'encrypt_type')
        self.validate_required(self.source_file_system_version, 'source_file_system_version')

    def to_map(self):
        result = {}
        result['CreateTime'] = self.create_time
        result['Description'] = self.description
        result['Progress'] = self.progress
        result['RemainTime'] = self.remain_time
        result['RetentionDays'] = self.retention_days
        result['SnapshotId'] = self.snapshot_id
        result['SnapshotName'] = self.snapshot_name
        result['SourceFileSystemId'] = self.source_file_system_id
        result['SourceFileSystemSize'] = self.source_file_system_size
        result['Status'] = self.status
        result['EncryptType'] = self.encrypt_type
        result['SourceFileSystemVersion'] = self.source_file_system_version
        return result

    def from_map(self, map={}):
        self.create_time = map.get('CreateTime')
        self.description = map.get('Description')
        self.progress = map.get('Progress')
        self.remain_time = map.get('RemainTime')
        self.retention_days = map.get('RetentionDays')
        self.snapshot_id = map.get('SnapshotId')
        self.snapshot_name = map.get('SnapshotName')
        self.source_file_system_id = map.get('SourceFileSystemId')
        self.source_file_system_size = map.get('SourceFileSystemSize')
        self.status = map.get('Status')
        self.encrypt_type = map.get('EncryptType')
        self.source_file_system_version = map.get('SourceFileSystemVersion')
        return self


class DescribeSnapshotsResponseSnapshots(TeaModel):
    def __init__(self, snapshot=None):
        self.snapshot = []

    def validate(self):
        self.validate_required(self.snapshot, 'snapshot')
        if self.snapshot:
            for k in self.snapshot:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Snapshot'] = []
        if self.snapshot is not None:
            for k in self.snapshot:
                result['Snapshot'].append(k.to_map() if k else None)
        else:
            result['Snapshot'] = None
        return result

    def from_map(self, map={}):
        self.snapshot = []
        if map.get('Snapshot') is not None:
            for k in map.get('Snapshot'):
                temp_model = DescribeSnapshotsResponseSnapshotsSnapshot()
                temp_model = temp_model.from_map(k)
                self.snapshot.append(temp_model)
        else:
            self.snapshot = None
        return self


class DescribeZonesRequest(TeaModel):
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


class DescribeZonesResponse(TeaModel):
    def __init__(self, request_id=None, zones=None):
        self.request_id = request_id
        self.zones = zones

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.zones, 'zones')
        if self.zones:
            self.zones.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        if self.zones is not None:
            result['Zones'] = self.zones.to_map()
        else:
            result['Zones'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        if map.get('Zones') is not None:
            temp_model = DescribeZonesResponseZones()
            self.zones = temp_model.from_map(map['Zones'])
        else:
            self.zones = None
        return self


class DescribeZonesResponseZonesZoneCapacity(TeaModel):
    def __init__(self, protocol=None):
        self.protocol = []

    def validate(self):
        self.validate_required(self.protocol, 'protocol')

    def to_map(self):
        result = {}
        result['Protocol'] = []
        if self.protocol is not None:
            for k in self.protocol:
                result['Protocol'].append(k)
        else:
            result['Protocol'] = None
        return result

    def from_map(self, map={}):
        self.protocol = []
        if map.get('Protocol') is not None:
            for k in map.get('Protocol'):
                self.protocol.append(k)
        else:
            self.protocol = None
        return self


class DescribeZonesResponseZonesZonePerformance(TeaModel):
    def __init__(self, protocol=None):
        self.protocol = []

    def validate(self):
        self.validate_required(self.protocol, 'protocol')

    def to_map(self):
        result = {}
        result['Protocol'] = []
        if self.protocol is not None:
            for k in self.protocol:
                result['Protocol'].append(k)
        else:
            result['Protocol'] = None
        return result

    def from_map(self, map={}):
        self.protocol = []
        if map.get('Protocol') is not None:
            for k in map.get('Protocol'):
                self.protocol.append(k)
        else:
            self.protocol = None
        return self


class DescribeZonesResponseZonesZone(TeaModel):
    def __init__(self, zone_id=None, capacity=None, performance=None):
        self.zone_id = zone_id
        self.capacity = capacity
        self.performance = performance

    def validate(self):
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.capacity, 'capacity')
        if self.capacity:
            self.capacity.validate()
        self.validate_required(self.performance, 'performance')
        if self.performance:
            self.performance.validate()

    def to_map(self):
        result = {}
        result['ZoneId'] = self.zone_id
        if self.capacity is not None:
            result['Capacity'] = self.capacity.to_map()
        else:
            result['Capacity'] = None
        if self.performance is not None:
            result['Performance'] = self.performance.to_map()
        else:
            result['Performance'] = None
        return result

    def from_map(self, map={}):
        self.zone_id = map.get('ZoneId')
        if map.get('Capacity') is not None:
            temp_model = DescribeZonesResponseZonesZoneCapacity()
            self.capacity = temp_model.from_map(map['Capacity'])
        else:
            self.capacity = None
        if map.get('Performance') is not None:
            temp_model = DescribeZonesResponseZonesZonePerformance()
            self.performance = temp_model.from_map(map['Performance'])
        else:
            self.performance = None
        return self


class DescribeZonesResponseZones(TeaModel):
    def __init__(self, zone=None):
        self.zone = []

    def validate(self):
        self.validate_required(self.zone, 'zone')
        if self.zone:
            for k in self.zone:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Zone'] = []
        if self.zone is not None:
            for k in self.zone:
                result['Zone'].append(k.to_map() if k else None)
        else:
            result['Zone'] = None
        return result

    def from_map(self, map={}):
        self.zone = []
        if map.get('Zone') is not None:
            for k in map.get('Zone'):
                temp_model = DescribeZonesResponseZonesZone()
                temp_model = temp_model.from_map(k)
                self.zone.append(temp_model)
        else:
            self.zone = None
        return self


class CreateAccessGroupRequest(TeaModel):
    def __init__(self, access_group_name=None, access_group_type=None, description=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.access_group_type = access_group_type
        self.description = description
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.access_group_type, 'access_group_type')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['AccessGroupType'] = self.access_group_type
        result['Description'] = self.description
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.access_group_type = map.get('AccessGroupType')
        self.description = map.get('Description')
        self.file_system_type = map.get('FileSystemType')
        return self


class CreateAccessGroupResponse(TeaModel):
    def __init__(self, request_id=None, access_group_name=None):
        self.request_id = request_id
        self.access_group_name = access_group_name

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_group_name, 'access_group_name')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AccessGroupName'] = self.access_group_name
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.access_group_name = map.get('AccessGroupName')
        return self


class CreateMountTargetRequest(TeaModel):
    def __init__(self, file_system_id=None, access_group_name=None, network_type=None, vpc_id=None, vswitch_id=None, security_group_id=None):
        self.file_system_id = file_system_id
        self.access_group_name = access_group_name
        self.network_type = network_type
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.security_group_id = security_group_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.network_type, 'network_type')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['AccessGroupName'] = self.access_group_name
        result['NetworkType'] = self.network_type
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['SecurityGroupId'] = self.security_group_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.access_group_name = map.get('AccessGroupName')
        self.network_type = map.get('NetworkType')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.security_group_id = map.get('SecurityGroupId')
        return self


class CreateMountTargetResponse(TeaModel):
    def __init__(self, request_id=None, mount_target_domain=None):
        self.request_id = request_id
        self.mount_target_domain = mount_target_domain

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.mount_target_domain, 'mount_target_domain')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['MountTargetDomain'] = self.mount_target_domain
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.mount_target_domain = map.get('MountTargetDomain')
        return self


class CreateFileSystemRequest(TeaModel):
    def __init__(self, file_system_type=None, charge_type=None, duration=None, capacity=None, bandwidth=None, storage_type=None, zone_id=None, protocol_type=None, encrypt_type=None, snapshot_id=None, vpc_id=None, vswitch_id=None, description=None, client_token=None, dry_run=None):
        self.file_system_type = file_system_type
        self.charge_type = charge_type
        self.duration = duration
        self.capacity = capacity
        self.bandwidth = bandwidth
        self.storage_type = storage_type
        self.zone_id = zone_id
        self.protocol_type = protocol_type
        self.encrypt_type = encrypt_type
        self.snapshot_id = snapshot_id
        self.vpc_id = vpc_id
        self.vswitch_id = vswitch_id
        self.description = description
        self.client_token = client_token
        self.dry_run = dry_run

    def validate(self):
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.protocol_type, 'protocol_type')

    def to_map(self):
        result = {}
        result['FileSystemType'] = self.file_system_type
        result['ChargeType'] = self.charge_type
        result['Duration'] = self.duration
        result['Capacity'] = self.capacity
        result['Bandwidth'] = self.bandwidth
        result['StorageType'] = self.storage_type
        result['ZoneId'] = self.zone_id
        result['ProtocolType'] = self.protocol_type
        result['EncryptType'] = self.encrypt_type
        result['SnapshotId'] = self.snapshot_id
        result['VpcId'] = self.vpc_id
        result['VSwitchId'] = self.vswitch_id
        result['Description'] = self.description
        result['ClientToken'] = self.client_token
        result['DryRun'] = self.dry_run
        return result

    def from_map(self, map={}):
        self.file_system_type = map.get('FileSystemType')
        self.charge_type = map.get('ChargeType')
        self.duration = map.get('Duration')
        self.capacity = map.get('Capacity')
        self.bandwidth = map.get('Bandwidth')
        self.storage_type = map.get('StorageType')
        self.zone_id = map.get('ZoneId')
        self.protocol_type = map.get('ProtocolType')
        self.encrypt_type = map.get('EncryptType')
        self.snapshot_id = map.get('SnapshotId')
        self.vpc_id = map.get('VpcId')
        self.vswitch_id = map.get('VSwitchId')
        self.description = map.get('Description')
        self.client_token = map.get('ClientToken')
        self.dry_run = map.get('DryRun')
        return self


class CreateFileSystemResponse(TeaModel):
    def __init__(self, request_id=None, file_system_id=None):
        self.request_id = request_id
        self.file_system_id = file_system_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['FileSystemId'] = self.file_system_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.file_system_id = map.get('FileSystemId')
        return self


class CreateAccessRuleRequest(TeaModel):
    def __init__(self, access_group_name=None, source_cidr_ip=None, rwaccess_type=None, user_access_type=None, priority=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.source_cidr_ip = source_cidr_ip
        self.rwaccess_type = rwaccess_type
        self.user_access_type = user_access_type
        self.priority = priority
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.source_cidr_ip, 'source_cidr_ip')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['SourceCidrIp'] = self.source_cidr_ip
        result['RWAccessType'] = self.rwaccess_type
        result['UserAccessType'] = self.user_access_type
        result['Priority'] = self.priority
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.source_cidr_ip = map.get('SourceCidrIp')
        self.rwaccess_type = map.get('RWAccessType')
        self.user_access_type = map.get('UserAccessType')
        self.priority = map.get('Priority')
        self.file_system_type = map.get('FileSystemType')
        return self


class CreateAccessRuleResponse(TeaModel):
    def __init__(self, request_id=None, access_rule_id=None):
        self.request_id = request_id
        self.access_rule_id = access_rule_id

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.access_rule_id, 'access_rule_id')

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['AccessRuleId'] = self.access_rule_id
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.access_rule_id = map.get('AccessRuleId')
        return self


class DescribeAccessRulesRequest(TeaModel):
    def __init__(self, access_group_name=None, access_rule_id=None, page_size=None, page_number=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.access_rule_id = access_rule_id
        self.page_size = page_size
        self.page_number = page_number
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['AccessRuleId'] = self.access_rule_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.access_rule_id = map.get('AccessRuleId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.file_system_type = map.get('FileSystemType')
        return self


class DescribeAccessRulesResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, access_rules=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.access_rules = access_rules

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.access_rules, 'access_rules')
        if self.access_rules:
            self.access_rules.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.access_rules is not None:
            result['AccessRules'] = self.access_rules.to_map()
        else:
            result['AccessRules'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('AccessRules') is not None:
            temp_model = DescribeAccessRulesResponseAccessRules()
            self.access_rules = temp_model.from_map(map['AccessRules'])
        else:
            self.access_rules = None
        return self


class DescribeAccessRulesResponseAccessRulesAccessRule(TeaModel):
    def __init__(self, source_cidr_ip=None, priority=None, access_rule_id=None, rwaccess=None, user_access=None):
        self.source_cidr_ip = source_cidr_ip
        self.priority = priority
        self.access_rule_id = access_rule_id
        self.rwaccess = rwaccess
        self.user_access = user_access

    def validate(self):
        self.validate_required(self.source_cidr_ip, 'source_cidr_ip')
        self.validate_required(self.priority, 'priority')
        self.validate_required(self.access_rule_id, 'access_rule_id')
        self.validate_required(self.rwaccess, 'rwaccess')
        self.validate_required(self.user_access, 'user_access')

    def to_map(self):
        result = {}
        result['SourceCidrIp'] = self.source_cidr_ip
        result['Priority'] = self.priority
        result['AccessRuleId'] = self.access_rule_id
        result['RWAccess'] = self.rwaccess
        result['UserAccess'] = self.user_access
        return result

    def from_map(self, map={}):
        self.source_cidr_ip = map.get('SourceCidrIp')
        self.priority = map.get('Priority')
        self.access_rule_id = map.get('AccessRuleId')
        self.rwaccess = map.get('RWAccess')
        self.user_access = map.get('UserAccess')
        return self


class DescribeAccessRulesResponseAccessRules(TeaModel):
    def __init__(self, access_rule=None):
        self.access_rule = []

    def validate(self):
        self.validate_required(self.access_rule, 'access_rule')
        if self.access_rule:
            for k in self.access_rule:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessRule'] = []
        if self.access_rule is not None:
            for k in self.access_rule:
                result['AccessRule'].append(k.to_map() if k else None)
        else:
            result['AccessRule'] = None
        return result

    def from_map(self, map={}):
        self.access_rule = []
        if map.get('AccessRule') is not None:
            for k in map.get('AccessRule'):
                temp_model = DescribeAccessRulesResponseAccessRulesAccessRule()
                temp_model = temp_model.from_map(k)
                self.access_rule.append(temp_model)
        else:
            self.access_rule = None
        return self


class DescribeAccessGroupsRequest(TeaModel):
    def __init__(self, access_group_name=None, page_size=None, page_number=None, use_utcdate_time=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.page_size = page_size
        self.page_number = page_number
        self.use_utcdate_time = use_utcdate_time
        self.file_system_type = file_system_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['UseUTCDateTime'] = self.use_utcdate_time
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.use_utcdate_time = map.get('UseUTCDateTime')
        self.file_system_type = map.get('FileSystemType')
        return self


class DescribeAccessGroupsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, access_groups=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.access_groups = access_groups

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.access_groups, 'access_groups')
        if self.access_groups:
            self.access_groups.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.access_groups is not None:
            result['AccessGroups'] = self.access_groups.to_map()
        else:
            result['AccessGroups'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('AccessGroups') is not None:
            temp_model = DescribeAccessGroupsResponseAccessGroups()
            self.access_groups = temp_model.from_map(map['AccessGroups'])
        else:
            self.access_groups = None
        return self


class DescribeAccessGroupsResponseAccessGroupsAccessGroup(TeaModel):
    def __init__(self, access_group_name=None, access_group_type=None, rule_count=None, mount_target_count=None, description=None, create_time=None):
        self.access_group_name = access_group_name
        self.access_group_type = access_group_type
        self.rule_count = rule_count
        self.mount_target_count = mount_target_count
        self.description = description
        self.create_time = create_time

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.access_group_type, 'access_group_type')
        self.validate_required(self.rule_count, 'rule_count')
        self.validate_required(self.mount_target_count, 'mount_target_count')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_time, 'create_time')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['AccessGroupType'] = self.access_group_type
        result['RuleCount'] = self.rule_count
        result['MountTargetCount'] = self.mount_target_count
        result['Description'] = self.description
        result['CreateTime'] = self.create_time
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.access_group_type = map.get('AccessGroupType')
        self.rule_count = map.get('RuleCount')
        self.mount_target_count = map.get('MountTargetCount')
        self.description = map.get('Description')
        self.create_time = map.get('CreateTime')
        return self


class DescribeAccessGroupsResponseAccessGroups(TeaModel):
    def __init__(self, access_group=None):
        self.access_group = []

    def validate(self):
        self.validate_required(self.access_group, 'access_group')
        if self.access_group:
            for k in self.access_group:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['AccessGroup'] = []
        if self.access_group is not None:
            for k in self.access_group:
                result['AccessGroup'].append(k.to_map() if k else None)
        else:
            result['AccessGroup'] = None
        return result

    def from_map(self, map={}):
        self.access_group = []
        if map.get('AccessGroup') is not None:
            for k in map.get('AccessGroup'):
                temp_model = DescribeAccessGroupsResponseAccessGroupsAccessGroup()
                temp_model = temp_model.from_map(k)
                self.access_group.append(temp_model)
        else:
            self.access_group = None
        return self


class DeleteMountTargetRequest(TeaModel):
    def __init__(self, file_system_id=None, mount_target_domain=None):
        self.file_system_id = file_system_id
        self.mount_target_domain = mount_target_domain

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.mount_target_domain, 'mount_target_domain')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['MountTargetDomain'] = self.mount_target_domain
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.mount_target_domain = map.get('MountTargetDomain')
        return self


class DeleteMountTargetResponse(TeaModel):
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


class DeleteFileSystemRequest(TeaModel):
    def __init__(self, file_system_id=None):
        self.file_system_id = file_system_id

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        return self


class DeleteFileSystemResponse(TeaModel):
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


class DeleteAccessRuleRequest(TeaModel):
    def __init__(self, access_group_name=None, access_rule_id=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.access_rule_id = access_rule_id
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.access_rule_id, 'access_rule_id')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['AccessRuleId'] = self.access_rule_id
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.access_rule_id = map.get('AccessRuleId')
        self.file_system_type = map.get('FileSystemType')
        return self


class DeleteAccessRuleResponse(TeaModel):
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


class DeleteAccessGroupRequest(TeaModel):
    def __init__(self, access_group_name=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.file_system_type = map.get('FileSystemType')
        return self


class DeleteAccessGroupResponse(TeaModel):
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


class ModifyAccessRuleRequest(TeaModel):
    def __init__(self, access_group_name=None, access_rule_id=None, source_cidr_ip=None, rwaccess_type=None, user_access_type=None, priority=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.access_rule_id = access_rule_id
        self.source_cidr_ip = source_cidr_ip
        self.rwaccess_type = rwaccess_type
        self.user_access_type = user_access_type
        self.priority = priority
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.access_rule_id, 'access_rule_id')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['AccessRuleId'] = self.access_rule_id
        result['SourceCidrIp'] = self.source_cidr_ip
        result['RWAccessType'] = self.rwaccess_type
        result['UserAccessType'] = self.user_access_type
        result['Priority'] = self.priority
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.access_rule_id = map.get('AccessRuleId')
        self.source_cidr_ip = map.get('SourceCidrIp')
        self.rwaccess_type = map.get('RWAccessType')
        self.user_access_type = map.get('UserAccessType')
        self.priority = map.get('Priority')
        self.file_system_type = map.get('FileSystemType')
        return self


class ModifyAccessRuleResponse(TeaModel):
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


class ModifyAccessGroupRequest(TeaModel):
    def __init__(self, access_group_name=None, description=None, file_system_type=None):
        self.access_group_name = access_group_name
        self.description = description
        self.file_system_type = file_system_type

    def validate(self):
        self.validate_required(self.access_group_name, 'access_group_name')

    def to_map(self):
        result = {}
        result['AccessGroupName'] = self.access_group_name
        result['Description'] = self.description
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.access_group_name = map.get('AccessGroupName')
        self.description = map.get('Description')
        self.file_system_type = map.get('FileSystemType')
        return self


class ModifyAccessGroupResponse(TeaModel):
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
    def __init__(self, page_size=None, page_number=None, file_system_type=None):
        self.page_size = page_size
        self.page_number = page_number
        self.file_system_type = file_system_type

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        result['FileSystemType'] = self.file_system_type
        return result

    def from_map(self, map={}):
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        self.file_system_type = map.get('FileSystemType')
        return self


class DescribeRegionsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, regions=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.regions = regions

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.regions, 'regions')
        if self.regions:
            self.regions.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.regions is not None:
            result['Regions'] = self.regions.to_map()
        else:
            result['Regions'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('Regions') is not None:
            temp_model = DescribeRegionsResponseRegions()
            self.regions = temp_model.from_map(map['Regions'])
        else:
            self.regions = None
        return self


class DescribeRegionsResponseRegionsRegion(TeaModel):
    def __init__(self, region_id=None, local_name=None, region_endpoint=None):
        self.region_id = region_id
        self.local_name = local_name
        self.region_endpoint = region_endpoint

    def validate(self):
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.local_name, 'local_name')
        self.validate_required(self.region_endpoint, 'region_endpoint')

    def to_map(self):
        result = {}
        result['RegionId'] = self.region_id
        result['LocalName'] = self.local_name
        result['RegionEndpoint'] = self.region_endpoint
        return result

    def from_map(self, map={}):
        self.region_id = map.get('RegionId')
        self.local_name = map.get('LocalName')
        self.region_endpoint = map.get('RegionEndpoint')
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


class DescribeMountTargetsRequest(TeaModel):
    def __init__(self, file_system_id=None, mount_target_domain=None, page_size=None, page_number=None):
        self.file_system_id = file_system_id
        self.mount_target_domain = mount_target_domain
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['MountTargetDomain'] = self.mount_target_domain
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.mount_target_domain = map.get('MountTargetDomain')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeMountTargetsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, mount_targets=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.mount_targets = mount_targets

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.mount_targets, 'mount_targets')
        if self.mount_targets:
            self.mount_targets.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.mount_targets is not None:
            result['MountTargets'] = self.mount_targets.to_map()
        else:
            result['MountTargets'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('MountTargets') is not None:
            temp_model = DescribeMountTargetsResponseMountTargets()
            self.mount_targets = temp_model.from_map(map['MountTargets'])
        else:
            self.mount_targets = None
        return self


class DescribeMountTargetsResponseMountTargetsMountTarget(TeaModel):
    def __init__(self, mount_target_domain=None, network_type=None, vpc_id=None, vsw_id=None, access_group=None, status=None):
        self.mount_target_domain = mount_target_domain
        self.network_type = network_type
        self.vpc_id = vpc_id
        self.vsw_id = vsw_id
        self.access_group = access_group
        self.status = status

    def validate(self):
        self.validate_required(self.mount_target_domain, 'mount_target_domain')
        self.validate_required(self.network_type, 'network_type')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vsw_id, 'vsw_id')
        self.validate_required(self.access_group, 'access_group')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['MountTargetDomain'] = self.mount_target_domain
        result['NetworkType'] = self.network_type
        result['VpcId'] = self.vpc_id
        result['VswId'] = self.vsw_id
        result['AccessGroup'] = self.access_group
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.mount_target_domain = map.get('MountTargetDomain')
        self.network_type = map.get('NetworkType')
        self.vpc_id = map.get('VpcId')
        self.vsw_id = map.get('VswId')
        self.access_group = map.get('AccessGroup')
        self.status = map.get('Status')
        return self


class DescribeMountTargetsResponseMountTargets(TeaModel):
    def __init__(self, mount_target=None):
        self.mount_target = []

    def validate(self):
        self.validate_required(self.mount_target, 'mount_target')
        if self.mount_target:
            for k in self.mount_target:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MountTarget'] = []
        if self.mount_target is not None:
            for k in self.mount_target:
                result['MountTarget'].append(k.to_map() if k else None)
        else:
            result['MountTarget'] = None
        return result

    def from_map(self, map={}):
        self.mount_target = []
        if map.get('MountTarget') is not None:
            for k in map.get('MountTarget'):
                temp_model = DescribeMountTargetsResponseMountTargetsMountTarget()
                temp_model = temp_model.from_map(k)
                self.mount_target.append(temp_model)
        else:
            self.mount_target = None
        return self


class DescribeFileSystemsRequest(TeaModel):
    def __init__(self, file_system_id=None, file_system_type=None, vpc_id=None, page_size=None, page_number=None):
        self.file_system_id = file_system_id
        self.file_system_type = file_system_type
        self.vpc_id = vpc_id
        self.page_size = page_size
        self.page_number = page_number

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['FileSystemType'] = self.file_system_type
        result['VpcId'] = self.vpc_id
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.file_system_type = map.get('FileSystemType')
        self.vpc_id = map.get('VpcId')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        return self


class DescribeFileSystemsResponse(TeaModel):
    def __init__(self, request_id=None, total_count=None, page_size=None, page_number=None, file_systems=None):
        self.request_id = request_id
        self.total_count = total_count
        self.page_size = page_size
        self.page_number = page_number
        self.file_systems = file_systems

    def validate(self):
        self.validate_required(self.request_id, 'request_id')
        self.validate_required(self.total_count, 'total_count')
        self.validate_required(self.page_size, 'page_size')
        self.validate_required(self.page_number, 'page_number')
        self.validate_required(self.file_systems, 'file_systems')
        if self.file_systems:
            self.file_systems.validate()

    def to_map(self):
        result = {}
        result['RequestId'] = self.request_id
        result['TotalCount'] = self.total_count
        result['PageSize'] = self.page_size
        result['PageNumber'] = self.page_number
        if self.file_systems is not None:
            result['FileSystems'] = self.file_systems.to_map()
        else:
            result['FileSystems'] = None
        return result

    def from_map(self, map={}):
        self.request_id = map.get('RequestId')
        self.total_count = map.get('TotalCount')
        self.page_size = map.get('PageSize')
        self.page_number = map.get('PageNumber')
        if map.get('FileSystems') is not None:
            temp_model = DescribeFileSystemsResponseFileSystems()
            self.file_systems = temp_model.from_map(map['FileSystems'])
        else:
            self.file_systems = None
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget(TeaModel):
    def __init__(self, mount_target_domain=None, network_type=None, vpc_id=None, vsw_id=None, access_group_name=None, status=None):
        self.mount_target_domain = mount_target_domain
        self.network_type = network_type
        self.vpc_id = vpc_id
        self.vsw_id = vsw_id
        self.access_group_name = access_group_name
        self.status = status

    def validate(self):
        self.validate_required(self.mount_target_domain, 'mount_target_domain')
        self.validate_required(self.network_type, 'network_type')
        self.validate_required(self.vpc_id, 'vpc_id')
        self.validate_required(self.vsw_id, 'vsw_id')
        self.validate_required(self.access_group_name, 'access_group_name')
        self.validate_required(self.status, 'status')

    def to_map(self):
        result = {}
        result['MountTargetDomain'] = self.mount_target_domain
        result['NetworkType'] = self.network_type
        result['VpcId'] = self.vpc_id
        result['VswId'] = self.vsw_id
        result['AccessGroupName'] = self.access_group_name
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.mount_target_domain = map.get('MountTargetDomain')
        self.network_type = map.get('NetworkType')
        self.vpc_id = map.get('VpcId')
        self.vsw_id = map.get('VswId')
        self.access_group_name = map.get('AccessGroupName')
        self.status = map.get('Status')
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemMountTargets(TeaModel):
    def __init__(self, mount_target=None):
        self.mount_target = []

    def validate(self):
        self.validate_required(self.mount_target, 'mount_target')
        if self.mount_target:
            for k in self.mount_target:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['MountTarget'] = []
        if self.mount_target is not None:
            for k in self.mount_target:
                result['MountTarget'].append(k.to_map() if k else None)
        else:
            result['MountTarget'] = None
        return result

    def from_map(self, map={}):
        self.mount_target = []
        if map.get('MountTarget') is not None:
            for k in map.get('MountTarget'):
                temp_model = DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget()
                temp_model = temp_model.from_map(k)
                self.mount_target.append(temp_model)
        else:
            self.mount_target = None
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage(TeaModel):
    def __init__(self, package_id=None, package_type=None, size=None, start_time=None, expired_time=None):
        self.package_id = package_id
        self.package_type = package_type
        self.size = size
        self.start_time = start_time
        self.expired_time = expired_time

    def validate(self):
        self.validate_required(self.package_id, 'package_id')
        self.validate_required(self.package_type, 'package_type')
        self.validate_required(self.size, 'size')
        self.validate_required(self.start_time, 'start_time')
        self.validate_required(self.expired_time, 'expired_time')

    def to_map(self):
        result = {}
        result['PackageId'] = self.package_id
        result['PackageType'] = self.package_type
        result['Size'] = self.size
        result['StartTime'] = self.start_time
        result['ExpiredTime'] = self.expired_time
        return result

    def from_map(self, map={}):
        self.package_id = map.get('PackageId')
        self.package_type = map.get('PackageType')
        self.size = map.get('Size')
        self.start_time = map.get('StartTime')
        self.expired_time = map.get('ExpiredTime')
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemPackages(TeaModel):
    def __init__(self, package=None):
        self.package = []

    def validate(self):
        self.validate_required(self.package, 'package')
        if self.package:
            for k in self.package:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['Package'] = []
        if self.package is not None:
            for k in self.package:
                result['Package'].append(k.to_map() if k else None)
        else:
            result['Package'] = None
        return result

    def from_map(self, map={}):
        self.package = []
        if map.get('Package') is not None:
            for k in map.get('Package'):
                temp_model = DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage()
                temp_model = temp_model.from_map(k)
                self.package.append(temp_model)
        else:
            self.package = None
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemLdap(TeaModel):
    def __init__(self, bind_dn=None, _uri=None, search_base=None):
        self.bind_dn = bind_dn
        self._uri = _uri
        self.search_base = search_base

    def validate(self):
        self.validate_required(self.bind_dn, 'bind_dn')
        self.validate_required(self._uri, '_uri')
        self.validate_required(self.search_base, 'search_base')

    def to_map(self):
        result = {}
        result['BindDN'] = self.bind_dn
        result['URI'] = self._uri
        result['SearchBase'] = self.search_base
        return result

    def from_map(self, map={}):
        self.bind_dn = map.get('BindDN')
        self._uri = map.get('URI')
        self.search_base = map.get('SearchBase')
        return self


class DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures(TeaModel):
    def __init__(self, supported_feature=None):
        self.supported_feature = []

    def validate(self):
        self.validate_required(self.supported_feature, 'supported_feature')

    def to_map(self):
        result = {}
        result['SupportedFeature'] = []
        if self.supported_feature is not None:
            for k in self.supported_feature:
                result['SupportedFeature'].append(k)
        else:
            result['SupportedFeature'] = None
        return result

    def from_map(self, map={}):
        self.supported_feature = []
        if map.get('SupportedFeature') is not None:
            for k in map.get('SupportedFeature'):
                self.supported_feature.append(k)
        else:
            self.supported_feature = None
        return self


class DescribeFileSystemsResponseFileSystemsFileSystem(TeaModel):
    def __init__(self, file_system_id=None, description=None, create_time=None, expired_time=None, region_id=None, zone_id=None, protocol_type=None, storage_type=None, file_system_type=None, encrypt_type=None, metered_size=None, metered_iasize=None, bandwidth=None, capacity=None, auto_snapshot_policy_id=None, status=None, charge_type=None, mount_target_count_limit=None, nas_namespace_id=None, kmskey_id=None, version=None, mount_targets=None, packages=None, ldap=None, supported_features=None):
        self.file_system_id = file_system_id
        self.description = description
        self.create_time = create_time
        self.expired_time = expired_time
        self.region_id = region_id
        self.zone_id = zone_id
        self.protocol_type = protocol_type
        self.storage_type = storage_type
        self.file_system_type = file_system_type
        self.encrypt_type = encrypt_type
        self.metered_size = metered_size
        self.metered_iasize = metered_iasize
        self.bandwidth = bandwidth
        self.capacity = capacity
        self.auto_snapshot_policy_id = auto_snapshot_policy_id
        self.status = status
        self.charge_type = charge_type
        self.mount_target_count_limit = mount_target_count_limit
        self.nas_namespace_id = nas_namespace_id
        self.kmskey_id = kmskey_id
        self.version = version
        self.mount_targets = mount_targets
        self.packages = packages
        self.ldap = ldap
        self.supported_features = supported_features

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.description, 'description')
        self.validate_required(self.create_time, 'create_time')
        self.validate_required(self.expired_time, 'expired_time')
        self.validate_required(self.region_id, 'region_id')
        self.validate_required(self.zone_id, 'zone_id')
        self.validate_required(self.protocol_type, 'protocol_type')
        self.validate_required(self.storage_type, 'storage_type')
        self.validate_required(self.file_system_type, 'file_system_type')
        self.validate_required(self.encrypt_type, 'encrypt_type')
        self.validate_required(self.metered_size, 'metered_size')
        self.validate_required(self.metered_iasize, 'metered_iasize')
        self.validate_required(self.bandwidth, 'bandwidth')
        self.validate_required(self.capacity, 'capacity')
        self.validate_required(self.auto_snapshot_policy_id, 'auto_snapshot_policy_id')
        self.validate_required(self.status, 'status')
        self.validate_required(self.charge_type, 'charge_type')
        self.validate_required(self.mount_target_count_limit, 'mount_target_count_limit')
        self.validate_required(self.nas_namespace_id, 'nas_namespace_id')
        self.validate_required(self.kmskey_id, 'kmskey_id')
        self.validate_required(self.version, 'version')
        self.validate_required(self.mount_targets, 'mount_targets')
        if self.mount_targets:
            self.mount_targets.validate()
        self.validate_required(self.packages, 'packages')
        if self.packages:
            self.packages.validate()
        self.validate_required(self.ldap, 'ldap')
        if self.ldap:
            self.ldap.validate()
        self.validate_required(self.supported_features, 'supported_features')
        if self.supported_features:
            self.supported_features.validate()

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Description'] = self.description
        result['CreateTime'] = self.create_time
        result['ExpiredTime'] = self.expired_time
        result['RegionId'] = self.region_id
        result['ZoneId'] = self.zone_id
        result['ProtocolType'] = self.protocol_type
        result['StorageType'] = self.storage_type
        result['FileSystemType'] = self.file_system_type
        result['EncryptType'] = self.encrypt_type
        result['MeteredSize'] = self.metered_size
        result['MeteredIASize'] = self.metered_iasize
        result['Bandwidth'] = self.bandwidth
        result['Capacity'] = self.capacity
        result['AutoSnapshotPolicyId'] = self.auto_snapshot_policy_id
        result['Status'] = self.status
        result['ChargeType'] = self.charge_type
        result['MountTargetCountLimit'] = self.mount_target_count_limit
        result['NasNamespaceId'] = self.nas_namespace_id
        result['KMSKeyId'] = self.kmskey_id
        result['Version'] = self.version
        if self.mount_targets is not None:
            result['MountTargets'] = self.mount_targets.to_map()
        else:
            result['MountTargets'] = None
        if self.packages is not None:
            result['Packages'] = self.packages.to_map()
        else:
            result['Packages'] = None
        if self.ldap is not None:
            result['Ldap'] = self.ldap.to_map()
        else:
            result['Ldap'] = None
        if self.supported_features is not None:
            result['SupportedFeatures'] = self.supported_features.to_map()
        else:
            result['SupportedFeatures'] = None
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.description = map.get('Description')
        self.create_time = map.get('CreateTime')
        self.expired_time = map.get('ExpiredTime')
        self.region_id = map.get('RegionId')
        self.zone_id = map.get('ZoneId')
        self.protocol_type = map.get('ProtocolType')
        self.storage_type = map.get('StorageType')
        self.file_system_type = map.get('FileSystemType')
        self.encrypt_type = map.get('EncryptType')
        self.metered_size = map.get('MeteredSize')
        self.metered_iasize = map.get('MeteredIASize')
        self.bandwidth = map.get('Bandwidth')
        self.capacity = map.get('Capacity')
        self.auto_snapshot_policy_id = map.get('AutoSnapshotPolicyId')
        self.status = map.get('Status')
        self.charge_type = map.get('ChargeType')
        self.mount_target_count_limit = map.get('MountTargetCountLimit')
        self.nas_namespace_id = map.get('NasNamespaceId')
        self.kmskey_id = map.get('KMSKeyId')
        self.version = map.get('Version')
        if map.get('MountTargets') is not None:
            temp_model = DescribeFileSystemsResponseFileSystemsFileSystemMountTargets()
            self.mount_targets = temp_model.from_map(map['MountTargets'])
        else:
            self.mount_targets = None
        if map.get('Packages') is not None:
            temp_model = DescribeFileSystemsResponseFileSystemsFileSystemPackages()
            self.packages = temp_model.from_map(map['Packages'])
        else:
            self.packages = None
        if map.get('Ldap') is not None:
            temp_model = DescribeFileSystemsResponseFileSystemsFileSystemLdap()
            self.ldap = temp_model.from_map(map['Ldap'])
        else:
            self.ldap = None
        if map.get('SupportedFeatures') is not None:
            temp_model = DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures()
            self.supported_features = temp_model.from_map(map['SupportedFeatures'])
        else:
            self.supported_features = None
        return self


class DescribeFileSystemsResponseFileSystems(TeaModel):
    def __init__(self, file_system=None):
        self.file_system = []

    def validate(self):
        self.validate_required(self.file_system, 'file_system')
        if self.file_system:
            for k in self.file_system:
                if k :
                    k.validate()

    def to_map(self):
        result = {}
        result['FileSystem'] = []
        if self.file_system is not None:
            for k in self.file_system:
                result['FileSystem'].append(k.to_map() if k else None)
        else:
            result['FileSystem'] = None
        return result

    def from_map(self, map={}):
        self.file_system = []
        if map.get('FileSystem') is not None:
            for k in map.get('FileSystem'):
                temp_model = DescribeFileSystemsResponseFileSystemsFileSystem()
                temp_model = temp_model.from_map(k)
                self.file_system.append(temp_model)
        else:
            self.file_system = None
        return self


class ModifyMountTargetRequest(TeaModel):
    def __init__(self, file_system_id=None, mount_target_domain=None, access_group_name=None, status=None):
        self.file_system_id = file_system_id
        self.mount_target_domain = mount_target_domain
        self.access_group_name = access_group_name
        self.status = status

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')
        self.validate_required(self.mount_target_domain, 'mount_target_domain')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['MountTargetDomain'] = self.mount_target_domain
        result['AccessGroupName'] = self.access_group_name
        result['Status'] = self.status
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.mount_target_domain = map.get('MountTargetDomain')
        self.access_group_name = map.get('AccessGroupName')
        self.status = map.get('Status')
        return self


class ModifyMountTargetResponse(TeaModel):
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


class ModifyFileSystemRequest(TeaModel):
    def __init__(self, file_system_id=None, description=None):
        self.file_system_id = file_system_id
        self.description = description

    def validate(self):
        self.validate_required(self.file_system_id, 'file_system_id')

    def to_map(self):
        result = {}
        result['FileSystemId'] = self.file_system_id
        result['Description'] = self.description
        return result

    def from_map(self, map={}):
        self.file_system_id = map.get('FileSystemId')
        self.description = map.get('Description')
        return self


class ModifyFileSystemResponse(TeaModel):
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

// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class DeleteLifecyclePolicyRequest extends $tea.Model {
  fileSystemId: string;
  lifecyclePolicyName: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      lifecyclePolicyName: 'LifecyclePolicyName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      lifecyclePolicyName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteLifecyclePolicyResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeFileSystemRequest extends $tea.Model {
  fileSystemId: string;
  capacity: number;
  dryRun?: boolean;
  clientToken?: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      capacity: 'Capacity',
      dryRun: 'DryRun',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      capacity: 'number',
      dryRun: 'boolean',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpgradeFileSystemResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLifecyclePolicyRequest extends $tea.Model {
  fileSystemId: string;
  lifecyclePolicyName: string;
  path: string;
  lifecycleRuleName: string;
  storageType: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      lifecyclePolicyName: 'LifecyclePolicyName',
      path: 'Path',
      lifecycleRuleName: 'LifecycleRuleName',
      storageType: 'StorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      lifecyclePolicyName: 'string',
      path: 'string',
      lifecycleRuleName: 'string',
      storageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLifecyclePolicyResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLifecyclePolicyRequest extends $tea.Model {
  fileSystemId: string;
  lifecyclePolicyName: string;
  path: string;
  lifecycleRuleName: string;
  storageType: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      lifecyclePolicyName: 'LifecyclePolicyName',
      path: 'Path',
      lifecycleRuleName: 'LifecycleRuleName',
      storageType: 'StorageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      lifecyclePolicyName: 'string',
      path: 'string',
      lifecycleRuleName: 'string',
      storageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLifecyclePolicyResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLifecyclePoliciesRequest extends $tea.Model {
  fileSystemId?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLifecyclePoliciesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  lifecyclePolicies: DescribeLifecyclePoliciesResponseLifecyclePolicies[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      lifecyclePolicies: 'LifecyclePolicies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      lifecyclePolicies: { 'type': 'array', 'itemType': DescribeLifecyclePoliciesResponseLifecyclePolicies },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDirQuotasRequest extends $tea.Model {
  fileSystemId: string;
  path?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      path: 'Path',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      path: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDirQuotasResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  dirQuotaInfos: DescribeDirQuotasResponseDirQuotaInfos[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      dirQuotaInfos: 'DirQuotaInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      dirQuotaInfos: { 'type': 'array', 'itemType': DescribeDirQuotasResponseDirQuotaInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDirQuotaRequest extends $tea.Model {
  fileSystemId: string;
  path: string;
  quotaType: string;
  userType: string;
  userId?: string;
  sizeLimit?: number;
  fileCountLimit?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      path: 'Path',
      quotaType: 'QuotaType',
      userType: 'UserType',
      userId: 'UserId',
      sizeLimit: 'SizeLimit',
      fileCountLimit: 'FileCountLimit',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      path: 'string',
      quotaType: 'string',
      userType: 'string',
      userId: 'string',
      sizeLimit: 'number',
      fileCountLimit: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDirQuotaResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelDirQuotaRequest extends $tea.Model {
  fileSystemId: string;
  path: string;
  userType: string;
  userId?: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      path: 'Path',
      userType: 'UserType',
      userId: 'UserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      path: 'string',
      userType: 'string',
      userId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelDirQuotaResponse extends $tea.Model {
  requestId: string;
  success: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      success: 'Success',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      success: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStoragePackagesRequest extends $tea.Model {
  regionId: string;
  pageSize?: number;
  useUTCDateTime?: boolean;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageSize: 'PageSize',
      useUTCDateTime: 'UseUTCDateTime',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageSize: 'number',
      useUTCDateTime: 'boolean',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStoragePackagesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  packages: DescribeStoragePackagesResponsePackages;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      packages: 'Packages',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      packages: DescribeStoragePackagesResponsePackages,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemStatisticsRequest extends $tea.Model {
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemStatisticsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  fileSystemStatistics: DescribeFileSystemStatisticsResponseFileSystemStatistics;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      fileSystemStatistics: 'FileSystemStatistics',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      fileSystemStatistics: DescribeFileSystemStatisticsResponseFileSystemStatistics,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogAnalysisRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogAnalysisResponse extends $tea.Model {
  requestId: string;
  code: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  analyses: DescribeLogAnalysisResponseAnalyses;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      code: 'Code',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      analyses: 'Analyses',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      code: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      analyses: DescribeLogAnalysisResponseAnalyses,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountedClientsRequest extends $tea.Model {
  regionId: string;
  pageSize?: number;
  fileSystemId: string;
  clientIP?: string;
  mountTargetDomain: string;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      pageSize: 'PageSize',
      fileSystemId: 'FileSystemId',
      clientIP: 'ClientIP',
      mountTargetDomain: 'MountTargetDomain',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      pageSize: 'number',
      fileSystemId: 'string',
      clientIP: 'string',
      mountTargetDomain: 'string',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountedClientsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  clients: DescribeMountedClientsResponseClients;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      clients: 'Clients',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      clients: DescribeMountedClientsResponseClients,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotTasksRequest extends $tea.Model {
  fileSystemIds?: string;
  autoSnapshotPolicyIds?: string;
  fileSystemType: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemIds: 'FileSystemIds',
      autoSnapshotPolicyIds: 'AutoSnapshotPolicyIds',
      fileSystemType: 'FileSystemType',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemIds: 'string',
      autoSnapshotPolicyIds: 'string',
      fileSystemType: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotTasksResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  autoSnapshotTasks: DescribeAutoSnapshotTasksResponseAutoSnapshotTasks;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      autoSnapshotTasks: 'AutoSnapshotTasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      autoSnapshotTasks: DescribeAutoSnapshotTasksResponseAutoSnapshotTasks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClientFromBlackListRequest extends $tea.Model {
  regionId: string;
  fileSystemId: string;
  clientIP: string;
  clientToken: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      fileSystemId: 'FileSystemId',
      clientIP: 'ClientIP',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      fileSystemId: 'string',
      clientIP: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveClientFromBlackListResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBlackListClientsRequest extends $tea.Model {
  regionId: string;
  fileSystemId: string;
  clientIP?: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      fileSystemId: 'FileSystemId',
      clientIP: 'ClientIP',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      fileSystemId: 'string',
      clientIP: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBlackListClientsResponse extends $tea.Model {
  requestId: string;
  clients: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      clients: 'Clients',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      clients: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddClientToBlackListRequest extends $tea.Model {
  regionId: string;
  fileSystemId: string;
  clientIP: string;
  clientToken: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      fileSystemId: 'FileSystemId',
      clientIP: 'ClientIP',
      clientToken: 'ClientToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      fileSystemId: 'string',
      clientIP: 'string',
      clientToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddClientToBlackListResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLDAPConfigRequest extends $tea.Model {
  fileSystemId: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLDAPConfigResponse extends $tea.Model {
  requestId: string;
  ldap: DescribeLDAPConfigResponseLdap;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ldap: 'Ldap',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ldap: DescribeLDAPConfigResponseLdap,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLDAPConfigRequest extends $tea.Model {
  fileSystemId: string;
  URI: string;
  bindDN?: string;
  searchBase: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      URI: 'URI',
      bindDN: 'BindDN',
      searchBase: 'SearchBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      URI: 'string',
      bindDN: 'string',
      searchBase: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyLDAPConfigResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLDAPConfigRequest extends $tea.Model {
  fileSystemId: string;
  URI: string;
  bindDN?: string;
  searchBase: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      URI: 'URI',
      bindDN: 'BindDN',
      searchBase: 'SearchBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      URI: 'string',
      bindDN: 'string',
      searchBase: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateLDAPConfigResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteLDAPConfigRequest extends $tea.Model {
  fileSystemId: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteLDAPConfigResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsRequest extends $tea.Model {
  fileSystemId?: string;
  pageSize?: number;
  pageNumber?: number;
  tag?: DescribeTagsRequestTag[];
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      tag: { 'type': 'array', 'itemType': DescribeTagsRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  tags: DescribeTagsResponseTags;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      tags: DescribeTagsResponseTags,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsRequest extends $tea.Model {
  fileSystemId: string;
  tag: RemoveTagsRequestTag[];
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      tag: { 'type': 'array', 'itemType': RemoveTagsRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsRequest extends $tea.Model {
  fileSystemId: string;
  tag: AddTagsRequestTag[];
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      tag: { 'type': 'array', 'itemType': AddTagsRequestTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetFileSystemRequest extends $tea.Model {
  fileSystemId: string;
  snapshotId: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      snapshotId: 'SnapshotId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      snapshotId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ResetFileSystemResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAutoSnapshotPolicyRequest extends $tea.Model {
  repeatWeekdays: string;
  timePoints: string;
  retentionDays?: number;
  autoSnapshotPolicyName?: string;
  fileSystemType: string;
  static names(): { [key: string]: string } {
    return {
      repeatWeekdays: 'RepeatWeekdays',
      timePoints: 'TimePoints',
      retentionDays: 'RetentionDays',
      autoSnapshotPolicyName: 'AutoSnapshotPolicyName',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      repeatWeekdays: 'string',
      timePoints: 'string',
      retentionDays: 'number',
      autoSnapshotPolicyName: 'string',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAutoSnapshotPolicyResponse extends $tea.Model {
  requestId: string;
  autoSnapshotPolicyId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      autoSnapshotPolicyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotPoliciesRequest extends $tea.Model {
  autoSnapshotPolicyId?: string;
  pageSize?: number;
  pageNumber?: number;
  fileSystemType: string;
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicyId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotPoliciesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  autoSnapshotPolicies: DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      autoSnapshotPolicies: 'AutoSnapshotPolicies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      autoSnapshotPolicies: DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelAutoSnapshotPolicyRequest extends $tea.Model {
  fileSystemIds: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemIds: 'FileSystemIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CancelAutoSnapshotPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyAutoSnapshotPolicyRequest extends $tea.Model {
  autoSnapshotPolicyId: string;
  fileSystemIds: string;
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
      fileSystemIds: 'FileSystemIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicyId: 'string',
      fileSystemIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ApplyAutoSnapshotPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAutoSnapshotPolicyRequest extends $tea.Model {
  autoSnapshotPolicyId: string;
  autoSnapshotPolicyName?: string;
  repeatWeekdays?: string;
  retentionDays?: number;
  timePoints?: string;
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
      autoSnapshotPolicyName: 'AutoSnapshotPolicyName',
      repeatWeekdays: 'RepeatWeekdays',
      retentionDays: 'RetentionDays',
      timePoints: 'TimePoints',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicyId: 'string',
      autoSnapshotPolicyName: 'string',
      repeatWeekdays: 'string',
      retentionDays: 'number',
      timePoints: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAutoSnapshotPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAutoSnapshotPolicyRequest extends $tea.Model {
  autoSnapshotPolicyId: string;
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAutoSnapshotPolicyResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSnapshotRequest extends $tea.Model {
  snapshotId: string;
  static names(): { [key: string]: string } {
    return {
      snapshotId: 'SnapshotId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshotId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSnapshotResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSnapshotRequest extends $tea.Model {
  fileSystemId: string;
  snapshotName?: string;
  description?: string;
  retentionDays?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      snapshotName: 'SnapshotName',
      description: 'Description',
      retentionDays: 'RetentionDays',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      snapshotName: 'string',
      description: 'string',
      retentionDays: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateSnapshotResponse extends $tea.Model {
  requestId: string;
  snapshotId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      snapshotId: 'SnapshotId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      snapshotId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnapshotsRequest extends $tea.Model {
  fileSystemType: string;
  fileSystemId?: string;
  snapshotIds?: string;
  snapshotName?: string;
  snapshotType?: string;
  status?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemType: 'FileSystemType',
      fileSystemId: 'FileSystemId',
      snapshotIds: 'SnapshotIds',
      snapshotName: 'SnapshotName',
      snapshotType: 'SnapshotType',
      status: 'Status',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemType: 'string',
      fileSystemId: 'string',
      snapshotIds: 'string',
      snapshotName: 'string',
      snapshotType: 'string',
      status: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnapshotsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  snapshots: DescribeSnapshotsResponseSnapshots;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      snapshots: DescribeSnapshotsResponseSnapshots,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesRequest extends $tea.Model {
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponse extends $tea.Model {
  requestId: string;
  zones: DescribeZonesResponseZones;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      zones: 'Zones',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      zones: DescribeZonesResponseZones,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessGroupRequest extends $tea.Model {
  accessGroupName: string;
  accessGroupType: string;
  description?: string;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      accessGroupType: 'AccessGroupType',
      description: 'Description',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      accessGroupType: 'string',
      description: 'string',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessGroupResponse extends $tea.Model {
  requestId: string;
  accessGroupName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accessGroupName: 'AccessGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accessGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMountTargetRequest extends $tea.Model {
  fileSystemId: string;
  accessGroupName: string;
  networkType: string;
  vpcId?: string;
  VSwitchId?: string;
  securityGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      accessGroupName: 'AccessGroupName',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      securityGroupId: 'SecurityGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      accessGroupName: 'string',
      networkType: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      securityGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateMountTargetResponse extends $tea.Model {
  requestId: string;
  mountTargetDomain: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mountTargetDomain: 'MountTargetDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mountTargetDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateFileSystemRequest extends $tea.Model {
  fileSystemType?: string;
  chargeType?: string;
  duration?: number;
  capacity?: number;
  bandwidth?: number;
  storageType: string;
  zoneId?: string;
  protocolType: string;
  encryptType?: number;
  snapshotId?: string;
  vpcId?: string;
  VSwitchId?: string;
  description?: string;
  clientToken?: string;
  dryRun?: boolean;
  static names(): { [key: string]: string } {
    return {
      fileSystemType: 'FileSystemType',
      chargeType: 'ChargeType',
      duration: 'Duration',
      capacity: 'Capacity',
      bandwidth: 'Bandwidth',
      storageType: 'StorageType',
      zoneId: 'ZoneId',
      protocolType: 'ProtocolType',
      encryptType: 'EncryptType',
      snapshotId: 'SnapshotId',
      vpcId: 'VpcId',
      VSwitchId: 'VSwitchId',
      description: 'Description',
      clientToken: 'ClientToken',
      dryRun: 'DryRun',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemType: 'string',
      chargeType: 'string',
      duration: 'number',
      capacity: 'number',
      bandwidth: 'number',
      storageType: 'string',
      zoneId: 'string',
      protocolType: 'string',
      encryptType: 'number',
      snapshotId: 'string',
      vpcId: 'string',
      VSwitchId: 'string',
      description: 'string',
      clientToken: 'string',
      dryRun: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateFileSystemResponse extends $tea.Model {
  requestId: string;
  fileSystemId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      fileSystemId: 'FileSystemId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      fileSystemId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessRuleRequest extends $tea.Model {
  accessGroupName: string;
  sourceCidrIp: string;
  RWAccessType?: string;
  userAccessType?: string;
  priority?: number;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      sourceCidrIp: 'SourceCidrIp',
      RWAccessType: 'RWAccessType',
      userAccessType: 'UserAccessType',
      priority: 'Priority',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      sourceCidrIp: 'string',
      RWAccessType: 'string',
      userAccessType: 'string',
      priority: 'number',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAccessRuleResponse extends $tea.Model {
  requestId: string;
  accessRuleId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      accessRuleId: 'AccessRuleId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      accessRuleId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessRulesRequest extends $tea.Model {
  accessGroupName: string;
  accessRuleId?: string;
  pageSize?: number;
  pageNumber?: number;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      accessRuleId: 'AccessRuleId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      accessRuleId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessRulesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  accessRules: DescribeAccessRulesResponseAccessRules;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      accessRules: 'AccessRules',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      accessRules: DescribeAccessRulesResponseAccessRules,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessGroupsRequest extends $tea.Model {
  accessGroupName?: string;
  pageSize?: number;
  pageNumber?: number;
  useUTCDateTime?: boolean;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      useUTCDateTime: 'UseUTCDateTime',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      useUTCDateTime: 'boolean',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessGroupsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  accessGroups: DescribeAccessGroupsResponseAccessGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      accessGroups: 'AccessGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      accessGroups: DescribeAccessGroupsResponseAccessGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMountTargetRequest extends $tea.Model {
  fileSystemId: string;
  mountTargetDomain: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      mountTargetDomain: 'MountTargetDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      mountTargetDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMountTargetResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFileSystemRequest extends $tea.Model {
  fileSystemId: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteFileSystemResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessRuleRequest extends $tea.Model {
  accessGroupName: string;
  accessRuleId: string;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      accessRuleId: 'AccessRuleId',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      accessRuleId: 'string',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessRuleResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessGroupRequest extends $tea.Model {
  accessGroupName: string;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAccessGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccessRuleRequest extends $tea.Model {
  accessGroupName: string;
  accessRuleId: string;
  sourceCidrIp?: string;
  RWAccessType?: string;
  userAccessType?: string;
  priority?: number;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      accessRuleId: 'AccessRuleId',
      sourceCidrIp: 'SourceCidrIp',
      RWAccessType: 'RWAccessType',
      userAccessType: 'UserAccessType',
      priority: 'Priority',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      accessRuleId: 'string',
      sourceCidrIp: 'string',
      RWAccessType: 'string',
      userAccessType: 'string',
      priority: 'number',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccessRuleResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccessGroupRequest extends $tea.Model {
  accessGroupName: string;
  description?: string;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      description: 'Description',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      description: 'string',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyAccessGroupResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsRequest extends $tea.Model {
  pageSize?: number;
  pageNumber?: number;
  fileSystemType?: string;
  static names(): { [key: string]: string } {
    return {
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      fileSystemType: 'FileSystemType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageSize: 'number',
      pageNumber: 'number',
      fileSystemType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  regions: DescribeRegionsResponseRegions;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      regions: 'Regions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      regions: DescribeRegionsResponseRegions,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountTargetsRequest extends $tea.Model {
  fileSystemId: string;
  mountTargetDomain?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      mountTargetDomain: 'MountTargetDomain',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      mountTargetDomain: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountTargetsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  mountTargets: DescribeMountTargetsResponseMountTargets;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      mountTargets: 'MountTargets',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      mountTargets: DescribeMountTargetsResponseMountTargets,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsRequest extends $tea.Model {
  fileSystemId?: string;
  fileSystemType?: string;
  vpcId?: string;
  pageSize?: number;
  pageNumber?: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      fileSystemType: 'FileSystemType',
      vpcId: 'VpcId',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      fileSystemType: 'string',
      vpcId: 'string',
      pageSize: 'number',
      pageNumber: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageSize: number;
  pageNumber: number;
  fileSystems: DescribeFileSystemsResponseFileSystems;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      fileSystems: 'FileSystems',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      fileSystems: DescribeFileSystemsResponseFileSystems,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMountTargetRequest extends $tea.Model {
  fileSystemId: string;
  mountTargetDomain: string;
  accessGroupName?: string;
  status?: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      mountTargetDomain: 'MountTargetDomain',
      accessGroupName: 'AccessGroupName',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      mountTargetDomain: 'string',
      accessGroupName: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyMountTargetResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyFileSystemRequest extends $tea.Model {
  fileSystemId: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyFileSystemResponse extends $tea.Model {
  requestId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLifecyclePoliciesResponseLifecyclePolicies extends $tea.Model {
  fileSystemId: string;
  lifecyclePolicyName: string;
  path: string;
  lifecycleRuleName: string;
  storageType: string;
  createTime: string;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      lifecyclePolicyName: 'LifecyclePolicyName',
      path: 'Path',
      lifecycleRuleName: 'LifecycleRuleName',
      storageType: 'StorageType',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      lifecyclePolicyName: 'string',
      path: 'string',
      lifecycleRuleName: 'string',
      storageType: 'string',
      createTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos extends $tea.Model {
  userType: string;
  userId: string;
  quotaType: string;
  sizeLimit: number;
  sizeReal: number;
  fileCountLimit: number;
  fileCountReal: number;
  static names(): { [key: string]: string } {
    return {
      userType: 'UserType',
      userId: 'UserId',
      quotaType: 'QuotaType',
      sizeLimit: 'SizeLimit',
      sizeReal: 'SizeReal',
      fileCountLimit: 'FileCountLimit',
      fileCountReal: 'FileCountReal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userType: 'string',
      userId: 'string',
      quotaType: 'string',
      sizeLimit: 'number',
      sizeReal: 'number',
      fileCountLimit: 'number',
      fileCountReal: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDirQuotasResponseDirQuotaInfos extends $tea.Model {
  path: string;
  dirInode: string;
  status: string;
  userQuotaInfos: DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos[];
  static names(): { [key: string]: string } {
    return {
      path: 'Path',
      dirInode: 'DirInode',
      status: 'Status',
      userQuotaInfos: 'UserQuotaInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      path: 'string',
      dirInode: 'string',
      status: 'string',
      userQuotaInfos: { 'type': 'array', 'itemType': DescribeDirQuotasResponseDirQuotaInfosUserQuotaInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStoragePackagesResponsePackagesPackage extends $tea.Model {
  startTime: string;
  storageType: string;
  status: string;
  fileSystemId: string;
  packageId: string;
  expiredTime: string;
  size: number;
  static names(): { [key: string]: string } {
    return {
      startTime: 'StartTime',
      storageType: 'StorageType',
      status: 'Status',
      fileSystemId: 'FileSystemId',
      packageId: 'PackageId',
      expiredTime: 'ExpiredTime',
      size: 'Size',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startTime: 'string',
      storageType: 'string',
      status: 'string',
      fileSystemId: 'string',
      packageId: 'string',
      expiredTime: 'string',
      size: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeStoragePackagesResponsePackages extends $tea.Model {
  package: DescribeStoragePackagesResponsePackagesPackage[];
  static names(): { [key: string]: string } {
    return {
      package: 'Package',
    };
  }

  static types(): { [key: string]: any } {
    return {
      package: { 'type': 'array', 'itemType': DescribeStoragePackagesResponsePackagesPackage },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic extends $tea.Model {
  fileSystemType: string;
  totalCount: number;
  meteredSize: number;
  expiredCount: number;
  expiringCount: number;
  static names(): { [key: string]: string } {
    return {
      fileSystemType: 'FileSystemType',
      totalCount: 'TotalCount',
      meteredSize: 'MeteredSize',
      expiredCount: 'ExpiredCount',
      expiringCount: 'ExpiringCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemType: 'string',
      totalCount: 'number',
      meteredSize: 'number',
      expiredCount: 'number',
      expiringCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemStatisticsResponseFileSystemStatistics extends $tea.Model {
  fileSystemStatistic: DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic[];
  static names(): { [key: string]: string } {
    return {
      fileSystemStatistic: 'FileSystemStatistic',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemStatistic: { 'type': 'array', 'itemType': DescribeFileSystemStatisticsResponseFileSystemStatisticsFileSystemStatistic },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogAnalysisResponseAnalysesAnalysisMetaValue extends $tea.Model {
  logstore: string;
  region: string;
  project: string;
  roleArn: string;
  static names(): { [key: string]: string } {
    return {
      logstore: 'Logstore',
      region: 'Region',
      project: 'Project',
      roleArn: 'RoleArn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logstore: 'string',
      region: 'string',
      project: 'string',
      roleArn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogAnalysisResponseAnalysesAnalysis extends $tea.Model {
  metaKey: string;
  metaValue: DescribeLogAnalysisResponseAnalysesAnalysisMetaValue;
  static names(): { [key: string]: string } {
    return {
      metaKey: 'MetaKey',
      metaValue: 'MetaValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      metaKey: 'string',
      metaValue: DescribeLogAnalysisResponseAnalysesAnalysisMetaValue,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLogAnalysisResponseAnalyses extends $tea.Model {
  analysis: DescribeLogAnalysisResponseAnalysesAnalysis[];
  static names(): { [key: string]: string } {
    return {
      analysis: 'Analysis',
    };
  }

  static types(): { [key: string]: any } {
    return {
      analysis: { 'type': 'array', 'itemType': DescribeLogAnalysisResponseAnalysesAnalysis },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountedClientsResponseClientsClient extends $tea.Model {
  clientIP: string;
  static names(): { [key: string]: string } {
    return {
      clientIP: 'ClientIP',
    };
  }

  static types(): { [key: string]: any } {
    return {
      clientIP: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountedClientsResponseClients extends $tea.Model {
  client: DescribeMountedClientsResponseClientsClient[];
  static names(): { [key: string]: string } {
    return {
      client: 'Client',
    };
  }

  static types(): { [key: string]: any } {
    return {
      client: { 'type': 'array', 'itemType': DescribeMountedClientsResponseClientsClient },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask extends $tea.Model {
  sourceFileSystemId: string;
  autoSnapshotPolicyId: string;
  static names(): { [key: string]: string } {
    return {
      sourceFileSystemId: 'SourceFileSystemId',
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sourceFileSystemId: 'string',
      autoSnapshotPolicyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotTasksResponseAutoSnapshotTasks extends $tea.Model {
  autoSnapshotTask: DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask[];
  static names(): { [key: string]: string } {
    return {
      autoSnapshotTask: 'AutoSnapshotTask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotTask: { 'type': 'array', 'itemType': DescribeAutoSnapshotTasksResponseAutoSnapshotTasksAutoSnapshotTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeLDAPConfigResponseLdap extends $tea.Model {
  bindDN: string;
  URI: string;
  searchBase: string;
  static names(): { [key: string]: string } {
    return {
      bindDN: 'BindDN',
      URI: 'URI',
      searchBase: 'SearchBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bindDN: 'string',
      URI: 'string',
      searchBase: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseTagsTagFileSystemIds extends $tea.Model {
  fileSystemId: string[];
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseTagsTag extends $tea.Model {
  key: string;
  value: string;
  fileSystemIds: DescribeTagsResponseTagsTagFileSystemIds;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
      fileSystemIds: 'FileSystemIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
      fileSystemIds: DescribeTagsResponseTagsTagFileSystemIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponseTags extends $tea.Model {
  tag: DescribeTagsResponseTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeTagsResponseTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RemoveTagsRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTagsRequestTag extends $tea.Model {
  key?: string;
  value?: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy extends $tea.Model {
  autoSnapshotPolicyId: string;
  autoSnapshotPolicyName: string;
  createTime: string;
  fileSystemNums: number;
  regionId: string;
  repeatWeekdays: string;
  retentionDays: number;
  status: string;
  timePoints: string;
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
      autoSnapshotPolicyName: 'AutoSnapshotPolicyName',
      createTime: 'CreateTime',
      fileSystemNums: 'FileSystemNums',
      regionId: 'RegionId',
      repeatWeekdays: 'RepeatWeekdays',
      retentionDays: 'RetentionDays',
      status: 'Status',
      timePoints: 'TimePoints',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicyId: 'string',
      autoSnapshotPolicyName: 'string',
      createTime: 'string',
      fileSystemNums: 'number',
      regionId: 'string',
      repeatWeekdays: 'string',
      retentionDays: 'number',
      status: 'string',
      timePoints: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAutoSnapshotPoliciesResponseAutoSnapshotPolicies extends $tea.Model {
  autoSnapshotPolicy: DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy[];
  static names(): { [key: string]: string } {
    return {
      autoSnapshotPolicy: 'AutoSnapshotPolicy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      autoSnapshotPolicy: { 'type': 'array', 'itemType': DescribeAutoSnapshotPoliciesResponseAutoSnapshotPoliciesAutoSnapshotPolicy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnapshotsResponseSnapshotsSnapshot extends $tea.Model {
  createTime: string;
  description: string;
  progress: string;
  remainTime: number;
  retentionDays: number;
  snapshotId: string;
  snapshotName: string;
  sourceFileSystemId: string;
  sourceFileSystemSize: number;
  status: string;
  encryptType: number;
  sourceFileSystemVersion: string;
  static names(): { [key: string]: string } {
    return {
      createTime: 'CreateTime',
      description: 'Description',
      progress: 'Progress',
      remainTime: 'RemainTime',
      retentionDays: 'RetentionDays',
      snapshotId: 'SnapshotId',
      snapshotName: 'SnapshotName',
      sourceFileSystemId: 'SourceFileSystemId',
      sourceFileSystemSize: 'SourceFileSystemSize',
      status: 'Status',
      encryptType: 'EncryptType',
      sourceFileSystemVersion: 'SourceFileSystemVersion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      createTime: 'string',
      description: 'string',
      progress: 'string',
      remainTime: 'number',
      retentionDays: 'number',
      snapshotId: 'string',
      snapshotName: 'string',
      sourceFileSystemId: 'string',
      sourceFileSystemSize: 'number',
      status: 'string',
      encryptType: 'number',
      sourceFileSystemVersion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSnapshotsResponseSnapshots extends $tea.Model {
  snapshot: DescribeSnapshotsResponseSnapshotsSnapshot[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': DescribeSnapshotsResponseSnapshotsSnapshot },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZonesZoneCapacity extends $tea.Model {
  protocol: string[];
  static names(): { [key: string]: string } {
    return {
      protocol: 'Protocol',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protocol: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZonesZonePerformance extends $tea.Model {
  protocol: string[];
  static names(): { [key: string]: string } {
    return {
      protocol: 'Protocol',
    };
  }

  static types(): { [key: string]: any } {
    return {
      protocol: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZonesZone extends $tea.Model {
  zoneId: string;
  capacity: DescribeZonesResponseZonesZoneCapacity;
  performance: DescribeZonesResponseZonesZonePerformance;
  static names(): { [key: string]: string } {
    return {
      zoneId: 'ZoneId',
      capacity: 'Capacity',
      performance: 'Performance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zoneId: 'string',
      capacity: DescribeZonesResponseZonesZoneCapacity,
      performance: DescribeZonesResponseZonesZonePerformance,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeZonesResponseZones extends $tea.Model {
  zone: DescribeZonesResponseZonesZone[];
  static names(): { [key: string]: string } {
    return {
      zone: 'Zone',
    };
  }

  static types(): { [key: string]: any } {
    return {
      zone: { 'type': 'array', 'itemType': DescribeZonesResponseZonesZone },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessRulesResponseAccessRulesAccessRule extends $tea.Model {
  sourceCidrIp: string;
  priority: number;
  accessRuleId: string;
  RWAccess: string;
  userAccess: string;
  static names(): { [key: string]: string } {
    return {
      sourceCidrIp: 'SourceCidrIp',
      priority: 'Priority',
      accessRuleId: 'AccessRuleId',
      RWAccess: 'RWAccess',
      userAccess: 'UserAccess',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sourceCidrIp: 'string',
      priority: 'number',
      accessRuleId: 'string',
      RWAccess: 'string',
      userAccess: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessRulesResponseAccessRules extends $tea.Model {
  accessRule: DescribeAccessRulesResponseAccessRulesAccessRule[];
  static names(): { [key: string]: string } {
    return {
      accessRule: 'AccessRule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessRule: { 'type': 'array', 'itemType': DescribeAccessRulesResponseAccessRulesAccessRule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessGroupsResponseAccessGroupsAccessGroup extends $tea.Model {
  accessGroupName: string;
  accessGroupType: string;
  ruleCount: number;
  mountTargetCount: number;
  description: string;
  createTime: string;
  static names(): { [key: string]: string } {
    return {
      accessGroupName: 'AccessGroupName',
      accessGroupType: 'AccessGroupType',
      ruleCount: 'RuleCount',
      mountTargetCount: 'MountTargetCount',
      description: 'Description',
      createTime: 'CreateTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroupName: 'string',
      accessGroupType: 'string',
      ruleCount: 'number',
      mountTargetCount: 'number',
      description: 'string',
      createTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeAccessGroupsResponseAccessGroups extends $tea.Model {
  accessGroup: DescribeAccessGroupsResponseAccessGroupsAccessGroup[];
  static names(): { [key: string]: string } {
    return {
      accessGroup: 'AccessGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessGroup: { 'type': 'array', 'itemType': DescribeAccessGroupsResponseAccessGroupsAccessGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegionsRegion extends $tea.Model {
  regionId: string;
  localName: string;
  regionEndpoint: string;
  static names(): { [key: string]: string } {
    return {
      regionId: 'RegionId',
      localName: 'LocalName',
      regionEndpoint: 'RegionEndpoint',
    };
  }

  static types(): { [key: string]: any } {
    return {
      regionId: 'string',
      localName: 'string',
      regionEndpoint: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRegionsResponseRegions extends $tea.Model {
  region: DescribeRegionsResponseRegionsRegion[];
  static names(): { [key: string]: string } {
    return {
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      region: { 'type': 'array', 'itemType': DescribeRegionsResponseRegionsRegion },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountTargetsResponseMountTargetsMountTarget extends $tea.Model {
  mountTargetDomain: string;
  networkType: string;
  vpcId: string;
  vswId: string;
  accessGroup: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      mountTargetDomain: 'MountTargetDomain',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      vswId: 'VswId',
      accessGroup: 'AccessGroup',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountTargetDomain: 'string',
      networkType: 'string',
      vpcId: 'string',
      vswId: 'string',
      accessGroup: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeMountTargetsResponseMountTargets extends $tea.Model {
  mountTarget: DescribeMountTargetsResponseMountTargetsMountTarget[];
  static names(): { [key: string]: string } {
    return {
      mountTarget: 'MountTarget',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountTarget: { 'type': 'array', 'itemType': DescribeMountTargetsResponseMountTargetsMountTarget },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget extends $tea.Model {
  mountTargetDomain: string;
  networkType: string;
  vpcId: string;
  vswId: string;
  accessGroupName: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      mountTargetDomain: 'MountTargetDomain',
      networkType: 'NetworkType',
      vpcId: 'VpcId',
      vswId: 'VswId',
      accessGroupName: 'AccessGroupName',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountTargetDomain: 'string',
      networkType: 'string',
      vpcId: 'string',
      vswId: 'string',
      accessGroupName: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemMountTargets extends $tea.Model {
  mountTarget: DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget[];
  static names(): { [key: string]: string } {
    return {
      mountTarget: 'MountTarget',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mountTarget: { 'type': 'array', 'itemType': DescribeFileSystemsResponseFileSystemsFileSystemMountTargetsMountTarget },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage extends $tea.Model {
  packageId: string;
  packageType: string;
  size: number;
  startTime: string;
  expiredTime: string;
  static names(): { [key: string]: string } {
    return {
      packageId: 'PackageId',
      packageType: 'PackageType',
      size: 'Size',
      startTime: 'StartTime',
      expiredTime: 'ExpiredTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      packageId: 'string',
      packageType: 'string',
      size: 'number',
      startTime: 'string',
      expiredTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemPackages extends $tea.Model {
  package: DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage[];
  static names(): { [key: string]: string } {
    return {
      package: 'Package',
    };
  }

  static types(): { [key: string]: any } {
    return {
      package: { 'type': 'array', 'itemType': DescribeFileSystemsResponseFileSystemsFileSystemPackagesPackage },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemLdap extends $tea.Model {
  bindDN: string;
  URI: string;
  searchBase: string;
  static names(): { [key: string]: string } {
    return {
      bindDN: 'BindDN',
      URI: 'URI',
      searchBase: 'SearchBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      bindDN: 'string',
      URI: 'string',
      searchBase: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures extends $tea.Model {
  supportedFeature: string[];
  static names(): { [key: string]: string } {
    return {
      supportedFeature: 'SupportedFeature',
    };
  }

  static types(): { [key: string]: any } {
    return {
      supportedFeature: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystemsFileSystem extends $tea.Model {
  fileSystemId: string;
  description: string;
  createTime: string;
  expiredTime: string;
  regionId: string;
  zoneId: string;
  protocolType: string;
  storageType: string;
  fileSystemType: string;
  encryptType: number;
  meteredSize: number;
  meteredIASize: number;
  bandwidth: number;
  capacity: number;
  autoSnapshotPolicyId: string;
  status: string;
  chargeType: string;
  mountTargetCountLimit: number;
  nasNamespaceId: string;
  KMSKeyId: string;
  version: string;
  mountTargets: DescribeFileSystemsResponseFileSystemsFileSystemMountTargets;
  packages: DescribeFileSystemsResponseFileSystemsFileSystemPackages;
  ldap: DescribeFileSystemsResponseFileSystemsFileSystemLdap;
  supportedFeatures: DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures;
  static names(): { [key: string]: string } {
    return {
      fileSystemId: 'FileSystemId',
      description: 'Description',
      createTime: 'CreateTime',
      expiredTime: 'ExpiredTime',
      regionId: 'RegionId',
      zoneId: 'ZoneId',
      protocolType: 'ProtocolType',
      storageType: 'StorageType',
      fileSystemType: 'FileSystemType',
      encryptType: 'EncryptType',
      meteredSize: 'MeteredSize',
      meteredIASize: 'MeteredIASize',
      bandwidth: 'Bandwidth',
      capacity: 'Capacity',
      autoSnapshotPolicyId: 'AutoSnapshotPolicyId',
      status: 'Status',
      chargeType: 'ChargeType',
      mountTargetCountLimit: 'MountTargetCountLimit',
      nasNamespaceId: 'NasNamespaceId',
      KMSKeyId: 'KMSKeyId',
      version: 'Version',
      mountTargets: 'MountTargets',
      packages: 'Packages',
      ldap: 'Ldap',
      supportedFeatures: 'SupportedFeatures',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystemId: 'string',
      description: 'string',
      createTime: 'string',
      expiredTime: 'string',
      regionId: 'string',
      zoneId: 'string',
      protocolType: 'string',
      storageType: 'string',
      fileSystemType: 'string',
      encryptType: 'number',
      meteredSize: 'number',
      meteredIASize: 'number',
      bandwidth: 'number',
      capacity: 'number',
      autoSnapshotPolicyId: 'string',
      status: 'string',
      chargeType: 'string',
      mountTargetCountLimit: 'number',
      nasNamespaceId: 'string',
      KMSKeyId: 'string',
      version: 'string',
      mountTargets: DescribeFileSystemsResponseFileSystemsFileSystemMountTargets,
      packages: DescribeFileSystemsResponseFileSystemsFileSystemPackages,
      ldap: DescribeFileSystemsResponseFileSystemsFileSystemLdap,
      supportedFeatures: DescribeFileSystemsResponseFileSystemsFileSystemSupportedFeatures,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeFileSystemsResponseFileSystems extends $tea.Model {
  fileSystem: DescribeFileSystemsResponseFileSystemsFileSystem[];
  static names(): { [key: string]: string } {
    return {
      fileSystem: 'FileSystem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      fileSystem: { 'type': 'array', 'itemType': DescribeFileSystemsResponseFileSystemsFileSystem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "regional";
    this._endpointMap = {
      'cn-chengdu': "nas.aliyuncs.com",
      'me-east-1': "nas.ap-northeast-1.aliyuncs.com",
      'cn-hangzhou-finance': "nas.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("nas", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async deleteLifecyclePolicyWithOptions(request: DeleteLifecyclePolicyRequest, runtime: $Util.RuntimeOptions): Promise<DeleteLifecyclePolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteLifecyclePolicyResponse>(await this.doRequest("DeleteLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteLifecyclePolicyResponse({}));
  }

  async deleteLifecyclePolicy(request: DeleteLifecyclePolicyRequest): Promise<DeleteLifecyclePolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteLifecyclePolicyWithOptions(request, runtime);
  }

  async upgradeFileSystemWithOptions(request: UpgradeFileSystemRequest, runtime: $Util.RuntimeOptions): Promise<UpgradeFileSystemResponse> {
    Util.validateModel(request);
    return $tea.cast<UpgradeFileSystemResponse>(await this.doRequest("UpgradeFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new UpgradeFileSystemResponse({}));
  }

  async upgradeFileSystem(request: UpgradeFileSystemRequest): Promise<UpgradeFileSystemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.upgradeFileSystemWithOptions(request, runtime);
  }

  async modifyLifecyclePolicyWithOptions(request: ModifyLifecyclePolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyLifecyclePolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyLifecyclePolicyResponse>(await this.doRequest("ModifyLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyLifecyclePolicyResponse({}));
  }

  async modifyLifecyclePolicy(request: ModifyLifecyclePolicyRequest): Promise<ModifyLifecyclePolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyLifecyclePolicyWithOptions(request, runtime);
  }

  async createLifecyclePolicyWithOptions(request: CreateLifecyclePolicyRequest, runtime: $Util.RuntimeOptions): Promise<CreateLifecyclePolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateLifecyclePolicyResponse>(await this.doRequest("CreateLifecyclePolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateLifecyclePolicyResponse({}));
  }

  async createLifecyclePolicy(request: CreateLifecyclePolicyRequest): Promise<CreateLifecyclePolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createLifecyclePolicyWithOptions(request, runtime);
  }

  async describeLifecyclePoliciesWithOptions(request: DescribeLifecyclePoliciesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLifecyclePoliciesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLifecyclePoliciesResponse>(await this.doRequest("DescribeLifecyclePolicies", "HTTPS", "GET", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeLifecyclePoliciesResponse({}));
  }

  async describeLifecyclePolicies(request: DescribeLifecyclePoliciesRequest): Promise<DescribeLifecyclePoliciesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLifecyclePoliciesWithOptions(request, runtime);
  }

  async describeDirQuotasWithOptions(request: DescribeDirQuotasRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDirQuotasResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDirQuotasResponse>(await this.doRequest("DescribeDirQuotas", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeDirQuotasResponse({}));
  }

  async describeDirQuotas(request: DescribeDirQuotasRequest): Promise<DescribeDirQuotasResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDirQuotasWithOptions(request, runtime);
  }

  async setDirQuotaWithOptions(request: SetDirQuotaRequest, runtime: $Util.RuntimeOptions): Promise<SetDirQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDirQuotaResponse>(await this.doRequest("SetDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new SetDirQuotaResponse({}));
  }

  async setDirQuota(request: SetDirQuotaRequest): Promise<SetDirQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDirQuotaWithOptions(request, runtime);
  }

  async cancelDirQuotaWithOptions(request: CancelDirQuotaRequest, runtime: $Util.RuntimeOptions): Promise<CancelDirQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelDirQuotaResponse>(await this.doRequest("CancelDirQuota", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CancelDirQuotaResponse({}));
  }

  async cancelDirQuota(request: CancelDirQuotaRequest): Promise<CancelDirQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelDirQuotaWithOptions(request, runtime);
  }

  async describeStoragePackagesWithOptions(request: DescribeStoragePackagesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeStoragePackagesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeStoragePackagesResponse>(await this.doRequest("DescribeStoragePackages", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeStoragePackagesResponse({}));
  }

  async describeStoragePackages(request: DescribeStoragePackagesRequest): Promise<DescribeStoragePackagesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeStoragePackagesWithOptions(request, runtime);
  }

  async describeFileSystemStatisticsWithOptions(request: DescribeFileSystemStatisticsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeFileSystemStatisticsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeFileSystemStatisticsResponse>(await this.doRequest("DescribeFileSystemStatistics", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeFileSystemStatisticsResponse({}));
  }

  async describeFileSystemStatistics(request: DescribeFileSystemStatisticsRequest): Promise<DescribeFileSystemStatisticsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeFileSystemStatisticsWithOptions(request, runtime);
  }

  async describeLogAnalysisWithOptions(request: DescribeLogAnalysisRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLogAnalysisResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLogAnalysisResponse>(await this.doRequest("DescribeLogAnalysis", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeLogAnalysisResponse({}));
  }

  async describeLogAnalysis(request: DescribeLogAnalysisRequest): Promise<DescribeLogAnalysisResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLogAnalysisWithOptions(request, runtime);
  }

  async describeMountedClientsWithOptions(request: DescribeMountedClientsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMountedClientsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMountedClientsResponse>(await this.doRequest("DescribeMountedClients", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeMountedClientsResponse({}));
  }

  async describeMountedClients(request: DescribeMountedClientsRequest): Promise<DescribeMountedClientsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMountedClientsWithOptions(request, runtime);
  }

  async describeAutoSnapshotTasksWithOptions(request: DescribeAutoSnapshotTasksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAutoSnapshotTasksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAutoSnapshotTasksResponse>(await this.doRequest("DescribeAutoSnapshotTasks", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeAutoSnapshotTasksResponse({}));
  }

  async describeAutoSnapshotTasks(request: DescribeAutoSnapshotTasksRequest): Promise<DescribeAutoSnapshotTasksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAutoSnapshotTasksWithOptions(request, runtime);
  }

  async removeClientFromBlackListWithOptions(request: RemoveClientFromBlackListRequest, runtime: $Util.RuntimeOptions): Promise<RemoveClientFromBlackListResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveClientFromBlackListResponse>(await this.doRequest("RemoveClientFromBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new RemoveClientFromBlackListResponse({}));
  }

  async removeClientFromBlackList(request: RemoveClientFromBlackListRequest): Promise<RemoveClientFromBlackListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeClientFromBlackListWithOptions(request, runtime);
  }

  async describeBlackListClientsWithOptions(request: DescribeBlackListClientsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBlackListClientsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBlackListClientsResponse>(await this.doRequest("DescribeBlackListClients", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeBlackListClientsResponse({}));
  }

  async describeBlackListClients(request: DescribeBlackListClientsRequest): Promise<DescribeBlackListClientsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBlackListClientsWithOptions(request, runtime);
  }

  async addClientToBlackListWithOptions(request: AddClientToBlackListRequest, runtime: $Util.RuntimeOptions): Promise<AddClientToBlackListResponse> {
    Util.validateModel(request);
    return $tea.cast<AddClientToBlackListResponse>(await this.doRequest("AddClientToBlackList", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new AddClientToBlackListResponse({}));
  }

  async addClientToBlackList(request: AddClientToBlackListRequest): Promise<AddClientToBlackListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addClientToBlackListWithOptions(request, runtime);
  }

  async describeLDAPConfigWithOptions(request: DescribeLDAPConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeLDAPConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeLDAPConfigResponse>(await this.doRequest("DescribeLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeLDAPConfigResponse({}));
  }

  async describeLDAPConfig(request: DescribeLDAPConfigRequest): Promise<DescribeLDAPConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeLDAPConfigWithOptions(request, runtime);
  }

  async modifyLDAPConfigWithOptions(request: ModifyLDAPConfigRequest, runtime: $Util.RuntimeOptions): Promise<ModifyLDAPConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyLDAPConfigResponse>(await this.doRequest("ModifyLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyLDAPConfigResponse({}));
  }

  async modifyLDAPConfig(request: ModifyLDAPConfigRequest): Promise<ModifyLDAPConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyLDAPConfigWithOptions(request, runtime);
  }

  async createLDAPConfigWithOptions(request: CreateLDAPConfigRequest, runtime: $Util.RuntimeOptions): Promise<CreateLDAPConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateLDAPConfigResponse>(await this.doRequest("CreateLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateLDAPConfigResponse({}));
  }

  async createLDAPConfig(request: CreateLDAPConfigRequest): Promise<CreateLDAPConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createLDAPConfigWithOptions(request, runtime);
  }

  async deleteLDAPConfigWithOptions(request: DeleteLDAPConfigRequest, runtime: $Util.RuntimeOptions): Promise<DeleteLDAPConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteLDAPConfigResponse>(await this.doRequest("DeleteLDAPConfig", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteLDAPConfigResponse({}));
  }

  async deleteLDAPConfig(request: DeleteLDAPConfigRequest): Promise<DeleteLDAPConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteLDAPConfigWithOptions(request, runtime);
  }

  async describeTagsWithOptions(request: DescribeTagsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTagsResponse>(await this.doRequest("DescribeTags", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeTagsResponse({}));
  }

  async describeTags(request: DescribeTagsRequest): Promise<DescribeTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTagsWithOptions(request, runtime);
  }

  async removeTagsWithOptions(request: RemoveTagsRequest, runtime: $Util.RuntimeOptions): Promise<RemoveTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<RemoveTagsResponse>(await this.doRequest("RemoveTags", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new RemoveTagsResponse({}));
  }

  async removeTags(request: RemoveTagsRequest): Promise<RemoveTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.removeTagsWithOptions(request, runtime);
  }

  async addTagsWithOptions(request: AddTagsRequest, runtime: $Util.RuntimeOptions): Promise<AddTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<AddTagsResponse>(await this.doRequest("AddTags", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new AddTagsResponse({}));
  }

  async addTags(request: AddTagsRequest): Promise<AddTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addTagsWithOptions(request, runtime);
  }

  async resetFileSystemWithOptions(request: ResetFileSystemRequest, runtime: $Util.RuntimeOptions): Promise<ResetFileSystemResponse> {
    Util.validateModel(request);
    return $tea.cast<ResetFileSystemResponse>(await this.doRequest("ResetFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ResetFileSystemResponse({}));
  }

  async resetFileSystem(request: ResetFileSystemRequest): Promise<ResetFileSystemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.resetFileSystemWithOptions(request, runtime);
  }

  async createAutoSnapshotPolicyWithOptions(request: CreateAutoSnapshotPolicyRequest, runtime: $Util.RuntimeOptions): Promise<CreateAutoSnapshotPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAutoSnapshotPolicyResponse>(await this.doRequest("CreateAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateAutoSnapshotPolicyResponse({}));
  }

  async createAutoSnapshotPolicy(request: CreateAutoSnapshotPolicyRequest): Promise<CreateAutoSnapshotPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAutoSnapshotPolicyWithOptions(request, runtime);
  }

  async describeAutoSnapshotPoliciesWithOptions(request: DescribeAutoSnapshotPoliciesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAutoSnapshotPoliciesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAutoSnapshotPoliciesResponse>(await this.doRequest("DescribeAutoSnapshotPolicies", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeAutoSnapshotPoliciesResponse({}));
  }

  async describeAutoSnapshotPolicies(request: DescribeAutoSnapshotPoliciesRequest): Promise<DescribeAutoSnapshotPoliciesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAutoSnapshotPoliciesWithOptions(request, runtime);
  }

  async cancelAutoSnapshotPolicyWithOptions(request: CancelAutoSnapshotPolicyRequest, runtime: $Util.RuntimeOptions): Promise<CancelAutoSnapshotPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<CancelAutoSnapshotPolicyResponse>(await this.doRequest("CancelAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CancelAutoSnapshotPolicyResponse({}));
  }

  async cancelAutoSnapshotPolicy(request: CancelAutoSnapshotPolicyRequest): Promise<CancelAutoSnapshotPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.cancelAutoSnapshotPolicyWithOptions(request, runtime);
  }

  async applyAutoSnapshotPolicyWithOptions(request: ApplyAutoSnapshotPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ApplyAutoSnapshotPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ApplyAutoSnapshotPolicyResponse>(await this.doRequest("ApplyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ApplyAutoSnapshotPolicyResponse({}));
  }

  async applyAutoSnapshotPolicy(request: ApplyAutoSnapshotPolicyRequest): Promise<ApplyAutoSnapshotPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.applyAutoSnapshotPolicyWithOptions(request, runtime);
  }

  async modifyAutoSnapshotPolicyWithOptions(request: ModifyAutoSnapshotPolicyRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAutoSnapshotPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAutoSnapshotPolicyResponse>(await this.doRequest("ModifyAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyAutoSnapshotPolicyResponse({}));
  }

  async modifyAutoSnapshotPolicy(request: ModifyAutoSnapshotPolicyRequest): Promise<ModifyAutoSnapshotPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAutoSnapshotPolicyWithOptions(request, runtime);
  }

  async deleteAutoSnapshotPolicyWithOptions(request: DeleteAutoSnapshotPolicyRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAutoSnapshotPolicyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAutoSnapshotPolicyResponse>(await this.doRequest("DeleteAutoSnapshotPolicy", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteAutoSnapshotPolicyResponse({}));
  }

  async deleteAutoSnapshotPolicy(request: DeleteAutoSnapshotPolicyRequest): Promise<DeleteAutoSnapshotPolicyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAutoSnapshotPolicyWithOptions(request, runtime);
  }

  async deleteSnapshotWithOptions(request: DeleteSnapshotRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSnapshotResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSnapshotResponse>(await this.doRequest("DeleteSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteSnapshotResponse({}));
  }

  async deleteSnapshot(request: DeleteSnapshotRequest): Promise<DeleteSnapshotResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSnapshotWithOptions(request, runtime);
  }

  async createSnapshotWithOptions(request: CreateSnapshotRequest, runtime: $Util.RuntimeOptions): Promise<CreateSnapshotResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateSnapshotResponse>(await this.doRequest("CreateSnapshot", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateSnapshotResponse({}));
  }

  async createSnapshot(request: CreateSnapshotRequest): Promise<CreateSnapshotResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createSnapshotWithOptions(request, runtime);
  }

  async describeSnapshotsWithOptions(request: DescribeSnapshotsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSnapshotsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSnapshotsResponse>(await this.doRequest("DescribeSnapshots", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeSnapshotsResponse({}));
  }

  async describeSnapshots(request: DescribeSnapshotsRequest): Promise<DescribeSnapshotsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSnapshotsWithOptions(request, runtime);
  }

  async describeZonesWithOptions(request: DescribeZonesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeZonesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeZonesResponse>(await this.doRequest("DescribeZones", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeZonesResponse({}));
  }

  async describeZones(request: DescribeZonesRequest): Promise<DescribeZonesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeZonesWithOptions(request, runtime);
  }

  async createAccessGroupWithOptions(request: CreateAccessGroupRequest, runtime: $Util.RuntimeOptions): Promise<CreateAccessGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAccessGroupResponse>(await this.doRequest("CreateAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateAccessGroupResponse({}));
  }

  async createAccessGroup(request: CreateAccessGroupRequest): Promise<CreateAccessGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAccessGroupWithOptions(request, runtime);
  }

  async createMountTargetWithOptions(request: CreateMountTargetRequest, runtime: $Util.RuntimeOptions): Promise<CreateMountTargetResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateMountTargetResponse>(await this.doRequest("CreateMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateMountTargetResponse({}));
  }

  async createMountTarget(request: CreateMountTargetRequest): Promise<CreateMountTargetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createMountTargetWithOptions(request, runtime);
  }

  async createFileSystemWithOptions(request: CreateFileSystemRequest, runtime: $Util.RuntimeOptions): Promise<CreateFileSystemResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateFileSystemResponse>(await this.doRequest("CreateFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateFileSystemResponse({}));
  }

  async createFileSystem(request: CreateFileSystemRequest): Promise<CreateFileSystemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createFileSystemWithOptions(request, runtime);
  }

  async createAccessRuleWithOptions(request: CreateAccessRuleRequest, runtime: $Util.RuntimeOptions): Promise<CreateAccessRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAccessRuleResponse>(await this.doRequest("CreateAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new CreateAccessRuleResponse({}));
  }

  async createAccessRule(request: CreateAccessRuleRequest): Promise<CreateAccessRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAccessRuleWithOptions(request, runtime);
  }

  async describeAccessRulesWithOptions(request: DescribeAccessRulesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAccessRulesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAccessRulesResponse>(await this.doRequest("DescribeAccessRules", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeAccessRulesResponse({}));
  }

  async describeAccessRules(request: DescribeAccessRulesRequest): Promise<DescribeAccessRulesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAccessRulesWithOptions(request, runtime);
  }

  async describeAccessGroupsWithOptions(request: DescribeAccessGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeAccessGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeAccessGroupsResponse>(await this.doRequest("DescribeAccessGroups", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeAccessGroupsResponse({}));
  }

  async describeAccessGroups(request: DescribeAccessGroupsRequest): Promise<DescribeAccessGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeAccessGroupsWithOptions(request, runtime);
  }

  async deleteMountTargetWithOptions(request: DeleteMountTargetRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMountTargetResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMountTargetResponse>(await this.doRequest("DeleteMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteMountTargetResponse({}));
  }

  async deleteMountTarget(request: DeleteMountTargetRequest): Promise<DeleteMountTargetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMountTargetWithOptions(request, runtime);
  }

  async deleteFileSystemWithOptions(request: DeleteFileSystemRequest, runtime: $Util.RuntimeOptions): Promise<DeleteFileSystemResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteFileSystemResponse>(await this.doRequest("DeleteFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteFileSystemResponse({}));
  }

  async deleteFileSystem(request: DeleteFileSystemRequest): Promise<DeleteFileSystemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteFileSystemWithOptions(request, runtime);
  }

  async deleteAccessRuleWithOptions(request: DeleteAccessRuleRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAccessRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAccessRuleResponse>(await this.doRequest("DeleteAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteAccessRuleResponse({}));
  }

  async deleteAccessRule(request: DeleteAccessRuleRequest): Promise<DeleteAccessRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAccessRuleWithOptions(request, runtime);
  }

  async deleteAccessGroupWithOptions(request: DeleteAccessGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAccessGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAccessGroupResponse>(await this.doRequest("DeleteAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DeleteAccessGroupResponse({}));
  }

  async deleteAccessGroup(request: DeleteAccessGroupRequest): Promise<DeleteAccessGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAccessGroupWithOptions(request, runtime);
  }

  async modifyAccessRuleWithOptions(request: ModifyAccessRuleRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAccessRuleResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAccessRuleResponse>(await this.doRequest("ModifyAccessRule", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyAccessRuleResponse({}));
  }

  async modifyAccessRule(request: ModifyAccessRuleRequest): Promise<ModifyAccessRuleResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAccessRuleWithOptions(request, runtime);
  }

  async modifyAccessGroupWithOptions(request: ModifyAccessGroupRequest, runtime: $Util.RuntimeOptions): Promise<ModifyAccessGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyAccessGroupResponse>(await this.doRequest("ModifyAccessGroup", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyAccessGroupResponse({}));
  }

  async modifyAccessGroup(request: ModifyAccessGroupRequest): Promise<ModifyAccessGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyAccessGroupWithOptions(request, runtime);
  }

  async describeRegionsWithOptions(request: DescribeRegionsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRegionsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRegionsResponse>(await this.doRequest("DescribeRegions", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeRegionsResponse({}));
  }

  async describeRegions(request: DescribeRegionsRequest): Promise<DescribeRegionsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRegionsWithOptions(request, runtime);
  }

  async describeMountTargetsWithOptions(request: DescribeMountTargetsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeMountTargetsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeMountTargetsResponse>(await this.doRequest("DescribeMountTargets", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeMountTargetsResponse({}));
  }

  async describeMountTargets(request: DescribeMountTargetsRequest): Promise<DescribeMountTargetsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeMountTargetsWithOptions(request, runtime);
  }

  async describeFileSystemsWithOptions(request: DescribeFileSystemsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeFileSystemsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeFileSystemsResponse>(await this.doRequest("DescribeFileSystems", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new DescribeFileSystemsResponse({}));
  }

  async describeFileSystems(request: DescribeFileSystemsRequest): Promise<DescribeFileSystemsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeFileSystemsWithOptions(request, runtime);
  }

  async modifyMountTargetWithOptions(request: ModifyMountTargetRequest, runtime: $Util.RuntimeOptions): Promise<ModifyMountTargetResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyMountTargetResponse>(await this.doRequest("ModifyMountTarget", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyMountTargetResponse({}));
  }

  async modifyMountTarget(request: ModifyMountTargetRequest): Promise<ModifyMountTargetResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyMountTargetWithOptions(request, runtime);
  }

  async modifyFileSystemWithOptions(request: ModifyFileSystemRequest, runtime: $Util.RuntimeOptions): Promise<ModifyFileSystemResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyFileSystemResponse>(await this.doRequest("ModifyFileSystem", "HTTPS", "POST", "2017-06-26", "AK", null, $tea.toMap(request), runtime), new ModifyFileSystemResponse({}));
  }

  async modifyFileSystem(request: ModifyFileSystemRequest): Promise<ModifyFileSystemResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyFileSystemWithOptions(request, runtime);
  }

  getEndpoint(productId: string, regionId: string, endpointRule: string, network: string, suffix: string, endpointMap: {[key: string ]: string}, endpoint: string): string {
    if (!Util.empty(endpoint)) {
      return endpoint;
    }

    if (!Util.isUnset(endpointMap) && !Util.empty(endpointMap[regionId])) {
      return endpointMap[regionId];
    }

    return EndpointUtil.getEndpointRules(productId, regionId, endpointRule, network, suffix);
  }

}

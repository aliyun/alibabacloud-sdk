// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class ListTagResourcesRequest extends $tea.Model {
  lang?: string;
  resourceType: string;
  tag?: ListTagResourcesRequestTag[];
  resourceId?: string[];
  nextToken?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      resourceType: 'ResourceType',
      tag: 'Tag',
      resourceId: 'ResourceId',
      nextToken: 'NextToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      resourceType: 'string',
      tag: { 'type': 'array', 'itemType': ListTagResourcesRequestTag },
      resourceId: { 'type': 'array', 'itemType': 'string' },
      nextToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesResponse extends $tea.Model {
  requestId: string;
  nextToken: string;
  tagResources: ListTagResourcesResponseTagResources[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nextToken: 'NextToken',
      tagResources: 'TagResources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nextToken: 'string',
      tagResources: { 'type': 'array', 'itemType': ListTagResourcesResponseTagResources },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequest extends $tea.Model {
  lang?: string;
  resourceType: string;
  tag: TagResourcesRequestTag[];
  resourceId: string[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      resourceType: 'ResourceType',
      tag: 'Tag',
      resourceId: 'ResourceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      resourceType: 'string',
      tag: { 'type': 'array', 'itemType': TagResourcesRequestTag },
      resourceId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesResponse extends $tea.Model {
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

export class UntagResourcesRequest extends $tea.Model {
  lang?: string;
  resourceType: string;
  all?: boolean;
  resourceId: string[];
  tagKey?: string[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      resourceType: 'ResourceType',
      all: 'All',
      resourceId: 'ResourceId',
      tagKey: 'TagKey',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      resourceType: 'string',
      all: 'boolean',
      resourceId: { 'type': 'array', 'itemType': 'string' },
      tagKey: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UntagResourcesResponse extends $tea.Model {
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
  lang?: string;
  resourceType: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      resourceType: 'ResourceType',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      resourceType: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTagsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  tags: DescribeTagsResponseTags[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      tags: 'Tags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      tags: { 'type': 'array', 'itemType': DescribeTagsResponseTags },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyGtmConfigRequest extends $tea.Model {
  lang?: string;
  sourceId: string;
  targetId: string;
  copyType: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      sourceId: 'SourceId',
      targetId: 'TargetId',
      copyType: 'CopyType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      sourceId: 'string',
      targetId: 'string',
      copyType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CopyGtmConfigResponse extends $tea.Model {
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

export class DescribeDomainDnssecInfoRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainDnssecInfoResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  status: string;
  dsRecord: string;
  digest: string;
  digestType: string;
  algorithm: string;
  publicKey: string;
  keyTag: string;
  flags: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      status: 'Status',
      dsRecord: 'DsRecord',
      digest: 'Digest',
      digestType: 'DigestType',
      algorithm: 'Algorithm',
      publicKey: 'PublicKey',
      keyTag: 'KeyTag',
      flags: 'Flags',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      status: 'string',
      dsRecord: 'string',
      digest: 'string',
      digestType: 'string',
      algorithm: 'string',
      publicKey: 'string',
      keyTag: 'string',
      flags: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDomainDnssecStatusRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDomainDnssecStatusResponse extends $tea.Model {
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

export class TransferDomainRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainNames: string;
  remark?: string;
  targetUserId: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainNames: 'DomainNames',
      remark: 'Remark',
      targetUserId: 'TargetUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainNames: 'string',
      remark: 'string',
      targetUserId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TransferDomainResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTransferDomainsRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  transferType: string;
  domainName?: string;
  fromUserId?: number;
  targetUserId?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      transferType: 'TransferType',
      domainName: 'DomainName',
      fromUserId: 'FromUserId',
      targetUserId: 'TargetUserId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      transferType: 'string',
      domainName: 'string',
      fromUserId: 'number',
      targetUserId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTransferDomainsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domainTransfers: DescribeTransferDomainsResponseDomainTransfers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainTransfers: 'DomainTransfers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domainTransfers: DescribeTransferDomainsResponseDomainTransfers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainBackupRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  periodType: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
      periodType: 'PeriodType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
      periodType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainBackupResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  periodType: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      periodType: 'PeriodType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      periodType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RetrieveDomainRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RetrieveDomainResponse extends $tea.Model {
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

export class DescribeGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanResponse extends $tea.Model {
  requestId: string;
  recoveryPlanId: number;
  name: string;
  remark: string;
  faultAddrPoolNum: number;
  status: string;
  lastExecuteTime: string;
  lastExecuteTimestamp: number;
  lastRollbackTime: string;
  lastRollbackTimestamp: number;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  faultAddrPools: DescribeGtmRecoveryPlanResponseFaultAddrPools;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recoveryPlanId: 'RecoveryPlanId',
      name: 'Name',
      remark: 'Remark',
      faultAddrPoolNum: 'FaultAddrPoolNum',
      status: 'Status',
      lastExecuteTime: 'LastExecuteTime',
      lastExecuteTimestamp: 'LastExecuteTimestamp',
      lastRollbackTime: 'LastRollbackTime',
      lastRollbackTimestamp: 'LastRollbackTimestamp',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      faultAddrPools: 'FaultAddrPools',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recoveryPlanId: 'number',
      name: 'string',
      remark: 'string',
      faultAddrPoolNum: 'number',
      status: 'string',
      lastExecuteTime: 'string',
      lastExecuteTimestamp: 'number',
      lastRollbackTime: 'string',
      lastRollbackTimestamp: 'number',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      faultAddrPools: DescribeGtmRecoveryPlanResponseFaultAddrPools,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  name: string;
  remark?: string;
  faultAddrPool: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      name: 'Name',
      remark: 'Remark',
      faultAddrPool: 'FaultAddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      name: 'string',
      remark: 'string',
      faultAddrPool: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmRecoveryPlanResponse extends $tea.Model {
  requestId: string;
  recoveryPlanId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recoveryPlanId: 'RecoveryPlanId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recoveryPlanId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  name?: string;
  remark?: string;
  faultAddrPool?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
      name: 'Name',
      remark: 'Remark',
      faultAddrPool: 'FaultAddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
      name: 'string',
      remark: 'string',
      faultAddrPool: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmRecoveryPlanResponse extends $tea.Model {
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

export class DeleteGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGtmRecoveryPlanResponse extends $tea.Model {
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

export class DescribeGtmRecoveryPlansRequest extends $tea.Model {
  lang?: string;
  keyword?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      keyword: 'Keyword',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      keyword: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlansResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageNumber: number;
  pageSize: number;
  recoveryPlans: DescribeGtmRecoveryPlansResponseRecoveryPlans;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      recoveryPlans: 'RecoveryPlans',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      recoveryPlans: DescribeGtmRecoveryPlansResponseRecoveryPlans,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigRequest extends $tea.Model {
  lang?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigResponse extends $tea.Model {
  requestId: string;
  instances: DescribeGtmRecoveryPlanAvailableConfigResponseInstances;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      instances: 'Instances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      instances: DescribeGtmRecoveryPlanAvailableConfigResponseInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ExecuteGtmRecoveryPlanResponse extends $tea.Model {
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

export class RollbackGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RollbackGtmRecoveryPlanResponse extends $tea.Model {
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

export class PreviewGtmRecoveryPlanRequest extends $tea.Model {
  lang?: string;
  recoveryPlanId: number;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      recoveryPlanId: 'RecoveryPlanId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      recoveryPlanId: 'number',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewGtmRecoveryPlanResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageSize: number;
  pageNumber: number;
  previews: PreviewGtmRecoveryPlanResponsePreviews;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      previews: 'Previews',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      previews: PreviewGtmRecoveryPlanResponsePreviews,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTxtRecordForVerifyRequest extends $tea.Model {
  lang?: string;
  domainName?: string;
  type: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTxtRecordForVerifyResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  RR: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      RR: 'RR',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      RR: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  startDate: string;
  endDate?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      startDate: 'StartDate',
      endDate: 'EndDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      startDate: 'string',
      endDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsResponse extends $tea.Model {
  requestId: string;
  statistics: DescribeDomainStatisticsResponseStatistics;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      statistics: 'Statistics',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      statistics: DescribeDomainStatisticsResponseStatistics,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsRequest extends $tea.Model {
  lang?: string;
  startDate: string;
  endDate?: string;
  domainName: string;
  rr: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      startDate: 'StartDate',
      endDate: 'EndDate',
      domainName: 'DomainName',
      rr: 'Rr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      startDate: 'string',
      endDate: 'string',
      domainName: 'string',
      rr: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsResponse extends $tea.Model {
  requestId: string;
  statistics: DescribeRecordStatisticsResponseStatistics;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      statistics: 'Statistics',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      statistics: DescribeRecordStatisticsResponseStatistics,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceSystemCnameRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceSystemCnameResponse extends $tea.Model {
  requestId: string;
  systemCname: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      systemCname: 'SystemCname',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      systemCname: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceDomainsRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceDomainsResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  pageNumber: number;
  pageSize: number;
  totalPages: number;
  instanceDomains: DescribeInstanceDomainsResponseInstanceDomains[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalPages: 'TotalPages',
      instanceDomains: 'InstanceDomains',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      totalPages: 'number',
      instanceDomains: { 'type': 'array', 'itemType': DescribeInstanceDomainsResponseInstanceDomains },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindInstanceDomainsRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  domainNames: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      domainNames: 'DomainNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      domainNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BindInstanceDomainsResponse extends $tea.Model {
  requestId: string;
  successCount: number;
  failedCount: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      successCount: 'SuccessCount',
      failedCount: 'FailedCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      successCount: 'number',
      failedCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindInstanceDomainsRequest extends $tea.Model {
  lang?: string;
  domainNames: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainNames: 'DomainNames',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainNames: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UnbindInstanceDomainsResponse extends $tea.Model {
  requestId: string;
  successCount: number;
  failedCount: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      successCount: 'SuccessCount',
      failedCount: 'FailedCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      successCount: 'number',
      failedCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCustomLineRequest extends $tea.Model {
  lang?: string;
  lineName?: string;
  ipSegment?: UpdateCustomLineRequestIpSegment[];
  lineId: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      lineName: 'LineName',
      ipSegment: 'IpSegment',
      lineId: 'LineId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      lineName: 'string',
      ipSegment: { 'type': 'array', 'itemType': UpdateCustomLineRequestIpSegment },
      lineId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCustomLineResponse extends $tea.Model {
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

export class AddCustomLineRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  lineName: string;
  ipSegment: AddCustomLineRequestIpSegment[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      lineName: 'LineName',
      ipSegment: 'IpSegment',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      lineName: 'string',
      ipSegment: { 'type': 'array', 'itemType': AddCustomLineRequestIpSegment },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCustomLineResponse extends $tea.Model {
  requestId: string;
  lineId: number;
  lineCode: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      lineId: 'LineId',
      lineCode: 'LineCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      lineId: 'number',
      lineCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCustomLinesRequest extends $tea.Model {
  lang?: string;
  lineIds: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      lineIds: 'LineIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      lineIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCustomLinesResponse extends $tea.Model {
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

export class DescribeCustomLineRequest extends $tea.Model {
  lineId?: number;
  lang?: string;
  static names(): { [key: string]: string } {
    return {
      lineId: 'LineId',
      lang: 'Lang',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineId: 'number',
      lang: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomLineResponse extends $tea.Model {
  requestId: string;
  id: number;
  name: string;
  domainName: string;
  createTime: string;
  createTimestamp: number;
  ipSegments: string;
  code: string;
  ipSegmentList: DescribeCustomLineResponseIpSegmentList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      id: 'Id',
      name: 'Name',
      domainName: 'DomainName',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      ipSegments: 'IpSegments',
      code: 'Code',
      ipSegmentList: 'IpSegmentList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      id: 'number',
      name: 'string',
      domainName: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      ipSegments: 'string',
      code: 'string',
      ipSegmentList: { 'type': 'array', 'itemType': DescribeCustomLineResponseIpSegmentList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomLinesRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomLinesResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  pageNumber: number;
  pageSize: number;
  totalPages: number;
  customLines: DescribeCustomLinesResponseCustomLines[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalPages: 'TotalPages',
      customLines: 'CustomLines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      totalPages: 'number',
      customLines: { 'type': 'array', 'itemType': DescribeCustomLinesResponseCustomLines },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsSummaryRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  startDate: string;
  endDate?: string;
  searchMode?: string;
  keyword?: string;
  threshold?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      startDate: 'StartDate',
      endDate: 'EndDate',
      searchMode: 'SearchMode',
      keyword: 'Keyword',
      threshold: 'Threshold',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      startDate: 'string',
      endDate: 'string',
      searchMode: 'string',
      keyword: 'string',
      threshold: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsSummaryResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageSize: number;
  pageNumber: number;
  statistics: DescribeDomainStatisticsSummaryResponseStatistics;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      statistics: 'Statistics',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      statistics: DescribeDomainStatisticsSummaryResponseStatistics,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsSummaryRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  startDate: string;
  endDate?: string;
  domainName: string;
  searchMode?: string;
  keyword?: string;
  threshold?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      startDate: 'StartDate',
      endDate: 'EndDate',
      domainName: 'DomainName',
      searchMode: 'SearchMode',
      keyword: 'Keyword',
      threshold: 'Threshold',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      startDate: 'string',
      endDate: 'string',
      domainName: 'string',
      searchMode: 'string',
      keyword: 'string',
      threshold: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsSummaryResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageSize: number;
  pageNumber: number;
  statistics: DescribeRecordStatisticsSummaryResponseStatistics;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      statistics: 'Statistics',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      statistics: DescribeRecordStatisticsSummaryResponseStatistics,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class OperateBatchDomainRequest extends $tea.Model {
  lang?: string;
  type: string;
  domainRecordInfo: OperateBatchDomainRequestDomainRecordInfo[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      type: 'Type',
      domainRecordInfo: 'DomainRecordInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      type: 'string',
      domainRecordInfo: { 'type': 'array', 'itemType': OperateBatchDomainRequestDomainRecordInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class OperateBatchDomainResponse extends $tea.Model {
  requestId: string;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultDetailRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  taskId?: number;
  batchType?: string;
  status?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      taskId: 'TaskId',
      batchType: 'BatchType',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      taskId: 'number',
      batchType: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultDetailResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  batchResultDetails: DescribeBatchResultDetailResponseBatchResultDetails;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      batchResultDetails: 'BatchResultDetails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      batchResultDetails: DescribeBatchResultDetailResponseBatchResultDetails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultCountRequest extends $tea.Model {
  lang?: string;
  taskId?: number;
  batchType?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      taskId: 'TaskId',
      batchType: 'BatchType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      taskId: 'number',
      batchType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultCountResponse extends $tea.Model {
  requestId: string;
  status: number;
  totalCount: number;
  successCount: number;
  failedCount: number;
  reason: string;
  batchType: string;
  taskId: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      status: 'Status',
      totalCount: 'TotalCount',
      successCount: 'SuccessCount',
      failedCount: 'FailedCount',
      reason: 'Reason',
      batchType: 'BatchType',
      taskId: 'TaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      status: 'number',
      totalCount: 'number',
      successCount: 'number',
      failedCount: 'number',
      reason: 'string',
      batchType: 'string',
      taskId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetGtmAccessModeRequest extends $tea.Model {
  lang?: string;
  strategyId: string;
  accessMode: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      strategyId: 'StrategyId',
      accessMode: 'AccessMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      strategyId: 'string',
      accessMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetGtmAccessModeResponse extends $tea.Model {
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

export class SetGtmMonitorStatusRequest extends $tea.Model {
  lang?: string;
  monitorConfigId: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      monitorConfigId: 'MonitorConfigId',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      monitorConfigId: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetGtmMonitorStatusResponse extends $tea.Model {
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

export class UpdateGtmInstanceGlobalConfigRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  instanceName?: string;
  ttl?: number;
  userDomainName?: string;
  lbaStrategy?: string;
  alertGroup?: string;
  cnameMode?: string;
  cnameCustomDomainName?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      instanceName: 'InstanceName',
      ttl: 'Ttl',
      userDomainName: 'UserDomainName',
      lbaStrategy: 'LbaStrategy',
      alertGroup: 'AlertGroup',
      cnameMode: 'CnameMode',
      cnameCustomDomainName: 'CnameCustomDomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      instanceName: 'string',
      ttl: 'number',
      userDomainName: 'string',
      lbaStrategy: 'string',
      alertGroup: 'string',
      cnameMode: 'string',
      cnameCustomDomainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmInstanceGlobalConfigResponse extends $tea.Model {
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

export class DescribeGtmLogsRequest extends $tea.Model {
  lang?: string;
  instanceId?: string;
  keyword?: string;
  pageNumber?: number;
  pageSize?: number;
  startTimestamp?: number;
  endTimestamp?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      keyword: 'Keyword',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      startTimestamp: 'StartTimestamp',
      endTimestamp: 'EndTimestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      keyword: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      startTimestamp: 'number',
      endTimestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmLogsResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageSize: number;
  pageNumber: number;
  logs: DescribeGtmLogsResponseLogs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      logs: 'Logs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageSize: 'number',
      pageNumber: 'number',
      logs: DescribeGtmLogsResponseLogs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGtmAccessStrategyRequest extends $tea.Model {
  lang?: string;
  strategyId?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      strategyId: 'StrategyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      strategyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGtmAccessStrategyResponse extends $tea.Model {
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

export class AddGtmMonitorRequest extends $tea.Model {
  lang?: string;
  addrPoolId: string;
  protocolType: string;
  interval: number;
  evaluationCount: number;
  timeout: number;
  monitorExtendInfo: string;
  ispCityNode: AddGtmMonitorRequestIspCityNode[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      addrPoolId: 'AddrPoolId',
      protocolType: 'ProtocolType',
      interval: 'Interval',
      evaluationCount: 'EvaluationCount',
      timeout: 'Timeout',
      monitorExtendInfo: 'MonitorExtendInfo',
      ispCityNode: 'IspCityNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      addrPoolId: 'string',
      protocolType: 'string',
      interval: 'number',
      evaluationCount: 'number',
      timeout: 'number',
      monitorExtendInfo: 'string',
      ispCityNode: { 'type': 'array', 'itemType': AddGtmMonitorRequestIspCityNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmMonitorResponse extends $tea.Model {
  requestId: string;
  monitorConfigId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      monitorConfigId: 'MonitorConfigId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      monitorConfigId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAddressPoolRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  name: string;
  type: string;
  minAvailableAddrNum: number;
  addr: AddGtmAddressPoolRequestAddr[];
  monitorStatus?: string;
  protocolType?: string;
  interval?: number;
  evaluationCount?: number;
  timeout?: number;
  monitorExtendInfo?: string;
  ispCityNode?: AddGtmAddressPoolRequestIspCityNode[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      name: 'Name',
      type: 'Type',
      minAvailableAddrNum: 'MinAvailableAddrNum',
      addr: 'Addr',
      monitorStatus: 'MonitorStatus',
      protocolType: 'ProtocolType',
      interval: 'Interval',
      evaluationCount: 'EvaluationCount',
      timeout: 'Timeout',
      monitorExtendInfo: 'MonitorExtendInfo',
      ispCityNode: 'IspCityNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      name: 'string',
      type: 'string',
      minAvailableAddrNum: 'number',
      addr: { 'type': 'array', 'itemType': AddGtmAddressPoolRequestAddr },
      monitorStatus: 'string',
      protocolType: 'string',
      interval: 'number',
      evaluationCount: 'number',
      timeout: 'number',
      monitorExtendInfo: 'string',
      ispCityNode: { 'type': 'array', 'itemType': AddGtmAddressPoolRequestIspCityNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAddressPoolResponse extends $tea.Model {
  requestId: string;
  addrPoolId: string;
  monitorConfigId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      addrPoolId: 'AddrPoolId',
      monitorConfigId: 'MonitorConfigId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      addrPoolId: 'string',
      monitorConfigId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAccessStrategyRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  strategyName: string;
  defaultAddrPoolId: string;
  failoverAddrPoolId: string;
  accessLines: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      strategyName: 'StrategyName',
      defaultAddrPoolId: 'DefaultAddrPoolId',
      failoverAddrPoolId: 'FailoverAddrPoolId',
      accessLines: 'AccessLines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      strategyName: 'string',
      defaultAddrPoolId: 'string',
      failoverAddrPoolId: 'string',
      accessLines: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAccessStrategyResponse extends $tea.Model {
  requestId: string;
  strategyId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      strategyId: 'StrategyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      strategyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstancesRequest extends $tea.Model {
  lang?: string;
  pageNumber?: number;
  pageSize?: number;
  keyword?: string;
  resourceGroupId?: string;
  needDetailAttributes?: boolean;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      keyword: 'Keyword',
      resourceGroupId: 'ResourceGroupId',
      needDetailAttributes: 'NeedDetailAttributes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      keyword: 'string',
      resourceGroupId: 'string',
      needDetailAttributes: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstancesResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalItems: number;
  totalPages: number;
  gtmInstances: DescribeGtmInstancesResponseGtmInstances;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      gtmInstances: 'GtmInstances',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalItems: 'number',
      totalPages: 'number',
      gtmInstances: DescribeGtmInstancesResponseGtmInstances,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGtmAddressPoolRequest extends $tea.Model {
  lang?: string;
  addrPoolId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      addrPoolId: 'AddrPoolId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      addrPoolId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteGtmAddressPoolResponse extends $tea.Model {
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

export class DescribeGtmAccessStrategiesRequest extends $tea.Model {
  lang?: string;
  instanceId?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategiesResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageNumber: number;
  pageSize: number;
  strategies: DescribeGtmAccessStrategiesResponseStrategies;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      strategies: 'Strategies',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      strategies: DescribeGtmAccessStrategiesResponseStrategies,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyRequest extends $tea.Model {
  lang?: string;
  strategyId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      strategyId: 'StrategyId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      strategyId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyResponse extends $tea.Model {
  requestId: string;
  strategyId: string;
  strategyName: string;
  defultAddrPoolId: string;
  defaultAddrPoolName: string;
  failoverAddrPoolId: string;
  failoverAddrPoolName: string;
  strategyMode: string;
  accessMode: string;
  accessStatus: string;
  instanceId: string;
  defaultAddrPoolStatus: string;
  failoverAddrPoolStatus: string;
  defaultAddrPoolMonitorStatus: string;
  failoverAddrPoolMonitorStatus: string;
  lines: DescribeGtmAccessStrategyResponseLines;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      strategyId: 'StrategyId',
      strategyName: 'StrategyName',
      defultAddrPoolId: 'DefultAddrPoolId',
      defaultAddrPoolName: 'DefaultAddrPoolName',
      failoverAddrPoolId: 'FailoverAddrPoolId',
      failoverAddrPoolName: 'FailoverAddrPoolName',
      strategyMode: 'StrategyMode',
      accessMode: 'AccessMode',
      accessStatus: 'AccessStatus',
      instanceId: 'InstanceId',
      defaultAddrPoolStatus: 'DefaultAddrPoolStatus',
      failoverAddrPoolStatus: 'FailoverAddrPoolStatus',
      defaultAddrPoolMonitorStatus: 'DefaultAddrPoolMonitorStatus',
      failoverAddrPoolMonitorStatus: 'FailoverAddrPoolMonitorStatus',
      lines: 'Lines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      strategyId: 'string',
      strategyName: 'string',
      defultAddrPoolId: 'string',
      defaultAddrPoolName: 'string',
      failoverAddrPoolId: 'string',
      failoverAddrPoolName: 'string',
      strategyMode: 'string',
      accessMode: 'string',
      accessStatus: 'string',
      instanceId: 'string',
      defaultAddrPoolStatus: 'string',
      failoverAddrPoolStatus: 'string',
      defaultAddrPoolMonitorStatus: 'string',
      failoverAddrPoolMonitorStatus: 'string',
      lines: DescribeGtmAccessStrategyResponseLines,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigResponse extends $tea.Model {
  requestId: string;
  addrPools: DescribeGtmAccessStrategyAvailableConfigResponseAddrPools;
  lines: DescribeGtmAccessStrategyAvailableConfigResponseLines;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      addrPools: 'AddrPools',
      lines: 'Lines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      addrPools: DescribeGtmAccessStrategyAvailableConfigResponseAddrPools,
      lines: DescribeGtmAccessStrategyAvailableConfigResponseLines,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAvailableAlertGroupRequest extends $tea.Model {
  lang?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAvailableAlertGroupResponse extends $tea.Model {
  requestId: string;
  availableAlertGroup: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      availableAlertGroup: 'AvailableAlertGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      availableAlertGroup: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  needDetailAttributes?: boolean;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      needDetailAttributes: 'NeedDetailAttributes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      needDetailAttributes: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceResponse extends $tea.Model {
  requestId: string;
  instanceId: string;
  instanceName: string;
  versionCode: string;
  expireTime: string;
  expireTimestamp: number;
  cname: string;
  userDomainName: string;
  ttl: number;
  lbaStrategy: string;
  createTime: string;
  createTimestamp: number;
  alertGroup: string;
  cnameMode: string;
  accessStrategyNum: number;
  addressPoolNum: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      instanceId: 'InstanceId',
      instanceName: 'InstanceName',
      versionCode: 'VersionCode',
      expireTime: 'ExpireTime',
      expireTimestamp: 'ExpireTimestamp',
      cname: 'Cname',
      userDomainName: 'UserDomainName',
      ttl: 'Ttl',
      lbaStrategy: 'LbaStrategy',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      alertGroup: 'AlertGroup',
      cnameMode: 'CnameMode',
      accessStrategyNum: 'AccessStrategyNum',
      addressPoolNum: 'AddressPoolNum',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      instanceId: 'string',
      instanceName: 'string',
      versionCode: 'string',
      expireTime: 'string',
      expireTimestamp: 'number',
      cname: 'string',
      userDomainName: 'string',
      ttl: 'number',
      lbaStrategy: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      alertGroup: 'string',
      cnameMode: 'string',
      accessStrategyNum: 'number',
      addressPoolNum: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolRequest extends $tea.Model {
  lang?: string;
  addrPoolId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      addrPoolId: 'AddrPoolId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      addrPoolId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolResponse extends $tea.Model {
  requestId: string;
  addrPoolId: string;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  addrCount: number;
  minAvailableAddrNum: number;
  monitorConfigId: string;
  monitorStatus: string;
  name: string;
  status: string;
  type: string;
  addrs: DescribeGtmInstanceAddressPoolResponseAddrs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      addrPoolId: 'AddrPoolId',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      addrCount: 'AddrCount',
      minAvailableAddrNum: 'MinAvailableAddrNum',
      monitorConfigId: 'MonitorConfigId',
      monitorStatus: 'MonitorStatus',
      name: 'Name',
      status: 'Status',
      type: 'Type',
      addrs: 'Addrs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      addrPoolId: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      addrCount: 'number',
      minAvailableAddrNum: 'number',
      monitorConfigId: 'string',
      monitorStatus: 'string',
      name: 'string',
      status: 'string',
      type: 'string',
      addrs: DescribeGtmInstanceAddressPoolResponseAddrs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolsRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolsResponse extends $tea.Model {
  requestId: string;
  totalItems: number;
  totalPages: number;
  pageNumber: number;
  pageSize: number;
  addrPools: DescribeGtmInstanceAddressPoolsResponseAddrPools;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalItems: 'TotalItems',
      totalPages: 'TotalPages',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      addrPools: 'AddrPools',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalItems: 'number',
      totalPages: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      addrPools: DescribeGtmInstanceAddressPoolsResponseAddrPools,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceStatusRequest extends $tea.Model {
  lang?: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceStatusResponse extends $tea.Model {
  requestId: string;
  addrNotAvailableNum: number;
  addrPoolNotAvailableNum: number;
  switchToFailoverStrategyNum: number;
  strategyNotAvailableNum: number;
  status: string;
  statusReason: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      addrNotAvailableNum: 'AddrNotAvailableNum',
      addrPoolNotAvailableNum: 'AddrPoolNotAvailableNum',
      switchToFailoverStrategyNum: 'SwitchToFailoverStrategyNum',
      strategyNotAvailableNum: 'StrategyNotAvailableNum',
      status: 'Status',
      statusReason: 'StatusReason',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      addrNotAvailableNum: 'number',
      addrPoolNotAvailableNum: 'number',
      switchToFailoverStrategyNum: 'number',
      strategyNotAvailableNum: 'number',
      status: 'string',
      statusReason: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorAvailableConfigRequest extends $tea.Model {
  lang?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorAvailableConfigResponse extends $tea.Model {
  requestId: string;
  ispCityNodes: DescribeGtmMonitorAvailableConfigResponseIspCityNodes;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      ispCityNodes: 'IspCityNodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      ispCityNodes: DescribeGtmMonitorAvailableConfigResponseIspCityNodes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorConfigRequest extends $tea.Model {
  lang?: string;
  monitorConfigId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      monitorConfigId: 'MonitorConfigId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      monitorConfigId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorConfigResponse extends $tea.Model {
  requestId: string;
  monitorConfigId: string;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  protocolType: string;
  interval: number;
  evaluationCount: number;
  timeout: number;
  monitorExtendInfo: string;
  ispCityNodes: DescribeGtmMonitorConfigResponseIspCityNodes;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      monitorConfigId: 'MonitorConfigId',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      protocolType: 'ProtocolType',
      interval: 'Interval',
      evaluationCount: 'EvaluationCount',
      timeout: 'Timeout',
      monitorExtendInfo: 'MonitorExtendInfo',
      ispCityNodes: 'IspCityNodes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      monitorConfigId: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      protocolType: 'string',
      interval: 'number',
      evaluationCount: 'number',
      timeout: 'number',
      monitorExtendInfo: 'string',
      ispCityNodes: DescribeGtmMonitorConfigResponseIspCityNodes,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmAccessStrategyRequest extends $tea.Model {
  lang?: string;
  strategyId: string;
  strategyName?: string;
  defaultAddrPoolId?: string;
  failoverAddrPoolId?: string;
  accessLines?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      strategyId: 'StrategyId',
      strategyName: 'StrategyName',
      defaultAddrPoolId: 'DefaultAddrPoolId',
      failoverAddrPoolId: 'FailoverAddrPoolId',
      accessLines: 'AccessLines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      strategyId: 'string',
      strategyName: 'string',
      defaultAddrPoolId: 'string',
      failoverAddrPoolId: 'string',
      accessLines: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmAccessStrategyResponse extends $tea.Model {
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

export class UpdateGtmAddressPoolRequest extends $tea.Model {
  lang?: string;
  addrPoolId: string;
  name?: string;
  type: string;
  minAvailableAddrNum?: number;
  addr: UpdateGtmAddressPoolRequestAddr[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      addrPoolId: 'AddrPoolId',
      name: 'Name',
      type: 'Type',
      minAvailableAddrNum: 'MinAvailableAddrNum',
      addr: 'Addr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      addrPoolId: 'string',
      name: 'string',
      type: 'string',
      minAvailableAddrNum: 'number',
      addr: { 'type': 'array', 'itemType': UpdateGtmAddressPoolRequestAddr },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmAddressPoolResponse extends $tea.Model {
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

export class UpdateGtmMonitorRequest extends $tea.Model {
  lang?: string;
  monitorConfigId: string;
  protocolType: string;
  interval?: number;
  evaluationCount?: number;
  timeout?: number;
  monitorExtendInfo: string;
  ispCityNode: UpdateGtmMonitorRequestIspCityNode[];
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      monitorConfigId: 'MonitorConfigId',
      protocolType: 'ProtocolType',
      interval: 'Interval',
      evaluationCount: 'EvaluationCount',
      timeout: 'Timeout',
      monitorExtendInfo: 'MonitorExtendInfo',
      ispCityNode: 'IspCityNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      monitorConfigId: 'string',
      protocolType: 'string',
      interval: 'number',
      evaluationCount: 'number',
      timeout: 'number',
      monitorExtendInfo: 'string',
      ispCityNode: { 'type': 'array', 'itemType': UpdateGtmMonitorRequestIspCityNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmMonitorResponse extends $tea.Model {
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

export class UpdateDomainRemarkRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  remark?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainRemarkResponse extends $tea.Model {
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

export class UpdateDomainRecordRemarkRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  remark?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainRecordRemarkResponse extends $tea.Model {
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

export class DescribeSupportLinesRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSupportLinesResponse extends $tea.Model {
  requestId: string;
  recordLines: DescribeSupportLinesResponseRecordLines;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordLines: 'RecordLines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordLines: DescribeSupportLinesResponseRecordLines,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainNsRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainNsResponse extends $tea.Model {
  requestId: string;
  allAliDns: boolean;
  includeAliDns: boolean;
  dnsServers: DescribeDomainNsResponseDnsServers;
  expectDnsServers: DescribeDomainNsResponseExpectDnsServers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      allAliDns: 'AllAliDns',
      includeAliDns: 'IncludeAliDns',
      dnsServers: 'DnsServers',
      expectDnsServers: 'ExpectDnsServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      allAliDns: 'boolean',
      includeAliDns: 'boolean',
      dnsServers: DescribeDomainNsResponseDnsServers,
      expectDnsServers: DescribeDomainNsResponseExpectDnsServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstanceRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  instanceId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      instanceId: 'InstanceId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      instanceId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstanceResponse extends $tea.Model {
  requestId: string;
  instanceId: string;
  versionCode: string;
  versionName: string;
  startTime: string;
  startTimestamp: number;
  endTime: string;
  endTimestamp: number;
  domain: string;
  bindCount: number;
  bindUsedCount: number;
  TTLMinValue: number;
  subDomainLevel: number;
  dnsSLBCount: number;
  URLForwardCount: number;
  DDosDefendFlow: number;
  DDosDefendQuery: number;
  overseaDDosDefendFlow: number;
  searchEngineLines: string;
  ISPLines: string;
  ISPRegionLines: string;
  overseaLine: string;
  monitorNodeCount: number;
  monitorFrequency: number;
  monitorTaskCount: number;
  regionLines: boolean;
  gslb: boolean;
  inClean: boolean;
  inBlackHole: boolean;
  bindDomainCount: number;
  bindDomainUsedCount: number;
  dnsSecurity: string;
  dnsServers: DescribeDnsProductInstanceResponseDnsServers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      instanceId: 'InstanceId',
      versionCode: 'VersionCode',
      versionName: 'VersionName',
      startTime: 'StartTime',
      startTimestamp: 'StartTimestamp',
      endTime: 'EndTime',
      endTimestamp: 'EndTimestamp',
      domain: 'Domain',
      bindCount: 'BindCount',
      bindUsedCount: 'BindUsedCount',
      TTLMinValue: 'TTLMinValue',
      subDomainLevel: 'SubDomainLevel',
      dnsSLBCount: 'DnsSLBCount',
      URLForwardCount: 'URLForwardCount',
      DDosDefendFlow: 'DDosDefendFlow',
      DDosDefendQuery: 'DDosDefendQuery',
      overseaDDosDefendFlow: 'OverseaDDosDefendFlow',
      searchEngineLines: 'SearchEngineLines',
      ISPLines: 'ISPLines',
      ISPRegionLines: 'ISPRegionLines',
      overseaLine: 'OverseaLine',
      monitorNodeCount: 'MonitorNodeCount',
      monitorFrequency: 'MonitorFrequency',
      monitorTaskCount: 'MonitorTaskCount',
      regionLines: 'RegionLines',
      gslb: 'Gslb',
      inClean: 'InClean',
      inBlackHole: 'InBlackHole',
      bindDomainCount: 'BindDomainCount',
      bindDomainUsedCount: 'BindDomainUsedCount',
      dnsSecurity: 'DnsSecurity',
      dnsServers: 'DnsServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      instanceId: 'string',
      versionCode: 'string',
      versionName: 'string',
      startTime: 'string',
      startTimestamp: 'number',
      endTime: 'string',
      endTimestamp: 'number',
      domain: 'string',
      bindCount: 'number',
      bindUsedCount: 'number',
      TTLMinValue: 'number',
      subDomainLevel: 'number',
      dnsSLBCount: 'number',
      URLForwardCount: 'number',
      DDosDefendFlow: 'number',
      DDosDefendQuery: 'number',
      overseaDDosDefendFlow: 'number',
      searchEngineLines: 'string',
      ISPLines: 'string',
      ISPRegionLines: 'string',
      overseaLine: 'string',
      monitorNodeCount: 'number',
      monitorFrequency: 'number',
      monitorTaskCount: 'number',
      regionLines: 'boolean',
      gslb: 'boolean',
      inClean: 'boolean',
      inBlackHole: 'boolean',
      bindDomainCount: 'number',
      bindDomainUsedCount: 'number',
      dnsSecurity: 'string',
      dnsServers: DescribeDnsProductInstanceResponseDnsServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainRecordRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  RR: string;
  type: string;
  value: string;
  TTL?: number;
  priority?: number;
  line?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
      RR: 'RR',
      type: 'Type',
      value: 'Value',
      TTL: 'TTL',
      priority: 'Priority',
      line: 'Line',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
      RR: 'string',
      type: 'string',
      value: 'string',
      TTL: 'number',
      priority: 'number',
      line: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainRecordResponse extends $tea.Model {
  requestId: string;
  recordId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordId: 'RecordId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainGroupRequest extends $tea.Model {
  lang?: string;
  groupId: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      groupId: 'GroupId',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      groupId: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDomainGroupResponse extends $tea.Model {
  requestId: string;
  groupId: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groupId: 'GroupId',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groupId: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDNSSLBWeightRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  weight: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
      weight: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateDNSSLBWeightResponse extends $tea.Model {
  requestId: string;
  recordId: string;
  weight: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordId: 'RecordId',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordId: 'string',
      weight: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDomainRecordStatusRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDomainRecordStatusResponse extends $tea.Model {
  requestId: string;
  recordId: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordId: 'RecordId',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordId: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDNSSLBStatusRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  subDomain: string;
  open?: boolean;
  domainName?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      subDomain: 'SubDomain',
      open: 'Open',
      domainName: 'DomainName',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      subDomain: 'string',
      open: 'boolean',
      domainName: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDNSSLBStatusResponse extends $tea.Model {
  requestId: string;
  recordCount: number;
  open: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordCount: 'RecordCount',
      open: 'Open',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordCount: 'number',
      open: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHichinaDomainDNSRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHichinaDomainDNSResponse extends $tea.Model {
  requestId: string;
  originalDnsServers: ModifyHichinaDomainDNSResponseOriginalDnsServers;
  newDnsServers: ModifyHichinaDomainDNSResponseNewDnsServers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      originalDnsServers: 'OriginalDnsServers',
      newDnsServers: 'NewDnsServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      originalDnsServers: ModifyHichinaDomainDNSResponseOriginalDnsServers,
      newDnsServers: ModifyHichinaDomainDNSResponseNewDnsServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMainDomainNameRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  inputString: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      inputString: 'InputString',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      inputString: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMainDomainNameResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  RR: string;
  domainLevel: number;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      RR: 'RR',
      domainLevel: 'DomainLevel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      RR: 'string',
      domainLevel: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSubDomainRecordsRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  subDomain: string;
  pageNumber?: number;
  pageSize?: number;
  type?: string;
  line?: string;
  domainName?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      subDomain: 'SubDomain',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      type: 'Type',
      line: 'Line',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      subDomain: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      type: 'string',
      line: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSubDomainRecordsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domainRecords: DescribeSubDomainRecordsResponseDomainRecords;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainRecords: 'DomainRecords',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domainRecords: DescribeSubDomainRecordsResponseDomainRecords,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordLogsRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName: string;
  pageNumber?: number;
  pageSize?: number;
  keyWord?: string;
  startDate?: string;
  endDate?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      keyWord: 'KeyWord',
      startDate: 'StartDate',
      endDate: 'endDate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      keyWord: 'string',
      startDate: 'string',
      endDate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordLogsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  recordLogs: DescribeRecordLogsResponseRecordLogs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      recordLogs: 'RecordLogs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      recordLogs: DescribeRecordLogsResponseRecordLogs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsRequest extends $tea.Model {
  lang?: string;
  keyWord?: string;
  groupId?: string;
  pageNumber?: number;
  pageSize?: number;
  searchMode?: string;
  resourceGroupId?: string;
  starmark?: boolean;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      keyWord: 'KeyWord',
      groupId: 'GroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      searchMode: 'SearchMode',
      resourceGroupId: 'ResourceGroupId',
      starmark: 'Starmark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      keyWord: 'string',
      groupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      searchMode: 'string',
      resourceGroupId: 'string',
      starmark: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domains: DescribeDomainsResponseDomains;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domains: 'Domains',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domains: DescribeDomainsResponseDomains,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordsRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  pageNumber?: number;
  pageSize?: number;
  keyWord?: string;
  RRKeyWord?: string;
  typeKeyWord?: string;
  valueKeyWord?: string;
  orderBy?: string;
  direction?: string;
  searchMode?: string;
  groupId?: number;
  type?: string;
  line?: string;
  status?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      keyWord: 'KeyWord',
      RRKeyWord: 'RRKeyWord',
      typeKeyWord: 'TypeKeyWord',
      valueKeyWord: 'ValueKeyWord',
      orderBy: 'OrderBy',
      direction: 'Direction',
      searchMode: 'SearchMode',
      groupId: 'GroupId',
      type: 'Type',
      line: 'Line',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      keyWord: 'string',
      RRKeyWord: 'string',
      typeKeyWord: 'string',
      valueKeyWord: 'string',
      orderBy: 'string',
      direction: 'string',
      searchMode: 'string',
      groupId: 'number',
      type: 'string',
      line: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domainRecords: DescribeDomainRecordsResponseDomainRecords;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainRecords: 'DomainRecords',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domainRecords: DescribeDomainRecordsResponseDomainRecords,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordInfoRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordInfoResponse extends $tea.Model {
  requestId: string;
  domainId: string;
  domainName: string;
  punyCode: string;
  groupId: string;
  groupName: string;
  recordId: string;
  RR: string;
  type: string;
  value: string;
  TTL: number;
  priority: number;
  line: string;
  status: string;
  locked: boolean;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainId: 'DomainId',
      domainName: 'DomainName',
      punyCode: 'PunyCode',
      groupId: 'GroupId',
      groupName: 'GroupName',
      recordId: 'RecordId',
      RR: 'RR',
      type: 'Type',
      value: 'Value',
      TTL: 'TTL',
      priority: 'Priority',
      line: 'Line',
      status: 'Status',
      locked: 'Locked',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainId: 'string',
      domainName: 'string',
      punyCode: 'string',
      groupId: 'string',
      groupName: 'string',
      recordId: 'string',
      RR: 'string',
      type: 'string',
      value: 'string',
      TTL: 'number',
      priority: 'number',
      line: 'string',
      status: 'string',
      locked: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainLogsRequest extends $tea.Model {
  lang?: string;
  keyWord?: string;
  groupId?: string;
  pageNumber?: number;
  pageSize?: number;
  startDate?: string;
  endDate?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      keyWord: 'KeyWord',
      groupId: 'GroupId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      startDate: 'StartDate',
      endDate: 'endDate',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      keyWord: 'string',
      groupId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      startDate: 'string',
      endDate: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainLogsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domainLogs: DescribeDomainLogsResponseDomainLogs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainLogs: 'DomainLogs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domainLogs: DescribeDomainLogsResponseDomainLogs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  needDetailAttributes?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
      needDetailAttributes: 'NeedDetailAttributes',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
      needDetailAttributes: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoResponse extends $tea.Model {
  requestId: string;
  domainId: string;
  domainName: string;
  punyCode: string;
  aliDomain: boolean;
  remark: string;
  groupId: string;
  groupName: string;
  instanceId: string;
  versionCode: string;
  versionName: string;
  minTtl: number;
  recordLineTreeJson: string;
  lineType: string;
  regionLines: boolean;
  inBlackHole: boolean;
  inClean: boolean;
  slaveDns: boolean;
  recordLines: DescribeDomainInfoResponseRecordLines;
  dnsServers: DescribeDomainInfoResponseDnsServers;
  availableTtls: DescribeDomainInfoResponseAvailableTtls;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainId: 'DomainId',
      domainName: 'DomainName',
      punyCode: 'PunyCode',
      aliDomain: 'AliDomain',
      remark: 'Remark',
      groupId: 'GroupId',
      groupName: 'GroupName',
      instanceId: 'InstanceId',
      versionCode: 'VersionCode',
      versionName: 'VersionName',
      minTtl: 'MinTtl',
      recordLineTreeJson: 'RecordLineTreeJson',
      lineType: 'LineType',
      regionLines: 'RegionLines',
      inBlackHole: 'InBlackHole',
      inClean: 'InClean',
      slaveDns: 'SlaveDns',
      recordLines: 'RecordLines',
      dnsServers: 'DnsServers',
      availableTtls: 'AvailableTtls',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainId: 'string',
      domainName: 'string',
      punyCode: 'string',
      aliDomain: 'boolean',
      remark: 'string',
      groupId: 'string',
      groupName: 'string',
      instanceId: 'string',
      versionCode: 'string',
      versionName: 'string',
      minTtl: 'number',
      recordLineTreeJson: 'string',
      lineType: 'string',
      regionLines: 'boolean',
      inBlackHole: 'boolean',
      inClean: 'boolean',
      slaveDns: 'boolean',
      recordLines: DescribeDomainInfoResponseRecordLines,
      dnsServers: DescribeDomainInfoResponseDnsServers,
      availableTtls: DescribeDomainInfoResponseAvailableTtls,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainGroupsRequest extends $tea.Model {
  lang?: string;
  keyWord?: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      keyWord: 'KeyWord',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      keyWord: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainGroupsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  domainGroups: DescribeDomainGroupsResponseDomainGroups;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      domainGroups: 'DomainGroups',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      domainGroups: DescribeDomainGroupsResponseDomainGroups,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDNSSLBSubDomainsRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName: string;
  pageNumber?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
      pageNumber: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDNSSLBSubDomainsResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  slbSubDomains: DescribeDNSSLBSubDomainsResponseSlbSubDomains;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      slbSubDomains: 'SlbSubDomains',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      slbSubDomains: DescribeDNSSLBSubDomainsResponseSlbSubDomains,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstancesRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  pageNumber?: number;
  pageSize?: number;
  versionCode?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      versionCode: 'VersionCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      versionCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstancesResponse extends $tea.Model {
  requestId: string;
  totalCount: number;
  pageNumber: number;
  pageSize: number;
  dnsProducts: DescribeDnsProductInstancesResponseDnsProducts;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      totalCount: 'TotalCount',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      dnsProducts: 'DnsProducts',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      totalCount: 'number',
      pageNumber: 'number',
      pageSize: 'number',
      dnsProducts: DescribeDnsProductInstancesResponseDnsProducts,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSubDomainRecordsRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName: string;
  RR: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
      RR: 'RR',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
      RR: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteSubDomainRecordsResponse extends $tea.Model {
  requestId: string;
  RR: string;
  totalCount: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      RR: 'RR',
      totalCount: 'TotalCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      RR: 'string',
      totalCount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainRecordRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  recordId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      recordId: 'RecordId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      recordId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainRecordResponse extends $tea.Model {
  requestId: string;
  recordId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordId: 'RecordId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainGroupRequest extends $tea.Model {
  lang?: string;
  groupId: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainGroupResponse extends $tea.Model {
  requestId: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteDomainResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeDomainOfDnsProductRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  instanceId: string;
  newDomain?: string;
  force?: boolean;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      instanceId: 'InstanceId',
      newDomain: 'NewDomain',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      instanceId: 'string',
      newDomain: 'string',
      force: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeDomainOfDnsProductResponse extends $tea.Model {
  requestId: string;
  originalDomain: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      originalDomain: 'OriginalDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      originalDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeDomainGroupRequest extends $tea.Model {
  lang?: string;
  domainName: string;
  groupId?: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      domainName: 'DomainName',
      groupId: 'GroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      domainName: 'string',
      groupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ChangeDomainGroupResponse extends $tea.Model {
  requestId: string;
  groupId: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groupId: 'GroupId',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groupId: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainRecordRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  userClientIp?: string;
  domainName: string;
  RR: string;
  type: string;
  value: string;
  TTL?: number;
  priority?: number;
  line?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      userClientIp: 'UserClientIp',
      domainName: 'DomainName',
      RR: 'RR',
      type: 'Type',
      value: 'Value',
      TTL: 'TTL',
      priority: 'Priority',
      line: 'Line',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      userClientIp: 'string',
      domainName: 'string',
      RR: 'string',
      type: 'string',
      value: 'string',
      TTL: 'number',
      priority: 'number',
      line: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainRecordResponse extends $tea.Model {
  requestId: string;
  recordId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      recordId: 'RecordId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      recordId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainGroupRequest extends $tea.Model {
  lang?: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      lang: 'Lang',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lang: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainGroupResponse extends $tea.Model {
  requestId: string;
  groupId: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      groupId: 'GroupId',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      groupId: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainRequest extends $tea.Model {
  accessKeyId?: string;
  lang?: string;
  domainName: string;
  groupId?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      lang: 'Lang',
      domainName: 'DomainName',
      groupId: 'GroupId',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      lang: 'string',
      domainName: 'string',
      groupId: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainResponse extends $tea.Model {
  requestId: string;
  domainId: string;
  domainName: string;
  punyCode: string;
  groupId: string;
  groupName: string;
  dnsServers: AddDomainResponseDnsServers;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainId: 'DomainId',
      domainName: 'DomainName',
      punyCode: 'PunyCode',
      groupId: 'GroupId',
      groupName: 'GroupName',
      dnsServers: 'DnsServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainId: 'string',
      domainName: 'string',
      punyCode: 'string',
      groupId: 'string',
      groupName: 'string',
      dnsServers: AddDomainResponseDnsServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTagResourcesRequestTag extends $tea.Model {
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

export class ListTagResourcesResponseTagResources extends $tea.Model {
  tagKey: string;
  tagValue: string;
  resourceId: string;
  resourceType: string;
  static names(): { [key: string]: string } {
    return {
      tagKey: 'TagKey',
      tagValue: 'TagValue',
      resourceId: 'ResourceId',
      resourceType: 'ResourceType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tagKey: 'string',
      tagValue: 'string',
      resourceId: 'string',
      resourceType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class TagResourcesRequestTag extends $tea.Model {
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

export class DescribeTagsResponseTags extends $tea.Model {
  key: string;
  static names(): { [key: string]: string } {
    return {
      key: 'Key',
    };
  }

  static types(): { [key: string]: any } {
    return {
      key: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTransferDomainsResponseDomainTransfersDomainTransfer extends $tea.Model {
  domainName: string;
  createTime: string;
  createTimestamp: number;
  fromUserId: number;
  targetUserId: number;
  id: number;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      fromUserId: 'FromUserId',
      targetUserId: 'TargetUserId',
      id: 'Id',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      fromUserId: 'number',
      targetUserId: 'number',
      id: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeTransferDomainsResponseDomainTransfers extends $tea.Model {
  domainTransfer: DescribeTransferDomainsResponseDomainTransfersDomainTransfer[];
  static names(): { [key: string]: string } {
    return {
      domainTransfer: 'DomainTransfer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainTransfer: { 'type': 'array', 'itemType': DescribeTransferDomainsResponseDomainTransfersDomainTransfer },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr extends $tea.Model {
  id: number;
  mode: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      mode: 'Mode',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      mode: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs extends $tea.Model {
  addr: DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr[];
  static names(): { [key: string]: string } {
    return {
      addr: 'Addr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addr: { 'type': 'array', 'itemType': DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrsAddr },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool extends $tea.Model {
  addrPoolId: string;
  addrPoolName: string;
  instanceId: string;
  addrs: DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs;
  static names(): { [key: string]: string } {
    return {
      addrPoolId: 'AddrPoolId',
      addrPoolName: 'AddrPoolName',
      instanceId: 'InstanceId',
      addrs: 'Addrs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPoolId: 'string',
      addrPoolName: 'string',
      instanceId: 'string',
      addrs: DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPoolAddrs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanResponseFaultAddrPools extends $tea.Model {
  faultAddrPool: DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool[];
  static names(): { [key: string]: string } {
    return {
      faultAddrPool: 'FaultAddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faultAddrPool: { 'type': 'array', 'itemType': DescribeGtmRecoveryPlanResponseFaultAddrPoolsFaultAddrPool },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan extends $tea.Model {
  recoveryPlanId: number;
  name: string;
  remark: string;
  faultAddrPoolNum: number;
  lastExecuteTime: string;
  lastExecuteTimestamp: number;
  lastRollbackTime: string;
  lastRollbackTimestamp: number;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  status: string;
  static names(): { [key: string]: string } {
    return {
      recoveryPlanId: 'RecoveryPlanId',
      name: 'Name',
      remark: 'Remark',
      faultAddrPoolNum: 'FaultAddrPoolNum',
      lastExecuteTime: 'LastExecuteTime',
      lastExecuteTimestamp: 'LastExecuteTimestamp',
      lastRollbackTime: 'LastRollbackTime',
      lastRollbackTimestamp: 'LastRollbackTimestamp',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recoveryPlanId: 'number',
      name: 'string',
      remark: 'string',
      faultAddrPoolNum: 'number',
      lastExecuteTime: 'string',
      lastExecuteTimestamp: 'number',
      lastRollbackTime: 'string',
      lastRollbackTimestamp: 'number',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlansResponseRecoveryPlans extends $tea.Model {
  recoveryPlan: DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan[];
  static names(): { [key: string]: string } {
    return {
      recoveryPlan: 'RecoveryPlan',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recoveryPlan: { 'type': 'array', 'itemType': DescribeGtmRecoveryPlansResponseRecoveryPlansRecoveryPlan },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool extends $tea.Model {
  addrPoolId: string;
  name: string;
  static names(): { [key: string]: string } {
    return {
      addrPoolId: 'AddrPoolId',
      name: 'Name',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPoolId: 'string',
      name: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools extends $tea.Model {
  addrPool: DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool[];
  static names(): { [key: string]: string } {
    return {
      addrPool: 'AddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPool: { 'type': 'array', 'itemType': DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPoolsAddrPool },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance extends $tea.Model {
  instanceId: string;
  instanceName: string;
  addrPools: DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      instanceName: 'InstanceName',
      addrPools: 'AddrPools',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      instanceName: 'string',
      addrPools: DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstanceAddrPools,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmRecoveryPlanAvailableConfigResponseInstances extends $tea.Model {
  instance: DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance[];
  static names(): { [key: string]: string } {
    return {
      instance: 'Instance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instance: { 'type': 'array', 'itemType': DescribeGtmRecoveryPlanAvailableConfigResponseInstancesInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo extends $tea.Model {
  strategyName: string;
  content: string;
  static names(): { [key: string]: string } {
    return {
      strategyName: 'StrategyName',
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      strategyName: 'string',
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos extends $tea.Model {
  switchInfo: PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo[];
  static names(): { [key: string]: string } {
    return {
      switchInfo: 'SwitchInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      switchInfo: { 'type': 'array', 'itemType': PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfosSwitchInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewGtmRecoveryPlanResponsePreviewsPreview extends $tea.Model {
  instanceId: string;
  name: string;
  userDomainName: string;
  switchInfos: PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      name: 'Name',
      userDomainName: 'UserDomainName',
      switchInfos: 'SwitchInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      name: 'string',
      userDomainName: 'string',
      switchInfos: PreviewGtmRecoveryPlanResponsePreviewsPreviewSwitchInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreviewGtmRecoveryPlanResponsePreviews extends $tea.Model {
  preview: PreviewGtmRecoveryPlanResponsePreviewsPreview[];
  static names(): { [key: string]: string } {
    return {
      preview: 'Preview',
    };
  }

  static types(): { [key: string]: any } {
    return {
      preview: { 'type': 'array', 'itemType': PreviewGtmRecoveryPlanResponsePreviewsPreview },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsResponseStatisticsStatistic extends $tea.Model {
  timestamp: number;
  count: number;
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'number',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsResponseStatistics extends $tea.Model {
  statistic: DescribeDomainStatisticsResponseStatisticsStatistic[];
  static names(): { [key: string]: string } {
    return {
      statistic: 'Statistic',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistic: { 'type': 'array', 'itemType': DescribeDomainStatisticsResponseStatisticsStatistic },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsResponseStatisticsStatistic extends $tea.Model {
  timestamp: number;
  count: number;
  static names(): { [key: string]: string } {
    return {
      timestamp: 'Timestamp',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timestamp: 'number',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsResponseStatistics extends $tea.Model {
  statistic: DescribeRecordStatisticsResponseStatisticsStatistic[];
  static names(): { [key: string]: string } {
    return {
      statistic: 'Statistic',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistic: { 'type': 'array', 'itemType': DescribeRecordStatisticsResponseStatisticsStatistic },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeInstanceDomainsResponseInstanceDomains extends $tea.Model {
  domainName: string;
  createTime: string;
  createTimestamp: number;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      createTime: 'string',
      createTimestamp: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCustomLineRequestIpSegment extends $tea.Model {
  startIp?: string;
  endIp?: string;
  static names(): { [key: string]: string } {
    return {
      startIp: 'StartIp',
      endIp: 'EndIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startIp: 'string',
      endIp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCustomLineRequestIpSegment extends $tea.Model {
  startIp?: string;
  endIp?: string;
  static names(): { [key: string]: string } {
    return {
      startIp: 'StartIp',
      endIp: 'EndIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startIp: 'string',
      endIp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomLineResponseIpSegmentList extends $tea.Model {
  name: string;
  startIp: string;
  endIp: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      startIp: 'StartIp',
      endIp: 'EndIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      startIp: 'string',
      endIp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeCustomLinesResponseCustomLines extends $tea.Model {
  id: number;
  name: string;
  createTime: string;
  createTimestamp: number;
  ipSegments: string;
  code: string;
  static names(): { [key: string]: string } {
    return {
      id: 'Id',
      name: 'Name',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      ipSegments: 'IpSegments',
      code: 'Code',
    };
  }

  static types(): { [key: string]: any } {
    return {
      id: 'number',
      name: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      ipSegments: 'string',
      code: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsSummaryResponseStatisticsStatistic extends $tea.Model {
  domainName: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainStatisticsSummaryResponseStatistics extends $tea.Model {
  statistic: DescribeDomainStatisticsSummaryResponseStatisticsStatistic[];
  static names(): { [key: string]: string } {
    return {
      statistic: 'Statistic',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistic: { 'type': 'array', 'itemType': DescribeDomainStatisticsSummaryResponseStatisticsStatistic },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsSummaryResponseStatisticsStatistic extends $tea.Model {
  subDomain: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      subDomain: 'SubDomain',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      subDomain: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordStatisticsSummaryResponseStatistics extends $tea.Model {
  statistic: DescribeRecordStatisticsSummaryResponseStatisticsStatistic[];
  static names(): { [key: string]: string } {
    return {
      statistic: 'Statistic',
    };
  }

  static types(): { [key: string]: any } {
    return {
      statistic: { 'type': 'array', 'itemType': DescribeRecordStatisticsSummaryResponseStatisticsStatistic },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class OperateBatchDomainRequestDomainRecordInfo extends $tea.Model {
  domain: string;
  type?: string;
  rr?: string;
  value?: string;
  ttl?: number;
  priority?: number;
  line?: string;
  newRr?: string;
  newType?: string;
  newValue?: string;
  static names(): { [key: string]: string } {
    return {
      domain: 'Domain',
      type: 'Type',
      rr: 'Rr',
      value: 'Value',
      ttl: 'Ttl',
      priority: 'Priority',
      line: 'Line',
      newRr: 'NewRr',
      newType: 'NewType',
      newValue: 'NewValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domain: 'string',
      type: 'string',
      rr: 'string',
      value: 'string',
      ttl: 'number',
      priority: 'number',
      line: 'string',
      newRr: 'string',
      newType: 'string',
      newValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail extends $tea.Model {
  domain: string;
  type: string;
  rr: string;
  value: string;
  status: boolean;
  reason: string;
  newRr: string;
  newValue: string;
  batchType: string;
  operateDateStr: string;
  line: string;
  priority: string;
  ttl: string;
  recordId: string;
  remark: string;
  rrStatus: string;
  static names(): { [key: string]: string } {
    return {
      domain: 'Domain',
      type: 'Type',
      rr: 'Rr',
      value: 'Value',
      status: 'Status',
      reason: 'Reason',
      newRr: 'NewRr',
      newValue: 'NewValue',
      batchType: 'BatchType',
      operateDateStr: 'OperateDateStr',
      line: 'Line',
      priority: 'Priority',
      ttl: 'Ttl',
      recordId: 'RecordId',
      remark: 'Remark',
      rrStatus: 'RrStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domain: 'string',
      type: 'string',
      rr: 'string',
      value: 'string',
      status: 'boolean',
      reason: 'string',
      newRr: 'string',
      newValue: 'string',
      batchType: 'string',
      operateDateStr: 'string',
      line: 'string',
      priority: 'string',
      ttl: 'string',
      recordId: 'string',
      remark: 'string',
      rrStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeBatchResultDetailResponseBatchResultDetails extends $tea.Model {
  batchResultDetail: DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail[];
  static names(): { [key: string]: string } {
    return {
      batchResultDetail: 'BatchResultDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      batchResultDetail: { 'type': 'array', 'itemType': DescribeBatchResultDetailResponseBatchResultDetailsBatchResultDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmLogsResponseLogsLog extends $tea.Model {
  operTime: string;
  operAction: string;
  entityType: string;
  entityId: string;
  entityName: string;
  operIp: string;
  operTimestamp: number;
  id: number;
  content: string;
  static names(): { [key: string]: string } {
    return {
      operTime: 'OperTime',
      operAction: 'OperAction',
      entityType: 'EntityType',
      entityId: 'EntityId',
      entityName: 'EntityName',
      operIp: 'OperIp',
      operTimestamp: 'OperTimestamp',
      id: 'Id',
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      operTime: 'string',
      operAction: 'string',
      entityType: 'string',
      entityId: 'string',
      entityName: 'string',
      operIp: 'string',
      operTimestamp: 'number',
      id: 'number',
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmLogsResponseLogs extends $tea.Model {
  log: DescribeGtmLogsResponseLogsLog[];
  static names(): { [key: string]: string } {
    return {
      log: 'Log',
    };
  }

  static types(): { [key: string]: any } {
    return {
      log: { 'type': 'array', 'itemType': DescribeGtmLogsResponseLogsLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmMonitorRequestIspCityNode extends $tea.Model {
  cityCode: string;
  ispCode: string;
  static names(): { [key: string]: string } {
    return {
      cityCode: 'CityCode',
      ispCode: 'IspCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cityCode: 'string',
      ispCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAddressPoolRequestAddr extends $tea.Model {
  value: string;
  lbaWeight: number;
  mode: string;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      lbaWeight: 'LbaWeight',
      mode: 'Mode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'string',
      lbaWeight: 'number',
      mode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddGtmAddressPoolRequestIspCityNode extends $tea.Model {
  cityCode?: string;
  ispCode?: string;
  static names(): { [key: string]: string } {
    return {
      cityCode: 'CityCode',
      ispCode: 'IspCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cityCode: 'string',
      ispCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstancesResponseGtmInstancesGtmInstance extends $tea.Model {
  instanceId: string;
  instanceName: string;
  cname: string;
  userDomainName: string;
  versionCode: string;
  ttl: number;
  lbaStrategy: string;
  createTime: string;
  createTimestamp: number;
  expireTime: string;
  expireTimestamp: number;
  alertGroup: string;
  cnameMode: string;
  accessStrategyNum: number;
  addressPoolNum: number;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      instanceName: 'InstanceName',
      cname: 'Cname',
      userDomainName: 'UserDomainName',
      versionCode: 'VersionCode',
      ttl: 'Ttl',
      lbaStrategy: 'LbaStrategy',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      expireTime: 'ExpireTime',
      expireTimestamp: 'ExpireTimestamp',
      alertGroup: 'AlertGroup',
      cnameMode: 'CnameMode',
      accessStrategyNum: 'AccessStrategyNum',
      addressPoolNum: 'AddressPoolNum',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      instanceName: 'string',
      cname: 'string',
      userDomainName: 'string',
      versionCode: 'string',
      ttl: 'number',
      lbaStrategy: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      expireTime: 'string',
      expireTimestamp: 'number',
      alertGroup: 'string',
      cnameMode: 'string',
      accessStrategyNum: 'number',
      addressPoolNum: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstancesResponseGtmInstances extends $tea.Model {
  gtmInstance: DescribeGtmInstancesResponseGtmInstancesGtmInstance[];
  static names(): { [key: string]: string } {
    return {
      gtmInstance: 'GtmInstance',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gtmInstance: { 'type': 'array', 'itemType': DescribeGtmInstancesResponseGtmInstancesGtmInstance },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine extends $tea.Model {
  lineCode: string;
  lineName: string;
  groupCode: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      lineCode: 'LineCode',
      lineName: 'LineName',
      groupCode: 'GroupCode',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineCode: 'string',
      lineName: 'string',
      groupCode: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategiesResponseStrategiesStrategyLines extends $tea.Model {
  line: DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine[];
  static names(): { [key: string]: string } {
    return {
      line: 'Line',
    };
  }

  static types(): { [key: string]: any } {
    return {
      line: { 'type': 'array', 'itemType': DescribeGtmAccessStrategiesResponseStrategiesStrategyLinesLine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategiesResponseStrategiesStrategy extends $tea.Model {
  strategyId: string;
  strategyName: string;
  createTime: string;
  createTimestamp: number;
  defaultAddrPoolId: string;
  defaultAddrPoolName: string;
  failoverAddrPoolId: string;
  failoverAddrPoolName: string;
  accessMode: string;
  accessStatus: string;
  strategyMode: string;
  instanceId: string;
  defaultAddrPoolStatus: string;
  failoverAddrPoolStatus: string;
  defaultAddrPoolMonitorStatus: string;
  failoverAddrPoolMonitorStatus: string;
  lines: DescribeGtmAccessStrategiesResponseStrategiesStrategyLines;
  static names(): { [key: string]: string } {
    return {
      strategyId: 'StrategyId',
      strategyName: 'StrategyName',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      defaultAddrPoolId: 'DefaultAddrPoolId',
      defaultAddrPoolName: 'DefaultAddrPoolName',
      failoverAddrPoolId: 'FailoverAddrPoolId',
      failoverAddrPoolName: 'FailoverAddrPoolName',
      accessMode: 'AccessMode',
      accessStatus: 'AccessStatus',
      strategyMode: 'StrategyMode',
      instanceId: 'InstanceId',
      defaultAddrPoolStatus: 'DefaultAddrPoolStatus',
      failoverAddrPoolStatus: 'FailoverAddrPoolStatus',
      defaultAddrPoolMonitorStatus: 'DefaultAddrPoolMonitorStatus',
      failoverAddrPoolMonitorStatus: 'FailoverAddrPoolMonitorStatus',
      lines: 'Lines',
    };
  }

  static types(): { [key: string]: any } {
    return {
      strategyId: 'string',
      strategyName: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      defaultAddrPoolId: 'string',
      defaultAddrPoolName: 'string',
      failoverAddrPoolId: 'string',
      failoverAddrPoolName: 'string',
      accessMode: 'string',
      accessStatus: 'string',
      strategyMode: 'string',
      instanceId: 'string',
      defaultAddrPoolStatus: 'string',
      failoverAddrPoolStatus: 'string',
      defaultAddrPoolMonitorStatus: 'string',
      failoverAddrPoolMonitorStatus: 'string',
      lines: DescribeGtmAccessStrategiesResponseStrategiesStrategyLines,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategiesResponseStrategies extends $tea.Model {
  strategy: DescribeGtmAccessStrategiesResponseStrategiesStrategy[];
  static names(): { [key: string]: string } {
    return {
      strategy: 'Strategy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      strategy: { 'type': 'array', 'itemType': DescribeGtmAccessStrategiesResponseStrategiesStrategy },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyResponseLinesLine extends $tea.Model {
  lineCode: string;
  lineName: string;
  groupCode: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      lineCode: 'LineCode',
      lineName: 'LineName',
      groupCode: 'GroupCode',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineCode: 'string',
      lineName: 'string',
      groupCode: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyResponseLines extends $tea.Model {
  line: DescribeGtmAccessStrategyResponseLinesLine[];
  static names(): { [key: string]: string } {
    return {
      line: 'Line',
    };
  }

  static types(): { [key: string]: any } {
    return {
      line: { 'type': 'array', 'itemType': DescribeGtmAccessStrategyResponseLinesLine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool extends $tea.Model {
  addrPoolId: string;
  addrPoolName: string;
  static names(): { [key: string]: string } {
    return {
      addrPoolId: 'AddrPoolId',
      addrPoolName: 'AddrPoolName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPoolId: 'string',
      addrPoolName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigResponseAddrPools extends $tea.Model {
  addrPool: DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool[];
  static names(): { [key: string]: string } {
    return {
      addrPool: 'AddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPool: { 'type': 'array', 'itemType': DescribeGtmAccessStrategyAvailableConfigResponseAddrPoolsAddrPool },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigResponseLinesLine extends $tea.Model {
  lineCode: string;
  lineName: string;
  groupCode: string;
  groupName: string;
  status: string;
  fatherCode: string;
  static names(): { [key: string]: string } {
    return {
      lineCode: 'LineCode',
      lineName: 'LineName',
      groupCode: 'GroupCode',
      groupName: 'GroupName',
      status: 'Status',
      fatherCode: 'FatherCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineCode: 'string',
      lineName: 'string',
      groupCode: 'string',
      groupName: 'string',
      status: 'string',
      fatherCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmAccessStrategyAvailableConfigResponseLines extends $tea.Model {
  line: DescribeGtmAccessStrategyAvailableConfigResponseLinesLine[];
  static names(): { [key: string]: string } {
    return {
      line: 'Line',
    };
  }

  static types(): { [key: string]: any } {
    return {
      line: { 'type': 'array', 'itemType': DescribeGtmAccessStrategyAvailableConfigResponseLinesLine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolResponseAddrsAddr extends $tea.Model {
  addrId: number;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  value: string;
  lbaWeight: number;
  mode: string;
  alertStatus: string;
  static names(): { [key: string]: string } {
    return {
      addrId: 'AddrId',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      value: 'Value',
      lbaWeight: 'LbaWeight',
      mode: 'Mode',
      alertStatus: 'AlertStatus',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrId: 'number',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      value: 'string',
      lbaWeight: 'number',
      mode: 'string',
      alertStatus: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolResponseAddrs extends $tea.Model {
  addr: DescribeGtmInstanceAddressPoolResponseAddrsAddr[];
  static names(): { [key: string]: string } {
    return {
      addr: 'Addr',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addr: { 'type': 'array', 'itemType': DescribeGtmInstanceAddressPoolResponseAddrsAddr },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool extends $tea.Model {
  addrPoolId: string;
  createTime: string;
  createTimestamp: number;
  updateTime: string;
  updateTimestamp: number;
  addrCount: number;
  minAvailableAddrNum: number;
  monitorConfigId: string;
  monitorStatus: string;
  name: string;
  status: string;
  type: string;
  static names(): { [key: string]: string } {
    return {
      addrPoolId: 'AddrPoolId',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      updateTime: 'UpdateTime',
      updateTimestamp: 'UpdateTimestamp',
      addrCount: 'AddrCount',
      minAvailableAddrNum: 'MinAvailableAddrNum',
      monitorConfigId: 'MonitorConfigId',
      monitorStatus: 'MonitorStatus',
      name: 'Name',
      status: 'Status',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPoolId: 'string',
      createTime: 'string',
      createTimestamp: 'number',
      updateTime: 'string',
      updateTimestamp: 'number',
      addrCount: 'number',
      minAvailableAddrNum: 'number',
      monitorConfigId: 'string',
      monitorStatus: 'string',
      name: 'string',
      status: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmInstanceAddressPoolsResponseAddrPools extends $tea.Model {
  addrPool: DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool[];
  static names(): { [key: string]: string } {
    return {
      addrPool: 'AddrPool',
    };
  }

  static types(): { [key: string]: any } {
    return {
      addrPool: { 'type': 'array', 'itemType': DescribeGtmInstanceAddressPoolsResponseAddrPoolsAddrPool },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode extends $tea.Model {
  ispName: string;
  ispCode: string;
  cityName: string;
  cityCode: string;
  defaultSelected: boolean;
  mainland: boolean;
  groupType: string;
  groupName: string;
  static names(): { [key: string]: string } {
    return {
      ispName: 'IspName',
      ispCode: 'IspCode',
      cityName: 'CityName',
      cityCode: 'CityCode',
      defaultSelected: 'DefaultSelected',
      mainland: 'Mainland',
      groupType: 'GroupType',
      groupName: 'GroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ispName: 'string',
      ispCode: 'string',
      cityName: 'string',
      cityCode: 'string',
      defaultSelected: 'boolean',
      mainland: 'boolean',
      groupType: 'string',
      groupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorAvailableConfigResponseIspCityNodes extends $tea.Model {
  ispCityNode: DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode[];
  static names(): { [key: string]: string } {
    return {
      ispCityNode: 'IspCityNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ispCityNode: { 'type': 'array', 'itemType': DescribeGtmMonitorAvailableConfigResponseIspCityNodesIspCityNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode extends $tea.Model {
  countryName: string;
  countryCode: string;
  cityName: string;
  cityCode: string;
  ispCode: string;
  ispName: string;
  static names(): { [key: string]: string } {
    return {
      countryName: 'CountryName',
      countryCode: 'CountryCode',
      cityName: 'CityName',
      cityCode: 'CityCode',
      ispCode: 'IspCode',
      ispName: 'IspName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      countryName: 'string',
      countryCode: 'string',
      cityName: 'string',
      cityCode: 'string',
      ispCode: 'string',
      ispName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeGtmMonitorConfigResponseIspCityNodes extends $tea.Model {
  ispCityNode: DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode[];
  static names(): { [key: string]: string } {
    return {
      ispCityNode: 'IspCityNode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ispCityNode: { 'type': 'array', 'itemType': DescribeGtmMonitorConfigResponseIspCityNodesIspCityNode },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmAddressPoolRequestAddr extends $tea.Model {
  value: string;
  lbaWeight: number;
  mode: string;
  static names(): { [key: string]: string } {
    return {
      value: 'Value',
      lbaWeight: 'LbaWeight',
      mode: 'Mode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      value: 'string',
      lbaWeight: 'number',
      mode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateGtmMonitorRequestIspCityNode extends $tea.Model {
  cityCode: string;
  ispCode: string;
  static names(): { [key: string]: string } {
    return {
      cityCode: 'CityCode',
      ispCode: 'IspCode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cityCode: 'string',
      ispCode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSupportLinesResponseRecordLinesRecordLine extends $tea.Model {
  lineCode: string;
  fatherCode: string;
  lineName: string;
  lineDisplayName: string;
  static names(): { [key: string]: string } {
    return {
      lineCode: 'LineCode',
      fatherCode: 'FatherCode',
      lineName: 'LineName',
      lineDisplayName: 'LineDisplayName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineCode: 'string',
      fatherCode: 'string',
      lineName: 'string',
      lineDisplayName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSupportLinesResponseRecordLines extends $tea.Model {
  recordLine: DescribeSupportLinesResponseRecordLinesRecordLine[];
  static names(): { [key: string]: string } {
    return {
      recordLine: 'RecordLine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recordLine: { 'type': 'array', 'itemType': DescribeSupportLinesResponseRecordLinesRecordLine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainNsResponseDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainNsResponseExpectDnsServers extends $tea.Model {
  expectDnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      expectDnsServer: 'ExpectDnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      expectDnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstanceResponseDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHichinaDomainDNSResponseOriginalDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ModifyHichinaDomainDNSResponseNewDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSubDomainRecordsResponseDomainRecordsRecord extends $tea.Model {
  domainName: string;
  recordId: string;
  RR: string;
  type: string;
  value: string;
  TTL: number;
  priority: number;
  line: string;
  status: string;
  locked: boolean;
  weight: number;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      recordId: 'RecordId',
      RR: 'RR',
      type: 'Type',
      value: 'Value',
      TTL: 'TTL',
      priority: 'Priority',
      line: 'Line',
      status: 'Status',
      locked: 'Locked',
      weight: 'Weight',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      recordId: 'string',
      RR: 'string',
      type: 'string',
      value: 'string',
      TTL: 'number',
      priority: 'number',
      line: 'string',
      status: 'string',
      locked: 'boolean',
      weight: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeSubDomainRecordsResponseDomainRecords extends $tea.Model {
  record: DescribeSubDomainRecordsResponseDomainRecordsRecord[];
  static names(): { [key: string]: string } {
    return {
      record: 'Record',
    };
  }

  static types(): { [key: string]: any } {
    return {
      record: { 'type': 'array', 'itemType': DescribeSubDomainRecordsResponseDomainRecordsRecord },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordLogsResponseRecordLogsRecordLog extends $tea.Model {
  actionTime: string;
  actionTimestamp: number;
  action: string;
  message: string;
  clientIp: string;
  static names(): { [key: string]: string } {
    return {
      actionTime: 'ActionTime',
      actionTimestamp: 'ActionTimestamp',
      action: 'Action',
      message: 'Message',
      clientIp: 'ClientIp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      actionTime: 'string',
      actionTimestamp: 'number',
      action: 'string',
      message: 'string',
      clientIp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeRecordLogsResponseRecordLogs extends $tea.Model {
  recordLog: DescribeRecordLogsResponseRecordLogsRecordLog[];
  static names(): { [key: string]: string } {
    return {
      recordLog: 'RecordLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recordLog: { 'type': 'array', 'itemType': DescribeRecordLogsResponseRecordLogsRecordLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsResponseDomainsDomainTagsTag extends $tea.Model {
  key: string;
  value: string;
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

export class DescribeDomainsResponseDomainsDomainTags extends $tea.Model {
  tag: DescribeDomainsResponseDomainsDomainTagsTag[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: { 'type': 'array', 'itemType': DescribeDomainsResponseDomainsDomainTagsTag },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsResponseDomainsDomainDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsResponseDomainsDomain extends $tea.Model {
  domainId: string;
  domainName: string;
  punyCode: string;
  aliDomain: boolean;
  recordCount: number;
  registrantEmail: string;
  remark: string;
  groupId: string;
  groupName: string;
  instanceId: string;
  versionCode: string;
  versionName: string;
  instanceEndTime: string;
  instanceExpired: boolean;
  starmark: boolean;
  createTime: string;
  createTimestamp: number;
  tags: DescribeDomainsResponseDomainsDomainTags;
  dnsServers: DescribeDomainsResponseDomainsDomainDnsServers;
  static names(): { [key: string]: string } {
    return {
      domainId: 'DomainId',
      domainName: 'DomainName',
      punyCode: 'PunyCode',
      aliDomain: 'AliDomain',
      recordCount: 'RecordCount',
      registrantEmail: 'RegistrantEmail',
      remark: 'Remark',
      groupId: 'GroupId',
      groupName: 'GroupName',
      instanceId: 'InstanceId',
      versionCode: 'VersionCode',
      versionName: 'VersionName',
      instanceEndTime: 'InstanceEndTime',
      instanceExpired: 'InstanceExpired',
      starmark: 'Starmark',
      createTime: 'CreateTime',
      createTimestamp: 'CreateTimestamp',
      tags: 'Tags',
      dnsServers: 'DnsServers',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainId: 'string',
      domainName: 'string',
      punyCode: 'string',
      aliDomain: 'boolean',
      recordCount: 'number',
      registrantEmail: 'string',
      remark: 'string',
      groupId: 'string',
      groupName: 'string',
      instanceId: 'string',
      versionCode: 'string',
      versionName: 'string',
      instanceEndTime: 'string',
      instanceExpired: 'boolean',
      starmark: 'boolean',
      createTime: 'string',
      createTimestamp: 'number',
      tags: DescribeDomainsResponseDomainsDomainTags,
      dnsServers: DescribeDomainsResponseDomainsDomainDnsServers,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainsResponseDomains extends $tea.Model {
  domain: DescribeDomainsResponseDomainsDomain[];
  static names(): { [key: string]: string } {
    return {
      domain: 'Domain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domain: { 'type': 'array', 'itemType': DescribeDomainsResponseDomainsDomain },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordsResponseDomainRecordsRecord extends $tea.Model {
  domainName: string;
  recordId: string;
  RR: string;
  type: string;
  value: string;
  TTL: number;
  priority: number;
  line: string;
  status: string;
  locked: boolean;
  weight: number;
  remark: string;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      recordId: 'RecordId',
      RR: 'RR',
      type: 'Type',
      value: 'Value',
      TTL: 'TTL',
      priority: 'Priority',
      line: 'Line',
      status: 'Status',
      locked: 'Locked',
      weight: 'Weight',
      remark: 'Remark',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      recordId: 'string',
      RR: 'string',
      type: 'string',
      value: 'string',
      TTL: 'number',
      priority: 'number',
      line: 'string',
      status: 'string',
      locked: 'boolean',
      weight: 'number',
      remark: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainRecordsResponseDomainRecords extends $tea.Model {
  record: DescribeDomainRecordsResponseDomainRecordsRecord[];
  static names(): { [key: string]: string } {
    return {
      record: 'Record',
    };
  }

  static types(): { [key: string]: any } {
    return {
      record: { 'type': 'array', 'itemType': DescribeDomainRecordsResponseDomainRecordsRecord },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainLogsResponseDomainLogsDomainLog extends $tea.Model {
  actionTime: string;
  actionTimestamp: number;
  domainName: string;
  action: string;
  message: string;
  clientIp: string;
  zoneId: string;
  static names(): { [key: string]: string } {
    return {
      actionTime: 'ActionTime',
      actionTimestamp: 'ActionTimestamp',
      domainName: 'DomainName',
      action: 'Action',
      message: 'Message',
      clientIp: 'ClientIp',
      zoneId: 'ZoneId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      actionTime: 'string',
      actionTimestamp: 'number',
      domainName: 'string',
      action: 'string',
      message: 'string',
      clientIp: 'string',
      zoneId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainLogsResponseDomainLogs extends $tea.Model {
  domainLog: DescribeDomainLogsResponseDomainLogsDomainLog[];
  static names(): { [key: string]: string } {
    return {
      domainLog: 'DomainLog',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainLog: { 'type': 'array', 'itemType': DescribeDomainLogsResponseDomainLogsDomainLog },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoResponseRecordLinesRecordLine extends $tea.Model {
  lineCode: string;
  fatherCode: string;
  lineName: string;
  lineDisplayName: string;
  static names(): { [key: string]: string } {
    return {
      lineCode: 'LineCode',
      fatherCode: 'FatherCode',
      lineName: 'LineName',
      lineDisplayName: 'LineDisplayName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      lineCode: 'string',
      fatherCode: 'string',
      lineName: 'string',
      lineDisplayName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoResponseRecordLines extends $tea.Model {
  recordLine: DescribeDomainInfoResponseRecordLinesRecordLine[];
  static names(): { [key: string]: string } {
    return {
      recordLine: 'RecordLine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      recordLine: { 'type': 'array', 'itemType': DescribeDomainInfoResponseRecordLinesRecordLine },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoResponseDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainInfoResponseAvailableTtls extends $tea.Model {
  availableTtl: string[];
  static names(): { [key: string]: string } {
    return {
      availableTtl: 'AvailableTtl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      availableTtl: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainGroupsResponseDomainGroupsDomainGroup extends $tea.Model {
  groupId: string;
  groupName: string;
  domainCount: number;
  static names(): { [key: string]: string } {
    return {
      groupId: 'GroupId',
      groupName: 'GroupName',
      domainCount: 'DomainCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      groupId: 'string',
      groupName: 'string',
      domainCount: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDomainGroupsResponseDomainGroups extends $tea.Model {
  domainGroup: DescribeDomainGroupsResponseDomainGroupsDomainGroup[];
  static names(): { [key: string]: string } {
    return {
      domainGroup: 'DomainGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainGroup: { 'type': 'array', 'itemType': DescribeDomainGroupsResponseDomainGroupsDomainGroup },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain extends $tea.Model {
  subDomain: string;
  recordCount: number;
  open: boolean;
  type: string;
  static names(): { [key: string]: string } {
    return {
      subDomain: 'SubDomain',
      recordCount: 'RecordCount',
      open: 'Open',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      subDomain: 'string',
      recordCount: 'number',
      open: 'boolean',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDNSSLBSubDomainsResponseSlbSubDomains extends $tea.Model {
  slbSubDomain: DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain[];
  static names(): { [key: string]: string } {
    return {
      slbSubDomain: 'SlbSubDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      slbSubDomain: { 'type': 'array', 'itemType': DescribeDNSSLBSubDomainsResponseSlbSubDomainsSlbSubDomain },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstancesResponseDnsProductsDnsProduct extends $tea.Model {
  instanceId: string;
  versionCode: string;
  versionName: string;
  startTime: string;
  endTime: string;
  startTimestamp: number;
  endTimestamp: number;
  domain: string;
  bindCount: number;
  bindUsedCount: number;
  TTLMinValue: number;
  subDomainLevel: number;
  dnsSLBCount: number;
  URLForwardCount: number;
  DDosDefendFlow: number;
  DDosDefendQuery: number;
  overseaDDosDefendFlow: number;
  searchEngineLines: string;
  ISPLines: string;
  ISPRegionLines: string;
  overseaLine: string;
  monitorNodeCount: number;
  monitorFrequency: number;
  monitorTaskCount: number;
  regionLines: boolean;
  gslb: boolean;
  inClean: boolean;
  inBlackHole: boolean;
  bindDomainCount: number;
  bindDomainUsedCount: number;
  dnsSecurity: string;
  static names(): { [key: string]: string } {
    return {
      instanceId: 'InstanceId',
      versionCode: 'VersionCode',
      versionName: 'VersionName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      startTimestamp: 'StartTimestamp',
      endTimestamp: 'EndTimestamp',
      domain: 'Domain',
      bindCount: 'BindCount',
      bindUsedCount: 'BindUsedCount',
      TTLMinValue: 'TTLMinValue',
      subDomainLevel: 'SubDomainLevel',
      dnsSLBCount: 'DnsSLBCount',
      URLForwardCount: 'URLForwardCount',
      DDosDefendFlow: 'DDosDefendFlow',
      DDosDefendQuery: 'DDosDefendQuery',
      overseaDDosDefendFlow: 'OverseaDDosDefendFlow',
      searchEngineLines: 'SearchEngineLines',
      ISPLines: 'ISPLines',
      ISPRegionLines: 'ISPRegionLines',
      overseaLine: 'OverseaLine',
      monitorNodeCount: 'MonitorNodeCount',
      monitorFrequency: 'MonitorFrequency',
      monitorTaskCount: 'MonitorTaskCount',
      regionLines: 'RegionLines',
      gslb: 'Gslb',
      inClean: 'InClean',
      inBlackHole: 'InBlackHole',
      bindDomainCount: 'BindDomainCount',
      bindDomainUsedCount: 'BindDomainUsedCount',
      dnsSecurity: 'DnsSecurity',
    };
  }

  static types(): { [key: string]: any } {
    return {
      instanceId: 'string',
      versionCode: 'string',
      versionName: 'string',
      startTime: 'string',
      endTime: 'string',
      startTimestamp: 'number',
      endTimestamp: 'number',
      domain: 'string',
      bindCount: 'number',
      bindUsedCount: 'number',
      TTLMinValue: 'number',
      subDomainLevel: 'number',
      dnsSLBCount: 'number',
      URLForwardCount: 'number',
      DDosDefendFlow: 'number',
      DDosDefendQuery: 'number',
      overseaDDosDefendFlow: 'number',
      searchEngineLines: 'string',
      ISPLines: 'string',
      ISPRegionLines: 'string',
      overseaLine: 'string',
      monitorNodeCount: 'number',
      monitorFrequency: 'number',
      monitorTaskCount: 'number',
      regionLines: 'boolean',
      gslb: 'boolean',
      inClean: 'boolean',
      inBlackHole: 'boolean',
      bindDomainCount: 'number',
      bindDomainUsedCount: 'number',
      dnsSecurity: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeDnsProductInstancesResponseDnsProducts extends $tea.Model {
  dnsProduct: DescribeDnsProductInstancesResponseDnsProductsDnsProduct[];
  static names(): { [key: string]: string } {
    return {
      dnsProduct: 'DnsProduct',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsProduct: { 'type': 'array', 'itemType': DescribeDnsProductInstancesResponseDnsProductsDnsProduct },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddDomainResponseDnsServers extends $tea.Model {
  dnsServer: string[];
  static names(): { [key: string]: string } {
    return {
      dnsServer: 'DnsServer',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dnsServer: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}


export default class Client extends RPC {

  constructor(config: $RPC.Config) {
    super(config);
    this._endpointRule = "central";
    this.checkConfig(config);
    this._endpoint = this.getEndpoint("alidns", this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async listTagResourcesWithOptions(request: ListTagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<ListTagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTagResourcesResponse>(await this.doRequest("ListTagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new ListTagResourcesResponse({}));
  }

  async listTagResources(request: ListTagResourcesRequest): Promise<ListTagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTagResourcesWithOptions(request, runtime);
  }

  async tagResourcesWithOptions(request: TagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<TagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<TagResourcesResponse>(await this.doRequest("TagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new TagResourcesResponse({}));
  }

  async tagResources(request: TagResourcesRequest): Promise<TagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.tagResourcesWithOptions(request, runtime);
  }

  async untagResourcesWithOptions(request: UntagResourcesRequest, runtime: $Util.RuntimeOptions): Promise<UntagResourcesResponse> {
    Util.validateModel(request);
    return $tea.cast<UntagResourcesResponse>(await this.doRequest("UntagResources", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UntagResourcesResponse({}));
  }

  async untagResources(request: UntagResourcesRequest): Promise<UntagResourcesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.untagResourcesWithOptions(request, runtime);
  }

  async describeTagsWithOptions(request: DescribeTagsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTagsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTagsResponse>(await this.doRequest("DescribeTags", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeTagsResponse({}));
  }

  async describeTags(request: DescribeTagsRequest): Promise<DescribeTagsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTagsWithOptions(request, runtime);
  }

  async copyGtmConfigWithOptions(request: CopyGtmConfigRequest, runtime: $Util.RuntimeOptions): Promise<CopyGtmConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<CopyGtmConfigResponse>(await this.doRequest("CopyGtmConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new CopyGtmConfigResponse({}));
  }

  async copyGtmConfig(request: CopyGtmConfigRequest): Promise<CopyGtmConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.copyGtmConfigWithOptions(request, runtime);
  }

  async describeDomainDnssecInfoWithOptions(request: DescribeDomainDnssecInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainDnssecInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainDnssecInfoResponse>(await this.doRequest("DescribeDomainDnssecInfo", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainDnssecInfoResponse({}));
  }

  async describeDomainDnssecInfo(request: DescribeDomainDnssecInfoRequest): Promise<DescribeDomainDnssecInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainDnssecInfoWithOptions(request, runtime);
  }

  async setDomainDnssecStatusWithOptions(request: SetDomainDnssecStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetDomainDnssecStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDomainDnssecStatusResponse>(await this.doRequest("SetDomainDnssecStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new SetDomainDnssecStatusResponse({}));
  }

  async setDomainDnssecStatus(request: SetDomainDnssecStatusRequest): Promise<SetDomainDnssecStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDomainDnssecStatusWithOptions(request, runtime);
  }

  async transferDomainWithOptions(request: TransferDomainRequest, runtime: $Util.RuntimeOptions): Promise<TransferDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<TransferDomainResponse>(await this.doRequest("TransferDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new TransferDomainResponse({}));
  }

  async transferDomain(request: TransferDomainRequest): Promise<TransferDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.transferDomainWithOptions(request, runtime);
  }

  async describeTransferDomainsWithOptions(request: DescribeTransferDomainsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeTransferDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeTransferDomainsResponse>(await this.doRequest("DescribeTransferDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeTransferDomainsResponse({}));
  }

  async describeTransferDomains(request: DescribeTransferDomainsRequest): Promise<DescribeTransferDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeTransferDomainsWithOptions(request, runtime);
  }

  async addDomainBackupWithOptions(request: AddDomainBackupRequest, runtime: $Util.RuntimeOptions): Promise<AddDomainBackupResponse> {
    Util.validateModel(request);
    return $tea.cast<AddDomainBackupResponse>(await this.doRequest("AddDomainBackup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddDomainBackupResponse({}));
  }

  async addDomainBackup(request: AddDomainBackupRequest): Promise<AddDomainBackupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addDomainBackupWithOptions(request, runtime);
  }

  async retrieveDomainWithOptions(request: RetrieveDomainRequest, runtime: $Util.RuntimeOptions): Promise<RetrieveDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<RetrieveDomainResponse>(await this.doRequest("RetrieveDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new RetrieveDomainResponse({}));
  }

  async retrieveDomain(request: RetrieveDomainRequest): Promise<RetrieveDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.retrieveDomainWithOptions(request, runtime);
  }

  async describeGtmRecoveryPlanWithOptions(request: DescribeGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmRecoveryPlanResponse>(await this.doRequest("DescribeGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmRecoveryPlanResponse({}));
  }

  async describeGtmRecoveryPlan(request: DescribeGtmRecoveryPlanRequest): Promise<DescribeGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmRecoveryPlanWithOptions(request, runtime);
  }

  async addGtmRecoveryPlanWithOptions(request: AddGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<AddGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGtmRecoveryPlanResponse>(await this.doRequest("AddGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddGtmRecoveryPlanResponse({}));
  }

  async addGtmRecoveryPlan(request: AddGtmRecoveryPlanRequest): Promise<AddGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGtmRecoveryPlanWithOptions(request, runtime);
  }

  async updateGtmRecoveryPlanWithOptions(request: UpdateGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGtmRecoveryPlanResponse>(await this.doRequest("UpdateGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateGtmRecoveryPlanResponse({}));
  }

  async updateGtmRecoveryPlan(request: UpdateGtmRecoveryPlanRequest): Promise<UpdateGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGtmRecoveryPlanWithOptions(request, runtime);
  }

  async deleteGtmRecoveryPlanWithOptions(request: DeleteGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGtmRecoveryPlanResponse>(await this.doRequest("DeleteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteGtmRecoveryPlanResponse({}));
  }

  async deleteGtmRecoveryPlan(request: DeleteGtmRecoveryPlanRequest): Promise<DeleteGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGtmRecoveryPlanWithOptions(request, runtime);
  }

  async describeGtmRecoveryPlansWithOptions(request: DescribeGtmRecoveryPlansRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmRecoveryPlansResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmRecoveryPlansResponse>(await this.doRequest("DescribeGtmRecoveryPlans", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmRecoveryPlansResponse({}));
  }

  async describeGtmRecoveryPlans(request: DescribeGtmRecoveryPlansRequest): Promise<DescribeGtmRecoveryPlansResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmRecoveryPlansWithOptions(request, runtime);
  }

  async describeGtmRecoveryPlanAvailableConfigWithOptions(request: DescribeGtmRecoveryPlanAvailableConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmRecoveryPlanAvailableConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmRecoveryPlanAvailableConfigResponse>(await this.doRequest("DescribeGtmRecoveryPlanAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmRecoveryPlanAvailableConfigResponse({}));
  }

  async describeGtmRecoveryPlanAvailableConfig(request: DescribeGtmRecoveryPlanAvailableConfigRequest): Promise<DescribeGtmRecoveryPlanAvailableConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmRecoveryPlanAvailableConfigWithOptions(request, runtime);
  }

  async executeGtmRecoveryPlanWithOptions(request: ExecuteGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<ExecuteGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<ExecuteGtmRecoveryPlanResponse>(await this.doRequest("ExecuteGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new ExecuteGtmRecoveryPlanResponse({}));
  }

  async executeGtmRecoveryPlan(request: ExecuteGtmRecoveryPlanRequest): Promise<ExecuteGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.executeGtmRecoveryPlanWithOptions(request, runtime);
  }

  async rollbackGtmRecoveryPlanWithOptions(request: RollbackGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<RollbackGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<RollbackGtmRecoveryPlanResponse>(await this.doRequest("RollbackGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new RollbackGtmRecoveryPlanResponse({}));
  }

  async rollbackGtmRecoveryPlan(request: RollbackGtmRecoveryPlanRequest): Promise<RollbackGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.rollbackGtmRecoveryPlanWithOptions(request, runtime);
  }

  async previewGtmRecoveryPlanWithOptions(request: PreviewGtmRecoveryPlanRequest, runtime: $Util.RuntimeOptions): Promise<PreviewGtmRecoveryPlanResponse> {
    Util.validateModel(request);
    return $tea.cast<PreviewGtmRecoveryPlanResponse>(await this.doRequest("PreviewGtmRecoveryPlan", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new PreviewGtmRecoveryPlanResponse({}));
  }

  async previewGtmRecoveryPlan(request: PreviewGtmRecoveryPlanRequest): Promise<PreviewGtmRecoveryPlanResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.previewGtmRecoveryPlanWithOptions(request, runtime);
  }

  async getTxtRecordForVerifyWithOptions(request: GetTxtRecordForVerifyRequest, runtime: $Util.RuntimeOptions): Promise<GetTxtRecordForVerifyResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTxtRecordForVerifyResponse>(await this.doRequest("GetTxtRecordForVerify", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new GetTxtRecordForVerifyResponse({}));
  }

  async getTxtRecordForVerify(request: GetTxtRecordForVerifyRequest): Promise<GetTxtRecordForVerifyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTxtRecordForVerifyWithOptions(request, runtime);
  }

  async describeDomainStatisticsWithOptions(request: DescribeDomainStatisticsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainStatisticsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainStatisticsResponse>(await this.doRequest("DescribeDomainStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainStatisticsResponse({}));
  }

  async describeDomainStatistics(request: DescribeDomainStatisticsRequest): Promise<DescribeDomainStatisticsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainStatisticsWithOptions(request, runtime);
  }

  async describeRecordStatisticsWithOptions(request: DescribeRecordStatisticsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRecordStatisticsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRecordStatisticsResponse>(await this.doRequest("DescribeRecordStatistics", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeRecordStatisticsResponse({}));
  }

  async describeRecordStatistics(request: DescribeRecordStatisticsRequest): Promise<DescribeRecordStatisticsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRecordStatisticsWithOptions(request, runtime);
  }

  async describeGtmInstanceSystemCnameWithOptions(request: DescribeGtmInstanceSystemCnameRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstanceSystemCnameResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstanceSystemCnameResponse>(await this.doRequest("DescribeGtmInstanceSystemCname", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstanceSystemCnameResponse({}));
  }

  async describeGtmInstanceSystemCname(request: DescribeGtmInstanceSystemCnameRequest): Promise<DescribeGtmInstanceSystemCnameResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstanceSystemCnameWithOptions(request, runtime);
  }

  async describeInstanceDomainsWithOptions(request: DescribeInstanceDomainsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeInstanceDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeInstanceDomainsResponse>(await this.doRequest("DescribeInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeInstanceDomainsResponse({}));
  }

  async describeInstanceDomains(request: DescribeInstanceDomainsRequest): Promise<DescribeInstanceDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeInstanceDomainsWithOptions(request, runtime);
  }

  async bindInstanceDomainsWithOptions(request: BindInstanceDomainsRequest, runtime: $Util.RuntimeOptions): Promise<BindInstanceDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<BindInstanceDomainsResponse>(await this.doRequest("BindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new BindInstanceDomainsResponse({}));
  }

  async bindInstanceDomains(request: BindInstanceDomainsRequest): Promise<BindInstanceDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.bindInstanceDomainsWithOptions(request, runtime);
  }

  async unbindInstanceDomainsWithOptions(request: UnbindInstanceDomainsRequest, runtime: $Util.RuntimeOptions): Promise<UnbindInstanceDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<UnbindInstanceDomainsResponse>(await this.doRequest("UnbindInstanceDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UnbindInstanceDomainsResponse({}));
  }

  async unbindInstanceDomains(request: UnbindInstanceDomainsRequest): Promise<UnbindInstanceDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.unbindInstanceDomainsWithOptions(request, runtime);
  }

  async updateCustomLineWithOptions(request: UpdateCustomLineRequest, runtime: $Util.RuntimeOptions): Promise<UpdateCustomLineResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateCustomLineResponse>(await this.doRequest("UpdateCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateCustomLineResponse({}));
  }

  async updateCustomLine(request: UpdateCustomLineRequest): Promise<UpdateCustomLineResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateCustomLineWithOptions(request, runtime);
  }

  async addCustomLineWithOptions(request: AddCustomLineRequest, runtime: $Util.RuntimeOptions): Promise<AddCustomLineResponse> {
    Util.validateModel(request);
    return $tea.cast<AddCustomLineResponse>(await this.doRequest("AddCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddCustomLineResponse({}));
  }

  async addCustomLine(request: AddCustomLineRequest): Promise<AddCustomLineResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addCustomLineWithOptions(request, runtime);
  }

  async deleteCustomLinesWithOptions(request: DeleteCustomLinesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCustomLinesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCustomLinesResponse>(await this.doRequest("DeleteCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteCustomLinesResponse({}));
  }

  async deleteCustomLines(request: DeleteCustomLinesRequest): Promise<DeleteCustomLinesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCustomLinesWithOptions(request, runtime);
  }

  async describeCustomLineWithOptions(request: DescribeCustomLineRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomLineResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomLineResponse>(await this.doRequest("DescribeCustomLine", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeCustomLineResponse({}));
  }

  async describeCustomLine(request: DescribeCustomLineRequest): Promise<DescribeCustomLineResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomLineWithOptions(request, runtime);
  }

  async describeCustomLinesWithOptions(request: DescribeCustomLinesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeCustomLinesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeCustomLinesResponse>(await this.doRequest("DescribeCustomLines", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeCustomLinesResponse({}));
  }

  async describeCustomLines(request: DescribeCustomLinesRequest): Promise<DescribeCustomLinesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeCustomLinesWithOptions(request, runtime);
  }

  async describeDomainStatisticsSummaryWithOptions(request: DescribeDomainStatisticsSummaryRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainStatisticsSummaryResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainStatisticsSummaryResponse>(await this.doRequest("DescribeDomainStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainStatisticsSummaryResponse({}));
  }

  async describeDomainStatisticsSummary(request: DescribeDomainStatisticsSummaryRequest): Promise<DescribeDomainStatisticsSummaryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainStatisticsSummaryWithOptions(request, runtime);
  }

  async describeRecordStatisticsSummaryWithOptions(request: DescribeRecordStatisticsSummaryRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRecordStatisticsSummaryResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRecordStatisticsSummaryResponse>(await this.doRequest("DescribeRecordStatisticsSummary", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeRecordStatisticsSummaryResponse({}));
  }

  async describeRecordStatisticsSummary(request: DescribeRecordStatisticsSummaryRequest): Promise<DescribeRecordStatisticsSummaryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRecordStatisticsSummaryWithOptions(request, runtime);
  }

  async operateBatchDomainWithOptions(request: OperateBatchDomainRequest, runtime: $Util.RuntimeOptions): Promise<OperateBatchDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<OperateBatchDomainResponse>(await this.doRequest("OperateBatchDomain", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new OperateBatchDomainResponse({}));
  }

  async operateBatchDomain(request: OperateBatchDomainRequest): Promise<OperateBatchDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.operateBatchDomainWithOptions(request, runtime);
  }

  async describeBatchResultDetailWithOptions(request: DescribeBatchResultDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBatchResultDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBatchResultDetailResponse>(await this.doRequest("DescribeBatchResultDetail", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeBatchResultDetailResponse({}));
  }

  async describeBatchResultDetail(request: DescribeBatchResultDetailRequest): Promise<DescribeBatchResultDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBatchResultDetailWithOptions(request, runtime);
  }

  async describeBatchResultCountWithOptions(request: DescribeBatchResultCountRequest, runtime: $Util.RuntimeOptions): Promise<DescribeBatchResultCountResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeBatchResultCountResponse>(await this.doRequest("DescribeBatchResultCount", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeBatchResultCountResponse({}));
  }

  async describeBatchResultCount(request: DescribeBatchResultCountRequest): Promise<DescribeBatchResultCountResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeBatchResultCountWithOptions(request, runtime);
  }

  async setGtmAccessModeWithOptions(request: SetGtmAccessModeRequest, runtime: $Util.RuntimeOptions): Promise<SetGtmAccessModeResponse> {
    Util.validateModel(request);
    return $tea.cast<SetGtmAccessModeResponse>(await this.doRequest("SetGtmAccessMode", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new SetGtmAccessModeResponse({}));
  }

  async setGtmAccessMode(request: SetGtmAccessModeRequest): Promise<SetGtmAccessModeResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setGtmAccessModeWithOptions(request, runtime);
  }

  async setGtmMonitorStatusWithOptions(request: SetGtmMonitorStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetGtmMonitorStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetGtmMonitorStatusResponse>(await this.doRequest("SetGtmMonitorStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new SetGtmMonitorStatusResponse({}));
  }

  async setGtmMonitorStatus(request: SetGtmMonitorStatusRequest): Promise<SetGtmMonitorStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setGtmMonitorStatusWithOptions(request, runtime);
  }

  async updateGtmInstanceGlobalConfigWithOptions(request: UpdateGtmInstanceGlobalConfigRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGtmInstanceGlobalConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGtmInstanceGlobalConfigResponse>(await this.doRequest("UpdateGtmInstanceGlobalConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateGtmInstanceGlobalConfigResponse({}));
  }

  async updateGtmInstanceGlobalConfig(request: UpdateGtmInstanceGlobalConfigRequest): Promise<UpdateGtmInstanceGlobalConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGtmInstanceGlobalConfigWithOptions(request, runtime);
  }

  async describeGtmLogsWithOptions(request: DescribeGtmLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmLogsResponse>(await this.doRequest("DescribeGtmLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmLogsResponse({}));
  }

  async describeGtmLogs(request: DescribeGtmLogsRequest): Promise<DescribeGtmLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmLogsWithOptions(request, runtime);
  }

  async deleteGtmAccessStrategyWithOptions(request: DeleteGtmAccessStrategyRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGtmAccessStrategyResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGtmAccessStrategyResponse>(await this.doRequest("DeleteGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteGtmAccessStrategyResponse({}));
  }

  async deleteGtmAccessStrategy(request: DeleteGtmAccessStrategyRequest): Promise<DeleteGtmAccessStrategyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGtmAccessStrategyWithOptions(request, runtime);
  }

  async addGtmMonitorWithOptions(request: AddGtmMonitorRequest, runtime: $Util.RuntimeOptions): Promise<AddGtmMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGtmMonitorResponse>(await this.doRequest("AddGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddGtmMonitorResponse({}));
  }

  async addGtmMonitor(request: AddGtmMonitorRequest): Promise<AddGtmMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGtmMonitorWithOptions(request, runtime);
  }

  async addGtmAddressPoolWithOptions(request: AddGtmAddressPoolRequest, runtime: $Util.RuntimeOptions): Promise<AddGtmAddressPoolResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGtmAddressPoolResponse>(await this.doRequest("AddGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddGtmAddressPoolResponse({}));
  }

  async addGtmAddressPool(request: AddGtmAddressPoolRequest): Promise<AddGtmAddressPoolResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGtmAddressPoolWithOptions(request, runtime);
  }

  async addGtmAccessStrategyWithOptions(request: AddGtmAccessStrategyRequest, runtime: $Util.RuntimeOptions): Promise<AddGtmAccessStrategyResponse> {
    Util.validateModel(request);
    return $tea.cast<AddGtmAccessStrategyResponse>(await this.doRequest("AddGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddGtmAccessStrategyResponse({}));
  }

  async addGtmAccessStrategy(request: AddGtmAccessStrategyRequest): Promise<AddGtmAccessStrategyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addGtmAccessStrategyWithOptions(request, runtime);
  }

  async describeGtmInstancesWithOptions(request: DescribeGtmInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstancesResponse>(await this.doRequest("DescribeGtmInstances", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstancesResponse({}));
  }

  async describeGtmInstances(request: DescribeGtmInstancesRequest): Promise<DescribeGtmInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstancesWithOptions(request, runtime);
  }

  async deleteGtmAddressPoolWithOptions(request: DeleteGtmAddressPoolRequest, runtime: $Util.RuntimeOptions): Promise<DeleteGtmAddressPoolResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteGtmAddressPoolResponse>(await this.doRequest("DeleteGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteGtmAddressPoolResponse({}));
  }

  async deleteGtmAddressPool(request: DeleteGtmAddressPoolRequest): Promise<DeleteGtmAddressPoolResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteGtmAddressPoolWithOptions(request, runtime);
  }

  async describeGtmAccessStrategiesWithOptions(request: DescribeGtmAccessStrategiesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmAccessStrategiesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmAccessStrategiesResponse>(await this.doRequest("DescribeGtmAccessStrategies", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmAccessStrategiesResponse({}));
  }

  async describeGtmAccessStrategies(request: DescribeGtmAccessStrategiesRequest): Promise<DescribeGtmAccessStrategiesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmAccessStrategiesWithOptions(request, runtime);
  }

  async describeGtmAccessStrategyWithOptions(request: DescribeGtmAccessStrategyRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmAccessStrategyResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmAccessStrategyResponse>(await this.doRequest("DescribeGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmAccessStrategyResponse({}));
  }

  async describeGtmAccessStrategy(request: DescribeGtmAccessStrategyRequest): Promise<DescribeGtmAccessStrategyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmAccessStrategyWithOptions(request, runtime);
  }

  async describeGtmAccessStrategyAvailableConfigWithOptions(request: DescribeGtmAccessStrategyAvailableConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmAccessStrategyAvailableConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmAccessStrategyAvailableConfigResponse>(await this.doRequest("DescribeGtmAccessStrategyAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmAccessStrategyAvailableConfigResponse({}));
  }

  async describeGtmAccessStrategyAvailableConfig(request: DescribeGtmAccessStrategyAvailableConfigRequest): Promise<DescribeGtmAccessStrategyAvailableConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmAccessStrategyAvailableConfigWithOptions(request, runtime);
  }

  async describeGtmAvailableAlertGroupWithOptions(request: DescribeGtmAvailableAlertGroupRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmAvailableAlertGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmAvailableAlertGroupResponse>(await this.doRequest("DescribeGtmAvailableAlertGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmAvailableAlertGroupResponse({}));
  }

  async describeGtmAvailableAlertGroup(request: DescribeGtmAvailableAlertGroupRequest): Promise<DescribeGtmAvailableAlertGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmAvailableAlertGroupWithOptions(request, runtime);
  }

  async describeGtmInstanceWithOptions(request: DescribeGtmInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstanceResponse>(await this.doRequest("DescribeGtmInstance", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstanceResponse({}));
  }

  async describeGtmInstance(request: DescribeGtmInstanceRequest): Promise<DescribeGtmInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstanceWithOptions(request, runtime);
  }

  async describeGtmInstanceAddressPoolWithOptions(request: DescribeGtmInstanceAddressPoolRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstanceAddressPoolResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstanceAddressPoolResponse>(await this.doRequest("DescribeGtmInstanceAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstanceAddressPoolResponse({}));
  }

  async describeGtmInstanceAddressPool(request: DescribeGtmInstanceAddressPoolRequest): Promise<DescribeGtmInstanceAddressPoolResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstanceAddressPoolWithOptions(request, runtime);
  }

  async describeGtmInstanceAddressPoolsWithOptions(request: DescribeGtmInstanceAddressPoolsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstanceAddressPoolsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstanceAddressPoolsResponse>(await this.doRequest("DescribeGtmInstanceAddressPools", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstanceAddressPoolsResponse({}));
  }

  async describeGtmInstanceAddressPools(request: DescribeGtmInstanceAddressPoolsRequest): Promise<DescribeGtmInstanceAddressPoolsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstanceAddressPoolsWithOptions(request, runtime);
  }

  async describeGtmInstanceStatusWithOptions(request: DescribeGtmInstanceStatusRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmInstanceStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmInstanceStatusResponse>(await this.doRequest("DescribeGtmInstanceStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmInstanceStatusResponse({}));
  }

  async describeGtmInstanceStatus(request: DescribeGtmInstanceStatusRequest): Promise<DescribeGtmInstanceStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmInstanceStatusWithOptions(request, runtime);
  }

  async describeGtmMonitorAvailableConfigWithOptions(request: DescribeGtmMonitorAvailableConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmMonitorAvailableConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmMonitorAvailableConfigResponse>(await this.doRequest("DescribeGtmMonitorAvailableConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmMonitorAvailableConfigResponse({}));
  }

  async describeGtmMonitorAvailableConfig(request: DescribeGtmMonitorAvailableConfigRequest): Promise<DescribeGtmMonitorAvailableConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmMonitorAvailableConfigWithOptions(request, runtime);
  }

  async describeGtmMonitorConfigWithOptions(request: DescribeGtmMonitorConfigRequest, runtime: $Util.RuntimeOptions): Promise<DescribeGtmMonitorConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeGtmMonitorConfigResponse>(await this.doRequest("DescribeGtmMonitorConfig", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeGtmMonitorConfigResponse({}));
  }

  async describeGtmMonitorConfig(request: DescribeGtmMonitorConfigRequest): Promise<DescribeGtmMonitorConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeGtmMonitorConfigWithOptions(request, runtime);
  }

  async updateGtmAccessStrategyWithOptions(request: UpdateGtmAccessStrategyRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGtmAccessStrategyResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGtmAccessStrategyResponse>(await this.doRequest("UpdateGtmAccessStrategy", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateGtmAccessStrategyResponse({}));
  }

  async updateGtmAccessStrategy(request: UpdateGtmAccessStrategyRequest): Promise<UpdateGtmAccessStrategyResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGtmAccessStrategyWithOptions(request, runtime);
  }

  async updateGtmAddressPoolWithOptions(request: UpdateGtmAddressPoolRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGtmAddressPoolResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGtmAddressPoolResponse>(await this.doRequest("UpdateGtmAddressPool", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateGtmAddressPoolResponse({}));
  }

  async updateGtmAddressPool(request: UpdateGtmAddressPoolRequest): Promise<UpdateGtmAddressPoolResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGtmAddressPoolWithOptions(request, runtime);
  }

  async updateGtmMonitorWithOptions(request: UpdateGtmMonitorRequest, runtime: $Util.RuntimeOptions): Promise<UpdateGtmMonitorResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateGtmMonitorResponse>(await this.doRequest("UpdateGtmMonitor", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateGtmMonitorResponse({}));
  }

  async updateGtmMonitor(request: UpdateGtmMonitorRequest): Promise<UpdateGtmMonitorResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateGtmMonitorWithOptions(request, runtime);
  }

  async updateDomainRemarkWithOptions(request: UpdateDomainRemarkRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDomainRemarkResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDomainRemarkResponse>(await this.doRequest("UpdateDomainRemark", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateDomainRemarkResponse({}));
  }

  async updateDomainRemark(request: UpdateDomainRemarkRequest): Promise<UpdateDomainRemarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDomainRemarkWithOptions(request, runtime);
  }

  async updateDomainRecordRemarkWithOptions(request: UpdateDomainRecordRemarkRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDomainRecordRemarkResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDomainRecordRemarkResponse>(await this.doRequest("UpdateDomainRecordRemark", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateDomainRecordRemarkResponse({}));
  }

  async updateDomainRecordRemark(request: UpdateDomainRecordRemarkRequest): Promise<UpdateDomainRecordRemarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDomainRecordRemarkWithOptions(request, runtime);
  }

  async describeSupportLinesWithOptions(request: DescribeSupportLinesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSupportLinesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSupportLinesResponse>(await this.doRequest("DescribeSupportLines", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeSupportLinesResponse({}));
  }

  async describeSupportLines(request: DescribeSupportLinesRequest): Promise<DescribeSupportLinesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSupportLinesWithOptions(request, runtime);
  }

  async describeDomainNsWithOptions(request: DescribeDomainNsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainNsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainNsResponse>(await this.doRequest("DescribeDomainNs", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainNsResponse({}));
  }

  async describeDomainNs(request: DescribeDomainNsRequest): Promise<DescribeDomainNsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainNsWithOptions(request, runtime);
  }

  async describeDnsProductInstanceWithOptions(request: DescribeDnsProductInstanceRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDnsProductInstanceResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDnsProductInstanceResponse>(await this.doRequest("DescribeDnsProductInstance", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDnsProductInstanceResponse({}));
  }

  async describeDnsProductInstance(request: DescribeDnsProductInstanceRequest): Promise<DescribeDnsProductInstanceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDnsProductInstanceWithOptions(request, runtime);
  }

  async updateDomainRecordWithOptions(request: UpdateDomainRecordRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDomainRecordResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDomainRecordResponse>(await this.doRequest("UpdateDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new UpdateDomainRecordResponse({}));
  }

  async updateDomainRecord(request: UpdateDomainRecordRequest): Promise<UpdateDomainRecordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDomainRecordWithOptions(request, runtime);
  }

  async updateDomainGroupWithOptions(request: UpdateDomainGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDomainGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDomainGroupResponse>(await this.doRequest("UpdateDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateDomainGroupResponse({}));
  }

  async updateDomainGroup(request: UpdateDomainGroupRequest): Promise<UpdateDomainGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDomainGroupWithOptions(request, runtime);
  }

  async updateDNSSLBWeightWithOptions(request: UpdateDNSSLBWeightRequest, runtime: $Util.RuntimeOptions): Promise<UpdateDNSSLBWeightResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateDNSSLBWeightResponse>(await this.doRequest("UpdateDNSSLBWeight", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new UpdateDNSSLBWeightResponse({}));
  }

  async updateDNSSLBWeight(request: UpdateDNSSLBWeightRequest): Promise<UpdateDNSSLBWeightResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateDNSSLBWeightWithOptions(request, runtime);
  }

  async setDomainRecordStatusWithOptions(request: SetDomainRecordStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetDomainRecordStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDomainRecordStatusResponse>(await this.doRequest("SetDomainRecordStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new SetDomainRecordStatusResponse({}));
  }

  async setDomainRecordStatus(request: SetDomainRecordStatusRequest): Promise<SetDomainRecordStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDomainRecordStatusWithOptions(request, runtime);
  }

  async setDNSSLBStatusWithOptions(request: SetDNSSLBStatusRequest, runtime: $Util.RuntimeOptions): Promise<SetDNSSLBStatusResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDNSSLBStatusResponse>(await this.doRequest("SetDNSSLBStatus", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new SetDNSSLBStatusResponse({}));
  }

  async setDNSSLBStatus(request: SetDNSSLBStatusRequest): Promise<SetDNSSLBStatusResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDNSSLBStatusWithOptions(request, runtime);
  }

  async modifyHichinaDomainDNSWithOptions(request: ModifyHichinaDomainDNSRequest, runtime: $Util.RuntimeOptions): Promise<ModifyHichinaDomainDNSResponse> {
    Util.validateModel(request);
    return $tea.cast<ModifyHichinaDomainDNSResponse>(await this.doRequest("ModifyHichinaDomainDNS", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new ModifyHichinaDomainDNSResponse({}));
  }

  async modifyHichinaDomainDNS(request: ModifyHichinaDomainDNSRequest): Promise<ModifyHichinaDomainDNSResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.modifyHichinaDomainDNSWithOptions(request, runtime);
  }

  async getMainDomainNameWithOptions(request: GetMainDomainNameRequest, runtime: $Util.RuntimeOptions): Promise<GetMainDomainNameResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMainDomainNameResponse>(await this.doRequest("GetMainDomainName", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new GetMainDomainNameResponse({}));
  }

  async getMainDomainName(request: GetMainDomainNameRequest): Promise<GetMainDomainNameResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMainDomainNameWithOptions(request, runtime);
  }

  async describeSubDomainRecordsWithOptions(request: DescribeSubDomainRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeSubDomainRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeSubDomainRecordsResponse>(await this.doRequest("DescribeSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeSubDomainRecordsResponse({}));
  }

  async describeSubDomainRecords(request: DescribeSubDomainRecordsRequest): Promise<DescribeSubDomainRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeSubDomainRecordsWithOptions(request, runtime);
  }

  async describeRecordLogsWithOptions(request: DescribeRecordLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeRecordLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeRecordLogsResponse>(await this.doRequest("DescribeRecordLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeRecordLogsResponse({}));
  }

  async describeRecordLogs(request: DescribeRecordLogsRequest): Promise<DescribeRecordLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeRecordLogsWithOptions(request, runtime);
  }

  async describeDomainsWithOptions(request: DescribeDomainsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainsResponse>(await this.doRequest("DescribeDomains", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new DescribeDomainsResponse({}));
  }

  async describeDomains(request: DescribeDomainsRequest): Promise<DescribeDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainsWithOptions(request, runtime);
  }

  async describeDomainRecordsWithOptions(request: DescribeDomainRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainRecordsResponse>(await this.doRequest("DescribeDomainRecords", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new DescribeDomainRecordsResponse({}));
  }

  async describeDomainRecords(request: DescribeDomainRecordsRequest): Promise<DescribeDomainRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainRecordsWithOptions(request, runtime);
  }

  async describeDomainRecordInfoWithOptions(request: DescribeDomainRecordInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainRecordInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainRecordInfoResponse>(await this.doRequest("DescribeDomainRecordInfo", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new DescribeDomainRecordInfoResponse({}));
  }

  async describeDomainRecordInfo(request: DescribeDomainRecordInfoRequest): Promise<DescribeDomainRecordInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainRecordInfoWithOptions(request, runtime);
  }

  async describeDomainLogsWithOptions(request: DescribeDomainLogsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainLogsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainLogsResponse>(await this.doRequest("DescribeDomainLogs", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainLogsResponse({}));
  }

  async describeDomainLogs(request: DescribeDomainLogsRequest): Promise<DescribeDomainLogsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainLogsWithOptions(request, runtime);
  }

  async describeDomainInfoWithOptions(request: DescribeDomainInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainInfoResponse>(await this.doRequest("DescribeDomainInfo", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainInfoResponse({}));
  }

  async describeDomainInfo(request: DescribeDomainInfoRequest): Promise<DescribeDomainInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainInfoWithOptions(request, runtime);
  }

  async describeDomainGroupsWithOptions(request: DescribeDomainGroupsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDomainGroupsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDomainGroupsResponse>(await this.doRequest("DescribeDomainGroups", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDomainGroupsResponse({}));
  }

  async describeDomainGroups(request: DescribeDomainGroupsRequest): Promise<DescribeDomainGroupsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDomainGroupsWithOptions(request, runtime);
  }

  async describeDNSSLBSubDomainsWithOptions(request: DescribeDNSSLBSubDomainsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDNSSLBSubDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDNSSLBSubDomainsResponse>(await this.doRequest("DescribeDNSSLBSubDomains", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDNSSLBSubDomainsResponse({}));
  }

  async describeDNSSLBSubDomains(request: DescribeDNSSLBSubDomainsRequest): Promise<DescribeDNSSLBSubDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDNSSLBSubDomainsWithOptions(request, runtime);
  }

  async describeDnsProductInstancesWithOptions(request: DescribeDnsProductInstancesRequest, runtime: $Util.RuntimeOptions): Promise<DescribeDnsProductInstancesResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeDnsProductInstancesResponse>(await this.doRequest("DescribeDnsProductInstances", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DescribeDnsProductInstancesResponse({}));
  }

  async describeDnsProductInstances(request: DescribeDnsProductInstancesRequest): Promise<DescribeDnsProductInstancesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeDnsProductInstancesWithOptions(request, runtime);
  }

  async deleteSubDomainRecordsWithOptions(request: DeleteSubDomainRecordsRequest, runtime: $Util.RuntimeOptions): Promise<DeleteSubDomainRecordsResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteSubDomainRecordsResponse>(await this.doRequest("DeleteSubDomainRecords", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteSubDomainRecordsResponse({}));
  }

  async deleteSubDomainRecords(request: DeleteSubDomainRecordsRequest): Promise<DeleteSubDomainRecordsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteSubDomainRecordsWithOptions(request, runtime);
  }

  async deleteDomainRecordWithOptions(request: DeleteDomainRecordRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDomainRecordResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDomainRecordResponse>(await this.doRequest("DeleteDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new DeleteDomainRecordResponse({}));
  }

  async deleteDomainRecord(request: DeleteDomainRecordRequest): Promise<DeleteDomainRecordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDomainRecordWithOptions(request, runtime);
  }

  async deleteDomainGroupWithOptions(request: DeleteDomainGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDomainGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDomainGroupResponse>(await this.doRequest("DeleteDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new DeleteDomainGroupResponse({}));
  }

  async deleteDomainGroup(request: DeleteDomainGroupRequest): Promise<DeleteDomainGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDomainGroupWithOptions(request, runtime);
  }

  async deleteDomainWithOptions(request: DeleteDomainRequest, runtime: $Util.RuntimeOptions): Promise<DeleteDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteDomainResponse>(await this.doRequest("DeleteDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new DeleteDomainResponse({}));
  }

  async deleteDomain(request: DeleteDomainRequest): Promise<DeleteDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteDomainWithOptions(request, runtime);
  }

  async changeDomainOfDnsProductWithOptions(request: ChangeDomainOfDnsProductRequest, runtime: $Util.RuntimeOptions): Promise<ChangeDomainOfDnsProductResponse> {
    Util.validateModel(request);
    return $tea.cast<ChangeDomainOfDnsProductResponse>(await this.doRequest("ChangeDomainOfDnsProduct", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new ChangeDomainOfDnsProductResponse({}));
  }

  async changeDomainOfDnsProduct(request: ChangeDomainOfDnsProductRequest): Promise<ChangeDomainOfDnsProductResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.changeDomainOfDnsProductWithOptions(request, runtime);
  }

  async changeDomainGroupWithOptions(request: ChangeDomainGroupRequest, runtime: $Util.RuntimeOptions): Promise<ChangeDomainGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ChangeDomainGroupResponse>(await this.doRequest("ChangeDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new ChangeDomainGroupResponse({}));
  }

  async changeDomainGroup(request: ChangeDomainGroupRequest): Promise<ChangeDomainGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.changeDomainGroupWithOptions(request, runtime);
  }

  async addDomainRecordWithOptions(request: AddDomainRecordRequest, runtime: $Util.RuntimeOptions): Promise<AddDomainRecordResponse> {
    Util.validateModel(request);
    return $tea.cast<AddDomainRecordResponse>(await this.doRequest("AddDomainRecord", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new AddDomainRecordResponse({}));
  }

  async addDomainRecord(request: AddDomainRecordRequest): Promise<AddDomainRecordResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addDomainRecordWithOptions(request, runtime);
  }

  async addDomainGroupWithOptions(request: AddDomainGroupRequest, runtime: $Util.RuntimeOptions): Promise<AddDomainGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<AddDomainGroupResponse>(await this.doRequest("AddDomainGroup", "HTTPS", "POST", "2015-01-09", "AK", null, $tea.toMap(request), runtime), new AddDomainGroupResponse({}));
  }

  async addDomainGroup(request: AddDomainGroupRequest): Promise<AddDomainGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addDomainGroupWithOptions(request, runtime);
  }

  async addDomainWithOptions(request: AddDomainRequest, runtime: $Util.RuntimeOptions): Promise<AddDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<AddDomainResponse>(await this.doRequest("AddDomain", "HTTPS", "POST", "2015-01-09", "AK,BearerToken", null, $tea.toMap(request), runtime), new AddDomainResponse({}));
  }

  async addDomain(request: AddDomainRequest): Promise<AddDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addDomainWithOptions(request, runtime);
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

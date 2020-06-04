// This file is auto-generated, don't edit it
import Util, * as $Util from '@alicloud/tea-util';
import RPC, * as $RPC from '@alicloud/rpc-client';
import EndpointUtil from '@alicloud/endpoint-util';
import * as $tea from '@alicloud/tea-typescript';

export class SubmitMediaDNADeleteJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  mediaId: string;
  fpDBId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      mediaId: 'MediaId',
      fpDBId: 'FpDBId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      mediaId: 'string',
      fpDBId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitMediaDNADeleteJobResponse extends $tea.Model {
  requestId: string;
  mediaId: string;
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaId: 'MediaId',
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaId: 'string',
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListMediaDNADeleteJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  jobIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      jobIds: 'JobIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      jobIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListMediaDNADeleteJobResponse extends $tea.Model {
  requestId: string;
  AIJobList: ListMediaDNADeleteJobResponseAIJobList;
  nonExistAIJobIds: ListMediaDNADeleteJobResponseNonExistAIJobIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      AIJobList: 'AIJobList',
      nonExistAIJobIds: 'NonExistAIJobIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      AIJobList: ListMediaDNADeleteJobResponseAIJobList,
      nonExistAIJobIds: ListMediaDNADeleteJobResponseNonExistAIJobIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditAudioResultDetailRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  mediaId: string;
  pageNo?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      mediaId: 'MediaId',
      pageNo: 'PageNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      mediaId: 'string',
      pageNo: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditAudioResultDetailResponse extends $tea.Model {
  requestId: string;
  mediaAuditAudioResultDetail: GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaAuditAudioResultDetail: 'MediaAuditAudioResultDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaAuditAudioResultDetail: GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitDynamicImageJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  dynamicImageTemplateId: string;
  overrideParams?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      dynamicImageTemplateId: 'DynamicImageTemplateId',
      overrideParams: 'OverrideParams',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      dynamicImageTemplateId: 'string',
      overrideParams: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitDynamicImageJobResponse extends $tea.Model {
  requestId: string;
  dynamicImageJob: SubmitDynamicImageJobResponseDynamicImageJob;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dynamicImageJob: 'DynamicImageJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dynamicImageJob: SubmitDynamicImageJobResponseDynamicImageJob,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitWorkflowJobRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  workflowId: string;
  mediaId?: string;
  fileUrl?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      workflowId: 'WorkflowId',
      mediaId: 'MediaId',
      fileUrl: 'FileUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      workflowId: 'string',
      mediaId: 'string',
      fileUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitWorkflowJobResponse extends $tea.Model {
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

export class GetAIVideoTagResultRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  mediaId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      mediaId: 'MediaId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      mediaId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponse extends $tea.Model {
  requestId: string;
  videoTagResult: GetAIVideoTagResultResponseVideoTagResult;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      videoTagResult: 'VideoTagResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      videoTagResult: GetAIVideoTagResultResponseVideoTagResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUploadDetailsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  resourceRealOwnerId?: number;
  mediaIds: string;
  mediaType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      mediaIds: 'MediaIds',
      mediaType: 'MediaType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      resourceRealOwnerId: 'number',
      mediaIds: 'string',
      mediaType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUploadDetailsResponse extends $tea.Model {
  requestId: string;
  uploadDetails: GetUploadDetailsResponseUploadDetails[];
  nonExistMediaIds: string[];
  forbiddenMediaIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      uploadDetails: 'UploadDetails',
      nonExistMediaIds: 'NonExistMediaIds',
      forbiddenMediaIds: 'ForbiddenMediaIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      uploadDetails: { 'type': 'array', 'itemType': GetUploadDetailsResponseUploadDetails },
      nonExistMediaIds: { 'type': 'array', 'itemType': 'string' },
      forbiddenMediaIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodStorageDataRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  region?: string;
  storageType?: string;
  storage?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      region: 'Region',
      storageType: 'StorageType',
      storage: 'Storage',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
      region: 'string',
      storageType: 'string',
      storage: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodStorageDataResponse extends $tea.Model {
  requestId: string;
  dataInterval: string;
  storageData: DescribeVodStorageDataResponseStorageData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dataInterval: 'DataInterval',
      storageData: 'StorageData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dataInterval: 'string',
      storageData: DescribeVodStorageDataResponseStorageData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  region?: string;
  AIType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      region: 'Region',
      AIType: 'AIType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
      region: 'string',
      AIType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataResponse extends $tea.Model {
  requestId: string;
  dataInterval: string;
  AIData: DescribeVodAIDataResponseAIData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dataInterval: 'DataInterval',
      AIData: 'AIData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dataInterval: 'string',
      AIData: DescribeVodAIDataResponseAIData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  region?: string;
  interval?: string;
  storage?: string;
  specification?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      region: 'Region',
      interval: 'Interval',
      storage: 'Storage',
      specification: 'Specification',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
      region: 'string',
      interval: 'string',
      storage: 'string',
      specification: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataResponse extends $tea.Model {
  requestId: string;
  dataInterval: string;
  transcodeData: DescribeVodTranscodeDataResponseTranscodeData;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      dataInterval: 'DataInterval',
      transcodeData: 'TranscodeData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      dataInterval: 'string',
      transcodeData: DescribeVodTranscodeDataResponseTranscodeData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMultipartUploadRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  resourceRealOwnerId?: number;
  mediaId: string;
  mediaType: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      mediaId: 'MediaId',
      mediaType: 'MediaType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      resourceRealOwnerId: 'number',
      mediaId: 'string',
      mediaType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMultipartUploadResponse extends $tea.Model {
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

export class GetAttachedMediaInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaIds: string;
  authTimeout?: number;
  resourceRealOwnerId?: number;
  outputType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaIds: 'MediaIds',
      authTimeout: 'AuthTimeout',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      outputType: 'OutputType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaIds: 'string',
      authTimeout: 'number',
      resourceRealOwnerId: 'number',
      outputType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAttachedMediaInfoResponse extends $tea.Model {
  requestId: string;
  attachedMediaList: GetAttachedMediaInfoResponseAttachedMediaList[];
  nonExistMediaIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      attachedMediaList: 'AttachedMediaList',
      nonExistMediaIds: 'NonExistMediaIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      attachedMediaList: { 'type': 'array', 'itemType': GetAttachedMediaInfoResponseAttachedMediaList },
      nonExistMediaIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAttachedMediaRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaIds?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaIds: 'MediaIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAttachedMediaResponse extends $tea.Model {
  requestId: string;
  nonExistMediaIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistMediaIds: 'NonExistMediaIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistMediaIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAttachedMediaInfosRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  resourceRealOwnerId?: number;
  updateContent: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      updateContent: 'UpdateContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      resourceRealOwnerId: 'number',
      updateContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAttachedMediaInfosResponse extends $tea.Model {
  requestId: string;
  nonExistMediaIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistMediaIds: 'NonExistMediaIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistMediaIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachAppPolicyToIdentityRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  identityType: string;
  identityName: string;
  appId?: string;
  policyNames: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      identityType: 'IdentityType',
      identityName: 'IdentityName',
      appId: 'AppId',
      policyNames: 'PolicyNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      identityType: 'string',
      identityName: 'string',
      appId: 'string',
      policyNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AttachAppPolicyToIdentityResponse extends $tea.Model {
  requestId: string;
  nonExistPolicyNames: string[];
  failedPolicyNames: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistPolicyNames: 'NonExistPolicyNames',
      failedPolicyNames: 'FailedPolicyNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistPolicyNames: { 'type': 'array', 'itemType': 'string' },
      failedPolicyNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachAppPolicyFromIdentityRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  identityType: string;
  identityName: string;
  appId?: string;
  policyNames: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      identityType: 'IdentityType',
      identityName: 'IdentityName',
      appId: 'AppId',
      policyNames: 'PolicyNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      identityType: 'string',
      identityName: 'string',
      appId: 'string',
      policyNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DetachAppPolicyFromIdentityResponse extends $tea.Model {
  requestId: string;
  nonExistPolicyNames: string[];
  failedPolicyNames: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistPolicyNames: 'NonExistPolicyNames',
      failedPolicyNames: 'FailedPolicyNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistPolicyNames: { 'type': 'array', 'itemType': 'string' },
      failedPolicyNames: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAppPoliciesForIdentityRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  identityType?: string;
  identityName?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      identityType: 'IdentityType',
      identityName: 'IdentityName',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      identityType: 'string',
      identityName: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAppPoliciesForIdentityResponse extends $tea.Model {
  requestId: string;
  appPolicyList: ListAppPoliciesForIdentityResponseAppPolicyList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appPolicyList: 'AppPolicyList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appPolicyList: { 'type': 'array', 'itemType': ListAppPoliciesForIdentityResponseAppPolicyList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAppInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  appName?: string;
  description?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      appName: 'AppName',
      description: 'Description',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      appName: 'string',
      description: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAppInfoResponse extends $tea.Model {
  requestId: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAppInfosRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  appIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      appIds: 'AppIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      appIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAppInfosResponse extends $tea.Model {
  requestId: string;
  appInfoList: GetAppInfosResponseAppInfoList[];
  nonExistAppIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      appInfoList: 'AppInfoList',
      nonExistAppIds: 'NonExistAppIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      appInfoList: { 'type': 'array', 'itemType': GetAppInfosResponseAppInfoList },
      nonExistAppIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAppInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  appId?: string;
  appName?: string;
  description?: string;
  status?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      appId: 'AppId',
      appName: 'AppName',
      description: 'Description',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      appId: 'string',
      appName: 'string',
      description: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAppInfoResponse extends $tea.Model {
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

export class DeleteAppInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAppInfoResponse extends $tea.Model {
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

export class ListAppInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  status?: string;
  pageNo?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      status: 'Status',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      status: 'string',
      pageNo: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAppInfoResponse extends $tea.Model {
  requestId: string;
  total: number;
  appInfoList: ListAppInfoResponseAppInfoList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      total: 'Total',
      appInfoList: 'AppInfoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      total: 'number',
      appInfoList: { 'type': 'array', 'itemType': ListAppInfoResponseAppInfoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MoveAppResourceRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  targetAppId: string;
  resourceType: string;
  resourceIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      targetAppId: 'TargetAppId',
      resourceType: 'ResourceType',
      resourceIds: 'ResourceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      targetAppId: 'string',
      resourceType: 'string',
      resourceIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class MoveAppResourceResponse extends $tea.Model {
  requestId: string;
  nonExistResourceIds: string[];
  failedResourceIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistResourceIds: 'NonExistResourceIds',
      failedResourceIds: 'FailedResourceIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistResourceIds: { 'type': 'array', 'itemType': 'string' },
      failedResourceIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMessageCallbackRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  resourceRealOwnerId?: number;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      resourceRealOwnerId: 'number',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMessageCallbackResponse extends $tea.Model {
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

export class GetTranscodeSummaryRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoIds: 'VideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeSummaryResponse extends $tea.Model {
  requestId: string;
  transcodeSummaryList: GetTranscodeSummaryResponseTranscodeSummaryList[];
  nonExistVideoIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeSummaryList: 'TranscodeSummaryList',
      nonExistVideoIds: 'NonExistVideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeSummaryList: { 'type': 'array', 'itemType': GetTranscodeSummaryResponseTranscodeSummaryList },
      nonExistVideoIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTranscodeTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  startTime?: string;
  endTime?: string;
  pageSize?: number;
  pageNo?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      startTime: 'string',
      endTime: 'string',
      pageSize: 'number',
      pageNo: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTranscodeTaskResponse extends $tea.Model {
  requestId: string;
  transcodeTaskList: ListTranscodeTaskResponseTranscodeTaskList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTaskList: 'TranscodeTaskList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTaskList: { 'type': 'array', 'itemType': ListTranscodeTaskResponseTranscodeTaskList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTaskRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  transcodeTaskId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      transcodeTaskId: 'TranscodeTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      transcodeTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTaskResponse extends $tea.Model {
  requestId: string;
  transcodeTask: GetTranscodeTaskResponseTranscodeTask;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTask: 'TranscodeTask',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTask: GetTranscodeTaskResponseTranscodeTask,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetURLUploadInfosRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  jobIds?: string;
  uploadURLs?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      jobIds: 'JobIds',
      uploadURLs: 'UploadURLs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      jobIds: 'string',
      uploadURLs: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetURLUploadInfosResponse extends $tea.Model {
  requestId: string;
  URLUploadInfoList: GetURLUploadInfosResponseURLUploadInfoList[];
  nonExists: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      URLUploadInfoList: 'URLUploadInfoList',
      nonExists: 'NonExists',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      URLUploadInfoList: { 'type': 'array', 'itemType': GetURLUploadInfosResponseURLUploadInfoList },
      nonExists: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  name?: string;
  transcodeTemplateList?: string;
  locked?: string;
  transcodeTemplateGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      name: 'Name',
      transcodeTemplateList: 'TranscodeTemplateList',
      locked: 'Locked',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      name: 'string',
      transcodeTemplateList: 'string',
      locked: 'string',
      transcodeTemplateGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateTranscodeTemplateGroupResponse extends $tea.Model {
  requestId: string;
  transcodeTemplateGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTemplateGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  name?: string;
  transcodeTemplateList?: string;
  transcodeTemplateGroupId?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      name: 'Name',
      transcodeTemplateList: 'TranscodeTemplateList',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      name: 'string',
      transcodeTemplateList: 'string',
      transcodeTemplateGroupId: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddTranscodeTemplateGroupResponse extends $tea.Model {
  requestId: string;
  transcodeTemplateGroupId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTemplateGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  transcodeTemplateGroupId: string;
  transcodeTemplateIds?: string;
  forceDelGroup?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      transcodeTemplateIds: 'TranscodeTemplateIds',
      forceDelGroup: 'ForceDelGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      transcodeTemplateGroupId: 'string',
      transcodeTemplateIds: 'string',
      forceDelGroup: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteTranscodeTemplateGroupResponse extends $tea.Model {
  requestId: string;
  nonExistTranscodeTemplateIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistTranscodeTemplateIds: 'NonExistTranscodeTemplateIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistTranscodeTemplateIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  transcodeTemplateGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      transcodeTemplateGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTemplateGroupResponse extends $tea.Model {
  requestId: string;
  transcodeTemplateGroup: GetTranscodeTemplateGroupResponseTranscodeTemplateGroup;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTemplateGroup: 'TranscodeTemplateGroup',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTemplateGroup: GetTranscodeTemplateGroupResponseTranscodeTemplateGroup,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  transcodeTemplateGroupId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      transcodeTemplateGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultTranscodeTemplateGroupResponse extends $tea.Model {
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

export class ListTranscodeTemplateGroupRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  pageSize?: number;
  pageNo?: number;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      pageSize: 'number',
      pageNo: 'number',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTranscodeTemplateGroupResponse extends $tea.Model {
  requestId: string;
  transcodeTemplateGroupList: ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTemplateGroupList: 'TranscodeTemplateGroupList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTemplateGroupList: { 'type': 'array', 'itemType': ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponse extends $tea.Model {
  requestId: string;
  mediaAuditJob: GetAIMediaAuditJobResponseMediaAuditJob;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaAuditJob: 'MediaAuditJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaAuditJob: GetAIMediaAuditJobResponseMediaAuditJob,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIMediaAuditJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaId: string;
  templateId?: string;
  userData?: string;
  mediaType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaId: 'MediaId',
      templateId: 'TemplateId',
      userData: 'UserData',
      mediaType: 'MediaType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaId: 'string',
      templateId: 'string',
      userData: 'string',
      mediaType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIMediaAuditJobResponse extends $tea.Model {
  requestId: string;
  mediaId: string;
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaId: 'MediaId',
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaId: 'string',
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaId: string;
  resourceRealOwnerId?: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaId: 'MediaId',
      resourceRealOwnerId: 'ResourceRealOwnerId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaId: 'string',
      resourceRealOwnerId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponse extends $tea.Model {
  requestId: string;
  mediaAuditResult: GetMediaAuditResultResponseMediaAuditResult;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaAuditResult: 'MediaAuditResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaAuditResult: GetMediaAuditResultResponseMediaAuditResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultDetailRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaId: string;
  pageNo: number;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaId: 'MediaId',
      pageNo: 'PageNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaId: 'string',
      pageNo: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultDetailResponse extends $tea.Model {
  requestId: string;
  mediaAuditResultDetail: GetMediaAuditResultDetailResponseMediaAuditResultDetail;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaAuditResultDetail: 'MediaAuditResultDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaAuditResultDetail: GetMediaAuditResultDetailResponseMediaAuditResultDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  mediaId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      mediaId: 'MediaId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      mediaId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponse extends $tea.Model {
  requestId: string;
  mediaAuditResultTimeline: GetMediaAuditResultTimelineResponseMediaAuditResultTimeline;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaAuditResultTimeline: 'MediaAuditResultTimeline',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaAuditResultTimeline: GetMediaAuditResultTimelineResponseMediaAuditResultTimeline,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateName: string;
  templateType: string;
  templateConfig: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateName: 'TemplateName',
      templateType: 'TemplateType',
      templateConfig: 'TemplateConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateName: 'string',
      templateType: 'string',
      templateConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddAITemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteAITemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateId: string;
  templateName: string;
  templateConfig: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateId: 'TemplateId',
      templateName: 'TemplateName',
      templateConfig: 'TemplateConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateId: 'string',
      templateName: 'string',
      templateConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateAITemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAITemplateResponse extends $tea.Model {
  requestId: string;
  templateInfo: GetAITemplateResponseTemplateInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateInfo: 'TemplateInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateInfo: GetAITemplateResponseTemplateInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateType: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateType: 'TemplateType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAITemplateResponse extends $tea.Model {
  requestId: string;
  templateInfoList: ListAITemplateResponseTemplateInfoList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateInfoList: 'TemplateInfoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateInfoList: { 'type': 'array', 'itemType': ListAITemplateResponseTemplateInfoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDefaultAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateType: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateType: 'TemplateType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDefaultAITemplateResponse extends $tea.Model {
  requestId: string;
  templateInfo: GetDefaultAITemplateResponseTemplateInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateInfo: 'TemplateInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateInfo: GetDefaultAITemplateResponseTemplateInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultAITemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultAITemplateResponse extends $tea.Model {
  requestId: string;
  templateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      templateId: 'TemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      templateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogRequest extends $tea.Model {
  ownerId?: number;
  domainName: string;
  pageSize?: number;
  pageNumber?: number;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      domainName: 'DomainName',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      domainName: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponse extends $tea.Model {
  requestId: string;
  domainLogDetails: DescribeVodDomainLogResponseDomainLogDetails;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainLogDetails: 'DomainLogDetails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainLogDetails: DescribeVodDomainLogResponseDomainLogDetails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainCertificateInfoRequest extends $tea.Model {
  ownerId?: number;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainCertificateInfoResponse extends $tea.Model {
  requestId: string;
  certInfos: DescribeVodDomainCertificateInfoResponseCertInfos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      certInfos: 'CertInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      certInfos: DescribeVodDomainCertificateInfoResponseCertInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainTrafficDataRequest extends $tea.Model {
  ownerId?: number;
  domainName?: string;
  startTime?: string;
  endTime?: string;
  interval?: string;
  ispNameEn?: string;
  locationNameEn?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      interval: 'Interval',
      ispNameEn: 'IspNameEn',
      locationNameEn: 'LocationNameEn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      interval: 'string',
      ispNameEn: 'string',
      locationNameEn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainTrafficDataResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  startTime: string;
  endTime: string;
  dataInterval: string;
  trafficDataPerInterval: DescribeVodDomainTrafficDataResponseTrafficDataPerInterval;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      dataInterval: 'DataInterval',
      trafficDataPerInterval: 'TrafficDataPerInterval',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      dataInterval: 'string',
      trafficDataPerInterval: DescribeVodDomainTrafficDataResponseTrafficDataPerInterval,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainBpsDataRequest extends $tea.Model {
  ownerId?: number;
  domainName?: string;
  startTime?: string;
  endTime?: string;
  interval?: string;
  ispNameEn?: string;
  locationNameEn?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      interval: 'Interval',
      ispNameEn: 'IspNameEn',
      locationNameEn: 'LocationNameEn',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      interval: 'string',
      ispNameEn: 'string',
      locationNameEn: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainBpsDataResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  startTime: string;
  endTime: string;
  locationNameEn: string;
  ispNameEn: string;
  dataInterval: string;
  bpsDataPerInterval: DescribeVodDomainBpsDataResponseBpsDataPerInterval;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      locationNameEn: 'LocationNameEn',
      ispNameEn: 'IspNameEn',
      dataInterval: 'DataInterval',
      bpsDataPerInterval: 'BpsDataPerInterval',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      locationNameEn: 'string',
      ispNameEn: 'string',
      dataInterval: 'string',
      bpsDataPerInterval: DescribeVodDomainBpsDataResponseBpsDataPerInterval,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainUsageDataRequest extends $tea.Model {
  ownerId?: number;
  domainName?: string;
  startTime: string;
  endTime: string;
  type?: string;
  area?: string;
  field: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      type: 'Type',
      area: 'Area',
      field: 'Field',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      type: 'string',
      area: 'string',
      field: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainUsageDataResponse extends $tea.Model {
  requestId: string;
  domainName: string;
  startTime: string;
  endTime: string;
  type: string;
  area: string;
  dataInterval: string;
  usageDataPerInterval: DescribeVodDomainUsageDataResponseUsageDataPerInterval;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainName: 'DomainName',
      startTime: 'StartTime',
      endTime: 'EndTime',
      type: 'Type',
      area: 'Area',
      dataInterval: 'DataInterval',
      usageDataPerInterval: 'UsageDataPerInterval',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainName: 'string',
      startTime: 'string',
      endTime: 'string',
      type: 'string',
      area: 'string',
      dataInterval: 'string',
      usageDataPerInterval: DescribeVodDomainUsageDataResponseUsageDataPerInterval,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodCertificateListRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodCertificateListResponse extends $tea.Model {
  requestId: string;
  certificateListModel: DescribeVodCertificateListResponseCertificateListModel;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      certificateListModel: 'CertificateListModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      certificateListModel: DescribeVodCertificateListResponseCertificateListModel,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchStopVodDomainRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainNames: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainNames: 'DomainNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchStopVodDomainResponse extends $tea.Model {
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

export class DeleteVodDomainRequest extends $tea.Model {
  ownerId?: number;
  ownerAccount?: string;
  securityToken?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      ownerAccount: 'OwnerAccount',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      ownerAccount: 'string',
      securityToken: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVodDomainResponse extends $tea.Model {
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

export class SetVodDomainCertificateRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName: string;
  certName?: string;
  SSLProtocol: string;
  SSLPub?: string;
  SSLPri?: string;
  region?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
      certName: 'CertName',
      SSLProtocol: 'SSLProtocol',
      SSLPub: 'SSLPub',
      SSLPri: 'SSLPri',
      region: 'Region',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
      certName: 'string',
      SSLProtocol: 'string',
      SSLPub: 'string',
      SSLPri: 'string',
      region: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetVodDomainCertificateResponse extends $tea.Model {
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

export class DeleteVodSpecificConfigRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName: string;
  configId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
      configId: 'ConfigId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
      configId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVodSpecificConfigResponse extends $tea.Model {
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

export class BatchSetVodDomainConfigsRequest extends $tea.Model {
  ownerId?: number;
  ownerAccount?: string;
  securityToken?: string;
  domainNames: string;
  functions: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      ownerAccount: 'OwnerAccount',
      securityToken: 'SecurityToken',
      domainNames: 'DomainNames',
      functions: 'Functions',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      ownerAccount: 'string',
      securityToken: 'string',
      domainNames: 'string',
      functions: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchSetVodDomainConfigsResponse extends $tea.Model {
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

export class AddVodDomainRequest extends $tea.Model {
  ownerId?: number;
  ownerAccount?: string;
  securityToken?: string;
  domainName: string;
  sources: string;
  checkUrl?: string;
  scope?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      ownerAccount: 'OwnerAccount',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
      sources: 'Sources',
      checkUrl: 'CheckUrl',
      scope: 'Scope',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      ownerAccount: 'string',
      securityToken: 'string',
      domainName: 'string',
      sources: 'string',
      checkUrl: 'string',
      scope: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddVodDomainResponse extends $tea.Model {
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

export class DescribeVodRefreshQuotaRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodRefreshQuotaResponse extends $tea.Model {
  requestId: string;
  urlQuota: string;
  dirQuota: string;
  urlRemain: string;
  dirRemain: string;
  preloadQuota: string;
  blockQuota: string;
  preloadRemain: string;
  blockRemain: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      urlQuota: 'UrlQuota',
      dirQuota: 'DirQuota',
      urlRemain: 'UrlRemain',
      dirRemain: 'DirRemain',
      preloadQuota: 'PreloadQuota',
      blockQuota: 'BlockQuota',
      preloadRemain: 'PreloadRemain',
      blockRemain: 'blockRemain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      urlQuota: 'string',
      dirQuota: 'string',
      urlRemain: 'string',
      dirRemain: 'string',
      preloadQuota: 'string',
      blockQuota: 'string',
      preloadRemain: 'string',
      blockRemain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodRefreshTasksRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  taskId?: string;
  objectPath?: string;
  pageNumber?: number;
  objectType?: string;
  domainName?: string;
  status?: string;
  pageSize?: number;
  startTime?: string;
  endTime?: string;
  resourceGroupId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      taskId: 'TaskId',
      objectPath: 'ObjectPath',
      pageNumber: 'PageNumber',
      objectType: 'ObjectType',
      domainName: 'DomainName',
      status: 'Status',
      pageSize: 'PageSize',
      startTime: 'StartTime',
      endTime: 'EndTime',
      resourceGroupId: 'ResourceGroupId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      taskId: 'string',
      objectPath: 'string',
      pageNumber: 'number',
      objectType: 'string',
      domainName: 'string',
      status: 'string',
      pageSize: 'number',
      startTime: 'string',
      endTime: 'string',
      resourceGroupId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodRefreshTasksResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  tasks: DescribeVodRefreshTasksResponseTasks;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      tasks: 'Tasks',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      tasks: DescribeVodRefreshTasksResponseTasks,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName: string;
  functionNames: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
      functionNames: 'FunctionNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
      functionNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsResponse extends $tea.Model {
  requestId: string;
  domainConfigs: DescribeVodDomainConfigsResponseDomainConfigs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainConfigs: 'DomainConfigs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainConfigs: DescribeVodDomainConfigsResponseDomainConfigs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  pageSize?: number;
  pageNumber?: number;
  domainName?: string;
  domainStatus?: string;
  domainSearchType?: string;
  cdnType?: string;
  checkDomainShow?: boolean;
  funcId?: string;
  funcFilter?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      pageSize: 'PageSize',
      pageNumber: 'PageNumber',
      domainName: 'DomainName',
      domainStatus: 'DomainStatus',
      domainSearchType: 'DomainSearchType',
      cdnType: 'CdnType',
      checkDomainShow: 'CheckDomainShow',
      funcId: 'FuncId',
      funcFilter: 'FuncFilter',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      pageSize: 'number',
      pageNumber: 'number',
      domainName: 'string',
      domainStatus: 'string',
      domainSearchType: 'string',
      cdnType: 'string',
      checkDomainShow: 'boolean',
      funcId: 'string',
      funcFilter: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsResponse extends $tea.Model {
  requestId: string;
  pageNumber: number;
  pageSize: number;
  totalCount: number;
  domains: DescribeVodUserDomainsResponseDomains;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      totalCount: 'TotalCount',
      domains: 'Domains',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNumber: 'number',
      pageSize: 'number',
      totalCount: 'number',
      domains: DescribeVodUserDomainsResponseDomains,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVodDomainRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName: string;
  sources?: string;
  topLevelDomain?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
      sources: 'Sources',
      topLevelDomain: 'TopLevelDomain',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
      sources: 'string',
      topLevelDomain: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVodDomainResponse extends $tea.Model {
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

export class RefreshVodObjectCachesRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  objectPath: string;
  objectType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      objectPath: 'ObjectPath',
      objectType: 'ObjectType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      objectPath: 'string',
      objectType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RefreshVodObjectCachesResponse extends $tea.Model {
  requestId: string;
  refreshTaskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      refreshTaskId: 'RefreshTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      refreshTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreloadVodObjectCachesRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  objectPath: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      objectPath: 'ObjectPath',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      objectPath: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class PreloadVodObjectCachesResponse extends $tea.Model {
  requestId: string;
  preloadTaskId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      preloadTaskId: 'PreloadTaskId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      preloadTaskId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchStartVodDomainRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainNames: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainNames: 'DomainNames',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainNames: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class BatchStartVodDomainResponse extends $tea.Model {
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

export class DescribeVodDomainDetailRequest extends $tea.Model {
  ownerId?: number;
  securityToken?: string;
  domainName: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      securityToken: 'SecurityToken',
      domainName: 'DomainName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      securityToken: 'string',
      domainName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainDetailResponse extends $tea.Model {
  requestId: string;
  domainDetail: DescribeVodDomainDetailResponseDomainDetail;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      domainDetail: 'DomainDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      domainDetail: DescribeVodDomainDetailResponseDomainDetail,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVodTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  vodTemplateId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      vodTemplateId: 'VodTemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      vodTemplateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVodTemplateResponse extends $tea.Model {
  requestId: string;
  vodTemplateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vodTemplateId: 'VodTemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vodTemplateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVodTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  vodTemplateId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      vodTemplateId: 'VodTemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      vodTemplateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVodTemplateResponse extends $tea.Model {
  requestId: string;
  vodTemplateInfo: GetVodTemplateResponseVodTemplateInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vodTemplateInfo: 'VodTemplateInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vodTemplateInfo: GetVodTemplateResponseVodTemplateInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVodTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  templateType: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      templateType: 'TemplateType',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      templateType: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVodTemplateResponse extends $tea.Model {
  requestId: string;
  vodTemplateInfoList: ListVodTemplateResponseVodTemplateInfoList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vodTemplateInfoList: 'VodTemplateInfoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vodTemplateInfoList: { 'type': 'array', 'itemType': ListVodTemplateResponseVodTemplateInfoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVodTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  vodTemplateId: string;
  name?: string;
  templateConfig?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      vodTemplateId: 'VodTemplateId',
      name: 'Name',
      templateConfig: 'TemplateConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      vodTemplateId: 'string',
      name: 'string',
      templateConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVodTemplateResponse extends $tea.Model {
  requestId: string;
  vodTemplateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vodTemplateId: 'VodTemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vodTemplateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddVodTemplateRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  name: string;
  templateType: string;
  subTemplateType?: string;
  templateConfig: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      name: 'Name',
      templateType: 'TemplateType',
      subTemplateType: 'SubTemplateType',
      templateConfig: 'TemplateConfig',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      name: 'string',
      templateType: 'string',
      subTemplateType: 'string',
      templateConfig: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddVodTemplateResponse extends $tea.Model {
  requestId: string;
  vodTemplateId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      vodTemplateId: 'VodTemplateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      vodTemplateId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadAttachedMediaRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  title?: string;
  businessType: string;
  mediaExt?: string;
  fileName?: string;
  fileSize?: string;
  tags?: string;
  cateId?: number;
  storageLocation?: string;
  description?: string;
  userData?: string;
  cateIds?: string;
  appId?: string;
  icon?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      title: 'Title',
      businessType: 'BusinessType',
      mediaExt: 'MediaExt',
      fileName: 'FileName',
      fileSize: 'FileSize',
      tags: 'Tags',
      cateId: 'CateId',
      storageLocation: 'StorageLocation',
      description: 'Description',
      userData: 'UserData',
      cateIds: 'CateIds',
      appId: 'AppId',
      icon: 'Icon',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      title: 'string',
      businessType: 'string',
      mediaExt: 'string',
      fileName: 'string',
      fileSize: 'string',
      tags: 'string',
      cateId: 'number',
      storageLocation: 'string',
      description: 'string',
      userData: 'string',
      cateIds: 'string',
      appId: 'string',
      icon: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadAttachedMediaResponse extends $tea.Model {
  requestId: string;
  mediaId: string;
  mediaURL: string;
  uploadAddress: string;
  uploadAuth: string;
  fileURL: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaId: 'MediaId',
      mediaURL: 'MediaURL',
      uploadAddress: 'UploadAddress',
      uploadAuth: 'UploadAuth',
      fileURL: 'FileURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaId: 'string',
      mediaURL: 'string',
      uploadAddress: 'string',
      uploadAuth: 'string',
      fileURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RegisterMediaRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  registerMetadatas: string;
  templateGroupId?: string;
  userData?: string;
  workflowId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      registerMetadatas: 'RegisterMetadatas',
      templateGroupId: 'TemplateGroupId',
      userData: 'UserData',
      workflowId: 'WorkflowId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      registerMetadatas: 'string',
      templateGroupId: 'string',
      userData: 'string',
      workflowId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RegisterMediaResponse extends $tea.Model {
  requestId: string;
  registeredMediaList: RegisterMediaResponseRegisteredMediaList[];
  failedFileURLs: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      registeredMediaList: 'RegisteredMediaList',
      failedFileURLs: 'FailedFileURLs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      registeredMediaList: { 'type': 'array', 'itemType': RegisterMediaResponseRegisteredMediaList },
      failedFileURLs: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  watermarkId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      watermarkId: 'WatermarkId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      watermarkId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteWatermarkResponse extends $tea.Model {
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

export class GetWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  watermarkId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      watermarkId: 'WatermarkId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      watermarkId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetWatermarkResponse extends $tea.Model {
  requestId: string;
  watermarkInfo: GetWatermarkResponseWatermarkInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      watermarkInfo: 'WatermarkInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      watermarkInfo: GetWatermarkResponseWatermarkInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  watermarkId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      watermarkId: 'WatermarkId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      watermarkId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetDefaultWatermarkResponse extends $tea.Model {
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

export class ListWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  pageSize?: number;
  pageNo?: number;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      pageSize: 'number',
      pageNo: 'number',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListWatermarkResponse extends $tea.Model {
  requestId: string;
  watermarkInfos: ListWatermarkResponseWatermarkInfos[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      watermarkInfos: 'WatermarkInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      watermarkInfos: { 'type': 'array', 'itemType': ListWatermarkResponseWatermarkInfos },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  name?: string;
  watermarkId: string;
  watermarkConfig: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      name: 'Name',
      watermarkId: 'WatermarkId',
      watermarkConfig: 'WatermarkConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      name: 'string',
      watermarkId: 'string',
      watermarkConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateWatermarkResponse extends $tea.Model {
  requestId: string;
  watermarkInfo: UpdateWatermarkResponseWatermarkInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      watermarkInfo: 'WatermarkInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      watermarkInfo: UpdateWatermarkResponseWatermarkInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddWatermarkRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  type: string;
  name: string;
  watermarkConfig: string;
  fileUrl?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      type: 'Type',
      name: 'Name',
      watermarkConfig: 'WatermarkConfig',
      fileUrl: 'FileUrl',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      type: 'string',
      name: 'string',
      watermarkConfig: 'string',
      fileUrl: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddWatermarkResponse extends $tea.Model {
  requestId: string;
  watermarkInfo: AddWatermarkResponseWatermarkInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      watermarkInfo: 'WatermarkInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      watermarkInfo: AddWatermarkResponseWatermarkInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  mediaId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      mediaId: 'MediaId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      mediaId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponse extends $tea.Model {
  requestId: string;
  DNAResult: GetMediaDNAResultResponseDNAResult;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      DNAResult: 'DNAResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      DNAResult: GetMediaDNAResultResponseDNAResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMezzaninesRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoIds: string;
  force?: boolean;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoIds: 'VideoIds',
      force: 'Force',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoIds: 'string',
      force: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteMezzaninesResponse extends $tea.Model {
  requestId: string;
  nonExistVideoIds: string[];
  unRemoveableVideoIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistVideoIds: 'NonExistVideoIds',
      unRemoveableVideoIds: 'UnRemoveableVideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistVideoIds: { 'type': 'array', 'itemType': 'string' },
      unRemoveableVideoIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateImageInfosRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  resourceRealOwnerId?: number;
  updateContent: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      updateContent: 'UpdateContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      resourceRealOwnerId: 'number',
      updateContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateImageInfosResponse extends $tea.Model {
  requestId: string;
  nonExistImageIds: UpdateImageInfosResponseNonExistImageIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistImageIds: 'NonExistImageIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistImageIds: UpdateImageInfosResponseNonExistImageIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  deleteImageType: string;
  imageURLs?: string;
  imageIds?: string;
  videoId?: string;
  imageType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      deleteImageType: 'DeleteImageType',
      imageURLs: 'ImageURLs',
      imageIds: 'ImageIds',
      videoId: 'VideoId',
      imageType: 'ImageType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      deleteImageType: 'string',
      imageURLs: 'string',
      imageIds: 'string',
      videoId: 'string',
      imageType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteImageResponse extends $tea.Model {
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

export class ListAuditSecurityIpRequest extends $tea.Model {
  securityGroupName?: string;
  static names(): { [key: string]: string } {
    return {
      securityGroupName: 'SecurityGroupName',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupName: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAuditSecurityIpResponse extends $tea.Model {
  requestId: string;
  securityIpList: ListAuditSecurityIpResponseSecurityIpList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      securityIpList: 'SecurityIpList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      securityIpList: { 'type': 'array', 'itemType': ListAuditSecurityIpResponseSecurityIpList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetAuditSecurityIpRequest extends $tea.Model {
  securityGroupName?: string;
  ips: string;
  operateMode?: string;
  static names(): { [key: string]: string } {
    return {
      securityGroupName: 'SecurityGroupName',
      ips: 'Ips',
      operateMode: 'OperateMode',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupName: 'string',
      ips: 'string',
      operateMode: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetAuditSecurityIpResponse extends $tea.Model {
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

export class UploadMediaByURLRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  uploadURLs: string;
  templateGroupId?: string;
  storageLocation?: string;
  uploadMetadatas?: string;
  priority?: string;
  messageCallback?: string;
  userData?: string;
  appId?: string;
  workflowId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      uploadURLs: 'UploadURLs',
      templateGroupId: 'TemplateGroupId',
      storageLocation: 'StorageLocation',
      uploadMetadatas: 'UploadMetadatas',
      priority: 'Priority',
      messageCallback: 'MessageCallback',
      userData: 'UserData',
      appId: 'AppId',
      workflowId: 'WorkflowId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      uploadURLs: 'string',
      templateGroupId: 'string',
      storageLocation: 'string',
      uploadMetadatas: 'string',
      priority: 'string',
      messageCallback: 'string',
      userData: 'string',
      appId: 'string',
      workflowId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UploadMediaByURLResponse extends $tea.Model {
  requestId: string;
  uploadJobs: UploadMediaByURLResponseUploadJobs[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      uploadJobs: 'UploadJobs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      uploadJobs: { 'type': 'array', 'itemType': UploadMediaByURLResponseUploadJobs },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVideoInfosRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  updateContent: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      updateContent: 'UpdateContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      updateContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVideoInfosResponse extends $tea.Model {
  requestId: string;
  nonExistVideoIds: string[];
  forbiddenVideoIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistVideoIds: 'NonExistVideoIds',
      forbiddenVideoIds: 'ForbiddenVideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistVideoIds: { 'type': 'array', 'itemType': 'string' },
      forbiddenVideoIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  searchType?: string;
  fields?: string;
  match?: string;
  sortBy?: string;
  pageNo?: number;
  pageSize?: number;
  scrollToken?: string;
  sessionId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      searchType: 'SearchType',
      fields: 'Fields',
      match: 'Match',
      sortBy: 'SortBy',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      scrollToken: 'ScrollToken',
      sessionId: 'SessionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      searchType: 'string',
      fields: 'string',
      match: 'string',
      sortBy: 'string',
      pageNo: 'number',
      pageSize: 'number',
      scrollToken: 'string',
      sessionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponse extends $tea.Model {
  requestId: string;
  scrollToken: string;
  total: number;
  mediaList: SearchMediaResponseMediaList[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      scrollToken: 'ScrollToken',
      total: 'Total',
      mediaList: 'MediaList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      scrollToken: 'string',
      total: 'number',
      mediaList: { 'type': 'array', 'itemType': SearchMediaResponseMediaList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfosRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoIds: string;
  additionType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoIds: 'VideoIds',
      additionType: 'AdditionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoIds: 'string',
      additionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfosResponse extends $tea.Model {
  requestId: string;
  videoList: GetVideoInfosResponseVideoList[];
  nonExistVideoIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      videoList: 'VideoList',
      nonExistVideoIds: 'NonExistVideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      videoList: { 'type': 'array', 'itemType': GetVideoInfosResponseVideoList },
      nonExistVideoIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitPreprocessJobsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  preprocessType: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      preprocessType: 'PreprocessType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      preprocessType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitPreprocessJobsResponse extends $tea.Model {
  requestId: string;
  preprocessJobs: SubmitPreprocessJobsResponsePreprocessJobs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      preprocessJobs: 'PreprocessJobs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      preprocessJobs: SubmitPreprocessJobsResponsePreprocessJobs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayVideoStatisRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  videoId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
      videoId: 'VideoId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
      videoId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayVideoStatisResponse extends $tea.Model {
  requestId: string;
  videoPlayStatisDetails: DescribePlayVideoStatisResponseVideoPlayStatisDetails;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      videoPlayStatisDetails: 'VideoPlayStatisDetails',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      videoPlayStatisDetails: DescribePlayVideoStatisResponseVideoPlayStatisDetails,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalResponse extends $tea.Model {
  requestId: string;
  userPlayStatisTotals: DescribePlayUserTotalResponseUserPlayStatisTotals;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      userPlayStatisTotals: 'UserPlayStatisTotals',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      userPlayStatisTotals: DescribePlayUserTotalResponseUserPlayStatisTotals,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserAvgRequest extends $tea.Model {
  ownerId?: number;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserAvgResponse extends $tea.Model {
  requestId: string;
  userPlayStatisAvgs: DescribePlayUserAvgResponseUserPlayStatisAvgs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      userPlayStatisAvgs: 'UserPlayStatisAvgs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      userPlayStatisAvgs: DescribePlayUserAvgResponseUserPlayStatisAvgs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayTopVideosRequest extends $tea.Model {
  ownerId?: number;
  bizDate: string;
  pageNo?: number;
  pageSize?: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      bizDate: 'BizDate',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      bizDate: 'string',
      pageNo: 'number',
      pageSize: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayTopVideosResponse extends $tea.Model {
  requestId: string;
  pageNo: number;
  pageSize: number;
  totalNum: number;
  topPlayVideos: DescribePlayTopVideosResponseTopPlayVideos;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      totalNum: 'TotalNum',
      topPlayVideos: 'TopPlayVideos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      pageNo: 'number',
      pageSize: 'number',
      totalNum: 'number',
      topPlayVideos: DescribePlayTopVideosResponseTopPlayVideos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSnapshotsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  snapshotType?: string;
  authTimeout?: string;
  pageSize?: string;
  pageNo?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      snapshotType: 'SnapshotType',
      authTimeout: 'AuthTimeout',
      pageSize: 'PageSize',
      pageNo: 'PageNo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      snapshotType: 'string',
      authTimeout: 'string',
      pageSize: 'string',
      pageNo: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSnapshotsResponse extends $tea.Model {
  requestId: string;
  mediaSnapshot: ListSnapshotsResponseMediaSnapshot;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaSnapshot: 'MediaSnapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaSnapshot: ListSnapshotsResponseMediaSnapshot,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitTranscodeJobsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId?: string;
  templateGroupId: string;
  pipelineId?: string;
  encryptConfig?: string;
  overrideParams?: string;
  priority?: string;
  userData?: string;
  fileUrl?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      templateGroupId: 'TemplateGroupId',
      pipelineId: 'PipelineId',
      encryptConfig: 'EncryptConfig',
      overrideParams: 'OverrideParams',
      priority: 'Priority',
      userData: 'UserData',
      fileUrl: 'FileUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      templateGroupId: 'string',
      pipelineId: 'string',
      encryptConfig: 'string',
      overrideParams: 'string',
      priority: 'string',
      userData: 'string',
      fileUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitTranscodeJobsResponse extends $tea.Model {
  requestId: string;
  transcodeTaskId: string;
  transcodeJobs: SubmitTranscodeJobsResponseTranscodeJobs;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      transcodeTaskId: 'TranscodeTaskId',
      transcodeJobs: 'TranscodeJobs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      transcodeTaskId: 'string',
      transcodeJobs: SubmitTranscodeJobsResponseTranscodeJobs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  streamName?: string;
  domainName?: string;
  appName?: string;
  queryType?: string;
  pageNo?: number;
  pageSize?: number;
  sortBy?: string;
  startTime?: string;
  endTime?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      streamName: 'StreamName',
      domainName: 'DomainName',
      appName: 'AppName',
      queryType: 'QueryType',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      sortBy: 'SortBy',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      streamName: 'string',
      domainName: 'string',
      appName: 'string',
      queryType: 'string',
      pageNo: 'number',
      pageSize: 'number',
      sortBy: 'string',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponse extends $tea.Model {
  requestId: string;
  total: number;
  liveRecordVideoList: ListLiveRecordVideoResponseLiveRecordVideoList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      total: 'Total',
      liveRecordVideoList: 'LiveRecordVideoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      total: 'number',
      liveRecordVideoList: ListLiveRecordVideoResponseLiveRecordVideoList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAuditRequest extends $tea.Model {
  auditContent: string;
  static names(): { [key: string]: string } {
    return {
      auditContent: 'AuditContent',
    };
  }

  static types(): { [key: string]: any } {
    return {
      auditContent: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateAuditResponse extends $tea.Model {
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

export class GetAuditHistoryRequest extends $tea.Model {
  videoId: string;
  pageNo?: number;
  pageSize?: number;
  sortBy?: string;
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      sortBy: 'SortBy',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      pageNo: 'number',
      pageSize: 'number',
      sortBy: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAuditHistoryResponse extends $tea.Model {
  requestId: string;
  status: string;
  total: number;
  histories: GetAuditHistoryResponseHistories[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      status: 'Status',
      total: 'Total',
      histories: 'Histories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      status: 'string',
      total: 'number',
      histories: { 'type': 'array', 'itemType': GetAuditHistoryResponseHistories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAIJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  jobIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      jobIds: 'JobIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      jobIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAIJobResponse extends $tea.Model {
  requestId: string;
  AIJobList: ListAIJobResponseAIJobList;
  nonExistAIJobIds: ListAIJobResponseNonExistAIJobIds;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      AIJobList: 'AIJobList',
      nonExistAIJobIds: 'NonExistAIJobIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      AIJobList: ListAIJobResponseAIJobList,
      nonExistAIJobIds: ListAIJobResponseNonExistAIJobIds,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  mediaId?: string;
  types?: string;
  config?: string;
  userData?: string;
  input?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      mediaId: 'MediaId',
      types: 'Types',
      config: 'Config',
      userData: 'UserData',
      input: 'Input',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      mediaId: 'string',
      types: 'string',
      config: 'string',
      userData: 'string',
      input: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIJobResponse extends $tea.Model {
  requestId: string;
  AIJobList: SubmitAIJobResponseAIJobList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      AIJobList: 'AIJobList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      AIJobList: SubmitAIJobResponseAIJobList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetImageInfoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  imageId: string;
  authTimeout?: number;
  outputType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      imageId: 'ImageId',
      authTimeout: 'AuthTimeout',
      outputType: 'OutputType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      imageId: 'string',
      authTimeout: 'number',
      outputType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetImageInfoResponse extends $tea.Model {
  requestId: string;
  imageInfo: GetImageInfoResponseImageInfo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      imageInfo: 'ImageInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      imageInfo: GetImageInfoResponseImageInfo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStreamRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  jobIds: string;
  videoId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      jobIds: 'JobIds',
      videoId: 'VideoId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      jobIds: 'string',
      videoId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteStreamResponse extends $tea.Model {
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

export class SubmitSnapshotJobRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId?: string;
  specifiedOffsetTime?: number;
  width?: string;
  height?: string;
  count?: number;
  interval?: number;
  spriteSnapshotConfig?: string;
  snapshotTemplateId?: string;
  userData?: string;
  fileUrl?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      specifiedOffsetTime: 'SpecifiedOffsetTime',
      width: 'Width',
      height: 'Height',
      count: 'Count',
      interval: 'Interval',
      spriteSnapshotConfig: 'SpriteSnapshotConfig',
      snapshotTemplateId: 'SnapshotTemplateId',
      userData: 'UserData',
      fileUrl: 'FileUrl',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      specifiedOffsetTime: 'number',
      width: 'string',
      height: 'string',
      count: 'number',
      interval: 'number',
      spriteSnapshotConfig: 'string',
      snapshotTemplateId: 'string',
      userData: 'string',
      fileUrl: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitSnapshotJobResponse extends $tea.Model {
  requestId: string;
  snapshotJob: SubmitSnapshotJobResponseSnapshotJob;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      snapshotJob: 'SnapshotJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      snapshotJob: SubmitSnapshotJobResponseSnapshotJob,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateEditingProjectRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  projectId: string;
  title?: string;
  timeline?: string;
  description?: string;
  coverURL?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      projectId: 'ProjectId',
      title: 'Title',
      timeline: 'Timeline',
      description: 'Description',
      coverURL: 'CoverURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      projectId: 'string',
      title: 'string',
      timeline: 'string',
      description: 'string',
      coverURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateEditingProjectResponse extends $tea.Model {
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

export class SetEditingProjectMaterialsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  projectId: string;
  materialIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      projectId: 'ProjectId',
      materialIds: 'MaterialIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      projectId: 'string',
      materialIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetEditingProjectMaterialsResponse extends $tea.Model {
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

export class SearchEditingProjectRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  endTime?: string;
  startTime?: string;
  status?: string;
  pageNo?: number;
  pageSize?: number;
  sortBy?: string;
  title?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      endTime: 'EndTime',
      startTime: 'StartTime',
      status: 'Status',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      sortBy: 'SortBy',
      title: 'Title',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      endTime: 'string',
      startTime: 'string',
      status: 'string',
      pageNo: 'number',
      pageSize: 'number',
      sortBy: 'string',
      title: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEditingProjectResponse extends $tea.Model {
  requestId: string;
  total: number;
  projectList: SearchEditingProjectResponseProjectList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      total: 'Total',
      projectList: 'ProjectList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      total: 'number',
      projectList: SearchEditingProjectResponseProjectList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ProduceEditingProjectVideoRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  projectId?: string;
  timeline?: string;
  title?: string;
  description?: string;
  coverURL?: string;
  mediaMetadata?: string;
  produceConfig?: string;
  userData?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      projectId: 'ProjectId',
      timeline: 'Timeline',
      title: 'Title',
      description: 'Description',
      coverURL: 'CoverURL',
      mediaMetadata: 'MediaMetadata',
      produceConfig: 'ProduceConfig',
      userData: 'UserData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      projectId: 'string',
      timeline: 'string',
      title: 'string',
      description: 'string',
      coverURL: 'string',
      mediaMetadata: 'string',
      produceConfig: 'string',
      userData: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ProduceEditingProjectVideoResponse extends $tea.Model {
  requestId: string;
  mediaId: string;
  projectId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mediaId: 'MediaId',
      projectId: 'ProjectId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mediaId: 'string',
      projectId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  projectId: string;
  type?: string;
  materialType?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      projectId: 'ProjectId',
      type: 'Type',
      materialType: 'MaterialType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      projectId: 'string',
      type: 'string',
      materialType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsResponse extends $tea.Model {
  requestId: string;
  materialList: GetEditingProjectMaterialsResponseMaterialList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      materialList: 'MaterialList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      materialList: GetEditingProjectMaterialsResponseMaterialList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  projectId: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      projectId: 'ProjectId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      projectId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectResponse extends $tea.Model {
  requestId: string;
  project: GetEditingProjectResponseProject;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      project: 'Project',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      project: GetEditingProjectResponseProject,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEditingProjectRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  projectIds: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      projectIds: 'ProjectIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      projectIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteEditingProjectResponse extends $tea.Model {
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

export class AddEditingProjectRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  title: string;
  description?: string;
  timeline?: string;
  coverURL?: string;
  division?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      title: 'Title',
      description: 'Description',
      timeline: 'Timeline',
      coverURL: 'CoverURL',
      division: 'Division',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      title: 'string',
      description: 'string',
      timeline: 'string',
      coverURL: 'string',
      division: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddEditingProjectResponse extends $tea.Model {
  requestId: string;
  project: AddEditingProjectResponseProject;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      project: 'Project',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      project: AddEditingProjectResponseProject,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMezzanineInfoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  authTimeout?: number;
  previewSegment?: boolean;
  outputType?: string;
  additionType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      authTimeout: 'AuthTimeout',
      previewSegment: 'PreviewSegment',
      outputType: 'OutputType',
      additionType: 'AdditionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      authTimeout: 'number',
      previewSegment: 'boolean',
      outputType: 'string',
      additionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMezzanineInfoResponse extends $tea.Model {
  requestId: string;
  mezzanine: GetMezzanineInfoResponseMezzanine;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      mezzanine: 'Mezzanine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      mezzanine: GetMezzanineInfoResponseMezzanine,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCategoryRequest extends $tea.Model {
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  cateName: string;
  cateId: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      cateName: 'CateName',
      cateId: 'CateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      cateName: 'string',
      cateId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateCategoryResponse extends $tea.Model {
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

export class GetCategoriesRequest extends $tea.Model {
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  cateId?: number;
  pageNo?: number;
  pageSize?: number;
  sortBy?: string;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      cateId: 'CateId',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      sortBy: 'SortBy',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      cateId: 'number',
      pageNo: 'number',
      pageSize: 'number',
      sortBy: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCategoriesResponse extends $tea.Model {
  requestId: string;
  subTotal: number;
  subCategories: GetCategoriesResponseSubCategories;
  category: GetCategoriesResponseCategory;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      subTotal: 'SubTotal',
      subCategories: 'SubCategories',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      subTotal: 'number',
      subCategories: GetCategoriesResponseSubCategories,
      category: GetCategoriesResponseCategory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCategoryRequest extends $tea.Model {
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  cateId: number;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      cateId: 'CateId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      cateId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteCategoryResponse extends $tea.Model {
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

export class AddCategoryRequest extends $tea.Model {
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  cateName: string;
  parentId?: number;
  type?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      cateName: 'CateName',
      parentId: 'ParentId',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      cateName: 'string',
      parentId: 'number',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCategoryResponse extends $tea.Model {
  requestId: string;
  category: AddCategoryResponseCategory;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      category: AddCategoryResponseCategory,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  formats?: string;
  authTimeout?: number;
  outputType?: string;
  streamType?: string;
  reAuthInfo?: string;
  definition?: string;
  resultType?: string;
  playConfig?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      formats: 'Formats',
      authTimeout: 'AuthTimeout',
      outputType: 'OutputType',
      streamType: 'StreamType',
      reAuthInfo: 'ReAuthInfo',
      definition: 'Definition',
      resultType: 'ResultType',
      playConfig: 'PlayConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      formats: 'string',
      authTimeout: 'number',
      outputType: 'string',
      streamType: 'string',
      reAuthInfo: 'string',
      definition: 'string',
      resultType: 'string',
      playConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponse extends $tea.Model {
  requestId: string;
  playInfoList: GetPlayInfoResponsePlayInfoList;
  videoBase: GetPlayInfoResponseVideoBase;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      playInfoList: 'PlayInfoList',
      videoBase: 'VideoBase',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      playInfoList: GetPlayInfoResponsePlayInfoList,
      videoBase: GetPlayInfoResponseVideoBase,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadImageRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  title?: string;
  imageType: string;
  imageExt?: string;
  originalFileName?: string;
  tags?: string;
  storageLocation?: string;
  cateId?: number;
  userData?: string;
  description?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      title: 'Title',
      imageType: 'ImageType',
      imageExt: 'ImageExt',
      originalFileName: 'OriginalFileName',
      tags: 'Tags',
      storageLocation: 'StorageLocation',
      cateId: 'CateId',
      userData: 'UserData',
      description: 'Description',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      title: 'string',
      imageType: 'string',
      imageExt: 'string',
      originalFileName: 'string',
      tags: 'string',
      storageLocation: 'string',
      cateId: 'number',
      userData: 'string',
      description: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadImageResponse extends $tea.Model {
  requestId: string;
  imageId: string;
  imageURL: string;
  uploadAddress: string;
  uploadAuth: string;
  fileURL: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      imageId: 'ImageId',
      imageURL: 'ImageURL',
      uploadAddress: 'UploadAddress',
      uploadAuth: 'UploadAuth',
      fileURL: 'FileURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      imageId: 'string',
      imageURL: 'string',
      uploadAddress: 'string',
      uploadAuth: 'string',
      fileURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetMessageCallbackRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  callbackType?: string;
  callbackURL?: string;
  eventTypeList?: string;
  authSwitch?: string;
  authKey?: string;
  resourceRealOwnerId?: number;
  mnsEndpoint?: string;
  mnsQueueName?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      callbackType: 'CallbackType',
      callbackURL: 'CallbackURL',
      eventTypeList: 'EventTypeList',
      authSwitch: 'AuthSwitch',
      authKey: 'AuthKey',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      mnsEndpoint: 'MnsEndpoint',
      mnsQueueName: 'MnsQueueName',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      callbackType: 'string',
      callbackURL: 'string',
      eventTypeList: 'string',
      authSwitch: 'string',
      authKey: 'string',
      resourceRealOwnerId: 'number',
      mnsEndpoint: 'string',
      mnsQueueName: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SetMessageCallbackResponse extends $tea.Model {
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

export class GetMessageCallbackRequest extends $tea.Model {
  accessKeyId?: string;
  ownerId?: string;
  resourceOwnerId?: string;
  resourceOwnerAccount?: string;
  ownerAccount?: string;
  resourceRealOwnerId?: number;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      accessKeyId: 'AccessKeyId',
      ownerId: 'OwnerId',
      resourceOwnerId: 'ResourceOwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      ownerAccount: 'OwnerAccount',
      resourceRealOwnerId: 'ResourceRealOwnerId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      accessKeyId: 'string',
      ownerId: 'string',
      resourceOwnerId: 'string',
      resourceOwnerAccount: 'string',
      ownerAccount: 'string',
      resourceRealOwnerId: 'number',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMessageCallbackResponse extends $tea.Model {
  requestId: string;
  messageCallback: GetMessageCallbackResponseMessageCallback;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      messageCallback: 'MessageCallback',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      messageCallback: GetMessageCallbackResponseMessageCallback,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVideoInfoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  title?: string;
  tags?: string;
  description?: string;
  coverURL?: string;
  cateId?: number;
  customMediaInfo?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      title: 'Title',
      tags: 'Tags',
      description: 'Description',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      customMediaInfo: 'CustomMediaInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      title: 'string',
      tags: 'string',
      description: 'string',
      coverURL: 'string',
      cateId: 'number',
      customMediaInfo: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateVideoInfoResponse extends $tea.Model {
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

export class GetVideoPlayAuthRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  authInfoTimeout?: number;
  playConfig?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      authInfoTimeout: 'AuthInfoTimeout',
      playConfig: 'PlayConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      authInfoTimeout: 'number',
      playConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoPlayAuthResponse extends $tea.Model {
  requestId: string;
  playAuth: string;
  videoMeta: GetVideoPlayAuthResponseVideoMeta;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      playAuth: 'PlayAuth',
      videoMeta: 'VideoMeta',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      playAuth: 'string',
      videoMeta: GetVideoPlayAuthResponseVideoMeta,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoListRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  cateId?: number;
  status?: string;
  pageNo?: number;
  pageSize?: number;
  sortBy?: string;
  startTime?: string;
  endTime?: string;
  storageLocation?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      cateId: 'CateId',
      status: 'Status',
      pageNo: 'PageNo',
      pageSize: 'PageSize',
      sortBy: 'SortBy',
      startTime: 'StartTime',
      endTime: 'EndTime',
      storageLocation: 'StorageLocation',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      cateId: 'number',
      status: 'string',
      pageNo: 'number',
      pageSize: 'number',
      sortBy: 'string',
      startTime: 'string',
      endTime: 'string',
      storageLocation: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoListResponse extends $tea.Model {
  requestId: string;
  total: number;
  videoList: GetVideoListResponseVideoList;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      total: 'Total',
      videoList: 'VideoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      total: 'number',
      videoList: GetVideoListResponseVideoList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  additionType?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
      additionType: 'AdditionType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
      additionType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoResponse extends $tea.Model {
  requestId: string;
  AI: string;
  video: GetVideoInfoResponseVideo;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      AI: 'AI',
      video: 'Video',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      AI: 'string',
      video: GetVideoInfoResponseVideo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVideoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoIds: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoIds: 'VideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoIds: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DeleteVideoResponse extends $tea.Model {
  requestId: string;
  nonExistVideoIds: string[];
  forbiddenVideoIds: string[];
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      nonExistVideoIds: 'NonExistVideoIds',
      forbiddenVideoIds: 'ForbiddenVideoIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      nonExistVideoIds: { 'type': 'array', 'itemType': 'string' },
      forbiddenVideoIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RefreshUploadVideoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  videoId: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      videoId: 'VideoId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      videoId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RefreshUploadVideoResponse extends $tea.Model {
  requestId: string;
  uploadAuth: string;
  uploadAddress: string;
  videoId: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      uploadAuth: 'UploadAuth',
      uploadAddress: 'UploadAddress',
      videoId: 'VideoId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      uploadAuth: 'string',
      uploadAddress: 'string',
      videoId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadVideoRequest extends $tea.Model {
  ownerId?: number;
  resourceOwnerAccount?: string;
  resourceOwnerId?: number;
  coverURL?: string;
  description?: string;
  fileName: string;
  fileSize?: number;
  IP?: string;
  title: string;
  cateId?: number;
  tags?: string;
  transcodeMode?: string;
  userData?: string;
  templateGroupId?: string;
  workflowId?: string;
  storageLocation?: string;
  customMediaInfo?: string;
  appId?: string;
  static names(): { [key: string]: string } {
    return {
      ownerId: 'OwnerId',
      resourceOwnerAccount: 'ResourceOwnerAccount',
      resourceOwnerId: 'ResourceOwnerId',
      coverURL: 'CoverURL',
      description: 'Description',
      fileName: 'FileName',
      fileSize: 'FileSize',
      IP: 'IP',
      title: 'Title',
      cateId: 'CateId',
      tags: 'Tags',
      transcodeMode: 'TranscodeMode',
      userData: 'UserData',
      templateGroupId: 'TemplateGroupId',
      workflowId: 'WorkflowId',
      storageLocation: 'StorageLocation',
      customMediaInfo: 'CustomMediaInfo',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      ownerId: 'number',
      resourceOwnerAccount: 'string',
      resourceOwnerId: 'number',
      coverURL: 'string',
      description: 'string',
      fileName: 'string',
      fileSize: 'number',
      IP: 'string',
      title: 'string',
      cateId: 'number',
      tags: 'string',
      transcodeMode: 'string',
      userData: 'string',
      templateGroupId: 'string',
      workflowId: 'string',
      storageLocation: 'string',
      customMediaInfo: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class CreateUploadVideoResponse extends $tea.Model {
  requestId: string;
  videoId: string;
  uploadAddress: string;
  uploadAuth: string;
  static names(): { [key: string]: string } {
    return {
      requestId: 'RequestId',
      videoId: 'VideoId',
      uploadAddress: 'UploadAddress',
      uploadAuth: 'UploadAuth',
    };
  }

  static types(): { [key: string]: any } {
    return {
      requestId: 'string',
      videoId: 'string',
      uploadAddress: 'string',
      uploadAuth: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListMediaDNADeleteJobResponseAIJobListAIJob extends $tea.Model {
  jobId: string;
  mediaId: string;
  status: string;
  code: string;
  message: string;
  fpDBId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      mediaId: 'MediaId',
      status: 'Status',
      code: 'Code',
      message: 'Message',
      fpDBId: 'FpDBId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      mediaId: 'string',
      status: 'string',
      code: 'string',
      message: 'string',
      fpDBId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListMediaDNADeleteJobResponseAIJobList extends $tea.Model {
  AIJob: ListMediaDNADeleteJobResponseAIJobListAIJob[];
  static names(): { [key: string]: string } {
    return {
      AIJob: 'AIJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      AIJob: { 'type': 'array', 'itemType': ListMediaDNADeleteJobResponseAIJobListAIJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListMediaDNADeleteJobResponseNonExistAIJobIds extends $tea.Model {
  string: string[];
  static names(): { [key: string]: string } {
    return {
      string: 'String',
    };
  }

  static types(): { [key: string]: any } {
    return {
      string: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList extends $tea.Model {
  startTime: number;
  endTime: number;
  text: string;
  label: string;
  static names(): { [key: string]: string } {
    return {
      startTime: 'StartTime',
      endTime: 'EndTime',
      text: 'Text',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      startTime: 'number',
      endTime: 'number',
      text: 'string',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetail extends $tea.Model {
  total: number;
  pageTotal: number;
  list: GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList[];
  static names(): { [key: string]: string } {
    return {
      total: 'Total',
      pageTotal: 'PageTotal',
      list: 'List',
    };
  }

  static types(): { [key: string]: any } {
    return {
      total: 'number',
      pageTotal: 'number',
      list: { 'type': 'array', 'itemType': GetMediaAuditAudioResultDetailResponseMediaAuditAudioResultDetailList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitDynamicImageJobResponseDynamicImageJob extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResultCategory extends $tea.Model {
  tag: string;
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResultPerson extends $tea.Model {
  faceUrl: string;
  tag: string;
  times: string[];
  static names(): { [key: string]: string } {
    return {
      faceUrl: 'FaceUrl',
      tag: 'Tag',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      faceUrl: 'string',
      tag: 'string',
      times: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResultTime extends $tea.Model {
  tag: string;
  times: string[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: 'string',
      times: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResultLocation extends $tea.Model {
  tag: string;
  times: string[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: 'string',
      times: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResultKeyword extends $tea.Model {
  tag: string;
  times: string[];
  static names(): { [key: string]: string } {
    return {
      tag: 'Tag',
      times: 'Times',
    };
  }

  static types(): { [key: string]: any } {
    return {
      tag: 'string',
      times: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIVideoTagResultResponseVideoTagResult extends $tea.Model {
  category: GetAIVideoTagResultResponseVideoTagResultCategory[];
  person: GetAIVideoTagResultResponseVideoTagResultPerson[];
  time: GetAIVideoTagResultResponseVideoTagResultTime[];
  location: GetAIVideoTagResultResponseVideoTagResultLocation[];
  keyword: GetAIVideoTagResultResponseVideoTagResultKeyword[];
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
      person: 'Person',
      time: 'Time',
      location: 'Location',
      keyword: 'Keyword',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: { 'type': 'array', 'itemType': GetAIVideoTagResultResponseVideoTagResultCategory },
      person: { 'type': 'array', 'itemType': GetAIVideoTagResultResponseVideoTagResultPerson },
      time: { 'type': 'array', 'itemType': GetAIVideoTagResultResponseVideoTagResultTime },
      location: { 'type': 'array', 'itemType': GetAIVideoTagResultResponseVideoTagResultLocation },
      keyword: { 'type': 'array', 'itemType': GetAIVideoTagResultResponseVideoTagResultKeyword },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetUploadDetailsResponseUploadDetails extends $tea.Model {
  mediaId: string;
  title: string;
  fileSize: number;
  status: string;
  uploadStatus: string;
  creationTime: string;
  modificationTime: string;
  completionTime: string;
  uploadSize: number;
  uploadRatio: number;
  uploadIP: string;
  uploadSource: string;
  deviceModel: string;
  static names(): { [key: string]: string } {
    return {
      mediaId: 'MediaId',
      title: 'Title',
      fileSize: 'FileSize',
      status: 'Status',
      uploadStatus: 'UploadStatus',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
      completionTime: 'CompletionTime',
      uploadSize: 'UploadSize',
      uploadRatio: 'UploadRatio',
      uploadIP: 'UploadIP',
      uploadSource: 'UploadSource',
      deviceModel: 'DeviceModel',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mediaId: 'string',
      title: 'string',
      fileSize: 'number',
      status: 'string',
      uploadStatus: 'string',
      creationTime: 'string',
      modificationTime: 'string',
      completionTime: 'string',
      uploadSize: 'number',
      uploadRatio: 'number',
      uploadIP: 'string',
      uploadSource: 'string',
      deviceModel: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodStorageDataResponseStorageDataStorageDataItem extends $tea.Model {
  timeStamp: string;
  storageUtilization: string;
  networkOut: string;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      storageUtilization: 'StorageUtilization',
      networkOut: 'NetworkOut',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      storageUtilization: 'string',
      networkOut: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodStorageDataResponseStorageData extends $tea.Model {
  storageDataItem: DescribeVodStorageDataResponseStorageDataStorageDataItem[];
  static names(): { [key: string]: string } {
    return {
      storageDataItem: 'StorageDataItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      storageDataItem: { 'type': 'array', 'itemType': DescribeVodStorageDataResponseStorageDataStorageDataItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataResponseAIDataAIDataItemDataDataItem extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataResponseAIDataAIDataItemData extends $tea.Model {
  dataItem: DescribeVodAIDataResponseAIDataAIDataItemDataDataItem[];
  static names(): { [key: string]: string } {
    return {
      dataItem: 'DataItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataItem: { 'type': 'array', 'itemType': DescribeVodAIDataResponseAIDataAIDataItemDataDataItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataResponseAIDataAIDataItem extends $tea.Model {
  timeStamp: string;
  data: DescribeVodAIDataResponseAIDataAIDataItemData;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      data: DescribeVodAIDataResponseAIDataAIDataItemData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodAIDataResponseAIData extends $tea.Model {
  AIDataItem: DescribeVodAIDataResponseAIDataAIDataItem[];
  static names(): { [key: string]: string } {
    return {
      AIDataItem: 'AIDataItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      AIDataItem: { 'type': 'array', 'itemType': DescribeVodAIDataResponseAIDataAIDataItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem extends $tea.Model {
  name: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData extends $tea.Model {
  dataItem: DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem[];
  static names(): { [key: string]: string } {
    return {
      dataItem: 'DataItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataItem: { 'type': 'array', 'itemType': DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemDataDataItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem extends $tea.Model {
  timeStamp: string;
  data: DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      data: DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItemData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodTranscodeDataResponseTranscodeData extends $tea.Model {
  transcodeDataItem: DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem[];
  static names(): { [key: string]: string } {
    return {
      transcodeDataItem: 'TranscodeDataItem',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeDataItem: { 'type': 'array', 'itemType': DescribeVodTranscodeDataResponseTranscodeDataTranscodeDataItem },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAttachedMediaInfoResponseAttachedMediaListCategories extends $tea.Model {
  cateId: number;
  cateName: string;
  level: number;
  parentId: number;
  static names(): { [key: string]: string } {
    return {
      cateId: 'CateId',
      cateName: 'CateName',
      level: 'Level',
      parentId: 'ParentId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cateId: 'number',
      cateName: 'string',
      level: 'number',
      parentId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAttachedMediaInfoResponseAttachedMediaList extends $tea.Model {
  mediaId: string;
  title: string;
  type: string;
  tags: string;
  URL: string;
  description: string;
  fileSize: number;
  storageLocation: string;
  creationTime: string;
  modificationTime: string;
  appId: string;
  status: string;
  onlineStatus: string;
  icon: string;
  regionId: string;
  categories: GetAttachedMediaInfoResponseAttachedMediaListCategories[];
  static names(): { [key: string]: string } {
    return {
      mediaId: 'MediaId',
      title: 'Title',
      type: 'Type',
      tags: 'Tags',
      URL: 'URL',
      description: 'Description',
      fileSize: 'FileSize',
      storageLocation: 'StorageLocation',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
      appId: 'AppId',
      status: 'Status',
      onlineStatus: 'OnlineStatus',
      icon: 'Icon',
      regionId: 'RegionId',
      categories: 'Categories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mediaId: 'string',
      title: 'string',
      type: 'string',
      tags: 'string',
      URL: 'string',
      description: 'string',
      fileSize: 'number',
      storageLocation: 'string',
      creationTime: 'string',
      modificationTime: 'string',
      appId: 'string',
      status: 'string',
      onlineStatus: 'string',
      icon: 'string',
      regionId: 'string',
      categories: { 'type': 'array', 'itemType': GetAttachedMediaInfoResponseAttachedMediaListCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAppPoliciesForIdentityResponseAppPolicyList extends $tea.Model {
  appId: string;
  creationTime: string;
  policyName: string;
  policyType: string;
  policyValue: string;
  description: string;
  modificationTime: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      creationTime: 'CreationTime',
      policyName: 'PolicyName',
      policyType: 'PolicyType',
      policyValue: 'PolicyValue',
      description: 'Description',
      modificationTime: 'ModificationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'string',
      creationTime: 'string',
      policyName: 'string',
      policyType: 'string',
      policyValue: 'string',
      description: 'string',
      modificationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAppInfosResponseAppInfoList extends $tea.Model {
  appId: string;
  appName: string;
  type: string;
  description: string;
  status: string;
  creationTime: string;
  modificationTime: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      appName: 'AppName',
      type: 'Type',
      description: 'Description',
      status: 'Status',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'string',
      appName: 'string',
      type: 'string',
      description: 'string',
      status: 'string',
      creationTime: 'string',
      modificationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAppInfoResponseAppInfoList extends $tea.Model {
  appId: string;
  appName: string;
  type: string;
  description: string;
  status: string;
  creationTime: string;
  modificationTime: string;
  static names(): { [key: string]: string } {
    return {
      appId: 'AppId',
      appName: 'AppName',
      type: 'Type',
      description: 'Description',
      status: 'Status',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      appId: 'string',
      appName: 'string',
      type: 'string',
      description: 'string',
      status: 'string',
      creationTime: 'string',
      modificationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList extends $tea.Model {
  transcodeTemplateId: string;
  transcodeJobStatus: string;
  creationTime: string;
  completeTime: string;
  transcodeProgress: number;
  errorCode: string;
  errorMessage: string;
  definition: string;
  encryption: string;
  width: string;
  height: string;
  bitrate: string;
  fps: string;
  format: string;
  duration: string;
  filesize: number;
  watermarkIdList: string[];
  static names(): { [key: string]: string } {
    return {
      transcodeTemplateId: 'TranscodeTemplateId',
      transcodeJobStatus: 'TranscodeJobStatus',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      transcodeProgress: 'TranscodeProgress',
      errorCode: 'ErrorCode',
      errorMessage: 'ErrorMessage',
      definition: 'Definition',
      encryption: 'Encryption',
      width: 'Width',
      height: 'Height',
      bitrate: 'Bitrate',
      fps: 'Fps',
      format: 'Format',
      duration: 'Duration',
      filesize: 'Filesize',
      watermarkIdList: 'WatermarkIdList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeTemplateId: 'string',
      transcodeJobStatus: 'string',
      creationTime: 'string',
      completeTime: 'string',
      transcodeProgress: 'number',
      errorCode: 'string',
      errorMessage: 'string',
      definition: 'string',
      encryption: 'string',
      width: 'string',
      height: 'string',
      bitrate: 'string',
      fps: 'string',
      format: 'string',
      duration: 'string',
      filesize: 'number',
      watermarkIdList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeSummaryResponseTranscodeSummaryList extends $tea.Model {
  videoId: string;
  transcodeStatus: string;
  creationTime: string;
  completeTime: string;
  trigger: string;
  transcodeTemplateGroupId: string;
  transcodeJobInfoSummaryList: GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList[];
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      transcodeStatus: 'TranscodeStatus',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      trigger: 'Trigger',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      transcodeJobInfoSummaryList: 'TranscodeJobInfoSummaryList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      transcodeStatus: 'string',
      creationTime: 'string',
      completeTime: 'string',
      trigger: 'string',
      transcodeTemplateGroupId: 'string',
      transcodeJobInfoSummaryList: { 'type': 'array', 'itemType': GetTranscodeSummaryResponseTranscodeSummaryListTranscodeJobInfoSummaryList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTranscodeTaskResponseTranscodeTaskList extends $tea.Model {
  transcodeTaskId: string;
  videoId: string;
  taskStatus: string;
  transcodeTemplateGroupId: string;
  creationTime: string;
  completeTime: string;
  trigger: string;
  static names(): { [key: string]: string } {
    return {
      transcodeTaskId: 'TranscodeTaskId',
      videoId: 'VideoId',
      taskStatus: 'TaskStatus',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      trigger: 'Trigger',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeTaskId: 'string',
      videoId: 'string',
      taskStatus: 'string',
      transcodeTemplateGroupId: 'string',
      creationTime: 'string',
      completeTime: 'string',
      trigger: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile extends $tea.Model {
  width: string;
  height: string;
  bitrate: string;
  fps: string;
  format: string;
  duration: string;
  filesize: number;
  encryption: string;
  audioStreamList: string;
  videoStreamList: string;
  subtitleStreamList: string;
  outputFileUrl: string;
  watermarkIdList: string[];
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      bitrate: 'Bitrate',
      fps: 'Fps',
      format: 'Format',
      duration: 'Duration',
      filesize: 'Filesize',
      encryption: 'Encryption',
      audioStreamList: 'AudioStreamList',
      videoStreamList: 'VideoStreamList',
      subtitleStreamList: 'SubtitleStreamList',
      outputFileUrl: 'OutputFileUrl',
      watermarkIdList: 'WatermarkIdList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'string',
      height: 'string',
      bitrate: 'string',
      fps: 'string',
      format: 'string',
      duration: 'string',
      filesize: 'number',
      encryption: 'string',
      audioStreamList: 'string',
      videoStreamList: 'string',
      subtitleStreamList: 'string',
      outputFileUrl: 'string',
      watermarkIdList: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList extends $tea.Model {
  transcodeJobId: string;
  transcodeTemplateId: string;
  transcodeJobStatus: string;
  creationTime: string;
  completeTime: string;
  transcodeProgress: number;
  inputFileUrl: string;
  priority: string;
  errorCode: string;
  errorMessage: string;
  definition: string;
  outputFile: GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile;
  static names(): { [key: string]: string } {
    return {
      transcodeJobId: 'TranscodeJobId',
      transcodeTemplateId: 'TranscodeTemplateId',
      transcodeJobStatus: 'TranscodeJobStatus',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      transcodeProgress: 'TranscodeProgress',
      inputFileUrl: 'InputFileUrl',
      priority: 'Priority',
      errorCode: 'ErrorCode',
      errorMessage: 'ErrorMessage',
      definition: 'Definition',
      outputFile: 'OutputFile',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeJobId: 'string',
      transcodeTemplateId: 'string',
      transcodeJobStatus: 'string',
      creationTime: 'string',
      completeTime: 'string',
      transcodeProgress: 'number',
      inputFileUrl: 'string',
      priority: 'string',
      errorCode: 'string',
      errorMessage: 'string',
      definition: 'string',
      outputFile: GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoListOutputFile,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTaskResponseTranscodeTask extends $tea.Model {
  transcodeTaskId: string;
  videoId: string;
  taskStatus: string;
  creationTime: string;
  completeTime: string;
  trigger: string;
  transcodeTemplateGroupId: string;
  transcodeJobInfoList: GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList[];
  static names(): { [key: string]: string } {
    return {
      transcodeTaskId: 'TranscodeTaskId',
      videoId: 'VideoId',
      taskStatus: 'TaskStatus',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      trigger: 'Trigger',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      transcodeJobInfoList: 'TranscodeJobInfoList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeTaskId: 'string',
      videoId: 'string',
      taskStatus: 'string',
      creationTime: 'string',
      completeTime: 'string',
      trigger: 'string',
      transcodeTemplateGroupId: 'string',
      transcodeJobInfoList: { 'type': 'array', 'itemType': GetTranscodeTaskResponseTranscodeTaskTranscodeJobInfoList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetURLUploadInfosResponseURLUploadInfoList extends $tea.Model {
  jobId: string;
  uploadURL: string;
  mediaId: string;
  fileSize: string;
  status: string;
  userData: string;
  errorCode: string;
  errorMessage: string;
  creationTime: string;
  completeTime: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      uploadURL: 'UploadURL',
      mediaId: 'MediaId',
      fileSize: 'FileSize',
      status: 'Status',
      userData: 'UserData',
      errorCode: 'ErrorCode',
      errorMessage: 'ErrorMessage',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      uploadURL: 'string',
      mediaId: 'string',
      fileSize: 'string',
      status: 'string',
      userData: 'string',
      errorCode: 'string',
      errorMessage: 'string',
      creationTime: 'string',
      completeTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList extends $tea.Model {
  transcodeTemplateId: string;
  video: string;
  audio: string;
  container: string;
  muxConfig: string;
  transConfig: string;
  definition: string;
  encryptSetting: string;
  packageSetting: string;
  subtitleList: string;
  openingList: string;
  tailSlateList: string;
  templateName: string;
  transcodeFileRegular: string;
  clip: string;
  rotate: string;
  type: string;
  userData: string;
  watermarkIds: string[];
  static names(): { [key: string]: string } {
    return {
      transcodeTemplateId: 'TranscodeTemplateId',
      video: 'Video',
      audio: 'Audio',
      container: 'Container',
      muxConfig: 'MuxConfig',
      transConfig: 'TransConfig',
      definition: 'Definition',
      encryptSetting: 'EncryptSetting',
      packageSetting: 'PackageSetting',
      subtitleList: 'SubtitleList',
      openingList: 'OpeningList',
      tailSlateList: 'TailSlateList',
      templateName: 'TemplateName',
      transcodeFileRegular: 'TranscodeFileRegular',
      clip: 'Clip',
      rotate: 'Rotate',
      type: 'Type',
      userData: 'UserData',
      watermarkIds: 'WatermarkIds',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeTemplateId: 'string',
      video: 'string',
      audio: 'string',
      container: 'string',
      muxConfig: 'string',
      transConfig: 'string',
      definition: 'string',
      encryptSetting: 'string',
      packageSetting: 'string',
      subtitleList: 'string',
      openingList: 'string',
      tailSlateList: 'string',
      templateName: 'string',
      transcodeFileRegular: 'string',
      clip: 'string',
      rotate: 'string',
      type: 'string',
      userData: 'string',
      watermarkIds: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetTranscodeTemplateGroupResponseTranscodeTemplateGroup extends $tea.Model {
  creationTime: string;
  modifyTime: string;
  name: string;
  isDefault: string;
  locked: string;
  transcodeMode: string;
  appId: string;
  transcodeTemplateGroupId: string;
  transcodeTemplateList: GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList[];
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
      name: 'Name',
      isDefault: 'IsDefault',
      locked: 'Locked',
      transcodeMode: 'TranscodeMode',
      appId: 'AppId',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      transcodeTemplateList: 'TranscodeTemplateList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      modifyTime: 'string',
      name: 'string',
      isDefault: 'string',
      locked: 'string',
      transcodeMode: 'string',
      appId: 'string',
      transcodeTemplateGroupId: 'string',
      transcodeTemplateList: { 'type': 'array', 'itemType': GetTranscodeTemplateGroupResponseTranscodeTemplateGroupTranscodeTemplateList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListTranscodeTemplateGroupResponseTranscodeTemplateGroupList extends $tea.Model {
  creationTime: string;
  modifyTime: string;
  name: string;
  isDefault: string;
  locked: string;
  transcodeTemplateGroupId: string;
  transcodeMode: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
      name: 'Name',
      isDefault: 'IsDefault',
      locked: 'Locked',
      transcodeTemplateGroupId: 'TranscodeTemplateGroupId',
      transcodeMode: 'TranscodeMode',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      modifyTime: 'string',
      name: 'string',
      isDefault: 'string',
      locked: 'string',
      transcodeTemplateGroupId: 'string',
      transcodeMode: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult extends $tea.Model {
  suggestion: string;
  label: string;
  score: string;
  scene: string;
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      score: 'Score',
      scene: 'Scene',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      score: 'string',
      scene: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataImageResult extends $tea.Model {
  suggestion: string;
  label: string;
  type: string;
  url: string;
  result: GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      type: 'Type',
      url: 'Url',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      type: 'string',
      url: 'string',
      result: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataImageResultResult },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataTextResult extends $tea.Model {
  suggestion: string;
  label: string;
  score: string;
  scene: string;
  type: string;
  content: string;
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      score: 'Score',
      scene: 'Scene',
      type: 'Type',
      content: 'Content',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      score: 'string',
      scene: 'string',
      type: 'string',
      content: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList extends $tea.Model {
  label: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult extends $tea.Model {
  suggestion: string;
  label: string;
  maxScore: string;
  averageScore: string;
  counterList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList[];
  topList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      maxScore: 'MaxScore',
      averageScore: 'AverageScore',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      maxScore: 'string',
      averageScore: 'string',
      counterList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultCounterList },
      topList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList extends $tea.Model {
  label: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult extends $tea.Model {
  suggestion: string;
  label: string;
  maxScore: string;
  averageScore: string;
  counterList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList[];
  topList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      maxScore: 'MaxScore',
      averageScore: 'AverageScore',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      maxScore: 'string',
      averageScore: 'string',
      counterList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultCounterList },
      topList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList extends $tea.Model {
  label: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult extends $tea.Model {
  suggestion: string;
  label: string;
  maxScore: string;
  averageScore: string;
  counterList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList[];
  topList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      maxScore: 'MaxScore',
      averageScore: 'AverageScore',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      maxScore: 'string',
      averageScore: 'string',
      counterList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultCounterList },
      topList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList extends $tea.Model {
  label: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult extends $tea.Model {
  suggestion: string;
  label: string;
  maxScore: string;
  averageScore: string;
  counterList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList[];
  topList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      maxScore: 'MaxScore',
      averageScore: 'AverageScore',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      maxScore: 'string',
      averageScore: 'string',
      counterList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultCounterList },
      topList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList extends $tea.Model {
  label: string;
  count: number;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      count: 'Count',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      count: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult extends $tea.Model {
  suggestion: string;
  label: string;
  maxScore: string;
  averageScore: string;
  counterList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList[];
  topList: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList[];
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      maxScore: 'MaxScore',
      averageScore: 'AverageScore',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      maxScore: 'string',
      averageScore: 'string',
      counterList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultCounterList },
      topList: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult extends $tea.Model {
  suggestion: string;
  label: string;
  terrorismResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult;
  pornResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult;
  adResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult;
  liveResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult;
  logoResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult;
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      label: 'Label',
      terrorismResult: 'TerrorismResult',
      pornResult: 'PornResult',
      adResult: 'AdResult',
      liveResult: 'LiveResult',
      logoResult: 'LogoResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      label: 'string',
      terrorismResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultTerrorismResult,
      pornResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultPornResult,
      adResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultAdResult,
      liveResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLiveResult,
      logoResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResultLogoResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJobData extends $tea.Model {
  suggestion: string;
  abnormalModules: string;
  label: string;
  imageResult: GetAIMediaAuditJobResponseMediaAuditJobDataImageResult[];
  textResult: GetAIMediaAuditJobResponseMediaAuditJobDataTextResult[];
  videoResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult;
  static names(): { [key: string]: string } {
    return {
      suggestion: 'Suggestion',
      abnormalModules: 'AbnormalModules',
      label: 'Label',
      imageResult: 'ImageResult',
      textResult: 'TextResult',
      videoResult: 'VideoResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      suggestion: 'string',
      abnormalModules: 'string',
      label: 'string',
      imageResult: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataImageResult },
      textResult: { 'type': 'array', 'itemType': GetAIMediaAuditJobResponseMediaAuditJobDataTextResult },
      videoResult: GetAIMediaAuditJobResponseMediaAuditJobDataVideoResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAIMediaAuditJobResponseMediaAuditJob extends $tea.Model {
  jobId: string;
  mediaId: string;
  type: string;
  status: string;
  code: string;
  message: string;
  creationTime: string;
  completeTime: string;
  data: GetAIMediaAuditJobResponseMediaAuditJobData;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      mediaId: 'MediaId',
      type: 'Type',
      status: 'Status',
      code: 'Code',
      message: 'Message',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      mediaId: 'string',
      type: 'string',
      status: 'string',
      code: 'string',
      message: 'string',
      creationTime: 'string',
      completeTime: 'string',
      data: GetAIMediaAuditJobResponseMediaAuditJobData,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultAudioResult extends $tea.Model {
  label: string;
  scene: string;
  score: string;
  suggestion: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      scene: 'Scene',
      score: 'Score',
      suggestion: 'Suggestion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      scene: 'string',
      score: 'string',
      suggestion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultImageResultResult extends $tea.Model {
  label: string;
  scene: string;
  score: string;
  suggestion: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      scene: 'Scene',
      score: 'Score',
      suggestion: 'Suggestion',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      scene: 'string',
      score: 'string',
      suggestion: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultImageResult extends $tea.Model {
  label: string;
  suggestion: string;
  type: string;
  url: string;
  result: GetMediaAuditResultResponseMediaAuditResultImageResultResult[];
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      type: 'Type',
      url: 'Url',
      result: 'Result',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      type: 'string',
      url: 'string',
      result: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultImageResultResult },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultTextResult extends $tea.Model {
  content: string;
  label: string;
  scene: string;
  score: string;
  suggestion: string;
  type: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      label: 'Label',
      scene: 'Scene',
      score: 'Score',
      suggestion: 'Suggestion',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      label: 'string',
      scene: 'string',
      score: 'string',
      suggestion: 'string',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList extends $tea.Model {
  count: number;
  label: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult extends $tea.Model {
  averageScore: string;
  label: string;
  maxScore: string;
  suggestion: string;
  counterList: GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList[];
  topList: GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList[];
  static names(): { [key: string]: string } {
    return {
      averageScore: 'AverageScore',
      label: 'Label',
      maxScore: 'MaxScore',
      suggestion: 'Suggestion',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      averageScore: 'string',
      label: 'string',
      maxScore: 'string',
      suggestion: 'string',
      counterList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultCounterList },
      topList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultPornResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList extends $tea.Model {
  count: number;
  label: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult extends $tea.Model {
  averageScore: string;
  label: string;
  maxScore: string;
  suggestion: string;
  counterList: GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList[];
  topList: GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList[];
  static names(): { [key: string]: string } {
    return {
      averageScore: 'AverageScore',
      label: 'Label',
      maxScore: 'MaxScore',
      suggestion: 'Suggestion',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      averageScore: 'string',
      label: 'string',
      maxScore: 'string',
      suggestion: 'string',
      counterList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultCounterList },
      topList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultAdResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList extends $tea.Model {
  count: number;
  label: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult extends $tea.Model {
  averageScore: string;
  label: string;
  maxScore: string;
  suggestion: string;
  counterList: GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList[];
  topList: GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList[];
  static names(): { [key: string]: string } {
    return {
      averageScore: 'AverageScore',
      label: 'Label',
      maxScore: 'MaxScore',
      suggestion: 'Suggestion',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      averageScore: 'string',
      label: 'string',
      maxScore: 'string',
      suggestion: 'string',
      counterList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultCounterList },
      topList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList extends $tea.Model {
  count: number;
  label: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult extends $tea.Model {
  averageScore: string;
  label: string;
  maxScore: string;
  suggestion: string;
  counterList: GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList[];
  topList: GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList[];
  static names(): { [key: string]: string } {
    return {
      averageScore: 'AverageScore',
      label: 'Label',
      maxScore: 'MaxScore',
      suggestion: 'Suggestion',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      averageScore: 'string',
      label: 'string',
      maxScore: 'string',
      suggestion: 'string',
      counterList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultCounterList },
      topList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList extends $tea.Model {
  count: number;
  label: string;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      label: 'Label',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      label: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  url: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult extends $tea.Model {
  averageScore: string;
  label: string;
  maxScore: string;
  suggestion: string;
  counterList: GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList[];
  topList: GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList[];
  static names(): { [key: string]: string } {
    return {
      averageScore: 'AverageScore',
      label: 'Label',
      maxScore: 'MaxScore',
      suggestion: 'Suggestion',
      counterList: 'CounterList',
      topList: 'TopList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      averageScore: 'string',
      label: 'string',
      maxScore: 'string',
      suggestion: 'string',
      counterList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultCounterList },
      topList: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResultTopList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResultVideoResult extends $tea.Model {
  label: string;
  suggestion: string;
  pornResult: GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult;
  adResult: GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult;
  logoResult: GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult;
  liveResult: GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult;
  terrorismResult: GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      suggestion: 'Suggestion',
      pornResult: 'PornResult',
      adResult: 'AdResult',
      logoResult: 'LogoResult',
      liveResult: 'LiveResult',
      terrorismResult: 'TerrorismResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      suggestion: 'string',
      pornResult: GetMediaAuditResultResponseMediaAuditResultVideoResultPornResult,
      adResult: GetMediaAuditResultResponseMediaAuditResultVideoResultAdResult,
      logoResult: GetMediaAuditResultResponseMediaAuditResultVideoResultLogoResult,
      liveResult: GetMediaAuditResultResponseMediaAuditResultVideoResultLiveResult,
      terrorismResult: GetMediaAuditResultResponseMediaAuditResultVideoResultTerrorismResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultResponseMediaAuditResult extends $tea.Model {
  abnormalModules: string;
  label: string;
  suggestion: string;
  audioResult: GetMediaAuditResultResponseMediaAuditResultAudioResult[];
  imageResult: GetMediaAuditResultResponseMediaAuditResultImageResult[];
  textResult: GetMediaAuditResultResponseMediaAuditResultTextResult[];
  videoResult: GetMediaAuditResultResponseMediaAuditResultVideoResult;
  static names(): { [key: string]: string } {
    return {
      abnormalModules: 'AbnormalModules',
      label: 'Label',
      suggestion: 'Suggestion',
      audioResult: 'AudioResult',
      imageResult: 'ImageResult',
      textResult: 'TextResult',
      videoResult: 'VideoResult',
    };
  }

  static types(): { [key: string]: any } {
    return {
      abnormalModules: 'string',
      label: 'string',
      suggestion: 'string',
      audioResult: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultAudioResult },
      imageResult: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultImageResult },
      textResult: { 'type': 'array', 'itemType': GetMediaAuditResultResponseMediaAuditResultTextResult },
      videoResult: GetMediaAuditResultResponseMediaAuditResultVideoResult,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultDetailResponseMediaAuditResultDetailList extends $tea.Model {
  pornLabel: string;
  pornScore: string;
  terrorismLabel: string;
  terrorismScore: string;
  timestamp: string;
  url: string;
  adLabel: string;
  adScore: string;
  liveLabel: string;
  liveScore: string;
  logoLabel: string;
  logoScore: string;
  static names(): { [key: string]: string } {
    return {
      pornLabel: 'PornLabel',
      pornScore: 'PornScore',
      terrorismLabel: 'TerrorismLabel',
      terrorismScore: 'TerrorismScore',
      timestamp: 'Timestamp',
      url: 'Url',
      adLabel: 'AdLabel',
      adScore: 'AdScore',
      liveLabel: 'LiveLabel',
      liveScore: 'LiveScore',
      logoLabel: 'LogoLabel',
      logoScore: 'LogoScore',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pornLabel: 'string',
      pornScore: 'string',
      terrorismLabel: 'string',
      terrorismScore: 'string',
      timestamp: 'string',
      url: 'string',
      adLabel: 'string',
      adScore: 'string',
      liveLabel: 'string',
      liveScore: 'string',
      logoLabel: 'string',
      logoScore: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultDetailResponseMediaAuditResultDetail extends $tea.Model {
  total: number;
  list: GetMediaAuditResultDetailResponseMediaAuditResultDetailList[];
  static names(): { [key: string]: string } {
    return {
      total: 'Total',
      list: 'List',
    };
  }

  static types(): { [key: string]: any } {
    return {
      total: 'number',
      list: { 'type': 'array', 'itemType': GetMediaAuditResultDetailResponseMediaAuditResultDetailList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd extends $tea.Model {
  label: string;
  score: string;
  timestamp: string;
  static names(): { [key: string]: string } {
    return {
      label: 'Label',
      score: 'Score',
      timestamp: 'Timestamp',
    };
  }

  static types(): { [key: string]: any } {
    return {
      label: 'string',
      score: 'string',
      timestamp: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaAuditResultTimelineResponseMediaAuditResultTimeline extends $tea.Model {
  porn: GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn[];
  terrorism: GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism[];
  logo: GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo[];
  live: GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive[];
  ad: GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd[];
  static names(): { [key: string]: string } {
    return {
      porn: 'Porn',
      terrorism: 'Terrorism',
      logo: 'Logo',
      live: 'Live',
      ad: 'Ad',
    };
  }

  static types(): { [key: string]: any } {
    return {
      porn: { 'type': 'array', 'itemType': GetMediaAuditResultTimelineResponseMediaAuditResultTimelinePorn },
      terrorism: { 'type': 'array', 'itemType': GetMediaAuditResultTimelineResponseMediaAuditResultTimelineTerrorism },
      logo: { 'type': 'array', 'itemType': GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLogo },
      live: { 'type': 'array', 'itemType': GetMediaAuditResultTimelineResponseMediaAuditResultTimelineLive },
      ad: { 'type': 'array', 'itemType': GetMediaAuditResultTimelineResponseMediaAuditResultTimelineAd },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAITemplateResponseTemplateInfo extends $tea.Model {
  templateId: string;
  templateType: string;
  templateName: string;
  templateConfig: string;
  source: string;
  isDefault: string;
  creationTime: string;
  modifyTime: string;
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateConfig: 'TemplateConfig',
      source: 'Source',
      isDefault: 'IsDefault',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: 'string',
      templateType: 'string',
      templateName: 'string',
      templateConfig: 'string',
      source: 'string',
      isDefault: 'string',
      creationTime: 'string',
      modifyTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAITemplateResponseTemplateInfoList extends $tea.Model {
  templateId: string;
  templateType: string;
  templateName: string;
  templateConfig: string;
  source: string;
  isDefault: string;
  creationTime: string;
  modifyTime: string;
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateConfig: 'TemplateConfig',
      source: 'Source',
      isDefault: 'IsDefault',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: 'string',
      templateType: 'string',
      templateName: 'string',
      templateConfig: 'string',
      source: 'string',
      isDefault: 'string',
      creationTime: 'string',
      modifyTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetDefaultAITemplateResponseTemplateInfo extends $tea.Model {
  templateId: string;
  templateType: string;
  templateName: string;
  templateConfig: string;
  source: string;
  isDefault: string;
  creationTime: string;
  modifyTime: string;
  static names(): { [key: string]: string } {
    return {
      templateId: 'TemplateId',
      templateType: 'TemplateType',
      templateName: 'TemplateName',
      templateConfig: 'TemplateConfig',
      source: 'Source',
      isDefault: 'IsDefault',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      templateId: 'string',
      templateType: 'string',
      templateName: 'string',
      templateConfig: 'string',
      source: 'string',
      isDefault: 'string',
      creationTime: 'string',
      modifyTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail extends $tea.Model {
  logName: string;
  logPath: string;
  logSize: number;
  startTime: string;
  endTime: string;
  static names(): { [key: string]: string } {
    return {
      logName: 'LogName',
      logPath: 'LogPath',
      logSize: 'LogSize',
      startTime: 'StartTime',
      endTime: 'EndTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logName: 'string',
      logPath: 'string',
      logSize: 'number',
      startTime: 'string',
      endTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos extends $tea.Model {
  logInfoDetail: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail[];
  static names(): { [key: string]: string } {
    return {
      logInfoDetail: 'LogInfoDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      logInfoDetail: { 'type': 'array', 'itemType': DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfosLogInfoDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos extends $tea.Model {
  pageNumber: number;
  pageSize: number;
  total: number;
  static names(): { [key: string]: string } {
    return {
      pageNumber: 'PageNumber',
      pageSize: 'PageSize',
      total: 'Total',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageNumber: 'number',
      pageSize: 'number',
      total: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail extends $tea.Model {
  domainName: string;
  logCount: number;
  logInfos: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos;
  pageInfos: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      logCount: 'LogCount',
      logInfos: 'LogInfos',
      pageInfos: 'PageInfos',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      logCount: 'number',
      logInfos: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailLogInfos,
      pageInfos: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetailPageInfos,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainLogResponseDomainLogDetails extends $tea.Model {
  domainLogDetail: DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail[];
  static names(): { [key: string]: string } {
    return {
      domainLogDetail: 'DomainLogDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainLogDetail: { 'type': 'array', 'itemType': DescribeVodDomainLogResponseDomainLogDetailsDomainLogDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainCertificateInfoResponseCertInfosCertInfo extends $tea.Model {
  domainName: string;
  certName: string;
  certDomainName: string;
  certExpireTime: string;
  certLife: string;
  certOrg: string;
  certType: string;
  serverCertificateStatus: string;
  status: string;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      certName: 'CertName',
      certDomainName: 'CertDomainName',
      certExpireTime: 'CertExpireTime',
      certLife: 'CertLife',
      certOrg: 'CertOrg',
      certType: 'CertType',
      serverCertificateStatus: 'ServerCertificateStatus',
      status: 'Status',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      certName: 'string',
      certDomainName: 'string',
      certExpireTime: 'string',
      certLife: 'string',
      certOrg: 'string',
      certType: 'string',
      serverCertificateStatus: 'string',
      status: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainCertificateInfoResponseCertInfos extends $tea.Model {
  certInfo: DescribeVodDomainCertificateInfoResponseCertInfosCertInfo[];
  static names(): { [key: string]: string } {
    return {
      certInfo: 'CertInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      certInfo: { 'type': 'array', 'itemType': DescribeVodDomainCertificateInfoResponseCertInfosCertInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule extends $tea.Model {
  timeStamp: string;
  value: string;
  domesticValue: string;
  overseasValue: string;
  httpsValue: string;
  httpsDomesticValue: string;
  httpsOverseasValue: string;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      value: 'Value',
      domesticValue: 'DomesticValue',
      overseasValue: 'OverseasValue',
      httpsValue: 'HttpsValue',
      httpsDomesticValue: 'HttpsDomesticValue',
      httpsOverseasValue: 'HttpsOverseasValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      value: 'string',
      domesticValue: 'string',
      overseasValue: 'string',
      httpsValue: 'string',
      httpsDomesticValue: 'string',
      httpsOverseasValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainTrafficDataResponseTrafficDataPerInterval extends $tea.Model {
  dataModule: DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule[];
  static names(): { [key: string]: string } {
    return {
      dataModule: 'DataModule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataModule: { 'type': 'array', 'itemType': DescribeVodDomainTrafficDataResponseTrafficDataPerIntervalDataModule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule extends $tea.Model {
  timeStamp: string;
  value: string;
  domesticValue: string;
  overseasValue: string;
  httpsValue: string;
  httpsDomesticValue: string;
  httpsOverseasValue: string;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      value: 'Value',
      domesticValue: 'DomesticValue',
      overseasValue: 'OverseasValue',
      httpsValue: 'HttpsValue',
      httpsDomesticValue: 'HttpsDomesticValue',
      httpsOverseasValue: 'HttpsOverseasValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      value: 'string',
      domesticValue: 'string',
      overseasValue: 'string',
      httpsValue: 'string',
      httpsDomesticValue: 'string',
      httpsOverseasValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainBpsDataResponseBpsDataPerInterval extends $tea.Model {
  dataModule: DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule[];
  static names(): { [key: string]: string } {
    return {
      dataModule: 'DataModule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataModule: { 'type': 'array', 'itemType': DescribeVodDomainBpsDataResponseBpsDataPerIntervalDataModule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule extends $tea.Model {
  timeStamp: string;
  value: string;
  static names(): { [key: string]: string } {
    return {
      timeStamp: 'TimeStamp',
      value: 'Value',
    };
  }

  static types(): { [key: string]: any } {
    return {
      timeStamp: 'string',
      value: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainUsageDataResponseUsageDataPerInterval extends $tea.Model {
  dataModule: DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule[];
  static names(): { [key: string]: string } {
    return {
      dataModule: 'DataModule',
    };
  }

  static types(): { [key: string]: any } {
    return {
      dataModule: { 'type': 'array', 'itemType': DescribeVodDomainUsageDataResponseUsageDataPerIntervalDataModule },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodCertificateListResponseCertificateListModelCertListCert extends $tea.Model {
  certName: string;
  certId: number;
  fingerprint: string;
  common: string;
  issuer: string;
  lastTime: number;
  static names(): { [key: string]: string } {
    return {
      certName: 'CertName',
      certId: 'CertId',
      fingerprint: 'Fingerprint',
      common: 'Common',
      issuer: 'Issuer',
      lastTime: 'LastTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      certName: 'string',
      certId: 'number',
      fingerprint: 'string',
      common: 'string',
      issuer: 'string',
      lastTime: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodCertificateListResponseCertificateListModelCertList extends $tea.Model {
  cert: DescribeVodCertificateListResponseCertificateListModelCertListCert[];
  static names(): { [key: string]: string } {
    return {
      cert: 'Cert',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cert: { 'type': 'array', 'itemType': DescribeVodCertificateListResponseCertificateListModelCertListCert },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodCertificateListResponseCertificateListModel extends $tea.Model {
  count: number;
  certList: DescribeVodCertificateListResponseCertificateListModelCertList;
  static names(): { [key: string]: string } {
    return {
      count: 'Count',
      certList: 'CertList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      count: 'number',
      certList: DescribeVodCertificateListResponseCertificateListModelCertList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodRefreshTasksResponseTasksTask extends $tea.Model {
  taskId: string;
  objectPath: string;
  process: string;
  status: string;
  creationTime: string;
  description: string;
  objectType: string;
  static names(): { [key: string]: string } {
    return {
      taskId: 'TaskId',
      objectPath: 'ObjectPath',
      process: 'Process',
      status: 'Status',
      creationTime: 'CreationTime',
      description: 'Description',
      objectType: 'ObjectType',
    };
  }

  static types(): { [key: string]: any } {
    return {
      taskId: 'string',
      objectPath: 'string',
      process: 'string',
      status: 'string',
      creationTime: 'string',
      description: 'string',
      objectType: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodRefreshTasksResponseTasks extends $tea.Model {
  task: DescribeVodRefreshTasksResponseTasksTask[];
  static names(): { [key: string]: string } {
    return {
      task: 'Task',
    };
  }

  static types(): { [key: string]: any } {
    return {
      task: { 'type': 'array', 'itemType': DescribeVodRefreshTasksResponseTasksTask },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg extends $tea.Model {
  argName: string;
  argValue: string;
  static names(): { [key: string]: string } {
    return {
      argName: 'ArgName',
      argValue: 'ArgValue',
    };
  }

  static types(): { [key: string]: any } {
    return {
      argName: 'string',
      argValue: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs extends $tea.Model {
  functionArg: DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg[];
  static names(): { [key: string]: string } {
    return {
      functionArg: 'FunctionArg',
    };
  }

  static types(): { [key: string]: any } {
    return {
      functionArg: { 'type': 'array', 'itemType': DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgsFunctionArg },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsResponseDomainConfigsDomainConfig extends $tea.Model {
  functionName: string;
  configId: string;
  status: string;
  functionArgs: DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs;
  static names(): { [key: string]: string } {
    return {
      functionName: 'FunctionName',
      configId: 'ConfigId',
      status: 'Status',
      functionArgs: 'FunctionArgs',
    };
  }

  static types(): { [key: string]: any } {
    return {
      functionName: 'string',
      configId: 'string',
      status: 'string',
      functionArgs: DescribeVodDomainConfigsResponseDomainConfigsDomainConfigFunctionArgs,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainConfigsResponseDomainConfigs extends $tea.Model {
  domainConfig: DescribeVodDomainConfigsResponseDomainConfigsDomainConfig[];
  static names(): { [key: string]: string } {
    return {
      domainConfig: 'DomainConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainConfig: { 'type': 'array', 'itemType': DescribeVodDomainConfigsResponseDomainConfigsDomainConfig },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsResponseDomainsPageDataSourcesSource extends $tea.Model {
  type: string;
  content: string;
  port: number;
  priority: string;
  static names(): { [key: string]: string } {
    return {
      type: 'Type',
      content: 'Content',
      port: 'Port',
      priority: 'Priority',
    };
  }

  static types(): { [key: string]: any } {
    return {
      type: 'string',
      content: 'string',
      port: 'number',
      priority: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsResponseDomainsPageDataSources extends $tea.Model {
  source: DescribeVodUserDomainsResponseDomainsPageDataSourcesSource[];
  static names(): { [key: string]: string } {
    return {
      source: 'Source',
    };
  }

  static types(): { [key: string]: any } {
    return {
      source: { 'type': 'array', 'itemType': DescribeVodUserDomainsResponseDomainsPageDataSourcesSource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsResponseDomainsPageData extends $tea.Model {
  domainName: string;
  cname: string;
  cdnType: string;
  domainStatus: string;
  gmtCreated: string;
  gmtModified: string;
  description: string;
  sslProtocol: string;
  weight: string;
  sandbox: string;
  sources: DescribeVodUserDomainsResponseDomainsPageDataSources;
  static names(): { [key: string]: string } {
    return {
      domainName: 'DomainName',
      cname: 'Cname',
      cdnType: 'CdnType',
      domainStatus: 'DomainStatus',
      gmtCreated: 'GmtCreated',
      gmtModified: 'GmtModified',
      description: 'Description',
      sslProtocol: 'SslProtocol',
      weight: 'Weight',
      sandbox: 'Sandbox',
      sources: 'Sources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      domainName: 'string',
      cname: 'string',
      cdnType: 'string',
      domainStatus: 'string',
      gmtCreated: 'string',
      gmtModified: 'string',
      description: 'string',
      sslProtocol: 'string',
      weight: 'string',
      sandbox: 'string',
      sources: DescribeVodUserDomainsResponseDomainsPageDataSources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodUserDomainsResponseDomains extends $tea.Model {
  pageData: DescribeVodUserDomainsResponseDomainsPageData[];
  static names(): { [key: string]: string } {
    return {
      pageData: 'PageData',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pageData: { 'type': 'array', 'itemType': DescribeVodUserDomainsResponseDomainsPageData },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainDetailResponseDomainDetailSourcesSource extends $tea.Model {
  content: string;
  type: string;
  port: number;
  enabled: string;
  priority: string;
  static names(): { [key: string]: string } {
    return {
      content: 'Content',
      type: 'Type',
      port: 'Port',
      enabled: 'Enabled',
      priority: 'Priority',
    };
  }

  static types(): { [key: string]: any } {
    return {
      content: 'string',
      type: 'string',
      port: 'number',
      enabled: 'string',
      priority: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainDetailResponseDomainDetailSources extends $tea.Model {
  source: DescribeVodDomainDetailResponseDomainDetailSourcesSource[];
  static names(): { [key: string]: string } {
    return {
      source: 'Source',
    };
  }

  static types(): { [key: string]: any } {
    return {
      source: { 'type': 'array', 'itemType': DescribeVodDomainDetailResponseDomainDetailSourcesSource },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribeVodDomainDetailResponseDomainDetail extends $tea.Model {
  gmtCreated: string;
  gmtModified: string;
  domainStatus: string;
  cname: string;
  domainName: string;
  description: string;
  SSLProtocol: string;
  SSLPub: string;
  scope: string;
  certName: string;
  weight: string;
  sources: DescribeVodDomainDetailResponseDomainDetailSources;
  static names(): { [key: string]: string } {
    return {
      gmtCreated: 'GmtCreated',
      gmtModified: 'GmtModified',
      domainStatus: 'DomainStatus',
      cname: 'Cname',
      domainName: 'DomainName',
      description: 'Description',
      SSLProtocol: 'SSLProtocol',
      SSLPub: 'SSLPub',
      scope: 'Scope',
      certName: 'CertName',
      weight: 'Weight',
      sources: 'Sources',
    };
  }

  static types(): { [key: string]: any } {
    return {
      gmtCreated: 'string',
      gmtModified: 'string',
      domainStatus: 'string',
      cname: 'string',
      domainName: 'string',
      description: 'string',
      SSLProtocol: 'string',
      SSLPub: 'string',
      scope: 'string',
      certName: 'string',
      weight: 'string',
      sources: DescribeVodDomainDetailResponseDomainDetailSources,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVodTemplateResponseVodTemplateInfo extends $tea.Model {
  name: string;
  vodTemplateId: string;
  templateType: string;
  subTemplateType: string;
  source: string;
  isDefault: string;
  templateConfig: string;
  creationTime: string;
  modifyTime: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      vodTemplateId: 'VodTemplateId',
      templateType: 'TemplateType',
      subTemplateType: 'SubTemplateType',
      source: 'Source',
      isDefault: 'IsDefault',
      templateConfig: 'TemplateConfig',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      vodTemplateId: 'string',
      templateType: 'string',
      subTemplateType: 'string',
      source: 'string',
      isDefault: 'string',
      templateConfig: 'string',
      creationTime: 'string',
      modifyTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListVodTemplateResponseVodTemplateInfoList extends $tea.Model {
  name: string;
  vodTemplateId: string;
  templateType: string;
  subTemplateType: string;
  source: string;
  isDefault: string;
  templateConfig: string;
  creationTime: string;
  modifyTime: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      name: 'Name',
      vodTemplateId: 'VodTemplateId',
      templateType: 'TemplateType',
      subTemplateType: 'SubTemplateType',
      source: 'Source',
      isDefault: 'IsDefault',
      templateConfig: 'TemplateConfig',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      name: 'string',
      vodTemplateId: 'string',
      templateType: 'string',
      subTemplateType: 'string',
      source: 'string',
      isDefault: 'string',
      templateConfig: 'string',
      creationTime: 'string',
      modifyTime: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class RegisterMediaResponseRegisteredMediaList extends $tea.Model {
  mediaId: string;
  fileURL: string;
  newRegister: boolean;
  static names(): { [key: string]: string } {
    return {
      mediaId: 'MediaId',
      fileURL: 'FileURL',
      newRegister: 'NewRegister',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mediaId: 'string',
      fileURL: 'string',
      newRegister: 'boolean',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetWatermarkResponseWatermarkInfo extends $tea.Model {
  creationTime: string;
  type: string;
  isDefault: string;
  watermarkId: string;
  name: string;
  fileUrl: string;
  watermarkConfig: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      type: 'Type',
      isDefault: 'IsDefault',
      watermarkId: 'WatermarkId',
      name: 'Name',
      fileUrl: 'FileUrl',
      watermarkConfig: 'WatermarkConfig',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      type: 'string',
      isDefault: 'string',
      watermarkId: 'string',
      name: 'string',
      fileUrl: 'string',
      watermarkConfig: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListWatermarkResponseWatermarkInfos extends $tea.Model {
  creationTime: string;
  type: string;
  isDefault: string;
  watermarkId: string;
  name: string;
  fileUrl: string;
  watermarkConfig: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      type: 'Type',
      isDefault: 'IsDefault',
      watermarkId: 'WatermarkId',
      name: 'Name',
      fileUrl: 'FileUrl',
      watermarkConfig: 'WatermarkConfig',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      type: 'string',
      isDefault: 'string',
      watermarkId: 'string',
      name: 'string',
      fileUrl: 'string',
      watermarkConfig: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateWatermarkResponseWatermarkInfo extends $tea.Model {
  creationTime: string;
  type: string;
  isDefault: string;
  watermarkId: string;
  name: string;
  fileUrl: string;
  watermarkConfig: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      type: 'Type',
      isDefault: 'IsDefault',
      watermarkId: 'WatermarkId',
      name: 'Name',
      fileUrl: 'FileUrl',
      watermarkConfig: 'WatermarkConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      type: 'string',
      isDefault: 'string',
      watermarkId: 'string',
      name: 'string',
      fileUrl: 'string',
      watermarkConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddWatermarkResponseWatermarkInfo extends $tea.Model {
  creationTime: string;
  type: string;
  isDefault: string;
  watermarkId: string;
  name: string;
  fileUrl: string;
  watermarkConfig: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      type: 'Type',
      isDefault: 'IsDefault',
      watermarkId: 'WatermarkId',
      name: 'Name',
      fileUrl: 'FileUrl',
      watermarkConfig: 'WatermarkConfig',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      type: 'string',
      isDefault: 'string',
      watermarkId: 'string',
      name: 'string',
      fileUrl: 'string',
      watermarkConfig: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponseDNAResultVideoDNADetailInput extends $tea.Model {
  start: string;
  duration: string;
  static names(): { [key: string]: string } {
    return {
      start: 'Start',
      duration: 'Duration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      start: 'string',
      duration: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication extends $tea.Model {
  start: string;
  duration: string;
  static names(): { [key: string]: string } {
    return {
      start: 'Start',
      duration: 'Duration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      start: 'string',
      duration: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponseDNAResultVideoDNADetail extends $tea.Model {
  input: GetMediaDNAResultResponseDNAResultVideoDNADetailInput;
  duplication: GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication;
  static names(): { [key: string]: string } {
    return {
      input: 'Input',
      duplication: 'Duplication',
    };
  }

  static types(): { [key: string]: any } {
    return {
      input: GetMediaDNAResultResponseDNAResultVideoDNADetailInput,
      duplication: GetMediaDNAResultResponseDNAResultVideoDNADetailDuplication,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponseDNAResultVideoDNA extends $tea.Model {
  primaryKey: string;
  similarity: string;
  detail: GetMediaDNAResultResponseDNAResultVideoDNADetail[];
  static names(): { [key: string]: string } {
    return {
      primaryKey: 'PrimaryKey',
      similarity: 'Similarity',
      detail: 'Detail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      primaryKey: 'string',
      similarity: 'string',
      detail: { 'type': 'array', 'itemType': GetMediaDNAResultResponseDNAResultVideoDNADetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMediaDNAResultResponseDNAResult extends $tea.Model {
  videoDNA: GetMediaDNAResultResponseDNAResultVideoDNA[];
  static names(): { [key: string]: string } {
    return {
      videoDNA: 'VideoDNA',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoDNA: { 'type': 'array', 'itemType': GetMediaDNAResultResponseDNAResultVideoDNA },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UpdateImageInfosResponseNonExistImageIds extends $tea.Model {
  imageId: string[];
  static names(): { [key: string]: string } {
    return {
      imageId: 'ImageId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageId: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAuditSecurityIpResponseSecurityIpList extends $tea.Model {
  securityGroupName: string;
  ips: string;
  creationTime: string;
  modificationTime: string;
  static names(): { [key: string]: string } {
    return {
      securityGroupName: 'SecurityGroupName',
      ips: 'Ips',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
    };
  }

  static types(): { [key: string]: any } {
    return {
      securityGroupName: 'string',
      ips: 'string',
      creationTime: 'string',
      modificationTime: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class UploadMediaByURLResponseUploadJobs extends $tea.Model {
  jobId: string;
  sourceURL: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      sourceURL: 'SourceURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      sourceURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaListVideo extends $tea.Model {
  videoId: string;
  mediaSource: string;
  mediaType: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  modificationTime: string;
  creationTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  downloadSwitch: string;
  preprocessStatus: string;
  storageLocation: string;
  regionId: string;
  transcodeMode: string;
  auditStatus: string;
  auditAIStatus: string;
  auditManualStatus: string;
  auditAIResult: string;
  auditTemplateId: string;
  customMediaInfo: string;
  appId: string;
  snapshots: string[];
  spriteSnapshots: string[];
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      mediaSource: 'MediaSource',
      mediaType: 'MediaType',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      modificationTime: 'ModificationTime',
      creationTime: 'CreationTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      downloadSwitch: 'DownloadSwitch',
      preprocessStatus: 'PreprocessStatus',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      transcodeMode: 'TranscodeMode',
      auditStatus: 'AuditStatus',
      auditAIStatus: 'AuditAIStatus',
      auditManualStatus: 'AuditManualStatus',
      auditAIResult: 'AuditAIResult',
      auditTemplateId: 'AuditTemplateId',
      customMediaInfo: 'CustomMediaInfo',
      appId: 'AppId',
      snapshots: 'Snapshots',
      spriteSnapshots: 'SpriteSnapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      mediaSource: 'string',
      mediaType: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      modificationTime: 'string',
      creationTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      downloadSwitch: 'string',
      preprocessStatus: 'string',
      storageLocation: 'string',
      regionId: 'string',
      transcodeMode: 'string',
      auditStatus: 'string',
      auditAIStatus: 'string',
      auditManualStatus: 'string',
      auditAIResult: 'string',
      auditTemplateId: 'string',
      customMediaInfo: 'string',
      appId: 'string',
      snapshots: { 'type': 'array', 'itemType': 'string' },
      spriteSnapshots: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaListAudio extends $tea.Model {
  audioId: string;
  mediaSource: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  modificationTime: string;
  creationTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  downloadSwitch: string;
  preprocessStatus: string;
  storageLocation: string;
  regionId: string;
  transcodeMode: string;
  auditStatus: string;
  auditAIStatus: string;
  auditManualStatus: string;
  auditAIResult: string;
  auditTemplateId: string;
  customMediaInfo: string;
  appId: string;
  snapshots: string[];
  spriteSnapshots: string[];
  static names(): { [key: string]: string } {
    return {
      audioId: 'AudioId',
      mediaSource: 'MediaSource',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      modificationTime: 'ModificationTime',
      creationTime: 'CreationTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      downloadSwitch: 'DownloadSwitch',
      preprocessStatus: 'PreprocessStatus',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      transcodeMode: 'TranscodeMode',
      auditStatus: 'AuditStatus',
      auditAIStatus: 'AuditAIStatus',
      auditManualStatus: 'AuditManualStatus',
      auditAIResult: 'AuditAIResult',
      auditTemplateId: 'AuditTemplateId',
      customMediaInfo: 'CustomMediaInfo',
      appId: 'AppId',
      snapshots: 'Snapshots',
      spriteSnapshots: 'SpriteSnapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      audioId: 'string',
      mediaSource: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      modificationTime: 'string',
      creationTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      downloadSwitch: 'string',
      preprocessStatus: 'string',
      storageLocation: 'string',
      regionId: 'string',
      transcodeMode: 'string',
      auditStatus: 'string',
      auditAIStatus: 'string',
      auditManualStatus: 'string',
      auditAIResult: 'string',
      auditTemplateId: 'string',
      customMediaInfo: 'string',
      appId: 'string',
      snapshots: { 'type': 'array', 'itemType': 'string' },
      spriteSnapshots: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaListImage extends $tea.Model {
  title: string;
  imageId: string;
  cateId: number;
  cateName: string;
  ext: string;
  creationTime: string;
  modificationTime: string;
  tags: string;
  type: string;
  URL: string;
  status: string;
  description: string;
  storageLocation: string;
  regionId: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      title: 'Title',
      imageId: 'ImageId',
      cateId: 'CateId',
      cateName: 'CateName',
      ext: 'Ext',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
      tags: 'Tags',
      type: 'Type',
      URL: 'URL',
      status: 'Status',
      description: 'Description',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      title: 'string',
      imageId: 'string',
      cateId: 'number',
      cateName: 'string',
      ext: 'string',
      creationTime: 'string',
      modificationTime: 'string',
      tags: 'string',
      type: 'string',
      URL: 'string',
      status: 'string',
      description: 'string',
      storageLocation: 'string',
      regionId: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaListAttachedMediaCategories extends $tea.Model {
  cateId: number;
  cateName: string;
  level: number;
  parentId: number;
  static names(): { [key: string]: string } {
    return {
      cateId: 'CateId',
      cateName: 'CateName',
      level: 'Level',
      parentId: 'ParentId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cateId: 'number',
      cateName: 'string',
      level: 'number',
      parentId: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaListAttachedMedia extends $tea.Model {
  title: string;
  mediaId: string;
  ext: string;
  creationTime: string;
  modificationTime: string;
  tags: string;
  businessType: string;
  URL: string;
  status: string;
  description: string;
  storageLocation: string;
  regionId: string;
  appId: string;
  icon: string;
  onlineStatus: string;
  categories: SearchMediaResponseMediaListAttachedMediaCategories[];
  static names(): { [key: string]: string } {
    return {
      title: 'Title',
      mediaId: 'MediaId',
      ext: 'Ext',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
      tags: 'Tags',
      businessType: 'BusinessType',
      URL: 'URL',
      status: 'Status',
      description: 'Description',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      appId: 'AppId',
      icon: 'Icon',
      onlineStatus: 'OnlineStatus',
      categories: 'Categories',
    };
  }

  static types(): { [key: string]: any } {
    return {
      title: 'string',
      mediaId: 'string',
      ext: 'string',
      creationTime: 'string',
      modificationTime: 'string',
      tags: 'string',
      businessType: 'string',
      URL: 'string',
      status: 'string',
      description: 'string',
      storageLocation: 'string',
      regionId: 'string',
      appId: 'string',
      icon: 'string',
      onlineStatus: 'string',
      categories: { 'type': 'array', 'itemType': SearchMediaResponseMediaListAttachedMediaCategories },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchMediaResponseMediaList extends $tea.Model {
  mediaType: string;
  creationTime: string;
  mediaId: string;
  video: SearchMediaResponseMediaListVideo;
  audio: SearchMediaResponseMediaListAudio;
  image: SearchMediaResponseMediaListImage;
  attachedMedia: SearchMediaResponseMediaListAttachedMedia;
  static names(): { [key: string]: string } {
    return {
      mediaType: 'MediaType',
      creationTime: 'CreationTime',
      mediaId: 'MediaId',
      video: 'Video',
      audio: 'Audio',
      image: 'Image',
      attachedMedia: 'AttachedMedia',
    };
  }

  static types(): { [key: string]: any } {
    return {
      mediaType: 'string',
      creationTime: 'string',
      mediaId: 'string',
      video: SearchMediaResponseMediaListVideo,
      audio: SearchMediaResponseMediaListAudio,
      image: SearchMediaResponseMediaListImage,
      attachedMedia: SearchMediaResponseMediaListAttachedMedia,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfosResponseVideoListThumbnailList extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfosResponseVideoList extends $tea.Model {
  videoId: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  modificationTime: string;
  creationTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  downloadSwitch: string;
  templateGroupId: string;
  preprocessStatus: string;
  storageLocation: string;
  regionId: string;
  customMediaInfo: string;
  appId: string;
  thumbnailList: GetVideoInfosResponseVideoListThumbnailList[];
  snapshots: string[];
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      modificationTime: 'ModificationTime',
      creationTime: 'CreationTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      downloadSwitch: 'DownloadSwitch',
      templateGroupId: 'TemplateGroupId',
      preprocessStatus: 'PreprocessStatus',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      customMediaInfo: 'CustomMediaInfo',
      appId: 'AppId',
      thumbnailList: 'ThumbnailList',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      modificationTime: 'string',
      creationTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      downloadSwitch: 'string',
      templateGroupId: 'string',
      preprocessStatus: 'string',
      storageLocation: 'string',
      regionId: 'string',
      customMediaInfo: 'string',
      appId: 'string',
      thumbnailList: { 'type': 'array', 'itemType': GetVideoInfosResponseVideoListThumbnailList },
      snapshots: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitPreprocessJobsResponsePreprocessJobs extends $tea.Model {
  preprocessJob: SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob[];
  static names(): { [key: string]: string } {
    return {
      preprocessJob: 'PreprocessJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      preprocessJob: { 'type': 'array', 'itemType': SubmitPreprocessJobsResponsePreprocessJobsPreprocessJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail extends $tea.Model {
  date: string;
  playDuration: string;
  VV: string;
  UV: string;
  playRange: string;
  title: string;
  static names(): { [key: string]: string } {
    return {
      date: 'Date',
      playDuration: 'PlayDuration',
      VV: 'VV',
      UV: 'UV',
      playRange: 'PlayRange',
      title: 'Title',
    };
  }

  static types(): { [key: string]: any } {
    return {
      date: 'string',
      playDuration: 'string',
      VV: 'string',
      UV: 'string',
      playRange: 'string',
      title: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayVideoStatisResponseVideoPlayStatisDetails extends $tea.Model {
  videoPlayStatisDetail: DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail[];
  static names(): { [key: string]: string } {
    return {
      videoPlayStatisDetail: 'VideoPlayStatisDetail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoPlayStatisDetail: { 'type': 'array', 'itemType': DescribePlayVideoStatisResponseVideoPlayStatisDetailsVideoPlayStatisDetail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV extends $tea.Model {
  android: string;
  iOS: string;
  flash: string;
  HTML5: string;
  static names(): { [key: string]: string } {
    return {
      android: 'Android',
      iOS: 'iOS',
      flash: 'Flash',
      HTML5: 'HTML5',
    };
  }

  static types(): { [key: string]: any } {
    return {
      android: 'string',
      iOS: 'string',
      flash: 'string',
      HTML5: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV extends $tea.Model {
  android: string;
  iOS: string;
  flash: string;
  HTML5: string;
  static names(): { [key: string]: string } {
    return {
      android: 'Android',
      iOS: 'iOS',
      flash: 'Flash',
      HTML5: 'HTML5',
    };
  }

  static types(): { [key: string]: any } {
    return {
      android: 'string',
      iOS: 'string',
      flash: 'string',
      HTML5: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal extends $tea.Model {
  date: string;
  playDuration: string;
  playRange: string;
  VV: DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV;
  UV: DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV;
  static names(): { [key: string]: string } {
    return {
      date: 'Date',
      playDuration: 'PlayDuration',
      playRange: 'PlayRange',
      VV: 'VV',
      UV: 'UV',
    };
  }

  static types(): { [key: string]: any } {
    return {
      date: 'string',
      playDuration: 'string',
      playRange: 'string',
      VV: DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalVV,
      UV: DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotalUV,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserTotalResponseUserPlayStatisTotals extends $tea.Model {
  userPlayStatisTotal: DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal[];
  static names(): { [key: string]: string } {
    return {
      userPlayStatisTotal: 'UserPlayStatisTotal',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userPlayStatisTotal: { 'type': 'array', 'itemType': DescribePlayUserTotalResponseUserPlayStatisTotalsUserPlayStatisTotal },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg extends $tea.Model {
  date: string;
  avgPlayDuration: string;
  avgPlayCount: string;
  static names(): { [key: string]: string } {
    return {
      date: 'Date',
      avgPlayDuration: 'AvgPlayDuration',
      avgPlayCount: 'AvgPlayCount',
    };
  }

  static types(): { [key: string]: any } {
    return {
      date: 'string',
      avgPlayDuration: 'string',
      avgPlayCount: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayUserAvgResponseUserPlayStatisAvgs extends $tea.Model {
  userPlayStatisAvg: DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg[];
  static names(): { [key: string]: string } {
    return {
      userPlayStatisAvg: 'UserPlayStatisAvg',
    };
  }

  static types(): { [key: string]: any } {
    return {
      userPlayStatisAvg: { 'type': 'array', 'itemType': DescribePlayUserAvgResponseUserPlayStatisAvgsUserPlayStatisAvg },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis extends $tea.Model {
  playDuration: string;
  VV: string;
  UV: string;
  videoId: string;
  title: string;
  static names(): { [key: string]: string } {
    return {
      playDuration: 'PlayDuration',
      VV: 'VV',
      UV: 'UV',
      videoId: 'VideoId',
      title: 'Title',
    };
  }

  static types(): { [key: string]: any } {
    return {
      playDuration: 'string',
      VV: 'string',
      UV: 'string',
      videoId: 'string',
      title: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class DescribePlayTopVideosResponseTopPlayVideos extends $tea.Model {
  topPlayVideoStatis: DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis[];
  static names(): { [key: string]: string } {
    return {
      topPlayVideoStatis: 'TopPlayVideoStatis',
    };
  }

  static types(): { [key: string]: any } {
    return {
      topPlayVideoStatis: { 'type': 'array', 'itemType': DescribePlayTopVideosResponseTopPlayVideosTopPlayVideoStatis },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot extends $tea.Model {
  index: number;
  url: string;
  static names(): { [key: string]: string } {
    return {
      index: 'Index',
      url: 'Url',
    };
  }

  static types(): { [key: string]: any } {
    return {
      index: 'number',
      url: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSnapshotsResponseMediaSnapshotSnapshots extends $tea.Model {
  snapshot: ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': ListSnapshotsResponseMediaSnapshotSnapshotsSnapshot },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListSnapshotsResponseMediaSnapshot extends $tea.Model {
  total: number;
  regular: string;
  creationTime: string;
  jobId: string;
  snapshots: ListSnapshotsResponseMediaSnapshotSnapshots;
  static names(): { [key: string]: string } {
    return {
      total: 'Total',
      regular: 'Regular',
      creationTime: 'CreationTime',
      jobId: 'JobId',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      total: 'number',
      regular: 'string',
      creationTime: 'string',
      jobId: 'string',
      snapshots: ListSnapshotsResponseMediaSnapshotSnapshots,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitTranscodeJobsResponseTranscodeJobs extends $tea.Model {
  transcodeJob: SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob[];
  static names(): { [key: string]: string } {
    return {
      transcodeJob: 'TranscodeJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      transcodeJob: { 'type': 'array', 'itemType': SubmitTranscodeJobsResponseTranscodeJobsTranscodeJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo extends $tea.Model {
  width: number;
  height: number;
  size: number;
  playURL: string;
  bitrate: string;
  definition: string;
  duration: string;
  format: string;
  fps: string;
  encrypt: number;
  plaintext: string;
  complexity: string;
  streamType: string;
  rand: string;
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      size: 'Size',
      playURL: 'PlayURL',
      bitrate: 'Bitrate',
      definition: 'Definition',
      duration: 'Duration',
      format: 'Format',
      fps: 'Fps',
      encrypt: 'Encrypt',
      plaintext: 'Plaintext',
      complexity: 'Complexity',
      streamType: 'StreamType',
      rand: 'Rand',
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      size: 'number',
      playURL: 'string',
      bitrate: 'string',
      definition: 'string',
      duration: 'string',
      format: 'string',
      fps: 'string',
      encrypt: 'number',
      plaintext: 'string',
      complexity: 'string',
      streamType: 'string',
      rand: 'string',
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList extends $tea.Model {
  playInfo: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo[];
  static names(): { [key: string]: string } {
    return {
      playInfo: 'PlayInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      playInfo: { 'type': 'array', 'itemType': ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoListPlayInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots extends $tea.Model {
  snapshot: string[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo extends $tea.Model {
  videoId: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  privilege: number;
  duration: number;
  description: string;
  customerId: number;
  createTime: string;
  creationTime: string;
  modifyTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  downloadSwitch: string;
  templateGroupId: string;
  snapshots: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots;
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      privilege: 'Privilege',
      duration: 'Duration',
      description: 'Description',
      customerId: 'CustomerId',
      createTime: 'CreateTime',
      creationTime: 'CreationTime',
      modifyTime: 'ModifyTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      downloadSwitch: 'DownloadSwitch',
      templateGroupId: 'TemplateGroupId',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      privilege: 'number',
      duration: 'number',
      description: 'string',
      customerId: 'number',
      createTime: 'string',
      creationTime: 'string',
      modifyTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      downloadSwitch: 'string',
      templateGroupId: 'string',
      snapshots: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideoSnapshots,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo extends $tea.Model {
  streamName: string;
  domainName: string;
  appName: string;
  playlistId: string;
  recordStartTime: string;
  recordEndTime: string;
  playInfoList: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList;
  video: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo;
  static names(): { [key: string]: string } {
    return {
      streamName: 'StreamName',
      domainName: 'DomainName',
      appName: 'AppName',
      playlistId: 'PlaylistId',
      recordStartTime: 'RecordStartTime',
      recordEndTime: 'RecordEndTime',
      playInfoList: 'PlayInfoList',
      video: 'Video',
    };
  }

  static types(): { [key: string]: any } {
    return {
      streamName: 'string',
      domainName: 'string',
      appName: 'string',
      playlistId: 'string',
      recordStartTime: 'string',
      recordEndTime: 'string',
      playInfoList: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoPlayInfoList,
      video: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideoVideo,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListLiveRecordVideoResponseLiveRecordVideoList extends $tea.Model {
  liveRecordVideo: ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo[];
  static names(): { [key: string]: string } {
    return {
      liveRecordVideo: 'LiveRecordVideo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      liveRecordVideo: { 'type': 'array', 'itemType': ListLiveRecordVideoResponseLiveRecordVideoListLiveRecordVideo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetAuditHistoryResponseHistories extends $tea.Model {
  creationTime: string;
  status: string;
  reason: string;
  comment: string;
  auditor: string;
  static names(): { [key: string]: string } {
    return {
      creationTime: 'CreationTime',
      status: 'Status',
      reason: 'Reason',
      comment: 'Comment',
      auditor: 'Auditor',
    };
  }

  static types(): { [key: string]: any } {
    return {
      creationTime: 'string',
      status: 'string',
      reason: 'string',
      comment: 'string',
      auditor: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAIJobResponseAIJobListAIJob extends $tea.Model {
  jobId: string;
  mediaId: string;
  type: string;
  status: string;
  code: string;
  message: string;
  creationTime: string;
  completeTime: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      mediaId: 'MediaId',
      type: 'Type',
      status: 'Status',
      code: 'Code',
      message: 'Message',
      creationTime: 'CreationTime',
      completeTime: 'CompleteTime',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      mediaId: 'string',
      type: 'string',
      status: 'string',
      code: 'string',
      message: 'string',
      creationTime: 'string',
      completeTime: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAIJobResponseAIJobList extends $tea.Model {
  AIJob: ListAIJobResponseAIJobListAIJob[];
  static names(): { [key: string]: string } {
    return {
      AIJob: 'AIJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      AIJob: { 'type': 'array', 'itemType': ListAIJobResponseAIJobListAIJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class ListAIJobResponseNonExistAIJobIds extends $tea.Model {
  string: string[];
  static names(): { [key: string]: string } {
    return {
      string: 'String',
    };
  }

  static types(): { [key: string]: any } {
    return {
      string: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIJobResponseAIJobListAIJob extends $tea.Model {
  jobId: string;
  type: string;
  mediaId: string;
  status: string;
  code: string;
  message: string;
  creationTime: string;
  data: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
      type: 'Type',
      mediaId: 'MediaId',
      status: 'Status',
      code: 'Code',
      message: 'Message',
      creationTime: 'CreationTime',
      data: 'Data',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
      type: 'string',
      mediaId: 'string',
      status: 'string',
      code: 'string',
      message: 'string',
      creationTime: 'string',
      data: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitAIJobResponseAIJobList extends $tea.Model {
  AIJob: SubmitAIJobResponseAIJobListAIJob[];
  static names(): { [key: string]: string } {
    return {
      AIJob: 'AIJob',
    };
  }

  static types(): { [key: string]: any } {
    return {
      AIJob: { 'type': 'array', 'itemType': SubmitAIJobResponseAIJobListAIJob },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetImageInfoResponseImageInfoMezzanine extends $tea.Model {
  originalFileName: string;
  fileSize: string;
  width: number;
  height: number;
  fileURL: string;
  static names(): { [key: string]: string } {
    return {
      originalFileName: 'OriginalFileName',
      fileSize: 'FileSize',
      width: 'Width',
      height: 'Height',
      fileURL: 'FileURL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      originalFileName: 'string',
      fileSize: 'string',
      width: 'number',
      height: 'number',
      fileURL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetImageInfoResponseImageInfo extends $tea.Model {
  imageId: string;
  title: string;
  creationTime: string;
  imageType: string;
  tags: string;
  URL: string;
  cateId: number;
  cateName: string;
  description: string;
  storageLocation: string;
  status: string;
  appId: string;
  regionId: string;
  auditStatus: string;
  mezzanine: GetImageInfoResponseImageInfoMezzanine;
  static names(): { [key: string]: string } {
    return {
      imageId: 'ImageId',
      title: 'Title',
      creationTime: 'CreationTime',
      imageType: 'ImageType',
      tags: 'Tags',
      URL: 'URL',
      cateId: 'CateId',
      cateName: 'CateName',
      description: 'Description',
      storageLocation: 'StorageLocation',
      status: 'Status',
      appId: 'AppId',
      regionId: 'RegionId',
      auditStatus: 'AuditStatus',
      mezzanine: 'Mezzanine',
    };
  }

  static types(): { [key: string]: any } {
    return {
      imageId: 'string',
      title: 'string',
      creationTime: 'string',
      imageType: 'string',
      tags: 'string',
      URL: 'string',
      cateId: 'number',
      cateName: 'string',
      description: 'string',
      storageLocation: 'string',
      status: 'string',
      appId: 'string',
      regionId: 'string',
      auditStatus: 'string',
      mezzanine: GetImageInfoResponseImageInfoMezzanine,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SubmitSnapshotJobResponseSnapshotJob extends $tea.Model {
  jobId: string;
  static names(): { [key: string]: string } {
    return {
      jobId: 'JobId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      jobId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEditingProjectResponseProjectListProject extends $tea.Model {
  projectId: string;
  creationTime: string;
  modifiedTime: string;
  status: string;
  description: string;
  title: string;
  coverURL: string;
  storageLocation: string;
  regionId: string;
  duration: number;
  static names(): { [key: string]: string } {
    return {
      projectId: 'ProjectId',
      creationTime: 'CreationTime',
      modifiedTime: 'ModifiedTime',
      status: 'Status',
      description: 'Description',
      title: 'Title',
      coverURL: 'CoverURL',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      duration: 'Duration',
    };
  }

  static types(): { [key: string]: any } {
    return {
      projectId: 'string',
      creationTime: 'string',
      modifiedTime: 'string',
      status: 'string',
      description: 'string',
      title: 'string',
      coverURL: 'string',
      storageLocation: 'string',
      regionId: 'string',
      duration: 'number',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class SearchEditingProjectResponseProjectList extends $tea.Model {
  project: SearchEditingProjectResponseProjectListProject[];
  static names(): { [key: string]: string } {
    return {
      project: 'Project',
    };
  }

  static types(): { [key: string]: any } {
    return {
      project: { 'type': 'array', 'itemType': SearchEditingProjectResponseProjectListProject },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots extends $tea.Model {
  snapshot: string[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsResponseMaterialListMaterialSprites extends $tea.Model {
  sprite: string[];
  static names(): { [key: string]: string } {
    return {
      sprite: 'Sprite',
    };
  }

  static types(): { [key: string]: any } {
    return {
      sprite: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsResponseMaterialListMaterial extends $tea.Model {
  materialId: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  creationTime: string;
  modifiedTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  source: string;
  spriteConfig: string;
  snapshots: GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots;
  sprites: GetEditingProjectMaterialsResponseMaterialListMaterialSprites;
  static names(): { [key: string]: string } {
    return {
      materialId: 'MaterialId',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      creationTime: 'CreationTime',
      modifiedTime: 'ModifiedTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      source: 'Source',
      spriteConfig: 'SpriteConfig',
      snapshots: 'Snapshots',
      sprites: 'Sprites',
    };
  }

  static types(): { [key: string]: any } {
    return {
      materialId: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      creationTime: 'string',
      modifiedTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      source: 'string',
      spriteConfig: 'string',
      snapshots: GetEditingProjectMaterialsResponseMaterialListMaterialSnapshots,
      sprites: GetEditingProjectMaterialsResponseMaterialListMaterialSprites,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectMaterialsResponseMaterialList extends $tea.Model {
  material: GetEditingProjectMaterialsResponseMaterialListMaterial[];
  static names(): { [key: string]: string } {
    return {
      material: 'Material',
    };
  }

  static types(): { [key: string]: any } {
    return {
      material: { 'type': 'array', 'itemType': GetEditingProjectMaterialsResponseMaterialListMaterial },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetEditingProjectResponseProject extends $tea.Model {
  projectId: string;
  creationTime: string;
  modifiedTime: string;
  status: string;
  description: string;
  title: string;
  timeline: string;
  coverURL: string;
  storageLocation: string;
  regionId: string;
  static names(): { [key: string]: string } {
    return {
      projectId: 'ProjectId',
      creationTime: 'CreationTime',
      modifiedTime: 'ModifiedTime',
      status: 'Status',
      description: 'Description',
      title: 'Title',
      timeline: 'Timeline',
      coverURL: 'CoverURL',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      projectId: 'string',
      creationTime: 'string',
      modifiedTime: 'string',
      status: 'string',
      description: 'string',
      title: 'string',
      timeline: 'string',
      coverURL: 'string',
      storageLocation: 'string',
      regionId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddEditingProjectResponseProject extends $tea.Model {
  projectId: string;
  creationTime: string;
  modifiedTime: string;
  status: string;
  description: string;
  title: string;
  static names(): { [key: string]: string } {
    return {
      projectId: 'ProjectId',
      creationTime: 'CreationTime',
      modifiedTime: 'ModifiedTime',
      status: 'Status',
      description: 'Description',
      title: 'Title',
    };
  }

  static types(): { [key: string]: any } {
    return {
      projectId: 'string',
      creationTime: 'string',
      modifiedTime: 'string',
      status: 'string',
      description: 'string',
      title: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMezzanineInfoResponseMezzanineAudioStreamList extends $tea.Model {
  index: string;
  codecName: string;
  codecLongName: string;
  codecTimeBase: string;
  codecTagString: string;
  codecTag: string;
  sampleFmt: string;
  sampleRate: string;
  channels: string;
  channelLayout: string;
  timebase: string;
  startTime: string;
  duration: string;
  bitrate: string;
  numFrames: string;
  lang: string;
  static names(): { [key: string]: string } {
    return {
      index: 'Index',
      codecName: 'CodecName',
      codecLongName: 'CodecLongName',
      codecTimeBase: 'CodecTimeBase',
      codecTagString: 'CodecTagString',
      codecTag: 'CodecTag',
      sampleFmt: 'SampleFmt',
      sampleRate: 'SampleRate',
      channels: 'Channels',
      channelLayout: 'ChannelLayout',
      timebase: 'Timebase',
      startTime: 'StartTime',
      duration: 'Duration',
      bitrate: 'Bitrate',
      numFrames: 'NumFrames',
      lang: 'Lang',
    };
  }

  static types(): { [key: string]: any } {
    return {
      index: 'string',
      codecName: 'string',
      codecLongName: 'string',
      codecTimeBase: 'string',
      codecTagString: 'string',
      codecTag: 'string',
      sampleFmt: 'string',
      sampleRate: 'string',
      channels: 'string',
      channelLayout: 'string',
      timebase: 'string',
      startTime: 'string',
      duration: 'string',
      bitrate: 'string',
      numFrames: 'string',
      lang: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMezzanineInfoResponseMezzanineVideoStreamList extends $tea.Model {
  index: string;
  codecName: string;
  codecLongName: string;
  profile: string;
  codecTimeBase: string;
  codecTagString: string;
  codecTag: string;
  width: string;
  height: string;
  hasBFrames: string;
  sar: string;
  dar: string;
  pixFmt: string;
  level: string;
  fps: string;
  avgFPS: string;
  timebase: string;
  startTime: string;
  duration: string;
  numFrames: string;
  lang: string;
  rotate: string;
  static names(): { [key: string]: string } {
    return {
      index: 'Index',
      codecName: 'CodecName',
      codecLongName: 'CodecLongName',
      profile: 'Profile',
      codecTimeBase: 'CodecTimeBase',
      codecTagString: 'CodecTagString',
      codecTag: 'CodecTag',
      width: 'Width',
      height: 'Height',
      hasBFrames: 'HasBFrames',
      sar: 'Sar',
      dar: 'Dar',
      pixFmt: 'PixFmt',
      level: 'Level',
      fps: 'Fps',
      avgFPS: 'AvgFPS',
      timebase: 'Timebase',
      startTime: 'StartTime',
      duration: 'Duration',
      numFrames: 'NumFrames',
      lang: 'Lang',
      rotate: 'Rotate',
    };
  }

  static types(): { [key: string]: any } {
    return {
      index: 'string',
      codecName: 'string',
      codecLongName: 'string',
      profile: 'string',
      codecTimeBase: 'string',
      codecTagString: 'string',
      codecTag: 'string',
      width: 'string',
      height: 'string',
      hasBFrames: 'string',
      sar: 'string',
      dar: 'string',
      pixFmt: 'string',
      level: 'string',
      fps: 'string',
      avgFPS: 'string',
      timebase: 'string',
      startTime: 'string',
      duration: 'string',
      numFrames: 'string',
      lang: 'string',
      rotate: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMezzanineInfoResponseMezzanine extends $tea.Model {
  videoId: string;
  bitrate: string;
  creationTime: string;
  duration: string;
  fps: string;
  height: number;
  width: number;
  size: number;
  status: string;
  fileURL: string;
  fileName: string;
  CRC64: string;
  preprocessStatus: string;
  outputType: string;
  audioStreamList: GetMezzanineInfoResponseMezzanineAudioStreamList[];
  videoStreamList: GetMezzanineInfoResponseMezzanineVideoStreamList[];
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      bitrate: 'Bitrate',
      creationTime: 'CreationTime',
      duration: 'Duration',
      fps: 'Fps',
      height: 'Height',
      width: 'Width',
      size: 'Size',
      status: 'Status',
      fileURL: 'FileURL',
      fileName: 'FileName',
      CRC64: 'CRC64',
      preprocessStatus: 'PreprocessStatus',
      outputType: 'OutputType',
      audioStreamList: 'AudioStreamList',
      videoStreamList: 'VideoStreamList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      bitrate: 'string',
      creationTime: 'string',
      duration: 'string',
      fps: 'string',
      height: 'number',
      width: 'number',
      size: 'number',
      status: 'string',
      fileURL: 'string',
      fileName: 'string',
      CRC64: 'string',
      preprocessStatus: 'string',
      outputType: 'string',
      audioStreamList: { 'type': 'array', 'itemType': GetMezzanineInfoResponseMezzanineAudioStreamList },
      videoStreamList: { 'type': 'array', 'itemType': GetMezzanineInfoResponseMezzanineVideoStreamList },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCategoriesResponseSubCategoriesCategory extends $tea.Model {
  cateId: number;
  cateName: string;
  level: number;
  parentId: number;
  subTotal: number;
  type: string;
  static names(): { [key: string]: string } {
    return {
      cateId: 'CateId',
      cateName: 'CateName',
      level: 'Level',
      parentId: 'ParentId',
      subTotal: 'SubTotal',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cateId: 'number',
      cateName: 'string',
      level: 'number',
      parentId: 'number',
      subTotal: 'number',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCategoriesResponseSubCategories extends $tea.Model {
  category: GetCategoriesResponseSubCategoriesCategory[];
  static names(): { [key: string]: string } {
    return {
      category: 'Category',
    };
  }

  static types(): { [key: string]: any } {
    return {
      category: { 'type': 'array', 'itemType': GetCategoriesResponseSubCategoriesCategory },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetCategoriesResponseCategory extends $tea.Model {
  cateId: number;
  cateName: string;
  level: number;
  parentId: number;
  type: string;
  static names(): { [key: string]: string } {
    return {
      cateId: 'CateId',
      cateName: 'CateName',
      level: 'Level',
      parentId: 'ParentId',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cateId: 'number',
      cateName: 'string',
      level: 'number',
      parentId: 'number',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class AddCategoryResponseCategory extends $tea.Model {
  cateId: number;
  cateName: string;
  parentId: number;
  level: number;
  type: string;
  static names(): { [key: string]: string } {
    return {
      cateId: 'CateId',
      cateName: 'CateName',
      parentId: 'ParentId',
      level: 'Level',
      type: 'Type',
    };
  }

  static types(): { [key: string]: any } {
    return {
      cateId: 'number',
      cateName: 'string',
      parentId: 'number',
      level: 'number',
      type: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponsePlayInfoListPlayInfo extends $tea.Model {
  width: number;
  height: number;
  size: number;
  playURL: string;
  bitrate: string;
  definition: string;
  duration: string;
  format: string;
  fps: string;
  encrypt: number;
  plaintext: string;
  complexity: string;
  streamType: string;
  rand: string;
  jobId: string;
  preprocessStatus: string;
  watermarkId: string;
  status: string;
  creationTime: string;
  modificationTime: string;
  encryptType: string;
  narrowBandType: string;
  specification: string;
  static names(): { [key: string]: string } {
    return {
      width: 'Width',
      height: 'Height',
      size: 'Size',
      playURL: 'PlayURL',
      bitrate: 'Bitrate',
      definition: 'Definition',
      duration: 'Duration',
      format: 'Format',
      fps: 'Fps',
      encrypt: 'Encrypt',
      plaintext: 'Plaintext',
      complexity: 'Complexity',
      streamType: 'StreamType',
      rand: 'Rand',
      jobId: 'JobId',
      preprocessStatus: 'PreprocessStatus',
      watermarkId: 'WatermarkId',
      status: 'Status',
      creationTime: 'CreationTime',
      modificationTime: 'ModificationTime',
      encryptType: 'EncryptType',
      narrowBandType: 'NarrowBandType',
      specification: 'Specification',
    };
  }

  static types(): { [key: string]: any } {
    return {
      width: 'number',
      height: 'number',
      size: 'number',
      playURL: 'string',
      bitrate: 'string',
      definition: 'string',
      duration: 'string',
      format: 'string',
      fps: 'string',
      encrypt: 'number',
      plaintext: 'string',
      complexity: 'string',
      streamType: 'string',
      rand: 'string',
      jobId: 'string',
      preprocessStatus: 'string',
      watermarkId: 'string',
      status: 'string',
      creationTime: 'string',
      modificationTime: 'string',
      encryptType: 'string',
      narrowBandType: 'string',
      specification: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponsePlayInfoList extends $tea.Model {
  playInfo: GetPlayInfoResponsePlayInfoListPlayInfo[];
  static names(): { [key: string]: string } {
    return {
      playInfo: 'PlayInfo',
    };
  }

  static types(): { [key: string]: any } {
    return {
      playInfo: { 'type': 'array', 'itemType': GetPlayInfoResponsePlayInfoListPlayInfo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponseVideoBaseThumbnailListThumbnail extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponseVideoBaseThumbnailList extends $tea.Model {
  thumbnail: GetPlayInfoResponseVideoBaseThumbnailListThumbnail[];
  static names(): { [key: string]: string } {
    return {
      thumbnail: 'Thumbnail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      thumbnail: { 'type': 'array', 'itemType': GetPlayInfoResponseVideoBaseThumbnailListThumbnail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetPlayInfoResponseVideoBase extends $tea.Model {
  outputType: string;
  coverURL: string;
  duration: string;
  status: string;
  title: string;
  videoId: string;
  mediaType: string;
  creationTime: string;
  transcodeMode: string;
  thumbnailList: GetPlayInfoResponseVideoBaseThumbnailList;
  static names(): { [key: string]: string } {
    return {
      outputType: 'OutputType',
      coverURL: 'CoverURL',
      duration: 'Duration',
      status: 'Status',
      title: 'Title',
      videoId: 'VideoId',
      mediaType: 'MediaType',
      creationTime: 'CreationTime',
      transcodeMode: 'TranscodeMode',
      thumbnailList: 'ThumbnailList',
    };
  }

  static types(): { [key: string]: any } {
    return {
      outputType: 'string',
      coverURL: 'string',
      duration: 'string',
      status: 'string',
      title: 'string',
      videoId: 'string',
      mediaType: 'string',
      creationTime: 'string',
      transcodeMode: 'string',
      thumbnailList: GetPlayInfoResponseVideoBaseThumbnailList,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetMessageCallbackResponseMessageCallback extends $tea.Model {
  callbackType: string;
  callbackURL: string;
  eventTypeList: string;
  authSwitch: string;
  authKey: string;
  mnsEndpoint: string;
  mnsQueueName: string;
  appId: string;
  static names(): { [key: string]: string } {
    return {
      callbackType: 'CallbackType',
      callbackURL: 'CallbackURL',
      eventTypeList: 'EventTypeList',
      authSwitch: 'AuthSwitch',
      authKey: 'AuthKey',
      mnsEndpoint: 'MnsEndpoint',
      mnsQueueName: 'MnsQueueName',
      appId: 'AppId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      callbackType: 'string',
      callbackURL: 'string',
      eventTypeList: 'string',
      authSwitch: 'string',
      authKey: 'string',
      mnsEndpoint: 'string',
      mnsQueueName: 'string',
      appId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoPlayAuthResponseVideoMeta extends $tea.Model {
  coverURL: string;
  duration: number;
  status: string;
  title: string;
  videoId: string;
  static names(): { [key: string]: string } {
    return {
      coverURL: 'CoverURL',
      duration: 'Duration',
      status: 'Status',
      title: 'Title',
      videoId: 'VideoId',
    };
  }

  static types(): { [key: string]: any } {
    return {
      coverURL: 'string',
      duration: 'number',
      status: 'string',
      title: 'string',
      videoId: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoListResponseVideoListVideoSnapshots extends $tea.Model {
  snapshot: string[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoListResponseVideoListVideo extends $tea.Model {
  videoId: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  createTime: string;
  modifyTime: string;
  modificationTime: string;
  creationTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  storageLocation: string;
  appId: string;
  snapshots: GetVideoListResponseVideoListVideoSnapshots;
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      createTime: 'CreateTime',
      modifyTime: 'ModifyTime',
      modificationTime: 'ModificationTime',
      creationTime: 'CreationTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      storageLocation: 'StorageLocation',
      appId: 'AppId',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      createTime: 'string',
      modifyTime: 'string',
      modificationTime: 'string',
      creationTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      storageLocation: 'string',
      appId: 'string',
      snapshots: GetVideoListResponseVideoListVideoSnapshots,
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoListResponseVideoList extends $tea.Model {
  video: GetVideoListResponseVideoListVideo[];
  static names(): { [key: string]: string } {
    return {
      video: 'Video',
    };
  }

  static types(): { [key: string]: any } {
    return {
      video: { 'type': 'array', 'itemType': GetVideoListResponseVideoListVideo },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoResponseVideoThumbnailListThumbnail extends $tea.Model {
  URL: string;
  static names(): { [key: string]: string } {
    return {
      URL: 'URL',
    };
  }

  static types(): { [key: string]: any } {
    return {
      URL: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoResponseVideoThumbnailList extends $tea.Model {
  thumbnail: GetVideoInfoResponseVideoThumbnailListThumbnail[];
  static names(): { [key: string]: string } {
    return {
      thumbnail: 'Thumbnail',
    };
  }

  static types(): { [key: string]: any } {
    return {
      thumbnail: { 'type': 'array', 'itemType': GetVideoInfoResponseVideoThumbnailListThumbnail },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoResponseVideoSnapshots extends $tea.Model {
  snapshot: string[];
  static names(): { [key: string]: string } {
    return {
      snapshot: 'Snapshot',
    };
  }

  static types(): { [key: string]: any } {
    return {
      snapshot: { 'type': 'array', 'itemType': 'string' },
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class GetVideoInfoResponseVideo extends $tea.Model {
  videoId: string;
  title: string;
  tags: string;
  status: string;
  size: number;
  duration: number;
  description: string;
  createTime: string;
  modifyTime: string;
  modificationTime: string;
  creationTime: string;
  coverURL: string;
  cateId: number;
  cateName: string;
  downloadSwitch: string;
  templateGroupId: string;
  preprocessStatus: string;
  storageLocation: string;
  regionId: string;
  customMediaInfo: string;
  auditStatus: string;
  appId: string;
  thumbnailList: GetVideoInfoResponseVideoThumbnailList;
  snapshots: GetVideoInfoResponseVideoSnapshots;
  static names(): { [key: string]: string } {
    return {
      videoId: 'VideoId',
      title: 'Title',
      tags: 'Tags',
      status: 'Status',
      size: 'Size',
      duration: 'Duration',
      description: 'Description',
      createTime: 'CreateTime',
      modifyTime: 'ModifyTime',
      modificationTime: 'ModificationTime',
      creationTime: 'CreationTime',
      coverURL: 'CoverURL',
      cateId: 'CateId',
      cateName: 'CateName',
      downloadSwitch: 'DownloadSwitch',
      templateGroupId: 'TemplateGroupId',
      preprocessStatus: 'PreprocessStatus',
      storageLocation: 'StorageLocation',
      regionId: 'RegionId',
      customMediaInfo: 'CustomMediaInfo',
      auditStatus: 'AuditStatus',
      appId: 'AppId',
      thumbnailList: 'ThumbnailList',
      snapshots: 'Snapshots',
    };
  }

  static types(): { [key: string]: any } {
    return {
      videoId: 'string',
      title: 'string',
      tags: 'string',
      status: 'string',
      size: 'number',
      duration: 'number',
      description: 'string',
      createTime: 'string',
      modifyTime: 'string',
      modificationTime: 'string',
      creationTime: 'string',
      coverURL: 'string',
      cateId: 'number',
      cateName: 'string',
      downloadSwitch: 'string',
      templateGroupId: 'string',
      preprocessStatus: 'string',
      storageLocation: 'string',
      regionId: 'string',
      customMediaInfo: 'string',
      auditStatus: 'string',
      appId: 'string',
      thumbnailList: GetVideoInfoResponseVideoThumbnailList,
      snapshots: GetVideoInfoResponseVideoSnapshots,
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
      'cn-beijing': "vod.cn-shanghai.aliyuncs.com",
      'cn-hangzhou': "vod.cn-shanghai.aliyuncs.com",
      'cn-shenzhen': "vod.cn-shanghai.aliyuncs.com",
      'ap-northeast-2-pop': "vod.ap-northeast-1.aliyuncs.com",
      'ap-southeast-2': "vod.ap-northeast-1.aliyuncs.com",
      'ap-southeast-3': "vod.ap-northeast-1.aliyuncs.com",
      'cn-beijing-finance-1': "vod.aliyuncs.com",
      'cn-beijing-finance-pop': "vod.aliyuncs.com",
      'cn-beijing-gov-1': "vod.aliyuncs.com",
      'cn-beijing-nu16-b01': "vod.aliyuncs.com",
      'cn-chengdu': "vod.aliyuncs.com",
      'cn-edge-1': "vod.aliyuncs.com",
      'cn-fujian': "vod.aliyuncs.com",
      'cn-haidian-cm12-c01': "vod.aliyuncs.com",
      'cn-hangzhou-bj-b01': "vod.aliyuncs.com",
      'cn-hangzhou-finance': "vod.aliyuncs.com",
      'cn-hangzhou-internal-prod-1': "vod.aliyuncs.com",
      'cn-hangzhou-internal-test-1': "vod.aliyuncs.com",
      'cn-hangzhou-internal-test-2': "vod.aliyuncs.com",
      'cn-hangzhou-internal-test-3': "vod.aliyuncs.com",
      'cn-hangzhou-test-306': "vod.aliyuncs.com",
      'cn-hongkong-finance-pop': "vod.aliyuncs.com",
      'cn-huhehaote': "vod.aliyuncs.com",
      'cn-qingdao': "vod.aliyuncs.com",
      'cn-qingdao-nebula': "vod.aliyuncs.com",
      'cn-shanghai-et15-b01': "vod.aliyuncs.com",
      'cn-shanghai-et2-b01': "vod.aliyuncs.com",
      'cn-shanghai-finance-1': "vod.aliyuncs.com",
      'cn-shanghai-inner': "vod.aliyuncs.com",
      'cn-shanghai-internal-test-1': "vod.aliyuncs.com",
      'cn-shenzhen-finance-1': "vod.aliyuncs.com",
      'cn-shenzhen-inner': "vod.aliyuncs.com",
      'cn-shenzhen-st4-d01': "vod.aliyuncs.com",
      'cn-shenzhen-su18-b01': "vod.aliyuncs.com",
      'cn-wuhan': "vod.aliyuncs.com",
      'cn-yushanfang': "vod.aliyuncs.com",
      'cn-zhangbei-na61-b01': "vod.aliyuncs.com",
      'cn-zhangjiakou-na62-a01': "vod.aliyuncs.com",
      'cn-zhengzhou-nebula-1': "vod.aliyuncs.com",
      'eu-west-1-oxs': "vod.ap-northeast-1.aliyuncs.com",
      'me-east-1': "vod.ap-northeast-1.aliyuncs.com",
      'rus-west-1-pop': "vod.ap-northeast-1.aliyuncs.com",
      'us-east-1': "vod.ap-northeast-1.aliyuncs.com",
    };
    this.checkConfig(config);
    this._endpoint = this.getEndpoint(this._productId, this._regionId, this._endpointRule, this._network, this._suffix, this._endpointMap, this._endpoint);
  }


  async submitMediaDNADeleteJobWithOptions(request: SubmitMediaDNADeleteJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitMediaDNADeleteJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitMediaDNADeleteJobResponse>(await this.doRequest("SubmitMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitMediaDNADeleteJobResponse({}));
  }

  async submitMediaDNADeleteJob(request: SubmitMediaDNADeleteJobRequest): Promise<SubmitMediaDNADeleteJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitMediaDNADeleteJobWithOptions(request, runtime);
  }

  async listMediaDNADeleteJobWithOptions(request: ListMediaDNADeleteJobRequest, runtime: $Util.RuntimeOptions): Promise<ListMediaDNADeleteJobResponse> {
    Util.validateModel(request);
    return $tea.cast<ListMediaDNADeleteJobResponse>(await this.doRequest("ListMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListMediaDNADeleteJobResponse({}));
  }

  async listMediaDNADeleteJob(request: ListMediaDNADeleteJobRequest): Promise<ListMediaDNADeleteJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listMediaDNADeleteJobWithOptions(request, runtime);
  }

  async getMediaAuditAudioResultDetailWithOptions(request: GetMediaAuditAudioResultDetailRequest, runtime: $Util.RuntimeOptions): Promise<GetMediaAuditAudioResultDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMediaAuditAudioResultDetailResponse>(await this.doRequest("GetMediaAuditAudioResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMediaAuditAudioResultDetailResponse({}));
  }

  async getMediaAuditAudioResultDetail(request: GetMediaAuditAudioResultDetailRequest): Promise<GetMediaAuditAudioResultDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMediaAuditAudioResultDetailWithOptions(request, runtime);
  }

  async submitDynamicImageJobWithOptions(request: SubmitDynamicImageJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitDynamicImageJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitDynamicImageJobResponse>(await this.doRequest("SubmitDynamicImageJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitDynamicImageJobResponse({}));
  }

  async submitDynamicImageJob(request: SubmitDynamicImageJobRequest): Promise<SubmitDynamicImageJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitDynamicImageJobWithOptions(request, runtime);
  }

  async submitWorkflowJobWithOptions(request: SubmitWorkflowJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitWorkflowJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitWorkflowJobResponse>(await this.doRequest("SubmitWorkflowJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitWorkflowJobResponse({}));
  }

  async submitWorkflowJob(request: SubmitWorkflowJobRequest): Promise<SubmitWorkflowJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitWorkflowJobWithOptions(request, runtime);
  }

  async getAIVideoTagResultWithOptions(request: GetAIVideoTagResultRequest, runtime: $Util.RuntimeOptions): Promise<GetAIVideoTagResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAIVideoTagResultResponse>(await this.doRequest("GetAIVideoTagResult", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAIVideoTagResultResponse({}));
  }

  async getAIVideoTagResult(request: GetAIVideoTagResultRequest): Promise<GetAIVideoTagResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAIVideoTagResultWithOptions(request, runtime);
  }

  async getUploadDetailsWithOptions(request: GetUploadDetailsRequest, runtime: $Util.RuntimeOptions): Promise<GetUploadDetailsResponse> {
    Util.validateModel(request);
    return $tea.cast<GetUploadDetailsResponse>(await this.doRequest("GetUploadDetails", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetUploadDetailsResponse({}));
  }

  async getUploadDetails(request: GetUploadDetailsRequest): Promise<GetUploadDetailsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getUploadDetailsWithOptions(request, runtime);
  }

  async describeVodStorageDataWithOptions(request: DescribeVodStorageDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodStorageDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodStorageDataResponse>(await this.doRequest("DescribeVodStorageData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodStorageDataResponse({}));
  }

  async describeVodStorageData(request: DescribeVodStorageDataRequest): Promise<DescribeVodStorageDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodStorageDataWithOptions(request, runtime);
  }

  async describeVodAIDataWithOptions(request: DescribeVodAIDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodAIDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodAIDataResponse>(await this.doRequest("DescribeVodAIData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodAIDataResponse({}));
  }

  async describeVodAIData(request: DescribeVodAIDataRequest): Promise<DescribeVodAIDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodAIDataWithOptions(request, runtime);
  }

  async describeVodTranscodeDataWithOptions(request: DescribeVodTranscodeDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodTranscodeDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodTranscodeDataResponse>(await this.doRequest("DescribeVodTranscodeData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodTranscodeDataResponse({}));
  }

  async describeVodTranscodeData(request: DescribeVodTranscodeDataRequest): Promise<DescribeVodTranscodeDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodTranscodeDataWithOptions(request, runtime);
  }

  async deleteMultipartUploadWithOptions(request: DeleteMultipartUploadRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMultipartUploadResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMultipartUploadResponse>(await this.doRequest("DeleteMultipartUpload", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteMultipartUploadResponse({}));
  }

  async deleteMultipartUpload(request: DeleteMultipartUploadRequest): Promise<DeleteMultipartUploadResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMultipartUploadWithOptions(request, runtime);
  }

  async getAttachedMediaInfoWithOptions(request: GetAttachedMediaInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetAttachedMediaInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAttachedMediaInfoResponse>(await this.doRequest("GetAttachedMediaInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAttachedMediaInfoResponse({}));
  }

  async getAttachedMediaInfo(request: GetAttachedMediaInfoRequest): Promise<GetAttachedMediaInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAttachedMediaInfoWithOptions(request, runtime);
  }

  async deleteAttachedMediaWithOptions(request: DeleteAttachedMediaRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAttachedMediaResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAttachedMediaResponse>(await this.doRequest("DeleteAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteAttachedMediaResponse({}));
  }

  async deleteAttachedMedia(request: DeleteAttachedMediaRequest): Promise<DeleteAttachedMediaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAttachedMediaWithOptions(request, runtime);
  }

  async updateAttachedMediaInfosWithOptions(request: UpdateAttachedMediaInfosRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAttachedMediaInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAttachedMediaInfosResponse>(await this.doRequest("UpdateAttachedMediaInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateAttachedMediaInfosResponse({}));
  }

  async updateAttachedMediaInfos(request: UpdateAttachedMediaInfosRequest): Promise<UpdateAttachedMediaInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAttachedMediaInfosWithOptions(request, runtime);
  }

  async attachAppPolicyToIdentityWithOptions(request: AttachAppPolicyToIdentityRequest, runtime: $Util.RuntimeOptions): Promise<AttachAppPolicyToIdentityResponse> {
    Util.validateModel(request);
    return $tea.cast<AttachAppPolicyToIdentityResponse>(await this.doRequest("AttachAppPolicyToIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AttachAppPolicyToIdentityResponse({}));
  }

  async attachAppPolicyToIdentity(request: AttachAppPolicyToIdentityRequest): Promise<AttachAppPolicyToIdentityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.attachAppPolicyToIdentityWithOptions(request, runtime);
  }

  async detachAppPolicyFromIdentityWithOptions(request: DetachAppPolicyFromIdentityRequest, runtime: $Util.RuntimeOptions): Promise<DetachAppPolicyFromIdentityResponse> {
    Util.validateModel(request);
    return $tea.cast<DetachAppPolicyFromIdentityResponse>(await this.doRequest("DetachAppPolicyFromIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DetachAppPolicyFromIdentityResponse({}));
  }

  async detachAppPolicyFromIdentity(request: DetachAppPolicyFromIdentityRequest): Promise<DetachAppPolicyFromIdentityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.detachAppPolicyFromIdentityWithOptions(request, runtime);
  }

  async listAppPoliciesForIdentityWithOptions(request: ListAppPoliciesForIdentityRequest, runtime: $Util.RuntimeOptions): Promise<ListAppPoliciesForIdentityResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAppPoliciesForIdentityResponse>(await this.doRequest("ListAppPoliciesForIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListAppPoliciesForIdentityResponse({}));
  }

  async listAppPoliciesForIdentity(request: ListAppPoliciesForIdentityRequest): Promise<ListAppPoliciesForIdentityResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAppPoliciesForIdentityWithOptions(request, runtime);
  }

  async createAppInfoWithOptions(request: CreateAppInfoRequest, runtime: $Util.RuntimeOptions): Promise<CreateAppInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAppInfoResponse>(await this.doRequest("CreateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new CreateAppInfoResponse({}));
  }

  async createAppInfo(request: CreateAppInfoRequest): Promise<CreateAppInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAppInfoWithOptions(request, runtime);
  }

  async getAppInfosWithOptions(request: GetAppInfosRequest, runtime: $Util.RuntimeOptions): Promise<GetAppInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAppInfosResponse>(await this.doRequest("GetAppInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAppInfosResponse({}));
  }

  async getAppInfos(request: GetAppInfosRequest): Promise<GetAppInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAppInfosWithOptions(request, runtime);
  }

  async updateAppInfoWithOptions(request: UpdateAppInfoRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAppInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAppInfoResponse>(await this.doRequest("UpdateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateAppInfoResponse({}));
  }

  async updateAppInfo(request: UpdateAppInfoRequest): Promise<UpdateAppInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAppInfoWithOptions(request, runtime);
  }

  async deleteAppInfoWithOptions(request: DeleteAppInfoRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAppInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAppInfoResponse>(await this.doRequest("DeleteAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteAppInfoResponse({}));
  }

  async deleteAppInfo(request: DeleteAppInfoRequest): Promise<DeleteAppInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAppInfoWithOptions(request, runtime);
  }

  async listAppInfoWithOptions(request: ListAppInfoRequest, runtime: $Util.RuntimeOptions): Promise<ListAppInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAppInfoResponse>(await this.doRequest("ListAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListAppInfoResponse({}));
  }

  async listAppInfo(request: ListAppInfoRequest): Promise<ListAppInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAppInfoWithOptions(request, runtime);
  }

  async moveAppResourceWithOptions(request: MoveAppResourceRequest, runtime: $Util.RuntimeOptions): Promise<MoveAppResourceResponse> {
    Util.validateModel(request);
    return $tea.cast<MoveAppResourceResponse>(await this.doRequest("MoveAppResource", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new MoveAppResourceResponse({}));
  }

  async moveAppResource(request: MoveAppResourceRequest): Promise<MoveAppResourceResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.moveAppResourceWithOptions(request, runtime);
  }

  async deleteMessageCallbackWithOptions(request: DeleteMessageCallbackRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMessageCallbackResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMessageCallbackResponse>(await this.doRequest("DeleteMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteMessageCallbackResponse({}));
  }

  async deleteMessageCallback(request: DeleteMessageCallbackRequest): Promise<DeleteMessageCallbackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMessageCallbackWithOptions(request, runtime);
  }

  async getTranscodeSummaryWithOptions(request: GetTranscodeSummaryRequest, runtime: $Util.RuntimeOptions): Promise<GetTranscodeSummaryResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTranscodeSummaryResponse>(await this.doRequest("GetTranscodeSummary", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetTranscodeSummaryResponse({}));
  }

  async getTranscodeSummary(request: GetTranscodeSummaryRequest): Promise<GetTranscodeSummaryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTranscodeSummaryWithOptions(request, runtime);
  }

  async listTranscodeTaskWithOptions(request: ListTranscodeTaskRequest, runtime: $Util.RuntimeOptions): Promise<ListTranscodeTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTranscodeTaskResponse>(await this.doRequest("ListTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListTranscodeTaskResponse({}));
  }

  async listTranscodeTask(request: ListTranscodeTaskRequest): Promise<ListTranscodeTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTranscodeTaskWithOptions(request, runtime);
  }

  async getTranscodeTaskWithOptions(request: GetTranscodeTaskRequest, runtime: $Util.RuntimeOptions): Promise<GetTranscodeTaskResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTranscodeTaskResponse>(await this.doRequest("GetTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetTranscodeTaskResponse({}));
  }

  async getTranscodeTask(request: GetTranscodeTaskRequest): Promise<GetTranscodeTaskResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTranscodeTaskWithOptions(request, runtime);
  }

  async getURLUploadInfosWithOptions(request: GetURLUploadInfosRequest, runtime: $Util.RuntimeOptions): Promise<GetURLUploadInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<GetURLUploadInfosResponse>(await this.doRequest("GetURLUploadInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetURLUploadInfosResponse({}));
  }

  async getURLUploadInfos(request: GetURLUploadInfosRequest): Promise<GetURLUploadInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getURLUploadInfosWithOptions(request, runtime);
  }

  async updateTranscodeTemplateGroupWithOptions(request: UpdateTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<UpdateTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateTranscodeTemplateGroupResponse>(await this.doRequest("UpdateTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateTranscodeTemplateGroupResponse({}));
  }

  async updateTranscodeTemplateGroup(request: UpdateTranscodeTemplateGroupRequest): Promise<UpdateTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async addTranscodeTemplateGroupWithOptions(request: AddTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<AddTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<AddTranscodeTemplateGroupResponse>(await this.doRequest("AddTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddTranscodeTemplateGroupResponse({}));
  }

  async addTranscodeTemplateGroup(request: AddTranscodeTemplateGroupRequest): Promise<AddTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async deleteTranscodeTemplateGroupWithOptions(request: DeleteTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<DeleteTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteTranscodeTemplateGroupResponse>(await this.doRequest("DeleteTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteTranscodeTemplateGroupResponse({}));
  }

  async deleteTranscodeTemplateGroup(request: DeleteTranscodeTemplateGroupRequest): Promise<DeleteTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async getTranscodeTemplateGroupWithOptions(request: GetTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<GetTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<GetTranscodeTemplateGroupResponse>(await this.doRequest("GetTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetTranscodeTemplateGroupResponse({}));
  }

  async getTranscodeTemplateGroup(request: GetTranscodeTemplateGroupRequest): Promise<GetTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async setDefaultTranscodeTemplateGroupWithOptions(request: SetDefaultTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<SetDefaultTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDefaultTranscodeTemplateGroupResponse>(await this.doRequest("SetDefaultTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetDefaultTranscodeTemplateGroupResponse({}));
  }

  async setDefaultTranscodeTemplateGroup(request: SetDefaultTranscodeTemplateGroupRequest): Promise<SetDefaultTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDefaultTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async listTranscodeTemplateGroupWithOptions(request: ListTranscodeTemplateGroupRequest, runtime: $Util.RuntimeOptions): Promise<ListTranscodeTemplateGroupResponse> {
    Util.validateModel(request);
    return $tea.cast<ListTranscodeTemplateGroupResponse>(await this.doRequest("ListTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListTranscodeTemplateGroupResponse({}));
  }

  async listTranscodeTemplateGroup(request: ListTranscodeTemplateGroupRequest): Promise<ListTranscodeTemplateGroupResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listTranscodeTemplateGroupWithOptions(request, runtime);
  }

  async getAIMediaAuditJobWithOptions(request: GetAIMediaAuditJobRequest, runtime: $Util.RuntimeOptions): Promise<GetAIMediaAuditJobResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAIMediaAuditJobResponse>(await this.doRequest("GetAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAIMediaAuditJobResponse({}));
  }

  async getAIMediaAuditJob(request: GetAIMediaAuditJobRequest): Promise<GetAIMediaAuditJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAIMediaAuditJobWithOptions(request, runtime);
  }

  async submitAIMediaAuditJobWithOptions(request: SubmitAIMediaAuditJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitAIMediaAuditJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitAIMediaAuditJobResponse>(await this.doRequest("SubmitAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitAIMediaAuditJobResponse({}));
  }

  async submitAIMediaAuditJob(request: SubmitAIMediaAuditJobRequest): Promise<SubmitAIMediaAuditJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitAIMediaAuditJobWithOptions(request, runtime);
  }

  async getMediaAuditResultWithOptions(request: GetMediaAuditResultRequest, runtime: $Util.RuntimeOptions): Promise<GetMediaAuditResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMediaAuditResultResponse>(await this.doRequest("GetMediaAuditResult", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMediaAuditResultResponse({}));
  }

  async getMediaAuditResult(request: GetMediaAuditResultRequest): Promise<GetMediaAuditResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMediaAuditResultWithOptions(request, runtime);
  }

  async getMediaAuditResultDetailWithOptions(request: GetMediaAuditResultDetailRequest, runtime: $Util.RuntimeOptions): Promise<GetMediaAuditResultDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMediaAuditResultDetailResponse>(await this.doRequest("GetMediaAuditResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMediaAuditResultDetailResponse({}));
  }

  async getMediaAuditResultDetail(request: GetMediaAuditResultDetailRequest): Promise<GetMediaAuditResultDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMediaAuditResultDetailWithOptions(request, runtime);
  }

  async getMediaAuditResultTimelineWithOptions(request: GetMediaAuditResultTimelineRequest, runtime: $Util.RuntimeOptions): Promise<GetMediaAuditResultTimelineResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMediaAuditResultTimelineResponse>(await this.doRequest("GetMediaAuditResultTimeline", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMediaAuditResultTimelineResponse({}));
  }

  async getMediaAuditResultTimeline(request: GetMediaAuditResultTimelineRequest): Promise<GetMediaAuditResultTimelineResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMediaAuditResultTimelineWithOptions(request, runtime);
  }

  async addAITemplateWithOptions(request: AddAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<AddAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<AddAITemplateResponse>(await this.doRequest("AddAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddAITemplateResponse({}));
  }

  async addAITemplate(request: AddAITemplateRequest): Promise<AddAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addAITemplateWithOptions(request, runtime);
  }

  async deleteAITemplateWithOptions(request: DeleteAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<DeleteAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteAITemplateResponse>(await this.doRequest("DeleteAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteAITemplateResponse({}));
  }

  async deleteAITemplate(request: DeleteAITemplateRequest): Promise<DeleteAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteAITemplateWithOptions(request, runtime);
  }

  async updateAITemplateWithOptions(request: UpdateAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<UpdateAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateAITemplateResponse>(await this.doRequest("UpdateAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateAITemplateResponse({}));
  }

  async updateAITemplate(request: UpdateAITemplateRequest): Promise<UpdateAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateAITemplateWithOptions(request, runtime);
  }

  async getAITemplateWithOptions(request: GetAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<GetAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAITemplateResponse>(await this.doRequest("GetAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAITemplateResponse({}));
  }

  async getAITemplate(request: GetAITemplateRequest): Promise<GetAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAITemplateWithOptions(request, runtime);
  }

  async listAITemplateWithOptions(request: ListAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<ListAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAITemplateResponse>(await this.doRequest("ListAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListAITemplateResponse({}));
  }

  async listAITemplate(request: ListAITemplateRequest): Promise<ListAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAITemplateWithOptions(request, runtime);
  }

  async getDefaultAITemplateWithOptions(request: GetDefaultAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<GetDefaultAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<GetDefaultAITemplateResponse>(await this.doRequest("GetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetDefaultAITemplateResponse({}));
  }

  async getDefaultAITemplate(request: GetDefaultAITemplateRequest): Promise<GetDefaultAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getDefaultAITemplateWithOptions(request, runtime);
  }

  async setDefaultAITemplateWithOptions(request: SetDefaultAITemplateRequest, runtime: $Util.RuntimeOptions): Promise<SetDefaultAITemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDefaultAITemplateResponse>(await this.doRequest("SetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetDefaultAITemplateResponse({}));
  }

  async setDefaultAITemplate(request: SetDefaultAITemplateRequest): Promise<SetDefaultAITemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDefaultAITemplateWithOptions(request, runtime);
  }

  async describeVodDomainLogWithOptions(request: DescribeVodDomainLogRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainLogResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainLogResponse>(await this.doRequest("DescribeVodDomainLog", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodDomainLogResponse({}));
  }

  async describeVodDomainLog(request: DescribeVodDomainLogRequest): Promise<DescribeVodDomainLogResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainLogWithOptions(request, runtime);
  }

  async describeVodDomainCertificateInfoWithOptions(request: DescribeVodDomainCertificateInfoRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainCertificateInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainCertificateInfoResponse>(await this.doRequest("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodDomainCertificateInfoResponse({}));
  }

  async describeVodDomainCertificateInfo(request: DescribeVodDomainCertificateInfoRequest): Promise<DescribeVodDomainCertificateInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainCertificateInfoWithOptions(request, runtime);
  }

  async describeVodDomainTrafficDataWithOptions(request: DescribeVodDomainTrafficDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainTrafficDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainTrafficDataResponse>(await this.doRequest("DescribeVodDomainTrafficData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodDomainTrafficDataResponse({}));
  }

  async describeVodDomainTrafficData(request: DescribeVodDomainTrafficDataRequest): Promise<DescribeVodDomainTrafficDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainTrafficDataWithOptions(request, runtime);
  }

  async describeVodDomainBpsDataWithOptions(request: DescribeVodDomainBpsDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainBpsDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainBpsDataResponse>(await this.doRequest("DescribeVodDomainBpsData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodDomainBpsDataResponse({}));
  }

  async describeVodDomainBpsData(request: DescribeVodDomainBpsDataRequest): Promise<DescribeVodDomainBpsDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainBpsDataWithOptions(request, runtime);
  }

  async describeVodDomainUsageDataWithOptions(request: DescribeVodDomainUsageDataRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainUsageDataResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainUsageDataResponse>(await this.doRequest("DescribeVodDomainUsageData", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribeVodDomainUsageDataResponse({}));
  }

  async describeVodDomainUsageData(request: DescribeVodDomainUsageDataRequest): Promise<DescribeVodDomainUsageDataResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainUsageDataWithOptions(request, runtime);
  }

  async describeVodCertificateListWithOptions(request: DescribeVodCertificateListRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodCertificateListResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodCertificateListResponse>(await this.doRequest("DescribeVodCertificateList", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodCertificateListResponse({}));
  }

  async describeVodCertificateList(request: DescribeVodCertificateListRequest): Promise<DescribeVodCertificateListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodCertificateListWithOptions(request, runtime);
  }

  async batchStopVodDomainWithOptions(request: BatchStopVodDomainRequest, runtime: $Util.RuntimeOptions): Promise<BatchStopVodDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<BatchStopVodDomainResponse>(await this.doRequest("BatchStopVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new BatchStopVodDomainResponse({}));
  }

  async batchStopVodDomain(request: BatchStopVodDomainRequest): Promise<BatchStopVodDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchStopVodDomainWithOptions(request, runtime);
  }

  async deleteVodDomainWithOptions(request: DeleteVodDomainRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVodDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVodDomainResponse>(await this.doRequest("DeleteVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteVodDomainResponse({}));
  }

  async deleteVodDomain(request: DeleteVodDomainRequest): Promise<DeleteVodDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVodDomainWithOptions(request, runtime);
  }

  async setVodDomainCertificateWithOptions(request: SetVodDomainCertificateRequest, runtime: $Util.RuntimeOptions): Promise<SetVodDomainCertificateResponse> {
    Util.validateModel(request);
    return $tea.cast<SetVodDomainCertificateResponse>(await this.doRequest("SetVodDomainCertificate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetVodDomainCertificateResponse({}));
  }

  async setVodDomainCertificate(request: SetVodDomainCertificateRequest): Promise<SetVodDomainCertificateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setVodDomainCertificateWithOptions(request, runtime);
  }

  async deleteVodSpecificConfigWithOptions(request: DeleteVodSpecificConfigRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVodSpecificConfigResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVodSpecificConfigResponse>(await this.doRequest("DeleteVodSpecificConfig", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteVodSpecificConfigResponse({}));
  }

  async deleteVodSpecificConfig(request: DeleteVodSpecificConfigRequest): Promise<DeleteVodSpecificConfigResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVodSpecificConfigWithOptions(request, runtime);
  }

  async batchSetVodDomainConfigsWithOptions(request: BatchSetVodDomainConfigsRequest, runtime: $Util.RuntimeOptions): Promise<BatchSetVodDomainConfigsResponse> {
    Util.validateModel(request);
    return $tea.cast<BatchSetVodDomainConfigsResponse>(await this.doRequest("BatchSetVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new BatchSetVodDomainConfigsResponse({}));
  }

  async batchSetVodDomainConfigs(request: BatchSetVodDomainConfigsRequest): Promise<BatchSetVodDomainConfigsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchSetVodDomainConfigsWithOptions(request, runtime);
  }

  async addVodDomainWithOptions(request: AddVodDomainRequest, runtime: $Util.RuntimeOptions): Promise<AddVodDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<AddVodDomainResponse>(await this.doRequest("AddVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddVodDomainResponse({}));
  }

  async addVodDomain(request: AddVodDomainRequest): Promise<AddVodDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addVodDomainWithOptions(request, runtime);
  }

  async describeVodRefreshQuotaWithOptions(request: DescribeVodRefreshQuotaRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodRefreshQuotaResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodRefreshQuotaResponse>(await this.doRequest("DescribeVodRefreshQuota", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodRefreshQuotaResponse({}));
  }

  async describeVodRefreshQuota(request: DescribeVodRefreshQuotaRequest): Promise<DescribeVodRefreshQuotaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodRefreshQuotaWithOptions(request, runtime);
  }

  async describeVodRefreshTasksWithOptions(request: DescribeVodRefreshTasksRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodRefreshTasksResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodRefreshTasksResponse>(await this.doRequest("DescribeVodRefreshTasks", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodRefreshTasksResponse({}));
  }

  async describeVodRefreshTasks(request: DescribeVodRefreshTasksRequest): Promise<DescribeVodRefreshTasksResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodRefreshTasksWithOptions(request, runtime);
  }

  async describeVodDomainConfigsWithOptions(request: DescribeVodDomainConfigsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainConfigsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainConfigsResponse>(await this.doRequest("DescribeVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodDomainConfigsResponse({}));
  }

  async describeVodDomainConfigs(request: DescribeVodDomainConfigsRequest): Promise<DescribeVodDomainConfigsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainConfigsWithOptions(request, runtime);
  }

  async describeVodUserDomainsWithOptions(request: DescribeVodUserDomainsRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodUserDomainsResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodUserDomainsResponse>(await this.doRequest("DescribeVodUserDomains", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodUserDomainsResponse({}));
  }

  async describeVodUserDomains(request: DescribeVodUserDomainsRequest): Promise<DescribeVodUserDomainsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodUserDomainsWithOptions(request, runtime);
  }

  async updateVodDomainWithOptions(request: UpdateVodDomainRequest, runtime: $Util.RuntimeOptions): Promise<UpdateVodDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateVodDomainResponse>(await this.doRequest("UpdateVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateVodDomainResponse({}));
  }

  async updateVodDomain(request: UpdateVodDomainRequest): Promise<UpdateVodDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateVodDomainWithOptions(request, runtime);
  }

  async refreshVodObjectCachesWithOptions(request: RefreshVodObjectCachesRequest, runtime: $Util.RuntimeOptions): Promise<RefreshVodObjectCachesResponse> {
    Util.validateModel(request);
    return $tea.cast<RefreshVodObjectCachesResponse>(await this.doRequest("RefreshVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new RefreshVodObjectCachesResponse({}));
  }

  async refreshVodObjectCaches(request: RefreshVodObjectCachesRequest): Promise<RefreshVodObjectCachesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.refreshVodObjectCachesWithOptions(request, runtime);
  }

  async preloadVodObjectCachesWithOptions(request: PreloadVodObjectCachesRequest, runtime: $Util.RuntimeOptions): Promise<PreloadVodObjectCachesResponse> {
    Util.validateModel(request);
    return $tea.cast<PreloadVodObjectCachesResponse>(await this.doRequest("PreloadVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new PreloadVodObjectCachesResponse({}));
  }

  async preloadVodObjectCaches(request: PreloadVodObjectCachesRequest): Promise<PreloadVodObjectCachesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.preloadVodObjectCachesWithOptions(request, runtime);
  }

  async batchStartVodDomainWithOptions(request: BatchStartVodDomainRequest, runtime: $Util.RuntimeOptions): Promise<BatchStartVodDomainResponse> {
    Util.validateModel(request);
    return $tea.cast<BatchStartVodDomainResponse>(await this.doRequest("BatchStartVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new BatchStartVodDomainResponse({}));
  }

  async batchStartVodDomain(request: BatchStartVodDomainRequest): Promise<BatchStartVodDomainResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.batchStartVodDomainWithOptions(request, runtime);
  }

  async describeVodDomainDetailWithOptions(request: DescribeVodDomainDetailRequest, runtime: $Util.RuntimeOptions): Promise<DescribeVodDomainDetailResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribeVodDomainDetailResponse>(await this.doRequest("DescribeVodDomainDetail", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DescribeVodDomainDetailResponse({}));
  }

  async describeVodDomainDetail(request: DescribeVodDomainDetailRequest): Promise<DescribeVodDomainDetailResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describeVodDomainDetailWithOptions(request, runtime);
  }

  async deleteVodTemplateWithOptions(request: DeleteVodTemplateRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVodTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVodTemplateResponse>(await this.doRequest("DeleteVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteVodTemplateResponse({}));
  }

  async deleteVodTemplate(request: DeleteVodTemplateRequest): Promise<DeleteVodTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVodTemplateWithOptions(request, runtime);
  }

  async getVodTemplateWithOptions(request: GetVodTemplateRequest, runtime: $Util.RuntimeOptions): Promise<GetVodTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<GetVodTemplateResponse>(await this.doRequest("GetVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetVodTemplateResponse({}));
  }

  async getVodTemplate(request: GetVodTemplateRequest): Promise<GetVodTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getVodTemplateWithOptions(request, runtime);
  }

  async listVodTemplateWithOptions(request: ListVodTemplateRequest, runtime: $Util.RuntimeOptions): Promise<ListVodTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<ListVodTemplateResponse>(await this.doRequest("ListVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListVodTemplateResponse({}));
  }

  async listVodTemplate(request: ListVodTemplateRequest): Promise<ListVodTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listVodTemplateWithOptions(request, runtime);
  }

  async updateVodTemplateWithOptions(request: UpdateVodTemplateRequest, runtime: $Util.RuntimeOptions): Promise<UpdateVodTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateVodTemplateResponse>(await this.doRequest("UpdateVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateVodTemplateResponse({}));
  }

  async updateVodTemplate(request: UpdateVodTemplateRequest): Promise<UpdateVodTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateVodTemplateWithOptions(request, runtime);
  }

  async addVodTemplateWithOptions(request: AddVodTemplateRequest, runtime: $Util.RuntimeOptions): Promise<AddVodTemplateResponse> {
    Util.validateModel(request);
    return $tea.cast<AddVodTemplateResponse>(await this.doRequest("AddVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddVodTemplateResponse({}));
  }

  async addVodTemplate(request: AddVodTemplateRequest): Promise<AddVodTemplateResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addVodTemplateWithOptions(request, runtime);
  }

  async createUploadAttachedMediaWithOptions(request: CreateUploadAttachedMediaRequest, runtime: $Util.RuntimeOptions): Promise<CreateUploadAttachedMediaResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateUploadAttachedMediaResponse>(await this.doRequest("CreateUploadAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new CreateUploadAttachedMediaResponse({}));
  }

  async createUploadAttachedMedia(request: CreateUploadAttachedMediaRequest): Promise<CreateUploadAttachedMediaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createUploadAttachedMediaWithOptions(request, runtime);
  }

  async registerMediaWithOptions(request: RegisterMediaRequest, runtime: $Util.RuntimeOptions): Promise<RegisterMediaResponse> {
    Util.validateModel(request);
    return $tea.cast<RegisterMediaResponse>(await this.doRequest("RegisterMedia", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new RegisterMediaResponse({}));
  }

  async registerMedia(request: RegisterMediaRequest): Promise<RegisterMediaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.registerMediaWithOptions(request, runtime);
  }

  async deleteWatermarkWithOptions(request: DeleteWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<DeleteWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteWatermarkResponse>(await this.doRequest("DeleteWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteWatermarkResponse({}));
  }

  async deleteWatermark(request: DeleteWatermarkRequest): Promise<DeleteWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteWatermarkWithOptions(request, runtime);
  }

  async getWatermarkWithOptions(request: GetWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<GetWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<GetWatermarkResponse>(await this.doRequest("GetWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetWatermarkResponse({}));
  }

  async getWatermark(request: GetWatermarkRequest): Promise<GetWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getWatermarkWithOptions(request, runtime);
  }

  async setDefaultWatermarkWithOptions(request: SetDefaultWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<SetDefaultWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<SetDefaultWatermarkResponse>(await this.doRequest("SetDefaultWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetDefaultWatermarkResponse({}));
  }

  async setDefaultWatermark(request: SetDefaultWatermarkRequest): Promise<SetDefaultWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setDefaultWatermarkWithOptions(request, runtime);
  }

  async listWatermarkWithOptions(request: ListWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<ListWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<ListWatermarkResponse>(await this.doRequest("ListWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListWatermarkResponse({}));
  }

  async listWatermark(request: ListWatermarkRequest): Promise<ListWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listWatermarkWithOptions(request, runtime);
  }

  async updateWatermarkWithOptions(request: UpdateWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<UpdateWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateWatermarkResponse>(await this.doRequest("UpdateWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateWatermarkResponse({}));
  }

  async updateWatermark(request: UpdateWatermarkRequest): Promise<UpdateWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateWatermarkWithOptions(request, runtime);
  }

  async addWatermarkWithOptions(request: AddWatermarkRequest, runtime: $Util.RuntimeOptions): Promise<AddWatermarkResponse> {
    Util.validateModel(request);
    return $tea.cast<AddWatermarkResponse>(await this.doRequest("AddWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddWatermarkResponse({}));
  }

  async addWatermark(request: AddWatermarkRequest): Promise<AddWatermarkResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addWatermarkWithOptions(request, runtime);
  }

  async getMediaDNAResultWithOptions(request: GetMediaDNAResultRequest, runtime: $Util.RuntimeOptions): Promise<GetMediaDNAResultResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMediaDNAResultResponse>(await this.doRequest("GetMediaDNAResult", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMediaDNAResultResponse({}));
  }

  async getMediaDNAResult(request: GetMediaDNAResultRequest): Promise<GetMediaDNAResultResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMediaDNAResultWithOptions(request, runtime);
  }

  async deleteMezzaninesWithOptions(request: DeleteMezzaninesRequest, runtime: $Util.RuntimeOptions): Promise<DeleteMezzaninesResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteMezzaninesResponse>(await this.doRequest("DeleteMezzanines", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteMezzaninesResponse({}));
  }

  async deleteMezzanines(request: DeleteMezzaninesRequest): Promise<DeleteMezzaninesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteMezzaninesWithOptions(request, runtime);
  }

  async updateImageInfosWithOptions(request: UpdateImageInfosRequest, runtime: $Util.RuntimeOptions): Promise<UpdateImageInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateImageInfosResponse>(await this.doRequest("UpdateImageInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateImageInfosResponse({}));
  }

  async updateImageInfos(request: UpdateImageInfosRequest): Promise<UpdateImageInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateImageInfosWithOptions(request, runtime);
  }

  async deleteImageWithOptions(request: DeleteImageRequest, runtime: $Util.RuntimeOptions): Promise<DeleteImageResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteImageResponse>(await this.doRequest("DeleteImage", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteImageResponse({}));
  }

  async deleteImage(request: DeleteImageRequest): Promise<DeleteImageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteImageWithOptions(request, runtime);
  }

  async listAuditSecurityIpWithOptions(request: ListAuditSecurityIpRequest, runtime: $Util.RuntimeOptions): Promise<ListAuditSecurityIpResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAuditSecurityIpResponse>(await this.doRequest("ListAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListAuditSecurityIpResponse({}));
  }

  async listAuditSecurityIp(request: ListAuditSecurityIpRequest): Promise<ListAuditSecurityIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAuditSecurityIpWithOptions(request, runtime);
  }

  async setAuditSecurityIpWithOptions(request: SetAuditSecurityIpRequest, runtime: $Util.RuntimeOptions): Promise<SetAuditSecurityIpResponse> {
    Util.validateModel(request);
    return $tea.cast<SetAuditSecurityIpResponse>(await this.doRequest("SetAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetAuditSecurityIpResponse({}));
  }

  async setAuditSecurityIp(request: SetAuditSecurityIpRequest): Promise<SetAuditSecurityIpResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setAuditSecurityIpWithOptions(request, runtime);
  }

  async uploadMediaByURLWithOptions(request: UploadMediaByURLRequest, runtime: $Util.RuntimeOptions): Promise<UploadMediaByURLResponse> {
    Util.validateModel(request);
    return $tea.cast<UploadMediaByURLResponse>(await this.doRequest("UploadMediaByURL", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UploadMediaByURLResponse({}));
  }

  async uploadMediaByURL(request: UploadMediaByURLRequest): Promise<UploadMediaByURLResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.uploadMediaByURLWithOptions(request, runtime);
  }

  async updateVideoInfosWithOptions(request: UpdateVideoInfosRequest, runtime: $Util.RuntimeOptions): Promise<UpdateVideoInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateVideoInfosResponse>(await this.doRequest("UpdateVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateVideoInfosResponse({}));
  }

  async updateVideoInfos(request: UpdateVideoInfosRequest): Promise<UpdateVideoInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateVideoInfosWithOptions(request, runtime);
  }

  async searchMediaWithOptions(request: SearchMediaRequest, runtime: $Util.RuntimeOptions): Promise<SearchMediaResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchMediaResponse>(await this.doRequest("SearchMedia", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SearchMediaResponse({}));
  }

  async searchMedia(request: SearchMediaRequest): Promise<SearchMediaResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchMediaWithOptions(request, runtime);
  }

  async getVideoInfosWithOptions(request: GetVideoInfosRequest, runtime: $Util.RuntimeOptions): Promise<GetVideoInfosResponse> {
    Util.validateModel(request);
    return $tea.cast<GetVideoInfosResponse>(await this.doRequest("GetVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetVideoInfosResponse({}));
  }

  async getVideoInfos(request: GetVideoInfosRequest): Promise<GetVideoInfosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getVideoInfosWithOptions(request, runtime);
  }

  async submitPreprocessJobsWithOptions(request: SubmitPreprocessJobsRequest, runtime: $Util.RuntimeOptions): Promise<SubmitPreprocessJobsResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitPreprocessJobsResponse>(await this.doRequest("SubmitPreprocessJobs", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitPreprocessJobsResponse({}));
  }

  async submitPreprocessJobs(request: SubmitPreprocessJobsRequest): Promise<SubmitPreprocessJobsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitPreprocessJobsWithOptions(request, runtime);
  }

  async describePlayVideoStatisWithOptions(request: DescribePlayVideoStatisRequest, runtime: $Util.RuntimeOptions): Promise<DescribePlayVideoStatisResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePlayVideoStatisResponse>(await this.doRequest("DescribePlayVideoStatis", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribePlayVideoStatisResponse({}));
  }

  async describePlayVideoStatis(request: DescribePlayVideoStatisRequest): Promise<DescribePlayVideoStatisResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePlayVideoStatisWithOptions(request, runtime);
  }

  async describePlayUserTotalWithOptions(request: DescribePlayUserTotalRequest, runtime: $Util.RuntimeOptions): Promise<DescribePlayUserTotalResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePlayUserTotalResponse>(await this.doRequest("DescribePlayUserTotal", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribePlayUserTotalResponse({}));
  }

  async describePlayUserTotal(request: DescribePlayUserTotalRequest): Promise<DescribePlayUserTotalResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePlayUserTotalWithOptions(request, runtime);
  }

  async describePlayUserAvgWithOptions(request: DescribePlayUserAvgRequest, runtime: $Util.RuntimeOptions): Promise<DescribePlayUserAvgResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePlayUserAvgResponse>(await this.doRequest("DescribePlayUserAvg", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribePlayUserAvgResponse({}));
  }

  async describePlayUserAvg(request: DescribePlayUserAvgRequest): Promise<DescribePlayUserAvgResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePlayUserAvgWithOptions(request, runtime);
  }

  async describePlayTopVideosWithOptions(request: DescribePlayTopVideosRequest, runtime: $Util.RuntimeOptions): Promise<DescribePlayTopVideosResponse> {
    Util.validateModel(request);
    return $tea.cast<DescribePlayTopVideosResponse>(await this.doRequest("DescribePlayTopVideos", "HTTPS", "POST", "2017-03-21", "AK", $tea.toMap(request), null, runtime), new DescribePlayTopVideosResponse({}));
  }

  async describePlayTopVideos(request: DescribePlayTopVideosRequest): Promise<DescribePlayTopVideosResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.describePlayTopVideosWithOptions(request, runtime);
  }

  async listSnapshotsWithOptions(request: ListSnapshotsRequest, runtime: $Util.RuntimeOptions): Promise<ListSnapshotsResponse> {
    Util.validateModel(request);
    return $tea.cast<ListSnapshotsResponse>(await this.doRequest("ListSnapshots", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListSnapshotsResponse({}));
  }

  async listSnapshots(request: ListSnapshotsRequest): Promise<ListSnapshotsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listSnapshotsWithOptions(request, runtime);
  }

  async submitTranscodeJobsWithOptions(request: SubmitTranscodeJobsRequest, runtime: $Util.RuntimeOptions): Promise<SubmitTranscodeJobsResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitTranscodeJobsResponse>(await this.doRequest("SubmitTranscodeJobs", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitTranscodeJobsResponse({}));
  }

  async submitTranscodeJobs(request: SubmitTranscodeJobsRequest): Promise<SubmitTranscodeJobsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitTranscodeJobsWithOptions(request, runtime);
  }

  async listLiveRecordVideoWithOptions(request: ListLiveRecordVideoRequest, runtime: $Util.RuntimeOptions): Promise<ListLiveRecordVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<ListLiveRecordVideoResponse>(await this.doRequest("ListLiveRecordVideo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListLiveRecordVideoResponse({}));
  }

  async listLiveRecordVideo(request: ListLiveRecordVideoRequest): Promise<ListLiveRecordVideoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listLiveRecordVideoWithOptions(request, runtime);
  }

  async createAuditWithOptions(request: CreateAuditRequest, runtime: $Util.RuntimeOptions): Promise<CreateAuditResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateAuditResponse>(await this.doRequest("CreateAudit", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new CreateAuditResponse({}));
  }

  async createAudit(request: CreateAuditRequest): Promise<CreateAuditResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createAuditWithOptions(request, runtime);
  }

  async getAuditHistoryWithOptions(request: GetAuditHistoryRequest, runtime: $Util.RuntimeOptions): Promise<GetAuditHistoryResponse> {
    Util.validateModel(request);
    return $tea.cast<GetAuditHistoryResponse>(await this.doRequest("GetAuditHistory", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetAuditHistoryResponse({}));
  }

  async getAuditHistory(request: GetAuditHistoryRequest): Promise<GetAuditHistoryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getAuditHistoryWithOptions(request, runtime);
  }

  async listAIJobWithOptions(request: ListAIJobRequest, runtime: $Util.RuntimeOptions): Promise<ListAIJobResponse> {
    Util.validateModel(request);
    return $tea.cast<ListAIJobResponse>(await this.doRequest("ListAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ListAIJobResponse({}));
  }

  async listAIJob(request: ListAIJobRequest): Promise<ListAIJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.listAIJobWithOptions(request, runtime);
  }

  async submitAIJobWithOptions(request: SubmitAIJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitAIJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitAIJobResponse>(await this.doRequest("SubmitAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitAIJobResponse({}));
  }

  async submitAIJob(request: SubmitAIJobRequest): Promise<SubmitAIJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitAIJobWithOptions(request, runtime);
  }

  async getImageInfoWithOptions(request: GetImageInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetImageInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetImageInfoResponse>(await this.doRequest("GetImageInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetImageInfoResponse({}));
  }

  async getImageInfo(request: GetImageInfoRequest): Promise<GetImageInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getImageInfoWithOptions(request, runtime);
  }

  async deleteStreamWithOptions(request: DeleteStreamRequest, runtime: $Util.RuntimeOptions): Promise<DeleteStreamResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteStreamResponse>(await this.doRequest("DeleteStream", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteStreamResponse({}));
  }

  async deleteStream(request: DeleteStreamRequest): Promise<DeleteStreamResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteStreamWithOptions(request, runtime);
  }

  async submitSnapshotJobWithOptions(request: SubmitSnapshotJobRequest, runtime: $Util.RuntimeOptions): Promise<SubmitSnapshotJobResponse> {
    Util.validateModel(request);
    return $tea.cast<SubmitSnapshotJobResponse>(await this.doRequest("SubmitSnapshotJob", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SubmitSnapshotJobResponse({}));
  }

  async submitSnapshotJob(request: SubmitSnapshotJobRequest): Promise<SubmitSnapshotJobResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.submitSnapshotJobWithOptions(request, runtime);
  }

  async updateEditingProjectWithOptions(request: UpdateEditingProjectRequest, runtime: $Util.RuntimeOptions): Promise<UpdateEditingProjectResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateEditingProjectResponse>(await this.doRequest("UpdateEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateEditingProjectResponse({}));
  }

  async updateEditingProject(request: UpdateEditingProjectRequest): Promise<UpdateEditingProjectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateEditingProjectWithOptions(request, runtime);
  }

  async setEditingProjectMaterialsWithOptions(request: SetEditingProjectMaterialsRequest, runtime: $Util.RuntimeOptions): Promise<SetEditingProjectMaterialsResponse> {
    Util.validateModel(request);
    return $tea.cast<SetEditingProjectMaterialsResponse>(await this.doRequest("SetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetEditingProjectMaterialsResponse({}));
  }

  async setEditingProjectMaterials(request: SetEditingProjectMaterialsRequest): Promise<SetEditingProjectMaterialsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setEditingProjectMaterialsWithOptions(request, runtime);
  }

  async searchEditingProjectWithOptions(request: SearchEditingProjectRequest, runtime: $Util.RuntimeOptions): Promise<SearchEditingProjectResponse> {
    Util.validateModel(request);
    return $tea.cast<SearchEditingProjectResponse>(await this.doRequest("SearchEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SearchEditingProjectResponse({}));
  }

  async searchEditingProject(request: SearchEditingProjectRequest): Promise<SearchEditingProjectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.searchEditingProjectWithOptions(request, runtime);
  }

  async produceEditingProjectVideoWithOptions(request: ProduceEditingProjectVideoRequest, runtime: $Util.RuntimeOptions): Promise<ProduceEditingProjectVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<ProduceEditingProjectVideoResponse>(await this.doRequest("ProduceEditingProjectVideo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new ProduceEditingProjectVideoResponse({}));
  }

  async produceEditingProjectVideo(request: ProduceEditingProjectVideoRequest): Promise<ProduceEditingProjectVideoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.produceEditingProjectVideoWithOptions(request, runtime);
  }

  async getEditingProjectMaterialsWithOptions(request: GetEditingProjectMaterialsRequest, runtime: $Util.RuntimeOptions): Promise<GetEditingProjectMaterialsResponse> {
    Util.validateModel(request);
    return $tea.cast<GetEditingProjectMaterialsResponse>(await this.doRequest("GetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetEditingProjectMaterialsResponse({}));
  }

  async getEditingProjectMaterials(request: GetEditingProjectMaterialsRequest): Promise<GetEditingProjectMaterialsResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getEditingProjectMaterialsWithOptions(request, runtime);
  }

  async getEditingProjectWithOptions(request: GetEditingProjectRequest, runtime: $Util.RuntimeOptions): Promise<GetEditingProjectResponse> {
    Util.validateModel(request);
    return $tea.cast<GetEditingProjectResponse>(await this.doRequest("GetEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetEditingProjectResponse({}));
  }

  async getEditingProject(request: GetEditingProjectRequest): Promise<GetEditingProjectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getEditingProjectWithOptions(request, runtime);
  }

  async deleteEditingProjectWithOptions(request: DeleteEditingProjectRequest, runtime: $Util.RuntimeOptions): Promise<DeleteEditingProjectResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteEditingProjectResponse>(await this.doRequest("DeleteEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteEditingProjectResponse({}));
  }

  async deleteEditingProject(request: DeleteEditingProjectRequest): Promise<DeleteEditingProjectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteEditingProjectWithOptions(request, runtime);
  }

  async addEditingProjectWithOptions(request: AddEditingProjectRequest, runtime: $Util.RuntimeOptions): Promise<AddEditingProjectResponse> {
    Util.validateModel(request);
    return $tea.cast<AddEditingProjectResponse>(await this.doRequest("AddEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddEditingProjectResponse({}));
  }

  async addEditingProject(request: AddEditingProjectRequest): Promise<AddEditingProjectResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addEditingProjectWithOptions(request, runtime);
  }

  async getMezzanineInfoWithOptions(request: GetMezzanineInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetMezzanineInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMezzanineInfoResponse>(await this.doRequest("GetMezzanineInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMezzanineInfoResponse({}));
  }

  async getMezzanineInfo(request: GetMezzanineInfoRequest): Promise<GetMezzanineInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMezzanineInfoWithOptions(request, runtime);
  }

  async updateCategoryWithOptions(request: UpdateCategoryRequest, runtime: $Util.RuntimeOptions): Promise<UpdateCategoryResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateCategoryResponse>(await this.doRequest("UpdateCategory", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateCategoryResponse({}));
  }

  async updateCategory(request: UpdateCategoryRequest): Promise<UpdateCategoryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateCategoryWithOptions(request, runtime);
  }

  async getCategoriesWithOptions(request: GetCategoriesRequest, runtime: $Util.RuntimeOptions): Promise<GetCategoriesResponse> {
    Util.validateModel(request);
    return $tea.cast<GetCategoriesResponse>(await this.doRequest("GetCategories", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetCategoriesResponse({}));
  }

  async getCategories(request: GetCategoriesRequest): Promise<GetCategoriesResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getCategoriesWithOptions(request, runtime);
  }

  async deleteCategoryWithOptions(request: DeleteCategoryRequest, runtime: $Util.RuntimeOptions): Promise<DeleteCategoryResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteCategoryResponse>(await this.doRequest("DeleteCategory", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteCategoryResponse({}));
  }

  async deleteCategory(request: DeleteCategoryRequest): Promise<DeleteCategoryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteCategoryWithOptions(request, runtime);
  }

  async addCategoryWithOptions(request: AddCategoryRequest, runtime: $Util.RuntimeOptions): Promise<AddCategoryResponse> {
    Util.validateModel(request);
    return $tea.cast<AddCategoryResponse>(await this.doRequest("AddCategory", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new AddCategoryResponse({}));
  }

  async addCategory(request: AddCategoryRequest): Promise<AddCategoryResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.addCategoryWithOptions(request, runtime);
  }

  async getPlayInfoWithOptions(request: GetPlayInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetPlayInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetPlayInfoResponse>(await this.doRequest("GetPlayInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetPlayInfoResponse({}));
  }

  async getPlayInfo(request: GetPlayInfoRequest): Promise<GetPlayInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getPlayInfoWithOptions(request, runtime);
  }

  async createUploadImageWithOptions(request: CreateUploadImageRequest, runtime: $Util.RuntimeOptions): Promise<CreateUploadImageResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateUploadImageResponse>(await this.doRequest("CreateUploadImage", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new CreateUploadImageResponse({}));
  }

  async createUploadImage(request: CreateUploadImageRequest): Promise<CreateUploadImageResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createUploadImageWithOptions(request, runtime);
  }

  async setMessageCallbackWithOptions(request: SetMessageCallbackRequest, runtime: $Util.RuntimeOptions): Promise<SetMessageCallbackResponse> {
    Util.validateModel(request);
    return $tea.cast<SetMessageCallbackResponse>(await this.doRequest("SetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new SetMessageCallbackResponse({}));
  }

  async setMessageCallback(request: SetMessageCallbackRequest): Promise<SetMessageCallbackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.setMessageCallbackWithOptions(request, runtime);
  }

  async getMessageCallbackWithOptions(request: GetMessageCallbackRequest, runtime: $Util.RuntimeOptions): Promise<GetMessageCallbackResponse> {
    Util.validateModel(request);
    return $tea.cast<GetMessageCallbackResponse>(await this.doRequest("GetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetMessageCallbackResponse({}));
  }

  async getMessageCallback(request: GetMessageCallbackRequest): Promise<GetMessageCallbackResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getMessageCallbackWithOptions(request, runtime);
  }

  async updateVideoInfoWithOptions(request: UpdateVideoInfoRequest, runtime: $Util.RuntimeOptions): Promise<UpdateVideoInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<UpdateVideoInfoResponse>(await this.doRequest("UpdateVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new UpdateVideoInfoResponse({}));
  }

  async updateVideoInfo(request: UpdateVideoInfoRequest): Promise<UpdateVideoInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.updateVideoInfoWithOptions(request, runtime);
  }

  async getVideoPlayAuthWithOptions(request: GetVideoPlayAuthRequest, runtime: $Util.RuntimeOptions): Promise<GetVideoPlayAuthResponse> {
    Util.validateModel(request);
    return $tea.cast<GetVideoPlayAuthResponse>(await this.doRequest("GetVideoPlayAuth", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetVideoPlayAuthResponse({}));
  }

  async getVideoPlayAuth(request: GetVideoPlayAuthRequest): Promise<GetVideoPlayAuthResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getVideoPlayAuthWithOptions(request, runtime);
  }

  async getVideoListWithOptions(request: GetVideoListRequest, runtime: $Util.RuntimeOptions): Promise<GetVideoListResponse> {
    Util.validateModel(request);
    return $tea.cast<GetVideoListResponse>(await this.doRequest("GetVideoList", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetVideoListResponse({}));
  }

  async getVideoList(request: GetVideoListRequest): Promise<GetVideoListResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getVideoListWithOptions(request, runtime);
  }

  async getVideoInfoWithOptions(request: GetVideoInfoRequest, runtime: $Util.RuntimeOptions): Promise<GetVideoInfoResponse> {
    Util.validateModel(request);
    return $tea.cast<GetVideoInfoResponse>(await this.doRequest("GetVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new GetVideoInfoResponse({}));
  }

  async getVideoInfo(request: GetVideoInfoRequest): Promise<GetVideoInfoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.getVideoInfoWithOptions(request, runtime);
  }

  async deleteVideoWithOptions(request: DeleteVideoRequest, runtime: $Util.RuntimeOptions): Promise<DeleteVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<DeleteVideoResponse>(await this.doRequest("DeleteVideo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new DeleteVideoResponse({}));
  }

  async deleteVideo(request: DeleteVideoRequest): Promise<DeleteVideoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.deleteVideoWithOptions(request, runtime);
  }

  async refreshUploadVideoWithOptions(request: RefreshUploadVideoRequest, runtime: $Util.RuntimeOptions): Promise<RefreshUploadVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<RefreshUploadVideoResponse>(await this.doRequest("RefreshUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new RefreshUploadVideoResponse({}));
  }

  async refreshUploadVideo(request: RefreshUploadVideoRequest): Promise<RefreshUploadVideoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.refreshUploadVideoWithOptions(request, runtime);
  }

  async createUploadVideoWithOptions(request: CreateUploadVideoRequest, runtime: $Util.RuntimeOptions): Promise<CreateUploadVideoResponse> {
    Util.validateModel(request);
    return $tea.cast<CreateUploadVideoResponse>(await this.doRequest("CreateUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, $tea.toMap(request), runtime), new CreateUploadVideoResponse({}));
  }

  async createUploadVideo(request: CreateUploadVideoRequest): Promise<CreateUploadVideoResponse> {
    let runtime = new $Util.RuntimeOptions({ });
    return await this.createUploadVideoWithOptions(request, runtime);
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

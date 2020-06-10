<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AddWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\AttachAppPolicyToIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchSetVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStartVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchStopVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAuditRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateAuditResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadAttachedMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadAttachedMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\CreateUploadVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAttachedMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteAttachedMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMezzaninesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMezzaninesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMultipartUploadRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteMultipartUploadResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteStreamRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteStreamResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodSpecificConfigRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodSpecificConfigResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DeleteWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserTotalResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodCertificateListResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainBpsDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainLogResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainUsageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshQuotaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStorageDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\DetachAppPolicyFromIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAuditHistoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDefaultAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultDetailResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetUploadDetailsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetURLUploadInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoPlayAuthResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\MoveAppResourceRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\MoveAppResourceResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\PreloadVodObjectCachesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\PreloadVodObjectCachesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\ProduceEditingProjectVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\ProduceEditingProjectVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshUploadVideoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RefreshVodObjectCachesResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAuditSecurityIpRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetAuditSecurityIpResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetDefaultWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetMessageCallbackRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetMessageCallbackResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainCertificateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SetVodDomainCertificateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIMediaAuditJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitMediaDNADeleteJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitWorkflowJobRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitWorkflowJobResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAITemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAITemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAppInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAppInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAttachedMediaInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAttachedMediaInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateTranscodeTemplateGroupRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateTranscodeTemplateGroupResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfoRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfoResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfosRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVideoInfosResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodDomainRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodDomainResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodTemplateRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateVodTemplateResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponse;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Vod extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'cn-beijing'                  => 'vod.cn-shanghai.aliyuncs.com',
            'cn-hangzhou'                 => 'vod.cn-shanghai.aliyuncs.com',
            'cn-shenzhen'                 => 'vod.cn-shanghai.aliyuncs.com',
            'ap-northeast-2-pop'          => 'vod.ap-northeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'vod.ap-northeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'vod.ap-northeast-1.aliyuncs.com',
            'cn-beijing-finance-1'        => 'vod.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'vod.aliyuncs.com',
            'cn-beijing-gov-1'            => 'vod.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'vod.aliyuncs.com',
            'cn-chengdu'                  => 'vod.aliyuncs.com',
            'cn-edge-1'                   => 'vod.aliyuncs.com',
            'cn-fujian'                   => 'vod.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'vod.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'vod.aliyuncs.com',
            'cn-hangzhou-finance'         => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'vod.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'vod.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'vod.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'vod.aliyuncs.com',
            'cn-huhehaote'                => 'vod.aliyuncs.com',
            'cn-qingdao'                  => 'vod.aliyuncs.com',
            'cn-qingdao-nebula'           => 'vod.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'vod.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'vod.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'vod.aliyuncs.com',
            'cn-shanghai-inner'           => 'vod.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'vod.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'vod.aliyuncs.com',
            'cn-shenzhen-inner'           => 'vod.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'vod.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'vod.aliyuncs.com',
            'cn-wuhan'                    => 'vod.aliyuncs.com',
            'cn-yushanfang'               => 'vod.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'vod.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'vod.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'vod.aliyuncs.com',
            'eu-west-1-oxs'               => 'vod.ap-northeast-1.aliyuncs.com',
            'me-east-1'                   => 'vod.ap-northeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'vod.ap-northeast-1.aliyuncs.com',
            'us-east-1'                   => 'vod.ap-northeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vod', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJobWithOptions(SubmitMediaDNADeleteJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitMediaDNADeleteJobResponse::fromMap($this->doRequest('SubmitMediaDNADeleteJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitMediaDNADeleteJobResponse
     */
    public function submitMediaDNADeleteJob(SubmitMediaDNADeleteJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaDNADeleteJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListMediaDNADeleteJobResponse
     */
    public function listMediaDNADeleteJobWithOptions(ListMediaDNADeleteJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListMediaDNADeleteJobResponse::fromMap($this->doRequest('ListMediaDNADeleteJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListMediaDNADeleteJobResponse
     */
    public function listMediaDNADeleteJob(ListMediaDNADeleteJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaDNADeleteJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetailWithOptions(GetMediaAuditAudioResultDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMediaAuditAudioResultDetailResponse::fromMap($this->doRequest('GetMediaAuditAudioResultDetail', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditAudioResultDetailResponse
     */
    public function getMediaAuditAudioResultDetail(GetMediaAuditAudioResultDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditAudioResultDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions(SubmitDynamicImageJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitDynamicImageJobResponse::fromMap($this->doRequest('SubmitDynamicImageJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJob(SubmitDynamicImageJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitWorkflowJobResponse
     */
    public function submitWorkflowJobWithOptions(SubmitWorkflowJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitWorkflowJobResponse::fromMap($this->doRequest('SubmitWorkflowJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitWorkflowJobResponse
     */
    public function submitWorkflowJob(SubmitWorkflowJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitWorkflowJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResultWithOptions(GetAIVideoTagResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAIVideoTagResultResponse::fromMap($this->doRequest('GetAIVideoTagResult', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAIVideoTagResultResponse
     */
    public function getAIVideoTagResult(GetAIVideoTagResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIVideoTagResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetUploadDetailsResponse
     */
    public function getUploadDetailsWithOptions(GetUploadDetailsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetUploadDetailsResponse::fromMap($this->doRequest('GetUploadDetails', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetUploadDetailsResponse
     */
    public function getUploadDetails(GetUploadDetailsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUploadDetailsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodStorageDataResponse
     */
    public function describeVodStorageDataWithOptions(DescribeVodStorageDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodStorageDataResponse::fromMap($this->doRequest('DescribeVodStorageData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodStorageDataResponse
     */
    public function describeVodStorageData(DescribeVodStorageDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStorageDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodAIDataResponse
     */
    public function describeVodAIDataWithOptions(DescribeVodAIDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodAIDataResponse::fromMap($this->doRequest('DescribeVodAIData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodAIDataResponse
     */
    public function describeVodAIData(DescribeVodAIDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodAIDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeDataWithOptions(DescribeVodTranscodeDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodTranscodeDataResponse::fromMap($this->doRequest('DescribeVodTranscodeData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodTranscodeDataResponse
     */
    public function describeVodTranscodeData(DescribeVodTranscodeDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodTranscodeDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMultipartUploadResponse
     */
    public function deleteMultipartUploadWithOptions(DeleteMultipartUploadRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMultipartUploadResponse::fromMap($this->doRequest('DeleteMultipartUpload', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMultipartUploadResponse
     */
    public function deleteMultipartUpload(DeleteMultipartUploadRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMultipartUploadWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAttachedMediaInfoResponse
     */
    public function getAttachedMediaInfoWithOptions(GetAttachedMediaInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAttachedMediaInfoResponse::fromMap($this->doRequest('GetAttachedMediaInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAttachedMediaInfoResponse
     */
    public function getAttachedMediaInfo(GetAttachedMediaInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAttachedMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAttachedMediaResponse
     */
    public function deleteAttachedMediaWithOptions(DeleteAttachedMediaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAttachedMediaResponse::fromMap($this->doRequest('DeleteAttachedMedia', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAttachedMediaResponse
     */
    public function deleteAttachedMedia(DeleteAttachedMediaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfosWithOptions(UpdateAttachedMediaInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAttachedMediaInfosResponse::fromMap($this->doRequest('UpdateAttachedMediaInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAttachedMediaInfosResponse
     */
    public function updateAttachedMediaInfos(UpdateAttachedMediaInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAttachedMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentityWithOptions(AttachAppPolicyToIdentityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AttachAppPolicyToIdentityResponse::fromMap($this->doRequest('AttachAppPolicyToIdentity', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AttachAppPolicyToIdentityResponse
     */
    public function attachAppPolicyToIdentity(AttachAppPolicyToIdentityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachAppPolicyToIdentityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentityWithOptions(DetachAppPolicyFromIdentityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DetachAppPolicyFromIdentityResponse::fromMap($this->doRequest('DetachAppPolicyFromIdentity', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DetachAppPolicyFromIdentityResponse
     */
    public function detachAppPolicyFromIdentity(DetachAppPolicyFromIdentityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachAppPolicyFromIdentityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentityWithOptions(ListAppPoliciesForIdentityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAppPoliciesForIdentityResponse::fromMap($this->doRequest('ListAppPoliciesForIdentity', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAppPoliciesForIdentityResponse
     */
    public function listAppPoliciesForIdentity(ListAppPoliciesForIdentityRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppPoliciesForIdentityWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAppInfoResponse
     */
    public function createAppInfoWithOptions(CreateAppInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAppInfoResponse::fromMap($this->doRequest('CreateAppInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAppInfoResponse
     */
    public function createAppInfo(CreateAppInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAppInfosResponse
     */
    public function getAppInfosWithOptions(GetAppInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAppInfosResponse::fromMap($this->doRequest('GetAppInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAppInfosResponse
     */
    public function getAppInfos(GetAppInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAppInfoResponse
     */
    public function updateAppInfoWithOptions(UpdateAppInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAppInfoResponse::fromMap($this->doRequest('UpdateAppInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAppInfoResponse
     */
    public function updateAppInfo(UpdateAppInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAppInfoResponse
     */
    public function deleteAppInfoWithOptions(DeleteAppInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAppInfoResponse::fromMap($this->doRequest('DeleteAppInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAppInfoResponse
     */
    public function deleteAppInfo(DeleteAppInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAppInfoResponse
     */
    public function listAppInfoWithOptions(ListAppInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAppInfoResponse::fromMap($this->doRequest('ListAppInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAppInfoResponse
     */
    public function listAppInfo(ListAppInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return MoveAppResourceResponse
     */
    public function moveAppResourceWithOptions(MoveAppResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return MoveAppResourceResponse::fromMap($this->doRequest('MoveAppResource', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return MoveAppResourceResponse
     */
    public function moveAppResource(MoveAppResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveAppResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallbackWithOptions(DeleteMessageCallbackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMessageCallbackResponse::fromMap($this->doRequest('DeleteMessageCallback', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMessageCallbackResponse
     */
    public function deleteMessageCallback(DeleteMessageCallbackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeSummaryResponse
     */
    public function getTranscodeSummaryWithOptions(GetTranscodeSummaryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTranscodeSummaryResponse::fromMap($this->doRequest('GetTranscodeSummary', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeSummaryResponse
     */
    public function getTranscodeSummary(GetTranscodeSummaryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeSummaryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTranscodeTaskResponse
     */
    public function listTranscodeTaskWithOptions(ListTranscodeTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTranscodeTaskResponse::fromMap($this->doRequest('ListTranscodeTask', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTranscodeTaskResponse
     */
    public function listTranscodeTask(ListTranscodeTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeTaskResponse
     */
    public function getTranscodeTaskWithOptions(GetTranscodeTaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTranscodeTaskResponse::fromMap($this->doRequest('GetTranscodeTask', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeTaskResponse
     */
    public function getTranscodeTask(GetTranscodeTaskRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTaskWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetURLUploadInfosResponse
     */
    public function getURLUploadInfosWithOptions(GetURLUploadInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetURLUploadInfosResponse::fromMap($this->doRequest('GetURLUploadInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetURLUploadInfosResponse
     */
    public function getURLUploadInfos(GetURLUploadInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getURLUploadInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroupWithOptions(UpdateTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateTranscodeTemplateGroupResponse::fromMap($this->doRequest('UpdateTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateTranscodeTemplateGroupResponse
     */
    public function updateTranscodeTemplateGroup(UpdateTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroupWithOptions(AddTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddTranscodeTemplateGroupResponse::fromMap($this->doRequest('AddTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddTranscodeTemplateGroupResponse
     */
    public function addTranscodeTemplateGroup(AddTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroupWithOptions(DeleteTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteTranscodeTemplateGroupResponse::fromMap($this->doRequest('DeleteTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public function deleteTranscodeTemplateGroup(DeleteTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroupWithOptions(GetTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetTranscodeTemplateGroupResponse::fromMap($this->doRequest('GetTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetTranscodeTemplateGroupResponse
     */
    public function getTranscodeTemplateGroup(GetTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultTranscodeTemplateGroupResponse
     */
    public function setDefaultTranscodeTemplateGroupWithOptions(SetDefaultTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultTranscodeTemplateGroupResponse::fromMap($this->doRequest('SetDefaultTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultTranscodeTemplateGroupResponse
     */
    public function setDefaultTranscodeTemplateGroup(SetDefaultTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroupWithOptions(ListTranscodeTemplateGroupRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListTranscodeTemplateGroupResponse::fromMap($this->doRequest('ListTranscodeTemplateGroup', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListTranscodeTemplateGroupResponse
     */
    public function listTranscodeTemplateGroup(ListTranscodeTemplateGroupRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeTemplateGroupWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJobWithOptions(GetAIMediaAuditJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAIMediaAuditJobResponse::fromMap($this->doRequest('GetAIMediaAuditJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAIMediaAuditJobResponse
     */
    public function getAIMediaAuditJob(GetAIMediaAuditJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitAIMediaAuditJobResponse
     */
    public function submitAIMediaAuditJobWithOptions(SubmitAIMediaAuditJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitAIMediaAuditJobResponse::fromMap($this->doRequest('SubmitAIMediaAuditJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitAIMediaAuditJobResponse
     */
    public function submitAIMediaAuditJob(SubmitAIMediaAuditJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIMediaAuditJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResultWithOptions(GetMediaAuditResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMediaAuditResultResponse::fromMap($this->doRequest('GetMediaAuditResult', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultResponse
     */
    public function getMediaAuditResult(GetMediaAuditResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetailWithOptions(GetMediaAuditResultDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMediaAuditResultDetailResponse::fromMap($this->doRequest('GetMediaAuditResultDetail', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultDetailResponse
     */
    public function getMediaAuditResultDetail(GetMediaAuditResultDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultTimelineResponse
     */
    public function getMediaAuditResultTimelineWithOptions(GetMediaAuditResultTimelineRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMediaAuditResultTimelineResponse::fromMap($this->doRequest('GetMediaAuditResultTimeline', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaAuditResultTimelineResponse
     */
    public function getMediaAuditResultTimeline(GetMediaAuditResultTimelineRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaAuditResultTimelineWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddAITemplateResponse
     */
    public function addAITemplateWithOptions(AddAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddAITemplateResponse::fromMap($this->doRequest('AddAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddAITemplateResponse
     */
    public function addAITemplate(AddAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAITemplateResponse
     */
    public function deleteAITemplateWithOptions(DeleteAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteAITemplateResponse::fromMap($this->doRequest('DeleteAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteAITemplateResponse
     */
    public function deleteAITemplate(DeleteAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAITemplateResponse
     */
    public function updateAITemplateWithOptions(UpdateAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateAITemplateResponse::fromMap($this->doRequest('UpdateAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateAITemplateResponse
     */
    public function updateAITemplate(UpdateAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAITemplateResponse
     */
    public function getAITemplateWithOptions(GetAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAITemplateResponse::fromMap($this->doRequest('GetAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAITemplateResponse
     */
    public function getAITemplate(GetAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAITemplateResponse
     */
    public function listAITemplateWithOptions(ListAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAITemplateResponse::fromMap($this->doRequest('ListAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAITemplateResponse
     */
    public function listAITemplate(ListAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplateWithOptions(GetDefaultAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetDefaultAITemplateResponse::fromMap($this->doRequest('GetDefaultAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetDefaultAITemplateResponse
     */
    public function getDefaultAITemplate(GetDefaultAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplateWithOptions(SetDefaultAITemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultAITemplateResponse::fromMap($this->doRequest('SetDefaultAITemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultAITemplateResponse
     */
    public function setDefaultAITemplate(SetDefaultAITemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultAITemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainLogResponse
     */
    public function describeVodDomainLogWithOptions(DescribeVodDomainLogRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainLogResponse::fromMap($this->doRequest('DescribeVodDomainLog', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainLogResponse
     */
    public function describeVodDomainLog(DescribeVodDomainLogRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainLogWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public function describeVodDomainCertificateInfoWithOptions(DescribeVodDomainCertificateInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainCertificateInfoResponse::fromMap($this->doRequest('DescribeVodDomainCertificateInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainCertificateInfoResponse
     */
    public function describeVodDomainCertificateInfo(DescribeVodDomainCertificateInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficDataWithOptions(DescribeVodDomainTrafficDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainTrafficDataResponse::fromMap($this->doRequest('DescribeVodDomainTrafficData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainTrafficDataResponse
     */
    public function describeVodDomainTrafficData(DescribeVodDomainTrafficDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsDataWithOptions(DescribeVodDomainBpsDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainBpsDataResponse::fromMap($this->doRequest('DescribeVodDomainBpsData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainBpsDataResponse
     */
    public function describeVodDomainBpsData(DescribeVodDomainBpsDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageDataWithOptions(DescribeVodDomainUsageDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainUsageDataResponse::fromMap($this->doRequest('DescribeVodDomainUsageData', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainUsageDataResponse
     */
    public function describeVodDomainUsageData(DescribeVodDomainUsageDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainUsageDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodCertificateListResponse
     */
    public function describeVodCertificateListWithOptions(DescribeVodCertificateListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodCertificateListResponse::fromMap($this->doRequest('DescribeVodCertificateList', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodCertificateListResponse
     */
    public function describeVodCertificateList(DescribeVodCertificateListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodCertificateListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchStopVodDomainResponse
     */
    public function batchStopVodDomainWithOptions(BatchStopVodDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchStopVodDomainResponse::fromMap($this->doRequest('BatchStopVodDomain', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchStopVodDomainResponse
     */
    public function batchStopVodDomain(BatchStopVodDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopVodDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodDomainResponse
     */
    public function deleteVodDomainWithOptions(DeleteVodDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVodDomainResponse::fromMap($this->doRequest('DeleteVodDomain', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodDomainResponse
     */
    public function deleteVodDomain(DeleteVodDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificateWithOptions(SetVodDomainCertificateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetVodDomainCertificateResponse::fromMap($this->doRequest('SetVodDomainCertificate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetVodDomainCertificateResponse
     */
    public function setVodDomainCertificate(SetVodDomainCertificateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVodDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfigWithOptions(DeleteVodSpecificConfigRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVodSpecificConfigResponse::fromMap($this->doRequest('DeleteVodSpecificConfig', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodSpecificConfigResponse
     */
    public function deleteVodSpecificConfig(DeleteVodSpecificConfigRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodSpecificConfigWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigsWithOptions(BatchSetVodDomainConfigsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchSetVodDomainConfigsResponse::fromMap($this->doRequest('BatchSetVodDomainConfigs', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchSetVodDomainConfigsResponse
     */
    public function batchSetVodDomainConfigs(BatchSetVodDomainConfigsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddVodDomainResponse
     */
    public function addVodDomainWithOptions(AddVodDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddVodDomainResponse::fromMap($this->doRequest('AddVodDomain', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddVodDomainResponse
     */
    public function addVodDomain(AddVodDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuotaWithOptions(DescribeVodRefreshQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodRefreshQuotaResponse::fromMap($this->doRequest('DescribeVodRefreshQuota', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodRefreshQuotaResponse
     */
    public function describeVodRefreshQuota(DescribeVodRefreshQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasksWithOptions(DescribeVodRefreshTasksRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodRefreshTasksResponse::fromMap($this->doRequest('DescribeVodRefreshTasks', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodRefreshTasksResponse
     */
    public function describeVodRefreshTasks(DescribeVodRefreshTasksRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodRefreshTasksWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigsWithOptions(DescribeVodDomainConfigsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainConfigsResponse::fromMap($this->doRequest('DescribeVodDomainConfigs', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainConfigsResponse
     */
    public function describeVodDomainConfigs(DescribeVodDomainConfigsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodUserDomainsResponse
     */
    public function describeVodUserDomainsWithOptions(DescribeVodUserDomainsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodUserDomainsResponse::fromMap($this->doRequest('DescribeVodUserDomains', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodUserDomainsResponse
     */
    public function describeVodUserDomains(DescribeVodUserDomainsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodUserDomainsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVodDomainResponse
     */
    public function updateVodDomainWithOptions(UpdateVodDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateVodDomainResponse::fromMap($this->doRequest('UpdateVodDomain', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVodDomainResponse
     */
    public function updateVodDomain(UpdateVodDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVodDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCachesWithOptions(RefreshVodObjectCachesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RefreshVodObjectCachesResponse::fromMap($this->doRequest('RefreshVodObjectCaches', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RefreshVodObjectCachesResponse
     */
    public function refreshVodObjectCaches(RefreshVodObjectCachesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCachesWithOptions(PreloadVodObjectCachesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return PreloadVodObjectCachesResponse::fromMap($this->doRequest('PreloadVodObjectCaches', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return PreloadVodObjectCachesResponse
     */
    public function preloadVodObjectCaches(PreloadVodObjectCachesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadVodObjectCachesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return BatchStartVodDomainResponse
     */
    public function batchStartVodDomainWithOptions(BatchStartVodDomainRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return BatchStartVodDomainResponse::fromMap($this->doRequest('BatchStartVodDomain', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return BatchStartVodDomainResponse
     */
    public function batchStartVodDomain(BatchStartVodDomainRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartVodDomainWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetailWithOptions(DescribeVodDomainDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeVodDomainDetailResponse::fromMap($this->doRequest('DescribeVodDomainDetail', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeVodDomainDetailResponse
     */
    public function describeVodDomainDetail(DescribeVodDomainDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodTemplateResponse
     */
    public function deleteVodTemplateWithOptions(DeleteVodTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVodTemplateResponse::fromMap($this->doRequest('DeleteVodTemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVodTemplateResponse
     */
    public function deleteVodTemplate(DeleteVodTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetVodTemplateResponse
     */
    public function getVodTemplateWithOptions(GetVodTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetVodTemplateResponse::fromMap($this->doRequest('GetVodTemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetVodTemplateResponse
     */
    public function getVodTemplate(GetVodTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListVodTemplateResponse
     */
    public function listVodTemplateWithOptions(ListVodTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListVodTemplateResponse::fromMap($this->doRequest('ListVodTemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListVodTemplateResponse
     */
    public function listVodTemplate(ListVodTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVodTemplateResponse
     */
    public function updateVodTemplateWithOptions(UpdateVodTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateVodTemplateResponse::fromMap($this->doRequest('UpdateVodTemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVodTemplateResponse
     */
    public function updateVodTemplate(UpdateVodTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddVodTemplateResponse
     */
    public function addVodTemplateWithOptions(AddVodTemplateRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddVodTemplateResponse::fromMap($this->doRequest('AddVodTemplate', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddVodTemplateResponse
     */
    public function addVodTemplate(AddVodTemplateRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVodTemplateWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMediaWithOptions(CreateUploadAttachedMediaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateUploadAttachedMediaResponse::fromMap($this->doRequest('CreateUploadAttachedMedia', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadAttachedMediaResponse
     */
    public function createUploadAttachedMedia(CreateUploadAttachedMediaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadAttachedMediaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RegisterMediaResponse
     */
    public function registerMediaWithOptions(RegisterMediaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RegisterMediaResponse::fromMap($this->doRequest('RegisterMedia', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RegisterMediaResponse
     */
    public function registerMedia(RegisterMediaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermarkWithOptions(DeleteWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteWatermarkResponse::fromMap($this->doRequest('DeleteWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteWatermarkResponse
     */
    public function deleteWatermark(DeleteWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetWatermarkResponse
     */
    public function getWatermarkWithOptions(GetWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetWatermarkResponse::fromMap($this->doRequest('GetWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetWatermarkResponse
     */
    public function getWatermark(GetWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultWatermarkResponse
     */
    public function setDefaultWatermarkWithOptions(SetDefaultWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetDefaultWatermarkResponse::fromMap($this->doRequest('SetDefaultWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetDefaultWatermarkResponse
     */
    public function setDefaultWatermark(SetDefaultWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListWatermarkResponse
     */
    public function listWatermarkWithOptions(ListWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListWatermarkResponse::fromMap($this->doRequest('ListWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListWatermarkResponse
     */
    public function listWatermark(ListWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermarkWithOptions(UpdateWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateWatermarkResponse::fromMap($this->doRequest('UpdateWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateWatermarkResponse
     */
    public function updateWatermark(UpdateWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddWatermarkResponse
     */
    public function addWatermarkWithOptions(AddWatermarkRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddWatermarkResponse::fromMap($this->doRequest('AddWatermark', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddWatermarkResponse
     */
    public function addWatermark(AddWatermarkRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addWatermarkWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaDNAResultResponse
     */
    public function getMediaDNAResultWithOptions(GetMediaDNAResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMediaDNAResultResponse::fromMap($this->doRequest('GetMediaDNAResult', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMediaDNAResultResponse
     */
    public function getMediaDNAResult(GetMediaDNAResultRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaDNAResultWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMezzaninesResponse
     */
    public function deleteMezzaninesWithOptions(DeleteMezzaninesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteMezzaninesResponse::fromMap($this->doRequest('DeleteMezzanines', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteMezzaninesResponse
     */
    public function deleteMezzanines(DeleteMezzaninesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMezzaninesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateImageInfosResponse
     */
    public function updateImageInfosWithOptions(UpdateImageInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateImageInfosResponse::fromMap($this->doRequest('UpdateImageInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateImageInfosResponse
     */
    public function updateImageInfos(UpdateImageInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateImageInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions(DeleteImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageResponse::fromMap($this->doRequest('DeleteImage', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageResponse
     */
    public function deleteImage(DeleteImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAuditSecurityIpResponse
     */
    public function listAuditSecurityIpWithOptions(ListAuditSecurityIpRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAuditSecurityIpResponse::fromMap($this->doRequest('ListAuditSecurityIp', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAuditSecurityIpResponse
     */
    public function listAuditSecurityIp(ListAuditSecurityIpRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIpWithOptions(SetAuditSecurityIpRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetAuditSecurityIpResponse::fromMap($this->doRequest('SetAuditSecurityIp', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetAuditSecurityIpResponse
     */
    public function setAuditSecurityIp(SetAuditSecurityIpRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setAuditSecurityIpWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions(UploadMediaByURLRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UploadMediaByURLResponse::fromMap($this->doRequest('UploadMediaByURL', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURL(UploadMediaByURLRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVideoInfosResponse
     */
    public function updateVideoInfosWithOptions(UpdateVideoInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateVideoInfosResponse::fromMap($this->doRequest('UpdateVideoInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVideoInfosResponse
     */
    public function updateVideoInfos(UpdateVideoInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchMediaResponse
     */
    public function searchMediaWithOptions(SearchMediaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchMediaResponse::fromMap($this->doRequest('SearchMedia', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchMediaResponse
     */
    public function searchMedia(SearchMediaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoInfosResponse
     */
    public function getVideoInfosWithOptions(GetVideoInfosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetVideoInfosResponse::fromMap($this->doRequest('GetVideoInfos', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoInfosResponse
     */
    public function getVideoInfos(GetVideoInfosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobsWithOptions(SubmitPreprocessJobsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitPreprocessJobsResponse::fromMap($this->doRequest('SubmitPreprocessJobs', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitPreprocessJobsResponse
     */
    public function submitPreprocessJobs(SubmitPreprocessJobsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPreprocessJobsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatisWithOptions(DescribePlayVideoStatisRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePlayVideoStatisResponse::fromMap($this->doRequest('DescribePlayVideoStatis', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayVideoStatisResponse
     */
    public function describePlayVideoStatis(DescribePlayVideoStatisRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayVideoStatisWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayUserTotalResponse
     */
    public function describePlayUserTotalWithOptions(DescribePlayUserTotalRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePlayUserTotalResponse::fromMap($this->doRequest('DescribePlayUserTotal', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayUserTotalResponse
     */
    public function describePlayUserTotal(DescribePlayUserTotalRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserTotalWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayUserAvgResponse
     */
    public function describePlayUserAvgWithOptions(DescribePlayUserAvgRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePlayUserAvgResponse::fromMap($this->doRequest('DescribePlayUserAvg', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayUserAvgResponse
     */
    public function describePlayUserAvg(DescribePlayUserAvgRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayUserAvgWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayTopVideosResponse
     */
    public function describePlayTopVideosWithOptions(DescribePlayTopVideosRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePlayTopVideosResponse::fromMap($this->doRequest('DescribePlayTopVideos', 'HTTPS', 'POST', '2017-03-21', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePlayTopVideosResponse
     */
    public function describePlayTopVideos(DescribePlayTopVideosRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayTopVideosWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshotsWithOptions(ListSnapshotsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListSnapshotsResponse::fromMap($this->doRequest('ListSnapshots', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListSnapshotsResponse
     */
    public function listSnapshots(ListSnapshotsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobsWithOptions(SubmitTranscodeJobsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitTranscodeJobsResponse::fromMap($this->doRequest('SubmitTranscodeJobs', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitTranscodeJobsResponse
     */
    public function submitTranscodeJobs(SubmitTranscodeJobsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideoWithOptions(ListLiveRecordVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListLiveRecordVideoResponse::fromMap($this->doRequest('ListLiveRecordVideo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListLiveRecordVideoResponse
     */
    public function listLiveRecordVideo(ListLiveRecordVideoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordVideoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAuditResponse
     */
    public function createAuditWithOptions(CreateAuditRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAuditResponse::fromMap($this->doRequest('CreateAudit', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAuditResponse
     */
    public function createAudit(CreateAuditRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetAuditHistoryResponse
     */
    public function getAuditHistoryWithOptions(GetAuditHistoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAuditHistoryResponse::fromMap($this->doRequest('GetAuditHistory', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetAuditHistoryResponse
     */
    public function getAuditHistory(GetAuditHistoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAuditHistoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ListAIJobResponse
     */
    public function listAIJobWithOptions(ListAIJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListAIJobResponse::fromMap($this->doRequest('ListAIJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListAIJobResponse
     */
    public function listAIJob(ListAIJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitAIJobResponse
     */
    public function submitAIJobWithOptions(SubmitAIJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitAIJobResponse::fromMap($this->doRequest('SubmitAIJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitAIJobResponse
     */
    public function submitAIJob(SubmitAIJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAIJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetImageInfoResponse
     */
    public function getImageInfoWithOptions(GetImageInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetImageInfoResponse::fromMap($this->doRequest('GetImageInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetImageInfoResponse
     */
    public function getImageInfo(GetImageInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getImageInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStreamResponse
     */
    public function deleteStreamWithOptions(DeleteStreamRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteStreamResponse::fromMap($this->doRequest('DeleteStream', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteStreamResponse
     */
    public function deleteStream(DeleteStreamRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStreamWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions(SubmitSnapshotJobRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubmitSnapshotJobResponse::fromMap($this->doRequest('SubmitSnapshotJob', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob(SubmitSnapshotJobRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions(UpdateEditingProjectRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateEditingProjectResponse::fromMap($this->doRequest('UpdateEditingProject', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProject(UpdateEditingProjectRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetEditingProjectMaterialsResponse
     */
    public function setEditingProjectMaterialsWithOptions(SetEditingProjectMaterialsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetEditingProjectMaterialsResponse::fromMap($this->doRequest('SetEditingProjectMaterials', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetEditingProjectMaterialsResponse
     */
    public function setEditingProjectMaterials(SetEditingProjectMaterialsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions(SearchEditingProjectRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchEditingProjectResponse::fromMap($this->doRequest('SearchEditingProject', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProject(SearchEditingProjectRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideoWithOptions(ProduceEditingProjectVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ProduceEditingProjectVideoResponse::fromMap($this->doRequest('ProduceEditingProjectVideo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ProduceEditingProjectVideoResponse
     */
    public function produceEditingProjectVideo(ProduceEditingProjectVideoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->produceEditingProjectVideoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions(GetEditingProjectMaterialsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetEditingProjectMaterialsResponse::fromMap($this->doRequest('GetEditingProjectMaterials', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterials(GetEditingProjectMaterialsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions(GetEditingProjectRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetEditingProjectResponse::fromMap($this->doRequest('GetEditingProject', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProject(GetEditingProjectRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEditingProjectResponse
     */
    public function deleteEditingProjectWithOptions(DeleteEditingProjectRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteEditingProjectResponse::fromMap($this->doRequest('DeleteEditingProject', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteEditingProjectResponse
     */
    public function deleteEditingProject(DeleteEditingProjectRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddEditingProjectResponse
     */
    public function addEditingProjectWithOptions(AddEditingProjectRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddEditingProjectResponse::fromMap($this->doRequest('AddEditingProject', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddEditingProjectResponse
     */
    public function addEditingProject(AddEditingProjectRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMezzanineInfoResponse
     */
    public function getMezzanineInfoWithOptions(GetMezzanineInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMezzanineInfoResponse::fromMap($this->doRequest('GetMezzanineInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMezzanineInfoResponse
     */
    public function getMezzanineInfo(GetMezzanineInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMezzanineInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions(UpdateCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateCategoryResponse::fromMap($this->doRequest('UpdateCategory', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategory(UpdateCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetCategoriesResponse
     */
    public function getCategoriesWithOptions(GetCategoriesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetCategoriesResponse::fromMap($this->doRequest('GetCategories', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetCategoriesResponse
     */
    public function getCategories(GetCategoriesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions(DeleteCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteCategoryResponse::fromMap($this->doRequest('DeleteCategory', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategory(DeleteCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions(AddCategoryRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddCategoryResponse::fromMap($this->doRequest('AddCategory', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddCategoryResponse
     */
    public function addCategory(AddCategoryRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions(GetPlayInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPlayInfoResponse::fromMap($this->doRequest('GetPlayInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfo(GetPlayInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadImageResponse
     */
    public function createUploadImageWithOptions(CreateUploadImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateUploadImageResponse::fromMap($this->doRequest('CreateUploadImage', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadImageResponse
     */
    public function createUploadImage(CreateUploadImageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadImageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetMessageCallbackResponse
     */
    public function setMessageCallbackWithOptions(SetMessageCallbackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetMessageCallbackResponse::fromMap($this->doRequest('SetMessageCallback', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetMessageCallbackResponse
     */
    public function setMessageCallback(SetMessageCallbackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetMessageCallbackResponse
     */
    public function getMessageCallbackWithOptions(GetMessageCallbackRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetMessageCallbackResponse::fromMap($this->doRequest('GetMessageCallback', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetMessageCallbackResponse
     */
    public function getMessageCallback(GetMessageCallbackRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMessageCallbackWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVideoInfoResponse
     */
    public function updateVideoInfoWithOptions(UpdateVideoInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpdateVideoInfoResponse::fromMap($this->doRequest('UpdateVideoInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpdateVideoInfoResponse
     */
    public function updateVideoInfo(UpdateVideoInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuthWithOptions(GetVideoPlayAuthRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetVideoPlayAuthResponse::fromMap($this->doRequest('GetVideoPlayAuth', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoPlayAuthResponse
     */
    public function getVideoPlayAuth(GetVideoPlayAuthRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoPlayAuthWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoListResponse
     */
    public function getVideoListWithOptions(GetVideoListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetVideoListResponse::fromMap($this->doRequest('GetVideoList', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoListResponse
     */
    public function getVideoList(GetVideoListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoInfoResponse
     */
    public function getVideoInfoWithOptions(GetVideoInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetVideoInfoResponse::fromMap($this->doRequest('GetVideoInfo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetVideoInfoResponse
     */
    public function getVideoInfo(GetVideoInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideoWithOptions(DeleteVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteVideoResponse::fromMap($this->doRequest('DeleteVideo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteVideoResponse
     */
    public function deleteVideo(DeleteVideoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVideoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RefreshUploadVideoResponse
     */
    public function refreshUploadVideoWithOptions(RefreshUploadVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RefreshUploadVideoResponse::fromMap($this->doRequest('RefreshUploadVideo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RefreshUploadVideoResponse
     */
    public function refreshUploadVideo(RefreshUploadVideoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadVideoResponse
     */
    public function createUploadVideoWithOptions(CreateUploadVideoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateUploadVideoResponse::fromMap($this->doRequest('CreateUploadVideo', 'HTTPS', 'POST', '2017-03-21', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateUploadVideoResponse
     */
    public function createUploadVideo(CreateUploadVideoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadVideoWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}

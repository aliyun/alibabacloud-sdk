// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Vod20170321.Models;

namespace AlibabaCloud.SDK.Vod20170321
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"cn-beijing", "vod.cn-shanghai.aliyuncs.com"},
                {"cn-hangzhou", "vod.cn-shanghai.aliyuncs.com"},
                {"cn-shenzhen", "vod.cn-shanghai.aliyuncs.com"},
                {"ap-northeast-2-pop", "vod.ap-northeast-1.aliyuncs.com"},
                {"ap-southeast-2", "vod.ap-northeast-1.aliyuncs.com"},
                {"ap-southeast-3", "vod.ap-northeast-1.aliyuncs.com"},
                {"cn-beijing-finance-1", "vod.aliyuncs.com"},
                {"cn-beijing-finance-pop", "vod.aliyuncs.com"},
                {"cn-beijing-gov-1", "vod.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "vod.aliyuncs.com"},
                {"cn-chengdu", "vod.aliyuncs.com"},
                {"cn-edge-1", "vod.aliyuncs.com"},
                {"cn-fujian", "vod.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "vod.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "vod.aliyuncs.com"},
                {"cn-hangzhou-finance", "vod.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "vod.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "vod.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "vod.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "vod.aliyuncs.com"},
                {"cn-hangzhou-test-306", "vod.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "vod.aliyuncs.com"},
                {"cn-huhehaote", "vod.aliyuncs.com"},
                {"cn-qingdao", "vod.aliyuncs.com"},
                {"cn-qingdao-nebula", "vod.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "vod.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "vod.aliyuncs.com"},
                {"cn-shanghai-finance-1", "vod.aliyuncs.com"},
                {"cn-shanghai-inner", "vod.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "vod.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "vod.aliyuncs.com"},
                {"cn-shenzhen-inner", "vod.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "vod.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "vod.aliyuncs.com"},
                {"cn-wuhan", "vod.aliyuncs.com"},
                {"cn-yushanfang", "vod.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "vod.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "vod.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "vod.aliyuncs.com"},
                {"eu-west-1-oxs", "vod.ap-northeast-1.aliyuncs.com"},
                {"me-east-1", "vod.ap-northeast-1.aliyuncs.com"},
                {"rus-west-1-pop", "vod.ap-northeast-1.aliyuncs.com"},
                {"us-east-1", "vod.ap-northeast-1.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public SubmitMediaDNADeleteJobResponse SubmitMediaDNADeleteJobWithOptions(SubmitMediaDNADeleteJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitMediaDNADeleteJobResponse>(DoRequest("SubmitMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitMediaDNADeleteJobResponse> SubmitMediaDNADeleteJobWithOptionsAsync(SubmitMediaDNADeleteJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitMediaDNADeleteJobResponse>(await DoRequestAsync("SubmitMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitMediaDNADeleteJobResponse SubmitMediaDNADeleteJob(SubmitMediaDNADeleteJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitMediaDNADeleteJobWithOptions(request, runtime);
        }

        public async Task<SubmitMediaDNADeleteJobResponse> SubmitMediaDNADeleteJobAsync(SubmitMediaDNADeleteJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitMediaDNADeleteJobWithOptionsAsync(request, runtime);
        }

        public ListMediaDNADeleteJobResponse ListMediaDNADeleteJobWithOptions(ListMediaDNADeleteJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListMediaDNADeleteJobResponse>(DoRequest("ListMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListMediaDNADeleteJobResponse> ListMediaDNADeleteJobWithOptionsAsync(ListMediaDNADeleteJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListMediaDNADeleteJobResponse>(await DoRequestAsync("ListMediaDNADeleteJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListMediaDNADeleteJobResponse ListMediaDNADeleteJob(ListMediaDNADeleteJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListMediaDNADeleteJobWithOptions(request, runtime);
        }

        public async Task<ListMediaDNADeleteJobResponse> ListMediaDNADeleteJobAsync(ListMediaDNADeleteJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListMediaDNADeleteJobWithOptionsAsync(request, runtime);
        }

        public GetMediaAuditAudioResultDetailResponse GetMediaAuditAudioResultDetailWithOptions(GetMediaAuditAudioResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditAudioResultDetailResponse>(DoRequest("GetMediaAuditAudioResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMediaAuditAudioResultDetailResponse> GetMediaAuditAudioResultDetailWithOptionsAsync(GetMediaAuditAudioResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditAudioResultDetailResponse>(await DoRequestAsync("GetMediaAuditAudioResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMediaAuditAudioResultDetailResponse GetMediaAuditAudioResultDetail(GetMediaAuditAudioResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMediaAuditAudioResultDetailWithOptions(request, runtime);
        }

        public async Task<GetMediaAuditAudioResultDetailResponse> GetMediaAuditAudioResultDetailAsync(GetMediaAuditAudioResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMediaAuditAudioResultDetailWithOptionsAsync(request, runtime);
        }

        public SubmitDynamicImageJobResponse SubmitDynamicImageJobWithOptions(SubmitDynamicImageJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitDynamicImageJobResponse>(DoRequest("SubmitDynamicImageJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitDynamicImageJobResponse> SubmitDynamicImageJobWithOptionsAsync(SubmitDynamicImageJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitDynamicImageJobResponse>(await DoRequestAsync("SubmitDynamicImageJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitDynamicImageJobResponse SubmitDynamicImageJob(SubmitDynamicImageJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitDynamicImageJobWithOptions(request, runtime);
        }

        public async Task<SubmitDynamicImageJobResponse> SubmitDynamicImageJobAsync(SubmitDynamicImageJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitDynamicImageJobWithOptionsAsync(request, runtime);
        }

        public SubmitWorkflowJobResponse SubmitWorkflowJobWithOptions(SubmitWorkflowJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitWorkflowJobResponse>(DoRequest("SubmitWorkflowJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitWorkflowJobResponse> SubmitWorkflowJobWithOptionsAsync(SubmitWorkflowJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitWorkflowJobResponse>(await DoRequestAsync("SubmitWorkflowJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitWorkflowJobResponse SubmitWorkflowJob(SubmitWorkflowJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitWorkflowJobWithOptions(request, runtime);
        }

        public async Task<SubmitWorkflowJobResponse> SubmitWorkflowJobAsync(SubmitWorkflowJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitWorkflowJobWithOptionsAsync(request, runtime);
        }

        public GetAIVideoTagResultResponse GetAIVideoTagResultWithOptions(GetAIVideoTagResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAIVideoTagResultResponse>(DoRequest("GetAIVideoTagResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAIVideoTagResultResponse> GetAIVideoTagResultWithOptionsAsync(GetAIVideoTagResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAIVideoTagResultResponse>(await DoRequestAsync("GetAIVideoTagResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAIVideoTagResultResponse GetAIVideoTagResult(GetAIVideoTagResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAIVideoTagResultWithOptions(request, runtime);
        }

        public async Task<GetAIVideoTagResultResponse> GetAIVideoTagResultAsync(GetAIVideoTagResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAIVideoTagResultWithOptionsAsync(request, runtime);
        }

        public GetUploadDetailsResponse GetUploadDetailsWithOptions(GetUploadDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUploadDetailsResponse>(DoRequest("GetUploadDetails", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetUploadDetailsResponse> GetUploadDetailsWithOptionsAsync(GetUploadDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetUploadDetailsResponse>(await DoRequestAsync("GetUploadDetails", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetUploadDetailsResponse GetUploadDetails(GetUploadDetailsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetUploadDetailsWithOptions(request, runtime);
        }

        public async Task<GetUploadDetailsResponse> GetUploadDetailsAsync(GetUploadDetailsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetUploadDetailsWithOptionsAsync(request, runtime);
        }

        public DescribeVodStorageDataResponse DescribeVodStorageDataWithOptions(DescribeVodStorageDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodStorageDataResponse>(DoRequest("DescribeVodStorageData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodStorageDataResponse> DescribeVodStorageDataWithOptionsAsync(DescribeVodStorageDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodStorageDataResponse>(await DoRequestAsync("DescribeVodStorageData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodStorageDataResponse DescribeVodStorageData(DescribeVodStorageDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodStorageDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodStorageDataResponse> DescribeVodStorageDataAsync(DescribeVodStorageDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodStorageDataWithOptionsAsync(request, runtime);
        }

        public DescribeVodAIDataResponse DescribeVodAIDataWithOptions(DescribeVodAIDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodAIDataResponse>(DoRequest("DescribeVodAIData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodAIDataResponse> DescribeVodAIDataWithOptionsAsync(DescribeVodAIDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodAIDataResponse>(await DoRequestAsync("DescribeVodAIData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodAIDataResponse DescribeVodAIData(DescribeVodAIDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodAIDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodAIDataResponse> DescribeVodAIDataAsync(DescribeVodAIDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodAIDataWithOptionsAsync(request, runtime);
        }

        public DescribeVodTranscodeDataResponse DescribeVodTranscodeDataWithOptions(DescribeVodTranscodeDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodTranscodeDataResponse>(DoRequest("DescribeVodTranscodeData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodTranscodeDataResponse> DescribeVodTranscodeDataWithOptionsAsync(DescribeVodTranscodeDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodTranscodeDataResponse>(await DoRequestAsync("DescribeVodTranscodeData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodTranscodeDataResponse DescribeVodTranscodeData(DescribeVodTranscodeDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodTranscodeDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodTranscodeDataResponse> DescribeVodTranscodeDataAsync(DescribeVodTranscodeDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodTranscodeDataWithOptionsAsync(request, runtime);
        }

        public DeleteMultipartUploadResponse DeleteMultipartUploadWithOptions(DeleteMultipartUploadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMultipartUploadResponse>(DoRequest("DeleteMultipartUpload", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMultipartUploadResponse> DeleteMultipartUploadWithOptionsAsync(DeleteMultipartUploadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMultipartUploadResponse>(await DoRequestAsync("DeleteMultipartUpload", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMultipartUploadResponse DeleteMultipartUpload(DeleteMultipartUploadRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMultipartUploadWithOptions(request, runtime);
        }

        public async Task<DeleteMultipartUploadResponse> DeleteMultipartUploadAsync(DeleteMultipartUploadRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMultipartUploadWithOptionsAsync(request, runtime);
        }

        public GetAttachedMediaInfoResponse GetAttachedMediaInfoWithOptions(GetAttachedMediaInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAttachedMediaInfoResponse>(DoRequest("GetAttachedMediaInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAttachedMediaInfoResponse> GetAttachedMediaInfoWithOptionsAsync(GetAttachedMediaInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAttachedMediaInfoResponse>(await DoRequestAsync("GetAttachedMediaInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAttachedMediaInfoResponse GetAttachedMediaInfo(GetAttachedMediaInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAttachedMediaInfoWithOptions(request, runtime);
        }

        public async Task<GetAttachedMediaInfoResponse> GetAttachedMediaInfoAsync(GetAttachedMediaInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAttachedMediaInfoWithOptionsAsync(request, runtime);
        }

        public DeleteAttachedMediaResponse DeleteAttachedMediaWithOptions(DeleteAttachedMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAttachedMediaResponse>(DoRequest("DeleteAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAttachedMediaResponse> DeleteAttachedMediaWithOptionsAsync(DeleteAttachedMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAttachedMediaResponse>(await DoRequestAsync("DeleteAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAttachedMediaResponse DeleteAttachedMedia(DeleteAttachedMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAttachedMediaWithOptions(request, runtime);
        }

        public async Task<DeleteAttachedMediaResponse> DeleteAttachedMediaAsync(DeleteAttachedMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAttachedMediaWithOptionsAsync(request, runtime);
        }

        public UpdateAttachedMediaInfosResponse UpdateAttachedMediaInfosWithOptions(UpdateAttachedMediaInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAttachedMediaInfosResponse>(DoRequest("UpdateAttachedMediaInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAttachedMediaInfosResponse> UpdateAttachedMediaInfosWithOptionsAsync(UpdateAttachedMediaInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAttachedMediaInfosResponse>(await DoRequestAsync("UpdateAttachedMediaInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAttachedMediaInfosResponse UpdateAttachedMediaInfos(UpdateAttachedMediaInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAttachedMediaInfosWithOptions(request, runtime);
        }

        public async Task<UpdateAttachedMediaInfosResponse> UpdateAttachedMediaInfosAsync(UpdateAttachedMediaInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAttachedMediaInfosWithOptionsAsync(request, runtime);
        }

        public AttachAppPolicyToIdentityResponse AttachAppPolicyToIdentityWithOptions(AttachAppPolicyToIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachAppPolicyToIdentityResponse>(DoRequest("AttachAppPolicyToIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AttachAppPolicyToIdentityResponse> AttachAppPolicyToIdentityWithOptionsAsync(AttachAppPolicyToIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AttachAppPolicyToIdentityResponse>(await DoRequestAsync("AttachAppPolicyToIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AttachAppPolicyToIdentityResponse AttachAppPolicyToIdentity(AttachAppPolicyToIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AttachAppPolicyToIdentityWithOptions(request, runtime);
        }

        public async Task<AttachAppPolicyToIdentityResponse> AttachAppPolicyToIdentityAsync(AttachAppPolicyToIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AttachAppPolicyToIdentityWithOptionsAsync(request, runtime);
        }

        public DetachAppPolicyFromIdentityResponse DetachAppPolicyFromIdentityWithOptions(DetachAppPolicyFromIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachAppPolicyFromIdentityResponse>(DoRequest("DetachAppPolicyFromIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetachAppPolicyFromIdentityResponse> DetachAppPolicyFromIdentityWithOptionsAsync(DetachAppPolicyFromIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetachAppPolicyFromIdentityResponse>(await DoRequestAsync("DetachAppPolicyFromIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DetachAppPolicyFromIdentityResponse DetachAppPolicyFromIdentity(DetachAppPolicyFromIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetachAppPolicyFromIdentityWithOptions(request, runtime);
        }

        public async Task<DetachAppPolicyFromIdentityResponse> DetachAppPolicyFromIdentityAsync(DetachAppPolicyFromIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetachAppPolicyFromIdentityWithOptionsAsync(request, runtime);
        }

        public ListAppPoliciesForIdentityResponse ListAppPoliciesForIdentityWithOptions(ListAppPoliciesForIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAppPoliciesForIdentityResponse>(DoRequest("ListAppPoliciesForIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAppPoliciesForIdentityResponse> ListAppPoliciesForIdentityWithOptionsAsync(ListAppPoliciesForIdentityRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAppPoliciesForIdentityResponse>(await DoRequestAsync("ListAppPoliciesForIdentity", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListAppPoliciesForIdentityResponse ListAppPoliciesForIdentity(ListAppPoliciesForIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAppPoliciesForIdentityWithOptions(request, runtime);
        }

        public async Task<ListAppPoliciesForIdentityResponse> ListAppPoliciesForIdentityAsync(ListAppPoliciesForIdentityRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAppPoliciesForIdentityWithOptionsAsync(request, runtime);
        }

        public CreateAppInfoResponse CreateAppInfoWithOptions(CreateAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAppInfoResponse>(DoRequest("CreateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAppInfoResponse> CreateAppInfoWithOptionsAsync(CreateAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAppInfoResponse>(await DoRequestAsync("CreateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public CreateAppInfoResponse CreateAppInfo(CreateAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAppInfoWithOptions(request, runtime);
        }

        public async Task<CreateAppInfoResponse> CreateAppInfoAsync(CreateAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAppInfoWithOptionsAsync(request, runtime);
        }

        public GetAppInfosResponse GetAppInfosWithOptions(GetAppInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAppInfosResponse>(DoRequest("GetAppInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAppInfosResponse> GetAppInfosWithOptionsAsync(GetAppInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAppInfosResponse>(await DoRequestAsync("GetAppInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAppInfosResponse GetAppInfos(GetAppInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAppInfosWithOptions(request, runtime);
        }

        public async Task<GetAppInfosResponse> GetAppInfosAsync(GetAppInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAppInfosWithOptionsAsync(request, runtime);
        }

        public UpdateAppInfoResponse UpdateAppInfoWithOptions(UpdateAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAppInfoResponse>(DoRequest("UpdateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAppInfoResponse> UpdateAppInfoWithOptionsAsync(UpdateAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAppInfoResponse>(await DoRequestAsync("UpdateAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAppInfoResponse UpdateAppInfo(UpdateAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAppInfoWithOptions(request, runtime);
        }

        public async Task<UpdateAppInfoResponse> UpdateAppInfoAsync(UpdateAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAppInfoWithOptionsAsync(request, runtime);
        }

        public DeleteAppInfoResponse DeleteAppInfoWithOptions(DeleteAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAppInfoResponse>(DoRequest("DeleteAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAppInfoResponse> DeleteAppInfoWithOptionsAsync(DeleteAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAppInfoResponse>(await DoRequestAsync("DeleteAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAppInfoResponse DeleteAppInfo(DeleteAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAppInfoWithOptions(request, runtime);
        }

        public async Task<DeleteAppInfoResponse> DeleteAppInfoAsync(DeleteAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAppInfoWithOptionsAsync(request, runtime);
        }

        public ListAppInfoResponse ListAppInfoWithOptions(ListAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAppInfoResponse>(DoRequest("ListAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAppInfoResponse> ListAppInfoWithOptionsAsync(ListAppInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAppInfoResponse>(await DoRequestAsync("ListAppInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListAppInfoResponse ListAppInfo(ListAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAppInfoWithOptions(request, runtime);
        }

        public async Task<ListAppInfoResponse> ListAppInfoAsync(ListAppInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAppInfoWithOptionsAsync(request, runtime);
        }

        public MoveAppResourceResponse MoveAppResourceWithOptions(MoveAppResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MoveAppResourceResponse>(DoRequest("MoveAppResource", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<MoveAppResourceResponse> MoveAppResourceWithOptionsAsync(MoveAppResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<MoveAppResourceResponse>(await DoRequestAsync("MoveAppResource", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public MoveAppResourceResponse MoveAppResource(MoveAppResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return MoveAppResourceWithOptions(request, runtime);
        }

        public async Task<MoveAppResourceResponse> MoveAppResourceAsync(MoveAppResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await MoveAppResourceWithOptionsAsync(request, runtime);
        }

        public DeleteMessageCallbackResponse DeleteMessageCallbackWithOptions(DeleteMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMessageCallbackResponse>(DoRequest("DeleteMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMessageCallbackResponse> DeleteMessageCallbackWithOptionsAsync(DeleteMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMessageCallbackResponse>(await DoRequestAsync("DeleteMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMessageCallbackResponse DeleteMessageCallback(DeleteMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMessageCallbackWithOptions(request, runtime);
        }

        public async Task<DeleteMessageCallbackResponse> DeleteMessageCallbackAsync(DeleteMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMessageCallbackWithOptionsAsync(request, runtime);
        }

        public GetTranscodeSummaryResponse GetTranscodeSummaryWithOptions(GetTranscodeSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeSummaryResponse>(DoRequest("GetTranscodeSummary", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTranscodeSummaryResponse> GetTranscodeSummaryWithOptionsAsync(GetTranscodeSummaryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeSummaryResponse>(await DoRequestAsync("GetTranscodeSummary", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetTranscodeSummaryResponse GetTranscodeSummary(GetTranscodeSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTranscodeSummaryWithOptions(request, runtime);
        }

        public async Task<GetTranscodeSummaryResponse> GetTranscodeSummaryAsync(GetTranscodeSummaryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTranscodeSummaryWithOptionsAsync(request, runtime);
        }

        public ListTranscodeTaskResponse ListTranscodeTaskWithOptions(ListTranscodeTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTranscodeTaskResponse>(DoRequest("ListTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTranscodeTaskResponse> ListTranscodeTaskWithOptionsAsync(ListTranscodeTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTranscodeTaskResponse>(await DoRequestAsync("ListTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListTranscodeTaskResponse ListTranscodeTask(ListTranscodeTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTranscodeTaskWithOptions(request, runtime);
        }

        public async Task<ListTranscodeTaskResponse> ListTranscodeTaskAsync(ListTranscodeTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTranscodeTaskWithOptionsAsync(request, runtime);
        }

        public GetTranscodeTaskResponse GetTranscodeTaskWithOptions(GetTranscodeTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeTaskResponse>(DoRequest("GetTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTranscodeTaskResponse> GetTranscodeTaskWithOptionsAsync(GetTranscodeTaskRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeTaskResponse>(await DoRequestAsync("GetTranscodeTask", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetTranscodeTaskResponse GetTranscodeTask(GetTranscodeTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTranscodeTaskWithOptions(request, runtime);
        }

        public async Task<GetTranscodeTaskResponse> GetTranscodeTaskAsync(GetTranscodeTaskRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTranscodeTaskWithOptionsAsync(request, runtime);
        }

        public GetURLUploadInfosResponse GetURLUploadInfosWithOptions(GetURLUploadInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetURLUploadInfosResponse>(DoRequest("GetURLUploadInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetURLUploadInfosResponse> GetURLUploadInfosWithOptionsAsync(GetURLUploadInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetURLUploadInfosResponse>(await DoRequestAsync("GetURLUploadInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetURLUploadInfosResponse GetURLUploadInfos(GetURLUploadInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetURLUploadInfosWithOptions(request, runtime);
        }

        public async Task<GetURLUploadInfosResponse> GetURLUploadInfosAsync(GetURLUploadInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetURLUploadInfosWithOptionsAsync(request, runtime);
        }

        public UpdateTranscodeTemplateGroupResponse UpdateTranscodeTemplateGroupWithOptions(UpdateTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateTranscodeTemplateGroupResponse>(DoRequest("UpdateTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateTranscodeTemplateGroupResponse> UpdateTranscodeTemplateGroupWithOptionsAsync(UpdateTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateTranscodeTemplateGroupResponse>(await DoRequestAsync("UpdateTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateTranscodeTemplateGroupResponse UpdateTranscodeTemplateGroup(UpdateTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<UpdateTranscodeTemplateGroupResponse> UpdateTranscodeTemplateGroupAsync(UpdateTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public AddTranscodeTemplateGroupResponse AddTranscodeTemplateGroupWithOptions(AddTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTranscodeTemplateGroupResponse>(DoRequest("AddTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddTranscodeTemplateGroupResponse> AddTranscodeTemplateGroupWithOptionsAsync(AddTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddTranscodeTemplateGroupResponse>(await DoRequestAsync("AddTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddTranscodeTemplateGroupResponse AddTranscodeTemplateGroup(AddTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<AddTranscodeTemplateGroupResponse> AddTranscodeTemplateGroupAsync(AddTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public DeleteTranscodeTemplateGroupResponse DeleteTranscodeTemplateGroupWithOptions(DeleteTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTranscodeTemplateGroupResponse>(DoRequest("DeleteTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteTranscodeTemplateGroupResponse> DeleteTranscodeTemplateGroupWithOptionsAsync(DeleteTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteTranscodeTemplateGroupResponse>(await DoRequestAsync("DeleteTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteTranscodeTemplateGroupResponse DeleteTranscodeTemplateGroup(DeleteTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<DeleteTranscodeTemplateGroupResponse> DeleteTranscodeTemplateGroupAsync(DeleteTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public GetTranscodeTemplateGroupResponse GetTranscodeTemplateGroupWithOptions(GetTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeTemplateGroupResponse>(DoRequest("GetTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetTranscodeTemplateGroupResponse> GetTranscodeTemplateGroupWithOptionsAsync(GetTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetTranscodeTemplateGroupResponse>(await DoRequestAsync("GetTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetTranscodeTemplateGroupResponse GetTranscodeTemplateGroup(GetTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<GetTranscodeTemplateGroupResponse> GetTranscodeTemplateGroupAsync(GetTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public SetDefaultTranscodeTemplateGroupResponse SetDefaultTranscodeTemplateGroupWithOptions(SetDefaultTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultTranscodeTemplateGroupResponse>(DoRequest("SetDefaultTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDefaultTranscodeTemplateGroupResponse> SetDefaultTranscodeTemplateGroupWithOptionsAsync(SetDefaultTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultTranscodeTemplateGroupResponse>(await DoRequestAsync("SetDefaultTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetDefaultTranscodeTemplateGroupResponse SetDefaultTranscodeTemplateGroup(SetDefaultTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDefaultTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<SetDefaultTranscodeTemplateGroupResponse> SetDefaultTranscodeTemplateGroupAsync(SetDefaultTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDefaultTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public ListTranscodeTemplateGroupResponse ListTranscodeTemplateGroupWithOptions(ListTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTranscodeTemplateGroupResponse>(DoRequest("ListTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListTranscodeTemplateGroupResponse> ListTranscodeTemplateGroupWithOptionsAsync(ListTranscodeTemplateGroupRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListTranscodeTemplateGroupResponse>(await DoRequestAsync("ListTranscodeTemplateGroup", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListTranscodeTemplateGroupResponse ListTranscodeTemplateGroup(ListTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListTranscodeTemplateGroupWithOptions(request, runtime);
        }

        public async Task<ListTranscodeTemplateGroupResponse> ListTranscodeTemplateGroupAsync(ListTranscodeTemplateGroupRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListTranscodeTemplateGroupWithOptionsAsync(request, runtime);
        }

        public GetAIMediaAuditJobResponse GetAIMediaAuditJobWithOptions(GetAIMediaAuditJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAIMediaAuditJobResponse>(DoRequest("GetAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAIMediaAuditJobResponse> GetAIMediaAuditJobWithOptionsAsync(GetAIMediaAuditJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAIMediaAuditJobResponse>(await DoRequestAsync("GetAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAIMediaAuditJobResponse GetAIMediaAuditJob(GetAIMediaAuditJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAIMediaAuditJobWithOptions(request, runtime);
        }

        public async Task<GetAIMediaAuditJobResponse> GetAIMediaAuditJobAsync(GetAIMediaAuditJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAIMediaAuditJobWithOptionsAsync(request, runtime);
        }

        public SubmitAIMediaAuditJobResponse SubmitAIMediaAuditJobWithOptions(SubmitAIMediaAuditJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitAIMediaAuditJobResponse>(DoRequest("SubmitAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitAIMediaAuditJobResponse> SubmitAIMediaAuditJobWithOptionsAsync(SubmitAIMediaAuditJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitAIMediaAuditJobResponse>(await DoRequestAsync("SubmitAIMediaAuditJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitAIMediaAuditJobResponse SubmitAIMediaAuditJob(SubmitAIMediaAuditJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitAIMediaAuditJobWithOptions(request, runtime);
        }

        public async Task<SubmitAIMediaAuditJobResponse> SubmitAIMediaAuditJobAsync(SubmitAIMediaAuditJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitAIMediaAuditJobWithOptionsAsync(request, runtime);
        }

        public GetMediaAuditResultResponse GetMediaAuditResultWithOptions(GetMediaAuditResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultResponse>(DoRequest("GetMediaAuditResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMediaAuditResultResponse> GetMediaAuditResultWithOptionsAsync(GetMediaAuditResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultResponse>(await DoRequestAsync("GetMediaAuditResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMediaAuditResultResponse GetMediaAuditResult(GetMediaAuditResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMediaAuditResultWithOptions(request, runtime);
        }

        public async Task<GetMediaAuditResultResponse> GetMediaAuditResultAsync(GetMediaAuditResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMediaAuditResultWithOptionsAsync(request, runtime);
        }

        public GetMediaAuditResultDetailResponse GetMediaAuditResultDetailWithOptions(GetMediaAuditResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultDetailResponse>(DoRequest("GetMediaAuditResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMediaAuditResultDetailResponse> GetMediaAuditResultDetailWithOptionsAsync(GetMediaAuditResultDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultDetailResponse>(await DoRequestAsync("GetMediaAuditResultDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMediaAuditResultDetailResponse GetMediaAuditResultDetail(GetMediaAuditResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMediaAuditResultDetailWithOptions(request, runtime);
        }

        public async Task<GetMediaAuditResultDetailResponse> GetMediaAuditResultDetailAsync(GetMediaAuditResultDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMediaAuditResultDetailWithOptionsAsync(request, runtime);
        }

        public GetMediaAuditResultTimelineResponse GetMediaAuditResultTimelineWithOptions(GetMediaAuditResultTimelineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultTimelineResponse>(DoRequest("GetMediaAuditResultTimeline", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMediaAuditResultTimelineResponse> GetMediaAuditResultTimelineWithOptionsAsync(GetMediaAuditResultTimelineRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaAuditResultTimelineResponse>(await DoRequestAsync("GetMediaAuditResultTimeline", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMediaAuditResultTimelineResponse GetMediaAuditResultTimeline(GetMediaAuditResultTimelineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMediaAuditResultTimelineWithOptions(request, runtime);
        }

        public async Task<GetMediaAuditResultTimelineResponse> GetMediaAuditResultTimelineAsync(GetMediaAuditResultTimelineRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMediaAuditResultTimelineWithOptionsAsync(request, runtime);
        }

        public AddAITemplateResponse AddAITemplateWithOptions(AddAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddAITemplateResponse>(DoRequest("AddAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddAITemplateResponse> AddAITemplateWithOptionsAsync(AddAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddAITemplateResponse>(await DoRequestAsync("AddAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddAITemplateResponse AddAITemplate(AddAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddAITemplateWithOptions(request, runtime);
        }

        public async Task<AddAITemplateResponse> AddAITemplateAsync(AddAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddAITemplateWithOptionsAsync(request, runtime);
        }

        public DeleteAITemplateResponse DeleteAITemplateWithOptions(DeleteAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAITemplateResponse>(DoRequest("DeleteAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteAITemplateResponse> DeleteAITemplateWithOptionsAsync(DeleteAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteAITemplateResponse>(await DoRequestAsync("DeleteAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteAITemplateResponse DeleteAITemplate(DeleteAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteAITemplateWithOptions(request, runtime);
        }

        public async Task<DeleteAITemplateResponse> DeleteAITemplateAsync(DeleteAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteAITemplateWithOptionsAsync(request, runtime);
        }

        public UpdateAITemplateResponse UpdateAITemplateWithOptions(UpdateAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAITemplateResponse>(DoRequest("UpdateAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateAITemplateResponse> UpdateAITemplateWithOptionsAsync(UpdateAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateAITemplateResponse>(await DoRequestAsync("UpdateAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateAITemplateResponse UpdateAITemplate(UpdateAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateAITemplateWithOptions(request, runtime);
        }

        public async Task<UpdateAITemplateResponse> UpdateAITemplateAsync(UpdateAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateAITemplateWithOptionsAsync(request, runtime);
        }

        public GetAITemplateResponse GetAITemplateWithOptions(GetAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAITemplateResponse>(DoRequest("GetAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAITemplateResponse> GetAITemplateWithOptionsAsync(GetAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAITemplateResponse>(await DoRequestAsync("GetAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAITemplateResponse GetAITemplate(GetAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAITemplateWithOptions(request, runtime);
        }

        public async Task<GetAITemplateResponse> GetAITemplateAsync(GetAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAITemplateWithOptionsAsync(request, runtime);
        }

        public ListAITemplateResponse ListAITemplateWithOptions(ListAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAITemplateResponse>(DoRequest("ListAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAITemplateResponse> ListAITemplateWithOptionsAsync(ListAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAITemplateResponse>(await DoRequestAsync("ListAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListAITemplateResponse ListAITemplate(ListAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAITemplateWithOptions(request, runtime);
        }

        public async Task<ListAITemplateResponse> ListAITemplateAsync(ListAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAITemplateWithOptionsAsync(request, runtime);
        }

        public GetDefaultAITemplateResponse GetDefaultAITemplateWithOptions(GetDefaultAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDefaultAITemplateResponse>(DoRequest("GetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetDefaultAITemplateResponse> GetDefaultAITemplateWithOptionsAsync(GetDefaultAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetDefaultAITemplateResponse>(await DoRequestAsync("GetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetDefaultAITemplateResponse GetDefaultAITemplate(GetDefaultAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetDefaultAITemplateWithOptions(request, runtime);
        }

        public async Task<GetDefaultAITemplateResponse> GetDefaultAITemplateAsync(GetDefaultAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetDefaultAITemplateWithOptionsAsync(request, runtime);
        }

        public SetDefaultAITemplateResponse SetDefaultAITemplateWithOptions(SetDefaultAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultAITemplateResponse>(DoRequest("SetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDefaultAITemplateResponse> SetDefaultAITemplateWithOptionsAsync(SetDefaultAITemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultAITemplateResponse>(await DoRequestAsync("SetDefaultAITemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetDefaultAITemplateResponse SetDefaultAITemplate(SetDefaultAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDefaultAITemplateWithOptions(request, runtime);
        }

        public async Task<SetDefaultAITemplateResponse> SetDefaultAITemplateAsync(SetDefaultAITemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDefaultAITemplateWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainLogResponse DescribeVodDomainLogWithOptions(DescribeVodDomainLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainLogResponse>(DoRequest("DescribeVodDomainLog", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodDomainLogResponse> DescribeVodDomainLogWithOptionsAsync(DescribeVodDomainLogRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainLogResponse>(await DoRequestAsync("DescribeVodDomainLog", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodDomainLogResponse DescribeVodDomainLog(DescribeVodDomainLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainLogWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainLogResponse> DescribeVodDomainLogAsync(DescribeVodDomainLogRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainLogWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainCertificateInfoResponse DescribeVodDomainCertificateInfoWithOptions(DescribeVodDomainCertificateInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainCertificateInfoResponse>(DoRequest("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodDomainCertificateInfoResponse> DescribeVodDomainCertificateInfoWithOptionsAsync(DescribeVodDomainCertificateInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainCertificateInfoResponse>(await DoRequestAsync("DescribeVodDomainCertificateInfo", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodDomainCertificateInfoResponse DescribeVodDomainCertificateInfo(DescribeVodDomainCertificateInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainCertificateInfoWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainCertificateInfoResponse> DescribeVodDomainCertificateInfoAsync(DescribeVodDomainCertificateInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainCertificateInfoWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainTrafficDataResponse DescribeVodDomainTrafficDataWithOptions(DescribeVodDomainTrafficDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainTrafficDataResponse>(DoRequest("DescribeVodDomainTrafficData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodDomainTrafficDataResponse> DescribeVodDomainTrafficDataWithOptionsAsync(DescribeVodDomainTrafficDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainTrafficDataResponse>(await DoRequestAsync("DescribeVodDomainTrafficData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodDomainTrafficDataResponse DescribeVodDomainTrafficData(DescribeVodDomainTrafficDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainTrafficDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainTrafficDataResponse> DescribeVodDomainTrafficDataAsync(DescribeVodDomainTrafficDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainTrafficDataWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainBpsDataResponse DescribeVodDomainBpsDataWithOptions(DescribeVodDomainBpsDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainBpsDataResponse>(DoRequest("DescribeVodDomainBpsData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodDomainBpsDataResponse> DescribeVodDomainBpsDataWithOptionsAsync(DescribeVodDomainBpsDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainBpsDataResponse>(await DoRequestAsync("DescribeVodDomainBpsData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodDomainBpsDataResponse DescribeVodDomainBpsData(DescribeVodDomainBpsDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainBpsDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainBpsDataResponse> DescribeVodDomainBpsDataAsync(DescribeVodDomainBpsDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainBpsDataWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainUsageDataResponse DescribeVodDomainUsageDataWithOptions(DescribeVodDomainUsageDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainUsageDataResponse>(DoRequest("DescribeVodDomainUsageData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribeVodDomainUsageDataResponse> DescribeVodDomainUsageDataWithOptionsAsync(DescribeVodDomainUsageDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainUsageDataResponse>(await DoRequestAsync("DescribeVodDomainUsageData", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribeVodDomainUsageDataResponse DescribeVodDomainUsageData(DescribeVodDomainUsageDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainUsageDataWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainUsageDataResponse> DescribeVodDomainUsageDataAsync(DescribeVodDomainUsageDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainUsageDataWithOptionsAsync(request, runtime);
        }

        public DescribeVodCertificateListResponse DescribeVodCertificateListWithOptions(DescribeVodCertificateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodCertificateListResponse>(DoRequest("DescribeVodCertificateList", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodCertificateListResponse> DescribeVodCertificateListWithOptionsAsync(DescribeVodCertificateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodCertificateListResponse>(await DoRequestAsync("DescribeVodCertificateList", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodCertificateListResponse DescribeVodCertificateList(DescribeVodCertificateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodCertificateListWithOptions(request, runtime);
        }

        public async Task<DescribeVodCertificateListResponse> DescribeVodCertificateListAsync(DescribeVodCertificateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodCertificateListWithOptionsAsync(request, runtime);
        }

        public BatchStopVodDomainResponse BatchStopVodDomainWithOptions(BatchStopVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchStopVodDomainResponse>(DoRequest("BatchStopVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BatchStopVodDomainResponse> BatchStopVodDomainWithOptionsAsync(BatchStopVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchStopVodDomainResponse>(await DoRequestAsync("BatchStopVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public BatchStopVodDomainResponse BatchStopVodDomain(BatchStopVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchStopVodDomainWithOptions(request, runtime);
        }

        public async Task<BatchStopVodDomainResponse> BatchStopVodDomainAsync(BatchStopVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchStopVodDomainWithOptionsAsync(request, runtime);
        }

        public DeleteVodDomainResponse DeleteVodDomainWithOptions(DeleteVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodDomainResponse>(DoRequest("DeleteVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVodDomainResponse> DeleteVodDomainWithOptionsAsync(DeleteVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodDomainResponse>(await DoRequestAsync("DeleteVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVodDomainResponse DeleteVodDomain(DeleteVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVodDomainWithOptions(request, runtime);
        }

        public async Task<DeleteVodDomainResponse> DeleteVodDomainAsync(DeleteVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVodDomainWithOptionsAsync(request, runtime);
        }

        public SetVodDomainCertificateResponse SetVodDomainCertificateWithOptions(SetVodDomainCertificateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetVodDomainCertificateResponse>(DoRequest("SetVodDomainCertificate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetVodDomainCertificateResponse> SetVodDomainCertificateWithOptionsAsync(SetVodDomainCertificateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetVodDomainCertificateResponse>(await DoRequestAsync("SetVodDomainCertificate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetVodDomainCertificateResponse SetVodDomainCertificate(SetVodDomainCertificateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetVodDomainCertificateWithOptions(request, runtime);
        }

        public async Task<SetVodDomainCertificateResponse> SetVodDomainCertificateAsync(SetVodDomainCertificateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetVodDomainCertificateWithOptionsAsync(request, runtime);
        }

        public DeleteVodSpecificConfigResponse DeleteVodSpecificConfigWithOptions(DeleteVodSpecificConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodSpecificConfigResponse>(DoRequest("DeleteVodSpecificConfig", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVodSpecificConfigResponse> DeleteVodSpecificConfigWithOptionsAsync(DeleteVodSpecificConfigRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodSpecificConfigResponse>(await DoRequestAsync("DeleteVodSpecificConfig", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVodSpecificConfigResponse DeleteVodSpecificConfig(DeleteVodSpecificConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVodSpecificConfigWithOptions(request, runtime);
        }

        public async Task<DeleteVodSpecificConfigResponse> DeleteVodSpecificConfigAsync(DeleteVodSpecificConfigRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVodSpecificConfigWithOptionsAsync(request, runtime);
        }

        public BatchSetVodDomainConfigsResponse BatchSetVodDomainConfigsWithOptions(BatchSetVodDomainConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchSetVodDomainConfigsResponse>(DoRequest("BatchSetVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BatchSetVodDomainConfigsResponse> BatchSetVodDomainConfigsWithOptionsAsync(BatchSetVodDomainConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchSetVodDomainConfigsResponse>(await DoRequestAsync("BatchSetVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public BatchSetVodDomainConfigsResponse BatchSetVodDomainConfigs(BatchSetVodDomainConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchSetVodDomainConfigsWithOptions(request, runtime);
        }

        public async Task<BatchSetVodDomainConfigsResponse> BatchSetVodDomainConfigsAsync(BatchSetVodDomainConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchSetVodDomainConfigsWithOptionsAsync(request, runtime);
        }

        public AddVodDomainResponse AddVodDomainWithOptions(AddVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddVodDomainResponse>(DoRequest("AddVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddVodDomainResponse> AddVodDomainWithOptionsAsync(AddVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddVodDomainResponse>(await DoRequestAsync("AddVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddVodDomainResponse AddVodDomain(AddVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddVodDomainWithOptions(request, runtime);
        }

        public async Task<AddVodDomainResponse> AddVodDomainAsync(AddVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddVodDomainWithOptionsAsync(request, runtime);
        }

        public DescribeVodRefreshQuotaResponse DescribeVodRefreshQuotaWithOptions(DescribeVodRefreshQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodRefreshQuotaResponse>(DoRequest("DescribeVodRefreshQuota", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodRefreshQuotaResponse> DescribeVodRefreshQuotaWithOptionsAsync(DescribeVodRefreshQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodRefreshQuotaResponse>(await DoRequestAsync("DescribeVodRefreshQuota", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodRefreshQuotaResponse DescribeVodRefreshQuota(DescribeVodRefreshQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodRefreshQuotaWithOptions(request, runtime);
        }

        public async Task<DescribeVodRefreshQuotaResponse> DescribeVodRefreshQuotaAsync(DescribeVodRefreshQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodRefreshQuotaWithOptionsAsync(request, runtime);
        }

        public DescribeVodRefreshTasksResponse DescribeVodRefreshTasksWithOptions(DescribeVodRefreshTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodRefreshTasksResponse>(DoRequest("DescribeVodRefreshTasks", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodRefreshTasksResponse> DescribeVodRefreshTasksWithOptionsAsync(DescribeVodRefreshTasksRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodRefreshTasksResponse>(await DoRequestAsync("DescribeVodRefreshTasks", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodRefreshTasksResponse DescribeVodRefreshTasks(DescribeVodRefreshTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodRefreshTasksWithOptions(request, runtime);
        }

        public async Task<DescribeVodRefreshTasksResponse> DescribeVodRefreshTasksAsync(DescribeVodRefreshTasksRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodRefreshTasksWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainConfigsResponse DescribeVodDomainConfigsWithOptions(DescribeVodDomainConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainConfigsResponse>(DoRequest("DescribeVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodDomainConfigsResponse> DescribeVodDomainConfigsWithOptionsAsync(DescribeVodDomainConfigsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainConfigsResponse>(await DoRequestAsync("DescribeVodDomainConfigs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodDomainConfigsResponse DescribeVodDomainConfigs(DescribeVodDomainConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainConfigsWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainConfigsResponse> DescribeVodDomainConfigsAsync(DescribeVodDomainConfigsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainConfigsWithOptionsAsync(request, runtime);
        }

        public DescribeVodUserDomainsResponse DescribeVodUserDomainsWithOptions(DescribeVodUserDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodUserDomainsResponse>(DoRequest("DescribeVodUserDomains", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodUserDomainsResponse> DescribeVodUserDomainsWithOptionsAsync(DescribeVodUserDomainsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodUserDomainsResponse>(await DoRequestAsync("DescribeVodUserDomains", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodUserDomainsResponse DescribeVodUserDomains(DescribeVodUserDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodUserDomainsWithOptions(request, runtime);
        }

        public async Task<DescribeVodUserDomainsResponse> DescribeVodUserDomainsAsync(DescribeVodUserDomainsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodUserDomainsWithOptionsAsync(request, runtime);
        }

        public UpdateVodDomainResponse UpdateVodDomainWithOptions(UpdateVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVodDomainResponse>(DoRequest("UpdateVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateVodDomainResponse> UpdateVodDomainWithOptionsAsync(UpdateVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVodDomainResponse>(await DoRequestAsync("UpdateVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateVodDomainResponse UpdateVodDomain(UpdateVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateVodDomainWithOptions(request, runtime);
        }

        public async Task<UpdateVodDomainResponse> UpdateVodDomainAsync(UpdateVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateVodDomainWithOptionsAsync(request, runtime);
        }

        public RefreshVodObjectCachesResponse RefreshVodObjectCachesWithOptions(RefreshVodObjectCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RefreshVodObjectCachesResponse>(DoRequest("RefreshVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RefreshVodObjectCachesResponse> RefreshVodObjectCachesWithOptionsAsync(RefreshVodObjectCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RefreshVodObjectCachesResponse>(await DoRequestAsync("RefreshVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public RefreshVodObjectCachesResponse RefreshVodObjectCaches(RefreshVodObjectCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RefreshVodObjectCachesWithOptions(request, runtime);
        }

        public async Task<RefreshVodObjectCachesResponse> RefreshVodObjectCachesAsync(RefreshVodObjectCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RefreshVodObjectCachesWithOptionsAsync(request, runtime);
        }

        public PreloadVodObjectCachesResponse PreloadVodObjectCachesWithOptions(PreloadVodObjectCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreloadVodObjectCachesResponse>(DoRequest("PreloadVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<PreloadVodObjectCachesResponse> PreloadVodObjectCachesWithOptionsAsync(PreloadVodObjectCachesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<PreloadVodObjectCachesResponse>(await DoRequestAsync("PreloadVodObjectCaches", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public PreloadVodObjectCachesResponse PreloadVodObjectCaches(PreloadVodObjectCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return PreloadVodObjectCachesWithOptions(request, runtime);
        }

        public async Task<PreloadVodObjectCachesResponse> PreloadVodObjectCachesAsync(PreloadVodObjectCachesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await PreloadVodObjectCachesWithOptionsAsync(request, runtime);
        }

        public BatchStartVodDomainResponse BatchStartVodDomainWithOptions(BatchStartVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchStartVodDomainResponse>(DoRequest("BatchStartVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<BatchStartVodDomainResponse> BatchStartVodDomainWithOptionsAsync(BatchStartVodDomainRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchStartVodDomainResponse>(await DoRequestAsync("BatchStartVodDomain", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public BatchStartVodDomainResponse BatchStartVodDomain(BatchStartVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchStartVodDomainWithOptions(request, runtime);
        }

        public async Task<BatchStartVodDomainResponse> BatchStartVodDomainAsync(BatchStartVodDomainRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchStartVodDomainWithOptionsAsync(request, runtime);
        }

        public DescribeVodDomainDetailResponse DescribeVodDomainDetailWithOptions(DescribeVodDomainDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainDetailResponse>(DoRequest("DescribeVodDomainDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeVodDomainDetailResponse> DescribeVodDomainDetailWithOptionsAsync(DescribeVodDomainDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeVodDomainDetailResponse>(await DoRequestAsync("DescribeVodDomainDetail", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DescribeVodDomainDetailResponse DescribeVodDomainDetail(DescribeVodDomainDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeVodDomainDetailWithOptions(request, runtime);
        }

        public async Task<DescribeVodDomainDetailResponse> DescribeVodDomainDetailAsync(DescribeVodDomainDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeVodDomainDetailWithOptionsAsync(request, runtime);
        }

        public DeleteVodTemplateResponse DeleteVodTemplateWithOptions(DeleteVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodTemplateResponse>(DoRequest("DeleteVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVodTemplateResponse> DeleteVodTemplateWithOptionsAsync(DeleteVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVodTemplateResponse>(await DoRequestAsync("DeleteVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVodTemplateResponse DeleteVodTemplate(DeleteVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVodTemplateWithOptions(request, runtime);
        }

        public async Task<DeleteVodTemplateResponse> DeleteVodTemplateAsync(DeleteVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVodTemplateWithOptionsAsync(request, runtime);
        }

        public GetVodTemplateResponse GetVodTemplateWithOptions(GetVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVodTemplateResponse>(DoRequest("GetVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetVodTemplateResponse> GetVodTemplateWithOptionsAsync(GetVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVodTemplateResponse>(await DoRequestAsync("GetVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetVodTemplateResponse GetVodTemplate(GetVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetVodTemplateWithOptions(request, runtime);
        }

        public async Task<GetVodTemplateResponse> GetVodTemplateAsync(GetVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetVodTemplateWithOptionsAsync(request, runtime);
        }

        public ListVodTemplateResponse ListVodTemplateWithOptions(ListVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListVodTemplateResponse>(DoRequest("ListVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListVodTemplateResponse> ListVodTemplateWithOptionsAsync(ListVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListVodTemplateResponse>(await DoRequestAsync("ListVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListVodTemplateResponse ListVodTemplate(ListVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListVodTemplateWithOptions(request, runtime);
        }

        public async Task<ListVodTemplateResponse> ListVodTemplateAsync(ListVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListVodTemplateWithOptionsAsync(request, runtime);
        }

        public UpdateVodTemplateResponse UpdateVodTemplateWithOptions(UpdateVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVodTemplateResponse>(DoRequest("UpdateVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateVodTemplateResponse> UpdateVodTemplateWithOptionsAsync(UpdateVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVodTemplateResponse>(await DoRequestAsync("UpdateVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateVodTemplateResponse UpdateVodTemplate(UpdateVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateVodTemplateWithOptions(request, runtime);
        }

        public async Task<UpdateVodTemplateResponse> UpdateVodTemplateAsync(UpdateVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateVodTemplateWithOptionsAsync(request, runtime);
        }

        public AddVodTemplateResponse AddVodTemplateWithOptions(AddVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddVodTemplateResponse>(DoRequest("AddVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddVodTemplateResponse> AddVodTemplateWithOptionsAsync(AddVodTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddVodTemplateResponse>(await DoRequestAsync("AddVodTemplate", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddVodTemplateResponse AddVodTemplate(AddVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddVodTemplateWithOptions(request, runtime);
        }

        public async Task<AddVodTemplateResponse> AddVodTemplateAsync(AddVodTemplateRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddVodTemplateWithOptionsAsync(request, runtime);
        }

        public CreateUploadAttachedMediaResponse CreateUploadAttachedMediaWithOptions(CreateUploadAttachedMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadAttachedMediaResponse>(DoRequest("CreateUploadAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateUploadAttachedMediaResponse> CreateUploadAttachedMediaWithOptionsAsync(CreateUploadAttachedMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadAttachedMediaResponse>(await DoRequestAsync("CreateUploadAttachedMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public CreateUploadAttachedMediaResponse CreateUploadAttachedMedia(CreateUploadAttachedMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateUploadAttachedMediaWithOptions(request, runtime);
        }

        public async Task<CreateUploadAttachedMediaResponse> CreateUploadAttachedMediaAsync(CreateUploadAttachedMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateUploadAttachedMediaWithOptionsAsync(request, runtime);
        }

        public RegisterMediaResponse RegisterMediaWithOptions(RegisterMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RegisterMediaResponse>(DoRequest("RegisterMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RegisterMediaResponse> RegisterMediaWithOptionsAsync(RegisterMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RegisterMediaResponse>(await DoRequestAsync("RegisterMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public RegisterMediaResponse RegisterMedia(RegisterMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RegisterMediaWithOptions(request, runtime);
        }

        public async Task<RegisterMediaResponse> RegisterMediaAsync(RegisterMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RegisterMediaWithOptionsAsync(request, runtime);
        }

        public DeleteWatermarkResponse DeleteWatermarkWithOptions(DeleteWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteWatermarkResponse>(DoRequest("DeleteWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteWatermarkResponse> DeleteWatermarkWithOptionsAsync(DeleteWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteWatermarkResponse>(await DoRequestAsync("DeleteWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteWatermarkResponse DeleteWatermark(DeleteWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteWatermarkWithOptions(request, runtime);
        }

        public async Task<DeleteWatermarkResponse> DeleteWatermarkAsync(DeleteWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteWatermarkWithOptionsAsync(request, runtime);
        }

        public GetWatermarkResponse GetWatermarkWithOptions(GetWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetWatermarkResponse>(DoRequest("GetWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetWatermarkResponse> GetWatermarkWithOptionsAsync(GetWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetWatermarkResponse>(await DoRequestAsync("GetWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetWatermarkResponse GetWatermark(GetWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetWatermarkWithOptions(request, runtime);
        }

        public async Task<GetWatermarkResponse> GetWatermarkAsync(GetWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetWatermarkWithOptionsAsync(request, runtime);
        }

        public SetDefaultWatermarkResponse SetDefaultWatermarkWithOptions(SetDefaultWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultWatermarkResponse>(DoRequest("SetDefaultWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetDefaultWatermarkResponse> SetDefaultWatermarkWithOptionsAsync(SetDefaultWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetDefaultWatermarkResponse>(await DoRequestAsync("SetDefaultWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetDefaultWatermarkResponse SetDefaultWatermark(SetDefaultWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetDefaultWatermarkWithOptions(request, runtime);
        }

        public async Task<SetDefaultWatermarkResponse> SetDefaultWatermarkAsync(SetDefaultWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetDefaultWatermarkWithOptionsAsync(request, runtime);
        }

        public ListWatermarkResponse ListWatermarkWithOptions(ListWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListWatermarkResponse>(DoRequest("ListWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListWatermarkResponse> ListWatermarkWithOptionsAsync(ListWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListWatermarkResponse>(await DoRequestAsync("ListWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListWatermarkResponse ListWatermark(ListWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListWatermarkWithOptions(request, runtime);
        }

        public async Task<ListWatermarkResponse> ListWatermarkAsync(ListWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListWatermarkWithOptionsAsync(request, runtime);
        }

        public UpdateWatermarkResponse UpdateWatermarkWithOptions(UpdateWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateWatermarkResponse>(DoRequest("UpdateWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateWatermarkResponse> UpdateWatermarkWithOptionsAsync(UpdateWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateWatermarkResponse>(await DoRequestAsync("UpdateWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateWatermarkResponse UpdateWatermark(UpdateWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateWatermarkWithOptions(request, runtime);
        }

        public async Task<UpdateWatermarkResponse> UpdateWatermarkAsync(UpdateWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateWatermarkWithOptionsAsync(request, runtime);
        }

        public AddWatermarkResponse AddWatermarkWithOptions(AddWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddWatermarkResponse>(DoRequest("AddWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddWatermarkResponse> AddWatermarkWithOptionsAsync(AddWatermarkRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddWatermarkResponse>(await DoRequestAsync("AddWatermark", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddWatermarkResponse AddWatermark(AddWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddWatermarkWithOptions(request, runtime);
        }

        public async Task<AddWatermarkResponse> AddWatermarkAsync(AddWatermarkRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddWatermarkWithOptionsAsync(request, runtime);
        }

        public GetMediaDNAResultResponse GetMediaDNAResultWithOptions(GetMediaDNAResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaDNAResultResponse>(DoRequest("GetMediaDNAResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMediaDNAResultResponse> GetMediaDNAResultWithOptionsAsync(GetMediaDNAResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMediaDNAResultResponse>(await DoRequestAsync("GetMediaDNAResult", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMediaDNAResultResponse GetMediaDNAResult(GetMediaDNAResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMediaDNAResultWithOptions(request, runtime);
        }

        public async Task<GetMediaDNAResultResponse> GetMediaDNAResultAsync(GetMediaDNAResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMediaDNAResultWithOptionsAsync(request, runtime);
        }

        public DeleteMezzaninesResponse DeleteMezzaninesWithOptions(DeleteMezzaninesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMezzaninesResponse>(DoRequest("DeleteMezzanines", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteMezzaninesResponse> DeleteMezzaninesWithOptionsAsync(DeleteMezzaninesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteMezzaninesResponse>(await DoRequestAsync("DeleteMezzanines", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteMezzaninesResponse DeleteMezzanines(DeleteMezzaninesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteMezzaninesWithOptions(request, runtime);
        }

        public async Task<DeleteMezzaninesResponse> DeleteMezzaninesAsync(DeleteMezzaninesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteMezzaninesWithOptionsAsync(request, runtime);
        }

        public UpdateImageInfosResponse UpdateImageInfosWithOptions(UpdateImageInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateImageInfosResponse>(DoRequest("UpdateImageInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateImageInfosResponse> UpdateImageInfosWithOptionsAsync(UpdateImageInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateImageInfosResponse>(await DoRequestAsync("UpdateImageInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateImageInfosResponse UpdateImageInfos(UpdateImageInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateImageInfosWithOptions(request, runtime);
        }

        public async Task<UpdateImageInfosResponse> UpdateImageInfosAsync(UpdateImageInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateImageInfosWithOptionsAsync(request, runtime);
        }

        public DeleteImageResponse DeleteImageWithOptions(DeleteImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageResponse>(DoRequest("DeleteImage", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteImageResponse> DeleteImageWithOptionsAsync(DeleteImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteImageResponse>(await DoRequestAsync("DeleteImage", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteImageResponse DeleteImage(DeleteImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteImageWithOptions(request, runtime);
        }

        public async Task<DeleteImageResponse> DeleteImageAsync(DeleteImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteImageWithOptionsAsync(request, runtime);
        }

        public ListAuditSecurityIpResponse ListAuditSecurityIpWithOptions(ListAuditSecurityIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAuditSecurityIpResponse>(DoRequest("ListAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAuditSecurityIpResponse> ListAuditSecurityIpWithOptionsAsync(ListAuditSecurityIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAuditSecurityIpResponse>(await DoRequestAsync("ListAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListAuditSecurityIpResponse ListAuditSecurityIp(ListAuditSecurityIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAuditSecurityIpWithOptions(request, runtime);
        }

        public async Task<ListAuditSecurityIpResponse> ListAuditSecurityIpAsync(ListAuditSecurityIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAuditSecurityIpWithOptionsAsync(request, runtime);
        }

        public SetAuditSecurityIpResponse SetAuditSecurityIpWithOptions(SetAuditSecurityIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetAuditSecurityIpResponse>(DoRequest("SetAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetAuditSecurityIpResponse> SetAuditSecurityIpWithOptionsAsync(SetAuditSecurityIpRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetAuditSecurityIpResponse>(await DoRequestAsync("SetAuditSecurityIp", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetAuditSecurityIpResponse SetAuditSecurityIp(SetAuditSecurityIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetAuditSecurityIpWithOptions(request, runtime);
        }

        public async Task<SetAuditSecurityIpResponse> SetAuditSecurityIpAsync(SetAuditSecurityIpRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetAuditSecurityIpWithOptionsAsync(request, runtime);
        }

        public UploadMediaByURLResponse UploadMediaByURLWithOptions(UploadMediaByURLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadMediaByURLResponse>(DoRequest("UploadMediaByURL", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UploadMediaByURLResponse> UploadMediaByURLWithOptionsAsync(UploadMediaByURLRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UploadMediaByURLResponse>(await DoRequestAsync("UploadMediaByURL", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UploadMediaByURLResponse UploadMediaByURL(UploadMediaByURLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UploadMediaByURLWithOptions(request, runtime);
        }

        public async Task<UploadMediaByURLResponse> UploadMediaByURLAsync(UploadMediaByURLRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UploadMediaByURLWithOptionsAsync(request, runtime);
        }

        public UpdateVideoInfosResponse UpdateVideoInfosWithOptions(UpdateVideoInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVideoInfosResponse>(DoRequest("UpdateVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateVideoInfosResponse> UpdateVideoInfosWithOptionsAsync(UpdateVideoInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVideoInfosResponse>(await DoRequestAsync("UpdateVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateVideoInfosResponse UpdateVideoInfos(UpdateVideoInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateVideoInfosWithOptions(request, runtime);
        }

        public async Task<UpdateVideoInfosResponse> UpdateVideoInfosAsync(UpdateVideoInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateVideoInfosWithOptionsAsync(request, runtime);
        }

        public SearchMediaResponse SearchMediaWithOptions(SearchMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchMediaResponse>(DoRequest("SearchMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchMediaResponse> SearchMediaWithOptionsAsync(SearchMediaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchMediaResponse>(await DoRequestAsync("SearchMedia", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SearchMediaResponse SearchMedia(SearchMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchMediaWithOptions(request, runtime);
        }

        public async Task<SearchMediaResponse> SearchMediaAsync(SearchMediaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchMediaWithOptionsAsync(request, runtime);
        }

        public GetVideoInfosResponse GetVideoInfosWithOptions(GetVideoInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoInfosResponse>(DoRequest("GetVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetVideoInfosResponse> GetVideoInfosWithOptionsAsync(GetVideoInfosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoInfosResponse>(await DoRequestAsync("GetVideoInfos", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetVideoInfosResponse GetVideoInfos(GetVideoInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetVideoInfosWithOptions(request, runtime);
        }

        public async Task<GetVideoInfosResponse> GetVideoInfosAsync(GetVideoInfosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetVideoInfosWithOptionsAsync(request, runtime);
        }

        public SubmitPreprocessJobsResponse SubmitPreprocessJobsWithOptions(SubmitPreprocessJobsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitPreprocessJobsResponse>(DoRequest("SubmitPreprocessJobs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitPreprocessJobsResponse> SubmitPreprocessJobsWithOptionsAsync(SubmitPreprocessJobsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitPreprocessJobsResponse>(await DoRequestAsync("SubmitPreprocessJobs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitPreprocessJobsResponse SubmitPreprocessJobs(SubmitPreprocessJobsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitPreprocessJobsWithOptions(request, runtime);
        }

        public async Task<SubmitPreprocessJobsResponse> SubmitPreprocessJobsAsync(SubmitPreprocessJobsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitPreprocessJobsWithOptionsAsync(request, runtime);
        }

        public DescribePlayVideoStatisResponse DescribePlayVideoStatisWithOptions(DescribePlayVideoStatisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayVideoStatisResponse>(DoRequest("DescribePlayVideoStatis", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribePlayVideoStatisResponse> DescribePlayVideoStatisWithOptionsAsync(DescribePlayVideoStatisRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayVideoStatisResponse>(await DoRequestAsync("DescribePlayVideoStatis", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribePlayVideoStatisResponse DescribePlayVideoStatis(DescribePlayVideoStatisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePlayVideoStatisWithOptions(request, runtime);
        }

        public async Task<DescribePlayVideoStatisResponse> DescribePlayVideoStatisAsync(DescribePlayVideoStatisRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePlayVideoStatisWithOptionsAsync(request, runtime);
        }

        public DescribePlayUserTotalResponse DescribePlayUserTotalWithOptions(DescribePlayUserTotalRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayUserTotalResponse>(DoRequest("DescribePlayUserTotal", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribePlayUserTotalResponse> DescribePlayUserTotalWithOptionsAsync(DescribePlayUserTotalRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayUserTotalResponse>(await DoRequestAsync("DescribePlayUserTotal", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribePlayUserTotalResponse DescribePlayUserTotal(DescribePlayUserTotalRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePlayUserTotalWithOptions(request, runtime);
        }

        public async Task<DescribePlayUserTotalResponse> DescribePlayUserTotalAsync(DescribePlayUserTotalRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePlayUserTotalWithOptionsAsync(request, runtime);
        }

        public DescribePlayUserAvgResponse DescribePlayUserAvgWithOptions(DescribePlayUserAvgRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayUserAvgResponse>(DoRequest("DescribePlayUserAvg", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribePlayUserAvgResponse> DescribePlayUserAvgWithOptionsAsync(DescribePlayUserAvgRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayUserAvgResponse>(await DoRequestAsync("DescribePlayUserAvg", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribePlayUserAvgResponse DescribePlayUserAvg(DescribePlayUserAvgRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePlayUserAvgWithOptions(request, runtime);
        }

        public async Task<DescribePlayUserAvgResponse> DescribePlayUserAvgAsync(DescribePlayUserAvgRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePlayUserAvgWithOptionsAsync(request, runtime);
        }

        public DescribePlayTopVideosResponse DescribePlayTopVideosWithOptions(DescribePlayTopVideosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayTopVideosResponse>(DoRequest("DescribePlayTopVideos", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DescribePlayTopVideosResponse> DescribePlayTopVideosWithOptionsAsync(DescribePlayTopVideosRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePlayTopVideosResponse>(await DoRequestAsync("DescribePlayTopVideos", "HTTPS", "POST", "2017-03-21", "AK", request.ToMap(), null, runtime));
        }

        public DescribePlayTopVideosResponse DescribePlayTopVideos(DescribePlayTopVideosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePlayTopVideosWithOptions(request, runtime);
        }

        public async Task<DescribePlayTopVideosResponse> DescribePlayTopVideosAsync(DescribePlayTopVideosRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePlayTopVideosWithOptionsAsync(request, runtime);
        }

        public ListSnapshotsResponse ListSnapshotsWithOptions(ListSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSnapshotsResponse>(DoRequest("ListSnapshots", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListSnapshotsResponse> ListSnapshotsWithOptionsAsync(ListSnapshotsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListSnapshotsResponse>(await DoRequestAsync("ListSnapshots", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListSnapshotsResponse ListSnapshots(ListSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListSnapshotsWithOptions(request, runtime);
        }

        public async Task<ListSnapshotsResponse> ListSnapshotsAsync(ListSnapshotsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListSnapshotsWithOptionsAsync(request, runtime);
        }

        public SubmitTranscodeJobsResponse SubmitTranscodeJobsWithOptions(SubmitTranscodeJobsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitTranscodeJobsResponse>(DoRequest("SubmitTranscodeJobs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitTranscodeJobsResponse> SubmitTranscodeJobsWithOptionsAsync(SubmitTranscodeJobsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitTranscodeJobsResponse>(await DoRequestAsync("SubmitTranscodeJobs", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitTranscodeJobsResponse SubmitTranscodeJobs(SubmitTranscodeJobsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitTranscodeJobsWithOptions(request, runtime);
        }

        public async Task<SubmitTranscodeJobsResponse> SubmitTranscodeJobsAsync(SubmitTranscodeJobsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitTranscodeJobsWithOptionsAsync(request, runtime);
        }

        public ListLiveRecordVideoResponse ListLiveRecordVideoWithOptions(ListLiveRecordVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListLiveRecordVideoResponse>(DoRequest("ListLiveRecordVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListLiveRecordVideoResponse> ListLiveRecordVideoWithOptionsAsync(ListLiveRecordVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListLiveRecordVideoResponse>(await DoRequestAsync("ListLiveRecordVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListLiveRecordVideoResponse ListLiveRecordVideo(ListLiveRecordVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListLiveRecordVideoWithOptions(request, runtime);
        }

        public async Task<ListLiveRecordVideoResponse> ListLiveRecordVideoAsync(ListLiveRecordVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListLiveRecordVideoWithOptionsAsync(request, runtime);
        }

        public CreateAuditResponse CreateAuditWithOptions(CreateAuditRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAuditResponse>(DoRequest("CreateAudit", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAuditResponse> CreateAuditWithOptionsAsync(CreateAuditRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAuditResponse>(await DoRequestAsync("CreateAudit", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public CreateAuditResponse CreateAudit(CreateAuditRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAuditWithOptions(request, runtime);
        }

        public async Task<CreateAuditResponse> CreateAuditAsync(CreateAuditRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAuditWithOptionsAsync(request, runtime);
        }

        public GetAuditHistoryResponse GetAuditHistoryWithOptions(GetAuditHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAuditHistoryResponse>(DoRequest("GetAuditHistory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAuditHistoryResponse> GetAuditHistoryWithOptionsAsync(GetAuditHistoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAuditHistoryResponse>(await DoRequestAsync("GetAuditHistory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetAuditHistoryResponse GetAuditHistory(GetAuditHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAuditHistoryWithOptions(request, runtime);
        }

        public async Task<GetAuditHistoryResponse> GetAuditHistoryAsync(GetAuditHistoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAuditHistoryWithOptionsAsync(request, runtime);
        }

        public ListAIJobResponse ListAIJobWithOptions(ListAIJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAIJobResponse>(DoRequest("ListAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ListAIJobResponse> ListAIJobWithOptionsAsync(ListAIJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ListAIJobResponse>(await DoRequestAsync("ListAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ListAIJobResponse ListAIJob(ListAIJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ListAIJobWithOptions(request, runtime);
        }

        public async Task<ListAIJobResponse> ListAIJobAsync(ListAIJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ListAIJobWithOptionsAsync(request, runtime);
        }

        public SubmitAIJobResponse SubmitAIJobWithOptions(SubmitAIJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitAIJobResponse>(DoRequest("SubmitAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitAIJobResponse> SubmitAIJobWithOptionsAsync(SubmitAIJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitAIJobResponse>(await DoRequestAsync("SubmitAIJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitAIJobResponse SubmitAIJob(SubmitAIJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitAIJobWithOptions(request, runtime);
        }

        public async Task<SubmitAIJobResponse> SubmitAIJobAsync(SubmitAIJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitAIJobWithOptionsAsync(request, runtime);
        }

        public GetImageInfoResponse GetImageInfoWithOptions(GetImageInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetImageInfoResponse>(DoRequest("GetImageInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetImageInfoResponse> GetImageInfoWithOptionsAsync(GetImageInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetImageInfoResponse>(await DoRequestAsync("GetImageInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetImageInfoResponse GetImageInfo(GetImageInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetImageInfoWithOptions(request, runtime);
        }

        public async Task<GetImageInfoResponse> GetImageInfoAsync(GetImageInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetImageInfoWithOptionsAsync(request, runtime);
        }

        public DeleteStreamResponse DeleteStreamWithOptions(DeleteStreamRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStreamResponse>(DoRequest("DeleteStream", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteStreamResponse> DeleteStreamWithOptionsAsync(DeleteStreamRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteStreamResponse>(await DoRequestAsync("DeleteStream", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteStreamResponse DeleteStream(DeleteStreamRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteStreamWithOptions(request, runtime);
        }

        public async Task<DeleteStreamResponse> DeleteStreamAsync(DeleteStreamRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteStreamWithOptionsAsync(request, runtime);
        }

        public SubmitSnapshotJobResponse SubmitSnapshotJobWithOptions(SubmitSnapshotJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitSnapshotJobResponse>(DoRequest("SubmitSnapshotJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubmitSnapshotJobResponse> SubmitSnapshotJobWithOptionsAsync(SubmitSnapshotJobRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubmitSnapshotJobResponse>(await DoRequestAsync("SubmitSnapshotJob", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SubmitSnapshotJobResponse SubmitSnapshotJob(SubmitSnapshotJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubmitSnapshotJobWithOptions(request, runtime);
        }

        public async Task<SubmitSnapshotJobResponse> SubmitSnapshotJobAsync(SubmitSnapshotJobRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubmitSnapshotJobWithOptionsAsync(request, runtime);
        }

        public UpdateEditingProjectResponse UpdateEditingProjectWithOptions(UpdateEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateEditingProjectResponse>(DoRequest("UpdateEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateEditingProjectResponse> UpdateEditingProjectWithOptionsAsync(UpdateEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateEditingProjectResponse>(await DoRequestAsync("UpdateEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateEditingProjectResponse UpdateEditingProject(UpdateEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateEditingProjectWithOptions(request, runtime);
        }

        public async Task<UpdateEditingProjectResponse> UpdateEditingProjectAsync(UpdateEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateEditingProjectWithOptionsAsync(request, runtime);
        }

        public SetEditingProjectMaterialsResponse SetEditingProjectMaterialsWithOptions(SetEditingProjectMaterialsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetEditingProjectMaterialsResponse>(DoRequest("SetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetEditingProjectMaterialsResponse> SetEditingProjectMaterialsWithOptionsAsync(SetEditingProjectMaterialsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetEditingProjectMaterialsResponse>(await DoRequestAsync("SetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetEditingProjectMaterialsResponse SetEditingProjectMaterials(SetEditingProjectMaterialsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetEditingProjectMaterialsWithOptions(request, runtime);
        }

        public async Task<SetEditingProjectMaterialsResponse> SetEditingProjectMaterialsAsync(SetEditingProjectMaterialsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetEditingProjectMaterialsWithOptionsAsync(request, runtime);
        }

        public SearchEditingProjectResponse SearchEditingProjectWithOptions(SearchEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchEditingProjectResponse>(DoRequest("SearchEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SearchEditingProjectResponse> SearchEditingProjectWithOptionsAsync(SearchEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SearchEditingProjectResponse>(await DoRequestAsync("SearchEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SearchEditingProjectResponse SearchEditingProject(SearchEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SearchEditingProjectWithOptions(request, runtime);
        }

        public async Task<SearchEditingProjectResponse> SearchEditingProjectAsync(SearchEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SearchEditingProjectWithOptionsAsync(request, runtime);
        }

        public ProduceEditingProjectVideoResponse ProduceEditingProjectVideoWithOptions(ProduceEditingProjectVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ProduceEditingProjectVideoResponse>(DoRequest("ProduceEditingProjectVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ProduceEditingProjectVideoResponse> ProduceEditingProjectVideoWithOptionsAsync(ProduceEditingProjectVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ProduceEditingProjectVideoResponse>(await DoRequestAsync("ProduceEditingProjectVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public ProduceEditingProjectVideoResponse ProduceEditingProjectVideo(ProduceEditingProjectVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ProduceEditingProjectVideoWithOptions(request, runtime);
        }

        public async Task<ProduceEditingProjectVideoResponse> ProduceEditingProjectVideoAsync(ProduceEditingProjectVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ProduceEditingProjectVideoWithOptionsAsync(request, runtime);
        }

        public GetEditingProjectMaterialsResponse GetEditingProjectMaterialsWithOptions(GetEditingProjectMaterialsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEditingProjectMaterialsResponse>(DoRequest("GetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetEditingProjectMaterialsResponse> GetEditingProjectMaterialsWithOptionsAsync(GetEditingProjectMaterialsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEditingProjectMaterialsResponse>(await DoRequestAsync("GetEditingProjectMaterials", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetEditingProjectMaterialsResponse GetEditingProjectMaterials(GetEditingProjectMaterialsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetEditingProjectMaterialsWithOptions(request, runtime);
        }

        public async Task<GetEditingProjectMaterialsResponse> GetEditingProjectMaterialsAsync(GetEditingProjectMaterialsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetEditingProjectMaterialsWithOptionsAsync(request, runtime);
        }

        public GetEditingProjectResponse GetEditingProjectWithOptions(GetEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEditingProjectResponse>(DoRequest("GetEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetEditingProjectResponse> GetEditingProjectWithOptionsAsync(GetEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetEditingProjectResponse>(await DoRequestAsync("GetEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetEditingProjectResponse GetEditingProject(GetEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetEditingProjectWithOptions(request, runtime);
        }

        public async Task<GetEditingProjectResponse> GetEditingProjectAsync(GetEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetEditingProjectWithOptionsAsync(request, runtime);
        }

        public DeleteEditingProjectResponse DeleteEditingProjectWithOptions(DeleteEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEditingProjectResponse>(DoRequest("DeleteEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteEditingProjectResponse> DeleteEditingProjectWithOptionsAsync(DeleteEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteEditingProjectResponse>(await DoRequestAsync("DeleteEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteEditingProjectResponse DeleteEditingProject(DeleteEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteEditingProjectWithOptions(request, runtime);
        }

        public async Task<DeleteEditingProjectResponse> DeleteEditingProjectAsync(DeleteEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteEditingProjectWithOptionsAsync(request, runtime);
        }

        public AddEditingProjectResponse AddEditingProjectWithOptions(AddEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddEditingProjectResponse>(DoRequest("AddEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddEditingProjectResponse> AddEditingProjectWithOptionsAsync(AddEditingProjectRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddEditingProjectResponse>(await DoRequestAsync("AddEditingProject", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddEditingProjectResponse AddEditingProject(AddEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddEditingProjectWithOptions(request, runtime);
        }

        public async Task<AddEditingProjectResponse> AddEditingProjectAsync(AddEditingProjectRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddEditingProjectWithOptionsAsync(request, runtime);
        }

        public GetMezzanineInfoResponse GetMezzanineInfoWithOptions(GetMezzanineInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMezzanineInfoResponse>(DoRequest("GetMezzanineInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMezzanineInfoResponse> GetMezzanineInfoWithOptionsAsync(GetMezzanineInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMezzanineInfoResponse>(await DoRequestAsync("GetMezzanineInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMezzanineInfoResponse GetMezzanineInfo(GetMezzanineInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMezzanineInfoWithOptions(request, runtime);
        }

        public async Task<GetMezzanineInfoResponse> GetMezzanineInfoAsync(GetMezzanineInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMezzanineInfoWithOptionsAsync(request, runtime);
        }

        public UpdateCategoryResponse UpdateCategoryWithOptions(UpdateCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCategoryResponse>(DoRequest("UpdateCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateCategoryResponse> UpdateCategoryWithOptionsAsync(UpdateCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateCategoryResponse>(await DoRequestAsync("UpdateCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateCategoryResponse UpdateCategory(UpdateCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateCategoryWithOptions(request, runtime);
        }

        public async Task<UpdateCategoryResponse> UpdateCategoryAsync(UpdateCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateCategoryWithOptionsAsync(request, runtime);
        }

        public GetCategoriesResponse GetCategoriesWithOptions(GetCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCategoriesResponse>(DoRequest("GetCategories", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetCategoriesResponse> GetCategoriesWithOptionsAsync(GetCategoriesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCategoriesResponse>(await DoRequestAsync("GetCategories", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetCategoriesResponse GetCategories(GetCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetCategoriesWithOptions(request, runtime);
        }

        public async Task<GetCategoriesResponse> GetCategoriesAsync(GetCategoriesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetCategoriesWithOptionsAsync(request, runtime);
        }

        public DeleteCategoryResponse DeleteCategoryWithOptions(DeleteCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCategoryResponse>(DoRequest("DeleteCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCategoryResponse> DeleteCategoryWithOptionsAsync(DeleteCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCategoryResponse>(await DoRequestAsync("DeleteCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCategoryResponse DeleteCategory(DeleteCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCategoryWithOptions(request, runtime);
        }

        public async Task<DeleteCategoryResponse> DeleteCategoryAsync(DeleteCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCategoryWithOptionsAsync(request, runtime);
        }

        public AddCategoryResponse AddCategoryWithOptions(AddCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCategoryResponse>(DoRequest("AddCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AddCategoryResponse> AddCategoryWithOptionsAsync(AddCategoryRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddCategoryResponse>(await DoRequestAsync("AddCategory", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public AddCategoryResponse AddCategory(AddCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AddCategoryWithOptions(request, runtime);
        }

        public async Task<AddCategoryResponse> AddCategoryAsync(AddCategoryRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AddCategoryWithOptionsAsync(request, runtime);
        }

        public GetPlayInfoResponse GetPlayInfoWithOptions(GetPlayInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPlayInfoResponse>(DoRequest("GetPlayInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPlayInfoResponse> GetPlayInfoWithOptionsAsync(GetPlayInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPlayInfoResponse>(await DoRequestAsync("GetPlayInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetPlayInfoResponse GetPlayInfo(GetPlayInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPlayInfoWithOptions(request, runtime);
        }

        public async Task<GetPlayInfoResponse> GetPlayInfoAsync(GetPlayInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPlayInfoWithOptionsAsync(request, runtime);
        }

        public CreateUploadImageResponse CreateUploadImageWithOptions(CreateUploadImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadImageResponse>(DoRequest("CreateUploadImage", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateUploadImageResponse> CreateUploadImageWithOptionsAsync(CreateUploadImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadImageResponse>(await DoRequestAsync("CreateUploadImage", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public CreateUploadImageResponse CreateUploadImage(CreateUploadImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateUploadImageWithOptions(request, runtime);
        }

        public async Task<CreateUploadImageResponse> CreateUploadImageAsync(CreateUploadImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateUploadImageWithOptionsAsync(request, runtime);
        }

        public SetMessageCallbackResponse SetMessageCallbackWithOptions(SetMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetMessageCallbackResponse>(DoRequest("SetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetMessageCallbackResponse> SetMessageCallbackWithOptionsAsync(SetMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetMessageCallbackResponse>(await DoRequestAsync("SetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public SetMessageCallbackResponse SetMessageCallback(SetMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetMessageCallbackWithOptions(request, runtime);
        }

        public async Task<SetMessageCallbackResponse> SetMessageCallbackAsync(SetMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetMessageCallbackWithOptionsAsync(request, runtime);
        }

        public GetMessageCallbackResponse GetMessageCallbackWithOptions(GetMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMessageCallbackResponse>(DoRequest("GetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetMessageCallbackResponse> GetMessageCallbackWithOptionsAsync(GetMessageCallbackRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetMessageCallbackResponse>(await DoRequestAsync("GetMessageCallback", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetMessageCallbackResponse GetMessageCallback(GetMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetMessageCallbackWithOptions(request, runtime);
        }

        public async Task<GetMessageCallbackResponse> GetMessageCallbackAsync(GetMessageCallbackRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetMessageCallbackWithOptionsAsync(request, runtime);
        }

        public UpdateVideoInfoResponse UpdateVideoInfoWithOptions(UpdateVideoInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVideoInfoResponse>(DoRequest("UpdateVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpdateVideoInfoResponse> UpdateVideoInfoWithOptionsAsync(UpdateVideoInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpdateVideoInfoResponse>(await DoRequestAsync("UpdateVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public UpdateVideoInfoResponse UpdateVideoInfo(UpdateVideoInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpdateVideoInfoWithOptions(request, runtime);
        }

        public async Task<UpdateVideoInfoResponse> UpdateVideoInfoAsync(UpdateVideoInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpdateVideoInfoWithOptionsAsync(request, runtime);
        }

        public GetVideoPlayAuthResponse GetVideoPlayAuthWithOptions(GetVideoPlayAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoPlayAuthResponse>(DoRequest("GetVideoPlayAuth", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetVideoPlayAuthResponse> GetVideoPlayAuthWithOptionsAsync(GetVideoPlayAuthRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoPlayAuthResponse>(await DoRequestAsync("GetVideoPlayAuth", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetVideoPlayAuthResponse GetVideoPlayAuth(GetVideoPlayAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetVideoPlayAuthWithOptions(request, runtime);
        }

        public async Task<GetVideoPlayAuthResponse> GetVideoPlayAuthAsync(GetVideoPlayAuthRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetVideoPlayAuthWithOptionsAsync(request, runtime);
        }

        public GetVideoListResponse GetVideoListWithOptions(GetVideoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoListResponse>(DoRequest("GetVideoList", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetVideoListResponse> GetVideoListWithOptionsAsync(GetVideoListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoListResponse>(await DoRequestAsync("GetVideoList", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetVideoListResponse GetVideoList(GetVideoListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetVideoListWithOptions(request, runtime);
        }

        public async Task<GetVideoListResponse> GetVideoListAsync(GetVideoListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetVideoListWithOptionsAsync(request, runtime);
        }

        public GetVideoInfoResponse GetVideoInfoWithOptions(GetVideoInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoInfoResponse>(DoRequest("GetVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetVideoInfoResponse> GetVideoInfoWithOptionsAsync(GetVideoInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetVideoInfoResponse>(await DoRequestAsync("GetVideoInfo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public GetVideoInfoResponse GetVideoInfo(GetVideoInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetVideoInfoWithOptions(request, runtime);
        }

        public async Task<GetVideoInfoResponse> GetVideoInfoAsync(GetVideoInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetVideoInfoWithOptionsAsync(request, runtime);
        }

        public DeleteVideoResponse DeleteVideoWithOptions(DeleteVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVideoResponse>(DoRequest("DeleteVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteVideoResponse> DeleteVideoWithOptionsAsync(DeleteVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteVideoResponse>(await DoRequestAsync("DeleteVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public DeleteVideoResponse DeleteVideo(DeleteVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteVideoWithOptions(request, runtime);
        }

        public async Task<DeleteVideoResponse> DeleteVideoAsync(DeleteVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteVideoWithOptionsAsync(request, runtime);
        }

        public RefreshUploadVideoResponse RefreshUploadVideoWithOptions(RefreshUploadVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RefreshUploadVideoResponse>(DoRequest("RefreshUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RefreshUploadVideoResponse> RefreshUploadVideoWithOptionsAsync(RefreshUploadVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RefreshUploadVideoResponse>(await DoRequestAsync("RefreshUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public RefreshUploadVideoResponse RefreshUploadVideo(RefreshUploadVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RefreshUploadVideoWithOptions(request, runtime);
        }

        public async Task<RefreshUploadVideoResponse> RefreshUploadVideoAsync(RefreshUploadVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RefreshUploadVideoWithOptionsAsync(request, runtime);
        }

        public CreateUploadVideoResponse CreateUploadVideoWithOptions(CreateUploadVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadVideoResponse>(DoRequest("CreateUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateUploadVideoResponse> CreateUploadVideoWithOptionsAsync(CreateUploadVideoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateUploadVideoResponse>(await DoRequestAsync("CreateUploadVideo", "HTTPS", "POST", "2017-03-21", "AK", null, request.ToMap(), runtime));
        }

        public CreateUploadVideoResponse CreateUploadVideo(CreateUploadVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateUploadVideoWithOptions(request, runtime);
        }

        public async Task<CreateUploadVideoResponse> CreateUploadVideoAsync(CreateUploadVideoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateUploadVideoWithOptionsAsync(request, runtime);
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.IsUnset(endpointMap) && !AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}

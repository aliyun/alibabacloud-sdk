// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315;

import com.aliyun.tea.*;
import com.aliyun.cspro20180315.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "central";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("cspro", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public InvokeHistoryDataCheckResponse invokeHistoryDataCheckWithOptions(InvokeHistoryDataCheckRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("InvokeHistoryDataCheck", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new InvokeHistoryDataCheckResponse());
    }

    public InvokeHistoryDataCheckResponse invokeHistoryDataCheck(InvokeHistoryDataCheckRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.invokeHistoryDataCheckWithOptions(request, runtime);
    }

    public AddFeedbackResponse addFeedbackWithOptions(AddFeedbackRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddFeedback", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AddFeedbackResponse());
    }

    public AddFeedbackResponse addFeedback(AddFeedbackRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addFeedbackWithOptions(request, runtime);
    }

    public QuerySecCheckSampleLibsResponse querySecCheckSampleLibsWithOptions(QuerySecCheckSampleLibsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySecCheckSampleLibs", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QuerySecCheckSampleLibsResponse());
    }

    public QuerySecCheckSampleLibsResponse querySecCheckSampleLibs(QuerySecCheckSampleLibsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySecCheckSampleLibsWithOptions(request, runtime);
    }

    public InvokeOmniSecCheckImmediatelyResponse invokeOmniSecCheckImmediatelyWithOptions(InvokeOmniSecCheckImmediatelyRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("InvokeOmniSecCheckImmediately", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new InvokeOmniSecCheckImmediatelyResponse());
    }

    public InvokeOmniSecCheckImmediatelyResponse invokeOmniSecCheckImmediately(InvokeOmniSecCheckImmediatelyRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.invokeOmniSecCheckImmediatelyWithOptions(request, runtime);
    }

    public QuerySecCheckConfigsResponse querySecCheckConfigsWithOptions(QuerySecCheckConfigsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySecCheckConfigs", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new QuerySecCheckConfigsResponse());
    }

    public QuerySecCheckConfigsResponse querySecCheckConfigs(QuerySecCheckConfigsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySecCheckConfigsWithOptions(request, runtime);
    }

    public DelSecCheckSampleResponse delSecCheckSampleWithOptions(DelSecCheckSampleRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DelSecCheckSample", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new DelSecCheckSampleResponse());
    }

    public DelSecCheckSampleResponse delSecCheckSample(DelSecCheckSampleRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.delSecCheckSampleWithOptions(request, runtime);
    }

    public AddSecCheckSampleResponse addSecCheckSampleWithOptions(AddSecCheckSampleRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddSecCheckSample", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AddSecCheckSampleResponse());
    }

    public AddSecCheckSampleResponse addSecCheckSample(AddSecCheckSampleRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addSecCheckSampleWithOptions(request, runtime);
    }

    public AuthSecCheckSamplePicUploadResponse authSecCheckSamplePicUploadWithOptions(AuthSecCheckSamplePicUploadRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AuthSecCheckSamplePicUpload", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AuthSecCheckSamplePicUploadResponse());
    }

    public AuthSecCheckSamplePicUploadResponse authSecCheckSamplePicUpload(AuthSecCheckSamplePicUploadRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.authSecCheckSamplePicUploadWithOptions(request, runtime);
    }

    public AddOmniSecCheckConfigResponse addOmniSecCheckConfigWithOptions(AddOmniSecCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddOmniSecCheckConfig", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AddOmniSecCheckConfigResponse());
    }

    public AddOmniSecCheckConfigResponse addOmniSecCheckConfig(AddOmniSecCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addOmniSecCheckConfigWithOptions(request, runtime);
    }

    public AddSecCheckSampleLibResponse addSecCheckSampleLibWithOptions(AddSecCheckSampleLibRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddSecCheckSampleLib", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AddSecCheckSampleLibResponse());
    }

    public AddSecCheckSampleLibResponse addSecCheckSampleLib(AddSecCheckSampleLibRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addSecCheckSampleLibWithOptions(request, runtime);
    }

    public DelOmniSecCheckConfigResponse delOmniSecCheckConfigWithOptions(DelOmniSecCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DelOmniSecCheckConfig", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new DelOmniSecCheckConfigResponse());
    }

    public DelOmniSecCheckConfigResponse delOmniSecCheckConfig(DelOmniSecCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.delOmniSecCheckConfigWithOptions(request, runtime);
    }

    public DelSecCheckSampleLibResponse delSecCheckSampleLibWithOptions(DelSecCheckSampleLibRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DelSecCheckSampleLib", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new DelSecCheckSampleLibResponse());
    }

    public DelSecCheckSampleLibResponse delSecCheckSampleLib(DelSecCheckSampleLibRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.delSecCheckSampleLibWithOptions(request, runtime);
    }

    public GetSecCheckResultDetailResponse getSecCheckResultDetailWithOptions(GetSecCheckResultDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetSecCheckResultDetail", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new GetSecCheckResultDetailResponse());
    }

    public GetSecCheckResultDetailResponse getSecCheckResultDetail(GetSecCheckResultDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getSecCheckResultDetailWithOptions(request, runtime);
    }

    public GetSnapshotInfoResponse getSnapshotInfoWithOptions(GetSnapshotInfoRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetSnapshotInfo", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new GetSnapshotInfoResponse());
    }

    public GetSnapshotInfoResponse getSnapshotInfo(GetSnapshotInfoRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getSnapshotInfoWithOptions(request, runtime);
    }

    public QuerySecCheckLatestSummaryResponse querySecCheckLatestSummaryWithOptions(QuerySecCheckLatestSummaryRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySecCheckLatestSummary", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new QuerySecCheckLatestSummaryResponse());
    }

    public QuerySecCheckLatestSummaryResponse querySecCheckLatestSummary(QuerySecCheckLatestSummaryRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySecCheckLatestSummaryWithOptions(request, runtime);
    }

    public QuerySecCheckResultResponse querySecCheckResultWithOptions(QuerySecCheckResultRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySecCheckResult", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new QuerySecCheckResultResponse());
    }

    public QuerySecCheckResultResponse querySecCheckResult(QuerySecCheckResultRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySecCheckResultWithOptions(request, runtime);
    }

    public QuerySecCheckSamplesResponse querySecCheckSamplesWithOptions(QuerySecCheckSamplesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySecCheckSamples", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new QuerySecCheckSamplesResponse());
    }

    public QuerySecCheckSamplesResponse querySecCheckSamples(QuerySecCheckSamplesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySecCheckSamplesWithOptions(request, runtime);
    }

    public UpdateOmniSecCheckConfigResponse updateOmniSecCheckConfigWithOptions(UpdateOmniSecCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpdateOmniSecCheckConfig", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new UpdateOmniSecCheckConfigResponse());
    }

    public UpdateOmniSecCheckConfigResponse updateOmniSecCheckConfig(UpdateOmniSecCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateOmniSecCheckConfigWithOptions(request, runtime);
    }

    public QueryPunishOrderListResponse queryPunishOrderListWithOptions(QueryPunishOrderListRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryPunishOrderList", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QueryPunishOrderListResponse());
    }

    public QueryPunishOrderListResponse queryPunishOrderList(QueryPunishOrderListRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryPunishOrderListWithOptions(request, runtime);
    }

    public UploadOwnedDomainsResponse uploadOwnedDomainsWithOptions(UploadOwnedDomainsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UploadOwnedDomains", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new UploadOwnedDomainsResponse());
    }

    public UploadOwnedDomainsResponse uploadOwnedDomains(UploadOwnedDomainsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.uploadOwnedDomainsWithOptions(request, runtime);
    }

    public PostPunishOrderResponse postPunishOrderWithOptions(PostPunishOrderRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("PostPunishOrder", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new PostPunishOrderResponse());
    }

    public PostPunishOrderResponse postPunishOrder(PostPunishOrderRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.postPunishOrderWithOptions(request, runtime);
    }

    public QueryPunishOrderResponse queryPunishOrderWithOptions(QueryPunishOrderRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryPunishOrder", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QueryPunishOrderResponse());
    }

    public QueryPunishOrderResponse queryPunishOrder(QueryPunishOrderRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryPunishOrderWithOptions(request, runtime);
    }

    public RevokePunishOrderResponse revokePunishOrderWithOptions(RevokePunishOrderRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("RevokePunishOrder", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new RevokePunishOrderResponse());
    }

    public RevokePunishOrderResponse revokePunishOrder(RevokePunishOrderRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.revokePunishOrderWithOptions(request, runtime);
    }

    public GetIpProfileResponse getIpProfileWithOptions(GetIpProfileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetIpProfile", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new GetIpProfileResponse());
    }

    public GetIpProfileResponse getIpProfile(GetIpProfileRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getIpProfileWithOptions(request, runtime);
    }

    public GetPhoneProfileResponse getPhoneProfileWithOptions(GetPhoneProfileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetPhoneProfile", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new GetPhoneProfileResponse());
    }

    public GetPhoneProfileResponse getPhoneProfile(GetPhoneProfileRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getPhoneProfileWithOptions(request, runtime);
    }

    public AddSiteCheckConfigResponse addSiteCheckConfigWithOptions(AddSiteCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddSiteCheckConfig", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new AddSiteCheckConfigResponse());
    }

    public AddSiteCheckConfigResponse addSiteCheckConfig(AddSiteCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.addSiteCheckConfigWithOptions(request, runtime);
    }

    public UpdateSiteCheckConfigResponse updateSiteCheckConfigWithOptions(UpdateSiteCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpdateSiteCheckConfig", "HTTPS", "POST", "2018-03-15", "AK", null, TeaModel.buildMap(request), runtime), new UpdateSiteCheckConfigResponse());
    }

    public UpdateSiteCheckConfigResponse updateSiteCheckConfig(UpdateSiteCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateSiteCheckConfigWithOptions(request, runtime);
    }

    public DelSiteCheckConfigResponse delSiteCheckConfigWithOptions(DelSiteCheckConfigRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DelSiteCheckConfig", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new DelSiteCheckConfigResponse());
    }

    public DelSiteCheckConfigResponse delSiteCheckConfig(DelSiteCheckConfigRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.delSiteCheckConfigWithOptions(request, runtime);
    }

    public QuerySiteCheckConfigsResponse querySiteCheckConfigsWithOptions(QuerySiteCheckConfigsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySiteCheckConfigs", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QuerySiteCheckConfigsResponse());
    }

    public QuerySiteCheckConfigsResponse querySiteCheckConfigs(QuerySiteCheckConfigsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySiteCheckConfigsWithOptions(request, runtime);
    }

    public SetIndexBaselineResponse setIndexBaselineWithOptions(SetIndexBaselineRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SetIndexBaseline", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new SetIndexBaselineResponse());
    }

    public SetIndexBaselineResponse setIndexBaseline(SetIndexBaselineRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.setIndexBaselineWithOptions(request, runtime);
    }

    public GetSiteCheckResultDetailResponse getSiteCheckResultDetailWithOptions(GetSiteCheckResultDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetSiteCheckResultDetail", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new GetSiteCheckResultDetailResponse());
    }

    public GetSiteCheckResultDetailResponse getSiteCheckResultDetail(GetSiteCheckResultDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getSiteCheckResultDetailWithOptions(request, runtime);
    }

    public QuerySiteCheckProgressResponse querySiteCheckProgressWithOptions(QuerySiteCheckProgressRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySiteCheckProgress", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QuerySiteCheckProgressResponse());
    }

    public QuerySiteCheckProgressResponse querySiteCheckProgress(QuerySiteCheckProgressRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySiteCheckProgressWithOptions(request, runtime);
    }

    public QuerySiteCheckResultResponse querySiteCheckResultWithOptions(QuerySiteCheckResultRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySiteCheckResult", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new QuerySiteCheckResultResponse());
    }

    public QuerySiteCheckResultResponse querySiteCheckResult(QuerySiteCheckResultRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.querySiteCheckResultWithOptions(request, runtime);
    }

    public GetIndexBaselineResponse getIndexBaselineWithOptions(GetIndexBaselineRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetIndexBaseline", "HTTPS", "GET", "2018-03-15", "AK", TeaModel.buildMap(request), null, runtime), new GetIndexBaselineResponse());
    }

    public GetIndexBaselineResponse getIndexBaseline(GetIndexBaselineRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getIndexBaselineWithOptions(request, runtime);
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.isUnset(endpointMap) && !com.aliyun.teautil.Common.empty(endpointMap.get(regionId))) {
            return endpointMap.get(regionId);
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}

// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.mpaas20190821;

import com.aliyun.tea.*;
import com.aliyun.mpaas20190821.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "regional";
        this._endpointMap = TeaConverter.buildMap(
            new TeaPair("cn-hangzhou", "mpaas.aliyuncs.com"),
            new TeaPair("ap-northeast-1", "mpaas.aliyuncs.com"),
            new TeaPair("ap-northeast-2-pop", "mpaas.aliyuncs.com"),
            new TeaPair("ap-south-1", "mpaas.aliyuncs.com"),
            new TeaPair("ap-southeast-1", "mpaas.aliyuncs.com"),
            new TeaPair("ap-southeast-2", "mpaas.aliyuncs.com"),
            new TeaPair("ap-southeast-3", "mpaas.aliyuncs.com"),
            new TeaPair("ap-southeast-5", "mpaas.aliyuncs.com"),
            new TeaPair("cn-beijing", "mpaas.aliyuncs.com"),
            new TeaPair("cn-beijing-finance-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-beijing-finance-pop", "mpaas.aliyuncs.com"),
            new TeaPair("cn-beijing-gov-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-beijing-nu16-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-chengdu", "mpaas.aliyuncs.com"),
            new TeaPair("cn-edge-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-fujian", "mpaas.aliyuncs.com"),
            new TeaPair("cn-haidian-cm12-c01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-bj-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-finance", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-internal-prod-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-internal-test-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-internal-test-2", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-internal-test-3", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hangzhou-test-306", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hongkong", "mpaas.aliyuncs.com"),
            new TeaPair("cn-hongkong-finance-pop", "mpaas.aliyuncs.com"),
            new TeaPair("cn-huhehaote", "mpaas.aliyuncs.com"),
            new TeaPair("cn-north-2-gov-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-qingdao", "mpaas.aliyuncs.com"),
            new TeaPair("cn-qingdao-nebula", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai-et15-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai-et2-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai-finance-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai-inner", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shanghai-internal-test-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shenzhen", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shenzhen-finance-1", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shenzhen-inner", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shenzhen-st4-d01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-shenzhen-su18-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-wuhan", "mpaas.aliyuncs.com"),
            new TeaPair("cn-yushanfang", "mpaas.aliyuncs.com"),
            new TeaPair("cn-zhangbei-na61-b01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-zhangjiakou", "mpaas.aliyuncs.com"),
            new TeaPair("cn-zhangjiakou-na62-a01", "mpaas.aliyuncs.com"),
            new TeaPair("cn-zhengzhou-nebula-1", "mpaas.aliyuncs.com"),
            new TeaPair("eu-central-1", "mpaas.aliyuncs.com"),
            new TeaPair("eu-west-1", "mpaas.aliyuncs.com"),
            new TeaPair("eu-west-1-oxs", "mpaas.aliyuncs.com"),
            new TeaPair("me-east-1", "mpaas.aliyuncs.com"),
            new TeaPair("rus-west-1-pop", "mpaas.aliyuncs.com"),
            new TeaPair("us-east-1", "mpaas.aliyuncs.com"),
            new TeaPair("us-west-1", "mpaas.aliyuncs.com")
        );
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("mpaas", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public DeleteMpaasMrtcArtvcRecordfileResponse deleteMpaasMrtcArtvcRecordfileWithOptions(DeleteMpaasMrtcArtvcRecordfileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteMpaasMrtcArtvcRecordfile", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new DeleteMpaasMrtcArtvcRecordfileResponse());
    }

    public DeleteMpaasMrtcArtvcRecordfileResponse deleteMpaasMrtcArtvcRecordfile(DeleteMpaasMrtcArtvcRecordfileRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteMpaasMrtcArtvcRecordfileWithOptions(request, runtime);
    }

    public QueryMpaasMrtcArtvcRecordfileResponse queryMpaasMrtcArtvcRecordfileWithOptions(QueryMpaasMrtcArtvcRecordfileRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryMpaasMrtcArtvcRecordfile", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new QueryMpaasMrtcArtvcRecordfileResponse());
    }

    public QueryMpaasMrtcArtvcRecordfileResponse queryMpaasMrtcArtvcRecordfile(QueryMpaasMrtcArtvcRecordfileRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryMpaasMrtcArtvcRecordfileWithOptions(request, runtime);
    }

    public ListMcubeMiniTasksResponse listMcubeMiniTasksWithOptions(ListMcubeMiniTasksRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListMcubeMiniTasks", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ListMcubeMiniTasksResponse());
    }

    public ListMcubeMiniTasksResponse listMcubeMiniTasks(ListMcubeMiniTasksRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listMcubeMiniTasksWithOptions(request, runtime);
    }

    public ListMcubeMiniPackagesResponse listMcubeMiniPackagesWithOptions(ListMcubeMiniPackagesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListMcubeMiniPackages", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ListMcubeMiniPackagesResponse());
    }

    public ListMcubeMiniPackagesResponse listMcubeMiniPackages(ListMcubeMiniPackagesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listMcubeMiniPackagesWithOptions(request, runtime);
    }

    public GetMcubeFileTokenResponse getMcubeFileTokenWithOptions(GetMcubeFileTokenRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetMcubeFileToken", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new GetMcubeFileTokenResponse());
    }

    public GetMcubeFileTokenResponse getMcubeFileToken(GetMcubeFileTokenRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getMcubeFileTokenWithOptions(request, runtime);
    }

    public UpdateMcubeWhitelistResponse updateMcubeWhitelistWithOptions(UpdateMcubeWhitelistRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UpdateMcubeWhitelist", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new UpdateMcubeWhitelistResponse());
    }

    public UpdateMcubeWhitelistResponse updateMcubeWhitelist(UpdateMcubeWhitelistRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.updateMcubeWhitelistWithOptions(request, runtime);
    }

    public DeleteMcubeWhitelistResponse deleteMcubeWhitelistWithOptions(DeleteMcubeWhitelistRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteMcubeWhitelist", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new DeleteMcubeWhitelistResponse());
    }

    public DeleteMcubeWhitelistResponse deleteMcubeWhitelist(DeleteMcubeWhitelistRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteMcubeWhitelistWithOptions(request, runtime);
    }

    public CreateMcubeMiniTaskResponse createMcubeMiniTaskWithOptions(CreateMcubeMiniTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateMcubeMiniTask", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateMcubeMiniTaskResponse());
    }

    public CreateMcubeMiniTaskResponse createMcubeMiniTask(CreateMcubeMiniTaskRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createMcubeMiniTaskWithOptions(request, runtime);
    }

    public ExistMcubeRsaKeyResponse existMcubeRsaKeyWithOptions(ExistMcubeRsaKeyRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ExistMcubeRsaKey", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ExistMcubeRsaKeyResponse());
    }

    public ExistMcubeRsaKeyResponse existMcubeRsaKey(ExistMcubeRsaKeyRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.existMcubeRsaKeyWithOptions(request, runtime);
    }

    public UploadMcubeMiniPackageResponse uploadMcubeMiniPackageWithOptions(UploadMcubeMiniPackageRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UploadMcubeMiniPackage", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new UploadMcubeMiniPackageResponse());
    }

    public UploadMcubeMiniPackageResponse uploadMcubeMiniPackage(UploadMcubeMiniPackageRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.uploadMcubeMiniPackageWithOptions(request, runtime);
    }

    public QueryMcubeMiniTaskResponse queryMcubeMiniTaskWithOptions(QueryMcubeMiniTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryMcubeMiniTask", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new QueryMcubeMiniTaskResponse());
    }

    public QueryMcubeMiniTaskResponse queryMcubeMiniTask(QueryMcubeMiniTaskRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryMcubeMiniTaskWithOptions(request, runtime);
    }

    public QueryMcubeMiniPackageResponse queryMcubeMiniPackageWithOptions(QueryMcubeMiniPackageRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryMcubeMiniPackage", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new QueryMcubeMiniPackageResponse());
    }

    public QueryMcubeMiniPackageResponse queryMcubeMiniPackage(QueryMcubeMiniPackageRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryMcubeMiniPackageWithOptions(request, runtime);
    }

    public UploadMcubeRsaKeyResponse uploadMcubeRsaKeyWithOptions(UploadMcubeRsaKeyRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("UploadMcubeRsaKey", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new UploadMcubeRsaKeyResponse());
    }

    public UploadMcubeRsaKeyResponse uploadMcubeRsaKey(UploadMcubeRsaKeyRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.uploadMcubeRsaKeyWithOptions(request, runtime);
    }

    public DeleteMcubeMiniAppResponse deleteMcubeMiniAppWithOptions(DeleteMcubeMiniAppRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteMcubeMiniApp", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new DeleteMcubeMiniAppResponse());
    }

    public DeleteMcubeMiniAppResponse deleteMcubeMiniApp(DeleteMcubeMiniAppRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.deleteMcubeMiniAppWithOptions(request, runtime);
    }

    public CreateMcubeWhitelistResponse createMcubeWhitelistWithOptions(CreateMcubeWhitelistRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateMcubeWhitelist", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateMcubeWhitelistResponse());
    }

    public CreateMcubeWhitelistResponse createMcubeWhitelist(CreateMcubeWhitelistRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createMcubeWhitelistWithOptions(request, runtime);
    }

    public CreateMcubeWhitelistForIdeResponse createMcubeWhitelistForIdeWithOptions(CreateMcubeWhitelistForIdeRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateMcubeWhitelistForIde", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateMcubeWhitelistForIdeResponse());
    }

    public CreateMcubeWhitelistForIdeResponse createMcubeWhitelistForIde(CreateMcubeWhitelistForIdeRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createMcubeWhitelistForIdeWithOptions(request, runtime);
    }

    public ChangeMcubeMiniTaskStatusResponse changeMcubeMiniTaskStatusWithOptions(ChangeMcubeMiniTaskStatusRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ChangeMcubeMiniTaskStatus", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ChangeMcubeMiniTaskStatusResponse());
    }

    public ChangeMcubeMiniTaskStatusResponse changeMcubeMiniTaskStatus(ChangeMcubeMiniTaskStatusRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.changeMcubeMiniTaskStatusWithOptions(request, runtime);
    }

    public CreateMcubeVhostResponse createMcubeVhostWithOptions(CreateMcubeVhostRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateMcubeVhost", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateMcubeVhostResponse());
    }

    public CreateMcubeVhostResponse createMcubeVhost(CreateMcubeVhostRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createMcubeVhostWithOptions(request, runtime);
    }

    public CreateMcubeMiniAppResponse createMcubeMiniAppWithOptions(CreateMcubeMiniAppRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateMcubeMiniApp", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateMcubeMiniAppResponse());
    }

    public CreateMcubeMiniAppResponse createMcubeMiniApp(CreateMcubeMiniAppRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createMcubeMiniAppWithOptions(request, runtime);
    }

    public QueryMcubeVhostResponse queryMcubeVhostWithOptions(QueryMcubeVhostRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QueryMcubeVhost", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new QueryMcubeVhostResponse());
    }

    public QueryMcubeVhostResponse queryMcubeVhost(QueryMcubeVhostRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.queryMcubeVhostWithOptions(request, runtime);
    }

    public ListMcubeMiniAppsResponse listMcubeMiniAppsWithOptions(ListMcubeMiniAppsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListMcubeMiniApps", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ListMcubeMiniAppsResponse());
    }

    public ListMcubeMiniAppsResponse listMcubeMiniApps(ListMcubeMiniAppsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listMcubeMiniAppsWithOptions(request, runtime);
    }

    public ListMcubeWhitelistsResponse listMcubeWhitelistsWithOptions(ListMcubeWhitelistsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListMcubeWhitelists", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ListMcubeWhitelistsResponse());
    }

    public ListMcubeWhitelistsResponse listMcubeWhitelists(ListMcubeWhitelistsRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listMcubeWhitelistsWithOptions(request, runtime);
    }

    public CreateOpenSingleDataResponse createOpenSingleDataWithOptions(CreateOpenSingleDataRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateOpenSingleData", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateOpenSingleDataResponse());
    }

    public CreateOpenSingleDataResponse createOpenSingleData(CreateOpenSingleDataRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createOpenSingleDataWithOptions(request, runtime);
    }

    public CreateOpenGlobalDataResponse createOpenGlobalDataWithOptions(CreateOpenGlobalDataRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateOpenGlobalData", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new CreateOpenGlobalDataResponse());
    }

    public CreateOpenGlobalDataResponse createOpenGlobalData(CreateOpenGlobalDataRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createOpenGlobalDataWithOptions(request, runtime);
    }

    public PushSimpleResponse pushSimpleWithOptions(PushSimpleRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("PushSimple", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new PushSimpleResponse());
    }

    public PushSimpleResponse pushSimple(PushSimpleRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.pushSimpleWithOptions(request, runtime);
    }

    public PushBroadcastResponse pushBroadcastWithOptions(PushBroadcastRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("PushBroadcast", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new PushBroadcastResponse());
    }

    public PushBroadcastResponse pushBroadcast(PushBroadcastRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.pushBroadcastWithOptions(request, runtime);
    }

    public PushTemplateResponse pushTemplateWithOptions(PushTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("PushTemplate", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new PushTemplateResponse());
    }

    public PushTemplateResponse pushTemplate(PushTemplateRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.pushTemplateWithOptions(request, runtime);
    }

    public PushMultipleResponse pushMultipleWithOptions(PushMultipleRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("PushMultiple", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new PushMultipleResponse());
    }

    public PushMultipleResponse pushMultiple(PushMultipleRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.pushMultipleWithOptions(request, runtime);
    }

    public ListMcdpAimResponse listMcdpAimWithOptions(ListMcdpAimRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListMcdpAim", "HTTPS", "POST", "2019-08-21", "AK", null, TeaModel.buildMap(request), runtime), new ListMcdpAimResponse());
    }

    public ListMcdpAimResponse listMcdpAim(ListMcdpAimRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listMcdpAimWithOptions(request, runtime);
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.isUnset(endpointMap) && !com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}

// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204;

import com.aliyun.tea.*;
import com.aliyun.emas_devops20191204.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "regional";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("emas-devops", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public DescribePluginDetailResponse describePluginDetailWithOptions(DescribePluginDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribePluginDetail", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new DescribePluginDetailResponse());
    }

    public DescribePluginDetailResponse describePluginDetail(DescribePluginDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describePluginDetailWithOptions(request, runtime);
    }

    public DescribeBuildTaskDetailResponse describeBuildTaskDetailWithOptions(DescribeBuildTaskDetailRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DescribeBuildTaskDetail", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new DescribeBuildTaskDetailResponse());
    }

    public DescribeBuildTaskDetailResponse describeBuildTaskDetail(DescribeBuildTaskDetailRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.describeBuildTaskDetailWithOptions(request, runtime);
    }

    public GetScmRsaPubKeyResponse getScmRsaPubKeyWithOptions(GetScmRsaPubKeyRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetScmRsaPubKey", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new GetScmRsaPubKeyResponse());
    }

    public GetScmRsaPubKeyResponse getScmRsaPubKey(GetScmRsaPubKeyRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getScmRsaPubKeyWithOptions(request, runtime);
    }

    public CreateBuildTaskResponse createBuildTaskWithOptions(CreateBuildTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CreateBuildTask", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new CreateBuildTaskResponse());
    }

    public CreateBuildTaskResponse createBuildTask(CreateBuildTaskRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.createBuildTaskWithOptions(request, runtime);
    }

    public ListBuildTasksResponse listBuildTasksWithOptions(ListBuildTasksRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListBuildTasks", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new ListBuildTasksResponse());
    }

    public ListBuildTasksResponse listBuildTasks(ListBuildTasksRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listBuildTasksWithOptions(request, runtime);
    }

    public ListBuildPhasesResponse listBuildPhasesWithOptions(ListBuildPhasesRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ListBuildPhases", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new ListBuildPhasesResponse());
    }

    public ListBuildPhasesResponse listBuildPhases(ListBuildPhasesRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.listBuildPhasesWithOptions(request, runtime);
    }

    public CancelBuildTaskResponse cancelBuildTaskWithOptions(CancelBuildTaskRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("CancelBuildTask", "HTTPS", "POST", "2019-12-04", "AK", null, TeaModel.buildMap(request), runtime), new CancelBuildTaskResponse());
    }

    public CancelBuildTaskResponse cancelBuildTask(CancelBuildTaskRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.cancelBuildTaskWithOptions(request, runtime);
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

// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageprocess20200320;

import com.aliyun.tea.*;
import com.aliyun.imageprocess20200320.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "regional";
        this.checkConfig(config);
        this._endpoint = this.getEndpoint("imageprocess", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public DetectLungNoduleResponse detectLungNoduleWithOptions(DetectLungNoduleRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", null, TeaModel.buildMap(request), runtime), new DetectLungNoduleResponse());
    }

    public DetectLungNoduleResponse detectLungNodule(DetectLungNoduleRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.detectLungNoduleWithOptions(request, runtime);
    }

    public DetectCovid19CadResponse detectCovid19CadWithOptions(DetectCovid19CadRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", null, TeaModel.buildMap(request), runtime), new DetectCovid19CadResponse());
    }

    public DetectCovid19CadResponse detectCovid19Cad(DetectCovid19CadRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.detectCovid19CadWithOptions(request, runtime);
    }

    public GetAsyncJobResultResponse getAsyncJobResultWithOptions(GetAsyncJobResultRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, TeaModel.buildMap(request), runtime), new GetAsyncJobResultResponse());
    }

    public GetAsyncJobResultResponse getAsyncJobResult(GetAsyncJobResultRequest request) throws Exception {
        com.aliyun.teautil.models.RuntimeOptions runtime = new com.aliyun.teautil.models.RuntimeOptions();
        return this.getAsyncJobResultWithOptions(request, runtime);
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

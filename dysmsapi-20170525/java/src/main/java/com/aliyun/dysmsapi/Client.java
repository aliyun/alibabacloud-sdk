// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dysmsapi;

import com.aliyun.tea.*;
import com.aliyun.dysmsapi.models.*;

public class Client extends com.aliyun.tearpc.Client {
    public Client(com.aliyun.tearpc.models.Config config) throws Exception {
        super(config);
        this._endpointRule = "central";
        this._endpointMap = TeaConverter.buildMap(
            new TeaPair("ap-northeast-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-northeast-2-pop", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-south-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-southeast-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-southeast-2", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-southeast-3", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("ap-southeast-5", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("cn-beijing", "dysmsapi-proxy.cn-beijing.aliyuncs.com"),
            new TeaPair("eu-central-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("eu-west-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("eu-west-1-oxs", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("me-east-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("rus-west-1-pop", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("us-east-1", "dysmsapi.ap-southeast-1.aliyuncs.com"),
            new TeaPair("us-west-1", "dysmsapi.ap-southeast-1.aliyuncs.com")
        );
        this.checkConfig(config);
        this._endpoint = this.getEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
    }


    public QuerySmsTemplateResponse querySmsTemplate(QuerySmsTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySmsTemplate", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new QuerySmsTemplateResponse());
    }

    public QuerySmsSignResponse querySmsSign(QuerySmsSignRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySmsSign", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new QuerySmsSignResponse());
    }

    public ModifySmsTemplateResponse modifySmsTemplate(ModifySmsTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ModifySmsTemplate", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new ModifySmsTemplateResponse());
    }

    public ModifySmsSignResponse modifySmsSign(ModifySmsSignRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("ModifySmsSign", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new ModifySmsSignResponse());
    }

    public DeleteSmsTemplateResponse deleteSmsTemplate(DeleteSmsTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteSmsTemplate", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DeleteSmsTemplateResponse());
    }

    public DeleteSmsSignResponse deleteSmsSign(DeleteSmsSignRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("DeleteSmsSign", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new DeleteSmsSignResponse());
    }

    public AddSmsTemplateResponse addSmsTemplate(AddSmsTemplateRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddSmsTemplate", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new AddSmsTemplateResponse());
    }

    public AddSmsSignResponse addSmsSign(AddSmsSignRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("AddSmsSign", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new AddSmsSignResponse());
    }

    public SendBatchSmsResponse sendBatchSms(SendBatchSmsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SendBatchSms", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new SendBatchSmsResponse());
    }

    public SendSmsResponse sendSms(SendSmsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("SendSms", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new SendSmsResponse());
    }

    public QuerySendDetailsResponse querySendDetails(QuerySendDetailsRequest request, com.aliyun.teautil.models.RuntimeOptions runtime) throws Exception {
        com.aliyun.teautil.Common.validateModel(request);
        return TeaModel.toModel(this.doRequest("QuerySendDetails", "HTTPS", "GET", "AK", TeaModel.buildMap(request), null, runtime), new QuerySendDetailsResponse());
    }

    public String getEndpoint(String productId, String regionId, String endpointRule, String network, String suffix, java.util.Map<String, String> endpointMap, String endpoint) throws Exception {
        if (!com.aliyun.teautil.Common.empty(endpoint)) {
            return endpoint;
        }

        if (!com.aliyun.teautil.Common.empty(endpointMap.get("regionId"))) {
            return endpointMap.get("regionId");
        }

        return com.aliyun.endpointutil.Client.getEndpointRules(productId, regionId, endpointRule, network, suffix);
    }
}

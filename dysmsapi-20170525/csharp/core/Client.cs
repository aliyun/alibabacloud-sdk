// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Dysmsapi20170525.Models;

namespace AlibabaCloud.SDK.Dysmsapi20170525
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "central";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-northeast-2-pop", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-south-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-2", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-3", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-5", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"cn-beijing", "dysmsapi-proxy.cn-beijing.aliyuncs.com"},
                {"eu-central-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"eu-west-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"eu-west-1-oxs", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"me-east-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"rus-west-1-pop", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"us-east-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
                {"us-west-1", "dysmsapi.ap-southeast-1.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public QuerySmsTemplateResponse QuerySmsTemplate(QuerySmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySmsTemplateResponse>(DoRequest("QuerySmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QuerySmsTemplateResponse> QuerySmsTemplateAsync(QuerySmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySmsTemplateResponse>(await DoRequestAsync("QuerySmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public QuerySmsSignResponse QuerySmsSign(QuerySmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySmsSignResponse>(DoRequest("QuerySmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QuerySmsSignResponse> QuerySmsSignAsync(QuerySmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySmsSignResponse>(await DoRequestAsync("QuerySmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public ModifySmsTemplateResponse ModifySmsTemplate(ModifySmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySmsTemplateResponse>(DoRequest("ModifySmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ModifySmsTemplateResponse> ModifySmsTemplateAsync(ModifySmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySmsTemplateResponse>(await DoRequestAsync("ModifySmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public ModifySmsSignResponse ModifySmsSign(ModifySmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySmsSignResponse>(DoRequest("ModifySmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<ModifySmsSignResponse> ModifySmsSignAsync(ModifySmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifySmsSignResponse>(await DoRequestAsync("ModifySmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DeleteSmsTemplateResponse DeleteSmsTemplate(DeleteSmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSmsTemplateResponse>(DoRequest("DeleteSmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteSmsTemplateResponse> DeleteSmsTemplateAsync(DeleteSmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSmsTemplateResponse>(await DoRequestAsync("DeleteSmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public DeleteSmsSignResponse DeleteSmsSign(DeleteSmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSmsSignResponse>(DoRequest("DeleteSmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<DeleteSmsSignResponse> DeleteSmsSignAsync(DeleteSmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteSmsSignResponse>(await DoRequestAsync("DeleteSmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public AddSmsTemplateResponse AddSmsTemplate(AddSmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddSmsTemplateResponse>(DoRequest("AddSmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AddSmsTemplateResponse> AddSmsTemplateAsync(AddSmsTemplateRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddSmsTemplateResponse>(await DoRequestAsync("AddSmsTemplate", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public AddSmsSignResponse AddSmsSign(AddSmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddSmsSignResponse>(DoRequest("AddSmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<AddSmsSignResponse> AddSmsSignAsync(AddSmsSignRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AddSmsSignResponse>(await DoRequestAsync("AddSmsSign", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public SendBatchSmsResponse SendBatchSms(SendBatchSmsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendBatchSmsResponse>(DoRequest("SendBatchSms", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SendBatchSmsResponse> SendBatchSmsAsync(SendBatchSmsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendBatchSmsResponse>(await DoRequestAsync("SendBatchSms", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public SendSmsResponse SendSms(SendSmsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendSmsResponse>(DoRequest("SendSms", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<SendSmsResponse> SendSmsAsync(SendSmsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SendSmsResponse>(await DoRequestAsync("SendSms", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public QuerySendDetailsResponse QuerySendDetails(QuerySendDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySendDetailsResponse>(DoRequest("QuerySendDetails", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QuerySendDetailsResponse> QuerySendDetailsAsync(QuerySendDetailsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySendDetailsResponse>(await DoRequestAsync("QuerySendDetails", "HTTPS", "GET", "AK", request.ToMap(), null, runtime));
        }

        public string GetEndpoint(string productId, string regionId, string endpointRule, string network, string suffix, Dictionary<string, string> endpointMap, string endpoint)
        {
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpoint))
            {
                return endpoint;
            }
            if (!AlibabaCloud.TeaUtil.Common.Empty(endpointMap.Get(regionId)))
            {
                return endpointMap.Get(regionId);
            }
            return AlibabaCloud.EndpointUtil.Common.GetEndpointRules(productId, regionId, endpointRule, network, suffix);
        }

    }
}

// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Imageprocess20200320.Models;

namespace AlibabaCloud.SDK.Imageprocess20200320
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            CheckConfig(config);
            this._endpoint = GetEndpoint("imageprocess", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public DetectLungNoduleResponse DetectLungNoduleWithOptions(DetectLungNoduleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectLungNoduleResponse>(DoRequest("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetectLungNoduleResponse> DetectLungNoduleWithOptionsAsync(DetectLungNoduleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectLungNoduleResponse>(await DoRequestAsync("DetectLungNodule", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public DetectLungNoduleResponse DetectLungNodule(DetectLungNoduleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetectLungNoduleWithOptions(request, runtime);
        }

        public async Task<DetectLungNoduleResponse> DetectLungNoduleAsync(DetectLungNoduleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetectLungNoduleWithOptionsAsync(request, runtime);
        }

        public DetectCovid19CadResponse DetectCovid19CadWithOptions(DetectCovid19CadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectCovid19CadResponse>(DoRequest("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DetectCovid19CadResponse> DetectCovid19CadWithOptionsAsync(DetectCovid19CadRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DetectCovid19CadResponse>(await DoRequestAsync("DetectCovid19Cad", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public DetectCovid19CadResponse DetectCovid19Cad(DetectCovid19CadRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DetectCovid19CadWithOptions(request, runtime);
        }

        public async Task<DetectCovid19CadResponse> DetectCovid19CadAsync(DetectCovid19CadRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DetectCovid19CadWithOptionsAsync(request, runtime);
        }

        public GetAsyncJobResultResponse GetAsyncJobResultWithOptions(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAsyncJobResultResponse>(DoRequest("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetAsyncJobResultResponse> GetAsyncJobResultWithOptionsAsync(GetAsyncJobResultRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetAsyncJobResultResponse>(await DoRequestAsync("GetAsyncJobResult", "HTTPS", "POST", "2020-03-20", "AK", null, request.ToMap(), runtime));
        }

        public GetAsyncJobResultResponse GetAsyncJobResult(GetAsyncJobResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetAsyncJobResultWithOptions(request, runtime);
        }

        public async Task<GetAsyncJobResultResponse> GetAsyncJobResultAsync(GetAsyncJobResultRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetAsyncJobResultWithOptionsAsync(request, runtime);
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

// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Imageaudit20191230.Models;

namespace AlibabaCloud.SDK.Imageaudit20191230
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            CheckConfig(config);
            this._endpoint = GetEndpoint(_productId, _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public ScanTextResponse ScanTextEx(ScanTextRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScanTextResponse>(DoRequest("ScanText", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ScanTextResponse> ScanTextExAsync(ScanTextRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScanTextResponse>(await DoRequestAsync("ScanText", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public ScanTextResponse ScanText(ScanTextRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScanTextEx(request, runtime);
        }

        public async Task<ScanTextResponse> ScanTextAsync(ScanTextRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScanTextExAsync(request, runtime);
        }

        public ScanImageResponse ScanImageEx(ScanImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScanImageResponse>(DoRequest("ScanImage", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ScanImageResponse> ScanImageExAsync(ScanImageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ScanImageResponse>(await DoRequestAsync("ScanImage", "HTTPS", "POST", "2019-12-30", "AK", null, request.ToMap(), runtime));
        }

        public ScanImageResponse ScanImage(ScanImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ScanImageEx(request, runtime);
        }

        public async Task<ScanImageResponse> ScanImageAsync(ScanImageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ScanImageExAsync(request, runtime);
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

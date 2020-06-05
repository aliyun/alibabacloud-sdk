// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.Ft20180713.Models;

namespace AlibabaCloud.SDK.Ft20180713
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-2-pop", "ft.aliyuncs.com"},
                {"ap-south-1", "ft.aliyuncs.com"},
                {"ap-southeast-1", "ft.aliyuncs.com"},
                {"ap-southeast-2", "ft.aliyuncs.com"},
                {"ap-southeast-3", "ft.aliyuncs.com"},
                {"ap-southeast-5", "ft.aliyuncs.com"},
                {"cn-beijing", "ft.aliyuncs.com"},
                {"cn-beijing-finance-1", "ft.aliyuncs.com"},
                {"cn-beijing-finance-pop", "ft.aliyuncs.com"},
                {"cn-beijing-gov-1", "ft.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "ft.aliyuncs.com"},
                {"cn-chengdu", "ft.aliyuncs.com"},
                {"cn-edge-1", "ft.aliyuncs.com"},
                {"cn-fujian", "ft.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "ft.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "ft.aliyuncs.com"},
                {"cn-hangzhou-finance", "ft.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "ft.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "ft.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "ft.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "ft.aliyuncs.com"},
                {"cn-hangzhou-test-306", "ft.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "ft.aliyuncs.com"},
                {"cn-huhehaote", "ft.aliyuncs.com"},
                {"cn-qingdao", "ft.aliyuncs.com"},
                {"cn-qingdao-nebula", "ft.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "ft.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "ft.aliyuncs.com"},
                {"cn-shanghai-finance-1", "ft.aliyuncs.com"},
                {"cn-shanghai-inner", "ft.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "ft.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "ft.aliyuncs.com"},
                {"cn-shenzhen-inner", "ft.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "ft.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "ft.aliyuncs.com"},
                {"cn-wuhan", "ft.aliyuncs.com"},
                {"cn-yushanfang", "ft.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "ft.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "ft.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "ft.aliyuncs.com"},
                {"eu-central-1", "ft.aliyuncs.com"},
                {"eu-west-1", "ft.aliyuncs.com"},
                {"eu-west-1-oxs", "ft.aliyuncs.com"},
                {"me-east-1", "ft.aliyuncs.com"},
                {"rus-west-1-pop", "ft.aliyuncs.com"},
                {"us-west-1", "ft.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("ft", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public TestFlowStrategy01Response TestFlowStrategy01WithOptions(TestFlowStrategy01Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TestFlowStrategy01Response>(DoRequest("TestFlowStrategy01", "HTTPS", "PUT", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TestFlowStrategy01Response> TestFlowStrategy01WithOptionsAsync(TestFlowStrategy01Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TestFlowStrategy01Response>(await DoRequestAsync("TestFlowStrategy01", "HTTPS", "PUT", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public TestFlowStrategy01Response TestFlowStrategy01(TestFlowStrategy01Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TestFlowStrategy01WithOptions(request, runtime);
        }

        public async Task<TestFlowStrategy01Response> TestFlowStrategy01Async(TestFlowStrategy01Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TestFlowStrategy01WithOptionsAsync(request, runtime);
        }

        public TestHttpApiResponse TestHttpApiWithOptions(TestHttpApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TestHttpApiResponse>(DoRequest("TestHttpApi", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<TestHttpApiResponse> TestHttpApiWithOptionsAsync(TestHttpApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<TestHttpApiResponse>(await DoRequestAsync("TestHttpApi", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public TestHttpApiResponse TestHttpApi(TestHttpApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return TestHttpApiWithOptions(request, runtime);
        }

        public async Task<TestHttpApiResponse> TestHttpApiAsync(TestHttpApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await TestHttpApiWithOptionsAsync(request, runtime);
        }

        public BatchAuditTest01Response BatchAuditTest01WithOptions(BatchAuditTest01Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchAuditTest01Response>(DoRequest("BatchAuditTest01", "HTTPS", "POST", "2018-07-13", "Anonymous", null, request.ToMap(), runtime));
        }

        public async Task<BatchAuditTest01Response> BatchAuditTest01WithOptionsAsync(BatchAuditTest01Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<BatchAuditTest01Response>(await DoRequestAsync("BatchAuditTest01", "HTTPS", "POST", "2018-07-13", "Anonymous", null, request.ToMap(), runtime));
        }

        public BatchAuditTest01Response BatchAuditTest01(BatchAuditTest01Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return BatchAuditTest01WithOptions(request, runtime);
        }

        public async Task<BatchAuditTest01Response> BatchAuditTest01Async(BatchAuditTest01Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await BatchAuditTest01WithOptionsAsync(request, runtime);
        }

        public FtIpFlowControlResponse FtIpFlowControlWithOptions(FtIpFlowControlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtIpFlowControlResponse>(DoRequest("FtIpFlowControl", "HTTPS", "POST", "2018-07-13", "Anonymous", null, request.ToMap(), runtime));
        }

        public async Task<FtIpFlowControlResponse> FtIpFlowControlWithOptionsAsync(FtIpFlowControlRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtIpFlowControlResponse>(await DoRequestAsync("FtIpFlowControl", "HTTPS", "POST", "2018-07-13", "Anonymous", null, request.ToMap(), runtime));
        }

        public FtIpFlowControlResponse FtIpFlowControl(FtIpFlowControlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtIpFlowControlWithOptions(request, runtime);
        }

        public async Task<FtIpFlowControlResponse> FtIpFlowControlAsync(FtIpFlowControlRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtIpFlowControlWithOptionsAsync(request, runtime);
        }

        public FtDynamicAddressDubboResponse FtDynamicAddressDubboWithOptions(FtDynamicAddressDubboRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtDynamicAddressDubboResponse>(DoRequest("FtDynamicAddressDubbo", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtDynamicAddressDubboResponse> FtDynamicAddressDubboWithOptionsAsync(FtDynamicAddressDubboRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtDynamicAddressDubboResponse>(await DoRequestAsync("FtDynamicAddressDubbo", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtDynamicAddressDubboResponse FtDynamicAddressDubbo(FtDynamicAddressDubboRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtDynamicAddressDubboWithOptions(request, runtime);
        }

        public async Task<FtDynamicAddressDubboResponse> FtDynamicAddressDubboAsync(FtDynamicAddressDubboRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtDynamicAddressDubboWithOptionsAsync(request, runtime);
        }

        public FtDynamicAddressHsfResponse FtDynamicAddressHsfWithOptions(FtDynamicAddressHsfRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtDynamicAddressHsfResponse>(DoRequest("FtDynamicAddressHsf", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtDynamicAddressHsfResponse> FtDynamicAddressHsfWithOptionsAsync(FtDynamicAddressHsfRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtDynamicAddressHsfResponse>(await DoRequestAsync("FtDynamicAddressHsf", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtDynamicAddressHsfResponse FtDynamicAddressHsf(FtDynamicAddressHsfRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtDynamicAddressHsfWithOptions(request, runtime);
        }

        public async Task<FtDynamicAddressHsfResponse> FtDynamicAddressHsfAsync(FtDynamicAddressHsfRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtDynamicAddressHsfWithOptionsAsync(request, runtime);
        }

        public FtFlowSpecialResponse FtFlowSpecialWithOptions(FtFlowSpecialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtFlowSpecialResponse>(DoRequest("FtFlowSpecial", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtFlowSpecialResponse> FtFlowSpecialWithOptionsAsync(FtFlowSpecialRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtFlowSpecialResponse>(await DoRequestAsync("FtFlowSpecial", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtFlowSpecialResponse FtFlowSpecial(FtFlowSpecialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtFlowSpecialWithOptions(request, runtime);
        }

        public async Task<FtFlowSpecialResponse> FtFlowSpecialAsync(FtFlowSpecialRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtFlowSpecialWithOptionsAsync(request, runtime);
        }

        public FTApiAliasApiResponse FTApiAliasApiWithOptions(FTApiAliasApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FTApiAliasApiResponse>(DoRequest("FTApiAliasApi", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FTApiAliasApiResponse> FTApiAliasApiWithOptionsAsync(FTApiAliasApiRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FTApiAliasApiResponse>(await DoRequestAsync("FTApiAliasApi", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FTApiAliasApiResponse FTApiAliasApi(FTApiAliasApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FTApiAliasApiWithOptions(request, runtime);
        }

        public async Task<FTApiAliasApiResponse> FTApiAliasApiAsync(FTApiAliasApiRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FTApiAliasApiWithOptionsAsync(request, runtime);
        }

        public FtEagleEyeResponse FtEagleEyeWithOptions(FtEagleEyeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtEagleEyeResponse>(DoRequest("FtEagleEye", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtEagleEyeResponse> FtEagleEyeWithOptionsAsync(FtEagleEyeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtEagleEyeResponse>(await DoRequestAsync("FtEagleEye", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtEagleEyeResponse FtEagleEye(FtEagleEyeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtEagleEyeWithOptions(request, runtime);
        }

        public async Task<FtEagleEyeResponse> FtEagleEyeAsync(FtEagleEyeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtEagleEyeWithOptionsAsync(request, runtime);
        }

        public FtParamListResponse FtParamListWithOptions(FtParamListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtParamListResponse>(DoRequest("FtParamList", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtParamListResponse> FtParamListWithOptionsAsync(FtParamListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtParamListResponse>(await DoRequestAsync("FtParamList", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtParamListResponse FtParamList(FtParamListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtParamListWithOptions(request, runtime);
        }

        public async Task<FtParamListResponse> FtParamListAsync(FtParamListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtParamListWithOptionsAsync(request, runtime);
        }

        public FtGatedLaunchPolicy4Response FtGatedLaunchPolicy4WithOptions(FtGatedLaunchPolicy4Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtGatedLaunchPolicy4Response>(DoRequest("FtGatedLaunchPolicy4", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public async Task<FtGatedLaunchPolicy4Response> FtGatedLaunchPolicy4WithOptionsAsync(FtGatedLaunchPolicy4Request request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<FtGatedLaunchPolicy4Response>(await DoRequestAsync("FtGatedLaunchPolicy4", "HTTPS", "POST", "2018-07-13", "AK", null, request.ToMap(), runtime));
        }

        public FtGatedLaunchPolicy4Response FtGatedLaunchPolicy4(FtGatedLaunchPolicy4Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return FtGatedLaunchPolicy4WithOptions(request, runtime);
        }

        public async Task<FtGatedLaunchPolicy4Response> FtGatedLaunchPolicy4Async(FtGatedLaunchPolicy4Request request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await FtGatedLaunchPolicy4WithOptionsAsync(request, runtime);
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

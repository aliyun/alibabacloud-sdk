// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using System.Threading.Tasks;

using Tea;
using Tea.Utils;

using AlibabaCloud.SDK.BssOpenApi20171214.Models;

namespace AlibabaCloud.SDK.BssOpenApi20171214
{
    public class Client : AlibabaCloud.RPCClient.Client
    {

        public Client(AlibabaCloud.RPCClient.Models.Config config): base(config)
        {
            this._endpointRule = "regional";
            this._endpointMap = new Dictionary<string, string>
            {
                {"ap-northeast-1", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-northeast-2-pop", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-south-1", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-1", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-2", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-3", "business.ap-southeast-1.aliyuncs.com"},
                {"ap-southeast-5", "business.ap-southeast-1.aliyuncs.com"},
                {"cn-beijing", "business.aliyuncs.com"},
                {"cn-beijing-finance-1", "business.aliyuncs.com"},
                {"cn-beijing-finance-pop", "business.aliyuncs.com"},
                {"cn-beijing-gov-1", "business.aliyuncs.com"},
                {"cn-beijing-nu16-b01", "business.aliyuncs.com"},
                {"cn-chengdu", "business.aliyuncs.com"},
                {"cn-edge-1", "business.aliyuncs.com"},
                {"cn-fujian", "business.aliyuncs.com"},
                {"cn-haidian-cm12-c01", "business.aliyuncs.com"},
                {"cn-hangzhou", "business.aliyuncs.com"},
                {"cn-hangzhou-bj-b01", "business.aliyuncs.com"},
                {"cn-hangzhou-finance", "business.aliyuncs.com"},
                {"cn-hangzhou-internal-prod-1", "business.aliyuncs.com"},
                {"cn-hangzhou-internal-test-1", "business.aliyuncs.com"},
                {"cn-hangzhou-internal-test-2", "business.aliyuncs.com"},
                {"cn-hangzhou-internal-test-3", "business.aliyuncs.com"},
                {"cn-hangzhou-test-306", "business.aliyuncs.com"},
                {"cn-hongkong", "business.aliyuncs.com"},
                {"cn-hongkong-finance-pop", "business.aliyuncs.com"},
                {"cn-huhehaote", "business.aliyuncs.com"},
                {"cn-north-2-gov-1", "business.aliyuncs.com"},
                {"cn-qingdao", "business.aliyuncs.com"},
                {"cn-qingdao-nebula", "business.aliyuncs.com"},
                {"cn-shanghai", "business.aliyuncs.com"},
                {"cn-shanghai-et15-b01", "business.aliyuncs.com"},
                {"cn-shanghai-et2-b01", "business.aliyuncs.com"},
                {"cn-shanghai-finance-1", "business.aliyuncs.com"},
                {"cn-shanghai-inner", "business.aliyuncs.com"},
                {"cn-shanghai-internal-test-1", "business.aliyuncs.com"},
                {"cn-shenzhen", "business.aliyuncs.com"},
                {"cn-shenzhen-finance-1", "business.aliyuncs.com"},
                {"cn-shenzhen-inner", "business.aliyuncs.com"},
                {"cn-shenzhen-st4-d01", "business.aliyuncs.com"},
                {"cn-shenzhen-su18-b01", "business.aliyuncs.com"},
                {"cn-wuhan", "business.aliyuncs.com"},
                {"cn-yushanfang", "business.aliyuncs.com"},
                {"cn-zhangbei-na61-b01", "business.aliyuncs.com"},
                {"cn-zhangjiakou", "business.aliyuncs.com"},
                {"cn-zhangjiakou-na62-a01", "business.aliyuncs.com"},
                {"cn-zhengzhou-nebula-1", "business.aliyuncs.com"},
                {"eu-central-1", "business.ap-southeast-1.aliyuncs.com"},
                {"eu-west-1", "business.ap-southeast-1.aliyuncs.com"},
                {"eu-west-1-oxs", "business.ap-southeast-1.aliyuncs.com"},
                {"me-east-1", "business.ap-southeast-1.aliyuncs.com"},
                {"rus-west-1-pop", "business.ap-southeast-1.aliyuncs.com"},
                {"us-east-1", "business.ap-southeast-1.aliyuncs.com"},
                {"us-west-1", "business.ap-southeast-1.aliyuncs.com"},
            };
            CheckConfig(config);
            this._endpoint = GetEndpoint("bssopenapi", _regionId, _endpointRule, _network, _suffix, _endpointMap, _endpoint);
        }


        public QuerySplitItemBillResponse QuerySplitItemBillWithOptions(QuerySplitItemBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySplitItemBillResponse>(DoRequest("QuerySplitItemBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QuerySplitItemBillResponse> QuerySplitItemBillWithOptionsAsync(QuerySplitItemBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySplitItemBillResponse>(await DoRequestAsync("QuerySplitItemBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QuerySplitItemBillResponse QuerySplitItemBill(QuerySplitItemBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QuerySplitItemBillWithOptions(request, runtime);
        }

        public async Task<QuerySplitItemBillResponse> QuerySplitItemBillAsync(QuerySplitItemBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QuerySplitItemBillWithOptionsAsync(request, runtime);
        }

        public QueryRIUtilizationDetailResponse QueryRIUtilizationDetailWithOptions(QueryRIUtilizationDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRIUtilizationDetailResponse>(DoRequest("QueryRIUtilizationDetail", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryRIUtilizationDetailResponse> QueryRIUtilizationDetailWithOptionsAsync(QueryRIUtilizationDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRIUtilizationDetailResponse>(await DoRequestAsync("QueryRIUtilizationDetail", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryRIUtilizationDetailResponse QueryRIUtilizationDetail(QueryRIUtilizationDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRIUtilizationDetailWithOptions(request, runtime);
        }

        public async Task<QueryRIUtilizationDetailResponse> QueryRIUtilizationDetailAsync(QueryRIUtilizationDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRIUtilizationDetailWithOptionsAsync(request, runtime);
        }

        public QueryBillToOSSSubscriptionResponse QueryBillToOSSSubscriptionWithOptions(QueryBillToOSSSubscriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillToOSSSubscriptionResponse>(DoRequest("QueryBillToOSSSubscription", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryBillToOSSSubscriptionResponse> QueryBillToOSSSubscriptionWithOptionsAsync(QueryBillToOSSSubscriptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillToOSSSubscriptionResponse>(await DoRequestAsync("QueryBillToOSSSubscription", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryBillToOSSSubscriptionResponse QueryBillToOSSSubscription(QueryBillToOSSSubscriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryBillToOSSSubscriptionWithOptions(request, runtime);
        }

        public async Task<QueryBillToOSSSubscriptionResponse> QueryBillToOSSSubscriptionAsync(QueryBillToOSSSubscriptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryBillToOSSSubscriptionWithOptionsAsync(request, runtime);
        }

        public QueryAccountBillResponse QueryAccountBillWithOptions(QueryAccountBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountBillResponse>(DoRequest("QueryAccountBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryAccountBillResponse> QueryAccountBillWithOptionsAsync(QueryAccountBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountBillResponse>(await DoRequestAsync("QueryAccountBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryAccountBillResponse QueryAccountBill(QueryAccountBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryAccountBillWithOptions(request, runtime);
        }

        public async Task<QueryAccountBillResponse> QueryAccountBillAsync(QueryAccountBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryAccountBillWithOptionsAsync(request, runtime);
        }

        public CreateCostUnitResponse CreateCostUnitWithOptions(CreateCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCostUnitResponse>(DoRequest("CreateCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateCostUnitResponse> CreateCostUnitWithOptionsAsync(CreateCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateCostUnitResponse>(await DoRequestAsync("CreateCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CreateCostUnitResponse CreateCostUnit(CreateCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateCostUnitWithOptions(request, runtime);
        }

        public async Task<CreateCostUnitResponse> CreateCostUnitAsync(CreateCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateCostUnitWithOptionsAsync(request, runtime);
        }

        public ModifyCostUnitResponse ModifyCostUnitWithOptions(ModifyCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCostUnitResponse>(DoRequest("ModifyCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyCostUnitResponse> ModifyCostUnitWithOptionsAsync(ModifyCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyCostUnitResponse>(await DoRequestAsync("ModifyCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public ModifyCostUnitResponse ModifyCostUnit(ModifyCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyCostUnitWithOptions(request, runtime);
        }

        public async Task<ModifyCostUnitResponse> ModifyCostUnitAsync(ModifyCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyCostUnitWithOptionsAsync(request, runtime);
        }

        public QueryCostUnitResponse QueryCostUnitWithOptions(QueryCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCostUnitResponse>(DoRequest("QueryCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCostUnitResponse> QueryCostUnitWithOptionsAsync(QueryCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCostUnitResponse>(await DoRequestAsync("QueryCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryCostUnitResponse QueryCostUnit(QueryCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCostUnitWithOptions(request, runtime);
        }

        public async Task<QueryCostUnitResponse> QueryCostUnitAsync(QueryCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCostUnitWithOptionsAsync(request, runtime);
        }

        public DeleteCostUnitResponse DeleteCostUnitWithOptions(DeleteCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCostUnitResponse>(DoRequest("DeleteCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DeleteCostUnitResponse> DeleteCostUnitWithOptionsAsync(DeleteCostUnitRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DeleteCostUnitResponse>(await DoRequestAsync("DeleteCostUnit", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public DeleteCostUnitResponse DeleteCostUnit(DeleteCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DeleteCostUnitWithOptions(request, runtime);
        }

        public async Task<DeleteCostUnitResponse> DeleteCostUnitAsync(DeleteCostUnitRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DeleteCostUnitWithOptionsAsync(request, runtime);
        }

        public AllocateCostUnitResourceResponse AllocateCostUnitResourceWithOptions(AllocateCostUnitResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateCostUnitResourceResponse>(DoRequest("AllocateCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<AllocateCostUnitResourceResponse> AllocateCostUnitResourceWithOptionsAsync(AllocateCostUnitResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<AllocateCostUnitResourceResponse>(await DoRequestAsync("AllocateCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public AllocateCostUnitResourceResponse AllocateCostUnitResource(AllocateCostUnitResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return AllocateCostUnitResourceWithOptions(request, runtime);
        }

        public async Task<AllocateCostUnitResourceResponse> AllocateCostUnitResourceAsync(AllocateCostUnitResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await AllocateCostUnitResourceWithOptionsAsync(request, runtime);
        }

        public QueryCostUnitResourceResponse QueryCostUnitResourceWithOptions(QueryCostUnitResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCostUnitResourceResponse>(DoRequest("QueryCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCostUnitResourceResponse> QueryCostUnitResourceWithOptionsAsync(QueryCostUnitResourceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCostUnitResourceResponse>(await DoRequestAsync("QueryCostUnitResource", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryCostUnitResourceResponse QueryCostUnitResource(QueryCostUnitResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCostUnitResourceWithOptions(request, runtime);
        }

        public async Task<QueryCostUnitResourceResponse> QueryCostUnitResourceAsync(QueryCostUnitResourceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCostUnitResourceWithOptionsAsync(request, runtime);
        }

        public RenewResourcePackageResponse RenewResourcePackageWithOptions(RenewResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewResourcePackageResponse>(DoRequest("RenewResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewResourcePackageResponse> RenewResourcePackageWithOptionsAsync(RenewResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewResourcePackageResponse>(await DoRequestAsync("RenewResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public RenewResourcePackageResponse RenewResourcePackage(RenewResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RenewResourcePackageWithOptions(request, runtime);
        }

        public async Task<RenewResourcePackageResponse> RenewResourcePackageAsync(RenewResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RenewResourcePackageWithOptionsAsync(request, runtime);
        }

        public UpgradeResourcePackageResponse UpgradeResourcePackageWithOptions(UpgradeResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeResourcePackageResponse>(DoRequest("UpgradeResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UpgradeResourcePackageResponse> UpgradeResourcePackageWithOptionsAsync(UpgradeResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UpgradeResourcePackageResponse>(await DoRequestAsync("UpgradeResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public UpgradeResourcePackageResponse UpgradeResourcePackage(UpgradeResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UpgradeResourcePackageWithOptions(request, runtime);
        }

        public async Task<UpgradeResourcePackageResponse> UpgradeResourcePackageAsync(UpgradeResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UpgradeResourcePackageWithOptionsAsync(request, runtime);
        }

        public CreateAgAccountResponse CreateAgAccountWithOptions(CreateAgAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAgAccountResponse>(DoRequest("CreateAgAccount", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateAgAccountResponse> CreateAgAccountWithOptionsAsync(CreateAgAccountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateAgAccountResponse>(await DoRequestAsync("CreateAgAccount", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CreateAgAccountResponse CreateAgAccount(CreateAgAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateAgAccountWithOptions(request, runtime);
        }

        public async Task<CreateAgAccountResponse> CreateAgAccountAsync(CreateAgAccountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateAgAccountWithOptionsAsync(request, runtime);
        }

        public GetCustomerAccountInfoResponse GetCustomerAccountInfoWithOptions(GetCustomerAccountInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCustomerAccountInfoResponse>(DoRequest("GetCustomerAccountInfo", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetCustomerAccountInfoResponse> GetCustomerAccountInfoWithOptionsAsync(GetCustomerAccountInfoRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCustomerAccountInfoResponse>(await DoRequestAsync("GetCustomerAccountInfo", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetCustomerAccountInfoResponse GetCustomerAccountInfo(GetCustomerAccountInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetCustomerAccountInfoWithOptions(request, runtime);
        }

        public async Task<GetCustomerAccountInfoResponse> GetCustomerAccountInfoAsync(GetCustomerAccountInfoRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetCustomerAccountInfoWithOptionsAsync(request, runtime);
        }

        public GetCustomerListResponse GetCustomerListWithOptions(GetCustomerListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCustomerListResponse>(DoRequest("GetCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetCustomerListResponse> GetCustomerListWithOptionsAsync(GetCustomerListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetCustomerListResponse>(await DoRequestAsync("GetCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetCustomerListResponse GetCustomerList(GetCustomerListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetCustomerListWithOptions(request, runtime);
        }

        public async Task<GetCustomerListResponse> GetCustomerListAsync(GetCustomerListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetCustomerListWithOptionsAsync(request, runtime);
        }

        public ChangeResellerConsumeAmountResponse ChangeResellerConsumeAmountWithOptions(ChangeResellerConsumeAmountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeResellerConsumeAmountResponse>(DoRequest("ChangeResellerConsumeAmount", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ChangeResellerConsumeAmountResponse> ChangeResellerConsumeAmountWithOptionsAsync(ChangeResellerConsumeAmountRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ChangeResellerConsumeAmountResponse>(await DoRequestAsync("ChangeResellerConsumeAmount", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public ChangeResellerConsumeAmountResponse ChangeResellerConsumeAmount(ChangeResellerConsumeAmountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ChangeResellerConsumeAmountWithOptions(request, runtime);
        }

        public async Task<ChangeResellerConsumeAmountResponse> ChangeResellerConsumeAmountAsync(ChangeResellerConsumeAmountRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ChangeResellerConsumeAmountWithOptionsAsync(request, runtime);
        }

        public SetResellerUserStatusResponse SetResellerUserStatusWithOptions(SetResellerUserStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserStatusResponse>(DoRequest("SetResellerUserStatus", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetResellerUserStatusResponse> SetResellerUserStatusWithOptionsAsync(SetResellerUserStatusRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserStatusResponse>(await DoRequestAsync("SetResellerUserStatus", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public SetResellerUserStatusResponse SetResellerUserStatus(SetResellerUserStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetResellerUserStatusWithOptions(request, runtime);
        }

        public async Task<SetResellerUserStatusResponse> SetResellerUserStatusAsync(SetResellerUserStatusRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetResellerUserStatusWithOptionsAsync(request, runtime);
        }

        public CreateResellerUserQuotaResponse CreateResellerUserQuotaWithOptions(CreateResellerUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateResellerUserQuotaResponse>(DoRequest("CreateResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateResellerUserQuotaResponse> CreateResellerUserQuotaWithOptionsAsync(CreateResellerUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateResellerUserQuotaResponse>(await DoRequestAsync("CreateResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CreateResellerUserQuotaResponse CreateResellerUserQuota(CreateResellerUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateResellerUserQuotaWithOptions(request, runtime);
        }

        public async Task<CreateResellerUserQuotaResponse> CreateResellerUserQuotaAsync(CreateResellerUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateResellerUserQuotaWithOptionsAsync(request, runtime);
        }

        public SetResellerUserQuotaResponse SetResellerUserQuotaWithOptions(SetResellerUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserQuotaResponse>(DoRequest("SetResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetResellerUserQuotaResponse> SetResellerUserQuotaWithOptionsAsync(SetResellerUserQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserQuotaResponse>(await DoRequestAsync("SetResellerUserQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public SetResellerUserQuotaResponse SetResellerUserQuota(SetResellerUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetResellerUserQuotaWithOptions(request, runtime);
        }

        public async Task<SetResellerUserQuotaResponse> SetResellerUserQuotaAsync(SetResellerUserQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetResellerUserQuotaWithOptionsAsync(request, runtime);
        }

        public QueryResellerAvailableQuotaResponse QueryResellerAvailableQuotaWithOptions(QueryResellerAvailableQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryResellerAvailableQuotaResponse>(DoRequest("QueryResellerAvailableQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryResellerAvailableQuotaResponse> QueryResellerAvailableQuotaWithOptionsAsync(QueryResellerAvailableQuotaRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryResellerAvailableQuotaResponse>(await DoRequestAsync("QueryResellerAvailableQuota", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryResellerAvailableQuotaResponse QueryResellerAvailableQuota(QueryResellerAvailableQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryResellerAvailableQuotaWithOptions(request, runtime);
        }

        public async Task<QueryResellerAvailableQuotaResponse> QueryResellerAvailableQuotaAsync(QueryResellerAvailableQuotaRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryResellerAvailableQuotaWithOptionsAsync(request, runtime);
        }

        public SetResellerUserAlarmThresholdResponse SetResellerUserAlarmThresholdWithOptions(SetResellerUserAlarmThresholdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserAlarmThresholdResponse>(DoRequest("SetResellerUserAlarmThreshold", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetResellerUserAlarmThresholdResponse> SetResellerUserAlarmThresholdWithOptionsAsync(SetResellerUserAlarmThresholdRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetResellerUserAlarmThresholdResponse>(await DoRequestAsync("SetResellerUserAlarmThreshold", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public SetResellerUserAlarmThresholdResponse SetResellerUserAlarmThreshold(SetResellerUserAlarmThresholdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetResellerUserAlarmThresholdWithOptions(request, runtime);
        }

        public async Task<SetResellerUserAlarmThresholdResponse> SetResellerUserAlarmThresholdAsync(SetResellerUserAlarmThresholdRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetResellerUserAlarmThresholdWithOptionsAsync(request, runtime);
        }

        public QueryAccountTransactionsResponse QueryAccountTransactionsWithOptions(QueryAccountTransactionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountTransactionsResponse>(DoRequest("QueryAccountTransactions", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryAccountTransactionsResponse> QueryAccountTransactionsWithOptionsAsync(QueryAccountTransactionsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountTransactionsResponse>(await DoRequestAsync("QueryAccountTransactions", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryAccountTransactionsResponse QueryAccountTransactions(QueryAccountTransactionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryAccountTransactionsWithOptions(request, runtime);
        }

        public async Task<QueryAccountTransactionsResponse> QueryAccountTransactionsAsync(QueryAccountTransactionsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryAccountTransactionsWithOptionsAsync(request, runtime);
        }

        public UnsubscribeBillToOSSResponse UnsubscribeBillToOSSWithOptions(UnsubscribeBillToOSSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnsubscribeBillToOSSResponse>(DoRequest("UnsubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<UnsubscribeBillToOSSResponse> UnsubscribeBillToOSSWithOptionsAsync(UnsubscribeBillToOSSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<UnsubscribeBillToOSSResponse>(await DoRequestAsync("UnsubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public UnsubscribeBillToOSSResponse UnsubscribeBillToOSS(UnsubscribeBillToOSSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return UnsubscribeBillToOSSWithOptions(request, runtime);
        }

        public async Task<UnsubscribeBillToOSSResponse> UnsubscribeBillToOSSAsync(UnsubscribeBillToOSSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await UnsubscribeBillToOSSWithOptionsAsync(request, runtime);
        }

        public SubscribeBillToOSSResponse SubscribeBillToOSSWithOptions(SubscribeBillToOSSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubscribeBillToOSSResponse>(DoRequest("SubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SubscribeBillToOSSResponse> SubscribeBillToOSSWithOptionsAsync(SubscribeBillToOSSRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SubscribeBillToOSSResponse>(await DoRequestAsync("SubscribeBillToOSS", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public SubscribeBillToOSSResponse SubscribeBillToOSS(SubscribeBillToOSSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SubscribeBillToOSSWithOptions(request, runtime);
        }

        public async Task<SubscribeBillToOSSResponse> SubscribeBillToOSSAsync(SubscribeBillToOSSRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SubscribeBillToOSSWithOptionsAsync(request, runtime);
        }

        public QueryUserOmsDataResponse QueryUserOmsDataWithOptions(QueryUserOmsDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryUserOmsDataResponse>(DoRequest("QueryUserOmsData", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryUserOmsDataResponse> QueryUserOmsDataWithOptionsAsync(QueryUserOmsDataRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryUserOmsDataResponse>(await DoRequestAsync("QueryUserOmsData", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryUserOmsDataResponse QueryUserOmsData(QueryUserOmsDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryUserOmsDataWithOptions(request, runtime);
        }

        public async Task<QueryUserOmsDataResponse> QueryUserOmsDataAsync(QueryUserOmsDataRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryUserOmsDataWithOptionsAsync(request, runtime);
        }

        public CancelOrderResponse CancelOrderWithOptions(CancelOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderResponse>(DoRequest("CancelOrder", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CancelOrderResponse> CancelOrderWithOptionsAsync(CancelOrderRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CancelOrderResponse>(await DoRequestAsync("CancelOrder", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CancelOrderResponse CancelOrder(CancelOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CancelOrderWithOptions(request, runtime);
        }

        public async Task<CancelOrderResponse> CancelOrderAsync(CancelOrderRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CancelOrderWithOptionsAsync(request, runtime);
        }

        public ApplyInvoiceResponse ApplyInvoiceWithOptions(ApplyInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyInvoiceResponse>(DoRequest("ApplyInvoice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ApplyInvoiceResponse> ApplyInvoiceWithOptionsAsync(ApplyInvoiceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ApplyInvoiceResponse>(await DoRequestAsync("ApplyInvoice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public ApplyInvoiceResponse ApplyInvoice(ApplyInvoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ApplyInvoiceWithOptions(request, runtime);
        }

        public async Task<ApplyInvoiceResponse> ApplyInvoiceAsync(ApplyInvoiceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ApplyInvoiceWithOptionsAsync(request, runtime);
        }

        public QueryCustomerAddressListResponse QueryCustomerAddressListWithOptions(QueryCustomerAddressListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCustomerAddressListResponse>(DoRequest("QueryCustomerAddressList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCustomerAddressListResponse> QueryCustomerAddressListWithOptionsAsync(QueryCustomerAddressListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCustomerAddressListResponse>(await DoRequestAsync("QueryCustomerAddressList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryCustomerAddressListResponse QueryCustomerAddressList(QueryCustomerAddressListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCustomerAddressListWithOptions(request, runtime);
        }

        public async Task<QueryCustomerAddressListResponse> QueryCustomerAddressListAsync(QueryCustomerAddressListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCustomerAddressListWithOptionsAsync(request, runtime);
        }

        public QueryEvaluateListResponse QueryEvaluateListWithOptions(QueryEvaluateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryEvaluateListResponse>(DoRequest("QueryEvaluateList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryEvaluateListResponse> QueryEvaluateListWithOptionsAsync(QueryEvaluateListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryEvaluateListResponse>(await DoRequestAsync("QueryEvaluateList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryEvaluateListResponse QueryEvaluateList(QueryEvaluateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryEvaluateListWithOptions(request, runtime);
        }

        public async Task<QueryEvaluateListResponse> QueryEvaluateListAsync(QueryEvaluateListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryEvaluateListWithOptionsAsync(request, runtime);
        }

        public QueryInvoicingCustomerListResponse QueryInvoicingCustomerListWithOptions(QueryInvoicingCustomerListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInvoicingCustomerListResponse>(DoRequest("QueryInvoicingCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryInvoicingCustomerListResponse> QueryInvoicingCustomerListWithOptionsAsync(QueryInvoicingCustomerListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInvoicingCustomerListResponse>(await DoRequestAsync("QueryInvoicingCustomerList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryInvoicingCustomerListResponse QueryInvoicingCustomerList(QueryInvoicingCustomerListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryInvoicingCustomerListWithOptions(request, runtime);
        }

        public async Task<QueryInvoicingCustomerListResponse> QueryInvoicingCustomerListAsync(QueryInvoicingCustomerListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryInvoicingCustomerListWithOptionsAsync(request, runtime);
        }

        public QueryBillOverviewResponse QueryBillOverviewWithOptions(QueryBillOverviewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillOverviewResponse>(DoRequest("QueryBillOverview", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryBillOverviewResponse> QueryBillOverviewWithOptionsAsync(QueryBillOverviewRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillOverviewResponse>(await DoRequestAsync("QueryBillOverview", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryBillOverviewResponse QueryBillOverview(QueryBillOverviewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryBillOverviewWithOptions(request, runtime);
        }

        public async Task<QueryBillOverviewResponse> QueryBillOverviewAsync(QueryBillOverviewRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryBillOverviewWithOptionsAsync(request, runtime);
        }

        public QueryBillResponse QueryBillWithOptions(QueryBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillResponse>(DoRequest("QueryBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryBillResponse> QueryBillWithOptionsAsync(QueryBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryBillResponse>(await DoRequestAsync("QueryBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryBillResponse QueryBill(QueryBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryBillWithOptions(request, runtime);
        }

        public async Task<QueryBillResponse> QueryBillAsync(QueryBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryBillWithOptionsAsync(request, runtime);
        }

        public QueryInstanceBillResponse QueryInstanceBillWithOptions(QueryInstanceBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInstanceBillResponse>(DoRequest("QueryInstanceBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryInstanceBillResponse> QueryInstanceBillWithOptionsAsync(QueryInstanceBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInstanceBillResponse>(await DoRequestAsync("QueryInstanceBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryInstanceBillResponse QueryInstanceBill(QueryInstanceBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryInstanceBillWithOptions(request, runtime);
        }

        public async Task<QueryInstanceBillResponse> QueryInstanceBillAsync(QueryInstanceBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryInstanceBillWithOptionsAsync(request, runtime);
        }

        public EnableBillGenerationResponse EnableBillGenerationWithOptions(EnableBillGenerationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableBillGenerationResponse>(DoRequest("EnableBillGeneration", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<EnableBillGenerationResponse> EnableBillGenerationWithOptionsAsync(EnableBillGenerationRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<EnableBillGenerationResponse>(await DoRequestAsync("EnableBillGeneration", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public EnableBillGenerationResponse EnableBillGeneration(EnableBillGenerationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return EnableBillGenerationWithOptions(request, runtime);
        }

        public async Task<EnableBillGenerationResponse> EnableBillGenerationAsync(EnableBillGenerationRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await EnableBillGenerationWithOptionsAsync(request, runtime);
        }

        public QueryRedeemResponse QueryRedeemWithOptions(QueryRedeemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRedeemResponse>(DoRequest("QueryRedeem", "HTTPS", "GET", "2017-12-14", "AK", request.ToMap(), null, runtime));
        }

        public async Task<QueryRedeemResponse> QueryRedeemWithOptionsAsync(QueryRedeemRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryRedeemResponse>(await DoRequestAsync("QueryRedeem", "HTTPS", "GET", "2017-12-14", "AK", request.ToMap(), null, runtime));
        }

        public QueryRedeemResponse QueryRedeem(QueryRedeemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryRedeemWithOptions(request, runtime);
        }

        public async Task<QueryRedeemResponse> QueryRedeemAsync(QueryRedeemRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryRedeemWithOptionsAsync(request, runtime);
        }

        public ConvertChargeTypeResponse ConvertChargeTypeWithOptions(ConvertChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertChargeTypeResponse>(DoRequest("ConvertChargeType", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ConvertChargeTypeResponse> ConvertChargeTypeWithOptionsAsync(ConvertChargeTypeRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ConvertChargeTypeResponse>(await DoRequestAsync("ConvertChargeType", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public ConvertChargeTypeResponse ConvertChargeType(ConvertChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ConvertChargeTypeWithOptions(request, runtime);
        }

        public async Task<ConvertChargeTypeResponse> ConvertChargeTypeAsync(ConvertChargeTypeRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ConvertChargeTypeWithOptionsAsync(request, runtime);
        }

        public CreateInstanceResponse CreateInstanceWithOptions(CreateInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateInstanceResponse>(DoRequest("CreateInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateInstanceResponse> CreateInstanceWithOptionsAsync(CreateInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateInstanceResponse>(await DoRequestAsync("CreateInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CreateInstanceResponse CreateInstance(CreateInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateInstanceWithOptions(request, runtime);
        }

        public async Task<CreateInstanceResponse> CreateInstanceAsync(CreateInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateInstanceWithOptionsAsync(request, runtime);
        }

        public ModifyInstanceResponse ModifyInstanceWithOptions(ModifyInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceResponse>(DoRequest("ModifyInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<ModifyInstanceResponse> ModifyInstanceWithOptionsAsync(ModifyInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<ModifyInstanceResponse>(await DoRequestAsync("ModifyInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public ModifyInstanceResponse ModifyInstance(ModifyInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return ModifyInstanceWithOptions(request, runtime);
        }

        public async Task<ModifyInstanceResponse> ModifyInstanceAsync(ModifyInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await ModifyInstanceWithOptionsAsync(request, runtime);
        }

        public DescribePricingModuleResponse DescribePricingModuleWithOptions(DescribePricingModuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePricingModuleResponse>(DoRequest("DescribePricingModule", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribePricingModuleResponse> DescribePricingModuleWithOptionsAsync(DescribePricingModuleRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribePricingModuleResponse>(await DoRequestAsync("DescribePricingModule", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public DescribePricingModuleResponse DescribePricingModule(DescribePricingModuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribePricingModuleWithOptions(request, runtime);
        }

        public async Task<DescribePricingModuleResponse> DescribePricingModuleAsync(DescribePricingModuleRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribePricingModuleWithOptionsAsync(request, runtime);
        }

        public QueryProductListResponse QueryProductListWithOptions(QueryProductListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryProductListResponse>(DoRequest("QueryProductList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryProductListResponse> QueryProductListWithOptionsAsync(QueryProductListRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryProductListResponse>(await DoRequestAsync("QueryProductList", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryProductListResponse QueryProductList(QueryProductListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryProductListWithOptions(request, runtime);
        }

        public async Task<QueryProductListResponse> QueryProductListAsync(QueryProductListRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryProductListWithOptionsAsync(request, runtime);
        }

        public QueryInstanceGaapCostResponse QueryInstanceGaapCostWithOptions(QueryInstanceGaapCostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInstanceGaapCostResponse>(DoRequest("QueryInstanceGaapCost", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryInstanceGaapCostResponse> QueryInstanceGaapCostWithOptionsAsync(QueryInstanceGaapCostRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryInstanceGaapCostResponse>(await DoRequestAsync("QueryInstanceGaapCost", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryInstanceGaapCostResponse QueryInstanceGaapCost(QueryInstanceGaapCostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryInstanceGaapCostWithOptions(request, runtime);
        }

        public async Task<QueryInstanceGaapCostResponse> QueryInstanceGaapCostAsync(QueryInstanceGaapCostRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryInstanceGaapCostWithOptionsAsync(request, runtime);
        }

        public RenewInstanceResponse RenewInstanceWithOptions(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(DoRequest("RenewInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<RenewInstanceResponse> RenewInstanceWithOptionsAsync(RenewInstanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<RenewInstanceResponse>(await DoRequestAsync("RenewInstance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public RenewInstanceResponse RenewInstance(RenewInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return RenewInstanceWithOptions(request, runtime);
        }

        public async Task<RenewInstanceResponse> RenewInstanceAsync(RenewInstanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await RenewInstanceWithOptionsAsync(request, runtime);
        }

        public GetOrderDetailResponse GetOrderDetailWithOptions(GetOrderDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetOrderDetailResponse>(DoRequest("GetOrderDetail", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetOrderDetailResponse> GetOrderDetailWithOptionsAsync(GetOrderDetailRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetOrderDetailResponse>(await DoRequestAsync("GetOrderDetail", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetOrderDetailResponse GetOrderDetail(GetOrderDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetOrderDetailWithOptions(request, runtime);
        }

        public async Task<GetOrderDetailResponse> GetOrderDetailAsync(GetOrderDetailRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetOrderDetailWithOptionsAsync(request, runtime);
        }

        public QueryOrdersResponse QueryOrdersWithOptions(QueryOrdersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryOrdersResponse>(DoRequest("QueryOrders", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryOrdersResponse> QueryOrdersWithOptionsAsync(QueryOrdersRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryOrdersResponse>(await DoRequestAsync("QueryOrders", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryOrdersResponse QueryOrders(QueryOrdersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryOrdersWithOptions(request, runtime);
        }

        public async Task<QueryOrdersResponse> QueryOrdersAsync(QueryOrdersRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryOrdersWithOptionsAsync(request, runtime);
        }

        public QueryMonthlyInstanceConsumptionResponse QueryMonthlyInstanceConsumptionWithOptions(QueryMonthlyInstanceConsumptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMonthlyInstanceConsumptionResponse>(DoRequest("QueryMonthlyInstanceConsumption", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryMonthlyInstanceConsumptionResponse> QueryMonthlyInstanceConsumptionWithOptionsAsync(QueryMonthlyInstanceConsumptionRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMonthlyInstanceConsumptionResponse>(await DoRequestAsync("QueryMonthlyInstanceConsumption", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryMonthlyInstanceConsumptionResponse QueryMonthlyInstanceConsumption(QueryMonthlyInstanceConsumptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryMonthlyInstanceConsumptionWithOptions(request, runtime);
        }

        public async Task<QueryMonthlyInstanceConsumptionResponse> QueryMonthlyInstanceConsumptionAsync(QueryMonthlyInstanceConsumptionRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryMonthlyInstanceConsumptionWithOptionsAsync(request, runtime);
        }

        public QuerySettlementBillResponse QuerySettlementBillWithOptions(QuerySettlementBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySettlementBillResponse>(DoRequest("QuerySettlementBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QuerySettlementBillResponse> QuerySettlementBillWithOptionsAsync(QuerySettlementBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QuerySettlementBillResponse>(await DoRequestAsync("QuerySettlementBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QuerySettlementBillResponse QuerySettlementBill(QuerySettlementBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QuerySettlementBillWithOptions(request, runtime);
        }

        public async Task<QuerySettlementBillResponse> QuerySettlementBillAsync(QuerySettlementBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QuerySettlementBillWithOptionsAsync(request, runtime);
        }

        public QueryMonthlyBillResponse QueryMonthlyBillWithOptions(QueryMonthlyBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMonthlyBillResponse>(DoRequest("QueryMonthlyBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryMonthlyBillResponse> QueryMonthlyBillWithOptionsAsync(QueryMonthlyBillRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryMonthlyBillResponse>(await DoRequestAsync("QueryMonthlyBill", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryMonthlyBillResponse QueryMonthlyBill(QueryMonthlyBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryMonthlyBillWithOptions(request, runtime);
        }

        public async Task<QueryMonthlyBillResponse> QueryMonthlyBillAsync(QueryMonthlyBillRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryMonthlyBillWithOptionsAsync(request, runtime);
        }

        public SetRenewalResponse SetRenewalWithOptions(SetRenewalRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetRenewalResponse>(DoRequest("SetRenewal", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<SetRenewalResponse> SetRenewalWithOptionsAsync(SetRenewalRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<SetRenewalResponse>(await DoRequestAsync("SetRenewal", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public SetRenewalResponse SetRenewal(SetRenewalRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return SetRenewalWithOptions(request, runtime);
        }

        public async Task<SetRenewalResponse> SetRenewalAsync(SetRenewalRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await SetRenewalWithOptionsAsync(request, runtime);
        }

        public QueryAvailableInstancesResponse QueryAvailableInstancesWithOptions(QueryAvailableInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAvailableInstancesResponse>(DoRequest("QueryAvailableInstances", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryAvailableInstancesResponse> QueryAvailableInstancesWithOptionsAsync(QueryAvailableInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAvailableInstancesResponse>(await DoRequestAsync("QueryAvailableInstances", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryAvailableInstancesResponse QueryAvailableInstances(QueryAvailableInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryAvailableInstancesWithOptions(request, runtime);
        }

        public async Task<QueryAvailableInstancesResponse> QueryAvailableInstancesAsync(QueryAvailableInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryAvailableInstancesWithOptionsAsync(request, runtime);
        }

        public CreateResourcePackageResponse CreateResourcePackageWithOptions(CreateResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateResourcePackageResponse>(DoRequest("CreateResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<CreateResourcePackageResponse> CreateResourcePackageWithOptionsAsync(CreateResourcePackageRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<CreateResourcePackageResponse>(await DoRequestAsync("CreateResourcePackage", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public CreateResourcePackageResponse CreateResourcePackage(CreateResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return CreateResourcePackageWithOptions(request, runtime);
        }

        public async Task<CreateResourcePackageResponse> CreateResourcePackageAsync(CreateResourcePackageRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await CreateResourcePackageWithOptionsAsync(request, runtime);
        }

        public QueryResourcePackageInstancesResponse QueryResourcePackageInstancesWithOptions(QueryResourcePackageInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryResourcePackageInstancesResponse>(DoRequest("QueryResourcePackageInstances", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryResourcePackageInstancesResponse> QueryResourcePackageInstancesWithOptionsAsync(QueryResourcePackageInstancesRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryResourcePackageInstancesResponse>(await DoRequestAsync("QueryResourcePackageInstances", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryResourcePackageInstancesResponse QueryResourcePackageInstances(QueryResourcePackageInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryResourcePackageInstancesWithOptions(request, runtime);
        }

        public async Task<QueryResourcePackageInstancesResponse> QueryResourcePackageInstancesAsync(QueryResourcePackageInstancesRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryResourcePackageInstancesWithOptionsAsync(request, runtime);
        }

        public GetResourcePackagePriceResponse GetResourcePackagePriceWithOptions(GetResourcePackagePriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourcePackagePriceResponse>(DoRequest("GetResourcePackagePrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetResourcePackagePriceResponse> GetResourcePackagePriceWithOptionsAsync(GetResourcePackagePriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetResourcePackagePriceResponse>(await DoRequestAsync("GetResourcePackagePrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetResourcePackagePriceResponse GetResourcePackagePrice(GetResourcePackagePriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetResourcePackagePriceWithOptions(request, runtime);
        }

        public async Task<GetResourcePackagePriceResponse> GetResourcePackagePriceAsync(GetResourcePackagePriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetResourcePackagePriceWithOptionsAsync(request, runtime);
        }

        public GetSubscriptionPriceResponse GetSubscriptionPriceWithOptions(GetSubscriptionPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSubscriptionPriceResponse>(DoRequest("GetSubscriptionPrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetSubscriptionPriceResponse> GetSubscriptionPriceWithOptionsAsync(GetSubscriptionPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetSubscriptionPriceResponse>(await DoRequestAsync("GetSubscriptionPrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetSubscriptionPriceResponse GetSubscriptionPrice(GetSubscriptionPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetSubscriptionPriceWithOptions(request, runtime);
        }

        public async Task<GetSubscriptionPriceResponse> GetSubscriptionPriceAsync(GetSubscriptionPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetSubscriptionPriceWithOptionsAsync(request, runtime);
        }

        public GetPayAsYouGoPriceResponse GetPayAsYouGoPriceWithOptions(GetPayAsYouGoPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPayAsYouGoPriceResponse>(DoRequest("GetPayAsYouGoPrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<GetPayAsYouGoPriceResponse> GetPayAsYouGoPriceWithOptionsAsync(GetPayAsYouGoPriceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<GetPayAsYouGoPriceResponse>(await DoRequestAsync("GetPayAsYouGoPrice", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public GetPayAsYouGoPriceResponse GetPayAsYouGoPrice(GetPayAsYouGoPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return GetPayAsYouGoPriceWithOptions(request, runtime);
        }

        public async Task<GetPayAsYouGoPriceResponse> GetPayAsYouGoPriceAsync(GetPayAsYouGoPriceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await GetPayAsYouGoPriceWithOptionsAsync(request, runtime);
        }

        public QueryPrepaidCardsResponse QueryPrepaidCardsWithOptions(QueryPrepaidCardsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryPrepaidCardsResponse>(DoRequest("QueryPrepaidCards", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryPrepaidCardsResponse> QueryPrepaidCardsWithOptionsAsync(QueryPrepaidCardsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryPrepaidCardsResponse>(await DoRequestAsync("QueryPrepaidCards", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryPrepaidCardsResponse QueryPrepaidCards(QueryPrepaidCardsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryPrepaidCardsWithOptions(request, runtime);
        }

        public async Task<QueryPrepaidCardsResponse> QueryPrepaidCardsAsync(QueryPrepaidCardsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryPrepaidCardsWithOptionsAsync(request, runtime);
        }

        public QueryCashCouponsResponse QueryCashCouponsWithOptions(QueryCashCouponsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCashCouponsResponse>(DoRequest("QueryCashCoupons", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryCashCouponsResponse> QueryCashCouponsWithOptionsAsync(QueryCashCouponsRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryCashCouponsResponse>(await DoRequestAsync("QueryCashCoupons", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryCashCouponsResponse QueryCashCoupons(QueryCashCouponsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryCashCouponsWithOptions(request, runtime);
        }

        public async Task<QueryCashCouponsResponse> QueryCashCouponsAsync(QueryCashCouponsRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryCashCouponsWithOptionsAsync(request, runtime);
        }

        public QueryAccountBalanceResponse QueryAccountBalanceWithOptions(QueryAccountBalanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountBalanceResponse>(DoRequest("QueryAccountBalance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<QueryAccountBalanceResponse> QueryAccountBalanceWithOptionsAsync(QueryAccountBalanceRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<QueryAccountBalanceResponse>(await DoRequestAsync("QueryAccountBalance", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public QueryAccountBalanceResponse QueryAccountBalance(QueryAccountBalanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return QueryAccountBalanceWithOptions(request, runtime);
        }

        public async Task<QueryAccountBalanceResponse> QueryAccountBalanceAsync(QueryAccountBalanceRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await QueryAccountBalanceWithOptionsAsync(request, runtime);
        }

        public DescribeResourcePackageProductResponse DescribeResourcePackageProductWithOptions(DescribeResourcePackageProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcePackageProductResponse>(DoRequest("DescribeResourcePackageProduct", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public async Task<DescribeResourcePackageProductResponse> DescribeResourcePackageProductWithOptionsAsync(DescribeResourcePackageProductRequest request, AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime)
        {
            AlibabaCloud.TeaUtil.Common.ValidateModel(request);
            return TeaModel.ToObject<DescribeResourcePackageProductResponse>(await DoRequestAsync("DescribeResourcePackageProduct", "HTTPS", "POST", "2017-12-14", "AK", null, request.ToMap(), runtime));
        }

        public DescribeResourcePackageProductResponse DescribeResourcePackageProduct(DescribeResourcePackageProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return DescribeResourcePackageProductWithOptions(request, runtime);
        }

        public async Task<DescribeResourcePackageProductResponse> DescribeResourcePackageProductAsync(DescribeResourcePackageProductRequest request)
        {
            AlibabaCloud.TeaUtil.Models.RuntimeOptions runtime = new AlibabaCloud.TeaUtil.Models.RuntimeOptions();
            return await DescribeResourcePackageProductWithOptionsAsync(request, runtime);
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

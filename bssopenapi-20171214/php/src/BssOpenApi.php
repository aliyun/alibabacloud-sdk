<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ApplyInvoiceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CancelOrderResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ChangeResellerConsumeAmountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ConvertChargeTypeResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\EnableBillGenerationResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAvailableInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillOverviewResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillToOSSSubscriptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryOrdersResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResellerAvailableQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettlementBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySplitItemBillResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\RenewResourcePackageResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetRenewalResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserAlarmThresholdResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserQuotaResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SetResellerUserStatusResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\SubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UnsubscribeBillToOSSResponse;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageRequest;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\UpgradeResourcePackageResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class BssOpenApi extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-northeast-2-pop'          => 'business.ap-southeast-1.aliyuncs.com',
            'ap-south-1'                  => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-1'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-2'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-3'              => 'business.ap-southeast-1.aliyuncs.com',
            'ap-southeast-5'              => 'business.ap-southeast-1.aliyuncs.com',
            'cn-beijing'                  => 'business.aliyuncs.com',
            'cn-beijing-finance-1'        => 'business.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'business.aliyuncs.com',
            'cn-beijing-gov-1'            => 'business.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'business.aliyuncs.com',
            'cn-chengdu'                  => 'business.aliyuncs.com',
            'cn-edge-1'                   => 'business.aliyuncs.com',
            'cn-fujian'                   => 'business.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'business.aliyuncs.com',
            'cn-hangzhou'                 => 'business.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'business.aliyuncs.com',
            'cn-hangzhou-finance'         => 'business.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'business.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'business.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'business.aliyuncs.com',
            'cn-hongkong'                 => 'business.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'business.aliyuncs.com',
            'cn-huhehaote'                => 'business.aliyuncs.com',
            'cn-north-2-gov-1'            => 'business.aliyuncs.com',
            'cn-qingdao'                  => 'business.aliyuncs.com',
            'cn-qingdao-nebula'           => 'business.aliyuncs.com',
            'cn-shanghai'                 => 'business.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'business.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'business.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'business.aliyuncs.com',
            'cn-shanghai-inner'           => 'business.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'business.aliyuncs.com',
            'cn-shenzhen'                 => 'business.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'business.aliyuncs.com',
            'cn-shenzhen-inner'           => 'business.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'business.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'business.aliyuncs.com',
            'cn-wuhan'                    => 'business.aliyuncs.com',
            'cn-yushanfang'               => 'business.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'business.aliyuncs.com',
            'cn-zhangjiakou'              => 'business.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'business.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'business.aliyuncs.com',
            'eu-central-1'                => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'eu-west-1-oxs'               => 'business.ap-southeast-1.aliyuncs.com',
            'me-east-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'rus-west-1-pop'              => 'business.ap-southeast-1.aliyuncs.com',
            'us-east-1'                   => 'business.ap-southeast-1.aliyuncs.com',
            'us-west-1'                   => 'business.ap-southeast-1.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('bssopenapi', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBillWithOptions(QuerySplitItemBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QuerySplitItemBillResponse::fromMap($this->doRequest('QuerySplitItemBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QuerySplitItemBillResponse
     */
    public function querySplitItemBill(QuerySplitItemBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySplitItemBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetailWithOptions(QueryRIUtilizationDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRIUtilizationDetailResponse::fromMap($this->doRequest('QueryRIUtilizationDetail', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRIUtilizationDetailResponse
     */
    public function queryRIUtilizationDetail(QueryRIUtilizationDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRIUtilizationDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscriptionWithOptions(QueryBillToOSSSubscriptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryBillToOSSSubscriptionResponse::fromMap($this->doRequest('QueryBillToOSSSubscription', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillToOSSSubscriptionResponse
     */
    public function queryBillToOSSSubscription(QueryBillToOSSSubscriptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillToOSSSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountBillResponse
     */
    public function queryAccountBillWithOptions(QueryAccountBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountBillResponse::fromMap($this->doRequest('QueryAccountBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountBillResponse
     */
    public function queryAccountBill(QueryAccountBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnitWithOptions(CreateCostUnitRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateCostUnitResponse::fromMap($this->doRequest('CreateCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateCostUnitResponse
     */
    public function createCostUnit(CreateCostUnitRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCostUnitWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnitWithOptions(ModifyCostUnitRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyCostUnitResponse::fromMap($this->doRequest('ModifyCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyCostUnitResponse
     */
    public function modifyCostUnit(ModifyCostUnitRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCostUnitWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnitWithOptions(QueryCostUnitRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCostUnitResponse::fromMap($this->doRequest('QueryCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCostUnitResponse
     */
    public function queryCostUnit(QueryCostUnitRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostUnitWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnitWithOptions(DeleteCostUnitRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteCostUnitResponse::fromMap($this->doRequest('DeleteCostUnit', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteCostUnitResponse
     */
    public function deleteCostUnit(DeleteCostUnitRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCostUnitWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResourceWithOptions(AllocateCostUnitResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AllocateCostUnitResourceResponse::fromMap($this->doRequest('AllocateCostUnitResource', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AllocateCostUnitResourceResponse
     */
    public function allocateCostUnitResource(AllocateCostUnitResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->allocateCostUnitResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResourceWithOptions(QueryCostUnitResourceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCostUnitResourceResponse::fromMap($this->doRequest('QueryCostUnitResource', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCostUnitResourceResponse
     */
    public function queryCostUnitResource(QueryCostUnitResourceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCostUnitResourceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackageWithOptions(RenewResourcePackageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RenewResourcePackageResponse::fromMap($this->doRequest('RenewResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RenewResourcePackageResponse
     */
    public function renewResourcePackage(RenewResourcePackageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackageWithOptions(UpgradeResourcePackageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UpgradeResourcePackageResponse::fromMap($this->doRequest('UpgradeResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UpgradeResourcePackageResponse
     */
    public function upgradeResourcePackage(UpgradeResourcePackageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccountWithOptions(CreateAgAccountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateAgAccountResponse::fromMap($this->doRequest('CreateAgAccount', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateAgAccountResponse
     */
    public function createAgAccount(CreateAgAccountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAgAccountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfoWithOptions(GetCustomerAccountInfoRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetCustomerAccountInfoResponse::fromMap($this->doRequest('GetCustomerAccountInfo', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetCustomerAccountInfoResponse
     */
    public function getCustomerAccountInfo(GetCustomerAccountInfoRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerAccountInfoWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerListWithOptions(GetCustomerListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetCustomerListResponse::fromMap($this->doRequest('GetCustomerList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetCustomerListResponse
     */
    public function getCustomerList(GetCustomerListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomerListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ChangeResellerConsumeAmountResponse
     */
    public function changeResellerConsumeAmountWithOptions(ChangeResellerConsumeAmountRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ChangeResellerConsumeAmountResponse::fromMap($this->doRequest('ChangeResellerConsumeAmount', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ChangeResellerConsumeAmountResponse
     */
    public function changeResellerConsumeAmount(ChangeResellerConsumeAmountRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->changeResellerConsumeAmountWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatusWithOptions(SetResellerUserStatusRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserStatusResponse::fromMap($this->doRequest('SetResellerUserStatus', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserStatusResponse
     */
    public function setResellerUserStatus(SetResellerUserStatusRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserStatusWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuotaWithOptions(CreateResellerUserQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateResellerUserQuotaResponse::fromMap($this->doRequest('CreateResellerUserQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateResellerUserQuotaResponse
     */
    public function createResellerUserQuota(CreateResellerUserQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResellerUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuotaWithOptions(SetResellerUserQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserQuotaResponse::fromMap($this->doRequest('SetResellerUserQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserQuotaResponse
     */
    public function setResellerUserQuota(SetResellerUserQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuotaWithOptions(QueryResellerAvailableQuotaRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryResellerAvailableQuotaResponse::fromMap($this->doRequest('QueryResellerAvailableQuota', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryResellerAvailableQuotaResponse
     */
    public function queryResellerAvailableQuota(QueryResellerAvailableQuotaRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResellerAvailableQuotaWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThresholdWithOptions(SetResellerUserAlarmThresholdRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetResellerUserAlarmThresholdResponse::fromMap($this->doRequest('SetResellerUserAlarmThreshold', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetResellerUserAlarmThresholdResponse
     */
    public function setResellerUserAlarmThreshold(SetResellerUserAlarmThresholdRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setResellerUserAlarmThresholdWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactionsWithOptions(QueryAccountTransactionsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountTransactionsResponse::fromMap($this->doRequest('QueryAccountTransactions', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountTransactionsResponse
     */
    public function queryAccountTransactions(QueryAccountTransactionsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountTransactionsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSSWithOptions(UnsubscribeBillToOSSRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return UnsubscribeBillToOSSResponse::fromMap($this->doRequest('UnsubscribeBillToOSS', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return UnsubscribeBillToOSSResponse
     */
    public function unsubscribeBillToOSS(UnsubscribeBillToOSSRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unsubscribeBillToOSSWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSSWithOptions(SubscribeBillToOSSRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SubscribeBillToOSSResponse::fromMap($this->doRequest('SubscribeBillToOSS', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SubscribeBillToOSSResponse
     */
    public function subscribeBillToOSS(SubscribeBillToOSSRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->subscribeBillToOSSWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsDataWithOptions(QueryUserOmsDataRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryUserOmsDataResponse::fromMap($this->doRequest('QueryUserOmsData', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryUserOmsDataResponse
     */
    public function queryUserOmsData(QueryUserOmsDataRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryUserOmsDataWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderResponse
     */
    public function cancelOrderWithOptions(CancelOrderRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CancelOrderResponse::fromMap($this->doRequest('CancelOrder', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CancelOrderResponse
     */
    public function cancelOrder(CancelOrderRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOrderWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoiceWithOptions(ApplyInvoiceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ApplyInvoiceResponse::fromMap($this->doRequest('ApplyInvoice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ApplyInvoiceResponse
     */
    public function applyInvoice(ApplyInvoiceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyInvoiceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressListWithOptions(QueryCustomerAddressListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCustomerAddressListResponse::fromMap($this->doRequest('QueryCustomerAddressList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCustomerAddressListResponse
     */
    public function queryCustomerAddressList(QueryCustomerAddressListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCustomerAddressListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateListWithOptions(QueryEvaluateListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryEvaluateListResponse::fromMap($this->doRequest('QueryEvaluateList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryEvaluateListResponse
     */
    public function queryEvaluateList(QueryEvaluateListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryEvaluateListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerListWithOptions(QueryInvoicingCustomerListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryInvoicingCustomerListResponse::fromMap($this->doRequest('QueryInvoicingCustomerList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryInvoicingCustomerListResponse
     */
    public function queryInvoicingCustomerList(QueryInvoicingCustomerListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInvoicingCustomerListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverviewWithOptions(QueryBillOverviewRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryBillOverviewResponse::fromMap($this->doRequest('QueryBillOverview', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillOverviewResponse
     */
    public function queryBillOverview(QueryBillOverviewRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillOverviewWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillResponse
     */
    public function queryBillWithOptions(QueryBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryBillResponse::fromMap($this->doRequest('QueryBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryBillResponse
     */
    public function queryBill(QueryBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBillWithOptions(QueryInstanceBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryInstanceBillResponse::fromMap($this->doRequest('QueryInstanceBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryInstanceBillResponse
     */
    public function queryInstanceBill(QueryInstanceBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGenerationWithOptions(EnableBillGenerationRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return EnableBillGenerationResponse::fromMap($this->doRequest('EnableBillGeneration', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return EnableBillGenerationResponse
     */
    public function enableBillGeneration(EnableBillGenerationRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableBillGenerationWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeemWithOptions(QueryRedeemRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryRedeemResponse::fromMap($this->doRequest('QueryRedeem', 'HTTPS', 'GET', '2017-12-14', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryRedeemResponse
     */
    public function queryRedeem(QueryRedeemRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRedeemWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeTypeWithOptions(ConvertChargeTypeRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ConvertChargeTypeResponse::fromMap($this->doRequest('ConvertChargeType', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ConvertChargeTypeResponse
     */
    public function convertChargeType(ConvertChargeTypeRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions(CreateInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateInstanceResponse::fromMap($this->doRequest('CreateInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateInstanceResponse
     */
    public function createInstance(CreateInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstanceWithOptions(ModifyInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ModifyInstanceResponse::fromMap($this->doRequest('ModifyInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ModifyInstanceResponse
     */
    public function modifyInstance(ModifyInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModuleWithOptions(DescribePricingModuleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribePricingModuleResponse::fromMap($this->doRequest('DescribePricingModule', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribePricingModuleResponse
     */
    public function describePricingModule(DescribePricingModuleRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePricingModuleWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryProductListResponse
     */
    public function queryProductListWithOptions(QueryProductListRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryProductListResponse::fromMap($this->doRequest('QueryProductList', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryProductListResponse
     */
    public function queryProductList(QueryProductListRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryProductListWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCostWithOptions(QueryInstanceGaapCostRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryInstanceGaapCostResponse::fromMap($this->doRequest('QueryInstanceGaapCost', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryInstanceGaapCostResponse
     */
    public function queryInstanceGaapCost(QueryInstanceGaapCostRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryInstanceGaapCostWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions(RenewInstanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RenewInstanceResponse::fromMap($this->doRequest('RenewInstance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance(RenewInstanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetailWithOptions(GetOrderDetailRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetOrderDetailResponse::fromMap($this->doRequest('GetOrderDetail', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetOrderDetailResponse
     */
    public function getOrderDetail(GetOrderDetailRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOrderDetailWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryOrdersResponse
     */
    public function queryOrdersWithOptions(QueryOrdersRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryOrdersResponse::fromMap($this->doRequest('QueryOrders', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryOrdersResponse
     */
    public function queryOrders(QueryOrdersRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryOrdersWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryMonthlyInstanceConsumptionResponse
     */
    public function queryMonthlyInstanceConsumptionWithOptions(QueryMonthlyInstanceConsumptionRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryMonthlyInstanceConsumptionResponse::fromMap($this->doRequest('QueryMonthlyInstanceConsumption', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryMonthlyInstanceConsumptionResponse
     */
    public function queryMonthlyInstanceConsumption(QueryMonthlyInstanceConsumptionRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyInstanceConsumptionWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QuerySettlementBillResponse
     */
    public function querySettlementBillWithOptions(QuerySettlementBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QuerySettlementBillResponse::fromMap($this->doRequest('QuerySettlementBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QuerySettlementBillResponse
     */
    public function querySettlementBill(QuerySettlementBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySettlementBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryMonthlyBillResponse
     */
    public function queryMonthlyBillWithOptions(QueryMonthlyBillRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryMonthlyBillResponse::fromMap($this->doRequest('QueryMonthlyBill', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryMonthlyBillResponse
     */
    public function queryMonthlyBill(QueryMonthlyBillRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMonthlyBillWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SetRenewalResponse
     */
    public function setRenewalWithOptions(SetRenewalRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SetRenewalResponse::fromMap($this->doRequest('SetRenewal', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SetRenewalResponse
     */
    public function setRenewal(SetRenewalRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setRenewalWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstancesWithOptions(QueryAvailableInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryAvailableInstancesResponse::fromMap($this->doRequest('QueryAvailableInstances', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryAvailableInstancesResponse
     */
    public function queryAvailableInstances(QueryAvailableInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAvailableInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackageWithOptions(CreateResourcePackageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateResourcePackageResponse::fromMap($this->doRequest('CreateResourcePackage', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateResourcePackageResponse
     */
    public function createResourcePackage(CreateResourcePackageRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstancesWithOptions(QueryResourcePackageInstancesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryResourcePackageInstancesResponse::fromMap($this->doRequest('QueryResourcePackageInstances', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryResourcePackageInstancesResponse
     */
    public function queryResourcePackageInstances(QueryResourcePackageInstancesRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryResourcePackageInstancesWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePriceWithOptions(GetResourcePackagePriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetResourcePackagePriceResponse::fromMap($this->doRequest('GetResourcePackagePrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetResourcePackagePriceResponse
     */
    public function getResourcePackagePrice(GetResourcePackagePriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePackagePriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetSubscriptionPriceResponse
     */
    public function getSubscriptionPriceWithOptions(GetSubscriptionPriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetSubscriptionPriceResponse::fromMap($this->doRequest('GetSubscriptionPrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetSubscriptionPriceResponse
     */
    public function getSubscriptionPrice(GetSubscriptionPriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSubscriptionPriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPriceWithOptions(GetPayAsYouGoPriceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetPayAsYouGoPriceResponse::fromMap($this->doRequest('GetPayAsYouGoPrice', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return GetPayAsYouGoPriceResponse
     */
    public function getPayAsYouGoPrice(GetPayAsYouGoPriceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPayAsYouGoPriceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCardsWithOptions(QueryPrepaidCardsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryPrepaidCardsResponse::fromMap($this->doRequest('QueryPrepaidCards', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryPrepaidCardsResponse
     */
    public function queryPrepaidCards(QueryPrepaidCardsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryPrepaidCardsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCouponsWithOptions(QueryCashCouponsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryCashCouponsResponse::fromMap($this->doRequest('QueryCashCoupons', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryCashCouponsResponse
     */
    public function queryCashCoupons(QueryCashCouponsRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCashCouponsWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalanceWithOptions(QueryAccountBalanceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return QueryAccountBalanceResponse::fromMap($this->doRequest('QueryAccountBalance', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return QueryAccountBalanceResponse
     */
    public function queryAccountBalance(QueryAccountBalanceRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryAccountBalanceWithOptions($request, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProductWithOptions(DescribeResourcePackageProductRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackageProductResponse::fromMap($this->doRequest('DescribeResourcePackageProduct', 'HTTPS', 'POST', '2017-12-14', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DescribeResourcePackageProductResponse
     */
    public function describeResourcePackageProduct(DescribeResourcePackageProductRequest $request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackageProductWithOptions($request, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}

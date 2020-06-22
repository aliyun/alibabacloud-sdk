<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse\data\modules;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @description billingCycle
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description instanceID
     *
     * @var string
     */
    public $instanceID;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     *
     * @var string
     */
    public $productType;

    /**
     * @description subscriptionType
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description tag
     *
     * @var string
     */
    public $tag;

    /**
     * @description resourceGroup
     *
     * @var string
     */
    public $resourceGroup;

    /**
     * @description accountingUnit
     *
     * @var string
     */
    public $accountingUnit;

    /**
     * @description payerAccount
     *
     * @var string
     */
    public $payerAccount;

    /**
     * @description ownerID
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description paymentCurrency
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description orderType
     *
     * @var string
     */
    public $orderType;

    /**
     * @description payTime
     *
     * @var string
     */
    public $payTime;

    /**
     * @description pretaxGrossAmount
     *
     * @var string
     */
    public $pretaxGrossAmount;

    /**
     * @description pricingDiscount
     *
     * @var string
     */
    public $pricingDiscount;

    /**
     * @description deductedByCoupons
     *
     * @var string
     */
    public $deductedByCoupons;

    /**
     * @description pretaxAmount
     *
     * @var string
     */
    public $pretaxAmount;

    /**
     * @description pretaxAmountLocal
     *
     * @var string
     */
    public $pretaxAmountLocal;

    /**
     * @description deductedByCashCoupons
     *
     * @var string
     */
    public $deductedByCashCoupons;

    /**
     * @description deductedByPrepaidCard
     *
     * @var string
     */
    public $deductedByPrepaidCard;

    /**
     * @description paymentAmount
     *
     * @var string
     */
    public $paymentAmount;

    /**
     * @description gaapPretaxGrossAmount
     *
     * @var string
     */
    public $gaapPretaxGrossAmount;

    /**
     * @description gaapPricingDiscount
     *
     * @var string
     */
    public $gaapPricingDiscount;

    /**
     * @description gaapDeductedByCoupons
     *
     * @var string
     */
    public $gaapDeductedByCoupons;

    /**
     * @description gaapPretaxAmount
     *
     * @var string
     */
    public $gaapPretaxAmount;

    /**
     * @description gaapPretaxAmountLocal
     *
     * @var string
     */
    public $gaapPretaxAmountLocal;

    /**
     * @description gaapDeductedByCashCoupons
     *
     * @var string
     */
    public $gaapDeductedByCashCoupons;

    /**
     * @description gaapDeductedByPrepaidCard
     *
     * @var string
     */
    public $gaapDeductedByPrepaidCard;

    /**
     * @description gaapPaymentAmount
     *
     * @var string
     */
    public $gaapPaymentAmount;

    /**
     * @description monthGaapPretaxGrossAmount
     *
     * @var string
     */
    public $monthGaapPretaxGrossAmount;

    /**
     * @description monthGaapPricingDiscount
     *
     * @var string
     */
    public $monthGaapPricingDiscount;

    /**
     * @description monthGaapDeductedByCoupons
     *
     * @var string
     */
    public $monthGaapDeductedByCoupons;

    /**
     * @description monthGaapPretaxAmount
     *
     * @var string
     */
    public $monthGaapPretaxAmount;

    /**
     * @description monthGaapPretaxAmountLocal
     *
     * @var string
     */
    public $monthGaapPretaxAmountLocal;

    /**
     * @description monthGaapDeductedByCashCoupons
     *
     * @var string
     */
    public $monthGaapDeductedByCashCoupons;

    /**
     * @description monthGaapDeductedByPrepaidCard
     *
     * @var string
     */
    public $monthGaapDeductedByPrepaidCard;

    /**
     * @description monthGaapPaymentAmount
     *
     * @var string
     */
    public $monthGaapPaymentAmount;

    /**
     * @description unallocatedPaymentAmount
     *
     * @var string
     */
    public $unallocatedPaymentAmount;

    /**
     * @description usageStartDate
     *
     * @var string
     */
    public $usageStartDate;

    /**
     * @description usageEndDate
     *
     * @var string
     */
    public $usageEndDate;

    /**
     * @description billType
     *
     * @var string
     */
    public $billType;

    /**
     * @description orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description subOrderId
     *
     * @var string
     */
    public $subOrderId;

    /**
     * @description unallocatedPretaxGrossAmount
     *
     * @var string
     */
    public $unallocatedPretaxGrossAmount;

    /**
     * @description unallocatedPricingDiscount
     *
     * @var string
     */
    public $unallocatedPricingDiscount;

    /**
     * @description unallocatedDeductedByCoupons
     *
     * @var string
     */
    public $unallocatedDeductedByCoupons;

    /**
     * @description unallocatedPretaxAmount
     *
     * @var string
     */
    public $unallocatedPretaxAmount;

    /**
     * @description unallocatedPretaxAmountLocal
     *
     * @var string
     */
    public $unallocatedPretaxAmountLocal;

    /**
     * @description unallocatedDeductedByCashCoupons
     *
     * @var string
     */
    public $unallocatedDeductedByCashCoupons;

    /**
     * @description unallocatedDeductedByPrepaidCard
     *
     * @var string
     */
    public $unallocatedDeductedByPrepaidCard;
    protected $_name = [
        'billingCycle'                     => 'BillingCycle',
        'instanceID'                       => 'InstanceID',
        'productCode'                      => 'ProductCode',
        'productType'                      => 'ProductType',
        'subscriptionType'                 => 'SubscriptionType',
        'tag'                              => 'Tag',
        'resourceGroup'                    => 'ResourceGroup',
        'accountingUnit'                   => 'AccountingUnit',
        'payerAccount'                     => 'PayerAccount',
        'ownerID'                          => 'OwnerID',
        'region'                           => 'Region',
        'currency'                         => 'Currency',
        'paymentCurrency'                  => 'PaymentCurrency',
        'orderType'                        => 'OrderType',
        'payTime'                          => 'PayTime',
        'pretaxGrossAmount'                => 'PretaxGrossAmount',
        'pricingDiscount'                  => 'PricingDiscount',
        'deductedByCoupons'                => 'DeductedByCoupons',
        'pretaxAmount'                     => 'PretaxAmount',
        'pretaxAmountLocal'                => 'PretaxAmountLocal',
        'deductedByCashCoupons'            => 'DeductedByCashCoupons',
        'deductedByPrepaidCard'            => 'DeductedByPrepaidCard',
        'paymentAmount'                    => 'PaymentAmount',
        'gaapPretaxGrossAmount'            => 'GaapPretaxGrossAmount',
        'gaapPricingDiscount'              => 'GaapPricingDiscount',
        'gaapDeductedByCoupons'            => 'GaapDeductedByCoupons',
        'gaapPretaxAmount'                 => 'GaapPretaxAmount',
        'gaapPretaxAmountLocal'            => 'GaapPretaxAmountLocal',
        'gaapDeductedByCashCoupons'        => 'GaapDeductedByCashCoupons',
        'gaapDeductedByPrepaidCard'        => 'GaapDeductedByPrepaidCard',
        'gaapPaymentAmount'                => 'GaapPaymentAmount',
        'monthGaapPretaxGrossAmount'       => 'MonthGaapPretaxGrossAmount',
        'monthGaapPricingDiscount'         => 'MonthGaapPricingDiscount',
        'monthGaapDeductedByCoupons'       => 'MonthGaapDeductedByCoupons',
        'monthGaapPretaxAmount'            => 'MonthGaapPretaxAmount',
        'monthGaapPretaxAmountLocal'       => 'MonthGaapPretaxAmountLocal',
        'monthGaapDeductedByCashCoupons'   => 'MonthGaapDeductedByCashCoupons',
        'monthGaapDeductedByPrepaidCard'   => 'MonthGaapDeductedByPrepaidCard',
        'monthGaapPaymentAmount'           => 'MonthGaapPaymentAmount',
        'unallocatedPaymentAmount'         => 'UnallocatedPaymentAmount',
        'usageStartDate'                   => 'UsageStartDate',
        'usageEndDate'                     => 'UsageEndDate',
        'billType'                         => 'BillType',
        'orderId'                          => 'OrderId',
        'subOrderId'                       => 'SubOrderId',
        'unallocatedPretaxGrossAmount'     => 'UnallocatedPretaxGrossAmount',
        'unallocatedPricingDiscount'       => 'UnallocatedPricingDiscount',
        'unallocatedDeductedByCoupons'     => 'UnallocatedDeductedByCoupons',
        'unallocatedPretaxAmount'          => 'UnallocatedPretaxAmount',
        'unallocatedPretaxAmountLocal'     => 'UnallocatedPretaxAmountLocal',
        'unallocatedDeductedByCashCoupons' => 'UnallocatedDeductedByCashCoupons',
        'unallocatedDeductedByPrepaidCard' => 'UnallocatedDeductedByPrepaidCard',
    ];

    public function validate()
    {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('instanceID', $this->instanceID, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
        Model::validateRequired('accountingUnit', $this->accountingUnit, true);
        Model::validateRequired('payerAccount', $this->payerAccount, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('orderType', $this->orderType, true);
        Model::validateRequired('payTime', $this->payTime, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('pricingDiscount', $this->pricingDiscount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('gaapPretaxGrossAmount', $this->gaapPretaxGrossAmount, true);
        Model::validateRequired('gaapPricingDiscount', $this->gaapPricingDiscount, true);
        Model::validateRequired('gaapDeductedByCoupons', $this->gaapDeductedByCoupons, true);
        Model::validateRequired('gaapPretaxAmount', $this->gaapPretaxAmount, true);
        Model::validateRequired('gaapPretaxAmountLocal', $this->gaapPretaxAmountLocal, true);
        Model::validateRequired('gaapDeductedByCashCoupons', $this->gaapDeductedByCashCoupons, true);
        Model::validateRequired('gaapDeductedByPrepaidCard', $this->gaapDeductedByPrepaidCard, true);
        Model::validateRequired('gaapPaymentAmount', $this->gaapPaymentAmount, true);
        Model::validateRequired('monthGaapPretaxGrossAmount', $this->monthGaapPretaxGrossAmount, true);
        Model::validateRequired('monthGaapPricingDiscount', $this->monthGaapPricingDiscount, true);
        Model::validateRequired('monthGaapDeductedByCoupons', $this->monthGaapDeductedByCoupons, true);
        Model::validateRequired('monthGaapPretaxAmount', $this->monthGaapPretaxAmount, true);
        Model::validateRequired('monthGaapPretaxAmountLocal', $this->monthGaapPretaxAmountLocal, true);
        Model::validateRequired('monthGaapDeductedByCashCoupons', $this->monthGaapDeductedByCashCoupons, true);
        Model::validateRequired('monthGaapDeductedByPrepaidCard', $this->monthGaapDeductedByPrepaidCard, true);
        Model::validateRequired('monthGaapPaymentAmount', $this->monthGaapPaymentAmount, true);
        Model::validateRequired('unallocatedPaymentAmount', $this->unallocatedPaymentAmount, true);
        Model::validateRequired('usageStartDate', $this->usageStartDate, true);
        Model::validateRequired('usageEndDate', $this->usageEndDate, true);
        Model::validateRequired('billType', $this->billType, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('subOrderId', $this->subOrderId, true);
        Model::validateRequired('unallocatedPretaxGrossAmount', $this->unallocatedPretaxGrossAmount, true);
        Model::validateRequired('unallocatedPricingDiscount', $this->unallocatedPricingDiscount, true);
        Model::validateRequired('unallocatedDeductedByCoupons', $this->unallocatedDeductedByCoupons, true);
        Model::validateRequired('unallocatedPretaxAmount', $this->unallocatedPretaxAmount, true);
        Model::validateRequired('unallocatedPretaxAmountLocal', $this->unallocatedPretaxAmountLocal, true);
        Model::validateRequired('unallocatedDeductedByCashCoupons', $this->unallocatedDeductedByCashCoupons, true);
        Model::validateRequired('unallocatedDeductedByPrepaidCard', $this->unallocatedDeductedByPrepaidCard, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->accountingUnit) {
            $res['AccountingUnit'] = $this->accountingUnit;
        }
        if (null !== $this->payerAccount) {
            $res['PayerAccount'] = $this->payerAccount;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->pricingDiscount) {
            $res['PricingDiscount'] = $this->pricingDiscount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->gaapPretaxGrossAmount) {
            $res['GaapPretaxGrossAmount'] = $this->gaapPretaxGrossAmount;
        }
        if (null !== $this->gaapPricingDiscount) {
            $res['GaapPricingDiscount'] = $this->gaapPricingDiscount;
        }
        if (null !== $this->gaapDeductedByCoupons) {
            $res['GaapDeductedByCoupons'] = $this->gaapDeductedByCoupons;
        }
        if (null !== $this->gaapPretaxAmount) {
            $res['GaapPretaxAmount'] = $this->gaapPretaxAmount;
        }
        if (null !== $this->gaapPretaxAmountLocal) {
            $res['GaapPretaxAmountLocal'] = $this->gaapPretaxAmountLocal;
        }
        if (null !== $this->gaapDeductedByCashCoupons) {
            $res['GaapDeductedByCashCoupons'] = $this->gaapDeductedByCashCoupons;
        }
        if (null !== $this->gaapDeductedByPrepaidCard) {
            $res['GaapDeductedByPrepaidCard'] = $this->gaapDeductedByPrepaidCard;
        }
        if (null !== $this->gaapPaymentAmount) {
            $res['GaapPaymentAmount'] = $this->gaapPaymentAmount;
        }
        if (null !== $this->monthGaapPretaxGrossAmount) {
            $res['MonthGaapPretaxGrossAmount'] = $this->monthGaapPretaxGrossAmount;
        }
        if (null !== $this->monthGaapPricingDiscount) {
            $res['MonthGaapPricingDiscount'] = $this->monthGaapPricingDiscount;
        }
        if (null !== $this->monthGaapDeductedByCoupons) {
            $res['MonthGaapDeductedByCoupons'] = $this->monthGaapDeductedByCoupons;
        }
        if (null !== $this->monthGaapPretaxAmount) {
            $res['MonthGaapPretaxAmount'] = $this->monthGaapPretaxAmount;
        }
        if (null !== $this->monthGaapPretaxAmountLocal) {
            $res['MonthGaapPretaxAmountLocal'] = $this->monthGaapPretaxAmountLocal;
        }
        if (null !== $this->monthGaapDeductedByCashCoupons) {
            $res['MonthGaapDeductedByCashCoupons'] = $this->monthGaapDeductedByCashCoupons;
        }
        if (null !== $this->monthGaapDeductedByPrepaidCard) {
            $res['MonthGaapDeductedByPrepaidCard'] = $this->monthGaapDeductedByPrepaidCard;
        }
        if (null !== $this->monthGaapPaymentAmount) {
            $res['MonthGaapPaymentAmount'] = $this->monthGaapPaymentAmount;
        }
        if (null !== $this->unallocatedPaymentAmount) {
            $res['UnallocatedPaymentAmount'] = $this->unallocatedPaymentAmount;
        }
        if (null !== $this->usageStartDate) {
            $res['UsageStartDate'] = $this->usageStartDate;
        }
        if (null !== $this->usageEndDate) {
            $res['UsageEndDate'] = $this->usageEndDate;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }
        if (null !== $this->unallocatedPretaxGrossAmount) {
            $res['UnallocatedPretaxGrossAmount'] = $this->unallocatedPretaxGrossAmount;
        }
        if (null !== $this->unallocatedPricingDiscount) {
            $res['UnallocatedPricingDiscount'] = $this->unallocatedPricingDiscount;
        }
        if (null !== $this->unallocatedDeductedByCoupons) {
            $res['UnallocatedDeductedByCoupons'] = $this->unallocatedDeductedByCoupons;
        }
        if (null !== $this->unallocatedPretaxAmount) {
            $res['UnallocatedPretaxAmount'] = $this->unallocatedPretaxAmount;
        }
        if (null !== $this->unallocatedPretaxAmountLocal) {
            $res['UnallocatedPretaxAmountLocal'] = $this->unallocatedPretaxAmountLocal;
        }
        if (null !== $this->unallocatedDeductedByCashCoupons) {
            $res['UnallocatedDeductedByCashCoupons'] = $this->unallocatedDeductedByCashCoupons;
        }
        if (null !== $this->unallocatedDeductedByPrepaidCard) {
            $res['UnallocatedDeductedByPrepaidCard'] = $this->unallocatedDeductedByPrepaidCard;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['AccountingUnit'])) {
            $model->accountingUnit = $map['AccountingUnit'];
        }
        if (isset($map['PayerAccount'])) {
            $model->payerAccount = $map['PayerAccount'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['PricingDiscount'])) {
            $model->pricingDiscount = $map['PricingDiscount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['GaapPretaxGrossAmount'])) {
            $model->gaapPretaxGrossAmount = $map['GaapPretaxGrossAmount'];
        }
        if (isset($map['GaapPricingDiscount'])) {
            $model->gaapPricingDiscount = $map['GaapPricingDiscount'];
        }
        if (isset($map['GaapDeductedByCoupons'])) {
            $model->gaapDeductedByCoupons = $map['GaapDeductedByCoupons'];
        }
        if (isset($map['GaapPretaxAmount'])) {
            $model->gaapPretaxAmount = $map['GaapPretaxAmount'];
        }
        if (isset($map['GaapPretaxAmountLocal'])) {
            $model->gaapPretaxAmountLocal = $map['GaapPretaxAmountLocal'];
        }
        if (isset($map['GaapDeductedByCashCoupons'])) {
            $model->gaapDeductedByCashCoupons = $map['GaapDeductedByCashCoupons'];
        }
        if (isset($map['GaapDeductedByPrepaidCard'])) {
            $model->gaapDeductedByPrepaidCard = $map['GaapDeductedByPrepaidCard'];
        }
        if (isset($map['GaapPaymentAmount'])) {
            $model->gaapPaymentAmount = $map['GaapPaymentAmount'];
        }
        if (isset($map['MonthGaapPretaxGrossAmount'])) {
            $model->monthGaapPretaxGrossAmount = $map['MonthGaapPretaxGrossAmount'];
        }
        if (isset($map['MonthGaapPricingDiscount'])) {
            $model->monthGaapPricingDiscount = $map['MonthGaapPricingDiscount'];
        }
        if (isset($map['MonthGaapDeductedByCoupons'])) {
            $model->monthGaapDeductedByCoupons = $map['MonthGaapDeductedByCoupons'];
        }
        if (isset($map['MonthGaapPretaxAmount'])) {
            $model->monthGaapPretaxAmount = $map['MonthGaapPretaxAmount'];
        }
        if (isset($map['MonthGaapPretaxAmountLocal'])) {
            $model->monthGaapPretaxAmountLocal = $map['MonthGaapPretaxAmountLocal'];
        }
        if (isset($map['MonthGaapDeductedByCashCoupons'])) {
            $model->monthGaapDeductedByCashCoupons = $map['MonthGaapDeductedByCashCoupons'];
        }
        if (isset($map['MonthGaapDeductedByPrepaidCard'])) {
            $model->monthGaapDeductedByPrepaidCard = $map['MonthGaapDeductedByPrepaidCard'];
        }
        if (isset($map['MonthGaapPaymentAmount'])) {
            $model->monthGaapPaymentAmount = $map['MonthGaapPaymentAmount'];
        }
        if (isset($map['UnallocatedPaymentAmount'])) {
            $model->unallocatedPaymentAmount = $map['UnallocatedPaymentAmount'];
        }
        if (isset($map['UsageStartDate'])) {
            $model->usageStartDate = $map['UsageStartDate'];
        }
        if (isset($map['UsageEndDate'])) {
            $model->usageEndDate = $map['UsageEndDate'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }
        if (isset($map['UnallocatedPretaxGrossAmount'])) {
            $model->unallocatedPretaxGrossAmount = $map['UnallocatedPretaxGrossAmount'];
        }
        if (isset($map['UnallocatedPricingDiscount'])) {
            $model->unallocatedPricingDiscount = $map['UnallocatedPricingDiscount'];
        }
        if (isset($map['UnallocatedDeductedByCoupons'])) {
            $model->unallocatedDeductedByCoupons = $map['UnallocatedDeductedByCoupons'];
        }
        if (isset($map['UnallocatedPretaxAmount'])) {
            $model->unallocatedPretaxAmount = $map['UnallocatedPretaxAmount'];
        }
        if (isset($map['UnallocatedPretaxAmountLocal'])) {
            $model->unallocatedPretaxAmountLocal = $map['UnallocatedPretaxAmountLocal'];
        }
        if (isset($map['UnallocatedDeductedByCashCoupons'])) {
            $model->unallocatedDeductedByCashCoupons = $map['UnallocatedDeductedByCashCoupons'];
        }
        if (isset($map['UnallocatedDeductedByPrepaidCard'])) {
            $model->unallocatedDeductedByPrepaidCard = $map['UnallocatedDeductedByPrepaidCard'];
        }

        return $model;
    }
}

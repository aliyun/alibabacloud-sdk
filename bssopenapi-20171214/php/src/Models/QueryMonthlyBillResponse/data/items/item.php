<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description item
     *
     * @var string
     */
    public $item;

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
     * @description solutionCode
     *
     * @var string
     */
    public $solutionCode;

    /**
     * @description solutionName
     *
     * @var string
     */
    public $solutionName;

    /**
     * @description pretaxGrossAmount
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description invoiceDiscount
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description deductedByCoupons
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description pretaxAmount
     *
     * @var float
     */
    public $pretaxAmount;

    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description pretaxAmountLocal
     *
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @description tax
     *
     * @var float
     */
    public $tax;

    /**
     * @description afterTaxAmount
     *
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @description outstandingAmount
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description deductedByCashCoupons
     *
     * @var float
     */
    public $deductedByCashCoupons;

    /**
     * @description deductedByPrepaidCard
     *
     * @var float
     */
    public $deductedByPrepaidCard;

    /**
     * @description paymentAmount
     *
     * @var float
     */
    public $paymentAmount;

    /**
     * @description paymentCurrency
     *
     * @var string
     */
    public $paymentCurrency;
    protected $_name = [
        'item'                  => 'Item',
        'productCode'           => 'ProductCode',
        'productType'           => 'ProductType',
        'subscriptionType'      => 'SubscriptionType',
        'solutionCode'          => 'SolutionCode',
        'solutionName'          => 'SolutionName',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'pretaxAmount'          => 'PretaxAmount',
        'currency'              => 'Currency',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'tax'                   => 'Tax',
        'afterTaxAmount'        => 'AfterTaxAmount',
        'outstandingAmount'     => 'OutstandingAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'paymentAmount'         => 'PaymentAmount',
        'paymentCurrency'       => 'PaymentCurrency',
    ];

    public function validate()
    {
        Model::validateRequired('item', $this->item, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('solutionCode', $this->solutionCode, true);
        Model::validateRequired('solutionName', $this->solutionName, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
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
        if (null !== $this->solutionCode) {
            $res['SolutionCode'] = $this->solutionCode;
        }
        if (null !== $this->solutionName) {
            $res['SolutionName'] = $this->solutionName;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
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
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
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
        if (isset($map['SolutionCode'])) {
            $model->solutionCode = $map['SolutionCode'];
        }
        if (isset($map['SolutionName'])) {
            $model->solutionName = $map['SolutionName'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
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
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }

        return $model;
    }
}

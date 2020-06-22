<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description costUnit
     *
     * @var string
     */
    public $costUnit;

    /**
     * @description ownerID
     *
     * @var string
     */
    public $ownerID;

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
     * @description outstandingAmount
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description ownerName
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description productName
     *
     * @var string
     */
    public $productName;

    /**
     * @description subscriptionType
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'costUnit'              => 'CostUnit',
        'ownerID'               => 'OwnerID',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'pretaxAmount'          => 'PretaxAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'paymentAmount'         => 'PaymentAmount',
        'outstandingAmount'     => 'OutstandingAmount',
        'currency'              => 'Currency',
        'ownerName'             => 'OwnerName',
        'productCode'           => 'ProductCode',
        'productName'           => 'ProductName',
        'subscriptionType'      => 'SubscriptionType',
    ];

    public function validate()
    {
        Model::validateRequired('costUnit', $this->costUnit, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('ownerName', $this->ownerName, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costUnit) {
            $res['CostUnit'] = $this->costUnit;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
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
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
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
        if (isset($map['CostUnit'])) {
            $model->costUnit = $map['CostUnit'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
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
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}

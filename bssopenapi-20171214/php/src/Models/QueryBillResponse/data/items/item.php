<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryBillResponse\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description recordId
     *
     * @var string
     */
    public $recordID;

    /**
     * @description item
     *
     * @var string
     */
    public $item;

    /**
     * @description ownerId
     *
     * @var string
     */
    public $ownerID;

    /**
     * @description usageStartTime
     *
     * @var string
     */
    public $usageStartTime;

    /**
     * @description usageEndTime
     *
     * @var string
     */
    public $usageEndTime;

    /**
     * @description paymentTime
     *
     * @var string
     */
    public $paymentTime;

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
     * @description productName
     *
     * @var string
     */
    public $productName;

    /**
     * @description productDetail
     *
     * @var string
     */
    public $productDetail;

    /**
     * @description pretaxGrossAmount
     *
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @description deductedByCoupons
     *
     * @var float
     */
    public $deductedByCoupons;

    /**
     * @description invoiceDiscount
     *
     * @var float
     */
    public $invoiceDiscount;

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
     * @description paymentAmount
     *
     * @var float
     */
    public $paymentAmount;

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
     * @description outstandingAmount
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description afterTaxAmount
     *
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description paymentCurrency
     *
     * @var string
     */
    public $paymentCurrency;

    /**
     * @description paymentTransactionID
     *
     * @var string
     */
    public $paymentTransactionID;

    /**
     * @description roundDownDiscount
     *
     * @var string
     */
    public $roundDownDiscount;

    /**
     * @description subOrderId
     *
     * @var string
     */
    public $subOrderId;
    protected $_name = [
        'recordID'              => 'RecordID',
        'item'                  => 'Item',
        'ownerID'               => 'OwnerID',
        'usageStartTime'        => 'UsageStartTime',
        'usageEndTime'          => 'UsageEndTime',
        'paymentTime'           => 'PaymentTime',
        'productCode'           => 'ProductCode',
        'productType'           => 'ProductType',
        'subscriptionType'      => 'SubscriptionType',
        'productName'           => 'ProductName',
        'productDetail'         => 'ProductDetail',
        'pretaxGrossAmount'     => 'PretaxGrossAmount',
        'deductedByCoupons'     => 'DeductedByCoupons',
        'invoiceDiscount'       => 'InvoiceDiscount',
        'pretaxAmount'          => 'PretaxAmount',
        'currency'              => 'Currency',
        'pretaxAmountLocal'     => 'PretaxAmountLocal',
        'tax'                   => 'Tax',
        'paymentAmount'         => 'PaymentAmount',
        'deductedByCashCoupons' => 'DeductedByCashCoupons',
        'deductedByPrepaidCard' => 'DeductedByPrepaidCard',
        'outstandingAmount'     => 'OutstandingAmount',
        'afterTaxAmount'        => 'AfterTaxAmount',
        'status'                => 'Status',
        'paymentCurrency'       => 'PaymentCurrency',
        'paymentTransactionID'  => 'PaymentTransactionID',
        'roundDownDiscount'     => 'RoundDownDiscount',
        'subOrderId'            => 'SubOrderId',
    ];

    public function validate()
    {
        Model::validateRequired('recordID', $this->recordID, true);
        Model::validateRequired('item', $this->item, true);
        Model::validateRequired('ownerID', $this->ownerID, true);
        Model::validateRequired('usageStartTime', $this->usageStartTime, true);
        Model::validateRequired('usageEndTime', $this->usageEndTime, true);
        Model::validateRequired('paymentTime', $this->paymentTime, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('productType', $this->productType, true);
        Model::validateRequired('subscriptionType', $this->subscriptionType, true);
        Model::validateRequired('productName', $this->productName, true);
        Model::validateRequired('productDetail', $this->productDetail, true);
        Model::validateRequired('pretaxGrossAmount', $this->pretaxGrossAmount, true);
        Model::validateRequired('deductedByCoupons', $this->deductedByCoupons, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('pretaxAmount', $this->pretaxAmount, true);
        Model::validateRequired('currency', $this->currency, true);
        Model::validateRequired('pretaxAmountLocal', $this->pretaxAmountLocal, true);
        Model::validateRequired('tax', $this->tax, true);
        Model::validateRequired('paymentAmount', $this->paymentAmount, true);
        Model::validateRequired('deductedByCashCoupons', $this->deductedByCashCoupons, true);
        Model::validateRequired('deductedByPrepaidCard', $this->deductedByPrepaidCard, true);
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('afterTaxAmount', $this->afterTaxAmount, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('paymentCurrency', $this->paymentCurrency, true);
        Model::validateRequired('paymentTransactionID', $this->paymentTransactionID, true);
        Model::validateRequired('roundDownDiscount', $this->roundDownDiscount, true);
        Model::validateRequired('subOrderId', $this->subOrderId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordID) {
            $res['RecordID'] = $this->recordID;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->usageStartTime) {
            $res['UsageStartTime'] = $this->usageStartTime;
        }
        if (null !== $this->usageEndTime) {
            $res['UsageEndTime'] = $this->usageEndTime;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
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
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->deductedByCoupons) {
            $res['DeductedByCoupons'] = $this->deductedByCoupons;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
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
        if (null !== $this->paymentAmount) {
            $res['PaymentAmount'] = $this->paymentAmount;
        }
        if (null !== $this->deductedByCashCoupons) {
            $res['DeductedByCashCoupons'] = $this->deductedByCashCoupons;
        }
        if (null !== $this->deductedByPrepaidCard) {
            $res['DeductedByPrepaidCard'] = $this->deductedByPrepaidCard;
        }
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->paymentTransactionID) {
            $res['PaymentTransactionID'] = $this->paymentTransactionID;
        }
        if (null !== $this->roundDownDiscount) {
            $res['RoundDownDiscount'] = $this->roundDownDiscount;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
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
        if (isset($map['RecordID'])) {
            $model->recordID = $map['RecordID'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['UsageStartTime'])) {
            $model->usageStartTime = $map['UsageStartTime'];
        }
        if (isset($map['UsageEndTime'])) {
            $model->usageEndTime = $map['UsageEndTime'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
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
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['DeductedByCoupons'])) {
            $model->deductedByCoupons = $map['DeductedByCoupons'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
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
        if (isset($map['PaymentAmount'])) {
            $model->paymentAmount = $map['PaymentAmount'];
        }
        if (isset($map['DeductedByCashCoupons'])) {
            $model->deductedByCashCoupons = $map['DeductedByCashCoupons'];
        }
        if (isset($map['DeductedByPrepaidCard'])) {
            $model->deductedByPrepaidCard = $map['DeductedByPrepaidCard'];
        }
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['PaymentTransactionID'])) {
            $model->paymentTransactionID = $map['PaymentTransactionID'];
        }
        if (isset($map['RoundDownDiscount'])) {
            $model->roundDownDiscount = $map['RoundDownDiscount'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }

        return $model;
    }
}

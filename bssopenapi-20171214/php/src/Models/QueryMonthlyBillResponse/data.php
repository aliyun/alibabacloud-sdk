<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyBillResponse\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description outstandingAmount
     *
     * @var float
     */
    public $outstandingAmount;

    /**
     * @description totalOutstandingAmount
     *
     * @var float
     */
    public $totalOutstandingAmount;

    /**
     * @description newInvoiceAmount
     *
     * @var float
     */
    public $newInvoiceAmount;

    /**
     * @description billingCycle
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description items
     *
     * @var items
     */
    public $items;
    protected $_name = [
        'outstandingAmount'      => 'OutstandingAmount',
        'totalOutstandingAmount' => 'TotalOutstandingAmount',
        'newInvoiceAmount'       => 'NewInvoiceAmount',
        'billingCycle'           => 'BillingCycle',
        'items'                  => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('outstandingAmount', $this->outstandingAmount, true);
        Model::validateRequired('totalOutstandingAmount', $this->totalOutstandingAmount, true);
        Model::validateRequired('newInvoiceAmount', $this->newInvoiceAmount, true);
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('items', $this->items, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outstandingAmount) {
            $res['OutstandingAmount'] = $this->outstandingAmount;
        }
        if (null !== $this->totalOutstandingAmount) {
            $res['TotalOutstandingAmount'] = $this->totalOutstandingAmount;
        }
        if (null !== $this->newInvoiceAmount) {
            $res['NewInvoiceAmount'] = $this->newInvoiceAmount;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutstandingAmount'])) {
            $model->outstandingAmount = $map['OutstandingAmount'];
        }
        if (isset($map['TotalOutstandingAmount'])) {
            $model->totalOutstandingAmount = $map['TotalOutstandingAmount'];
        }
        if (isset($map['NewInvoiceAmount'])) {
            $model->newInvoiceAmount = $map['NewInvoiceAmount'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}

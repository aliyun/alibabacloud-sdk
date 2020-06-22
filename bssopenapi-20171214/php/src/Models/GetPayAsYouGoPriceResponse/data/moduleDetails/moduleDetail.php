<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponse\data\moduleDetails;

use AlibabaCloud\Tea\Model;

class moduleDetail extends Model
{
    /**
     * @description moduleCode
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description originalCost
     *
     * @var float
     */
    public $originalCost;

    /**
     * @description invoiceDiscount
     *
     * @var float
     */
    public $invoiceDiscount;

    /**
     * @description costAfterDiscount
     *
     * @var float
     */
    public $costAfterDiscount;

    /**
     * @description unitPrice
     *
     * @var float
     */
    public $unitPrice;
    protected $_name = [
        'moduleCode'        => 'ModuleCode',
        'originalCost'      => 'OriginalCost',
        'invoiceDiscount'   => 'InvoiceDiscount',
        'costAfterDiscount' => 'CostAfterDiscount',
        'unitPrice'         => 'UnitPrice',
    ];

    public function validate()
    {
        Model::validateRequired('moduleCode', $this->moduleCode, true);
        Model::validateRequired('originalCost', $this->originalCost, true);
        Model::validateRequired('invoiceDiscount', $this->invoiceDiscount, true);
        Model::validateRequired('costAfterDiscount', $this->costAfterDiscount, true);
        Model::validateRequired('unitPrice', $this->unitPrice, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->originalCost) {
            $res['OriginalCost'] = $this->originalCost;
        }
        if (null !== $this->invoiceDiscount) {
            $res['InvoiceDiscount'] = $this->invoiceDiscount;
        }
        if (null !== $this->costAfterDiscount) {
            $res['CostAfterDiscount'] = $this->costAfterDiscount;
        }
        if (null !== $this->unitPrice) {
            $res['UnitPrice'] = $this->unitPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['OriginalCost'])) {
            $model->originalCost = $map['OriginalCost'];
        }
        if (isset($map['InvoiceDiscount'])) {
            $model->invoiceDiscount = $map['InvoiceDiscount'];
        }
        if (isset($map['CostAfterDiscount'])) {
            $model->costAfterDiscount = $map['CostAfterDiscount'];
        }
        if (isset($map['UnitPrice'])) {
            $model->unitPrice = $map['UnitPrice'];
        }

        return $model;
    }
}

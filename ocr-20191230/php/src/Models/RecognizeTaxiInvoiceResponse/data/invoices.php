<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data;

use AlibabaCloud\SDK\Ocr\V20191230\Models\invoices\invoiceRoi;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTaxiInvoiceResponse\data\invoices\items;
use AlibabaCloud\Tea\Model;

class invoices extends Model
{
    /**
     * @description rotateType
     *
     * @var int
     */
    public $rotateType;

    /**
     * @description items
     *
     * @var array
     */
    public $items;

    /**
     * @description invoiceRoi
     *
     * @var invoiceRoi
     */
    public $invoiceRoi;
    protected $_name = [
        'rotateType' => 'RotateType',
        'items'      => 'Items',
        'invoiceRoi' => 'InvoiceRoi',
    ];

    public function validate()
    {
        Model::validateRequired('rotateType', $this->rotateType, true);
        Model::validateRequired('items', $this->items, true);
        Model::validateRequired('invoiceRoi', $this->invoiceRoi, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RotateType'] = $this->rotateType;
        $res['Items']      = [];
        if (null !== $this->items && \is_array($this->items)) {
            $n = 0;
            foreach ($this->items as $item) {
                $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['InvoiceRoi'] = null !== $this->invoiceRoi ? $this->invoiceRoi->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invoices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RotateType'])) {
            $model->rotateType = $map['RotateType'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InvoiceRoi'])) {
            $model->invoiceRoi = invoiceRoi::fromMap($map['InvoiceRoi']);
        }

        return $model;
    }
}

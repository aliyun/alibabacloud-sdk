<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTaxiInvoiceResponse\data;

use AlibabaCloud\Tea\Model;

class invoices extends Model
{
    public $rotateType;
    public $items;
    public $invoiceRoi;
    protected $_required = [
        'rotateType' => true,
        'items'      => true,
        'invoiceRoi' => true,
    ];
    protected $_name = [
        'rotateType' => 'RotateType',
        'items'      => 'Items',
        'invoiceRoi' => 'InvoiceRoi',
    ];
    protected $_description = [
        'rotateType' => 'rotateType',
        'items'      => 'items',
        'invoiceRoi' => 'invoiceRoi',
    ];
}

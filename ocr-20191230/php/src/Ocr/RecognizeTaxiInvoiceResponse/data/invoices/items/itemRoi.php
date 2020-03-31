<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTaxiInvoiceResponse\data\invoices\items;

use AlibabaCloud\Tea\Model;

class itemRoi extends Model
{
    public $angle;
    public $center;
    public $size;
    protected $_required = [
        'angle'  => true,
        'center' => true,
        'size'   => true,
    ];
    protected $_name = [
        'angle'  => 'Angle',
        'center' => 'Center',
        'size'   => 'Size',
    ];
    protected $_description = [
        'angle'  => 'angle',
        'center' => 'center',
        'size'   => 'size',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeQrCodeResponse\data\elements;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $label;
    public $suggestion;
    public $rate;
    public $qrCodesData;
    protected $_required = [
        'label'       => true,
        'suggestion'  => true,
        'rate'        => true,
        'qrCodesData' => true,
    ];
    protected $_name = [
        'label'       => 'Label',
        'suggestion'  => 'Suggestion',
        'rate'        => 'Rate',
        'qrCodesData' => 'QrCodesData',
    ];
    protected $_description = [
        'label'       => 'label',
        'suggestion'  => 'suggestion',
        'rate'        => 'rate',
        'qrCodesData' => 'qrCodesData',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $generalText;
    public $roi;
    public $text;
    protected $_required = [
        'generalText' => true,
        'roi'         => true,
        'text'        => true,
    ];
    protected $_name = [
        'generalText' => 'GeneralText',
        'roi'         => 'Roi',
        'text'        => 'Text',
    ];
    protected $_description = [
        'generalText' => 'generalText',
        'roi'         => 'roi',
        'text'        => 'text',
    ];
}

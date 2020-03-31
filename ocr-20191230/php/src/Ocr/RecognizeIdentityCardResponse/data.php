<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeIdentityCardResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $frontResult;
    public $backResult;
    protected $_required = [
        'frontResult' => true,
        'backResult'  => true,
    ];
    protected $_name = [
        'frontResult' => 'FrontResult',
        'backResult'  => 'BackResult',
    ];
    protected $_description = [
        'frontResult' => 'frontResult',
        'backResult'  => 'backResult',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeIdentityCardRequest extends Model
{
    public $imageURL;
    public $side;
    protected $_required = [
        'imageURL' => true,
        'side'     => true,
    ];
    protected $_name = [
        'imageURL' => 'ImageURL',
        'side'     => 'Side',
    ];
    protected $_description = [
        'imageURL' => 'imageUrl',
        'side'     => 'side',
    ];
}

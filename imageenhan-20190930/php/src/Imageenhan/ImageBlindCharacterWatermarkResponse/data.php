<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan\ImageBlindCharacterWatermarkResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $watermarkImageURL;
    public $textImageURL;
    protected $_required = [
        'watermarkImageURL' => true,
        'textImageURL'      => true,
    ];
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'textImageURL'      => 'TextImageURL',
    ];
    protected $_description = [
        'watermarkImageURL' => 'watermarkImageUrl',
        'textImageURL'      => 'textImageUrl',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan\ImageBlindPicWatermarkResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $watermarkImageURL;
    public $logoURL;
    protected $_required = [
        'watermarkImageURL' => true,
        'logoURL'           => true,
    ];
    protected $_name = [
        'watermarkImageURL' => 'WatermarkImageURL',
        'logoURL'           => 'LogoURL',
    ];
    protected $_description = [
        'watermarkImageURL' => 'watermarkImageUrl',
        'logoURL'           => 'logoUrl',
    ];
}

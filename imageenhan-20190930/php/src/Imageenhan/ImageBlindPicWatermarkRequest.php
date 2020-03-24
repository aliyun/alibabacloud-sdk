<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ImageBlindPicWatermarkRequest extends Model
{
    public $functionType;

    public $logoURL;

    public $watermarkImageURL;

    public $outputFileType;

    public $qualityFactor;

    public $originImageURL;
    protected $_name = [
        'functionType'      => 'FunctionType',
        'logoURL'           => 'LogoURL',
        'watermarkImageURL' => 'WatermarkImageURL',
        'outputFileType'    => 'OutputFileType',
        'qualityFactor'     => 'QualityFactor',
        'originImageURL'    => 'OriginImageURL',
    ];
}

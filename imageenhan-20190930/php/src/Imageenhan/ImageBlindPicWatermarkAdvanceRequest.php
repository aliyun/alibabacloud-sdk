<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ImageBlindPicWatermarkAdvanceRequest extends Model
{
    public $originImageURLObject;
    public $functionType;
    public $logoURL;
    public $watermarkImageURL;
    public $outputFileType;
    public $qualityFactor;
    protected $_required = [
        'originImageURLObject' => true,
        'functionType'         => true,
        'qualityFactor'        => true,
    ];
    protected $_description = [
        'originImageURLObject' => 'OriginImageURLObject',
        'functionType'         => 'functionType',
        'logoURL'              => 'logoUrl',
        'watermarkImageURL'    => 'watermarkImageUrl',
        'outputFileType'       => 'outputFileType',
        'qualityFactor'        => 'qualityFactor',
    ];
    protected $_name = [
        'originImageURLObject' => 'OriginImageURLObject',
        'functionType'         => 'FunctionType',
        'logoURL'              => 'LogoURL',
        'watermarkImageURL'    => 'WatermarkImageURL',
        'outputFileType'       => 'OutputFileType',
        'qualityFactor'        => 'QualityFactor',
    ];
}

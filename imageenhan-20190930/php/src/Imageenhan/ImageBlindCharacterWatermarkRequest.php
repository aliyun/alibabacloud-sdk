<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ImageBlindCharacterWatermarkRequest extends Model
{
    public $functionType;
    public $text;
    public $watermarkImageURL;
    public $outputFileType;
    public $qualityFactor;
    public $originImageURL;
    protected $_required = [
        'functionType'   => true,
        'qualityFactor'  => true,
        'originImageURL' => true,
    ];
    protected $_name = [
        'functionType'      => 'FunctionType',
        'text'              => 'Text',
        'watermarkImageURL' => 'WatermarkImageURL',
        'outputFileType'    => 'OutputFileType',
        'qualityFactor'     => 'QualityFactor',
        'originImageURL'    => 'OriginImageURL',
    ];
    protected $_description = [
        'functionType'      => 'functionType',
        'text'              => 'text',
        'watermarkImageURL' => 'watermarkImageUrl',
        'outputFileType'    => 'outputFileType',
        'qualityFactor'     => 'qualityFactor',
        'originImageURL'    => 'originImageUrl',
    ];
}

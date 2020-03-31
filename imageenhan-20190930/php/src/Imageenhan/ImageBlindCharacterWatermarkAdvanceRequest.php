<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ImageBlindCharacterWatermarkAdvanceRequest extends Model
{
    public $originImageURLObject;
    public $functionType;
    public $text;
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
        'text'                 => 'text',
        'watermarkImageURL'    => 'watermarkImageUrl',
        'outputFileType'       => 'outputFileType',
        'qualityFactor'        => 'qualityFactor',
    ];
    protected $_name = [
        'originImageURLObject' => 'OriginImageURLObject',
        'functionType'         => 'FunctionType',
        'text'                 => 'Text',
        'watermarkImageURL'    => 'WatermarkImageURL',
        'outputFileType'       => 'OutputFileType',
        'qualityFactor'        => 'QualityFactor',
    ];
}

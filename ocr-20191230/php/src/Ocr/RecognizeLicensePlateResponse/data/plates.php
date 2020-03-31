<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeLicensePlateResponse\data;

use AlibabaCloud\Tea\Model;

class plates extends Model
{
    public $confidence;
    public $plateNumber;
    public $plateType;
    public $plateTypeConfidence;
    public $roi;
    protected $_required = [
        'confidence'          => true,
        'plateNumber'         => true,
        'plateType'           => true,
        'plateTypeConfidence' => true,
        'roi'                 => true,
    ];
    protected $_name = [
        'confidence'          => 'Confidence',
        'plateNumber'         => 'PlateNumber',
        'plateType'           => 'PlateType',
        'plateTypeConfidence' => 'PlateTypeConfidence',
        'roi'                 => 'Roi',
    ];
    protected $_description = [
        'confidence'          => 'confidence',
        'plateNumber'         => 'plateNumber',
        'plateType'           => 'plateType',
        'plateTypeConfidence' => 'plateTypeConfidence',
        'roi'                 => 'roi',
    ];
}

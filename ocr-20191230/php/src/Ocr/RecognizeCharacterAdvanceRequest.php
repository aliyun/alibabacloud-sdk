<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeCharacterAdvanceRequest extends Model
{
    public $imageURLObject;
    public $minHeight;
    public $outputProbability;
    protected $_required = [
        'imageURLObject'    => true,
        'minHeight'         => true,
        'outputProbability' => true,
    ];
    protected $_description = [
        'imageURLObject'    => 'ImageURLObject',
        'minHeight'         => 'minHeight',
        'outputProbability' => 'outputProbability',
    ];
    protected $_name = [
        'imageURLObject'    => 'ImageURLObject',
        'minHeight'         => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];
}

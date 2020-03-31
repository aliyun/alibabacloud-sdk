<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeCharacterRequest extends Model
{
    public $imageURL;
    public $minHeight;
    public $outputProbability;
    protected $_required = [
        'imageURL'          => true,
        'minHeight'         => true,
        'outputProbability' => true,
    ];
    protected $_name = [
        'imageURL'          => 'ImageURL',
        'minHeight'         => 'MinHeight',
        'outputProbability' => 'OutputProbability',
    ];
    protected $_description = [
        'imageURL'          => 'imageUrl',
        'minHeight'         => 'minHeight',
        'outputProbability' => 'outputProbability',
    ];
}

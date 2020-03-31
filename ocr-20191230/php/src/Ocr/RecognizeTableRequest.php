<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeTableRequest extends Model
{
    public $imageURL;
    public $outputFormat;
    public $useFinanceModel;
    public $assureDirection;
    public $hasLine;
    public $skipDetection;
    protected $_required = [
        'imageURL'        => true,
        'outputFormat'    => true,
        'useFinanceModel' => true,
        'assureDirection' => true,
        'hasLine'         => true,
        'skipDetection'   => true,
    ];
    protected $_name = [
        'imageURL'        => 'ImageURL',
        'outputFormat'    => 'OutputFormat',
        'useFinanceModel' => 'UseFinanceModel',
        'assureDirection' => 'AssureDirection',
        'hasLine'         => 'HasLine',
        'skipDetection'   => 'SkipDetection',
    ];
    protected $_description = [
        'imageURL'        => 'imageUrl',
        'outputFormat'    => 'outputFormat',
        'useFinanceModel' => 'useFinanceModel',
        'assureDirection' => 'assureDirection',
        'hasLine'         => 'hasLine',
        'skipDetection'   => 'skipDetection',
    ];
}

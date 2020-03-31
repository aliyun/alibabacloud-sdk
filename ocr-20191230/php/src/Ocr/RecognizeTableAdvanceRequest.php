<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr;

use AlibabaCloud\Tea\Model;

class RecognizeTableAdvanceRequest extends Model
{
    public $imageURLObject;
    public $outputFormat;
    public $useFinanceModel;
    public $assureDirection;
    public $hasLine;
    public $skipDetection;
    protected $_required = [
        'imageURLObject'  => true,
        'outputFormat'    => true,
        'useFinanceModel' => true,
        'assureDirection' => true,
        'hasLine'         => true,
        'skipDetection'   => true,
    ];
    protected $_description = [
        'imageURLObject'  => 'ImageURLObject',
        'outputFormat'    => 'outputFormat',
        'useFinanceModel' => 'useFinanceModel',
        'assureDirection' => 'assureDirection',
        'hasLine'         => 'hasLine',
        'skipDetection'   => 'skipDetection',
    ];
    protected $_name = [
        'imageURLObject'  => 'ImageURLObject',
        'outputFormat'    => 'OutputFormat',
        'useFinanceModel' => 'UseFinanceModel',
        'assureDirection' => 'AssureDirection',
        'hasLine'         => 'HasLine',
        'skipDetection'   => 'SkipDetection',
    ];
}

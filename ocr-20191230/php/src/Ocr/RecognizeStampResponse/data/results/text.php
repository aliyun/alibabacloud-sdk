<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeStampResponse\data\results;

use AlibabaCloud\Tea\Model;

class text extends Model
{
    public $content;
    public $confidence;
    protected $_required = [
        'content'    => true,
        'confidence' => true,
    ];
    protected $_name = [
        'content'    => 'Content',
        'confidence' => 'Confidence',
    ];
    protected $_description = [
        'content'    => 'content',
        'confidence' => 'confidence',
    ];
}

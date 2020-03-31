<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeCharacterResponse\data;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    public $probability;
    public $text;
    public $textRectangles;
    protected $_required = [
        'probability'    => true,
        'text'           => true,
        'textRectangles' => true,
    ];
    protected $_name = [
        'probability'    => 'Probability',
        'text'           => 'Text',
        'textRectangles' => 'TextRectangles',
    ];
    protected $_description = [
        'probability'    => 'probability',
        'text'           => 'text',
        'textRectangles' => 'textRectangles',
    ];
}

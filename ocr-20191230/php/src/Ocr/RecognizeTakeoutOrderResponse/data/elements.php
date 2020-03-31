<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTakeoutOrderResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $score;
    public $name;
    public $value;
    public $boxes;
    protected $_required = [
        'score' => true,
        'name'  => true,
        'value' => true,
        'boxes' => true,
    ];
    protected $_name = [
        'score' => 'Score',
        'name'  => 'Name',
        'value' => 'Value',
        'boxes' => 'Boxes',
    ];
    protected $_description = [
        'score' => 'score',
        'name'  => 'name',
        'value' => 'value',
        'boxes' => 'boxes',
    ];
}

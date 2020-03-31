<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeLicensePlateResponse\data\plates;

use AlibabaCloud\Tea\Model;

class roi extends Model
{
    public $h;
    public $w;
    public $x;
    public $y;
    protected $_required = [
        'h' => true,
        'w' => true,
        'x' => true,
        'y' => true,
    ];
    protected $_name = [
        'h' => 'H',
        'w' => 'W',
        'x' => 'X',
        'y' => 'Y',
    ];
    protected $_description = [
        'h' => 'h',
        'w' => 'w',
        'x' => 'x',
        'y' => 'y',
    ];
}

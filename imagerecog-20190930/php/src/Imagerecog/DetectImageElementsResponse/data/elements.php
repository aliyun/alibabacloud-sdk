<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\DetectImageElementsResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $type;
    public $x;
    public $y;
    public $width;
    public $height;
    public $score;
    protected $_required = [
        'type'   => true,
        'x'      => true,
        'y'      => true,
        'width'  => true,
        'height' => true,
        'score'  => true,
    ];
    protected $_name = [
        'type'   => 'Type',
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
        'score'  => 'Score',
    ];
    protected $_description = [
        'type'   => 'type',
        'x'      => 'x',
        'y'      => 'y',
        'width'  => 'width',
        'height' => 'height',
        'score'  => 'score',
    ];
}

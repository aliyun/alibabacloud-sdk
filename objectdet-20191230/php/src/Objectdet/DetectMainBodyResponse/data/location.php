<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectMainBodyResponse\data;

use AlibabaCloud\Tea\Model;

class location extends Model
{
    public $x;
    public $y;
    public $width;
    public $height;
    protected $_required = [
        'x'      => true,
        'y'      => true,
        'width'  => true,
        'height' => true,
    ];
    protected $_name = [
        'x'      => 'X',
        'y'      => 'Y',
        'width'  => 'Width',
        'height' => 'Height',
    ];
    protected $_description = [
        'x'      => 'x',
        'y'      => 'y',
        'width'  => 'width',
        'height' => 'height',
    ];
}

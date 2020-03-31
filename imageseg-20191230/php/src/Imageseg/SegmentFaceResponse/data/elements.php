<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFaceResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $imageURL;
    public $x;
    public $y;
    public $width;
    public $height;
    protected $_required = [
        'imageURL' => true,
        'x'        => true,
        'y'        => true,
        'width'    => true,
        'height'   => true,
    ];
    protected $_name = [
        'imageURL' => 'ImageURL',
        'x'        => 'X',
        'y'        => 'Y',
        'width'    => 'Width',
        'height'   => 'Height',
    ];
    protected $_description = [
        'imageURL' => 'uri',
        'x'        => 'x',
        'y'        => 'y',
        'width'    => 'w',
        'height'   => 'h',
    ];
}

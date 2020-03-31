<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech;

use AlibabaCloud\Tea\Model;

class RecognizeFurnitureSpuRequest extends Model
{
    public $imageURL;
    public $XLength;
    public $YLength;
    public $ZLength;
    protected $_required = [
        'imageURL' => true,
        'XLength'  => true,
        'YLength'  => true,
        'ZLength'  => true,
    ];
    protected $_name = [
        'imageURL' => 'ImageURL',
        'XLength'  => 'XLength',
        'YLength'  => 'YLength',
        'ZLength'  => 'ZLength',
    ];
    protected $_description = [
        'imageURL' => 'imageUrl',
        'XLength'  => 'xLength',
        'YLength'  => 'yLength',
        'ZLength'  => 'zLength',
    ];
}

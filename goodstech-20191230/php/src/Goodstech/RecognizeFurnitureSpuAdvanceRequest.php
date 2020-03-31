<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech;

use AlibabaCloud\Tea\Model;

class RecognizeFurnitureSpuAdvanceRequest extends Model
{
    public $imageURLObject;
    public $XLength;
    public $YLength;
    public $ZLength;
    protected $_required = [
        'imageURLObject' => true,
        'XLength'        => true,
        'YLength'        => true,
        'ZLength'        => true,
    ];
    protected $_description = [
        'imageURLObject' => 'ImageURLObject',
        'XLength'        => 'xLength',
        'YLength'        => 'yLength',
        'ZLength'        => 'zLength',
    ];
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'XLength'        => 'XLength',
        'YLength'        => 'YLength',
        'ZLength'        => 'ZLength',
    ];
}

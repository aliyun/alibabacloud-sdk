<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Objectdet\DetectObjectResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $width;
    public $height;
    public $elements;
    protected $_required = [
        'width'    => true,
        'height'   => true,
        'elements' => true,
    ];
    protected $_name = [
        'width'    => 'Width',
        'height'   => 'Height',
        'elements' => 'Elements',
    ];
    protected $_description = [
        'width'    => 'width',
        'height'   => 'height',
        'elements' => 'elements',
    ];
}

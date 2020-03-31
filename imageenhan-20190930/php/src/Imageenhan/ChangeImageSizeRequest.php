<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ChangeImageSizeRequest extends Model
{
    public $width;
    public $height;
    public $url;
    protected $_required = [
        'width'  => true,
        'height' => true,
        'url'    => true,
    ];
    protected $_name = [
        'width'  => 'Width',
        'height' => 'Height',
        'url'    => 'Url',
    ];
    protected $_description = [
        'width'  => 'width',
        'height' => 'height',
        'url'    => 'url',
    ];
}

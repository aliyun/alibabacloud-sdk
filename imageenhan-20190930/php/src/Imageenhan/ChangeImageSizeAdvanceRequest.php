<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class ChangeImageSizeAdvanceRequest extends Model
{
    public $urlObject;
    public $width;
    public $height;
    protected $_required = [
        'urlObject' => true,
        'width'     => true,
        'height'    => true,
    ];
    protected $_description = [
        'urlObject' => 'UrlObject',
        'width'     => 'width',
        'height'    => 'height',
    ];
    protected $_name = [
        'urlObject' => 'UrlObject',
        'width'     => 'Width',
        'height'    => 'Height',
    ];
}

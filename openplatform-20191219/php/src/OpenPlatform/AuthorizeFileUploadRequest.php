<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;

use AlibabaCloud\Tea\Model;

class AuthorizeFileUploadRequest extends Model
{
    public $product;
    public $regionId;
    protected $_required = [
        'product' => true,
    ];
    protected $_name = [
        'product'  => 'Product',
        'regionId' => 'RegionId',
    ];
    protected $_description = [
        'product'  => 'product',
        'regionId' => 'regionId',
    ];
}

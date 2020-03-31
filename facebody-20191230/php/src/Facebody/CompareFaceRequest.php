<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class CompareFaceRequest extends Model
{
    public $imageURLA;
    public $imageURLB;
    protected $_required = [
        'imageURLA' => true,
        'imageURLB' => true,
    ];
    protected $_name = [
        'imageURLA' => 'ImageURLA',
        'imageURLB' => 'ImageURLB',
    ];
    protected $_description = [
        'imageURLA' => 'imageUrlA',
        'imageURLB' => 'imageUrlB',
    ];
}

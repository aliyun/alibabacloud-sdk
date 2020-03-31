<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceBeautyRequest extends Model
{
    public $imageURL;
    public $sharp;
    public $smooth;
    public $white;
    protected $_required = [
        'imageURL' => true,
        'sharp'    => true,
        'smooth'   => true,
        'white'    => true,
    ];
    protected $_name = [
        'imageURL' => 'ImageURL',
        'sharp'    => 'Sharp',
        'smooth'   => 'Smooth',
        'white'    => 'White',
    ];
    protected $_description = [
        'imageURL' => 'imageUrl',
        'sharp'    => 'sharp',
        'smooth'   => 'smooth',
        'white'    => 'white',
    ];
}

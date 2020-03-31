<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceBeautyAdvanceRequest extends Model
{
    public $imageURLObject;
    public $sharp;
    public $smooth;
    public $white;
    protected $_required = [
        'imageURLObject' => true,
        'sharp'          => true,
        'smooth'         => true,
        'white'          => true,
    ];
    protected $_description = [
        'imageURLObject' => 'ImageURLObject',
        'sharp'          => 'sharp',
        'smooth'         => 'smooth',
        'white'          => 'white',
    ];
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'sharp'          => 'Sharp',
        'smooth'         => 'Smooth',
        'white'          => 'White',
    ];
}

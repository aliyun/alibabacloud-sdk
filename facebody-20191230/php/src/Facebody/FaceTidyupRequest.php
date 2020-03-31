<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceTidyupRequest extends Model
{
    public $imageURL;
    public $shapeType;
    public $strength;
    protected $_required = [
        'imageURL'  => true,
        'shapeType' => true,
        'strength'  => true,
    ];
    protected $_name = [
        'imageURL'  => 'ImageURL',
        'shapeType' => 'ShapeType',
        'strength'  => 'Strength',
    ];
    protected $_description = [
        'imageURL'  => 'imageUrl',
        'shapeType' => 'shapeType',
        'strength'  => 'strength',
    ];
}

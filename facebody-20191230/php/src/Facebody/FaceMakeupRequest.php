<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceMakeupRequest extends Model
{
    public $imageURL;
    public $makeupType;
    public $resourceType;
    public $strength;
    protected $_required = [
        'imageURL'     => true,
        'makeupType'   => true,
        'resourceType' => true,
        'strength'     => true,
    ];
    protected $_name = [
        'imageURL'     => 'ImageURL',
        'makeupType'   => 'MakeupType',
        'resourceType' => 'ResourceType',
        'strength'     => 'Strength',
    ];
    protected $_description = [
        'imageURL'     => 'imageUrl',
        'makeupType'   => 'makeupType',
        'resourceType' => 'resourceType',
        'strength'     => 'strength',
    ];
}

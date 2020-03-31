<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class FaceMakeupAdvanceRequest extends Model
{
    public $imageURLObject;
    public $makeupType;
    public $resourceType;
    public $strength;
    protected $_required = [
        'imageURLObject' => true,
        'makeupType'     => true,
        'resourceType'   => true,
        'strength'       => true,
    ];
    protected $_description = [
        'imageURLObject' => 'ImageURLObject',
        'makeupType'     => 'makeupType',
        'resourceType'   => 'resourceType',
        'strength'       => 'strength',
    ];
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'makeupType'     => 'MakeupType',
        'resourceType'   => 'ResourceType',
        'strength'       => 'Strength',
    ];
}

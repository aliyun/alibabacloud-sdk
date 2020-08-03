<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTypeTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        Model::validateRequired('resourceType', $this->resourceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTypeTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}

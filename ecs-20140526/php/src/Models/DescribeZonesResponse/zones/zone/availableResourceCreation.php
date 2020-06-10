<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone;

use AlibabaCloud\Tea\Model;

class availableResourceCreation extends Model
{
    /**
     * @description ResourceTypes
     *
     * @var array
     */
    public $resourceTypes;
    protected $_name = [
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('resourceTypes', $this->resourceTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = [];
            if (null !== $this->resourceTypes) {
                $res['ResourceTypes'] = $this->resourceTypes;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResourceCreation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}

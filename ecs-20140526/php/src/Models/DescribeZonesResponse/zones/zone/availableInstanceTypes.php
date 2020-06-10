<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone;

use AlibabaCloud\Tea\Model;

class availableInstanceTypes extends Model
{
    /**
     * @description InstanceTypes
     *
     * @var array
     */
    public $instanceTypes;
    protected $_name = [
        'instanceTypes' => 'InstanceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('instanceTypes', $this->instanceTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = [];
            if (null !== $this->instanceTypes) {
                $res['InstanceTypes'] = $this->instanceTypes;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableInstanceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $model->instanceTypes = $map['InstanceTypes'];
            }
        }

        return $model;
    }
}

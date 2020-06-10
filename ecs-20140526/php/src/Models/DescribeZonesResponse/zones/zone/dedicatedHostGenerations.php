<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone;

use AlibabaCloud\Tea\Model;

class dedicatedHostGenerations extends Model
{
    /**
     * @description DedicatedHostGeneration
     *
     * @var array
     */
    public $dedicatedHostGeneration;
    protected $_name = [
        'dedicatedHostGeneration' => 'DedicatedHostGeneration',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostGeneration', $this->dedicatedHostGeneration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGeneration) {
            $res['DedicatedHostGeneration'] = [];
            if (null !== $this->dedicatedHostGeneration) {
                $res['DedicatedHostGeneration'] = $this->dedicatedHostGeneration;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostGenerations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGeneration'])) {
            if (!empty($map['DedicatedHostGeneration'])) {
                $model->dedicatedHostGeneration = [];
                $model->dedicatedHostGeneration = $map['DedicatedHostGeneration'];
            }
        }

        return $model;
    }
}

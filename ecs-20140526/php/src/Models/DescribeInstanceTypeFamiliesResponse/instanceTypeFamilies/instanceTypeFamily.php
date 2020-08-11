<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypeFamiliesResponse\instanceTypeFamilies;

use AlibabaCloud\Tea\Model;

class instanceTypeFamily extends Model
{
    /**
     * @var string
     */
    public $instanceTypeFamilyId;

    /**
     * @var string
     */
    public $generation;
    protected $_name = [
        'instanceTypeFamilyId' => 'InstanceTypeFamilyId',
        'generation'           => 'Generation',
    ];

    public function validate()
    {
        Model::validateRequired('instanceTypeFamilyId', $this->instanceTypeFamilyId, true);
        Model::validateRequired('generation', $this->generation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilyId) {
            $res['InstanceTypeFamilyId'] = $this->instanceTypeFamilyId;
        }
        if (null !== $this->generation) {
            $res['Generation'] = $this->generation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamily
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilyId'])) {
            $model->instanceTypeFamilyId = $map['InstanceTypeFamilyId'];
        }
        if (isset($map['Generation'])) {
            $model->generation = $map['Generation'];
        }

        return $model;
    }
}

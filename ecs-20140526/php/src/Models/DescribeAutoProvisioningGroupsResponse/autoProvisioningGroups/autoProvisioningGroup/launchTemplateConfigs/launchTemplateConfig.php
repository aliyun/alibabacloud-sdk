<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponse\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;

use AlibabaCloud\Tea\Model;

class launchTemplateConfig extends Model
{
    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description maxPrice
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @description vSWitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description weightedCapacity
     *
     * @var float
     */
    public $weightedCapacity;

    /**
     * @description priority
     *
     * @var float
     */
    public $priority;
    protected $_name = [
        'instanceType'     => 'InstanceType',
        'maxPrice'         => 'MaxPrice',
        'VSwitchId'        => 'VSwitchId',
        'weightedCapacity' => 'WeightedCapacity',
        'priority'         => 'Priority',
    ];

    public function validate()
    {
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('maxPrice', $this->maxPrice, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('weightedCapacity', $this->weightedCapacity, true);
        Model::validateRequired('priority', $this->priority, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}

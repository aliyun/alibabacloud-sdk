<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType\instanceType;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType\zones;
use AlibabaCloud\Tea\Model;

class recommendInstanceType extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description commodityCode
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description scene
     *
     * @var string
     */
    public $scene;

    /**
     * @description chargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description spotStrategy
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description zoneIds
     *
     * @var zones
     */
    public $zones;

    /**
     * @description instanceTypeModel
     *
     * @var instanceType
     */
    public $instanceType;
    protected $_name = [
        'regionId'           => 'RegionId',
        'commodityCode'      => 'CommodityCode',
        'scene'              => 'Scene',
        'instanceChargeType' => 'InstanceChargeType',
        'spotStrategy'       => 'SpotStrategy',
        'priority'           => 'Priority',
        'zones'              => 'Zones',
        'instanceType'       => 'InstanceType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('commodityCode', $this->commodityCode, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('spotStrategy', $this->spotStrategy, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('zones', $this->zones, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = instanceType::fromMap($map['InstanceType']);
        }

        return $model;
    }
}

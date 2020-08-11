<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNetworkInterfacesResponse\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\Tea\Model;

class attachment extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $trunkNetworkInterfaceId;

    /**
     * @var int
     */
    public $deviceIndex;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'trunkNetworkInterfaceId' => 'TrunkNetworkInterfaceId',
        'deviceIndex'             => 'DeviceIndex',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('trunkNetworkInterfaceId', $this->trunkNetworkInterfaceId, true);
        Model::validateRequired('deviceIndex', $this->deviceIndex, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trunkNetworkInterfaceId) {
            $res['TrunkNetworkInterfaceId'] = $this->trunkNetworkInterfaceId;
        }
        if (null !== $this->deviceIndex) {
            $res['DeviceIndex'] = $this->deviceIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TrunkNetworkInterfaceId'])) {
            $model->trunkNetworkInterfaceId = $map['TrunkNetworkInterfaceId'];
        }
        if (isset($map['DeviceIndex'])) {
            $model->deviceIndex = $map['DeviceIndex'];
        }

        return $model;
    }
}

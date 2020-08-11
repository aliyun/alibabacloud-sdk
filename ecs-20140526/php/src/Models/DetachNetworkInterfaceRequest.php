<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DetachNetworkInterfaceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $trunkNetworkInstanceId;
    protected $_name = [
        'regionId'               => 'RegionId',
        'networkInterfaceId'     => 'NetworkInterfaceId',
        'instanceId'             => 'InstanceId',
        'trunkNetworkInstanceId' => 'TrunkNetworkInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkInterfaceId', $this->networkInterfaceId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trunkNetworkInstanceId) {
            $res['TrunkNetworkInstanceId'] = $this->trunkNetworkInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TrunkNetworkInstanceId'])) {
            $model->trunkNetworkInstanceId = $map['TrunkNetworkInstanceId'];
        }

        return $model;
    }
}

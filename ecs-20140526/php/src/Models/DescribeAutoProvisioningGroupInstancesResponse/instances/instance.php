<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupInstancesResponse\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $CPU;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isSpot;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $creationTime;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'status'       => 'Status',
        'regionId'     => 'RegionId',
        'zoneId'       => 'ZoneId',
        'CPU'          => 'CPU',
        'memory'       => 'Memory',
        'instanceType' => 'InstanceType',
        'isSpot'       => 'IsSpot',
        'ioOptimized'  => 'IoOptimized',
        'networkType'  => 'NetworkType',
        'osType'       => 'OsType',
        'creationTime' => 'CreationTime',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('CPU', $this->CPU, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('isSpot', $this->isSpot, true);
        Model::validateRequired('ioOptimized', $this->ioOptimized, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('osType', $this->osType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isSpot) {
            $res['IsSpot'] = $this->isSpot;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsSpot'])) {
            $model->isSpot = $map['IsSpot'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\diskEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\status;
use AlibabaCloud\Tea\Model;

class diskFullStatusType extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $device;

    /**
     * @var diskEventSet
     */
    public $diskEventSet;

    /**
     * @var status
     */
    public $status;

    /**
     * @var healthStatus
     */
    public $healthStatus;
    protected $_name = [
        'diskId'       => 'DiskId',
        'instanceId'   => 'InstanceId',
        'device'       => 'Device',
        'diskEventSet' => 'DiskEventSet',
        'status'       => 'Status',
        'healthStatus' => 'HealthStatus',
    ];

    public function validate()
    {
        Model::validateRequired('diskId', $this->diskId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('diskEventSet', $this->diskEventSet, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('healthStatus', $this->healthStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskEventSet) {
            $res['DiskEventSet'] = null !== $this->diskEventSet ? $this->diskEventSet->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = null !== $this->healthStatus ? $this->healthStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskFullStatusType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskEventSet'])) {
            $model->diskEventSet = diskEventSet::fromMap($map['DiskEventSet']);
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = healthStatus::fromMap($map['HealthStatus']);
        }

        return $model;
    }
}

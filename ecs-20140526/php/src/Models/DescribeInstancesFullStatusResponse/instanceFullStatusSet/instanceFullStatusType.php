<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\healthStatus;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\status;
use AlibabaCloud\Tea\Model;

class instanceFullStatusType extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var scheduledSystemEventSet
     */
    public $scheduledSystemEventSet;

    /**
     * @var status
     */
    public $status;

    /**
     * @var healthStatus
     */
    public $healthStatus;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'scheduledSystemEventSet' => 'ScheduledSystemEventSet',
        'status'                  => 'Status',
        'healthStatus'            => 'HealthStatus',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('scheduledSystemEventSet', $this->scheduledSystemEventSet, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('healthStatus', $this->healthStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scheduledSystemEventSet) {
            $res['ScheduledSystemEventSet'] = null !== $this->scheduledSystemEventSet ? $this->scheduledSystemEventSet->toMap() : null;
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
     * @return instanceFullStatusType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScheduledSystemEventSet'])) {
            $model->scheduledSystemEventSet = scheduledSystemEventSet::fromMap($map['ScheduledSystemEventSet']);
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

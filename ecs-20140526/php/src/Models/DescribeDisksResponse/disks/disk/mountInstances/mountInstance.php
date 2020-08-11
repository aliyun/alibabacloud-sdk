<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\mountInstances;

use AlibabaCloud\Tea\Model;

class mountInstance extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $attachedTime;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'device'       => 'Device',
        'attachedTime' => 'AttachedTime',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('attachedTime', $this->attachedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }

        return $model;
    }
}

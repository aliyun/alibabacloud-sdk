<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute\inactiveDisks;
use AlibabaCloud\Tea\Model;

class extendedAttribute extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $device;

    /**
     * @var inactiveDisks
     */
    public $inactiveDisks;
    protected $_name = [
        'diskId'        => 'DiskId',
        'device'        => 'Device',
        'inactiveDisks' => 'InactiveDisks',
    ];

    public function validate()
    {
        Model::validateRequired('diskId', $this->diskId, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('inactiveDisks', $this->inactiveDisks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->inactiveDisks) {
            $res['InactiveDisks'] = null !== $this->inactiveDisks ? $this->inactiveDisks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendedAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['InactiveDisks'])) {
            $model->inactiveDisks = inactiveDisks::fromMap($map['InactiveDisks']);
        }

        return $model;
    }
}

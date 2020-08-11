<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType;
use AlibabaCloud\Tea\Model;

class scheduledSystemEventSet extends Model
{
    /**
     * @var array
     */
    public $scheduledSystemEventType;
    protected $_name = [
        'scheduledSystemEventType' => 'ScheduledSystemEventType',
    ];

    public function validate()
    {
        Model::validateRequired('scheduledSystemEventType', $this->scheduledSystemEventType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scheduledSystemEventType) {
            $res['ScheduledSystemEventType'] = [];
            if (null !== $this->scheduledSystemEventType && \is_array($this->scheduledSystemEventType)) {
                $n = 0;
                foreach ($this->scheduledSystemEventType as $item) {
                    $res['ScheduledSystemEventType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledSystemEventSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScheduledSystemEventType'])) {
            if (!empty($map['ScheduledSystemEventType'])) {
                $model->scheduledSystemEventType = [];
                $n                               = 0;
                foreach ($map['ScheduledSystemEventType'] as $item) {
                    $model->scheduledSystemEventType[$n++] = null !== $item ? scheduledSystemEventType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

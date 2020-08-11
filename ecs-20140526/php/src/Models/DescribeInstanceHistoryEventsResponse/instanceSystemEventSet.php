<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponse\instanceSystemEventSet\instanceSystemEventType;
use AlibabaCloud\Tea\Model;

class instanceSystemEventSet extends Model
{
    /**
     * @var array
     */
    public $instanceSystemEventType;
    protected $_name = [
        'instanceSystemEventType' => 'InstanceSystemEventType',
    ];

    public function validate()
    {
        Model::validateRequired('instanceSystemEventType', $this->instanceSystemEventType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSystemEventType) {
            $res['InstanceSystemEventType'] = [];
            if (null !== $this->instanceSystemEventType && \is_array($this->instanceSystemEventType)) {
                $n = 0;
                foreach ($this->instanceSystemEventType as $item) {
                    $res['InstanceSystemEventType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSystemEventSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSystemEventType'])) {
            if (!empty($map['InstanceSystemEventType'])) {
                $model->instanceSystemEventType = [];
                $n                              = 0;
                foreach ($map['InstanceSystemEventType'] as $item) {
                    $model->instanceSystemEventType[$n++] = null !== $item ? instanceSystemEventType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

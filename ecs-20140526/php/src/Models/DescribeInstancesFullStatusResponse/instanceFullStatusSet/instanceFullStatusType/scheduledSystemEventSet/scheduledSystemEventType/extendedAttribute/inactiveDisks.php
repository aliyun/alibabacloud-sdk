<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute\inactiveDisks\inactiveDisk;
use AlibabaCloud\Tea\Model;

class inactiveDisks extends Model
{
    /**
     * @var array
     */
    public $inactiveDisk;
    protected $_name = [
        'inactiveDisk' => 'InactiveDisk',
    ];

    public function validate()
    {
        Model::validateRequired('inactiveDisk', $this->inactiveDisk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inactiveDisk) {
            $res['InactiveDisk'] = [];
            if (null !== $this->inactiveDisk && \is_array($this->inactiveDisk)) {
                $n = 0;
                foreach ($this->inactiveDisk as $item) {
                    $res['InactiveDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inactiveDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InactiveDisk'])) {
            if (!empty($map['InactiveDisk'])) {
                $model->inactiveDisk = [];
                $n                   = 0;
                foreach ($map['InactiveDisk'] as $item) {
                    $model->inactiveDisk[$n++] = null !== $item ? inactiveDisk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

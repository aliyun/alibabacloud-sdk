<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType;
use AlibabaCloud\Tea\Model;

class diskEventSet extends Model
{
    /**
     * @description DiskEventType
     *
     * @var array
     */
    public $diskEventType;
    protected $_name = [
        'diskEventType' => 'DiskEventType',
    ];

    public function validate()
    {
        Model::validateRequired('diskEventType', $this->diskEventType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskEventType) {
            $res['DiskEventType'] = [];
            if (null !== $this->diskEventType && \is_array($this->diskEventType)) {
                $n = 0;
                foreach ($this->diskEventType as $item) {
                    $res['DiskEventType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskEventSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskEventType'])) {
            if (!empty($map['DiskEventType'])) {
                $model->diskEventType = [];
                $n                    = 0;
                foreach ($map['DiskEventType'] as $item) {
                    $model->diskEventType[$n++] = null !== $item ? diskEventType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

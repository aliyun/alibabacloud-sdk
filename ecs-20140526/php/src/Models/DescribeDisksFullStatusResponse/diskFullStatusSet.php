<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponse\diskFullStatusSet\diskFullStatusType;
use AlibabaCloud\Tea\Model;

class diskFullStatusSet extends Model
{
    /**
     * @var array
     */
    public $diskFullStatusType;
    protected $_name = [
        'diskFullStatusType' => 'DiskFullStatusType',
    ];

    public function validate()
    {
        Model::validateRequired('diskFullStatusType', $this->diskFullStatusType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskFullStatusType) {
            $res['DiskFullStatusType'] = [];
            if (null !== $this->diskFullStatusType && \is_array($this->diskFullStatusType)) {
                $n = 0;
                foreach ($this->diskFullStatusType as $item) {
                    $res['DiskFullStatusType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskFullStatusSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskFullStatusType'])) {
            if (!empty($map['DiskFullStatusType'])) {
                $model->diskFullStatusType = [];
                $n                         = 0;
                foreach ($map['DiskFullStatusType'] as $item) {
                    $model->diskFullStatusType[$n++] = null !== $item ? diskFullStatusType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

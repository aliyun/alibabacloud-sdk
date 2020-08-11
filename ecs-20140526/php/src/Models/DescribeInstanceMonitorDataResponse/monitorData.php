<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceMonitorDataResponse\monitorData\instanceMonitorData;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var array
     */
    public $instanceMonitorData;
    protected $_name = [
        'instanceMonitorData' => 'InstanceMonitorData',
    ];

    public function validate()
    {
        Model::validateRequired('instanceMonitorData', $this->instanceMonitorData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceMonitorData) {
            $res['InstanceMonitorData'] = [];
            if (null !== $this->instanceMonitorData && \is_array($this->instanceMonitorData)) {
                $n = 0;
                foreach ($this->instanceMonitorData as $item) {
                    $res['InstanceMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceMonitorData'])) {
            if (!empty($map['InstanceMonitorData'])) {
                $model->instanceMonitorData = [];
                $n                          = 0;
                foreach ($map['InstanceMonitorData'] as $item) {
                    $model->instanceMonitorData[$n++] = null !== $item ? instanceMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEniMonitorDataResponse\monitorData\eniMonitorData;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var array
     */
    public $eniMonitorData;
    protected $_name = [
        'eniMonitorData' => 'EniMonitorData',
    ];

    public function validate()
    {
        Model::validateRequired('eniMonitorData', $this->eniMonitorData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniMonitorData) {
            $res['EniMonitorData'] = [];
            if (null !== $this->eniMonitorData && \is_array($this->eniMonitorData)) {
                $n = 0;
                foreach ($this->eniMonitorData as $item) {
                    $res['EniMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['EniMonitorData'])) {
            if (!empty($map['EniMonitorData'])) {
                $model->eniMonitorData = [];
                $n                     = 0;
                foreach ($map['EniMonitorData'] as $item) {
                    $model->eniMonitorData[$n++] = null !== $item ? eniMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

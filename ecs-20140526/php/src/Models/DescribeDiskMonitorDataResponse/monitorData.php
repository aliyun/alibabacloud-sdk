<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskMonitorDataResponse\monitorData\diskMonitorData;
use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @var array
     */
    public $diskMonitorData;
    protected $_name = [
        'diskMonitorData' => 'DiskMonitorData',
    ];

    public function validate()
    {
        Model::validateRequired('diskMonitorData', $this->diskMonitorData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskMonitorData) {
            $res['DiskMonitorData'] = [];
            if (null !== $this->diskMonitorData && \is_array($this->diskMonitorData)) {
                $n = 0;
                foreach ($this->diskMonitorData as $item) {
                    $res['DiskMonitorData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DiskMonitorData'])) {
            if (!empty($map['DiskMonitorData'])) {
                $model->diskMonitorData = [];
                $n                      = 0;
                foreach ($map['DiskMonitorData'] as $item) {
                    $model->diskMonitorData[$n++] = null !== $item ? diskMonitorData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

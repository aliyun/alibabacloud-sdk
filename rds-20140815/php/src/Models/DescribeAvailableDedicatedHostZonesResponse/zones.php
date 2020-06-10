<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse\zones\dedicatedHostZones;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description DedicatedHostZones
     *
     * @var array
     */
    public $dedicatedHostZones;
    protected $_name = [
        'dedicatedHostZones' => 'DedicatedHostZones',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostZones', $this->dedicatedHostZones, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostZones) {
            $res['DedicatedHostZones'] = [];
            if (null !== $this->dedicatedHostZones && \is_array($this->dedicatedHostZones)) {
                $n = 0;
                foreach ($this->dedicatedHostZones as $item) {
                    $res['DedicatedHostZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostZones'])) {
            if (!empty($map['DedicatedHostZones'])) {
                $model->dedicatedHostZones = [];
                $n                         = 0;
                foreach ($map['DedicatedHostZones'] as $item) {
                    $model->dedicatedHostZones[$n++] = null !== $item ? dedicatedHostZones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

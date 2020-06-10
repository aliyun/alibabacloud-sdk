<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse\regions\region;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse\regions\region\zones\zone;
use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description Zone
     *
     * @var array
     */
    public $zone;
    protected $_name = [
        'zone' => 'Zone',
    ];

    public function validate()
    {
        Model::validateRequired('zone', $this->zone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zone) {
            $res['Zone'] = [];
            if (null !== $this->zone && \is_array($this->zone)) {
                $n = 0;
                foreach ($this->zone as $item) {
                    $res['Zone'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Zone'])) {
            if (!empty($map['Zone'])) {
                $model->zone = [];
                $n           = 0;
                foreach ($map['Zone'] as $item) {
                    $model->zone[$n++] = null !== $item ? zone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

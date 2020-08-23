<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones\zone\capacity;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones\zone\performance;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var capacity
     */
    public $capacity;

    /**
     * @var performance
     */
    public $performance;
    protected $_name = [
        'zoneId'      => 'ZoneId',
        'capacity'    => 'Capacity',
        'performance' => 'Performance',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('capacity', $this->capacity, true);
        Model::validateRequired('performance', $this->performance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
        }
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }

        return $model;
    }
}

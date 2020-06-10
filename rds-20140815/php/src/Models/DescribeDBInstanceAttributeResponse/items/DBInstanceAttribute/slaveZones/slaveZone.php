<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\slaveZones;

use AlibabaCloud\Tea\Model;

class slaveZone extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaveZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

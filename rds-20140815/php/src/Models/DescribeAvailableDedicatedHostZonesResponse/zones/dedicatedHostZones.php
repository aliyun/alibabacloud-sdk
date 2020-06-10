<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableDedicatedHostZonesResponse\zones;

use AlibabaCloud\Tea\Model;

class dedicatedHostZones extends Model
{
    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'zoneId'      => 'ZoneId',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}

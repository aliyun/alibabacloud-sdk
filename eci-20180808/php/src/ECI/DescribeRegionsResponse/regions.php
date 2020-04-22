<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description endpoint
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description zones
     *
     * @var array
     */
    public $zones;
    protected $_name = [
        'regionId'       => 'RegionId',
        'regionEndpoint' => 'RegionEndpoint',
        'zones'          => 'Zones',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('regionEndpoint', $this->regionEndpoint, true);
        Model::validateRequired('zones', $this->zones, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['RegionId']       = $this->regionId;
        $res['RegionEndpoint'] = $this->regionEndpoint;
        $res['Zones']          = [];
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}

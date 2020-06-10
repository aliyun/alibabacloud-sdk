<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse\regions\region\zones;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description vpcEnabled
     *
     * @var bool
     */
    public $vpcEnabled;
    protected $_name = [
        'zoneId'     => 'ZoneId',
        'vpcEnabled' => 'VpcEnabled',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('vpcEnabled', $this->vpcEnabled, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
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
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }

        return $model;
    }
}

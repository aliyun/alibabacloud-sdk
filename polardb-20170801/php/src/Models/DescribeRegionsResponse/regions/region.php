<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse\regions;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeRegionsResponse\regions\region\zones;

class region extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'zones' => 'Zones',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zones', $this->zones, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return region
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Zones'])){
            $model->zones = zones::fromMap($map['Zones']);
        }
        return $model;
    }
    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description zones
     * @var zones
     */
    public $zones;

}

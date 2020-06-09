<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionsResponse\regions;

use AlibabaCloud\Tea\Model;

class RDSRegion extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['ZoneId'] = $this->zoneId;
        return $res;
    }
    /**
     * @param array $map
     * @return RDSRegion
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        return $model;
    }
    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description avz
     * @var string
     */
    public $zoneId;

}

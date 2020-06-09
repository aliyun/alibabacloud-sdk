<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse\availableZones\supportedEngines;

class availableZones extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
        'supportedEngines' => 'SupportedEngines',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('supportedEngines', $this->supportedEngines, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['ZoneId'] = $this->zoneId;
        $res['SupportedEngines'] = [];
        if(null !== $this->supportedEngines && is_array($this->supportedEngines)){
            $n = 0;
            foreach($this->supportedEngines as $item){
                $res['SupportedEngines'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableZones
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['SupportedEngines'])){
            if(!empty($map['SupportedEngines'])){
                $model->supportedEngines = [];
                $n = 0;
                foreach($map['SupportedEngines'] as $item) {
                    $model->supportedEngines[$n++] = null !== $item ? supportedEngines::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description supportEngines
     * @var array
     */
    public $supportedEngines;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableZonesRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'engine' => 'Engine',
        'zoneId' => 'ZoneId',
        'engineVersion' => 'EngineVersion',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['Engine'] = $this->engine;
        $res['ZoneId'] = $this->zoneId;
        $res['EngineVersion'] = $this->engineVersion;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeAvailableZonesRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description zoneId
     * @var string
     */
    public $zoneId;

    /**
     * @description version
     * @var string
     */
    public $engineVersion;

}

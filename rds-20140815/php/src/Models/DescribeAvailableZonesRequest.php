<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableZonesRequest extends Model
{
    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description version
     *
     * @var string
     */
    public $engineVersion;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'engine'          => 'Engine',
        'zoneId'          => 'ZoneId',
        'engineVersion'   => 'EngineVersion',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableZonesResponse\availableZones\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description networkTypes
     *
     * @var string
     */
    public $networkTypes;

    /**
     * @description engines
     *
     * @var array
     */
    public $supportedEngines;
    protected $_name = [
        'regionId'         => 'RegionId',
        'zoneId'           => 'ZoneId',
        'networkTypes'     => 'NetworkTypes',
        'supportedEngines' => 'SupportedEngines',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('networkTypes', $this->networkTypes, true);
        Model::validateRequired('supportedEngines', $this->supportedEngines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = [];
            if (null !== $this->supportedEngines && \is_array($this->supportedEngines)) {
                $n = 0;
                foreach ($this->supportedEngines as $item) {
                    $res['SupportedEngines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = $map['NetworkTypes'];
        }
        if (isset($map['SupportedEngines'])) {
            if (!empty($map['SupportedEngines'])) {
                $model->supportedEngines = [];
                $n                       = 0;
                foreach ($map['SupportedEngines'] as $item) {
                    $model->supportedEngines[$n++] = null !== $item ? supportedEngines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

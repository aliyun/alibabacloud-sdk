<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableResourceResponse\availableZones\availableZone\supportedEngines;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
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
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description networkTypes
     *
     * @var string
     */
    public $networkTypes;

    /**
     * @description engines
     *
     * @var supportedEngines
     */
    public $supportedEngines;
    protected $_name = [
        'regionId'         => 'RegionId',
        'zoneId'           => 'ZoneId',
        'status'           => 'Status',
        'networkTypes'     => 'NetworkTypes',
        'supportedEngines' => 'SupportedEngines',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('status', $this->status, true);
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = $this->networkTypes;
        }
        if (null !== $this->supportedEngines) {
            $res['SupportedEngines'] = null !== $this->supportedEngines ? $this->supportedEngines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZone
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = $map['NetworkTypes'];
        }
        if (isset($map['SupportedEngines'])) {
            $model->supportedEngines = supportedEngines::fromMap($map['SupportedEngines']);
        }

        return $model;
    }
}

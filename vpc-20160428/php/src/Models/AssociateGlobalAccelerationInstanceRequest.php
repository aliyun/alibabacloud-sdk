<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateGlobalAccelerationInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @var string
     */
    public $backendServerId;

    /**
     * @var string
     */
    public $backendServerRegionId;

    /**
     * @var string
     */
    public $backendServerType;
    protected $_name = [
        'regionId'                     => 'RegionId',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'backendServerId'              => 'BackendServerId',
        'backendServerRegionId'        => 'BackendServerRegionId',
        'backendServerType'            => 'BackendServerType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('globalAccelerationInstanceId', $this->globalAccelerationInstanceId, true);
        Model::validateRequired('backendServerId', $this->backendServerId, true);
        Model::validateRequired('backendServerRegionId', $this->backendServerRegionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->backendServerId) {
            $res['BackendServerId'] = $this->backendServerId;
        }
        if (null !== $this->backendServerRegionId) {
            $res['BackendServerRegionId'] = $this->backendServerRegionId;
        }
        if (null !== $this->backendServerType) {
            $res['BackendServerType'] = $this->backendServerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateGlobalAccelerationInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['BackendServerId'])) {
            $model->backendServerId = $map['BackendServerId'];
        }
        if (isset($map['BackendServerRegionId'])) {
            $model->backendServerRegionId = $map['BackendServerRegionId'];
        }
        if (isset($map['BackendServerType'])) {
            $model->backendServerType = $map['BackendServerType'];
        }

        return $model;
    }
}

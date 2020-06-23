<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingRequest extends Model
{
    /**
     * @description roleArn
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description serviceName
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description spiRegionId
     *
     * @var string
     */
    public $SPIRegionId;

    /**
     * @description deletionTaskId
     *
     * @var string
     */
    public $deletionTaskId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'roleArn'        => 'RoleArn',
        'serviceName'    => 'ServiceName',
        'SPIRegionId'    => 'SPIRegionId',
        'deletionTaskId' => 'DeletionTaskId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('roleArn', $this->roleArn, true);
        Model::validateRequired('serviceName', $this->serviceName, true);
        Model::validateRequired('SPIRegionId', $this->SPIRegionId, true);
        Model::validateRequired('deletionTaskId', $this->deletionTaskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->SPIRegionId) {
            $res['SPIRegionId'] = $this->SPIRegionId;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SPIRegionId'])) {
            $model->SPIRegionId = $map['SPIRegionId'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

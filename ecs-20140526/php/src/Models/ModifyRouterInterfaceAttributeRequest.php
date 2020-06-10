<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyRouterInterfaceAttributeRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

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
     * @description routerInterfaceId
     *
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description oppositeInterfaceId
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description oppositeRouterId
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description oppositeRouterType
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @description oppositeInterfaceOwnerId
     *
     * @var int
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description healthCheckSourceIp
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description healthCheckTargetIp
     *
     * @var string
     */
    public $healthCheckTargetIp;
    protected $_name = [
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'regionId'                 => 'RegionId',
        'routerInterfaceId'        => 'RouterInterfaceId',
        'name'                     => 'Name',
        'description'              => 'Description',
        'oppositeInterfaceId'      => 'OppositeInterfaceId',
        'oppositeRouterId'         => 'OppositeRouterId',
        'oppositeRouterType'       => 'OppositeRouterType',
        'oppositeInterfaceOwnerId' => 'OppositeInterfaceOwnerId',
        'healthCheckSourceIp'      => 'HealthCheckSourceIp',
        'healthCheckTargetIp'      => 'HealthCheckTargetIp',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('routerInterfaceId', $this->routerInterfaceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRouterInterfaceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }

        return $model;
    }
}

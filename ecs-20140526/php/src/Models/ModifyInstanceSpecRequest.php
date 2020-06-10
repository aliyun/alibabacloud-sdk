<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\temporary;
use AlibabaCloud\Tea\Model;

class ModifyInstanceSpecRequest extends Model
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
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description internetMaxBandwidthOut
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description internetMaxBandwidthIn
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description Temporary
     *
     * @var temporary
     */
    public $temporary;

    /**
     * @description async
     *
     * @var bool
     */
    public $async;

    /**
     * @description canMigrateAcrossZone
     *
     * @var bool
     */
    public $allowMigrateAcrossZone;

    /**
     * @description SystemDisk
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'instanceId'              => 'InstanceId',
        'instanceType'            => 'InstanceType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'ownerAccount'            => 'OwnerAccount',
        'temporary'               => 'Temporary',
        'async'                   => 'Async',
        'allowMigrateAcrossZone'  => 'AllowMigrateAcrossZone',
        'systemDisk'              => 'SystemDisk',
        'clientToken'             => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('temporary', $this->temporary, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->temporary) {
            $res['Temporary'] = null !== $this->temporary ? $this->temporary->toMap() : null;
        }
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->allowMigrateAcrossZone) {
            $res['AllowMigrateAcrossZone'] = $this->allowMigrateAcrossZone;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceSpecRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['Temporary'])) {
            $model->temporary = temporary::fromMap($map['Temporary']);
        }
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['AllowMigrateAcrossZone'])) {
            $model->allowMigrateAcrossZone = $map['AllowMigrateAcrossZone'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

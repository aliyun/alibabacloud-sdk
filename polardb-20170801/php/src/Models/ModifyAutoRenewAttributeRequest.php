<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoRenewAttributeRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description dbClusterIds
     *
     * @var string
     */
    public $DBClusterIds;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description renewalStatus
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description duration
     *
     * @var string
     */
    public $duration;

    /**
     * @description periodUnit
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'DBClusterIds'         => 'DBClusterIds',
        'regionId'             => 'RegionId',
        'renewalStatus'        => 'RenewalStatus',
        'duration'             => 'Duration',
        'periodUnit'           => 'PeriodUnit',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('DBClusterIds', $this->DBClusterIds, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->DBClusterIds) {
            $res['DBClusterIds'] = $this->DBClusterIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoRenewAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DBClusterIds'])) {
            $model->DBClusterIds = $map['DBClusterIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

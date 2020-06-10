<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
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
     * @description systemDiskPolicyEnabled
     *
     * @var bool
     */
    public $systemDiskPolicyEnabled;

    /**
     * @description systemDiskPolicyTimePeriod
     *
     * @var int
     */
    public $systemDiskPolicyTimePeriod;

    /**
     * @description systemDiskPolicyRetentionDays
     *
     * @var int
     */
    public $systemDiskPolicyRetentionDays;

    /**
     * @description systemDiskPolicyRetentionLastWeek
     *
     * @var bool
     */
    public $systemDiskPolicyRetentionLastWeek;

    /**
     * @description dataDiskPolicyEnabled
     *
     * @var bool
     */
    public $dataDiskPolicyEnabled;

    /**
     * @description dataDiskPolicyTimePeriod
     *
     * @var int
     */
    public $dataDiskPolicyTimePeriod;

    /**
     * @description dataDiskPolicyRetentionDays
     *
     * @var int
     */
    public $dataDiskPolicyRetentionDays;

    /**
     * @description dataDiskPolicyRetentionLastWeek
     *
     * @var bool
     */
    public $dataDiskPolicyRetentionLastWeek;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'                           => 'OwnerId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'systemDiskPolicyEnabled'           => 'SystemDiskPolicyEnabled',
        'systemDiskPolicyTimePeriod'        => 'SystemDiskPolicyTimePeriod',
        'systemDiskPolicyRetentionDays'     => 'SystemDiskPolicyRetentionDays',
        'systemDiskPolicyRetentionLastWeek' => 'SystemDiskPolicyRetentionLastWeek',
        'dataDiskPolicyEnabled'             => 'DataDiskPolicyEnabled',
        'dataDiskPolicyTimePeriod'          => 'DataDiskPolicyTimePeriod',
        'dataDiskPolicyRetentionDays'       => 'DataDiskPolicyRetentionDays',
        'dataDiskPolicyRetentionLastWeek'   => 'DataDiskPolicyRetentionLastWeek',
        'ownerAccount'                      => 'OwnerAccount',
    ];

    public function validate()
    {
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
        if (null !== $this->systemDiskPolicyEnabled) {
            $res['SystemDiskPolicyEnabled'] = $this->systemDiskPolicyEnabled;
        }
        if (null !== $this->systemDiskPolicyTimePeriod) {
            $res['SystemDiskPolicyTimePeriod'] = $this->systemDiskPolicyTimePeriod;
        }
        if (null !== $this->systemDiskPolicyRetentionDays) {
            $res['SystemDiskPolicyRetentionDays'] = $this->systemDiskPolicyRetentionDays;
        }
        if (null !== $this->systemDiskPolicyRetentionLastWeek) {
            $res['SystemDiskPolicyRetentionLastWeek'] = $this->systemDiskPolicyRetentionLastWeek;
        }
        if (null !== $this->dataDiskPolicyEnabled) {
            $res['DataDiskPolicyEnabled'] = $this->dataDiskPolicyEnabled;
        }
        if (null !== $this->dataDiskPolicyTimePeriod) {
            $res['DataDiskPolicyTimePeriod'] = $this->dataDiskPolicyTimePeriod;
        }
        if (null !== $this->dataDiskPolicyRetentionDays) {
            $res['DataDiskPolicyRetentionDays'] = $this->dataDiskPolicyRetentionDays;
        }
        if (null !== $this->dataDiskPolicyRetentionLastWeek) {
            $res['DataDiskPolicyRetentionLastWeek'] = $this->dataDiskPolicyRetentionLastWeek;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyRequest
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
        if (isset($map['SystemDiskPolicyEnabled'])) {
            $model->systemDiskPolicyEnabled = $map['SystemDiskPolicyEnabled'];
        }
        if (isset($map['SystemDiskPolicyTimePeriod'])) {
            $model->systemDiskPolicyTimePeriod = $map['SystemDiskPolicyTimePeriod'];
        }
        if (isset($map['SystemDiskPolicyRetentionDays'])) {
            $model->systemDiskPolicyRetentionDays = $map['SystemDiskPolicyRetentionDays'];
        }
        if (isset($map['SystemDiskPolicyRetentionLastWeek'])) {
            $model->systemDiskPolicyRetentionLastWeek = $map['SystemDiskPolicyRetentionLastWeek'];
        }
        if (isset($map['DataDiskPolicyEnabled'])) {
            $model->dataDiskPolicyEnabled = $map['DataDiskPolicyEnabled'];
        }
        if (isset($map['DataDiskPolicyTimePeriod'])) {
            $model->dataDiskPolicyTimePeriod = $map['DataDiskPolicyTimePeriod'];
        }
        if (isset($map['DataDiskPolicyRetentionDays'])) {
            $model->dataDiskPolicyRetentionDays = $map['DataDiskPolicyRetentionDays'];
        }
        if (isset($map['DataDiskPolicyRetentionLastWeek'])) {
            $model->dataDiskPolicyRetentionLastWeek = $map['DataDiskPolicyRetentionLastWeek'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}

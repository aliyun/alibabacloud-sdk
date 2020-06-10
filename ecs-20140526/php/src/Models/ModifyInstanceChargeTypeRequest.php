<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceChargeTypeRequest extends Model
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
     * @description instanceIds
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description period
     *
     * @var int
     */
    public $period;

    /**
     * @description periodUnit
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description includeDataDisks
     *
     * @var bool
     */
    public $includeDataDisks;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description autoPay
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description isDetailRefund
     *
     * @var bool
     */
    public $isDetailFee;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'instanceIds'          => 'InstanceIds',
        'regionId'             => 'RegionId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'includeDataDisks'     => 'IncludeDataDisks',
        'dryRun'               => 'DryRun',
        'autoPay'              => 'AutoPay',
        'instanceChargeType'   => 'InstanceChargeType',
        'clientToken'          => 'ClientToken',
        'ownerAccount'         => 'OwnerAccount',
        'isDetailFee'          => 'IsDetailFee',
    ];

    public function validate()
    {
        Model::validateRequired('instanceIds', $this->instanceIds, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->includeDataDisks) {
            $res['IncludeDataDisks'] = $this->includeDataDisks;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->isDetailFee) {
            $res['IsDetailFee'] = $this->isDetailFee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceChargeTypeRequest
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['IncludeDataDisks'])) {
            $model->includeDataDisks = $map['IncludeDataDisks'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['IsDetailFee'])) {
            $model->isDetailFee = $map['IsDetailFee'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\AllocateDedicatedHostsRequest\tag;
use AlibabaCloud\Tea\Model;

class AllocateDedicatedHostsRequest extends Model
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
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description dedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description hostType
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description actionOnMaintenance
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description NetworkAttributes
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description autoPlacementStrategy
     *
     * @var string
     */
    public $autoPlacement;

    /**
     * @description chargeType
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description quantity
     *
     * @var int
     */
    public $quantity;

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
     * @description autoRenew
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description autoRenewPeriod
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description autoReleaseTime
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'tag'                  => 'Tag',
        'resourceGroupId'      => 'ResourceGroupId',
        'zoneId'               => 'ZoneId',
        'dedicatedHostName'    => 'DedicatedHostName',
        'dedicatedHostType'    => 'DedicatedHostType',
        'actionOnMaintenance'  => 'ActionOnMaintenance',
        'networkAttributes'    => 'NetworkAttributes',
        'description'          => 'Description',
        'autoPlacement'        => 'AutoPlacement',
        'chargeType'           => 'ChargeType',
        'quantity'             => 'Quantity',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'autoRenew'            => 'AutoRenew',
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'autoReleaseTime'      => 'AutoReleaseTime',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('dedicatedHostType', $this->dedicatedHostType, true);
        Model::validateRequired('networkAttributes', $this->networkAttributes, true);
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateDedicatedHostsRequest
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

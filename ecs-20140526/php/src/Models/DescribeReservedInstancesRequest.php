<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeReservedInstancesRequest extends Model
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description instanceIds
     *
     * @var array
     */
    public $reservedInstanceId;

    /**
     * @description riName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description statusStrList
     *
     * @var array
     */
    public $status;

    /**
     * @description lockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description instanceTypeFamily
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description scope
     *
     * @var string
     */
    public $scope;

    /**
     * @description offeringType
     *
     * @var string
     */
    public $offeringType;

    /**
     * @description allocationType
     *
     * @var string
     */
    public $allocationType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'zoneId'               => 'ZoneId',
        'reservedInstanceId'   => 'ReservedInstanceId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'status'               => 'Status',
        'lockReason'           => 'LockReason',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'scope'                => 'Scope',
        'offeringType'         => 'OfferingType',
        'allocationType'       => 'AllocationType',
    ];

    public function validate()
    {
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = [];
            if (null !== $this->reservedInstanceId) {
                $res['ReservedInstanceId'] = $this->reservedInstanceId;
            }
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->status) {
            $res['Status'] = [];
            if (null !== $this->status) {
                $res['Status'] = $this->status;
            }
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->allocationType) {
            $res['AllocationType'] = $this->allocationType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedInstancesRequest
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = [];
                $model->reservedInstanceId = $map['ReservedInstanceId'];
            }
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $model->status = $map['Status'];
            }
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['AllocationType'])) {
            $model->allocationType = $map['AllocationType'];
        }

        return $model;
    }
}

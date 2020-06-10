<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoProvisioningGroupsRequest extends Model
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
     * @description fleetName
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description fleetIds
     *
     * @var array
     */
    public $autoProvisioningGroupId;

    /**
     * @description fleetStatusStrList
     *
     * @var array
     */
    public $autoProvisioningGroupStatus;
    protected $_name = [
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'ownerAccount'                => 'OwnerAccount',
        'regionId'                    => 'RegionId',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'autoProvisioningGroupName'   => 'AutoProvisioningGroupName',
        'autoProvisioningGroupId'     => 'AutoProvisioningGroupId',
        'autoProvisioningGroupStatus' => 'AutoProvisioningGroupStatus',
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
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = [];
            if (null !== $this->autoProvisioningGroupId) {
                $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
            }
        }
        if (null !== $this->autoProvisioningGroupStatus) {
            $res['AutoProvisioningGroupStatus'] = [];
            if (null !== $this->autoProvisioningGroupStatus) {
                $res['AutoProvisioningGroupStatus'] = $this->autoProvisioningGroupStatus;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoProvisioningGroupsRequest
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
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupId'])) {
            if (!empty($map['AutoProvisioningGroupId'])) {
                $model->autoProvisioningGroupId = [];
                $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
            }
        }
        if (isset($map['AutoProvisioningGroupStatus'])) {
            if (!empty($map['AutoProvisioningGroupStatus'])) {
                $model->autoProvisioningGroupStatus = [];
                $model->autoProvisioningGroupStatus = $map['AutoProvisioningGroupStatus'];
            }
        }

        return $model;
    }
}

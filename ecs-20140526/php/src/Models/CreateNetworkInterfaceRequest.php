<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNetworkInterfaceRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateNetworkInterfaceRequest extends Model
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
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description primaryIpAddress
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description securityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description securityGroupIds
     *
     * @var array
     */
    public $securityGroupIds;

    /**
     * @description networkInterfaceName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description visible
     *
     * @var bool
     */
    public $visible;

    /**
     * @description eniType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description businessType
     *
     * @var string
     */
    public $businessType;

    /**
     * @description privateIpAddresses
     *
     * @var array
     */
    public $privateIpAddress;

    /**
     * @description privateIpCount
     *
     * @var int
     */
    public $secondaryPrivateIpAddressCount;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'ownerId'                        => 'OwnerId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'ownerAccount'                   => 'OwnerAccount',
        'regionId'                       => 'RegionId',
        'tag'                            => 'Tag',
        'resourceGroupId'                => 'ResourceGroupId',
        'VSwitchId'                      => 'VSwitchId',
        'primaryIpAddress'               => 'PrimaryIpAddress',
        'securityGroupId'                => 'SecurityGroupId',
        'securityGroupIds'               => 'SecurityGroupIds',
        'networkInterfaceName'           => 'NetworkInterfaceName',
        'description'                    => 'Description',
        'visible'                        => 'Visible',
        'instanceType'                   => 'InstanceType',
        'businessType'                   => 'BusinessType',
        'privateIpAddress'               => 'PrivateIpAddress',
        'secondaryPrivateIpAddressCount' => 'SecondaryPrivateIpAddressCount',
        'clientToken'                    => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
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
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = [];
            if (null !== $this->securityGroupIds) {
                $res['SecurityGroupIds'] = $this->securityGroupIds;
            }
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = [];
            if (null !== $this->privateIpAddress) {
                $res['PrivateIpAddress'] = $this->privateIpAddress;
            }
        }
        if (null !== $this->secondaryPrivateIpAddressCount) {
            $res['SecondaryPrivateIpAddressCount'] = $this->secondaryPrivateIpAddressCount;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkInterfaceRequest
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
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }
        if (isset($map['SecondaryPrivateIpAddressCount'])) {
            $model->secondaryPrivateIpAddressCount = $map['SecondaryPrivateIpAddressCount'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

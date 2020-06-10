<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityGroupPolicyRequest extends Model
{
    /**
     * @description groupNo
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description policy
     *
     * @var string
     */
    public $innerAccessPolicy;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

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
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'securityGroupId'      => 'SecurityGroupId',
        'regionId'             => 'RegionId',
        'innerAccessPolicy'    => 'InnerAccessPolicy',
        'clientToken'          => 'ClientToken',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('innerAccessPolicy', $this->innerAccessPolicy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->innerAccessPolicy) {
            $res['InnerAccessPolicy'] = $this->innerAccessPolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityGroupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InnerAccessPolicy'])) {
            $model->innerAccessPolicy = $map['InnerAccessPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}

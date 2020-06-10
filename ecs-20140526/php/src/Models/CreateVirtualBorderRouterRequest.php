<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualBorderRouterRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description physicalConnectionId
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description vbrOwnerId
     *
     * @var int
     */
    public $vbrOwnerId;

    /**
     * @description vlanId
     *
     * @var int
     */
    public $vlanId;

    /**
     * @description circuitCode
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description localGatewayIp
     *
     * @var string
     */
    public $localGatewayIp;

    /**
     * @description peerGatewayIp
     *
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @description peeringSubnetMask
     *
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description token
     *
     * @var string
     */
    public $clientToken;

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
     * @description userCidr
     *
     * @var string
     */
    public $userCidr;
    protected $_name = [
        'regionId'             => 'RegionId',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'vbrOwnerId'           => 'VbrOwnerId',
        'vlanId'               => 'VlanId',
        'circuitCode'          => 'CircuitCode',
        'localGatewayIp'       => 'LocalGatewayIp',
        'peerGatewayIp'        => 'PeerGatewayIp',
        'peeringSubnetMask'    => 'PeeringSubnetMask',
        'description'          => 'Description',
        'name'                 => 'Name',
        'clientToken'          => 'ClientToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'userCidr'             => 'UserCidr',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('physicalConnectionId', $this->physicalConnectionId, true);
        Model::validateRequired('vlanId', $this->vlanId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->vbrOwnerId) {
            $res['VbrOwnerId'] = $this->vbrOwnerId;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->localGatewayIp) {
            $res['LocalGatewayIp'] = $this->localGatewayIp;
        }
        if (null !== $this->peerGatewayIp) {
            $res['PeerGatewayIp'] = $this->peerGatewayIp;
        }
        if (null !== $this->peeringSubnetMask) {
            $res['PeeringSubnetMask'] = $this->peeringSubnetMask;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->userCidr) {
            $res['UserCidr'] = $this->userCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVirtualBorderRouterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['VbrOwnerId'])) {
            $model->vbrOwnerId = $map['VbrOwnerId'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['LocalGatewayIp'])) {
            $model->localGatewayIp = $map['LocalGatewayIp'];
        }
        if (isset($map['PeerGatewayIp'])) {
            $model->peerGatewayIp = $map['PeerGatewayIp'];
        }
        if (isset($map['PeeringSubnetMask'])) {
            $model->peeringSubnetMask = $map['PeeringSubnetMask'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['UserCidr'])) {
            $model->userCidr = $map['UserCidr'];
        }

        return $model;
    }
}

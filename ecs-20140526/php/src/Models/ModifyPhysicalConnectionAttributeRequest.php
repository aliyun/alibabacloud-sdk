<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyPhysicalConnectionAttributeRequest extends Model
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
     * @description lineOperator
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description bandwidth
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description peerLocation
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description portType
     *
     * @var string
     */
    public $portType;

    /**
     * @description redundantPhysicalConnectionId
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

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

    /**
     * @description circuitCode
     *
     * @var string
     */
    public $circuitCode;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'physicalConnectionId'          => 'PhysicalConnectionId',
        'lineOperator'                  => 'LineOperator',
        'bandwidth'                     => 'bandwidth',
        'peerLocation'                  => 'PeerLocation',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'description'                   => 'Description',
        'name'                          => 'Name',
        'clientToken'                   => 'ClientToken',
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'ownerAccount'                  => 'OwnerAccount',
        'userCidr'                      => 'UserCidr',
        'circuitCode'                   => 'CircuitCode',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('physicalConnectionId', $this->physicalConnectionId, true);
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
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
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
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPhysicalConnectionAttributeRequest
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
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
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
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        return $model;
    }
}

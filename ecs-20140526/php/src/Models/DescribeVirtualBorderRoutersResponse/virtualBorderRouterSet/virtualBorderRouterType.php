<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterType extends Model
{
    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $activationTime;

    /**
     * @var string
     */
    public $terminationTime;

    /**
     * @var string
     */
    public $recoveryTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $vlanId;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $vlanInterfaceId;

    /**
     * @var string
     */
    public $localGatewayIp;

    /**
     * @var string
     */
    public $peerGatewayIp;

    /**
     * @var string
     */
    public $peeringSubnetMask;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $physicalConnectionStatus;

    /**
     * @var string
     */
    public $physicalConnectionBusinessStatus;

    /**
     * @var string
     */
    public $physicalConnectionOwnerUid;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'vbrId'                            => 'VbrId',
        'creationTime'                     => 'CreationTime',
        'activationTime'                   => 'ActivationTime',
        'terminationTime'                  => 'TerminationTime',
        'recoveryTime'                     => 'RecoveryTime',
        'status'                           => 'Status',
        'vlanId'                           => 'VlanId',
        'circuitCode'                      => 'CircuitCode',
        'routeTableId'                     => 'RouteTableId',
        'vlanInterfaceId'                  => 'VlanInterfaceId',
        'localGatewayIp'                   => 'LocalGatewayIp',
        'peerGatewayIp'                    => 'PeerGatewayIp',
        'peeringSubnetMask'                => 'PeeringSubnetMask',
        'physicalConnectionId'             => 'PhysicalConnectionId',
        'physicalConnectionStatus'         => 'PhysicalConnectionStatus',
        'physicalConnectionBusinessStatus' => 'PhysicalConnectionBusinessStatus',
        'physicalConnectionOwnerUid'       => 'PhysicalConnectionOwnerUid',
        'accessPointId'                    => 'AccessPointId',
        'name'                             => 'Name',
        'description'                      => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('vbrId', $this->vbrId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('activationTime', $this->activationTime, true);
        Model::validateRequired('terminationTime', $this->terminationTime, true);
        Model::validateRequired('recoveryTime', $this->recoveryTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vlanId', $this->vlanId, true);
        Model::validateRequired('circuitCode', $this->circuitCode, true);
        Model::validateRequired('routeTableId', $this->routeTableId, true);
        Model::validateRequired('vlanInterfaceId', $this->vlanInterfaceId, true);
        Model::validateRequired('localGatewayIp', $this->localGatewayIp, true);
        Model::validateRequired('peerGatewayIp', $this->peerGatewayIp, true);
        Model::validateRequired('peeringSubnetMask', $this->peeringSubnetMask, true);
        Model::validateRequired('physicalConnectionId', $this->physicalConnectionId, true);
        Model::validateRequired('physicalConnectionStatus', $this->physicalConnectionStatus, true);
        Model::validateRequired('physicalConnectionBusinessStatus', $this->physicalConnectionBusinessStatus, true);
        Model::validateRequired('physicalConnectionOwnerUid', $this->physicalConnectionOwnerUid, true);
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->activationTime) {
            $res['ActivationTime'] = $this->activationTime;
        }
        if (null !== $this->terminationTime) {
            $res['TerminationTime'] = $this->terminationTime;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->vlanInterfaceId) {
            $res['VlanInterfaceId'] = $this->vlanInterfaceId;
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
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->physicalConnectionStatus) {
            $res['PhysicalConnectionStatus'] = $this->physicalConnectionStatus;
        }
        if (null !== $this->physicalConnectionBusinessStatus) {
            $res['PhysicalConnectionBusinessStatus'] = $this->physicalConnectionBusinessStatus;
        }
        if (null !== $this->physicalConnectionOwnerUid) {
            $res['PhysicalConnectionOwnerUid'] = $this->physicalConnectionOwnerUid;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ActivationTime'])) {
            $model->activationTime = $map['ActivationTime'];
        }
        if (isset($map['TerminationTime'])) {
            $model->terminationTime = $map['TerminationTime'];
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['VlanInterfaceId'])) {
            $model->vlanInterfaceId = $map['VlanInterfaceId'];
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
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['PhysicalConnectionStatus'])) {
            $model->physicalConnectionStatus = $map['PhysicalConnectionStatus'];
        }
        if (isset($map['PhysicalConnectionBusinessStatus'])) {
            $model->physicalConnectionBusinessStatus = $map['PhysicalConnectionBusinessStatus'];
        }
        if (isset($map['PhysicalConnectionOwnerUid'])) {
            $model->physicalConnectionOwnerUid = $map['PhysicalConnectionOwnerUid'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}

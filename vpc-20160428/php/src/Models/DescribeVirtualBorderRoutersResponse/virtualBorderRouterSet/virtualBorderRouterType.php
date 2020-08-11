<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet\virtualBorderRouterType\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponse\virtualBorderRouterSet\virtualBorderRouterType\associatedPhysicalConnections;
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

    /**
     * @var string
     */
    public $PConnVbrExpireTime;

    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $minTxInterval;

    /**
     * @var int
     */
    public $minRxInterval;

    /**
     * @var int
     */
    public $detectMultiplier;

    /**
     * @var string
     */
    public $localIpv6GatewayIp;

    /**
     * @var string
     */
    public $peerIpv6GatewayIp;

    /**
     * @var string
     */
    public $peeringIpv6SubnetMask;

    /**
     * @var bool
     */
    public $enableIpv6;

    /**
     * @var associatedPhysicalConnections
     */
    public $associatedPhysicalConnections;

    /**
     * @var associatedCens
     */
    public $associatedCens;
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
        'PConnVbrExpireTime'               => 'PConnVbrExpireTime',
        'eccId'                            => 'EccId',
        'type'                             => 'Type',
        'minTxInterval'                    => 'MinTxInterval',
        'minRxInterval'                    => 'MinRxInterval',
        'detectMultiplier'                 => 'DetectMultiplier',
        'localIpv6GatewayIp'               => 'LocalIpv6GatewayIp',
        'peerIpv6GatewayIp'                => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'            => 'PeeringIpv6SubnetMask',
        'enableIpv6'                       => 'EnableIpv6',
        'associatedPhysicalConnections'    => 'AssociatedPhysicalConnections',
        'associatedCens'                   => 'AssociatedCens',
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
        Model::validateRequired('PConnVbrExpireTime', $this->PConnVbrExpireTime, true);
        Model::validateRequired('eccId', $this->eccId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('minTxInterval', $this->minTxInterval, true);
        Model::validateRequired('minRxInterval', $this->minRxInterval, true);
        Model::validateRequired('detectMultiplier', $this->detectMultiplier, true);
        Model::validateRequired('localIpv6GatewayIp', $this->localIpv6GatewayIp, true);
        Model::validateRequired('peerIpv6GatewayIp', $this->peerIpv6GatewayIp, true);
        Model::validateRequired('peeringIpv6SubnetMask', $this->peeringIpv6SubnetMask, true);
        Model::validateRequired('enableIpv6', $this->enableIpv6, true);
        Model::validateRequired('associatedPhysicalConnections', $this->associatedPhysicalConnections, true);
        Model::validateRequired('associatedCens', $this->associatedCens, true);
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
        if (null !== $this->PConnVbrExpireTime) {
            $res['PConnVbrExpireTime'] = $this->PConnVbrExpireTime;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->minTxInterval) {
            $res['MinTxInterval'] = $this->minTxInterval;
        }
        if (null !== $this->minRxInterval) {
            $res['MinRxInterval'] = $this->minRxInterval;
        }
        if (null !== $this->detectMultiplier) {
            $res['DetectMultiplier'] = $this->detectMultiplier;
        }
        if (null !== $this->localIpv6GatewayIp) {
            $res['LocalIpv6GatewayIp'] = $this->localIpv6GatewayIp;
        }
        if (null !== $this->peerIpv6GatewayIp) {
            $res['PeerIpv6GatewayIp'] = $this->peerIpv6GatewayIp;
        }
        if (null !== $this->peeringIpv6SubnetMask) {
            $res['PeeringIpv6SubnetMask'] = $this->peeringIpv6SubnetMask;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->associatedPhysicalConnections) {
            $res['AssociatedPhysicalConnections'] = null !== $this->associatedPhysicalConnections ? $this->associatedPhysicalConnections->toMap() : null;
        }
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
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
        if (isset($map['PConnVbrExpireTime'])) {
            $model->PConnVbrExpireTime = $map['PConnVbrExpireTime'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MinTxInterval'])) {
            $model->minTxInterval = $map['MinTxInterval'];
        }
        if (isset($map['MinRxInterval'])) {
            $model->minRxInterval = $map['MinRxInterval'];
        }
        if (isset($map['DetectMultiplier'])) {
            $model->detectMultiplier = $map['DetectMultiplier'];
        }
        if (isset($map['LocalIpv6GatewayIp'])) {
            $model->localIpv6GatewayIp = $map['LocalIpv6GatewayIp'];
        }
        if (isset($map['PeerIpv6GatewayIp'])) {
            $model->peerIpv6GatewayIp = $map['PeerIpv6GatewayIp'];
        }
        if (isset($map['PeeringIpv6SubnetMask'])) {
            $model->peeringIpv6SubnetMask = $map['PeeringIpv6SubnetMask'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['AssociatedPhysicalConnections'])) {
            $model->associatedPhysicalConnections = associatedPhysicalConnections::fromMap($map['AssociatedPhysicalConnections']);
        }
        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }

        return $model;
    }
}

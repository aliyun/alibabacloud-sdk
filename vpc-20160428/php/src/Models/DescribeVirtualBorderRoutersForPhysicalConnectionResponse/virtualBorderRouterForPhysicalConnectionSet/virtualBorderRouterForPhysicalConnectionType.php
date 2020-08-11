<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse\virtualBorderRouterForPhysicalConnectionSet;

use AlibabaCloud\Tea\Model;

class virtualBorderRouterForPhysicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $vbrId;

    /**
     * @var int
     */
    public $vbrOwnerUid;

    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $type;

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
     * @var int
     */
    public $vlanId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $circuitCode;

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
    public $PConnVbrChargeType;

    /**
     * @var string
     */
    public $PConnVbrExpireTime;

    /**
     * @var string
     */
    public $PConnVbrBussinessStatus;

    /**
     * @var string
     */
    public $bandwidth;

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
    protected $_name = [
        'vbrId'                   => 'VbrId',
        'vbrOwnerUid'             => 'VbrOwnerUid',
        'eccId'                   => 'EccId',
        'type'                    => 'Type',
        'creationTime'            => 'CreationTime',
        'activationTime'          => 'ActivationTime',
        'terminationTime'         => 'TerminationTime',
        'recoveryTime'            => 'RecoveryTime',
        'vlanId'                  => 'VlanId',
        'status'                  => 'Status',
        'circuitCode'             => 'CircuitCode',
        'localGatewayIp'          => 'LocalGatewayIp',
        'peerGatewayIp'           => 'PeerGatewayIp',
        'peeringSubnetMask'       => 'PeeringSubnetMask',
        'PConnVbrChargeType'      => 'PConnVbrChargeType',
        'PConnVbrExpireTime'      => 'PConnVbrExpireTime',
        'PConnVbrBussinessStatus' => 'PConnVbrBussinessStatus',
        'bandwidth'               => 'Bandwidth',
        'localIpv6GatewayIp'      => 'LocalIpv6GatewayIp',
        'peerIpv6GatewayIp'       => 'PeerIpv6GatewayIp',
        'peeringIpv6SubnetMask'   => 'PeeringIpv6SubnetMask',
        'enableIpv6'              => 'EnableIpv6',
    ];

    public function validate()
    {
        Model::validateRequired('vbrId', $this->vbrId, true);
        Model::validateRequired('vbrOwnerUid', $this->vbrOwnerUid, true);
        Model::validateRequired('eccId', $this->eccId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('activationTime', $this->activationTime, true);
        Model::validateRequired('terminationTime', $this->terminationTime, true);
        Model::validateRequired('recoveryTime', $this->recoveryTime, true);
        Model::validateRequired('vlanId', $this->vlanId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('circuitCode', $this->circuitCode, true);
        Model::validateRequired('localGatewayIp', $this->localGatewayIp, true);
        Model::validateRequired('peerGatewayIp', $this->peerGatewayIp, true);
        Model::validateRequired('peeringSubnetMask', $this->peeringSubnetMask, true);
        Model::validateRequired('PConnVbrChargeType', $this->PConnVbrChargeType, true);
        Model::validateRequired('PConnVbrExpireTime', $this->PConnVbrExpireTime, true);
        Model::validateRequired('PConnVbrBussinessStatus', $this->PConnVbrBussinessStatus, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('localIpv6GatewayIp', $this->localIpv6GatewayIp, true);
        Model::validateRequired('peerIpv6GatewayIp', $this->peerIpv6GatewayIp, true);
        Model::validateRequired('peeringIpv6SubnetMask', $this->peeringIpv6SubnetMask, true);
        Model::validateRequired('enableIpv6', $this->enableIpv6, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vbrId) {
            $res['VbrId'] = $this->vbrId;
        }
        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->PConnVbrChargeType) {
            $res['PConnVbrChargeType'] = $this->PConnVbrChargeType;
        }
        if (null !== $this->PConnVbrExpireTime) {
            $res['PConnVbrExpireTime'] = $this->PConnVbrExpireTime;
        }
        if (null !== $this->PConnVbrBussinessStatus) {
            $res['PConnVbrBussinessStatus'] = $this->PConnVbrBussinessStatus;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualBorderRouterForPhysicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VbrId'])) {
            $model->vbrId = $map['VbrId'];
        }
        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['PConnVbrChargeType'])) {
            $model->PConnVbrChargeType = $map['PConnVbrChargeType'];
        }
        if (isset($map['PConnVbrExpireTime'])) {
            $model->PConnVbrExpireTime = $map['PConnVbrExpireTime'];
        }
        if (isset($map['PConnVbrBussinessStatus'])) {
            $model->PConnVbrBussinessStatus = $map['PConnVbrBussinessStatus'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
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

        return $model;
    }
}

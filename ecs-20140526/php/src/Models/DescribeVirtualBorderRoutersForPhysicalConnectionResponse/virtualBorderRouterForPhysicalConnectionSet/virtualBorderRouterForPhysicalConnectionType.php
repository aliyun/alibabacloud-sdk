<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponse\virtualBorderRouterForPhysicalConnectionSet;

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
    public $circuitCode;
    protected $_name = [
        'vbrId'           => 'VbrId',
        'vbrOwnerUid'     => 'VbrOwnerUid',
        'creationTime'    => 'CreationTime',
        'activationTime'  => 'ActivationTime',
        'terminationTime' => 'TerminationTime',
        'recoveryTime'    => 'RecoveryTime',
        'vlanId'          => 'VlanId',
        'circuitCode'     => 'CircuitCode',
    ];

    public function validate()
    {
        Model::validateRequired('vbrId', $this->vbrId, true);
        Model::validateRequired('vbrOwnerUid', $this->vbrOwnerUid, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('activationTime', $this->activationTime, true);
        Model::validateRequired('terminationTime', $this->terminationTime, true);
        Model::validateRequired('recoveryTime', $this->recoveryTime, true);
        Model::validateRequired('vlanId', $this->vlanId, true);
        Model::validateRequired('circuitCode', $this->circuitCode, true);
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
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
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
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }

        return $model;
    }
}

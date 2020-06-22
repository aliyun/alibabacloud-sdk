<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse\data\redeem;

use AlibabaCloud\Tea\Model;

class redeem extends Model
{
    /**
     * @description redeemId
     *
     * @var string
     */
    public $redeemId;

    /**
     * @description redeemNo
     *
     * @var string
     */
    public $redeemNo;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description grantedTime
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @description effectiveTime
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description expiryTime
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @description nominalValue
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @description balance
     *
     * @var string
     */
    public $balance;

    /**
     * @description applicableProducts
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description specification
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'redeemId'           => 'RedeemId',
        'redeemNo'           => 'RedeemNo',
        'status'             => 'Status',
        'grantedTime'        => 'GrantedTime',
        'effectiveTime'      => 'EffectiveTime',
        'expiryTime'         => 'ExpiryTime',
        'nominalValue'       => 'NominalValue',
        'balance'            => 'Balance',
        'applicableProducts' => 'ApplicableProducts',
        'specification'      => 'Specification',
    ];

    public function validate()
    {
        Model::validateRequired('redeemId', $this->redeemId, true);
        Model::validateRequired('redeemNo', $this->redeemNo, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('grantedTime', $this->grantedTime, true);
        Model::validateRequired('effectiveTime', $this->effectiveTime, true);
        Model::validateRequired('expiryTime', $this->expiryTime, true);
        Model::validateRequired('nominalValue', $this->nominalValue, true);
        Model::validateRequired('balance', $this->balance, true);
        Model::validateRequired('applicableProducts', $this->applicableProducts, true);
        Model::validateRequired('specification', $this->specification, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->redeemId) {
            $res['RedeemId'] = $this->redeemId;
        }
        if (null !== $this->redeemNo) {
            $res['RedeemNo'] = $this->redeemNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->grantedTime) {
            $res['GrantedTime'] = $this->grantedTime;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redeem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RedeemId'])) {
            $model->redeemId = $map['RedeemId'];
        }
        if (isset($map['RedeemNo'])) {
            $model->redeemNo = $map['RedeemNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GrantedTime'])) {
            $model->grantedTime = $map['GrantedTime'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}

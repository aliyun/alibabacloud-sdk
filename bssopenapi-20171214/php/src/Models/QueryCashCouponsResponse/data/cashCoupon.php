<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponse\data;

use AlibabaCloud\Tea\Model;

class cashCoupon extends Model
{
    /**
     * @description cashCouponId
     *
     * @var int
     */
    public $cashCouponId;

    /**
     * @description cashCouponNo
     *
     * @var string
     */
    public $cashCouponNo;

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
     * @description applicableProducts
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description applicableScenarios
     *
     * @var string
     */
    public $applicableScenarios;

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
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cashCouponId'        => 'CashCouponId',
        'cashCouponNo'        => 'CashCouponNo',
        'grantedTime'         => 'GrantedTime',
        'effectiveTime'       => 'EffectiveTime',
        'expiryTime'          => 'ExpiryTime',
        'applicableProducts'  => 'ApplicableProducts',
        'applicableScenarios' => 'ApplicableScenarios',
        'nominalValue'        => 'NominalValue',
        'balance'             => 'Balance',
        'status'              => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('cashCouponId', $this->cashCouponId, true);
        Model::validateRequired('cashCouponNo', $this->cashCouponNo, true);
        Model::validateRequired('grantedTime', $this->grantedTime, true);
        Model::validateRequired('effectiveTime', $this->effectiveTime, true);
        Model::validateRequired('expiryTime', $this->expiryTime, true);
        Model::validateRequired('applicableProducts', $this->applicableProducts, true);
        Model::validateRequired('applicableScenarios', $this->applicableScenarios, true);
        Model::validateRequired('nominalValue', $this->nominalValue, true);
        Model::validateRequired('balance', $this->balance, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cashCouponId) {
            $res['CashCouponId'] = $this->cashCouponId;
        }
        if (null !== $this->cashCouponNo) {
            $res['CashCouponNo'] = $this->cashCouponNo;
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
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->applicableScenarios) {
            $res['ApplicableScenarios'] = $this->applicableScenarios;
        }
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cashCoupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CashCouponId'])) {
            $model->cashCouponId = $map['CashCouponId'];
        }
        if (isset($map['CashCouponNo'])) {
            $model->cashCouponNo = $map['CashCouponNo'];
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['ApplicableScenarios'])) {
            $model->applicableScenarios = $map['ApplicableScenarios'];
        }
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

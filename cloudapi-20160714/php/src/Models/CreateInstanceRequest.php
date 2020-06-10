<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description chargeType
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description instanceSpec
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description httpsPolicy
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description pricingCycle
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description autoPay
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description token
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'chargeType'   => 'ChargeType',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'zoneId'       => 'ZoneId',
        'httpsPolicy'  => 'HttpsPolicy',
        'duration'     => 'Duration',
        'pricingCycle' => 'PricingCycle',
        'autoPay'      => 'AutoPay',
        'token'        => 'Token',
    ];

    public function validate()
    {
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('token', $this->token, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

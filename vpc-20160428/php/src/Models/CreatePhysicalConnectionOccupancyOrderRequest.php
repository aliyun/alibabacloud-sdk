<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionOccupancyOrderRequest extends Model
{
    /**
     * @description description: The ID of the region where the leased line is deployed.;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: The instance ID of the physical connection interface.;
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description description: Optional. The validity period of a Subscription.;
     *
     * @var int
     */
    public $period;

    /**
     * @description description: Optional. The billing method of the instance. Valid values:* PrePaid: Subscription. If you select this value, you must make sure that your account has enough available funds.* PostPaid (default value): Pay-As-You-Go;
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description description: Optional. Indicates whether to pay automatically. Valid values:* true (default value): Pay automatically. If you select this value, you must ensure that your account has enough available funds. Otherwise, the order that is generated is invalid.* false: Generates the order only. No fee is deducted from your account.;
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description description: Optional. The Subscription cycle. Valid values:* Month* Year;
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description description: Optional. The token used for client authentication.;
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'             => 'RegionId',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'period'               => 'Period',
        'instanceChargeType'   => 'InstanceChargeType',
        'autoPay'              => 'AutoPay',
        'pricingCycle'         => 'PricingCycle',
        'clientToken'          => 'ClientToken',
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
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalConnectionOccupancyOrderRequest
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
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

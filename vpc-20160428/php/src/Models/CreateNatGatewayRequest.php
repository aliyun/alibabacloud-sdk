<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest\bandwidthPackage;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

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
    public $clientToken;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var array
     */
    public $bandwidthPackage;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $natType;

    /**
     * @var string
     */
    public $internetChargeType;
    protected $_name = [
        'regionId'           => 'RegionId',
        'vpcId'              => 'VpcId',
        'name'               => 'Name',
        'description'        => 'Description',
        'clientToken'        => 'ClientToken',
        'spec'               => 'Spec',
        'bandwidthPackage'   => 'BandwidthPackage',
        'instanceChargeType' => 'InstanceChargeType',
        'pricingCycle'       => 'PricingCycle',
        'duration'           => 'Duration',
        'autoPay'            => 'AutoPay',
        'vSwitchId'          => 'VSwitchId',
        'natType'            => 'NatType',
        'internetChargeType' => 'InternetChargeType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = [];
            if (null !== $this->bandwidthPackage && \is_array($this->bandwidthPackage)) {
                $n = 0;
                foreach ($this->bandwidthPackage as $item) {
                    $res['BandwidthPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['BandwidthPackage'])) {
            if (!empty($map['BandwidthPackage'])) {
                $model->bandwidthPackage = [];
                $n                       = 0;
                foreach ($map['BandwidthPackage'] as $item) {
                    $model->bandwidthPackage[$n++] = null !== $item ? bandwidthPackage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        return $model;
    }
}

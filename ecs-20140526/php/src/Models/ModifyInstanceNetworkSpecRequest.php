<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceNetworkSpecRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var string
     */
    public $networkChargeType;

    /**
     * @var bool
     */
    public $allocatePublicIp;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'networkChargeType'       => 'NetworkChargeType',
        'allocatePublicIp'        => 'AllocatePublicIp',
        'startTime'               => 'StartTime',
        'endTime'                 => 'EndTime',
        'autoPay'                 => 'AutoPay',
        'clientToken'             => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->networkChargeType) {
            $res['NetworkChargeType'] = $this->networkChargeType;
        }
        if (null !== $this->allocatePublicIp) {
            $res['AllocatePublicIp'] = $this->allocatePublicIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceNetworkSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['NetworkChargeType'])) {
            $model->networkChargeType = $map['NetworkChargeType'];
        }
        if (isset($map['AllocatePublicIp'])) {
            $model->allocatePublicIp = $map['AllocatePublicIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}

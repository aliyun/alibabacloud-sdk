<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponse\demands\demand\supplyInfos;
use AlibabaCloud\Tea\Model;

class demand extends Model
{
    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description demandTime
     *
     * @var string
     */
    public $demandTime;

    /**
     * @description instanceTypeFamily
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description demandId
     *
     * @var string
     */
    public $demandId;

    /**
     * @description demandName
     *
     * @var string
     */
    public $demandName;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description demandDescription
     *
     * @var string
     */
    public $demandDescription;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description payDuration
     *
     * @var int
     */
    public $period;

    /**
     * @description payUnit
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description demandStatus
     *
     * @var string
     */
    public $demandStatus;

    /**
     * @description totalAmount
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @description availableAmount
     *
     * @var int
     */
    public $availableAmount;

    /**
     * @description usedAmount
     *
     * @var int
     */
    public $usedAmount;

    /**
     * @description deliveringAmount
     *
     * @var int
     */
    public $deliveringAmount;

    /**
     * @description demandSupplyList
     *
     * @var supplyInfos
     */
    public $supplyInfos;
    protected $_name = [
        'zoneId'             => 'ZoneId',
        'demandTime'         => 'DemandTime',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'demandId'           => 'DemandId',
        'demandName'         => 'DemandName',
        'comment'            => 'Comment',
        'demandDescription'  => 'DemandDescription',
        'instanceType'       => 'InstanceType',
        'instanceChargeType' => 'InstanceChargeType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'startTime'          => 'StartTime',
        'endTime'            => 'EndTime',
        'demandStatus'       => 'DemandStatus',
        'totalAmount'        => 'TotalAmount',
        'availableAmount'    => 'AvailableAmount',
        'usedAmount'         => 'UsedAmount',
        'deliveringAmount'   => 'DeliveringAmount',
        'supplyInfos'        => 'SupplyInfos',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('demandTime', $this->demandTime, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('demandId', $this->demandId, true);
        Model::validateRequired('demandName', $this->demandName, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('demandDescription', $this->demandDescription, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('period', $this->period, true);
        Model::validateRequired('periodUnit', $this->periodUnit, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('demandStatus', $this->demandStatus, true);
        Model::validateRequired('totalAmount', $this->totalAmount, true);
        Model::validateRequired('availableAmount', $this->availableAmount, true);
        Model::validateRequired('usedAmount', $this->usedAmount, true);
        Model::validateRequired('deliveringAmount', $this->deliveringAmount, true);
        Model::validateRequired('supplyInfos', $this->supplyInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->demandTime) {
            $res['DemandTime'] = $this->demandTime;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->demandName) {
            $res['DemandName'] = $this->demandName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->demandDescription) {
            $res['DemandDescription'] = $this->demandDescription;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->demandStatus) {
            $res['DemandStatus'] = $this->demandStatus;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->deliveringAmount) {
            $res['DeliveringAmount'] = $this->deliveringAmount;
        }
        if (null !== $this->supplyInfos) {
            $res['SupplyInfos'] = null !== $this->supplyInfos ? $this->supplyInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DemandTime'])) {
            $model->demandTime = $map['DemandTime'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['DemandName'])) {
            $model->demandName = $map['DemandName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DemandDescription'])) {
            $model->demandDescription = $map['DemandDescription'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['DemandStatus'])) {
            $model->demandStatus = $map['DemandStatus'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['DeliveringAmount'])) {
            $model->deliveringAmount = $map['DeliveringAmount'];
        }
        if (isset($map['SupplyInfos'])) {
            $model->supplyInfos = supplyInfos::fromMap($map['SupplyInfos']);
        }

        return $model;
    }
}

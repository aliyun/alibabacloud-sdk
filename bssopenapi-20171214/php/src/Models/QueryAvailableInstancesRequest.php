<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAvailableInstancesRequest extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description productType
     *
     * @var string
     */
    public $productType;

    /**
     * @description subscriptionType
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @description instanceIDs
     *
     * @var string
     */
    public $instanceIDs;

    /**
     * @description endTimeStart
     *
     * @var string
     */
    public $endTimeStart;

    /**
     * @description endTimeEnd
     *
     * @var string
     */
    public $endTimeEnd;

    /**
     * @description createTimeStart
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description createTimeEnd
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description renewStatus
     *
     * @var string
     */
    public $renewStatus;
    protected $_name = [
        'region'           => 'Region',
        'pageNum'          => 'PageNum',
        'pageSize'         => 'PageSize',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
        'instanceIDs'      => 'InstanceIDs',
        'endTimeStart'     => 'EndTimeStart',
        'endTimeEnd'       => 'EndTimeEnd',
        'createTimeStart'  => 'CreateTimeStart',
        'createTimeEnd'    => 'CreateTimeEnd',
        'renewStatus'      => 'RenewStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->instanceIDs) {
            $res['InstanceIDs'] = $this->instanceIDs;
        }
        if (null !== $this->endTimeStart) {
            $res['EndTimeStart'] = $this->endTimeStart;
        }
        if (null !== $this->endTimeEnd) {
            $res['EndTimeEnd'] = $this->endTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAvailableInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['InstanceIDs'])) {
            $model->instanceIDs = $map['InstanceIDs'];
        }
        if (isset($map['EndTimeStart'])) {
            $model->endTimeStart = $map['EndTimeStart'];
        }
        if (isset($map['EndTimeEnd'])) {
            $model->endTimeEnd = $map['EndTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponse\purchasedApiGroupAttributes;

use AlibabaCloud\Tea\Model;

class purchasedApiGroupAttribute extends Model
{
    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description groupDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $purchasedTime;

    /**
     * @description gmtExpire
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description billingType
     *
     * @var string
     */
    public $billingType;

    /**
     * @description invokeTimesMax
     *
     * @var int
     */
    public $invokeTimesMax;

    /**
     * @description invokeTimesNow
     *
     * @var int
     */
    public $invokeTimesNow;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'description'    => 'Description',
        'purchasedTime'  => 'PurchasedTime',
        'expireTime'     => 'ExpireTime',
        'regionId'       => 'RegionId',
        'billingType'    => 'BillingType',
        'invokeTimesMax' => 'InvokeTimesMax',
        'invokeTimesNow' => 'InvokeTimesNow',
        'status'         => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('purchasedTime', $this->purchasedTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('billingType', $this->billingType, true);
        Model::validateRequired('invokeTimesMax', $this->invokeTimesMax, true);
        Model::validateRequired('invokeTimesNow', $this->invokeTimesNow, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->invokeTimesMax) {
            $res['InvokeTimesMax'] = $this->invokeTimesMax;
        }
        if (null !== $this->invokeTimesNow) {
            $res['InvokeTimesNow'] = $this->invokeTimesNow;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedApiGroupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['InvokeTimesMax'])) {
            $model->invokeTimesMax = $map['InvokeTimesMax'];
        }
        if (isset($map['InvokeTimesNow'])) {
            $model->invokeTimesNow = $map['InvokeTimesNow'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupsResponse\apiGroupAttributes;

use AlibabaCloud\Tea\Model;

class apiGroupAttribute extends Model
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
     * @description subDomain
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description trafficLimit
     *
     * @var int
     */
    public $trafficLimit;

    /**
     * @description billingStatus
     *
     * @var string
     */
    public $billingStatus;

    /**
     * @description illegalStatus
     *
     * @var string
     */
    public $illegalStatus;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description httpsPolicy
     *
     * @var string
     */
    public $httpsPolicy;
    protected $_name = [
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'subDomain'     => 'SubDomain',
        'description'   => 'Description',
        'createdTime'   => 'CreatedTime',
        'modifiedTime'  => 'ModifiedTime',
        'regionId'      => 'RegionId',
        'trafficLimit'  => 'TrafficLimit',
        'billingStatus' => 'BillingStatus',
        'illegalStatus' => 'IllegalStatus',
        'instanceId'    => 'InstanceId',
        'instanceType'  => 'InstanceType',
        'httpsPolicy'   => 'HttpsPolicy',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('trafficLimit', $this->trafficLimit, true);
        Model::validateRequired('billingStatus', $this->billingStatus, true);
        Model::validateRequired('illegalStatus', $this->illegalStatus, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('httpsPolicy', $this->httpsPolicy, true);
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
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }
        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiGroupAttribute
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
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }
        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }

        return $model;
    }
}

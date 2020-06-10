<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse\customDomains;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponse\stageItems;
use AlibabaCloud\Tea\Model;

class DescribeApiGroupResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description data.subDomain
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description data.gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.status
     *
     * @var string
     */
    public $status;

    /**
     * @description data.billingStatus
     *
     * @var string
     */
    public $billingStatus;

    /**
     * @description data.illegalStatus
     *
     * @var string
     */
    public $illegalStatus;

    /**
     * @description data.ipv6Status
     *
     * @var string
     */
    public $ipv6Status;

    /**
     * @description data.trafficLimit
     *
     * @var int
     */
    public $trafficLimit;

    /**
     * @description data.vpcSubDomain
     *
     * @var string
     */
    public $vpcDomain;

    /**
     * @description data.instanceType
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description data.instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description data.instanceVipList
     *
     * @var string
     */
    public $instanceVipList;

    /**
     * @description data.httpsPolicy
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @description data.userLogConfig
     *
     * @var string
     */
    public $userLogConfig;

    /**
     * @description data.customTraceConfig
     *
     * @var string
     */
    public $customTraceConfig;

    /**
     * @description data.passthroughHeaders
     *
     * @var string
     */
    public $passthroughHeaders;

    /**
     * @description data.rpcPattern
     *
     * @var string
     */
    public $rpcPattern;

    /**
     * @description data.compatibleFlags
     *
     * @var string
     */
    public $compatibleFlags;

    /**
     * @description data.classicVpcSubDomain
     *
     * @var string
     */
    public $classicVpcSubDomain;

    /**
     * @description data.customDomains
     *
     * @var customDomains
     */
    public $customDomains;

    /**
     * @description data.stages
     *
     * @var stageItems
     */
    public $stageItems;
    protected $_name = [
        'requestId'           => 'RequestId',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'subDomain'           => 'SubDomain',
        'description'         => 'Description',
        'createdTime'         => 'CreatedTime',
        'modifiedTime'        => 'ModifiedTime',
        'regionId'            => 'RegionId',
        'status'              => 'Status',
        'billingStatus'       => 'BillingStatus',
        'illegalStatus'       => 'IllegalStatus',
        'ipv6Status'          => 'Ipv6Status',
        'trafficLimit'        => 'TrafficLimit',
        'vpcDomain'           => 'VpcDomain',
        'instanceType'        => 'InstanceType',
        'instanceId'          => 'InstanceId',
        'instanceVipList'     => 'InstanceVipList',
        'httpsPolicy'         => 'HttpsPolicy',
        'userLogConfig'       => 'UserLogConfig',
        'customTraceConfig'   => 'CustomTraceConfig',
        'passthroughHeaders'  => 'PassthroughHeaders',
        'rpcPattern'          => 'RpcPattern',
        'compatibleFlags'     => 'CompatibleFlags',
        'classicVpcSubDomain' => 'ClassicVpcSubDomain',
        'customDomains'       => 'CustomDomains',
        'stageItems'          => 'StageItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('billingStatus', $this->billingStatus, true);
        Model::validateRequired('illegalStatus', $this->illegalStatus, true);
        Model::validateRequired('ipv6Status', $this->ipv6Status, true);
        Model::validateRequired('trafficLimit', $this->trafficLimit, true);
        Model::validateRequired('vpcDomain', $this->vpcDomain, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceVipList', $this->instanceVipList, true);
        Model::validateRequired('httpsPolicy', $this->httpsPolicy, true);
        Model::validateRequired('userLogConfig', $this->userLogConfig, true);
        Model::validateRequired('customTraceConfig', $this->customTraceConfig, true);
        Model::validateRequired('passthroughHeaders', $this->passthroughHeaders, true);
        Model::validateRequired('rpcPattern', $this->rpcPattern, true);
        Model::validateRequired('compatibleFlags', $this->compatibleFlags, true);
        Model::validateRequired('classicVpcSubDomain', $this->classicVpcSubDomain, true);
        Model::validateRequired('customDomains', $this->customDomains, true);
        Model::validateRequired('stageItems', $this->stageItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }
        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }
        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }
        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }
        if (null !== $this->vpcDomain) {
            $res['VpcDomain'] = $this->vpcDomain;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceVipList) {
            $res['InstanceVipList'] = $this->instanceVipList;
        }
        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }
        if (null !== $this->userLogConfig) {
            $res['UserLogConfig'] = $this->userLogConfig;
        }
        if (null !== $this->customTraceConfig) {
            $res['CustomTraceConfig'] = $this->customTraceConfig;
        }
        if (null !== $this->passthroughHeaders) {
            $res['PassthroughHeaders'] = $this->passthroughHeaders;
        }
        if (null !== $this->rpcPattern) {
            $res['RpcPattern'] = $this->rpcPattern;
        }
        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }
        if (null !== $this->classicVpcSubDomain) {
            $res['ClassicVpcSubDomain'] = $this->classicVpcSubDomain;
        }
        if (null !== $this->customDomains) {
            $res['CustomDomains'] = null !== $this->customDomains ? $this->customDomains->toMap() : null;
        }
        if (null !== $this->stageItems) {
            $res['StageItems'] = null !== $this->stageItems ? $this->stageItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }
        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }
        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }
        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }
        if (isset($map['VpcDomain'])) {
            $model->vpcDomain = $map['VpcDomain'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceVipList'])) {
            $model->instanceVipList = $map['InstanceVipList'];
        }
        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }
        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }
        if (isset($map['CustomTraceConfig'])) {
            $model->customTraceConfig = $map['CustomTraceConfig'];
        }
        if (isset($map['PassthroughHeaders'])) {
            $model->passthroughHeaders = $map['PassthroughHeaders'];
        }
        if (isset($map['RpcPattern'])) {
            $model->rpcPattern = $map['RpcPattern'];
        }
        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }
        if (isset($map['ClassicVpcSubDomain'])) {
            $model->classicVpcSubDomain = $map['ClassicVpcSubDomain'];
        }
        if (isset($map['CustomDomains'])) {
            $model->customDomains = customDomains::fromMap($map['CustomDomains']);
        }
        if (isset($map['StageItems'])) {
            $model->stageItems = stageItems::fromMap($map['StageItems']);
        }

        return $model;
    }
}

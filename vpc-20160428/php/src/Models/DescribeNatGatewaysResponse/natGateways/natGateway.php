<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\bandwidthPackageIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\ipLists;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\natGatewayPrivateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\snatTableIds;
use AlibabaCloud\Tea\Model;

class natGateway extends Model
{
    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $regionId;

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
    public $vpcId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $natType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @var ipLists
     */
    public $ipLists;

    /**
     * @var natGatewayPrivateInfo
     */
    public $natGatewayPrivateInfo;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @var bandwidthPackageIds
     */
    public $bandwidthPackageIds;
    protected $_name = [
        'natGatewayId'          => 'NatGatewayId',
        'regionId'              => 'RegionId',
        'name'                  => 'Name',
        'description'           => 'Description',
        'vpcId'                 => 'VpcId',
        'spec'                  => 'Spec',
        'instanceChargeType'    => 'InstanceChargeType',
        'expiredTime'           => 'ExpiredTime',
        'autoPay'               => 'AutoPay',
        'businessStatus'        => 'BusinessStatus',
        'creationTime'          => 'CreationTime',
        'status'                => 'Status',
        'natType'               => 'NatType',
        'internetChargeType'    => 'InternetChargeType',
        'resourceGroupId'       => 'ResourceGroupId',
        'deletionProtection'    => 'DeletionProtection',
        'ecsMetricEnabled'      => 'EcsMetricEnabled',
        'ipLists'               => 'IpLists',
        'natGatewayPrivateInfo' => 'NatGatewayPrivateInfo',
        'forwardTableIds'       => 'ForwardTableIds',
        'snatTableIds'          => 'SnatTableIds',
        'bandwidthPackageIds'   => 'BandwidthPackageIds',
    ];

    public function validate()
    {
        Model::validateRequired('natGatewayId', $this->natGatewayId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('autoPay', $this->autoPay, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('natType', $this->natType, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('deletionProtection', $this->deletionProtection, true);
        Model::validateRequired('ecsMetricEnabled', $this->ecsMetricEnabled, true);
        Model::validateRequired('ipLists', $this->ipLists, true);
        Model::validateRequired('natGatewayPrivateInfo', $this->natGatewayPrivateInfo, true);
        Model::validateRequired('forwardTableIds', $this->forwardTableIds, true);
        Model::validateRequired('snatTableIds', $this->snatTableIds, true);
        Model::validateRequired('bandwidthPackageIds', $this->bandwidthPackageIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }
        if (null !== $this->ipLists) {
            $res['IpLists'] = null !== $this->ipLists ? $this->ipLists->toMap() : null;
        }
        if (null !== $this->natGatewayPrivateInfo) {
            $res['NatGatewayPrivateInfo'] = null !== $this->natGatewayPrivateInfo ? $this->natGatewayPrivateInfo->toMap() : null;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = null !== $this->bandwidthPackageIds ? $this->bandwidthPackageIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }
        if (isset($map['IpLists'])) {
            $model->ipLists = ipLists::fromMap($map['IpLists']);
        }
        if (isset($map['NatGatewayPrivateInfo'])) {
            $model->natGatewayPrivateInfo = natGatewayPrivateInfo::fromMap($map['NatGatewayPrivateInfo']);
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }
        if (isset($map['BandwidthPackageIds'])) {
            $model->bandwidthPackageIds = bandwidthPackageIds::fromMap($map['BandwidthPackageIds']);
        }

        return $model;
    }
}

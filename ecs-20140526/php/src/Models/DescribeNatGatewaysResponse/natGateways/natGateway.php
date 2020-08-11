<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse\natGateways;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse\natGateways\natGateway\bandwidthPackageIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeNatGatewaysResponse\natGateways\natGateway\forwardTableIds;
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
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var bandwidthPackageIds
     */
    public $bandwidthPackageIds;
    protected $_name = [
        'natGatewayId'        => 'NatGatewayId',
        'regionId'            => 'RegionId',
        'name'                => 'Name',
        'description'         => 'Description',
        'vpcId'               => 'VpcId',
        'spec'                => 'Spec',
        'instanceChargeType'  => 'InstanceChargeType',
        'businessStatus'      => 'BusinessStatus',
        'creationTime'        => 'CreationTime',
        'status'              => 'Status',
        'forwardTableIds'     => 'ForwardTableIds',
        'bandwidthPackageIds' => 'BandwidthPackageIds',
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
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('forwardTableIds', $this->forwardTableIds, true);
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
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
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
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['BandwidthPackageIds'])) {
            $model->bandwidthPackageIds = bandwidthPackageIds::fromMap($map['BandwidthPackageIds']);
        }

        return $model;
    }
}

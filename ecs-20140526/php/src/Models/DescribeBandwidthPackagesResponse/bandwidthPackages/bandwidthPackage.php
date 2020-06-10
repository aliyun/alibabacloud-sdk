<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse\bandwidthPackages;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse\bandwidthPackages\bandwidthPackage\publicIpAddresses;
use AlibabaCloud\Tea\Model;

class bandwidthPackage extends Model
{
    /**
     * @description bandwidthPackageId
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description gatewayId
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description bandwidth
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description instanceChargeType
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description internetChargeType
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description businessStatus
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description ipCount
     *
     * @var string
     */
    public $ipCount;

    /**
     * @description isp
     *
     * @var string
     */
    public $ISP;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description publicIpAddresses
     *
     * @var publicIpAddresses
     */
    public $publicIpAddresses;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'regionId'           => 'RegionId',
        'name'               => 'Name',
        'description'        => 'Description',
        'zoneId'             => 'ZoneId',
        'natGatewayId'       => 'NatGatewayId',
        'bandwidth'          => 'Bandwidth',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'businessStatus'     => 'BusinessStatus',
        'ipCount'            => 'IpCount',
        'ISP'                => 'ISP',
        'creationTime'       => 'CreationTime',
        'status'             => 'Status',
        'publicIpAddresses'  => 'PublicIpAddresses',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('natGatewayId', $this->natGatewayId, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('ipCount', $this->ipCount, true);
        Model::validateRequired('ISP', $this->ISP, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('publicIpAddresses', $this->publicIpAddresses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }

        return $model;
    }
}

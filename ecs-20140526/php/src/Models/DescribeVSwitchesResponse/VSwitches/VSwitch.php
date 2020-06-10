<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVSwitchesResponse\VSwitches;

use AlibabaCloud\Tea\Model;

class VSwitch extends Model
{
    /**
     * @description vSwitch.instanceId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description vSwitch.vpcInstanceId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vSwitch.status
     *
     * @var string
     */
    public $status;

    /**
     * @description vSwitch.cidrBlock
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description vSwitch.izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description vSwitch.availabeIpCount
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @description vSwitch.description
     *
     * @var string
     */
    public $description;

    /**
     * @description vSwitch.name
     *
     * @var string
     */
    public $VSwitchName;

    /**
     * @description gmtCreated
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description isDefault
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description vSwitch.resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'VSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
        'status'                  => 'Status',
        'cidrBlock'               => 'CidrBlock',
        'zoneId'                  => 'ZoneId',
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'description'             => 'Description',
        'VSwitchName'             => 'VSwitchName',
        'creationTime'            => 'CreationTime',
        'isDefault'               => 'IsDefault',
        'resourceGroupId'         => 'ResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('availableIpAddressCount', $this->availableIpAddressCount, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('VSwitchName', $this->VSwitchName, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->VSwitchName) {
            $res['VSwitchName'] = $this->VSwitchName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VSwitchName'])) {
            $model->VSwitchName = $map['VSwitchName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

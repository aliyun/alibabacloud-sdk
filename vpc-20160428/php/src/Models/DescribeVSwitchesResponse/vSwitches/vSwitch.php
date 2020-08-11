<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponse\vSwitches;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponse\vSwitches\vSwitch\routeTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponse\vSwitches\vSwitch\tags;
use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $vSwitchName;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var routeTable
     */
    public $routeTable;
    protected $_name = [
        'vSwitchId'               => 'VSwitchId',
        'vpcId'                   => 'VpcId',
        'status'                  => 'Status',
        'cidrBlock'               => 'CidrBlock',
        'ipv6CidrBlock'           => 'Ipv6CidrBlock',
        'zoneId'                  => 'ZoneId',
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'description'             => 'Description',
        'vSwitchName'             => 'VSwitchName',
        'creationTime'            => 'CreationTime',
        'isDefault'               => 'IsDefault',
        'resourceGroupId'         => 'ResourceGroupId',
        'networkAclId'            => 'NetworkAclId',
        'ownerId'                 => 'OwnerId',
        'shareType'               => 'ShareType',
        'tags'                    => 'Tags',
        'routeTable'              => 'RouteTable',
    ];

    public function validate()
    {
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('ipv6CidrBlock', $this->ipv6CidrBlock, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('availableIpAddressCount', $this->availableIpAddressCount, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('vSwitchName', $this->vSwitchName, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('networkAclId', $this->networkAclId, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('shareType', $this->shareType, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('routeTable', $this->routeTable, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
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
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
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
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->routeTable) {
            $res['RouteTable'] = null !== $this->routeTable ? $this->routeTable->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
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
            $model->vSwitchName = $map['VSwitchName'];
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
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['RouteTable'])) {
            $model->routeTable = routeTable::fromMap($map['RouteTable']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\natGatewayIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\routerTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponse\vpcs\vpc\vSwitchIds;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $creationTime;

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
    public $VRouterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $networkAclNum;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $cenStatus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var bool
     */
    public $supportAdvancedFeature;

    /**
     * @var bool
     */
    public $advancedResource;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var string
     */
    public $dhcpOptionsSetStatus;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @var natGatewayIds
     */
    public $natGatewayIds;

    /**
     * @var routerTableIds
     */
    public $routerTableIds;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;
    protected $_name = [
        'vpcId'                  => 'VpcId',
        'regionId'               => 'RegionId',
        'status'                 => 'Status',
        'vpcName'                => 'VpcName',
        'creationTime'           => 'CreationTime',
        'cidrBlock'              => 'CidrBlock',
        'ipv6CidrBlock'          => 'Ipv6CidrBlock',
        'VRouterId'              => 'VRouterId',
        'description'            => 'Description',
        'isDefault'              => 'IsDefault',
        'networkAclNum'          => 'NetworkAclNum',
        'resourceGroupId'        => 'ResourceGroupId',
        'cenStatus'              => 'CenStatus',
        'ownerId'                => 'OwnerId',
        'supportAdvancedFeature' => 'SupportAdvancedFeature',
        'advancedResource'       => 'AdvancedResource',
        'dhcpOptionsSetId'       => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus'   => 'DhcpOptionsSetStatus',
        'tags'                   => 'Tags',
        'vSwitchIds'             => 'VSwitchIds',
        'userCidrs'              => 'UserCidrs',
        'natGatewayIds'          => 'NatGatewayIds',
        'routerTableIds'         => 'RouterTableIds',
        'secondaryCidrBlocks'    => 'SecondaryCidrBlocks',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vpcName', $this->vpcName, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('ipv6CidrBlock', $this->ipv6CidrBlock, true);
        Model::validateRequired('VRouterId', $this->VRouterId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('networkAclNum', $this->networkAclNum, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('cenStatus', $this->cenStatus, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('supportAdvancedFeature', $this->supportAdvancedFeature, true);
        Model::validateRequired('advancedResource', $this->advancedResource, true);
        Model::validateRequired('dhcpOptionsSetId', $this->dhcpOptionsSetId, true);
        Model::validateRequired('dhcpOptionsSetStatus', $this->dhcpOptionsSetStatus, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
        Model::validateRequired('userCidrs', $this->userCidrs, true);
        Model::validateRequired('natGatewayIds', $this->natGatewayIds, true);
        Model::validateRequired('routerTableIds', $this->routerTableIds, true);
        Model::validateRequired('secondaryCidrBlocks', $this->secondaryCidrBlocks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->networkAclNum) {
            $res['NetworkAclNum'] = $this->networkAclNum;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->supportAdvancedFeature) {
            $res['SupportAdvancedFeature'] = $this->supportAdvancedFeature;
        }
        if (null !== $this->advancedResource) {
            $res['AdvancedResource'] = $this->advancedResource;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
        }
        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = null !== $this->natGatewayIds ? $this->natGatewayIds->toMap() : null;
        }
        if (null !== $this->routerTableIds) {
            $res['RouterTableIds'] = null !== $this->routerTableIds ? $this->routerTableIds->toMap() : null;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['NetworkAclNum'])) {
            $model->networkAclNum = $map['NetworkAclNum'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SupportAdvancedFeature'])) {
            $model->supportAdvancedFeature = $map['SupportAdvancedFeature'];
        }
        if (isset($map['AdvancedResource'])) {
            $model->advancedResource = $map['AdvancedResource'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }
        if (isset($map['NatGatewayIds'])) {
            $model->natGatewayIds = natGatewayIds::fromMap($map['NatGatewayIds']);
        }
        if (isset($map['RouterTableIds'])) {
            $model->routerTableIds = routerTableIds::fromMap($map['RouterTableIds']);
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }

        return $model;
    }
}

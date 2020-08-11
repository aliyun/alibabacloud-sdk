<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\cloudResources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponse\vSwitchIds;
use AlibabaCloud\Tea\Model;

class DescribeVpcAttributeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
     * @var bool
     */
    public $classicLinkEnabled;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $networkAclNum;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var string
     */
    public $dhcpOptionsSetStatus;

    /**
     * @var associatedCens
     */
    public $associatedCens;

    /**
     * @var cloudResources
     */
    public $cloudResources;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;
    protected $_name = [
        'requestId'            => 'RequestId',
        'vpcId'                => 'VpcId',
        'regionId'             => 'RegionId',
        'status'               => 'Status',
        'vpcName'              => 'VpcName',
        'creationTime'         => 'CreationTime',
        'cidrBlock'            => 'CidrBlock',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'VRouterId'            => 'VRouterId',
        'description'          => 'Description',
        'isDefault'            => 'IsDefault',
        'classicLinkEnabled'   => 'ClassicLinkEnabled',
        'resourceGroupId'      => 'ResourceGroupId',
        'networkAclNum'        => 'NetworkAclNum',
        'ownerId'              => 'OwnerId',
        'dhcpOptionsSetId'     => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus' => 'DhcpOptionsSetStatus',
        'associatedCens'       => 'AssociatedCens',
        'cloudResources'       => 'CloudResources',
        'vSwitchIds'           => 'VSwitchIds',
        'userCidrs'            => 'UserCidrs',
        'secondaryCidrBlocks'  => 'SecondaryCidrBlocks',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
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
        Model::validateRequired('classicLinkEnabled', $this->classicLinkEnabled, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('networkAclNum', $this->networkAclNum, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('dhcpOptionsSetId', $this->dhcpOptionsSetId, true);
        Model::validateRequired('dhcpOptionsSetStatus', $this->dhcpOptionsSetStatus, true);
        Model::validateRequired('associatedCens', $this->associatedCens, true);
        Model::validateRequired('cloudResources', $this->cloudResources, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
        Model::validateRequired('userCidrs', $this->userCidrs, true);
        Model::validateRequired('secondaryCidrBlocks', $this->secondaryCidrBlocks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
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
        if (null !== $this->classicLinkEnabled) {
            $res['ClassicLinkEnabled'] = $this->classicLinkEnabled;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->networkAclNum) {
            $res['NetworkAclNum'] = $this->networkAclNum;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
        }
        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcAttributeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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
        if (isset($map['ClassicLinkEnabled'])) {
            $model->classicLinkEnabled = $map['ClassicLinkEnabled'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['NetworkAclNum'])) {
            $model->networkAclNum = $map['NetworkAclNum'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }
        if (isset($map['CloudResources'])) {
            $model->cloudResources = cloudResources::fromMap($map['CloudResources']);
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }

        return $model;
    }
}

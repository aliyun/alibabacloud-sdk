<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs\vpc\vSwitchIds;
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
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var userCidrs
     */
    public $userCidrs;
    protected $_name = [
        'vpcId'        => 'VpcId',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'vpcName'      => 'VpcName',
        'creationTime' => 'CreationTime',
        'cidrBlock'    => 'CidrBlock',
        'VRouterId'    => 'VRouterId',
        'description'  => 'Description',
        'isDefault'    => 'IsDefault',
        'vSwitchIds'   => 'VSwitchIds',
        'userCidrs'    => 'UserCidrs',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('vpcName', $this->vpcName, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('cidrBlock', $this->cidrBlock, true);
        Model::validateRequired('VRouterId', $this->VRouterId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
        Model::validateRequired('userCidrs', $this->userCidrs, true);
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
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
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
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVpcsResponse\vpcs\vpc\VSwitchIds;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @description resourceId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description vpcName
     *
     * @var string
     */
    public $vpcName;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description cidrBlock
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description vRouterId
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description isDefault
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description vSwitchIds
     *
     * @var VSwitchIds
     */
    public $VSwitchIds;

    /**
     * @description userCidrs
     *
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
        'VSwitchIds'   => 'VSwitchIds',
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
        Model::validateRequired('VSwitchIds', $this->VSwitchIds, true);
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
        if (null !== $this->VSwitchIds) {
            $res['VSwitchIds'] = null !== $this->VSwitchIds ? $this->VSwitchIds->toMap() : null;
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
            $model->VSwitchIds = VSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }

        return $model;
    }
}

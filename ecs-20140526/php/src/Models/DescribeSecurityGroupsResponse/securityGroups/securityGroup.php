<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse\securityGroups;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponse\securityGroups\securityGroup\tags;
use AlibabaCloud\Tea\Model;

class securityGroup extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $securityGroupName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $securityGroupType;

    /**
     * @var int
     */
    public $availableInstanceAmount;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $serviceID;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'securityGroupId'         => 'SecurityGroupId',
        'description'             => 'Description',
        'securityGroupName'       => 'SecurityGroupName',
        'vpcId'                   => 'VpcId',
        'creationTime'            => 'CreationTime',
        'securityGroupType'       => 'SecurityGroupType',
        'availableInstanceAmount' => 'AvailableInstanceAmount',
        'ecsCount'                => 'EcsCount',
        'resourceGroupId'         => 'ResourceGroupId',
        'serviceID'               => 'ServiceID',
        'serviceManaged'          => 'ServiceManaged',
        'tags'                    => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('securityGroupName', $this->securityGroupName, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('securityGroupType', $this->securityGroupType, true);
        Model::validateRequired('availableInstanceAmount', $this->availableInstanceAmount, true);
        Model::validateRequired('ecsCount', $this->ecsCount, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('serviceID', $this->serviceID, true);
        Model::validateRequired('serviceManaged', $this->serviceManaged, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->availableInstanceAmount) {
            $res['AvailableInstanceAmount'] = $this->availableInstanceAmount;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['AvailableInstanceAmount'])) {
            $model->availableInstanceAmount = $map['AvailableInstanceAmount'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}

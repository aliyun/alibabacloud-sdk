<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse\routerTableList;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse\routerTableList\routerTableListType\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponse\routerTableList\routerTableListType\vSwitchIds;
use AlibabaCloud\Tea\Model;

class routerTableListType extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableName;

    /**
     * @var string
     */
    public $routeTableType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'routerType'      => 'RouterType',
        'routerId'        => 'RouterId',
        'routeTableId'    => 'RouteTableId',
        'routeTableName'  => 'RouteTableName',
        'routeTableType'  => 'RouteTableType',
        'description'     => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'creationTime'    => 'CreationTime',
        'status'          => 'Status',
        'ownerId'         => 'OwnerId',
        'tags'            => 'Tags',
        'vSwitchIds'      => 'VSwitchIds',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('routerType', $this->routerType, true);
        Model::validateRequired('routerId', $this->routerId, true);
        Model::validateRequired('routeTableId', $this->routeTableId, true);
        Model::validateRequired('routeTableName', $this->routeTableName, true);
        Model::validateRequired('routeTableType', $this->routeTableType, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('vSwitchIds', $this->vSwitchIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableName) {
            $res['RouteTableName'] = $this->routeTableName;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerTableListType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableName'])) {
            $model->routeTableName = $map['RouteTableName'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        return $model;
    }
}

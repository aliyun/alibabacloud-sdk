<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponse\VRouters;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVRoutersResponse\VRouters\VRouter\routeTableIds;
use AlibabaCloud\Tea\Model;

class VRouter extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $VRouterName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var routeTableIds
     */
    public $routeTableIds;
    protected $_name = [
        'regionId'      => 'RegionId',
        'vpcId'         => 'VpcId',
        'VRouterName'   => 'VRouterName',
        'description'   => 'Description',
        'VRouterId'     => 'VRouterId',
        'creationTime'  => 'CreationTime',
        'routeTableIds' => 'RouteTableIds',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VRouterName', $this->VRouterName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('VRouterId', $this->VRouterId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('routeTableIds', $this->routeTableIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VRouterName) {
            $res['VRouterName'] = $this->VRouterName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->routeTableIds) {
            $res['RouteTableIds'] = null !== $this->routeTableIds ? $this->routeTableIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VRouter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VRouterName'])) {
            $model->VRouterName = $map['VRouterName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RouteTableIds'])) {
            $model->routeTableIds = routeTableIds::fromMap($map['RouteTableIds']);
        }

        return $model;
    }
}

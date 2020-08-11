<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys;
use AlibabaCloud\Tea\Model;

class routeTable extends Model
{
    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var routeEntrys
     */
    public $routeEntrys;
    protected $_name = [
        'VRouterId'       => 'VRouterId',
        'routeTableId'    => 'RouteTableId',
        'routeTableType'  => 'RouteTableType',
        'creationTime'    => 'CreationTime',
        'resourceGroupId' => 'ResourceGroupId',
        'routeEntrys'     => 'RouteEntrys',
    ];

    public function validate()
    {
        Model::validateRequired('VRouterId', $this->VRouterId, true);
        Model::validateRequired('routeTableId', $this->routeTableId, true);
        Model::validateRequired('routeTableType', $this->routeTableType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('routeEntrys', $this->routeEntrys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeEntrys) {
            $res['RouteEntrys'] = null !== $this->routeEntrys ? $this->routeEntrys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteEntrys'])) {
            $model->routeEntrys = routeEntrys::fromMap($map['RouteEntrys']);
        }

        return $model;
    }
}

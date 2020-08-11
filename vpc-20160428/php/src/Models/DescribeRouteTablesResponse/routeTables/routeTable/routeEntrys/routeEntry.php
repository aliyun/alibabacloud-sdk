<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTablesResponse\routeTables\routeTable\routeEntrys\routeEntry\nextHops;
use AlibabaCloud\Tea\Model;

class routeEntry extends Model
{
    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $routeEntryName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $routeEntryId;

    /**
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @var string
     */
    public $nextHopOppsiteType;

    /**
     * @var string
     */
    public $nextHopOppsiteInstanceId;

    /**
     * @var string
     */
    public $nextHopOppsiteRegionId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var nextHops
     */
    public $nextHops;
    protected $_name = [
        'routeTableId'             => 'RouteTableId',
        'destinationCidrBlock'     => 'DestinationCidrBlock',
        'type'                     => 'Type',
        'status'                   => 'Status',
        'instanceId'               => 'InstanceId',
        'nextHopType'              => 'NextHopType',
        'routeEntryName'           => 'RouteEntryName',
        'description'              => 'Description',
        'routeEntryId'             => 'RouteEntryId',
        'nextHopRegionId'          => 'NextHopRegionId',
        'nextHopOppsiteType'       => 'NextHopOppsiteType',
        'nextHopOppsiteInstanceId' => 'NextHopOppsiteInstanceId',
        'nextHopOppsiteRegionId'   => 'NextHopOppsiteRegionId',
        'privateIpAddress'         => 'PrivateIpAddress',
        'nextHops'                 => 'NextHops',
    ];

    public function validate()
    {
        Model::validateRequired('routeTableId', $this->routeTableId, true);
        Model::validateRequired('destinationCidrBlock', $this->destinationCidrBlock, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('nextHopType', $this->nextHopType, true);
        Model::validateRequired('routeEntryName', $this->routeEntryName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('routeEntryId', $this->routeEntryId, true);
        Model::validateRequired('nextHopRegionId', $this->nextHopRegionId, true);
        Model::validateRequired('nextHopOppsiteType', $this->nextHopOppsiteType, true);
        Model::validateRequired('nextHopOppsiteInstanceId', $this->nextHopOppsiteInstanceId, true);
        Model::validateRequired('nextHopOppsiteRegionId', $this->nextHopOppsiteRegionId, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('nextHops', $this->nextHops, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->routeEntryName) {
            $res['RouteEntryName'] = $this->routeEntryName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->routeEntryId) {
            $res['RouteEntryId'] = $this->routeEntryId;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopOppsiteType) {
            $res['NextHopOppsiteType'] = $this->nextHopOppsiteType;
        }
        if (null !== $this->nextHopOppsiteInstanceId) {
            $res['NextHopOppsiteInstanceId'] = $this->nextHopOppsiteInstanceId;
        }
        if (null !== $this->nextHopOppsiteRegionId) {
            $res['NextHopOppsiteRegionId'] = $this->nextHopOppsiteRegionId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->nextHops) {
            $res['NextHops'] = null !== $this->nextHops ? $this->nextHops->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['RouteEntryName'])) {
            $model->routeEntryName = $map['RouteEntryName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RouteEntryId'])) {
            $model->routeEntryId = $map['RouteEntryId'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopOppsiteType'])) {
            $model->nextHopOppsiteType = $map['NextHopOppsiteType'];
        }
        if (isset($map['NextHopOppsiteInstanceId'])) {
            $model->nextHopOppsiteInstanceId = $map['NextHopOppsiteInstanceId'];
        }
        if (isset($map['NextHopOppsiteRegionId'])) {
            $model->nextHopOppsiteRegionId = $map['NextHopOppsiteRegionId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['NextHops'])) {
            $model->nextHops = nextHops::fromMap($map['NextHops']);
        }

        return $model;
    }
}

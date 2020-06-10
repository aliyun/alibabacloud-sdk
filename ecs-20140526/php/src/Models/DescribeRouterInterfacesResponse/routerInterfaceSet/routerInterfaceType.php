<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponse\routerInterfaceSet;

use AlibabaCloud\Tea\Model;

class routerInterfaceType extends Model
{
    /**
     * @description routerInterfaceId
     *
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @description oppositeRegionId
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description role
     *
     * @var string
     */
    public $role;

    /**
     * @description spec
     *
     * @var string
     */
    public $spec;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description routerId
     *
     * @var string
     */
    public $routerId;

    /**
     * @description routerType
     *
     * @var string
     */
    public $routerType;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description chargeType
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description businessStatus
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description connectedTime
     *
     * @var string
     */
    public $connectedTime;

    /**
     * @description oppositeInterfaceId
     *
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @description oppositeInterfaceSpec
     *
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @description oppositeInterfaceStatus
     *
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @description oppositeInterfaceBusinessStatus
     *
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @description oppositeRouterId
     *
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @description oppositeRouterType
     *
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @description oppositeInterfaceOwnerId
     *
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @description accessPointId
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description oppositeAccessPointId
     *
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @description healthCheckSourceIp
     *
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @description healthCheckTargetIp
     *
     * @var string
     */
    public $healthCheckTargetIp;
    protected $_name = [
        'routerInterfaceId'               => 'RouterInterfaceId',
        'oppositeRegionId'                => 'OppositeRegionId',
        'role'                            => 'Role',
        'spec'                            => 'Spec',
        'name'                            => 'Name',
        'description'                     => 'Description',
        'routerId'                        => 'RouterId',
        'routerType'                      => 'RouterType',
        'creationTime'                    => 'CreationTime',
        'endTime'                         => 'EndTime',
        'chargeType'                      => 'ChargeType',
        'status'                          => 'Status',
        'businessStatus'                  => 'BusinessStatus',
        'connectedTime'                   => 'ConnectedTime',
        'oppositeInterfaceId'             => 'OppositeInterfaceId',
        'oppositeInterfaceSpec'           => 'OppositeInterfaceSpec',
        'oppositeInterfaceStatus'         => 'OppositeInterfaceStatus',
        'oppositeInterfaceBusinessStatus' => 'OppositeInterfaceBusinessStatus',
        'oppositeRouterId'                => 'OppositeRouterId',
        'oppositeRouterType'              => 'OppositeRouterType',
        'oppositeInterfaceOwnerId'        => 'OppositeInterfaceOwnerId',
        'accessPointId'                   => 'AccessPointId',
        'oppositeAccessPointId'           => 'OppositeAccessPointId',
        'healthCheckSourceIp'             => 'HealthCheckSourceIp',
        'healthCheckTargetIp'             => 'HealthCheckTargetIp',
    ];

    public function validate()
    {
        Model::validateRequired('routerInterfaceId', $this->routerInterfaceId, true);
        Model::validateRequired('oppositeRegionId', $this->oppositeRegionId, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('routerId', $this->routerId, true);
        Model::validateRequired('routerType', $this->routerType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('connectedTime', $this->connectedTime, true);
        Model::validateRequired('oppositeInterfaceId', $this->oppositeInterfaceId, true);
        Model::validateRequired('oppositeInterfaceSpec', $this->oppositeInterfaceSpec, true);
        Model::validateRequired('oppositeInterfaceStatus', $this->oppositeInterfaceStatus, true);
        Model::validateRequired('oppositeInterfaceBusinessStatus', $this->oppositeInterfaceBusinessStatus, true);
        Model::validateRequired('oppositeRouterId', $this->oppositeRouterId, true);
        Model::validateRequired('oppositeRouterType', $this->oppositeRouterType, true);
        Model::validateRequired('oppositeInterfaceOwnerId', $this->oppositeInterfaceOwnerId, true);
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('oppositeAccessPointId', $this->oppositeAccessPointId, true);
        Model::validateRequired('healthCheckSourceIp', $this->healthCheckSourceIp, true);
        Model::validateRequired('healthCheckTargetIp', $this->healthCheckTargetIp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->routerType) {
            $res['RouterType'] = $this->routerType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }
        if (null !== $this->oppositeInterfaceId) {
            $res['OppositeInterfaceId'] = $this->oppositeInterfaceId;
        }
        if (null !== $this->oppositeInterfaceSpec) {
            $res['OppositeInterfaceSpec'] = $this->oppositeInterfaceSpec;
        }
        if (null !== $this->oppositeInterfaceStatus) {
            $res['OppositeInterfaceStatus'] = $this->oppositeInterfaceStatus;
        }
        if (null !== $this->oppositeInterfaceBusinessStatus) {
            $res['OppositeInterfaceBusinessStatus'] = $this->oppositeInterfaceBusinessStatus;
        }
        if (null !== $this->oppositeRouterId) {
            $res['OppositeRouterId'] = $this->oppositeRouterId;
        }
        if (null !== $this->oppositeRouterType) {
            $res['OppositeRouterType'] = $this->oppositeRouterType;
        }
        if (null !== $this->oppositeInterfaceOwnerId) {
            $res['OppositeInterfaceOwnerId'] = $this->oppositeInterfaceOwnerId;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->oppositeAccessPointId) {
            $res['OppositeAccessPointId'] = $this->oppositeAccessPointId;
        }
        if (null !== $this->healthCheckSourceIp) {
            $res['HealthCheckSourceIp'] = $this->healthCheckSourceIp;
        }
        if (null !== $this->healthCheckTargetIp) {
            $res['HealthCheckTargetIp'] = $this->healthCheckTargetIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerInterfaceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['RouterType'])) {
            $model->routerType = $map['RouterType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }
        if (isset($map['OppositeInterfaceId'])) {
            $model->oppositeInterfaceId = $map['OppositeInterfaceId'];
        }
        if (isset($map['OppositeInterfaceSpec'])) {
            $model->oppositeInterfaceSpec = $map['OppositeInterfaceSpec'];
        }
        if (isset($map['OppositeInterfaceStatus'])) {
            $model->oppositeInterfaceStatus = $map['OppositeInterfaceStatus'];
        }
        if (isset($map['OppositeInterfaceBusinessStatus'])) {
            $model->oppositeInterfaceBusinessStatus = $map['OppositeInterfaceBusinessStatus'];
        }
        if (isset($map['OppositeRouterId'])) {
            $model->oppositeRouterId = $map['OppositeRouterId'];
        }
        if (isset($map['OppositeRouterType'])) {
            $model->oppositeRouterType = $map['OppositeRouterType'];
        }
        if (isset($map['OppositeInterfaceOwnerId'])) {
            $model->oppositeInterfaceOwnerId = $map['OppositeInterfaceOwnerId'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['OppositeAccessPointId'])) {
            $model->oppositeAccessPointId = $map['OppositeAccessPointId'];
        }
        if (isset($map['HealthCheckSourceIp'])) {
            $model->healthCheckSourceIp = $map['HealthCheckSourceIp'];
        }
        if (isset($map['HealthCheckTargetIp'])) {
            $model->healthCheckTargetIp = $map['HealthCheckTargetIp'];
        }

        return $model;
    }
}

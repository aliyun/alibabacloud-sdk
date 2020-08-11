<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeRouterInterfaceAttributeResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $routerType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $connectedTime;

    /**
     * @var string
     */
    public $oppositeInterfaceId;

    /**
     * @var string
     */
    public $oppositeInterfaceSpec;

    /**
     * @var string
     */
    public $oppositeInterfaceStatus;

    /**
     * @var string
     */
    public $oppositeInterfaceBusinessStatus;

    /**
     * @var string
     */
    public $oppositeRouterId;

    /**
     * @var string
     */
    public $oppositeRouterType;

    /**
     * @var string
     */
    public $oppositeInterfaceOwnerId;

    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $oppositeAccessPointId;

    /**
     * @var string
     */
    public $healthCheckSourceIp;

    /**
     * @var string
     */
    public $healthCheckTargetIp;

    /**
     * @var string
     */
    public $oppositeVpcInstanceId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var int
     */
    public $oppositeBandwidth;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var bool
     */
    public $crossBorder;

    /**
     * @var int
     */
    public $hcThreshold;

    /**
     * @var int
     */
    public $hcRate;

    /**
     * @var string
     */
    public $healthCheckStatus;
    protected $_name = [
        'requestId'                       => 'RequestId',
        'code'                            => 'Code',
        'message'                         => 'Message',
        'success'                         => 'Success',
        'routerInterfaceId'               => 'RouterInterfaceId',
        'oppositeRegionId'                => 'OppositeRegionId',
        'role'                            => 'Role',
        'spec'                            => 'Spec',
        'name'                            => 'Name',
        'description'                     => 'Description',
        'routerId'                        => 'RouterId',
        'routerType'                      => 'RouterType',
        'creationTime'                    => 'CreationTime',
        'gmtModified'                     => 'GmtModified',
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
        'oppositeVpcInstanceId'           => 'OppositeVpcInstanceId',
        'bandwidth'                       => 'Bandwidth',
        'vpcInstanceId'                   => 'VpcInstanceId',
        'oppositeBandwidth'               => 'OppositeBandwidth',
        'hasReservationData'              => 'HasReservationData',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'reservationActiveTime'           => 'ReservationActiveTime',
        'reservationOrderType'            => 'ReservationOrderType',
        'crossBorder'                     => 'CrossBorder',
        'hcThreshold'                     => 'HcThreshold',
        'hcRate'                          => 'HcRate',
        'healthCheckStatus'               => 'HealthCheckStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('routerInterfaceId', $this->routerInterfaceId, true);
        Model::validateRequired('oppositeRegionId', $this->oppositeRegionId, true);
        Model::validateRequired('role', $this->role, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('routerId', $this->routerId, true);
        Model::validateRequired('routerType', $this->routerType, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
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
        Model::validateRequired('oppositeVpcInstanceId', $this->oppositeVpcInstanceId, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('vpcInstanceId', $this->vpcInstanceId, true);
        Model::validateRequired('oppositeBandwidth', $this->oppositeBandwidth, true);
        Model::validateRequired('hasReservationData', $this->hasReservationData, true);
        Model::validateRequired('reservationBandwidth', $this->reservationBandwidth, true);
        Model::validateRequired('reservationInternetChargeType', $this->reservationInternetChargeType, true);
        Model::validateRequired('reservationActiveTime', $this->reservationActiveTime, true);
        Model::validateRequired('reservationOrderType', $this->reservationOrderType, true);
        Model::validateRequired('crossBorder', $this->crossBorder, true);
        Model::validateRequired('hcThreshold', $this->hcThreshold, true);
        Model::validateRequired('hcRate', $this->hcRate, true);
        Model::validateRequired('healthCheckStatus', $this->healthCheckStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
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
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->oppositeVpcInstanceId) {
            $res['OppositeVpcInstanceId'] = $this->oppositeVpcInstanceId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->oppositeBandwidth) {
            $res['OppositeBandwidth'] = $this->oppositeBandwidth;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->crossBorder) {
            $res['CrossBorder'] = $this->crossBorder;
        }
        if (null !== $this->hcThreshold) {
            $res['HcThreshold'] = $this->hcThreshold;
        }
        if (null !== $this->hcRate) {
            $res['HcRate'] = $this->hcRate;
        }
        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = $this->healthCheckStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfaceAttributeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['OppositeVpcInstanceId'])) {
            $model->oppositeVpcInstanceId = $map['OppositeVpcInstanceId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['OppositeBandwidth'])) {
            $model->oppositeBandwidth = $map['OppositeBandwidth'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['CrossBorder'])) {
            $model->crossBorder = $map['CrossBorder'];
        }
        if (isset($map['HcThreshold'])) {
            $model->hcThreshold = $map['HcThreshold'];
        }
        if (isset($map['HcRate'])) {
            $model->hcRate = $map['HcRate'];
        }
        if (isset($map['HealthCheckStatus'])) {
            $model->healthCheckStatus = $map['HealthCheckStatus'];
        }

        return $model;
    }
}

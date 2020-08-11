<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponse\expressCloudConnectionSet;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeExpressCloudConnectionsResponse\expressCloudConnectionSet\expressCloudConnectionType\virtualBorderRouterModels;
use AlibabaCloud\Tea\Model;

class expressCloudConnectionType extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $peerCity;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $distance;

    /**
     * @var string
     */
    public $redundantEccId;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $idcSP;

    /**
     * @var string
     */
    public $businessStatus;

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
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationStatus;

    /**
     * @var string
     */
    public $applicationBandwidth;

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
    public $contactTel;

    /**
     * @var string
     */
    public $contactMail;

    /**
     * @var string
     */
    public $IDCardNo;

    /**
     * @var string
     */
    public $estimatedTime;

    /**
     * @var string
     */
    public $bgpAs;

    /**
     * @var string
     */
    public $peIp;

    /**
     * @var string
     */
    public $ceIp;

    /**
     * @var string
     */
    public $constructionPeriod;

    /**
     * @var virtualBorderRouterModels
     */
    public $virtualBorderRouterModels;
    protected $_name = [
        'instanceId'                    => 'InstanceId',
        'status'                        => 'Status',
        'name'                          => 'Name',
        'description'                   => 'Description',
        'gmtCreate'                     => 'GmtCreate',
        'gmtModify'                     => 'GmtModify',
        'peerCity'                      => 'PeerCity',
        'peerLocation'                  => 'PeerLocation',
        'portType'                      => 'PortType',
        'bandwidth'                     => 'Bandwidth',
        'distance'                      => 'Distance',
        'redundantEccId'                => 'RedundantEccId',
        'circuitCode'                   => 'CircuitCode',
        'isp'                           => 'Isp',
        'type'                          => 'Type',
        'idcSP'                         => 'IdcSP',
        'businessStatus'                => 'BusinessStatus',
        'hasReservationData'            => 'HasReservationData',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationOrderType'          => 'ReservationOrderType',
        'applicationType'               => 'ApplicationType',
        'applicationId'                 => 'ApplicationId',
        'applicationStatus'             => 'ApplicationStatus',
        'applicationBandwidth'          => 'ApplicationBandwidth',
        'endTime'                       => 'EndTime',
        'chargeType'                    => 'ChargeType',
        'contactTel'                    => 'ContactTel',
        'contactMail'                   => 'ContactMail',
        'IDCardNo'                      => 'IDCardNo',
        'estimatedTime'                 => 'EstimatedTime',
        'bgpAs'                         => 'BgpAs',
        'peIp'                          => 'PeIp',
        'ceIp'                          => 'CeIp',
        'constructionPeriod'            => 'ConstructionPeriod',
        'virtualBorderRouterModels'     => 'VirtualBorderRouterModels',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModify', $this->gmtModify, true);
        Model::validateRequired('peerCity', $this->peerCity, true);
        Model::validateRequired('peerLocation', $this->peerLocation, true);
        Model::validateRequired('portType', $this->portType, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('distance', $this->distance, true);
        Model::validateRequired('redundantEccId', $this->redundantEccId, true);
        Model::validateRequired('circuitCode', $this->circuitCode, true);
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('idcSP', $this->idcSP, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('hasReservationData', $this->hasReservationData, true);
        Model::validateRequired('reservationBandwidth', $this->reservationBandwidth, true);
        Model::validateRequired('reservationInternetChargeType', $this->reservationInternetChargeType, true);
        Model::validateRequired('reservationActiveTime', $this->reservationActiveTime, true);
        Model::validateRequired('reservationOrderType', $this->reservationOrderType, true);
        Model::validateRequired('applicationType', $this->applicationType, true);
        Model::validateRequired('applicationId', $this->applicationId, true);
        Model::validateRequired('applicationStatus', $this->applicationStatus, true);
        Model::validateRequired('applicationBandwidth', $this->applicationBandwidth, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('contactTel', $this->contactTel, true);
        Model::validateRequired('contactMail', $this->contactMail, true);
        Model::validateRequired('IDCardNo', $this->IDCardNo, true);
        Model::validateRequired('estimatedTime', $this->estimatedTime, true);
        Model::validateRequired('bgpAs', $this->bgpAs, true);
        Model::validateRequired('peIp', $this->peIp, true);
        Model::validateRequired('ceIp', $this->ceIp, true);
        Model::validateRequired('constructionPeriod', $this->constructionPeriod, true);
        Model::validateRequired('virtualBorderRouterModels', $this->virtualBorderRouterModels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->peerCity) {
            $res['PeerCity'] = $this->peerCity;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->distance) {
            $res['Distance'] = $this->distance;
        }
        if (null !== $this->redundantEccId) {
            $res['RedundantEccId'] = $this->redundantEccId;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->idcSP) {
            $res['IdcSP'] = $this->idcSP;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
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
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationStatus) {
            $res['ApplicationStatus'] = $this->applicationStatus;
        }
        if (null !== $this->applicationBandwidth) {
            $res['ApplicationBandwidth'] = $this->applicationBandwidth;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->contactTel) {
            $res['ContactTel'] = $this->contactTel;
        }
        if (null !== $this->contactMail) {
            $res['ContactMail'] = $this->contactMail;
        }
        if (null !== $this->IDCardNo) {
            $res['IDCardNo'] = $this->IDCardNo;
        }
        if (null !== $this->estimatedTime) {
            $res['EstimatedTime'] = $this->estimatedTime;
        }
        if (null !== $this->bgpAs) {
            $res['BgpAs'] = $this->bgpAs;
        }
        if (null !== $this->peIp) {
            $res['PeIp'] = $this->peIp;
        }
        if (null !== $this->ceIp) {
            $res['CeIp'] = $this->ceIp;
        }
        if (null !== $this->constructionPeriod) {
            $res['ConstructionPeriod'] = $this->constructionPeriod;
        }
        if (null !== $this->virtualBorderRouterModels) {
            $res['VirtualBorderRouterModels'] = null !== $this->virtualBorderRouterModels ? $this->virtualBorderRouterModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expressCloudConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['PeerCity'])) {
            $model->peerCity = $map['PeerCity'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Distance'])) {
            $model->distance = $map['Distance'];
        }
        if (isset($map['RedundantEccId'])) {
            $model->redundantEccId = $map['RedundantEccId'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IdcSP'])) {
            $model->idcSP = $map['IdcSP'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
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
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationStatus'])) {
            $model->applicationStatus = $map['ApplicationStatus'];
        }
        if (isset($map['ApplicationBandwidth'])) {
            $model->applicationBandwidth = $map['ApplicationBandwidth'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ContactTel'])) {
            $model->contactTel = $map['ContactTel'];
        }
        if (isset($map['ContactMail'])) {
            $model->contactMail = $map['ContactMail'];
        }
        if (isset($map['IDCardNo'])) {
            $model->IDCardNo = $map['IDCardNo'];
        }
        if (isset($map['EstimatedTime'])) {
            $model->estimatedTime = $map['EstimatedTime'];
        }
        if (isset($map['BgpAs'])) {
            $model->bgpAs = $map['BgpAs'];
        }
        if (isset($map['PeIp'])) {
            $model->peIp = $map['PeIp'];
        }
        if (isset($map['CeIp'])) {
            $model->ceIp = $map['CeIp'];
        }
        if (isset($map['ConstructionPeriod'])) {
            $model->constructionPeriod = $map['ConstructionPeriod'];
        }
        if (isset($map['VirtualBorderRouterModels'])) {
            $model->virtualBorderRouterModels = virtualBorderRouterModels::fromMap($map['VirtualBorderRouterModels']);
        }

        return $model;
    }
}

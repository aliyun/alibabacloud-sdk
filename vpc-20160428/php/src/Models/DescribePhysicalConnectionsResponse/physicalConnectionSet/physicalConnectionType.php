<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionsResponse\physicalConnectionSet;

use AlibabaCloud\Tea\Model;

class physicalConnectionType extends Model
{
    /**
     * @description description: The ID of the physical connection;
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description description: The access point ID of the physical connection;
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description description: The type of the physical connection. Default value: **VPC**.;
     *
     * @var string
     */
    public $type;

    /**
     * @description description: The status of the physical connection. Valid values: * **Initial**: The physical connection has been applied for and is under review by Alibaba Cloud* **Approved**: The application is approved* **Allocating**: Resources* **Allocated**: The leased line is being installed.* **Confirmed**: The completed leased line installation needs to be confirmed by the customer.* **Enabled**: The physical connection interface is enabled.* **Rejected**: The application is rejected.* **Canceled**: The application is canceled.* **Allocation Failed**: Failed to allocate resources* **Terminated**: The physical connection is terminated;
     *
     * @var string
     */
    public $status;

    /**
     * @description description: The payment status of the physical connection. Valid values: * Normal * FinancialLocked: locked due to overdue payment* SecurityLocked: locked due to security reasons;
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description description: The time when the physical connection is established ;
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description description: The time when the physical connection is enabled ;
     *
     * @var string
     */
    public $enabledTime;

    /**
     * @description description: The service provider that provides the leased line. Valid values:* CT: China Telecom * CU: China Unicom* CM: China Mobile* CO: Other Chinese service providers* Equinix: Equinix * Other: Other service providers outside Mainland China;
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description description: The specification of the physical connection;
     *
     * @var string
     */
    public $spec;

    /**
     * @description description: The location of the on-premises IDC;
     *
     * @var string
     */
    public $peerLocation;

    /**
     * @description description: The type of physical connection ports:* 100Base-T: 100M electrical ports * 1000Base-T (default value): Gigabit electrical ports * 1000Base-LX: Gigabit single-mode optical ports (10 km) * 10GBase-T: 10-GE electrical ports  * 10GBase-LR: 10-GE single-mode optical ports (10 km);
     *
     * @var string
     */
    public $portType;

    /**
     * @description description: The ID of the redundant physical connection;
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description description: The name of the physical connection;
     *
     * @var string
     */
    public $name;

    /**
     * @description description: A description about the physical connection;
     *
     * @var string
     */
    public $description;

    /**
     * @description description: The location where the leased line is connected;
     *
     * @var string
     */
    public $adLocation;

    /**
     * @description description: The port number of the physical connection device;
     *
     * @var string
     */
    public $portNumber;

    /**
     * @description description: The number of the leased line from the service provider;
     *
     * @var string
     */
    public $circuitCode;

    /**
     * @description description: The bandwidth of the physical connection;
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description description: The status of the LOA ;
     *
     * @var string
     */
    public $loaStatus;

    /**
     * @description description: Indicates whether subscription messages are received;
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description description: The type of renewal ;
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description description: The effective time of a renewal;
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description description: The type of the renewal order ;
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description description: The time when the physical connection expires ;
     *
     * @var string
     */
    public $endTime;

    /**
     * @description description: The billing method of the physical connection;
     *
     * @var string
     */
    public $chargeType;
    protected $_name = [
        'physicalConnectionId'          => 'PhysicalConnectionId',
        'accessPointId'                 => 'AccessPointId',
        'type'                          => 'Type',
        'status'                        => 'Status',
        'businessStatus'                => 'BusinessStatus',
        'creationTime'                  => 'CreationTime',
        'enabledTime'                   => 'EnabledTime',
        'lineOperator'                  => 'LineOperator',
        'spec'                          => 'Spec',
        'peerLocation'                  => 'PeerLocation',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'name'                          => 'Name',
        'description'                   => 'Description',
        'adLocation'                    => 'AdLocation',
        'portNumber'                    => 'PortNumber',
        'circuitCode'                   => 'CircuitCode',
        'bandwidth'                     => 'Bandwidth',
        'loaStatus'                     => 'LoaStatus',
        'hasReservationData'            => 'HasReservationData',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationOrderType'          => 'ReservationOrderType',
        'endTime'                       => 'EndTime',
        'chargeType'                    => 'ChargeType',
    ];

    public function validate()
    {
        Model::validateRequired('physicalConnectionId', $this->physicalConnectionId, true);
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('enabledTime', $this->enabledTime, true);
        Model::validateRequired('lineOperator', $this->lineOperator, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('peerLocation', $this->peerLocation, true);
        Model::validateRequired('portType', $this->portType, true);
        Model::validateRequired('redundantPhysicalConnectionId', $this->redundantPhysicalConnectionId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('adLocation', $this->adLocation, true);
        Model::validateRequired('portNumber', $this->portNumber, true);
        Model::validateRequired('circuitCode', $this->circuitCode, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('loaStatus', $this->loaStatus, true);
        Model::validateRequired('hasReservationData', $this->hasReservationData, true);
        Model::validateRequired('reservationInternetChargeType', $this->reservationInternetChargeType, true);
        Model::validateRequired('reservationActiveTime', $this->reservationActiveTime, true);
        Model::validateRequired('reservationOrderType', $this->reservationOrderType, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->adLocation) {
            $res['AdLocation'] = $this->adLocation;
        }
        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
        }
        if (null !== $this->circuitCode) {
            $res['CircuitCode'] = $this->circuitCode;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AdLocation'])) {
            $model->adLocation = $map['AdLocation'];
        }
        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
        }
        if (isset($map['CircuitCode'])) {
            $model->circuitCode = $map['CircuitCode'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        return $model;
    }
}

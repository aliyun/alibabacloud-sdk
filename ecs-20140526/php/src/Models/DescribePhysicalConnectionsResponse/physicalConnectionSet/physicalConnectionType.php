<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponse\physicalConnectionSet;

use AlibabaCloud\Tea\Model;

class physicalConnectionType extends Model
{
    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $accessPointId;

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
    public $businessStatus;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $enabledTime;

    /**
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $peerLocation;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var string
     */
    public $redundantPhysicalConnectionId;

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
    public $adLocation;

    /**
     * @var string
     */
    public $portNumber;

    /**
     * @var string
     */
    public $circuitCode;

    /**
     * @var int
     */
    public $bandwidth;
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

        return $model;
    }
}

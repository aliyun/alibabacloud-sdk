<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListConnectionsResponse\data;

use AlibabaCloud\Tea\Model;

class connections extends Model
{
    /**
     * @description shared
     *
     * @var bool
     */
    public $shared;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description connectStatus
     *
     * @var int
     */
    public $connectStatus;

    /**
     * @description bindingCalcEngineId
     *
     * @var int
     */
    public $bindingCalcEngineId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description type
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description defaultEngine
     *
     * @var bool
     */
    public $defaultEngine;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description sequence
     *
     * @var int
     */
    public $sequence;

    /**
     * @description envType
     *
     * @var int
     */
    public $envType;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description subType
     *
     * @var string
     */
    public $subType;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description status
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'shared'              => 'Shared',
        'gmtModified'         => 'GmtModified',
        'connectStatus'       => 'ConnectStatus',
        'bindingCalcEngineId' => 'BindingCalcEngineId',
        'description'         => 'Description',
        'connectionType'      => 'ConnectionType',
        'gmtCreate'           => 'GmtCreate',
        'defaultEngine'       => 'DefaultEngine',
        'operator'            => 'Operator',
        'sequence'            => 'Sequence',
        'envType'             => 'EnvType',
        'tenantId'            => 'TenantId',
        'name'                => 'Name',
        'subType'             => 'SubType',
        'id'                  => 'Id',
        'projectId'           => 'ProjectId',
        'status'              => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('shared', $this->shared, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('connectStatus', $this->connectStatus, true);
        Model::validateRequired('bindingCalcEngineId', $this->bindingCalcEngineId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('connectionType', $this->connectionType, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('defaultEngine', $this->defaultEngine, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('sequence', $this->sequence, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('subType', $this->subType, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shared) {
            $res['Shared'] = $this->shared;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->connectStatus) {
            $res['ConnectStatus'] = $this->connectStatus;
        }
        if (null !== $this->bindingCalcEngineId) {
            $res['BindingCalcEngineId'] = $this->bindingCalcEngineId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->defaultEngine) {
            $res['DefaultEngine'] = $this->defaultEngine;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return connections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Shared'])) {
            $model->shared = $map['Shared'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ConnectStatus'])) {
            $model->connectStatus = $map['ConnectStatus'];
        }
        if (isset($map['BindingCalcEngineId'])) {
            $model->bindingCalcEngineId = $map['BindingCalcEngineId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DefaultEngine'])) {
            $model->defaultEngine = $map['DefaultEngine'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

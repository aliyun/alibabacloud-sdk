<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponse\data;

use AlibabaCloud\Tea\Model;

class calcEngines extends Model
{
    /**
     * @description type
     *
     * @var string
     */
    public $calcEngineType;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description dwRegion
     *
     * @var string
     */
    public $dwRegion;

    /**
     * @description isDefault
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description bindingProjectId
     *
     * @var int
     */
    public $bindingProjectId;

    /**
     * @description envType
     *
     * @var string
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
     * @description bindingProjectName
     *
     * @var string
     */
    public $bindingProjectName;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description engineId
     *
     * @var int
     */
    public $engineId;

    /**
     * @description engineInfo
     *
     * @var array
     */
    public $engineInfo;

    /**
     * @description taskAuthType
     *
     * @var string
     */
    public $taskAuthType;
    protected $_name = [
        'calcEngineType'     => 'CalcEngineType',
        'gmtCreate'          => 'GmtCreate',
        'dwRegion'           => 'DwRegion',
        'isDefault'          => 'IsDefault',
        'bindingProjectId'   => 'BindingProjectId',
        'envType'            => 'EnvType',
        'tenantId'           => 'TenantId',
        'name'               => 'Name',
        'bindingProjectName' => 'BindingProjectName',
        'region'             => 'Region',
        'engineId'           => 'EngineId',
        'engineInfo'         => 'EngineInfo',
        'taskAuthType'       => 'TaskAuthType',
    ];

    public function validate()
    {
        Model::validateRequired('calcEngineType', $this->calcEngineType, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('dwRegion', $this->dwRegion, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('bindingProjectId', $this->bindingProjectId, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('bindingProjectName', $this->bindingProjectName, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('engineId', $this->engineId, true);
        Model::validateRequired('engineInfo', $this->engineInfo, true);
        Model::validateRequired('taskAuthType', $this->taskAuthType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calcEngineType) {
            $res['CalcEngineType'] = $this->calcEngineType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->dwRegion) {
            $res['DwRegion'] = $this->dwRegion;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->bindingProjectId) {
            $res['BindingProjectId'] = $this->bindingProjectId;
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
        if (null !== $this->bindingProjectName) {
            $res['BindingProjectName'] = $this->bindingProjectName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->engineId) {
            $res['EngineId'] = $this->engineId;
        }
        if (null !== $this->engineInfo) {
            $res['EngineInfo'] = $this->engineInfo;
        }
        if (null !== $this->taskAuthType) {
            $res['TaskAuthType'] = $this->taskAuthType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calcEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcEngineType'])) {
            $model->calcEngineType = $map['CalcEngineType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DwRegion'])) {
            $model->dwRegion = $map['DwRegion'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['BindingProjectId'])) {
            $model->bindingProjectId = $map['BindingProjectId'];
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
        if (isset($map['BindingProjectName'])) {
            $model->bindingProjectName = $map['BindingProjectName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['EngineId'])) {
            $model->engineId = $map['EngineId'];
        }
        if (isset($map['EngineInfo'])) {
            $model->engineInfo = $map['EngineInfo'];
        }
        if (isset($map['TaskAuthType'])) {
            $model->taskAuthType = $map['TaskAuthType'];
        }

        return $model;
    }
}

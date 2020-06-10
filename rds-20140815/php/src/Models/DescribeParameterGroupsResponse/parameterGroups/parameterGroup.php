<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponse\parameterGroups;

use AlibabaCloud\Tea\Model;

class parameterGroup extends Model
{
    /**
     * @description parameterGroupType
     *
     * @var int
     */
    public $parameterGroupType;

    /**
     * @description parameterGroupName
     *
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description paramCounts
     *
     * @var int
     */
    public $paramCounts;

    /**
     * @description parameterGroupDesc
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description forceRestart
     *
     * @var int
     */
    public $forceRestart;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description created
     *
     * @var string
     */
    public $createTime;

    /**
     * @description modified
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description paramGroupId
     *
     * @var string
     */
    public $parameterGroupId;
    protected $_name = [
        'parameterGroupType' => 'ParameterGroupType',
        'parameterGroupName' => 'ParameterGroupName',
        'paramCounts'        => 'ParamCounts',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'forceRestart'       => 'ForceRestart',
        'engine'             => 'Engine',
        'engineVersion'      => 'EngineVersion',
        'createTime'         => 'CreateTime',
        'updateTime'         => 'UpdateTime',
        'parameterGroupId'   => 'ParameterGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('parameterGroupType', $this->parameterGroupType, true);
        Model::validateRequired('parameterGroupName', $this->parameterGroupName, true);
        Model::validateRequired('paramCounts', $this->paramCounts, true);
        Model::validateRequired('parameterGroupDesc', $this->parameterGroupDesc, true);
        Model::validateRequired('forceRestart', $this->forceRestart, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('parameterGroupId', $this->parameterGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroupType) {
            $res['ParameterGroupType'] = $this->parameterGroupType;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }
        if (null !== $this->paramCounts) {
            $res['ParamCounts'] = $this->paramCounts;
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroupType'])) {
            $model->parameterGroupType = $map['ParameterGroupType'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if (isset($map['ParamCounts'])) {
            $model->paramCounts = $map['ParamCounts'];
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }

        return $model;
    }
}

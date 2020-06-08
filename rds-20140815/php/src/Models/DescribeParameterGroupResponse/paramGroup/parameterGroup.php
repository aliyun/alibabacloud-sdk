<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup\parameterGroup\paramDetail;

class parameterGroup extends Model {
    protected $_name = [
        'parameterGroupType' => 'ParameterGroupType',
        'parameterGroupName' => 'ParameterGroupName',
        'paramCounts' => 'ParamCounts',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'forceRestart' => 'ForceRestart',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'parameterGroupId' => 'ParameterGroupId',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'paramDetail' => 'ParamDetail',
    ];
    public function validate() {
        Model::validateRequired('parameterGroupType', $this->parameterGroupType, true);
        Model::validateRequired('parameterGroupName', $this->parameterGroupName, true);
        Model::validateRequired('paramCounts', $this->paramCounts, true);
        Model::validateRequired('parameterGroupDesc', $this->parameterGroupDesc, true);
        Model::validateRequired('forceRestart', $this->forceRestart, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('parameterGroupId', $this->parameterGroupId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('paramDetail', $this->paramDetail, true);
    }
    public function toMap() {
        $res = [];
        $res['ParameterGroupType'] = $this->parameterGroupType;
        $res['ParameterGroupName'] = $this->parameterGroupName;
        $res['ParamCounts'] = $this->paramCounts;
        $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        $res['ForceRestart'] = $this->forceRestart;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        $res['ParameterGroupId'] = $this->parameterGroupId;
        $res['CreateTime'] = $this->createTime;
        $res['UpdateTime'] = $this->updateTime;
        $res['ParamDetail'] = null !== $this->paramDetail ? $this->paramDetail->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return parameterGroup
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ParameterGroupType'])){
            $model->parameterGroupType = $map['ParameterGroupType'];
        }
        if(isset($map['ParameterGroupName'])){
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if(isset($map['ParamCounts'])){
            $model->paramCounts = $map['ParamCounts'];
        }
        if(isset($map['ParameterGroupDesc'])){
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if(isset($map['ForceRestart'])){
            $model->forceRestart = $map['ForceRestart'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['ParameterGroupId'])){
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['ParamDetail'])){
            $model->paramDetail = paramDetail::fromMap($map['ParamDetail']);
        }
        return $model;
    }
    /**
     * @description parameterGroupType
     * @var integer
     */
    public $parameterGroupType;

    /**
     * @description parameterGroupName
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description paramCounts
     * @var integer
     */
    public $paramCounts;

    /**
     * @description parameterGroupDesc
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description forceRestart
     * @var integer
     */
    public $forceRestart;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description paramGroupId
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description created
     * @var string
     */
    public $createTime;

    /**
     * @description modified
     * @var string
     */
    public $updateTime;

    /**
     * @description paramDetail
     * @var paramDetail
     */
    public $paramDetail;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponse;

use AlibabaCloud\Tea\Model;

class outboundStrategies extends Model {
    protected $_name = [
        'id' => 'Id',
        'gmtCreateStr' => 'GmtCreateStr',
        'gmtModifiedStr' => 'GmtModifiedStr',
        'creatorId' => 'CreatorId',
        'creatorName' => 'CreatorName',
        'modifierId' => 'ModifierId',
        'modifierName' => 'ModifierName',
        'buId' => 'BuId',
        'departmentId' => 'DepartmentId',
        'name' => 'name',
        'numType' => 'NumType',
        'outboundNum' => 'OutboundNum',
        'robotType' => 'RobotType',
        'robotId' => 'RobotId',
        'robotName' => 'RobotName',
        'resourceAllocation' => 'ResourceAllocation',
        'sceneName' => 'SceneName',
        'ruleCode' => 'RuleCode',
        'status' => 'Status',
        'extAttr' => 'ExtAttr',
        'process' => 'Process',
        'successRate' => 'SuccessRate',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('gmtCreateStr', $this->gmtCreateStr, true);
        Model::validateRequired('gmtModifiedStr', $this->gmtModifiedStr, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('creatorName', $this->creatorName, true);
        Model::validateRequired('modifierId', $this->modifierId, true);
        Model::validateRequired('modifierName', $this->modifierName, true);
        Model::validateRequired('buId', $this->buId, true);
        Model::validateRequired('departmentId', $this->departmentId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('numType', $this->numType, true);
        Model::validateRequired('outboundNum', $this->outboundNum, true);
        Model::validateRequired('robotType', $this->robotType, true);
        Model::validateRequired('robotId', $this->robotId, true);
        Model::validateRequired('robotName', $this->robotName, true);
        Model::validateRequired('resourceAllocation', $this->resourceAllocation, true);
        Model::validateRequired('sceneName', $this->sceneName, true);
        Model::validateRequired('ruleCode', $this->ruleCode, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('extAttr', $this->extAttr, true);
        Model::validateRequired('process', $this->process, true);
        Model::validateRequired('successRate', $this->successRate, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['GmtCreateStr'] = $this->gmtCreateStr;
        $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        $res['CreatorId'] = $this->creatorId;
        $res['CreatorName'] = $this->creatorName;
        $res['ModifierId'] = $this->modifierId;
        $res['ModifierName'] = $this->modifierName;
        $res['BuId'] = $this->buId;
        $res['DepartmentId'] = $this->departmentId;
        $res['name'] = $this->name;
        $res['NumType'] = $this->numType;
        $res['OutboundNum'] = $this->outboundNum;
        $res['RobotType'] = $this->robotType;
        $res['RobotId'] = $this->robotId;
        $res['RobotName'] = $this->robotName;
        $res['ResourceAllocation'] = $this->resourceAllocation;
        $res['SceneName'] = $this->sceneName;
        $res['RuleCode'] = $this->ruleCode;
        $res['Status'] = $this->status;
        $res['ExtAttr'] = $this->extAttr;
        $res['Process'] = $this->process;
        $res['SuccessRate'] = $this->successRate;
        return $res;
    }
    /**
     * @param array $map
     * @return outboundStrategies
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['GmtCreateStr'])){
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if(isset($map['GmtModifiedStr'])){
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }
        if(isset($map['CreatorId'])){
            $model->creatorId = $map['CreatorId'];
        }
        if(isset($map['CreatorName'])){
            $model->creatorName = $map['CreatorName'];
        }
        if(isset($map['ModifierId'])){
            $model->modifierId = $map['ModifierId'];
        }
        if(isset($map['ModifierName'])){
            $model->modifierName = $map['ModifierName'];
        }
        if(isset($map['BuId'])){
            $model->buId = $map['BuId'];
        }
        if(isset($map['DepartmentId'])){
            $model->departmentId = $map['DepartmentId'];
        }
        if(isset($map['name'])){
            $model->name = $map['name'];
        }
        if(isset($map['NumType'])){
            $model->numType = $map['NumType'];
        }
        if(isset($map['OutboundNum'])){
            $model->outboundNum = $map['OutboundNum'];
        }
        if(isset($map['RobotType'])){
            $model->robotType = $map['RobotType'];
        }
        if(isset($map['RobotId'])){
            $model->robotId = $map['RobotId'];
        }
        if(isset($map['RobotName'])){
            $model->robotName = $map['RobotName'];
        }
        if(isset($map['ResourceAllocation'])){
            $model->resourceAllocation = $map['ResourceAllocation'];
        }
        if(isset($map['SceneName'])){
            $model->sceneName = $map['SceneName'];
        }
        if(isset($map['RuleCode'])){
            $model->ruleCode = $map['RuleCode'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['ExtAttr'])){
            $model->extAttr = $map['ExtAttr'];
        }
        if(isset($map['Process'])){
            $model->process = $map['Process'];
        }
        if(isset($map['SuccessRate'])){
            $model->successRate = $map['SuccessRate'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $id;

    /**
     * @description gmtCreateStr
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @description gmtModifiedStr
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @description creatorId
     * @var integer
     */
    public $creatorId;

    /**
     * @description creatorName
     * @var string
     */
    public $creatorName;

    /**
     * @description modifierId
     * @var integer
     */
    public $modifierId;

    /**
     * @description modifierName
     * @var string
     */
    public $modifierName;

    /**
     * @description buId
     * @var integer
     */
    public $buId;

    /**
     * @description departmentId
     * @var integer
     */
    public $departmentId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description numType
     * @var integer
     */
    public $numType;

    /**
     * @description outboundNum
     * @var string
     */
    public $outboundNum;

    /**
     * @description robotType
     * @var integer
     */
    public $robotType;

    /**
     * @description robotId
     * @var string
     */
    public $robotId;

    /**
     * @description robotName
     * @var string
     */
    public $robotName;

    /**
     * @description resourceAllocation
     * @var integer
     */
    public $resourceAllocation;

    /**
     * @description sceneName
     * @var string
     */
    public $sceneName;

    /**
     * @description ruleCode
     * @var integer
     */
    public $ruleCode;

    /**
     * @description status
     * @var integer
     */
    public $status;

    /**
     * @description extAttr
     * @var string
     */
    public $extAttr;

    /**
     * @description process
     * @var integer
     */
    public $process;

    /**
     * @description successRate
     * @var integer
     */
    public $successRate;

}

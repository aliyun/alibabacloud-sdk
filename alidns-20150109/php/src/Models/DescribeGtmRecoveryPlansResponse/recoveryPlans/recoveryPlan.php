<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse\recoveryPlans;

use AlibabaCloud\Tea\Model;

class recoveryPlan extends Model {
    protected $_name = [
        'recoveryPlanId' => 'RecoveryPlanId',
        'name' => 'Name',
        'remark' => 'Remark',
        'faultAddrPoolNum' => 'FaultAddrPoolNum',
        'lastExecuteTime' => 'LastExecuteTime',
        'lastExecuteTimestamp' => 'LastExecuteTimestamp',
        'lastRollbackTime' => 'LastRollbackTime',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('faultAddrPoolNum', $this->faultAddrPoolNum, true);
        Model::validateRequired('lastExecuteTime', $this->lastExecuteTime, true);
        Model::validateRequired('lastExecuteTimestamp', $this->lastExecuteTimestamp, true);
        Model::validateRequired('lastRollbackTime', $this->lastRollbackTime, true);
        Model::validateRequired('lastRollbackTimestamp', $this->lastRollbackTimestamp, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['RecoveryPlanId'] = $this->recoveryPlanId;
        $res['Name'] = $this->name;
        $res['Remark'] = $this->remark;
        $res['FaultAddrPoolNum'] = $this->faultAddrPoolNum;
        $res['LastExecuteTime'] = $this->lastExecuteTime;
        $res['LastExecuteTimestamp'] = $this->lastExecuteTimestamp;
        $res['LastRollbackTime'] = $this->lastRollbackTime;
        $res['LastRollbackTimestamp'] = $this->lastRollbackTimestamp;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['UpdateTime'] = $this->updateTime;
        $res['UpdateTimestamp'] = $this->updateTimestamp;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return recoveryPlan
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RecoveryPlanId'])){
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['FaultAddrPoolNum'])){
            $model->faultAddrPoolNum = $map['FaultAddrPoolNum'];
        }
        if(isset($map['LastExecuteTime'])){
            $model->lastExecuteTime = $map['LastExecuteTime'];
        }
        if(isset($map['LastExecuteTimestamp'])){
            $model->lastExecuteTimestamp = $map['LastExecuteTimestamp'];
        }
        if(isset($map['LastRollbackTime'])){
            $model->lastRollbackTime = $map['LastRollbackTime'];
        }
        if(isset($map['LastRollbackTimestamp'])){
            $model->lastRollbackTimestamp = $map['LastRollbackTimestamp'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['UpdateTimestamp'])){
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $recoveryPlanId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description faultAddrPoolNum
     * @var integer
     */
    public $faultAddrPoolNum;

    /**
     * @description lastExecuteTime
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @description lastExecuteTimestamp
     * @var integer
     */
    public $lastExecuteTimestamp;

    /**
     * @description lastRollbackTime
     * @var string
     */
    public $lastRollbackTime;

    /**
     * @description lastRollbackTimestamp
     * @var integer
     */
    public $lastRollbackTimestamp;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description updateTime
     * @var string
     */
    public $updateTime;

    /**
     * @description updateTimestamp
     * @var integer
     */
    public $updateTimestamp;

    /**
     * @description status
     * @var string
     */
    public $status;

}

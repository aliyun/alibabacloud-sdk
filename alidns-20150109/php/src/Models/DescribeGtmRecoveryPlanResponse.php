<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools;

class DescribeGtmRecoveryPlanResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'recoveryPlanId' => 'RecoveryPlanId',
        'name' => 'Name',
        'remark' => 'Remark',
        'faultAddrPoolNum' => 'FaultAddrPoolNum',
        'status' => 'Status',
        'lastExecuteTime' => 'LastExecuteTime',
        'lastExecuteTimestamp' => 'LastExecuteTimestamp',
        'lastRollbackTime' => 'LastRollbackTime',
        'lastRollbackTimestamp' => 'LastRollbackTimestamp',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'faultAddrPools' => 'FaultAddrPools',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('faultAddrPoolNum', $this->faultAddrPoolNum, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('lastExecuteTime', $this->lastExecuteTime, true);
        Model::validateRequired('lastExecuteTimestamp', $this->lastExecuteTimestamp, true);
        Model::validateRequired('lastRollbackTime', $this->lastRollbackTime, true);
        Model::validateRequired('lastRollbackTimestamp', $this->lastRollbackTimestamp, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('faultAddrPools', $this->faultAddrPools, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RecoveryPlanId'] = $this->recoveryPlanId;
        $res['Name'] = $this->name;
        $res['Remark'] = $this->remark;
        $res['FaultAddrPoolNum'] = $this->faultAddrPoolNum;
        $res['Status'] = $this->status;
        $res['LastExecuteTime'] = $this->lastExecuteTime;
        $res['LastExecuteTimestamp'] = $this->lastExecuteTimestamp;
        $res['LastRollbackTime'] = $this->lastRollbackTime;
        $res['LastRollbackTimestamp'] = $this->lastRollbackTimestamp;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['UpdateTime'] = $this->updateTime;
        $res['UpdateTimestamp'] = $this->updateTimestamp;
        $res['FaultAddrPools'] = null !== $this->faultAddrPools ? $this->faultAddrPools->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmRecoveryPlanResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
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
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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
        if(isset($map['FaultAddrPools'])){
            $model->faultAddrPools = faultAddrPools::fromMap($map['FaultAddrPools']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     * @var integer
     */
    public $recoveryPlanId;

    /**
     * @description module.name
     * @var string
     */
    public $name;

    /**
     * @description module.remark
     * @var string
     */
    public $remark;

    /**
     * @description module.faultAddrPoolNum
     * @var integer
     */
    public $faultAddrPoolNum;

    /**
     * @description module.status
     * @var string
     */
    public $status;

    /**
     * @description module.lastExecuteTime
     * @var string
     */
    public $lastExecuteTime;

    /**
     * @description module.lastExecuteTimestamp
     * @var integer
     */
    public $lastExecuteTimestamp;

    /**
     * @description module.lastRollbackTime
     * @var string
     */
    public $lastRollbackTime;

    /**
     * @description module.lastRollbackTimestamp
     * @var integer
     */
    public $lastRollbackTimestamp;

    /**
     * @description module.createTime
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description module.updateTime
     * @var string
     */
    public $updateTime;

    /**
     * @description module.updateTimestamp
     * @var integer
     */
    public $updateTimestamp;

    /**
     * @description module.faultAddrPools
     * @var faultAddrPools
     */
    public $faultAddrPools;

}

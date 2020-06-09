<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmRecoveryPlanRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'recoveryPlanId' => 'RecoveryPlanId',
        'name' => 'Name',
        'remark' => 'Remark',
        'faultAddrPool' => 'FaultAddrPool',
    ];
    public function validate() {
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['RecoveryPlanId'] = $this->recoveryPlanId;
        $res['Name'] = $this->name;
        $res['Remark'] = $this->remark;
        $res['FaultAddrPool'] = $this->faultAddrPool;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateGtmRecoveryPlanRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
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
        if(isset($map['FaultAddrPool'])){
            $model->faultAddrPool = $map['FaultAddrPool'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description recoveryPlanId
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
     * @description faultAddrPool
     * @var string
     */
    public $faultAddrPool;

}

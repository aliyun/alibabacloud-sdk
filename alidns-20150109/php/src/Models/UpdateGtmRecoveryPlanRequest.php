<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmRecoveryPlanRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description recoveryPlanId
     *
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description faultAddrPool
     *
     * @var string
     */
    public $faultAddrPool;
    protected $_name = [
        'lang'           => 'Lang',
        'recoveryPlanId' => 'RecoveryPlanId',
        'name'           => 'Name',
        'remark'         => 'Remark',
        'faultAddrPool'  => 'FaultAddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->faultAddrPool) {
            $res['FaultAddrPool'] = $this->faultAddrPool;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['FaultAddrPool'])) {
            $model->faultAddrPool = $map['FaultAddrPool'];
        }

        return $model;
    }
}

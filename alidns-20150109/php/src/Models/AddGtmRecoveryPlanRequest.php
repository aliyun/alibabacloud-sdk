<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmRecoveryPlanRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

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
        'lang'          => 'Lang',
        'name'          => 'Name',
        'remark'        => 'Remark',
        'faultAddrPool' => 'FaultAddrPool',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('faultAddrPool', $this->faultAddrPool, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
     * @return AddGtmRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

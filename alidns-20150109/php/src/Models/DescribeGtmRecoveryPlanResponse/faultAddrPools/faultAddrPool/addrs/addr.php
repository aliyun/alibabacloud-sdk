<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponse\faultAddrPools\faultAddrPool\addrs;

use AlibabaCloud\Tea\Model;

class addr extends Model {
    protected $_name = [
        'id' => 'Id',
        'mode' => 'Mode',
        'value' => 'Value',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('value', $this->value, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['Mode'] = $this->mode;
        $res['Value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return addr
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Mode'])){
            $model->mode = $map['Mode'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $id;

    /**
     * @description mode
     * @var string
     */
    public $mode;

    /**
     * @description value
     * @var string
     */
    public $value;

}

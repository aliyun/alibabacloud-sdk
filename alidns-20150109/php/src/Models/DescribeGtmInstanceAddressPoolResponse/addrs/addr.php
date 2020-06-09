<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolResponse\addrs;

use AlibabaCloud\Tea\Model;

class addr extends Model {
    protected $_name = [
        'addrId' => 'AddrId',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'value' => 'Value',
        'lbaWeight' => 'LbaWeight',
        'mode' => 'Mode',
        'alertStatus' => 'AlertStatus',
    ];
    public function validate() {
        Model::validateRequired('addrId', $this->addrId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('lbaWeight', $this->lbaWeight, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('alertStatus', $this->alertStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['AddrId'] = $this->addrId;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['UpdateTime'] = $this->updateTime;
        $res['UpdateTimestamp'] = $this->updateTimestamp;
        $res['Value'] = $this->value;
        $res['LbaWeight'] = $this->lbaWeight;
        $res['Mode'] = $this->mode;
        $res['AlertStatus'] = $this->alertStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return addr
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AddrId'])){
            $model->addrId = $map['AddrId'];
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
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['LbaWeight'])){
            $model->lbaWeight = $map['LbaWeight'];
        }
        if(isset($map['Mode'])){
            $model->mode = $map['Mode'];
        }
        if(isset($map['AlertStatus'])){
            $model->alertStatus = $map['AlertStatus'];
        }
        return $model;
    }
    /**
     * @description id
     * @var integer
     */
    public $addrId;

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
     * @description value
     * @var string
     */
    public $value;

    /**
     * @description lbaWeight
     * @var integer
     */
    public $lbaWeight;

    /**
     * @description mode
     * @var string
     */
    public $mode;

    /**
     * @description alertStatus
     * @var string
     */
    public $alertStatus;

}

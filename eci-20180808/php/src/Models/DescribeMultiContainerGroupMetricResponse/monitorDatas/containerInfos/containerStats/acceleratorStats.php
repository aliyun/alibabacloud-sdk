<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class acceleratorStats extends Model {
    protected $_name = [
        'id' => 'Id',
        'make' => 'Make',
        'model' => 'Model',
        'memoryTotal' => 'MemoryTotal',
        'memoryUsed' => 'MemoryUsed',
        'dutyCycle' => 'DutyCycle',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('make', $this->make, true);
        Model::validateRequired('model', $this->model, true);
        Model::validateRequired('memoryTotal', $this->memoryTotal, true);
        Model::validateRequired('memoryUsed', $this->memoryUsed, true);
        Model::validateRequired('dutyCycle', $this->dutyCycle, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['Make'] = $this->make;
        $res['Model'] = $this->model;
        $res['MemoryTotal'] = $this->memoryTotal;
        $res['MemoryUsed'] = $this->memoryUsed;
        $res['DutyCycle'] = $this->dutyCycle;
        return $res;
    }
    /**
     * @param array $map
     * @return acceleratorStats
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Make'])){
            $model->make = $map['Make'];
        }
        if(isset($map['Model'])){
            $model->model = $map['Model'];
        }
        if(isset($map['MemoryTotal'])){
            $model->memoryTotal = $map['MemoryTotal'];
        }
        if(isset($map['MemoryUsed'])){
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if(isset($map['DutyCycle'])){
            $model->dutyCycle = $map['DutyCycle'];
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description make
     * @var string
     */
    public $make;

    /**
     * @description model
     * @var string
     */
    public $model;

    /**
     * @description memoryTotal
     * @var integer
     */
    public $memoryTotal;

    /**
     * @description memoryUsed
     * @var integer
     */
    public $memoryUsed;

    /**
     * @description dutyCycle
     * @var integer
     */
    public $dutyCycle;

}

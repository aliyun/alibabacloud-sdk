<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class acceleratorStats extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description make
     *
     * @var string
     */
    public $make;

    /**
     * @description model
     *
     * @var string
     */
    public $model;

    /**
     * @description memoryTotal
     *
     * @var int
     */
    public $memoryTotal;

    /**
     * @description memoryUsed
     *
     * @var int
     */
    public $memoryUsed;

    /**
     * @description dutyCycle
     *
     * @var int
     */
    public $dutyCycle;
    protected $_name = [
        'id'          => 'Id',
        'make'        => 'Make',
        'model'       => 'Model',
        'memoryTotal' => 'MemoryTotal',
        'memoryUsed'  => 'MemoryUsed',
        'dutyCycle'   => 'DutyCycle',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('make', $this->make, true);
        Model::validateRequired('model', $this->model, true);
        Model::validateRequired('memoryTotal', $this->memoryTotal, true);
        Model::validateRequired('memoryUsed', $this->memoryUsed, true);
        Model::validateRequired('dutyCycle', $this->dutyCycle, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->make) {
            $res['Make'] = $this->make;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->memoryTotal) {
            $res['MemoryTotal'] = $this->memoryTotal;
        }
        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
        }
        if (null !== $this->dutyCycle) {
            $res['DutyCycle'] = $this->dutyCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acceleratorStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Make'])) {
            $model->make = $map['Make'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['MemoryTotal'])) {
            $model->memoryTotal = $map['MemoryTotal'];
        }
        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
        }
        if (isset($map['DutyCycle'])) {
            $model->dutyCycle = $map['DutyCycle'];
        }

        return $model;
    }
}

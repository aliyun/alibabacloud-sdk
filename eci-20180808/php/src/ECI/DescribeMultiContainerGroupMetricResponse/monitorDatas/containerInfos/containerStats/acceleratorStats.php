<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class acceleratorStats extends Model
{
    public $id;
    public $make;
    public $model;
    public $memoryTotal;
    public $memoryUsed;
    public $dutyCycle;
    protected $_required = [
        'id'          => true,
        'make'        => true,
        'model'       => true,
        'memoryTotal' => true,
        'memoryUsed'  => true,
        'dutyCycle'   => true,
    ];
    protected $_name = [
        'id'          => 'Id',
        'make'        => 'Make',
        'model'       => 'Model',
        'memoryTotal' => 'MemoryTotal',
        'memoryUsed'  => 'MemoryUsed',
        'dutyCycle'   => 'DutyCycle',
    ];
    protected $_description = [
        'id'          => 'id',
        'make'        => 'make',
        'model'       => 'model',
        'memoryTotal' => 'memoryTotal',
        'memoryUsed'  => 'memoryUsed',
        'dutyCycle'   => 'dutyCycle',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records;

use AlibabaCloud\Tea\Model;

class containers extends Model
{
    public $name;
    public $CPU;
    public $memory;
    protected $_required = [
        'name'   => true,
        'CPU'    => true,
        'memory' => true,
    ];
    protected $_name = [
        'name'   => 'Name',
        'CPU'    => 'CPU',
        'memory' => 'Memory',
    ];
    protected $_description = [
        'name'   => 'containerName',
        'CPU'    => 'cpuStats',
        'memory' => 'memoryStats',
    ];
}

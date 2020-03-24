<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    public $timestamp;

    public $containers;

    public $CPU;

    public $memory;

    public $network;
    protected $_name = [
        'timestamp'  => 'Timestamp',
        'containers' => 'Containers',
        'CPU'        => 'CPU',
        'memory'     => 'Memory',
        'network'    => 'Network',
    ];
}

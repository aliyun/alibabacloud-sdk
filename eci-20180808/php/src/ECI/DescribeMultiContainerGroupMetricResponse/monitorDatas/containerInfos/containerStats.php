<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos;

use AlibabaCloud\Tea\Model;

class containerStats extends Model
{
    public $timestamp;

    public $fsStats;

    public $acceleratorStats;

    public $cpuStats;

    public $diskIoStats;

    public $memoryStats;

    public $networkStats;

    public $taskStats;
    protected $_name = [
        'timestamp'        => 'Timestamp',
        'fsStats'          => 'FsStats',
        'acceleratorStats' => 'AcceleratorStats',
        'cpuStats'         => 'CpuStats',
        'diskIoStats'      => 'DiskIoStats',
        'memoryStats'      => 'MemoryStats',
        'networkStats'     => 'NetworkStats',
        'taskStats'        => 'TaskStats',
    ];
}

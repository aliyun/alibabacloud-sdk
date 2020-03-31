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
    protected $_required = [
        'timestamp'        => true,
        'fsStats'          => true,
        'acceleratorStats' => true,
        'cpuStats'         => true,
        'diskIoStats'      => true,
        'memoryStats'      => true,
        'networkStats'     => true,
        'taskStats'        => true,
    ];
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
    protected $_description = [
        'timestamp'        => 'timestamp',
        'fsStats'          => 'fsStats',
        'acceleratorStats' => 'acceleratorStats',
        'cpuStats'         => 'cpu',
        'diskIoStats'      => 'diskIo',
        'memoryStats'      => 'memory',
        'networkStats'     => 'network',
        'taskStats'        => 'taskStats',
    ];
}

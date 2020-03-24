<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class memoryStats extends Model
{
    public $usage;

    public $maxUsage;

    public $cache;

    public $rss;

    public $swap;

    public $workingSet;

    public $failCnt;

    public $containerData;

    public $hierarchicalData;
    protected $_name = [
        'usage'            => 'Usage',
        'maxUsage'         => 'MaxUsage',
        'cache'            => 'Cache',
        'rss'              => 'Rss',
        'swap'             => 'Swap',
        'workingSet'       => 'WorkingSet',
        'failCnt'          => 'FailCnt',
        'containerData'    => 'ContainerData',
        'hierarchicalData' => 'HierarchicalData',
    ];
}

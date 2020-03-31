<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class cpuStats extends Model
{
    public $loadAverage;
    public $cpuUsage;
    public $cpuCFS;
    protected $_required = [
        'loadAverage' => true,
        'cpuUsage'    => true,
        'cpuCFS'      => true,
    ];
    protected $_name = [
        'loadAverage' => 'LoadAverage',
        'cpuUsage'    => 'CpuUsage',
        'cpuCFS'      => 'CpuCFS',
    ];
    protected $_description = [
        'loadAverage' => 'loadAverage',
        'cpuUsage'    => 'usage',
        'cpuCFS'      => 'cfs',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuCFS extends Model
{
    public $periods;
    public $throttledPeriods;
    public $throttledTime;
    protected $_required = [
        'periods'          => true,
        'throttledPeriods' => true,
        'throttledTime'    => true,
    ];
    protected $_name = [
        'periods'          => 'Periods',
        'throttledPeriods' => 'ThrottledPeriods',
        'throttledTime'    => 'ThrottledTime',
    ];
    protected $_description = [
        'periods'          => 'periods',
        'throttledPeriods' => 'throttledPeriods',
        'throttledTime'    => 'throttledTime',
    ];
}

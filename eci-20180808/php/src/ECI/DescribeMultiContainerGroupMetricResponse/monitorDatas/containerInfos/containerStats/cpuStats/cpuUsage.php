<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\cpuStats;

use AlibabaCloud\Tea\Model;

class cpuUsage extends Model
{
    public $total;

    public $user;

    public $system;

    public $perCpuUsages;
    protected $_name = [
        'total'        => 'Total',
        'user'         => 'User',
        'system'       => 'System',
        'perCpuUsages' => 'PerCpuUsages',
    ];
}

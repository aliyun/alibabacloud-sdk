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
    protected $_required = [
        'total'        => true,
        'user'         => true,
        'system'       => true,
        'perCpuUsages' => true,
    ];
    protected $_name = [
        'total'        => 'Total',
        'user'         => 'User',
        'system'       => 'System',
        'perCpuUsages' => 'PerCpuUsages',
    ];
    protected $_description = [
        'total'        => 'total',
        'user'         => 'user',
        'system'       => 'system',
        'perCpuUsages' => 'perCpuUsages',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class taskStats extends Model
{
    public $nrSleeping;
    public $nrRunning;
    public $nrStopped;
    public $nrUninterruptible;
    public $nrIoWait;
    protected $_required = [
        'nrSleeping'        => true,
        'nrRunning'         => true,
        'nrStopped'         => true,
        'nrUninterruptible' => true,
        'nrIoWait'          => true,
    ];
    protected $_name = [
        'nrSleeping'        => 'NrSleeping',
        'nrRunning'         => 'NrRunning',
        'nrStopped'         => 'NrStopped',
        'nrUninterruptible' => 'NrUninterruptible',
        'nrIoWait'          => 'NrIoWait',
    ];
    protected $_description = [
        'nrSleeping'        => 'nrSleeping',
        'nrRunning'         => 'nrRunning',
        'nrStopped'         => 'nrStopped',
        'nrUninterruptible' => 'nrUninterruptible',
        'nrIoWait'          => 'nrIoWait',
    ];
}

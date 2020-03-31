<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class udp6 extends Model
{
    public $listen;
    public $dropped;
    public $rxQueued;
    public $txQueued;
    protected $_required = [
        'listen'   => true,
        'dropped'  => true,
        'rxQueued' => true,
        'txQueued' => true,
    ];
    protected $_name = [
        'listen'   => 'Listen',
        'dropped'  => 'Dropped',
        'rxQueued' => 'RxQueued',
        'txQueued' => 'TxQueued',
    ];
    protected $_description = [
        'listen'   => 'listen',
        'dropped'  => 'dropped',
        'rxQueued' => 'rxQueued',
        'txQueued' => 'txQueued',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class interfaceStats extends Model
{
    public $name;

    public $rxBytes;

    public $rxPackets;

    public $rxErrors;

    public $rxDropped;

    public $txBytes;

    public $txPackets;

    public $txDropped;

    public $txErrors;
    protected $_name = [
        'name'      => 'Name',
        'rxBytes'   => 'RxBytes',
        'rxPackets' => 'RxPackets',
        'rxErrors'  => 'RxErrors',
        'rxDropped' => 'RxDropped',
        'txBytes'   => 'TxBytes',
        'txPackets' => 'TxPackets',
        'txDropped' => 'TxDropped',
        'txErrors'  => 'TxErrors',
    ];
}

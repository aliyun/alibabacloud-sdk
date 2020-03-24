<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class networkStats extends Model
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

    public $interfaceStats;

    public $tcp;

    public $tcp6;

    public $udp;

    public $udp6;
    protected $_name = [
        'name'           => 'Name',
        'rxBytes'        => 'RxBytes',
        'rxPackets'      => 'RxPackets',
        'rxErrors'       => 'RxErrors',
        'rxDropped'      => 'RxDropped',
        'txBytes'        => 'TxBytes',
        'txPackets'      => 'TxPackets',
        'txDropped'      => 'TxDropped',
        'txErrors'       => 'TxErrors',
        'interfaceStats' => 'InterfaceStats',
        'tcp'            => 'Tcp',
        'tcp6'           => 'Tcp6',
        'udp'            => 'Udp',
        'udp6'           => 'Udp6',
    ];
}

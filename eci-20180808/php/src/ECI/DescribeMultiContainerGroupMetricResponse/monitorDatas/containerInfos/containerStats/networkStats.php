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
    protected $_required = [
        'name'           => true,
        'rxBytes'        => true,
        'rxPackets'      => true,
        'rxErrors'       => true,
        'rxDropped'      => true,
        'txBytes'        => true,
        'txPackets'      => true,
        'txDropped'      => true,
        'txErrors'       => true,
        'interfaceStats' => true,
        'tcp'            => true,
        'tcp6'           => true,
        'udp'            => true,
        'udp6'           => true,
    ];
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
    protected $_description = [
        'name'           => 'name',
        'rxBytes'        => 'rxBytes',
        'rxPackets'      => 'rxPackets',
        'rxErrors'       => 'rxErrors',
        'rxDropped'      => 'rxDropped',
        'txBytes'        => 'txBytes',
        'txPackets'      => 'txPackets',
        'txDropped'      => 'txDropped',
        'txErrors'       => 'txErrors',
        'interfaceStats' => 'interfaceStats',
        'tcp'            => 'tcp',
        'tcp6'           => 'tcp6',
        'udp'            => 'udp',
        'udp6'           => 'udp6',
    ];
}

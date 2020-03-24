<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\networkStats;

use AlibabaCloud\Tea\Model;

class tcp extends Model
{
    public $established;

    public $synSent;

    public $synRecv;

    public $finWait1;

    public $finWait2;

    public $timeWait;

    public $close;

    public $closeWait;

    public $lastAck;

    public $listen;

    public $closing;
    protected $_name = [
        'established' => 'Established',
        'synSent'     => 'SynSent',
        'synRecv'     => 'SynRecv',
        'finWait1'    => 'FinWait1',
        'finWait2'    => 'FinWait2',
        'timeWait'    => 'TimeWait',
        'close'       => 'Close',
        'closeWait'   => 'CloseWait',
        'lastAck'     => 'LastAck',
        'listen'      => 'Listen',
        'closing'     => 'Closing',
    ];
}

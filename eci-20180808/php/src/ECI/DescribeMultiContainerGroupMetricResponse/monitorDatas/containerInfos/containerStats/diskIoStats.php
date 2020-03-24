<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class diskIoStats extends Model
{
    public $ioServiceBytes;

    public $ioServiced;

    public $ioQueued;

    public $sectors;

    public $ioServiceTime;

    public $ioWaitTime;

    public $ioMerged;

    public $ioTime;
    protected $_name = [
        'ioServiceBytes' => 'IoServiceBytes',
        'ioServiced'     => 'IoServiced',
        'ioQueued'       => 'IoQueued',
        'sectors'        => 'Sectors',
        'ioServiceTime'  => 'IoServiceTime',
        'ioWaitTime'     => 'IoWaitTime',
        'ioMerged'       => 'IoMerged',
        'ioTime'         => 'IoTime',
    ];
}

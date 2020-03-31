<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\memoryStats;

use AlibabaCloud\Tea\Model;

class hierarchicalData extends Model
{
    public $pgFault;
    public $pgmajFault;
    protected $_required = [
        'pgFault'    => true,
        'pgmajFault' => true,
    ];
    protected $_name = [
        'pgFault'    => 'PgFault',
        'pgmajFault' => 'PgmajFault',
    ];
    protected $_description = [
        'pgFault'    => 'pgFault',
        'pgmajFault' => 'pgmajFault',
    ];
}

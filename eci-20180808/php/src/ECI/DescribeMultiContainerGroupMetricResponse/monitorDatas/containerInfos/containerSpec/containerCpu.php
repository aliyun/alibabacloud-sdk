<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerCpu extends Model
{
    public $limit;
    public $maxLimit;
    public $mask;
    public $quota;
    public $period;
    protected $_required = [
        'limit'    => true,
        'maxLimit' => true,
        'mask'     => true,
        'quota'    => true,
        'period'   => true,
    ];
    protected $_name = [
        'limit'    => 'Limit',
        'maxLimit' => 'MaxLimit',
        'mask'     => 'Mask',
        'quota'    => 'Quota',
        'period'   => 'Period',
    ];
    protected $_description = [
        'limit'    => 'limit',
        'maxLimit' => 'maxLimit',
        'mask'     => 'mask',
        'quota'    => 'quota',
        'period'   => 'period',
    ];
}

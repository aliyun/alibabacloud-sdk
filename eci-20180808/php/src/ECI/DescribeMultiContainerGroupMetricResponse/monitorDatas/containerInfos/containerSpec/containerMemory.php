<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerMemory extends Model
{
    public $limit;
    public $reservation;
    public $swapLimit;
    protected $_required = [
        'limit'       => true,
        'reservation' => true,
        'swapLimit'   => true,
    ];
    protected $_name = [
        'limit'       => 'Limit',
        'reservation' => 'Reservation',
        'swapLimit'   => 'SwapLimit',
    ];
    protected $_description = [
        'limit'       => 'limit',
        'reservation' => 'reservation',
        'swapLimit'   => 'swapLimit',
    ];
}

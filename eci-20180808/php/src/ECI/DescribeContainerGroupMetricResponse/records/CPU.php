<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    public $usageNanoCores;

    public $usageCoreNanoSeconds;

    public $load;

    public $limit;
    protected $_name = [
        'usageNanoCores'       => 'UsageNanoCores',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'load'                 => 'Load',
        'limit'                => 'Limit',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    public $usageNanoCores;
    public $usageCoreNanoSeconds;
    public $load;
    public $limit;
    protected $_required = [
        'usageNanoCores'       => true,
        'usageCoreNanoSeconds' => true,
        'load'                 => true,
        'limit'                => true,
    ];
    protected $_name = [
        'usageNanoCores'       => 'UsageNanoCores',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'load'                 => 'Load',
        'limit'                => 'Limit',
    ];
    protected $_description = [
        'usageNanoCores'       => 'usageNanoCores',
        'usageCoreNanoSeconds' => 'usageCoreNanoSeconds',
        'load'                 => 'load',
        'limit'                => 'limit',
    ];
}

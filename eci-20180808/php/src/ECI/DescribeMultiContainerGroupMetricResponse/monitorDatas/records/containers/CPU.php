<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\containers;

use AlibabaCloud\Tea\Model;

class CPU extends Model
{
    public $limit;
    public $load;
    public $usageCoreNanoSeconds;
    public $usageNanoCores;
    protected $_required = [
        'limit'                => true,
        'load'                 => true,
        'usageCoreNanoSeconds' => true,
        'usageNanoCores'       => true,
    ];
    protected $_name = [
        'limit'                => 'Limit',
        'load'                 => 'Load',
        'usageCoreNanoSeconds' => 'UsageCoreNanoSeconds',
        'usageNanoCores'       => 'UsageNanoCores',
    ];
    protected $_description = [
        'limit'                => 'limit',
        'load'                 => 'load',
        'usageCoreNanoSeconds' => 'usageCoreNanoSeconds',
        'usageNanoCores'       => 'usageNanoCores',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupMetricResponse\records\containers;

use AlibabaCloud\Tea\Model;

class memory extends Model
{
    public $availableBytes;
    public $usageBytes;
    public $cache;
    public $workingSet;
    public $rss;
    protected $_required = [
        'availableBytes' => true,
        'usageBytes'     => true,
        'cache'          => true,
        'workingSet'     => true,
        'rss'            => true,
    ];
    protected $_name = [
        'availableBytes' => 'AvailableBytes',
        'usageBytes'     => 'UsageBytes',
        'cache'          => 'Cache',
        'workingSet'     => 'WorkingSet',
        'rss'            => 'Rss',
    ];
    protected $_description = [
        'availableBytes' => 'availableBytes',
        'usageBytes'     => 'usageBytes',
        'cache'          => 'cache',
        'workingSet'     => 'workingSet',
        'rss'            => 'rss',
    ];
}

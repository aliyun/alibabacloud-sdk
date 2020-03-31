<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeRegionsResponse;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    public $regionId;
    public $regionEndpoint;
    public $zones;
    protected $_required = [
        'regionId'       => true,
        'regionEndpoint' => true,
        'zones'          => true,
    ];
    protected $_name = [
        'regionId'       => 'RegionId',
        'regionEndpoint' => 'RegionEndpoint',
        'zones'          => 'Zones',
    ];
    protected $_description = [
        'regionId'       => 'id',
        'regionEndpoint' => 'endpoint',
        'zones'          => 'zones',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeRegionsResponse extends Model
{
    public $requestId;
    public $regions;
    protected $_required = [
        'requestId' => true,
        'regions'   => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'regions'   => 'Regions',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'regions'   => 'data',
    ];
}

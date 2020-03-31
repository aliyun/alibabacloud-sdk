<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupsResponse extends Model
{
    public $requestId;
    public $nextToken;
    public $totalCount;
    public $containerGroups;
    protected $_required = [
        'requestId'       => true,
        'nextToken'       => true,
        'totalCount'      => true,
        'containerGroups' => true,
    ];
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextToken'       => 'NextToken',
        'totalCount'      => 'TotalCount',
        'containerGroups' => 'ContainerGroups',
    ];
    protected $_description = [
        'requestId'       => 'requestId',
        'nextToken'       => 'data.nextToken',
        'totalCount'      => 'data.totalCount',
        'containerGroups' => 'data.data',
    ];
}

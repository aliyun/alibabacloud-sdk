<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups;

use AlibabaCloud\Tea\Model;

class hostAliases extends Model
{
    public $ip;
    public $hostnames;
    protected $_required = [
        'ip'        => true,
        'hostnames' => true,
    ];
    protected $_name = [
        'ip'        => 'Ip',
        'hostnames' => 'Hostnames',
    ];
    protected $_description = [
        'ip'        => 'ip',
        'hostnames' => 'hostnames',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\eciSecurityContext;

use AlibabaCloud\Tea\Model;

class sysctls extends Model
{
    public $name;
    public $value;
    protected $_required = [
        'name'  => true,
        'value' => true,
    ];
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];
    protected $_description = [
        'name'  => 'name',
        'value' => 'value',
    ];
}

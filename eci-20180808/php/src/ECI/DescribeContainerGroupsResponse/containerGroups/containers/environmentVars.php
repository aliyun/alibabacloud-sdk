<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class environmentVars extends Model
{
    public $key;
    public $value;
    public $valueFrom;
    protected $_required = [
        'key'       => true,
        'value'     => true,
        'valueFrom' => true,
    ];
    protected $_name = [
        'key'       => 'Key',
        'value'     => 'Value',
        'valueFrom' => 'ValueFrom',
    ];
    protected $_description = [
        'key'       => 'key',
        'value'     => 'value',
        'valueFrom' => 'valueFrom',
    ];
}

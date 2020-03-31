<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class hostAliase extends Model
{
    public $ip;
    public $hostname;
    protected $_name = [
        'ip'       => 'Ip',
        'hostname' => 'Hostname',
    ];
    protected $_description = [
        'ip'       => 'ip',
        'hostname' => 'hostnames',
    ];
    protected $_required = [
        'hostname' => true,
    ];
}

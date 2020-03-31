<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model
{
    public $host;
    public $port;
    protected $_required = [
        'host' => true,
        'port' => true,
    ];
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];
    protected $_description = [
        'host' => 'host',
        'port' => 'port',
    ];
}

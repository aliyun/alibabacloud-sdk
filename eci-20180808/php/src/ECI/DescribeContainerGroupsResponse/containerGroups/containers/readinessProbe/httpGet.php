<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    public $path;
    public $port;
    public $scheme;
    protected $_required = [
        'path'   => true,
        'port'   => true,
        'scheme' => true,
    ];
    protected $_name = [
        'path'   => 'Path',
        'port'   => 'Port',
        'scheme' => 'Scheme',
    ];
    protected $_description = [
        'path'   => 'path',
        'port'   => 'port',
        'scheme' => 'scheme',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\UpdateContainerGroupRequest\container\livenessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    public $path;
    public $port;
    public $scheme;
    protected $_name = [
        'path'   => 'Path',
        'port'   => 'Port',
        'scheme' => 'Scheme',
    ];
    protected $_description = [
        'path'   => 'livenessProbeHttpGetPath',
        'port'   => 'livenessProbeHttpGetPort',
        'scheme' => 'livenessProbeHttpGetScheme',
    ];
}

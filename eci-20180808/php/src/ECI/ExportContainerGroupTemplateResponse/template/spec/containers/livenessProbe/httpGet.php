<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers\livenessProbe;

use AlibabaCloud\Tea\Model;

class httpGet extends Model
{
    public $scheme;
    public $path;
    public $port;
    protected $_required = [
        'scheme' => true,
        'path'   => true,
        'port'   => true,
    ];
    protected $_name = [
        'scheme' => 'Scheme',
        'path'   => 'Path',
        'port'   => 'Port',
    ];
    protected $_description = [
        'scheme' => 'scheme',
        'path'   => 'path',
        'port'   => 'port',
    ];
}

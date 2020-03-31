<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\volumes;

use AlibabaCloud\Tea\Model;

class nfs extends Model
{
    public $server;
    public $path;
    public $readOnly;
    protected $_required = [
        'server'   => true,
        'path'     => true,
        'readOnly' => true,
    ];
    protected $_name = [
        'server'   => 'Server',
        'path'     => 'Path',
        'readOnly' => 'ReadOnly',
    ];
    protected $_description = [
        'server'   => 'server',
        'path'     => 'path',
        'readOnly' => 'readOnly',
    ];
}

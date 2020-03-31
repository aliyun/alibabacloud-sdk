<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    public $cpu;
    public $memory;
    protected $_required = [
        'cpu'    => true,
        'memory' => true,
    ];
    protected $_name = [
        'cpu'    => 'Cpu',
        'memory' => 'Memory',
    ];
    protected $_description = [
        'cpu'    => 'bigCpuForPop',
        'memory' => 'bigMemForPop',
    ];
}

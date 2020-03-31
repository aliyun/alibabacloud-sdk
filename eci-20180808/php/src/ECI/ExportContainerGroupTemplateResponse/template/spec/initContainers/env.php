<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\initContainers;

use AlibabaCloud\Tea\Model;

class env extends Model
{
    public $name;
    public $value;
    public $valueFrom;
    protected $_required = [
        'name'      => true,
        'value'     => true,
        'valueFrom' => true,
    ];
    protected $_name = [
        'name'      => 'Name',
        'value'     => 'Value',
        'valueFrom' => 'ValueFrom',
    ];
    protected $_description = [
        'name'      => 'key',
        'value'     => 'value',
        'valueFrom' => 'valueFrom',
    ];
}

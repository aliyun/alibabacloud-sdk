<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\ExportContainerGroupTemplateResponse\template\spec\containers;

use AlibabaCloud\Tea\Model;

class ports extends Model
{
    public $name;
    public $protocol;
    public $containerPort;
    protected $_required = [
        'name'          => true,
        'protocol'      => true,
        'containerPort' => true,
    ];
    protected $_name = [
        'name'          => 'Name',
        'protocol'      => 'Protocol',
        'containerPort' => 'ContainerPort',
    ];
    protected $_description = [
        'name'          => 'name',
        'protocol'      => 'protocol',
        'containerPort' => 'port',
    ];
}

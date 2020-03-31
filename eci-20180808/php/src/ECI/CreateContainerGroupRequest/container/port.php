<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class port extends Model
{
    public $protocol;
    public $port;
    protected $_required = [
        'protocol' => true,
        'port'     => true,
    ];
    protected $_name = [
        'protocol' => 'Protocol',
        'port'     => 'Port',
    ];
    protected $_description = [
        'protocol' => 'protocol',
        'port'     => 'port',
    ];
}

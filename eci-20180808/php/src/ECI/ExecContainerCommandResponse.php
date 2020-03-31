<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandResponse extends Model
{
    public $requestId;
    public $webSocketUri;
    protected $_required = [
        'requestId'    => true,
        'webSocketUri' => true,
    ];
    protected $_name = [
        'requestId'    => 'RequestId',
        'webSocketUri' => 'WebSocketUri',
    ];
    protected $_description = [
        'requestId'    => 'requestId',
        'webSocketUri' => 'data',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class CreateContainerGroupFromTemplateResponse extends Model
{
    public $requestId;
    public $containerGroupId;
    protected $_required = [
        'requestId'        => true,
        'containerGroupId' => true,
    ];
    protected $_name = [
        'requestId'        => 'RequestId',
        'containerGroupId' => 'ContainerGroupId',
    ];
    protected $_description = [
        'requestId'        => 'requestId',
        'containerGroupId' => 'data.containerGroupId',
    ];
}

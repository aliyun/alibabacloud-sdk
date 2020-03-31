<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogResponse extends Model
{
    public $requestId;
    public $containerName;
    public $content;
    protected $_required = [
        'requestId'     => true,
        'containerName' => true,
        'content'       => true,
    ];
    protected $_name = [
        'requestId'     => 'RequestId',
        'containerName' => 'ContainerName',
        'content'       => 'Content',
    ];
    protected $_description = [
        'requestId'     => 'requestId',
        'containerName' => 'data.containerName',
        'content'       => 'data.log',
    ];
}

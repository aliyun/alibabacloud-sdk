<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class CreateImageCacheResponse extends Model
{
    public $requestId;
    public $imageCacheId;
    public $containerGroupId;
    protected $_required = [
        'requestId'        => true,
        'imageCacheId'     => true,
        'containerGroupId' => true,
    ];
    protected $_name = [
        'requestId'        => 'RequestId',
        'imageCacheId'     => 'ImageCacheId',
        'containerGroupId' => 'ContainerGroupId',
    ];
    protected $_description = [
        'requestId'        => 'requestId',
        'imageCacheId'     => 'data.imageCacheId',
        'containerGroupId' => 'data.containerGroupId',
    ];
}

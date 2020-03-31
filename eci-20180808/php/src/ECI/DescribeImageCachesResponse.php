<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeImageCachesResponse extends Model
{
    public $requestId;
    public $imageCaches;
    protected $_required = [
        'requestId'   => true,
        'imageCaches' => true,
    ];
    protected $_name = [
        'requestId'   => 'RequestId',
        'imageCaches' => 'ImageCaches',
    ];
    protected $_description = [
        'requestId'   => 'requestId',
        'imageCaches' => 'data',
    ];
}

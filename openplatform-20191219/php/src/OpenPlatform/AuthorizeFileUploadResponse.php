<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;

use AlibabaCloud\Tea\Model;

class AuthorizeFileUploadResponse extends Model
{
    public $accessKeyId;

    public $bucket;

    public $encodedPolicy;

    public $endpoint;

    public $objectKey;

    public $requestId;

    public $signature;

    public $useAccelerate;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'bucket'        => 'Bucket',
        'encodedPolicy' => 'EncodedPolicy',
        'endpoint'      => 'Endpoint',
        'objectKey'     => 'ObjectKey',
        'requestId'     => 'RequestId',
        'signature'     => 'Signature',
        'useAccelerate' => 'UseAccelerate',
    ];
}

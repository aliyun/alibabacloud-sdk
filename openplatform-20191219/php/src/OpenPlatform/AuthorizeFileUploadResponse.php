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
    protected $_required = [
        'accessKeyId'   => true,
        'bucket'        => true,
        'encodedPolicy' => true,
        'endpoint'      => true,
        'objectKey'     => true,
        'requestId'     => true,
        'signature'     => true,
        'useAccelerate' => true,
    ];
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
    protected $_description = [
        'accessKeyId'   => 'data.accessKeyId',
        'bucket'        => 'data.bucket',
        'encodedPolicy' => 'data.encodedPolicy',
        'endpoint'      => 'data.endpoint',
        'objectKey'     => 'data.objectKey',
        'requestId'     => 'requestId',
        'signature'     => 'data.signature',
        'useAccelerate' => 'data.useAccelerate',
    ];
}

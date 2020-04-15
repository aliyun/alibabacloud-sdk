<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeKeyResponse\keyMetadata;
use AlibabaCloud\Tea\Model;

class DescribeKeyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    /**
     * @description keyMetadataResponse
     *
     * @var DescribeKeyResponse.keyMetadata
     */
    public $keyMetadata;
    protected $_name = [
        'requestId'   => 'RequestId',
        'keyMetadata' => 'KeyMetadata',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('keyMetadata', $this->keyMetadata, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['RequestId']   = $this->requestId;
        $res['KeyMetadata'] = null !== $this->keyMetadata ? $this->keyMetadata->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKeyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['KeyMetadata'])) {
            $model->keyMetadata = DescribeKeyResponse\keyMetadata::fromMap($map['KeyMetadata']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponse\accessKey;
use AlibabaCloud\Tea\Model;

class CreateAccessKeyResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description AccessKey
     *
     * @var accessKey
     */
    public $accessKey;
    protected $_name = [
        'requestId' => 'RequestId',
        'accessKey' => 'AccessKey',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessKey', $this->accessKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = null !== $this->accessKey ? $this->accessKey->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessKeyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = accessKey::fromMap($map['AccessKey']);
        }

        return $model;
    }
}

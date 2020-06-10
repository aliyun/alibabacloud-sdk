<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponse\accessKeyLastUsed;
use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description AccessKeyLastUsed
     *
     * @var accessKeyLastUsed
     */
    public $accessKeyLastUsed;
    protected $_name = [
        'requestId'         => 'RequestId',
        'accessKeyLastUsed' => 'AccessKeyLastUsed',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessKeyLastUsed', $this->accessKeyLastUsed, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessKeyLastUsed) {
            $res['AccessKeyLastUsed'] = null !== $this->accessKeyLastUsed ? $this->accessKeyLastUsed->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessKeyLastUsed'])) {
            $model->accessKeyLastUsed = accessKeyLastUsed::fromMap($map['AccessKeyLastUsed']);
        }

        return $model;
    }
}

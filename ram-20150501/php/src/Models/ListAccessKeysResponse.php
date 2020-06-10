<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListAccessKeysResponse\accessKeys;
use AlibabaCloud\Tea\Model;

class ListAccessKeysResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description AccessKeys
     *
     * @var accessKeys
     */
    public $accessKeys;
    protected $_name = [
        'requestId'  => 'RequestId',
        'accessKeys' => 'AccessKeys',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessKeys', $this->accessKeys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accessKeys) {
            $res['AccessKeys'] = null !== $this->accessKeys ? $this->accessKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessKeysResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccessKeys'])) {
            $model->accessKeys = accessKeys::fromMap($map['AccessKeys']);
        }

        return $model;
    }
}

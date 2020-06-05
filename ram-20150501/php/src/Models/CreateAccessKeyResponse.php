<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateAccessKeyResponse\accessKey;

class CreateAccessKeyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'accessKey' => 'AccessKey',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessKey', $this->accessKey, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AccessKey'] = null !== $this->accessKey ? $this->accessKey->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAccessKeyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AccessKey'])){
            $model->accessKey = accessKey::fromMap($map['AccessKey']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description AccessKey
     * @var accessKey
     */
    public $accessKey;

}

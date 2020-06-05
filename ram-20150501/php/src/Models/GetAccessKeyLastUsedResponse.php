<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetAccessKeyLastUsedResponse\accessKeyLastUsed;

class GetAccessKeyLastUsedResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'accessKeyLastUsed' => 'AccessKeyLastUsed',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessKeyLastUsed', $this->accessKeyLastUsed, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AccessKeyLastUsed'] = null !== $this->accessKeyLastUsed ? $this->accessKeyLastUsed->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAccessKeyLastUsedResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AccessKeyLastUsed'])){
            $model->accessKeyLastUsed = accessKeyLastUsed::fromMap($map['AccessKeyLastUsed']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description AccessKeyLastUsed
     * @var accessKeyLastUsed
     */
    public $accessKeyLastUsed;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainOfDnsProductResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'originalDomain' => 'OriginalDomain',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('originalDomain', $this->originalDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['OriginalDomain'] = $this->originalDomain;
        return $res;
    }
    /**
     * @param array $map
     * @return ChangeDomainOfDnsProductResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['OriginalDomain'])){
            $model->originalDomain = $map['OriginalDomain'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var string
     */
    public $originalDomain;

}

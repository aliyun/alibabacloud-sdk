<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class GetAccountAliasResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'accountAlias' => 'AccountAlias',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accountAlias', $this->accountAlias, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AccountAlias'] = $this->accountAlias;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAccountAliasResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AccountAlias'])){
            $model->accountAlias = $map['AccountAlias'];
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description AccountAlias
     * @var string
     */
    public $accountAlias;

}

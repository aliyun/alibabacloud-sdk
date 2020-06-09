<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessRuleResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'accessRuleId' => 'AccessRuleId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accessRuleId', $this->accessRuleId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AccessRuleId'] = $this->accessRuleId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAccessRuleResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AccessRuleId'])){
            $model->accessRuleId = $map['AccessRuleId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data
     * @var string
     */
    public $accessRuleId;

}

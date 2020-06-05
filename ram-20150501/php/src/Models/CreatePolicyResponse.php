<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyResponse\policy;

class CreatePolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policy' => 'Policy',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policy', $this->policy, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreatePolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Policy'])){
            $model->policy = policy::fromMap($map['Policy']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description Policy
     * @var policy
     */
    public $policy;

}

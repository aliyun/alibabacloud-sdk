<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyVersionResponse\policyVersion;

class GetPolicyVersionResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policyVersion' => 'PolicyVersion',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policyVersion', $this->policyVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PolicyVersion'] = null !== $this->policyVersion ? $this->policyVersion->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPolicyVersionResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PolicyVersion'])){
            $model->policyVersion = policyVersion::fromMap($map['PolicyVersion']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description PolicyVersion
     * @var policyVersion
     */
    public $policyVersion;

}

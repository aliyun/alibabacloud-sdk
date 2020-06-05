<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse\policy;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse\defaultPolicyVersion;

class GetPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'policy' => 'Policy',
        'defaultPolicyVersion' => 'DefaultPolicyVersion',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('defaultPolicyVersion', $this->defaultPolicyVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        $res['DefaultPolicyVersion'] = null !== $this->defaultPolicyVersion ? $this->defaultPolicyVersion->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Policy'])){
            $model->policy = policy::fromMap($map['Policy']);
        }
        if(isset($map['DefaultPolicyVersion'])){
            $model->defaultPolicyVersion = defaultPolicyVersion::fromMap($map['DefaultPolicyVersion']);
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

    /**
     * @description DefaultPolicyVersion
     * @var defaultPolicyVersion
     */
    public $defaultPolicyVersion;

}

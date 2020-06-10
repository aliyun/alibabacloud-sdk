<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse\defaultPolicyVersion;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponse\policy;
use AlibabaCloud\Tea\Model;

class GetPolicyResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Policy
     *
     * @var policy
     */
    public $policy;

    /**
     * @description DefaultPolicyVersion
     *
     * @var defaultPolicyVersion
     */
    public $defaultPolicyVersion;
    protected $_name = [
        'requestId'            => 'RequestId',
        'policy'               => 'Policy',
        'defaultPolicyVersion' => 'DefaultPolicyVersion',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('defaultPolicyVersion', $this->defaultPolicyVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->defaultPolicyVersion) {
            $res['DefaultPolicyVersion'] = null !== $this->defaultPolicyVersion ? $this->defaultPolicyVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }
        if (isset($map['DefaultPolicyVersion'])) {
            $model->defaultPolicyVersion = defaultPolicyVersion::fromMap($map['DefaultPolicyVersion']);
        }

        return $model;
    }
}

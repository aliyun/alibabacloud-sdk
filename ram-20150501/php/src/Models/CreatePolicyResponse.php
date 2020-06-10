<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyResponse\policy;
use AlibabaCloud\Tea\Model;

class CreatePolicyResponse extends Model
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
    protected $_name = [
        'requestId' => 'RequestId',
        'policy'    => 'Policy',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policy', $this->policy, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyResponse
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

        return $model;
    }
}

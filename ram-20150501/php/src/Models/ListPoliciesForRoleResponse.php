<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleResponse\policies;
use AlibabaCloud\Tea\Model;

class ListPoliciesForRoleResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Policies
     *
     * @var policies
     */
    public $policies;
    protected $_name = [
        'requestId' => 'RequestId',
        'policies'  => 'Policies',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policies', $this->policies, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPoliciesForRoleResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }

        return $model;
    }
}

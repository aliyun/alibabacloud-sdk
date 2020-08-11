<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse\invocation;
use AlibabaCloud\Tea\Model;

class DescribeInvocationResultsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var invocation
     */
    public $invocation;
    protected $_name = [
        'requestId'  => 'RequestId',
        'invocation' => 'Invocation',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('invocation', $this->invocation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invocation) {
            $res['Invocation'] = null !== $this->invocation ? $this->invocation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationResultsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Invocation'])) {
            $model->invocation = invocation::fromMap($map['Invocation']);
        }

        return $model;
    }
}

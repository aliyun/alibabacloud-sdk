<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse\invocation;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse\invocation\invocationResults\invocationResult;
use AlibabaCloud\Tea\Model;

class invocationResults extends Model
{
    /**
     * @description InvocationResult
     *
     * @var array
     */
    public $invocationResult;
    protected $_name = [
        'invocationResult' => 'InvocationResult',
    ];

    public function validate()
    {
        Model::validateRequired('invocationResult', $this->invocationResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invocationResult) {
            $res['InvocationResult'] = [];
            if (null !== $this->invocationResult && \is_array($this->invocationResult)) {
                $n = 0;
                foreach ($this->invocationResult as $item) {
                    $res['InvocationResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvocationResult'])) {
            if (!empty($map['InvocationResult'])) {
                $model->invocationResult = [];
                $n                       = 0;
                foreach ($map['InvocationResult'] as $item) {
                    $model->invocationResult[$n++] = null !== $item ? invocationResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

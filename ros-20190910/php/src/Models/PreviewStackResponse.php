<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponse\stack;
use AlibabaCloud\Tea\Model;

class PreviewStackResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Stack
     *
     * @var stack
     */
    public $stack;
    protected $_name = [
        'requestId' => 'RequestId',
        'stack'     => 'Stack',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stack', $this->stack, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Stack']     = null !== $this->stack ? $this->stack->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreviewStackResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stack'])) {
            $model->stack = stack::fromMap($map['Stack']);
        }

        return $model;
    }
}

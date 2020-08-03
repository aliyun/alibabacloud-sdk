<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponse\stackGroupOperation;
use AlibabaCloud\Tea\Model;

class GetStackGroupOperationResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackGroupOperation
     */
    public $stackGroupOperation;
    protected $_name = [
        'requestId'           => 'RequestId',
        'stackGroupOperation' => 'StackGroupOperation',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackGroupOperation', $this->stackGroupOperation, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackGroupOperation) {
            $res['StackGroupOperation'] = null !== $this->stackGroupOperation ? $this->stackGroupOperation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupOperationResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackGroupOperation'])) {
            $model->stackGroupOperation = stackGroupOperation::fromMap($map['StackGroupOperation']);
        }

        return $model;
    }
}

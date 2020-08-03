<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponse\stackInstance;
use AlibabaCloud\Tea\Model;

class GetStackInstanceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stackInstance
     */
    public $stackInstance;
    protected $_name = [
        'requestId'     => 'RequestId',
        'stackInstance' => 'StackInstance',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackInstance', $this->stackInstance, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackInstance) {
            $res['StackInstance'] = null !== $this->stackInstance ? $this->stackInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackInstanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInstance'])) {
            $model->stackInstance = stackInstance::fromMap($map['StackInstance']);
        }

        return $model;
    }
}

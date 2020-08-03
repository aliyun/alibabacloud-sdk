<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ContinueCreateStackResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackId'   => 'StackId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackId', $this->stackId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContinueCreateStackResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}

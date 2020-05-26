<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackGroupDriftResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description OperationId
     *
     * @var string
     */
    public $operationId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'operationId' => 'OperationId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('operationId', $this->operationId, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['RequestId']   = $this->requestId;
        $res['OperationId'] = $this->operationId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackGroupDriftResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }

        return $model;
    }
}

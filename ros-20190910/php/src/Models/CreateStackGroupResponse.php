<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateStackGroupResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description StackGroupId
     *
     * @var string
     */
    public $stackGroupId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'stackGroupId' => 'StackGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackGroupId', $this->stackGroupId, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['RequestId']    = $this->requestId;
        $res['StackGroupId'] = $this->stackGroupId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }

        return $model;
    }
}

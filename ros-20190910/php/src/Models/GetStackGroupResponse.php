<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponse\stackGroup;
use AlibabaCloud\Tea\Model;

class GetStackGroupResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description StackGroup
     *
     * @var stackGroup
     */
    public $stackGroup;
    protected $_name = [
        'requestId'  => 'RequestId',
        'stackGroup' => 'StackGroup',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackGroup', $this->stackGroup, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['RequestId']  = $this->requestId;
        $res['StackGroup'] = null !== $this->stackGroup ? $this->stackGroup->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackGroup'])) {
            $model->stackGroup = stackGroup::fromMap($map['StackGroup']);
        }

        return $model;
    }
}

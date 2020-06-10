<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.paramGroup
     *
     * @var paramGroup
     */
    public $paramGroup;
    protected $_name = [
        'requestId'  => 'RequestId',
        'paramGroup' => 'ParamGroup',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('paramGroup', $this->paramGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->paramGroup) {
            $res['ParamGroup'] = null !== $this->paramGroup ? $this->paramGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ParamGroup'])) {
            $model->paramGroup = paramGroup::fromMap($map['ParamGroup']);
        }

        return $model;
    }
}

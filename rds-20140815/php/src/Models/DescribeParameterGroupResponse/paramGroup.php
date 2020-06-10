<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup\parameterGroup;
use AlibabaCloud\Tea\Model;

class paramGroup extends Model
{
    /**
     * @description ParameterGroup
     *
     * @var array
     */
    public $parameterGroup;
    protected $_name = [
        'parameterGroup' => 'ParameterGroup',
    ];

    public function validate()
    {
        Model::validateRequired('parameterGroup', $this->parameterGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroup) {
            $res['ParameterGroup'] = [];
            if (null !== $this->parameterGroup && \is_array($this->parameterGroup)) {
                $n = 0;
                foreach ($this->parameterGroup as $item) {
                    $res['ParameterGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroup'])) {
            if (!empty($map['ParameterGroup'])) {
                $model->parameterGroup = [];
                $n                     = 0;
                foreach ($map['ParameterGroup'] as $item) {
                    $model->parameterGroup[$n++] = null !== $item ? parameterGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

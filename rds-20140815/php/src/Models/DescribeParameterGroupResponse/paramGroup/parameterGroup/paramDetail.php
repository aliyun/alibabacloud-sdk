<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup\parameterGroup;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponse\paramGroup\parameterGroup\paramDetail\parameterDetail;
use AlibabaCloud\Tea\Model;

class paramDetail extends Model
{
    /**
     * @description ParameterDetail
     *
     * @var array
     */
    public $parameterDetail;
    protected $_name = [
        'parameterDetail' => 'ParameterDetail',
    ];

    public function validate()
    {
        Model::validateRequired('parameterDetail', $this->parameterDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterDetail) {
            $res['ParameterDetail'] = [];
            if (null !== $this->parameterDetail && \is_array($this->parameterDetail)) {
                $n = 0;
                foreach ($this->parameterDetail as $item) {
                    $res['ParameterDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterDetail'])) {
            if (!empty($map['ParameterDetail'])) {
                $model->parameterDetail = [];
                $n                      = 0;
                foreach ($map['ParameterDetail'] as $item) {
                    $model->parameterDetail[$n++] = null !== $item ? parameterDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

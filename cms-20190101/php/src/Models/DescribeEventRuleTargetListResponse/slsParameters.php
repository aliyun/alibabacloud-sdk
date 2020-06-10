<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\slsParameters\slsParameter;
use AlibabaCloud\Tea\Model;

class slsParameters extends Model
{
    /**
     * @description SlsParameter
     *
     * @var array
     */
    public $slsParameter;
    protected $_name = [
        'slsParameter' => 'SlsParameter',
    ];

    public function validate()
    {
        Model::validateRequired('slsParameter', $this->slsParameter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsParameter) {
            $res['SlsParameter'] = [];
            if (null !== $this->slsParameter && \is_array($this->slsParameter)) {
                $n = 0;
                foreach ($this->slsParameter as $item) {
                    $res['SlsParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsParameter'])) {
            if (!empty($map['SlsParameter'])) {
                $model->slsParameter = [];
                $n                   = 0;
                foreach ($map['SlsParameter'] as $item) {
                    $model->slsParameter[$n++] = null !== $item ? slsParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

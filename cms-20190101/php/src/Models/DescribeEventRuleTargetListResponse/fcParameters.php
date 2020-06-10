<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponse\fcParameters\FCParameter;
use AlibabaCloud\Tea\Model;

class fcParameters extends Model
{
    /**
     * @description FCParameter
     *
     * @var array
     */
    public $FCParameter;
    protected $_name = [
        'FCParameter' => 'FCParameter',
    ];

    public function validate()
    {
        Model::validateRequired('FCParameter', $this->FCParameter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FCParameter) {
            $res['FCParameter'] = [];
            if (null !== $this->FCParameter && \is_array($this->FCParameter)) {
                $n = 0;
                foreach ($this->FCParameter as $item) {
                    $res['FCParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FCParameter'])) {
            if (!empty($map['FCParameter'])) {
                $model->FCParameter = [];
                $n                  = 0;
                foreach ($map['FCParameter'] as $item) {
                    $model->FCParameter[$n++] = null !== $item ? FCParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\systemParameters\systemParameter;
use AlibabaCloud\Tea\Model;

class systemParameters extends Model
{
    /**
     * @description SystemParameter
     *
     * @var array
     */
    public $systemParameter;
    protected $_name = [
        'systemParameter' => 'SystemParameter',
    ];

    public function validate()
    {
        Model::validateRequired('systemParameter', $this->systemParameter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemParameter) {
            $res['SystemParameter'] = [];
            if (null !== $this->systemParameter && \is_array($this->systemParameter)) {
                $n = 0;
                foreach ($this->systemParameter as $item) {
                    $res['SystemParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemParameter'])) {
            if (!empty($map['SystemParameter'])) {
                $model->systemParameter = [];
                $n                      = 0;
                foreach ($map['SystemParameter'] as $item) {
                    $model->systemParameter[$n++] = null !== $item ? systemParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponse\requestParameters\requestParameter;
use AlibabaCloud\Tea\Model;

class requestParameters extends Model
{
    /**
     * @description RequestParameter
     *
     * @var array
     */
    public $requestParameter;
    protected $_name = [
        'requestParameter' => 'RequestParameter',
    ];

    public function validate()
    {
        Model::validateRequired('requestParameter', $this->requestParameter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParameter) {
            $res['RequestParameter'] = [];
            if (null !== $this->requestParameter && \is_array($this->requestParameter)) {
                $n = 0;
                foreach ($this->requestParameter as $item) {
                    $res['RequestParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParameter'])) {
            if (!empty($map['RequestParameter'])) {
                $model->requestParameter = [];
                $n                       = 0;
                foreach ($map['RequestParameter'] as $item) {
                    $model->requestParameter[$n++] = null !== $item ? requestParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

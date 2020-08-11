<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRecommendInstanceTypeResponse\data\recommendInstanceType;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var array
     */
    public $recommendInstanceType;
    protected $_name = [
        'recommendInstanceType' => 'RecommendInstanceType',
    ];

    public function validate()
    {
        Model::validateRequired('recommendInstanceType', $this->recommendInstanceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendInstanceType) {
            $res['RecommendInstanceType'] = [];
            if (null !== $this->recommendInstanceType && \is_array($this->recommendInstanceType)) {
                $n = 0;
                foreach ($this->recommendInstanceType as $item) {
                    $res['RecommendInstanceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendInstanceType'])) {
            if (!empty($map['RecommendInstanceType'])) {
                $model->recommendInstanceType = [];
                $n                            = 0;
                foreach ($map['RecommendInstanceType'] as $item) {
                    $model->recommendInstanceType[$n++] = null !== $item ? recommendInstanceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponse\spotPrices\spotPriceType;
use AlibabaCloud\Tea\Model;

class spotPrices extends Model
{
    /**
     * @var array
     */
    public $spotPriceType;
    protected $_name = [
        'spotPriceType' => 'SpotPriceType',
    ];

    public function validate()
    {
        Model::validateRequired('spotPriceType', $this->spotPriceType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotPriceType) {
            $res['SpotPriceType'] = [];
            if (null !== $this->spotPriceType && \is_array($this->spotPriceType)) {
                $n = 0;
                foreach ($this->spotPriceType as $item) {
                    $res['SpotPriceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPrices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotPriceType'])) {
            if (!empty($map['SpotPriceType'])) {
                $model->spotPriceType = [];
                $n                    = 0;
                foreach ($map['SpotPriceType'] as $item) {
                    $model->spotPriceType[$n++] = null !== $item ? spotPriceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

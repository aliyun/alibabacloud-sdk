<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRenewalPriceResponse\priceInfo\price\detailInfos\resourcePriceModel;
use AlibabaCloud\Tea\Model;

class detailInfos extends Model
{
    /**
     * @description ResourcePriceModel
     *
     * @var array
     */
    public $resourcePriceModel;
    protected $_name = [
        'resourcePriceModel' => 'ResourcePriceModel',
    ];

    public function validate()
    {
        Model::validateRequired('resourcePriceModel', $this->resourcePriceModel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePriceModel) {
            $res['ResourcePriceModel'] = [];
            if (null !== $this->resourcePriceModel && \is_array($this->resourcePriceModel)) {
                $n = 0;
                foreach ($this->resourcePriceModel as $item) {
                    $res['ResourcePriceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePriceModel'])) {
            if (!empty($map['ResourcePriceModel'])) {
                $model->resourcePriceModel = [];
                $n                         = 0;
                foreach ($map['ResourcePriceModel'] as $item) {
                    $model->resourcePriceModel[$n++] = null !== $item ? resourcePriceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

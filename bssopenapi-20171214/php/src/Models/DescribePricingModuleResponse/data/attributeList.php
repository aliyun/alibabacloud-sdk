<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList\attribute;
use AlibabaCloud\Tea\Model;

class attributeList extends Model
{
    /**
     * @description Attribute
     *
     * @var array
     */
    public $attribute;
    protected $_name = [
        'attribute' => 'Attribute',
    ];

    public function validate()
    {
        Model::validateRequired('attribute', $this->attribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['Attribute'] = [];
            if (null !== $this->attribute && \is_array($this->attribute)) {
                $n = 0;
                foreach ($this->attribute as $item) {
                    $res['Attribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attribute'])) {
            if (!empty($map['Attribute'])) {
                $model->attribute = [];
                $n                = 0;
                foreach ($map['Attribute'] as $item) {
                    $model->attribute[$n++] = null !== $item ? attribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

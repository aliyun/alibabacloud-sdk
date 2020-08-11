<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems\accountAttributeItem\attributeValues;
use AlibabaCloud\Tea\Model;

class accountAttributeItem extends Model
{
    /**
     * @var string
     */
    public $attributeName;

    /**
     * @var attributeValues
     */
    public $attributeValues;
    protected $_name = [
        'attributeName'   => 'AttributeName',
        'attributeValues' => 'AttributeValues',
    ];

    public function validate()
    {
        Model::validateRequired('attributeName', $this->attributeName, true);
        Model::validateRequired('attributeValues', $this->attributeValues, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValues) {
            $res['AttributeValues'] = null !== $this->attributeValues ? $this->attributeValues->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountAttributeItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValues'])) {
            $model->attributeValues = attributeValues::fromMap($map['AttributeValues']);
        }

        return $model;
    }
}

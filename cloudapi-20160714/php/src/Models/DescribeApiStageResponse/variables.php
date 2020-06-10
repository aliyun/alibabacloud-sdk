<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem;
use AlibabaCloud\Tea\Model;

class variables extends Model
{
    /**
     * @description VariableItem
     *
     * @var array
     */
    public $variableItem;
    protected $_name = [
        'variableItem' => 'VariableItem',
    ];

    public function validate()
    {
        Model::validateRequired('variableItem', $this->variableItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variableItem) {
            $res['VariableItem'] = [];
            if (null !== $this->variableItem && \is_array($this->variableItem)) {
                $n = 0;
                foreach ($this->variableItem as $item) {
                    $res['VariableItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VariableItem'])) {
            if (!empty($map['VariableItem'])) {
                $model->variableItem = [];
                $n                   = 0;
                foreach ($map['VariableItem'] as $item) {
                    $model->variableItem[$n++] = null !== $item ? variableItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

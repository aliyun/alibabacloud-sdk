<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem\stageRouteModel;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem\stageRouteModel\routeRules\routeRuleItem;
use AlibabaCloud\Tea\Model;

class routeRules extends Model
{
    /**
     * @description RouteRuleItem
     *
     * @var array
     */
    public $routeRuleItem;
    protected $_name = [
        'routeRuleItem' => 'RouteRuleItem',
    ];

    public function validate()
    {
        Model::validateRequired('routeRuleItem', $this->routeRuleItem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeRuleItem) {
            $res['RouteRuleItem'] = [];
            if (null !== $this->routeRuleItem && \is_array($this->routeRuleItem)) {
                $n = 0;
                foreach ($this->routeRuleItem as $item) {
                    $res['RouteRuleItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteRuleItem'])) {
            if (!empty($map['RouteRuleItem'])) {
                $model->routeRuleItem = [];
                $n                    = 0;
                foreach ($map['RouteRuleItem'] as $item) {
                    $model->routeRuleItem[$n++] = null !== $item ? routeRuleItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

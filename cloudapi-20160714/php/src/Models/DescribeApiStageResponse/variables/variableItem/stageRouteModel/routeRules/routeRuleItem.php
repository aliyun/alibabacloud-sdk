<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables\variableItem\stageRouteModel\routeRules;

use AlibabaCloud\Tea\Model;

class routeRuleItem extends Model
{
    /**
     * @description maxValue
     *
     * @var int
     */
    public $maxValue;

    /**
     * @description minValue
     *
     * @var int
     */
    public $minValue;

    /**
     * @description conditionValue
     *
     * @var string
     */
    public $conditionValue;

    /**
     * @description resultValue
     *
     * @var string
     */
    public $resultValue;
    protected $_name = [
        'maxValue'       => 'MaxValue',
        'minValue'       => 'MinValue',
        'conditionValue' => 'ConditionValue',
        'resultValue'    => 'ResultValue',
    ];

    public function validate()
    {
        Model::validateRequired('maxValue', $this->maxValue, true);
        Model::validateRequired('minValue', $this->minValue, true);
        Model::validateRequired('conditionValue', $this->conditionValue, true);
        Model::validateRequired('resultValue', $this->resultValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->conditionValue) {
            $res['ConditionValue'] = $this->conditionValue;
        }
        if (null !== $this->resultValue) {
            $res['ResultValue'] = $this->resultValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeRuleItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['ConditionValue'])) {
            $model->conditionValue = $map['ConditionValue'];
        }
        if (isset($map['ResultValue'])) {
            $model->resultValue = $map['ResultValue'];
        }

        return $model;
    }
}

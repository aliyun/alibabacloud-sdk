<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponse\pageBean\alertRules\alertRule;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description aggregates
     *
     * @var string
     */
    public $aggregates;

    /**
     * @description alias
     *
     * @var string
     */
    public $alias;

    /**
     * @description measure
     *
     * @var string
     */
    public $measure;

    /**
     * @description nValue
     *
     * @var int
     */
    public $NValue;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description value
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'aggregates' => 'Aggregates',
        'alias'      => 'Alias',
        'measure'    => 'Measure',
        'NValue'     => 'NValue',
        'operator'   => 'Operator',
        'value'      => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('aggregates', $this->aggregates, true);
        Model::validateRequired('alias', $this->alias, true);
        Model::validateRequired('measure', $this->measure, true);
        Model::validateRequired('NValue', $this->NValue, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregates) {
            $res['Aggregates'] = $this->aggregates;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->measure) {
            $res['Measure'] = $this->measure;
        }
        if (null !== $this->NValue) {
            $res['NValue'] = $this->NValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregates'])) {
            $model->aggregates = $map['Aggregates'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Measure'])) {
            $model->measure = $map['Measure'];
        }
        if (isset($map['NValue'])) {
            $model->NValue = $map['NValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

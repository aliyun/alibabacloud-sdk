<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupDynamicRulesResponse\resource\resource\filters;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description function
     *
     * @var string
     */
    public $function;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'function' => 'Function',
        'name'     => 'Name',
        'value'    => 'Value',
    ];

    public function validate()
    {
        Model::validateRequired('function', $this->function, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->function) {
            $res['Function'] = $this->function;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Function'])) {
            $model->function = $map['Function'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

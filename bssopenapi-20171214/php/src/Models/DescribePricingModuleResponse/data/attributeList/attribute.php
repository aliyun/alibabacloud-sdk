<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\attributeList;

use AlibabaCloud\Tea\Model;

class attribute extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description unit
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('unit', $this->unit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}

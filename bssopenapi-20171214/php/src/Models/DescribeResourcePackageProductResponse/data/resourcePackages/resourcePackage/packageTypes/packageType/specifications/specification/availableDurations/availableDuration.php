<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;

use AlibabaCloud\Tea\Model;

class availableDuration extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description value
     *
     * @var int
     */
    public $value;

    /**
     * @description unit
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
        'unit'  => 'Unit',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('unit', $this->unit, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableDuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}

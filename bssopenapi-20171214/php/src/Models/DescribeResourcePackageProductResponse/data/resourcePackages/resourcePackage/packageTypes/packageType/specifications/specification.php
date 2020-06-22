<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification\availableDurations;
use AlibabaCloud\Tea\Model;

class specification extends Model
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
     * @var string
     */
    public $value;

    /**
     * @description availableDurations
     *
     * @var availableDurations
     */
    public $availableDurations;
    protected $_name = [
        'name'               => 'Name',
        'value'              => 'Value',
        'availableDurations' => 'AvailableDurations',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('availableDurations', $this->availableDurations, true);
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
        if (null !== $this->availableDurations) {
            $res['AvailableDurations'] = null !== $this->availableDurations ? $this->availableDurations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specification
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
        if (isset($map['AvailableDurations'])) {
            $model->availableDurations = availableDurations::fromMap($map['AvailableDurations']);
        }

        return $model;
    }
}

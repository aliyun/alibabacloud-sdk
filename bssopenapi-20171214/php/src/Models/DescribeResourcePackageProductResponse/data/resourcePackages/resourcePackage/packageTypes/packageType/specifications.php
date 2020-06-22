<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications\specification;
use AlibabaCloud\Tea\Model;

class specifications extends Model
{
    /**
     * @description Specification
     *
     * @var array
     */
    public $specification;
    protected $_name = [
        'specification' => 'Specification',
    ];

    public function validate()
    {
        Model::validateRequired('specification', $this->specification, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specification) {
            $res['Specification'] = [];
            if (null !== $this->specification && \is_array($this->specification)) {
                $n = 0;
                foreach ($this->specification as $item) {
                    $res['Specification'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specifications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Specification'])) {
            if (!empty($map['Specification'])) {
                $model->specification = [];
                $n                    = 0;
                foreach ($map['Specification'] as $item) {
                    $model->specification[$n++] = null !== $item ? specification::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

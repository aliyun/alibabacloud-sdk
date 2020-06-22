<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage\packageTypes\packageType;
use AlibabaCloud\Tea\Model;

class packageTypes extends Model
{
    /**
     * @description PackageType
     *
     * @var array
     */
    public $packageType;
    protected $_name = [
        'packageType' => 'PackageType',
    ];

    public function validate()
    {
        Model::validateRequired('packageType', $this->packageType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageType) {
            $res['PackageType'] = [];
            if (null !== $this->packageType && \is_array($this->packageType)) {
                $n = 0;
                foreach ($this->packageType as $item) {
                    $res['PackageType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackageType'])) {
            if (!empty($map['PackageType'])) {
                $model->packageType = [];
                $n                  = 0;
                foreach ($map['PackageType'] as $item) {
                    $model->packageType[$n++] = null !== $item ? packageType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

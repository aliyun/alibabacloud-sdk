<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponse\data\resourcePackages\resourcePackage;
use AlibabaCloud\Tea\Model;

class resourcePackages extends Model
{
    /**
     * @description ResourcePackage
     *
     * @var array
     */
    public $resourcePackage;
    protected $_name = [
        'resourcePackage' => 'ResourcePackage',
    ];

    public function validate()
    {
        Model::validateRequired('resourcePackage', $this->resourcePackage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePackage) {
            $res['ResourcePackage'] = [];
            if (null !== $this->resourcePackage && \is_array($this->resourcePackage)) {
                $n = 0;
                foreach ($this->resourcePackage as $item) {
                    $res['ResourcePackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePackage'])) {
            if (!empty($map['ResourcePackage'])) {
                $model->resourcePackage = [];
                $n                      = 0;
                foreach ($map['ResourcePackage'] as $item) {
                    $model->resourcePackage[$n++] = null !== $item ? resourcePackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

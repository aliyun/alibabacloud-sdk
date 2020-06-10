<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAvailableResourcesResponse\availableZones\supportedEngines;

use AlibabaCloud\Tea\Model;

class availableResources extends Model
{
    /**
     * @description dbNodeClass
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description category
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'DBNodeClass' => 'DBNodeClass',
        'category'    => 'Category',
    ];

    public function validate()
    {
        Model::validateRequired('DBNodeClass', $this->DBNodeClass, true);
        Model::validateRequired('category', $this->category, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}

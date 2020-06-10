<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Tea\Model;

class systemDiskCategories extends Model
{
    /**
     * @description supportedSystemDiskCategory
     *
     * @var array
     */
    public $supportedSystemDiskCategory;
    protected $_name = [
        'supportedSystemDiskCategory' => 'supportedSystemDiskCategory',
    ];

    public function validate()
    {
        Model::validateRequired('supportedSystemDiskCategory', $this->supportedSystemDiskCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedSystemDiskCategory) {
            $res['supportedSystemDiskCategory'] = [];
            if (null !== $this->supportedSystemDiskCategory) {
                $res['supportedSystemDiskCategory'] = $this->supportedSystemDiskCategory;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['supportedSystemDiskCategory'])) {
            if (!empty($map['supportedSystemDiskCategory'])) {
                $model->supportedSystemDiskCategory = [];
                $model->supportedSystemDiskCategory = $map['supportedSystemDiskCategory'];
            }
        }

        return $model;
    }
}

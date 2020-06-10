<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponse\monitorGroupCategories\monitorGroupCategory;
use AlibabaCloud\Tea\Model;

class monitorGroupCategories extends Model
{
    /**
     * @description groupId
     *
     * @var int
     */
    public $groupId;

    /**
     * @description categoryItems
     *
     * @var monitorGroupCategory
     */
    public $monitorGroupCategory;
    protected $_name = [
        'groupId'              => 'GroupId',
        'monitorGroupCategory' => 'MonitorGroupCategory',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('monitorGroupCategory', $this->monitorGroupCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->monitorGroupCategory) {
            $res['MonitorGroupCategory'] = null !== $this->monitorGroupCategory ? $this->monitorGroupCategory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorGroupCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MonitorGroupCategory'])) {
            $model->monitorGroupCategory = monitorGroupCategory::fromMap($map['MonitorGroupCategory']);
        }

        return $model;
    }
}

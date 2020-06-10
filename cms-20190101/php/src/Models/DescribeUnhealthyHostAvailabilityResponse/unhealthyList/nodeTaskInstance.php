<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse\unhealthyList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponse\unhealthyList\nodeTaskInstance\instanceList;
use AlibabaCloud\Tea\Model;

class nodeTaskInstance extends Model
{
    /**
     * @description taskId
     *
     * @var int
     */
    public $id;

    /**
     * @description instanceList
     *
     * @var instanceList
     */
    public $instanceList;
    protected $_name = [
        'id'           => 'Id',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('instanceList', $this->instanceList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTaskInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }

        return $model;
    }
}

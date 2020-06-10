<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMonitorGroupInstancesRequest;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description category
     *
     * @var string
     */
    public $category;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'category'     => 'Category',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}

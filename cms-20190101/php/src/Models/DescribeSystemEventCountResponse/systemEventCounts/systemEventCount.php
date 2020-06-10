<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventCountResponse\systemEventCounts;

use AlibabaCloud\Tea\Model;

class systemEventCount extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description product
     *
     * @var string
     */
    public $product;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description num
     *
     * @var int
     */
    public $num;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description resourceId
     *
     * @var string
     */
    public $resourceId;

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

    /**
     * @description time
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'content'      => 'Content',
        'product'      => 'Product',
        'name'         => 'Name',
        'groupId'      => 'GroupId',
        'num'          => 'Num',
        'level'        => 'Level',
        'status'       => 'Status',
        'resourceId'   => 'ResourceId',
        'regionId'     => 'RegionId',
        'instanceName' => 'InstanceName',
        'time'         => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('product', $this->product, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('num', $this->num, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemEventCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

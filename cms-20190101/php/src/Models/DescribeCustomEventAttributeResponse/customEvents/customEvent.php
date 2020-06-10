<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponse\customEvents;

use AlibabaCloud\Tea\Model;

class customEvent extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description time
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'id'      => 'Id',
        'content' => 'Content',
        'groupId' => 'GroupId',
        'name'    => 'Name',
        'time'    => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponse\contacts;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeContactListByContactGroupResponse\contacts\contact\channels;
use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description desc
     *
     * @var string
     */
    public $desc;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description updateTime
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description channels
     *
     * @var channels
     */
    public $channels;
    protected $_name = [
        'name'       => 'Name',
        'desc'       => 'Desc',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'channels'   => 'Channels',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('channels', $this->channels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->channels) {
            $res['Channels'] = null !== $this->channels ? $this->channels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Channels'])) {
            $model->channels = channels::fromMap($map['Channels']);
        }

        return $model;
    }
}

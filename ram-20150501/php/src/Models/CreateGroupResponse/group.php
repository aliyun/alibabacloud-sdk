<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateGroupResponse;

use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description GroupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Comments
     *
     * @var string
     */
    public $comments;

    /**
     * @description CreateDate
     *
     * @var string
     */
    public $createDate;
    protected $_name = [
        'groupName'  => 'GroupName',
        'comments'   => 'Comments',
        'createDate' => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetGroupResponse;

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

    /**
     * @description UpdateDate
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'groupName'  => 'GroupName',
        'comments'   => 'Comments',
        'createDate' => 'CreateDate',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}

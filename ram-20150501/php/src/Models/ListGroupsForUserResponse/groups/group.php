<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsForUserResponse\groups;

use AlibabaCloud\Tea\Model;

class group extends Model {
    protected $_name = [
        'groupName' => 'GroupName',
        'comments' => 'Comments',
        'joinDate' => 'JoinDate',
    ];
    public function validate() {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('joinDate', $this->joinDate, true);
    }
    public function toMap() {
        $res = [];
        $res['GroupName'] = $this->groupName;
        $res['Comments'] = $this->comments;
        $res['JoinDate'] = $this->joinDate;
        return $res;
    }
    /**
     * @param array $map
     * @return group
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['Comments'])){
            $model->comments = $map['Comments'];
        }
        if(isset($map['JoinDate'])){
            $model->joinDate = $map['JoinDate'];
        }
        return $model;
    }
    /**
     * @description GroupName
     * @var string
     */
    public $groupName;

    /**
     * @description Comments
     * @var string
     */
    public $comments;

    /**
     * @description JoinDate
     * @var string
     */
    public $joinDate;

}

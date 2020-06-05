<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsResponse\groups;

use AlibabaCloud\Tea\Model;

class group extends Model {
    protected $_name = [
        'groupName' => 'GroupName',
        'comments' => 'Comments',
        'createDate' => 'CreateDate',
        'updateDate' => 'UpdateDate',
    ];
    public function validate() {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
    }
    public function toMap() {
        $res = [];
        $res['GroupName'] = $this->groupName;
        $res['Comments'] = $this->comments;
        $res['CreateDate'] = $this->createDate;
        $res['UpdateDate'] = $this->updateDate;
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
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
        }
        if(isset($map['UpdateDate'])){
            $model->updateDate = $map['UpdateDate'];
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
     * @description CreateDate
     * @var string
     */
    public $createDate;

    /**
     * @description UpdateDate
     * @var string
     */
    public $updateDate;

}

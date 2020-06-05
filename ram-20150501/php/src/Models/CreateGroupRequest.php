<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupRequest extends Model {
    protected $_name = [
        'groupName' => 'GroupName',
        'comments' => 'Comments',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['GroupName'] = $this->groupName;
        $res['Comments'] = $this->comments;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['Comments'])){
            $model->comments = $map['Comments'];
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

}

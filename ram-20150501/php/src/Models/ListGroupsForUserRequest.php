<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsForUserRequest extends Model {
    protected $_name = [
        'userName' => 'UserName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        return $res;
    }
    /**
     * @param array $map
     * @return ListGroupsForUserRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeleteGroupRequest extends Model {
    protected $_name = [
        'groupName' => 'GroupName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['GroupName'] = $this->groupName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        return $model;
    }
    /**
     * @description GroupName
     * @var string
     */
    public $groupName;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteDomainGroupRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'groupId' => 'GroupId',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['GroupId'] = $this->groupId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteDomainGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

}

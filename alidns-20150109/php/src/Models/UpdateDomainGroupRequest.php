<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainGroupRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
    ];
    public function validate() {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['GroupId'] = $this->groupId;
        $res['GroupName'] = $this->groupName;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateDomainGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
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

    /**
     * @description groupName
     * @var string
     */
    public $groupName;

}

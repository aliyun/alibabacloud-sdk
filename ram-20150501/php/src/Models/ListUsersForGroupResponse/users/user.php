<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersForGroupResponse\users;

use AlibabaCloud\Tea\Model;

class user extends Model {
    protected $_name = [
        'userName' => 'UserName',
        'displayName' => 'DisplayName',
        'joinDate' => 'JoinDate',
    ];
    public function validate() {
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('joinDate', $this->joinDate, true);
    }
    public function toMap() {
        $res = [];
        $res['UserName'] = $this->userName;
        $res['DisplayName'] = $this->displayName;
        $res['JoinDate'] = $this->joinDate;
        return $res;
    }
    /**
     * @param array $map
     * @return user
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['DisplayName'])){
            $model->displayName = $map['DisplayName'];
        }
        if(isset($map['JoinDate'])){
            $model->joinDate = $map['JoinDate'];
        }
        return $model;
    }
    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description DisplayName
     * @var string
     */
    public $displayName;

    /**
     * @description JoinDate
     * @var string
     */
    public $joinDate;

}

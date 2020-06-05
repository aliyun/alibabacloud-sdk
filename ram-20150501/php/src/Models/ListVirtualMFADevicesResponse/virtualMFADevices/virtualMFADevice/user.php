<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse\virtualMFADevices\virtualMFADevice;

use AlibabaCloud\Tea\Model;

class user extends Model {
    protected $_name = [
        'userId' => 'UserId',
        'userName' => 'UserName',
        'displayName' => 'DisplayName',
    ];
    public function validate() {
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('displayName', $this->displayName, true);
    }
    public function toMap() {
        $res = [];
        $res['UserId'] = $this->userId;
        $res['UserName'] = $this->userName;
        $res['DisplayName'] = $this->displayName;
        return $res;
    }
    /**
     * @param array $map
     * @return user
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['DisplayName'])){
            $model->displayName = $map['DisplayName'];
        }
        return $model;
    }
    /**
     * @description UserId
     * @var string
     */
    public $userId;

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

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ChangePasswordRequest extends Model {
    protected $_name = [
        'oldPassword' => 'OldPassword',
        'newPassword' => 'NewPassword',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OldPassword'] = $this->oldPassword;
        $res['NewPassword'] = $this->newPassword;
        return $res;
    }
    /**
     * @param array $map
     * @return ChangePasswordRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OldPassword'])){
            $model->oldPassword = $map['OldPassword'];
        }
        if(isset($map['NewPassword'])){
            $model->newPassword = $map['NewPassword'];
        }
        return $model;
    }
    /**
     * @description OldPassword
     * @var string
     */
    public $oldPassword;

    /**
     * @description NewPassword
     * @var string
     */
    public $newPassword;

}

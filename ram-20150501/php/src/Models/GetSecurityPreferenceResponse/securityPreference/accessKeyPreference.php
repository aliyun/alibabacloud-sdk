<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class accessKeyPreference extends Model {
    protected $_name = [
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
    ];
    public function validate() {
        Model::validateRequired('allowUserToManageAccessKeys', $this->allowUserToManageAccessKeys, true);
    }
    public function toMap() {
        $res = [];
        $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        return $res;
    }
    /**
     * @param array $map
     * @return accessKeyPreference
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AllowUserToManageAccessKeys'])){
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }
        return $model;
    }
    /**
     * @description AllowUserToManageAccessKeys
     * @var bool
     */
    public $allowUserToManageAccessKeys;

}

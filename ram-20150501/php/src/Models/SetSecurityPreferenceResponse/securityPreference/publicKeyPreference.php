<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class publicKeyPreference extends Model {
    protected $_name = [
        'allowUserToManagePublicKeys' => 'AllowUserToManagePublicKeys',
    ];
    public function validate() {
        Model::validateRequired('allowUserToManagePublicKeys', $this->allowUserToManagePublicKeys, true);
    }
    public function toMap() {
        $res = [];
        $res['AllowUserToManagePublicKeys'] = $this->allowUserToManagePublicKeys;
        return $res;
    }
    /**
     * @param array $map
     * @return publicKeyPreference
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AllowUserToManagePublicKeys'])){
            $model->allowUserToManagePublicKeys = $map['AllowUserToManagePublicKeys'];
        }
        return $model;
    }
    /**
     * @description AllowUserToManagePublicKeys
     * @var bool
     */
    public $allowUserToManagePublicKeys;

}

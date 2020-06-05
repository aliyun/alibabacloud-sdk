<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class MFAPreference extends Model {
    protected $_name = [
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
    ];
    public function validate() {
        Model::validateRequired('allowUserToManageMFADevices', $this->allowUserToManageMFADevices, true);
    }
    public function toMap() {
        $res = [];
        $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        return $res;
    }
    /**
     * @param array $map
     * @return MFAPreference
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AllowUserToManageMFADevices'])){
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }
        return $model;
    }
    /**
     * @description AllowUserToManageMFADevices
     * @var bool
     */
    public $allowUserToManageMFADevices;

}

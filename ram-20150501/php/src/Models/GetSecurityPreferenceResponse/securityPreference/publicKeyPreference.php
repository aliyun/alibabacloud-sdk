<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class publicKeyPreference extends Model
{
    /**
     * @description AllowUserToManagePublicKeys
     *
     * @var bool
     */
    public $allowUserToManagePublicKeys;
    protected $_name = [
        'allowUserToManagePublicKeys' => 'AllowUserToManagePublicKeys',
    ];

    public function validate()
    {
        Model::validateRequired('allowUserToManagePublicKeys', $this->allowUserToManagePublicKeys, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToManagePublicKeys) {
            $res['AllowUserToManagePublicKeys'] = $this->allowUserToManagePublicKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicKeyPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToManagePublicKeys'])) {
            $model->allowUserToManagePublicKeys = $map['AllowUserToManagePublicKeys'];
        }

        return $model;
    }
}

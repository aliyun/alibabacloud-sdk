<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceRequest extends Model
{
    /**
     * @description EnableSaveMFATicket
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @description AllowUserToChangePassword
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @description AllowUserToManageAccessKeys
     *
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @description AllowUserToManagePublicKeys
     *
     * @var bool
     */
    public $allowUserToManagePublicKeys;

    /**
     * @description AllowUserToManageMFADevices
     *
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @description LoginSessionDuration
     *
     * @var int
     */
    public $loginSessionDuration;

    /**
     * @description LoginNetworkMasks
     *
     * @var string
     */
    public $loginNetworkMasks;
    protected $_name = [
        'enableSaveMFATicket'         => 'EnableSaveMFATicket',
        'allowUserToChangePassword'   => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys' => 'AllowUserToManageAccessKeys',
        'allowUserToManagePublicKeys' => 'AllowUserToManagePublicKeys',
        'allowUserToManageMFADevices' => 'AllowUserToManageMFADevices',
        'loginSessionDuration'        => 'LoginSessionDuration',
        'loginNetworkMasks'           => 'LoginNetworkMasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }
        if (null !== $this->allowUserToManagePublicKeys) {
            $res['AllowUserToManagePublicKeys'] = $this->allowUserToManagePublicKeys;
        }
        if (null !== $this->allowUserToManageMFADevices) {
            $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        }
        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecurityPreferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }
        if (isset($map['AllowUserToManagePublicKeys'])) {
            $model->allowUserToManagePublicKeys = $map['AllowUserToManagePublicKeys'];
        }
        if (isset($map['AllowUserToManageMFADevices'])) {
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}

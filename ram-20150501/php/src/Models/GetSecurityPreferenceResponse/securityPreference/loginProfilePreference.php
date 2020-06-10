<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetSecurityPreferenceResponse\securityPreference;

use AlibabaCloud\Tea\Model;

class loginProfilePreference extends Model
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
        'enableSaveMFATicket'       => 'EnableSaveMFATicket',
        'allowUserToChangePassword' => 'AllowUserToChangePassword',
        'loginSessionDuration'      => 'LoginSessionDuration',
        'loginNetworkMasks'         => 'LoginNetworkMasks',
    ];

    public function validate()
    {
        Model::validateRequired('enableSaveMFATicket', $this->enableSaveMFATicket, true);
        Model::validateRequired('allowUserToChangePassword', $this->allowUserToChangePassword, true);
        Model::validateRequired('loginSessionDuration', $this->loginSessionDuration, true);
        Model::validateRequired('loginNetworkMasks', $this->loginNetworkMasks, true);
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
     * @return loginProfilePreference
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
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }

        return $model;
    }
}

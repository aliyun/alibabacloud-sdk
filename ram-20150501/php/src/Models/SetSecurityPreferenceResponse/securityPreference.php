<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse;

use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\MFAPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\publicKeyPreference;
use AlibabaCloud\Tea\Model;

class securityPreference extends Model
{
    /**
     * @description LoginProfilePreference
     *
     * @var loginProfilePreference
     */
    public $loginProfilePreference;

    /**
     * @description AccessKeyPreference
     *
     * @var accessKeyPreference
     */
    public $accessKeyPreference;

    /**
     * @description PublicKeyPreference
     *
     * @var publicKeyPreference
     */
    public $publicKeyPreference;

    /**
     * @description MFAPreference
     *
     * @var MFAPreference
     */
    public $MFAPreference;
    protected $_name = [
        'loginProfilePreference' => 'LoginProfilePreference',
        'accessKeyPreference'    => 'AccessKeyPreference',
        'publicKeyPreference'    => 'PublicKeyPreference',
        'MFAPreference'          => 'MFAPreference',
    ];

    public function validate()
    {
        Model::validateRequired('loginProfilePreference', $this->loginProfilePreference, true);
        Model::validateRequired('accessKeyPreference', $this->accessKeyPreference, true);
        Model::validateRequired('publicKeyPreference', $this->publicKeyPreference, true);
        Model::validateRequired('MFAPreference', $this->MFAPreference, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginProfilePreference) {
            $res['LoginProfilePreference'] = null !== $this->loginProfilePreference ? $this->loginProfilePreference->toMap() : null;
        }
        if (null !== $this->accessKeyPreference) {
            $res['AccessKeyPreference'] = null !== $this->accessKeyPreference ? $this->accessKeyPreference->toMap() : null;
        }
        if (null !== $this->publicKeyPreference) {
            $res['PublicKeyPreference'] = null !== $this->publicKeyPreference ? $this->publicKeyPreference->toMap() : null;
        }
        if (null !== $this->MFAPreference) {
            $res['MFAPreference'] = null !== $this->MFAPreference ? $this->MFAPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginProfilePreference'])) {
            $model->loginProfilePreference = loginProfilePreference::fromMap($map['LoginProfilePreference']);
        }
        if (isset($map['AccessKeyPreference'])) {
            $model->accessKeyPreference = accessKeyPreference::fromMap($map['AccessKeyPreference']);
        }
        if (isset($map['PublicKeyPreference'])) {
            $model->publicKeyPreference = publicKeyPreference::fromMap($map['PublicKeyPreference']);
        }
        if (isset($map['MFAPreference'])) {
            $model->MFAPreference = MFAPreference::fromMap($map['MFAPreference']);
        }

        return $model;
    }
}

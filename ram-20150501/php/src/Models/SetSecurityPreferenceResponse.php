<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\publicKeyPreference;
use AlibabaCloud\SDK\Ram\V20150501\Models\SetSecurityPreferenceResponse\securityPreference\MFAPreference;

class SetSecurityPreferenceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'securityPreference' => 'SecurityPreference',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('securityPreference', $this->securityPreference, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SetSecurityPreferenceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SecurityPreference'])){
            $model->securityPreference = securityPreference::fromMap($map['SecurityPreference']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description SecurityPreference
     * @var securityPreference
     */
    public $securityPreference;

}

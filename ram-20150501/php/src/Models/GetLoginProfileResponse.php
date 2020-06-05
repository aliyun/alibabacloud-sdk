<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetLoginProfileResponse\loginProfile;

class GetLoginProfileResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'loginProfile' => 'LoginProfile',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('loginProfile', $this->loginProfile, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetLoginProfileResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['LoginProfile'])){
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description LoginProfile
     * @var loginProfile
     */
    public $loginProfile;

}

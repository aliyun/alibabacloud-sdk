<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class BindMFADeviceRequest extends Model {
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'userName' => 'UserName',
        'authenticationCode1' => 'AuthenticationCode1',
        'authenticationCode2' => 'AuthenticationCode2',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['SerialNumber'] = $this->serialNumber;
        $res['UserName'] = $this->userName;
        $res['AuthenticationCode1'] = $this->authenticationCode1;
        $res['AuthenticationCode2'] = $this->authenticationCode2;
        return $res;
    }
    /**
     * @param array $map
     * @return BindMFADeviceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SerialNumber'])){
            $model->serialNumber = $map['SerialNumber'];
        }
        if(isset($map['UserName'])){
            $model->userName = $map['UserName'];
        }
        if(isset($map['AuthenticationCode1'])){
            $model->authenticationCode1 = $map['AuthenticationCode1'];
        }
        if(isset($map['AuthenticationCode2'])){
            $model->authenticationCode2 = $map['AuthenticationCode2'];
        }
        return $model;
    }
    /**
     * @description SerialNumber
     * @var string
     */
    public $serialNumber;

    /**
     * @description UserName
     * @var string
     */
    public $userName;

    /**
     * @description AuthenticationCode1
     * @var string
     */
    public $authenticationCode1;

    /**
     * @description AuthenticationCode2
     * @var string
     */
    public $authenticationCode2;

}

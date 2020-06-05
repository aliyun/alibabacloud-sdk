<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponse\MFADevice;

class GetUserMFAInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'MFADevice' => 'MFADevice',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('MFADevice', $this->MFADevice, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MFADevice'] = null !== $this->MFADevice ? $this->MFADevice->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetUserMFAInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MFADevice'])){
            $model->MFADevice = MFADevice::fromMap($map['MFADevice']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description MFADevice
     * @var MFADevice
     */
    public $MFADevice;

}

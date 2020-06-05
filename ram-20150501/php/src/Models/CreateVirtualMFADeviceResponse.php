<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceResponse\virtualMFADevice;

class CreateVirtualMFADeviceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'virtualMFADevice' => 'VirtualMFADevice',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('virtualMFADevice', $this->virtualMFADevice, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VirtualMFADevice'] = null !== $this->virtualMFADevice ? $this->virtualMFADevice->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateVirtualMFADeviceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VirtualMFADevice'])){
            $model->virtualMFADevice = virtualMFADevice::fromMap($map['VirtualMFADevice']);
        }
        return $model;
    }
    /**
     * @description RequestId
     * @var string
     */
    public $requestId;

    /**
     * @description VirtualMFADevice
     * @var virtualMFADevice
     */
    public $virtualMFADevice;

}

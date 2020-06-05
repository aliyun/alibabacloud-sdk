<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class CreateVirtualMFADeviceRequest extends Model {
    protected $_name = [
        'virtualMFADeviceName' => 'VirtualMFADeviceName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['VirtualMFADeviceName'] = $this->virtualMFADeviceName;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateVirtualMFADeviceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VirtualMFADeviceName'])){
            $model->virtualMFADeviceName = $map['VirtualMFADeviceName'];
        }
        return $model;
    }
    /**
     * @description VirtualMFADeviceName
     * @var string
     */
    public $virtualMFADeviceName;

}

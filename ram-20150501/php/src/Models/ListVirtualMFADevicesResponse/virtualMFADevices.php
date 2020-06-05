<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse\virtualMFADevices\virtualMFADevice;

class virtualMFADevices extends Model {
    protected $_name = [
        'virtualMFADevice' => 'VirtualMFADevice',
    ];
    public function validate() {
        Model::validateRequired('virtualMFADevice', $this->virtualMFADevice, true);
    }
    public function toMap() {
        $res = [];
        $res['VirtualMFADevice'] = [];
        if(null !== $this->virtualMFADevice && is_array($this->virtualMFADevice)){
            $n = 0;
            foreach($this->virtualMFADevice as $item){
                $res['VirtualMFADevice'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return virtualMFADevices
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VirtualMFADevice'])){
            if(!empty($map['VirtualMFADevice'])){
                $model->virtualMFADevice = [];
                $n = 0;
                foreach($map['VirtualMFADevice'] as $item) {
                    $model->virtualMFADevice[$n++] = null !== $item ? virtualMFADevice::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description VirtualMFADevice
     * @var array
     */
    public $virtualMFADevice;

}

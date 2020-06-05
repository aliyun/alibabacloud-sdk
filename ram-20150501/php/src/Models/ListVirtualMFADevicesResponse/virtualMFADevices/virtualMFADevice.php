<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse\virtualMFADevices;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse\virtualMFADevices\virtualMFADevice\user;

class virtualMFADevice extends Model {
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'activateDate' => 'ActivateDate',
        'user' => 'User',
    ];
    public function validate() {
        Model::validateRequired('serialNumber', $this->serialNumber, true);
        Model::validateRequired('activateDate', $this->activateDate, true);
        Model::validateRequired('user', $this->user, true);
    }
    public function toMap() {
        $res = [];
        $res['SerialNumber'] = $this->serialNumber;
        $res['ActivateDate'] = $this->activateDate;
        $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return virtualMFADevice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SerialNumber'])){
            $model->serialNumber = $map['SerialNumber'];
        }
        if(isset($map['ActivateDate'])){
            $model->activateDate = $map['ActivateDate'];
        }
        if(isset($map['User'])){
            $model->user = user::fromMap($map['User']);
        }
        return $model;
    }
    /**
     * @description SerialNumber
     * @var string
     */
    public $serialNumber;

    /**
     * @description ActivateDate
     * @var string
     */
    public $activateDate;

    /**
     * @description User
     * @var user
     */
    public $user;

}

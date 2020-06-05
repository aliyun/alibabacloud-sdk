<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceResponse;

use AlibabaCloud\Tea\Model;

class MFADevice extends Model {
    protected $_name = [
        'serialNumber' => 'SerialNumber',
    ];
    public function validate() {
        Model::validateRequired('serialNumber', $this->serialNumber, true);
    }
    public function toMap() {
        $res = [];
        $res['SerialNumber'] = $this->serialNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return MFADevice
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SerialNumber'])){
            $model->serialNumber = $map['SerialNumber'];
        }
        return $model;
    }
    /**
     * @description SerialNumber
     * @var string
     */
    public $serialNumber;

}

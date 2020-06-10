<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateVirtualMFADeviceResponse;

use AlibabaCloud\Tea\Model;

class virtualMFADevice extends Model
{
    /**
     * @description SerialNumber
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description Base32StringSeed
     *
     * @var string
     */
    public $base32StringSeed;

    /**
     * @description QRCodePNG
     *
     * @var string
     */
    public $QRCodePNG;
    protected $_name = [
        'serialNumber'     => 'SerialNumber',
        'base32StringSeed' => 'Base32StringSeed',
        'QRCodePNG'        => 'QRCodePNG',
    ];

    public function validate()
    {
        Model::validateRequired('serialNumber', $this->serialNumber, true);
        Model::validateRequired('base32StringSeed', $this->base32StringSeed, true);
        Model::validateRequired('QRCodePNG', $this->QRCodePNG, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->base32StringSeed) {
            $res['Base32StringSeed'] = $this->base32StringSeed;
        }
        if (null !== $this->QRCodePNG) {
            $res['QRCodePNG'] = $this->QRCodePNG;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualMFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Base32StringSeed'])) {
            $model->base32StringSeed = $map['Base32StringSeed'];
        }
        if (isset($map['QRCodePNG'])) {
            $model->QRCodePNG = $map['QRCodePNG'];
        }

        return $model;
    }
}

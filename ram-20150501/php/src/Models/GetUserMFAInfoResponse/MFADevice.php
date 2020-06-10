<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetUserMFAInfoResponse;

use AlibabaCloud\Tea\Model;

class MFADevice extends Model
{
    /**
     * @description SerialNumber
     *
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
    ];

    public function validate()
    {
        Model::validateRequired('serialNumber', $this->serialNumber, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MFADevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}

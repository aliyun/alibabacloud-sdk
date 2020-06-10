<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\UnbindMFADeviceResponse\MFADevice;
use AlibabaCloud\Tea\Model;

class UnbindMFADeviceResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description MFADevice
     *
     * @var MFADevice
     */
    public $MFADevice;
    protected $_name = [
        'requestId' => 'RequestId',
        'MFADevice' => 'MFADevice',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('MFADevice', $this->MFADevice, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->MFADevice) {
            $res['MFADevice'] = null !== $this->MFADevice ? $this->MFADevice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindMFADeviceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MFADevice'])) {
            $model->MFADevice = MFADevice::fromMap($map['MFADevice']);
        }

        return $model;
    }
}

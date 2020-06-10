<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListVirtualMFADevicesResponse\virtualMFADevices;
use AlibabaCloud\Tea\Model;

class ListVirtualMFADevicesResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description VirtualMFADevices
     *
     * @var virtualMFADevices
     */
    public $virtualMFADevices;
    protected $_name = [
        'requestId'         => 'RequestId',
        'virtualMFADevices' => 'VirtualMFADevices',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('virtualMFADevices', $this->virtualMFADevices, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->virtualMFADevices) {
            $res['VirtualMFADevices'] = null !== $this->virtualMFADevices ? $this->virtualMFADevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirtualMFADevicesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VirtualMFADevices'])) {
            $model->virtualMFADevices = virtualMFADevices::fromMap($map['VirtualMFADevices']);
        }

        return $model;
    }
}

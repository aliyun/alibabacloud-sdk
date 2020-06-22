<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hostId
     *
     * @var string
     */
    public $hostId;

    /**
     * @description orderId
     *
     * @var string
     */
    public $orderId;
    protected $_name = [
        'hostId'  => 'HostId',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('orderId', $this->orderId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}

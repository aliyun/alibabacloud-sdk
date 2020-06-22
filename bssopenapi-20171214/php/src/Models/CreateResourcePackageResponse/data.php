<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateResourcePackageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description orderId
     *
     * @var int
     */
    public $orderId;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'orderId'    => 'OrderId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

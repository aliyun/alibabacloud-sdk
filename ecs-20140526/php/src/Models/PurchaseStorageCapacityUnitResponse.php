<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponse\storageCapacityUnitIds;
use AlibabaCloud\Tea\Model;

class PurchaseStorageCapacityUnitResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var storageCapacityUnitIds
     */
    public $storageCapacityUnitIds;
    protected $_name = [
        'requestId'              => 'RequestId',
        'orderId'                => 'OrderId',
        'storageCapacityUnitIds' => 'StorageCapacityUnitIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('storageCapacityUnitIds', $this->storageCapacityUnitIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->storageCapacityUnitIds) {
            $res['StorageCapacityUnitIds'] = null !== $this->storageCapacityUnitIds ? $this->storageCapacityUnitIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseStorageCapacityUnitResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['StorageCapacityUnitIds'])) {
            $model->storageCapacityUnitIds = storageCapacityUnitIds::fromMap($map['StorageCapacityUnitIds']);
        }

        return $model;
    }
}

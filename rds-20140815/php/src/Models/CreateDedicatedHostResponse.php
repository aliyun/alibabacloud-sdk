<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponse\dedicateHostList;
use AlibabaCloud\Tea\Model;

class CreateDedicatedHostResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.orderId
     *
     * @var int
     */
    public $orderId;

    /**
     * @description data.dedicateHostList
     *
     * @var dedicateHostList
     */
    public $dedicateHostList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'orderId'          => 'OrderId',
        'dedicateHostList' => 'DedicateHostList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('dedicateHostList', $this->dedicateHostList, true);
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
        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = null !== $this->dedicateHostList ? $this->dedicateHostList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDedicatedHostResponse
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
        if (isset($map['DedicateHostList'])) {
            $model->dedicateHostList = dedicateHostList::fromMap($map['DedicateHostList']);
        }

        return $model;
    }
}

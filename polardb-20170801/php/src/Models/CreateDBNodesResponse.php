<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse\DBNodeIds;
use AlibabaCloud\Tea\Model;

class CreateDBNodesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbClusterId
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description data.orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description data.dbNodeIds
     *
     * @var DBNodeIds
     */
    public $DBNodeIds;
    protected $_name = [
        'requestId'   => 'RequestId',
        'DBClusterId' => 'DBClusterId',
        'orderId'     => 'OrderId',
        'DBNodeIds'   => 'DBNodeIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('DBNodeIds', $this->DBNodeIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = null !== $this->DBNodeIds ? $this->DBNodeIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBNodesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['DBNodeIds'])) {
            $model->DBNodeIds = DBNodeIds::fromMap($map['DBNodeIds']);
        }

        return $model;
    }
}

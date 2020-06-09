<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBNodesResponse\DBNodeIds;

class CreateDBNodesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBClusterId' => 'DBClusterId',
        'orderId' => 'OrderId',
        'DBNodeIds' => 'DBNodeIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('DBNodeIds', $this->DBNodeIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['OrderId'] = $this->orderId;
        $res['DBNodeIds'] = null !== $this->DBNodeIds ? $this->DBNodeIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDBNodesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['OrderId'])){
            $model->orderId = $map['OrderId'];
        }
        if(isset($map['DBNodeIds'])){
            $model->DBNodeIds = DBNodeIds::fromMap($map['DBNodeIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description data.orderId
     * @var string
     */
    public $orderId;

    /**
     * @description data.dbNodeIds
     * @var DBNodeIds
     */
    public $DBNodeIds;

}

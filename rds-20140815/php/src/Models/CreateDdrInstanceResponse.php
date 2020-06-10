<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDdrInstanceResponse extends Model
{
    /**
     * @description description: 请求ID。;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: 新实例ID。;
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 订单ID。;
     *
     * @var string
     */
    public $orderId;

    /**
     * @description description: 新实例连接地址。>参数**DBInstanceNetType**决定该地址为内网或外网。;
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description description: 新实例连接端口。>参数**DBInstanceNetType**决定该端口为内网端口或外网端口。;
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'requestId'        => 'RequestId',
        'DBInstanceId'     => 'DBInstanceId',
        'orderId'          => 'OrderId',
        'connectionString' => 'ConnectionString',
        'port'             => 'Port',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('port', $this->port, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDdrInstanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}

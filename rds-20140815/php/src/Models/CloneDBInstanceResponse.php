<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CloneDBInstanceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceId
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.orderId
     *
     * @var string
     */
    public $orderId;

    /**
     * @description data.connectionString
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description data.port
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
     * @return CloneDBInstanceResponse
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

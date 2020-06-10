<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items;
use AlibabaCloud\Tea\Model;

class DescribeReadDBInstanceDelayResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.readDBInstanceName
     *
     * @var string
     */
    public $readDBInstanceId;

    /**
     * @description data.delayTime
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description data.items
     *
     * @var items
     */
    public $items;
    protected $_name = [
        'requestId'        => 'RequestId',
        'DBInstanceId'     => 'DBInstanceId',
        'readDBInstanceId' => 'ReadDBInstanceId',
        'delayTime'        => 'DelayTime',
        'items'            => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('readDBInstanceId', $this->readDBInstanceId, true);
        Model::validateRequired('delayTime', $this->delayTime, true);
        Model::validateRequired('items', $this->items, true);
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
        if (null !== $this->readDBInstanceId) {
            $res['ReadDBInstanceId'] = $this->readDBInstanceId;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReadDBInstanceDelayResponse
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
        if (isset($map['ReadDBInstanceId'])) {
            $model->readDBInstanceId = $map['ReadDBInstanceId'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}

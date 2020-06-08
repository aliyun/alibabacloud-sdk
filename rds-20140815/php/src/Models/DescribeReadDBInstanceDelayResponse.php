<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponse\items;

class DescribeReadDBInstanceDelayResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'readDBInstanceId' => 'ReadDBInstanceId',
        'delayTime' => 'DelayTime',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('readDBInstanceId', $this->readDBInstanceId, true);
        Model::validateRequired('delayTime', $this->delayTime, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['ReadDBInstanceId'] = $this->readDBInstanceId;
        $res['DelayTime'] = $this->delayTime;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeReadDBInstanceDelayResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['ReadDBInstanceId'])){
            $model->readDBInstanceId = $map['ReadDBInstanceId'];
        }
        if(isset($map['DelayTime'])){
            $model->delayTime = $map['DelayTime'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.readDBInstanceName
     * @var string
     */
    public $readDBInstanceId;

    /**
     * @description data.delayTime
     * @var integer
     */
    public $delayTime;

    /**
     * @description data.items
     * @var items
     */
    public $items;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstancePayTypeRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'DBInstanceId' => 'DBInstanceId',
        'usedTime' => 'UsedTime',
        'payType' => 'PayType',
        'period' => 'Period',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('period', $this->period, true);
    }
    public function toMap() {
        $res = [];
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['UsedTime'] = $this->usedTime;
        $res['PayType'] = $this->payType;
        $res['Period'] = $this->period;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDBInstancePayTypeRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description usedTime
     * @var integer
     */
    public $usedTime;

    /**
     * @description payType
     * @var string
     */
    public $payType;

    /**
     * @description timeType
     * @var string
     */
    public $period;

}

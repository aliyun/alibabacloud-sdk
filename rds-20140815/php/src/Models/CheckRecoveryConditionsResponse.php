<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'recoveryStatus' => 'RecoveryStatus',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('recoveryStatus', $this->recoveryStatus, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['RecoveryStatus'] = $this->recoveryStatus;
        return $res;
    }
    /**
     * @param array $map
     * @return CheckRecoveryConditionsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['RecoveryStatus'])){
            $model->recoveryStatus = $map['RecoveryStatus'];
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
     * @description data.isValid
     * @var string
     */
    public $recoveryStatus;

}

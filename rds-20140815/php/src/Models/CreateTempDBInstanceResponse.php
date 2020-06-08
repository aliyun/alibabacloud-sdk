<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateTempDBInstanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'tempDBInstanceId' => 'TempDBInstanceId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('tempDBInstanceId', $this->tempDBInstanceId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateTempDBInstanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TempDBInstanceId'])){
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.childDBInstanceName
     * @var string
     */
    public $tempDBInstanceId;

}

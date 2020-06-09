<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogBackupPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'enableBackupLog' => 'EnableBackupLog',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('enableBackupLog', $this->enableBackupLog, true);
        Model::validateRequired('logBackupRetentionPeriod', $this->logBackupRetentionPeriod, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['EnableBackupLog'] = $this->enableBackupLog;
        $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeLogBackupPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['EnableBackupLog'])){
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if(isset($map['LogBackupRetentionPeriod'])){
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.enableBackupLog
     * @var integer
     */
    public $enableBackupLog;

    /**
     * @description data.logBackupRetentionPeriod
     * @var integer
     */
    public $logBackupRetentionPeriod;

}

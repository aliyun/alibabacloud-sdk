<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionsResponse extends Model
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
     * @description data.isValid
     *
     * @var string
     */
    public $recoveryStatus;
    protected $_name = [
        'requestId'      => 'RequestId',
        'DBInstanceId'   => 'DBInstanceId',
        'recoveryStatus' => 'RecoveryStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('recoveryStatus', $this->recoveryStatus, true);
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
        if (null !== $this->recoveryStatus) {
            $res['RecoveryStatus'] = $this->recoveryStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRecoveryConditionsResponse
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
        if (isset($map['RecoveryStatus'])) {
            $model->recoveryStatus = $map['RecoveryStatus'];
        }

        return $model;
    }
}

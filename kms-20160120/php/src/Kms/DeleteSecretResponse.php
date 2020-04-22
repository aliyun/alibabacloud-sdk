<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class DeleteSecretResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description PlannedDeleteTime
     *
     * @var string
     */
    public $plannedDeleteTime;
    protected $_name = [
        'requestId'         => 'RequestId',
        'secretName'        => 'SecretName',
        'plannedDeleteTime' => 'PlannedDeleteTime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('secretName', $this->secretName, true);
        Model::validateRequired('plannedDeleteTime', $this->plannedDeleteTime, true);
    }

    public function toMap()
    {
        $res                      = [];
        $res['RequestId']         = $this->requestId;
        $res['SecretName']        = $this->secretName;
        $res['PlannedDeleteTime'] = $this->plannedDeleteTime;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretRequest extends Model
{
    /**
     * @description SecretName
     *
     * @var string
     */
    public $secretName;

    /**
     * @description ForceDeleteWithoutRecovery
     *
     * @var string
     */
    public $forceDeleteWithoutRecovery;

    /**
     * @description RecoveryWindowInDays
     *
     * @var string
     */
    public $recoveryWindowInDays;
    protected $_name = [
        'secretName'                 => 'SecretName',
        'forceDeleteWithoutRecovery' => 'ForceDeleteWithoutRecovery',
        'recoveryWindowInDays'       => 'RecoveryWindowInDays',
    ];

    public function validate()
    {
        Model::validateRequired('secretName', $this->secretName, true);
    }

    public function toMap()
    {
        $res                               = [];
        $res['SecretName']                 = $this->secretName;
        $res['ForceDeleteWithoutRecovery'] = $this->forceDeleteWithoutRecovery;
        $res['RecoveryWindowInDays']       = $this->recoveryWindowInDays;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['ForceDeleteWithoutRecovery'])) {
            $model->forceDeleteWithoutRecovery = $map['ForceDeleteWithoutRecovery'];
        }
        if (isset($map['RecoveryWindowInDays'])) {
            $model->recoveryWindowInDays = $map['RecoveryWindowInDays'];
        }

        return $model;
    }
}

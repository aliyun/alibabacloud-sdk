<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmRecoveryPlanResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     *
     * @var string
     */
    public $recoveryPlanId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'recoveryPlanId' => 'RecoveryPlanId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmRecoveryPlanResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }

        return $model;
    }
}

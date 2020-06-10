<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteGtmRecoveryPlanRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description recoveryPlanId
     *
     * @var int
     */
    public $recoveryPlanId;
    protected $_name = [
        'lang'           => 'Lang',
        'recoveryPlanId' => 'RecoveryPlanId',
    ];

    public function validate()
    {
        Model::validateRequired('recoveryPlanId', $this->recoveryPlanId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGtmRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }

        return $model;
    }
}

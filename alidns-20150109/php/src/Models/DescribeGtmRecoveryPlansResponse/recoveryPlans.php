<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse\recoveryPlans\recoveryPlan;
use AlibabaCloud\Tea\Model;

class recoveryPlans extends Model
{
    /**
     * @description RecoveryPlan
     *
     * @var array
     */
    public $recoveryPlan;
    protected $_name = [
        'recoveryPlan' => 'RecoveryPlan',
    ];

    public function validate()
    {
        Model::validateRequired('recoveryPlan', $this->recoveryPlan, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryPlan) {
            $res['RecoveryPlan'] = [];
            if (null !== $this->recoveryPlan && \is_array($this->recoveryPlan)) {
                $n = 0;
                foreach ($this->recoveryPlan as $item) {
                    $res['RecoveryPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecoveryPlan'])) {
            if (!empty($map['RecoveryPlan'])) {
                $model->recoveryPlan = [];
                $n                   = 0;
                foreach ($map['RecoveryPlan'] as $item) {
                    $model->recoveryPlan[$n++] = null !== $item ? recoveryPlan::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

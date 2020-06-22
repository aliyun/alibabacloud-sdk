<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryMonthlyBillRequest extends Model
{
    /**
     * @description billingCycle
     *
     * @var string
     */
    public $billingCycle;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
    ];

    public function validate()
    {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMonthlyBillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class SetResellerUserQuotaRequest extends Model
{
    /**
     * @description amount
     *
     * @var string
     */
    public $amount;

    /**
     * @description currency
     *
     * @var string
     */
    public $currency;

    /**
     * @description outBizId
     *
     * @var string
     */
    public $outBizId;
    protected $_name = [
        'amount'   => 'Amount',
        'currency' => 'Currency',
        'outBizId' => 'OutBizId',
    ];

    public function validate()
    {
        Model::validateRequired('amount', $this->amount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetResellerUserQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }

        return $model;
    }
}

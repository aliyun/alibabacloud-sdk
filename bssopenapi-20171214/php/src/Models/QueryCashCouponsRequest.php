<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryCashCouponsRequest extends Model
{
    /**
     * @description expiryTimeEnd
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @description expiryTimeStart
     *
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @description effectiveOrNot
     *
     * @var bool
     */
    public $effectiveOrNot;
    protected $_name = [
        'expiryTimeEnd'   => 'ExpiryTimeEnd',
        'expiryTimeStart' => 'ExpiryTimeStart',
        'effectiveOrNot'  => 'EffectiveOrNot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTimeEnd) {
            $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        }
        if (null !== $this->expiryTimeStart) {
            $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        }
        if (null !== $this->effectiveOrNot) {
            $res['EffectiveOrNot'] = $this->effectiveOrNot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCashCouponsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTimeEnd'])) {
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if (isset($map['ExpiryTimeStart'])) {
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if (isset($map['EffectiveOrNot'])) {
            $model->effectiveOrNot = $map['EffectiveOrNot'];
        }

        return $model;
    }
}

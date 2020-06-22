<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryRedeemRequest extends Model
{
    /**
     * @description expiryTimeStart
     *
     * @var string
     */
    public $expiryTimeStart;

    /**
     * @description expiryTimeEnd
     *
     * @var string
     */
    public $expiryTimeEnd;

    /**
     * @description effectiveOrNot
     *
     * @var bool
     */
    public $effectiveOrNot;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'expiryTimeStart' => 'ExpiryTimeStart',
        'expiryTimeEnd'   => 'ExpiryTimeEnd',
        'effectiveOrNot'  => 'EffectiveOrNot',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTimeStart) {
            $res['ExpiryTimeStart'] = $this->expiryTimeStart;
        }
        if (null !== $this->expiryTimeEnd) {
            $res['ExpiryTimeEnd'] = $this->expiryTimeEnd;
        }
        if (null !== $this->effectiveOrNot) {
            $res['EffectiveOrNot'] = $this->effectiveOrNot;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRedeemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTimeStart'])) {
            $model->expiryTimeStart = $map['ExpiryTimeStart'];
        }
        if (isset($map['ExpiryTimeEnd'])) {
            $model->expiryTimeEnd = $map['ExpiryTimeEnd'];
        }
        if (isset($map['EffectiveOrNot'])) {
            $model->effectiveOrNot = $map['EffectiveOrNot'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponse\data\redeem;
use AlibabaCloud\Tea\Model;

class data extends Model
{
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

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description redeemList
     *
     * @var redeem
     */
    public $redeem;
    protected $_name = [
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'redeem'     => 'Redeem',
    ];

    public function validate()
    {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('redeem', $this->redeem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->redeem) {
            $res['Redeem'] = null !== $this->redeem ? $this->redeem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Redeem'])) {
            $model->redeem = redeem::fromMap($map['Redeem']);
        }

        return $model;
    }
}

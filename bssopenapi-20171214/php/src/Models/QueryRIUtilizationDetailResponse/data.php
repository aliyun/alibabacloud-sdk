<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse\data\detailList;
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
     * @description detailList
     *
     * @var detailList
     */
    public $detailList;
    protected $_name = [
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'detailList' => 'DetailList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('detailList', $this->detailList, true);
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
        if (null !== $this->detailList) {
            $res['DetailList'] = null !== $this->detailList ? $this->detailList->toMap() : null;
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
        if (isset($map['DetailList'])) {
            $model->detailList = detailList::fromMap($map['DetailList']);
        }

        return $model;
    }
}

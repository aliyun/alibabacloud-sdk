<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponse\data\costUnitDtoList;
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
     * @description costUnitDtoList
     *
     * @var array
     */
    public $costUnitDtoList;
    protected $_name = [
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
        'costUnitDtoList' => 'CostUnitDtoList',
    ];

    public function validate()
    {
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('costUnitDtoList', $this->costUnitDtoList, true);
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
        if (null !== $this->costUnitDtoList) {
            $res['CostUnitDtoList'] = [];
            if (null !== $this->costUnitDtoList && \is_array($this->costUnitDtoList)) {
                $n = 0;
                foreach ($this->costUnitDtoList as $item) {
                    $res['CostUnitDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CostUnitDtoList'])) {
            if (!empty($map['CostUnitDtoList'])) {
                $model->costUnitDtoList = [];
                $n                      = 0;
                foreach ($map['CostUnitDtoList'] as $item) {
                    $model->costUnitDtoList[$n++] = null !== $item ? costUnitDtoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

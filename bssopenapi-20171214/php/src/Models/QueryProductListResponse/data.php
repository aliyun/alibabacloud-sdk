<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponse\data\productList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

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
     * @description productList
     *
     * @var productList
     */
    public $productList;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'productList' => 'ProductList',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('productList', $this->productList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productList) {
            $res['ProductList'] = null !== $this->productList ? $this->productList->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductList'])) {
            $model->productList = productList::fromMap($map['ProductList']);
        }

        return $model;
    }
}

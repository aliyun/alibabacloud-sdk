<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponse\data\orderList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hostName
     *
     * @var string
     */
    public $hostName;

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
     * @description orderList
     *
     * @var orderList
     */
    public $orderList;
    protected $_name = [
        'hostName'   => 'HostName',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'orderList'  => 'OrderList',
    ];

    public function validate()
    {
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('orderList', $this->orderList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = null !== $this->orderList ? $this->orderList->toMap() : null;
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
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['OrderList'])) {
            $model->orderList = orderList::fromMap($map['OrderList']);
        }

        return $model;
    }
}

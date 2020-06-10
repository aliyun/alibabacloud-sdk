<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponse\items;
use AlibabaCloud\Tea\Model;

class DescribeDBClustersWithBackupsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description data.totalRecordCount
     *
     * @var int
     */
    public $totalRecordCount;

    /**
     * @description data.pageRecordCount
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description data.items
     *
     * @var items
     */
    public $items;
    protected $_name = [
        'requestId'        => 'RequestId',
        'pageNumber'       => 'PageNumber',
        'totalRecordCount' => 'TotalRecordCount',
        'pageRecordCount'  => 'PageRecordCount',
        'items'            => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('items', $this->items, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClustersWithBackupsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}

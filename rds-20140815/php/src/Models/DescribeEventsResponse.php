<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponse\eventItems;
use AlibabaCloud\Tea\Model;

class DescribeEventsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.totalRecordCount
     *
     * @var int
     */
    public $totalRecordCount;

    /**
     * @description data.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description data.pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description data.eventItems
     *
     * @var eventItems
     */
    public $eventItems;
    protected $_name = [
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'eventItems'       => 'EventItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('eventItems', $this->eventItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->eventItems) {
            $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['EventItems'])) {
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }

        return $model;
    }
}

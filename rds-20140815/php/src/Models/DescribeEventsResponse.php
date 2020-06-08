<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponse\eventItems;

class DescribeEventsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'eventItems' => 'EventItems',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('eventItems', $this->eventItems, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeEventsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalRecordCount'])){
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['EventItems'])){
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.totalRecordCount
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description data.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.eventItems
     * @var eventItems
     */
    public $eventItems;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponse\eventItems;

class DescribeSignedEventActionsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nextPageEventId' => 'NextPageEventId',
        'pageRecordCount' => 'PageRecordCount',
        'fromBegin' => 'FromBegin',
        'toEnd' => 'ToEnd',
        'eventItems' => 'EventItems',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextPageEventId', $this->nextPageEventId, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('fromBegin', $this->fromBegin, true);
        Model::validateRequired('toEnd', $this->toEnd, true);
        Model::validateRequired('eventItems', $this->eventItems, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NextPageEventId'] = $this->nextPageEventId;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['FromBegin'] = $this->fromBegin;
        $res['ToEnd'] = $this->toEnd;
        $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSignedEventActionsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NextPageEventId'])){
            $model->nextPageEventId = $map['NextPageEventId'];
        }
        if(isset($map['PageRecordCount'])){
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if(isset($map['FromBegin'])){
            $model->fromBegin = $map['FromBegin'];
        }
        if(isset($map['ToEnd'])){
            $model->toEnd = $map['ToEnd'];
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
     * @description data.nextPageEventId
     * @var integer
     */
    public $nextPageEventId;

    /**
     * @description data.pageRecordCount
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description data.fromBegin
     * @var bool
     */
    public $fromBegin;

    /**
     * @description data.toEnd
     * @var bool
     */
    public $toEnd;

    /**
     * @description data.eventItems
     * @var eventItems
     */
    public $eventItems;

}

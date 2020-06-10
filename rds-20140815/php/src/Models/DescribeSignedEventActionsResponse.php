<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponse\eventItems;
use AlibabaCloud\Tea\Model;

class DescribeSignedEventActionsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.nextPageEventId
     *
     * @var int
     */
    public $nextPageEventId;

    /**
     * @description data.pageRecordCount
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description data.fromBegin
     *
     * @var bool
     */
    public $fromBegin;

    /**
     * @description data.toEnd
     *
     * @var bool
     */
    public $toEnd;

    /**
     * @description data.eventItems
     *
     * @var eventItems
     */
    public $eventItems;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextPageEventId' => 'NextPageEventId',
        'pageRecordCount' => 'PageRecordCount',
        'fromBegin'       => 'FromBegin',
        'toEnd'           => 'ToEnd',
        'eventItems'      => 'EventItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextPageEventId', $this->nextPageEventId, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('fromBegin', $this->fromBegin, true);
        Model::validateRequired('toEnd', $this->toEnd, true);
        Model::validateRequired('eventItems', $this->eventItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextPageEventId) {
            $res['NextPageEventId'] = $this->nextPageEventId;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->fromBegin) {
            $res['FromBegin'] = $this->fromBegin;
        }
        if (null !== $this->toEnd) {
            $res['ToEnd'] = $this->toEnd;
        }
        if (null !== $this->eventItems) {
            $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSignedEventActionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextPageEventId'])) {
            $model->nextPageEventId = $map['NextPageEventId'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['FromBegin'])) {
            $model->fromBegin = $map['FromBegin'];
        }
        if (isset($map['ToEnd'])) {
            $model->toEnd = $map['ToEnd'];
        }
        if (isset($map['EventItems'])) {
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }

        return $model;
    }
}

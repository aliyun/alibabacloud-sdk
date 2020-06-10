<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList;
use AlibabaCloud\Tea\Model;

class ListLiveRecordVideoResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.total
     *
     * @var int
     */
    public $total;

    /**
     * @description data.liveRecordVideoList
     *
     * @var liveRecordVideoList
     */
    public $liveRecordVideoList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'total'               => 'Total',
        'liveRecordVideoList' => 'LiveRecordVideoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('liveRecordVideoList', $this->liveRecordVideoList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->liveRecordVideoList) {
            $res['LiveRecordVideoList'] = null !== $this->liveRecordVideoList ? $this->liveRecordVideoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLiveRecordVideoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['LiveRecordVideoList'])) {
            $model->liveRecordVideoList = liveRecordVideoList::fromMap($map['LiveRecordVideoList']);
        }

        return $model;
    }
}

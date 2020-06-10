<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAuditHistoryRequest extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description sortBy
     *
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'videoId'  => 'VideoId',
        'pageNo'   => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy'   => 'SortBy',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponse\topPlayVideos;
use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.pageNum
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description data.content.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description data.content.totalNum
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description data.content.list
     *
     * @var topPlayVideos
     */
    public $topPlayVideos;
    protected $_name = [
        'requestId'     => 'RequestId',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'totalNum'      => 'TotalNum',
        'topPlayVideos' => 'TopPlayVideos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('topPlayVideos', $this->topPlayVideos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->topPlayVideos) {
            $res['TopPlayVideos'] = null !== $this->topPlayVideos ? $this->topPlayVideos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePlayTopVideosResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TopPlayVideos'])) {
            $model->topPlayVideos = topPlayVideos::fromMap($map['TopPlayVideos']);
        }

        return $model;
    }
}

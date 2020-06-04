<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayTopVideosResponse\topPlayVideos;

class DescribePlayTopVideosResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'totalNum' => 'TotalNum',
        'topPlayVideos' => 'TopPlayVideos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('topPlayVideos', $this->topPlayVideos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['TotalNum'] = $this->totalNum;
        $res['TopPlayVideos'] = null !== $this->topPlayVideos ? $this->topPlayVideos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayTopVideosResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TotalNum'])){
            $model->totalNum = $map['TotalNum'];
        }
        if(isset($map['TopPlayVideos'])){
            $model->topPlayVideos = topPlayVideos::fromMap($map['TopPlayVideos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.pageNum
     * @var integer
     */
    public $pageNo;

    /**
     * @description data.content.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.content.totalNum
     * @var integer
     */
    public $totalNum;

    /**
     * @description data.content.list
     * @var topPlayVideos
     */
    public $topPlayVideos;

}

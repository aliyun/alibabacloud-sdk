<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetAuditHistoryRequest extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['SortBy'] = $this->sortBy;
        return $res;
    }
    /**
     * @param array $map
     * @return GetAuditHistoryRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

}

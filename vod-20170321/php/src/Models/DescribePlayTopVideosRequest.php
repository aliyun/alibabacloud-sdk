<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribePlayTopVideosRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'bizDate' => 'BizDate',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
    ];
    public function validate() {
        Model::validateRequired('bizDate', $this->bizDate, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['BizDate'] = $this->bizDate;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayTopVideosRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['BizDate'])){
            $model->bizDate = $map['BizDate'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description bizdate
     * @var string
     */
    public $bizDate;

    /**
     * @description pageNum
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

}

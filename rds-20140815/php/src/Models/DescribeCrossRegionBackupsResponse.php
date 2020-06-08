<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupsResponse\items;

class DescribeCrossRegionBackupsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'totalRecordCount' => 'TotalRecordCount',
        'pageRecordCount' => 'PageRecordCount',
        'pageNumber' => 'PageNumber',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RegionId'] = $this->regionId;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCrossRegionBackupsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['TotalRecordCount'])){
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if(isset($map['PageRecordCount'])){
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
        }
        return $model;
    }
    /**
     * @description description: 请求ID。; 
     * @var string
     */
    public $requestId;

    /**
     * @description description: 实例所在地域ID。; 
     * @var string
     */
    public $regionId;

    /**
     * @description description: 查询开始时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。; 
     * @var string
     */
    public $startTime;

    /**
     * @description description: 查询结束时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm</i>Z（UTC时间）。; 
     * @var string
     */
    public $endTime;

    /**
     * @description description: 总记录数。; 
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description description: 本页备份文件个数。; 
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description description: 页码，取值：大于0且不超过Integer的最大值。默认值：**1**。; 
     * @var integer
     */
    public $pageNumber;

    /**
     * @description description: 跨地域备份列表。
     * @var items
     */
    public $items;

}

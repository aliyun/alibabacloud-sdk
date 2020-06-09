<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerResponse\items;

class DescribeMigrateTasksForSQLServerResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceID' => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'totalRecordCount' => 'TotalRecordCount',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceID', $this->DBInstanceID, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceID'] = $this->DBInstanceID;
        $res['DBInstanceName'] = $this->DBInstanceName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeMigrateTasksForSQLServerResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceID'])){
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if(isset($map['DBInstanceName'])){
            $model->DBInstanceName = $map['DBInstanceName'];
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
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageRecordCount'])){
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if(isset($map['Items'])){
            $model->items = items::fromMap($map['Items']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceId
     * @var string
     */
    public $DBInstanceID;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description data.startTime
     * @var string
     */
    public $startTime;

    /**
     * @description data.endTime
     * @var string
     */
    public $endTime;

    /**
     * @description data.totalNumbers
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description data.pageNumbers
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.itemsNumbers
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description data.items
     * @var items
     */
    public $items;

}

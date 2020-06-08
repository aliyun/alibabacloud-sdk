<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse\items;

class DescribeCrossBackupMetaListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceName' => 'DBInstanceName',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'totalRecordCount' => 'TotalRecordCount',
        'totalPageCount' => 'TotalPageCount',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceName', $this->DBInstanceName, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('totalPageCount', $this->totalPageCount, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceName'] = $this->DBInstanceName;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['TotalPageCount'] = $this->totalPageCount;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCrossBackupMetaListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceName'])){
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageRecordCount'])){
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if(isset($map['TotalRecordCount'])){
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if(isset($map['TotalPageCount'])){
            $model->totalPageCount = $map['TotalPageCount'];
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
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.pageRecordCount
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description data.totalRecordCount
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description data.totalPageCount
     * @var integer
     */
    public $totalPageCount;

    /**
     * @description data.items
     * @var items
     */
    public $items;

}

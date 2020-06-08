<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsResponse\items;

class DescribeDetachedBackupsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'totalBackupSize' => 'TotalBackupSize',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('totalBackupSize', $this->totalBackupSize, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['TotalBackupSize'] = $this->totalBackupSize;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDetachedBackupsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
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
        if(isset($map['TotalBackupSize'])){
            $model->totalBackupSize = $map['TotalBackupSize'];
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
     * @description data.totalRecords
     * @var string
     */
    public $totalRecordCount;

    /**
     * @description data.pageNumbers
     * @var string
     */
    public $pageNumber;

    /**
     * @description data.backupsetNumbers
     * @var string
     */
    public $pageRecordCount;

    /**
     * @description data.totalBackupSize
     * @var integer
     */
    public $totalBackupSize;

    /**
     * @description data.backupsetItems
     * @var items
     */
    public $items;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionBackupDBInstanceResponse\items;

class DescribeCrossRegionBackupDBInstanceResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regionId' => 'RegionId',
        'totalRecords' => 'TotalRecords',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'itemsNumbers' => 'ItemsNumbers',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('totalRecords', $this->totalRecords, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('itemsNumbers', $this->itemsNumbers, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RegionId'] = $this->regionId;
        $res['TotalRecords'] = $this->totalRecords;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['ItemsNumbers'] = $this->itemsNumbers;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeCrossRegionBackupDBInstanceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['TotalRecords'])){
            $model->totalRecords = $map['TotalRecords'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['ItemsNumbers'])){
            $model->itemsNumbers = $map['ItemsNumbers'];
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
     * @description data.regionId
     * @var string
     */
    public $regionId;

    /**
     * @description data.totalRecords
     * @var integer
     */
    public $totalRecords;

    /**
     * @description data.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description data.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.itemsNumbers
     * @var integer
     */
    public $itemsNumbers;

    /**
     * @description data.items
     * @var items
     */
    public $items;

}

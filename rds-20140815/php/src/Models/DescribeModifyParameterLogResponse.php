<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse\items;

class DescribeModifyParameterLogResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'engine' => 'Engine',
        'DBInstanceId' => 'DBInstanceId',
        'engineVersion' => 'EngineVersion',
        'totalRecordCount' => 'TotalRecordCount',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'items' => 'Items',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('totalRecordCount', $this->totalRecordCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageRecordCount', $this->pageRecordCount, true);
        Model::validateRequired('items', $this->items, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Engine'] = $this->engine;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['EngineVersion'] = $this->engineVersion;
        $res['TotalRecordCount'] = $this->totalRecordCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageRecordCount'] = $this->pageRecordCount;
        $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeModifyParameterLogResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
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
     * @description data.engine
     * @var string
     */
    public $engine;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.engineVersion
     * @var string
     */
    public $engineVersion;

    /**
     * @description data.totalRecords
     * @var integer
     */
    public $totalRecordCount;

    /**
     * @description data.pageNumbers
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data.ItemNumbers
     * @var integer
     */
    public $pageRecordCount;

    /**
     * @description data.parameters
     * @var items
     */
    public $items;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchResultDetailRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'taskId' => 'TaskId',
        'batchType' => 'BatchType',
        'status' => 'Status',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['TaskId'] = $this->taskId;
        $res['BatchType'] = $this->batchType;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeBatchResultDetailRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['BatchType'])){
            $model->batchType = $map['BatchType'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description taskId
     * @var integer
     */
    public $taskId;

    /**
     * @description batchType
     * @var string
     */
    public $batchType;

    /**
     * @description status
     * @var string
     */
    public $status;

}

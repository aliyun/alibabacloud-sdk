<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordLogsResponse\recordLogs;

class DescribeRecordLogsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'recordLogs' => 'RecordLogs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('recordLogs', $this->recordLogs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalCount'] = $this->totalCount;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['RecordLogs'] = null !== $this->recordLogs ? $this->recordLogs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRecordLogsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['RecordLogs'])){
            $model->recordLogs = recordLogs::fromMap($map['RecordLogs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     * @var integer
     */
    public $totalCount;

    /**
     * @description module.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description module.data
     * @var recordLogs
     */
    public $recordLogs;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryRobotTaskListResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'data' => 'Data',
        'pageSize' => 'PageSize',
        'pageNo' => 'PageNo',
        'totalCount' => 'TotalCount',
        'code' => 'Code',
        'message' => 'Message',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Data'] = $this->data;
        $res['PageSize'] = $this->pageSize;
        $res['PageNo'] = $this->pageNo;
        $res['TotalCount'] = $this->totalCount;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryRobotTaskListResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Data'])){
            $model->data = $map['Data'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module
     * @var string
     */
    public $data;

    /**
     * @description pageSize
     * @var string
     */
    public $pageSize;

    /**
     * @description currentPage
     * @var string
     */
    public $pageNo;

    /**
     * @description totalCount
     * @var string
     */
    public $totalCount;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description message
     * @var string
     */
    public $message;

}

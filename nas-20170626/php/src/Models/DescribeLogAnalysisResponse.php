<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses;

class DescribeLogAnalysisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'code' => 'Code',
        'totalCount' => 'TotalCount',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'analyses' => 'Analyses',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('analyses', $this->analyses, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Code'] = $this->code;
        $res['TotalCount'] = $this->totalCount;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['Analyses'] = null !== $this->analyses ? $this->analyses->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeLogAnalysisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['TotalCount'])){
            $model->totalCount = $map['TotalCount'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['Analyses'])){
            $model->analyses = analyses::fromMap($map['Analyses']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description totalCount
     * @var integer
     */
    public $totalCount;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description data
     * @var analyses
     */
    public $analyses;

}

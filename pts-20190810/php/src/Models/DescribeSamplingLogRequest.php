<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeSamplingLogRequest extends Model
{
    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

    /**
     * @description chainId
     *
     * @var int
     */
    public $chainId;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description errorCode
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description httpResponseStatus
     *
     * @var string
     */
    public $httpResponseStatus;

    /**
     * @description rtRange
     *
     * @var string
     */
    public $rtRange;
    protected $_name = [
        'reportId'           => 'ReportId',
        'chainId'            => 'ChainId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'errorCode'          => 'ErrorCode',
        'httpResponseStatus' => 'HttpResponseStatus',
        'rtRange'            => 'RtRange',
    ];

    public function validate()
    {
        Model::validateRequired('reportId', $this->reportId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->httpResponseStatus) {
            $res['HttpResponseStatus'] = $this->httpResponseStatus;
        }
        if (null !== $this->rtRange) {
            $res['RtRange'] = $this->rtRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSamplingLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HttpResponseStatus'])) {
            $model->httpResponseStatus = $map['HttpResponseStatus'];
        }
        if (isset($map['RtRange'])) {
            $model->rtRange = $map['RtRange'];
        }

        return $model;
    }
}

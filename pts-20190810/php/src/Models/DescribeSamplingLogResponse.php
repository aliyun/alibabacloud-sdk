<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSamplingLogResponse\samplingLogs;
use AlibabaCloud\Tea\Model;

class DescribeSamplingLogResponse extends Model
{
    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description httpStatusCode
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

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
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description samplingLogs
     *
     * @var array
     */
    public $samplingLogs;
    protected $_name = [
        'message'        => 'Message',
        'httpStatusCode' => 'HttpStatusCode',
        'success'        => 'Success',
        'code'           => 'Code',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'samplingLogs'   => 'SamplingLogs',
    ];

    public function validate()
    {
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('samplingLogs', $this->samplingLogs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->samplingLogs) {
            $res['SamplingLogs'] = [];
            if (null !== $this->samplingLogs && \is_array($this->samplingLogs)) {
                $n = 0;
                foreach ($this->samplingLogs as $item) {
                    $res['SamplingLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSamplingLogResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['SamplingLogs'])) {
            if (!empty($map['SamplingLogs'])) {
                $model->samplingLogs = [];
                $n                   = 0;
                foreach ($map['SamplingLogs'] as $item) {
                    $model->samplingLogs[$n++] = null !== $item ? samplingLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

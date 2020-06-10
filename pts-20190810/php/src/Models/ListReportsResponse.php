<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\ListReportsResponse\reports;
use AlibabaCloud\Tea\Model;

class ListReportsResponse extends Model
{
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

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
     * @description success
     *
     * @var bool
     */
    public $success;

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
     * @description reports
     *
     * @var array
     */
    public $reports;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'code'           => 'Code',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'message'        => 'Message',
        'httpStatusCode' => 'HttpStatusCode',
        'reports'        => 'Reports',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('reports', $this->reports, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->reports) {
            $res['Reports'] = [];
            if (null !== $this->reports && \is_array($this->reports)) {
                $n = 0;
                foreach ($this->reports as $item) {
                    $res['Reports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListReportsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Reports'])) {
            if (!empty($map['Reports'])) {
                $model->reports = [];
                $n              = 0;
                foreach ($map['Reports'] as $item) {
                    $model->reports[$n++] = null !== $item ? reports::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

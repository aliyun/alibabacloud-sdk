<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponse\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeExporterRuleListResponse extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description msg
     *
     * @var string
     */
    public $message;

    /**
     * @description traceId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description currentPage
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description code
     *
     * @var bool
     */
    public $success;

    /**
     * @description datapoints
     *
     * @var datapoints
     */
    public $datapoints;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'pageNumber' => 'PageNumber',
        'success'    => 'Success',
        'datapoints' => 'Datapoints',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('datapoints', $this->datapoints, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = null !== $this->datapoints ? $this->datapoints->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExporterRuleListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = datapoints::fromMap($map['Datapoints']);
        }

        return $model;
    }
}

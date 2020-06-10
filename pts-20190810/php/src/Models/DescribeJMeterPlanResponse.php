<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeJMeterPlanResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description httpStatusCode
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description report
     *
     * @var string
     */
    public $report;
    protected $_name = [
        'requestId'      => 'RequestId',
        'message'        => 'Message',
        'code'           => 'Code',
        'success'        => 'Success',
        'httpStatusCode' => 'HttpStatusCode',
        'report'         => 'Report',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('report', $this->report, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->report) {
            $res['Report'] = $this->report;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterPlanResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Report'])) {
            $model->report = $map['Report'];
        }

        return $model;
    }
}

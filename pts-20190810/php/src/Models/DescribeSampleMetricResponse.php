<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleMetricResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

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
     * @description sampleMetricList
     *
     * @var string
     */
    public $sampleMetricList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'code'             => 'Code',
        'message'          => 'Message',
        'success'          => 'Success',
        'httpStatusCode'   => 'HttpStatusCode',
        'sampleMetricList' => 'SampleMetricList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('sampleMetricList', $this->sampleMetricList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->sampleMetricList) {
            $res['SampleMetricList'] = $this->sampleMetricList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSampleMetricResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['SampleMetricList'])) {
            $model->sampleMetricList = $map['SampleMetricList'];
        }

        return $model;
    }
}

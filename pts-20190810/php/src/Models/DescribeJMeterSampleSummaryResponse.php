<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class DescribeJMeterSampleSummaryResponse extends Model
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
     * @description concurrencyRtStat
     *
     * @var array
     */
    public $concurrencyRtStat;

    /**
     * @description concurrencyTpsStat
     *
     * @var array
     */
    public $concurrencyTpsStat;

    /**
     * @description rtDistribution
     *
     * @var array
     */
    public $rtDistribution;
    protected $_name = [
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'message'            => 'Message',
        'httpStatusCode'     => 'HttpStatusCode',
        'success'            => 'Success',
        'concurrencyRtStat'  => 'ConcurrencyRtStat',
        'concurrencyTpsStat' => 'ConcurrencyTpsStat',
        'rtDistribution'     => 'RtDistribution',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('concurrencyRtStat', $this->concurrencyRtStat, true);
        Model::validateRequired('concurrencyTpsStat', $this->concurrencyTpsStat, true);
        Model::validateRequired('rtDistribution', $this->rtDistribution, true);
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->concurrencyRtStat) {
            $res['ConcurrencyRtStat'] = $this->concurrencyRtStat;
        }
        if (null !== $this->concurrencyTpsStat) {
            $res['ConcurrencyTpsStat'] = $this->concurrencyTpsStat;
        }
        if (null !== $this->rtDistribution) {
            $res['RtDistribution'] = $this->rtDistribution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterSampleSummaryResponse
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
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ConcurrencyRtStat'])) {
            $model->concurrencyRtStat = $map['ConcurrencyRtStat'];
        }
        if (isset($map['ConcurrencyTpsStat'])) {
            $model->concurrencyTpsStat = $map['ConcurrencyTpsStat'];
        }
        if (isset($map['RtDistribution'])) {
            $model->rtDistribution = $map['RtDistribution'];
        }

        return $model;
    }
}

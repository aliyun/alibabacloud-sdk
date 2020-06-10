<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainSummaryResponse\chainSummary;
use AlibabaCloud\Tea\Model;

class DescribeReportChainSummaryResponse extends Model
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
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description chainSummary
     *
     * @var array
     */
    public $chainSummary;
    protected $_name = [
        'message'        => 'Message',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'code'           => 'Code',
        'success'        => 'Success',
        'chainSummary'   => 'ChainSummary',
    ];

    public function validate()
    {
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('chainSummary', $this->chainSummary, true);
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->chainSummary) {
            $res['ChainSummary'] = [];
            if (null !== $this->chainSummary && \is_array($this->chainSummary)) {
                $n = 0;
                foreach ($this->chainSummary as $item) {
                    $res['ChainSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportChainSummaryResponse
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ChainSummary'])) {
            if (!empty($map['ChainSummary'])) {
                $model->chainSummary = [];
                $n                   = 0;
                foreach ($map['ChainSummary'] as $item) {
                    $model->chainSummary[$n++] = null !== $item ? chainSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeReportChainDetailResponse\chainDetails;
use AlibabaCloud\Tea\Model;

class DescribeReportChainDetailResponse extends Model
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
     * @description chainDetails
     *
     * @var array
     */
    public $chainDetails;
    protected $_name = [
        'message'        => 'Message',
        'httpStatusCode' => 'HttpStatusCode',
        'success'        => 'Success',
        'requestId'      => 'RequestId',
        'code'           => 'Code',
        'chainDetails'   => 'ChainDetails',
    ];

    public function validate()
    {
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('chainDetails', $this->chainDetails, true);
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->chainDetails) {
            $res['ChainDetails'] = [];
            if (null !== $this->chainDetails && \is_array($this->chainDetails)) {
                $n = 0;
                foreach ($this->chainDetails as $item) {
                    $res['ChainDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReportChainDetailResponse
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ChainDetails'])) {
            if (!empty($map['ChainDetails'])) {
                $model->chainDetails = [];
                $n                   = 0;
                foreach ($map['ChainDetails'] as $item) {
                    $model->chainDetails[$n++] = null !== $item ? chainDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

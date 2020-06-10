<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSystemEventHistogramResponse\systemEventHistograms;
use AlibabaCloud\Tea\Model;

class DescribeSystemEventHistogramResponse extends Model
{
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
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description success
     *
     * @var string
     */
    public $success;

    /**
     * @description data
     *
     * @var systemEventHistograms
     */
    public $systemEventHistograms;
    protected $_name = [
        'code'                  => 'Code',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'systemEventHistograms' => 'SystemEventHistograms',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('systemEventHistograms', $this->systemEventHistograms, true);
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->systemEventHistograms) {
            $res['SystemEventHistograms'] = null !== $this->systemEventHistograms ? $this->systemEventHistograms->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemEventHistogramResponse
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SystemEventHistograms'])) {
            $model->systemEventHistograms = systemEventHistograms::fromMap($map['SystemEventHistograms']);
        }

        return $model;
    }
}

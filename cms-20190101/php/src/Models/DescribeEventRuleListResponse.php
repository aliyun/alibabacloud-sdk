<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponse\eventRules;
use AlibabaCloud\Tea\Model;

class DescribeEventRuleListResponse extends Model
{
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
     * @description datapoints
     *
     * @var eventRules
     */
    public $eventRules;
    protected $_name = [
        'success'    => 'Success',
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'eventRules' => 'EventRules',
    ];

    public function validate()
    {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('eventRules', $this->eventRules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
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
        if (null !== $this->eventRules) {
            $res['EventRules'] = null !== $this->eventRules ? $this->eventRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
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
        if (isset($map['EventRules'])) {
            $model->eventRules = eventRules::fromMap($map['EventRules']);
        }

        return $model;
    }
}

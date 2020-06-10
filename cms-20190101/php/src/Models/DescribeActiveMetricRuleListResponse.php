<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\alertList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeActiveMetricRuleListResponse extends Model
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
     * @description message
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
     * @description datapoints
     *
     * @var datapoints
     */
    public $datapoints;

    /**
     * @description dataList
     *
     * @var alertList
     */
    public $alertList;
    protected $_name = [
        'success'    => 'Success',
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'datapoints' => 'Datapoints',
        'alertList'  => 'AlertList',
    ];

    public function validate()
    {
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('datapoints', $this->datapoints, true);
        Model::validateRequired('alertList', $this->alertList, true);
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
        if (null !== $this->datapoints) {
            $res['Datapoints'] = null !== $this->datapoints ? $this->datapoints->toMap() : null;
        }
        if (null !== $this->alertList) {
            $res['AlertList'] = null !== $this->alertList ? $this->alertList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveMetricRuleListResponse
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
        if (isset($map['Datapoints'])) {
            $model->datapoints = datapoints::fromMap($map['Datapoints']);
        }
        if (isset($map['AlertList'])) {
            $model->alertList = alertList::fromMap($map['AlertList']);
        }

        return $model;
    }
}

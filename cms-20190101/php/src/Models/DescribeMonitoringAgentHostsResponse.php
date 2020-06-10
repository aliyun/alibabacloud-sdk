<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentHostsResponse\hosts;
use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentHostsResponse extends Model
{
    /**
     * @description errorCode
     *
     * @var string
     */
    public $code;

    /**
     * @description errorMessage
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
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description pageTotal
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description nodes
     *
     * @var hosts
     */
    public $hosts;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'pageTotal' => 'PageTotal',
        'total'     => 'Total',
        'hosts'     => 'Hosts',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageTotal', $this->pageTotal, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('hosts', $this->hosts, true);
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->hosts) {
            $res['Hosts'] = null !== $this->hosts ? $this->hosts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentHostsResponse
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Hosts'])) {
            $model->hosts = hosts::fromMap($map['Hosts']);
        }

        return $model;
    }
}

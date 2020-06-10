<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponse\nodeProcesses;
use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentProcessesResponse extends Model
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
     * @description nodeProcesses
     *
     * @var nodeProcesses
     */
    public $nodeProcesses;
    protected $_name = [
        'code'          => 'Code',
        'message'       => 'Message',
        'success'       => 'Success',
        'requestId'     => 'RequestId',
        'nodeProcesses' => 'NodeProcesses',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nodeProcesses', $this->nodeProcesses, true);
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
        if (null !== $this->nodeProcesses) {
            $res['NodeProcesses'] = null !== $this->nodeProcesses ? $this->nodeProcesses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentProcessesResponse
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
        if (isset($map['NodeProcesses'])) {
            $model->nodeProcesses = nodeProcesses::fromMap($map['NodeProcesses']);
        }

        return $model;
    }
}

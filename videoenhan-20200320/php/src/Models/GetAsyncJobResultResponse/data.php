<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models\GetAsyncJobResultResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description result
     *
     * @var string
     */
    public $result;

    /**
     * @description errorCode
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMessage
     *
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'jobId'        => 'JobId',
        'status'       => 'Status',
        'result'       => 'Result',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\GetAsyncJobResultResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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

    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;

    /**
     * @description result
     *
     * @var string
     */
    public $result;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'jobId'        => 'JobId',
        'result'       => 'Result',
        'status'       => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('errorCode', $this->errorCode, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('result', $this->result, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['ErrorCode']    = $this->errorCode;
        $res['ErrorMessage'] = $this->errorMessage;
        $res['JobId']        = $this->jobId;
        $res['Result']       = $this->result;
        $res['Status']       = $this->status;

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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

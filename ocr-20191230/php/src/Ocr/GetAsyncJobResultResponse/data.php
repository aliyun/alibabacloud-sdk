<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\GetAsyncJobResultResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $errorCode;
    public $errorMessage;
    public $jobId;
    public $result;
    public $status;
    protected $_required = [
        'errorCode'    => true,
        'errorMessage' => true,
        'jobId'        => true,
        'result'       => true,
        'status'       => true,
    ];
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'jobId'        => 'JobId',
        'result'       => 'Result',
        'status'       => 'Status',
    ];
    protected $_description = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
        'jobId'        => 'jobId',
        'result'       => 'result',
        'status'       => 'status',
    ];
}

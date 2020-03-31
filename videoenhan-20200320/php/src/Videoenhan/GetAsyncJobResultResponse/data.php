<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan\GetAsyncJobResultResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    public $jobId;
    public $status;
    public $result;
    public $errorCode;
    public $errorMessage;
    protected $_required = [
        'jobId'        => true,
        'status'       => true,
        'result'       => true,
        'errorCode'    => true,
        'errorMessage' => true,
    ];
    protected $_name = [
        'jobId'        => 'JobId',
        'status'       => 'Status',
        'result'       => 'Result',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];
    protected $_description = [
        'jobId'        => 'jobId',
        'status'       => 'status',
        'result'       => 'result',
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
    ];
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoseg\V20200320\Videoseg;

use AlibabaCloud\Tea\Model;

class GetAsyncJobResultResponse extends Model
{
    public $requestId;
    public $data;
    protected $_required = [
        'requestId' => true,
        'data'      => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'Data',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'data'      => 'data',
    ];
}

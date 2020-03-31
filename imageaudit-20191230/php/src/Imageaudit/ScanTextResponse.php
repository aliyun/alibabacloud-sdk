<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class ScanTextResponse extends Model
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

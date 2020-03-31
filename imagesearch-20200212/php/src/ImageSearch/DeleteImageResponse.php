<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class DeleteImageResponse extends Model
{
    public $requestId;
    public $success;
    public $message;
    public $code;
    protected $_required = [
        'requestId' => true,
        'success'   => true,
        'message'   => true,
        'code'      => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'message'   => 'Message',
        'code'      => 'Code',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'success'   => 'success',
        'message'   => 'msg',
        'code'      => 'code',
    ];
}

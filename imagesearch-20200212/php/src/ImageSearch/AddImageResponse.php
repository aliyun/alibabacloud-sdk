<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class AddImageResponse extends Model
{
    public $requestId;
    public $success;
    public $message;
    public $code;
    public $picInfo;
    protected $_required = [
        'requestId' => true,
        'success'   => true,
        'message'   => true,
        'code'      => true,
        'picInfo'   => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'message'   => 'Message',
        'code'      => 'Code',
        'picInfo'   => 'PicInfo',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'success'   => 'success',
        'message'   => 'msg',
        'code'      => 'code',
        'picInfo'   => 'picInfo',
    ];
}

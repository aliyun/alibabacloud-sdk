<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByNameResponse extends Model
{
    public $requestId;
    public $success;
    public $code;
    public $msg;
    public $auctions;
    public $head;
    public $picInfo;
    protected $_required = [
        'requestId' => true,
        'success'   => true,
        'code'      => true,
        'msg'       => true,
        'auctions'  => true,
        'head'      => true,
        'picInfo'   => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'code'      => 'Code',
        'msg'       => 'Msg',
        'auctions'  => 'Auctions',
        'head'      => 'Head',
        'picInfo'   => 'PicInfo',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'success'   => 'success',
        'code'      => 'code',
        'msg'       => 'msg',
        'auctions'  => 'auctions',
        'head'      => 'head',
        'picInfo'   => 'picInfo',
    ];
}

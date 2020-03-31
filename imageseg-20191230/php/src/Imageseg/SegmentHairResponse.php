<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg;

use AlibabaCloud\Tea\Model;

class SegmentHairResponse extends Model
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageRequest;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    public $dataId;

    public $imageURL;

    public $imageTimeMillisecond;

    public $interval;

    public $maxFrames;
    protected $_name = [
        'dataId'               => 'DataId',
        'imageURL'             => 'ImageURL',
        'imageTimeMillisecond' => 'ImageTimeMillisecond',
        'interval'             => 'Interval',
        'maxFrames'            => 'MaxFrames',
    ];
}

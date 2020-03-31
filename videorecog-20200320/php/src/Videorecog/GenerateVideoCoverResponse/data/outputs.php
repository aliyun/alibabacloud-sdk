<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverResponse\data;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    public $imageURL;
    public $confidence;
    public $time;
    public $faceCount;
    public $startTime;
    public $endTime;
    protected $_required = [
        'imageURL'   => true,
        'confidence' => true,
        'time'       => true,
        'faceCount'  => true,
        'startTime'  => true,
        'endTime'    => true,
    ];
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'confidence' => 'Confidence',
        'time'       => 'Time',
        'faceCount'  => 'FaceCount',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
    ];
    protected $_description = [
        'imageURL'   => 'imageUrl',
        'confidence' => 'confidence',
        'time'       => 'time',
        'faceCount'  => 'faceCount',
        'startTime'  => 'startTime',
        'endTime'    => 'endTime',
    ];
}

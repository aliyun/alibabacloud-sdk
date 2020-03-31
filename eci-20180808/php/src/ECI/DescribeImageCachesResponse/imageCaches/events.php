<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeImageCachesResponse\imageCaches;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    public $count;
    public $type;
    public $name;
    public $message;
    public $firstTimestamp;
    public $lastTimestamp;
    protected $_required = [
        'count'          => true,
        'type'           => true,
        'name'           => true,
        'message'        => true,
        'firstTimestamp' => true,
        'lastTimestamp'  => true,
    ];
    protected $_name = [
        'count'          => 'Count',
        'type'           => 'Type',
        'name'           => 'Name',
        'message'        => 'Message',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp'  => 'LastTimestamp',
    ];
    protected $_description = [
        'count'          => 'count',
        'type'           => 'type',
        'name'           => 'name',
        'message'        => 'message',
        'firstTimestamp' => 'firstTimestamp',
        'lastTimestamp'  => 'lastTimestamp',
    ];
}

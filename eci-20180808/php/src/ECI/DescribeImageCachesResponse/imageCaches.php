<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeImageCachesResponse;

use AlibabaCloud\Tea\Model;

class imageCaches extends Model
{
    public $containerGroupId;

    public $imageCacheId;

    public $imageCacheName;

    public $snapshotId;

    public $progress;

    public $status;

    public $expireDateTime;

    public $creationTime;

    public $events;

    public $images;
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'imageCacheId'     => 'ImageCacheId',
        'imageCacheName'   => 'ImageCacheName',
        'snapshotId'       => 'SnapshotId',
        'progress'         => 'Progress',
        'status'           => 'Status',
        'expireDateTime'   => 'ExpireDateTime',
        'creationTime'     => 'CreationTime',
        'events'           => 'Events',
        'images'           => 'Images',
    ];
}

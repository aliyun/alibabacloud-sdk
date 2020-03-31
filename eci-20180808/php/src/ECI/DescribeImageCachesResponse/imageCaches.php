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
    protected $_required = [
        'containerGroupId' => true,
        'imageCacheId'     => true,
        'imageCacheName'   => true,
        'snapshotId'       => true,
        'progress'         => true,
        'status'           => true,
        'expireDateTime'   => true,
        'creationTime'     => true,
        'events'           => true,
        'images'           => true,
    ];
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
    protected $_description = [
        'containerGroupId' => 'containerGroupId',
        'imageCacheId'     => 'imageCacheId',
        'imageCacheName'   => 'imageCacheName',
        'snapshotId'       => 'snapshotId',
        'progress'         => 'progress',
        'status'           => 'status',
        'expireDateTime'   => 'expireDate',
        'creationTime'     => 'creationTime',
        'events'           => 'events',
        'images'           => 'images',
    ];
}

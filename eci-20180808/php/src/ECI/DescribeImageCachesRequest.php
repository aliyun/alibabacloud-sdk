<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeImageCachesRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $imageCacheId;
    public $imageCacheName;
    public $snapshotId;
    public $image;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'imageCacheId'         => 'ImageCacheId',
        'imageCacheName'       => 'ImageCacheName',
        'snapshotId'           => 'SnapshotId',
        'image'                => 'Image',
    ];
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'imageCacheId'         => 'imageCacheId',
        'imageCacheName'       => 'imageCacheName',
        'snapshotId'           => 'snapshotId',
        'image'                => 'image',
    ];
    protected $_required = [
        'regionId' => true,
    ];
}

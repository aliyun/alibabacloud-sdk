<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DeleteImageCacheRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $imageCacheId;
    public $clientToken;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'imageCacheId'         => 'ImageCacheId',
        'clientToken'          => 'ClientToken',
    ];
    protected $_description = [
        'ownerId'              => 'ownerId',
        'resourceOwnerAccount' => 'resourceOwnerAccount',
        'resourceOwnerId'      => 'resourceOwnerId',
        'ownerAccount'         => 'ownerAccount',
        'regionId'             => 'regionId',
        'imageCacheId'         => 'imageCacheId',
        'clientToken'          => 'clientToken',
    ];
    protected $_required = [
        'regionId'     => true,
        'imageCacheId' => true,
    ];
}

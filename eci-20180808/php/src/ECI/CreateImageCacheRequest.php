<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class CreateImageCacheRequest extends Model
{
    public $ownerId;
    public $resourceOwnerAccount;
    public $resourceOwnerId;
    public $ownerAccount;
    public $regionId;
    public $zoneId;
    public $securityGroupId;
    public $VSwitchId;
    public $imageCacheName;
    public $imageRegistryCredential;
    public $eipInstanceId;
    public $resourceGroupId;
    public $clientToken;
    public $image;
    public $imageCacheSize;
    public $retentionDays;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'ownerAccount'            => 'OwnerAccount',
        'regionId'                => 'RegionId',
        'zoneId'                  => 'ZoneId',
        'securityGroupId'         => 'SecurityGroupId',
        'VSwitchId'               => 'VSwitchId',
        'imageCacheName'          => 'ImageCacheName',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'eipInstanceId'           => 'EipInstanceId',
        'resourceGroupId'         => 'ResourceGroupId',
        'clientToken'             => 'ClientToken',
        'image'                   => 'Image',
        'imageCacheSize'          => 'ImageCacheSize',
        'retentionDays'           => 'RetentionDays',
    ];
    protected $_description = [
        'ownerId'                 => 'ownerId',
        'resourceOwnerAccount'    => 'resourceOwnerAccount',
        'resourceOwnerId'         => 'resourceOwnerId',
        'ownerAccount'            => 'ownerAccount',
        'regionId'                => 'regionId',
        'zoneId'                  => 'zoneId',
        'securityGroupId'         => 'linkedSecurityGroupId',
        'VSwitchId'               => 'linkedVSwitchId',
        'imageCacheName'          => 'containerGroupName',
        'imageRegistryCredential' => 'imageRegistryCredentials',
        'eipInstanceId'           => 'eipInstanceId',
        'resourceGroupId'         => 'resourceGroupId',
        'clientToken'             => 'clientToken',
        'image'                   => 'images',
        'imageCacheSize'          => 'imageCacheSize',
        'retentionDays'           => 'retentionDays',
    ];
    protected $_required = [
        'regionId'        => true,
        'securityGroupId' => true,
        'VSwitchId'       => true,
        'imageCacheName'  => true,
        'image'           => true,
    ];
}

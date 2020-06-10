<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\diskDeviceMapping;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest\tag;
use AlibabaCloud\Tea\Model;

class ImportImageRequest extends Model
{
    /**
     * @description dataDiskDeviceMappingParam
     *
     * @var array
     */
    public $diskDeviceMapping;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description imageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description architecture
     *
     * @var string
     */
    public $architecture;

    /**
     * @description osType
     *
     * @var string
     */
    public $OSType;

    /**
     * @description platform
     *
     * @var string
     */
    public $platform;

    /**
     * @description roleName
     *
     * @var string
     */
    public $roleName;

    /**
     * @description licenseType
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'diskDeviceMapping'    => 'DiskDeviceMapping',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'imageName'            => 'ImageName',
        'description'          => 'Description',
        'architecture'         => 'Architecture',
        'OSType'               => 'OSType',
        'platform'             => 'Platform',
        'roleName'             => 'RoleName',
        'licenseType'          => 'LicenseType',
        'tag'                  => 'Tag',
        'resourceGroupId'      => 'ResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskDeviceMapping) {
            $res['DiskDeviceMapping'] = [];
            if (null !== $this->diskDeviceMapping && \is_array($this->diskDeviceMapping)) {
                $n = 0;
                foreach ($this->diskDeviceMapping as $item) {
                    $res['DiskDeviceMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n                        = 0;
                foreach ($map['DiskDeviceMapping'] as $item) {
                    $model->diskDeviceMapping[$n++] = null !== $item ? diskDeviceMapping::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

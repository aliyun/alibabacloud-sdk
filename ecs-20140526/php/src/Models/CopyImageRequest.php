<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageRequest\tag;
use AlibabaCloud\Tea\Model;

class CopyImageRequest extends Model
{
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
     * @description toImageName
     *
     * @var string
     */
    public $destinationImageName;

    /**
     * @description toImageDesc
     *
     * @var string
     */
    public $destinationDescription;

    /**
     * @description fromImageNo
     *
     * @var string
     */
    public $imageId;

    /**
     * @description fromRegionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description toRegionNo
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description toEncrypted
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description kmsKeyId
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description encryptAlgorithm
     *
     * @var string
     */
    public $encryptAlgorithm;
    protected $_name = [
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'destinationImageName'   => 'DestinationImageName',
        'destinationDescription' => 'DestinationDescription',
        'imageId'                => 'ImageId',
        'regionId'               => 'RegionId',
        'destinationRegionId'    => 'DestinationRegionId',
        'ownerAccount'           => 'OwnerAccount',
        'tag'                    => 'Tag',
        'encrypted'              => 'Encrypted',
        'KMSKeyId'               => 'KMSKeyId',
        'encryptAlgorithm'       => 'EncryptAlgorithm',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->destinationImageName) {
            $res['DestinationImageName'] = $this->destinationImageName;
        }
        if (null !== $this->destinationDescription) {
            $res['DestinationDescription'] = $this->destinationDescription;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DestinationImageName'])) {
            $model->destinationImageName = $map['DestinationImageName'];
        }
        if (isset($map['DestinationDescription'])) {
            $model->destinationDescription = $map['DestinationDescription'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }

        return $model;
    }
}

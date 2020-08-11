<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CopyImageRequest\tag;
use AlibabaCloud\Tea\Model;

class CopyImageRequest extends Model
{
    /**
     * @var string
     */
    public $destinationImageName;

    /**
     * @var string
     */
    public $destinationDescription;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $destinationRegionId;

    /**
     * @var array
     */
    public $tag;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'destinationImageName'   => 'DestinationImageName',
        'destinationDescription' => 'DestinationDescription',
        'imageId'                => 'ImageId',
        'regionId'               => 'RegionId',
        'destinationRegionId'    => 'DestinationRegionId',
        'tag'                    => 'Tag',
        'encrypted'              => 'Encrypted',
        'KMSKeyId'               => 'KMSKeyId',
        'encryptAlgorithm'       => 'EncryptAlgorithm',
        'resourceGroupId'        => 'ResourceGroupId',
    ];

    public function validate()
    {
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}

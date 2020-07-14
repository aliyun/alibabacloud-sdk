<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest\imageRegistryCredential;
use AlibabaCloud\Tea\Model;

class CreateImageCacheRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description linkedSecurityGroupId
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description linkedVSwitchId
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description containerGroupName
     *
     * @var string
     */
    public $imageCacheName;

    /**
     * @description imageRegistryCredentials
     *
     * @var array
     */
    public $imageRegistryCredential;

    /**
     * @description eipInstanceId
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description images
     *
     * @var array
     */
    public $image;

    /**
     * @description imageCacheSize
     *
     * @var int
     */
    public $imageCacheSize;

    /**
     * @description retentionDays
     *
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'regionId'                => 'RegionId',
        'zoneId'                  => 'ZoneId',
        'securityGroupId'         => 'SecurityGroupId',
        'vSwitchId'               => 'VSwitchId',
        'imageCacheName'          => 'ImageCacheName',
        'imageRegistryCredential' => 'ImageRegistryCredential',
        'eipInstanceId'           => 'EipInstanceId',
        'resourceGroupId'         => 'ResourceGroupId',
        'clientToken'             => 'ClientToken',
        'image'                   => 'Image',
        'imageCacheSize'          => 'ImageCacheSize',
        'retentionDays'           => 'RetentionDays',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('imageCacheName', $this->imageCacheName, true);
        Model::validateRequired('image', $this->image, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }
        if (null !== $this->imageRegistryCredential) {
            $res['ImageRegistryCredential'] = [];
            if (null !== $this->imageRegistryCredential && \is_array($this->imageRegistryCredential)) {
                $n = 0;
                foreach ($this->imageRegistryCredential as $item) {
                    $res['ImageRegistryCredential'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->image) {
            $res['Image'] = [];
            if (null !== $this->image) {
                $res['Image'] = $this->image;
            }
        }
        if (null !== $this->imageCacheSize) {
            $res['ImageCacheSize'] = $this->imageCacheSize;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }
        if (isset($map['ImageRegistryCredential'])) {
            if (!empty($map['ImageRegistryCredential'])) {
                $model->imageRegistryCredential = [];
                $n                              = 0;
                foreach ($map['ImageRegistryCredential'] as $item) {
                    $model->imageRegistryCredential[$n++] = null !== $item ? imageRegistryCredential::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = [];
                $model->image = $map['Image'];
            }
        }
        if (isset($map['ImageCacheSize'])) {
            $model->imageCacheSize = $map['ImageCacheSize'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        return $model;
    }
}

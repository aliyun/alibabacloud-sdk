<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageCachesRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description imageCacheId
     *
     * @var string
     */
    public $imageCacheId;

    /**
     * @description imageCacheName
     *
     * @var string
     */
    public $imageCacheName;

    /**
     * @description snapshotId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description image
     *
     * @var string
     */
    public $image;
    protected $_name = [
        'regionId'       => 'RegionId',
        'imageCacheId'   => 'ImageCacheId',
        'imageCacheName' => 'ImageCacheName',
        'snapshotId'     => 'SnapshotId',
        'image'          => 'Image',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->imageCacheId) {
            $res['ImageCacheId'] = $this->imageCacheId;
        }
        if (null !== $this->imageCacheName) {
            $res['ImageCacheName'] = $this->imageCacheName;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ImageCacheId'])) {
            $model->imageCacheId = $map['ImageCacheId'];
        }
        if (isset($map['ImageCacheName'])) {
            $model->imageCacheName = $map['ImageCacheName'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeImageCachesResponse\imageCaches\events;
use AlibabaCloud\Tea\Model;

class imageCaches extends Model
{
    /**
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

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
     * @description progress
     *
     * @var string
     */
    public $progress;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description expireDate
     *
     * @var string
     */
    public $expireDateTime;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description events
     *
     * @var array
     */
    public $events;

    /**
     * @description images
     *
     * @var array
     */
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

    public function validate()
    {
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('imageCacheId', $this->imageCacheId, true);
        Model::validateRequired('imageCacheName', $this->imageCacheName, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('expireDateTime', $this->expireDateTime, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('events', $this->events, true);
        Model::validateRequired('images', $this->images, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->expireDateTime) {
            $res['ExpireDateTime'] = $this->expireDateTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images) {
                $res['Images'] = $this->images;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCaches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ExpireDateTime'])) {
            $model->expireDateTime = $map['ExpireDateTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $model->images = $map['Images'];
            }
        }

        return $model;
    }
}

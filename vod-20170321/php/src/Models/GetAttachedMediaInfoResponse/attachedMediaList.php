<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponse\attachedMediaList\categories;
use AlibabaCloud\Tea\Model;

class attachedMediaList extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description url
     *
     * @var string
     */
    public $URL;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description fileSize
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description storageLocation
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description utcCreate
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description utcModified
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description onlineStatus
     *
     * @var string
     */
    public $onlineStatus;

    /**
     * @description icon
     *
     * @var string
     */
    public $icon;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description categories
     *
     * @var array
     */
    public $categories;
    protected $_name = [
        'mediaId'          => 'MediaId',
        'title'            => 'Title',
        'type'             => 'Type',
        'tags'             => 'Tags',
        'URL'              => 'URL',
        'description'      => 'Description',
        'fileSize'         => 'FileSize',
        'storageLocation'  => 'StorageLocation',
        'creationTime'     => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'appId'            => 'AppId',
        'status'           => 'Status',
        'onlineStatus'     => 'OnlineStatus',
        'icon'             => 'Icon',
        'regionId'         => 'RegionId',
        'categories'       => 'Categories',
    ];

    public function validate()
    {
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('URL', $this->URL, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('fileSize', $this->fileSize, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('onlineStatus', $this->onlineStatus, true);
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('categories', $this->categories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachedMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

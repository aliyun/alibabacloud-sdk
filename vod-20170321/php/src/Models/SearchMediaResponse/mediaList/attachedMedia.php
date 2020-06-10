<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList\attachedMedia\categories;
use AlibabaCloud\Tea\Model;

class attachedMedia extends Model
{
    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description ext
     *
     * @var string
     */
    public $ext;

    /**
     * @description ct
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description mt
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description type
     *
     * @var string
     */
    public $businessType;

    /**
     * @description url
     *
     * @var string
     */
    public $URL;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description desc
     *
     * @var string
     */
    public $description;

    /**
     * @description storageLocation
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description icon
     *
     * @var string
     */
    public $icon;

    /**
     * @description onlineStatus
     *
     * @var string
     */
    public $onlineStatus;

    /**
     * @description categories
     *
     * @var array
     */
    public $categories;
    protected $_name = [
        'title'            => 'Title',
        'mediaId'          => 'MediaId',
        'ext'              => 'Ext',
        'creationTime'     => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'tags'             => 'Tags',
        'businessType'     => 'BusinessType',
        'URL'              => 'URL',
        'status'           => 'Status',
        'description'      => 'Description',
        'storageLocation'  => 'StorageLocation',
        'regionId'         => 'RegionId',
        'appId'            => 'AppId',
        'icon'             => 'Icon',
        'onlineStatus'     => 'OnlineStatus',
        'categories'       => 'Categories',
    ];

    public function validate()
    {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('ext', $this->ext, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('businessType', $this->businessType, true);
        Model::validateRequired('URL', $this->URL, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('onlineStatus', $this->onlineStatus, true);
        Model::validateRequired('categories', $this->categories, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
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
     * @return attachedMedia
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
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

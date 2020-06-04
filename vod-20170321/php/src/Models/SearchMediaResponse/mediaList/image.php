<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList;

use AlibabaCloud\Tea\Model;

class image extends Model {
    protected $_name = [
        'title' => 'Title',
        'imageId' => 'ImageId',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'ext' => 'Ext',
        'creationTime' => 'CreationTime',
        'modificationTime' => 'ModificationTime',
        'tags' => 'Tags',
        'type' => 'Type',
        'URL' => 'URL',
        'status' => 'Status',
        'description' => 'Description',
        'storageLocation' => 'StorageLocation',
        'regionId' => 'RegionId',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('ext', $this->ext, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('URL', $this->URL, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        $res['Title'] = $this->title;
        $res['ImageId'] = $this->imageId;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['Ext'] = $this->ext;
        $res['CreationTime'] = $this->creationTime;
        $res['ModificationTime'] = $this->modificationTime;
        $res['Tags'] = $this->tags;
        $res['Type'] = $this->type;
        $res['URL'] = $this->URL;
        $res['Status'] = $this->status;
        $res['Description'] = $this->description;
        $res['StorageLocation'] = $this->storageLocation;
        $res['RegionId'] = $this->regionId;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return image
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['ImageId'])){
            $model->imageId = $map['ImageId'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['Ext'])){
            $model->ext = $map['Ext'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['URL'])){
            $model->URL = $map['URL'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        return $model;
    }
    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description imageId
     * @var string
     */
    public $imageId;

    /**
     * @description cateId
     * @var integer
     */
    public $cateId;

    /**
     * @description cateName
     * @var string
     */
    public $cateName;

    /**
     * @description ext
     * @var string
     */
    public $ext;

    /**
     * @description ct
     * @var string
     */
    public $creationTime;

    /**
     * @description mt
     * @var string
     */
    public $modificationTime;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description url
     * @var string
     */
    public $URL;

    /**
     * @description status
     * @var string
     */
    public $status;

    /**
     * @description desc
     * @var string
     */
    public $description;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}

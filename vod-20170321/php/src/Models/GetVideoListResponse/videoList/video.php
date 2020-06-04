<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse\videoList;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoListResponse\videoList\video\snapshots;

class video extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'title' => 'Title',
        'tags' => 'Tags',
        'status' => 'Status',
        'size' => 'Size',
        'duration' => 'Duration',
        'description' => 'Description',
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'modificationTime' => 'ModificationTime',
        'creationTime' => 'CreationTime',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'storageLocation' => 'StorageLocation',
        'appId' => 'AppId',
        'snapshots' => 'Snapshots',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Status'] = $this->status;
        $res['Size'] = $this->size;
        $res['Duration'] = $this->duration;
        $res['Description'] = $this->description;
        $res['CreateTime'] = $this->createTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['ModificationTime'] = $this->modificationTime;
        $res['CreationTime'] = $this->creationTime;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['StorageLocation'] = $this->storageLocation;
        $res['AppId'] = $this->appId;
        $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return video
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Size'])){
            $model->size = $map['Size'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['ModificationTime'])){
            $model->modificationTime = $map['ModificationTime'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['CateId'])){
            $model->cateId = $map['CateId'];
        }
        if(isset($map['CateName'])){
            $model->cateName = $map['CateName'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['Snapshots'])){
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $videoId;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description tags
     * @var string
     */
    public $tags;

    /**
     * @description state
     * @var string
     */
    public $status;

    /**
     * @description fileSize
     * @var integer
     */
    public $size;

    /**
     * @description duration
     * @var float
     */
    public $duration;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description gmtCreate
     * @var string
     */
    public $createTime;

    /**
     * @description gmtModified
     * @var string
     */
    public $modifyTime;

    /**
     * @description modificationTime
     * @var string
     */
    public $modificationTime;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

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
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description snapshots
     * @var snapshots
     */
    public $snapshots;

}

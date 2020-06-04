<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponse\mediaList;

use AlibabaCloud\Tea\Model;

class audio extends Model {
    protected $_name = [
        'audioId' => 'AudioId',
        'mediaSource' => 'MediaSource',
        'title' => 'Title',
        'tags' => 'Tags',
        'status' => 'Status',
        'size' => 'Size',
        'duration' => 'Duration',
        'description' => 'Description',
        'modificationTime' => 'ModificationTime',
        'creationTime' => 'CreationTime',
        'coverURL' => 'CoverURL',
        'cateId' => 'CateId',
        'cateName' => 'CateName',
        'downloadSwitch' => 'DownloadSwitch',
        'preprocessStatus' => 'PreprocessStatus',
        'storageLocation' => 'StorageLocation',
        'regionId' => 'RegionId',
        'transcodeMode' => 'TranscodeMode',
        'auditStatus' => 'AuditStatus',
        'auditAIStatus' => 'AuditAIStatus',
        'auditManualStatus' => 'AuditManualStatus',
        'auditAIResult' => 'AuditAIResult',
        'auditTemplateId' => 'AuditTemplateId',
        'customMediaInfo' => 'CustomMediaInfo',
        'appId' => 'AppId',
        'snapshots' => 'Snapshots',
        'spriteSnapshots' => 'SpriteSnapshots',
    ];
    public function validate() {
        Model::validateRequired('audioId', $this->audioId, true);
        Model::validateRequired('mediaSource', $this->mediaSource, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('modificationTime', $this->modificationTime, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('downloadSwitch', $this->downloadSwitch, true);
        Model::validateRequired('preprocessStatus', $this->preprocessStatus, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('transcodeMode', $this->transcodeMode, true);
        Model::validateRequired('auditStatus', $this->auditStatus, true);
        Model::validateRequired('auditAIStatus', $this->auditAIStatus, true);
        Model::validateRequired('auditManualStatus', $this->auditManualStatus, true);
        Model::validateRequired('auditAIResult', $this->auditAIResult, true);
        Model::validateRequired('auditTemplateId', $this->auditTemplateId, true);
        Model::validateRequired('customMediaInfo', $this->customMediaInfo, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
        Model::validateRequired('spriteSnapshots', $this->spriteSnapshots, true);
    }
    public function toMap() {
        $res = [];
        $res['AudioId'] = $this->audioId;
        $res['MediaSource'] = $this->mediaSource;
        $res['Title'] = $this->title;
        $res['Tags'] = $this->tags;
        $res['Status'] = $this->status;
        $res['Size'] = $this->size;
        $res['Duration'] = $this->duration;
        $res['Description'] = $this->description;
        $res['ModificationTime'] = $this->modificationTime;
        $res['CreationTime'] = $this->creationTime;
        $res['CoverURL'] = $this->coverURL;
        $res['CateId'] = $this->cateId;
        $res['CateName'] = $this->cateName;
        $res['DownloadSwitch'] = $this->downloadSwitch;
        $res['PreprocessStatus'] = $this->preprocessStatus;
        $res['StorageLocation'] = $this->storageLocation;
        $res['RegionId'] = $this->regionId;
        $res['TranscodeMode'] = $this->transcodeMode;
        $res['AuditStatus'] = $this->auditStatus;
        $res['AuditAIStatus'] = $this->auditAIStatus;
        $res['AuditManualStatus'] = $this->auditManualStatus;
        $res['AuditAIResult'] = $this->auditAIResult;
        $res['AuditTemplateId'] = $this->auditTemplateId;
        $res['CustomMediaInfo'] = $this->customMediaInfo;
        $res['AppId'] = $this->appId;
        $res['Snapshots'] = [];
        if(null !== $this->snapshots){
            $res['Snapshots'] = $this->snapshots;
        }
        $res['SpriteSnapshots'] = [];
        if(null !== $this->spriteSnapshots){
            $res['SpriteSnapshots'] = $this->spriteSnapshots;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return audio
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AudioId'])){
            $model->audioId = $map['AudioId'];
        }
        if(isset($map['MediaSource'])){
            $model->mediaSource = $map['MediaSource'];
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
        if(isset($map['DownloadSwitch'])){
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if(isset($map['PreprocessStatus'])){
            $model->preprocessStatus = $map['PreprocessStatus'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['TranscodeMode'])){
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if(isset($map['AuditStatus'])){
            $model->auditStatus = $map['AuditStatus'];
        }
        if(isset($map['AuditAIStatus'])){
            $model->auditAIStatus = $map['AuditAIStatus'];
        }
        if(isset($map['AuditManualStatus'])){
            $model->auditManualStatus = $map['AuditManualStatus'];
        }
        if(isset($map['AuditAIResult'])){
            $model->auditAIResult = $map['AuditAIResult'];
        }
        if(isset($map['AuditTemplateId'])){
            $model->auditTemplateId = $map['AuditTemplateId'];
        }
        if(isset($map['CustomMediaInfo'])){
            $model->customMediaInfo = $map['CustomMediaInfo'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['Snapshots'])){
            if(!empty($map['Snapshots'])){
                $model->snapshots = [];
                $model->snapshots = $map['Snapshots'];
            }
        }
        if(isset($map['SpriteSnapshots'])){
            if(!empty($map['SpriteSnapshots'])){
                $model->spriteSnapshots = [];
                $model->spriteSnapshots = $map['SpriteSnapshots'];
            }
        }
        return $model;
    }
    /**
     * @description mediaId
     * @var string
     */
    public $audioId;

    /**
     * @description source
     * @var string
     */
    public $mediaSource;

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
     * @description download
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description preprocessStatus
     * @var string
     */
    public $preprocessStatus;

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
     * @description transcodeMode
     * @var string
     */
    public $transcodeMode;

    /**
     * @description auditStatus
     * @var string
     */
    public $auditStatus;

    /**
     * @description auditAIStatus
     * @var string
     */
    public $auditAIStatus;

    /**
     * @description auditManualStatus
     * @var string
     */
    public $auditManualStatus;

    /**
     * @description auditAIResult
     * @var string
     */
    public $auditAIResult;

    /**
     * @description auditTemplateId
     * @var string
     */
    public $auditTemplateId;

    /**
     * @description customMediaInfo
     * @var string
     */
    public $customMediaInfo;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description snapshots
     * @var array
     */
    public $snapshots;

    /**
     * @description spriteImages
     * @var array
     */
    public $spriteSnapshots;

}

<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponse\projectList;

use AlibabaCloud\Tea\Model;

class project extends Model {
    protected $_name = [
        'projectId' => 'ProjectId',
        'creationTime' => 'CreationTime',
        'modifiedTime' => 'ModifiedTime',
        'status' => 'Status',
        'description' => 'Description',
        'title' => 'Title',
        'coverURL' => 'CoverURL',
        'storageLocation' => 'StorageLocation',
        'regionId' => 'RegionId',
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('storageLocation', $this->storageLocation, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('duration', $this->duration, true);
    }
    public function toMap() {
        $res = [];
        $res['ProjectId'] = $this->projectId;
        $res['CreationTime'] = $this->creationTime;
        $res['ModifiedTime'] = $this->modifiedTime;
        $res['Status'] = $this->status;
        $res['Description'] = $this->description;
        $res['Title'] = $this->title;
        $res['CoverURL'] = $this->coverURL;
        $res['StorageLocation'] = $this->storageLocation;
        $res['RegionId'] = $this->regionId;
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return project
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModifiedTime'])){
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['Title'])){
            $model->title = $map['Title'];
        }
        if(isset($map['CoverURL'])){
            $model->coverURL = $map['CoverURL'];
        }
        if(isset($map['StorageLocation'])){
            $model->storageLocation = $map['StorageLocation'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        return $model;
    }
    /**
     * @description projectId
     * @var string
     */
    public $projectId;

    /**
     * @description utcCreate
     * @var string
     */
    public $creationTime;

    /**
     * @description utcModified
     * @var string
     */
    public $modifiedTime;

    /**
     * @description stateStr
     * @var string
     */
    public $status;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description title
     * @var string
     */
    public $title;

    /**
     * @description coverUrl
     * @var string
     */
    public $coverURL;

    /**
     * @description storageLocation
     * @var string
     */
    public $storageLocation;

    /**
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description duration
     * @var float
     */
    public $duration;

}

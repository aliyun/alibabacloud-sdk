<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo\video\snapshots;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description mediaId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description tags
     *
     * @var string
     */
    public $tags;

    /**
     * @description state
     *
     * @var string
     */
    public $status;

    /**
     * @description fileSize
     *
     * @var int
     */
    public $size;

    /**
     * @description publicType
     *
     * @var int
     */
    public $privilege;

    /**
     * @description duration
     *
     * @var float
     */
    public $duration;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description userId
     *
     * @var int
     */
    public $customerId;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createTime;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description coverUrl
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description cateId
     *
     * @var int
     */
    public $cateId;

    /**
     * @description cateName
     *
     * @var string
     */
    public $cateName;

    /**
     * @description download
     *
     * @var string
     */
    public $downloadSwitch;

    /**
     * @description templateGroupId
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @description snapshots
     *
     * @var snapshots
     */
    public $snapshots;
    protected $_name = [
        'videoId'         => 'VideoId',
        'title'           => 'Title',
        'tags'            => 'Tags',
        'status'          => 'Status',
        'size'            => 'Size',
        'privilege'       => 'Privilege',
        'duration'        => 'Duration',
        'description'     => 'Description',
        'customerId'      => 'CustomerId',
        'createTime'      => 'CreateTime',
        'creationTime'    => 'CreationTime',
        'modifyTime'      => 'ModifyTime',
        'coverURL'        => 'CoverURL',
        'cateId'          => 'CateId',
        'cateName'        => 'CateName',
        'downloadSwitch'  => 'DownloadSwitch',
        'templateGroupId' => 'TemplateGroupId',
        'snapshots'       => 'Snapshots',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('title', $this->title, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('privilege', $this->privilege, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('customerId', $this->customerId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('coverURL', $this->coverURL, true);
        Model::validateRequired('cateId', $this->cateId, true);
        Model::validateRequired('cateName', $this->cateName, true);
        Model::validateRequired('downloadSwitch', $this->downloadSwitch, true);
        Model::validateRequired('templateGroupId', $this->templateGroupId, true);
        Model::validateRequired('snapshots', $this->snapshots, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = null !== $this->snapshots ? $this->snapshots->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = snapshots::fromMap($map['Snapshots']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo\playInfoList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLiveRecordVideoResponse\liveRecordVideoList\liveRecordVideo\video;
use AlibabaCloud\Tea\Model;

class liveRecordVideo extends Model
{
    /**
     * @description streamName
     *
     * @var string
     */
    public $streamName;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description appName
     *
     * @var string
     */
    public $appName;

    /**
     * @description playlistId
     *
     * @var string
     */
    public $playlistId;

    /**
     * @description recordStartTime
     *
     * @var string
     */
    public $recordStartTime;

    /**
     * @description recordEndTime
     *
     * @var string
     */
    public $recordEndTime;

    /**
     * @description playInfoList
     *
     * @var playInfoList
     */
    public $playInfoList;

    /**
     * @description mediaInfo
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'streamName'      => 'StreamName',
        'domainName'      => 'DomainName',
        'appName'         => 'AppName',
        'playlistId'      => 'PlaylistId',
        'recordStartTime' => 'RecordStartTime',
        'recordEndTime'   => 'RecordEndTime',
        'playInfoList'    => 'PlayInfoList',
        'video'           => 'Video',
    ];

    public function validate()
    {
        Model::validateRequired('streamName', $this->streamName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('playlistId', $this->playlistId, true);
        Model::validateRequired('recordStartTime', $this->recordStartTime, true);
        Model::validateRequired('recordEndTime', $this->recordEndTime, true);
        Model::validateRequired('playInfoList', $this->playInfoList, true);
        Model::validateRequired('video', $this->video, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->playlistId) {
            $res['PlaylistId'] = $this->playlistId;
        }
        if (null !== $this->recordStartTime) {
            $res['RecordStartTime'] = $this->recordStartTime;
        }
        if (null !== $this->recordEndTime) {
            $res['RecordEndTime'] = $this->recordEndTime;
        }
        if (null !== $this->playInfoList) {
            $res['PlayInfoList'] = null !== $this->playInfoList ? $this->playInfoList->toMap() : null;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveRecordVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['PlaylistId'])) {
            $model->playlistId = $map['PlaylistId'];
        }
        if (isset($map['RecordStartTime'])) {
            $model->recordStartTime = $map['RecordStartTime'];
        }
        if (isset($map['RecordEndTime'])) {
            $model->recordEndTime = $map['RecordEndTime'];
        }
        if (isset($map['PlayInfoList'])) {
            $model->playInfoList = playInfoList::fromMap($map['PlayInfoList']);
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}

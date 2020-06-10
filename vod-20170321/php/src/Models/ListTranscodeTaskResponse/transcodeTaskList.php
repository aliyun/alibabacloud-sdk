<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponse;

use AlibabaCloud\Tea\Model;

class transcodeTaskList extends Model
{
    /**
     * @description transcodeProcessId
     *
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description videoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @description transcodeProcessState
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description transcodeTemplateGroupId
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description trigger
     *
     * @var string
     */
    public $trigger;
    protected $_name = [
        'transcodeTaskId'          => 'TranscodeTaskId',
        'videoId'                  => 'VideoId',
        'taskStatus'               => 'TaskStatus',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'creationTime'             => 'CreationTime',
        'completeTime'             => 'CompleteTime',
        'trigger'                  => 'Trigger',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeTaskId', $this->transcodeTaskId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('trigger', $this->trigger, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }

        return $model;
    }
}

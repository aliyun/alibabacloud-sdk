<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponse\transcodeTask\transcodeJobInfoList;

class transcodeTask extends Model {
    protected $_name = [
        'transcodeTaskId' => 'TranscodeTaskId',
        'videoId' => 'VideoId',
        'taskStatus' => 'TaskStatus',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
        'trigger' => 'Trigger',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeJobInfoList' => 'TranscodeJobInfoList',
    ];
    public function validate() {
        Model::validateRequired('transcodeTaskId', $this->transcodeTaskId, true);
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('taskStatus', $this->taskStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('trigger', $this->trigger, true);
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
        Model::validateRequired('transcodeJobInfoList', $this->transcodeJobInfoList, true);
    }
    public function toMap() {
        $res = [];
        $res['TranscodeTaskId'] = $this->transcodeTaskId;
        $res['VideoId'] = $this->videoId;
        $res['TaskStatus'] = $this->taskStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        $res['Trigger'] = $this->trigger;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['TranscodeJobInfoList'] = [];
        if(null !== $this->transcodeJobInfoList && is_array($this->transcodeJobInfoList)){
            $n = 0;
            foreach($this->transcodeJobInfoList as $item){
                $res['TranscodeJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeTask
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TranscodeTaskId'])){
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['TaskStatus'])){
            $model->taskStatus = $map['TaskStatus'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['CompleteTime'])){
            $model->completeTime = $map['CompleteTime'];
        }
        if(isset($map['Trigger'])){
            $model->trigger = $map['Trigger'];
        }
        if(isset($map['TranscodeTemplateGroupId'])){
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if(isset($map['TranscodeJobInfoList'])){
            if(!empty($map['TranscodeJobInfoList'])){
                $model->transcodeJobInfoList = [];
                $n = 0;
                foreach($map['TranscodeJobInfoList'] as $item) {
                    $model->transcodeJobInfoList[$n++] = null !== $item ? transcodeJobInfoList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description transcodeProcessId
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description transcodeProcessState
     * @var string
     */
    public $taskStatus;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     * @var string
     */
    public $completeTime;

    /**
     * @description trigger
     * @var string
     */
    public $trigger;

    /**
     * @description transcodeTemplateGroupId
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description transcodeJobInfoList
     * @var array
     */
    public $transcodeJobInfoList;

}

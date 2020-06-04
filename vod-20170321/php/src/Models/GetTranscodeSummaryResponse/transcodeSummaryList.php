<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeSummaryResponse\transcodeSummaryList\transcodeJobInfoSummaryList;

class transcodeSummaryList extends Model {
    protected $_name = [
        'videoId' => 'VideoId',
        'transcodeStatus' => 'TranscodeStatus',
        'creationTime' => 'CreationTime',
        'completeTime' => 'CompleteTime',
        'trigger' => 'Trigger',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeJobInfoSummaryList' => 'TranscodeJobInfoSummaryList',
    ];
    public function validate() {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('transcodeStatus', $this->transcodeStatus, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('completeTime', $this->completeTime, true);
        Model::validateRequired('trigger', $this->trigger, true);
        Model::validateRequired('transcodeTemplateGroupId', $this->transcodeTemplateGroupId, true);
        Model::validateRequired('transcodeJobInfoSummaryList', $this->transcodeJobInfoSummaryList, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoId'] = $this->videoId;
        $res['TranscodeStatus'] = $this->transcodeStatus;
        $res['CreationTime'] = $this->creationTime;
        $res['CompleteTime'] = $this->completeTime;
        $res['Trigger'] = $this->trigger;
        $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        $res['TranscodeJobInfoSummaryList'] = [];
        if(null !== $this->transcodeJobInfoSummaryList && is_array($this->transcodeJobInfoSummaryList)){
            $n = 0;
            foreach($this->transcodeJobInfoSummaryList as $item){
                $res['TranscodeJobInfoSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return transcodeSummaryList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoId'])){
            $model->videoId = $map['VideoId'];
        }
        if(isset($map['TranscodeStatus'])){
            $model->transcodeStatus = $map['TranscodeStatus'];
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
        if(isset($map['TranscodeJobInfoSummaryList'])){
            if(!empty($map['TranscodeJobInfoSummaryList'])){
                $model->transcodeJobInfoSummaryList = [];
                $n = 0;
                foreach($map['TranscodeJobInfoSummaryList'] as $item) {
                    $model->transcodeJobInfoSummaryList[$n++] = null !== $item ? transcodeJobInfoSummaryList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description videoId
     * @var string
     */
    public $videoId;

    /**
     * @description transcodeProcessState
     * @var string
     */
    public $transcodeStatus;

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
    public $transcodeJobInfoSummaryList;

}

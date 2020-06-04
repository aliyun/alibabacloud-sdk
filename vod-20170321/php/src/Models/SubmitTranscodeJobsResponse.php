<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse\transcodeJobs;

class SubmitTranscodeJobsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTaskId' => 'TranscodeTaskId',
        'transcodeJobs' => 'TranscodeJobs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTaskId', $this->transcodeTaskId, true);
        Model::validateRequired('transcodeJobs', $this->transcodeJobs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeTaskId'] = $this->transcodeTaskId;
        $res['TranscodeJobs'] = null !== $this->transcodeJobs ? $this->transcodeJobs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitTranscodeJobsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeTaskId'])){
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }
        if(isset($map['TranscodeJobs'])){
            $model->transcodeJobs = transcodeJobs::fromMap($map['TranscodeJobs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.processId
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description data.transcodeJobs
     * @var transcodeJobs
     */
    public $transcodeJobs;

}

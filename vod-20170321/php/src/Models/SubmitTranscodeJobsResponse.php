<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse\transcodeJobs;
use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.processId
     *
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description data.transcodeJobs
     *
     * @var transcodeJobs
     */
    public $transcodeJobs;
    protected $_name = [
        'requestId'       => 'RequestId',
        'transcodeTaskId' => 'TranscodeTaskId',
        'transcodeJobs'   => 'TranscodeJobs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTaskId', $this->transcodeTaskId, true);
        Model::validateRequired('transcodeJobs', $this->transcodeJobs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
        }
        if (null !== $this->transcodeJobs) {
            $res['TranscodeJobs'] = null !== $this->transcodeJobs ? $this->transcodeJobs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTranscodeJobsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }
        if (isset($map['TranscodeJobs'])) {
            $model->transcodeJobs = transcodeJobs::fromMap($map['TranscodeJobs']);
        }

        return $model;
    }
}

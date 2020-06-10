<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitTranscodeJobsResponse\transcodeJobs\transcodeJob;
use AlibabaCloud\Tea\Model;

class transcodeJobs extends Model
{
    /**
     * @description TranscodeJob
     *
     * @var array
     */
    public $transcodeJob;
    protected $_name = [
        'transcodeJob' => 'TranscodeJob',
    ];

    public function validate()
    {
        Model::validateRequired('transcodeJob', $this->transcodeJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeJob) {
            $res['TranscodeJob'] = [];
            if (null !== $this->transcodeJob && \is_array($this->transcodeJob)) {
                $n = 0;
                foreach ($this->transcodeJob as $item) {
                    $res['TranscodeJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeJob'])) {
            if (!empty($map['TranscodeJob'])) {
                $model->transcodeJob = [];
                $n                   = 0;
                foreach ($map['TranscodeJob'] as $item) {
                    $model->transcodeJob[$n++] = null !== $item ? transcodeJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

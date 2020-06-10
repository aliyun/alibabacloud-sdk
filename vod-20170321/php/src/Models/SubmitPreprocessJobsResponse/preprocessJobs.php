<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitPreprocessJobsResponse\preprocessJobs\preprocessJob;
use AlibabaCloud\Tea\Model;

class preprocessJobs extends Model
{
    /**
     * @description PreprocessJob
     *
     * @var array
     */
    public $preprocessJob;
    protected $_name = [
        'preprocessJob' => 'PreprocessJob',
    ];

    public function validate()
    {
        Model::validateRequired('preprocessJob', $this->preprocessJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preprocessJob) {
            $res['PreprocessJob'] = [];
            if (null !== $this->preprocessJob && \is_array($this->preprocessJob)) {
                $n = 0;
                foreach ($this->preprocessJob as $item) {
                    $res['PreprocessJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preprocessJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreprocessJob'])) {
            if (!empty($map['PreprocessJob'])) {
                $model->preprocessJob = [];
                $n                    = 0;
                foreach ($map['PreprocessJob'] as $item) {
                    $model->preprocessJob[$n++] = null !== $item ? preprocessJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

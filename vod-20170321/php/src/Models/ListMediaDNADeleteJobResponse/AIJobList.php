<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse\AIJobList\AIJob;
use AlibabaCloud\Tea\Model;

class AIJobList extends Model
{
    /**
     * @description AIJob
     *
     * @var array
     */
    public $AIJob;
    protected $_name = [
        'AIJob' => 'AIJob',
    ];

    public function validate()
    {
        Model::validateRequired('AIJob', $this->AIJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIJob) {
            $res['AIJob'] = [];
            if (null !== $this->AIJob && \is_array($this->AIJob)) {
                $n = 0;
                foreach ($this->AIJob as $item) {
                    $res['AIJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIJob'])) {
            if (!empty($map['AIJob'])) {
                $model->AIJob = [];
                $n            = 0;
                foreach ($map['AIJob'] as $item) {
                    $model->AIJob[$n++] = null !== $item ? AIJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

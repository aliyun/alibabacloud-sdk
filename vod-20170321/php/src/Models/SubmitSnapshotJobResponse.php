<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponse\snapshotJob;
use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.submitSnapshotJobDTO
     *
     * @var snapshotJob
     */
    public $snapshotJob;
    protected $_name = [
        'requestId'   => 'RequestId',
        'snapshotJob' => 'SnapshotJob',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('snapshotJob', $this->snapshotJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshotJob) {
            $res['SnapshotJob'] = null !== $this->snapshotJob ? $this->snapshotJob->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapshotJob'])) {
            $model->snapshotJob = snapshotJob::fromMap($map['SnapshotJob']);
        }

        return $model;
    }
}

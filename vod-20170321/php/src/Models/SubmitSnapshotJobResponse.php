<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitSnapshotJobResponse\snapshotJob;

class SubmitSnapshotJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshotJob' => 'SnapshotJob',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('snapshotJob', $this->snapshotJob, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SnapshotJob'] = null !== $this->snapshotJob ? $this->snapshotJob->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitSnapshotJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SnapshotJob'])){
            $model->snapshotJob = snapshotJob::fromMap($map['SnapshotJob']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.submitSnapshotJobDTO
     * @var snapshotJob
     */
    public $snapshotJob;

}

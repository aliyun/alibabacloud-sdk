<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'snapshotId' => 'SnapshotId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('snapshotId', $this->snapshotId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['SnapshotId'] = $this->snapshotId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateSnapshotResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['SnapshotId'])){
            $model->snapshotId = $map['SnapshotId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.snapshotId
     * @var string
     */
    public $snapshotId;

}

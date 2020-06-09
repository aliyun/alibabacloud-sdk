<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotRequest extends Model {
    protected $_name = [
        'snapshotId' => 'SnapshotId',
    ];
    public function validate() {
        Model::validateRequired('snapshotId', $this->snapshotId, true);
    }
    public function toMap() {
        $res = [];
        $res['SnapshotId'] = $this->snapshotId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteSnapshotRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SnapshotId'])){
            $model->snapshotId = $map['SnapshotId'];
        }
        return $model;
    }
    /**
     * @description snapshotId
     * @var string
     */
    public $snapshotId;

}

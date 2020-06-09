<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteAutoSnapshotPolicyRequest extends Model {
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
    ];
    public function validate() {
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
    }
    public function toMap() {
        $res = [];
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        return $model;
    }
    /**
     * @description autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

}

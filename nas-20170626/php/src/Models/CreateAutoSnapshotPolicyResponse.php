<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAutoSnapshotPolicyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

}

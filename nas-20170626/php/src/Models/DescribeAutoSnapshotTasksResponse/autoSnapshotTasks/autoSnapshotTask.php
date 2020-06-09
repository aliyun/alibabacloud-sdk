<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponse\autoSnapshotTasks;

use AlibabaCloud\Tea\Model;

class autoSnapshotTask extends Model {
    protected $_name = [
        'sourceFileSystemId' => 'SourceFileSystemId',
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
    ];
    public function validate() {
        Model::validateRequired('sourceFileSystemId', $this->sourceFileSystemId, true);
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
    }
    public function toMap() {
        $res = [];
        $res['SourceFileSystemId'] = $this->sourceFileSystemId;
        $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        return $res;
    }
    /**
     * @param array $map
     * @return autoSnapshotTask
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SourceFileSystemId'])){
            $model->sourceFileSystemId = $map['SourceFileSystemId'];
        }
        if(isset($map['AutoSnapshotPolicyId'])){
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        return $model;
    }
    /**
     * @description sourceFileSystemId
     * @var string
     */
    public $sourceFileSystemId;

    /**
     * @description autoSnapshotPolicyId
     * @var string
     */
    public $autoSnapshotPolicyId;

}

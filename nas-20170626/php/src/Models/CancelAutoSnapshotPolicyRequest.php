<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelAutoSnapshotPolicyRequest extends Model {
    protected $_name = [
        'fileSystemIds' => 'FileSystemIds',
    ];
    public function validate() {
        Model::validateRequired('fileSystemIds', $this->fileSystemIds, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemIds'] = $this->fileSystemIds;
        return $res;
    }
    /**
     * @param array $map
     * @return CancelAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemIds'])){
            $model->fileSystemIds = $map['FileSystemIds'];
        }
        return $model;
    }
    /**
     * @description volumes
     * @var string
     */
    public $fileSystemIds;

}

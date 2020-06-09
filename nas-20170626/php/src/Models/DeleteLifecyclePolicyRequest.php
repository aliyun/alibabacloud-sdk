<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteLifecyclePolicyRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('lifecyclePolicyName', $this->lifecyclePolicyName, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteLifecyclePolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['LifecyclePolicyName'])){
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description lifecyclePolicyName
     * @var string
     */
    public $lifecyclePolicyName;

}

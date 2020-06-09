<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateLifecyclePolicyRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'path' => 'Path',
        'lifecycleRuleName' => 'LifecycleRuleName',
        'storageType' => 'StorageType',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('lifecyclePolicyName', $this->lifecyclePolicyName, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('lifecycleRuleName', $this->lifecycleRuleName, true);
        Model::validateRequired('storageType', $this->storageType, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        $res['Path'] = $this->path;
        $res['LifecycleRuleName'] = $this->lifecycleRuleName;
        $res['StorageType'] = $this->storageType;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateLifecyclePolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['LifecyclePolicyName'])){
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        if(isset($map['Path'])){
            $model->path = $map['Path'];
        }
        if(isset($map['LifecycleRuleName'])){
            $model->lifecycleRuleName = $map['LifecycleRuleName'];
        }
        if(isset($map['StorageType'])){
            $model->storageType = $map['StorageType'];
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

    /**
     * @description path
     * @var string
     */
    public $path;

    /**
     * @description lifecycleRuleName
     * @var string
     */
    public $lifecycleRuleName;

    /**
     * @description storageType
     * @var string
     */
    public $storageType;

}

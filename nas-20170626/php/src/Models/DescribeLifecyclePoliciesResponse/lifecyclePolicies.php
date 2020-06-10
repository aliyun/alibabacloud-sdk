<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponse;

use AlibabaCloud\Tea\Model;

class lifecyclePolicies extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description name
     *
     * @var string
     */
    public $lifecyclePolicyName;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description policy
     *
     * @var string
     */
    public $lifecycleRuleName;

    /**
     * @description storageType
     *
     * @var string
     */
    public $storageType;

    /**
     * @description createTimeStr
     *
     * @var string
     */
    public $createTime;
    protected $_name = [
        'fileSystemId'        => 'FileSystemId',
        'lifecyclePolicyName' => 'LifecyclePolicyName',
        'path'                => 'Path',
        'lifecycleRuleName'   => 'LifecycleRuleName',
        'storageType'         => 'StorageType',
        'createTime'          => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('lifecyclePolicyName', $this->lifecyclePolicyName, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('lifecycleRuleName', $this->lifecycleRuleName, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->lifecyclePolicyName) {
            $res['LifecyclePolicyName'] = $this->lifecyclePolicyName;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->lifecycleRuleName) {
            $res['LifecycleRuleName'] = $this->lifecycleRuleName;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lifecyclePolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['LifecyclePolicyName'])) {
            $model->lifecyclePolicyName = $map['LifecyclePolicyName'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['LifecycleRuleName'])) {
            $model->lifecycleRuleName = $map['LifecycleRuleName'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}

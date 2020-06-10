<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateModelResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.modelId
     *
     * @var string
     */
    public $modelId;

    /**
     * @description data.modelRef
     *
     * @var string
     */
    public $modelRef;

    /**
     * @description data.modelName
     *
     * @var string
     */
    public $modelName;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.schema
     *
     * @var string
     */
    public $schema;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.createdTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description data.modifiedTime
     *
     * @var string
     */
    public $modifiedTime;
    protected $_name = [
        'requestId'    => 'RequestId',
        'modelId'      => 'ModelId',
        'modelRef'     => 'ModelRef',
        'modelName'    => 'ModelName',
        'groupId'      => 'GroupId',
        'schema'       => 'Schema',
        'regionId'     => 'RegionId',
        'description'  => 'Description',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('modelId', $this->modelId, true);
        Model::validateRequired('modelRef', $this->modelRef, true);
        Model::validateRequired('modelName', $this->modelName, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('schema', $this->schema, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelRef) {
            $res['ModelRef'] = $this->modelRef;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelRef'])) {
            $model->modelRef = $map['ModelRef'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}

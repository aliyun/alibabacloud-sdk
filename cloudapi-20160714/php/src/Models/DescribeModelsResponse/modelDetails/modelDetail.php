<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeModelsResponse\modelDetails;

use AlibabaCloud\Tea\Model;

class modelDetail extends Model
{
    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description modelId
     *
     * @var string
     */
    public $modelId;

    /**
     * @description modelName
     *
     * @var string
     */
    public $modelName;

    /**
     * @description schema
     *
     * @var string
     */
    public $schema;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description createdTime
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description modifiedTime
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description modelRef
     *
     * @var string
     */
    public $modelRef;
    protected $_name = [
        'groupId'      => 'GroupId',
        'modelId'      => 'ModelId',
        'modelName'    => 'ModelName',
        'schema'       => 'Schema',
        'description'  => 'Description',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
        'modelRef'     => 'ModelRef',
    ];

    public function validate()
    {
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modelId', $this->modelId, true);
        Model::validateRequired('modelName', $this->modelName, true);
        Model::validateRequired('schema', $this->schema, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('modelRef', $this->modelRef, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
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
        if (null !== $this->modelRef) {
            $res['ModelRef'] = $this->modelRef;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
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
        if (isset($map['ModelRef'])) {
            $model->modelRef = $map['ModelRef'];
        }

        return $model;
    }
}

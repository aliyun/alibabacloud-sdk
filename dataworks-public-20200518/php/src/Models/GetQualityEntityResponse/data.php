<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityEntityResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description tableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description envType
     *
     * @var string
     */
    public $envType;

    /**
     * @description matchExpression
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @description entityLevel
     *
     * @var int
     */
    public $entityLevel;

    /**
     * @description onDuty
     *
     * @var string
     */
    public $onDuty;

    /**
     * @description modifyUser
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description modifyTime
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description sql
     *
     * @var int
     */
    public $sql;

    /**
     * @description task
     *
     * @var int
     */
    public $task;

    /**
     * @description followers
     *
     * @var string
     */
    public $followers;

    /**
     * @description hasRelativeNode
     *
     * @var bool
     */
    public $hasRelativeNode;

    /**
     * @description relativeNode
     *
     * @var string
     */
    public $relativeNode;
    protected $_name = [
        'id'              => 'Id',
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
        'envType'         => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'entityLevel'     => 'EntityLevel',
        'onDuty'          => 'OnDuty',
        'modifyUser'      => 'ModifyUser',
        'createTime'      => 'CreateTime',
        'modifyTime'      => 'ModifyTime',
        'sql'             => 'Sql',
        'task'            => 'Task',
        'followers'       => 'Followers',
        'hasRelativeNode' => 'HasRelativeNode',
        'relativeNode'    => 'RelativeNode',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('matchExpression', $this->matchExpression, true);
        Model::validateRequired('entityLevel', $this->entityLevel, true);
        Model::validateRequired('onDuty', $this->onDuty, true);
        Model::validateRequired('modifyUser', $this->modifyUser, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('sql', $this->sql, true);
        Model::validateRequired('task', $this->task, true);
        Model::validateRequired('followers', $this->followers, true);
        Model::validateRequired('hasRelativeNode', $this->hasRelativeNode, true);
        Model::validateRequired('relativeNode', $this->relativeNode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->entityLevel) {
            $res['EntityLevel'] = $this->entityLevel;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->followers) {
            $res['Followers'] = $this->followers;
        }
        if (null !== $this->hasRelativeNode) {
            $res['HasRelativeNode'] = $this->hasRelativeNode;
        }
        if (null !== $this->relativeNode) {
            $res['RelativeNode'] = $this->relativeNode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['EntityLevel'])) {
            $model->entityLevel = $map['EntityLevel'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['Followers'])) {
            $model->followers = $map['Followers'];
        }
        if (isset($map['HasRelativeNode'])) {
            $model->hasRelativeNode = $map['HasRelativeNode'];
        }
        if (isset($map['RelativeNode'])) {
            $model->relativeNode = $map['RelativeNode'];
        }

        return $model;
    }
}

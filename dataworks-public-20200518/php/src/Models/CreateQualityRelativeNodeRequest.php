<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRelativeNodeRequest extends Model
{
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
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description targetNodeProjectName
     *
     * @var string
     */
    public $targetNodeProjectName;

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
     * @description targetNodeProjectId
     *
     * @var int
     */
    public $targetNodeProjectId;
    protected $_name = [
        'envType'               => 'EnvType',
        'matchExpression'       => 'MatchExpression',
        'nodeId'                => 'NodeId',
        'projectId'             => 'ProjectId',
        'targetNodeProjectName' => 'TargetNodeProjectName',
        'projectName'           => 'ProjectName',
        'tableName'             => 'TableName',
        'targetNodeProjectId'   => 'TargetNodeProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('matchExpression', $this->matchExpression, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('targetNodeProjectName', $this->targetNodeProjectName, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('targetNodeProjectId', $this->targetNodeProjectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->targetNodeProjectName) {
            $res['TargetNodeProjectName'] = $this->targetNodeProjectName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->targetNodeProjectId) {
            $res['TargetNodeProjectId'] = $this->targetNodeProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityRelativeNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['TargetNodeProjectName'])) {
            $model->targetNodeProjectName = $map['TargetNodeProjectName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TargetNodeProjectId'])) {
            $model->targetNodeProjectId = $map['TargetNodeProjectId'];
        }

        return $model;
    }
}

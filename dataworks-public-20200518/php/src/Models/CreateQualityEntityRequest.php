<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityEntityRequest extends Model
{
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
    protected $_name = [
        'projectName'     => 'ProjectName',
        'tableName'       => 'TableName',
        'envType'         => 'EnvType',
        'matchExpression' => 'MatchExpression',
        'entityLevel'     => 'EntityLevel',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('matchExpression', $this->matchExpression, true);
        Model::validateRequired('entityLevel', $this->entityLevel, true);
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse\commands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse\commands\command\parameterNames;
use AlibabaCloud\Tea\Model;

class command extends Model
{
    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $invokeTimes;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $enableParameter;

    /**
     * @var parameterNames
     */
    public $parameterNames;
    protected $_name = [
        'commandId'       => 'CommandId',
        'name'            => 'Name',
        'type'            => 'Type',
        'description'     => 'Description',
        'commandContent'  => 'CommandContent',
        'workingDir'      => 'WorkingDir',
        'timeout'         => 'Timeout',
        'invokeTimes'     => 'InvokeTimes',
        'creationTime'    => 'CreationTime',
        'enableParameter' => 'EnableParameter',
        'parameterNames'  => 'ParameterNames',
    ];

    public function validate()
    {
        Model::validateRequired('commandId', $this->commandId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('commandContent', $this->commandContent, true);
        Model::validateRequired('workingDir', $this->workingDir, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('invokeTimes', $this->invokeTimes, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('enableParameter', $this->enableParameter, true);
        Model::validateRequired('parameterNames', $this->parameterNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->invokeTimes) {
            $res['InvokeTimes'] = $this->invokeTimes;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = null !== $this->parameterNames ? $this->parameterNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return command
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['InvokeTimes'])) {
            $model->invokeTimes = $map['InvokeTimes'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = parameterNames::fromMap($map['ParameterNames']);
        }

        return $model;
    }
}

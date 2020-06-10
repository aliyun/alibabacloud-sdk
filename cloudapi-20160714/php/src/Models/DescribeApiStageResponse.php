<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponse\variables;
use AlibabaCloud\Tea\Model;

class DescribeApiStageResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.stageId
     *
     * @var string
     */
    public $stageId;

    /**
     * @description data.stageName
     *
     * @var string
     */
    public $stageName;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.gmtCreate
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description data.gmtModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description data.variables
     *
     * @var variables
     */
    public $variables;
    protected $_name = [
        'requestId'    => 'RequestId',
        'groupId'      => 'GroupId',
        'stageId'      => 'StageId',
        'stageName'    => 'StageName',
        'description'  => 'Description',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
        'variables'    => 'Variables',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('stageId', $this->stageId, true);
        Model::validateRequired('stageName', $this->stageName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('variables', $this->variables, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (null !== $this->variables) {
            $res['Variables'] = null !== $this->variables ? $this->variables->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiStageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
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
        if (isset($map['Variables'])) {
            $model->variables = variables::fromMap($map['Variables']);
        }

        return $model;
    }
}

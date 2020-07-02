<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse\data;

use AlibabaCloud\Tea\Model;

class influences extends Model
{
    /**
     * @description baselineId
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description bizdate
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description inGroupId
     *
     * @var int
     */
    public $inGroupId;

    /**
     * @description baselineName
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description priority
     *
     * @var int
     */
    public $priority;

    /**
     * @description buffer
     *
     * @var int
     */
    public $buffer;
    protected $_name = [
        'baselineId'   => 'BaselineId',
        'bizdate'      => 'Bizdate',
        'inGroupId'    => 'InGroupId',
        'baselineName' => 'BaselineName',
        'owner'        => 'Owner',
        'status'       => 'Status',
        'projectId'    => 'ProjectId',
        'priority'     => 'Priority',
        'buffer'       => 'Buffer',
    ];

    public function validate()
    {
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('inGroupId', $this->inGroupId, true);
        Model::validateRequired('baselineName', $this->baselineName, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('buffer', $this->buffer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return influences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTopicsResponse\data;

use AlibabaCloud\Tea\Model;

class topics extends Model
{
    /**
     * @description topicId
     *
     * @var int
     */
    public $topicId;

    /**
     * @description topicName
     *
     * @var string
     */
    public $topicName;

    /**
     * @description topicStatus
     *
     * @var string
     */
    public $topicStatus;

    /**
     * @description topicType
     *
     * @var string
     */
    public $topicType;

    /**
     * @description addTime
     *
     * @var int
     */
    public $addTime;

    /**
     * @description happenTime
     *
     * @var int
     */
    public $happenTime;

    /**
     * @description fixTime
     *
     * @var int
     */
    public $fixTime;

    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description nodeOwner
     *
     * @var string
     */
    public $nodeOwner;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'topicId'     => 'TopicId',
        'topicName'   => 'TopicName',
        'topicStatus' => 'TopicStatus',
        'topicType'   => 'TopicType',
        'addTime'     => 'AddTime',
        'happenTime'  => 'HappenTime',
        'fixTime'     => 'FixTime',
        'instanceId'  => 'InstanceId',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'nodeOwner'   => 'NodeOwner',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('topicId', $this->topicId, true);
        Model::validateRequired('topicName', $this->topicName, true);
        Model::validateRequired('topicStatus', $this->topicStatus, true);
        Model::validateRequired('topicType', $this->topicType, true);
        Model::validateRequired('addTime', $this->addTime, true);
        Model::validateRequired('happenTime', $this->happenTime, true);
        Model::validateRequired('fixTime', $this->fixTime, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('nodeOwner', $this->nodeOwner, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }
        if (null !== $this->topicStatus) {
            $res['TopicStatus'] = $this->topicStatus;
        }
        if (null !== $this->topicType) {
            $res['TopicType'] = $this->topicType;
        }
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->happenTime) {
            $res['HappenTime'] = $this->happenTime;
        }
        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeOwner) {
            $res['NodeOwner'] = $this->nodeOwner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }
        if (isset($map['TopicStatus'])) {
            $model->topicStatus = $map['TopicStatus'];
        }
        if (isset($map['TopicType'])) {
            $model->topicType = $map['TopicType'];
        }
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['HappenTime'])) {
            $model->happenTime = $map['HappenTime'];
        }
        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeOwner'])) {
            $model->nodeOwner = $map['NodeOwner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

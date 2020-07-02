<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description alertTime
     *
     * @var int
     */
    public $alertTime;

    /**
     * @description assigner
     *
     * @var string
     */
    public $assigner;

    /**
     * @description baselineId
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description baselineNam
     *
     * @var string
     */
    public $baselineName;

    /**
     * @description baselineInGroupId
     *
     * @var int
     */
    public $baselineInGroupId;

    /**
     * @description baselineStatus
     *
     * @var string
     */
    public $baselineStatus;

    /**
     * @description baselineBuffer
     *
     * @var int
     */
    public $baselineBuffer;

    /**
     * @description buffer
     *
     * @var int
     */
    public $buffer;

    /**
     * @description dealTime
     *
     * @var int
     */
    public $dealTime;

    /**
     * @description dealUser
     *
     * @var string
     */
    public $dealUser;

    /**
     * @description fixTime
     *
     * @var int
     */
    public $fixTime;

    /**
     * @description happenTime
     *
     * @var int
     */
    public $happenTime;

    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description nextAlertTime
     *
     * @var int
     */
    public $nextAlertTime;

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
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'topicId'           => 'TopicId',
        'topicName'         => 'TopicName',
        'topicStatus'       => 'TopicStatus',
        'topicType'         => 'TopicType',
        'addTime'           => 'AddTime',
        'alertTime'         => 'AlertTime',
        'assigner'          => 'Assigner',
        'baselineId'        => 'BaselineId',
        'baselineName'      => 'BaselineName',
        'baselineInGroupId' => 'BaselineInGroupId',
        'baselineStatus'    => 'BaselineStatus',
        'baselineBuffer'    => 'BaselineBuffer',
        'buffer'            => 'Buffer',
        'dealTime'          => 'DealTime',
        'dealUser'          => 'DealUser',
        'fixTime'           => 'FixTime',
        'happenTime'        => 'HappenTime',
        'instanceId'        => 'InstanceId',
        'nextAlertTime'     => 'NextAlertTime',
        'nodeId'            => 'NodeId',
        'nodeName'          => 'NodeName',
        'owner'             => 'Owner',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('topicId', $this->topicId, true);
        Model::validateRequired('topicName', $this->topicName, true);
        Model::validateRequired('topicStatus', $this->topicStatus, true);
        Model::validateRequired('topicType', $this->topicType, true);
        Model::validateRequired('addTime', $this->addTime, true);
        Model::validateRequired('alertTime', $this->alertTime, true);
        Model::validateRequired('assigner', $this->assigner, true);
        Model::validateRequired('baselineId', $this->baselineId, true);
        Model::validateRequired('baselineName', $this->baselineName, true);
        Model::validateRequired('baselineInGroupId', $this->baselineInGroupId, true);
        Model::validateRequired('baselineStatus', $this->baselineStatus, true);
        Model::validateRequired('baselineBuffer', $this->baselineBuffer, true);
        Model::validateRequired('buffer', $this->buffer, true);
        Model::validateRequired('dealTime', $this->dealTime, true);
        Model::validateRequired('dealUser', $this->dealUser, true);
        Model::validateRequired('fixTime', $this->fixTime, true);
        Model::validateRequired('happenTime', $this->happenTime, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('nextAlertTime', $this->nextAlertTime, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('owner', $this->owner, true);
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
        if (null !== $this->alertTime) {
            $res['AlertTime'] = $this->alertTime;
        }
        if (null !== $this->assigner) {
            $res['Assigner'] = $this->assigner;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->baselineName) {
            $res['BaselineName'] = $this->baselineName;
        }
        if (null !== $this->baselineInGroupId) {
            $res['BaselineInGroupId'] = $this->baselineInGroupId;
        }
        if (null !== $this->baselineStatus) {
            $res['BaselineStatus'] = $this->baselineStatus;
        }
        if (null !== $this->baselineBuffer) {
            $res['BaselineBuffer'] = $this->baselineBuffer;
        }
        if (null !== $this->buffer) {
            $res['Buffer'] = $this->buffer;
        }
        if (null !== $this->dealTime) {
            $res['DealTime'] = $this->dealTime;
        }
        if (null !== $this->dealUser) {
            $res['DealUser'] = $this->dealUser;
        }
        if (null !== $this->fixTime) {
            $res['FixTime'] = $this->fixTime;
        }
        if (null !== $this->happenTime) {
            $res['HappenTime'] = $this->happenTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextAlertTime) {
            $res['NextAlertTime'] = $this->nextAlertTime;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['AlertTime'])) {
            $model->alertTime = $map['AlertTime'];
        }
        if (isset($map['Assigner'])) {
            $model->assigner = $map['Assigner'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BaselineName'])) {
            $model->baselineName = $map['BaselineName'];
        }
        if (isset($map['BaselineInGroupId'])) {
            $model->baselineInGroupId = $map['BaselineInGroupId'];
        }
        if (isset($map['BaselineStatus'])) {
            $model->baselineStatus = $map['BaselineStatus'];
        }
        if (isset($map['BaselineBuffer'])) {
            $model->baselineBuffer = $map['BaselineBuffer'];
        }
        if (isset($map['Buffer'])) {
            $model->buffer = $map['Buffer'];
        }
        if (isset($map['DealTime'])) {
            $model->dealTime = $map['DealTime'];
        }
        if (isset($map['DealUser'])) {
            $model->dealUser = $map['DealUser'];
        }
        if (isset($map['FixTime'])) {
            $model->fixTime = $map['FixTime'];
        }
        if (isset($map['HappenTime'])) {
            $model->happenTime = $map['HappenTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextAlertTime'])) {
            $model->nextAlertTime = $map['NextAlertTime'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}

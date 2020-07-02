<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeComplementRequest extends Model
{
    /**
     * @description projectEnv
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description startBizDate
     *
     * @var string
     */
    public $startBizDate;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description rootNodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description rootNodeAppId
     *
     * @var int
     */
    public $nodeProjectId;

    /**
     * @description includeNodeIds
     *
     * @var string
     */
    public $includeNodeIds;

    /**
     * @description excludeNodeIds
     *
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @description bizBeginTime
     *
     * @var string
     */
    public $bizBeginTime;

    /**
     * @description bizEndTime
     *
     * @var string
     */
    public $bizEndTime;

    /**
     * @description parallel
     *
     * @var bool
     */
    public $parallelism;

    /**
     * @description endBizDate
     *
     * @var string
     */
    public $endBizDate;
    protected $_name = [
        'projectEnv'     => 'ProjectEnv',
        'startBizDate'   => 'StartBizDate',
        'name'           => 'Name',
        'nodeId'         => 'NodeId',
        'nodeProjectId'  => 'NodeProjectId',
        'includeNodeIds' => 'IncludeNodeIds',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'bizBeginTime'   => 'BizBeginTime',
        'bizEndTime'     => 'BizEndTime',
        'parallelism'    => 'Parallelism',
        'endBizDate'     => 'EndBizDate',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('startBizDate', $this->startBizDate, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeProjectId', $this->nodeProjectId, true);
        Model::validateRequired('includeNodeIds', $this->includeNodeIds, true);
        Model::validateRequired('excludeNodeIds', $this->excludeNodeIds, true);
        Model::validateRequired('bizBeginTime', $this->bizBeginTime, true);
        Model::validateRequired('bizEndTime', $this->bizEndTime, true);
        Model::validateRequired('parallelism', $this->parallelism, true);
        Model::validateRequired('endBizDate', $this->endBizDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeProjectId) {
            $res['NodeProjectId'] = $this->nodeProjectId;
        }
        if (null !== $this->includeNodeIds) {
            $res['IncludeNodeIds'] = $this->includeNodeIds;
        }
        if (null !== $this->excludeNodeIds) {
            $res['ExcludeNodeIds'] = $this->excludeNodeIds;
        }
        if (null !== $this->bizBeginTime) {
            $res['BizBeginTime'] = $this->bizBeginTime;
        }
        if (null !== $this->bizEndTime) {
            $res['BizEndTime'] = $this->bizEndTime;
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeComplementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeProjectId'])) {
            $model->nodeProjectId = $map['NodeProjectId'];
        }
        if (isset($map['IncludeNodeIds'])) {
            $model->includeNodeIds = $map['IncludeNodeIds'];
        }
        if (isset($map['ExcludeNodeIds'])) {
            $model->excludeNodeIds = $map['ExcludeNodeIds'];
        }
        if (isset($map['BizBeginTime'])) {
            $model->bizBeginTime = $map['BizBeginTime'];
        }
        if (isset($map['BizEndTime'])) {
            $model->bizEndTime = $map['BizEndTime'];
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }

        return $model;
    }
}

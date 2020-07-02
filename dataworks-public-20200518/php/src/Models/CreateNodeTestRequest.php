<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeTestRequest extends Model
{
    /**
     * @description projectEnv
     *
     * @var string
     */
    public $projectEnv;

    /**
     * @description bizdate
     *
     * @var string
     */
    public $bizdate;

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
    protected $_name = [
        'projectEnv'     => 'ProjectEnv',
        'bizdate'        => 'Bizdate',
        'name'           => 'Name',
        'nodeId'         => 'NodeId',
        'nodeProjectId'  => 'NodeProjectId',
        'includeNodeIds' => 'IncludeNodeIds',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'bizBeginTime'   => 'BizBeginTime',
        'bizEndTime'     => 'BizEndTime',
        'parallelism'    => 'Parallelism',
    ];

    public function validate()
    {
        Model::validateRequired('projectEnv', $this->projectEnv, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('nodeProjectId', $this->nodeProjectId, true);
        Model::validateRequired('includeNodeIds', $this->includeNodeIds, true);
        Model::validateRequired('excludeNodeIds', $this->excludeNodeIds, true);
        Model::validateRequired('bizBeginTime', $this->bizBeginTime, true);
        Model::validateRequired('bizEndTime', $this->bizEndTime, true);
        Model::validateRequired('parallelism', $this->parallelism, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
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

        return $model;
    }
}

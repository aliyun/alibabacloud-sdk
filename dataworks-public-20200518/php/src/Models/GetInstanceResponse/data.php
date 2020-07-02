<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description nodeId
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description instanceId
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description dagId
     *
     * @var int
     */
    public $dagId;

    /**
     * @description dagType
     *
     * @var string
     */
    public $dagType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description bizdate
     *
     * @var int
     */
    public $bizdate;

    /**
     * @description paramValues
     *
     * @var string
     */
    public $paramValues;

    /**
     * @description cycTime
     *
     * @var int
     */
    public $cycTime;

    /**
     * @description finishTime
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description beginWaitTimeTime
     *
     * @var int
     */
    public $beginWaitTimeTime;

    /**
     * @description beginWaitResTime
     *
     * @var int
     */
    public $beginWaitResTime;

    /**
     * @description beginRunningTime
     *
     * @var int
     */
    public $beginRunningTime;

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
     * @description nodeName
     *
     * @var string
     */
    public $nodeName;
    protected $_name = [
        'nodeId'            => 'NodeId',
        'instanceId'        => 'InstanceId',
        'dagId'             => 'DagId',
        'dagType'           => 'DagType',
        'status'            => 'Status',
        'bizdate'           => 'Bizdate',
        'paramValues'       => 'ParamValues',
        'cycTime'           => 'CycTime',
        'finishTime'        => 'FinishTime',
        'beginWaitTimeTime' => 'BeginWaitTimeTime',
        'beginWaitResTime'  => 'BeginWaitResTime',
        'beginRunningTime'  => 'BeginRunningTime',
        'createTime'        => 'CreateTime',
        'modifyTime'        => 'ModifyTime',
        'nodeName'          => 'NodeName',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('dagId', $this->dagId, true);
        Model::validateRequired('dagType', $this->dagType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('paramValues', $this->paramValues, true);
        Model::validateRequired('cycTime', $this->cycTime, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('beginWaitTimeTime', $this->beginWaitTimeTime, true);
        Model::validateRequired('beginWaitResTime', $this->beginWaitResTime, true);
        Model::validateRequired('beginRunningTime', $this->beginRunningTime, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('nodeName', $this->nodeName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagType) {
            $res['DagType'] = $this->dagType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->paramValues) {
            $res['ParamValues'] = $this->paramValues;
        }
        if (null !== $this->cycTime) {
            $res['CycTime'] = $this->cycTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->beginWaitTimeTime) {
            $res['BeginWaitTimeTime'] = $this->beginWaitTimeTime;
        }
        if (null !== $this->beginWaitResTime) {
            $res['BeginWaitResTime'] = $this->beginWaitResTime;
        }
        if (null !== $this->beginRunningTime) {
            $res['BeginRunningTime'] = $this->beginRunningTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagType'])) {
            $model->dagType = $map['DagType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['ParamValues'])) {
            $model->paramValues = $map['ParamValues'];
        }
        if (isset($map['CycTime'])) {
            $model->cycTime = $map['CycTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['BeginWaitTimeTime'])) {
            $model->beginWaitTimeTime = $map['BeginWaitTimeTime'];
        }
        if (isset($map['BeginWaitResTime'])) {
            $model->beginWaitResTime = $map['BeginWaitResTime'];
        }
        if (isset($map['BeginRunningTime'])) {
            $model->beginRunningTime = $map['BeginRunningTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        return $model;
    }
}

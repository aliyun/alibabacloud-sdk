<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPromClustersResponse;

use AlibabaCloud\Tea\Model;

class promClusterList extends Model
{
    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description clusterId
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description clusterName
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description agentStatus
     *
     * @var string
     */
    public $agentStatus;

    /**
     * @description clusterType
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description controllerId
     *
     * @var string
     */
    public $controllerId;

    /**
     * @description isControllerInstalled
     *
     * @var bool
     */
    public $isControllerInstalled;

    /**
     * @description userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description plugins_json_array
     *
     * @var string
     */
    public $pluginsJsonArray;

    /**
     * @description state_json
     *
     * @var string
     */
    public $stateJson;

    /**
     * @description node_num
     *
     * @var int
     */
    public $nodeNum;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description updateTime
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description lastHeartBeatTime
     *
     * @var int
     */
    public $lastHeartBeatTime;

    /**
     * @description installTime
     *
     * @var int
     */
    public $installTime;

    /**
     * @description extra
     *
     * @var string
     */
    public $extra;

    /**
     * @description options
     *
     * @var string
     */
    public $options;
    protected $_name = [
        'id'                    => 'Id',
        'clusterId'             => 'ClusterId',
        'clusterName'           => 'ClusterName',
        'agentStatus'           => 'AgentStatus',
        'clusterType'           => 'ClusterType',
        'controllerId'          => 'ControllerId',
        'isControllerInstalled' => 'IsControllerInstalled',
        'userId'                => 'UserId',
        'regionId'              => 'RegionId',
        'pluginsJsonArray'      => 'PluginsJsonArray',
        'stateJson'             => 'StateJson',
        'nodeNum'               => 'NodeNum',
        'createTime'            => 'CreateTime',
        'updateTime'            => 'UpdateTime',
        'lastHeartBeatTime'     => 'LastHeartBeatTime',
        'installTime'           => 'InstallTime',
        'extra'                 => 'Extra',
        'options'               => 'Options',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('clusterName', $this->clusterName, true);
        Model::validateRequired('agentStatus', $this->agentStatus, true);
        Model::validateRequired('clusterType', $this->clusterType, true);
        Model::validateRequired('controllerId', $this->controllerId, true);
        Model::validateRequired('isControllerInstalled', $this->isControllerInstalled, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('pluginsJsonArray', $this->pluginsJsonArray, true);
        Model::validateRequired('stateJson', $this->stateJson, true);
        Model::validateRequired('nodeNum', $this->nodeNum, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('lastHeartBeatTime', $this->lastHeartBeatTime, true);
        Model::validateRequired('installTime', $this->installTime, true);
        Model::validateRequired('extra', $this->extra, true);
        Model::validateRequired('options', $this->options, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->controllerId) {
            $res['ControllerId'] = $this->controllerId;
        }
        if (null !== $this->isControllerInstalled) {
            $res['IsControllerInstalled'] = $this->isControllerInstalled;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pluginsJsonArray) {
            $res['PluginsJsonArray'] = $this->pluginsJsonArray;
        }
        if (null !== $this->stateJson) {
            $res['StateJson'] = $this->stateJson;
        }
        if (null !== $this->nodeNum) {
            $res['NodeNum'] = $this->nodeNum;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->lastHeartBeatTime) {
            $res['LastHeartBeatTime'] = $this->lastHeartBeatTime;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promClusterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['ControllerId'])) {
            $model->controllerId = $map['ControllerId'];
        }
        if (isset($map['IsControllerInstalled'])) {
            $model->isControllerInstalled = $map['IsControllerInstalled'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PluginsJsonArray'])) {
            $model->pluginsJsonArray = $map['PluginsJsonArray'];
        }
        if (isset($map['StateJson'])) {
            $model->stateJson = $map['StateJson'];
        }
        if (isset($map['NodeNum'])) {
            $model->nodeNum = $map['NodeNum'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['LastHeartBeatTime'])) {
            $model->lastHeartBeatTime = $map['LastHeartBeatTime'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}

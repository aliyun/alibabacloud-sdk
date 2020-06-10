<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceHAConfigResponse\hostInstanceInfos;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description nodeId
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description region
     *
     * @var string
     */
    public $regionId;

    /**
     * @description logDelay
     *
     * @var string
     */
    public $logSyncTime;

    /**
     * @description dataDelay
     *
     * @var string
     */
    public $dataSyncTime;

    /**
     * @description nodeType
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description zoneId
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description syncStatus
     *
     * @var string
     */
    public $syncStatus;
    protected $_name = [
        'nodeId'       => 'NodeId',
        'regionId'     => 'RegionId',
        'logSyncTime'  => 'LogSyncTime',
        'dataSyncTime' => 'DataSyncTime',
        'nodeType'     => 'NodeType',
        'zoneId'       => 'ZoneId',
        'syncStatus'   => 'SyncStatus',
    ];

    public function validate()
    {
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('logSyncTime', $this->logSyncTime, true);
        Model::validateRequired('dataSyncTime', $this->dataSyncTime, true);
        Model::validateRequired('nodeType', $this->nodeType, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('syncStatus', $this->syncStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->logSyncTime) {
            $res['LogSyncTime'] = $this->logSyncTime;
        }
        if (null !== $this->dataSyncTime) {
            $res['DataSyncTime'] = $this->dataSyncTime;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LogSyncTime'])) {
            $model->logSyncTime = $map['LogSyncTime'];
        }
        if (isset($map['DataSyncTime'])) {
            $model->dataSyncTime = $map['DataSyncTime'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }

        return $model;
    }
}

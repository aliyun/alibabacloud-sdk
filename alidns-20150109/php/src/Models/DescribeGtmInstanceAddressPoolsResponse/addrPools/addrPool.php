<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolsResponse\addrPools;

use AlibabaCloud\Tea\Model;

class addrPool extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description updateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description updateTimestamp
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description addrCount
     *
     * @var int
     */
    public $addrCount;

    /**
     * @description minAvailableAddrNum
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description monitorConfigId
     *
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description monitorStatus
     *
     * @var string
     */
    public $monitorStatus;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'addrPoolId'          => 'AddrPoolId',
        'createTime'          => 'CreateTime',
        'createTimestamp'     => 'CreateTimestamp',
        'updateTime'          => 'UpdateTime',
        'updateTimestamp'     => 'UpdateTimestamp',
        'addrCount'           => 'AddrCount',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'monitorConfigId'     => 'MonitorConfigId',
        'monitorStatus'       => 'MonitorStatus',
        'name'                => 'Name',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('updateTimestamp', $this->updateTimestamp, true);
        Model::validateRequired('addrCount', $this->addrCount, true);
        Model::validateRequired('minAvailableAddrNum', $this->minAvailableAddrNum, true);
        Model::validateRequired('monitorConfigId', $this->monitorConfigId, true);
        Model::validateRequired('monitorStatus', $this->monitorStatus, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->addrCount) {
            $res['AddrCount'] = $this->addrCount;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['AddrCount'])) {
            $model->addrCount = $map['AddrCount'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

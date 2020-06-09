<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolResponse\addrs;

class DescribeGtmInstanceAddressPoolResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'addrPoolId' => 'AddrPoolId',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'addrCount' => 'AddrCount',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'monitorConfigId' => 'MonitorConfigId',
        'monitorStatus' => 'MonitorStatus',
        'name' => 'Name',
        'status' => 'Status',
        'type' => 'Type',
        'addrs' => 'Addrs',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
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
        Model::validateRequired('addrs', $this->addrs, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AddrPoolId'] = $this->addrPoolId;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['UpdateTime'] = $this->updateTime;
        $res['UpdateTimestamp'] = $this->updateTimestamp;
        $res['AddrCount'] = $this->addrCount;
        $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        $res['MonitorConfigId'] = $this->monitorConfigId;
        $res['MonitorStatus'] = $this->monitorStatus;
        $res['Name'] = $this->name;
        $res['Status'] = $this->status;
        $res['Type'] = $this->type;
        $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmInstanceAddressPoolResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AddrPoolId'])){
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['UpdateTime'])){
            $model->updateTime = $map['UpdateTime'];
        }
        if(isset($map['UpdateTimestamp'])){
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if(isset($map['AddrCount'])){
            $model->addrCount = $map['AddrCount'];
        }
        if(isset($map['MinAvailableAddrNum'])){
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if(isset($map['MonitorConfigId'])){
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if(isset($map['MonitorStatus'])){
            $model->monitorStatus = $map['MonitorStatus'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Addrs'])){
            $model->addrs = addrs::fromMap($map['Addrs']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.id
     * @var string
     */
    public $addrPoolId;

    /**
     * @description module.createTime
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description module.updateTime
     * @var string
     */
    public $updateTime;

    /**
     * @description module.updateTimestamp
     * @var integer
     */
    public $updateTimestamp;

    /**
     * @description module.addrCount
     * @var integer
     */
    public $addrCount;

    /**
     * @description module.minAvailableAddrNum
     * @var integer
     */
    public $minAvailableAddrNum;

    /**
     * @description module.monitorConfigId
     * @var string
     */
    public $monitorConfigId;

    /**
     * @description module.monitorStatus
     * @var string
     */
    public $monitorStatus;

    /**
     * @description module.name
     * @var string
     */
    public $name;

    /**
     * @description module.status
     * @var string
     */
    public $status;

    /**
     * @description module.type
     * @var string
     */
    public $type;

    /**
     * @description module.poolAddrList
     * @var addrs
     */
    public $addrs;

}

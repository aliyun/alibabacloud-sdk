<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse\tags;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponse\DBNodes;

class DescribeDBClusterAttributeResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'regionId' => 'RegionId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'payType' => 'PayType',
        'DBClusterId' => 'DBClusterId',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBClusterDescription' => 'DBClusterDescription',
        'engine' => 'Engine',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'lockMode' => 'LockMode',
        'deletionLock' => 'DeletionLock',
        'creationTime' => 'CreationTime',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'maintainTime' => 'MaintainTime',
        'storageUsed' => 'StorageUsed',
        'storageMax' => 'StorageMax',
        'zoneIds' => 'ZoneIds',
        'SQLSize' => 'SQLSize',
        'isLatestVersion' => 'IsLatestVersion',
        'resourceGroupId' => 'ResourceGroupId',
        'dataLevel1BackupChainSize' => 'DataLevel1BackupChainSize',
        'tags' => 'Tags',
        'DBNodes' => 'DBNodes',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('DBClusterNetworkType', $this->DBClusterNetworkType, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('DBClusterId', $this->DBClusterId, true);
        Model::validateRequired('DBClusterStatus', $this->DBClusterStatus, true);
        Model::validateRequired('DBClusterDescription', $this->DBClusterDescription, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('DBType', $this->DBType, true);
        Model::validateRequired('DBVersion', $this->DBVersion, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('deletionLock', $this->deletionLock, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('expired', $this->expired, true);
        Model::validateRequired('maintainTime', $this->maintainTime, true);
        Model::validateRequired('storageUsed', $this->storageUsed, true);
        Model::validateRequired('storageMax', $this->storageMax, true);
        Model::validateRequired('zoneIds', $this->zoneIds, true);
        Model::validateRequired('SQLSize', $this->SQLSize, true);
        Model::validateRequired('isLatestVersion', $this->isLatestVersion, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('dataLevel1BackupChainSize', $this->dataLevel1BackupChainSize, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('DBNodes', $this->DBNodes, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['RegionId'] = $this->regionId;
        $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['PayType'] = $this->payType;
        $res['DBClusterId'] = $this->DBClusterId;
        $res['DBClusterStatus'] = $this->DBClusterStatus;
        $res['DBClusterDescription'] = $this->DBClusterDescription;
        $res['Engine'] = $this->engine;
        $res['DBType'] = $this->DBType;
        $res['DBVersion'] = $this->DBVersion;
        $res['LockMode'] = $this->lockMode;
        $res['DeletionLock'] = $this->deletionLock;
        $res['CreationTime'] = $this->creationTime;
        $res['ExpireTime'] = $this->expireTime;
        $res['Expired'] = $this->expired;
        $res['MaintainTime'] = $this->maintainTime;
        $res['StorageUsed'] = $this->storageUsed;
        $res['StorageMax'] = $this->storageMax;
        $res['ZoneIds'] = $this->zoneIds;
        $res['SQLSize'] = $this->SQLSize;
        $res['IsLatestVersion'] = $this->isLatestVersion;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        $res['DataLevel1BackupChainSize'] = $this->dataLevel1BackupChainSize;
        $res['Tags'] = [];
        if(null !== $this->tags && is_array($this->tags)){
            $n = 0;
            foreach($this->tags as $item){
                $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['DBNodes'] = [];
        if(null !== $this->DBNodes && is_array($this->DBNodes)){
            $n = 0;
            foreach($this->DBNodes as $item){
                $res['DBNodes'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBClusterAttributeResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['DBClusterNetworkType'])){
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['DBClusterId'])){
            $model->DBClusterId = $map['DBClusterId'];
        }
        if(isset($map['DBClusterStatus'])){
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if(isset($map['DBClusterDescription'])){
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DBType'])){
            $model->DBType = $map['DBType'];
        }
        if(isset($map['DBVersion'])){
            $model->DBVersion = $map['DBVersion'];
        }
        if(isset($map['LockMode'])){
            $model->lockMode = $map['LockMode'];
        }
        if(isset($map['DeletionLock'])){
            $model->deletionLock = $map['DeletionLock'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ExpireTime'])){
            $model->expireTime = $map['ExpireTime'];
        }
        if(isset($map['Expired'])){
            $model->expired = $map['Expired'];
        }
        if(isset($map['MaintainTime'])){
            $model->maintainTime = $map['MaintainTime'];
        }
        if(isset($map['StorageUsed'])){
            $model->storageUsed = $map['StorageUsed'];
        }
        if(isset($map['StorageMax'])){
            $model->storageMax = $map['StorageMax'];
        }
        if(isset($map['ZoneIds'])){
            $model->zoneIds = $map['ZoneIds'];
        }
        if(isset($map['SQLSize'])){
            $model->SQLSize = $map['SQLSize'];
        }
        if(isset($map['IsLatestVersion'])){
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['DataLevel1BackupChainSize'])){
            $model->dataLevel1BackupChainSize = $map['DataLevel1BackupChainSize'];
        }
        if(isset($map['Tags'])){
            if(!empty($map['Tags'])){
                $model->tags = [];
                $n = 0;
                foreach($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['DBNodes'])){
            if(!empty($map['DBNodes'])){
                $model->DBNodes = [];
                $n = 0;
                foreach($map['DBNodes'] as $item) {
                    $model->DBNodes[$n++] = null !== $item ? DBNodes::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.regionId
     * @var string
     */
    public $regionId;

    /**
     * @description data.clusterNetworkType
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description data.vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description data.vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description data.payType
     * @var string
     */
    public $payType;

    /**
     * @description data.dbClusterId
     * @var string
     */
    public $DBClusterId;

    /**
     * @description data.dbClusterStatusDesc
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description data.dbClusterDescription
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description data.engine
     * @var string
     */
    public $engine;

    /**
     * @description data.dbType
     * @var string
     */
    public $DBType;

    /**
     * @description data.dbVersion
     * @var string
     */
    public $DBVersion;

    /**
     * @description data.lockMode
     * @var string
     */
    public $lockMode;

    /**
     * @description data.deletionLock
     * @var integer
     */
    public $deletionLock;

    /**
     * @description data.createTime
     * @var string
     */
    public $creationTime;

    /**
     * @description data.expireTime
     * @var string
     */
    public $expireTime;

    /**
     * @description data.expired
     * @var string
     */
    public $expired;

    /**
     * @description data.maintainTime
     * @var string
     */
    public $maintainTime;

    /**
     * @description data.usedStorage
     * @var integer
     */
    public $storageUsed;

    /**
     * @description data.maxStorage
     * @var integer
     */
    public $storageMax;

    /**
     * @description data.dataZoneIds
     * @var string
     */
    public $zoneIds;

    /**
     * @description data.sqlSize
     * @var integer
     */
    public $SQLSize;

    /**
     * @description data.isLatestVersion
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @description data.resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description data.snapshotSize
     * @var integer
     */
    public $dataLevel1BackupChainSize;

    /**
     * @description data.tags
     * @var array
     */
    public $tags;

    /**
     * @description data.items
     * @var array
     */
    public $DBNodes;

}

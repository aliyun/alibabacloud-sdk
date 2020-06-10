<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDdrInstanceRequest extends Model
{
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。;
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description description: 目的地域ID，可以通过接口[DescribeRegions](~~26243~~)查看地域ID。;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: 目的数据库类型，取值：**MySQL**。;
     *
     * @var string
     */
    public $engine;

    /**
     * @description description: 目的数据库版本，取值：* **5.6**；* **5.7**。;
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description description: 目的实例规格，详见[实例规格表](~~26312~~)。;
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description description: 目的实例存储空间，取值： **5~2000**。每5G进行递增，单位：GB。详见[实例规格表](~~26312~~)。;
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description description: 目的实例的字符集，取值：* **utf8**；* **gbk**；* **latin1**；* **utf8mb4**。;
     *
     * @var string
     */
    public $systemDBCharset;

    /**
     * @description description: 目的实例的网络连接类型，取值：* **Internet**：公网连接；* **Intranet**：内网连接。;
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description description: 目的实例名称，长度为2~256个字符。以中文、英文字母开头，可以包含数字、中文、英文、下划线（_）、短横线（-）。>不能以 http:// 和 https:// 开头。;
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description description: 目的实例的[IP白名单](~~43185~~)，多个IP地址请以英文逗号（,）隔开，不可重复，最多1000个。支持如下两种格式：* IP地址形式，例如：10.23.12.24；* CIDR形式，例如：10.23.12.24/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。;
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description description: 用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。;
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description description: 目的实例的付费类型，取值：* **Postpaid**：后付费（按量付费）；* **Prepaid**：预付费（包年包月）。;
     *
     * @var string
     */
    public $payType;

    /**
     * @description description: 目的实例的可用区ID。多可用区用英文冒号（:）分隔。> 指定了VPC和交换机时，为匹配交换机对应的可用区，该参数必填。;
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description description: 目的实例的网络类型，取值：* **VPC**：VPC网络；* **Classic**：经典网络。默认创建经典网络类型的实例。>当本参数值为 **VPC**时，还需要传入参数**VpcId**、**VSwitchId**。;
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description description: 目的实例的访问模式，取值：* **Standard**：标准访问模式；* **Safe**：数据库代理模式。默认值：**Standard**。;
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description description: 目的实例的VPC ID。当**InstanceNetworkType**=**VPC**时，本参数可用。>如果传入此参数，您还需要传入参数**ZoneId**。;
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description description: 目的实例的VSwitch ID，多个值用英文逗号（,）隔开。当**InstanceNetworkType**=**VPC**时，本参数可用。>如果传入此参数，您还需要传入参数**ZoneId**。;
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description description: 设置目的实例的内网IP，需要在指定交换机的IP地址范围内。系统默认通过**VPCId**和**VSwitchId**自动分配。;
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description description: 指定购买时长，取值：* 当参数**Period**为**Year**时，UsedTime取值为**1~3**；* 当参数**Period**为**Month**时，UsedTime取值为**1~9**。> 若付费类型为**Prepaid**则该参数必须传入。;
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description description: 指定预付费目的实例为包年或者包月类型，取值：* **Year**：包年；* **Month**：包月。> 若付费类型为**Prepaid**则该参数必须传入。;
     *
     * @var string
     */
    public $period;

    /**
     * @description description: 资源组ID。;
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description description: 恢复方式，取值：* **0**：基于备份集恢复，您还需要传入参数**BackupSetID**；* **1**：基于时间点恢复，您还需要传入参数**RestoreTime**、**SourceRegion**、**SourceDBInstanceName**。;
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description description: 基于备份集恢复时，使用的备份集的ID。可以通过接口[DescribeCrossRegionBackups](~~121733~~)查看备份集ID。>**RestoreTyp**e=**0**时必传。;
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description description: 基于时间点恢复时，要恢复的时间节点，需要早于当前时间。格式：<i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z（UTC时间）。>**RestoreType**=**1**时必传 。;
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description description: 基于时间点恢复时，源地域的ID。>**RestoreType**=**1**时必传。;
     *
     * @var string
     */
    public $sourceRegion;

    /**
     * @description description: 基于时间点恢复时，源实例的ID。>**RestoreType**=**1**时必传。;
     *
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @description description: 目的实例存储类型，当前仅支持SSD本地盘，默认值：**local_ssd**。;
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description binlogName
     *
     * @var string
     */
    public $binlogName;

    /**
     * @description binlogPosition
     *
     * @var string
     */
    public $binlogPosition;

    /**
     * @description binlogRole
     *
     * @var string
     */
    public $binlogRole;
    protected $_name = [
        'accessKeyId'           => 'AccessKeyId',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'regionId'              => 'RegionId',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'systemDBCharset'       => 'SystemDBCharset',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'securityIPList'        => 'SecurityIPList',
        'clientToken'           => 'ClientToken',
        'payType'               => 'PayType',
        'zoneId'                => 'ZoneId',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'connectionMode'        => 'ConnectionMode',
        'VPCId'                 => 'VPCId',
        'VSwitchId'             => 'VSwitchId',
        'privateIpAddress'      => 'PrivateIpAddress',
        'ownerAccount'          => 'OwnerAccount',
        'usedTime'              => 'UsedTime',
        'period'                => 'Period',
        'resourceGroupId'       => 'ResourceGroupId',
        'restoreType'           => 'RestoreType',
        'backupSetId'           => 'BackupSetId',
        'restoreTime'           => 'RestoreTime',
        'sourceRegion'          => 'SourceRegion',
        'sourceDBInstanceName'  => 'SourceDBInstanceName',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'binlogName'            => 'BinlogName',
        'binlogPosition'        => 'BinlogPosition',
        'binlogRole'            => 'BinlogRole',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('restoreType', $this->restoreType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->systemDBCharset) {
            $res['SystemDBCharset'] = $this->systemDBCharset;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->binlogName) {
            $res['BinlogName'] = $this->binlogName;
        }
        if (null !== $this->binlogPosition) {
            $res['BinlogPosition'] = $this->binlogPosition;
        }
        if (null !== $this->binlogRole) {
            $res['BinlogRole'] = $this->binlogRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDdrInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['SystemDBCharset'])) {
            $model->systemDBCharset = $map['SystemDBCharset'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['BinlogName'])) {
            $model->binlogName = $map['BinlogName'];
        }
        if (isset($map['BinlogPosition'])) {
            $model->binlogPosition = $map['BinlogPosition'];
        }
        if (isset($map['BinlogRole'])) {
            $model->binlogRole = $map['BinlogRole'];
        }

        return $model;
    }
}

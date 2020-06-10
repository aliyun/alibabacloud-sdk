<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model {
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'systemDBCharset' => 'SystemDBCharset',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'securityIPList' => 'SecurityIPList',
        'clientToken' => 'ClientToken',
        'payType' => 'PayType',
        'zoneId' => 'ZoneId',
        'instanceNetworkType' => 'InstanceNetworkType',
        'connectionMode' => 'ConnectionMode',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'privateIpAddress' => 'PrivateIpAddress',
        'usedTime' => 'UsedTime',
        'period' => 'Period',
        'resourceGroupId' => 'ResourceGroupId',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'businessInfo' => 'BusinessInfo',
        'encryptionKey' => 'EncryptionKey',
        'roleARN' => 'RoleARN',
        'autoRenew' => 'AutoRenew',
        'category' => 'Category',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'targetDedicatedHostIdForMaster' => 'TargetDedicatedHostIdForMaster',
        'targetDedicatedHostIdForSlave' => 'TargetDedicatedHostIdForSlave',
        'targetDedicatedHostIdForLog' => 'TargetDedicatedHostIdForLog',
        'DBParamGroupId' => 'DBParamGroupId',
        'DBTimeZone' => 'DBTimeZone',
        'DBIsIgnoreCase' => 'DBIsIgnoreCase',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('payType', $this->payType, true);
    }
    public function toMap() {
        $res = [];
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
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->targetDedicatedHostIdForMaster) {
            $res['TargetDedicatedHostIdForMaster'] = $this->targetDedicatedHostIdForMaster;
        }
        if (null !== $this->targetDedicatedHostIdForSlave) {
            $res['TargetDedicatedHostIdForSlave'] = $this->targetDedicatedHostIdForSlave;
        }
        if (null !== $this->targetDedicatedHostIdForLog) {
            $res['TargetDedicatedHostIdForLog'] = $this->targetDedicatedHostIdForLog;
        }
        if (null !== $this->DBParamGroupId) {
            $res['DBParamGroupId'] = $this->DBParamGroupId;
        }
        if (null !== $this->DBTimeZone) {
            $res['DBTimeZone'] = $this->DBTimeZone;
        }
        if (null !== $this->DBIsIgnoreCase) {
            $res['DBIsIgnoreCase'] = $this->DBIsIgnoreCase;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
        }
        if(isset($map['DBInstanceClass'])){
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if(isset($map['DBInstanceStorage'])){
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if(isset($map['SystemDBCharset'])){
            $model->systemDBCharset = $map['SystemDBCharset'];
        }
        if(isset($map['DBInstanceNetType'])){
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if(isset($map['DBInstanceDescription'])){
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if(isset($map['SecurityIPList'])){
            $model->securityIPList = $map['SecurityIPList'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['PayType'])){
            $model->payType = $map['PayType'];
        }
        if(isset($map['ZoneId'])){
            $model->zoneId = $map['ZoneId'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['ConnectionMode'])){
            $model->connectionMode = $map['ConnectionMode'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['PrivateIpAddress'])){
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if(isset($map['UsedTime'])){
            $model->usedTime = $map['UsedTime'];
        }
        if(isset($map['Period'])){
            $model->period = $map['Period'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if(isset($map['DBInstanceStorageType'])){
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if(isset($map['BusinessInfo'])){
            $model->businessInfo = $map['BusinessInfo'];
        }
        if(isset($map['EncryptionKey'])){
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if(isset($map['RoleARN'])){
            $model->roleARN = $map['RoleARN'];
        }
        if(isset($map['AutoRenew'])){
            $model->autoRenew = $map['AutoRenew'];
        }
        if(isset($map['Category'])){
            $model->category = $map['Category'];
        }
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['TargetDedicatedHostIdForMaster'])){
            $model->targetDedicatedHostIdForMaster = $map['TargetDedicatedHostIdForMaster'];
        }
        if(isset($map['TargetDedicatedHostIdForSlave'])){
            $model->targetDedicatedHostIdForSlave = $map['TargetDedicatedHostIdForSlave'];
        }
        if(isset($map['TargetDedicatedHostIdForLog'])){
            $model->targetDedicatedHostIdForLog = $map['TargetDedicatedHostIdForLog'];
        }
        if(isset($map['DBParamGroupId'])){
            $model->DBParamGroupId = $map['DBParamGroupId'];
        }
        if(isset($map['DBTimeZone'])){
            $model->DBTimeZone = $map['DBTimeZone'];
        }
        if(isset($map['DBIsIgnoreCase'])){
            $model->DBIsIgnoreCase = $map['DBIsIgnoreCase'];
        }
        return $model;
    }
    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description description: 地域ID，可以通过接口[DescribeRegions](~~26243~~)查看可用的地域ID。; 
     * @var string
     */
    public $regionId;

    /**
     * @description description: 数据库类型，取值：* **MySQL**；* **SQLServer**；* **PostgreSQL**；* **PPAS**；* **MariaDB**。; 
     * @var string
     */
    public $engine;

    /**
     * @description description: 数据库版本，取值：* MySQL：**5.5/5.6/5.7/8.0**；* SQL Server：**2008r2/2012/2012_ent_ha/2012_std_ha/2012_web/2016_ent_ha/2016_std_ha/2016_web/2017_ent**；* PostgreSQL：**9.4/10.0**；* PPAS：**9.3/10.0**；* MariaDB：**10.3**。; 
     * @var string
     */
    public $engineVersion;

    /**
     * @description description: 实例规格，详见[实例规格表](~~26312~~)。; 
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description description: 实例存储空间，单位：GB。每5GB进行递增，详见[实例规格表](~~26312~~)。; 
     * @var integer
     */
    public $DBInstanceStorage;

    /**
     * @description description: 字符集，取值：* MySQL/MariaDB实例：**utf8、gbk、latin1、utf8mb4**；* SQL Server实例：**Chinese_PRC_CI_AS、Chinese_PRC_CS_AS、SQL_Latin1_General_CP1_CI_AS、SQL_Latin1_General_CP1_CS_AS、Chinese_PRC_BIN**。; 
     * @var string
     */
    public $systemDBCharset;

    /**
     * @description description: 实例的网络连接类型，取值：* **Internet**：公网连接；* **Intranet**：内网连接。; 
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description description: 实例名称，长度为2~256个字符。以中文、英文字母开头，可以包含数字、中文、英文、下划线（_）、短横线（-）。>不能以 http:// 和 https:// 开头。; 
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description description: 该实例的[IP白名单](~~43185~~)，多个IP地址请以英文逗号（,）隔开，不可重复，最多1000个。支持如下两种格式：* IP地址形式，例如：10.23.12.24；* CIDR形式，例如：10.23.12.24/24（无类域间路由，24表示了地址中前缀的长度，范围为1~32）。; 
     * @var string
     */
    public $securityIPList;

    /**
     * @description description: 用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。; 
     * @var string
     */
    public $clientToken;

    /**
     * @description description: 实例的付费类型，取值：* **Postpaid**：后付费（按量付费）；* **Prepaid**：预付费（包年包月）。; 
     * @var string
     */
    public $payType;

    /**
     * @description description: 可用区ID。多可用区用英文冒号（:）分隔。> 指定了VPC和交换机时，为匹配交换机对应的可用区，该参数必填。; 
     * @var string
     */
    public $zoneId;

    /**
     * @description description: 实例的网络类型，取值：* **VPC**：VPC网络；* **Classic**：经典网络。默认创建经典网络类型的实例。> * SQL Server2017集群版只支持VPC网络；* 如果数据库类型为MariaDB，该参数必填。; 
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description description: 实例的访问模式，取值：* **Standard**：标准访问模式；* **Safe**：数据库代理模式。默认为RDS系统分配。> SQL Server 2012/2016/2017只支持标准访问模式。; 
     * @var string
     */
    public $connectionMode;

    /**
     * @description description: VPC ID。>如果数据库类型为MariaDB，该参数必填。; 
     * @var string
     */
    public $VPCId;

    /**
     * @description description: VSwitch ID，多个值用英文逗号（,）隔开。>如果数据库类型为MariaDB，该参数必填。; 
     * @var string
     */
    public $VSwitchId;

    /**
     * @description description: 设置实例的内网IP，需要在指定交换机的IP地址范围内。系统默认通过**VPCId**和**VSwitchId**自动分配。; 
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description description: 指定购买时长，取值：* 当参数**Period**为**Year**时，UsedTime取值为**1~3**；* 当参数**Period**为**Month**时，UsedTime取值为**1~9**。> 若付费类型为**Prepaid**则该参数必须传入。; 
     * @var string
     */
    public $usedTime;

    /**
     * @description description: 指定预付费实例为包年或者包月类型，取值：* **Year**：包年；* **Month**：包月。> 若付费类型为**Prepaid**则该参数必须传入。; 
     * @var string
     */
    public $period;

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description description: 实例存储类型，取值：* **local_ssd**/**ephemeral_ssd**：本地SSD盘（推荐）；* **cloud_ssd**：SSD云盘；* **cloud_essd**：ESSD云盘。; 
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description description: 业务扩展参数。; 
     * @var string
     */
    public $businessInfo;

    /**
     * @description encryptionKey
     * @var string
     */
    public $encryptionKey;

    /**
     * @description roleARN
     * @var string
     */
    public $roleARN;

    /**
     * @description description: 实例是否自动续费，取值：**true | false**>* 按月购买，则自动续费周期为1个月；* 按年购买，则自动续费周期为1年。; 
     * @var string
     */
    public $autoRenew;

    /**
     * @description nodeType
     * @var string
     */
    public $category;

    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description targetDedicatedHostIdForMaster
     * @var string
     */
    public $targetDedicatedHostIdForMaster;

    /**
     * @description targetDedicatedHostIdForSlave
     * @var string
     */
    public $targetDedicatedHostIdForSlave;

    /**
     * @description targetDedicatedHostIdForLog
     * @var string
     */
    public $targetDedicatedHostIdForLog;

    /**
     * @description dbParamGroupId
     * @var string
     */
    public $DBParamGroupId;

    /**
     * @description dbTimeZone
     * @var string
     */
    public $DBTimeZone;

    /**
     * @description dbIsIgnoreCase
     * @var string
     */
    public $DBIsIgnoreCase;

}

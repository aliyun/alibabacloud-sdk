<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;

class DBInstanceNetInfo extends Model {
    protected $_name = [
        'upgradeable' => 'Upgradeable',
        'expiredTime' => 'ExpiredTime',
        'connectionString' => 'ConnectionString',
        'IPAddress' => 'IPAddress',
        'IPType' => 'IPType',
        'port' => 'Port',
        'VPCId' => 'VPCId',
        'VSwitchId' => 'VSwitchId',
        'connectionStringType' => 'ConnectionStringType',
        'maxDelayTime' => 'MaxDelayTime',
        'distributionType' => 'DistributionType',
        'securityIPGroups' => 'SecurityIPGroups',
        'DBInstanceWeights' => 'DBInstanceWeights',
    ];
    public function validate() {
        Model::validateRequired('upgradeable', $this->upgradeable, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('IPAddress', $this->IPAddress, true);
        Model::validateRequired('IPType', $this->IPType, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('connectionStringType', $this->connectionStringType, true);
        Model::validateRequired('maxDelayTime', $this->maxDelayTime, true);
        Model::validateRequired('distributionType', $this->distributionType, true);
        Model::validateRequired('securityIPGroups', $this->securityIPGroups, true);
        Model::validateRequired('DBInstanceWeights', $this->DBInstanceWeights, true);
    }
    public function toMap() {
        $res = [];
        $res['Upgradeable'] = $this->upgradeable;
        $res['ExpiredTime'] = $this->expiredTime;
        $res['ConnectionString'] = $this->connectionString;
        $res['IPAddress'] = $this->IPAddress;
        $res['IPType'] = $this->IPType;
        $res['Port'] = $this->port;
        $res['VPCId'] = $this->VPCId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['ConnectionStringType'] = $this->connectionStringType;
        $res['MaxDelayTime'] = $this->maxDelayTime;
        $res['DistributionType'] = $this->distributionType;
        $res['SecurityIPGroups'] = null !== $this->securityIPGroups ? $this->securityIPGroups->toMap() : null;
        $res['DBInstanceWeights'] = null !== $this->DBInstanceWeights ? $this->DBInstanceWeights->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Upgradeable'])){
            $model->upgradeable = $map['Upgradeable'];
        }
        if(isset($map['ExpiredTime'])){
            $model->expiredTime = $map['ExpiredTime'];
        }
        if(isset($map['ConnectionString'])){
            $model->connectionString = $map['ConnectionString'];
        }
        if(isset($map['IPAddress'])){
            $model->IPAddress = $map['IPAddress'];
        }
        if(isset($map['IPType'])){
            $model->IPType = $map['IPType'];
        }
        if(isset($map['Port'])){
            $model->port = $map['Port'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['ConnectionStringType'])){
            $model->connectionStringType = $map['ConnectionStringType'];
        }
        if(isset($map['MaxDelayTime'])){
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if(isset($map['DistributionType'])){
            $model->distributionType = $map['DistributionType'];
        }
        if(isset($map['SecurityIPGroups'])){
            $model->securityIPGroups = securityIPGroups::fromMap($map['SecurityIPGroups']);
        }
        if(isset($map['DBInstanceWeights'])){
            $model->DBInstanceWeights = DBInstanceWeights::fromMap($map['DBInstanceWeights']);
        }
        return $model;
    }
    /**
     * @description upgradeable
     * @var string
     */
    public $upgradeable;

    /**
     * @description expiredTime
     * @var string
     */
    public $expiredTime;

    /**
     * @description connectionString
     * @var string
     */
    public $connectionString;

    /**
     * @description ipAddress
     * @var string
     */
    public $IPAddress;

    /**
     * @description ipType
     * @var string
     */
    public $IPType;

    /**
     * @description port
     * @var string
     */
    public $port;

    /**
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description vSwitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description dbInstanceNetRwSplitType
     * @var string
     */
    public $connectionStringType;

    /**
     * @description maxDelayTime
     * @var string
     */
    public $maxDelayTime;

    /**
     * @description distributionType
     * @var string
     */
    public $distributionType;

    /**
     * @description securityIPGroups
     * @var securityIPGroups
     */
    public $securityIPGroups;

    /**
     * @description dbInstanceWeightList
     * @var DBInstanceWeights
     */
    public $DBInstanceWeights;

}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;
use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @description upgradeable
     *
     * @var string
     */
    public $upgradeable;

    /**
     * @description expiredTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description connectionString
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description ipAddress
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description ipType
     *
     * @var string
     */
    public $IPType;

    /**
     * @description port
     *
     * @var string
     */
    public $port;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description dbInstanceNetRwSplitType
     *
     * @var string
     */
    public $connectionStringType;

    /**
     * @description maxDelayTime
     *
     * @var string
     */
    public $maxDelayTime;

    /**
     * @description distributionType
     *
     * @var string
     */
    public $distributionType;

    /**
     * @description securityIPGroups
     *
     * @var securityIPGroups
     */
    public $securityIPGroups;

    /**
     * @description dbInstanceWeightList
     *
     * @var DBInstanceWeights
     */
    public $DBInstanceWeights;
    protected $_name = [
        'upgradeable'          => 'Upgradeable',
        'expiredTime'          => 'ExpiredTime',
        'connectionString'     => 'ConnectionString',
        'IPAddress'            => 'IPAddress',
        'IPType'               => 'IPType',
        'port'                 => 'Port',
        'VPCId'                => 'VPCId',
        'VSwitchId'            => 'VSwitchId',
        'connectionStringType' => 'ConnectionStringType',
        'maxDelayTime'         => 'MaxDelayTime',
        'distributionType'     => 'DistributionType',
        'securityIPGroups'     => 'SecurityIPGroups',
        'DBInstanceWeights'    => 'DBInstanceWeights',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->connectionStringType) {
            $res['ConnectionStringType'] = $this->connectionStringType;
        }
        if (null !== $this->maxDelayTime) {
            $res['MaxDelayTime'] = $this->maxDelayTime;
        }
        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }
        if (null !== $this->securityIPGroups) {
            $res['SecurityIPGroups'] = null !== $this->securityIPGroups ? $this->securityIPGroups->toMap() : null;
        }
        if (null !== $this->DBInstanceWeights) {
            $res['DBInstanceWeights'] = null !== $this->DBInstanceWeights ? $this->DBInstanceWeights->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionStringType'])) {
            $model->connectionStringType = $map['ConnectionStringType'];
        }
        if (isset($map['MaxDelayTime'])) {
            $model->maxDelayTime = $map['MaxDelayTime'];
        }
        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }
        if (isset($map['SecurityIPGroups'])) {
            $model->securityIPGroups = securityIPGroups::fromMap($map['SecurityIPGroups']);
        }
        if (isset($map['DBInstanceWeights'])) {
            $model->DBInstanceWeights = DBInstanceWeights::fromMap($map['DBInstanceWeights']);
        }

        return $model;
    }
}

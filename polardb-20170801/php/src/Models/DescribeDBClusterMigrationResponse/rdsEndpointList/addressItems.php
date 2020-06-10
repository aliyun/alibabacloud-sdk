<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse\rdsEndpointList;

use AlibabaCloud\Tea\Model;

class addressItems extends Model
{
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
     * @description netType
     *
     * @var string
     */
    public $netType;

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
     * @description vswitchId
     *
     * @var string
     */
    public $VSwitchId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'IPAddress'        => 'IPAddress',
        'netType'          => 'NetType',
        'port'             => 'Port',
        'VPCId'            => 'VPCId',
        'VSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('IPAddress', $this->IPAddress, true);
        Model::validateRequired('netType', $this->netType, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
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

        return $model;
    }
}

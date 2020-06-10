<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBProxyEndpointResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dBProxyEndpointId
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description data.dBProxyConnectString
     *
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @description data.dBProxyConnectStringPort
     *
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @description data.dBProxyConnectStringNetType
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description data.dBProxyFeatures
     *
     * @var string
     */
    public $DBProxyFeatures;

    /**
     * @description data.readOnlyInstanceMaxDelayTime
     *
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @description data.readOnlyInstanceDistributionType
     *
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @description data.readOnlyInstanceWeight
     *
     * @var string
     */
    public $readOnlyInstanceWeight;
    protected $_name = [
        'requestId'                        => 'RequestId',
        'DBProxyEndpointId'                => 'DBProxyEndpointId',
        'DBProxyConnectString'             => 'DBProxyConnectString',
        'DBProxyConnectStringPort'         => 'DBProxyConnectStringPort',
        'DBProxyConnectStringNetType'      => 'DBProxyConnectStringNetType',
        'DBProxyFeatures'                  => 'DBProxyFeatures',
        'readOnlyInstanceMaxDelayTime'     => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceWeight'           => 'ReadOnlyInstanceWeight',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
        Model::validateRequired('DBProxyConnectString', $this->DBProxyConnectString, true);
        Model::validateRequired('DBProxyConnectStringPort', $this->DBProxyConnectStringPort, true);
        Model::validateRequired('DBProxyConnectStringNetType', $this->DBProxyConnectStringNetType, true);
        Model::validateRequired('DBProxyFeatures', $this->DBProxyFeatures, true);
        Model::validateRequired('readOnlyInstanceMaxDelayTime', $this->readOnlyInstanceMaxDelayTime, true);
        Model::validateRequired('readOnlyInstanceDistributionType', $this->readOnlyInstanceDistributionType, true);
        Model::validateRequired('readOnlyInstanceWeight', $this->readOnlyInstanceWeight, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->DBProxyConnectString) {
            $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        }
        if (null !== $this->DBProxyConnectStringPort) {
            $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        }
        if (null !== $this->DBProxyConnectStringNetType) {
            $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        }
        if (null !== $this->DBProxyFeatures) {
            $res['DBProxyFeatures'] = $this->DBProxyFeatures;
        }
        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }
        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }
        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyEndpointResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['DBProxyConnectString'])) {
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if (isset($map['DBProxyConnectStringPort'])) {
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if (isset($map['DBProxyConnectStringNetType'])) {
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if (isset($map['DBProxyFeatures'])) {
            $model->DBProxyFeatures = $map['DBProxyFeatures'];
        }
        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }
        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }
        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }

        return $model;
    }
}

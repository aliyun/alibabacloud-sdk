<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems;

use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model
{
    /**
     * @description dBProxyEndpointId
     *
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description dBProxyConnectString
     *
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @description dBProxyConnectStringPort
     *
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @description dBProxyConnectStringNetType
     *
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description dbProxyVpcInstanceId
     *
     * @var string
     */
    public $DBProxyVpcInstanceId;

    /**
     * @description dBProxyEndpointName
     *
     * @var string
     */
    public $DBProxyEndpointName;

    /**
     * @description dBProxyConnectStringNetType
     *
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;
    protected $_name = [
        'DBProxyEndpointId'               => 'DBProxyEndpointId',
        'DBProxyConnectString'            => 'DBProxyConnectString',
        'DBProxyConnectStringPort'        => 'DBProxyConnectStringPort',
        'DBProxyConnectStringNetType'     => 'DBProxyConnectStringNetType',
        'DBProxyVpcInstanceId'            => 'DBProxyVpcInstanceId',
        'DBProxyEndpointName'             => 'DBProxyEndpointName',
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
    ];

    public function validate()
    {
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
        Model::validateRequired('DBProxyConnectString', $this->DBProxyConnectString, true);
        Model::validateRequired('DBProxyConnectStringPort', $this->DBProxyConnectStringPort, true);
        Model::validateRequired('DBProxyConnectStringNetType', $this->DBProxyConnectStringNetType, true);
        Model::validateRequired('DBProxyVpcInstanceId', $this->DBProxyVpcInstanceId, true);
        Model::validateRequired('DBProxyEndpointName', $this->DBProxyEndpointName, true);
        Model::validateRequired('DBProxyConnectStringNetWorkType', $this->DBProxyConnectStringNetWorkType, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->DBProxyVpcInstanceId) {
            $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
        }
        if (null !== $this->DBProxyEndpointName) {
            $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        }
        if (null !== $this->DBProxyConnectStringNetWorkType) {
            $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['DBProxyVpcInstanceId'])) {
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }
        if (isset($map['DBProxyEndpointName'])) {
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }
        if (isset($map['DBProxyConnectStringNetWorkType'])) {
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }

        return $model;
    }
}

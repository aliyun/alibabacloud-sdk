<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems;

use AlibabaCloud\Tea\Model;

class DBProxyConnectStringItems extends Model {
    protected $_name = [
        'DBProxyEndpointId' => 'DBProxyEndpointId',
        'DBProxyConnectString' => 'DBProxyConnectString',
        'DBProxyConnectStringPort' => 'DBProxyConnectStringPort',
        'DBProxyConnectStringNetType' => 'DBProxyConnectStringNetType',
        'DBProxyVpcInstanceId' => 'DBProxyVpcInstanceId',
        'DBProxyEndpointName' => 'DBProxyEndpointName',
        'DBProxyConnectStringNetWorkType' => 'DBProxyConnectStringNetWorkType',
    ];
    public function validate() {
        Model::validateRequired('DBProxyEndpointId', $this->DBProxyEndpointId, true);
        Model::validateRequired('DBProxyConnectString', $this->DBProxyConnectString, true);
        Model::validateRequired('DBProxyConnectStringPort', $this->DBProxyConnectStringPort, true);
        Model::validateRequired('DBProxyConnectStringNetType', $this->DBProxyConnectStringNetType, true);
        Model::validateRequired('DBProxyVpcInstanceId', $this->DBProxyVpcInstanceId, true);
        Model::validateRequired('DBProxyEndpointName', $this->DBProxyEndpointName, true);
        Model::validateRequired('DBProxyConnectStringNetWorkType', $this->DBProxyConnectStringNetWorkType, true);
    }
    public function toMap() {
        $res = [];
        $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        $res['DBProxyConnectString'] = $this->DBProxyConnectString;
        $res['DBProxyConnectStringPort'] = $this->DBProxyConnectStringPort;
        $res['DBProxyConnectStringNetType'] = $this->DBProxyConnectStringNetType;
        $res['DBProxyVpcInstanceId'] = $this->DBProxyVpcInstanceId;
        $res['DBProxyEndpointName'] = $this->DBProxyEndpointName;
        $res['DBProxyConnectStringNetWorkType'] = $this->DBProxyConnectStringNetWorkType;
        return $res;
    }
    /**
     * @param array $map
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBProxyEndpointId'])){
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if(isset($map['DBProxyConnectString'])){
            $model->DBProxyConnectString = $map['DBProxyConnectString'];
        }
        if(isset($map['DBProxyConnectStringPort'])){
            $model->DBProxyConnectStringPort = $map['DBProxyConnectStringPort'];
        }
        if(isset($map['DBProxyConnectStringNetType'])){
            $model->DBProxyConnectStringNetType = $map['DBProxyConnectStringNetType'];
        }
        if(isset($map['DBProxyVpcInstanceId'])){
            $model->DBProxyVpcInstanceId = $map['DBProxyVpcInstanceId'];
        }
        if(isset($map['DBProxyEndpointName'])){
            $model->DBProxyEndpointName = $map['DBProxyEndpointName'];
        }
        if(isset($map['DBProxyConnectStringNetWorkType'])){
            $model->DBProxyConnectStringNetWorkType = $map['DBProxyConnectStringNetWorkType'];
        }
        return $model;
    }
    /**
     * @description dBProxyEndpointId
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @description dBProxyConnectString
     * @var string
     */
    public $DBProxyConnectString;

    /**
     * @description dBProxyConnectStringPort
     * @var string
     */
    public $DBProxyConnectStringPort;

    /**
     * @description dBProxyConnectStringNetType
     * @var string
     */
    public $DBProxyConnectStringNetType;

    /**
     * @description dbProxyVpcInstanceId
     * @var string
     */
    public $DBProxyVpcInstanceId;

    /**
     * @description dBProxyEndpointName
     * @var string
     */
    public $DBProxyEndpointName;

    /**
     * @description dBProxyConnectStringNetType
     * @var string
     */
    public $DBProxyConnectStringNetWorkType;

}

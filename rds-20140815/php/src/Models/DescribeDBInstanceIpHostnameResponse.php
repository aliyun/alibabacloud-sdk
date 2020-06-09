<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIpHostnameResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'ipHostnameInfos' => 'IpHostnameInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('ipHostnameInfos', $this->ipHostnameInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['IpHostnameInfos'] = $this->ipHostnameInfos;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstanceIpHostnameResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['IpHostnameInfos'])){
            $model->ipHostnameInfos = $map['IpHostnameInfos'];
        }
        return $model;
    }
    /**
     * @description description: 请求ID。; 
     * @var string
     */
    public $requestId;

    /**
     * @description description: 实例ID。; 
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: RDS实例所在ECS实例的内网IP和ECS主机名，包含主备实例。格式：ip1,hostname1;ip2,hostname2。; 
     * @var string
     */
    public $ipHostnameInfos;

}

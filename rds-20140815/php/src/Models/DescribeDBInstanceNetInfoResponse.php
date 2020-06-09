<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos;

class DescribeDBInstanceNetInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'instanceNetworkType' => 'InstanceNetworkType',
        'securityIPMode' => 'SecurityIPMode',
        'DBInstanceNetInfos' => 'DBInstanceNetInfos',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('securityIPMode', $this->securityIPMode, true);
        Model::validateRequired('DBInstanceNetInfos', $this->DBInstanceNetInfos, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['InstanceNetworkType'] = $this->instanceNetworkType;
        $res['SecurityIPMode'] = $this->securityIPMode;
        $res['DBInstanceNetInfos'] = null !== $this->DBInstanceNetInfos ? $this->DBInstanceNetInfos->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBInstanceNetInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['InstanceNetworkType'])){
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if(isset($map['SecurityIPMode'])){
            $model->securityIPMode = $map['SecurityIPMode'];
        }
        if(isset($map['DBInstanceNetInfos'])){
            $model->DBInstanceNetInfos = DBInstanceNetInfos::fromMap($map['DBInstanceNetInfos']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.instanceNetworkType
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description data.securityIPMode
     * @var string
     */
    public $securityIPMode;

    /**
     * @description data.netInfoItems
     * @var DBInstanceNetInfos
     */
    public $DBInstanceNetInfos;

}

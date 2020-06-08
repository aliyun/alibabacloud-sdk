<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems;

class DescribeDBProxyResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBProxyServiceStatus' => 'DBProxyServiceStatus',
        'DBProxyInstanceType' => 'DBProxyInstanceType',
        'DBProxyInstanceNum' => 'DBProxyInstanceNum',
        'DBProxyInstanceStatus' => 'DBProxyInstanceStatus',
        'DBProxyInstanceCurrentMinorVersion' => 'DBProxyInstanceCurrentMinorVersion',
        'DBProxyInstanceLatestMinorVersion' => 'DBProxyInstanceLatestMinorVersion',
        'DBProxyInstanceName' => 'DBProxyInstanceName',
        'DBProxyConnectStringItems' => 'DBProxyConnectStringItems',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBProxyServiceStatus', $this->DBProxyServiceStatus, true);
        Model::validateRequired('DBProxyInstanceType', $this->DBProxyInstanceType, true);
        Model::validateRequired('DBProxyInstanceNum', $this->DBProxyInstanceNum, true);
        Model::validateRequired('DBProxyInstanceStatus', $this->DBProxyInstanceStatus, true);
        Model::validateRequired('DBProxyInstanceCurrentMinorVersion', $this->DBProxyInstanceCurrentMinorVersion, true);
        Model::validateRequired('DBProxyInstanceLatestMinorVersion', $this->DBProxyInstanceLatestMinorVersion, true);
        Model::validateRequired('DBProxyInstanceName', $this->DBProxyInstanceName, true);
        Model::validateRequired('DBProxyConnectStringItems', $this->DBProxyConnectStringItems, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBProxyServiceStatus'] = $this->DBProxyServiceStatus;
        $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        $res['DBProxyInstanceStatus'] = $this->DBProxyInstanceStatus;
        $res['DBProxyInstanceCurrentMinorVersion'] = $this->DBProxyInstanceCurrentMinorVersion;
        $res['DBProxyInstanceLatestMinorVersion'] = $this->DBProxyInstanceLatestMinorVersion;
        $res['DBProxyInstanceName'] = $this->DBProxyInstanceName;
        $res['DBProxyConnectStringItems'] = null !== $this->DBProxyConnectStringItems ? $this->DBProxyConnectStringItems->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDBProxyResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBProxyServiceStatus'])){
            $model->DBProxyServiceStatus = $map['DBProxyServiceStatus'];
        }
        if(isset($map['DBProxyInstanceType'])){
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if(isset($map['DBProxyInstanceNum'])){
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if(isset($map['DBProxyInstanceStatus'])){
            $model->DBProxyInstanceStatus = $map['DBProxyInstanceStatus'];
        }
        if(isset($map['DBProxyInstanceCurrentMinorVersion'])){
            $model->DBProxyInstanceCurrentMinorVersion = $map['DBProxyInstanceCurrentMinorVersion'];
        }
        if(isset($map['DBProxyInstanceLatestMinorVersion'])){
            $model->DBProxyInstanceLatestMinorVersion = $map['DBProxyInstanceLatestMinorVersion'];
        }
        if(isset($map['DBProxyInstanceName'])){
            $model->DBProxyInstanceName = $map['DBProxyInstanceName'];
        }
        if(isset($map['DBProxyConnectStringItems'])){
            $model->DBProxyConnectStringItems = DBProxyConnectStringItems::fromMap($map['DBProxyConnectStringItems']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dBProxyServiceStatus
     * @var string
     */
    public $DBProxyServiceStatus;

    /**
     * @description data.dBProxyInstanceType
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description data.dBProxyInstanceNum
     * @var integer
     */
    public $DBProxyInstanceNum;

    /**
     * @description data.dbProxyInstanceStatus
     * @var string
     */
    public $DBProxyInstanceStatus;

    /**
     * @description data.dbProxyInstanceCurrentMinorVersion
     * @var string
     */
    public $DBProxyInstanceCurrentMinorVersion;

    /**
     * @description data.dbProxyInstanceLatestMinorVersion
     * @var string
     */
    public $DBProxyInstanceLatestMinorVersion;

    /**
     * @description data.dbProxyInstanceName
     * @var string
     */
    public $DBProxyInstanceName;

    /**
     * @description data.dBProxyConnectStringItems
     * @var DBProxyConnectStringItems
     */
    public $DBProxyConnectStringItems;

}

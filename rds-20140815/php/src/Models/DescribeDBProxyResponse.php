<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems;
use AlibabaCloud\Tea\Model;

class DescribeDBProxyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dBProxyServiceStatus
     *
     * @var string
     */
    public $DBProxyServiceStatus;

    /**
     * @description data.dBProxyInstanceType
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @description data.dBProxyInstanceNum
     *
     * @var int
     */
    public $DBProxyInstanceNum;

    /**
     * @description data.dbProxyInstanceStatus
     *
     * @var string
     */
    public $DBProxyInstanceStatus;

    /**
     * @description data.dbProxyInstanceCurrentMinorVersion
     *
     * @var string
     */
    public $DBProxyInstanceCurrentMinorVersion;

    /**
     * @description data.dbProxyInstanceLatestMinorVersion
     *
     * @var string
     */
    public $DBProxyInstanceLatestMinorVersion;

    /**
     * @description data.dbProxyInstanceName
     *
     * @var string
     */
    public $DBProxyInstanceName;

    /**
     * @description data.dBProxyConnectStringItems
     *
     * @var DBProxyConnectStringItems
     */
    public $DBProxyConnectStringItems;
    protected $_name = [
        'requestId'                          => 'RequestId',
        'DBProxyServiceStatus'               => 'DBProxyServiceStatus',
        'DBProxyInstanceType'                => 'DBProxyInstanceType',
        'DBProxyInstanceNum'                 => 'DBProxyInstanceNum',
        'DBProxyInstanceStatus'              => 'DBProxyInstanceStatus',
        'DBProxyInstanceCurrentMinorVersion' => 'DBProxyInstanceCurrentMinorVersion',
        'DBProxyInstanceLatestMinorVersion'  => 'DBProxyInstanceLatestMinorVersion',
        'DBProxyInstanceName'                => 'DBProxyInstanceName',
        'DBProxyConnectStringItems'          => 'DBProxyConnectStringItems',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBProxyServiceStatus) {
            $res['DBProxyServiceStatus'] = $this->DBProxyServiceStatus;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->DBProxyInstanceStatus) {
            $res['DBProxyInstanceStatus'] = $this->DBProxyInstanceStatus;
        }
        if (null !== $this->DBProxyInstanceCurrentMinorVersion) {
            $res['DBProxyInstanceCurrentMinorVersion'] = $this->DBProxyInstanceCurrentMinorVersion;
        }
        if (null !== $this->DBProxyInstanceLatestMinorVersion) {
            $res['DBProxyInstanceLatestMinorVersion'] = $this->DBProxyInstanceLatestMinorVersion;
        }
        if (null !== $this->DBProxyInstanceName) {
            $res['DBProxyInstanceName'] = $this->DBProxyInstanceName;
        }
        if (null !== $this->DBProxyConnectStringItems) {
            $res['DBProxyConnectStringItems'] = null !== $this->DBProxyConnectStringItems ? $this->DBProxyConnectStringItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBProxyServiceStatus'])) {
            $model->DBProxyServiceStatus = $map['DBProxyServiceStatus'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['DBProxyInstanceStatus'])) {
            $model->DBProxyInstanceStatus = $map['DBProxyInstanceStatus'];
        }
        if (isset($map['DBProxyInstanceCurrentMinorVersion'])) {
            $model->DBProxyInstanceCurrentMinorVersion = $map['DBProxyInstanceCurrentMinorVersion'];
        }
        if (isset($map['DBProxyInstanceLatestMinorVersion'])) {
            $model->DBProxyInstanceLatestMinorVersion = $map['DBProxyInstanceLatestMinorVersion'];
        }
        if (isset($map['DBProxyInstanceName'])) {
            $model->DBProxyInstanceName = $map['DBProxyInstanceName'];
        }
        if (isset($map['DBProxyConnectStringItems'])) {
            $model->DBProxyConnectStringItems = DBProxyConnectStringItems::fromMap($map['DBProxyConnectStringItems']);
        }

        return $model;
    }
}

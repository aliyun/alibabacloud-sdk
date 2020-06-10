<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponse\items;

use AlibabaCloud\Tea\Model;

class DBInstanceIPArray extends Model
{
    /**
     * @description groupName
     *
     * @var string
     */
    public $DBInstanceIPArrayName;

    /**
     * @description groupTag
     *
     * @var string
     */
    public $DBInstanceIPArrayAttribute;

    /**
     * @description securityIPType
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @description securityIPList
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description whitelistNetType
     *
     * @var string
     */
    public $whitelistNetworkType;
    protected $_name = [
        'DBInstanceIPArrayName'      => 'DBInstanceIPArrayName',
        'DBInstanceIPArrayAttribute' => 'DBInstanceIPArrayAttribute',
        'securityIPType'             => 'SecurityIPType',
        'securityIPList'             => 'SecurityIPList',
        'whitelistNetworkType'       => 'WhitelistNetworkType',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceIPArrayName', $this->DBInstanceIPArrayName, true);
        Model::validateRequired('DBInstanceIPArrayAttribute', $this->DBInstanceIPArrayAttribute, true);
        Model::validateRequired('securityIPType', $this->securityIPType, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('whitelistNetworkType', $this->whitelistNetworkType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIPArrayName) {
            $res['DBInstanceIPArrayName'] = $this->DBInstanceIPArrayName;
        }
        if (null !== $this->DBInstanceIPArrayAttribute) {
            $res['DBInstanceIPArrayAttribute'] = $this->DBInstanceIPArrayAttribute;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->whitelistNetworkType) {
            $res['WhitelistNetworkType'] = $this->whitelistNetworkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceIPArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIPArrayName'])) {
            $model->DBInstanceIPArrayName = $map['DBInstanceIPArrayName'];
        }
        if (isset($map['DBInstanceIPArrayAttribute'])) {
            $model->DBInstanceIPArrayAttribute = $map['DBInstanceIPArrayAttribute'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['WhitelistNetworkType'])) {
            $model->whitelistNetworkType = $map['WhitelistNetworkType'];
        }

        return $model;
    }
}

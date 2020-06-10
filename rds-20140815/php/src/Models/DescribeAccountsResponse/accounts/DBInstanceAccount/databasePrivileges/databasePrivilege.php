<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount\databasePrivileges;

use AlibabaCloud\Tea\Model;

class databasePrivilege extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description accountPrivilege
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description accountPrivilegeDetail
     *
     * @var string
     */
    public $accountPrivilegeDetail;
    protected $_name = [
        'DBName'                 => 'DBName',
        'accountPrivilege'       => 'AccountPrivilege',
        'accountPrivilegeDetail' => 'AccountPrivilegeDetail',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('accountPrivilege', $this->accountPrivilege, true);
        Model::validateRequired('accountPrivilegeDetail', $this->accountPrivilegeDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountPrivilegeDetail) {
            $res['AccountPrivilegeDetail'] = $this->accountPrivilegeDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databasePrivilege
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountPrivilegeDetail'])) {
            $model->accountPrivilegeDetail = $map['AccountPrivilegeDetail'];
        }

        return $model;
    }
}

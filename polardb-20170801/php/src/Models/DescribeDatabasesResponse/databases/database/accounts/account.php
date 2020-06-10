<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases\database\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description accountName
     *
     * @var string
     */
    public $accountName;

    /**
     * @description accountStatus
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description accountPrivilege
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description privilegeStatus
     *
     * @var string
     */
    public $privilegeStatus;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountStatus'    => 'AccountStatus',
        'accountPrivilege' => 'AccountPrivilege',
        'privilegeStatus'  => 'PrivilegeStatus',
    ];

    public function validate()
    {
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('accountStatus', $this->accountStatus, true);
        Model::validateRequired('accountPrivilege', $this->accountPrivilege, true);
        Model::validateRequired('privilegeStatus', $this->privilegeStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->privilegeStatus) {
            $res['PrivilegeStatus'] = $this->privilegeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['PrivilegeStatus'])) {
            $model->privilegeStatus = $map['PrivilegeStatus'];
        }

        return $model;
    }
}

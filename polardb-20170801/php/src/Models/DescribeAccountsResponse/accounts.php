<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponse\accounts\databasePrivileges;
use AlibabaCloud\Tea\Model;

class accounts extends Model
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
     * @description accountDescription
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description accountType
     *
     * @var string
     */
    public $accountType;

    /**
     * @description accountLockState
     *
     * @var string
     */
    public $accountLockState;

    /**
     * @description privExceeded
     *
     * @var string
     */
    public $privilegeExceeded;

    /**
     * @description accountPwdValidTime
     *
     * @var string
     */
    public $accountPasswordValidTime;

    /**
     * @description databasePrivileges
     *
     * @var array
     */
    public $databasePrivileges;
    protected $_name = [
        'accountName'              => 'AccountName',
        'accountStatus'            => 'AccountStatus',
        'accountDescription'       => 'AccountDescription',
        'accountType'              => 'AccountType',
        'accountLockState'         => 'AccountLockState',
        'privilegeExceeded'        => 'PrivilegeExceeded',
        'accountPasswordValidTime' => 'AccountPasswordValidTime',
        'databasePrivileges'       => 'DatabasePrivileges',
    ];

    public function validate()
    {
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('accountStatus', $this->accountStatus, true);
        Model::validateRequired('accountDescription', $this->accountDescription, true);
        Model::validateRequired('accountType', $this->accountType, true);
        Model::validateRequired('accountLockState', $this->accountLockState, true);
        Model::validateRequired('privilegeExceeded', $this->privilegeExceeded, true);
        Model::validateRequired('accountPasswordValidTime', $this->accountPasswordValidTime, true);
        Model::validateRequired('databasePrivileges', $this->databasePrivileges, true);
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
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountLockState) {
            $res['AccountLockState'] = $this->accountLockState;
        }
        if (null !== $this->privilegeExceeded) {
            $res['PrivilegeExceeded'] = $this->privilegeExceeded;
        }
        if (null !== $this->accountPasswordValidTime) {
            $res['AccountPasswordValidTime'] = $this->accountPasswordValidTime;
        }
        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = [];
            if (null !== $this->databasePrivileges && \is_array($this->databasePrivileges)) {
                $n = 0;
                foreach ($this->databasePrivileges as $item) {
                    $res['DatabasePrivileges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
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
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountLockState'])) {
            $model->accountLockState = $map['AccountLockState'];
        }
        if (isset($map['PrivilegeExceeded'])) {
            $model->privilegeExceeded = $map['PrivilegeExceeded'];
        }
        if (isset($map['AccountPasswordValidTime'])) {
            $model->accountPasswordValidTime = $map['AccountPasswordValidTime'];
        }
        if (isset($map['DatabasePrivileges'])) {
            if (!empty($map['DatabasePrivileges'])) {
                $model->databasePrivileges = [];
                $n                         = 0;
                foreach ($map['DatabasePrivileges'] as $item) {
                    $model->databasePrivileges[$n++] = null !== $item ? databasePrivileges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

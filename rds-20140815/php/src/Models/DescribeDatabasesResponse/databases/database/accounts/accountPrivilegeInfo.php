<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases\database\accounts;

use AlibabaCloud\Tea\Model;

class accountPrivilegeInfo extends Model
{
    /**
     * @description accountName
     *
     * @var string
     */
    public $account;

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
        'account'                => 'Account',
        'accountPrivilege'       => 'AccountPrivilege',
        'accountPrivilegeDetail' => 'AccountPrivilegeDetail',
    ];

    public function validate()
    {
        Model::validateRequired('account', $this->account, true);
        Model::validateRequired('accountPrivilege', $this->accountPrivilege, true);
        Model::validateRequired('accountPrivilegeDetail', $this->accountPrivilegeDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
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
     * @return accountPrivilegeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
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

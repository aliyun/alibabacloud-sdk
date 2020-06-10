<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount\databasePrivileges\databasePrivilege;
use AlibabaCloud\Tea\Model;

class databasePrivileges extends Model
{
    /**
     * @description DatabasePrivilege
     *
     * @var array
     */
    public $databasePrivilege;
    protected $_name = [
        'databasePrivilege' => 'DatabasePrivilege',
    ];

    public function validate()
    {
        Model::validateRequired('databasePrivilege', $this->databasePrivilege, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databasePrivilege) {
            $res['DatabasePrivilege'] = [];
            if (null !== $this->databasePrivilege && \is_array($this->databasePrivilege)) {
                $n = 0;
                foreach ($this->databasePrivilege as $item) {
                    $res['DatabasePrivilege'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databasePrivileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabasePrivilege'])) {
            if (!empty($map['DatabasePrivilege'])) {
                $model->databasePrivilege = [];
                $n                        = 0;
                foreach ($map['DatabasePrivilege'] as $item) {
                    $model->databasePrivilege[$n++] = null !== $item ? databasePrivilege::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

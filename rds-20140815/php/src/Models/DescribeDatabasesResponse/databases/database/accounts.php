<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases\database;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponse\databases\database\accounts\accountPrivilegeInfo;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description AccountPrivilegeInfo
     *
     * @var array
     */
    public $accountPrivilegeInfo;
    protected $_name = [
        'accountPrivilegeInfo' => 'AccountPrivilegeInfo',
    ];

    public function validate()
    {
        Model::validateRequired('accountPrivilegeInfo', $this->accountPrivilegeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPrivilegeInfo) {
            $res['AccountPrivilegeInfo'] = [];
            if (null !== $this->accountPrivilegeInfo && \is_array($this->accountPrivilegeInfo)) {
                $n = 0;
                foreach ($this->accountPrivilegeInfo as $item) {
                    $res['AccountPrivilegeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AccountPrivilegeInfo'])) {
            if (!empty($map['AccountPrivilegeInfo'])) {
                $model->accountPrivilegeInfo = [];
                $n                           = 0;
                foreach ($map['AccountPrivilegeInfo'] as $item) {
                    $model->accountPrivilegeInfo[$n++] = null !== $item ? accountPrivilegeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

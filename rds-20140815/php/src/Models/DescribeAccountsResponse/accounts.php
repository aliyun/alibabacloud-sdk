<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponse\accounts\DBInstanceAccount;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description DBInstanceAccount
     *
     * @var array
     */
    public $DBInstanceAccount;
    protected $_name = [
        'DBInstanceAccount' => 'DBInstanceAccount',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceAccount', $this->DBInstanceAccount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceAccount) {
            $res['DBInstanceAccount'] = [];
            if (null !== $this->DBInstanceAccount && \is_array($this->DBInstanceAccount)) {
                $n = 0;
                foreach ($this->DBInstanceAccount as $item) {
                    $res['DBInstanceAccount'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DBInstanceAccount'])) {
            if (!empty($map['DBInstanceAccount'])) {
                $model->DBInstanceAccount = [];
                $n                        = 0;
                foreach ($map['DBInstanceAccount'] as $item) {
                    $model->DBInstanceAccount[$n++] = null !== $item ? DBInstanceAccount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
